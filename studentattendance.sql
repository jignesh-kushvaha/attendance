-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 01, 2022 at 12:55 PM
-- Server version: 8.0.27
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `studentattendance`
--

-- --------------------------------------------------------

--
-- Table structure for table `studaddmission`
--

DROP TABLE IF EXISTS `studaddmission`;
CREATE TABLE IF NOT EXISTS `studaddmission` (
  `admissionid` int NOT NULL AUTO_INCREMENT,
  `admissiondate` varchar(8) NOT NULL,
  `studname` varchar(50) NOT NULL,
  `regid` int NOT NULL,
  `course` varchar(20) NOT NULL,
  `duration` int NOT NULL,
  `fees` int NOT NULL,
  PRIMARY KEY (`admissionid`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `studaddmission`
--

INSERT INTO `studaddmission` (`admissionid`, `admissiondate`, `studname`, `regid`, `course`, `duration`, `fees`) VALUES
(1, '22-08-17', 'jignesh', 0, 'BCA', 3, 30000),
(2, '22-08-17', 'jignesh', 0, 'BCA', 3, 30000),
(3, '22-08-17', 'jignesh', 0, 'BCA', 3, 30000);

-- --------------------------------------------------------

--
-- Table structure for table `studreg`
--

DROP TABLE IF EXISTS `studreg`;
CREATE TABLE IF NOT EXISTS `studreg` (
  `regid` int NOT NULL AUTO_INCREMENT,
  `regdate` date NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(10) NOT NULL,
  `usertype` varchar(10) NOT NULL,
  `contactno` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  PRIMARY KEY (`regid`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `studreg`
--

INSERT INTO `studreg` (`regid`, `regdate`, `username`, `password`, `usertype`, `contactno`, `email`) VALUES
(1, '2022-05-10', 'jignesh', 'jig123', 'Student', '9364765544', 'jig@gmail.com'),
(2, '2022-08-05', 'kirit', '123', 'Teacher', '9736637990', 'kirit@gmail.com'),
(3, '2022-08-09', 'jigar', '789', 'Student', '3699859240', 'jigar@gmail.com');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
