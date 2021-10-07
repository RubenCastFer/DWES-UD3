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
        $productos=[];
        $productos[]=array("Nombre"=>"Pera","Precio"=>3,"Stock"=>100,"Identificador"=>"ab001");
        $productos[]=array("Nombre"=>"Patata","Precio"=>5.50,"Stock"=>50,"Identificador"=>"ab002");
        $productos[]=array("Nombre"=>"Cebolla","Precio"=>2.12,"Stock"=>10,"Identificador"=>"ab003");
        var_dump($productos);
        echo "<p>";
        echo $productos[0]["Nombre"];
        echo "<table border=3px>";
            echo "<tr>";
                echo "<th>Nombre</th>";
                echo "<th>Precio</th>";
                echo "<th>Stock</th>";
                echo "<th>ID</th>";
            echo "</tr>";
        foreach($productos as $producto){
            echo "<tr>";
                echo "<td>$producto[Nombre]</td>";
                echo "<td>$producto[Precio]</td>";
                echo "<td>$producto[Stock]</td>";
                echo "<td>$producto[Identificador]</td>";
            echo "</tr>";
        }
        echo "</table>";
    ?>
</body>
</html>