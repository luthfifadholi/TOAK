-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 15 Jun 2016 pada 13.26
-- Versi Server: 10.1.8-MariaDB
-- PHP Version: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `toak`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `berita`
--

CREATE TABLE `berita` (
  `id` int(20) NOT NULL,
  `judul` varchar(75) NOT NULL,
  `penulis` varchar(25) NOT NULL,
  `isi` text NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `berita`
--

INSERT INTO `berita` (`id`, `judul`, `penulis`, `isi`, `tanggal`, `status`) VALUES
(1, 'Rapat RT', 'admin', 'DIberitahukan bahwasannya besok rabu ada rapat di rumah pak chandra', '2016-06-02 01:16:17', NULL),
(2, 'Di Magelang Ada Lomba Dorong Motor Mogok Berhadiah Bensin', 'admin', ' Lomba yang digelar warga Desa Banyusari Kecamatan Grabag Kabupaten Magelang ini cukup unik. Mereka menggelar lomba mendorong motor mogok.\r\n\r\nKegiatan yang dilaksanakan di jalan desa itu diikuti oleh belasan pemuda. Tingginya minat ini dikarenakan hadiahnya cukup menggiurkan. \r\n\r\nJuara pertama BBM sebanyak 9 liter, juara II 6 liter dan juara III 4,5 liter. “Awalnya ide lomba ini setelah kita lihat banyak pengendara yang kebahisan bensin saat ada kebijakan pengurangan BBM,” kata Ketua Panitia Yayan.\r\n\r\nSelain itu, lomba ini lomba ini digelar juga dalam rangka protes kebijakan pemerintah soal pembatasan BBM. “Juga masih dalam rangka 17 agustus,”kata dia.\r\n\r\nLomba yang digelar di jalur alternatif Magelang-Grabag ini masing-masing tim terdiri dari dua orang. Satu naik di atas motor satunya mendorong. \r\nMereka beradu cepat dengan jarak sekitar 150 – 300 meter. Suasana semakin meriah ketika sorak para penonton menyemangati peserta lomba.', '2016-06-08 02:21:49', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `berkas`
--

CREATE TABLE `berkas` (
  `id` int(11) NOT NULL,
  `namafile` text NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `berkas`
--

INSERT INTO `berkas` (`id`, `namafile`, `tanggal`) VALUES
(3, 'soal dleete linked list.docx', '2016-06-02 09:23:19'),
(5, 'catatan strukdat kelas.txt', '2016-06-03 06:00:07'),
(6, 'Capture.PNG', '2016-06-04 00:55:01'),
(7, 'sources.list ubuntu.JPG', '2016-06-05 09:33:51');

-- --------------------------------------------------------

--
-- Struktur dari tabel `biodata`
--

CREATE TABLE `biodata` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `alamat` varchar(70) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `telepon` varchar(20) DEFAULT NULL,
  `status` varchar(15) DEFAULT NULL,
  `foto` text NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `biodata`
--

INSERT INTO `biodata` (`id`, `nama`, `alamat`, `email`, `telepon`, `status`, `foto`, `username`, `password`) VALUES
(5, 'admin', 'default', 'admin@toak.com', 'default', 'admin', 'admin_toak.png', 'admin', 'admin'),
(6, 'M. Luthfi Fadholi', 'Yogyakarta', 'luthfi.fadholi@gmail.com', '085250278394', 'admin', 'akun.png', 'luthfifadholi', '1234'),
(7, 'Evodie Leanishar H', 'Kaliurang', 'evodielh23@outlook.com', '08570000000', 'warga', 'akun.png', 'evodie', '1234'),
(8, 'Ilma Fadhlia Furqaana', 'Kaliurang', 'ilma.fadhlia@gmail.com', '085652053576', 'warga', 'akun.png', 'ilma', '1234'),
(9, 'Setyo Legianto', 'Kaliurang', 'setyo@toak.com', '086200000000', 'warga', 'akun.png', 'setyo', '1234'),
(10, 'Idris Musa', 'Kaliurang', 'musa@toak.com', '0852000000', 'warga', 'akun.png', 'musa', '1234');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kas`
--

CREATE TABLE `kas` (
  `id` int(11) NOT NULL,
  `jenis` varchar(30) NOT NULL,
  `nominal` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `satuan` varchar(20) NOT NULL,
  `total` int(11) NOT NULL,
  `status` varchar(15) NOT NULL,
  `bulan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kas`
--

INSERT INTO `kas` (`id`, `jenis`, `nominal`, `jumlah`, `satuan`, `total`, `status`, `bulan`) VALUES
(1, 'Donatur', 100000, 2, 'Orang', 200000, 'pemasukan', 'januari'),
(2, 'Iuran warga', 20000, 50, 'Orang', 1000000, 'pemasukan', 'februari'),
(3, 'Aspal jalan', 100000, 1, 'jalan', 100000, 'pengeluaran', 'januari'),
(4, 'Kentongan', 10000, 2, 'Buah', 20000, 'pengeluaran', 'februari');

-- --------------------------------------------------------

--
-- Struktur dari tabel `keluhan`
--

CREATE TABLE `keluhan` (
  `id` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `isi_keluhan` varchar(70) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `keluhan`
--

INSERT INTO `keluhan` (`id`, `nama`, `isi_keluhan`, `tanggal`) VALUES
(2, 'M. Luthfi Fadholi', 'akakakakakaa', '2016-06-04 10:42:25'),
(3, 'Evodie Leanishar H', 'mamamaamam', '2016-06-04 10:42:49'),
(4, 'Evodie Leanishar H', 'nananana', '2016-06-04 10:47:21'),
(5, 'M. Luthfi Fadholi', 'babababab', '2016-06-04 10:47:54');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengumuman`
--

CREATE TABLE `pengumuman` (
  `id` int(11) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `tempat` varchar(30) NOT NULL,
  `tanggal` varchar(30) NOT NULL,
  `waktu` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL,
  `tanggal_posting` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pengumuman`
--

INSERT INTO `pengumuman` (`id`, `judul`, `tempat`, `tanggal`, `waktu`, `status`, `tanggal_posting`) VALUES
(1, 'Rapat RT', 'Rumah Pak RT', '25 Juni 2016', '09.00 - 10.00', 'Aktif', '2016-06-09 12:16:29'),
(2, 'Lomba 17an', 'Lapangan Reformasi', '2016-06-19', '07.00 - Selesai', 'admin', '2016-06-09 12:18:22');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `berkas`
--
ALTER TABLE `berkas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `biodata`
--
ALTER TABLE `biodata`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kas`
--
ALTER TABLE `kas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `keluhan`
--
ALTER TABLE `keluhan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengumuman`
--
ALTER TABLE `pengumuman`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `berkas`
--
ALTER TABLE `berkas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `biodata`
--
ALTER TABLE `biodata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `kas`
--
ALTER TABLE `kas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `keluhan`
--
ALTER TABLE `keluhan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `pengumuman`
--
ALTER TABLE `pengumuman`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
