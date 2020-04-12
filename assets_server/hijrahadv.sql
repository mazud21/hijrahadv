-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 12, 2020 at 05:27 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.2.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hijrahadv`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(2) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `gambar` varchar(25) DEFAULT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `nama`, `gambar`, `username`, `password`) VALUES
(1, 'masud', '_DSC0237-Rec.jpg', 'mhr21', 'mhr21');

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id_blog` int(5) NOT NULL,
  `judul` varchar(75) NOT NULL,
  `isi` text NOT NULL,
  `gambar` varchar(50) DEFAULT NULL,
  `tanggal_create` varchar(25) NOT NULL,
  `tanggal_update` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id_blog`, `judul`, `isi`, `gambar`, `tanggal_create`, `tanggal_update`) VALUES
(15, 'asas', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus <em>PageMaker</em> including versions of Lorem Ipsum.</p>\r\n', 'SteinsGate_full_1097371.jpg', '03 April 2020', '07 April 2020'),
(22, 'ttttttttttttt', '<p>ddddddddddddddddd</p>\r\n', 'SteinsGate_full_1097371.jpg', '07 April 2020', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `carrier`
--

CREATE TABLE `carrier` (
  `id_carrier` int(5) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `merk` varchar(25) NOT NULL,
  `gambar` varchar(25) NOT NULL,
  `ukuran` int(2) NOT NULL,
  `bahan` varchar(25) NOT NULL,
  `rain_cover` varchar(5) NOT NULL,
  `biaya` int(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `daftar_journey`
--

CREATE TABLE `daftar_journey` (
  `id_daftar_j` int(5) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `no_hp` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `gambar`
--

CREATE TABLE `gambar` (
  `id` int(11) NOT NULL,
  `deskripsi` varchar(100) NOT NULL,
  `nama_file` varchar(100) NOT NULL,
  `ukuran_file` double NOT NULL,
  `tipe_file` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gambar`
--

INSERT INTO `gambar` (`id`, `deskripsi`, `nama_file`, `ukuran_file`, `tipe_file`) VALUES
(1, 'test', 'thumb-1920-224763.jpg', 445.35, 'image/jpeg'),
(2, 'f', 'SteinsGate_full_1097371.jpg', 815.67, 'image/jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `journey`
--

CREATE TABLE `journey` (
  `id_journey` int(2) NOT NULL,
  `judul` varchar(30) NOT NULL,
  `deskripsi` text NOT NULL,
  `gambar` varchar(30) NOT NULL,
  `biaya_org` int(6) NOT NULL,
  `total_biaya` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `matras`
--

CREATE TABLE `matras` (
  `id_matras` int(2) NOT NULL,
  `nama` varchar(15) NOT NULL,
  `merk` varchar(20) DEFAULT NULL,
  `gambar` varchar(25) NOT NULL,
  `biaya` int(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `matras`
--

INSERT INTO `matras` (`id_matras`, `nama`, `merk`, `gambar`, `biaya`) VALUES
(2, 'matr', 'casa', 'image.png', 1290);

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `no_daftar` int(11) NOT NULL,
  `no_ktp` bigint(16) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `alamat` text NOT NULL,
  `email` varchar(25) NOT NULL,
  `no_hp` varchar(12) NOT NULL,
  `foto_ktp` varchar(100) NOT NULL,
  `pilih_tarif` char(4) NOT NULL,
  `no_pelanggan` int(6) DEFAULT NULL,
  `password` varchar(25) DEFAULT NULL,
  `regId` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`no_daftar`, `no_ktp`, `nama`, `alamat`, `email`, `no_hp`, `foto_ktp`, `pilih_tarif`, `no_pelanggan`, `password`, `regId`) VALUES
(26, 1234567890123457, 'new image', 'images', 'images@gmail.com', '12345678901', 'stock-vector-set-of-arabic-numbers-vector-645284404.jpg', 'A1_9', 12, '23541708', ''),
(27, 1234567890123457, 'new image', 'images', 'images@gmail.com', '12345678901', 'WhatsApp_Image_2018-09-05_at_10_33_19_AM.jpeg', 'A1_9', 14, '82697413', ''),
(28, 9876543212345678, 'fix try', 'kljhgfcmhvj,bk.', 'kbjhgchj@gmail.com', '98765432123', '', 'A2_1', 20, '49627580', ''),
(29, 9876543212345678, 'fix try2', 'kljhgfcmhvj,bk.', 'kbjhgchj@gmail.com', '98765432123', 'IMG_20181010_113609.jpg', 'A2_1', 15, '89560321', ''),
(30, 9876543212345678, 'Masud Al Hafiz', 'Karangtengah', 'hmazud@gmail.com', '08882766731', '_DSC0237-Rec.jpg', 'A2_1', 16, '53964870', ''),
(31, 1234567890123456, 'MAsud', 'imogiri', 'linux96mint@gmail.com', '98274657365', 'Screenshot_4.png', '9827', NULL, '', ''),
(32, 1234567890123456, 'MAsud', 'imogiri', 'linux96mint@gmail.com', '98274657365', 'Screenshot_4.png', '9827', 24, '48753016', ''),
(33, 1234567890123456, 'MAsud', 'imogiri', 'linux96mint@gmail.com', '98274657365', 'Screenshot_4.png', '9827', 23, '90621437', ''),
(34, 1234567890123456, 'MAsud', 'imogiri', 'linux96mint@gmail.com', '98274657365', 'Screenshot_2019-09-19-21-37-47-562_com_mobile_legends.png', '9827', 22, '85236791', ''),
(35, 1234567890123456, 'Hando', 'sdfghjg', 'linux96mint@gmail.com', '12345678901', '_DSC0237-Rec.jpg', 'A1', 21, '57840193', ''),
(36, 23, 'Mas\'ud Al Hafiz', 'dsfdf', 'hmazud@gmail.com', '08882766731', 'Screenshot_1575164551.png', 'A1', NULL, NULL, ''),
(37, 23, 'Mas\'ud Al Hafiz', 'dsfdf', 'hmazud@gmail.com', '08882766731', '_DSC0237-Rec.jpg', 'A1', NULL, NULL, '');

-- --------------------------------------------------------

--
-- Table structure for table `tenda`
--

CREATE TABLE `tenda` (
  `id_tenda` int(5) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `merk` varchar(20) NOT NULL,
  `gambar` varchar(25) NOT NULL,
  `capacity` tinyint(2) NOT NULL,
  `layer` varchar(10) NOT NULL,
  `color` varchar(20) NOT NULL,
  `flysheet` varchar(50) NOT NULL,
  `inner_` varchar(50) NOT NULL,
  `floor` varchar(50) NOT NULL,
  `poles` varchar(50) NOT NULL,
  `size` varchar(50) NOT NULL,
  `weight` float DEFAULT NULL,
  `biaya` int(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tenda`
--

INSERT INTO `tenda` (`id_tenda`, `nama`, `merk`, `gambar`, `capacity`, `layer`, `color`, `flysheet`, `inner_`, `floor`, `poles`, `size`, `weight`, `biaya`) VALUES
(1, 'Hando', 'matras', 'gas.jpg', 3, 'd', 'd', 'f', 'f', 'f', 'ff', 'f', 4, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id_blog`);

--
-- Indexes for table `carrier`
--
ALTER TABLE `carrier`
  ADD PRIMARY KEY (`id_carrier`);

--
-- Indexes for table `gambar`
--
ALTER TABLE `gambar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `matras`
--
ALTER TABLE `matras`
  ADD PRIMARY KEY (`id_matras`);

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`no_daftar`);

--
-- Indexes for table `tenda`
--
ALTER TABLE `tenda`
  ADD PRIMARY KEY (`id_tenda`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id_blog` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `carrier`
--
ALTER TABLE `carrier`
  MODIFY `id_carrier` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gambar`
--
ALTER TABLE `gambar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `matras`
--
ALTER TABLE `matras`
  MODIFY `id_matras` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `no_daftar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `tenda`
--
ALTER TABLE `tenda`
  MODIFY `id_tenda` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
