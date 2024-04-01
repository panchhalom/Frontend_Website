-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 21, 2024 at 07:02 AM
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
-- Database: `pass`
--

-- --------------------------------------------------------

--
-- Table structure for table `cont`
--

CREATE TABLE `cont` (
  `id` int(11) NOT NULL,
  `username` text NOT NULL,
  `email` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cont`
--

INSERT INTO `cont` (`id`, `username`, `email`) VALUES
(1, 'pass', 'ss@gmail.com'),
(2, 'om pacnhal', 'om@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `tabs`
--

CREATE TABLE `tabs` (
  `id` int(11) NOT NULL,
  `username` text NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tabs`
--

INSERT INTO `tabs` (`id`, `username`, `email`, `password`) VALUES
(1, 'pass', 'ksj@gmail.com', '123'),
(2, 'om', 'om@gmail.com', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cont`
--
ALTER TABLE `cont`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tabs`
--
ALTER TABLE `tabs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cont`
--
ALTER TABLE `cont`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tabs`
--
ALTER TABLE `tabs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
