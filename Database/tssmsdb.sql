-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 08, 2019 at 05:09 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tssmsdb`
--
CREATE DATABASE IF NOT EXISTS `tssmsdb` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `tssmsdb`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `name` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`name`, `password`) VALUES
('admin', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `application`
--

CREATE TABLE `application` (
  `id` int(100) NOT NULL,
  `sname` text NOT NULL,
  `fname` text NOT NULL,
  `app_id` text NOT NULL,
  `mail` text NOT NULL,
  `dob` text NOT NULL,
  `gender` text NOT NULL,
  `school` text NOT NULL,
  `dept` text NOT NULL,
  `level` text NOT NULL,
  `cgpa` text NOT NULL,
  `scholarship` text NOT NULL,
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `application`
--

INSERT INTO `application` (`id`, `sname`, `fname`, `app_id`, `mail`, `dob`, `gender`, `school`, `dept`, `level`, `cgpa`, `scholarship`, `status`) VALUES
(1, 'Kefas', 'Davidson', 'TSSB|01', 'davidson@gmail.com', '2019-08-13', 'Male', 'Kwararafa University Wukari', 'Computer Science', '300 level', '3.78', 'Scholarship for Post-Graduate Study', 'Approved'),
(2, 'James', 'Alison', 'TSSB|02', 'alison@gmail.com', '2019-09-07', 'Male', 'Taraba State University, Jalingo', 'Chemistry', '200 Level', '3.50', 'Fully Founded Genius Scholarship ', 'Pedding');

-- --------------------------------------------------------

--
-- Table structure for table `bankdetails`
--

CREATE TABLE `bankdetails` (
  `id` int(11) NOT NULL,
  `acctName` text NOT NULL,
  `acctNumber` text NOT NULL,
  `bankName` text NOT NULL,
  `acctType` text NOT NULL,
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bankdetails`
--

INSERT INTO `bankdetails` (`id`, `acctName`, `acctNumber`, `bankName`, `acctType`, `status`) VALUES
(1, 'Kefas Davidson', '2067767997', 'Zenith Bank', 'savings', 'Not paid');

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE `notification` (
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notification`
--

INSERT INTO `notification` (`message`) VALUES
('Your application for Scholarship for Post-Graduate Study has been approved.');

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `email` text NOT NULL,
  `gender` text NOT NULL,
  `school` text NOT NULL,
  `department` text NOT NULL,
  `faculty1` text NOT NULL,
  `matricNo` text NOT NULL,
  `level` text NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`email`, `gender`, `school`, `department`, `faculty1`, `matricNo`, `level`, `created`) VALUES
('scot@gmail.com', 'Male', 'Kwararafa University Wukari', 'Biochemistry', 'Pure and Applied Sciences', 'Kuw|CSC|2019', '300 level', '2019-08-07 07:44:54'),
('alison@gmail.com', 'Male', 'Federal University Wukari', 'Computer Science', 'Pure and Applied Sciences', 'UR201900267', '400 level', '2019-08-07 07:50:53');

-- --------------------------------------------------------

--
-- Table structure for table `scholarship`
--

CREATE TABLE `scholarship` (
  `id` int(11) NOT NULL,
  `sch_id` varchar(50) NOT NULL,
  `schName` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `schAmount` varchar(50) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `scholarship`
--

INSERT INTO `scholarship` (`id`, `sch_id`, `schName`, `status`, `schAmount`, `created`) VALUES
(2, 'TSSB|002', 'Scholarship for Post-Graduate Study', 'Ongoing', 'N200,000', '2019-08-09 15:35:02'),
(3, 'TSSB|002', 'Fully Founded Genius Scholarship ', 'Ongoing', 'N100,000', '2019-08-09 20:21:43');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(15) NOT NULL,
  `last_name` varchar(15) NOT NULL,
  `mail` text NOT NULL,
  `password` text NOT NULL,
  `dob` text NOT NULL,
  `lga` text NOT NULL,
  `state` text NOT NULL,
  `school` text NOT NULL,
  `dept` text NOT NULL,
  `level` text NOT NULL,
  `img` text NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `mail`, `password`, `dob`, `lga`, `state`, `school`, `dept`, `level`, `img`, `created`) VALUES
(17, 'Davidson', 'Kefas', 'davidson@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '2019-08-13', 'Wukari', 'Taraba', '', 'Computer Science', '300 level', '2491831565725690.jpg', '2019-08-13 19:48:10'),
(20, 'Alison', 'Terry', 'alison@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '2019-09-25', 'Jalingo', 'Taraba', 'Kwararafa University Wukari', 'Computer Science', '400 level', '7467711569453457.jpg', '2019-09-25 23:17:37');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `application`
--
ALTER TABLE `application`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bankdetails`
--
ALTER TABLE `bankdetails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `scholarship`
--
ALTER TABLE `scholarship`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `application`
--
ALTER TABLE `application`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `bankdetails`
--
ALTER TABLE `bankdetails`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `scholarship`
--
ALTER TABLE `scholarship`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
