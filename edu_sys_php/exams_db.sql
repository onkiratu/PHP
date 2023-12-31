-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 23, 2023 at 01:11 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `exams_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admnistrator`
--

CREATE TABLE `admnistrator` (
  `admin_id` int(30) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `email_address` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admnistrator`
--

INSERT INTO `admnistrator` (`admin_id`, `first_name`, `last_name`, `email_address`) VALUES
(1, 'Tom', 'Maw', 'tmaw@stemakschool.ac.ke');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `fees_paid` int(30) NOT NULL,
  `smi_301` int(30) NOT NULL,
  `Grade_smi301` varchar(30) NOT NULL,
  `smi_302` int(30) NOT NULL,
  `Grade_smi302` varchar(30) NOT NULL,
  `smi_303` int(30) NOT NULL,
  `Grade_smi303` varchar(30) NOT NULL,
  `smi_304` int(30) NOT NULL,
  `Grade_smi304` varchar(30) NOT NULL,
  `smi_305` int(30) NOT NULL,
  `Grade_smi305` varchar(30) NOT NULL,
  `total` int(30) NOT NULL,
  `average` int(30) NOT NULL,
  `overall_grade` varchar(30) NOT NULL,
  `pass_or_fail` text NOT NULL,
  `fees_clearance` text NOT NULL,
  `proceed_to_next_year?` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `password`, `fees_paid`, `smi_301`, `Grade_smi301`, `smi_302`, `Grade_smi302`, `smi_303`, `Grade_smi303`, `smi_304`, `Grade_smi304`, `smi_305`, `Grade_smi305`, `total`, `average`, `overall_grade`, `pass_or_fail`, `fees_clearance`, `proceed_to_next_year?`) VALUES
('sc/001', 'sc001@', 11901, 31, 'Fail', 30, 'Fail', 42, 'D', 22, 'Fail', 45, 'D', 170, 34, 'Fail', 'Retake units. Do Not Proceed The Next Year\r\n\r\n', 'Fees Not Cleared.', 'Not Eligible To Proceed. \r\n'),
('sc/002', '', 55516, 79, 'A', 90, 'A', 59, 'C', 88, 'A', 67, 'B', 383, 77, 'A', 'Pass.', 'Fees Cleared. ', 'Eligible to proceed.\r\n'),
('sc/003', '', 21932, 34, 'Fail', 34, 'Fail', 30, 'Fail', 35, 'Fail', 49, 'D', 182, 36, 'Fail', 'Fail. Retake units. Do Not Proceed The Next Year.\r\n', 'Fees Cleared. ', 'Not eligible to proceed.\r\n'),
('sc/004', '', 5408, 71, 'A', 69, 'B', 54, 'C', 82, 'A', 71, 'A', 347, 69, 'A', 'Pass. ', 'Fees Not Cleared. \r\n', 'Not eligible to proceed.\r\n'),
('sc/005', '', 29170, 27, 'Fail', 13, 'Fail', 27, 'Fail', 19, 'Fail', 39, 'Fail', 125, 25, 'Fail', 'Fail. Retake units. Do Not Proceed The Next Year.\r\n', 'Fees Cleared.\r\n', 'Not eligible to proceed.\r\n'),
('sc/006', '', 53524, 50, 'C', 60, 'B', 47, 'D', 44, 'D', 54, 'C', 255, 51, 'C', 'Pass. ', 'Fees Cleared.\r\n', 'Eligible to proceed.\r\n'),
('sc/007', '', 15219, 40, 'D', 54, 'C', 35, 'Fail', 45, 'D', 26, 'Fail', 200, 40, 'D', 'Pass. ', 'Fees Not Cleared.\r\n', 'Not eligible to proceed.\r\n'),
('sc/008', '', 66999, 71, 'A', 69, 'B', 91, 'A', 62, 'B', 67, 'B', 360, 72, 'A', 'Pass.\r\n', 'Fees Cleared.\r\n', 'Eligible to proceed.\r\n'),
('sc/009', '', 44900, 47, 'D', 54, 'C', 41, 'D', 39, 'Fail', 36, 'Fail', 217, 43, 'D', 'Pass.\r\n', 'Fees Cleared.\r\n', 'Eligible to proceed.\r\n'),
('sc/010', '', 22728, 71, 'A', 51, 'C', 72, 'A', 90, 'A', 87, 'A', 371, 74, 'A', 'Pass.\r\n', 'Fees Cleared.\r\n', 'Eligible to proceed.\r\n'),
('sc/011', '', 36778, 60, 'B', 53, 'C', 78, 'A', 77, 'A', 43, 'D', 311, 62, 'B', 'Pass.\r\n', 'Fees Cleared.\r\n', 'Eligible to proceed.\r\n'),
('sc/012', '', 42476, 32, 'Fail', 39, 'Fail', 12, 'Fail', 25, 'Fail', 35, 'Fail', 143, 29, 'Fail', 'Fail. Retake units. Do Not Proceed The Next Year.\r\n', 'Fees Cleared.\r\n', 'Not eligible to proceed.\r\n'),
('sc/013', '', 31333, 76, 'A', 72, 'A', 87, 'A', 69, 'B', 59, 'C', 363, 73, 'A', 'Pass.\r\n', 'Fees Not Cleared.\r\n', 'Not eligible to proceed.\r\n'),
('sc/014', '', 57213, 52, 'C', 44, 'D', 69, 'B', 66, 'B', 46, 'D', 277, 55, 'C', 'Pass.\r\n', 'Fees Cleared.\r\n', 'Eligible to proceed.\r\n'),
('sc/015', '', 57770, 71, 'A', 81, 'A', 74, 'A', 75, 'A', 69, 'B', 370, 74, 'A', 'Pass.\r\n', 'Fees Cleared.\r\n', 'Eligible to proceed.\r\n'),
('sc/016', '', 11545, 32, 'Fail', 30, 'Fail', 14, 'Fail', 43, 'D', 51, 'C', 170, 34, 'Fail', 'Fail. Retake units. Do Not Proceed The Next Year.\r\n', 'Fees Not Cleared.\r\n', 'Not eligible to proceed.\r\n'),
('sc/017', '', 20428, 54, 'C', 62, 'B', 58, 'C', 57, 'C', 46, 'D', 277, 55, 'C', 'Pass.\r\n', 'Fees Cleared.\r\n', 'Eligible to proceed.\r\n'),
('sc/018', '', 55601, 32, 'Fail', 50, 'C', 28, 'Fail', 26, 'Fail', 32, 'Fail', 168, 34, 'Fail', 'Fail. Retake units. Do Not Proceed The Next Year.\r\n', 'Fees Cleared.\r\n', 'Not eligible to proceed.\r\n'),
('sc/019', '', 48226, 24, 'Fail', 28, 'Fail', 6, 'F', 33, 'Fail', 15, 'Fail', 106, 21, 'Fail', 'Fail. Retake units. Do Not Proceed The Next Year.\r\n', 'Fees Cleared.\r\n', 'Not eligible to proceed.\r\n'),
('sc/020', '', 10937, 67, 'B', 72, 'A', 80, 'A', 53, 'C', 74, 'A', 346, 69, 'A', 'Pass.\r\n', 'Fees Not Cleared.\r\n', 'Not eligible to proceed.\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `teacher_id` int(30) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `email_address` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`teacher_id`, `first_name`, `last_name`, `email_address`) VALUES
(121, 'onesmas', 'kiratu', 'okiratu@stemakschool.ac.ke');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admnistrator`
--
ALTER TABLE `admnistrator`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`teacher_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
