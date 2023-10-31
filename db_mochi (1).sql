-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 31, 2023 at 04:19 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_mochi`
--

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(127, '2014_10_12_000000_create_users_table', 1),
(128, '2014_10_12_100000_create_password_resets_table', 1),
(129, '2019_08_19_000000_create_failed_jobs_table', 1),
(130, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(131, '2023_10_16_075955_create_tb_inventory', 1),
(132, '2023_10_16_081028_create_tb_manufacture', 1),
(133, '2023_10_16_094442_add_deleted_at_to_tb_inventory', 1),
(134, '2023_10_16_102112_add_deleted_at_to_tb_manufacture', 1),
(135, '2023_10_18_022843_create_tb_bom', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `tb_bom`
--

CREATE TABLE `tb_bom` (
  `kode_bom` varchar(100) NOT NULL,
  `kode_produk` varchar(20) NOT NULL,
  `tanggal` varchar(20) NOT NULL,
  `total_harga` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_bom`
--

INSERT INTO `tb_bom` (`kode_bom`, `kode_produk`, `tanggal`, `total_harga`) VALUES
('b001', 'Prd1', '2023/10/31', 45000000),
('c001', 'Prd1', '2023/10/31', 14400);

-- --------------------------------------------------------

--
-- Table structure for table `tb_bom_list`
--

CREATE TABLE `tb_bom_list` (
  `kode_bom_list` int(11) NOT NULL,
  `kode_bom` varchar(100) NOT NULL,
  `kode_produk` varchar(20) NOT NULL,
  `quantity` float NOT NULL,
  `satuan` varchar(10) NOT NULL DEFAULT 'etc'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_bom_list`
--

INSERT INTO `tb_bom_list` (`kode_bom_list`, `kode_bom`, `kode_produk`, `quantity`, `satuan`) VALUES
(35, '1', '4', 96, '-'),
(46, 'b001', '14', 100, '-'),
(47, 'c001', '3', 1.2, '-');

-- --------------------------------------------------------

--
-- Table structure for table `tb_inventory`
--

CREATE TABLE `tb_inventory` (
  `id_bahan` bigint(20) UNSIGNED NOT NULL,
  `kode_bahan` varchar(7) NOT NULL,
  `nama_bahan` varchar(30) NOT NULL,
  `jumlah` varchar(50) NOT NULL,
  `harga` varchar(50) NOT NULL,
  `perusahaan` varchar(50) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `tb_inventory`
--

INSERT INTO `tb_inventory` (`id_bahan`, `kode_bahan`, `nama_bahan`, `jumlah`, `harga`, `perusahaan`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'KB00001', 'Tepung', '1', '300', 'Unilever', '2023-10-23 04:08:43', '2023-10-23 07:07:03', '2023-10-23 07:07:03'),
(2, 'KB00001', 'Tepung', '1', '300', 'Unileverr', '2023-10-23 04:09:03', '2023-10-23 07:07:08', '2023-10-23 07:07:08'),
(3, 'Bhn1', 'Tepung Ketan', '1', '12000', 'Unilever', '2023-10-23 07:08:51', '2023-10-23 07:08:51', NULL),
(4, 'Bhn2', 'Gula Pasir', '1', '14000', 'Unilever', '2023-10-23 07:09:16', '2023-10-23 07:09:16', NULL),
(5, 'Bhn3', 'Air', '15', '4000', 'Unilever', '2023-10-23 07:11:26', '2023-10-23 07:11:26', NULL),
(6, 'Bhn4', 'Susu Bubuk', '1', '35000', 'Unilever', '2023-10-23 07:12:29', '2023-10-23 07:12:29', NULL),
(7, 'Bhn5', 'Bubuk Taro', '1', '70000', 'Unilever', '2023-10-23 07:13:50', '2023-10-23 07:13:50', NULL),
(8, 'Bhn6', 'Tepung Meizena', '1', '25000', 'Unilever', '2023-10-23 07:14:51', '2023-10-23 07:14:51', NULL),
(9, 'Bhn7', 'Es Krim', '8', '240000', 'Unilever', '2023-10-23 07:16:59', '2023-10-23 07:16:59', NULL),
(10, 'Bhn8', 'Susu Rasa Strawberry', '1', '35000', 'Unilever', '2023-10-23 07:20:05', '2023-10-23 07:20:05', NULL),
(11, 'Bhn9', 'Garam', '1', '8000', 'Unilever', '2023-10-23 07:21:54', '2023-10-23 07:21:54', NULL),
(12, 'Bhn10', 'Pewarna Makanan', '1', '60000', 'Unilever', '2023-10-23 07:22:51', '2023-10-23 07:22:51', NULL),
(13, 'Bhn11', 'Buah Strawberry', '1', '60000', 'Kebun Jaya', '2023-10-23 07:23:51', '2023-10-23 07:23:51', NULL),
(14, 'Bhn12', 'Kacang Merah', '1', '450000', 'Unilever', '2023-10-23 07:24:35', '2023-10-23 07:24:35', NULL),
(15, 'Bhn12', 'Minyak Sayur', '1', '16000', 'Unilever', '2023-10-23 07:25:27', '2023-10-23 07:25:27', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tb_manufacture`
--

CREATE TABLE `tb_manufacture` (
  `id_produk` bigint(20) UNSIGNED NOT NULL,
  `kode_produk` varchar(7) NOT NULL,
  `nama_produk` varchar(20) NOT NULL,
  `jumlah` int(30) NOT NULL,
  `harga_jual` int(50) NOT NULL,
  `biaya_produksi` varchar(50) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `status` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `tb_manufacture`
--

INSERT INTO `tb_manufacture` (`id_produk`, `kode_produk`, `nama_produk`, `jumlah`, `harga_jual`, `biaya_produksi`, `gambar`, `created_at`, `updated_at`, `deleted_at`, `status`) VALUES
(1, 'Prd1', 'mochi ice cream', 250, 250, '5000', '1698068272.jpg', '2023-10-23 05:39:15', '2023-10-23 06:37:52', NULL, 1),
(2, 'Prd2', 'Ichigo Daifuku Mochi', 200, 5000, '4500', '1698068057.jpg', '2023-10-23 06:34:17', '2023-10-23 06:34:17', NULL, 1),
(3, 'Prd3', 'Daifuku Mochi', 230, 4500, '3000', '1698068087.jpg', '2023-10-23 06:34:47', '2023-10-23 06:34:47', NULL, 1),
(4, 'Prd4', 'Apasaja', 2300, 1500, '2000', '1698068434.jpg', '2023-10-23 06:40:34', '2023-10-23 06:40:34', NULL, 1);

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`) USING BTREE;

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`email`) USING BTREE;

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`) USING BTREE,
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`) USING BTREE;

--
-- Indexes for table `tb_bom`
--
ALTER TABLE `tb_bom`
  ADD PRIMARY KEY (`kode_bom`);

--
-- Indexes for table `tb_bom_list`
--
ALTER TABLE `tb_bom_list`
  ADD PRIMARY KEY (`kode_bom_list`);

--
-- Indexes for table `tb_inventory`
--
ALTER TABLE `tb_inventory`
  ADD PRIMARY KEY (`id_bahan`) USING BTREE;

--
-- Indexes for table `tb_manufacture`
--
ALTER TABLE `tb_manufacture`
  ADD PRIMARY KEY (`id_produk`) USING BTREE;

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD UNIQUE KEY `users_email_unique` (`email`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=136;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_bom_list`
--
ALTER TABLE `tb_bom_list`
  MODIFY `kode_bom_list` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `tb_inventory`
--
ALTER TABLE `tb_inventory`
  MODIFY `id_bahan` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tb_manufacture`
--
ALTER TABLE `tb_manufacture`
  MODIFY `id_produk` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
