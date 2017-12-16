-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 16, 2017 at 02:50 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 5.6.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `domisep`
--

-- --------------------------------------------------------

--
-- Table structure for table `home`
--

CREATE TABLE `home` (
  `HomeID` varchar(255) NOT NULL,
  `UserID` varchar(255) NOT NULL,
  `Size` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `home`
--

INSERT INTO `home` (`HomeID`, `UserID`, `Size`) VALUES
('qwerty', 'User000', '200');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `ProductID` varchar(255) NOT NULL,
  `Used` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`ProductID`, `Used`) VALUES
('', 1),
('prod01', 0);

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `HomeID` varchar(255) NOT NULL,
  `RoomID` varchar(255) NOT NULL,
  `RoomType` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sensors`
--

CREATE TABLE `sensors` (
  `SensorID` varchar(255) NOT NULL,
  `SensorTpye` varchar(255) NOT NULL,
  `Roomtype` varchar(255) NOT NULL,
  `SensorValue` double NOT NULL,
  `SensorAlertStatus` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `Userid` varchar(255) NOT NULL,
  `FirstName` varchar(255) NOT NULL,
  `LastName` varchar(255) NOT NULL,
  `EmailID` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `DOB` date NOT NULL,
  `Address` varchar(255) NOT NULL,
  `ProductID` varchar(255) NOT NULL,
  `UserStatusActive` tinyint(1) NOT NULL DEFAULT '1',
  `UserName` varchar(255) NOT NULL,
  `Gender` varchar(255) NOT NULL,
  `PhoneNumber` int(11) NOT NULL,
  `NoOfPpl` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`Userid`, `FirstName`, `LastName`, `EmailID`, `Password`, `DOB`, `Address`, `ProductID`, `UserStatusActive`, `UserName`, `Gender`, `PhoneNumber`, `NoOfPpl`) VALUES
('User000', 'Audrey', 'Hepburn', 'audrey.hepburn@gmail.com', 'qwerty', '1920-09-12', 'app 123', 'prod123', 1, 'audreyH', 'Female', 898999, 2),
('user01', 'nicholas', 'cage', 'nic.cage@gmail.com', 'nic', '1980-12-12', 'beverly hills', 'prod01', 1, 'niccy', 'male', 21233, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `home`
--
ALTER TABLE `home`
  ADD PRIMARY KEY (`UserID`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`ProductID`);

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`RoomID`);

--
-- Indexes for table `sensors`
--
ALTER TABLE `sensors`
  ADD PRIMARY KEY (`SensorID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`Userid`),
  ADD UNIQUE KEY `ProductID` (`ProductID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
