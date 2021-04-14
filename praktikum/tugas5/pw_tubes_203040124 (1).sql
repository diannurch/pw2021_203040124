-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 14, 2021 at 08:33 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pw_tubes_203040124`
--

-- --------------------------------------------------------

--
-- Table structure for table `sepatu`
--

CREATE TABLE `sepatu` (
  `id` int(11) NOT NULL,
  `picture` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `brand` varchar(100) NOT NULL,
  `description` varchar(100) NOT NULL,
  `category` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sepatu`
--

INSERT INTO `sepatu` (`id`, `picture`, `name`, `brand`, `description`, `category`, `price`) VALUES
(1, 'foto1.png', 'Nike airforce', 'Nike', 'Material Suede, Size 38-42', 'Sneakers', 'Rp. 1.500.000'),
(2, 'foto2.png', 'Mars Smoth', 'Adian', 'Material Leather-Canvas, Size 38-42', 'Sneakers', 'Rp. 399.000'),
(3, 'foto3.png', 'Convers CT 70s Burgundy High', 'Convers', 'Material Canvas, Size 40-42', 'Sneakers', 'Rp. 650.000'),
(4, 'foto4.png', 'Sepatu Nike View', 'Nike', 'Material Leather & Textile, Size 36-41', 'Sneakers', 'Rp. 980.000'),
(5, 'foto5.png', 'Stan Smith Shoes', 'Adidas', 'Material Mesh, Size 37-42', 'Sneakers', 'Rp. 950.000'),
(6, 'foto6.png', 'Venus smoth', 'Adian', 'Material Mesh &amp; Knit, Size 36-41', 'Sneakers', 'Rp. 345.000'),
(7, 'foto7.png', 'Vans Era Comfycush', 'Vans', 'Material Canvas, Size 39-44', 'Sneakers', 'Rp. 750.000'),
(8, 'foto8.png', 'Adian High 29', 'Adian', 'Material Mesh, Size 40-43', 'Sneakers', 'Rp. 400.000'),
(9, 'foto9.png', 'Sepatu Nike Free', 'Nike', 'Material Mesh, Size 40-44', 'Sneakers', 'Rp. 950.000'),
(10, 'foto10.png', 'Vans slip on classic', 'Vans', 'Material Canvas, Size 40-44', 'Sneakers', 'Rp. 750.000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sepatu`
--
ALTER TABLE `sepatu`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sepatu`
--
ALTER TABLE `sepatu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
