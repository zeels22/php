-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 21, 2020 at 05:37 PM
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
-- Database: `vehicle`
--

-- --------------------------------------------------------

--
-- Table structure for table `service_registration`
--

CREATE TABLE `service_registration` (
  `service_id` int(5) NOT NULL,
  `Uid` int(5) NOT NULL,
  `Title` varchar(20) NOT NULL,
  `VehicleNumber` int(5) NOT NULL,
  `LicenceNumber` int(5) NOT NULL,
  `Date` datetime NOT NULL,
  `timeslot` varchar(10) NOT NULL,
  `issue` varchar(5) NOT NULL,
  `serviceCenter` varchar(15) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `CreatedDate` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `service_registration`
--

INSERT INTO `service_registration` (`service_id`, `Uid`, `Title`, `VehicleNumber`, `LicenceNumber`, `Date`, `timeslot`, `issue`, `serviceCenter`, `status`, `CreatedDate`) VALUES
(1, 1, 'Health', 92929, 393, '2020-02-21 00:00:00', '9', 'wbdj', 'abcd', 1, '2020-02-21 17:02:16'),
(2, 1, 'Health', 88000, 9898, '2020-02-21 00:00:00', '9', 'wbdj', 'knkn', 1, '2020-02-21 17:05:15');

-- --------------------------------------------------------

--
-- Table structure for table `user_address`
--

CREATE TABLE `user_address` (
  `addr_id` int(5) NOT NULL,
  `uid` int(5) NOT NULL DEFAULT 1,
  `street` varchar(20) NOT NULL,
  `city` varchar(20) NOT NULL,
  `state` varchar(20) NOT NULL,
  `pincode` int(6) NOT NULL,
  `country` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_address`
--

INSERT INTO `user_address` (`addr_id`, `uid`, `street`, `city`, `state`, `pincode`, `country`) VALUES
(1, 1, 'dmwlm', 'ahm', 'guj', 3824, 'India'),
(2, 1, 'dmwlm', 'ahm', 'guj', 3824, 'India');

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE `user_info` (
  `uid` int(5) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL,
  `phone_no` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`uid`, `fname`, `lname`, `email`, `password`, `phone_no`) VALUES
(3, 'zeel', 'Panchal', 'zeels22@gmail.com', 'abcd', 898999888),
(4, 'jay', 'Patel', 'jay@gmail.com', 'abcd', 898999888);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `service_registration`
--
ALTER TABLE `service_registration`
  ADD PRIMARY KEY (`service_id`);

--
-- Indexes for table `user_address`
--
ALTER TABLE `user_address`
  ADD PRIMARY KEY (`addr_id`),
  ADD KEY `user_address_ibfk_1` (`uid`);

--
-- Indexes for table `user_info`
--
ALTER TABLE `user_info`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `service_registration`
--
ALTER TABLE `service_registration`
  MODIFY `service_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_address`
--
ALTER TABLE `user_address`
  MODIFY `addr_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_info`
--
ALTER TABLE `user_info`
  MODIFY `uid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
