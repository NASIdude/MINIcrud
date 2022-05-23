-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 22 apr 2022 om 18:38
-- Serverversie: 10.4.22-MariaDB
-- PHP-versie: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `minicrud`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `account`
--

CREATE TABLE `account` (
  `id` int(11) NOT NULL,
  `gebruiker` varchar(24) NOT NULL,
  `wachtwoord` varchar(24) NOT NULL,
  `mail` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `account`
--

INSERT INTO `account` (`id`, `gebruiker`, `wachtwoord`, `mail`) VALUES
(1, 'admin', 'admin', 'admin@gmail.com'),
(4, 'werknemer', 'werknemer', 'werknemer1@gmail.com\r\n');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `contact`
--

CREATE TABLE `contact` (
  `id-contact` int(11) NOT NULL,
  `naam` varchar(255) NOT NULL,
  `land` varchar(255) NOT NULL,
  `bericht` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `contact`
--

INSERT INTO `contact` (`id-contact`, `naam`, `land`, `bericht`) VALUES
(1, 'Dikke jan1', 'nederland', 'Ik ben dikke jan 1, ben een grote fan Ling Ling\'s Pizzeria. Dit is de beste website ooit.'),
(2, 'banaan', '', 'banaan is een fruit\r\n'),
(3, 'Ding dong', '', 'oiefoiewfiowenof'),
(4, 'poep', '', 'poep is bruin'),
(5, 'poep', '', 'poep is bruin'),
(6, 'poep', '', 'poep is bruin'),
(7, 'as', '', 'as'),
(8, 'as', '', 'as'),
(9, 'pietje boos', '', 'ben heel boos, slechte pizza'),
(10, 'sus', 'Susland', 'very sus'),
(11, 'sus', 'The Skeld', 'sussy baka'),
(12, 'sus', 'The Skeld', 'sussy baka'),
(13, 'frtuiker', 'Nederland', 'ik weet niet wat dat is'),
(14, 'kaas', 'POep', 'Dit is een lekker eet'),
(15, 'kale poes', 'Belgie', 'poes die kaal is heeft het vast koud');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `naam` varchar(255) NOT NULL,
  `beschrijving` text NOT NULL,
  `prijs` double(25,2) NOT NULL,
  `categorie` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `menu`
--

INSERT INTO `menu` (`id`, `naam`, `beschrijving`, `prijs`, `categorie`) VALUES
(1, 'Pizza Margherita', 'Onze goedkoopste en lekkerste margherita pizza van heel Nederland!', 7.49, 'Pizza'),
(2, 'Pizza Mozarella', 'Pizza Mozarella met verse mozarella elke dag die vers geïmporteerd wordt van Italië', 7.99, 'Pizza'),
(3, 'Pizza Funghi', 'Gemaakt met verse ingrediënten, verse vis vanuit Japan geïmporteerd.', 8.49, 'Pizza'),
(4, 'Coca Cola', 'De koudste Coca Cola die u zal drinken. ', 2.49, 'Drinken'),
(5, 'Bier', 'De lekkerste en verste bier gemaakt in onze keuken.', 3.99, 'Drinken'),
(6, 'Water', 'Verse water vers geïmporteerd vanuit België.', 3.49, 'Drinken'),
(7, 'Kipcorn', 'Verse en lekkere kipcorn.', 4.99, 'Snacks'),
(8, 'Kroket', 'De lekkerste kroket van de wereld.', 4.59, 'Snacks'),
(9, 'Bitterballen', 'De lekkerste, verste en beste bitterballen  die je ooit zal proefen.', 4.49, 'Snacks');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id-contact`);

--
-- Indexen voor tabel `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `account`
--
ALTER TABLE `account`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT voor een tabel `contact`
--
ALTER TABLE `contact`
  MODIFY `id-contact` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT voor een tabel `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
