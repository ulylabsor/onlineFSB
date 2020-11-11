-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 11, 2020 at 08:36 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `syn_cepat`
--

-- --------------------------------------------------------

--
-- Table structure for table `layanan`
--

CREATE TABLE `layanan` (
  `id_layanan` int(5) NOT NULL,
  `layanan` varchar(100) DEFAULT NULL,
  `keterangan` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `layanan`
--

INSERT INTO `layanan` (`id_layanan`, `layanan`, `keterangan`) VALUES
(2, 'YES', 'YES adalah layanan tercepat syn_cepat dengan estimasi sampai 1 hari'),
(3, 'REG', 'REG adalah layanan syn_cepat dengan estimasi sampai 3-4 hari');

-- --------------------------------------------------------

--
-- Table structure for table `ongkir`
--

CREATE TABLE `ongkir` (
  `id_ongkir` int(11) NOT NULL,
  `kota_asal` varchar(200) DEFAULT NULL,
  `kota_tujuan` varchar(200) DEFAULT NULL,
  `biaya` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ongkir`
--

INSERT INTO `ongkir` (`id_ongkir`, `kota_asal`, `kota_tujuan`, `biaya`) VALUES
(1, 'Palembang', 'Jakarta', 35000),
(2, 'Palembang', 'Bandung', 40000);

-- --------------------------------------------------------

--
-- Table structure for table `profil`
--

CREATE TABLE `profil` (
  `id_profil` int(11) NOT NULL,
  `nama_depan` varchar(200) DEFAULT NULL,
  `nama_belakang` varchar(200) DEFAULT NULL,
  `jk` enum('Pria','Wanita') DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `alamat` text,
  `kontak` varchar(15) DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profil`
--

INSERT INTO `profil` (`id_profil`, `nama_depan`, `nama_belakang`, `jk`, `tgl_lahir`, `alamat`, `kontak`, `id_user`) VALUES
(2, 'Budi', 'Anggara', 'Pria', '1997-07-07', NULL, NULL, 1),
(3, 'Ani', 'Santika', 'Wanita', '1997-07-07', NULL, NULL, 2),
(4, 'Antoni', '', 'Pria', NULL, NULL, NULL, 3);

-- --------------------------------------------------------

--
-- Table structure for table `tracking_history`
--

CREATE TABLE `tracking_history` (
  `id_tracking` int(11) NOT NULL,
  `no_resi` varchar(8) NOT NULL,
  `history` varchar(200) DEFAULT NULL,
  `datetime` datetime DEFAULT NULL,
  `id_kurir` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tracking_history`
--

INSERT INTO `tracking_history` (`id_tracking`, `no_resi`, `history`, `datetime`, `id_kurir`) VALUES
(2, '1582E694', 'On Progress Curier ok', '2020-08-23 20:32:27', 3),
(3, '90S68237', 'On Progress Curier', '2020-08-20 21:52:24', NULL),
(4, '64S8E9R5', 'On Progress Curier', '2020-08-23 20:06:47', NULL),
(5, '1582E694', 'Paket keluar dari palembang ok', '2020-08-23 21:29:51', 3),
(6, '1582E694', 'paket telah diterima di palembang 1 jam yg lalu', '2020-08-23 21:29:42', 3),
(7, '64S8E9R5', 'Paket dibawa oleh si gesit ', '2020-08-23 21:31:33', 3),
(8, '64S8E9R5', 'paket telah diterima oleh juki', '2020-08-23 21:31:52', 3);

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `no_resi` varchar(8) NOT NULL,
  `nama_barang` varchar(200) DEFAULT NULL,
  `berat_barang` float DEFAULT NULL,
  `jenis_barang` varchar(200) DEFAULT NULL,
  `nama_pengirim` varchar(200) DEFAULT NULL,
  `kontak_pengirim` varchar(200) DEFAULT NULL,
  `nama_penerima` varchar(200) DEFAULT NULL,
  `kontak_penerima` varchar(200) DEFAULT NULL,
  `total_biaya` float DEFAULT NULL,
  `id_layanan` int(5) DEFAULT NULL,
  `id_ongkir` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`no_resi`, `nama_barang`, `berat_barang`, `jenis_barang`, `nama_pengirim`, `kontak_pengirim`, `nama_penerima`, `kontak_penerima`, `total_biaya`, `id_layanan`, `id_ongkir`) VALUES
('1582E694', 'Lenovo A310', 4, 'Laptop', 'Syaiful', '234324', 'Andi', '42342', 52500, 2, 1),
('64S8E9R5', 'Baju Kokoh', 4, 'Fashion', 'Syaiful', '123123', 'Jefri', '345454', 52500, 2, 1),
('90S68237', 'Baju Kokoh', 1, 'Fashion', 'Wahyu', '234324', 'Jefri', '345454', 35000, 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(200) DEFAULT NULL,
  `status` enum('Aktif','Tidak Aktif') DEFAULT NULL,
  `level` enum('Admin','Kurir','Manager','Customer') DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `login_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `username`, `email`, `password`, `status`, `level`, `created_at`, `login_at`) VALUES
(1, 'budi', 'budi@gmail.com', '202cb962ac59075b964b07152d234b70', 'Aktif', 'Customer', '2020-07-08 04:12:22', '2020-09-17 21:43:04'),
(2, 'ani', 'ani@gmail.com', '202cb962ac59075b964b07152d234b70', 'Aktif', 'Admin', '2020-07-08 04:12:22', '2020-09-17 21:42:48'),
(3, 'anton', NULL, '202cb962ac59075b964b07152d234b70', 'Aktif', 'Kurir', '0000-00-00 00:00:00', '2020-09-17 21:44:08'),
(4, 'sukri', NULL, '202cb962ac59075b964b07152d234b70', 'Aktif', 'Manager', '0000-00-00 00:00:00', '2020-09-17 21:59:12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `layanan`
--
ALTER TABLE `layanan`
  ADD PRIMARY KEY (`id_layanan`);

--
-- Indexes for table `ongkir`
--
ALTER TABLE `ongkir`
  ADD PRIMARY KEY (`id_ongkir`);

--
-- Indexes for table `profil`
--
ALTER TABLE `profil`
  ADD PRIMARY KEY (`id_profil`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `tracking_history`
--
ALTER TABLE `tracking_history`
  ADD PRIMARY KEY (`id_tracking`),
  ADD KEY `no_resi` (`no_resi`),
  ADD KEY `id_kurir` (`id_kurir`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`no_resi`),
  ADD KEY `id_ongkir` (`id_ongkir`),
  ADD KEY `id_layanan` (`id_layanan`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `layanan`
--
ALTER TABLE `layanan`
  MODIFY `id_layanan` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `ongkir`
--
ALTER TABLE `ongkir`
  MODIFY `id_ongkir` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `profil`
--
ALTER TABLE `profil`
  MODIFY `id_profil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tracking_history`
--
ALTER TABLE `tracking_history`
  MODIFY `id_tracking` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `profil`
--
ALTER TABLE `profil`
  ADD CONSTRAINT `profil_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tracking_history`
--
ALTER TABLE `tracking_history`
  ADD CONSTRAINT `tracking_history_ibfk_1` FOREIGN KEY (`no_resi`) REFERENCES `transaksi` (`no_resi`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tracking_history_ibfk_2` FOREIGN KEY (`id_kurir`) REFERENCES `users` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `transaksi_ibfk_1` FOREIGN KEY (`id_ongkir`) REFERENCES `ongkir` (`id_ongkir`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `transaksi_ibfk_2` FOREIGN KEY (`id_layanan`) REFERENCES `layanan` (`id_layanan`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
