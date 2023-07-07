<?php
session_start();
include 'db.php';

if (!isset($_SESSION['username'])) {
    header("Location: /sites/login.php");
    exit();
}

if (!isset($_SESSION['membership'])) {
    header("Location: /sites/login.php");
    exit();
}

$username = $_SESSION['username'];
$membership = $_SESSION['membership'];

$allowed_columns = ['starter', 'pro', 'premium'];

if (!in_array($membership, $allowed_columns)) {
    echo "Invalid membership type";
    die();
}

$result = mysqli_query($conn, "SELECT hotel_name,hotel_id FROM Hotels WHERE $membership > 0");

if ($result) {
    // initialize an empty array
    $hotel_names = array();
    
    // fetch each row as an associative array
    while($row = mysqli_fetch_assoc($result)) {
        // use the hotel_id as the key, and the hotel_name as the value
        $hotel_names[$row['hotel_id']] = $row['hotel_name'];
    }

    $_SESSION['hotel_names'] = $hotel_names;
    header("Location: booking.php");
    exit();
} else {
    echo "Error: " . mysqli_error($conn);
}
?>
