-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 22, 2017 at 10:08 AM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `shruti`
--
CREATE DATABASE IF NOT EXISTS `shruti` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `shruti`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `email` varchar(100) NOT NULL,
  `pwd` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `pwd`) VALUES
(1, 'singhania@gmail.com', '12345'),
(2, 'sakshi12@gmail.com', 'qwerty');

-- --------------------------------------------------------

--
-- Table structure for table `fcategory`
--

CREATE TABLE IF NOT EXISTS `fcategory` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `category` varchar(1000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `fcategory`
--

INSERT INTO `fcategory` (`id`, `category`) VALUES
(2, 'Physics'),
(3, 'Chemistry'),
(4, 'Maths'),
(5, 'Computer'),
(6, 'Biology');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE IF NOT EXISTS `signup` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `email` varchar(100) NOT NULL,
  `pwd` varchar(100) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `mname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `addr` varchar(1000) NOT NULL,
  `dob` varchar(100) NOT NULL,
  `gnd` varchar(100) NOT NULL,
  `about` varchar(1000) NOT NULL,
  `occp` varchar(100) NOT NULL,
  `ppic` varchar(100) NOT NULL,
  `sque` varchar(1000) NOT NULL,
  `sans` varchar(100) NOT NULL,
  `phno` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`id`, `email`, `pwd`, `fname`, `mname`, `lname`, `addr`, `dob`, `gnd`, `about`, `occp`, `ppic`, `sque`, `sans`, `phno`) VALUES
(1, 'shruti@gmail.com', 'qwerty', 'shh', 'kumari', 'singhania', 'qwerty', '06/12/1997', ' female', 'wierd', 'student', 'root/Koala.jpg', 'how are u?', 'fine', '9051236540'),
(2, 'monu@gmail.com', 'qwerty', 'monu', '', 'jain', 'asdfghj', '22/02/1997', ' female', 'sweet', 'student', 'root/Jellyfish.jpg', 'kasks', 'ksks', '2558');

-- --------------------------------------------------------

--
-- Table structure for table `upload`
--

CREATE TABLE IF NOT EXISTS `upload` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `fpath` varchar(1000) NOT NULL,
  `fdesc` varchar(1000) NOT NULL,
  `fcategory` varchar(1000) NOT NULL,
  `status` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `upload`
--

INSERT INTO `upload` (`id`, `uid`, `fname`, `fpath`, `fdesc`, `fcategory`, `status`) VALUES
(1, 1, 'can love happen twice?', 'root/WBUTAdmitCard_151870110130 OF 2015-2016_18700215037 (1).pdf', 'i m lovin it..papappapapapa', 'Chemistry', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
