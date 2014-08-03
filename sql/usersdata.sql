-- phpMyAdmin SQL Dump
-- version 3.4.10.1deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 03, 2014 at 11:17 AM
-- Server version: 5.5.38
-- PHP Version: 5.3.10-1ubuntu3.14

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `f34im02`
--

-- --------------------------------------------------------

--
-- Table structure for table `usersdata`
--

CREATE TABLE IF NOT EXISTS `usersdata` (
  `UserID` int(11) NOT NULL AUTO_INCREMENT,
  `UserName` varchar(50) DEFAULT NULL,
  `UserPassword` varchar(500) DEFAULT NULL,
  `UserEmail` varchar(500) CHARACTER SET latin1 COLLATE latin1_german2_ci DEFAULT NULL,
  `UserPostal` varchar(12) CHARACTER SET latin1 COLLATE latin1_german2_ci DEFAULT NULL,
  `UserPhone` varchar(20) CHARACTER SET latin1 COLLATE latin1_german2_ci DEFAULT NULL,
  `UserAddress` varchar(100) CHARACTER SET latin1 COLLATE latin1_german2_ci DEFAULT NULL,
  `UserEmailVer` tinyint(4) DEFAULT '0',
  PRIMARY KEY (`UserID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=30 ;

--
-- Dumping data for table `usersdata`
--

INSERT INTO `usersdata` (`UserID`, `UserName`, `UserPassword`, `UserEmail`, `UserPostal`, `UserPhone`, `UserAddress`, `UserEmailVer`) VALUES
(2, 'testuser', '123', 'testuser@123.com', '123', '123', '123', 0),
(29, 'testuser1', '123', 'aed', '123', '123', '123', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
