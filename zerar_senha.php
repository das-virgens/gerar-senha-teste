<?php
$conn = new mysqli("localhost", "root", "", "chamarsenha-unime");

if (!$conn) {
    die("Erro ao conectar ao banco de dados: ". mysqli_connect_error());
}

$query = "UPDATE senhas SET numero = ''";
$result = mysqli_query($conn, $query);

mysqli_close($conn);

echo "Senha zerada com sucesso!";
?>