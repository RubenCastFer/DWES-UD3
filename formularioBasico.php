<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
<?php
    $errorContra="";
    $errorUsuario="";
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $usuario = ""; 
        $contrasenya = "";
        $usuario = $_POST["usuario"];
        $contrasenya = $_POST["contrasenya"];
            if (empty($usuario)) {
                echo "El usuario debe estar relleno<br>";
            }
            if (empty($contrasenya)) {
                echo "La contraseña debe estar rellena<br>";
            }
        //echo "el Usuario $usuario tiene la contraseña $contrasenya";
        $usuario = strip_tags($usuario);
        //echo $usuario;
        echo "<br>";
        $usuario = stripslashes($usuario);
        //echo $usuario;
        echo "<br>";

        $usuario = htmlspecialchars($usuario);
        
        $pasa = preg_match("/[0-9a-zA-Z_-]{8,}/",$usuario);
        if ($pasa == true){
            echo $usuario;
        } else{
            $errorUsuario = "error";
        }
        $pasa=preg_match("/[A-Z][a-z]{15}[0-9]/",$contrasenya);
        if ($pasa == true){
            echo $contrasenya;
        }else{
            $errorContra = "error";
        }

    }
    
?>


    <h1>Formulario Actividad Aula</h1>
    <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">
        <p>
            <label for="usuario">Usuario</label>
            <input type="text" name="usuario"/>
            <span style="color:red"><?php echo $errorUsuario?></span>
        </p>
        <p>
            <label for="contrasenya">Contraseña</label>
            <input type="password" name="contrasenya"/>
            <span style="color:red"><?php echo $errorContra?></span>
        </p>
        <p>
<input type="submit" name="enviar" value="Aceptar"/>
<input type="reset" name="cancelar" value="Cancelar"/>
  </p>
    </form>


</html>