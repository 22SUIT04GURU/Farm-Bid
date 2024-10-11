-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 11, 2024 at 08:26 AM
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
-- Database: `farm_bid_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `auction_item_tbl`
--

CREATE TABLE `auction_item_tbl` (
  `id` int(255) NOT NULL,
  `farmer_id` int(255) NOT NULL,
  `item_name` varchar(255) NOT NULL,
  `item_category` varchar(255) NOT NULL,
  `initial_amount` int(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` varchar(25) NOT NULL DEFAULT 'pending',
  `start_time` varchar(255) NOT NULL DEFAULT 'requested...',
  `end_time` varchar(255) NOT NULL DEFAULT 'requested...',
  `highest_bidder` varchar(255) NOT NULL DEFAULT 'waiting for the time',
  `highest_bidder_amount` bigint(20) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `auction_item_tbl`
--

INSERT INTO `auction_item_tbl` (`id`, `farmer_id`, `item_name`, `item_category`, `initial_amount`, `description`, `image`, `status`, `start_time`, `end_time`, `highest_bidder`, `highest_bidder_amount`, `created_at`) VALUES
(1, 1, 'Product 1', 'Rice ', 1500, 'This is the RIce that having the 3ky', 'dark-night-mountains-minimalist-4k-o4-1910x1075.jpg', 'On_Going', '2024-10-11T11:45', '2024-10-11T12:00', '4', 7500, '2024-10-11 06:18:51'),
(2, 2, 'Product 2', 'Rice ', 2500, 'This is the Rice PRoduct having 34kg green rice', 'dark-night-mountains-minimalist-4k-o4-1910x1075.jpg', 'On_Going', '2024-10-11T11:49', '2024-10-11T11:58', 'waiting for the time', 2500, '2024-10-11 06:19:53');

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
(1, 3, 'Dealer A', 'Madurai', 'Paddy'),
(2, 4, 'Dealer B', 'Madurai', 'Millets');

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
(1, 1, '34, MLM Colony, madurai', 'Madurai', '625011', 'White Farms', 'Madurai', 13, 'Wheat', 'State Bank of India', 'SBIN0001234', 123456789),
(2, 2, '34, MLM Colony, madurai', 'Madurai', '625011', 'White Farms', 'Madurai', 13, 'Paddy', 'State Bank of India', 'SBIN0001234', 1234567889);

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
(1, 'PersonA', '2024-10-02', 'persona@gmail.com', 9842240830, 'male', 'farmer', 'persona', 'guru@123', '2024-10-09 13:25:27'),
(2, 'PersonB', '1212-12-12', 'gurubairavar005@gmail.com', 9842240830, 'male', 'farmer', 'personb', 'guru@123', '2024-10-09 13:27:13'),
(3, 'dealera', '1212-12-12', 'gurubairavar005@gmail.com', 9842240830, 'male', 'dealer', 'dealera', 'guru@123', '2024-10-09 13:28:01'),
(4, 'dealerb', '1212-03-31', 'gurubairavar005@gmail.com', 9842240830, 'male', 'dealer', 'dealerb', 'guru@123', '2024-10-09 13:28:52');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `auction_item_tbl`
--
ALTER TABLE `auction_item_tbl`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `auction_item_tbl`
--
ALTER TABLE `auction_item_tbl`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `dealers_tbl`
--
ALTER TABLE `dealers_tbl`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `farmers_tbl`
--
ALTER TABLE `farmers_tbl`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_tbl`
--
ALTER TABLE `user_tbl`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

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
