<?php
$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$dbname = "chamarsenha";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

$sql = "SELECT * FROM coordenadores";
$result = $conn->query($sql);

$coordenadores = array();

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $row['cursos'] = explode(',', $row['cursos']);
        $coordenadores[] = $row;
    }
} else {
    echo json_encode(array("message" => "Nenhum coordenador encontrado."));
    exit;
}

$conn->close();

echo json_encode($coordenadores);
?>
