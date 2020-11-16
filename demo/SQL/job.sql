-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2020-11-15 09:50:25
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
-- 資料表結構 `job`
--

CREATE TABLE `job` (
  `id` int(6) UNSIGNED NOT NULL,
  `name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 傾印資料表的資料 `job`
--

INSERT INTO `job` (`id`, `name`) VALUES
(1, '人資盜賊'),
(2, '金融刺客'),
(3, '法術行銷人員'),
(4, '搖滾遊俠'),
(5, '內褲獵人'),
(6, '音樂殺手'),
(7, '術士記者'),
(8, '川普召喚師'),
(9, '召喚師助理'),
(10, '死靈法師'),
(11, '國貿奶媽'),
(12, 'BUFF銷售員'),
(13, '行政大祭司'),
(14, '弓箭手設計'),
(15, '設計醫護官'),
(16, '工業德魯伊'),
(17, '美編槍手'),
(18, '店商狙擊手'),
(19, '武僧'),
(20, '機甲師人員'),
(21, '砲手訓練人員'),
(22, '魔法公務員'),
(23, '魔武雙修代表'),
(24, '軟體射手'),
(25, '前端魔劍士'),
(26, '後端狂戰士'),
(27, '全端角鬥士'),
(28, '網路騎手'),
(29, '超級相撲選手'),
(30, '狂熱律師'),
(31, '飛行砲灰'),
(32, '隱身獸醫'),
(33, '浪人牙醫師'),
(34, '維京人驗光師'),
(35, '診所美洲豹'),
(36, '英雄模特兒'),
(37, '禮儀主管'),
(38, '金融騎士'),
(39, '浴袍行銷人員'),
(40, '叢林醫生'),
(41, '長頭髮護理師'),
(42, '迷幻藥老師'),
(43, '狂熱記者'),
(44, '勇者'),
(45, '日風摔角手'),
(46, '客服十字軍'),
(47, '國貿人員'),
(48, '鐵龜銷售員'),
(49, '信仰主管'),
(50, '華麗設計'),
(51, '我是誰我在哪');

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `job`
--
ALTER TABLE `job`
  ADD PRIMARY KEY (`id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `job`
--
ALTER TABLE `job`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
