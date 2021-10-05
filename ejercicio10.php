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
        $numero = 5;
        $resultado = 1;
        for ($i = 1; $i<=$numero; $i++){
            $resultado *= $i;
        }
        echo $resultado
    ?>
</body>
</html>