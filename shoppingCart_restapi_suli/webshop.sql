-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Gép: 127.0.0.1
-- Létrehozás ideje: 2020. Dec 13. 11:32
-- Kiszolgáló verziója: 10.4.16-MariaDB
-- PHP verzió: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Adatbázis: `webshop`
--

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `customers`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `username` varchar(100) COLLATE utf8_hungarian_ci NOT NULL,
  `password` varchar(100) COLLATE utf8_hungarian_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_hungarian_ci NOT NULL,
  `phone` varchar(20) COLLATE utf8_hungarian_ci DEFAULT NULL,
  `address` varchar(100) COLLATE utf8_hungarian_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

--
-- A tábla adatainak kiíratása `customers`
--

INSERT INTO `customers` (`id`, `username`, `password`, `email`, `phone`, `address`) VALUES
(2, 'admin', '$2y$10$hhEj2.t/jEuVtjzdo.jzROeAGhF8Fm7x1/i.gCHdXs0DSLRNGbe36', 'admin@admin.admin', NULL, NULL);

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `total` int(100) NOT NULL,
  `status` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `order_items`
--

CREATE TABLE `order_items` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `category` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_hungarian_ci NOT NULL,
  `price` int(100) NOT NULL,
  `picture` varchar(100) COLLATE utf8_hungarian_ci DEFAULT NULL,
  `description` varchar(100) COLLATE utf8_hungarian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

--
-- A tábla adatainak kiíratása `products`
--

INSERT INTO `products` (`id`, `category`, `name`, `price`, `picture`, `description`) VALUES
(1, 1, 'LG P880 4X HD', 300, 'laptop.jpg', 'My first awesome phone!'),
(2, 1, 'Google Nexus 4', 400, 'laptop.jpg', 'The most awesome phone of 2013!'),
(3, 2, 'Samsung Galaxy S4', 500, 'harddrive.jpg', 'How about no?'),
(4, 3, 'Bench Shirt', 50, 'camera.jpg', 'The best shirt!'),
(5, 1, 'Lenovo Laptop', 1000, 'laptop.jpg', 'My business partner.'),
(6, 2, 'Samsung Galaxy Tab 10.1', 800, 'harddrive.jpg', 'Good tablet.'),
(7, 1, 'Spalding Watch', 100, 'laptop.jpg', 'My sports watch.'),
(8, 3, 'Sony Smart Watch', 150, 'camera.jpg', 'The coolest smart watch!'),
(9, 2, 'Huawei Y300', 600, 'harddrive.jpg', 'For testing purposes.'),
(10, 1, 'Abercrombie Lake Arnold Shirt', 60, 'laptop.jpg', 'Perfect as gift!'),
(11, 3, 'Abercrombie Allen Brook Shirt', 30, 'camera.jpg', 'Cool red shirt!'),
(12, 3, 'Another product', 660, 'camera.jpg', 'Awesome product!'),
(13, 2, 'Wallet', 10, 'harddrive.jpg', 'You can absolutely use this one!'),
(14, 3, 'Amanda Waller Shirt', 25, 'camera.jpg', 'New awesome shirt!'),
(15, 4, 'Nike Shoes for Men', 150, 'watch.jpg', 'Nike Shoes'),
(16, 4, 'Bristol Shoes', 66, 'watch.jpg', 'Awesome shoes.'),
(17, 3, 'Rolex Watch', 200, 'camera.jpg', 'Luxury watch.');

--
-- Indexek a kiírt táblákhoz
--

--
-- A tábla indexei `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- A tábla indexei `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `customer_id` (`customer_id`);

--
-- A tábla indexei `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_id` (`order_id`),
  ADD KEY `product_id` (`product_id`);

--
-- A tábla indexei `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category` (`category`);

--
-- A kiírt táblák AUTO_INCREMENT értéke
--

--
-- AUTO_INCREMENT a táblához `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT a táblához `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT a táblához `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT a táblához `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Megkötések a kiírt táblákhoz
--

--
-- Megkötések a táblához `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`id`);

--
-- Megkötések a táblához `order_items`
--
ALTER TABLE `order_items`
  ADD CONSTRAINT `order_items_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`),
  ADD CONSTRAINT `order_items_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
