-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 03, 2016 at 03:22 AM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `manivlab`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `nama_admin` varchar(20) NOT NULL,
  `jabatan_admin` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `inputgeneral_inventaris`
--

CREATE TABLE `inputgeneral_inventaris` (
  `id_generalinventaris` int(20) NOT NULL,
  `jenis_inventaris` varchar(20) NOT NULL,
  `waktumasuk_generalinventaris` time(6) NOT NULL,
  `deskripsi_generalinventaris` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `komputer`
--

CREATE TABLE `komputer` (
  `id_komputer` int(11) NOT NULL,
  `lokasi_komp` varchar(20) NOT NULL,
  `merk_komp` varchar(20) NOT NULL,
  `kecepatan_komp` varchar(20) NOT NULL,
  `socket_komp` varchar(20) NOT NULL,
  `merkmotherboard_komp` varchar(20) NOT NULL,
  `model_komp` varchar(20) NOT NULL,
  `northbridge_komp` varchar(20) NOT NULL,
  `southbridge_komp` varchar(20) NOT NULL,
  `tiperam_komp` varchar(20) NOT NULL,
  `kapasitas_komp` int(20) NOT NULL,
  `pc_komp` int(20) NOT NULL,
  `macaddress_komp` int(20) NOT NULL,
  `tahunbeli_komp` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `manajemen_barang`
--

CREATE TABLE `manajemen_barang` (
  `id_manajemenbarang` int(20) NOT NULL,
  `kondisi_barang` varchar(20) NOT NULL,
  `lokasibarang_awal` varchar(20) NOT NULL,
  `lokasibarang_akhir` varchar(20) NOT NULL,
  `Deskripsi` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `nonkomputer`
--

CREATE TABLE `nonkomputer` (
  `id_nonkomp` int(20) NOT NULL,
  `lokasi_nonkomp` varchar(20) NOT NULL,
  `merk_nonkomp` varchar(20) NOT NULL,
  `jumlah_nonkomp` int(6) NOT NULL,
  `deskripsi_nonkomp` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `id_user` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `dibuat_user` datetime NOT NULL,
  `diubah_user` datetime NOT NULL,
  `terakhir_login` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `penjadwalan_lab`
--

CREATE TABLE `penjadwalan_lab` (
  `id_penjadwalanlab` int(20) NOT NULL,
  `nama_lab` varchar(20) NOT NULL,
  `ruang_lab` varchar(20) NOT NULL,
  `namajeniskegiatan_lab` varchar(20) NOT NULL,
  `deskripsi_lab` varchar(20) NOT NULL,
  `jeniskegiatan_lab` varchar(20) NOT NULL,
  `kapasitas_lab` int(20) NOT NULL,
  `nama_peminjamlab` varchar(20) NOT NULL,
  `daripukul_lab` time(6) NOT NULL,
  `sampaipukul_lab` time(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `id_status` int(20) NOT NULL,
  `nama_status` varchar(20) NOT NULL,
  `deskripsi_status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tanggapan`
--

CREATE TABLE `tanggapan` (
  `id_tanggapan` int(20) NOT NULL,
  `nama_tanggapan` varchar(20) NOT NULL,
  `dibuat_tanggapan` date NOT NULL,
  `diubah_tanggapan` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ticket`
--

CREATE TABLE `ticket` (
  `id_ticket` int(11) NOT NULL,
  `nama_ticket` varchar(20) NOT NULL,
  `deskripsi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `inputgeneral_inventaris`
--
ALTER TABLE `inputgeneral_inventaris`
  ADD PRIMARY KEY (`id_generalinventaris`);

--
-- Indexes for table `komputer`
--
ALTER TABLE `komputer`
  ADD PRIMARY KEY (`id_komputer`);

--
-- Indexes for table `manajemen_barang`
--
ALTER TABLE `manajemen_barang`
  ADD PRIMARY KEY (`id_manajemenbarang`);

--
-- Indexes for table `nonkomputer`
--
ALTER TABLE `nonkomputer`
  ADD PRIMARY KEY (`id_nonkomp`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `penjadwalan_lab`
--
ALTER TABLE `penjadwalan_lab`
  ADD PRIMARY KEY (`id_penjadwalanlab`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`id_status`);

--
-- Indexes for table `tanggapan`
--
ALTER TABLE `tanggapan`
  ADD PRIMARY KEY (`id_tanggapan`);

--
-- Indexes for table `ticket`
--
ALTER TABLE `ticket`
  ADD PRIMARY KEY (`id_ticket`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
