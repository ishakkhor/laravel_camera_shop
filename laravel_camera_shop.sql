-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 30, 2019 at 03:12 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel_camera_shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` int(10) UNSIGNED NOT NULL,
  `brand_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `brand_name`, `created_at`, `updated_at`) VALUES
(1, 'Nikon', '2019-07-28 03:44:29', '2019-07-28 03:44:29'),
(2, 'Canon', '2019-07-28 03:44:43', '2019-07-28 03:44:43'),
(3, 'SONY', '2019-07-28 03:44:57', '2019-07-28 03:44:57'),
(4, 'Fujifilm', '2019-07-28 03:45:16', '2019-07-28 03:47:16'),
(5, 'Pentax', '2019-07-28 03:46:14', '2019-07-28 03:46:14'),
(6, 'Leica', '2019-07-28 03:46:31', '2019-07-28 03:46:31'),
(7, 'Olympus', '2019-07-28 03:46:52', '2019-07-28 03:46:52'),
(8, 'Tamron', '2019-07-30 05:30:32', '2019-07-30 05:30:32'),
(9, 'Digipod', '2019-07-30 06:31:44', '2019-07-30 06:31:44'),
(10, 'Yunteng', '2019-07-30 06:34:10', '2019-07-30 06:34:10');

-- --------------------------------------------------------

--
-- Table structure for table `categorys`
--

CREATE TABLE `categorys` (
  `id` int(10) UNSIGNED NOT NULL,
  `category_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categorys`
--

INSERT INTO `categorys` (`id`, `category_name`, `created_at`, `updated_at`) VALUES
(1, 'Mirrorless Camera', '2019-07-28 03:49:26', '2019-07-28 03:49:26'),
(2, 'DSLR Camera', '2019-07-28 03:50:04', '2019-07-28 03:50:04'),
(3, 'Compact Camera', '2019-07-28 03:50:52', '2019-07-28 03:50:52'),
(4, 'Full-frame Camera', '2019-07-28 03:51:52', '2019-07-28 03:51:52'),
(5, 'Digital camera', '2019-07-28 03:52:18', '2019-07-28 03:52:18'),
(6, 'SLR Camera', '2019-07-28 03:52:39', '2019-07-28 03:52:39'),
(7, 'Webcams', '2019-07-28 03:53:00', '2019-07-28 03:53:00'),
(8, 'Point-and-shoot Camera', '2019-07-28 03:53:37', '2019-07-28 03:53:37'),
(9, 'LENS', '2019-07-30 04:53:14', '2019-07-30 04:53:14'),
(10, 'Tripod', '2019-07-30 06:31:16', '2019-07-30 06:31:16');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(4, '2014_10_12_000000_create_users_table', 1),
(5, '2014_10_12_100000_create_password_resets_table', 1),
(6, '2019_07_23_121241_create_brands_table', 1),
(7, '2019_07_25_073842_create_categorys_table', 1),
(8, '2019_07_25_103755_create_products_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `brand_id` int(11) NOT NULL,
  `product_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_short_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_long_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_price` int(11) NOT NULL,
  `product_image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_color` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `publication_status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `brand_id`, `product_name`, `product_short_description`, `product_long_description`, `product_price`, `product_image`, `product_color`, `publication_status`, `created_at`, `updated_at`) VALUES
(1, 4, 1, 'Nikon D850', 'Full frame Camera .', 'Nikon Full frame Camera D850', 251340, 'nikon-d850-hero_front.jpg', 'Black', 1, '2019-07-28 03:58:01', '2019-07-28 03:58:01'),
(2, 2, 1, 'Nikon D5600', 'Nikon D5600 DSLR Camera', 'Nikon D5600 DSLR Camera Black Color', 60000, 'Nikon_D5600.jpg', 'Black', 0, '2019-07-28 04:00:16', '2019-07-28 04:00:16'),
(3, 2, 2, 'Canon 800D', 'Canon 800D Camera', 'Canon 800D Camera Black Color', 85000, 'Canon_800D.JPG', 'Black', 1, '2019-07-28 04:02:56', '2019-07-28 04:02:56'),
(4, 2, 2, 'Canon 800D', 'Canon 800D Camera', 'Canon 800D Camera Camera', 85000, 's-l1000.jpg', 'Red', 1, '2019-07-28 04:03:54', '2019-07-29 03:53:20'),
(5, 1, 4, 'FujifilmXT3', 'Fujifilm-XT3 Mirrorless Camera', 'Fujifilm-XT3 Mirrorless Camera Gray Color', 135000, 'FujifilmXT3-1-920x613.jpg', 'Gray', 1, '2019-07-28 04:07:40', '2019-07-28 04:07:40'),
(7, 1, 3, 'SONY a7iii', 'SONY a7iii', 'SONY a7iii Mirrorless Camera', 158000, 'SONY_a7iii.jpg', 'Black', 1, '2019-07-29 06:15:06', '2019-07-29 06:15:06'),
(8, 4, 1, 'Nikon D750 DSLR Camera AF-S 24-120mm f/4G ED VR Ki', 'Nikon D750 DSLR Camera AF-S 24-120mm f/4G ED VR Ki', 'Nikon D750 DSLR Camera AF-S 24-120mm f/4G ED VR Ki', 170000, 'nikon-D750.jpg', 'Black', 1, '2019-07-29 06:31:54', '2019-07-29 06:31:54'),
(9, 3, 6, 'Leica\'s_V-Lux5', 'Leica\'s_V-Lux5', 'Leica\'s_V-Lux5', 24000, 'Leica\'s_V-Lux5.jpg', 'Black', 1, '2019-07-29 06:35:46', '2019-07-29 06:35:46'),
(10, 9, 1, 'Nikkor Afs 85mm f/1.8G', 'Nikon Afs 85mm f/1.8G', 'Nikon Afs 85mm f/1.8G', 31000, 'nikon-85mm.jpg', 'Black', 1, '2019-07-30 04:56:13', '2019-07-30 05:03:43'),
(11, 9, 1, 'Nikkor 50mm 1.8G', 'Nikkor 50mm 1.8G', 'Nikkor 50mm 1.8G', 15000, 'nikkor50mm.jpg', 'Black', 1, '2019-07-30 05:02:52', '2019-07-30 05:02:52'),
(12, 9, 1, 'Nikon 70-200 mm VR II f/2.8G', 'Nikon 70-200 mm VR II f/2.8G', 'Nikon 70-200 mm VR II f/2.8G', 151000, 'Nikon70-200mmVR-II.jpg', 'Black', 0, '2019-07-30 05:12:03', '2019-07-30 05:12:03'),
(13, 9, 1, 'Nikon 70-200 mm VR II f/2.8G White', 'Nikon 70-200 mm VR II f/2.8G', 'Nikon 70-200 mm VR II f/2.8G White', 151000, 'Nikon 70-200 -500x500.png', 'White', 1, '2019-07-30 05:13:17', '2019-07-30 06:15:38'),
(14, 9, 8, 'Tamron 18-200mm f/3.5-6.3 di ii vc lens for nikon', 'Tamron 18-200mm f/3.5-6.3 di ii vc lens for nikon', 'Tamron 18-200mm f/3.5-6.3 di ii vc lens for nikon', 17000, 'Tamron1-500x500.jpg', 'Black', 1, '2019-07-30 05:31:35', '2019-07-30 05:31:35'),
(15, 9, 2, 'Canon EF-S 55-250mm f/4-5.6 IS II Telephoto Zoom Lens', 'Canon EF-S 55-250mm f/4-5.6 IS II Telephoto Zoom Lens', 'Canon EF-S 55-250mm f/4-5.6 IS II Telephoto Zoom Lens', 11000, 'Canon EF-S 55-250mm-1-500x500.jpg', 'Black', 1, '2019-07-30 05:59:46', '2019-07-30 05:59:46'),
(16, 9, 2, 'CANON EF-S 18-55mm f/3.5-5.6 IS STM Lens', 'CANON EF-S 18-55mm f/3.5-5.6 IS STM Lens', 'CANON EF-S 18-55mm f/3.5-5.6 IS STM Lens', 6000, 'Canon-s-18-55mm-is-stm-500x500.jpg', 'Black', 1, '2019-07-30 06:00:40', '2019-07-30 06:00:40'),
(17, 9, 2, 'Canon EF 50mm f/1.8 STM Lens', 'Canon EF 50mm f/1.8 STM Lens', 'Canon EF 50mm f/1.8 STM Lens', 9500, 'Canon-50mm-500x500.jpg', 'Black', 1, '2019-07-30 06:01:38', '2019-07-30 06:01:38'),
(18, 9, 2, 'Canon EF 70-200mm f/4L USM Telephoto Zoom Lens', 'Canon EF 70-200mm f/4L USM Telephoto Zoom Lens', 'Canon EF 70-200mm f/4L USM Telephoto Zoom Lens', 49000, 'Canon ef-70-200-4-usm-d-500x500.jpg', 'White', 1, '2019-07-30 06:04:06', '2019-07-30 06:04:06'),
(19, 9, 2, 'Canon EF 16-35mm f/2.8L III USM Lens', 'Canon EF 16-35mm f/2.8L III USM Lens', 'Canon EF 16-35mm f/2.8L III USM Lens', 153000, 'Canon ef-16-35mm-01-500x500.jpg', 'Black', 1, '2019-07-30 06:05:41', '2019-07-30 06:05:41'),
(20, 9, 3, 'Sony E 35mm f/1.8 OSS Lens', 'Sony E 35mm f/1.8 OSS Lens', 'Sony E 35mm f/1.8 OSS Lens', 38000, 'Sony e-35-500x500.jpg', 'Black', 0, '2019-07-30 06:07:48', '2019-07-30 06:07:48'),
(21, 9, 3, 'Sony E 50mm f/1.8 Full Frame Lens', 'Sony E 50mm f/1.8 Full Frame Lens', 'Sony E 50mm f/1.8 Full Frame Lens', 27000, 'Sony fe-50-500x500.jpg', 'Black', 0, '2019-07-30 06:09:04', '2019-07-30 06:09:04'),
(22, 9, 3, 'Sony E 85mm f/1.8 OSS Lens', 'Sony E 85mm f/1.8 OSS Lens', 'Sony E 85mm f/1.8 OSS Lens', 57000, 'Sony fe-85-500x500.jpg', 'Black', 0, '2019-07-30 06:10:23', '2019-07-30 06:10:23'),
(23, 9, 1, 'Nikon AF-S DX NIKKOR 18-140mm f/3.5-5.6G ED VR Lens', 'Nikon AF-S DX NIKKOR 18-140mm f/3.5-5.6G ED VR Lens', 'Nikon AF-S DX NIKKOR 18-140mm f/3.5-5.6G ED VR Lens', 20000, 'Nikon dx-18-140mm-500x500.jpg', 'Black', 1, '2019-07-30 06:14:20', '2019-07-30 06:14:20'),
(24, 10, 9, 'Digipod TR-452 Tripod', 'Digipod TR-452 Tripod', 'Digipod TR-452 Tripod', 1800, 'Digipod tr-452-500x500.jpg', 'Black', 1, '2019-07-30 06:33:35', '2019-07-30 06:33:35'),
(25, 10, 10, 'Yunteng Aluminium VCT-690 Camera Tripod', 'Yunteng Aluminium VCT-690 Camera Tripod', 'Yunteng Aluminium VCT-690 Camera Tripod', 2200, 'Yunteng vct-690-01-500x500.jpg', 'Black', 0, '2019-07-30 06:35:23', '2019-07-30 06:35:23');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categorys`
--
ALTER TABLE `categorys`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `categorys`
--
ALTER TABLE `categorys`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
