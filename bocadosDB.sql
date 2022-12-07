-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 26, 2022 at 06:42 PM
-- Server version: 10.3.34-MariaDB-0ubuntu0.20.04.1
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bocadosDB`
--

-- --------------------------------------------------------

--
-- Table structure for table `tHorario`
--

CREATE TABLE `tHorario` (
  `id` int(11) NOT NULL,
  `hora` time NOT NULL,
  `reservado` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tHorario`
--

INSERT INTO `tHorario` (`id`, `hora`, `reservado`) VALUES
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
-- Table structure for table `tReservas`
--

CREATE TABLE `tReservas` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `surname` varchar(255) DEFAULT NULL,
  `telf` varchar(9) NOT NULL,
  `id_horario` int(11) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tUser`
--

CREATE TABLE `tUser` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `surname` varchar(100) NOT NULL,
  `telf` varchar(30) NOT NULL,
  `email` varchar(200) NOT NULL,
  `encrypted_password` varchar(100) NOT NULL,
  `active_session_token` char(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tUser`
--

INSERT INTO `tUser` (`id`, `name`, `surname`, `telf`, `email`, `encrypted_password`, `active_session_token`) VALUES
(3, 'Cristian', 'Lafuente', '666666666', 'clm@gmail.com', '$2y$10$/j1MIOQp2zPajkSRCoeYgu71OuIsEo7QB3DJFQfeFhflaEHvRcN3W', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tHorario`
--
ALTER TABLE `tHorario`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tReservas`
--
ALTER TABLE `tReservas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_horario` (`id_horario`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `tUser`
--
ALTER TABLE `tUser`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tHorario`
--
ALTER TABLE `tHorario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tReservas`
--
ALTER TABLE `tReservas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tUser`
--
ALTER TABLE `tUser`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tReservas`
--
ALTER TABLE `tReservas`
  ADD CONSTRAINT `tReservas_ibfk_1` FOREIGN KEY (`id_horario`) REFERENCES `tHorario` (`id`),
  ADD CONSTRAINT `tReservas_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `tUser` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
