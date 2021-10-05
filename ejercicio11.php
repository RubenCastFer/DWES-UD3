<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1" cellpadding="0" cellspacing="0">
    <?php
       $contador=0;
       $verde = "green";
        
        $limite = 10;
        for ($i = 0; $i < $limite; $i++ ){
            $contador++;
            
            echo "<tr>";
            for ($a = 1; $a <= $limite; $a++){
                //$contador++;
                if ($a == 10) {
                    $por = 10 * ($i+1);
                    if ($contador%2==0){
                        echo "<th bgcolor='$verde'>$por</th>";
                    } else {
                        echo "<th>$por</th>";

                    }
                } else{
                    if ($contador%2==0){
                        echo "<th bgcolor='$verde'>$i$a</th>";
                    } else {
                        echo "<th>$i$a</th>";

                    }
                    
                }
               
            }      
            echo "<tr>";
            
        }
    ?>
    </table>
</body>
</html>