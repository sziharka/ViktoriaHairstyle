-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Gép: 127.0.0.1
-- Létrehozás ideje: 2023. Már 07. 18:45
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
-- Adatbázis: `pricelists`
--

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `pricelist`
--

CREATE TABLE `pricelist` (
  `ID` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_hungarian_ci NOT NULL,
  `price` int(11) NOT NULL,
  `Rövid` int(10) NOT NULL,
  `Félhosszú` int(10) NOT NULL,
  `Hosszú` int(10) NOT NULL,
  `F/N` varchar(10) COLLATE utf8_hungarian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

--
-- A tábla adatainak kiíratása `pricelist`
--

INSERT INTO `pricelist` (`ID`, `name`, `price`, `Rövid`, `Félhosszú`, `Hosszú`, `F/N`) VALUES
(1, 'Mosás, szárítás', 0, 3500, 4500, 5500, 'N'),
(2, 'Pakolás, Maszk', 0, 1500, 0, 0, 'N'),
(3, 'Mosás, vágás, szárítás', 0, 4800, 5500, 6500, 'N'),
(4, 'Tőfestés, szárítás', 0, 8300, 9500, 11500, 'N'),
(5, 'Tőfestés, vágás, szárítás', 0, 9500, 10500, 13000, 'N'),
(6, 'Teljes hossz festés, szárítás', 0, 0, 11000, 13500, 'N'),
(7, 'Teljes hossz festés, vágás, szárítás', 0, 0, 12000, 14500, 'N'),
(8, 'Melír, szárítás', 0, 8500, 11500, 13000, 'N'),
(9, 'Melír, vágás, szárítás', 0, 9500, 12500, 14000, 'N'),
(10, 'Festés, Melír, Vágás', 0, 10500, 13500, 16800, 'N'),
(11, 'Bőszőkítés csak tő', 0, 4000, 4000, 4000, 'N'),
(12, 'Dauer', 0, 8500, 10500, 12500, 'N'),
(13, 'Hozott anyagból, festés', 0, 2000, 2000, 2000, 'N'),
(14, 'Ombre, Balayage, Copacabana', 0, 0, 16500, 19000, 'N'),
(15, 'Hullámosítás', 0, 1000, 2000, 2500, 'N'),
(16, 'Alkalmi hullámosítás', 0, 2500, 5000, 7500, 'N'),
(17, 'Mosás, vágás, szárítás', 4000, 0, 0, 0, 'F'),
(18, 'Vágás Géppel', 3000, 0, 0, 0, 'F'),
(19, 'Vágás, szárítás géppel 5éves korig', 4000, 0, 0, 0, 'F'),
(20, '+Hajszesz, fejmasszázs', 800, 0, 0, 0, 'F');

--
-- Indexek a kiírt táblákhoz
--

--
-- A tábla indexei `pricelist`
--
ALTER TABLE `pricelist`
  ADD PRIMARY KEY (`ID`);

--
-- A kiírt táblák AUTO_INCREMENT értéke
--

--
-- AUTO_INCREMENT a táblához `pricelist`
--
ALTER TABLE `pricelist`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
