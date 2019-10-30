-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Waktu pembuatan: 30 Okt 2019 pada 00.56
-- Versi server: 5.7.26
-- Versi PHP: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `daurulang`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenis_sampah`
--

DROP TABLE IF EXISTS `jenis_sampah`;
CREATE TABLE IF NOT EXISTS `jenis_sampah` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `deskripsi` varchar(100) DEFAULT NULL,
  `gambar` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembeli`
--

DROP TABLE IF EXISTS `pembeli`;
CREATE TABLE IF NOT EXISTS `pembeli` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `no_telp` varchar(25) NOT NULL,
  `email` varchar(20) DEFAULT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

DROP TABLE IF EXISTS `produk`;
CREATE TABLE IF NOT EXISTS `produk` (
  `id` int(11) NOT NULL,
  `gambar` varchar(50) NOT NULL,
  `harga` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `deskripsi` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `sampah`
--

DROP TABLE IF EXISTS `sampah`;
CREATE TABLE IF NOT EXISTS `sampah` (
  `id` int(11) NOT NULL,
  `harga_per_kilo` varchar(50) NOT NULL,
  `deskripsi` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

DROP TABLE IF EXISTS `transaksi`;
CREATE TABLE IF NOT EXISTS `transaksi` (
  `id` int(11) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `id_pembeli` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `total_bayar` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_produk` (`id_produk`),
  KEY `id_pembeli` (`id_pembeli`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
