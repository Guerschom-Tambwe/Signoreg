-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 27, 2021 at 06:14 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `signoreg`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(8) NOT NULL,
  `name` varchar(55) DEFAULT NULL,
  `email_id` varchar(55) DEFAULT NULL,
  `phone` varchar(55) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `name`, `email_id`, `phone`, `password`) VALUES
(1, 'Tiger Woods', 'tigerwoods@gmail.com', '0619760722', 'a90f4589534f75e93dbccd20329ed946'),
(2, 'George  Washington', 'george@gmail.com', '0744534716', '9b306ab04ef5e25f9fb89c998a6aedab'),
(3, 'James Morgan', 'jamesmorgan@gmail.com', '0044534716', 'a93be9137f78f4c64d3399d49466e4c8'),
(4, 'candy Morry', 'candy@gmail.com', '6916269952', '5f24438ae1b09a374ccb0fd696940f09'),
(5, 'Coffee Mayor', 'coffee@hotchocolate.net', '7744534716', 'c378985d629e99a4e86213db0cd5e70d'),
(6, 'Coby Briant', 'corbybriant@gmail.com', '0792964690', '9705299e7203859d150a36b049dd9d53');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
