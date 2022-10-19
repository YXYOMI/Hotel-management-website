-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- 主机： localhost
-- 生成日期： 2019-05-15 08:18:55
-- 服务器版本： 10.1.39-MariaDB
-- PHP 版本： 7.3.5
USE `scyyo1`;
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 数据库： `SunnyIsle`
--

-- --------------------------------------------------------

--
-- 表的结构 `allRoom`
--

CREATE TABLE `allRoom` (
  `roomType` int(11) DEFAULT NULL,
  `roomNum` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=ascii;

--
-- 转存表中的数据 `allRoom`
--

INSERT INTO `allRoom` (`roomType`, `roomNum`) VALUES
(1, 101),
(1, 102),
(2, 103),
(2, 104),
(3, 105),
(3, 106),
(3, 107),
(3, 108),
(2, 109),
(2, 110),
(1, 111),
(1, 112),
(4, 113),
(1, 201),
(1, 202),
(2, 203),
(2, 204),
(3, 205),
(3, 206),
(3, 207),
(3, 208),
(2, 209),
(2, 210),
(1, 211),
(1, 212),
(4, 213),
(1, 301),
(1, 302),
(2, 303),
(2, 304),
(3, 305),
(3, 306),
(3, 307),
(3, 308),
(2, 309),
(2, 310),
(1, 311),
(1, 312),
(4, 313),
(1, 401),
(1, 402),
(2, 403),
(2, 404),
(3, 405),
(3, 406),
(3, 407),
(3, 408),
(2, 409),
(2, 410),
(1, 411),
(1, 412),
(4, 413),
(1, 501),
(1, 502),
(2, 503),
(2, 504),
(3, 505),
(3, 506),
(3, 507),
(3, 508),
(2, 509),
(2, 510),
(1, 511),
(1, 512),
(4, 513),
(1, 601),
(1, 602),
(2, 603),
(2, 604),
(3, 605),
(3, 606),
(3, 607),
(3, 608),
(2, 609),
(2, 610),
(1, 611),
(1, 612),
(4, 613),
(1, 701),
(1, 702),
(2, 703),
(2, 704),
(3, 705),
(3, 706),
(3, 707),
(3, 708),
(2, 709),
(2, 710),
(1, 711),
(1, 712),
(4, 713),
(1, 801),
(1, 802),
(2, 803),
(2, 804),
(3, 805),
(3, 806),
(3, 807),
(3, 808),
(2, 809),
(2, 810),
(1, 811),
(1, 812),
(4, 813),
(1, 901),
(1, 902),
(2, 903),
(2, 904),
(3, 905),
(3, 906),
(3, 907),
(3, 908),
(2, 909),
(2, 910),
(1, 911),
(1, 912),
(4, 913),
(1, 1001),
(1, 1002),
(2, 1003),
(2, 1004),
(3, 1005),
(3, 1006),
(3, 1007),
(3, 1008),
(2, 1009),
(2, 1010),
(1, 1011),
(1, 1012),
(4, 1013);

-- --------------------------------------------------------

--
-- 表的结构 `isBooked`
--

CREATE TABLE `isBooked` (
  `roomNum` int(10) NOT NULL,
  `inDate` date NOT NULL,
  `outDate` date NOT NULL,
  `user` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=ascii;

-- --------------------------------------------------------

--
-- 表的结构 `register`
--

CREATE TABLE `register` (
  `username` varchar(20) NOT NULL,
  `pwd` varchar(20) NOT NULL,
  `pwdChe` varchar(20) NOT NULL,
  `rName` varchar(20) NOT NULL,
  `passportID` varchar(30) NOT NULL,
  `phoneNum` int(11) NOT NULL,
  `emailAdd` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=ascii;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
