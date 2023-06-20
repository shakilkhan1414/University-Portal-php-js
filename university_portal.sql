-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 20, 2023 at 09:31 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `university_portal`
--

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(11) NOT NULL,
  `student_id` varchar(20) NOT NULL,
  `registered_subjects` varchar(1000) NOT NULL,
  `name` varchar(100) NOT NULL,
  `studentid` varchar(100) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `mname` varchar(100) NOT NULL,
  `program` varchar(100) NOT NULL,
  `department` varchar(100) NOT NULL,
  `registration` varchar(100) NOT NULL,
  `year` varchar(100) NOT NULL,
  `semester` varchar(100) NOT NULL,
  `sesson` varchar(100) NOT NULL,
  `presentAddress` varchar(200) NOT NULL,
  `permanentAddress` varchar(200) NOT NULL,
  `nationalID` varchar(100) NOT NULL,
  `nationality` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `bloodGroup` varchar(100) NOT NULL,
  `residential` varchar(20) NOT NULL,
  `hallName` varchar(100) DEFAULT NULL,
  `hall_provost` varchar(20) DEFAULT NULL,
  `hall_provost_approvedBy` varchar(20) DEFAULT NULL,
  `finace_department` varchar(20) DEFAULT NULL,
  `finace_department_approvedBy` varchar(20) DEFAULT NULL,
  `registrar` varchar(20) DEFAULT NULL,
  `registrar_approvedBy` varchar(20) DEFAULT NULL,
  `course_coOrdinator` varchar(20) DEFAULT NULL,
  `course_coOrdinator_approvedBy` varchar(20) DEFAULT NULL,
  `department_head` varchar(20) DEFAULT NULL,
  `department_head_approvedBy` varchar(20) DEFAULT NULL,
  `created_at` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `student_id`, `registered_subjects`, `name`, `studentid`, `fname`, `mname`, `program`, `department`, `registration`, `year`, `semester`, `sesson`, `presentAddress`, `permanentAddress`, `nationalID`, `nationality`, `email`, `bloodGroup`, `residential`, `hallName`, `hall_provost`, `hall_provost_approvedBy`, `finace_department`, `finace_department_approvedBy`, `registrar`, `registrar_approvedBy`, `course_coOrdinator`, `course_coOrdinator_approvedBy`, `department_head`, `department_head_approvedBy`, `created_at`) VALUES
(9, '1001', 'a:6:{i:0;s:1:\"3\";i:1;s:1:\"4\";i:2;s:1:\"5\";i:3;s:2:\"80\";i:4;s:2:\"79\";i:5;s:1:\"1\";}', 'Rohit Hasan', '1001', 'Mr. Hasan', 'Mrs. Hasan', 'CSE', 'CSE', '1011457', '2022', '7', 'Fall', 'Natore', 'Rajshahi', '104254254', 'Bangladeshi', 'rohit@gmail.com', 'A+', 'No', NULL, '1', '1015', NULL, NULL, '1', '1016', '1', '1019', '0', '', '2022-10-26'),
(10, '1001', 'a:6:{i:0;s:3:\"101\";i:1;s:3:\"102\";i:2;s:3:\"103\";i:3;s:3:\"104\";i:4;s:3:\"111\";i:5;s:3:\"135\";}', 'Rohit Hasan', '1001', 'Mr. Hasan', 'Mrs. Hasan', 'CSE', 'CSE', '1011457', '2022', '7', 'Fall', 'Natore', 'Rajshahi', '104254254', 'Bangladeshi', 'rohit@gmail.com', 'A+', 'Yes', 'Boral', NULL, NULL, '1', '1017', NULL, NULL, '1', '1019', '', '', '2022-10-26');

-- --------------------------------------------------------

--
-- Table structure for table `requests`
--

CREATE TABLE `requests` (
  `id` int(20) NOT NULL,
  `req_from` int(50) DEFAULT NULL,
  `bname` varchar(50) NOT NULL,
  `ename` varchar(100) NOT NULL,
  `bfathersName` varchar(50) NOT NULL,
  `efathersName` varchar(100) NOT NULL,
  `address` varchar(200) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `roll` varchar(50) NOT NULL,
  `registration` varchar(50) NOT NULL,
  `certificate_type` varchar(50) NOT NULL,
  `department` varchar(50) NOT NULL,
  `sesson` varchar(50) NOT NULL,
  `examYear` varchar(50) NOT NULL,
  `cgpa` varchar(50) NOT NULL,
  `resultDate` varchar(50) NOT NULL,
  `bankDetails` varchar(300) NOT NULL,
  `liabarian` varchar(50) DEFAULT NULL,
  `liabarian_comment` varchar(500) DEFAULT NULL,
  `liabarian_approvedBy` varchar(50) NOT NULL,
  `hall_provost` varchar(50) NOT NULL,
  `hall_provost_comment` varchar(500) DEFAULT NULL,
  `hall_provost_approvedBy` varchar(50) NOT NULL,
  `registrar` varchar(20) DEFAULT NULL,
  `registrar_approvedBy` varchar(20) DEFAULT NULL,
  `registrar_comment` varchar(200) DEFAULT NULL,
  `lab_asistance_CSE` varchar(50) DEFAULT NULL,
  `lab_asistance_CSE_comment` varchar(200) DEFAULT NULL,
  `lab_asistance_CSE_approvedBy` varchar(50) NOT NULL,
  `lab_asistance_EEE` varchar(50) DEFAULT NULL,
  `lab_asistance_EEE_comment` varchar(200) DEFAULT NULL,
  `lab_asistance_EEE_approvedBy` varchar(50) NOT NULL,
  `lab_asistance_ICE` varchar(50) DEFAULT NULL,
  `lab_asistance_ICE_comment` varchar(200) DEFAULT NULL,
  `lab_asistance_ICE_approvedBy` varchar(50) NOT NULL,
  `lab_asistance_CE` varchar(50) DEFAULT NULL,
  `lab_asistance_CE_comment` varchar(200) DEFAULT NULL,
  `lab_asistance_CE_approvedBy` varchar(50) NOT NULL,
  `department_head` varchar(50) DEFAULT NULL,
  `department_head_approvedBy` varchar(50) NOT NULL,
  `finace_section` varchar(50) DEFAULT NULL,
  `finace_section_comment` varchar(500) DEFAULT NULL,
  `finace_section_approvedBy` varchar(50) NOT NULL,
  `exam_controller` varchar(20) NOT NULL,
  `exam_controller_approvedBy` varchar(20) NOT NULL,
  `lab_asistance_chemistry` varchar(20) DEFAULT NULL,
  `lab_asistance_chemistry_comment` varchar(200) DEFAULT NULL,
  `lab_asistance_chemistry_approvedBy` varchar(20) DEFAULT NULL,
  `lab_asistance_physics` varchar(20) DEFAULT NULL,
  `lab_asistance_physics_comment` varchar(200) DEFAULT NULL,
  `lab_asistance_physics_approvedBy` varchar(20) DEFAULT NULL,
  `lab_asistance_english` varchar(20) DEFAULT NULL,
  `lab_asistance_english_comment` varchar(200) DEFAULT NULL,
  `lab_asistance_english_approvedBy` varchar(20) DEFAULT NULL,
  `lab_asistance_law` varchar(20) DEFAULT NULL,
  `lab_asistance_law_comment` varchar(200) DEFAULT NULL,
  `lab_asistance_law_approvedBy` varchar(20) DEFAULT NULL,
  `thesis_Internship_supervisor` varchar(20) DEFAULT NULL,
  `thesis_Internship_supervisor_approvedBy` varchar(20) DEFAULT NULL,
  `thesis_Internship_supervisor_comment` varchar(200) DEFAULT NULL,
  `created_at` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `requests`
--

INSERT INTO `requests` (`id`, `req_from`, `bname`, `ename`, `bfathersName`, `efathersName`, `address`, `phone`, `roll`, `registration`, `certificate_type`, `department`, `sesson`, `examYear`, `cgpa`, `resultDate`, `bankDetails`, `liabarian`, `liabarian_comment`, `liabarian_approvedBy`, `hall_provost`, `hall_provost_comment`, `hall_provost_approvedBy`, `registrar`, `registrar_approvedBy`, `registrar_comment`, `lab_asistance_CSE`, `lab_asistance_CSE_comment`, `lab_asistance_CSE_approvedBy`, `lab_asistance_EEE`, `lab_asistance_EEE_comment`, `lab_asistance_EEE_approvedBy`, `lab_asistance_ICE`, `lab_asistance_ICE_comment`, `lab_asistance_ICE_approvedBy`, `lab_asistance_CE`, `lab_asistance_CE_comment`, `lab_asistance_CE_approvedBy`, `department_head`, `department_head_approvedBy`, `finace_section`, `finace_section_comment`, `finace_section_approvedBy`, `exam_controller`, `exam_controller_approvedBy`, `lab_asistance_chemistry`, `lab_asistance_chemistry_comment`, `lab_asistance_chemistry_approvedBy`, `lab_asistance_physics`, `lab_asistance_physics_comment`, `lab_asistance_physics_approvedBy`, `lab_asistance_english`, `lab_asistance_english_comment`, `lab_asistance_english_approvedBy`, `lab_asistance_law`, `lab_asistance_law_comment`, `lab_asistance_law_approvedBy`, `thesis_Internship_supervisor`, `thesis_Internship_supervisor_approvedBy`, `thesis_Internship_supervisor_comment`, `created_at`) VALUES
(1, 1001, 'রোহিত হাসান', 'Rohit Hasan', 'Mr Hasan', 'Mr Hasan', 'Laxmipur, Rajshahi', '01764312547', '100524', '10252412', 'certificate', 'cse', '2018', '2022', '3.50', '10-11-2022', 'Dutch Bangla Bank, 17 October, 2022', '1', NULL, '1019', '', NULL, '', '1', NULL, NULL, '', NULL, '', '1', NULL, '1020', '', NULL, '', '1', NULL, '1022', '1', '1003', '0', 'You need to clear your payments', '', '1', '1023', '1', NULL, NULL, NULL, NULL, NULL, '1', NULL, NULL, NULL, NULL, NULL, '1', NULL, NULL, '2022-09-20'),
(2, 1004, 'Emilia Clarke', 'Emilia Clarke', 'David Clarke', 'David Clarke', 'Basundhara, Dhaka', '01752439876', '105242', '14287422', 'medium of instruction', 'eee', '2019', '2022', '3.14', '18-10-2022', 'Sonali Bank, 19-10-22', '0', '3 books need to be submitted in Library', '', '0', 'You have due in hall Bill', '', '', NULL, NULL, '1', NULL, '1016', NULL, NULL, '', '', NULL, '', NULL, NULL, '', '', '', '', NULL, '', '', '', '0', 'Incomplete Lab', NULL, '1', NULL, NULL, NULL, NULL, NULL, '1', NULL, NULL, NULL, NULL, NULL, '2022-09-22'),
(3, 1002, 'Tony Stark', 'Tony Stark', 'Howard Stark', 'Howard Stark', 'Zero Point, Rajshahi', '01354785369', '108414', '18244545', 'certificate', 'cse', '2017', '2022', '3.81', '29-09-2022', 'Dutch Bangla Bank, 05 October, 2022', NULL, NULL, '', '', NULL, '', '', NULL, '', NULL, NULL, '', '0', 'Failed Automation Lab', '', NULL, NULL, '', '0', 'You have uncompleted lab Geo Technical', '', '1', '1003', '0', 'Clear due in finance section', '', '', '', '1', NULL, NULL, NULL, NULL, NULL, '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-09-26'),
(14, 1001, 'রোহিত হাসান', 'Rohit Hasan', 'Mr Hasan', 'Mr Hasan', 'Laxmipur, Rajshahi', '0176431254', '100524', '10252412', 'medium of instruction', 'cse', '2018', '2022', '3.50', '10-11-2022', 'Dutch Bangla Bank, 17 October, 2022', '1', NULL, '1019', '1', NULL, '1015', '0', NULL, 'You have due in hall Bill', '0', 'Failed Database Lab', '', '0', 'Electrical Machine Lab is incomplete', '', '', NULL, '', '1', NULL, '1022', '', '', '1', NULL, '1017', '', '', NULL, NULL, NULL, '1', NULL, NULL, NULL, NULL, NULL, '1', NULL, NULL, '0', NULL, 'Submit report', '2022-10-16');

-- --------------------------------------------------------

--
-- Table structure for table `signatures`
--

CREATE TABLE `signatures` (
  `user_id` varchar(50) NOT NULL,
  `signature` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `signatures`
--

INSERT INTO `signatures` (`user_id`, `signature`) VALUES
('1003', 'signature1.svg'),
('1015', 'elon_musk_signature.png'),
('1016', 'signature2.png'),
('1017', 'signature3.png'),
('1019', 'signature4.png'),
('1020', 'signature5.png'),
('1021', 'signature6.png'),
('1022', 'signature7.png'),
('1023', 'signature4.png');

-- --------------------------------------------------------

--
-- Table structure for table `student_details`
--

CREATE TABLE `student_details` (
  `student_id` varchar(50) NOT NULL,
  `department` varchar(50) NOT NULL,
  `admission_date` varchar(50) NOT NULL,
  `semester` varchar(50) NOT NULL,
  `completed_credit` varchar(20) NOT NULL,
  `cgpa` varchar(50) NOT NULL,
  `balance` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_details`
--

INSERT INTO `student_details` (`student_id`, `department`, `admission_date`, `semester`, `completed_credit`, `cgpa`, `balance`) VALUES
('1001', 'CSE', '2021-06-25', '2', '23', '3.40', '5000'),
('1002', 'CSE', '2018-01-07', '8', '90', '3.64', '0'),
('1003', 'EEE', '2020-01-18', '5', '57', '2.67', '-500'),
('1004', 'BBA', '2018-08-01-3', '8', '90', '3.75', '0'),
('1014', 'EEE', '2022-09-22', 's', 's', 's', '0'),
('1015', 'EEE', '2022-09-14', '2', '18', '3.10', '17000'),
('1016', 'EEE', '2022-09-15', '3', '32', '3.17', '2000'),
('1017', 'EEE', '2022-09-28', 's', 'a', 'a', '0'),
('1018', 'CSE', '2022-09-06', '5', '50', '3.50', '3300');

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `id` int(11) NOT NULL,
  `course_code` varchar(20) NOT NULL,
  `name` varchar(100) NOT NULL,
  `semester` varchar(100) NOT NULL,
  `credit` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`id`, `course_code`, `name`, `semester`, `credit`) VALUES
(1, 'CSE-1101', 'Introduction to Computer Systems', '1', '2.00'),
(2, 'CSE-1102', 'Introduction to Computer Systems Sessional', '1', '1.50'),
(3, 'EEE-1163', 'Electrical Circuit Analysis', '1', '3.00'),
(4, 'EEE-1164', 'Electrical Circuit Analysis Sessional', '1', '1.50'),
(5, 'MATH-1141', 'Mathematics-1 (Differential Calculus and Integral Calculus)', '1', '3.00'),
(6, 'PHY-1103', 'Physics', '1', '3.00'),
(7, 'PHY-1104', 'Physics Sessional', '1', '1.50'),
(8, 'HUM-1101', 'English', '1', '3.00'),
(79, 'CSE-1201', 'Discrete Mathematics', '2', '3.00'),
(80, 'CSE-1205', 'Structured Programming Language', '2', '3.00'),
(81, 'CSE-1206', 'Structured Programming Language Sessional', '2', '1.50'),
(82, 'EEE-1269', 'Electronic Devices and Circuits', '2', '3.00'),
(83, 'EEE-1270', 'Electronic Devices and Circuits Sessional', '2', '1.50'),
(84, 'MATH-1243', 'Mathematics 2 (Ordinary, Partial Differential Questions and Coordinate Geometry)', '2', '3.00'),
(85, 'CHEM-1201', 'Chemistry', '2', '3.00'),
(86, 'CHEM-1202', 'Chemistry Sessional', '2', '0.75'),
(87, 'CE-1250', 'Engineering Drawing and CAD Sessional', '2', '1.50'),
(88, 'CSE-2101', 'Digital Logic Design', '3', '3.00'),
(89, 'CSE-2102', 'Digital Logic Design Sessional', '3', '1.50'),
(90, 'CSE-2103', 'Data Structures', '3', '3.00'),
(91, 'CSE-2104', 'Data Structures Sessional', '3', '1.50'),
(92, 'CSE-2105', 'Object Oriented Programming Language', '3', '3.00'),
(93, 'CSE-2106', 'Object Oriented Programming Language Sessional', '3', '1.50'),
(94, 'EEE-2169', 'Electrical Devices and Instrumentation', '3', '3.00'),
(95, 'EEE-2170', 'Electrical Devices and Instrumentation Sessional', '3', '0.75'),
(96, 'MATH-2145', 'Mathematics 3 (Vector Analysis, Matrices and Fourier Analysis)', '3', '3.00'),
(97, 'CSE-2211', 'Numerical Analysis', '4', '3.00'),
(98, 'CSE-2212', 'Numerical Analysis Sessional', '4', '0.75'),
(99, 'CSE-2213', 'Digital Electronics and Pulse Technique', '4', '3.00'),
(100, 'CSE-2214', 'Digital Electronics and Pulse Technique Sessional', '4', '0.75'),
(101, 'CSE-2215', 'Computer Architecture', '4', '3.00'),
(102, 'CSE-2217', 'Algorithms', '4', '3.00'),
(103, 'CSE-2218', 'Algorithms Sessional', '4', '1.50'),
(104, 'CSE-2222', 'Object Oriented Programming Language Sessional-2', '4', '0.75'),
(105, 'MATH-2247', 'Mathematics 4 (Complex Variable and Laplace Transform)', '4', '3.00'),
(106, 'HUM-2215', 'Engineering Economics & Managerial Accounting', '4', '3.00'),
(107, 'CSE-3101', 'Database Management Systems', '5', '3.00'),
(108, 'CSE-3102', 'Database Management Systems Sessional', '5', '1.50'),
(109, 'CSE-3103', 'Compiler', '5', '3.00'),
(110, 'CSE-3104', 'Compiler Sessional', '5', '0.75'),
(111, 'CSE-3105', 'Microprocessors and Micro-controllers', '5', '3.00'),
(112, 'CSE-3106', 'Microprocessors and Micro-controllers Sessional', '5', '0.75'),
(113, 'CSE-3107', 'Theory of Computation', '5', '3.00'),
(114, 'CSE-3108', 'Assembly Language Programming Sessional', '5', '0.75'),
(115, 'CSE-3109', 'Computer Network', '5', '3.00'),
(116, 'CSE-3110', 'Computer Network Sessional', '5', '1.50'),
(117, 'HUM-3255', 'Sociology', '6', '2.00'),
(118, 'CSE-3211', 'Operating System', '6', '3.00'),
(119, 'CSE-3212', 'Operating System Sessional', '6', '1.50'),
(120, 'CSE-3213', 'Computer Graphics', '6', '3.00'),
(121, 'CSE-3214', 'Computer Graphics Sessional', '6', '0.75'),
(122, 'CSE-3215', 'Data Communication', '6', '3.00'),
(123, 'CSE-3216', 'Data Communication Sessional', '6', '0.75'),
(124, 'CSE-3217', 'Software Engineering', '6', '3.00'),
(125, 'CSE-3218', 'Software Development Sessional', '6', '0.75'),
(126, 'CSE-3219', 'Applied Statistics and Queuing Theory', '6', '3.00'),
(127, 'CSE-3220', 'Industrial Training', '6', '1.50'),
(128, 'CSE-4200', 'Project/Thesis-II', '8', '3.00'),
(129, 'CSE-4211', 'VLSI Design', '8', '3.00'),
(130, 'CSE-4213', 'Digital Image Processing', '8', '3.00'),
(131, 'CSE-4214', 'Digital Image Processing Sessional', '8', '0.75'),
(132, 'CSE-4215', 'Mobile and Ubiquitous Computing', '8', '3.00'),
(133, 'CSE-4216', 'Mobile and Ubiquitous Computing Sessional', '8', '0.75'),
(134, 'CSE-4217', 'Engineering Management', '8', '3.00'),
(135, 'CSE-4100', 'Project/Thesis-I', '7', '3.00'),
(136, 'CSE-4101', 'System Analysis and Design', '7', '3.00'),
(137, 'CSE-4102', 'System Analysis and Design Sessional', '7', '0.75'),
(138, 'CSE-4103', 'Artificial Intelligence', '7', '3.00'),
(139, 'CSE-4104', 'Artificial Intelligence Sessional', '7', '0.75'),
(140, 'CSE-4106', 'Software Development for Web Apps Sessional', '7', '0.75'),
(141, 'CSE-4107', 'Digital Signal Processing', '7', '3.00'),
(142, 'CSE-4108', 'Digital Signal Processing Sessional', '7', '0.75'),
(143, 'HUM-4112', 'English Sessional', '7', '0.75'),
(144, 'CSE-4119', 'Advanced Algorithms', 'option-1', '3.00'),
(145, 'CSE-4121', 'Basic Graph Theory', 'option-1', '3.00'),
(146, 'CSE-4123', 'Fault Tolerant System', 'option-1', '3.00'),
(147, 'CSE-4125', 'Basic Multimedia Theory', 'option-1', '3.00'),
(148, 'CSE-4127', 'Data and Network Security', 'option-1', '3.00'),
(149, 'CSE-4129', 'Object Oriented Software Engineering', 'option-1', '3.00'),
(150, 'CSE-4131', 'Artificial Neural Networks and Fuzzy Systems', 'option-1', '3.00'),
(151, 'CSE-4133', 'Distributed Algorithms', 'option-1', '3.00'),
(152, 'CSE-4135', 'Bioinformatics', 'option-1', '3.00'),
(153, 'CSE-4137', 'Robotics', 'option-1', '3.00'),
(154, 'CSE-4139', 'Machine Learning', 'option-1', '3.00'),
(155, 'CSE-4243', 'Pattern Recognition', 'option-2', '3.00'),
(156, 'CSE-4244', 'Pattern Recognition Sessional', 'option-2', '0.75'),
(157, 'CSE-4245', 'Telecommunication Engineering', 'option-2', '3.00'),
(158, 'CSE-4246', 'Telecommunication Engineering Sessional', 'option-2', '0.75'),
(159, 'CSE-4247', 'Simulation and Modeling', 'option-2', '3.00'),
(160, 'CSE-4248', 'Simulation and Modeling Sessional', 'option-2', '0.75'),
(161, 'CSE-4251', 'Data Mining and Data Ware-housing', 'option-2', '3.00'),
(162, 'CSE-4252', 'Data Mining and Data Ware-housing Sessional', 'option-2', '0.75'),
(163, 'CSE-4253', 'Distributed Database Management System', 'option-2', '3.00'),
(164, 'CSE-4254', 'Distributed Database Management System Sessional', 'option-2', '0.75'),
(165, 'CSE-4255', 'Internet Engineering', 'option-2', '3.00'),
(166, 'CSE-4256', 'Internet Engineering Sessional', 'option-2', '0.75'),
(167, 'option-1', 'Option-1', '7', '3.00'),
(168, 'option-2', 'Option-2', '8', '3.00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `dob` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `profile_image` varchar(200) NOT NULL,
  `user_role` varchar(50) NOT NULL,
  `created_at` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `gender`, `dob`, `password`, `profile_image`, `user_role`, `created_at`) VALUES
(1001, 'Rohit Hasan', 'rohit@gmail.com', 'male', '2000-04-12', 'rohit123', 'rohit.jpg', 'student', '2022-09-21'),
(1002, 'Tony Stark', 'tony@gmail.com', 'male', '1990-12-28', 'tony123', 'tony.png', 'student', '2022-09-19'),
(1003, 'Elon Musk', 'elon@gmail.com', 'male', '2002-07-05', 'elon123', 'elon.jpg', 'department_head', '2022-09-17'),
(1004, 'Emilia Clarke', 'emilia@yahoo.com', 'female', '2001-01-17', 'emilia123', 'emilia.jpg', 'student', '2022-09-23'),
(1015, 'Tim David', 'david@gmail.com', 'male', '2022-09-01', 'david123', '1664117174158609785_486680635824569_2812323689388482491_n.jpg', 'hall_provost', '2022-09-25'),
(1016, 'George David', 'georgedavid@gmail.com', 'male', '2022-09-08', '2016013@', '1664117247158609785_486680635824569_2812323689388482491_n.jpg', 'lab_asistance_CSE', '2022-09-25'),
(1017, 'Mr Rahim', 'rahim@gmail.com', 'male', '2022-09-01', 'rahim123', '1664289228302435386_2250136205156028_4352972352277270401_n.jpg', 'finace_section', '2022-09-27'),
(1019, 'Kajal Rahman', 'kajal@gmail.com', 'Female', '2000-01-13', 'kajal123', 'emilia.jpg', 'liabarian', '2022-09-29'),
(1020, 'Shakib Al Hasan', 'sakib@gmail.com', 'male', '1990-05-18', 'sakib123', 'shakib-al-hasan.jpg', 'lab_asistance_EEE', '2022-09-15'),
(1021, 'Liam Livingstone', 'liam@gmail.com', 'male', '1995-03-25', 'liam123', 'liam.png', 'lab_asistance_ICE', '2022-09-26'),
(1022, 'Isaac Newton', 'newton@gmail.com', 'male', '1970-10-23', 'newton123', 'sir-isaac-newton.jpg', 'lab_asistance_CE', '2022-09-27'),
(1023, 'Tamin Khan', 'tamim@gmail.com', 'male', '1995-01-13', 'tamim123', 'tony.png', 'exam_controller', '2022-09-14'),
(1024, 'Naeem Hasan', 'naeem@gmail.com', 'male', '1990-05-20', 'naeem123', 'liam.png', 'lab_asistance_chemistry', '2022-09-27'),
(1025, 'Ritu Hasan', 'ritu@gmail.com', 'female', '1990-05-25', 'ritu123', 'emilia.jpg', 'lab_asistance_physics', '2022-09-28'),
(1026, 'Asif Mondol', 'asif@gmail.com', 'male', '2001-01-17', 'asif123', 'tony.png', 'lab_asistance_english', '2022-09-27'),
(1027, 'Joy Hasan', 'joy@gmail.com', 'male', '1990-05-25', 'joy123', 'sir-isaac-newton.jpg', 'lab_asistance_law', '2022-09-23'),
(1028, 'Naeem Hasan', 'naeem@gmail.com', 'male', '2001-01-15', 'naeem123', 'sir-isaac-newton.jpg', 'registrar', '2022-09-28'),
(1029, 'Neymar Jr', 'neymar@gmail.com', 'male', '2001-01-17', 'neymar123', 'tony.png', 'thesis_Internship_supervisor', '2022-09-23');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `requests`
--
ALTER TABLE `requests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `signatures`
--
ALTER TABLE `signatures`
  ADD UNIQUE KEY `user_id` (`user_id`);

--
-- Indexes for table `student_details`
--
ALTER TABLE `student_details`
  ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `requests`
--
ALTER TABLE `requests`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `subjects`
--
ALTER TABLE `subjects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=169;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1030;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
