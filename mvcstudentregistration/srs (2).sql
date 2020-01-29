-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 27, 2020 at 01:24 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `srs`
--

-- --------------------------------------------------------

--
-- Table structure for table `addtimetable1`
--

CREATE TABLE `addtimetable1` (
  `id` int(11) NOT NULL,
  `stream` varchar(20) NOT NULL,
  `year` varchar(20) NOT NULL,
  `semester` varchar(20) NOT NULL,
  `week` varchar(20) NOT NULL,
  `hour1` varchar(20) NOT NULL,
  `hour2` varchar(20) NOT NULL,
  `hour3` varchar(20) NOT NULL,
  `hour4` varchar(20) NOT NULL,
  `hour5` varchar(20) NOT NULL,
  `hour6` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `addtimetable1`
--

INSERT INTO `addtimetable1` (`id`, `stream`, `year`, `semester`, `week`, `hour1`, `hour2`, `hour3`, `hour4`, `hour5`, `hour6`) VALUES
(1, 'MECHANICAL', '1st year', '1st', 'Monday', 'sderftgsdfg', 'sdfg', 'sdf', 'sdfr', 'sd', 'sdf'),
(2, 'MECHANICAL', '1st year', '1st', 'Tuesday', 'fghjk', 'wert', 'ert', 'sert', 'sdf', 'sdf'),
(55, 'MECHANICAL', '1st year', '1st', 'Tuesday', 'fghjk', 'wert', 'ert', 'sert', 'sdf', 'sdf');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `name`, `username`, `password`) VALUES
(7, 'ashiq', 'nikhil', 'nikhil123');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `regno` varchar(20) NOT NULL,
  `dept` varchar(20) NOT NULL,
  `year` varchar(20) NOT NULL,
  `course` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `name`, `regno`, `dept`, `year`, `course`, `email`, `username`, `password`) VALUES
(2, 'mujeeb', '12345', 'MECHANICAL', '1st year', 'mujeeb@gmail.com', 'mujeeb@gmail.com', 'mujeeb', 'mujeeb123'),
(3, 'albin', '1234567', 'ELECTRICAL', '1st year', 'btech', 'albin@gmail.com', 'albin', 'albin123');

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `id` int(11) NOT NULL,
  `stream` varchar(20) NOT NULL,
  `year` varchar(10) NOT NULL,
  `semester` varchar(10) NOT NULL,
  `subject` varchar(20) NOT NULL,
  `credit` varchar(20) NOT NULL,
  `coordinator` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`id`, `stream`, `year`, `semester`, `subject`, `credit`, `coordinator`) VALUES
(13, 'MECHANICAL', '1st year', '1st', 'mechanics', '3', 'senthil'),
(14, 'MECHANICAL', '1st year', '1st', 'maths', '2', 'cvbnm');

-- --------------------------------------------------------

--
-- Table structure for table `subject_select`
--

CREATE TABLE `subject_select` (
  `id` int(11) NOT NULL,
  `s_id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `stream` varchar(20) NOT NULL,
  `year` varchar(20) NOT NULL,
  `semester` varchar(20) NOT NULL,
  `subject` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subject_select`
--

INSERT INTO `subject_select` (`id`, `s_id`, `name`, `stream`, `year`, `semester`, `subject`) VALUES
(1, 2, 'mujeeb', 'MECHANICAL', '1st year', '1st', 'mechanics'),
(2, 2, 'mujeeb', 'MECHANICAL', '1st year', '1st', 'mechanics'),
(3, 2, 'mujeeb', 'MECHANICAL', '1st year', '1st', 'mechanics'),
(4, 2, 'mujeeb', 'MECHANICAL', '1st year', '1st', 'mechanics'),
(5, 2, 'mujeeb', 'MECHANICAL', '1st year', '1st', 'mechanics'),
(6, 2, 'mujeeb', 'MECHANICAL', '1st year', '1st', 'mechanics');

-- --------------------------------------------------------

--
-- Table structure for table `superuser`
--

CREATE TABLE `superuser` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `superuser`
--

INSERT INTO `superuser` (`id`, `username`, `password`) VALUES
(1, 'superuser', 'pass123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addtimetable1`
--
ALTER TABLE `addtimetable1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subject_select`
--
ALTER TABLE `subject_select`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `superuser`
--
ALTER TABLE `superuser`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addtimetable1`
--
ALTER TABLE `addtimetable1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `subjects`
--
ALTER TABLE `subjects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `subject_select`
--
ALTER TABLE `subject_select`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `superuser`
--
ALTER TABLE `superuser`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
