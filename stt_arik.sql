-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 20 Sep 2020 pada 04.10
-- Versi server: 10.4.13-MariaDB
-- Versi PHP: 7.4.8

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
-- Struktur dari tabel `absensis`
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
-- Dumping data untuk tabel `absensis`
--

INSERT INTO `absensis` (`id`, `user_id`, `tgl_rapat`, `status`, `keterangan`, `created_at`, `updated_at`) VALUES
(1, 1, '2020-09-11', 'Hadir', 'hkjh', '2020-09-12 06:36:28', '2020-09-12 06:36:28'),
(3, 5, '2020-09-12', 'TidakHadir', 'testsa', '2020-09-12 06:37:43', '2020-09-12 22:47:44'),
(5, 6, '2020-10-01', 'Hadir', 'Morning Class', '2020-09-14 23:42:26', '2020-09-14 23:42:26'),
(6, 4, '2020-08-14', 'Hadir', 'Morning Class', '2020-09-14 23:48:35', '2020-09-14 23:48:35');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kas_keluars`
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
-- Dumping data untuk tabel `kas_keluars`
--

INSERT INTO `kas_keluars` (`id`, `keterangan`, `jumlah`, `tanggal_masuk`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Biaya Rapat I', 76976, '2020-09-11', NULL, '2020-09-11 07:08:20', '2020-09-11 08:45:13');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kas_masuks`
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
-- Dumping data untuk tabel `kas_masuks`
--

INSERT INTO `kas_masuks` (`id`, `keterangan`, `jumlah`, `tanggal_masuk`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Iuran Mingguan Anggota ke 1', 250000, '2020-09-11', NULL, '2020-09-10 11:14:53', '2020-09-11 05:46:24'),
(5, 'Iklan Promosi', 200000, '2020-09-14', NULL, '2020-09-14 09:25:08', '2020-09-14 09:25:08');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2020_09_10_174311_create_kas_masuk_table', 2),
(4, '2020_09_11_144541_create_kas_keluar_table', 3),
(5, '2020_09_12_051831_create_absensis_table', 4),
(6, '2020_09_15_142700_create_permission_tables', 5);

-- --------------------------------------------------------

--
-- Struktur dari tabel `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `permissions`
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
-- Struktur dari tabel `roles`
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
-- Struktur dari tabel `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
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
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `nik`, `name`, `alamat`, `email`, `password`, `ttl`, `status_perkawinan`, `tlp`, `pekerjaan`, `status`, `role`, `image`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 10101010, 'admin', 'Denpasar Bali', 'admin@gmail.com', '$2y$10$oiw0ku51hn0htrD4z/psauAMniu/dIfVnzwwWQmDwn3/OiDnMNvdK', '12/05/2020', 'Lajang', '02392178', 'Pelajar', 'Aktif', 'Pengurus', '7725.jpeg', 'lJIjqY1ypb32beDIrQNtjschrrXq4VkV5nzggTYuRQGMAov2cD94YwQsUjMK', '2020-09-09 11:06:19', '2020-09-16 22:04:39'),
(3, 34234234, 'user2', 'Sesetan Denpasar- Bali', 'user2@gmail.com', '$2y$10$n0668g/kyoIjs.F21l7TD.1RIFsA0fDtqUCnwDslM94/9GR6YdlUa', '07/01/2020', 'Lajang', '02392178', 'Pelajar', 'Aktif', 'Pengurus', '35455.jpg', NULL, '2020-09-11 18:36:08', '2020-09-16 22:05:14'),
(4, 832047803, 'user3', 'Sesetan, Denpasar - Bali', 'user3@gmail.com', '$2y$10$xs/T3GuM3VTzZiQJIWf1jeXHovf9iGRKB8ehzpgEMSHr.6srYeDCi', '20/02/2018', 'Lajang', '02392178', 'Pelajar', 'Aktif', 'Anggota', '23748.jpg', NULL, '2020-09-11 18:36:47', '2020-09-16 22:05:40'),
(5, 93849324, 'Super Admin', 'Denpasar Bali', 'superadmin@gmail.com', '$2y$10$I6l/24L8E5ZtRzGM5wAX0eeBrSNVIzcKYFdyAQiik9UouU4KQPVDm', '12/05/2020', 'Lajang', '089213721', 'Mahasiswa', 'Aktif', 'Admin', '55055.jpeg', NULL, '2020-09-12 19:07:45', '2020-09-18 07:36:03'),
(6, 901283921, 'Arik', 'Denpasar Bali', 'arik@gmail.com', '$2y$10$h5jGv9X59Ibtoe7NKeUxK..BDkOikovwZgAaC6qUYM4cBqHOYB6vm', '07/01/2020', 'Lajang', '02392178', 'Mahasiswa', 'Aktif', 'Admin', '23971.jpeg', NULL, '2020-09-13 04:19:01', '2020-09-16 22:06:27'),
(7, 324324, 'test', 'Denpasar Bali', 'test@gmail.com', '$2y$10$q7fOcuXHvNqUKeWoVcoQrOyg.HGVfgnXNIpRRJECZM/cNfXAI8e9i', '12/05/2020', 'Lajang', '02392178', 'Pelajar', 'Aktif', 'Anggota', 'crat.jpg', NULL, '2020-09-16 19:06:00', '2020-09-16 19:30:23'),
(9, 398983, 'Wawan', 'Denpasar Bali', 'wawan@gmail.com', '$2y$10$6SIkDR462XdYAHJQcFmhW.bVGbPi1bs4GA0zKgdGF18ekDhPLQT0m', '12/05/2020', 'Lajang', '02392178', 'Pelajar', 'Aktif', 'Admin', '93244.jpeg', NULL, '2020-09-17 03:36:43', '2020-09-17 03:36:43');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `absensis`
--
ALTER TABLE `absensis`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kas_keluars`
--
ALTER TABLE `kas_keluars`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kas_masuks`
--
ALTER TABLE `kas_masuks`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indeks untuk tabel `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `absensis`
--
ALTER TABLE `absensis`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `kas_keluars`
--
ALTER TABLE `kas_keluars`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `kas_masuks`
--
ALTER TABLE `kas_masuks`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
