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
-- Table structure for table `tmov_tbl`
--

CREATE TABLE `tmov_tbl` (
  `tmov_id` int(11) NOT NULL,
  `KRA_name` varchar(255) NOT NULL,
  `tobj_name` varchar(255) NOT NULL,
  `main_mov` varchar(255) NOT NULL,
  `supp_mov` varchar(255) NOT NULL,
  `date_added` datetime NOT NULL,
  `date_modified` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tmov_tbl`
--

INSERT INTO `tmov_tbl` (`tmov_id`, `KRA_name`, `tobj_name`, `main_mov`, `supp_mov`, `date_added`, `date_modified`) VALUES
(3, 'Content Knowledge and Pedagogy', 'Used a range of teaching strategies that enhance learner achievement in literacy and numeracy skills', 'Classroom Observation', 'Lesson Plan, Instructional Material, Testing Materials', '2019-09-03 22:51:47', '2019-09-03 21:09:38'),
(4, 'Curriculum and Planning', 'Applied a range of teaching strategies to develop critical and creative thinking, as well as other higher-order thinking skills ', 'COT', 'Lesson Plan', '2019-09-03 23:06:50', '2019-09-03 21:06:50');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tmov_tbl`
--
ALTER TABLE `tmov_tbl`
  ADD PRIMARY KEY (`tmov_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tmov_tbl`
--
ALTER TABLE `tmov_tbl`
  MODIFY `tmov_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
