-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 12 Jul 2024 pada 17.10
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `servis_mobil`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_layanan`
--

CREATE TABLE `detail_layanan` (
  `id` int(11) NOT NULL,
  `pekerjaan` varchar(255) NOT NULL,
  `biaya` double NOT NULL,
  `layanan_id` int(11) DEFAULT NULL,
  `pj_montir_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `detail_layanan`
--

INSERT INTO `detail_layanan` (`id`, `pekerjaan`, `biaya`, `layanan_id`, `pj_montir_id`) VALUES
(1, 'ganti oli mootro', 75000, 1, 4),
(2, 'ganti rem dan kampas motor', 250000, 3, 3),
(4, 'minyak rem mobil', 45000, 1, 2),
(6, 'kelistrikan motor brok', 35000, 1, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori_montir`
--

CREATE TABLE `kategori_montir` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `kategori_montir`
--

INSERT INTO `kategori_montir` (`id`, `nama`) VALUES
(1, 'Mesin'),
(2, 'Mesin'),
(3, 'Kelistrikan'),
(4, 'Sistem Suspensi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `layanan`
--

CREATE TABLE `layanan` (
  `id` int(11) NOT NULL,
  `kode` varchar(50) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `deskripsi` text DEFAULT NULL,
  `jenis_layanan_id` int(11) DEFAULT NULL,
  `total_biaya` decimal(10,2) DEFAULT NULL,
  `rating` decimal(3,2) DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `layanan`
--

INSERT INTO `layanan` (`id`, `kode`, `nama`, `deskripsi`, `jenis_layanan_id`, `total_biaya`, `rating`, `updated_at`, `created_at`) VALUES
(1, 'LY001', 'Ganti Oli', 'Ganti oli mesin standar', 1, 300000.00, 4.50, '2024-07-12 13:30:36', '2024-07-12 13:30:49'),
(2, 'LY002', 'Perbaikan Kelistrikan', 'Perbaikan kelistrikan umum', 2, 500000.00, 4.70, '2024-07-12 13:30:36', '2024-07-12 13:30:49'),
(3, 'LY003', 'Perawatan Suspensi', 'Perawatan suspensi khusus', 3, 700000.00, 4.60, '2024-07-12 13:30:36', '2024-07-12 13:30:49'),
(4, 'LY004', 'Perawatan Suspensi', 'Meliputi pengecekan dan penggantian komponen suspensi yang rusak atau aus untuk memastikan kenyamanan berkendara dan keamanan.', NULL, 300000.00, 4.00, '2024-07-12 06:41:50', '2024-07-12 06:41:50');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2024_07_10_035854_create_montirs_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `montir`
--

CREATE TABLE `montir` (
  `id` int(11) NOT NULL,
  `nomor` varchar(50) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `gender` enum('L','P') NOT NULL,
  `tgl_lahir` date NOT NULL,
  `tmp_lahir` varchar(100) NOT NULL,
  `keahlian` varchar(255) NOT NULL,
  `kategori_montir_id` int(11) DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `montir`
--

INSERT INTO `montir` (`id`, `nomor`, `nama`, `gender`, `tgl_lahir`, `tmp_lahir`, `keahlian`, `kategori_montir_id`, `updated_at`, `created_at`) VALUES
(1, 'MN023', 'Budi', 'L', '2024-07-02', 'Bogor', 'alat mesin', 4, '2024-07-12 07:10:04', '2024-07-12 14:10:04'),
(7, 'MN001', 'John cenaa', 'L', '1985-01-15', 'Jakarta', 'Ahli mesin dan transmisi', 1, '2024-07-12 06:33:45', '2024-07-12 13:33:45'),
(8, 'MN002', 'Jane Smith', 'L', '1990-04-22', 'Bandung', 'Ahli kelistrikan mobil', 2, '2024-07-12 06:33:49', '2024-07-12 13:33:49'),
(9, 'MN003', 'Michael Johnson', 'L', '1987-07-30', 'Surabaya', 'Ahli sistem suspensi dan rem', 3, '2024-07-12 06:33:55', '2024-07-12 13:33:55'),
(10, 'MN004', 'Alice Brown', 'L', '1992-11-05', 'Medan', 'Ahli mesin dan kelistrikan', 1, '2024-07-12 06:33:59', '2024-07-12 13:33:59'),
(11, 'MN005', 'Bob White', 'L', '1980-06-18', 'Yogyakarta', 'Ahli transmisi dan rem', 3, '2024-07-12 06:34:17', '2024-07-12 13:34:17'),
(12, 'MN006', 'Charlie Black', 'L', '1983-09-22', 'Semarang', 'Ahli kelistrikan dan AC mobil', 2, '2024-07-12 06:34:22', '2024-07-12 13:34:22'),
(13, 'MN007', 'Diana Green', 'L', '1995-02-14', 'Denpasar', 'Ahli sistem suspensi', 3, '2024-07-12 06:34:28', '2024-07-12 13:34:28'),
(14, 'MN008', 'Eddie Blue', 'L', '1988-03-30', 'Makassar', 'Ahli mesin dan injeksi', 1, '2024-07-12 06:34:33', '2024-07-12 13:34:33'),
(15, 'MN009', 'Fiona Grey', 'L', '1991-07-12', 'Malang', 'Ahli kelistrikan dan audio mobil', 2, '2024-07-12 06:34:37', '2024-07-12 13:34:37'),
(16, 'MN010', 'George Red', 'L', '1984-12-25', 'Surakarta', 'Ahli rem dan suspensi', 3, '2024-07-12 06:34:41', '2024-07-12 13:34:41');

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('JxJzj03xh7dBcQTId36VBuDhIPbeL2hNi5fiKDUE', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/126.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiRndaamZQTVdHZlBKcU1TVktJNGppNXNGeW5pTDhZT0o5d3hxY2FYVCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fX0=', 1720793513);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL DEFAULT 'Montir',
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Sri Lusiana', 'srilusiana46@gmail.com', NULL, '$2y$12$WQQuMhE0UapVapWk9EUD8.gSUZIgkFzdMqSbZIRU3oN2hMzGCJ5ju', 'Montir', NULL, '2024-07-01 08:41:26', '2024-07-01 08:41:26'),
(2, 'admin', 'admin@gmail.com', NULL, '$2y$12$IfGdpOIfBpvtpX6c/djE7ObiW7Q46Q0tpUnsjdSPJWA62WAj9jEcy', 'administrator', NULL, '2024-07-01 08:47:10', '2024-07-01 08:47:10'),
(3, 'montir 1', 'montir1@gmail.com', NULL, '$2y$12$7o/JBeZpa0y2sLrmuhcBIeb0wUcoWEGoSYn8pvh8RJq2FJxlS7odq', 'Montir', NULL, '2024-07-11 00:02:26', '2024-07-11 00:02:26'),
(4, 'Budi Santoso', 'budisan@gmail.com', NULL, '$2y$12$1HsmoAJp6EobxV.WRZbWNuBhvxv3IkgE1kFy22B//qpMeKuNWB0oa', 'Montir', NULL, '2024-07-11 00:16:33', '2024-07-11 00:16:33'),
(5, 'Roger Albert', 'roger12@gmail.com', NULL, '$2y$12$9ltreDL3SXLYqYPlMXwJfOg0MJpH.1ffin0CdQAtkem.pmTrGzYRS', 'Montir', NULL, '2024-07-11 00:18:14', '2024-07-11 00:18:14'),
(6, 'shafwan', 'shafwan@gmail.com', NULL, '$2y$12$BeqO8587MAzk.N/sMwRBxuYOcyuaHr0senvdSK8oUrj5ILF5tvaQS', 'Montir', NULL, '2024-07-11 06:48:22', '2024-07-11 06:48:22'),
(7, 'husnul', 'minull@gmail.com', NULL, '$2y$12$1dbtQlTFguoeYwvSafKcRuXJh2hkUUvpHy.aHURBDuakrN26gITvq', 'Montir', NULL, '2024-07-12 02:15:28', '2024-07-12 02:15:28'),
(8, 'tiara', 'titi@gmail.com', NULL, '$2y$12$S4xMInigdwwJd.ZBeitvgu.SHgSlShKuK7agOwqB6eKJJh6jEPN3G', 'Montir', NULL, '2024-07-12 02:16:17', '2024-07-12 02:16:17'),
(9, 'sela', 'sela@gmail.com', NULL, '$2y$12$6bLcmQVf0.yRJN09Sl2Xaej0E1LOUcoi5ldF7vKuD/K9WxIMakLUu', 'Montir', NULL, '2024-07-12 02:18:53', '2024-07-12 02:18:53'),
(10, 'Sri Lusiana', 'srilusaiana@gmail.com', NULL, '$2y$12$rYZf8y5MLkxC1D.hqTaD.OHX1wcEr.yBHkmZ0mNInL2NtLQTLrgta', 'Montir', NULL, '2024-07-12 07:07:36', '2024-07-12 07:07:36');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indeks untuk tabel `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indeks untuk tabel `detail_layanan`
--
ALTER TABLE `detail_layanan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `layanan_id` (`layanan_id`),
  ADD KEY `pj_montir_id` (`pj_montir_id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indeks untuk tabel `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kategori_montir`
--
ALTER TABLE `kategori_montir`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `layanan`
--
ALTER TABLE `layanan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `montir`
--
ALTER TABLE `montir`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kategori_montir_id` (`kategori_montir_id`);

--
-- Indeks untuk tabel `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indeks untuk tabel `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

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
-- AUTO_INCREMENT untuk tabel `detail_layanan`
--
ALTER TABLE `detail_layanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `kategori_montir`
--
ALTER TABLE `kategori_montir`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `layanan`
--
ALTER TABLE `layanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `montir`
--
ALTER TABLE `montir`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `detail_layanan`
--
ALTER TABLE `detail_layanan`
  ADD CONSTRAINT `detail_layanan_ibfk_1` FOREIGN KEY (`layanan_id`) REFERENCES `layanan` (`id`);

--
-- Ketidakleluasaan untuk tabel `montir`
--
ALTER TABLE `montir`
  ADD CONSTRAINT `montir_ibfk_1` FOREIGN KEY (`kategori_montir_id`) REFERENCES `kategori_montir` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
