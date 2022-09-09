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

--
-- Indexes for dumped tables
--

--
-- Indexes for table `podes_table`
--
ALTER TABLE `podes_table`
  ADD PRIMARY KEY (`pose_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `podes_table`
--
ALTER TABLE `podes_table`
  MODIFY `pose_ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
