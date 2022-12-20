-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 20 Des 2022 pada 14.25
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

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `nama_user`, `email`, `sandi`) VALUES
(1, 'supriyadi', 'supryaddy07@gmail.com', '$2y$10$sLhXr61wBfw6KGN1qJ9IoOKJgJVgXc61VTnBI1fE9ZYom18yCTiV6'),
(3, 'lukman ganteng', 'lukmanganteng@gmail.co.id', '$2y$10$izvm5TKmVUgRiRdfr5ill.4ripiqjs4Cum0xKjQkAsyMeELNY9Rbu');

-- --------------------------------------------------------

--
-- Struktur dari tabel `boking`
--

CREATE TABLE `boking` (
  `id_boking` int(12) NOT NULL,
  `email` varchar(124) NOT NULL,
  `no_hp` varchar(124) NOT NULL,
  `nama_user` varchar(50) NOT NULL,
  `tanggal_masuk` date NOT NULL,
  `tanggal_keluar` date NOT NULL,
  `jenis_kamar` varchar(40) NOT NULL,
  `jumlah_vip` int(50) NOT NULL,
  `jumlah_reguler` varchar(50) NOT NULL,
  `jumlah_family` varchar(50) NOT NULL,
  `harga` int(128) NOT NULL,
  `diskon` varchar(124) NOT NULL,
  `total` varchar(124) NOT NULL,
  `image` varchar(124) NOT NULL,
  `nokamar` varchar(124) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `boking`
--

INSERT INTO `boking` (`id_boking`, `email`, `no_hp`, `nama_user`, `tanggal_masuk`, `tanggal_keluar`, `jenis_kamar`, `jumlah_vip`, `jumlah_reguler`, `jumlah_family`, `harga`, `diskon`, `total`, `image`, `nokamar`) VALUES
(19, 'upishipit@gmail.com', '087804034063', 'shipit', '2022-12-17', '2022-12-19', 'REGULER', 0, '2', '', 299000, '', '1196000', 'pro1671434198.jpeg', '1-5'),
(25, 'sup@gmail.com', '087804034063', 'supriyadi', '2022-12-20', '2022-12-21', 'REGULER', 0, '11', '', 299000, '328900', '2960100', 'pro1671434451.jpeg', '1-5'),
(28, 'lukmanganteng@yahoo.com', '087804034063', 'lukman toro', '2022-12-20', '2022-12-22', 'VIP', 11, '', '', 399000, '877800', '7900200', 'pro1671458319.png', '1-5');

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
-- Struktur dari tabel `kamar`
--

CREATE TABLE `kamar` (
  `id_kamar` int(12) NOT NULL,
  `jenis_kamar` varchar(20) NOT NULL,
  `stok` varchar(20) NOT NULL,
  `dibooking` varchar(20) NOT NULL,
  `sisa_kamar` varchar(12) NOT NULL,
  `VIP` varchar(12) NOT NULL,
  `Reguler` varchar(12) NOT NULL,
  `Family` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kamar`
--

INSERT INTO `kamar` (`id_kamar`, `jenis_kamar`, `stok`, `dibooking`, `sisa_kamar`, `VIP`, `Reguler`, `Family`) VALUES
(1, 'VIP', '50', '0', '0', '50', '50', '50'),
(2, 'Reguler', '50', '0', '0', '', '', ''),
(3, 'Family', '50', '0', '0', '', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ruang_kamar`
--

CREATE TABLE `ruang_kamar` (
  `idkamar` int(12) NOT NULL,
  `nama_kamar` varchar(20) NOT NULL,
  `stok` varchar(20) NOT NULL,
  `dibooking` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(12) NOT NULL,
  `nama_user` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `is_active` varchar(124) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `nama_user`, `email`, `password`, `is_active`) VALUES
(1, 'supriyadi', 'upishipit@gmail.com', '$2y$10$rONqV2OzBwhzWYZVjQ3Y.eT89JDzVL6rnAcQc0RuEVSJPZXPKgfka', '1'),
(2, 'supriyadi', 'sup@gmail.com', '$2y$10$Nn/Lf69hDHCpZOWfIoh/luELfxofCNjCo9uxCnBYYuzSzL.x2Uymm', '1'),
(3, 'lukman toro', 'lukmanganteng@yahoo.com', '$2y$10$e5sMTyxWi9XI5BhQF/clF.yUTcPYory8QMUCkDJLyRPESS/szQtym', '1');

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
-- Indeks untuk tabel `kamar`
--
ALTER TABLE `kamar`
  ADD PRIMARY KEY (`id_kamar`);

--
-- Indeks untuk tabel `ruang_kamar`
--
ALTER TABLE `ruang_kamar`
  ADD PRIMARY KEY (`idkamar`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `boking`
--
ALTER TABLE `boking`
  MODIFY `id_boking` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT untuk tabel `bukti`
--
ALTER TABLE `bukti`
  MODIFY `id_boking` int(12) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `kamar`
--
ALTER TABLE `kamar`
  MODIFY `id_kamar` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
