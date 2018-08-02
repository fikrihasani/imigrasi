-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 02, 2018 at 10:05 AM
-- Server version: 10.1.33-MariaDB
-- PHP Version: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `imigrasi`
--

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id` int(10) UNSIGNED NOT NULL,
  `judul_berita` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto_berita` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `konten_berita` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipe_berita` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id`, `judul_berita`, `foto_berita`, `konten_berita`, `tipe_berita`, `created_at`, `updated_at`) VALUES
(3, 'Berita 1', 'image b_1533196908.jpg', 'Berita 1 euy', '0', '2018-08-02 00:53:17', '2018-08-02 01:01:48'),
(4, 'Berita 2', 'image b_1533196473.jpg', 'Ulala', '1', '2018-08-02 00:54:33', '2018-08-02 00:54:33');

-- --------------------------------------------------------

--
-- Table structure for table `hukum`
--

CREATE TABLE `hukum` (
  `uu` text NOT NULL,
  `presinden` text NOT NULL,
  `pemerintah` text NOT NULL,
  `menteri` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `info_publik`
--

CREATE TABLE `info_publik` (
  `galeri_foto` int(20) NOT NULL,
  `galeri_video` int(20) NOT NULL,
  `gambar_skm` int(20) NOT NULL,
  `gambar_statistik` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kepala_masa`
--

CREATE TABLE `kepala_masa` (
  `foto_kepala` int(20) NOT NULL,
  `deskripsi_kepala` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `layanan`
--

CREATE TABLE `layanan` (
  `layanan_wni` text NOT NULL,
  `layanan_wna` text NOT NULL,
  `layanan_online` text NOT NULL,
  `biaya_imigrasi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(1, '2018_07_16_091237_create_beritas_table', 1),
(2, '2018_07_16_093100_create_beritas_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `pengaduan`
--

CREATE TABLE `pengaduan` (
  `nama` varchar(35) NOT NULL,
  `email` varchar(40) NOT NULL,
  `subjek` varchar(60) NOT NULL,
  `pesan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `profil_pejabat`
--

CREATE TABLE `profil_pejabat` (
  `foto_pejabat` int(20) NOT NULL,
  `deskripsi_pejabat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sejarah`
--

CREATE TABLE `sejarah` (
  `foto_sejarah` int(20) NOT NULL,
  `artikel_sejarah` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `struktur_organ`
--

CREATE TABLE `struktur_organ` (
  `gambar_organ` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tugas_fungsi`
--

CREATE TABLE `tugas_fungsi` (
  `isi_tugas` text NOT NULL,
  `isi_fungsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(4, 'yusuf', 'yusufdwisantoso@gmail.com', '$2y$10$IybvBgAvQT60lEZTadHzWeh87rYGTE9yT1t5f69.YwkXuRj7KcCYa', 'MXIDRsNRIY5ESOSoYqs8DOdime9JYVLb1hYGIpq41YOlw11v1PAgLeiS83sW', '2018-07-13 09:45:12', '2018-07-13 09:45:12'),
(5, 'fikri', 'mfikrihasani@gmail.com', '$2y$10$vzSIpKDIAP0J92yqq8EqxO1MhWKCdCxSZPe.r/bkJlXHMpDvCNNS.', 'eloliifpOIu9XSqOxNI07jWoSFTYUCIJ3Y1YXwkPtwCHinCXLtQh260ihO5P', '2018-07-16 01:31:36', '2018-07-16 01:31:36');

-- --------------------------------------------------------

--
-- Table structure for table `visi_misi`
--

CREATE TABLE `visi_misi` (
  `isi_visi` text NOT NULL,
  `isi_misi` text NOT NULL,
  `isi_moto` text NOT NULL,
  `isi_maklumat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
