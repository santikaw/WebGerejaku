-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 06, 2022 at 05:11 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gereja`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `created_at`, `updated_at`) VALUES
(1, 'admin', '123', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul_artikel` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isi_artikel` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `author_artikel` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_artikel` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id`, `judul_artikel`, `isi_artikel`, `author_artikel`, `tanggal_artikel`, `created_at`, `updated_at`) VALUES
(1, 'Permen Denominasi', 'Di Networking Zone Sidang WCC, ada satu pameran yang menarik. Pameran itu dari Dewan Gereja-gereja...', 'aku', '12/16/2022', NULL, NULL),
(3, 'ARTIKEL : REACH-ING EFFECTIVE COMMUNICATION PADA GEREJA KRISTEN JAWA', 'REACH-ing Effective Communication pada Gereja Kristen Jawa Marieti Debyora Gardiana Jemaat GKJ...', 'tim redaksi', '2/23/2022', NULL, NULL),
(4, 'ARTIKEL : GEREJA GEREJA KRISTEN JAWA DI RUANG PUBLIK, ANDREAS UW', 'GEREJA GEREJA KRISTEN JAWA Di Ruang Publik Oleh: Andreas UW   Minggu 22 Maret 2020 merupakan...', 'tim redaksi', '4/4/2022', NULL, NULL),
(5, 'ARTIKEL : MENUJU INDONESIA DIGITAL 2024, SIAPKAH GKJ MEMASUKI ERA BARU GEREJA DIGITAL?', 'Menuju Indonesia Digital 2024 Siapkah GKJ Memasuki Era Baru Gereja Digital? Oleh: Andreas UW...', 'tim redaksi', '5/5/2022', NULL, NULL),
(6, 'Pojok Inspirasi : Pre-Assembly JCWM-Day 2', 'Pre-Assembly JCWM-Day 2 Hari kedua pre-assembly terdiri dari dua bagian. Kegiatan pertama berupa...', 'tim redaksi', '7/23/2022', NULL, NULL),
(7, 'JABATAN DALAM GEREJA', 'JABATAN DALAM GEREJA Oleh: Andreas U   Gol: Memahami, Jabatan Keagamaan dalam Alkitab PL...', 'tim redaksi', '4/3/2022', NULL, NULL),
(8, '“KITAB KEHIDUPAN” REFLEKSI HERMENEUTIK – PERSPEKTIF TEOLOGI PRAKTIS', 'KITAB KEHIDUPAN (Refleksi Hermeneutik – Perspektif Teologi Praktis) Oleh: Andreas UW “Masih banyak...', 'tim redaksi', '7/5/2022', NULL, NULL),
(9, 'ARTIKEL : PERANG DINGIN TUHAN DAN SETAN', 'PERANG DINGIN TUHAN DAN SETAN Oleh: Andreas UW Konon, wabah Justinian abad VI telah menewaskan 50...', 'tim redaksi', '6/6/2022', NULL, NULL),
(10, 'SUKACITA: SPIRITUALITAS PELAYANAN', 'Sukacita: Spiritualitas Pelayanan Pengantar: Gembalakanlah domba-dombaKu! Pada bagian akhir Injil...', 'tim redaksi', '9/9/2022', NULL, NULL);

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
(6, '2022_12_05_032727_add_email_to_users_table', 4),
(7, '2019_12_14_000001_create_personal_access_tokens_table', 5),
(8, '2022_12_04_070941_create_users_table', 5),
(9, '2022_12_04_073703_create_schedules_table', 5),
(10, '2022_12_04_131154_create_berita_table', 5),
(11, '2022_12_05_030249_create_admin_table', 5);

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
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
-- Table structure for table `schedules`
--

CREATE TABLE `schedules` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_kegiatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi_kegiatan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_kegiatan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `schedules`
--

INSERT INTO `schedules` (`id`, `nama_kegiatan`, `deskripsi_kegiatan`, `tanggal_kegiatan`, `created_at`, `updated_at`) VALUES
(1, 'Natal', 'Hari Natal, yang puncaknya biasa dirayakan umat kristiani di seluruh dunia pada tanggal 24 -- 25 Desember setiap tahun, tinggal beberapa hari lagi. Oleh karena itu, marilah kita mempersiapkan hati untuk menyambut Natal. Sebab, Dia yang kelahiran-Nya kita rayakan adalah Tuhan, Raja, dan Juru Selamat kita. Makna Natal bagi Orang-Orang Percaya Natal adalah kesukaan besar bagi segala bangsa. Manusia yang sedang terbelenggu oleh dosa akan diselamatkan dan diberi hidup kekal oleh seorang Juru Selamat yang baru lahir, Yesus Kristus. Karena itu, kita patut bersukacita seperti bala tentara surga yang bersukacita dengan nyanyian/puji-pujian saat peristiwa Natal (Lukas 2:13-14). Dan, sukacita Natal adalah bagi semua orang dari segala bangsa yang percaya kepada-Nya (Lukas 2:10). Kita dapat mengundang setiap orang untuk menerima kasih Natal tersebut.', '12/25/2022', NULL, NULL),
(2, 'Jumat Agung', 'Jumat Agung adalah perayaan setiap tahun bagi umat Kristiani. Pada Jumat Agung terjadi peristiwa penting sebelum perayaan Paskah di hari Minggu. Di seluruh dunia merayakan yang namanya Hari Paskah yang identik dengan telur dan kelinci.\r\nNamun sebelum mencapai Hari Paskah yang selalu jatuh di hari Jumat, 15 April 2022, ada beberapa hari penting yang akan dilalui sebelumnya, salah satunya Jumat Agung.', '15/4/2022', NULL, NULL),
(3, 'Pentakosta', 'Dalam bahasa Yunani, \'pentakosta\' berarti hari kelima puluh.Pentakosta dirayakan 50 hari setelah kebangkitan Yesus. Turunnya Roh Kudus ini sebenarnya sudah dijanjikan Yesus di malam terakhir sebelum ia ditangkap dan disalibkan. Ia menyebut Roh Kudus sebagai penolong.\r\nAku akan minta kepada Bapa, dan Ia akan memberikan kepadamu seorang Penolong yang lain, supaya ia menyertai kamu selama-lamanya, yaitu Roh Kebenaran. Dunia tidak dapat menerima Dia, sebab dunia tidak melihat Dia dan tidak mengenal Dia. Tetapi kamu mengenal Dia, sebab Ia menyertai kamu dan akan diam di dalam kamu.\" (Yohanes 14: 16-17)\r\nDalam rentang waktu 50 hari setelah kebangkitan-Nya, para murid diliputi rasa takut. Rohaniwan W. Teguh Santosa, SJ menuturkan bisa sang Guru saja dibunuh, ancaman serupa begitu dekat dan dirasakan oleh pengikut Yesus termasuk para murid.', '2/3/2022', NULL, NULL),
(4, 'Paskah', 'Di dalam Perjanjian Lama, Paskah adalah perayaan orang-orang Israel saat memperingati Passover atau bulan purnama pertama setelah ekuinoks vernal. Secara harfiah, Passover memiliki arti \'melewati\' dan secara khusus dalam tradisi Yahudi merujuk pada perayaan pembebasan orang-orang Yahudi dari perbudakan Mesir.\r\nSejalan dengan arti dalam Perjanjian Lama, Paskah dalam Perjanjian Baru juga menunjukan kuasa Allah atas kasih dan anugerah yang meluputkan umat milik-Nya dari maut. Dengan kata lain, Allah memberikan kepastian kebangkitan kekal di akhir zaman, melalui kebangkitan Kristus.\r\nPaskah adalah kebangkitan Yesus yang telah mengubah jalan hidup manusia. Kebangkitan Yesus telah membawa perubahan status dan memberikan transformasi dalam hidup. Dalam keyakinan umat Kristiani, penyaliban dan kebangkitan Yesus dipercaya terjadi ketika Passover tahun 30.\r\nDi samping itu, terdapat penjelasan lain tentang arti Paskah, merujuk pada kata \'eostur Norse\' atau \'ostara\', yang memiliki arti musim kelahiran baru. Dengan kata lain, paskah sering dikaitkan dengan pergantian musim.', '2/2/2022', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fullname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fullname`, `email`, `username`, `password`, `created_at`, `updated_at`) VALUES
(1, 'santika tika', 'santika@gmail.com', 'san', 'ayam', NULL, NULL),
(2, 'rachel putri paskah', 'rachel@gmail.com', 'racel', 'racel', NULL, NULL),
(3, 'sinatria banyu', 'sinat@gmail.com', 'sinat', '1234', NULL, NULL),
(4, 'ivan andika', 'ivan@sss', 'ivan', 'ivan', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `schedules`
--
ALTER TABLE `schedules`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `schedules`
--
ALTER TABLE `schedules`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
