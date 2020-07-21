-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 21, 2018 at 08:44 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_diabetes`
--

-- --------------------------------------------------------

--
-- Table structure for table `statistik`
--

CREATE TABLE `statistik` (
  `id` int(8) NOT NULL,
  `ip` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `tanggal` date NOT NULL,
  `hits` int(8) NOT NULL,
  `online` varchar(20) COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `statistik`
--

INSERT INTO `statistik` (`id`, `ip`, `tanggal`, `hits`, `online`) VALUES
(1, '127.0.0.1', '2014-03-17', 63, '1395034465'),
(2, '127.0.0.1', '2014-03-18', 53, '1395129935'),
(3, '127.0.0.1', '2014-03-22', 122, '1395493770'),
(4, '127.0.0.1', '2014-04-17', 50, '1397733464'),
(5, '127.0.0.1', '2014-04-18', 55, '1397839756'),
(6, '127.0.0.1', '2014-04-19', 26, '1397883619'),
(7, '127.0.0.1', '2014-05-28', 9, '1401282009'),
(8, '127.0.0.1', '2014-05-31', 39, '1401531874'),
(9, '127.0.0.1', '2014-06-03', 30, '1401783305'),
(10, '127.0.0.1', '2014-06-09', 12, '1402299670'),
(11, '127.0.0.1', '2014-06-18', 8, '1403092882'),
(12, '127.0.0.1', '2014-06-20', 1954, '1403269933'),
(13, '127.0.0.1', '2014-10-15', 86, '1413374159'),
(14, '127.0.0.1', '2014-10-22', 107, '1413951013'),
(15, '127.0.0.1', '2014-10-24', 3, '1414149898'),
(16, '127.0.0.1', '2014-11-04', 20, '1415070918'),
(17, '127.0.0.1', '2014-11-05', 46, '1415154829'),
(18, '127.0.0.1', '2014-11-11', 24, '1415666142'),
(19, '127.0.0.1', '2014-11-23', 35, '1416719646'),
(20, '127.0.0.1', '2015-01-02', 196, '1420215747'),
(21, '127.0.0.1', '2015-01-03', 24, '1420264639'),
(22, '127.0.0.1', '2015-01-06', 45, '1420511116'),
(23, '127.0.0.1', '2015-02-01', 271, '1422770430'),
(24, '::1', '2018-11-21', 16, '1542786221');

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE `tb_admin` (
  `kode_admin` varchar(8) COLLATE latin1_general_ci NOT NULL,
  `username` varchar(25) COLLATE latin1_general_ci NOT NULL,
  `password` varchar(25) COLLATE latin1_general_ci NOT NULL,
  `telepon` varchar(15) COLLATE latin1_general_ci NOT NULL,
  `email` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `gambar` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `status` enum('Aktif','Tidak Aktif') COLLATE latin1_general_ci NOT NULL DEFAULT 'Aktif'
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `tb_admin`
--

INSERT INTO `tb_admin` (`kode_admin`, `username`, `password`, `telepon`, `email`, `gambar`, `status`) VALUES
('ADM02', 'a', 'a', '0234567845678', 'admin@yahoo.com', 'wifi.png', 'Aktif'),
('ADM03', 'array', 'array', '02345678923456', 'array@a.com', 'keys.jpg', 'Aktif'),
('ADM01', 'jokowi', 'jokowi', '021-11111111', 'presidenri@gmail.com', 'key.jpg', 'Aktif');

-- --------------------------------------------------------

--
-- Table structure for table `tb_datalatih`
--

CREATE TABLE `tb_datalatih` (
  `id_datalatih` varchar(5) NOT NULL,
  `gejala_1` varchar(60) NOT NULL,
  `gejala_2` varchar(60) NOT NULL,
  `gejala_3` varchar(60) NOT NULL,
  `gejala_4` varchar(60) NOT NULL,
  `gejala_5` varchar(60) NOT NULL,
  `gejala_6` varchar(60) NOT NULL,
  `gejala_7` varchar(60) NOT NULL,
  `gejala_8` varchar(60) NOT NULL,
  `gejala_9` varchar(60) NOT NULL,
  `gejala_10` varchar(60) NOT NULL,
  `kategori` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_pengujian`
--

CREATE TABLE `tb_pengujian` (
  `id_pengujian` varchar(5) NOT NULL,
  `tanggal` varchar(30) NOT NULL,
  `jam` varchar(10) NOT NULL,
  `id_user` varchar(5) NOT NULL,
  `gejala_1` varchar(60) NOT NULL,
  `gejala_2` varchar(60) NOT NULL,
  `gejala_3` varchar(60) NOT NULL,
  `gejala_4` varchar(60) NOT NULL,
  `gejala_5` varchar(60) NOT NULL,
  `gejala_6` varchar(60) NOT NULL,
  `gejala_7` varchar(60) NOT NULL,
  `gejala_8` varchar(60) NOT NULL,
  `gejala_9` varchar(60) NOT NULL,
  `gejala_10` varchar(60) NOT NULL,
  `kategori` varchar(30) NOT NULL,
  `rekapitulasi` varchar(50) NOT NULL,
  `keterangan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` varchar(5) NOT NULL,
  `nama_user` varchar(30) NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `tgl_lahir` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(10) NOT NULL,
  `status` varchar(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `keterangan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `statistik`
--
ALTER TABLE `statistik`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`kode_admin`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `statistik`
--
ALTER TABLE `statistik`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
