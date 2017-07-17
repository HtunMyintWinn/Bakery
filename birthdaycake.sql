-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 30, 2015 at 05:07 AM
-- Server version: 5.6.25
-- PHP Version: 5.6.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sbakery`
--

-- --------------------------------------------------------

--
-- Table structure for table `birthdaycake`
--

CREATE TABLE IF NOT EXISTS `birthdaycake` (
  `ProductName` varchar(30) NOT NULL,
  `Price` int(10) NOT NULL,
  `Ingredients` varchar(50) NOT NULL,
  `ManufactureDate` date NOT NULL,
  `ExpiredDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `birthdaycake`
--

INSERT INTO `birthdaycake` (`ProductName`, `Price`, `Ingredients`, `ManufactureDate`, `ExpiredDate`) VALUES
('BD 1', 6000, 'wheat,sugar,eggs,cream', '2015-10-10', '2015-10-17'),
('BD 2', 6000, 'wheat,sugar,eggs,cream', '2015-10-10', '2015-10-17'),
('BD 3', 6000, 'wheat,sugar,eggs,cream', '2015-10-10', '2015-10-17'),
('BD 4', 6000, 'wheat,sugar,eggs,cream', '2015-10-10', '2015-10-17'),
('BD 5', 6000, 'wheat,sugar,eggs,cream', '2015-10-10', '2015-10-17'),
('BD 6', 6000, 'wheat,sugar,eggs,cream', '2015-10-10', '2015-10-17'),
('BD 7', 6000, 'wheat,sugar,eggs,cream', '2015-10-10', '2015-10-17'),
('BD 8', 6000, 'wheat,sugar,eggs,cream', '2015-10-10', '2015-10-17'),
('BD 9', 6000, 'wheat,sugar,eggs,cream', '2015-10-10', '2015-10-17'),
('BD 10', 6000, 'wheat,sugar,eggs,cream', '2015-10-10', '2015-10-17'),
('BD 11', 6000, 'wheat,sugar,eggs,cream', '2015-10-10', '2015-10-17'),
('BD 12', 6000, 'wheat,sugar,eggs,cream', '2015-10-10', '2015-10-17'),
('BD 13', 6000, 'wheat,sugar,eggs,cream', '2015-10-10', '2015-10-17'),
('BD 14', 6000, 'wheat,sugar,eggs,cream', '2015-10-10', '2015-10-17'),
('BD 15', 6000, 'wheat,sugar,eggs,cream', '2015-10-10', '2015-10-17'),
('BD 16', 6000, 'wheat,sugar,eggs,cream', '2015-10-10', '2015-10-17'),
('BD 17', 6000, 'wheat,sugar,eggs,cream', '2015-10-10', '2015-10-17'),
('BD 18', 6000, 'wheat,sugar,eggs,cream', '2015-10-10', '2015-10-17'),
('BD 19', 6000, 'wheat,sugar,eggs,cream', '2015-10-10', '2015-10-17'),
('BD 20', 6000, 'wheat,sugar,eggs,cream', '2015-10-10', '2015-10-17');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
