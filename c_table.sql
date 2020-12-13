-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 12, 2020 at 01:51 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ci-web-lanjut`
--

-- --------------------------------------------------------

--
-- Table structure for table `c_table`
--

CREATE TABLE `c_table` (
  `id_12` int(10) NOT NULL,
  `jurusan` varchar(50) NOT NULL,
  `kelas` varchar(50) NOT NULL,
  `isi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `c_table`
--

INSERT INTO `c_table` (`id_12`, `jurusan`, `kelas`, `isi`) VALUES
(1810330011, 'ILKOM', 'B', 'WFEEW'),
(1810330012, 'RPL', 'A', 'SMDLDNSNF');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `c_table`
--
ALTER TABLE `c_table`
  ADD PRIMARY KEY (`id_12`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `c_table`
--
ALTER TABLE `c_table`
  MODIFY `id_12` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1810330013;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
