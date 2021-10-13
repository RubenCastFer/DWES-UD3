<?php
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
    if (empty($apellido)){
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

?>