-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 11, 2021 at 01:37 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kuliah`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_dosen`
--

CREATE TABLE `data_dosen` (
  `id` varchar(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `nohp` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_dosen`
--

INSERT INTO `data_dosen` (`id`, `nama`, `nohp`) VALUES
('D001', 'Herbert Siregar', '086654234143'),
('D002', 'Sururi', '087754312343'),
('D003', 'Kenthung', '085654333221'),
('D004', 'Yudi', '085432412111');

-- --------------------------------------------------------

--
-- Table structure for table `data_mahasiswa`
--

CREATE TABLE `data_mahasiswa` (
  `nim` int(11) NOT NULL,
  `nama_mhs` varchar(50) NOT NULL,
  `jurusan` varchar(30) NOT NULL,
  `semester` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_mahasiswa`
--

INSERT INTO `data_mahasiswa` (`nim`, `nama_mhs`, `jurusan`, `semester`) VALUES
(1902033, 'Lisa Amri M', 'Pendidikan Ilmu Komputer', 4),
(1902034, 'Rifa Humaira', 'Pendidikan Ilmu Komputer', 4),
(1902040, 'Kenthung', 'Ilmu Komputer', 6);

-- --------------------------------------------------------

--
-- Table structure for table `kontrak_matkul`
--

CREATE TABLE `kontrak_matkul` (
  `id_kontrak` int(11) NOT NULL,
  `nim` int(11) NOT NULL,
  `id_matkul` varchar(11) NOT NULL,
  `id` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kontrak_matkul`
--

INSERT INTO `kontrak_matkul` (`id_kontrak`, `nim`, `id_matkul`, `id`) VALUES
(1, 1902033, 'IK002', 'D002');

-- --------------------------------------------------------

--
-- Table structure for table `matkul`
--

CREATE TABLE `matkul` (
  `id_matkul` varchar(11) NOT NULL,
  `id` varchar(11) NOT NULL,
  `nama_matkul` varchar(50) NOT NULL,
  `sks` int(11) NOT NULL,
  `hari` varchar(10) NOT NULL,
  `waktu` varchar(10) NOT NULL,
  `tempat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `matkul`
--

INSERT INTO `matkul` (`id_matkul`, `id`, `nama_matkul`, `sks`, `hari`, `waktu`, `tempat`) VALUES
('IK001', 'D001', 'Pemograman Internet', 3, 'Senin', '07.00-10.0', 'FPMIPA B'),
('IK002', 'D003', 'Pemograman Berorientasi Objek', 3, 'Rabu', '09.30-12.0', 'FPMIPA C'),
('IK003', 'D003', 'APa yah', 10, 'Rabu', '09.30-12.0', 'FPMIPA B');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `username`, `password`) VALUES
(1, 'lisa', 'lisa', '123'),
(2, 'admin', 'admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_dosen`
--
ALTER TABLE `data_dosen`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_mahasiswa`
--
ALTER TABLE `data_mahasiswa`
  ADD PRIMARY KEY (`nim`);

--
-- Indexes for table `kontrak_matkul`
--
ALTER TABLE `kontrak_matkul`
  ADD PRIMARY KEY (`id_kontrak`),
  ADD KEY `nim` (`nim`),
  ADD KEY `id_matkul` (`id_matkul`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `matkul`
--
ALTER TABLE `matkul`
  ADD PRIMARY KEY (`id_matkul`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kontrak_matkul`
--
ALTER TABLE `kontrak_matkul`
  MODIFY `id_kontrak` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `kontrak_matkul`
--
ALTER TABLE `kontrak_matkul`
  ADD CONSTRAINT `kontrak_matkul_ibfk_1` FOREIGN KEY (`nim`) REFERENCES `data_mahasiswa` (`nim`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `kontrak_matkul_ibfk_2` FOREIGN KEY (`id_matkul`) REFERENCES `matkul` (`id_matkul`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `kontrak_matkul_ibfk_3` FOREIGN KEY (`id`) REFERENCES `data_dosen` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `matkul`
--
ALTER TABLE `matkul`
  ADD CONSTRAINT `matkul_ibfk_1` FOREIGN KEY (`id`) REFERENCES `data_dosen` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
