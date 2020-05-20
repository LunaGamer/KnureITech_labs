-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Май 20 2020 г., 04:06
-- Версия сервера: 5.6.38
-- Версия PHP: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `var1`
--

-- --------------------------------------------------------

--
-- Структура таблицы `authors`
--

CREATE TABLE `authors` (
  `ID_Authors` int(11) NOT NULL,
  `Author_name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `authors`
--

INSERT INTO `authors` (`ID_Authors`, `Author_name`) VALUES
(0, 'Arthur'),
(1, 'Artem'),
(2, 'Kristi'),
(10, 'Ivanov');

-- --------------------------------------------------------

--
-- Структура таблицы `Book_Authors`
--

CREATE TABLE `Book_Authors` (
  `FID_Book` int(11) NOT NULL,
  `FID_Authors` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `Book_Authors`
--

INSERT INTO `Book_Authors` (`FID_Book`, `FID_Authors`) VALUES
(0, 1),
(1, 0),
(2, 10),
(3, 1),
(2, 2);

-- --------------------------------------------------------

--
-- Структура таблицы `literature`
--

CREATE TABLE `literature` (
  `ID_Book` int(11) NOT NULL,
  `name` text NOT NULL,
  `date` date DEFAULT NULL,
  `year` year(4) DEFAULT NULL,
  `publisher` text,
  `quantity` int(11) DEFAULT NULL,
  `ISBN` text,
  `number` int(11) DEFAULT NULL,
  `literate` text NOT NULL,
  `FID_Resourse` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `literature`
--

INSERT INTO `literature` (`ID_Book`, `name`, `date`, `year`, `publisher`, `quantity`, `ISBN`, `number`, `literate`, `FID_Resourse`) VALUES
(0, 'CITY IT', NULL, 2020, 'Kharkov', 128, '125-1587-12', NULL, 'Book', 0),
(1, 'Node.js', NULL, 2015, 'Kiev', 100, '84-984-46', NULL, 'Book', 1),
(2, 'Python', NULL, 2017, 'Moscow', 999, '985-587-55', NULL, 'Book', 2),
(3, 'METRO_GOST', NULL, 1997, 'Kharkov', 313, '127-987-75', NULL, 'Book', 0),
(4, 'Everyday', '2020-03-30', NULL, NULL, NULL, NULL, NULL, 'Newspaper', NULL),
(5, 'Fashion.exe', NULL, 2019, NULL, NULL, NULL, 15, 'Journal', NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `resourse`
--

CREATE TABLE `resourse` (
  `ID_Resourse` int(11) NOT NULL,
  `title` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `resourse`
--

INSERT INTO `resourse` (`ID_Resourse`, `title`) VALUES
(0, 'Website'),
(1, 'WebTEST'),
(2, 'webidk');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `authors`
--
ALTER TABLE `authors`
  ADD UNIQUE KEY `ID_Authors` (`ID_Authors`),
  ADD KEY `name` (`Author_name`(255));

--
-- Индексы таблицы `Book_Authors`
--
ALTER TABLE `Book_Authors`
  ADD KEY `FID_Authors` (`FID_Authors`),
  ADD KEY `FID_Book` (`FID_Book`);

--
-- Индексы таблицы `literature`
--
ALTER TABLE `literature`
  ADD PRIMARY KEY (`ID_Book`) USING BTREE,
  ADD KEY `FID_Resourse` (`FID_Resourse`);

--
-- Индексы таблицы `resourse`
--
ALTER TABLE `resourse`
  ADD UNIQUE KEY `ID_Resourse` (`ID_Resourse`),
  ADD KEY `ID_Resourse_2` (`ID_Resourse`),
  ADD KEY `ID_Resourse_3` (`ID_Resourse`);

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `Book_Authors`
--
ALTER TABLE `Book_Authors`
  ADD CONSTRAINT `book_authors_ibfk_1` FOREIGN KEY (`FID_Authors`) REFERENCES `authors` (`ID_Authors`),
  ADD CONSTRAINT `book_authors_ibfk_2` FOREIGN KEY (`FID_Book`) REFERENCES `literature` (`ID_Book`);

--
-- Ограничения внешнего ключа таблицы `literature`
--
ALTER TABLE `literature`
  ADD CONSTRAINT `literature_ibfk_1` FOREIGN KEY (`FID_Resourse`) REFERENCES `resourse` (`ID_Resourse`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
