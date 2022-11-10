-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 09, 2022 at 06:22 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `medcare`
--

-- --------------------------------------------------------

--
-- Table structure for table `apptdetails`
--

CREATE TABLE `apptdetails` (
  `aptID` int(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `dname` varchar(40) NOT NULL,
  `spec` varchar(40) NOT NULL,
  `fee` int(4) NOT NULL DEFAULT 500,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `cdate` date NOT NULL ,
  `status` varchar(15) NOT NULL DEFAULT 'Pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `apptdetails`
--

INSERT INTO `apptdetails` (`aptID`, `email`, `dname`, `spec`, `fee`, `date`, `time`, `cdate`, `status`) VALUES
(1, 'test@gmail.com', ' Dr. Madhu M ', 'Dermatologist', 500, '2022-11-09', '01:15:00', '2022-11-09', 'Pending'),
(2, 'test@gmail.com', ' Dr. Kannan R ', 'General Physician', 500, '2022-11-16', '10:30:00', '2022-11-09', 'Pending'),
(3, 'test@gmail.com', ' Dr. Madhu M ', 'Dermatologist', 500, '2022-11-09', '01:15:00', '2022-11-09', 'Pending'),
(4, 'test@gmail.com', ' Dr. Rakesh M ', 'ENT Specialist', 500, '2022-12-01', '02:30:00', '2022-11-09', 'Pending'),
(5, 'test@gmail.com', ' Dr. Kannan R ', 'General Physician', 500, '2022-11-16', '03:00:00', '2022-11-09', 'Pending'),
(6, 'test@gmail.com', ' Dr. Kannan R ', 'General Physician', 500, '2022-11-25', '07:00:00', '2022-11-09', 'Pending'),
(7, 'test@gmail.com', ' Dr. Kannan R ', 'General Physician', 500, '2022-11-09', '01:00:00', '2022-11-09', 'Pending'),
(8, 'test@gmail.com', ' Dr. Madhu M ', 'Dermatologist', 500, '2022-11-09', '01:15:00', '2022-11-09', 'Pending'),
(9, 'test@gmail.com', ' Dr. Madhu M ', 'Dermatologist', 500, '2022-11-09', '01:15:00', '2022-11-09', 'Pending'),
(10, 'test@gmail.com', ' Dr. Kannan R ', 'General Physician', 500, '2022-11-30', '10:15:00', '2022-11-09', 'Pending'),
(11, 'test@gmail.com', ' Dr. Kannan R ', 'General Physician', 500, '2022-11-30', '10:15:00', '2022-11-09', 'Pending'),
(12, 'test@gmail.com', ' Dr. Madhu M ', 'Dermatologist', 500, '2022-11-30', '10:15:00', '2022-11-09', 'Pending'),
(13, 'test@gmail.com', ' Dr. Madhu M ', 'Dermatologist', 500, '2022-11-15', '10:15:00', '2022-11-09', 'Pending'),
(14, 'test@gmail.com', 'Select Doctor', 'Select Specialization', 500, '2023-01-05', '10:15:00', '2022-11-09', 'Pending'),
(15, 'test@gmail.com', ' Dr. Madhu M ', 'Dermatologist', 500, '2022-11-30', '10:15:00', '2022-11-09', 'Pending'),
(16, 'test@gmail.com', ' Dr. Swarna P ', 'Dermatologist', 500, '2022-12-01', '10:15:00', '2022-11-09', 'Pending'),
(17, 'test@gmail.com', 'Select Doctor', 'Select Specialization', 500, '2022-12-01', '10:15:00', '2022-11-09', 'Pending'),
(18, 'test@gmail.com', ' Dr. Kannan R ', 'General Physician', 500, '2022-12-08', '10:15:00', '2022-11-09', 'Pending'),
(19, 'test@gmail.com', ' Dr. Madhu M ', 'Dermatologist', 500, '2022-11-09', '10:15:00', '2022-11-09', 'Pending'),
(20, 'test@gmail.com', ' Dr. Kannan R ', 'General Physician', 500, '2022-12-01', '10:15:00', '2022-11-09', 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `doctorlogin`
--

CREATE TABLE `doctorlogin` (
  `username` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(15) NOT NULL,
  `specialization` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doctorlogin`
--

INSERT INTO `doctorlogin` (`username`, `email`, `password`, `specialization`) VALUES
('Dr. Kannan R', 'doctorkannan@gmail.com', 'kannan@4578', 'General Physician'),
('Dr. Madhu M', 'doctormadhu@gmail.com', 'madhu456', 'Dermatologist'),
('Dr. Swarna P', 'doctorpswarna@gmail.com', '45swarna%', 'Dermatologist'),
('Dr. Rakesh M', 'doctorrakesh@gmail.com', 'rakesh123', 'ENT Specialist'),
('Dr. Ramesh Kumar', 'doctorramesh@gmail.com', 'ramesh@4578', 'General Physician');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `email` varchar(35) NOT NULL,
  `password` varchar(20) NOT NULL,
  `username` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`email`, `password`, `username`) VALUES
('bhuwan1234@gmail.com', 'bhuwan0784', 'Bhuwan Rathi'),
('doctor123@gmail.com', 'testdoctor', 'Rakesh M'),
('kavi1234@gmail.com', 'kavi005784', 'Kavipriya J'),
('nirali1234@gmail.com', 'nirali007784', 'PB Nirali'),
('random4758@gmail.com', '4785Rthbjh', 'random2'),
('random678@gmail.com', 'random4578#', 'random'),
('test123@gmail.com', 'testuser', 'test123'),
('test234@gmail.com', 'test1234', 'testnew'),
('test@gmail.com', 'test123', 'test'),
('vinitavaswani24@gmail.com', 'vinita12345&*', 'vinita');

-- --------------------------------------------------------

--
-- Table structure for table `patientdetails`
--

CREATE TABLE `patientdetails` (
  `email` varchar(20) NOT NULL,
  `name` varchar(30) NOT NULL,
  `phone` int(10) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `addr` varchar(70) NOT NULL,
  `age` int(2) NOT NULL,
  `height` int(3) NOT NULL,
  `weight` int(3) NOT NULL,
  `history` varchar(70) NOT NULL,
  `bloodGroup` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `patientdetails`
--

INSERT INTO `patientdetails` (`email`, `name`, `phone`, `gender`, `addr`, `age`, `height`, `weight`, `history`, `bloodGroup`) VALUES
('test@gmail.com', 'kbvfkjbfv', 2147483647, 'male', ',fv,', 20, 160, 60, 'm,d', 'O+');

-- --------------------------------------------------------

--
-- Table structure for table `patientlogin`
--

CREATE TABLE `patientlogin` (
  `username` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(15) NOT NULL,
  `completed` varchar(20) NOT NULL DEFAULT 'na'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `patientlogin`
--

INSERT INTO `patientlogin` (`username`, `email`, `password`, `completed`) VALUES
('test5@gmail.com', 'newTest123$%', 'test5@', 'na'),
('random', 'random123@gmail.com', 'random457', 'na'),
('test5@gmail.com', 'test123', 'test5@', 'na'),
('test123', 'test@gmail.com', 'test123', 'completed'),
('random245@gmail.com', 'vinita4785', 'random', 'na');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `apptdetails`
--
ALTER TABLE `apptdetails`
  ADD PRIMARY KEY (`aptID`);

--
-- Indexes for table `doctorlogin`
--
ALTER TABLE `doctorlogin`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `patientdetails`
--
ALTER TABLE `patientdetails`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `patientlogin`
--
ALTER TABLE `patientlogin`
  ADD PRIMARY KEY (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `apptdetails`
--
ALTER TABLE `apptdetails`
  MODIFY `aptID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
