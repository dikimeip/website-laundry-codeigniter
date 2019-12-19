-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 19, 2019 at 03:54 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `codeigniter_laundry`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `nama_admin` varchar(50) NOT NULL,
  `username_admin` varchar(50) NOT NULL,
  `password_admin` varchar(50) NOT NULL,
  `email_admin` varchar(50) NOT NULL,
  `foto_admin` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `nama_admin`, `username_admin`, `password_admin`, `email_admin`, `foto_admin`) VALUES
(1, 'admin', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin', '-');

-- --------------------------------------------------------

--
-- Table structure for table `karyawan`
--

CREATE TABLE `karyawan` (
  `id_karyawan` int(11) NOT NULL,
  `nama_karyawan` varchar(50) NOT NULL,
  `username_karyawan` varchar(50) NOT NULL,
  `password_karyawan` varchar(50) NOT NULL,
  `alamat_karyawan` varchar(70) NOT NULL,
  `jabatan_karyawan` varchar(30) NOT NULL,
  `foto_karyawan` varchar(50) NOT NULL,
  `active_karyawan` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `karyawan`
--

INSERT INTO `karyawan` (`id_karyawan`, `nama_karyawan`, `username_karyawan`, `password_karyawan`, `alamat_karyawan`, `jabatan_karyawan`, `foto_karyawan`, `active_karyawan`) VALUES
(2, 'user', 'user', 'ee11cbb19052e40b07aac0ca060c23ee', 'malang', 'user', 'admin.png', 1),
(5, 'diki', 'diki', '43b93443937ea642a9a43e77fd5d8f77', 'dawarblandong', 'KEPALA CABANG', 'admin.png', 1);

-- --------------------------------------------------------

--
-- Table structure for table `paket`
--

CREATE TABLE `paket` (
  `id_paket` int(11) NOT NULL,
  `nama_paket` varchar(50) NOT NULL,
  `tanggal_paket` date NOT NULL,
  `keterangan_paket` text NOT NULL,
  `active_paket` varchar(20) NOT NULL,
  `harga_paket` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `paket`
--

INSERT INTO `paket` (`id_paket`, `nama_paket`, `tanggal_paket`, `keterangan_paket`, `active_paket`, `harga_paket`) VALUES
(12, 'Paket Standart Cuci Basah', '2019-12-11', 'Cuci Basah', 'Active', 2500),
(13, 'Paket Standart Cuci Kering', '2019-12-11', 'Paket Standart Cuci Kering', 'Active', 3500);

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `id_user` int(5) NOT NULL,
  `id_paket` int(5) NOT NULL,
  `berat_transaksi` int(5) NOT NULL,
  `tanggal_masuk_transaksi` date NOT NULL,
  `harga_total` int(30) NOT NULL,
  `keterangan_transaksi` varchar(50) NOT NULL,
  `status_transaksi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `id_user`, `id_paket`, `berat_transaksi`, `tanggal_masuk_transaksi`, `harga_total`, `keterangan_transaksi`, `status_transaksi`) VALUES
(2, 2, 12, 5, '2019-12-11', 12500, 'BELUM BAYAR', 'PROSES'),
(3, 2, 13, 10, '2019-12-11', 35000, 'BAYAR', 'Baru'),
(4, 4, 13, 5, '2019-12-14', 17500, 'BELUM BAYAR', 'Baru'),
(5, 1, 12, 5, '2019-12-15', 12500, 'BAYAR', 'Baru');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(50) NOT NULL,
  `alamat_user` varchar(70) NOT NULL,
  `hp_user` varchar(15) NOT NULL,
  `email_user` varchar(50) NOT NULL,
  `ket_user` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama_user`, `alamat_user`, `hp_user`, `email_user`, `ket_user`) VALUES
(1, 'andi setyo Nugroho', 'mayjend sungkono Mojokerto', '0853214560', 'andika@gmail.com', 'USER'),
(3, 'Diki Mei P', 'Dsn Mlati Ds simongagrok Kec dawarblandong Kab mojokerto', '0822345612', 'dikimp98@gmail.com', 'user'),
(4, 'Airlanga Andini', 'Jln Mojowuku Nomer 34 Mojokerto', '085234123', 'diki@gmail.com', 'User');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `karyawan`
--
ALTER TABLE `karyawan`
  ADD PRIMARY KEY (`id_karyawan`);

--
-- Indexes for table `paket`
--
ALTER TABLE `paket`
  ADD PRIMARY KEY (`id_paket`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `karyawan`
--
ALTER TABLE `karyawan`
  MODIFY `id_karyawan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `paket`
--
ALTER TABLE `paket`
  MODIFY `id_paket` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
