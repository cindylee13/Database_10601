-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- 主機: 127.0.0.1
-- 產生時間： 2017-11-28 10:18:36
-- 伺服器版本: 10.1.28-MariaDB
-- PHP 版本： 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `dvd`
--

-- --------------------------------------------------------

--
-- 資料表結構 `comment`
--

CREATE TABLE `comment` (
  `DVD_Id` int(11) NOT NULL,
  `Member_Id` int(11) NOT NULL,
  `Score` int(11) NOT NULL,
  `Comment_Text` text NOT NULL,
  `Date_Time` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 資料表結構 `dvd`
--

CREATE TABLE `dvd` (
  `Id` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Picture` varchar(500) DEFAULT NULL,
  `Publisher` varchar(50) NOT NULL,
  `Introduction` varchar(500) DEFAULT NULL,
  `Category` varchar(20) NOT NULL,
  `Publish_Date` date NOT NULL,
  `Level` varchar(20) NOT NULL,
  `Time` text NOT NULL,
  `Actor` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 資料表的匯出資料 `dvd`
--

INSERT INTO `dvd` (`Id`, `Name`, `Picture`, `Publisher`, `Introduction`, `Category`, `Publish_Date`, `Level`, `Time`, `Actor`) VALUES
(1, '樓下的房客', 'goo.gl/Y5SYUW', '愛貝克思', '『樓下的房客』為2016年暑假上映的黑色、幽默、奇幻、懸疑、推理電影，本片不僅改編自暢銷作家九把刀同名小說，並由崔震東執導並擔任製片、柴智屏監製、 九把刀編劇，黃金鐵三角再次聯手創造話題電影。「每個人的內心就像一個房間，門口緊緊的上了鎖，只有敲開它才能知道，門後也許藏著難以啟齒的私密慾望，也許更藏著一頭無法控制的邪惡巨獸。」導演崔震東表示，「這部電影是藉由一棟既真實又象徵人性的慾望公寓，帶領觀眾走進充滿張力的複雜人性世界，細細品嘗每個房間所隱藏的情慾糾葛。', '恐怖', '2017-10-08', '限制級', '1小時30分', '何潔柔,李杏,莊凱勛,李康生,任達華,邵雨薇,游安順'),
(2, '死小孩', 'https://goo.gl/DGWFm7', '采昌國際多媒體', '郊區小鎮發生連續離奇死亡命案，謠言盛傳大人們因為見到原本失蹤的小孩，接連在三天後死於非命。這個謠言傳到正在調查這些案件的記者駿也（有岡大貴飾演）耳中，起初他不願相信是小孩殺了大人，直到他在幼稚園工作的女友尚美（門脇麥飾演），也意外遭受離奇詛咒…。為了保護尚美，駿也只能不斷追查詛咒背後所發生的原因。此時，一位突如其來的神秘男子「童使」（瀧澤秀明飾演）現身。隨著他的笛音，一群死小孩的亡靈們從陰影、走廊、背後一一鑽出，開始對大人們索命…。究竟這位「童使」是什麼來歷？而這對戀人又能否逃出死亡危機？', '恐怖', '2017-11-10', '限制級', '111分鐘', '瀧澤秀明,有岡大貴,門脇麥'),
(3, '神祕家族', 'goo.gl/eV2xSB', '飛擎', '長跑選手苗苗（林依晨 飾）擁有一個平凡幸福的家庭，在平安夜全家慘遭滅門之禍，只有她一人倖存。苗苗看到慘案後失去意識，醒來時，竟發現時間又回到平安夜當天下午，她想要扭轉結局，更要尋找真相，她發現父親（姜武 飾）、母親（惠英紅 飾）和弟弟（陳曉 飾）都在隱藏一個巨大的秘密，這一切要從3年前，苗苗被神秘男子性侵（藍正龍 飾）那夜說起…苗苗狂奔提早回家，見到兇手的真實面貌，果然是雨夜性侵她的男子，她要如何提起勇氣，救回家人呢？', '恐怖', '2017-11-16', '限制級', '92分鐘', '林依晨,姜武,陳曉'),
(4, '鬼娃恰吉7-鬼娃儀式', 'https://goo.gl/us8RFU', 'Universal', '集結 歷代原班人馬經典大回歸。在過去四年來，妮可(費歐娜朵瑞夫 飾演)因神智不清謀殺罪嫌被判入院治療，她深信自己是謀殺了全家的主嫌而非鬼娃恰吉，然而當她的精神治療師引進了一種全新器材進入團體治療─一個看上去天真無邪的笑臉娃娃，一連串的死亡陰影再度籠罩上了整個療養院，妮可開始懷疑自己其實並沒有瘋。安迪(亞歷士文森 飾演)，「靈異入侵」首集的小男孩長大了，將加入妮可的聯手對抗陣容，然而在拯救妮可前，他必須先通過鬼娃新娘蒂芬妮(珍妮佛提莉 飾演)的考驗，蒂芬妮將不計任何代價，幫助她的摯愛-邪惡鬼娃恰吉稱霸天下。', '恐怖', '2017-11-24', '限制級', '91分鐘', '艾力克斯·文森,珍妮·奧古特,葛瑞特·葛拉漢'),
(5, '血色漫畫', 'https://goo.gl/q4QuQo', '勁藝', '過去活潑外向的艾蜜莉，因為一場家庭慘劇，變得古怪又孤僻，在學校不但經常受到老師關注，長期飽受同學霸凌的她，藉由創作殺人漫畫的奇特嗜好，來排解平日所累積的痛苦與憤怒。殊不知在同學們舉辦狂歡派對這天，漫畫中的情節竟活生生真實上演，她開始意識到事情似乎變得不太對勁…', '恐怖', '2017-12-22', '限制級', '87分鐘', '艾倫麥奈文'),
(6, '晚安媽咪', 'https://goo.gl/iHFTZU', '車庫娛樂', '一對漂亮的雙胞胎男孩住在鄉間的大屋裡，與世隔絕，無憂無慮，一心盼著媽咪回來。但等到的，是個頭部纏滿繃帶的女人，只留一雙眼睛狠狠打量著他們。孩子察覺事情不對，而試圖找回真正的媽咪：是脾氣、味道、臉上那顆痣、還是瞳孔的顏色？眼前這個陌生的母親是唯一的線索，他們只能從她「下手」，找出媽咪的下落。', '恐怖', '2017-06-09', '限制級', '100分鐘', '蘇珊娜·魏斯特'),
(7, '暗黑死神', 'https://goo.gl/ifPC19', '獨立', '一三個青少年想擺脫他們沒沒無聞又被霸凌的人生、打算透過拍攝視頻成為網紅，他們打算實行令人難以想像的殘酷行為，為此，他們嘗試尋找拍攝地點與目標，卻因此將他們引向更黑暗的深淵...', '恐怖', '2017-06-09', '限制級', '85分鐘', '葛蘭艾摩斯,路易斯麥多納,布萊恩湯普森,奈森葛林'),
(8, '剩女為亡', 'https://goo.gl/T8NfwJ', '勁藝', '一個古老的異教儀式，殘忍地奪走了多條年輕性命，只有凱麥倫是逃離兇手魔掌的唯一生還者。但多年過去，事件造成的陰影與獨自存活的傷痛，一再侵蝕著凱麥倫，試圖振作以回歸正常生活的她，近日身邊卻出現儀式的圖騰符號！難道，她永遠都無法擺脫這場悲劇嗎？', '恐怖', '2017-06-16', '限制級', '90分鐘', '阿卡沙·班克斯·維拉洛博斯'),
(9, '我的恐怖情人', 'https://goo.gl/g9U5ZK', '勁藝', '結婚多年的維奧拉與尼可拉，正面臨兩人婚姻最艱難的時刻，為了度過這次難關，他們選在週末前往幽靜的小木屋度假，嘗試找回彼此最初的情感。但當爭吵再度產生、猜疑轉化成了憤怒，過去熟悉的枕邊人，竟拿起手邊的斧頭，想置對方於死地...', '恐怖', '2017-06-18', '限制級', '83分鐘', '嘉貝拉萊特,布雷特羅伯茲,丹尼爾維維安'),
(10, '冤親債主', 'https://goo.gl/4v7Z56', '勁藝', '三名大學生在一棟老舊建築裡無意中召喚出惡靈「咒死魔」（The Bye Bye Man），並成為他的獵物。他們發現，解開「咒死魔」詛咒的唯一方式就是不要想到他，更不能提到他的名字，只要「他」一進到你腦中，就會被控制，可是，愈想活下去，就愈會想到他…', '恐怖', '2017-06-19', '保護級', '96分鐘', '凱莉安摩絲,費唐娜薇,道格瓊斯,道格拉斯史密斯,路西恩拉維斯康'),
(11, '走進希望無限的森林', 'https://goo.gl/Rxa3xf', '得利影視', '互信與絕望的危機，如何重建彼此不離不棄的信任？ 伊娃和妮兒兩姊妹，從小與父親住在北加州的紅木森林，接受體制外的自然教育。妮兒專心在她的課業研究，伊娃勤練舞蹈，心想成為舞蹈家，然而三人平靜祥和的步調，卻突然被莫名的斷電所改變，父親意外的喪命，兩姊妹頓失依靠。然而父親遺留下來的一桶汽油，則成為大斷電期間的奢侈品。妮兒男友的意外出現，似乎讓她們的感情發生的裂痕。在森林的深處，兩姊妹必須考驗彼此的信任，等待彼此的心慢慢癒合，尋找遠方的的未來…', '劇情', '2017-12-08', '普遍級', '111分鐘', '艾倫佩姬,伊雯瑞秋伍德'),
(12, '非正義搜查', 'https://goo.gl/UqdCMf', '采昌國際多媒體', '以1980年代的南韓全斗煥新軍部軍事獨裁為背景，在那個人人只求過好自己日子的時代，工作認真，忠於國家的重案組刑警姜成陣（孫賢周 飾），與深愛的妻子（羅美蘭 飾）和行動不便的可愛兒子一起居住在二層公寓裡，過著簡單平凡的生活。某日，不分晝夜抓捕犯人的成陣，在偶然的機會下逮捕了可疑的嫌疑人金泰成（趙達煥 飾），獲得了有可能破獲韓國第一起連環殺人案的線索。但卻在追查過程中，不知不覺被捲入國家安全部的新任部長崔圭南（張赫 飾）主導的秘密計劃。為了給家人更好的生活，即使知道部長的計謀也只能默默接受，也讓自己和家人共同陷入了危險的境地。', '劇情', '2017-12-15', '普遍級', '121分鐘', '孫賢周,張赫'),
(13, '劫後愚生', 'https://goo.gl/13nrjJ', '采昌國際多媒體', '經歷了15天的生死考驗之後，一群倖存者終於被救出崩塌隧道。劫後餘生的他們相約每周五聚會，分享生活經歷與煩惱；有人決定向父母出櫃，有人想要修復破碎的家庭，有人卻陷入困惑。他們都想把握人生第二次機會，尋找新夢想、新希望，讓生活更美好，但離開隧道後的生活才是考驗的開始…', '劇情', '2017-12-15', '普遍級', '95分鐘', '阿托羅瓦爾斯,羅爾西馬斯'),
(14, '無障礙殺手', 'https://goo.gl/Aqayck', '得利影視', '佐利因為脊椎受傷，巴柏則因為中度腦性麻痺行動不便，身為室友的兩人，平日只能以輪椅代步，而且都有怪習慣。佐利超會素描，喝飲料一定要用吸管，巴柏則個性衝動火爆，興奮和緊張時會在衣服上噴灑除臭劑。兩人的命運在遇到因打火任務受傷下肢癱瘓的前消防隊員魯帕佐夫之後，展開了新頁，尤其在兩人親眼目睹坐在輪椅上的魯帕佐夫，以神準的槍法毫不遲疑幹掉四個流氓之後。看看魯帕佐夫的正向思考與強韌意志如何影響佐利和巴柏，奮發向上並直視他們被恥笑和輕蔑的少年人生。', '劇情', '2017-12-15', '普遍級', '103分鐘', '薩伯區土羅契,佐丹費尼維西'),
(15, '觸不到的愛戀', 'https://goo.gl/Mo7MZu', '海鵬', '愛情像一場魔術 當魔術師男友突然消失，露意絲遭受到巨大打擊，被送進了精神病院。不久後，她神祕產下了一名男孩「天使」，天生擁有一種特殊能力：他能隱形，來去自如。 為擔心「天使」驚嚇到人們，露意絲警告他：在這個無法容忍差異的世界裡，絕不能暴露自己的存在。然而某天，「天使」卻無可救藥地愛上了紅髮女孩瑪德琳。雖然瑪德琳天生眼盲，只能藉由聲音與氣味、感受「天使」的存在，這卻反讓他能心無旁騖地愛著她，不必擔心秘密被發現，也使這份愛情得以繼續…。 為能親眼一睹「天使」的容顏，瑪德琳宣布一個將會打亂他們生活的消息：她要恢復視力！ 真愛需要眼見為憑嗎？重見光明的瑪德琳，真能看見「天使」嗎？秘密還能繼續隱藏嗎？愛情又將面臨如何衝擊？', '劇情', '2017-12-22', '普遍級', '79分鐘', '芙洛兒潔芙莉爾'),
(16, '狂暴少年', 'https://goo.gl/3F9ZUy', '得利影視', '一再遭受暴力欺壓，終於重新喚醒潛藏在內心的獸性！ 菲律普和少年感化院的朋友，雖然都是成人眼中的問題少年，他們可能粗俗無理無所事事，而這正也是老師長輩應該要趁早利用教育，導正他們從迷亂的歧途走向人生正軌的應有作為。雖然感化院也有正義的老師，對少年們曉以大義，企圖將他們救離罪惡的染缸，然而在權力勝過一切的偏鄉小鎮，警察不僅罔顧伸張正義的職責，反而變成與地方惡勢力爭錢奪勢的有照流氓，更離譜的是還利用職務之便，恐嚇這群被大人遺棄的少年，充當他們與黑道正面衝突的武器！', '劇情', '2017-12-22', '普遍級', '100分鐘', '馬丁左哥斯基'),
(17, '愛情三人行', 'https://goo.gl/UjWPKZ', '索尼影業', '史蘭斯登是位無可救藥的浪漫主義者，認為在跟年紀較大的有夫之婦摩根(克麗絲汀娜雅柏蓋特 事)一夜情後，以為遇見了天命真女，但沒想到摩根只是為了要報復老公格雷迪(湯馬斯海登喬許 飾)忽略她而已，然而格雷迪為了想要躲避摩根，異想天開的搬進了史蘭斯登的公寓，讓這段三角關係更加複雜…。本片由奧斯卡提名最佳男配湯馬斯海登喬許、【真愛每天一天】多姆納爾格里森、【鼠來寶:鼠喉大作讚 】克麗絲汀娜雅柏蓋特、【別闖陰陽界】妮娜杜波夫等演技派演員一起打造這部愛情喜劇。', '劇情', '2017-12-22', '普遍級', '93分鐘', '艾倫佩姬,伊雯瑞秋伍德'),
(18, '拉拉行不行', 'https://goo.gl/YMWJ5y', '得利影視', '在學校同學、傳統家庭、及社會觀感的三重考驗之下，他們會持續堅持他們對彼此的渴望嗎？ 就讀高中最後一年的女孩莎拉，面對的是家裡讓人窒息的空氣與嚴格卻毫無樂趣的學校生活。 不過在美麗的轉學生安德莉亞到來後，點亮了莎拉寂寞的世界。慢慢的，他們成為無話不談的好朋友，常常一起去派對瘋狂、窩在房間談天說地！漸漸的，莎拉與安德莉亞對彼此產生了超友誼的情愫，點燃的青春之火一發不可收拾。莎拉思想保守的父母該如何面對這樣衝擊？', '劇情', '2017-12-29', '普遍級', '70分鐘', '莎曼莎凱希朵,瑪麗亞蘭傑,派翠西亞盧爾'),
(19, '心靈小屋', 'https://goo.gl/MpjRPS', '勁藝', '歷經喪女的家庭悲劇，麥肯（山姆沃辛頓 飾）一直無法走出痛徹心扉的傷痛，某天他意外收到一封署名上帝的來信，邀他到小女兒被殺害的山中小屋，他充滿疑惑和憤怒，決定踏上這趟沉重的旅程，回到小屋找尋信中背後的秘密，而他在小屋發生的一切，就此改變了他的一生，他真的遇見上帝了嗎？', '劇情', '2017-12-29', '普遍級', '132分鐘', '山姆沃辛頓,奧塔薇亞史班森,蘭妲米契爾,提姆麥格羅'),
(20, '完全真相', 'https://goo.gl/Rxa3xf', '美昇', '由《冰原之心》導演寇特妮杭特執導 描述一位名為理查的律師向他守寡的女性友人發誓一定會讓他被控謀殺父親的兒子麥克無罪釋放。起初麥克坦承犯案，但隨著審判的進行，關於被害父親背後不為然知的真相也逐漸的曝光。最終理查雖然成功為麥克辯護成功，但他的新同事卻不肯就此罷休，試圖挖掘「完全的真相」究竟為何。', '劇情', '2017-12-30', '普遍級', '93分鐘', '基努李維,芮妮齊薇格');

-- --------------------------------------------------------

--
-- 資料表結構 `goods`
--

CREATE TABLE `goods` (
  `Id` int(11) NOT NULL,
  `DVD_Id` int(11) NOT NULL,
  `Price` int(11) NOT NULL,
  `Quantity` int(11) NOT NULL,
  `State` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 資料表結構 `member`
--

CREATE TABLE `member` (
  `Id` int(11) NOT NULL,
  `FName` text NOT NULL,
  `LName` text NOT NULL,
  `Account` varchar(50) NOT NULL,
  `Password` text NOT NULL,
  `Email` text NOT NULL,
  `Phone` text NOT NULL,
  `Sex` text NOT NULL,
  `Birthday` text NOT NULL,
  `ID_Card_Number` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 資料表結構 `order_list`
--

CREATE TABLE `order_list` (
  `Id` int(11) NOT NULL,
  `Member_Id` int(11) NOT NULL,
  `Cost` int(11) NOT NULL,
  `State` text NOT NULL,
  `Date_Time` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 資料表結構 `shopping_cart`
--

CREATE TABLE `shopping_cart` (
  `Member_Id` int(11) NOT NULL,
  `Goods_Id` int(11) NOT NULL,
  `Quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 資料表結構 `stroge_list`
--

CREATE TABLE `stroge_list` (
  `Member_Id` int(11) NOT NULL,
  `Goods_Id` int(11) NOT NULL,
  `Quantity` int(11) NOT NULL,
  `Cost` int(11) NOT NULL,
  `DATE_TIME` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 已匯出資料表的索引
--

--
-- 資料表索引 `comment`
--
ALTER TABLE `comment`
  ADD KEY `Member_Id` (`Member_Id`),
  ADD KEY `DVD_Id` (`DVD_Id`);

--
-- 資料表索引 `dvd`
--
ALTER TABLE `dvd`
  ADD PRIMARY KEY (`Id`),
  ADD UNIQUE KEY `Name` (`Name`);

--
-- 資料表索引 `goods`
--
ALTER TABLE `goods`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `DVD_Id` (`DVD_Id`);

--
-- 資料表索引 `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`Id`),
  ADD UNIQUE KEY `Account` (`Account`);

--
-- 資料表索引 `order_list`
--
ALTER TABLE `order_list`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `Member_Id` (`Member_Id`);

--
-- 資料表索引 `shopping_cart`
--
ALTER TABLE `shopping_cart`
  ADD KEY `Goods_Id` (`Goods_Id`),
  ADD KEY `Member_Id` (`Member_Id`);

--
-- 資料表索引 `stroge_list`
--
ALTER TABLE `stroge_list`
  ADD KEY `Goods_Id` (`Goods_Id`),
  ADD KEY `Member_Id` (`Member_Id`);

--
-- 已匯出資料表的限制(Constraint)
--

--
-- 資料表的 Constraints `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `comment_ibfk_1` FOREIGN KEY (`Member_Id`) REFERENCES `member` (`Id`),
  ADD CONSTRAINT `comment_ibfk_2` FOREIGN KEY (`DVD_Id`) REFERENCES `dvd` (`Id`);

--
-- 資料表的 Constraints `goods`
--
ALTER TABLE `goods`
  ADD CONSTRAINT `goods_ibfk_1` FOREIGN KEY (`DVD_Id`) REFERENCES `dvd` (`Id`);

--
-- 資料表的 Constraints `order_list`
--
ALTER TABLE `order_list`
  ADD CONSTRAINT `order_list_ibfk_1` FOREIGN KEY (`Member_Id`) REFERENCES `member` (`Id`);

--
-- 資料表的 Constraints `shopping_cart`
--
ALTER TABLE `shopping_cart`
  ADD CONSTRAINT `shopping_cart_ibfk_1` FOREIGN KEY (`Goods_Id`) REFERENCES `goods` (`Id`),
  ADD CONSTRAINT `shopping_cart_ibfk_2` FOREIGN KEY (`Member_Id`) REFERENCES `member` (`Id`);

--
-- 資料表的 Constraints `stroge_list`
--
ALTER TABLE `stroge_list`
  ADD CONSTRAINT `stroge_list_ibfk_1` FOREIGN KEY (`Goods_Id`) REFERENCES `goods` (`Id`),
  ADD CONSTRAINT `stroge_list_ibfk_2` FOREIGN KEY (`Member_Id`) REFERENCES `member` (`Id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;