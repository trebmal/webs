-- phpMyAdmin SQL Dump
-- version 4.3.10
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 07-05-2015 a les 18:46:08
-- Versió del servidor: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `gimdaltest`
--

-- --------------------------------------------------------

--
-- Estructura de la taula `vehicles`
--

CREATE TABLE IF NOT EXISTS `vehicles` (
  `id` int(10) NOT NULL,
  `matricula` char(7) DEFAULT NULL,
  `id_conductor` int(10) DEFAULT NULL,
  `model` varchar(60) DEFAULT NULL,
  `renting` varchar(20) DEFAULT NULL,
  `inici` date DEFAULT NULL,
  `final` date DEFAULT NULL,
  `quota` decimal(10,2) DEFAULT NULL,
  `assegurança` varchar(50) DEFAULT NULL,
  `itv` date DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Bolcant dades de la taula `vehicles`
--

INSERT INTO `vehicles` (`id`, `matricula`, `id_conductor`, `model`, `renting`, `inici`, `final`, `quota`, `assegurança`, `itv`) VALUES
(1, '0076GKD', 1, 'Honda', 'banesto', '2008-12-23', '0000-00-00', NULL, NULL, '0000-00-00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `vehicles`
--
ALTER TABLE `vehicles`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `vehicles`
--
ALTER TABLE `vehicles`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
