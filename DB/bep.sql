-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 19, 2016 at 12:37 PM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bep`
--

-- --------------------------------------------------------

--
-- Table structure for table `karyawan`
--

CREATE TABLE IF NOT EXISTS `karyawan` (
`id_karyawan` int(11) NOT NULL,
  `nip` varchar(20) NOT NULL,
  `nama` varchar(150) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telepon` varchar(15) NOT NULL,
  `jabatan` varchar(50) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `karyawan`
--

INSERT INTO `karyawan` (`id_karyawan`, `nip`, `nama`, `email`, `telepon`, `jabatan`) VALUES
(1, '0819219', 'aso', 'ahmad@gmail.com', '183490810', 'manager'),
(2, '0819218', 'ahmad', 'ahmad@gmail.com', '089928', 'Bagian Gudang');

-- --------------------------------------------------------

--
-- Table structure for table `kendaraan`
--

CREATE TABLE IF NOT EXISTS `kendaraan` (
`id_kendaraan` int(11) NOT NULL,
  `no_polisi` varchar(10) NOT NULL,
  `kapasitas` int(5) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `kendaraan`
--

INSERT INTO `kendaraan` (`id_kendaraan`, `no_polisi`, `kapasitas`, `status`) VALUES
(3, 'D 1234 VJ', 60, 1),
(4, 'D 1234 YY', 30, 1);

-- --------------------------------------------------------

--
-- Table structure for table `material`
--

CREATE TABLE IF NOT EXISTS `material` (
`id_material` int(8) NOT NULL,
  `material` varchar(150) NOT NULL,
  `stok` int(8) NOT NULL,
  `harga` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `material`
--

INSERT INTO `material` (`id_material`, `material`, `stok`, `harga`) VALUES
(1, 'semen', 5000, 70000),
(2, 'pasir', 800, 50000),
(3, 'split', 40000, 800000),
(4, 'hs-5', 5000, 60000);

-- --------------------------------------------------------

--
-- Table structure for table `pemesanan_material`
--

CREATE TABLE IF NOT EXISTS `pemesanan_material` (
`id_pemesanan` int(11) NOT NULL,
  `tgl_pemesanan` date NOT NULL,
  `verifikasi1` tinyint(1) NOT NULL,
  `verifikasi2` tinyint(1) NOT NULL,
  `status` varchar(50) NOT NULL,
  `sales` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `pemesanan_produk`
--

CREATE TABLE IF NOT EXISTS `pemesanan_produk` (
`id_pemesanan` int(11) NOT NULL,
  `tgl_pemesanan` date NOT NULL,
  `verifikasi1` tinyint(1) NOT NULL,
  `verifikasi2` tinyint(1) NOT NULL,
  `status` varchar(50) NOT NULL,
  `sales` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE IF NOT EXISTS `produk` (
`id_produk` int(8) NOT NULL,
  `kode_produk` varchar(15) NOT NULL,
  `nama_produk` varchar(100) NOT NULL,
  `stok` int(8) NOT NULL,
  `harga` int(8) NOT NULL,
  `id_penambah` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id_produk`, `kode_produk`, `nama_produk`, `stok`, `harga`, `id_penambah`) VALUES
(2, 'P001', 'Pancang Class S1s', 50111, 10000111, 0);

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE IF NOT EXISTS `sales` (
`id_sales` int(11) NOT NULL,
  `username` varchar(150) NOT NULL,
  `nama_sales` varchar(150) NOT NULL,
  `alamat_sales` text NOT NULL,
  `telepon` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`id_sales`, `username`, `nama_sales`, `alamat_sales`, `telepon`, `email`) VALUES
(1, 'saless', 'Aso Sales', ' Quisque velit nisi, pretium ut lacinia in, elementum id enim. Donec rutrum congue leo eget malesuada.', '081918219', 'ajmaj@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE IF NOT EXISTS `supplier` (
`id_supplier` int(11) NOT NULL,
  `username` varchar(150) NOT NULL,
  `nama` varchar(150) NOT NULL,
  `nama_supplier` varchar(150) NOT NULL,
  `alamat` text NOT NULL,
  `telepon` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`id_supplier`, `username`, `nama`, `nama_supplier`, `alamat`, `telepon`, `email`) VALUES
(1, 'suppliers', 'Ujangs', 'Karya Sentosa Barokahs', '  Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curaes', '089323838311', 'ajajsm@gmail.coms');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`id_user` int(11) unsigned NOT NULL,
  `role` enum('manager','staff','supplier','sales','admin','kepala_gudang','kepala_pabrik') NOT NULL,
  `email` varchar(100) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `role`, `email`, `username`, `password`, `first_name`, `last_name`, `created_at`) VALUES
(2, 'manager', 'ahmadsopian311@gmail.com', 'manager', '1d0258c2440a8d19e716292b231e3190', 'ahmad', 'sopian', '2016-04-04 03:34:34'),
(4, 'supplier', 'ahmadsopian311@gmail.com', 'supplier', '99b0e8da24e29e4ccb5d7d76e677c2ac', 'ahmad', 'sopian', '2016-04-04 04:46:57'),
(6, 'sales', 'sales@gmail.com', 'sales', '9ed083b1436e5f40ef984b28255eef18', 'ahmad', 'sopian', '2016-04-15 03:49:01'),
(7, 'staff', 'staff@gmail.com', 'staff', '1253208465b1efa876f982d8a9e73eef', 'aso', 'tahu', '2016-04-15 03:49:59'),
(8, 'admin', 'ahmadsopian311@gmail.com', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'ahmad', 'sopian', '2016-04-18 02:31:22'),
(9, 'kepala_gudang', 'asotahu@gmail.com', 'gudang', '202446dd1d6028084426867365b0c7a1', 'Gudang', 'Last Name', '2016-05-18 18:09:11'),
(10, 'kepala_pabrik', 'skas@gmail.com', 'pabrik', 'd716783ecdb3f7bff754c5c275260c1d', 'Pabrik First', 'pabrik Last', '2016-05-18 18:09:41'),
(11, 'staff', 'aksk@gmail.com', 'asf', '7b064dad507c266a161ffc73c53dcdc5', 'asf', 'asf', '2016-05-18 18:23:43');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `karyawan`
--
ALTER TABLE `karyawan`
 ADD PRIMARY KEY (`id_karyawan`);

--
-- Indexes for table `kendaraan`
--
ALTER TABLE `kendaraan`
 ADD PRIMARY KEY (`id_kendaraan`);

--
-- Indexes for table `material`
--
ALTER TABLE `material`
 ADD PRIMARY KEY (`id_material`);

--
-- Indexes for table `pemesanan_material`
--
ALTER TABLE `pemesanan_material`
 ADD PRIMARY KEY (`id_pemesanan`);

--
-- Indexes for table `pemesanan_produk`
--
ALTER TABLE `pemesanan_produk`
 ADD PRIMARY KEY (`id_pemesanan`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
 ADD PRIMARY KEY (`id_produk`);

--
-- Indexes for table `sales`
--
ALTER TABLE `sales`
 ADD PRIMARY KEY (`id_sales`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
 ADD PRIMARY KEY (`id_supplier`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `karyawan`
--
ALTER TABLE `karyawan`
MODIFY `id_karyawan` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `kendaraan`
--
ALTER TABLE `kendaraan`
MODIFY `id_kendaraan` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `material`
--
ALTER TABLE `material`
MODIFY `id_material` int(8) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `pemesanan_material`
--
ALTER TABLE `pemesanan_material`
MODIFY `id_pemesanan` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pemesanan_produk`
--
ALTER TABLE `pemesanan_produk`
MODIFY `id_pemesanan` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
MODIFY `id_produk` int(8) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `sales`
--
ALTER TABLE `sales`
MODIFY `id_sales` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `supplier`
--
ALTER TABLE `supplier`
MODIFY `id_supplier` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `id_user` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
