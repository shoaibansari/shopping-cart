-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 26, 2018 at 02:01 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shopping_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2018_03_19_110042_create_products_table', 1),
(2, '2018_03_24_160507_create_orders_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `cart` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_path` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `title`, `image_path`, `description`, `price`, `created_at`, `updated_at`) VALUES
(1, 'Harry Potter', 'http://ecx.images-amazon.com/images/I/51ZU%2BCvkTyL.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\n	        tempor incididunt ut labore et dolore magna aliqua.', 10, '2018-03-19 08:08:38', '2018-03-19 08:08:38'),
(2, 'Harry Potter', 'http://ecx.images-amazon.com/images/I/51ZU%2BCvkTyL.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\n	        tempor incididunt ut labore et dolore magna aliqua.', 10, '2018-03-19 08:08:38', '2018-03-19 08:08:38'),
(3, 'Harry Potter', 'http://ecx.images-amazon.com/images/I/51ZU%2BCvkTyL.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\n	        tempor incididunt ut labore et dolore magna aliqua.', 10, '2018-03-19 08:08:38', '2018-03-19 08:08:38'),
(4, 'Harry Potter', 'http://ecx.images-amazon.com/images/I/51ZU%2BCvkTyL.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\n	        tempor incididunt ut labore et dolore magna aliqua.', 20, '2018-03-19 08:08:38', '2018-03-19 08:08:38'),
(5, 'Harry Potter', 'http://ecx.images-amazon.com/images/I/51ZU%2BCvkTyL.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\n	        tempor incididunt ut labore et dolore magna aliqua.', 20, '2018-03-19 08:08:39', '2018-03-19 08:08:39');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'shoaibansari824@gmail.com', '$2y$10$4Ui3zUkL0ipSCgM/V4jG5eJuqwrKPsnAdorrn2B7DV1aD78guJpDm', 'rlPPmnWR86fiO1YsgCB9yTRixkZe1OA7W3Pa3hkYszPTPnOSI7b7GGbqcWiN', '2018-03-19 12:11:17', '2018-03-19 12:11:17'),
(2, 'shoaib@gmail.com', '$2y$10$hbgB20pm1YkO3o.ai80ZcOWuScvCkAWyCXhxtYIk0xSd.PT97wVRq', 'aGZtusTRXmRUaXOqAOUMu54SsPYibWFcYxw1XouUgDgr3D4wG2jhEDBJICQP', '2018-03-20 04:18:16', '2018-03-20 04:18:16');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
