<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "chamarsenha-unime";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

$coordenador = isset($_POST['coordenador']) ? $_POST['coordenador'] : '';

$coordenador = $conn->real_escape_string($coordenador);

$query = "SELECT reset FROM usuarios WHERE username = '$coordenador'";
$result = $conn->query($query);

$response = array();

if ($result) {
    $row = $result->fetch_assoc();
    $reset = $row['reset'];

    if ($reset == 1) {
        $query_update = "UPDATE usuarios SET reset = 0 WHERE username = '$coordenador'";
        $conn->query($query_update);

        $response['status'] = 'execute';
    } else {
        $response['status'] = 'no_action';
    }
} else {
    $response['status'] = 'error';
    $response['message'] = $conn->error;
}

echo json_encode($response);

$conn->close();
?>
