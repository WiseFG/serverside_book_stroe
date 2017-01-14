-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 14, 2017 at 06:17 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `onlinebookstore`
--
CREATE DATABASE IF NOT EXISTS `onlinebookstore` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `onlinebookstore`;

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `id` bigint(20) NOT NULL,
  `name` varchar(64) NOT NULL,
  `publisher` varchar(64) NOT NULL,
  `writer` varchar(64) NOT NULL,
  `publishedDate` varchar(32) NOT NULL,
  `description` varchar(1024) NOT NULL,
  `price` decimal(10,0) NOT NULL,
  `count` int(11) NOT NULL,
  `sale` decimal(10,0) DEFAULT NULL,
  `photo` varchar(256) DEFAULT NULL,
  `cate` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `card`
--

CREATE TABLE `card` (
  `id` bigint(20) NOT NULL,
  `number` varchar(32) NOT NULL,
  `ownername` varchar(64) NOT NULL,
  `bankname` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` bigint(20) NOT NULL,
  `userId` bigint(20) DEFAULT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `cartrow`
--

CREATE TABLE `cartrow` (
  `id` bigint(20) NOT NULL,
  `count` int(11) NOT NULL,
  `bookId` bigint(20) NOT NULL,
  `cartId` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE `invoice` (
  `id` bigint(20) NOT NULL,
  `userId` bigint(20) NOT NULL,
  `date` varchar(32) NOT NULL,
  `deliveryTime` varchar(32) DEFAULT NULL,
  `paymentmethodtype` tinyint(1) NOT NULL,
  `cardid` bigint(20) DEFAULT NULL,
  `status` varchar(10) NOT NULL,
  `place` varchar(15) NOT NULL,
  `Delivered` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `invoicerow`
--

CREATE TABLE `invoicerow` (
  `id` bigint(20) NOT NULL,
  `count` int(11) NOT NULL,
  `bookId` bigint(20) NOT NULL,
  `invoiceId` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` bigint(20) NOT NULL,
  `username` varchar(64) NOT NULL,
  `password` varchar(64) NOT NULL,
  `phoneNumber` varchar(16) DEFAULT NULL,
  `address` varchar(512) DEFAULT NULL,
  `email` varchar(32) NOT NULL,
  `birthday` varchar(32) DEFAULT NULL,
  `gender` varchar(16) DEFAULT NULL,
  `role` varchar(32) NOT NULL,
  `name` varchar(128) NOT NULL,
  `fname` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `phoneNumber`, `address`, `email`, `birthday`, `gender`, `role`, `name`, `fname`) VALUES
(1, 'hhh', '333', NULL, NULL, 'hhh@www.nooo', NULL, NULL, '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `card`
--
ALTER TABLE `card`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userId` (`userId`);

--
-- Indexes for table `cartrow`
--
ALTER TABLE `cartrow`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bookId` (`bookId`),
  ADD KEY `cartId` (`cartId`);

--
-- Indexes for table `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userId` (`userId`),
  ADD KEY `cardid` (`cardid`);

--
-- Indexes for table `invoicerow`
--
ALTER TABLE `invoicerow`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bookId` (`bookId`),
  ADD KEY `invoiceId` (`invoiceId`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `card`
--
ALTER TABLE `card`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `cartrow`
--
ALTER TABLE `cartrow`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `invoice`
--
ALTER TABLE `invoice`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `invoicerow`
--
ALTER TABLE `invoicerow`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`userId`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `cartrow`
--
ALTER TABLE `cartrow`
  ADD CONSTRAINT `cartrow_ibfk_1` FOREIGN KEY (`cartId`) REFERENCES `cart` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `cartrow_ibfk_2` FOREIGN KEY (`bookId`) REFERENCES `book` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `invoice`
--
ALTER TABLE `invoice`
  ADD CONSTRAINT `invoice_ibfk_1` FOREIGN KEY (`userId`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `invoice_ibfk_2` FOREIGN KEY (`cardid`) REFERENCES `card` (`id`);

--
-- Constraints for table `invoicerow`
--
ALTER TABLE `invoicerow`
  ADD CONSTRAINT `invoicerow_ibfk_1` FOREIGN KEY (`invoiceId`) REFERENCES `invoice` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `invoicerow_ibfk_2` FOREIGN KEY (`bookId`) REFERENCES `book` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
