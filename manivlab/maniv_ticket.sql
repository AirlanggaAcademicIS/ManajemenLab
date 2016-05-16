-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 16, 2016 at 03:38 PM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `maniv_ticket`
--

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

CREATE TABLE IF NOT EXISTS `ci_sessions` (
  `session_id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(45) NOT NULL DEFAULT '0',
  `user_agent` varchar(120) NOT NULL,
  `last_activity` int(10) unsigned NOT NULL DEFAULT '0',
  `user_data` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ci_sessions`
--

INSERT INTO `ci_sessions` (`session_id`, `ip_address`, `user_agent`, `last_activity`, `user_data`) VALUES
('b7b64b4839f6a609d47e6b8cbcf4564a', '::1', 'Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/49.0.2623.110 Safari/537.36 OPR/36.0.2', 1462118960, '');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE IF NOT EXISTS `events` (
  `event_date` date NOT NULL,
  `total_events` int(50) NOT NULL DEFAULT '0'
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
`idevent` int(11) NOT NULL,
  `event_date` date NOT NULL,
  `event_time` time NOT NULL,
  `event_time_to` time DEFAULT NULL,
  `event` varchar(200) NOT NULL,
  `PJMA` varchar(100) DEFAULT NULL
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
-- Table structure for table `manajemen_barang`
--

CREATE TABLE IF NOT EXISTS `manajemen_barang` (
`id` int(20) NOT NULL,
  `kode_barang` varchar(20) NOT NULL,
  `nama_barang` varchar(50) NOT NULL,
  `tanggal_transaksi` date NOT NULL,
  `kondisi_barang` varchar(20) NOT NULL,
  `lokasibarang_awal` varchar(20) NOT NULL,
  `lokasibarang_akhir` varchar(20) NOT NULL,
  `Deskripsi` varchar(20) DEFAULT NULL
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
-- Table structure for table `ticket_iden`
--

CREATE TABLE IF NOT EXISTS `ticket_iden` (
  `no` varchar(8) NOT NULL,
  `dari` varchar(100) NOT NULL,
  `tanggal` date NOT NULL,
  `identifikasi` text NOT NULL,
  `status` enum('sudah diidentifikasi') NOT NULL
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
`id_labkom` int(3) NOT NULL,
  `labkom` varchar(220) NOT NULL
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
`id_user` int(2) NOT NULL,
  `nama_user` varchar(20) NOT NULL,
  `pass_user` varchar(20) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `level` enum('1','2') NOT NULL,
  `status` enum('1','0') NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `ticket_login`
--

INSERT INTO `ticket_login` (`id_user`, `nama_user`, `pass_user`, `nama`, `level`, `status`) VALUES
(5, 'coba', 'coba', 'coba', '1', '1'),
(6, 'coba2', 'coba2', 'coba2', '2', '1');

-- --------------------------------------------------------

--
-- Table structure for table `ticket_object`
--

CREATE TABLE IF NOT EXISTS `ticket_object` (
`id_object` int(3) NOT NULL,
  `labkom_id` int(3) NOT NULL,
  `object` varchar(100) NOT NULL
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
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ticket_pppk`
--

INSERT INTO `ticket_pppk` (`no`, `dari`, `labkom`, `object`, `kepada`, `alasan`, `status`, `tanggal`) VALUES
('KD-001', 'hamba tuhan', 'LABKOM 1', 'Komp.1', 'Kebakaran', 'tiba2 terbakar', 'on progress', '2016-05-01'),
('KD-002', 'Suep', 'LABKOM 2', 'Komp.3', 'XAMPP rusak', 'tidak bisa di start pada file zila....', 'waiting', '2016-05-01'),
('KD-003', 'neymar', 'LABKOM 3', 'Komp.2', 'meja AMBROL', 'sudah tua, perlu diganti', 'sudah diidentifikasi', '2016-05-01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ci_sessions`
--
ALTER TABLE `ci_sessions`
 ADD PRIMARY KEY (`session_id`), ADD KEY `last_activity_idx` (`last_activity`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
 ADD PRIMARY KEY (`event_date`);

--
-- Indexes for table `event_detail`
--
ALTER TABLE `event_detail`
 ADD PRIMARY KEY (`idevent`), ADD KEY `event_date` (`event_date`);

--
-- Indexes for table `manajemen_barang`
--
ALTER TABLE `manajemen_barang`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ticket_iden`
--
ALTER TABLE `ticket_iden`
 ADD PRIMARY KEY (`no`);

--
-- Indexes for table `ticket_labkom`
--
ALTER TABLE `ticket_labkom`
 ADD PRIMARY KEY (`id_labkom`);

--
-- Indexes for table `ticket_login`
--
ALTER TABLE `ticket_login`
 ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `ticket_object`
--
ALTER TABLE `ticket_object`
 ADD PRIMARY KEY (`id_object`);

--
-- Indexes for table `ticket_pppk`
--
ALTER TABLE `ticket_pppk`
 ADD PRIMARY KEY (`no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `event_detail`
--
ALTER TABLE `event_detail`
MODIFY `idevent` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT for table `manajemen_barang`
--
ALTER TABLE `manajemen_barang`
MODIFY `id` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `ticket_labkom`
--
ALTER TABLE `ticket_labkom`
MODIFY `id_labkom` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `ticket_login`
--
ALTER TABLE `ticket_login`
MODIFY `id_user` int(2) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `ticket_object`
--
ALTER TABLE `ticket_object`
MODIFY `id_object` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
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
