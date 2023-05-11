-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 22, 2022 at 05:43 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `registrationform`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminuser`
--

DROP TABLE IF EXISTS `adminuser`;
CREATE TABLE IF NOT EXISTS `adminuser` (
  `username` varchar(20) DEFAULT NULL,
  `password` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adminuser`
--

INSERT INTO `adminuser` (`username`, `password`) VALUES
('admin', 1234);

-- --------------------------------------------------------

--
-- Table structure for table `studentdetails`
--

DROP TABLE IF EXISTS `studentdetails`;
CREATE TABLE IF NOT EXISTS `studentdetails` (
  `FIRSTNAME` varchar(20) NOT NULL,
  `LASTNAME` varchar(10) NOT NULL,
  `FATHERNAME` varchar(20) NOT NULL,
  `MOTHERNAME` varchar(20) NOT NULL,
  `GENDER` varchar(10) NOT NULL,
  `PHONE` int(15) NOT NULL,
  `ALTERNATEPH` int(15) NOT NULL,
  `DOB` date NOT NULL,
  `EMAIL` varchar(20) NOT NULL,
  `RELIGION` varchar(15) NOT NULL,
  `CASTE` varchar(15) NOT NULL,
  `NATIONALITY` varchar(15) NOT NULL,
  `JECARANK` int(10) NOT NULL,
  `HSBOARD` varchar(10) NOT NULL,
  `HSYEAR` int(10) NOT NULL,
  `HSMARKS` int(10) NOT NULL,
  `SBOARD` varchar(10) NOT NULL,
  `SYEAR` int(10) NOT NULL,
  `SMARKS` int(10) NOT NULL,
  `GBOARD` varchar(10) NOT NULL,
  `GYEAR` int(10) NOT NULL,
  `GMARKS` int(10) NOT NULL,
  `COURSE` varchar(10) NOT NULL,
  `STREAM` varchar(10) NOT NULL,
  `COUNTRY` varchar(10) NOT NULL,
  `STATE` varchar(15) NOT NULL,
  `HOMEADDRESS` varchar(15) NOT NULL,
  `ZIP` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `studentdetails`
--

INSERT INTO `studentdetails` (`FIRSTNAME`, `LASTNAME`, `FATHERNAME`, `MOTHERNAME`, `GENDER`, `PHONE`, `ALTERNATEPH`, `DOB`, `EMAIL`, `RELIGION`, `CASTE`, `NATIONALITY`, `JECARANK`, `HSBOARD`, `HSYEAR`, `HSMARKS`, `SBOARD`, `SYEAR`, `SMARKS`, `GBOARD`, `GYEAR`, `GMARKS`, `COURSE`, `STREAM`, `COUNTRY`, `STATE`, `HOMEADDRESS`, `ZIP`) VALUES
('Rahul', 'Saha', 'Rohit Saha', 'Ankita Saha', 'Male', 998754214, 549874487, '1999-05-05', 'rahul1@email.com', 'Hindu', 'General', 'Indian', 515, 'CBSE', 2018, 65, 'CBSE', 2015, 90, 'CU', 2021, 70, 'Btech', 'CSE', 'India ', 'WB', '51/ Salt Lake', 700125),
('Rahul', 'Saha', 'Rohit Saha', 'Ankita Saha', 'Male', 998754214, 549874487, '1999-05-05', 'rahul1@email.com', 'Hindu', 'General', 'Indian', 515, 'CBSE', 2018, 65, 'CBSE', 2015, 90, 'CU', 2021, 70, 'Btech', 'CSE', 'India ', 'WB', '51/ Salt Lake', 700125);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
