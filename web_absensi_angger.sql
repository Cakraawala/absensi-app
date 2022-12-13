-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 29 Nov 2022 pada 08.28
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web_absensi_angger`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `absensis`
--

CREATE TABLE `absensis` (
  `id_absensi` bigint(20) UNSIGNED NOT NULL,
  `id_siswa` bigint(20) UNSIGNED NOT NULL,
  `keterangan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `absensis`
--

INSERT INTO `absensis` (`id_absensi`, `id_siswa`, `keterangan`, `tanggal`, `created_at`, `updated_at`) VALUES
(1, 43, 'Ijin', '2022-11-28', '2022-11-28 23:44:59', '2022-11-28 23:44:59'),
(2, 4, 'Sakit', '2022-11-29', '2022-11-28 23:44:59', '2022-11-29 00:27:26'),
(3, 39, 'Ijin', '2022-11-28', '2022-11-28 23:44:59', '2022-11-28 23:44:59'),
(4, 5, 'Ijin', '2022-11-28', '2022-11-28 23:44:59', '2022-11-28 23:44:59'),
(6, 29, 'Ijin', '2022-12-29', '2022-11-28 23:44:59', '2022-11-28 23:44:59'),
(7, 28, 'Sakit', '2023-01-29', '2022-11-28 23:44:59', '2022-11-28 23:44:59'),
(8, 30, 'Sakit', '2023-03-01', '2022-11-28 23:44:59', '2022-11-28 23:44:59'),
(17, 10, 'Ijin', '2022-11-29', '2022-11-29 00:15:25', '2022-11-29 00:25:48'),
(19, 6, 'Ijin', '2022-11-29', '2022-11-29 00:20:21', '2022-11-29 00:25:42');

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
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
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_11_23_014322_create_siswas_table', 1),
(6, '2022_11_23_014553_create_absensis_table', 1);

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
-- Struktur dari tabel `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswas`
--

CREATE TABLE `siswas` (
  `id_siswa` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `notelp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `siswas`
--

INSERT INTO `siswas` (`id_siswa`, `nama`, `email`, `alamat`, `notelp`, `created_at`, `updated_at`) VALUES
(3, 'Agam Suteguh', 'agam@gmail.com', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum voluptate reprehenderit sunt fugit officiis nobis laborum voluptas corrupti alias temporibus eaque excepturi, unde soluta sint! Aliquam optio quia tempore? Debitis.', '08172207762', '2022-11-28 23:44:57', '2022-11-28 23:44:57'),
(4, 'Albert Einstein', 'albert@gmail.com', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum voluptate reprehenderit sunt fugit officiis nobis laborum voluptas corrupti alias temporibus eaque excepturi, unde soluta sint! Aliquam optio quia tempore? Debitis.', '08243254898', '2022-11-28 23:44:57', '2022-11-28 23:44:57'),
(5, 'Alendra Vereno Alfarel', 'farel@gmail.com', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum voluptate reprehenderit sunt fugit officiis nobis laborum voluptas corrupti alias temporibus eaque excepturi, unde soluta sint! Aliquam optio quia tempore? Debitis.', '08068826396', '2022-11-28 23:44:57', '2022-11-28 23:44:57'),
(6, 'Alvin Jeprando Barimbing', 'alvin@gmail.com', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum voluptate reprehenderit sunt fugit officiis nobis laborum voluptas corrupti alias temporibus eaque excepturi, unde soluta sint! Aliquam optio quia tempore? Debitis.', '08759359876', '2022-11-28 23:44:57', '2022-11-28 23:44:57'),
(7, 'Amelia Safitri', 'amel@gmail.com', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum voluptate reprehenderit sunt fugit officiis nobis laborum voluptas corrupti alias temporibus eaque excepturi, unde soluta sint! Aliquam optio quia tempore? Debitis.', '08117344358', '2022-11-28 23:44:57', '2022-11-28 23:44:57'),
(8, 'Andini Novitasari', 'andini@gmail.com', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum voluptate reprehenderit sunt fugit officiis nobis laborum voluptas corrupti alias temporibus eaque excepturi, unde soluta sint! Aliquam optio quia tempore? Debitis.', '08409843658', '2022-11-28 23:44:57', '2022-11-28 23:44:57'),
(9, 'Angger Cakra Wicaksono', 'anggera@gmail.com', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum voluptate reprehenderit sunt fugit officiis nobis laborum voluptas corrupti alias temporibus eaque excepturi, unde soluta sint! Aliquam optio quia tempore? Debitis.', '08836779029', '2022-11-28 23:44:57', '2022-11-28 23:44:57'),
(10, 'Aninda Fitri Litasni', 'anin@gmail.com', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum voluptate reprehenderit sunt fugit officiis nobis laborum voluptas corrupti alias temporibus eaque excepturi, unde soluta sint! Aliquam optio quia tempore? Debitis.', '08051421097', '2022-11-28 23:44:57', '2022-11-28 23:44:57'),
(11, 'Aufa Ramadhan', 'aufa@gmail.com', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum voluptate reprehenderit sunt fugit officiis nobis laborum voluptas corrupti alias temporibus eaque excepturi, unde soluta sint! Aliquam optio quia tempore? Debitis.', '08774054063', '2022-11-28 23:44:57', '2022-11-28 23:44:57'),
(12, 'Bryant Sulthan Nugroho', 'bry@gmail.com', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum voluptate reprehenderit sunt fugit officiis nobis laborum voluptas corrupti alias temporibus eaque excepturi, unde soluta sint! Aliquam optio quia tempore? Debitis.', '08295163644', '2022-11-28 23:44:57', '2022-11-28 23:44:57'),
(13, 'Daffa Al Baihaqi Haris Lubis', 'daffa@gmail.com', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum voluptate reprehenderit sunt fugit officiis nobis laborum voluptas corrupti alias temporibus eaque excepturi, unde soluta sint! Aliquam optio quia tempore? Debitis.', '08203249800', '2022-11-28 23:44:57', '2022-11-28 23:44:57'),
(14, 'Destuty Angeli Lase', 'tuti@gmail.com', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum voluptate reprehenderit sunt fugit officiis nobis laborum voluptas corrupti alias temporibus eaque excepturi, unde soluta sint! Aliquam optio quia tempore? Debitis.', '08393816478', '2022-11-28 23:44:57', '2022-11-28 23:44:57'),
(15, 'Dimas Abidin', 'dimas@gmail.com', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum voluptate reprehenderit sunt fugit officiis nobis laborum voluptas corrupti alias temporibus eaque excepturi, unde soluta sint! Aliquam optio quia tempore? Debitis.', '08880561277', '2022-11-28 23:44:57', '2022-11-28 23:44:57'),
(16, 'Doni Irawan', 'doni@gmail.com', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum voluptate reprehenderit sunt fugit officiis nobis laborum voluptas corrupti alias temporibus eaque excepturi, unde soluta sint! Aliquam optio quia tempore? Debitis.', '08182266639', '2022-11-28 23:44:57', '2022-11-28 23:44:57'),
(17, 'Fardan Septian', 'fardan@gmail.com', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum voluptate reprehenderit sunt fugit officiis nobis laborum voluptas corrupti alias temporibus eaque excepturi, unde soluta sint! Aliquam optio quia tempore? Debitis.', '08060915941', '2022-11-28 23:44:57', '2022-11-28 23:44:57'),
(18, 'Farid Mardan Aziz', 'farid@gmail.com', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum voluptate reprehenderit sunt fugit officiis nobis laborum voluptas corrupti alias temporibus eaque excepturi, unde soluta sint! Aliquam optio quia tempore? Debitis.', '08136610799', '2022-11-28 23:44:57', '2022-11-28 23:44:57'),
(19, 'Fauzan Gusdani Dwi Nanda', 'fauzan@gmail.com', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum voluptate reprehenderit sunt fugit officiis nobis laborum voluptas corrupti alias temporibus eaque excepturi, unde soluta sint! Aliquam optio quia tempore? Debitis.', '08171235680', '2022-11-28 23:44:57', '2022-11-28 23:44:57'),
(20, 'Fina Dwi Ariyani', 'fina@gmail.com', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum voluptate reprehenderit sunt fugit officiis nobis laborum voluptas corrupti alias temporibus eaque excepturi, unde soluta sint! Aliquam optio quia tempore? Debitis.', '08677281457', '2022-11-28 23:44:57', '2022-11-28 23:44:57'),
(21, 'Firenze Higa Putra', 'firenze@gmail.com', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum voluptate reprehenderit sunt fugit officiis nobis laborum voluptas corrupti alias temporibus eaque excepturi, unde soluta sint! Aliquam optio quia tempore? Debitis.', '08456137953', '2022-11-28 23:44:57', '2022-11-28 23:44:57'),
(22, 'Haikal Prasetya Al Hakim', 'haikal@gmail.com', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum voluptate reprehenderit sunt fugit officiis nobis laborum voluptas corrupti alias temporibus eaque excepturi, unde soluta sint! Aliquam optio quia tempore? Debitis.', '08045510150', '2022-11-28 23:44:57', '2022-11-28 23:44:57'),
(23, 'Hersa Putri Fernanda', 'hersa@gmail.com', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum voluptate reprehenderit sunt fugit officiis nobis laborum voluptas corrupti alias temporibus eaque excepturi, unde soluta sint! Aliquam optio quia tempore? Debitis.', '08053259179', '2022-11-28 23:44:57', '2022-11-28 23:44:57'),
(24, 'Jonathan Pandu', 'pandu@gmail.com', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum voluptate reprehenderit sunt fugit officiis nobis laborum voluptas corrupti alias temporibus eaque excepturi, unde soluta sint! Aliquam optio quia tempore? Debitis.', '08415463828', '2022-11-28 23:44:57', '2022-11-28 23:44:57'),
(25, 'Leny Nur Sila', 'lenyy@gmail.com', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum voluptate reprehenderit sunt fugit officiis nobis laborum voluptas corrupti alias temporibus eaque excepturi, unde soluta sint! Aliquam optio quia tempore? Debitis.', '08294656001', '2022-11-28 23:44:57', '2022-11-28 23:44:57'),
(26, 'Meida Nur Afifah', 'meida@gmail.com', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum voluptate reprehenderit sunt fugit officiis nobis laborum voluptas corrupti alias temporibus eaque excepturi, unde soluta sint! Aliquam optio quia tempore? Debitis.', '08109520827', '2022-11-28 23:44:57', '2022-11-28 23:44:57'),
(27, 'Mirza Elfandi', 'pandi@gmail.com', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum voluptate reprehenderit sunt fugit officiis nobis laborum voluptas corrupti alias temporibus eaque excepturi, unde soluta sint! Aliquam optio quia tempore? Debitis.', '08089504352', '2022-11-28 23:44:57', '2022-11-28 23:44:57'),
(28, 'Muhammad Suratman', 'suratman@gmail.com', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum voluptate reprehenderit sunt fugit officiis nobis laborum voluptas corrupti alias temporibus eaque excepturi, unde soluta sint! Aliquam optio quia tempore? Debitis.', '08513735270', '2022-11-28 23:44:57', '2022-11-28 23:44:57'),
(29, 'Muhammad Fathan Al Mufti', 'mufthi@gmail.com', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum voluptate reprehenderit sunt fugit officiis nobis laborum voluptas corrupti alias temporibus eaque excepturi, unde soluta sint! Aliquam optio quia tempore? Debitis.', '08943014342', '2022-11-28 23:44:57', '2022-11-28 23:44:57'),
(30, 'Muhammad Refansa Ali Muzki', 'refan@gmail.com', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum voluptate reprehenderit sunt fugit officiis nobis laborum voluptas corrupti alias temporibus eaque excepturi, unde soluta sint! Aliquam optio quia tempore? Debitis.', '08379781683', '2022-11-28 23:44:57', '2022-11-28 23:44:57'),
(31, 'Oni Cahyo Oktaviano', 'oni@gmail.com', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum voluptate reprehenderit sunt fugit officiis nobis laborum voluptas corrupti alias temporibus eaque excepturi, unde soluta sint! Aliquam optio quia tempore? Debitis.', '08955717538', '2022-11-28 23:44:57', '2022-11-28 23:44:57'),
(32, 'Raflie Asfar Yasin', 'raflie@gmail.com', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum voluptate reprehenderit sunt fugit officiis nobis laborum voluptas corrupti alias temporibus eaque excepturi, unde soluta sint! Aliquam optio quia tempore? Debitis.', '08137886984', '2022-11-28 23:44:57', '2022-11-28 23:44:57'),
(33, 'Raihan Hakim', 'raih@gmail.com', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum voluptate reprehenderit sunt fugit officiis nobis laborum voluptas corrupti alias temporibus eaque excepturi, unde soluta sint! Aliquam optio quia tempore? Debitis.', '08448869012', '2022-11-28 23:44:57', '2022-11-28 23:44:57'),
(34, 'Raju Yadera', 'raju@gmail.com', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum voluptate reprehenderit sunt fugit officiis nobis laborum voluptas corrupti alias temporibus eaque excepturi, unde soluta sint! Aliquam optio quia tempore? Debitis.', '08076340577', '2022-11-28 23:44:58', '2022-11-28 23:44:58'),
(35, 'Rakhmawati', 'rakhma@gmail.com', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum voluptate reprehenderit sunt fugit officiis nobis laborum voluptas corrupti alias temporibus eaque excepturi, unde soluta sint! Aliquam optio quia tempore? Debitis.', '08388567938', '2022-11-28 23:44:58', '2022-11-28 23:44:58'),
(36, 'Rifki Ihza Fathoni', 'kiki@gmail.com', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum voluptate reprehenderit sunt fugit officiis nobis laborum voluptas corrupti alias temporibus eaque excepturi, unde soluta sint! Aliquam optio quia tempore? Debitis.', '08667815488', '2022-11-28 23:44:58', '2022-11-28 23:44:58'),
(37, 'Rutsiana Marintan Munte', 'ruts@gmail.com', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum voluptate reprehenderit sunt fugit officiis nobis laborum voluptas corrupti alias temporibus eaque excepturi, unde soluta sint! Aliquam optio quia tempore? Debitis.', '08917417096', '2022-11-28 23:44:58', '2022-11-28 23:44:58'),
(38, 'Robby Akhsan', 'robb@gmail.com', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum voluptate reprehenderit sunt fugit officiis nobis laborum voluptas corrupti alias temporibus eaque excepturi, unde soluta sint! Aliquam optio quia tempore? Debitis.', '08533711390', '2022-11-28 23:44:58', '2022-11-28 23:44:58'),
(39, 'Satria Rangga Putra Rizky', 'satria@gmail.com', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum voluptate reprehenderit sunt fugit officiis nobis laborum voluptas corrupti alias temporibus eaque excepturi, unde soluta sint! Aliquam optio quia tempore? Debitis.', '08859982702', '2022-11-28 23:44:58', '2022-11-28 23:44:58'),
(40, 'Simon Rudy Hasibuan', 'simon@gmail.com', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum voluptate reprehenderit sunt fugit officiis nobis laborum voluptas corrupti alias temporibus eaque excepturi, unde soluta sint! Aliquam optio quia tempore? Debitis.', '08294902255', '2022-11-28 23:44:58', '2022-11-28 23:44:58'),
(41, 'Thoriq AlFarabi Permana', 'thoriq@gmail.com', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum voluptate reprehenderit sunt fugit officiis nobis laborum voluptas corrupti alias temporibus eaque excepturi, unde soluta sint! Aliquam optio quia tempore? Debitis.', '08612111869', '2022-11-28 23:44:58', '2022-11-28 23:44:58'),
(42, 'Tri Anjani Amanah', 'anjani@gmail.com', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum voluptate reprehenderit sunt fugit officiis nobis laborum voluptas corrupti alias temporibus eaque excepturi, unde soluta sint! Aliquam optio quia tempore? Debitis.', '08928492928', '2022-11-28 23:44:58', '2022-11-28 23:44:58'),
(43, 'Wahyu Eka Saputra', 'wahyu@gmail.com', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum voluptate reprehenderit sunt fugit officiis nobis laborum voluptas corrupti alias temporibus eaque excepturi, unde soluta sint! Aliquam optio quia tempore? Debitis.', '08081835500', '2022-11-28 23:44:58', '2022-11-28 23:44:58'),
(44, 'Wawan Badru Tamam', 'wawan@gmail.com', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum voluptate reprehenderit sunt fugit officiis nobis laborum voluptas corrupti alias temporibus eaque excepturi, unde soluta sint! Aliquam optio quia tempore? Debitis.', '08115297308', '2022-11-28 23:44:58', '2022-11-28 23:44:58'),
(45, 'Fardann', 'fardann@gmail.com', 'Grand', '08123213213', '2022-11-29 00:21:49', '2022-11-29 00:21:49');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id_admin` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id_admin`, `nama`, `username`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin', '$2y$10$eCQXR3Z69KiWD/cp6cSdHONoFqmtITMGsHi8MCIt7HDd05pgPKSgm', 'WVzRQPedLGkvBv05XFxf3BF1bllnkuMdIf3JidgUTIzPyk1jc0vsXJTlurCQ', '2022-11-28 23:44:58', '2022-11-28 23:44:58'),
(2, 'Angger Cakra', 'angger', '$2y$10$xZG.dSJbbiyOmSivOw9x7OxShQF2RGgAL.AqgVpbQ4FMrIJWCmEB2', NULL, '2022-11-28 23:44:58', '2022-11-28 23:44:58'),
(3, 'Cakra', 'cakra', '$2y$10$utL.u4W4I8.4bDi8PpXYtOi5ypgbVK0wA9Osbp8JAlJSL8SRvdLFK', NULL, '2022-11-28 23:44:59', '2022-11-28 23:44:59'),
(4, 'Wicak', 'wicak', '$2y$10$GmBxdjxA7KnqOyLE5yCwLuMnzdey33EbLtdLXTRGNGpyYCj9cFeeq', NULL, '2022-11-28 23:44:59', '2022-11-28 23:44:59'),
(5, 'Sono', 'sono', '$2y$10$juuYhDXI0lMP7TyFVLaUyeHhPChWhQz8KlrvxL5BDGUYQcLfeocR.', NULL, '2022-11-28 23:44:59', '2022-11-28 23:44:59');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `absensis`
--
ALTER TABLE `absensis`
  ADD PRIMARY KEY (`id_absensi`),
  ADD KEY `absensis_id_siswa_index` (`id_siswa`);

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
-- Indeks untuk tabel `siswas`
--
ALTER TABLE `siswas`
  ADD PRIMARY KEY (`id_siswa`),
  ADD UNIQUE KEY `siswas_email_unique` (`email`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_admin`),
  ADD UNIQUE KEY `users_username_unique` (`username`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `absensis`
--
ALTER TABLE `absensis`
  MODIFY `id_absensi` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

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
-- AUTO_INCREMENT untuk tabel `siswas`
--
ALTER TABLE `siswas`
  MODIFY `id_siswa` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id_admin` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `absensis`
--
ALTER TABLE `absensis`
  ADD CONSTRAINT `absensis_id_siswa_foreign` FOREIGN KEY (`id_siswa`) REFERENCES `siswas` (`id_siswa`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
