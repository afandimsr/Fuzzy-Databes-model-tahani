-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 12, 2020 at 05:46 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fuzzy_tahani`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_karyawan`
--

CREATE TABLE `data_karyawan` (
  `id` int(11) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `tanggalLahir` date NOT NULL,
  `umur` int(11) NOT NULL,
  `tahunMasuk` varchar(200) NOT NULL,
  `masaKerja` int(11) NOT NULL,
  `gaji` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_karyawan`
--

INSERT INTO `data_karyawan` (`id`, `nama`, `tanggalLahir`, `umur`, `tahunMasuk`, `masaKerja`, `gaji`) VALUES
(1, 'dfa', '2000-06-17', 20, '2012', 8, 2000000);

-- --------------------------------------------------------

--
-- Table structure for table `fuzzy_gaji`
--

CREATE TABLE `fuzzy_gaji` (
  `id` int(11) NOT NULL,
  `id_karyawan` int(11) NOT NULL,
  `rendah` float NOT NULL,
  `sedang` float NOT NULL,
  `tinggi` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fuzzy_gaji`
--

INSERT INTO `fuzzy_gaji` (`id`, `id_karyawan`, `rendah`, `sedang`, `tinggi`) VALUES
(1, 1, 0, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `fuzzy_masa_kerja`
--

CREATE TABLE `fuzzy_masa_kerja` (
  `id` int(11) NOT NULL,
  `id_karyawan` int(11) NOT NULL,
  `baru` float NOT NULL,
  `lama` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fuzzy_masa_kerja`
--

INSERT INTO `fuzzy_masa_kerja` (`id`, `id_karyawan`, `baru`, `lama`) VALUES
(1, 1, 0.7, 0);

-- --------------------------------------------------------

--
-- Table structure for table `fuzzy_umur`
--

CREATE TABLE `fuzzy_umur` (
  `id` int(11) NOT NULL,
  `id_karyawan` int(11) NOT NULL,
  `muda` float NOT NULL,
  `parobaya` float NOT NULL,
  `tua` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fuzzy_umur`
--

INSERT INTO `fuzzy_umur` (`id`, `id_karyawan`, `muda`, `parobaya`, `tua`) VALUES
(1, 1, 1, 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_karyawan`
--
ALTER TABLE `data_karyawan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fuzzy_gaji`
--
ALTER TABLE `fuzzy_gaji`
  ADD PRIMARY KEY (`id`),
  ADD KEY `karyawan` (`id_karyawan`);

--
-- Indexes for table `fuzzy_masa_kerja`
--
ALTER TABLE `fuzzy_masa_kerja`
  ADD PRIMARY KEY (`id`),
  ADD KEY `karyawan_masa_kerja` (`id_karyawan`);

--
-- Indexes for table `fuzzy_umur`
--
ALTER TABLE `fuzzy_umur`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_karyawan` (`id_karyawan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_karyawan`
--
ALTER TABLE `data_karyawan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `fuzzy_gaji`
--
ALTER TABLE `fuzzy_gaji`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `fuzzy_masa_kerja`
--
ALTER TABLE `fuzzy_masa_kerja`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `fuzzy_umur`
--
ALTER TABLE `fuzzy_umur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `fuzzy_gaji`
--
ALTER TABLE `fuzzy_gaji`
  ADD CONSTRAINT `karyawan` FOREIGN KEY (`id_karyawan`) REFERENCES `data_karyawan` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `fuzzy_masa_kerja`
--
ALTER TABLE `fuzzy_masa_kerja`
  ADD CONSTRAINT `karyawan_masa_kerja` FOREIGN KEY (`id_karyawan`) REFERENCES `data_karyawan` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `fuzzy_umur`
--
ALTER TABLE `fuzzy_umur`
  ADD CONSTRAINT `fuzzy_umur_ibfk_1` FOREIGN KEY (`id_karyawan`) REFERENCES `data_karyawan` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
