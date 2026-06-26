<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 10 - IMC</title>
</head>
<body>

 <?php
    if(isset($_GET['usuario']) && isset($_GET['email'])) {
        $usuario = $_GET['usuario'];
        $email = $_GET['email'];
        echo "<p>Nome de Usuário: $usuario</p>";
        echo "<p>Email: $email</p>";
    } else {
        header("Location: imc1.php");
         exit();
    }
    ?>
    <form method="POST" action="imc3.php">

        <input type="hidden" name="usuario" value="<?php echo $usuario; ?>">
        <input type="hidden" name="email" value="<?php echo $email; ?>">

        <label for="inputPeso">Informe o peso (kg): </label>
        <input type="number" step="0.01" id="inputPeso" name="peso" required>
        <br><br>

        <label for="inputAltura">Informe a altura (m): </label>
        <input type="number" step="0.01" id="inputAltura" name="altura" required>
        <br><br>

        <button type="submit">Enviar</button>
    </form>

</body>
</html>