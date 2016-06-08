-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 08, 2016 at 03:20 PM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 7.0.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_personal`
--
CREATE DATABASE IF NOT EXISTS `db_personal` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `db_personal`;

-- --------------------------------------------------------

--
-- Table structure for table `t_blog`
--

CREATE TABLE `t_blog` (
  `id_blog` int(9) NOT NULL,
  `main` varchar(50) NOT NULL,
  `desk` text NOT NULL,
  `foto` text NOT NULL,
  `waktu` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `author` varchar(11) NOT NULL DEFAULT 'Rahmatullah'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_blog`
--

INSERT INTO `t_blog` (`id_blog`, `main`, `desk`, `foto`, `waktu`, `author`) VALUES
(1, 'Post Blog #1', 'LOREM IPSUM DOLOR SIT AMET, CONSECTETUER ADIPISCING ELIT, SED DIAM NONUMMY NIBH EUISMOD TINCIDUNT UT LAOREET DOLORE MAGNA ALIQUAM ERAT VOLUTPAT.DOLOR IN HENDRERIT IN VULPUTATE VELIT.', '../view/images/blog-post.jpg', '2016-06-07 13:29:00', 'Rahmatullah'),
(2, 'Post Blog #2', 'LOREM IPSUM DOLOR SIT AMET, CONSECTETUER ADIPISCING ELIT, SED DIAM NONUMMY NIBH EUISMOD TINCIDUNT UT LAOREET DOLORE MAGNA ALIQUAM ERAT VOLUTPAT.DOLOR IN HENDRERIT IN VULPUTATE VELIT.', '../view/images/blog-post.jpg', '2016-06-07 13:29:26', 'Rahmatullah'),
(3, 'Post Blog #3', 'LOREM IPSUM DOLOR SIT AMET, CONSECTETUER ADIPISCING ELIT, SED DIAM NONUMMY NIBH EUISMOD TINCIDUNT UT LAOREET DOLORE MAGNA ALIQUAM ERAT VOLUTPAT.DOLOR IN HENDRERIT IN VULPUTATE VELIT.', '../view/images/blog-post.jpg', '2016-06-07 13:29:37', 'Rahmatullah');

-- --------------------------------------------------------

--
-- Table structure for table `t_contact`
--

CREATE TABLE `t_contact` (
  `id_contact` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pesan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_contact`
--

INSERT INTO `t_contact` (`id_contact`, `nama`, `email`, `pesan`) VALUES
(1, 'Rahmat', 'r@gmail.com', 'test');

-- --------------------------------------------------------

--
-- Table structure for table `t_portofolio`
--

CREATE TABLE `t_portofolio` (
  `id_portofolio` int(9) NOT NULL,
  `main` varchar(50) NOT NULL,
  `desk` text NOT NULL,
  `foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_portofolio`
--

INSERT INTO `t_portofolio` (`id_portofolio`, `main`, `desk`, `foto`) VALUES
(1, 'Product Design', 'LimeLight', '../view/images/port-pic.jpg'),
(2, 'Product Design', 'LimeLight', '../view/images/port-pic2.jpg'),
(3, 'Product Design', 'LimeLight', '../view/images/port-pic3.jpg'),
(4, 'Product Design', 'LimeLight', '../view/images/port-pic4.jpg'),
(5, 'Product Design', 'LimeLight', '../view/images/port-pic5.jpg'),
(6, 'Product Design', 'LimeLight', '../view/images/port-pic6.jpg'),
(7, 'Product Design', 'LimeLight', '../view/images/port-pic7.jpg'),
(8, 'Product Design', 'LimeLight', '../view/images/port-pic1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `t_service`
--

CREATE TABLE `t_service` (
  `id_service` int(5) NOT NULL,
  `main` varchar(30) NOT NULL,
  `desk` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_service`
--

INSERT INTO `t_service` (`id_service`, `main`, `desk`) VALUES
(1, 'WEB DEVELOPMENT', 'membuat semua jenis aplikasi berbasis website baik yang menggunakan framework ataupun tidak '),
(2, 'PRODUCT DESIGN', 'mendesain semua jenis produk maupun aplikasi seperti desain poster , desain banner dsb'),
(3, 'WEB DESIGN', 'Mendesain suatu aplikasi website baik mendesign website dari awal maupun melakukan re-design website yang telah ada');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `t_blog`
--
ALTER TABLE `t_blog`
  ADD PRIMARY KEY (`id_blog`);

--
-- Indexes for table `t_contact`
--
ALTER TABLE `t_contact`
  ADD PRIMARY KEY (`id_contact`);

--
-- Indexes for table `t_portofolio`
--
ALTER TABLE `t_portofolio`
  ADD PRIMARY KEY (`id_portofolio`);

--
-- Indexes for table `t_service`
--
ALTER TABLE `t_service`
  ADD PRIMARY KEY (`id_service`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `t_blog`
--
ALTER TABLE `t_blog`
  MODIFY `id_blog` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `t_contact`
--
ALTER TABLE `t_contact`
  MODIFY `id_contact` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `t_portofolio`
--
ALTER TABLE `t_portofolio`
  MODIFY `id_portofolio` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `t_service`
--
ALTER TABLE `t_service`
  MODIFY `id_service` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
