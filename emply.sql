-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 16, 2025 at 01:40 PM
-- Server version: 10.6.22-MariaDB
-- PHP Version: 8.3.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `arprovat_emply`
--

-- --------------------------------------------------------

--
-- Table structure for table `scarchforemployer`
--

CREATE TABLE `scarchforemployer` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `img` text NOT NULL,
  `country` text NOT NULL,
  `passport` varchar(9) NOT NULL,
  `gender` text NOT NULL,
  `visa` varchar(8) NOT NULL,
  `validity` varchar(40) NOT NULL,
  `company` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `scarchforemployer`
--

INSERT INTO `scarchforemployer` (`id`, `name`, `img`, `country`, `passport`, `gender`, `visa`, `validity`, `company`) VALUES
(1, 'Ashikur Rahman Provat', 'img10808232.png', 'Bangladesh', '548962158', 'male', '12578968', '24month', 'D it'),
(2, 'AR Provat', 'img96453585.png', 'Bangladesh', '548962158', 'Male', '12585978', '1month', 'Darpana It'),
(3, 'Ashikur Rahman Provat', 'img62398158.png', 'Bangladesh', '458625484', 'option1', '45897586', 'ergfvg', 'vsf'),
(4, 'Demo', 'img14687417.jpg', 'Romania', 'E32548657', 'option1', '32561487', '24month', 'Abc'),
(5, 'fgrdg', 'img98229067.jpg', 'Romania', '456845', 'option1', '54656', 'fggtdr', 'tyr');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `scarchforemployer`
--
ALTER TABLE `scarchforemployer`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `scarchforemployer`
--
ALTER TABLE `scarchforemployer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
