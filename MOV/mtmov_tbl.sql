-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 03, 2019 at 11:11 PM
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
-- Table structure for table `mtmov_tbl`
--

CREATE TABLE `mtmov_tbl` (
  `mtmov_id` int(11) NOT NULL,
  `mtKRA_name` varchar(255) NOT NULL,
  `mtobj_name` varchar(255) NOT NULL,
  `mtmain_mov` varchar(255) NOT NULL,
  `mtsupp_mov` varchar(255) NOT NULL,
  `date_added` timestamp NOT NULL DEFAULT current_timestamp(),
  `date_modified` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mtmov_tbl`
--

INSERT INTO `mtmov_tbl` (`mtmov_id`, `mtKRA_name`, `mtobj_name`, `mtmain_mov`, `mtsupp_mov`, `date_added`, `date_modified`) VALUES
(2, 'Content Knowledge and Pedagogy', 'Modeled effective applications of content knowledge within and across curriculum teaching areas.', 'COT', 'Lesson Plan', '2019-09-03 15:04:48', '2019-09-03 21:04:48');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mtmov_tbl`
--
ALTER TABLE `mtmov_tbl`
  ADD PRIMARY KEY (`mtmov_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mtmov_tbl`
--
ALTER TABLE `mtmov_tbl`
  MODIFY `mtmov_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
