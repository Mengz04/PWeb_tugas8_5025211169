-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 12, 2017 at 04:38 PM
-- Server version: 5.7.18-0ubuntu0.16.04.1
-- PHP Version: 7.0.18-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `silaturahmi`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `User` (
  `U_id` int(11) NOT NULL,
  `U_email` varchar(64) NOT NULL,
  `U_pw` varchar(64) NOT NULL,
  `U_nama` varchar(64) NOT NULL,
  `U_alamat` varchar(255) NOT NULL,
  `U_jenis_kelamin` varchar(16) NOT NULL,
  `U_agama` varchar(16) NOT NULL,
  `U_pesan` text, 
  `U_reply` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `User` (`U_id`, `U_email`, `U_pw`,  `U_nama`, `U_alamat`, `U_jenis_kelamin`, `U_agama`) VALUES
(1, 'priscilla@gmail.com', 'Priscilla123', 'Priscili Ayuliani', 'Jl. Mangga No. 3, Mataram', 'perempuan', 'Islam');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `User`
  ADD PRIMARY KEY (`U_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `User`
  MODIFY `U_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
