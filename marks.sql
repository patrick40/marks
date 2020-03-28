-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 28, 2020 at 09:22 AM
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
(1, 'AI', 'ITE4163', '0'),
(2, 'Cyber security', 'ETE4264', '1'),
(3, 'System Administration with Linux', 'ITE4263', '0'),
(4, 'System Administration with Linux', 'ITE4263', '1');

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
  `password` varchar(500) NOT NULL DEFAULT '12345',
  `signature` varchar(455) DEFAULT NULL,
  `status` varchar(45) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hod`
--

INSERT INTO `hod` (`hod_id`, `first_name`, `last_name`, `email`, `phone`, `password`, `signature`, `status`) VALUES
(1, 'Dominique2020', 'Harelimana', 'hodoque2020@gmail.com', '0783456554', '12345', NULL, '1'),
(2, 'Munyakayanza', 'Olivier', 'munyakayanza@gmail.com', '12345678901', '12345', NULL, '1');

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
  `password` varchar(500) NOT NULL DEFAULT '12345',
  `gender` varchar(45) DEFAULT NULL,
  `status` varchar(45) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lecturer`
--

INSERT INTO `lecturer` (`lecturer_id`, `first_name`, `last_name`, `email`, `phone`, `password`, `gender`, `status`) VALUES
(1, 'George', 'Mugisha', 'mugisha@gmail.com', '07856789234', '12345', 'm', '1'),
(2, 'muyango', 'charles', 'cyamuyango@gmail.com', '078945673', '12345', 'm', '1'),
(3, 'Karasira', 'Aimable', 'aimablekarasira@gmail.com', '0784323432', '', 'm', '1'),
(4, 'afafaf', 'fsddsf', 'afsasad@gmail.com', '343242342', '', 'f', '1'),
(5, 'fsfsdfsdf', 'sdttert', 'sdetted@gmail.com', '34453345', '', 'm', '1'),
(6, 'dhffgdf', 'zgedsv', 'dggfdgdf@gmail.com', '324243242', '', 'm', '1'),
(7, 'Peace', 'Biramurigire', 'birapeace@gmail.com', '0786435414', '', 'f', '1'),
(8, 'asfsdf', 'fadsad', 'afadasd@gmail.com', '524324324', '12345', 'm', '1'),
(9, 'aszdaw', 'dsfdsfds', 'sdffewsrw@gmail.com', '1234567890', '12345', 'f', '1');

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
  `status` varchar(45) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(1, 'claim', '1'),
(2, 'remedial', '1'),
(3, 'retake', '1');

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
  `student_level` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `phone` varchar(45) DEFAULT NULL,
  `password` varchar(500) NOT NULL DEFAULT '12345',
  `status` varchar(45) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`student_id`, `first_name`, `last_name`, `reg_number`, `gender`, `student_level`, `email`, `phone`, `password`, `status`) VALUES
(1, 'Patrick', 'Mutabazi', '217031331', 'm', '4', 'pmutabazi40@yahoo.com', '0786089262', '12345', '1'),
(2, 'charity', 'arerweneza', '217031256', 'f', '4', 'rennycharity@gmail.com', '0789044557', '12345', '1'),
(3, 'olive', 'mukayuhi', '217130592', 'f', '4', 'mukaollive@gmail.com', '0789044124', '12345', '1'),
(4, NULL, NULL, NULL, NULL, '4', NULL, NULL, '', '0'),
(5, NULL, NULL, NULL, NULL, '4', NULL, NULL, '', '0'),
(6, 'Niyongabo', 'emmanuel', '217184820', 'm', '3', 'niyoemmy@gmail.com', '07856789234', '', '1'),
(7, 'Tuyishime', 'Alexis', '217943284', 'm', '1', 'tuyishime@gmail.com', '123456789', '', '0'),
(8, 'Nshimiyimana', 'Emmanuel', '213243243', 'f', '2', 'nshimiyimana@gmail.com', '0782847264', '', '0'),
(9, 'Eric', 'Eric', '1234534', 'm', '3', 'eric@gmail.com', '12345', '', '0'),
(10, 'Ntambara', 'Frank', '2170344354', 'm', '2', 'ntambara@gmail.com', '078232434', '', '0'),
(11, 'Kaboneka', 'Frank', '21323132', 'm', '2', 'kaboneka@gmail.com', '0783423242', '', '0'),
(12, 'Nshimiyimana', 'l;kj', '980', 'm', '2', 'niyoemmysfew@gmail.com', '0783423244', '', '0'),
(13, 'Nshimiyimana', 'l;kj', '980876', 'm', '1', 'niyoemmysfew1@gmail.com', '07834232445', '', '0'),
(14, 'etwr', 'efra', '345334', 'f', '1', 'ewrrew@gmail.com', '325234324', '', '0'),
(15, 'arwesd', 'wrwerre', '3424323432', 'm', '2', 'ewrew@gmail.com', '324234324', '12345', '0'),
(16, 'Patrick', 'manzi', '217031931', 'm', '4', 'manzipatrick1@gmail.com', '078209820', '12345', '0'),
(17, 'dfsada', 'asfsad', '32432432', 'm', '1', 'sfasczxzs@gmail.com', '1223443', '12345', '0');

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
  ADD KEY `fk_marks_course1_idx` (`course_id`);

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
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `course_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `hod`
--
ALTER TABLE `hod`
  MODIFY `hod_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `lecturer`
--
ALTER TABLE `lecturer`
  MODIFY `lecturer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `marks`
--
ALTER TABLE `marks`
  MODIFY `marks_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mark_type`
--
ALTER TABLE `mark_type`
  MODIFY `mark_type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `re_mark`
--
ALTER TABLE `re_mark`
  MODIFY `re_mark_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `re_mark_type`
--
ALTER TABLE `re_mark_type`
  MODIFY `re_mark_type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `student_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

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
  ADD CONSTRAINT `fk_marks_student1` FOREIGN KEY (`student_id`) REFERENCES `student` (`student_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

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
