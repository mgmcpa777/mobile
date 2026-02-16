<?php
$userAgent = $_SERVER['HTTP_USER_AGENT'];

// iOS devices (iPhone, iPad, iPod)
if (preg_match('/iPhone|iPad|iPod/i', $userAgent)) {
    header("Location: index_ios.html");
    exit;
}

// Android devices
if (preg_match('/Android/i', $userAgent)) {
    header("Location: index_android.html");
    exit;
}

// Fallback (desktop or unknown)
header("Location: index_android.html");
exit;
?>
