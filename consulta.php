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

// Liberar o resultado
mysqli_free_result($result_disponibilidade);
?>

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
                            echo '<div class="consulta-container"><img class="imagemConsulta" src="images/home.svg"></img><a id="consulta" href="dashboard.php">RETORNAR PARA HOME</a></div>';
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

            </form>
        </header>
<body>
    <header id='header-info'>
        <h1>ANÁLISE dos Coordenadores</h1>
        <span>Para ver análise dos coordenadores basta selecionar no input abaixo: </span>
    </header>
    <div class="all-container">
            <div class="inputselect">
                <label for="coordenadores">Selecione um coordenador:</label>
                <select id="coordenadores" onchange="mostrarInformacoes()">
                    <option value="">--Selecione--</option>
                </select>
            </div>
            

    <table id="tabela-info" style="display: none;">
        <thead>
            <tr>
                <th style='margin-left: 10px;'>  Coordenador</th>
                <th>Total de Atendimentos</th>
                <th>Atendimentos na Semana</th>
                <th>Atendimentos Hoje</th>
                <th>Média entre Atendimentos</th>
                <th>Atendimento mais Curto</th>
                <th>Atendimento mais Longo</th>
            </tr>
        </thead>
        <tbody id="info-coordenador"></tbody>
    </table>
    </div>

    <script src="javascript/consulta-config.js"></script>
</body>
</html>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Sora:wght@100;200;300;400;500;600;700;800&display=swap');

@font-face {
    font-family: "Rubik";
    src: url("fonts/Rubik-ExtraBold.ttf");
}

@font-face {
    font-family: "Rubik-Regular";
    src: url("fonts/Rubik-Regular.ttf");
}

@font-face {
    font-family: "Rubik-Light";
    src: url("fonts/Rubik-Light.ttf");
}

@font-face {
    font-family: "Rubik-SemiBold";
    src: url("fonts/Rubik-SemiBold.ttf");
}
@font-face {
    font-family: "Signika-Light";
    src: url("fonts/Signika-Light.ttf");
}

@font-face {
    font-family: "Signika-Regular";
    src: url("fonts/Signika-Regular.ttf");
}

@font-face {
    font-family: "Signika-Bold";
    src: url("fonts/Signika-Bold.ttf");
}

:root {
    --cor-principal: #FF2800;
    --cor-principal2: #CDCDCD;
    --cor-indisponivel-fundo: #F5DEDE;
    --cor-disponivel-fundo: #DEF5E3; 
}

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
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

body, html {
  height: 100%;
  font-family: sans-serif;
}

a {
  margin: 0;
  transition: all .4s;
  -webkit-transition: all .4s;
  -o-transition: all .4s;
  -moz-transition: all .4s;
}

a:focus {
  outline: none !important;
}

a:hover {
  text-decoration: none;
}

h1, h2, h3, h4, h5, h6 {
  margin: 0;
}

p {
  margin: 0;
}

ul, li {
  margin: 0;
  list-style-type: none;
}

input {
  display: block;
  outline: none;
  border: none !important;
}

textarea {
  display: block;
  outline: none;
}

textarea:focus, input:focus {
  border-color: transparent !important;
}

button {
  outline: none !important;
  border: none;
  background: 0 0;
}

button:hover {
  cursor: pointer;
}

iframe {
  border: none !important;
}

.limiter {
  width: 100%;
  margin: 0 auto;
}


#header-info h1{
    font-family: 'Rubik';
    text-transform: uppercase;
    color: var(--cor-principal);
}

#header-info{
    display: flex;
    flex-direction: column;
    align-items: start;
    justify-content: center;
}

#header-info span{
    font-family: "Signika-Light";
    margin-top: -10px;
}

.inputselect label, .inputselect select{
    font-family: "Rubik-Regular" !important;
}

.inputselect label{
    margin-left: 5px;
}
.inputselect{
    margin-top: 10px;
    display: flex;
    flex-direction: column;
    align-items: start;
    justify-content: center; 
}


.inputselect select{
    padding: 6px 10px;
    font-size: 0.95rem;
    border: 2px var(--cor-principal2) solid;
}

table{
    font-family: "Rubik-Regular" !important;
    width: 95%;
    zoom: 0.80;
   
}

thead{
    height: 70px;
    padding-bottom: 10px;
    padding-left: 10px;
    /* background-color: var(--cor-principal2); */
    border-bottom: 1px solid var(--cor-principal2)
}

td{
    text-transform: capitalize;
    padding-top: 20px;
}

.all-container{
    width: 100%;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    gap: 10px;
}

</style>