-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 22, 2024 at 07:22 AM
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
-- Database: `db_sipintar`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE `tb_admin` (
  `Id_Admin` int NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `Username` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tb_admin`
--

INSERT INTO `tb_admin` (`Id_Admin`, `Email`, `Password`, `Username`) VALUES
(1, 'Hasibgtg@gmail.com', '$2y$10$AofgAU.fXl.4iTlrIXBAKutuk53hF22znuilNzPwn3slrWfqnkjee', 'Hasib'),
(2, 'hasib12@gmail.com', '$2y$10$UYvopaHDNhCBMWdCZXKWEOFmdzKMGcfJNAis6NzG6AcqmuzEUP4oK', 'Raven'),
(3, 'test1@gmail.com', '$2y$10$nlFR8SvIe0fMWaDGwXPEzuRxn9jwnum4uwl51fxw9GGCKy3fsJSIG', 'Kirey'),
(4, 'Coba2@gmail.com', '$2y$10$Q0pcnHc1P/oE3DoVB8dJmOKl8j9UID8AIgYRIVIaT3S2vHzeVcegO', 'test');

-- --------------------------------------------------------

--
-- Table structure for table `tb_mahasiswa`
--

CREATE TABLE `tb_mahasiswa` (
  `id` int NOT NULL,
  `Nama` varchar(50) NOT NULL,
  `NIM` varchar(50) NOT NULL,
  `Kelas` varchar(50) NOT NULL,
  `Jurusan` varchar(50) NOT NULL,
  `Prodi` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tb_mahasiswa`
--

INSERT INTO `tb_mahasiswa` (`id`, `Nama`, `NIM`, `Kelas`, `Jurusan`, `Prodi`) VALUES
(6, 'Hasib', '2218017', 'A', 'Informatika', 'Teknik Industri'),
(7, 'Jokoo', '23303133', 'A', 'Informatika', 'Teknik Industri');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`Id_Admin`);

--
-- Indexes for table `tb_mahasiswa`
--
ALTER TABLE `tb_mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `Id_Admin` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_mahasiswa`
--
ALTER TABLE `tb_mahasiswa`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
