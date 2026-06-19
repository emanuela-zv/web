<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabuada</title>
</head>
<body>
    
<form method="GET">

<h1>Tabuada</h1>

<label for="inputN">Informe um número:</label>

<input type="text" name="n" id=inputN value="<?php if(isset($_GET["n"] )) {echo trim($_GET["n"]);}?>">
<input type="submit" value="Enviar">

</form>

<div class="container">

<?php

    if(!isset($_GET["n"])){
        exit();
    }

    function tabuada($numero){

        for($i=1; $i<=10; $i++){
            $conta=$numero*$i;
            echo "<br> $numero * $i = $conta";
        };
    }

    tabuada($_GET["n"]);


?>
</div>

</body>
</html>