-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 12-04-2012 a las 19:44:21
-- Versión del servidor: 5.5.16
-- Versión de PHP: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `android`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `aplicaciones`
--

CREATE TABLE IF NOT EXISTS `aplicaciones` (
  `id` int(15) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=64 ;

--
-- Volcado de datos para la tabla `aplicaciones`
--

INSERT INTO `aplicaciones` (`id`, `descripcion`) VALUES
(1, '1 Swiftkey X'),
(2, 'Cut The Rope'),
(3, 'Where''s My Water'),
(4, 'Beautiful Widgets'),
(5, 'PowerAMP Full Version'),
(6, 'Angry Bird'),
(7, 'Facebook Android'),
(8, 'Skype'),
(9, 'Linterna -Tiny Flashlight '),
(10, 'Messenger'),
(11, 'Defender'),
(12, 'Tap Fish'),
(13, 'Paradise Island'),
(14, 'Smurf''s Village'),
(15, 'DocumentsToGo Full Version'),
(16, 'Audio Manager'),
(17, 'Media Center Control'),
(18, 'MegaPlayer Pack2'),
(19, 'MX Reproductor de video'),
(20, 'Roku Remote'),
(21, 'SketchBook'),
(22, 'Tveo'),
(23, 'VCL Direct Pro'),
(24, 'Wunder Radio'),
(25, 'App 2 Sd'),
(26, 'App Protector Pro'),
(27, 'Dr.web Ant-Virus'),
(28, 'GPS Test Plus'),
(29, 'Power Widget'),
(30, 'QuickSSHd'),
(31, 'RealCalc-Plus'),
(32, 'Smart Keyboard Pro'),
(33, 'SQLLite Editor'),
(34, 'Capitan America'),
(35, 'Crazy SnowBoard Pro'),
(36, 'Fifa 10'),
(37, 'Fruit Ninja'),
(38, 'Jewellust'),
(39, 'Moto Xtreme 2'),
(40, 'Need for Speed Hot Pursuit'),
(41, 'Nintaii'),
(42, 'Uno'),
(43, 'X men'),
(44, 'BabyESP'),
(45, 'Brainwave Tuner'),
(46, 'CardioTrainer Pro'),
(47, 'Entrenamiento Diario Abdomen'),
(48, 'Entrenamiento Diario Brazo'),
(49, 'iFitness'),
(50, 'Instant Heart Rate - Pro'),
(51, 'MyNetDiary'),
(52, 'SleepStats'),
(53, 'Pocket Yoga'),
(54, 'Baby Care Plus'),
(55, 'Critical Care ACLS Guide'),
(56, 'Easy Stop Smoking'),
(57, 'Easy Weight Loss'),
(58, 'Hora Del Medicamento'),
(59, 'Learn Muscles'),
(60, 'Menstrual Calendar Premium'),
(61, 'Muscle Trigger Point Anatomy'),
(62, 'Visual Anatomy ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `app_usuario`
--

CREATE TABLE IF NOT EXISTS `app_usuario` (
  `usuario` varchar(15) NOT NULL,
  `app` int(10) NOT NULL,
  `id` int(10) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`usuario`,`app`,`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=390 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `user` varchar(15) NOT NULL,
  `pass` varchar(20) NOT NULL,
  `correo` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `user`, `pass`, `correo`) VALUES
(1, 'UNAH', '1234', 'unicah@hotmail.com'),
(2, 'melissa', 'bubu5', 'melissa@hotmail.com'),
(9, 'miguel', '1234', 'mixsteel@hotmail.com'),
(13, 'administrador', 'contradmin', 'admin@hotmail.com'),
(14, 'benja', '333', 'benja@hotmail.com'),
(15, 'alejandro', 'jeje', 'ale@hotmail.com');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
