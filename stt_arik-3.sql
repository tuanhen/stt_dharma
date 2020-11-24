-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 22, 2020 at 11:52 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `stt_arik`
--

-- --------------------------------------------------------

--
-- Table structure for table `absensis`
--

CREATE TABLE `absensis` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `tgl_rapat` date NOT NULL,
  `status` char(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `absensis`
--

INSERT INTO `absensis` (`id`, `user_id`, `tgl_rapat`, `status`, `keterangan`, `created_at`, `updated_at`) VALUES
(28, 5, '2020-10-31', 'Hadir', 'a', '2020-10-31 00:56:16', '2020-10-31 00:56:16'),
(29, 10, '2020-10-31', 'Hadir', 'a', '2020-10-31 00:56:16', '2020-10-31 00:56:16'),
(30, 11, '2020-10-31', 'TidakHadir', 'Sakit', '2020-10-31 00:56:16', '2020-10-31 00:56:16'),
(31, 12, '2020-10-31', 'Hadir', 'a', '2020-10-31 00:56:16', '2020-10-31 00:56:16'),
(32, 13, '2020-10-31', 'TidakHadir', 'Sakit', '2020-10-31 00:56:16', '2020-10-31 00:56:16'),
(33, 14, '2020-10-31', 'Hadir', 'a', '2020-10-31 00:56:16', '2020-10-31 00:56:16'),
(34, 15, '2020-10-31', 'Hadir', 'a', '2020-10-31 00:56:16', '2020-10-31 00:56:16'),
(35, 5, '2020-11-18', 'Hadir', 'a', '2020-11-17 17:39:32', '2020-11-17 17:39:32'),
(36, 10, '2020-11-18', 'Hadir', 'a', '2020-11-17 17:39:32', '2020-11-17 17:39:32'),
(37, 11, '2020-11-18', 'Hadir', 'a', '2020-11-17 17:39:32', '2020-11-17 17:39:32'),
(38, 12, '2020-11-18', 'Hadir', 'a', '2020-11-17 17:39:32', '2020-11-17 17:39:32'),
(39, 13, '2020-11-18', 'Hadir', 'a', '2020-11-17 17:39:32', '2020-11-17 17:39:32'),
(40, 14, '2020-11-18', 'Hadir', 'a', '2020-11-17 17:39:32', '2020-11-17 17:39:32'),
(41, 15, '2020-11-18', 'Hadir', 'a', '2020-11-17 17:39:32', '2020-11-17 17:39:32');

-- --------------------------------------------------------

--
-- Table structure for table `iuran_anggotas`
--

CREATE TABLE `iuran_anggotas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `iuranWajib_id` int(11) NOT NULL,
  `jumlah_iuran` int(11) NOT NULL,
  `tgl_iuran` date NOT NULL,
  `keterangan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `iuran_anggotas`
--

INSERT INTO `iuran_anggotas` (`id`, `iuranWajib_id`, `jumlah_iuran`, `tgl_iuran`, `keterangan`, `created_at`, `updated_at`) VALUES
(25, 5, 2000, '2020-10-31', 'iuran ke 1', '2020-10-31 01:00:53', '2020-10-31 01:00:53'),
(26, 10, 2000, '2020-10-31', 'iuran ke 1', '2020-10-31 01:01:06', '2020-10-31 01:01:06'),
(27, 11, 2000, '2020-10-31', 'iuran ke 1', '2020-10-31 01:01:16', '2020-10-31 01:01:16'),
(28, 12, 2000, '2020-10-31', 'iuran ke 1', '2020-10-31 01:01:26', '2020-10-31 01:01:26'),
(29, 13, 2000, '2020-10-31', 'iuran ke 1', '2020-10-31 01:01:41', '2020-10-31 01:01:41'),
(30, 14, 2000, '2020-10-31', 'iuran ke 1', '2020-10-31 01:01:54', '2020-10-31 01:01:54'),
(31, 15, 2000, '2020-10-31', 'iuran ke 1', '2020-10-31 01:02:07', '2020-10-31 01:02:07');

-- --------------------------------------------------------

--
-- Table structure for table `iuran_wajibs`
--

CREATE TABLE `iuran_wajibs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `jumlah_iuran_wajib` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `iuran_wajibs`
--

INSERT INTO `iuran_wajibs` (`id`, `user_id`, `jumlah_iuran_wajib`, `created_at`, `updated_at`) VALUES
(11, 5, 22000, '2020-10-31 00:48:01', '2020-10-31 01:00:53'),
(12, 10, 22000, '2020-10-31 00:54:12', '2020-10-31 01:01:06'),
(13, 11, 22000, '2020-10-31 00:54:18', '2020-10-31 01:01:16'),
(14, 12, 22000, '2020-10-31 00:54:25', '2020-10-31 01:01:26'),
(15, 13, 22000, '2020-10-31 00:54:38', '2020-10-31 01:01:41'),
(16, 14, 22000, '2020-10-31 00:54:46', '2020-10-31 01:01:54'),
(17, 15, 22000, '2020-10-31 00:54:57', '2020-10-31 01:02:07');

-- --------------------------------------------------------

--
-- Table structure for table `kas_keluars`
--

CREATE TABLE `kas_keluars` (
  `id` int(10) UNSIGNED NOT NULL,
  `keterangan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `jumlah` double NOT NULL,
  `tanggal_masuk` date NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kas_keluars`
--

INSERT INTO `kas_keluars` (`id`, `keterangan`, `jumlah`, `tanggal_masuk`, `remember_token`, `created_at`, `updated_at`) VALUES
(4, 'Konsumsi Rapat', 100000, '2020-10-30', NULL, '2020-10-31 01:00:27', '2020-10-31 01:00:27');

-- --------------------------------------------------------

--
-- Table structure for table `kas_masuks`
--

CREATE TABLE `kas_masuks` (
  `id` int(10) UNSIGNED NOT NULL,
  `keterangan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `jumlah` double NOT NULL,
  `tanggal_masuk` date NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kas_masuks`
--

INSERT INTO `kas_masuks` (`id`, `keterangan`, `jumlah`, `tanggal_masuk`, `remember_token`, `created_at`, `updated_at`) VALUES
(7, 'Sponsor Banjar', 200000, '2020-10-31', NULL, '2020-10-31 00:59:54', '2020-10-31 00:59:54');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2020_09_10_174311_create_kas_masuk_table', 2),
(4, '2020_09_11_144541_create_kas_keluar_table', 3),
(5, '2020_09_12_051831_create_absensis_table', 4),
(6, '2020_09_15_142700_create_permission_tables', 5),
(7, '2020_10_22_064624_create_iuran_wajib_table', 6),
(8, '2020_10_22_073341_create_iuran_anggota_table', 7);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `nik` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ttl` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_perkawinan` char(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tlp` char(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pekerjaan` char(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` char(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` char(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `nik`, `name`, `alamat`, `email`, `password`, `ttl`, `status_perkawinan`, `tlp`, `pekerjaan`, `status`, `role`, `image`, `remember_token`, `created_at`, `updated_at`) VALUES
(5, 93849324, 'Super Admin', 'Denpasar Bali', 'superadmin@gmail.com', '$2y$10$I6l/24L8E5ZtRzGM5wAX0eeBrSNVIzcKYFdyAQiik9UouU4KQPVDm', '12/05/2020', 'Lajang', '089213721', 'Mahasiswa', 'Aktif', 'Admin', '55055.jpeg', NULL, '2020-09-12 19:07:45', '2020-09-18 07:36:03'),
(10, 123456, 'Arik', 'Denpasar-Bali', 'arik@gmail.com', '$2y$10$Kg.Vpff7y8mGdngQzxmKau5UhoNrgdpOLTuxq7KsJarEuo/dPXzpi', '2019-03-29', 'Lajang', '0892893', 'Mahasiswa', 'Aktif', 'Admin', '89172.png', NULL, '2020-10-31 00:50:09', '2020-10-31 00:50:09'),
(11, 234567, 'Made Wibawa', 'Denpasar-Bali', 'made@gmail.com', '$2y$10$fYoEpFkKmZ9jVnFsTZv/sO/wVMWL6JDuLV7kF46cDRQ5uiYg1CcaC', '2020-10-08', 'Lajang', '0892893', 'Mahasiswa', 'Aktif', 'Pengurus', '90989.png', NULL, '2020-10-31 00:50:54', '2020-10-31 00:50:54'),
(12, 345678, 'Putu Adi', 'Denpasar-Bali', 'putu@gmail.com', '$2y$10$zt5/5UTMaFjs6Jcf7numFO31PUufaYqtRXWWTfWemG47yfTqw2NN6', '2020-10-30', 'Lajang', '0892893', 'Mahasiswa', 'Aktif', 'Anggota', '80046.png', NULL, '2020-10-31 00:51:47', '2020-10-31 00:51:47'),
(13, 456789, 'Komang Dedi', 'Denpasar-Bali', 'komang@gmail.com', '$2y$10$QVdnVNpQeAYSIqDUQqdlRu60AkyixBB1kk2bBO6o39aNdn/ujrn3m', '2020-10-22', 'Lajang', '0892893', 'Mahasiswa', 'Aktif', 'Admin', '60226.png', NULL, '2020-10-31 00:52:30', '2020-10-31 00:52:30'),
(14, 56789, 'Ngurah Anjas', 'Denpasar-Bali', 'ngurah@gmail.com', '$2y$10$CvZAcLPoJIN7zygJy5sqPOcp7cZFx7qI1LKx7tr7oYwKy.fY42NWK', '2020-10-06', 'Lajang', '0892893', 'Mahasiswa', 'Aktif', 'Anggota', '36050.png', NULL, '2020-10-31 00:53:05', '2020-10-31 00:53:05'),
(15, 678901, 'Dewa Ayu', 'Denpasar-Bali', 'dewa@gmail.com', '$2y$10$JY/5kx1L0y/fXVMazFNRz.OSBv7/FanU6FEkArEvLX0M3aXlC5TQO', '2020-10-15', 'Lajang', '0892893', 'Mahasiswa', 'Aktif', 'Anggota', '82735.png', NULL, '2020-10-31 00:53:54', '2020-10-31 00:53:54');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `absensis`
--
ALTER TABLE `absensis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `iuran_anggotas`
--
ALTER TABLE `iuran_anggotas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `iuran_wajibs`
--
ALTER TABLE `iuran_wajibs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kas_keluars`
--
ALTER TABLE `kas_keluars`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kas_masuks`
--
ALTER TABLE `kas_masuks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

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
-- AUTO_INCREMENT for table `absensis`
--
ALTER TABLE `absensis`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `iuran_anggotas`
--
ALTER TABLE `iuran_anggotas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `iuran_wajibs`
--
ALTER TABLE `iuran_wajibs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `kas_keluars`
--
ALTER TABLE `kas_keluars`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `kas_masuks`
--
ALTER TABLE `kas_masuks`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
