-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 20, 2019 at 06:11 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `procument`
--

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `qty` int(255) DEFAULT NULL,
  `descr` varchar(255) NOT NULL,
  `unit` varchar(255) NOT NULL,
  `total` varchar(255) NOT NULL,
  `supplier` varchar(255) NOT NULL,
  `order_num` int(5) UNSIGNED ZEROFILL NOT NULL,
  `category` varchar(255) NOT NULL,
  `status` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`qty`, `descr`, `unit`, `total`, `supplier`, `order_num`, `category`, `status`) VALUES
(0, '', '', '', 'Power fm pvt ltd', 00327, 'AUTOMATION', 1),
(1, 'spoon', '1', '1', 'Power fm pvt ltd', 00328, 'AUTOMATION', 1),
(2, 'spoon', '1', '2', 'Sagehill technologies', 00329, 'IT', 1),
(2, 'spoon', '1', '2', 'Sagehill technologies', 00335, 'IT', 1),
(2, 'spoon', '1', '2', 'Power fm pvt ltd', 00336, 'AUTOMATION', 1),
(1, 'spoon', '1', '2', 'biserps technologies', 00344, 'AUTOMATION', 1),
(10, 'tables', '2.50', '25', 'diva pvt ltd', 00347, 'FURNITURE', 1),
(2, 'spoon', '1', '2', 'diva pvt ltd', 00348, 'FURNITURE', 1),
(2, 'tables', '2.50', '25', 'diva pvt ltd', 00349, 'FURNITURE', 1),
(2, 'tables', '2.50', '25', 'diva pvt ltd', 00350, 'FURNITURE', 1),
(2, 'tables', '2.50', '25', 'diva pvt ltd', 00351, 'FURNITURE', 1),
(2, 'tables', '2.50', '25', 'diva pvt ltd', 00352, 'FURNITURE', 1),
(2, 'tables', '2.50', '25', 'diva pvt ltd', 00353, 'FURNITURE', 1),
(2, 'tables', '2.50', '25', 'diva pvt ltd', 00354, 'FURNITURE', 1),
(10, 'Break pads', '500', '5000', 'viva viva pvt ltd', 00355, 'AUTOMATION', 1),
(2, 'spoon', '1', '2', 'jhajh', 00356, 'KITCHEN', 1),
(2, 'spoon', '1', '2', 'company pvt', 00357, 'AUTOMATION', 1),
(2, 'spoon', '1', '2', 'rwr', 00358, 'IT', 1),
(2, 'spoon', '2.50', '2', 'test', 00359, 'KITCHEN', 1),
(2, 'tables', '2.50', '2', 'biserps technologies', 00360, 'AUTOMATION', 1),
(2, 'spoon', '1', '2', 'IntelliNov Solutions', 00361, 'KITCHEN', 1),
(2, 'spoon', '1', '2', 'IntelliNov Solutions', 00362, 'KITCHEN', 1),
(2, 'spoon', '1', '2', 'Sagehill technologies', 00363, 'IT', 1),
(12, 'desk', '10', '120', 'trisha enterprise', 00364, 'FURNITURE', 1),
(10, 'spoon', '25', '35', 'saka', 00365, 'IT', 1),
(10, 'spoon', '2.50', '1', 'saka', 00366, 'IT', 1),
(10, 'spoon', '2.50', '1', 'saka', 00367, '', 1),
(10, 'spoon', '2.50', '1', 'saka', 00368, 'IT', 1),
(10, 'spoon', '2.50', '1', 'saka', 00369, 'IT', 1),
(10, 'spoon', '2.50', '1', 'saka', 00370, 'IT', 1),
(10, 'spoon', '2.50', '1', 'saka', 00371, 'IT', 1),
(2, 'spoon', '25', '27', 'jhajh', 00372, 'KITCHEN', 1),
(2, 'spoon', '25', '27', 'jhajh', 00373, 'KITCHEN', 1),
(2, 'spoon', '25', '27', 'jhajh', 00374, 'KITCHEN', 1),
(10, 'Computers', '500', '510', 'saka', 00375, 'IT', 1),
(10, 'Computers', '500', '510', 'saka', 00376, 'IT', 1),
(10, 'Computers', '500', '510', 'saka', 00377, 'IT', 1),
(10, 'Computers', '500', '510', 'saka', 00378, 'IT', 1),
(10, 'Computers', '500', '510', 'saka', 00379, 'IT', 1),
(10, 'Computers', '500', '510', 'saka', 00380, 'IT', 1),
(10, 'spoon', '1', '11', 'biserps pvt ltd', 00381, 'AUTOMATION', 1),
(10, 'spoon', '1', '11', 'biserps pvt ltd', 00382, 'AUTOMATION', 1),
(10, 'spoon', '1', '11', 'biserps pvt ltd', 00383, 'AUTOMATION', 1),
(10, 'spoon', '1', '11', 'biserps pvt ltd', 00384, 'AUTOMATION', 1),
(10, 'spoon', '1', '11', 'biserps pvt ltd', 00385, 'AUTOMATION', 1),
(10, 'spoon', '1', '11', 'biserps pvt ltd', 00386, 'AUTOMATION', 1),
(10, 'spoon', '1', '11', 'biserps pvt ltd', 00387, 'AUTOMATION', 1),
(10, 'spoon', '1', '11', 'biserps pvt ltd', 00388, 'AUTOMATION', 1),
(10, 'engines', '25', '35', 'ZimGold pvt ltd', 00389, 'AUTOMATION', 1),
(10, 'engines', '25', '35', 'ZimGold pvt ltd', 00390, 'AUTOMATION', 1),
(10, 'engines', '25', '35', 'ZimGold pvt ltd', 00391, 'AUTOMATION', 1),
(10, 'engines', '25', '35', 'ZimGold pvt ltd', 00392, 'AUTOMATION', 1),
(10, 'engines', '25', '35', 'ZimGold pvt ltd', 00393, 'AUTOMATION', 1),
(10, 'engines', '25', '35', 'ZimGold pvt ltd', 00394, 'AUTOMATION', 1),
(10, 'engines', '25', '35', 'ZimGold pvt ltd', 00395, 'AUTOMATION', 1),
(10, 'engines', '25', '35', 'ZimGold pvt ltd', 00396, 'AUTOMATION', 1),
(10, 'engines', '25', '35', 'ZimGold pvt ltd', 00397, 'AUTOMATION', 1),
(10, 'tables', '2.50', '12.5', 'hj', 00398, 'FURNITURE', 1),
(10, 'hard drives', '25', '35', 'conti pvt ltd', 00399, 'IT', 1),
(2555, 'spoon', '1', '2556', 'Showground pvt ltd', 00400, 'KITCHEN', 1),
(2, 'spoon', '1', '3', 'Econet pvt ltd', 00401, 'IT', 1);

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `id` int(11) NOT NULL,
  `company` varchar(255) NOT NULL,
  `person` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `quote_path` varchar(255) NOT NULL,
  `approve` int(1) NOT NULL,
  `notes` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`id`, `company`, `person`, `email`, `address`, `category`, `phone`, `quote_path`, `approve`, `notes`) VALUES
(103, 'IntelliNov Solutions', 'Takudzwa Alex Jeke', 'faraimrape@gmail.com', '1199 sally mugabe heights, Harare', 'KITCHEN', '717728134', 'localhost/procument/upload/', 2, ''),
(104, 'biserps technologies', 'Godness Jeke', 'Biserps@gmail.com', '1199 sally mugabe heights, Harare', 'AUTOMATION', '717728134', 'localhost/procument/upload/', 2, 'This is the best we have received their products are of a well  known brand and their price is quit reasonable.'),
(107, 'Sagehill technologies', 'Jeke Alex', 'jtseriwa@sagehilltechnologies.com', '41 Lawson Avenue Milton Park', 'IT', '773289802', 'localhost/procument/upload/', 2, 'good\r\n'),
(108, 'Power fm pvt ltd', 'Patisani Sibanda', 'paties@gmail.com', '41 Lawson Avenue Milton Park', 'AUTOMATION', '772685040', 'localhost/procument/upload/', 2, 'test'),
(110, 'biserps technologies', 'Jeke Alex', 'tes@bitech.com', '41 Lawson Avenue Milton Park', 'AUTOMATION', '772685040', 'localhost/procument/upload/', 2, 'ehe'),
(112, 'diva pvt ltd', 'rumbi shoriwa', 'diva@gmail.com', '1199 sally Mugabe heights harare', 'FURNITURE', '717728134', 'localhost/procument/upload/', 2, 'this is good'),
(116, 'archanid', 'David Makowa', 'david@gmail.com', '222, marembo, mabvuku, harare', 'FURNITURE', '717728134', 'localhost/procument/upload/', 2, 'yes this is a bood apk'),
(117, 'viva viva pvt ltd', 'Memory Kasamba', 'memo@viva.com', '41 Lawson Avenue Milton Park', 'AUTOMATION', '773289802', 'localhost/procument/upload/', 2, 'the quality is good'),
(118, 'test', 'rumbi shoriwa', 'test@econet.co.zw', '41 Lawson Avenue Milton Park', 'KITCHEN', '772685040', 'localhost/procument/upload/', 2, ''),
(119, 'company pvt', 'taku Alex', 'co@test.com', '41 Lawson Avenue Milton Park', 'AUTOMATION', '772685040', 'localhost/procument/upload/', 2, 'good\r\none'),
(120, 'jhajh', 'asdasd', 'taku@gmail.com', '41 Lawson Avenue Milton Park', 'KITCHEN', '772685040', 'localhost/procument/upload/', 2, 'asdffasd'),
(121, 'rwr', 'taku Alex', 'asd@sdk.com', '1199 sally mugabe heights, Harare', 'IT', '717728134', 'localhost/procument/upload/', 2, 'yeeeeeeeeeeeeeeees'),
(122, 'saka', 'sama', 'admin@saka.com', '41 Lawson Avenue Milton Park', 'IT', '773289802', 'localhost/procument/upload/', 2, ''),
(123, 'trisha enterprise', 'trish', 'trishie@gmail.com', '221 masasa', 'FURNITURE', '0718385336', 'localhost/procument/upload/', 2, 'the best on all requirements'),
(124, 'biserps pvt ltd', 'Fungisai Jeke', 'fungi@biserps.com', '23 workington road, harare', 'AUTOMATION', '0773474883', 'localhost/procument/upload/', 2, ''),
(125, 'hj', 'jh', 'hjj@yu.com', '1199 sally Mugabe heights harare', 'FURNITURE', '719685040', 'localhost/procument/upload/', 2, ''),
(126, 'ZimGold pvt ltd', 'Tinashe Chimunhu', 'TC@gmail.com', '34 Coronation drive, Liverpool, England', 'AUTOMATION', '0773443334', 'localhost/procument/upload/', 2, 'liverpool has the best manufacturing company in the world'),
(127, 'Showground pvt ltd', 'Forget Mafiraga', 'forget@gmail.com', '34, Rusape road, Marondera', 'KITCHEN', '0774443332', 'localhost/procument/upload/', 2, ''),
(128, 'Hummer and Tongues', 'Takudzwa Jeke', 'tino@gmail.com', '1199 newlands, Harare, Zimbabwe', 'FURNITURE', '0717728134', 'localhost/procument/upload/', 0, ''),
(129, 'Econet pvt ltd', 'Tafadzwa Nhemachena', 'ujeke@econet.com', '41 Lawson Avenue Milton Park', 'IT', '0772685040', 'localhost/procument/upload/', 2, 'good'),
(130, 'Hummer and Tongues', 'Alex Johns', 'alex@gmail.com', '34 alexandra drive, Borrowdale, Zimbabwe', 'FURNITURE', '0773337773', 'localhost/procument/upload/', 0, ''),
(131, 'Chero pvt ltd', 'Joseph Abraham', 'jose@gmail.com', '41 Lawson Avenue Milton Park', 'FURNITURE', '0773883338', 'localhost/procument/upload/', 1, 'Yes , Chero is a bit cheaper than  the rest'),
(133, 'IntelliNov', 'Willian Hazard', 'faraimrape@gmail.com', '1199 sally mugabe heights, Harare', 'AUTOMATION', '717728134', 'localhost/procument/upload/', 2, ''),
(134, 'IntelliNov', 'Willian Hazard', 'faraimrape@gmail.com', '1199 sally mugabe heights, Harare', 'AUTOMATION', '717728134', 'localhost/procument/upload/', 2, ''),
(135, 'conti pvt ltd', 'eddie kamu', 'eddie@gmail.com', '41 harare drive', 'IT', '772685040', 'localhost/procument/upload/', 2, 'good'),
(136, 'test', 'test', 'test@test.com', '1199 sally Mugabe heights harare', 'KITCHEN', 'test', 'localhost/procument/upload/', 1, 'yes\r\n'),
(137, 'IntelliNov', 'taku Alex', 'faraimrap@gmail.com', '1199 sally mugabe heights, Harare', 'KITCHEN', '717728134', 'localhost/procument/upload/', 0, ''),
(138, 'ahya', 'ahya', 'ahya@gmail.com', '2323,sally mugabe heights, Harare', 'KITCHEN', '717728134', 'localhost/procument/upload/', 0, ''),
(139, 'IntelliNov1', 'paddy', 'fhg@fgg.com', '1199 sally mugabe hei', 'KITCHEN', '71772857', 'localhost/procument/upload/', 1, 'fgghjh');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `status` enum('1','0') COLLATE utf8_unicode_ci NOT NULL DEFAULT '1',
  `secret` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `role` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `branch` varchar(10) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `password`, `phone`, `created`, `modified`, `status`, `secret`, `role`, `branch`) VALUES
(1, 'System', 'Admin', 'sys@ponai.com', '827ccb0eea8a706c4c34a16891f84e7b', '00000000', '2018-08-23 13:12:01', '2018-08-23 13:12:01', '1', '12345', 'Superuser', 'Harare'),
(11, 'reception', 'reception', 'reception@devtech.com', '827ccb0eea8a706c4c34a16891f84e7b', '+264774449714', '2018-08-26 15:01:50', '2018-08-26 15:01:50', '1', 'devtech', 'Receptionist', 'Harare'),
(31, 'Takudzwa ', 'Jeke', 'takujeke@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '0772685040', '2019-02-15 14:28:46', '2019-02-15 14:28:46', '1', '263', 'Manager', 'Harare');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_num`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD UNIQUE KEY `KEY` (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `secret` (`secret`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_num` int(5) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=402;

--
-- AUTO_INCREMENT for table `supplier`
--
ALTER TABLE `supplier`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=140;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
