-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 18, 2020 at 07:45 AM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `kurirku`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_data`
--

CREATE TABLE IF NOT EXISTS `tb_data` (
  `id` int(11) NOT NULL,
  `resi` varchar(100) NOT NULL,
  `pengirim` varchar(100) NOT NULL,
  `alamat_pengirim` varchar(100) NOT NULL,
  `no_telpon_pengirim` varchar(50) NOT NULL,
  `tujuan` varchar(100) NOT NULL,
  `penerima` varchar(100) NOT NULL,
  `no_telpon_penerima` varchar(50) NOT NULL,
  `paket` varchar(120) NOT NULL,
  `driver` varchar(100) NOT NULL,
  `keterangan` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_data`
--

INSERT INTO `tb_data` (`id`, `resi`, `pengirim`, `alamat_pengirim`, `no_telpon_pengirim`, `tujuan`, `penerima`, `no_telpon_penerima`, `paket`, `driver`, `keterangan`) VALUES
(1, 'KK-0123', 'Rifandi Ihram', 'Villa Gading Harapan, Bekasi Utara', '08212586586', 'Prumahan Emerlad, Jakarta Pusat', 'Sastro', '021252132531', 'Regular', 'Darko', 'Belum Dikirim'),
(7, 'KK-0124', 'Sastroo', 'Tarumajayaa', '0215487541', 'Bogor Bawahh', 'Arryy', '0215456545', 'Regular', 'Doni', 'Telah Dikirm');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` enum('admin','driver') NOT NULL,
  `blokir` enum('N','Y') NOT NULL,
  `id_sessions` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `level`, `blokir`, `id_sessions`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin', 'N', ''),
(2, 'rifandi', '04273d92753dfc55aa7af846a5e3cb16', 'admin', 'N', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_data`
--
ALTER TABLE `tb_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_data`
--
ALTER TABLE `tb_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
