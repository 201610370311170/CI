-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 14, 2019 at 08:21 PM
-- Server version: 5.7.24
-- PHP Version: 7.2.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `absensi`
--

CREATE TABLE `absensi` (
  `id_absensi` int(11) NOT NULL,
  `id_pegawai` int(11) NOT NULL,
  `kehadiran` varchar(20) NOT NULL,
  `tanggal` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `absensi`
--

INSERT INTO `absensi` (`id_absensi`, `id_pegawai`, `kehadiran`, `tanggal`) VALUES
(27, 1, 'Hadir', '07-10-2019'),
(28, 2, 'Tidak Hadir', '07-10-2019'),
(29, 6, 'Tidak Hadir', '07-10-2019'),
(30, 7, 'Tidak Hadir', '07-10-2019'),
(31, 8, 'Tidak Hadir', '07-10-2019'),
(32, 9, 'Hadir', '07-10-2019'),
(33, 1, 'Hadir', '08-10-2019'),
(34, 2, '', '08-10-2019'),
(35, 6, '', '08-10-2019'),
(36, 7, 'Hadir', '08-10-2019'),
(37, 8, '', '08-10-2019'),
(38, 9, '', '08-10-2019'),
(39, 2, 'Hadir', '08-10-2019'),
(40, 6, '', '08-10-2019'),
(41, 8, '', '08-10-2019'),
(42, 9, '', '08-10-2019'),
(43, 1, 'Hadir', '14-10-2019'),
(44, 2, '', '14-10-2019'),
(45, 6, '', '14-10-2019'),
(46, 7, '', '14-10-2019'),
(47, 8, '', '14-10-2019'),
(48, 9, '', '14-10-2019');

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE `pegawai` (
  `id_pegawai` int(11) NOT NULL,
  `nama_pegawai` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `jabatan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`id_pegawai`, `nama_pegawai`, `email`, `jabatan`) VALUES
(1, 'Yudi Ananta', 'yudi@gmail.com', 'Staff Kebon'),
(2, 'Freya ', 'freya@gmail.com', 'Staff HR'),
(6, 'Firza Ramadhan ', 'firzaRam@gmail.com', 'Staff Gudang'),
(7, 'Reza ', 'Reza_r@gmail.com', 'Karyawan'),
(8, 'Gita ', 'gita_r@gmail.com', 'Karyawan'),
(9, 'Lolita', 'loli@gmail.com', 'Karyawan');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_users` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_users`, `username`, `password`) VALUES
(1, 'root', '202cb962ac59075b964b07152d234b70'),
(2, 'admin', '21232f297a57a5a743894a0e4a801fc3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `absensi`
--
ALTER TABLE `absensi`
  ADD PRIMARY KEY (`id_absensi`);

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`id_pegawai`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_users`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `absensi`
--
ALTER TABLE `absensi`
  MODIFY `id_absensi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `id_pegawai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_users` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
