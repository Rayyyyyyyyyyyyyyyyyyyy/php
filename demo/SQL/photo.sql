-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2020-11-15 09:50:19
-- 伺服器版本： 10.4.14-MariaDB
-- PHP 版本： 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `members`
--

-- --------------------------------------------------------

--
-- 資料表結構 `photo`
--

CREATE TABLE `photo` (
  `id` int(6) UNSIGNED NOT NULL,
  `name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 傾印資料表的資料 `photo`
--

INSERT INTO `photo` (`id`, `name`) VALUES
(1, '1.jpg'),
(2, '2.jpg'),
(3, '3.jpg'),
(4, '4.jpg'),
(5, '5.png'),
(6, '6.jpg'),
(7, '7.jpg'),
(8, '8.png'),
(9, '9.png'),
(10, '10.jpg'),
(11, '11.jpg'),
(12, '12.jpg'),
(13, '13.jpg'),
(14, '15.jpg'),
(15, '16.jpg'),
(16, '17.jpg'),
(17, '18.jpg'),
(18, '19.jpg'),
(19, '20.jpg'),
(20, '21.jpg'),
(21, '22.jpg'),
(22, '23.jpg'),
(23, '24.png'),
(24, '25.jpg'),
(25, '26.jpg'),
(26, '27.jpg'),
(27, '28.jpg'),
(28, '29.jpg'),
(29, '30.jpg'),
(30, '31.png'),
(31, '32.jpg'),
(32, '33.jpg'),
(33, '34.jpg'),
(34, '35.png'),
(35, '36.jpg'),
(36, '37.jpg'),
(37, '38.png'),
(38, '39.jpg'),
(39, '40.jpg'),
(40, '41.jpg'),
(41, '42.jpg'),
(42, '43.jpg'),
(43, '44.jpg'),
(44, '45.png'),
(45, '46.jpg'),
(46, '47.jpg'),
(47, '48.png'),
(48, '49.jpg'),
(49, '50.jpg'),
(50, '51.png'),
(51, '52.jpg'),
(52, '53.jpg'),
(53, '54.png'),
(54, '55.jpg'),
(55, '56.jpg'),
(56, '57.png'),
(57, '58.jpg'),
(58, '59.jpg'),
(59, '60.jpg'),
(60, '61.jpg'),
(61, '62.png'),
(62, '63.jpg'),
(63, '64.jpg'),
(64, '65.jpg'),
(65, '66.jpg'),
(66, '67.jpg'),
(67, '68.jpg'),
(68, '69.png'),
(69, '70.jpg'),
(70, '71.jpg'),
(71, '72.png'),
(72, '73.jpg'),
(73, '74.jpg'),
(74, '75.jpg'),
(75, '76.jpg'),
(76, '77.jpg'),
(77, '78.jpg'),
(78, '79.png'),
(79, '80.jpg'),
(80, '81.jpg'),
(81, '82.jpg'),
(82, '83.jpg'),
(83, '84.jpg'),
(84, '85.jpg'),
(85, '86.jpg'),
(86, '87.png'),
(87, '88.jpg'),
(88, '89.jpg'),
(89, '90.png'),
(90, '91.jpg'),
(91, '92.jpg'),
(92, '93.jpg'),
(93, '94.jpg'),
(94, '95.jpg'),
(95, '96.png'),
(96, '97.png'),
(97, '98.png'),
(98, '99.jpg'),
(99, '100.jpg'),
(100, '101.jpg'),
(101, '102.jpg'),
(102, '103.jpg'),
(103, '104.jpg'),
(104, '105.jpg'),
(105, '106.jpg'),
(106, '107.jpg'),
(107, '108.jpg'),
(108, '109.jpg'),
(109, '110.jpg'),
(110, '14.jpg'),
(111, '19.jpg'),
(112, '13.jpg'),
(113, '17.jpg'),
(114, '17.jpg'),
(115, '17.jpg'),
(116, '17.jpg'),
(117, '72.png'),
(118, '72.png'),
(119, '72.png'),
(120, '59.jpg'),
(121, '66.jpg'),
(122, '75.jpg'),
(123, '10.jpg'),
(124, '69.png'),
(125, '66.jpg'),
(126, '61.jpg'),
(127, '61.jpg'),
(128, '61.jpg'),
(129, '61.jpg'),
(130, '61.jpg'),
(131, '61.jpg'),
(132, '61.jpg'),
(133, '61.jpg'),
(134, '61.jpg'),
(135, '61.jpg'),
(136, '61.jpg'),
(137, '61.jpg'),
(138, '61.jpg');

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `photo`
--
ALTER TABLE `photo`
  ADD PRIMARY KEY (`id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `photo`
--
ALTER TABLE `photo`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=139;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
