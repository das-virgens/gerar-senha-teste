

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
        <form action="trocarsenha.php" class="formLogin" method="POST">
            <h1>Esqueci minha Senha - Painel de Senha</h1>
            <p>Digite os seus dados de acesso no campo abaixo.</p>
            <label for="email">Usuario</label>
            <input type="text" placeholder="Digite seu usuário" autofocus="true" id="username" name="username" required />
            <label for="password">Palavra Chave</label>
            <input type="password" placeholder="Digite sua palava-chave"  id="palavra" name="palavra" required />
            <label for="password">Senha</label>
            <input type="password" placeholder="Digite sua senha"  id="password" name="password" required />
            <label for="password">Confirme a senha</label>
            <input type="password" placeholder="Digite sua senha"  id="confirmpassword" name="confirmpassword" required />
            <a href="login.php">Lembrei da minha senha</a>
            <input type="submit" value="Acessar" class="btn" />
        </form>
    </div>
    
</body>
</html>
