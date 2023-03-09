-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Czas generowania: 27 Lut 2021, 10:43
-- Wersja serwera: 10.4.11-MariaDB
-- Wersja PHP: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `fiszki_nauka_slowek`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `fiszki`
--

CREATE TABLE `fiszki` (
  `id` int(11) NOT NULL,
  `v1` varchar(70) CHARACTER SET utf8 NOT NULL,
  `v2` varchar(70) CHARACTER SET utf8 NOT NULL,
  `weight` int(11) NOT NULL,
  `flaga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `info_table`
--

CREATE TABLE `info_table` (
  `id` int(11) NOT NULL,
  `name_table` varchar(70) CHARACTER SET utf8 NOT NULL,
  `flaga` varchar(70) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `info_table`
--

INSERT INTO `info_table` (`id`, `name_table`, `flaga`) VALUES
(1, 'Unit_1', '0'),
(2, 'Unit_2', '0'),
(3, 'Unit_3', '0'),
(4, 'Unit_4', '0'),
(5, 'Unit_5', '0'),
(6, 'Unit_6', '0'),
(7, 'Unit_8', '0'),
(8, 'tedtalks', '0'),
(9, 'fiszki', '0'),
(10, 'Media_1', '0');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `Media_1`
--

CREATE TABLE `Media_1` (
  `id` int(10) NOT NULL,
  `v1` varchar(255) DEFAULT NULL,
  `v2` varchar(255) DEFAULT NULL,
  `weight` int(10) DEFAULT NULL,
  `zdanie` varchar(255) DEFAULT NULL,
  `flaga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `Media_1`
--

INSERT INTO `Media_1` (`id`, `v1`, `v2`, `weight`, `zdanie`, `flaga`) VALUES
(1, 'a morninig paper', 'poranna gazeta', 1, '(brak)', 0),
(2, 'an evening paper', 'wieczorna gazeta', 1, '(brak)', 0),
(3, 'a Sunday paper', 'niedzielna gazeta', 1, '(brak)', 0),
(4, 'a colour supplement', 'kolorowy dodatek', 1, '(brak)', 0),
(5, 'a quality paper', 'poważna gazeta', 1, '(brak)', 0),
(6, 'a tabloit', 'brukowiec', 1, '(brak)', 0),
(7, 'the gutter press', 'prasa drukowana', 1, '(brak)', 0),
(8, 'a glossy magazine', 'ilustrowane luksusowe czasopismo', 1, '(brak)', 0),
(9, 'a specialist magazine', 'magazyn specialistyczny', 1, '(brak)', 0),
(10, 'a womens\'s magazine', 'magazyn dla kobiet', 1, '(brak)', 0),
(11, 'a motoring press', 'czasopisma motoryzacyjne', 1, '(brak)', 0),
(12, 'an evening paper', 'wieczorna gazeta', 1, '(brak)', 0),
(13, 'a Sunday paper', 'niedzielna gazeta', 1, '(brak)', 0),
(14, 'a colour supplement', 'kolorowy dodatek', 1, '(brak)', 0),
(15, 'a quality paper', 'poważna gazeta', 1, '(brak)', 0),
(16, 'a tabloit', 'brukowiec', 1, '(brak)', 0),
(17, 'the sutter press', 'prasa drukowana', 1, '(brak)', 0),
(18, 'a glossy press', 'ilustrowane luksusowe czasopismo', 1, '(brak)', 0),
(19, 'a specialist magazine', 'magazyn specialistyczny', 1, '(brak)', 0),
(20, 'a womens\'s magazine', 'magazyn dla kobiet', 1, '(brak)', 0),
(21, 'the motorning press', 'czasopisma motoryzacyjne', 1, '(brak)', 0),
(22, 'the ecomomic press', 'czsopisma ekonomiczne', 1, '(brak)', 0),
(23, 'a journal', 'czasopismo fachowe', 1, '(brak)', 0),
(24, 'the front page', 'pierwsza strona', 1, '(brak)', 0),
(25, 'the cover', 'okładka', 1, '(brak)', 0),
(26, 'the headlines', 'nagłówki', 1, '(brak)', 0),
(27, 'a section', 'rubryka', 1, '(brak)', 0),
(28, 'an article', 'artykuł prasowy', 1, '(brak)', 0),
(29, 'a column', 'szpalta/felieton', 1, '(brak)', 0),
(30, 'the gossip column', 'kronnika towarzyska', 1, '(brak)', 0),
(31, 'the cover', 'okładka', 1, '(brak)', 0),
(32, 'the agony column', 'porady sercowe', 1, '(brak)', 0),
(33, 'the obituaries', 'nekrologi', 1, '(brak)', 0),
(34, 'the classified ads', 'ogłoszenia drobne', 1, '(brak)', 0),
(35, 'the credits', 'napisy podające autorów', 1, '(brak)', 0),
(36, 'an issue', 'wydanie, numer', 1, '(brak)', 0),
(37, 'a copy', 'egzemnplarz', 1, '(brak)', 0),
(38, 'the circulation', 'nakład', 1, '(brak)', 0),
(39, 'a subsciption', 'prenumerata', 1, '(brak)', 0),
(40, 'a subscriber', 'prenumerator', 1, '(brak)', 0),
(41, 'print', 'drukować', 1, '(brak)', 0),
(42, 'issue', 'wydawać', 1, '(brak)', 0),
(43, 'come out', 'ukazywać sie', 1, '(brak)', 0),
(44, 'subscribe', 'prenumerować', 1, '(brak)', 0),
(45, 'daily', 'dziennik', 1, '(brak)', 0),
(46, 'weekly', 'tygodnik', 1, '(brak)', 0),
(47, 'monthly', 'miesięcznik', 1, '(brak)', 0),
(48, 'quarterly', 'kwartalnik', 1, '(brak)', 0),
(49, 'a feature film', 'film dokumentalny', 1, '(brak)', 0),
(50, 'a return, a repeat', 'powtórka, ponowna emisja', 1, '(brak)', 0),
(51, 'a cartoon', 'kreskówka', 1, '(brak)', 0),
(52, 'a trailer', 'zwiastun', 1, '(brak)', 0),
(53, 'a commercial, an adverb', 'reklama', 1, '(brak)', 0),
(54, 'a commercial break', 'przerwa na reklamy', 1, '(brak)', 0),
(55, 'programme, schedule', 'planować', 1, '(brak)', 0),
(56, 'produce a show', 'nagrywać program', 1, '(brak)', 0),
(57, 'entrain', 'dostarczać rozrywki', 1, '(brak)', 0),
(58, 'engross', 'przyciagać, pochłaniać uwagę', 1, '(brak)', 0),
(59, 'live', 'na zywo', 1, '(brak)', 0),
(60, 'pre-recorded', 'nagrany wcześniej', 1, '(brak)', 0),
(61, 'educational', 'edukacyjny', 1, '(brak)', 0),
(62, 'stulifving', 'ogłupiający', 1, '(brak)', 0),
(63, 'addictive', 'uzależniający', 1, '(brak)', 0),
(64, 'a T.V. journalist', 'dziennikarz telewizyjny', 1, '(brak)', 0),
(65, 'an anchorman', 'prezenter dyżurny', 1, '(brak)', 0),
(66, 'an announcer', 'spiker', 1, '(brak)', 0),
(67, 'a newsreader', 'prezenter wiadomości', 1, '(brak)', 0),
(68, 'a compere', 'gospodaż/ni programu', 1, '(brak)', 0),
(69, 'a broadcaster', 'prezenter', 1, '(brak)', 0),
(70, 'a sportcaster', 'dziennikarz sportowy', 1, '(brak)', 0),
(71, 'a quiz master', 'osoba prowadząca quiz', 1, '(brak)', 0),
(72, 'be on the screen', 'być na ekranie', 1, '(brak)', 0),
(73, 'present the news', 'przedstawiać wiadomości', 1, '(brak)', 0),
(74, 'hold the audience', 'przykuwać uwagę publiczności', 1, '(brak)', 0),
(75, 'host, compere', 'być gospodarzem programu', 1, '(brak)', 0),
(76, 'the fourth estate', 'czwarta władza', 1, '(brak)', 0),
(77, 'the freedom on the press', 'wolność prasy', 1, '(brak)', 0),
(78, 'press freedom', 'swoboda prasy', 1, '(brak)', 0),
(79, 'freedom of expression speech', 'wolność wypowidzi słowa', 1, '(brak)', 0),
(80, 'the right to know', 'prawo do informacji', 1, '(brak)', 0),
(81, 'investigative journalism', 'dziennikarstwo dochodzeniowe', 1, '(brak)', 0),
(82, 'mesia coverage', 'zainteresowanie mediów', 1, '(brak)', 0),
(83, 'a newsmaker', 'temat z pierwszych stron gazet', 1, '(brak)', 0),
(84, 'the right to privacy', 'prawo do prywatności', 1, '(brak)', 0),
(85, 'a breach of ethics', 'naruszenie etyki', 1, '(brak)', 0),
(86, 'propaganda', 'propaganda', 1, '(brak)', 0),
(87, 'a muckraker', 'dziennikarz szukający sensacji', 1, '(brak)', 0),
(88, 'a rumour', 'plotka', 1, '(brak)', 0),
(89, 'a scandal', 'skandal', 1, '(brak)', 0),
(90, 'libel', 'zniesławienie', 1, '(brak)', 0),
(91, 'slander', 'oszczerstwo, pomówienie', 1, '(brak)', 0),
(92, 'voyeurism', 'podglądactwo', 1, '(brak)', 0),
(93, 'investigate a case', 'badać sprawę', 1, '(brak)', 0),
(94, 'cover', 'robić reportaż o', 1, '(brak)', 0),
(95, 'spy', 'szpiegować', 1, '(brak)', 0),
(96, 'pester, harass', 'męczyć, nękać', 1, '(brak)', 0),
(97, 'stalk', 'śledzić', 1, '(brak)', 0),
(98, 'unearth, dig out', 'wydobywać na światło dzienne', 1, '(brak)', 0),
(99, 'disclose', 'ujawniać', 1, '(brak)', 0),
(100, 'expose a scandal', 'demaskować, ujawniać skandal', 1, '(brak)', 0),
(101, 'libel, defame', 'zniesławiać', 1, '(brak)', 0),
(102, 'slander', 'rzucać oszczerstwa', 1, '(brak)', 0),
(103, 'manipulate', 'manipulować', 1, '(brak)', 0),
(104, 'make the news', 'trafiać na czołówki', 1, '(brak)', 0),
(105, 'inaccurate', 'nie dokładny', 1, '(brak)', 0),
(106, 'unreliable', 'niewiarygodny', 1, '(brak)', 0),
(107, 'objective', 'obiektywny', 1, '(brak)', 0),
(108, 'biassed, prejudiced', 'stronniczny, tendencyjny', 1, '(brak)', 0),
(109, 'electronic surveillance', 'inwigilacja elektroniczna', 1, '(brak)', 0),
(110, 'closed-circuit television', 'telewizja przemysłowa', 1, '(brak)', 0),
(111, 'wiretapping', 'podsłuch telefoniczny', 1, '(brak)', 0),
(112, 'a phone pug', 'pluskwa telefoniczna', 1, '(brak)', 0),
(113, 'eavesdropping', 'podsłuchiwanie', 1, '(brak)', 0),
(114, 'watch', 'obserwować', 1, '(brak)', 0),
(115, 'tap/bug a phone', 'założyć podsłuch telefoniczny', 1, '(brak)', 0),
(116, 'eavesdrop on', 'podsłuchiwać', 1, '(brak)', 0),
(117, 'self-censorship', 'autocenzura', 1, '(brak)', 0),
(118, 'right of search', 'prawo do przeszukania', 1, '(brak)', 0),
(119, 'a seizure', 'konfiskata', 1, '(brak)', 0),
(120, 'a ban', 'zakaz', 1, '(brak)', 0),
(121, 'news blackout', 'zakaz rozpowszechniania informacji', 1, '(brak)', 0),
(122, 'censor', 'cenzurować', 1, '(brak)', 0),
(123, 'suppress press freedom', 'znieść wolność prasy', 1, '(brak)', 0),
(124, 'media coverage', 'sprawozdanie w mediach', 1, '(brak)', 0),
(125, 'a journalist', 'dziennikarz', 1, '(brak)', 0),
(126, 'reporter', 'reportarz', 1, '(brak)', 0),
(127, 'a columnist', 'feletonista', 1, '(brak)', 0),
(128, 'a freelance', 'niezależny', 1, '(brak)', 0),
(129, 'a foreign corresponder', 'koresponder zagraniczny', 1, '(brak)', 0),
(130, 'an editor', 'redaktor naczelny', 1, '(brak)', 0),
(131, 'a newspaper editor', 'redaktor pisma', 1, '(brak)', 0),
(132, 'publisher', 'wydawca', 1, '(brak)', 0),
(133, 'a press tycoon', 'magnat prasowy', 1, '(brak)', 0),
(134, 'news gatherning', 'zbieranie informacji', 1, '(brak)', 0),
(135, 'a news release (US)', 'oświadczenie prasowe', 1, '(brak)', 0),
(136, 'inform', 'informmować', 1, '(brak)', 0),
(137, 'report', 'relacionować', 1, '(brak)', 0),
(138, 'cover', 'robić reportarz', 1, '(brak)', 0),
(139, 'rewrite', 'napisać od nowa', 1, '(brak)', 0),
(140, 'edit', 'redagować', 1, '(brak)', 0),
(141, 'publish', 'publikować', 1, '(brak)', 0),
(142, 'scoop', 'opublikować przed konkurencją', 1, '(brak)', 0),
(143, 'hot the headlines', 'trafić na nagłówki', 1, '(brak)', 0),
(144, 'sensitize publish opinion', 'uczulić opinię publiczną', 1, '(brak)', 0),
(145, 'make people awarge', 'uświadomić ludziom', 1, '(brak)', 0),
(146, 'have news value', 'stanowić interesującą wiadomość', 1, '(brak)', 0),
(147, 'a radio set, a transmistor', 'osbiornik radiowy', 1, '(brak)', 0),
(148, 'a car radio', 'radio samochodowe', 1, '(brak)', 0),
(149, 'an aearial', 'antena', 1, '(brak)', 0),
(150, 'wave', 'fala', 1, '(brak)', 0),
(151, 'short wave', 'fale któtkie', 1, '(brak)', 0),
(152, 'short wave', 'fale średnie', 1, '(brak)', 0),
(153, 'long wave', 'fale długie', 1, '(brak)', 0),
(154, 'freqency modulation', 'modulacja częstotliwości', 1, '(brak)', 0),
(155, 'static interference', 'zakłucenia elektroniczne', 1, '(brak)', 0),
(156, 'a radio announcer', 'prezent radiowy', 1, '(brak)', 0),
(157, 'the audience', 'słuchacze', 1, '(brak)', 0),
(158, 'a news bulletin', 'serwic wiadomości', 1, '(brak)', 0),
(159, 'a news flesh', 'skrót wiadomości', 1, '(brak)', 0),
(160, 'the audience', 'słuchacze', 1, '(brak)', 0),
(161, 'a news bulletin', 'serwis wiadmości', 1, '(brak)', 0),
(162, 'pick up', 'skrót wiadmości', 1, '(brak)', 0),
(163, 'broadcaster', 'nadawać', 1, '(brak)', 0),
(164, 'be on air', 'być na antenie', 1, '(brak)', 0),
(165, 'be off the air', 'nie być na antenie', 1, '(brak)', 0),
(166, 'a television set', 'odbiornik telewizyjny', 1, '(brak)', 0),
(167, 'a black an white tv', 'telewizja czarno-biała', 1, '(brak)', 0),
(168, 'a colour tv', 'kolorowa telewizja', 1, '(brak)', 0),
(169, 'the remote control, the zapper', 'zdalne sterowanie, pilotem', 1, '(brak)', 0),
(170, 'a screen', 'ekran', 1, '(brak)', 0),
(171, 'a channel', 'kanał', 1, '(brak)', 0),
(172, 'a network', 'sieć', 1, '(brak)', 0),
(173, 'cable tevision', 'telewizja kablowa', 1, '(brak)', 0),
(174, 'a dish aerial', 'telewizja satelitarna, talerz', 1, '(brak)', 0),
(175, 'pay-per-view television', 'płatne programy w telewizji', 1, '(brak)', 0),
(176, 'toll channel', 'płatny kanał', 1, '(brak)', 0),
(177, 'a tv decoder', 'dekoder telewizyjny', 1, '(brak)', 0),
(178, 'a video-cassete recorder', 'magnetowid', 1, '(brak)', 0),
(179, 'a videotape', 'taśma wideo', 1, '(brak)', 0),
(180, 'a viewer', 'telewidz', 1, '(brak)', 0),
(181, 'a channer jumper', 'osoba skacząca z kanału na kanał', 1, '(brak)', 0),
(182, 'a tv addict', 'telemaniak, uzależniony od tv', 1, '(brak)', 0),
(183, 'watch tv', 'oglądać tv', 1, '(brak)', 0),
(184, 'turn the tv on/off', 'włączyć, wyłączyć tv', 1, '(brak)', 0),
(185, 'channel-flick, zap', 'skakać po kanałach', 1, '(brak)', 0),
(186, 'videotape, record', 'nagrywać na taśmę', 1, '(brak)', 0),
(187, 'duplicate', 'kopiować', 1, '(brak)', 0),
(188, 'a programme', 'program', 1, '(brak)', 0),
(189, 'a morning programme', 'program poranny', 1, '(brak)', 0),
(190, 'an evening programme', 'program wieczorny', 1, '(brak)', 0),
(191, 'air time', 'czas na antenie', 1, '(brak)', 0),
(192, 'the ratings', 'notowania', 1, '(brak)', 0),
(193, 'prime time', 'najlepszy czas antenowy', 1, '(brak)', 0),
(194, 'an audience share', 'oglądalność', 1, '(brak)', 0),
(195, 'news', 'wiadomości', 1, '(brak)', 0),
(196, 'a documentary', 'program dokumentalny', 1, '(brak)', 0),
(197, 'a sports broadcaster', 'transmisja sportowa', 1, '(brak)', 0),
(198, 'the weather forecast', 'prognoza pogody', 1, '(brak)', 0),
(199, 'a show', 'program rozrywkowy', 1, '(brak)', 0),
(200, 'a variety show', 'varietes', 1, '(brak)', 0),
(201, 'a quiz show', 'quiz, teleturniej', 1, '(brak)', 0),
(202, 'a talk show, a chat show', 'talk show', 1, '(brak)', 0),
(203, 'a serial', 'serial', 1, '(brak)', 0),
(204, 'a series', 'cykl, seria', 1, '(brak)', 0),
(205, 'a television film', 'film telewizyjny', 1, '(brak)', 0),
(206, 'be subject to censorship', 'podlegać cenzurze', 1, '(brak)', 0),
(207, 'blue-pencil', 'wykreślać, cenzurować', 1, '(brak)', 0),
(208, 'silence', 'uciszyć', 1, '(brak)', 0),
(209, 'gag', 'zakneblować', 1, '(brak)', 0),
(210, 'curtail access', 'ograniczyć dostęp', 1, '(brak)', 0),
(211, 'confiscate, seize', 'konfiskować, zająć', 1, '(brak)', 0),
(212, 'ban, suppress', 'zakazać, zatajać', 1, '(brak)', 0),
(213, 'quality papers', 'ambitne pismo dużego formatu', 1, '(brak)', 0),
(214, 'tabloids', 'popularne pisma średniego formatu', 1, '(brak)', 0),
(215, 'British Brodcaster Corporation', 'BBC', 1, '(brak)', 0),
(216, 'Independent Television', 'ITV', 1, '(brak)', 0),
(217, 'American Broadcasting Corporation', 'ABC', 1, '(brak)', 0),
(218, 'National Broadcasting Company', 'NBC', 1, '(brak)', 0),
(219, 'Columbia Broadcasting System', 'CBS', 1, '(brak)', 0),
(220, 'Cable News Network', 'CNN', 1, '(brak)', 0),
(221, 'Instructional TV', 'ITV', 1, '(brak)', 0),
(222, 'Music Tv', 'MTV', 1, '(brak)', 0),
(223, 'The Press Association', 'P.A', 1, '(brak)', 0);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `tedtalks`
--

CREATE TABLE `tedtalks` (
  `id` int(2) DEFAULT NULL,
  `v1` varchar(28) DEFAULT NULL,
  `v2` varchar(27) DEFAULT NULL,
  `weight` int(1) DEFAULT NULL,
  `zdanie` varchar(124) DEFAULT NULL,
  `flaga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Zrzut danych tabeli `tedtalks`
--

INSERT INTO `tedtalks` (`id`, `v1`, `v2`, `weight`, `zdanie`, `flaga`) VALUES
(1, 'civil war', 'wojna domowa', 1, 'There is a civil war going on in some countries', 0),
(2, 'eldest people', 'starszyzna', 1, 'There used to be an elders instead of a government', 0),
(3, 'medical care', 'opieka medyczna', 1, 'A lot of people needs medical care.', 0),
(4, 'fled abroad', 'ucieczka za granice', 1, 'Most people fled abroad when it is hard in the country.', 0),
(5, 'stand on our feet', 'staramy się pomagać', 1, 'In time epidemic everyone stand on feet other people.', 0),
(6, 'victims', 'ofiary', 1, 'In the war everytime are victims.', 0),
(7, 'majority', 'większość', 1, 'Majority world society don\'t know about bad situation in Africa.', 0),
(8, 'political division', 'podział polityczny', 1, 'Poland goverment is politcal divison: right and left site.', 0),
(9, 'desire', 'pragnienie', 1, 'I have big desire that come back normal life.', 0),
(10, 'surgery', 'chirurgia', 1, 'My cousin studded surgery at University of Katowice.', 0),
(11, 'distinguished', 'wybitny', 1, 'He is an distinguished scientist in Poland.', 0),
(12, 'circumstances', 'okoliczności', 1, 'What were the circumstances of the outbreak of civil war?', 0),
(13, 'respecting', 'dotyczący', 1, 'I found a document respecting my serious illness.', 0),
(14, 'essential', 'kluczowy', 1, 'Always when telling a story, you have to go through a essential moment.', 0),
(15, 'treating', 'leczenie', 1, 'They are treating a lot of children and women.', 0),
(16, 'camp', 'obóz', 1, 'I went to camp on vacation.', 0),
(17, 'cesarean section', 'cesarskie cięcie', 1, 'My neighbor had a caesarean section.', 0),
(18, 'elementary', 'podstawówka', 1, 'I had only good grades in elementary.', 0),
(19, 'rule', 'zasada', 1, 'The rules are there to break them.', 0),
(20, 'clan divisions', 'podziały klanowe', 1, 'There is a clan division in my village.', 0),
(21, 'cesarean section', 'cesarskie cięcie', 1, 'We are doing caesarean section and diffrent operations.', 0),
(22, 'medical care', 'opieka medyczna', 1, 'You running a medical clinic,but much, much needed medical care to people', 0),
(23, 'circumstances', 'okoliczności', 1, 'For you to become a doctor and to work with your mother in these circumstances.', 0),
(24, 'law and order', 'prawo i porządek', 1, 'It was we were having that time government- law and order', 0),
(25, 'gynecological complication', 'powikłania ginekologicze', 1, 'My mother died in gynecological complication.', 0),
(26, 'war zone', 'strefa działań wojennych', 1, 'and if you did you are forgiven for wondering how an nutt manage to end up in a war zone', 0),
(27, 'in war-torn', 'w ogarniętej wojną', 1, 'I actually was offered right out of medical school and actepted a volunteer contract to work with UNICEF in war-torn Somalia', 0),
(28, 'caused by the war', 'spowodowane wojną', 1, '(brak)', 0),
(29, 'genocide', 'ludobójstwo', 1, 'It was right on the heels of the Rwandan Genocide and ...', 0),
(30, 'malnutrition and dehydration', 'niedożywienie i odwodnienie', 1, 'She had died hours before an malnutrition and deyhydration.', 0),
(31, 'malnourished', 'niedożywienie', 1, 'Children became very malnourished', 0),
(32, 'backyard', 'podwórko', 1, 'They are in our backyard', 0),
(33, 'severe', 'silny', 1, 'We take the severe ones, and we reschedule the other ones the next day.', 0),
(34, 'reschedule', 'zmienić termin', 1, 'We take the severe ones, and we reschedule the other ones the next day.', 0),
(35, 'majority', 'większość', 1, 'The majority are women and girls.', 0),
(36, 'admission', 'wstęp, dostęp, pozwolenie', 1, 'Would you explain the rules for admission?', 0),
(37, 'distinguished', 'wybitny', 1, 'There is no clan distinguishes and political division in Somali sociaty.', 0),
(38, 'Whomever', 'wyrzucamy', 1, 'Whomever makes those things we throw out.', 0),
(39, 'surgeries', 'operacje', 1, 'You see 300 patients, 20 surgeries and 90,000 people to manage.', 0),
(40, 'backyard', 'podwórko', 1, 'So our patients are women and children and they are in our backyard', 0),
(41, 'reschedule', 'zmiana terminu', 1, 'We reschedule the other ones the next day.', 0),
(42, 'Rules', 'zasady', 1, 'And the doctors have some very big rules about who can get treated at the clinic.', 0),
(43, 'dehydration', 'odwodnienie', 1, 'When you take on a lot of sport activities, remember about drinking water to avoid dehydration!', 0),
(44, 'Automatic rifle', 'karabin maszynowy', 1, 'Automatic rifles fire a series of shots each time you pull the trigger', 0),
(45, 'force', 'siła', 1, 'Force is calculated as mass times accelaration.', 0),
(46, 'Invasion', 'inwazja', 1, 'In 1588 Spain has invaded England.', 0),
(47, 'various', 'różny', 1, 'Everybody have various views.', 0),
(48, 'Humanitarian catastrophe', 'Katastrofa humanitarna', 1, 'Africa is one of the most country where is a humanitarian catastrophe.', 0),
(49, 'Stiff', 'Sztywny', 1, 'My leg is stiff. My doctor gived me a iron splint after my breaking.', 0),
(50, 'Occupying', 'Zajmowanie', 1, 'In World War II the Nazist occupying western part Poland.', 0),
(51, 'Coercion', 'Przymus', 1, 'In times reigning Roma slaves were coercion to fight as gladiator.', 0),
(52, 'nutt', 'Świr', 1, 'Everybody calls nutt people who eat bread with chips.', 0),
(53, 'nursery school', 'szkoła medyczna', 1, 'I am planning to go to nursery school.', 0),
(54, 'weapon', 'broń', 1, 'In Poland it\'s difficult to get a permission for weapon.', 0),
(55, 'disclosure mechanisms', 'mechanizmy jawności', 1, 'the government is working on introducing a disclosure mechanism.', 0),
(56, 'demand', 'popyt', 1, 'Demand for face masks has increased in the face of epidemics.', 0),
(57, 'treaty', 'traktat', 1, 'The president has signed a new treaty', 0),
(58, 'mostly', 'przeważnie', 1, 'Mostly poor children die because they are malnourished.', 0),
(59, 'rifles', 'karabiny', 1, 'The rifles shouldn\'t be as accessible as they are now.', 0),
(60, 'favor', 'przysługa', 1, 'The rich people should do favor children and help them.', 0),
(61, 'staggering', 'oszałamiający', 1, 'A lot of children are starving, it\'s staggering.', 0),
(62, 'displaced', 'przesiedlony', 1, 'Because of the war, most people are displaced to another place.', 0),
(63, 'combat', 'walka', 1, 'The combat between states is terrible.', 0),
(64, 'contributions', 'udziały', 1, 'Regular contributions like monthly contributions are a far more effective way to giving.', 0),
(65, 'Terryfing', 'Okropny', 1, 'I can tell you that it is a terryfing and agonizing fear', 0),
(66, 'Clockwork', 'Mechaniczna', 1, 'Can best be describe as \"Mad Max\" by way of \"a Clockwork Orange\"', 0),
(67, 'Infans', 'niemowlę', 1, 'They were clutchig their infants very close', 0),
(68, 'coercion', 'nacisk', 1, 'Not through force or coercion or invasion,but by simply looking at all', 0),
(69, 'civillians', 'Cywile', 1, 'The vast majority of civillians like that young baby who are dying in war zones around the world', 0),
(70, 'famine', 'głód', 1, 'Mostly as results of war-related famine and disease.', 0),
(71, 'figure out', 'rozwiązać', 1, 'I was part of a team that was tasked with trying figure out how best to respond to this humanitarian catastrope.', 0),
(72, 'scrutinzing', 'badać', 1, 'This is a relationshio worth scrutinzing.', 0),
(73, 'increased', 'wzrosła', 1, 'Increased control mechanisms won\'t solve that problem.', 0),
(74, 'terrifining', 'przerażające', 1, 'I can tell you that it is a terryfing and agonizing fear', 0),
(75, 'beyond', 'poza', 1, 'What when if we go beyond small arms for a second?', 0);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `Unit_1`
--

CREATE TABLE `Unit_1` (
  `id` int(11) NOT NULL,
  `v1` varchar(70) CHARACTER SET utf8 NOT NULL,
  `v2` varchar(70) CHARACTER SET utf8 NOT NULL,
  `weight` int(11) NOT NULL,
  `zdanie` varchar(255) CHARACTER SET utf8 NOT NULL,
  `flaga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `Unit_1`
--

INSERT INTO `Unit_1` (`id`, `v1`, `v2`, `weight`, `zdanie`, `flaga`) VALUES
(6, 'extended family', 'dalsza rodzina, wielopokoleniowa rodzina', 1, '(brak)jjj', 1),
(10, 'great-grandparents', 'pradziadkowie', 1, '777', 1),
(11, 'my immediate family', 'moja najbliższa rodzina', 1, '(brak)', 1),
(12, 'include', 'zawierać', 1, '(brak)', 1),
(13, 'inherit', 'odziedziczyć', 1, '(brak)', 1),
(14, 'inherited', 'odziedziczony', 1, '(brak)', 1),
(15, 'medallist', 'medalista', 1, '(brak)', 1),
(16, 'relative', 'krewny', 1, '(brak)', 1),
(17, 'royal', 'królewski', 1, '(brak)', 1),
(18, 'take after', 'upodabniać, przypominać kogoś, być podobnym', 1, '(brak)', 1),
(19, 'aim', 'cel, dążenie', 1, '(brak)', 1),
(20, 'apply for a job', 'ubiegać się o pracę', 1, '(brak)', 1),
(21, 'colleague', 'kolega', 1, '(brak)', 1),
(22, 'draft', 'projekt, szkic, wersja roboczac', 1, '(brak)cc', 1),
(23, 'publishing company', 'wydawnictwo', 1, '(brak)', 1),
(24, 'specialisation', 'specjalizacja', 1, '(brak)', 1),
(25, 'version', 'wersja', 1, '(brak)', 1),
(26, 'ability', 'zdolność', 1, '(brak)', 1),
(27, '', '', 1, '', 1),
(28, 'be in charge', 'być u władzy, rządzić', 1, '(brak)', 1),
(29, 'gene', 'gen', 1, '(brak)', 1),
(30, 'genetic', 'genetyczny', 1, '(brak)', 1),
(31, 'accurate', 'dokładny, trafny', 1, '(brak)', 1),
(32, 'chain', 'łańcuch', 1, '(brak)', 1),
(33, 'classmate', 'kolega z klasy', 1, '(brak)', 1),
(34, 'handlebar', 'kierownica', 1, '(brak)', 1),
(35, 'pupil', 'uczeń', 1, '(brak)', 1),
(36, 'team-mate', 'kolega z drużyny', 1, '(brak)', 1),
(37, 'according to', 'według, zgodnie z', 1, '(brak)', 1),
(38, 'balance', 'bilans', 1, '(brak)', 1),
(39, 'challenge', 'wyzwanie', 1, '(brak)', 1),
(40, 'do someone a favour', 'zrobić komuś przysługę', 1, '(brak)', 1),
(41, 'get on with someone', 'dogadywać się z kimś być z kimś w dobrych stosunkach', 1, '(brak)', 1),
(42, 'go on a diet', 'przejść na dietę', 1, '(brak)', 1),
(43, 'research agency', 'agencja badawcza', 1, '(brak)', 1),
(44, 'respond', 'odpowiadać', 1, '(brak)', 1),
(45, 'take part in', 'wziąć udział w', 1, '(brak)', 1),
(46, 'take responsibility for', 'wziąć odpowiedzialność za', 1, '(brak)', 1),
(47, 'appropriately', 'odpowiednio', 1, '(brak)', 1),
(48, 'answer briefly', 'odpowiadać krótko, zwięźle', 1, '(brak)', 1),
(49, 'dress smartly', 'ubrać się elegancko', 1, '(brak)', 1),
(50, 'send references', 'wysłać referencje', 1, '(brak)', 1),
(51, 'arrive on time', 'przybyć na czas', 1, '(brak)', 1),
(52, 'avoid eye contact', 'unikać kontaktu wzrokowego', 1, '(brak)', 1),
(53, 'show enthusiasm', 'pokazać entuzjazm', 1, '(brak)', 1),
(54, 'be prepared', 'być przygotowany', 1, '(brak)', 1),
(55, 'face-to-face', 'twarzą w twarz', 1, '(brak)', 1),
(56, 'placement', 'umieszczenie, ulokowanie', 1, '(brak)', 1),
(57, 'potential', 'potencjał', 1, '(brak)', 1),
(58, 'on the summer camp', 'na letnim obozie', 1, '(brak)', 1),
(59, 'according', 'stosownie, zależnie', 1, '(brak)', 1),
(60, 'community', 'społeczność, wspólnota', 1, '(brak)', 1),
(61, 'currency', 'waluta', 1, '(brak)', 1),
(62, 'yes, definitely', 'tak, zdecydowanie', 1, '(brak)', 1),
(63, 'of course!', 'oczywiście!', 1, '(brak)', 1),
(64, 'that\'s right!', 'racja!', 1, '(brak)', 1),
(65, 'you\'re correct', 'masz rację (ze słówkiem correct)', 1, '(brak)', 1),
(66, 'I see', 'Rozumiem (ze słówkiem see)', 1, '(brak)', 1),
(67, 'no problem', 'nie ma sprawy', 1, '(brak)', 1),
(68, 'you\'re welcome', 'nie ma za co, proszę bardzo', 1, '(brak)', 1),
(69, 'go ahead', 'śmiało (idź dalej, naprzód)', 1, '(brak)', 1),
(70, 'please continue', 'proszę kontynuować', 1, '(brak)', 1),
(71, 'reason', 'powód', 1, '(brak)', 1),
(72, 'plans for the future', 'plany na przyszłość', 1, '(brak)', 1),
(73, 'work experience', 'doświadczenie w pracy', 1, '(brak)', 1),
(74, 'expectations', 'oczekiwania', 1, '(brak)', 1),
(75, 'could I ask the question?', 'mógłbym zadać pytanie?', 1, '(brak)', 1),
(76, 'there are a couple of things I\'d like to ask about', 'jest parę rzeczy o które chciałbym zapytać', 1, '(brak)', 1),
(77, 'can I ask you about that?', 'czy mogę Cię zapytać o to?', 1, '(brak)', 1),
(78, 'do you have any questions?', 'czy masz jakieś pytania?', 1, '(brak)', 1),
(79, 'any queries?', 'jakieś zapytania?', 1, '(brak)', 1),
(80, 'so for me the most important thing is to', 'więc dla mnie najważniejszą rzeczą jest to aby', 1, '(brak)', 1),
(81, 'I suppose', 'przypuszczam', 1, '(brak)', 1),
(82, 'one thing I\'d like to say', 'jedną rzecz chciałbym powiedzieć', 1, '(brak)', 1),
(83, 'actually I have a query', 'właściwie mam zapytanie', 1, '(brak)', 1),
(84, 'opportunity', 'okazja sposobność', 1, '(brak)', 1),
(85, 'involved', 'zaangażowany', 1, '(brak)', 1),
(86, 'introduce myself', 'przedstawić się', 1, '(brak)', 1),
(87, 'in these fields', 'w tych dziedzinach', 1, '(brak)', 1),
(88, 'instead', 'zamiast', 1, '(brak)', 1),
(89, 'more complex sentences', 'bardziej złożone zdania', 1, '(brak)', 1),
(90, 'polskie', 'polandkk', 1, 'zdanie', 1),
(92, 'polskie', 'jknjk', 1, 'to jest przykladowe zdanie', 1),
(93, 'polskie', 'polands', 1, 'zdanie', 1),
(94, 'v1', 'poland', 1, 'to jest przykladowe zdanie', 1);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `Unit_2`
--

CREATE TABLE `Unit_2` (
  `id` int(10) NOT NULL,
  `v1` varchar(255) DEFAULT NULL,
  `v2` varchar(255) DEFAULT NULL,
  `weight` int(10) DEFAULT NULL,
  `zdanie` varchar(255) DEFAULT NULL,
  `flaga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `Unit_2`
--

INSERT INTO `Unit_2` (`id`, `v1`, `v2`, `weight`, `zdanie`, `flaga`) VALUES
(1, 'partly true', 'częściowo prawda', 1, '(brak)', 0),
(2, 'inaccurate', 'niedokładny, nieprecyzyjny', 1, '(brak)', 0),
(3, 'exact words', 'dokładne słowa', 1, '(brak)', 0),
(4, 'biopic', 'film biograficzny', 1, '(brak)', 0),
(5, 'docudrama', 'dramat dokumentalny', 1, '(brak)', 0),
(6, 'characters battle with their minds', 'postacie walczą z myślami, biją się z myślami', 1, '(brak)', 0),
(7, 'imaginary world', 'wyimaginowany świat', 1, '(brak)', 0),
(8, 'in the life of a real person', 'w życiu prawdziwej osoby', 1, '(brak)', 0),
(9, 'old-fashioned costume', 'staroświecki, staromodny kostium', 1, '(brak)', 0),
(10, 'survive', 'przeżyć, przetrwać', 1, '(brak)', 0),
(11, 'stockbroker', 'makler giełdowy', 1, '(brak)', 0),
(12, 'be on TV', 'być w TV', 1, '(brak)', 0),
(13, 'be in a newspaper', 'być w gazecie', 1, '(brak)', 0),
(14, 'do something embarrassing in public', 'robić coś żenującego publicznie', 1, '(brak)', 0),
(15, 'write a poem', 'napisać wiersz', 1, '(brak)', 0),
(16, 'go to a country on a different continent', 'udać się do kraju na innym kontynencie', 1, '(brak)', 0),
(17, 'collect something as a hobby', 'zbierać coś jako hobby', 1, '(brak)', 0),
(18, 'see someone commit a crime', 'zobaczyć kogoś popełniającego przestępstwo', 1, '(brak)', 0),
(19, 'at 12', 'o 12', 1, '(brak)', 0),
(20, 'at night', 'w nocy', 1, '(brak)', 0),
(21, 'at the weekend', 'w weekend', 1, '(brak)', 0),
(22, 'in July', 'w lipcu', 1, '(brak)', 0),
(23, 'in 2010', 'w 2010 roku', 1, '(brak)', 0),
(24, 'on the 4th of February', 'czwartego lutego', 1, '(brak)', 0),
(25, 'in the morning', 'rano', 1, '(brak)', 0),
(26, 'on Thursday morning', 'w czwartek rano', 1, '(brak)', 0),
(27, 'at lunchtime', 'w porze lunchu', 1, '(brak)', 0),
(28, 'on Wednesday', 'w środę', 1, '(brak)', 0),
(29, 'in the autumn', 'w jesieni, na jesień', 1, '(brak)', 0),
(30, 'on New Year\'s Day', 'w Nowy Rok', 1, '(brak)', 0),
(31, 'in the twenty-first century', 'w dwudziestym pierwszym wieku', 1, '(brak)', 0),
(32, 'see on TV', 'widzieć w telewizji', 1, '(brak)', 0),
(33, 'go for a walk', 'iść na spacer', 1, '(brak)', 0),
(34, 'travel by boat', 'podróżować łódką', 1, '(brak)', 0),
(35, 'go for a drive', 'udać się na przejażdżkę', 1, '(brak)', 0),
(36, 'travel by plane', 'podróżować samolotem', 1, '(brak)', 0),
(37, 'go for a run', 'iść pobiegać, iść na przebieżkę', 1, '(brak)', 0),
(38, 'travel by coach', 'podróżować autokarem', 1, '(brak)', 0),
(39, 'speak on the phone', 'rozmawiać przez telefon', 1, '(brak)', 0),
(40, 'travel by train', 'podróżować pociągiem', 1, '(brak)', 0),
(41, 'hear on the radio', 'słyszeć w radiu', 1, '(brak)', 0),
(42, 'on my own', 'na własną rękę', 1, '(brak)', 0),
(43, 'by mistake', 'przez pomyłkę', 1, '(brak)', 0),
(44, 'on business', 'w interesach, służbowo', 1, '(brak)', 0),
(45, 'by chance', 'przypadkowo, przez przypadek', 1, '(brak)', 0),
(46, 'by hand', 'ręcznie', 1, '(brak)', 0),
(47, 'in the end', 'na końcu', 1, '(brak)', 0),
(48, 'on purpose', 'specjalnie, celowo', 1, '(brak)', 0),
(49, 'arrive on time', 'przybyć na czas', 1, '(brak)', 0),
(50, 'in a moment', 'za chwilę', 1, '(brak)', 0),
(51, 'in a hurry', 'w pośpiechu', 1, '(brak)', 0),
(52, 'keep up-to-date', 'utrzymać się na bieżąco', 1, '(brak)', 0),
(53, 'conspiracy theory', 'teoria spiskowa', 1, '(brak)', 0),
(54, 'involved', 'zaangażowany, wplątany', 1, '(brak)', 0),
(55, 'suspects', 'podejrzani', 1, '(brak)', 0),
(56, 'shadow', 'cień', 1, '(brak)', 0),
(57, 'love story', 'historia miłosna', 1, '(brak)', 0),
(58, 'alcohol', 'alkohol', 1, '(brak)', 0),
(59, 'photograph / photographer', 'fotografia / fotograf', 1, '(brak)', 0),
(60, 'a man with a gun', 'człowiek z pistoletem', 1, '(brak)', 0),
(61, 'flag', 'flaga', 1, '(brak)', 0),
(62, 'Federal Bureau of Investigation', 'FBI', 1, '(brak)', 0),
(63, 'report', 'raport', 1, '(brak)', 0),
(64, 'surprisingly', 'zaskakująco', 1, '(brak)', 0),
(65, 'visible', 'widoczny, widzialny', 1, '(brak)', 0),
(66, 'apparently', 'pozornie', 1, '(brak)', 0),
(67, 'wave', 'falować, fala', 1, '(brak)', 0),
(68, 'however', 'jednak, jakkolwiek, wszakże...', 1, '(brak)', 0),
(69, 'logically', 'logicznie', 1, '(brak)', 0),
(70, 'lighting conditions', 'warunki oświetleniowe', 1, '(brak)', 0),
(71, 'doubts', 'wątpliwości', 1, '(brak)', 0),
(72, 'explain', 'wyjaśniać', 1, '(brak)', 0),
(73, 'on the thirty-first of August', '31 sierpnia', 1, '(brak)', 0),
(74, 'accident', 'wypadek', 1, '(brak)', 0),
(75, 'relationship', 'związek', 1, '(brak)', 0),
(76, 'drunken condition', 'stan pod wpływem alkoholu', 1, '(brak)', 0),
(77, 'be pregnant', 'być w ciąży', 1, '(brak)', 0),
(78, 'plan to marry', 'planować wyjść za mąż', 1, '(brak)', 0),
(79, 'assassination', 'zamach', 1, '(brak)', 0),
(80, 'leader', 'przywódca, lider', 1, '(brak)', 0),
(81, 'crowd / crowds / crowded', 'tłum / tłumy / zatłoczony', 1, '(brak)', 0),
(82, 'was arrested', 'został aresztowany', 1, '(brak)', 0),
(83, 'immediately', 'natychmiast', 1, '(brak)', 0),
(84, 'almost', 'prawie', 1, '(brak)', 0),
(85, 'conclude', 'wyciągnąć wniosek', 1, '(brak)', 0),
(86, 'he acted alone', 'on działał sam', 1, '(brak)', 0),
(87, 'investigation', 'śledztwo', 1, '(brak)', 0),
(88, 'criticise', 'krytykować', 1, '(brak)', 0),
(89, 'agree', 'zgadzać się', 1, '(brak)', 0),
(90, 'summary', 'podsumowanie, streszczenie', 1, '(brak)', 0),
(91, 'claim', 'twierdzić, deklarować', 1, '(brak)', 0),
(92, 'he was drunk', 'on był pijany', 1, '(brak)', 0),
(93, 'prison', 'więzienie', 1, '(brak)', 0),
(94, 'calm', 'spokój, spokojny', 1, '(brak)', 0),
(95, 'they were talking to each other', 'rozmawiali ze sobą', 1, '(brak)', 0),
(96, 'in the middle of the...', 'na środku..., w środku... (czegoś tam)', 1, '(brak)', 0),
(97, 'better view', 'lepszy widok', 1, '(brak)', 0),
(98, 'miss the chance of seeing somebady', 'przegapić szansę zobaczenia kogoś', 1, '(brak)', 0),
(99, 'for the first time', 'po raz pierwszy', 1, '(brak)', 0),
(100, 'it was difficult to hear', 'było trudno usłyszeć', 1, '(brak)', 0),
(101, 'die in crash', 'zginąć w wypadku/katastrofie', 1, '(brak)', 0),
(102, 'attack', 'atak, atakować', 1, '(brak)', 0),
(103, 'violent', 'gwałtowny, pełen przemocy', 1, '(brak)', 0),
(104, 'violence', 'przemoc', 1, '(brak)', 0),
(105, 'workers threaten strikes', 'pracownicy grożą strajkami', 1, '(brak)', 0),
(106, 'massive earthquake hits Los Angeles', 'masywne trzęsienie ziemi uderza w Los Angeles', 1, '(brak)', 0),
(107, 'floods destroy crops', 'powodzie niszczą uprawy', 1, '(brak)', 0),
(108, 'hostages released', 'zakładnicy zwolnieni (wypuszczeni)', 1, '(brak)', 0),
(109, 'rebels', 'rebelianci', 1, '(brak)', 0),
(110, 'collapse of banks', 'upadek (krach) banków', 1, '(brak)', 0),
(111, 'damage and destroy', 'uszkodzić i zniszczyć', 1, '(brak)', 0),
(112, 'hostages were allowed to go free', 'zakładnicy zostali puszczeni wolno', 1, '(brak)', 0),
(113, 'serious crime', 'poważne przestępstwo', 1, '(brak)', 0),
(114, 'disaster', 'karastrofa', 1, '(brak)', 0),
(115, 'economic crisis affects business', 'kryzys ekonomiczny wpływa na biznes', 1, '(brak)', 0),
(116, 'a lot of farmland is under water', 'dużo pól uprawnych jest pod wodą (zalane)', 1, '(brak)', 0),
(117, 'people refuse to go to work', 'ludzie odmawiają pójścia do pracy', 1, '(brak)', 0),
(118, 'begin to fight', 'zaczynać walczyć', 1, '(brak)', 0),
(119, 'who were you with?', 'z kim byłeś?', 1, '(brak)', 0),
(120, 'who is the story about?', 'o kim jest ta historia?', 1, '(brak)', 0),
(121, 'what happened?', 'co się stało?', 1, '(brak)', 0),
(122, 'why did it happen?', 'dlaczego to się stało?', 1, '(brak)', 0),
(123, 'where did it happen?', 'gdzie to się stało?', 1, '(brak)', 0),
(124, 'when did it happen?', 'kiedy to się stało?', 1, '(brak)', 0),
(125, 'falsely obtain', 'fałszywie uzyskać', 1, '(brak)', 0),
(126, 'former', 'były (np. prezydent)', 1, '(brak)', 0),
(127, 'discover', 'odkryć', 1, '(brak)', 0),
(128, 'currently', 'obecnie', 1, '(brak)', 0);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `Unit_3`
--

CREATE TABLE `Unit_3` (
  `id` int(10) NOT NULL,
  `v1` varchar(255) DEFAULT NULL,
  `v2` varchar(255) DEFAULT NULL,
  `weight` int(10) DEFAULT NULL,
  `zdanie` varchar(255) DEFAULT NULL,
  `flaga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `Unit_3`
--

INSERT INTO `Unit_3` (`id`, `v1`, `v2`, `weight`, `zdanie`, `flaga`) VALUES
(1, 'nominated for an award', 'nominowany do nagrody', 1, '(brak)', 0),
(2, 'you\'re going where?', 'wybierasz się gdzieś?', 1, '(brak)', 0),
(3, 'mention', 'wspomnieć', 1, '(brak)', 0),
(4, 'cope with', 'radzić sobie z', 1, '(brak)', 0),
(5, 'unless', 'chyba że', 1, '(brak)', 0),
(6, 'nosy', 'wścibski', 1, '(brak)', 0),
(7, 'noisy', 'hałaśliwy, głośny', 1, '(brak)', 0),
(8, 'flexible', 'elastyczny', 1, '(brak)', 0),
(9, 'freedom', 'wolność', 1, '(brak)', 0),
(10, 'beat', 'pokonać, bić, bębnić', 1, '(brak)', 0),
(11, 'follow your lead', 'podążać twoim śladem', 1, '(brak)', 0),
(12, 'object', 'sprzeciwiać się, obiekt', 1, '(brak)', 0),
(13, 'arrangements', 'plany, ustalenia', 1, '(brak)', 0),
(14, 'tend to', 'mieć skłonność do', 1, '(brak)', 0),
(15, 'what are you two doing?', 'co wy dwoje robicie?', 1, '(brak)', 0),
(16, 'change mind about', 'zmienić zdanie na temat', 1, '(brak)', 0),
(17, 'to be nosy', 'być wścibskim', 1, '(brak)', 0),
(18, 'panic', 'panika', 1, '(brak)', 0),
(19, 'last minute arrangements', 'plany, ustalenia w ostatniej chwili', 1, '(brak)', 0),
(20, 'if you can\'t beat them join them', 'jeśli nie możesz ich pokonać do nich dołączyć', 1, '(brak)', 0),
(21, 'related to', 'powiązany z', 1, '(brak)', 0),
(22, 'gossip', 'plotka', 1, '(brak)', 0),
(23, 'compliment', 'komplement', 1, '(brak)', 0),
(24, 'moan', 'narzekać, jęczeć', 1, '(brak)', 0),
(25, 'boast', 'chwalić się', 1, '(brak)', 0),
(26, 'argue', 'kłócić się', 1, '(brak)', 0),
(27, 'warn', 'ostrzegać', 1, '(brak)', 0),
(28, 'chat', 'pogawędzić', 1, '(brak)', 0),
(29, 'apologise', 'przepraszać', 1, '(brak)', 0),
(30, 'to water the plants', 'podlewać rośliny', 1, '(brak)', 0),
(31, 'talk to somebody', 'mówić do kogoś', 1, '(brak)', 0),
(32, 'maintain', 'utrzymanie', 1, '(brak)', 0),
(33, 'ink', 'atrament, tusz', 1, '(brak)', 0),
(34, 'fountain pen', 'wieczne pióro', 1, '(brak)', 0),
(35, 'store', 'przechować', 1, '(brak)', 0),
(36, 'handwriting', 'pismo ręczne', 1, '(brak)', 0),
(37, 'thumb', 'kciuk', 1, '(brak)', 0),
(38, 'thumbprint', 'odcisk kciuka', 1, '(brak)', 0),
(39, 'digital', 'cyfrowy', 1, '(brak)', 0),
(40, 'digital signature', 'podpis cyfrowy', 1, '(brak)', 0),
(41, 'on demand', 'na żądanie', 1, '(brak)', 0),
(42, 'in the long term', 'w dłuższej perspektywie', 1, '(brak)', 0),
(43, 'claim', 'stwierdzać', 1, '(brak)', 0),
(44, 'artificial', 'sztuczny', 1, '(brak)', 0),
(45, 'artificial intelligence', 'sztuczna inteligencja', 1, '(brak)', 0),
(46, 'development', 'rozwój', 1, '(brak)', 0),
(47, 'intermediate', 'pośredni', 1, '(brak)', 0),
(48, 'an intermediary', 'pośrednik', 1, '(brak)', 0),
(49, 'will stop barriers', 'bariery przestaną istnieć', 1, '(brak)', 0),
(50, 'retina', 'siatkówka oka', 1, '(brak)', 0),
(51, 'retina scan', 'skan siatkówki oka', 1, '(brak)', 0),
(52, 'the most straightforward way to do something', 'najprostszy sposób aby coś zrobić', 1, '(brak)', 0),
(53, 'method of delivery', 'sposób dostawy', 1, '(brak)', 0),
(54, 'in the near future', 'w najbliższej przyszłości', 1, '(brak)', 0),
(55, 'in the next ten years', 'w ciągu najbliższych dziesięciu lat', 1, '(brak)', 0),
(56, 'in a month or two', 'w ciągu miesiąca lub dwóch', 1, '(brak)', 0),
(57, 'in the short term', 'w krótkim terminie', 1, '(brak)', 0),
(58, 'in ten years\' time', 'w dziesięć lat', 1, '(brak)', 0),
(59, 'shortly', 'niedługo', 1, '(brak)', 0),
(60, 'predictions', 'przewidywania, przepowiednia, prognoza', 1, '(brak)', 0),
(61, 'certain', 'pewny', 1, '(brak)', 0),
(62, 'turning point', 'punkt zwrotny', 1, '(brak)', 0),
(63, 'possible', 'możliwy', 1, '(brak)', 0),
(64, 'work habits', 'uniform roboczy', 1, '(brak)', 0),
(65, 'small talk', 'pogawędka', 1, '(brak)', 0),
(66, 'against', 'przeciwko', 1, '(brak)', 0),
(67, 'work against the clock', '\"walczyć z czasem\" (idiom)', 1, '(brak)', 0),
(68, 'on our mind', 'w naszych myślach', 1, '(brak)', 0),
(69, 'it\'s not my cup of tea', '\"to nie w moim stylu\" (idiom)', 1, '(brak)', 0),
(70, 'close to my heart', 'bliższy memu sercu', 1, '(brak)', 0),
(71, 'be in hot water', '\"mieć kłopoty\" (idiom)', 1, '(brak)', 0),
(72, 'put my foot in it', '\"strzelić gafę\" (idiom)', 1, '(brak)', 0),
(73, 'running out of time', '\"kończy się czas\" (idiom)', 1, '(brak)', 0),
(74, 'keep an eye on', 'mieć na kogoś oko', 1, '(brak)', 0),
(75, 'give a hand', 'podać pomocną dłoń, pomóc', 1, '(brak)', 0),
(76, 'a piece of cake', '\"bułka z masłem\" (idiom)', 1, '(brak)', 0),
(77, 'dark horse', 'czarny koń', 1, '(brak)', 0),
(78, 'the rat race', 'wyścig szczurów', 1, '(brak)', 0),
(79, 'award', 'nagroda, wyróżnienie', 1, '(brak)', 0),
(80, 'celebrate', 'świętować, obchodzić', 1, '(brak)', 0),
(81, 'misunderstanding', 'nieporozumienie', 1, '(brak)', 0),
(82, 'confirm', 'potwierdzić', 1, '(brak)', 0),
(83, 'host', 'gospodarz', 1, '(brak)', 0),
(84, 'generous', 'hojny', 1, '(brak)', 0),
(85, 'recognise', 'rozpoznawać', 1, '(brak)', 0),
(86, 'generous', 'hojny, szczodry', 1, '(brak)', 0),
(87, 'at the table', 'przy stole', 1, '(brak)', 0),
(88, 'the thousand dollars', 'tysiąc dolarów', 1, '(brak)', 0),
(89, 'do you mean', 'masz na myśli', 1, '(brak)', 0),
(90, 'again', 'ponownie, znowu', 1, '(brak)', 0),
(91, 'I didn\'t catch any of that.', 'Nie załapałem nic z tego.', 1, '(brak)', 0),
(92, 'You\'ve lost me.', '\"Pogubiłeś się w tym co mówię\" {idiom używany podczas dialogu gdy ktoś przestał nadąrzać za tym co mówisz}', 1, 'Other words: You can\'t follow what i\'m saying?', 0),
(93, 'I\'ve lost you.', '\"Pogubiłem się w tym co mówisz\" {idiom używany podczas dialogu gdy przestałeś nadąrzać za tym co ktoś mówi}', 1, 'Other words:I can\'t follow what you\'re saying.', 0),
(94, 'Could you repeat that?', 'Mógłbyś to powtórzyć?', 1, '(brak)', 0),
(95, 'Can you say that again?', 'Czy możesz powiedzieć to poownie?', 1, '(brak)', 0),
(96, 'What exactly do you mean?', 'Co dokładnie masz na myśli?', 1, '(brak)', 0),
(97, 'I don\'t get what you\'re saying', 'Nie łapie co mówisz.', 1, '(brak)', 0),
(98, 'I mean...', 'To znaczy...', 1, '(brak)', 0),
(99, 'What does it mean?', 'Co to znaczy/oznacza?', 1, '(brak)', 0),
(100, 'Do you mean to tell me...?', 'Chcesz mi przez to powiedzieć...?', 1, '(brak)', 0),
(101, 'In other words...', 'Innymi słowy...', 1, '(brak)', 0),
(102, 'other', 'inny', 1, '(brak)', 0),
(103, 'break the ice', '\"przełamać lody\" (idiom)', 1, 'Everyone was nervous, so Jackie told a few jokes to break the ice.', 0),
(104, 'learn something by heart', '\"uczyć się na pamięć\" (idiom)', 1, 'Tomorrow there\'s a test on this poem. I have to learn it by heart.', 0),
(105, 'go window shopping', '\"iść na spacer z oglądaniem wystaw sklepowych {nie mieć w zamiarze niczego kupić} \" (idiom)', 1, 'I\'ve got no money at the moment but we can go window shopping if you want.', 0),
(106, 'travel light', '\"podróżować z niewielkim bagażem\" (idiom)', 1, 'He always travels light. He only takes one suitcase even for long trips.', 0),
(107, 'let your hair down', '\"pójść w tango\" (idiom)', 1, 'You\'ve been working non-stop. Why don\'t you go out and let your hair down?', 0),
(108, 'be in two minds', '\"wahać się\" (idiom)', 1, 'I\'m in two minds. I don\'t know if I want the black one or the red one.', 0),
(109, 'arrange', 'zorganizować', 1, '(brak)', 0);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `Unit_4`
--

CREATE TABLE `Unit_4` (
  `id` int(10) NOT NULL,
  `v1` varchar(255) DEFAULT NULL,
  `v2` varchar(255) DEFAULT NULL,
  `weight` int(10) DEFAULT NULL,
  `zdanie` varchar(255) DEFAULT NULL,
  `flaga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `Unit_4`
--

INSERT INTO `Unit_4` (`id`, `v1`, `v2`, `weight`, `zdanie`, `flaga`) VALUES
(1, 'entrepreneur', 'przedsiębiorca', 1, '(brak)', 0),
(2, 'effort', 'wysiłek', 1, '(brak)', 0),
(3, 'qualities', 'cechy', 1, '(brak)', 0),
(4, 'quality', 'jakość', 1, '(brak)', 0),
(5, 'manage', 'pokierować czymś, kimś', 1, '(brak)', 0),
(6, 'express', 'wyraźić, okazać', 1, '(brak)', 0),
(7, 'remember', 'przypominać sobie', 1, '(brak)', 0),
(8, 'remind', 'przypominać komuś', 1, '(brak)', 0),
(9, 'forget', 'zapomnieć', 1, '(brak)', 0),
(10, 'leave', 'zostawić', 1, '(brak)', 0),
(11, 'hear', 'słyszeć, usłyszeć', 1, '(brak)', 0),
(12, 'listen', 'słuchać, posłuchać', 1, '(brak)', 0),
(13, 'I wasn\'t listening.', 'Nie słuchałem.', 1, '(brak)', 0),
(14, 'I wasn\'t hearing.', 'Nie usłyszałem.', 1, '(brak)', 0),
(15, 'fun', 'zabawa, uciecha', 1, '(brak)', 0),
(16, 'funny', 'zabawny, śmieszny', 1, '(brak)', 0),
(17, 'borrow from', 'pożyczyć od', 1, '(brak)', 0),
(18, 'lend to', 'pożyczać komuś', 1, '(brak)', 0),
(19, 'miss', 'przegapić, tęskić', 1, '(brak)', 0),
(20, 'lose', 'stracić, przegrać', 1, '(brak)', 0),
(21, 'critic', 'krytyk', 1, '(brak)', 0),
(22, 'winemaker', 'winiarz (osoba robiąca wino)', 1, '(brak)', 0),
(23, 'paradise', 'raj', 1, '(brak)', 0),
(24, 'willing', 'skłonny, chętny', 1, '(brak)', 0),
(25, 'snorkel', 'nurkowanie z rurką', 1, '(brak)', 0),
(26, 'dive', 'nurkować głębinowo', 1, '(brak)', 0),
(27, 'duty', 'obowiązek, cło', 1, '(brak)', 0),
(28, 'diary', 'pamiętnik, dziennik', 1, '(brak)', 0),
(29, 'covering letter', 'list motywacyjny', 1, '(brak)', 0),
(30, 'apprentice', 'praktykant, uczeń', 1, '(brak)', 0),
(31, 'compete', 'rywalizować, konkurować', 1, '(brak)', 0),
(32, 'compete for a job', 'konkurować o pracę', 1, '(brak)', 0),
(33, 'hell', 'piekło', 1, '(brak)', 0),
(34, 'bloody hell', 'jasna cholera (można używać zamiennie z k... mać ;)', 1, '(brak)', 0),
(35, 'get fired', 'zostać zwolnionym', 1, '(brak)', 0),
(36, 'empire', 'imperium', 1, '(brak)', 0),
(37, 'kingdom', 'królestwo', 1, '(brak)', 0),
(38, 'review', 'recenzja', 1, '(brak)', 0),
(39, 'survey', 'badanie, przegląd', 1, '(brak)', 0),
(40, 'contest = competition', 'konkurs', 1, '(brak)', 0),
(41, 'be not easy to please', 'być trudnym do zadowolenia', 1, '(brak)', 0),
(42, 'either', 'albo', 1, '(brak)', 0),
(43, 'from my point of view', 'z mojego punktu widzenia', 1, '(brak)', 0),
(44, 'Have you got what it takes?', 'Czy masz to czego potrzeba?', 1, 'Have you got what it takes to be a millionaire?', 0),
(45, 'moderately', 'umiarkowanie', 1, '(brak)', 0),
(46, 'spender', '\"rozrzutnik pieniędzy\"', 1, '(brak)', 0),
(47, 'effort', 'wysiłek', 1, '(brak)', 0),
(48, 'competitive', 'konkurencyjny', 1, '(brak)', 0),
(49, 'indecisive', 'niezdecydowany', 1, '(brak)', 0),
(50, 'decided', 'zdecydowany', 1, '(brak)', 0),
(51, 'think outside the box', 'myśleć poza schematem', 1, '(brak)', 0),
(52, 'risk', 'ryzyko', 1, '(brak)', 0),
(53, 'motivate', 'motywować', 1, '(brak)', 0),
(54, 'work with a lot of effort', 'pracować w dużym wysiłku', 1, '(brak)', 0),
(55, 'have problems making decision', 'mieć problemy w podejmowaniu decyzji', 1, '(brak)', 0),
(56, 'think differently or in a new way', 'myśleć inaczej lub w nowy sposób', 1, '(brak)', 0),
(57, 'want to be more successful than others', 'chcieć być bardziej skutecznym niż inni', 1, '(brak)', 0),
(58, 'want to achieve something', 'chcieć coś osiągnąć', 1, '(brak)', 0),
(59, 'a risk taker', 'osoba podejmująca ryzyko', 1, '(brak)', 0),
(60, 'to be rejected', 'być odrzuconym', 1, '(brak)', 0),
(61, 'reject', 'odrzucać', 1, '(brak)', 0),
(62, 'miserable', 'beznadziejny', 1, '(brak)', 0),
(63, 'in stock', 'w magazynie, na stanie', 1, '(brak)', 0),
(64, 'particular', 'konkretny, szczególny', 1, '(brak)', 0),
(65, 'put on a lot of weight', 'przybrać dużo na wadze', 1, '(brak)', 0),
(66, 'wonderful', 'wspaniały, cudowny', 1, '(brak)', 0),
(67, 'brilliant', 'znakomity', 1, '(brak)', 0),
(68, 'awful', 'okropny', 1, '(brak)', 0),
(69, 'enormous', 'ogromny', 1, '(brak)', 0),
(70, 'exhaust', 'wyczerpać, wydechowy', 1, '(brak)', 0),
(71, 'boiling', 'wrzenie', 1, '(brak)', 0),
(72, 'freezing', 'lodowaty', 1, '(brak)', 0),
(73, 'delicious', 'pyszne', 1, '(brak)', 0),
(74, 'furious', 'wściekły', 1, '(brak)', 0),
(75, 'impossible', 'niemożliwe', 1, '(brak)', 0),
(76, 'crew', 'załoga, ekipa', 1, '(brak)', 0),
(77, 'blast off', 'wystrzelić, odpalić', 1, 'Blast off into space.', 0),
(78, 'a jar', 'słoik', 1, '(brak)', 0),
(79, 'regarding', 'w sprawie', 1, '(brak)', 0),
(80, 'I am writing to you regarding your advertisement for... with i saw on...', 'Piszę do Ciebie w sprawie Twojego ogłoszenia dla... które widziałem na...', 1, '(brak)', 0),
(81, 'I would like to submit an application for the post.', 'Chciałbym złożyć wniosek do urzędu.', 1, '(brak)', 0),
(82, 'submit', 'zgłaszać', 1, '(brak)', 0),
(83, 'Please find my CV attached.', 'Proszę znaleźć moje CV w załączeniu.', 1, '(brak)', 0),
(84, 'I believe that I meet all the requirements you outline in your advertisement.', 'Wieżę, że spełniam wszystkie wymagania które zaznaczyliście w ogłoszeniu.', 1, '(brak)', 0),
(85, 'advertisement', 'reklama, ogłoszenie', 1, '(brak)', 0),
(86, 'requirements', 'wymagania', 1, '(brak)', 0),
(87, 'outline', 'zarys, kontur, szkic', 1, '(brak)', 0),
(88, 'I had hands-on experience of...', 'Mam praktyczne doświadczenie w...', 1, '(brak)', 0),
(89, 'experience', 'doświadczenie', 1, '(brak)', 0),
(90, 'prove', 'udowodnić', 1, '(brak)', 0),
(91, 'proven ability in...', 'Sprawdzona zdolność w...', 1, '(brak)', 0),
(92, 'ability', 'zdolność', 1, '(brak)', 0),
(93, 'require', 'wymagać', 1, '(brak)', 0),
(94, 'If you require any further information, or would like to arrange an interview, please call me on...', 'Jeśli potrzebujesz dodatkowych informacji, lub chcesz umówić się na spotkanie, proszę zadzwonić do mnie na ...', 1, '(brak)', 0),
(95, 'I look forward to hearing from you at your earliest convenience.', 'Czekam na kontakt z Państwem jak najszybciej.', 1, '(brak)', 0),
(96, 'how earliest convenience', 'jak najszybciej', 1, '(brak)', 0),
(97, 'caretaker', 'dozorca, stróż', 1, '(brak)', 0),
(98, 'protector', 'opiekun', 1, '(brak)', 0),
(99, 'Yours sincerely', 'Z poważaniem', 1, '(brak)', 0),
(100, 'interview', 'rozmowa kwalifikacyjna, wywiad', 1, '(brak)', 0),
(101, 'appointment, meeting', 'spotkanie', 1, '(brak)', 0),
(102, 'fired', 'zwolniony', 1, '(brak)', 0),
(103, 'Set up a catering company', 'Założyć firmę cateringową', 1, '(brak)', 0),
(104, 'mediterranean', 'śródziemnomorski', 1, '(brak)', 0),
(105, 'reaching agreement', 'osiągnięcie porozumienia', 1, '(brak)', 0),
(106, 'What about...?', 'Co powiesz na...?', 1, '(brak)', 0),
(107, 'I suggest we focus on...', 'Proponuję skupić się na...', 1, '(brak)', 0),
(108, 'currently', 'aktualnie, obecnie, bieżąco', 1, '(brak)', 0),
(109, 'actually', 'faktycznie, rzeczywiście', 1, '(brak)', 0),
(110, 'career', 'kariera', 1, '(brak)', 0),
(111, 'course', 'kurs, przebieg,', 1, '(brak)', 0),
(112, 'direction', 'kierunek', 1, '(brak)', 0),
(113, 'argument', 'spór, argument', 1, '(brak)', 0),
(114, 'discussion', 'dyskusja', 1, '(brak)', 0),
(115, 'reliable', 'niezawodny', 1, '(brak)', 0),
(116, 'sensible', 'rozsądny, sensowny', 1, '(brak)', 0),
(117, 'easy-going', '\"luzak\"', 1, '(brak)', 0),
(118, 'aggressive', 'agresywny, napastliwy', 1, '(brak)', 0),
(119, 'clever', 'sprytny', 1, '(brak)', 0),
(120, 'bright', 'jasny, bystry', 1, '(brak)', 0),
(121, 'honest', 'uczciwy, szczery', 1, '(brak)', 0),
(122, 'lazy', 'leniwy', 1, '(brak)', 0),
(123, 'punctual', 'punktualny', 1, '(brak)', 0),
(124, 'moody', 'humorzasty, nastrojowy', 1, '(brak)', 0),
(125, 'independent', 'niezależny', 1, '(brak)', 0),
(126, 'I\'m impressed', 'Jestem pod wrażeniem', 1, '(brak)', 0);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `Unit_5`
--

CREATE TABLE `Unit_5` (
  `id` int(10) NOT NULL,
  `v1` varchar(255) DEFAULT NULL,
  `v2` varchar(255) DEFAULT NULL,
  `weight` int(10) DEFAULT NULL,
  `zdanie` varchar(255) DEFAULT NULL,
  `flaga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `Unit_5`
--

INSERT INTO `Unit_5` (`id`, `v1`, `v2`, `weight`, `zdanie`, `flaga`) VALUES
(1, 'machine', 'maszyna', 1, '(brak)', 0),
(2, 'electricity', 'elektryczność', 1, '(brak)', 0),
(3, 'nuclear power', 'energia nulkearna', 1, '(brak)', 0),
(4, 'antibiotics', 'antybiotyki', 1, '(brak)', 0),
(5, 'vaccinations', 'szczepienia', 1, '(brak)', 0),
(6, 'computer networks', 'sieci komputerowe', 1, '(brak)', 0),
(7, 'motorbikes', 'motocykle', 1, '(brak)', 0),
(8, 'genetic engineering', 'inżynieria genetyczna', 1, '(brak)', 0),
(9, 'washing machine', 'pralka', 1, '(brak)', 0),
(10, 'vacuum cleaner', 'odkurzacz', 1, '(brak)', 0),
(11, 'space travel', 'podróż kosmiczna', 1, '(brak)', 0),
(12, 'commercial aeroplanes', 'samoloty komercyjne', 1, '(brak)', 0),
(13, 'solar power', 'energia słoneczna', 1, '(brak)', 0),
(14, 'communications satellites', 'satelity telekomunikacyjne', 1, '(brak)', 0),
(15, 'plug it in', 'włączać to do kontaktu (do prądu)', 1, '(brak)', 0),
(16, 'press the button', 'nacisnąć przycisk', 1, '(brak)', 0),
(17, 'have an injection', 'mieć zastrzyk', 1, '(brak)', 0),
(18, 'have an operation', 'mieć operację', 1, '(brak)', 0),
(19, 'run out of petrol', 'zabraknąć benzyny', 1, '(brak)', 0),
(20, 'break down', 'zepsuć się', 1, '(brak)', 0),
(21, 'get a connection', 'uzyskać połączenie', 1, '(brak)', 0),
(22, 'restart / reboot the computer', 'zresrartować komputer', 1, '(brak)', 0),
(23, 'do an experiment', 'robić eksperyment', 1, '(brak)', 0),
(24, 'switch it on / switch it off', 'włączyć to / wyłączyć to', 1, 'switch the light on - włącz światłoswitch the light off - wyłącz światło', 0),
(25, 'influential', 'wpływowy', 1, '(brak)', 0),
(26, 'advance, progress', 'postęp', 1, '(brak)', 0),
(27, 'at the beginning of the twentieth century', 'na początku 20 wieku', 1, '(brak)', 0),
(28, 'affordable', 'niedrogi, przystępny cenowo', 1, '(brak)', 0),
(29, 'shrink', 'kurczyć się', 1, '(brak)', 0),
(30, 'for the first time in history,', 'po raz pierwszy w historii', 1, '(brak)', 0),
(31, 'somewhere', 'gdzieś', 1, '(brak)', 0),
(32, 'anywhere', 'gdziekolwiek', 1, '(brak)', 0),
(33, 'introduce', 'wprowadzać', 1, '(brak)', 0),
(34, 'fabric', 'materiał, tkanina', 1, '(brak)', 0),
(35, 'nylon', 'nylon, nylonowy', 1, '(brak)', 0),
(36, 'allow', 'pozwolić komuś na coś', 1, '(brak)', 0),
(37, 'travel further away from home', 'podróżować dalej od domu', 1, '(brak)', 0),
(38, 'amplifier', 'wzmacniacz', 1, '(brak)', 0),
(39, 'rock music', 'muzyka rockowa', 1, '(brak)', 0),
(40, 'electric guitar', 'gitara elektryczna', 1, '(brak)', 0),
(41, 'a lot / much / far more', 'gdy chcemy powiedzieć, że coś jest dużo bardziej lub znacznie bardziej \"jakieś\" (np. piękniejsze, bardziej słoneczne)', 1, 'I\'m a lot fatter than Sue.Kate is much more beautiful than Mary.The journey took far more longer than we expected.', 0),
(42, 'a little / a little bit / slighty', 'trochę, troszeczkę - gdy chcemy powiedzieć, że coś jest tylko trochę bardziej \"jakieś\" (np. piękniejsze, bardziej słoneczne)', 1, 'She is a little older than he.My car is a little bit more comfortable than yours.', 0),
(43, 'by far', 'jak dotąd', 1, 'by far + st. najwyższy przymiotnikaIt\'s by far the best pizza I have ever eaten.', 0),
(44, 'one of', 'jeden z', 1, 'one of + st. najwyższy przymiotnika + rzeczownikIt\'s one of the tallest mountains I have ever climbed.', 0),
(45, 'advantage', 'zaleta', 1, '(brak)', 0),
(46, 'disadvantage', 'wada', 1, '(brak)', 0),
(47, 'however,', 'jednak', 1, '(brak)', 0),
(48, 'one of the main advantages', 'jedną z głównych zalet', 1, '(brak)', 0),
(49, 'in addition to this,', 'w dodatku do tego, oprócz tego', 1, '(brak)', 0),
(50, 'on the other hand,', 'z drugiej strony, z innej strony', 1, '(brak)', 0),
(51, 'another disadvantage', 'inną wadą, kolejną wadą', 1, 'another disadvantage of modern technology is...', 0),
(52, 'in my opinion', 'moim zdaniem', 1, '(brak)', 0),
(53, 'the problem is that', 'problemem jest to, że', 1, '(brak)', 0),
(54, 'benefit', 'korzyść, pożytek', 1, '(brak)', 0),
(55, 'harmful', 'szkodliwy', 1, '(brak)', 0),
(56, 'conclusion', 'wniosek', 1, '(brak)', 0),
(57, 'introduction', 'wstęp', 1, '(brak)', 0),
(58, 'the most important advantage is', 'najważniejszą zaletą jest', 1, '(brak)', 0),
(59, 'the main disadvantage is', 'główną wadą jest', 1, '(brak)', 0),
(60, 'although,', 'chociaż, aczkolwiek', 1, '(brak)', 0),
(61, 'as well as that,', 'oprócz tego', 1, '(brak)', 0),
(62, 'and another thing,', 'i kolejną rzeczą...', 1, '(brak)', 0),
(63, 'In general,', 'ogólnie rzecz biorąc (generalnie)', 1, '(brak)', 0),
(64, 'as far as I\'m concerned', 'o ile mi wiadomo, jeśli o mnie chodzi to jestem przekonany', 1, '(brak)', 0),
(65, 'tidal wave', 'pływowa fala', 1, '(brak)', 0),
(66, 'nightmare', 'koszmar', 1, '(brak)', 0),
(67, 'wrestler', 'zapaśnik', 1, '(brak)', 0),
(68, 'wasp', 'osa', 1, '(brak)', 0),
(69, 'prove', 'udowodnić', 1, '(brak)', 0),
(70, 'exactly the same as', 'dokładnie tak samo jak', 1, '(brak)', 0),
(71, 'very similar to', 'bardzo podobny do', 1, '(brak)', 0),
(72, 'he\'s not as tall as...', 'on nie jest tak wysoki jak...', 1, '(brak)', 0),
(73, 'question', 'pytanie; kwestionować', 1, '(brak)', 0),
(74, 'wonder', 'cud; zastanawiać się', 1, '(brak)', 0),
(75, 'discuss', 'dyskutować', 1, '(brak)', 0),
(76, 'debate', 'debata; debatować', 1, '(brak)', 0),
(77, 'responde, reply', 'odpowiadać (np. na list)', 1, '(brak)', 0),
(78, 'answer, reply, response', 'odpowiedź', 1, '(brak)', 0),
(79, 'research', 'badania; prowadzić prace badawcze', 1, '(brak)', 0),
(80, 'investigate', 'prowadzić dochodzenie', 1, '(brak)', 0),
(81, 'inquire, ask', 'zapytać', 1, '(brak)', 0),
(82, 'look into', 'przyjrzeć się czemuś', 1, '(brak)', 0),
(83, 'thesis', 'praca dyplomowa', 1, '(brak)', 0),
(84, 'death penalty', 'kara śmierci', 1, '(brak)', 0),
(85, 'round windows', 'okrągłe okna', 1, '(brak)', 0),
(86, 'inquiry', 'zapytanie', 1, '(brak)', 0),
(87, 'we ran out of coffee', 'skończyła nam się kawa', 1, '(brak)', 0),
(88, 'jellyfish', 'meduza', 1, '(brak)', 0),
(89, 'doughnut', 'pączek', 1, '(brak)', 0),
(90, 'break up', 'rozpaść się', 1, '(brak)', 0),
(91, 'over a volcano', 'nad wulkanem', 1, '(brak)', 0),
(92, 'number of hairs on a head', 'liczba włosów na głowie', 1, '(brak)', 0),
(93, 'mess / messy', 'bałagan / bałaganiarski', 1, '(brak)', 0),
(94, 'hair / hairy', 'włosy / owłosiony', 1, '(brak)', 0),
(95, 'redponse / responsible', 'odpowiedź / odpowiedzialny', 1, '(brak)', 0),
(96, 'love / lovable', 'miłość / kochaniutki, miły', 1, '(brak)', 0),
(97, 'profit / profitable', 'zysk / zyskowny, dochodowy', 1, '(brak)', 0),
(98, 'thank / thankful', 'dziękować / wdzięczny', 1, '(brak)', 0),
(99, 'pain / painful', 'ból / bolesny', 1, '(brak)', 0),
(100, 'peace / peaceful', 'pokój (spokój) / pokojowy (spokojny)', 1, '(brak)', 0),
(101, 'explosion / explosive', 'wybuch, eksplozja / wybuchowy', 1, '(brak)', 0),
(102, 'creativity / creative', 'kreatywność / kreatywny', 1, '(brak)', 0),
(103, 'effect / effective', 'skutek (efekt) / skuteczny', 1, '(brak)', 0),
(104, 'use / useless / useful', 'użytek / bezużyteczny / użyteczny', 1, '(brak)', 0),
(105, 'home / homeless', 'dom / bezdomny', 1, '(brak)', 0),
(106, 'hope / hopeless', 'nadzieja / beznadziejny', 1, '(brak)', 0),
(107, 'biology / biological', 'biologia / biologiczny', 1, '(brak)', 0),
(108, 'poet / poetic', 'poeta / poetycki', 1, '(brak)', 0),
(109, 'value / valuable', 'wartość / wartościowy', 1, '(brak)', 0),
(110, 'ease / easy', 'łatwość / łatwy', 1, '(brak)', 0),
(111, 'even', 'nawet', 1, '(brak)', 0),
(112, 'educate / education', 'kształcić / edukacja', 1, '(brak)', 0),
(113, 'relax / relaxation', 'relaksować się / relaks', 1, '(brak)', 0),
(114, 'imagine / imagination', 'wyobrazić / wyobraźnia', 1, '(brak)', 0),
(115, 'immigrate / immigration', 'imigrować / imigracja', 1, '(brak)', 0),
(116, 'pollute / pollution', 'zanieczyścić / zanieczyszczenie', 1, '(brak)', 0),
(117, 'instruct / instruction', 'instruować / instrukcja', 1, '(brak)', 0),
(118, 'depress / depression', 'deprymować, przygnębiać / depresja', 1, '(brak)', 0),
(119, 'compete / competition', 'rywalizować / konkurs', 1, '(brak)', 0),
(120, 'entertiain / entertainment', 'zabawiać / rozrywka', 1, '(brak)', 0),
(121, 'improve / improvement', 'poprawiać, ulepszać / poprawa, ulepszenie', 1, '(brak)', 0),
(122, 'employ / employment', 'zatrudniać / zatrudnienie', 1, '(brak)', 0),
(123, 'agree / agreement', 'zgodzić się / umowa', 1, '(brak)', 0),
(124, 'run / running', 'biegać / bieganie', 1, '(brak)', 0),
(125, 'smoke / smoking', 'palić / palenie (papierosy)', 1, '(brak)', 0),
(126, 'laugh / laughing', 'śmiać się / roześmiany', 1, '(brak)', 0),
(127, 'eat / eating', 'jeść / zjadanie', 1, '(brak)', 0),
(128, 'weak / weakness', 'słaby / słabość', 1, '(brak)', 0),
(129, 'lonely / loneliness', 'samotny / samotność', 1, '(brak)', 0),
(130, 'happy / happiness', 'szczęśliwy / szczęście', 1, '(brak)', 0),
(131, 'kind / kindness', 'uprzejmy / uprzejmość', 1, '(brak)', 0),
(132, 'stupid / stupidity', 'głupi / głupota', 1, '(brak)', 0),
(133, 'sensitive / sensitivity', 'wrażliwy / wrażliwość', 1, '(brak)', 0),
(134, 'responsible / responsibility', 'odpowiedzialny / odpowiedzialność', 1, '(brak)', 0),
(135, 'it\'s broken down', 'to się zepsuło', 1, '(brak)', 0),
(136, 'it needs recharging', 'to potrzebuje ponownego załadowania', 1, '(brak)', 0),
(137, 'it\'s out of order', 'to nie jest w porządku', 1, '(brak)', 0),
(138, 'it needs fixing', 'trzeba to naprawić, to potrzebuje naprawy', 1, '(brak)', 0),
(139, 'there is no reception', 'nie ma zasięgu', 1, '(brak)', 0),
(140, 'try switching it off', 'spróbuj wyłączenia tego', 1, '(brak)', 0),
(141, 'it keeps making this strange noise', 'to wydaje dziwny dźwięk', 1, '(brak)', 0),
(142, 'it\'s crashed', 'to jest rozbite (po wypadku)', 1, '(brak)', 0),
(143, 'it\'s frozen', 'zawiesił się', 1, '(brak)', 0),
(144, 'it doesn\'t work', 'to nie działa', 1, '(brak)', 0),
(145, 'we have to sort it out', 'musimy to rozwiązać', 1, '(brak)', 0),
(146, 'save it onto a memory stick', 'zapisać to na pamięci (np. pendrive)', 1, '(brak)', 0),
(147, 'shall I print it for you?', 'czy wydrukować to dla ciebie?', 1, '(brak)', 0),
(148, 'try to solve the problem', 'próbować rozwiązać problem', 1, '(brak)', 0),
(149, 'shout at colleagues', 'krzyczeć na kolegów', 1, '(brak)', 0),
(150, 'hit the PC', 'uderzać w komputer', 1, '(brak)', 0),
(151, 'throw parts of the computer', 'rzucać częściami komputerowymi', 1, '(brak)', 0),
(152, 'frustration', 'frustracja', 1, '(brak)', 0),
(153, 'anger', 'złość, gniew', 1, '(brak)', 0),
(154, 'could you hold the line, please?', 'mógłbyś poczekać na lini, proszę?', 1, '(brak)', 0),
(155, 'coulg you give me a refund?', 'mógłbyś mi zwrócić pieniądze', 1, '(brak)', 0),
(156, 'could you tell me who I should speak to?', 'mógłbyś mi powiedzieć z kim powinienem rozmawiać?', 1, '(brak)', 0),
(157, 'could you tell me what the problem is?', 'mógłbyś mi powiedzieć jaki jest problem?', 1, '(brak)', 0),
(158, 'do you know what the problem is?', 'wiesz w czym problem?', 1, '(brak)', 0),
(159, 'would you mind booking us a table?', 'czy miałbyś coś przeciwko żebyś zarezerwował nam stolik?', 1, '(brak)', 0),
(160, 'would you mind coming a little bit earlier?', 'czy miałbyś coś przeciwko żebyś przyszedł trochę wcześniej?', 1, '(brak)', 0),
(161, 'could you tell me what time it is?', 'mógłbyś mi powiedzieć która jest godzina?', 1, '(brak)', 0),
(162, 'do you know how to get there?', 'czy wiesz jak się tam dostać?', 1, '(brak)', 0),
(163, 'do you know what time the shops open?', 'czy wiesz o której otwierają sklepy?', 1, '(brak)', 0);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `Unit_6`
--

CREATE TABLE `Unit_6` (
  `id` int(10) NOT NULL,
  `v1` varchar(255) DEFAULT NULL,
  `v2` varchar(255) DEFAULT NULL,
  `weight` int(10) DEFAULT NULL,
  `zdanie` varchar(255) DEFAULT NULL,
  `flaga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `Unit_6`
--

INSERT INTO `Unit_6` (`id`, `v1`, `v2`, `weight`, `zdanie`, `flaga`) VALUES
(1, 'fear', 'strach', 1, '(brak)', 0),
(2, 'anger', 'złość', 1, '(brak)', 0),
(3, 'distress', 'ból, cierpienie', 1, '(brak)', 0),
(4, 'joy', 'radość', 1, '(brak)', 0),
(5, 'surprise', 'niespodzianka, zaskoczenie', 1, '(brak)', 0),
(6, 'disgust', 'obrzydzenie', 1, '(brak)', 0),
(7, 'annoy / annoyed / annoying', 'irytować / zirytowany / irytujący', 1, '(brak)', 0),
(8, 'relaxed / relaxing', 'zrelaksowany / relaksujący', 1, '(brak)', 0),
(9, 'bored / boring', 'znudzony / nudny', 1, '(brak)', 0),
(10, 'frightened / frightening', 'przerażony / przerażający', 1, '(brak)', 0),
(11, 'worried / worrying', 'zmartwiony / niepokojący', 1, '(brak)', 0),
(12, 'embarrassed / embarrassing', 'zakłopotany, zażenowany / żenujący', 1, '(brak)', 0),
(13, 'exhausted / exhausting', 'wyczerpany / wyczerpujący', 1, '(brak)', 0),
(14, 'confused / confusing', 'zmieszany / mylący', 1, '(brak)', 0),
(15, 'shocked / shocking', 'zszokowany / szokujący', 1, '(brak)', 0),
(16, 'satisfied / satisfying', 'zadowolony / satysfakcjonujący', 1, '(brak)', 0),
(17, 'do you find your job satisfying?', 'czy uważasz swoją pracę za satysfakcjonującą?', 1, '(brak)', 0),
(18, 'cause = prompt', 'powodować', 1, '(brak)', 0),
(19, 'induce = evoke', 'wywołać', 1, '(brak)', 0),
(20, 'rotten', 'zepsute (o jedzeniu)', 1, '(brak)', 0),
(21, 'excited / exciting', 'podekscytowany / ekscytujący', 1, '(brak)', 0),
(22, 'terrified / terrifing', 'przerażony / przerażający', 1, '(brak)', 0),
(23, 'astonished / astonishing', 'zdumiony / zdumiewający', 1, '(brak)', 0),
(24, 'tiring / tired', 'męczący / zmęczony', 1, '(brak)', 0),
(25, 'laughter therapy', 'terapia śmiechu', 1, '(brak)', 0),
(26, 'click on', 'kliknąć', 1, '(brak)', 0),
(27, 'try on', 'przymierzyć', 1, '(brak)', 0),
(28, 'get on', 'dogadywać się z kimś', 1, '(brak)', 0),
(29, 'go off', 'zerwać znajomość', 1, '(brak)', 0),
(30, 'take off', 'zdjąć', 1, '(brak)', 0),
(31, 'log off', 'wylogować się', 1, '(brak)', 0),
(32, 'chat sb up', 'zagadać do kogoś', 1, '(brak)', 0),
(33, 'scroll up', 'przewijać', 1, '(brak)', 0),
(34, 'dress down', 'ubrać się nieodpowiednio', 1, '(brak)', 0),
(35, 'calm life', 'spokojne życie', 1, '(brak)', 0),
(36, 'settle down', 'ustatkować się', 1, '(brak)', 0),
(37, 'shut down', 'wyłączyć', 1, '(brak)', 0),
(38, 'cut off', 'odciąć, uciąć', 1, '(brak)', 0),
(39, 'call off', 'odwołać', 1, '(brak)', 0),
(40, 'put off', 'odkładać, odwlekać, przełożyć', 1, '(brak)', 0),
(41, 'check out', 'sprawdzić (także wymeldować)', 1, '(brak)', 0),
(42, 'stand out', 'wyróżniać się', 1, '(brak)', 0),
(43, 'work out', 'wymyślić, rozpracować, rozgryźć', 1, '(brak)', 0),
(44, 'look after', 'opiekować, zadbać, pilnować', 1, '(brak)', 0),
(45, 'take after', 'przypominać, być podobnym', 1, '(brak)', 0),
(46, 'fill in', 'wypełnić, uzupełnić', 1, '(brak)', 0),
(47, 'let ... in', 'wpuścić, wpuszczać', 1, '(brak)', 0),
(48, 'persuade', 'przekonać, namówić', 1, '(brak)', 0),
(49, 'dress up', 'wystroić', 1, '(brak)', 0),
(50, 'raise money', 'kwestować, zbierać pieniądze', 1, '(brak)', 0),
(51, 'hold a sale', 'robić wyprzedaż', 1, '(brak)', 0),
(52, 'do experiments', 'robić eksperymenty', 1, '(brak)', 0),
(53, 'get a seat / take a seat', 'usiąść', 1, '(brak)', 0),
(54, 'jump a queue', 'wpychać się w kolejkę', 1, '(brak)', 0),
(55, 'cut hair', 'obcinać włosy', 1, '(brak)', 0),
(56, 'watch a programme', 'oglądać program', 1, '(brak)', 0),
(57, 'obtain', 'uzyskać', 1, '(brak)', 0),
(58, 'involve', 'angażować', 1, '(brak)', 0),
(59, 'think creatively', 'myśleć kreatywnie', 1, '(brak)', 0),
(60, 'get someone to do you a favour', 'sprawić by ktoś wyświadczył ci przysługę', 1, '(brak)', 0),
(61, 'bargain', 'okazja, promocja', 1, '(brak)', 0),
(62, 'instead', 'natomiast, za to, w zamian', 1, '(brak)', 0),
(63, 'ask for a favour', 'poprosić o przysługę', 1, '(brak)', 0),
(64, 'pass yours exams', 'zdać twoje egzaminy', 1, '(brak)', 0),
(65, 'get a place at university', 'dostać się na uniwersytet', 1, '(brak)', 0),
(66, 'get engaged /get married', 'zaręczyć się / pobrać się', 1, '(brak)', 0),
(67, 'lose your job, money', 'stracić pracę, pieniądze', 1, '(brak)', 0),
(68, 'fail a test', 'oblać test', 1, '(brak)', 0),
(69, 'win a competition, match', 'wygrać zawody, mecz', 1, '(brak)', 0),
(70, 'get promoted', 'awansować, dostać awans', 1, '(brak)', 0),
(71, 'get a degree', 'uzyskać tytuł naukowy', 1, '(brak)', 0),
(72, 'give a reason', 'podać powód', 1, '(brak)', 0),
(73, 'tone of voice', 'ton głosu', 1, '(brak)', 0),
(74, 'prepare your listener', 'przygotuj swojego słuchacza', 1, '(brak)', 0),
(75, 'making people too upset', 'zbytnie martwienie ludzi', 1, '(brak)', 0),
(76, 'give someone good / bad news', 'przekazać komuś dobrą / złą wiadomość', 1, '(brak)', 0),
(77, 'arrangement', 'układ, porozumienie', 1, '(brak)', 0),
(78, 'I\'ve got some good news for you.', 'mam dobrą wiadomość dla ciebie', 1, '(brak)', 0),
(79, 'I\'m really pleased to tell you...', 'Jestem naprawdę zadowolony żeby ci powiedzieć...', 1, '(brak)', 0),
(80, 'Bad news, I\'m afraid.', 'Złe wieści, obawiam się.', 1, NULL, 0),
(81, 'I\'m sorry to have to tell you, but', 'Przykro mi, że muszę ci powiedzieć, ale', 1, '(brak)', 0),
(82, 'I\'m afraid I\'ve got some bad news', 'Obawiam się, że mam złą wiadomość', 1, '(brak)', 0),
(83, 'There\'s something I\'ve got to tell you', 'Jest coś co mam ci do powiedzenia', 1, '(brak)', 0),
(84, 'We\'ve got something to tell you', 'Mamy ci coś do powiedzenia', 1, '(brak)', 0),
(85, 'Congratulations!', 'Gratulacje!', 1, '(brak)', 0),
(86, 'That\'s a shame.', 'Jaka szkoda.', 1, '(brak)', 0),
(87, 'You\'re joking?', 'Żartujesz?', 1, '(brak)', 0),
(88, 'You lucky thing.', 'Ty szczęściarzu.', 1, '(brak)', 0),
(89, 'That\'s terrible', 'To okropne', 1, '(brak)', 0),
(90, 'Well done!', 'Dobra robota!', 1, '(brak)', 0),
(91, 'I\'m so pleased for you.', 'Jestem z ciebie bardzo zadowolony.', 1, '(brak)', 0),
(92, 'I\'m really sorry to hear that.', 'Naprawdę przyro mi to słyszeć.', 1, '(brak)', 0),
(93, 'That\'s really annoying.', 'To jest naprawdę denerwujące.', 1, '(brak)', 0),
(94, 'exaggerate', 'wyolbrzymiać', 1, '(brak)', 0);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `Unit_8`
--

CREATE TABLE `Unit_8` (
  `id` int(10) NOT NULL,
  `v1` varchar(255) DEFAULT NULL,
  `v2` varchar(255) DEFAULT NULL,
  `weight` int(10) DEFAULT NULL,
  `zdanie` varchar(255) DEFAULT NULL,
  `flaga` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `Unit_8`
--

INSERT INTO `Unit_8` (`id`, `v1`, `v2`, `weight`, `zdanie`, `flaga`) VALUES
(1, 'get on well with', 'dobrze dogadywać się z sb', 1, 'I get on well with my neighbour', 0),
(2, 'mind my own business', 'zajmować się własnymi sprawami', 1, 'I prefer to mind my own business so I don\'t ask the neighbours personal question.', 0),
(3, 'over for coffee', 'na kawę', 1, 'I sometimes invite my neighbour over for coffee', 0),
(4, 'nuisance', 'uciążliwy', 1, 'My neighbour\'s dog is a nuisance - he\'s always barking early in the morning (zawsze szczeka wcześnie rano)', 0),
(5, 'get to know', 'poznać', 1, 'We didn\'t get to know our neighbours for years.', 0),
(6, 'disturb', 'przeszkadzać, zaburzać, niepokoić', 1, 'My neighbour has pets but they never disturb me', 0),
(7, 'get on my nerves', 'działają mi na nerwy', 1, 'My neighbours get on my nerves - he\'s always complaining', 0),
(8, 'we made friends', 'staliśmy się przyjaciółmi', 1, 'We made friends with our neighbours immediately. (natychmiast)', 0),
(9, 'I like to keep myself to myself', 'lubię być sobą', 1, 'I like to keep myself to myself so my neighbours hasn\'t been in my house. (kiedy moich sąsiadów nie ma w domu)', 0),
(10, 'be quite noisy', 'być dość hałaśliwym', 1, 'I can be quite noisy so I often ask my neighbors about their lives.', 0),
(11, 'put your feet up', 'możesz odpocząć, wyciągnąć nogi', 1, 'You can sit on this chair.', 0),
(12, 'make yourself at home', 'możesz poczuć się jak u siebie w domu', 1, 'Please you can make oneself at your home.', 0),
(13, 'be my guest', 'poczuj się moim gościem', 1, 'I can expose you permission to use it.', 0),
(14, 'have a seat', 'możesz usiąść', 1, 'Let is just sit down and relax.', 0),
(15, 'help yourself', 'częstuj się', 1, 'I will prepare something to food if you want.', 0);

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `fiszki`
--
ALTER TABLE `fiszki`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `info_table`
--
ALTER TABLE `info_table`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `Media_1`
--
ALTER TABLE `Media_1`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `Unit_1`
--
ALTER TABLE `Unit_1`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `Unit_2`
--
ALTER TABLE `Unit_2`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `Unit_3`
--
ALTER TABLE `Unit_3`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `Unit_4`
--
ALTER TABLE `Unit_4`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `Unit_5`
--
ALTER TABLE `Unit_5`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `Unit_6`
--
ALTER TABLE `Unit_6`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `Unit_8`
--
ALTER TABLE `Unit_8`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `fiszki`
--
ALTER TABLE `fiszki`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT dla tabeli `info_table`
--
ALTER TABLE `info_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT dla tabeli `Unit_1`
--
ALTER TABLE `Unit_1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=96;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
