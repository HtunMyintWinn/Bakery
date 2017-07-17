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
-- Table structure for table `cake`
--

CREATE TABLE IF NOT EXISTS `cake` (
  `ProductName` varchar(30) NOT NULL,
  `Price` int(10) NOT NULL,
  `Ingredients` varchar(50) NOT NULL,
  `ManufactureDate` date NOT NULL,
  `ExpiredDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cake`
--

INSERT INTO `cake` (`ProductName`, `Price`, `Ingredients`, `ManufactureDate`, `ExpiredDate`) VALUES
('Marvel Cake', 1000, 'wheat,sugar,eggs', '2015-10-10', '2015-10-17'),
('Peanut Cake', 2500, 'wheat,sugar,eggs,peanut', '2015-10-10', '2015-10-17'),
('6 piece Putin Cake', 1200, 'wheat,sugar,eggs,putin', '2015-10-10', '2015-10-17'),
('Mango Cake', 1000, 'wheat,sugar,eggs,mango flavour', '2015-10-10', '2015-10-17'),
('12 piece cake', 1200, 'wheat,sugar,eggs,almonds', '2015-10-10', '2015-10-17'),
('Cheese Cake', 1200, 'wheat,sugar,eggs,cheese', '2015-10-10', '2015-10-17'),
('Orange Cake', 1500, 'wheat,sugar,eggs,orange', '2015-10-10', '2015-10-17'),
('Fruits Butter Cake', 2000, 'wheat,sugar,eggs,fruits,butter', '2015-10-10', '2015-10-17'),
('Walnut Cake', 2000, 'wheat,sugar,eggs,walnut', '2015-10-10', '2015-10-17'),
('Milk Cake', 700, 'wheat,sugar,eggs,milk', '2015-10-10', '2015-10-17'),
('3 piece Fruits Cake', 1200, 'wheat,sugar,eggs,fruits', '2015-10-10', '2015-10-17'),
('Furit Cheese Cake', 1000, 'wheat,sugar,eggs,fruit,cheese', '2015-10-10', '2015-10-17'),
('Small Cake', 1000, 'wheat,sugar,eggs', '2015-10-10', '2015-10-17'),
('Milk Cake', 1500, 'wheat,sugar,eggs,milk', '2015-10-10', '2015-10-17'),
('Banana Cake', 1000, 'wheat,sugar,eggs,banana', '2015-10-10', '2015-10-17'),
('Chocolate Cheese Cake', 1000, 'wheat,sugar,eggs,chocolate,cheese', '2015-10-10', '2015-10-17'),
('Cheese Cake', 2000, 'wheat,sugar,eggs,cheese', '2015-10-10', '2015-10-17'),
('Butter Cake', 1500, 'wheat,sugar,eggs,butter', '2015-10-10', '2015-10-17'),
('3 piece Honey Cake', 1000, 'wheat,sugar,eggs,', '2015-10-10', '2015-10-17'),
('Butter Cake', 1500, 'wheat,sugar,eggs,butter', '2015-10-10', '2015-10-17');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
