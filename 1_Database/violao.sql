-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 12, 2022 at 03:42 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `violao`
--

-- --------------------------------------------------------

--
-- Table structure for table `socios`
--

CREATE TABLE `socios` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `valor` varchar(50) DEFAULT NULL,
  `ocupacao` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `socios`
--

INSERT INTO `socios` (`id`, `name`, `email`, `valor`, `ocupacao`) VALUES
(1, 'Alexandre Borin', 'xandborin@gmail.com', 'R$1500,00', 'Programador WEB'),
(2, 'João Vitor Landsmann', 'jvlandsmann27@gmail.com', 'R$1500,00', 'Programador WEB'),
(3, 'José Leoni Maciel', 'Jlmaciel@gmail.com', 'R$5000,00', 'Professor do curso Programação WEB');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `socios`
--
ALTER TABLE `socios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `socios`
--
ALTER TABLE `socios`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
