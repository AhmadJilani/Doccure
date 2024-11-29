-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 29, 2024 at 11:09 AM
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
-- Database: `doccure`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(11) NOT NULL,
  `product_id` int(100) DEFAULT NULL,
  `product_name` varchar(100) NOT NULL,
  `quantity` int(11) DEFAULT NULL,
  `price` int(10) NOT NULL,
  `totalAmount` int(11) NOT NULL,
  `discount` int(11) NOT NULL,
  `dpercent` int(11) NOT NULL,
  `netAmount` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `ip` varchar(20) NOT NULL,
  `doc` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cartpurchase`
--

CREATE TABLE `cartpurchase` (
  `cart_id` int(11) NOT NULL,
  `product_id` int(100) DEFAULT NULL,
  `product_name` varchar(100) NOT NULL,
  `customer_id` int(11) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `price` int(10) NOT NULL,
  `totalAmount` int(11) NOT NULL,
  `discount` int(11) NOT NULL,
  `netAmount` int(11) NOT NULL,
  `ip` varchar(20) NOT NULL,
  `doc` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `status` char(1) NOT NULL DEFAULT 'A',
  `doc` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `date`, `status`, `doc`) VALUES
(1, 'Electronic', '2024-11-21', 'A', '2024-11-21 06:10:59'),
(2, 'Furniture', '2024-11-21', 'A', '2024-11-21 06:11:20'),
(3, 'Garments', '2024-11-21', 'A', '2024-11-21 06:11:32'),
(5, 'Foot Wear', '2024-11-22', 'A', '2024-11-22 06:15:59');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `cell` varchar(14) NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` varchar(225) NOT NULL,
  `city` varchar(100) NOT NULL,
  `company` varchar(100) NOT NULL,
  `balance` decimal(20,4) NOT NULL,
  `user_type` enum('vendor','customer') NOT NULL,
  `userid` int(11) NOT NULL,
  `doc` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` char(1) NOT NULL DEFAULT 'A'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `name`, `cell`, `email`, `address`, `city`, `company`, `balance`, `user_type`, `userid`, `doc`, `status`) VALUES
(5, 'Yussra Bibi', '03227284070', 'yussraahmad11@gmail.com', 'Model Town p-6-A House-78', 'Lahore', 'Naya HP', 600000.0000, 'customer', 0, '2024-11-15 05:24:25', 'A'),
(7, 'Kashaf Saeed', '03214437016', 'kashafsaeed11@gmail.com', 'Rehmanpura H-334 Street-09', 'Islamabad', 'QamSolo', 600000.0000, 'vendor', 0, '2024-11-18 06:56:26', 'A'),
(9, 'Mushtaq Niazi', '03096505159', 'mushtaq@gmail.com', 'Street:  Block 4/5,KDA Scheme-7,Al-Hilal Society', 'Lahore', 'Honda Motors', 600000.0000, 'customer', 1, '2024-11-28 06:23:20', 'A'),
(10, 'Zulfiqar', '92345288839', 'zulfiqar@gmail.com', 'Karachi Centre, New Town Police Station', 'Karachi', 'ZALtECH', 0.0000, 'vendor', 1, '2024-11-28 10:08:04', 'A');

-- --------------------------------------------------------

--
-- Table structure for table `invoices`
--

CREATE TABLE `invoices` (
  `invoice_id` int(11) NOT NULL,
  `sale_id` int(11) DEFAULT NULL,
  `issue_date` date DEFAULT NULL,
  `total_amount` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `email` varchar(225) NOT NULL,
  `password` varchar(100) NOT NULL,
  `status` varchar(2) NOT NULL,
  `doc` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `email`, `password`, `status`, `doc`) VALUES
(1, 'jlaniahmad11@gmail.com', '123456', 'A', '2024-11-13 07:59:20'),
(2, 'jlaniahmad11@gmail.com', '123456', 'A', '2024-11-14 05:14:40'),
(3, 'johndoe@gmail.com', '123456', 'A', '2024-11-14 05:27:48'),
(4, 'johndoe@gmail.com', '123456', 'A', '2024-11-14 05:30:50'),
(5, 'jlaniahmad11@gmail.com', '123456', 'A', '2024-11-14 05:31:35'),
(6, 'jlaniahmad11@gmail.com', '123456', 'A', '2024-11-14 05:51:49'),
(7, 'jlaniahmad11@gmail.com', '123456', 'A', '2024-11-14 05:52:52'),
(8, 'jlaniahmad11@gmail.com', '123456', 'A', '2024-11-14 06:04:11'),
(9, 'jlaniahmad11@gmail.com', '123456', 'A', '2024-11-18 11:49:43'),
(10, 'jlaniahmad11@gmail.com', '123456', 'A', '2024-11-21 07:28:14'),
(11, 'jlaniahmad11@gmail.com', '123456', 'A', '2024-11-21 08:00:04'),
(12, 'jlaniahmad11@gmail.com', '123456', 'A', '2024-11-21 08:00:38'),
(13, 'jlaniahmad11@gmail.com', '123456', 'A', '2024-11-21 08:01:31'),
(14, 'jlaniahmad11@gmail.com', '123456', 'A', '2024-11-21 08:04:31'),
(15, 'jlaniahmad11@gmail.com', '123456', 'A', '2024-11-21 10:01:11'),
(16, 'jlaniahmad11@gmail.com', '123456', 'A', '2024-11-21 10:01:16'),
(17, 'jlaniahmad11@gmail.com', '123456', 'A', '2024-11-21 10:04:09'),
(18, 'jlaniahmad11@gmail.com', '123456', 'A', '2024-11-21 10:04:13'),
(19, 'jlaniahmad11@gmail.com', '123456', 'A', '2024-11-21 10:25:15'),
(20, 'jlaniahmad11@gmail.com', '123456', 'A', '2024-11-21 10:26:05'),
(21, 'jlaniahmad11@gmail.com', '123456', 'A', '2024-11-21 10:28:25'),
(22, 'jlaniahmad11@gmail.com', '123456', 'A', '2024-11-21 10:35:02'),
(23, 'jlaniahmad11@gmail.com', '123456', 'A', '2024-11-21 10:35:26'),
(24, 'jlaniahmad11@gmail.com', '123456', 'A', '2024-11-21 10:36:41'),
(25, 'jlaniahmad11@gmail.com', '123456', 'A', '2024-11-21 10:37:02'),
(26, 'jlaniahmad11@gmail.com', '123456', 'A', '2024-11-21 10:37:52'),
(27, 'jlaniahmad11@gmail.com', '123456', 'A', '2024-11-21 12:51:56'),
(28, 'jlaniahmad11@gmail.com', '123456', 'A', '2024-11-21 12:53:31'),
(29, 'jlaniahmad11@gmail.com', '123456', 'A', '2024-11-21 12:57:51'),
(30, 'jlaniahmad11@gmail.com', '123456', 'A', '2024-11-21 12:57:59'),
(31, 'jlaniahmad11@gmail.com', '123456', 'A', '2024-11-21 13:01:31'),
(32, 'jlaniahmad11@gmail.com', '123456', 'A', '2024-11-21 13:02:09'),
(33, 'jlaniahmad11@gmail.com', '123456', 'A', '2024-11-21 13:02:17'),
(34, 'jlaniahmad11@gmail.com', '123456', 'A', '2024-11-21 13:03:32'),
(35, 'jlaniahmad11@gmail.com', '123456', 'A', '2024-11-22 05:20:32'),
(36, 'jlaniahmad11@gmail.com', '123456', 'A', '2024-11-25 09:20:16'),
(37, 'jlaniahmad11@gmail.com', '123456', 'A', '2024-11-26 06:04:15'),
(38, 'jlaniahmad11@gmail.com', '123456', 'A', '2024-11-26 06:13:13'),
(39, 'jlaniahmad11@gmail.com', '123456', 'A', '2024-11-28 05:48:46'),
(40, 'jlaniahmad11@gmail.com', '123456', 'A', '2024-11-28 05:49:46'),
(41, 'john11@gmail.com', '123456', 'A', '2024-11-28 05:54:29'),
(42, 'ali@gmail.com', '123456', 'A', '2024-11-28 06:54:50'),
(43, 'ali@gmail.com', '123456', 'A', '2024-11-28 07:04:53'),
(44, 'ali@gmail.com', '123456', 'A', '2024-11-28 07:05:49'),
(45, 'ali@gmail.com', '123456', 'A', '2024-11-28 07:06:01'),
(46, 'ali@gmail.com', '123456', 'A', '2024-11-28 07:07:30'),
(47, 'ali@gmail.com', '123456', 'A', '2024-11-28 07:09:51'),
(48, 'ali@gmail.com', '123456', 'A', '2024-11-28 07:11:58'),
(49, 'ali@gmail.com', '123456', 'A', '2024-11-28 07:12:53'),
(50, 'ali@gmail.com', '123456', 'A', '2024-11-28 07:14:38'),
(51, 'ali@gmail.com', '123456', 'A', '2024-11-28 07:15:44'),
(52, 'ali@gmail.com', '123456', 'A', '2024-11-28 07:20:31'),
(53, 'ali@gmail.com', '123456', 'A', '2024-11-28 09:14:23'),
(54, 'ali@gmail.com', '123456', 'A', '2024-11-28 09:14:39'),
(55, 'ali@gmail.com', '123456', 'A', '2024-11-28 09:14:58');

-- --------------------------------------------------------

--
-- Table structure for table `patient_appointment`
--

CREATE TABLE `patient_appointment` (
  `id` int(10) NOT NULL,
  `patientName` varchar(100) NOT NULL,
  `apptDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `purpose` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `paidAmount` int(10) NOT NULL,
  `doc` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `patient_appointment`
--

INSERT INTO `patient_appointment` (`id`, `patientName`, `apptDate`, `purpose`, `type`, `paidAmount`, `doc`) VALUES
(1, 'Ahmad Jilani', '2024-11-12 05:37:29', 'General', 'New Patient	', 150, '2024-11-12 05:38:58'),
(3, 'Elsie Gilley', '2023-11-14 13:00:00', 'Fever', 'Old Patient', 300, '2024-11-12 06:52:42'),
(4, 'Joan Gardner', '2023-11-14 12:00:00', 'General', 'Old Patient', 100, '2024-11-12 06:52:42'),
(5, 'Daniel Griffing', '2023-11-14 10:00:00', 'General', 'New Patient', 75, '2024-11-12 06:52:42'),
(6, 'Walter Roberson', '2023-11-15 05:00:00', 'General', 'Old Patient', 350, '2024-11-12 06:52:56'),
(7, 'Robert Rhodes', '2023-11-16 09:00:00', 'General', 'New Patient', 175, '2024-11-12 06:52:56'),
(8, 'Harry Williams', '2023-11-16 06:00:00', 'General', 'New Patient', 450, '2024-11-12 06:52:56'),
(9, 'Ahmad Jilani', '2024-11-12 12:00:00', 'General', 'Old Patient', 350, '2024-11-12 06:55:41'),
(10, 'Kabeer Shahzad', '2024-11-12 09:00:00', 'General', 'New Patient', 175, '2024-11-12 06:55:41'),
(11, 'Mani', '2024-11-12 06:00:00', 'General', 'New Patient', 450, '2024-11-12 06:55:41');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) NOT NULL,
  `catid` int(100) NOT NULL,
  `subCatId` int(10) NOT NULL,
  `date` date NOT NULL,
  `name` varchar(100) NOT NULL,
  `details` varchar(100) NOT NULL,
  `stock` int(100) NOT NULL,
  `amount` int(100) NOT NULL,
  `doc` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` char(1) NOT NULL DEFAULT 'A'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `catid`, `subCatId`, `date`, `name`, `details`, `stock`, `amount`, `doc`, `status`) VALUES
(1, 1, 1, '2024-11-21', 'Samsung', 'Samsung S10 Lite', 0, 125000, '2024-11-21 06:12:59', 'A'),
(2, 1, 1, '2024-11-21', 'Xioami', 'Xioami 11 lite', 70, 45000, '2024-11-21 06:14:07', 'A'),
(3, 1, 2, '2024-11-21', 'Apple', 'Ipad pro 2', 100, 225000, '2024-11-21 06:14:50', 'A'),
(4, 2, 3, '2024-11-21', 'Versachi', 'Versachi Bed ', 90, 500000, '2024-11-21 06:15:27', 'A'),
(5, 3, 5, '2024-11-21', 'Polo', 'Polo Black Shirt ', 90, 5000, '2024-11-21 06:16:49', 'A'),
(6, 3, 6, '2024-11-21', 'Zara', 'Zara White Paint', 100, 7000, '2024-11-21 06:17:14', 'A'),
(7, 1, 1, '2024-11-22', 'Iphone', 'Iphone 16 pro Max', 100, 650000, '2024-11-22 05:23:05', 'A'),
(8, 5, 9, '2024-11-22', 'Sneaker', 'Air Jordan Sneakrs', 100, 50000, '2024-11-22 06:17:19', 'A'),
(9, 5, 9, '2024-11-22', 'Nike', 'Nike Classic', 100, 20000, '2024-11-22 06:17:44', 'A'),
(10, 5, 10, '2024-11-22', 'Colapuri', 'Colapuri Peshawri Chapal', 100, 3500, '2024-11-22 06:18:43', 'A'),
(11, 5, 11, '2024-11-22', 'Ndure', 'Ndure Mountain Sendals', 100, 8000, '2024-11-22 06:19:10', 'A');

-- --------------------------------------------------------

--
-- Table structure for table `products_ledger`
--

CREATE TABLE `products_ledger` (
  `id` int(11) NOT NULL,
  `type` varchar(2) NOT NULL,
  `date` date NOT NULL,
  `cstId` int(10) NOT NULL,
  `cst_name` varchar(100) NOT NULL,
  `invNum` varchar(100) NOT NULL,
  `product_id` int(100) NOT NULL,
  `price` int(100) NOT NULL,
  `qty` int(100) NOT NULL,
  `qIn` int(10) NOT NULL,
  `qOut` int(10) NOT NULL,
  `totalAmnt` int(100) NOT NULL,
  `discount` varchar(50) NOT NULL,
  `netAmount` varchar(50) NOT NULL,
  `doc` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products_ledger`
--

INSERT INTO `products_ledger` (`id`, `type`, `date`, `cstId`, `cst_name`, `invNum`, `product_id`, `price`, `qty`, `qIn`, `qOut`, `totalAmnt`, `discount`, `netAmount`, `doc`) VALUES
(1, 'SI', '2024-11-26', 7, 'Kashaf Saeed', 'SINV202411268984654', 2, 45000, 5, 0, 5, 225000, '0', '225000', '2024-11-26 07:19:47'),
(2, 'SI', '2024-11-26', 8, 'Ahmad Jilani', 'SINV202411263226108', 1, 125000, 2, 0, 2, 250000, '0', '250000', '2024-11-26 09:38:24'),
(3, 'SI', '2024-11-26', 8, 'Ahmad Jilani', 'SINV202411263226108', 7, 650000, 5, 0, 5, 3250000, '0', '3250000', '2024-11-26 09:38:24'),
(4, 'PI', '2024-11-26', 8, '', 'PINV202411264034396', 1, 125000, 5, 5, 0, 625000, '0', '625000', '2024-11-26 10:21:09'),
(5, 'PI', '2024-11-26', 8, '', 'PINV202411267382315', 1, 125000, 5, 5, 0, 625000, '0', '625000', '2024-11-26 10:22:44'),
(6, 'PI', '2024-11-26', 8, '', 'PINV202411267382315', 7, 650000, 5, 5, 0, 3250000, '0', '3250000', '2024-11-26 10:22:44'),
(7, 'SI', '2024-11-27', 8, 'Ahmad Jilani', 'SINV202411273711328', 2, 45000, 2, 0, 2, 90000, '89999', '1', '2024-11-27 11:31:54'),
(8, 'SI', '2024-11-27', 8, 'Ahmad Jilani', 'SINV202411273711328', 2, 45000, 2, 0, 2, 90000, '89999', '1', '2024-11-27 11:31:54'),
(9, 'SI', '2024-11-27', 8, 'Ahmad Jilani', 'SINV202411273711328', 2, 45000, 2, 0, 2, 90000, '80000', '10000', '2024-11-27 11:31:54'),
(10, 'SI', '2024-11-27', 8, 'Ahmad Jilani', 'SINV202411273711328', 2, 45000, 2, 0, 2, 90000, '8000', '82000', '2024-11-27 11:31:54'),
(11, 'SI', '2024-11-27', 7, 'Kashaf Saeed', 'SINV202411275567244', 2, 45000, 82, 0, 82, 3690000, '0', '3690000', '2024-11-27 12:25:33'),
(12, 'SI', '2024-11-27', 7, 'Kashaf Saeed', 'SINV202411275567244', 2, 45000, 82, 0, 82, 3690000, '0', '3690000', '2024-11-27 12:25:33'),
(13, 'SI', '2024-11-28', 7, 'Kashaf Saeed', 'SINV202411288559702', 4, 500000, 1, 0, 1, 500000, '0', '500000', '2024-11-28 06:56:20'),
(14, 'SI', '2024-11-28', 7, 'Kashaf Saeed', 'SINV202411283005722', 2, 45000, 5, 0, 5, 225000, '0', '225000', '2024-11-28 06:57:53'),
(15, 'SI', '2024-11-28', 8, 'Ahmad Jilani', 'SINV202411285790442', 5, 5000, 10, 0, 10, 50000, '0', '50000', '2024-11-28 06:58:24'),
(16, 'SI', '2024-11-28', 7, 'Kashaf Saeed', 'SINV202411285530138', 2, 45000, 10, 0, 10, 450000, '0', '450000', '2024-11-28 09:41:38'),
(17, 'SI', '2024-11-28', 9, 'Mushtaq Niazi', 'SINV202411284351461', 2, 45000, 10, 0, 10, 450000, '0', '450000', '2024-11-28 11:38:52');

-- --------------------------------------------------------

--
-- Table structure for table `purchase`
--

CREATE TABLE `purchase` (
  `id` int(11) NOT NULL,
  `type` varchar(2) NOT NULL,
  `date` date NOT NULL,
  `invNum` varchar(100) NOT NULL,
  `cstId` int(100) NOT NULL,
  `cst_name` varchar(100) NOT NULL,
  `details` varchar(100) NOT NULL,
  `pay_type` varchar(10) NOT NULL,
  `amount` varchar(100) NOT NULL,
  `paid` varchar(50) NOT NULL,
  `balance` varchar(50) NOT NULL,
  `ip` varchar(100) NOT NULL,
  `doc` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` char(1) NOT NULL DEFAULT 'A'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `purchase`
--

INSERT INTO `purchase` (`id`, `type`, `date`, `invNum`, `cstId`, `cst_name`, `details`, `pay_type`, `amount`, `paid`, `balance`, `ip`, `doc`, `status`) VALUES
(1, 'PI', '2024-11-26', 'PINV202411267382315', 8, 'Ahmad Jilani', 'Hangee', 'CASH', '3875000', '3875000', '0', '::1', '2024-11-26 10:22:44', 'A');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `status` char(1) NOT NULL DEFAULT 'A',
  `cell` varchar(14) NOT NULL,
  `balance` decimal(20,4) NOT NULL,
  `BCODE` varchar(11) NOT NULL,
  `doc` timestamp NOT NULL DEFAULT current_timestamp(),
  `user_type` enum('doctor','patient') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `name`, `email`, `password`, `status`, `cell`, `balance`, `BCODE`, `doc`, `user_type`) VALUES
(1, 'Ali', 'ali@gmail.com', '$2y$10$HLEOvX7HRrb77ZYlBN.ykOKXDAZxRIx701UYoeuUgtxxwpJTegMaq', 'A', '03201670443', 600000.0000, 'FSD001', '2024-11-13 07:44:25', 'doctor'),
(2, 'John Doe', 'johndoe@gmail.com', '$2y$10$1bhiwtePdL3.prl1DvUVfeLvgt8ahOK9VNTZyU17l0gzW6EzIbN9e', 'A', '0416509450', 600000.0000, 'ISD001', '2024-11-14 05:25:59', 'patient'),
(3, 'Ahmad Jilani', 'ahmad11@gmail.com', '$2y$10$ixEoemJmLqGCIgOTm6ZIv.ka.wcz82Hna3TabNsXGf9jzzszVB53q', 'A', '03201670443', 600000.0000, 'KHI001', '2024-11-21 08:02:37', 'doctor'),
(4, 'john', 'john11@gmail.com', '$2y$10$j05g7VuyyUL2Yosnn1AYF.sgySot7zSj/V6JNrkZLHbsurQAFDNEi', 'A', '03161670443', 600000.0000, 'LHR001', '2024-11-21 10:19:58', 'doctor');

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `id` int(11) NOT NULL,
  `type` varchar(2) NOT NULL,
  `date` date NOT NULL,
  `invNum` varchar(100) NOT NULL,
  `cstId` int(100) NOT NULL,
  `cst_name` varchar(100) NOT NULL,
  `details` varchar(100) NOT NULL,
  `pay_type` varchar(10) NOT NULL,
  `amount` varchar(100) NOT NULL,
  `paid` varchar(50) NOT NULL,
  `balance` varchar(50) NOT NULL,
  `userid` int(11) NOT NULL,
  `ip` varchar(100) NOT NULL,
  `doc` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` char(1) NOT NULL DEFAULT 'A'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`id`, `type`, `date`, `invNum`, `cstId`, `cst_name`, `details`, `pay_type`, `amount`, `paid`, `balance`, `userid`, `ip`, `doc`, `status`) VALUES
(1, 'SI', '2024-11-28', 'SINV202411283005722', 7, 'Kashaf Saeed', 'Test Check', 'COD', '225000', '0', '225000', 1, '::1', '2024-11-28 06:57:53', 'A'),
(2, 'SI', '2024-11-28', 'SINV202411285790442', 8, 'Ahmad Jilani', 'Test', 'CASH', '50000', '50000', '0', 4, '127.0.0.1', '2024-11-28 06:58:24', 'A'),
(3, 'SI', '2024-11-28', 'SINV202411285530138', 7, 'Kashaf Saeed', 'Test Check', 'CASH', '450000', '450000', '0', 1, '::1', '2024-11-28 09:41:38', 'A'),
(4, 'SI', '2024-11-28', 'SINV202411284351461', 9, 'Mushtaq Niazi', 'Test Check', 'COD', '450000', '0', '450000', 1, '::1', '2024-11-28 11:38:52', 'A');

-- --------------------------------------------------------

--
-- Table structure for table `sub_categories`
--

CREATE TABLE `sub_categories` (
  `id` int(10) NOT NULL,
  `catId` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `status` char(1) NOT NULL DEFAULT 'A',
  `doc` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sub_categories`
--

INSERT INTO `sub_categories` (`id`, `catId`, `name`, `status`, `doc`) VALUES
(1, 1, 'Mobile', 'A', '2024-11-21 06:11:10'),
(2, 1, 'Tablet', 'A', '2024-11-21 06:11:51'),
(3, 2, 'Bed', 'A', '2024-11-21 06:12:05'),
(4, 2, 'Table', 'A', '2024-11-21 06:12:15'),
(5, 3, 'Shirt', 'A', '2024-11-21 06:12:27'),
(6, 3, 'Paints', 'A', '2024-11-21 06:12:33'),
(9, 5, 'Shoes', 'A', '2024-11-22 06:16:11'),
(10, 5, 'Chapal', 'A', '2024-11-22 06:16:22'),
(11, 5, 'Sendal', 'A', '2024-11-22 06:16:36');

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `transaction_id` int(11) NOT NULL,
  `cstId` int(11) NOT NULL,
  `productId` int(11) NOT NULL,
  `purchaseId` int(11) DEFAULT NULL,
  `sale_id` int(11) DEFAULT NULL,
  `amount` int(11) DEFAULT NULL,
  `transaction_date` date DEFAULT NULL,
  `payment_type` enum('Cash','Credit Card','Bank Transfer') DEFAULT NULL,
  `details` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `cartpurchase`
--
ALTER TABLE `cartpurchase`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `invoices`
--
ALTER TABLE `invoices`
  ADD PRIMARY KEY (`invoice_id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patient_appointment`
--
ALTER TABLE `patient_appointment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products_ledger`
--
ALTER TABLE `products_ledger`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `purchase`
--
ALTER TABLE `purchase`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_categories`
--
ALTER TABLE `sub_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`transaction_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `cartpurchase`
--
ALTER TABLE `cartpurchase`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `invoices`
--
ALTER TABLE `invoices`
  MODIFY `invoice_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `patient_appointment`
--
ALTER TABLE `patient_appointment`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `products_ledger`
--
ALTER TABLE `products_ledger`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `purchase`
--
ALTER TABLE `purchase`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `sales`
--
ALTER TABLE `sales`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `sub_categories`
--
ALTER TABLE `sub_categories`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `transaction_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
