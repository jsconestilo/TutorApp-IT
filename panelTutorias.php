<?php
session_start();
if(!isset($_SESSION["idPadreIdentificado"])){
    header("location: index.php");
}
require "php/funciones.php";
?>
<!doctype html>
<html lang="es-MX">
<head>
	<meta charset="UTF-8">
	<meta name="description" content="La Plataforma de Servicios de Orientación y Tutoría Virtual TutorApp IT - del Centro de Bachillerato José Vasconcelos es una herramienta de apoyo académico caracterizada por orientar y apoyar el desarrollo integral de los alumnos, contribuyendo a abatir los problemas de reprobación, deserción y rezago.">
	<meta name="viewport" content="width=device-width,user-scalable=no,initial-scale=1,minimum-scale=1,maximum-scale=1">
	<title>Sistema de Orientación y Tutoría Académica - Panel de Administración</title>
	<link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
	<link rel="apple-touch-icon-precomposed" href="apple-touch-icon-precomposed.png" />
	<link rel="apple-touch-icon" sizes="72x72" href="apple-touch-icon-72x72.png" />
	<link rel="apple-touch-icon" sizes="114x114" href="apple-touch-icon-114x114.png" />
	<link rel="apple-touch-icon" sizes="144x144" href="apple-touch-icon-144x144.png" />
	<link rel="author" type="text/plain" href="humans.txt" />
	<link rel="stylesheet" href="assets/css/estilos_tutorApp.css">
	<link rel="stylesheet" href="assets/css/pseduca_themeMobile.css">
	<link rel="stylesheet" href="libs/jquery-mobile/jquery-mobile-1.4.0.min.css" />
	<link rel="stylesheet" href="libs/photoswipe/photoswipe.css" />
	<script src="libs/jquery/jquery-2.0.3.min.js"></script>
	<script src="libs/jquery-mobile/jquery-mobile-1.4.0.min.js"></script>
	<script src="libs/photoswipe/klass.min.js"></script>
	<script src="libs/photoswipe/code.photoswipe.jquery-3.0.5.js"></script>
	<script src="assets/js/scripts_tutorApp.js"></script>
</head>
<body>
	<!-- Home Sistema de Administración TutorApp -->
	<div data-role="page" data-theme="c">
		<!-- Panel de Navegación Administrativa TutorApp -->
		<div data-role="panel" id="panel_administracion" data-position="left" data-display="reveal" data-theme="b">
			<ul data-role="listview" data-count-theme="c">
				<li data-icon="delete"><a href="#" data-rel="close">Cerrar</a></li>
			</ul>
			<h4 class="titulo-panel">Estimado Padre de Familia</h4>
			<p class="informacion-panel">Sirvase en hacer clic sobre los siguiente enlaces para conocer detalladamente la situación actual que guarda su hijo(a) dentro de la Institución Educativa.</p>
			<ul data-role="listview" data-count-theme="c">
				<li data-icon="user"><a href="?opcion=alumno">Acerca del Alumno</a></li>
				<li data-icon="false"><a href="?opcion=reportes">Reportes Recientes<span class="ui-li-count"><?php echo numeroReportes($_SESSION["idAlumnoVisualizado"]); ?></span></a></li>
				<li data-icon="star"><a href="?opcion=profesores">Profesores Asignados</a></li>
				<li data-icon="calendar"><a href="?opcion=materias">Materias Cursadas</a></li>
			</ul>
			<img src="assets/img/miniLogotipoDepartamentoTutorias.png" class="minilogotipo-tutorApp" alt="">
		</div>
		<!-- Panel de Cierre de Sesion TutorApp -->
		<div data-role="panel" id="panel_logout" data-position="right" data-theme="b" data-display="overlay">
			<ul data-role="listview">
				<li data-icon="delete"><a href="#" data-rel="close">Cerrar</a></li>
			</ul>
			<h4 class="titulo-panel">Estimado Padre de Familia</h4>
			<p class="informacion-panel">Para dar por finalizada su sesión de administrador, sirvase en hacer clic sobre el siguiente enlace.</p>
			<a href="php/cerrar_sesion.php" data-role="button" data-ajax="false" data-theme="c">Cerrar Sesión</a>
			<img src="assets/img/miniLogotipoDepartamentoTutorias.png" class="minilogotipo-tutorApp" alt="">
		</div>
		<!-- Contenido Central Sistema de Administración TutorApp -->
		<div data-role="header" data-position="fixed">
			<h1>Tutoría Académica</h1>
			<a href="#panel_administracion" data-icon="bars" data-iconpos="notext" data-theme="b"></a>
			<a href="#panel_logout" data-icon="gear" data-iconpos="notext" data-theme="b"></a>
		</div>
		<div data-role="content">
			<div class="contenedor-contenido">
				<?php contenidoPorMostrar($_GET["opcion"], $_SESSION["idPadreIdentificado"],  $_SESSION["idAlumnoVisualizado"]); ?>
			</div>
		</div>
		<div data-role="footer" data-position="fixed">
			<h6>Preparatoria José Vasconcelos</h6>
		</div>
	</div>	
 </body>
 </html>