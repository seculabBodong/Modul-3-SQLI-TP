-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 07, 2022 at 05:23 AM
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
-- Database: `modul_sqli_tp`
--

-- --------------------------------------------------------

--
-- Table structure for table `kunci`
--

CREATE TABLE `kunci` (
  `id` int(11) NOT NULL,
  `text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kunci`
--

INSERT INTO `kunci` (`id`, `text`) VALUES
(0, 'admin'),
(1, 'aku wibu aku bangga'),
(2, 'tanjirou\r\n{hooh}_ten4n'),
(3, 'rubick\r\nkyaa>.<'),
(4, 'sorry bukan yang ini :))'),
(5, 'waifu gweh'),
(6, 'yes master'),
(7, 'mending phantom assassin ato phantom lancer ?'),
(8, 'serius bukan yang ini'),
(9, 'giga chad here');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `pass` varchar(32) NOT NULL,
  `level` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `pass`, `level`) VALUES
(0, 'admin', 'c69d52b6381454f4eef0e693ab7910bd', 'admin'),
(1, 'watashi', '921a0a10f8d237646dd028c5cc1af1c6', 'wibu'),
(2, 'tanjirou', '48cf7e86ef4ea7e089a707fe33d4e52f', 'super'),
(3, 'rubick', 'kyaa>.<', ''),
(4, 'chamber', '', ''),
(5, 'nilou', '123', ''),
(6, 'master', '4321', ''),
(7, 'phantom', '', ''),
(8, 'anonymus', '', ''),
(9, 'gigaChad', '=-=', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kunci`
--
ALTER TABLE `kunci`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `kunci`
--
ALTER TABLE `kunci`
  ADD CONSTRAINT `kunci_ibfk_1` FOREIGN KEY (`id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
