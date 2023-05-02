-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 24, 2023 at 09:45 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tfm`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` text DEFAULT NULL,
  `price` int(25) DEFAULT NULL,
  `descrip` text DEFAULT NULL,
  `cond` text DEFAULT NULL,
  `seller` int(11) DEFAULT NULL,
  `photo` text DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `descrip`, `cond`, `seller`, `photo`, `user_id`) VALUES
(31, 'Bed', 4000, 'Classic Bed', 'new', 712345678, 'bed2.jpg', 5),
(37, 'SmartTV', 25000, 'Quality Tv', 'new', 787654321, 'smarttv.jpg', 6),
(38, 'Calculator', 800, 'Casio Calculator', 'Second Hand', 741201442, 'Casio_Scientific_calculator___09349.jpg', 1),
(45, 'Bed', 2800, 'Wooden Bed', 'New', 787654321, 'bed.jpg', 6),
(46, 'Laptop bad', 2500, 'Quality Laptop bag', 'New', 787654321, 'bag.jpg', 6),
(47, 'Computer', 20000, 'High Spec', 'Second Hand', 787654321, 'computer.jpg', 6),
(48, 'Headphones', 1500, 'New Quality Headphone', 'New', 741201442, 'headphones.jpg', 5),
(49, 'Jacket', 1800, 'Quality Jacket', 'New', 741201442, 'jacket.jpg', 5),
(50, 'laptop', 25000, 'High Specs ', 'Second Hand', 741201442, 'laptop1.jpg', 5),
(51, 'Laptop Bag', 3000, 'Laptop bag', 'New', 741201442, 'laptopbag.jpg', 5),
(52, 'Mangoe', 30, 'Fresh fruit', 'New', 741201442, 'Mango.jpg', 5),
(53, 'Omena', 50, 'Fresh Omena', 'New', 741201442, 'omena.jpg', 5),
(54, 'Perfume', 2500, '', '', 741201442, 'perfume.jpg', 5);

-- --------------------------------------------------------

--
-- Table structure for table `userss`
--

CREATE TABLE `userss` (
  `id` int(11) NOT NULL,
  `name` varchar(10) DEFAULT NULL,
  `email` varchar(25) DEFAULT NULL,
  `phone` int(10) DEFAULT NULL,
  `password` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `userss`
--

INSERT INTO `userss` (`id`, `name`, `email`, `phone`, `password`) VALUES
(1, 'samuel', 'nandwasn@gmail.com', 123456, '827ccb0eea8a706c4c34a16891f84e7b'),
(5, 'Nandwa', 'samdee.sn@gmail.com', 712345678, '827ccb0eea8a706c4c34a16891f84e7b'),
(6, 'Isaac', 'snandwa5@gmail.com', 787654321, '827ccb0eea8a706c4c34a16891f84e7b');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userss`
--
ALTER TABLE `userss`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `userss`
--
ALTER TABLE `userss`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
