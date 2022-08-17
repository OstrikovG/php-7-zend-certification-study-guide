<?php
function callback($notification_code,
                  $severity,
                  $message,
                  $message_code,
                  $bytes_transferred,
                  $bytes_max)
{
    if ($notification_code == STREAM_NOTIFY_FILE_SIZE_IS) {
        if ($bytes_max > 1024) {
            die("Download too big!");
        }
    }
}
$context = stream_context_create();
stream_context_set_params($context,
    ["notification" => "callback"]);
$handle = fopen('http://www.example.com', 'r', false, $context);
fpassthru($handle);