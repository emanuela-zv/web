<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 11 - Intervalo</title>
</head>
<body>

<?php
    session_start();    
    if(isset($_SESSION['numero1']) && isset($_SESSION['numero2'])) {
        echo "<p>Intervalo salvo na sessão: {$_SESSION['numero1']} a {$_SESSION['numero2']}</p>";

    };
?>

<form method="GET" action="intervalo.php">

        <label for="inputNumero1">Informe o primeiro número: </label>
        <input type="number" id="inputNumero1" name="numero1" required>
        <br><br>

        <label for="inputNumero2">Informe o segundo número: </label>
        <input type="number" id="inputNumero2" name="numero2" required>
        <br><br>

        <button type="submit">Salvar</button>
    </form>

    <?php
    
    if(isset($_GET['numero1']) && isset($_GET['numero2'])) {
        $_SESSION['numero1'] = $_GET['numero1'];
        $_SESSION['numero2'] = $_GET['numero2'];

        echo "<p>Intervalo salvo na sessão: {$_SESSION['numero1']} a {$_SESSION['numero2']}</p>";
    }

    ?>
    
</body>
</html>