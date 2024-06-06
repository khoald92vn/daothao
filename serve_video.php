<?php
session_start();

if (!isset($_SESSION['authenticated']) || $_SESSION['authenticated'] !== true) {
    header('HTTP/1.1 403 Forbidden');
    exit('Access denied');
}

$file = '/var/www/private/video.mp4'; // Adjust this path to your actual video location

if (file_exists($file)) {
    header('Content-Type: video/mp4');
    header('Content-Length: ' . filesize($file));
    readfile($file);
    exit();
} else {
    header('HTTP/1.1 404 Not Found');
    exit('File not found');
}
?>
