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
        $añosTrabajados =3;
        define("COBRA",40000);

        if($añosTrabajados>10){
            echo "Cobra ", COBRA*0.1+COBRA;
        } elseif ($añosTrabajados <= 10 && $añosTrabajados > 5){
            echo "Cobra ", COBRA*0.07+COBRA;
        } elseif ($añosTrabajados <= 5 && $añosTrabajados > 3){
            echo "Cobra ", COBRA*0.05+COBRA;
        }  elseif ($añosTrabajados <= 3){
            echo "Cobra ", COBRA*0.03+COBRA;
        }
    ?>
</body>
</html>