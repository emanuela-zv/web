<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form method="get">
        <label for="inputA">Informe o lado A: </label>
        <input type="text" id="inputA" name="a" value="<?php if(isset($_GET["a"])){echo $_GET["a"];}?>">
<br>
        <label for="inputB">Informe o lado B: </label>
        <input type="text" id="inputB" name="b" value="<?php if(isset($_GET["b"])){echo $_GET["b"];}?>">
<br>
        <label for="inputC">Informe o lado C: </label>
        <input type="text" id="inputC" name="c" value="<?php if(isset($_GET["c"])){echo $_GET["c"];}?>">

    <input type="submit" value="Verificar">

    </form>

    <div>
        <?php

            if(!isset($_GET["a"]) || !isset($_GET["b"]) || !isset($_GET["c"])){
                exit();
            }
            if (isset($_GET["a"], $_GET["b"], $_GET["c"])) {

                $ladoA = $_GET["a"];
                $ladoB = $_GET["b"];
                $ladoC = $_GET["c"];
            }

            if($ladoA+$ladoB>$ladoC && $ladoA+$ladoC>$ladoB && $ladoB+$ladoC>$ladoA){
                echo "É um triângulo";
                if($ladoA==$ladoB && $ladoA==$ladoC){
                    echo " Equilátero";
                }
                else if($ladoA==$ladoB || $ladoA==$ladoC || $ladoB==$ladoC){
                    echo " Isósceles";
                }
                else{
                    echo " Escaleno";
                }
            }
            else{
                echo "Não é um triângulo";
            }

        ?>

    </div>
    


</body>
</html>