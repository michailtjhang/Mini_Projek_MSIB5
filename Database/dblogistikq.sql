-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 25 Okt 2023 pada 04.59
-- Versi server: 10.4.25-MariaDB
-- Versi PHP: 8.1.10

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
-- Struktur dari tabel `barang`
--

CREATE TABLE `barang` (
  `kode` varchar(45) NOT NULL,
  `kategori` varchar(50) NOT NULL,
  `deskripsi` varchar(45) NOT NULL,
  `kisaran_harga` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `barang`
--

INSERT INTO `barang` (`kode`, `kategori`, `deskripsi`, `kisaran_harga`) VALUES
('L001', 'Laptop', 'Laptop Asus Zenbook 32B', '8000000'),
('M001', 'Makanan', 'Zuber keju ', '5000'),
('T001', 'TV', 'TV LG PX201', '4000000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_penerimaan`
--

CREATE TABLE `detail_penerimaan` (
  `id` int(11) NOT NULL,
  `kode` varchar(45) NOT NULL,
  `pengiriman_id` int(11) NOT NULL,
  `nama_penerima` varchar(45) NOT NULL,
  `waktu_penerima` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `detail_penerimaan`
--

INSERT INTO `detail_penerimaan` (`id`, `kode`, `pengiriman_id`, `nama_penerima`, `waktu_penerima`) VALUES
(1, 'JNE1', 1, 'Michail', '2023-10-09 15:53:36'),
(2, 'JNE2', 2, 'Huda', '2023-10-09 15:53:36'),
(3, 'JNE3', 3, 'Depia', '2023-10-11 15:55:56');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kurir`
--

CREATE TABLE `kurir` (
  `id` int(11) NOT NULL,
  `nama` varchar(45) NOT NULL,
  `nomor_telepon` varchar(45) NOT NULL,
  `jadwal` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `kurir`
--

INSERT INTO `kurir` (`id`, `nama`, `nomor_telepon`, `jadwal`) VALUES
(1, 'Achbar', '085620622988', 'Pagi'),
(2, 'wahyu', '081630642958', 'Sore'),
(3, 'Yudhi', '082640642959', 'Malam');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembayaran`
--

CREATE TABLE `pembayaran` (
  `id` int(11) NOT NULL,
  `metode` varchar(45) NOT NULL,
  `total_harga` double NOT NULL,
  `pengiriman_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `pembayaran`
--

INSERT INTO `pembayaran` (`id`, `metode`, `total_harga`, `pengiriman_id`) VALUES
(1, 'COD', 8000000, 1),
(2, 'COD', 5000, 2),
(3, 'Transfer Bank BCA', 4000000, 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengiriman`
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
  `nomor_telp_penerima` varchar(45) NOT NULL,
  `kurir_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `pengiriman`
--

INSERT INTO `pengiriman` (`id`, `kode`, `id_user`, `kode_barang`, `tanggal`, `nama_penerima`, `lokasi_tujuan`, `status_pengiriman`, `nomor_telp_penerima`, `kurir_id`) VALUES
(1, 'JNE1', 1, 'L001', '2023-10-09', 'Michail', 'Jakarta', 'Proses', '083601755967', 1),
(2, 'JNE2', 2, 'M001', '2023-10-09', 'Huda', 'Solo', 'Perjalanan', '081630642958', 2),
(3, 'JNE3', 3, 'T001', '2023-10-11', 'depia', 'Semarang', 'Proses', '085640642767', 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(75) NOT NULL,
  `username` varchar(45) NOT NULL,
  `password` varchar(225) NOT NULL,
  `nomor_telepon` varchar(16) NOT NULL,
  `alamat` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `nama`, `username`, `password`, `nomor_telepon`, `alamat`) VALUES
(1, 'Michail', 'mic123', 'michail12', '085620633922', 'Jakarta'),
(2, 'Huda', 'Huda123', 'Huda12', '081630642958', 'Solo'),
(3, 'depia', 'depia12', 'depia123', '085640642767', 'Semarang');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`kode`),
  ADD UNIQUE KEY `kode_UNIQUE` (`kode`);

--
-- Indeks untuk tabel `detail_penerimaan`
--
ALTER TABLE `detail_penerimaan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_detail_pengiriman_pengiriman1_idx` (`pengiriman_id`);

--
-- Indeks untuk tabel `kurir`
--
ALTER TABLE `kurir`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_Pembayaran_pengiriman1_idx` (`pengiriman_id`);

--
-- Indeks untuk tabel `pengiriman`
--
ALTER TABLE `pengiriman`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_pengiriman_user_idx` (`id_user`),
  ADD KEY `fk_pengiriman_barang1_idx` (`kode_barang`),
  ADD KEY `fk_pengiriman_kurir1_idx` (`kurir_id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nama_UNIQUE` (`nama`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `detail_penerimaan`
--
ALTER TABLE `detail_penerimaan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `kurir`
--
ALTER TABLE `kurir`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `pengiriman`
--
ALTER TABLE `pengiriman`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `detail_penerimaan`
--
ALTER TABLE `detail_penerimaan`
  ADD CONSTRAINT `fk_detail_pengiriman_pengiriman1` FOREIGN KEY (`pengiriman_id`) REFERENCES `pengiriman` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ketidakleluasaan untuk tabel `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD CONSTRAINT `fk_Pembayaran_pengiriman1` FOREIGN KEY (`pengiriman_id`) REFERENCES `pengiriman` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ketidakleluasaan untuk tabel `pengiriman`
--
ALTER TABLE `pengiriman`
  ADD CONSTRAINT `fk_pengiriman_barang1` FOREIGN KEY (`kode_barang`) REFERENCES `barang` (`kode`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_pengiriman_kurir1` FOREIGN KEY (`kurir_id`) REFERENCES `kurir` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_pengiriman_user` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
