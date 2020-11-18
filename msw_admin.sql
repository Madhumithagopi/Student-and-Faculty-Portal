-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 09, 2019 at 08:14 AM
-- Server version: 5.7.17-log
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `msw_admin`
--

-- --------------------------------------------------------

--
-- Table structure for table `guest_lectures`
--

CREATE TABLE `guest_lectures` (
  `g_id` int(11) NOT NULL,
  `title_of_lecture` varchar(50) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `res_id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `guest_lectures`
--

INSERT INTO `guest_lectures` (`g_id`, `title_of_lecture`, `date`, `res_id`) VALUES
(1, 'Women Empowerment', '2019-03-13', 7),
(2, 'Human Rights Defender', '2019-03-20', 500),
(9, 'mahdu', '2019-04-17', 1);

-- --------------------------------------------------------

--
-- Table structure for table `organisation_details`
--

CREATE TABLE `organisation_details` (
  `s.no` int(11) NOT NULL,
  `org_id` int(20) NOT NULL,
  `org_name` varchar(50) DEFAULT NULL,
  `org_category` varchar(50) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `organisation_details`
--

INSERT INTO `organisation_details` (`s.no`, `org_id`, `org_name`, `org_category`, `address`) VALUES
(14, 1001, 'Mother Tersa Trust', 'NGO', 'Simmakal'),
(15, 1002, 'Dhan Foundation', 'NGO', 'Anna Nagar,Chennai'),
(16, 1003, 'YMCA Foundation', 'HRM', 'K.K.Nagar'),
(19, 1004, 'Gandhi Trust', 'Goverment', 'Sholavanthan'),
(20, 1005, 'CMC hospital', 'Psychaitry', 'vellore'),
(21, 1006, 'RUSS foundation', 'DM', 'madurai');

-- --------------------------------------------------------

--
-- Table structure for table `resource_person`
--

CREATE TABLE `resource_person` (
  `sno` int(11) NOT NULL,
  `res_id` int(11) NOT NULL,
  `resourceperson_name` varchar(100) NOT NULL,
  `designation` varchar(100) NOT NULL,
  `phone_no` bigint(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `times_visited` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `resource_person`
--

INSERT INTO `resource_person` (`sno`, `res_id`, `resourceperson_name`, `designation`, `phone_no`, `email`, `address`, `times_visited`) VALUES
(1, 1, 'fdffgd', 'dfg', 9876543253, 'anita@ldc.edu.in', 'zscdscxcxc', 3),
(2, 7, 'addsd', 'ad', 9876543253, 'dsf@gmail.com', 'dzv \r\ndxv', 31);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `guest_lectures`
--
ALTER TABLE `guest_lectures`
  ADD PRIMARY KEY (`g_id`);

--
-- Indexes for table `organisation_details`
--
ALTER TABLE `organisation_details`
  ADD PRIMARY KEY (`s.no`);

--
-- Indexes for table `resource_person`
--
ALTER TABLE `resource_person`
  ADD PRIMARY KEY (`sno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `guest_lectures`
--
ALTER TABLE `guest_lectures`
  MODIFY `g_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `organisation_details`
--
ALTER TABLE `organisation_details`
  MODIFY `s.no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `resource_person`
--
ALTER TABLE `resource_person`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
