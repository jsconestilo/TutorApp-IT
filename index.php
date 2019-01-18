<!doctype html>
<html lang="es-MX">
<head>
	<meta charset="UTF-8">
	<meta name="description" content="La Plataforma de Servicios de Orientación y Tutoría Virtual TutorApp IT - del Centro de Bachillerato José Vasconcelos es una herramienta de apoyo académico caracterizada por orientar y apoyar el desarrollo integral de los alumnos, contribuyendo a abatir los problemas de reprobación, deserción y rezago.">
	<meta name="viewport" content="width=device-width,user-scalable=no,initial-scale=1,minimum-scale=1,maximum-scale=1">
	<title>Sistema de Orientación y Tutoría Académica - Centro de Bachillerato José Vasconcelos</title>
	<link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
	<link rel="apple-touch-icon-precomposed" href="apple-touch-icon-precomposed.png" />
	<link rel="apple-touch-icon" sizes="72x72" href="apple-touch-icon-72x72.png" />
	<link rel="apple-touch-icon" sizes="114x114" href="apple-touch-icon-114x114.png" />
	<link rel="apple-touch-icon" sizes="144x144" href="apple-touch-icon-144x144.png" />
	<link rel="author" type="text/plain" href="humans.txt" />
	<link rel="stylesheet" href="assets/css/estilos_tutorApp.css">
	<link rel="stylesheet" href="assets/css/pseduca_themeMobile.css">
	<link rel="stylesheet" href="libs/jquery-mobile/jquery-mobile-1.4.0.min.css" />
	<script src="libs/jquery/jquery-2.0.3.min.js"></script>
	<script src="libs/jquery-mobile/jquery-mobile-1.4.0.min.js"></script>
</head>
<body>
	<!-- Página de inicio de la App	 -->
	<div data-role="page" id="home" data-theme="c">
		<div data-role="header" data-position="fixed">
			<h1>José Vasconcelos</h1>
			<a href="#login" data-rel="dialog" data-transition="slidedown" data-theme="b" data-icon="lock" data-iconpos="notext" class="ui-btn-right"></a>
		</div>
		<h2 id="banner-superior">Centro de Bachillerato José Vasconcelos - Mobile</h2>
		<div data-role="content" class="menu-principal">
			<div class="contenedor-contenido">
				<ul data-role="listview" data-inset="true" class="ui-corner-all">
					<li data-role="list-divider" data-theme="b">Menú Principal</li>
					<li><a href="#bienvenidos" data-transition="flip"><img src="assets/ico/home-jv.png" alt="Inicio" class="ui-li-icon ui-corner-none">Bienvenidos</a></li>
					<li><a href="#tutorias" data-transition="flip"><img src="assets/ico/user-jv.png" alt="Inicio" class="ui-li-icon ui-corner-none">Tutorías</a></li>
					<li><a href="#examenes" data-transition="flip"><img src="assets/ico/calendar-jv.png" alt="Inicio" class="ui-li-icon ui-corner-none">Exámenes</a></li>
					<li><a href="#acerca_de" data-transition="flip"><img src="assets/ico/info-jv.png" alt="Inicio" class="ui-li-icon ui-corner-none">Acerca de</a></li>
				</ul>
				<ul data-role="listview" data-inset="true">
					<li><a href="http://director.io/prepajv/" data-transition="flow" id="enlace-pseduca"><img src="assets/ico/star-jv.png" alt="Inicio" class="ui-li-icon ui-corner-none">PSEDUCA</a></li>
				</ul>
			</div>
		</div>
	</div>

	<!-- Página de Bienvenidos de la App	 -->
	<div data-role="page" id="bienvenidos" data-theme="c">
		<div data-role="header" data-position="fixed" data-add-back-btn="true" data-back-btn-text="Atras" >
			<h1>Bienvenidos</h1>
			<a href="#login" data-rel="dialog" data-transition="slidedown" data-icon="lock" data-theme="b" data-iconpos="notext" class="ui-btn-right"></a>
		</div>
		<div data-role="content" >
			<div class="contenedor-contenido">
				<div data-role="collapsible-set" data-mini="true">
					<div data-role="collapsible">
						<h3>Educación Media Superior</h3>
						<img src="assets/img/logotipoInstitucional.png" alt="" class="logotipo-pseduca">
						<h4>¿Que es la Educación Media Superior?</h4>
						<p>La Educación Media Superior es el nivel inmediato superior a la Educación Secundaria. Se caracteriza por preparar a los estudiantes a lo largo de tres años (seis semestres) para su ingreso a la educación superior y para su inserción en el ámbito laboral.</p>
					</div>
					<div data-role="collapsible">
						<h3>Problemática Social</h3>
						<img src="assets/img/logotipoInstitucional.png" alt="" class="logotipo-pseduca">
						<h4>Problemática social = Deserción escolar</h4>
						<p>A pesar de los esfuerzos realizados hasta el momento, no todos los estudiantes logran culminar sus estudios de bachillerato. Varios factores pueden llevar a que un joven trunque sus proyectos: problemas económicos, problemas académicos, conflictos emocionales, problemas familiares, problemas de salud, embarazo no planeado, adicciones, etc.</p>			
					</div>
					<div data-role="collapsible">
						<h3>Alternativas de Solución</h3>
						<img src="assets/img/logotipoInstitucional.png" alt="" class="logotipo-pseduca">
						<h4>La Solución se Encuentra en la Comunicación y Convivencia Familiar</h4>
						<p>Afortunadamente, muchos de los problemas sociales que viven la mayoría de nuestros jóvenes se pueden prevenir con una orientación y apoyo oportuno. Actualmente existen muchas opciones a las que puedes acudir, no sólo para prevenir problemas, sino también para enfrentarlos de manera adecuada e inteligente, si ya te encuentras en una situación conflictiva.</p>
					</div>
					<div data-role="collapsible">
						<h3>Nuestra Contribución</h3>
						<img src="assets/img/logotipoInstitucional.png" alt="" class="logotipo-pseduca">
						<h4>¿Sabías que...?</h4>
						<p>A nivel escolar tú cuentas con algunos servicios y programas de apoyo para cuando lo necesites. Las tutorías, las asesorías, así como el servicio de orientación educativa tienen como finalidad brindarte un apoyo permanente durante tu instancia en el bachillerato. No dudes en aprovechas estos espacios.</p>
					</div>
				</div>
			</div>
		</div>
		<h2 class="banner-inferior">Centro de Bachillerato José Vasconcelos - Mobile</h2>
		<div data-role="footer" data-theme="b" data-position="fixed">
			<h6>Preparatoria José Vasconcelos</h6>
		</div>
	</div>

	<!-- Página de Tutorías de la App	 -->
	<div data-role="page" id="tutorias" data-theme="c">
		<div data-role="header" data-position="fixed" data-add-back-btn="true" data-back-btn-text="Atras" >
			<h1>Tutorías</h1>
			<a href="#login" data-rel="dialog" data-transition="slidedown" data-icon="lock" data-theme="b" data-iconpos="notext" class="ui-btn-right"></a>
		</div>
		<div data-role="content">
			<div class="contenedor-contenido">
				<div data-role="collapsible-set" data-mini="true">
					<div data-role="collapsible">
						<h3>Servicio de Tutorías</h3>
						<img src="assets/img/logotipoInstitucional.png" alt="" class="logotipo-pseduca">
						<h4>¿Que es el Servicio de Tutorías?</h4>
						<p>Tiene la finalidad de apoyar al estudiante en su trayecto formativo y poner a su alcance todos los recursos que la Institución Educativa ofrece para que logre un mejor desempeño académico.</p>
					</div>
					<div data-role="collapsible">
						<h3>Importancia de Tutorías</h3>
						<img src="assets/img/logotipoInstitucional.png" alt="" class="logotipo-pseduca">
						<h4>Tutoría es un Servicio Gratuito</h4>
						<p>El área de Tutoría han sido diseñada para acompañar al estudiante durante su trayecto escolar. Atiende especificamente las necesidades de rendimiento académico y de desarrollo personal de los alumnos. Tiene la finalidad de lograr la permanencia de los estudiantes en la escuela y la conclusión exitosa de sus estudios, con el perfil adecuado para continuar su formación profesional y aumentar sus posibilidades de inserción en el mercado laboral.</p>
					</div>
					<div data-role="collapsible">
						<h3>Ámbitos de Tutorías</h3>
						<img src="assets/img/logotipoInstitucional.png" alt="" class="logotipo-pseduca">
						<h4>Académico - Afectivo - Vocacional</h4>
						<p>Mejorar la calidad de la educación. Lograr la permanencia del alumno en los estudios. Incrementar el aprovechamiento académico, así como la conclusión de los estudios en tiempos oportunos.</p>
						<p>Fomentar el desarrollo de autoconocimiento, el desarrollo de capacidades, el mejoramiento de actitudes y valores y el descubrimiento de los intereses del alumno tutorado.</p>
						<p>Indentificar las aptitudes y competencias necesarias para elegir el futuro profesional, identificando las caracteristicas personales del estudiante.</p>
					</div>
					<div data-role="collapsible">
						<h3>Nuestros Tutores</h3>
						<img src="assets/img/logotipoInstitucional.png" alt="" class="logotipo-pseduca">
						<h4>Trabajando en la Calidad Educativa</h4>
						<p>Nuestros tutores académicos constantemente se encuentran bajo capacitación para ofrecer las mejores soluciones.</p>
						<ul class="listado-especial">
							<li>Lic. En I.A. Alejandro González Reyes</li>
							<li>Lic. En T. Mayra Carretero Dávila</li>
							<li>Lic. En Psic. Marcelino Fernández Menéses</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<h2 class="banner-inferior">Centro de Bachillerato José Vasconcelos - Mobile</h2>
		<div data-role="footer" data-theme="b" data-position="fixed">
			<h6>Preparatoria José Vasconcelos</h6>
		</div>
	</div>

	<!-- Página de exámenes de la App	 -->
	<div data-role="page" id="examenes" data-theme="c">
		<div data-role="header" data-position="fixed" data-add-back-btn="true" data-back-btn-text="Atras" >
			<h1>Exámenes</h1>
			<a href="#login" data-rel="dialog" data-transition="slidedown" data-icon="lock" data-theme="b" data-iconpos="notext" class="ui-btn-right"></a>
		</div>
		<div data-role="content">
			<div class="contenedor-contenido">
				<div data-role="collapsible-set" data-mini="true">
					<div data-role="collapsible">
						<h3>¿Exámenes?</h3>
						<img src="assets/img/logotipoInstitucional.png" alt="" class="logotipo-pseduca">
						<h4>Evaluar no significa castigar, es sinónimo de mejorar.</h4>
						<p>Los exámenes son la parte del proceso de aprendizaje los estudiantes en la que se valora el aprendizaje real cubierto a lo largo de sus estudios.</p>
					</div>
					<div data-role="collapsible">
						<h3>Consejos Prácticos</h3>
						<img src="assets/img/logotipoInstitucional.png" alt="" class="logotipo-pseduca">
						<h4>El resultado de un examen escrito, sólo es una parte de tu calificación total,</h4>
						<p>Prepararse para un examen implica considerar de suma importancia:</p>
						<ul class="listado-especial">
							<li>Aistir a todas tus clases</li>
							<li>Entregar todos tus trabajos extraclase</li>
							<li>Estar en constante comunicación con tus profesores</li>
							<li>Organizar y planificar tus sesiones de estudio</li>
							<li>Conocer y aplicar técnicas efectivas de estudio</li>
						</ul>
					</div>
					<div data-role="collapsible">
						<h3>Calendario de Exámenes</h3>
						<img src="assets/img/logotipoInstitucional.png" alt="" class="logotipo-pseduca">
						<h4>Empecemos a Administrar el Tiempo.</h4>
						<p>A través de este enlace, el Centro de Bachillerato José Vasconcelos pone a tu disposición el Calendario Oficial de Activiades Docentes correspondiente al ciclo escolar Febrero - Julio 2014.</p>
						<a href="http://director.io/prepajv/docs/publico/Calendario-Escolar-2013B.pdf" data-role="button" data-theme="b">Descargar</a>
					</div>
				</div>
			</div>
		</div>
		<h2 class="banner-inferior">Centro de Bachillerato José Vasconcelos - Mobile</h2>
		<div data-role="footer" data-theme="b" data-position="fixed">
			<h6>Preparatoria José Vasconcelos</h6>
		</div>
	</div>

	<!-- Página de Acerca de la App -->
	<div data-role="page" id="acerca_de" data-theme="c">
		<div data-role="header" data-position="fixed" data-add-back-btn="true" data-back-btn-text="Atras" >
			<h1>Acerca de</h1>
			<a href="#login" data-rel="dialog" data-transition="slidedown" data-icon="lock" data-theme="b" data-iconpos="notext" class="ui-btn-right"></a>
		</div>
		<div data-role="content">
			<div class="contenedor-contenido">
				<div class="ui-corner-all">
					<div class="ui-bar ui-bar-a">
						<h3>TutorApp Mobile 1.0</h3>
					</div>
					<div class="ui-body ui-body-a">
						<img src="assets/img/logotipoInstitucional.png" alt="" class="logotipo-pseduca">
						<h4>¿Qué es TutorApp Mobile 1.0?</h4>
						<p>La Plataforma de Servicios de Orientación y Tutoría Académica <b>TutorApp IT</b> - del Centro de Bachillerato José Vasconcelos es una herramienta de apoyo académico caracterizada por orientar y apoyar el desarrollo integral de los alumnos, contribuyendo a abatir los problemas de reprobación, deserción y rezago. Tiene por objeto brindar servicios de orientación y ayuda a las diversas problematicas sociales que actualmente viven nuestros estudiantes, así como de información valiosa a padres de familia que les permita tomar las mejores decisiones sobre la situación académica actual que guardan sus hijos dentro de la Institución.</p>
					</div>
				</div>
 			</div>
		</div>
		<h2 class="banner-inferior">Centro de Bachillerato José Vasconcelos - Mobile</h2>
		<div data-role="footer" data-theme="b" data-position="fixed">
			<h6>Preparatoria José Vasconcelos</h6>
		</div>
	</div>

	<!-- Dialogo - Formulario Login Tutorías -->
	<div data-role="page" id="login">
		<div data-role="header" data-theme="c">
			<h1>Autenticación</h1>
		</div>
		<div data-role="content">
			<div class="contenedor-contenido">
				<form action="php/iniciar_sesion.php" method="post" enctype="application/x-www-form-urlencoded" data-ajax="false">
					<div>
						<label for="username">Nombre de Usuario:</label>
						<input type="text" name="txtUsername">
					</div>
					<div>
						<label for="password">Contraseña:</label>
						<input type="password" name="txtPassword">
					</div>
					<input type="submit" name="btnLogin" value="Acceder">
				</form>
			</div>
		</div>
		<div data-role="footer" data-theme="b">
			<h6>Prepa José Vasconcelos</h6>
		</div>
	</div>
</body>
</html>