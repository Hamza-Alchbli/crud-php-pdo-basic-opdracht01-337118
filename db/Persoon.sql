-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 27, 2023 at 11:36 AM
-- Server version: 5.7.36
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Opdracht01-p3`
--

-- --------------------------------------------------------

--
-- Table structure for table `Persoon`
--

DROP TABLE IF EXISTS `Persoon`;
CREATE TABLE IF NOT EXISTS `Persoon` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Firstname` varchar(100) NOT NULL,
  `Infix` varchar(20) NOT NULL,
  `Lastname` varchar(100) NOT NULL,
  `Haircolor` varchar(100) NOT NULL,
  `Phone` int(20) NOT NULL,
  `Streetname` varchar(100) NOT NULL,
  `Huisnumber` varchar(20) NOT NULL,
  `City` varchar(100) NOT NULL,
  `Postalcode` varchar(10) NOT NULL,
  `Land` varchar(20) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Persoon`
--

INSERT INTO `Persoon` (`Id`, `Firstname`, `Infix`, `Lastname`, `Haircolor`, `Phone`, `Streetname`, `Huisnumber`, `City`, `Postalcode`, `Land`) VALUES
(1, 'Hamza', '', 'Alchbli', 'brown', 618317052, 'straatnamee', '18', 'Utrecht', '3525GN', 'Nederland'),
(2, 'hazem', 'de', 'afara', 'black', 6111111, 'straat', '3', 'Utrecht', '1234ab', 'netherland'),
(3, 'hazem', 'de', 'afara', 'black', 6111111, 'straat', '3', 'Utrecht', '1234ab', 'netherland'),
(5, 'Hazem', 'asd', 'Afara', 'zwart', 618317052, 'asdads', '18', 'Utrecht', '1245sb', 'Nederland');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
