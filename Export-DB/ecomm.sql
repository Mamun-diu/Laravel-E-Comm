-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 07, 2021 at 03:29 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecomm`
--

-- --------------------------------------------------------

--
-- Table structure for table `ecom_cart`
--

CREATE TABLE `ecom_cart` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ecom_cart`
--

INSERT INTO `ecom_cart` (`id`, `product_id`, `user_id`, `created_at`, `updated_at`) VALUES
(5, 3, 3, '2021-01-06 19:40:08', '2021-01-06 19:40:08'),
(6, 6, 3, '2021-01-06 19:53:45', '2021-01-06 19:53:45');

-- --------------------------------------------------------

--
-- Table structure for table `ecom_migrations`
--

CREATE TABLE `ecom_migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ecom_migrations`
--

INSERT INTO `ecom_migrations` (`id`, `migration`, `batch`) VALUES
(1, '2021_01_05_080858_create_users_table', 1),
(2, '2021_01_05_124142_create_products_table', 2),
(3, '2021_01_06_125740_create_cart_table', 3),
(4, '2021_01_07_053010_create_orders_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `ecom_orders`
--

CREATE TABLE `ecom_orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_method` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ecom_orders`
--

INSERT INTO `ecom_orders` (`id`, `product_id`, `user_id`, `address`, `status`, `payment_method`, `payment_status`, `created_at`, `updated_at`) VALUES
(1, 6, 1, 'Dinajpur', 'pending', 'cash', 'pending', '2021-01-06 23:59:09', '2021-01-06 23:59:09'),
(2, 3, 1, 'Dinajpur', 'pending', 'cash', 'pending', '2021-01-06 23:59:09', '2021-01-06 23:59:09'),
(3, 5, 1, 'Dinajpur', 'pending', 'cash', 'pending', '2021-01-06 23:59:09', '2021-01-06 23:59:09'),
(4, 5, 4, 'Rangpur', 'pending', 'cash', 'pending', '2021-01-07 02:10:20', '2021-01-07 02:10:20'),
(5, 5, 5, 'sdfsdfsdf', 'pending', 'cash', 'pending', '2021-01-17 22:49:06', '2021-01-17 22:49:06'),
(6, 3, 7, 'address', 'pending', 'cash', 'pending', '2021-02-06 19:51:55', '2021-02-06 19:51:55'),
(7, 6, 7, 'address', 'pending', 'cash', 'pending', '2021-02-06 19:53:41', '2021-02-06 19:53:41');

-- --------------------------------------------------------

--
-- Table structure for table `ecom_products`
--

CREATE TABLE `ecom_products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gallery` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ecom_products`
--

INSERT INTO `ecom_products` (`id`, `name`, `price`, `category`, `gallery`, `description`, `created_at`, `updated_at`) VALUES
(1, 'LG Mobile', '10200', 'mobile', 'https://images.unsplash.com/photo-1575719362347-a70b129740e0?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80', 'a smartphone with 4gb ram and much more feature', '2021-01-05 13:08:26', NULL),
(3, 'Oppo Mobile', '15300', 'mobile', 'https://images.unsplash.com/photo-1562254492-377a3ac576f4?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80', 'a smartphone with 6gb ram and much more feature', '2021-01-05 13:30:22', NULL),
(4, 'Samsung TV', '28200', 'mobile', 'https://images.unsplash.com/photo-1579894059380-1866b68bce6b?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80', 'a smart tv with much more feature', '2021-01-05 13:30:22', NULL),
(5, 'LG TV', '15000', 'tv', 'https://images.unsplash.com/photo-1590373717962-014ba271c061?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80', 'a smart tv with much more feature', '2021-01-05 13:30:22', NULL),
(6, 'panasonic fridge', '20000', 'fridge', 'https://images.unsplash.com/photo-1588854337115-1c67d9247e4d?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80', 'a fridge with much more feature', '2021-01-05 13:30:22', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ecom_users`
--

CREATE TABLE `ecom_users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ecom_users`
--

INSERT INTO `ecom_users` (`id`, `name`, `email`, `password`, `created_at`, `updated_at`) VALUES
(5, 'Al Mamun', 'mamun511510782@gmail.com', '$2y$10$H2pyxsNUVJ61SlMA2KqxlengSmr43tI2XICM88aTM.rjRwstzRGbe', '2021-01-17 22:48:02', '2021-01-17 22:48:02'),
(7, 'Al Mamun', 'admin@gmail.com', '$2y$10$ZErv9GR.79PTbKgp1C1Bquvxid6zTZZGfP3UMRmbkIhwAWEU15/IC', '2021-02-06 05:56:18', '2021-02-06 05:56:18');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ecom_cart`
--
ALTER TABLE `ecom_cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ecom_migrations`
--
ALTER TABLE `ecom_migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ecom_orders`
--
ALTER TABLE `ecom_orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ecom_products`
--
ALTER TABLE `ecom_products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ecom_users`
--
ALTER TABLE `ecom_users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ecom_cart`
--
ALTER TABLE `ecom_cart`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `ecom_migrations`
--
ALTER TABLE `ecom_migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `ecom_orders`
--
ALTER TABLE `ecom_orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `ecom_products`
--
ALTER TABLE `ecom_products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `ecom_users`
--
ALTER TABLE `ecom_users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
