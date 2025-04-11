-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 11, 2025 at 08:13 AM
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
(1, 'Dolphin-12', 40, 'Md. Kamal Hossain', '01712345678', 'active', '2025-03-23 18:14:49', '2025-04-11 06:21:41'),
(2, 'Dolphin-16', 40, 'Abdul Alim', '01812345678', 'active', '2025-03-23 18:14:49', '2025-04-11 06:21:41'),
(3, 'Dolphin-17', 40, 'Saiful Islam', '01912345678', 'active', '2025-03-23 18:14:49', '2025-04-11 06:21:41'),
(4, 'Dolphin-18', 40, 'Rafiqul Haque', '01612345678', 'active', '2025-03-23 18:14:49', '2025-04-11 06:21:41'),
(5, 'Dolphin-19', 40, 'Nurul Amin', '01712345679', 'active', '2025-03-23 18:14:49', '2025-04-11 06:21:41'),
(6, 'Dolphin-20', 40, 'Jamal Uddin', '01812345679', 'active', '2025-03-23 18:14:49', '2025-04-11 06:21:41'),
(7, 'Dolphin-21', 40, 'Mohammad Shahid', '01912345679', 'active', '2025-03-23 18:14:49', '2025-04-11 06:21:41'),
(8, 'Dolphin-22', 40, 'Jahangir Alam', '01612345679', 'active', '2025-03-23 18:14:49', '2025-04-11 06:21:41'),
(9, 'Dolphin-25', 40, 'Shahjahan Mia', '01712345680', 'active', '2025-03-23 18:14:49', '2025-04-11 06:21:41'),
(10, 'Dolphin-30', 40, 'Mofiz Miah', '01812345680', 'active', '2025-03-23 18:14:49', '2025-04-11 06:21:41'),
(11, 'Surjomukhi-6', 40, 'Abdur Rahman', '01912345680', 'active', '2025-03-23 18:14:49', '2025-04-11 06:21:41'),
(12, 'Surjomukhi-10', 40, 'Karim Khan', '01612345680', 'active', '2025-03-23 18:14:49', '2025-04-11 06:21:41'),
(13, 'Surjomukhi-11', 40, 'Habibur Rahman', '01712345681', 'active', '2025-03-23 18:14:49', '2025-04-11 06:21:41'),
(14, 'Surjomukhi-12', 40, 'Mokhlesur Rahman', '01812345681', 'active', '2025-03-23 18:14:49', '2025-04-11 06:21:41'),
(15, 'Surjomukhi-13', 40, 'Motiur Rahman', '01912345681', 'active', '2025-03-23 18:14:49', '2025-04-11 06:21:41'),
(16, 'Surjomukhi-15', 40, 'Zakir Hossain', '01612345681', 'active', '2025-03-23 18:14:49', '2025-04-11 06:21:41'),
(17, 'Surjomukhi-16', 40, 'Golam Mostafa', '01712345682', 'active', '2025-03-23 18:14:49', '2025-04-11 06:21:41'),
(18, 'Surjomukhi-17', 40, 'Nazmul Haque', '01812345682', 'active', '2025-03-23 18:14:49', '2025-04-11 06:21:41'),
(19, 'Surjomukhi-18', 40, 'Anwar Hossain', '01912345682', 'active', '2025-03-23 18:14:49', '2025-04-11 06:21:41'),
(20, 'Surjomukhi-19', 40, 'Abul Kalam', '01612345682', 'active', '2025-03-23 18:14:49', '2025-04-11 06:21:41'),
(21, 'Surjomukhi-20', 40, 'Monir Hossain', '01712345683', 'active', '2025-03-23 18:14:49', '2025-04-11 06:21:41'),
(22, 'Surjomukhi-21', 40, 'Kuddus Ali', '01812345683', 'active', '2025-03-23 18:14:49', '2025-04-11 06:21:41'),
(23, 'Surjomukhi-22', 40, 'Mosharraf Hossain', '01912345683', 'active', '2025-03-23 18:14:49', '2025-04-11 06:21:41'),
(24, 'Surjomukhi-23', 40, 'Nasir Uddin', '01612345683', 'active', '2025-03-23 18:14:49', '2025-04-11 06:21:41'),
(25, 'Surjomukhi-24', 40, 'Jasim Uddin', '01712345684', 'active', '2025-03-23 18:14:49', '2025-04-11 06:21:41'),
(26, 'Surjomukhi-25', 40, 'Shafiqul Islam', '01812345684', 'active', '2025-03-23 18:14:49', '2025-04-11 06:21:41'),
(27, 'Surjomukhi-26', 40, 'Nazrul Islam', '01912345684', 'active', '2025-03-23 18:14:49', '2025-04-11 06:21:41'),
(28, 'Surjomukhi-7', 40, 'Aminul Islam', '01612345684', 'active', '2025-03-23 18:14:49', '2025-04-11 06:21:41'),
(29, 'Surjomukhi-8', 40, 'Fazlul Haque', '01712345685', 'active', '2025-03-23 18:14:49', '2025-04-11 06:21:41'),
(30, 'Dolpin-2', 40, 'Ashraful Islam', '01812345685', 'active', '2025-03-23 18:14:49', '2025-04-11 06:21:41'),
(31, 'Dolpin-27', 40, 'Moniruzzaman Moni', '01912345685', 'active', '2025-03-23 18:14:49', '2025-04-11 06:21:41'),
(32, 'Rojonigondha-1', 40, 'Sirajul Islam', '01612345685', 'active', '2025-03-23 18:14:49', '2025-04-11 06:21:41'),
(33, 'Rojonigondha-3', 40, 'Mahbubur Rahman', '01712345686', 'active', '2025-03-23 18:14:49', '2025-04-11 06:21:41'),
(34, 'Rojonigondha-4', 40, 'Delwar Hossain', '01812345686', 'active', '2025-03-23 18:14:49', '2025-04-11 06:21:41'),
(35, 'Rojonigondha-5', 40, 'Mizanur Rahman', '01912345686', 'active', '2025-03-23 18:14:49', '2025-04-11 06:21:41'),
(36, 'Rojonigondha-6', 40, 'Sohel Rana', '01612345686', 'active', '2025-03-23 18:14:49', '2025-04-11 06:21:41'),
(37, 'Rojonigondha-7', 40, 'Kamrul Hasan', '01712345687', 'active', '2025-03-23 18:14:49', '2025-04-11 06:21:41'),
(38, 'Rojonigondha-8', 40, 'Rubel Miah', '01812345687', 'active', '2025-03-23 18:14:49', '2025-04-11 06:21:41'),
(39, 'Rojonigondha-9', 40, 'Solaiman Miah', '01912345687', 'active', '2025-03-23 18:14:49', '2025-04-11 06:21:41'),
(40, 'Rojonigondha-10', 40, 'Farhad Hossain', '01612345687', 'active', '2025-03-23 18:14:49', '2025-04-11 06:21:41'),
(41, 'Rojonigondha-11', 40, 'Masud Rana', '01712345688', 'active', '2025-03-23 18:14:49', '2025-04-11 06:21:41'),
(42, 'Rojonigondha-12', 40, 'Harunur Rashid', '01812345688', 'active', '2025-03-23 18:14:49', '2025-04-11 06:21:41'),
(43, 'Rojonigondha-13', 40, 'Mostafizur Rahman', '01912345688', 'active', '2025-03-23 18:14:49', '2025-04-11 06:21:41');

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

--
-- Dumping data for table `profiles`
--

INSERT INTO `profiles` (`id`, `student_id`, `first_name`, `last_name`, `image`, `department`, `phone_number`, `address`, `city`, `state`, `postal_code`, `user_id`, `created_at`, `updated_at`) VALUES
(1, '024231000510001', 'Abdul', 'Rahman', NULL, 'Computer Science', '01712345601', '27/A, Road 5, Dhanmondi', 'Dhaka', 'Dhaka', '1209', 1, '2025-04-11 05:20:15', '2025-04-11 05:20:15'),
(2, '024231000510002', 'Fatima', 'Begum', 'uploads/profile_2_1744357931.png', 'Electrical Engineering', '01812345602', '15, Block C, Bashundhara R/A', 'Dhaka', 'Dhaka', '1229', 2, '2025-04-11 05:20:15', '2025-04-11 07:52:11'),
(3, '024231000510003', 'Mohammad', 'Islam', NULL, 'Civil Engineering', '01912345603', '45, Green Road', 'Dhaka', 'Dhaka', '1205', 3, '2025-04-11 05:20:15', '2025-04-11 05:20:15'),
(4, '024231000510004', 'Nusrat', 'Akter', NULL, 'Business Administration', '01512345604', '32, Road 11, Banani', 'Dhaka', 'Dhaka', '1213', 4, '2025-04-11 05:20:15', '2025-04-11 05:20:15'),
(5, '024231000510005', 'Kamal', 'Hossain', NULL, 'Mechanical Engineering', '01612345605', '67, Road 4, Mirpur', 'Dhaka', 'Dhaka', '1216', 5, '2025-04-11 05:20:15', '2025-04-11 05:20:15'),
(6, '024231000510006', 'Ayesha', 'Khatun', NULL, 'Textile Engineering', '01712345606', '23, Central Road', 'Dhaka', 'Dhaka', '1205', 6, '2025-04-11 05:20:15', '2025-04-11 05:20:15'),
(7, '024231000510007', 'Rafiq', 'Ahmed', NULL, 'Computer Science', '01812345607', '41, New Eskaton', 'Dhaka', 'Dhaka', '1000', 7, '2025-04-11 05:20:15', '2025-04-11 05:20:15'),
(8, '024231000510008', 'Sadia', 'Rahman', NULL, 'Civil Engineering', '01912345608', '17, Block B, Gulshan-1', 'Dhaka', 'Dhaka', '1212', 8, '2025-04-11 05:20:15', '2025-04-11 05:20:15'),
(9, '024231000510009', 'Tanvir', 'Mahmud', NULL, 'Electrical Engineering', '01512345609', '29, Road 3, Uttara', 'Dhaka', 'Dhaka', '1230', 9, '2025-04-11 05:20:15', '2025-04-11 05:20:15'),
(10, '024231000510010', 'Nasrin', 'Sultana', NULL, 'Business Administration', '01612345610', '56, Shantinagar', 'Dhaka', 'Dhaka', '1217', 10, '2025-04-11 05:20:15', '2025-04-11 05:20:15'),
(11, '024231000510011', 'Jahid', 'Hassan', NULL, 'Mechanical Engineering', '01712345611', '19, Road 5, Mohammadpur', 'Dhaka', 'Dhaka', '1207', 11, '2025-04-11 05:20:15', '2025-04-11 05:20:15'),
(12, '024231000510012', 'Tahmina', 'Jahan', NULL, 'Computer Science', '01812345612', '38, Segunbagicha', 'Dhaka', 'Dhaka', '1000', 12, '2025-04-11 05:20:15', '2025-04-11 05:20:15'),
(13, '024231000510013', 'Imran', 'Khan', NULL, 'Civil Engineering', '01912345613', '72, Malibagh', 'Dhaka', 'Dhaka', '1217', 13, '2025-04-11 05:20:15', '2025-04-11 05:20:15'),
(14, '024231000510014', 'Sabina', 'Yasmin', NULL, 'Business Administration', '01512345614', '24, Khilgaon', 'Dhaka', 'Dhaka', '1219', 14, '2025-04-11 05:20:15', '2025-04-11 05:20:15'),
(15, '024231000510015', 'Rahim', 'Uddin', NULL, 'Electrical Engineering', '01612345615', '47, Road 7, Banani DOHS', 'Dhaka', 'Dhaka', '1206', 15, '2025-04-11 05:20:15', '2025-04-11 05:20:15'),
(16, '024231000510016', 'Maliha', 'Islam', NULL, 'Computer Science', '01712345616', '34, Elephant Road', 'Dhaka', 'Dhaka', '1205', 16, '2025-04-11 05:20:15', '2025-04-11 05:20:15'),
(17, '024231000510017', 'Faruk', 'Hasan', NULL, 'Mechanical Engineering', '01812345617', '59, North Badda', 'Dhaka', 'Dhaka', '1212', 17, '2025-04-11 05:20:15', '2025-04-11 05:20:15'),
(18, '024231000510018', 'Roksana', 'Begum', NULL, 'Textile Engineering', '01912345618', '26, East Rajabazar', 'Dhaka', 'Dhaka', '1215', 18, '2025-04-11 05:20:15', '2025-04-11 05:20:15'),
(19, '024231000510019', 'Sharif', 'Alam', NULL, 'Civil Engineering', '01512345619', '83, Kakrail', 'Dhaka', 'Dhaka', '1000', 19, '2025-04-11 05:20:15', '2025-04-11 05:20:15'),
(20, '024231000510020', 'Jasmine', 'Sultana', NULL, 'Business Administration', '01612345620', '42, Road 14, Sector 4, Uttara', 'Dhaka', 'Dhaka', '1230', 20, '2025-04-11 05:20:15', '2025-04-11 05:20:15'),
(21, '024231000510021', 'Kabir', 'Ahmed', NULL, 'Computer Science', '01712345621', '15, O.R. Nizam Road', 'Chittagong', 'Chittagong', '4000', 21, '2025-04-11 05:20:15', '2025-04-11 05:20:15'),
(22, '024231000510022', 'Nusrat', 'Jahan', NULL, 'Electrical Engineering', '01812345622', '27, Nasirabad Housing Society', 'Chittagong', 'Chittagong', '4203', 22, '2025-04-11 05:20:15', '2025-04-11 05:20:15'),
(23, '024231000510023', 'Saiful', 'Islam', NULL, 'Civil Engineering', '01912345623', '39, GEC Circle', 'Chittagong', 'Chittagong', '4000', 23, '2025-04-11 05:20:15', '2025-04-11 05:20:15'),
(24, '024231000510024', 'Tania', 'Ahmed', NULL, 'Business Administration', '01512345624', '52, Khulshi Hill', 'Chittagong', 'Chittagong', '4225', 24, '2025-04-11 05:20:15', '2025-04-11 05:20:15'),
(25, '024231000510025', 'Omar', 'Faruk', NULL, 'Mechanical Engineering', '01612345625', '31, Agrabad Commercial Area', 'Chittagong', 'Chittagong', '4100', 25, '2025-04-11 05:20:15', '2025-04-11 05:20:15'),
(26, '024231000510026', 'Liton', 'Ali', NULL, 'Computer Science', '01712345626', '18, Vodra, University Area', 'Rajshahi', 'Rajshahi', '6205', 26, '2025-04-11 05:20:15', '2025-04-11 05:20:15'),
(27, '024231000510027', 'Farzana', 'Akter', NULL, 'Electrical Engineering', '01812345627', '45, Upashahar', 'Rajshahi', 'Rajshahi', '6203', 27, '2025-04-11 05:20:15', '2025-04-11 05:20:15'),
(28, '024231000510028', 'Rubel', 'Hossain', NULL, 'Civil Engineering', '01912345628', '23, New Market Area', 'Rajshahi', 'Rajshahi', '6000', 28, '2025-04-11 05:20:15', '2025-04-11 05:20:15'),
(29, '024231000510029', 'Munira', 'Khatun', NULL, 'Business Administration', '01512345629', '67, Shalbagan', 'Rajshahi', 'Rajshahi', '6201', 29, '2025-04-11 05:20:15', '2025-04-11 05:20:15'),
(30, '024231000510030', 'Mojibur', 'Rahman', NULL, 'Mechanical Engineering', '01612345630', '14, Kazla', 'Rajshahi', 'Rajshahi', '6204', 30, '2025-04-11 05:20:15', '2025-04-11 05:20:15'),
(31, '024231000510031', 'Asif', 'Mahmud', NULL, 'Computer Science', '01712345631', '29, Shahjalal Upashahar', 'Sylhet', 'Sylhet', '3100', 31, '2025-04-11 05:20:15', '2025-04-11 05:20:15'),
(32, '024231000510032', 'Rabeya', 'Sultana', NULL, 'Electrical Engineering', '01812345632', '53, Ambarkhana', 'Sylhet', 'Sylhet', '3100', 32, '2025-04-11 05:20:15', '2025-04-11 05:20:15'),
(33, '024231000510033', 'Milon', 'Miah', NULL, 'Civil Engineering', '01912345633', '41, Zindabazar', 'Sylhet', 'Sylhet', '3100', 33, '2025-04-11 05:20:15', '2025-04-11 05:20:15'),
(34, '024231000510034', 'Nilufa', 'Yesmin', NULL, 'Business Administration', '01512345634', '76, Subidbazar', 'Sylhet', 'Sylhet', '3100', 34, '2025-04-11 05:20:15', '2025-04-11 05:20:15'),
(35, '024231000510035', 'Sohel', 'Ahmed', NULL, 'Mechanical Engineering', '01612345635', '12, Tilagarh', 'Sylhet', 'Sylhet', '3100', 35, '2025-04-11 05:20:15', '2025-04-11 05:20:15'),
(36, '024231000510036', 'Mamun', 'Khan', NULL, 'Computer Science', '01712345636', '35, KDA Avenue', 'Khulna', 'Khulna', '9100', 36, '2025-04-11 05:20:15', '2025-04-11 05:20:15'),
(37, '024231000510037', 'Sharmin', 'Akter', NULL, 'Electrical Engineering', '01812345637', '19, Sonadanga', 'Khulna', 'Khulna', '9100', 37, '2025-04-11 05:20:15', '2025-04-11 05:20:15'),
(38, '024231000510038', 'Abul', 'Kalam', NULL, 'Civil Engineering', '01912345638', '47, Boyra', 'Khulna', 'Khulna', '9000', 38, '2025-04-11 05:20:15', '2025-04-11 05:20:15'),
(39, '024231000510039', 'Rumana', 'Begum', NULL, 'Business Administration', '01512345639', '28, Khalishpur', 'Khulna', 'Khulna', '9000', 39, '2025-04-11 05:20:15', '2025-04-11 05:20:15'),
(40, '024231000510040', 'Jahangir', 'Alam', NULL, 'Mechanical Engineering', '01612345640', '56, Daulatpur', 'Khulna', 'Khulna', '9202', 40, '2025-04-11 05:20:15', '2025-04-11 05:20:15'),
(41, '024231000510041', 'Mehedi', 'Hasan', NULL, 'Computer Science', '01712345641', '22, Dargah Gate', 'Barisal', 'Barisal', '8200', 41, '2025-04-11 05:20:15', '2025-04-11 05:20:15'),
(42, '024231000510042', 'Runa', 'Laila', NULL, 'Electrical Engineering', '01812345642', '49, Sadar Road', 'Barisal', 'Barisal', '8200', 42, '2025-04-11 05:20:15', '2025-04-11 05:20:15'),
(43, '024231000510043', 'Bipul', 'Chowdhury', NULL, 'Civil Engineering', '01912345643', '37, Nathullabad', 'Barisal', 'Barisal', '8200', 43, '2025-04-11 05:20:15', '2025-04-11 05:20:15'),
(44, '024231000510044', 'Salma', 'Akter', NULL, 'Business Administration', '01512345644', '61, Gournadi', 'Barisal', 'Barisal', '8230', 44, '2025-04-11 05:20:15', '2025-04-11 05:20:15'),
(45, '024231000510045', 'Masud', 'Rana', NULL, 'Mechanical Engineering', '01612345645', '25, Bells Park', 'Barisal', 'Barisal', '8200', 45, '2025-04-11 05:20:15', '2025-04-11 05:20:15'),
(46, '024231000510046', 'Sanjida', 'Khanam', NULL, 'Computer Science', '01712345646', '44, Amtola', 'Rangpur', 'Rangpur', '5400', 46, '2025-04-11 05:20:15', '2025-04-11 05:20:15'),
(47, '024231000510047', 'Nasir', 'Uddin', NULL, 'Electrical Engineering', '01812345647', '33, Modern More', 'Rangpur', 'Rangpur', '5400', 47, '2025-04-11 05:20:15', '2025-04-11 05:20:15'),
(48, '024231000510048', 'Mou', 'Akter', NULL, 'Civil Engineering', '01912345648', '57, Dhap', 'Rangpur', 'Rangpur', '5400', 48, '2025-04-11 05:20:15', '2025-04-11 05:20:15'),
(49, '024231000510049', 'Zakir', 'Hossain', NULL, 'Business Administration', '01512345649', '78, Katchari Bazar', 'Rangpur', 'Rangpur', '5400', 49, '2025-04-11 05:20:15', '2025-04-11 05:20:15'),
(50, '024231000510050', 'Shirin', 'Akter', NULL, 'Mechanical Engineering', '01612345650', '16, Jahaj Company More', 'Rangpur', 'Rangpur', '5400', 50, '2025-04-11 05:20:15', '2025-04-11 05:20:15');

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
(1, 'Dhanmondi - DSC', 'Dhanmondi', 'DSC', 16.00, 4500.00, '2025-04-11 06:13:46', '2025-04-11 06:13:46'),
(2, 'Uttara Azampur - DSC', 'Uttara Azampur', 'DSC', 22.00, 4500.00, '2025-04-11 06:13:46', '2025-04-11 06:13:46'),
(3, 'Tongi College Gate - DSC', 'Tongi College Gate', 'DSC', 25.00, 4500.00, '2025-04-11 06:13:46', '2025-04-11 06:13:46'),
(4, 'Mirpur-10 - DSC', 'Mirpur-10', 'DSC', 18.00, 4500.00, '2025-04-11 06:13:46', '2025-04-11 06:13:46'),
(5, 'Narayanganj Chasara - DSC', 'Narayanganj Chasara', 'DSC', 45.00, 4500.00, '2025-04-11 06:13:46', '2025-04-11 06:13:46'),
(6, 'Savar - DSC', 'Savar', 'DSC', 25.00, 4500.00, '2025-04-11 06:13:46', '2025-04-11 06:13:46'),
(7, 'Green Model Town-Mugdha Model Thana-Malibag - DSC', 'Green Model Town-Mugdha Model Thana-Malibag', 'DSC', 35.00, 4500.00, '2025-04-11 06:13:46', '2025-04-11 06:13:46'),
(8, 'Employee Bus', 'Various', 'DSC', 10.00, 4500.00, '2025-04-11 06:13:46', '2025-04-11 06:13:46'),
(9, 'Other Bus', 'Various', 'DSC', 10.00, 4500.00, '2025-04-11 06:13:46', '2025-04-11 06:13:46'),
(10, 'DSC - Dhanmondi', 'DSC', 'Dhanmondi', 16.00, 4500.00, '2025-04-11 06:13:46', '2025-04-11 06:13:46'),
(11, 'DSC - Uttara Azampur', 'DSC', 'Uttara Azampur', 22.00, 4500.00, '2025-04-11 06:13:46', '2025-04-11 06:13:46'),
(12, 'DSC - Tongi College Gate', 'DSC', 'Tongi College Gate', 25.00, 4500.00, '2025-04-11 06:13:46', '2025-04-11 06:13:46'),
(13, 'DSC - Mirpur-10', 'DSC', 'Mirpur-10', 18.00, 4500.00, '2025-04-11 06:13:46', '2025-04-11 06:13:46'),
(14, 'DSC - Narayanganj Chasara', 'DSC', 'Narayanganj Chasara', 45.00, 4500.00, '2025-04-11 06:13:46', '2025-04-11 06:13:46'),
(15, 'DSC - Savar', 'DSC', 'Savar', 25.00, 4500.00, '2025-04-11 06:13:46', '2025-04-11 06:13:46'),
(16, 'DSC - Green Model Town-Mugdha Model Thana-Malibag', 'DSC', 'Green Model Town-Mugdha Model Thana-Malibag', 35.00, 4500.00, '2025-04-11 06:13:46', '2025-04-11 06:13:46'),
(17, 'DSC - Various', 'DSC', 'Various', 10.00, 4500.00, '2025-04-11 06:13:46', '2025-04-11 06:13:46'),
(18, 'DSC - Various', 'DSC', 'Various', 10.00, 4500.00, '2025-04-11 06:13:46', '2025-04-11 06:13:46');

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
(10, 10, 10, '11:30:00', '2025-03-23 18:22:40', '2025-03-23 18:22:40'),
(11, 11, 11, '12:00:00', '2025-03-23 18:22:40', '2025-03-23 18:22:40'),
(12, 12, 12, '12:30:00', '2025-03-23 18:22:40', '2025-03-23 18:22:40'),
(13, 13, 13, '13:00:00', '2025-03-23 18:22:40', '2025-03-23 18:22:40'),
(14, 14, 14, '13:30:00', '2025-03-23 18:22:40', '2025-03-23 18:22:40'),
(15, 15, 15, '14:00:00', '2025-03-23 18:22:40', '2025-03-23 18:22:40'),
(16, 16, 16, '14:30:00', '2025-03-23 18:22:40', '2025-03-23 18:22:40'),
(17, 17, 17, '15:00:00', '2025-03-23 18:22:40', '2025-03-23 18:22:40'),
(18, 18, 18, '15:30:00', '2025-03-23 18:22:40', '2025-03-23 18:22:40'),
(19, 1, 19, '16:00:00', '2025-03-23 18:22:40', '2025-03-23 18:22:40'),
(20, 2, 20, '16:30:00', '2025-03-23 18:22:40', '2025-03-23 18:22:40'),
(21, 3, 21, '17:00:00', '2025-03-23 18:22:40', '2025-03-23 18:22:40'),
(22, 4, 22, '17:30:00', '2025-03-23 18:22:40', '2025-03-23 18:22:40'),
(23, 5, 23, '18:00:00', '2025-03-23 18:22:40', '2025-03-23 18:22:40'),
(24, 6, 24, '18:30:00', '2025-03-23 18:22:40', '2025-03-23 18:22:40'),
(25, 7, 25, '19:00:00', '2025-03-23 18:22:40', '2025-03-23 18:22:40');

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

--
-- Dumping data for table `transport_applications`
--

INSERT INTO `transport_applications` (`id`, `student_id`, `route_id`, `application_status`, `payment_method`, `paid_amount`, `created_at`, `updated_at`) VALUES
(1, 2, 1, 'pending', 'cash', 4500.00, '2025-04-11 05:26:22', '2025-04-11 05:27:07'),
(2, 3, 2, 'pending', 'cash', 4500.00, '2025-04-11 05:26:22', '2025-04-11 05:27:16'),
(3, 4, 3, 'pending', 'cash', 4500.00, '2025-04-11 05:26:22', '2025-04-11 05:27:16'),
(4, 5, 4, 'pending', 'cash', 4500.00, '2025-04-11 05:26:22', '2025-04-11 05:27:16'),
(5, 6, 5, 'pending', 'cash', 4500.00, '2025-04-11 05:26:22', '2025-04-11 05:27:16'),
(6, 7, 6, 'pending', 'cash', 4500.00, '2025-04-11 05:26:22', '2025-04-11 05:27:16'),
(7, 8, 7, 'pending', 'cash', 4500.00, '2025-04-11 05:26:22', '2025-04-11 05:27:16'),
(8, 9, 8, 'pending', 'cash', 4500.00, '2025-04-11 05:26:22', '2025-04-11 05:27:16'),
(9, 10, 9, 'pending', 'cash', 4500.00, '2025-04-11 05:26:22', '2025-04-11 05:27:16'),
(10, 11, 1, 'pending', 'cash', 4500.00, '2025-04-11 05:26:22', '2025-04-11 05:27:16'),
(11, 12, 2, 'pending', 'cash', 4500.00, '2025-04-11 05:26:22', '2025-04-11 05:27:16'),
(12, 13, 3, 'pending', 'cash', 4500.00, '2025-04-11 05:26:22', '2025-04-11 05:27:16'),
(13, 14, 4, 'pending', 'cash', 4500.00, '2025-04-11 05:26:22', '2025-04-11 05:27:16'),
(14, 15, 5, 'pending', 'cash', 4500.00, '2025-04-11 05:26:22', '2025-04-11 05:27:16'),
(15, 16, 6, 'pending', 'cash', 4500.00, '2025-04-11 05:26:22', '2025-04-11 05:27:16'),
(16, 17, 7, 'pending', 'cash', 4500.00, '2025-04-11 05:26:22', '2025-04-11 05:27:16'),
(17, 18, 8, 'pending', 'cash', 4500.00, '2025-04-11 05:26:22', '2025-04-11 05:27:16'),
(18, 19, 9, 'pending', 'cash', 4500.00, '2025-04-11 05:26:22', '2025-04-11 05:27:16'),
(19, 20, 1, 'pending', 'cash', 4500.00, '2025-04-11 05:26:22', '2025-04-11 05:27:16'),
(20, 21, 2, 'pending', 'cash', 4500.00, '2025-04-11 05:26:22', '2025-04-11 05:27:16'),
(21, 22, 3, 'pending', 'cash', 4500.00, '2025-04-11 05:26:22', '2025-04-11 05:27:16'),
(22, 23, 4, 'pending', 'cash', 4500.00, '2025-04-11 05:26:22', '2025-04-11 05:27:16'),
(23, 24, 5, 'pending', 'cash', 4500.00, '2025-04-11 05:26:22', '2025-04-11 05:27:16'),
(24, 25, 6, 'pending', 'cash', 4500.00, '2025-04-11 05:26:22', '2025-04-11 05:27:16'),
(25, 26, 7, 'pending', 'cash', 4500.00, '2025-04-11 05:26:22', '2025-04-11 05:27:16'),
(26, 27, 8, 'pending', 'cash', 4500.00, '2025-04-11 05:26:22', '2025-04-11 05:27:16'),
(27, 28, 9, 'pending', 'cash', 4500.00, '2025-04-11 05:26:22', '2025-04-11 05:27:16'),
(28, 29, 1, 'pending', 'cash', 4500.00, '2025-04-11 05:26:22', '2025-04-11 05:27:16'),
(29, 30, 2, 'pending', 'cash', 4500.00, '2025-04-11 05:26:22', '2025-04-11 05:27:16'),
(30, 31, 3, 'pending', 'cash', 4500.00, '2025-04-11 05:26:22', '2025-04-11 05:27:16'),
(31, 32, 4, 'pending', 'cash', 4500.00, '2025-04-11 05:26:22', '2025-04-11 05:27:16'),
(32, 33, 5, 'pending', 'cash', 4500.00, '2025-04-11 05:26:22', '2025-04-11 05:27:16'),
(33, 34, 6, 'pending', 'cash', 4500.00, '2025-04-11 05:26:22', '2025-04-11 05:27:16'),
(34, 35, 7, 'pending', 'cash', 4500.00, '2025-04-11 05:26:22', '2025-04-11 05:27:16'),
(35, 36, 8, 'pending', 'cash', 4500.00, '2025-04-11 05:26:22', '2025-04-11 05:27:16'),
(36, 37, 9, 'pending', 'cash', 4500.00, '2025-04-11 05:26:22', '2025-04-11 05:27:16'),
(37, 38, 1, 'pending', 'cash', 4500.00, '2025-04-11 05:26:22', '2025-04-11 05:27:16'),
(38, 39, 2, 'pending', 'cash', 4500.00, '2025-04-11 05:26:22', '2025-04-11 05:27:16'),
(39, 40, 3, 'pending', 'cash', 4500.00, '2025-04-11 05:26:22', '2025-04-11 05:27:16'),
(40, 41, 4, 'pending', 'cash', 4500.00, '2025-04-11 05:26:22', '2025-04-11 05:27:16'),
(41, 42, 5, 'pending', 'cash', 4500.00, '2025-04-11 05:26:22', '2025-04-11 05:27:16'),
(42, 43, 6, 'pending', 'cash', 4500.00, '2025-04-11 05:26:22', '2025-04-11 05:27:16'),
(43, 44, 7, 'pending', 'cash', 4500.00, '2025-04-11 05:26:22', '2025-04-11 05:27:16'),
(44, 45, 8, 'pending', 'cash', 4500.00, '2025-04-11 05:26:22', '2025-04-11 05:27:16'),
(45, 46, 9, 'pending', 'cash', 4500.00, '2025-04-11 05:26:22', '2025-04-11 05:27:16'),
(46, 47, 1, 'pending', 'cash', 4500.00, '2025-04-11 05:26:22', '2025-04-11 05:27:16'),
(47, 48, 2, 'pending', 'cash', 4500.00, '2025-04-11 05:26:22', '2025-04-11 05:27:16'),
(48, 49, 3, 'pending', 'cash', 4500.00, '2025-04-11 05:26:22', '2025-04-11 05:27:16'),
(49, 50, 4, 'approved', 'cash', 4500.00, '2025-04-11 05:26:22', '2025-04-11 06:18:27');

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
(2, 'student', '25f9e794323b453885f5181f1b624d0b', 'student@test.com', 'student', 'approved', '2025-04-05 16:43:51', '2025-04-05 16:43:51'),
(3, 'rahman_abdul', '25f9e794323b453885f5181f1b624d0b', 'rahman.abdul@example.com', 'student', 'approved', '2025-04-11 05:32:48', '2025-04-11 07:50:42'),
(4, 'begum_fatima', '25f9e794323b453885f5181f1b624d0b', 'begum.fatima@example.com', 'student', 'approved', '2025-04-11 05:32:48', '2025-04-11 07:50:54'),
(5, 'islam_mohammad', '25f9e794323b453885f5181f1b624d0b', 'islam.mohammad@example.com', 'student', 'pending', '2025-04-11 05:32:48', '2025-04-11 07:50:54'),
(6, 'akter_nusrat', '25f9e794323b453885f5181f1b624d0b', 'akter.nusrat@example.com', 'student', 'approved', '2025-04-11 05:32:48', '2025-04-11 07:50:54'),
(7, 'hossain_kamal', '25f9e794323b453885f5181f1b624d0b', 'hossain.kamal@example.com', 'student', 'approved', '2025-04-11 05:32:48', '2025-04-11 07:50:54'),
(8, 'khatun_ayesha', '25f9e794323b453885f5181f1b624d0b', 'khatun.ayesha@example.com', 'student', 'pending', '2025-04-11 05:32:48', '2025-04-11 07:50:54'),
(9, 'ahmed_rafiq', '25f9e794323b453885f5181f1b624d0b', 'ahmed.rafiq@example.com', 'student', 'approved', '2025-04-11 05:32:48', '2025-04-11 07:50:54'),
(10, 'rahman_sadia', '25f9e794323b453885f5181f1b624d0b', 'rahman.sadia@example.com', 'student', 'approved', '2025-04-11 05:32:48', '2025-04-11 07:50:54'),
(11, 'mahmud_tanvir', '25f9e794323b453885f5181f1b624d0b', 'mahmud.tanvir@example.com', 'student', 'approved', '2025-04-11 05:32:48', '2025-04-11 07:50:54'),
(12, 'sultana_nasrin', '25f9e794323b453885f5181f1b624d0b', 'sultana.nasrin@example.com', 'student', 'pending', '2025-04-11 05:32:48', '2025-04-11 07:50:54'),
(13, 'hassan_jahid', '25f9e794323b453885f5181f1b624d0b', 'hassan.jahid@example.com', 'student', 'approved', '2025-04-11 05:32:48', '2025-04-11 07:50:54'),
(14, 'jahan_tahmina', '25f9e794323b453885f5181f1b624d0b', 'jahan.tahmina@example.com', 'student', 'approved', '2025-04-11 05:32:48', '2025-04-11 07:50:54'),
(15, 'khan_imran', '25f9e794323b453885f5181f1b624d0b', 'khan.imran@example.com', 'student', 'approved', '2025-04-11 05:32:48', '2025-04-11 07:50:54'),
(16, 'yasmin_sabina', '25f9e794323b453885f5181f1b624d0b', 'yasmin.sabina@example.com', 'student', 'approved', '2025-04-11 05:32:48', '2025-04-11 07:50:54'),
(17, 'uddin_rahim', '25f9e794323b453885f5181f1b624d0b', 'uddin.rahim@example.com', 'student', 'pending', '2025-04-11 05:32:48', '2025-04-11 07:50:54'),
(18, 'islam_maliha', '25f9e794323b453885f5181f1b624d0b', 'islam.maliha@example.com', 'student', 'approved', '2025-04-11 05:32:48', '2025-04-11 07:50:54'),
(19, 'hasan_faruk', '25f9e794323b453885f5181f1b624d0b', 'hasan.faruk@example.com', 'student', 'approved', '2025-04-11 05:32:48', '2025-04-11 07:50:54'),
(20, 'begum_roksana', '25f9e794323b453885f5181f1b624d0b', 'begum.roksana@example.com', 'student', 'approved', '2025-04-11 05:32:48', '2025-04-11 07:50:54'),
(21, 'alam_sharif', '25f9e794323b453885f5181f1b624d0b', 'alam.sharif@example.com', 'student', 'pending', '2025-04-11 05:32:48', '2025-04-11 07:50:54'),
(22, 'sultana_jasmine', '25f9e794323b453885f5181f1b624d0b', 'sultana.jasmine@example.com', 'student', 'approved', '2025-04-11 05:32:48', '2025-04-11 07:50:54'),
(23, 'ahmed_kabir', '25f9e794323b453885f5181f1b624d0b', 'ahmed.kabir@example.com', 'student', 'approved', '2025-04-11 05:32:48', '2025-04-11 07:50:54'),
(24, 'jahan_nusrat', '25f9e794323b453885f5181f1b624d0b', 'jahan.nusrat@example.com', 'student', 'approved', '2025-04-11 05:32:48', '2025-04-11 07:50:54'),
(25, 'islam_saiful', '25f9e794323b453885f5181f1b624d0b', 'islam.saiful@example.com', 'student', 'approved', '2025-04-11 05:32:48', '2025-04-11 07:50:54'),
(26, 'ahmed_tania', '25f9e794323b453885f5181f1b624d0b', 'ahmed.tania@example.com', 'student', 'pending', '2025-04-11 05:32:48', '2025-04-11 07:50:54'),
(27, 'faruk_omar', '25f9e794323b453885f5181f1b624d0b', 'faruk.omar@example.com', 'student', 'approved', '2025-04-11 05:32:48', '2025-04-11 07:50:54'),
(28, 'ali_liton', '25f9e794323b453885f5181f1b624d0b', 'ali.liton@example.com', 'student', 'approved', '2025-04-11 05:32:48', '2025-04-11 07:50:54'),
(29, 'akter_farzana', '25f9e794323b453885f5181f1b624d0b', 'akter.farzana@example.com', 'student', 'approved', '2025-04-11 05:32:48', '2025-04-11 07:50:54'),
(30, 'hossain_rubel', '25f9e794323b453885f5181f1b624d0b', 'hossain.rubel@example.com', 'student', 'pending', '2025-04-11 05:32:48', '2025-04-11 07:50:54'),
(31, 'khatun_munira', '25f9e794323b453885f5181f1b624d0b', 'khatun.munira@example.com', 'student', 'approved', '2025-04-11 05:32:48', '2025-04-11 07:50:54'),
(32, 'rahman_mojibur', '25f9e794323b453885f5181f1b624d0b', 'rahman.mojibur@example.com', 'student', 'approved', '2025-04-11 05:32:48', '2025-04-11 07:50:54'),
(33, 'mahmud_asif', '25f9e794323b453885f5181f1b624d0b', 'mahmud.asif@example.com', 'student', 'approved', '2025-04-11 05:32:48', '2025-04-11 07:50:54'),
(34, 'sultana_rabeya', '25f9e794323b453885f5181f1b624d0b', 'sultana.rabeya@example.com', 'student', 'approved', '2025-04-11 05:32:48', '2025-04-11 07:50:54'),
(35, 'miah_milon', '25f9e794323b453885f5181f1b624d0b', 'miah.milon@example.com', 'student', 'pending', '2025-04-11 05:32:48', '2025-04-11 07:50:54'),
(36, 'yesmin_nilufa', '25f9e794323b453885f5181f1b624d0b', 'yesmin.nilufa@example.com', 'student', 'approved', '2025-04-11 05:32:48', '2025-04-11 07:50:54'),
(37, 'ahmed_sohel', '25f9e794323b453885f5181f1b624d0b', 'ahmed.sohel@example.com', 'student', 'approved', '2025-04-11 05:32:48', '2025-04-11 07:50:54'),
(38, 'khan_mamun', '25f9e794323b453885f5181f1b624d0b', 'khan.mamun@example.com', 'student', 'approved', '2025-04-11 05:32:48', '2025-04-11 07:50:54'),
(39, 'akter_sharmin', '25f9e794323b453885f5181f1b624d0b', 'akter.sharmin@example.com', 'student', 'pending', '2025-04-11 05:32:48', '2025-04-11 07:50:54'),
(40, 'kalam_abul', '25f9e794323b453885f5181f1b624d0b', 'kalam.abul@example.com', 'student', 'approved', '2025-04-11 05:32:48', '2025-04-11 07:50:54'),
(41, 'begum_rumana', '25f9e794323b453885f5181f1b624d0b', 'begum.rumana@example.com', 'student', 'approved', '2025-04-11 05:32:48', '2025-04-11 07:50:54'),
(42, 'alam_jahangir', '25f9e794323b453885f5181f1b624d0b', 'alam.jahangir@example.com', 'student', 'approved', '2025-04-11 05:32:48', '2025-04-11 07:50:54'),
(43, 'hasan_mehedi', '25f9e794323b453885f5181f1b624d0b', 'hasan.mehedi@example.com', 'student', 'approved', '2025-04-11 05:32:48', '2025-04-11 07:50:54'),
(44, 'laila_runa', '25f9e794323b453885f5181f1b624d0b', 'laila.runa@example.com', 'student', 'pending', '2025-04-11 05:32:48', '2025-04-11 07:50:54'),
(45, 'chowdhury_bipul', '25f9e794323b453885f5181f1b624d0b', 'chowdhury.bipul@example.com', 'student', 'approved', '2025-04-11 05:32:48', '2025-04-11 07:50:54'),
(46, 'akter_salma', '25f9e794323b453885f5181f1b624d0b', 'akter.salma@example.com', 'student', 'approved', '2025-04-11 05:32:48', '2025-04-11 07:50:54'),
(47, 'rana_masud', '25f9e794323b453885f5181f1b624d0b', 'rana.masud@example.com', 'student', 'approved', '2025-04-11 05:32:48', '2025-04-11 07:50:54'),
(48, 'khanam_sanjida', '25f9e794323b453885f5181f1b624d0b', 'khanam.sanjida@example.com', 'student', 'pending', '2025-04-11 05:32:48', '2025-04-11 07:50:54'),
(49, 'uddin_nasir', '25f9e794323b453885f5181f1b624d0b', 'uddin.nasir@example.com', 'student', 'approved', '2025-04-11 05:32:48', '2025-04-11 07:50:54'),
(50, 'akter_mou', '25f9e794323b453885f5181f1b624d0b', 'akter.mou@example.com', 'student', 'approved', '2025-04-11 05:32:48', '2025-04-11 07:50:54');

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
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `routes`
--
ALTER TABLE `routes`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `shedule_buses`
--
ALTER TABLE `shedule_buses`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `transport_applications`
--
ALTER TABLE `transport_applications`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
