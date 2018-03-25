-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 25 Mar 2018 pada 16.56
-- Versi Server: 10.1.26-MariaDB
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `smartedu`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `buku`
--

CREATE TABLE `buku` (
  `isbn` varchar(24) NOT NULL,
  `judul_iklan` text NOT NULL,
  `judul_buku` text NOT NULL,
  `penerbit` varchar(24) NOT NULL,
  `penulis` varchar(24) NOT NULL,
  `pemilik_buku` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `buku`
--

INSERT INTO `buku` (`isbn`, `judul_iklan`, `judul_buku`, `penerbit`, `penulis`, `pemilik_buku`) VALUES
('1Q84', 'Dipinjamkan Buku 1Q84', '1Q84 Jilid 1', 'wakanda', 'Haruki Murakami', 'nandans'),
('1Q84-3', 'Dipinjamkan', '1Q84-3', 'wakanda', 'Haruki Murakami', 'nandans'),
('dan', 'Dipinjamkan Buku!!!', 'Dance Dance Dance', 'wakanda', 'Haruki Murakami', 'nandans'),
('IQ84-2', 'Dipinjamkan IQ84 jilid-2', '1Q84 jilid 2', 'wakanda', 'Haruki Murakami', 'nandans'),
('kaf', 'Dipinjamkan Buku !!!', 'Kafka On The Shor', 'wakanda', 'Haruki Murakami', 'nandans'),
('nor', 'Dipinjamkan Buku', 'Norwegian Wood', 'wakanda', 'Haruki Murakami', 'nandans'),
('tls', 'Dipinjamkan Buku', 'The Last Symbol', 'wakanda', 'Dan Brown', 'nandans'),
('wild-ssa', 'Dipinjamkan', 'A Wild Sheep Chase', 'wakanda', 'Haruki Murakami', 'nandans');

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_buku`
--

CREATE TABLE `detail_buku` (
  `ISBN` varchar(24) NOT NULL,
  `kategori` varchar(1024) NOT NULL,
  `sinopsis` text NOT NULL,
  `foto_buku` varchar(1024) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `detail_buku`
--

INSERT INTO `detail_buku` (`ISBN`, `kategori`, `sinopsis`, `foto_buku`) VALUES
('1Q84', '', '', 'IMG_1031.jpg'),
('1Q84-3', '', '', '1q84_3.jpg'),
('dan', '', '', '9780099448761.jpg'),
('IQ84-2', '', '', 'JPEG_5586_1Q84_Jilid_2__.jpg'),
('kaf', '', '', 'Bloc_Illustration_Kafka_Shore_COVER_702.jpg'),
('nor', '', '', '41OVhGrdcSL._SX322_BO1,204,203,200_.jpg'),
('tls', '', '', '51h7jsAqP5L._SX319_BO1,204,203,200_.jpg'),
('wild-ssa', '', '', '41GCt7ZHYWL._SX323_BO1,204,203,200_.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_mentor`
--

CREATE TABLE `detail_mentor` (
  `username` varchar(24) DEFAULT NULL,
  `id_detail_mentor` varchar(16) NOT NULL,
  `nama_lengkap` varchar(30) NOT NULL,
  `matakuliah` enum('Kalkulus','Fisika','Kimia') NOT NULL,
  `transkrip_nilai` varchar(32) NOT NULL,
  `video_singkat` varchar(32) NOT NULL,
  `no_rekening` varchar(24) NOT NULL,
  `bank` enum('BCA','BRI','Mandiri','BNI') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_user`
--

CREATE TABLE `detail_user` (
  `username` varchar(24) NOT NULL,
  `id_detail_user` varchar(16) NOT NULL,
  `asal_kampus` enum('ITERA','ITB','UNPAD','UI') NOT NULL,
  `alamat` text NOT NULL,
  `foto_profil` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `detail_user`
--

INSERT INTO `detail_user` (`username`, `id_detail_user`, `asal_kampus`, `alamat`, `foto_profil`) VALUES
('nandans', 'nandans', '', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `username` varchar(24) NOT NULL,
  `password` varchar(32) NOT NULL,
  `status` enum('SI','ME') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`username`, `password`, `status`) VALUES
('nandans', '9334baa0289016e7bcd5c058918baeef', 'SI');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`isbn`),
  ADD KEY `id_pemilik` (`pemilik_buku`);

--
-- Indexes for table `detail_buku`
--
ALTER TABLE `detail_buku`
  ADD PRIMARY KEY (`ISBN`);

--
-- Indexes for table `detail_mentor`
--
ALTER TABLE `detail_mentor`
  ADD PRIMARY KEY (`id_detail_mentor`),
  ADD KEY `username` (`username`);

--
-- Indexes for table `detail_user`
--
ALTER TABLE `detail_user`
  ADD PRIMARY KEY (`id_detail_user`),
  ADD KEY `username2` (`username`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `buku`
--
ALTER TABLE `buku`
  ADD CONSTRAINT `id_pemilik` FOREIGN KEY (`pemilik_buku`) REFERENCES `user` (`username`);

--
-- Ketidakleluasaan untuk tabel `detail_buku`
--
ALTER TABLE `detail_buku`
  ADD CONSTRAINT `ISBN` FOREIGN KEY (`ISBN`) REFERENCES `buku` (`isbn`) ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `detail_mentor`
--
ALTER TABLE `detail_mentor`
  ADD CONSTRAINT `username` FOREIGN KEY (`username`) REFERENCES `user` (`username`) ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `detail_user`
--
ALTER TABLE `detail_user`
  ADD CONSTRAINT `username2` FOREIGN KEY (`username`) REFERENCES `user` (`username`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
