-- phpMyAdmin SQL Dump
-- version 5.1.2
-- https://www.phpmyadmin.net/
--
-- 主機： localhost
-- 產生時間： 2023-03-29 11:28:50
-- 伺服器版本： 8.0.32
-- PHP 版本： 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫: `books`
--
CREATE DATABASE IF NOT EXISTS `books` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `books`;

-- --------------------------------------------------------

--
-- 資料表結構 `bookorder`
--

CREATE TABLE `bookorder` (
  `orderNo` int NOT NULL,
  `memNo` int UNSIGNED NOT NULL,
  `orderTime` datetime NOT NULL,
  `email` varchar(255) NOT NULL DEFAULT '',
  `payStatus` char(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 傾印資料表的資料 `bookorder`
--

INSERT INTO `bookorder` (`orderNo`, `memNo`, `orderTime`, `email`, `payStatus`) VALUES
(1, 1, '2008-10-20 00:00:00', 'i750307@iii.org.tw', '0'),
(2, 1, '2008-10-20 00:00:00', 'i750307@iii.org.tw', '0'),
(3, 1, '2012-06-17 00:00:00', 'i750307@iii.org.tw', '0'),
(4, 1, '2012-06-17 00:00:00', 'i750307@iii.org.tw', '0'),
(5, 1, '2012-06-17 00:00:00', 'i750307@iii.org.tw', '0'),
(6, 2, '2012-06-17 00:00:00', 'amy@nctu.edu.tw', '0');

-- --------------------------------------------------------

--
-- 資料表結構 `member`
--

CREATE TABLE `member` (
  `memNo` int UNSIGNED NOT NULL,
  `memName` varchar(10) DEFAULT NULL,
  `memId` varchar(8) DEFAULT NULL,
  `memPsw` varchar(8) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `sex` char(1) DEFAULT NULL,
  `birthday` date DEFAULT NULL,
  `tel` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 傾印資料表的資料 `member`
--

INSERT INTO `member` (`memNo`, `memName`, `memId`, `memPsw`, `email`, `sex`, `birthday`, `tel`) VALUES
(1, '董董', 'Sara', '111', 'i750307@iii.org.tw', '0', '1960-08-08', '03-4257383'),
(2, '婷婷', 'Amy', '111', 'amy@nctu.edu.tw', '0', '1998-01-01', '03-4257387'),
(3, '帥帥', 'Handsome', '111', 'handsome@gmail.com', '1', '1960-01-01', '0933168168');

-- --------------------------------------------------------

--
-- 資料表結構 `orderitems`
--

CREATE TABLE `orderitems` (
  `orderNo` int NOT NULL DEFAULT '0',
  `psn` int NOT NULL DEFAULT '0',
  `quantity` smallint NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 傾印資料表的資料 `orderitems`
--

INSERT INTO `orderitems` (`orderNo`, `psn`, `quantity`) VALUES
(1, 2, 1),
(1, 4, 1),
(2, 3, 17),
(2, 6, 17),
(3, 1, 21),
(3, 3, 21),
(4, 1, 321),
(4, 3, 321),
(4, 6, 321),
(5, 3, 30),
(5, 6, 30),
(6, 1, 22),
(6, 2, 22),
(6, 4, 22);

-- --------------------------------------------------------

--
-- 資料表結構 `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `psn` int NOT NULL AUTO_INCREMENT,
  `pname` varchar(30) NOT NULL DEFAULT '',
  `price` int DEFAULT NULL,
  `author` varchar(15) DEFAULT NULL,
  `pages` int DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`psn`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- 傾印資料表的資料 `products`
--

INSERT INTO `products` (`psn`, `pname`, `price`, `author`, `pages`, `image`) VALUES
(1, 'PHP4+MySQL動態網頁入門實務', 110, '馬孝瑀', 600, '1.gif'),
(2, 'Acess2000 程式設計', 600, '郭尚君', 1100, '2.gif'),
(3, 'VisualC++ 入門進階', 510, '郭尚君', 1000, '3.gif'),
(4, 'Visio5.0輕鬆學習', 200, '位元文化', 470, '4.gif'),
(5, 'PHP祕笈', 600, '董董', 600, '5.gif'),
(6, '精通VB.NET完全手冊', 850, '王小明', 750, '6.gif'),
(7, 'JavaScript大絶招', 888, '董董', 666, '7.gif');
COMMIT;

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `bookorder`
--
ALTER TABLE `bookorder`
  ADD PRIMARY KEY (`orderNo`);

--
-- 資料表索引 `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`memNo`),
  ADD UNIQUE KEY `memId` (`memId`);


--
-- 使用資料表自動遞增(AUTO_INCREMENT) `bookorder`
--
ALTER TABLE `bookorder`
  MODIFY `orderNo` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `member`
--
ALTER TABLE `member`
  MODIFY `memNo` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `product`
--


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
