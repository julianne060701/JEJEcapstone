-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 11, 2023 at 08:14 AM
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
-- Table structure for table `tbl_appointment`
--

CREATE TABLE `tbl_appointment` (
  `appointment_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `office_id` int(11) NOT NULL,
  `appointment_timendate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_appointment`
--

INSERT INTO `tbl_appointment` (`appointment_id`, `user_id`, `office_id`, `appointment_timendate`) VALUES
(1, 1, 1, '2023-04-27 18:30:00'),
(2, 19, 2, '2023-05-01 09:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cred`
--

CREATE TABLE `tbl_cred` (
  `usercred_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `email` varchar(244) NOT NULL,
  `password` varchar(244) NOT NULL,
  `otp` text NOT NULL,
  `email_verified_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_cred`
--

INSERT INTO `tbl_cred` (`usercred_id`, `user_id`, `email`, `password`, `otp`, `email_verified_at`) VALUES
(1, 1, 'jvburdo@gmail.com', '123123', '', NULL),
(2, 2, 'ryanlaroco@gmail.com', '123', '', NULL),
(7, 10, 'first@gmail.com', '123', '', NULL),
(8, 12, '', '', '', NULL),
(9, 14, 'testtest1@gmail.com', '123', '', NULL),
(10, 16, 'email11@gmail.com', '123', '', NULL),
(11, 19, 'q23e@gmail.com', '123', '', NULL),
(12, 20, 'knivesout163@gmail.com', '123', '', NULL),
(13, 21, 'cocacola@gmail.com', '123', '', NULL),
(14, 22, '', '', '', NULL),
(15, 23, '', '', '', NULL),
(16, 24, 'ju@gmail.com', '123', '', NULL),
(17, 25, 'jjj@gmail.com', '$2y$10$zAlxP4Kj4O0nIFy5gbqaI.rVYCkcFdbccxGzQqdxItjK1u1y5PMwq', '123456', NULL),
(18, 26, 'jdm@gmail.com', '$2y$10$iLpgxsZ8ZEXkd736l7Y2BuZd8N.CeXvVAfMN5VJABXY7UEFfBJHOe', '', NULL),
(19, 27, 'qwe@gmail.com', '$2y$10$VlnSqz6Oi1rgfbwLEQEM5.wP4uz0ReiDg5auKJxKXCV6Iz8TiKMza', '730325', NULL),
(27, 34, 'elmerkhalifa7@gmail.com', '$2y$10$yse3ubDFdIM1uI3umCEcO.8/J4wyb218PEI5Cqz.aGpKt1k2Fg4YC', '554262', NULL),
(28, 35, 'elmerkhalifa9@gmail.com', '$2y$10$6BwywwWItbzGEbkf6iYVXeHlauStCKU7X5vBsOapXpGAcPLNsscMu', '240488', NULL),
(29, 36, 'elmerkhalifa9@gmail.com', '$2y$10$4XK3kcei5QN9RKjvufwhjuG5FzLQezZzIwbTSHlDHMyj9ecBNNZpS', '995412', NULL),
(32, 39, 'jvburdo@gmail.com', '$2y$10$7FTkgmj3BYdxIjgWbuTpa.K9zzk47voMVyZSoPxtRIb4Xf0v3.pZK', '923023', NULL),
(37, 44, 'mynftacc269@gmail.com', '$2y$10$nEBJEAXfnlKlmze4G.I7vOPW3HIrU3HUVu/kUpAqUMVvPfMQHp5Fm', '326143', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_officecred`
--

CREATE TABLE `tbl_officecred` (
  `office_credid` int(11) NOT NULL,
  `office_id` int(11) NOT NULL,
  `office_address` varchar(244) NOT NULL,
  `office_contact` bigint(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_officecred`
--

INSERT INTO `tbl_officecred` (`office_credid`, `office_id`, `office_address`, `office_contact`) VALUES
(1, 1, 'gensan', 12312312312),
(2, 2, 'Conel', 9876543211),
(3, 3, 'test address', 12312312312),
(4, 4, 'conel gensan', 9081234567);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_officeinfo`
--

CREATE TABLE `tbl_officeinfo` (
  `office_id` int(11) NOT NULL,
  `office_name` varchar(244) NOT NULL,
  `office_email` varchar(244) NOT NULL,
  `office_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_officeinfo`
--

INSERT INTO `tbl_officeinfo` (`office_id`, `office_name`, `office_email`, `office_status`) VALUES
(1, 'Jv Lawfirm', 'aslkdjw@gmail.com', 1),
(2, 'Burdo', 'ryancutie@gmail.com', 1),
(3, 'test', 'test@gmail.com', 1),
(4, 'Burdo Law', 'burdolaw@gmail.com', 1);

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
-- Table structure for table `tbl_userinfo`
--

CREATE TABLE `tbl_userinfo` (
  `userinfo_id` int(11) NOT NULL,
  `firstName` varchar(244) NOT NULL,
  `middlename` varchar(244) NOT NULL,
  `lastName` varchar(244) NOT NULL,
  `phoneNum` bigint(11) NOT NULL,
  `address` varchar(244) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_userinfo`
--

INSERT INTO `tbl_userinfo` (`userinfo_id`, `firstName`, `middlename`, `lastName`, `phoneNum`, `address`) VALUES
(1, 'Jv', '', 'Burdo', 9876256341, 'appong genenral santos city'),
(2, 'ryan', '', 'laroco', 9231562341, 'conel general santos city'),
(9, 'firstname', '', 'lastname', 123, 'general santos city'),
(10, 'firstname', '', 'lastname', 123, 'general santos city'),
(11, '', '', '', 0, ''),
(12, '', '', '', 0, ''),
(13, 'test', '', 'test1', 872136, 'gensan'),
(14, 'test', '', 'test1', 872136, 'gensan'),
(15, 'firstname1', '', 'lastname1', 123123, 'gensan'),
(16, 'firstname1', '', 'lastname1', 123123, 'gensan'),
(17, 'firstname11', '', 'lastname11', 123123, 'general santos city'),
(18, 'firstname11', '', 'lastname11', 123123, 'general santos city'),
(19, 'firstname11', '', 'lastname1', 123, 'general santos city'),
(20, 'abys', '', 'mal', 12312312312, 'knivesout@gmail.com'),
(21, 'coca', '', 'cola', 12312312312, 'cocacola'),
(22, '', '', '', 0, ''),
(23, '', '', '', 0, ''),
(24, 'ju', 'aa', 'awd', 0, ''),
(25, 'j', 'j', 'j', 9871234561, ''),
(26, 'j', 'd', 'm', 9876787812, ''),
(27, 'awd', 'awd', 'awd', 9084082735, ''),
(28, 'j', 'd', 'm', 9084082735, ''),
(29, 'test', 'test', 'test', 9084082735, ''),
(30, 'qwe', 'qwe', 'qwe', 9084082735, ''),
(31, 'k', 'l', 'm', 9084082735, ''),
(32, 'k', 'l', 'm', 9084082735, ''),
(33, 'a', 'a', 'a', 9084082735, ''),
(34, 'awd', 'awd', 'awd', 9084082735, ''),
(35, 'firstname', 'd', 'lastname', 9084082735, ''),
(36, 'test', 'test', 'test', 9084082735, ''),
(37, 'awd', 'awd', 'awd', 9084082735, ''),
(38, 'firstname', 'a', 'awd', 9084082735, ''),
(39, 'awd', 'awd', 'awd', 9084082735, ''),
(40, 'awd', 'awd', 'awd', 9084082735, ''),
(41, 'firstname', 'awd', 'lastname', 9084082735, ''),
(42, 'awd', 'awd', 'awd', 9084082735, ''),
(43, 'firstname', 'awd', 'awd', 9084082735, ''),
(44, 'j', 'd', 'm', 9084082735, '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_usertype`
--

CREATE TABLE `tbl_usertype` (
  `usertype_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `user_type` varchar(99) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_usertype`
--

INSERT INTO `tbl_usertype` (`usertype_id`, `user_id`, `user_type`) VALUES
(1, 1, 'client'),
(2, 2, 'lawyer'),
(3, 9, 'client'),
(4, 10, 'lawyer'),
(5, 15, 'client'),
(6, 16, 'lawyer'),
(7, 20, 'client'),
(8, 21, 'client'),
(9, 22, 'client'),
(10, 23, 'client'),
(11, 24, 'client'),
(12, 25, 'client'),
(13, 26, 'client'),
(14, 27, 'client'),
(15, 28, 'client'),
(16, 29, 'client'),
(17, 30, 'client'),
(18, 32, 'client'),
(19, 33, 'client'),
(20, 34, 'client'),
(21, 35, 'client'),
(22, 36, 'client'),
(23, 37, 'client'),
(24, 38, 'client'),
(25, 39, 'client'),
(26, 40, 'client'),
(27, 41, 'client'),
(28, 42, 'client'),
(29, 43, 'client'),
(30, 44, 'client');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_appointment`
--
ALTER TABLE `tbl_appointment`
  ADD PRIMARY KEY (`appointment_id`),
  ADD KEY `office_id` (`office_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `tbl_cred`
--
ALTER TABLE `tbl_cred`
  ADD PRIMARY KEY (`usercred_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `tbl_officecred`
--
ALTER TABLE `tbl_officecred`
  ADD PRIMARY KEY (`office_credid`),
  ADD KEY `office_id` (`office_id`);

--
-- Indexes for table `tbl_officeinfo`
--
ALTER TABLE `tbl_officeinfo`
  ADD PRIMARY KEY (`office_id`);

--
-- Indexes for table `tbl_useradmin`
--
ALTER TABLE `tbl_useradmin`
  ADD PRIMARY KEY (`adminID`);

--
-- Indexes for table `tbl_userinfo`
--
ALTER TABLE `tbl_userinfo`
  ADD PRIMARY KEY (`userinfo_id`);

--
-- Indexes for table `tbl_usertype`
--
ALTER TABLE `tbl_usertype`
  ADD PRIMARY KEY (`usertype_id`),
  ADD KEY `user_id` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_appointment`
--
ALTER TABLE `tbl_appointment`
  MODIFY `appointment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_cred`
--
ALTER TABLE `tbl_cred`
  MODIFY `usercred_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `tbl_officecred`
--
ALTER TABLE `tbl_officecred`
  MODIFY `office_credid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=185;

--
-- AUTO_INCREMENT for table `tbl_officeinfo`
--
ALTER TABLE `tbl_officeinfo`
  MODIFY `office_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=185;

--
-- AUTO_INCREMENT for table `tbl_useradmin`
--
ALTER TABLE `tbl_useradmin`
  MODIFY `adminID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_userinfo`
--
ALTER TABLE `tbl_userinfo`
  MODIFY `userinfo_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `tbl_usertype`
--
ALTER TABLE `tbl_usertype`
  MODIFY `usertype_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_appointment`
--
ALTER TABLE `tbl_appointment`
  ADD CONSTRAINT `tbl_appointment_ibfk_1` FOREIGN KEY (`office_id`) REFERENCES `tbl_officeinfo` (`office_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_appointment_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `tbl_userinfo` (`userinfo_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_cred`
--
ALTER TABLE `tbl_cred`
  ADD CONSTRAINT `tbl_cred_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `tbl_userinfo` (`userinfo_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_officecred`
--
ALTER TABLE `tbl_officecred`
  ADD CONSTRAINT `tbl_officecred_ibfk_1` FOREIGN KEY (`office_id`) REFERENCES `tbl_officeinfo` (`office_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_usertype`
--
ALTER TABLE `tbl_usertype`
  ADD CONSTRAINT `tbl_usertype_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `tbl_userinfo` (`userinfo_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
