-- phpMyAdmin SQL Dump
-- version 4.9.7deb1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 01, 2022 at 11:46 AM
-- Server version: 8.0.27-0ubuntu0.21.04.1
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cctv`
--

-- --------------------------------------------------------

--
-- Table structure for table `cctv`
--

CREATE TABLE `cctv` (
  `id` bigint UNSIGNED NOT NULL,
  `owner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ip_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lokasi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cctv`
--

INSERT INTO `cctv` (`id`, `owner`, `ip_address`, `lokasi`, `status`, `link`, `created_at`, `updated_at`) VALUES
(2, 'CCTV DLLAJ', '172.16.200.3', 'PAJAJARAN', 1, 'http://202.159.123.43:1935/cctv-dishub/CCTV-DISHUB-PAJAJARAN.stream/playlist.m3u8', NULL, NULL),
(3, 'CCTV DLLAJ', '172.16.200.5', 'TUGU KUJANG ', 1, 'http://202.159.123.43:1935/cctv-dishub/CCTV-DISHUB-TUGUKUJANG.stream/playlist.m3u8', NULL, NULL),
(4, 'CCTV DLLAJ', '172.16.200.6', 'PS-BOGOR', 1, 'http://202.159.123.43:1935/cctv-dishub/CCTV-DISHUB-PSBOGOR.stream/playlist.m3u8', NULL, NULL),
(5, 'CCTV DLLAJ', '172.16.200.8', 'SURKEN ARAH  G AUT', 1, 'http://202.159.123.43:1935/cctv-dishub/CCTV-DISHUB-SURKEN-GAUT.stream/playlist.m3u8', NULL, NULL),
(6, 'CCTV DLLAJ', '172.16.200.9', 'SURKEN ARAH PS BOGOR', 1, 'http://202.159.123.43:1935/cctv-dishub/CCTV-DISHUB-SURKEN-PSBOGOR.stream/playlist.m3u8', NULL, NULL),
(7, 'CCTV DLLAJ', '172.16.200.11', 'UNDERPASS 1', 0, '', NULL, NULL),
(8, 'CCTV DLLAJ', '172.16.200.12', 'UNDERPASS 2', 1, 'http://202.159.123.43:1935/cctv-dishub/CCTV-DISHUB-UNDERPASS2.stream/playlist.m3u8', NULL, NULL),
(9, 'CCTV DLLAJ', '172.16.200.67', 'PANCASAN ', 0, '', NULL, NULL),
(10, 'CCTV DLLAJ', '172.16.200.10', 'DEPAN TERMINAL  BIS ', 0, '', NULL, NULL),
(11, 'CCTV DLLAJ', '172.16.200.69', 'SIMPANG GN BATU', 1, 'http://202.159.123.43:1935/cctv-dishub/CCTV-DISHUB-SIMPANG-GN-BATU.stream/playlist.m3u8', NULL, NULL),
(12, 'CCTV DLLAJ', '172.16.200.70', 'JEMBATAN MERAH ', 0, '', NULL, NULL),
(13, 'CCTV DLLAJ', '172.16.200.71', 'TAMAN TOPI ', 1, 'http://202.159.123.43:1935/cctv-dishub/CCTV-DISHUB-TAMANTOPI.stream/playlist.m3u8', NULL, NULL),
(14, 'CCTV DLLAJ', '172.16.200.72', 'MERDEKA ARAH  PDAM ', 0, '', NULL, NULL),
(15, 'CCTV DLLAJ', '172.16.200.73', 'PALEDANG ', 1, 'http://202.159.123.43:1935/cctv-dishub/CCTV-DISHUB-PALEDANG.stream/playlist.m3u8', NULL, NULL),
(16, 'CCTV DLLAJ', '172.16.200.59', 'SIMPANG CIAWI', 1, 'http://202.159.123.43:1935/cctv-dishub/CCTV-DISHUB-SIMPANG-CIAWI.stream/playlist.m3u8', NULL, NULL),
(17, 'CCTV DLLAJ', '172.16.200.14', 'SIMPANG  CIPAKU', 0, '', NULL, NULL),
(18, 'CCTV DLLAJ', '172.16.200.55', 'TAJUR PAKUAN', 1, 'http://202.159.123.43:1935/cctv-dishub/CCTV-DISHUB-TAJUR-PAKUAN.stream/playlist.m3u8', NULL, NULL),
(19, 'CCTV DLLAJ', '172.16.200.53', 'SUKASARI 1', 1, 'http://202.159.123.43:1935/cctv-dishub/CCTV-DISHUB-SUKASARI1.stream/playlist.m3u8', NULL, NULL),
(20, 'CCTV DLLAJ', '172.16.200.38', 'DEPAN DISHUB', 1, 'http://202.159.123.43:1935/cctv-dishub/CCTV-DISHUB-DPN-DISHUB.stream/playlist.m3u8', NULL, NULL),
(21, 'CCTV DLLAJ', '172.16.200.39', 'SILIWANGI LAWANG GINTUNG', 1, 'http://202.159.123.43:1935/cctv-dishub/CCTV-DISHUB-SILIWANGI-LAWANG-GINTUNG.stream/playlist.m3u8', NULL, NULL),
(22, 'CCTV DLLAJ', '172.16.200.40', 'TURUNAN MBAH DALAM', 0, '', NULL, NULL),
(23, 'CCTV DLLAJ', '172.16.200.25', 'PAJAJARAN ARAH CIHEULEUT', 1, 'http://202.159.123.43:1935/cctv-dishub/CCTV-DISHUB-PAJAJARAN-CIHEULEUT.stream/playlist.m3u8', NULL, NULL),
(24, 'CCTV DLLAJ', '172.16.200.56', 'GG AUT', 0, '', NULL, NULL),
(25, 'CCTV DLLAJ', '172.16.200.94', 'ARAH JUANDA', 1, 'http://202.159.123.43:1935/cctv-dishub/CCTV-DISHUB-ARAH-JUANDA.stream/playlist.m3u8', NULL, NULL),
(26, 'CCTV DLLAJ', '172.16.200.93', 'ARAH KAPTEN MUSLIHAT', 1, 'http://202.159.123.43:1935/cctv-dishub/CCTV-DISHUB-ARAH-KPTN-MUSLIHAT.stream/playlist.m3u8', NULL, NULL),
(27, 'CCTV DLLAJ', '172.16.200.91', 'JEMBATAN MERAH ARAH MERDEKA', 0, '', NULL, NULL),
(28, 'CCTV DLLAJ', '172.16.106.9', 'SEMPUR ARAH JEMBATAN', 0, '', NULL, NULL),
(29, 'CCTV DLLAJ', '172.16.200.61', 'JPO BARANANG SIANG 1', 0, '', NULL, NULL),
(30, 'CCTV DLLAJ', '172.16.200.60', 'JPO BARANANG SIANG 2', 0, '', NULL, NULL),
(31, 'CCTV DLLAJ', '172.16.200.88', 'JPO DEPRIS 1', 0, '', NULL, NULL),
(32, 'CCTV DLLAJ', '172.16.200.89', 'JPO DEPRIS 2', 0, '', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_03_01_012458_create_cctv_table', 1);

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
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
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
-- Indexes for table `cctv`
--
ALTER TABLE `cctv`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

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
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

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
-- AUTO_INCREMENT for table `cctv`
--
ALTER TABLE `cctv`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
