<?php
session_start();

$host = 'localhost';
$username = 'root';
$password = '';
$database = 'chamarsenha-unime';

$conn = mysqli_connect($host, $username, $password, $database);

if (!$conn) {
    die("Erro na conexão com o banco de dados: " . mysqli_connect_error());
}

$new_password = $_POST['password'];
$username = $_POST['username'];
$palavraChave = $_POST['palavra'];

$query_check_username = "SELECT * FROM usuarios WHERE username='$username'";
$result_check_username = mysqli_query($conn, $query_check_username);

if (mysqli_num_rows($result_check_username) > 0) {
    echo "Nome de usuário já está em uso. Por favor, escolha outro.";
} else {
    $query_insert_user = "INSERT INTO usuarios (username, password, palavra) VALUES ('$username', '$new_password', '$palavraChave')";
    $result_insert_user = mysqli_query($conn, $query_insert_user);

    if ($result_insert_user) {
        header("Location: login.php");
        exit();
    } else {
        echo "Erro ao cadastrar usuário.";
    }
}
?>
