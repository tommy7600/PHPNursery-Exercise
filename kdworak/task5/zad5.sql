-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Czas wygenerowania: 10 Gru 2012, 11:17
-- Wersja serwera: 5.5.27
-- Wersja PHP: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Baza danych: `zad5`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `roles`
--

CREATE TABLE IF NOT EXISTS `roles` (
  `Role_Id` int(11) NOT NULL AUTO_INCREMENT,
  `Role_Name` text COLLATE utf8_polish_ci NOT NULL,
  `Role_Description` text COLLATE utf8_polish_ci NOT NULL,
  PRIMARY KEY (`Role_Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci AUTO_INCREMENT=4 ;

--
-- Zrzut danych tabeli `roles`
--

INSERT INTO `roles` (`Role_Id`, `Role_Name`, `Role_Description`) VALUES
(1, 'Administrator', 'Włada światem'),
(2, 'Redaktor', 'Mistrz klawiatury'),
(3, 'Użytkownik', 'Zwykły szary człowiek');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `User_Id` int(11) NOT NULL AUTO_INCREMENT,
  `User_Role` int(11) NOT NULL,
  `User_FirstName` text COLLATE utf8_polish_ci NOT NULL,
  `User_LastName` text COLLATE utf8_polish_ci NOT NULL,
  `User_Pesel` text COLLATE utf8_polish_ci NOT NULL,
  `User_Address` text COLLATE utf8_polish_ci NOT NULL,
  `User_PostalCode` text COLLATE utf8_polish_ci NOT NULL,
  `User_Phone` text COLLATE utf8_polish_ci NOT NULL,
  `User_Email` text COLLATE utf8_polish_ci NOT NULL,
  `User_CreatedDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`User_Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci AUTO_INCREMENT=3 ;

--
-- Zrzut danych tabeli `users`
--

INSERT INTO `users` (`User_Id`, `User_Role`, `User_FirstName`, `User_LastName`, `User_Pesel`, `User_Address`, `User_PostalCode`, `User_Phone`, `User_Email`, `User_CreatedDate`) VALUES
(1, 1, 'kamil', 'dw', '12345678901', 'address', '43-602', '888999000', 'uahefuha@gmail.com', '2012-12-05 08:15:58'),
(2, 1, 'kamil', 'dw', '12345678901', 'address', '43-602', '888999000', 'fthjdtjdtj@gmail.com', '2012-12-05 08:17:37');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
