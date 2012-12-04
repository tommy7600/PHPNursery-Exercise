-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Czas wygenerowania: 04 Gru 2012, 12:39
-- Wersja serwera: 5.5.27
-- Wersja PHP: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Baza danych: `zadanie_5`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `roles`
--

DROP TABLE IF EXISTS `roles`;
CREATE TABLE IF NOT EXISTS `roles` (
  `r_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `r_name` varchar(45) NOT NULL,
  `r_description` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`r_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Zrzut danych tabeli `roles`
--

INSERT INTO `roles` (`r_id`, `r_name`, `r_description`) VALUES
(1, 'Administrator', 'Full access'),
(2, 'Moderator', 'Can edit data'),
(3, 'User', 'Read only access');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `u_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `u_role_id` int(10) unsigned NOT NULL,
  `u_email` varchar(200) DEFAULT NULL,
  `u_phone` varchar(25) DEFAULT NULL,
  `u_pesel` varchar(11) DEFAULT NULL,
  `u_name` varchar(100) DEFAULT NULL,
  `u_surname` varchar(100) DEFAULT NULL,
  `u_address` varchar(250) DEFAULT NULL,
  `u_post_code` varchar(6) NOT NULL,
  `u_add_date` datetime DEFAULT NULL,
  PRIMARY KEY (`u_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=21 ;

--
-- Zrzut danych tabeli `users`
--

INSERT INTO `users` (`u_id`, `u_role_id`, `u_email`, `u_phone`, `u_pesel`, `u_name`, `u_surname`, `u_address`, `u_post_code`, `u_add_date`) VALUES
(1, 1, 'tommy@tommy.pl', '678345876', '2147483647', 'Tomek', 'Nowacki', 'aa', '42-600', '0000-00-00 00:00:00'),
(2, 1, 'tommy@tommy.pl', '678345876', '2147483647', 'Tomek', 'Nowacki', 'vv', '42-600', '0000-00-00 00:00:00'),
(18, 1, 'tt@ff.pl', '992342', '2147483647', 'wq', 'qwrq', 'tt@ff.pl', '23-234', '2012-12-04 11:11:53'),
(19, 1, 'tt@ff.pl', '42', '2147483647', 'Marcin', 'qwrq', 'tt@ff.pl', '23-234', '2012-12-04 11:16:38'),
(20, 1, 'test@test.pl', '6500234', '2147483647', 'Tomek', 'Lorenc', 'sfdsf', '23-234', '2012-12-04 12:36:31');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
