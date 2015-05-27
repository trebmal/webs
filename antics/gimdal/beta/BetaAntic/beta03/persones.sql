-- phpMyAdmin SQL Dump
-- version 4.3.10
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 18-05-2015 a les 18:34:01
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
-- Estructura de la taula `persones`
--

CREATE TABLE IF NOT EXISTS `persones` (
  `id` int(10) NOT NULL,
  `nom` varchar(255) DEFAULT NULL,
  `cognoms` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Bolcant dades de la taula `persones`
--

INSERT INTO `persones` (`id`, `nom`, `cognoms`, `password`) VALUES
(4, 'mano ', 'grafotas', 'dfddddddd'),
(6, 'Faletesssss', 'dfdfdff', 'fdfdfdffd'),
(7, 'rererererrere', '', ''),
(8, 'sisisi', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `persones`
--
ALTER TABLE `persones`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `persones`
--
ALTER TABLE `persones`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
