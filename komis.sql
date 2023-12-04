-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 04, 2023 at 09:39 PM
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
  `klient_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Dumping data for table `auta`
--

INSERT INTO `auta` (`ID_auta`, `marka`, `model`, `cena`, `przebieg`, `klient_id`) VALUES
(3, 'BMW', 'E36', 4200, 270000, 6),
(5, 'Opel', 'Astra', 23222, 123234, 8),
(7, 'Fiat', 'Punto', 4500, 210000, 8),
(9, 'VW', 'Golf 2', 6700, 233000, 1),
(10, 'Jeep', '2', 120000, 80000, 8),
(12, 'Audi', 'A6', 40000, 125000, 9),
(13, 'Renault', 'Cilo', 8000, 320000, 10),
(14, 'Łada', 'Niwa', 200000, 95000, 5),
(15, 'Opel', 'Vrctra', 12300, 120000, 1),
(16, 'VW', 'Golf 2', 12000, 123000, 4);

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
(1, 'adamiak', 'adam', 'admin', '$2y$10$VZSg5WMQ6k5OIiljwNWV7e6IUCU3b0fVSyQ3YlpEWnct7JyVpWjJa', 14034),
(4, 'Jankowski', 'Jan', 'janik', '$2y$10$WO.rzCTmlTiDFZYFAAszy..cO9/u2u2ZgBeEH.0jBuJUKlOZ/EAmi', 4150),
(5, 'Kacz', 'Bronisław', 'user', '$2y$10$NBYy8OrMdXo29wv4dOebZ.emLb0RiQPJSwp6iKyxXbgFSPi.1PZny', 12000),
(6, 'Kotowicz', 'Janusz', 'user01', '$2y$10$1fRctc.w.OrnY2VVLmWVde4Mz/kA50pCwQyN0BtfyMis.8pP5VSR2', 4200),
(8, 'Janiszyn', 'Jan', 'jano', '$2y$10$uZtJR/18oQ4ci.BvOJvY9e9DjK6zPGQo5AhTY2Bf2GQQXO/zmo7KC', 137500),
(9, 'Johnas', 'Derk', 'derk', '$2y$10$9xN/qkxQvPt7Tyoh6f.4zeN5NUGMZSTnDMRI01HiCdm/ANQcHFoH2', 123000),
(10, 'Krawczyk', 'Jan', 'janek', '$2y$10$mwFtJgE9wTNXbu81z8XgNOdHGDIpm5QnBgvo9hL8wfqb6OXCvhyvS', 13000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `auta`
--
ALTER TABLE `auta`
  ADD PRIMARY KEY (`ID_auta`),
  ADD KEY `klient_id` (`klient_id`);

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
  MODIFY `ID_auta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `uzytkowicy`
--
ALTER TABLE `uzytkowicy`
  MODIFY `ID_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `auta`
--
ALTER TABLE `auta`
  ADD CONSTRAINT `auta_ibfk_1` FOREIGN KEY (`klient_id`) REFERENCES `uzytkowicy` (`ID_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
