-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 24, 2016 at 04:09 AM
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
-- Table structure for table `komputer`
--

CREATE TABLE `komputer` (
  `id` int(11) NOT NULL,
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
  `tanggal_transaksi` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `komputer`
--

INSERT INTO `komputer` (`id`, `kode_barang`, `nama_barang`, `lokasi_komp`, `merk_processor`, `kecepatan_processor`, `socket_processor`, `merkmotherboard_komp`, `modelmotherboard_komp`, `northbridge_komp`, `southbridge_komp`, `tiperam_komp`, `kapasitas_komp`, `pc_komp`, `macaddress_komp`, `tahunbeli_komp`, `tanggal_transaksi`) VALUES
(1, 'a', 'a', 'Labkom 1', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 0, 0, 0, '2016', '2016-05-23'),
(2, 'q', 'qq', 'Labkom 1', 'q', 'q', 'q', 'q', 'q', 'q', 'q', 'q', 0, 0, 0, '2016', '0000-00-00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `komputer`
--
ALTER TABLE `komputer`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `komputer`
--
ALTER TABLE `komputer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
