-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Gép: 127.0.0.1
-- Létrehozás ideje: 2020. Dec 03. 11:05
-- Kiszolgáló verziója: 10.4.11-MariaDB
-- PHP verzió: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Adatbázis: `website`
--

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `cities`
--

CREATE TABLE `cities` (
  `cid` int(11) NOT NULL,
  `Name` varchar(100) COLLATE utf8_hungarian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

--
-- A tábla adatainak kiíratása `cities`
--

INSERT INTO `cities` (`cid`, `Name`) VALUES
(1, 'Eger'),
(2, 'Budapest'),
(3, 'Szolnok');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `foods`
--

CREATE TABLE `foods` (
  `fid` int(11) NOT NULL,
  `fname` varchar(200) COLLATE utf8_hungarian_ci NOT NULL,
  `fprice` int(11) NOT NULL,
  `restid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

--
-- A tábla adatainak kiíratása `foods`
--

INSERT INTO `foods` (`fid`, `fname`, `fprice`, `restid`) VALUES
(1, 'Túrós csúsza 1', 1000, 2),
(2, 'Túrós csúsza 2', 1200, 2),
(3, 'Túróscsúsza', 1000, 2),
(4, 'Túróscsúsza', 1000, 2),
(5, 'Túróscsúsza', 1000, 2),
(6, 'Túróscsúsza', 1000, 2);

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `rendelesek`
--

CREATE TABLE `rendelesek` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `restaurantid` int(11) NOT NULL,
  `rendelesek` longtext NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `rendelesLeadas` datetime NOT NULL,
  `rendelesElkeszult` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- A tábla adatainak kiíratása `rendelesek`
--

INSERT INTO `rendelesek` (`id`, `userid`, `restaurantid`, `rendelesek`, `status`, `rendelesLeadas`, `rendelesElkeszult`) VALUES
(1, 8, 9, 'Rántott hús', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 7, 9, 'Rántott hús<br>\r\nRántott csirkemell <br>\r\nKolompér <br>\r\nTúrós csúsza', 0, '0000-00-00 00:00:00', '2020-11-26 00:00:00'),
(3, 8, 9, 'Rántott hús<br>\r\nRántott csirkemell <br>\r\nKolompér <br>\r\nTúrós csúsza', 0, '0000-00-00 00:00:00', '2020-11-26 00:07:24');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `restaurants`
--

CREATE TABLE `restaurants` (
  `id` int(11) NOT NULL,
  `name` varchar(200) COLLATE utf8_hungarian_ci NOT NULL,
  `szall_ido` int(11) NOT NULL,
  `szall_dij` int(11) NOT NULL,
  `ertekeles_ossz` int(11) NOT NULL,
  `ertekelok_szama` int(11) NOT NULL,
  `cityId` int(11) NOT NULL,
  `userid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

--
-- A tábla adatainak kiíratása `restaurants`
--

INSERT INTO `restaurants` (`id`, `name`, `szall_ido`, `szall_dij`, `ertekeles_ossz`, `ertekelok_szama`, `cityId`, `userid`) VALUES
(2, 'Első étterem', 60, 200, 100, 2, 1, 8),
(3, 'Harmadik étterem', 10, 100, 1000, 100, 3, 0),
(4, 'Negyedik étterem', 10, 100, 1000, 100, 3, 0),
(5, 'Ötödik étterem', 10, 100, 1000, 100, 3, 0),
(6, 'Hatodik étterem', 10, 100, 1000, 100, 1, 0);

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `users`
--

CREATE TABLE `users` (
  `id` int(60) NOT NULL,
  `username` varchar(200) COLLATE utf8_hungarian_ci NOT NULL,
  `email` varchar(200) COLLATE utf8_hungarian_ci NOT NULL,
  `password` varchar(200) COLLATE utf8_hungarian_ci NOT NULL,
  `flags` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

--
-- A tábla adatainak kiíratása `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `flags`) VALUES
(7, 'egyjatekos0204', 'egyjatekos0204@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 10),
(8, 'user', 'user@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 0),
(9, 'etterem', 'etterem@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 3);

--
-- Indexek a kiírt táblákhoz
--

--
-- A tábla indexei `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`cid`);

--
-- A tábla indexei `foods`
--
ALTER TABLE `foods`
  ADD PRIMARY KEY (`fid`);

--
-- A tábla indexei `rendelesek`
--
ALTER TABLE `rendelesek`
  ADD PRIMARY KEY (`id`);

--
-- A tábla indexei `restaurants`
--
ALTER TABLE `restaurants`
  ADD PRIMARY KEY (`id`);

--
-- A tábla indexei `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- A kiírt táblák AUTO_INCREMENT értéke
--

--
-- AUTO_INCREMENT a táblához `cities`
--
ALTER TABLE `cities`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT a táblához `foods`
--
ALTER TABLE `foods`
  MODIFY `fid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT a táblához `rendelesek`
--
ALTER TABLE `rendelesek`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT a táblához `restaurants`
--
ALTER TABLE `restaurants`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT a táblához `users`
--
ALTER TABLE `users`
  MODIFY `id` int(60) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
