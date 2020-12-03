-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 03, 2020 at 09:01 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bloodbank`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_blood`
--

CREATE TABLE `add_blood` (
  `fullname` varchar(50) NOT NULL,
  `blood` varchar(4) NOT NULL,
  `unit` int(5) NOT NULL,
  `datetim` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `add_blood`
--

INSERT INTO `add_blood` (`fullname`, `blood`, `unit`, `datetim`) VALUES
('RIMS', 'B-', 3, '2020-11-30 18:15'),
('RMCH', 'A+', 5, '2020-12-03 20:22'),
('RMCH', 'AB-', 1, '2020-12-03 20:22');

-- --------------------------------------------------------

--
-- Table structure for table `hospital`
--

CREATE TABLE `hospital` (
  `fullname` varchar(50) NOT NULL,
  `email` varchar(60) NOT NULL,
  `pasword` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hospital`
--

INSERT INTO `hospital` (`fullname`, `email`, `pasword`) VALUES
('RMCH', 'rmch@mail.com', '9adebb0942944bea5e501238fd4f86db'),
('Santevita', 'santevita@gmail.com', '5ee85a3a67f83f7a0c52bda9dd3e74a5'),
('RIMS', 'rims@mail.com', 'e66f75a2103361e6e0762d187cf7c084');

-- --------------------------------------------------------

--
-- Table structure for table `receiver`
--

CREATE TABLE `receiver` (
  `fullname` varchar(50) NOT NULL,
  `email` varchar(60) NOT NULL,
  `blood` varchar(4) NOT NULL,
  `pasword` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `receiver`
--

INSERT INTO `receiver` (`fullname`, `email`, `blood`, `pasword`) VALUES
('Anupama', 'Anupama@mail.com', 'B+', 'f4a467065a1cea392bc7a5a65e73c3d3'),
('aayush vijay', 'aayush@gmail.com', 'O+', '6bc80b9416b95aac0cf7757fc1bb1e65');

-- --------------------------------------------------------

--
-- Table structure for table `requests`
--

CREATE TABLE `requests` (
  `rec_name` varchar(50) NOT NULL,
  `rec_email` varchar(50) NOT NULL,
  `rec_blood` varchar(5) NOT NULL,
  `hos_name` varchar(50) NOT NULL,
  `blood_req` varchar(4) NOT NULL,
  `Status` varchar(50) NOT NULL,
  `date` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `requests`
--

INSERT INTO `requests` (`rec_name`, `rec_email`, `rec_blood`, `hos_name`, `blood_req`, `Status`, `date`) VALUES
('aayush vijay', 'aayush@gmail.com', 'O+', 'RMCH', 'AB-', 'Approved', '03-12-2020 20:29:40'),
('Anupama', 'Anupama@mail.com', 'B+', 'RMCH', 'A+', 'Declined', '03-12-2020 20:30:25');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
