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
-- Table structure for table `bread`
--

CREATE TABLE IF NOT EXISTS `bread` (
  `ProductName` varchar(30) NOT NULL,
  `Price` int(10) NOT NULL,
  `Ingredients` varchar(50) NOT NULL,
  `ManufactureDate` date NOT NULL,
  `ExpiredDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bread`
--

INSERT INTO `bread` (`ProductName`, `Price`, `Ingredients`, `ManufactureDate`, `ExpiredDate`) VALUES
('Slide Bread', 1500, 'wheat,eggs,sugar,milk,yeast', '2015-10-10', '2015-10-17'),
('Mike Pet Chicken', 1200, 'wheat,eggs,sugar,milk,yeast', '2015-10-10', '2015-10-17'),
('Milke Pet Bread', 2000, 'wheat,eggs,sugar,milk,yeast', '2015-10-10', '2015-10-17'),
('Snow White Bread', 1000, 'wheat,eggs,sugar,milk,yeast', '2015-10-10', '2015-10-17'),
('Hotdog', 500, 'wheat,eggs,sugar,milk,yeast,hotdog', '2015-10-10', '2015-10-17'),
('Roll chicken', 1500, 'wheat,eggs,sugar,milk,yeast,chicken', '2015-10-10', '2015-10-17'),
('6 piece Chicken Floss Bread', 1000, 'wheat,eggs,sugar,milk,yeast,chicken', '2015-10-10', '2015-10-17'),
('Milk Slide Bread', 1500, 'wheat,eggs,sugar,milk,yeast', '2015-10-10', '2015-10-17'),
('Coconut Bread', 1000, 'wheat,eggs,sugar,milk,yeast,coconut flavour', '2015-10-10', '2015-10-17'),
('Chicken Floss Bread', 1500, 'wheat,eggs,sugar,milk,yeast,chicken', '2015-10-10', '2015-10-17'),
('10 piece Putin bread', 1000, 'wheat,eggs,sugar,milk,yeast,putin powder', '2015-10-10', '2015-10-17'),
('Chicken Floss Bread', 1000, 'wheat,eggs,sugar,milk,yeast,chicken', '2015-10-10', '2015-10-17'),
('Chicken Bread', 1000, 'wheat,eggs,sugar,milk,yeast,chicken', '2015-10-10', '2015-10-17'),
('Cheese Stick', 800, 'wheat,eggs,sugar,milk,yeast,cheese', '2015-10-10', '2015-10-17'),
('Bean Bread', 1000, 'wheat,eggs,sugar,milk,yeast,bean', '2015-10-10', '2015-10-17'),
('Double Slide Bread', 1000, 'wheat,eggs,sugar,milk,yeast', '2015-10-10', '2015-10-17'),
('12 piece Bean Bread', 1500, 'wheat,eggs,sugar,milk,yeast,bean', '2015-10-10', '2015-10-17'),
('6 piece Cream Bread', 1000, 'wheat,eggs,sugar,milk,yeast,cream', '2015-10-10', '2015-10-17'),
('Canes Bread', 1000, 'wheat,eggs,sugar,milk,yeast,canes', '2015-10-10', '2015-10-17');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
