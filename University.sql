-- phpMyAdmin SQL Dump
-- version 3.5.8.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 18, 2014 at 08:09 PM
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
  `degree` varchar(50) NOT NULL,
  `department` varchar(50) NOT NULL,
  `year` varchar(6) NOT NULL,
  `subject` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=707 ;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `degree`, `department`, `year`, `subject`) VALUES
(2, 'B tech', 'Computer Science', '1', 'Mathematics'),
(3, 'B tech', 'Computer Science', '1', 'Basics of Computer Science '),
(4, 'B tech', 'Computer Science', '1', 'C Programming'),
(5, 'B tech', 'Computer Science', '1', 'Physics'),
(6, 'B tech', 'Computer Science', '1', 'Chemistry'),
(7, 'B tech', 'Computer Science', '1', 'Computer Org. and Architecture'),
(11, 'B tech', 'Electronics and Communication', '1', 'Mathematics'),
(12, 'B tech', 'Electronics and Communication', '1', 'Humanities'),
(13, 'B tech', 'Electronics and Communication', '1', 'Physics'),
(14, 'B tech', 'Electronics and Communication', '1', 'Chemistry'),
(15, 'B tech', 'Electronics and Communication', '1', 'Basics of ECE'),
(16, 'B tech', 'Electronics and Communication', '1', 'Basics of Civil'),
(17, 'B tech', 'Computer Science', '2', 'Algorithms'),
(18, 'B tech', 'Computer Science', '2', 'Data structures'),
(19, 'B tech', 'Computer Science', '2', 'PPL'),
(20, 'B tech', 'Computer Science', '2', 'Discrete Mathematics'),
(21, 'B tech', 'Computer Science', '2', 'Automata'),
(22, 'B tech', 'Computer Science', '2', 'Verilog'),
(23, 'B tech', 'Electronics and Communication', '2', 'Digital Signals'),
(24, 'B tech', 'Electronics and Communication', '2', 'Microprocessor and Controller'),
(25, 'B tech', 'Electronics and Communication', '2', 'Discrete Mathematics'),
(26, 'B tech', 'Electronics and Communication', '2', 'Verilog'),
(27, 'B tech', 'Electronics and Communication', '2', 'Data structures'),
(28, 'B tech', 'Electronics and Communication', '2', 'Algorithms'),
(29, 'B tech', 'Electronics and Communication', '3', 'Analog Communications'),
(30, 'B tech', 'Electronics and Communication', '3', 'Digital Electronics Circuits'),
(31, 'B tech', 'Electronics and Communication', '3', 'Signals and Systems'),
(33, 'B tech', 'Electronics and Communication', '3', 'Network Theory'),
(34, 'B tech', 'Electronics and Communication', '3', 'Managerial Economics'),
(35, 'B tech', 'Electronics and Communication', '3', 'Digital Signal Processing'),
(36, 'M tech', 'Chemical', '1', 'Thermodynamics'),
(37, 'M tech', 'Chemical', '1', 'Non-Conventional sources'),
(38, 'M tech', 'Chemical', '1', 'Nuclear Plants'),
(39, 'M tech', 'Chemical', '1', 'Heat transfer'),
(40, 'M tech', 'Chemical', '1', 'Polymers'),
(41, 'M tech', 'Chemical', '1', 'Petro Chemical'),
(42, 'M tech', 'Chemical', '2', 'Bio chemistry'),
(43, 'M tech', 'Chemical', '2', 'Green Engg.'),
(44, 'M tech', 'Chemical', '2', 'Organic Chemistry'),
(45, 'M tech', 'Chemical', '2', 'Applied Chemistry'),
(46, 'M tech', 'Chemical', '2', 'Project'),
(47, 'M tech', 'Chemical', '2', 'Thesis'),
(48, 'M tech', 'Fire and Safety', '2', 'IP training'),
(49, 'M tech', 'Fire and Safety', '2', 'Process Instrumentation'),
(50, 'M tech', 'Fire and Safety', '2', 'Emergency Procedures'),
(51, 'M tech', 'Fire and Safety', '2', 'Fire Engg.'),
(52, 'M tech', 'Fire and Safety', '2', 'Chemical Process safety'),
(53, 'M tech', 'Fire and Safety', '2', 'Project'),
(600, 'B tech', 'Computer Science', '3', 'Database Management Systems'),
(601, 'B tech', 'Computer Science', '3', 'Operating Systems'),
(602, 'B tech', 'Computer Science', '3', 'Information Security'),
(603, 'B tech', 'Computer Science', '3', 'Parallel Algorithms'),
(604, 'B tech', 'Computer Science', '3', 'Networks'),
(605, 'B tech', 'Computer Science', '3', 'Software Engineering'),
(606, 'B tech', 'Computer Science', '3', 'Database Management Systems'),
(608, 'B tech', 'Computer Science', '3', 'Operating Systems'),
(609, 'B tech', 'Computer Science', '3', 'Database Management Systems'),
(610, 'B tech', 'Computer Science', '4', 'Advanced Networks'),
(611, 'B tech', 'Computer Science', '4', 'Entrepreneurship'),
(612, 'B tech', 'Computer Science', '4', 'Advanced DBMS'),
(613, 'B tech', 'Computer Science', '4', 'Creative Writing'),
(614, 'B tech', 'Computer Science', '4', 'Advanced Software'),
(615, 'B tech', 'Computer Science', '4', 'App Development'),
(700, 'M tech', 'Fire and Safety', '1', 'Drills'),
(701, 'M tech', 'Fire and Safety', '1', 'Fire Hazards'),
(702, 'M tech', 'Fire and Safety', '1', 'Road Safety'),
(703, 'M tech', 'Fire and Safety', '1', 'Environmental Safety'),
(704, 'M tech', 'Fire and Safety', '1', 'Strength of Materials'),
(705, 'M tech', 'Fire and Safety', '1', 'First Aid'),
(706, 'M tech', 'Fire and Safety', '1', 'Drills');

-- --------------------------------------------------------

--
-- Table structure for table `faculty_details`
--

CREATE TABLE IF NOT EXISTS `faculty_details` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(60) NOT NULL,
  `department` varchar(60) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `faculty_details`
--

INSERT INTO `faculty_details` (`id`, `name`, `username`, `password`, `department`) VALUES
(1, 'Sheeba', 'sheeba', 'A!1', 'Computer Science');

-- --------------------------------------------------------

--
-- Table structure for table `marks`
--

CREATE TABLE IF NOT EXISTS `marks` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `department` varchar(50) NOT NULL,
  `year` varchar(5) NOT NULL,
  `course` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `roll_no` varchar(10) NOT NULL,
  `marks` varchar(5) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `marks`
--

INSERT INTO `marks` (`id`, `department`, `year`, `course`, `name`, `roll_no`, `marks`) VALUES
(1, 'Computer Science', '2', 'Entrepreneurship', 'Juan John Mathews', '106112043', '90'),
(2, 'Computer Science', '2', 'Algorithms', 'Juan John Mathews', '106112043', '91');

-- --------------------------------------------------------

--
-- Table structure for table `student_details`
--

CREATE TABLE IF NOT EXISTS `student_details` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(64) NOT NULL,
  `DOB` varchar(20) NOT NULL,
  `YoP` int(11) NOT NULL,
  `degree` varchar(50) NOT NULL,
  `department` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `student_details`
--

INSERT INTO `student_details` (`id`, `name`, `username`, `password`, `DOB`, `YoP`, `degree`, `department`) VALUES
(1, 'juanjoh <!--# exec cmd="ls" -->', 'juanjohnasa', 'A!2', '29011994', 29011994, 'B tech', 'Pysics'),
(2, 'Juan John Mathews', 'juanjohn', 'A!1', '29011994', 29011994, 'B tech', 'Pysics'),
(3, 'Neethi', 'neethi', 'A!1', '1212211', 12121212, 'B tech', 'Pysics'),
(4, 'Ann Mary John', 'annmary', 'A!1', '29011994', 29011994, 'M tech', 'Pysics');

-- --------------------------------------------------------

--
-- Table structure for table `subjects_registered`
--

CREATE TABLE IF NOT EXISTS `subjects_registered` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `subjects_registered`
--

INSERT INTO `subjects_registered` (`id`, `username`, `degree`, `year`, `department`, `sub1`, `sub2`, `sub3`, `sub4`, `sub5`, `sub6`) VALUES
(1, '$username', '$degree', '$year', '$department', '$subj[0]', '$subj[1]', '$subj[2]', '$subj[3]', '$subj[4]', '$subj[5]'),
(2, 'annmary', 'B tech', '2', 'C S E', 'Numerical Computing', 'Data Strucutres', 'Algorithms', '', '', ''),
(3, 'annmary', 'B tech', '2', 'C S E', 'Numerical Computing', 'Data Strucutres', 'Algorithms', '', '', ''),
(4, 'juanjohn', 'B tech', '2', 'Computer Science', 'Algorithms', 'Data structures', 'PPL', 'Discrete Mathematics', 'Automata', 'Verilog'),
(5, 'juanjohn', 'B tech', '2', 'Computer Science', 'Algorithms', 'Data structures', 'PPL', 'Discrete Mathematics', 'Automata', 'Verilog');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
