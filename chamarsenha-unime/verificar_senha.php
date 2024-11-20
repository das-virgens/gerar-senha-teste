<?php

$conn = new mysqli("localhost", "root", "", "chamarSenha");

if ($conn->connect_error) {
    header('Content-Type: application/json');
    echo json_encode(array('error' => 'Erro ao conectar ao banco de dados: ' . $conn->connect_error));
    exit;
}

$sql = "SELECT coordenador, numero FROM senhas";
$result = $conn->query($sql);

if ($result) {
    $contador = array();

    while ($row = $result->fetch_assoc()) {
        $contador[$row["coordenador"]] = $row["numero"];
    }

    header('Content-Type: application/json');
    echo json_encode($contador);
} else {
    header('Content-Type: application/json');
    echo json_encode(array('error' => 'Erro ao consultar o banco de dados: ' . $conn->error));
}

$conn->close();

?>
