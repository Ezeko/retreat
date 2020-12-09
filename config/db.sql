-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: fdb29.awardspace.net
-- Generation Time: Dec 09, 2020 at 03:46 PM
-- Server version: 5.7.20-log
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `3672409_participants`
--

-- --------------------------------------------------------

--
-- Table structure for table `campus`
--

CREATE TABLE `campus` (
  `id` int(11) NOT NULL,
  `surname` varchar(250) NOT NULL DEFAULT 'field not set',
  `otherName` varchar(250) NOT NULL DEFAULT 'field not set',
  `H_address` varchar(250) NOT NULL DEFAULT 'field not set',
  `phonenumber` varchar(11) NOT NULL DEFAULT '0',
  `isMember` varchar(50) NOT NULL DEFAULT '0',
  `district` varchar(250) NOT NULL DEFAULT 'field not set',
  `prayer_request` varchar(150) NOT NULL,
  `C_location` varchar(250) NOT NULL DEFAULT 'field not set',
  `denomination` varchar(280) NOT NULL DEFAULT 'field not set',
  `gender` varchar(90) NOT NULL DEFAULT 'field not set',
  `institution` varchar(150) NOT NULL,
  `faculty_department` varchar(100) NOT NULL,
  `currentLevel` varchar(50) NOT NULL,
  `age` varchar(50) NOT NULL DEFAULT '0',
  `section` varchar(70) NOT NULL DEFAULT 'field not set',
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `participants`
--

CREATE TABLE `participants` (
  `id` int(11) NOT NULL,
  `surname` varchar(250) NOT NULL DEFAULT 'field not set',
  `otherName` varchar(250) NOT NULL DEFAULT 'field not set',
  `H_address` varchar(250) NOT NULL DEFAULT 'field not set',
  `phonenumber` varchar(11) NOT NULL DEFAULT '0',
  `isMember` varchar(50) NOT NULL DEFAULT '0',
  `district` varchar(250) NOT NULL DEFAULT 'field not set',
  `prayer_request` varchar(150) NOT NULL,
  `C_location` varchar(250) NOT NULL DEFAULT 'field not set',
  `denomination` varchar(280) NOT NULL DEFAULT 'field not set',
  `gender` varchar(90) NOT NULL DEFAULT 'field not set',
  `institution` varchar(150) NOT NULL,
  `faculty_department` varchar(100) NOT NULL,
  `currentLevel` varchar(50) NOT NULL,
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
  ADD PRIMARY KEY (`id`),
  ADD KEY `C_location` (`C_location`),
  ADD KEY `district` (`district`);

--
-- Indexes for table `participants`
--
ALTER TABLE `participants`
  ADD PRIMARY KEY (`id`),
  ADD KEY `C_location` (`C_location`),
  ADD KEY `district` (`district`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `campus`
--
ALTER TABLE `campus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `participants`
--
ALTER TABLE `participants`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
