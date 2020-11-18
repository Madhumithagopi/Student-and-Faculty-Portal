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
-- Database: `msw_sociogram`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_comment`
--

CREATE TABLE `tbl_comment` (
  `comment_id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `comment` text NOT NULL,
  `timestamp` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_comment`
--

INSERT INTO `tbl_comment` (`comment_id`, `post_id`, `user_id`, `comment`, `timestamp`) VALUES
(7, 2, 1, 'nice', '2019-02-27 01:19:31'),
(8, 1, 1, 'wow', '2019-02-27 01:19:39'),
(9, 2, 3, 'asfdg', '2019-02-27 02:15:45'),
(10, 2, 3, 'hai', '2019-02-27 02:15:45'),
(11, 1, 3, 'wersdt', '2019-02-27 02:15:50'),
(12, 3, 3, 'wsedfr', '2019-02-27 02:16:05'),
(13, 8, 15, 'wes', '2019-03-01 12:37:15');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_follow`
--

CREATE TABLE `tbl_follow` (
  `follow_id` int(11) NOT NULL,
  `sender_id` int(11) NOT NULL,
  `receiver_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_follow`
--

INSERT INTO `tbl_follow` (`follow_id`, `sender_id`, `receiver_id`) VALUES
(1, 1, 2),
(2, 2, 1),
(3, 2, 3),
(4, 1, 3),
(5, 3, 2),
(8, 3, 1),
(9, 3, 4),
(10, 2, 4),
(11, 4, 3),
(12, 4, 5),
(13, 3, 5),
(14, 2, 5),
(15, 4, 6),
(16, 3, 6),
(17, 6, 7),
(18, 4, 7),
(19, 3, 7),
(20, 1, 7),
(21, 6, 9),
(22, 11, 12),
(23, 12, 13),
(24, 11, 13),
(25, 13, 14),
(26, 12, 14),
(27, 11, 14),
(28, 14, 15),
(30, 12, 15),
(32, 13, 16),
(33, 14, 16),
(34, 17, 18),
(35, 18, 19),
(36, 17, 19),
(37, 19, 20),
(38, 18, 20),
(39, 20, 21),
(40, 20, 22),
(41, 19, 22),
(42, 18, 22),
(43, 17, 22),
(44, 20, 2),
(45, 19, 2),
(46, 18, 2),
(47, 17, 2),
(48, 23, 2),
(49, 22, 2),
(50, 26, 28),
(51, 25, 28),
(52, 24, 28),
(53, 28, 29),
(54, 27, 29),
(55, 26, 29),
(56, 29, 30),
(57, 28, 30),
(58, 27, 30),
(59, 32, 16),
(60, 32, 33),
(61, 33, 32);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_samples_post`
--

CREATE TABLE `tbl_samples_post` (
  `post_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `post_content` text NOT NULL,
  `post_datetime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_samples_post`
--

INSERT INTO `tbl_samples_post` (`post_id`, `user_id`, `post_content`, `post_datetime`) VALUES
(1, 2, 'qasdfg', '2019-02-27 01:18:58'),
(2, 1, 'asdfghj', '2019-02-27 01:19:26'),
(3, 3, 'werstd', '2019-02-27 02:15:54'),
(4, 3, 'khgnfb', '2019-02-27 15:44:39'),
(5, 7, 'wser', '2019-02-28 14:09:47'),
(6, 13, 'asd', '2019-02-28 14:44:47'),
(7, 14, 'qsd', '2019-02-28 14:47:28'),
(8, 15, 'qae', '2019-03-01 12:37:00'),
(9, 16, 'wdefrt', '2019-03-02 05:01:33'),
(10, 17, 'asdwasd', '2019-03-17 14:53:25'),
(11, 18, 'hey', '2019-03-17 14:54:34'),
(12, 20, 'sdfa', '2019-03-17 15:04:16'),
(13, 22, 'wer', '2019-03-17 15:15:22'),
(14, 28, 'wqerwegtdfhyt', '2019-03-22 09:45:33'),
(15, 29, 'hkjh', '2019-03-23 05:55:58'),
(16, 30, 'yui', '2019-03-23 05:57:08'),
(17, 16, 'bjsd', '2019-03-24 12:31:13'),
(18, 16, 'ssnbks', '2019-03-24 12:31:25'),
(19, 16, 'sdfg', '2019-03-24 13:04:32'),
(20, 33, 'sdf', '2019-03-24 13:05:15'),
(21, 32, 'asd', '2019-03-24 13:06:20');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_twitter_user`
--

CREATE TABLE `tbl_twitter_user` (
  `user_id` int(11) NOT NULL,
  `username` varchar(150) NOT NULL,
  `password` varchar(150) NOT NULL,
  `name` varchar(150) NOT NULL,
  `profile_image` varchar(100) NOT NULL,
  `bio` text NOT NULL,
  `follower_number` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_twitter_user`
--

INSERT INTO `tbl_twitter_user` (`user_id`, `username`, `password`, `name`, `profile_image`, `bio`, `follower_number`) VALUES
(32, 'kiki', 'kiki', 'asd', '8602.jpg', '', 2),
(33, 'madhu', 'madhu', 'madhu', '32743.png', 'asdf', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_comment`
--
ALTER TABLE `tbl_comment`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `tbl_follow`
--
ALTER TABLE `tbl_follow`
  ADD PRIMARY KEY (`follow_id`);

--
-- Indexes for table `tbl_samples_post`
--
ALTER TABLE `tbl_samples_post`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `tbl_twitter_user`
--
ALTER TABLE `tbl_twitter_user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_comment`
--
ALTER TABLE `tbl_comment`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `tbl_follow`
--
ALTER TABLE `tbl_follow`
  MODIFY `follow_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;
--
-- AUTO_INCREMENT for table `tbl_samples_post`
--
ALTER TABLE `tbl_samples_post`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `tbl_twitter_user`
--
ALTER TABLE `tbl_twitter_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
