-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 09, 2024 at 02:41 PM
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
  `highest_bidder` varchar(255) NOT NULL DEFAULT 'wait for the time',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `auction_item_tbl`
--

INSERT INTO `auction_item_tbl` (`id`, `farmer_id`, `item_name`, `item_category`, `initial_amount`, `description`, `image`, `status`, `start_time`, `end_time`, `highest_bidder`, `created_at`) VALUES
(1, 1, 'Product1', 'Wheat', 23, 'THis is the Wheat', 'A_logo.PNG', 'Assigned', '2024-10-04T10:40', '2024-10-04T10:50', 'wait for the time', '2024-10-04 05:07:26');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `auction_item_tbl`
--
ALTER TABLE `auction_item_tbl`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `auction_item_tbl`
--
ALTER TABLE `auction_item_tbl`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
