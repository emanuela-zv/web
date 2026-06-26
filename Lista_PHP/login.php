<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 14 - Login</title>
</head>
<body>

    
    <H1>Login</H1>
    <form method="POST" action="">
        <label for="inputUsuario">Informe o nome de Usuário: </label>
        <input type="text" id="inputUsuario" name="usuario" required>
        <br><br>

        <label for="inputSenha">Informe a senha: </label>
        <input type="password" id="inputSenha" name="senha" required>
        <br><br>

        <button type="submit">Entrar</button>
    </form>

    <div>
        <?php
        session_start();
        $validUsername = "admin";
        $validPassword = "1234";

        if(isset($_POST['usuario']) && isset($_POST['senha'])) {
            $usuario = $_POST['usuario'];
            $senha = $_POST['senha'];

            if($usuario === $validUsername && $senha === $validPassword) {
                $_SESSION['loggedin'] = true;
                echo "<p>Login bem-sucedido! Bem-vindo, $usuario.</p>";
                echo '<form method="POST" action=""><button type="submit">Sair</button></form>';
            } else {
                echo "<p>Nome de usuário ou senha inválidos.</p>";
            }
        } 
        ?>
    </div>
 
    
</body>
</html>