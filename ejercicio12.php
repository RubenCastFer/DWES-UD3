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
    $dia=01;
    $mes=06;
    $año=1996;
    $sumaFecha =  $año+$mes+$dia;
    $sum=0;
        do{
            if($sumaFecha==0){
                $sumaFecha=$sum;
                $sum;
            }
        
            $sum+=$sumaFecha%10;
            $sumaFecha=($sumaFecha/10);
        }while ($sumaFecha>=1 || $sum >9);
        echo $sum;
    ?>
</body>
</html>