<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questão 8 - Soma de Números</title>
</head>
<body>

    <form method="n">
        <label for="inputN">Informe um número</label>
        <input type="text" id="inputN" name="n" value="<?php if(isset($_GET["n"])){echo $_GET["n"];}?>
        ">

        <input type="submit" value="Somar">
    </form>

    <div>
        <?php

            if (!isset($_GET["n"])){
                exit("Parâmetro num não enviado");
            } 
            $num=$_GET["n"];

            function soma($numArray){
                $soma = 0;
                for($i=0; $i<count($numArray); $i++){
                    $soma += (int) $numArray[$i];
                }
                return $soma;
            }

            $valores = explode(",",$num);
            $resultado = soma($valores);
            echo $resultado;

        ?>

    </div>
    
</body>
</html>