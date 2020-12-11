-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 10, 2020 at 12:52 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cinema`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `bid` int(11) NOT NULL,
  `movieid` varchar(50) NOT NULL,
  `name` varchar(123) NOT NULL,
  `username` varchar(50) NOT NULL,
  `seats` varchar(50) NOT NULL,
  `seatsinfo` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`bid`, `movieid`, `name`, `username`, `seats`, `seatsinfo`) VALUES
(20, '16', 'War', 'vinay', '4', '31,32,33,34');

-- --------------------------------------------------------

--
-- Table structure for table `movie`
--

CREATE TABLE `movie` (
  `id` int(10) NOT NULL,
  `name` varchar(40) NOT NULL,
  `genre` varchar(40) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `start` varchar(40) NOT NULL,
  `end` varchar(40) NOT NULL,
  `price` varchar(40) NOT NULL,
  `image` varchar(500) NOT NULL,
  `availability` int(10) NOT NULL DEFAULT 100,
  `seats` varchar(300) NOT NULL DEFAULT '0000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `movie`
--

INSERT INTO `movie` (`id`, `name`, `genre`, `description`, `start`, `end`, `price`, `image`, `availability`, `seats`) VALUES
(16, 'War', 'Action', 'War is a family and comedy movie.', '1:00', '4:00', '150', 'https://upload.wikimedia.org/wikipedia/en/thumb/6/6f/War_official_poster.jpg/220px-War_official_poster.jpg', 100, '0000000000000000000000000000000111100000000000000000000000000000000000000000000000000000000000000000'),
(17, 'Malang', 'Love', 'Malang is a very good movie.', '10:00', '1:00', '180', 'https://m.media-amazon.com/images/M/MV5BMDJiMDQyYTItZTA0NC00NmVlLTg3NGItMjQwOWI2ZjY0MmE5XkEyXkFqcGdeQXVyOTAzMTc2MjA@._V1_.jpg', 100, '0000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000'),
(18, 'Sanju', 'comedy', 'Sanju is a family movie', '5:00', '8:00', '200', 'https://upload.wikimedia.org/wikipedia/en/8/85/Sanju_poster.jpg', 100, '0000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `name` varchar(45) DEFAULT NULL,
  `username` varchar(45) DEFAULT NULL,
  `password` varchar(45) DEFAULT NULL,
  `phone` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`name`, `username`, `password`, `phone`) VALUES
('', '', '', ''),
('vinay', 'vinay', 'ludhrani', '9527404216');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`bid`);

--
-- Indexes for table `movie`
--
ALTER TABLE `movie`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `bid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `movie`
--
ALTER TABLE `movie`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
