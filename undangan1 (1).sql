-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 07, 2020 at 04:53 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `undangan1`
--

-- --------------------------------------------------------

--
-- Table structure for table `akads`
--

CREATE TABLE `akads` (
  `id` int(10) UNSIGNED NOT NULL,
  `tgl_akad` datetime NOT NULL,
  `w_akad_awal` time NOT NULL,
  `w_akad_akhir` time NOT NULL,
  `alamat_akad` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_resepsi` datetime NOT NULL,
  `w_resepsi_awal` time NOT NULL,
  `alamat_resepsi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_hiburan` datetime NOT NULL,
  `w_hiburan_awal` time NOT NULL,
  `hiburan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `peta` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `akads`
--

INSERT INTO `akads` (`id`, `tgl_akad`, `w_akad_awal`, `w_akad_akhir`, `alamat_akad`, `tgl_resepsi`, `w_resepsi_awal`, `alamat_resepsi`, `tgl_hiburan`, `w_hiburan_awal`, `hiburan`, `peta`, `created_at`, `updated_at`) VALUES
(1, '2021-11-28 00:00:00', '08:00:00', '10:00:00', 'Subang Jawabarat', '2021-11-29 00:00:00', '08:00:00', 'Subang Jawabarat', '2021-11-28 00:00:00', '08:00:00', 'pengajian', 'https://goo.gl/maps/jbFbRmMLaDrK1FPQ7', NULL, '2020-09-15 02:34:40');

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama_l` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_p` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img_banner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default.png',
  `img_undangan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default.png',
  `w_pelaksanaan` datetime DEFAULT NULL,
  `wkt_pelaksanaan` time DEFAULT NULL,
  `video_background` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `nama_l`, `nama_p`, `title`, `img_banner`, `img_undangan`, `w_pelaksanaan`, `wkt_pelaksanaan`, `video_background`, `created_at`, `updated_at`) VALUES
(1, 'Yuda Muhtar', 'Ainur', 'The Wedding Of', '1600162100-Screenshot_2020-08-31-13-39-26.png', '1600162100-131108-20190311_164843.jpg', '2021-11-28 00:00:00', '08:00:00', 'https://www.youtube.com/watch?v=r_xi5QDtLZY', NULL, '2020-09-15 02:28:20');

-- --------------------------------------------------------

--
-- Table structure for table `families`
--

CREATE TABLE `families` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default.png',
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `families`
--

INSERT INTO `families` (`id`, `nama`, `foto`, `status`, `created_at`, `updated_at`) VALUES
(18, 'Robert', '1600158403-Ted_templeton_boss_baby.png', 'Ayah mempelai Pria', '2020-09-15 01:26:43', '2020-09-15 01:26:43'),
(19, 'Liana', '1600158454-muslim-mother-holding-baby-muslim-mother-holding-baby-best-mom-pretty-mother-holds-cute-baby-vector-illustration-isolated-127200274.jpg', 'Ibu Mempelai pria', '2020-09-15 01:27:34', '2020-09-15 01:27:34'),
(20, 'Jack', '1600158480-800px_COLOURBOX36150692.jpg', 'Kakak laki-laki mempelai pria', '2020-09-15 01:28:00', '2020-09-15 01:28:00'),
(21, 'Diana', '1600158517-21d965e66b9840d410f6a38c7a61868e.jpg', 'Kakak Perempuan mempelai pria', '2020-09-15 01:28:37', '2020-09-15 01:28:37'),
(22, 'Michael', '1600158569-Ted_templeton_boss_baby.png', 'Ayah mempelai perempuan', '2020-09-15 01:29:29', '2020-09-15 01:29:29'),
(23, 'Lestari', '1600158607-muslim-mother-holding-baby-muslim-mother-holding-baby-best-mom-pretty-mother-holds-cute-baby-vector-illustration-isolated-127200274.jpg', 'Ibu mempelai wanita', '2020-09-15 01:30:07', '2020-09-15 01:30:07'),
(24, 'Deni', '1600158633-cartoon-boy-walking-and-listening-music-player-vector-21624073.jpg', 'Adik mempelai wanita', '2020-09-15 01:30:33', '2020-09-15 01:30:33'),
(25, 'Enma', '1600158674-vector-illustration-kid-listening-music-260nw-1005691816.webp', 'Adik perempuan mempelai wanita', '2020-09-15 01:31:14', '2020-09-15 01:31:14'),
(26, 'Nia Kurnia', '1600162266-21d965e66b9840d410f6a38c7a61868e.jpg', 'kakak perempuan dari mempelai wanita', '2020-09-15 02:31:06', '2020-09-15 02:31:06');

-- --------------------------------------------------------

--
-- Table structure for table `galeries`
--

CREATE TABLE `galeries` (
  `id` int(10) UNSIGNED NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `galeries`
--

INSERT INTO `galeries` (`id`, `photo`, `created_at`, `updated_at`) VALUES
(28, '093724-Screenshot_2020-09-15-15-53-10.png', NULL, NULL),
(29, '093724-Screenshot_2020-09-15-15-52-58.png', NULL, NULL),
(30, '093724-Screenshot_2020-09-15-15-52-29.png', NULL, NULL),
(31, '093724-Screenshot_2020-09-15-15-52-19.png', NULL, NULL),
(32, '093736-Screenshot_2020-08-31-18-21-04.png', NULL, NULL),
(33, '093736-Screenshot_2020-08-31-13-39-26.png', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `mempelais`
--

CREATE TABLE `mempelais` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama_p` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_l` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi_l` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi_p` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo_pria` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default.png',
  `photo_wanita` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default.png',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mempelais`
--

INSERT INTO `mempelais` (`id`, `nama_p`, `nama_l`, `deskripsi_l`, `deskripsi_p`, `photo_pria`, `photo_wanita`, `created_at`, `updated_at`) VALUES
(1, 'Ainur', 'Yuda Muhtar', 'Saya merupakan seorang pengusaha dibidang teknologi dan informasi', 'saya merupakan seorang bla bla blaaa', '1600162171-Screenshot_2020-08-31-18-21-04.png', '1600162171-Screenshot_2020-09-15-15-52-29.png', NULL, '2020-09-15 02:29:31');

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
(3, '2020_08_29_070707_create_banners_table', 2),
(4, '2020_08_31_054235_create_mempelais_table', 3),
(5, '2020_08_31_112346_create_families_table', 4),
(6, '2020_09_01_102634_create_akads_table', 5),
(7, '2020_09_08_104526_create_ucapans_table', 6),
(8, '2020_09_09_112029_create_galeries_table', 7);

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
-- Table structure for table `ucapans`
--

CREATE TABLE `ucapans` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pesan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ucapans`
--

INSERT INTO `ucapans` (`id`, `nama`, `pesan`, `photo`, `created_at`, `updated_at`) VALUES
(7, 'Nurdin', 'semoga samawa', '1599650096-lgo.png', '2020-09-09 04:14:56', '2020-09-09 04:14:56'),
(8, 'Aniati', 'hmm udah nikah aja, selamat ya semoga langseng ..aamiin', '1599650163-bann.png', '2020-09-09 04:16:03', '2020-09-09 04:16:03'),
(9, 'Listi', 'selamat kalian berdua, samawa ya', '1599650220-Vote.jpg', '2020-09-09 04:17:00', '2020-09-09 04:17:00'),
(10, 'ratna', 'selamat ya yuda dan aii semoga langgeng', '1600162538-21d965e66b9840d410f6a38c7a61868e.jpg', '2020-09-15 02:35:38', '2020-09-15 02:35:38');

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
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'My wedding', 'wedding@spektaweb.com', NULL, '$2y$10$.ZuOeuavrSRSi4akg4fWBeBKVERQhpRlHSQLJA4uQdccPH09Lm4Vq', NULL, '2020-08-24 06:05:41', '2020-08-24 06:05:41');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akads`
--
ALTER TABLE `akads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `families`
--
ALTER TABLE `families`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galeries`
--
ALTER TABLE `galeries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mempelais`
--
ALTER TABLE `mempelais`
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
-- Indexes for table `ucapans`
--
ALTER TABLE `ucapans`
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
-- AUTO_INCREMENT for table `akads`
--
ALTER TABLE `akads`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `families`
--
ALTER TABLE `families`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `galeries`
--
ALTER TABLE `galeries`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `mempelais`
--
ALTER TABLE `mempelais`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `ucapans`
--
ALTER TABLE `ucapans`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
