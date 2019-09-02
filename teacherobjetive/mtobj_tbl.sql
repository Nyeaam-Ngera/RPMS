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
-- Table structure for table `mtobj_tbl`
--

CREATE TABLE `mtobj_tbl` (
  `mtobj_id` int(11) NOT NULL,
  `mtKRA_name` varchar(255) NOT NULL,
  `mtobj_no` int(11) NOT NULL,
  `mtobj_name` varchar(255) NOT NULL,
  `date_added` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `date_modified` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mtobj_tbl`
--

INSERT INTO `mtobj_tbl` (`mtobj_id`, `mtKRA_name`, `mtobj_no`, `mtobj_name`, `date_added`, `date_modified`) VALUES
(1, 'Content', 1, 'Modeled effective applications of content knowledge within and across curriculum teaching areas.', '2019-09-02 09:52:26', '2019-08-25 19:06:36'),
(2, 'Curriculum', 2, 'Collaborated with colleagues in the conduct and application of research to enrich knowledge of content and pedagogy.', '2019-09-02 09:52:35', '2019-08-25 19:06:36'),
(3, 'Assessment', 3, 'Developed and applied effective teaching strategies to promote critical and creative thinking, as well as other higher-order thinking skills.', '2019-09-02 09:52:42', '2019-08-25 19:06:36'),
(11, 'Learning Environment and Diversity of Learners', 1, 'saadsadsadasd', '2019-09-02 03:51:56', '2019-09-02 09:51:56');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mtobj_tbl`
--
ALTER TABLE `mtobj_tbl`
  ADD PRIMARY KEY (`mtobj_id`),
  ADD KEY `mtkra_no` (`mtKRA_name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mtobj_tbl`
--
ALTER TABLE `mtobj_tbl`
  MODIFY `mtobj_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
