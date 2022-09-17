-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-09-2022 a las 22:29:36
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `dbevidencias`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `articulos`
--

CREATE TABLE `articulos` (
  `idArticulo` int(11) NOT NULL,
  `idSeccion` int(11) NOT NULL,
  `descripcion` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `articulos`
--

INSERT INTO `articulos` (`idArticulo`, `idSeccion`, `descripcion`) VALUES
(6, 3, 'Mecanismos de selección y evaluación de estudiantes y profesores. '),
(7, 1, 'Mecanismos de selección y evaluación de estudiantes. '),
(8, 1, 'Reglamento estudiantil o su equivalente. '),
(9, 1, 'Políticas para mejorar el bienestar, la permanencia y graduación de los estudiantes. '),
(10, 1, 'Información cualitativa y cuantitativa para mejorar el bienestar, la permanencia y graduación de los estudiantes. '),
(11, 1, 'Evaluación, seguimiento y retroalimentación de los estudiantes'),
(12, 1, 'Comunicación con estudiantes. '),
(13, 1, 'Evidencias e indicadores de los mecanismos que soportan la selección y evaluación de estudiantes. '),
(14, 2, 'Mecanismos que soportan la selección y evaluación de \r\nprofesores. '),
(15, 2, 'Características del grupo institucional de profesores. '),
(16, 2, 'Reglamento profesoral o su equivalente. '),
(17, 2, 'Mecanismos para la implementación de los planes institucionales y el desarrollo de actividades académicas. '),
(18, 2, 'Evidencias e indicadores de los mecanismos que soportan la selección y evaluación de profesores. '),
(19, 4, 'Gobierno institucional y rendición de cuentas. '),
(20, 4, 'Gobierno institucional. '),
(21, 4, 'Rendición de cuentas institucional. '),
(22, 4, 'Participación de la comunidad académica en procesos de toma de decisiones. '),
(23, 4, 'Políticas institucionales. '),
(24, 4, 'Políticas académicas asociadas a currículo, resultados de aprendizaje, créditos y actividades. '),
(25, 4, 'Políticas de gestión institucional y bienestar. '),
(26, 4, 'Políticas de investigación, innovación, creación artística y \r\ncultural. '),
(27, 4, 'Gestión de la información. '),
(28, 4, 'Arquitectura institucional. '),
(29, 4, 'Evidencias e indicadores de la estructura administrativa y académica. '),
(30, 5, 'Cultura de la autoevaluación. '),
(31, 5, 'Sistema interno de aseguramiento de la calidad. '),
(32, 5, 'Evidencias e indicadores de la cultura de la autoevaluación. '),
(33, 6, 'Seguimiento a la actividad profesional de los egresados. '),
(34, 6, 'Aprendizaje del egresado a lo largo de la vida. '),
(35, 6, 'Experiencia del egresado en la dinámica institucional. '),
(36, 6, 'Evidencias e indicadores de seguimiento al programa de egresados. '),
(37, 7, 'Modelo de bienestar. '),
(38, 7, 'Programas orientados a la prevención de la deserción y a la promoción de la graduación de los estudiantes.'),
(39, 7, ' Evidencias e indicadores del modelo de bienestar'),
(40, 8, 'Definición de la misión, propósitos y objetivos institucionales. '),
(41, 8, 'Gestión del talento humano. '),
(42, 8, 'Disponibilidad de recursos físicos y tecnológicos. '),
(43, 8, 'Descripción de la infraestructura física y tecnológica. '),
(44, 8, 'Políticas de actualización y renovación de la infraestructura física y tecnológica. '),
(45, 8, 'Apoyo tecnológico y sistemas de información. '),
(46, 8, 'Recursos financieros. '),
(47, 8, 'Evidencias de recursos suficientes para el cumplimiento de las metas. ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `articulosliterales`
--

CREATE TABLE `articulosliterales` (
  `idArticulo` int(11) NOT NULL,
  `idLiteral` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `articulosliterales`
--

INSERT INTO `articulosliterales` (`idArticulo`, `idLiteral`) VALUES
(8, '1'),
(8, '2'),
(8, '3'),
(8, '4'),
(8, '5'),
(8, '6'),
(12, '1'),
(12, '2'),
(12, '3'),
(12, '4'),
(12, '5'),
(12, '6'),
(12, '7'),
(12, '8'),
(13, '1'),
(13, '2'),
(13, '3'),
(13, '4'),
(13, '5'),
(13, '6'),
(13, '7'),
(13, '8'),
(13, '9'),
(13, '10'),
(13, '11'),
(15, '1'),
(15, '2'),
(16, '1'),
(16, '2'),
(16, '3'),
(16, '4'),
(16, '5'),
(16, '6'),
(16, '7'),
(17, '1'),
(17, '2'),
(17, '3'),
(17, '4'),
(17, '5'),
(18, '1'),
(18, '2'),
(18, '3'),
(18, '4'),
(18, '5'),
(18, '6'),
(18, '7'),
(18, '8'),
(18, '9'),
(18, '10'),
(18, '11'),
(18, '12'),
(18, '13'),
(18, '14'),
(18, '15'),
(20, '1'),
(20, '2'),
(20, '3'),
(20, '4'),
(24, '1'),
(24, '2'),
(24, '3'),
(25, '1'),
(25, '2'),
(25, '3'),
(25, '4'),
(25, '5'),
(26, '1'),
(26, '2'),
(26, '3'),
(26, '4'),
(26, '5'),
(26, '6'),
(26, '7'),
(27, '1'),
(27, '2'),
(27, '3'),
(28, '1'),
(28, '2'),
(28, '3'),
(28, '4'),
(29, '1'),
(29, '2'),
(29, '3'),
(29, '4'),
(30, '1'),
(30, '2'),
(32, '1'),
(32, '2'),
(33, '1'),
(33, '2'),
(33, '3'),
(33, '4'),
(33, '5'),
(33, '6'),
(35, '1'),
(35, '2'),
(36, '1'),
(36, '2'),
(36, '3'),
(36, '4'),
(36, '5'),
(36, '6'),
(36, '7'),
(36, '8'),
(36, '9'),
(36, '10'),
(37, '1'),
(37, '2'),
(37, '3'),
(37, '4'),
(37, '5'),
(37, '6'),
(38, '1'),
(38, '2'),
(38, '3'),
(38, '4'),
(38, '5'),
(39, '1'),
(39, '2'),
(40, '1'),
(40, '2'),
(40, '3'),
(40, '4'),
(41, '1'),
(41, '2'),
(41, '3'),
(42, '1'),
(42, '2'),
(42, '3'),
(42, '4'),
(43, '1'),
(43, '2'),
(43, '3'),
(43, '4'),
(43, '5'),
(43, '6'),
(44, '1'),
(44, '2'),
(44, '3'),
(45, '1'),
(45, '2'),
(45, '3'),
(46, '1'),
(46, '2'),
(46, '3'),
(46, '4'),
(46, '5'),
(47, '1'),
(47, '2'),
(47, '3'),
(47, '4');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `autores`
--

CREATE TABLE `autores` (
  `idAutor` varchar(20) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `apellido` varchar(100) NOT NULL,
  `telefono` varchar(20) NOT NULL,
  `cargo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `autores`
--

INSERT INTO `autores` (`idAutor`, `nombre`, `apellido`, `telefono`, `cargo`) VALUES
('1', 'pablo', 'restrepo', '123456', 'estudiante');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `capitulos`
--

CREATE TABLE `capitulos` (
  `idCapitulo` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `capitulos`
--

INSERT INTO `capitulos` (`idCapitulo`, `nombre`) VALUES
(1, 'Mecanismos de selección y evaluación de estudiantes y profesores'),
(2, 'Estructura administrativa y académica'),
(3, 'Cultura de la autoevaluación'),
(4, 'Programa de egresados'),
(5, 'Modelo de bienestar'),
(6, 'Recursos suficientes para garantizar el cumplimiento de las metas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `evidencias`
--

CREATE TABLE `evidencias` (
  `idEvidencia` int(11) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `descripcion` varchar(255) NOT NULL,
  `idTipoEvidencia` int(11) NOT NULL,
  `fechaCreacion` date NOT NULL,
  `fechaRegistro` date NOT NULL,
  `idAutor` varchar(20) NOT NULL,
  `observacion` varchar(255) NOT NULL,
  `estado` varchar(255) NOT NULL DEFAULT 'Registrada en verificacion',
  `idCapitulo` int(11) NOT NULL,
  `seccion` int(11) DEFAULT NULL,
  `articulo` int(11) DEFAULT NULL,
  `literal` varchar(10) DEFAULT NULL,
  `numeral` int(11) DEFAULT NULL,
  `paragrafo` int(11) DEFAULT NULL,
  `latitud` varchar(255) NOT NULL,
  `longitud` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `literales`
--

CREATE TABLE `literales` (
  `idLiteral` varchar(10) NOT NULL,
  `descripcion` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `literales`
--

INSERT INTO `literales` (`idLiteral`, `descripcion`) VALUES
('1', 'a'),
('2', 'b'),
('3', 'c'),
('4', 'd'),
('5', 'e'),
('6', 'f'),
('7', 'g'),
('8', 'h'),
('9', 'i'),
('10', 'j'),
('11', 'k'),
('12', 'l'),
('13', 'm'),
('14', 'n'),
('15', 'o');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `literalesnumerales`
--

CREATE TABLE `literalesnumerales` (
  `idArticulo` int(11) NOT NULL,
  `idLiteral` varchar(10) NOT NULL,
  `idNumeral` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `literalesnumerales`
--

INSERT INTO `literalesnumerales` (`idArticulo`, `idLiteral`, `idNumeral`) VALUES
(13, '3', 1),
(13, '3', 2),
(13, '3', 3),
(13, '3', 4),
(13, '3', 5),
(13, '3', 6),
(18, '8', 1),
(18, '8', 2),
(18, '8', 3),
(18, '8', 4),
(18, '8', 5),
(18, '8', 6),
(18, '8', 7),
(20, '1', 1),
(20, '1', 2),
(20, '1', 3),
(20, '1', 4),
(20, '1', 5),
(29, '1', 1),
(29, '1', 2),
(29, '1', 3),
(29, '1', 4),
(29, '1', 5),
(29, '1', 6),
(29, '2', 1),
(29, '2', 2),
(29, '2', 3),
(29, '2', 4),
(29, '2', 5),
(29, '2', 6),
(29, '3', 1),
(29, '3', 2),
(29, '3', 3),
(29, '3', 4),
(29, '3', 5),
(29, '4', 1),
(29, '4', 2),
(29, '4', 3),
(29, '4', 4),
(32, '1', 1),
(32, '1', 2),
(32, '1', 3),
(32, '2', 1),
(32, '2', 2),
(32, '2', 3),
(32, '2', 4),
(32, '2', 5),
(32, '2', 6),
(32, '2', 7),
(32, '2', 8),
(32, '2', 9),
(32, '2', 10),
(32, '2', 11),
(39, '1', 1),
(39, '1', 2),
(39, '1', 3),
(39, '1', 4),
(39, '1', 5),
(39, '1', 6),
(39, '1', 7),
(39, '1', 8),
(39, '1', 9),
(39, '1', 10),
(39, '1', 11),
(39, '2', 1),
(39, '2', 2),
(39, '2', 3),
(39, '2', 4),
(39, '2', 5),
(39, '2', 6),
(39, '2', 7),
(39, '2', 8),
(47, '1', 1),
(47, '1', 2),
(47, '2', 1),
(47, '2', 2),
(47, '2', 3),
(47, '2', 4),
(47, '3', 1),
(47, '3', 2),
(47, '3', 3),
(47, '3', 4),
(47, '3', 5),
(47, '3', 6),
(47, '3', 7),
(47, '3', 8),
(47, '3', 9),
(47, '3', 10),
(47, '3', 11),
(47, '3', 12),
(47, '4', 1),
(47, '4', 2),
(47, '4', 3),
(47, '4', 4),
(47, '4', 5),
(47, '4', 6),
(47, '4', 7);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `numerales`
--

CREATE TABLE `numerales` (
  `idNumeral` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `numerales`
--

INSERT INTO `numerales` (`idNumeral`) VALUES
(1),
(2),
(3),
(4),
(5),
(6),
(7),
(8),
(9),
(10),
(11),
(12),
(13),
(14),
(15);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `paragrafos`
--

CREATE TABLE `paragrafos` (
  `idCapitulo` int(11) NOT NULL,
  `descripcion` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rolusuarios`
--

CREATE TABLE `rolusuarios` (
  `idRol` int(11) NOT NULL,
  `descripcion` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `rolusuarios`
--

INSERT INTO `rolusuarios` (`idRol`, `descripcion`) VALUES
(1, 'Administrador del sistema'),
(2, 'Verificador'),
(3, 'Validador'),
(4, 'Usuario administrativo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `secciones`
--

CREATE TABLE `secciones` (
  `idSeccion` int(11) NOT NULL,
  `idCapitulo` int(11) NOT NULL,
  `descripcion` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `secciones`
--

INSERT INTO `secciones` (`idSeccion`, `idCapitulo`, `descripcion`) VALUES
(1, 1, 'Mecanismos de selección y evaluación de estudiantes'),
(2, 1, 'Mecanismos de selección y evaluación de profesores'),
(3, 1, 'Sin sección Capitulo 1'),
(4, 2, 'Sin sección Capitulo 2'),
(5, 3, 'Sin sección Capitulo 3'),
(6, 4, 'Sin sección Capitulo 4'),
(7, 5, 'Sin sección Capitulo 5'),
(8, 6, 'Sin sección Capitulo 6');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipoevidencias`
--

CREATE TABLE `tipoevidencias` (
  `tipoEvidencia` int(11) NOT NULL,
  `descripcion` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tipoevidencias`
--

INSERT INTO `tipoevidencias` (`tipoEvidencia`, `descripcion`) VALUES
(1, 'Video'),
(2, 'archivo de texto'),
(3, 'Imagen'),
(4, 'Otro');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarioroles`
--

CREATE TABLE `usuarioroles` (
  `idUsername` varchar(50) NOT NULL,
  `idRol` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `idUsername` varchar(50) NOT NULL,
  `contrasena` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `articulos`
--
ALTER TABLE `articulos`
  ADD PRIMARY KEY (`idArticulo`),
  ADD KEY `idSeccion` (`idSeccion`);

--
-- Indices de la tabla `articulosliterales`
--
ALTER TABLE `articulosliterales`
  ADD KEY `idArticulo` (`idArticulo`),
  ADD KEY `idLiteral` (`idLiteral`);

--
-- Indices de la tabla `autores`
--
ALTER TABLE `autores`
  ADD PRIMARY KEY (`idAutor`);

--
-- Indices de la tabla `capitulos`
--
ALTER TABLE `capitulos`
  ADD PRIMARY KEY (`idCapitulo`);

--
-- Indices de la tabla `evidencias`
--
ALTER TABLE `evidencias`
  ADD PRIMARY KEY (`idEvidencia`),
  ADD KEY `idTipoEvidencia` (`idTipoEvidencia`),
  ADD KEY `idAutor` (`idAutor`),
  ADD KEY `idTipoEvidencia_2` (`idTipoEvidencia`),
  ADD KEY `idCapitulo` (`idCapitulo`);

--
-- Indices de la tabla `literales`
--
ALTER TABLE `literales`
  ADD PRIMARY KEY (`idLiteral`),
  ADD KEY `descripcion` (`descripcion`);

--
-- Indices de la tabla `literalesnumerales`
--
ALTER TABLE `literalesnumerales`
  ADD KEY `idLiteral` (`idLiteral`),
  ADD KEY `idNumeral` (`idNumeral`),
  ADD KEY `idArticulo` (`idArticulo`);

--
-- Indices de la tabla `numerales`
--
ALTER TABLE `numerales`
  ADD PRIMARY KEY (`idNumeral`);

--
-- Indices de la tabla `paragrafos`
--
ALTER TABLE `paragrafos`
  ADD KEY `idCapitulo` (`idCapitulo`);

--
-- Indices de la tabla `rolusuarios`
--
ALTER TABLE `rolusuarios`
  ADD PRIMARY KEY (`idRol`);

--
-- Indices de la tabla `secciones`
--
ALTER TABLE `secciones`
  ADD PRIMARY KEY (`idSeccion`),
  ADD KEY `idCapitulo` (`idCapitulo`);

--
-- Indices de la tabla `tipoevidencias`
--
ALTER TABLE `tipoevidencias`
  ADD PRIMARY KEY (`tipoEvidencia`);

--
-- Indices de la tabla `usuarioroles`
--
ALTER TABLE `usuarioroles`
  ADD KEY `idUsername` (`idUsername`),
  ADD KEY `idRol` (`idRol`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`idUsername`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `evidencias`
--
ALTER TABLE `evidencias`
  MODIFY `idEvidencia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `rolusuarios`
--
ALTER TABLE `rolusuarios`
  MODIFY `idRol` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `tipoevidencias`
--
ALTER TABLE `tipoevidencias`
  MODIFY `tipoEvidencia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `articulos`
--
ALTER TABLE `articulos`
  ADD CONSTRAINT `articulos_ibfk_1` FOREIGN KEY (`idSeccion`) REFERENCES `secciones` (`idSeccion`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `articulosliterales`
--
ALTER TABLE `articulosliterales`
  ADD CONSTRAINT `articulosliterales_ibfk_1` FOREIGN KEY (`idArticulo`) REFERENCES `articulos` (`idArticulo`) ON UPDATE CASCADE,
  ADD CONSTRAINT `articulosliterales_ibfk_2` FOREIGN KEY (`idLiteral`) REFERENCES `literales` (`idLiteral`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `evidencias`
--
ALTER TABLE `evidencias`
  ADD CONSTRAINT `evidencias_ibfk_1` FOREIGN KEY (`idAutor`) REFERENCES `autores` (`idAutor`) ON UPDATE CASCADE,
  ADD CONSTRAINT `evidencias_ibfk_2` FOREIGN KEY (`idTipoEvidencia`) REFERENCES `tipoevidencias` (`tipoEvidencia`) ON UPDATE CASCADE,
  ADD CONSTRAINT `evidencias_ibfk_3` FOREIGN KEY (`idCapitulo`) REFERENCES `capitulos` (`idCapitulo`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `literalesnumerales`
--
ALTER TABLE `literalesnumerales`
  ADD CONSTRAINT `literalesnumerales_ibfk_1` FOREIGN KEY (`idLiteral`) REFERENCES `literales` (`idLiteral`) ON UPDATE CASCADE,
  ADD CONSTRAINT `literalesnumerales_ibfk_2` FOREIGN KEY (`idNumeral`) REFERENCES `numerales` (`idNumeral`) ON UPDATE CASCADE,
  ADD CONSTRAINT `literalesnumerales_ibfk_3` FOREIGN KEY (`idArticulo`) REFERENCES `articulos` (`idArticulo`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `paragrafos`
--
ALTER TABLE `paragrafos`
  ADD CONSTRAINT `paragrafos_ibfk_1` FOREIGN KEY (`idCapitulo`) REFERENCES `capitulos` (`idCapitulo`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `secciones`
--
ALTER TABLE `secciones`
  ADD CONSTRAINT `secciones_ibfk_1` FOREIGN KEY (`idCapitulo`) REFERENCES `capitulos` (`idCapitulo`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `usuarioroles`
--
ALTER TABLE `usuarioroles`
  ADD CONSTRAINT `usuarioroles_ibfk_1` FOREIGN KEY (`idUsername`) REFERENCES `usuarios` (`idUsername`) ON UPDATE CASCADE,
  ADD CONSTRAINT `usuarioroles_ibfk_2` FOREIGN KEY (`idRol`) REFERENCES `rolusuarios` (`idRol`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
