<?php
session_start();

if (!isset($_SESSION['username'])) {
    header('Location: index.php');
    exit();
}

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
$result_disponibilidade = mysqli_query($conn, $query_disponibilidade);

if ($result_disponibilidade && mysqli_num_rows($result_disponibilidade) > 0) {
    $row_disponibilidade = mysqli_fetch_assoc($result_disponibilidade);
    $disponibilidade_usuario = $row_disponibilidade['disponibilidade'];
} else {
    $disponibilidade_usuario = 0;
}

mysqli_free_result($result_disponibilidade);

if (isset($_POST['chamarSenha'])) {
    $query_contador_usuario = "SELECT contador FROM usuarios WHERE username = '$coordenador'";
    $result_contador_usuario = mysqli_query($conn, $query_contador_usuario);

    $query_contador_usuario2 = "SELECT MAX(numero) AS max_numero FROM senhas WHERE coordenador = '$coordenador'";
    $result_contador_usuario2 = mysqli_query($conn, $query_contador_usuario2);

    if ($result_contador_usuario && $result_contador_usuario2) {
        $row_contador = mysqli_fetch_assoc($result_contador_usuario);
        $contador_usuario = $row_contador['contador'];

        $row_max_numero = mysqli_fetch_assoc($result_contador_usuario2);
        $max_numero = $row_max_numero['max_numero'];

        echo "Contador Usuário: " . $contador_usuario . "<br>";
        echo "Máximo Número: " . $max_numero . "<br>";

        if ($contador_usuario < $max_numero) {
            $contador_usuario++;
            $query_insert = "INSERT INTO senhas_chamadas (coordenador, senha) VALUES ('$coordenador', '$contador_usuario')";
            if (mysqli_query($conn, $query_insert)) {
                $query_update_contador = "UPDATE usuarios SET contador = '$contador_usuario' WHERE username = '$coordenador'";
                if (!mysqli_query($conn, $query_update_contador)) {
                    echo "Erro ao atualizar o contador do usuário.";
                }
            } else {
                echo "Erro ao inserir a nova senha chamada.";
            }
        } else {
            echo "Ação negada, não possui senha gerada para você.";
        }
    } else {
        echo "Erro ao consultar o contador do usuário ou o número da última senha gerada.";
    }
}



$texto_botao = ""; 

if (isset($_POST['butonAtendimento'])) {
    $query_atendimento = "SELECT disponibilidade FROM usuarios WHERE username = '$coordenador'";
    $result = mysqli_query($conn, $query_atendimento);

    if ($result) {
        if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
            $disponibilidade = $row['disponibilidade'];

            $nova_disponibilidade = ($disponibilidade == 0) ? 1 : 0;

            $query_subir = "UPDATE usuarios SET disponibilidade = $nova_disponibilidade WHERE username = '$coordenador'";
            mysqli_query($conn, $query_subir);

            $texto_botao = ($nova_disponibilidade == 1) ? "Disponível" : "Indisponível";

            $classe_botao = ($nova_disponibilidade == 1) ? "indisponibilidade" : "disponibilidade";

        } else {
            echo "Usuário não encontrado no banco de dados.";
        }
    } else {
        echo "Erro na consulta: " . mysqli_error($conn);
    }

    mysqli_free_result($result);
}

$query_horarios = "SELECT * FROM horario_coord WHERE username = '$coordenador'";
$result_horarios = mysqli_query($conn, $query_horarios);

if ($result_horarios && mysqli_num_rows($result_horarios) > 0) {
    $row_horarios = mysqli_fetch_assoc($result_horarios);
    $segunda_inicioInput = $row_horarios['segunda_inicio'];
    $segunda_fimInput = $row_horarios['segunda_fim'];
    $terca_inicioInput = $row_horarios['terca_inicio'];
    $terca_fimInput = $row_horarios['terca_fim'];
    $quarta_inicioInput = $row_horarios['quarta_inicio'];
    $quarta_fimInput = $row_horarios['quarta_fim'];
    $quinta_inicioInput = $row_horarios['quinta_inicio'];
    $quinta_fimInput = $row_horarios['quinta_fim'];
    $sexta_inicioInput = $row_horarios['sexta_inicio'];
    $sexta_fimInput = $row_horarios['sexta_fim'];
}

$query_getLimite = "SELECT limite FROM usuarios WHERE username = '$coordenador'";
$result_getLimite = mysqli_query($conn, $query_getLimite);

if ($result_getLimite && mysqli_num_rows($result_getLimite) > 0) {
    $row_getLimite = mysqli_fetch_assoc($result_getLimite);
    $limiteInput = $row_getLimite['limite']; 
}

if (isset($_POST['salvar_limite'])) {
    // Verifica se 'limiteCoord' está definido no array $_POST
    if (isset($_POST['limiteCoord'])) {
        $limitemax = $_POST['limiteCoord'];

        $query_update_limites = "UPDATE usuarios SET 
            limite = '$limitemax'
            WHERE username = '$coordenador'";

        mysqli_query($conn, $query_update_limites);
    } else {
        // Trate o caso em que 'limiteCoord' não está presente no $_POST
        echo "Erro: Campo 'limiteCoord' não encontrado no formulário.";
    }
}


if (isset($_POST['resetSenha'])) {
    $query_reset_contador = "UPDATE usuarios SET contador = 0 WHERE username = '$coordenador'";
    $query_reset_contador2 = "UPDATE senhas SET numero = 0 WHERE coordenador = '$coordenador'";
    $query_reset_contador3 = "UPDATE usuarios SET resetCoord = 1 WHERE username = '$coordenador'";
    mysqli_query($conn, $query_reset_contador);
    mysqli_query($conn, $query_reset_contador2);
    mysqli_query($conn, $query_reset_contador3);
}

$query_ultimaSenha = "SELECT * FROM senhas_chamadas ORDER BY id DESC LIMIT 1";
$result_ultimaSenha = mysqli_query($conn, $query_ultimaSenha);

if (mysqli_num_rows($result_ultimaSenha) > 0) {
    $row = mysqli_fetch_assoc($result_ultimaSenha);
    $ultimaSenhaChamada = $row['senha'];
    $coordenadorName = $row['coordenador'];
} else {
    $ultimaSenhaChamada = "0";
    $coordenadorName = "...";
}

$query_contador_usuario = "SELECT contador FROM usuarios WHERE username = '$coordenador'";
$result_contador_usuario = mysqli_query($conn, $query_contador_usuario);
if (mysqli_num_rows($result_contador_usuario) > 0) {
    $row_contador = mysqli_fetch_assoc($result_contador_usuario);
    $contador_usuario = $row_contador['contador'];
} else {
    $contador_usuario = 0;
}

// Consulta o número total de senhas geradas pelo coordenador
$query_total_senhas = "SELECT numero FROM senhas WHERE coordenador = '$coordenador'";
$result_total_senhas = mysqli_query($conn, $query_total_senhas);
$total_senhas = 0;
if ($result_total_senhas && mysqli_num_rows($result_total_senhas) > 0) {
    // Como pode haver várias linhas retornadas, você pode precisar somar todos os números
    while ($row_total_senhas = mysqli_fetch_assoc($result_total_senhas)) {
        $total_senhas += $row_total_senhas['numero'];
    }
}

?>
<script>
// Variável para armazenar o total anterior de senhas
var totalSenhasAnterior = null;

function atualizarTotalSenhas() {
    var host = '<?php echo $host; ?>';
    var username = '<?php echo $username; ?>';
    var password = '<?php echo $password; ?>';
    var database = '<?php echo $database; ?>';

    var xhr = new XMLHttpRequest();
    xhr.open('GET', 'obter_total_senhas.php?host=' + host + '&username=' + username + '&password=' + password + '&database=' + database, true);
    xhr.onreadystatechange = function() {
        if (xhr.readyState === 4 && xhr.status === 200) {
            var totalSenhas = xhr.responseText;

            // Verifica se houve uma alteração no número de senhas
            if (totalSenhasAnterior !== null && totalSenhas !== totalSenhasAnterior) {
                showNotification();
            }

            // Atualiza o valor anterior e o elemento no DOM
            totalSenhasAnterior = totalSenhas;
            document.getElementById('totalSenhas').innerText = totalSenhas;
        }
    };
    xhr.send();
}

// Atualiza as senhas a cada 500 milissegundos
setInterval(atualizarTotalSenhas, 500);

</script>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="images/icone.png" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Painel de Controle | Coordenador</title>
    <link rel="stylesheet" href="style/newstyle.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        <audio id="audio" preload="auto"></audio>
        <header>
            <div class="header-left">
                <img src="images/materials/Logo-Anhanguera.png" alt="">
            </div>
            
            <form method="POST" class="header-right">
                <?php
                    // Nome de usuário logado (substitua pelo nome de usuário do usuário logado)
                    $username = $_SESSION['username'];

                    // Consulta para verificar a permissão do usuário
                    $sql = "SELECT permissao FROM usuarios WHERE username = '$username'";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        // Existe pelo menos um resultado
                        $row = $result->fetch_assoc();
                        $permissao = $row["permissao"];
                        
                        // Verifica se a permissão é "Master"
                        if ($permissao == "Master") {
                            echo '<div class="consulta-container"><img class="imagemConsulta" src="images/consultar_dados.svg"></img><a id="consulta" href="consulta.php">CONSULTAR ANÁLISE</a></div>';
                        }
                    } else {
                        echo "Usuário não encontrado.";
                    }

                ?>
                <div class="status"><div class="bolinha"></div><?php
                    if($disponibilidade_usuario == 1){
                        echo "DISPONIVEL";
                    }else{
                        echo "INDISPONIVEL";
                    }
                   ?></div>
                <?php
            // Modificado para buscar a imagem do coordenador com base no nome
            $coordenadorImagem = "images/" . $_SESSION['username'] . ".png";
            // Verifica se a imagem existe, se não, usa uma imagem padrão
            if (file_exists($coordenadorImagem)) {
                echo '<img src="' . $coordenadorImagem . '" title="Foto de Perfil" alt="">';
            } else {
                echo '<img src="images/icone.png" alt="">'; // Coloque aqui a imagem padrão
            }
            ?>
            <a href='logout.php' class="status">
            <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#5f6368"><path d="M200-120q-33 0-56.5-23.5T120-200v-160h80v160h560v-560H200v160h-80v-160q0-33 23.5-56.5T200-840h560q33 0 56.5 23.5T840-760v560q0 33-23.5 56.5T760-120H200Zm220-160-56-58 102-102H120v-80h346L364-622l56-58 200 200-200 200Z"/></svg>
            </a>
            </form>
        </header>
        <section>
            <div class="top-section">
                <div class="card">
                    <img src="images/materials/senha-atual.svg" alt="">
                    <div class="cardText">
                        <h1>Senha Atual</h1>
                        <h2><?php echo $contador_usuario; ?></h2>
                    </div>
                </div>

                <div class="card">
                    <img src="images/materials/proxima-senha.svg" alt="">
                    <div class="cardText">
                        <h1>Próxima Senha</h1>
                        <h2><?php echo $contador_usuario + 1; ?></h2>
                    </div>
                </div>

                <div class="card">
                    <img src="images/materials/minha-fila.svg" alt="">
                    <div class="cardText">
                        <h1>Minha Fila</h1>
                        <h2><?php echo $contador_usuario . "/<span id='totalSenhas'>" . $total_senhas . "</span>"; ?></h2>
                    </div>
                </div>
                <form method="POST" class="cardButton">
                    <button id="chamarSenha" name="chamarSenha">CHAMAR SENHA</button>
                    <button id="resetSenha" onclick="zerar()" name="resetSenha">RESETAR SENHA</button>
                    <button type="submit" class="disponibilidade" id="trocaDeStatus" name="butonAtendimento" title="Trocar Status">TROCAR STATUS</button>
                </form>
                
            </div>
            <div class="bottom-section">
                <div id="formStyka">
                    <h1 id="tituloQuadro">Quadro de Horários</h1>
                    <span id="descriptionQuadro">Fazendo as alterações nesse quadro automaticamente e alterado no totem na recepção, caso tiver algum dia que não irá atende coloque nos dois campos 23:59.</span>
                    </div>
                    <form id="quadroHorarios" method="POST">
                        <div class="grid-container">
                            <div class="grid-left">
                                <div class="inputHora">
                                    <label for="segunda_inicio">Segunda-feira (início):</label><br>
                                    <input type="time" id="segunda_inicio" name="segunda_inicio" value="<?php echo $segunda_inicioInput; ?>">
                                </div>
                        
                                <div class="inputHora">
                                    <label for="terca_inicio">Terça-feira (início):</label><br>
                                    <input type="time" id="terca_inicio" name="terca_inicio" value="<?php echo $terca_inicioInput; ?>">
                                </div>
                        
                                <div class="inputHora">
                                    <label for="quarta_inicio">Quarta-feira (início):</label><br>
                                    <input type="time" id="quarta_inicio" name="quarta_inicio" value="<?php echo $quarta_inicioInput; ?>">
                                </div>
                        
                                <div class="inputHora">
                                    <label for="quinta_inicio">Quinta-feira (início):</label><br>
                                    <input type="time" id="quinta_inicio" name="quinta_inicio" value="<?php echo $quinta_inicioInput; ?>">
                                </div>
                                
                                <div class="inputHora">
                                    <label for="sexta_inicio">Sexta-feira (início):</label><br>
                                    <input type="time" id="sexta_inicio" name="sexta_inicio" value="<?php echo $sexta_inicioInput; ?>">
                                </div>
                            </div>
                            <div class="grid-right">
                                <div class="inputHora">
                                    <label for="segunda_fim">Segunda-feira (fim):</label><br>
                                    <input type="time" id="segunda_fim" name="segunda_fim" value="<?php echo $segunda_fimInput; ?>">
                                </div>
                                <div class="inputHora">
                                    <label for="terca_fim">Terça-feira (fim):</label><br>
                                    <input type="time" id="terca_fim" name="terca_fim" value="<?php echo $terca_fimInput; ?>">
                                </div>
                                <div class="inputHora">
                                    <label for="quarta_fim">Quarta-feira (fim):</label><br>
                                    <input type="time" id="quarta_fim" name="quarta_fim" value="<?php echo $quarta_fimInput; ?>">
                                </div>
                                <div class="inputHora">
                                    <label for="quinta_fim">Quinta-feira (fim):</label><br>
                                    <input type="time" id="quinta_fim" name="quinta_fim" value="<?php echo $quinta_fimInput; ?>">
                                </div>
                                <div class="inputHora">
                                    <label for="sexta_fim">Sexta-feira (fim):</label><br>
                                    <input type="time" id="sexta_fim" name="sexta_fim" value="<?php echo $sexta_fimInput; ?>">
                                </div>
                            </div>
                            <button id="salvar_horarios" type="submit" name="salvar_horarios">Salvar Alterações</button>
                        </div>
                    </form>
                </div>
                <div id="formStyka">
                    <h1 id="tituloQuadro">LIMITE DE SENHAS</h1>
                    <span id="descriptionQuadro">Fazendo as alterações nesse quadro automaticamente e alterado no totem na recepção.</span>
                </div>

                <form id="quadroHorarios" method="POST">
                    <div class="grid-container" style="display: flex; align-items: center; gap: 10px">
                        <div class="grid-right">
                            <div class="inputHora">
                                <label for="limiteCoord">Limite de senhas:</label><br>
                                <input type="number" id="limiteCoord" name="limiteCoord" value="<?php echo htmlspecialchars($limiteInput, ENT_QUOTES, 'UTF-8'); ?>">
                            </div>
                        </div><br>
                        <button id="salvar_horarios" style="margin-top: 25px; height: 50px" type="submit" name="salvar_limite">Salvar Alterações</button>
                    </div>
                </form>
                </div>
                    
            </div>
        </section>
        <footer>
            <img src="images/materials/Logo-Branca.png" alt="">
        </footer>
        <audio id="notifySound" src="audio/notify.mp3"></audio>
        <div id="notificationContainer"></div>
</body>
<script>
        function zerar() {
            <?php $ultimaSenhaChamada = 0; ?>
        }
    </script>
   <script>
    document.onkeydown = function (e) {
        if (e.keyCode === 116) {
            return false;
        }
    };
    window.addEventListener('resize', function () {
        window.resizeTo(500, 500);
    });
    window.addEventListener('DOMContentLoaded', function () {
        window.resizeTo(500, 500);
    });

    // Ocultar URL
    history.pushState(null, null, location.href);
    window.onpopstate = function () {
        history.go(1);
    };
    </script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</html>
<script>
    window.onload = function() {
        var xhr = new XMLHttpRequest();
        xhr.open('POST', 'obter_disponibilidade.php', true);
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        xhr.onreadystatechange = function() {
            if (xhr.readyState === XMLHttpRequest.DONE) {
                if (xhr.status === 200) {
                    // Se a requisição for bem-sucedida, atualiza o texto do botão
                    var disponibilidade = xhr.responseText;
                } else {
                    console.error('Erro ao buscar a disponibilidade: ' + xhr.status);
                }
            }
        };
        xhr.send();
    };

    function resetar() {
        this.$root.$emit('zerarSenha');
    }
    function showNotification() {
        const notificationContainer = document.getElementById('notificationContainer');
        const notification = document.createElement('div');
        notification.id = 'alertNotify';
        notification.className = 'alert alert-primary';
        notification.role = 'alert';
        notification.innerHTML = `Olá <span id="nomeCoord"><?php echo $coordenador ?></span>, você tem uma nova senha gerada!`;

        notificationContainer.appendChild(notification);

        var audioElement = document.getElementById('audio');
        audioElement.src = "audio/notify.mp3";
        audioElement.play();
        setTimeout(() => {
            notification.classList.add('fade-out');
            setTimeout(() => {
                notificationContainer.removeChild(notification);
            }, 500); 
        }, 4000);
    }
</script>
<?php
if (isset($_POST['salvar_horarios'])) {
    $segunda_inicio = $_POST['segunda_inicio'];
    $segunda_fim = $_POST['segunda_fim'];
    $terca_inicio = $_POST['terca_inicio'];
    $terca_fim = $_POST['terca_fim'];
    $quarta_inicio = $_POST['quarta_inicio'];
    $quarta_fim = $_POST['quarta_fim'];
    $quinta_inicio = $_POST['quinta_inicio'];
    $quinta_fim = $_POST['quinta_fim'];
    $sexta_inicio = $_POST['sexta_inicio'];
    $sexta_fim = $_POST['sexta_fim'];

    $query_update_horarios = "UPDATE horario_coord SET 
        segunda_inicio = '$segunda_inicio', 
        segunda_fim = '$segunda_fim', 
        terca_inicio = '$terca_inicio', 
        terca_fim = '$terca_fim', 
        quarta_inicio = '$quarta_inicio', 
        quarta_fim = '$quarta_fim', 
        quinta_inicio = '$quinta_inicio', 
        quinta_fim = '$quinta_fim', 
        sexta_inicio = '$sexta_inicio', 
        sexta_fim = '$sexta_fim' 
        WHERE username = '$coordenador'";
    mysqli_query($conn, $query_update_horarios);
}
?>
<style>
#alertNotify{
    position: absolute;
    width: auto;
    top: 18%;
    transition: opacity 0.5s ease-out;
    opacity: 1;
    right: 2vh;
    z-index: 9999;
}
.fade-out {
    opacity: 0;
    transition: opacity 0.5s ease-out;
}
.card{
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: center;
    gap: 10px;
    padding: 15px 25px;
    width: auto;
    height: auto;
    border-radius: 10px;
    border: none;
}
#nomeCoord{
    text-transform: capitalize;
    font-weight: 600;
}
.imagemConsulta{
    width: 25px;
}

#consultar{
    text-decoration: none;
}
.consulta-container{
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 3px;
    font-family: 'Rubik-Regular';
    padding: 0px 8px;
    height: 35px;
    color: #232323;
    border-radius: 4px;
    background-color: #23232322;
    text-decoration: none !important;
}
.consulta-container:hover{

}
.consulta-container img{
    width: 15px;
    margin-right: 5px;
}
a{
    text-decoration: none !important;
    color: #232323;
}
</style>
<script>
    event.preventDefault();
</script>