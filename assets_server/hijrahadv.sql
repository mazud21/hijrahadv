-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 27, 2020 at 05:34 AM
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
  `username` varchar(20) NOT NULL,
  `password` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `nama`, `username`, `password`) VALUES
(1, 'masud', 'mhr21', 'mhr21');

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
(1, 'Nulla Facilisi Integer Lacinia Sollicitudin Massa', 'Nulla facilisi. Integer lacinia sollicitudin massa. Cras metus. Sed aliquet risus a tortor. Integer id quam. Morbi mi. Quisque nisl felis, venenatis tristique, dignissim in, ultrices sit amet, augue. Proin sodales libero eget ante. Nulla quam. Aenean laoreet. Vestibulum nisi lectus, commodo ac, facilisis ac, ultricies eu, pede. Ut orci risus, accumsan porttitor, cursus quis, aliquet eget, justo.', 'image.jpg', 'test tanggal', NULL),
(2, 'asas', 'asasa', 'image.jpg', '26 Maret 2020', NULL),
(3, 'dsf', 'sdfsdfs', NULL, '26 Maret 2020', NULL),
(4, 'dsf', 'sdfsdfs', NULL, '26 Maret 2020', NULL),
(5, 'asas', 'asasa', NULL, '26 Maret 2020', NULL),
(6, 'asas', 'asasa', NULL, '26 Maret 2020', NULL),
(7, 'erererer', 'asasa', NULL, '26 Maret 2020', NULL),
(8, 'dsf', 'sdfsdfs', NULL, '26 Maret 2020', NULL);

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
-- Table structure for table `matras`
--

CREATE TABLE `matras` (
  `id_matras` int(2) NOT NULL,
  `nama` varchar(15) NOT NULL,
  `merk` varchar(20) DEFAULT NULL,
  `gambar` varchar(25) NOT NULL,
  `biaya` int(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
-- Indexes for table `matras`
--
ALTER TABLE `matras`
  ADD PRIMARY KEY (`id_matras`);

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
  MODIFY `id_blog` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `carrier`
--
ALTER TABLE `carrier`
  MODIFY `id_carrier` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `matras`
--
ALTER TABLE `matras`
  MODIFY `id_matras` int(2) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tenda`
--
ALTER TABLE `tenda`
  MODIFY `id_tenda` int(5) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
