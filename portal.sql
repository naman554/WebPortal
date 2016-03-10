-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 09, 2016 at 06:55 PM
-- Server version: 5.6.25
-- PHP Version: 5.6.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portal`
--

-- --------------------------------------------------------

--
-- Table structure for table `newrequests`
--

CREATE TABLE IF NOT EXISTS `newrequests` (
  `id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` int(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `dob` varchar(255) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `address` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `pincode` int(10) NOT NULL,
  `registration_no` int(20) NOT NULL,
  `branch` varchar(255) NOT NULL,
  `semester` int(20) NOT NULL,
  `roll_no` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `newrequests`
--

INSERT INTO `newrequests` (`id`, `name`, `phone`, `email`, `dob`, `gender`, `address`, `country`, `state`, `city`, `pincode`, `registration_no`, `branch`, `semester`, `roll_no`, `username`, `password`) VALUES
(6, 'naman kumar soni', 2147483647, 'abc@gmail.com', '2016-03-08', 'male', 'jhgfhjghj', 'India', 'Uttar Pradesh', 'DURGAPUR', 713209, 20130235, 'IT', 1, '13/IT/20', 'naman', '');

-- --------------------------------------------------------

--
-- Table structure for table `registered`
--

CREATE TABLE IF NOT EXISTS `registered` (
  `id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` int(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `dob` varchar(255) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `address` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `pincode` int(10) NOT NULL,
  `registration_no` int(20) NOT NULL,
  `branch` varchar(20) NOT NULL,
  `semester` int(20) NOT NULL,
  `roll_no` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registered`
--

INSERT INTO `registered` (`id`, `name`, `phone`, `email`, `dob`, `gender`, `address`, `country`, `state`, `city`, `pincode`, `registration_no`, `branch`, `semester`, `roll_no`, `username`, `password`) VALUES
(4, 'naman kumar soni', 2147483647, 'abc@gmail.com', '2016-03-08', 'male', 'jhgfhjghj', 'India', 'Uttar Pradesh', 'DURGAPUR', 713209, 20130235, 'IT', 1, '13IT20', 'naman', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `newrequests`
--
ALTER TABLE `newrequests`
  ADD PRIMARY KEY (`id`,`email`,`registration_no`);

--
-- Indexes for table `registered`
--
ALTER TABLE `registered`
  ADD PRIMARY KEY (`id`,`email`,`registration_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `newrequests`
--
ALTER TABLE `newrequests`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `registered`
--
ALTER TABLE `registered`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
