-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 12, 2022 at 12:06 PM
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
-- Database: `pmpap`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_pengurus`
--

CREATE TABLE `data_pengurus` (
  `email` varchar(40) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `npm` int(10) NOT NULL,
  `departemen` enum('presidium','psdm','mb','kominfo','danus','sosmas') NOT NULL,
  `jabatan` enum('ketua','sekertaris','bendahara','anggota') NOT NULL,
  `prodi` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_pengurus`
--

INSERT INTO `data_pengurus` (`email`, `nama`, `npm`, `departemen`, `jabatan`, `prodi`) VALUES
('mherlypratama@gmail.com', 'M. Herly Pratama', 2015031033, 'kominfo', 'ketua', 'Teknik Elektro');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
