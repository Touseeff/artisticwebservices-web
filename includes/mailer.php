<?php
/**
 * mailer.php — Native PHP SMTP mailer (no Composer / no PHPMailer)
 * Connects directly to Hostinger SMTP via SSL socket (port 465).
 *
 * Usage:
 *   require_once __DIR__ . '/includes/mailer.php';
 *   $ok = sendMail([
 *       'to'       => 'info@artisticwebservices.com',
 *       'reply_to' => $userEmail,
 *       'subject'  => 'New Inquiry',
 *       'fields'   => ['Name' => $name, 'Email' => $email, 'Message' => $msg],
 *       'source'   => 'Contact Page',
 *   ]);
 */

if (!defined('SMTP_HOST')) {
    require_once __DIR__ . '/smtp-config.php';
}

if (function_exists('sendMail')) {
    return;
}

// ── Internal: send a command and read the SMTP response ───────────────────────
function _smtp_cmd($socket, string $cmd): string
{
    fwrite($socket, $cmd . "\r\n");
    $response = '';
    while ($line = fgets($socket, 515)) {
        $response .= $line;
        // Response lines ending without a dash mean it is the last line
        if (isset($line[3]) && $line[3] !== '-') {
            break;
        }
    }
    return $response;
}

// ── Internal: open SSL socket and run the SMTP conversation ──────────────────
function _smtp_send(string $to, string $from, string $fromName, string $replyTo,
                    string $subject, string $htmlBody, string $plainBody): bool
{
    $host    = SMTP_HOST;
    $port    = SMTP_PORT;       // 465 (SSL) or 587 (STARTTLS)
    $secure  = SMTP_SECURE;     // 'ssl' or 'tls'
    $user    = SMTP_USERNAME;
    $pass    = SMTP_PASSWORD;
    $timeout = 15;

    // Build connection address
    $address = ($secure === 'ssl') ? "ssl://{$host}:{$port}" : "tcp://{$host}:{$port}";

    $ctx = stream_context_create([
        'ssl' => [
            'verify_peer'       => false,
            'verify_peer_name'  => false,
            'allow_self_signed' => true,
        ],
    ]);

    $errno  = 0;
    $errstr = '';
    $socket = @stream_socket_client($address, $errno, $errstr, $timeout, STREAM_CLIENT_CONNECT, $ctx);

    if (!$socket) {
        error_log("[Mailer] Socket connect failed ({$address}): {$errstr} ({$errno})");
        return false;
    }

    stream_set_timeout($socket, $timeout);

    // Read server greeting
    fgets($socket, 515);

    // EHLO
    $ehlo = _smtp_cmd($socket, 'EHLO ' . gethostname());
    if (!str_starts_with(trim($ehlo), '2')) {
        error_log("[Mailer] EHLO failed: {$ehlo}");
        fclose($socket);
        return false;
    }

    // STARTTLS upgrade (port 587)
    if ($secure === 'tls') {
        $tls = _smtp_cmd($socket, 'STARTTLS');
        if (!str_starts_with(trim($tls), '2')) {
            error_log("[Mailer] STARTTLS failed: {$tls}");
            fclose($socket);
            return false;
        }
        stream_socket_enable_crypto($socket, true, STREAM_CRYPTO_METHOD_TLS_CLIENT);
        _smtp_cmd($socket, 'EHLO ' . gethostname()); // re-EHLO after STARTTLS
    }

    // AUTH LOGIN
    _smtp_cmd($socket, 'AUTH LOGIN');
    _smtp_cmd($socket, base64_encode($user));
    $authResp = _smtp_cmd($socket, base64_encode($pass));
    if (!str_starts_with(trim($authResp), '2')) {
        error_log("[Mailer] AUTH failed: {$authResp}");
        fclose($socket);
        return false;
    }

    // MAIL FROM
    $fromResp = _smtp_cmd($socket, "MAIL FROM:<{$from}>");
    if (!str_starts_with(trim($fromResp), '2')) {
        error_log("[Mailer] MAIL FROM failed: {$fromResp}");
        fclose($socket);
        return false;
    }

    // RCPT TO
    $rcptResp = _smtp_cmd($socket, "RCPT TO:<{$to}>");
    if (!str_starts_with(trim($rcptResp), '2')) {
        error_log("[Mailer] RCPT TO failed: {$rcptResp}");
        fclose($socket);
        return false;
    }

    // DATA
    _smtp_cmd($socket, 'DATA');

    // Build MIME message
    $boundary = '----=_Part_' . md5(uniqid('', true));
    $date     = date('r');
    $msgId    = '<' . uniqid('', true) . '@artisticwebservices.com>';

    $headers  = "Date: {$date}\r\n";
    $headers .= "Message-ID: {$msgId}\r\n";
    $headers .= "From: =?UTF-8?B?" . base64_encode($fromName) . "?= <{$from}>\r\n";
    $headers .= "To: <{$to}>\r\n";
    $headers .= "Reply-To: <{$replyTo}>\r\n";
    $headers .= "Subject: =?UTF-8?B?" . base64_encode($subject) . "?=\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: multipart/alternative; boundary=\"{$boundary}\"\r\n";
    $headers .= "X-Mailer: PHP-NativeSMTP/1.0\r\n";

    $body  = "--{$boundary}\r\n";
    $body .= "Content-Type: text/plain; charset=UTF-8\r\n";
    $body .= "Content-Transfer-Encoding: base64\r\n\r\n";
    $body .= chunk_split(base64_encode($plainBody)) . "\r\n";

    $body .= "--{$boundary}\r\n";
    $body .= "Content-Type: text/html; charset=UTF-8\r\n";
    $body .= "Content-Transfer-Encoding: base64\r\n\r\n";
    $body .= chunk_split(base64_encode($htmlBody)) . "\r\n";

    $body .= "--{$boundary}--\r\n";

    // Dot-stuff: lines that start with a dot need an extra dot
    $message = $headers . "\r\n" . $body;
    $message = str_replace("\r\n.", "\r\n..", $message);

    fwrite($socket, $message . "\r\n.\r\n");

    // Read DATA response
    $dataResp = '';
    while ($line = fgets($socket, 515)) {
        $dataResp .= $line;
        if (isset($line[3]) && $line[3] !== '-') break;
    }

    _smtp_cmd($socket, 'QUIT');
    fclose($socket);

    if (!str_starts_with(trim($dataResp), '2')) {
        error_log("[Mailer] DATA send failed: {$dataResp}");
        return false;
    }

    return true;
}

// ── Public API ────────────────────────────────────────────────────────────────
/**
 * Send a transactional email via Hostinger SMTP.
 *
 * @param array $data {
 *   string      $to        Recipient address (defaults to MAIL_TO)
 *   string      $reply_to  Reply-To address (usually the submitter's email)
 *   string      $subject   Email subject line
 *   array       $fields    Associative array of label => value for the email body
 *   string      $source    Human-readable page/form name shown in the email header
 *   string|null $html      Raw HTML body (overrides auto-generated body from $fields)
 *   string|null $text      Raw plain-text body (overrides auto-generated)
 * }
 * @return bool True on success, false on failure
 */
function sendMail(array $data): bool
{
    $to      = $data['to']      ?? (defined('MAIL_TO') ? MAIL_TO : '');
    $replyTo = $data['reply_to'] ?? (defined('SMTP_FROM_EMAIL') ? SMTP_FROM_EMAIL : $to);
    $subject = $data['subject'] ?? 'New Inquiry — ArtisticWebServices';
    $from    = defined('SMTP_FROM_EMAIL') ? SMTP_FROM_EMAIL : '';
    $name    = defined('SMTP_FROM_NAME')  ? SMTP_FROM_NAME  : 'ArtisticWebServices';

    // ── Local dev: write to log file instead of sending real email ────────────
    if (defined('SMTP_LOCAL_DEV') && SMTP_LOCAL_DEV) {
        $logDir = __DIR__ . '/../logs';
        if (!is_dir($logDir)) { @mkdir($logDir, 0755, true); }
        $entry  = date('[Y-m-d H:i:s]') . " TO:{$to} SUBJ:{$subject}\n";
        foreach (($data['fields'] ?? []) as $k => $v) {
            $entry .= "  {$k}: {$v}\n";
        }
        file_put_contents($logDir . '/mail-dev.log', $entry . "\n", FILE_APPEND | LOCK_EX);
        return true;
    }

    // ── Build HTML body ───────────────────────────────────────────────────────
    if (!empty($data['html'])) {
        $htmlBody  = $data['html'];
        $plainBody = $data['text'] ?? strip_tags($data['html']);
    } else {
        $fields = $data['fields'] ?? [];
        $source = htmlspecialchars($data['source'] ?? 'Website Form');
        $rows   = '';
        $plain  = '';

        foreach ($fields as $label => $value) {
            $lbl    = htmlspecialchars($label);
            $val    = nl2br(htmlspecialchars((string) $value));
            $rows  .= "
                <tr>
                    <td style=\"padding:10px 16px;font-weight:600;color:#1a1a2e;
                               background:#f4f6fb;white-space:nowrap;
                               border-bottom:1px solid #e2e8f0;width:160px;\">
                        {$lbl}
                    </td>
                    <td style=\"padding:10px 16px;color:#374151;
                               border-bottom:1px solid #e2e8f0;\">
                        {$val}
                    </td>
                </tr>";
            $plain .= "{$label}: {$value}\n";
        }

        $htmlBody = <<<HTML
<!DOCTYPE html>
<html lang="en">
<head><meta charset="UTF-8"><meta name="viewport" content="width=device-width,initial-scale=1"></head>
<body style="margin:0;padding:0;background:#f0f4f8;font-family:Arial,Helvetica,sans-serif;">
  <table width="100%" cellpadding="0" cellspacing="0" style="background:#f0f4f8;padding:32px 16px;">
    <tr><td align="center">
      <table width="620" cellpadding="0" cellspacing="0" style="background:#ffffff;border-radius:12px;
             overflow:hidden;box-shadow:0 4px 24px rgba(0,0,0,.08);max-width:620px;">
        <tr>
          <td style="background:linear-gradient(135deg,#1a1a2e 0%,#16213e 60%,#0f3460 100%);
                     padding:32px 32px 28px;text-align:center;">
            <p style="margin:0 0 6px;font-size:22px;font-weight:700;color:#ffffff;letter-spacing:-.3px;">
              ArtisticWebServices
            </p>
            <p style="margin:0;font-size:13px;color:#94a3b8;">New form submission received</p>
          </td>
        </tr>
        <tr>
          <td style="padding:20px 32px 0;text-align:center;">
            <span style="display:inline-block;background:#eff6ff;color:#3b82f6;
                         font-size:12px;font-weight:600;padding:4px 14px;border-radius:20px;
                         letter-spacing:.4px;text-transform:uppercase;">
              {$source}
            </span>
          </td>
        </tr>
        <tr>
          <td style="padding:24px 32px;">
            <table width="100%" cellpadding="0" cellspacing="0"
                   style="border:1px solid #e2e8f0;border-radius:8px;overflow:hidden;border-collapse:collapse;">
              {$rows}
            </table>
          </td>
        </tr>
        <tr>
          <td style="padding:0 32px 28px;text-align:center;">
            <p style="margin:0;font-size:12px;color:#94a3b8;">
              This email was sent automatically from your website contact form.<br>
              &copy; 2026 ArtisticWebServices — 26 Broadway, Suite 934, New York, NY 10004
            </p>
          </td>
        </tr>
      </table>
    </td></tr>
  </table>
</body>
</html>
HTML;
        $plainBody = "New submission from {$source}\n\n{$plain}";
    }

    return _smtp_send($to, $from, $name, $replyTo, $subject, $htmlBody, $plainBody);
}
