-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 17 Des 2023 pada 03.57
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `apps`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(1, '2023-07-06-012958', 'App\\Database\\Migrations\\Users', 'default', 'App', 1688607049, 1),
(6, '2023-07-18-100942', 'App\\Database\\Migrations\\Siswa', 'default', 'App', 1689675069, 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswa`
--

CREATE TABLE `siswa` (
  `id` int(11) UNSIGNED NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `agama` varchar(10) NOT NULL,
  `anak` int(10) NOT NULL,
  `jum_sdr` int(10) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `telp` varchar(15) NOT NULL,
  `nama_ortu` varchar(50) NOT NULL,
  `pekerjaan` varchar(20) NOT NULL,
  `alamat_ortu` varchar(50) NOT NULL,
  `tahun_ajaran` varchar(200) NOT NULL DEFAULT '''2023-2024''',
  `tanggal_input` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `tgl_update` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data untuk tabel `siswa`
--

INSERT INTO `siswa` (`id`, `nama_lengkap`, `tempat_lahir`, `tgl_lahir`, `jenis_kelamin`, `agama`, `anak`, `jum_sdr`, `alamat`, `telp`, `nama_ortu`, `pekerjaan`, `alamat_ortu`, `tahun_ajaran`, `tanggal_input`, `tgl_update`) VALUES
(31, 'Rozak', 'Bekasi', '2023-07-18', 'Laki-laki', 'Islam', 1, 2, 'Tambun', '090778321385', 'Bim', 'WFO', 'Tambun', '\'2023-2024\'', '2023-07-26 03:11:30', '2023-07-26 03:11:30'),
(32, 'Imron', 'Bekasi', '2023-07-09', 'Laki-laki', 'Islam', 1, 2, 'Tambun', '090778321385', 'Bim', 'WFO', 'Tambun', '\'2023-2024\'', '2023-07-26 03:11:30', '2023-07-26 03:11:30'),
(33, 'nandini', 'Bekasi', '2002-02-07', 'perempuan', 'Islam', 1, 1, 'Bekasi', '008786546785', 'pajar', 'profesor', 'Bekasi', '2023-2024', '2023-07-24 23:08:46', '2023-07-25 03:58:44'),
(34, 'juni', 'Aceeeehhhh', '2002-06-13', 'perempuan', 'Islam', 1, 3, 'Bekasi', '08757678969', 'usman', 'arsitek', 'Aceehh', '2023-2024', '2023-07-24 23:08:46', '2023-07-25 03:58:44'),
(35, 'putri', 'Bekasi', '2002-03-04', 'perempuan', 'Islam', 1, 4, 'Bekasi', '08757678969', 'Parents', 'WFH', 'Bekasi', '2023-2024', '2023-07-24 23:08:46', '2023-07-25 03:58:44'),
(36, 'Salsabila', 'Bekasi', '2002-02-12', 'perempuan', 'Islam', 1, 1, 'Bekasi', '08757678969', 'Parents', 'WFH', 'Bekasi', '2023-2024', '2023-07-24 23:08:46', '2023-07-25 03:58:44');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'Admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
