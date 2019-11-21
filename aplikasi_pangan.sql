-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 21 Nov 2019 pada 03.00
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

--
-- Dumping data untuk tabel `table_harga`
--

INSERT INTO `table_harga` (`id`, `id_pasar`, `id_komoditi`, `harga`, `tanggal`) VALUES
(6, 3, 7, 14000, '2019-10-23'),
(7, 3, 6, 14000, '2019-10-23'),
(8, 3, 9, 14000, '2019-10-23'),
(10, 3, 11, 14000, '2019-10-23'),
(11, 3, 10, 14000, '2019-10-23'),
(14, 4, 4, 33000, '2019-10-23'),
(15, 4, 5, 14000, '2019-10-23'),
(16, 4, 6, 14000, '2019-10-23'),
(17, 4, 7, 14000, '2019-10-23'),
(18, 3, 8, 14000, '2019-10-23'),
(19, 3, 4, 12, '2019-11-10'),
(20, 3, 4, 13212, '2019-11-12'),
(21, 3, 5, 10000, '2019-11-12'),
(22, 3, 6, 12000, '2019-11-12'),
(23, 3, 8, 31000, '2019-11-12'),
(24, 3, 22, 40000, '2019-11-12'),
(25, 3, 34, 30400, '2019-11-12'),
(26, 4, 5, 9000, '2019-11-12'),
(27, 12, 24, 1000, '2019-11-19'),
(28, 11, 34, 100, '2019-11-19');

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
(4, 'Beras Premium', 'C:/xampp2/htdocs/pangan/gambar/Setra_I_Premium3.png'),
(5, 'Minyak Goreng', 'C:/xampp2/htdocs/pangan/gambar/Curah1.png'),
(6, 'Cabe Merah Keriting', 'C:/xampp2/htdocs/pangan/gambar/cabe-merah-keriting.png'),
(7, 'Cabe Rawit Merah', 'C:/xampp2/htdocs/pangan/gambar/cabe-rawit-merah1.png'),
(8, 'Cabe Merah Besar', ''),
(9, 'Cabe Rawit Hijau', 'C:/xampp2/htdocs/pangan/gambar/cabe-rawit-hijau1.png'),
(10, 'Bawang Merah', 'C:/xampp2/htdocs/pangan/gambar/bawang-merah2.png'),
(11, 'Bawang Putih', 'C:/xampp2/htdocs/pangan/gambar/bawang-putih.png'),
(12, 'Daging Sapi Paha Belakang', 'C:/xampp2/htdocs/pangan/gambar/daging-sapi-paha-belakang.png'),
(13, 'Daging Sapi Murni', 'C:/xampp2/htdocs/pangan/gambar/daging-sapi-murni.png'),
(14, 'Ayam Broiler/Ras', 'C:/xampp2/htdocs/pangan/gambar/ayam-broiler-ras2.png'),
(15, 'Telur Ayam Ras', 'C:/xampp2/htdocs/pangan/gambar/telur-ayam-ras.png'),
(16, 'Gula Pasir', 'C:/xampp2/htdocs/pangan/gambar/gula-pasir.png'),
(17, 'Tepung Terigu', 'C:/xampp2/htdocs/pangan/gambar/tepung-terigu1.png'),
(18, 'Garam Dapur', 'C:/xampp2/htdocs/pangan/gambar/garam-dapur.png'),
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
(35, 'Margarin Blueband Sachet', ''),
(38, 'asd', 'C:/xampp2/htdocs/pangan/gambar/ayam-broiler-ras.png'),
(39, 'asd', 'C:/xampp2/htdocs/pangan/gambar/ayam-broiler-ras1.png'),
(40, 'as', 'C:/xampp2/htdocs/pangan/gambar/cabe-rawit-merah.png'),
(41, 'Curah', 'C:/xampp2/htdocs/pangan/gambar/Curah.png'),
(42, 'Beras Premium', 'C:/xampp2/htdocs/pangan/gambar/cabe-rawit-hijau.png'),
(43, 'Tepung Terigu', 'C:/xampp2/htdocs/pangan/gambar/tepung-terigu.png');

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
(3, 'Pasar Rakyat Oro-0ro Dowo 1', 'Jalan Guntur No. 20, Kelurahan Oro-0ro Dowo, Kecamatan Klojen, Kota Malang ', 'https://goo.gl/maps/5yHu2JGPYkScyPh96 1'),
(4, 'Pasar Gadang Malang', 'Jalan Pasar Gadang, Kelurahan Bumiayu, Kecamatan Sukun, Kota Malang', 'https://goo.gl/maps/Ea3asM381oQSzEA86'),
(6, 'Pasar Blimbing', 'Jl. Borobudur, Kota Malang, Jawa Timur 65126', 'https://goo.gl/maps/BRe6E6Jy9FVDF9or7'),
(7, 'Pasar Tawangmangu', 'Jalan Tawangmangu, No.8, Kelurahan Lowokwaru, Kecamatan Lowokwaru, Kota Malang', 'https://goo.gl/maps/RKtvnTMNJ5uFTVtAA'),
(9, 'Pasar Pandanwangi', 'Jalan Simpang Laksda Adi Sucipto, Kelurahan Pandanwangi, Kecamatan Blimbing, Kota Malang', 'https://goo.gl/maps/zW9G4FSAhZzJCk8y5'),
(10, 'Pasar Kasin', 'Jalan IR Rais, Kelurahan Tanjungrejo, Kecamatan Sukun, Kota Malang', 'https://goo.gl/maps/rTTAA93smJBAtcRy8'),
(11, 'Pasar Kebalen', 'Jalan Zaenal Zakse, No. 28-38, Kelurahan Jodipan, Kecamatan Blimbing, Kota Malang', 'https://goo.gl/maps/tMgUZbXpgprwk1jL6'),
(12, 'tes1', 'tes', 'tes'),
(14, 'Pasar Tlogowaru', 'Jalan Tlogo Waru, Kelurahan Tlogowaru, Kecamatan Kedungkandang, Kota Malang', 'https://goo.gl/maps/EAk4PJYnjkdQJJ2K7');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `user` varchar(100) NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `user`, `password`) VALUES
(1, 'bimo', 'bimo'),
(2, 'bimo1', 'bimo1'),
(3, 'bimo2', 'bimo2'),
(4, 'sgs', 'deh'),
(5, 'sgs', 'dehhk');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `table_harga`
--
ALTER TABLE `table_harga`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_komoditi` (`id_komoditi`),
  ADD KEY `fk_pasar` (`id_pasar`);

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
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `table_harga`
--
ALTER TABLE `table_harga`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT untuk tabel `table_komoditi`
--
ALTER TABLE `table_komoditi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT untuk tabel `table_pasar`
--
ALTER TABLE `table_pasar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `table_harga`
--
ALTER TABLE `table_harga`
  ADD CONSTRAINT `fk_komoditi` FOREIGN KEY (`id_komoditi`) REFERENCES `table_komoditi` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_pasar` FOREIGN KEY (`id_pasar`) REFERENCES `table_pasar` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
