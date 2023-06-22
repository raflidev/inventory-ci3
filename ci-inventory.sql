-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 22, 2023 at 04:43 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ci-inventory`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id_barang` int(11) NOT NULL,
  `nama_barang` varchar(50) NOT NULL,
  `jenis` varchar(50) NOT NULL,
  `kategori` varchar(50) NOT NULL,
  `merk` varchar(50) NOT NULL,
  `satuan` varchar(50) NOT NULL,
  `gudang` varchar(255) NOT NULL,
  `rak` varchar(255) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `foto_barang` varchar(255) NOT NULL,
  `tanggal` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id_barang`, `nama_barang`, `jenis`, `kategori`, `merk`, `satuan`, `gudang`, `rak`, `keterangan`, `foto_barang`, `tanggal`) VALUES
(7, 'asd', 'asd', 'asd', 'asd', 'asd', 'asd', 'asd', 'asd', 'asd.jpg', NULL),
(11, 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', '64916a4d92bf9.png', NULL),
(12, '', '', '', '', '', '', '', '', 'default.jpg', '2023-06-20'),
(13, 'asd', 'asd', 'asd', 'asd', 'ads', 'sd', 'asd', 'asd', 'default.jpg', '2023-06-20');

-- --------------------------------------------------------

--
-- Table structure for table `barang_keluar`
--

CREATE TABLE `barang_keluar` (
  `id_bkeluar` int(11) NOT NULL,
  `no_bukti` varchar(255) NOT NULL,
  `tgl_keluar` date NOT NULL,
  `pengurus` varchar(255) NOT NULL,
  `ket_keluar` varchar(255) NOT NULL,
  `tanggal` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `barang_keluar`
--

INSERT INTO `barang_keluar` (`id_bkeluar`, `no_bukti`, `tgl_keluar`, `pengurus`, `ket_keluar`, `tanggal`) VALUES
(3, 'asd', '2023-06-21', 'asd', 'asd', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `barang_masuk`
--

CREATE TABLE `barang_masuk` (
  `id_bmasuk` int(11) NOT NULL,
  `no_bukti` varchar(255) NOT NULL,
  `tgl_masuk` date NOT NULL,
  `pengurus` varchar(255) NOT NULL,
  `ket_masuk` varchar(255) NOT NULL,
  `tanggal` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `barang_masuk`
--

INSERT INTO `barang_masuk` (`id_bmasuk`, `no_bukti`, `tgl_masuk`, `pengurus`, `ket_masuk`, `tanggal`) VALUES
(3, 'asd', '2023-06-20', 'asd', '', '2023-06-20'),
(4, '111', '2023-06-19', 'aaa', 'asda', '2023-06-20');

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `id_pelanggan` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `kodepos` varchar(255) NOT NULL,
  `no_telp` varchar(255) NOT NULL,
  `namakontak` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`id_pelanggan`, `nama`, `alamat`, `kodepos`, `no_telp`, `namakontak`, `email`) VALUES
(1, 'b', 'a', 'a', 'a', 'a', 'a'),
(2147483647, 'a', 'a', 'a', 'a', 'a', 'a');

-- --------------------------------------------------------

--
-- Table structure for table `pemasok`
--

CREATE TABLE `pemasok` (
  `id_pemasok` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `kodepos` varchar(255) NOT NULL,
  `no_hp` varchar(255) NOT NULL,
  `namakontak` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pemasok`
--

INSERT INTO `pemasok` (`id_pemasok`, `nama`, `alamat`, `kodepos`, `no_hp`, `namakontak`, `email`) VALUES
(6481898, 'bc', 'b', 'b', 'b', 'b', 'bz');

-- --------------------------------------------------------

--
-- Table structure for table `permintaan_barang`
--

CREATE TABLE `permintaan_barang` (
  `id_permintaan` int(11) NOT NULL,
  `tgl_permintaan` date NOT NULL,
  `nama_peminta` varchar(255) NOT NULL,
  `jabatan_permintaan` varchar(255) NOT NULL,
  `ket_peminta` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `permintaan_barang`
--

INSERT INTO `permintaan_barang` (`id_permintaan`, `tgl_permintaan`, `nama_peminta`, `jabatan_permintaan`, `ket_peminta`, `status`, `tanggal`) VALUES
(1, '2023-06-14', 'asd', 'asd', 'asd', 2, '0000-00-00'),
(2, '2023-06-14', '', '', '', 0, '2023-06-21');

-- --------------------------------------------------------

--
-- Table structure for table `persediaan`
--

CREATE TABLE `persediaan` (
  `id_persediaan` int(11) NOT NULL,
  `stok_barang` int(11) NOT NULL,
  `stok_minimum` int(11) NOT NULL,
  `id_barang` int(11) NOT NULL,
  `tanggal` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `persediaan`
--

INSERT INTO `persediaan` (`id_persediaan`, `stok_barang`, `stok_minimum`, `id_barang`, `tanggal`) VALUES
(1, 1001, 20, 7, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tr_keluar`
--

CREATE TABLE `tr_keluar` (
  `id_trkeluar` int(11) NOT NULL,
  `jumlah_keluar` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_bkeluar` int(11) NOT NULL,
  `id_barang` int(11) NOT NULL,
  `id_pelanggan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tr_keluar`
--

INSERT INTO `tr_keluar` (`id_trkeluar`, `jumlah_keluar`, `id_user`, `id_bkeluar`, `id_barang`, `id_pelanggan`) VALUES
(3, 0, 1, 3, 7, 1),
(4, 0, 2, 3, 7, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tr_masuk`
--

CREATE TABLE `tr_masuk` (
  `id_trmasuk` int(11) NOT NULL,
  `jumlah_masuk` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_bmasuk` int(11) NOT NULL,
  `id_barang` int(11) NOT NULL,
  `id_pemasok` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tr_masuk`
--

INSERT INTO `tr_masuk` (`id_trmasuk`, `jumlah_masuk`, `id_user`, `id_bmasuk`, `id_barang`, `id_pemasok`) VALUES
(3, 12, 1, 2, 7, 6481898),
(8, 0, 1, 3, 7, 6481898),
(9, 0, 1, 3, 7, 6481898),
(10, 0, 1, 4, 7, 6481898),
(11, 0, 1, 4, 11, 6481898);

-- --------------------------------------------------------

--
-- Table structure for table `tr_permintaan`
--

CREATE TABLE `tr_permintaan` (
  `id_trpermintaan` int(11) NOT NULL,
  `jumlah_permintaan` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_permintaan` int(11) NOT NULL,
  `id_barang` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tr_permintaan`
--

INSERT INTO `tr_permintaan` (`id_trpermintaan`, `jumlah_permintaan`, `id_user`, `id_permintaan`, `id_barang`) VALUES
(3, 1, 1, 1, 7),
(4, 3, 1, 1, 7);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama_lengkap` varchar(255) NOT NULL,
  `level` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `no_telp` varchar(255) NOT NULL,
  `foto_profil` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `nama_lengkap`, `level`, `email`, `no_telp`, `foto_profil`) VALUES
(1, 'rafli', 'rafli', 'a', 3, 'a', 'a', 'default.jpg'),
(2, 'asd', 'asd', 'asd', 1, 'asd@asd.com', '11', '648b4a7f6c742.jpg'),
(3, '123', '123', '123', 2, '123', '123123', 'default.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indexes for table `barang_keluar`
--
ALTER TABLE `barang_keluar`
  ADD PRIMARY KEY (`id_bkeluar`);

--
-- Indexes for table `barang_masuk`
--
ALTER TABLE `barang_masuk`
  ADD PRIMARY KEY (`id_bmasuk`);

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`id_pelanggan`);

--
-- Indexes for table `pemasok`
--
ALTER TABLE `pemasok`
  ADD PRIMARY KEY (`id_pemasok`);

--
-- Indexes for table `permintaan_barang`
--
ALTER TABLE `permintaan_barang`
  ADD PRIMARY KEY (`id_permintaan`);

--
-- Indexes for table `persediaan`
--
ALTER TABLE `persediaan`
  ADD PRIMARY KEY (`id_persediaan`),
  ADD KEY `id_barang` (`id_barang`);

--
-- Indexes for table `tr_keluar`
--
ALTER TABLE `tr_keluar`
  ADD PRIMARY KEY (`id_trkeluar`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_bkeluar` (`id_bkeluar`),
  ADD KEY `id_barang` (`id_barang`),
  ADD KEY `id_pelanggan` (`id_pelanggan`);

--
-- Indexes for table `tr_masuk`
--
ALTER TABLE `tr_masuk`
  ADD PRIMARY KEY (`id_trmasuk`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_bmasuk` (`id_bmasuk`),
  ADD KEY `id_barang` (`id_barang`),
  ADD KEY `id_pemasok` (`id_pemasok`);

--
-- Indexes for table `tr_permintaan`
--
ALTER TABLE `tr_permintaan`
  ADD PRIMARY KEY (`id_trpermintaan`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_permintaan` (`id_permintaan`),
  ADD KEY `id_barang` (`id_barang`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `barang_keluar`
--
ALTER TABLE `barang_keluar`
  MODIFY `id_bkeluar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `barang_masuk`
--
ALTER TABLE `barang_masuk`
  MODIFY `id_bmasuk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `id_pelanggan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2147483648;

--
-- AUTO_INCREMENT for table `pemasok`
--
ALTER TABLE `pemasok`
  MODIFY `id_pemasok` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6481899;

--
-- AUTO_INCREMENT for table `permintaan_barang`
--
ALTER TABLE `permintaan_barang`
  MODIFY `id_permintaan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `persediaan`
--
ALTER TABLE `persediaan`
  MODIFY `id_persediaan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tr_keluar`
--
ALTER TABLE `tr_keluar`
  MODIFY `id_trkeluar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tr_masuk`
--
ALTER TABLE `tr_masuk`
  MODIFY `id_trmasuk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tr_permintaan`
--
ALTER TABLE `tr_permintaan`
  MODIFY `id_trpermintaan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
