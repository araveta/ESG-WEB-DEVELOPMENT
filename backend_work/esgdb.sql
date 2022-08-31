-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 03, 2022 at 10:32 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

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
-- Table structure for table `competition`
--

CREATE TABLE `competition` (
  `id_comp` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `id_comp_cat` int(11) NOT NULL,
  `gb_link` text NOT NULL,
  `ig_link` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `competition`
--

INSERT INTO `competition` (`id_comp`, `title`, `id_comp_cat`, `gb_link`, `ig_link`) VALUES
(1, 'ESSAY', 3, 'https://bit.ly/LombaEsaiKamadiksi2022', 'https://www.instagram.com/p/CeBszNfPzkm/'),
(2, 'INOVASI IT', 2, 'https://bit.ly/GuideBookITC2021', 'https://www.instagram.com/p/CSs08boFpNL/'),
(3, 'UI/UX', 1, 'bit.ly/GuideBook_UIUXCompetition', 'https://www.instagram.com/p/CW45Vf3vgYr/');

-- --------------------------------------------------------

--
-- Table structure for table `comp_cat`
--

CREATE TABLE `comp_cat` (
  `id_comp_cat` int(11) NOT NULL,
  `cat_name` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comp_cat`
--

INSERT INTO `comp_cat` (`id_comp_cat`, `cat_name`) VALUES
(1, 'UI/UX'),
(2, 'Business Competition'),
(3, 'KTI'),
(4, 'Hackathon'),
(5, 'Desain'),
(6, 'Debat');

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
-- Table structure for table `prestasi`
--

CREATE TABLE `prestasi` (
  `id_prestasi` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `prestasi` varchar(50) NOT NULL,
  `jenis_lomba` varchar(150) NOT NULL,
  `penyelenggara` varchar(50) NOT NULL,
  `tingkat` varchar(50) NOT NULL,
  `tahun` varchar(5) NOT NULL,
  `gambar` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `prestasi`
--

INSERT INTO `prestasi` (`id_prestasi`, `nama`, `prestasi`, `jenis_lomba`, `penyelenggara`, `tingkat`, `tahun`, `gambar`) VALUES
(3, 'Yumna Zahran Ramadhan', 'Juara 1 Lomba Business Case IMPACT UBM', 'Business Case IMPACT UBM\r\n', 'Universitas Bunda Mulia', 'Nasional', '2018', 'juaralomba1.png'),
(4, 'Rafif Aqila Khanaspie', 'Juara 1 Poster', 'Championship Regeneration Search 2022\r\n', 'UKM Search Telkom', 'Universitas', '2018', 'juaralomba4.png'),
(5, 'Diandra Muhammad Lutfi', 'Juara 1', 'Business Contest Competition (BCC) 2021\r\n', 'Indonesia Millenial Connect', 'Regional', '2018', 'juaralomba2.png');

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
('erpsg', 'Gregorius Arya Panditha Wicaksana', 'aryapanditha@gmail.com', '834409af7d7bc6dbfff6302d7994f154');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id_cat`);

--
-- Indexes for table `competition`
--
ALTER TABLE `competition`
  ADD PRIMARY KEY (`id_comp`);

--
-- Indexes for table `comp_cat`
--
ALTER TABLE `comp_cat`
  ADD PRIMARY KEY (`id_comp_cat`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id_feedback`);

--
-- Indexes for table `prestasi`
--
ALTER TABLE `prestasi`
  ADD PRIMARY KEY (`id_prestasi`);

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
-- AUTO_INCREMENT for table `competition`
--
ALTER TABLE `competition`
  MODIFY `id_comp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `comp_cat`
--
ALTER TABLE `comp_cat`
  MODIFY `id_comp_cat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id_feedback` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `prestasi`
--
ALTER TABLE `prestasi`
  MODIFY `id_prestasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
