-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 26, 2017 at 09:47 AM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sistemmaklumatsekolah`
--

-- --------------------------------------------------------

--
-- Table structure for table `maklumat_pelajar`
--

CREATE TABLE IF NOT EXISTS `maklumat_pelajar` (
  `ID_pengguna` int(100) NOT NULL,
  `NamaPengguna` varchar(50) NOT NULL,
  `Username` varchar(30) NOT NULL,
  `Password` varchar(40) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `TAkhirLogMasuk` varchar(50) NOT NULL,
  `Kategori_User` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `maklumat_pelajar`
--

INSERT INTO `maklumat_pelajar` (`ID_pengguna`, `NamaPengguna`, `Username`, `Password`, `Email`, `TAkhirLogMasuk`, `Kategori_User`) VALUES
(11, 'Aina Athirah', 'tyraz_25', '123', 'ainzaini25@gmail.com', '26.09.2017', 'Admin'),
(13, 'husna humaira', 'husna123', 'husna123', 'husna@gmail.com', '12.12.12', 'Admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `maklumat_pelajar`
--
ALTER TABLE `maklumat_pelajar`
  ADD PRIMARY KEY (`ID_pengguna`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `maklumat_pelajar`
--
ALTER TABLE `maklumat_pelajar`
  MODIFY `ID_pengguna` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
