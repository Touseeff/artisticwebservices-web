<?php
/**
 * includes/rate-limit.php — File-Based Sliding Window Rate Limiter
 *
 * Tracks request counts per IP per action using flat JSON files in
 * logs/rate-limit/. No database required.
 *
 * Usage:
 *   require_once __DIR__ . '/includes/rate-limit.php';
 *   rate_limit_check('contact_form');          // 5 per 60 s (defaults)
 *   rate_limit_check('contact_form', 3, 300);  // 3 per 5 minutes
 *
 * Returns:
 *   false  → under the limit, request is allowed (continue normally)
 *   true   → over the limit (function already sent 429 + JSON and called exit)
 */

// ── Storage directory ─────────────────────────────────────────────────────────
define('RATE_LIMIT_DIR', __DIR__ . '/../logs/rate-limit');

// Create storage directory if it doesn't exist
if (!is_dir(RATE_LIMIT_DIR)) {
    mkdir(RATE_LIMIT_DIR, 0755, true);
}

/**
 * rate_limit_check()
 *
 * Sliding-window rate limiter: counts how many timestamps for this IP+action
 * fall within the last $window seconds. If the count exceeds $limit, it blocks
 * the request with HTTP 429.  Expired entries are pruned on every call.
 *
 * @param string $action  Identifier for the action (e.g. 'contact_form')
 * @param int    $limit   Maximum allowed requests within the window (default 5)
 * @param int    $window  Time window in seconds (default 60)
 *
 * @return bool  false = allowed, true = blocked (already exited on block)
 */
function rate_limit_check(string $action, int $limit = 5, int $window = 60): bool
{
    // ── Sanitize IP address ───────────────────────────────────────────────────
    $raw_ip = $_SERVER['REMOTE_ADDR'] ?? '0.0.0.0';

    // Validate IPv4 or IPv6; fall back to a safe placeholder on invalid input
    if (filter_var($raw_ip, FILTER_VALIDATE_IP)) {
        $safe_ip = $raw_ip;
    } else {
        $safe_ip = 'invalid';
    }

    // ── Build a safe file name from IP + action ───────────────────────────────
    // Replace characters that are not safe in filenames
    $safe_action  = preg_replace('/[^a-z0-9_\-]/i', '_', $action);
    $ip_slug      = str_replace([':', '.'], ['_', '_'], $safe_ip);
    $storage_file = RATE_LIMIT_DIR . '/' . $ip_slug . '__' . $safe_action . '.json';

    // ── Read existing timestamps ──────────────────────────────────────────────
    $now        = time();
    $timestamps = [];

    if (file_exists($storage_file)) {
        $raw = @file_get_contents($storage_file);
        if ($raw !== false) {
            $decoded = json_decode($raw, true);
            if (is_array($decoded)) {
                $timestamps = $decoded;
            }
        }
    }

    // ── Prune expired entries (sliding window) ────────────────────────────────
    $cutoff     = $now - $window;
    $timestamps = array_values(array_filter($timestamps, function (int $ts) use ($cutoff): bool {
        return $ts > $cutoff;
    }));

    // ── Check limit ───────────────────────────────────────────────────────────
    if (count($timestamps) >= $limit) {
        // Calculate when the oldest request will fall outside the window
        $oldest    = min($timestamps);
        $retry_after = max(1, ($oldest + $window) - $now);

        http_response_code(429);
        header('Content-Type: application/json; charset=UTF-8');
        header('Retry-After: ' . $retry_after);
        echo json_encode([
            'error'       => 'Too Many Requests',
            'message'     => 'You have exceeded the allowed number of requests. Please wait and try again.',
            'retry_after' => $retry_after,
        ]);
        exit;
    }

    // ── Record this request ───────────────────────────────────────────────────
    $timestamps[] = $now;

    // Write back atomically using a temp file + rename
    $tmp = $storage_file . '.tmp.' . getmypid();
    if (@file_put_contents($tmp, json_encode($timestamps), LOCK_EX) !== false) {
        @rename($tmp, $storage_file);
    }

    return false; // allowed
}
