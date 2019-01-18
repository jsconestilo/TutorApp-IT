<?php
	require "funciones.php";

	if(isset($_POST["btnLogin"])){
		date_default_timezone_set("America/Mexico_city");
		$conexion = conexionDB();
	   	$nombre_usuario = trim($_POST["txtUsername"]);
	    $password_usuario = trim($_POST["txtPassword"]); //md5(trim($_POST["txtPassword"]));
	    $consulta = "SELECT * FROM padres_alumnos WHERE username = \"$nombre_usuario\" AND password = \"$password_usuario\"";
	    $resultado = $conexion->query($consulta);
	    if($resultado->num_rows != 1 ){
	        $resultado->free();
	        $conexion->close();
	        header("location: ../index.php");  //"Usuario no identificado correctamente"
	    }else{
	        while ($filaPadre = $resultado->fetch_object()){
	            $id_usuario = $filaPadre->padre_id;
	            $id_alumno = $filaPadre->alumno_id;
	        }
	        $resultado->free();
	        $conexion->close();
	        session_start();
	        $_SESSION["idPadreIdentificado"] = $id_usuario;
	        $_SESSION["idAlumnoVisualizado"] = $id_alumno;
	        header("location: ../panelTutorias.php");   //"Usuario identificado correctamente"
	    }
	}else{
		header("location: ../index.php");  //"Usuario abusivo no identificado"
	}
?>