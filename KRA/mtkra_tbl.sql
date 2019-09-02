-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 02, 2019 at 12:41 PM
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
-- Table structure for table `mtkra_tbl`
--

CREATE TABLE `mtkra_tbl` (
  `mtKRA_id` int(11) NOT NULL,
  `mtKRA_no` int(11) NOT NULL,
  `mtKRA_name` varchar(255) NOT NULL,
  `date_added` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `date_modified` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mtkra_tbl`
--

INSERT INTO `mtkra_tbl` (`mtKRA_id`, `mtKRA_no`, `mtKRA_name`, `date_added`, `date_modified`) VALUES
(4, 1, 'Content Knowledge and Pedagogy', '2019-08-25 19:05:19', '2019-08-25 19:05:19'),
(5, 2, 'Learning Environment and Diversity of Learners', '2019-08-25 19:05:19', '2019-08-25 19:05:19'),
(6, 3, 'Curriculum and Planning', '2019-08-25 19:05:19', '2019-08-25 19:05:19'),
(7, 4, 'Assessment and Reporting', '2019-08-25 19:05:19', '2019-08-25 19:05:19'),
(8, 5, 'Plus Factor', '2019-08-25 19:05:19', '2019-08-25 19:05:19');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mtkra_tbl`
--
ALTER TABLE `mtkra_tbl`
  ADD PRIMARY KEY (`mtKRA_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mtkra_tbl`
--
ALTER TABLE `mtkra_tbl`
  MODIFY `mtKRA_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
