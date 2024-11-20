
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" href="images/icone.png" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style/main.css">
</head>
<body>
    <div class="page">
        <img src="images/logo-anhanguera.png" style="margin-bottom: 15px;" alt="">
        <form action="cadastrarusuario.php" class="formLogin" method="POST">
        <h1>Cadastro - Painel de Senha</h1>
        <p>Digite os seus dados de acesso no campo abaixo.</p>
        <label for="username">Nome de Usuário:</label>
        <input type="text" id="username" name="username" placeholder="Digite o nome de usuario Exemplo; 'daniela; victor; bruno'" required>
        <label for="password">Sua Senha:</label>
        <input type="password" id="password" name="password" placeholder="Digite sua ****" required>
        <label for="password">Confirme Senha:</label>
        <input type="password" id="password" name="password" placeholder="Confirme sua ****" required>
        <label for="palavra">Palavra-Chave:</label>
        <input type="password" id="palavra" name="palavra" placeholder="Digite sua palavra chave ( Ela servirá para reset de senha )" required>
        <a href="login.php">Já tenho conta</a>
        <input type="submit" value="Acessar" class="btn" />
        </form>
    </div>
    
</body>
</html>
