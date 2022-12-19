-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 08 Nov 2022 pada 15.32
-- Versi server: 10.4.20-MariaDB
-- Versi PHP: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `booking_hotel`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(12) NOT NULL,
  `nama_user` varchar(125) NOT NULL,
  `email` varchar(125) NOT NULL,
  `sandi` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `boking`
--

CREATE TABLE `boking` (
  `id_boking` int(12) NOT NULL,
  `id_user` int(12) NOT NULL,
  `nama_user` varchar(50) NOT NULL,
  `tanggal_masuk` date NOT NULL,
  `tanggal_keluar` date NOT NULL,
  `jenis_kamar` varchar(40) NOT NULL,
  `jumlah_kamar` int(50) NOT NULL,
  `harga` int(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `bukti`
--

CREATE TABLE `bukti` (
  `id_boking` int(12) NOT NULL,
  `id_user` int(12) NOT NULL,
  `nama_user` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(12) NOT NULL,
  `nama_user` int(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `no_hp` int(40) NOT NULL,
  `alamat` text NOT NULL,
  `sandi` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `boking`
--
ALTER TABLE `boking`
  ADD PRIMARY KEY (`id_boking`);

--
-- Indeks untuk tabel `bukti`
--
ALTER TABLE `bukti`
  ADD PRIMARY KEY (`id_boking`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `boking`
--
ALTER TABLE `boking`
  MODIFY `id_boking` int(12) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `bukti`
--
ALTER TABLE `bukti`
  MODIFY `id_boking` int(12) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(12) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
