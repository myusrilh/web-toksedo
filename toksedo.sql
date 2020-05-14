-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 14, 2020 at 03:14 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `toksedo`
--

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `idKategori` int(11) NOT NULL,
  `namaKategori` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`idKategori`, `namaKategori`) VALUES
(1, 'pertanian'),
(2, 'peternakan');

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran`
--

CREATE TABLE `pembayaran` (
  `idPembayaran` int(11) NOT NULL,
  `namaGambar` varchar(20) NOT NULL,
  `namaPembayaran` varchar(40) NOT NULL,
  `jenisPembayaran` varchar(10) NOT NULL,
  `detailPembayaran` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pembayaran`
--

INSERT INTO `pembayaran` (`idPembayaran`, `namaGambar`, `namaPembayaran`, `jenisPembayaran`, `detailPembayaran`) VALUES
(1, 'debit', 'Transfer (ATM/E-Banking)', 'Online', 'Dibayar secara debit/transfer'),
(2, 'cash', 'Cash-On-Delivery (COD)', 'Offline', 'Tunai & Tatap Muka');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `idProduk` int(11) NOT NULL,
  `idKategori` int(11) DEFAULT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `harga` int(11) DEFAULT NULL,
  `detail` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`idProduk`, `idKategori`, `nama`, `harga`, `detail`) VALUES
(1, 1, 'Urea (Petrokimia)', 150000, 'SNI : 02-2801-1998\r\n\r\nSpesifikasi\r\n\r\nKadar air maksimal 0,50%\r\nKadar Biuret maksimal 1%\r\nKadar Nitrogen minimal 46%\r\nBentuk butiran tidak berdebu\r\nWarna putih (non subsidi)\r\nWarna pink untuk Urea Bersubsidi\r\nDikemas dalam kantong dengan isi 50 kg'),
(2, 2, 'Hormonik Kemasan 500cc (Nasa)', 145000, 'Hormonik dirancang untuk membantu memacu pertumbuhan, pengumbian, pembungaan dan pembuahan tanaman agar didapatkan hasil panen yang optimal. Produk multiguna ini mengandung Zat Pengatur Tumbuh (ZPT) Organik terutama Auksin, Giberelin dan Sitokinin, dan di formulasikan hanya dari bahan alami yang dibutuhkan oleh semua jenis tanaman sehingga tidak membahayakan ( aman ) bagi kesehatan manusia maupun binatang.'),
(3, 1, 'Kapur Pertanian Kebomas', 140000, 'Spesifikasi\r\n\r\nKadar CaCO3 : 85%, \r\nIjin Edar : Surat Deptan No. 32/pupuk/PPI/2/2007, \r\nBentuk tepung halus, \r\nWarna putih, \r\nDikemas dalam kantong bercap Kerbau Emas dengan isi 50 kg'),
(4, 2, 'Viterna Plus (Nasa)', 50000, 'Vitamin Ternak Organik merupakan suplemen pakan ternak dari PT Natural Nusantara. Produk vitamin ternak alami ini diolah dari bermacam-macam bahan alami dari hewan serta tumbuhan) yang berguna sebagai penyedia zat-zat yang diperlukan hewan ternak yang memenuhi Aspek K3 (Kuantitas, Kualitas dan Kelestarian). VITERNA Plus merupakan produk alami sehingga aman untuk kesehatan dan kelestarian lingkungan.');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `idTransaksi` int(11) NOT NULL,
  `idProduk` int(11) DEFAULT NULL,
  `jumlah` int(11) DEFAULT NULL,
  `idUser` int(11) DEFAULT NULL,
  `idPembayaran` int(11) DEFAULT NULL,
  `totalBelanja` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`idTransaksi`, `idProduk`, `jumlah`, `idUser`, `idPembayaran`, `totalBelanja`) VALUES
(1, 2, 3, 1, 1, 435000);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `idUser` int(30) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `pekerjaan` varchar(20) DEFAULT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`idUser`, `nama`, `gender`, `alamat`, `pekerjaan`, `username`, `password`, `level`) VALUES
(1, 'Joko Suprapto', 'Pria', 'Jalan Timun Mas No. 20 Desa Brudu', 'Petani', 'jokos', '1234', 'customer'),
(2, 'Ainun Ma\'ruf', 'Wanita', '', 'Admin IT', 'ainun', 'admin', 'admin'),
(3, 'Dani Sekoci', 'Pria', 'Jalan Ambarawa no. 10 Kota Galaktikos', 'Konsultan Ternak', 'daniseko', '1234', 'konsultan'),
(4, 'Yusril Hasriansyah', 'Pria', 'Jalan Brawijaya No. 23 Kampung Froyo', 'Peternak', 'yusril', 'yusril12345', 'customer');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`idKategori`);

--
-- Indexes for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`idPembayaran`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`idProduk`),
  ADD KEY `fk_produk_idKategori` (`idKategori`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`idTransaksi`),
  ADD KEY `fk_transaksi_idproduk` (`idProduk`),
  ADD KEY `fk_transaksi_idpembayaran` (`idPembayaran`),
  ADD KEY `fk_transaksi_iduser` (`idUser`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`idUser`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `idKategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `idPembayaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `idProduk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `idTransaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `idUser` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `produk`
--
ALTER TABLE `produk`
  ADD CONSTRAINT `fk_produk_idKategori` FOREIGN KEY (`idKategori`) REFERENCES `kategori` (`idKategori`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `fk_transaksi_idpembayaran` FOREIGN KEY (`idPembayaran`) REFERENCES `pembayaran` (`idPembayaran`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_transaksi_idproduk` FOREIGN KEY (`idProduk`) REFERENCES `produk` (`idProduk`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_transaksi_iduser` FOREIGN KEY (`idUser`) REFERENCES `user` (`idUser`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
