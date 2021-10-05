<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table border="1" cellpadding="0" cellspacing="0" background="red" >
        <tr bgcolor= 'red'>
            <th>
            <font color = white> 2 Elevado a 
            </th>
            <th>
            <font color = white> Resultado
            </th>
        <tr>

        <?php
            $limite = 10;
            for ($i = 0; $i <= $limite; $i++ ){
                if ($i == 4){
                   
                    continue;
                }
                if($i == 6){
                    break;
                }
                $resultado = pow(2,$i);
                echo "<tr bgcolor= 'red'>
                        <th><font color = white> $i </th>
                        <th><font color = white>  $resultado </th> 
                    <tr>";
                
            }
        ?>
    </table>
</body>
</html>