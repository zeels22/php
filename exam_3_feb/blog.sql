-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 03, 2020 at 05:41 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(4) NOT NULL,
  `parent_id` int(4) DEFAULT NULL,
  `title` varchar(15) NOT NULL,
  `meta_title` varchar(20) DEFAULT NULL,
  `url` varchar(40) NOT NULL,
  `content` varchar(50) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `parent_id`, `title`, `meta_title`, `url`, `content`, `created_at`, `updated_at`) VALUES
(1, 0, 'education', 'all about education', 'www.abcd.com', 'nothing', '2020-02-03 16:30:04', '2020-02-03 16:27:17'),
(2, 1, 'Lifestyle', 'lifeStyle', 'www.google.com', 'all about fashion', '2020-02-03 16:30:04', '2020-02-03 16:41:40'),
(3, 4, 'Sports', 'sports-cricket', 'www.icc-cricket.com', 'all type of sports', '2020-02-03 16:46:55', '2020-02-03 16:46:55');

-- --------------------------------------------------------

--
-- Table structure for table `prefixes`
--

CREATE TABLE `prefixes` (
  `id` int(4) NOT NULL,
  `prefix` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `prefixes`
--

INSERT INTO `prefixes` (`id`, `prefix`) VALUES
(1, 'Mr.'),
(2, 'Dr.'),
(3, 'Miss'),
(4, 'Mrs.');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(4) NOT NULL,
  `prefix` varchar(10) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `phoneNo` int(10) NOT NULL,
  `emailId` varchar(40) NOT NULL,
  `pass` varchar(40) NOT NULL,
  `lastLogin` datetime DEFAULT NULL,
  `info` varchar(100) DEFAULT NULL,
  `createdAt` datetime DEFAULT NULL,
  `updatedAt` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `prefix`, `fname`, `lname`, `phoneNo`, `emailId`, `pass`, `lastLogin`, `info`, `createdAt`, `updatedAt`) VALUES
(1, 'Mr.', 'zeel', 'Panchal', 898999888, 'zeels22@gmail.com', '900150983cd24fb0d6963f7d28e17f72', NULL, 'blogging', '2020-02-03 14:45:04', NULL),
(2, 'Dr.', 'Ajay', 'Panchal', 2147483647, 'zeels22@gmails.com', '098f6bcd4621d373cade4e832627b4f6', NULL, 'zeel', '2020-02-03 15:33:50', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `prefixes`
--
ALTER TABLE `prefixes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `prefixes`
--
ALTER TABLE `prefixes`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
