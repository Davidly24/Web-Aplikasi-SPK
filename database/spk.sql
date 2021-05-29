-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 29, 2021 at 04:29 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.3.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spk`
--

-- --------------------------------------------------------

--
-- Table structure for table `bobot`
--

CREATE TABLE `bobot` (
  `id_bobot` int(11) NOT NULL,
  `c1` int(11) NOT NULL,
  `c2` int(11) NOT NULL,
  `c3` int(11) NOT NULL,
  `c4` int(11) NOT NULL,
  `c5` int(11) NOT NULL,
  `c6` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bobot`
--

INSERT INTO `bobot` (`id_bobot`, `c1`, `c2`, `c3`, `c4`, `c5`, `c6`) VALUES
(1, 1, 4, 1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `guru`
--

CREATE TABLE `guru` (
  `id` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `tanggal` varchar(30) NOT NULL,
  `telpon` varchar(20) NOT NULL,
  `kelamin` varchar(20) NOT NULL,
  `alamat` varchar(30) NOT NULL,
  `pend_ter` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `guru`
--

INSERT INTO `guru` (`id`, `nama`, `tanggal`, `telpon`, `kelamin`, `alamat`, `pend_ter`) VALUES
(29, 'David', '25', 'Laki-laki', 'Guru', '3 Tahun', 'S1'),
(30, 'Fauzal Mubarok', '30', 'Laki-laki', 'Guru', '5 Tahun/Lebih', 'S1');

-- --------------------------------------------------------

--
-- Table structure for table `nilai`
--

CREATE TABLE `nilai` (
  `id_nilai` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `per_pem` decimal(8,2) NOT NULL,
  `pel_pem` decimal(8,2) NOT NULL,
  `pen_pem` decimal(8,2) NOT NULL,
  `mel_mem` decimal(8,2) NOT NULL,
  `tug_tam` decimal(8,2) NOT NULL,
  `peng_keg` decimal(8,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nilai`
--

INSERT INTO `nilai` (`id_nilai`, `nama`, `per_pem`, `pel_pem`, `pen_pem`, `mel_mem`, `tug_tam`, `peng_keg`) VALUES
(1, 'M. Nurcholis', '60.00', '64.29', '70.45', '58.33', '60.00', '56.25'),
(2, 'david', '100.00', '100.00', '77.27', '83.33', '80.00', '81.25'),
(3, 'Rukmaja', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00');

-- --------------------------------------------------------

--
-- Table structure for table `nilai2`
--

CREATE TABLE `nilai2` (
  `id_nilai2` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `k1` int(4) NOT NULL,
  `k2` int(4) NOT NULL,
  `k3` int(4) NOT NULL,
  `k4` int(4) NOT NULL,
  `k5` int(4) NOT NULL,
  `k6` int(4) NOT NULL,
  `k7` int(4) NOT NULL,
  `k8` int(4) NOT NULL,
  `k9` int(4) NOT NULL,
  `k10` int(4) NOT NULL,
  `k11` int(4) NOT NULL,
  `k12` int(4) NOT NULL,
  `k13` int(4) NOT NULL,
  `k14` int(4) NOT NULL,
  `k15` int(4) NOT NULL,
  `k16` int(4) NOT NULL,
  `k17` int(4) NOT NULL,
  `k18` int(4) NOT NULL,
  `k19` int(4) NOT NULL,
  `k20` int(4) NOT NULL,
  `k21` int(4) NOT NULL,
  `k22` int(4) NOT NULL,
  `k23` int(4) NOT NULL,
  `k24` int(4) NOT NULL,
  `k25` int(4) NOT NULL,
  `k26` int(4) NOT NULL,
  `k27` int(4) NOT NULL,
  `k28` int(4) NOT NULL,
  `k29` int(4) NOT NULL,
  `k30` int(4) NOT NULL,
  `k31` int(4) NOT NULL,
  `k32` int(4) NOT NULL,
  `k33` int(4) NOT NULL,
  `k34` int(4) NOT NULL,
  `k35` int(4) NOT NULL,
  `k36` int(4) NOT NULL,
  `k37` int(4) NOT NULL,
  `k38` int(4) NOT NULL,
  `k39` int(4) NOT NULL,
  `k40` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nilai2`
--

INSERT INTO `nilai2` (`id_nilai2`, `nama`, `k1`, `k2`, `k3`, `k4`, `k5`, `k6`, `k7`, `k8`, `k9`, `k10`, `k11`, `k12`, `k13`, `k14`, `k15`, `k16`, `k17`, `k18`, `k19`, `k20`, `k21`, `k22`, `k23`, `k24`, `k25`, `k26`, `k27`, `k28`, `k29`, `k30`, `k31`, `k32`, `k33`, `k34`, `k35`, `k36`, `k37`, `k38`, `k39`, `k40`) VALUES
(9, 'David', 3, 3, 3, 3, 3, 4, 4, 3, 3, 3, 2, 2, 4, 4, 4, 3, 3, 3, 3, 3, 4, 4, 3, 3, 3, 4, 4, 4, 3, 3, 3, 3, 4, 4, 3, 3, 3, 4, 4, 4),
(10, 'Fauzal Mubarok', 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 4, 4, 4, 4, 4, 4, 4, 3, 3, 2, 2, 2, 2, 3, 3, 3, 3, 3, 3, 2, 3, 2, 2, 3, 3, 3, 3, 3, 2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `level` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama`, `username`, `password`, `level`) VALUES
(1, 'Kepala Sekolah', 'admin', 'admin123', 'admin'),
(2, 'Guru', 'user', 'user123', 'user'),
(4, 'David', '29', 'user123', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bobot`
--
ALTER TABLE `bobot`
  ADD PRIMARY KEY (`id_bobot`);

--
-- Indexes for table `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nilai`
--
ALTER TABLE `nilai`
  ADD PRIMARY KEY (`id_nilai`);

--
-- Indexes for table `nilai2`
--
ALTER TABLE `nilai2`
  ADD PRIMARY KEY (`id_nilai2`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bobot`
--
ALTER TABLE `bobot`
  MODIFY `id_bobot` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `guru`
--
ALTER TABLE `guru`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `nilai`
--
ALTER TABLE `nilai`
  MODIFY `id_nilai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `nilai2`
--
ALTER TABLE `nilai2`
  MODIFY `id_nilai2` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
