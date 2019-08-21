-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 21, 2019 at 12:54 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `labxm`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `email` varchar(25) NOT NULL,
  `message` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `email`, `message`) VALUES
(1, 'sho121@gmail.com', 'as'),
(3, 'b@gmail.com', 'this site is good for car rent');

-- --------------------------------------------------------

--
-- Table structure for table `car`
--

CREATE TABLE `car` (
  `id` int(11) NOT NULL,
  `carname` varchar(30) NOT NULL,
  `category` varchar(50) NOT NULL,
  `cost` varchar(25) NOT NULL,
  `seatno` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `car`
--

INSERT INTO `car` (`id`, `carname`, `category`, `cost`, `seatno`) VALUES
(1, 'audi', 'Privatecar', '10000', '4'),
(2, 'premio', 'Privatecar', '2000', '5'),
(3, 'nova', 'Microbus', '4000', '8'),
(4, 'hiace', 'Microbus', '4500', '9'),
(5, 'ford', 'Pickup', '6000', '12'),
(6, 'van', 'Pickup', '5000', '14');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id` int(11) NOT NULL,
  `name` varchar(25) NOT NULL,
  `cardno` varchar(50) NOT NULL,
  `cost` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id`, `name`, `cardno`, `cost`) VALUES
(1, 'aass', '33455', '2500'),
(2, 'sho121@gmail.com', '2334', '234'),
(3, 'sho121@gmail.com', '23', '23');

-- --------------------------------------------------------

--
-- Table structure for table `rentcar`
--

CREATE TABLE `rentcar` (
  `id` int(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `carname` varchar(100) NOT NULL,
  `perdaycost` varchar(25) NOT NULL,
  `totalday` varchar(20) NOT NULL,
  `totalcost` varchar(50) NOT NULL,
  `status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rentcar`
--

INSERT INTO `rentcar` (`id`, `email`, `carname`, `perdaycost`, `totalday`, `totalcost`, `status`) VALUES
(1, 'sho121@gmail.com', 'audi', '10000', '3', '30000', 'paid'),
(5, 'sho121@gmail.com', 'hiace', '4500', '3', '13500', 'unpaid'),
(6, 'sho121@gmail.com', 'nova', '4000', '5', '20000', 'paid'),
(7, 'b@gmail.com', 'ford', '6000', '4', '24000', 'paid'),
(8, 'sho121@gmail.com', 'hiace', '4500', '4', '18000', 'paid'),
(10, 'sho121@gmail.com', 'hiace', '4500', '1', '4500', 'paid'),
(11, 'sho121@gmail.com', 'audi', '10000', '6', '60000', 'unpaid'),
(12, 'sho121@gmail.com', 'premio', '2000', '8', '16000', 'unpaid'),
(13, 'sho121@gmail.com', 'premio', '2000', '7', '14000', 'unpaid');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `type` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`, `type`) VALUES
(1, 'hasan1', 'hasan@gmail.com', '123', 'Admin'),
(2, 'shohag2', 'sho121@gmail.com', '456', 'Member'),
(4, 'b', 'b@gmail.com', '3344', 'Member'),
(8, 'rich', 'rich@gmail.com', '1122', 'Admin'),
(9, 'rich', 'rich@gmail.com', '1122', 'Admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `car`
--
ALTER TABLE `car`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rentcar`
--
ALTER TABLE `rentcar`
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
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `car`
--
ALTER TABLE `car`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `rentcar`
--
ALTER TABLE `rentcar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
