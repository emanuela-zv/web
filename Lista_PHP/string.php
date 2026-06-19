<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Palavra</title>
</head>
<body>
    
<h1>Informações sobre uma palavra</h1>

<form method="GET">

<label for="inputP">Informe uma palavra:</label>

<input type="text" name="p" id=inputP value="<?php if(isset($_GET["P"] )) {echo trim($_GET["P"]);}?>">
<input type="submit" value="Enviar">

</form>

<div class="container">

<?php


if(!isset($_GET["p"])){
    exit();
}
$palavra = $_GET["p"];


$tam=mb_strlen(trim($palavra));
echo "Tamanho da palavra: $tam <br>";

$palInv=strrev(trim($palavra));
if ($palInv == $palavra){
    echo "É palíndromo ";
}
else{
    echo "Não é palíndromo";
}



?>
</div>
</body>
</html>