<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 13 - array de números</title>
</head>
<body>


    <form method="GET">
        <label for="inputNumeros">Informe os números separados por vírgula: </label>
        <input type="text" id="inputNumeros" name="numeros" required>
        <br><br>

        <button type="submit">Enviar</button>
    </form>

    <?php

    if(isset($_GET['numeros'])) {
        $numeros = $_GET['numeros'];
        $arrayNumeros = explode(',', $numeros);
        $arrayNumeros = array_map('trim', $arrayNumeros); 

        $soma = array_sum($arrayNumeros);
        $menor = min($arrayNumeros);
        $maior = max($arrayNumeros);

        echo "<h2>Resultados:</h2>";
        echo "<p>Soma: $soma</p>";
        echo "<p>Menor número: $menor</p>";
        echo "<p>Maior número: $maior</p>";

    }
    ?>
    
</body>
</html>