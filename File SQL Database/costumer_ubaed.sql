-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 16 Jul 2023 pada 18.34
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `costumer_ubaed`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `costumers`
--

CREATE TABLE `costumers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('NEW COSTUMER','LOYAL COSTUMER','','') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `costumers`
--

INSERT INTO `costumers` (`id`, `user_id`, `name`, `email`, `status`, `created_at`, `updated_at`) VALUES
(1, 4, 'Ubaed Shibghahtallah Ashri Muharam', 'ubaedasam@gmail.com', 'NEW COSTUMER', '2023-07-15 13:56:11', '2023-07-15 13:56:59'),
(2, 4, 'Ubaed Loyal', 'ubaedasam@gmail.com', 'LOYAL COSTUMER', '2023-07-15 14:03:11', '2023-07-15 14:03:59'),
(9, 4, 'Hester Mante', 'manderson@yahoo.com', 'LOYAL COSTUMER', '2023-07-15 23:38:39', '2023-07-15 23:38:39'),
(10, 4, 'Evans Collins', 'schuyler.koss@hotmail.com', 'LOYAL COSTUMER', '2023-07-15 23:38:40', '2023-07-15 23:38:40'),
(11, 4, 'Santos Keebler', 'albert.hagenes@yahoo.com', 'NEW COSTUMER', '2023-07-15 23:38:40', '2023-07-15 23:38:40'),
(12, 4, 'Maiya Leannon', 'kody42@yahoo.com', 'LOYAL COSTUMER', '2023-07-15 23:38:40', '2023-07-15 23:38:40'),
(13, 4, 'Noelia Feest', 'bartoletti.blair@gmail.com', 'LOYAL COSTUMER', '2023-07-15 23:38:40', '2023-07-15 23:38:40'),
(15, 4, 'Miss Madisyn Bins Sr.', 'oleta.hegmann@gmail.com', 'LOYAL COSTUMER', '2023-07-15 23:38:41', '2023-07-15 23:38:41'),
(16, 4, 'Isaias Torp', 'bartoletti.noe@yahoo.com', 'LOYAL COSTUMER', '2023-07-15 23:38:41', '2023-07-15 23:38:41'),
(17, 4, 'Ms. Vada Trantow I', 'trantow.christy@hotmail.com', 'LOYAL COSTUMER', '2023-07-15 23:38:41', '2023-07-15 23:38:41'),
(18, 4, 'Adam VonRueden', 'destany.jenkins@yahoo.com', 'LOYAL COSTUMER', '2023-07-15 23:38:41', '2023-07-15 23:38:41'),
(19, 4, 'Rogelio Pfeffer', 'urussel@hotmail.com', 'LOYAL COSTUMER', '2023-07-15 23:38:42', '2023-07-15 23:38:42'),
(20, 4, 'Ms. Ova Hand', 'waelchi.mozelle@gmail.com', 'LOYAL COSTUMER', '2023-07-15 23:38:42', '2023-07-15 23:38:42'),
(21, 4, 'Jayce Emmerich', 'cdaniel@gmail.com', 'NEW COSTUMER', '2023-07-15 23:38:42', '2023-07-15 23:38:42'),
(22, 4, 'Eldon Eichmann', 'stokes.keyshawn@yahoo.com', 'NEW COSTUMER', '2023-07-15 23:38:42', '2023-07-15 23:38:42'),
(23, 4, 'Lewis Collins', 'david.christiansen@gmail.com', 'NEW COSTUMER', '2023-07-15 23:38:42', '2023-07-15 23:38:42'),
(24, 4, 'Gino Ruecker', 'andy.smith@yahoo.com', 'LOYAL COSTUMER', '2023-07-15 23:38:43', '2023-07-15 23:38:43'),
(25, 4, 'Dr. Cathryn Douglas III', 'fisher.rosemary@yahoo.com', 'LOYAL COSTUMER', '2023-07-15 23:38:43', '2023-07-15 23:38:43'),
(26, 4, 'Emmanuel VonRueden', 'zemard@gmail.com', 'NEW COSTUMER', '2023-07-15 23:38:43', '2023-07-15 23:38:43'),
(27, 4, 'Juston Cartwright', 'powlowski.muhammad@yahoo.com', 'NEW COSTUMER', '2023-07-15 23:38:43', '2023-07-15 23:38:43'),
(28, 4, 'Hildegard Shanahan', 'karlie70@hotmail.com', 'NEW COSTUMER', '2023-07-15 23:38:43', '2023-07-15 23:38:43'),
(29, 4, 'Ubaed S.A.M loading', 'ubaedasam@gmail.com', 'NEW COSTUMER', '2023-07-16 05:01:39', '2023-07-16 05:01:39'),
(30, 4, 'Ubaed S.A.M loading', 'ubaedasam@gmail.com', 'NEW COSTUMER', '2023-07-16 05:02:20', '2023-07-16 05:02:20'),
(31, 4, 'Ubaed Baru', 'ubaedasam@gmail.com', 'NEW COSTUMER', '2023-07-16 05:05:01', '2023-07-16 05:05:01'),
(32, 4, 'untuk dihapus', 'ubaedasam@gmail.com', 'NEW COSTUMER', '2023-07-16 05:20:43', '2023-07-16 05:20:43'),
(33, 4, 'Putri Sulis', 'ubaedasam@gmail.com', 'NEW COSTUMER', '2023-07-16 09:23:37', '2023-07-16 09:23:37');

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_07_14_023207_create_costumers_table', 1),
(6, '2023_07_14_040041_create_verify_users_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified` int(11) DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `email_verified_at`, `password`, `remember_token`, `email_verified`, `created_at`, `updated_at`) VALUES
(4, 'ubaed', 'ubaedasam@gmail.com', NULL, '$2y$10$w2J6S7A8MXV1h.1ERIv/T.vlVUya6ZUt11Ao.YGAMmpNy0QYSs79e', NULL, 1, '2023-07-14 02:14:03', '2023-07-14 02:43:20');

-- --------------------------------------------------------

--
-- Struktur dari tabel `verify_users`
--

CREATE TABLE `verify_users` (
  `user_id` int(11) NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `verify_users`
--

INSERT INTO `verify_users` (`user_id`, `token`, `created_at`, `updated_at`) VALUES
(1, '1b650a2ce878e74f7377decac5d03b24579788187c565f6762d0f0cf8afb24a50', '2023-07-14 01:59:40', '2023-07-14 01:59:40'),
(2, '2df7425d71c368ecf18e59cd71ee163f6369def8672956fda8dae91d11828481c', '2023-07-14 02:02:21', '2023-07-14 02:02:21'),
(3, '3a0439b32c45fbc1945eb4ba70675be2fbd41f026597b498fc4f9545999b835f2', '2023-07-14 02:06:59', '2023-07-14 02:06:59'),
(4, '40e623fbd57a8db95f7e3894f780166b9a30e340aca90132a554eab3e62f98531', '2023-07-14 02:14:03', '2023-07-14 02:14:03'),
(5, '5f04f7267ef6898455f895e596a602b2a2d65318e0f247cd4fbe7b4c3d7c59420', '2023-07-16 02:29:19', '2023-07-16 02:29:19'),
(6, '6c48121b1dbe89e076c3e3c0307e6d04039da3940cddc55e3ed8a47f524fc58f1', '2023-07-16 02:41:17', '2023-07-16 02:41:17');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `costumers`
--
ALTER TABLE `costumers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `costumers_user_id_foreign` (`user_id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

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
-- AUTO_INCREMENT untuk tabel `costumers`
--
ALTER TABLE `costumers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `costumers`
--
ALTER TABLE `costumers`
  ADD CONSTRAINT `costumers_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
