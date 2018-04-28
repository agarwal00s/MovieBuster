-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 28, 2018 at 05:45 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `movie`
--

-- --------------------------------------------------------

--
-- Table structure for table `movie_details`
--

CREATE TABLE `movie_details` (
  `movie_name` varchar(20) NOT NULL,
  `day_no` int(1) NOT NULL,
  `movie_time` time NOT NULL,
  `theater_name` varchar(20) NOT NULL,
  `rating` decimal(2,1) DEFAULT NULL,
  `seat_booked` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `movie_details`
--

INSERT INTO `movie_details` (`movie_name`, `day_no`, `movie_time`, `theater_name`, `rating`, `seat_booked`) VALUES
('Aquaman', 1, '04:20:00', 'Forum Mall', '4.0', 'A3.A4'),
('Aquaman', 1, '05:30:00', 'Cinepolis', '4.0', 'A6.A7'),
('Aquaman', 1, '11:00:00', 'Forum Mall', '4.0', 'B3.B4'),
('Aquaman', 2, '04:00:00', 'Cinepolis', '4.0', 'C1.C2'),
('Aquaman', 2, '11:00:00', 'Cinepolis', '4.0', 'C4.'),
('AvengersInfinityWar', 1, '11:20:00', 'Lake Mall', '4.5', 'B1.B2'),
('Interstellar', 1, '11:00:00', 'Forum Mall', '4.9', 'A1.A2.A3'),
('JusticeLeague', 1, '11:20:00', 'Cinepolis', '4.2', 'A1.C3'),
('JusticeLeague', 1, '15:40:00', 'Lake Mall', '4.2', 'A1.A2'),
('JusticeLeague', 2, '04:50:00', 'Cinepolis', '4.2', 'C7.C8');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `movie_details`
--
ALTER TABLE `movie_details`
  ADD PRIMARY KEY (`movie_name`,`day_no`,`movie_time`,`theater_name`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
