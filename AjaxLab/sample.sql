-- phpMyAdmin SQL Dump
-- version 5.1.2
-- https://www.phpmyadmin.net/
--
-- 主機： localhost
-- 產生時間： 2023-05-31 10:06:20
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
-- 資料庫: `sample`
--

-- --------------------------------------------------------

--
-- 資料表結構 `customer`
--

CREATE TABLE `customer` (
  `CUSTID` int NOT NULL,
  `NAME` varchar(45) DEFAULT NULL,
  `ADDRESS` varchar(40) DEFAULT NULL,
  `CITY` varchar(30) DEFAULT NULL,
  `STATE` varchar(2) DEFAULT NULL,
  `ZIP` varchar(9) DEFAULT NULL,
  `AREA` int DEFAULT NULL,
  `PHONE` varchar(9) DEFAULT NULL,
  `REPID` int NOT NULL,
  `CREDITLIMIT` decimal(8,2) DEFAULT NULL,
  `COMMENTS` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- 傾印資料表的資料 `customer`
--

INSERT INTO `customer` (`CUSTID`, `NAME`, `ADDRESS`, `CITY`, `STATE`, `ZIP`, `AREA`, `PHONE`, `REPID`, `CREDITLIMIT`, `COMMENTS`) VALUES
(100, 'JOCKSPORTS', '345 VIEWRIDGE', 'BELMONT', 'CA', '96711', 415, '598-6609', 7844, '5000.00', 'Very friendly people to work with -- sales rep likes to be called Mike.'),
(101, 'TKB SPORT SHOP', '490 BOLI RD.', 'REDWOOD CITY', 'CA', '94061', 415, '368-1223', 7521, '10000.00', 'Rep called 5/8 about change in order - contact shipping.'),
(102, 'VOLLYRITE', '9722 HAMILTON', 'BURLINGAME', 'CA', '95133', 415, '644-3341', 7654, '7000.00', 'Company doing heavy promotion beginning 10/89. Prepare for large orders during\r\n winter.'),
(103, 'JUST TENNIS', 'HILLVIEW MALL', 'BURLINGAME', 'CA', '97544', 415, '677-9312', 7521, '3000.00', 'Contact rep about new line of tennis rackets.'),
(104, 'EVERY MOUNTAIN', '574 SUYYYYY RD.', 'CUPERTINO', 'CA', '93301', 408, '996-2323', 7499, '10000.00', 'Customer with high market share (23%) due to aggressive advertising.'),
(105, 'K + T SPORTS', '3476 EL PASEO', 'SANTA CLARA', 'CA', '91003', 408, '376-9966', 7844, '5000.00', 'Tends to order large amounts of merchandise at once. Accounting is considering\r\n raising their credit limit. Usually pays on time.'),
(106, 'SHAPE UP', '908 SEQUOIA', 'PALO ALTO', 'CA', '94301', 415, '364-9777', 7521, '6000.00', 'Support intensive. Orders small amounts (< 800) of merchandise at a time.'),
(107, 'WOMENS SPORTS', 'VALCO VILLAGE', 'SUNNYVALE', 'CA', '93301', 408, '967-4398', 7499, '10000.00', 'First sporting goods store geared exclusively towards women. Unusual promotion\r\nal style and very willing to take chances towards new products!'),
(108, 'NORTH WOODS HEALTH', '98 LONE PINE WAY', 'HIBBING', 'MN', '55649', 612, '566-9123', 7844, '8000.00', NULL);

-- --------------------------------------------------------

--
-- 資料表結構 `emp`
--

CREATE TABLE `emp` (
  `EMPNO` smallint NOT NULL,
  `ENAME` varchar(14) DEFAULT NULL,
  `JOB` varchar(14) DEFAULT NULL,
  `MGR` smallint DEFAULT NULL,
  `HIREDATE` date DEFAULT NULL,
  `SAL` int DEFAULT NULL,
  `COMM` int DEFAULT NULL,
  `DEPTNO` smallint DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- 傾印資料表的資料 `emp`
--

INSERT INTO `emp` (`EMPNO`, `ENAME`, `JOB`, `MGR`, `HIREDATE`, `SAL`, `COMM`, `DEPTNO`) VALUES
(7369, 'SMITH', 'salesman', 7902, '1980-10-17', 1800, 0, 30),
(7499, 'ALLEN', 'SALESMAN', 7698, '1981-02-20', 1600, 300, 30),
(7521, 'WARD', 'SALESMAN', 7698, '1981-02-22', 1250, 500, 30),
(7566, 'JONES', 'MANAGER', 7839, '1981-04-02', 3124, 0, 20),
(7654, 'MARTIN', 'SALESMAN', 7698, '1981-09-28', 1250, 1400, 30),
(7698, 'BLAKE', 'MANAGER', 7839, '1981-05-01', 2850, 0, 30),
(7782, 'CLARK', 'MANAGER', 7839, '1981-06-09', 2450, 0, 10),
(7788, 'SCOTT', 'ANALYST', 7566, '1982-10-09', 3150, 0, 20),
(7839, 'KING', 'PRESIDENT', NULL, '1981-11-18', 5000, 0, 10),
(7844, 'TURNER', 'SALESMAN', 7698, '1981-09-08', 1500, 0, 30),
(7876, 'ADAMS', 'CLERK', 7788, '1983-01-12', 1155, 0, 20),
(7900, 'JAMES', 'CLERK', 7698, '1981-10-03', 950, 0, 30),
(7902, 'FORD', 'ANALYST', 7566, '1981-10-03', 3150, 0, 20),
(7934, 'MILLER', 'CLERK', 7782, '1982-01-23', 1300, 0, 10);

-- --------------------------------------------------------

--
-- 資料表結構 `member`
--

CREATE TABLE `member` (
  `MEMNO` smallint NOT NULL,
  `ENAME` varchar(10) NOT NULL,
  `ADDRESS` varchar(30) DEFAULT 'CHUNGLI',
  `EMAIL` varchar(50) DEFAULT NULL,
  `TEL` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`CUSTID`);

--
-- 資料表索引 `emp`
--
ALTER TABLE `emp`
  ADD PRIMARY KEY (`EMPNO`),
  ADD KEY `FK_emp_1` (`MGR`),
  ADD KEY `IND_EMP_DEPT_JOB` (`DEPTNO`,`JOB`);

--
-- 資料表索引 `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`MEMNO`),
  ADD UNIQUE KEY `EMAIL` (`EMAIL`);

--
-- 已傾印資料表的限制式
--

--
-- 資料表的限制式 `emp`
--
ALTER TABLE `emp`
  ADD CONSTRAINT `FK_emp_1` FOREIGN KEY (`MGR`) REFERENCES `emp` (`EMPNO`),
  ADD CONSTRAINT `FK_emp_2` FOREIGN KEY (`DEPTNO`) REFERENCES `dept` (`DEPTNO`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
