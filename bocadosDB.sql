-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-12-2022 a las 12:58:52
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
-- Base de datos: `bocadosdb`
--
CREATE DATABASE IF NOT EXISTS `bocadosdb` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `bocadosdb`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `thorario`
--

CREATE TABLE `thorario` (
  `id` int(11) NOT NULL,
  `hora` time NOT NULL,
  `reservado` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `thorario`
--

INSERT INTO `thorario` (`id`, `hora`, `reservado`) VALUES
(1, '12:00:00', 0),
(2, '12:30:00', 0),
(3, '13:00:00', 0),
(4, '13:30:00', 0),
(5, '14:00:00', 0),
(6, '14:30:00', 0),
(7, '15:00:00', 0),
(8, '15:30:00', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `treservas`
--

CREATE TABLE `treservas` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `surname` varchar(255) DEFAULT NULL,
  `telf` varchar(9) NOT NULL,
  `pax` int(2) NOT NULL,
  `id_horario` int(11) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tuser`
--

CREATE TABLE `tuser` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `surname` varchar(100) NOT NULL,
  `telf` varchar(30) NOT NULL,
  `email` varchar(200) NOT NULL,
  `encrypted_password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tuser`
--

INSERT INTO `tuser` (`id`, `name`, `surname`, `telf`, `email`, `encrypted_password`) VALUES
(3, 'Cristian', 'Lafuente', '666666666', 'clm@gmail.com', '$2y$10$/j1MIOQp2zPajkSRCoeYgu71OuIsEo7QB3DJFQfeFhflaEHvRcN3W'),
(4, 'Sonia', 'Plaza Ríos', '696407849', 'sonia@gmail.com', '$2y$10$.T1FjhYngIglgqvbFw74L.xOvGh9.MoikGVSaUP.7S07XdudhXjm.'),
(5, 'prueba', 'prueba', '640890123', 'prueba@gmail.com', '$2y$10$fXRDi.EHYjoRSWSDdd.9Pe0kZTd/8dTmzUlpooFGzqpCfdwtkPgKW');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `thorario`
--
ALTER TABLE `thorario`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `treservas`
--
ALTER TABLE `treservas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_horario` (`id_horario`),
  ADD KEY `id_user` (`id_user`);

--
-- Indices de la tabla `tuser`
--
ALTER TABLE `tuser`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `thorario`
--
ALTER TABLE `thorario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `treservas`
--
ALTER TABLE `treservas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de la tabla `tuser`
--
ALTER TABLE `tuser`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `treservas`
--
ALTER TABLE `treservas`
  ADD CONSTRAINT `tReservas_ibfk_1` FOREIGN KEY (`id_horario`) REFERENCES `thorario` (`id`),
  ADD CONSTRAINT `tReservas_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `tuser` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
