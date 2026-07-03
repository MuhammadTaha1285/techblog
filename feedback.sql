-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 03, 2026 at 09:30 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `techblog`
--

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(4) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `message` text NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `email`, `phone`, `message`, `create_at`) VALUES
(1, 'Muhammad Taha', 'm63676458@gmail.com', '0303643584', 'How are you', '2026-06-24 07:54:38'),
(2, 'Muhammad', 'muhamamd@gmail.com', '5555555', 'I am good', '2026-06-24 07:56:35'),
(3, 'Muhammad Taha Riaz', 'm63676458@gmail.com', '0309211456', 'Bye Bye', '2026-06-29 06:12:46'),
(4, 'Muhammad', 'muhamamd@gmail.com', '5555555', 'asd', '2026-07-01 06:14:15'),
(5, 'Muhammad', 'muhamamd@gmail.com', '5555555', 'asd', '2026-07-01 06:14:51'),
(6, 'Muhammad', 'muhamamd@gmail.com', '5555555', 'asd', '2026-07-01 06:15:20'),
(7, 'Muhammad', 'muhamamd@gmail.com', '5555555', 'asd', '2026-07-01 06:15:24'),
(8, 'Jogi', 'jogi@gmail.com', '03158764219', 'Hi ', '2026-07-03 06:10:44'),
(9, 'Jogi12', 'jogi12@gmail.com', '351303465132498', 'asdsdsacxzcwer evrgvgxcvxs.....................', '2026-07-03 07:23:39');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
