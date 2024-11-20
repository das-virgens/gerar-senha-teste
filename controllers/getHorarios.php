<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "chamarsenha-unime";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexão falhou: ". $conn->connect_error);
}

$user = isset($_GET['username'])? $_GET['username'] : '';

if (empty($user)) {
    die("Parâmetro username não informado");
}

$sql = "SELECT * FROM horario_coord WHERE username =?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $user);
$stmt->execute();

if ($stmt->errno) {
    die("Erro na execução da consulta: ". $stmt->error);
}

$result = $stmt->get_result();

$data = [];

if ($result->num_rows > 0) {
    $data = $result->fetch_assoc();
}

echo json_encode($data);

$stmt->close();
$conn->close();
?>
