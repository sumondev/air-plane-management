-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 29, 2017 at 04:43 PM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bd_airline1`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE IF NOT EXISTS `booking` (
  `plane_name` varchar(30) NOT NULL,
  `booked_seat` varchar(30) NOT NULL,
  `user_name` varchar(30) NOT NULL,
  `cost` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `plane`
--

CREATE TABLE IF NOT EXISTS `plane` (
  `serial_no` int(10) NOT NULL,
  `plane_name` varchar(30) NOT NULL,
  `quantity` int(30) NOT NULL,
  `weight_capacity` double NOT NULL,
  `source` varchar(30) NOT NULL,
  `dest` varchar(30) NOT NULL,
  `dep_time` time NOT NULL,
  `start_date` date NOT NULL,
  `plane_status` varchar(20) NOT NULL,
  `seat_cost` float NOT NULL,
  `pilot_id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `plane`
--

INSERT INTO `plane` (`serial_no`, `plane_name`, `quantity`, `weight_capacity`, `source`, `dest`, `dep_time`, `start_date`, `plane_status`, `seat_cost`, `pilot_id`) VALUES
(1001, 'aero2', 200, 2000, 'dhaka', 'ctg', '00:00:14', '2016-12-12', 'Exiclent', 60, 800),
(2001, 'air-flight', 500, 3000, 'dhaka', 'rajshahi', '08:00:00', '2011-12-11', 'good', 10000, 2222),
(6324, 'bd_draghon', 1000, 5000, 'Dhaka', 'US', '09:00:00', '2016-10-11', 'Excelent', 50000, 9999),
(3343, 'BD-HAWK', 2000, 10000, 'Dhaka', 'Dubai', '10:00:00', '2014-10-11', 'Excelent', 30000, 1111),
(8778, 'Sea Beast', 1500, 4000, 'Dhaka', 'United Arab Amirat', '11:00:00', '2015-10-11', 'Excelent', 30000, 6757);

-- --------------------------------------------------------

--
-- Table structure for table `reg`
--

CREATE TABLE IF NOT EXISTS `reg` (
  `user_id` int(10) NOT NULL,
  `user_name` varchar(30) NOT NULL,
  `fst_name` varchar(30) NOT NULL,
  `lst_name` varchar(30) NOT NULL,
  `mbl_num` int(14) NOT NULL,
  `city` varchar(30) NOT NULL,
  `h_num` varchar(30) NOT NULL,
  `p_ads` varchar(30) NOT NULL,
  `pass` varchar(30) NOT NULL,
  `gender` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reg`
--

INSERT INTO `reg` (`user_id`, `user_name`, `fst_name`, `lst_name`, `mbl_num`, `city`, `h_num`, `p_ads`, `pass`, `gender`) VALUES
(1, 'sumon123', 'sumon', 'islam', 1963065605, 'Dhaka', '23/15', 'Naogaon,Rajshahi', 'sumon111', 'male'),
(2, 'sumon123', 'reervewv', 'rvewrvwrv', 34534534, 'dvadsvdv', 'advasvv', 'hjghjhgj', 'vadv', 'male'),
(3, 'sumon123', 'reervewv', 'rvewrvwrv', 34534534, 'dvadsvdv', 'advasvv', 'hjghjhgj', ';l;l;l;l;', 'male'),
(4, '', 'reervewv', 'rvewrvwrv', 34534534, 'dvadsvdv', 'advasvv', 'hjghjhgj', ';l;l;l;l;', 'male'),
(5, 'sdgdbd', 'bsdbsdb', 'dbsdb', 535, 'sdasdba', 'svsab', 'hjghjhgj', ';l;l;l;l;', 'male'),
(6, 'sumon123', 'eFWEFWEF', 'WEWE', 543464, 'csdvsdv', 'sdvsdvsd', 'hjghjhgj', ';l;l;l;l;sdvsDV', 'male');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `reg`
--
ALTER TABLE `reg`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `reg`
--
ALTER TABLE `reg`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
