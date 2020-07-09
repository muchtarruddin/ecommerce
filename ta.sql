-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 09 Jul 2020 pada 18.57
-- Versi server: 10.1.36-MariaDB
-- Versi PHP: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ta`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_admin`
--

CREATE TABLE `tabel_admin` (
  `id_admin` int(11) NOT NULL,
  `nama_admin` varchar(30) DEFAULT NULL,
  `jenis_kelamin` varchar(10) DEFAULT NULL,
  `alamat` varchar(30) DEFAULT NULL,
  `telepon` int(11) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tabel_admin`
--

INSERT INTO `tabel_admin` (`id_admin`, `nama_admin`, `jenis_kelamin`, `alamat`, `telepon`, `password`) VALUES
(1, 'Rudi', 'laki-laki', 'rungkut', 2147483647, NULL),
(2, 'Aan', 'laki-laki', 'simo', 2147483647, NULL),
(3, 'Mega', 'perempuan', 'kenjeran', 2147483647, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_barang`
--

CREATE TABLE `tabel_barang` (
  `id_barang` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `id_jenis` int(11) DEFAULT NULL,
  `id_admin` int(11) DEFAULT NULL,
  `nama_barang` varchar(30) DEFAULT NULL,
  `harga_barang` int(11) DEFAULT NULL,
  `picture` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tabel_barang`
--

INSERT INTO `tabel_barang` (`id_barang`, `id_user`, `id_jenis`, `id_admin`, `nama_barang`, `harga_barang`, `picture`) VALUES
(1001, 11, 101, 1, 'liquid', 150000, NULL),
(1002, 22, 102, 2, 'kipas', 200000, NULL),
(1003, 33, 103, 3, 'kiprok', 250000, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_chekout`
--

CREATE TABLE `tabel_chekout` (
  `id_chekout` int(11) NOT NULL,
  `id_admin` int(11) DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL,
  `id_barang` int(11) DEFAULT NULL,
  `tgl_penjualan` date DEFAULT NULL,
  `harga_jual` int(11) DEFAULT NULL,
  `qty_jual` int(11) DEFAULT NULL,
  `total_penjualan` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tabel_chekout`
--

INSERT INTO `tabel_chekout` (`id_chekout`, `id_admin`, `id_user`, `id_barang`, `tgl_penjualan`, `harga_jual`, `qty_jual`, `total_penjualan`) VALUES
(1011, 1, 11, 1001, '2020-12-11', 150000, 2, 300000),
(1012, 2, 22, 1002, '2019-11-20', 200000, 2, 400000),
(1013, 3, 33, 1003, '2018-03-03', 250000, 3, 750000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_jenis_barang`
--

CREATE TABLE `tabel_jenis_barang` (
  `id_jenis` int(11) NOT NULL,
  `nama_jenis_barang` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tabel_jenis_barang`
--

INSERT INTO `tabel_jenis_barang` (`id_jenis`, `nama_jenis_barang`) VALUES
(101, 'vapor'),
(102, 'listri'),
(103, 'motor');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_user`
--

CREATE TABLE `tabel_user` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(30) DEFAULT NULL,
  `jenis_kel_user` varchar(10) DEFAULT NULL,
  `alamat` varchar(30) DEFAULT NULL,
  `email_user` varchar(30) DEFAULT NULL,
  `telepon` int(11) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tabel_user`
--

INSERT INTO `tabel_user` (`id_user`, `nama_user`, `jenis_kel_user`, `alamat`, `email_user`, `telepon`, `password`) VALUES
(11, 'Yehezkiel', 'laki-laki', 'rungkut', 'yehe@gmail.com', 2147483647, NULL),
(22, 'abdul', 'laki-laki', 'simo', 'abdul@gmail.com', 2147483647, NULL),
(33, 'haikal', 'laki-laki', 'kenjeran', 'haikal@gmail.com', 2147483647, NULL);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tabel_admin`
--
ALTER TABLE `tabel_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `tabel_barang`
--
ALTER TABLE `tabel_barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indeks untuk tabel `tabel_chekout`
--
ALTER TABLE `tabel_chekout`
  ADD PRIMARY KEY (`id_chekout`);

--
-- Indeks untuk tabel `tabel_jenis_barang`
--
ALTER TABLE `tabel_jenis_barang`
  ADD PRIMARY KEY (`id_jenis`);

--
-- Indeks untuk tabel `tabel_user`
--
ALTER TABLE `tabel_user`
  ADD PRIMARY KEY (`id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
