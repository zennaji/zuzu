-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 09 dec 2021 om 21:58
-- Serverversie: 10.4.21-MariaDB
-- PHP-versie: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `zuzu`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `client`
--

CREATE TABLE `client` (
  `id` int(255) NOT NULL,
  `vNaam` varchar(255) NOT NULL,
  `aNaam` varchar(255) NOT NULL,
  `adres` varchar(255) NOT NULL,
  `postcode` varchar(50) NOT NULL,
  `woonplaats` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `client`
--

INSERT INTO `client` (`id`, `vNaam`, `aNaam`, `adres`, `postcode`, `woonplaats`) VALUES
(3, 'Zakaria', 'Ennaji', 'Pretoriusstraat92', '2571VH', 'Denhaag'),
(8, 'alaa', 'qatlabi', 'kqewn', 'jqwdnio', 'jenf'),
(9, 'elias', 'ennanio', 't4gbt4', '4bb', 'vvv'),
(10, 'Zakaria', 'Ennaji', 'Pretoriusstraat92', '2571VH', 'Denhaag'),
(11, '4trtew4r', 'rew', 'fsrbed', 'fsdb', 'fsdb');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `naam` varchar(255) NOT NULL,
  `hoeveelheid` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `product`
--

INSERT INTO `product` (`id`, `naam`, `hoeveelheid`) VALUES
(1, 'Nigiri', 20),
(2, 'Sashimi', 12),
(3, 'Maki', 30),
(4, 'Uramaki', 27),
(5, 'Temaki', 40);

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `client`
--
ALTER TABLE `client`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT voor een tabel `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
