-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 10, 2023 at 01:44 PM
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
-- Database: `uhs_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `serial_no` int(100) NOT NULL,
  `patient_id` varchar(255) NOT NULL,
  `doctor_id` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`serial_no`, `patient_id`, `doctor_id`) VALUES
(1, 'UHS-P-64319228aa397', 'UHS-D-64317ccbd3545'),
(2, 'UHS-P-6431855211239', 'UHS-D-64317ccbd3545');

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `serial_no` int(100) NOT NULL,
  `doctor_id` varchar(255) NOT NULL,
  `hospital_id` varchar(255) NOT NULL,
  `doctor_first_name` text NOT NULL,
  `doctor_last_name` text NOT NULL,
  `doctor_gender` text NOT NULL,
  `doctor_speciality` text NOT NULL,
  `doctor_fee` int(100) NOT NULL,
  `doctor_address` text NOT NULL,
  `doctor_city` text NOT NULL,
  `doctor_state` text NOT NULL,
  `doctor_phone` int(100) NOT NULL,
  `doctor_email` text NOT NULL,
  `doctor_password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`serial_no`, `doctor_id`, `hospital_id`, `doctor_first_name`, `doctor_last_name`, `doctor_gender`, `doctor_speciality`, `doctor_fee`, `doctor_address`, `doctor_city`, `doctor_state`, `doctor_phone`, `doctor_email`, `doctor_password`) VALUES
(1, 'UHS-D-64317ccbd3545', 'UHS-H-6431714d25166', 'Monika', 'Sahu', 'Female', 'Cardiology', 500, 'Attabira', 'Bargarh', 'Odisha', 1234, 'monika@mail.com', '$2y$10$4uh74sHC2ppThJW7Dh56oeCi3GCZF1fmF6/5nVhnEk0KO8QLCjCCW'),
(2, 'UHS-D-64317d78b4797', 'UHS-H-6431729a1f241', 'Rakesh', 'Pradhan', 'Male', 'Dermatology', 650, 'Godbhaga', 'Sambalpur', 'Odisha', 123456, 'rakesh@mail.com', '$2y$10$/4Q86mcXiu4xi/G7yII88.pxnt2GnHnZuj2zDY3JcWl687TU7aMQO'),
(3, 'UHS-D-643191aaec60b', 'UHS-H-643191108ea9f', 'Abhi', 'Pradhan', 'Male', 'Hematology', 750, 'Ruhunia', 'Bargarh', 'Odisha', 12345687, 'abhi@mail.com', '$2y$10$2xpyThI4IesC.yXCYX/n1etYwvM9Ohb514jUiGym8W0ZY/WW.8W7q');

-- --------------------------------------------------------

--
-- Table structure for table `hospital`
--

CREATE TABLE `hospital` (
  `serial_no` int(100) NOT NULL,
  `hospital_id` varchar(255) NOT NULL,
  `hospital_name` text NOT NULL,
  `hospital_address` text NOT NULL,
  `hospital_city` text NOT NULL,
  `hospital_state` text NOT NULL,
  `hospital_pincode` int(100) NOT NULL,
  `hospital_phone` int(100) NOT NULL,
  `hospital_email` text NOT NULL,
  `hospital_password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hospital`
--

INSERT INTO `hospital` (`serial_no`, `hospital_id`, `hospital_name`, `hospital_address`, `hospital_city`, `hospital_state`, `hospital_pincode`, `hospital_phone`, `hospital_email`, `hospital_password`) VALUES
(1, 'UHS-H-6431714d25166', 'Vikash', 'Barhagoda', 'Bargarh', 'Odisha', 768040, 1234, 'vikash@mail.com', '$2y$10$cHaKY8QbglGCdyfhqYzUxuAIB.s.Xfthhf3zP.Pyuqr3sBUIXwpHK'),
(2, 'UHS-H-6431729a1f241', 'VIMSAR', 'Burla', 'Sambalpur', 'Odisha', 768017, 12345, 'vimsar@mail.com', '$2y$10$FhdE0GtFbh0MSkInqVmsj.R52KYb0We8Bbv44ZmUdZSs.JuK3qaVu'),
(3, 'UHS-H-643191108ea9f', 'Kishori Nurshing Home', 'Bandurtikra', 'Bargarh', 'Odisha', 768028, 123456, 'kishori@mail.com', '$2y$10$dWCm1wRWsKDfgt6KGqyMUuQLLp7z0LdGK9nHAcyW9iT3ls1jnZ7Cm');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `serial_no` int(100) NOT NULL,
  `patient_id` varchar(255) NOT NULL,
  `patient_first_name` text NOT NULL,
  `patient_last_name` text NOT NULL,
  `patient_gender` text NOT NULL,
  `patient_dob` text NOT NULL,
  `patient_age` int(100) NOT NULL,
  `patient_bloodGrp` text NOT NULL,
  `patient_address` text NOT NULL,
  `patient_city` text NOT NULL,
  `patient_state` text NOT NULL,
  `patient_phone` int(100) NOT NULL,
  `patient_email` text NOT NULL,
  `patient_password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`serial_no`, `patient_id`, `patient_first_name`, `patient_last_name`, `patient_gender`, `patient_dob`, `patient_age`, `patient_bloodGrp`, `patient_address`, `patient_city`, `patient_state`, `patient_phone`, `patient_email`, `patient_password`) VALUES
(1, 'UHS-P-6431855211239', 'Mohana', 'Meher', 'Male', '01/01/2001', 22, ' B+', 'Lurupali', 'Bargarh', 'Odisha', 123456, 'mohana@mail.com', '$2y$10$EJKF/WMQuP0gWXuWz0jkA.NnzikLcD8hS4uQougQ5dV8UnXP.VcZ6'),
(2, 'UHS-P-643185ccbeadc', 'Saloni', 'Sanu', 'Female', '05/06/2003', 20, ' A+', 'Burla', 'Sambalpur', 'Odisha', 1234567890, 'saloni@mail.com', '$2y$10$nHlAB7zYInnY8NFR2y6vD.Ozd0kv1l.7G/gdeNAyO4Qj3qKmyCpma'),
(3, 'UHS-P-64319228aa397', 'Annab', 'Shoo', 'Male', '15/03/1998', 25, ' O+', 'Attabira', 'Bargarh', 'Odisha', 1528492, 'annab@mail.com', '$2y$10$N3UmbMd72nAcvg5HrPsUgetfnMEaiSzNLIgsYgHvTPW0YMeCRzQtO');

-- --------------------------------------------------------

--
-- Table structure for table `patient_history`
--

CREATE TABLE `patient_history` (
  `serial_no` int(100) NOT NULL,
  `treatment_date` text NOT NULL,
  `patient_id` varchar(255) NOT NULL,
  `doctor_id` varchar(255) NOT NULL,
  `patient_disease` text NOT NULL,
  `patient_medication` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `patient_history`
--

INSERT INTO `patient_history` (`serial_no`, `treatment_date`, `patient_id`, `doctor_id`, `patient_disease`, `patient_medication`) VALUES
(1, '09/04/2023', 'UHS-P-6431855211239', 'UHS-D-64317ccbd3545', 'Fever', 'Paracetamol 250mg,Zerodol SP'),
(2, '09/04/2023', 'UHS-P-6431855211239', 'UHS-D-64317ccbd3545', 'Headache', 'Asprin'),
(3, '09/04/2023', 'UHS-P-6431855211239', 'UHS-D-64317ccbd3545', 'Fever', 'Zerodol Sp');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`serial_no`),
  ADD KEY `appointments_ibfk_1` (`patient_id`),
  ADD KEY `doctor_id` (`doctor_id`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`doctor_id`),
  ADD UNIQUE KEY `serial_no` (`serial_no`),
  ADD KEY `hospital_id` (`hospital_id`);

--
-- Indexes for table `hospital`
--
ALTER TABLE `hospital`
  ADD PRIMARY KEY (`hospital_id`),
  ADD UNIQUE KEY `serial_no` (`serial_no`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`patient_id`),
  ADD UNIQUE KEY `serial_no` (`serial_no`);

--
-- Indexes for table `patient_history`
--
ALTER TABLE `patient_history`
  ADD PRIMARY KEY (`serial_no`),
  ADD KEY `doctor_id` (`doctor_id`),
  ADD KEY `patient_id` (`patient_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointments`
--
ALTER TABLE `appointments`
  MODIFY `serial_no` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor`
  MODIFY `serial_no` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `hospital`
--
ALTER TABLE `hospital`
  MODIFY `serial_no` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `serial_no` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `patient_history`
--
ALTER TABLE `patient_history`
  MODIFY `serial_no` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `appointments`
--
ALTER TABLE `appointments`
  ADD CONSTRAINT `appointments_ibfk_1` FOREIGN KEY (`patient_id`) REFERENCES `patient` (`patient_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `appointments_ibfk_2` FOREIGN KEY (`doctor_id`) REFERENCES `doctor` (`doctor_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `doctor`
--
ALTER TABLE `doctor`
  ADD CONSTRAINT `doctor_ibfk_1` FOREIGN KEY (`hospital_id`) REFERENCES `hospital` (`hospital_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `patient_history`
--
ALTER TABLE `patient_history`
  ADD CONSTRAINT `patient_history_ibfk_1` FOREIGN KEY (`doctor_id`) REFERENCES `doctor` (`doctor_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
