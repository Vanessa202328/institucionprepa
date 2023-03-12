-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-03-2023 a las 17:59:39
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `preparatoriacdmx`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inscripcion`
--

CREATE TABLE `inscripcion` (
  `id` int(11) NOT NULL,
  `Asignatura` varchar(60) NOT NULL,
  `Grupo` int(11) NOT NULL,
  `Profesor` varchar(60) NOT NULL,
  `Turno` varchar(60) NOT NULL,
  `Semestre` int(11) NOT NULL,
  `Estatus` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `inscripcion`
--

INSERT INTO `inscripcion` (`id`, `Asignatura`, `Grupo`, `Profesor`, `Turno`, `Semestre`, `Estatus`) VALUES
(1, 'computadora 2', 202, 'Josefina Lopez', 'Matutino', 2, 'Preinscrita'),
(2, 'Historia 1', 321, 'Josefina Flor', 'Vespertino', 3, 'preinscrita');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `preinscripcion`
--

CREATE TABLE `preinscripcion` (
  `id` int(20) NOT NULL,
  `Asignatura` varchar(60) NOT NULL,
  `Grupo` int(20) NOT NULL,
  `Matricula` int(20) NOT NULL,
  `Profesor` varchar(60) NOT NULL,
  `Semestre` int(20) NOT NULL,
  `Estatus` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `preinscripcion`
--

INSERT INTO `preinscripcion` (`id`, `Asignatura`, `Grupo`, `Matricula`, `Profesor`, `Semestre`, `Estatus`) VALUES
(1, 'computadora 2', 202, 9999, 'Josefina Lopez', 2, 'inscrita'),
(2, 'Historia 1', 321, 0, 'Josefina Flor', 3, 'inscrita'),
(3, 'programacion', 333, 9998, 'Marely Cervantes', 4, 'inscrita'),
(4, 'historia', 326, 9998, 'Rosa Cervantes', 4, 'inscrita');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `Matricula` varchar(60) NOT NULL,
  `Nombre` varchar(60) NOT NULL,
  `ApellidoP` varchar(60) NOT NULL,
  `ApellidoM` varchar(60) NOT NULL,
  `Turno` varchar(60) NOT NULL,
  `TipoUsuario` varchar(60) NOT NULL,
  `Passwoord` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `Matricula`, `Nombre`, `ApellidoP`, `ApellidoM`, `Turno`, `TipoUsuario`, `Passwoord`) VALUES
(1, '0000', 'vanessa', 'flores', 'cervantes', 'vespertino', 'SE', 'Progweb2#'),
(2, '9999', 'yesenia', 'flores', 'cervantes', 'matutino', 'AL', 'Progweb2#'),
(3, '9998', 'Luis', 'Mendez', 'Florres', 'Vespertino', 'AL', '123');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `inscripcion`
--
ALTER TABLE `inscripcion`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
