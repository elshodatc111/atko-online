-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Дек 16 2023 г., 12:47
-- Версия сервера: 10.4.28-MariaDB
-- Версия PHP: 8.0.28

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
  `MavzuTest` longtext NOT NULL,
  `Video` varchar(150) NOT NULL,
  `VideoLine` varchar(9) NOT NULL,
  `MavzuNumber` int(3) NOT NULL,
  `Name1` varchar(100) NOT NULL,
  `Name2` varchar(100) NOT NULL,
  `Data` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `coues_mavzu`
--

INSERT INTO `coues_mavzu` (`id`, `CoursID`, `MavzuID`, `MavzuName`, `MavzuAbout`, `MavzuTest`, `Video`, `VideoLine`, `MavzuNumber`, `Name1`, `Name2`, `Data`) VALUES
(1, '1110001110', '30000001', '1-dars', 'Testttttt', 'Lugatlar', 'https://atko.tech/newonline/assets/video/01/e50-1.webm', '00:15:20', 1, 's', 's', '2023-12-16 11:21:35'),
(2, '1110001110', '30000002', '2-dars', 'Testttttt', 'Lugatlar', 'https://atko.tech/newonline/assets/video/01/e50-1.webm', '00:15:20', 2, 's', 's', '2023-12-16 11:22:56'),
(3, '1110001110', '30000003', '3-dars', 'Testttttt', 'Lugatlar', 'https://atko.tech/newonline/assets/video/01/e50-1.webm', '00:15:20', 3, 's', 's', '2023-12-16 11:22:56'),
(4, '1110001110', '30000004', '4-dars', 'Testttttt', 'Lugatlar', 'https://atko.tech/newonline/assets/video/01/e50-1.webm', '00:15:20', 4, 's', 's', '2023-12-16 11:22:56'),
(5, '1110001110', '30000005', '5-dars', 'Testttttt', 'Lugatlar', 'https://atko.tech/newonline/assets/video/01/e50-1.webm', '00:15:20', 5, 's', 's', '2023-12-16 11:22:56'),
(6, '1110001110', '30000006', '6-dars', 'Testttttt', 'Lugatlar', 'https://atko.tech/newonline/assets/video/01/e50-1.webm', '00:15:20', 6, 's', 's', '2023-12-16 11:22:56'),
(7, '1110001110', '30000007', '7-dars', 'Testttttt', 'Lugatlar', 'https://atko.tech/newonline/assets/video/01/e50-1.webm', '00:15:20', 7, 's', 's', '2023-12-16 11:22:56'),
(8, '1110001110', '30000008', '8-dars', 'Testttttt', 'Lugatlar', 'https://atko.tech/newonline/assets/video/01/e50-1.webm', '00:15:20', 8, 's', 's', '2023-12-16 11:22:56'),
(9, '1110001110', '30000009', '9-dars', 'Testttttt', 'Lugatlar', 'https://atko.tech/newonline/assets/video/01/e50-1.webm', '00:15:20', 9, 's', 's', '2023-12-16 11:22:56'),
(10, '1110001110', '30000010', '10-dars', 'Testttttt', 'Lugatlar', 'https://atko.tech/newonline/assets/video/01/e50-1.webm', '00:15:20', 10, 's', 's', '2023-12-16 11:22:56');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `cours`
--

INSERT INTO `cours` (`id`, `CoursID`, `CoursName`, `CoursText`, `CoursAbout`, `CoursPrice`, `CoursImage`, `CoursMavzu`, `CoursTil`, `CoursDavomiy`, `CoursTecher`, `TecherImage`, `Muddat`, `Data`) VALUES
(1, '1110001110', 'Koreys tili darslari', 'Kurs haqida qisqacha malumot', 'Kurs haqida to\'liq malumot yozilishi kerak', '150000', '01.jpg', 12, 'O`zbek', '12:24:00', 'Elshod Musurmonov', '01.jpg', 30, '2023-12-16 10:36:22');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id`, `UserID`, `FIO`, `Phone`, `Data`, `HoverData`) VALUES
(1, '123456789', 'Elshod Musurmonov', '908830450', '2023-12-16 07:32:04', '2023-12-16 10:04:09'),
(2, '1702721972', 'ATKO oquv markazi', '945204004', '2023-12-16 10:19:32', '2023-12-16 10:51:46');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `user_cours`
--
ALTER TABLE `user_cours`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
