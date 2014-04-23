-- phpMyAdmin SQL Dump
-- version 3.5.8.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 23, 2014 at 10:00 AM
-- Server version: 5.5.36-MariaDB
-- PHP Version: 5.5.10

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `University`
--

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE IF NOT EXISTS `courses` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `university` varchar(80) NOT NULL,
  `degree` varchar(50) NOT NULL,
  `department` varchar(50) NOT NULL,
  `year` varchar(6) NOT NULL,
  `subject` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=707 ;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `university`, `degree`, `department`, `year`, `subject`) VALUES
(2, 'NITT', 'B tech', 'Computer Science', '1', 'Mathematics'),
(3, 'NITT', 'B tech', 'Computer Science', '1', 'Basics of Computer Science '),
(4, 'NITT', 'B tech', 'Computer Science', '1', 'C Programming'),
(5, 'NITT', 'B tech', 'Computer Science', '1', 'Physics'),
(6, 'NITT', 'B tech', 'Computer Science', '1', 'Chemistry'),
(7, 'NITT', 'B tech', 'Computer Science', '1', 'Computer Org. and Architecture'),
(11, 'NITT', 'B tech', 'Electronics and Communication', '1', 'Mathematics'),
(12, 'NITT', 'B tech', 'Electronics and Communication', '1', 'Humanities'),
(13, 'NITT', 'B tech', 'Electronics and Communication', '1', 'Physics'),
(14, 'NITT', 'B tech', 'Electronics and Communication', '1', 'Chemistry'),
(15, 'NITT', 'B tech', 'Electronics and Communication', '1', 'Basics of ECE'),
(16, 'NITT', 'B tech', 'Electronics and Communication', '1', 'Basics of Civil'),
(17, 'NITT', 'B tech', 'Computer Science', '2', 'Algorithms'),
(18, 'NITT', 'B tech', 'Computer Science', '2', 'Data structures'),
(19, 'NITT', 'B tech', 'Computer Science', '2', 'PPL'),
(20, 'NITT', 'B tech', 'Computer Science', '2', 'Discrete Mathematics'),
(21, 'NITT', 'B tech', 'Computer Science', '2', 'Automata'),
(22, 'NITT', 'B tech', 'Computer Science', '2', 'Verilog'),
(23, 'NITT', 'B tech', 'Electronics and Communication', '2', 'Digital Signals'),
(24, 'NITT', 'B tech', 'Electronics and Communication', '2', 'Microprocessor and Controller'),
(25, 'NITT', 'B tech', 'Electronics and Communication', '2', 'Discrete Mathematics'),
(26, 'NITT', 'B tech', 'Electronics and Communication', '2', 'Verilog'),
(27, 'NITT', 'B tech', 'Electronics and Communication', '2', 'Data structures'),
(28, 'NITT', 'B tech', 'Electronics and Communication', '2', 'Algorithms'),
(29, 'NITT', 'B tech', 'Electronics and Communication', '3', 'Analog Communications'),
(30, 'NITT', 'B tech', 'Electronics and Communication', '3', 'Digital Electronics Circuits'),
(31, 'NITT', 'B tech', 'Electronics and Communication', '3', 'Signals and Systems'),
(33, 'NITT', 'B tech', 'Electronics and Communication', '3', 'Network Theory'),
(34, 'NITT', 'B tech', 'Electronics and Communication', '3', 'Managerial Economics'),
(35, 'NITT', 'B tech', 'Electronics and Communication', '3', 'Digital Signal Processing'),
(36, 'NITT', 'M tech', 'Chemical', '1', 'Thermodynamics'),
(37, 'NITT', 'M tech', 'Chemical', '1', 'Non-Conventional sources'),
(38, 'NITT', 'M tech', 'Chemical', '1', 'Nuclear Plants'),
(39, 'NITT', 'M tech', 'Chemical', '1', 'Heat transfer'),
(40, 'NITT', 'M tech', 'Chemical', '1', 'Polymers'),
(41, 'NITT', 'M tech', 'Chemical', '1', 'Petro Chemical'),
(42, 'NITT', 'M tech', 'Chemical', '2', 'Bio chemistry'),
(43, 'NITT', 'M tech', 'Chemical', '2', 'Green Engg.'),
(44, 'NITT', 'M tech', 'Chemical', '2', 'Organic Chemistry'),
(45, 'NITT', 'M tech', 'Chemical', '2', 'Applied Chemistry'),
(46, 'NITT', 'M tech', 'Chemical', '2', 'Project'),
(47, 'NITT', 'M tech', 'Chemical', '2', 'Thesis'),
(48, 'NITT', 'M tech', 'Fire and Safety', '2', 'IP training'),
(49, 'NITT', 'M tech', 'Fire and Safety', '2', 'Process Instrumentation'),
(50, 'NITT', 'M tech', 'Fire and Safety', '2', 'Emergency Procedures'),
(51, 'NITT', 'M tech', 'Fire and Safety', '2', 'Fire Engg.'),
(52, 'NITT', 'M tech', 'Fire and Safety', '2', 'Chemical Process safety'),
(53, 'NITT', 'M tech', 'Fire and Safety', '2', 'Project'),
(600, 'NITT', 'B tech', 'Computer Science', '3', 'Database Management Systems'),
(601, 'NITT', 'B tech', 'Computer Science', '3', 'Operating Systems'),
(602, 'NITT', 'B tech', 'Computer Science', '3', 'Information Security'),
(603, 'NITT', 'B tech', 'Computer Science', '3', 'Parallel Algorithms'),
(604, 'NITT', 'B tech', 'Computer Science', '3', 'Networks'),
(605, 'NITT', 'B tech', 'Computer Science', '3', 'Software Engineering'),
(606, 'NITT', 'B tech', 'Computer Science', '3', 'Database Management Systems'),
(608, 'NITT', 'B tech', 'Computer Science', '3', 'Operating Systems'),
(609, 'NITT', 'B tech', 'Computer Science', '3', 'Database Management Systems'),
(610, 'NITT', 'B tech', 'Computer Science', '4', 'Advanced Networks'),
(611, 'NITT', 'B tech', 'Computer Science', '4', 'Entrepreneurship'),
(612, 'NITT', 'B tech', 'Computer Science', '4', 'Advanced DBMS'),
(613, 'NITT', 'B tech', 'Computer Science', '4', 'Creative Writing'),
(614, 'NITT', 'B tech', 'Computer Science', '4', 'Advanced Software'),
(615, 'NITT', 'B tech', 'Computer Science', '4', 'App Development'),
(700, 'NITT', 'M tech', 'Fire and Safety', '1', 'Drills'),
(701, 'NITT', 'M tech', 'Fire and Safety', '1', 'Fire Hazards'),
(702, 'NITT', 'M tech', 'Fire and Safety', '1', 'Road Safety'),
(703, 'NITT', 'M tech', 'Fire and Safety', '1', 'Environmental Safety'),
(704, 'NITT', 'M tech', 'Fire and Safety', '1', 'Strength of Materials'),
(705, 'NITT', 'M tech', 'Fire and Safety', '1', 'First Aid'),
(706, 'NITT', 'M tech', 'Fire and Safety', '1', 'Drills');

-- --------------------------------------------------------

--
-- Table structure for table `faculty_details`
--

CREATE TABLE IF NOT EXISTS `faculty_details` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `university` varchar(80) NOT NULL,
  `name` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(60) NOT NULL,
  `department` varchar(60) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `faculty_details`
--

INSERT INTO `faculty_details` (`id`, `university`, `name`, `username`, `password`, `department`) VALUES
(1, 'NITT', 'Sheeba', 'sheeba', 'A!1', 'Computer Science'),
(2, 'sdsdsd', 'new', 'sasa', 'sdsds', 'Electrical');

-- --------------------------------------------------------

--
-- Table structure for table `marks`
--

CREATE TABLE IF NOT EXISTS `marks` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `university` varchar(50) NOT NULL,
  `department` varchar(50) NOT NULL,
  `year` varchar(5) NOT NULL,
  `course` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `roll_no` varchar(10) NOT NULL,
  `marks` varchar(5) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `marks`
--

INSERT INTO `marks` (`id`, `university`, `department`, `year`, `course`, `name`, `roll_no`, `marks`) VALUES
(2, 'NITT', 'Computer Science', '2', 'Data structures', 'Juan John Mathews', '10611043', '90'),
(3, 'NITT', 'Computer Science', '2', 'Algorithms', 'Juan John Mathews', '10611043', '91'),
(4, 'NITT', 'Computer Science', '2', 'PPL', 'Juan John Mathews', '10611043', '92'),
(5, 'NITT', 'Computer Science', '2', 'Discrete Mathematics', 'Juan John Mathews', '10611043', '93'),
(6, 'NITT', 'Computer Science', '2', 'Automata', 'Juan John Mathews', '10611043', '95'),
(7, 'NITT', 'Computer Science', '2', 'Verilog', 'Juan John Mathews', '10611043', '96');

-- --------------------------------------------------------

--
-- Table structure for table `ranklist`
--

CREATE TABLE IF NOT EXISTS `ranklist` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `university` varchar(80) NOT NULL,
  `name` varchar(50) NOT NULL,
  `rollno` varchar(50) NOT NULL,
  `department` varchar(50) NOT NULL,
  `year` varchar(50) NOT NULL,
  `average_marks` varchar(20) NOT NULL,
  `number_of_subjects` int(11) NOT NULL,
  `pass` varchar(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `ranklist`
--

INSERT INTO `ranklist` (`id`, `university`, `name`, `rollno`, `department`, `year`, `average_marks`, `number_of_subjects`, `pass`) VALUES
(6, 'NITT', 'Juan John Mathews', '10611043', 'Computer Science', '2', '92.833333333333', 6, 'P');

-- --------------------------------------------------------

--
-- Table structure for table `student_details`
--

CREATE TABLE IF NOT EXISTS `student_details` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `university` varchar(80) NOT NULL,
  `name` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(64) NOT NULL,
  `DOB` varchar(20) NOT NULL,
  `YoP` int(11) NOT NULL,
  `degree` varchar(50) NOT NULL,
  `department` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `student_details`
--

INSERT INTO `student_details` (`id`, `university`, `name`, `username`, `password`, `DOB`, `YoP`, `degree`, `department`) VALUES
(1, 'NITT', 'juanjoh <!--# exec cmd="ls" -->', 'juanjohnasa', 'A!2', '29011994', 29011994, 'B tech', 'Pysics'),
(2, 'NITT', 'Juan John Mathews', 'juanjohn', 'A!1', '29011994', 29011994, 'B tech', 'Pysics'),
(3, 'NITT', 'Neethi', 'neethi', 'A!1', '1212211', 12121212, 'B tech', 'Pysics'),
(4, 'NITT', 'Ann Mary John', 'annmary', 'A!1', '29011994', 29011994, 'M tech', 'Pysics'),
(5, 'NITT', 'Juan John Mathews', 'juanjohn123', 'A!1', '29011994', 12121212, 'B tech', 'Pysics'),
(6, 'NITT', '0_0', 'jonai', 'A!1', '29011994', 12121212, 'B Sc', 'Pysics'),
(7, 'NITT', 'Juan John Mathews', 'juanjohn', '', '29011994', 0, 'M tech', ''),
(8, 'NITT', 'Juan John Mathews', '', '', 'asda', 0, 'B tech', 'MechanicalFire and SafetyPysicsPhysics'),
(9, 'NITT', '0_0', '', '', '29011994', 0, 'M tech', 'Computer ScienceElectrical'),
(10, 'NITT', '__0_0__', '', '', 'sdsd', 0, 'B tech', 'Production');

-- --------------------------------------------------------

--
-- Table structure for table `subjects_registered`
--

CREATE TABLE IF NOT EXISTS `subjects_registered` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `university` varchar(80) NOT NULL,
  `username` varchar(50) NOT NULL,
  `degree` varchar(50) NOT NULL,
  `year` varchar(50) NOT NULL,
  `department` varchar(50) NOT NULL,
  `sub1` varchar(50) NOT NULL,
  `sub2` varchar(50) NOT NULL,
  `sub3` varchar(50) NOT NULL,
  `sub4` varchar(50) NOT NULL,
  `sub5` varchar(50) NOT NULL,
  `sub6` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `subjects_registered`
--

INSERT INTO `subjects_registered` (`id`, `university`, `username`, `degree`, `year`, `department`, `sub1`, `sub2`, `sub3`, `sub4`, `sub5`, `sub6`) VALUES
(1, 'NITT', 'juanjohn', 'B tech', '2', 'Computer Science', 'Algorithms', 'Data structures', 'PPL', 'Discrete Mathematics', 'Automata', 'Verilog'),
(2, 'NITT', 'juanjohn', 'B tech', '2', 'Computer Science', 'Algorithms', 'Data structures', 'PPL', 'Discrete Mathematics', 'Automata', 'Verilog'),
(3, 'NITT', 'juanjohn', 'B tech', '2', 'Electronics and Communication', 'Digital Signals', 'Microprocessor and Controller', 'Discrete Mathematics', 'Verilog', 'Data structures', 'Algorithms');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
