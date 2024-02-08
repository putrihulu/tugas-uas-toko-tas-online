-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 08, 2024 at 02:03 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project_uas`
--

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `berita_id` int(5) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `isi` longtext NOT NULL,
  `input_by` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `data_produk`
--

CREATE TABLE `data_produk` (
  `barang_id` int(5) NOT NULL,
  `nama_barang` varchar(20) NOT NULL,
  `jumlah` varchar(5) NOT NULL,
  `harga_barang` varchar(5) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `no_hp` text NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `data_produk`
--

INSERT INTO `data_produk` (`barang_id`, `nama_barang`, `jumlah`, `harga_barang`, `alamat`, `no_hp`, `email`) VALUES
(3, 'tas_ransel', '1', '60', 'medan sunggalllllll', '12345678', 'putri@gmail.com'),
(4, 'tas_ideas', '2', '10000', 'Medan Helvetia', '08126465665', 'budiman@gmail.com'),
(5, 'tas_selempang', '3', '60000', 'kisaran', '082352780', 'sari@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `komentar`
--

CREATE TABLE `komentar` (
  `komentar_id` int(5) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pesan` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `komentar`
--

INSERT INTO `komentar` (`komentar_id`, `nama`, `email`, `pesan`, `date`) VALUES
(0, '', ' putri@gmail.com', '', '2024-02-08 11:24:14'),
(0, 'niat hulu', 'niat@gmail.com', ' tasnya sangat bermanfaat', '2024-02-08 12:49:38'),
(0, 'huluku', 'hulu@gmail.com', ' sangat memuaskan', '2024-02-08 12:50:06');

-- --------------------------------------------------------

--
-- Table structure for table `pembeli`
--

CREATE TABLE `pembeli` (
  `pembeli_id` int(5) NOT NULL,
  `tanggal_pembelian` date NOT NULL,
  `jumlah_barang` varchar(50) NOT NULL,
  `jenis_barang` varchar(50) NOT NULL,
  `status_pembayaran` varchar(50) NOT NULL,
  `alamat_pengiriman` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pembeli`
--

INSERT INTO `pembeli` (`pembeli_id`, `tanggal_pembelian`, `jumlah_barang`, `jenis_barang`, `status_pembayaran`, `alamat_pengiriman`) VALUES
(1, '2024-02-02', '3', 'tas_ransel', 'cod', 'medannnnn'),
(4, '2024-02-08', '2', 'tas kulit', 'cod', 'medan'),
(5, '2024-02-09', '1', 'tas reseller', 'bayar ditempat', 'medan'),
(6, '2024-02-13', '5', 'tas selempang', 'cod', 'nias utara');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(254) NOT NULL,
  `email` varchar(50) NOT NULL,
  `token` char(128) DEFAULT NULL,
  `status` char(1) DEFAULT NULL,
  `last_login` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `password`, `email`, `token`, `status`, `last_login`) VALUES
(1, 'admin', 'c4ca4238a0b923820dcc509a6f75849b', 'putri@gmail.com', '506cbd4086011fc5ae284c5e89dd73fb', '1', '2024-02-08 19:58:31');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_produk`
--
ALTER TABLE `data_produk`
  ADD PRIMARY KEY (`barang_id`);

--
-- Indexes for table `pembeli`
--
ALTER TABLE `pembeli`
  ADD PRIMARY KEY (`pembeli_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_produk`
--
ALTER TABLE `data_produk`
  MODIFY `barang_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `pembeli`
--
ALTER TABLE `pembeli`
  MODIFY `pembeli_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
