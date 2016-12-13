-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 17, 2016 at 04:38 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `permata_iman`
--

-- --------------------------------------------------------

--
-- Table structure for table `dataguru`
--

CREATE TABLE IF NOT EXISTS `dataguru` (
  `id_guru` int(11) NOT NULL AUTO_INCREMENT,
  `nama_guru` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(1) NOT NULL,
  `tempat_lahir` varchar(20) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `status_pns` int(1) NOT NULL,
  PRIMARY KEY (`id_guru`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `dataguru`
--

INSERT INTO `dataguru` (`id_guru`, `nama_guru`, `jenis_kelamin`, `tempat_lahir`, `tanggal_lahir`, `status_pns`) VALUES
(1, 'Kisman', 'L', 'Malang', '2016-11-01', 0),
(2, 'Surti', 'P', 'Jambi', '2016-09-06', 1),
(3, 'Sukijan', 'P', 'Jakarta', '2016-06-13', 0),
(5, 'Virginia', 'L', 'Banjarmasin', '2016-11-01', 1);

-- --------------------------------------------------------

--
-- Table structure for table `dokumenmurid`
--

CREATE TABLE IF NOT EXISTS `dokumenmurid` (
  `id_dokumen` int(11) NOT NULL AUTO_INCREMENT,
  `jenis_dokumen` int(1) NOT NULL,
  `path` varchar(255) NOT NULL,
  `id_murid` int(11) NOT NULL,
  PRIMARY KEY (`id_dokumen`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
  `id_feedback` int(11) NOT NULL AUTO_INCREMENT,
  `isi_feedback` text NOT NULL,
  `id_murid` int(11) NOT NULL,
  `status_feedback` int(1) NOT NULL,
  PRIMARY KEY (`id_feedback`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id_feedback`, `isi_feedback`, `id_murid`, `status_feedback`) VALUES
(1, 'etwereg', 1, 1),
(2, 'ini dari wali murid', 1, 2),
(3, 'ini dari guru', 1, 1),
(4, 'ini dari wali murid', 2, 1),
(5, 'ini dari guru', 2, 2),
(8, 'halo ini nyoba', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `hafalansurat`
--

CREATE TABLE IF NOT EXISTS `hafalansurat` (
  `id_hafalan` int(11) NOT NULL AUTO_INCREMENT,
  `nama_hafalan` varchar(15) NOT NULL,
  `nilai` int(3) NOT NULL,
  `id_murid` int(11) NOT NULL,
  PRIMARY KEY (`id_hafalan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `loginguru`
--

CREATE TABLE IF NOT EXISTS `loginguru` (
  `id_login` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `id_guru` int(11) NOT NULL,
  PRIMARY KEY (`id_login`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `loginguru`
--

INSERT INTO `loginguru` (`id_login`, `username`, `password`, `id_guru`) VALUES
(1, 'kesiswaan1', 'kesiswaan1', 2),
(2, 'kepsek', 'kepsek', 1);

-- --------------------------------------------------------

--
-- Table structure for table `loginmurid`
--

CREATE TABLE IF NOT EXISTS `loginmurid` (
  `id_login` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `id_murid` int(11) NOT NULL,
  PRIMARY KEY (`id_login`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `loginmurid`
--

INSERT INTO `loginmurid` (`id_login`, `username`, `password`, `id_murid`) VALUES
(2, 'user2', 'user2', 2),
(3, 'aadc', 'aadc', 3),
(8, 'user1', 'user1', 28),
(12, 'user3', 'user3', 32);

-- --------------------------------------------------------

--
-- Table structure for table `murid`
--

CREATE TABLE IF NOT EXISTS `murid` (
  `id_murid` int(11) NOT NULL AUTO_INCREMENT,
  `nim` varchar(6) DEFAULT NULL,
  `nama_lengkap` varchar(50) DEFAULT NULL,
  `nama_panggilan` varchar(10) DEFAULT NULL,
  `jenis_kelamin` varchar(1) DEFAULT NULL,
  `tempat_lahir` varchar(10) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `agama` varchar(10) DEFAULT NULL,
  `alamat` varchar(50) DEFAULT NULL,
  `no_telpon` varchar(40) DEFAULT NULL,
  `jml_saudara` int(1) DEFAULT NULL,
  `anak_ke` int(1) DEFAULT NULL,
  `kewarganegaraan` varchar(20) DEFAULT NULL,
  `bahasa` varchar(20) DEFAULT NULL,
  `keterangan` text,
  `penghuni` varchar(50) DEFAULT NULL,
  `hubungan_ayah` varchar(2) DEFAULT NULL,
  `hubungan_ibu` varchar(2) DEFAULT NULL,
  `pergaulan` varchar(2) DEFAULT NULL,
  `imunisasi` varchar(1) DEFAULT NULL,
  `status` int(1) DEFAULT NULL,
  PRIMARY KEY (`id_murid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=33 ;

--
-- Dumping data for table `murid`
--

INSERT INTO `murid` (`id_murid`, `nim`, `nama_lengkap`, `nama_panggilan`, `jenis_kelamin`, `tempat_lahir`, `tanggal_lahir`, `agama`, `alamat`, `no_telpon`, `jml_saudara`, `anak_ke`, `kewarganegaraan`, `bahasa`, `keterangan`, `penghuni`, `hubungan_ayah`, `hubungan_ibu`, `pergaulan`, `imunisasi`, `status`) VALUES
(2, '333', 'Bintang Virgy', 'Bintang', 'L', 'Malang', '2016-10-11', 'Islam', 'Jl. Danau Maninjau', '081801801801', 3, 1, 'indo', 'Italy', 'ya gitu deh', '4 dewasa', 'B', 'B', 'B', 'Y', 2),
(3, '331', 'Agung Surya Saputera', 'Agum', 'L', 'Jambi', '2016-10-03', 'Islam', 'Jl. Danau Maninjau', '081801801801', 3, 3, 'indo', 'indo', 'biasa ajaaa', '4 dewasa', 'B', 'B', 'B', 'Y', 4),
(28, '332', 'Budiman', 'Budi', 'L', 'Jambi', '2016-11-01', 'Islam', 'Jl. Danau Maninjau', '081801801801', 3, 2, 'Malaysia', 'Melayu', 'Mudah pilek</br>Nangisan</br>		-\r\n		</br>Keluarga Sendiri', '3 dewasa/remaja, 1 anak-anak/sebaya', 'CE', 'SE', 'C', 'L', 3),
(32, '334', 'Angraini Kusuma Waroyo', 'Anjaay', 'P', 'Malang', '2016-11-02', 'Islam', 'Jl. Danau Maninjau', '081801801801', 5, 5, 'rusia', 'rusia', '                                    -\r\n                                </br>                                    -\r\n                                </br>                                    -\r\n                                </br>Bersama Keluarga Lain', '2 dewasa/remaja, 3 anak-anak/sebaya', 'CE', 'SE', 'C', 'B', 3);

-- --------------------------------------------------------

--
-- Table structure for table `otoritas`
--

CREATE TABLE IF NOT EXISTS `otoritas` (
  `id_otoritas` int(11) NOT NULL AUTO_INCREMENT,
  `id_guru` int(11) NOT NULL,
  `otoritas` int(1) NOT NULL,
  PRIMARY KEY (`id_otoritas`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `otoritas`
--

INSERT INTO `otoritas` (`id_otoritas`, `id_guru`, `otoritas`) VALUES
(1, 1, 1),
(2, 2, 4);

-- --------------------------------------------------------

--
-- Table structure for table `pertumbuhanmurid`
--

CREATE TABLE IF NOT EXISTS `pertumbuhanmurid` (
  `id_pertumbuhan` int(11) NOT NULL AUTO_INCREMENT,
  `isi_pertumbuhan` text NOT NULL,
  `id_murid` int(11) NOT NULL,
  PRIMARY KEY (`id_pertumbuhan`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `pertumbuhanmurid`
--

INSERT INTO `pertumbuhanmurid` (`id_pertumbuhan`, `isi_pertumbuhan`, `id_murid`) VALUES
(1, 'ucis elek', 1),
(2, 'ini hnaya nyoba', 1);

-- --------------------------------------------------------

--
-- Table structure for table `verifdokumen`
--

CREATE TABLE IF NOT EXISTS `verifdokumen` (
  `id_verif` int(11) NOT NULL AUTO_INCREMENT,
  `id_murid` int(11) NOT NULL,
  `verif` int(1) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  PRIMARY KEY (`id_verif`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `verifdokumen`
--

INSERT INTO `verifdokumen` (`id_verif`, `id_murid`, `verif`, `keterangan`) VALUES
(1, 2, 1, 'fotonya belum diupload');

-- --------------------------------------------------------

--
-- Table structure for table `verifmurid`
--

CREATE TABLE IF NOT EXISTS `verifmurid` (
  `id_verif` int(11) NOT NULL AUTO_INCREMENT,
  `id_murid` int(11) NOT NULL,
  `jenis_verif` int(11) NOT NULL,
  `verif` int(1) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  PRIMARY KEY (`id_verif`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `verifmurid`
--

INSERT INTO `verifmurid` (`id_verif`, `id_murid`, `jenis_verif`, `verif`, `keterangan`) VALUES
(1, 2, 1, 2, ''),
(2, 2, 2, 1, 'belum ada pembayaran');

-- --------------------------------------------------------

--
-- Table structure for table `verifwali`
--

CREATE TABLE IF NOT EXISTS `verifwali` (
  `id_verif` int(11) NOT NULL AUTO_INCREMENT,
  `id_murid` int(11) NOT NULL,
  `verif` int(1) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  PRIMARY KEY (`id_verif`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `verifwali`
--

INSERT INTO `verifwali` (`id_verif`, `id_murid`, `verif`, `keterangan`) VALUES
(1, 2, 2, '');

-- --------------------------------------------------------

--
-- Table structure for table `walimurid`
--

CREATE TABLE IF NOT EXISTS `walimurid` (
  `id_walimurid` int(11) NOT NULL AUTO_INCREMENT,
  `nama_ayah` varchar(50) NOT NULL,
  `nama_ibu` varchar(50) NOT NULL,
  `tempat_lahir_ayah` varchar(20) NOT NULL,
  `tempat_lahir_ibu` varchar(20) NOT NULL,
  `tanggal_lahir_ayah` date NOT NULL,
  `tanggal_lahir_ibu` date NOT NULL,
  `agama_ayah` varchar(10) NOT NULL,
  `agama_ibu` varchar(10) NOT NULL,
  `alamat_ayah` varchar(50) NOT NULL,
  `alamat_ibu` varchar(50) NOT NULL,
  `no_telpon_ayah` varchar(40) NOT NULL,
  `no_telpon_ibu` varchar(40) NOT NULL,
  `pendidikan_ayah` varchar(10) NOT NULL,
  `pendidikan_ibu` varchar(10) NOT NULL,
  `pekerjaan_ayah` varchar(20) NOT NULL,
  `pekerjaan_ibu` varchar(20) NOT NULL,
  `penghasilan_ayah` int(11) NOT NULL,
  `penghasilan_ibu` int(11) NOT NULL,
  `alamat_kantor_ayah` varchar(50) NOT NULL,
  `alamat_kantor_ibu` varchar(50) NOT NULL,
  `no_telpon_kantor_ayah` varchar(20) NOT NULL,
  `no_telpon_kantor_ibu` varchar(20) NOT NULL,
  `kewarganegaraan_ayah` varchar(20) NOT NULL,
  `kewarganegaraan_ibu` varchar(20) NOT NULL,
  `id_murid` int(11) NOT NULL,
  PRIMARY KEY (`id_walimurid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `walimurid`
--

INSERT INTO `walimurid` (`id_walimurid`, `nama_ayah`, `nama_ibu`, `tempat_lahir_ayah`, `tempat_lahir_ibu`, `tanggal_lahir_ayah`, `tanggal_lahir_ibu`, `agama_ayah`, `agama_ibu`, `alamat_ayah`, `alamat_ibu`, `no_telpon_ayah`, `no_telpon_ibu`, `pendidikan_ayah`, `pendidikan_ibu`, `pekerjaan_ayah`, `pekerjaan_ibu`, `penghasilan_ayah`, `penghasilan_ibu`, `alamat_kantor_ayah`, `alamat_kantor_ibu`, `no_telpon_kantor_ayah`, `no_telpon_kantor_ibu`, `kewarganegaraan_ayah`, `kewarganegaraan_ibu`, `id_murid`) VALUES
(1, 'Mahmud', 'Sumijah', 'Malang', 'Banajar', '2016-10-02', '2016-10-02', 'Islam', 'islam', 'Jl. Danau Maninjau', 'Jl. Danau Maninjau', '082802802802', '089341294891', 'S1', 'S1', 'PNS', 'PNS', 20000000, 288999, 'Malang', 'Malang', '019203', '098645', 'indo', 'indo', 3),
(2, 'Mukidi', 'Siti', 'Malang', 'malang', '2016-10-03', '2016-10-09', 'Islam', 'islam', 'Jl. Danau Maninjau', 'Jl. Danau Maninjau', '082802802802', '089341294891', 'S1', 'S1', 'PNS', 'PNS', 20000000, 288999, 'Malang', 'Malang', '019203', '098645', 'Rusia', 'indo', 0),
(3, 'Mukidi', 'Yuri', 'Malang', 'malang', '2016-10-03', '2016-10-24', 'Islam', 'islam', 'Jl. Danau Maninjau', 'Jl. Danau Maninjau', '082802802802', '089341294891', 'S1', 'S1', 'PNS', 'PNS', 20000000, 288999, 'Malang', 'Malang', '019203', '098645', 'Rusia', 'indo', 2),
(5, 'Sukidi', 'Yani', '', '', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', 28),
(6, 'Sukijan', 'Sumirnah', 'Malang', 'malang', '2016-11-01', '2016-11-01', 'Islam', 'islam', 'Jl. Danau Maninjau', 'Jl. Danau Maninjau', '082802802802', '089341294891', 'S1', 'S1', 'PNS', 'PNS', 20000000, 288999, 'Malang', 'Malang', '019203', '098645', 'indo', 'indo', 32);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
