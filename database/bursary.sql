-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 26, 2024 at 02:56 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

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
  `email` varchar(255) NOT NULL,
  `admin_id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(12) NOT NULL,
  `name` varchar(40) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`email`, `admin_id`, `username`, `password`, `name`, `status`) VALUES
('', 1, 'admin', 'admin', 'Administrator', 0),
('', 2, 'seif', 'mentor', 'Ashraf Seif', 0),
('', 3, 'binti', 'mentor', 'Binti', 0),
('', 4, 'rigga', 'mentor', 'Sharrifa Rigga', 0),
('', 5, 'boga', 'mentor', 'Mwanamvua Boga', 0),
('', 6, 'idd', 'mentor', 'Ulla Idd', 0),
('', 7, 'kugula', 'mentor', 'Umi Kugula', 0),
('', 8, 'mwaniki', 'mentor', 'Mrs Irene Mwaniki', 0),
('hillarykip@gmail.com', 11, 'bit/0652/29020', 'hillary', 'kip', 1);

-- --------------------------------------------------------

--
-- Table structure for table `applicants`
--

CREATE TABLE `applicants` (
  `id` int(11) NOT NULL,
  `adm` varchar(10) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `constituency` text NOT NULL,
  `ward` varchar(20) NOT NULL,
  `school` varchar(20) NOT NULL,
  `edulevel` varchar(20) NOT NULL,
  `family` text NOT NULL,
  `bursary_title` varchar(20) NOT NULL,
  `status` varchar(10) NOT NULL,
  `bursary_id` int(11) NOT NULL,
  `phone` int(11) NOT NULL,
  `bank` varchar(255) NOT NULL,
  `amount` int(11) NOT NULL,
  `time` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `applicants`
--

INSERT INTO `applicants` (`id`, `adm`, `firstname`, `lastname`, `email`, `gender`, `constituency`, `ward`, `school`, `edulevel`, `family`, `bursary_title`, `status`, `bursary_id`, `phone`, `bank`, `amount`, `time`) VALUES
(68, '2380', 'nashon', 'kiptoo', 'nashon@gmail.com', 'Male', 'konoin', 'boito', 'mulot', 'Undergraduate', 'Both_Alive', 'cdf', 'Approved', 3, 2147483647, '98765432', 5000, '2023-11-27 15:53:37'),
(71, '2381', 'felix', 'ngetich', 'felix@gmail.com', 'Female', 'konoin', 'kimulot', 'mulot', 'Secondary', 'Total_Orphan', 'cdf 3', 'Approved', 14, 712345678, '360987654', 10000, '2023-11-27 16:06:41'),
(73, '2378', 'emanuel', 'kiplangat', 'emmanuel@gmail.com', 'Female', 'konoin', 'boito', 'mengit', 'Secondary', 'Single_Parent', 'cdf', 'Approved', 3, 987654323, '2147483647', 8000, '2023-11-27 16:11:25'),
(74, '2382', 'jackson', 'kipkemoi', 'jackson@gmail.com', 'Male', 'konoin', 'kimulot', 'mengit', 'Secondary', 'Single_Parent', 'cdf 3', 'Approved', 14, 765432178, '2147483647', 9000, '2023-11-27 16:11:40'),
(75, '2386', 'abel', 'mutua', 'abel@gmail.com', 'Male', 'sotik', 'mogogosiek', 'ntti', 'Secondary', 'Both_Alive', 'cdf chepchabas', 'Approved', 13, 723276665, '2147483647', 5000, '2023-12-01 08:26:00'),
(76, '2385', 'Alex', 'kanyi', 'alex@gmail.com', 'Female', 'sotik', 'chepchabas', 'ntti', 'Secondary', 'Single_Parent', 'ward cdf', 'Approved', 12, 987654321, '2147483647', 8000, '2023-12-01 08:26:26'),
(77, '2389', 'aron', 'kipkurui', 'aron@gmail.com', 'Female', 'sotik', 'mogogosiek', 'mengit', 'Secondary', 'Both_Alive', 'cdf chepchabas', 'Approved', 13, 758012573, '1234567890', 6000, '2023-12-01 08:28:47'),
(78, '2388', 'caleb', 'kebenei', 'caleb@gmail.com', 'Male', 'sotik', 'mogogosiek', 'mmu', 'Undergraduate', 'Single_Parent', 'cdf chepchabas', 'Approved', 13, 782942771, '865432', 9000, '2023-12-01 08:28:59'),
(79, '2384', 'peter', 'mungai', 'peter@gmail.com', 'Male', 'sotik', 'chepchabas', 'PIU', 'Undergraduate', 'Total_Orphan', 'ward cdf', 'Approved', 12, 758012573, '123456789', 0, '2023-12-01 08:29:21'),
(80, '2387', 'faith', 'chesang', 'faith@gmail.com', 'Female', 'sotik', 'chepchabas', 'mmu', 'Undergraduate', 'Total_Orphan', 'ward cdf', 'Approved', 12, 786605283, '865432', 10000, '2023-12-01 08:29:40'),
(81, '2200', 'caren', 'kobei', 'caren@gmail.com', 'Female', 'konoin', 'boito', 'mulot', 'Undergraduate', 'Both_Alive', 'vdf', 'Approved', 15, 712345678, '1234567890', 6000, '2024-05-17 12:20:20'),
(82, '2378', 'hillary', 'kipngeno', 'hillary@gmail.com', 'Male', 'konoin', 'boito', 'PIU', 'Undergraduate', 'Total_Orphan', 'vdf', 'Approved', 15, 786605283, '2147483647', 0, '2024-10-12 15:20:16');

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
  `constituency` text DEFAULT NULL,
  `ward` text NOT NULL,
  `level` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `bursaries`
--

INSERT INTO `bursaries` (`bursary_id`, `title`, `description`, `start`, `end`, `constituency`, `ward`, `level`) VALUES
(12, 'ward cdf', 'cdf batch 2 sotik', '2023-11-25', '2024-02-02', 'sotik', 'chepchabas', 'Undergraduate'),
(15, 'vdf', 'csc', '2023-12-06', '2023-12-07', 'sotik', 'boito', 'Undergraduate');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `image_url` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `image_url`) VALUES
(8, 'IMG-5f8954bd209a92.78214246.jpg'),
(9, 'IMG-5f8954caa02539.76436861.jpg'),
(10, 'IMG-6559cbfba80577.93955545.jpeg'),
(11, 'IMG-6559cf8140fa97.19122597.jpeg'),
(12, 'IMG-6559cfc6b82e12.45605596.png');

-- --------------------------------------------------------

--
-- Table structure for table `schools`
--

CREATE TABLE `schools` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `constituency` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `sms`
--

INSERT INTO `sms` (`sms_id`, `name`, `message`, `send_date`, `applicant_id`) VALUES
(18, 'Peter Mungai', 'there was incorrect details', '2023/11/19', 16);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `adm` varchar(20) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `edulevel` varchar(255) NOT NULL,
  `school` varchar(255) NOT NULL,
  `bank` int(11) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` int(11) NOT NULL,
  `dob` varchar(11) NOT NULL,
  `constituency` text NOT NULL,
  `ward` text NOT NULL,
  `familystatus` text NOT NULL,
  `status` varchar(255) NOT NULL,
  `family` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `adm`, `firstname`, `lastname`, `email`, `phone`, `gender`, `edulevel`, `school`, `bank`, `password`, `role`, `dob`, `constituency`, `ward`, `familystatus`, `status`, `family`) VALUES
(15, '34457', 'edward', 'kariuki', 'edward@gmail.com', '0876543222', 'male', '', '', 0, 'bit/0652/2020', 1, '', '', '', '', '', ''),
(16, 'BIT/0652/2020', 'caroline', 'mosonik', 'caroline@gmail.com', '0746679876', 'Male', 'Secondary', 'mengit', 0, '12345678', 0, '2023-11-17', 'konoin', 'boito', 'both alive', 'Approved', 'Both_Alive'),
(20, '34457', 'hillary', 'kipngeno', 'hillaa@gmail.com', '0758012573', '', '', '', 0, 'bit/0652/2020', 1, '', '', '', '', '', ''),
(28, '2200', 'caren', 'kobei', 'caren@gmail.com', '0712345678', 'Female', 'Undergraduate', 'mulot', 1234567890, '12345678', 0, '2023-11-18', 'konoin', 'boito', '', 'Approved', 'Both_Alive'),
(30, '34456', 'Emmanuel', 'Kiplangat', 'adventurekenya254@gmail.com', '0782942771', 'Male', 'Undergraduate', 'Hillary Marindany', 0, '01234567', 0, '2023-05-17', 'sotik', 'kimulot', '', 'Approved', 'Both_Alive'),
(31, '2378', 'hillary', 'kipngeno', 'hillary@gmail.com', '0786605283', 'Male', 'Undergraduate', 'PIU', 2147483647, 'qwertyuio', 0, '2023-11-17', 'konoin', 'boito', 'uploads/65648415df262_Networking.pdf', 'Approved', 'Total_Orphan'),
(32, '2378', 'emanuel', 'kiplangat', 'emmanuel@gmail.com', '0987654323', 'Female', 'Secondary', 'mengit', 2147483647, 'police123', 0, '2023-11-18', 'konoin', 'boito', 'uploads/656484c730005_WhatsApp Image 2023-11-05 at 12.50.00.jpeg', 'Rejected', 'Single_Parent'),
(33, '2380', 'nashon', 'kiptoo', 'nashon@gmail.com', '09876543456', 'Male', 'Undergraduate', 'mulot', 98765432, 'qwertyui', 0, '2023-11-09', 'konoin', 'boito', '', 'Approved', 'Both_Alive'),
(34, '2381', 'felix', 'ngetich', 'felix@gmail.com', '0712345678', 'Female', 'Secondary', 'mulot', 360987654, 'qwertyui', 0, '2023-10-12', 'konoin', 'kimulot', 'uploads/656485b0d8d85_admin dash 3.png', 'Approved', 'Total_Orphan'),
(35, '2382', 'jackson', 'kipkemoi', 'jackson@gmail.com', '0765432178', 'Male', 'Secondary', 'mengit', 2147483647, 'qwertyui', 0, '2023-10-25', 'konoin', 'kimulot', 'uploads/656486405fd8d_Admin dash 4.png', 'Approved', 'Single_Parent'),
(36, '2383', 'shadrack', 'kipkirui', 'shadrack@kipkirui', '0798876645', 'Female', 'Undergraduate', 'mulot', 1234567890, 'qwertyui', 0, '2023-11-11', 'konoin', 'kimulot', '', 'Approved', 'Both_Alive'),
(37, '2384', 'peter', 'mungai', 'peter@gmail.com', '0758012573', 'Male', 'Undergraduate', 'PIU', 123456789, 'qwertyuio', 0, '2023-12-23', 'sotik', 'chepchabas', 'uploads/6569032a80d10_profile-img.jpg', 'Approved', 'Total_Orphan'),
(38, '2385', 'Alex', 'kanyi', 'alex@gmail.com', '0987654321', 'Female', 'Secondary', 'ntti', 2147483647, 'qwertyuio', 0, '2024-01-03', 'sotik', 'chepchabas', 'uploads/656903af8c046_portfolio-details-1.jpg', 'Approved', 'Single_Parent'),
(39, '2386', 'abel', 'mutua', 'abel@gmail.com', '0723276665', 'Male', 'Secondary', 'ntti', 2147483647, 'qwertyui', 0, '2023-12-23', 'sotik', 'mogogosiek', '', 'Approved', 'Both_Alive'),
(40, '2387', 'faith', 'chesang', 'faith@gmail.com', '0786605283', 'Female', 'Undergraduate', 'mmu', 865432, '12345678', 0, '2023-12-15', 'sotik', 'chepchabas', 'uploads/65690469e80e1_portfolio-8.jpg', 'Approved', 'Total_Orphan'),
(41, '2388', 'caleb', 'kebenei', 'caleb@gmail.com', '0782942771', 'Male', 'Undergraduate', 'mmu', 865432, '09876543', 0, '2023-12-16', 'sotik', 'mogogosiek', 'uploads/656904d0418b8_portfolio-7.jpg', 'Approved', 'Single_Parent'),
(42, '2389', 'aron', 'kipkurui', 'aron@gmail.com', '0758012573', 'Female', 'Secondary', 'mengit', 1234567890, 'qwertyuio', 0, '2023-04-12', 'sotik', 'mogogosiek', '', 'Approved', 'Both_Alive');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

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
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `applicants`
--
ALTER TABLE `applicants`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

--
-- AUTO_INCREMENT for table `bursaries`
--
ALTER TABLE `bursaries`
  MODIFY `bursary_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `schools`
--
ALTER TABLE `schools`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sms`
--
ALTER TABLE `sms`
  MODIFY `sms_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
