-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 13, 2016 at 07:48 PM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `manivlab`
--

-- --------------------------------------------------------

--
-- Table structure for table `penjadwalanlab`
--

CREATE TABLE IF NOT EXISTS `penjadwalanlab` (
  `ID_Penjadwalan` int(4) NOT NULL,
  `Tanggal` date NOT NULL,
  `TimeFrom` time NOT NULL,
  `TimeTo` time NOT NULL,
  `Nama_Kegiatan` varchar(50) NOT NULL,
  `pjmk` varchar(50) NOT NULL,
  `Lokasi` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penjadwalanlab`
--

INSERT INTO `penjadwalanlab` (`ID_Penjadwalan`, `Tanggal`, `TimeFrom`, `TimeTo`, `Nama_Kegiatan`, `pjmk`, `Lokasi`) VALUES
(7, '2016-04-15', '12:03:00', '12:31:00', 'Kuliah PSI', 'Pak Indra', 'labkom1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `penjadwalanlab`
--
ALTER TABLE `penjadwalanlab`
  ADD PRIMARY KEY (`ID_Penjadwalan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `penjadwalanlab`
--
ALTER TABLE `penjadwalanlab`
  MODIFY `ID_Penjadwalan` int(4) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
