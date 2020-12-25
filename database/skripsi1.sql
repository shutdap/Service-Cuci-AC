-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 25, 2020 at 08:41 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `skripsi1`
--

-- --------------------------------------------------------

--
-- Table structure for table `detil_ac`
--

CREATE TABLE `detil_ac` (
  `id` int(20) NOT NULL,
  `tasks_id` int(20) NOT NULL,
  `jenis_ac` varchar(100) NOT NULL,
  `jm_unit` int(10) NOT NULL,
  `harga` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detil_ac`
--

INSERT INTO `detil_ac` (`id`, `tasks_id`, `jenis_ac`, `jm_unit`, `harga`) VALUES
(1, 1, 'aa', 2, '1111'),
(2, 1, 'aa', 2, '1111'),
(3, 1, '1', 2, '120000'),
(4, 6, '49', 2, '0'),
(5, 7, '8', 1, '550000'),
(6, 7, '2', 1, '60000'),
(7, 8, '1', 2, '120000'),
(8, 8, '8', 1, '550000'),
(9, 9, '1', 1, '60000'),
(10, 9, '2', 1, '60000'),
(11, 9, '14', 1, '1500000'),
(12, 10, '52', 1, '0'),
(13, 19, '4', 1, '60000'),
(14, 19, '1', 2, '120000'),
(15, 20, '9', 1, '550000'),
(16, 20, '2', 2, '120000');

-- --------------------------------------------------------

--
-- Table structure for table `detil_transaksi`
--

CREATE TABLE `detil_transaksi` (
  `id` int(20) NOT NULL,
  `tasks_id` int(20) NOT NULL,
  `nama_barang` varchar(256) NOT NULL,
  `harga` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detil_transaksi`
--

INSERT INTO `detil_transaksi` (`id`, `tasks_id`, `nama_barang`, `harga`) VALUES
(1, 5, 'ABC', 100000),
(2, 5, 'tes', 100000),
(3, 4, 'dwa', 100000),
(4, 4, 'ABC', 100000),
(5, 10, 'Kabel ', 100000);

-- --------------------------------------------------------

--
-- Table structure for table `jenis_ac`
--

CREATE TABLE `jenis_ac` (
  `id` int(10) NOT NULL,
  `jenis` varchar(100) NOT NULL,
  `deskripsi` varchar(100) NOT NULL,
  `harga` decimal(10,0) NOT NULL,
  `kategori` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jenis_ac`
--

INSERT INTO `jenis_ac` (`id`, `jenis`, `deskripsi`, `harga`, `kategori`) VALUES
(1, 'AC Split 1/2 PK', 'AC Split 1/2 PK', '60000', 'tambahfreon'),
(2, 'AC Split 1 PK', 'AC Split 1 PK', '60000', 'tambahfreon'),
(3, 'AC Split 1 1/2 PK', 'AC Split 1 1/2 PK', '60000', 'tambahfreon'),
(4, 'AC Split 2 PK', 'AC Split 2 PK', '60000', 'tambahfreon'),
(5, 'AC Cassette', 'AC Cassette', '200000', 'tambahfreon'),
(6, 'AC Split Duct', 'AC Split Duct', '400000', 'tambahfreon'),
(7, ' AC Split 0.5 Pk', 'Bongkar  + pasang AC Split 0.5 Pk', '550000', 'bongkarpasang'),
(8, ' AC Split 1 Pk', 'Bongkar  + pasang AC Split 1 Pk', '550000', 'bongkarpasang'),
(9, ' AC Split 1,5 Pk', 'Bongkar  + pasang AC Split 1,5 Pk', '550000', 'bongkarpasang'),
(10, ' AC Split 2 Pk', 'Bongkar  + pasang AC Split 2 Pk', '650000', 'bongkarpasang'),
(11, ' AC Split 2,5 Pk', 'Bongkar  + pasang AC Split 2,5 Pk', '650000', 'bongkarpasang'),
(12, ' AC Split 3 Pk', 'Bongkar  + pasang AC Split 3 Pk', '650000', 'bongkarpasang'),
(13, 'AC Cassette 2 Pk', 'Bongkar + pasang AC Cassette 2 Pk', '1500000', 'bongkarpasang'),
(14, 'AC Cassette 2,5 Pk', 'Bongkar + pasang AC Cassette 2,5 Pk', '1500000', 'bongkarpasang'),
(15, 'AC Cassette 3 Pk', 'Bongkar + pasang AC Cassette 3 Pk', '1500000', 'bongkarpasang'),
(16, 'AC Cassette 4 Pk', 'Bongkar + Pasang AC Cassette 4 Pk', '1800000', 'bongkarpasang'),
(17, 'AC Cassette 5 Pk', 'Bongkar + Pasang AC Cassette 5 Pk', '1800000', 'bongkarpasang'),
(18, 'AC Split Duct 6 Pk', 'Bongkar + Pasang AC Split Duct 6 Pk', '2500000', 'bongkarpasang'),
(19, 'AC Split Duct 8 Pk', 'Bongkar + Pasang AC Split Duct 8 Pk', '5500000', 'bongkarpasang'),
(20, 'AC Split Duct 10 Pk', 'Bongkar + Pasang AC Split Duct 10 Pk', '8000000', 'bongkarpasang'),
(21, 'indoor AC Split 0.5 Pk', 'Bongkar + pasang indoor AC Split 0.5 Pk', '350000', 'bongkarpasang'),
(22, 'indoor AC Split 1 Pk', 'Bongkar + pasang indoor AC Split 1 Pk', '350000', 'bongkarpasang'),
(23, 'indoor AC Split 1,5 Pk', 'Bongkar + pasang indoor AC Split 1,5 Pk', '350000', 'bongkarpasang'),
(24, 'indoor AC Split 2 Pk', 'Bongkar + pasang indoor AC Split 2 Pk', '450000', 'bongkarpasang'),
(25, 'indoor AC Split 2,5 Pk', 'Bongkar + pasang indoor AC Split 2,5 Pk', '450000', 'bongkarpasang'),
(26, 'indoor AC Split 3 Pk', 'Bongkar + pasang indoor AC Split 3 Pk', '450000', 'bongkarpasang'),
(27, 'indoor AC Cassette 2 Pk', 'Bongkar + pasang indoor AC Cassette 2 Pk', '750000', 'bongkarpasang'),
(28, 'indoor AC Cassette 2,5 Pk', 'Bongkar + pasang indoor AC Cassette 2,5 Pk', '750000', 'bongkarpasang'),
(29, 'indoor AC Cassette 3 Pk', 'Bongkar + pasang indoor AC Cassette 3 Pk', '850000', 'bongkarpasang'),
(30, 'indoor AC Cassette 4 Pk', 'Bongkar + pasang indoor AC Cassette 4 Pk', '950000', 'bongkarpasang'),
(31, 'indoor AC Cassette 5 Pk', 'Bongkar + Pasang indoor AC Cassette 5 Pk', '1000000', 'bongkarpasang'),
(32, 'indoor AC Split Duct 6 Pk', 'Bongkar + Pasang indoor AC Split Duct 6 Pk', '1500000', 'bongkarpasang'),
(33, 'indoor AC Split Duct 8 Pk', 'Bongkar + Pasang indoor AC Split Duct 8 Pk', '3500000', 'bongkarpasang'),
(34, 'indoor AC Split Duct 10 Pk', 'Bongkar + Pasang indoor AC Split Duct 10 Pk', '4500000', 'bongkarpasang'),
(35, 'outdoor AC Split 0.5 Pk', 'Bongkar + pasang outdoor AC Split 0.5 Pk', '350000', 'bongkarpasang'),
(36, 'outdoor AC Split 1 Pk', 'Bongkar + pasang outdoor AC Split 1 Pk', '350000', 'bongkarpasang'),
(37, 'outdoor AC Split 1,5 Pk', 'Bongkar + pasang outdoor AC Split 1,5 Pk', '350000', 'bongkarpasang'),
(38, 'outdoor AC Split 2 Pk', 'Bongkar + pasang outdoor AC Split 2 Pk', '450000', 'bongkarpasang'),
(39, 'outdoor AC Split 2,5 Pk', 'Bongkar + pasang outdoor AC Split 2,5 Pk', '450000', 'bongkarpasang'),
(40, 'outdoor AC Split 3 Pk', 'Bongkar + pasang outdoor AC Split 3 Pk', '450000', 'bongkarpasang'),
(41, 'outdoor AC Cassette  2 Pk', 'Bongkar + pasang outdoor AC Cassette  2 Pk', '750000', 'bongkarpasang'),
(42, 'outdoor AC Cassette  2,5 Pk', 'Bongkar + pasang outdoor AC Cassette  2,5 Pk', '750000', 'bongkarpasang'),
(43, 'outdoor AC Cassette  3 Pk', 'Bongkar + pasang outdoor AC Cassette  3 Pk', '850000', 'bongkarpasang'),
(44, 'outdoor AC Cassette 4 Pk', 'Bongkar + pasang outdoor AC Cassette 4 Pk', '950000', 'bongkarpasang'),
(45, 'outdoor AC Cassette 5 Pk', 'Bongkar + Pasang outdoor AC Cassette 5 Pk', '1000000', 'bongkarpasang'),
(46, 'outdoor AC Split Duct 6 Pk', 'Bongkar + Pasang outdoor AC Split Duct 6 Pk', '1500000', 'bongkarpasang'),
(47, 'outdoor AC Split Duct 8 Pk', 'Bongkar + Pasang outdoor AC Split Duct 8 Pk', '3500000', 'bongkarpasang'),
(48, 'outdoor AC Split Duct 10 Pk', 'Bongkar + Pasang outdoor AC Split Duct 10 Pk', '4500000', 'bongkarpasang'),
(49, ' AC Split 0.5 Pk', 'Perbaikan AC Split 0.5 Pk', '0', 'perbaikan'),
(50, ' AC Split 1 Pk', 'Perbaikan AC Split 1 Pk', '0', 'perbaikan'),
(51, ' AC Split 1,5 Pk', 'Perbaikan AC Split 1,5 Pk', '0', 'perbaikan'),
(52, ' AC Split 2 Pk', 'Perbaikan AC Split 2 Pk', '0', 'perbaikan'),
(53, ' AC Split 2,5 Pk', 'Perbaikan AC Split 2,5 Pk', '0', 'perbaikan'),
(54, ' AC Split 3 Pk', 'Perbaikan AC Split 3 Pk', '0', 'perbaikan'),
(55, 'AC Cassette 2 Pk', 'Perbaikan AC Cassette 2 Pk', '0', 'perbaikan'),
(56, 'AC Cassette 2,5 Pk', 'Perbaikan AC Cassette 2,5 Pk', '0', 'perbaikan'),
(57, 'AC Cassette 3 Pk', 'Perbaikan AC Cassette 3 Pk', '0', 'perbaikan'),
(58, 'AC Cassette 4 Pk', 'Perbaikan AC Cassette 4 Pk', '0', 'perbaikan'),
(59, 'AC Cassette 5 Pk', 'Perbaikan AC Cassette 5 Pk', '0', 'perbaikan'),
(60, 'AC Split Duct 6 Pk', 'Perbaikan AC Split Duct 6 Pk', '0', 'perbaikan'),
(61, 'AC Split Duct 8 Pk', 'Perbaikan AC Split Duct 8 Pk', '0', 'perbaikan'),
(62, 'AC Split Duct 10 Pk', 'Perbaikan AC Split Duct 10 Pk', '0', 'perbaikan'),
(63, 'indoor AC Split 0.5 Pk', 'Perbaikan indoor AC Split 0.5 Pk', '0', 'perbaikan'),
(64, 'indoor AC Split 1 Pk', 'Perbaikan indoor AC Split 1 Pk', '0', 'perbaikan'),
(65, 'indoor AC Split 1,5 Pk', 'Perbaikan indoor AC Split 1,5 Pk', '0', 'perbaikan'),
(66, 'indoor AC Split 2 Pk', 'Perbaikan indoor AC Split 2 Pk', '0', 'perbaikan'),
(67, 'indoor AC Split 2,5 Pk', 'Perbaikan indoor AC Split 2,5 Pk', '0', 'perbaikan'),
(68, 'indoor AC Split 3 Pk', 'Perbaikan indoor AC Split 3 Pk', '0', 'perbaikan'),
(69, 'indoor AC Cassette 2 Pk', 'Perbaikan indoor AC Cassette 2 Pk', '0', 'perbaikan'),
(70, 'indoor AC Cassette 2,5 Pk', 'Perbaikan indoor AC Cassette 2,5 Pk', '0', 'perbaikan'),
(71, 'indoor AC Cassette 3 Pk', 'Perbaikan indoor AC Cassette 3 Pk', '0', 'perbaikan'),
(72, 'indoor AC Cassette 4 Pk', 'Perbaikan indoor AC Cassette 4 Pk', '0', 'perbaikan'),
(73, 'indoor AC Cassette 5 Pk', 'Perbaikan indoor AC Cassette 5 Pk', '0', 'perbaikan'),
(74, 'indoor AC Split Duct 6 Pk', 'Perbaikan indoor AC Split Duct 6 Pk', '0', 'perbaikan'),
(75, 'indoor AC Split Duct 8 Pk', 'Perbaikan indoor AC Split Duct 8 Pk', '0', 'perbaikan'),
(76, 'indoor AC Split Duct 10 Pk', 'Perbaikan indoor AC Split Duct 10 Pk', '0', 'perbaikan'),
(77, 'outdoor AC Split 0.5 Pk', 'Perbaikan outdoor AC Split 0.5 Pk', '0', 'perbaikan'),
(78, 'outdoor AC Split 1 Pk', 'Perbaikan outdoor AC Split 1 Pk', '0', 'perbaikan'),
(79, 'outdoor AC Split 1,5 Pk', 'Perbaikan outdoor AC Split 1,5 Pk', '0', 'perbaikan'),
(80, 'outdoor AC Split 2 Pk', 'Perbaikan outdoor AC Split 2 Pk', '0', 'perbaikan'),
(81, 'outdoor AC Split 2,5 Pk', 'Perbaikan outdoor AC Split 2,5 Pk', '0', 'perbaikan'),
(82, 'outdoor AC Split 3 Pk', 'Perbaikan outdoor AC Split 3 Pk', '0', 'perbaikan'),
(83, 'outdoor AC Cassette  2 Pk', 'Perbaikan outdoor AC Cassette  2 Pk', '0', 'perbaikan'),
(84, 'outdoor AC Cassette  2,5 Pk', 'Perbaikan outdoor AC Cassette  2,5 Pk', '0', 'perbaikan'),
(85, 'outdoor AC Cassette  3 Pk', 'Perbaikan outdoor AC Cassette  3 Pk', '0', 'perbaikan'),
(86, 'outdoor AC Cassette 4 Pk', 'Perbaikan outdoor AC Cassette 4 Pk', '0', 'perbaikan'),
(87, 'outdoor AC Cassette 5 Pk', 'Perbaikan outdoor AC Cassette 5 Pk', '0', 'perbaikan'),
(88, 'outdoor AC Split Duct 6 Pk', 'Perbaikan outdoor AC Split Duct 6 Pk', '0', 'perbaikan'),
(89, 'outdoor AC Split Duct 8 Pk', 'Perbaikan outdoor AC Split Duct 8 Pk', '0', 'perbaikan'),
(90, 'outdoor AC Split Duct 10 Pk', 'Perbaikan outdoor AC Split Duct 10 Pk', '0', 'perbaikan'),
(91, 'MIXED', 'MIXED', '0', 'tambahfreon'),
(92, 'MIXED', 'MIXED', '0', 'perbaikan'),
(93, 'Mixed', 'Mixed', '0', 'bongkarpasang');

-- --------------------------------------------------------

--
-- Table structure for table `layanan`
--

CREATE TABLE `layanan` (
  `id` int(20) NOT NULL,
  `jenisLayanan` varchar(100) NOT NULL,
  `keterangan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `layanan`
--

INSERT INTO `layanan` (`id`, `jenisLayanan`, `keterangan`) VALUES
(1, 'bongkarpasang', 'Bongkar Pasang AC'),
(2, 'perbaikan', 'Perbaikan AC'),
(3, 'tambahfreon', 'Cuci AC / Tambah Freon');

-- --------------------------------------------------------

--
-- Table structure for table `log`
--

CREATE TABLE `log` (
  `id` int(10) NOT NULL,
  `id_pesanan` int(10) NOT NULL,
  `created_by` varchar(100) NOT NULL,
  `tgl_proses` datetime NOT NULL,
  `status` int(10) NOT NULL,
  `deskripsi` varchar(225) NOT NULL,
  `logPetugas` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `log`
--

INSERT INTO `log` (`id`, `id_pesanan`, `created_by`, `tgl_proses`, `status`, `deskripsi`, `logPetugas`) VALUES
(1, 1, 'adit', '0000-00-00 00:00:00', 1, 'coba', 'adit'),
(2, 1, 'adit', '0000-00-00 00:00:00', 2, '', 'adit'),
(3, 1, 'admin', '2020-05-29 16:33:00', 3, 'coba admin', 'admin'),
(5, 1, 'petugas', '2020-05-29 17:55:00', 4, 'coba petugas', 'petugas'),
(6, 2, 'adit', '0000-00-00 00:00:00', 1, 'coba uy', 'adit'),
(7, 2, 'adit', '0000-00-00 00:00:00', 2, '', 'adit'),
(8, 3, 'pelanggan', '0000-00-00 00:00:00', 1, 'tes', 'pelanggan'),
(9, 3, 'pelanggan', '0000-00-00 00:00:00', 2, '', 'pelanggan'),
(10, 3, 'pelanggan', '0000-00-00 00:00:00', 0, '', 'pelanggan'),
(11, 4, 'pelanggan', '0000-00-00 00:00:00', 1, 'www', 'pelanggan'),
(12, 5, 'pelanggan', '0000-00-00 00:00:00', 1, 'hhh', 'pelanggan'),
(13, 5, 'admin', '2020-09-09 13:00:00', 3, 'rwerwerw', 'admin'),
(14, 5, 'petugas', '0000-00-00 00:00:00', 0, '', 'petugas'),
(15, 4, 'admin', '2020-09-09 01:00:00', 3, 'dada', 'admin'),
(16, 6, 'pelanggan', '0000-00-00 00:00:00', 1, 'dasdasda', 'pelanggan'),
(17, 7, 'pelanggan', '0000-00-00 00:00:00', 1, 'dasda', 'pelanggan'),
(18, 2, 'admin', '2020-09-24 13:00:00', 3, 'tesss', 'admin'),
(19, 7, 'admin', '2020-09-24 13:00:00', 3, 'aaaaaaaaaaaaaaaa', 'admin'),
(20, 7, 'admin', '2020-09-24 13:00:00', 3, 'asdasda', 'admin'),
(21, 8, 'pelanggan', '0000-00-00 00:00:00', 1, 'sss', 'pelanggan'),
(22, 9, 'adit', '0000-00-00 00:00:00', 1, '1', 'adit'),
(23, 10, 'adit', '0000-00-00 00:00:00', 1, 'asd', 'adit'),
(24, 10, 'admin', '2020-09-27 14:46:09', 3, 'asd', 'admin'),
(25, 9, 'admin', '2020-09-27 14:48:41', 3, 'asd', 'admin'),
(26, 9, 'petugas', '2020-09-27 14:48:52', 4, '', 'petugas'),
(27, 10, 'petugas', '2020-09-27 14:49:03', 5, 'asd', 'petugas'),
(28, 8, 'admin', '2020-09-29 15:51:42', 3, '', 'admin'),
(29, 7, 'petugas', '2020-09-29 15:52:42', 4, '', 'petugas'),
(30, 7, 'petugas', '2020-09-29 15:53:00', 5, '', 'petugas'),
(31, 6, 'admin', '2020-09-29 15:53:33', 3, '', 'admin'),
(32, 5, 'admin', '2020-09-29 16:01:36', 3, '', 'admin'),
(33, 11, 'adit', '0000-00-00 00:00:00', 1, 'kontol', 'adit'),
(34, 11, 'admin', '2020-09-29 16:08:12', 3, '', 'admin'),
(35, 12, 'adit', '0000-00-00 00:00:00', 1, '', 'adit'),
(36, 13, 'adit', '0000-00-00 00:00:00', 1, '', 'adit'),
(37, 14, 'adit', '0000-00-00 00:00:00', 1, '', 'adit'),
(38, 15, 'adit', '0000-00-00 00:00:00', 1, '', 'adit'),
(39, 16, 'adit', '0000-00-00 00:00:00', 1, '', 'adit'),
(40, 4, 'admin', '0000-00-00 00:00:00', 3, '', 'admin'),
(41, 14, 'admin', '2020-09-29 23:45:00', 3, '', 'admin'),
(42, 16, 'admin', '2020-10-06 23:45:00', 3, '', 'admin'),
(43, 17, 'adit', '0000-00-00 00:00:00', 1, 'kontol', 'adit'),
(44, 18, 'adit', '0000-00-00 00:00:00', 1, 'kontol', 'adit'),
(45, 19, 'adit', '0000-00-00 00:00:00', 1, 'kontol', 'adit'),
(46, 19, 'admin', '2020-09-29 23:53:00', 3, '', 'admin'),
(47, 18, 'admin', '2020-09-29 00:10:00', 3, '', 'admin'),
(48, 17, 'admin', '2020-09-29 00:11:00', 3, '', 'admin'),
(49, 3, 'admin', '2020-09-30 00:29:00', 3, '', 'admin'),
(50, 19, 'petugas', '2020-09-29 00:34:00', 4, '', 'petugas'),
(51, 4, 'petugas', '2020-09-30 00:34:00', 4, '', 'petugas'),
(52, 17, 'petugas', '2020-09-29 00:35:00', 4, '', 'petugas'),
(53, 18, 'petugas', '2020-09-29 00:37:00', 4, '', 'petugas'),
(54, 3, 'petugas', '2020-09-29 00:59:00', 4, '', 'petugas'),
(55, 4, 'petugas', '2020-09-29 01:03:00', 4, '', 'petugas'),
(56, 19, 'petugas', '2020-09-29 01:22:00', 4, '', 'petugas'),
(57, 19, 'petugas', '2020-09-29 01:22:00', 4, '', 'petugas'),
(58, 19, 'petugas', '2020-09-29 01:22:00', 4, '', 'petugas'),
(59, 19, 'petugas', '2020-09-29 01:22:00', 4, '', 'petugas'),
(60, 19, 'petugas', '2020-09-29 01:22:00', 4, '', 'petugas'),
(61, 19, 'petugas', '2020-09-29 01:22:00', 5, '', 'petugas'),
(62, 20, 'adit', '0000-00-00 00:00:00', 1, 'tolong', 'adit');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(10) NOT NULL,
  `frist_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(8) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `notelp` varchar(12) NOT NULL,
  `lvl` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `frist_name`, `last_name`, `username`, `password`, `alamat`, `email`, `notelp`, `lvl`) VALUES
(1, 'tes', '', 'admin', '1234', 'alamat admin', 'admin@mail.com', '123456789', 0),
(2, 'petugas', 'petugas', 'petugas', '1234', 'alamat petugas', 'petugas@mail.com', '123456789', 1),
(3, 'pelanggan', 'pelanggan', 'pelanggan', '1234', 'alamat pelanggan', 'pelanggan@mail.com', '1234565789', 2),
(4, 'adit', 'tya', 'adit', '1234', 'tes', 'qwerty@mail', '123456', 2),
(5, 'aa', 'bb', 'aa', '1234', 'tes', 'tes@mail', '123456', 1),
(6, 'tes', 'tes', 'tes', '1234', 'tes', 'tes@mail.com', '123456', 1);

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `id` int(10) NOT NULL,
  `status` varchar(10) NOT NULL,
  `keterangan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`id`, `status`, `keterangan`) VALUES
(1, '1', 'Baru'),
(2, '2', 'Sudah Di Bayar'),
(3, '3', 'Di Berikan Ke Petugas'),
(4, '4', 'Di Proses'),
(5, '5', 'Selesai'),
(6, 'C', 'Cancel'),
(7, 'X', 'Delete');

-- --------------------------------------------------------

--
-- Table structure for table `task`
--

CREATE TABLE `task` (
  `id` int(10) NOT NULL,
  `nm_pemesan` varchar(200) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `telp` varchar(12) NOT NULL,
  `jenis_ac` varchar(50) NOT NULL,
  `tgl_pesan` datetime NOT NULL,
  `keterangan` varchar(200) NOT NULL,
  `user_pelangan` varchar(100) NOT NULL,
  `jenis_layanan` varchar(100) NOT NULL,
  `petugas` varchar(100) NOT NULL,
  `harga` decimal(10,0) NOT NULL,
  `status` varchar(10) NOT NULL,
  `tgl_proses` datetime NOT NULL,
  `deskripsi_proses` varchar(100) NOT NULL,
  `bukti_tf` varchar(225) NOT NULL,
  `jm_unit` varchar(20) NOT NULL,
  `jenis_pembayaran` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `task`
--

INSERT INTO `task` (`id`, `nm_pemesan`, `alamat`, `telp`, `jenis_ac`, `tgl_pesan`, `keterangan`, `user_pelangan`, `jenis_layanan`, `petugas`, `harga`, `status`, `tgl_proses`, `deskripsi_proses`, `bukti_tf`, `jm_unit`, `jenis_pembayaran`) VALUES
(1, 'adit', 'tes', '123456', 'MIXED', '2020-05-29 16:29:00', 'coba', 'adit', 'bongkarpasang', '', '3000000', '1', '2020-05-29 17:55:00', 'coba petugas', '2905202011051111325448_796844683747102_2091855880_n.jpg', '2', ''),
(2, 'adit', 'tes', '123456', '6', '2020-05-31 10:25:00', 'coba uy', 'adit', 'tambahfreon', '', '2000000', '1', '2020-09-24 13:00:00', 'tesss', '31052020052619cropped-logo-1.png', '5', ''),
(3, 'pelanggan', 'alamat pelanggan', '1234565789', '7', '2020-09-01 13:01:00', 'tes', 'pelanggan', 'bongkarpasang', 'petugas', '550000', '4', '2020-09-29 00:59:00', '', '', '1', 'cash'),
(4, 'pelanggan', 'alamat pelanggan', '1234565789', '49', '2020-09-03 13:00:00', 'www', 'pelanggan', 'perbaikan', 'petugas', '0', '4', '2020-09-29 01:03:00', '', '', '1', ''),
(5, 'pelanggan', 'alamat pelanggan', '1234565789', '7', '2020-09-04 01:00:00', 'hhh', 'pelanggan', 'bongkarpasang', '-', '550000', '3', '2020-09-29 16:01:36', '', '', '1', ''),
(6, 'pelanggan', 'alamat pelanggan', '1234565789', 'MIXED', '2020-09-10 13:00:00', 'dasdasda', 'pelanggan', 'perbaikan', '-', '0', '3', '2020-09-29 15:53:33', '', '', '2', ''),
(7, 'pelanggan', 'alamat pelanggan', '1234565789', 'MIXED', '2020-09-09 13:00:00', 'dasda', 'pelanggan', 'bongkarpasang', 'petugas', '550000', '5', '2020-09-29 15:53:00', '', '', '1', ''),
(8, 'pelanggan', 'alamat pelanggan', '1234565789', 'MIXED', '2020-09-24 13:00:00', 'sss', 'pelanggan', 'tambahfreon', '-', '120000', '3', '2020-09-29 15:51:42', '', '', '2', ''),
(9, 'Cacan', 'kabayan', '081290512472', 'MIXED', '2020-09-27 14:43:43', '1', 'adit', 'tambahfreon', 'petugas', '60000', '4', '2020-09-27 14:48:52', '', '', '1', ''),
(10, 'Dapi', 'Pandeglang', '087871177077', 'MIXED', '2020-09-27 14:45:37', 'asd', 'adit', 'perbaikan', 'petugas', '0', '5', '2020-09-27 14:49:03', 'asd', '', '1', ''),
(11, 'adit', 'Cihaseum', '123456', '49', '2020-09-29 21:07:21', 'kontol', 'adit', 'perbaikan', '-', '0', '3', '2020-09-29 16:08:12', '', '', '1', ''),
(12, 'adit', 'tes', '123456', '-', '2020-09-28 21:13:00', '', 'adit', 'bongkarpasang', '', '0', '1', '0000-00-00 00:00:00', '', '', '', ''),
(13, 'adit', 'tes', '123456', '-', '2020-12-02 21:16:00', '', 'adit', 'bongkarpasang', '', '0', '1', '0000-00-00 00:00:00', '', '', '', ''),
(14, 'adit', 'tes', '123456', '-', '2020-09-29 21:34:00', '', 'adit', 'bongkarpasang', 'petugas', '0', '3', '2020-09-29 23:45:00', '', '', '', ''),
(15, 'adit', 'tes', '123456', '-', '2020-10-05 21:34:00', '', 'adit', 'bongkarpasang', '', '0', '1', '0000-00-00 00:00:00', '', '', '', ''),
(16, 'adit', 'tes', '123456', '-', '2020-09-30 23:33:00', '', 'adit', 'tambahfreon', 'petugas', '0', '3', '2020-10-06 23:45:00', '', '', '', ''),
(17, 'adit', 'tes', '123456', '18', '2020-09-30 23:47:00', 'kontol', 'adit', 'bongkarpasang', 'petugas', '2500000', '4', '2020-09-29 00:35:00', '', '', '1', ''),
(18, 'adit', 'tes', '123456', '17', '2020-09-29 23:50:00', 'kontol', 'adit', 'bongkarpasang', 'petugas', '1800000', '4', '2020-09-29 00:37:00', '', '', '1', ''),
(19, 'adit', 'tes', '123456', 'MIXED', '2020-09-29 23:52:00', 'kontol', 'adit', 'tambahfreon', 'petugas', '60000', '5', '2020-09-29 01:22:00', '', '', '1', ''),
(20, 'adit', 'tes', '123456', 'MIXED', '2020-09-30 04:53:00', 'tolong', 'adit', 'bongkarpasang', '', '550000', '1', '0000-00-00 00:00:00', '', '', '1', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `detil_ac`
--
ALTER TABLE `detil_ac`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `detil_transaksi`
--
ALTER TABLE `detil_transaksi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jenis_ac`
--
ALTER TABLE `jenis_ac`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `layanan`
--
ALTER TABLE `layanan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `log`
--
ALTER TABLE `log`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `task`
--
ALTER TABLE `task`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `detil_ac`
--
ALTER TABLE `detil_ac`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `detil_transaksi`
--
ALTER TABLE `detil_transaksi`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `jenis_ac`
--
ALTER TABLE `jenis_ac`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=94;

--
-- AUTO_INCREMENT for table `layanan`
--
ALTER TABLE `layanan`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `log`
--
ALTER TABLE `log`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `task`
--
ALTER TABLE `task`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
