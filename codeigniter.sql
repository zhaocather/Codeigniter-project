-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 23, 2013 at 03:11 PM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `codeigniter`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE IF NOT EXISTS `blog` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(128) DEFAULT NULL,
  `slug` varchar(128) NOT NULL,
  `body` text,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `blog`
--


-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(128) NOT NULL,
  `slug` varchar(128) NOT NULL,
  `text` text NOT NULL,
  PRIMARY KEY (`id`),
  KEY `slug` (`slug`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `slug`, `text`) VALUES
(1, 'Hello', 'hello', 'This is first News\r\n'),
(2, 'Hello Title 2', 'hello-title-2', 'This is secound News');

-- --------------------------------------------------------

--
-- Table structure for table `userinfo`
--

CREATE TABLE IF NOT EXISTS `userinfo` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(50) DEFAULT NULL,
  `Surname` varchar(50) DEFAULT NULL,
  `City` varchar(50) DEFAULT NULL,
  `Email` varchar(100) DEFAULT NULL,
  `Dob` date DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `userinfo`
--

INSERT INTO `userinfo` (`ID`, `Name`, `Surname`, `City`, `Email`, `Dob`) VALUES
(1, 'Abdul', 'Shaffer', 'Gatlinburg', 'eget.dictum@In.ca', '1958-09-03'),
(2, 'Dominic', 'Fernades', 'Mumbai', 'd_nic14@yahoo.in', '2013-08-14'),
(3, 'Nishant', 'Vaity', 'Mumbai', 'nishu@yahoo.in', '2013-08-08'),
(4, 'Swapnil', 'Pathakar', 'Mumbai', 'swapnil.p838@gmail.com', '1987-04-20'),
(5, 'NIshant', 'Tatti', 'Mumbai', 'nishant@tatti.com', '2013-08-20'),
(6, 'Bhaskar', 'Ganekar', 'Mumbai', 'bhaskar.ganekar@hotmail.com', '1990-07-07'),
(7, 'Rahul', 'Ke', 'Mumbai', 'rahul@gmail.com', '1996-10-06');
