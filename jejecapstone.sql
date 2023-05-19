-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 19, 2023 at 04:42 PM
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
  `appointment_timendate` datetime NOT NULL,
  `appointment_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_appointment`
--

INSERT INTO `tbl_appointment` (`appointment_id`, `user_id`, `office_id`, `appointment_timendate`, `appointment_status`) VALUES
(1, 1, 1, '2023-04-27 18:30:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contactinfo`
--

CREATE TABLE `tbl_contactinfo` (
  `contact_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `address` varchar(244) NOT NULL,
  `phoneNum` bigint(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_contactinfo`
--

INSERT INTO `tbl_contactinfo` (`contact_id`, `user_id`, `address`, `phoneNum`) VALUES
(62, 141, '', 12312312312),
(63, 142, 'jh', 12312312312),
(64, 143, '', 12312312312),
(65, 144, '', 123123123122),
(66, 145, '', 12312312312);

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
(107, 3, 'admin', 'admin'),
(111, 4, 'secretary1@gmail.com', 'secretary'),
(114, 141, 'boboka@gmail.com', '$2y$10$lJYl2Y3ez.EnXcNSzO9P3.lwtBsUiEfMeHEJd2DTi7VHbF4YvgQS2'),
(115, 142, 'jh@gmail.com', 'jh'),
(116, 143, 'firstname@gmail.com', '$2y$10$lTjeQih4I9qa1NbEiz.n2uHT6qbknzhjd5hCTdj1yL/Mbvig7zU7.'),
(117, 144, 'mk@gmail.com', '$2y$10$MPLLUq7HG8sbJhHAX4EfoeLNPNdhVaSzBDvrjueR1vYNV2d8Hbqce'),
(118, 145, 'lk@gmail.com', '123');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_images`
--

CREATE TABLE `tbl_images` (
  `images_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(11) NOT NULL,
  `id` text NOT NULL,
  `permit` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_images`
--

INSERT INTO `tbl_images` (`images_id`, `user_id`, `name`, `id`, `permit`) VALUES
(24, 142, '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_lawyerinfo`
--

CREATE TABLE `tbl_lawyerinfo` (
  `lawyerinfo_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `institute_name` varchar(244) NOT NULL,
  `degree` varchar(244) NOT NULL,
  `passing_year` varchar(244) NOT NULL,
  `specialty` varchar(244) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_lawyerinfo`
--

INSERT INTO `tbl_lawyerinfo` (`lawyerinfo_id`, `user_id`, `institute_name`, `degree`, `passing_year`, `specialty`) VALUES
(14, 142, 'jh', 'jh', 'jh', 'jh');

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
(185, 185, 'burdosad', 9876543211),
(186, 186, 'sad', 9876543211),
(187, 187, 'sadasd', 9876543211);

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
(185, 'Burdo', 'burdosad@gmail.com', 1),
(186, 'Burdo', 'burdosaad@gmail.com', 1),
(187, 'Burdo', 'asdsad@gmail.com', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_status`
--

CREATE TABLE `tbl_status` (
  `status_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_status`
--

INSERT INTO `tbl_status` (`status_id`, `user_id`, `status`) VALUES
(36, 141, 0),
(37, 142, 0),
(38, 143, 0),
(39, 144, 0),
(40, 145, 0);

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
  `user_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_userinfo`
--

INSERT INTO `tbl_userinfo` (`userinfo_id`, `firstName`, `middlename`, `lastName`, `user_status`) VALUES
(1, 'Jv', '', 'Burdo', 0),
(2, 'ryan', '', 'laroco', 0),
(3, 'admin', 'admin', 'admin', 0),
(4, 'secretary', 'secretary', 'secretary', 0),
(141, 'bobo', 'ka', 'sige', 0),
(142, 'jh', 'jh', 'jh', 1),
(143, 'first', 'name', 'last', 0),
(144, 'mk', 'mk', 'mk', 0),
(145, 'lk', 'lk', 'lk', 0);

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
(106, 3, 'admin'),
(109, 4, 'secretary'),
(112, 141, 'client'),
(113, 142, 'lawyer'),
(114, 143, 'client'),
(115, 144, 'client'),
(116, 145, 'client');

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
-- Indexes for table `tbl_images`
--
ALTER TABLE `tbl_images`
  ADD PRIMARY KEY (`images_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `tbl_lawyerinfo`
--
ALTER TABLE `tbl_lawyerinfo`
  ADD PRIMARY KEY (`lawyerinfo_id`),
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
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `tbl_cred`
--
ALTER TABLE `tbl_cred`
  MODIFY `usercred_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=119;

--
-- AUTO_INCREMENT for table `tbl_images`
--
ALTER TABLE `tbl_images`
  MODIFY `images_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `tbl_lawyerinfo`
--
ALTER TABLE `tbl_lawyerinfo`
  MODIFY `lawyerinfo_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tbl_officecred`
--
ALTER TABLE `tbl_officecred`
  MODIFY `office_credid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=188;

--
-- AUTO_INCREMENT for table `tbl_officeinfo`
--
ALTER TABLE `tbl_officeinfo`
  MODIFY `office_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=188;

--
-- AUTO_INCREMENT for table `tbl_status`
--
ALTER TABLE `tbl_status`
  MODIFY `status_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `tbl_useradmin`
--
ALTER TABLE `tbl_useradmin`
  MODIFY `adminID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_userinfo`
--
ALTER TABLE `tbl_userinfo`
  MODIFY `userinfo_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=146;

--
-- AUTO_INCREMENT for table `tbl_usertype`
--
ALTER TABLE `tbl_usertype`
  MODIFY `usertype_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=117;

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
-- Constraints for table `tbl_images`
--
ALTER TABLE `tbl_images`
  ADD CONSTRAINT `tbl_images_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `tbl_userinfo` (`userinfo_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_lawyerinfo`
--
ALTER TABLE `tbl_lawyerinfo`
  ADD CONSTRAINT `tbl_lawyerinfo_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `tbl_userinfo` (`userinfo_id`) ON DELETE CASCADE ON UPDATE CASCADE;

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
