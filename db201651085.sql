-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 20, 2017 at 01:01 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db201651085`
--

-- --------------------------------------------------------

--
-- Table structure for table `pmb_201651085`
--

CREATE TABLE `pmb_201651085` (
  `kd_pmb` int(8) NOT NULL,
  `tahun_akademik` varchar(10) NOT NULL,
  `jumlah_pmb` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pmb_201651085`
--

INSERT INTO `pmb_201651085` (`kd_pmb`, `tahun_akademik`, `jumlah_pmb`) VALUES
(1, '2010/2011', 1000),
(2, '2011/2012', 1050),
(3, '2012/2013', 1100),
(4, '2013/2014', 1005),
(5, '2014/2015', 1300),
(6, '2015/2016', 1209),
(7, '2016/2017', 1185);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pmb_201651085`
--
ALTER TABLE `pmb_201651085`
  ADD PRIMARY KEY (`kd_pmb`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pmb_201651085`
--
ALTER TABLE `pmb_201651085`
  MODIFY `kd_pmb` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
