-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 28, 2016 at 08:05 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `user`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `GetAll`()
BEGIN
   SELECT *  FROM user_table;
   END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `user_table`
--

CREATE TABLE IF NOT EXISTS `user_table` (
`id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `about` text NOT NULL,
  `dob` date NOT NULL,
  `salary` int(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_table`
--

INSERT INTO `user_table` (`id`, `name`, `country`, `email`, `mobile`, `about`, `dob`, `salary`) VALUES
(1, 'vijay', 'India', 'vijay@gmail.com', '8861223320', 'i am php developer', '2015-11-12', 2500),
(2, 'vrushabh', 'India', 'vrushabh@gmail.com', '7766554433', 'I am java developer', '2016-08-17', 3000),
(3, 'prashant', 'Spain', 'prashant@gmail.com', '8899776656', 'I am tecnical assistant', '2016-08-01', 1000),
(4, 'amar', 'Sri Lanka', 'amar@gmail.com', '7788998876', 'I am developer', '2016-07-06', 1500),
(5, 'rahul', 'Sri Lanka', 'rahul@gmail.com', '7788334456', 'i am technical developer', '2016-04-21', 7000),
(6, 'anil', 'India', 'anil@gmail.com', '9933224456', 'I am android developer', '2016-08-19', 500),
(7, 'akash', 'india', 'viajy@gmail.com', '7787897867', 'me', '2016-08-09', 3000),
(8, 'Harish', 'India', 'harish@archon.in', '8861223320', 'Software engineer', '2016-07-14', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user_table`
--
ALTER TABLE `user_table`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user_table`
--
ALTER TABLE `user_table`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
