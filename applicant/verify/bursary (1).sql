-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 02, 2023 at 10:58 PM
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
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(12) NOT NULL,
  `name` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `username`, `password`, `name`) VALUES
(1, 'admin', 'admin', 'Administrator'),
(2, 'seif', 'mentor', 'Ashraf Seif'),
(3, 'binti', 'mentor', 'Binti'),
(4, 'rigga', 'mentor', 'Sharrifa Rigga'),
(5, 'boga', 'mentor', 'Mwanamvua Boga'),
(6, 'idd', 'mentor', 'Ulla Idd'),
(7, 'kugula', 'mentor', 'Umi Kugula'),
(8, 'mwaniki', 'mentor', 'Mrs Irene Mwaniki'),
(9, 'test', 'mentor', 'tester');

-- --------------------------------------------------------

--
-- Table structure for table `answer`
--

CREATE TABLE `answer` (
  `id` int(11) NOT NULL,
  `stud_answers` text NOT NULL,
  `activity_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
  `activity_id` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `applicants`
--

INSERT INTO `applicants` (`id`, `firstname`, `lastname`, `email`, `gender`, `constituency`, `school`, `edulevel`, `parents`, `bursary_title`, `status`, `bursary_id`, `student_id`, `phone`, `county`, `bank`, `activity_id`) VALUES
(4, 'Christine', 'Kadzo', 'kadzo@gmail.com', 'Female', 'const2', 'const1', 'Secondary', 'Single_Parent', 'developer ', 'Approved', 2, 1, 0, '', '', ''),
(5, 'Christine', 'Kadzo', 'kadzo@gmail.com', 'Female', 'const2', 'const3', 'Secondary', 'Single_Parent', 'test1', 'Rejected', 1, 1, 0, '', '', ''),
(6, 'Christine', 'Kadzo', 'kadzo@gmail.com', 'Female', 'const2', 'school2', 'Primary', 'Single_Parent', 'test2', 'Approved', 3, 1, 0, '', '', ''),
(7, 'Mwanapili', 'Madona', 'madonna@gmail.com', 'Female', 'const1', 'school1', 'Secondary', 'Single_Parent', 'test1', 'Approved', 1, 8, 0, '', '', ''),
(8, 'Peter', 'Mungai', 'mungaip039@gmail.com', 'Male', 'Nyali', 'Pioneer internationa', 'Undergraduate', 'Both_Alive', 'test1', 'pending', 0, 10, 876645223, 'Mombasa', '536338849474', '1'),
(9, 'Peter', 'Mungai', 'mungaip039@gmail.com', 'Male', 'Nyali', 'Pioneer internationa', 'Undergraduate', 'Both_Alive', 'test1', 'pending', 0, 10, 876645223, 'Mombasa', '536338849474', '1'),
(10, 'Peter', 'Mungai', 'mungaip039@gmail.com', 'Male', 'Nyali', 'Pioneer internationa', 'Undergraduate', 'Both_Alive', 'test1', 'pending', 0, 10, 876645223, 'Mombasa', '536338849474', '1'),
(11, 'Peter', 'Mungai', 'mungaip039@gmail.com', 'Male', 'Nyali', 'Pioneer internationa', 'Undergraduate', 'Both_Alive', 'test1', 'pending', 0, 10, 876645223, 'Mombasa', '536338849474', '1'),
(12, 'Peter', 'Mungai', 'mungaip039@gmail.com', 'Male', 'Nyali', 'Pioneer internationa', 'Undergraduate', 'Both_Alive', 'test1', 'pending', 0, 10, 876645223, 'Mombasa', '536338849474', '1');

-- --------------------------------------------------------

--
-- Table structure for table `bursaries`
--

CREATE TABLE `bursaries` (
  `bursary_id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `start` varchar(10) NOT NULL,
  `end` varchar(10) NOT NULL,
  `month` varchar(8) NOT NULL,
  `year` varchar(5) NOT NULL,
  `county` text NOT NULL,
  `const` text NOT NULL,
  `level` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bursaries`
--

INSERT INTO `bursaries` (`bursary_id`, `title`, `description`, `start`, `end`, `month`, `year`, `county`, `const`, `level`) VALUES
(1, 'test1', 'must a background on how to use pos like pastel', '', '2011-02-07', 'Feb', '2011', 'Mombasa', 'Nyali', ''),
(2, 'developer ', 'candidate must have background of front end and know at least one framework per language ', '', '012318', 'Oct', '2017', 'Mombasa', 'Likoni', ''),
(3, 'test2', 'hello, this is test 2 for my students', '', '2011-02-17', 'Feb', '2011', 'Kwale', 'msambweni', ''),
(6, 'trial bursary', 'hello trial', '2019-02-06', '2019-02-13', 'Feb', '2019', 'Nyandarua', 'Ndaragwa', 'cdf');

-- --------------------------------------------------------

--
-- Table structure for table `schools`
--

CREATE TABLE `schools` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `constituency` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `schools`
--

INSERT INTO `schools` (`id`, `name`, `constituency`) VALUES
(1, 'school 1', 'const1'),
(2, 'school 2', 'const2'),
(3, 'school3', 'const1');

-- --------------------------------------------------------

--
-- Table structure for table `sms`
--

CREATE TABLE `sms` (
  `sms_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `message` varchar(200) NOT NULL,
  `send_date` varchar(10) NOT NULL,
  `applicant_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sms`
--

INSERT INTO `sms` (`sms_id`, `name`, `message`, `send_date`, `applicant_id`) VALUES
(2, 'Christine Kadzo', 'njnbnbnbn', '2019/02/10', 6);

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(8) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `edulevel` varchar(255) NOT NULL,
  `school` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  `dob` varchar(11) NOT NULL,
  `county` text NOT NULL,
  `const` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `firstname`, `lastname`, `email`, `phone`, `gender`, `edulevel`, `school`, `password`, `status`, `dob`, `county`, `const`) VALUES
(2, 'John', 'Wesley', 'palo@gmail.com', '+254706068312', 'Male', 'Secondary', 'Babla Secondary School', 'john', 0, '', '', ''),
(10, 'Peter', 'Mungai', 'mungaip039@gmail.com', '0876645223', 'Male', 'Undergraduate', 'Pioneer international university', 'peter1390', 0, '2023-06-30', 'Mombasa', 'Nyali');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `answer`
--
ALTER TABLE `answer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `applicants`
--
ALTER TABLE `applicants`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bursaries`
--
ALTER TABLE `bursaries`
  ADD PRIMARY KEY (`bursary_id`);

--
-- Indexes for table `schools`
--
ALTER TABLE `schools`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sms`
--
ALTER TABLE `sms`
  ADD PRIMARY KEY (`sms_id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `answer`
--
ALTER TABLE `answer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `applicants`
--
ALTER TABLE `applicants`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `bursaries`
--
ALTER TABLE `bursaries`
  MODIFY `bursary_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `schools`
--
ALTER TABLE `schools`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sms`
--
ALTER TABLE `sms`
  MODIFY `sms_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
