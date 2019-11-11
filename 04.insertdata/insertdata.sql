-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 11, 2019 at 12:21 PM
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
-- Database: `insertdata`
--

-- --------------------------------------------------------

--
-- Table structure for table `insertdata`
--

CREATE TABLE `insertdata` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contactno` bigint(20) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `education` varchar(255) NOT NULL,
  `addrss` longtext NOT NULL,
  `posting_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `insertdata`
--

INSERT INTO `insertdata` (`id`, `name`, `email`, `contactno`, `gender`, `education`, `addrss`, `posting_date`) VALUES
(6, 'John', 'johndoe@gmail.com', 4235235235, 'Male', 'academ', 'Elem 99 ex', '2019-11-11 09:20:30'),
(7, 'Joan', 'Joan@gmail.com', 6746746746, 'Female', 'full', '67 freddy', '2019-11-11 09:20:54');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `insertdata`
--
ALTER TABLE `insertdata`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `insertdata`
--
ALTER TABLE `insertdata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
