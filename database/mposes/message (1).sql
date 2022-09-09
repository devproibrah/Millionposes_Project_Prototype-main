-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 05, 2021 at 07:34 AM
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

--
-- Indexes for dumped tables
--

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`M_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `M_ID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
