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
    die("Falha na conexão: " . mysqli_connect_error());
}

if (!$conn) {
    die("Erro na conexão com o banco de dados: " . mysqli_connect_error());
}

$coordenador = $_SESSION['username'];

if (isset($_POST['chamarSenha'])) {
    $query_contador_usuario = "SELECT contador FROM usuarios WHERE username = '$coordenador'";
    $result_contador_usuario = mysqli_query($conn, $query_contador_usuario);
    if (mysqli_num_rows($result_contador_usuario) > 0) {
        $row_contador = mysqli_fetch_assoc($result_contador_usuario);
        $contador_usuario = $row_contador['contador'];
    } else {
        $contador_usuario = 0;
    }

    $contador_usuario++;

    $query_insert = "INSERT INTO senhas_chamadas (coordenador, senha) VALUES ('$coordenador', '$contador_usuario')";
    mysqli_query($conn, $query_insert);

    $query_update_contador = "UPDATE usuarios SET contador = '$contador_usuario' WHERE username = '$coordenador'";
    mysqli_query($conn, $query_update_contador);
}

if (isset($_POST['resetSenha'])) {
    $query_reset_contador = "UPDATE usuarios SET contador = 0 WHERE username = '$coordenador'";
    mysqli_query($conn, $query_reset_contador);
}

$query_ultimaSenha = "SELECT * FROM senhas_chamadas ORDER BY id DESC LIMIT 1";
$result_ultimaSenha = mysqli_query($conn, $query_ultimaSenha);

if (mysqli_num_rows($result_ultimaSenha) > 0) {
    $row = mysqli_fetch_assoc($result_ultimaSenha);
    $ultimaSenhaChamada = $row['senha'];
    $coordenadorName = $row['coordenador'];
} else {
    $ultimaSenhaChamada = "Sem senha no momento";
    $coordenadorName = "Nenhum coordenador";
}

$query_contador_usuario = "SELECT contador FROM usuarios WHERE username = '$coordenador'";
$result_contador_usuario = mysqli_query($conn, $query_contador_usuario);
if (mysqli_num_rows($result_contador_usuario) > 0) {
    $row_contador = mysqli_fetch_assoc($result_contador_usuario);
    $contador_usuario = $row_contador['contador'];
} else {
    $contador_usuario = 0;
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <style>
        body {
            width: 100%;
            height: 100vh;
            overflow: hidden;
            text-transform: capitalize;
        }
    </style>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="images/icone.png" type="image/x-icon">
    <link rel="stylesheet" href="style/style-index.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Chamar Senha</title>
</head>
<body>
    <div class="header">
        <img src="images/logo-original.png" alt="">
        <div class="group-perfil">
            <?php
            echo "<h1>" . $_SESSION['username'] . "</h1>" ;
            $coordenadorImagem = "images/" . $_SESSION['username'] . ".png";
            if (file_exists($coordenadorImagem)) {
                echo '<img src="' . $coordenadorImagem . '" alt="">';
            } else {
                echo '<img src="images/icone.png" alt="">'; 
            }
            ?>
        </div>
        </div>
    </div>
    <div class="container">
        <img src="<?php echo $_SESSION['username']; ?>" alt="">
        <div class="senhaAtual">
            <h1 class="senhaAtualTitle">Senha atual:</h1>
            <h3><?php echo $ultimaSenhaChamada; ?></h3>
        </div>
        <p><?php echo $_SESSION['username']; ?>, sua próxima senha é: <?php echo $contador_usuario + 1; ?></p>
        <form method="POST">
            <button type="submit" id="chamarSenha" name="chamarSenha">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <mask id="mask0_366_817" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="24" height="24">
                <rect width="24" height="24" fill="#D9D9D9"/>
                </mask>
                <g mask="url(#mask0_366_817)">
                <path d="M6 14H8C8 13.0167 8.35833 12.1875 9.075 11.5125C9.79167 10.8375 10.65 10.5 11.65 10.5C12.25 10.5 12.8083 10.6375 13.325 10.9125C13.8417 11.1875 14.2667 11.55 14.6 12H13V14H18V9H16V10.55C15.4667 9.91667 14.8292 9.41667 14.0875 9.05C13.3458 8.68333 12.5333 8.5 11.65 8.5C10.0667 8.5 8.72917 9.03333 7.6375 10.1C6.54583 11.1667 6 12.4667 6 14ZM12 22C10.6167 22 9.31667 21.7375 8.1 21.2125C6.88333 20.6875 5.825 19.975 4.925 19.075C4.025 18.175 3.3125 17.1167 2.7875 15.9C2.2625 14.6833 2 13.3833 2 12C2 10.6167 2.2625 9.31667 2.7875 8.1C3.3125 6.88333 4.025 5.825 4.925 4.925C5.825 4.025 6.88333 3.3125 8.1 2.7875C9.31667 2.2625 10.6167 2 12 2C13.3833 2 14.6833 2.2625 15.9 2.7875C17.1167 3.3125 18.175 4.025 19.075 4.925C19.975 5.825 20.6875 6.88333 21.2125 8.1C21.7375 9.31667 22 10.6167 22 12C22 13.3833 21.7375 14.6833 21.2125 15.9C20.6875 17.1167 19.975 18.175 19.075 19.075C18.175 19.975 17.1167 20.6875 15.9 21.2125C14.6833 21.7375 13.3833 22 12 22Z" fill="white"/>
                </g>
                </svg>
                Próxima Senha
            </button>
            <button type="submit" id="resetSenha" name="resetSenha">
                <svg width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M9.55859 18.0938C7.25859 18.0938 5.25443 17.3313 3.54609 15.8063C1.83776 14.2813 0.858594 12.3771 0.608594 10.0938H2.65859C2.89193 11.8271 3.66276 13.2604 4.97109 14.3938C6.27943 15.5271 7.80859 16.0938 9.55859 16.0938C11.5086 16.0938 13.1628 15.4146 14.5211 14.0563C15.8794 12.6979 16.5586 11.0438 16.5586 9.09375C16.5586 7.14375 15.8794 5.48958 14.5211 4.13125C13.1628 2.77292 11.5086 2.09375 9.55859 2.09375C8.40859 2.09375 7.33359 2.36042 6.33359 2.89375C5.33359 3.42708 4.49193 4.16042 3.80859 5.09375H6.55859V7.09375H0.558594V1.09375H2.55859V3.44375C3.40859 2.37708 4.44609 1.55208 5.67109 0.96875C6.89609 0.385417 8.19193 0.09375 9.55859 0.09375C10.8086 0.09375 11.9794 0.33125 13.0711 0.80625C14.1628 1.28125 15.1128 1.92292 15.9211 2.73125C16.7294 3.53958 17.3711 4.48958 17.8461 5.58125C18.3211 6.67292 18.5586 7.84375 18.5586 9.09375C18.5586 10.3438 18.3211 11.5146 17.8461 12.6062C17.3711 13.6979 16.7294 14.6479 15.9211 15.4563C15.1128 16.2646 14.1628 16.9063 13.0711 17.3813C11.9794 17.8563 10.8086 18.0938 9.55859 18.0938ZM12.3586 13.2937L8.55859 9.49375V4.09375H10.5586V8.69375L13.7586 11.8938L12.3586 13.2937Z" fill="white"/>
                </svg>
                Resetar Senha
            </button>
        </form>
        <a id="logout" onclick="fecharSair()" href="logout.php">Sair e Fechar</a>
    </div>
    <div class="footer">
        <span>Esse sistema foi desenvolvido por: <a href="">Luis Eduardo</a></span>
    </div>
    <script>
        function chamarSenha() {
            document.getElementById("chamarSenhaForm").submit();
        }
        function fecharSair() {
            window.close()
        }
    </script>
   <script>
    document.onkeydown = function (e) {
        if (e.keyCode === 116) {
            return false;
        }
    };
    window.addEventListener('resize', function () {
        window.resizeTo(400, 500);
    });
    window.addEventListener('DOMContentLoaded', function () {
        window.resizeTo(400, 500);
    });

    // Ocultar URL
    history.pushState(null, null, location.href);
    window.onpopstate = function () {
        history.go(1);
    };
    </script>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</html>


