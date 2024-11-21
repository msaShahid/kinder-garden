-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 21, 2024 at 02:18 PM
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
-- Database: `kinder-garden`
--

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `children`
--

CREATE TABLE `children` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `child_name` varchar(255) NOT NULL,
  `date_of_birth` date NOT NULL,
  `class` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `zip_code` varchar(255) NOT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `children`
--

INSERT INTO `children` (`id`, `child_name`, `date_of_birth`, `class`, `address`, `city`, `state`, `country`, `zip_code`, `photo`, `created_at`, `updated_at`) VALUES
(1, 'Tara Jordan', '1993-09-08', 'VIII', 'Quod et sapiente exc', 'Rerum dolore accusam', '40', '3', '28524', '1732190799.jpg', '2024-11-21 06:36:39', '2024-11-21 06:36:39'),
(2, 'Rhiannon Crawford', '2015-11-12', 'III', 'Nobis odit placeat', 'Dolorem distinctio', '42', '4', '38068', 'Rhiannon Crawford_III.jpg', '2024-11-21 06:57:34', '2024-11-21 06:57:34'),
(3, 'Mercedes Griffin', '2001-02-20', 'IX', 'Amet quisquam asper', 'A blanditiis autem i', '6', '1', '11341', 'Mercedes Griffin_IX.jpg', '2024-11-21 06:59:51', '2024-11-21 06:59:51'),
(4, 'Ima_Alford', '2008-02-26', 'IV', 'Reprehenderit velit', 'Et occaecat et irure', '32', '2', '80050', 'Ima_Alford_IV.jpg', '2024-11-21 07:04:23', '2024-11-21 07:04:23'),
(5, 'Denton Johnson', '1978-01-09', 'VIII', 'Vero repudiandae lor', 'Accusamus asperiores', '42', '4', '24298', NULL, '2024-11-21 07:05:33', '2024-11-21 07:05:33'),
(6, 'Isaiah Burch', '2011-05-03', 'V', 'Nesciunt nisi dolor', 'Ipsum laborum sed il', '40', '3', '99736', NULL, '2024-11-21 07:07:18', '2024-11-21 07:07:18'),
(7, 'Timon Mckinney', '1970-02-16', 'II', 'Consequatur id pos', 'Repudiandae laborum', '31', '1', '33006', 'Timon_Mckinney_II.jpg', '2024-11-21 07:08:40', '2024-11-21 07:08:40'),
(8, 'Felix Olsen', '2010-09-29', 'VII', 'Aliqua Est sunt qu', 'Modi sed sint ration', '46', '5', '79983', NULL, '2024-11-21 07:19:33', '2024-11-21 07:19:33'),
(9, 'Dalton Zamora', '1990-10-27', 'IX', 'Mollit ut eius sint', 'Facere sunt explica', '39', '3', '11349', 'Dalton_Zamora_IX.jpg', '2024-11-21 07:25:36', '2024-11-21 07:25:36'),
(10, 'Yael Hatfield', '2022-08-21', 'VIII', 'Ullamco cupidatat ev', 'Adipisci totam digni', '13', '1', '58597', 'Yael_Hatfield_VIII.jpg', '2024-11-21 07:31:23', '2024-11-21 07:31:23');

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `name`, `status`, `created_at`, `updated_at`) VALUES
(1, 'India', '1', NULL, NULL),
(2, 'United States', '1', NULL, NULL),
(3, 'Canada', '1', NULL, NULL),
(4, 'United Kingdom', '1', NULL, NULL),
(5, 'Australia', '1', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(22, '0001_01_01_000000_create_users_table', 1),
(23, '0001_01_01_000001_create_cache_table', 1),
(24, '0001_01_01_000002_create_jobs_table', 1),
(25, '2024_11_20_172828_create_children_table', 1),
(26, '2024_11_20_180802_create_countries_table', 1),
(27, '2024_11_20_180812_create_states_table', 1),
(28, '2024_11_21_100449_create_picked_up_persons_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `picked_up_persons`
--

CREATE TABLE `picked_up_persons` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `child_id` bigint(20) UNSIGNED NOT NULL,
  `person_name` varchar(255) NOT NULL,
  `relation` varchar(255) NOT NULL,
  `contact_no` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `picked_up_persons`
--

INSERT INTO `picked_up_persons` (`id`, `child_id`, `person_name`, `relation`, `contact_no`, `created_at`, `updated_at`) VALUES
(1, 1, 'Laurel Rivers', 'Grand mother', '1234567890', '2024-11-21 06:36:39', '2024-11-21 06:36:39'),
(2, 2, 'Sigourney Morin', 'Brother', '0987654321', '2024-11-21 06:57:34', '2024-11-21 06:57:34'),
(3, 2, 'Martina Watts', 'Brother', '0987654321', '2024-11-21 06:57:34', '2024-11-21 06:57:34'),
(4, 2, 'Amity Cantrell', 'Father', '0987654321', '2024-11-21 06:57:34', '2024-11-21 06:57:34'),
(5, 3, 'Hayes Buck', 'Brother', '1234567890', '2024-11-21 06:59:51', '2024-11-21 06:59:51'),
(6, 3, 'Ryan French', 'Grand mother', '1234567890', '2024-11-21 06:59:51', '2024-11-21 06:59:51'),
(7, 3, 'Whilemina Fuller', 'Sister', '1234567890', '2024-11-21 06:59:51', '2024-11-21 06:59:51'),
(8, 4, 'Oscar Dunlap', 'Mother', '1234567890', '2024-11-21 07:04:23', '2024-11-21 07:04:23'),
(9, 5, 'Griffith Gill', 'Mother', '0987654321', '2024-11-21 07:05:33', '2024-11-21 07:05:33'),
(10, 6, 'TaShya Jennings', 'Father', '0987654321', '2024-11-21 07:07:19', '2024-11-21 07:07:19'),
(11, 7, 'Anthony Jarvis', 'Grand mother', '0987654321', '2024-11-21 07:08:40', '2024-11-21 07:08:40'),
(12, 8, 'Justin Burnett', 'Grand father', '0987654321', '2024-11-21 07:19:33', '2024-11-21 07:19:33'),
(13, 9, 'Unity Torres', 'Sister', '0987654321', '2024-11-21 07:25:36', '2024-11-21 07:25:36'),
(14, 9, 'Drake Warren', 'Grand father', '0987654321', '2024-11-21 07:25:36', '2024-11-21 07:25:36'),
(15, 9, 'Quemby Mayo', 'Grand mother', '0987654321', '2024-11-21 07:25:36', '2024-11-21 07:25:36'),
(16, 10, 'Byron Mayo', 'Mother', '1234567890', '2024-11-21 07:31:23', '2024-11-21 07:31:23');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('44KY5vces7SYBOOz35d26XNZRqCET1fhGPtd52jh', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiWVRWS2JzOTFqOTFLZjdTcjNTYXJ6MWJzWWZrNldlVVRhRTlXY0QyYiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDU6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9yZWdpc3RyYXRpb24vMTAvc3VjY2VzcyI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1732194424);

-- --------------------------------------------------------

--
-- Table structure for table `states`
--

CREATE TABLE `states` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `country_id` bigint(20) UNSIGNED NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `states`
--

INSERT INTO `states` (`id`, `name`, `country_id`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Maharashtra', 1, '1', NULL, NULL),
(2, 'Karnataka', 1, '1', NULL, NULL),
(3, 'Tamil Nadu', 1, '1', NULL, NULL),
(4, 'Delhi', 1, '1', NULL, NULL),
(5, 'Uttar Pradesh', 1, '1', NULL, NULL),
(6, 'Gujarat', 1, '1', NULL, NULL),
(7, 'Rajasthan', 1, '1', NULL, NULL),
(8, 'West Bengal', 1, '1', NULL, NULL),
(9, 'Andhra Pradesh', 1, '1', NULL, NULL),
(10, 'Bihar', 1, '1', NULL, NULL),
(11, 'Madhya Pradesh', 1, '1', NULL, NULL),
(12, 'Odisha', 1, '1', NULL, NULL),
(13, 'Kerala', 1, '1', NULL, NULL),
(14, 'Haryana', 1, '1', NULL, NULL),
(15, 'Punjab', 1, '1', NULL, NULL),
(16, 'Chhattisgarh', 1, '1', NULL, NULL),
(17, 'Jharkhand', 1, '1', NULL, NULL),
(18, 'Uttarakhand', 1, '1', NULL, NULL),
(19, 'Himachal Pradesh', 1, '1', NULL, NULL),
(20, 'Goa', 1, '1', NULL, NULL),
(21, 'Sikkim', 1, '1', NULL, NULL),
(22, 'Arunachal Pradesh', 1, '1', NULL, NULL),
(23, 'Nagaland', 1, '1', NULL, NULL),
(24, 'Manipur', 1, '1', NULL, NULL),
(25, 'Mizoram', 1, '1', NULL, NULL),
(26, 'Tripura', 1, '1', NULL, NULL),
(27, 'Meghalaya', 1, '1', NULL, NULL),
(28, 'Assam', 1, '1', NULL, NULL),
(29, 'Nagaland', 1, '1', NULL, NULL),
(30, 'Andaman and Nicobar Islands', 1, '1', NULL, NULL),
(31, 'Lakshadweep', 1, '1', NULL, NULL),
(32, 'California', 2, '1', NULL, NULL),
(33, 'Texas', 2, '1', NULL, NULL),
(34, 'Florida', 2, '1', NULL, NULL),
(35, 'New York', 2, '1', NULL, NULL),
(36, 'Illinois', 2, '1', NULL, NULL),
(37, 'Ontario', 3, '1', NULL, NULL),
(38, 'Quebec', 3, '1', NULL, NULL),
(39, 'British Columbia', 3, '1', NULL, NULL),
(40, 'Alberta', 3, '1', NULL, NULL),
(41, 'Manitoba', 3, '1', NULL, NULL),
(42, 'England', 4, '1', NULL, NULL),
(43, 'Scotland', 4, '1', NULL, NULL),
(44, 'Wales', 4, '1', NULL, NULL),
(45, 'Northern Ireland', 4, '1', NULL, NULL),
(46, 'New South Wales', 5, '1', NULL, NULL),
(47, 'Victoria', 5, '1', NULL, NULL),
(48, 'Queensland', 5, '1', NULL, NULL),
(49, 'South Australia', 5, '1', NULL, NULL),
(50, 'Western Australia', 5, '1', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `children`
--
ALTER TABLE `children`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `picked_up_persons`
--
ALTER TABLE `picked_up_persons`
  ADD PRIMARY KEY (`id`),
  ADD KEY `picked_up_persons_child_id_foreign` (`child_id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `states`
--
ALTER TABLE `states`
  ADD PRIMARY KEY (`id`),
  ADD KEY `states_country_id_foreign` (`country_id`);

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
-- AUTO_INCREMENT for table `children`
--
ALTER TABLE `children`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `picked_up_persons`
--
ALTER TABLE `picked_up_persons`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `states`
--
ALTER TABLE `states`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `picked_up_persons`
--
ALTER TABLE `picked_up_persons`
  ADD CONSTRAINT `picked_up_persons_child_id_foreign` FOREIGN KEY (`child_id`) REFERENCES `children` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `states`
--
ALTER TABLE `states`
  ADD CONSTRAINT `states_country_id_foreign` FOREIGN KEY (`country_id`) REFERENCES `countries` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
