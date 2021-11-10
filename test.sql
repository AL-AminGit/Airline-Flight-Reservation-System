-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 10, 2021 at 06:03 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Email` varchar(200) NOT NULL,
  `Password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Email`, `Password`) VALUES
('mdalamin17251003@gmail.com', 'mdalamin'),
('alamin144061@gmail.com', '123');

-- --------------------------------------------------------

--
-- Table structure for table `alami`
--

CREATE TABLE `alami` (
  `Flight_ID` varchar(25) DEFAULT NULL,
  `Seat_Number` tinytext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `aminm`
--

CREATE TABLE `aminm` (
  `Flight_ID` varchar(25) DEFAULT NULL,
  `Seat_Number` tinytext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `domesticfs`
--

CREATE TABLE `domesticfs` (
  `Flight_ID` text NOT NULL,
  `Date` date NOT NULL,
  `Start_Time` time NOT NULL,
  `Arrival_Time` time NOT NULL,
  `Departure` text NOT NULL,
  `Destination` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `domesticfs`
--

INSERT INTO `domesticfs` (`Flight_ID`, `Date`, `Start_Time`, `Arrival_Time`, `Departure`, `Destination`) VALUES
('501', '2021-03-04', '10:00:00', '12:00:00', 'Dhaka Airport ', 'Chittagong Airport '),
('502', '2021-03-05', '09:00:00', '11:00:00', 'Dhaka Airport ', 'Sylhet Airport '),
('503', '2021-03-21', '10:00:00', '12:00:00', 'Mymensingh Airport ', 'Cox\'s Bazar Airport'),
('504', '2021-03-21', '10:00:00', '01:00:00', 'Mymensingh Airport ', 'Chittagong Airport');

-- --------------------------------------------------------

--
-- Table structure for table `interseatnum`
--

CREATE TABLE `interseatnum` (
  `Flight_ID` varchar(25) NOT NULL,
  `one` tinyint(1) NOT NULL,
  `two` tinyint(1) NOT NULL,
  `three` tinyint(1) NOT NULL,
  `four` tinyint(1) NOT NULL,
  `five` tinyint(1) NOT NULL,
  `six` tinyint(1) NOT NULL,
  `seven` tinyint(1) NOT NULL,
  `eight` tinyint(1) NOT NULL,
  `nine` tinyint(1) NOT NULL,
  `ten` tinyint(1) NOT NULL,
  `eleven` tinyint(1) NOT NULL,
  `twelve` tinyint(1) NOT NULL,
  `thirteen` tinyint(1) NOT NULL,
  `fourteen` tinyint(1) NOT NULL,
  `fifteen` tinyint(1) NOT NULL,
  `sixteen` tinyint(1) NOT NULL,
  `seventeen` tinyint(1) NOT NULL,
  `eighteen` tinyint(1) NOT NULL,
  `nineteen` tinyint(1) NOT NULL,
  `twenty` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `interseatnum`
--

INSERT INTO `interseatnum` (`Flight_ID`, `one`, `two`, `three`, `four`, `five`, `six`, `seven`, `eight`, `nine`, `ten`, `eleven`, `twelve`, `thirteen`, `fourteen`, `fifteen`, `sixteen`, `seventeen`, `eighteen`, `nineteen`, `twenty`) VALUES
('1001', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
('1002', 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('1003', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('1004', 0, 0, 0, 1, 1, 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1),
('1005', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `inter_fs`
--

CREATE TABLE `inter_fs` (
  `Flight_ID` varchar(25) NOT NULL,
  `Date` date NOT NULL,
  `Start_Time` time NOT NULL,
  `Arrival_Time` time NOT NULL,
  `Departure` text NOT NULL,
  `Destination` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inter_fs`
--

INSERT INTO `inter_fs` (`Flight_ID`, `Date`, `Start_Time`, `Arrival_Time`, `Departure`, `Destination`) VALUES
('1001', '2021-03-24', '10:00:00', '14:00:00', 'Dhaka Airport ', 'Singapore Airport'),
('1002', '2021-03-24', '10:00:00', '22:00:00', 'Dhaka Airport ', 'San Francisco Airport'),
('1003', '2021-03-24', '10:00:00', '21:00:00', 'Dhaka Airport ', 'Ontario Airport'),
('1004', '2021-03-24', '12:00:00', '15:00:00', 'Dhaka Airport ', 'Kolkata Airport'),
('1005', '2021-03-24', '11:00:00', '18:00:00', 'Sylhet Airport ', 'London Airport');

-- --------------------------------------------------------

--
-- Table structure for table `kabir`
--

CREATE TABLE `kabir` (
  `Flight_ID` varchar(25) DEFAULT NULL,
  `Seat_Number` tinytext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `seatnum`
--

CREATE TABLE `seatnum` (
  `Flight_ID` varchar(10) NOT NULL,
  `one` tinyint(1) NOT NULL,
  `two` tinyint(1) NOT NULL,
  `three` tinyint(1) NOT NULL,
  `four` tinyint(1) NOT NULL,
  `five` tinyint(1) NOT NULL,
  `six` tinyint(1) NOT NULL,
  `seven` tinyint(1) NOT NULL,
  `eight` tinyint(1) NOT NULL,
  `nine` tinyint(1) NOT NULL,
  `ten` tinyint(1) NOT NULL,
  `eleven` tinyint(1) NOT NULL,
  `twelve` tinyint(1) NOT NULL,
  `thirteen` tinyint(1) NOT NULL,
  `fourteen` tinyint(1) NOT NULL,
  `fifteen` tinyint(1) NOT NULL,
  `sixteen` tinyint(1) NOT NULL,
  `seventeen` tinyint(1) NOT NULL,
  `eighteen` tinyint(1) NOT NULL,
  `nineteen` tinyint(1) NOT NULL,
  `twenty` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `seatnum`
--

INSERT INTO `seatnum` (`Flight_ID`, `one`, `two`, `three`, `four`, `five`, `six`, `seven`, `eight`, `nine`, `ten`, `eleven`, `twelve`, `thirteen`, `fourteen`, `fifteen`, `sixteen`, `seventeen`, `eighteen`, `nineteen`, `twenty`) VALUES
('502', 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('503', 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('504', 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('505', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('501', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `taohi`
--

CREATE TABLE `taohi` (
  `Flight_ID` varchar(25) DEFAULT NULL,
  `Seat_Number` tinytext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `name` text NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`name`, `email`, `password`) VALUES
('AL-Amin', 'alamin144061@gmail.com', '123'),
('Amin Mahmud', 'aminmahmud@gmail.com', '17251005'),
('Toha', 'taohidul@gmail.com', 'toha'),
('AL-Amin', 'al.amin17251003@gmail.com', '456'),
('kabir', 'kabir@gmail.com', '789');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
