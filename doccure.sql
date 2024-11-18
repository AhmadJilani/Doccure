-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 18, 2024 at 02:05 PM
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
  `product_id` int(11) DEFAULT NULL,
  `customer_id` int(11) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `price` int(10) NOT NULL,
  `totalAmount` int(11) NOT NULL,
  `discount` int(11) NOT NULL,
  `netAmount` int(11) NOT NULL,
  `doc` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cart_id`, `product_id`, `customer_id`, `quantity`, `price`, `totalAmount`, `discount`, `netAmount`, `doc`) VALUES
(2, 23, 8, 5, 3500, 17500, 2000, 15500, '2024-11-18 11:44:33'),
(3, 24, 7, 5, 125000, 625000, 10000, 615000, '2024-11-18 11:57:16'),
(4, 23, 5, 200, 3500, 700000, 3000, 697000, '2024-11-18 12:51:12');

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
(19, 'Electronic', '2024-11-18', 'A', '2024-11-18 05:23:58');

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
(9, 'jlaniahmad11@gmail.com', '123456', 'A', '2024-11-18 11:49:43');

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
(23, 19, 11, '2024-11-18', 'Nokia', 'Nokia 3310', 3500, '2024-11-18 06:00:05', 'A'),
(24, 19, 11, '2024-11-18', 'Samsung', 'Samsung S10', 125000, '2024-11-18 06:08:17', 'A'),
(25, 19, 11, '2024-11-18', 'Samsung', 'Samsung A32', 75000, '2024-11-18 06:25:39', 'A'),
(26, 19, 11, '2024-11-18', 'Samsung', 'Samsung A52', 110000, '2024-11-18 06:27:38', 'A'),
(27, 19, 11, '2024-11-18', 'Nokia', 'Nokia 3320', 4000, '2024-11-18 06:29:27', 'A'),
(28, 19, 11, '2024-11-18', 'Nokia', 'Nokia 3380', 5000, '2024-11-18 06:31:04', 'A');

-- --------------------------------------------------------

--
-- Table structure for table `products_ledger`
--

CREATE TABLE `products_ledger` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `invNum` varchar(100) NOT NULL,
  `product_id` int(100) NOT NULL,
  `price` int(100) NOT NULL,
  `qty` int(100) NOT NULL,
  `totalAmnt` int(100) NOT NULL,
  `doc` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
(2, 'John Doe', 'johndoe@gmail.com', '$2y$10$1bhiwtePdL3.prl1DvUVfeLvgt8ahOK9VNTZyU17l0gzW6EzIbN9e', 'A', '0416509450', '2024-11-14 05:25:59', 'patient');

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `invNum` varchar(100) NOT NULL,
  `cstId` int(100) NOT NULL,
  `details` varchar(100) NOT NULL,
  `pay_type` varchar(10) NOT NULL,
  `amnt` int(100) NOT NULL,
  `doc` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` char(1) NOT NULL DEFAULT 'A'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`id`, `date`, `invNum`, `cstId`, `details`, `pay_type`, `amnt`, `doc`, `status`) VALUES
(2, '2024-11-15', 'SUPER-7567487', 5, 'Car Headlight Bulb', 'COD', 5000, '2024-11-15 06:39:35', 'A'),
(4, '2024-11-15', 'SUPER-78659922', 5, 'Bread Toaster', 'COD', 3000, '2024-11-15 07:13:02', 'A');

-- --------------------------------------------------------

--
-- Table structure for table `sub_categories`
--

CREATE TABLE `sub_categories` (
  `id` int(10) NOT NULL,
  `catId` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `status` char(1) NOT NULL DEFAULT 'A',
  `doc` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sub_categories`
--

INSERT INTO `sub_categories` (`id`, `catId`, `name`, `date`, `status`, `doc`) VALUES
(11, 0, 'Mobile', '0000-00-00', 'A', '2024-11-18 05:35:21');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `patient_appointment`
--
ALTER TABLE `patient_appointment`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
