-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 15, 2022 at 06:46 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `humas`
--

-- --------------------------------------------------------

--
-- Table structure for table `dokumen_pks`
--

CREATE TABLE `dokumen_pks` (
  `id` int(11) NOT NULL,
  `no_pks` varchar(50) NOT NULL,
  `nama_pks` varchar(150) NOT NULL,
  `jenis_pks` char(2) NOT NULL,
  `judul_pks` varchar(150) NOT NULL,
  `tgl_buat_pks` date NOT NULL,
  `tgl_berakhir_pks` date DEFAULT NULL,
  `status_pks` char(2) NOT NULL,
  `tahun_pks` char(4) NOT NULL,
  `nama_file` varchar(255) DEFAULT NULL,
  `bagian_pks` char(2) NOT NULL,
  `create_at` datetime NOT NULL,
  `create_by` char(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dokumen_pks`
--

INSERT INTO `dokumen_pks` (`id`, `no_pks`, `nama_pks`, `jenis_pks`, `judul_pks`, `tgl_buat_pks`, `tgl_berakhir_pks`, `status_pks`, `tahun_pks`, `nama_file`, `bagian_pks`, `create_at`, `create_by`) VALUES
(3, '1', 'TES', '2', 'TES', '2022-10-25', '2022-10-25', '3', '1', 'a7e9c9a9b8984e077f450c51d20b7a87.pdf', '4', '0000-00-00 00:00:00', '00'),
(4, '1', 'TES', '2', 'TES', '2022-10-15', '2022-10-15', '3', '1', 'a7e9c9a9b8984e077f450c51d20b7a87.pdf', '4', '0000-00-00 00:00:00', '00'),
(5, '12345', 'ada', '1', 'ada', '2022-10-06', '2022-10-06', '1', '2022', '', '1', '2022-10-12 14:11:13', '1'),
(6, '1', 'TES', '2', 'TES', '2022-10-01', '2022-10-01', '3', '1', 'a7e9c9a9b8984e077f450c51d20b7a87.pdf', '4', '0000-00-00 00:00:00', '00'),
(7, '1', 'TES', '2', 'TES', '2022-09-30', '2022-09-30', '3', '1', 'a7e9c9a9b8984e077f450c51d20b7a87.pdf', '4', '0000-00-00 00:00:00', '00'),
(8, '1', 'TES', '2', 'TES', '2022-09-30', '2022-09-30', '3', '1', 'a7e9c9a9b8984e077f450c51d20b7a87.pdf', '4', '0000-00-00 00:00:00', '00'),
(9, '1', 'TES', '2', 'TES', '2022-06-30', '2022-06-30', '3', '1', 'a7e9c9a9b8984e077f450c51d20b7a87.pdf', '4', '0000-00-00 00:00:00', '00'),
(10, '1', 'TES', '2', 'TES', '2022-09-30', '2022-09-30', '3', '1', 'a7e9c9a9b8984e077f450c51d20b7a87.pdf', '4', '0000-00-00 00:00:00', '00'),
(11, '1', 'TES', '2', 'TES', '2022-09-30', '2022-09-30', '3', '1', 'a7e9c9a9b8984e077f450c51d20b7a87.pdf', '4', '0000-00-00 00:00:00', '00'),
(12, '1', 'TES', '2', 'TES', '2022-09-30', '2022-09-30', '3', '1', 'a7e9c9a9b8984e077f450c51d20b7a87.pdf', '4', '0000-00-00 00:00:00', '00'),
(13, '1', 'TES', '2', 'TES', '2022-09-30', '2022-09-30', '3', '1', 'a7e9c9a9b8984e077f450c51d20b7a87.pdf', '4', '0000-00-00 00:00:00', '00'),
(14, '1', 'TES', '2', 'TES', '2022-09-30', '2022-09-30', '3', '1', 'a7e9c9a9b8984e077f450c51d20b7a87.pdf', '4', '0000-00-00 00:00:00', '00'),
(15, '1', 'TES', '2', 'TES', '2022-09-30', '2022-09-30', '3', '1', 'a7e9c9a9b8984e077f450c51d20b7a87.pdf', '4', '0000-00-00 00:00:00', '00'),
(16, '1', 'TES', '2', 'TES', '2022-09-30', '2022-09-30', '3', '1', 'a7e9c9a9b8984e077f450c51d20b7a87.pdf', '4', '0000-00-00 00:00:00', '00'),
(17, '1', 'TES', '2', 'TES', '2022-09-30', '2022-09-30', '3', '1', 'a7e9c9a9b8984e077f450c51d20b7a87.pdf', '4', '0000-00-00 00:00:00', '00'),
(18, '1', 'TES', '2', 'TES', '2022-09-30', '2022-09-30', '3', '1', 'a7e9c9a9b8984e077f450c51d20b7a87.pdf', '4', '0000-00-00 00:00:00', '00'),
(19, '1', 'TES', '2', 'TES', '2022-09-30', '2022-09-30', '3', '1', 'a7e9c9a9b8984e077f450c51d20b7a87.pdf', '4', '0000-00-00 00:00:00', '00'),
(20, '1', 'TES', '2', 'TES', '2022-09-30', '2022-09-30', '3', '1', 'a7e9c9a9b8984e077f450c51d20b7a87.pdf', '4', '0000-00-00 00:00:00', '00'),
(21, '1', 'TES', '2', 'TES', '2022-09-30', '2022-09-30', '3', '1', 'a7e9c9a9b8984e077f450c51d20b7a87.pdf', '4', '0000-00-00 00:00:00', '00'),
(22, '1', 'TES', '2', 'TES', '2022-09-30', '2022-09-30', '3', '1', 'a7e9c9a9b8984e077f450c51d20b7a87.pdf', '4', '0000-00-00 00:00:00', '00'),
(23, '1', 'TES', '2', 'TES', '2022-09-30', '2022-09-30', '3', '1', 'a7e9c9a9b8984e077f450c51d20b7a87.pdf', '4', '0000-00-00 00:00:00', '00'),
(24, '1', 'TES', '2', 'TES', '2022-09-30', '2022-09-30', '3', '1', 'a7e9c9a9b8984e077f450c51d20b7a87.pdf', '4', '0000-00-00 00:00:00', '00'),
(25, '1', 'TES', '2', 'TES', '2022-09-30', '2022-09-30', '3', '1', 'a7e9c9a9b8984e077f450c51d20b7a87.pdf', '4', '0000-00-00 00:00:00', '00'),
(26, '1', 'TES', '2', 'TES', '2022-09-30', '2022-09-30', '3', '1', 'a7e9c9a9b8984e077f450c51d20b7a87.pdf', '4', '0000-00-00 00:00:00', '00'),
(27, '1', 'TES', '2', 'TES', '2022-09-30', '2022-09-30', '3', '1', 'a7e9c9a9b8984e077f450c51d20b7a87.pdf', '4', '0000-00-00 00:00:00', '00'),
(28, '1', 'TES', '2', 'TES', '2022-09-30', '2022-09-30', '3', '1', 'a7e9c9a9b8984e077f450c51d20b7a87.pdf', '4', '0000-00-00 00:00:00', '00'),
(29, '1', 'TES', '2', 'TES', '2022-09-30', '2022-09-30', '3', '1', 'a7e9c9a9b8984e077f450c51d20b7a87.pdf', '4', '0000-00-00 00:00:00', '00'),
(30, '1', 'TES', '2', 'TES', '2022-09-30', '2022-09-30', '3', '1', 'a7e9c9a9b8984e077f450c51d20b7a87.pdf', '4', '0000-00-00 00:00:00', '00'),
(31, '123', 'TESTING BARU', '1', 'RETES', '2022-10-05', '2022-07-12', '1', '2022', '', '2', '2022-10-12 14:13:58', '1'),
(32, '123', 'TESS', '1', 'RETEES', '2022-10-04', '2022-10-26', '1', '1', '0da2d8c7a5abdffbb6d79d0b34416d0d.pdf', '2', '2022-10-09 15:43:20', '1');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` char(1) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `created_by` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `nama`, `password`, `level`, `created_at`, `created_by`) VALUES
(1, 'admin', 'Administrator', '21232f297a57a5a743894a0e4a801fc3', '1', '2022-10-04 19:56:21', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dokumen_pks`
--
ALTER TABLE `dokumen_pks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dokumen_pks`
--
ALTER TABLE `dokumen_pks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
