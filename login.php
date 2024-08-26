<?php
session_start();

//database connection
$conn = new mysqli(
    'localhost',
    'root',
    '',
    'login_db'
);

//check connection
if($conn->connect_error){
    die("Connection Failed". $conn->connect_error);
}

//user input
$username = htmlspecialchars($_POST['username']);
$password = htmlspecialchars($_POST['password']);

//prepare SQL statement
$stmt = $conn->prepare("SELECT password FROM users WHERE username = ?");
$stmt->bind_param('s', $username);
$stmt->execute();

//get result
$result = $stmt->get_result();

//check user exist
if($result->num_rows ===1){
    $user = $result->fetch_assoc();
    if($user['password'] === $password){
        $_SESSION['username'] = $username;
        header('Location: welcome.php');
        exit();
    }else{
        echo "Connection failed";
    }
}

$conn->close();
?>