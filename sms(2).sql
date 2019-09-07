-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 07, 2019 at 11:42 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sms`
--

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

CREATE TABLE `class` (
  `c_id` int(11) NOT NULL,
  `c_name` varchar(255) NOT NULL,
  `c_dateAdded` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `class`
--

INSERT INTO `class` (`c_id`, `c_name`, `c_dateAdded`) VALUES
(1, 'Class Four', '2019-09-01'),
(2, 'Class Five', '2019-09-01'),
(3, 'Class Six', '2019-09-01'),
(4, 'Class One', '2019-09-01'),
(5, 'Class Two', '2019-09-01'),
(6, 'Class Three', '2019-09-01'),
(7, 'JHS One', '2019-09-02');

-- --------------------------------------------------------

--
-- Table structure for table `class_attendence`
--

CREATE TABLE `class_attendence` (
  `ca_id` int(11) NOT NULL,
  `ca_studID` int(11) DEFAULT NULL,
  `ca_classID` int(11) DEFAULT NULL,
  `ca_date` date NOT NULL,
  `ca_status` varchar(10) NOT NULL,
  `ca_reason` text NOT NULL,
  `ca_periodID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `class_rouctine`
--

CREATE TABLE `class_rouctine` (
  `cr_id` int(11) NOT NULL,
  `cr_classID` int(11) DEFAULT NULL,
  `cr_subjectID` int(11) DEFAULT NULL,
  `cr_teacherID` int(11) DEFAULT NULL,
  `cr_day` varchar(10) NOT NULL,
  `cr_startTime` varchar(10) NOT NULL,
  `cr_endTime` varchar(10) NOT NULL,
  `cr_periodID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `exams`
--

CREATE TABLE `exams` (
  `id` int(11) NOT NULL,
  `s_id` varchar(200) NOT NULL,
  `s_name` varchar(200) NOT NULL,
  `subjects` varchar(200) NOT NULL,
  `class` varchar(200) NOT NULL,
  `classscore` varchar(200) NOT NULL,
  `examsscore` varchar(200) NOT NULL,
  `overallscore` varchar(200) NOT NULL,
  `position` varchar(200) NOT NULL,
  `grade` varchar(200) NOT NULL,
  `term` varchar(200) NOT NULL,
  `year` varchar(200) NOT NULL,
  `overallposition` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `exams`
--

INSERT INTO `exams` (`id`, `s_id`, `s_name`, `subjects`, `class`, `classscore`, `examsscore`, `overallscore`, `position`, `grade`, `term`, `year`, `overallposition`) VALUES
(1, '1', 'Mark Clever', 'English', '7', '30', '50', '80', '1st', 'A', 'term1', '2019', ''),
(2, '1', 'Mark Clever', 'GHANAIAN LANGUAGE', '7', '30', '45', '75', '3rd', 'B+', 'term1', '2019', ''),
(3, '1', 'Mark Clever', 'Maths', '7', '35', '45', '80', '4th', 'A', 'term1', '2019', '');

-- --------------------------------------------------------

--
-- Table structure for table `fees`
--

CREATE TABLE `fees` (
  `id` int(11) NOT NULL,
  `sid` int(11) NOT NULL,
  `pic` varchar(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `gender` varchar(200) NOT NULL,
  `class` varchar(200) NOT NULL,
  `term` varchar(200) NOT NULL,
  `feetype` varchar(200) NOT NULL,
  `status` varchar(200) NOT NULL,
  `amount` varchar(200) NOT NULL,
  `receiver` varchar(200) NOT NULL,
  `payer` varchar(200) NOT NULL,
  `payer_contact` varchar(200) NOT NULL,
  `datepaid` varchar(200) NOT NULL,
  `year` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fees`
--

INSERT INTO `fees` (`id`, `sid`, `pic`, `name`, `gender`, `class`, `term`, `feetype`, `status`, `amount`, `receiver`, `payer`, `payer_contact`, `datepaid`, `year`) VALUES
(1, 1, 'student5d6e9186bf7b4.jpg ', 'Mark Clever', 'Male ', '7 ', 'term1', 'school-fees', 'full', '400', 'Cashier', 'Desmond Ansah', '0556676471', '06/09/2019', '2019'),
(2, 2, 'student5d6e91b816c78.jpg ', 'Mary Clever', 'Female ', '3 ', 'term1', 'school-fees', 'part', '200', 'Cashier', 'Kimbling', '02334455', '06/09/2019', '2019'),
(3, 2, 'student5d6e91b816c78.jpg ', 'Mary Clever', 'Female ', '3 ', 'term2', 'school-fees', 'full', '200', 'Cahsier', 'Blessed ', '023673764', '06/09/2019', '2018');

-- --------------------------------------------------------

--
-- Table structure for table `parents`
--

CREATE TABLE `parents` (
  `p_id` int(11) NOT NULL,
  `p_fName` varchar(100) NOT NULL,
  `p_lName` varchar(100) NOT NULL,
  `p_relationship` varchar(10) NOT NULL,
  `p_photo` varchar(255) NOT NULL,
  `p_phone` varchar(20) NOT NULL,
  `p_job` varchar(255) DEFAULT NULL,
  `p_gender` varchar(10) DEFAULT NULL,
  `p_nationality` varchar(50) NOT NULL,
  `p_religion` varchar(100) NOT NULL,
  `p_info` text DEFAULT NULL,
  `p_address` text NOT NULL,
  `p_dateAdded` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `parents`
--

INSERT INTO `parents` (`p_id`, `p_fName`, `p_lName`, `p_relationship`, `p_photo`, `p_phone`, `p_job`, `p_gender`, `p_nationality`, `p_religion`, `p_info`, `p_address`, `p_dateAdded`) VALUES
(1, 'John', 'Clever', 'Father', 'parent5d6e90c179c1d.jpg', '1234567890', 'Engineer', 'Male', 'Ghanaian', 'Christian', '', 'P.O.Box KS 90', '2019-09-03'),
(2, 'Perfect', 'Clever', 'Mother', 'parent5d6e912a8287e.jpg', '1234567891', 'Secretary', 'Female', 'Ghanaian', 'Hindu', '', 'P.O.Box KS 90', '2019-09-03');

-- --------------------------------------------------------

--
-- Table structure for table `period`
--

CREATE TABLE `period` (
  `pd_id` int(11) NOT NULL,
  `pd_startDate` date NOT NULL,
  `pd_endDate` date NOT NULL,
  `pd_term` text NOT NULL,
  `pd_year` year(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `s_id` int(11) NOT NULL,
  `s_fName` varchar(50) NOT NULL,
  `s_lName` varchar(50) NOT NULL,
  `s_photo` varchar(255) DEFAULT NULL,
  `s_dob` date NOT NULL,
  `s_doa` date NOT NULL,
  `s_gender` varchar(10) NOT NULL,
  `s_nationality` varchar(50) NOT NULL DEFAULT 'Ghanaian',
  `s_religion` varchar(50) DEFAULT NULL,
  `s_class` int(11) DEFAULT NULL,
  `s_homTelNum` varchar(50) DEFAULT NULL,
  `s_docName` varchar(100) DEFAULT NULL,
  `s_docTel` varchar(50) DEFAULT NULL,
  `s_fatherName` int(11) DEFAULT NULL,
  `s_motherName` int(11) DEFAULT NULL,
  `s_guardianName` int(11) DEFAULT NULL,
  `s_info` text DEFAULT NULL,
  `s_dateAdded` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`s_id`, `s_fName`, `s_lName`, `s_photo`, `s_dob`, `s_doa`, `s_gender`, `s_nationality`, `s_religion`, `s_class`, `s_homTelNum`, `s_docName`, `s_docTel`, `s_fatherName`, `s_motherName`, `s_guardianName`, `s_info`, `s_dateAdded`) VALUES
(1, 'Mark', 'Clever', 'student5d6e9186bf7b4.jpg', '2019-09-12', '2019-09-01', 'Male', 'Ghanaian', 'Islam', 7, '0001231234', '', '', 1, 2, NULL, '', '2019-09-03'),
(2, 'Mary', 'Clever', 'student5d6e91b816c78.jpg', '2019-09-20', '2019-09-02', 'Female', 'Ghanaian', 'Christian', 3, '1231231230', '', '', 1, 2, NULL, '', '2019-09-03'),
(3, 'Richard', 'Ansah', 'student5d72695f1ca60.jpg', '2019-09-03', '2019-09-03', 'Male', 'Ghanaian', 'Christian', 1, '055577774', 'Denice', '055555555', 1, 2, NULL, 'jz znm nmz ', '2019-09-06');

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `sub_id` int(11) NOT NULL,
  `sub_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`sub_id`, `sub_name`) VALUES
(1, 'English'),
(2, 'Maths'),
(4, 'GHANAIAN LANGUAGE');

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `t_id` int(11) NOT NULL,
  `t_fName` varchar(100) NOT NULL,
  `t_lName` varchar(100) NOT NULL,
  `t_photo` varchar(255) DEFAULT NULL,
  `t_class` int(11) DEFAULT NULL,
  `t_dob` date NOT NULL,
  `t_doAppoint` date NOT NULL,
  `t_phone` varchar(20) NOT NULL,
  `t_email` varchar(150) DEFAULT NULL,
  `t_religion` varchar(50) NOT NULL,
  `t_maritalStats` varchar(50) NOT NULL,
  `t_SSNITNum` varchar(255) DEFAULT NULL,
  `t_NHISNum` varchar(255) DEFAULT NULL,
  `t_info` text DEFAULT NULL,
  `t_loginDetails` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `class`
--
ALTER TABLE `class`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `class_attendence`
--
ALTER TABLE `class_attendence`
  ADD PRIMARY KEY (`ca_id`),
  ADD KEY `class_attend__class` (`ca_classID`),
  ADD KEY `class_attend__pd` (`ca_periodID`),
  ADD KEY `class_attend__stud` (`ca_studID`);

--
-- Indexes for table `class_rouctine`
--
ALTER TABLE `class_rouctine`
  ADD PRIMARY KEY (`cr_id`),
  ADD KEY `cr_classID` (`cr_classID`,`cr_subjectID`,`cr_teacherID`,`cr_periodID`),
  ADD KEY `classRoutine_period` (`cr_periodID`),
  ADD KEY `classRoutine_subject` (`cr_subjectID`),
  ADD KEY `classRoutine_teacher` (`cr_teacherID`);

--
-- Indexes for table `exams`
--
ALTER TABLE `exams`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fees`
--
ALTER TABLE `fees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `parents`
--
ALTER TABLE `parents`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `period`
--
ALTER TABLE `period`
  ADD PRIMARY KEY (`pd_id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`s_id`),
  ADD KEY `s_fatherName` (`s_fatherName`),
  ADD KEY `s_motherName` (`s_motherName`),
  ADD KEY `s_guardianName` (`s_guardianName`),
  ADD KEY `s_class` (`s_class`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`sub_id`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`t_id`),
  ADD KEY `t_class` (`t_class`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `class`
--
ALTER TABLE `class`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `class_attendence`
--
ALTER TABLE `class_attendence`
  MODIFY `ca_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `class_rouctine`
--
ALTER TABLE `class_rouctine`
  MODIFY `cr_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `exams`
--
ALTER TABLE `exams`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `fees`
--
ALTER TABLE `fees`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `parents`
--
ALTER TABLE `parents`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `period`
--
ALTER TABLE `period`
  MODIFY `pd_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `s_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `subjects`
--
ALTER TABLE `subjects`
  MODIFY `sub_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `t_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
