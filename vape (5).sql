-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 24, 2024 at 04:13 PM
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

--
-- Dumping data for table `accesories`
--

INSERT INTO `accesories` (`id`, `Emri`, `Pershkrim`, `Cmimi`, `img`) VALUES
(4, 'Shisha Poker', 'Shije e forte', '6.99$', 0x706963612e6a70672d72656d6f766562672d707265766965772e706e67),
(5, 'Shisha Cole LIMITED EDITION', '', ' 14.99$', 0x7368697368612d61636365736f697265732d72656d6f766562672d707265766965772e706e67),
(6, 'Hookah Bowl Phunnel Shisha Head', 'aliua', '20.00$', 0x3431442b59476b4d47484c2d72656d6f766562672d707265766965772e706e67),
(7, 'Hookah shisha', 'aliua', '50.00$', 0x696d616765732d72656d6f766562672d707265766965772e706e67),
(8, '1 Silicone Funnel Hookah Head Bowl', 'cccc', '', '');

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
('asdsada', 'asdasdas', 'ubejdaliu5@gmail.com', 0, 'asdasdas'),
('', '', '', 0, ''),
('', '', '', 0, ''),
('', '', '', 2147483647, '');

-- --------------------------------------------------------

--
-- Table structure for table `deals`
--

CREATE TABLE `deals` (
  `id` int(11) NOT NULL,
  `Emri` varchar(255) NOT NULL,
  `Pershkrim` varchar(255) NOT NULL,
  `img` blob NOT NULL,
  `cmimi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `deals`
--

INSERT INTO `deals` (`id`, `Emri`, `Pershkrim`, `img`, `cmimi`) VALUES
(1, 'vape', '223', 0x75362d72656d6f766562672d707265766965772e706e67, '10.00$');

-- --------------------------------------------------------

--
-- Table structure for table `e-l`
--

CREATE TABLE `el` (
  `id` int(11) DEFAULT NULL,
  `Emri` varchar(255) NOT NULL,
  `Pershkrim` varchar(255) NOT NULL,
  `img` blob NOT NULL,
  `cmimi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
('ubejd', 'ubejdaliu123@gmail.com', '12345678', '12345678', ''),
('ubejd11', 'ilmialiu1389@gmail.com', '12345678', '12345678', ''),
('ubejdaa', 'ilmialiu1389@gmail.com', '12345678', '12345678', ''),
('ilmi', 'ilmialiu22@gmail.com', '12345678', '12345678', '');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `email`) VALUES
(1, 'ubejdaliu@gmail.com'),
(2, 'ubejdaliu@gmail.com');

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
(6, 'Standard Shisha', 'Shije Cole', 'shisha 1.png', '59.99$'),
(11, 'Black shisha', '79.99$', 'shisha 2.png', '79.99$'),
(12, 'Exclusive Shisha', '87.99$', 'shisha 3.png', '87.99$'),
(13, 'Exclusive Shisha Max', '97.99$', 'shisha_4-removebg-preview.png', '97.99$'),
(14, 'ALPHA HOOKAH S', '119.98$', 'alpha-hookahssss-s-removebg-preview.png', '119.98$'),
(15, 'Cachimba Alpha Model S', '200.00$', 'download__1_ddds-removebg-preview.png', '200.00$'),
(16, 'Ocean - Kaif ', '2.323.00$', 'downloasdsadad-removebg-preview.png', '1.323.00$');

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
-- Indexes for table `deals`
--
ALTER TABLE `deals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `deals`
--
ALTER TABLE `deals`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `shisha`
--
ALTER TABLE `shisha`
  MODIFY `shisha_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `vape`
--
ALTER TABLE `vape`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
