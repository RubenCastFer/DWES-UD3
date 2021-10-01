<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercicio5</title>
</head>
<body>
    <?php
        $numero = 4;
        $contador = 0;
        do{
             echo "$numero * $contador = ",$numero*$contador;
            $contador ++;
            echo "<p>";
        } while($contador <= 10)
        
    ?>
</body>
</html>