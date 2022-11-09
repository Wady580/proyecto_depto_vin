-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 10-11-2022 a las 00:03:50
-- Versión del servidor: 10.4.25-MariaDB
-- Versión de PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `proyecto_depto`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumno`
--

CREATE TABLE `alumno` (
  `id` int(11) NOT NULL,
  `ano_graduacion` int(11) NOT NULL,
  `institucion` varchar(255) NOT NULL,
  `curso` int(11) NOT NULL,
  `matricula` varchar(100) NOT NULL,
  `cedula` varchar(12) NOT NULL,
  `carrera_tecnica` varchar(255) NOT NULL,
  `tecnico_basico` varchar(12) NOT NULL,
  `nombres` varchar(255) NOT NULL,
  `apellidos` varchar(255) NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `sexo` varchar(10) NOT NULL,
  `direccion` varchar(255) NOT NULL,
  `sector` varchar(100) NOT NULL,
  `seccion` varchar(100) NOT NULL,
  `municipio` varchar(100) NOT NULL,
  `provincia` varchar(255) NOT NULL,
  `nacionalidad` varchar(100) NOT NULL,
  `telef_residencial` varchar(14) NOT NULL,
  `telef_movil` varchar(14) NOT NULL,
  `licencia` varchar(12) NOT NULL,
  `vehiculo` varchar(12) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contrasena` varchar(255) NOT NULL,
  `anos_experiencia` int(11) NOT NULL,
  `cv` blob NOT NULL,
  `area` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresa`
--

CREATE TABLE `empresa` (
  `id_empresa` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `rnc` varchar(25) NOT NULL,
  `identidad` varchar(10) NOT NULL,
  `depto_formacion` varchar(10) NOT NULL,
  `alcance_emp` varchar(10) NOT NULL,
  `actividad_economica` varchar(255) NOT NULL,
  `industria` varchar(255) NOT NULL,
  `tamano` varchar(20) NOT NULL,
  `direccion` varchar(100) NOT NULL,
  `sector` varchar(100) NOT NULL,
  `seccion` varchar(100) NOT NULL,
  `municipio` varchar(100) NOT NULL,
  `provincia` varchar(255) NOT NULL,
  `pais` varchar(30) NOT NULL,
  `telef_princ` varchar(15) NOT NULL,
  `telef_direc` varchar(14) NOT NULL,
  `email` varchar(100) NOT NULL,
  `contrasena` varchar(100) NOT NULL,
  `contacto_emp` varchar(100) NOT NULL,
  `telef_emp` varchar(14) NOT NULL,
  `ext` varchar(10) NOT NULL,
  `correo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vacante`
--

CREATE TABLE `vacante` (
  `id_vacante` int(11) NOT NULL,
  `id_empresa` int(11) NOT NULL,
  `nombre_puesto` varchar(50) NOT NULL,
  `funciones` varchar(255) NOT NULL,
  `sueldo` float NOT NULL,
  `ubicacion` varchar(100) NOT NULL,
  `tipo_contrato` varchar(50) NOT NULL,
  `horario` varchar(100) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `nombre_contacto` varchar(100) NOT NULL,
  `telef_contacto` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alumno`
--
ALTER TABLE `alumno`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `empresa`
--
ALTER TABLE `empresa`
  ADD PRIMARY KEY (`id_empresa`);

--
-- Indices de la tabla `vacante`
--
ALTER TABLE `vacante`
  ADD PRIMARY KEY (`id_vacante`),
  ADD KEY `fk_vacante` (`id_empresa`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `alumno`
--
ALTER TABLE `alumno`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `empresa`
--
ALTER TABLE `empresa`
  MODIFY `id_empresa` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `vacante`
--
ALTER TABLE `vacante`
  MODIFY `id_vacante` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `vacante`
--
ALTER TABLE `vacante`
  ADD CONSTRAINT `fk_vacante` FOREIGN KEY (`id_empresa`) REFERENCES `empresa` (`id_empresa`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
