-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2020-11-15 09:49:51
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
-- 資料表結構 `hobby`
--

CREATE TABLE `hobby` (
  `id` int(6) UNSIGNED NOT NULL,
  `name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 傾印資料表的資料 `hobby`
--

INSERT INTO `hobby` (`id`, `name`) VALUES
(1, '當英雄'),
(2, '打麻將'),
(3, '下圍棋'),
(4, '地下城探險'),
(5, '尋找九喇麻帶回家'),
(6, '成為海賊王'),
(7, '做長輩圖'),
(8, '實況主'),
(9, '下廚'),
(10, '當獵人'),
(11, '抬黑棺'),
(12, '包租婆獅吼功'),
(13, '考國考'),
(14, '發大財蓋摩天輪'),
(15, '扭蛋'),
(16, '打10個'),
(17, '西洋棋'),
(18, '寶可夢大師'),
(19, '釣蝦'),
(20, '練龜派氣功'),
(21, '搓螺旋丸'),
(22, '當遊戲王'),
(23, '還願'),
(24, '睡覺'),
(25, '抓猴'),
(26, '賴床不吃飯'),
(27, '水之呼吸'),
(28, '時間管理'),
(29, '多人運動'),
(30, '解除封印'),
(31, '吃'),
(32, '腰部鍛鍊'),
(33, '練習霸氣'),
(34, '聚集查克拉'),
(35, '吸貓'),
(36, '買iphone'),
(37, '用手錶射出麻醉針'),
(38, '把你阿嬤賣掉'),
(39, '跑得比音速還快'),
(40, '自殺'),
(41, '轉生到異世界'),
(42, '抓水母'),
(43, '當海星'),
(44, '過不去就填海'),
(45, '跟高+魚唱歌'),
(46, '吐口香糖'),
(47, '阿姆斯特朗回旋加速噴氣式阿姆斯特朗炮'),
(48, '刷卡'),
(49, '使出星爆氣流斬'),
(50, '豬突猛進'),
(51, '一本正經地胡說八道'),
(52, '膝蓋中箭'),
(53, '螺旋丸升天'),
(54, '咬著吐司奔跑'),
(55, '坐在靠窗倒數第二個座位'),
(56, '刷存在感'),
(57, '推克拉拉'),
(58, '知難而上，難上加難'),
(59, '用小拳拳捶死你'),
(60, '暑假最後一天才寫暑假作業'),
(61, '沒有寫興趣'),
(62, '   ');

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `hobby`
--
ALTER TABLE `hobby`
  ADD PRIMARY KEY (`id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `hobby`
--
ALTER TABLE `hobby`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
