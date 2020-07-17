-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 17 Jul 2020 pada 11.32
-- Versi server: 10.4.8-MariaDB
-- Versi PHP: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `onlineshoppku`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `username` varchar(10) DEFAULT NULL,
  `password` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin', 'admin'),
('admin', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_pelanggan`
--

CREATE TABLE `data_pelanggan` (
  `no` int(2) NOT NULL,
  `nama` varchar(10) DEFAULT NULL,
  `Email` varchar(15) DEFAULT NULL,
  `Telepon` int(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `data_pelanggan`
--

INSERT INTO `data_pelanggan` (`no`, `nama`, `Email`, `Telepon`) VALUES
(1, 'soleh', 'soleh@gmail.com', 8545754);

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_pembelian`
--

CREATE TABLE `data_pembelian` (
  `no` int(2) NOT NULL,
  `nama` varchar(10) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `total` varchar(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `data_pembelian`
--

INSERT INTO `data_pembelian` (`no`, `nama`, `tanggal`, `total`) VALUES
(2, 'soleh', '2020-07-08', '5000000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_produk`
--

CREATE TABLE `data_produk` (
  `id` int(2) NOT NULL,
  `nama` varchar(15) NOT NULL,
  `harga` varchar(10) NOT NULL,
  `berat` varchar(5) NOT NULL,
  `foto` geometrycollection NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `data_produk`
--

INSERT INTO `data_produk` (`id`, `nama`, `harga`, `berat`, `foto`) VALUES
(0, 'Sepatu', '15000', '200', 0x);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `data_pelanggan`
--
ALTER TABLE `data_pelanggan`
  ADD PRIMARY KEY (`no`);

--
-- Indeks untuk tabel `data_pembelian`
--
ALTER TABLE `data_pembelian`
  ADD PRIMARY KEY (`no`);

--
-- Indeks untuk tabel `data_produk`
--
ALTER TABLE `data_produk`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
