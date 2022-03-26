-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 26, 2022 at 06:39 AM
-- Server version: 10.3.32-MariaDB-0ubuntu0.20.04.1
-- PHP Version: 7.3.29-1+focal

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `esgdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id_cat` int(11) NOT NULL,
  `category` varchar(50) NOT NULL,
  `year` varchar(8) NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id_cat`, `category`, `year`, `image`) VALUES
(2, 'Study Group', '2022', '1877717614tv-cabinet-interior-wall-mockup-modern-empty-room-minimal-design-3d-rendering_41470-4060.webp'),
(3, 'Sharing Alumni', '2022', '2051976344VBG WILD WEST logo.png');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id_feedback` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `feedback` text NOT NULL,
  `nim` varchar(15) NOT NULL,
  `jurusan` varchar(75) NOT NULL,
  `email` varchar(100) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id_feedback`, `nama`, `feedback`, `nim`, `jurusan`, `email`, `tanggal`) VALUES
(17, 'Panditha', 'Semangat', '1202194003', 'S1 Sistem Informasi', 'arya.panditha@gmail.com', '2022-02-25'),
(18, 'LowEloSampeKebo', 'a..', '1202190269', 'S5 Marketing', 'rizky@et.com', '2022-02-25');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(30) NOT NULL,
  `name` varchar(75) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `name`, `email`, `password`) VALUES
('erpsg', 'Gregorius Arya Panditha Wicaksana', 'aryapanditha@gmail.com', 'bef7c32c36fe722cbd0552b90025aa4f');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id_cat`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id_feedback`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id_cat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id_feedback` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
