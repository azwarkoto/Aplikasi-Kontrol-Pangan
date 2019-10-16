-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 16 Okt 2019 pada 17.59
-- Versi server: 10.1.35-MariaDB
-- Versi PHP: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aplikasi_pangan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `table_harga`
--

CREATE TABLE `table_harga` (
  `id` int(11) NOT NULL,
  `id_pasar` int(11) NOT NULL,
  `id_komoditi` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `table_komoditi`
--

CREATE TABLE `table_komoditi` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `table_pasar`
--

CREATE TABLE `table_pasar` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `lokasi` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `table_harga`
--
ALTER TABLE `table_harga`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_pasar` (`id_pasar`),
  ADD KEY `fk_komoditi` (`id_komoditi`);

--
-- Indeks untuk tabel `table_komoditi`
--
ALTER TABLE `table_komoditi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `table_pasar`
--
ALTER TABLE `table_pasar`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `table_harga`
--
ALTER TABLE `table_harga`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `table_komoditi`
--
ALTER TABLE `table_komoditi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `table_pasar`
--
ALTER TABLE `table_pasar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `table_harga`
--
ALTER TABLE `table_harga`
  ADD CONSTRAINT `fk_komoditi` FOREIGN KEY (`id_komoditi`) REFERENCES `table_komoditi` (`id`),
  ADD CONSTRAINT `fk_pasar` FOREIGN KEY (`id_pasar`) REFERENCES `table_pasar` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
