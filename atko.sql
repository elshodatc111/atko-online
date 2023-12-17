-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Дек 17 2023 г., 21:15
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
-- База данных: `atko`
--

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
(1, '1110001110', '30000001', '1-dars', 'Testttttt', 'NULL', '01/e50-1.webm', '00:15:20', 1, 's', 's', '2023-12-16 11:21:35'),
(2, '1110001110', '30000002', '2-dars', 'Testttttt', 'NULL', '01/e50-2.webm', '00:15:20', 2, 's', 's', '2023-12-16 11:22:56'),
(3, '1110001110', '30000003', '3-dars', 'Testttttt', 'NULL', '01/e50-3.webm', '00:15:20', 3, 's', 's', '2023-12-16 11:22:56'),
(4, '1110001110', '30000004', '4-dars', 'Testttttt', 'NULL', '01/e50-4.webm', '00:15:20', 4, 's', 's', '2023-12-16 11:22:56'),
(5, '1110001110', '30000005', '5-dars', 'Testttttt', 'NULL', '01/e50-5.webm', '00:15:20', 5, 's', 's', '2023-12-16 11:22:56'),
(6, '1110001110', '30000006', '6-dars', 'Testttttt', 'NULL', '01/e50-6.webm', '00:15:20', 6, 's', 's', '2023-12-16 11:22:56'),
(7, '1110001110', '30000007', '7-dars', 'Testttttt', 'NULL', '01/e50-7.webm', '00:15:20', 7, 's', 's', '2023-12-16 11:22:56'),
(8, '1110001110', '30000008', '8-dars', 'Testttttt', 'NULL', '01/e50-8.webm', '00:15:20', 8, 's', 's', '2023-12-16 11:22:56'),
(9, '1110001110', '30000009', '9-dars', 'Testttttt', 'NULL', '01/e50-9.webm', '00:15:20', 9, 's', 's', '2023-12-16 11:22:56'),
(10, '1110001110', '30000010', '10-dars', 'Testttttt', 'NULL', '01/e50-10.webm', '00:15:20', 10, 's', 's', '2023-12-16 11:22:56');

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
  `Muddat` int(3) NOT NULL,
  `Data` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `cours`
--

INSERT INTO `cours` (`id`, `CoursID`, `CoursName`, `CoursText`, `CoursAbout`, `CoursPrice`, `CoursImage`, `CoursMavzu`, `CoursTil`, `CoursDavomiy`, `CoursTecher`, `TecherImage`, `Muddat`, `Data`) VALUES
(1, '1110001110', 'EPS Topik 50 (1-10)', 'Kurs haqida qisqacha malumot', 'Kurs haqida to\'liq malumot yozilishi kerak', '100000', '01.jpg', 10, 'O`zbek', '12:24:00', 'Abbos Tulanov', '01.jpg', 30, '2023-12-16 10:36:22'),
(2, '1110001111', 'EPS Topik 50 (11-20)', 'test', 'texxxxt', '100000', '01.jpg', 10, 'O`zbek', '00:15:21', 'Abbos Tulanov', '01.jpg', 30, '2023-12-17 19:18:59'),
(3, '1110001112', 'EPS Topik 50 (21-30)', 'test', 'texxxxt', '100000', '01.jpg', 10, 'O`zbek', '00:15:21', 'Abbos Tulanov', '01.jpg', 30, '2023-12-17 19:19:53'),
(4, '1110001113', 'EPS Topik 50 (31-40)', 'test', 'texxxxt', '100000', '01.jpg', 10, 'O`zbek', '00:15:21', 'Abbos Tulanov', '01.jpg', 30, '2023-12-17 19:19:53'),
(5, '1110001114', 'EPS Topik 50 (41-50)', 'test', 'texxxxt', '100000', '01.jpg', 10, 'O`zbek', '00:15:21', 'Abbos Tulanov', '01.jpg', 30, '2023-12-17 19:19:53'),
(6, '1110001115', 'EPS Topik 50 (51-60)', 'test', 'texxxxt', '100000', '01.jpg', 10, 'O`zbek', '00:15:21', 'Abbos Tulanov', '01.jpg', 30, '2023-12-17 19:20:12');

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

--
-- Дамп данных таблицы `cours_test`
--

INSERT INTO `cours_test` (`id`, `CoursID`, `MavzuID`, `TestID`, `TestSavol`, `TestType`) VALUES
(1, '1110001110', '30000001', '40000001', 'Bitta javob 1', 'choose'),
(2, '1110001110', '30000001', '40000002', 'Bitta javob 2', 'choose'),
(3, '1110001110', '30000001', '40000003', 'Bir nechta javob 1', 'chechbox'),
(4, '1110001110', '30000001', '40000004', 'Bir nechta javob 1', 'chechbox'),
(5, '1110001110', '30000001', '40000005', 'Input javob 1', 'insert'),
(6, '1110001110', '30000001', '40000006', 'Input javob 2', 'insert'),
(7, '1110001110', '30000001', '40000007', 'Input javob 3', 'insert');

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

--
-- Дамп данных таблицы `cours_test_javob`
--

INSERT INTO `cours_test_javob` (`id`, `TestID`, `JavobID`, `Javob`, `Status`) VALUES
(1, '40000001', '50000001', 'To`g`ri', 'true'),
(2, '40000001', '50000002', 'Notogri 1', 'false'),
(3, '40000001', '50000003', 'Notogri 2', 'false'),
(4, '40000001', '50000004', 'Notogri 3', 'false'),
(5, '40000002', '50000005', 'To`g`ri', 'true'),
(6, '40000002', '50000006', 'Notogri 1', 'false'),
(7, '40000002', '50000007', 'Notogri 2', 'false'),
(8, '40000003', '50000001', 'Togri', 'true'),
(9, '40000003', '50000021', 'Togri', 'true'),
(10, '40000003', '50000022', 'NTogri', 'false'),
(11, '40000003', '50000023', 'Togri', 'true'),
(12, '40000003', '50000024', 'NTogri', 'false'),
(13, '40000003', '50000025', 'Togri', 'true'),
(14, '40000004', '50000026', 'NTogri', 'false'),
(15, '40000004', '50000027', 'NTogri', 'false'),
(16, '40000004', '50000028', 'Togri', 'true'),
(17, '40000004', '50000029', 'NTogri', 'false'),
(18, '40000004', '50000030', 'Togri', 'true'),
(19, '40000005', '50000033', '3', 'true'),
(20, '40000006', '50000034', '3', 'true'),
(21, '40000007', '50000035', '3', 'true');

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
(2, '1702721972', 'ATKO oquv markazi', '945204004', '2023-12-16 10:19:32', '2023-12-17 20:03:04'),
(3, '1702843774', 'Elshod', '908830450', '2023-12-17 20:09:34', '2023-12-17 20:09:34');

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
(1, '1702721972', '1110001110', '2023-12-15', '2023-12-31', 'sss');

--
-- Индексы сохранённых таблиц
--

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
-- AUTO_INCREMENT для таблицы `coues_mavzu`
--
ALTER TABLE `coues_mavzu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT для таблицы `cours`
--
ALTER TABLE `cours`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `cours_test`
--
ALTER TABLE `cours_test`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT для таблицы `cours_test_javob`
--
ALTER TABLE `cours_test_javob`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

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
