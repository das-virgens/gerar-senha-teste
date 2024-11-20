<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "chamarsenha-unime";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

$query = "SELECT username FROM usuarios WHERE resetCoord = 1";
$result = $conn->query($query);

$response = array();

if ($result) {
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $username = $row['username'];
            $query_update = "UPDATE usuarios SET resetCoord = 0 WHERE username = '$username'";
            if ($conn->query($query_update) === TRUE) {
                $response['status'] = 'execute';
                $response['username'] = $username;
                break; 
            } else {
                $response['status'] = 'error';
                $response['message'] = "Erro ao atualizar o registro: " . $conn->error;
            }
        }
    } else {
        $response['status'] = 'no_reset_coord_found';
    }
} else {
    $response['status'] = 'error';
    $response['message'] = "Erro na consulta SQL: " . $conn->error;
}

header('Content-Type: application/json');
echo json_encode($response);

$conn->close();
?>
