-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 02, 2023 at 11:13 PM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bursary`
--

-- --------------------------------------------------------

--
-- Table structure for table `applicants`
--

CREATE TABLE `applicants` (
  `id` int(8) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `constituency` varchar(20) NOT NULL,
  `school` varchar(20) NOT NULL,
  `edulevel` varchar(20) NOT NULL,
  `parents` varchar(20) NOT NULL,
  `bursary_title` varchar(20) NOT NULL,
  `status` varchar(10) NOT NULL,
  `bursary_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `phone` int(15) NOT NULL,
  `county` text NOT NULL,
  `bank` varchar(255) NOT NULL,
  `activity_id` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `applicants`
--

INSERT INTO `applicants` (`id`, `firstname`, `lastname`, `email`, `gender`, `constituency`, `school`, `edulevel`, `parents`, `bursary_title`, `status`, `bursary_id`, `student_id`, `phone`, `county`, `bank`, `activity_id`, `location`) VALUES
(4, 'Christine', 'Kadzo', 'kadzo@gmail.com', 'Female', 'const2', 'const1', 'Secondary', 'Single_Parent', 'developer ', 'Approved', 2, 1, 0, '', '', '', ''),
(5, 'Christine', 'Kadzo', 'kadzo@gmail.com', 'Female', 'const2', 'const3', 'Secondary', 'Single_Parent', 'test1', 'Rejected', 1, 1, 0, '', '', '', ''),
(6, 'Christine', 'Kadzo', 'kadzo@gmail.com', 'Female', 'const2', 'school2', 'Primary', 'Single_Parent', 'test2', 'Approved', 3, 1, 0, '', '', '', ''),
(7, 'Mwanapili', 'Madona', 'madonna@gmail.com', 'Female', 'const1', 'school1', 'Secondary', 'Single_Parent', 'test1', 'Approved', 1, 8, 0, '', '', '', ''),
(8, 'Peter', 'Mungai', 'mungaip039@gmail.com', 'Male', 'Nyali', 'Pioneer internationa', 'Undergraduate', 'Both_Alive', 'test1', 'pending', 0, 10, 876645223, 'Mombasa', '536338849474', '1', ''),
(9, 'Peter', 'Mungai', 'mungaip039@gmail.com', 'Male', 'Nyali', 'Pioneer internationa', 'Undergraduate', 'Both_Alive', 'test1', 'pending', 0, 10, 876645223, 'Mombasa', '536338849474', '1', ''),
(10, 'Peter', 'Mungai', 'mungaip039@gmail.com', 'Male', 'Nyali', 'Pioneer internationa', 'Undergraduate', 'Both_Alive', 'test1', 'pending', 0, 10, 876645223, 'Mombasa', '536338849474', '1', ''),
(11, 'Peter', 'Mungai', 'mungaip039@gmail.com', 'Male', 'Nyali', 'Pioneer internationa', 'Undergraduate', 'Both_Alive', 'test1', 'pending', 0, 10, 876645223, 'Mombasa', '536338849474', '1', ''),
(12, 'Peter', 'Mungai', 'mungaip039@gmail.com', 'Male', 'Nyali', 'Pioneer internationa', 'Undergraduate', 'Both_Alive', 'test1', 'pending', 0, 10, 876645223, 'Mombasa', '536338849474', '1', ''),
(13, 'Peter', 'Mungai', 'mungaip039@gmail.com', 'Male', 'Nyali', 'Pioneer internationa', 'Undergraduate', 'Both_Alive', 'test1', 'pending', 0, 10, 876645223, 'Mombasa', '536338849474', '1', ''),
(14, 'Peter', 'Mungai', 'mungaip039@gmail.com', 'Male', 'Nyali', 'Pioneer internationa', 'Undergraduate', 'Single_Parent', 'test1', 'pending', 0, 10, 876645223, 'Mombasa', '536338849474', '1', 'verify/bursary (1).sql');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `applicants`
--
ALTER TABLE `applicants`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `applicants`
--
ALTER TABLE `applicants`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
