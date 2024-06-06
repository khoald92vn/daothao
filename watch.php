<?php
session_start();

if (!isset($_SESSION['authenticated']) || $_SESSION['authenticated'] !== true) {
    header("Location: index.html");
    exit();
}
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Video Quà Tặng</title>
</head>
<body>
    <video width="100%" controls>
        <source src="video.mp4" type="video/mp4">
        Trình duyệt của bạn không hỗ trợ thẻ video.
    </video>
</body>
</html>
