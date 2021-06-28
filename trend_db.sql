-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 10, 2020 at 05:09 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `trend_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`, `status`) VALUES
(1, 'admin', '0192023a7bbd73250516f069df18b500', 'admin'),
(2, 'yopa', 'acd7532b045fb19b2b04af69e4a3b7e1', 'admin'),
(3, 'dony', '77ee6d05b23e742e2aca3fd602f4c599', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `bcoklat`
--

CREATE TABLE `bcoklat` (
  `id_bcoklat` int(11) NOT NULL,
  `bulan` varchar(12) NOT NULL,
  `tanggal` int(2) NOT NULL,
  `hari` varchar(12) NOT NULL,
  `order_stok` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bcoklat`
--

INSERT INTO `bcoklat` (`id_bcoklat`, `bulan`, `tanggal`, `hari`, `order_stok`) VALUES
(1, 'oktober', 1, 'selasa', 0),
(2, 'oktober', 2, 'rabu', 0),
(3, 'oktober', 3, 'kamis', 6),
(4, 'oktober', 4, 'jumat', 9),
(5, 'oktober', 5, 'sabtu', 25),
(6, 'oktober', 6, 'minggu', 0),
(7, 'oktober', 7, 'senin', 12),
(8, 'oktober', 8, 'selasa', 2),
(9, 'oktober', 9, 'rabu', 0),
(10, 'oktober', 10, 'kamis', 25),
(11, 'oktober', 11, 'jumat', 10),
(12, 'oktober', 12, 'sabtu', 18),
(13, 'oktober', 13, 'minggu', 15),
(14, 'oktober', 14, 'senin', 9),
(15, 'oktober', 15, 'selasa', 5),
(16, 'oktober', 16, 'rabu', 12),
(17, 'oktober', 17, 'kamis', 9),
(18, 'oktober', 18, 'jumat', 10),
(19, 'oktober', 19, 'sabtu', 10),
(20, 'oktober', 20, 'minggu', 4),
(21, 'oktober', 21, 'senin', 4),
(22, 'oktober', 22, 'selasa', 6),
(23, 'oktober', 23, 'rabu', 12),
(24, 'oktober', 24, 'kamis', 5),
(25, 'oktober', 25, 'jumat', 4),
(26, 'oktober', 26, 'sabtu', 12),
(27, 'oktober', 27, 'minggu', 6),
(28, 'oktober', 28, 'senin', 13),
(29, 'oktober', 29, 'selasa', 12),
(30, 'oktober', 30, 'rabu', 9),
(31, 'oktober', 31, 'kamis', 7),
(32, 'november', 1, 'jumat', 9),
(33, 'november', 2, 'sabtu', 8),
(34, 'november', 3, 'minggu', 9),
(35, 'november', 4, 'senin', 0),
(36, 'november', 5, 'selasa', 9),
(37, 'november', 6, 'rabu', 11),
(38, 'november', 7, 'kamis', 9),
(39, 'november', 8, 'jumat', 2),
(40, 'november', 9, 'sabtu', 16),
(41, 'november', 10, 'minggu', 6),
(42, 'november', 11, 'senin', 7),
(43, 'november', 12, 'selasa', 10),
(44, 'november', 13, 'rabu', 10),
(45, 'november', 14, 'kamis', 12),
(46, 'november', 15, 'jumat', 1),
(47, 'november', 16, 'sabtu', 11),
(48, 'november', 17, 'minggu', 7),
(49, 'november', 18, 'senin', 1),
(50, 'november', 19, 'selasa', 8),
(51, 'november', 20, 'rabu', 12),
(52, 'november', 21, 'kamis', 10),
(53, 'november', 22, 'jumat', 2),
(54, 'november', 23, 'sabtu', 20),
(55, 'november', 24, 'minggu', 11),
(56, 'november', 25, 'senin', 5),
(57, 'november', 26, 'selasa', 5),
(58, 'november', 27, 'rabu', 8),
(59, 'november', 28, 'kamis', 7),
(60, 'november', 29, 'jumat', 7),
(61, 'november', 30, 'sabtu', 3),
(62, 'desember', 1, 'minggu', 7),
(63, 'desember', 2, 'senin', 6),
(64, 'desember', 3, 'selasa', 5),
(65, 'desember', 4, 'rabu', 8),
(66, 'desember', 5, 'kamis', 9),
(67, 'desember', 6, 'jumat', 1),
(68, 'desember', 7, 'sabtu', 9),
(69, 'desember', 8, 'minggu', 0),
(70, 'desember', 9, 'senin', 8),
(71, 'desember', 10, 'selasa', 7),
(72, 'desember', 11, 'rabu', 6),
(73, 'desember', 12, 'kamis', 3),
(74, 'desember', 13, 'jumat', 5),
(75, 'desember', 14, 'sabtu', 3),
(76, 'desember', 15, 'minggu', 13),
(77, 'desember', 16, 'senin', 5),
(78, 'desember', 17, 'selasa', 3),
(79, 'desember', 18, 'rabu', 5),
(80, 'desember', 19, 'kamis', 0),
(81, 'desember', 20, 'jumat', 10),
(82, 'desember', 21, 'sabtu', 4),
(83, 'desember', 22, 'minggu', 9),
(84, 'desember', 23, 'senin', 9),
(85, 'desember', 24, 'selasa', 7),
(86, 'desember', 25, 'rabu', 7),
(87, 'desember', 26, 'kamis', 17),
(88, 'desember', 27, 'jumat', 2),
(89, 'desember', 28, 'sabtu', 10),
(90, 'desember', 29, 'minggu', 9),
(91, 'desember', 30, 'senin', 8),
(92, 'desember', 31, 'selasa', 6);

-- --------------------------------------------------------

--
-- Table structure for table `bcoklat2020`
--

CREATE TABLE `bcoklat2020` (
  `id_bcoklat2020` int(15) NOT NULL,
  `hari` varchar(15) NOT NULL,
  `tanggal` int(5) NOT NULL,
  `bulan` varchar(15) NOT NULL,
  `orderstok_2020` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bcoklat2020`
--

INSERT INTO `bcoklat2020` (`id_bcoklat2020`, `hari`, `tanggal`, `bulan`, `orderstok_2020`) VALUES
(1, 'rabu', 1, 'januari', 0),
(2, 'kamis', 2, 'januari', 4),
(3, 'jumat', 3, 'januari', 8),
(4, 'sabtu', 4, 'januari', 4),
(5, 'minggu', 5, 'januari', 0),
(6, 'senin', 6, 'januari', 6),
(7, 'selasa', 7, 'januari', 6),
(8, 'rabu', 8, 'januari', 12);

-- --------------------------------------------------------

--
-- Table structure for table `hasil_ramalbcoklat`
--

CREATE TABLE `hasil_ramalbcoklat` (
  `id_ramal` int(15) NOT NULL,
  `tanggal_ramal` int(15) NOT NULL,
  `hari_ramal` varchar(10) NOT NULL,
  `bulan_ramal` varchar(15) NOT NULL,
  `tahun_ramal` int(10) NOT NULL,
  `hasil_ramal` varchar(5) NOT NULL,
  `indeks_musim` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hasil_ramalbcoklat`
--

INSERT INTO `hasil_ramalbcoklat` (`id_ramal`, `tanggal_ramal`, `hari_ramal`, `bulan_ramal`, `tahun_ramal`, `hasil_ramal`, `indeks_musim`) VALUES
(1, 1, 'rabu', 'Januari', 2020, '6.353', '6.350'),
(2, 2, 'kamis', 'Januari', 2020, '6.324', '7.522'),
(3, 3, 'jumat', 'Januari', 2020, '6.295', '4.530'),
(4, 4, 'sabtu', 'Januari', 2020, '6.266', '9.333'),
(5, 5, 'minggu', 'Januari', 2020, '6.237', '5.985'),
(6, 6, 'senin', 'Januari', 2020, '6.208', '5.399'),
(7, 7, 'selasa', 'Januari', 2020, '6.180', '4.875'),
(8, 8, 'rabu', 'Januari', 2020, '6.151', '6.148');

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

CREATE TABLE `report` (
  `id_report` int(11) NOT NULL,
  `judul_report` varchar(1000) NOT NULL,
  `isi_report` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `report`
--

INSERT INTO `report` (`id_report`, `judul_report`, `isi_report`) VALUES
(1, 'salah stok', 'kesalahan isi stok nomer 94');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `report`
--
ALTER TABLE `report`
  ADD PRIMARY KEY (`id_report`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `report`
--
ALTER TABLE `report`
  MODIFY `id_report` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
