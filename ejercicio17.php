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
    $errorNombre=" ";
    $errorApellido=" ";
    $errorDireccion=" ";
    $errorConexion=" ";
    $errorInstituto=" ";
    $errorEstudios=" ";
    $errorDias=" ";
    $errorMaterias=" ";

    
    if ($_SERVER["REQUEST_METHOD"]=="POST") {
        $nombre = $_POST["nombre"];
            echo $nombre,"<br>";
        $nombre = strip_tags($nombre);
        $nombre = stripslashes($nombre);
        $nombre = htmlspecialchars($nombre);
            echo $nombre,"<br>";
        if (empty($nombre)){
            $errorNombre = "El campo debe de estar relleno";
        }
        
        
        $apellidos = $_POST["apellidos"];
            echo $apellidos,"<br>";
        $apellidos = strip_tags($apellidos);
        $apellidos = stripslashes($apellidos);
        $apellidos = htmlspecialchars($apellidos);
            echo $apellidos,"<br>";
        if (empty($apellidos)){
            $errorApellido = "El campo debe de estar relleno";
        }

        $direccion = $_POST["direccion"];
            echo $direccion,"<br>";
        $direccion = strip_tags($direccion);
        $direccion = stripslashes($direccion);
        $direccion = htmlspecialchars($direccion);
            echo $direccion,"<br>";
        if (empty($direccion)){
            $errorDireccion = "El campo debe de estar relleno";
        }

        $estudios = $_POST["estudios"];
            echo $estudios,"<br>";
        $estudios = strip_tags($estudios);
        $estudios = stripslashes($estudios);
        $estudios = htmlspecialchars($estudios);
            echo $estudios,"<br>";
        if (empty($estudios)){
            $errorEstudios = "El campo debe de estar relleno";
        }

        $instituto = $_POST["instituto"];
            echo $instituto,"<br>";
        
        $errorInstituto = "";
        if (empty($instituto)){
        $errorInstituto = "El campo debe de estar relleno";
        }
        $pasa=preg_match("/IES./",$instituto);
        if ($pasa == false){
            $errorInstituto = "Introduce el prefijo correcto (IES.)";
        }
            echo $instituto,"<br>";


        $conexion = $_POST["conexion"];
            echo $conexion,"<br>";
        if (empty($conexion)){
        $errorConexion = "Se debe de marcar una casilla";
        }

        $dias = [];
        foreach($_POST["dias"] as $dia){
                echo $dia,"<br>";
            $dias[]=$dia;
        }
        if (sizeof($dias)==0){
            $errorDias = "Se debe de seleccionar algun dia";
            }

        $materias = [];
        foreach ($_POST["materia"] as $materia){
            echo $materia,"<br>";
            $materias[]=$materia;
        }
        if (sizeof($materias)==0){
            $errorMaterias = "Se debe de seleccionar alguna asignatura";
        }

        $textoFinal = $_POST["textoFinal"];
            echo $textoFinal,"<br>";
        $textoFinal = strip_tags($textoFinal);
        $textoFinal = stripslashes($textoFinal);
        $textoFinal = htmlspecialchars($textoFinal);
            echo $textoFinal,"<br>";

    }
?>


    <h1>Formulario de opciones</h1>
    <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">
        <div>
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre"/>
            <span style="color:red"><?php echo $errorNombre?></span>
        </div>
        <div>
            <label for="apellidos">Apellidos</label>
            <input type="text" name="apellidos"/>
            <span style="color:red"><?php echo $errorApellido?></span>
        </div>
        <div>
            <label for="direccion">Dirección</label>
            <input type="text" name="direccion"/>
            <span style="color:red"><?php echo $errorDireccion?></span>
        </div>
        <div>
        <input type="radio" name="conexion" value="wifi">Wifi</input>
        <input type="radio" name="conexion" value="cable">Cable</input>
        <input type="radio" name="conexion" value="fibra">Fibra</input>
        <span style="color:red"><?php echo $errorConexion?></span>
        </div>
        <div>
            <label for="instituto">Instituto</label>
            <input type="text" name="instituto"/>
            <span style="color:red"><?php echo $errorInstituto?></span>
        </div>
        <div>
            <label for="estudios">Estudios elegidos</label>
            <input type="text" name="estudios"/>
            <span style="color:red"><?php echo $errorEstudios?></span>
        </div>
        <select name="dias[]" multiple>
           <option value="lunes">Lunes</option>
           <option value="martes">Martes</option>
           <option value="miercoles">Miércoles</option>
           <option value="jueves">Jueves</option>
           <option value="viernes">Viernes</option>
       </select><span style="color:red"><?php echo $errorDias?></span>
       <h1>Preferencias</h1>
       <div>
       <input type="checkbox" name="materia[]" value="historia">Historia</imput>
       <input type="checkbox" name="materia[]" value="geografia">Geografia</imput>   
       <input type="checkbox" name="materia[]" value="lengua">Lengua</imput>   
       <input type="checkbox" name="materia[]" value="matematicas">Matematicas</imput>   
       <span style="color:red"><?php echo $errorMaterias?></span>
       </div>
       <div>
           <textarea name="textoFinal" id="" cols="30" rows="10" placeholder="Inserte aqui el texto"></textarea>
       </div>
        <div>
            <input type="submit" name="enviar" value="Aceptar"/>
            <input type="reset" name="cancelar" value="Cancelar"/>
        </div>
    </form>
</body>
</html>