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

$query = "SELECT * FROM usuarios WHERE username='$username' AND palavra='$palavraChave'";
$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) == 1) {
    $update_query = "UPDATE usuarios SET password='$new_password' WHERE username='$username'";
    $update_result = mysqli_query($conn, $update_query);

    if ($update_result) {
        header("Location: login.php");
        exit();
    } else {
        echo "Erro ao atualizar a senha.";
    }
} else {
    echo "Nome de usuário ou palavra-chave incorretos.";
}
?>
