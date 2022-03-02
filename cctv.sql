-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 02 Mar 2022 pada 08.30
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 7.4.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
-- Struktur dari tabel `cctv`
--

CREATE TABLE `cctv` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `owner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ip_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lokasi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `latitude` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `longitude` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `cctv`
--

INSERT INTO `cctv` (`id`, `owner`, `ip_address`, `lokasi`, `status`, `link`, `latitude`, `longitude`, `created_at`, `updated_at`) VALUES
(1, 'CCTV DLLAJ', '172.16.200.2', 'BTM', 1, '', '-6.604344', '106.796611', NULL, NULL),
(2, 'CCTV DLLAJ', '172.16.200.3', 'PAJAJARAN', 1, 'http://202.159.123.43:1935/cctv-dishub/CCTV-DISHUB-PAJAJARAN.stream/playlist.m3u8', NULL, NULL, NULL, NULL),
(3, 'CCTV DLLAJ', '172.16.200.5', 'TUGU KUJANG ', 1, 'http://202.159.123.43:1935/cctv-dishub/CCTV-DISHUB-TUGUKUJANG.stream/playlist.m3u8', NULL, NULL, NULL, NULL),
(4, 'CCTV DLLAJ', '172.16.200.6', 'PS-BOGOR', 1, 'http://202.159.123.43:1935/cctv-dishub/CCTV-DISHUB-PSBOGOR.stream/playlist.m3u8', '-6.601128', '106.805264', NULL, NULL),
(5, 'CCTV DLLAJ', '172.16.200.8', 'SURKEN ARAH  G AUT', 1, 'http://202.159.123.43:1935/cctv-dishub/CCTV-DISHUB-SURKEN-GAUT.stream/playlist.m3u8', NULL, NULL, NULL, NULL),
(6, 'CCTV DLLAJ', '172.16.200.9', 'SURKEN ARAH PS BOGOR', 1, 'http://202.159.123.43:1935/cctv-dishub/CCTV-DISHUB-SURKEN-PSBOGOR.stream/playlist.m3u8', NULL, NULL, NULL, NULL),
(7, 'CCTV DLLAJ', '172.16.200.11', 'UNDERPASS 1', 0, '', NULL, NULL, NULL, NULL),
(8, 'CCTV DLLAJ', '172.16.200.12', 'UNDERPASS 2', 1, 'http://202.159.123.43:1935/cctv-dishub/CCTV-DISHUB-UNDERPASS2.stream/playlist.m3u8', NULL, NULL, NULL, NULL),
(9, 'CCTV DLLAJ', '172.16.200.67', 'PANCASAN ', 0, '', NULL, NULL, NULL, NULL),
(10, 'CCTV DLLAJ', '172.16.200.10', 'DEPAN TERMINAL  BIS ', 0, '', NULL, NULL, NULL, NULL),
(11, 'CCTV DLLAJ', '172.16.200.69', 'SIMPANG GN BATU', 1, 'http://202.159.123.43:1935/cctv-dishub/CCTV-DISHUB-SIMPANG-GN-BATU.stream/playlist.m3u8', NULL, NULL, NULL, NULL),
(12, 'CCTV DLLAJ', '172.16.200.70', 'JEMBATAN MERAH ', 0, '', NULL, NULL, NULL, NULL),
(13, 'CCTV DLLAJ', '172.16.200.71', 'TAMAN TOPI ', 1, 'http://202.159.123.43:1935/cctv-dishub/CCTV-DISHUB-TAMANTOPI.stream/playlist.m3u8', NULL, NULL, NULL, NULL),
(14, 'CCTV DLLAJ', '172.16.200.72', 'MERDEKA ARAH  PDAM ', 0, '', NULL, NULL, NULL, NULL),
(15, 'CCTV DLLAJ', '172.16.200.73', 'PALEDANG ', 1, 'http://202.159.123.43:1935/cctv-dishub/CCTV-DISHUB-PALEDANG.stream/playlist.m3u8', NULL, NULL, NULL, NULL),
(16, 'CCTV DLLAJ', '172.16.200.59', 'SIMPANG CIAWI', 1, 'http://202.159.123.43:1935/cctv-dishub/CCTV-DISHUB-SIMPANG-CIAWI.stream/playlist.m3u8', NULL, NULL, NULL, NULL),
(17, 'CCTV DLLAJ', '172.16.200.14', 'SIMPANG  CIPAKU', 0, '', NULL, NULL, NULL, NULL),
(18, 'CCTV DLLAJ', '172.16.200.55', 'TAJUR PAKUAN', 1, 'http://202.159.123.43:1935/cctv-dishub/CCTV-DISHUB-TAJUR-PAKUAN.stream/playlist.m3u8', NULL, NULL, NULL, NULL),
(19, 'CCTV DLLAJ', '172.16.200.53', 'SUKASARI 1', 1, 'http://202.159.123.43:1935/cctv-dishub/CCTV-DISHUB-SUKASARI1.stream/playlist.m3u8', NULL, NULL, NULL, NULL),
(20, 'CCTV DLLAJ', '172.16.200.38', 'DEPAN DISHUB', 1, 'http://202.159.123.43:1935/cctv-dishub/CCTV-DISHUB-DPN-DISHUB.stream/playlist.m3u8', NULL, NULL, NULL, NULL),
(21, 'CCTV DLLAJ', '172.16.200.39', 'SILIWANGI LAWANG GINTUNG', 1, 'http://202.159.123.43:1935/cctv-dishub/CCTV-DISHUB-SILIWANGI-LAWANG-GINTUNG.stream/playlist.m3u8', NULL, NULL, NULL, NULL),
(22, 'CCTV DLLAJ', '172.16.200.40', 'TURUNAN MBAH DALAM', 0, '', NULL, NULL, NULL, NULL),
(23, 'CCTV DLLAJ', '172.16.200.25', 'PAJAJARAN ARAH CIHEULEUT', 1, 'http://202.159.123.43:1935/cctv-dishub/CCTV-DISHUB-PAJAJARAN-CIHEULEUT.stream/playlist.m3u8', NULL, NULL, NULL, NULL),
(24, 'CCTV DLLAJ', '172.16.200.56', 'GG AUT', 0, '', NULL, NULL, NULL, NULL),
(25, 'CCTV DLLAJ', '172.16.200.94', 'ARAH JUANDA', 1, 'http://202.159.123.43:1935/cctv-dishub/CCTV-DISHUB-ARAH-JUANDA.stream/playlist.m3u8', NULL, NULL, NULL, NULL),
(26, 'CCTV DLLAJ', '172.16.200.93', 'ARAH KAPTEN MUSLIHAT', 1, 'http://202.159.123.43:1935/cctv-dishub/CCTV-DISHUB-ARAH-KPTN-MUSLIHAT.stream/playlist.m3u8', NULL, NULL, NULL, NULL),
(27, 'CCTV DLLAJ', '172.16.200.91', 'JEMBATAN MERAH ARAH MERDEKA', 0, '', NULL, NULL, NULL, NULL),
(28, 'CCTV DLLAJ', '172.16.106.9', 'SEMPUR ARAH JEMBATAN', 0, '', NULL, NULL, NULL, NULL),
(29, 'CCTV DLLAJ', '172.16.200.61', 'JPO BARANANG SIANG 1', 0, '', NULL, NULL, NULL, NULL),
(30, 'CCTV DLLAJ', '172.16.200.60', 'JPO BARANANG SIANG 2', 0, '', NULL, NULL, NULL, NULL),
(31, 'CCTV DLLAJ', '172.16.200.88', 'JPO DEPRIS 1', 0, '', NULL, NULL, NULL, NULL),
(32, 'CCTV DLLAJ', '172.16.200.89', 'JPO DEPRIS 2', 0, '', NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `cctv`
--
ALTER TABLE `cctv`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `cctv`
--
ALTER TABLE `cctv`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
