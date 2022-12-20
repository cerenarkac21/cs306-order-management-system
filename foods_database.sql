-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 20, 2022 at 02:12 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

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
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `pssword` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `cashier`
--

CREATE TABLE `cashier` (
  `cashier_id` int(11) NOT NULL,
  `cashier_name_surname` varchar(50) DEFAULT NULL,
  `pssword` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cashier`
--

INSERT INTO `cashier` (`cashier_id`, `cashier_name_surname`, `pssword`) VALUES
(1, 'hasan ertugrul', 4444);

-- --------------------------------------------------------

--
-- Table structure for table `check_entity`
--

CREATE TABLE `check_entity` (
  `check_id` int(11) NOT NULL,
  `delivery_type` varchar(50) DEFAULT NULL,
  `total_price` float DEFAULT NULL,
  `payment_time` date DEFAULT NULL,
  `payment_type` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `check_entity`
--

INSERT INTO `check_entity` (`check_id`, `delivery_type`, `total_price`, `payment_time`, `payment_type`) VALUES
(1, 'in-cite', NULL, NULL, NULL),
(2, 'in-cite', NULL, NULL, NULL),
(3, 'in-cite', NULL, NULL, NULL),
(4, 'in-cite', NULL, NULL, NULL),
(5, 'in-cite', NULL, NULL, NULL),
(6, 'in-cite', NULL, NULL, NULL),
(7, 'in-cite', NULL, NULL, NULL),
(8, 'in-cite', NULL, NULL, NULL),
(9, 'in-cite', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `courier`
--

CREATE TABLE `courier` (
  `courier_id` int(11) NOT NULL,
  `courier_name_surname` varchar(50) DEFAULT NULL,
  `courier_tel_no` varchar(50) DEFAULT NULL,
  `pssword` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `foods`
--

CREATE TABLE `foods` (
  `fid` int(11) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `fcategory` varchar(50) NOT NULL,
  `fprep` float NOT NULL,
  `fprice` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `foods`
--

INSERT INTO `foods` (`fid`, `fname`, `fcategory`, `fprep`, `fprice`) VALUES
(10, 'pizza', 'main course', 30, 10),
(11, 'chocolate cake', 'dessert', 60, 15),
(12, 'spaghetti', 'main course', 45, 20),
(13, 'apple pie', 'dessert', 75, 4),
(14, 'grilled chicken', 'main course', 20, 6),
(15, 'caesar salad', 'appetizer', 15, 12),
(16, 'margarita', 'drinks', 5, 10),
(17, 'taco', 'main course', 15, 15),
(18, 'chocolate mousse', 'dessert', 30, 40),
(19, 'beef stir fry', 'main course', 20, 10),
(20, 'mojito', 'drinks', 10, 100),
(21, 'crab cakes', 'appetizer', 30, 15),
(22, 'cheesecake', 'dessert', 60, 30),
(23, 'grilled salmon', 'main course', 25, 50),
(24, 'martini', 'drinks', 5, 60),
(25, 'spring rolls', 'appetizer', 20, 20),
(26, 'chocolate truffles', 'dessert', 45, 15),
(27, 'steak', 'main course', 35, 20),
(28, 'cosmopolitan', 'drinks', 10, 15),
(29, 'shrimp cocktail', 'appetizer', 15, 40),
(31, 'iskender', 'main course', 14, 400);

-- --------------------------------------------------------

--
-- Table structure for table `online_customer`
--

CREATE TABLE `online_customer` (
  `userID` int(11) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `address` varchar(300) DEFAULT NULL,
  `online_cust_tel_no` varchar(50) DEFAULT NULL,
  `waiting_food` binary(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `food_id` int(11) DEFAULT NULL,
  `check_id` int(11) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `order_time` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `food_id`, `check_id`, `quantity`, `order_time`) VALUES
(19, 11, 8, 1, '2022-12-20 01:22:30'),
(20, 14, 8, 4, '2022-12-20 01:22:30'),
(21, 16, 8, 1, '2022-12-20 01:22:30'),
(22, 28, 8, 2, '2022-12-20 01:22:30'),
(23, 17, 9, 1, '2022-12-20 15:37:42');

-- --------------------------------------------------------

--
-- Table structure for table `receives`
--

CREATE TABLE `receives` (
  `table_id` int(11) DEFAULT NULL,
  `check_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `receives`
--

INSERT INTO `receives` (`table_id`, `check_id`) VALUES
(1, 9),
(13, 8);

-- --------------------------------------------------------

--
-- Table structure for table `receives_online`
--

CREATE TABLE `receives_online` (
  `userID` int(11) DEFAULT NULL,
  `check_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE `reservation` (
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

--
-- Dumping data for table `table_entity`
--

INSERT INTO `table_entity` (`table_id`, `occupancy`, `waiting_food`, `which_area`) VALUES
(1, b'1', b'0', NULL),
(2, b'0', b'0', NULL),
(3, b'0', b'0', NULL),
(4, b'0', b'0', NULL),
(5, b'0', b'0', NULL),
(6, b'0', b'0', NULL),
(7, b'0', b'0', NULL),
(8, b'0', b'0', NULL),
(9, b'0', b'0', NULL),
(10, b'0', b'0', NULL),
(11, b'0', b'0', NULL),
(12, b'0', b'0', NULL),
(13, b'1', b'0', NULL),
(14, b'0', b'0', NULL),
(15, b'0', b'0', NULL),
(16, b'0', b'0', NULL),
(17, b'0', b'0', NULL),
(18, b'0', b'0', NULL),
(19, b'0', b'0', NULL),
(20, b'0', b'0', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `to_go`
--

CREATE TABLE `to_go` (
  `to_go_id` int(11) NOT NULL,
  `waiting_food` bit(1) DEFAULT b'1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `vehicle`
--

CREATE TABLE `vehicle` (
  `vehicle_id` int(11) NOT NULL,
  `availability` bit(1) DEFAULT b'1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `waiter`
--

CREATE TABLE `waiter` (
  `waiter_id` int(11) NOT NULL,
  `waiter_name_surname` varchar(50) DEFAULT NULL,
  `waiter_tel_no` varchar(50) DEFAULT NULL,
  `pssword` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `waiter`
--

INSERT INTO `waiter` (`waiter_id`, `waiter_name_surname`, `waiter_tel_no`, `pssword`) VALUES
(1, 'ceren arkac', '11111', 333);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`pssword`);

--
-- Indexes for table `cashier`
--
ALTER TABLE `cashier`
  ADD PRIMARY KEY (`cashier_id`);

--
-- Indexes for table `check_entity`
--
ALTER TABLE `check_entity`
  ADD PRIMARY KEY (`check_id`);

--
-- Indexes for table `courier`
--
ALTER TABLE `courier`
  ADD PRIMARY KEY (`courier_id`);

--
-- Indexes for table `foods`
--
ALTER TABLE `foods`
  ADD PRIMARY KEY (`fid`),
  ADD UNIQUE KEY `fid` (`fid`);

--
-- Indexes for table `online_customer`
--
ALTER TABLE `online_customer`
  ADD PRIMARY KEY (`userID`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `food_id` (`food_id`),
  ADD KEY `check_id` (`check_id`);

--
-- Indexes for table `receives`
--
ALTER TABLE `receives`
  ADD PRIMARY KEY (`check_id`),
  ADD KEY `table_id` (`table_id`);

--
-- Indexes for table `receives_online`
--
ALTER TABLE `receives_online`
  ADD PRIMARY KEY (`check_id`),
  ADD KEY `userID` (`userID`);

--
-- Indexes for table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`reservation_id`);

--
-- Indexes for table `table_entity`
--
ALTER TABLE `table_entity`
  ADD PRIMARY KEY (`table_id`);

--
-- Indexes for table `to_go`
--
ALTER TABLE `to_go`
  ADD PRIMARY KEY (`to_go_id`);

--
-- Indexes for table `vehicle`
--
ALTER TABLE `vehicle`
  ADD PRIMARY KEY (`vehicle_id`);

--
-- Indexes for table `waiter`
--
ALTER TABLE `waiter`
  ADD PRIMARY KEY (`waiter_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `check_entity`
--
ALTER TABLE `check_entity`
  MODIFY `check_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `foods`
--
ALTER TABLE `foods`
  MODIFY `fid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`food_id`) REFERENCES `foods` (`fid`),
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`check_id`) REFERENCES `check_entity` (`check_id`) ON DELETE CASCADE;

--
-- Constraints for table `receives`
--
ALTER TABLE `receives`
  ADD CONSTRAINT `receives_ibfk_1` FOREIGN KEY (`table_id`) REFERENCES `table_entity` (`table_id`),
  ADD CONSTRAINT `receives_ibfk_2` FOREIGN KEY (`check_id`) REFERENCES `check_entity` (`check_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
