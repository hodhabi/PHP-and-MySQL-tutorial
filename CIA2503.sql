-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 15, 2016 at 08:56 PM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `CIA2503`
--

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE IF NOT EXISTS `course` (
  `code` varchar(8) NOT NULL,
  `Course title` varchar(50) NOT NULL,
  `credits` int(2) NOT NULL,
  `Status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `crn`
--

CREATE TABLE IF NOT EXISTS `crn` (
  `id` int(11) NOT NULL,
  `crn` int(11) NOT NULL,
  `coursecode` varchar(8) NOT NULL,
  `studentid` varchar(11) NOT NULL,
  `marks` int(3) DEFAULT NULL,
  `grade` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `MyGuests`
--

CREATE TABLE IF NOT EXISTS `MyGuests` (
  `id` int(6) unsigned NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `reg_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `filename` varchar(50) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=79 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `MyGuests`
--

INSERT INTO `MyGuests` (`id`, `firstname`, `lastname`, `email`, `reg_date`, `filename`) VALUES
(1, 'Khalifa', 'Al Khyeli', 'h00280697@hct.ac.ae', '0000-00-00 00:00:00', NULL),
(2, 'Sultan', 'Almansoori', 'h00254242@hct.ac.ae', '2016-09-15 12:40:24', 'image.png'),
(3, 'Ali', 'Odhabi', 'z', '2016-09-05 12:19:35', NULL),
(4, 'Saeed', 'Odhabi', 'z', '2016-09-12 06:35:37', NULL),
(5, 'Hassan', 'Mohammed', 'z', '2016-09-05 12:14:52', NULL),
(6, 'x', 'y', 'z', '0000-00-00 00:00:00', NULL),
(7, 'x', 'y', 'z', '0000-00-00 00:00:00', NULL),
(8, 'x', 'y', 'z', '0000-00-00 00:00:00', NULL),
(9, 'x', 'y', 'z', '0000-00-00 00:00:00', NULL),
(10, 'x', 'y', 'z', '0000-00-00 00:00:00', NULL),
(11, 'x', 'y', 'z', '0000-00-00 00:00:00', NULL),
(12, 'x', 'y', 'z', '0000-00-00 00:00:00', NULL),
(13, 'x', 'y', 'z', '0000-00-00 00:00:00', NULL),
(14, 'x', 'y', 'z', '0000-00-00 00:00:00', NULL),
(15, 'x', 'y', 'z', '0000-00-00 00:00:00', NULL),
(16, 'x', 'y', 'z', '0000-00-00 00:00:00', NULL),
(17, 'x', 'y', 'z', '0000-00-00 00:00:00', NULL),
(18, 'x', 'y', 'z', '0000-00-00 00:00:00', NULL),
(19, 'x', 'y', 'z', '0000-00-00 00:00:00', NULL),
(20, 'x', 'y', 'z', '0000-00-00 00:00:00', NULL),
(21, 'x', 'y', 'z', '0000-00-00 00:00:00', NULL),
(22, 'x', 'y', 'z', '0000-00-00 00:00:00', NULL),
(23, 'x', 'y', 'z', '0000-00-00 00:00:00', NULL),
(24, 'x', 'y', 'z', '0000-00-00 00:00:00', NULL),
(25, 'x', 'y', 'z', '0000-00-00 00:00:00', NULL),
(26, 'x', 'y', 'z', '0000-00-00 00:00:00', NULL),
(27, 'x', 'y', 'z', '0000-00-00 00:00:00', NULL),
(28, 'x', 'y', 'z', '0000-00-00 00:00:00', NULL),
(29, 'x', 'y', 'z', '0000-00-00 00:00:00', NULL),
(30, 'x', 'y', 'z', '0000-00-00 00:00:00', NULL),
(31, 'x', 'y', 'z', '0000-00-00 00:00:00', NULL),
(32, 'x', 'y', 'z', '0000-00-00 00:00:00', NULL),
(33, 'x', 'y', 'z', '0000-00-00 00:00:00', NULL),
(34, 'x', 'y', 'z', '0000-00-00 00:00:00', NULL),
(35, 'x', 'y', 'z', '0000-00-00 00:00:00', NULL),
(36, 'x', 'y', 'z', '0000-00-00 00:00:00', NULL),
(37, 'x', 'y', 'z', '0000-00-00 00:00:00', NULL),
(38, 'x', 'y', 'z', '0000-00-00 00:00:00', NULL),
(39, 'x', 'y', 'z', '0000-00-00 00:00:00', NULL),
(40, 'x', 'y', 'z', '0000-00-00 00:00:00', NULL),
(41, 'x', 'y', 'z', '0000-00-00 00:00:00', NULL),
(42, 'x', 'y', 'z', '0000-00-00 00:00:00', NULL),
(43, 'x', 'y', 'z', '0000-00-00 00:00:00', NULL),
(44, 'x', 'y', 'z', '0000-00-00 00:00:00', NULL),
(45, 'KKK', 'yty', 'z', '2016-09-04 18:01:56', NULL),
(46, 'x', 'y', 'z', '0000-00-00 00:00:00', NULL),
(47, 'x', 'y', 'z', '0000-00-00 00:00:00', NULL),
(48, 'x', 'y', 'z', '0000-00-00 00:00:00', NULL),
(49, 'x', 'y', 'z', '0000-00-00 00:00:00', NULL),
(50, 'x', 'y', 'z', '0000-00-00 00:00:00', NULL),
(51, 'x', 'y', 'z', '0000-00-00 00:00:00', NULL),
(52, 'x', 'y', 'z', '0000-00-00 00:00:00', NULL),
(53, 'x', 'y', 'z', '0000-00-00 00:00:00', NULL),
(54, 'x', 'y', 'z', '0000-00-00 00:00:00', NULL),
(55, 'x', 'y', 'z', '0000-00-00 00:00:00', NULL),
(56, 'x', 'y', 'z', '0000-00-00 00:00:00', NULL),
(57, 'x', 'y', 'z', '0000-00-00 00:00:00', NULL),
(58, 'x', 'y', 'z', '0000-00-00 00:00:00', NULL),
(59, 'x', 'y', 'z', '0000-00-00 00:00:00', NULL),
(60, 'x', 'y', 'z', '0000-00-00 00:00:00', NULL),
(61, 'x', 'y', 'z', '0000-00-00 00:00:00', NULL),
(62, 'x', 'y', 'z', '0000-00-00 00:00:00', NULL),
(63, 'x', 'y', 'z', '0000-00-00 00:00:00', NULL),
(64, 'x', 'y', 'z', '0000-00-00 00:00:00', NULL),
(65, 'x', 'y', 'z', '0000-00-00 00:00:00', NULL),
(66, 'x', 'y', 'z', '0000-00-00 00:00:00', NULL),
(67, 'x', 'y', 'z', '0000-00-00 00:00:00', NULL),
(68, 'x', 'y', 'z', '0000-00-00 00:00:00', NULL),
(69, 'x', 'y', 'z', '0000-00-00 00:00:00', NULL),
(70, 'x', 'y', 'z', '0000-00-00 00:00:00', NULL),
(71, 'x', 'y', 'z', '0000-00-00 00:00:00', NULL),
(72, 'x', 'y', 'z', '0000-00-00 00:00:00', NULL),
(73, 'x', 'y', 'z', '0000-00-00 00:00:00', NULL),
(74, 'x', 'y', 'z', '0000-00-00 00:00:00', NULL),
(75, 'x', 'y', 'z', '0000-00-00 00:00:00', NULL),
(76, 'x', 'y', 'z', '0000-00-00 00:00:00', NULL),
(77, 'x', 'y', 'z', '0000-00-00 00:00:00', NULL),
(78, 'Yahya', 'Ali', 'z', '2016-09-12 06:43:04', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `id` varchar(11) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(14) NOT NULL,
  `password` varchar(15) NOT NULL,
  `photo` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`code`);

--
-- Indexes for table `crn`
--
ALTER TABLE `crn`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `MyGuests`
--
ALTER TABLE `MyGuests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `crn`
--
ALTER TABLE `crn`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `MyGuests`
--
ALTER TABLE `MyGuests`
  MODIFY `id` int(6) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=79;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
