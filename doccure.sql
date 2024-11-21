-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 21, 2024 at 02:09 PM
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
(4, 'Shoes', '2024-11-21', 'A', '2024-11-21 06:45:50');

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
  `user_type` enum('vendor','customer') NOT NULL,
  `doc` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` char(1) NOT NULL DEFAULT 'A'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `name`, `cell`, `email`, `address`, `city`, `company`, `user_type`, `doc`, `status`) VALUES
(5, 'Yussra Bibi', '03227284070', 'yussraahmad11@gmail.com', 'Model Town p-6-A House-78', 'Lahore', 'Naya HP', 'customer', '2024-11-15 05:24:25', 'A'),
(7, 'Kashaf Saeed', '03214437016', 'kashafsaeed11@gmail.com', 'Rehmanpura H-334 Street-09', 'Islamabad', 'QamSolo', 'vendor', '2024-11-18 06:56:26', 'A'),
(8, 'Ahmad Jilani', '03201670443', 'jlaniahmad11@gmail.com', 'Street # 09 Khalid Abad No 2 Nighbanpura Phatak No 2 Near Jamia Masjid Mukhtar Al Noorani', 'Faisalabad', 'Noble Cospace', 'customer', '2024-11-18 06:58:23', 'A');

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
(34, 'jlaniahmad11@gmail.com', '123456', 'A', '2024-11-21 13:03:32');

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
  `amount` int(100) NOT NULL,
  `doc` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` char(1) NOT NULL DEFAULT 'A'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `catid`, `subCatId`, `date`, `name`, `details`, `amount`, `doc`, `status`) VALUES
(1, 1, 1, '2024-11-21', 'Samsung', 'Samsung S10 Lite', 125000, '2024-11-21 06:12:59', 'A'),
(2, 1, 1, '2024-11-21', 'Xioami', 'Xioami 11 lite', 45000, '2024-11-21 06:14:07', 'A'),
(3, 1, 2, '2024-11-21', 'Apple', 'Ipad pro 2', 225000, '2024-11-21 06:14:50', 'A'),
(4, 2, 3, '2024-11-21', 'Versachi', 'Versachi Bed ', 500000, '2024-11-21 06:15:27', 'A'),
(5, 3, 5, '2024-11-21', 'Polo', 'Polo Black Shirt ', 5000, '2024-11-21 06:16:49', 'A'),
(6, 3, 6, '2024-11-21', 'Zara', 'Zara White Paint', 7000, '2024-11-21 06:17:14', 'A');

-- --------------------------------------------------------

--
-- Table structure for table `products_ledger`
--

CREATE TABLE `products_ledger` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `cstId` int(10) NOT NULL,
  `invNum` varchar(100) NOT NULL,
  `product_id` int(100) NOT NULL,
  `price` int(100) NOT NULL,
  `qty` int(100) NOT NULL,
  `totalAmnt` int(100) NOT NULL,
  `discount` varchar(50) NOT NULL,
  `netAmount` varchar(50) NOT NULL,
  `doc` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products_ledger`
--

INSERT INTO `products_ledger` (`id`, `date`, `cstId`, `invNum`, `product_id`, `price`, `qty`, `totalAmnt`, `discount`, `netAmount`, `doc`) VALUES
(1, '2024-11-20', 8, 'SINV202411204515940', 26, 110000, 300, 33000000, '30000', '32970000', '2024-11-20 13:18:19'),
(2, '2024-11-20', 8, 'SINV202411204515940', 24, 125000, 10, 1250000, '5000', '1245000', '2024-11-20 13:18:19'),
(3, '2024-11-20', 8, 'SINV202411204515940', 25, 75000, 10, 750000, '5000', '745000', '2024-11-20 13:18:19'),
(4, '2024-11-20', 5, 'SINV202411202465898', 24, 125000, 10, 1250000, '0', '1250000', '2024-11-20 13:21:20');

-- --------------------------------------------------------

--
-- Table structure for table `purchases`
--

CREATE TABLE `purchases` (
  `id` int(11) NOT NULL,
  `customer_id` int(11) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `total_amount` int(11) DEFAULT NULL,
  `payment_type` enum('cash','credit','bank_transfer') DEFAULT NULL,
  `doc` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `receipts`
--

CREATE TABLE `receipts` (
  `receipt_id` int(11) NOT NULL,
  `transaction_id` int(11) DEFAULT NULL,
  `received_date` date DEFAULT NULL,
  `amount_received` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
  `doc` timestamp NOT NULL DEFAULT current_timestamp(),
  `user_type` enum('doctor','patient') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `name`, `email`, `password`, `status`, `cell`, `doc`, `user_type`) VALUES
(1, 'Ahmad Jilani', 'jlaniahmad11@gmail.com', '$2y$10$HLEOvX7HRrb77ZYlBN.ykOKXDAZxRIx701UYoeuUgtxxwpJTegMaq', 'A', '03201670443', '2024-11-13 07:44:25', 'doctor'),
(2, 'John Doe', 'johndoe@gmail.com', '$2y$10$1bhiwtePdL3.prl1DvUVfeLvgt8ahOK9VNTZyU17l0gzW6EzIbN9e', 'A', '0416509450', '2024-11-14 05:25:59', 'patient'),
(3, 'Ahmad Jilani', 'ahmad11@gmail.com', '$2y$10$ixEoemJmLqGCIgOTm6ZIv.ka.wcz82Hna3TabNsXGf9jzzszVB53q', 'A', '03201670443', '2024-11-21 08:02:37', 'doctor'),
(4, 'john', 'john11@gmail.com', '$2y$10$j05g7VuyyUL2Yosnn1AYF.sgySot7zSj/V6JNrkZLHbsurQAFDNEi', 'A', '03161670443', '2024-11-21 10:19:58', 'doctor');

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `invNum` varchar(100) NOT NULL,
  `cstId` int(100) NOT NULL,
  `cst_name` varchar(10) NOT NULL,
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
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`id`, `date`, `invNum`, `cstId`, `cst_name`, `details`, `pay_type`, `amount`, `paid`, `balance`, `ip`, `doc`, `status`) VALUES
(1, '2024-11-20', 'SINV202411204515940', 8, '', 'Test Check', 'COD', '34960000', '0', '34960000', '::1', '2024-11-20 13:18:18', 'A'),
(2, '2024-11-20', 'SINV202411202465898', 5, '', 'Test Check', 'CASH', '1250000', '1250000', '0', '::1', '2024-11-20 13:21:20', 'A');

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
(7, 4, 'Sneakers', 'A', '2024-11-21 06:46:26'),
(8, 4, 'Pumpi', 'A', '2024-11-21 06:46:51');

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `transaction_id` int(11) NOT NULL,
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
-- Indexes for table `purchases`
--
ALTER TABLE `purchases`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `receipts`
--
ALTER TABLE `receipts`
  ADD PRIMARY KEY (`receipt_id`);

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
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `invoices`
--
ALTER TABLE `invoices`
  MODIFY `invoice_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `patient_appointment`
--
ALTER TABLE `patient_appointment`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `products_ledger`
--
ALTER TABLE `products_ledger`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `purchases`
--
ALTER TABLE `purchases`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `receipts`
--
ALTER TABLE `receipts`
  MODIFY `receipt_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `sales`
--
ALTER TABLE `sales`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sub_categories`
--
ALTER TABLE `sub_categories`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `transaction_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
