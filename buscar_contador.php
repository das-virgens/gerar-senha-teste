<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "chamarsenha";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

$sql = "SELECT contador FROM senhas";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    echo json_encode($row['contador']);
} else {
    echo "0"; 
}
$conn->close();
?>
