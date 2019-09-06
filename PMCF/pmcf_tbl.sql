-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 06, 2019 at 02:42 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rpms`
--

-- --------------------------------------------------------

--
-- Table structure for table `pmcf_tbl`
--

CREATE TABLE `pmcf_tbl` (
  `pmcf_id` int(11) NOT NULL,
  `tdate` date NOT NULL,
  `cid` varchar(255) NOT NULL,
  `toutput` varchar(255) NOT NULL,
  `actionplan` varchar(255) NOT NULL,
  `rater` varchar(255) NOT NULL,
  `ratee` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pmcf_tbl`
--

INSERT INTO `pmcf_tbl` (`pmcf_id`, `tdate`, `cid`, `toutput`, `actionplan`, `rater`, `ratee`) VALUES
(3, '2019-09-06', 'madmon', 'madmon', 'madmon', 'madmon', 'madmon'),
(4, '2019-09-06', 'Raymond', 'Raymond', 'Raymond', 'Raymond', 'Raymond');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pmcf_tbl`
--
ALTER TABLE `pmcf_tbl`
  ADD PRIMARY KEY (`pmcf_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pmcf_tbl`
--
ALTER TABLE `pmcf_tbl`
  MODIFY `pmcf_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
