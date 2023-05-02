-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: sql308.epizy.com
-- Generation Time: May 02, 2023 at 01:18 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `epiz_33938660_uhs_database`
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
  `phone` text NOT NULL,
  `email` text NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`slno`, `d_uid`, `h_uid`, `firstname`, `lastname`, `gender`, `speciality`, `fee`, `phone`, `email`, `password`) VALUES
(1, 'UHS-D644e5cbd2222f', 'UHS-H644e56fd7d9c8', 'Aditiya', 'Pattnaik', 'Male', ' dermatologist', 1000, '9345872160', 'aditiya@gmail.com', '$2y$10$/DOwNlxdDAmtBwjYRkZnKe2LmK.J9ZvTJJyDpka5Q3fo.zaa4XTWi'),
(2, 'UHS-D644e5d1a491f9', 'UHS-H644e56fd7d9c8', 'Sujit', 'Das', 'Male', ' pediatrician', 900, '8650493217', 'sujit@gmail.com', '$2y$10$Gfi3y72IxTy2oSbtYhUEZ.ajOxnej5XZVNcnGKjTmvy/YicCpvZ/O'),
(3, 'UHS-D644e5d523caa8', 'UHS-H644e56fd7d9c8', 'Anjali', 'Patel', 'Female', ' cardiologist', 2000, '7921064385', 'anjali@gmail.com', '$2y$10$MnwY9QpLboXpHYwA1VAsJO9LuRWLoVq76ozPmb0EBBefC2vyRmzw6'),
(4, 'UHS-D644e5dc63ea36', 'UHS-H644e57c21c6e9', 'Mohit', 'Nayak', 'Male', ' radiologist', 500, '8073521964', 'mohit@gmail.com', '$2y$10$IvwB8PjQGnedNEN7mRdcdexFU4rfFH97CsKnDABeHf0EjzECMTmue'),
(5, 'UHS-D644e5e32c6b9b', 'UHS-H644e57c21c6e9', 'Pragati', 'Sahoo', 'Female', 'Gynecologist', 750, '9537048216', 'pragati@gmail.com', '$2y$10$F2URfl51s/PgeFYeIDb2d.x9lqkKOCwlHbXydudC2PJuYVmgid17m'),
(6, 'UHS-D644e5e81729f0', 'UHS-H644e5816894f3', 'Ankita', 'Sahu', 'Female', ' dermatologist', 300, '8492753061', 'ankita@gmail.com', '$2y$10$BeFNXbpJMXFvm4k1UOljVe5p630RHXvaliiJBpA5Yj4M4RkRkup9O'),
(7, 'UHS-D644e5efe84b2a', 'UHS-H644e57c21c6e9', 'Dinesh', 'Sahu', 'Male', ' pediatrician', 800, '7061539842', 'dinesh@gmail.com', '$2y$10$4buOXQ4/kIk6nuyiP7z1/OdwGF2OmROZcFvevrE8mA4.vQdO.G3FW'),
(8, 'UHS-D644e60debbb18', 'UHS-H644e58784bcd0', 'Bikash', 'Padhan', 'Male', ' gastroenterologist', 450, '9274615038', 'bikash@gmail.com', '$2y$10$3qhRiWbcccD0sHa6gNZpi.A2Q2SHEqirdtZlL8sCbeSNxmmoevBsO'),
(9, 'UHS-D644e613faec03', 'UHS-H644e58784bcd0', 'Rakesh', 'Panda', 'Male', ' urologist', 500, '8170635249', 'rakesh@gmail.com', '$2y$10$jJT2gJNEo4yuUz0uoSNg/eMGJpx8ff5OO4v3zjVMa6tJKO93SD.eq'),
(10, 'UHS-D644e62b1a5a7a', 'UHS-H644e594297584', 'Tanuja', 'Rout', 'Female', ' surgeon', 600, '7421865309', 'tanuja@gmail.com', '$2y$10$OJlJeWZZWFVXddwQ6FlZxuSM23NNF.lkWhIPvU2hDE0Evg1zpXtF6');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`serial_no`, `date`, `d_id`, `p_id`, `cause`, `medication`) VALUES
(1, '30/04/2015', 'UHS-D644e5cbd2222f', 'UHS-P644e7690a2599', 'Ringworm', 'Itraconazole-500,Terbinafine Cream'),
(2, '12/02/2016', 'UHS-D644e5cbd2222f', 'UHS-P644e7690a2599', 'Scabies', 'Scaboz Lotion'),
(3, '11/11/2018', 'UHS-D644e613faec03', 'UHS-P644e7690a2599', 'Overactive bladder', 'Ditropan XL,Gelnique Gel'),
(4, '30/04/2023', 'UHS-D644e5e32c6b9b', 'UHS-P644e75afaadfb', 'Pregnancy', 'Cipla Maxirich Multivitamin Syrup,Assentia Calamine'),
(5, '03/02/2022', 'UHS-D644e5e32c6b9b', 'UHS-P644e6d6c4253c', 'Fever', 'Zerodol-SP'),
(6, '30/04/2023', 'UHS-D644e5e32c6b9b', 'UHS-P644e6d6c4253c', 'Muscle Pain', 'Brufen 200');

-- --------------------------------------------------------

--
-- Table structure for table `hospital`
--

CREATE TABLE `hospital` (
  `slno` int(100) NOT NULL,
  `uid` varchar(255) NOT NULL,
  `name` text NOT NULL,
  `org_type` text NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` text NOT NULL,
  `address` text NOT NULL,
  `city` text NOT NULL,
  `state` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hospital`
--

INSERT INTO `hospital` (`slno`, `uid`, `name`, `org_type`, `phone`, `email`, `address`, `city`, `state`) VALUES
(1, 'UHS-H644e56fd7d9c8', 'Vikash Multi Speciality Hospital', 'Private', '7381639999', 'contact@vikashhospitals.com', 'Barahagoda', 'Bargarh', 'Odisha'),
(2, 'UHS-H644e57c21c6e9', 'Sai Multi Speciality Hospital', 'Private', '9937942429', 'saimultispecialityhospital@gmail.com', 'Bhatli Chowk', 'Bargarh', 'Odisha'),
(3, 'UHS-H644e5816894f3', 'Kishori Nursing Home', 'Private', '6646246332', 'kishorihospital@gmail.com', 'Bhatli Chowk', 'Bargarh', 'Odisha'),
(4, 'UHS-H644e58784bcd0', 'UPHC (Urban Primary Health Centre)', 'Govt.', '6646233806', 'uhpcbargarh@gov.in', 'Govindpali', 'Bargarh', 'Odisha'),
(5, 'UHS-H644e594297584', 'VIMSAR Hospital', 'Govt.', '6632430768', 'vimsarsambalpur@gov.in', 'Burla', 'Sambalpur', 'Odisha');

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
  `phone` text NOT NULL,
  `email` text NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`slno`, `puid`, `fname`, `lname`, `gender`, `bday`, `bmonth`, `byear`, `bloodgroup`, `address`, `city`, `phone`, `email`, `password`) VALUES
(1, 'UHS-P644e6d6c4253c', 'Mohana', 'Meher', 'Male', 5, 4, 2000, 'A+', 'Attabira', 'Bargarh', '9312978943', 'mohana@gmail.com', '$2y$10$o/09Vv4fN6xKQphNYMlCE.AYHsyq/gGwyddOsp6x...KABIL5yPja'),
(2, 'UHS-P644e739b96b64', 'Nandita', 'Sahu', 'Female', 21, 12, 1997, 'B+', 'Bhatli', 'Bargarh', '9290486739', 'nandita@gmail.com', '$2y$10$gunqUpq9DtpFvM.b41J7h.b4rTag7DRb37ic8X2wPf5mPOY7auRSa'),
(3, 'UHS-P644e7561e4c6d', 'Manisha', 'Mahakur', 'Female', 2, 10, 1996, 'AB+', 'Attabira', 'Bargarh', '7471198726', 'manisha@gmail.com', '$2y$10$tLdpSCaY32bLh3.pCsSLmuputld2H/SCY2uHd4lZDYx4L3FonASUy'),
(4, 'UHS-P644e75afaadfb', 'Shruti', 'Pradhan', 'Female', 5, 4, 2002, 'B+', 'Barhamuda', 'Bargarh', '9253726401', 'shruti@gmail.com', '$2y$10$3QLJBhKPqnush3/7oXTd2udru07rI2Uuid7w1FUKJYdRNNmfIbzSO'),
(5, 'UHS-P644e761b291e3', 'Samuka', 'Meher', 'Female', 3, 5, 2002, 'O+', 'Lurupali', 'Bargarh', '7438269158', 'samuka@gmail.com', '$2y$10$ma2Cijj5pRV13FP.s.KG8.coofEAwITsAQ.OEGRBbQBaHs5YcQxh.'),
(6, 'UHS-P644e7690a2599', 'Tikeshwar', 'Sandha', 'Male', 25, 3, 2002, 'AB-', 'Murumkel', 'Bargarh', '7403984619', 'tikeshwar@gmail.com', '$2y$10$MjlWkzZDK5bRQGlMrGtlUusTWE5c.atkfpgvnhNhPQCltYkhUIZRC'),
(7, 'UHS-P644e781350099', 'Chita', 'Sahu', 'Male', 15, 1, 1987, 'B+', 'Ruhunia', 'Bargarh', '9318105207', 'chita@gmail.com', '$2y$10$oAWpUnOSkNYYfsHOns1u..9lXqorjlz.rsI1Rpe5JljpsdhQdFN1q'),
(9, 'UHS-P64509b4ba7be2', 'Ruturaj', 'Biswal', 'Male', 5, 4, 2003, 'O-', 'Odisha', 'Bargarh', '2582583534', 'azad@gmail.com', '$2y$10$UITi1ihKeRsJJEBQmLUan.0FV8M2XHLXx7T.6behYrMAbkvfZXiAy');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`d_uid`),
  ADD UNIQUE KEY `slno` (`slno`) USING BTREE,
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
  ADD UNIQUE KEY `slno` (`slno`) USING BTREE;

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`puid`),
  ADD UNIQUE KEY `slno` (`slno`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor`
  MODIFY `slno` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `history`
--
ALTER TABLE `history`
  MODIFY `serial_no` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `hospital`
--
ALTER TABLE `hospital`
  MODIFY `slno` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `slno` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

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
