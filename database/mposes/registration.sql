-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 05, 2021 at 07:33 AM
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

--
-- Indexes for dumped tables
--

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`u_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `u_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
