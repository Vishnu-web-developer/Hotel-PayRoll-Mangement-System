-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 19, 2024 at 08:12 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotel_payroll`
--

-- --------------------------------------------------------

--
-- Table structure for table `workers`
--

CREATE TABLE `workers` (
  `id` int(6) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `blood_group` varchar(10) NOT NULL,
  `role` varchar(50) NOT NULL,
  `salary` decimal(10,2) NOT NULL,
  `contact_number` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `workers`
--

INSERT INTO `workers` (`id`, `name`, `address`, `blood_group`, `role`, `salary`, `contact_number`) VALUES
(11, 'John Doe', '123 Main St', 'A+', 'Cooking Master', 4000.00, '1234567890'),
(12, 'Jane Smith', '456 Elm St', 'B-', 'Supplier', 2500.00, '2345678901'),
(13, 'Michael Johnson', '789 Oak St', 'O+', 'Delivery Man', 2000.00, '3456789012'),
(15, 'William Wilson', '111 Pine St', 'A-', 'Watchman', 2800.00, '5678901234'),
(16, 'Olivia Martinez', '222 Cedar St', 'O-', 'Cooking Master', 3000.00, '6789012345'),
(17, 'James Taylor', '333 Walnut St', 'B+', 'Supplier', 2500.00, '7890123456'),
(18, 'Sophia Brown', '444 Birch St', 'AB-', 'Delivery Man', 2000.00, '8901234567'),
(19, 'Daniel Miller', '555 Spruce St', 'A+', 'Cleaner', 2400.00, '9012345678'),
(20, 'Isabella Moore', '666 Ash St', 'B-', 'Watchman', 2800.00, '0123456789'),
(21, 'Liam Anderson', '777 Pineapple St', 'AB+', 'Cooking Master', 3000.00, '1234567890'),
(22, 'Oliver Wilson', '888 Orange St', 'O+', 'Supplier', 2500.00, '2345678901'),
(23, 'Emma Clark', '999 Banana St', 'A-', 'Delivery Man', 2000.00, '3456789012'),
(24, 'Ava King', '101 Cherry St', 'B+', 'Cleaner', 2400.00, '4567890123'),
(25, 'Lucas Perez', '111 Grape St', 'AB-', 'Watchman', 2800.00, '5678901234'),
(26, 'Mia Lee', '222 Lemon St', 'A+', 'Cooking Master', 3000.00, '6789012345'),
(27, 'Noah Gonzalez', '333 Lime St', 'B-', 'Supplier', 2500.00, '7890123456'),
(28, 'Sophia Hernandez', '444 Blueberry St', 'O-', 'Delivery Man', 2000.00, '8901234567'),
(29, 'Ethan Sanchez', '555 Raspberry St', 'AB+', 'Cleaner', 2400.00, '9012345678'),
(30, 'Charlotte Nguyen', '666 Strawberry St', 'A-', 'Watchman', 2800.00, '0123456789'),
(31, 'Amelia Wang', '777 Watermelon St', 'AB+', 'Cooking Master', 3000.00, '1234567890'),
(32, 'Benjamin Chan', '888 Kiwi St', 'B+', 'Supplier', 2500.00, '2345678901'),
(33, 'Elijah Kim', '999 Mango St', 'O+', 'Delivery Man', 2000.00, '3456789012'),
(34, 'Harper Gupta', '101 Papaya St', 'A+', 'Cleaner', 2400.00, '4567890123'),
(35, 'Mason Kumar', '111 Pineapple St', 'B-', 'Watchman', 2800.00, '5678901234'),
(38, 'Liam Shah', '444 Guava St', 'AB+', 'Delivery Man', 2000.00, '8901234567'),
(39, 'Abigail Singh', '555 Pomegranate St', 'B+', 'Cleaner', 2400.00, '9012345678'),
(40, 'vishnu', 'www', 'a+', 'Supplier', 12000.00, '999999999'),
(41, 'joeshva', 'ammapetai', 'a', 'Cleaner', 2500.00, '999999999'),
(42, 'ragul', 'q', 'a+', 'Delivery Man', 500.00, '999999999');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `workers`
--
ALTER TABLE `workers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `workers`
--
ALTER TABLE `workers`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
