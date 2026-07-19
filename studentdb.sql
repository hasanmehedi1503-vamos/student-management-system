-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 19, 2026 at 05:38 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `studentdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `admin_id` varchar(50) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `admin_id`, `name`) VALUES
(1, 'admin001', 'Mehedi Hasan');

-- --------------------------------------------------------

--
-- Table structure for table `notices`
--

CREATE TABLE `notices` (
  `id` int(11) NOT NULL,
  `title` varchar(100) DEFAULT NULL,
  `notice` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `notices`
--

INSERT INTO `notices` (`id`, `title`, `notice`, `created_at`) VALUES
(1, 'Final Exam', 'Final Exam will start from 20 August.', '2026-07-19 11:08:36');

-- --------------------------------------------------------

--
-- Table structure for table `stubl`
--

CREATE TABLE `stubl` (
  `id` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pos` varchar(50) NOT NULL,
  `student_id` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `stubl`
--

INSERT INTO `stubl` (`id`, `firstname`, `lastname`, `email`, `pos`, `student_id`) VALUES
(1, '', '', '', '', '0'),
(2, 'lamia', 'islam', 'lamia@gail.com', 'nursing', '0'),
(3, 'hasan', 'mehedi', 'hasan@gmail.com', 'computer science', '0'),
(4, 'jarin', 'momo', 'momo@gmail.com', 'computer science', '0'),
(5, 'jarinshoyatn', 'momo', 'momo@gmail.com', 'computer science', '0'),
(6, 'alex', 'lee', 'alex@gmail.com', 'it', '0'),
(7, 'tom', 'lee', 'hasanmehedi1503@gmail.com', 'it', '0'),
(8, 'leo', 'messi', 'messi@gmail.com', 'striker', '0'),
(10, 'enzo', 'fernandez', 'enxo@gmail.com', 'cdm', '0'),
(11, 'enzo', 'fernandez', 'enxo@gmail.com', 'cdm', '0'),
(12, 'julian', 'alvarez', 'alvi@gmail.com', 'striker', 'student_id'),
(13, 'julian', 'alvarez', 'alvi@gmail.com', 'striker', '26-01-09'),
(14, 'julian', 'alvarez', 'alvi@gmail.com', 'striker', '26-01-09'),
(15, 'julian', 'alvarez', 'alvi@gmail.com', 'striker', '26-01-09'),
(16, 'julian', 'alvarez', 'alvi@gmail.com', 'striker', '26-01-09'),
(17, 'julian', 'alvarez', 'alvi@gmail.com', 'striker', '26-01-09'),
(18, 'leo', 'messi', 'messi@gmail.com', 'striker', '24-02-01'),
(19, 'leo', 'messi', 'messi@gmail.com', 'striker', '24-02-9989'),
(20, 'enzo', 'fernandez', 'enxo@gmail.com', 'cdm', '24');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `student_id` varchar(50) DEFAULT NULL,
  `department` varchar(100) DEFAULT NULL,
  `semester` varchar(20) DEFAULT NULL,
  `cgpa` decimal(3,2) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `blood_group` varchar(10) DEFAULT NULL,
  `guardian_name` varchar(100) DEFAULT NULL,
  `guardian_phone` varchar(20) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `name`, `student_id`, `department`, `semester`, `cgpa`, `phone`, `email`, `blood_group`, `guardian_name`, `guardian_phone`, `address`, `photo`) VALUES
(1, 'm.hasan', '242-115-245', 'cse', 'summar', 3.50, '01744793541', 'hasan@gmail.com', 'o+', 'amma', '01722222222', 'jp,syt', NULL),
(2, 'm.hasan', '24-02-01', 'cse', 'summar', 3.50, '01744793541', 'hasan@gmail.com', 'o+', 'amma', '', 'jp,syt,sunamgonj', NULL),
(6, 'momo', '242-115-236', 'cse', 'summar', 3.50, '01711111111', 'hasan@gmail.com', 'o+', 'amma', '0199999999', 'poil,hobigonj', NULL),
(14, 'jarin', '200', 'cse', 'summer-26', 3.70, '999', 'jarin@gmail.com', 'o+', 'aunty', '1000', 'biswonath,syt', NULL),
(15, 'trk', '242-115-248', 'cse', 'summer-26', 3.90, '999', 'trk@gmail.com', 'o+', 'tarabbu', '123456789', 'united sate of jalalpur,south syt', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `id` int(11) NOT NULL,
  `teacher_id` varchar(20) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `department` varchar(100) DEFAULT NULL,
  `designation` varchar(100) DEFAULT NULL,
  `room_no` varchar(20) DEFAULT NULL,
  `gender` varchar(20) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`id`, `teacher_id`, `name`, `email`, `phone`, `department`, `designation`, `room_no`, `gender`, `photo`) VALUES
(1, '', '', '', '', '', '', '', '', ''),
(2, '5', 'scaloni', 'scaloni@gmail.com', '9987698', 'coach', 'excb', '10', 'Male', 'Screenshot 2026-01-14 223502.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admin_id` (`admin_id`);

--
-- Indexes for table `notices`
--
ALTER TABLE `notices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stubl`
--
ALTER TABLE `stubl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `student_id` (`student_id`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `notices`
--
ALTER TABLE `notices`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `stubl`
--
ALTER TABLE `stubl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
