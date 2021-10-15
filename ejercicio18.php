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


        $errorPoblacion=" ";
        $errorCodigoPostal = " ";
        $errorProvincia =" ";

        if ($_SERVER["REQUEST_METHOD"]=="POST") {

            $poblacion = $_POST["poblacion"];
            if(!preg_match("/^[a-zA-Z]+$/", $poblacion)){
                echo "Introduzca solo texto","<br>";
                $errorPoblacion = "Introduzca solo texto";

            } else {
                echo $poblacion,"<br>";
            }

            
            $codigoPostal = $_POST["codigoPostal"];
            if(!preg_match("/^[0-9]+$/", $codigoPostal)){
                echo "Introduzca solo texto","<br>";
                $errorCodigoPostal = "Introduzca solo numeros";

            } else {
                echo $codigoPostal,"<br>";
            }

            $provincia = $_POST["provincias"];
            
            if (empty($provincia)){
                $errorProvincia = "Se debe de marcar una casilla";
            } else{
                echo $provincia,"<br>";
            }

            $imagen = $_POST["imagen"];

            $descripcion = $_POST["descripcion"];
            echo $descripcion,"<br>";
            $descripcion = strip_tags($descripcion);
            $descripcion = stripslashes($descripcion);
            $descripcion = htmlspecialchars($descripcion);
            echo $descripcion,"<br>";

            if ($errorPoblacion != "Introduzca solo texto" && $errorCodigoPostal != "Introduzca solo numeros" && $errorProvincia != "Se debe de marcar una casilla"){
                header ("Location: correcto.php");
            }
        }
    ?>

    <h1>Formulario</h1>
    <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">
        <div>
            <label for="poblacion">Poblacion</label>
            <input type="text" name="poblacion"/>
            <span style="color:red"><?php echo $errorPoblacion?></span>
        </div>

        <div>
            <label for="codigoPostal">Codigo Postal</label>
            <input type="text" name="codigoPostal"/>
            <span style="color:red"><?php echo $errorCodigoPostal?></span>
        </div>

        <div>
            <input type="radio" name="provincias" value="almeria">Almeria</input>
            <input type="radio" name="provincias" value="cadiz">Cadiz</input>
            <input type="radio" name="provincias" value="cordoba">Cordoba</input>
            <input type="radio" name="provincias" value="granada">Granada</input>
            <input type="radio" name="provincias" value="huelva">Huelva</input>
            <input type="radio" name="provincias" value="jaen">Jaen</input>
            <input type="radio" name="provincias" value="malaga">Malaga</input>
            <input type="radio" name="provincias" value="sevilla">Sevilla</input>
            <span style="color:red"><?php echo $errorProvincia?></span>

        </div>

        <div>
           <textarea name="descripcion" id="" cols="30" rows="10" placeholder="Descripción del municipio "></textarea>
        </div>

        <div>
            <input type="file" name="imagen"/>
        </div>
        <div>
            <input type="submit" name="enviar" value="Aceptar"/>
            <input type="reset" name="cancelar" value="Reset"/>
        </div>

    </form>
</body>
</html>