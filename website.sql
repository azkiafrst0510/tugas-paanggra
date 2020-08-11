-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 11, 2020 at 10:51 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `website`
--

-- --------------------------------------------------------

--
-- Table structure for table `custom1`
--

CREATE TABLE `custom1` (
  `id` int(11) NOT NULL,
  `status` int(1) NOT NULL,
  `teksh5` varchar(250) NOT NULL,
  `teksp` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `custom1`
--

INSERT INTO `custom1` (`id`, `status`, `teksh5`, `teksp`) VALUES
(1, 1, 'siswa', 'ini kolom siswa');

-- --------------------------------------------------------

--
-- Table structure for table `custom2`
--

CREATE TABLE `custom2` (
  `id` int(11) NOT NULL,
  `status` varchar(1) NOT NULL,
  `angka` int(11) NOT NULL,
  `teks` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `custom2`
--

INSERT INTO `custom2` (`id`, `status`, `angka`, `teks`) VALUES
(1, '1', 10, 'azkia'),
(2, '1', 255, 'smkn 4 kota bogor');

-- --------------------------------------------------------

--
-- Table structure for table `custom3`
--

CREATE TABLE `custom3` (
  `id` int(11) NOT NULL,
  `status` varchar(1) NOT NULL,
  `angka` varchar(11) NOT NULL,
  `teks` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `custom3`
--

INSERT INTO `custom3` (`id`, `status`, `angka`, `teks`) VALUES
(1, '1', '11', 'listening');

-- --------------------------------------------------------

--
-- Table structure for table `custom4`
--

CREATE TABLE `custom4` (
  `id` int(11) NOT NULL,
  `status` varchar(1) NOT NULL,
  `angka` varchar(10) NOT NULL,
  `teks` varchar(275) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `custom4`
--

INSERT INTO `custom4` (`id`, `status`, `angka`, `teks`) VALUES
(1, '1', '10', 'gvdegfwgehvfcbewgiughewjdbv');

-- --------------------------------------------------------

--
-- Table structure for table `custom5`
--

CREATE TABLE `custom5` (
  `id` int(11) NOT NULL,
  `status` varchar(1) NOT NULL,
  `angka` varchar(11) NOT NULL,
  `teks` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `custom5`
--

INSERT INTO `custom5` (`id`, `status`, `angka`, `teks`) VALUES
(1, '1', '11', 'hreerahaerwtgwegvre');

-- --------------------------------------------------------

--
-- Table structure for table `custom6`
--

CREATE TABLE `custom6` (
  `id` int(11) NOT NULL,
  `nama` varchar(1) NOT NULL,
  `status` varchar(11) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `nmrtelpon` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `custom6`
--

INSERT INTO `custom6` (`id`, `nama`, `status`, `alamat`, `nmrtelpon`, `email`) VALUES
(1, '1', '1', 'ini untuk alamat', 'ini untuk nmrtelpon', 'ini untuk email');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `kd_menu` int(11) NOT NULL,
  `nama_menu` varchar(30) NOT NULL,
  `status_menu` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`kd_menu`, `nama_menu`, `status_menu`) VALUES
(1, 'Beranda', 1),
(2, 'Profil', 1);

-- --------------------------------------------------------

--
-- Table structure for table `menu_box`
--

CREATE TABLE `menu_box` (
  `status_box` int(1) NOT NULL,
  `id` int(11) NOT NULL,
  `nama_box` varchar(250) NOT NULL,
  `ket_box` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `menu_box`
--

INSERT INTO `menu_box` (`status_box`, `id`, `nama_box`, `ket_box`) VALUES
(1, 1, 'siswa', 'ini adalah kolom untuk siswa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `custom1`
--
ALTER TABLE `custom1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `custom2`
--
ALTER TABLE `custom2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `custom3`
--
ALTER TABLE `custom3`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `custom4`
--
ALTER TABLE `custom4`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `custom5`
--
ALTER TABLE `custom5`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `custom6`
--
ALTER TABLE `custom6`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`kd_menu`);

--
-- Indexes for table `menu_box`
--
ALTER TABLE `menu_box`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `custom1`
--
ALTER TABLE `custom1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `custom2`
--
ALTER TABLE `custom2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `custom3`
--
ALTER TABLE `custom3`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `custom4`
--
ALTER TABLE `custom4`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `custom5`
--
ALTER TABLE `custom5`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `custom6`
--
ALTER TABLE `custom6`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `kd_menu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `menu_box`
--
ALTER TABLE `menu_box`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
