-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 14, 2021 at 03:52 AM
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
  `category` varchar(255) NOT NULL DEFAULT 'popular',
  `video_path` varchar(255) NOT NULL DEFAULT 'The Road Trick- The Magic of Life on the Road - OFFICIAL TRAILER.mp4'
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Dumping data for table `films`
--

INSERT INTO `films` (`id`, `name`, `href`, `src`, `alt`, `category`, `video_path`) VALUES
(1, 'the road trick', 'film.php', 'img\\p1.PNG', NULL, 'popular', 'The Road Trick- The Magic of Life on the Road - OFFICIAL TRAILER.mp4'),
(2, 'wynonna earp', 'film.php', 'img\\p2.PNG', NULL, 'popular', 'The Road Trick- The Magic of Life on the Road - OFFICIAL TRAILER.mp4'),
(3, 'the ballad of hugo sanchez', 'film.php', 'img\\p3.PNG', NULL, 'popular', 'The Road Trick- The Magic of Life on the Road - OFFICIAL TRAILER.mp4'),
(4, 'grey\'s anatomy', 'film.php', 'img\\p4.PNG', NULL, 'popular', 'The Road Trick- The Magic of Life on the Road - OFFICIAL TRAILER.mp4'),
(5, 'step up 2', 'film.php', 'img\\p5.PNG', NULL, 'popular', 'The Road Trick- The Magic of Life on the Road - OFFICIAL TRAILER.mp4'),
(6, 'liquid science', 'film.php', 'img\\p6.PNG', NULL, 'popular', 'The Road Trick- The Magic of Life on the Road - OFFICIAL TRAILER.mp4'),
(7, '13 reasons why', 'film.php', 'img\\p7.PNG', NULL, 'popular', 'The Road Trick- The Magic of Life on the Road - OFFICIAL TRAILER.mp4'),
(8, 'the staircase', 'film.php', 'img\\p8.PNG', NULL, 'popular', 'The Road Trick- The Magic of Life on the Road - OFFICIAL TRAILER.mp4'),
(9, 'the vietnama war', 'film.php', 'img\\p9.PNG', NULL, 'popular', 'The Road Trick- The Magic of Life on the Road - OFFICIAL TRAILER.mp4'),
(10, 'the covenant', 'film.php', 'img\\p10.PNG', NULL, 'popular', 'The Road Trick- The Magic of Life on the Road - OFFICIAL TRAILER.mp4'),
(11, 'marcella', 'film.php', 'img\\p11.PNG', NULL, 'popular', 'The Road Trick- The Magic of Life on the Road - OFFICIAL TRAILER.mp4'),
(12, 'riverdale', 'film.php', 'img\\p12.PNG', NULL, 'popular', 'The Road Trick- The Magic of Life on the Road - OFFICIAL TRAILER.mp4'),
(13, 'luke cage', 'film.php', 'img\\t1.PNG', NULL, 'trending', 'The Road Trick- The Magic of Life on the Road - OFFICIAL TRAILER.mp4'),
(14, 'the ranch', 'film.php', 'img\\t2.PNG', NULL, 'trending', 'The Road Trick- The Magic of Life on the Road - OFFICIAL TRAILER.mp4'),
(15, 'step up 2', 'film.php', 'img\\t3.PNG', NULL, 'trending', 'The Road Trick- The Magic of Life on the Road - OFFICIAL TRAILER.mp4'),
(16, 'the ballad of hugo sanchez', 'film.php', 'img\\t4.PNG', NULL, 'trending', 'The Road Trick- The Magic of Life on the Road - OFFICIAL TRAILER.mp4'),
(17, 'the kissing booth', 'film.php', 'img\\t5.PNG', NULL, 'trending', 'The Road Trick- The Magic of Life on the Road - OFFICIAL TRAILER.mp4'),
(18, 'the night shift', 'film.php', 'img\\t6.PNG', NULL, 'trending', 'The Road Trick- The Magic of Life on the Road - OFFICIAL TRAILER.mp4'),
(19, 'hawaii five', 'film.php', 'img\\tv1.PNG', NULL, 'tv', 'The Road Trick- The Magic of Life on the Road - OFFICIAL TRAILER.mp4'),
(20, 'luke cage', 'film.php', 'img\\tv2.PNG', NULL, 'tv', 'The Road Trick- The Magic of Life on the Road - OFFICIAL TRAILER.mp4'),
(21, 'the flash', 'film.php', 'img\\tv3.PNG', NULL, 'tv', 'The Road Trick- The Magic of Life on the Road - OFFICIAL TRAILER.mp4'),
(22, 'black lightning', 'film.php', 'img\\tv4.PNG', NULL, 'tv', 'The Road Trick- The Magic of Life on the Road - OFFICIAL TRAILER.mp4'),
(23, 'new girl', 'film.php', 'img\\tv5.PNG', NULL, 'tv', 'The Road Trick- The Magic of Life on the Road - OFFICIAL TRAILER.mp4'),
(24, 'the legends of tomorrow', 'film.php', 'img\\tv6.PNG', NULL, 'tv', 'The Road Trick- The Magic of Life on the Road - OFFICIAL TRAILER.mp4'),
(25, 'agents of shield', 'film.php', 'img\\tv7.PNG', NULL, 'tv', 'The Road Trick- The Magic of Life on the Road - OFFICIAL TRAILER.mp4'),
(26, 'marlon', 'film.php', 'img\\tv8.PNG', NULL, 'tv', 'The Road Trick- The Magic of Life on the Road - OFFICIAL TRAILER.mp4'),
(27, 'cooking on high', 'film.php', 'img\\tv9.PNG', NULL, 'tv', 'The Road Trick- The Magic of Life on the Road - OFFICIAL TRAILER.mp4'),
(28, 'queer eye', 'film.php', 'img\\tv10.PNG', NULL, 'tv', 'The Road Trick- The Magic of Life on the Road - OFFICIAL TRAILER.mp4'),
(29, 'shooter', 'film.php', 'img\\tv11.PNG', NULL, 'tv', 'The Road Trick- The Magic of Life on the Road - OFFICIAL TRAILER.mp4'),
(30, 'jessica jones', 'film.php', 'img\\tv12.PNG', NULL, 'tv', 'The Road Trick- The Magic of Life on the Road - OFFICIAL TRAILER.mp4'),
(31, 'wanted', 'film.php', 'img\\m1.PNG', NULL, 'action', 'The Road Trick- The Magic of Life on the Road - OFFICIAL TRAILER.mp4'),
(32, 'the bourne untimatum', 'film.php', 'img\\m2.PNG', NULL, 'action', 'The Road Trick- The Magic of Life on the Road - OFFICIAL TRAILER.mp4'),
(33, 'guardians of the galaxy', 'film.php', 'img\\m3.PNG', NULL, 'action', 'The Road Trick- The Magic of Life on the Road - OFFICIAL TRAILER.mp4'),
(34, 'national treasure', 'film.php', 'img\\m4.PNG', NULL, 'action', 'The Road Trick- The Magic of Life on the Road - OFFICIAL TRAILER.mp4'),
(35, 'bad boys', 'film.php', 'img\\m5.PNG', NULL, 'action', 'The Road Trick- The Magic of Life on the Road - OFFICIAL TRAILER.mp4'),
(36, 'bright', 'film.php', 'img\\m6.PNG', NULL, 'action', 'The Road Trick- The Magic of Life on the Road - OFFICIAL TRAILER.mp4'),
(37, 'cooking on high', 'film.php', 'img\\o1.PNG', NULL, 'new&popular', 'The Road Trick- The Magic of Life on the Road - OFFICIAL TRAILER.mp4'),
(38, 'queer eye', 'film.php', 'img\\o2.PNG', NULL, 'new&popular', 'The Road Trick- The Magic of Life on the Road - OFFICIAL TRAILER.mp4'),
(39, 'jessica jones', 'film.php', 'img\\o3.PNG', NULL, 'new&popular', 'The Road Trick- The Magic of Life on the Road - OFFICIAL TRAILER.mp4'),
(40, 'brain on fire', 'film.php', 'img\\o4.PNG', NULL, 'new&popular', 'The Road Trick- The Magic of Life on the Road - OFFICIAL TRAILER.mp4'),
(41, 'the kissing booth', 'film.php', 'img\\o5.PNG', NULL, 'new&popular', 'The Road Trick- The Magic of Life on the Road - OFFICIAL TRAILER.mp4'),
(42, 'arrested development', 'film.php', 'img\\o6.PNG', NULL, 'new&popular', 'The Road Trick- The Magic of Life on the Road - OFFICIAL TRAILER.mp4');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(255) NOT NULL,
  `email` varchar(50) NOT NULL,
  `names` varchar(255) NOT NULL,
  `passwords` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `names`, `passwords`) VALUES
(13, 'mohamedklay918@gmail.com', 'mohamed klay', '$2y$10$RRUKriz/nAu406ckMe6Pbeq4o2XSUn/teWsr/MZyhXp71xnN9vCBC'),
(14, 'moaazw5799@gmail.com', 'afndm', '$2y$10$WzzwLsed9QZ6x3L2chFDK.I/4CZwhsGrk2lnNzFElJMXp5UaDOV.m'),
(15, 'moaaz5799@gmail.com', 'Moaaz Mansour', '$2y$10$.AGvDRY8Wf3Eky/AFrLYjObUhcR4DivJj8LGWfckaWbiIPB9pgjHO');

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
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
