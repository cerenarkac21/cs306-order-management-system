-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 15, 2022 at 08:42 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `foods_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `Cashier`
--


CREATE DATABASE foods_database;

USE foods_database;

CREATE TABLE `Cashier` (
  `cashier_id` int(11) NOT NULL,
  `cashier_name_surname` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `Check_entity`
--

CREATE TABLE `Check_entity` (
  `check_id` int(11) NOT NULL,
  `delivery_type` varchar(50) DEFAULT NULL,
  `total_price` float DEFAULT NULL,
  `payment_time` date DEFAULT NULL,
  `payment_type` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `Courier`
--

CREATE TABLE `Courier` (
  `courier_id` int(11) NOT NULL,
  `courier_name_surname` varchar(50) DEFAULT NULL,
  `courier_tel_no` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `foods`
--

CREATE TABLE `foods` (
  `fid` int(11) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `fcategory` varchar(50) NOT NULL,
  `fprep` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `foods`
--

-- --------------------------------------------------------

--
-- Table structure for table `Online_Customer`
--

CREATE TABLE `Online_Customer` (
  `userID` int(11) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `address` varchar(300) DEFAULT NULL,
  `online_cust_tel_no` varchar(50) DEFAULT NULL,
  `waiting_food` bit(1) DEFAULT b'1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `Reservation`
--

CREATE TABLE `Reservation` (
  `reservation_id` int(11) NOT NULL,
  `reserved_time` float DEFAULT NULL,
  `reservation_time` date DEFAULT NULL,
  `number_of_ppl` int(11) DEFAULT NULL,
  `what_type_of` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `table_entity`
--

CREATE TABLE `table_entity` (
  `table_id` int(11) NOT NULL,
  `occupancy` bit(1) DEFAULT b'0',
  `waiting_food` bit(1) DEFAULT b'0',
  `which_area` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `To_go`
--

CREATE TABLE `To_go` (
  `to_go_id` int(11) NOT NULL,
  `waiting_food` bit(1) DEFAULT b'1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `Vehicle`
--

CREATE TABLE `Vehicle` (
  `vehicle_id` int(11) NOT NULL,
  `availability` bit(1) DEFAULT b'1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `Waiter`
--

CREATE TABLE `Waiter` (
  `waiter_id` int(11) NOT NULL,
  `waiter_name_surname` varchar(50) DEFAULT NULL,
  `waiter_tel_no` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Cashier`
--
ALTER TABLE `Cashier`
  ADD PRIMARY KEY (`cashier_id`);

--
-- Indexes for table `Check_entity`
--
ALTER TABLE `Check_entity`
  ADD PRIMARY KEY (`check_id`);

--
-- Indexes for table `Courier`
--
ALTER TABLE `Courier`
  ADD PRIMARY KEY (`courier_id`);

--
-- Indexes for table `foods`
--
ALTER TABLE `foods`
  ADD PRIMARY KEY (`fid`),
  ADD UNIQUE KEY `fid` (`fid`);

--
-- Indexes for table `Online_Customer`
--
ALTER TABLE `Online_Customer`
  ADD PRIMARY KEY (`userID`);

--
-- Indexes for table `Reservation`
--
ALTER TABLE `Reservation`
  ADD PRIMARY KEY (`reservation_id`);

--
-- Indexes for table `table_entity`
--
ALTER TABLE `table_entity`
  ADD PRIMARY KEY (`table_id`);

--
-- Indexes for table `To_go`
--
ALTER TABLE `To_go`
  ADD PRIMARY KEY (`to_go_id`);

--
-- Indexes for table `Vehicle`
--
ALTER TABLE `Vehicle`
  ADD PRIMARY KEY (`vehicle_id`);

--
-- Indexes for table `Waiter`
--
ALTER TABLE `Waiter`
  ADD PRIMARY KEY (`waiter_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `foods`
--
ALTER TABLE `foods`
  MODIFY `fid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

