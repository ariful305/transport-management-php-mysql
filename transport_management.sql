-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 10, 2025 at 10:32 AM
-- Server version: 8.0.41
-- PHP Version: 8.2.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `transport_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `buses`
--

CREATE TABLE `buses` (
  `id` int UNSIGNED NOT NULL,
  `bus_number` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `capacity` int NOT NULL,
  `driver_name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `driver_phone` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `status` enum('active','maintenance','inactive') COLLATE utf8mb4_general_ci DEFAULT 'active',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `buses`
--

INSERT INTO `buses` (`id`, `bus_number`, `capacity`, `driver_name`, `driver_phone`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Dolphin-12', 40, 'Driver 1', '017XXXXXXXX', 'active', '2025-03-23 18:14:49', '2025-03-23 18:14:49'),
(2, 'Dolphin-16', 40, 'Driver 2', '017XXXXXXXX', 'active', '2025-03-23 18:14:49', '2025-03-23 18:14:49'),
(3, 'Dolphin-17', 40, 'Driver 3', '017XXXXXXXX', 'active', '2025-03-23 18:14:49', '2025-03-23 18:14:49'),
(4, 'Dolphin-18', 40, 'Driver 4', '017XXXXXXXX', 'active', '2025-03-23 18:14:49', '2025-03-23 18:14:49'),
(5, 'Dolphin-19', 40, 'Driver 5', '017XXXXXXXX', 'active', '2025-03-23 18:14:49', '2025-03-23 18:14:49'),
(6, 'Dolphin-20', 40, 'Driver 6', '017XXXXXXXX', 'active', '2025-03-23 18:14:49', '2025-03-23 18:14:49'),
(7, 'Dolphin-21', 40, 'Driver 7', '017XXXXXXXX', 'active', '2025-03-23 18:14:49', '2025-03-23 18:14:49'),
(8, 'Dolphin-22', 40, 'Driver 8', '0123456789', 'active', '2025-03-23 18:14:49', '2025-03-23 18:27:52'),
(9, 'Dolphin-25', 40, 'Driver 9', '017XXXXXXXX', 'active', '2025-03-23 18:14:49', '2025-03-23 18:14:49'),
(10, 'Dolphin-30', 40, 'Driver 10', '017XXXXXXXX', 'active', '2025-03-23 18:14:49', '2025-03-23 18:14:49'),
(11, 'Surjomukhi-6', 40, 'Driver 11', '017XXXXXXXX', 'active', '2025-03-23 18:14:49', '2025-03-23 18:14:49'),
(12, 'Surjomukhi-10', 40, 'Driver 12', '017XXXXXXXX', 'active', '2025-03-23 18:14:49', '2025-03-23 18:14:49'),
(13, 'Surjomukhi-11', 40, 'Driver 13', '017XXXXXXXX', 'active', '2025-03-23 18:14:49', '2025-03-23 18:14:49'),
(14, 'Surjomukhi-12', 40, 'Driver 14', '017XXXXXXXX', 'active', '2025-03-23 18:14:49', '2025-03-23 18:14:49'),
(15, 'Surjomukhi-13', 40, 'Driver 15', '017XXXXXXXX', 'active', '2025-03-23 18:14:49', '2025-03-23 18:14:49'),
(16, 'Surjomukhi-15', 40, 'Driver 16', '017XXXXXXXX', 'active', '2025-03-23 18:14:49', '2025-03-23 18:14:49'),
(17, 'Surjomukhi-16', 40, 'Driver 17', '017XXXXXXXX', 'active', '2025-03-23 18:14:49', '2025-03-23 18:14:49'),
(18, 'Surjomukhi-17', 40, 'Driver 18', '017XXXXXXXX', 'active', '2025-03-23 18:14:49', '2025-03-23 18:14:49'),
(19, 'Surjomukhi-18', 40, 'Driver 19', '017XXXXXXXX', 'active', '2025-03-23 18:14:49', '2025-03-23 18:14:49'),
(20, 'Surjomukhi-19', 40, 'Driver 20', '017XXXXXXXX', 'active', '2025-03-23 18:14:49', '2025-03-23 18:14:49'),
(21, 'Surjomukhi-20', 40, 'Driver 21', '017XXXXXXXX', 'active', '2025-03-23 18:14:49', '2025-03-23 18:14:49'),
(22, 'Surjomukhi-21', 40, 'Driver 22', '017XXXXXXXX', 'active', '2025-03-23 18:14:49', '2025-03-23 18:14:49'),
(23, 'Surjomukhi-22', 40, 'Driver 23', '017XXXXXXXX', 'active', '2025-03-23 18:14:49', '2025-03-23 18:14:49'),
(24, 'Surjomukhi-23', 40, 'Driver 24', '017XXXXXXXX', 'active', '2025-03-23 18:14:49', '2025-03-23 18:14:49'),
(25, 'Surjomukhi-24', 40, 'Driver 25', '017XXXXXXXX', 'active', '2025-03-23 18:14:49', '2025-03-23 18:14:49'),
(26, 'Surjomukhi-25', 40, 'Driver 26', '017XXXXXXXX', 'active', '2025-03-23 18:14:49', '2025-03-23 18:14:49'),
(27, 'Surjomukhi-26', 40, 'Driver 27', '017XXXXXXXX', 'active', '2025-03-23 18:14:49', '2025-03-23 18:14:49'),
(28, 'Surjomukhi-7', 40, 'Driver 28', '017XXXXXXXX', 'active', '2025-03-23 18:14:49', '2025-03-23 18:14:49'),
(29, 'Surjomukhi-8', 40, 'Driver 29', '017XXXXXXXX', 'active', '2025-03-23 18:14:49', '2025-03-23 18:14:49'),
(30, 'Dolpin-2', 40, 'Driver 30', '017XXXXXXXX', 'active', '2025-03-23 18:14:49', '2025-03-23 18:14:49'),
(31, 'Dolpin-27', 40, 'Driver 31', '017XXXXXXXX', 'active', '2025-03-23 18:14:49', '2025-03-23 18:14:49'),
(32, 'Rojonigondha-1', 40, 'Driver 32', '017XXXXXXXX', 'active', '2025-03-23 18:14:49', '2025-03-23 18:14:49'),
(33, 'Rojonigondha-3', 40, 'Driver 33', '017XXXXXXXX', 'active', '2025-03-23 18:14:49', '2025-03-23 18:14:49'),
(34, 'Rojonigondha-4', 40, 'Driver 34', '017XXXXXXXX', 'active', '2025-03-23 18:14:49', '2025-03-23 18:14:49'),
(35, 'Rojonigondha-5', 40, 'Driver 35', '017XXXXXXXX', 'active', '2025-03-23 18:14:49', '2025-03-23 18:14:49'),
(36, 'Rojonigondha-6', 40, 'Driver 36', '017XXXXXXXX', 'active', '2025-03-23 18:14:49', '2025-03-23 18:14:49'),
(37, 'Rojonigondha-7', 40, 'Driver 37', '017XXXXXXXX', 'active', '2025-03-23 18:14:49', '2025-03-23 18:14:49'),
(38, 'Rojonigondha-8', 40, 'Driver 38', '017XXXXXXXX', 'active', '2025-03-23 18:14:49', '2025-03-23 18:14:49'),
(39, 'Rojonigondha-9', 40, 'Driver 39', '017XXXXXXXX', 'active', '2025-03-23 18:14:49', '2025-03-23 18:14:49'),
(40, 'Rojonigondha-10', 40, 'Driver 40', '017XXXXXXXX', 'active', '2025-03-23 18:14:49', '2025-03-23 18:14:49'),
(41, 'Rojonigondha-11', 40, 'Driver 41', '017XXXXXXXX', 'active', '2025-03-23 18:14:49', '2025-03-23 18:14:49'),
(42, 'Rojonigondha-12', 40, 'Driver 42', '017XXXXXXXX', 'active', '2025-03-23 18:14:49', '2025-03-23 18:14:49'),
(43, 'Rojonigondha-13', 40, 'Driver 43', '017XXXXXXXX', 'active', '2025-03-23 18:14:49', '2025-03-23 18:14:49');

-- --------------------------------------------------------

--
-- Table structure for table `profiles`
--

CREATE TABLE `profiles` (
  `id` int UNSIGNED NOT NULL,
  `student_id` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `first_name` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `last_name` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `department` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `phone_number` varchar(20) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `address` text COLLATE utf8mb4_general_ci,
  `city` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `state` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `postal_code` varchar(20) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `user_id` int UNSIGNED DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `routes`
--

CREATE TABLE `routes` (
  `id` int UNSIGNED NOT NULL,
  `route_name` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `start_point` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `end_point` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `distance` decimal(10,2) DEFAULT NULL,
  `amount` decimal(10,2) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `routes`
--

INSERT INTO `routes` (`id`, `route_name`, `start_point`, `end_point`, `distance`, `amount`, `created_at`, `updated_at`) VALUES
(1, 'DSC - Dhanmondi', 'DSC', 'Dhanmondi', NULL, NULL, '2025-03-23 18:14:49', '2025-03-23 18:14:49'),
(2, 'DSC - Uttara Azampur', 'DSC', 'Uttara Azampur', NULL, NULL, '2025-03-23 18:14:49', '2025-03-23 18:14:49'),
(3, 'DSC - Tongi College Gate', 'DSC', 'Tongi College Gate', NULL, NULL, '2025-03-23 18:14:49', '2025-03-23 18:14:49'),
(4, 'DSC - Mirpur-10', 'DSC', 'Mirpur-10', NULL, NULL, '2025-03-23 18:14:49', '2025-03-23 18:14:49'),
(5, 'DSC - Narayanganj Chasara', 'DSC', 'Narayanganj Chasara', NULL, NULL, '2025-03-23 18:14:49', '2025-03-23 18:14:49'),
(6, 'DSC - Savar', 'DSC', 'Savar', NULL, NULL, '2025-03-23 18:14:49', '2025-03-23 18:14:49'),
(7, 'DSC - Green Model Town-Mugdha Model Thana-Malibag', 'DSC', 'Green Model Town-Mugdha Model Thana-Malibag', NULL, NULL, '2025-03-23 18:14:49', '2025-03-23 18:14:49'),
(8, 'Employee Bus', 'DSC', 'Various', NULL, NULL, '2025-03-23 18:14:49', '2025-03-23 18:14:49'),
(9, 'Other Bus', 'DSC', 'Various', NULL, NULL, '2025-03-23 18:14:49', '2025-03-23 18:14:49'),
(10, 'DSC - Dhanmondi', 'DSC', 'Dhanmondi', NULL, NULL, '2025-03-23 18:15:02', '2025-03-23 18:15:02'),
(11, 'DSC - Uttara Azampur', 'DSC', 'Uttara Azampur', NULL, NULL, '2025-03-23 18:15:02', '2025-03-23 18:15:02'),
(12, 'DSC - Tongi College Gate', 'DSC', 'Tongi College Gate', NULL, NULL, '2025-03-23 18:15:02', '2025-03-23 18:15:02'),
(13, 'DSC - Mirpur-10', 'DSC', 'Mirpur-10', NULL, NULL, '2025-03-23 18:15:02', '2025-03-23 18:15:02'),
(14, 'DSC - Narayanganj Chasara', 'DSC', 'Narayanganj Chasara', NULL, NULL, '2025-03-23 18:15:02', '2025-03-23 18:15:02'),
(15, 'DSC - Savar', 'DSC', 'Savar', NULL, NULL, '2025-03-23 18:15:02', '2025-03-23 18:15:02'),
(16, 'DSC - Green Model Town-Mugdha Model Thana-Malibag', 'DSC', 'Green Model Town-Mugdha Model Thana-Malibag', NULL, NULL, '2025-03-23 18:15:02', '2025-03-23 18:15:02'),
(17, 'Employee Bus', 'DSC', 'Various', NULL, NULL, '2025-03-23 18:15:02', '2025-03-23 18:15:02'),
(18, 'Other Bus', 'DSC', 'Various', NULL, NULL, '2025-03-23 18:15:02', '2025-03-23 18:15:02');

-- --------------------------------------------------------

--
-- Table structure for table `shedule_buses`
--

CREATE TABLE `shedule_buses` (
  `id` int UNSIGNED NOT NULL,
  `route_id` int UNSIGNED NOT NULL,
  `bus_id` int UNSIGNED NOT NULL,
  `departure_time` time DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `shedule_buses`
--

INSERT INTO `shedule_buses` (`id`, `route_id`, `bus_id`, `departure_time`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '07:00:00', '2025-03-23 18:22:40', '2025-03-23 18:22:40'),
(2, 2, 2, '07:30:00', '2025-03-23 18:22:40', '2025-03-23 18:22:40'),
(3, 3, 3, '08:00:00', '2025-03-23 18:22:40', '2025-03-23 18:22:40'),
(4, 4, 4, '08:30:00', '2025-03-23 18:22:40', '2025-03-23 18:22:40'),
(5, 5, 5, '09:00:00', '2025-03-23 18:22:40', '2025-03-23 18:22:40'),
(6, 6, 6, '09:30:00', '2025-03-23 18:22:40', '2025-03-23 18:22:40'),
(7, 7, 7, '10:00:00', '2025-03-23 18:22:40', '2025-03-23 18:22:40'),
(8, 8, 8, '10:30:00', '2025-03-23 18:22:40', '2025-03-23 18:22:40'),
(9, 9, 9, '11:00:00', '2025-03-23 18:22:40', '2025-03-23 18:22:40'),
(10, 1, 10, '11:30:00', '2025-03-23 18:22:40', '2025-03-23 18:22:40'),
(11, 2, 11, '12:00:00', '2025-03-23 18:22:40', '2025-03-23 18:22:40'),
(12, 3, 12, '12:30:00', '2025-03-23 18:22:40', '2025-03-23 18:22:40'),
(13, 4, 13, '13:00:00', '2025-03-23 18:22:40', '2025-03-23 18:22:40'),
(14, 5, 14, '13:30:00', '2025-03-23 18:22:40', '2025-03-23 18:22:40'),
(15, 6, 15, '14:00:00', '2025-03-23 18:22:40', '2025-03-23 18:22:40'),
(16, 7, 16, '14:30:00', '2025-03-23 18:22:40', '2025-03-23 18:22:40'),
(17, 8, 17, '15:00:00', '2025-03-23 18:22:40', '2025-03-23 18:22:40'),
(18, 9, 18, '15:30:00', '2025-03-23 18:22:40', '2025-03-23 18:22:40'),
(19, 1, 19, '16:00:00', '2025-03-23 18:22:40', '2025-03-23 18:22:40'),
(20, 2, 20, '16:30:00', '2025-03-23 18:22:40', '2025-03-23 18:22:40'),
(21, 3, 21, '17:00:00', '2025-03-23 18:22:40', '2025-03-23 18:22:40'),
(22, 4, 22, '17:30:00', '2025-03-23 18:22:40', '2025-03-23 18:22:40'),
(23, 5, 23, '18:00:00', '2025-03-23 18:22:40', '2025-03-23 18:22:40'),
(24, 6, 24, '18:30:00', '2025-03-23 18:22:40', '2025-03-23 18:22:40'),
(25, 7, 25, '19:00:00', '2025-03-23 18:22:40', '2025-03-23 18:22:40'),
(26, 8, 26, '19:30:00', '2025-03-23 18:22:40', '2025-03-23 18:22:40'),
(27, 9, 27, '20:00:00', '2025-03-23 18:22:40', '2025-03-23 18:22:40'),
(28, 1, 28, '20:30:00', '2025-03-23 18:22:40', '2025-03-23 18:22:40'),
(29, 2, 29, '21:00:00', '2025-03-23 18:22:40', '2025-03-23 18:22:40'),
(30, 3, 30, '21:30:00', '2025-03-23 18:22:40', '2025-03-23 18:22:40'),
(31, 4, 31, '22:00:00', '2025-03-23 18:22:40', '2025-03-23 18:22:40'),
(32, 5, 32, '22:30:00', '2025-03-23 18:22:40', '2025-03-23 18:22:40'),
(33, 6, 33, '23:00:00', '2025-03-23 18:22:40', '2025-03-23 18:22:40'),
(34, 7, 34, '23:30:00', '2025-03-23 18:22:40', '2025-03-23 18:22:40'),
(35, 8, 35, '23:59:00', '2025-03-23 18:22:40', '2025-03-23 18:22:40');

-- --------------------------------------------------------

--
-- Table structure for table `transport_applications`
--

CREATE TABLE `transport_applications` (
  `id` int UNSIGNED NOT NULL,
  `student_id` int UNSIGNED NOT NULL,
  `route_id` int UNSIGNED NOT NULL,
  `application_status` enum('pending','approved','rejected') COLLATE utf8mb4_general_ci DEFAULT 'pending',
  `payment_method` enum('cash','bkash','rocket') COLLATE utf8mb4_general_ci DEFAULT 'cash',
  `paid_amount` decimal(10,2) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int UNSIGNED NOT NULL,
  `username` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `role` enum('admin','student') COLLATE utf8mb4_general_ci NOT NULL,
  `status` enum('pending','approved','rejected') COLLATE utf8mb4_general_ci DEFAULT 'pending',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `role`, `status`, `created_at`, `updated_at`) VALUES
(1, 'admin', '25f9e794323b453885f5181f1b624d0b', 'admin@gmail.com', 'admin', 'approved', '2025-03-23 18:24:19', '2025-03-23 18:24:19'),
(2, 'student', '25f9e794323b453885f5181f1b624d0b', 'student@test.com', 'student', 'approved', '2025-04-05 16:43:51', '2025-04-05 16:43:51');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buses`
--
ALTER TABLE `buses`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `bus_number` (`bus_number`);

--
-- Indexes for table `profiles`
--
ALTER TABLE `profiles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `student_id` (`student_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `routes`
--
ALTER TABLE `routes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shedule_buses`
--
ALTER TABLE `shedule_buses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `route_id` (`route_id`),
  ADD KEY `bus_id` (`bus_id`);

--
-- Indexes for table `transport_applications`
--
ALTER TABLE `transport_applications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `student_id` (`student_id`),
  ADD KEY `route_id` (`route_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buses`
--
ALTER TABLE `buses`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `profiles`
--
ALTER TABLE `profiles`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `routes`
--
ALTER TABLE `routes`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `shedule_buses`
--
ALTER TABLE `shedule_buses`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `transport_applications`
--
ALTER TABLE `transport_applications`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
