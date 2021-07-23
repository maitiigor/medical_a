-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 23, 2021 at 04:45 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `medical_record_app`
--

-- --------------------------------------------------------

--
-- Table structure for table `chats`
--

CREATE TABLE `chats` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `patience_id` bigint(20) UNSIGNED NOT NULL,
  `health_worker_id` bigint(20) UNSIGNED NOT NULL,
  `message` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `chats`
--

INSERT INTO `chats` (`id`, `patience_id`, `health_worker_id`, `message`, `created_at`, `updated_at`) VALUES
(1, 6, 1, 'hi doc', '2021-07-22 21:15:24', '2021-07-22 21:15:24'),
(2, 6, 1, 'hi doc', '2021-07-22 21:15:32', '2021-07-22 21:15:32'),
(3, 6, 1, 'hi', '2021-07-22 21:15:48', '2021-07-22 21:15:48'),
(4, 6, 1, 'hi', '2021-07-22 21:20:40', '2021-07-22 21:20:40'),
(5, 6, 1, 'kkk', '2021-07-22 21:52:12', '2021-07-22 21:52:12'),
(6, 6, 4, 'kkk', '2021-07-22 21:57:27', '2021-07-22 21:57:27'),
(7, 6, 1, 'kkk', '2021-07-22 21:58:31', '2021-07-22 21:58:31'),
(8, 6, 1, 'kkk', '2021-07-22 21:59:06', '2021-07-22 21:59:06'),
(9, 6, 1, 'kkk', '2021-07-22 22:00:19', '2021-07-22 22:00:19');

-- --------------------------------------------------------

--
-- Table structure for table `cruds`
--

CREATE TABLE `cruds` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `route` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 1,
  `built` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `health_workers`
--

CREATE TABLE `health_workers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `surname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `age` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cadre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `department` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `health_workers`
--

INSERT INTO `health_workers` (`id`, `email`, `name`, `surname`, `age`, `gender`, `cadre`, `department`, `password`, `created_at`, `updated_at`) VALUES
(1, 'sarahpam@user.com', 'Sarah', 'Pam', '26', 'female', 'Doctor', 'Medicine', '$2y$10$A3UztB/w2RVlFS8tBrtUKOG456iVyTr8lmBz.iqMx3KahETK5rKR.', '2021-07-18 06:30:01', '2021-07-18 06:30:01'),
(4, 'jamesnaribi@yahoo.com', 'James', 'John', '22', 'male', 'Doctor', 'Medicine', '$2y$10$9ULmVymP4/l7PXu86XbbL.cF8S727BKicpT38tqJ3WpQFnLBxOFeC', '2021-07-22 00:24:25', '2021-07-22 00:24:25'),
(5, 'idrisabu@user.com', 'Idris', 'Abu', '35', 'male', 'Doctor', 'Medicine', '$2y$10$3sa6cjSLgIalBdwn7uS0VOl0rX7v.Afm0wDPekzQ1As3D07N/k2nS', '2021-07-23 13:22:57', '2021-07-23 13:22:57'),
(6, 'waleoni@user.com', 'Wale', 'Oni', '37', 'male', 'Doctor', 'Medicine', '$2y$10$/1kHQhAMorq94o/n68Mom.w.a1ZjDtqThrBZuFebMvXfehcQfXHp.', '2021-07-23 13:25:11', '2021-07-23 13:25:11'),
(7, 'rachelinmo@user.com', 'Rachel', 'inmo', '29', 'female', 'Doctor', 'Medicine', '$2y$10$p4/7m0FfGRdUqbCcMFXDa.xk/UFgKDnrqPHVj7epdxadlUEAInQOi', '2021-07-23 13:26:05', '2021-07-23 13:26:05');

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
(11, '2014_10_12_000000_create_users_table', 1),
(12, '2014_10_12_100000_create_password_resets_table', 1),
(13, '2019_08_19_000000_create_failed_jobs_table', 1),
(14, '2021_07_12_210344_create_health_workers', 1),
(15, '2021_07_12_211014_create_patience', 1),
(16, '2021_07_18_99999_create_cruds_table', 2),
(17, '2021_07_19_191351_create_patience_encounter', 3),
(18, '2021_07_21_110116_create_notifications_table', 4),
(20, '2021_07_22_201933_create_chats', 5);

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notifiable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notifiable_id` bigint(20) UNSIGNED NOT NULL,
  `data` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `read_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`id`, `type`, `notifiable_type`, `notifiable_id`, `data`, `read_at`, `created_at`, `updated_at`) VALUES
('19ffc927-43e1-440d-9dd2-c1bdf3dc7e55', 'App\\Notifications\\TransferedFile', 'App\\Models\\HealthWorkers', 1, '{\"sender\":\"Dr Sarah\",\"diagnosis\":\"Malaria\",\"temperature\":\"4\",\"visit_type\":\"Repeated\",\"treatment_plan\":\"Anti malaria\",\"weight\":\"5\",\"height\":\"1\",\"bmi\":\"5\",\"complaint\":\"Headache\",\"respiratory_rate\":\"5\",\"blood_pressure\":\"5\",\"patience_name\":\"sld Salami\",\"patience_id\":1}', NULL, '2021-07-22 14:44:40', '2021-07-22 14:44:40');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `patience`
--

CREATE TABLE `patience` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `surname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `height` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `weight` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bmi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ward` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lga` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `age` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `picture` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `patience`
--

INSERT INTO `patience` (`id`, `email`, `name`, `surname`, `height`, `weight`, `bmi`, `ward`, `lga`, `state`, `age`, `gender`, `password`, `picture`, `created_at`, `updated_at`) VALUES
(1, 'user4@gmail.com', 'sld', 'Salami', '5', NULL, '17', 'dldl', 'ldl', 'lldld', '45', 'male', '$2y$10$13x8DE6w94UU45lnE3mU7e7W30eiOq5iJrFU2q/bjtrWm/.XUu9lq', 'image_60f345bcd84791626555836.jpeg', '2021-07-17 20:03:57', '2021-07-17 20:03:57'),
(2, 'user3@gmail.com', 'sld', 'Salami', '5', NULL, '17', 'dldl', 'ldl', 'lldld', '45', 'male', '$2y$10$K4pCYhlI5NSVQ7fSWWawzOTXlg6u3Oyt5fKRpU6O00hi7B8zmc7y6', 'image_60f3469450bfd1626556052.jpeg', '2021-07-17 20:07:33', '2021-07-17 20:07:33'),
(3, 'jamesnaribi@yahoo.com', 'dfd', 'ff', '2', NULL, '28', 'll\'', 'lfelo', 'kskks', '30', 'female', '$2y$10$0rNd0ZmLOwKtLbmq1WBGnud.zouwPcEaPqkzozrZOTUtxVQdb4MRG', 'image_60f34e1c38b4f1626557980.jpeg', '2021-07-17 20:39:40', '2021-07-17 20:39:40'),
(4, 'oluwatosinadesoyesalami@gmail.com', 'gf', 'dfd', '2', NULL, '28', 'ggg', 'rff', 'ggbb', '40', 'male', '$2y$10$o4G8au.kbiOg8CoKENcMtOTuM16Ws9p90O4mCQ5CI9J9Fi3tMgSEK', 'image_60f35110600e91626558736.jpeg', '2021-07-17 20:52:16', '2021-07-17 20:52:16'),
(6, 'user@gmail.com', 'Suberu', 'lasisi', '20', NULL, '1', 'jos', 'Jos', 'Splateau', '65', 'male', '$2y$10$YqY/.fLC0B/TGsQO5GNK9OLfEyYDISC4ghYEBnkBxYRcaAX3MNDBi', 'image_60f64c7ae14151626754170.jpeg', '2021-07-20 03:09:31', '2021-07-20 03:09:31');

-- --------------------------------------------------------

--
-- Table structure for table `patience_encounters`
--

CREATE TABLE `patience_encounters` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `visit_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `weight` int(11) NOT NULL,
  `height` int(11) NOT NULL,
  `bmi` int(11) NOT NULL,
  `temperature` int(11) NOT NULL,
  `blood_pressure` int(11) NOT NULL,
  `respiratory_rate` int(11) NOT NULL,
  `complaint` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `diagnosis` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `treatment` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `patience_id` bigint(20) UNSIGNED NOT NULL,
  `health_worker_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `patience_encounters`
--

INSERT INTO `patience_encounters` (`id`, `date`, `time`, `visit_type`, `weight`, `height`, `bmi`, `temperature`, `blood_pressure`, `respiratory_rate`, `complaint`, `diagnosis`, `treatment`, `patience_id`, `health_worker_id`, `created_at`, `updated_at`) VALUES
(1, '2021-07-20', '03:03:01', 'first time', 5, 5, 1, 55, 55, 55, '44', 'Hypertension', '444', 1, 1, '2021-07-20 02:03:01', '2021-07-20 02:03:01'),
(2, '2021-07-22', '08:45:30', 'first time', 2, 2, 1, 55, 52, 56, 'headache', 'Malaria', 'take armatem', 0, 1, '2021-07-22 07:45:30', '2021-07-22 07:45:30'),
(3, '2021-07-22', '11:51:37', 'first time', 70, 2, 35, 32, 45, 100, 'Headache', 'Malaria', 'Take armatem extra', 0, 1, '2021-07-22 10:51:37', '2021-07-22 10:51:37'),
(4, '2021-07-22', '15:06:25', 'Repeated', 12, 2, 6, 123, 54, 52, 'Headache and fever', 'Malaria', 'Take 2 does of atesoante', 0, 1, '2021-07-22 14:06:25', '2021-07-22 14:06:25'),
(5, '2021-07-22', '15:09:23', 'Repeated', 12, 2, 6, 123, 54, 52, 'Headache and fever', 'Malaria', 'Take 2 does of atesoante', 0, 1, '2021-07-22 14:09:23', '2021-07-22 14:09:23'),
(6, '2021-07-22', '15:13:36', 'Repeated', 12, 2, 6, 123, 54, 52, 'Headache and fever', 'Malaria', 'Take 2 does of atesoante', 0, 1, '2021-07-22 14:13:36', '2021-07-22 14:13:36'),
(7, '2021-07-22', '15:28:58', 'first time', 25, 125, 2, 48, 22, 55, 'Headache', 'Malaria', '58', 1, 1, '2021-07-22 14:28:58', '2021-07-22 14:28:58'),
(8, '2021-07-22', '15:31:11', 'first time', 25, 125, 2, 48, 22, 55, 'Headache', 'Malaria', '58', 1, 1, '2021-07-22 14:31:11', '2021-07-22 14:31:11'),
(9, '2021-07-22', '15:44:40', 'Repeated', 5, 1, 5, 4, 5, 5, 'Headache', 'Malaria', 'Anti malaria', 1, 1, '2021-07-22 14:44:40', '2021-07-22 14:44:40');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chats`
--
ALTER TABLE `chats`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cruds`
--
ALTER TABLE `cruds`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `cruds_name_unique` (`name`),
  ADD UNIQUE KEY `cruds_model_unique` (`model`),
  ADD UNIQUE KEY `cruds_route_unique` (`route`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `health_workers`
--
ALTER TABLE `health_workers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `health_workers_email_unique` (`email`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `notifications_notifiable_type_notifiable_id_index` (`notifiable_type`,`notifiable_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `patience`
--
ALTER TABLE `patience`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `patience_email_unique` (`email`);

--
-- Indexes for table `patience_encounters`
--
ALTER TABLE `patience_encounters`
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
-- AUTO_INCREMENT for table `chats`
--
ALTER TABLE `chats`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `cruds`
--
ALTER TABLE `cruds`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `health_workers`
--
ALTER TABLE `health_workers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `patience`
--
ALTER TABLE `patience`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `patience_encounters`
--
ALTER TABLE `patience_encounters`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
