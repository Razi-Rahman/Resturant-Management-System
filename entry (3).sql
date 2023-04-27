-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 27, 2023 at 02:47 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `entry`
--

-- --------------------------------------------------------

--
-- Table structure for table `createstore`
--

CREATE TABLE `createstore` (
  `storeName` varchar(50) NOT NULL,
  `storeID` int(10) NOT NULL,
  `BranchName` varchar(50) NOT NULL,
  `StoreLocation` varchar(50) NOT NULL,
  `StoreType` tinyint(50) NOT NULL,
  `PreDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `createstore`
--

INSERT INTO `createstore` (`storeName`, `storeID`, `BranchName`, `StoreLocation`, `StoreType`, `PreDate`) VALUES
('xiaomi store', 11, 'Khilgaon', 'Dhaka', 0, '2022-12-29'),
('telecom', 122, 'Basundhora', 'Dhaka', 0, '2023-04-16');

-- --------------------------------------------------------

--
-- Table structure for table `store`
--

CREATE TABLE `store` (
  `Name` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `U_name` varchar(50) NOT NULL,
  `Gender` varchar(20) NOT NULL,
  `Pass` varchar(50) NOT NULL,
  `dob` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `store`
--

INSERT INTO `store` (`Name`, `Email`, `U_name`, `Gender`, `Pass`, `dob`) VALUES
('[sujana]', '[sujana@gmail.com]', '[sujana123]', '[female]', '[sujana123]', '0000-00-00'),
('[sujana]', '[sujana@gmail.com]', '[sujana123]', '[female]', '[sujana123]', '0000-00-00'),
('[sujana]', '[sujana@gmail.com]', '[sujana123]', '[female]', '[sujana123]', '0000-00-00'),
('arisha', 'razirahman135@gmail.com', 'arisha', 'female', 'arisha123', '2023-03-30'),
('aditya', 'aditya@gmail.com', 'aditya', 'male', 'aditya123', '2023-03-23'),
('Aparazita', '', 'Aparazita', 'female', 'razi123', '2023-04-19'),
('ulul', 'ulul@gmail.com', 'ulul', 'other', 'ulul123', '2023-04-11');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
