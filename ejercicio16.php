<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        phpinfo();
        /*function multiplicacion($multiplo1, $multiplo2){
            return $multiplo1*$multiplo2;
        }*/
        //lo mete aunque este
        include "funciones.inc.php";
        echo multiplicacion(3,7);
        echo "<br>";
        echo "hola 1";
        echo "<br>";

        //lo mete si no esta
        include_once "funciones2.inc.php";
        echo multiplicacion(3,7);
        echo "hola 3";
        echo "<br>";
        
        //termina la ejecucion del codigo
        require "funciones2.inc.php";
        echo multiplicacion(3,7);
        echo "hola 4";
        echo "<br>";

    ?>
</body>
</html>