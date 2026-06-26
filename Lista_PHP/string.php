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
    echo "É palíndromo <br>";
    }
    else{
    echo "Não é palíndromo <br>";
    }

    $palavraM = strtoupper($palavra);
    $letras = str_split($palavraM);
    $vogais = 0;
    $consoantes = 0;
    $totalLetras = count($letras);

    for($i=0; $i<$totalLetras; $i++){
        
        if($letras[$i] == "A" || $letras[$i]=="E" || $letras[$i]=="I" || $letras[$i]=="O" || $letras[$i]=="U"){
            $vogais++; 
        }
        else{
            $consoantes++;
        }
    }

    echo "Número de vogais: $vogais <br>";
    echo "Número de consoantes: $consoantes";


?>
</div>
</body>
</html>