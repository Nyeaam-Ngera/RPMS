-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 02, 2019 at 12:01 PM
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
-- Table structure for table `tobj_tbl`
--

CREATE TABLE `tobj_tbl` (
  `tobj_id` int(11) NOT NULL,
  `KRA_name` varchar(255) NOT NULL,
  `tobj_no` int(11) NOT NULL,
  `tobj_name` varchar(255) NOT NULL,
  `date_added` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `date_modified` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tobj_tbl`
--

INSERT INTO `tobj_tbl` (`tobj_id`, `KRA_name`, `tobj_no`, `tobj_name`, `date_added`, `date_modified`) VALUES
(14, 'Content Knowledge and Pedagogy', 2, 'Used a range of teaching strategies that enhance learner achievement in literacy and numeracy skills', '2019-08-31 10:21:58', '2019-08-31 16:21:58'),
(15, 'Content Knowledge and Pedagogy', 3, 'Applied a range of teaching strategies to develop critical and creative thinking, as well as other higher-order thinking skills ', '2019-08-31 12:20:56', '2019-08-31 18:20:56'),
(16, 'Content Knowledge and Pedagogy', 4, 'Managed classroom structure to engage learners, individually or in groups, in meaningful exploration, discovery and hands-on activities within a range of physical learning environments ', '2019-08-31 12:31:21', '2019-08-31 18:31:21'),
(22, 'Content', 1, 'apsldladdad', '2019-09-02 09:44:15', '2019-09-02 09:14:40');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tobj_tbl`
--
ALTER TABLE `tobj_tbl`
  ADD PRIMARY KEY (`tobj_id`),
  ADD KEY `KRA_no` (`KRA_name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tobj_tbl`
--
ALTER TABLE `tobj_tbl`
  MODIFY `tobj_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
