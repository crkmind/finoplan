-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 16, 2020 at 03:51 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `finoplan`
--

-- --------------------------------------------------------

--
-- Table structure for table `excategory`
--

CREATE TABLE `excategory` (
  `id` int(30) NOT NULL,
  `name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `excategory`
--

INSERT INTO `excategory` (`id`, `name`) VALUES
(11, 'Grocery'),
(12, 'Snacks'),
(13, 'Eating Out'),
(14, 'Household'),
(15, 'General'),
(16, 'Entertainment'),
(17, 'Cloaths'),
(18, 'Fuel'),
(19, 'Shoping'),
(20, 'Travel');

-- --------------------------------------------------------

--
-- Table structure for table `expense`
--

CREATE TABLE `expense` (
  `eid` int(20) NOT NULL,
  `edate` date NOT NULL,
  `ecategory` text NOT NULL,
  `eamount` bigint(50) NOT NULL,
  `enote` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `expense`
--

INSERT INTO `expense` (`eid`, `edate`, `ecategory`, `eamount`, `enote`) VALUES
(23, '2020-11-15', 'Grocery', 3000, 'Monthly Gross');

-- --------------------------------------------------------

--
-- Table structure for table `incategory`
--

CREATE TABLE `incategory` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `incategory`
--

INSERT INTO `incategory` (`id`, `name`) VALUES
(6, 'Salary'),
(7, 'Part Time Business'),
(8, 'Over Time'),
(9, 'Other Income');

-- --------------------------------------------------------

--
-- Table structure for table `income`
--

CREATE TABLE `income` (
  `iid` int(11) NOT NULL,
  `idate` date NOT NULL,
  `icategory` text NOT NULL,
  `iamount` bigint(50) NOT NULL,
  `inote` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `income`
--

INSERT INTO `income` (`iid`, `idate`, `icategory`, `iamount`, `inote`) VALUES
(10, '2020-11-15', 'Salary', 10000, 'November Salary');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`) VALUES
(7, 'admin', 'admin'),
(10, 'aditya', '1234'),
(11, 'aditya', 'aditya');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `excategory`
--
ALTER TABLE `excategory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `expense`
--
ALTER TABLE `expense`
  ADD PRIMARY KEY (`eid`);

--
-- Indexes for table `incategory`
--
ALTER TABLE `incategory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `income`
--
ALTER TABLE `income`
  ADD PRIMARY KEY (`iid`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `excategory`
--
ALTER TABLE `excategory`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `expense`
--
ALTER TABLE `expense`
  MODIFY `eid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `incategory`
--
ALTER TABLE `incategory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `income`
--
ALTER TABLE `income`
  MODIFY `iid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
