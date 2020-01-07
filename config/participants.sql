-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 27, 2019 at 11:55 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `retreat_participants`
--

-- --------------------------------------------------------

--
-- Table structure for table `campus`
--

CREATE TABLE IF NOT EXISTS `campus` (
`id` int(11) NOT NULL,
  `surname` varchar(250) NOT NULL DEFAULT 'field not set',
  `otherName` varchar(250) NOT NULL DEFAULT 'field not set',
  `H_address` varchar(250) NOT NULL DEFAULT 'field not set',
  `phonenumber` varchar(11) NOT NULL DEFAULT '0',
  `isMember` varchar(50) NOT NULL DEFAULT '0',
  `district` varchar(250) NOT NULL DEFAULT 'field not set',
  `C_location` varchar(250) NOT NULL DEFAULT 'field not set',
  `denomination` varchar(280) NOT NULL DEFAULT 'field not set',
  `gender` varchar(90) NOT NULL DEFAULT 'field not set',
  `age` varchar(50) NOT NULL DEFAULT '0',
  `section` varchar(70) NOT NULL DEFAULT 'field not set',
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


--
-- Indexes for dumped tables
--

--
-- Indexes for table `campus`
--
ALTER TABLE `campus`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `campus`
--
ALTER TABLE `campus`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
