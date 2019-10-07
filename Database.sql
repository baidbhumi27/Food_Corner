-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 13, 2019 at 02:24 PM
-- Server version: 5.7.24-log
-- PHP Version: 7.1.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `foodcorner`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_a_restraunt`
--

CREATE TABLE `add_a_restraunt` (
  `restraunt_id` int(255) NOT NULL,
  `restraunt_name` varchar(100) NOT NULL,
  `restraunt_address` varchar(100) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `no_of_locations` varchar(10) NOT NULL,
  `type_of_cuisine` varchar(50) NOT NULL,
  `rest_staff_del` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `add_a_restraunt`
--

INSERT INTO `add_a_restraunt` (`restraunt_id`, `restraunt_name`, `restraunt_address`, `first_name`, `phone`, `email`, `password`, `no_of_locations`, `type_of_cuisine`, `rest_staff_del`) VALUES
(7, 'Mexican Rodeo', 'Opposite Rahul Raj Mall Surat', 'Namrata Baid', '9824604077', 'baidbhumi27@gmail.com', '$2y$10$M/YZj9KChS0JuC9rNzvCDOTOMIBBSi0Q9m9gj2Ao1iQfI76YBRgS6', '11-25', 'South Indian', 'YES'),
(8, 'Sizzling Salsa', 'Rajhans cinema,Piplod', 'Bhumika Baid', '9824199980', 'baidbhumi25@gmail.com', '$2y$10$jbUGBwCzXOfjs2FhT.ThVOg.bOzccm/NylPZLYF5DKf6hCyjcLORW', '6-10', 'Italian', 'YES'),
(10, 'Thikana', 'Rahul raj mall surat', 'Karan Loonker', '7990594313', 'sansa@stark.com', '$2y$10$X5FHR85YLQLeqHyN4B4NkOHP6ZiTCDeEwazB25jkkK8n4O4fz1soK', '6-10', 'Mexican', 'NO');

-- --------------------------------------------------------

--
-- Table structure for table `mexicanrodeo`
--

CREATE TABLE `mexicanrodeo` (
  `dish_id` int(100) NOT NULL,
  `cuisine` varchar(50) DEFAULT NULL,
  `type` varchar(50) DEFAULT NULL,
  `cost` int(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mexicanrodeo`
--

INSERT INTO `mexicanrodeo` (`dish_id`, `cuisine`, `type`, `cost`) VALUES
(1, 'Veg. Cheese Frankie', 'Indian', 150),
(2, 'Veg. Singles Pizza', 'Indian', 200),
(3, 'Pink Sauce pasta', 'Italian', 200),
(4, 'Mexican Rice with Paneer Skillets', 'Mexican', 200);

-- --------------------------------------------------------

--
-- Table structure for table `order_place`
--

CREATE TABLE `order_place` (
  `order_id` int(100) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `order_items` varchar(100) DEFAULT NULL,
  `total` int(100) DEFAULT NULL,
  `rest_name` varchar(100) NOT NULL,
  `place_order` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `sizzlingsalsa`
--

CREATE TABLE `sizzlingsalsa` (
  `dish_id` int(100) NOT NULL,
  `cuisine` varchar(50) DEFAULT NULL,
  `type` varchar(50) DEFAULT NULL,
  `cost` int(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sizzlingsalsa`
--

INSERT INTO `sizzlingsalsa` (`dish_id`, `cuisine`, `type`, `cost`) VALUES
(1, 'Chinese Sizzler', 'Sizzler', 650),
(2, 'Mexican Sizzler', 'Sizzler', 200);

-- --------------------------------------------------------

--
-- Table structure for table `thikana`
--

CREATE TABLE `thikana` (
  `dish_id` int(100) NOT NULL,
  `cuisine` varchar(50) DEFAULT NULL,
  `type` varchar(50) DEFAULT NULL,
  `cost` int(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `thikana`
--

INSERT INTO `thikana` (`dish_id`, `cuisine`, `type`, `cost`) VALUES
(1, 'Veg. Singles Pizza', 'Indian', 150),
(2, 'Veg. Singles Pizza', 'Indian', 200),
(3, 'Veg. Cheese Frankie', 'Indian', 150);

-- --------------------------------------------------------

--
-- Table structure for table `user1`
--

CREATE TABLE `user1` (
  `id` int(255) NOT NULL,
  `Username` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user1`
--

INSERT INTO `user1` (`id`, `Username`, `pass`) VALUES
(23, 'Bhumika Baid', '$2y$10$DWBOGkcSK6rIUs8KiNokf.7NRFHgmBXVs8USItOti.FYV/ibfEF4a'),
(24, 'karan loonker', '$2y$10$2hXM/DCrGLoZo6tM3kiF8en/8J9MdMYGhIv4IpvT9nI.W4J4HG.GS');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_a_restraunt`
--
ALTER TABLE `add_a_restraunt`
  ADD PRIMARY KEY (`restraunt_id`);

--
-- Indexes for table `mexicanrodeo`
--
ALTER TABLE `mexicanrodeo`
  ADD PRIMARY KEY (`dish_id`);

--
-- Indexes for table `order_place`
--
ALTER TABLE `order_place`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `sizzlingsalsa`
--
ALTER TABLE `sizzlingsalsa`
  ADD PRIMARY KEY (`dish_id`);

--
-- Indexes for table `thikana`
--
ALTER TABLE `thikana`
  ADD PRIMARY KEY (`dish_id`);

--
-- Indexes for table `user1`
--
ALTER TABLE `user1`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_a_restraunt`
--
ALTER TABLE `add_a_restraunt`
  MODIFY `restraunt_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `mexicanrodeo`
--
ALTER TABLE `mexicanrodeo`
  MODIFY `dish_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `order_place`
--
ALTER TABLE `order_place`
  MODIFY `order_id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sizzlingsalsa`
--
ALTER TABLE `sizzlingsalsa`
  MODIFY `dish_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `thikana`
--
ALTER TABLE `thikana`
  MODIFY `dish_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user1`
--
ALTER TABLE `user1`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
