-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Machine: 127.0.0.1
-- Gegenereerd op: 07 nov 2015 om 09:50
-- Serverversie: 5.6.17
-- PHP-versie: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Databank: `test`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Gegevens worden geëxporteerd voor tabel `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `username`, `password`) VALUES
(1, 'Piet', 'jan@deboer.bl', 'jandeboer', 'jantje'),
(2, 'Piet', 'Klaassen', 'klaas', '1234'),
(3, 'Guus', 'guus@vandegarde.nl', 'guusje', '81dc9bdb52d04dc20036dbd8313ed055'),
(4, 'Guus', 'guus@vandegarde.nl', 'guusje', '81dc9bdb52d04dc20036dbd8313ed055'),
(5, 'Guus', 'guus@vandegarde.nl', 'guusje', '81dc9bdb52d04dc20036dbd8313ed055'),
(6, 'Guus', 'guus@vandegarde.nl', 'guusje', '81dc9bdb52d04dc20036dbd8313ed055'),
(7, 'Guus', 'guus@vandegarde.nl', 'guusje', '81dc9bdb52d04dc20036dbd8313ed055'),
(8, 'Guus', 'guus@vandegarde.nl', 'guusje', '81dc9bdb52d04dc20036dbd8313ed055'),
(9, 'Guus', 'guus@vandegarde.nl', 'guusje', '81dc9bdb52d04dc20036dbd8313ed055'),
(10, 'Guus', 'guus@vandegarde.nl', 'guusje', '81dc9bdb52d04dc20036dbd8313ed055'),
(11, 'Guus', 'guus@vandegarde.nl', 'guusje', '81dc9bdb52d04dc20036dbd8313ed055'),
(12, 'Guus', 'guus@vandegarde.nl', 'guusje', '81dc9bdb52d04dc20036dbd8313ed055'),
(13, 'Guus', 'guus@vandegarde.nl', 'guusje', '81dc9bdb52d04dc20036dbd8313ed055'),
(14, 'Guus', 'guus@vandegarde.nl', 'guusje', '81dc9bdb52d04dc20036dbd8313ed055'),
(15, 'Guus', 'guus@vandegarde.nl', 'guusje', '81dc9bdb52d04dc20036dbd8313ed055'),
(16, 'Guus', 'guus@vandegarde.nl', 'guusje', '81dc9bdb52d04dc20036dbd8313ed055'),
(17, 'Guus', 'guus@vandegarde.nl', 'guusje', '81dc9bdb52d04dc20036dbd8313ed055'),
(18, 'Guus', 'guus@vandegarde.nl', 'guusje', '81dc9bdb52d04dc20036dbd8313ed055'),
(19, 'Guus', 'guus@vandegarde.nl', 'guusje', '81dc9bdb52d04dc20036dbd8313ed055'),
(20, 'hein', 'hein@abc.nl', 'guus', 'guus'),
(21, 'Juffie', 'guus@vandegarde.info', 'guus', 'vandegarde');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
