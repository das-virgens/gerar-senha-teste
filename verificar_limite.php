<?php
$conn = new mysqli("localhost", "root", "", "chamarsenha-unime");

if ($conn->connect_error) {
    header('Content-Type: application/json');
    echo json_encode(array('error' => 'Erro ao conectar ao banco de dados: ' . $conn->connect_error));
    exit;
}

$sql =  "SELECT username, limite FROM usuarios";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $limite = array();

    while($row = $result->fetch_assoc()) {
        $limite[$row["username"]] = $row["limite"];
    }

    header('Content-Type: application/json');
    echo json_encode($limite);
} else {
    header('Content-Type: application/json');
    echo json_encode(array('error' => 'Nenhum coordenador encontrado no banco de dados.'));
}

$conn->close();
?>
