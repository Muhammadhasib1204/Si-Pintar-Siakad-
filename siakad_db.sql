-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 15, 2024 at 08:34 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `siakad_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE `tb_admin` (
  `Id_Admin` int NOT NULL,
  `Id_Mahasiswa` int NOT NULL,
  `Id_Matkul` int NOT NULL,
  `Id_Penilaian` int NOT NULL,
  `Nama_Admin` int NOT NULL,
  `Jenis_Kelamin` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_mahasiswa`
--

CREATE TABLE `tb_mahasiswa` (
  `Id_Mahasiswa` int NOT NULL,
  `NIM` varchar(20) NOT NULL,
  `Nama` varchar(50) NOT NULL,
  `Jurusan` varchar(50) NOT NULL,
  `Prodi` varchar(50) NOT NULL,
  `Jenis_Kelamin` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_matkul`
--

CREATE TABLE `tb_matkul` (
  `Id_Matkul` int NOT NULL,
  `Id_Mahasiswa` int NOT NULL,
  `Nama_Matkul` varchar(50) NOT NULL,
  `Jam_Matkul` varchar(50) NOT NULL,
  `Ruangan_Matkul` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_penilaian`
--

CREATE TABLE `tb_penilaian` (
  `Id_Penilaian` int NOT NULL,
  `Id_Matkul` int NOT NULL,
  `Nama_Dosen` varchar(50) NOT NULL,
  `Nama_Matkul` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`Id_Admin`),
  ADD KEY `Id_Mahasiswa` (`Id_Mahasiswa`),
  ADD KEY `Id_Matkul` (`Id_Matkul`),
  ADD KEY `Id_Penilaian` (`Id_Penilaian`);

--
-- Indexes for table `tb_mahasiswa`
--
ALTER TABLE `tb_mahasiswa`
  ADD PRIMARY KEY (`Id_Mahasiswa`);

--
-- Indexes for table `tb_matkul`
--
ALTER TABLE `tb_matkul`
  ADD PRIMARY KEY (`Id_Matkul`),
  ADD KEY `Id_Mahasiswa` (`Id_Mahasiswa`);

--
-- Indexes for table `tb_penilaian`
--
ALTER TABLE `tb_penilaian`
  ADD PRIMARY KEY (`Id_Penilaian`),
  ADD KEY `Id_Matkul` (`Id_Matkul`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `Id_Admin` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_mahasiswa`
--
ALTER TABLE `tb_mahasiswa`
  MODIFY `Id_Mahasiswa` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_matkul`
--
ALTER TABLE `tb_matkul`
  MODIFY `Id_Matkul` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_penilaian`
--
ALTER TABLE `tb_penilaian`
  MODIFY `Id_Penilaian` int NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD CONSTRAINT `tb_admin_ibfk_1` FOREIGN KEY (`Id_Mahasiswa`) REFERENCES `tb_mahasiswa` (`Id_Mahasiswa`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_admin_ibfk_2` FOREIGN KEY (`Id_Matkul`) REFERENCES `tb_matkul` (`Id_Matkul`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_admin_ibfk_3` FOREIGN KEY (`Id_Penilaian`) REFERENCES `tb_penilaian` (`Id_Penilaian`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_matkul`
--
ALTER TABLE `tb_matkul`
  ADD CONSTRAINT `tb_matkul_ibfk_1` FOREIGN KEY (`Id_Mahasiswa`) REFERENCES `tb_mahasiswa` (`Id_Mahasiswa`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_penilaian`
--
ALTER TABLE `tb_penilaian`
  ADD CONSTRAINT `tb_penilaian_ibfk_1` FOREIGN KEY (`Id_Matkul`) REFERENCES `tb_matkul` (`Id_Matkul`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
