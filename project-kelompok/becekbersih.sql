-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 12 Jan 2025 pada 14.11
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `becekbersih`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE `transaksi` (
  `id` int(11) NOT NULL,
  `kode_transaksi` varchar(50) NOT NULL,
  `no_plat` varchar(20) NOT NULL,
  `tanggal` date NOT NULL,
  `jenis_kendaraan` varchar(50) NOT NULL,
  `nama_customer` varchar(100) NOT NULL,
  `biaya` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `transaksi`
--

INSERT INTO `transaksi` (`id`, `kode_transaksi`, `no_plat`, `tanggal`, `jenis_kendaraan`, `nama_customer`, `biaya`) VALUES
(1, 'TRX12345', 'AB1234CD', '2004-12-12', 'astrea', 'memet', 15.00),
(2, '123', 'b4444k', '2003-12-11', 'yamaha', 'nopal', 20.00),
(3, '123', 'b4444k', '2003-12-11', 'yamaha', 'nopal', 20.00),
(4, '132313', 'b4444k', '2003-12-11', 'yamaha', 'nopal', 20.00);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `name`) VALUES
(1, 'test@example.com', '482c811da5d5b4bc6d497ffa98491e38', ''),
(2, 'admin@becekbersih.com', '0192023a7bbd73250516f069df18b500', ''),
(3, 'user@example.com', '482c811da5d5b4bc6d497ffa98491e38', ''),
(4, 'adimascekka@gmail.com', '123445', 'hwed'),
(5, 'syaifur.roziq@gmail.com', '$2y$10$qVXqt8ANSfBe2rZ8ieuJqeDNyOApJ5r72Ma4xyLh7sTRx/sNmRdU6', 'Ifur Roziq'),
(6, 'bebas@chirper.com', '$2y$10$KojaysjJ/elYagf/vizjjOXE6Kymm52TvU1Wb3E67sn/UAENgoRdS', 'sy');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
