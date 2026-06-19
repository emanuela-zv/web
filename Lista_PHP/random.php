<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questao 4</title>

    <style>

        .container{
            display: flex;
            height: 100vh;
            justify-content: center;
            align-items: center;
            font-size: 30pt;
        }

    </style>
</head>
<body>

<form method="GET">

        <H1>Informe o intervalo</H1>


        <label for="inputA">Valor mínimo</label>
        <input type="text" name= "a" id=inputA value="<?php if(isset($_GET["a"])) {echo trim($_GET["a"]);}?>">
        <label for="inputB">Valor máximo</label>
        <input type="text" name="b" id="inputB" value="<?php if(isset($_GET["b"])) {echo trim($_GET["b"]);}?>">

        <input type="submit" value="Enviar">
</form>
    
<div class="container">
    
<?php 

        if(!isset($_GET["a"]) || !isset($_GET["b"])){
            exit();
        };
        if(trim($_GET["a"])=="" || trim($_GET["b"])==""){
            exit();
        };
        $valormin=$_GET["a"];
        $valormax=$_GET["b"];
        $random = rand($valormin, $valormax);
        echo $random;

?>

</div>

</body>
</html>