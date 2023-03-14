-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Gép: 127.0.0.1
-- Létrehozás ideje: 2023. Jan 16. 07:39
-- Kiszolgáló verziója: 10.4.24-MariaDB
-- PHP verzió: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Adatbázis: `login_system`
--

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) COLLATE utf8_hungarian_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_hungarian_ci NOT NULL,
  `password` varchar(256) COLLATE utf8_hungarian_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `role` varchar(10) COLLATE utf8_hungarian_ci NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

--
-- A tábla adatainak kiíratása `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `created_at`, `role`) VALUES
(17, '', '', '$2y$10$Pyxfg21iTQIVUPmKwxQFp.GE0IOz6tNodOoJd2RvzdPWbTo1TOGne', '2023-01-12 09:48:40', 'user'),
(18, 'PotatoMan', 'potato@gmail.com', '$2y$10$vVngZVZVgJZrLz4ufJqxE.zSk.uRseqHM.dhYJZx72ooXnCnoEpvm', '2023-01-12 09:48:49', 'user'),
(22, 'PotatoMan2', 'potato@gmail.com1', '$2y$10$J7I6gB82X9HxGyJsb4VlPu/fSACNvrD/d0zJi4BT4w8XEs58MwXTu', '2023-01-12 09:51:16', 'user'),
(26, 'PotatoMan22', 'potato@gmail.com12', '$2y$10$eFPAPqVqbyF/tUF2U374hOcLeZ0.Dfo5aQP6.oBTBRhpxGsPOvNfO', '2023-01-12 10:02:01', 'user'),
(29, 'potato', 'potato2', '$2y$10$AmWnDbUytyHwarXluBEj0eifxvzPHmFIftr/xSeWZf01c9yY/rDgS', '2023-01-16 06:37:14', 'user');

--
-- Indexek a kiírt táblákhoz
--

--
-- A tábla indexei `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- A kiírt táblák AUTO_INCREMENT értéke
--

--
-- AUTO_INCREMENT a táblához `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
