-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 13, 2022 at 04:58 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `weblaundry`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `invoice` int(100) NOT NULL,
  `status` varchar(15) NOT NULL,
  `username_admin` varchar(100) NOT NULL,
  `nama_cust` varchar(100) NOT NULL,
  `no_telp` varchar(13) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `jenis_layanan` varchar(50) NOT NULL,
  `kuantitas` varchar(3) NOT NULL,
  `berat` varchar(3) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`invoice`, `status`, `username_admin`, `nama_cust`, `no_telp`, `alamat`, `jenis_layanan`, `kuantitas`, `berat`, `created_at`, `updated_at`) VALUES
(1, 'mencuci', '', 'Aldiyan Farhan N', '081317897895', 'Bumi anggrek blok rs no r257', 'pakaian_regular', '', '2', '2022-02-13 09:28:59', '2022-02-13 09:29:09'),
(6, 'antri', '', 'Aldiyan Farhan N', '08129330566', 'Bumi anggrek blok rs no r257', 'Sepatu', '1', '', '2022-02-13 09:49:59', '2022-02-13 09:49:59'),
(7, 'antri', '', 'Aldiyan Farhan N', '08129330566', 'Bumi anggrek blok rs no r257', 'Karpet', '5', '', '2022-02-13 09:56:58', '2022-02-13 09:56:58');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `password`, `name`, `created_at`, `updated_at`) VALUES
('aldiyanfarhan', '$2y$10$IMyVcw4wrTmYI1Ge.CN9dufPwJki4L73BLdaRS5j7N1IupzZz5nua', 'Aldiyan Farhan N', '2022-02-13 09:26:48', '2022-02-13 09:26:48');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`invoice`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `invoice` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
