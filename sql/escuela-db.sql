SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";
--
-- Base de datos: `escuela-db`
--
CREATE DATABASE IF NOT EXISTS `escuela-db`;
--
-- Estructura de tabla para la tabla `alumnos`
--
CREATE TABLE IF NOT EXISTS `alumnos` (
  `id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `nombre` varchar(100) NOT NULL,
  `apellido` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `telefono` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
