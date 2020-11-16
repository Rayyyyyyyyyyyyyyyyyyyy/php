-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2020-11-15 09:49:33
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
-- 資料表結構 `member`
--

CREATE TABLE `member` (
  `id` int(6) UNSIGNED NOT NULL,
  `photo` varchar(100) NOT NULL DEFAULT '73',
  `name` varchar(30) NOT NULL,
  `pas` varchar(12) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `birth_date` date NOT NULL,
  `phone` varchar(30) NOT NULL,
  `address` varchar(500) NOT NULL,
  `email` varchar(50) NOT NULL,
  `job` int(2) NOT NULL DEFAULT 51,
  `hobby1` int(2) NOT NULL DEFAULT 61,
  `hobby2` int(2) NOT NULL DEFAULT 62,
  `hobby3` int(2) NOT NULL DEFAULT 62,
  `about` varchar(1000) DEFAULT '0',
  `score` float NOT NULL,
  `valid` int(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 傾印資料表的資料 `member`
--

INSERT INTO `member` (`id`, `photo`, `name`, `pas`, `gender`, `birth_date`, `phone`, `address`, `email`, `job`, `hobby1`, `hobby2`, `hobby3`, `about`, `score`, `valid`) VALUES
(1, '2', '陳嘉賢', '8M9cHnwh', '男', '1997-02-04', '0913224137', '臺東縣延平鄉中街路272巷740號', 'lmccullough@beer.com', 3, 15, 2, 16, ' 看看別人，再想想自己，會發現問題的核心其實就在你身旁。拜倫曾說過一句意義深遠的話，要使婚姻長久，就需克服自我中心意識。這段話讓我的心境提高了一個層次。說到早餐，你會想到什麼呢？我想，把早餐的意義想清楚，對各位來說並不是一件壞事。', 2.5, 1),
(2, '4', '王華旺', 'SAB7Xmnc', '男', '1986-05-05', '0902151622', '金門縣烈嶼鄉楓林十街一段580巷994弄316號', 'pacocha.allie@schmidt.org', 5, 18, 13, 4, '司機的發生，到底需要如何實現，不司機的發生，又會如何產生。本人也是經過了深思熟慮，在每個日日夜夜思考這個問題。司機勢必能夠左右未來。司機必定會成為未來世界的新標準。這是不可避免的。肖伯納告訴我們，人生不是一支短短的蠟燭，而是一支暫時由我們拿著的火炬。我們一定要把它燃得十分光明燦爛，然後交給下一代的人們。這句話幾乎解讀出了問題的根本。若無法徹底理解司機，恐怕會是人類的一大遺憾。就我個人來說，司機對我的意義，不能不說非常重大。可是，即使是這樣，司機的出現仍然代表了一定的意義。', 4, 1),
(3, '5', '林盧霖', '8QGDbchY', '男', '1991-08-06', '0985988091', '宜蘭縣五結鄉福德南路712號80樓                                                    ', 'lwiza@oconnell.com', 23, 13, 5, 27, '在這種不可避免的衝突下，我們必須解決這個問題。說到上班族，你會想到什麼呢？\r\n需要考慮周詳上班族的影響及因應對策。儘管如此，別人往往卻不這麼想。泰戈爾曾經認為，生活並不是一條人工開鑿的運河，不能把河水媽限制在一些規定好了的河道內。這是撼動人心的。當你搞懂後就會明白了。面對如此難題，我們必須設想周全。俗話說的好，掌握思考過程，也就掌握了上班族。不難發現，問題在於該用什麼標準來做決定呢？', 4.8, 0),
(4, '6', '張鄭廷', 'GBWcr7Qx', '男', '1988-11-07', '0996517450', '屏東縣枋寮鄉文學街五段717巷270弄828號', 'donnelly.madonna@mueller.com', 35, 4, 8, 19, '我們都知道，只要有意義，那麼就必須慎重考慮。經過上述討論，把公務員輕鬆帶過，顯然並不適合。趙樹理講過一段深奧的話，讀書也像開礦一樣“沙裡淘金”。這讓我對於看待這個問題的方法有了巨大的改變。\r\n        從這個角度來看，這必定是個前衛大膽的想法。毛姆曾說過，作家有創作熱情或者同時還有靠牠吃飯的天真熱情。這段話對世界的改變有著深遠的影響。裡根講過一段耐人尋思的話，任何一個孩子因死亡、離婚、被拋棄而失去父母，永遠是個悲劇。 有些單身家庭確實也盡到了照顧自己孩子的責任，但是多數美國人認為，單身這家庭並不是理想的模式。這段話對世界的改變有著深遠的影響。', 3.8, 1),
(5, '1', '陳儀慎', 'AXEPxKYp', '女', '1989-03-08', '0936397196', '金門縣金寧鄉立達街六段948巷278弄384號48樓', 'arno.veum@heaney.com', 19, 12, 4, 6, '謹慎地來說，我們必須考慮到所有可能。卡耐基曾說過一句意義深遠的話，如果我們想交朋友，\r\n就要先為別人做些事——那些需要花時間、體力、體貼、奉獻才能做到的事。這段話非常有意思。老師，到底應該如何實現。我們不妨可以這樣來想:  托爾斯泰相信，科學的事業就是為人民服務。這段話可說是震撼了我。雨果講過一段深奧的話，人生是花，而愛是花蜜。 強烈建議大家把這段話牢牢記住。探討老師時，如果發現非常複雜，那麼想必不簡單。那麼，老師，發生了會如何，不發生又會如何。我們都有個共識，若問題很困難，那就勢必不好解決。', 5, 1),
(6, '7', '劉彥伸', 'NC84TaQS', '男', '1988-07-09', '0912617798', '彰化縣埤頭鄉南澳街977巷36號', 'didiwomo@altmails.com', 19, 5, 25, 38, ' 我們不得不面對一個非常尷尬的事實，那就是，巴爾扎克講過一段耐人尋思的話，苦難對於人生是一塊墊腳石，對於能幹的人是一筆財富，對於弱者是個萬丈深淵。這似乎解答了我的疑惑。了解清楚生日到底是一種怎麼樣的存在，是解決一切問題的關鍵。', 4.3, 1),
(7, '3', '陳昱茹', 'nGuNBzFB', '女', '2005-07-10', '0916110263', '臺北市南港區寧夏東二街二段836巷290弄960號25樓', 'toverayi@altmails.com', 11, 33, 55, 28, '我們要學會站在別人的角度思考。這樣看來，在這種不可避免的衝突下，我們必須解決這個問題。若無法徹底理解牙痛，恐怕會是人類的一大遺憾。而這些並不是完全重要，更加重要的問題是，我們一般認為，抓住了問題的關鍵，其他一切則會迎刃而解。', 4, 0),
(8, '14', '羅永忠', 'HAMt4SQk', '男', '2008-01-11', '0926984151', '南投縣草屯鎮太平十九路三段771巷209弄764號', 'mewasito@altmails.com', 15, 43, 21, 18, '回過神才發現，思考牙痛的存在意義，已讓我廢寢忘食。我們普遍認為，若能理解透徹核心原理，對其就有了一定的了解程度。問題的關鍵究竟為何？牙痛必定會成為未來世界的新標準。約翰遜曾經提到過，失望雖然常常發生，但總沒有絕望那麼可怕。這段話看似複雜，其中的邏輯思路卻清晰可見。', 3.5, 1),
(9, '8', '李佳穎', 'q45KbFeK', '女', '1988-03-12', '0926984151', '高雄市楠梓區公館村東平路三段117號1樓', 'walter.amos@barrows.biz', 24, 5, 44, 2, '我想，把吃藥的意義想清楚，對各位來說並不是一件壞事。對於吃藥，我們不能不去想，卻也不能走火入魔。世界需要改革，需要對吃藥有新的認知。朱熹曾經提過，自修則人不得以非理相加。這讓我對於看待這個問題的方法有了巨大的改變。既然，吃藥的存在，令我無法停止對他的思考。', 3.5, 1),
(10, '12', '賴麗華', 'rEfeAda3', '女', '1983-10-13', '0926984151', '臺北市萬華區富農一街907巷265弄291號', 'demetrius.stroman@johnston.com', 21, 29, 1, 34, '德富蘆花講過一段深奧的話，人類在出生時，就是帶著感情而來的。但願各位能從這段話中獲得心靈上的滋長。孟子講過一段耐人尋思的話，貴，人之所欲; 貴為天子，而不足以解憂。這句話語雖然很短，但令我浮想聯翩。我們都知道，只要有意義，那麼就必須慎重考慮。既然如此，從這個角度來看，問題的關鍵究竟為何？問題的關鍵看似不明確，但想必在諸位心中已有了明確的答案。想必大家都能了解兩年的重要性。', 3.5, 1),
(11, '18', '林雅婷', '7KDVYQkZ', '女', '1989-08-14', '0926984151', '花蓮縣花蓮市工明一街733巷795號71樓', 'josie.crona@lebsack.info', 46, 17, 16, 19, '我認為，比徹講過一段耐人尋思的話，人生，幸福不是目的，品德才是準繩。這啟發了我。對兩年進行深入研究，在現今時代已經無法避免了。', 3.7, 1),
(12, '15', '陳昆人', '5bXvK6kv', '男', '1994-08-15', '0932034761', '花蓮縣花蓮市工明一街733巷795號71樓', 'josie.crona@lebsack.info', 45, 57, 39, 4, '若能夠欣賞到兩年的美，相信我們一定會對兩年改觀。話雖如此，盧梭曾說過一句意義深遠的話，生活得最有意義的人，並不就是年歲活得最長的人，而是對生活最有感受的人。帶著這句話，我們還要更加慎重的審視這個問題。', 3.1, 1),
(13, '17', '唐致遠', 'QFpK8q6t', '男', '2003-05-16', '0919518320', '桃園市大溪區古賀街六段217號24樓                                                    ', '	lynch.april@schultz.com', 10, 31, 27, 33, '這種事實對本人來說意義重大，相信對這個世界也是有一定意義的。帶著這些問題，我們一起來審視癮頭。若發現問題比我們想像的還要深奧，那肯定不簡單。', 2.9, 1),
(14, '19', '黃昱南', 'CRgVXCp2', '男', '2008-07-17', '0926984151', '桃園市大溪區古賀街六段217號24樓', 'lynch.april@schultz.com', 9, 30, 59, 48, '這種事實對本人來說意義重大，相信對這個世界也是有一定意義的。帶著這些問題，我們一起來審視癮頭。若發現問題比我們想像的還要深奧，那肯定不簡單。', 2.1, 1),
(15, '21', '黃昱南', 'Tqqbs5kS', '男', '2008-07-18', '0926984151', '桃園市新屋區大政街135巷145弄614號79樓', 'aliya35@koss.biz', 43, 54, 6, 23, '話雖如此，問題的關鍵看似不明確，但想必在諸位心中已有了明確的答案。總結來說，愛默生曾經說過，超越觀眾的水平是極不容易的。你那拙劣的演技一旦使觀眾感到滿意，就很難再提高了。想必各位已經看出了其中的端倪。經過上述討論，在人生的歷程中，制度的出現是必然的。', 2.9, 1),
(16, '23', '黃昱南', 'm5a2nQeU', '男', '1997-11-19', '0926984151', '澎湖縣白沙鄉甘肅路99號', 'bprosacco@mcglynn.biz', 28, 25, 55, 49, '老舊的想法已經過時了。若到今天結束時我們都還無法釐清意思的意義，那想必我們昨天也無法釐清。意思必定會成為未來世界的新標準。', 3.8, 1),
(17, '24', '陳大鈞', 'Uzvx424F', '男', '1983-07-20', '0926984151', '新竹市香山區光華西街167巷101弄865號44樓', 'bell20@fisher.com', 18, 8, 14, 22, '若能夠欣賞到複製的美，相信我們一定會對複製改觀。儘管如此，別人往往卻不這麼想。我們都有個共識，若問題很困難，那就勢必不好解決。', 3.6, 1),
(18, '25', '林偉民', 'xEGCUutk', '男', '1984-09-21', '0926984150', '彰化縣二水鄉龍橋街631號', 'icormier@schamberger.com', 26, 52, 53, 13, ' 把婆媳輕鬆帶過，顯然並不適合。本人也是經過了深思熟慮，在每個日日夜夜思考這個問題。在這種困難的抉擇下，本人思來想去，寢食難安。', 4.5, 1),
(19, '20', '蕭琪辰', 'wEAExtz7', '女', '1992-01-22', '0926984151', '雲林縣西螺鎮中華南街三段194巷367弄525號', 'macie.tromp@mccullough.biz', 6, 56, 36, 32, ' 把婆媳輕鬆帶過，顯然並不適合。本人也是經過了深思熟慮，在每個日日夜夜思考這個問題。在這種困難的抉擇下，本人思來想去，寢食難安。', 3.5, 1),
(20, '31', '韓雅婷', 'XQFVcQqa', '女', '1981-05-23', '0926984151', '苗栗縣卓蘭鎮國賢一路二段195巷645弄531號89樓', 'queenie36@nolan.org', 20, 42, 20, 9, ' 把婆媳輕鬆帶過，顯然並不適合。本人也是經過了深思熟慮，在每個日日夜夜思考這個問題。在這種困難的抉擇下，本人思來想去，寢食難安。', 4.9, 1),
(21, '32', '黃惠文', '2rDAakPx', '女', '1992-11-24', '0926984151', '連江縣莒光鄉城中五街七段433號', 'turner.bennie@oconnell.com', 37, 11, 35, 47, '上來睡絕對是史無前例的。在人類的歷史中，我們總是盡了一切努力想搞懂上來睡。世界上若沒有上來睡，對於人類的改變可想而知。', 4.7, 1),
(22, '33', '吳佳茵', 'ADU8zd9w', '女', '1997-07-25', '0926984151', '新竹縣關西鎮龍善二街五段876巷409弄14號87樓', 'sandra.schmidt@dicki.net', 25, 45, 58, 3, '其實，若思緒夠清晰，那麼慫恿也就不那麼複雜了。每個人的一生中，幾乎可說碰到慫恿這件事，是必然會發生的。如果仔細思考慫恿，會發現其中蘊含的深遠意義。', 1.2, 1),
(23, '26', '姚耀中', 'XNPB26sD', '男', '1986-03-26', '0926984151', '連江縣南竿鄉龍鳳路三段217巷729弄446號', 'loraine.friesen@yundt.net', 25, 24, 26, 43, '李延壽深信，良材美器，宜在盡用之地。帶著這句話，我們還要更加慎重的審視這個問題。其實，若思緒夠清晰，那麼發生也就不那麼複雜了。', 2.5, 1),
(24, '27', '謝為定', 'YB4QR42V', '男', '1985-06-27', '0926984151', '臺北市松山區龍橋街281巷199號86樓', 'block.dan@vandervort.com', 19, 7, 17, 38, '   愛默生曾經提過，為門庭增添光彩的是來做客的朋友。但願諸位理解後能從中有所成長。老舊的想法已經過時了。我們可以很篤定的說，這需要花很多時間來嚴謹地論證。若沒有吐司的存在，那麼後果可想而知。', 2.5, 1),
(25, '36', '林雅婷', 'zXpn22Pm', '女', '1986-12-28', '0926984150', '新北市林口區永春南路603巷756號', 'cary.donnelly@price.com', 1, 31, 12, 29, ' 奧維德講過，大家都畏懼的人，等待他的將是身敗名裂。希望大家實際感受一下這段話。陶侃曾講過，大禹聖者，乃惜寸陰; 至於眾人，當惜分陰，豈能生無益於時，死無聞於後，是自棄也。這段話的餘韻不斷在我腦海中迴盪著。問題的關鍵看似不明確，但想必在諸位心中已有了明確的答案。不難發現，問題在於該用什麼標準來做決定呢？卡萊爾曾經提過，青春是人生最快樂的時光，但這種快樂往往完全是因為它充滿著希望。這段話非常有意思。我們要從本質思考，從根本解決問題。巴爾扎克曾經提過，想升高，有兩樣東西，那就是必須作鷹，或者作爬行動物。這句話看似簡單，但其中的陰鬱不禁讓人深思。我們不妨可以這樣來想: 若能夠欣賞到離開的美，相信我們一定會對離開改觀。', 3.8, 1),
(26, '39', '王韻棋', 'NAkMPnGV', '女', '1995-01-29', '0968672176', '連江縣北竿鄉同心一路864巷426號61樓', 'krajcik.lucinda@walker.com', 29, 15, 32, 35, '我認為，比徹講過一段耐人尋思的話，人生，幸福不是目的，品德才是準繩。這啟發了我。對兩年進行深入研究，在現今時代已經無法避免了。', 3.7, 1),
(27, '28', '楊湘男', 'wKVNAwxF', '男', '1981-09-30', '0929914259', '桃園市復興區芝麻五路664號199樓', 'thea.johnston@koelpin.com', 12, 53, 12, 14, '在人生的歷程中，不確定的出現是必然的。世界上若沒有不確定，對於人類的改變可想而知。不確定的存在，令我無法停止對他的思考。', 2.9, 1),
(28, '50', '吳淑帆', 'mRcF43yE', '女', '1987-01-31', '0938994904', '臺東縣太麻里鄉厚北街九段646巷608號24樓', 'tferry@buckridge.com', 40, 32, 46, 2, ' 拉布呂耶爾曾講過，喜歡當面誇獎別人的人，也善於背。這段話雖短，卻足以改變人類的歷史。若無法徹底理解不明白，恐怕會是人類的一大遺憾。', 4.6, 1),
(29, '29', '王凱鈞', 'b5sQr8PA', '男', '1999-07-01', '0972240824', '新北市雙溪區龍善二路124巷898號81樓', 'swaniawski.kari@shields.net', 26, 51, 58, 39, ' 阿姨必定會成為未來世界的新標準。朱舜水說過一句很有意思的話，滿盈者，不損何為？慎之！慎之！ 這似乎解答了我的疑惑。阿姨，發生了會如何，不發生又會如何。', 2.7, 1),
(30, '30', '劉家屏', 'X3GFaG5X', '男', '1989-04-02', '0952112874', '宜蘭縣員山鄉華廈街八段175巷114號79樓', 'taurean94@leffler.info', 11, 14, 36, 33, '巴爾扎克曾說過一句意義深遠的話，我們爬得比別人高，人們完全可以允許; 但如果我們不將自己的人格降到他們那麼低，他們是永遠不會原諒的。所以，有人們對性格堅強的人，不能不懷著幾分仇恨和恐懼。對他們來說，別人過多的榮譽是對他們一種無言的指責，無論是活人還是死人，他們都不能寬恕。這讓我對於看待這個問題的方法有了巨大的改變。話雖如此，我們卻也不能夠這麼篤定。儘管如此，別人往往卻不這麼想。陸機曾經認為，勢力之交難以經遠。這句話決定了一切。若到今天結束時我們都還無法釐清棒賽的意義，那想必我們昨天也無法釐清。', 5, 1),
(31, '34', '樊皇裕', 'NkdVegws', '男', '1989-10-03', '0922798640', '花蓮縣玉里鎮府中路三段673巷499弄68號60樓', 'quitzon.caroline@spencer.com', 45, 18, 36, 11, '罵我可以說是有著成為常識的趨勢。拿破崙說過一句發人省思的話，勇氣如愛情，需要希望來滋養。這似乎解答了我的疑惑。', 2.5, 1),
(32, '64', '高澄桂', 'mGnBachg', '女', '1994-07-04', '0921989051', '花蓮縣瑞穗鄉德美路一段334號90樓', 'spencer.gage@funk.com', 45, 51, 36, 17, '儘管如此，別人往往卻不這麼想。俾斯麥講過，尖頭的子彈勝過尖刻的演說。這影響了我的價值觀。蘇軾相信，天涯何處無芳草，多情卻被無情惱。這是撼動人心的。如果別人做得到，那我也可以做到。我們都很清楚，這是個嚴謹的議題。儘管罵我看似不顯眼，卻佔據了我的腦海。', 3.6, 1),
(33, '66', '林惠如', 'r38KcBdG', '女', '1987-07-05', '0968548655', '新北市坪林區登山街768巷984弄390號69樓', 'ursula44@nolan.com', 47, 10, 15, 35, '我們不妨可以這樣來想: 布爾沃曾經提過，要掌握書，莫被書掌握；要為生而讀，莫為讀而生。這段話雖短，卻足以改變人類的歷史。探討罵我時，如果發現非常複雜，那麼想必不簡單。', 4.5, 1),
(34, '35', '王禹斌', 'vWwV8KR5', '男', '1980-05-06', '0972892140', '基隆市中正區寶君街四段805巷228號', 'anna.marvin@langworth.com', 13, 6, 10, 48, '看看別人，再想想自己，會發現問題的核心其實就在你身旁。卡拉姆辛告訴我們，人早就把世界稱為狂暴的海洋，有幸的人帶著指南針而航行。這句話看似簡單，卻埋藏了深遠的意義。我們都知道，只要有意義，那麼就必須慎重考慮。我們不得不面對一個非常尷尬的事實，那就是，庫普林說過一句著名的話，命運很像撒嬌任性的女人，只喜愛好些潑辣果敢的人，對於他們才百依百順，惟命是從呢。這句話看似簡單，但其中的陰鬱不禁讓人深思。透過逆向歸納，得以用最佳的策略去分析好冷。', 3.5, 1),
(35, '37', '何亮意', 'upU5SYf4', '男', '1988-09-07', '0960781492', '屏東縣九如鄉文學路433巷266弄702號87樓', 'bergstrom.rudolph@herman.com', 39, 27, 59, 38, ' 陳道講過一段深奧的話，凡與人交，不可求一時親密，人之易見喜者，必易見怒，惟遵禮致敬，不見好，跡不招尤，所謂淡而可久是也。這段話令我陷入了沈思。而這些並不是完全重要，更加重要的問題是，這種事實對本人來說意義重大，相信對這個世界也是有一定意義的。別林斯基在不經意間這樣說過，讀者群是文學的最高法庭，最高裁判者。這段話非常有意思。話雖如此，這必定是個前衛大膽的想法。盧梭曾說過一句意義深遠的話，向他的頭腦中灌輸真理，只是為了保證他不在心中裝填謬誤。希望大家能從這段話中有所收穫。對我個人而言，好冷不僅僅是一個重大的事件，還可能會改變我的人生。', 4.7, 1),
(36, '72', '謝瓊文', 'MRZR2cmk', '女', '1972-11-08', '0971512268', '新竹市北區線東街183巷723弄325號', 'gparisian@labadie.info', 13, 22, 1, 56, '  了解清楚好冷到底是一種怎麼樣的存在，是解決一切問題的關鍵。若能夠欣賞到好冷的美，相信我們一定會對好冷改觀。這必定是個前衛大膽的想法。', 3.5, 1),
(37, '38', '洪秉皓', 'bX79xB2c', '男', '1974-09-09', '0960114803', '宜蘭縣三星鄉縣政六街7巷387號', 'glenda.balistreri@hermann.com', 28, 36, 50, 33, '  既然，馬慧裕深信，善用兵者，攻其愛，敵必從; 搗其虛，敵必隨; 多其方，敵必分; 疑其事，敵必備。這影響了我的價值觀。丁尼生講過一段深奧的話，科學的進展是十分緩慢的，需要爬行才能從一點到達另一點。希望各位能用心體會這段話。可是，即使是這樣，錯了的出現仍然代表了一定的意義。', 4.2, 1),
(38, '79', '陳延怡', 'SCn9CNUg', '女', '1996-07-10', '0929138045', '新竹縣尖石鄉鎮原路773號80樓', 'gnader@schneider.com', 4, 45, 57, 26, '富蘭克林曾說過，人生應為生存而食，不應為食而生存。希望大家實際感受一下這段話。本人也是經過了深思熟慮，在每個日日夜夜思考這個問題。所謂乾，關鍵是乾需要如何解讀。把乾輕鬆帶過，顯然並不適合。一般來說，乾，到底應該如何實現。謹慎地來說，我們必須考慮到所有可能。', 2.9, 1),
(39, '40', '蔡文賢', 'ZucuHeSr', '男', '1981-12-11', '0961307539', '嘉義市東區永義九路168號90樓', 'reta.romaguera@kuhic.com', 48, 57, 58, 23, '本人也是經過了深思熟慮，在每個日日夜夜思考這個問題。班固曾講過，少成若天性，習慣如自然。帶著這句話，我們還要更加慎重的審視這個問題。透過逆向歸納，得以用最佳的策略去分析乾。如果別人做得到，那我也可以做到。在這種不可避免的衝突下，我們必須解決這個問題。', 3.9, 1),
(40, '41', '張玉真', 'WRxc8R8G', '男', '1981-10-12', '0970190443', '桃園市楊梅區文南一街三段268號', 'ibalistreri@eichmann.com', 18, 50, 33, 41, '   儘管土豪看似不顯眼，卻佔據了我的腦海。可是，即使是這樣，土豪的出現仍然代表了一定的意義。需要考慮周詳土豪的影響及因應對策。洛克講過一段深奧的話，在缺乏教養的人身上，勇敢就會成為粗暴，學識就會成為迂腐，機智就會成為逗趣，質樸就會成為粗魯，溫厚就會成為諂媚。這句話看似簡單，卻埋藏了深遠的意義。', 3.2, 1),
(41, '42', '林宏映', 'TtmXx5Zt', '男', '1983-12-13', '0968154934', '連江縣北竿鄉同心一路864巷426號61樓', 'krajcik.lucinda@walker.com', 50, 11, 44, 59, '我們一般認為，抓住了問題的關鍵，其他一切則會迎刃而解。在人類的歷史中，我們總是盡了一切努力想搞懂好人。楊超深信，莫教桑麻困後人，浮雲富貴不如貧，男兒志在安天下，破舊山河再造新。這句話看似簡單，但其中的陰鬱不禁讓人深思。', 3.6, 1),
(42, '73', '藍翊虹', 'GcYHxQXz', '女', '1987-07-14', '0935476848', ' 高雄市前鎮區豐盛路一段386巷509弄76號199樓', '	windler.viola@volkman.biz', 27, 48, 40, 53, '在這種困難的抉擇下，本人思來想去，寢食難安。要想清楚，類，到底是一種怎麼樣的存在。左拉在過去曾經講過，一個社會，只有當他把真理公之於眾時，才會強而有力。這句話語雖然很短，但令我浮想聯翩。', 3.8, 1),
(43, '43', '涂俊賢', '3w7Dmt56', '男', '1992-01-15', '0956254592', '高雄市美濃區上樹村北寧路367巷287弄234號', 'wmclaughlin@spencer.com', 20, 60, 30, 18, '  領悟其中的道理也不是那麼的困難。這樣看來，世界上若沒有怎麼辦，對於人類的改變可想而知。若發現問題比我們想像的還要深奧，那肯定不簡單。不難發現，問題在於該用什麼標準來做決定呢？總而言之，帶著這些問題，我們一起來審視怎麼辦。怎麼辦究竟是怎麼樣的存在，始終是個謎題。', 1.8, 1),
(44, '44', '黃彥安', 'HhEYXdXu', '男', '1990-07-16', '0935866755', '新竹市北區健行北路688巷353弄281號41樓', 'stiedemann.rubie@stokes.com', 14, 47, 34, 26, '見面的存在，令我無法停止對他的思考。我們可以很篤定的說，這需要花很多時間來嚴謹地論證。經過上述討論，若沒有見面的存在，那麼後果可想而知。既然如此，由於，盧梭曾經認為，不管到了哪裡，我都一直留戀那令人愉快的悠閒生活，對唾手可得的富貴榮華毫無興趣，甚至厭惡。這讓我對於看待這個問題的方法有了巨大的改變。', 1.7, 1),
(45, '45', '王禹明', 'qkBQFXrF', '男', '1990-01-17', '0952480883', '雲林縣莿桐鄉文華一街392巷110弄272號', 'lockman.burley@stokes.org', 8, 44, 42, 35, ' 比利時說過，跳舞不好的人，總是抱怨自己的鞋子。這句話令我不禁感慨問題的迫切性。若沒有努力的存在，那麼後果可想而知。那麼，努力因何而發生？', 4.2, 1),
(46, '10', '邱家欣', 'vuEQ3Xs4', '女', '1987-12-18', '0937722031', ' 彰化縣鹿港鎮楓江街八段532號', 'kiera.deckow@monahan.com', 31, 60, 30, 18, '普勞圖斯說過一句經典的名言，河川是流動的道路，把我們帶到要。這不禁令我深思。海賽曾經認為，人生是一匹馬，輕快而健壯的馬。人，要像騎手那樣大膽而細心地駕馭它。這不禁令我深思。很多絕對是史無前例的。張廷玉曾提出，幸災不仁乘危不武。希望大家能發現話中之話。', 1.8, 1),
(47, '46', '林樂湖', 'TPWNPgxe', '男', '1994-07-19', '0939837971', ' 新北市蘆洲區玉清二街726巷81號51樓', 'lrath@hane.info', 32, 51, 34, 59, ' 培根在過去曾經講過，無論你怎樣地表示憤怒，都不要做出任何無法挽回的事來。這句話幾乎解讀出了問題的根本。話雖如此，我們卻也不能夠這麼篤定。我們不妨可以這樣來想: 布克萊曾提出，修鑿可以使道路平直，但只有崎嶇的未經修鑿的道路才是天才的道路。這似乎解答了我的疑惑。了解清楚到你家到底是一種怎麼樣的存在，是解決一切問題的關鍵。', 3.6, 1),
(48, '61', '於欣宜', 'A64TVehr', '女', '1997-04-20', '0936840560', '連江縣東引鄉溪心路869巷895弄382號', 'gabriella.abshire@friesen.info', 41, 48, 47, 55, '我們普遍認為，若能理解透徹核心原理，對其就有了一定的了解程度。對我個人而言，到你家不僅僅是一個重大的事件，還可能會改變我的人生。每個人的一生中，幾乎可說碰到到你家這件事，是必然會發生的。我們都知道，只要有意義，那麼就必須慎重考慮。', 5, 1),
(49, '60', '邱佩怡', 'Q5CnrB6k', '女', '1982-05-21', '0926821715', '臺東縣關山鎮寧夏東二街七段160巷308號400樓', 'yost@hamill.info', 38, 56, 50, 38, '看看別人，再想想自己，會發現問題的核心其實就在你身旁。卡拉姆辛告訴我們，人早就把世界稱為狂暴的海洋，有幸的人帶著指南針而航行。這句話看似簡單，卻埋藏了深遠的意義。我們都知道，只要有意義，那麼就必須慎重考慮。我們不得不面對一個非常尷尬的事實，那就是，庫普林說過一句著名的話，命運很像撒嬌任性的女人，只喜愛好些潑辣果敢的人，對於他們才百依百順，惟命是從呢。這句話看似簡單，但其中的陰鬱不禁讓人深思。透過逆向歸納，得以用最佳的策略去分析好冷。', 3.5, 1),
(50, '47', '林建紫', 'upU5SYf4', '男', '1988-09-22', '0955499244', '屏東縣九如鄉文學路433巷266弄702號87樓', 'bergstrom.rudolph@herman.com', 38, 27, 59, 38, '  儘管如此，我們仍然需要對花保持懷疑的態度。列寧相信，科學的宗旨就是提供宇宙的真正寫真。這段話可說是震撼了我。屠格涅夫曾經認為，正義之神，寬容是我們最完美的所。希望大家實際感受一下這段話。我們不得不相信，這樣看來，杜南講過一段耐人尋思的話，旅行是真正的知識最偉大的發源地。這不禁令我深思。', 3.8, 1),
(51, '59', '張湘婷', 'NK3kha82', '女', '1987-07-23', '0924802754', ' 高雄市前鎮區豐盛路一段386巷509弄76號199樓', '	windler.viola@volkman.biz', 27, 48, 40, 53, '在這種困難的抉擇下，本人思來想去，寢食難安。要想清楚，類，到底是一種怎麼樣的存在。左拉在過去曾經講過，一個社會，只有當他把真理公之於眾時，才會強而有力。這句話語雖然很短，但令我浮想聯翩。', 4.3, 1),
(52, '48', '許惠成', 'rYxQmaNV', '男', '1981-10-24', '0922644259', '桃園市楊梅區文南一街三段268號                                                    ', 'ibalistreri@eichmann.com', 1, 50, 33, 41, '   儘管土豪看似不顯眼，卻佔據了我的腦海。可是，即使是這樣，土豪的出現仍然代表了一定的意義。需要考慮周詳土豪的影響及因應對策。洛克講過一段深奧的話，在缺乏教養的人身上，勇敢就會成為粗暴，學識就會成為迂腐，機智就會成為逗趣，質樸就會成為粗魯，溫厚就會成為諂媚。這句話看似簡單，卻埋藏了深遠的意義。', 3.2, 1),
(53, '49', '吳思雨', 'm5eh22vk', '男', '1981-12-25', '0915623567', '嘉義市東區永義九路168號90樓', 'reta.romaguera@kuhic.com', 48, 57, 58, 23, '本人也是經過了深思熟慮，在每個日日夜夜思考這個問題。班固曾講過，少成若天性，習慣如自然。帶著這句話，我們還要更加慎重的審視這個問題。透過逆向歸納，得以用最佳的策略去分析乾。如果別人做得到，那我也可以做到。在這種不可避免的衝突下，我們必須解決這個問題。', 3.9, 0),
(54, '51', '陳耿鑫', 'ckBd98rb', '男', '1983-12-26', '0963918805', '連江縣北竿鄉同心一路864巷426號61樓', 'krajcik.lucinda@walker.com', 50, 11, 44, 59, '我們一般認為，抓住了問題的關鍵，其他一切則會迎刃而解。在人類的歷史中，我們總是盡了一切努力想搞懂好人。楊超深信，莫教桑麻困後人，浮雲富貴不如貧，男兒志在安天下，破舊山河再造新。這句話看似簡單，但其中的陰鬱不禁讓人深思。', 3.6, 1),
(55, '58', '蘇雅筑', 'cVVYDUQP', '女', '1987-12-27', '0922914612', ' 彰化縣鹿港鎮楓江街八段532號', 'kiera.deckow@monahan.com', 34, 60, 30, 18, '普勞圖斯說過一句經典的名言，河川是流動的道路，把我們帶到要。這不禁令我深思。海賽曾經認為，人生是一匹馬，輕快而健壯的馬。人，要像騎手那樣大膽而細心地駕馭它。這不禁令我深思。很多絕對是史無前例的。張廷玉曾提出，幸災不仁乘危不武。希望大家能發現話中之話。', 1.8, 1),
(56, '52', '李聖方', 'wmce36Py', '男', '1992-01-28', '0986054237', '高雄市美濃區上樹村北寧路367巷287弄234號', 'wmclaughlin@spencer.com', 23, 60, 30, 18, '  領悟其中的道理也不是那麼的困難。這樣看來，世界上若沒有怎麼辦，對於人類的改變可想而知。若發現問題比我們想像的還要深奧，那肯定不簡單。不難發現，問題在於該用什麼標準來做決定呢？總而言之，帶著這些問題，我們一起來審視怎麼辦。怎麼辦究竟是怎麼樣的存在，始終是個謎題。', 1.8, 1),
(57, '57', '林育伶', 'Sdp7HWkn', '女', '1990-01-29', '0926984151', '雲林縣莿桐鄉文華一街392巷110弄272號800樓                                                 ', 'lockman.burley@stokes.org', 10, 44, 42, 35, ' 比利時說過，跳舞不好的人，總是抱怨自己的鞋子。這句話令我不禁感慨問題的迫切性。若沒有努力的存在，後果可想而知。那麼，努力因何而發生？', 4.2, 1),
(58, '56', '謝琇紹', 'ZMSvpNeQ', '女', '1988-09-30', '0926272372', '屏東縣九如鄉文學路433巷266弄702號87樓', 'bergstrom.rudolph@herman.com', 39, 27, 59, 38, '  儘管如此，我們仍然需要對花保持懷疑的態度。列寧相信，科學的宗旨就是提供宇宙的真正寫真。這段話可說是震撼了我。屠格涅夫曾經認為，正義之神，寬容是我們最完美的所。希望大家實際感受一下這段話。我們不得不相信，這樣看來，杜南講過一段耐人尋思的話，旅行是真正的知識最偉大的發源地。這不禁令我深思。', 3.8, 1),
(59, '53', '林建宇', 'u7NK8VqN', '男', '1994-07-31', '0961553686', ' 新北市蘆洲區玉清二街726巷81號51樓', 'lrath@hane.info', 34, 51, 34, 59, ' 培根在過去曾經講過，無論你怎樣地表示憤怒，都不要做出任何無法挽回的事來。這句話幾乎解讀出了問題的根本。話雖如此，我們卻也不能夠這麼篤定。我們不妨可以這樣來想: 布克萊曾提出，修鑿可以使道路平直，但只有崎嶇的未經修鑿的道路才是天才的道路。這似乎解答了我的疑惑。了解清楚到你家到底是一種怎麼樣的存在，是解決一切問題的關鍵。', 3.6, 1),
(60, '55', '許嬌茹', 'CSxWTKq3', '女', '1997-04-01', '0924772897', '連江縣東引鄉溪心路869巷895弄382號', 'gabriella.abshire@friesen.info', 44, 48, 47, 55, '我們普遍認為，若能理解透徹核心原理，對其就有了一定的了解程度。對我個人而言，到你家不僅僅是一個重大的事件，還可能會改變我的人生。每個人的一生中，幾乎可說碰到到你家這件事，是必然會發生的。我們都知道，只要有意義，那麼就必須慎重考慮。', 5, 1),
(61, '54', '鄭蓉淳', 'vAGXZYHB', '女', '1996-07-02', '0928196562', '新竹縣尖石鄉鎮原路773號80樓', 'gnader@schneider.com', 8, 45, 57, 26, '   富蘭克林曾說過，人生應為生存而食，不應為食而生存。希望大家實際感受一下這段話。本人也是經過了深思熟慮，在每個日日夜夜思考這個問題。所謂乾，關鍵是乾需要如何解讀。把乾輕鬆帶過，顯然並不適合。一般來說，乾，到底應該如何實現。謹慎地來說，我們必須考慮到所有可能。', 2.9, 1),
(62, '62', '陳峻伯', 'eGp34RHZ', '男', '1990-07-03', '0968487979', '新竹市北區健行北路688巷353弄281號41樓', 'stiedemann.rubie@stokes.com', 17, 47, 34, 26, '見面的存在，令我無法停止對他的思考。我們可以很篤定的說，這需要花很多時間來嚴謹地論證。經過上述討論，若沒有見面的存在，那麼後果可想而知。既然如此，由於，盧梭曾經認為，不管到了哪裡，我都一直留戀那令人愉快的悠閒生活，對唾手可得的富貴榮華毫無興趣，甚至厭惡。這讓我對於看待這個問題的方法有了巨大的改變。', 1.7, 1),
(63, '63', '文俊豪', '8RVYfaRz', '男', '1982-05-04', '0921777269', '臺東縣關山鎮寧夏東二街七段160巷308號400樓', 'yost@hamill.info', 40, 56, 50, 38, '看看別人，再想想自己，會發現問題的核心其實就在你身旁。卡拉姆辛告訴我們，人早就把世界稱為狂暴的海洋，有幸的人帶著指南針而航行。這句話看似簡單，卻埋藏了深遠的意義。我們都知道，只要有意義，那麼就必須慎重考慮。我們不得不面對一個非常尷尬的事實，那就是，庫普林說過一句著名的話，命運很像撒嬌任性的女人，只喜愛好些潑辣果敢的人，對於他們才百依百順，惟命是從呢。這句話看似簡單，但其中的陰鬱不禁讓人深思。透過逆向歸納，得以用最佳的策略去分析好冷。', 3.5, 1),
(64, '65', '吳以洋', 'rSTT8xuS\r\n', '男', '1972-11-05', '0958866153', '新竹市北區線東街183巷723弄325號', 'gparisian@labadie.info', 13, 22, 18, 56, '  了解清楚好冷到底是一種怎麼樣的存在，是解決一切問題的關鍵。若能夠欣賞到好冷的美，相信我們一定會對好冷改觀。這必定是個前衛大膽的想法。', 3.5, 1),
(65, '22', '陳婉枝', 'B82PHsua', '女', '1974-09-06', '0911608429', '宜蘭縣三星鄉縣政六街7巷387號', 'glenda.balistreri@hermann.com', 28, 16, 50, 33, '  既然，馬慧裕深信，善用兵者，攻其愛，敵必從; 搗其虛，敵必隨; 多其方，敵必分; 疑其事，敵必備。這影響了我的價值觀。丁尼生講過一段深奧的話，科學的進展是十分緩慢的，需要爬行才能從一點到達另一點。希望各位能用心體會這段話。可是，即使是這樣，錯了的出現仍然代表了一定的意義。', 4.2, 1),
(66, '67', '蔡俊嘉', 'TtmXx5Zt', '男', '1983-12-07', '0955740502', '連江縣北竿鄉同心一路864巷426號61樓', 'krajcik.lucinda@walker.com', 50, 11, 44, 59, '我們一般認為，抓住了問題的關鍵，其他一切則會迎刃而解。在人類的歷史中，我們總是盡了一切努力想搞懂好人。楊超深信，莫教桑麻困後人，浮雲富貴不如貧，男兒志在安天下，破舊山河再造新。這句話看似簡單，但其中的陰鬱不禁讓人深思。', 3.6, 1),
(67, '16', '侯雅婷', 'GcYHxQXz', '女', '1987-07-08', '0931218213', ' 高雄市前鎮區豐盛路一段386巷509弄76號199樓', '	windler.viola@volkman.biz', 28, 48, 40, 53, '在這種困難的抉擇下，本人思來想去，寢食難安。要想清楚，類，到底是一種怎麼樣的存在。左拉在過去曾經講過，一個社會，只有當他把真理公之於眾時，才會強而有力。這句話語雖然很短，但令我浮想聯翩。', 2.3, 1),
(68, '68', '蔡文賢', 'ZucuHeSr', '男', '1981-12-09', '0917120698', '嘉義市東區永義九路168號90樓', 'reta.romaguera@kuhic.com', 48, 57, 58, 23, '本人也是經過了深思熟慮，在每個日日夜夜思考這個問題。班固曾講過，少成若天性，習慣如自然。帶著這句話，我們還要更加慎重的審視這個問題。透過逆向歸納，得以用最佳的策略去分析乾。如果別人做得到，那我也可以做到。在這種不可避免的衝突下，我們必須解決這個問題。', 3.9, 0),
(69, '9', '陳玉菱', 'vuEQ3Xs4', '女', '1987-12-10', '0972171290', ' 彰化縣鹿港鎮楓江街八段532號', 'kiera.deckow@monahan.com', 31, 60, 30, 18, '普勞圖斯說過一句經典的名言，河川是流動的道路，把我們帶到要。這不禁令我深思。海賽曾經認為，人生是一匹馬，輕快而健壯的馬。人，要像騎手那樣大膽而細心地駕馭它。這不禁令我深思。很多絕對是史無前例的。張廷玉曾提出，幸災不仁乘危不武。希望大家能發現話中之話。', 1.8, 1),
(70, '69', '張家亦', 'WRxc8R8G', '男', '1981-10-11', '0953376556', '桃園市楊梅區文南一街三段268號', 'ibalistreri@eichmann.com', 14, 50, 33, 41, '   儘管土豪看似不顯眼，卻佔據了我的腦海。可是，即使是這樣，土豪的出現仍然代表了一定的意義。需要考慮周詳土豪的影響及因應對策。洛克講過一段深奧的話，在缺乏教養的人身上，勇敢就會成為粗暴，學識就會成為迂腐，機智就會成為逗趣，質樸就會成為粗魯，溫厚就會成為諂媚。這句話看似簡單，卻埋藏了深遠的意義。', 3.2, 1),
(71, '70', '鐘俊良', 'bX79xB2c', '男', '1974-09-12', '0911608429', '宜蘭縣三星鄉縣政六街7巷387號', 'glenda.balistreri@hermann.com', 28, 60, 50, 33, '  既然，馬慧裕深信，善用兵者，攻其愛，敵必從; 搗其虛，敵必隨; 多其方，敵必分; 疑其事，敵必備。這影響了我的價值觀。丁尼生講過一段深奧的話，科學的進展是十分緩慢的，需要爬行才能從一點到達另一點。希望各位能用心體會這段話。可是，即使是這樣，錯了的出現仍然代表了一定的意義。', 4.2, 0),
(72, '71', '酈弘峰', '3w7Dmt56', '男', '1992-01-13', '0912893327', '高雄市美濃區上樹村北寧路367巷287弄234號', 'wmclaughlin@spencer.com', 24, 26, 30, 18, '  領悟其中的道理也不是那麼的困難。這樣看來，世界上若沒有怎麼辦，對於人類的改變可想而知。若發現問題比我們想像的還要深奧，那肯定不簡單。不難發現，問題在於該用什麼標準來做決定呢？總而言之，帶著這些問題，我們一起來審視怎麼辦。怎麼辦究竟是怎麼樣的存在，始終是個謎題。', 1.8, 1),
(73, '74', '陳冠順', 'qkBQFXrF', '男', '1990-01-14', '0912092658', '雲林縣莿桐鄉文華一街392巷110弄272號', 'lockman.burley@stokes.org', 10, 44, 46, 35, ' 比利時說過，跳舞不好的人，總是抱怨自己的鞋子。這句話令我不禁感慨問題的迫切性。若沒有努力的存在，那麼後果可想而知。那麼，努力因何而發生？', 4.2, 1),
(74, '75', '周佳廷', 'TPWNPgxe', '男', '1994-07-15', '0922010690', ' 新北市蘆洲區玉清二街726巷81號51樓', 'lrath@hane.info', 32, 51, 34, 59, ' 培根在過去曾經講過，無論你怎樣地表示憤怒，都不要做出任何無法挽回的事來。這句話幾乎解讀出了問題的根本。話雖如此，我們卻也不能夠這麼篤定。我們不妨可以這樣來想: 布克萊曾提出，修鑿可以使道路平直，但只有崎嶇的未經修鑿的道路才是天才的道路。這似乎解答了我的疑惑。了解清楚到你家到底是一種怎麼樣的存在，是解決一切問題的關鍵。', 3.6, 1),
(75, '13', '吳涵琴', 'A64TVehr', '女', '1997-04-16', '0955425570', '連江縣東引鄉溪心路869巷895弄382號', 'gabriella.abshire@friesen.info', 45, 48, 47, 55, '我們普遍認為，若能理解透徹核心原理，對其就有了一定的了解程度。對我個人而言，到你家不僅僅是一個重大的事件，還可能會改變我的人生。每個人的一生中，幾乎可說碰到到你家這件事，是必然會發生的。我們都知道，只要有意義，那麼就必須慎重考慮。', 5, 1),
(76, '76', '劉俊毅', 'upU5SYf4', '男', '1988-09-17', '0952096361', '屏東縣九如鄉文學路433巷266弄702號87樓', 'bergstrom.rudolph@herman.com', 39, 27, 59, 38, '  儘管如此，我們仍然需要對花保持懷疑的態度。列寧相信，科學的宗旨就是提供宇宙的真正寫真。這段話可說是震撼了我。屠格涅夫曾經認為，正義之神，寬容是我們最完美的所。希望大家實際感受一下這段話。我們不得不相信，這樣看來，杜南講過一段耐人尋思的話，旅行是真正的知識最偉大的發源地。這不禁令我深思。', 3.8, 1),
(77, '11', '王佳芳', 'SCn9CNUg', '女', '1996-07-18', '0934417950', '新竹縣尖石鄉鎮原路773號80樓', 'gnader@schneider.com', 42, 45, 57, 26, '   富蘭克林曾說過，人生應為生存而食，不應為食而生存。希望大家實際感受一下這段話。本人也是經過了深思熟慮，在每個日日夜夜思考這個問題。所謂乾，關鍵是乾需要如何解讀。把乾輕鬆帶過，顯然並不適合。一般來說，乾，到底應該如何實現。謹慎地來說，我們必須考慮到所有可能。', 2.9, 1),
(78, '77', '張明聖', 'Q5CnrB6k', '男', '1982-05-19', '0954383434', '臺東縣關山鎮寧夏東二街七段160巷308號400樓                                                                                                        ', 'yost@hamill.info', 40, 56, 50, 38, '看看別人，再想想自己，會發現問題的核心其實就在你身旁。卡拉姆辛告訴我們，人早就把世界稱為狂暴的海洋，有幸的人帶著指南針而航行。這句話看似簡單，卻埋藏了深遠的意義。我們都知道，只要有意義，那麼就必須慎重考慮。我們不得不面對一個非常尷尬的事實，那就是，庫普林說過一句著名的話，命運很像撒嬌任性的女人，只喜愛好些潑辣果敢的人，對於他們才百依百順，惟命是從呢。這句話看似簡單，但其中的陰鬱不禁讓人深思。透過逆向歸納，得以用最佳的策略去分析好冷。', 3.5, 1),
(79, '78', '吳建豪', 'HhEYXdXu', '男', '1990-07-20', '0928437746', '新竹市北區健行北路688巷353弄281號41樓', 'stiedemann.rubie@stokes.com', 14, 47, 34, 26, '見面的存在，令我無法停止對他的思考。我們可以很篤定的說，這需要花很多時間來嚴謹地論證。經過上述討論，若沒有見面的存在，那麼後果可想而知。既然如此，由於，盧梭曾經認為，不管到了哪裡，我都一直留戀那令人愉快的悠閒生活，對唾手可得的富貴榮華毫無興趣，甚至厭惡。這讓我對於看待這個問題的方法有了巨大的改變。', 1.7, 1),
(80, '80', '李俞能', 'MRZR2cmk', '男', '1972-11-21', '0927575232', '新竹市北區線東街183巷723弄325號60樓                                                   ', 'gparisian@labadie.info', 13, 22, 18, 56, '  了解清楚好冷到底是一種怎麼樣的存在，是解決一切問題的關鍵。若能夠欣賞到好冷的美，相信我們一定會對好冷改觀。這必定是個前衛大膽的想法。', 3.5, 1),
(81, '110', '黃綺修', 'XBNbnFbw', '男', '1986-08-22', '0913398240', '雲林縣斗六市嶺頂九分街997巷294號98樓', 'ward.kaci@schulist.org', 20, 38, 5, 32, '      那麼，西班牙講過，自知之明是最難得的知識。這是撼動人心的。每個人都不得不面對這些問題。在面對這種問題時，務必詳細考慮冷漠的各種可能。我們不得不相信，皮塔庫斯曾經說過，要認准自己的機會。', 3.2, 1),
(82, '107', '彭慧娟', 'DSxbCErC', '女', '1993-11-23', '0961045968', ' 雲林縣東勢鄉鎮新五路640號199樓', '	harris.vernice@howe.com', 2, 29, 41, 2, '科學是踏實的學問，連貫性和系統性都很強，前面的東西沒有學好，後面的東西就上不去; 基礎沒有打好。搞尖端就比較困難。', 2, 1),
(83, '103', '侯枝樺', 'wbmKM8B3', '女', '1985-06-24', '0936952880', '基隆市暖暖區南村街一段205巷923號62樓', 'greta08@kub.net', 48, 19, 43, 31, '我們在工作中經常遇到一些問題解決不了，其中不少是由於基礎未打好所致。一個人在科學研究和其他工作上進步的快慢，往往和他的基礎有關。強烈建議大家把這段話牢牢記住。', 3.1, 1),
(84, '109', '張志合', 'ahdrevkW', '男', '1989-11-25', '0936661304', ' 新北市三芝區富裕三街二段208巷467弄537號47樓', 'floy98@runte.com', 2, 45, 59, 3, '不知就不知，不懂就不懂，不懂的不要裝懂，而且還要追下去，不懂，不懂在什麼地方; 懂，懂在什麼地方。老老實實的態度，首先就是要紮紮實實地打好基礎。', 3, 1),
(85, '101', '蔡雅雯', 'ahdrQDfs', '女', '1998-04-26', '0970156065', '臺東縣臺東市中車路一段445巷59號                                                    ', 'caleb15@marks.com', 11, 10, 13, 50, '如果仔細思考眼睛乾，會發現其中蘊含的深遠意義。華羅庚告訴我們，科學是老老實實的學問，搞科學研究工作就要採取老老實實、實事求是的態度，不能有半點虛假浮誇。', 5, 1),
(86, '108', '謝晉蘋', 'RSP5SAqE', '男', '1996-09-27', '0960600824', '新北市新莊區惠中一路788巷396弄944號57樓                                                    ', 'charlene.thiel@johnston.com', 46, 60, 47, 24, '眼睛乾似乎是一種巧合，但如果我們從一個更大的角度看待問題，這似乎是一種不可避免的事實。', 2.4, 1),
(87, '96', '魏蓉毓', 'tNcDFTyU', '女', '1986-09-28', '0912897719', '臺東縣蘭嶼鄉行忠街913巷776弄965號21樓', 'kaela93@murray.net', 22, 21, 8, 57, ' 不要先入為主覺得眼睛乾很複雜，實際上，眼睛乾可能比你想的還要更複雜', 4.7, 1),
(88, '81', '林彥廷', 'Eb7p4EZq', '男', '1997-07-29', '0911242238', '臺東縣卑南鄉大源十九路557巷603號32樓', 'petra71@dach.info', 23, 39, 57, 15, '  做好眼睛乾這件事，可以說已經成為了全民運動。面對如此難題，我們必須設想周全。我們不妨可以這樣來想: 在人類的歷史中，我們總是盡了一切努力想搞懂眼睛乾。', 1.5, 1),
(89, '85', '許兆均', 'DGkFF9FS', '男', '2010-02-16', '0936610994', ' 澎湖縣湖西鄉桐竹街二段930巷502弄160號65樓                                                    ', 'bayer.doug@vonrueden.net', 7, 40, 48, 56, '      問題的核心究竟是什麼？', 5, 1),
(90, '82', '楊心怡', 'keRa3RBk', '女', '1995-05-29', '0912538205', ' 桃園市龍潭區濱一路1000巷298弄499號                                                    ', 'arnaldo.bahringer@mertz.com', 44, 55, 14, 25, ' 挪威說過一句經典的名言，懶惰很像金錢一個人擁有越多，越是想要。這段話讓我所有的疑惑頓時豁然開朗。儘管如此，別人往往卻不這麼想。對於一般人來說，眼睛乾究竟象徵著什麼呢？', 2.5, 1),
(91, '83', '劉彥均', '56VvQprY', '男', '1988-03-01', '0912495439', '宜蘭縣員山鄉福林街157巷596弄865號', 'avery.herman@hirthe.com', 14, 26, 42, 33, '    探討眼睛乾時，如果發現非常複雜，那麼想必不簡單。我們需要淘汰舊有的觀念，話雖如此，總結來說，我們不得不相信，深入的探討眼睛乾，是釐清一切的關鍵。一般來說，儘管如此，我們仍然需要對眼睛乾保持懷疑的態度。', 3.3, 1),
(92, '87', '陳松弘', 'rSv6heU4', '男', '1991-07-02', '0912046172', '連江縣北竿鄉山湖二街八段184號60樓', 'troy54@mckenzie.info', 6, 28, 30, 37, ' 世界需要改革，需要對眼睛乾有新的認知。巴爾扎克曾說過一句意義深遠的話，真正的科學家應當是個幻想家，誰不是幻想家，誰就只能把自己稱為實踐家。這句話看似簡單，但其中的陰鬱不禁讓人深思。\r\n', 3.7, 1),
(93, '84', '郭倍妹', 'vbFcHVDh', '女', '1998-04-03', '0953257850', '臺北市北投區大功街157號', 'yhwehner@streich.com', 16, 36, 12, 49, '若能夠欣賞到眼睛乾的美，相信我們一定會對眼睛乾改觀。朱耀燮深信，男女之間真正的愛情，不是靠肉體或者精神所能實現的，只有彼此的精神和肉體相互融合的狀態中才可能實現。這段話可說是震撼了我。', 4.9, 1),
(94, '86', '陳雅冰', 'VByQFQC6', '女', '1993-01-04', '0912996397', ' 苗栗縣泰安鄉健行北路一段585巷738號52樓', 'gabrielle.hackett@little.com', 48, 9, 26, 15, '斯大林在不經意間這樣說過，人才，幹部是世界上所有寶貴的資本中最寶貴最有決定意義的資本。強烈建議大家把這段話牢牢記住', 1.5, 1),
(95, '89', '劉怡珊', 'CG7s3Yc7', '女', '1992-10-05', '0989813719', '新竹縣寶山鄉鎮新二街二段721號', 'huels.roberta@stokes.com', 30, 52, 41, 20, '  一般來講，我們都必須務必慎重的考慮考慮。我們可以很篤定的說，這需要花很多時間來嚴謹地論證。眼睛乾因何而發生？。', 2.8, 1),
(96, '88', '杜康嬌', '9AntqbwB', '女', '1988-12-06', '0937883987', '臺北市松山區華泰一路三段686巷900弄137號', 'gkris.ardella@zemlak.com', 40, 6, 39, 32, '人類生活不可缺少的條件——勞動，才不會是沉重而可恥的負擔，而成為榮譽和英勇的事業。這不禁令我重新仔細的思考。', 5, 1),
(97, '90', '陳容帆', 'ZUU6DeB4', '女', '1994-01-07', '0958445262', '新竹縣竹東鎮竹社路33巷104號', 'kdoyle@bashirian.com', 30, 15, 11, 6, ' 唬爛不僅僅是一個重大的事件，還可能會改變我的人生。加里寧在不經意間這樣說過，愛勞動是共產主義道德主要成分之一。但只有在工人階級獲得勝利以後', 5, 1),
(98, '91', '黃怡光', 'x758bXzx', '女', '1991-09-08', '0938012512', '基隆市信義區老吸路171巷207弄78號92樓', 'gjuliana.pfannerstill@bergstrom.net', 3, 57, 29, 11, '  了卻君王天下事，贏得生前身後名。這句話讓我們得到了一個全新的觀點去思考這個問題。對我個人而言，。', 3.3, 1),
(99, '92', '孟淑娟', '3nFrrRMQ', '女', '1986-09-09', '0956115502', '嘉義市西區大政街454巷340弄930號', 'murphy.renner@casper.net', 22, 7, 38, 60, ' ，常見的東西。這句話把我們帶到了一個新的維度去思考這個問題。我們可以很篤定的說，這需要花很多時間來嚴謹地論證。辛棄疾講過一段耐人尋思的話，', 3.6, 1),
(100, '93', '王景舜', 'Q8ZMkz3Q', '男', '1995-08-10', '0936598891', '彰化縣北斗鎮慶豐九街582巷611弄675號', 'kristian69@hoppe.net', 15, 3, 27, 24, '  。強烈建議大家把這段話牢牢記住。世界上若沒有唬爛，對於人類的改變可想而知。伏爾泰講過，常識並不是大家都知道的，', 3.4, 1),
(101, '94', '賴雅萍', 'xMaH9zGS', '女', '1992-07-11', '0924073926', ' 臺東縣東河鄉保興二路487巷987弄675號', 'gbraxton95@fisher.com', 16, 28, 5, 18, '      辛棄疾講過一段深奧的話，醉裡挑燈看劍，夢會吹角連營。八百里分麾下炙，五十弦翻塞外聲。沙場秋點兵。。', 1.8, 1),
(102, '95', '戴卉翰', 'V7hrxfMx', '男', '1987-04-12', '0939452905', '臺中市太平區精武街二段650巷609號', 'zemlak.sandrine@haag.com', 37, 51, 13, 36, ' 輕快而健壯的馬。人，要像騎手那樣大膽而細心地駕馭它。希望大家能發現話中之話。總而言之，儘管如此，我們仍然需要對唬爛保持懷疑的態度。', 3.9, 1),
(103, '97', '王嘉喜', 'YS4dqbqG', '女', '1987-02-13', '0988547809', '花蓮縣萬榮鄉舊城東街三段536號50樓                                                          ', 'rbogisich@hane.com', 36, 25, 43, 55, '   探討唬爛時，如果發現非常複雜，那麼想必不簡單。在人生的歷程中，唬爛的出現是必然的。海賽曾經提到過，人生是一匹馬，', 5, 1),
(104, '98', '吳秉月', 'SYEZQkDc', '男', '1991-05-14', '0963309024', '新竹市香山區功安一街162巷560號69樓                                                    ', 'daniela68@denesik.com', 42, 22, 21, 29, '車爾尼雪夫斯基講過一段耐人尋思的話，一個沒有受到獻身的熱情所鼓舞的人，永遠不會做出什麼偉大的事情來。這不禁令我深思。這必定是個前衛大膽的想法。', 3.6, 1),
(105, '99', '邱雅婷', 'Tnu2G9ux', '女', '1993-04-15', '0971931083', '嘉義縣六腳鄉重立路584巷204弄549號35樓', 'sauer.breanna@hane.com', 33, 9, 50, 43, ' 這段話讓我所有的疑惑頓時豁然開朗。總結來說，想必大家都能了解唬爛的重要性。唬爛的出現，必將帶領人類走向更高的巔峰。', 4.2, 1),
(106, '100', '陳雅婷', 'qPWUFTZD', '女', '1994-05-16', '0970184864', '嘉義市東區舊城東街三段935巷18弄387號', 'dubuque.leonie@berge.com', 41, 11, 3, 60, ' 我認為，如果仔細思考唬爛，會發現其中蘊含的深遠意義。那麼，高士其曾經說過，知識猶如人體的血液一樣寶貴。', 3.6, 1),
(107, '102', '鄭妙貴', 'yTpSsway', '男', '1994-11-17', '0970638781', '花蓮縣卓溪鄉松三街321巷722弄515號65樓', 'dell.schuppe@schuster.org', 12, 44, 5, 26, '圣西門說過一句富有哲理的話，為人類的幸福而勞動，這是多麼壯麗的事業，這個目的有多麼偉大！ 這段話非常有意思', 2.6, 1),
(108, '104', '胡紀綠', 'yKA4K4Aq', '男', '1998-12-18', '0939656423', '雲林縣東勢鄉斗六五路248巷973弄66號76樓', 'brakus.gennaro@daniel.com', 17, 32, 14, 46, ' 在這種不可避免的衝突下，我們必須解決這個問題。這樣看來，世界需要改革，需要對唬爛有新的認知。看看別人，再想想自己，會發現問題的核心其實就在你身旁。所謂唬爛，關鍵是唬爛需要如何解讀。', 4.6, 1),
(109, '105', '程祥月', 'SEFABeTS', '男', '1986-03-19', '0963558372', '新北市林口區櫻城三街257巷334號', 'thiel@kuphal.org', 44, 5, 26, 13, ' 這句話讓我們得到了一個全新的觀點去思考這個問題。梁實秋說過一句經典的名言，沒有人不愛惜他的生命，但很少人珍視他的時間。帶著這句話，我們還要更加慎重的審視這個問題。', 1.3, 0),
(110, '106', '洪尹純', 'nR3BUmaa', '女', '1995-08-20', '0963598982', '花蓮縣萬榮鄉花旗路六段680巷193弄313號', 'stamm.prince@walsh.com', 30, 32, 36, 14, '我們都很清楚，這是個嚴謹的議題。需要考慮周詳唬爛的影響及因應對策。福卜拉斯說過，只要人們習慣於平淡無奇的言語，一個稍微激烈的思想在那里便成了粗野。', 3.9, 0),
(111, '50', '禹育瑋', 'ans5593N', '男', '1993-10-21', '0987367000', '桃園市楊梅區陽東營區忠三街三段292巷425弄36號12樓', 'isabell.dickens@doyle.com', 49, 17, 51, 20, '每個人都不得不面對這些問題。在面對這種問題時，務必詳細考慮唬爛的各種可能。如果此時我們選擇忽略唬爛，那後果可想而知。這是不可避免的。謹慎地來說，我們必須考慮到所有可能。深入的探討唬爛，是釐清一切的關鍵。', 4.5, 0),
(112, '73', '為什麼壞掉了', '123qweASD', '男', '2027-10-21', '5640615', 'rqercqwcqwc', '21321412@rewrewc', 51, 61, 62, 62, '0', 0, 0);

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `member`
--
ALTER TABLE `member`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=113;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;