-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 30, 2015 at 05:08 AM
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
-- Table structure for table `cookies`
--

CREATE TABLE IF NOT EXISTS `cookies` (
  `ProductName` varchar(30) NOT NULL,
  `Price` int(10) NOT NULL,
  `Ingredients` varchar(50) NOT NULL,
  `ManufactureDate` date NOT NULL,
  `ExpiredDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cookies`
--

INSERT INTO `cookies` (`ProductName`, `Price`, `Ingredients`, `ManufactureDate`, `ExpiredDate`) VALUES
('Onion tops Cookies', 2500, 'wheat,eggs,milk,dry onion', '2015-10-10', '2015-10-17'),
('Blueberry Cookies', 2000, 'wheat,eggs,sugar,milk,blueberry flavour', '2015-10-10', '2015-10-17'),
('Milk Cookies', 1500, 'wheat,eggs,sugar,milk', '2015-10-10', '2015-10-17'),
('Chocolate Cookies', 1500, 'wheat,eggs,milk,chocolate flavour', '2015-10-10', '2015-10-17'),
('Peanut Stick Cookies', 1500, 'wheat,eggs,milk,peanut', '2015-10-10', '2015-10-17'),
('Chocolate Stick Cookies', 1500, 'wheat,eggs,milk,sugar,chololate flavour', '2015-10-10', '2015-10-17'),
('Maize cookies', 500, 'wheat,eggs,milk,sugar,maize flavour', '2015-10-10', '2015-10-17'),
('Grapes Cookies', 1000, 'wheat,eggs,milk,sugar,grape flavour', '2015-10-10', '2015-10-17'),
('Coconut Cookies', 1500, 'wheat,eggs,milk,sugar,coconut flavour', '2015-10-10', '2015-10-17'),
('Cashew Cookies', 1500, 'wheat,eggs,milk,sugar,cashew', '2015-10-10', '2015-10-17'),
('Milk Stick Cookies', 1500, 'wheat,eggs,sugar,milk', '2015-10-10', '2015-10-17'),
('Chocolate ice cookies', 500, 'wheat,eggs,milk,sugar,chocolate flavour', '2015-10-10', '2015-10-17'),
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
