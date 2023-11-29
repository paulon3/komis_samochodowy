-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 25, 2023 at 03:46 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `komis`
--

-- --------------------------------------------------------

--
-- Table structure for table `auta`
--

CREATE TABLE `auta` (
  `ID_auta` int(11) NOT NULL,
  `marka` text CHARACTER SET utf8 COLLATE utf8_polish_ci NOT NULL,
  `model` text CHARACTER SET utf8 COLLATE utf8_polish_ci NOT NULL,
  `cena` int(11) NOT NULL,
  `przebieg` int(11) NOT NULL,
  `ID_klienta` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Dumping data for table `auta`
--

INSERT INTO `auta` (`ID_auta`, `marka`, `model`, `cena`, `przebieg`, `ID_klienta`) VALUES
(1, 'Opel', 'Vectra', 7400, 330000, 4),
(2, 'Opel', 'Astra', 6400, 330000, 4),
(3, 'BMW', 'E36', 4200, 270000, 1);

-- --------------------------------------------------------

--
-- Table structure for table `uzytkowicy`
--

CREATE TABLE `uzytkowicy` (
  `ID_user` int(11) NOT NULL,
  `nazwisko` text CHARACTER SET utf8 COLLATE utf8_polish_ci NOT NULL,
  `imie` text CHARACTER SET utf8 COLLATE utf8_polish_ci NOT NULL,
  `log_in` text CHARACTER SET utf8 COLLATE utf8_polish_ci NOT NULL,
  `haslo` text CHARACTER SET utf8 COLLATE utf8_polish_ci NOT NULL,
  `wartosc_transakcji` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Dumping data for table `uzytkowicy`
--

INSERT INTO `uzytkowicy` (`ID_user`, `nazwisko`, `imie`, `log_in`, `haslo`, `wartosc_transakcji`) VALUES
(1, 'adamiak', 'adam', 'admin', 'admin', 0),
(3, 'Jankowski', 'Jan', 'janik', 'janik', 0),
(4, 'Jankowski', 'Jan', 'janik', 'janik', 0),
(5, 'Kacz', 'Bronisław', 'user', '1234', 0),
(6, 'Kotowicz', 'Janusz', 'user01', 'qwerty', 0),
(7, 'Kubiszyn', 'Piotr', 'asdfgh', 'asdfgh', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `auta`
--
ALTER TABLE `auta`
  ADD PRIMARY KEY (`ID_auta`);

--
-- Indexes for table `uzytkowicy`
--
ALTER TABLE `uzytkowicy`
  ADD PRIMARY KEY (`ID_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `auta`
--
ALTER TABLE `auta`
  MODIFY `ID_auta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `uzytkowicy`
--
ALTER TABLE `uzytkowicy`
  MODIFY `ID_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
