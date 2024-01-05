-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 05, 2024 at 11:15 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_starbucks_2`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id_about` int(11) NOT NULL,
  `about_name` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id_about`, `about_name`) VALUES
(2, 'Our story begins in 1971 along the cobblestone streets of Seattles historic Pike Place Market.');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id_gallery` int(11) NOT NULL,
  `gallery_image` varchar(100) DEFAULT NULL,
  `gallery_kategori` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id_gallery`, `gallery_image`, `gallery_kategori`) VALUES
(2, 'portofolio-1.jpg', 'Ice'),
(5, '1673349730_f153ac90e0d22a3390f1.jpg', 'Hot'),
(6, '1673355244_7cc9db138ae758724c22.jpg', 'Hot');

-- --------------------------------------------------------

--
-- Table structure for table `new_product`
--

CREATE TABLE `new_product` (
  `id_new_product` int(11) NOT NULL,
  `new_product_name` varchar(255) DEFAULT NULL,
  `new_product_price` int(20) DEFAULT NULL,
  `new_product_description` text,
  `new_product_image` varchar(255) DEFAULT NULL,
  `new_product_status` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `new_product`
--

INSERT INTO `new_product` (`id_new_product`, `new_product_name`, `new_product_price`, `new_product_description`, `new_product_image`, `new_product_status`) VALUES
(11, 'Chase happy things', 2, 'Our Caramel Ribbon Cruch and Macha Cookie Crumble Frappucino blended beverages are made for summer fun', 'drinks-1.jpg', 'one'),
(17, 'Salted Caramel Cream Cold Brew', 2, 'Our savory-meets-sweet refreasing beverage certain to delight: our signature, super-smooth cold brew, sweetened with a touch of caramel and topped with a salted, rich cold foam', '1673349688_20acfb2fe18a127501b8.jpg', 'second');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id_product` int(11) NOT NULL,
  `product_name` varchar(255) DEFAULT NULL,
  `product_price` int(11) DEFAULT NULL,
  `product_image` varchar(255) DEFAULT NULL,
  `product_description` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id_product`, `product_name`, `product_price`, `product_image`, `product_description`) VALUES
(11, 'Americano', 2, 'americano.jpg', 'Minuman Pelepas Dahaga'),
(13, 'Frappucino', 2, 'frappucino.jpg', NULL),
(14, 'Asian Dolce Latte', 3, 'asian-dolce-latte.jpg', NULL),
(15, 'Black Tea', 1, 'black-tea.jpg', NULL),
(16, 'Iced Shaked Hibicus Tea', 2, 'iced-shaked-hibicus-tea.jpg', NULL),
(17, 'Star Drink', 1, 'star-drink.jpg', NULL),
(18, 'Vanilla Latte', 2, 'vanilla-latte.jpg', NULL),
(19, 'Purple Drink', 2, 'purple-drink.jpg', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `values`
--

CREATE TABLE `values` (
  `id_values` int(11) NOT NULL,
  `values_name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `values`
--

INSERT INTO `values` (`id_values`, `values_name`) VALUES
(2, 'Creating a culture of warmth and belonging, where everyone is welcome.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id_about`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id_gallery`);

--
-- Indexes for table `new_product`
--
ALTER TABLE `new_product`
  ADD PRIMARY KEY (`id_new_product`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id_product`);

--
-- Indexes for table `values`
--
ALTER TABLE `values`
  ADD PRIMARY KEY (`id_values`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id_about` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id_gallery` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `new_product`
--
ALTER TABLE `new_product`
  MODIFY `id_new_product` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id_product` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `values`
--
ALTER TABLE `values`
  MODIFY `id_values` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
