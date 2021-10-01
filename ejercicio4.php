<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercicio 4</title>
</head>
<body>
    <?php
        $numero = 6;
        $contador = 0;
        while($contador <= 10){
            echo "$numero * $contador = ",$numero*$contador;
            $contador ++;
            echo "<p>";
        }
    ?>
</body>
</html>