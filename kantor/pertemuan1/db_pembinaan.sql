-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 12 Mar 2022 pada 08.01
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_pembinaan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `anak`
--

CREATE TABLE `anak` (
  `id` int(11) NOT NULL,
  `nomor register` varchar(15) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `tempat tanggal lahir` varchar(50) NOT NULL,
  `umur` varchar(10) NOT NULL,
  `pendidikan` varchar(250) NOT NULL,
  `jenis kejahatan` varchar(250) NOT NULL,
  `pasal` varchar(250) NOT NULL,
  `tinggi badan` varchar(10) NOT NULL,
  `berat badan` varchar(10) NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `anak`
--

INSERT INTO `anak` (`id`, `nomor register`, `nama`, `tempat tanggal lahir`, `umur`, `pendidikan`, `jenis kejahatan`, `pasal`, `tinggi badan`, `berat badan`, `gambar`) VALUES
(1, 'B.IIa/2017', 'Feri Pieter Drunyi', 'Papua, 29 September 2002', '22', 'SMA', 'Narkoba', 'KUHP', '165', '65', '1.jpg'),
(2, 'B.II/2018', 'M. Rizal Mudin', 'Jailolo, 28 Maret 2001', '17', 'SMA', 'Pencurian', 'KUHP', '168', '62', '2.jpg'),
(3, 'B.IIa/2018', 'Indha Ciho', 'Jailolo, 19 September 2002', '20', 'SMA', 'Perlindungan Anak', 'Pasal 81 Ayat 2', '170', '68', '3.jpg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `anak`
--
ALTER TABLE `anak`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `anak`
--
ALTER TABLE `anak`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
