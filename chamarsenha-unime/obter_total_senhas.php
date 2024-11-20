<?php
session_start();

if (!isset($_SESSION['username'])) {
    header('Location: login.php');
    exit();
}

$host = 'localhost';
$username = 'root';
$password = '';
$database = 'chamarsenha-unime';

$conn = mysqli_connect($host, $username, $password, $database);

if (!$conn) {
    die("Erro na conexão com o banco de dados: " . mysqli_connect_error());
}

$coordenador = $_SESSION['username'];

$query_total_senhas = "SELECT numero FROM senhas WHERE coordenador = '$coordenador'";
$result_total_senhas = mysqli_query($conn, $query_total_senhas);
$total_senhas = 0;
if ($result_total_senhas && mysqli_num_rows($result_total_senhas) > 0) {
    while ($row_total_senhas = mysqli_fetch_assoc($result_total_senhas)) {
        $total_senhas += $row_total_senhas['numero'];
    }
}

echo $total_senhas;

mysqli_close($conn);
?>
