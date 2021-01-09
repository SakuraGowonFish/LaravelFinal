-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1:3306
-- 產生時間： 2021 年 01 月 09 日 17:24
-- 伺服器版本： 10.4.10-MariaDB
-- PHP 版本： 7.4.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `final`
--
CREATE DATABASE IF NOT EXISTS `final` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `final`;

-- --------------------------------------------------------

--
-- 資料表結構 `bill`
--

DROP TABLE IF EXISTS `bill`;
CREATE TABLE IF NOT EXISTS `bill` (
  `bill_uuid` char(36) NOT NULL,
  `bill_total` int(10) NOT NULL,
  `bill_date` datetime NOT NULL,
  PRIMARY KEY (`bill_uuid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 傾印資料表的資料 `bill`
--

INSERT INTO `bill` (`bill_uuid`, `bill_total`, `bill_date`) VALUES
('c05b4d9c-529b-11eb-8a66-309c2391d06b', 3371, '2021-01-10 00:57:26');

--
-- 觸發器 `bill`
--
DROP TRIGGER IF EXISTS `before_insert_tablename`;
DELIMITER $$
CREATE TRIGGER `before_insert_tablename` BEFORE INSERT ON `bill` FOR EACH ROW BEGIN
	  IF new.bill_uuid IS NULL THEN
		SET new.bill_uuid = uuid();
	  END IF;
	END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- 資料表結構 `cart`
--

DROP TABLE IF EXISTS `cart`;
CREATE TABLE IF NOT EXISTS `cart` (
  `id` varchar(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `num` int(11) NOT NULL,
  `cost` int(11) NOT NULL,
  `billID` char(36) NOT NULL,
  KEY `billID` (`billID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 傾印資料表的資料 `cart`
--

INSERT INTO `cart` (`id`, `name`, `num`, `cost`, `billID`) VALUES
('D1', '洗咧甲昏零酒辣', 5, 1995, 'c056e14c-529b-11eb-8a66-309c2391d06b'),
('D3', '奔向海裡別問家鄉', 2, 1376, 'c058ff85-529b-11eb-8a66-309c2391d06b');

--
-- 觸發器 `cart`
--
DROP TRIGGER IF EXISTS `before_insert_tablename1`;
DELIMITER $$
CREATE TRIGGER `before_insert_tablename1` BEFORE INSERT ON `cart` FOR EACH ROW BEGIN
	  IF new.billID IS NULL THEN
		SET new.billID = uuid();
	  END IF;
	END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- 資料表結構 `good_doll`
--

DROP TABLE IF EXISTS `good_doll`;
CREATE TABLE IF NOT EXISTS `good_doll` (
  `id` char(3) NOT NULL,
  `name` varchar(50) NOT NULL,
  `introduction` text DEFAULT NULL,
  `price` int(11) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 傾印資料表的資料 `good_doll`
--

INSERT INTO `good_doll` (`id`, `name`, `introduction`, `price`, `image`) VALUES
('D1', '洗咧甲昏零酒辣', '暗淡酒店內　悲傷誰人知　痛苦吞腹內\r\n一杯擱再來　你若有瞭解　甭問阮對叼位來', 399, '/resources/images/commodity/洗咧甲昏零酒辣.jpg'),
('D2', '洗咧甲給辣', '無聊壓力大打一下雞通體舒暢', 666, '/resources/images/commodity/洗咧甲給辣.jpg'),
('D3', '洗咧奔向海裡別問我家鄉', '奔向大海 別問我家鄉\r\n高聳古老的城牆 擋不住憂傷\r\n我奔向大海 鯊魚是否無恙\r\n肩上沉重的行囊 盛滿了惆悵', 688, '/resources/images/commodity/洗咧奔向海裡別問我家鄉.jpg'),
('D4', '洗咧給系趴里逃', '冬天來個日光浴送辣', 499, '/resources/images/commodity/洗咧給系趴里逃.jpg'),
('D5', '洗咧群聚開趴踢', '年過節大家 Let\'s go party party all night', 999, '/resources/images/commodity/洗咧群聚開趴踢.jpg'),
('D6', '洗咧跨報抓', '跟著洗咧跟上時事假一下文青', 339, '/resources/images/commodity/洗咧跨報抓.jpg');

-- --------------------------------------------------------

--
-- 資料表結構 `good_food`
--

DROP TABLE IF EXISTS `good_food`;
CREATE TABLE IF NOT EXISTS `good_food` (
  `id` char(3) NOT NULL,
  `name` varchar(50) NOT NULL,
  `introduction` text DEFAULT NULL,
  `price` int(11) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 傾印資料表的資料 `good_food`
--

INSERT INTO `good_food` (`id`, `name`, `introduction`, `price`, `image`) VALUES
('F1', '南瓜咖哩魚片', '香濃咖哩搭配新鮮魚肉，濃郁綿厚口感在您口中爆開。', 120, '/resources/images/food/南瓜咖哩魚片.jpg'),
('F2', '香煎鯧魚', '用最單純的料理方式，讓您身體無負擔。', 100, '/resources/images/food/香煎鯧魚.jpg'),
('F3', '泰式烤檸檬魚', '酸辣泰式口味與新鮮香魚的組合，讓您開胃再來一碗飯。', 120, '/resources/images/food/泰式烤檸檬魚.jpg'),
('F4', '海鮮拼盤', '來自大海的佳餚，各種海鮮任您挑選。', 200, '/resources/images/food/海鮮拼盤_1.jpg'),
('F5', '韓式大醬海鮮鍋', '來自韓國道地的風味，讓您回味無窮。', 150, '/resources/images/food/韓式大將海鮮鍋.jpg'),
('F6', '海鮮煎餅', '道地韓式風味，口中像是有大海一樣唷！', 120, '/resources/images/food/海鮮煎餅.jpg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
