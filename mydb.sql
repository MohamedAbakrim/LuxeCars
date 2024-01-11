-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 11, 2024 at 01:42 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mydb`
--

-- --------------------------------------------------------

--
-- Table structure for table `cars`
--

CREATE TABLE `cars` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `price` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cars`
--

INSERT INTO `cars` (`id`, `name`, `price`) VALUES
(1, 'car1', 100000),
(2, 'car2', 20000),
(3, 'car3', 47802000),
(4, 'car4', 3000000),
(5, 'car5', 780000),
(6, 'car6', 8290000);

-- --------------------------------------------------------

--
-- Table structure for table `commandes`
--

CREATE TABLE `commandes` (
  `id` int(11) NOT NULL,
  `idCar` int(11) NOT NULL,
  `nameCar` varchar(30) NOT NULL,
  `price` double NOT NULL,
  `idUser` int(11) NOT NULL,
  `current` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `commandes`
--

INSERT INTO `commandes` (`id`, `idCar`, `nameCar`, `price`, `idUser`, `current`) VALUES
(26, 1, 'car1', 100000, 1, '2024-01-11 00:00:00'),
(27, 2, 'car2', 20000, 1, '2024-01-11 00:00:00'),
(28, 5, 'car5', 780000, 1, '2024-01-11 00:00:00'),
(29, 4, 'car4', 3000000, 1, '2024-01-11 11:52:25'),
(30, 3, 'car3', 47802000, 1, '2024-01-11 12:13:35'),
(31, 2, 'car2', 20000, 1, '2024-01-11 12:14:35'),
(32, 3, 'car3', 47802000, 1, '2024-01-11 12:20:40'),
(33, 2, 'car2', 20000, 1, '2024-01-11 12:20:55'),
(34, 1, 'car1', 100000, 3, '2024-01-11 12:57:38'),
(35, 2, 'car2', 20000, 1, '2024-01-11 12:58:37'),
(36, 2, 'car2', 20000, 1, '2024-01-11 13:03:09'),
(37, 1, 'car1', 100000, 1, '2024-01-11 13:06:49'),
(38, 2, 'car2', 20000, 1, '2024-01-11 13:07:13'),
(39, 3, 'car3', 47802000, 1, '2024-01-11 13:07:44'),
(40, 3, 'car3', 47802000, 1, '2024-01-11 13:08:40');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `firstName` varchar(30) NOT NULL,
  `lastName` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstName`, `lastName`, `email`, `username`, `password`) VALUES
(1, 'mohamed', 'abakrim', 'mohammedabakrim@gmail.com', 'Itachi', 'typingclub'),
(2, 'sarah ', 'berouzi', 'berouzi_sarah@gmail.com', 'ry_sarah', 'sarah'),
(3, 'aziz', 'ikiri', 'aziz@gamil.com', 'aziz', 'aziz'),
(4, 'cmd', 'py', 'cmdpy2@gmail.com', 'cmdpy', 'typingclub'),
(10, 'tt', 'ss', 'ttss@gmail.com', 'ttss', 'ttss');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `commandes`
--
ALTER TABLE `commandes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cars`
--
ALTER TABLE `cars`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `commandes`
--
ALTER TABLE `commandes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
