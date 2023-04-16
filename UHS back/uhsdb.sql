-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 16, 2023 at 03:34 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uhsdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `slno` int(100) NOT NULL,
  `d_uid` varchar(255) NOT NULL,
  `h_uid` varchar(255) NOT NULL,
  `firstname` text NOT NULL,
  `lastname` text NOT NULL,
  `gender` text NOT NULL,
  `speciality` text NOT NULL,
  `fee` int(100) NOT NULL,
  `phone` int(100) NOT NULL,
  `email` text NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`slno`, `d_uid`, `h_uid`, `firstname`, `lastname`, `gender`, `speciality`, `fee`, `phone`, `email`, `password`) VALUES
(1, 'UHS-D643a364f9045f', 'UHS-H6439475831432', 'Monika', ' Mishra', 'Female', ' surgeon', 15000, 47483647, 'monika@mail.com', '$2y$10$LzzJ.iRTZa.2QkAat3mgt.gaGeIDCACaasGv5Z41TXnOPDfVeVbz2'),
(2, 'UHS-D643a38525fbfe', 'UHS-H6439475831432', 'Anita', 'Sahu', 'Female', ' allergist-immunologist', 3000, 846848347, 'anita@mail.com', '$2y$10$dssU4OssOj9dkSlPz0cwuu2vBPKq5e9d9448UAScDibSCKZMWl02q'),
(3, 'UHS-D643a39771647e', 'UHS-H6439475831432', 'Swastik', 'Panigrahi', 'Male', ' neurologist', 50000, 98474584, 'swastik@mail.com', '$2y$10$haxBbptaiZt/ynhpxKQISudV1n9MrVMafP21rrNY9KQFAfWxmfuE6'),
(4, 'UHS-D643a3b0c72a91', 'UHS-H643947ee7473d', 'Mohana', 'Meher', 'Male', ' radiologist', 1000, 2147483647, 'mohana@mail.com', '$2y$10$0NfhAeKVN6wwqn24nMDjNetThdo4QrS3eFRcl4C67D854wI31/VrK'),
(5, 'UHS-D643a3bae44c01', 'UHS-H643947ee7473d', 'Radhika', 'Pradhan', 'Female', ' orthopedic-surgeon', 20000, 2147483647, 'radhika@mail.com', '$2y$10$bzKpp4gNdYoQAOT4TAh8Nu3Cm8Cfvt6VfRcAr/0zmkiO9tfWOkyxm');

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `serial_no` int(100) NOT NULL,
  `date` text NOT NULL,
  `d_id` varchar(255) NOT NULL,
  `p_id` varchar(255) NOT NULL,
  `cause` text NOT NULL,
  `medication` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`serial_no`, `date`, `d_id`, `p_id`, `cause`, `medication`) VALUES
(1, '15/04/2021', 'UHS-D643a364f9045f', 'UHS-P643a4528c8eb8', 'Fever', 'Paracetamol'),
(14, '15/12/2021', 'UHS-D643a3bae44c01', 'UHS-P643a4528c8eb8', 'Fever', 'Paracetamol,Levoctrizine');

-- --------------------------------------------------------

--
-- Table structure for table `hospital`
--

CREATE TABLE `hospital` (
  `slno` int(100) NOT NULL,
  `uid` varchar(255) NOT NULL,
  `name` text NOT NULL,
  `org_type` text NOT NULL,
  `phone` text NOT NULL,
  `email` text NOT NULL,
  `address` text NOT NULL,
  `city` text NOT NULL,
  `state` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hospital`
--

INSERT INTO `hospital` (`slno`, `uid`, `name`, `org_type`, `phone`, `email`, `address`, `city`, `state`) VALUES
(1, 'UHS-H6439475831432', 'Vikash Multi Speciality Hospital', 'Private', '7381649999', 'vikash@mail.org', 'Barhagoda', 'Bargarh', 'Odisha'),
(2, 'UHS-H643947ee7473d', 'Kishori Nursing Home', 'Private', '9040246332', 'kishorihospital@gmail.com', 'Bhatli Chowk', 'Bargarh', 'Odisha');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `slno` int(100) NOT NULL,
  `puid` varchar(255) NOT NULL,
  `fname` text NOT NULL,
  `lname` text NOT NULL,
  `gender` text NOT NULL,
  `bday` int(100) NOT NULL,
  `bmonth` int(100) NOT NULL,
  `byear` int(100) NOT NULL,
  `bloodgroup` text NOT NULL,
  `address` text NOT NULL,
  `city` text NOT NULL,
  `phone` int(100) NOT NULL,
  `email` text NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`slno`, `puid`, `fname`, `lname`, `gender`, `bday`, `bmonth`, `byear`, `bloodgroup`, `address`, `city`, `phone`, `email`, `password`) VALUES
(1, 'UHS-P643a4528c8eb8', 'Prabhas', 'Meher', 'Male', 12, 10, 1998, 'B+', 'Bhatli', 'Bargarh', 2147483647, 'prabhas@mail.com', '$2y$10$4P3k5B04hqV7zlDZHASzTOvJLSzd0AOddnNzFd00/QlcTSphFdrpG');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`d_uid`),
  ADD UNIQUE KEY `slno` (`slno`),
  ADD KEY `h_uid` (`h_uid`);

--
-- Indexes for table `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`serial_no`),
  ADD KEY `d_id` (`d_id`),
  ADD KEY `p_id` (`p_id`);

--
-- Indexes for table `hospital`
--
ALTER TABLE `hospital`
  ADD PRIMARY KEY (`uid`),
  ADD UNIQUE KEY `slno` (`slno`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`puid`),
  ADD UNIQUE KEY `slno` (`slno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor`
  MODIFY `slno` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `history`
--
ALTER TABLE `history`
  MODIFY `serial_no` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `hospital`
--
ALTER TABLE `hospital`
  MODIFY `slno` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `slno` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `doctor`
--
ALTER TABLE `doctor`
  ADD CONSTRAINT `doctor_ibfk_1` FOREIGN KEY (`h_uid`) REFERENCES `hospital` (`uid`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `history`
--
ALTER TABLE `history`
  ADD CONSTRAINT `history_ibfk_1` FOREIGN KEY (`d_id`) REFERENCES `doctor` (`d_uid`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `history_ibfk_2` FOREIGN KEY (`p_id`) REFERENCES `patient` (`puid`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
