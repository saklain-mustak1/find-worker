-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3307
-- Generation Time: Sep 08, 2020 at 04:14 PM
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
-- Table structure for table `mustak`
--

CREATE TABLE `mustak` (
  `pid` int(11) NOT NULL,
  `phone` bigint(10) NOT NULL,
  `image` varchar(300) NOT NULL,
  `experience` int(2) NOT NULL,
  `dob` date NOT NULL,
  `adress` text NOT NULL,
  `email` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mustak`
--

INSERT INTO `mustak` (`pid`, `phone`, `image`, `experience`, `dob`, `adress`, `email`) VALUES
(62, 7896565153, 'profile/profile.jpg', 2, '2000-04-25', 'rajapukhuri bagicha 784190 p.o.:chamuakhat/darrang', 'saklain123@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mustak`
--
ALTER TABLE `mustak`
  ADD PRIMARY KEY (`pid`),
  ADD UNIQUE KEY `phone` (`phone`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mustak`
--
ALTER TABLE `mustak`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
