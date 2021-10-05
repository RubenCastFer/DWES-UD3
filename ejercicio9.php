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
        $año = 1996;
        $añoActual = date("Y");
        $edad = $añoActual - $año;

        if ($edad<18){
            echo "no puede pasar";
        } elseif ($edad >= 18 && $edad<=65) {
            echo "puede pasar";
        } else {
            echo "demasiado mayor para pasar";
        }
    ?>
    <br>

    <?php
        $año = strtotime("01-06-1996");
        $añoActual = strtotime(date("d-m-Y"));
        $añosDiferencia = ($añoActual) - $año;
        echo $añosDiferencia;
        echo "<p>";
        $edad  = ($añosDiferencia / (365 * 60 * 60 * 24));
        echo $edad;
        echo "<p>";

        if ($edad<18){
            echo "no puede pasar";
        } elseif ($edad >= 18 && $edad<=65) {
            echo "puede pasar";
        } else {
            echo "demasiado mayor para pasar";
        }
    ?>
</body>
</html>