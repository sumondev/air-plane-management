-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 26, 2017 at 03:26 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bd_airline`
--

-- --------------------------------------------------------

--
-- Table structure for table `reg`
--

CREATE TABLE `reg` (
  `user_id` int(10) NOT NULL,
  `user_name` varchar(30) NOT NULL,
  `fst_name` varchar(30) NOT NULL,
  `lst_name` varchar(30) NOT NULL,
  `mbl_num` int(14) NOT NULL,
  `city` varchar(30) NOT NULL,
  `h_num` varchar(30) NOT NULL,
  `p_ads` varchar(30) NOT NULL,
  `pass` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reg`
--

INSERT INTO `reg` (`user_id`, `user_name`, `fst_name`, `lst_name`, `mbl_num`, `city`, `h_num`, `p_ads`, `pass`) VALUES
(1, 'Mahfuz_77', 'Mahfuz', 'Sozeeb', 1768094971, 'Dhaka', '90/A', 'Maherpur', '1234'),
(2, 'Mahfuz_77', 'Mahfuz', 'Sozeeb', 1768094971, 'Dhaka', '90/A', 'Maherpur', '5214'),
(5, 'Mahfuz_77', 'Mahfuz', 'Sozeeb', 1768094971, 'Dhaka', '90/A', 'Maherpur', '55113'),
(6, 'Mahfuz_77', 'Mahfuz', 'Sozeeb', 1768094971, 'Dhaka', '90/A', 'Maherpur', '564465'),
(7, 'Sumon12', 'Sumon', 'Islam', 1455666, 'Dhaka', '25/D', 'Mirpur', '56921');

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
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
