<?php
/**
 * mailer.php — Centralised SMTP mailer using PHPMailer
 * Works for all forms on ArtisticWebServices (Hostinger shared hosting)
 *
 * Usage:
 *   require_once __DIR__ . '/includes/mailer.php';
 *   $ok = sendMail([
 *       'to'       => 'info@artisticwebservices.com',  // optional, defaults to MAIL_TO
 *       'reply_to' => $userEmail,
 *       'subject'  => 'New Inquiry',
 *       'fields'   => ['Name' => $name, 'Email' => $email, 'Message' => $msg],
 *       'source'   => 'Contact Page',                  // optional label
 *   ]);
 */

// Load PHPMailer autoloader first (must come before smtp-config uses PHPMailer constants)
$_vendor = __DIR__ . '/../vendor/autoload.php';
$_vendor_ok = file_exists($_vendor);
if ($_vendor_ok) {
    require_once $_vendor;
}
unset($_vendor);

// Load SMTP credentials (protected inside includes/, already web-blocked by .htaccess)
if (!defined('SMTP_HOST')) {
    require_once __DIR__ . '/smtp-config.php';
}

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

if (!$_vendor_ok) {
    error_log('[Mailer] PHPMailer not found. Run: composer install');
    // Fallback to PHP mail() so the site does not break completely
    if (!function_exists('sendMail')) {
    function sendMail(array $data): bool {
        $to      = $data['to']      ?? (defined('MAIL_TO') ? MAIL_TO : '');
        $subject = $data['subject'] ?? 'New Inquiry';
        $fields  = $data['fields']  ?? [];
        $body    = '';
        foreach ($fields as $label => $value) {
            $body .= "$label: $value\n";
        }
        $from    = defined('SMTP_FROM_EMAIL') ? SMTP_FROM_EMAIL : 'noreply@artisticwebservices.com';
        $headers = "From: $from\r\n"
                 . "Reply-To: " . ($data['reply_to'] ?? $from) . "\r\n"
                 . "Content-Type: text/plain; charset=UTF-8";
        return @mail($to, $subject, $body, $headers);
    }
    } // end function_exists check
    unset($_vendor_ok);
    return;
}
unset($_vendor_ok);

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
if (!function_exists('sendMail')):
function sendMail(array $data): bool
{
    $mail = new PHPMailer(true);

    try {
        // ── Server settings ─────────────────────────────────────────────
        if (defined('SMTP_DEBUG') && SMTP_DEBUG) {
            $mail->SMTPDebug = SMTP::DEBUG_SERVER;
        }
        $mail->isSMTP();
        $mail->Host       = SMTP_HOST;
        $mail->SMTPAuth   = true;
        $mail->Username   = SMTP_USERNAME;
        $mail->Password   = SMTP_PASSWORD;
        $mail->SMTPSecure = SMTP_SECURE;
        $mail->Port       = SMTP_PORT;
        $mail->CharSet    = 'UTF-8';

        // ── From / To ────────────────────────────────────────────────────
        $mail->setFrom(SMTP_FROM_EMAIL, SMTP_FROM_NAME);
        $mail->addAddress($data['to'] ?? MAIL_TO);
        if (!empty($data['reply_to'])) {
            $mail->addReplyTo($data['reply_to']);
        }

        // ── Subject ──────────────────────────────────────────────────────
        $mail->Subject = $data['subject'] ?? 'New Inquiry — ArtisticWebServices';

        // ── Body ─────────────────────────────────────────────────────────
        if (!empty($data['html'])) {
            $mail->isHTML(true);
            $mail->Body    = $data['html'];
            $mail->AltBody = $data['text'] ?? strip_tags($data['html']);
        } else {
            // Auto-build a clean HTML email from the $fields array
            $fields  = $data['fields'] ?? [];
            $source  = htmlspecialchars($data['source'] ?? 'Website Form');
            $subject = htmlspecialchars($mail->Subject);
            $rows    = '';
            foreach ($fields as $label => $value) {
                $lbl = htmlspecialchars($label);
                $val = nl2br(htmlspecialchars((string)$value));
                $rows .= "
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
            }

            $html = <<<HTML
<!DOCTYPE html>
<html lang="en">
<head><meta charset="UTF-8"><meta name="viewport" content="width=device-width,initial-scale=1"></head>
<body style="margin:0;padding:0;background:#f0f4f8;font-family:Arial,Helvetica,sans-serif;">
  <table width="100%" cellpadding="0" cellspacing="0" style="background:#f0f4f8;padding:32px 16px;">
    <tr><td align="center">
      <table width="620" cellpadding="0" cellspacing="0" style="background:#ffffff;border-radius:12px;
             overflow:hidden;box-shadow:0 4px 24px rgba(0,0,0,.08);max-width:620px;">

        <!-- Header -->
        <tr>
          <td style="background:linear-gradient(135deg,#1a1a2e 0%,#16213e 60%,#0f3460 100%);
                     padding:32px 32px 28px;text-align:center;">
            <p style="margin:0 0 6px;font-size:22px;font-weight:700;color:#ffffff;letter-spacing:-.3px;">
              ArtisticWebServices
            </p>
            <p style="margin:0;font-size:13px;color:#94a3b8;">New form submission received</p>
          </td>
        </tr>

        <!-- Source label -->
        <tr>
          <td style="padding:20px 32px 0;text-align:center;">
            <span style="display:inline-block;background:#eff6ff;color:#3b82f6;
                         font-size:12px;font-weight:600;padding:4px 14px;border-radius:20px;
                         letter-spacing:.4px;text-transform:uppercase;">
              {$source}
            </span>
          </td>
        </tr>

        <!-- Fields table -->
        <tr>
          <td style="padding:24px 32px;">
            <table width="100%" cellpadding="0" cellspacing="0"
                   style="border:1px solid #e2e8f0;border-radius:8px;overflow:hidden;border-collapse:collapse;">
              {$rows}
            </table>
          </td>
        </tr>

        <!-- Footer -->
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

            $plain = '';
            foreach ($fields as $label => $value) {
                $plain .= "{$label}: {$value}\n";
            }

            $mail->isHTML(true);
            $mail->Body    = $html;
            $mail->AltBody = "New submission from {$source}\n\n{$plain}";
        }

        $mail->send();
        return true;

    } catch (Exception $e) {
        error_log('[Mailer SMTP Error] ' . $mail->ErrorInfo);
        return false;
    }
}
endif;
