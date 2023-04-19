-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 19, 2023 at 09:30 AM
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
-- Table structure for table `tbl_cred`
--

CREATE TABLE `tbl_cred` (
  `usercred_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `email` varchar(244) NOT NULL,
  `password` varchar(244) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_cred`
--

INSERT INTO `tbl_cred` (`usercred_id`, `user_id`, `email`, `password`) VALUES
(1, 1, 'jvburdo@gmail.com', '123123'),
(2, 2, 'ryanlaroco@gmail.com', '123'),
(7, 10, 'first@gmail.com', '123'),
(8, 12, '', ''),
(9, 14, 'testtest1@gmail.com', '123'),
(10, 16, 'email11@gmail.com', '123'),
(11, 19, 'q23e@gmail.com', '123'),
(12, 20, 'knivesout163@gmail.com', '123');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_offices`
--

CREATE TABLE `tbl_offices` (
  `office_id` int(11) NOT NULL,
  `office_name` varchar(244) NOT NULL,
  `office_address` varchar(244) NOT NULL,
  `office_contact` bigint(11) NOT NULL,
  `office_email` varchar(244) NOT NULL,
  `office_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_offices`
--

INSERT INTO `tbl_offices` (`office_id`, `office_name`, `office_address`, `office_contact`, `office_email`, `office_status`) VALUES
(1, 'Jv Lawfirm', 'Apopong General Santos City', 9452345612, 'jvlawfirm@gmail.com', 0),
(2, 'ryanoffice', 'Conel General Santos City', 9452345611, 'ryanoffice@gmail.com', 0),
(3, 'neiloffice', 'Santol General Santos City', 9452342111, 'neiloffice@gmail.com', 0),
(4, 'Ryan Luspo Lawfirm', 'Conel Santol Genenral Santos City', 9234123567, 'ryanluspolawfirm@gmail.com', 0),
(5, 'testfirm', 'testfirm gensan', 12345678910, 'testfirm@gmail.com', 0);

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
  `lastName` varchar(244) NOT NULL,
  `phoneNum` bigint(11) NOT NULL,
  `address` varchar(244) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_userinfo`
--

INSERT INTO `tbl_userinfo` (`userinfo_id`, `firstName`, `lastName`, `phoneNum`, `address`) VALUES
(1, 'Jv', 'Burdo', 9876256341, 'appong genenral santos city'),
(2, 'ryan', 'laroco', 9231562341, 'conel general santos city'),
(9, 'firstname', 'lastname', 123, 'general santos city'),
(10, 'firstname', 'lastname', 123, 'general santos city'),
(11, '', '', 0, ''),
(12, '', '', 0, ''),
(13, 'test', 'test1', 872136, 'gensan'),
(14, 'test', 'test1', 872136, 'gensan'),
(15, 'firstname1', 'lastname1', 123123, 'gensan'),
(16, 'firstname1', 'lastname1', 123123, 'gensan'),
(17, 'firstname11', 'lastname11', 123123, 'general santos city'),
(18, 'firstname11', 'lastname11', 123123, 'general santos city'),
(19, 'firstname11', 'lastname1', 123, 'general santos city'),
(20, 'abys', 'mal', 12312312312, 'knivesout@gmail.com');

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
(7, 20, 'client');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_cred`
--
ALTER TABLE `tbl_cred`
  ADD PRIMARY KEY (`usercred_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `tbl_offices`
--
ALTER TABLE `tbl_offices`
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
-- AUTO_INCREMENT for table `tbl_cred`
--
ALTER TABLE `tbl_cred`
  MODIFY `usercred_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tbl_offices`
--
ALTER TABLE `tbl_offices`
  MODIFY `office_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_useradmin`
--
ALTER TABLE `tbl_useradmin`
  MODIFY `adminID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_userinfo`
--
ALTER TABLE `tbl_userinfo`
  MODIFY `userinfo_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `tbl_usertype`
--
ALTER TABLE `tbl_usertype`
  MODIFY `usertype_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_cred`
--
ALTER TABLE `tbl_cred`
  ADD CONSTRAINT `tbl_cred_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `tbl_userinfo` (`userinfo_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_usertype`
--
ALTER TABLE `tbl_usertype`
  ADD CONSTRAINT `tbl_usertype_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `tbl_userinfo` (`userinfo_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
