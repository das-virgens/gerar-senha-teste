<?php
session_start();
if (!isset($_SESSION['username'])) {
    header('Location: login.php'); 
    exit();
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "chamarsenha-unime";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$username = $_SESSION['username'];

$sql_permissao = "SELECT permissao FROM usuarios WHERE username = '$username'";
$result_permissao = $conn->query($sql_permissao);

if ($result_permissao->num_rows > 0) {
    $row_permissao = $result_permissao->fetch_assoc();
    $permissao = $row_permissao['permissao'];

    if ($permissao === 'Master') {
        $sql_coordenadores = "SELECT DISTINCT coordenador FROM senhas_chamadas";
        $result_coordenadores = $conn->query($sql_coordenadores);

        $dados_finais = [];

        if ($result_coordenadores->num_rows > 0) {
            while ($row_coordenador = $result_coordenadores->fetch_assoc()) {
                $coordenador = $row_coordenador['coordenador'];

                $sql_atendimento_geral = "SELECT COUNT(*) AS total_atendimentos
                                          FROM senhas_chamadas
                                          WHERE coordenador = '$coordenador'";
                $result_atendimento_geral = $conn->query($sql_atendimento_geral);
                $row_atendimento_geral = $result_atendimento_geral->fetch_assoc();
                $total_atendimentos = intval($row_atendimento_geral['total_atendimentos']);

                $sql_atendimento_semanal = "SELECT COUNT(*) AS atendimentos_semana
                                            FROM senhas_chamadas
                                            WHERE coordenador = '$coordenador'
                                              AND data_hora >= DATE_SUB(NOW(), INTERVAL 7 DAY)";
                $result_atendimento_semanal = $conn->query($sql_atendimento_semanal);
                $row_atendimento_semanal = $result_atendimento_semanal->fetch_assoc();
                $atendimentos_semana = intval($row_atendimento_semanal['atendimentos_semana']);

                $sql_atendimento_hoje = "SELECT COUNT(*) AS atendimentos_hoje
                                         FROM senhas_chamadas
                                         WHERE coordenador = '$coordenador'
                                           AND DATE(data_hora) = CURDATE()";
                $result_atendimento_hoje = $conn->query($sql_atendimento_hoje);
                $row_atendimento_hoje = $result_atendimento_hoje->fetch_assoc();
                $atendimentos_hoje = intval($row_atendimento_hoje['atendimentos_hoje']);

                $sql_media_atendimento = "SELECT AVG(TIMESTAMPDIFF(MINUTE, data_hora_anterior, data_hora)) AS media_entre_atendimentos
                                         FROM (
                                             SELECT *,
                                                    LAG(data_hora) OVER (ORDER BY data_hora) AS data_hora_anterior
                                             FROM senhas_chamadas
                                             WHERE coordenador = '$coordenador'
                                         ) AS t";
                $result_media_atendimento = $conn->query($sql_media_atendimento);
                $row_media_atendimento = $result_media_atendimento->fetch_assoc();
                $media_entre_atendimentos = intval($row_media_atendimento['media_entre_atendimentos']);

                $sql_atendimento_rapido = "SELECT MIN(TIMESTAMPDIFF(MINUTE, data_hora_anterior, data_hora)) AS atendimento_rapido
                                           FROM (
                                               SELECT *,
                                                      LAG(data_hora) OVER (ORDER BY data_hora) AS data_hora_anterior
                                               FROM senhas_chamadas
                                               WHERE coordenador = '$coordenador'
                                           ) AS t
                                           WHERE TIMESTAMPDIFF(MINUTE, data_hora_anterior, data_hora) > 0";
                $result_atendimento_rapido = $conn->query($sql_atendimento_rapido);
                $row_atendimento_rapido = $result_atendimento_rapido->fetch_assoc();
                $atendimento_rapido = intval($row_atendimento_rapido['atendimento_rapido']);

                $sql_atendimento_demorado = "SELECT MAX(TIMESTAMPDIFF(MINUTE, data_hora_anterior, data_hora)) AS atendimento_demorado
                                             FROM (
                                                 SELECT *,
                                                        LAG(data_hora) OVER (ORDER BY data_hora) AS data_hora_anterior
                                                 FROM senhas_chamadas
                                                 WHERE coordenador = '$coordenador'
                                             ) AS t";
                $result_atendimento_demorado = $conn->query($sql_atendimento_demorado);
                $row_atendimento_demorado = $result_atendimento_demorado->fetch_assoc();
                $atendimento_demorado = intval($row_atendimento_demorado['atendimento_demorado']);

                $dados_coordenador = [
                    'coordenador' => $coordenador,
                    'atendimentoGeral' => $total_atendimentos,
                    'AtendimentosSemana' => $atendimentos_semana,
                    'AtendimentosHoje' => $atendimentos_hoje,
                    'Media de Atendimento' => $media_entre_atendimentos . ' minutos',
                    'Atendimento mais rapido' => $atendimento_rapido . ' minutos',
                    'Atendimento Mais demorado' => $atendimento_demorado . ' minutos'
                ];

                $dados_finais[] = $dados_coordenador;
            }
        }

        $conn->close();

        $json_output = json_encode($dados_finais, JSON_UNESCAPED_UNICODE);

        header('Content-Type: application/json');
        echo $json_output;
        exit();
    }
}
echo json_encode(['error' => 'Sem permissão para acessar essas informações']);
exit();
?>
