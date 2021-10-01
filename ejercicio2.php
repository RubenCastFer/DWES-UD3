<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercicio 2</title>
</head>
<body>
    <?php
    $var1 = 30;
    $var2 = 50;
    $var3 = 20;
    if ($var3 > $var1 && $var3 > $var2){
        echo $var3;

    } elseif ($var2 > $var3 && $var2 > $var1) {
        echo $var2;
    } else{
        echo $var1;
    }
    ?>
</body>
</html>