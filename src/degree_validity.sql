-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 11, 2022 at 07:56 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `alsalamforlands`
--

-- --------------------------------------------------------

--
-- Table structure for table `degree_validity`
--

CREATE TABLE IF NOT EXISTS `degree_validity` (
`dvail_num` int(5) NOT NULL,
  `dvail_name` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `degree_validity`
--

INSERT INTO `degree_validity` (`dvail_num`, `dvail_name`) VALUES
(1, 'مدير'),
(2, 'موظف');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `degree_validity`
--
ALTER TABLE `degree_validity`
 ADD PRIMARY KEY (`dvail_num`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `degree_validity`
--
ALTER TABLE `degree_validity`
MODIFY `dvail_num` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
