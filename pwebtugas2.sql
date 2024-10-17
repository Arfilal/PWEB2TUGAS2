-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 17, 2024 at 06:55 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pwebtugas2`
--

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `mahasiswa` int(11) NOT NULL,
  `nim` varchar(20) NOT NULL,
  `nama_mhs` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `no_telp` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`mahasiswa`, `nim`, `nama_mhs`, `alamat`, `email`, `no_telp`) VALUES
(1, '765756', 'fhgjfh', 'ggdghd', 'gfdhdg', '767756765'),
(2, '230302053', 'Arfilal', 'BPTW', 'Arfilal@gmail.com', '081392684232'),
(3, '', '', '', '', ''),
(4, '230302053', 'Arfilal', 'BPTW', 'Arfilal@gmail.com', '081392684232'),
(5, 'tewttew', 'trewer', 'wterrrt', 'ewt', 'twetew'),
(6, 'wetr', 'twe', 'twetrw', 'wetrw', 'wterterw'),
(7, 'dsagfd', 'gsdagf', 'hsfhsfg', 'hdsfhs', 'sdhffhgs'),
(8, 'hdsgfsh', 'gsdfd', 'fdhsdghs', 'hdfssgfgh', 'hdfshg'),
(9, 'dsagfd', 'gsdagf', 'hsfhsfg', 'hdsfhs', 'sdhffhgs'),
(10, 'hdsgfsh', 'gsdfd', 'fdhsdghs', 'hdfssgfgh', 'hdfshg'),
(11, 'dsagfd', 'gsdagf', 'hsfhsfg', 'hdsfhs', 'sdhffhgs'),
(12, 'hdsgfsh', 'gsdfd', 'fdhsdghs', 'hdfssgfgh', 'hdfshg'),
(13, 'dsagfd', 'gsdagf', 'hsfhsfg', 'hdsfhs', 'sdhffhgs'),
(14, 'hdsgfsh', 'gsdfd', 'fdhsdghs', 'hdfssgfgh', 'hdfshg'),
(15, 'dsagfd', 'gsdagf', 'hsfhsfg', 'hdsfhs', 'sdhffhgs'),
(16, 'hdsgfsh', 'gsdfd', 'fdhsdghs', 'hdfssgfgh', 'hdfshg');

-- --------------------------------------------------------

--
-- Table structure for table `nilai_perbaikan`
--

CREATE TABLE `nilai_perbaikan` (
  `perbaikan` int(11) NOT NULL,
  `tgl_perbaikan` date NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `mahasiswa_id` int(11) NOT NULL,
  `matkul` varchar(20) NOT NULL,
  `semester` varchar(20) NOT NULL,
  `nilai` varchar(20) NOT NULL,
  `dosen` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `nilai_perbaikan`
--

INSERT INTO `nilai_perbaikan` (`perbaikan`, `tgl_perbaikan`, `keterangan`, `mahasiswa_id`, `matkul`, `semester`, `nilai`, `dosen`) VALUES
(1, '0000-00-00', 'kugigi', 6755, '798689', '88760', '8709', '80709'),
(2, '2024-10-28', 'ilhlk', 87097, '79709', '979079', '99079', '907097'),
(3, '2024-10-17', 'nilai cukup', 3, 'pweb', '3', '80', 'pak abda\'u'),
(4, '2024-10-18', 'nilai kurang', 4, 'pkn', '3', '60', 'budi'),
(5, '2024-10-19', 'mantap', 5, 'jkjhhh', 'lbblkbk', 'lhhhpo', 'k;nnohpo'),
(6, '2024-10-20', 'knkhp', 6, 'lhhho', 'lblbpoh', 'lhhpohpo', 'iphph'),
(7, '2024-10-21', 'hpohoh', 7, 'ihiph', 'bi', 'ihp', 'ihp'),
(8, '2024-10-22', ';hoh', 8, 'pohphpo', 'pih', 'ojop', 'php'),
(9, '2024-10-23', 'php', 9, 'ojo', 'oo', 'oigi', '[oh['),
(10, '2024-10-25', ';hoh[', 10, 'joj[', 'lkblk', ';kn', ';n\'n'),
(11, '2024-10-25', ';kn;', 11, 'lkbb', 'lkblkb', 'lkbk', 'kbk');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`mahasiswa`);

--
-- Indexes for table `nilai_perbaikan`
--
ALTER TABLE `nilai_perbaikan`
  ADD PRIMARY KEY (`perbaikan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `mahasiswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `nilai_perbaikan`
--
ALTER TABLE `nilai_perbaikan`
  MODIFY `perbaikan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
