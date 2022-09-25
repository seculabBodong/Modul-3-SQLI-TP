-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 10, 2022 at 03:48 PM
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
(2, 'hooh tenan'),
(3, 'rubick\r\nkyaa>.<'),
(4, 'sorry bukan yang ini :))'),
(5, 'waifu gweh'),
(6, 'yes master'),
(7, 'mending phantom assassin ato phantom lancer ?'),
(8, 'serius bukan yang ini'),
(9, 'apakah aku data terakhir?'),
(15, '\"sepertinya\" aku terakhir'),
(22, 'NT DECK, CARI LAGI AMPE BAWAH'),
(678, '{9Un4K4N_SQ1_P4t4}');

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
(0, 'admin', '5f4dcc3b5aa765d61d8327deb882cf99', 'admin'),
(1, 'watashi', 'efedb231bcc9a37726f1145b152e3a1f', 'wibu'),
(2, 'dukun', '27e7d9365de641459965243d31d68106', 'flag'),
(3, 'rubick', 'kyaa>.<', 'Selamat'),
(4, 'chamber', '', 'Kamu'),
(5, 'nilou', '123', 'Di Tahap'),
(6, 'master', '4321', 'Akhir'),
(7, 'phantom', '', 'Gunakan'),
(8, 'anonymus', '', 'Web'),
(9, 'gigaChad', '=-=', 'Dibawah'),
(15, 'wadidaw', '', 'Untuk'),
(22, 'ntdek', '', 'Decrypt'),
(678, 'hint', '', 'https://md5decrypt.net/en/');

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
