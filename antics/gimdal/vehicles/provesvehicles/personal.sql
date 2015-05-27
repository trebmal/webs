-- phpMyAdmin SQL Dump
-- version 4.3.10
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 07-05-2015 a les 18:46:01
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
-- Estructura de la taula `personal`
--

CREATE TABLE IF NOT EXISTS `personal` (
  `id` int(10) NOT NULL,
  `nom` varchar(20) DEFAULT NULL,
  `cognoms` varchar(40) DEFAULT NULL,
  `email` varchar(60) DEFAULT NULL,
  `password` varchar(60) DEFAULT NULL,
  `permisos` char(2) DEFAULT NULL,
  `dep` char(3) NOT NULL,
  `nif` char(9) DEFAULT NULL,
  `codi_conei` varchar(5) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Bolcant dades de la taula `personal`
--

INSERT INTO `personal` (`id`, `nom`, `cognoms`, `email`, `password`, `permisos`, `dep`, `nif`, `codi_conei`) VALUES
(1, 'Carlos', 'Justo Miro', NULL, NULL, NULL, 'DIR', NULL, NULL),
(2, 'Jacob P ', 'Capardon Lizana', 'jacob@miky.cat', '', '', 'ADM', '', ''),
(3, 'Juan Carlos', 'Galindo Canillas', '', '', '', 'TAL', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `personal`
--
ALTER TABLE `personal`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `personal`
--
ALTER TABLE `personal`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
