-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 23, 2023 at 10:57 AM
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
-- Database: `dblogistikq`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `kode` varchar(45) NOT NULL,
  `kategori` varchar(50) NOT NULL,
  `deskripsi` varchar(45) NOT NULL,
  `kisaran_harga` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`kode`, `kategori`, `deskripsi`, `kisaran_harga`) VALUES
('L001', 'Laptop', 'Laptop Asus Zenbook 32B', '8000000'),
('M001', 'Makanan', 'Zuber keju ', '5000'),
('T001', 'TV', 'TV LG PX201', '4000000');

-- --------------------------------------------------------

--
-- Table structure for table `detail_penerima`
--

CREATE TABLE `detail_penerima` (
  `id` int(11) NOT NULL,
  `kode` varchar(45) NOT NULL,
  `pengiriman_id` int(11) NOT NULL,
  `nama_penerima` varchar(45) NOT NULL,
  `waktu_penerima` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `detail_penerima`
--

INSERT INTO `detail_penerima` (`id`, `kode`, `pengiriman_id`, `nama_penerima`, `waktu_penerima`) VALUES
(1, 'JNE1', 1, 'Michail', '2023-10-09 15:53:36'),
(2, 'JNE2', 2, 'Huda', '2023-10-09 15:53:36'),
(3, 'JNE3', 3, 'Depia', '2023-10-11 15:55:56');

-- --------------------------------------------------------

--
-- Table structure for table `kurir`
--

CREATE TABLE `kurir` (
  `id` int(11) NOT NULL,
  `nama` varchar(45) NOT NULL,
  `nomor_telepon` varchar(45) NOT NULL,
  `jadwal` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kurir`
--

INSERT INTO `kurir` (`id`, `nama`, `nomor_telepon`, `jadwal`) VALUES
(1, 'Achbar', '085620622988', 'Pagi'),
(2, 'wahyu', '081630642958', 'Sore'),
(3, 'Yudhi', '082640642959', 'Malam');

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran`
--

CREATE TABLE `pembayaran` (
  `id` int(11) NOT NULL,
  `metode` varchar(45) NOT NULL,
  `total_harga` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pembayaran`
--

INSERT INTO `pembayaran` (`id`, `metode`, `total_harga`) VALUES
(1, 'COD', 8000000),
(2, 'COD', 5000),
(3, 'Transfer Bank BCA', 4000000);

-- --------------------------------------------------------

--
-- Table structure for table `pengiriman`
--

CREATE TABLE `pengiriman` (
  `id` int(11) NOT NULL,
  `kode` varchar(45) NOT NULL,
  `id_user` int(11) NOT NULL,
  `kode_barang` varchar(45) NOT NULL,
  `tanggal` date NOT NULL,
  `nama_penerima` varchar(45) NOT NULL,
  `lokasi_tujuan` varchar(225) NOT NULL,
  `status_pengiriman` varchar(45) NOT NULL,
  `no_telp_penerima` varchar(45) NOT NULL,
  `kurir_id` int(11) NOT NULL,
  `pembayaran_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pengiriman`
--

INSERT INTO `pengiriman` (`id`, `kode`, `id_user`, `kode_barang`, `tanggal`, `nama_penerima`, `lokasi_tujuan`, `status_pengiriman`, `no_telp_penerima`, `kurir_id`, `pembayaran_id`) VALUES
(1, 'JNE1', 1, 'L001', '2023-10-09', 'Michail', 'Jakarta', 'Proses', '083601755967', 1, 1),
(2, 'JNE2', 2, 'M001', '2023-10-09', 'Huda', 'Solo', 'Perjalanan', '081630642958', 2, 2),
(3, 'JNE3', 3, 'T001', '2023-10-11', 'depia', 'Semarang', 'Proses', '085640642767', 3, 3);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(75) NOT NULL,
  `username` varchar(45) NOT NULL,
  `password` varchar(225) NOT NULL,
  `nomor_telepon` varchar(16) NOT NULL,
  `alamat` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `username`, `password`, `nomor_telepon`, `alamat`) VALUES
(1, 'Michail', 'mic123', 'michail12', '085620633922', 'Jakarta'),
(2, 'Huda', 'Huda123', 'Huda12', '081630642958', 'Solo'),
(3, 'depia', 'depia12', 'depia123', '085640642767', 'Semarang');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`kode`),
  ADD UNIQUE KEY `kode_UNIQUE` (`kode`);

--
-- Indexes for table `detail_penerima`
--
ALTER TABLE `detail_penerima`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kurir`
--
ALTER TABLE `kurir`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengiriman`
--
ALTER TABLE `pengiriman`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_pengiriman_user_idx` (`id_user`),
  ADD KEY `fk_pengiriman_barang1_idx` (`kode_barang`),
  ADD KEY `fk_pengiriman_kurir1_idx` (`kurir_id`),
  ADD KEY `fk_pengiriman_Pembayaran1_idx` (`pembayaran_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `detail_penerima`
--
ALTER TABLE `detail_penerima`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `kurir`
--
ALTER TABLE `kurir`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pengiriman`
--
ALTER TABLE `pengiriman`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
