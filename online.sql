-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Дек 25 2023 г., 21:26
-- Версия сервера: 10.4.25-MariaDB
-- Версия PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `online`
--

-- --------------------------------------------------------

--
-- Структура таблицы `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `user_id` varchar(25) NOT NULL,
  `username` varchar(70) NOT NULL,
  `password` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `admin`
--

INSERT INTO `admin` (`id`, `user_id`, `username`, `password`) VALUES
(1, '0000000001', 'Admin123', '202cb962ac59075b964b07152d234b70');

-- --------------------------------------------------------

--
-- Структура таблицы `coues_mavzu`
--

CREATE TABLE `coues_mavzu` (
  `id` int(11) NOT NULL,
  `CoursID` varchar(25) NOT NULL,
  `MavzuID` varchar(25) NOT NULL,
  `MavzuName` varchar(70) NOT NULL,
  `MavzuAbout` longtext NOT NULL,
  `MavzuLugat` longtext NOT NULL,
  `Video` varchar(150) NOT NULL,
  `VideoLine` varchar(9) NOT NULL,
  `MavzuNumber` int(3) NOT NULL,
  `Name1` varchar(100) NOT NULL,
  `Name2` varchar(100) NOT NULL,
  `Data` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `coues_mavzu`
--

INSERT INTO `coues_mavzu` (`id`, `CoursID`, `MavzuID`, `MavzuName`, `MavzuAbout`, `MavzuLugat`, `Video`, `VideoLine`, `MavzuNumber`, `Name1`, `Name2`, `Data`) VALUES
(1, '1703531155', '1703531215', '1-dars', '1-dars haqida malumot', '<table class=\"table\">\r\n    <thead>\r\n        <tr><th>	1 과	</th><th>	1 과	</th>\r\n    </thead>\r\n    <tbody>\r\n        <tr><td>	공장  	</td><td>	Zavod	</td></tr>\r\n<tr><td>	처음 뵙겠습니다	</td><td>	Ilk bor ko`rishib turibmiz	</td></tr>\r\n<tr><td>	잘 부탁드립니다	</td><td>	Yaxshi chiqishib ketamiz	</td></tr>\r\n<tr><td>	잘 했어요(수고했어요)	</td><td>	Zahmat chekdiz	</td></tr>\r\n<tr><td>	늦어서 죄송합니다	</td><td>	Kech qolganligim uchun uzr!	</td></tr>\r\n<tr><td>	먼저 들어가겠습니다	</td><td>	Oldin ketyapman	</td></tr>\r\n<tr><td>	환영합니다	</td><td>	Xush Kelibsiz	</td></tr>\r\n<tr><td>	다음 부터는 늦지 마세요	</td><td>	Keyingi safardan kech qolmang!	</td></tr>\r\n<tr><td>	조심히 들어가세요	</td><td>	Ehtiyot bo`lib borib keling!	</td></tr>\r\n<tr><td>	내일 봅시다	</td><td>	Ertaga ko`rishamiz!	</td></tr>\r\n<tr><td>	아프로	</td><td>	Kelajakda	</td></tr>\r\n<tr><td>	Ot+ (이)라고 하다	</td><td>	Deb atalmoq	</td></tr>\r\n<tr><td>	반말	</td><td>	Sansirash	</td></tr>\r\n<tr><td>	표현	</td><td>	Ibora	</td></tr>\r\n<tr><td>	대화	</td><td>	Dialog	</td></tr>\r\n<tr><td>	맞는	</td><td>	To`g`risi	</td></tr>\r\n<tr><td>	상황	</td><td>	Holat	</td></tr>\r\n<tr><td>	연결하다	</td><td>	Bog`lamoq, ulamoq	</td></tr>\r\n<tr><td>	일상 생활	</td><td>	Odatiy hayot	</td></tr>\r\n<tr><td>	잘 먹겠습니다	</td><td>	Yaxshi yeyman	</td></tr>\r\n<tr><td>	많이 드세요	</td><td>	Ko`p yeng!	</td></tr>\r\n<tr><td>	다녀오겠습니다	</td><td>	Borib kelaman	</td></tr>\r\n<tr><td>	잘 먹겄습니다	</td><td>	Yaxshi yedim	</td></tr>\r\n<tr><td>	별말씀을요	</td><td>	Arzimaydi	</td></tr>\r\n<tr><td>	어서 오세요	</td><td>	Xush Kelibsiz	</td></tr>\r\n<tr><td>	아닙니다	</td><td>	Arzimaydi	</td></tr>\r\n<tr><td>	괜찮습니다	</td><td>	Hechqisi yo`q	</td></tr>\r\n<tr><td>	완성하세요	</td><td>	Yakunlang, tamomlang	</td></tr>\r\n<tr><td>	천천히	</td><td>	Sekin sekin	</td></tr>\r\n<tr><td>	맛있게	</td><td>	Mazali	</td></tr>\r\n<tr><td>	인사의 종류	</td><td>	Salomlashish turi	</td></tr>\r\n<tr><td>	정중한 인사	</td><td>	Muloyim salomlashuv	</td></tr>\r\n<tr><td>	상체 	</td><td>	Tana	</td></tr>\r\n<tr><td>	기울이다	</td><td>	Egmoq, bugmoq	</td></tr>\r\n<tr><td>	인사하다	</td><td>	Salomlashmoq, bildirmoq	</td></tr>\r\n<tr><td>	사장님	</td><td>	Boshliq	</td></tr>\r\n<tr><td>	Ot + (이)나	</td><td>	Yoki	</td></tr>\r\n<tr><td>	반장님	</td><td>	Brigadir	</td></tr>\r\n<tr><td>	나누다	</td><td>	Bo`lishmoq	</td></tr>\r\n<tr><td>	Fe`l/ Sifat + (을)/(ㄹ) 대	</td><td>	….gan paytda	</td></tr>\r\n<tr><td>	사과	</td><td>	Kechirim so`rash	</td></tr>\r\n<tr><td>	감사	</td><td>	Raxmat	</td></tr>\r\n<tr><td>	보통 	</td><td>	Odatda	</td></tr>\r\n<tr><td>	평소	</td><td>	Odatda	</td></tr>\r\n<tr><td>	직장	</td><td>	Ish joyi	</td></tr>\r\n<tr><td>	상사	</td><td>	Boshliq	</td></tr>\r\n<tr><td>	갑여운 인사	</td><td>	Yengil salomlashuv	</td></tr>\r\n<tr><td>	거의	</td><td>	Deyarli	</td></tr>\r\n<tr><td>	숙이다	</td><td>	Egmoq, bukmoq	</td></tr>\r\n<tr><td>	복도	</td><td>	Koridor	</td></tr>\r\n<tr><td>	엘리베이터	</td><td>	Lift	</td></tr>\r\n<tr><td>	같은 곳	</td><td>	O`xshash joy	</td></tr>\r\n<tr><td>	두 번	</td><td>	2 marta	</td></tr>\r\n<tr><td>	이상	</td><td>	Dan ko`p	</td></tr>\r\n<tr><td>	만나다	</td><td>	Uchrashmoq	</td></tr>\r\n<tr><td>	주의할 점	</td><td>	E`tibor qilish kerak bo`lgan jihat	</td></tr>\r\n<tr><td>	동료	</td><td>	Hamkasb	</td></tr>\r\n<tr><td>	손을 흔들다	</td><td>	Qo`l silkimoq	</td></tr>\r\n<tr><td>	예의	</td><td>	Odob	</td></tr>\r\n<tr><td>	예의가 아닙니다	</td><td>	Odobdan emas	</td></tr>\r\n<tr><td>	포옹하다	</td><td>	Quchoqlamoq	</td></tr>\r\n<tr><td>	어깨	</td><td>	Yelka	</td></tr>\r\n<tr><td>	손을 올리다	</td><td>	Qo`lni qo`ymoq	</td></tr>\r\n<tr><td>	어린 아이	</td><td>	Yosh bola	</td></tr>\r\n<tr><td>	어리다	</td><td>	Yoshi kichik	</td></tr>\r\n<tr><td>	고개	</td><td>	Bosh	</td></tr>\r\n<tr><td>	굽히다	</td><td>	Egmoq, bukmoq	</td></tr>\r\n<tr><td>	고생하다 / 수고하다	</td><td>	Zahmat chekmoq	</td></tr>\r\n<tr><td>	기계를 수리하다	</td><td>	Asbobni tuzatmoq	</td></tr>\r\n<tr><td>	문화	</td><td>	Madaniyat	</td></tr>\r\n<tr><td>	악수	</td><td>	Qo`l berib ko`rishmoq	</td></tr></tbody></table>\r\n', '01/e50-1.webm', '00:21:03', 1, '', '', '2023-12-25 19:06:55'),
(2, '1703531155', '1703531249', '2-dars', '2-dars haqida', '<table class=\"table\">	<tr>	<th>	2 과	</th>	<th>	2 과	</th>	</tr>	\r\n	<tr>	<td>	회사의  직급  (예시)	</td>	<td>	Idoradagi lavozim (misol)	</td>	<tr>	\r\n	<tr>	<td>	공장장님	</td>	<td>	Zavod boshlig`i	</td>	<tr>	\r\n	<tr>	<td>	직장동료	</td>	<td>	Ish joyidagi hamkasb	</td>	<tr>	\r\n	<tr>	<td>	에서 왔습니다	</td>	<td>	….dan keldim	</td>	<tr>	\r\n	<tr>	<td>	부인	</td>	<td>	Rafiqa, umr yo`ldosh	</td>	<tr>	\r\n	<tr>	<td>	남편	</td>	<td>	Er, 	</td>	<tr>	\r\n	<tr>	<td>	아들	</td>	<td>	O`g`il farzand	</td>	<tr>	\r\n	<tr>	<td>	딸	</td>	<td>	Qiz farzand	</td>	<tr>	\r\n	<tr>	<td>	공무원	</td>	<td>	Rasmiy xizmatchi	</td>	<tr>	\r\n	<tr>	<td>	농부	</td>	<td>	Dehqon	</td>	<tr>	\r\n	<tr>	<td>	주부	</td>	<td>	Uy bekasi	</td>	<tr>	\r\n	<tr>	<td>	Ot + (이)세요	</td>	<td>	….dir (hurmat shaklida)	</td>	<tr>	\r\n	<tr>	<td>	외국인등록증	</td>	<td>	Migrant guvohnomasi	</td>	<tr>	\r\n	<tr>	<td>	호칭	</td>	<td>	Nomlanish	</td>	<tr>	\r\n	<tr>	<td>	Ot + 보다	</td>	<td>	Ga qaraganda	</td>	<tr>	\r\n	<tr>	<td>	부르다	</td>	<td>	Chaqirmoq, nomlamoq	</td>	<tr>	\r\n	<tr>	<td>	더라도	</td>	<td>	…sa ham	</td>	<tr>	\r\n	<tr>	<td>	형 (오빠)	</td>	<td>	Aka	</td>	<tr>	\r\n	<tr>	<td>	누나 (언니)	</td>	<td>	Opa	</td>	<tr>	\r\n	<tr>	<td>	Ot + 라면	</td>	<td>	…da bo`lsa	</td>	<tr>	\r\n	<tr>	<td>	등의	</td>	<td>	Va boshqalar	</td>	<tr>	\r\n	<tr>	<td>	직위	</td>	<td>	Lavozim	</td>	<tr>	\r\n	<tr>	<td>	부르는 것	</td>	<td>	Atalish, chaqirish	</td>	<tr>	\r\n	<tr>	<td>	가게	</td>	<td>	Do`kon	</td>	<tr>	\r\n	<tr>	<td>	점원	</td>	<td>	Sotuvchi	</td>	<tr>	\r\n	<tr>	<td>	이모	</td>	<td>	Xola	</td>	<tr>	\r\n	<tr>	<td>	필수품	</td>	<td>	Ehtiyoj mahsulot	</td>	<tr>	\r\n	<tr>	<td>	세면도구	</td>	<td>	Yuvinish anjomlari	</td>	<tr>	\r\n	<tr>	<td>	면도기	</td>	<td>	Britva	</td>	<tr>	\r\n	<tr>	<td>	수건	</td>	<td>	Sochiq	</td>	<tr>	\r\n	<tr>	<td>	칫솔	</td>	<td>	Zubnaya shyotka	</td>	<tr>	\r\n	<tr>	<td>	비누	</td>	<td>	Sovun	</td>	<tr>	\r\n	<tr>	<td>	치약	</td>	<td>	Zubnaya pasta	</td>	<tr>	\r\n	<tr>	<td>	린스	</td>	<td>	Balzam	</td>	<tr>	\r\n	<tr>	<td>	샴푸	</td>	<td>	Shampun	</td>	<tr>	\r\n	<tr>	<td>	주임님	</td>	<td>	Erkak boshliq	</td>	<tr>	\r\n	<tr>	<td>	사모님	</td>	<td>	Ayol boshliq	</td>	<tr>	\r\n	<tr>	<td>	수첩	</td>	<td>	Bloknot	</td>	<tr>	\r\n	<tr>	<td>	세탁기	</td>	<td>	Kir yuvish mashinasi	</td>	<tr>	\r\n	<tr>	<td>	냉장고	</td>	<td>	Xolodilnik	</td>	<tr>	\r\n	<tr>	<td>	계산기	</td>	<td>	Kalkulyator	</td>	<tr>	\r\n	<tr>	<td>	물건	</td>	<td>	Narsa	</td>	<tr>	\r\n	<tr>	<td>	고향	</td>	<td>	Vatan	</td>	<tr>	</table>\r\n', '01/e50-2.webm', '00:21:17', 2, '', '', '2023-12-25 19:07:29'),
(3, '1703531155', '1703531277', '3-dars', '3-mavzu haqida', '<table class=\"table\">	<tr>	<th>	3과	</th>	<th>	3과	</th>	</tr>	\r\n	<tr>	<td>	주중	</td>	<td>	Xaftani o`rtasi,   ish kunlari	</td>	<tr>	\r\n	<tr>	<td>	월급(날)	</td>	<td>	Maosh (oladigan kun)	</td>	<tr>	\r\n	<tr>	<td>	벌써	</td>	<td>	Allaqachon	</td>	<tr>	\r\n	<tr>	<td>	매달	</td>	<td>	Har oy	</td>	<tr>	\r\n	<tr>	<td>	그런데	</td>	<td>	Lekin,  aytgancha	</td>	<tr>	\r\n	<tr>	<td>	요일	</td>	<td>	Xafta kuni	</td>	<tr>	\r\n	<tr>	<td>	날짜	</td>	<td>	Sana	</td>	<tr>	\r\n	<tr>	<td>	생일  (생신)	</td>	<td>	Tug`ilgan kun	</td>	<tr>	\r\n	<tr>	<td>	신정 (양력 설날)	</td>	<td>	Yangi yil, (quyosh kalendari)	</td>	<tr>	\r\n	<tr>	<td>	구정 (음력 살날)	</td>	<td>	Yangi yil (oy kalendari)	</td>	<tr>	\r\n	<tr>	<td>	삼일절 (3-1절)	</td>	<td>	Mustaqillik harakat kuni	</td>	<tr>	\r\n	<tr>	<td>	어린이 날	</td>	<td>	Bolalar kuni	</td>	<tr>	\r\n	<tr>	<td>	석가탄신일	</td>	<td>	Budda tug`ilgan kun	</td>	<tr>	\r\n	<tr>	<td>	어버이날	</td>	<td>	Ota-onalar kuni	</td>	<tr>	\r\n	<tr>	<td>	스승의 날	</td>	<td>	O`qituvchilar kuni	</td>	<tr>	\r\n	<tr>	<td>	현충일	</td>	<td>	Xotira kuni	</td>	<tr>	\r\n	<tr>	<td>	광복절	</td>	<td>	Mustaqillik kuni	</td>	<tr>	\r\n	<tr>	<td>	추석	</td>	<td>	Hosil bayrami	</td>	<tr>	\r\n	<tr>	<td>	개천절	</td>	<td>	Koreya 1-davlat tashkil topgan kuni	</td>	<tr>	\r\n	<tr>	<td>	크리스마스	</td>	<td>	Christmas	</td>	<tr>	\r\n	<tr>	<td>	언제	</td>	<td>	Qachon	</td>	<tr>	\r\n	<tr>	<td>	Ot : 후에	</td>	<td>	…dan keyin	</td>	<tr>	\r\n	<tr>	<td>	Ot + 의	</td>	<td>	…….ning	</td>	<tr>	\r\n	<tr>	<td>	같이	</td>	<td>	Birga	</td>	<tr>	\r\n	<tr>	<td>	식사하다	</td>	<td>	Ovqatlanmoq	</td>	<tr>	\r\n	<tr>	<td>	특별한 날	</td>	<td>	Maxsus kun	</td>	<tr>	\r\n	<tr>	<td>	첫 번째	</td>	<td>	Ilk marta	</td>	<tr>	\r\n	<tr>	<td>	중요하다	</td>	<td>	Tinch	</td>	<tr>	\r\n	<tr>	<td>	생각하다	</td>	<td>	O`ylamoq	</td>	<tr>	\r\n	<tr>	<td>	아기	</td>	<td>	Bola	</td>	<tr>	\r\n	<tr>	<td>	태어나다	</td>	<td>	Dunyoga kelmoq	</td>	<tr>	\r\n	<tr>	<td>	만	</td>	<td>	Faqat	</td>	<tr>	\r\n	<tr>	<td>	살	</td>	<td>	Yosh	</td>	<tr>	\r\n	<tr>	<td>	처음음 맞는 생일	</td>	<td>	Birinchi bor keaadigan tug`ilgan kun.	</td>	<tr>	\r\n	<tr>	<td>	돌	</td>	<td>	Bir yosh	</td>	<tr>	\r\n	<tr>	<td>	파티	</td>	<td>	Bazm	</td>	<tr>	\r\n	<tr>	<td>	잔치	</td>	<td>	Bazm	</td>	<tr>	\r\n	<tr>	<td>	아이	</td>	<td>	Bola	</td>	<tr>	\r\n	<tr>	<td>	부모님	</td>	<td>	Ota ona	</td>	<tr>	\r\n	<tr>	<td>	친척	</td>	<td>	Qarindosh	</td>	<tr>	\r\n	<tr>	<td>	모이다	</td>	<td>	Yig`ilmoq	</td>	<tr>	\r\n	<tr>	<td>	축하하다	</td>	<td>	Tabriklamoq	</td>	<tr>	\r\n	<tr>	<td>	건강	</td>	<td>	Sog`liq	</td>	<tr>	\r\n	<tr>	<td>	기원하다	</td>	<td>	Tilamoq	</td>	<tr>	\r\n	<tr>	<td>	세	</td>	<td>	Yosh (hurmat shaklida)	</td>	<tr>	\r\n	<tr>	<td>	환갑	</td>	<td>	60 yosh	</td>	<tr>	\r\n	<tr>	<td>	가족	</td>	<td>	Oila	</td>	<tr>	\r\n	<tr>	<td>	장수	</td>	<td>	Uzoq umr	</td>	<tr>	\r\n	<tr>	<td>	생일을 맞이하다	</td>	<td>	Tug`ilgan kunni kutib olmoq	</td>	<tr>	\r\n	<tr>	<td>	축하해 주며	</td>	<td>	Tabriklanib	</td>	<tr>	\r\n	<tr>	<td>	케이크	</td>	<td>	Tort	</td>	<tr>	\r\n	<tr>	<td>	준비해	</td>	<td>	Tayyorlab	</td>	<tr>	\r\n	<tr>	<td>	미역국	</td>	<td>	Dengiz karamli sho`rva (tug`ilgan kunda ichiladi)	</td>	<tr>	\r\n	<tr>	<td>	첫 월급	</td>	<td>	Birinchi oylik	</td>	<tr>	\r\n	<tr>	<td>	월급을 타다	</td>	<td>	Maoshni olmoq	</td>	<tr>	\r\n	<tr>	<td>	평소 /주로/보통	</td>	<td>	Odatda	</td>	<tr>	\r\n	<tr>	<td>	고마운 분들에게	</td>	<td>	Minnatdor bo`lgan odamlarga	</td>	<tr>	\r\n	<tr>	<td>	한턱내다	</td>	<td>	Haq bermoq	</td>	<tr>	\r\n	<tr>	<td>	겨울	</td>	<td>	Qish fasli	</td>	<tr>	\r\n	<tr>	<td>	보내다 (보내시다)	</td>	<td>	Jo`natmoq, (hurmat shaklida)	</td>	<tr>	\r\n	<tr>	<td>	빨간	</td>	<td>	Qizil	</td>	<tr>	\r\n	<tr>	<td>	내복	</td>	<td>	Ichki kombinzon	</td>	<tr>	\r\n	<tr>	<td>	요즘	</td>	<td>	Shu kunlarda	</td>	<tr>	\r\n	<tr>	<td>	경우	</td>	<td>	Holat	</td>	<tr>	\r\n	<tr>	<td>	Fe`l / sifat + («다» tushib qoladi) 기 때문에	</td>	<td>	Sababli, tufayli	</td>	<tr>	\r\n	<tr>	<td>	영양제	</td>	<td>	Ozuqaviy modda	</td>	<tr>	\r\n	<tr>	<td>	화장품	</td>	<td>	Kosmetik mahsulot	</td>	<tr>	\r\n	<tr>	<td>	현금	</td>	<td>	Naqd pul	</td>	<tr>	\r\n	<tr>	<td>	드리다	</td>	<td>	Bermoq (hurmat shaklida)	</td>	<tr>	</table>\r\n', '01/e50-3.webm', '00:21:31', 3, '', '', '2023-12-25 19:07:57'),
(4, '1703531155', '1703531310', '4-dars', '4-dars haqida', '<table class=\"table\">	<tr>	<th>	4과	</th>	<th>	4과	</th>	</tr>	\r\n	<tr>	<td>	숫자	</td>	<td>	Raqam	</td>	<tr>	\r\n	<tr>	<td>	인분 / 삼 인분	</td>	<td>	Kishi /3  portsiya (xitoy soni foy-ladi)	</td>	<tr>	\r\n	<tr>	<td>	현대 가구	</td>	<td>	Zamonaviy mebel	</td>	<tr>	\r\n	<tr>	<td>	그런데	</td>	<td>	Lekin / ha aytgancha	</td>	<tr>	\r\n	<tr>	<td>	라이터	</td>	<td>	Zajigalka	</td>	<tr>	\r\n	<tr>	<td>	담배	</td>	<td>	Sigareta 	</td>	<tr>	\r\n	<tr>	<td>	거기/여기/저기	</td>	<td>	U yer / bu yer / ana u yer	</td>	<tr>	\r\n	<tr>	<td>	개	</td>	<td>	Jonsiz narsalarga (ta)	</td>	<tr>	\r\n	<tr>	<td>	권	</td>	<td>	Kitob (ta)	</td>	<tr>	\r\n	<tr>	<td>	그릇	</td>	<td>	Kosa / idish (ta)	</td>	<tr>	\r\n	<tr>	<td>	대	</td>	<td>	Texnika (ta)	</td>	<tr>	\r\n	<tr>	<td>	마리	</td>	<td>	Hayvon (ta)	</td>	<tr>	\r\n	<tr>	<td>	명/분	</td>	<td>	Odam/ kishi (ta)	</td>	<tr>	\r\n	<tr>	<td>	바구니	</td>	<td>	Savat (ta)	</td>	<tr>	\r\n	<tr>	<td>	박스	</td>	<td>	Korobka (ta)	</td>	<tr>	\r\n	<tr>	<td>	병	</td>	<td>	Shisha/ butilka (ta)	</td>	<tr>	\r\n	<tr>	<td>	봉지	</td>	<td>	Paket (ta)	</td>	<tr>	\r\n	<tr>	<td>	송이	</td>	<td>	Bosh (ta)	</td>	<tr>	\r\n	<tr>	<td>	자루	</td>	<td>	Dasta (ta)	</td>	<tr>	\r\n	<tr>	<td>	잔	</td>	<td>	Stakan(ta)	</td>	<tr>	\r\n	<tr>	<td>	장	</td>	<td>	Qog`oz (ta)	</td>	<tr>	\r\n	<tr>	<td>	켤레	</td>	<td>	Juft (ta)	</td>	<tr>	\r\n	<tr>	<td>	포대	</td>	<td>	Qop/ xalta (ta)	</td>	<tr>	\r\n	<tr>	<td>	이불	</td>	<td>	Ko`rpa	</td>	<tr>	\r\n	<tr>	<td>	같이	</td>	<td>	Birga 	</td>	<tr>	\r\n	<tr>	<td>	사용하다	</td>	<td>	Foydalanmoq	</td>	<tr>	\r\n	<tr>	<td>	삽	</td>	<td>	Belkurak	</td>	<tr>	\r\n	<tr>	<td>	소주	</td>	<td>	Koreys aroq nomi	</td>	<tr>	\r\n	<tr>	<td>	우표	</td>	<td>	Marka	</td>	<tr>	\r\n	<tr>	<td>	신발	</td>	<td>	Oyoq kiyim	</td>	<tr>	\r\n	<tr>	<td>	치수 / 사이즈	</td>	<td>	Razmer	</td>	<tr>	\r\n	<tr>	<td>	유럽	</td>	<td>	Yevropa	</td>	<tr>	\r\n	<tr>	<td>	다르다	</td>	<td>	Farq qilmoq/ turli xil	</td>	<tr>	\r\n	<tr>	<td>	사용되다	</td>	<td>	Foydalanilmoq	</td>	<tr>	\r\n	<tr>	<td>	일반적	</td>	<td>	Umumiy odatda	</td>	<tr>	\r\n	<tr>	<td>	여성	</td>	<td>	Ayol	</td>	<tr>	\r\n	<tr>	<td>	남성	</td>	<td>	Erkak	</td>	<tr>	\r\n	<tr>	<td>	시금치	</td>	<td>	Ismaloq	</td>	<tr>	\r\n	<tr>	<td>	알파벳	</td>	<td>	Ingliz alifbosi	</td>	<tr>	\r\n	<tr>	<td>	근	</td>	<td>	Koreys o`lchov birligi (kg)	</td>	<tr>	\r\n	<tr>	<td>	평	</td>	<td>	Koreys o`lchov birligi (m2)	</td>	<tr>	\r\n	<tr>	<td>	법적	</td>	<td>	Qonunga ko`ra/ qonunan	</td>	<tr>	\r\n	<tr>	<td>	단위	</td>	<td>	O`lchov birligi	</td>	<tr>	\r\n	<tr>	<td>	무게를 재다	</td>	<td>	Og`irligini o`lchamoq	</td>	<tr>	\r\n	<tr>	<td>	구하다	</td>	<td>	Qidirmoq	</td>	<tr>	\r\n	<tr>	<td>	잠옷	</td>	<td>	Pijama (tungi kiyim)	</td>	<tr>	\r\n	<tr>	<td>	혹은	</td>	<td>	yoki	</td>	<tr>	</table>\r\n', '01/e50-4.webm', '00:21:48', 4, '', '', '2023-12-25 19:08:30'),
(5, '1703531155', '1703531338', '5-dars', '5dars haqida', '<table class=\"table\">	<tr>	<th>	5과	</th>	<th>	5과	</th>	</tr>\r\n	<tr>	<td>	퇴근 시간	</td>	<td>	Ishdan qaytish vaqti	</td>	<tr>\r\n	<tr>	<td>	점심 시간	</td>	<td>	Tushlik vaqti	</td>	<tr>\r\n	<tr>	<td>	새벽	</td>	<td>	Tong sahar	</td>	<tr>\r\n	<tr>	<td>	이러나다	</td>	<td>	Urnidan turmoq	</td>	<tr>\r\n	<tr>	<td>	세수하다	</td>	<td>	Yuz qo`lini yuvmoq	</td>	<tr>\r\n	<tr>	<td>	이를 닦다	</td>	<td>	Tishni tozalamoq	</td>	<tr>\r\n	<tr>	<td>	출근하다	</td>	<td>	Ishga bormoq	</td>	<tr>\r\n	<tr>	<td>	야근하다	</td>	<td>	Tungi smenada ishlamoq	</td>	<tr>\r\n	<tr>	<td>	퇴근하다	</td>	<td>	Ishdan qaytmoq	</td>	<tr>\r\n	<tr>	<td>	샤워하다	</td>	<td>	Dush qabul qilmoq	</td>	<tr>\r\n	<tr>	<td>	인터넷을하다	</td>	<td>	Internetda ishlamoq	</td>	<tr>\r\n	<tr>	<td>	에 (시간)	</td>	<td>	Da (vaqtga nisbatan)	</td>	<tr>\r\n	<tr>	<td>	그냥	</td>	<td>	Shunchaki	</td>	<tr>\r\n	<tr>	<td>	쯤	</td>	<td>	Taxminan/ …larcha	</td>	<tr>\r\n	<tr>	<td>	다음에 같이 밥 먹자	</td>	<td>	Keyinroq birga ovqatlanamiz	</td>	<tr>\r\n	<tr>	<td>	다음에 술 한 잔 하자	</td>	<td>	Keyin 50/50 uramiz	</td>	<tr>\r\n	<tr>	<td>	특히	</td>	<td>	Ayniqsa	</td>	<tr>\r\n	<tr>	<td>	헤어지다	</td>	<td>	Ajralishmoq	</td>	<tr>\r\n	<tr>	<td>	연락할게	</td>	<td>	Xabarlashamiz	</td>	<tr>\r\n	<tr>	<td>	이런	</td>	<td>	Bunday	</td>	<tr>\r\n	<tr>	<td>	아쉽다	</td>	<td>	Afsuslanmoq	</td>	<tr>\r\n	<tr>	<td>	생각하다	</td>	<td>	O`ylamoq	</td>	<tr>\r\n	<tr>	<td>	구체적	</td>	<td>	Aniq	</td>	<tr>\r\n	<tr>	<td>	날짜	</td>	<td>	Sana	</td>	<tr>\r\n	<tr>	<td>	시간이 나오다	</td>	<td>	Vaqti bo`lmoq	</td>	<tr>\r\n	<tr>	<td>	시간 나다	</td>	<td>	Vaqt bo`lganda	</td>	<tr>\r\n	<tr>	<td>	언제든지	</td>	<td>	… qachon bo`lsa ham	</td>	<tr>\r\n	<tr>	<td>	놀러 오세요	</td>	<td>	Kirib o`ting/ aylanib keling	</td>	<tr>\r\n	<tr>	<td>	 Fe`l (다)+ 더라도	</td>	<td>	….sa ham	</td>	<tr>\r\n	<tr>	<td>	미리	</td>	<td>	Oldindan	</td>	<tr>\r\n	<tr>	<td>	약속을 잡다	</td>	<td>	Uchrashuv belgilamoq	</td>	<tr>\r\n	<tr>	<td>	잊다	</td>	<td>	Unutmoq	</td>	<tr>\r\n	<tr>	<td>	지키다	</td>	<td>	Amal qilmoq	</td>	<tr>\r\n	<tr>	<td>	도착하다	</td>	<td>	Yetib kelmoq	</td>	<tr>\r\n	<tr>	<td>	일할 준비를 하다	</td>	<td>	Ishga tayyorgarlik ko`rmoq	</td>	<tr>\r\n	<tr>	<td>	그렇지만	</td>	<td>	Lekin	</td>	<tr></table>\r\n', '01/e50-5.webm', '00:05:11', 5, '', '', '2023-12-25 19:08:58'),
(6, '1703531155', '1703531375', '6-dars', '6-dars haqida', '<table class=\"table\">	<tr>	<th>	6과	</th>	<th>	6과	</th>	</tr>	\r\n	<tr>	<td>	위	</td>	<td>	Usti	</td>	<tr>	\r\n	<tr>	<td>	아래	</td>	<td>	Pasti/ osti	</td>	<tr>	\r\n	<tr>	<td>	안	</td>	<td>	Ichi	</td>	<tr>	\r\n	<tr>	<td>	밖	</td>	<td>	Tashqari	</td>	<tr>	\r\n	<tr>	<td>	앞	</td>	<td>	Oldi	</td>	<tr>	\r\n	<tr>	<td>	뒤	</td>	<td>	Orqasi	</td>	<tr>	\r\n	<tr>	<td>	옆	</td>	<td>	Yoni	</td>	<tr>	\r\n	<tr>	<td>	사이	</td>	<td>	O`rtasi (orasi)  (ikkita narsani)	</td>	<tr>	\r\n	<tr>	<td>	왼쪽	</td>	<td>	Chap tomon	</td>	<tr>	\r\n	<tr>	<td>	오른쪽	</td>	<td>	O`ng tomon	</td>	<tr>	\r\n	<tr>	<td>	멀다	</td>	<td>	Uzoq	</td>	<tr>	\r\n	<tr>	<td>	가깝다	</td>	<td>	Yaqin	</td>	<tr>	\r\n	<tr>	<td>	높다	</td>	<td>	Baland	</td>	<tr>	\r\n	<tr>	<td>	낮다	</td>	<td>	Past	</td>	<tr>	\r\n	<tr>	<td>	가운데(중간)	</td>	<td>	O`rtasida (orasida) (ko`p narsani)	</td>	<tr>	\r\n	<tr>	<td>	사무실	</td>	<td>	Ofis	</td>	<tr>	\r\n	<tr>	<td>	공장	</td>	<td>	Zavod	</td>	<tr>	\r\n	<tr>	<td>	화장실	</td>	<td>	Hojatxona	</td>	<tr>	\r\n	<tr>	<td>	작업장	</td>	<td>	Ish joyi	</td>	<tr>	\r\n	<tr>	<td>	식당	</td>	<td>	Restoran	</td>	<tr>	\r\n	<tr>	<td>	사거리	</td>	<td>	Chorraha	</td>	<tr>	\r\n	<tr>	<td>	큰길	</td>	<td>	Katta yo`l	</td>	<tr>	\r\n	<tr>	<td>	횡단보도	</td>	<td>	Peshexod	</td>	<tr>	\r\n	<tr>	<td>	육교	</td>	<td>	Ko`prikli peshexod	</td>	<tr>	\r\n	<tr>	<td>	건너편	</td>	<td>	Ro`parasida / yo`lni narigi tomonida	</td>	<tr>	\r\n	<tr>	<td>	공원	</td>	<td>	Bog`	</td>	<tr>	\r\n	<tr>	<td>	지하철역	</td>	<td>	Metro bekati	</td>	<tr>	\r\n	<tr>	<td>	터미널	</td>	<td>	Avto vokzal	</td>	<tr>	\r\n	<tr>	<td>	영화관 (극장)	</td>	<td>	Kinoteatr	</td>	<tr>	\r\n	<tr>	<td>	24시 편의점	</td>	<td>	24 soatlik do`kon	</td>	<tr>	\r\n	<tr>	<td>	공중전화	</td>	<td>	Telefon butka	</td>	<tr>	\r\n	<tr>	<td>	은행	</td>	<td>	Bank	</td>	<tr>	\r\n	<tr>	<td>	경찰서	</td>	<td>	Politsiya mahkamasi	</td>	<tr>	\r\n	<tr>	<td>	우체국	</td>	<td>	Pochta	</td>	<tr>	\r\n	<tr>	<td>	회사	</td>	<td>	Idora	</td>	<tr>	\r\n	<tr>	<td>	방향	</td>	<td>	Tomon / taraf	</td>	<tr>	\r\n	<tr>	<td>	복	</td>	<td>	Shimol	</td>	<tr>	\r\n	<tr>	<td>	남	</td>	<td>	Janub	</td>	<tr>	\r\n	<tr>	<td>	동	</td>	<td>	Sharq	</td>	<tr>	\r\n	<tr>	<td>	서	</td>	<td>	G`arb	</td>	<tr>	\r\n	<tr>	<td>	병원	</td>	<td>	Kasalxona	</td>	<tr>	\r\n	<tr>	<td>	약국	</td>	<td>	Dorixona	</td>	<tr>	\r\n	<tr>	<td>	슈퍼마켓(=슈퍼)	</td>	<td>	Super market	</td>	<tr>	\r\n	<tr>	<td>	매표소	</td>	<td>	Kassa	</td>	<tr>	\r\n	<tr>	<td>	근처	</td>	<td>	Yaqin atrofda	</td>	<tr>	\r\n	<tr>	<td>	Ot + (으)로 	</td>	<td>	…da / …ga 	</td>	<tr>	\r\n	<tr>	<td>	Fe`l + 아서 / 어서 (순서)	</td>	<td>	….ib (ketma ketlik)	</td>	<tr>	\r\n	<tr>	<td>	고용센터	</td>	<td>	Ishga yollash markazi	</td>	<tr>	\r\n	<tr>	<td>	(을)/(ㄹ) 건너다	</td>	<td>	…ni kesib o`tmoq	</td>	<tr>	\r\n	<tr>	<td>	신호등	</td>	<td>	Svetofor	</td>	<tr>	\r\n	<tr>	<td>	이정표	</td>	<td>	Yozuvli yo`l belgisi	</td>	<tr>	\r\n	<tr>	<td>	출구	</td>	<td>	Chiqish	</td>	<tr>	\r\n	<tr>	<td>	입구	</td>	<td>	Kirish	</td>	<tr>	\r\n	<tr>	<td>	호선	</td>	<td>	Yo`nalish / liniya	</td>	<tr>	</table>\r\n', '01/e50-6.webm', '00:04:53', 6, '', '', '2023-12-25 19:09:35'),
(7, '1703531155', '1703531405', '7-dars', '7-dars haqida', '<table class=\"table\">	<tr>	<th>	7과	</th>	<th>	7과	</th>	</tr>	\r\n	<tr>	<td>	동전	</td>	<td>	Tanga	</td>	<tr>	\r\n	<tr>	<td>	지폐	</td>	<td>	Qog`oz pul	</td>	<tr>	\r\n	<tr>	<td>	수표	</td>	<td>	Bank cheki	</td>	<tr>	\r\n	<tr>	<td>	현금카드	</td>	<td>	Naqd pul kartasi	</td>	<tr>	\r\n	<tr>	<td>	Pul + 짜리	</td>	<td>	…lik	</td>	<tr>	\r\n	<tr>	<td>	달러	</td>	<td>	Dollar	</td>	<tr>	\r\n	<tr>	<td>	바꾸다 (환전하다)	</td>	<td>	Almashtirmoq (pulga nisbatan)	</td>	<tr>	\r\n	<tr>	<td>	상품권	</td>	<td>	Podarochniy kupon	</td>	<tr>	\r\n	<tr>	<td>	영수증	</td>	<td>	Xarid cheki	</td>	<tr>	\r\n	<tr>	<td>	운동화	</td>	<td>	Krasovka	</td>	<tr>	\r\n	<tr>	<td>	Ot + 에	</td>	<td>	..ga	</td>	<tr>	\r\n	<tr>	<td>	Ot + 하고	</td>	<td>	Bilan	</td>	<tr>	\r\n	<tr>	<td>	얼마예요?	</td>	<td>	Qancha.?	</td>	<tr>	\r\n	<tr>	<td>	핸드폰	</td>	<td>	Qo`l telefoni	</td>	<tr>	\r\n	<tr>	<td>	주의	</td>	<td>	Diqqat	</td>	<tr>	\r\n	<tr>	<td>	화폐	</td>	<td>	Valyuta / pul	</td>	<tr>	\r\n	<tr>	<td>	관리	</td>	<td>	Nazorat	</td>	<tr>	\r\n	<tr>	<td>	접다	</td>	<td>	Buklamoq	</td>	<tr>	\r\n	<tr>	<td>	구기다	</td>	<td>	G`ijimlamoq	</td>	<tr>	\r\n	<tr>	<td>	넣다	</td>	<td>	Qo`ymoq	</td>	<tr>	\r\n	<tr>	<td>	피다	</td>	<td>	Yoymoq	</td>	<tr>	\r\n	<tr>	<td>	보관하다	</td>	<td>	Saqlamoq	</td>	<tr>	\r\n	<tr>	<td>	(으)세요	</td>	<td>	….ing	</td>	<tr>	\r\n	<tr>	<td>	주세요	</td>	<td>	Bering	</td>	<tr>	\r\n	<tr>	<td>	아/어주세요	</td>	<td>	…ib bering	</td>	<tr>	\r\n	<tr>	<td>	계란	</td>	<td>	Tuxum	</td>	<tr>	\r\n	<tr>	<td>	모두	</td>	<td>	Hamma	</td>	<tr>	\r\n	<tr>	<td>	Ot + (을)(ㄹ)   Ot +   (으)로	</td>	<td>	Ot …ni        Ot  ….ga	</td>	<tr>	\r\n	<tr>	<td>	바꿔 주세요	</td>	<td>	Almashtirib bering	</td>	<tr>	\r\n	<tr>	<td>	다시 드리겠습니다	</td>	<td>	Qaytadan beraman	</td>	<tr>	\r\n	<tr>	<td>	Ot + 에 대해 	</td>	<td>	…haqida	</td>	<tr>	\r\n	<tr>	<td>	알아 보다	</td>	<td>	Bilib ko`rmoq	</td>	<tr>	\r\n	<tr>	<td>	다보탑	</td>	<td>	Tabo` minorasi	</td>	<tr>	\r\n	<tr>	<td>	우수성	</td>	<td>	Buyuk	</td>	<tr>	\r\n	<tr>	<td>	알리다	</td>	<td>	Bildirmoq / tushuncha bermoq	</td>	<tr>	\r\n	<tr>	<td>	의미	</td>	<td>	Ma`no	</td>	<tr>	\r\n	<tr>	<td>	벼 이삭	</td>	<td>	Sholi boshoq	</td>	<tr>	\r\n	<tr>	<td>	풍년	</td>	<td>	Mo`l hosil	</td>	<tr>	\r\n	<tr>	<td>	기원하다	</td>	<td>	Tilamoq	</td>	<tr>	\r\n	<tr>	<td>	시대	</td>	<td>	Davr	</td>	<tr>	\r\n	<tr>	<td>	명장	</td>	<td>	General	</td>	<tr>	\r\n	<tr>	<td>	십장생	</td>	<td>	Uzoq umrning 10ta unsuri	</td>	<tr>	\r\n	<tr>	<td>	하나로	</td>	<td>	Bittaga	</td>	<tr>	\r\n	<tr>	<td>	고귀함	</td>	<td>	Oliy janob	</td>	<tr>	\r\n	<tr>	<td>	신선함	</td>	<td>	Tozalik	</td>	<tr>	\r\n	<tr>	<td>	장수	</td>	<td>	Uzoq umr	</td>	<tr>	\r\n	<tr>	<td>	대학자	</td>	<td>	Olim	</td>	<tr>	\r\n	<tr>	<td>	성리학	</td>	<td>	Konfutizm	</td>	<tr>	\r\n	<tr>	<td>	정치가	</td>	<td>	Siyosat	</td>	<tr>	\r\n	<tr>	<td>	집대성하다	</td>	<td>	Umumlashtirmoq	</td>	<tr>	\r\n	<tr>	<td>	호	</td>	<td>	Laqab/ taxallus	</td>	<tr>	\r\n	<tr>	<td>	대왕	</td>	<td>	Qirol / janobi oliylari	</td>	<tr>	\r\n	<tr>	<td>	한글	</td>	<td>	Alifbo	</td>	<tr>	\r\n	<tr>	<td>	창제	</td>	<td>	Kashf qilish	</td>	<tr>	\r\n	<tr>	<td>	등	</td>	<td>	…ga o`xshash	</td>	<tr>	\r\n	<tr>	<td>	수많다	</td>	<td>	Ko`p sonli	</td>	<tr>	\r\n	<tr>	<td>	문인이자	</td>	<td>	Adabiyotchi	</td>	<tr>	\r\n	<tr>	<td>	서화가	</td>	<td>	Xattot	</td>	<tr>	\r\n	<tr>	<td>	거스름돈	</td>	<td>	qaytim	</td>	<tr>	\r\n	<tr>	<td>	업적	</td>	<td>	muvaffaqiyat	</td>	<tr>	</table>\r\n', '01/e50-7.webm', '00:08:34', 7, '', '', '2023-12-25 19:10:05'),
(8, '1703531155', '1703531431', '8-dars', '8-dars haqida', '<table class=\"table\">	<tr>	<th>	8 과	</th>	<th>	8과	</th>	</tr>	\r\n	<tr>	<td>	쇼핑 센터	</td>	<td>	Xarid markazi	</td>	<tr>	\r\n	<tr>	<td>	의류매장	</td>	<td>	Kiyim kechak do`koni	</td>	<tr>	\r\n	<tr>	<td>	용산 전자상가	</td>	<td>	(Yo`ngsan) elektronika do`koni	</td>	<tr>	\r\n	<tr>	<td>	동대문 시장	</td>	<td>	To`ngtemun (sharqiy katta darvoza) bozori	</td>	<tr>	\r\n	<tr>	<td>	마트	</td>	<td>	Market	</td>	<tr>	\r\n	<tr>	<td>	가구점	</td>	<td>	Mebel do`kon	</td>	<tr>	\r\n	<tr>	<td>	중고 가게	</td>	<td>	Ishlatilgan buyumlari do`koni	</td>	<tr>	\r\n	<tr>	<td>	재활용센터	</td>	<td>	Qayta ishlash markazi	</td>	<tr>	\r\n	<tr>	<td>	값 (가격)	</td>	<td>	Narx	</td>	<tr>	\r\n	<tr>	<td>	거스름 돈	</td>	<td>	Qaytim puli	</td>	<tr>	\r\n	<tr>	<td>	게산하다 	</td>	<td>	Hisoblamoq	</td>	<tr>	\r\n	<tr>	<td>	환불하다	</td>	<td>	Pulni qaytarib olmoq	</td>	<tr>	\r\n	<tr>	<td>	물건 값을 깎다	</td>	<td>	Narsa narxini arzonlashtirmoq	</td>	<tr>	\r\n	<tr>	<td>	돈을 내다	</td>	<td>	Pul to`lamoq	</td>	<tr>	\r\n	<tr>	<td>	거슬러 주다	</td>	<td>	Qaytim bermoq	</td>	<tr>	\r\n	<tr>	<td>	값이 내리다/오르다	</td>	<td>	Narxi to`shmoq/ko`tarilmoq 	</td>	<tr>	\r\n	<tr>	<td>	바꾸다 (교환하다)	</td>	<td>	Almashtirmoq (narsalarga nisbatan)	</td>	<tr>	\r\n	<tr>	<td>	마음에 들다/ 안 들다	</td>	<td>	Qalbiga yoqmoq/yoqmaslik	</td>	<tr>	\r\n	<tr>	<td>	최근에 나오다	</td>	<td>	So`ngi paytlarda chiqqan	</td>	<tr>	\r\n	<tr>	<td>	인기가 많다	</td>	<td>	Muhlisi ko`p	</td>	<tr>	\r\n	<tr>	<td>	필요하다	</td>	<td>	Kerak	</td>	<tr>	\r\n	<tr>	<td>	편하다	</td>	<td>	Qulay	</td>	<tr>	\r\n	<tr>	<td>	따뜻하다	</td>	<td>	Iliq	</td>	<tr>	\r\n	<tr>	<td>	Ot + 에서	</td>	<td>	…dan	</td>	<tr>	\r\n	<tr>	<td>	Fe`l + 에서  (harakat fe`li bilan)	</td>	<td>	…dan	</td>	<tr>	\r\n	<tr>	<td>	(이/가) 어때요?	</td>	<td>	….qanday	</td>	<tr>	\r\n	<tr>	<td>	(아/오)아  보다	</td>	<td>	…ib ko`rmoq	</td>	<tr>	\r\n	<tr>	<td>	Barcha qolgan unlilar 어 보다	</td>	<td>	… ib ko`rmoq	</td>	<tr>	\r\n	<tr>	<td>	잘 나가다	</td>	<td>	Mos kelmoq	</td>	<tr>	\r\n	<tr>	<td>	냉장고	</td>	<td>	Muzlatgich	</td>	<tr>	\r\n	<tr>	<td>	사용하다 / 이용하다 / 쓰다	</td>	<td>	Foydalanmoq	</td>	<tr>	\r\n	<tr>	<td>	운동화	</td>	<td>	Krasovka	</td>	<tr>	\r\n	<tr>	<td>	목도리	</td>	<td>	Sharf	</td>	<tr>	\r\n	<tr>	<td>	남방	</td>	<td>	Erkakalar Ko`ylak	</td>	<tr>	\r\n	<tr>	<td>	티셔츠	</td>	<td>	Futbolka	</td>	<tr>	\r\n	<tr>	<td>	코트	</td>	<td>	Palto	</td>	<tr>	\r\n	<tr>	<td>	점퍼 (잠바)	</td>	<td>	Kurtka	</td>	<tr>	\r\n	<tr>	<td>	양복	</td>	<td>	Kostyum	</td>	<tr>	\r\n	<tr>	<td>	여성복	</td>	<td>	Ayollar kostyum yubkasi	</td>	<tr>	\r\n	<tr>	<td>	(모자를) 쓰다	</td>	<td>	Bosh kiyimni kiymoq	</td>	<tr>	\r\n	<tr>	<td>	(목도리를) 하다	</td>	<td>	Sharfni o`ramoq	</td>	<tr>	\r\n	<tr>	<td>	고르다 (정하다)	</td>	<td>	Tanlamoq/ belgilamoq	</td>	<tr>	\r\n	<tr>	<td>	구경하다	</td>	<td>	Tomosha qilmoq	</td>	<tr>	\r\n	<tr>	<td>	비싸다	</td>	<td>	Qimmat	</td>	<tr>	\r\n	<tr>	<td>	싸다	</td>	<td>	Arzon	</td>	<tr>	\r\n	<tr>	<td>	불편하다	</td>	<td>	Noqulay	</td>	<tr>	\r\n	<tr>	<td>	파란색	</td>	<td>	Ko`k rang	</td>	<tr>	\r\n	<tr>	<td>	영수증	</td>	<td>	Xarid cheki	</td>	<tr>	\r\n	<tr>	<td>	여기요	</td>	<td>	Marhamat, mana, hey	</td>	<tr>	\r\n	<tr>	<td>	(으)려고하다 (하다 bn kelsa )	</td>	<td>	….moqchi	</td>	<tr>	\r\n	<tr>	<td>	(으) 려고        (gapni oxirida kelsa)	</td>	<td>	…moqchi	</td>	<tr>	\r\n	<tr>	<td>	(으)려고         (gapni o`rtasida kelsa)	</td>	<td>	…ish uchun	</td>	<tr>	\r\n	<tr>	<td>	도	</td>	<td>	Ham	</td>	<tr>	\r\n	<tr>	<td>	너무	</td>	<td>	Juda	</td>	<tr>	\r\n	<tr>	<td>	Fe`l/ sifat + (을)(ㄹ) 때	</td>	<td>	…gan paytda	</td>	<tr>	\r\n	<tr>	<td>	Ot + 때	</td>	<td>	…gan paytda	</td>	<tr>	\r\n	<tr>	<td>	새 것	</td>	<td>	Yangi narsa	</td>	<tr>	\r\n	<tr>	<td>	은것	</td>	<td>	…gan narsa	</td>	<tr>	\r\n	<tr>	<td>	꼭	</td>	<td>	Aniq	</td>	<tr>	\r\n	<tr>	<td>	챙기다	</td>	<td>	Saqlab qo`ymoq/ o`zi bn olib kelmoq	</td>	<tr>	\r\n	<tr>	<td>	챙기십시오	</td>	<td>	Saqlab qo`ying 	</td>	<tr>	\r\n	<tr>	<td>	가격표	</td>	<td>	Narx etiketkasi	</td>	<tr>	\r\n	<tr>	<td>	떼다	</td>	<td>	Yulib olmoq	</td>	<tr>	\r\n	<tr>	<td>	지 마십시오	</td>	<td>	…mang(hurmat shaklida)	</td>	<tr>	\r\n	<tr>	<td>	체크카드	</td>	<td>	Plastik karta	</td>	<tr>	\r\n	<tr>	<td>	산 물건	</td>	<td>	Sotib olingan narsa	</td>	<tr>	\r\n	<tr>	<td>	취소하다	</td>	<td>	Bekor qilmoq	</td>	<tr>	\r\n	<tr>	<td>	입금하다	</td>	<td>	Shotga pul tashlamoq	</td>	<tr>	\r\n	<tr>	<td>	경우	</td>	<td>	Holat	</td>	<tr>	\r\n	<tr>	<td>	짧게	</td>	<td>	Qisqa muddatda	</td>	<tr>	\r\n	<tr>	<td>	길게	</td>	<td>	Uzoq muddatda	</td>	<tr>	\r\n	<tr>	<td>	일주일	</td>	<td>	Xafta	</td>	<tr>	\r\n	<tr>	<td>	알아두십시오	</td>	<td>	Bilib bering	</td>	<tr>	\r\n	<tr>	<td>	수수료	</td>	<td>	Xizmat haqqi	</td>	<tr>	\r\n	<tr>	<td>	빼다	</td>	<td>	Yechib olmoq/ kesib olmoq( pulga nisbatan)	</td>	<tr>	\r\n	<tr>	<td>	내 (제)	</td>	<td>	Mening	</td>	<tr>	\r\n	<tr>	<td>	반환 버튼을 누릅니다	</td>	<td>	Qaytarib  berish tugmasini bosiladi.	</td>	<tr>	\r\n	<tr>	<td>	꺼내다	</td>	<td>	Chiqarib olmoq	</td>	<tr>	\r\n	<tr>	<td>	색깔	</td>	<td>	Rang	</td>	<tr>	\r\n	<tr>	<td>	빨간색	</td>	<td>	Qizil rang	</td>	<tr>	\r\n	<tr>	<td>	주황색	</td>	<td>	To`q sariq rang	</td>	<tr>	\r\n	<tr>	<td>	노랑색	</td>	<td>	Sariq rang	</td>	<tr>	\r\n	<tr>	<td>	초록색(녹색)	</td>	<td>	Yashil rang	</td>	<tr>	\r\n	<tr>	<td>	파랑색	</td>	<td>	Ochiq ko`k rang	</td>	<tr>	\r\n	<tr>	<td>	남색	</td>	<td>	Ko`k rang	</td>	<tr>	\r\n	<tr>	<td>	보라색	</td>	<td>	Baqlajon rang	</td>	<tr>	\r\n	<tr>	<td>	흰색  (하얀색)	</td>	<td>	Oq rang	</td>	<tr>	\r\n	<tr>	<td>	회색	</td>	<td>	Kul rang	</td>	<tr>	\r\n	<tr>	<td>	검정색 (검은색)	</td>	<td>	Qora rang	</td>	<tr>	\r\n	<tr>	<td>	분홍색	</td>	<td>	Pushti rang	</td>	<tr>	\r\n	<tr>	<td>	연두색	</td>	<td>	Salatoviy rang	</td>	<tr>	\r\n	<tr>	<td>	밤색	</td>	<td>	Kashtan rang	</td>	<tr>	\r\n	<tr>	<td>	하늘색	</td>	<td>	Moviy rang	</td>	<tr>	\r\n	<tr>	<td>	바꾸다 (환전하다)	</td>	<td>	(pulni) almashtirmoq	</td>	<tr>	</table>\r\n', '01/e50-8.webm', '00:08:45', 8, '', '', '2023-12-25 19:10:31'),
(9, '1703531155', '1703531467', '9-dars', '9-dars haqida', '<table class=\"table\">	<tr>	<th>	9과	</th>	<th>	9과	</th>	</tr>	\r\n	<tr>	<td>	야식	</td>	<td>	24:00dan keyin yeyiladigan ovqat	</td>	<tr>	\r\n	<tr>	<td>	간식	</td>	<td>	Poldnik	</td>	<tr>	\r\n	<tr>	<td>	전단지	</td>	<td>	Menyu varaqasi	</td>	<tr>	\r\n	<tr>	<td>	배달(하다)	</td>	<td>	Dostavka(qilmoq)	</td>	<tr>	\r\n	<tr>	<td>	군만두	</td>	<td>	Pelmeni	</td>	<tr>	\r\n	<tr>	<td>	피자	</td>	<td>	Pitza	</td>	<tr>	\r\n	<tr>	<td>	서비스를 주다	</td>	<td>	Bonus bermoq	</td>	<tr>	\r\n	<tr>	<td>	해 먹다	</td>	<td>	Tayyorlab yemoq	</td>	<tr>	\r\n	<tr>	<td>	주문하다 (시켜 먹다)	</td>	<td>	Buyurtma bermoq( buyurtma berib yemoq)	</td>	<tr>	\r\n	<tr>	<td>	오랜만	</td>	<td>	Uzoq vaqt bo`lgan	</td>	<tr>	\r\n	<tr>	<td>	그냥	</td>	<td>	Shunchaki	</td>	<tr>	\r\n	<tr>	<td>	여보세요	</td>	<td>	Allo	</td>	<tr>	\r\n	<tr>	<td>	중국집	</td>	<td>	Xitoy restorani	</td>	<tr>	\r\n	<tr>	<td>	(을)(ㄹ) 까요? (제안)	</td>	<td>	..mizmi?	</td>	<tr>	\r\n	<tr>	<td>	고 싶다	</td>	<td>	…ni xohlamoq	</td>	<tr>	\r\n	<tr>	<td>	고 싶어 하다	</td>	<td>	…ni xohlaydi	</td>	<tr>	\r\n	<tr>	<td>	갖다 주다	</td>	<td>	Yetkazib bermoq	</td>	<tr>	\r\n	<tr>	<td>	생맥주	</td>	<td>	Quyma pivo	</td>	<tr>	\r\n	<tr>	<td>	씨 씨	</td>	<td>	Banochniy idishlar uchun litr	</td>	<tr>	\r\n	<tr>	<td>	리터	</td>	<td>	Litr	</td>	<tr>	\r\n	<tr>	<td>	양념	</td>	<td>	Ziravorlangan	</td>	<tr>	\r\n	<tr>	<td>	튼튼가구공장	</td>	<td>	Mustahkam mebellar zavodi	</td>	<tr>	\r\n	<tr>	<td>	훈제치킨	</td>	<td>	Dudlangan tovuq go`shti	</td>	<tr>	\r\n	<tr>	<td>	짜리	</td>	<td>	…lik	</td>	<tr>	\r\n	<tr>	<td>	예약하다	</td>	<td>	Joy bron qilmoq	</td>	<tr>	\r\n	<tr>	<td>	자리가 있다	</td>	<td>	Joy bor	</td>	<tr>	\r\n	<tr>	<td>	외식하다 (나가서 먹다)	</td>	<td>	Ko`chada ovqatlanmoq/ restoranda ovqatlanmoq	</td>	<tr>	\r\n	<tr>	<td>	메뉴판	</td>	<td>	Menyular doskasi	</td>	<tr>	\r\n	<tr>	<td>	식권	</td>	<td>	Ovqat taloni	</td>	<tr>	\r\n	<tr>	<td>	반찬	</td>	<td>	Qo`shimcha ovqat/ salat	</td>	<tr>	\r\n	<tr>	<td>	개인접시	</td>	<td>	Shaxsiy tarelka	</td>	<tr>	\r\n	<tr>	<td>	셀프	</td>	<td>	O`z o`ziga xizmat ko`rsatish	</td>	<tr>	\r\n	<tr>	<td>	수저	</td>	<td>	Nabor (qoshiq tayoqcha)	</td>	<tr>	\r\n	<tr>	<td>	물컵	</td>	<td>	Suv stakan	</td>	<tr>	\r\n	<tr>	<td>	물수건	</td>	<td>	Vlajnaya salfetka	</td>	<tr>	\r\n	<tr>	<td>	이쑤시개	</td>	<td>	Zubo chistka	</td>	<tr>	\r\n	<tr>	<td>	귀이개	</td>	<td>	Uxo chistka	</td>	<tr>	\r\n	<tr>	<td>	전골	</td>	<td>	Portsiya	</td>	<tr>	\r\n	<tr>	<td>	이상	</td>	<td>	….dan baland	</td>	<tr>	\r\n	<tr>	<td>	이하	</td>	<td>	… dan kam	</td>	<tr>	\r\n	<tr>	<td>	추가(하다)	</td>	<td>	Qo`shimcha (qilmoq)	</td>	<tr>	\r\n	<tr>	<td>	손님	</td>	<td>	Mijoz	</td>	<tr>	\r\n	<tr>	<td>	물	</td>	<td>	Suv	</td>	<tr>	\r\n	<tr>	<td>	아/어 드릴까요?	</td>	<td>	…ib beraymi	</td>	<tr>	\r\n	<tr>	<td>	무료	</td>	<td>	Bepul	</td>	<tr>	\r\n	<tr>	<td>	어린(어린이만)	</td>	<td>	Yoshi kichkina	</td>	<tr>	\r\n	<tr>	<td>	주문 받으세요	</td>	<td>	Buyurtma oling	</td>	<tr>	\r\n	<tr>	<td>	해 주다(만들어 주다)	</td>	<td>	Tayyorlab bermoq	</td>	<tr>	\r\n	<tr>	<td>	누가 돈을 낼까요?	</td>	<td>	Kim pulini to`laydi	</td>	<tr>	\r\n	<tr>	<td>	직급	</td>	<td>	Lavozim/ mansab	</td>	<tr>	\r\n	<tr>	<td>	값을 내다	</td>	<td>	Ovqat pulini to`lamoq	</td>	<tr>	\r\n	<tr>	<td>	..(는)경우	</td>	<td>	…digan holat	</td>	<tr>	\r\n	<tr>	<td>	여러분	</td>	<td>	Ko`pchilikka qarab aytilganda ishlatiladi(xonimlar va janoblar)	</td>	<tr>	\r\n	<tr>	<td>	새로온 근로자	</td>	<td>	Yangi ishchi	</td>	<tr>	\r\n	<tr>	<td>	선배	</td>	<td>	…oldin kelgan	</td>	<tr>	\r\n	<tr>	<td>	후배	</td>	<td>	…keyin kelgan	</td>	<tr>	\r\n	<tr>	<td>	한 번 쯤	</td>	<td>	Taxminan bir marta	</td>	<tr>	\r\n	<tr>	<td>	직장생활	</td>	<td>	Ish faoliyati	</td>	<tr>	\r\n	<tr>	<td>	함깨	</td>	<td>	Birgalikda	</td>	<tr>	\r\n	<tr>	<td>	직장인	</td>	<td>	Ishchi	</td>	<tr>	\r\n	<tr>	<td>	밥값 내다	</td>	<td>	Ovqat pulini to`lamoq	</td>	<tr>	\r\n	<tr>	<td>	식으로	</td>	<td>	Usuli bn/ yo`li bn	</td>	<tr>	\r\n	<tr>	<td>	돌아가면서	</td>	<td>	Qaytib kelganda	</td>	<tr>	\r\n	<tr>	<td>	번씩	</td>	<td>	…tadan	</td>	<tr>	\r\n	<tr>	<td>	사기	</td>	<td>	Sotib olish	</td>	<tr>	\r\n	<tr>	<td>	승진	</td>	<td>	Rag`batlantirish	</td>	<tr>	\r\n	<tr>	<td>	마련하다	</td>	<td>	Tashkillashtirmoq/ tuzmoq	</td>	<tr>	\r\n	<tr>	<td>	대신	</td>	<td>	O`rniga	</td>	<tr>	\r\n	<tr>	<td>	내주게다는	</td>	<td>	To`lab beradigan	</td>	<tr>	\r\n	<tr>	<td>	뜻	</td>	<td>	Ma`no	</td>	<tr>	\r\n	<tr>	<td>	한턱내다	</td>	<td>	Haq bermoq	</td>	<tr>	\r\n	<tr>	<td>	젊다	</td>	<td>	Yosh (yoshi kichkina)	</td>	<tr>	\r\n	<tr>	<td>	쏘다	</td>	<td>	Haq bermoq/ to`lamoq	</td>	<tr>	\r\n	<tr>	<td>	일상적	</td>	<td>	Odatda	</td>	<tr>	\r\n	<tr>	<td>	그런데	</td>	<td>	Lekin, ha aytgancha	</td>	<tr>	\r\n	<tr>	<td>	다소	</td>	<td>	Bir qancha	</td>	<tr>	\r\n	<tr>	<td>	거창한	</td>	<td>	Katta, ulkan	</td>	<tr>	\r\n	<tr>	<td>	느낌	</td>	<td>	Hissiyot	</td>	<tr>	\r\n	<tr>	<td>	반면	</td>	<td>	Boshqa tarafdan	</td>	<tr>	\r\n	<tr>	<td>	끼 =밥	</td>	<td>	Ovqat	</td>	<tr>	\r\n	<tr>	<td>	비용	</td>	<td>	Xarajat	</td>	<tr>	\r\n	<tr>	<td>	부담하다	</td>	<td>	Javobgarlikni o`z zimmasiga olmoq	</td>	<tr>	\r\n	<tr>	<td>	주소	</td>	<td>	Adres	</td>	<tr>	\r\n	<tr>	<td>	정확히	</td>	<td>	Aniq	</td>	<tr>	\r\n	<tr>	<td>	알려주다	</td>	<td>	Bildirmoq	</td>	<tr>	\r\n	<tr>	<td>	현금	</td>	<td>	Naqd pul	</td>	<tr>	\r\n	<tr>	<td>	단말기	</td>	<td>	Terminal	</td>	<tr>	\r\n	<tr>	<td>	가져오다	</td>	<td>	O`zi bn olib kelmoq	</td>	<tr>	\r\n	<tr>	<td>	달라다	</td>	<td>	So`ramoq	</td>	<tr>	\r\n	<tr>	<td>	빈 그릇	</td>	<td>	Bo`sh idish	</td>	<tr>	\r\n	<tr>	<td>	대개	</td>	<td>	Hammasini	</td>	<tr>	\r\n	<tr>	<td>	비닐봉지	</td>	<td>	Tsellofan paket, plastik paket	</td>	<tr>	\r\n	<tr>	<td>	싸다	</td>	<td>	O`ramoq, solmoq	</td>	<tr>	\r\n	<tr>	<td>	내놓다	</td>	<td>	Chiqarib qo`ymoq	</td>	<tr>	\r\n	<tr>	<td>	수거해	</td>	<td>	Yig`ishtirib olmoq, ajratib olmoq	</td>	<tr>	\r\n	<tr>	<td>	만약	</td>	<td>	Agar	</td>	<tr>	\r\n	<tr>	<td>	국물이	</td>	<td>	Ovqat suvi	</td>	<tr>	\r\n	<tr>	<td>	남다	</td>	<td>	Qolmoq	</td>	<tr>	\r\n	<tr>	<td>	흐르지 않도록	</td>	<td>	Oqmasligi uchun	</td>	<tr>	\r\n	<tr>	<td>	흐르다	</td>	<td>	Oqmoq	</td>	<tr>	\r\n	<tr>	<td>	없애다	</td>	<td>	Yo`qotmoq, qutulmoq	</td>	<tr>	\r\n	<tr>	<td>	분식집	</td>	<td>	Arzon oshxona	</td>	<tr>	</table>\r\n', '01/e50-9.webm', '00:09:14', 9, '', '', '2023-12-25 19:11:07'),
(10, '1703531155', '1703531501', '10-dars', '9-dars haqida', '<table class=\"table\">	<tr>	<th>	10과	</th>	<th>	10과	</th>	</tr>	\r\n	<tr>	<td>	마을 버스	</td>	<td>	Qishloq abtobusi	</td>	<tr>	\r\n	<tr>	<td>	시내 버스	</td>	<td>	Shahar avtobusi	</td>	<tr>	\r\n	<tr>	<td>	시외 / 고속버스 	</td>	<td>	Shaharlararo qatnovchi avtobus	</td>	<tr>	\r\n	<tr>	<td>	공항버스	</td>	<td>	Aeroport avtobusi	</td>	<tr>	\r\n	<tr>	<td>	지하철	</td>	<td>	Metro	</td>	<tr>	\r\n	<tr>	<td>	KTX /고속열차	</td>	<td>	Tez yurar poyezd	</td>	<tr>	\r\n	<tr>	<td>	모봄택시	</td>	<td>	Namunaviy taksi	</td>	<tr>	\r\n	<tr>	<td>	임산부	</td>	<td>	Homilador	</td>	<tr>	\r\n	<tr>	<td>	배	</td>	<td>	Kema	</td>	<tr>	\r\n	<tr>	<td>	승합차	</td>	<td>	Mikro avtobus	</td>	<tr>	\r\n	<tr>	<td>	승용차	</td>	<td>	Yengil avtomobil	</td>	<tr>	\r\n	<tr>	<td>	트럭	</td>	<td>	Yuk mashinasi	</td>	<tr>	\r\n	<tr>	<td>	자전거	</td>	<td>	Velosiped	</td>	<tr>	\r\n	<tr>	<td>	오토바이	</td>	<td>	Mototsikel	</td>	<tr>	\r\n	<tr>	<td>	기숙사	</td>	<td>	Yotoqxona	</td>	<tr>	\r\n	<tr>	<td>	센터	</td>	<td>	Markaz	</td>	<tr>	\r\n	<tr>	<td>	어떻게 가요 / 와요?	</td>	<td>	Qanday boriladi / kelinadi?	</td>	<tr>	\r\n	<tr>	<td>	얼마나 걸려요?	</td>	<td>	Qancha vaqt ketadi	</td>	<tr>	\r\n	<tr>	<td>	출발	</td>	<td>	Junab ketish	</td>	<tr>	\r\n	<tr>	<td>	호선	</td>	<td>	Liniya / yunalish	</td>	<tr>	\r\n	<tr>	<td>	그래서	</td>	<td>	Shuning uchun	</td>	<tr>	\r\n	<tr>	<td>	약	</td>	<td>	Taxminan	</td>	<tr>	\r\n	<tr>	<td>	버스 정류장	</td>	<td>	Avtobus bekati	</td>	<tr>	\r\n	<tr>	<td>	고속터미널	</td>	<td>	Avto vokzal	</td>	<tr>	\r\n	<tr>	<td>	지하철역	</td>	<td>	Metro bekati	</td>	<tr>	\r\n	<tr>	<td>	공항	</td>	<td>	Aeroport	</td>	<tr>	\r\n	<tr>	<td>	여객터미널 (항고)	</td>	<td>	Kema porti 	</td>	<tr>	\r\n	<tr>	<td>	지하도	</td>	<td>	Yer osti peshexodi	</td>	<tr>	\r\n	<tr>	<td>	노선도	</td>	<td>	Metro xaritasi	</td>	<tr>	\r\n	<tr>	<td>	교통 카드	</td>	<td>	Transport kartasi	</td>	<tr>	\r\n	<tr>	<td>	충전하다	</td>	<td>	Zagruzka qilmoq	</td>	<tr>	\r\n	<tr>	<td>	표를 팔다 /사다	</td>	<td>	Biletni sotmoq / sotib olmoq	</td>	<tr>	\r\n	<tr>	<td>	버스를 타다	</td>	<td>	Avtobusga chiqmoq	</td>	<tr>	\r\n	<tr>	<td>	버스를 내리다	</td>	<td>	Avtobusdan tushmoq	</td>	<tr>	\r\n	<tr>	<td>	갈아타다 / 환승하다	</td>	<td>	Mashinani almashtirib minmoq	</td>	<tr>	\r\n	<tr>	<td>	출발하다	</td>	<td>	Junab ketmoq	</td>	<tr>	\r\n	<tr>	<td>	도착하다	</td>	<td>	Yetib kelmoq	</td>	<tr>	\r\n	<tr>	<td>	시청	</td>	<td>	Shahar hokimiyati	</td>	<tr>	\r\n	<tr>	<td>	빠르다	</td>	<td>	Tez	</td>	<tr>	\r\n	<tr>	<td>	순서	</td>	<td>	Ketma –ketlik	</td>	<tr>	\r\n	<tr>	<td>	한국말	</td>	<td>	Koreys tili	</td>	<tr>	\r\n	<tr>	<td>	광장	</td>	<td>	Maydon	</td>	<tr>	\r\n	<tr>	<td>	한마당	</td>	<td>	Hanmadan festivali	</td>	<tr>	\r\n	<tr>	<td>	잔치	</td>	<td>	Bazm	</td>	<tr>	\r\n	<tr>	<td>	구경 오세요	</td>	<td>	Tomoshaga keling	</td>	<tr>	\r\n	<tr>	<td>	일회용	</td>	<td>	Bir martalik	</td>	<tr>	\r\n	<tr>	<td>	누르다	</td>	<td>	Bosmoq	</td>	<tr>	\r\n	<tr>	<td>	대중교통	</td>	<td>	Jamoatchilik transporti	</td>	<tr>	\r\n	<tr>	<td>	이용하다	</td>	<td>	Foydalanmoq	</td>	<tr>	\r\n	<tr>	<td>	교통	</td>	<td>	Transport	</td>	<tr>	\r\n	<tr>	<td>	예절	</td>	<td>	Odob	</td>	<tr>	\r\n	<tr>	<td>	노약자석	</td>	<td>	Maxsus joy	</td>	<tr>	\r\n	<tr>	<td>	연세	</td>	<td>	Yosh	</td>	<tr>	\r\n	<tr>	<td>	장애인	</td>	<td>	Nogiron	</td>	<tr>	\r\n	<tr>	<td>	위한	</td>	<td>	Uchun	</td>	<tr>	\r\n	<tr>	<td>	몸이 약한	</td>	<td>	Tanasi zaif	</td>	<tr>	\r\n	<tr>	<td>	약하다	</td>	<td>	Zaif bo`lmoq	</td>	<tr>	</table>\r\n', '01/e50-10.webm', '00:09:25', 10, '', '', '2023-12-25 19:11:41'),
(11, '1703531155', '1703531535', '11-dars', '11-dars haqida', '<table class=\"table\">	<tr>	<th>	11과	</th>	<th>	11과	</th>	</tr>	\r\n	<tr>	<td>	농구(하다)	</td>	<td>	Basketbol o`ynamoq	</td>	<tr>	\r\n	<tr>	<td>	축구(하다)	</td>	<td>	Futbol o`ynamoq	</td>	<tr>	\r\n	<tr>	<td>	배구(하다)	</td>	<td>	Voleybol o`ynamoq	</td>	<tr>	\r\n	<tr>	<td>	야구(하다)	</td>	<td>	Beysbol o`ynamoq	</td>	<tr>	\r\n	<tr>	<td>	등산(하다)	</td>	<td>	Tog`ga chiqmoq	</td>	<tr>	\r\n	<tr>	<td>	태권도(하다)	</td>	<td>	Tekvondo	</td>	<tr>	\r\n	<tr>	<td>	수영(하다)	</td>	<td>	Suzmoq	</td>	<tr>	\r\n	<tr>	<td>	족구(하다)	</td>	<td>	Oyoq bn o`ynaladigan voleybol	</td>	<tr>	\r\n	<tr>	<td>	스케이트(타다)	</td>	<td>	Skeyt (uchmoq)	</td>	<tr>	\r\n	<tr>	<td>	스키(타다)	</td>	<td>	Chang`i (uchmoq)	</td>	<tr>	\r\n	<tr>	<td>	자전거(타다)	</td>	<td>	Velosiped minmoq	</td>	<tr>	\r\n	<tr>	<td>	인라인스케이트(타다)	</td>	<td>	Rolikda (uchmoq)	</td>	<tr>	\r\n	<tr>	<td>	배드민턴(치다)	</td>	<td>	Bedminton (o`ynamoq)	</td>	<tr>	\r\n	<tr>	<td>	탁구(치다)	</td>	<td>	Stol tennis (o`ynamoq)	</td>	<tr>	\r\n	<tr>	<td>	테니스(치다)	</td>	<td>	Tennis (o`ynamoq)	</td>	<tr>	\r\n	<tr>	<td>	볼링(치다)	</td>	<td>	Bowling (o`ynamoq)	</td>	<tr>	\r\n	<tr>	<td>	Fe`l + (을)/(ㄹ) 수 있어요/없어요	</td>	<td>	…qila olmoq/olmaslik (mumkin/mumkinmas)	</td>	<tr>	\r\n	<tr>	<td>	배우다	</td>	<td>	O`rganmoq	</td>	<tr>	\r\n	<tr>	<td>	재미있다	</td>	<td>	Qiziqarli	</td>	<tr>	\r\n	<tr>	<td>	기타를(치다)	</td>	<td>	Gitara chalmoq	</td>	<tr>	\r\n	<tr>	<td>	연극을 보다	</td>	<td>	Spektaklni ko`rmoq	</td>	<tr>	\r\n	<tr>	<td>	드비이드(DVD)를 보다	</td>	<td>	DVDni ko`rmoq	</td>	<tr>	\r\n	<tr>	<td>	사진을 찍다	</td>	<td>	Rasm tushurmoq	</td>	<tr>	\r\n	<tr>	<td>	쇼핑을 하다	</td>	<td>	Xarid qilmoq	</td>	<tr>	\r\n	<tr>	<td>	구경하다	</td>	<td>	Tomosha qilmoq	</td>	<tr>	\r\n	<tr>	<td>	뜨개지를 하다	</td>	<td>	To`qish qilmoq	</td>	<tr>	\r\n	<tr>	<td>	그림을 그리다	</td>	<td>	Rasm chizmoq	</td>	<tr>	\r\n	<tr>	<td>	컴퓨터 게임을 하다	</td>	<td>	Kompyuter o`yinini o`ynamoq	</td>	<tr>	\r\n	<tr>	<td>	나 	</td>	<td>	Men	</td>	<tr>	\r\n	<tr>	<td>	너	</td>	<td>	Sen	</td>	<tr>	\r\n	<tr>	<td>	정말	</td>	<td>	Juda	</td>	<tr>	\r\n	<tr>	<td>	좋아하다	</td>	<td>	Yoqtirmoq	</td>	<tr>	\r\n	<tr>	<td>	높임말	</td>	<td>	Sizlash	</td>	<tr>	\r\n	<tr>	<td>	반말	</td>	<td>	Sansirash	</td>	<tr>	\r\n	<tr>	<td>	직장상사	</td>	<td>	Ish  joyidagi boshliq	</td>	<tr>	\r\n	<tr>	<td>	부하직원	</td>	<td>	Qo`l ostidagi ishchi	</td>	<tr>	\r\n	<tr>	<td>	친한 친구	</td>	<td>	Yaqin do`st	</td>	<tr>	\r\n	<tr>	<td>	직위	</td>	<td>	Lavozim	</td>	<tr>	\r\n	<tr>	<td>	무조건	</td>	<td>	Mutlaqo	</td>	<tr>	\r\n	<tr>	<td>	처음부터	</td>	<td>	Boshidan	</td>	<tr>	</table>\r\n', '01/e50-11.webm', '00:09:40', 11, '', '', '2023-12-25 19:12:15'),
(12, '1703531155', '1703531568', '12-dars', '12-dars', '<table class=\"table\">	<tr>	<th>	12과	</th>	<th>	12과	</th>	</tr>	\r\n	<tr>	<td>	약속을 하다	</td>	<td>	Vadalashmoq	</td>	<tr>	\r\n	<tr>	<td>	약속을 치키다	</td>	<td>	Vadaga amal qilmoq	</td>	<tr>	\r\n	<tr>	<td>	약속을 어기다	</td>	<td>	Vadasida turmaslik 	</td>	<tr>	\r\n	<tr>	<td>	주소를 묻다	</td>	<td>	Manzilni so`ramoq	</td>	<tr>	\r\n	<tr>	<td>	방문을 하다	</td>	<td>	Tashrif bermoq	</td>	<tr>	\r\n	<tr>	<td>	노크를 하다	</td>	<td>	Taqillatmoq	</td>	<tr>	\r\n	<tr>	<td>	인사를 하다	</td>	<td>	Salomlashmoq/ bildirmoq	</td>	<tr>	\r\n	<tr>	<td>	안내하다	</td>	<td>	Ma`lumot bermoq	</td>	<tr>	\r\n	<tr>	<td>	안내받다	</td>	<td>	Ma`lumot olmoq	</td>	<tr>	\r\n	<tr>	<td>	대화를 나누다	</td>	<td>	Suhbati bn bo`lishmoq/ gaplashmq	</td>	<tr>	\r\n	<tr>	<td>	지각하다	</td>	<td>	Kech qolmoq	</td>	<tr>	\r\n	<tr>	<td>	기다리다	</td>	<td>	Kutmoq	</td>	<tr>	\r\n	<tr>	<td>	회의	</td>	<td>	Majlis	</td>	<tr>	\r\n	<tr>	<td>	일정표	</td>	<td>	Raspisaniya /belgilangan kun	</td>	<tr>	\r\n	<tr>	<td>	사무실	</td>	<td>	Ofis	</td>	<tr>	\r\n	<tr>	<td>	뽑다	</td>	<td>	Ishga saralamoq/tanlamoq	</td>	<tr>	\r\n	<tr>	<td>	107번	</td>	<td>	107-raqamli	</td>	<tr>	\r\n	<tr>	<td>	Sifat/ Fe`l + (을)(ㄹ) 거예요	</td>	<td>	..moqchi (kelasi zamon)	</td>	<tr>	\r\n	<tr>	<td>	Sifat/ Fe`l + 겠 – (추측)	</td>	<td>	…mikan / …mumkin(taxmin)	</td>	<tr>	\r\n	<tr>	<td>	옮기다	</td>	<td>	O`zgartirmoq/ tashimoq	</td>	<tr>	\r\n	<tr>	<td>	초대하다	</td>	<td>	Taklif qilmoq	</td>	<tr>	\r\n	<tr>	<td>	초대 받다	</td>	<td>	Taklif olmoq	</td>	<tr>	\r\n	<tr>	<td>	선물을 준비하다	</td>	<td>	Sovg`ani tayyorlamoq	</td>	<tr>	\r\n	<tr>	<td>	집을 찾다	</td>	<td>	Uyni qidirib topmoq	</td>	<tr>	\r\n	<tr>	<td>	마중하다	</td>	<td>	Kutib olmoq	</td>	<tr>	\r\n	<tr>	<td>	상을 차리다	</td>	<td>	Stol bezamoq	</td>	<tr>	\r\n	<tr>	<td>	상을 치우다	</td>	<td>	Stolni yig`ishtirmoq	</td>	<tr>	\r\n	<tr>	<td>	술을 마시다	</td>	<td>	Aroq ichmoq	</td>	<tr>	\r\n	<tr>	<td>	노래를 부르다	</td>	<td>	Qo`shiq ko`ylamoq	</td>	<tr>	\r\n	<tr>	<td>	춤을 추다	</td>	<td>	Raqs tushmoq	</td>	<tr>	\r\n	<tr>	<td>	게임을 하다	</td>	<td>	O`yin o`ynamoq	</td>	<tr>	\r\n	<tr>	<td>	사진을 찍다	</td>	<td>	Rasm tushmoq	</td>	<tr>	\r\n	<tr>	<td>	배웅하다	</td>	<td>	Kuzatib qo`ymoq	</td>	<tr>	\r\n	<tr>	<td>	집들이	</td>	<td>	Uy ko`rdi	</td>	<tr>	\r\n	<tr>	<td>	참	</td>	<td>	Juda	</td>	<tr>	\r\n	<tr>	<td>	정말료	</td>	<td>	Rostdan(mi?)	</td>	<tr>	\r\n	<tr>	<td>	절차	</td>	<td>	Tartib	</td>	<tr>	\r\n	<tr>	<td>	예절	</td>	<td>	Odob	</td>	<tr>	\r\n	<tr>	<td>	가지고 가다/오다	</td>	<td>	O`zi bilan olib bormoq/kelmoq	</td>	<tr>	\r\n	<tr>	<td>	Ot + (이)라도	</td>	<td>	…sa ham	</td>	<tr>	\r\n	<tr>	<td>	서로	</td>	<td>	O`zaro	</td>	<tr>	\r\n	<tr>	<td>	나누다	</td>	<td>	Bo`lishmoq	</td>	<tr>	\r\n	<tr>	<td>	정	</td>	<td>	Mehr	</td>	<tr>	\r\n	<tr>	<td>	Ot + (이)라고 생각하다	</td>	<td>	…deb o`ylamoq	</td>	<tr>	\r\n	<tr>	<td>	가정집	</td>	<td>	Oila uyi	</td>	<tr>	\r\n	<tr>	<td>	벨	</td>	<td>	Qo`ng`iroq	</td>	<tr>	\r\n	<tr>	<td>	누르다	</td>	<td>	Bosmoq	</td>	<tr>	\r\n	<tr>	<td>	허락	</td>	<td>	Ruxsat	</td>	<tr>	\r\n	<tr>	<td>	현관	</td>	<td>	Ostona	</td>	<tr>	\r\n	<tr>	<td>	들어가다	</td>	<td>	Kirmoq	</td>	<tr>	\r\n	<tr>	<td>	준비되다	</td>	<td>	Tayyor bo`lmoq	</td>	<tr>	\r\n	<tr>	<td>	골고루	</td>	<td>	Ajratmasdan	</td>	<tr>	\r\n	<tr>	<td>	무례하다	</td>	<td>	Qo`pol/ nagruzka	</td>	<tr>	\r\n	<tr>	<td>	요구하다	</td>	<td>	Talab qilmoq	</td>	<tr>	\r\n	<tr>	<td>	적당히	</td>	<td>	Aniq	</td>	<tr>	\r\n	<tr>	<td>	놀다 오다 	</td>	<td>	Aylanib kelmoq	</td>	<tr>	\r\n	<tr>	<td>	Ot + 에 대한	</td>	<td>	…haqida / ….uchun	</td>	<tr>	\r\n	<tr>	<td>	손님	</td>	<td>	Mijoz/ mehmon	</td>	<tr>	\r\n	<tr>	<td>	신호집	</td>	<td>	Yosh oila uyi	</td>	<tr>	\r\n	<tr>	<td>	세제	</td>	<td>	Poroshok	</td>	<tr>	\r\n	<tr>	<td>	두루마리 휴지	</td>	<td>	O`ram tualet qog`ozi	</td>	<tr>	\r\n	<tr>	<td>	거품	</td>	<td>	Ko`pik	</td>	<tr>	\r\n	<tr>	<td>	처럼	</td>	<td>	Dek	</td>	<tr>	\r\n	<tr>	<td>	풀리다	</td>	<td>	Yechilmoq/hal etilmoq	</td>	<tr>	</table>\r\n', '01/e50-12.webm', '00:10:02', 12, '', '', '2023-12-25 19:12:48'),
(13, '1703531155', '1703531596', '13-dars', '13-dars haqida', '<table class=\"table\">	<tr>	<th>	13과	</th>	<th>	13과	</th>	</tr>	\r\n	<tr>	<td>	해수욕장	</td>	<td>	Plyaj	</td>	<tr>	\r\n	<tr>	<td>	유원지	</td>	<td>	Yoshlar bog`i	</td>	<tr>	\r\n	<tr>	<td>	놀이공원	</td>	<td>	Atraktsion	</td>	<tr>	\r\n	<tr>	<td>	국립공원	</td>	<td>	Qo`riqxona	</td>	<tr>	\r\n	<tr>	<td>	여관	</td>	<td>	Arzon mehmonxona	</td>	<tr>	\r\n	<tr>	<td>	민박	</td>	<td>	Uyli mehmonxona/ nonushtali mehmonxona	</td>	<tr>	\r\n	<tr>	<td>	폐션	</td>	<td>	Dacha	</td>	<tr>	\r\n	<tr>	<td>	콘도	</td>	<td>	Kurort	</td>	<tr>	\r\n	<tr>	<td>	야영	</td>	<td>	Mayovka	</td>	<tr>	\r\n	<tr>	<td>	텐트	</td>	<td>	Chodir	</td>	<tr>	\r\n	<tr>	<td>	취사금지구역	</td>	<td>	Ovqat pishirish taqiqlanadigan hudud	</td>	<tr>	\r\n	<tr>	<td>	취사도구	</td>	<td>	Ovqat pishirish anjomlari	</td>	<tr>	\r\n	<tr>	<td>	회비	</td>	<td>	A`zolik tulovi	</td>	<tr>	\r\n	<tr>	<td>	2인실	</td>	<td>	2 kishilik xonasi	</td>	<tr>	\r\n	<tr>	<td>	당일여행	</td>	<td>	1 kunlik sayohat	</td>	<tr>	\r\n	<tr>	<td>	1박2일	</td>	<td>	1 kecha 2 kunlik sayohat	</td>	<tr>	\r\n	<tr>	<td>	입장료	</td>	<td>	Kirish tulovi	</td>	<tr>	\r\n	<tr>	<td>	숙박비	</td>	<td>	Tunash tulovi	</td>	<tr>	\r\n	<tr>	<td>	성수기	</td>	<td>	Mavsum	</td>	<tr>	\r\n	<tr>	<td>	비수기	</td>	<td>	Mavsumdan tashqari	</td>	<tr>	\r\n	<tr>	<td>	휴가 계획	</td>	<td>	Ta`til rejasi	</td>	<tr>	\r\n	<tr>	<td>	세우다	</td>	<td>	Tuzmoq	</td>	<tr>	\r\n	<tr>	<td>	Fe`l + 기러 하다	</td>	<td>	….ga qaror qilmoq	</td>	<tr>	\r\n	<tr>	<td>	몇 박 며칠로	</td>	<td>	Necha tun necha kunga	</td>	<tr>	\r\n	<tr>	<td>	아/어 본 적이 있다/없다	</td>	<td>	….ib ko`rganman/ ….ib ko`rmaganman	</td>	<tr>	\r\n	<tr>	<td>	못	</td>	<td>	Qila olamslik	</td>	<tr>	\r\n	<tr>	<td>	준비는 다 하다	</td>	<td>	Tayyorgarlikni hammasini qilmoq	</td>	<tr>	\r\n	<tr>	<td>	버너	</td>	<td>	Gaz plita	</td>	<tr>	\r\n	<tr>	<td>	코펠	</td>	<td>	Idish tovoq	</td>	<tr>	\r\n	<tr>	<td>	서울 시티투어	</td>	<td>	Seul bo`ylab sayohat	</td>	<tr>	\r\n	<tr>	<td>	63빌딩	</td>	<td>	63 qavatli bino	</td>	<tr>	\r\n	<tr>	<td>	한강 유람선	</td>	<td>	Han daryosida sayohat	</td>	<tr>	\r\n	<tr>	<td>	경복궁	</td>	<td>	Kyong bo`k saroyi	</td>	<tr>	\r\n	<tr>	<td>	부산	</td>	<td>	Pusan	</td>	<tr>	\r\n	<tr>	<td>	해운대	</td>	<td>	Heunde	</td>	<tr>	\r\n	<tr>	<td>	제주도	</td>	<td>	Chejudo` oroli	</td>	<tr>	\r\n	<tr>	<td>	한라산	</td>	<td>	Hanla tog`i 	</td>	<tr>	\r\n	<tr>	<td>	서해안	</td>	<td>	G`arbiy dengiz hududi	</td>	<tr>	\r\n	<tr>	<td>	대천 해수욕장	</td>	<td>	Techon plyaji	</td>	<tr>	\r\n	<tr>	<td>	짐을 싸다/ 풀다	</td>	<td>	Yuklarni joylashtirmoq/ olmoq	</td>	<tr>	\r\n	<tr>	<td>	출발하다	</td>	<td>	Jo`nab ketmoq	</td>	<tr>	\r\n	<tr>	<td>	도착하다	</td>	<td>	Yetib kelmoq	</td>	<tr>	\r\n	<tr>	<td>	관광하다	</td>	<td>	Turizm	</td>	<tr>	\r\n	<tr>	<td>	자동차 렌트	</td>	<td>	Mashina arendasi	</td>	<tr>	\r\n	<tr>	<td>	하루(에)	</td>	<td>	1 kun (da)	</td>	<tr>	\r\n	<tr>	<td>	숙소	</td>	<td>	Tunash joyi	</td>	<tr>	\r\n	<tr>	<td>	정하다	</td>	<td>	Belgilamoq	</td>	<tr>	\r\n	<tr>	<td>	Sifat/ fe`l + (는) 군요	</td>	<td>	…ku (hayratlanishni bildiradi)	</td>	<tr>	\r\n	<tr>	<td>	만	</td>	<td>	Faqat	</td>	<tr>	\r\n	<tr>	<td>	Ot + (으)로 하다	</td>	<td>	…. ga qilmoq	</td>	<tr>	\r\n	<tr>	<td>	새벽	</td>	<td>	Tong Sahar	</td>	<tr>	\r\n	<tr>	<td>	필요하다	</td>	<td>	Kerak, zarur	</td>	<tr>	\r\n	<tr>	<td>	근교	</td>	<td>	Yon Atrofi	</td>	<tr>	\r\n	<tr>	<td>	상품	</td>	<td>	Paket, trafik, 	</td>	<tr>	\r\n	<tr>	<td>	고궁	</td>	<td>	Qasr	</td>	<tr>	\r\n	<tr>	<td>	놀이기구	</td>	<td>	Amerikanskii gorki	</td>	<tr>	\r\n	<tr>	<td>	수족관/아쿠아리움	</td>	<td>	Akvarium	</td>	<tr>	\r\n	<tr>	<td>	명소	</td>	<td>	Mashhur joy	</td>	<tr>	\r\n	<tr>	<td>	체험하다	</td>	<td>	Tajriba olmoq	</td>	<tr>	\r\n	<tr>	<td>	외국인력지원센터	</td>	<td>	Chet elliklar uchun yordam markazi	</td>	<tr>	\r\n	<tr>	<td>	단체	</td>	<td>	Guruh, jamoa	</td>	<tr>	\r\n	<tr>	<td>	상담소	</td>	<td>	Maslahat xonasi	</td>	<tr>	\r\n	<tr>	<td>	게스트하우스	</td>	<td>	Mehmonlar uchun uy	</td>	<tr>	\r\n	<tr>	<td>	유스호스텔	</td>	<td>	Yoshlar mehmonxonasi	</td>	<tr>	\r\n	<tr>	<td>	모텔	</td>	<td>	Yo`l ustidagi hotel	</td>	<tr>	\r\n	<tr>	<td>	머드 축체	</td>	<td>	Moda festivali	</td>	<tr>	\r\n	<tr>	<td>	광고	</td>	<td>	Reklama	</td>	<tr>	\r\n	<tr>	<td>	기준	</td>	<td>	Asos	</td>	<tr>	\r\n	<tr>	<td>	저렴하다 	</td>	<td>	Arzon 	</td>	<tr>	</table>\r\n', '01/e50-13.webm', '00:10:54', 13, '', '', '2023-12-25 19:13:16');
INSERT INTO `coues_mavzu` (`id`, `CoursID`, `MavzuID`, `MavzuName`, `MavzuAbout`, `MavzuLugat`, `Video`, `VideoLine`, `MavzuNumber`, `Name1`, `Name2`, `Data`) VALUES
(14, '1703531155', '1703531633', '14-dars', '14-dars haqida', '<table class=\"table\">	<tr>	<th>	14과	</th>	<th>	14과	</th>	</tr>	\r\n	<tr>	<td>	거기 119지요?	</td>	<td>	U yer 119 shunaqami?	</td>	<tr>	\r\n	<tr>	<td>	응급상황	</td>	<td>	Favqulodda holat	</td>	<tr>	\r\n	<tr>	<td>	불이 나다/ 끄다	</td>	<td>	Olov chiqmoq/ uchirmoq	</td>	<tr>	\r\n	<tr>	<td>	교통사고가 나다	</td>	<td>	Transport hodisasi yuz bermoq	</td>	<tr>	\r\n	<tr>	<td>	푹행을 당하다	</td>	<td>	Kaltak yemoq	</td>	<tr>	\r\n	<tr>	<td>	도독을 맞다/강도가 들다	</td>	<td>	O`g`ri tushmoq	</td>	<tr>	\r\n	<tr>	<td>	사기를 당하다	</td>	<td>	Qalloblik qilmoq	</td>	<tr>	\r\n	<tr>	<td>	음주운전을 하다	</td>	<td>	Ichib mashina haydamoq	</td>	<tr>	\r\n	<tr>	<td>	자연재해가 발생하다	</td>	<td>	Tabiiy ofat 	</td>	<tr>	\r\n	<tr>	<td>	범죄신고 (112)	</td>	<td>	Jinoyatdan xabar bermoq	</td>	<tr>	\r\n	<tr>	<td>	화재 (119)	</td>	<td>	Yong`in	</td>	<tr>	\r\n	<tr>	<td>	구급차/ 응급 환자	</td>	<td>	Tez yordam mashinasi/ favqulodda be`mor	</td>	<tr>	\r\n	<tr>	<td>	응급실	</td>	<td>	Tibbiy tez yordam 	</td>	<tr>	\r\n	<tr>	<td>	신고하다	</td>	<td>	Xabar bermoq	</td>	<tr>	\r\n	<tr>	<td>	출동하다	</td>	<td>	Junatmoq	</td>	<tr>	\r\n	<tr>	<td>	위험하다	</td>	<td>	Xavfli	</td>	<tr>	\r\n	<tr>	<td>	급하다	</td>	<td>	Shoshilinch	</td>	<tr>	\r\n	<tr>	<td>	도와주세요	</td>	<td>	Yordam bering	</td>	<tr>	\r\n	<tr>	<td>	미래가구	</td>	<td>	Kelajak mebellari	</td>	<tr>	\r\n	<tr>	<td>	기숙사	</td>	<td>	Yotoqxona	</td>	<tr>	\r\n	<tr>	<td>	와 주다	</td>	<td>	Yetib kelmoq	</td>	<tr>	\r\n	<tr>	<td>	주소	</td>	<td>	Adres	</td>	<tr>	\r\n	<tr>	<td>	말씀하다	</td>	<td>	Gapirmoq	</td>	<tr>	\r\n	<tr>	<td>	곧	</td>	<td>	Tezda	</td>	<tr>	\r\n	<tr>	<td>	Ot + (이) 지요	</td>	<td>	…a/ ….shunaqami	</td>	<tr>	\r\n	<tr>	<td>	Sifat/ Fe`l + 지요	</td>	<td>	… a/ …..shunaqami	</td>	<tr>	\r\n	<tr>	<td>	돕다	</td>	<td>	Yordam bermoq	</td>	<tr>	\r\n	<tr>	<td>	말씀	</td>	<td>	Gap, 	</td>	<tr>	\r\n	<tr>	<td>	번지	</td>	<td>	Uy raqami	</td>	<tr>	\r\n	<tr>	<td>	전화번호 안내 (114)	</td>	<td>	Telefon raqami ma`lumoti	</td>	<tr>	\r\n	<tr>	<td>	고용노동부 고객상담센터 (1350)	</td>	<td>	Mehnat vazirligi mijozlarga maslahat markazi	</td>	<tr>	\r\n	<tr>	<td>	출입국관리사무소 (1345)	</td>	<td>	Davlatga kirib chiqish nazorat ofisi	</td>	<tr>	\r\n	<tr>	<td>	외국인력상담센터 (1577-0071)	</td>	<td>	Chet elliklarga maslahat markazi	</td>	<tr>	\r\n	<tr>	<td>	날씨 안내 (131)	</td>	<td>	Ob-havo ma`lumoti	</td>	<tr>	\r\n	<tr>	<td>	전기 고장 신고 (123)	</td>	<td>	Elektr tuzatish ma`lumoti	</td>	<tr>	\r\n	<tr>	<td>	수도 고장 신고	</td>	<td>	Oqova suv ma`lumoti	</td>	<tr>	\r\n	<tr>	<td>	교통정보 (1333)	</td>	<td>	Transport ma`lumoti	</td>	<tr>	\r\n	<tr>	<td>	우체국 민원 안내 (1300)	</td>	<td>	Pochtaxona shikoyat, ms`lumoti	</td>	<tr>	\r\n	<tr>	<td>	외국인 관광 안내 (1330)	</td>	<td>	Chet ellik uchun turizm ma`lumoti	</td>	<tr>	\r\n	<tr>	<td>	통역 서비스 (1644-7111)	</td>	<td>	Tarjima xizmati	</td>	<tr>	\r\n	<tr>	<td>	통역하다	</td>	<td>	Tarjima qilmoq	</td>	<tr>	\r\n	<tr>	<td>	문의하다	</td>	<td>	So`ramoq	</td>	<tr>	\r\n	<tr>	<td>	안내하다	</td>	<td>	Ma`lumot bermoq	</td>	<tr>	\r\n	<tr>	<td>	상담하다	</td>	<td>	Maslahat bermoq	</td>	<tr>	\r\n	<tr>	<td>	답변하다	</td>	<td>	Javob bermoq	</td>	<tr>	\r\n	<tr>	<td>	신청하다	</td>	<td>	Ariza bermoq	</td>	<tr>	\r\n	<tr>	<td>	사랑합니다, 고객님	</td>	<td>	Hurmatli, sevimli mijoz	</td>	<tr>	\r\n	<tr>	<td>	문의하신 번호는	</td>	<td>	So`ragan raqamingiz	</td>	<tr>	\r\n	<tr>	<td>	Sifat + (은)/(ㄴ) 가요?    	</td>	<td>	Razgovorda so`rash u-n ishlatiladi, tarjimasi yo`q	</td>	<tr>	\r\n	<tr>	<td>	Fe`l + (은)/(ㄴ) 나요?	</td>	<td>	Razgovorda so`rash u-n ishlatiladi, tarjimasi yo`q	</td>	<tr>	\r\n	<tr>	<td>	바꿔 주세요	</td>	<td>	Almashtirib bering	</td>	<tr>	\r\n	<tr>	<td>	생기다	</td>	<td>	Paydo bo`lmoq	</td>	<tr>	\r\n	<tr>	<td>	유용한 전화 번호	</td>	<td>	Foydali, kerakli	</td>	<tr>	\r\n	<tr>	<td>	또는 	</td>	<td>	Va 	</td>	<tr>	\r\n	<tr>	<td>	발생	</td>	<td>	Yuzaga kelish, paydo bo`lish	</td>	<tr>	\r\n	<tr>	<td>	체류	</td>	<td>	Davlatda qolish	</td>	<tr>	\r\n	<tr>	<td>	이주민	</td>	<td>	Migrant	</td>	<tr>	\r\n	<tr>	<td>	이주여성	</td>	<td>	Migrant ayol	</td>	<tr>	\r\n	<tr>	<td>	긴급지원	</td>	<td>	Shoshilinch yordam	</td>	<tr>	\r\n	<tr>	<td>	기초	</td>	<td>	Asos	</td>	<tr>	\r\n	<tr>	<td>	지방자치단체	</td>	<td>	O`z o`zini boshqarish hududi	</td>	<tr>	\r\n	<tr>	<td>	각종	</td>	<td>	Joy	</td>	<tr>	\r\n	<tr>	<td>	민원	</td>	<td>	Shikoyat	</td>	<tr>	\r\n	<tr>	<td>	근무시간	</td>	<td>	Ish vaqti	</td>	<tr>	</table>\r\n', '01/e50-14.webm', '00:13:43', 14, '', '', '2023-12-25 19:13:53'),
(15, '1703531738', '1703531896', '15-dars', '15-dars haqida', 'test', '01/e50-15.webm', '00:14:04', 1, '', '', '2023-12-25 19:18:16'),
(16, '1703531738', '1703531922', '16-dars', '16-dars haqida', 'test', '01/e50-16.webm', '00:21:24', 2, '', '', '2023-12-25 19:18:42'),
(17, '1703531738', '1703531957', '17-dars', '16-dars haqida', 'test', '01/e50-17.webm', '00:21:36', 3, '', '', '2023-12-25 19:19:17'),
(18, '1703531738', '1703531986', '18-dars', '18-dars haqida', 'test', '01/e50-18.webm', '00:21:48', 4, '', '', '2023-12-25 19:19:46'),
(19, '1703531738', '1703532023', '19-dars', '16-dars haqida', 'test', '01/e50-19.webm', '00:22:09', 5, '', '', '2023-12-25 19:20:23'),
(20, '1703531738', '1703532052', '20-dars', '20-dars haqida', 'test', '01/e50-20.webm', '00:22:27', 6, '', '', '2023-12-25 19:20:52'),
(21, '1703531738', '1703532075', '21-dars', '21-dars haqida', 'test', '01/e50-21.webm', '00:22:49', 7, '', '', '2023-12-25 19:21:15'),
(22, '1703531738', '1703532107', '22-dars', '22-dars haqida', 'test', '01/e50-22.webm', '00:13:54', 8, '', '', '2023-12-25 19:21:47'),
(23, '1703531738', '1703532140', '23-dars', '22-dars haqida', 'test', '01/e50-22.webm', '00:13:54', 9, '', '', '2023-12-25 19:22:20'),
(24, '1703531738', '1703532173', '24-dars', '23-dars haqida', 'test', '01/e50-24.webm', '00:04:08', 10, '', '', '2023-12-25 19:22:53'),
(25, '1703531738', '1703532196', '25-dars', '25-dars haqida', 'test', '01/e50-25.webm', '00:04:29', 11, '', '', '2023-12-25 19:23:16'),
(26, '1703531738', '1703532221', '26-dars', '26-dars haqida', 'test', '01/e50-26.webm', '00:04:41', 12, '', '', '2023-12-25 19:23:41'),
(27, '1703532382', '1703532418', '27-dars', '27-dars haqida', 'test', '01/e50-27.webm', '00:05:24', 1, '', '', '2023-12-25 19:26:58'),
(28, '1703532382', '1703532454', '28-dars', '28-dars haqida', 'test', '01/e50-28.webm', '00:05:38', 2, '', '', '2023-12-25 19:27:34'),
(29, '1703532382', '1703532490', '29-dars', '29-dars haqida', 'test', '01/e50-29.webm', '00:06:04', 3, '', '', '2023-12-25 19:28:10'),
(30, '1703532382', '1703532519', '30-dars', '30-dars haqida', 'test', '01/e50-30.webm', '00:07:34', 4, '', '', '2023-12-25 19:28:39'),
(31, '1703532382', '1703532542', '31-dars', '31-dars haqida', 'test', '01/e50-31.webm', '00:09:07', 5, '', '', '2023-12-25 19:29:02'),
(32, '1703532382', '1703532577', '32-dars', '32-dars haqida', 'tes', '01/e50-32.webm', '00:12:13', 6, '', '', '2023-12-25 19:29:37'),
(33, '1703532382', '1703532606', '33-dars', '33-dars haqida', 'test', '01/e50-33.webm', '00:12:25', 7, '', '', '2023-12-25 19:30:06'),
(34, '1703532382', '1703532641', '34-dars', '34-dars haqida', 'test', '01/e50-34.webm', '00:12:45', 8, '', '', '2023-12-25 19:30:41'),
(35, '1703532382', '1703532671', '35-dars', '35-dars haqida', 'test', '01/e50-35.webm', '00:13:13', 9, '', '', '2023-12-25 19:31:11'),
(36, '1703532382', '1703532720', '36-dars', '36-dars haqida', 'test', '01/e50-36.webm', '00:13:25', 10, '', '', '2023-12-25 19:32:00'),
(37, '1703532382', '1703532749', '37-dars', '37-dars haqida', 'tets', '01/e50-37.webm', '00:13:44', 11, '', '', '2023-12-25 19:32:29'),
(38, '1703532382', '1703532774', '38-dars', '38-dars haqida', 'test', '01/e50-38.webm', '00:13:54', 12, '', '', '2023-12-25 19:32:54'),
(39, '1703532302', '1703533217', '39-dars', '39-dars haqida', 'test', '01/e50-39.webm', '00:14:39', 1, '', '', '2023-12-25 19:40:17'),
(40, '1703532302', '1703533250', '40-dars', '40-dars haqida', 'test', '01/e50-40.webm', '00:14:20', 2, '', '', '2023-12-25 19:40:50'),
(41, '1703532302', '1703533278', '41-dars', '41-dars haqida', 'test', '01/e50-41.webm', '00:14:39', 3, '', '', '2023-12-25 19:41:18'),
(42, '1703532302', '1703533310', '42-dars', '42-dars haqida', 'test', '01/e50-42.webm', '00:17:32', 4, '', '', '2023-12-25 19:41:50'),
(43, '1703532302', '1703533338', '43-dars', '43-dars haqida', 'test', '01/e50-43.webm', '00:13:23', 5, '', '', '2023-12-25 19:42:18'),
(44, '1703532302', '1703533366', '44-dars', '44-dars haqida', 'test', '01/e50-44.webm', '00:17:34', 6, '', '', '2023-12-25 19:42:46'),
(45, '1703532302', '1703533388', '45-dars', '45-dars haqida', 'test', '01/e50-45.webm', '00:18:13', 7, '', '', '2023-12-25 19:43:08'),
(46, '1703532302', '1703533432', '46-dars', '46-dars haqida', 'test', '01/e50-46.webm', '00:18:45', 8, '', '', '2023-12-25 19:43:52'),
(47, '1703532302', '1703533481', '47-dars', '47-dars haqida', 'test', '01/e50-47.webm', '00:19:12', 9, '', '', '2023-12-25 19:44:41'),
(48, '1703532302', '1703533507', '48-dars', '48-dars haqida', 'test', '01/e50-48.webm', '00:19:27', 10, '', '', '2023-12-25 19:45:07'),
(49, '1703532302', '1703533537', '49-dars', '49-dars haqida', 'test', '01/e50-49.webm', '00:19:57', 11, '', '', '2023-12-25 19:45:37'),
(50, '1703532302', '1703533568', '50-dars', '50-dars haqida', 'test', '01/e50-50.webm', '00:20:51', 12, '', '', '2023-12-25 19:46:08');

-- --------------------------------------------------------

--
-- Структура таблицы `cours`
--

CREATE TABLE `cours` (
  `id` int(11) NOT NULL,
  `CoursID` varchar(20) NOT NULL,
  `CoursName` varchar(70) NOT NULL,
  `CoursText` varchar(70) NOT NULL,
  `CoursAbout` longtext NOT NULL,
  `CoursPrice` varchar(20) NOT NULL,
  `CoursImage` varchar(120) NOT NULL,
  `CoursMavzu` int(3) NOT NULL,
  `CoursTil` varchar(11) NOT NULL,
  `CoursDavomiy` varchar(8) NOT NULL,
  `CoursTecher` varchar(70) NOT NULL,
  `TecherImage` varchar(120) NOT NULL,
  `Muddat` int(100) NOT NULL,
  `Data` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `cours`
--

INSERT INTO `cours` (`id`, `CoursID`, `CoursName`, `CoursText`, `CoursAbout`, `CoursPrice`, `CoursImage`, `CoursMavzu`, `CoursTil`, `CoursDavomiy`, `CoursTecher`, `TecherImage`, `Muddat`, `Data`) VALUES
(1, '1703531155', 'EPS Topik 50 (1-14)', 'EPS Topik 50 (1-14) Test', 'Kurs haqida', '1000', '01.jpg', 14, 'O`zbek', '02:42:49', 'Abbos Tulanov', '01.jpg', 30, '2023-12-25 19:05:55'),
(2, '1703531738', 'EPS Topik 50 (14-26)', 'Kurs haqida qisqacha', 'Kurs haqida to`liq', '1000', '01.jpg', 12, 'O`zbek', '02:04:00', 'Abbos Tulanov', '01.jpg', 30, '2023-12-25 19:15:38'),
(3, '1703532302', 'EPS Topik 50 (39-50)', 'Kurs haqida qisqacha', 'Kurs haqida to`liq', '1000', '01.jpg', 12, 'O`zbek', '01:54:17', 'Abbos Tulanov', '01.jpg', 30, '2023-12-25 19:25:02'),
(4, '1703532382', 'EPS Topik 50 (27-38)', 'Kurs haqida qisqacha', 'Kurs haqida to`liq', '1000', '01.jpg', 12, 'O`zbek', '02:13:43', 'Abbos Tulanov', '01.jpg', 30, '2023-12-25 19:26:22');

-- --------------------------------------------------------

--
-- Структура таблицы `cours_test`
--

CREATE TABLE `cours_test` (
  `id` int(11) NOT NULL,
  `CoursID` varchar(20) NOT NULL,
  `MavzuID` varchar(20) NOT NULL,
  `TestID` varchar(20) NOT NULL,
  `TestSavol` varchar(120) NOT NULL,
  `TestType` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Структура таблицы `cours_test_javob`
--

CREATE TABLE `cours_test_javob` (
  `id` int(11) NOT NULL,
  `TestID` varchar(20) NOT NULL,
  `JavobID` varchar(20) NOT NULL,
  `Javob` varchar(120) NOT NULL,
  `Status` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `UserID` varchar(25) NOT NULL,
  `FIO` varchar(45) NOT NULL,
  `Phone` varchar(45) NOT NULL,
  `Data` timestamp NOT NULL DEFAULT current_timestamp(),
  `HoverData` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id`, `UserID`, `FIO`, `Phone`, `Data`, `HoverData`) VALUES
(1, '123456789', 'Elshod Musurmonov', '908830451', '2023-12-16 07:32:04', '2023-12-17 20:02:33'),
(2, '1702721972', 'ATKO oquv markazi', '945204004', '2023-12-16 10:19:32', '2023-12-25 20:00:25'),
(3, '1702843774', 'Elshod', '908830450', '2023-12-17 20:09:34', '2023-12-25 19:59:56');

-- --------------------------------------------------------

--
-- Структура таблицы `user_cours`
--

CREATE TABLE `user_cours` (
  `id` int(11) NOT NULL,
  `UserID` varchar(25) NOT NULL,
  `CoursID` varchar(25) NOT NULL,
  `Start` date NOT NULL,
  `End` date NOT NULL,
  `Text` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `user_cours`
--

INSERT INTO `user_cours` (`id`, `UserID`, `CoursID`, `Start`, `End`, `Text`) VALUES
(1, '1702721972', '1703531155', '2023-12-26', '2024-01-25', 'Meneger');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `coues_mavzu`
--
ALTER TABLE `coues_mavzu`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `cours`
--
ALTER TABLE `cours`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `cours_test`
--
ALTER TABLE `cours_test`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `cours_test_javob`
--
ALTER TABLE `cours_test_javob`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `user_cours`
--
ALTER TABLE `user_cours`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `coues_mavzu`
--
ALTER TABLE `coues_mavzu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT для таблицы `cours`
--
ALTER TABLE `cours`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `cours_test`
--
ALTER TABLE `cours_test`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `cours_test_javob`
--
ALTER TABLE `cours_test_javob`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `user_cours`
--
ALTER TABLE `user_cours`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
