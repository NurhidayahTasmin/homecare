-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 19, 2020 at 12:42 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `homecare`
--

-- --------------------------------------------------------

--
-- Table structure for table `tabel_admin`
--

CREATE TABLE `tabel_admin` (
  `id_admin` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `telepon` varchar(15) NOT NULL,
  `alamat` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tabel_admin`
--

INSERT INTO `tabel_admin` (`id_admin`, `nama`, `username`, `email`, `password`, `telepon`, `alamat`) VALUES
(1, 'aya', 'admin', 'aya@gmail.com', 'd033e22ae348aeb5660fc2140aec35850c4da997', '089789678678', 'Jl. Admin 23'),
(3, 'muje', 'muje', 'muje@gmail.com', '8cb2237d0679ca88db6464eac60da96345513964', '08976545', 'Jl. admin');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_request`
--

CREATE TABLE `tabel_request` (
  `id_request` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `lokasi` varchar(50) NOT NULL,
  `telefon` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `gejala` varchar(255) NOT NULL,
  `diagnosa` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tabel_request`
--

INSERT INTO `tabel_request` (`id_request`, `nama`, `lokasi`, `telefon`, `status`, `gejala`, `diagnosa`) VALUES
('1', 'akbar', 'Jl. malengkeri 2', '08976545678', 'verifikasi', 'pusing, mual, demam tinggi', 'DBD'),
('2', 'marwah', 'Jl. Dg Tata 2', '085678123456', 'menunggu', 'pusing, mual', 'vertigo');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_timhc`
--

CREATE TABLE `tabel_timhc` (
  `id_tim` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `telefon` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tabel_timhc`
--

INSERT INTO `tabel_timhc` (`id_tim`, `nama`, `email`, `password`, `telefon`, `alamat`) VALUES
('1', 'Nining', 'nining@gmail.com', 'd033e22ae348aeb5660fc2140aec35850c4da997', '089890765432', 'Jl. Kumala 234');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_user`
--

CREATE TABLE `tabel_user` (
  `nik` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `tempat_lahir` varchar(255) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `gender` enum('pria','wanita') NOT NULL,
  `foto` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tabel_user`
--

INSERT INTO `tabel_user` (`nik`, `nama`, `tempat_lahir`, `tgl_lahir`, `email`, `phone`, `gender`, `foto`, `alamat`, `password`) VALUES
('7030011600028', 'Nunung', 'Makassar', '2000-08-12', 'nunung@gmail.com', '085397668703', 'wanita', '', 'Jl. Rappocini Raya lr 3', '21232f297a57a5a743894a0e4a801fc3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tabel_admin`
--
ALTER TABLE `tabel_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `tabel_request`
--
ALTER TABLE `tabel_request`
  ADD PRIMARY KEY (`id_request`);

--
-- Indexes for table `tabel_timhc`
--
ALTER TABLE `tabel_timhc`
  ADD PRIMARY KEY (`id_tim`);

--
-- Indexes for table `tabel_user`
--
ALTER TABLE `tabel_user`
  ADD PRIMARY KEY (`nik`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tabel_admin`
--
ALTER TABLE `tabel_admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
