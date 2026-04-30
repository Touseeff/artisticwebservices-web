<?php
/**
 * smtp-debug.php — TEMPORARY SMTP diagnostic (DELETE AFTER USE)
 * Access via: https://artisticwebservices.com/smtp-debug
 *
 * !! DELETE THIS FILE FROM THE SERVER ONCE DONE !!
 */

// Basic auth guard — must match token in URL: /smtp-debug?token=aws2026debug
define('DEBUG_TOKEN', 'aws2026debug');
if (($_GET['token'] ?? '') !== DEBUG_TOKEN) {
    http_response_code(403);
    exit('Forbidden. Append ?token=aws2026debug to the URL.');
}

header('Content-Type: text/html; charset=UTF-8');
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>SMTP Debug — ArtisticWebServices</title>
<style>
  body  { font-family: monospace; background: #0f172a; color: #e2e8f0; padding: 32px; line-height: 1.6; }
  h2    { color: #38bdf8; border-bottom: 1px solid #334155; padding-bottom: 8px; }
  .ok   { color: #4ade80; }
  .fail { color: #f87171; }
  .warn { color: #fbbf24; }
  .box  { background: #1e293b; border: 1px solid #334155; border-radius: 8px; padding: 16px; margin: 16px 0; white-space: pre-wrap; word-break: break-all; }
  table { border-collapse: collapse; width: 100%; }
  td, th { padding: 8px 14px; border: 1px solid #334155; text-align: left; }
  th    { background: #1e293b; color: #94a3b8; }
</style>
</head>
<body>

<?php
// ── 1. PHP VERSION ───────────────────────────────────────────────────────────
echo "<h2>1. PHP Environment</h2>";
echo "<div class='box'>";
echo "PHP Version: " . phpversion() . "\n";
echo "Server: " . ($_SERVER['SERVER_SOFTWARE'] ?? 'unknown') . "\n";
echo "Document Root: " . ($_SERVER['DOCUMENT_ROOT'] ?? 'unknown') . "\n";
echo "Script: " . ($_SERVER['SCRIPT_FILENAME'] ?? 'unknown') . "\n";

// Check required functions
$funcs = ['stream_socket_client', 'openssl_open', 'str_starts_with'];
foreach ($funcs as $fn) {
    $exists = function_exists($fn);
    echo "function_exists('{$fn}'): " . ($exists ? "<span class='ok'>YES</span>" : "<span class='fail'>NO — this will break SMTP!</span>") . "\n";
}
echo "</div>";

// ── 2. .ENV FILE ─────────────────────────────────────────────────────────────
echo "<h2>2. .env File</h2>";
$env_path = __DIR__ . '/.env';
echo "<div class='box'>";
if (file_exists($env_path)) {
    echo "<span class='ok'>.env EXISTS at: {$env_path}</span>\n";
    $contents = file_get_contents($env_path);
    if ($contents === false) {
        echo "<span class='fail'>Cannot read .env (permission error)</span>\n";
    } else {
        // Show keys (not values) to avoid exposing passwords
        $lines = explode("\n", $contents);
        foreach ($lines as $line) {
            $line = trim($line);
            if ($line === '' || $line[0] === '#') {
                echo htmlspecialchars($line) . "\n";
                continue;
            }
            if (strpos($line, '=') !== false) {
                [$key, $val] = explode('=', $line, 2);
                $key = trim($key);
                $val = trim($val);
                $isSecret = stripos($key, 'PASS') !== false || stripos($key, 'PASSWORD') !== false;
                $display = $isSecret ? str_repeat('*', strlen($val)) : htmlspecialchars($val);
                $empty = ($val === '') ? " <span class='fail'>← EMPTY!</span>" : "";
                echo htmlspecialchars($key) . " = " . $display . $empty . "\n";
            } else {
                echo htmlspecialchars($line) . "\n";
            }
        }
    }
} else {
    echo "<span class='fail'>.env NOT FOUND at: {$env_path}</span>\n";
    echo "<span class='warn'>SMTP credentials will fall back to empty strings — all sends will fail!</span>\n";
}
echo "</div>";

// ── 3. LOAD CONFIG AND SHOW CONSTANTS ────────────────────────────────────────
echo "<h2>3. Loaded SMTP Constants</h2>";
require_once __DIR__ . '/includes/config.php';
require_once __DIR__ . '/includes/smtp-config.php';
echo "<div class='box'><table>";
echo "<tr><th>Constant</th><th>Value</th><th>Status</th></tr>";

$checks = [
    'SMTP_HOST'       => ['expect' => 'smtp.hostinger.com'],
    'SMTP_PORT'       => ['expect' => '465'],
    'SMTP_SECURE'     => ['expect' => 'ssl'],
    'SMTP_USERNAME'   => ['secret' => false],
    'SMTP_PASSWORD'   => ['secret' => true],
    'SMTP_FROM_EMAIL' => ['secret' => false, 'email' => true],
    'SMTP_FROM_NAME'  => ['secret' => false],
    'MAIL_TO'         => ['secret' => false, 'email' => true],
    'SMTP_LOCAL_DEV'  => ['secret' => false],
    'SMTP_DEBUG'      => ['secret' => false],
];

foreach ($checks as $const => $opts) {
    $defined = defined($const);
    $value   = $defined ? constant($const) : null;
    $display = !$defined ? '<span class="fail">NOT DEFINED</span>'
             : (($opts['secret'] ?? false) ? str_repeat('•', max(8, strlen((string)$value))) : htmlspecialchars((string)$value));

    $status = '<span class="ok">OK</span>';
    if (!$defined) {
        $status = '<span class="fail">MISSING</span>';
    } elseif ((string)$value === '' && $const !== 'SMTP_DEBUG') {
        $status = '<span class="fail">EMPTY — will fail!</span>';
    } elseif (isset($opts['email']) && $opts['email'] && !filter_var((string)$value, FILTER_VALIDATE_EMAIL)) {
        $status = '<span class="fail">INVALID EMAIL FORMAT</span>';
    } elseif (isset($opts['expect']) && (string)$value !== $opts['expect']) {
        $status = '<span class="warn">Unexpected value (expected: ' . htmlspecialchars($opts['expect']) . ')</span>';
    }

    echo "<tr><td>{$const}</td><td>{$display}</td><td>{$status}</td></tr>";
}
echo "</table>";

if (defined('SMTP_LOCAL_DEV') && SMTP_LOCAL_DEV) {
    echo "\n<span class='warn'>⚠ SMTP_LOCAL_DEV=true — emails are written to logs/mail-dev.log, NOT sent. This is why forms show success but nothing arrives in inbox.</span>";
}
echo "</div>";

// ── 4. SOCKET CONNECTION TEST ────────────────────────────────────────────────
echo "<h2>4. SMTP Socket Connection Test</h2>";
echo "<div class='box'>";
if (!defined('SMTP_HOST') || !defined('SMTP_PORT') || !defined('SMTP_SECURE')) {
    echo "<span class='fail'>Cannot test — SMTP constants not loaded.</span>";
} else {
    $host    = SMTP_SECURE === 'ssl' ? 'ssl://' . SMTP_HOST . ':' . SMTP_PORT : 'tcp://' . SMTP_HOST . ':' . SMTP_PORT;
    $timeout = 10;
    $errno = 0; $errstr = '';
    echo "Connecting to: {$host} (timeout {$timeout}s)...\n";

    $ctx = stream_context_create(['ssl' => [
        'verify_peer'      => false,
        'verify_peer_name' => false,
    ]]);
    $socket = @stream_socket_client($host, $errno, $errstr, $timeout, STREAM_CLIENT_CONNECT, $ctx);

    if (!$socket) {
        echo "<span class='fail'>CONNECTION FAILED: {$errstr} (errno {$errno})</span>\n";
        echo "<span class='warn'>→ Port " . SMTP_PORT . " is blocked on this server. Try switching to SMTP_PORT=587 / SMTP_SECURE=tls in .env</span>\n";
    } else {
        $greeting = fgets($socket, 515);
        echo "<span class='ok'>CONNECTED OK</span> — Server greeting: " . htmlspecialchars(trim($greeting)) . "\n";

        // Try EHLO
        fwrite($socket, "EHLO " . ($_SERVER['HTTP_HOST'] ?? 'artisticwebservices.com') . "\r\n");
        $ehlo = '';
        while ($line = fgets($socket, 515)) {
            $ehlo .= $line;
            if (isset($line[3]) && $line[3] !== '-') break;
        }
        echo "EHLO response: " . htmlspecialchars(trim($ehlo)) . "\n";

        // Try AUTH LOGIN initiation only (don't send creds)
        fwrite($socket, "AUTH LOGIN\r\n");
        $auth = fgets($socket, 515);
        echo "AUTH LOGIN response: " . htmlspecialchars(trim($auth)) . "\n";
        if (str_starts_with(trim($auth), '334')) {
            echo "<span class='ok'>SMTP is accepting AUTH LOGIN — credentials can be sent</span>\n";
        } else {
            echo "<span class='fail'>SMTP is NOT accepting AUTH LOGIN</span>\n";
        }

        // Abort
        fwrite($socket, "*\r\n");
        fclose($socket);
    }
}
echo "</div>";

// ── 5. MAIL-FAILED.LOG ───────────────────────────────────────────────────────
echo "<h2>5. mail-failed.log (last 10 entries)</h2>";
$log_file = __DIR__ . '/logs/mail-failed.log';
echo "<div class='box'>";
if (!file_exists($log_file)) {
    echo "<span class='warn'>Log file not found: {$log_file}</span>\n";
    echo "(Either no failures have been logged yet, or the logs/ directory doesn't exist.)\n";
    echo "logs/ dir exists: " . (is_dir(__DIR__ . '/logs') ? "<span class='ok'>YES</span>" : "<span class='fail'>NO — PHP cannot write failure logs</span>") . "\n";
} else {
    $lines = file($log_file, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    if ($lines === false || count($lines) === 0) {
        echo "<span class='warn'>Log file is empty.</span>\n";
    } else {
        $last10 = array_slice($lines, -10);
        foreach ($last10 as $line) {
            $decoded = json_decode($line, true);
            if ($decoded) {
                echo json_encode($decoded, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE) . "\n---\n";
            } else {
                echo htmlspecialchars($line) . "\n";
            }
        }
    }
}
echo "</div>";

// ── 6. PHP ERROR LOG ─────────────────────────────────────────────────────────
echo "<h2>6. PHP Error Log (last 20 [Mailer] lines)</h2>";
$php_log = ini_get('error_log');
echo "<div class='box'>";
echo "error_log path: " . ($php_log ?: '<span class=\"warn\">not configured</span>') . "\n";
if ($php_log && file_exists($php_log)) {
    $lines = file($php_log, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    if ($lines) {
        $mailer_lines = array_filter($lines, fn($l) => strpos($l, '[Mailer]') !== false || strpos($l, 'mailer') !== false || strpos($l, 'SMTP') !== false);
        $last = array_slice(array_values($mailer_lines), -20);
        if ($last) {
            foreach ($last as $l) echo htmlspecialchars($l) . "\n";
        } else {
            echo "<span class='warn'>No [Mailer] lines found in error log.</span>\n";
        }
    }
} else {
    echo "<span class='warn'>PHP error log not accessible from here. Check server's error log via cPanel → Error Logs.</span>\n";
}
echo "</div>";
?>

<div style="background:#450a0a;border:1px solid #dc2626;border-radius:8px;padding:16px;margin-top:32px;color:#fca5a5;">
    <strong>⚠ SECURITY REMINDER:</strong> Delete this file from the server immediately after reviewing the output above.<br>
    FTP/cPanel → delete <code>smtp-debug.php</code>
</div>

</body>
</html>
