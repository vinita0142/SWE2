-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 07, 2022 at 08:14 PM
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
  `id` varchar(40) NOT NULL,
  `dname` varchar(40) NOT NULL,
  `spec` varchar(40) NOT NULL,
  `fee` int(4) NOT NULL DEFAULT 500,
  `date` datetime NOT NULL,
  `cdate` date NOT NULL DEFAULT current_timestamp(),
  `status` varchar(15) NOT NULL DEFAULT 'Pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `apptdetails`
--

INSERT INTO `apptdetails` (`id`, `dname`, `spec`, `fee`, `date`, `cdate`, `status`) VALUES
('test@gmail.com', 'Dr.Rakesh K', 'Ortho', 500, '2022-10-22 09:00:00', '2022-10-21', 'Pending'),
('vinitavaswani24@gmail.com', 'Dr. Mukesh', 'Physician', 400, '2022-10-25 13:00:00', '2022-10-21', 'Pending'),
('test@gmail.com', 'Dr.Ramesh K', 'Physician', 400, '2022-10-28 12:00:00', '2022-10-23', 'Pending'),
('test@gmail.com', 'Dasy', 'Radiology', 500, '2022-10-28 16:40:00', '2022-10-20', 'Pending'),
('test@gmail.com', 'Regie', 'Pediatrics', 500, '2022-12-07 18:30:00', '2022-10-20', 'Pending'),
('test@gmail.com', 'Dasy', 'Pediatrics', 500, '2022-10-25 09:23:00', '2022-10-20', 'Pending'),
('test@gmail.com', 'Regie', 'Gynecologist', 500, '2022-11-04 14:00:00', '2022-10-26', 'Pending');

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
-- Table structure for table `patientlogin`
--

CREATE TABLE `patientlogin` (
  `username` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `patientlogin`
--

INSERT INTO `patientlogin` (`username`, `email`, `password`) VALUES
('random', 'random123@gmail.com', 'random457'),
('test123', 'test@gmail.com', 'test123'),
('random245@gmail.com', 'vinita4785', 'random');

--
-- Indexes for dumped tables
--

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
-- Indexes for table `patientlogin`
--
ALTER TABLE `patientlogin`
  ADD PRIMARY KEY (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
