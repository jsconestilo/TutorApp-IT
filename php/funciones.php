<?php  
	error_reporting(E_ALL ^ E_WARNING ^ E_NOTICE);
	
	/*****************************************************/
	/* Modifique los valores en base a la configuración
	de su servidor de base de datos, así como los datos
	de acceso y nombre de la base de datos exportada     */

	define(SERVIDOR, "localhost");
	define(USUARIO, "root");
	define(PASSWORD, "");
	define(BASE_DE_DATOS, "tutoriasjv");
	
	/*Gracias, esto es todo lo que debería editar...     */
	/*****************************************************/

	function conexionDB(){
		$conexion = new mysqli(SERVIDOR, USUARIO, PASSWORD, BASE_DE_DATOS);
		date_default_timezone_set("America/Mexico_city");
		$conexion->query("SET NAMES UTF8");
		$conexion->query("SET CHARACTER SET UTF8");
		return $conexion;
	}

	function numeroReportes($id_alumno){
		$conexion = conexionDB();
		$consulta = "SELECT * FROM reportes WHERE alumno_id = $id_alumno AND reporte_visto = 0";
		$resultado = $conexion->query($consulta);
		$reportes = $resultado->num_rows;
		$conexion->close();
		return $reportes;
	}

	function numeroMateriasReprobadas($id_alumno){
		$conexion = conexionDB();
		$consulta = "SELECT * FROM alumnos WHERE id = $id_alumno";
		$resultado = $conexion->query($consulta);
		$filaAlumno = $resultado->fetch_assoc();
		$conexion->close();
		return $filaAlumno["num_materias_reprobadas"];
	}

	function reportesDetallados($id_padre_familia, $id_alumno){
		$conexion = conexionDB();
		$consulta = "SELECT reportes.id AS reporte_id, reportes.fecha_reporte AS fecha_reporte, reportes.descripcion AS descripcion_reporte, materias.materia AS nombre_materia, profesores.nombre AS nombre_profesor, profesores.apellido_paterno AS paterno_profesor, profesores.apellido_materno AS materno_profesor, profesores_materias.horario AS horario_clase FROM reportes INNER JOIN materias ON reportes.materia_id = materias.id INNER JOIN alumnos ON reportes.alumno_id = alumnos.id INNER JOIN grupos ON alumnos.grupo_id = grupos.id INNER JOIN profesores_materias ON materias.id = profesores_materias.materia_id INNER JOIN profesores ON profesores_materias.profesor_id = profesores.id WHERE reportes.alumno_id = $id_alumno AND reportes.reporte_visto = 0 AND grupos.id = profesores_materias.grupo_id ORDER BY fecha_reporte DESC";
		$resultado = $conexion->query($consulta);
		$num_reportes = $resultado->num_rows;
		if($num_reportes != 0){
			echo '<ul data-role="listview" data-inset="true">';
				echo '<li data-role="list-divider" data-theme="b"><h2>Actividades no Concretadas</h2></li>';
				while($filaReporte = $resultado->fetch_assoc()){
					echo '<li data-role="list-divider" data-theme="a"><h3>'.$filaReporte["nombre_materia"].'</h3>';
					echo '<li><b>Fecha:</b> '.formatearFecha($filaReporte["fecha_reporte"]);
		        		echo '<ul>';
		        			echo '<li class="atributo-doble"><b>Profesor:</b> '.$filaReporte["nombre_profesor"].' '.$filaReporte["paterno_profesor"].'</li>';
				            echo '<li class="descripcion-reporte"><b>Reporte:</b><br /> '.$filaReporte["descripcion_reporte"].'</li>';
				            echo '<li class="atributo"><b>Horario de Clase:</b> '.formatoHorarioClaseProfesor($filaReporte["horario_clase"]).'</li>';
				            echo '<li><a href="php/agendar_cita.php?reporte='.$filaReporte["reporte_id"].'" data-ajax="false" data-theme="b" data-icon="recycle" data-inline="true" data-mini="true" data-role="button">Enterado de la situación</a></li>';
		            	echo '</ul>';
		    		echo '</li>';
	    		}
			echo '</ul>';
		}else{
			$consultaB = "SELECT alumnos.nombre AS nombre_alumno, alumnos.apellido_paterno AS paterno_alumno, alumnos.apellido_materno AS materno_alumno, grupos.grupo AS grupo, tutores_academicos.nombre AS nombre_tutor, tutores_academicos.apellido_paterno AS paterno_tutor, tutores_academicos.apellido_materno AS materno_tutor FROM alumnos INNER JOIN grupos ON alumnos.grupo_id = grupos.id INNER JOIN tutores_academicos ON tutores_academicos.semestre_id = grupos.semestre_id WHERE alumnos.id = $id_alumno";
			$resultadoB = $conexion->query($consultaB);
			$filaAlumnoTutor = $resultadoB->fetch_assoc();
			$alumno = $filaAlumnoTutor[nombre_alumno]." ".$filaAlumnoTutor[paterno_alumno]." ".$filaAlumnoTutor[materno_alumno];
			$tutor = $filaAlumnoTutor[nombre_tutor]." ".$filaAlumnoTutor[paterno_tutor]." ".$filaAlumnoTutor[materno_tutor];
			echo '<ul data-role="listview" data-inset="true">';
				echo '<li data-role="list-divider" data-theme="b"><h2>Actividades no Concretadas</h2></li>';
				echo '<li data-role="list-divider" data-theme="a"><h3>Estimado Padre de Familia</h3>';
				echo '<li><b>Fecha:</b> '.formatearFecha(date("Y-m-d"));
	        		echo '<ul>';
	        			echo '<li class="descripcion-reporte atributo-doble"><b>Informe:</b><br />A través de este medio me es grato saludarte e informarle que por el momento <b>'.$alumno.'</b> ha cumplido con todo lo establecido en cada una de sus correspondientes materias. Sin mas que expresar por el momento, le exhorto a seguir visitando continuamente TutorApp para estar bien informado acerca del progreso académico y conductual de su hijo(a).</li>';
			            echo '<li class="atributo"><b>Tutor:</b><br /> '.$tutor.'</li>';
	            	echo '</ul>';
	    		echo '</li>';
			echo '</ul>';
		}
		$conexion->close();
	}

	function informacionAlumno($id_padre_familia, $id_alumno){
		$conexion = conexionDB();
		$consulta = "SELECT alumnos.credencial AS credencial, alumnos.nombre AS nombre_alumno, alumnos.apellido_paterno AS paterno_alumno, alumnos.apellido_materno AS materno_alumno, alumnos.num_materias_reprobadas AS reprobadas_alumno, alumnos.fotografia_url AS fotografia_alumno, grupos.grupo AS grupo_alumno, semestres.semestre AS semestre_alumno, alumnos.email AS email_alumno, tutores_academicos.tratamiento AS tratamiento_tutor, tutores_academicos.nombre AS nombre_tutor, tutores_academicos.apellido_paterno AS paterno_tutor, tutores_academicos.apellido_materno AS materno_tutor, tutores_academicos.email AS email_tutor, tutores_academicos.telefono AS telefono_tutor FROM alumnos INNER JOIN grupos ON alumnos.grupo_id = grupos.id INNER JOIN semestres ON grupos.semestre_id = semestres.id INNER JOIN tutores_academicos ON semestres.id = tutores_academicos.semestre_id WHERE alumnos.id = $id_alumno";
		$resultado = $conexion->query($consulta);
		$filaAlumno = $resultado->fetch_assoc();
		echo '<ul data-role="listview" class="contenedor-informacion-persona" data-inset="true">';
			echo '<li data-role="list-divider" data-theme="b">Información del Alumno</li>';
			echo '<li data-icon="false">
					<a>
						<img src="assets/fotos/alumnos/'.$filaAlumno["fotografia_alumno"].'" class="foto-persona" />
						<h4>Nombre del Alumno</h4>
						<p class="informacion-persona">'.$filaAlumno["nombre_alumno"].' '.$filaAlumno["paterno_alumno"].' '.$filaAlumno["materno_alumno"].'</p>
						<p class="informacion-persona">Credencial: '.$filaAlumno["credencial"].'</p>
					</a>
				  </li>';
			echo '<li data-icon="false">
					<a>
						<h4>Semestre Cursado</h4>
						<p class="informacion-persona">'.ucwords($filaAlumno["semestre_alumno"]).' - Grupo: '.$filaAlumno["grupo_alumno"].'</p>
					</a>
				  </li>';
			echo '<li data-icon="false">
					<a>
						<h4>Acomulado Extraordinarios</h4>
						<span class="ui-li-count">'.$filaAlumno["reprobadas_alumno"].'</span>
					</a>
				  </li>';
			echo '<li data-role="list-divider" data-theme="b">Información del Tutor</li>';
			echo '<li data-icon="false">
					<a>
						<h4>Nombre del Tutor</h4>
						<p class="informacion-persona">'.$filaAlumno["tratamiento_tutor"].' '.$filaAlumno["nombre_tutor"].' '.$filaAlumno["paterno_tutor"].' '.$filaAlumno["materno_tutor"].'</p>
					</a>
				  </li>';
			echo '<li data-icon="false">
					<a>
						<h4>Correo Electrónico</h4>
						<p class="informacion-persona">'.$filaAlumno["email_tutor"].'</p>
					</a>
				  </li>';
		echo '</ul>';
		$conexion->close();
	}

	function informacionMaterias($id_padre_familia, $id_alumno){
		$conexion = conexionDB();
		$consulta = "SELECT profesores_materias.horario AS horario_profesores, profesores.tratamiento AS tratamiento_profesor, profesores.nombre AS nombre_profesor, profesores.apellido_paterno AS paterno_profesor, profesores.apellido_materno AS materno_profesor, profesores.fotografia_url AS foto_profesor, materias.materia AS nombre_materia, semestres.semestre AS nombre_semestre FROM alumnos INNER JOIN grupos ON grupos.id = alumnos.grupo_id INNER JOIN profesores_materias ON profesores_materias.grupo_id = grupos.id INNER JOIN profesores ON profesores.id = profesores_materias.profesor_id INNER JOIN materias ON materias.id = profesores_materias.materia_id INNER JOIN semestres ON semestres.id = materias.semestre_id WHERE alumnos.id = $id_alumno";
		$resultado = $conexion->query($consulta);
		$primero = true;
		echo '<ul data-role="listview" class="contenedor-informacion-persona" data-inset="true">';
			while($filaProfesorMateria = $resultado->fetch_assoc()){
				if($primero){
					echo '<li data-role="list-divider" data-theme="b">Materias del '.ucwords($filaProfesorMateria["nombre_semestre"]).'</li>';
					$primero = false;
				}
				echo '<li data-icon="false">
					<a>
						<img src="assets/fotos/profesores/thumbs/'.$filaProfesorMateria["foto_profesor"].'" class="foto-persona" />
						<h4>'.$filaProfesorMateria["nombre_materia"].'</h4>
						<p class="informacion-persona">'.$filaProfesorMateria["nombre_profesor"].' '.$filaProfesorMateria["paterno_profesor"].' '.$filaProfesorMateria["materno_profesor"].'</p>
						<p class="informacion-persona">Horario: '.formatoHorarioClaseProfesor($filaProfesorMateria["horario_profesores"]).'</p>
					</a>
				  </li>';
			}
		echo '</ul>';
		$conexion->close();
	}

	function informacionProfesores($id_padre_familia, $id_alumno){
		$conexion = conexionDB();
		$consulta = "SELECT alumnos.nombre AS nombre_alumno, grupos.grupo AS grupo_alumno, profesores_materias.horario AS horario_profesores, profesores.tratamiento AS tratamiento_profesor, profesores.nombre AS nombre_profesor, profesores.apellido_paterno AS paterno_profesor, profesores.apellido_materno AS materno_profesor, profesores.fotografia_url AS foto_profesor FROM alumnos INNER JOIN grupos ON grupos.id = alumnos.grupo_id INNER JOIN profesores_materias ON profesores_materias.grupo_id = grupos.id INNER JOIN profesores ON profesores.id = profesores_materias.profesor_id WHERE alumnos.id = $id_alumno";
		$resultado = $conexion->query($consulta);
		echo '<ul id ="galeria">';
		while($filaProfesores = $resultado->fetch_assoc()){
			echo '<li>';
				echo '<a href="assets/fotos/profesores/normal/'.$filaProfesores["foto_profesor"].'">';
					echo '<img src="assets/fotos/profesores/thumbs/'.$filaProfesores["foto_profesor"].'" alt="'.$filaProfesores["tratamiento_profesor"].' '.$filaProfesores["nombre_profesor"].' '.$filaProfesores["paterno_profesor"].' '.$filaProfesores["materno_profesor"].'" />';
				echo '</a>';
			echo '</li>';
		}
		echo '</ul>';
		$conexion->close();
		/*Es importante ejecutar la galeria desde este sitio, puesto que en este nivel
		ya se conoce de la presencia de la lista desordenada #galeria. La razón se debe a que es creada
		o invocada vía ajax, a su vez si se colocara en el archivo panelTutorias.php al momento de su carga, el DOM no contiene dicha estructura
		y la galería swipe sólo funcionaría estando en dicha sección volviendo a recargar la página para al momento de generar el DOM este ya incluyera
		#galeria.
		No puedo colocarlo via jquery con $(document).ready() puesto que el DOM general ya existe, hay que recordar que esta sección
		se invoca vía ajax y el documento no se crea sólo se modifica. Entonces sólo invoco mediante una función al final de la modificación del DOM*/
		echo '<script>ejecutarGaleria();</script>';
	}

	function bienvenida($id_padre_familia, $id_alumno){
		$conexion = conexionDB();
		$consulta = "SELECT * FROM padres WHERE id = $id_padre_familia";
		$resultado = $conexion->query($consulta);
		$filaPadreVisitante = $resultado->fetch_assoc();
		$consultaB = "SELECT * FROM alumnos WHERE id = $id_alumno";
		$resultadoB = $conexion->query($consultaB);
		$filaAlumnoSupervisado = $resultadoB->fetch_assoc();
		echo '<div class="ui-corner-all">';
			echo '<div class="ui-bar ui-bar-a">';
				echo '<h3>Panel de Administración</h3>';
			echo '</div>';
			echo '<div class="ui-body ui-body-a">';
				echo '<p id="palabras-bienvenida">Estimado(a): <b>'.$filaPadreVisitante["nombre"].' '.$filaPadreVisitante["apellido_paterno"].' '.$filaPadreVisitante["apellido_materno"].'</b> nos es grato el darle la mas cordial bienvenida a través de TutorApp IT Mobile. La Plataforma Servicios de Orientación y Tutoría Académica del Centro de Bachillerato José Vasconcelos SC. A través de este medio, el Departamento de Tutoría Académica pone a su disposición toda la información necesaria referente al rendimiento académico y conductual de su hijo(a): <b>'.$filaAlumnoSupervisado["nombre"].' '.$filaAlumnoSupervisado["apellido_paterno"].' '.$filaAlumnoSupervisado["apellido_materno"].'</b> con la finalidad de que tanto usted, como su hijo(a), profesores y tutores asignados tomen las mejores decisiones, mismas que conduzcan al bienestar y permanencia académica del alumno.</p>';
				echo '<img src="assets/img/logotipoDepartamentoTutorias.png" alt="" class="logotipo-tutorApp">';
			echo '</div>';
		echo '</div>';
		$conexion->close();
	}

	function contenidoPorMostrar($opcion, $id_padre_familia, $id_alumno){
		switch ($opcion) {
			case 'alumno':
				informacionAlumno($id_padre_familia, $id_alumno);
				break;
			case 'reportes':
				reportesDetallados($id_padre_familia, $id_alumno);
				break;
			case 'profesores':
				informacionProfesores($id_padre_familia, $id_alumno);
				break;
			case 'materias':
				informacionMaterias($id_padre_familia, $id_alumno);
				break;
			default:
				bienvenida($id_padre_familia, $id_alumno);
				break;
		}	
	}

	function formatoHorarioClaseProfesor($horario){
		list($hora, $minuto, $segundo) = explode(":", $horario);
		return intval($hora).":".$minuto." a ".(intval($hora) + 1).":".$minuto;
	}

	function formatearFecha($fecha){
		list($anio, $mes, $dia) = explode("-", $fecha);
		switch($mes){
			case "01":
				$mes = "Enero";
				break;
			case "02":
				$mes = "Febrero";
				break;
			case "03":
				$mes = "Marzo";
				break;
			case "04":
				$mes = "Abril";
				break;
			case "05":
				$mes = "Mayo";
				break;
			case "06":
				$mes = "Junio";
				break;
			case "07":
				$mes = "Julio";
				break;
			case "08":
				$mes = "Agosto";
				break;
			case "09":
				$mes = "Septiembre";
				break;
			case "10":
				$mes = "Octubre";
				break;
			case "11":
				$mes = "Noviembre";
				break;
			case "12":
				$mes = "Diciembre";
				break;
		}
		return $dia." de ".$mes." de ".$anio;
	}
?>
