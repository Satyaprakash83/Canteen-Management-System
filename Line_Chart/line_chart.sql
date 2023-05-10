-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 09, 2023 at 01:38 PM
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
-- Database: `line_chart`
--

-- --------------------------------------------------------

--
-- Table structure for table `chart1`
--

CREATE TABLE `chart1` (
  `chart_id` int(11) NOT NULL,
  `month` varchar(255) NOT NULL,
  `rice` int(11) NOT NULL,
  `dal` int(11) NOT NULL,
  `chicken` int(11) NOT NULL,
  `paneer` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `chart1`
--

INSERT INTO `chart1` (`chart_id`, `month`, `rice`, `dal`, `chicken`, `paneer`) VALUES
(8, 'jan', 8, 6, 7, 5),
(9, 'feb', 7, 7, 9, 8),
(10, 'march', 8, 7, 9, 5),
(11, 'april', 10, 9, 6, 8),
(12, 'may', 7, 5, 10, 9);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chart1`
--
ALTER TABLE `chart1`
  ADD PRIMARY KEY (`chart_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chart1`
--
ALTER TABLE `chart1`
  MODIFY `chart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
