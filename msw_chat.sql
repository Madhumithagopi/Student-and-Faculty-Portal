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
-- Database: `msw_chat`
--

-- --------------------------------------------------------

--
-- Table structure for table `chat_message`
--

CREATE TABLE `chat_message` (
  `chat_message_id` int(11) NOT NULL,
  `to_user_id` int(11) NOT NULL,
  `from_user_id` int(11) NOT NULL,
  `chat_message` mediumtext COLLATE utf8mb4_bin NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `chat_message`
--

INSERT INTO `chat_message` (`chat_message_id`, `to_user_id`, `from_user_id`, `chat_message`, `timestamp`, `status`) VALUES
(1, 2, 1, 'hi', '2019-02-25 14:47:36', 0),
(2, 1, 2, 'hek', '2019-02-25 14:51:52', 0),
(3, 2, 1, 'grt\n', '2019-02-25 14:52:47', 0),
(4, 2, 1, '????', '2019-02-25 14:55:12', 0),
(5, 0, 1, '\n<br>\n<b>Warning</b>:  move_uploaded_file(upload/nature.jpg): failed to open stream: No such file or directory in <b>C:\\AppServ\\www\\chat\\upload.php</b> on line <b>12</b><br>\n<br>\n<b>Warning</b>:  move_uploaded_file(): Unable to move \'C:\\Windows\\Temp\\phpB578.tmp\' to \'upload/nature.jpg\' in <b>C:\\AppServ\\www\\chat\\upload.php</b> on line <b>12</b><br>\n', '2019-02-25 15:00:41', 1),
(6, 2, 1, 'ty????', '2019-02-25 15:00:55', 0),
(7, 2, 1, 'sd', '2019-02-25 15:01:20', 0),
(8, 2, 1, 'sde', '2019-02-25 15:01:34', 0),
(9, 2, 1, 'frtg', '2019-02-25 15:01:47', 0),
(10, 1, 2, 'rdt', '2019-02-25 15:02:49', 0),
(11, 0, 2, '\n\n   r6y', '2019-02-25 15:03:04', 1),
(12, 2, 1, 'FEWFW', '2019-02-26 02:22:58', 0),
(13, 1, 2, 'hai\n', '2019-02-26 08:01:36', 0),
(14, 0, 1, '\n\n   hai', '2019-03-25 05:36:30', 1),
(15, 1, 2, 'hey', '2019-03-25 05:37:42', 0),
(16, 2, 1, 'asd', '2019-03-25 07:17:14', 2),
(17, 0, 1, '\n\n   hai', '2019-03-25 07:17:33', 2),
(18, 1, 2, 'bnbmn', '2019-03-25 11:09:00', 0),
(19, 1, 2, 'bnbmn', '2019-03-25 11:09:00', 0),
(20, 1, 2, 'bnbmn', '2019-03-25 11:09:00', 2),
(21, 0, 2, '<p><img src=\"upload.php1a37153.jpg\" class=\"img-thumbnail\" width=\"200\" height=\"160\"></p><br>', '2019-03-25 11:09:33', 2),
(22, 1, 4, 'kjnknkl :-)😞😞😞🙂\n', '2019-03-27 11:21:46', 2),
(23, 0, 4, '<p><img src=\"upload.php2cad6712-cb1c-4b8e-b56c-7848c134035d_5.jpg\" class=\"img-thumbnail\" width=\"200\" height=\"160\"></p><br>', '2019-03-27 11:22:07', 1),
(24, 1, 2, 'hghj', '2019-04-05 07:26:43', 0),
(25, 0, 1, '\n\n   mhgd', '2019-04-05 07:41:23', 2);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `user_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`user_id`, `username`, `password`) VALUES
(1, 'krithiga', '$2y$10$4REfvTZpxLgkAR/lKG9QiOkSdahOYIR3MeoGJAyiWmRkEFfjH3396'),
(2, 'swathi', '$2y$10$4REfvTZpxLgkAR/lKG9QiOkSdahOYIR3MeoGJAyiWmRkEFfjH3396'),
(3, 'madhu', '$2y$10$4REfvTZpxLgkAR/lKG9QiOkSdahOYIR3MeoGJAyiWmRkEFfjH3396');

-- --------------------------------------------------------

--
-- Table structure for table `login_details`
--

CREATE TABLE `login_details` (
  `login_details_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `last_activity` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `is_type` enum('no','yes') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login_details`
--

INSERT INTO `login_details` (`login_details_id`, `user_id`, `last_activity`, `is_type`) VALUES
(1, 1, '2019-02-25 14:47:49', 'no'),
(2, 2, '2019-02-25 14:52:20', 'no'),
(3, 1, '2019-02-25 15:02:08', 'no'),
(4, 2, '2019-02-25 15:03:53', 'no'),
(5, 1, '2019-02-25 15:24:53', 'no'),
(6, 1, '2019-02-26 02:23:02', 'no'),
(7, 2, '2019-02-26 02:31:56', 'no'),
(8, 1, '2019-02-26 07:49:04', 'no'),
(9, 2, '2019-02-26 08:02:40', 'no'),
(10, 1, '2019-02-26 09:07:28', 'no'),
(11, 2, '2019-03-21 08:26:44', 'no'),
(12, 2, '2019-03-21 08:35:21', 'no'),
(13, 2, '2019-03-25 03:08:09', 'no'),
(14, 1, '2019-03-25 05:36:32', 'no'),
(15, 2, '2019-03-25 05:37:10', 'no'),
(16, 2, '2019-03-25 05:37:43', 'no'),
(17, 1, '2019-03-25 05:37:58', 'no'),
(18, 1, '2019-03-25 07:17:38', 'no'),
(19, 2, '2019-03-25 11:09:48', 'no'),
(20, 1, '2019-04-01 07:54:45', 'no'),
(21, 2, '2019-04-05 05:59:30', 'no'),
(22, 1, '2019-04-05 06:44:14', 'no'),
(23, 2, '2019-04-05 07:27:03', 'no'),
(24, 1, '2019-04-05 07:41:26', 'no'),
(25, 1, '2019-04-05 08:54:57', 'no'),
(26, 1, '2019-04-05 10:00:11', 'no'),
(27, 1, '2019-04-05 10:06:03', 'no');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chat_message`
--
ALTER TABLE `chat_message`
  ADD PRIMARY KEY (`chat_message_id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `login_details`
--
ALTER TABLE `login_details`
  ADD PRIMARY KEY (`login_details_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chat_message`
--
ALTER TABLE `chat_message`
  MODIFY `chat_message_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `login_details`
--
ALTER TABLE `login_details`
  MODIFY `login_details_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
