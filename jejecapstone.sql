-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 10, 2023 at 09:27 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jejecapstone`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_useradmin`
--

CREATE TABLE `tbl_useradmin` (
  `adminID` int(11) NOT NULL,
  `userName` varchar(244) NOT NULL,
  `passWord` varchar(244) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_useradmin`
--

INSERT INTO `tbl_useradmin` (`adminID`, `userName`, `passWord`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_userclient`
--

CREATE TABLE `tbl_userclient` (
  `clientID` int(11) NOT NULL,
  `firstName` varchar(244) NOT NULL,
  `lastName` varchar(244) NOT NULL,
  `userName` varchar(244) NOT NULL,
  `email` varchar(244) NOT NULL,
  `phone` int(11) NOT NULL,
  `passWord` varchar(244) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_userclient`
--

INSERT INTO `tbl_userclient` (`clientID`, `firstName`, `lastName`, `userName`, `email`, `phone`, `passWord`) VALUES
(3, 'julie', 'ann', 'juan', 'juan@gmail.com', 123123, '123123'),
(5, 'sad', 'sad', 'sad', 'sad@gmail.com', 123, 'qwe'),
(6, 'sd', 'ssd', 'sssd', 'sssd@gmail.com', 123, '123');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_userlawyer`
--

CREATE TABLE `tbl_userlawyer` (
  `lawyerID` int(11) NOT NULL,
  `firstName` varchar(244) NOT NULL,
  `lastName` varchar(244) NOT NULL,
  `userName` varchar(244) NOT NULL,
  `email` varchar(244) NOT NULL,
  `phone` int(11) NOT NULL,
  `passWord` varchar(244) NOT NULL,
  `validID` longblob NOT NULL,
  `businessPermit` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_userlawyer`
--

INSERT INTO `tbl_userlawyer` (`lawyerID`, `firstName`, `lastName`, `userName`, `email`, `phone`, `passWord`, `validID`, `businessPermit`) VALUES
(5, 'qwe', 'qwe', 'qwe', 'qwe@gmail.com', 123, '123', '', ''),
(6, 'qwe', 'qwe', 'qwe', 'qweq@gmail.com', 123, 'qwe', '', ''),
(7, 'qwe', 'qwe', 'qwe', 'qweqq@gmail.com', 123, '123', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_useradmin`
--
ALTER TABLE `tbl_useradmin`
  ADD PRIMARY KEY (`adminID`);

--
-- Indexes for table `tbl_userclient`
--
ALTER TABLE `tbl_userclient`
  ADD PRIMARY KEY (`clientID`);

--
-- Indexes for table `tbl_userlawyer`
--
ALTER TABLE `tbl_userlawyer`
  ADD PRIMARY KEY (`lawyerID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_useradmin`
--
ALTER TABLE `tbl_useradmin`
  MODIFY `adminID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_userclient`
--
ALTER TABLE `tbl_userclient`
  MODIFY `clientID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_userlawyer`
--
ALTER TABLE `tbl_userlawyer`
  MODIFY `lawyerID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
