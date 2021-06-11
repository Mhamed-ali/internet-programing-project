-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 11, 2021 at 11:32 PM
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
  `name` varchar(50) NOT NULL,
  `href` varchar(255) DEFAULT NULL,
  `src` varchar(255) DEFAULT NULL,
  `alt` varchar(255) DEFAULT NULL,
  `category` varchar(255) NOT NULL DEFAULT 'popular'
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Dumping data for table `films`
--

INSERT INTO `films` (`id`, `name`, `href`, `src`, `alt`, `category`) VALUES
(1, 'the road trick', NULL, 'img\\p1.PNG', NULL, 'popular'),
(2, 'wynonna earp', NULL, 'img\\p2.PNG', NULL, 'popular'),
(3, 'the ballad of hugo sanchez', NULL, 'img\\p3.PNG', NULL, 'popular'),
(4, 'grey\'s anatomy', NULL, 'img\\p4.PNG', NULL, 'popular'),
(5, 'step up 2', NULL, 'img\\p5.PNG', NULL, 'popular'),
(6, 'liquid science', NULL, 'img\\p6.PNG', NULL, 'popular'),
(7, '13 reasons why', NULL, 'img\\p7.PNG', NULL, 'popular'),
(8, 'the staircase', NULL, 'img\\p8.PNG', NULL, 'popular'),
(9, 'the vietnama war', NULL, 'img\\p9.PNG', NULL, 'popular'),
(10, 'the covenant', NULL, 'img\\p10.PNG', NULL, 'popular'),
(11, 'marcella', NULL, 'img\\p11.PNG', NULL, 'popular'),
(12, 'riverdale', NULL, 'img\\p12.PNG', NULL, 'popular'),
(13, 'luke cage', NULL, 'img\\t1.PNG', NULL, 'trending'),
(14, 'the ranch', NULL, 'img\\t2.PNG', NULL, 'trending'),
(15, 'step up 2', NULL, 'img\\t3.PNG', NULL, 'trending'),
(16, 'the ballad of hugo sanchez', NULL, 'img\\t4.PNG', NULL, 'trending'),
(17, 'the kissing booth', NULL, 'img\\t5.PNG', NULL, 'trending'),
(18, 'the night shift', NULL, 'img\\t6.PNG', NULL, 'trending'),
(19, 'hawaii five', NULL, 'img\\tv1.PNG', NULL, 'tv'),
(20, 'luke cage', NULL, 'img\\tv2.PNG', NULL, 'tv'),
(21, 'the flash', NULL, 'img\\tv3.PNG', NULL, 'tv'),
(22, 'black lightning', NULL, 'img\\tv4.PNG', NULL, 'tv'),
(23, 'new girl', NULL, 'img\\tv5.PNG', NULL, 'tv'),
(24, 'the legends of tomorrow', NULL, 'img\\tv6.PNG', NULL, 'tv'),
(25, 'agents of shield', NULL, 'img\\tv7.PNG', NULL, 'tv'),
(26, 'marlon', NULL, 'img\\tv8.PNG', NULL, 'tv'),
(27, 'cooking on high', NULL, 'img\\tv9.PNG', NULL, 'tv'),
(28, 'queer eye', NULL, 'img\\tv10.PNG', NULL, 'tv'),
(29, 'shooter', NULL, 'img\\tv11.PNG', NULL, 'tv'),
(30, 'jessica jones', NULL, 'img\\tv12.PNG', NULL, 'tv'),
(31, 'wanted', NULL, 'img\\m1.PNG', NULL, 'action'),
(32, 'the bourne untimatum', NULL, 'img\\m2.PNG', NULL, 'action'),
(33, 'guardians of the galaxy', NULL, 'img\\m3.PNG', NULL, 'action'),
(34, 'national treasure', NULL, 'img\\m4.PNG', NULL, 'action'),
(35, 'bad boys', NULL, 'img\\m5.PNG', NULL, 'action'),
(36, 'bright', NULL, 'img\\m6.PNG', NULL, 'action'),
(37, 'cooking on high', NULL, 'img\\o1.PNG', NULL, 'new&popular'),
(38, 'queer eye', NULL, 'img\\o2.PNG', NULL, 'new&popular'),
(39, 'jessica jones', NULL, 'img\\o3.PNG', NULL, 'new&popular'),
(40, 'brain on fire', NULL, 'img\\o4.PNG', NULL, 'new&popular'),
(41, 'the kissing booth', NULL, 'img\\o5.PNG', NULL, 'new&popular'),
(42, 'arrested development', NULL, 'img\\o6.PNG', NULL, 'new&popular');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(255) NOT NULL,
  `email` varchar(50) NOT NULL,
  `passwords` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `passwords`) VALUES
(1, 'mohamedklay918@gmail.com', 'mm11kk99'),
(6, 'mohamedklay9118@gmail.com', 'aa11112'),
(7, 'mohamedklay91qq8@gmail.com', 'aa44bb22'),
(8, 'mohamedشklay9ش18@gmail.com', 'سشي'),
(9, 'mohamedشklay9ش1ش8@gmail.com', 'شسيشسي');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `films`
--
ALTER TABLE `films`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `films`
--
ALTER TABLE `films`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
