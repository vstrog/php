-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 11, 2019 at 11:45 AM
-- Server version: 5.6.41
-- PHP Version: 5.6.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tableuser`
--

-- --------------------------------------------------------

--
-- Table structure for table `tableuser`
--

CREATE TABLE `tableuser` (
  `id` int(11) NOT NULL,
  `Name` varchar(120) NOT NULL,
  `PhoneNumber` char(11) NOT NULL,
  `Emailid` varchar(150) NOT NULL,
  `PostingDate` varchar(14) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tableuser`
--

INSERT INTO `tableuser` (`id`, `Name`, `PhoneNumber`, `Emailid`, `PostingDate`) VALUES
(4, 'Anat', '371537152', 'anat@gmail.com', '6/22/2019 7:01'),
(5, 'Segev', '564234234', 'test@test.com', '6/25/2019 7:01'),
(6, 'Demo', '653456789', 'test@test.com', '8/28/2019 7:01'),
(7, 'User', '811662362', 'test@test.com', '7/1/2019 7:01'),
(8, 'Test', '952622180.5', 'test@test.com', '7/4/2019 7:01'),
(9, 'Johny', '1093581999', 'test@test.com', '7/7/2019 7:01'),
(10, 'Amit', '1234541818', 'test432@test.com', '7/10/2019 7:01'),
(11, 'Johm', '1375501636', 'test@test.com', '7/18/2019 7:01'),
(12, 'Herry', '1516461455', 'teffffhfbt@test.com', '7/16/2019 7:01'),
(13, 'Alex', '1657421273', 'test@test.com', '7/19/2019 7:01'),
(14, 'qwerty', '1798381092', '9y69540yoj@gmail.com', '7/22/2019 7:01'),
(15, 'Dudu', '1939340910', 'test@test.com', '7/25/2019 7:01'),
(16, 'Aviel', '2080300729', 'israeli@gmail.com', '7/28/2019 7:01'),
(17, 'ABX', '2221260547', 'test@test.com', '7/31/2019 7:01'),
(18, 'Shir', '2362220366', 'gjht84hjg@gmail.com', '8/3/2019 7:01'),
(19, 'Yaniv', '5555555555', 'yaniv@gmail.com', '11/11/2019 10:');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tableuser`
--
ALTER TABLE `tableuser`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tableuser`
--
ALTER TABLE `tableuser`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
