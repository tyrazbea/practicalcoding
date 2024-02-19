-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 13, 2017 at 04:07 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sistem_maklumat_sekolah`
--

-- --------------------------------------------------------

--
-- Table structure for table `maklumat_sekolah`
--

CREATE TABLE IF NOT EXISTS `maklumat_sekolah` (
  `ID_pengguna` int(100) NOT NULL AUTO_INCREMENT,
  `NamaSekolah` varchar(100) NOT NULL,
  `AlamatSekolah` varchar(100) NOT NULL,
  `NoTel` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  PRIMARY KEY (`ID_pengguna`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `maklumat_sekolah`
--

INSERT INTO `maklumat_sekolah` (`ID_pengguna`, `NamaSekolah`, `AlamatSekolah`, `NoTel`, `Email`) VALUES
(1, 'Kolej Vokasional Jasin', 'Kolej Vokasional Jasin 77000 Jasin Melaka', '065534568', 'kvj@gmail.com'),
(2, 'Kolej Vokasional Ampangan', 'Kolej Vokasional Ampangan 56000 Selangor', '06345678', 'kva@gmail.com'),
(3, 'kolej vokaisonal jasin', 'kvj kemendor 77000 jasin', '083237423', 'kvj@gmail.com'),
(4, 'kolej vokaisonal jasin', 'kvj kemendor 77000 jasin', '083237423', 'kvj@gmail.com'),
(5, 'kolej vokaisonal jasin', 'kvj kemendor 77000 jasin', '083237423', 'kvj@gmail.com'),
(6, '', '', '', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
