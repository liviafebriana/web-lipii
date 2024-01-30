-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 20, 2023 at 03:40 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_adopt`
--

-- --------------------------------------------------------

--
-- Table structure for table `kucing`
--

CREATE TABLE `kucing` (
  `id_kucing` int(11) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `ras` varchar(25) NOT NULL,
  `usia` varchar(25) NOT NULL,
  `gender` varchar(25) NOT NULL,
  `status` varchar(25) NOT NULL,
  `foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kucing`
--

INSERT INTO `kucing` (`id_kucing`, `nama`, `ras`, `usia`, `gender`, `status`, `foto`) VALUES
(2, 'Boo', 'Rangdoll ', '4 Bulan', 'Jantan', 'Teradopsi', 'ragdoll1.jpeg'),
(3, 'Lucy ', 'Rangdoll ', '2 Tahun', 'Betina', 'Teradopsi', 'ragdoll2.jpeg'),
(4, 'Loky', ' Munchkin', '3 Bulan', 'Jantan', 'Belum teradopsi', 'munchkin.jpeg'),
(5, 'Chloe', 'Balinese', '1 Tahun', 'Jantan', 'Belum teradopsi', 'balinese.jpeg'),
(6, 'Sophie', 'Persia', '1 Tahun', 'Betina', 'Belum teradopsi', 'persia.jpeg'),
(7, 'Ollie', 'Siamese', '7 Bulan', 'Betina', 'Teradopsi', 'siamese.jpeg'),
(8, 'Coco ', 'Persia Flatnose', '2,5 tahun', 'Jantan', 'Belum teradopsi', 'persiaflat.jpeg'),
(9, 'Ash', 'Sphynx', '1 Tahun', 'Betina', 'Belum teradopsi', 'sphynx.jpeg'),
(10, 'Peni', 'Scottish', '5 Bulan', 'Betina', 'Teradopsi', 'scottis.jpeg'),
(11, 'Theo', 'British Short Hair', '1,5 tahun', 'Jantan', 'Belum teradopsi', 'british2.jpeg'),
(12, 'Sam', 'Exotis Peaknose', '2 Tahun', 'Jantan', 'Belum teradopsi', 'exotis.jpeg'),
(13, 'Nox', ' British Short Hair', '1,5 Tahun', 'Jantan', 'Teradopsi', 'british1.jpeg'),
(14, 'Pie', 'Persia', '3 Bulan', 'Betina', 'Belum teradopsi', 'persia2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `login_admin`
--

CREATE TABLE `login_admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login_admin`
--

INSERT INTO `login_admin` (`id_admin`, `username`, `password`) VALUES
(98000, 'pia123', 9670),
(20000014, 'lipiaa', 200022);

-- --------------------------------------------------------

--
-- Table structure for table `pengadopsi`
--

CREATE TABLE `pengadopsi` (
  `id_pengadopsi` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `nama_pengadopsi` varchar(50) NOT NULL,
  `alamat_jalan` varchar(50) NOT NULL,
  `kota` varchar(50) NOT NULL,
  `provinsi` varchar(50) NOT NULL,
  `kode_pos` int(11) NOT NULL,
  `no_hp` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pengadopsi`
--

INSERT INTO `pengadopsi` (`id_pengadopsi`, `email`, `nama_pengadopsi`, `alamat_jalan`, `kota`, `provinsi`, `kode_pos`, `no_hp`) VALUES
(6, 'matoy22@gmail.com', 'maul', 'jln. bersama dia', 'crb', 'nt', 88987, 821474836),
(7, 'toll98@gmail.com', 'pioo', 'jln. apa hayo', 'crb', 'nt', 9987, 857668877),
(8, 'rdarmawan1@gmail.com', 'oiii', 'jln. ni bersama', 'crb', 'nt', 7789, 2147483647),
(9, 'matoy@gmail.com', 'piii', 'crb', 'crb', 'nt', 889, 821474836),
(10, 'gunturdrnx@gmail.com', 'pioo', 'crb', 'crb', 'crb', 7776, 987654321),
(11, 'rdarmawan281@gmail.com', 'maul', 'crb', 'crb', 'crb', 55567, 821474836),
(12, 'bril@gmail.com', 'piii', 'crb', 'crb', 'crb', 2443, 821474836),
(13, 'matoy@gmail.com', 'pioo', 'crb', 'crb', 'crb', 889, 821474836),
(14, '', '', '', '', '', 0, 0),
(15, '', '', '', '', '', 0, 0),
(16, 'bril22@gmail.com', 'maull', 'jln. apa hayo', 'crb', 'crb', 7776, 888777698),
(17, 'rdarmawan281@gmail.com', 'piii', 'crb', 'crb', 'crb', 9987, 857668877),
(18, 'gunturdrnx@gmail.com', 'maulana', 'jln. ni bersama', 'crb', 'nt', 88987, 987654321),
(19, 'tol@gmail.com', 'maulana', 'crb', 'crb', 'crb', 7776, 857668877);

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `id_pengguna` int(11) NOT NULL,
  `nama_pengguna` varchar(11) NOT NULL,
  `username` varchar(11) NOT NULL,
  `password` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`id_pengguna`, `nama_pengguna`, `username`, `password`) VALUES
(1, 'admin', 'admin', 'admin'),
(2, 'iheuh', 'idni', '36784'),
(3, 'iheuh', 'tamu', '8765'),
(4, 'iheuh', 'iskh', '87658');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `id_kucing` int(11) NOT NULL,
  `id_pengadopsi` int(11) NOT NULL,
  `tgl_trans` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `id_kucing`, `id_pengadopsi`, `tgl_trans`) VALUES
(1, 0, 0, '2023-11-06'),
(2, 0, 0, '0000-00-00'),
(7, 3, 0, '2023-11-07'),
(8, 3, 12, '2023-11-07'),
(9, 4, 13, '2023-11-07'),
(10, 3, 14, '2023-11-14'),
(11, 3, 15, '2023-11-14'),
(12, 13, 16, '2023-11-14'),
(13, 2, 17, '2023-11-14'),
(14, 7, 18, '2023-11-15'),
(15, 10, 19, '2023-11-18');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kucing`
--
ALTER TABLE `kucing`
  ADD PRIMARY KEY (`id_kucing`);

--
-- Indexes for table `login_admin`
--
ALTER TABLE `login_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `pengadopsi`
--
ALTER TABLE `pengadopsi`
  ADD PRIMARY KEY (`id_pengadopsi`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id_pengguna`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD KEY `id_kucing` (`id_kucing`),
  ADD KEY `id_pengadopsi` (`id_pengadopsi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kucing`
--
ALTER TABLE `kucing`
  MODIFY `id_kucing` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;

--
-- AUTO_INCREMENT for table `login_admin`
--
ALTER TABLE `login_admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20000015;

--
-- AUTO_INCREMENT for table `pengadopsi`
--
ALTER TABLE `pengadopsi`
  MODIFY `id_pengadopsi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id_pengguna` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
