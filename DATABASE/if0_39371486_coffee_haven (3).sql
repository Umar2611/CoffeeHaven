-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: sql103.infinityfree.com
-- Generation Time: Jul 11, 2025 at 11:58 PM
-- Server version: 11.4.7-MariaDB
-- PHP Version: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `if0_39371486_coffee_haven`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', '$2y$10$AIy0X1Ep6alaHDTofiChGeqq7k/d1Kc8vKQf1JZo0mKrzkkj6M626');

-- --------------------------------------------------------

--
-- Table structure for table `bom_produk`
--

CREATE TABLE `bom_produk` (
  `kode_bom` varchar(100) NOT NULL,
  `kode_bk` varchar(100) NOT NULL,
  `kode_produk` varchar(100) NOT NULL,
  `nama_produk` varchar(200) NOT NULL,
  `kebutuhan` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bom_produk`
--

INSERT INTO `bom_produk` (`kode_bom`, `kode_bk`, `kode_produk`, `nama_produk`, `kebutuhan`) VALUES
('B0001', 'M0002', 'P0001', 'Arabica', '2'),
('B0001', 'M0001', 'P0001', 'Expressoo', '4'),
('B0001', 'M0004', 'P0001', 'Latte', '3'),
('B0002', 'M0001', 'P0002', 'Latte', '4'),
('B0002', 'M0004', 'P0002', 'Expressoo', '3'),
('B0002', 'M0003', 'P0002', 'Arabica', '2'),
('B0003', 'M0002', 'P0003', 'Machiato', '2'),
('B0003', 'M0003', 'P0003', 'Americano', '5'),
('B0003', 'M0005', 'P0003', 'Machiato', '5');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `kode_customer` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `telp` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`kode_customer`, `nama`, `email`, `username`, `password`, `telp`) VALUES
('C0002', 'Rafi Akbar', 'a.rafy@gmail.com', 'rafi', '$2y$10$/UjGYbisTPJhr8MgmT37qOXo1o/HJn3dhafPoSYbOlSN1E7olHIb.', '0856748564'),
('C0003', 'Nagita Silvana', 'bambang@gmail.com', 'Nagita', '$2y$10$47./qEeA/y3rNx3UkoKmkuxoAtmz4ebHSR0t0Bc.cFEEg7cK34M3C', '087804616097'),
('C0004', 'Nadiya', 'nadiya@gmail.com', 'nadiya', '$2y$10$6wHH.7rF1q3JtzKgAhNFy.4URchgJC8R.POT1osTAWmasDXTTO7ZG', '0898765432'),
('C0005', 'Muhammad Raihan', 'raihan302002@gmail.com', 'Eannn', '$2y$10$vEHdDWurGj6iaFUI6d/S9e7SGrKCwYJdYZ5bLQw4F/nqStx/dZl5y', '085813515939'),
('C0006', 'umar', 'umar@gmail.com', 'umar2611', '$2y$10$WPqP5TA6TMRdnHYKswWViuhbOOkxaQtStFDjNUvvhhqgwsy1KG6fe', '+62812345678910'),
('C0007', 'ucup', 'ucup@gmail.com', 'ucup', '$2y$10$zz.5xotco7urWLgn.ZW.aehir4/boWSOsuedquuC8OldodGwPTh.K', '081285638768'),
('C0008', 'Budi', 'BUdi@gmail.com', 'budi123', '$2y$10$47bcVkLJ3DMMuRcDQmvZ6uTQJxwi9XdnURgJF6vSkdrJaOzlPtO9q', '0812345678'),
('C0009', 'Muhammad Raihan', 'raihan302002@gmail.com', 'ean', '$2y$10$RbP.fuij43okjHdRMvmTeeOAAn/SN/u/vcLVHeYBifR4T8vD0h9i.', '081234567890');

-- --------------------------------------------------------

--
-- Table structure for table `inventory`
--

CREATE TABLE `inventory` (
  `kode_bk` varchar(100) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `qty` varchar(200) NOT NULL,
  `satuan` varchar(200) NOT NULL,
  `harga` int(11) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `inventory`
--

INSERT INTO `inventory` (`kode_bk`, `nama`, `qty`, `satuan`, `harga`, `tanggal`) VALUES
('M0001', 'Biji Kopi Arabika', '50', 'Kg', 85000, '2025-07-11'),
('M0002', 'Biji Kopi Robusta', '40', 'Kg', 70000, '2025-07-11'),
('M0003', 'Gula Pasir', '100', 'Kg', 12000, '2025-07-11'),
('M0004', 'Susu Kental Manis', '30', 'Kg', 25000, '2025-07-11'),
('M0005', 'Susu Cair Full Cream', '60', 'Liter', 18000, '2025-07-11');

-- --------------------------------------------------------

--
-- Table structure for table `keranjang`
--

CREATE TABLE `keranjang` (
  `id_keranjang` int(11) NOT NULL,
  `kode_customer` varchar(100) NOT NULL,
  `kode_produk` varchar(100) NOT NULL,
  `nama_produk` varchar(100) NOT NULL,
  `qty` int(11) NOT NULL,
  `harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `keranjang`
--

INSERT INTO `keranjang` (`id_keranjang`, `kode_customer`, `kode_produk`, `nama_produk`, `qty`, `harga`) VALUES
(16, 'C0003', 'P0002', 'Maryam', 5, 15000),
(17, 'C0003', 'P0003', 'Kue tart coklat', 2, 100000),
(22, '', '', '', 0, 0),
(39, 'C0008', 'P0001', 'Americano', 1, 25000);

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `kode_produk` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `image` text NOT NULL,
  `deskripsi` text NOT NULL,
  `harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`kode_produk`, `nama`, `image`, `deskripsi`, `harga`) VALUES
('P0001', 'Americano', 'Americano_Coffe.jpg', '								Kopi hitam dengan rasa ringan, dibuat dari espresso yang ditambahkan air panas\r\n													\r\n																											', 25000),
('P0002', 'Expressoo', 'Expresso_Coffe.jpg', 'Kopi hitam pekat tanpa campuran, disajikan dalam takaran kecil tapi penuh rasa.\r\n', 20000),
('P0003', 'Latte', 'Latte_Coffe.jpg', 'Perpaduan espresso dan susu panas dengan busa tipis di atasnya — lembut dan creamy.\r\n', 30000),
('P0004', 'Arabica', 'Arabica_Coffe.jpg', 'Single origin Arabica dengan metode seduh manual (V60 / French Press), cita rasa halus dan berkarakter.\r\n', 30000),
('P0005', 'Machiato', 'Macchiato_Coffe.jpg', 'minuman espresso yang \"ditandai\" atau \"dihiasi\" dengan sedikit susu berbusa atau susu kuku.', 28000);

-- --------------------------------------------------------

--
-- Table structure for table `produksi`
--

CREATE TABLE `produksi` (
  `id_order` int(11) NOT NULL,
  `invoice` varchar(200) NOT NULL,
  `kode_customer` varchar(200) NOT NULL,
  `kode_produk` varchar(200) NOT NULL,
  `nama_produk` varchar(200) NOT NULL,
  `qty` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `status` varchar(200) NOT NULL,
  `tanggal` date NOT NULL,
  `provinsi` varchar(200) NOT NULL,
  `kota` varchar(200) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `kode_pos` varchar(200) NOT NULL,
  `terima` varchar(200) NOT NULL,
  `tolak` varchar(200) NOT NULL,
  `cek` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `produksi`
--

INSERT INTO `produksi` (`id_order`, `invoice`, `kode_customer`, `kode_produk`, `nama_produk`, `qty`, `harga`, `status`, `tanggal`, `provinsi`, `kota`, `alamat`, `kode_pos`, `terima`, `tolak`, `cek`) VALUES
(20, 'INV0008', 'C0005', 'P0005', 'Machiato', 1, 8000, 'Pesanan Baru', '2525-07-01', 'Jakarta Timur', 'Jakarta Timur', 'jl. almaghfiroh rt 06 rw 04', '13530', '2', '1', 0),
(21, 'INV0009', 'C0005', 'P0005', 'Machiato', 1, 28000, 'Pesanan Baru', '2525-07-01', 'Jakarta Timur', 'Jakarta Timur', 'jl. almaghfiroh rt 06 rw 04', '13530', '0', '0', 0),
(22, 'INV0010', 'C0007', 'P0001', 'Americano', 1, 25000, 'Pesanan Baru', '2025-07-02', 'Jawa Barat', 'Depok', 'Kp.Karet', '16869', '2', '1', 1),
(23, 'INV0010', 'C0007', 'P0002', 'Expressoo', 1, 20000, 'Pesanan Baru', '2025-07-02', 'Jawa Barat', 'Depok', 'Kp.Karet', '16869', '2', '1', 1),
(24, 'INV0011', 'C0006', 'P0001', 'Americano', 1, 25000, '0', '2025-07-04', 'Kota Bekasi', 'Kota Bekasi', 'Jalan Haji Karsiman RT 07 RW 04 no 22 Bintara Bekasi Barat', '17134', '1', '0', 1),
(25, 'INV0011', 'C0006', 'P0003', 'Latte', 1, 30000, '0', '2025-07-04', 'Kota Bekasi', 'Kota Bekasi', 'Jalan Haji Karsiman RT 07 RW 04 no 22 Bintara Bekasi Barat', '17134', '1', '0', 1),
(26, 'INV0012', 'C0007', 'P0001', 'Americano', 1, 25000, 'Pesanan Baru', '2025-07-07', '', '', '', '', '0', '0', 1),
(27, 'INV0013', 'C0009', 'P0002', 'Expressoo', 1, 20000, 'Pesanan Baru', '2025-07-10', 'Jakarta Timur', 'Jakarta Timur', 'jl. almaghfiroh rt 06 rw 04', '13530', '0', '0', 1),
(28, 'INV0014', 'C0009', 'P0005', 'Machiato', 1, 28000, 'Pesanan Baru', '2025-07-10', 'Dki Jakarta', 'jakarta timur', 'jl condet', '13530', '0', '0', 0);

-- --------------------------------------------------------

--
-- Table structure for table `report_cancel`
--

CREATE TABLE `report_cancel` (
  `id_report_cancel` int(11) NOT NULL,
  `id_order` varchar(100) NOT NULL,
  `kode_produk` varchar(100) NOT NULL,
  `jumlah` varchar(100) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `report_cancel`
--

INSERT INTO `report_cancel` (`id_report_cancel`, `id_order`, `kode_produk`, `jumlah`, `tanggal`) VALUES
(1, '28', 'P0005', '1', '2025-07-11');

-- --------------------------------------------------------

--
-- Table structure for table `report_inventory`
--

CREATE TABLE `report_inventory` (
  `id_report_inv` int(11) NOT NULL,
  `kode_bk` varchar(100) NOT NULL,
  `nama_bahanbaku` varchar(100) NOT NULL,
  `jml_stok_bk` int(11) NOT NULL,
  `tanggal` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `report_inventory`
--

INSERT INTO `report_inventory` (`id_report_inv`, `kode_bk`, `nama_bahanbaku`, `jml_stok_bk`, `tanggal`) VALUES
(1, 'M0001', 'Biji Kopi Arabika', 50, '2025-07-11'),
(2, 'M0002', 'Biji Kopi Robusta', 40, '2025-07-11'),
(3, 'M0003', 'Gula Pasir', 100, '2025-07-11'),
(4, 'M0004', 'Susu Kental Manis', 30, '2025-07-11'),
(5, 'M0005', 'Susu Cair Full Cream', 60, '2025-07-11');

-- --------------------------------------------------------

--
-- Table structure for table `report_omset`
--

CREATE TABLE `report_omset` (
  `id_report_omset` int(11) NOT NULL,
  `invoice` varchar(100) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `total_omset` int(11) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `report_omset`
--

INSERT INTO `report_omset` (`id_report_omset`, `invoice`, `jumlah`, `total_omset`, `tanggal`) VALUES
(1, 'INV0010', 2, 45000, '2025-07-02'),
(2, 'INV0011', 2, 55000, '2025-07-04'),
(3, 'INV0012', 1, 25000, '2025-07-07'),
(4, 'INV0013', 1, 20000, '2025-07-10'),
(5, 'INV0014', 1, 28000, '2025-07-10');

-- --------------------------------------------------------

--
-- Table structure for table `report _penjualan`
--

CREATE TABLE `report _penjualan` (
  `id_report_sell` int(11) NOT NULL,
  `invoice` varchar(100) NOT NULL,
  `kode_produk` varchar(100) NOT NULL,
  `nama_produk` varchar(100) NOT NULL,
  `jumlah_terjual` int(11) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `report _penjualan`
--

INSERT INTO `report _penjualan` (`id_report_sell`, `invoice`, `kode_produk`, `nama_produk`, `jumlah_terjual`, `tanggal`) VALUES
(1, 'INV0010', 'P0001', 'Americano', 1, '2025-07-02'),
(2, 'INV0010', 'P0002', 'Expressoo', 1, '2025-07-02'),
(3, 'INV0011', 'P0001', 'Americano', 1, '2025-07-04'),
(4, 'INV0011', 'P0003', 'Latte', 1, '2025-07-04'),
(5, 'INV0013', 'P0002', 'Expressoo', 1, '2025-07-10');

-- --------------------------------------------------------

--
-- Table structure for table `report_produksi`
--

CREATE TABLE `report_produksi` (
  `id_report_prd` int(11) NOT NULL,
  `invoice` varchar(100) NOT NULL,
  `kode_produk` varchar(100) NOT NULL,
  `nama_produk` varchar(100) NOT NULL,
  `qty` int(11) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `report_produksi`
--

INSERT INTO `report_produksi` (`id_report_prd`, `invoice`, `kode_produk`, `nama_produk`, `qty`, `tanggal`) VALUES
(1, 'INV0010', 'P0001', 'Americano', 1, '2025-07-02'),
(2, 'INV0010', 'P0002', 'Expressoo', 1, '2025-07-02'),
(3, 'INV0011', 'P0001', 'Americano', 1, '2025-07-04'),
(4, 'INV0011', 'P0003', 'Latte', 1, '2025-07-04'),
(5, 'INV0013', 'P0002', 'Expressoo', 1, '2025-07-10');

-- --------------------------------------------------------

--
-- Table structure for table `report_profit`
--

CREATE TABLE `report_profit` (
  `id_report_profit` int(11) NOT NULL,
  `kode_bom` varchar(100) NOT NULL,
  `invoice` varchar(100) NOT NULL,
  `kode_produk` varchar(100) NOT NULL,
  `jumlah` varchar(11) NOT NULL,
  `total_profit` varchar(11) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `report_profit`
--

INSERT INTO `report_profit` (`id_report_profit`, `kode_bom`, `invoice`, `kode_produk`, `jumlah`, `total_profit`, `tanggal`) VALUES
(1, 'B0001', 'INV0010', 'P0001', '1', '18000', '2025-07-02'),
(2, 'B0002', 'INV0010', 'P0002', '1', '14000', '2025-07-02'),
(3, 'B0003', 'INV0011', 'P0003', '1', '21000', '2025-07-04');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`kode_customer`);

--
-- Indexes for table `inventory`
--
ALTER TABLE `inventory`
  ADD PRIMARY KEY (`kode_bk`);

--
-- Indexes for table `keranjang`
--
ALTER TABLE `keranjang`
  ADD PRIMARY KEY (`id_keranjang`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`kode_produk`);

--
-- Indexes for table `produksi`
--
ALTER TABLE `produksi`
  ADD PRIMARY KEY (`id_order`);

--
-- Indexes for table `report_cancel`
--
ALTER TABLE `report_cancel`
  ADD PRIMARY KEY (`id_report_cancel`);

--
-- Indexes for table `report_inventory`
--
ALTER TABLE `report_inventory`
  ADD PRIMARY KEY (`id_report_inv`);

--
-- Indexes for table `report_omset`
--
ALTER TABLE `report_omset`
  ADD PRIMARY KEY (`id_report_omset`);

--
-- Indexes for table `report _penjualan`
--
ALTER TABLE `report _penjualan`
  ADD PRIMARY KEY (`id_report_sell`);

--
-- Indexes for table `report_produksi`
--
ALTER TABLE `report_produksi`
  ADD PRIMARY KEY (`id_report_prd`);

--
-- Indexes for table `report_profit`
--
ALTER TABLE `report_profit`
  ADD PRIMARY KEY (`id_report_profit`),
  ADD UNIQUE KEY `kode_bom` (`kode_bom`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `keranjang`
--
ALTER TABLE `keranjang`
  MODIFY `id_keranjang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `produksi`
--
ALTER TABLE `produksi`
  MODIFY `id_order` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `report_cancel`
--
ALTER TABLE `report_cancel`
  MODIFY `id_report_cancel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `report_inventory`
--
ALTER TABLE `report_inventory`
  MODIFY `id_report_inv` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `report_omset`
--
ALTER TABLE `report_omset`
  MODIFY `id_report_omset` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `report _penjualan`
--
ALTER TABLE `report _penjualan`
  MODIFY `id_report_sell` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `report_produksi`
--
ALTER TABLE `report_produksi`
  MODIFY `id_report_prd` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `report_profit`
--
ALTER TABLE `report_profit`
  MODIFY `id_report_profit` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
