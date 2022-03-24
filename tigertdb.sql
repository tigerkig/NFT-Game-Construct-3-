-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 13, 2022 at 07:24 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tigertdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `game_score`
--

CREATE TABLE `game_score` (
  `score_id` int(2) NOT NULL,
  `username` char(50) NOT NULL,
  `loyalties_point` char(50) NOT NULL,
  `gem_total` int(3) NOT NULL,
  `hca_point_total` int(3) NOT NULL,
  `save_game_levels` int(11) NOT NULL,
  `update_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `game_score`
--

INSERT INTO `game_score` (`score_id`, `username`, `loyalties_point`, `gem_total`, `hca_point_total`, `save_game_levels`, `update_date`) VALUES
(1, 'User19435', '2150.12 HCA', 98, 98, 1, '2022-03-13 08:16:59');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `game_score`
--
ALTER TABLE `game_score`
  ADD PRIMARY KEY (`score_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `game_score`
--
ALTER TABLE `game_score`
  MODIFY `score_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
