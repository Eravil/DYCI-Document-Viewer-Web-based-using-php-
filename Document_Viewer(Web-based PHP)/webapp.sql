-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 10, 2021 at 03:16 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `weblogin`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `id` int(20) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `usertype` enum('Admin','User') NOT NULL DEFAULT 'User'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`id`, `username`, `password`, `usertype`) VALUES
(18, 'eravil', 'eravil', 'Admin'),
(19, 'jeff', 'jeff', 'Admin'),
(20, 'irvin', 'irvin', 'Admin'),
(21, 'rollan', 'rollan', 'Admin'),
(22, 'aerrold', 'aerrold', 'Admin'),
(23, 'user', 'user', 'User'),
(24, 'juan', 'juan', 'User'),
(26, 'mam_lim', 'mam_lim', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `course1`
--

CREATE TABLE `course1` (
  `id` int(11) NOT NULL,
  `subj1` longblob NOT NULL,
  `subj2` longblob NOT NULL,
  `subj3` longblob NOT NULL,
  `subj4` longblob NOT NULL,
  `subj5` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user_code`
--

CREATE TABLE `user_code` (
  `id` int(11) NOT NULL,
  `course_name` varchar(100) NOT NULL,
  `coursecode` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_code`
--

INSERT INTO `user_code` (`id`, `course_name`, `coursecode`) VALUES
(2, 'coursecode1', 'cfd32bcc59a66a10cdd9d62c4e1bf472'),
(3, 'coursecode2', 'd11a2f6b2d7104a738d20c66f5e7f4f3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course1`
--
ALTER TABLE `course1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_code`
--
ALTER TABLE `user_code`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `course1`
--
ALTER TABLE `course1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user_code`
--
ALTER TABLE `user_code`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
