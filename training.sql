-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 26, 2016 at 09:20 AM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `training`
--

-- --------------------------------------------------------

--
-- Table structure for table `user_tb`
--

CREATE TABLE IF NOT EXISTS `user_tb` (
  `sn` int(3) NOT NULL AUTO_INCREMENT,
  `Candidate_Name` varchar(50) NOT NULL,
  `Home_Address` varchar(50) NOT NULL,
  `Phone_Number` text NOT NULL,
  `Gender` varchar(7) NOT NULL,
  PRIMARY KEY (`sn`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COMMENT='Stores Candidate Information' AUTO_INCREMENT=7 ;

--
-- Dumping data for table `user_tb`
--

INSERT INTO `user_tb` (`sn`, `Candidate_Name`, `Home_Address`, `Phone_Number`, `Gender`) VALUES
(1, 'ODEWOLE SAHEED A', '2, IRE-AKARI ZONE OLUNDE IBADAN', '08076346382', 'Male'),
(2, 'DURODOLA AFEEZ O', 'GBAGI, IBADAN', '07062241957', 'Male'),
(3, 'BABATUNDE MARYAM', '2, POLY ROAD EDE, OSUN STATE', '07056870912', 'Female'),
(4, 'OLOYEDE WALIYAT OMOLOLA', '17, POLY ROAD SANGO IBADAN', '0906754321', 'Female'),
(5, 'SAMUEL OKPARAJI', 'DELTA STATE', '07064123478', 'Male'),
(6, 'AUSTINE JAYJAY OKOCHA', 'BAYELSA STATE', '08156219032', 'Male');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
