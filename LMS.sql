-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 08, 2022 at 10:37 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lms`
--

-- --------------------------------------------------------

--
-- Table structure for table `department_master`
--

CREATE TABLE `department_master` (
  `id` int(11) NOT NULL,
  `dept_name` varchar(128) NOT NULL,
  `short_name` varchar(20) NOT NULL,
  `strength` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `department_master`
--

INSERT INTO `department_master` (`id`, `dept_name`, `short_name`, `strength`, `created_at`, `updated_at`, `status`) VALUES
(1, 'computer_science', 'cse', 15, '2022-09-21 12:49:23', '2022-09-21 12:49:23', 1),
(2, 'information_science', 'ise', 15, '2022-09-21 12:49:23', '2022-09-21 12:49:23', 1),
(3, 'electrical', 'eee', 15, '2022-09-21 12:50:50', '2022-09-21 12:50:50', 1),
(4, 'electronics', 'enc', 15, '2022-09-21 12:50:50', '2022-09-21 12:50:50', 1),
(5, 'mechanical ', 'mech', 15, '2022-09-21 12:51:34', '2022-09-21 12:51:34', 1),
(6, 'civil', 'civ', 15, '2022-09-21 12:51:34', '2022-09-21 12:51:34', 1),
(7, 'aeronautical ', 'aero', 15, '2022-09-21 12:52:06', '2022-09-21 12:52:06', 1);

-- --------------------------------------------------------

--
-- Table structure for table `designation_master`
--

CREATE TABLE `designation_master` (
  `id` int(11) NOT NULL,
  `design_name` varchar(64) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `designation_master`
--

INSERT INTO `designation_master` (`id`, `design_name`, `status`) VALUES
(1, 'superadmin', 1),
(2, 'administrator ', 1),
(3, 'principal ', 1),
(4, 'dean_administration ', 1),
(5, 'dean_infrastructure ', 1),
(6, 'dean_researchanddev', 1),
(7, 'hod_cse', 1),
(8, 'hod_ise', 1),
(9, 'hod_eee', 1),
(10, 'hod_enc', 1),
(11, 'hod_mech', 1),
(12, 'hod_civil', 1),
(13, 'hod_aero', 1),
(14, 'professor ', 1),
(15, 'assistant_professor', 1),
(16, 'associate_professor', 1),
(17, 'lab_instructor ', 1),
(18, 'clerk', 1),
(19, 'placement_officer', 1),
(20, 'librarian', 1);

-- --------------------------------------------------------

--
-- Table structure for table `employee_master`
--

CREATE TABLE `employee_master` (
  `id` int(11) NOT NULL,
  `emp_id` varchar(12) NOT NULL,
  `name` varchar(64) NOT NULL,
  `design_id` int(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `contact` int(20) NOT NULL,
  `gender` int(11) NOT NULL,
  `address` text NOT NULL,
  `dept_id` int(11) NOT NULL,
  `username` varchar(64) NOT NULL,
  `password` varchar(128) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime NOT NULL,
  `status` int(11) NOT NULL COMMENT '-1 = unregistered user    0- Ex-user   1- Existing User (Active)'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee_master`
--

INSERT INTO `employee_master` (`id`, `emp_id`, `name`, `design_id`, `email`, `contact`, `gender`, `address`, `dept_id`, `username`, `password`, `created_at`, `updated_at`, `status`) VALUES
(1, 'SAD001', 'super_admin', 1, 'admin@gmail.com', 897626217, 1, 'xyz street', 3, 'admin@gmail.com', 'admin123', '2022-09-21 13:10:24', '2022-09-21 13:10:24', 1),
(2, 'AD001', 'administrator ', 2, 'collegead@gmail.com', 983829193, 1, 'abc street', 3, 'collegead@gmail.com', 'college123', '2022-09-21 13:12:48', '2022-09-21 13:12:48', 1),
(3, 'PL001', 'principal', 3, 'principal@gmail.com', 982829202, 1, 'gggg street', 1, 'principal@gmail.com', 'principal123', '2022-09-21 13:12:48', '2022-09-21 13:12:48', 1),
(4, 'cs001', 'FalakKhan', 7, 'khanfalak799@gmail.com', 2147483647, 2, 'house no 23 khanapur road', 1, 'khanfalak799@gmail.com', 'falak@12', '2022-10-01 14:19:06', '2022-10-04 14:18:33', -2),
(5, 'ee003', 'Sanket', 7, 'sanket@gmail.com', 983829193, 1, 'jjjj', 4, 'sanket@gmail.com', 'sanket123', '2022-09-23 13:01:04', '2022-09-23 09:31:04', -1),
(6, 'EE004', 'ashwini BT', 6, 'toranagatti@gmail.com', 98382915, 1, 'bailhongal karnataka', 5, 'toranagatti@gmail.com', 'ashu123', '2022-09-28 09:31:06', '2022-09-28 09:31:06', -1);

-- --------------------------------------------------------

--
-- Table structure for table `gender_master`
--

CREATE TABLE `gender_master` (
  `id` int(11) NOT NULL,
  `gender_name` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gender_master`
--

INSERT INTO `gender_master` (`id`, `gender_name`) VALUES
(1, 'male'),
(2, 'female');

-- --------------------------------------------------------

--
-- Table structure for table `leave_applications`
--

CREATE TABLE `leave_applications` (
  `id` int(11) NOT NULL,
  `emp_id` int(11) NOT NULL,
  `design_id` int(20) NOT NULL,
  `dept_id` int(11) NOT NULL,
  `from_date` date NOT NULL,
  `to_date` int(11) NOT NULL,
  `type_of_leave` int(11) NOT NULL,
  `alt` int(11) NOT NULL COMMENT 'alternative person id',
  `reason` int(11) NOT NULL COMMENT 'Leave reason (note)',
  `approval_status` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `leave_entitle`
--

CREATE TABLE `leave_entitle` (
  `id` int(11) NOT NULL,
  `emp_id` int(11) NOT NULL,
  `year` year(4) NOT NULL,
  `CL` int(11) NOT NULL COMMENT 'Casual Leave',
  `DL` int(11) NOT NULL COMMENT 'Duty Leave',
  `EL` int(11) NOT NULL COMMENT 'Earned Leave (Extended))',
  `RH` int(11) NOT NULL COMMENT 'Restritcted Hoiday',
  `ML` int(11) NOT NULL COMMENT 'Medical Leave',
  `CL_t` int(11) NOT NULL COMMENT 'CL taken',
  `DL_t` int(11) NOT NULL COMMENT 'DL Taken',
  `EL_t` int(11) NOT NULL COMMENT 'EL Taken',
  `RH_t` int(11) NOT NULL COMMENT 'RH Taken',
  `ML_t` int(11) NOT NULL COMMENT 'ML Taken',
  `WP` int(11) NOT NULL COMMENT 'Leave Without Pay',
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `leave_entitle`
--

INSERT INTO `leave_entitle` (`id`, `emp_id`, `year`, `CL`, `DL`, `EL`, `RH`, `ML`, `CL_t`, `DL_t`, `EL_t`, `RH_t`, `ML_t`, `WP`, `created_at`, `updated_at`, `status`) VALUES
(1, 4, 2022, 5, 3, 3, 3, 3, 3, 3, 3, 2, 2, 2, '2022-09-11 12:50:28', '2022-09-17 12:50:28', 1);

-- --------------------------------------------------------

--
-- Table structure for table `meta_aproval_status`
--

CREATE TABLE `meta_aproval_status` (
  `id` int(11) NOT NULL,
  `approval_status_name` varchar(32) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `meta_aproval_status`
--

INSERT INTO `meta_aproval_status` (`id`, `approval_status_name`, `status`) VALUES
(1, 'applied', 1),
(2, 'pending', 1),
(3, 'approved ', 1),
(4, 'cancelled ', 1);

-- --------------------------------------------------------

--
-- Table structure for table `meta_leave_types`
--

CREATE TABLE `meta_leave_types` (
  `id` int(11) NOT NULL,
  `leave_type` int(11) NOT NULL,
  `leave_name` varchar(64) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `meta_leave_types`
--

INSERT INTO `meta_leave_types` (`id`, `leave_type`, `leave_name`, `status`) VALUES
(1, 1, 'casual_leave', 1),
(2, 2, 'duty_leave', 1),
(3, 3, 'extended_leave', 1),
(4, 4, 'restricted_leave', 1),
(5, 5, 'unpaid_leave', 1),
(6, 6, 'medical_leave', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `department_master`
--
ALTER TABLE `department_master`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `designation_master`
--
ALTER TABLE `designation_master`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee_master`
--
ALTER TABLE `employee_master`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gender_master`
--
ALTER TABLE `gender_master`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `leave_applications`
--
ALTER TABLE `leave_applications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `leave_entitle`
--
ALTER TABLE `leave_entitle`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `meta_aproval_status`
--
ALTER TABLE `meta_aproval_status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `meta_leave_types`
--
ALTER TABLE `meta_leave_types`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `department_master`
--
ALTER TABLE `department_master`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `designation_master`
--
ALTER TABLE `designation_master`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `employee_master`
--
ALTER TABLE `employee_master`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `gender_master`
--
ALTER TABLE `gender_master`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `leave_applications`
--
ALTER TABLE `leave_applications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `leave_entitle`
--
ALTER TABLE `leave_entitle`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `meta_aproval_status`
--
ALTER TABLE `meta_aproval_status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `meta_leave_types`
--
ALTER TABLE `meta_leave_types`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
