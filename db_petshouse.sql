-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 20, 2023 at 03:54 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_petshouse`
--

-- --------------------------------------------------------

--
-- Table structure for table `makanan_anjing`
--

CREATE TABLE `makanan_anjing` (
  `id` int(11) NOT NULL,
  `merk_makanan` char(40) NOT NULL,
  `nama_makanan` varchar(40) NOT NULL,
  `jenis_makanan` char(40) NOT NULL,
  `harga` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `makanan_anjing`
--

INSERT INTO `makanan_anjing` (`id`, `merk_makanan`, `nama_makanan`, `jenis_makanan`, `harga`) VALUES
(1, 'Royal Canin', 'Puppy Food', 'Makanan Kering', '250000');

-- --------------------------------------------------------

--
-- Table structure for table `makanan_burung`
--

CREATE TABLE `makanan_burung` (
  `id` int(11) NOT NULL,
  `merk_makanan` char(40) NOT NULL,
  `nama_makanan` varchar(40) NOT NULL,
  `jenis_makanan` char(40) NOT NULL,
  `harga` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `makanan_burung`
--

INSERT INTO `makanan_burung` (`id`, `merk_makanan`, `nama_makanan`, `jenis_makanan`, `harga`) VALUES
(1, 'Potacraft', 'Package Huge Potacraft', 'makanan kering', '20000');

-- --------------------------------------------------------

--
-- Table structure for table `makanan_ikan`
--

CREATE TABLE `makanan_ikan` (
  `id` int(11) NOT NULL,
  `merk_makanan` char(40) NOT NULL,
  `nama_makanan` varchar(40) NOT NULL,
  `jenis_makanan` char(40) NOT NULL,
  `harga` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `makanan_ikan`
--

INSERT INTO `makanan_ikan` (`id`, `merk_makanan`, `nama_makanan`, `jenis_makanan`, `harga`) VALUES
(1, 'Koi Feed', 'Vitamin Plus', 'Makanan Basah', '15000');

-- --------------------------------------------------------

--
-- Table structure for table `makanan_kucing`
--

CREATE TABLE `makanan_kucing` (
  `id` int(11) NOT NULL,
  `merk_makanan` char(40) NOT NULL,
  `nama_makanan` varchar(40) NOT NULL,
  `jenis_makanan` char(40) NOT NULL,
  `harga` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `makanan_kucing`
--

INSERT INTO `makanan_kucing` (`id`, `merk_makanan`, `nama_makanan`, `jenis_makanan`, `harga`) VALUES
(9, 'Cahya Kitten', 'Kitten Food U2', 'Makanan Basah', '50000');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  `level` char(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `level`) VALUES
(1, 'admin', '123', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `makanan_anjing`
--
ALTER TABLE `makanan_anjing`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `makanan_burung`
--
ALTER TABLE `makanan_burung`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `makanan_ikan`
--
ALTER TABLE `makanan_ikan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `makanan_kucing`
--
ALTER TABLE `makanan_kucing`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `makanan_anjing`
--
ALTER TABLE `makanan_anjing`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `makanan_burung`
--
ALTER TABLE `makanan_burung`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `makanan_ikan`
--
ALTER TABLE `makanan_ikan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `makanan_kucing`
--
ALTER TABLE `makanan_kucing`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
