-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 12, 2023 at 05:48 AM
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
(1, 1, 1, '2023-04-27 18:30:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contactinfo`
--

CREATE TABLE `tbl_contactinfo` (
  `contact_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `address` varchar(244) NOT NULL,
  `phoneNum` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_contactinfo`
--

INSERT INTO `tbl_contactinfo` (`contact_id`, `user_id`, `address`, `phoneNum`) VALUES
(2, 50, '0', 2147483647),
(3, 51, '0', 2147483647),
(4, 53, '0', 2147483647),
(5, 54, '0', 2147483647),
(6, 55, '0', 2147483647),
(7, 56, '0', 2147483647),
(8, 57, '0', 2147483647),
(9, 58, 'qq', 2147483647);

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
(43, 50, 'fs@gmail.com', '$2y$10$k8jUDqSbGtf52oEhvrKso.F8QkFsnCcLa7LUWWZ51YcLAzCDIrmtu'),
(44, 51, 'aa@gmail.com', '$2y$10$xY/iDoPltnMWJ5.YKlKcbOBU6bGPuQr92bvYgWUdcFkRKYh9czEUG'),
(45, 53, 'asd@gmail.com', '$2y$10$3sePHDhoVOeOnjDvl0sjEuN97b7iQ6.6t8FveiUv6iwAfDx3Vu/xq'),
(46, 54, 'fs@gmail.com', '$2y$10$jlVWBVh7v96svte3H9lB5.y15LxzIamjXLrV1CC9/P01cU69x07QS'),
(47, 55, 'ffsaa@gmail.com', '$2y$10$HAmhJ2gIG2DxTlq/bf1GBeHH8.STM/6hHF6FaBZO75iuiKE09p3Gu'),
(48, 56, 'admin@gmail.com', '$2y$10$L547kwqaIgWehzecc4hXq.lUA5t24qEB1nrwzPKtL2riFN.UDS6/2'),
(49, 57, 'sad@gmail.com', '$2y$10$Erap1OkQoViuIy62hfu2tON38zU2QMSI.QBjmt2FjqztYydkZoC.K'),
(50, 58, 'qq@gmail.com', '$2y$10$vfu4bDa45D5z/zthTU5Pue6G/2swtaJY.6FLa9PHFWoUUIP9GZxNS');

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
(4, 4, 'conel gensan', 9081234567),
(185, 185, 'burdosad', 9876543211);

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
(4, 'Burdo Law', 'burdolaw@gmail.com', 1),
(185, 'Burdo', 'burdosad@gmail.com', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_status`
--

CREATE TABLE `tbl_status` (
  `status_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `office_id` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_status`
--

INSERT INTO `tbl_status` (`status_id`, `user_id`, `office_id`, `status`) VALUES
(1, 58, 0, 0);

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
  `lastName` varchar(244) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_userinfo`
--

INSERT INTO `tbl_userinfo` (`userinfo_id`, `firstName`, `middlename`, `lastName`) VALUES
(1, 'Jv', '', 'Burdo'),
(2, 'ryan', '', 'laroco'),
(50, 'fs', 'fs', 'fs'),
(51, 'aa', 'aa', 'aa'),
(52, 'firstname', 'middle', 'last'),
(53, 'sad', 'asd', 'asd'),
(54, 'fs', 'fs', 'fs'),
(55, 'fs', 'ss', 'fsaaa'),
(56, 'admin', 'admin', 'admin'),
(57, 'sad', 'sad', 'sad'),
(58, 'qq', 'qq', 'qq');

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
(36, 50, 'secretary'),
(37, 51, 'secretary'),
(38, 53, 'secretary'),
(39, 54, 'secretary'),
(40, 55, 'secretary'),
(41, 56, 'secretary'),
(42, 57, 'secretary'),
(43, 58, 'secretary');

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
-- Indexes for table `tbl_contactinfo`
--
ALTER TABLE `tbl_contactinfo`
  ADD PRIMARY KEY (`contact_id`),
  ADD KEY `tbl_contactinfo_ibfk_1` (`user_id`);

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
-- Indexes for table `tbl_status`
--
ALTER TABLE `tbl_status`
  ADD PRIMARY KEY (`status_id`),
  ADD KEY `user_id` (`user_id`);

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
-- AUTO_INCREMENT for table `tbl_contactinfo`
--
ALTER TABLE `tbl_contactinfo`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_cred`
--
ALTER TABLE `tbl_cred`
  MODIFY `usercred_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `tbl_officecred`
--
ALTER TABLE `tbl_officecred`
  MODIFY `office_credid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=186;

--
-- AUTO_INCREMENT for table `tbl_officeinfo`
--
ALTER TABLE `tbl_officeinfo`
  MODIFY `office_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=186;

--
-- AUTO_INCREMENT for table `tbl_status`
--
ALTER TABLE `tbl_status`
  MODIFY `status_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_useradmin`
--
ALTER TABLE `tbl_useradmin`
  MODIFY `adminID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_userinfo`
--
ALTER TABLE `tbl_userinfo`
  MODIFY `userinfo_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `tbl_usertype`
--
ALTER TABLE `tbl_usertype`
  MODIFY `usertype_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

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
-- Constraints for table `tbl_contactinfo`
--
ALTER TABLE `tbl_contactinfo`
  ADD CONSTRAINT `tbl_contactinfo_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `tbl_userinfo` (`userinfo_id`) ON DELETE CASCADE ON UPDATE CASCADE;

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
-- Constraints for table `tbl_status`
--
ALTER TABLE `tbl_status`
  ADD CONSTRAINT `tbl_status_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `tbl_userinfo` (`userinfo_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_usertype`
--
ALTER TABLE `tbl_usertype`
  ADD CONSTRAINT `tbl_usertype_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `tbl_userinfo` (`userinfo_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
