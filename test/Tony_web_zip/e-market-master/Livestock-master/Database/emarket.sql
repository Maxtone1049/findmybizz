-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 10, 2021 at 08:10 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `emarket`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE `tbl_category` (
  `id` int(11) NOT NULL,
  `category` varchar(100) DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`id`, `category`, `created_at`) VALUES
(2, 'Breeds', '2021-02-07 14:13:45'),
(3, 'Cattle', '2021-02-07 14:13:53'),
(4, 'Sea Shells', '2021-02-07 16:36:06');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_products`
--

CREATE TABLE `tbl_products` (
  `id` int(11) NOT NULL,
  `product` varchar(50) DEFAULT NULL,
  `category_id` int(11) NOT NULL,
  `price` float(10,2) DEFAULT NULL,
  `image` varchar(50) DEFAULT NULL,
  `description` varchar(500) DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `total` int(40) NOT NULL,
  `grand_total` int(40) NOT NULL,
  `quantity` int(40) NOT NULL,
  `tax` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_products`
--

INSERT INTO `tbl_products` (`id`, `product`, `category_id`, `price`, `image`, `description`, `created_at`, `total`, `grand_total`, `quantity`, `tax`) VALUES
(1, 'Eggs', 2, 49.00, '15842512982791612737795.jpg', 'Eggs', '2021-02-07 14:14:46', 196, 98, 4, 2),
(2, 'Fish', 4, 300.00, '91612744770.jpg', 'Fine Sea free Fish', '2021-02-07 16:38:59', 0, 0, 0, 0),
(3, 'Broilers', 2, 5000.00, '601612771520.jpg', 'Newly reared broilers of 4 months', '2021-02-08 00:05:20', 0, 0, 0, 0),
(4, 'Stock Fish', 4, 300.00, 'capture1612874026.png', 'Smocked fish ready for human consumption', '2021-02-09 04:33:46', 0, 0, 0, 0),
(5, 'Tigernut', 4, 3000.00, 'capture1612890306.png', 'Used for fine Cooking', '2021-02-09 09:05:06', 0, 0, 0, 0),
(11, 'Vinegar', 3, 150.00, 'gjc_logo1612890778.png', 'used for Vegetation', '2021-02-09 09:12:58', 0, 0, 50, 2),
(12, 'Jerry curl', 3, 3000.00, '11612891678.jpg', 'Very lite', '2021-02-09 09:27:58', 0, 0, 50, 2),
(15, 'Folic', 3, 6523.00, '31612893423.jpg', 'Text in here', '2021-02-09 09:57:03', 195690, 97845, 30, 2),
(16, 'Eggs (Broilers Kind)', 2, 45.00, '361612893863.jpg', 'New Orders', '2021-02-09 10:04:23', 1350, 675, 30, 2);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `id` int(11) NOT NULL,
  `firstname` varchar(50) DEFAULT NULL,
  `lastname` varchar(50) DEFAULT NULL,
  `phone` varchar(30) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`id`, `firstname`, `lastname`, `phone`, `email`, `dob`, `password`, `created_at`) VALUES
(4, 'Admin', NULL, '+2349057731513', 'adminfarms@gmail.com', NULL, '21232f297a57a5a743894a0e4a801fc3', '2021-02-08 00:01:06');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `category` (`category`);

--
-- Indexes for table `tbl_products`
--
ALTER TABLE `tbl_products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `phone` (`phone`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `password` (`password`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_products`
--
ALTER TABLE `tbl_products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
