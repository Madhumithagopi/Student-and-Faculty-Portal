-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 09, 2019 at 08:15 AM
-- Server version: 5.7.17-log
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `msw_login`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `s.no.` int(20) NOT NULL,
  `email` varchar(20) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL,
  `adm_id` int(20) DEFAULT NULL,
  `name` varchar(20) DEFAULT NULL,
  `ugroup` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`s.no.`, `email`, `password`, `adm_id`, `name`, `ugroup`) VALUES
(1, 'admin@ldc.edu.in', 'admin', 1000, 'mswadmin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `faculty_login`
--

CREATE TABLE `faculty_login` (
  `s.no.` int(20) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL,
  `ugroup` varchar(20) DEFAULT NULL,
  `emp_id` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `faculty_login`
--

INSERT INTO `faculty_login` (`s.no.`, `email`, `name`, `password`, `ugroup`, `emp_id`) VALUES
(1, 'anitachristinetiphagne@ldc.edu.in', 'Anita Christine Tiphagne', 'anita', 'faculty', 100),
(2, 'aliceelizasherina@ldc.edu.in', 'Alice Eliza Sherina', 'alice', 'faculty', 200),
(3, 'umamaheswarin@ldc.edu.in', 'Uma Maheswari', 'uma', 'faculty', 300),
(4, 'amypavithra@ldc.edu.in', 'Amy Pavithra', 'amy', 'faculty', 400);

-- --------------------------------------------------------

--
-- Table structure for table `student_login`
--

CREATE TABLE `student_login` (
  `s.no.` int(20) NOT NULL,
  `email` varchar(20) DEFAULT NULL,
  `name` varchar(20) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL,
  `ugroup` varchar(20) DEFAULT NULL,
  `reg_no` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `student_login`
--

INSERT INTO `student_login` (`s.no.`, `email`, `name`, `password`, `ugroup`, `reg_no`) VALUES
(1, '18pgse01@ldc.edu.in', 'Anu', 'anu', 'student', '18pgse01'),
(2, '17pgse02@ldc.edu.in', 'Krithiga', 'krithiga', 'student', '17pgse02'),
(3, '18pgse03@ldc.edu.in', 'Madhumitha', 'madhu', 'student', '18pgse03'),
(4, '18pgse04@ldc.edu.in', 'Monisha', 'moni', 'student', '18pgse04'),
(5, '17pgse01@ldc.edu.in', 'Swathi', 'swathi', 'student', '17pgse01'),
(6, '17pgse05@ldc.edu.in', 'ram', 'ram', 'student', '17pgse05');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`s.no.`);

--
-- Indexes for table `faculty_login`
--
ALTER TABLE `faculty_login`
  ADD PRIMARY KEY (`s.no.`);

--
-- Indexes for table `student_login`
--
ALTER TABLE `student_login`
  ADD PRIMARY KEY (`s.no.`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `s.no.` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `faculty_login`
--
ALTER TABLE `faculty_login`
  MODIFY `s.no.` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `student_login`
--
ALTER TABLE `student_login`
  MODIFY `s.no.` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
