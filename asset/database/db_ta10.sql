-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 05, 2018 at 03:31 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 5.6.37

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_ta10`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_account`
--

CREATE TABLE `tb_account` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_account`
--

INSERT INTO `tb_account` (`id`, `username`, `password`) VALUES
(11, 'zahid0', 'ac43724f16e9241d990427ab7c8f4228'),
(12, 'dida', 'af96cde158b5e303b694f0f935e72489');

-- --------------------------------------------------------

--
-- Table structure for table `tb_mahasiswa`
--

CREATE TABLE `tb_mahasiswa` (
  `nim` varchar(10) NOT NULL,
  `nama_depan` varchar(100) NOT NULL,
  `nama_belakang` varchar(100) NOT NULL,
  `email` text NOT NULL,
  `kelas` text NOT NULL,
  `hobby` text NOT NULL,
  `genre` text NOT NULL,
  `wisata` text NOT NULL,
  `tgl_lahir` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_mahasiswa`
--

INSERT INTO `tb_mahasiswa` (`nim`, `nama_depan`, `nama_belakang`, `email`, `kelas`, `hobby`, `genre`, `wisata`, `tgl_lahir`) VALUES
('6701171017', 'Gagas Putra', 'Persada', 'gagasputra01@gmail.com', 'D3SI-41-01', 'Makan, Minum, Futsal', 'Anime, Action', 'Bali, Jakarta, Tanjung Selor', '2018-10-01'),
('6701171118', 'Dida', 'Pradana', 'didapradana01@gmail.com', 'D3SI-41-01', 'Makan, Minum, Futsal', 'Anime, Action, Drama', 'Jakarta, Lombok, Tanjung Selor', '2018-10-02'),
('6701174009', 'Manusio', 'Orang', 'manusio@gmail.com', 'D3MI-41-01', 'Makan, Minum, Futsal', 'Anime, Action, Drama', 'Jakarta, Lombok, Tanjung Selor', '2018-11-05'),
('6701174085', 'Muhammad Irvin', 'Naufal', 'irvin@gmail.com', 'D3SI-41-01', 'Makan, Minum, Futsal', 'Anime, Action, Drama', 'Jakarta, Lombok, Tanjung Selor', '2018-10-29'),
('6701174099', 'Zahid Musthofainal', 'Akhyar', 'zahidakhyar@gmail.com', 'D3SI-41-01', 'Makan, Minum, Basket', 'Anime, Action', 'Bali, Jakarta', '2000-01-01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_account`
--
ALTER TABLE `tb_account`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_mahasiswa`
--
ALTER TABLE `tb_mahasiswa`
  ADD PRIMARY KEY (`nim`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_account`
--
ALTER TABLE `tb_account`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
