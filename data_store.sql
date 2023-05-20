-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 23, 2023 at 10:48 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `data_store`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `ID` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `mobile` bigint(100) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ID`, `name`, `email`, `password`, `mobile`, `image`) VALUES
(1, 'Rini', 'rini@gmail.com', 'rini', 7384191844, 'upload/4489_1679398007_IMG_6764.JPG'),
(2, 'Arnab', 'arnab@gmail.com', '', 7384191844, 'upload/9522_1679463805_IMG_6764.JPG'),
(3, 'Arnab charan', 'arnab123@gmail.com', 'Arnab', 7001192924, 'upload/7127_1679464690_IMG_6768.JPG'),
(4, 'suman', 'suman@gmail.com', 'suman', 7001192924, 'upload/8750_1679513042_IMG_6763.JPG'),
(5, 'Arun', 'rini@gmail.com', '123456', 7384191844, 'upload/9837_1679517916_IMG_6762.JPG');

-- --------------------------------------------------------

--
-- Table structure for table `project2`
--

CREATE TABLE `project2` (
  `ID` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `mobile` bigint(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `dob` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `previousCourse` varchar(100) NOT NULL,
  `totalNumber` varchar(100) NOT NULL,
  `persent` varchar(100) NOT NULL,
  `course` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `project2`
--

INSERT INTO `project2` (`ID`, `name`, `email`, `password`, `mobile`, `gender`, `dob`, `address`, `previousCourse`, `totalNumber`, `persent`, `course`, `image`) VALUES
(2, 'Riya', 'riya@gmail.com', 'riya', 7001192924, 'female', '2023-03-01', 'UN pur', 'Higher-secondary', '565', '85', 'B.sc', 'upload/2811_1679395163_IMG_6762.JPG'),
(3, 'sumit', 'sumit@gmail.com', 'sumit', 78994566123, 'male', '2023-03-16', 'mahishadal', 'Diploma', '425', '60', 'B.sc', 'upload/1831_1679396610_IMG_6772.JPG'),
(4, 'Babai', 'babai@gmail.com', 'babai', 888888888888, 'female', '2023-02-27', 'haldia', 'Higher-Secondary', '5555', '855', 'Diploma', 'upload/1668_1679466861_IMG_6767.JPG'),
(5, 'Pabitra', 'pabitra@gmail.com', 'pabitra', 7447474474, 'male', '2023-03-08', 'mahishadal', 'Deploma', '524', '86', 'Diploma', 'upload/4123_1679469654_IMG_6767.JPG');

-- --------------------------------------------------------

--
-- Table structure for table `studetails`
--

CREATE TABLE `studetails` (
  `ID` bigint(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `mobile` bigint(100) NOT NULL,
  `pname` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `marks` bigint(100) NOT NULL,
  `course` varchar(100) NOT NULL,
  `language` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `studetails`
--

INSERT INTO `studetails` (`ID`, `name`, `email`, `password`, `mobile`, `pname`, `address`, `gender`, `marks`, `course`, `language`, `image`) VALUES
(1, 'Silpa Mukherjee', 'si@gmail.com', '12345', 6294056988, 'Tarun Kur Mukherjee', 'Kolkata', 'female', 85, 'Science', 'English', 'upload/26491679504014_'),
(3, ' arun', 'arun@gmail.com', '123456', 7777777777, 'nityananda', 'jharkhand', 'male', 857, 'Science', 'English', 'upload/91891679510285_'),
(5, 'Riya Halder', 'riya@gmail.com', 'riya', 7384191844, 'Tapash Halder', 'UN Pur', 'female', 555, 'Science', 'English,Hindi', 'upload/15161679512604_IMG_6764.JPG'),
(6, 'samrat', 'samrat@gmail.com', 'samrat', 7001192924, 'samrat', 'Krishnanagar', 'male', 854, 'Arts', 'English', 'upload/62451679518707_IMG_6778.JPG');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `ID` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `Image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`ID`, `name`, `email`, `mobile`, `address`, `gender`, `subject`, `Image`) VALUES
(2, 'suman', 'suman@gmail.com', '888888888888', 'tamluk', 'female', 'math', 'upload/5683_1679405270_IMG_6767.JPG'),
(5, 'Arun', 'arun68@gmail.com', '7384191844', 'mahishadal', 'male', 'IT', 'upload/9495_1679517636_'),
(6, 'suman', 'suman@gmail.com', '2222222222', 'UN pur', 'male', 'IT', 'upload/1613_1679519459_IMG_6780.JPG'),
(7, 'Babai', 'babai@gmail.com', '8547858774', 'tamluk', 'female', 'GNM', 'upload/1762_1679520021_IMG_6781.JPG');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `project2`
--
ALTER TABLE `project2`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `studetails`
--
ALTER TABLE `studetails`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `ID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `project2`
--
ALTER TABLE `project2`
  MODIFY `ID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `studetails`
--
ALTER TABLE `studetails`
  MODIFY `ID` bigint(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `ID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
