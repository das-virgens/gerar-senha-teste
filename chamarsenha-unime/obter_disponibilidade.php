<?php
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'chamarsenha-unime';

$conn = mysqli_connect($host, $username, $password, $database);

if (!$conn) {
    die("Erro na conexão com o banco de dados: " . mysqli_connect_error());
}

$coordenador = $_SESSION['username'];
$query_disponibilidade = "SELECT disponibilidade FROM usuarios WHERE username = '$coordenador'";
$resultado = mysqli_query($conn, $query_disponibilidade);

if ($resultado) {
    if (mysqli_num_rows($resultado) > 0) {
        $row = mysqli_fetch_assoc($resultado);
        $disponibilidade = $row['disponibilidade'];
        echo $disponibilidade;
    } else {
        echo "Disponibilidade não encontrada para este usuário.";
    }
} else {
    echo "Erro ao buscar a disponibilidade: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
