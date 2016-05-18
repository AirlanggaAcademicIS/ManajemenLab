-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 18, 2016 at 02:22 AM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `maniv_ticket`
--

-- --------------------------------------------------------

--
-- Table structure for table `nonkomputer`
--

CREATE TABLE `nonkomputer` (
  `id_nonkomp` int(20) NOT NULL,
  `lokasi_nonkomp` varchar(20) NOT NULL,
  `merk_nonkomp` varchar(20) NOT NULL,
  `jumlah_nonkomp` int(6) NOT NULL,
  `keterangan_nonkomp` varchar(20) NOT NULL,
  `nama_nonkomp` varchar(20) NOT NULL,
  `Jenis_nonkomp` varchar(20) NOT NULL,
  `tanggal_transaksi` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nonkomputer`
--

INSERT INTO `nonkomputer` (`id_nonkomp`, `lokasi_nonkomp`, `merk_nonkomp`, `jumlah_nonkomp`, `keterangan_nonkomp`, `nama_nonkomp`, `Jenis_nonkomp`, `tanggal_transaksi`) VALUES
(3, 'Gudang', 'Snowman', 1, 'ok', 'Bulpoin', 'Alat Tulis Kantor', '2016-05-10'),
(12, 'Laboratorium 3', 'Casio', 3, 'barang dapat dipake', 'kalkulator', 'Alat Tulis Kantor', '2016-05-11'),
(13, 'Gudang', 'sanghaicha', 6, '', 'Kemoceng', 'Kebersihan', '2016-05-15'),
(14, 'Gudang', 'Snowman', 10, 'ok', 'Bulpoin', 'Alat Tulis Kantor', '2016-05-10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `nonkomputer`
--
ALTER TABLE `nonkomputer`
  ADD PRIMARY KEY (`id_nonkomp`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `nonkomputer`
--
ALTER TABLE `nonkomputer`
  MODIFY `id_nonkomp` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
