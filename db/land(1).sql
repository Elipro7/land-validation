-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 09, 2024 at 02:39 PM
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
-- Database: `land`
--

-- --------------------------------------------------------

--
-- Table structure for table `investor`
--

CREATE TABLE `investor` (
  `inves_id` bigint(20) NOT NULL,
  `inves_name` varchar(200) NOT NULL,
  `plot_no` varchar(200) NOT NULL,
  `location` varchar(200) NOT NULL,
  `inventment_type` varchar(200) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `land_issues`
--

CREATE TABLE `land_issues` (
  `land_issue_id` bigint(20) NOT NULL,
  `plot_no` varchar(200) NOT NULL,
  `reason` varchar(200) NOT NULL,
  `response` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `plots`
--

CREATE TABLE `plots` (
  `plot_id` bigint(20) NOT NULL,
  `plot_no` varchar(200) NOT NULL,
  `plot_owner` varchar(200) NOT NULL,
  `plot_location` varchar(200) NOT NULL,
  `plot_image` varchar(200) NOT NULL,
  `land_status` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `plots`
--

INSERT INTO `plots` (`plot_id`, `plot_no`, `plot_owner`, `plot_location`, `plot_image`, `land_status`) VALUES
(1, 'fdfdfdfd', 'ghghhgh', 'hghghg', 'plot1.jpg', 'Vacant'),
(2, '37606e', 'James', 'Kawanda', 'plot3.jpg', 'Rented');

-- --------------------------------------------------------

--
-- Table structure for table `reports`
--

CREATE TABLE `reports` (
  `report_id` bigint(20) NOT NULL,
  `title` varchar(200) NOT NULL,
  `file` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `sales_id` bigint(20) NOT NULL,
  `plot_no` varchar(200) NOT NULL,
  `buyer` varchar(200) NOT NULL,
  `price` varchar(200) NOT NULL,
  `amount_paid` varchar(200) NOT NULL,
  `date` varchar(200) NOT NULL DEFAULT current_timestamp(),
  `witness` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`sales_id`, `plot_no`, `buyer`, `price`, `amount_paid`, `date`, `witness`) VALUES
(1, 'ffgfg', 'fgfgf', 'fgfg', 'fgfgf', '2024-04-06', 'fgfgfg'),
(2, 'rgfgfgfg', 'fgfgf', 'fgfg', 'fgfg', '2024-03-07', 'fgfgfgfg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` bigint(20) NOT NULL,
  `sname` varchar(200) NOT NULL,
  `role` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `dept` varchar(200) NOT NULL,
  `title` varchar(200) NOT NULL,
  `date` varchar(200) NOT NULL DEFAULT current_timestamp(),
  `status` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `sname`, `role`, `email`, `password`, `dept`, `title`, `date`, `status`) VALUES
(1, 'Olowo Michael', '', 'olowo@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '', '', '2024-03-09', '1'),
(2, 'wasswa josephson', '', 'wa@gmail.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', '', '', '2024-03-09', '1'),
(3, 'danny', '', 'da@gmail.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', '', '', '2024-03-09', '1'),
(4, 'katooto', 'Engineers', 'ka@gmail.com', '1234', 'Builder', 'kuundi', '', '0'),
(7, 'ffdf', 'Admin', 'er@gmail.com', 'dfdf', 'dfdf', 'dfdf', '2024-03-28', '0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `investor`
--
ALTER TABLE `investor`
  ADD PRIMARY KEY (`inves_id`);

--
-- Indexes for table `land_issues`
--
ALTER TABLE `land_issues`
  ADD PRIMARY KEY (`land_issue_id`);

--
-- Indexes for table `plots`
--
ALTER TABLE `plots`
  ADD PRIMARY KEY (`plot_id`);

--
-- Indexes for table `reports`
--
ALTER TABLE `reports`
  ADD PRIMARY KEY (`report_id`);

--
-- Indexes for table `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`sales_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `investor`
--
ALTER TABLE `investor`
  MODIFY `inves_id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `land_issues`
--
ALTER TABLE `land_issues`
  MODIFY `land_issue_id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `plots`
--
ALTER TABLE `plots`
  MODIFY `plot_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `reports`
--
ALTER TABLE `reports`
  MODIFY `report_id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sales`
--
ALTER TABLE `sales`
  MODIFY `sales_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
