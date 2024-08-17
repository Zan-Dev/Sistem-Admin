-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 16, 2024 at 04:10 PM
-- Server version: 8.0.30
-- PHP Version: 8.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `manggungmangu_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `queue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint UNSIGNED NOT NULL,
  `reserved_at` int UNSIGNED DEFAULT NULL,
  `available_at` int UNSIGNED NOT NULL,
  `created_at` int UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_jobs` int NOT NULL,
  `pending_jobs` int NOT NULL,
  `failed_jobs` int NOT NULL,
  `failed_job_ids` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `options` mediumtext COLLATE utf8mb4_unicode_ci,
  `cancelled_at` int DEFAULT NULL,
  `created_at` int NOT NULL,
  `finished_at` int DEFAULT NULL
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
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2024_07_21_070822_create_penduduk_table', 1),
(5, '2024_07_29_031805_create_pekerjaan_table', 1),
(6, '2024_08_03_032500_create_pegawai_table', 1),
(7, '2024_08_06_203901_create_rt_table', 1),
(8, '2024_08_06_203905_create_rw_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE `pegawai` (
  `id` bigint UNSIGNED NOT NULL,
  `jabatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nik` bigint NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`id`, `jabatan`, `nik`, `created_at`, `updated_at`) VALUES
(1, 'Kepala Desa', 1234567890123456, NULL, NULL),
(2, 'Sekretaris Desa', 1234567890123457, NULL, NULL),
(3, 'Kaur TU & Umum', 1234567890123458, NULL, NULL),
(4, 'Kaur Keuangan', 1234567890123459, NULL, NULL),
(5, 'Kaur Perencanaan Pembangunan', 1234567890123460, NULL, NULL),
(6, 'Kasi Pemerintahan', 1234567890123461, NULL, NULL),
(7, 'Kasi Kesejahteraan', 1234567890123462, NULL, NULL),
(8, 'Kasi Pelayanan', 1234567890123463, NULL, NULL),
(9, 'Kadus I', 1234567890123464, NULL, NULL),
(10, 'Kadus II', 1234567890123460, NULL, NULL),
(11, 'Kadus III', 1234567890123465, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `pekerjaan`
--

CREATE TABLE `pekerjaan` (
  `id` bigint UNSIGNED NOT NULL,
  `pekerjaan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pekerjaan`
--

INSERT INTO `pekerjaan` (`id`, `pekerjaan`, `created_at`, `updated_at`) VALUES
(1, 'Belum/Tidak Bekerja', NULL, NULL),
(2, 'Mengurus Rumah Tangga', NULL, NULL),
(3, 'Pelajar/Mahasiswa', NULL, NULL),
(4, 'Pensuinan', NULL, NULL),
(5, 'PNS', NULL, NULL),
(6, 'TNI', NULL, NULL),
(7, 'Kepolisian RI', NULL, NULL),
(8, 'Pedagangan', NULL, NULL),
(9, 'Petani/Pekebun', NULL, NULL),
(10, 'Peternak', NULL, NULL),
(11, 'Nelayan/Perikanan', NULL, NULL),
(12, 'Industri', NULL, NULL),
(13, 'Konstruksi', NULL, NULL),
(14, 'Transportasi', NULL, NULL),
(15, 'Karyawan Swasta', NULL, NULL),
(16, 'Karyawan BUMN', NULL, NULL),
(17, 'Karyawan BUMD', NULL, NULL),
(18, 'Karyawan Honorer', NULL, NULL),
(19, 'Buruh Harian Lepas', NULL, NULL),
(20, 'Buruh Tani/Perkebunan', NULL, NULL),
(21, 'Buruh Nelayan/Perikanan', NULL, NULL),
(22, 'Buruh Peternakan', NULL, NULL),
(23, 'Pembantu Rumah Tangga', NULL, NULL),
(24, 'Tukang Cukur', NULL, NULL),
(25, 'Tukang Listrik', NULL, NULL),
(26, 'Tukang Batu', NULL, NULL),
(27, 'Tukang Kayu', NULL, NULL),
(28, 'Tukang Sol Sepatu', NULL, NULL),
(29, 'Tukang Las/Pandai Besi', NULL, NULL),
(30, 'Tukang Jahit', NULL, NULL),
(31, 'Tukang Gigi', NULL, NULL),
(32, 'Penata Rias', NULL, NULL),
(33, 'Penata Busana', NULL, NULL),
(34, 'Penata Rambut', NULL, NULL),
(35, 'Mekanik', NULL, NULL),
(36, 'Seniman', NULL, NULL),
(37, 'Tabib', NULL, NULL),
(38, 'Paraji', NULL, NULL),
(39, 'Perancang Busana', NULL, NULL),
(40, 'Penterjemah', NULL, NULL),
(41, 'Imam Mesjid', NULL, NULL),
(42, 'Pendeta', NULL, NULL),
(43, 'Pastor', NULL, NULL),
(44, 'Wartawan', NULL, NULL),
(45, 'Ustadz/Mubaligh', NULL, NULL),
(46, 'Juru Masak', NULL, NULL),
(47, 'Promotor Acara', NULL, NULL),
(48, 'Anggota DPR-RI', NULL, NULL),
(49, 'Anggota DPD', NULL, NULL),
(50, 'Anggota BPK', NULL, NULL),
(51, 'Presiden', NULL, NULL),
(52, 'Wakil Presiden', NULL, NULL),
(53, 'Anggota MK', NULL, NULL),
(54, 'Anggota Kabinet/Kementerian', NULL, NULL),
(55, 'Duta Besar', NULL, NULL),
(56, 'Gubernur', NULL, NULL),
(57, 'Wakil Gubernur', NULL, NULL),
(58, 'Bupati', NULL, NULL),
(59, 'Wakil Bupati', NULL, NULL),
(60, 'Walikota', NULL, NULL),
(61, 'Wakil Walikota', NULL, NULL),
(62, 'Anggota DPRD Provinsi', NULL, NULL),
(63, 'Anggota DPRD Kabupaten/Kota', NULL, NULL),
(64, 'Dosen', NULL, NULL),
(65, 'Guru', NULL, NULL),
(66, 'Pilot', NULL, NULL),
(67, 'Pengacara', NULL, NULL),
(68, 'Notaris', NULL, NULL),
(69, 'Arsitek', NULL, NULL),
(70, 'Akuntan', NULL, NULL),
(71, 'Konsultan', NULL, NULL),
(72, 'Dokter', NULL, NULL),
(73, 'Bidan', NULL, NULL),
(74, 'Perawat', NULL, NULL),
(75, 'Apoteker', NULL, NULL),
(76, 'Psikiater/Psikolog', NULL, NULL),
(77, 'Penyiar Televisi', NULL, NULL),
(78, 'Penyiar Radio', NULL, NULL),
(79, 'Pelaut', NULL, NULL),
(80, 'Peneliti', NULL, NULL),
(81, 'Spoir', NULL, NULL),
(82, 'Pialang', NULL, NULL),
(83, 'Paranormal', NULL, NULL),
(84, 'Pedagang', NULL, NULL),
(85, 'Perangkat Desa', NULL, NULL),
(86, 'Kepala Desa', NULL, NULL),
(87, 'Biarawati', NULL, NULL),
(88, 'Wiraswasta', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `penduduk`
--

CREATE TABLE `penduduk` (
  `id` bigint UNSIGNED NOT NULL,
  `nik` bigint NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `noKK` bigint NOT NULL,
  `tempatLahir` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggalLahir` date NOT NULL,
  `statusPerkawinan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shdk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenisKelamin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kewarganegaraan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pekerjaan_id` bigint NOT NULL,
  `agama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rt` int NOT NULL,
  `rw` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `penduduk`
--

INSERT INTO `penduduk` (`id`, `nik`, `nama`, `noKK`, `tempatLahir`, `tanggalLahir`, `statusPerkawinan`, `shdk`, `jenisKelamin`, `kewarganegaraan`, `pekerjaan_id`, `agama`, `alamat`, `rt`, `rw`, `created_at`, `updated_at`) VALUES
(1, 1234567890123456, 'John Doe', 1111111111111111, 'Jakarta', '1980-01-01', 'Belum', 'Kepala Keluarga', 'Laki-laki', 'Indonesian', 1, 'Islam', 'Parakan', 1, 1, NULL, NULL),
(2, 1234567890123457, 'Jane Doe', 1111111111111112, 'Surabaya', '1985-02-02', 'Sudah', 'Istri', 'Perempuan', 'Indonesian', 2, 'Kristen', 'Manggungmangu', 1, 2, NULL, NULL),
(3, 1234567890123458, 'Alex Smith', 1111111111111113, 'Bandung', '1990-03-03', 'Belum', 'Anak', 'Laki-laki', 'Indonesian', 3, 'Katholik', 'Tambirejo', 2, 1, NULL, NULL),
(4, 1234567890123459, 'Alice Johnson', 1111111111111114, 'Medan', '1992-04-04', 'Sudah', 'Istri', 'Perempuan', 'Indonesian', 4, 'Konghucu', 'Parakan', 2, 2, NULL, NULL),
(5, 1234567890123460, 'Michael Brown', 1111111111111115, 'Bali', '1983-05-05', 'Belum', 'Kepala Keluarga', 'Laki-laki', 'Indonesian', 5, 'Islam', 'Manggungmangu', 3, 1, NULL, NULL),
(6, 1234567890123461, 'Emily Davis', 1111111111111116, 'Yogyakarta', '1988-06-06', 'Sudah', 'Istri', 'Perempuan', 'Indonesian', 6, 'Kristen', 'Tambirejo', 3, 2, NULL, NULL),
(7, 1234567890123462, 'David Wilson', 1111111111111117, 'Semarang', '1993-07-07', 'Belum', 'Anak', 'Laki-laki', 'Indonesian', 7, 'Katholik', 'Parakan', 4, 1, NULL, NULL),
(8, 1234567890123463, 'Sophia Martinez', 1111111111111118, 'Makassar', '1989-08-08', 'Sudah', 'Istri', 'Perempuan', 'Indonesian', 8, 'Konghucu', 'Manggungmangu', 4, 2, NULL, NULL),
(9, 1234567890123464, 'James Taylor', 1111111111111119, 'Palembang', '1991-09-09', 'Belum', 'Kepala Keluarga', 'Laki-laki', 'Indonesian', 9, 'Islam', 'Tambirejo', 5, 1, NULL, NULL),
(10, 1234567890123465, 'Olivia Lee', 1111111111111120, 'Balikpapan', '1987-10-10', 'Sudah', 'Istri', 'Perempuan', 'Indonesian', 10, 'Kristen', 'Parakan', 5, 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `rt`
--

CREATE TABLE `rt` (
  `id` bigint UNSIGNED NOT NULL,
  `rt` int NOT NULL,
  `ketua_rt` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `rt`
--

INSERT INTO `rt` (`id`, `rt`, `ketua_rt`, `created_at`, `updated_at`) VALUES
(1, 1, 'Ketua RT 1', NULL, NULL),
(2, 2, 'Ketua RT 2', NULL, NULL),
(3, 3, 'Ketua RT 3', NULL, NULL),
(4, 4, 'Ketua RT 4', NULL, NULL),
(5, 5, 'Ketua RT 5', NULL, NULL),
(6, 6, 'Ketua RT 6', NULL, NULL),
(7, 7, 'Ketua RT 7', NULL, NULL),
(8, 8, 'Ketua RT 8', NULL, NULL),
(9, 9, 'Ketua RT 9', NULL, NULL),
(10, 10, 'Ketua RT 10', NULL, NULL),
(11, 11, 'Ketua RT 11', NULL, NULL),
(12, 12, 'Ketua RT 12', NULL, NULL),
(13, 13, 'Ketua RT 13', NULL, NULL),
(14, 14, 'Ketua RT 14', NULL, NULL),
(15, 15, 'Ketua RT 15', NULL, NULL),
(16, 16, 'Ketua RT 16', NULL, NULL),
(17, 17, 'Ketua RT 17', NULL, NULL),
(18, 18, 'Ketua RT 18', NULL, NULL),
(19, 19, 'Ketua RT 19', NULL, NULL),
(20, 20, 'Ketua RT 20', NULL, NULL),
(21, 21, 'Ketua RT 21', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `rw`
--

CREATE TABLE `rw` (
  `id` bigint UNSIGNED NOT NULL,
  `rw` int NOT NULL,
  `ketua_rw` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `rw`
--

INSERT INTO `rw` (`id`, `rw`, `ketua_rw`, `created_at`, `updated_at`) VALUES
(1, 1, 'Ketua RW 1', NULL, NULL),
(2, 2, 'Ketua RW 2', NULL, NULL),
(3, 3, 'Ketua RW 3', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('15JhtxrgCzZEh0mZSB9kJN3Y8AYIPRa9gLF37nOy', 2, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36 Edg/127.0.0.0', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiZWJ0UXJCUTZtYjQxcHVvZWhlOHN1czE0TVVYRDdPeGMzdGZkS3o2VSI7czozOiJ1cmwiO2E6MDp7fXM6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjI3OiJodHRwOi8vMTI3LjAuMC4xOjgwMDAvbG9naW4iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToyO30=', 1723433864),
('2bMj7qbYm5w36P1b4jwLIVoKvVCEnyxqQg9hQE5W', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36 Edg/127.0.0.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiWEoyOUxuMzlESDZmb2RLNHIxWElvdGE4ckR0SU83b1BVaE9qNWVLRSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9sb2dpbiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1723000096),
('emNhq65VGDJOWLjWI8F59Fl5ckmHtb5YGEjHc15b', 2, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36 Edg/127.0.0.0', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiVmxiZGFjV1BNY2RHeFNNQ0dCVDFWNGYyM1lMSWlhOWZKcUhhSnlqayI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzQ6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9kYXRhUGVuZHVkdWsiO31zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToyO30=', 1723434024);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` enum('Admin','User') COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `role`, `password`, `email_verified_at`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin Test', 'admin@gmail.com', 'Admin', '$2y$10$osi903eOQSEQqI0PkSStCOoUDEukft25dP6kDcH5JUFNOH4BSXg9.', NULL, NULL, NULL, NULL),
(2, 'New Admin', 'admin@yahoo.com', 'Admin', '$2y$12$.lKATM4YDKo2C3BU2Vp8Ye0SdKSSsChjNrrUMPbMZRTBYtV8GORFS', NULL, NULL, '2024-08-06 14:08:14', '2024-08-06 14:08:14'),
(3, 'User', 'user@gmail.com', 'User', '$2y$12$3aK4N30es3hoWRFg6PeyeOqm4DS2k77py8IZQhP1iLCoqJFnVrxci', NULL, NULL, '2024-08-06 14:22:12', '2024-08-06 14:22:12');

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
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pekerjaan`
--
ALTER TABLE `pekerjaan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `penduduk`
--
ALTER TABLE `penduduk`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `penduduk_nik_unique` (`nik`);

--
-- Indexes for table `rt`
--
ALTER TABLE `rt`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `rt_rt_unique` (`rt`);

--
-- Indexes for table `rw`
--
ALTER TABLE `rw`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `rw_rw_unique` (`rw`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_id_unique` (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `pekerjaan`
--
ALTER TABLE `pekerjaan`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;

--
-- AUTO_INCREMENT for table `penduduk`
--
ALTER TABLE `penduduk`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `rt`
--
ALTER TABLE `rt`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `rw`
--
ALTER TABLE `rw`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
