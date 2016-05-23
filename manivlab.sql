-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 23, 2016 at 08:41 PM
-- Server version: 5.5.32
-- PHP Version: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `manivlab`
--
CREATE DATABASE IF NOT EXISTS `manivlab` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `manivlab`;

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

CREATE TABLE IF NOT EXISTS `ci_sessions` (
  `session_id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(45) NOT NULL DEFAULT '0',
  `user_agent` varchar(120) NOT NULL,
  `last_activity` int(10) unsigned NOT NULL DEFAULT '0',
  `user_data` text NOT NULL,
  PRIMARY KEY (`session_id`),
  KEY `last_activity_idx` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ci_sessions`
--

INSERT INTO `ci_sessions` (`session_id`, `ip_address`, `user_agent`, `last_activity`, `user_data`) VALUES
('0feeb4d590e3979df9f4e04c7fd5586b', '::1', 'Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/50.0.2661.94 Safari/537.36 OPR/37.0.21', 1464028652, 'a:3:{s:9:"user_data";s:0:"";s:7:"id_user";s:1:"9";s:5:"admin";s:1:"9";}'),
('3de7bc20df0631d6cc3c944ad1377037', '::1', 'Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/50.0.2661.94 Safari/537.36 OPR/37.0.21', 1464023142, 'a:1:{s:9:"user_data";s:0:"";}'),
('4bfcf8fe70b4aae46d710196556b40f9', '::1', 'Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/50.0.2661.94 Safari/537.36 OPR/37.0.21', 1464022625, 'a:3:{s:9:"user_data";s:0:"";s:7:"id_user";s:1:"5";s:5:"admin";s:1:"5";}'),
('da1aae6c13f12f42eaf43ffbe64bac07', '::1', 'Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/50.0.2661.94 Safari/537.36 OPR/37.0.21', 1464027373, 'a:2:{s:7:"id_user";s:1:"7";s:5:"admin";s:1:"7";}');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE IF NOT EXISTS `events` (
  `event_date` date NOT NULL,
  `total_events` int(50) NOT NULL DEFAULT '0',
  PRIMARY KEY (`event_date`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`event_date`, `total_events`) VALUES
('2016-05-12', 2),
('2016-05-18', 1);

-- --------------------------------------------------------

--
-- Table structure for table `event_detail`
--

CREATE TABLE IF NOT EXISTS `event_detail` (
  `idevent` int(11) NOT NULL AUTO_INCREMENT,
  `event_date` date NOT NULL,
  `event_time` time NOT NULL,
  `event_time_to` time DEFAULT NULL,
  `event` varchar(200) NOT NULL,
  `PJMA` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`idevent`),
  KEY `event_date` (`event_date`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=36 ;

--
-- Dumping data for table `event_detail`
--

INSERT INTO `event_detail` (`idevent`, `event_date`, `event_time`, `event_time_to`, `event`, `PJMA`) VALUES
(31, '2016-05-12', '01:00:00', '02:00:00', 'TES 1', 'PJMA 1'),
(33, '2016-05-12', '02:00:00', '03:00:00', 'TES 2', 'PJMA 2'),
(35, '2016-05-18', '07:06:00', '13:17:00', 'jrfdkljk', 'jhfd');

-- --------------------------------------------------------

--
-- Table structure for table `komputer`
--

CREATE TABLE IF NOT EXISTS `komputer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kode_barang` varchar(20) NOT NULL,
  `nama_barang` varchar(20) NOT NULL,
  `lokasi_komp` varchar(20) NOT NULL,
  `merk_processor` varchar(20) NOT NULL,
  `kecepatan_processor` varchar(20) NOT NULL,
  `socket_processor` varchar(20) NOT NULL,
  `merkmotherboard_komp` varchar(20) NOT NULL,
  `modelmotherboard_komp` varchar(20) NOT NULL,
  `northbridge_komp` varchar(20) NOT NULL,
  `southbridge_komp` varchar(20) NOT NULL,
  `tiperam_komp` varchar(20) NOT NULL,
  `kapasitas_komp` int(20) NOT NULL,
  `pc_komp` int(20) NOT NULL,
  `macaddress_komp` int(20) NOT NULL,
  `tahunbeli_komp` varchar(20) NOT NULL,
  `tanggal_transaksi` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `komputer`
--

INSERT INTO `komputer` (`id`, `kode_barang`, `nama_barang`, `lokasi_komp`, `merk_processor`, `kecepatan_processor`, `socket_processor`, `merkmotherboard_komp`, `modelmotherboard_komp`, `northbridge_komp`, `southbridge_komp`, `tiperam_komp`, `kapasitas_komp`, `pc_komp`, `macaddress_komp`, `tahunbeli_komp`, `tanggal_transaksi`) VALUES
(1, 'a', 'a', 'on', 'a', 'a', 'a', 'a', 'a', 'aa', 'a', 'a', 0, 0, 0, '2016', '0000-00-00'),
(2, 'KOMP001', 'Lenovo A112', 'on', 'intel core i3', '3.2 GHz', 'LGA 122', 'MAC', 'H61M PP0', 'H61M PP0', 'Intel A123', 'DDR3', 2048, 0, 90, '2016', '0000-00-00'),
(3, 'KOMP001', 'Lenovo A112', 'on', 'intel core i3', '3.2 GHz', 'LGA 122', 'MAC', 'H61M PP0', 'H61M PP0', 'Intel A123', 'DDR3', 2048, 0, 90, '2016', '0000-00-00'),
(4, 'hH', 'h', 'on', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 'h', 0, 0, 0, '2016', '2016-05-13'),
(5, 'xx', 'x', '2', 'x', 'x', 'x', 'x', 'x', 'x', 'x', 'x', 0, 0, 0, '2013', '2016-05-17');

-- --------------------------------------------------------

--
-- Table structure for table `manajemen_barang`
--

CREATE TABLE IF NOT EXISTS `manajemen_barang` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `kode_barang` varchar(20) NOT NULL,
  `nama_barang` varchar(50) NOT NULL,
  `tanggal_transaksi` date NOT NULL,
  `kondisi_barang` varchar(20) NOT NULL,
  `lokasibarang_awal` varchar(20) NOT NULL,
  `lokasibarang_akhir` varchar(20) NOT NULL,
  `Deskripsi` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `manajemen_barang`
--

INSERT INTO `manajemen_barang` (`id`, `kode_barang`, `nama_barang`, `tanggal_transaksi`, `kondisi_barang`, `lokasibarang_awal`, `lokasibarang_akhir`, `Deskripsi`) VALUES
(1, 'KOMP002', 'Lenovo A112', '2016-05-03', 'buruk', 'Labkom 2', '1', 'eeee'),
(2, 'KOMP001', 'Lenovo A112', '2016-05-18', 'buruk', 'Labkom 1', '2', 'sabi'),
(3, 'KOMP001', 'Lenovo A112', '2016-05-18', 'baik', 'Labkom 1', '4', 'sabi'),
(4, 'KOMP001', 'Lenovo A112', '2016-05-18', 'buruk', 'Labkom 1', '2', 'sabi'),
(5, 'KOMP002', 'Lenovo A112', '2016-05-20', 'baik', 'Labkom 2', '3', 'gila lu ndrooo'),
(6, 'KOMP001', 'Lenovo A112', '2016-05-05', 'buruk', 'Labkom 1', '2', ''),
(7, 'KOMP002', 'Lenovo A112', '2016-05-21', 'buruk', 'Labkom 2', '1', 'sdfghjkl'),
(8, 'KOMP002', 'Lenovo A112', '2016-05-14', 'buruk', 'Labkom 2', '2', 'asdfghjkl'),
(9, 'KOMP001', 'Lenovo A112', '2016-05-12', 'baik', 'Labkom 1', '3', 'qasdfghjk'),
(10, 'KOMP002', 'Lenovo A112', '2016-05-16', 'baik', 'Labkom 2', '2', 'qkDLFLKSALFSA'),
(11, 'KOMP002', 'Lenovo A112', '2016-05-11', 'baik', 'Labkom 2', '1', 'test'),
(12, 'KOMP002', 'Lenovo A112', '2016-05-04', 'buruk', 'Labkom 2', '1', 'trest'),
(13, 'KOMP002', 'Lenovo A112', '2016-05-04', 'buruk', 'Labkom 2', '1', 'trest'),
(14, 'KOMP002', 'Lenovo A112', '2016-05-04', 'buruk', 'Labkom 2', '1', 'trest'),
(15, 'KOMP002', 'Lenovo A112', '2016-05-12', 'baik', 'Labkom 2', '1', 'test'),
(16, 'KOMP002', 'Lenovo A112', '2016-05-05', 'baik', 'Labkom 2', '1', 'test'),
(17, 'KOMP002', 'Lenovo A112', '2016-05-05', 'baik', 'Labkom 2', '1', 'test'),
(18, 'KOMP002', 'Lenovo A112', '2016-05-05', 'baik', 'Labkom 2', '1', 'test'),
(19, 'KOMP002', 'Lenovo A112', '2016-05-05', 'baik', 'Labkom 2', '1', ''),
(20, 'KOMP002', 'Lenovo A112', '2016-05-05', 'baik', 'Labkom 2', '1', ''),
(21, 'KOMP002', 'Lenovo A112', '2016-05-12', 'buruk', 'Labkom 2', '2', '');

-- --------------------------------------------------------

--
-- Table structure for table `nonkomputer`
--

CREATE TABLE IF NOT EXISTS `nonkomputer` (
  `id_nonkomp` int(20) NOT NULL AUTO_INCREMENT,
  `lokasi_nonkomp` varchar(20) NOT NULL,
  `merk_nonkomp` varchar(20) NOT NULL,
  `jumlah_nonkomp` int(6) NOT NULL,
  `keterangan_nonkomp` varchar(20) NOT NULL,
  `nama_nonkomp` varchar(20) NOT NULL,
  `Jenis_nonkomp` varchar(20) NOT NULL,
  `tanggal_transaksi` date NOT NULL,
  PRIMARY KEY (`id_nonkomp`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `nonkomputer`
--

INSERT INTO `nonkomputer` (`id_nonkomp`, `lokasi_nonkomp`, `merk_nonkomp`, `jumlah_nonkomp`, `keterangan_nonkomp`, `nama_nonkomp`, `Jenis_nonkomp`, `tanggal_transaksi`) VALUES
(3, 'Gudang', 'Snowman', 1, 'ok', 'Bulpoin', 'Alat Tulis Kantor', '2016-05-10'),
(12, 'Laboratorium 3', 'Casio', 3, 'barang dapat dipake', 'kalkulator', 'Alat Tulis Kantor', '2016-05-11'),
(13, 'Gudang', 'sanghaicha', 6, '', 'Kemoceng', 'Kebersihan', '2016-05-15'),
(14, 'Gudang', 'Snowman', 10, 'ok', 'Bulpoin', 'Alat Tulis Kantor', '2016-05-10');

-- --------------------------------------------------------

--
-- Table structure for table `ticket_iden`
--

CREATE TABLE IF NOT EXISTS `ticket_iden` (
  `no` varchar(8) NOT NULL,
  `dari` varchar(100) NOT NULL,
  `tanggal` date NOT NULL,
  `identifikasi` text NOT NULL,
  `status` enum('sudah diidentifikasi') NOT NULL,
  PRIMARY KEY (`no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ticket_iden`
--

INSERT INTO `ticket_iden` (`no`, `dari`, `tanggal`, `identifikasi`, `status`) VALUES
('KD-001', 'hamba tuhan', '2016-05-02', 'akan saya buang yang lama', 'sudah diidentifikasi'),
('KD-003', 'neymar', '2016-05-02', 'akan saya bakar yang lama', 'sudah diidentifikasi');

-- --------------------------------------------------------

--
-- Table structure for table `ticket_labkom`
--

CREATE TABLE IF NOT EXISTS `ticket_labkom` (
  `id_labkom` int(3) NOT NULL AUTO_INCREMENT,
  `labkom` varchar(220) NOT NULL,
  PRIMARY KEY (`id_labkom`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `ticket_labkom`
--

INSERT INTO `ticket_labkom` (`id_labkom`, `labkom`) VALUES
(1, 'LABKOM 1'),
(2, 'LABKOM 2'),
(3, 'LABKOM 3'),
(4, 'LABKOM 4');

-- --------------------------------------------------------

--
-- Table structure for table `ticket_login`
--

CREATE TABLE IF NOT EXISTS `ticket_login` (
  `id_user` int(2) NOT NULL AUTO_INCREMENT,
  `nama_user` varchar(20) NOT NULL,
  `pass_user` varchar(20) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `level` enum('1','2') NOT NULL,
  `status` enum('1','0') NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `ticket_login`
--

INSERT INTO `ticket_login` (`id_user`, `nama_user`, `pass_user`, `nama`, `level`, `status`) VALUES
(8, 'coba2', 'coba2', 'coba2', '2', '1'),
(9, 'coba', 'coba', 'coba', '1', '1');

-- --------------------------------------------------------

--
-- Table structure for table `ticket_object`
--

CREATE TABLE IF NOT EXISTS `ticket_object` (
  `id_object` int(3) NOT NULL AUTO_INCREMENT,
  `labkom_id` int(3) NOT NULL,
  `object` varchar(100) NOT NULL,
  PRIMARY KEY (`id_object`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `ticket_object`
--

INSERT INTO `ticket_object` (`id_object`, `labkom_id`, `object`) VALUES
(1, 1, 'Komp.1'),
(2, 1, 'Komp.2'),
(3, 1, 'Komp.3'),
(4, 1, 'Lain-lain'),
(5, 2, 'Komp.1'),
(6, 2, 'Komp.2'),
(7, 2, 'Komp.3'),
(8, 2, 'Lain-lain'),
(9, 3, 'Komp.1'),
(10, 3, 'Komp.2'),
(11, 3, 'Komp.3'),
(12, 3, 'Lain-lain'),
(13, 4, 'Komp.1'),
(14, 4, 'Komp.2'),
(15, 4, 'Komp.3'),
(16, 4, 'Lain-lain');

-- --------------------------------------------------------

--
-- Table structure for table `ticket_pppk`
--

CREATE TABLE IF NOT EXISTS `ticket_pppk` (
  `no` varchar(7) NOT NULL,
  `dari` varchar(200) NOT NULL,
  `labkom` varchar(200) NOT NULL,
  `object` varchar(100) NOT NULL,
  `kepada` varchar(200) NOT NULL,
  `alasan` text NOT NULL,
  `status` enum('waiting','on progress','sudah diidentifikasi') NOT NULL,
  `tanggal` date NOT NULL,
  PRIMARY KEY (`no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ticket_pppk`
--

INSERT INTO `ticket_pppk` (`no`, `dari`, `labkom`, `object`, `kepada`, `alasan`, `status`, `tanggal`) VALUES
('KD-001', 'hamba tuhan', 'LABKOM 1', 'Komp.1', 'Kebakaran', 'tiba2 terbakar', 'on progress', '2016-05-01'),
('KD-002', 'Suep', 'LABKOM 2', 'Komp.3', 'XAMPP rusak', 'tidak bisa di start pada file zila....', 'waiting', '2016-05-01'),
('KD-003', 'neymar', 'LABKOM 3', 'Komp.2', 'meja AMBROL', 'sudah tua, perlu diganti', 'sudah diidentifikasi', '2016-05-01');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `event_detail`
--
ALTER TABLE `event_detail`
  ADD CONSTRAINT `event_detail_ibfk_1` FOREIGN KEY (`event_date`) REFERENCES `events` (`event_date`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
