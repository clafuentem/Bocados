-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 20, 2022 at 02:22 PM
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
-- Table structure for table `tUser`
--

CREATE TABLE `tUser` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `surname` varchar(100) DEFAULT NULL,
  `email` varchar(200) NOT NULL,
  `encrypted_password` varchar(100) NOT NULL,
  `telf` varchar(9) NOT NULL,
  `f_nacimiento` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tUser`
--

INSERT INTO `tUser` (`id`, `name`, `surname`, `email`, `encrypted_password`, `telf`, `f_nacimiento`) VALUES
(1, 'Cristian', 'Lafuente', 'clm@gmail.com', '$2a$12$5Vhls0tqbawhZfGRZgcIQuP7UoBLvEjxK4uhjZ3BtE4m2i6lTO0zy', '666666666', '2022-10-20'),
(3, 'cristian', 'lafuente', 'user@gmail.com', '$2y$10$lr4DiuBlXKea4djNooDBHOKiLPZFnX8NH2su7hZe2naRxhWZu.a/u', '666666666', '2000-02-06');

--
-- Indexes for dumped tables
--

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
-- AUTO_INCREMENT for table `tUser`
--
ALTER TABLE `tUser`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
