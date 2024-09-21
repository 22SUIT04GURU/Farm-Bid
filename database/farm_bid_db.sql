-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 21, 2024 at 04:20 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `farm_bid_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `dealers_tbl`
--

CREATE TABLE `dealers_tbl` (
  `id` int(255) NOT NULL,
  `user_id` int(255) NOT NULL,
  `shop_name` varchar(255) NOT NULL,
  `shop_location` varchar(255) NOT NULL,
  `type_of_crop_prefer_to_buy` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `dealers_tbl`
--

INSERT INTO `dealers_tbl` (`id`, `user_id`, `shop_name`, `shop_location`, `type_of_crop_prefer_to_buy`) VALUES
(1, 4, 'Davind Foundations', 'Madurai', 'Wheat'),
(3, 7, 'Davind Foundations', 'Madurai', 'Millets'),
(4, 8, 'Guru SHop', 'Madurai', 'Chiru dhaniyam');

-- --------------------------------------------------------

--
-- Table structure for table `farmers_tbl`
--

CREATE TABLE `farmers_tbl` (
  `id` int(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  `address` varchar(255) NOT NULL,
  `district` varchar(255) NOT NULL,
  `pincode` varchar(10) NOT NULL,
  `farm_name` varchar(255) NOT NULL,
  `farm_location` varchar(255) NOT NULL,
  `farm_size` decimal(65,0) NOT NULL,
  `type_of_crop` varchar(100) NOT NULL,
  `bank_name` varchar(100) NOT NULL,
  `ifsc_code` varchar(15) NOT NULL,
  `account_number` bigint(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `farmers_tbl`
--

INSERT INTO `farmers_tbl` (`id`, `user_id`, `address`, `district`, `pincode`, `farm_name`, `farm_location`, `farm_size`, `type_of_crop`, `bank_name`, `ifsc_code`, `account_number`) VALUES
(1, 6, '34, Sidhi Vinayagar street', 'Namakkal', '123456', 'My Farm', 'Madurai', '12', 'Wheat', 'State Bank of India', 'SBIN0001234', 12345678);

-- --------------------------------------------------------

--
-- Table structure for table `user_tbl`
--

CREATE TABLE `user_tbl` (
  `id` int(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `date_of_birth` date NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` bigint(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `registered_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_tbl`
--

INSERT INTO `user_tbl` (`id`, `first_name`, `date_of_birth`, `email`, `phone`, `gender`, `role`, `username`, `password`, `registered_date`) VALUES
(4, 'John David', '2024-09-01', 'Charan@gmail.com', 9842240830, 'male', 'dealer', 'Guru', 'guru@123', '2024-09-21 09:00:35'),
(6, 'Gnana Guru', '2024-09-01', '22suit04@gmail.com', 9842240830, 'male', 'farmer', 'Guru-bairavar', 'guru@123', '2024-09-21 09:06:28'),
(7, 'Ajay', '2024-08-30', 'jeyantah@gmail.com', 9842240830, 'male', 'dealer', 'Guru-bairavar-g', 'guru@123', '2024-09-21 09:08:51'),
(8, 'Charan', '2024-09-01', 'Guru@gmail.com', 1234567678, 'male', 'dealer', 'GuruM', 'guru@123', '2024-09-21 10:06:20');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dealers_tbl`
--
ALTER TABLE `dealers_tbl`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_dealers_tbl` (`user_id`);

--
-- Indexes for table `farmers_tbl`
--
ALTER TABLE `farmers_tbl`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_farmers_tbl` (`user_id`);

--
-- Indexes for table `user_tbl`
--
ALTER TABLE `user_tbl`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dealers_tbl`
--
ALTER TABLE `dealers_tbl`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `farmers_tbl`
--
ALTER TABLE `farmers_tbl`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user_tbl`
--
ALTER TABLE `user_tbl`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `dealers_tbl`
--
ALTER TABLE `dealers_tbl`
  ADD CONSTRAINT `FK_dealers_tbl` FOREIGN KEY (`user_id`) REFERENCES `user_tbl` (`id`);

--
-- Constraints for table `farmers_tbl`
--
ALTER TABLE `farmers_tbl`
  ADD CONSTRAINT `FK_farmers_tbl` FOREIGN KEY (`user_id`) REFERENCES `user_tbl` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
