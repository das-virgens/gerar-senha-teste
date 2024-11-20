<?php

$conn = new mysqli("localhost", "root", "", "chamarsenha-unime");

if ($conn->connect_error) {
    header('Content-Type: application/json');
    echo json_encode(array('error' => 'Erro ao conectar ao banco de dados: ' . $conn->connect_error));
    exit;
}

$sql =  "SELECT username, disponibilidade FROM usuarios";
$result = $conn->query($sql);

$sql2 =  "SELECT coordenador, numero FROM senhas";
$result2 = $conn->query($sql2);

if ($result->num_rows > 0) {
    $disponibilidades = array();

    while($row = $result->fetch_assoc()) {
        $disponibilidades[$row["username"]] = $row["disponibilidade"];
    }

    header('Content-Type: application/json');
    echo json_encode($disponibilidades);
} else {
    header('Content-Type: application/json');
    echo json_encode(array('error' => 'Nenhum coordenador encontrado no banco de dados.'));
}


$conn->close();

?>
