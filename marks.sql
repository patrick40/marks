-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 21, 2020 at 09:37 AM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `marks`
--

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `course_id` int(11) NOT NULL,
  `course_name` varchar(45) DEFAULT NULL,
  `course_code` varchar(45) DEFAULT NULL,
  `status` varchar(45) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`course_id`, `course_name`, `course_code`, `status`) VALUES
(1, 'CYBER SECURITY', 'ITE4262', '1'),
(2, 'DATA MINING', 'CSC4464', '1'),
(3, 'SYSTEM ADMIN WITH LINUX', 'ITE4163', '1');

-- --------------------------------------------------------

--
-- Table structure for table `hod`
--

CREATE TABLE `hod` (
  `hod_id` int(11) NOT NULL,
  `first_name` varchar(45) DEFAULT NULL,
  `last_name` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `phone` varchar(45) DEFAULT NULL,
  `password` varchar(50) NOT NULL DEFAULT '12345',
  `signature` varchar(455) DEFAULT NULL,
  `status` varchar(45) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hod`
--

INSERT INTO `hod` (`hod_id`, `first_name`, `last_name`, `email`, `phone`, `password`, `signature`, `status`) VALUES
(1, 'Harelimana', 'Dominique', 'hadoque@gmail.com', '07893452', '12345', NULL, '1');

-- --------------------------------------------------------

--
-- Table structure for table `lecturer`
--

CREATE TABLE `lecturer` (
  `lecturer_id` int(11) NOT NULL,
  `first_name` varchar(45) DEFAULT NULL,
  `last_name` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `phone` varchar(45) DEFAULT NULL,
  `password` varchar(50) NOT NULL DEFAULT '12345',
  `gender` varchar(45) DEFAULT NULL,
  `status` varchar(45) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lecturer`
--

INSERT INTO `lecturer` (`lecturer_id`, `first_name`, `last_name`, `email`, `phone`, `password`, `gender`, `status`) VALUES
(1, 'Mugisha', 'George', 'mugisha@gmail.com', '078345654', '12345', 'm', '1');

-- --------------------------------------------------------

--
-- Table structure for table `marks`
--

CREATE TABLE `marks` (
  `marks_id` int(11) NOT NULL,
  `marks` double DEFAULT NULL,
  `marks_out_of` int(11) DEFAULT '50',
  `mark_type_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `lecturer_id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `term_id` int(11) NOT NULL,
  `academic_year` varchar(45) DEFAULT NULL,
  `status` varchar(45) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `marks`
--

INSERT INTO `marks` (`marks_id`, `marks`, `marks_out_of`, `mark_type_id`, `student_id`, `lecturer_id`, `course_id`, `term_id`, `academic_year`, `status`) VALUES
(3, 47, 50, 1, 1, 1, 1, 1, '2017-2018', '1'),
(4, 45, 50, 1, 2, 1, 2, 1, '2017-2018', '1'),
(6, 47, 50, 2, 2, 1, 1, 1, '2017-2018', '1'),
(7, 45, 50, 2, 1, 1, 2, 1, '2017-2018', '1'),
(8, 45, 50, 2, 3, 1, 3, 2, '2018-2019', '1');

-- --------------------------------------------------------

--
-- Table structure for table `mark_type`
--

CREATE TABLE `mark_type` (
  `mark_type_id` int(11) NOT NULL,
  `mark_type` varchar(45) DEFAULT NULL,
  `status` varchar(45) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mark_type`
--

INSERT INTO `mark_type` (`mark_type_id`, `mark_type`, `status`) VALUES
(1, 'CAT', '1'),
(2, 'EXAM', '1');

-- --------------------------------------------------------

--
-- Table structure for table `re_mark`
--

CREATE TABLE `re_mark` (
  `re_mark_id` int(11) NOT NULL,
  `marks` double DEFAULT NULL,
  `marks_id` int(11) NOT NULL,
  `hod_id` int(11) NOT NULL,
  `re_mark_type_id` int(11) NOT NULL,
  `status` varchar(45) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `re_mark`
--

INSERT INTO `re_mark` (`re_mark_id`, `marks`, `marks_id`, `hod_id`, `re_mark_type_id`, `status`) VALUES
(1, 50, 3, 1, 2, '1'),
(2, 45, 3, 1, 4, '1'),
(3, 50, 8, 1, 4, '1'),
(4, 45, 8, 1, 1, '1'),
(7, 38, 8, 1, 2, '1');

-- --------------------------------------------------------

--
-- Table structure for table `re_mark_type`
--

CREATE TABLE `re_mark_type` (
  `re_mark_type_id` int(11) NOT NULL,
  `re_mark_type` varchar(45) DEFAULT NULL,
  `status` varchar(45) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `re_mark_type`
--

INSERT INTO `re_mark_type` (`re_mark_type_id`, `re_mark_type`, `status`) VALUES
(1, 'Remedial', '1'),
(2, 'Retake', '1'),
(3, 'Special', '1'),
(4, 'Claim', '1');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `student_id` int(11) NOT NULL,
  `first_name` varchar(45) DEFAULT NULL,
  `last_name` varchar(45) DEFAULT NULL,
  `reg_number` varchar(45) DEFAULT NULL,
  `gender` varchar(45) DEFAULT NULL,
  `date_of_birth` date NOT NULL,
  `student_level` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `phone` varchar(45) DEFAULT NULL,
  `password` varchar(50) NOT NULL DEFAULT '12345',
  `status` varchar(45) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`student_id`, `first_name`, `last_name`, `reg_number`, `gender`, `date_of_birth`, `student_level`, `email`, `phone`, `password`, `status`) VALUES
(1, 'Patrick', 'MUTABAZI', '217031331', 'm', '1994-12-06', '4', 'pmutabazi40@yahoo.com', '0786089262', '12345', '1'),
(2, 'Betty', 'Dary', '21809001', 'f', '1998-05-01', '2', 'darybetty@gmail.com', '0787130914', '12345', '1'),
(3, 'Arerweneza ', 'Charite', '21703324', 'f', '2020-04-15', '4', 'renycharitygmail.com', '0782755860', '12345', '1');

-- --------------------------------------------------------

--
-- Table structure for table `term`
--

CREATE TABLE `term` (
  `term_id` int(11) NOT NULL,
  `term_name` varchar(45) DEFAULT NULL,
  `status` varchar(45) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `term`
--

INSERT INTO `term` (`term_id`, `term_name`, `status`) VALUES
(1, 'Semester_One', '1'),
(2, 'Semester_Two', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`course_id`);

--
-- Indexes for table `hod`
--
ALTER TABLE `hod`
  ADD PRIMARY KEY (`hod_id`);

--
-- Indexes for table `lecturer`
--
ALTER TABLE `lecturer`
  ADD PRIMARY KEY (`lecturer_id`);

--
-- Indexes for table `marks`
--
ALTER TABLE `marks`
  ADD PRIMARY KEY (`marks_id`),
  ADD KEY `fk_marks_mark_type_idx` (`mark_type_id`),
  ADD KEY `fk_marks_student1_idx` (`student_id`),
  ADD KEY `fk_marks_lecturer1_idx` (`lecturer_id`),
  ADD KEY `fk_marks_course1_idx` (`course_id`),
  ADD KEY `fk_marks_term1_idx` (`term_id`);

--
-- Indexes for table `mark_type`
--
ALTER TABLE `mark_type`
  ADD PRIMARY KEY (`mark_type_id`);

--
-- Indexes for table `re_mark`
--
ALTER TABLE `re_mark`
  ADD PRIMARY KEY (`re_mark_id`),
  ADD KEY `fk_re_mark_marks1_idx` (`marks_id`),
  ADD KEY `fk_re_mark_hod1_idx` (`hod_id`),
  ADD KEY `fk_re_mark_re_mark_type1_idx` (`re_mark_type_id`);

--
-- Indexes for table `re_mark_type`
--
ALTER TABLE `re_mark_type`
  ADD PRIMARY KEY (`re_mark_type_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `term`
--
ALTER TABLE `term`
  ADD PRIMARY KEY (`term_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `course_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `hod`
--
ALTER TABLE `hod`
  MODIFY `hod_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `lecturer`
--
ALTER TABLE `lecturer`
  MODIFY `lecturer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `marks`
--
ALTER TABLE `marks`
  MODIFY `marks_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `mark_type`
--
ALTER TABLE `mark_type`
  MODIFY `mark_type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `re_mark`
--
ALTER TABLE `re_mark`
  MODIFY `re_mark_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `re_mark_type`
--
ALTER TABLE `re_mark_type`
  MODIFY `re_mark_type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `student_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `term`
--
ALTER TABLE `term`
  MODIFY `term_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `marks`
--
ALTER TABLE `marks`
  ADD CONSTRAINT `fk_marks_course1` FOREIGN KEY (`course_id`) REFERENCES `course` (`course_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_marks_lecturer1` FOREIGN KEY (`lecturer_id`) REFERENCES `lecturer` (`lecturer_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_marks_mark_type` FOREIGN KEY (`mark_type_id`) REFERENCES `mark_type` (`mark_type_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_marks_student1` FOREIGN KEY (`student_id`) REFERENCES `student` (`student_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_marks_term1` FOREIGN KEY (`term_id`) REFERENCES `term` (`term_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `re_mark`
--
ALTER TABLE `re_mark`
  ADD CONSTRAINT `fk_re_mark_hod1` FOREIGN KEY (`hod_id`) REFERENCES `hod` (`hod_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_re_mark_marks1` FOREIGN KEY (`marks_id`) REFERENCES `marks` (`marks_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_re_mark_re_mark_type1` FOREIGN KEY (`re_mark_type_id`) REFERENCES `re_mark_type` (`re_mark_type_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
