-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 22, 2024 at 12:18 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `carbonfootprint`
--

-- --------------------------------------------------------

--
-- Table structure for table `carbon_footprint_data`
--

CREATE TABLE `carbon_footprint_data` (
  `id` int(11) NOT NULL,
  `transportation` varchar(255) DEFAULT NULL,
  `partying` varchar(255) DEFAULT NULL,
  `consumption` varchar(255) DEFAULT NULL,
  `energy` varchar(255) DEFAULT NULL,
  `food` varchar(255) DEFAULT NULL,
  `waste` varchar(255) DEFAULT NULL,
  `water` varchar(255) DEFAULT NULL,
  `carbon_total` varchar(255) DEFAULT NULL,
  `carbon_total_percentage` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `carbon_footprint_data`
--
ALTER TABLE `carbon_footprint_data`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `carbon_footprint_data`
--
ALTER TABLE `carbon_footprint_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
