<?php
$conn = mysqli_connect("localhost", "root", "", "chamarsenha-unime");

if (!$conn) {
    die("Erro de conexão: " . mysqli_connect_error());
}

$query_ultimaSenha = "SELECT * FROM senhas_chamadas ORDER BY id DESC LIMIT 1";
$result_ultimaSenha = mysqli_query($conn, $query_ultimaSenha);

if (mysqli_num_rows($result_ultimaSenha) > 0) {
    $row = mysqli_fetch_assoc($result_ultimaSenha);
    $ultimaSenhaChamada = $row['senha'];
    $coordenadorName = $row['coordenador'];
    if($ultimaSenhaChamada <= 9) {
        $mensagem = $coordenadorName . ": <span id='fino'>Senha 0" . $ultimaSenhaChamada .  "<span>";
    }else{
        $mensagem = $coordenadorName . ": <span id='fino'>Senha " . $ultimaSenhaChamada . "<span>";
    }
} else {
    $mensagem = "Sem senha no momento";
}

echo $mensagem;

mysqli_close($conn);
?>