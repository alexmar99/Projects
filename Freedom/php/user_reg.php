<?php 
include('db.php');  

$full_name = $_POST['full_name'];
$email = $_POST['email'];
$username = $_POST['username'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);
$date_of_birth = date("Y-m-d", strtotime($_POST['date_of_birth']));
$gender = $_POST['gender'];
$country = $_POST['country'];
$membership = $_POST['membership'];

$_SESSION['full_name'] = $full_name;
$_SESSION['username'] = $username;
$_SESSION['membership'] = $membership;

$stmt = $conn->prepare("SELECT username FROM Users WHERE username = ?");
$stmt->bind_param("s", $username);

$stmt->execute();

$result = $stmt->get_result();

if (mysqli_num_rows($result) > 0) {
    echo '<script>';
    echo 'alert("User already exists. Please choose a different username.");';
    echo 'window.history.back();';
    echo '</script>';
}
else 
{
    
    $stmt = $conn->prepare("INSERT INTO Users (full_name, email, username, password, date_of_birth, gender, country, membership) VALUES (?, ?, ?, ?, ?, ?, ?, ?)"); 
    $stmt->bind_param("ssssssss", $full_name, $email, $username, $password, $date_of_birth, $gender, $country, $membership);

    if(!$stmt->execute()) 
    {
        die("Query Failed."); 
    }
    $_SESSION['id_user'] = $stmt->insert_id; 
    header("Location: /sites/index.php");   
}

$stmt = $conn->prepare("SELECT id FROM Users WHERE username = ?");
$stmt->bind_param("s", $username);

$stmt->execute();

$result = $stmt->get_result();

if (mysqli_num_rows($result) > 0) {
    
    $row = mysqli_fetch_assoc($result);
    $id = $row['id'];
    $_SESSION['user_id'] = $id;
}
?>
