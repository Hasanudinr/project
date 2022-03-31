-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 31 Mar 2022 pada 06.00
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
-- Database: `lpka`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `andikpas`
--

CREATE TABLE `andikpas` (
  `id` int(10) NOT NULL,
  `nr` varchar(20) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `tempat` varchar(50) NOT NULL,
  `tgllahir` date NOT NULL,
  `umur` varchar(10) NOT NULL,
  `jk` varchar(10) NOT NULL,
  `agama` varchar(10) NOT NULL,
  `pendidikan` varchar(100) NOT NULL,
  `kejahatan` varchar(100) NOT NULL,
  `pasal` varchar(100) NOT NULL,
  `akte` varchar(20) NOT NULL,
  `kk` varchar(20) NOT NULL,
  `ktp` varchar(20) NOT NULL,
  `ijazah` varchar(20) NOT NULL,
  `foto` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `andikpas`
--

INSERT INTO `andikpas` (`id`, `nr`, `nama`, `tempat`, `tgllahir`, `umur`, `jk`, `agama`, `pendidikan`, `kejahatan`, `pasal`, `akte`, `kk`, `ktp`, `ijazah`, `foto`) VALUES
(1, 'B.IIa/2020', 'Feri Pieter Drunyi', 'Ternate', '2002-03-02', '22', 'L', 'Kristen', 'SMA', 'Narkoba', '352 ayat 1', 'ada', 'ada', 'ada', 'ada', '1.jpg'),
(2, 'B.IIa/2018', 'Yardel', 'Jailolo', '2002-06-26', '20', 'L', 'Kristen', 'SMA', 'Perlindungan Anak', 'Pasal 81 Ayat 1 2017', 'ada', 'ada', 'ada', 'ada', '2.jpg'),
(3, 'B.II/2019', 'Indra Ciho', 'Bacan', '2001-12-01', '21', '', 'Kristen', 'SMA', 'Perlindungan Anak ', '81 Ayat 1 2017', 'ada', 'ada', 'ada', 'ada', '3.jpg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `andikpas`
--
ALTER TABLE `andikpas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `andikpas`
--
ALTER TABLE `andikpas`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
