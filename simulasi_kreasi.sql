-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 04, 2019 at 07:59 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `simulasi_kreasi`
--

-- --------------------------------------------------------

--
-- Table structure for table `administrasi`
--

CREATE TABLE `administrasi` (
  `id_admin` int(11) NOT NULL,
  `bulan` int(11) NOT NULL,
  `biaya_admin` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `administrasi`
--

INSERT INTO `administrasi` (`id_admin`, `bulan`, `biaya_admin`) VALUES
(1, 3, 1.361),
(2, 4, 1.481),
(3, 6, 1.876),
(4, 12, 2.5),
(5, 18, 2.75),
(6, 24, 3.124),
(7, 30, 3.376),
(8, 36, 3.649),
(9, 42, 3.912),
(10, 48, 4.185),
(11, 54, 4.437),
(12, 60, 4.696);

-- --------------------------------------------------------

--
-- Table structure for table `fleksi_berjangka`
--

CREATE TABLE `fleksi_berjangka` (
  `id_berjangka` int(11) NOT NULL,
  `min_fb` int(11) NOT NULL,
  `max_fb` int(11) NOT NULL,
  `sm_fb` float NOT NULL,
  `pola_fb` int(11) NOT NULL,
  `id_admin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fleksi_berjangka`
--

INSERT INTO `fleksi_berjangka` (`id_berjangka`, `min_fb`, `max_fb`, `sm_fb`, `pola_fb`, `id_admin`) VALUES
(1, 1, 10000000, 4.4, 3, 4),
(2, 1, 10000000, 4.4, 3, 5),
(3, 1, 10000000, 4.4, 3, 6),
(4, 1, 10000000, 4.4, 3, 8),
(5, 1, 10000000, 6.3, 4, 4),
(6, 1, 10000000, 6.3, 4, 6),
(7, 1, 10000000, 6.3, 4, 8),
(8, 1, 10000000, 10.8, 6, 4),
(9, 1, 10000000, 10.8, 6, 5),
(10, 1, 10000000, 10.8, 6, 6),
(11, 1, 10000000, 10.8, 6, 8),
(12, 10000001, 50000000, 4.05, 3, 4),
(13, 10000001, 50000000, 4.05, 3, 5),
(14, 10000001, 50000000, 4.05, 3, 6),
(15, 10000001, 50000000, 4.05, 3, 8),
(16, 10000001, 50000000, 5.8, 4, 4),
(17, 10000001, 50000000, 5.8, 4, 6),
(18, 10000001, 50000000, 5.8, 4, 8),
(19, 10000001, 50000000, 10, 6, 4),
(20, 10000001, 50000000, 10, 6, 5),
(21, 10000001, 50000000, 10, 6, 6),
(22, 10000001, 50000000, 10, 6, 8),
(23, 50000001, 100000000, 3.6, 3, 4),
(24, 50000001, 100000000, 3.6, 3, 5),
(25, 50000001, 100000000, 3.6, 3, 6),
(26, 50000001, 100000000, 3.6, 3, 8),
(27, 50000001, 100000000, 5.2, 4, 4),
(28, 50000001, 100000000, 5.2, 4, 6),
(29, 50000001, 100000000, 5.2, 4, 8),
(30, 50000001, 100000000, 9, 6, 4),
(31, 50000001, 100000000, 9, 6, 5),
(32, 50000001, 100000000, 9, 6, 6),
(33, 50000001, 100000000, 9, 6, 8),
(34, 100000001, 400000000, 3.5, 3, 4),
(35, 100000001, 400000000, 3.5, 3, 5),
(36, 100000001, 400000000, 3.5, 3, 6),
(37, 100000001, 400000000, 3.5, 3, 8),
(38, 100000001, 400000000, 5.05, 4, 4),
(39, 100000001, 400000000, 5.05, 4, 6),
(40, 100000001, 400000000, 5.05, 4, 8),
(41, 100000001, 400000000, 8.6, 6, 4),
(42, 100000001, 400000000, 8.6, 6, 5),
(43, 100000001, 400000000, 8.6, 6, 6),
(44, 100000001, 400000000, 8.6, 6, 8);

-- --------------------------------------------------------

--
-- Table structure for table `fleksi_sekali`
--

CREATE TABLE `fleksi_sekali` (
  `id_fleksi` int(11) NOT NULL,
  `min_fs` int(11) NOT NULL,
  `max_fs` int(11) NOT NULL,
  `sm_fs` float NOT NULL,
  `tenor_fs` int(11) NOT NULL,
  `id_admin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fleksi_sekali`
--

INSERT INTO `fleksi_sekali` (`id_fleksi`, `min_fs`, `max_fs`, `sm_fs`, `tenor_fs`, `id_admin`) VALUES
(1, 1, 10000000, 6.8, 3, 1),
(2, 1, 10000000, 9.2, 4, 2),
(3, 1, 10000000, 14.1, 6, 3),
(4, 10000001, 50000000, 6.3, 3, 1),
(5, 10000001, 50000000, 8.5, 4, 2),
(6, 10000001, 50000000, 13, 6, 3),
(7, 50000001, 100000000, 5.6, 3, 1),
(8, 50000001, 100000000, 7.6, 4, 2),
(9, 50000001, 100000000, 11.6, 6, 3),
(10, 100000001, 400000000, 5.5, 3, 1),
(11, 100000001, 400000000, 7.4, 4, 2),
(12, 100000001, 400000000, 11.3, 6, 3);

-- --------------------------------------------------------

--
-- Table structure for table `reguler`
--

CREATE TABLE `reguler` (
  `id_reguler` int(11) NOT NULL,
  `min_reg` int(11) NOT NULL,
  `max_reg` int(11) NOT NULL,
  `sm_reg` float NOT NULL,
  `id_admin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reguler`
--

INSERT INTO `reguler` (`id_reguler`, `min_reg`, `max_reg`, `sm_reg`, `id_admin`) VALUES
(1, 1000000, 10000000, 1.25, 4),
(2, 1000000, 10000000, 1.25, 5),
(3, 1000000, 10000000, 1.25, 6),
(4, 1000000, 10000000, 1.25, 8),
(5, 10000001, 50000000, 1.15, 4),
(6, 10000001, 50000000, 1.15, 5),
(7, 10000001, 50000000, 1.15, 6),
(8, 10000001, 50000000, 1.15, 8),
(9, 50000001, 100000000, 1.05, 4),
(10, 50000001, 100000000, 1.05, 5),
(11, 50000001, 100000000, 1.05, 6),
(12, 50000001, 100000000, 1.05, 8),
(13, 100000001, 400000000, 1, 4),
(14, 100000001, 400000000, 1, 5),
(15, 100000001, 400000000, 1, 6),
(16, 100000001, 400000000, 1, 8),
(17, 100000001, 400000000, 1, 10);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `administrasi`
--
ALTER TABLE `administrasi`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `fleksi_berjangka`
--
ALTER TABLE `fleksi_berjangka`
  ADD PRIMARY KEY (`id_berjangka`),
  ADD KEY `id_admin` (`id_admin`);

--
-- Indexes for table `fleksi_sekali`
--
ALTER TABLE `fleksi_sekali`
  ADD PRIMARY KEY (`id_fleksi`),
  ADD KEY `id_admin` (`id_admin`);

--
-- Indexes for table `reguler`
--
ALTER TABLE `reguler`
  ADD PRIMARY KEY (`id_reguler`),
  ADD KEY `id_admin` (`id_admin`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `administrasi`
--
ALTER TABLE `administrasi`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `fleksi_berjangka`
--
ALTER TABLE `fleksi_berjangka`
  MODIFY `id_berjangka` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
--
-- AUTO_INCREMENT for table `fleksi_sekali`
--
ALTER TABLE `fleksi_sekali`
  MODIFY `id_fleksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `reguler`
--
ALTER TABLE `reguler`
  MODIFY `id_reguler` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `fleksi_berjangka`
--
ALTER TABLE `fleksi_berjangka`
  ADD CONSTRAINT `fleksi_berjangka_ibfk_1` FOREIGN KEY (`id_admin`) REFERENCES `administrasi` (`id_admin`);

--
-- Constraints for table `fleksi_sekali`
--
ALTER TABLE `fleksi_sekali`
  ADD CONSTRAINT `fleksi_sekali_ibfk_1` FOREIGN KEY (`id_admin`) REFERENCES `administrasi` (`id_admin`);

--
-- Constraints for table `reguler`
--
ALTER TABLE `reguler`
  ADD CONSTRAINT `reguler_ibfk_1` FOREIGN KEY (`id_admin`) REFERENCES `administrasi` (`id_admin`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
