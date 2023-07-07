<?php
include('db.php');

$username = $_POST['username'];

// Fetching the membership for the user
$query2 = "SELECT membership FROM Users WHERE username = ?";
$stmt2 = $conn->prepare($query2);
if (!$stmt2->bind_param("s", $username)) {
    die('bind_param() failed: ' . htmlspecialchars($stmt2->error));
}

if (!$stmt2->execute()) {
    die('execute() failed: ' . htmlspecialchars($stmt2->error));
}

$result2 = $stmt2->get_result();
if ($result2 && $result2->num_rows > 0) {
    $row2 = $result2->fetch_assoc();
    $_SESSION['membership'] = $row2['membership'];
}

$stmt2->close();

// Fetching the username and password
$stmt = $conn->prepare("SELECT username, password FROM Users WHERE username = ?");
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

if ($result === false) {
    $_SESSION['error'] = "An error occurred while querying the database.";
    header("Location: /sites/login.php");
    exit;
} elseif ($result->num_rows == 0) {
    $_SESSION['error'] = "No user found with these credentials, try again or create an account.";
    header("Location: /sites/login.php");
    exit;
} else {
    $row = $result->fetch_assoc();
    $hashed_password = $row['password'];

    if (!password_verify($_POST['pass'], $hashed_password)) {
        $_SESSION['error'] = "No user found with these credentials, try again or create an account.";
        header("Location: /sites/login.php");
        exit;
    } else {
        // Valid credentials, now save session variables
        $_SESSION['username'] = $username;
    }

    $stmt->close();
}

// Redirect to /sites/index.php after successful operations.
header("Location: /sites/index.php");
exit;

?>







