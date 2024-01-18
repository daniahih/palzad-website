-- phpMyAdmin SQL Dump
-- version 4.9.5deb1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 06, 2020 at 03:37 PM
-- Server version: 8.0.20-0ubuntu0.19.10.1
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `home_controller`
--

-- --------------------------------------------------------

--
-- Table structure for table `notfiactions`
--

CREATE TABLE `notfiactions` (
  `id` int NOT NULL,
  `value_type` varchar(33) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `value_amount` varchar(33) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notfiactions`
--

INSERT INTO `notfiactions` (`id`, `value_type`, `value_amount`) VALUES
(1, 'master_bedroom', '1'),
(2, 'kids_bedroom', '0'),
(3, 'living_room', '1'),
(4, 'kitchen', '0'),
(5, 'bathroom1', '0'),
(6, 'bathroom2', '1'),
(7, 'shutter', '0'),
(8, 'found_motion', '1'),
(9, 'found_gas', '1'),
(10, 'humidity_val', '44'),
(11, 'temperture_val', '22');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `notfiactions`
--
ALTER TABLE `notfiactions`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `notfiactions`
--
ALTER TABLE `notfiactions`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
