-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-03-2014 a las 00:54:26
-- Versión del servidor: 5.6.11
-- Versión de PHP: 5.5.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `tutoriasjv`
--
CREATE DATABASE IF NOT EXISTS `tutoriasjv` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `tutoriasjv`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumnos`
--

CREATE TABLE IF NOT EXISTS `alumnos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(30) NOT NULL,
  `apellido_paterno` varchar(30) NOT NULL,
  `apellido_materno` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `fotografia_url` varchar(30) NOT NULL,
  `credencial` varchar(10) NOT NULL,
  `num_materias_reprobadas` int(11) NOT NULL,
  `grupo_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `grupo_id` (`grupo_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Volcado de datos para la tabla `alumnos`
--

INSERT INTO `alumnos` (`id`, `nombre`, `apellido_paterno`, `apellido_materno`, `email`, `fotografia_url`, `credencial`, `num_materias_reprobadas`, `grupo_id`) VALUES
(1, 'Luis Fernando', 'García', 'García', 'luis_fernando@prepajv.edu.mx', '1033568.jpg', '1033568', 4, 5),
(2, 'Alondra', 'Allende', 'Fernández', 'alondra@prepajv.edu.mx', '1087442.jpg', '1087442', 5, 6),
(3, 'Ronaldo', 'Reyes', 'Robledo', 'ronaldo@prepajv.edu.mx', '1045118.jpg', '1045118', 4, 5),
(4, 'Yadira Yared', 'Roque', 'Mejía', 'yadira@prepajv.edu.mx', '1058661.jpg', '1058661', 4, 5),
(5, 'Mariela', 'Martínez', 'Florentino', 'mariela@prepajv.edu.mx', '1123668.jpg', '1123668', 4, 6),
(6, 'Efraín Jimmy', 'Martínez', 'Ortínez', 'efrain@prepajv.edu.mx', '1085744.jpg', '1085744', 5, 6),
(7, 'Fryda Victoria', 'González', 'Tellez', 'fryda@prepajv.edu.mx', '1147988.jpg', '1147988', 9, 14),
(8, 'Nancy', 'Serrano', 'Flores', 'nancy@prepajv.edu.mx', '1148228.jpg', '1148228', 12, 14),
(9, 'Adrian', 'Melendez', 'Sosa', 'adrian@prepajv.edu.mx', '1085449.jpg', '1085449', 15, 20),
(10, 'Carolina', 'Toribio', 'Ramírez', 'carolina@prepajv.edu.mx', '1188987.jpg', '1188987', 18, 20);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grupos`
--

CREATE TABLE IF NOT EXISTS `grupos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `grupo` int(11) NOT NULL,
  `semestre_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `semestre_id` (`semestre_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=23 ;

--
-- Volcado de datos para la tabla `grupos`
--

INSERT INTO `grupos` (`id`, `grupo`, `semestre_id`) VALUES
(1, 101, 1),
(2, 102, 1),
(3, 103, 1),
(4, 104, 1),
(5, 201, 2),
(6, 202, 2),
(7, 203, 2),
(8, 204, 2),
(9, 301, 3),
(10, 302, 3),
(11, 303, 3),
(12, 304, 3),
(13, 401, 4),
(14, 402, 4),
(15, 403, 4),
(16, 404, 4),
(17, 501, 5),
(18, 502, 5),
(19, 503, 5),
(20, 601, 6),
(21, 602, 6),
(22, 603, 6);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materias`
--

CREATE TABLE IF NOT EXISTS `materias` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `materia` varchar(50) NOT NULL,
  `semestre_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `semestre_id` (`semestre_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=57 ;

--
-- Volcado de datos para la tabla `materias`
--

INSERT INTO `materias` (`id`, `materia`, `semestre_id`) VALUES
(1, 'Álgebra', 1),
(2, 'Comunicación Oral y Escrita', 1),
(3, 'Computación Básica', 1),
(4, 'Hombre y Salud', 1),
(5, 'Pensamiento y Razonamiento Lógico', 1),
(6, 'Antropología: Hombre, Cultura y Sociedad', 1),
(7, 'Desarrollo del Potencial Humano', 1),
(8, 'Orientación Educativa', 1),
(9, 'Cultura Física', 1),
(10, 'Álgebra y Trigonometría', 2),
(11, 'Química y Entorno', 2),
(12, 'Filosofía de la Ciencia', 2),
(13, 'Historia Universal Siglos XX - XXI', 2),
(14, 'Estrategias Lingüísticas para el Estudio', 2),
(15, 'Desarrollo del Potencial de Aprendizaje', 2),
(16, 'Orientación Educativa', 2),
(17, 'Inglés A1', 2),
(18, 'Cultura Física', 2),
(19, 'Geometría Analítica', 3),
(20, 'Lectura de Textos Informativos y Científicos', 3),
(21, 'Física Básica', 3),
(22, 'Ética y Sociedad', 3),
(23, 'Historia de México Siglos XIX - XXI', 3),
(24, 'Química y Vida Diaria', 3),
(25, 'Inglés A2', 3),
(26, 'Orientación Educativa', 3),
(27, 'Cultura Física', 3),
(28, 'Cálculo Diferencial e Integral', 4),
(29, 'Geografía, Ambiente y Sociedad', 4),
(30, 'Física General', 4),
(31, 'Biología Celular', 4),
(32, 'Lectura de Textos Literarios', 4),
(33, 'Medios y Recursos para la Investigación', 4),
(34, 'Orientación Educativa', 4),
(35, 'Inglés B1', 4),
(36, 'Cultura Física', 4),
(37, 'Estadística', 5),
(38, 'Formación Ciudadana', 5),
(39, 'Apreciación del Arte', 5),
(40, 'Métodos de Investigación', 5),
(41, 'Cultura y Responsabilidad Ambiental', 5),
(42, 'Inglés B2', 5),
(43, 'Orientación Educativa', 5),
(44, 'Cultura Física', 5),
(45, 'Optativa 1', 5),
(46, 'Optativa 2', 5),
(47, 'Sociología', 6),
(48, 'Psicología', 6),
(49, 'México ante el Contexto Internacional', 6),
(50, 'Expresión del Arte', 6),
(51, 'Cultura Emprendedora', 6),
(52, 'Orientación Educativa', 6),
(53, 'Anatomía (Morfofisiología Humana)', 6),
(54, 'Comunicación', 6),
(55, 'Computación Especializada', 6),
(56, 'Creatividad', 6);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `padres`
--

CREATE TABLE IF NOT EXISTS `padres` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(30) NOT NULL,
  `apellido_paterno` varchar(30) NOT NULL,
  `apellido_materno` varchar(30) NOT NULL,
  `direccion` varchar(100) NOT NULL,
  `colonia` varchar(30) NOT NULL,
  `municipio` varchar(30) NOT NULL,
  `telefono` varchar(15) NOT NULL,
  `movil` varchar(15) NOT NULL,
  `emial` varchar(50) NOT NULL,
  `tutor` varchar(150) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Volcado de datos para la tabla `padres`
--

INSERT INTO `padres` (`id`, `nombre`, `apellido_paterno`, `apellido_materno`, `direccion`, `colonia`, `municipio`, `telefono`, `movil`, `emial`, `tutor`) VALUES
(1, 'Esteban', 'García', 'Vilchis', 'Los Alamos # 45', 'La Pila', 'Ocoyoacac', '017225899788', '', '', 'Maricela García Huertas'),
(2, 'Estefanía', 'Fernández', 'Fernández', 'Privada Los Cedros # 34', 'Pilares', 'Metepec', '017224599845', '', '', 'Dionicio Allende Suarez'),
(3, 'Ronaldo', 'Reyes', 'Jiménez', 'Calle Asunción # 12', 'Centro', 'Lerma', '017224533678', '', '', 'María Fernanda Robledo Fernández'),
(4, 'Luz Elena', 'Mejía', 'Mejía', 'Privada Los Alamos # 23', 'Los Sauces', 'Toluca', '017222354200', '', '', 'Federico Roque Rocha'),
(5, 'Pedro', 'Martínez', 'Martínez', 'La Palma # 8', 'Atarasquillo', 'Lerma', '017221455699', '', '', 'Esmeralda Florentino González'),
(6, 'Salvador', 'Martínez', 'Duarte', 'La Pila # 45', 'San José El Llanito', 'Lerma', '017225677400', '', '', 'Jimena Ortínez Salazar'),
(7, 'Hector', 'González', 'González', 'Lomas del Silencio # 78', 'Centro', 'Toluca', '017228930555', '', '', 'Victoria Tellez Martínez'),
(8, 'Fernanda', 'Flores', 'Ferrera', 'La Palma # 5', 'Atarasquillo', 'Lerma', '017225630255', '', '', 'Julio Flores González'),
(9, 'Doroteo', 'Meléndez', 'Meléndez', 'Privada San Asunción # 233', 'Los Sauces', 'Toluca', '017225898744', '', '', 'América Sosa Duarte'),
(10, 'Renata', 'Ramírez', 'Herrera', 'Libertad SN', 'La Pilita', 'Metepec', '017225698477', '', '', 'Raymundo Toribio Huertas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `padres_alumnos`
--

CREATE TABLE IF NOT EXISTS `padres_alumnos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `padre_id` int(11) NOT NULL,
  `alumno_id` int(11) NOT NULL,
  `fecha_alta` date NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(200) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `padre_id` (`padre_id`,`alumno_id`),
  KEY `alumno_id` (`alumno_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Volcado de datos para la tabla `padres_alumnos`
--

INSERT INTO `padres_alumnos` (`id`, `padre_id`, `alumno_id`, `fecha_alta`, `username`, `password`) VALUES
(1, 1, 1, '2014-02-19', 'prepajv01', 'tutor0A'),
(2, 2, 2, '2014-03-05', 'prepajv02', 'tutor0B'),
(3, 3, 3, '2014-03-05', 'prepajv03', 'tutor0C'),
(4, 4, 4, '2014-03-06', 'prepajv04', 'tutor0D'),
(5, 5, 5, '2014-03-07', 'prepajv05', 'tutor0E'),
(6, 6, 6, '2014-03-11', 'prepajv06', 'tutor0F'),
(7, 7, 7, '2014-03-13', 'prepajv07', 'tutor0G'),
(8, 8, 8, '2014-03-14', 'prepajv08', 'tutor0H'),
(9, 9, 9, '2014-03-14', 'prepajv09', 'tutor0I'),
(10, 10, 10, '2014-03-17', 'prepajv10', 'tutor0J');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `profesores`
--

CREATE TABLE IF NOT EXISTS `profesores` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tratamiento` varchar(20) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `apellido_paterno` varchar(30) NOT NULL,
  `apellido_materno` varchar(30) NOT NULL,
  `telefono` varchar(15) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `fotografia_url` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=14 ;

--
-- Volcado de datos para la tabla `profesores`
--

INSERT INTO `profesores` (`id`, `tratamiento`, `nombre`, `apellido_paterno`, `apellido_materno`, `telefono`, `email`, `fotografia_url`) VALUES
(1, 'Lic.', 'Alejandro', 'González', 'Reyes', NULL, NULL, 'Alejandro.jpg'),
(2, 'Lic.', 'Itzi', 'Bautista', 'Morales', NULL, NULL, 'Itzi.jpg'),
(3, 'Lic.', 'Yarid', 'Fonseca', 'Herrera', NULL, NULL, 'Yarit.jpg'),
(4, 'Ing.', 'Diana', 'Pichardo', 'Morales', NULL, NULL, 'Diana.jpg'),
(5, 'Lic.', 'Jesús', 'Gaytan', 'Gaytan', NULL, NULL, 'Jesús.jpg'),
(6, 'Ing.', 'Nicolás', 'Duarte', 'Loperena', NULL, NULL, 'Nicolás.jpg'),
(7, 'Ing.', 'Adilene', 'Fonseca', 'Allende', NULL, NULL, 'Adilene.jpg'),
(8, 'Lic.', 'Aidhe', 'González', 'Ramírez', NULL, NULL, 'Aidhe.jpg'),
(9, 'Lic.', 'Celia', 'Aguilar', 'Ocampos', NULL, NULL, 'Celia.jpg'),
(10, 'Lic.', 'Alma', 'Landeros', 'Huertas', NULL, NULL, 'Alma.jpg'),
(11, 'Ing.', 'Cindy Ariana', 'Huertas', 'Gómez Tagle', NULL, NULL, 'Cindy.jpg'),
(12, 'Lic.', 'Mayra', 'Carretero', 'Dávila', NULL, NULL, 'Mayra.jpg'),
(13, 'Lic.', 'Ricardo', 'Salcedo', 'Gutierrez', NULL, NULL, 'Ricardo.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `profesores_materias`
--

CREATE TABLE IF NOT EXISTS `profesores_materias` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `profesor_id` int(11) NOT NULL,
  `materia_id` int(11) NOT NULL,
  `grupo_id` int(11) NOT NULL,
  `horario` time NOT NULL,
  PRIMARY KEY (`id`),
  KEY `profesor_id` (`profesor_id`,`materia_id`,`grupo_id`),
  KEY `grupo_id` (`grupo_id`),
  KEY `materia_id` (`materia_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=27 ;

--
-- Volcado de datos para la tabla `profesores_materias`
--

INSERT INTO `profesores_materias` (`id`, `profesor_id`, `materia_id`, `grupo_id`, `horario`) VALUES
(1, 9, 14, 5, '07:00:00'),
(2, 7, 10, 5, '08:00:00'),
(3, 3, 15, 5, '09:30:00'),
(4, 13, 13, 5, '10:30:00'),
(5, 5, 12, 5, '11:30:00'),
(6, 10, 17, 5, '12:50:00'),
(7, 4, 11, 5, '13:50:00'),
(8, 1, 10, 6, '07:00:00'),
(9, 5, 12, 6, '08:00:00'),
(10, 9, 14, 6, '09:30:00'),
(11, 3, 15, 6, '10:30:00'),
(12, 12, 17, 6, '11:30:00'),
(13, 6, 11, 6, '12:50:00'),
(14, 13, 13, 6, '13:50:00'),
(15, 11, 30, 14, '07:00:00'),
(16, 12, 29, 14, '08:00:00'),
(17, 8, 32, 14, '09:30:00'),
(18, 1, 28, 14, '10:30:00'),
(19, 2, 31, 14, '11:30:00'),
(20, 5, 33, 14, '12:50:00'),
(21, 10, 35, 14, '13:50:00'),
(22, 3, 48, 20, '07:00:00'),
(23, 8, 49, 20, '08:00:00'),
(24, 11, 51, 20, '09:30:00'),
(25, 5, 50, 20, '10:30:00'),
(26, 12, 47, 20, '11:30:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reportes`
--

CREATE TABLE IF NOT EXISTS `reportes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fecha_reporte` date NOT NULL,
  `descripcion` text NOT NULL,
  `alumno_id` int(11) NOT NULL,
  `materia_id` int(11) NOT NULL,
  `reporte_visto` tinyint(1) NOT NULL,
  `fecha_lectura` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `alumno_id` (`alumno_id`),
  KEY `materia_id` (`materia_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=19 ;

--
-- Volcado de datos para la tabla `reportes`
--

INSERT INTO `reportes` (`id`, `fecha_reporte`, `descripcion`, `alumno_id`, `materia_id`, `reporte_visto`, `fecha_lectura`) VALUES
(1, '2014-03-07', 'El alumno no entrego la serie de ejercicios correspondientes al libro de trabajo. Páginas 48, 49 y 50', 2, 10, 0, NULL),
(2, '2014-03-07', 'El alumno no reportó firmas para su conteo en escala', 2, 13, 0, NULL),
(3, '2014-03-07', 'El alumno no muestra interés por la materia, a su vez no reportó firmas para su conteo en escala', 5, 13, 0, NULL),
(4, '2014-03-13', 'El alumno no presentó material para trabajar en laboratorio, así como el retiro de credencial por indisciplina en el aula', 4, 11, 0, NULL),
(5, '2014-03-13', 'El alumno fue sorprendido jugando con su celular en hora clase, no presenta tarea, y no reporta al 100% las actividades realizadas dentro del aula', 7, 31, 0, NULL),
(6, '2014-03-14', 'El alumno no reportó actividades extra clase correspondientes al libro de ejercicios: páginas 109, 110, 111, 112 y 113', 8, 28, 0, NULL),
(7, '2014-03-17', 'El alumno no reportó avances de la investigación correspondientes a su proyecto de generación de nuevas empresas. ', 9, 51, 0, NULL),
(8, '2014-03-17', 'El alumno falta mucho a clases, en repetidas ocasiones se le ha encontrado escondido en los sanitarios para no entrar a clases', 1, 12, 0, NULL),
(9, '2014-03-11', 'El alumno no concreto la actividad integradora correspondiente al segundo módulo de la materia. Dicha situación pone en riesgo un 40% de escala.', 2, 15, 0, NULL),
(10, '2014-03-03', 'El alumno fue suspendido de clase por faltarle el respeto a una de sus compañeras (pareja sentimental) de aula, a tal grado de bofetearla.', 6, 12, 0, NULL),
(11, '2014-03-13', 'El alumno no reportó avances correspondientes al ensayo del libro "Las Grandes Traiciones de México", mismo que forma parte potencial de su escala en la materia', 9, 49, 0, NULL),
(12, '2014-03-19', 'El alumno no presentó material para trabajar dentro del laboratorio y realizar sus prácticas, mismas que forman parte de la actividad integradora del módulo 2', 7, 31, 0, NULL),
(13, '2014-03-17', 'El alumno fue sorprendido con parte de sus apuntes en el momento de estar presentando un examenen diagnóstico que formará parte de la escala para dicha materia', 1, 17, 0, NULL),
(14, '2014-03-25', 'El alumno no presentó avances correspondientes a su tema de investigación', 8, 33, 0, NULL),
(15, '2014-03-25', 'Se le sorprendió al alumno jugando con su celular cuando el profesor estaba explicando el tema correspondiente a su clase.', 3, 10, 0, NULL),
(16, '2014-03-19', 'El alumno no forró su butaca, dicha actividad forma parte de la calificación para dicha materia', 4, 17, 0, NULL),
(17, '2014-03-26', 'El alumno fue sorprendido pintando una barda correspondiente al laboratorio de Química con marcador de aceite ', 1, 11, 0, NULL),
(18, '2014-03-31', 'El alumno no presentó firmas para su correspondiente conteo y ser asentadas en escalas', 7, 32, 0, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `semestres`
--

CREATE TABLE IF NOT EXISTS `semestres` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `semestre` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Volcado de datos para la tabla `semestres`
--

INSERT INTO `semestres` (`id`, `semestre`) VALUES
(1, 'primer semestre'),
(2, 'segundo semestre'),
(3, 'tercer semestre'),
(4, 'cuarto semestre'),
(5, 'quinto semestre'),
(6, 'sexto semestre');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tutores_academicos`
--

CREATE TABLE IF NOT EXISTS `tutores_academicos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tratamiento` varchar(20) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `apellido_paterno` varchar(30) NOT NULL,
  `apellido_materno` varchar(30) NOT NULL,
  `telefono` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `semestre_id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(200) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `semestre_id` (`semestre_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `tutores_academicos`
--

INSERT INTO `tutores_academicos` (`id`, `tratamiento`, `nombre`, `apellido_paterno`, `apellido_materno`, `telefono`, `email`, `semestre_id`, `username`, `password`) VALUES
(1, 'Lic. En I.A.', 'Alejandro', 'González', 'Reyes', '', 'alejandro.gonzalez.reyes@prepajv.edu.mx', 2, 'mandriva', 'mandriva'),
(2, 'Lic. En T.', 'Mayra', 'Carretero', 'Dávila', '', 'mayra.carretero.davila@prepajv.edu.mx', 4, 'ubuntu', 'ubuntu'),
(3, 'Lic. En P.', 'Marcelino', 'Fernández', 'Menéses', '', 'marcelino.fernandez.meneses@prepajv.edu.mx', 6, 'fedora', 'fedora');

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `alumnos`
--
ALTER TABLE `alumnos`
  ADD CONSTRAINT `fk_alumno_grupo` FOREIGN KEY (`grupo_id`) REFERENCES `grupos` (`id`);

--
-- Filtros para la tabla `grupos`
--
ALTER TABLE `grupos`
  ADD CONSTRAINT `fk_grupo_semestre` FOREIGN KEY (`semestre_id`) REFERENCES `semestres` (`id`);

--
-- Filtros para la tabla `materias`
--
ALTER TABLE `materias`
  ADD CONSTRAINT `fk_semestre` FOREIGN KEY (`semestre_id`) REFERENCES `semestres` (`id`);

--
-- Filtros para la tabla `padres_alumnos`
--
ALTER TABLE `padres_alumnos`
  ADD CONSTRAINT `fk_rel_alumno` FOREIGN KEY (`alumno_id`) REFERENCES `alumnos` (`id`),
  ADD CONSTRAINT `fk_rel_padre` FOREIGN KEY (`padre_id`) REFERENCES `padres` (`id`);

--
-- Filtros para la tabla `profesores_materias`
--
ALTER TABLE `profesores_materias`
  ADD CONSTRAINT `fk_rel_grupo` FOREIGN KEY (`grupo_id`) REFERENCES `grupos` (`id`),
  ADD CONSTRAINT `fk_rel_materia` FOREIGN KEY (`materia_id`) REFERENCES `materias` (`id`),
  ADD CONSTRAINT `fk_rel_profesor` FOREIGN KEY (`profesor_id`) REFERENCES `profesores` (`id`);

--
-- Filtros para la tabla `reportes`
--
ALTER TABLE `reportes`
  ADD CONSTRAINT `fk_reporte_alumno` FOREIGN KEY (`alumno_id`) REFERENCES `alumnos` (`id`),
  ADD CONSTRAINT `fk_reporte_materia` FOREIGN KEY (`materia_id`) REFERENCES `materias` (`id`);

--
-- Filtros para la tabla `tutores_academicos`
--
ALTER TABLE `tutores_academicos`
  ADD CONSTRAINT `fk_semestre_tutor` FOREIGN KEY (`semestre_id`) REFERENCES `semestres` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
