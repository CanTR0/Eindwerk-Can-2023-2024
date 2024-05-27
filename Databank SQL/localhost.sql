-- phpMyAdmin SQL Dump
-- version 4.0.4.2
-- http://www.phpmyadmin.net
--
-- Machine: localhost
-- Genereertijd: 27 mei 2024 om 20:01
-- Serverversie: 5.6.13
-- PHP-versie: 5.4.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Databank: `eindwerk`
--
CREATE DATABASE IF NOT EXISTS `eindwerk` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `eindwerk`;
--
-- Databank: `test`
--
CREATE DATABASE IF NOT EXISTS `test` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `test`;
--
-- Databank: `webshop`
--
CREATE DATABASE IF NOT EXISTS `webshop` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `webshop`;

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Gegevens worden uitgevoerd voor tabel `tblproducten`
--

INSERT INTO `tblproducten` (`ID`, `naam`, `omschrijving`, `prijs`, `afbeelding`) VALUES
(1, 'Frietjes', 'Krokante frietjes geserveerd met een saus naar keuze. Heerlijk knapperig en goudbruin gebakken, bereid van verse aardappelen.', 3, 'frietjes.jpg');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Gegevens worden uitgevoerd voor tabel `tblwinkelmandje`
--

INSERT INTO `tblwinkelmandje` (`ID`, `klantID`, `productID`, `aantal`) VALUES
(11, 4, 1, 1),
(12, 4, 1, 1),
(13, 1, 1, 1);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `klantID` int(11) NOT NULL AUTO_INCREMENT,
  `gebruikersnaam` varchar(20) NOT NULL,
  `paswoord` varchar(30) NOT NULL,
  PRIMARY KEY (`klantID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Gegevens worden uitgevoerd voor tabel `users`
--

INSERT INTO `users` (`klantID`, `gebruikersnaam`, `paswoord`) VALUES
(1, 'admin', 'admin'),
(4, 'azd', 'a');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
