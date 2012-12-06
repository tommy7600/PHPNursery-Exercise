-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Czas wygenerowania: 06 Gru 2012, 14:38
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
-- Struktura tabeli dla tabeli `role`
--

CREATE TABLE IF NOT EXISTS `role` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `description` varchar(128) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Zrzut danych tabeli `role`
--

INSERT INTO `role` (`id`, `name`, `description`) VALUES
(1, 'Administrator', 'Włada Światem'),
(2, 'Redaktor', 'Mistrz klawiatury'),
(3, 'Użytkownik', 'zwykły szary człowiek');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `role_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `postcode` varchar(6) NOT NULL,
  `pesel` varchar(11) NOT NULL,
  `phone` varchar(13) NOT NULL,
  `email` varchar(320) NOT NULL,
  `create_date` date NOT NULL,
  PRIMARY KEY (`id`),
  KEY `rola_id` (`role_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Zrzut danych tabeli `users`
--

INSERT INTO `users` (`id`, `role_id`, `name`, `lastname`, `address`, `postcode`, `pesel`, `phone`, `email`, `create_date`) VALUES
(1, 1, 'Kamil', 'Badura', 'TG', '42-600', '89010112077', '3216546', 'kb@fp.pl', '2012-12-05'),
(2, 1, 'Kamil Badura', 'Badura', 'Badura', '42-600', '89010112077', '6465934', 'badzi89@gmail.com', '2012-12-06'),
(4, 1, 'asdas', 'Badura', 'TG', '42-600', '89010112077', '6465934', 'badzi89@gmail.com', '2012-12-06');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
