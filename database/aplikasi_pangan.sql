-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 21 Okt 2019 pada 03.24
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
  `nama` varchar(100) NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `table_komoditi`
--

INSERT INTO `table_komoditi` (`id`, `nama`, `gambar`) VALUES
(1, 'apa', ''),
(2, 'Beras Medium', ''),
(3, 'Beras Pera', ''),
(4, 'Beras Premium', ''),
(5, 'Minyak Goreng', ''),
(6, 'Cabe Merah Keriting', ''),
(7, 'Cabe Rawit Merah', ''),
(8, 'Cabe Merah Besar', ''),
(9, 'Cabe Rawit Hijau', ''),
(10, 'Bawang Merah', ''),
(11, 'Bawang Putih', ''),
(12, 'Daging Sapi Paha Belakang', ''),
(13, 'Daging Sapi Murni', ''),
(14, 'Ayam Broiler/Ras', ''),
(15, 'Telur Ayam Ras', ''),
(16, 'Gula Pasir', ''),
(17, 'Tepung Terigu', ''),
(18, 'Garam Dapur', ''),
(19, 'Kentang', ''),
(20, 'Tomat', ''),
(21, 'Kelapa Kupas', ''),
(22, 'Semangka', ''),
(23, 'Jeruk Medan', ''),
(24, 'Daging Kambing', ''),
(25, 'Daging Babi Berlemak', ''),
(26, 'Ikan Bandeng', ''),
(27, 'Ikan Mas', ''),
(28, 'Ikan Lele', ''),
(29, 'Gas Elpiji 3Kg', ''),
(30, 'Susu Bubuk Bendera 400gr', ''),
(31, 'Susu Bubuk Dancow 400gr', ''),
(32, 'Susu Kental Bendera 200gr', ''),
(33, 'Susu Kental Enak 200gr', ''),
(34, 'Margarin Blueband Cup', ''),
(35, 'Margarin Blueband Sachet', '');

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
-- Dumping data untuk tabel `table_pasar`
--

INSERT INTO `table_pasar` (`id`, `nama`, `alamat`, `lokasi`) VALUES
(1, 'asdasd', 'asd', 'asd'),
(2, 'asd', 'asd', 'asd'),
(3, 'Pasar Rakyat Oro-0ro Dowo', 'Jalan Guntur No. 20, Kelurahan Oro-0ro Dowo, Kecamatan Klojen, Kota Malang', 'https://goo.gl/maps/5yHu2JGPYkScyPh96'),
(4, 'Pasar Gadang Malang', 'Jalan Pasar Gadang, Kelurahan Bumiayu, Kecamatan Sukun, Kota Malang', 'https://goo.gl/maps/Ea3asM381oQSzEA86'),
(5, 'Pasar Klojen', 'Jalan Cokroaminoto, Kelurahan Klojen, Kecamatan Klojen, Kota Malang', 'https://goo.gl/maps/hFMa6PLeLyYp4nJh9'),
(6, 'Pasar Blimbing', 'Jl. Borobudur, Kota Malang, Jawa Timur 65126', 'https://goo.gl/maps/BRe6E6Jy9FVDF9or7'),
(7, 'Pasar Tawangmangu', 'Jalan Tawangmangu, No.8, Kelurahan Lowokwaru, Kecamatan Lowokwaru, Kota Malang', 'https://goo.gl/maps/RKtvnTMNJ5uFTVtAA'),
(8, 'Pasar Rakyat Bareng', 'Jalan Terusan Ijen, Kelurahan Bareng, Kecamatan Klojen, Kota Malang', 'https://goo.gl/maps/SC3BmhMWVxV5kr917'),
(9, 'Pasar Pandanwangi', 'Jalan Simpang Laksda Adi Sucipto, Kelurahan Pandanwangi, Kecamatan Blimbing, Kota Malang', 'https://goo.gl/maps/zW9G4FSAhZzJCk8y5'),
(10, 'Pasar Kasin', 'Jalan IR Rais, Kelurahan Tanjungrejo, Kecamatan Sukun, Kota Malang', 'https://goo.gl/maps/rTTAA93smJBAtcRy8'),
(11, 'Pasar Kebalen', 'Jalan Zaenal Zakse, No. 28-38, Kelurahan Jodipan, Kecamatan Blimbing, Kota Malang', 'https://goo.gl/maps/tMgUZbXpgprwk1jL6'),
(12, 'Pasar Kota Lama', 'Gang 5, No. 3B, Kelurahan Mergosono, Kecamatan Kedungkandang, Kota Malang', 'https://goo.gl/maps/cTBmkYVoDM96WmAt9'),
(13, 'Pasar Sukun', 'Jalan S. Supriadi, Kelurahan Sukun, Kecamatan Sukun, Kota Malang', 'https://goo.gl/maps/QDYczzDFKEXSmcba7'),
(14, 'Pasar Tlogowaru', 'Jalan Tlogo Waru, Kelurahan Tlogowaru, Kecamatan Kedungkandang, Kota Malang', 'https://goo.gl/maps/EAk4PJYnjkdQJJ2K7'),
(15, 'Pasar Kedungkandang', 'Jalan Muharto Timur, Kecamatan Kedungkandang, Kota Malang', 'https://goo.gl/maps/ZPwZxwM1CTcWcQVL8'),
(16, 'Pasar Dinoyo', 'Jalan MT. Haryono No. 171A, Kelurahan Dinoyo, Kecamatan Lowokwaru, Kota Malang', 'https://goo.gl/maps/CGwN4k2vvQiuraPe6');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT untuk tabel `table_pasar`
--
ALTER TABLE `table_pasar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

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
