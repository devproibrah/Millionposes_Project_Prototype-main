-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 05, 2021 at 07:36 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mposes`
--

-- --------------------------------------------------------

--
-- Table structure for table `massege_reply`
--

CREATE TABLE `massege_reply` (
  `M_ID` int(11) NOT NULL,
  `reply_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `M_ID` int(100) NOT NULL,
  `message` varchar(500) DEFAULT NULL,
  `date` varchar(10) NOT NULL,
  `time` varchar(10) NOT NULL,
  `u_id` int(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`M_ID`, `message`, `date`, `time`, `u_id`) VALUES
(18, 'hhh', '2021/08/03', '11:31:02am', 28),
(23, 'hi', '2021/08/03', '01:19:13pm', 28),
(24, 'hi', '2021/08/03', '01:31:23pm', 28),
(25, 'hi', '2021/08/03', '01:33:29pm', 28),
(26, '', '2021/08/04', '07:35:15pm', 0),
(27, 'hi', '2021/08/04', '07:35:36pm', 0),
(28, '', '2021/08/04', '07:39:23pm', 0),
(29, 'hi', '2021/08/04', '07:39:49pm', 0),
(30, 'ngwomo', '2021/08/04', '08:05:16pm', 0);

-- --------------------------------------------------------

--
-- Table structure for table `podes_table`
--

CREATE TABLE `podes_table` (
  `pose_ID` int(255) NOT NULL,
  `pose` varchar(100) NOT NULL,
  `category` varchar(50) NOT NULL,
  `kind` varchar(20) NOT NULL,
  `describution` varchar(500) NOT NULL,
  `date` varchar(10) NOT NULL,
  `time` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `podes_table`
--

INSERT INTO `podes_table` (`pose_ID`, `pose`, `category`, `kind`, `describution`, `date`, `time`) VALUES
(14, 'm4.jpg', 'male_poses', 'real_photo', 'ghjjhg', '2021/08/03', '11:32:'),
(15, 'm5.jpg', 'male_poses', 'real_photo', '', '2021/08/03', '11:35:'),
(16, 'm6.jpg', 'male_poses', 'real_photo', 'sdfghjk', '2021/08/03', '11:44:'),
(17, '', 'female_poses', 'real_photo', 'g', '2021/08/05', '12:05:'),
(18, '', 'female_poses', 'real_photo', 'ghj', '2021/08/05', '12:27:'),
(19, '', 'group_selifie', 'drawn_photo', 'gggg', '2021/08/05', '12:33:');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `u_id` int(10) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `nationality` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `telephone` varchar(15) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `cpassword` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`u_id`, `fname`, `lname`, `gender`, `nationality`, `email`, `telephone`, `username`, `password`, `cpassword`) VALUES
(27, 'j', 'j', 'female', 'rwanda', 'bianca@gmal.com', '1234', 'kkk@gmil.com', '123', '123'),
(28, 'ibra', 'tuy', 'mele', 'Rwanda', 'ibrah@pos.com', '098765', 'ibrah@pos.com', '1234', '1234'),
(29, '', '', '', '', '', '', '', '', ''),
(30, '', '', '', '', 'k@h', '1234', '', '', ''),
(31, '', '', '', '', '', '', '', '', ''),
(32, 'sd', 'dd', 'female', 'rw', 'bi@gn.com', '123', 'bb@hh.com', '12345', '12345'),
(33, 'sd', 'dd', 'female', 'rw', 'bi@gn.com', '123', 'bb@hh.com', '1234', '1234'),
(34, 'sd', 'dd', 'female', 'rw', 'bi@gn.com', '123', 'bb@hh.com', '1234', '1234'),
(35, 'asssas', 'k', 'female', 'rwanda', 'bianca@gmal.com', '1234', 'bb@hh.com', '1234', '1234'),
(36, 'dfgh', 'k', 'female', 'hakjhk', 'bianca@gmal.com', '1234', 'bb@hh.com', '1234', '1234'),
(37, 'dfgh', 'k', 'female', 'hakjhk', 'bianca@gmal.com', '1234', 'bb@hh.com', '1234', '1234'),
(38, 'dfgh', 'bhhjh', 'female', 'rwanda', 'bianca@gmal.com', '1234', 'bbb@g.com', '1234', '1234'),
(39, '', '', '', '', '', '', '', '', ''),
(40, '', '', '', '', '', '', '', '', ''),
(41, '', '', '', '', '', '', '', '', ''),
(42, '', '', '', '', '', '', '', '', ''),
(43, '', '', '', '', '', '', '', '', ''),
(44, '', '', '', '', '', '', '', '', ''),
(45, '', '', '', '', '', '', '', '', ''),
(46, '', '', '', '', '', '', '', '', ''),
(47, '', '', '', '', '', '', '', '', ''),
(48, '', '', '', '', '', '', '', '', ''),
(49, '', '', '', '', '', '', '', '', ''),
(50, '', '', '', '', '', '', '', '', ''),
(51, '', '', '', '', '', '', '', '', ''),
(52, '', '', '', '', '', '', '', '', ''),
(53, 'jjd', 'udud', 'female', 'dueu', 'bianca@gmal.com', '123456', 'k@gmail.com', '12345', '12345'),
(54, 'jjd', 'udud', 'female', 'dueu', 'bianca@gmal.com', '123456', 'k@gmail.com', '12345', '12345'),
(55, '', '', '', '', '', '', '', '', ''),
(56, '', '', '', '', '', '', '', '', ''),
(57, 'kkk', 'jjj', 'female', 'rw', 'bianca@gmal.com', '1234', 's@pos.com', '1234', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `replys`
--

CREATE TABLE `replys` (
  `reply_ID` int(255) NOT NULL,
  `reply` varchar(500) NOT NULL,
  `date` date NOT NULL,
  `time` time(6) NOT NULL,
  `u_id` int(255) NOT NULL,
  `M_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `replys`
--

INSERT INTO `replys` (`reply_ID`, `reply`, `date`, `time`, `u_id`, `M_ID`) VALUES
(7, 'hhhh', '2021-08-05', '12:51:00.000000', 28, 18),
(8, 'hhhh', '2021-08-05', '12:52:20.000000', 28, 18);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `massege_reply`
--
ALTER TABLE `massege_reply`
  ADD UNIQUE KEY `M_ID` (`M_ID`),
  ADD UNIQUE KEY `reply_ID` (`reply_ID`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`M_ID`);

--
-- Indexes for table `podes_table`
--
ALTER TABLE `podes_table`
  ADD PRIMARY KEY (`pose_ID`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`u_id`);

--
-- Indexes for table `replys`
--
ALTER TABLE `replys`
  ADD PRIMARY KEY (`reply_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `M_ID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `podes_table`
--
ALTER TABLE `podes_table`
  MODIFY `pose_ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `u_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `replys`
--
ALTER TABLE `replys`
  MODIFY `reply_ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
