-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 25, 2016 at 01:41 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `simple_zap`
--

-- --------------------------------------------------------

--
-- Table structure for table `sepatu`
--

CREATE TABLE IF NOT EXISTS `sepatu` (
  `id_sepatu` int(15) NOT NULL AUTO_INCREMENT,
  `brand` varchar(50) NOT NULL,
  `model` varchar(50) NOT NULL,
  `harga` varchar(10) NOT NULL,
  `kategori` varchar(50) NOT NULL,
  PRIMARY KEY (`id_sepatu`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `sepatu`
--

INSERT INTO `sepatu` (`id_sepatu`, `brand`, `model`, `harga`, `kategori`) VALUES
(5, 'New Balance', 'MX608v5', '825000', 'Man - Sepatu Olahraga'),
(6, 'The North Face', 'Thermoball Versa', '1860000', 'Man - Boots'),
(7, 'Mizuno', 'Wive Inspire 13', '1716000', 'Man - Sepatu Olahraga'),
(8, 'Dr. Schools', 'Work Hiro', '858000', 'Man - Sepatu Formal'),
(9, 'Flyer', 'Premium Rumbler Hi', '1573000', 'Man - Sneaker & Skate'),
(10, 'Summit', 'Scarlet', '3134000', 'Woman - Heels'),
(11, 'FYRE', 'Cara', '5409000', 'Woman - Boots');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
