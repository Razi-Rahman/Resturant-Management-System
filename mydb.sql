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
-- Database: `mydb`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(6) UNSIGNED NOT NULL,
  `name` varchar(50) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `created_at`, `updated_at`) VALUES
(5, 'Grilled Chicken Sandwich', '11.00', '2023-04-27 10:39:58', '2023-04-27 10:58:46'),
(6, 'Caesar Salad', '9.00', '2023-04-27 10:40:34', '2023-04-27 10:40:34'),
(7, 'Pizza', '13.00', '2023-04-27 10:40:51', '2023-04-27 10:40:51'),
(8, 'Beef Burger', '12.00', '2023-04-27 10:41:06', '2023-04-27 10:41:06'),
(9, 'Fish and Chips', '15.00', '2023-04-27 10:41:18', '2023-04-27 10:41:18'),
(10, 'Vegetable Stir-Fry', '9.00', '2023-04-27 10:41:30', '2023-04-27 10:41:30'),
(11, 'Chicken Alfredo Pasta', '14.00', '2023-04-27 10:41:43', '2023-04-27 10:41:43'),
(12, 'Ribeye Steak', '25.00', '2023-04-27 10:41:58', '2023-04-27 10:41:58'),
(13, 'Shrimp Scampi', '16.00', '2023-04-27 10:42:12', '2023-04-27 10:42:12'),
(14, 'Classic Cheeseburger', '10.00', '2023-04-27 10:42:25', '2023-04-27 10:42:25'),
(15, 'Pepsi', '5.00', '2023-04-27 10:53:37', '2023-04-27 10:53:37'),
(16, 'Sprite', '5.00', '2023-04-27 11:33:40', '2023-04-27 11:33:40');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
