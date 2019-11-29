-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 29-11-2019 a las 22:30:55
-- Versión del servidor: 10.4.8-MariaDB
-- Versión de PHP: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sistema_registro_estudiantil`
--
CREATE DATABASE IF NOT EXISTS `sistema_registro_estudiantil` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `sistema_registro_estudiantil`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carrera`
--

DROP TABLE IF EXISTS `carrera`;
CREATE TABLE `carrera` (
  `id` int(11) NOT NULL,
  `nombre` varchar(150) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Truncar tablas antes de insertar `carrera`
--

TRUNCATE TABLE `carrera`;
--
-- Volcado de datos para la tabla `carrera`
--

INSERT INTO `carrera` (`id`, `nombre`) VALUES
(1, 'ARQUITECTURA'),
(2, 'ESPECIALIDAD EN HABILITACIÓN DOCENTE: ORIENTACIÓN ESCOLAR PARA EL NIVEL SECUNDARIO'),
(3, 'INGENIERIA CIVIL'),
(4, 'INGENIERIA DE SISTEMAS Y COMPUTACION'),
(5, 'INGENIERIA ELECTRONICA'),
(6, 'INGENIERIA INDUSTRIAL'),
(7, 'LICENCIATURA EN PSICOLOGIA CLINICA'),
(8, 'LICENCIATURA EN PSICOLOGIA ESCOLAR'),
(9, 'LICENCIATURA EN PSICOLOGIA INDUSTRIAL'),
(10, 'LICENCIATURA EN ADMINISTRACION DE EMPRESAS'),
(11, 'LICENCIATURA EN ADMINISTRACION DE EMPRESAS TURISTICAS Y HOTELERAS'),
(12, 'LICENCIATURA EN CIENCIAS SOCIALES ORIENTADA A LA EDUCACIÓN SECUNDARIA'),
(13, 'LICENCIATURA EN COMUNICACION SOCIAL'),
(14, 'LICENCIATURA EN CONTABILIDAD'),
(15, 'LICENCIATURA EN DERECHO'),
(16, 'LICENCIATURA EN EDUCACION BASICA PRIMER CICLO - CONCENTRACION LECTO ESCRITURA Y MATEMATICA'),
(17, 'LICENCIATURA EN EDUCACION MENCION INFORMATICA'),
(18, 'LICENCIATURA EN EDUCACION MENCION INICIAL'),
(19, 'LICENCIATURA EN EDUCACION MENCION LETRAS'),
(20, 'LICENCIATURA EN EDUCACION PRIMER CICLO NIVEL PRIMARIO'),
(21, 'LICENCIATURA EN FÍSICA ORIENTADA A LA EDUCACIÓN SECUNDARIA'),
(22, 'LICENCIATURA EN INFORMATICA'),
(23, 'LICENCIATURA EN LENGUA ESPAÑOLA Y LITERATURA ORIENTADA A LA EDUCACIÓN SECUNDARIA'),
(24, 'LICENCIATURA EN MATEMÁTICAS MENCIÓN ORIENTADA A LA EDUCACIÓN SECUNDARIA'),
(25, 'LICENCIATURA EN MERCADOTECNIA'),
(26, 'MAESTRIA EN CONTABILIDAD EJECUTIVA'),
(27, 'MAESTRÍA EN EDUCACIÓN MUSICAL'),
(28, 'MAESTRIA EN INGENIERIA DE SISTEMAS MENCION GERENCIAL'),
(29, 'POSTGRADO EN AUDITORIA DE SISTEMAS COMPUTARIZADOS');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudiante`
--

DROP TABLE IF EXISTS `estudiante`;
CREATE TABLE `estudiante` (
  `id` int(11) NOT NULL,
  `matricula` varchar(50) NOT NULL DEFAULT '0',
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `cedula` varchar(50) NOT NULL,
  `sexo` varchar(1) NOT NULL,
  `provincia_id` int(11) NOT NULL DEFAULT 0,
  `recinto_id` int(11) NOT NULL DEFAULT 0,
  `carrera_id` int(11) NOT NULL DEFAULT 0,
  `tanda` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Truncar tablas antes de insertar `estudiante`
--

TRUNCATE TABLE `estudiante`;
--
-- Volcado de datos para la tabla `estudiante`
--

INSERT INTO `estudiante` (`id`, `matricula`, `nombre`, `apellido`, `cedula`, `sexo`, `provincia_id`, `recinto_id`, `carrera_id`, `tanda`) VALUES
(1, '19-10001', 'Fara', 'moise', '65465465465465', 'M', 1, 1, 1, 'Nocturna');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `provincia`
--

DROP TABLE IF EXISTS `provincia`;
CREATE TABLE `provincia` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Truncar tablas antes de insertar `provincia`
--

TRUNCATE TABLE `provincia`;
--
-- Volcado de datos para la tabla `provincia`
--

INSERT INTO `provincia` (`id`, `nombre`) VALUES
(1, 'Distrito Nacional'),
(2, 'Santo Domingo Norte'),
(3, 'Santo Domingo Oeste'),
(4, 'Santo Domingo Oriental'),
(5, 'Bani'),
(6, 'Bahoruco'),
(7, 'Bavaro'),
(8, 'Boca Chica'),
(9, 'Cabarete'),
(10, 'Dajabón'),
(11, 'San Jose de Ocoa'),
(12, 'San Francisco de Macoris'),
(13, 'Duvergue'),
(14, 'El Seibo'),
(15, 'Elias Piña'),
(16, 'Hato Mayor'),
(17, 'Higuey'),
(18, 'La Altagracia'),
(19, 'La Romana'),
(20, 'La Vega'),
(21, 'Nagua'),
(22, 'Monseñor Noel (Bonao)'),
(23, 'Monte Plata'),
(24, 'Monte Cristi'),
(25, 'Moca'),
(26, 'Pedernales'),
(27, 'Peravia'),
(28, 'Puerto Plata'),
(29, 'Salcedo'),
(30, 'Samana'),
(31, 'San Cristobal'),
(32, 'San Juan de la Maguana'),
(33, 'San Pedro de Macoríz'),
(34, 'Sanchez Ramirez'),
(35, 'Santiago'),
(36, 'Sosua'),
(37, 'Valverde'),
(38, 'Azua');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `recinto`
--

DROP TABLE IF EXISTS `recinto`;
CREATE TABLE `recinto` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Truncar tablas antes de insertar `recinto`
--

TRUNCATE TABLE `recinto`;
--
-- Volcado de datos para la tabla `recinto`
--

INSERT INTO `recinto` (`id`, `nombre`) VALUES
(1, 'Universidad Dominicana O&M - Sede Central'),
(2, 'Universidad Dominicana O&M - Santo Domingo Este'),
(3, 'Universidad Dominicana O&M - La Romana'),
(4, 'Universidad Dominicana O&M - Santiago'),
(5, 'Universidad Dominicana O&M - Puerto Plata'),
(6, 'Universidad Dominicana O&M - Moca'),
(7, 'Universidad Dominicana O&M - SAN JOSE DE OCOA'),
(8, 'Universidad Dominicana O&M - Santo Domingo Oeste');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `carrera`
--
ALTER TABLE `carrera`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `estudiante`
--
ALTER TABLE `estudiante`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `matricula` (`matricula`);

--
-- Indices de la tabla `provincia`
--
ALTER TABLE `provincia`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `recinto`
--
ALTER TABLE `recinto`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `carrera`
--
ALTER TABLE `carrera`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT de la tabla `estudiante`
--
ALTER TABLE `estudiante`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `provincia`
--
ALTER TABLE `provincia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT de la tabla `recinto`
--
ALTER TABLE `recinto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
