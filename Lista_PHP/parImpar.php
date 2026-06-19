<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questao 6</title>
</head>
<body>

<form method="GET">

    <h1>Par ou ímpar?</h1>

    <label for="inputN">Informe um número:</label>
    
    <input type="text" name="n" id=inputN value="<?php if(isset($_GET["n"] )) {echo trim($_GET["n"]);}?>">
    <input type="submit" value="Enviar">

</form>
    
<div class="container">

<?php

    if(!isset($_GET["n"])){
        exit();
    }
    $numero=$_GET["n"];
    if($numero%2 == 0){
        echo "O número $numero é par";
    }
    else{
        echo "O número $numero é ímpar";
    }

?>
</div>


</body>
</html>