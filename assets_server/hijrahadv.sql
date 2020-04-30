-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 30, 2020 at 06:07 PM
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
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id_about` int(1) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `isi` text NOT NULL,
  `gambar` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
(15, 'asas', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus <em>PageMaker</em> including versions of Lorem Ipsum.</p>\r\n\r\n<ul>\r\n	<li>hfhjvh</li>\r\n	<li>kvv</li>\r\n</ul>\r\n\r\n<ol>\r\n	<li>kjbk</li>\r\n	<li>bnbkn</li>\r\n</ol>\r\n\r\n<p>hvh</p>\r\n\r\n<p><img alt=\"\" src=\"https://ckeditor.com/docs/assets/1.2.3/img/book.svg\" style=\"height:150px; width:150px\" /></p>\r\n', 'SteinsGate_full_1097371.jpg', '03 April 2020', '12 April 2020'),
(22, 'ttttttttttttt', '<p>ddddddddddddddddd</p>\r\n', 'SteinsGate_full_1097371.jpg', '07 April 2020', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `capacity`
--

CREATE TABLE `capacity` (
  `id_cap` int(2) NOT NULL,
  `cap` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `capacity`
--

INSERT INTO `capacity` (`id_cap`, `cap`) VALUES
(1, 1),
(2, 2),
(3, 4),
(4, 6),
(5, 8);

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
-- Table structure for table `jenis`
--

CREATE TABLE `jenis` (
  `id_jenis` int(2) NOT NULL,
  `kd_jenis` char(5) NOT NULL,
  `desc_` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jenis`
--

INSERT INTO `jenis` (`id_jenis`, `kd_jenis`, `desc_`) VALUES
(1, 'td', 'Tenda'),
(2, 'cr', 'Carrier'),
(3, 'sb', 'Sleeping Bag'),
(4, 'mt', 'Matras'),
(5, 'kmp', 'Kompor Portabel'),
(6, 'gm', 'Tabung Gas Mini'),
(7, 'nest', 'Nesting Cook Set'),
(8, 'hl', 'Head Lamp');

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
-- Table structure for table `tools`
--

CREATE TABLE `tools` (
  `id_tool` int(5) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `merk` varchar(20) NOT NULL,
  `gambar` varchar(50) NOT NULL,
  `layer` varchar(10) DEFAULT NULL,
  `color` varchar(20) DEFAULT NULL,
  `flysheet` varchar(50) DEFAULT NULL,
  `inner_` varchar(50) DEFAULT NULL,
  `floor` varchar(50) DEFAULT NULL,
  `poles` varchar(50) DEFAULT NULL,
  `size` varchar(50) DEFAULT NULL,
  `weight` float DEFAULT NULL,
  `stock_` int(2) NOT NULL,
  `biaya` int(7) NOT NULL,
  `id_jenis` int(2) NOT NULL,
  `id_cap` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tools`
--

INSERT INTO `tools` (`id_tool`, `nama`, `merk`, `gambar`, `layer`, `color`, `flysheet`, `inner_`, `floor`, `poles`, `size`, `weight`, `stock_`, `biaya`, `id_jenis`, `id_cap`) VALUES
(1, 'Hando', 'matras', 'gas.jpg', 'd', 'd', 'f', 'f', 'f', 'ff', 'f', 4, 5, 2000, 4, 2),
(2, 'upload', 'njkb', 'tenda.jpg', 'd', 'd', 'f', 'f', 'f', 'ff', 'f', 4, 5, 98, 1, 1),
(3, 'matras', 'njkb', 'tenda.jpg', 'd', 'd', 'f', 'f', 'f', 'ff', 'f', 4, 5, 2000, 1, 2),
(4, 'matras', 'matras', 'tenda.jpg', 'd', 'd', 'f', 'f', 'f', 'ff', 'f', 4, 5, 2000, 1, 3),
(5, 'matras', 'kjoib', 'thumb-1920-224763.jpg', 'd', 'd', 'f', 'f', 'f', 'ff', 'f', 4, 5, 98, 1, 4),
(6, 'coba', 'coba', 'thumb-1920-224763.jpg', 'coba', 'coba', 'coba', 'coba', 'coba', 'coba', 'coba', 1, 5, 200, 1, 5),
(7, 'coba', 'coba', 'thumb-1920-224763.jpg', 'coba', 'coba', 'coba', 'coba', 'coba', 'coba', 'coba', 1, 5, 200, 1, 3),
(8, 'coba2', 'coba', 'SteinsGate_full_1097371.jpg', 'coba', 'coba', 'coba', 'coba', 'coba', 'coba', 'coba', 1, 5, 200, 1, 4),
(9, 'coba', 'coba', 'carrier.jpg', 'coba', 'coba', 'coba', 'coba', 'coba', 'coba', 'coba', 1, 5, 200, 1, 2),
(10, 'coba', 'coba', 'Steinsgate0logofinal.jpg', 'coba', 'coba', 'coba', 'coba', 'coba', 'coba', 'coba', 1, 5, 200, 1, 4),
(11, 'coba', 'coba', 'SteinsGate_full_1097371.jpg', 'coba', 'coba', 'coba', 'coba', 'coba', 'coba', 'coba', 1, 5, 300, 1, 5),
(12, 'coba', 'coba', 'thumb-1920-224763.jpg', 'coba', 'coba', 'coba', 'coba', 'coba', 'coba', 'coba', 1, 9, 300, 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id_about`);

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
-- Indexes for table `capacity`
--
ALTER TABLE `capacity`
  ADD PRIMARY KEY (`id_cap`);

--
-- Indexes for table `gambar`
--
ALTER TABLE `gambar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jenis`
--
ALTER TABLE `jenis`
  ADD PRIMARY KEY (`id_jenis`);

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`no_daftar`);

--
-- Indexes for table `tools`
--
ALTER TABLE `tools`
  ADD PRIMARY KEY (`id_tool`);

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
-- AUTO_INCREMENT for table `gambar`
--
ALTER TABLE `gambar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `no_daftar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `tools`
--
ALTER TABLE `tools`
  MODIFY `id_tool` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
