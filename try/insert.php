<?php
require_once ("new.php"); //引入基本資料檔




$stmt =$connect->prepare("INSERT INTO member(
name,
pas,
gender,
birth_date,
phone, 
address,
email,
job, 
hobby1,
hobby2,
hobby3,
about,
score)
VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

$stmt->bind_param('ssissssiiiisd',
    $name,
    $pas,
    $gender,
    $birth_date,
    $phone,
    $address,
    $email,
    $job,
    $hobby1,
    $hobby2,
    $hobby3,
    $about,
    $score);



$name="黃綺修";
$pas="XBNbnFbw";
$gender=1;
$birth_date="1986-8-22";
$phone="0923430792";
$address="雲林縣斗六市嶺頂九分街997巷294號98樓";
$email="ward.kaci@schulist.org";
$job=20;
$hobby1=38;
$hobby2=5;
$hobby3=32;
$about="      那麼，西班牙講過，自知之明是最難得的知識。這是撼動人心的。每個人都不得不面對這些問題。在面對這種問題時，務必詳細考慮冷漠的各種可能。我們不得不相信，皮塔庫斯曾經說過，要認准自己的機會。";
$score=3.2;
$stmt->execute();


$name="彭慧娟";
$pas="DSxbCErC";
$gender=0;
$birth_date="1993-11-23";
$phone="0971432755";
$address=" 雲林縣東勢鄉鎮新五路640號199樓";
$email="	harris.vernice@howe.com";
$job=4;
$hobby1=29;
$hobby2=41;
$hobby3=2;
$about="科學是踏實的學問，連貫性和系統性都很強，前面的東西沒有學好，後面的東西就上不去; 基礎沒有打好。搞尖端就比較困難。";
$score=2.0;
$stmt->execute();



$name="侯枝樺";
$pas="wbmKM8B3";
$gender=0;
$birth_date="1985-6-24";
$phone="0971432755";
$address="基隆市暖暖區南村街一段205巷923號62樓";
$email="greta08@kub.net";
$job=48;
$hobby1=19;
$hobby2=43;
$hobby3=31;
$about="我們在工作中經常遇到一些問題解決不了，其中不少是由於基礎未打好所致。一個人在科學研究和其他工作上進步的快慢，往往和他的基礎有關。強烈建議大家把這段話牢牢記住。";
$score=3.1;
$stmt->execute();

$name="張志合";
$pas="ahdrevkW";
$gender=1;
$birth_date="1989-11-25";
$phone="0916073251";
$address=" 新北市三芝區富裕三街二段208巷467弄537號47樓";
$email="floy98@runte.com";
$job=1;
$hobby1=45;
$hobby2=59;
$hobby3=3;
$about="不知就不知，不懂就不懂，不懂的不要裝懂，而且還要追下去，不懂，不懂在什麼地方; 懂，懂在什麼地方。老老實實的態度，首先就是要紮紮實實地打好基礎。";
$score=3.0;
$stmt->execute();



$name="蔡雅雯";
$pas="9Fy2HUMk";
$gender=0;
$birth_date="1998-4-26";
$phone="0919102156";
$address="臺東縣臺東市中車路一段445巷59號";
$email="caleb15@marks.com";
$job=11;
$hobby1=10;
$hobby2=13;
$hobby3=50;
$about="如果仔細思考眼睛乾，會發現其中蘊含的深遠意義。華羅庚告訴我們，科學是老老實實的學問，搞科學研究工作就要採取老老實實、實事求是的態度，不能有半點虛假浮誇。";
$score=5.0;
$stmt->execute();


$name="謝晉蘋";
$pas="RSP5SAqE";
$gender=1;
$birth_date="1996-9-27";
$phone="0989070438";
$address="新北市新莊區惠中一路788巷396弄944號57樓";
$email="charlene.thiel@johnston.com";
$job=46;
$hobby1=60;
$hobby2=47;
$hobby3=24;
$about="眼睛乾似乎是一種巧合，但如果我們從一個更大的角度看待問題，這似乎是一種不可避免的事實。";
$score=2.4;
$stmt->execute();


$name="魏蓉毓";
$pas="tNcDFTyU";
$gender=0;
$birth_date="1986-9-28";
$phone="0915167274";
$address="臺東縣蘭嶼鄉行忠街913巷776弄965號21樓";
$email="kaela93@murray.net";
$job=22;
$hobby1=21;
$hobby2=8;
$hobby3=57;
$about=" 不要先入為主覺得眼睛乾很複雜，實際上，眼睛乾可能比你想的還要更複雜";
$score=4.7;
$stmt->execute();

$name="林彥廷";
$pas="Eb7p4EZq";
$gender=1;
$birth_date="1997-7-29";
$phone="0925019265";
$address="臺東縣卑南鄉大源十九路557巷603號32樓";
$email="petra71@dach.info";
$job=23;
$hobby1=39;
$hobby2=57;
$hobby3=15;
$about="  做好眼睛乾這件事，可以說已經成為了全民運動。面對如此難題，我們必須設想周全。我們不妨可以這樣來想: 在人類的歷史中，我們總是盡了一切努力想搞懂眼睛乾。";
$score=1.5;
$stmt->execute();




$name="許兆均";
$pas="DGkFF9FS";
$gender=1;
$birth_date="1993-2-30";
$phone="0960609554";
$address=" 澎湖縣湖西鄉桐竹街二段930巷502弄160號65樓";
$email="bayer.doug@vonrueden.net";
$job=7;
$hobby1=40;
$hobby2=48;
$hobby3=56;
$about="      問題的核心究竟是什麼？";
$score=5.0;
$stmt->execute();

$name="楊心怡";
$pas="keRa3RBk";
$gender=0;
$birth_date="1990-2-31";
$phone="0920254810";
$address=" 桃園市龍潭區濱一路1000巷298弄499號";
$email="arnaldo.bahringer@mertz.com";
$job=44;
$hobby1=55;
$hobby2=14;
$hobby3=25;
$about=" 挪威說過一句經典的名言，懶惰很像金錢一個人擁有越多，越是想要。這段話讓我所有的疑惑頓時豁然開朗。儘管如此，別人往往卻不這麼想。對於一般人來說，眼睛乾究竟象徵著什麼呢？";
$score=2.5;
$stmt->execute();


$name="劉彥均";
$pas="56VvQprY";
$gender=1;
$birth_date="1988-3-01";
$phone="0914932981";
$address="宜蘭縣員山鄉福林街157巷596弄865號";
$email="avery.herman@hirthe.com";
$job=14;
$hobby1=26;
$hobby2=42;
$hobby3=33;
$about="    探討眼睛乾時，如果發現非常複雜，那麼想必不簡單。我們需要淘汰舊有的觀念，話雖如此，總結來說，我們不得不相信，深入的探討眼睛乾，是釐清一切的關鍵。一般來說，儘管如此，我們仍然需要對眼睛乾保持懷疑的態度。";
$score=3.3;
$stmt->execute();

$name="陳松弘";
$pas="rSv6heU4";
$gender=1;
$birth_date="1991-7-02";
$phone="0918147379";
$address="連江縣北竿鄉山湖二街八段184號60樓";
$email="troy54@mckenzie.info";
$job=6;
$hobby1=28;
$hobby2=30;
$hobby3=37;
$about=" 世界需要改革，需要對眼睛乾有新的認知。巴爾扎克曾說過一句意義深遠的話，真正的科學家應當是個幻想家，誰不是幻想家，誰就只能把自己稱為實踐家。這句話看似簡單，但其中的陰鬱不禁讓人深思。
";
$score=3.7;
$stmt->execute();

$name="郭倍妹";
$pas="vbFcHVDh";
$gender=0;
$birth_date="1998-4-03";
$phone="0953257850";
$address="臺北市北投區大功街157號";
$email="yhwehner@streich.com";
$job=16;
$hobby1=36;
$hobby2=12;
$hobby3=49;
$about="若能夠欣賞到眼睛乾的美，相信我們一定會對眼睛乾改觀。朱耀燮深信，男女之間真正的愛情，不是靠肉體或者精神所能實現的，只有彼此的精神和肉體相互融合的狀態中才可能實現。這段話可說是震撼了我。";
$score=4.9;
$stmt->execute();



$name="陳雅冰";
$pas="VByQFQC6";
$gender=0;
$birth_date="1993-1-04";
$phone="0915289598";
$address=" 苗栗縣泰安鄉健行北路一段585巷738號52樓";
$email="gabrielle.hackett@little.com";
$job=48;
$hobby1=9;
$hobby2=26;
$hobby3=15;
$about="斯大林在不經意間這樣說過，人才，幹部是世界上所有寶貴的資本中最寶貴最有決定意義的資本。強烈建議大家把這段話牢牢記住";
$score=1.5;
$stmt->execute();



$name="劉怡珊";
$pas="CG7s3Yc7";
$gender=0;
$birth_date="1992-10-5";
$phone="0971736208";
$address="新竹縣寶山鄉鎮新二街二段721號";
$email="huels.roberta@stokes.com";
$job=30;
$hobby1=52;
$hobby2=41;
$hobby3=20;
$about="  一般來講，我們都必須務必慎重的考慮考慮。我們可以很篤定的說，這需要花很多時間來嚴謹地論證。眼睛乾因何而發生？。";
$score=2.8;
$stmt->execute();

$name="杜康嬌";
$pas="9AntqbwB";
$gender=0;
$birth_date="1988-12-6";
$phone="0953587469";
$address="臺北市松山區華泰一路三段686巷900弄137號";
$email="gkris.ardella@zemlak.com";
$job=40;
$hobby1=6;
$hobby2=39;
$hobby3=32;
$about="人類生活不可缺少的條件——勞動，才不會是沉重而可恥的負擔，而成為榮譽和英勇的事業。這不禁令我重新仔細的思考。";
$score=5.0;
$stmt->execute();

$name="陳容帆";
$pas="ZUU6DeB4";
$gender=0;
$birth_date="1994-1-7";
$phone="0939537523";
$address="新竹縣竹東鎮竹社路33巷104號";
$email="kdoyle@bashirian.com";
$job=30;
$hobby1=15;
$hobby2=11;
$hobby3=6;
$about=" 唬爛不僅僅是一個重大的事件，還可能會改變我的人生。加里寧在不經意間這樣說過，愛勞動是共產主義道德主要成分之一。但只有在工人階級獲得勝利以後";
$score=5.0;
$stmt->execute();

$name="黃怡光";
$pas="x758bXzx";
$gender=0;
$birth_date="1991-9-8";
$phone="0926653501";
$address="基隆市信義區老吸路171巷207弄78號92樓";
$email="gjuliana.pfannerstill@bergstrom.net";
$job=4;
$hobby1=57;
$hobby2=29;
$hobby3=11;
$about="  了卻君王天下事，贏得生前身後名。這句話讓我們得到了一個全新的觀點去思考這個問題。對我個人而言，。";
$score=3.3;
$stmt->execute();

$name="孟淑娟";
$pas="3nFrrRMQ";
$gender=0;
$birth_date="1986-9-9";
$phone="0929517292";
$address="嘉義市西區大政街454巷340弄930號";
$email="murphy.renner@casper.net";
$job=22;
$hobby1=7;
$hobby2=38;
$hobby3=60;
$about=" ，常見的東西。這句話把我們帶到了一個新的維度去思考這個問題。我們可以很篤定的說，這需要花很多時間來嚴謹地論證。辛棄疾講過一段耐人尋思的話，";
$score=3.6;
$stmt->execute();

$name="王景舜";
$pas="Q8ZMkz3Q";
$gender=1;
$birth_date="1995-8-10";
$phone="0923549051";
$address="彰化縣北斗鎮慶豐九街582巷611弄675號";
$email="kristian69@hoppe.net";
$job=1;
$hobby1=3;
$hobby2=27;
$hobby3=24;
$about="  。強烈建議大家把這段話牢牢記住。世界上若沒有唬爛，對於人類的改變可想而知。伏爾泰講過，常識並不是大家都知道的，";
$score=3.4;
$stmt->execute();

$name="賴雅萍";
$pas="xMaH9zGS";
$gender=0;
$birth_date="1992-7-11";
$phone="0958239326";
$address=" 臺東縣東河鄉保興二路487巷987弄675號";
$email="gbraxton95@fisher.com";
$job=16;
$hobby1=28;
$hobby2=5;
$hobby3=18;
$about="      辛棄疾講過一段深奧的話，醉裡挑燈看劍，夢會吹角連營。八百里分麾下炙，五十弦翻塞外聲。沙場秋點兵。。";
$score=1.8;
$stmt->execute();

$name="戴卉翰";
$pas="V7hrxfMx";
$gender=1;
$birth_date="1987-4-12";
$phone="0963814066";
$address="臺中市太平區精武街二段650巷609號";
$email="zemlak.sandrine@haag.com";
$job=37;
$hobby1=51;
$hobby2=13;
$hobby3=36;
$about=" 輕快而健壯的馬。人，要像騎手那樣大膽而細心地駕馭它。希望大家能發現話中之話。總而言之，儘管如此，我們仍然需要對唬爛保持懷疑的態度。";
$score=3.9;
$stmt->execute();

$name="王嘉喜";
$pas="YS4dqbqG";
$gender=0;
$birth_date="1987-2-13";
$phone="0930661211";
$address="花蓮縣萬榮鄉舊城東街三段536號50樓";
$email="rbogisich@hane.com";
$job=36;
$hobby1=25;
$hobby2=43;
$hobby3=55;
$about="   探討唬爛時，如果發現非常複雜，那麼想必不簡單。在人生的歷程中，唬爛的出現是必然的。海賽曾經提到過，人生是一匹馬，";
$score=5.0;
$stmt->execute();

$name="吳秉月";
$pas="SYEZQkDc";
$gender=1;
$birth_date="1991-5-14";
$phone="0919322414";
$address="新竹市香山區功安一街162巷560號";
$email="daniela68@denesik.com";
$job=40;
$hobby1=22;
$hobby2=21;
$hobby3=29;
$about="車爾尼雪夫斯基講過一段耐人尋思的話，一個沒有受到獻身的熱情所鼓舞的人，永遠不會做出什麼偉大的事情來。這不禁令我深思。這必定是個前衛大膽的想法。";
$score=3.6;
$stmt->execute();

$name="邱雅婷";
$pas="Tnu2G9ux";
$gender=0;
$birth_date="1993-4-15";
$phone="0914704163";
$address="嘉義縣六腳鄉重立路584巷204弄549號35樓";
$email="sauer.breanna@hane.com";
$job=33;
$hobby1=9;
$hobby2=50;
$hobby3=43;
$about=" 這段話讓我所有的疑惑頓時豁然開朗。總結來說，想必大家都能了解唬爛的重要性。唬爛的出現，必將帶領人類走向更高的巔峰。";
$score=4.2;
$stmt->execute();

$name="陳雅婷";
$pas="qPWUFTZD";
$gender=0;
$birth_date="1994-5-16";
$phone="0987168783";
$address="嘉義市東區舊城東街三段935巷18弄387號";
$email="dubuque.leonie@berge.com";
$job=41;
$hobby1=11;
$hobby2=3;
$hobby3=60;
$about=" 我認為，如果仔細思考唬爛，會發現其中蘊含的深遠意義。那麼，高士其曾經說過，知識猶如人體的血液一樣寶貴。";
$score=3.6;
$stmt->execute();

$name="鄭妙貴";
$pas="yTpSsway";
$gender=1;
$birth_date="1994-11-17";
$phone="0987168783";
$address="花蓮縣卓溪鄉松三街321巷722弄515號65樓";
$email="dell.schuppe@schuster.org";
$job=10;
$hobby1=44;
$hobby2=5;
$hobby3=26;
$about="圣西門說過一句富有哲理的話，為人類的幸福而勞動，這是多麼壯麗的事業，這個目的有多麼偉大！ 這段話非常有意思";
$score=2.6;
$stmt->execute();

$name="胡紀綠";
$pas="yKA4K4Aq";
$gender=1;
$birth_date="1998-12-18";
$phone="0917362908";
$address="雲林縣東勢鄉斗六五路248巷973弄66號76樓";
$email="brakus.gennaro@daniel.com";
$job=13;
$hobby1=32;
$hobby2=14;
$hobby3=46;
$about=" 在這種不可避免的衝突下，我們必須解決這個問題。這樣看來，世界需要改革，需要對唬爛有新的認知。看看別人，再想想自己，會發現問題的核心其實就在你身旁。所謂唬爛，關鍵是唬爛需要如何解讀。";
$score=4.6;
$stmt->execute();

$name="程祥月";
$pas="SEFABeTS";
$gender=1;
$birth_date="1986-3-19";
$phone="0933831666";
$address="新北市林口區櫻城三街257巷334號";
$email="thiel@kuphal.org";
$job=44;
$hobby1=5;
$hobby2=26;
$hobby3=13;
$about=" 這句話讓我們得到了一個全新的觀點去思考這個問題。梁實秋說過一句經典的名言，沒有人不愛惜他的生命，但很少人珍視他的時間。帶著這句話，我們還要更加慎重的審視這個問題。";
$score=1.3;
$stmt->execute();

$name="洪尹純";
$pas="nR3BUmaa";
$gender=0;
$birth_date="1995-8-20";
$phone="0912341970";
$address="花蓮縣萬榮鄉花旗路六段680巷193弄313號";
$email="stamm.prince@walsh.com";
$job=30;
$hobby1=32;
$hobby2=36;
$hobby3=14;
$about="我們都很清楚，這是個嚴謹的議題。需要考慮周詳唬爛的影響及因應對策。福卜拉斯說過，只要人們習慣於平淡無奇的言語，一個稍微激烈的思想在那里便成了粗野。";
$score=3.9;
$stmt->execute();

$name="禹育瑋";
$pas="ans5593n";
$gender=1;
$birth_date="1993-10-21";
$phone="0917381173";
$address="桃園市楊梅區陽東營區忠三街三段292巷425弄36號12樓";
$email="isabell.dickens@doyle.com";
$job=49;
$hobby1=17;
$hobby2=51;
$hobby3=20;
$about="每個人都不得不面對這些問題。在面對這種問題時，務必詳細考慮唬爛的各種可能。如果此時我們選擇忽略唬爛，那後果可想而知。這是不可避免的。謹慎地來說，我們必須考慮到所有可能。深入的探討唬爛，是釐清一切的關鍵。";
$score=4.5;
$stmt->execute();




$connect->close();
$stmt->close();