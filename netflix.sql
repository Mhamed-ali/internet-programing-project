-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 11, 2021 at 06:20 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `netflix`
--

-- --------------------------------------------------------

--
-- Table structure for table `films`
--

DROP TABLE IF EXISTS `films`;
CREATE TABLE `films` (
  `id` int(255) NOT NULL,
  `href` varchar(255) DEFAULT NULL,
  `src` varchar(255) DEFAULT NULL,
  `alt` varchar(255) DEFAULT NULL,
  `category` varchar(255) NOT NULL DEFAULT 'popular'
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Dumping data for table `films`
--

INSERT INTO `films` (`id`, `href`, `src`, `alt`, `category`) VALUES
(1, NULL, 'img\\p1.PNG', NULL, 'popular'),
(2, NULL, 'img\\p2.PNG', NULL, 'popular'),
(3, NULL, 'img\\p3.PNG', NULL, 'popular'),
(4, NULL, 'img\\p4.PNG', NULL, 'popular'),
(5, NULL, 'img\\p5.PNG', NULL, 'popular'),
(6, NULL, 'img\\p6.PNG', NULL, 'popular'),
(7, NULL, 'img\\p7.PNG', NULL, 'popular'),
(8, NULL, 'img\\p8.PNG', NULL, 'popular'),
(9, NULL, 'img\\p9.PNG', NULL, 'popular'),
(10, NULL, 'img\\p10.PNG', NULL, 'popular'),
(11, NULL, 'img\\p11.PNG', NULL, 'popular'),
(12, NULL, 'img\\p12.PNG', NULL, 'popular'),
(13, NULL, 'img\\t1.PNG', NULL, 'trending'),
(14, NULL, 'img\\t2.PNG', NULL, 'trending'),
(15, NULL, 'img\\t3.PNG', NULL, 'trending'),
(16, NULL, 'img\\t4.PNG', NULL, 'trending'),
(17, NULL, 'img\\t5.PNG', NULL, 'trending'),
(18, NULL, 'img\\t6.PNG', NULL, 'trending'),
(19, NULL, 'img\\tv1.PNG', NULL, 'tv'),
(20, NULL, 'img\\tv2.PNG', NULL, 'tv'),
(21, NULL, 'img\\tv3.PNG', NULL, 'tv'),
(22, NULL, 'img\\tv4.PNG', NULL, 'tv'),
(23, NULL, 'img\\tv5.PNG', NULL, 'tv'),
(24, NULL, 'img\\tv6.PNG', NULL, 'tv'),
(25, NULL, 'img\\tv7.PNG', NULL, 'tv'),
(26, NULL, 'img\\tv8.PNG', NULL, 'tv'),
(27, NULL, 'img\\tv9.PNG', NULL, 'tv'),
(28, NULL, 'img\\tv10.PNG', NULL, 'tv'),
(29, NULL, 'img\\tv11.PNG', NULL, 'tv'),
(30, NULL, 'img\\tv12.PNG', NULL, 'tv'),
(31, NULL, 'img\\m1.PNG', NULL, 'action'),
(32, NULL, 'img\\m2.PNG', NULL, 'action'),
(33, NULL, 'img\\m3.PNG', NULL, 'action'),
(34, NULL, 'img\\m4.PNG', NULL, 'action'),
(35, NULL, 'img\\m5.PNG', NULL, 'action'),
(36, NULL, 'img\\m6.PNG', NULL, 'action'),
(37, NULL, 'img\\o1.PNG', NULL, 'new&popular'),
(38, NULL, 'img\\o2.PNG', NULL, 'new&popular'),
(39, NULL, 'img\\o3.PNG', NULL, 'new&popular'),
(40, NULL, 'img\\o4.PNG', NULL, 'new&popular'),
(41, NULL, 'img\\o5.PNG', NULL, 'new&popular'),
(42, NULL, 'img\\o6.PNG', NULL, 'new&popular');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `films`
--
ALTER TABLE `films`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `films`
--
ALTER TABLE `films`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;