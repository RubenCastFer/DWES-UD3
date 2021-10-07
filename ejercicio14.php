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
        $meses = [];
        $meses [] = "Enero";
        $meses [] = "Febrero";
        $meses [] = "Marzo";
        var_dump($meses);
        echo "<p>";
        echo "el array contiene" + count($meses);
        $meses [] = 7;
        $meses [] = "Abril";
        $meses [] = true;
        $meses [] = "junio";
        echo "<p>";
        print_r($meses);
        echo "<p>";
        echo "El array contiene", count($meses);
        unset($meses[3]);
        echo "<p>";
        echo "el ", $meses[3], ", desaparece";
        echo "<p>";
        print_r($meses);
        $meses [4] = "Mayo";
        $meses [] = "Julio";
        $meses [] = "Agosto";
        $meses [] = "Septiembre";
        $meses [] = "Octubre";
        $meses [] = "Noviembre";
        $meses [] = "Diciembre";
        var_dump($meses);
        echo $meses[3], ", 7 desaparece";


    ?>
</body>
</html>