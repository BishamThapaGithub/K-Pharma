-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 17, 2023 at 01:32 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kpharma`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `product_name` varchar(225) DEFAULT NULL,
  `product_price` varchar(225) DEFAULT NULL,
  `product_img` varchar(225) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_name`, `product_price`, `product_img`) VALUES
(2, 'aa', '1200', 'headphone1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `ID` int(11) NOT NULL,
  `Username` varchar(100) DEFAULT NULL,
  `Email` varchar(100) DEFAULT NULL,
  `Password` varchar(100) DEFAULT NULL,
  `Age` int(11) DEFAULT NULL,
  `UserRole` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `Username`, `Email`, `Password`, `Age`, `UserRole`) VALUES
(3, 'Bisham Thapa', 'bishamthapa@gmail.com', 'bisham12', 20, 'Admin'),
(4, 'Anish Gurung', 'Anishgurung@gmail.com', 'anish12', 20, 'Admin'),
(5, 'naresh khatri', 'naresh@gmail.com', 'naresh12', 20, 'user'),
(10, 'Ansih', '', 'ansihgurung', 0, 'user'),
(20, 'naresh khatri', 'naresh@gmail.com', 'naresh@123', 20, 'user'),
(22, 'hari thapa', 'harithapa@gmail.com', 'hari@1234', 21, 'user'),
(24, 'ramm thapa', 'ramthapa@gmail.com', 'ram@12345', 21, 'user'),
(25, 'thapa thapa', 'thapa@gmail.com', 'thapa@12345', 21, 'user'),
(26, 'naresh naresh', 'nareshhh@gmail.com', 'naresh@1234', 21, 'user'),
(27, 'abcd kc', 'abcde@gmail.com', 'abcd@1234', 21, 'user'),
(28, 'hdksfjakh ', 'nareshhh@gmail.com', 'bisham@1234', 21, 'user'),
(29, 'bikram thapa', 'bikram@gmail.com', 'bikram1234', 45, 'user'),
(30, 'dq212', 'bishamthapa@gmail.com', 'harithapa', 22, 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
