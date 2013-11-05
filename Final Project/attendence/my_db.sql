-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 24, 2013 at 08:46 AM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `my_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `record`
--

CREATE TABLE IF NOT EXISTS `record` (
  `day` int(2) NOT NULL,
  `rollno` int(9) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `record`
--

INSERT INTO `record` (`day`, `rollno`, `status`) VALUES
(1, 205112001, 1),
(1, 205112002, 1),
(1, 205112003, 1),
(1, 205112004, 1),
(2, 205112001, 1),
(2, 205112002, 1),
(2, 205112003, 1),
(3, 205112001, 1),
(3, 205112002, 1),
(3, 205112003, 1),
(3, 205112004, 0),
(3, 205112005, 0),
(4, 205112001, 1),
(4, 205112002, 1),
(4, 205112003, 1),
(4, 205112004, 0),
(4, 205112005, 0),
(4, 205112006, 0),
(5, 205112001, 1),
(5, 205112002, 1),
(5, 205112003, 1),
(5, 205112004, 1),
(5, 205112005, 0),
(5, 205112006, 0),
(5, 205112007, 0),
(5, 205112008, 0),
(6, 205112001, 1),
(6, 205112002, 1),
(6, 205112003, 1),
(6, 205112004, 1),
(6, 205112005, 0),
(6, 205112006, 0),
(6, 205112007, 0),
(6, 205112008, 0),
(7, 205112001, 1),
(7, 205112002, 1),
(7, 205112003, 1),
(7, 205112004, 0),
(7, 205112005, 0),
(7, 205112006, 0),
(7, 205112007, 1),
(7, 205112008, 1);

-- --------------------------------------------------------

--
-- Table structure for table `record1`
--

CREATE TABLE IF NOT EXISTS `record1` (
  `day` int(2) NOT NULL,
  `rollno` varchar(9) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `record1`
--

INSERT INTO `record1` (`day`, `rollno`, `status`) VALUES
(1, '205112001', 1),
(1, '205112002', 1),
(1, '205112003', 1),
(1, '205112004', 1),
(2, '205112001', 1),
(2, '205112002', 0),
(2, '205112003', 1),
(2, '205112004', 0),
(2, '205112005', 1),
(2, '205112006', 0),
(2, '205112007', 1),
(2, '205112008', 0),
(3, '205112001', 1),
(3, '205112002', 1),
(3, '205112003', 1),
(3, '205112004', 1),
(3, '205112005', 1),
(3, '205112006', 1),
(3, '205112007', 0),
(3, '205112008', 0),
(4, '205112001', 0),
(4, '205112002', 0),
(4, '205112003', 0),
(4, '205112004', 0),
(4, '205112005', 0),
(4, '205112006', 0),
(4, '205112007', 1),
(4, '205112008', 1),
(5, '205112001', 1),
(5, '205112002', 1),
(5, '205112003', 1),
(5, '205112004', 1),
(5, '205112005', 1),
(5, '205112006', 1),
(5, '205112007', 0),
(5, '205112008', 0),
(5, '205112009', 0),
(5, '205112001', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user_reg`
--

CREATE TABLE IF NOT EXISTS `user_reg` (
  `Id` varchar(11) NOT NULL,
  `Pass` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_reg`
--

INSERT INTO `user_reg` (`Id`, `Pass`) VALUES
('205112086', '12'),
('205112055', 'cr'),
('faculty', 'faculty');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
