-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-07-2023 a las 17:00:15
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `cargacontrol_testdeveloper`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `documentos`
--

CREATE TABLE `documentos` (
  `Id` int(10) NOT NULL,
  `Descripcion` varchar(30) NOT NULL,
  `Documentos` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `documentos`
--

INSERT INTO `documentos` (`Id`, `Descripcion`, `Documentos`) VALUES
(1, 'AK2312', 'soat'),
(2, 'SBAS23', 'tecnomecanica');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vehiculos`
--

CREATE TABLE `vehiculos` (
  `Id` int(10) NOT NULL,
  `Placa` varchar(7) NOT NULL,
  `Marca` varchar(30) NOT NULL,
  `Modelo` int(4) NOT NULL,
  `Color` varchar(30) NOT NULL,
  `NroChasis` varchar(80) NOT NULL,
  `NroMotor` varchar(80) NOT NULL,
  `Capacidad` int(2) NOT NULL,
  `NroMatricula` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `vehiculos`
--

INSERT INTO `vehiculos` (`Id`, `Placa`, `Marca`, `Modelo`, `Color`, `NroChasis`, `NroMotor`, `Capacidad`, `NroMatricula`) VALUES
(1, 'AK2312', 'CHEVROLET', 2022, 'NEGRO', 'AK2312', 'AK2312', 4, 'AK2312'),
(2, 'SBAS23', 'MERCEDEZ BENZ', 2023, 'ROJO', 'SBAS23', 'SBAS23', 4, 'SBAS23');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vehiculos_documentos`
--

CREATE TABLE `vehiculos_documentos` (
  `Id` int(10) NOT NULL,
  `Id_vehiculo` int(10) NOT NULL,
  `Id_documento` int(10) NOT NULL,
  `Fecha_expedicion` date NOT NULL,
  `Fecha_vencimiento` date NOT NULL,
  `Compañia` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `vehiculos_documentos`
--

INSERT INTO `vehiculos_documentos` (`Id`, `Id_vehiculo`, `Id_documento`, `Fecha_expedicion`, `Fecha_vencimiento`, `Compañia`) VALUES
(1, 1, 1, '2023-07-19', '2023-07-19', 'AUTOSSGM'),
(2, 2, 2, '2023-07-19', '2023-07-19', 'AUTOSSGM');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `documentos`
--
ALTER TABLE `documentos`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `vehiculos`
--
ALTER TABLE `vehiculos`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `vehiculos_documentos`
--
ALTER TABLE `vehiculos_documentos`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `Id_vehiculo` (`Id_vehiculo`),
  ADD KEY `Id_documento` (`Id_documento`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `documentos`
--
ALTER TABLE `documentos`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `vehiculos`
--
ALTER TABLE `vehiculos`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `vehiculos_documentos`
--
ALTER TABLE `vehiculos_documentos`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `vehiculos_documentos`
--
ALTER TABLE `vehiculos_documentos`
  ADD CONSTRAINT `vehiculos_documentos_ibfk_1` FOREIGN KEY (`Id_vehiculo`) REFERENCES `vehiculos` (`Id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `vehiculos_documentos_ibfk_2` FOREIGN KEY (`Id_documento`) REFERENCES `documentos` (`Id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
