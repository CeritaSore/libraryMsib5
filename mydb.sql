-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 10, 2023 at 08:21 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mydb`
--

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE `buku` (
  `idbuku` int(11) NOT NULL,
  `judulbuku` varchar(45) NOT NULL,
  `kategori_idkategori` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`idbuku`, `judulbuku`, `kategori_idkategori`) VALUES
(1, 'membaca', 1),
(2, 'mendengar', 2),
(3, 'menulis', 1);

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `idkategori` int(11) NOT NULL,
  `listkategori` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`idkategori`, `listkategori`) VALUES
(1, 'pendidikan'),
(2, 'master baca');

-- --------------------------------------------------------

--
-- Table structure for table `meminjam`
--

CREATE TABLE `meminjam` (
  `idmeminjam` int(11) NOT NULL,
  `tanggal_pengambilan` date NOT NULL,
  `tanggal_pengembalian` date NOT NULL,
  `anggotaperpus_idanggota` int(11) NOT NULL,
  `salinanbuku_idsalinanbuku` int(11) NOT NULL,
  `petugas_perpus_idpetugas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `penerbit`
--

CREATE TABLE `penerbit` (
  `idpenerbit` int(11) NOT NULL,
  `namapenerbit` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `penerbit`
--

INSERT INTO `penerbit` (`idpenerbit`, `namapenerbit`) VALUES
(1, 'penerbit a'),
(2, 'penerbit b');

-- --------------------------------------------------------

--
-- Table structure for table `pengarang`
--

CREATE TABLE `pengarang` (
  `idpengarang` int(11) NOT NULL,
  `namapengarang` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `pengarang`
--

INSERT INTO `pengarang` (`idpengarang`, `namapengarang`) VALUES
(1, 'siti'),
(2, 'maidah'),
(3, 'junaide');

-- --------------------------------------------------------

--
-- Table structure for table `pengarangbuku`
--

CREATE TABLE `pengarangbuku` (
  `buku_idbuku` int(11) NOT NULL,
  `pengarang_idpengarang` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `pengarangbuku`
--

INSERT INTO `pengarangbuku` (`buku_idbuku`, `pengarang_idpengarang`) VALUES
(1, 3),
(1, 2),
(1, 1),
(2, 2),
(2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `salinanbuku`
--

CREATE TABLE `salinanbuku` (
  `idsalinanbuku` int(11) NOT NULL,
  `tahunterbit` int(11) NOT NULL,
  `buku_idbuku` int(11) NOT NULL,
  `penerbit_idpenerbit` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `salinanbuku`
--

INSERT INTO `salinanbuku` (`idsalinanbuku`, `tahunterbit`, `buku_idbuku`, `penerbit_idpenerbit`) VALUES
(1, 2023, 1, 1),
(2, 2023, 2, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`idbuku`),
  ADD KEY `fk_buku_kategori1` (`kategori_idkategori`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`idkategori`);

--
-- Indexes for table `meminjam`
--
ALTER TABLE `meminjam`
  ADD PRIMARY KEY (`idmeminjam`),
  ADD KEY `fk_meminjam_salinanbuku1` (`salinanbuku_idsalinanbuku`);

--
-- Indexes for table `penerbit`
--
ALTER TABLE `penerbit`
  ADD PRIMARY KEY (`idpenerbit`);

--
-- Indexes for table `pengarang`
--
ALTER TABLE `pengarang`
  ADD PRIMARY KEY (`idpengarang`);

--
-- Indexes for table `pengarangbuku`
--
ALTER TABLE `pengarangbuku`
  ADD KEY `fk_pengarangbuku_buku` (`buku_idbuku`),
  ADD KEY `fk_pengarangbuku_pengarang1` (`pengarang_idpengarang`);

--
-- Indexes for table `salinanbuku`
--
ALTER TABLE `salinanbuku`
  ADD PRIMARY KEY (`idsalinanbuku`),
  ADD KEY `fk_salinanbuku_buku1` (`buku_idbuku`),
  ADD KEY `fk_salinanbuku_penerbit1` (`penerbit_idpenerbit`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `meminjam`
--
ALTER TABLE `meminjam`
  MODIFY `idmeminjam` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `buku`
--
ALTER TABLE `buku`
  ADD CONSTRAINT `fk_buku_kategori1` FOREIGN KEY (`kategori_idkategori`) REFERENCES `kategori` (`idkategori`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `meminjam`
--
ALTER TABLE `meminjam`
  ADD CONSTRAINT `fk_meminjam_salinanbuku1` FOREIGN KEY (`salinanbuku_idsalinanbuku`) REFERENCES `salinanbuku` (`idsalinanbuku`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `pengarangbuku`
--
ALTER TABLE `pengarangbuku`
  ADD CONSTRAINT `fk_pengarangbuku_buku` FOREIGN KEY (`buku_idbuku`) REFERENCES `buku` (`idbuku`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_pengarangbuku_pengarang1` FOREIGN KEY (`pengarang_idpengarang`) REFERENCES `pengarang` (`idpengarang`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `salinanbuku`
--
ALTER TABLE `salinanbuku`
  ADD CONSTRAINT `fk_salinanbuku_buku1` FOREIGN KEY (`buku_idbuku`) REFERENCES `buku` (`idbuku`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_salinanbuku_penerbit1` FOREIGN KEY (`penerbit_idpenerbit`) REFERENCES `penerbit` (`idpenerbit`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
