-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 21, 2024 at 09:25 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `contoare`
--

CREATE TABLE `contoare` (
  `Id` int(11) NOT NULL,
  `Nume_contor` varchar(11) NOT NULL,
  `Serie` int(11) NOT NULL,
  `Serie2` int(11) NOT NULL,
  `Created_at` datetime NOT NULL,
  `Updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `contoare`
--

INSERT INTO `contoare` (`Id`, `Nume_contor`, `Serie`, `Serie2`, `Created_at`, `Updated_at`) VALUES
(1, 'darius', 0, 0, '2024-03-11 17:46:02', '2024-03-21 14:38:28'),
(2, 'marius', 24, 0, '2024-03-11 17:46:23', '2024-03-11 16:46:23'),
(3, 'darius', 14251, 2147483647, '2024-03-19 14:01:38', '2024-03-21 14:46:51'),
(4, 'n-are nume', 987654321, 1234567890, '2024-03-21 16:02:51', '2024-03-21 15:02:51'),
(5, 'n-am bani', 1, 0, '2024-03-21 16:31:44', '2024-03-21 15:36:43');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `User Id` int(11) NOT NULL,
  `Username` varchar(250) NOT NULL,
  `Nume` varchar(250) NOT NULL,
  `Prenume` varchar(250) NOT NULL,
  `Email` varchar(250) NOT NULL,
  `Telefon` varchar(11) NOT NULL,
  `Created_at` datetime(6) NOT NULL,
  `Updated_at` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`User Id`, `Username`, `Nume`, `Prenume`, `Email`, `Telefon`, `Created_at`, `Updated_at`) VALUES
(18, 'petrutdarius', 'petrut', 'Darius', 'eminoviciidarius@gmail.com', '0752 096 36', '2024-03-11 16:01:18.000000', '2024-03-11 15:01:18.944686'),
(29, 'alesorlea', 'Sorlea', 'Alexandra', 'eminoviciidarius@gmail.com', '0752 096 36', '2024-03-19 14:38:58.000000', '2024-03-19 13:38:58.578637'),
(57, 'Dragos', 'Mercurean', 'Dragos', 'dragosfraieru@gmail.com', '0752 096 36', '2024-03-21 16:29:57.000000', '2024-03-21 15:29:57.514119');

-- --------------------------------------------------------

--
-- Table structure for table `valorii`
--

CREATE TABLE `valorii` (
  `Id` int(11) NOT NULL,
  `Nume_contor` varchar(250) NOT NULL,
  `valoare` int(11) NOT NULL,
  `link_poza` varchar(250) NOT NULL,
  `Created_at` datetime(6) NOT NULL,
  `Updated_at` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `valorii`
--

INSERT INTO `valorii` (`Id`, `Nume_contor`, `valoare`, `link_poza`, `Created_at`, `Updated_at`) VALUES
(2, '1', 78, 'https://www.youtube.com/watch?v=cf_mQexwjFM&t=1s', '2024-03-21 15:45:43.000000', '2024-03-21 14:45:43.095929'),
(3, '3', 213, 'https://www.youtube.com/watch?v=cf_mQexwjFM&t=1s', '2024-03-21 15:45:56.000000', '2024-03-21 14:45:56.233346'),
(4, '4', 260408, 'https://www.instagram.com/cristiana.ginta/', '2024-03-21 16:03:49.000000', '2024-03-21 15:03:49.195718'),
(5, '5', 0, 'https://www.instagram.com/dragos_761/', '2024-03-21 16:34:31.000000', '2024-03-21 15:34:31.680057');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contoare`
--
ALTER TABLE `contoare`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`User Id`);

--
-- Indexes for table `valorii`
--
ALTER TABLE `valorii`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contoare`
--
ALTER TABLE `contoare`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `User Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `valorii`
--
ALTER TABLE `valorii`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
