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
-- Table structure for table `others`
--

CREATE TABLE IF NOT EXISTS `others` (
  `ProductName` varchar(30) NOT NULL,
  `Price` int(10) NOT NULL,
  `Ingredients` varchar(50) NOT NULL,
  `ManufactureDate` date NOT NULL,
  `ExpiredDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `others`
--

INSERT INTO `others` (`ProductName`, `Price`, `Ingredients`, `ManufactureDate`, `ExpiredDate`) VALUES
('Welnuts Mose Cake', 1500, 'wheat,sugar,eggs,Chocolate flavour,mose powder,cre', '2015-10-10', '2015-10-17'),
('Cherry Mose Cake', 1500, 'wheat,sugar,eggs,Chocolate flavour,mose powder,cre', '2015-10-10', '2015-10-17'),
('Strawberry Mose Cake', 1500, 'wheat,sugar,eggs,Chocolate flavour,mose powder,cre', '2015-10-10', '2015-10-17'),
('Fruits Cream Cake(Chocolate)', 2000, 'wheat,sugar,eggs,Chocolate flavour,cream,fruits', '2015-10-10', '2015-10-17'),
('Fruits Cream Cake(Almond)', 2000, 'wheat,sugar,eggs,almond flavour,cream,fruits', '2015-10-10', '2015-10-17'),
('Laopopin', 500, 'wheat,sugar,eggs,coconut flavour', '2015-10-10', '2015-10-17'),
('Pet Putin', 400, 'wheat,sugar,eggs,putin flavour,milk', '2015-10-10', '2015-10-17'),
('Putin', 500, 'wheat,sugar,eggs,putin flavour', '2015-10-10', '2015-10-17'),
('Welnuts Mose Cake', 1500, 'wheat,sugar,eggs,Chocolate flavour,mose powder,cre', '2015-10-10', '2015-10-17'),
('Cherry Mose Cake', 1500, 'wheat,sugar,eggs,Chocolate flavour,mose powder,cre', '2015-10-10', '2015-10-17'),
('Strawberry Mose Cake', 1500, 'wheat,sugar,eggs,Chocolate flavour,mose powder,cre', '2015-10-10', '2015-10-17'),
('Fruits Cream Cake(Chocolate)', 2000, 'wheat,sugar,eggs,Chocolate flavour,cream,fruits', '2015-10-10', '2015-10-17'),
('Fruits Cream Cake(Almond)', 2000, 'wheat,sugar,eggs,almond flavour,cream,fruits', '2015-10-10', '2015-10-17'),
('Laopopin', 500, 'wheat,sugar,eggs,coconut flavour', '2015-10-10', '2015-10-17'),
('Pet Putin', 400, 'wheat,sugar,eggs,putin flavour,milk', '2015-10-10', '2015-10-17'),
('Putin', 500, 'wheat,sugar,eggs,putin flavour', '2015-10-10', '2015-10-17');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
