-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 18, 2019 at 11:17 PM
-- Server version: 10.1.40-MariaDB
-- PHP Version: 7.3.5

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
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `s_id` int(11) NOT NULL,
  `s_fName` varchar(50) NOT NULL,
  `s_lName` varchar(50) NOT NULL,
  `s_studImg` varchar(255) DEFAULT NULL,
  `s_dob` date NOT NULL,
  `s_doa` date NOT NULL,
  `s_gender` varchar(10) NOT NULL,
  `s_nation` varchar(50) NOT NULL DEFAULT 'Ghanaian',
  `s_religion` varchar(50) DEFAULT NULL,
  `s_class` int(11) DEFAULT NULL,
  `s_homTelNum` varchar(50) DEFAULT NULL,
  `s_docName` varchar(100) DEFAULT NULL,
  `s_docTel` varchar(50) DEFAULT NULL,
  `s_fatherName` int(11) DEFAULT NULL,
  `s_motherName` int(11) DEFAULT NULL,
  `s_mess` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`s_id`, `s_fName`, `s_lName`, `s_studImg`, `s_dob`, `s_doa`, `s_gender`, `s_nation`, `s_religion`, `s_class`, `s_homTelNum`, `s_docName`, `s_docTel`, `s_fatherName`, `s_motherName`, `s_mess`) VALUES
(1, 'Josh', 'Pong', 'img/figure/atudent1,jpg', '2019-08-07', '2019-09-10', 'Male', 'Ghanaian', 'Islam', NULL, NULL, NULL, NULL, NULL, NULL, 'Has little heart problem'),
(2, 'Aria', 'Stark', NULL, '2019-08-05', '2019-08-24', 'Female', 'Ghanaian', 'Christian', NULL, '000 000 0000', NULL, NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`s_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `s_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
