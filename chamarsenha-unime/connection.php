<?php
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'chamarsenha-unime';

$conn = mysqli_connect($host, $username, $password, $database);

if (!$conn) {
    die("Falha na conexão: " . mysqli_connect_error());
}
?>
