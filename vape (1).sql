-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 21, 2024 at 08:08 PM
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
('ubejd', 'ubejdaliu55@gmail.com', 'omeraliu12.', 'omeraliu12.', '');

-- --------------------------------------------------------

--
-- Table structure for table `shisha`
--

CREATE TABLE `shisha` (
  `shisha_Id` int(11) NOT NULL,
  `Emri` varchar(255) NOT NULL,
  `Pershkrim` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `cmimi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
(12, 'vape', 'asdasdsa', 'adsadsadada', 0x452d7368697368612d484153482d72656d6f766562672d707265766965772e706e67),
(13, 'ubejd', 'vapett', '23232', '');

--
-- Indexes for dumped tables
--

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
-- AUTO_INCREMENT for table `shisha`
--
ALTER TABLE `shisha`
  MODIFY `shisha_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `vape`
--
ALTER TABLE `vape`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
