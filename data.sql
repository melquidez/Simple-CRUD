-- phpMyAdmin SQL Dump
-- version 3.5.8.2
-- http://www.phpmyadmin.net
--
-- Host: sql312.vhostfull.com
-- Generation Time: Jul 06, 2016 at 08:16 AM
-- Server version: 5.6.29-76.2
-- PHP Version: 5.3.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `vhs_18441837_crud`
--

-- --------------------------------------------------------

--
-- Table structure for table `album`
--

CREATE TABLE IF NOT EXISTS `album` (
  `img_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `img_name` varchar(100) NOT NULL,
  `img_ext` varchar(5) NOT NULL,
  `c_id` int(11) NOT NULL,
  `img_date_submited` datetime NOT NULL,
  PRIMARY KEY (`img_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `CRUD`
--

CREATE TABLE IF NOT EXISTS `CRUD` (
  `c_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `c_firstname` varchar(50) NOT NULL,
  `c_lastname` varchar(50) NOT NULL,
  `c_email` varchar(100) NOT NULL,
  `c_age` int(2) NOT NULL DEFAULT '0',
  `c_job_title` varchar(50) NOT NULL,
  `c_date_submited` date NOT NULL,
  `c_last_updated` datetime NOT NULL,
  PRIMARY KEY (`c_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
