
<?php
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
    }
    $pasa=preg_match("/[A-Z][a-z]{15}[0-9]/",$contrasenya);
    if ($pasa == true){
        echo $contrasenya;
    }
?>
