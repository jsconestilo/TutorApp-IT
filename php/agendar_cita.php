<?php
	error_reporting(E_ALL ^ E_WARNING ^ E_NOTICE);
	
	define(SERVIDOR, "localhost");
	define(USUARIO, "root");
	define(PASSWORD, "");
	define(DB, "tutoriasJV");

	$reporte_id = $_GET["reporte"];

	function conexionDB(){
		$conexion = new mysqli(SERVIDOR, USUARIO, PASSWORD, DB);
		$conexion->query("SET NAMES UTF8");
		$conexion->query("SET CHARACTER SET UTF8");
		return $conexion;
	}

	function reporteVisitadoYAceptado($reporte_id){
		$conexion = conexionDB();
		$consulta = "UPDATE reportes SET reporte_visto = true, fecha_lectura = NOW() WHERE id = $reporte_id";
		$resultado = $conexion->query($consulta);
		/*$reportes = $resultado->num_rows;
		/*return $reportes;*/
		$conexion->close();
		header("location: ../panelTutorias.php?opcion=reportes");
	}

	reporteVisitadoYAceptado($reporte_id);
?>