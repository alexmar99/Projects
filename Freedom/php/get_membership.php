<?php
session_start();
include 'db.php';

if (!isset($_SESSION['username'])) {
    header("Location: /sites/login.php");
    exit();
}

$username = $_SESSION['username'];

$stmt = $conn->prepare("SELECT membership FROM Users WHERE username = ?");
if ($stmt === false) {
    die('prepare() failed: ' . htmlspecialchars($conn->error));
}

if (!$stmt->bind_param("s", $username)) {
    die('bind_param() failed: ' . htmlspecialchars($stmt->error));
}

if (!$stmt->execute()) {
    die('execute() failed: ' . htmlspecialchars($stmt->error));
}

$result = $stmt->get_result();
if ($result && $result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $_SESSION['membership'] = $row['membership'];
} else {
    die("No membership found for this user.");
}

$stmt->close();
header("Location: /php/make_booking.php");
exit();
?>

