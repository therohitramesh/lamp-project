-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 22, 2017 at 09:33 AM
-- Server version: 5.7.20-0ubuntu0.16.04.1
-- PHP Version: 7.1.11-1+ubuntu16.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fbi`
--

-- --------------------------------------------------------

--
-- Table structure for table `fbi-criminals`
--

CREATE TABLE `fbi-criminals` (
  `criminalid` int(6) NOT NULL,
  `name` varchar(225) NOT NULL,
  `crime-comm` varchar(225) NOT NULL,
  `area` varchar(225) NOT NULL,
  `year` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fbi-criminals`
--

INSERT INTO `fbi-criminals` (`criminalid`, `name`, `crime-comm`, `area`, `year`) VALUES
(123456, 'Jack', 'Rape', 'Athwa', 2014),
(789456, 'Ross', 'Robbery', 'Vesu', 2015),
(456123, 'Jane', 'Kidnapping', 'Ichchanath', 2009);

-- --------------------------------------------------------

--
-- Table structure for table `fbi-users`
--

CREATE TABLE `fbi-users` (
  `first-name` char(10) NOT NULL,
  `last-name` char(10) NOT NULL,
  `agentid` int(6) NOT NULL,
  `dept` char(4) NOT NULL,
  `password` text NOT NULL,
  `admin` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fbi-users`
--

INSERT INTO `fbi-users` (`first-name`, `last-name`, `agentid`, `dept`, `password`, `admin`) VALUES
('John', 'Doe', 172369, 'ADM', '172369', 1),
('Rohit', 'Ramesh', 123456, 'INV', 'qwerty', 0),
('darshan', 'sheth', 696969, 'abc', '12345', 0),
('Mir', 'Bhatia', 852963, 'ADM', 'asdfgh', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
