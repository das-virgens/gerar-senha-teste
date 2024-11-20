<?php
session_start();
 
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'chamarsenha-unime';

$conn = mysqli_connect($host, $username, $password, $database);
 
$username = $_POST['username'];
$password = $_POST['password'];
 
$query = "SELECT * FROM usuarios WHERE username='$username' AND password='$password'";
$result = mysqli_query($conn, $query);
 
if (mysqli_num_rows($result) == 1) {
    $_SESSION['username'] = $username;
    header('Location: dashboard.php');
} else {
    header('Location: index.php?login=failed');
}
?>