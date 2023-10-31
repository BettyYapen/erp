-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 31, 2023 at 02:40 PM
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

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_manufacture`
--
ALTER TABLE `tb_manufacture`
  ADD PRIMARY KEY (`id_produk`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_manufacture`
--
ALTER TABLE `tb_manufacture`
  MODIFY `id_produk` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
