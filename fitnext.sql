-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 15-06-2022 a las 12:49:51
-- Versión del servidor: 5.5.24-log
-- Versión de PHP: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `fitnext`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `EMAIL` varchar(40) NOT NULL,
  `ASUNTO` varchar(40) NOT NULL,
  `CUERPO` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `contact`
--

INSERT INTO `contact` (`EMAIL`, `ASUNTO`, `CUERPO`) VALUES
('raulrolero@gmail.com', 'Prueba', 'Holaaaaa');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `plazas`
--

CREATE TABLE IF NOT EXISTS `plazas` (
  `COD_PLAZA` int(255) NOT NULL AUTO_INCREMENT,
  `NOMBRE_TORNEO` int(20) NOT NULL,
  `DEPORTE` varchar(20) NOT NULL,
  PRIMARY KEY (`COD_PLAZA`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=97 ;

--
-- Volcado de datos para la tabla `plazas`
--

INSERT INTO `plazas` (`COD_PLAZA`, `NOMBRE_TORNEO`, `DEPORTE`) VALUES
(1, 0, 'FUTBOL'),
(2, 0, 'FUTBOL'),
(3, 0, 'FUTBOL'),
(4, 0, 'FUTBOL'),
(5, 0, 'FUTBOL'),
(6, 0, 'FUTBOL'),
(7, 0, 'FUTBOL'),
(8, 0, 'FUTBOL'),
(9, 0, 'FUTBOL'),
(10, 0, 'FUTBOL'),
(11, 0, 'FUTBOL'),
(12, 0, 'FUTBOL'),
(13, 0, 'FUTBOL'),
(14, 0, 'FUTBOL'),
(15, 0, 'FUTBOL'),
(16, 0, 'FUTBOL'),
(17, 0, 'FUTBOL'),
(18, 0, 'FUTBOL'),
(19, 0, 'FUTBOL'),
(20, 0, 'FUTBOL'),
(21, 0, 'FUTBOL'),
(22, 0, 'FUTBOL'),
(23, 0, 'FUTBOL'),
(24, 0, 'FUTBOL'),
(25, 0, 'FUTBOL'),
(26, 0, 'FUTBOL'),
(27, 0, 'FUTBOL'),
(28, 0, 'FUTBOL'),
(29, 0, 'FUTBOL'),
(30, 0, 'FUTBOL'),
(31, 0, 'FUTBOL'),
(32, 0, 'FUTBOL'),
(33, 0, 'FUTBOL'),
(34, 0, 'FUTBOL'),
(35, 0, 'FUTBOL'),
(36, 0, 'FUTBOL'),
(37, 0, 'FUTBOL'),
(38, 0, 'FUTBOL'),
(39, 0, 'FUTBOL'),
(40, 0, 'FUTBOL'),
(41, 0, 'FUTBOL'),
(42, 0, 'FUTBOL'),
(43, 0, 'FUTBOL'),
(44, 0, 'FUTBOL'),
(45, 0, 'FUTBOL'),
(46, 0, 'FUTBOL'),
(47, 0, 'FUTBOL'),
(48, 0, 'FUTBOL'),
(49, 0, 'FUTBOL'),
(50, 0, 'FUTBOL'),
(51, 0, 'FUTBOL'),
(52, 0, 'FUTBOL'),
(53, 0, 'FUTBOL'),
(54, 0, 'FUTBOL'),
(55, 0, 'FUTBOL'),
(56, 0, 'FUTBOL'),
(57, 0, 'FUTBOL'),
(58, 0, 'FUTBOL'),
(59, 0, 'FUTBOL'),
(60, 0, 'FUTBOL'),
(61, 0, 'FUTBOL'),
(62, 0, 'FUTBOL'),
(63, 0, 'FUTBOL'),
(64, 0, 'FUTBOL'),
(65, 0, 'FUTBOL'),
(66, 0, 'FUTBOL'),
(67, 0, 'FUTBOL'),
(68, 0, 'FUTBOL'),
(69, 0, 'FUTBOL'),
(70, 0, 'FUTBOL'),
(71, 0, 'FUTBOL'),
(72, 0, 'FUTBOL'),
(73, 0, 'FUTBOL'),
(74, 0, 'FUTBOL'),
(75, 0, 'FUTBOL'),
(76, 0, 'FUTBOL'),
(77, 0, 'FUTBOL'),
(78, 0, 'FUTBOL'),
(79, 0, 'FUTBOL'),
(80, 0, 'FUTBOL'),
(81, 0, 'FUTBOL'),
(82, 0, 'FUTBOL'),
(83, 0, 'FUTBOL'),
(84, 0, 'FUTBOL'),
(85, 0, 'FUTBOL'),
(86, 0, 'FUTBOL'),
(87, 0, 'FUTBOL'),
(88, 0, 'FUTBOL'),
(89, 0, 'FUTBOL'),
(90, 0, 'FUTBOL'),
(91, 0, 'FUTBOL'),
(92, 0, 'FUTBOL'),
(93, 0, 'FUTBOL'),
(94, 0, 'FUTBOL'),
(95, 0, 'FUTBOL'),
(96, 0, 'FUTBOL');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `torneos`
--

CREATE TABLE IF NOT EXISTS `torneos` (
  `ID_USUARIO` int(11) NOT NULL,
  `COD_PLAZA` int(11) NOT NULL,
  `FECHA` date NOT NULL,
  PRIMARY KEY (`COD_PLAZA`),
  UNIQUE KEY `ID_USUARIO` (`ID_USUARIO`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `torneos`
--

INSERT INTO `torneos` (`ID_USUARIO`, `COD_PLAZA`, `FECHA`) VALUES
(5, 1, '2022-06-14'),
(1, 3, '2022-06-15'),
(2, 4, '2022-06-15');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `ID_USUARIO` int(255) NOT NULL AUTO_INCREMENT,
  `PASSWD` varchar(20) NOT NULL,
  `NOMBRE` varchar(20) NOT NULL,
  `APELLIDOS` varchar(40) NOT NULL,
  `EDAD` int(100) NOT NULL,
  `PROVINCIA` varchar(30) NOT NULL,
  `CIUDAD` varchar(30) NOT NULL,
  `EMAIL` varchar(40) NOT NULL,
  `MOVIL` int(10) NOT NULL,
  `DEPORTE` varchar(10) NOT NULL,
  `DESCRIPCION` varchar(255) NOT NULL,
  PRIMARY KEY (`ID_USUARIO`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`ID_USUARIO`, `PASSWD`, `NOMBRE`, `APELLIDOS`, `EDAD`, `PROVINCIA`, `CIUDAD`, `EMAIL`, `MOVIL`, `DEPORTE`, `DESCRIPCION`) VALUES
(1, '1234', 'Raul', 'Gomez Nuñez', 20, 'Toledo', 'Talavera de la Reina', 'raulrolero@gmail.com', 626356377, 'FUTBOL', 'Hola soy Raul'),
(2, '1234', 'Jesus', 'Ocampos', 23, 'Toledo', 'Talavera', 'jesus@gmail.com', 925232322, 'FUTBOL', 'Hola soy Jesus'),
(3, '1234', 'Jorge', 'Gomez ', 18, 'Toledo', 'Talavera', 'jorge@gmail.com', 925232321, 'FUTBOL', 'Hola soy Jorge'),
(4, '1234', 'Jorge', 'Gomez ', 18, 'Toledo', 'Talavera', 'jorge@gmail.com', 925232321, 'FUTBOL', 'Hola soy Jorge'),
(5, '1234', 'Diego', 'Gonzalez', 19, 'Toledo', 'Talavera', 'diego@gmail.com', 925232320, 'FUTBOL', 'Hola soy Diego'),
(12, '1234', 'Jorge', 'Garcia', 21, 'Madrid', 'Madrid', 'jorge@gmail.com', 925243434, 'FUTBOL', 'Hola soy Jorge'),
(13, '', '', '', 0, '', '', '', 0, 'FUTBOL', ''),
(14, '1234', 'Daniel', 'Gomez', 20, 'Toledo', 'Talavera', 'dani@gmail.com', 0, 'FUTBOL', '');

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `torneos`
--
ALTER TABLE `torneos`
  ADD CONSTRAINT `torneos_ibfk_1` FOREIGN KEY (`ID_USUARIO`) REFERENCES `usuarios` (`ID_USUARIO`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `torneos_ibfk_2` FOREIGN KEY (`COD_PLAZA`) REFERENCES `plazas` (`COD_PLAZA`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
