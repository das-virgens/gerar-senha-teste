<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "chamarsenha-unime";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

if (isset($_POST['senha']) && isset($_POST['coordenador'])) {
    $numeroSenha = $_POST['senha'];
    $coordenador = $_POST['coordenador'];

    $stmt_check = $conn->prepare("SELECT * FROM senhas WHERE coordenador = ?");
    $stmt_check->bind_param("s", $coordenador);
    $stmt_check->execute();
    $result_check = $stmt_check->get_result();

    if ($result_check->num_rows > 0) {
        $stmt_update = $conn->prepare("UPDATE senhas SET numero = ? WHERE coordenador = ?");
        $stmt_update->bind_param("ss", $numeroSenha, $coordenador);

        if ($stmt_update->execute()) {
            echo "Senha atualizada com sucesso na tabela senhas!<br>";
        } else {
            echo "Erro ao atualizar senha na tabela senhas: " . $stmt_update->error . "<br>";
        }
        $stmt_update->close();
    } else {
        $stmt_insert = $conn->prepare("INSERT INTO senhas (numero, coordenador) VALUES (?, ?)");
        $stmt_insert->bind_param("ss", $numeroSenha, $coordenador);

        if ($stmt_insert->execute()) {
            echo "Senha salva com sucesso na tabela senhas!<br>";
        } else {
            echo "Erro ao salvar senha na tabela senhas: " . $stmt_insert->error . "<br>";
        }
        $stmt_insert->close();
    }
    $stmt_check->close();

} else {
    echo "Erro: Dados de senha ou coordenador não fornecidos.";
}

$conn->close();
?>
