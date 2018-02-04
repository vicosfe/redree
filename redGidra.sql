-- phpMyAdmin SQL Dump
-- version 4.4.15.7
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1:3306
-- Время создания: Янв 13 2018 г., 00:39
-- Версия сервера: 5.7.13
-- Версия PHP: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `redGidra`
--

-- --------------------------------------------------------

--
-- Структура таблицы `Adds`
--

CREATE TABLE IF NOT EXISTS `Adds` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `updated_at` date NOT NULL,
  `created_at` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `Adds`
--

INSERT INTO `Adds` (`id`, `name`, `email`, `phone`, `updated_at`, `created_at`) VALUES
(1, 'Расул', 'gidra@mail.ru', 'Чекаю', '2017-12-12', '2017-12-12'),
(2, 'Расул', 'gidra@mail.ru', '88005553535', '2017-12-12', '2017-12-12'),
(3, 'Расулдизикжиесть', 'chert@mail.ru', '88005553535', '2017-12-12', '2017-12-12'),
(4, 'Расул', 'gidra@mail.ru', 'lsdfsdfsf', '2017-12-12', '2017-12-12'),
(5, 'Расул', 'gidra@mail.ru', 'Чекаю', '2017-12-12', '2017-12-12'),
(6, 'Расул', 'gidra@mail.ru', 'Чекаю', '2017-12-12', '2017-12-12'),
(7, 'Расул лох', 'qwerqwer0123@bk.ru', 'бэбэбэ', '2018-01-08', '2018-01-08'),
(8, 'А что у нас тут работает?', 'rezerv123@bk.ru', 'Ооо... да всё работает!', '2018-01-08', '2018-01-08'),
(9, 'А что у нас тут работает?', 'rezerv123@bk.ru', '+7 (919) 191-9111', '2018-01-11', '2018-01-11');

-- --------------------------------------------------------

--
-- Структура таблицы `Pupels`
--

CREATE TABLE IF NOT EXISTS `Pupels` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `Pupels`
--

INSERT INTO `Pupels` (`id`, `name`, `email`, `phone`, `updated_at`, `created_at`) VALUES
(1, '123123', 'gidra@mail.ru', '12312312', '2017-12-12 00:00:00', '2017-12-12 00:00:00'),
(2, '123123', 'gidra@mail.ru', '12312312', '2017-12-12 00:00:00', '2017-12-12 00:00:00'),
(3, '123123', 'gidra@mail.ru', '12312312', '2017-12-12 00:00:00', '2017-12-12 00:00:00'),
(4, '123123', 'gidra@mail.ru', '12312312', '2017-12-12 00:00:00', '2017-12-12 00:00:00'),
(5, '123123', 'gidra@mail.ru', '123124124', '2017-12-12 00:00:00', '2017-12-12 00:00:00'),
(6, '123123', 'gidra@mail.ru', '12312312', '2017-12-12 00:00:00', '2017-12-12 00:00:00'),
(7, 'Кто лох', 'qwesdfygfyu@bk.ru', 'Ты лох', '2018-01-08 10:35:09', '2018-01-08 10:35:09'),
(8, 'Расул', 'qwerqwer0123@bk.ru', 'Ты...', '2018-01-08 10:39:03', '2018-01-08 10:39:03'),
(9, 'Расул', 'qwerqwer0123@bk.ru', 'Ты...', '2018-01-08 10:39:22', '2018-01-08 10:39:22'),
(10, 'Расул....', 'cyka@bk.ru', '+7 (999) 999-1111', '2018-01-11 16:52:41', '2018-01-11 16:52:41');

-- --------------------------------------------------------

--
-- Структура таблицы `Works`
--

CREATE TABLE IF NOT EXISTS `Works` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `klient` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `year` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `category` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `Works`
--

INSERT INTO `Works` (`id`, `name`, `klient`, `type`, `year`, `photo`, `url`, `category`) VALUES
(1, 'Инвестиционный портал\r\nг.Махачкала', 'Администрация г.Махачкалы', 'Digital', '2017', '/public/images/invest_bg.png', 'vk.com', 1),
(2, 'Джигурда', 'Аноним', 'Сайт', '1985', '/public/images/republic_bg.png', 'vk.com', 2),
(3, 'Тварь', 'Изверг', 'Садистка', '666', '/public/images/republic_bg.png', '666onanizm.com', 3);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `Adds`
--
ALTER TABLE `Adds`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `Pupels`
--
ALTER TABLE `Pupels`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `Works`
--
ALTER TABLE `Works`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `Adds`
--
ALTER TABLE `Adds`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT для таблицы `Pupels`
--
ALTER TABLE `Pupels`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT для таблицы `Works`
--
ALTER TABLE `Works`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
