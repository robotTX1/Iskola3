-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Gép: 127.0.0.1
-- Létrehozás ideje: 2022. Már 18. 12:58
-- Kiszolgáló verziója: 10.4.22-MariaDB
-- PHP verzió: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Adatbázis: `diafilm`
--

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `kiado`
--

CREATE TABLE `kiado` (
  `id` int(11) NOT NULL,
  `nev` varchar(48) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- A tábla adatainak kiíratása `kiado`
--

INSERT INTO `kiado` (`id`, `nev`) VALUES
(1, 'Magyar Diafilmgyártó Vállalat'),
(2, 'Diafilmgyártó Kft'),
(3, 'Magyar Könyvkereskedelmi Vállalat'),
(4, 'Medicina Film'),
(5, 'Wspólna Sprawa Fotó és Diafilm Vállalat'),
(6, 'Medicina Könyvkiadó'),
(7, 'Magyar Fotó Dia-osztálya'),
(8, 'Állami Biztosító'),
(9, 'Egészségügyi Felvilágosító Központ'),
(10, 'Szövetkezetek Országos Szövetsége'),
(11, 'Filmtrade'),
(12, 'Magyar Szinkron és Videó Vállalat'),
(13, 'Horizont Könyv- Lap- és Zeneműterjesztő Vállalat'),
(14, 'Játéktervező Intézet'),
(15, 'Ecclesia Szövetkezet'),
(16, 'Népművelési Minisztérium'),
(17, 'Állami Könyvterjesztő Vállalat');

--
-- Indexek a kiírt táblákhoz
--

--
-- A tábla indexei `kiado`
--
ALTER TABLE `kiado`
  ADD PRIMARY KEY (`id`);

--
-- A kiírt táblák AUTO_INCREMENT értéke
--

--
-- AUTO_INCREMENT a táblához `kiado`
--
ALTER TABLE `kiado`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
