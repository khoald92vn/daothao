<?php
session_start();

$correctPin = '1706';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['pin'])) {
    $pin = $_POST['pin'];
    if ($pin === $correctPin) {
        $_SESSION['authenticated'] = true;
        header('Location: watch.php');
        exit();
    } else {
        echo "<script>alert('Sai rồi hớ nì.'); window.location.href='index.html';</script>";
    }
} else {
    header('Location: index.html');
    exit();
}
?>
