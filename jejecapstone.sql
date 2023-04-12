-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 12, 2023 at 04:28 AM
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
-- Table structure for table `tbl_usercredentials`
--

CREATE TABLE `tbl_usercredentials` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `userName` varchar(244) NOT NULL,
  `passWord` varchar(244) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_usercredentials`
--

INSERT INTO `tbl_usercredentials` (`id`, `user_id`, `userName`, `passWord`) VALUES
(1, 1, 'username', 'password');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_userinfo`
--

CREATE TABLE `tbl_userinfo` (
  `user_id` int(11) NOT NULL,
  `firstName` varchar(244) NOT NULL,
  `lastName` varchar(244) NOT NULL,
  `email` varchar(244) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_userinfo`
--

INSERT INTO `tbl_userinfo` (`user_id`, `firstName`, `lastName`, `email`) VALUES
(1, 'fn', 'ln', 'email@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_useradmin`
--
ALTER TABLE `tbl_useradmin`
  ADD PRIMARY KEY (`adminID`);

--
-- Indexes for table `tbl_usercredentials`
--
ALTER TABLE `tbl_usercredentials`
  ADD PRIMARY KEY (`id`),
  ADD KEY `test` (`user_id`);

--
-- Indexes for table `tbl_userinfo`
--
ALTER TABLE `tbl_userinfo`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_useradmin`
--
ALTER TABLE `tbl_useradmin`
  MODIFY `adminID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_usercredentials`
--
ALTER TABLE `tbl_usercredentials`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_userinfo`
--
ALTER TABLE `tbl_userinfo`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_usercredentials`
--
ALTER TABLE `tbl_usercredentials`
  ADD CONSTRAINT `test` FOREIGN KEY (`user_id`) REFERENCES `tbl_userinfo` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
