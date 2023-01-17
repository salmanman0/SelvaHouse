-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 30, 2022 at 09:51 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `selva_house`
--

-- --------------------------------------------------------

--
-- Table structure for table `detail_penjualan`
--

CREATE TABLE `detail_penjualan` (
  `no_penjualan` varchar(50) DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL,
  `id_barang` int(11) DEFAULT NULL,
  `jumlah` int(100) DEFAULT NULL,
  `total` int(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detail_penjualan`
--

INSERT INTO `detail_penjualan` (`no_penjualan`, `id_user`, `id_barang`, `jumlah`, `total`) VALUES
('PJ1671975093', 9, 7, 3, 900000),
('PJ1671975107', 9, 7, 3, 900000),
('PJ1671975502', 7, 33, 1, 210000),
('PJ1671975502', 7, 7, 3, 900000),
('PJ1671975502', 7, 7, 3, 900000),
('PJ1671975589', 7, 33, 2, 420000),
('PJ1671975759', 7, 33, 2, 420000),
('PJ1671975799', 7, 33, 1, 210000);

-- --------------------------------------------------------

--
-- Table structure for table `tb_barang`
--

CREATE TABLE `tb_barang` (
  `id` int(11) NOT NULL,
  `nama_brg` varchar(150) DEFAULT NULL,
  `harga` int(50) DEFAULT NULL,
  `stock` int(100) DEFAULT NULL,
  `keterangan` varchar(250) DEFAULT NULL,
  `merk` varchar(50) DEFAULT NULL,
  `gambar` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_barang`
--

INSERT INTO `tb_barang` (`id`, `nama_brg`, `harga`, `stock`, `keterangan`, `merk`, `gambar`) VALUES
(1, 'Gamis Zhafira', 240000, 51, 'baju anak kicik miya', 'labella', 'labella1.jpeg'),
(2, 'Olivia', 230000, 43, 'Baju lembut yang mudah disetrika ', 'yasmeera', 'labella2.jpeg'),
(3, 'Koko Alief', 342000, 23, 'baju alief ni mia', 'wanoja', 'labella3.jpeg'),
(7, 'Baju Anak Cihuy', 300000, 24, 'nyaman saat digunakan dan tidak menimbulkan bekas pada kulit anak', 'labella', 'assets2.jpg'),
(29, 'Gamis Cantik', 230000, 50, 'gamis dengan nuansa mewah dan indah', 'yasmeera', 'assets1.1.png'),
(31, 'Adara', 254000, 20, 'baju ini lembut banget', 'labella', 'assets1.2.png'),
(32, 'Yellow Andara', 250000, 43, NULL, 'yasmeera', 'assets1.jpg'),
(33, 'Scarves', 210000, 47, 'Hijab bernuansa elegan yang dapat membuatmu terlihat seperti ratu', 'wanoja', 'wanoja3.jpeg'),
(34, 'Koko Pasha', 210000, 35, '1 set baju muslim dewasa yang dapat digunakan sehari hari ataupun untuk acara keagaaman', 'wanoja', 'wanoja2.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_cart`
--

CREATE TABLE `tb_cart` (
  `id` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `id_barang` int(11) DEFAULT NULL,
  `jumlah` int(100) DEFAULT NULL,
  `tanggal` varchar(100) DEFAULT NULL,
  `total` int(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_cart`
--

INSERT INTO `tb_cart` (`id`, `id_user`, `id_barang`, `jumlah`, `tanggal`, `total`) VALUES
(10, 7, 33, 1, '25/12/2022', 210000),
(11, 7, 29, 1, '25/12/2022', 230000);

-- --------------------------------------------------------

--
-- Table structure for table `tb_highlight`
--

CREATE TABLE `tb_highlight` (
  `id_brg` int(11) NOT NULL,
  `nama_brg` varchar(50) NOT NULL DEFAULT '0',
  `keterangan` varchar(250) NOT NULL DEFAULT '0',
  `kategori` varchar(50) NOT NULL DEFAULT '0',
  `harga` int(11) NOT NULL DEFAULT 0,
  `stock` int(4) NOT NULL DEFAULT 0,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_highlight`
--

INSERT INTO `tb_highlight` (`id_brg`, `nama_brg`, `keterangan`, `kategori`, `harga`, `stock`, `gambar`) VALUES
(1, 'Gamis - Yasmeera', 'Baju ini adalah buatan Yasmeera yang sangat lembut dan nyaman dipakai', 'Pakaian Wanita', 400000, 10, 'assets4.jpg'),
(2, 'Pajamas Kid - Yasmeera', 'Baju ini adalah buatan Yasmeera yang berbahan katun dan lembut', 'Pakaian Anak Anak', 200000, 2, 'assets6.jpg'),
(3, 'tes - wanoja', 'tessssss', 'pakaian wanita', 80000, 7, 'assets3.jpg'),
(4, 'affasd', 'asdasd', 'asdasdas', 1231, 2, 'assets5.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_penjualan`
--

CREATE TABLE `tb_penjualan` (
  `id` int(11) NOT NULL,
  `no_penjualan` varchar(50) DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL,
  `tanggal` varchar(50) DEFAULT NULL,
  `alamat` varchar(50) DEFAULT NULL,
  `pembayaran` varchar(50) DEFAULT NULL,
  `gambar` varchar(50) DEFAULT NULL,
  `keterangan` varchar(50) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL,
  `total_bayar` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_penjualan`
--

INSERT INTO `tb_penjualan` (`id`, `no_penjualan`, `id_user`, `tanggal`, `alamat`, `pembayaran`, `gambar`, `keterangan`, `status`, `total_bayar`) VALUES
(1, 'PJ1671975093', 9, '25/12/2022', 'jl jalan', 'MANDIRI', 'logo_partai4.png', 'aaa', NULL, 900000),
(2, 'PJ1671975107', 9, '25/12/2022', 'jl jalan', '', NULL, '', NULL, 900000),
(3, 'PJ1671975502', 7, '25/12/2022', '', '', NULL, '', NULL, 2010000),
(4, 'PJ1671975589', 7, '25/12/2022', '', '', NULL, '', NULL, 420000),
(5, 'PJ1671975759', 7, '25/12/2022', '', '', NULL, '', NULL, 420000),
(6, 'PJ1671975799', 7, '25/12/2022', '', '', NULL, '', NULL, 210000);

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `role` varchar(100) DEFAULT NULL,
  `gambar` varchar(100) DEFAULT NULL,
  `date_created` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id`, `nama`, `email`, `password`, `role`, `gambar`, `date_created`) VALUES
(7, 'Salman', 'salman@gmail.com', '$2y$10$6.sBwnj5RXwHSmXBNg0jTehjX.dnl8LLmgHtBsbKteY', 'User', 'default.jpg', 2022),
(8, 'user', 'user@gmail.com', '$2y$10$Sl3OjkKatrJ3vcNq3LgK9eZCNKve6maqYwS3403rAtf', 'User', 'default.jpg', 2022),
(9, 'test', 'test@gmail.com', '$2y$10$D.xHzNtsduLajo11IQgk8ePQJFZjMedBgHgMkuPmxAB', 'User', 'default.jpg', 2022),
(10, 'admin', 'admin@gmail.com', '$2y$10$lPfkt3V1rLtX0y1v0m0ep.FnENJqO7mEC5SVJO53W3QhlaFRYFVZO', 'Admin', 'default.jpg', 2022);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `detail_penjualan`
--
ALTER TABLE `detail_penjualan`
  ADD KEY `user3` (`id_user`),
  ADD KEY `barang3` (`id_barang`);

--
-- Indexes for table `tb_barang`
--
ALTER TABLE `tb_barang`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `tb_cart`
--
ALTER TABLE `tb_cart`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user` (`id_user`),
  ADD KEY `barang` (`id_barang`);

--
-- Indexes for table `tb_highlight`
--
ALTER TABLE `tb_highlight`
  ADD PRIMARY KEY (`id_brg`);

--
-- Indexes for table `tb_penjualan`
--
ALTER TABLE `tb_penjualan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userr` (`id_user`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_barang`
--
ALTER TABLE `tb_barang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `tb_cart`
--
ALTER TABLE `tb_cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tb_highlight`
--
ALTER TABLE `tb_highlight`
  MODIFY `id_brg` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_penjualan`
--
ALTER TABLE `tb_penjualan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `detail_penjualan`
--
ALTER TABLE `detail_penjualan`
  ADD CONSTRAINT `barang3` FOREIGN KEY (`id_barang`) REFERENCES `tb_barang` (`id`),
  ADD CONSTRAINT `user3` FOREIGN KEY (`id_user`) REFERENCES `tb_user` (`id`);

--
-- Constraints for table `tb_cart`
--
ALTER TABLE `tb_cart`
  ADD CONSTRAINT `barang` FOREIGN KEY (`id_barang`) REFERENCES `tb_barang` (`id`),
  ADD CONSTRAINT `user` FOREIGN KEY (`id_user`) REFERENCES `tb_user` (`id`);

--
-- Constraints for table `tb_penjualan`
--
ALTER TABLE `tb_penjualan`
  ADD CONSTRAINT `userr` FOREIGN KEY (`id_user`) REFERENCES `tb_user` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
