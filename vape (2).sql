-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 24, 2024 at 12:30 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vape`
--

-- --------------------------------------------------------

--
-- Table structure for table `accesories`
--

CREATE TABLE `accesories` (
  `id` int(11) NOT NULL,
  `Emri` varchar(255) NOT NULL,
  `Pershkrim` varchar(255) NOT NULL,
  `Cmimi` varchar(255) NOT NULL,
  `img` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `emri` varchar(255) NOT NULL,
  `mbiemri` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `nrtelefonit` int(11) NOT NULL,
  `comment` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`emri`, `mbiemri`, `email`, `nrtelefonit`, `comment`) VALUES
('asdsada', 'asdasdasd', 'ubejdaliu@gmail.com', 0, 'asdasdasda'),
('dasdasasdasda', 'asdasdad', 'sadasd', 0, 'asdadas'),
('asdsada', 'asdasdasd', 'ubejdaliu5@gmail.com', 0, 'fgddfgfg'),
('asdsada', 'asdasdas', 'ubejdaliu5@gmail.com', 0, 'asdasdas'),
('asdsada', 'asdasdas', 'ubejdaliu5@gmail.com', 0, 'asdasdas');

-- --------------------------------------------------------

--
-- Table structure for table `form`
--

CREATE TABLE `form` (
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `confirmpassword` varchar(255) NOT NULL,
  `roli` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `form`
--

INSERT INTO `form` (`name`, `email`, `pass`, `confirmpassword`, `roli`) VALUES
('ubejd', 'ubejdaliu@gmail.com', '12345678', '12345678', 'admin'),
('ilmi', 'ilmialiu@gmail.com', '12345678', '12345678', 'admin'),
('ubejd', 'ubejdaliu55@gmail.com', 'omeraliu12.', 'omeraliu12.', ''),
('ubejd', 'ubejdaliu123@gmail.com', '12345678', '12345678', ''),
('ubejd11', 'ilmialiu1389@gmail.com', '12345678', '12345678', ''),
('ubejdaa', 'ilmialiu1389@gmail.com', '12345678', '12345678', '');

-- --------------------------------------------------------

--
-- Table structure for table `shisha`
--

CREATE TABLE `shisha` (
  `shisha_ID` int(11) NOT NULL,
  `Emri` varchar(255) NOT NULL,
  `Pershkrim` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `cmimi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `shisha`
--

INSERT INTO `shisha` (`shisha_ID`, `Emri`, `Pershkrim`, `img`, `cmimi`) VALUES
(2, 'asdasd', 'adsasdasds', 'asdasdasdas', '');

-- --------------------------------------------------------

--
-- Table structure for table `vape`
--

CREATE TABLE `vape` (
  `Id` int(11) NOT NULL,
  `Emri` varchar(255) NOT NULL,
  `Pershkrim` varchar(255) NOT NULL,
  `Cmimi` varchar(255) NOT NULL,
  `img` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `vape`
--

INSERT INTO `vape` (`Id`, `Emri`, `Pershkrim`, `Cmimi`, `img`) VALUES
(3, 'asdasda', 'adsadad', 'adasdadad', 0x696a6f795f6261725f736431303030305f646973706f7361626c655f2d5f64656661756c742d72656d6f766562672d707265766965772e706e67);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accesories`
--
ALTER TABLE `accesories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shisha`
--
ALTER TABLE `shisha`
  ADD PRIMARY KEY (`shisha_ID`);

--
-- Indexes for table `vape`
--
ALTER TABLE `vape`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accesories`
--
ALTER TABLE `accesories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `shisha`
--
ALTER TABLE `shisha`
  MODIFY `shisha_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `vape`
--
ALTER TABLE `vape`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
