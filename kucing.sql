-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 11, 2022 at 01:53 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kucing`
--

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
-- Table structure for table `gejala`
--

CREATE TABLE `gejala` (
  `id` int(10) UNSIGNED NOT NULL,
  `kode` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gejala` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `gejala`
--

INSERT INTO `gejala` (`id`, `kode`, `gejala`) VALUES
(2, 'G01', 'Nafsu makan yang berlebihan'),
(3, 'G02', 'Sering buang air kecil'),
(4, 'G03', 'Dehidrasi'),
(5, 'G04', 'Berat badan berkurang drastis'),
(6, 'G05', 'Bersin'),
(7, 'G06', 'Masalah pada pernapasan'),
(8, 'G07', 'Demam'),
(9, 'G08', 'Hilang nafsu makan'),
(10, 'G09', 'Lemah lesu'),
(11, 'G10', 'Diare'),
(12, 'G11', 'Muntah'),
(13, 'G12', 'Mata berair'),
(14, 'G13', 'Terjadi gejala kejang-kejang'),
(15, 'G14', 'Melebarnya pupil'),
(16, 'G15', 'Infeksi pada kulit'),
(17, 'G16', 'Pembengkakan pada kelenjar getah bening'),
(18, 'G17', 'Lesi kulit, semacam jaringan abnormal pada kulit'),
(19, 'G18', 'Kelelahan'),
(20, 'G19', 'Anemia'),
(21, 'G20', 'Terdapat darah dalam urine/kencing'),
(22, 'G21', 'Kesulitan buang air kecil'),
(23, 'G22', 'Depresi'),
(24, 'G23', 'Kematian'),
(25, 'G24', 'Diare yang disertai darah'),
(26, 'G25', 'Keluar air liur secara berlebihan'),
(27, 'G26', 'Menggigiti benda'),
(28, 'G27', 'Agresif berlebihan'),
(29, 'G28', 'Menanggapi setiap stimulus'),
(30, 'G29', 'Mengalami kelumpuhan'),
(31, 'G30', 'Bulu Rontok'),
(32, 'G31', 'Sering menggaruk'),
(33, 'G32', 'Terdapat benjolan di ekor dan punggung'),
(34, 'G33', 'Perut kembung atau buncit');

-- --------------------------------------------------------

--
-- Table structure for table `gejala_penyakit`
--

CREATE TABLE `gejala_penyakit` (
  `penyakit_id` int(10) UNSIGNED NOT NULL,
  `gejala_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jawaban`
--

CREATE TABLE `jawaban` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `jawaban` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nilai` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jawaban`
--

INSERT INTO `jawaban` (`id`, `jawaban`, `nilai`) VALUES
(1, 'Pasti Tidak', 0.1),
(2, 'Hampir Tidak Pasti', 0.2),
(3, 'Kemungkinan Besar Tidak', 0.3),
(4, 'Mungkin Tidak', 0.4),
(5, 'Tidak Tahu', 0.5),
(6, 'Mungkin', 0.6),
(7, 'Kemungkinan Besar', 0.7),
(8, 'Hampir Pasti', 0.8),
(9, 'Pasti', 1);

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
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_11_06_231939_create_penyakit_table', 2),
(5, '2021_11_06_233111_create_gejala_table', 3),
(6, '2021_11_06_234311_create_jawaban_table', 4),
(7, '2021_11_07_070059_create_rule_table', 5),
(8, '2021_11_07_115031_create_rule_table', 6),
(9, '2021_11_07_124318_create_rule_table', 7),
(10, '2021_11_07_130431_create_rule_table', 8);

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
-- Table structure for table `penyakit`
--

CREATE TABLE `penyakit` (
  `id` int(10) UNSIGNED NOT NULL,
  `kode` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `penyakit` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `penyakit`
--

INSERT INTO `penyakit` (`id`, `kode`, `penyakit`) VALUES
(13, 'P01', 'Diabetes'),
(14, 'P02', 'Feline Leukimia Virus'),
(15, 'P03', 'Infeksi Jamur'),
(16, 'P04', 'Penyakit Saluran Kemih'),
(17, 'P05', 'Feline Panleukopenia'),
(18, 'P06', 'Rabies'),
(19, 'P07', 'Stud Tail'),
(20, 'P08', 'Ispa atau Flu Kucing'),
(21, 'P09', 'Ring Worm'),
(22, 'P10', 'Cacingan');

-- --------------------------------------------------------

--
-- Table structure for table `rule`
--

CREATE TABLE `rule` (
  `id` int(10) UNSIGNED NOT NULL,
  `rule` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `if` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nilai` double(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `rule`
--

INSERT INTO `rule` (`id`, `rule`, `if`, `nilai`) VALUES
(1, 'Rule1', 'if ($request->G01 AND $request->G02 AND $request->G03 AND $request->G04)', 1.00),
(2, 'Rule2', 'if ($request->G01 AND $request->G02 AND $request->G03)', 0.75),
(3, 'Rule3', 'if ($request->G01 AND $request->G02)', 0.50),
(4, 'Rule4', '', 1.00);

-- --------------------------------------------------------

--
-- Table structure for table `rule_gejala`
--

CREATE TABLE `rule_gejala` (
  `id` int(10) UNSIGNED NOT NULL,
  `rule_id` int(10) UNSIGNED NOT NULL,
  `gejala_kode` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `rule_gejala`
--

INSERT INTO `rule_gejala` (`id`, `rule_id`, `gejala_kode`) VALUES
(1, 1, 'G01'),
(2, 1, 'G02'),
(3, 1, 'G03'),
(4, 1, 'G04'),
(5, 2, 'G01'),
(6, 2, 'G02'),
(7, 2, 'G03'),
(8, 3, 'G01'),
(9, 3, 'G02'),
(10, 4, 'G04'),
(11, 4, 'G06'),
(12, 4, 'G10'),
(13, 4, 'G11'),
(14, 4, 'G12'),
(15, 4, 'G14'),
(16, 4, 'G15'),
(17, 4, 'G16'),
(18, 4, 'G17'),
(19, 4, 'G19'),
(20, 4, 'G20');

-- --------------------------------------------------------

--
-- Table structure for table `rule_penyakit`
--

CREATE TABLE `rule_penyakit` (
  `rule_id` int(10) UNSIGNED NOT NULL,
  `penyakit_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `rule_penyakit`
--

INSERT INTO `rule_penyakit` (`rule_id`, `penyakit_id`) VALUES
(1, 13),
(2, 13),
(3, 13),
(4, 14);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `position` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
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

INSERT INTO `users` (`id`, `name`, `username`, `position`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Administrator', 'Admin', 'Administrator', 'admin@gmail.com', NULL, '$2y$10$uD2qB0qrVH.Zapy5H1V5POvXySBvXPdNwxR068z4iwJemk4YGTQNG', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `gejala`
--
ALTER TABLE `gejala`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gejala_penyakit`
--
ALTER TABLE `gejala_penyakit`
  ADD KEY `gejala_penyakit_penyakit_id_foreign` (`penyakit_id`),
  ADD KEY `gejala_penyakit_gejala_id_foreign` (`gejala_id`);

--
-- Indexes for table `jawaban`
--
ALTER TABLE `jawaban`
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
-- Indexes for table `penyakit`
--
ALTER TABLE `penyakit`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rule`
--
ALTER TABLE `rule`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rule_gejala`
--
ALTER TABLE `rule_gejala`
  ADD PRIMARY KEY (`id`),
  ADD KEY `rule_gejala_rule_id_foreign` (`rule_id`);

--
-- Indexes for table `rule_penyakit`
--
ALTER TABLE `rule_penyakit`
  ADD KEY `rule_penyakit_rule_id_foreign` (`rule_id`),
  ADD KEY `rule_penyakit_penyakit_id_foreign` (`penyakit_id`);

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
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gejala`
--
ALTER TABLE `gejala`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `jawaban`
--
ALTER TABLE `jawaban`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `penyakit`
--
ALTER TABLE `penyakit`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `rule`
--
ALTER TABLE `rule`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `rule_gejala`
--
ALTER TABLE `rule_gejala`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `gejala_penyakit`
--
ALTER TABLE `gejala_penyakit`
  ADD CONSTRAINT `gejala_penyakit_gejala_id_foreign` FOREIGN KEY (`gejala_id`) REFERENCES `gejala` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `gejala_penyakit_penyakit_id_foreign` FOREIGN KEY (`penyakit_id`) REFERENCES `penyakit` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `rule_gejala`
--
ALTER TABLE `rule_gejala`
  ADD CONSTRAINT `rule_gejala_rule_id_foreign` FOREIGN KEY (`rule_id`) REFERENCES `rule` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `rule_penyakit`
--
ALTER TABLE `rule_penyakit`
  ADD CONSTRAINT `rule_penyakit_penyakit_id_foreign` FOREIGN KEY (`penyakit_id`) REFERENCES `penyakit` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `rule_penyakit_rule_id_foreign` FOREIGN KEY (`rule_id`) REFERENCES `rule_gejala` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
