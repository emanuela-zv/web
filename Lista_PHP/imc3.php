<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 10 -IMC</title>
</head>
<body>

<?php   
    $usuario = $_POST['usuario'];
    $email = $_POST['email'];
    $peso = $_POST['peso'];
    $altura = $_POST['altura'];

        if(isset($_POST['peso']) && isset($_POST['altura'])) {
        $peso = $_POST['peso'];
        $altura = $_POST['altura'];
    } else {
        echo "<p>Por favor, preencha todos os campos na página 2.</p>";
        header("Location: imc2.php");
         exit();
    }

    $imc = $peso / ($altura * $altura);
    $imcFormatado = number_format($imc, 2);

    echo "<h2>Dados coletados:</h2>";
    echo "<p>Nome de Usuário: $usuario</p>";
    echo "<p>Email: $email</p>";
    echo "<p>Peso: $peso kg</p>";
    echo "<p>Altura: $altura m</p>";
    echo "<p>IMC: $imcFormatado</p>";
?>
</body>
</html>