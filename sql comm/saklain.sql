-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3307
-- Generation Time: Sep 08, 2020 at 04:15 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `manymoni`
--

-- --------------------------------------------------------

--
-- Table structure for table `saklain`
--

CREATE TABLE `saklain` (
  `id` int(11) NOT NULL,
  `cntrycode` int(4) NOT NULL,
  `phone` bigint(10) NOT NULL,
  `name` text NOT NULL,
  `passwrd` varchar(25) NOT NULL,
  `gender` char(6) NOT NULL,
  `age` int(2) NOT NULL,
  `designation` text NOT NULL,
  `postcode` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `saklain`
--

INSERT INTO `saklain` (`id`, `cntrycode`, `phone`, `name`, `passwrd`, `gender`, `age`, `designation`, `postcode`) VALUES
(102, 91, 7896565153, 'saklain Mustak', 'q123456', 'male', 20, 'Customer', 784190);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `saklain`
--
ALTER TABLE `saklain`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `phone` (`phone`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `saklain`
--
ALTER TABLE `saklain`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=104;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
