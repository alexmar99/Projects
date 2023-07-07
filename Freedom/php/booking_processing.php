<?php
session_start();
include 'db.php';

if (!isset($_SESSION['username']) || !isset($_SESSION['membership']) || !isset($_SESSION['hotel_names'])) {
    header("Location: /sites/login.php");
    exit();
}

$username = $_SESSION['username'];
$membership = $_SESSION['membership'];
$hotel_names = $_SESSION['hotel_names'];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $hotel_id = $_POST['hotel_id'];
	$hotel_name = $_SESSION['hotel_names'][$hotel_id];
    $check_in_date = $_POST['check_in_date'];
    $check_out_date = $_POST['check_out_date'];
    $payment_method = $_POST['payment_method'];

    $stmt = $conn->prepare("INSERT INTO Bookings (hotel_name, check_in_date, check_out_date, username, membership, payment_method) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssss", $hotel_name, $check_in_date, $check_out_date, $username, $membership, $payment_method);
    
    if ($stmt->execute()) {
        // Insertion successful, redirect to a success page
        header("Location: /sites/confirmation_booking.php");
        exit();
    } else {
        // Error occurred during insertion
        echo "Error: " . $stmt->error;
    }
    
    $stmt->close();
}
?>
