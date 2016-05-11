-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 01, 2016 at 06:09 PM
-- Server version: 5.5.32
-- PHP Version: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `maniv_ticket`
--
CREATE DATABASE IF NOT EXISTS `maniv_ticket` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `maniv_ticket`;

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
('b7b64b4839f6a609d47e6b8cbcf4564a', '::1', 'Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/49.0.2623.110 Safari/537.36 OPR/36.0.2', 1462118960, '');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

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

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
