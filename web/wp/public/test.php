<?php

// If behind a reverse proxy that sets custom headers
$protocol = $_SERVER['HTTP_X_FORWARDED_PROTO'] ?? (isset($_SERVER['HTTPS']) ? 'https' : 'http');
$host = $_SERVER['HTTP_X_FORWARDED_HOST'] ?? $_SERVER['HTTP_HOST'];

echo $_SERVER['HTTP_X_FORWARDED_PROTO'] . "\n";
echo $_SERVER['HTTP_X_FORWARDED_HOST'] . "\n";
?>
