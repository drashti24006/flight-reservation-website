-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 07, 2024 at 05:15 AM
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
-- Database: `vv`
--

-- --------------------------------------------------------

--
-- Table structure for table `dd`
--

CREATE TABLE `dd` (
  `Name` varchar(40) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Phoneno` varchar(10) NOT NULL,
  `Age` varchar(5) NOT NULL,
  `Gender` varchar(20) NOT NULL,
  `Departure` varchar(30) NOT NULL,
  `Rdate` varchar(30) NOT NULL,
  `TravelDestination` varchar(70) NOT NULL,
  `Package` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `dd`
--

INSERT INTO `dd` (`Name`, `Email`, `Phoneno`, `Age`, `Gender`, `Departure`, `Rdate`, `TravelDestination`, `Package`) VALUES
('priya', 'rs@gmai.com', '0814199501', '45', 'female', '2024-08-30T08:44', '2024-08-15T08:44', 'Kashmir,Istanbul,Paris,Bali,Dubai,Geneva,Port Blair, Rome,Santorini,Tu', 'Cheapest');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
