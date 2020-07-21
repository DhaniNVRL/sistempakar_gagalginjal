-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 10, 2018 at 01:00 PM
-- Server version: 5.6.14
-- PHP Version: 5.5.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_beasiswa`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `kode_admin` varchar(8) COLLATE latin1_general_ci NOT NULL,
  `username` varchar(25) COLLATE latin1_general_ci NOT NULL,
  `password` varchar(25) COLLATE latin1_general_ci NOT NULL,
  `telepon` varchar(15) COLLATE latin1_general_ci NOT NULL,
  `email` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `gambar` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `status` enum('Aktif','Tidak Aktif') COLLATE latin1_general_ci NOT NULL DEFAULT 'Aktif',
  PRIMARY KEY (`kode_admin`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`kode_admin`, `username`, `password`, `telepon`, `email`, `gambar`, `status`) VALUES
('ADM02', 'a', 'a', '0234567845678', 'admin@yahoo.com', 'wifi.png', 'Aktif'),
('ADM03', 'array', 'array', '02345678923456', 'array@a.com', 'keys.jpg', 'Aktif'),
('ADM01', 'jokowi', 'jokowi', '021-11111111', 'presidenri@gmail.com', 'key.jpg', 'Aktif');

-- --------------------------------------------------------

--
-- Table structure for table `statistik`
--

CREATE TABLE IF NOT EXISTS `statistik` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `ip` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `tanggal` date NOT NULL,
  `hits` int(8) NOT NULL,
  `online` varchar(20) COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=28 ;

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
(24, '::1', '2018-01-27', 31, '1517058949'),
(25, '::1', '2018-02-01', 192, '1517492194'),
(26, '::1', '2018-02-02', 157, '1517575251'),
(27, '::1', '2018-02-10', 146, '1518263882');

-- --------------------------------------------------------

--
-- Table structure for table `tb_hasil`
--

CREATE TABLE IF NOT EXISTS `tb_hasil` (
  `kode_hasil` varchar(15) NOT NULL,
  `kode_periode` varchar(15) NOT NULL,
  `kode_penilaian` varchar(15) NOT NULL,
  `nis` varchar(15) NOT NULL,
  `rekapitulasi` varchar(20) NOT NULL,
  `bobot` int(15) NOT NULL,
  `rangking` varchar(15) NOT NULL,
  `keterangan` text NOT NULL,
  `status` varchar(15) NOT NULL,
  PRIMARY KEY (`kode_hasil`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_hasil`
--

INSERT INTO `tb_hasil` (`kode_hasil`, `kode_periode`, `kode_penilaian`, `nis`, `rekapitulasi`, `bobot`, `rangking`, `keterangan`, `status`) VALUES
('MHS1802001', 'q', 'q', 'q', 'q', 0, 'q', 'q', 'q'),
('MHS1802002', 'q', 'q', 'q', 'q', 0, 'q', 'q', 'q');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kriteria`
--

CREATE TABLE IF NOT EXISTS `tb_kriteria` (
  `kode_kriteria` varchar(15) NOT NULL,
  `nama_kriteria` varchar(30) NOT NULL,
  `kode_periode` varchar(15) NOT NULL,
  `keterangan` text NOT NULL,
  PRIMARY KEY (`kode_kriteria`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_kriteria`
--

INSERT INTO `tb_kriteria` (`kode_kriteria`, `nama_kriteria`, `kode_periode`, `keterangan`) VALUES
('MHS1802001', 'q', 'q', 'q'),
('MHS1802002', 's', 's', 's');

-- --------------------------------------------------------

--
-- Table structure for table `tb_penilaian`
--

CREATE TABLE IF NOT EXISTS `tb_penilaian` (
  `kode_penilaian` varchar(15) NOT NULL,
  `kode_periode` varchar(15) NOT NULL,
  `nis` varchar(15) NOT NULL,
  `keterangan` text NOT NULL,
  PRIMARY KEY (`kode_penilaian`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_penilaian`
--

INSERT INTO `tb_penilaian` (`kode_penilaian`, `kode_periode`, `nis`, `keterangan`) VALUES
('MHS1802001', 'erere43dddddddd', 'wwds', 'sdsdsd'),
('MHS1802002', 'q', 'q', 'qwq');

-- --------------------------------------------------------

--
-- Table structure for table `tb_penilaian_detail`
--

CREATE TABLE IF NOT EXISTS `tb_penilaian_detail` (
  `id` int(15) NOT NULL AUTO_INCREMENT,
  `kode_penilaian` varchar(15) NOT NULL,
  `kode_kriteria` varchar(15) NOT NULL,
  `nilai` varchar(15) NOT NULL,
  `catatan` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tb_penilaian_detail`
--

INSERT INTO `tb_penilaian_detail` (`id`, `kode_penilaian`, `kode_kriteria`, `nilai`, `catatan`) VALUES
(1, 's', 's', 'sss', 's'),
(2, '', '', '10 Februari 201', ''),
(3, '', '', '10 Februari 201', '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_periode`
--

CREATE TABLE IF NOT EXISTS `tb_periode` (
  `kode_periode` varchar(15) NOT NULL,
  `nama_periode` varchar(30) NOT NULL,
  `catatan` text NOT NULL,
  `status` varchar(15) NOT NULL,
  PRIMARY KEY (`kode_periode`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_periode`
--

INSERT INTO `tb_periode` (`kode_periode`, `nama_periode`, `catatan`, `status`) VALUES
('MHS1802001', 'rrrrop', 'sssssss', 'sssssss'),
('MHS1802002', '', '', ''),
('MHS1802003', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_siswa`
--

CREATE TABLE IF NOT EXISTS `tb_siswa` (
  `nis` varchar(15) NOT NULL,
  `nama_siswa` varchar(30) NOT NULL,
  `jenis_kelamin` varchar(15) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `alamat` text NOT NULL,
  `telp` int(15) NOT NULL,
  `email` varchar(30) NOT NULL,
  `status` varchar(15) NOT NULL,
  PRIMARY KEY (`nis`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_siswa`
--

INSERT INTO `tb_siswa` (`nis`, `nama_siswa`, `jenis_kelamin`, `tanggal_lahir`, `alamat`, `telp`, `email`, `status`) VALUES
('MHS1802001', 'q', 'q', '0000-00-00', 'q', 0, 'q', 'q'),
('MHS1802002', '', '', '0000-00-00', '', 0, '', ''),
('MHS1802003', '', '', '0000-00-00', '', 0, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE IF NOT EXISTS `tb_user` (
  `kode_user` varchar(15) NOT NULL,
  `nama_user` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `kategori` varchar(20) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `status` varchar(15) NOT NULL,
  PRIMARY KEY (`kode_user`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`kode_user`, `nama_user`, `email`, `kategori`, `username`, `password`, `status`) VALUES
('MHS1802001', 'ququ', 'q', 'q', 'q', 'q', 'q'),
('MHS1802002', '', '', '', '10 Februari 2018', '', ''),
('MHS1802003', '', '', '', '10 Februari 2018', '', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
