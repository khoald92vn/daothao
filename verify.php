<?php
session_start();

$correctPin = '1706'; // Mã PIN đúng, bạn có thể thay đổi mã này

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $pin = $_POST['pin'];

    if ($pin === $correctPin) {
        $_SESSION['authenticated'] = true;
        header("Location: watch.php");
        exit();
    } else {
        echo "<script>alert('Sai rồi hớ nì.'); window.location.href='index.html';</script>";
    }
}
?>
