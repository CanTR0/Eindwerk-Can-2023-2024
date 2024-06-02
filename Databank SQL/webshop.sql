-- phpMyAdmin SQL Dump
-- version 4.0.4.2
-- http://www.phpmyadmin.net
--
-- Machine: localhost
-- Genereertijd: 02 jun 2024 om 19:43
-- Serverversie: 5.6.13
-- PHP-versie: 5.4.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Databank: `webshop`
--
CREATE DATABASE IF NOT EXISTS `webshop` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `webshop`;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `tblbestellingen`
--

CREATE TABLE IF NOT EXISTS `tblbestellingen` (
  `bestelID` int(11) NOT NULL AUTO_INCREMENT,
  `datum` int(11) NOT NULL,
  `klantID` int(11) NOT NULL,
  `productID` int(11) NOT NULL,
  `aantal` int(11) NOT NULL,
  PRIMARY KEY (`bestelID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Gegevens worden uitgevoerd voor tabel `tblbestellingen`
--

INSERT INTO `tblbestellingen` (`bestelID`, `datum`, `klantID`, `productID`, `aantal`) VALUES
(1, 2024, 4, 1, 1);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `tblproducten`
--

CREATE TABLE IF NOT EXISTS `tblproducten` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `naam` varchar(50) NOT NULL,
  `omschrijving` longtext NOT NULL,
  `prijs` float NOT NULL,
  `afbeelding` varchar(100) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Gegevens worden uitgevoerd voor tabel `tblproducten`
--

INSERT INTO `tblproducten` (`ID`, `naam`, `omschrijving`, `prijs`, `afbeelding`) VALUES
(1, 'Frietjes', 'Krokante frietjes geserveerd met een saus naar keuze. Heerlijk knapperig en goudbruin gebakken, bereid van verse aardappelen.', 3, 'frietjes.jpg'),
(4, 'Menu''s', 'Kies uit onze diverse menu''s, inclusief frietjes en een drankje. Onze menu''s bieden een combinatie van smaken en keuzes die perfect zijn voor elke trek.', 10, 'menu.jpg'),
(5, 'Broodje kip', 'Heerlijk vers bereid broodje met sappige kip, knapperige sla, plakjes tomaat en een vleugje mayonaise. Een smakelijke traktatie voor elk moment van de dag.', 7, 'broodje_vlees.jpg'),
(6, 'Broodje vlees', 'Heerlijk vers bereid broodje met mals vlees. Knapperige sla, plakjes tomaat en een vleugje mayonaise. Een smakelijke traktatie voor elk moment van de dag.', 7, 'broodjekip.jpg'),
(7, 'Nuggets', 'Knapperige nuggets, perfect als snack of als onderdeel van een menu. Gemaakt van hoogwaardige ingredienten en gebakken tot in de perfectie, elke hap is een genot voor de smaakpapillen.', 3, 'nuggets.png');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `tblwinkelmandje`
--

CREATE TABLE IF NOT EXISTS `tblwinkelmandje` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `klantID` int(11) NOT NULL,
  `productID` int(11) NOT NULL,
  `aantal` int(11) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Gegevens worden uitgevoerd voor tabel `tblwinkelmandje`
--

INSERT INTO `tblwinkelmandje` (`ID`, `klantID`, `productID`, `aantal`) VALUES
(14, 5, 1, 1),
(15, 5, 4, 1);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `klantID` int(11) NOT NULL AUTO_INCREMENT,
  `gebruikersnaam` varchar(20) NOT NULL,
  `paswoord` varchar(30) NOT NULL,
  PRIMARY KEY (`klantID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Gegevens worden uitgevoerd voor tabel `users`
--

INSERT INTO `users` (`klantID`, `gebruikersnaam`, `paswoord`) VALUES
(1, 'admin', 'admin'),
(4, 'azd', 'a'),
(5, 'can', 'a');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
