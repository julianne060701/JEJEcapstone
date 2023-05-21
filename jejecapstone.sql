-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 21, 2023 at 09:04 AM
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
(1, 1, 1, '2023-04-27 18:30:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contactinfo`
--

CREATE TABLE `tbl_contactinfo` (
  `contact_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `address` varchar(244) NOT NULL,
  `barangay` varchar(244) NOT NULL,
  `city` varchar(244) NOT NULL,
  `zipcode` int(11) NOT NULL,
  `phoneNum` bigint(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_contactinfo`
--

INSERT INTO `tbl_contactinfo` (`contact_id`, `user_id`, `address`, `barangay`, `city`, `zipcode`, `phoneNum`) VALUES
(62, 141, '', '', '', 0, 12312312312),
(63, 142, 'jh', '', '', 0, 12312312312),
(64, 143, '', '', '', 0, 12312312312),
(65, 144, '', '', '', 0, 123123123122),
(66, 145, '', '', '', 0, 12312312312),
(67, 146, 'zz', '', '', 0, 9876543211),
(68, 147, 'admind', '', '', 0, 12312312312),
(69, 148, 'zaza', 'zaza', 'zaza', 0, 12312312312),
(70, 149, 'za', '', '', 1111, 12312312312),
(71, 150, 'azx', '', '', 1111, 12312312312),
(72, 151, 'yer', '', '', 11123, 12312312312),
(73, 152, 'yerr', '', '', 1234, 12312312312),
(74, 153, 'yeq', '', '', 3214, 12312312312),
(75, 154, '', '', '', 0, 0),
(76, 155, '', '', '', 0, 0),
(77, 156, '', '', '', 0, 0),
(78, 157, '', '', '', 0, 0),
(79, 158, '', '', '', 0, 0),
(80, 159, '', '', '', 0, 0),
(81, 160, 'tte', 'tte', 'tte', 1234, 12312312312),
(82, 161, 'client', 'client', 'client', 1234, 12312312312),
(83, 162, 'lawyer', 'lawyer', 'lawyer', 1111, 12312312312);

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
(118, 145, 'lk@gmail.com', '123'),
(119, 146, 'zz@gmail.com', '$2y$10$u7E1PfCG9QOFj2yoy6sL2OqlGQtmeTrn6OBija2pOrmIGlxGujSoC'),
(120, 147, 'admin@gmail.com', '$2y$10$p/XfDeU3SYRcBSbRZ2qsnep87y017IAwLDsHpLynXeB2TD6DlfPJS'),
(121, 148, 'zaza@gmail.com', '$2y$10$qgf5d3RBHEnye3R8LTDL6eCMoUgshWzGSyKk2gowEAqvs/0yEf3Ce'),
(122, 149, 'zaa@gmail.com', 'za'),
(123, 150, 'azx@gmail.com', 'azx'),
(124, 151, 'yer@gmail.com', '$2y$10$zZmuYW24KVezys9Zp1rIz.yvkpbTHQhjPLXoL/3LuvY2e9C.0LS/6'),
(125, 152, 'yerr@gmail.com', '$2y$10$Dhg/CmGlHjcjGynRc/22l.p6QIjxgJzOK7aMixgQ1NURqAmIH2Tiu'),
(126, 153, 'yeq@gmail.com', '$2y$10$Mygf0bpVY4sUZOfTpU7XgOy513DD9Rjv.Gy.Xuau311cWjRkJSKf6'),
(127, 154, '', '$2y$10$ev4gOziDbYbNiTdrOG3A8.Nw3E5HsYQdCm/oj5oxC5fa41eQClmja'),
(128, 155, '', '$2y$10$Qhcrq1fg1/t3/s9h08O0aux7.cJjyVnhOkgPgFpgBBvRBbD0SuJsi'),
(129, 156, '', '$2y$10$nY82Oo7h0uxQGJNZNzkYhedUCCQLKikcQEftmBVSfEwnIUi9rWhYG'),
(130, 157, '', '$2y$10$xbrAFvEdgfNL/o5qcMW1mOVYoLsRAQznZ3AocanJOtrSRPbysUMs.'),
(131, 158, '', '$2y$10$imHTunyDpK.n5n9jNeTbBeOievU/1whNPo7lrjgI7Q.SNOL09.26C'),
(132, 159, '', '$2y$10$Uif7Wh1k5tFdzUJK4pAK9utMP1BTM0L3rHWjGlUD6kh6hHjdFD.t6'),
(133, 160, 'tte@gmail.com', '$2y$10$VsUlU35UQK/xMUeDMGAXbuQzkYANvO0.5YSqONdcoJkwW2wyNudH2'),
(134, 161, 'client@gmail.com', '$2y$10$2QW97LLe32T.0LsScg4H9evcCvsfgZvpLBgLy31gJKjaTj8LiW.Iu'),
(135, 162, 'lawyer@gmail.com', '$2y$10$NtDFx8WzTbJO4il/1ZpFzevvkAViu2nPL7KLzXR7fN9.JVpYZYnju');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_images`
--

CREATE TABLE `tbl_images` (
  `images_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `id` text NOT NULL,
  `permit` text NOT NULL,
  `profile` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_images`
--

INSERT INTO `tbl_images` (`images_id`, `user_id`, `id`, `permit`, `profile`) VALUES
(24, 142, '', '', ''),
(25, 150, 'za.jpg', '', ''),
(26, 151, 'Untitled.png', 'za.jpg', ''),
(27, 152, 'pexels-johannes-plenio-3131634.jpg', 'spicyuuu1.jpg', ''),
(28, 153, 'spicyuuu1.jpg', 'spicyuuu.jpg', ''),
(29, 162, 'za.jpg', 'Untitled.png', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_lawyerinfo`
--

CREATE TABLE `tbl_lawyerinfo` (
  `lawyerinfo_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `specialty` varchar(244) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_lawyerinfo`
--

INSERT INTO `tbl_lawyerinfo` (`lawyerinfo_id`, `user_id`, `specialty`) VALUES
(14, 142, ''),
(15, 149, 'family'),
(16, 150, 'family'),
(17, 151, ''),
(18, 152, ''),
(19, 153, 'yeq'),
(20, 162, '');

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
  `gender` varchar(244) NOT NULL,
  `user_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_userinfo`
--

INSERT INTO `tbl_userinfo` (`userinfo_id`, `firstName`, `middlename`, `lastName`, `gender`, `user_status`) VALUES
(1, 'Jv', '', 'Burdo', '', 0),
(2, 'ryan', '', 'laroco', '', 0),
(3, 'admin', 'admin', 'admin', '', 0),
(4, 'secretary', 'secretary', 'secretary', '', 0),
(141, 'bobo', 'ka', 'sige', '', 1),
(142, 'jh', 'jh', 'jh', '', 1),
(143, 'first', 'name', 'last', '', 1),
(144, 'mk', 'mk', 'mk', '', 1),
(145, 'lk', 'lk', 'lk', '', 1),
(146, 'zz', 'zz', 'zz', '', 0),
(147, 'admin', 'admin', 'admin', '', 1),
(148, 'zaza', 'zaza', 'zaza', 'other', 1),
(149, 'za', 'za', 'za', 'male', 1),
(150, 'azx', 'azx', 'azx', 'female', 1),
(151, 'yer', 'yer', 'yer', 'male', 1),
(152, 'yerr', 'yerr', 'yerr', 'male', 1),
(153, 'yeq', 'yeq', 'yeq', 'female', 1),
(154, '', '', '', '', 1),
(155, '', '', '', '', 1),
(156, '', '', '', '', 1),
(157, '', '', '', '', 1),
(158, '', '', '', '', 1),
(159, '', '', '', '', 1),
(160, 'tte', 'tte', 'tte', 'female', 1),
(161, 'client', 'client', 'client', 'male', 1),
(162, 'lawyer', 'lawyer', 'lawyer', 'male', 1);

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
(116, 145, 'client'),
(117, 146, 'secretary'),
(118, 147, 'admin'),
(119, 148, 'client'),
(120, 149, 'lawyer'),
(121, 150, 'lawyer'),
(122, 151, 'lawyer'),
(123, 152, 'lawyer'),
(124, 153, 'lawyer'),
(125, 154, 'client'),
(126, 155, 'client'),
(127, 156, 'client'),
(128, 157, 'client'),
(129, 158, 'client'),
(130, 159, 'client'),
(131, 160, 'client'),
(132, 161, 'client'),
(133, 162, 'lawyer');

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
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;

--
-- AUTO_INCREMENT for table `tbl_cred`
--
ALTER TABLE `tbl_cred`
  MODIFY `usercred_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=136;

--
-- AUTO_INCREMENT for table `tbl_images`
--
ALTER TABLE `tbl_images`
  MODIFY `images_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `tbl_lawyerinfo`
--
ALTER TABLE `tbl_lawyerinfo`
  MODIFY `lawyerinfo_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

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
-- AUTO_INCREMENT for table `tbl_useradmin`
--
ALTER TABLE `tbl_useradmin`
  MODIFY `adminID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_userinfo`
--
ALTER TABLE `tbl_userinfo`
  MODIFY `userinfo_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=163;

--
-- AUTO_INCREMENT for table `tbl_usertype`
--
ALTER TABLE `tbl_usertype`
  MODIFY `usertype_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=134;

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
-- Constraints for table `tbl_usertype`
--
ALTER TABLE `tbl_usertype`
  ADD CONSTRAINT `tbl_usertype_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `tbl_userinfo` (`userinfo_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
