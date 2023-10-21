-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 192.168.1.2:3306
-- Время создания: Окт 21 2023 г., 22:42
-- Версия сервера: 8.0.30
-- Версия PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `oniks`
--

-- --------------------------------------------------------

--
-- Структура таблицы `bookings`
--

CREATE TABLE `bookings` (
  `id` int NOT NULL,
  `data` date NOT NULL,
  `person` int NOT NULL,
  `time` time NOT NULL,
  `comments` text COLLATE utf8mb4_general_ci NOT NULL,
  `name` varchar(256) COLLATE utf8mb4_general_ci NOT NULL,
  `owner` int NOT NULL,
  `Status` varchar(256) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'Одобрено',
  `Reason` varchar(256) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `bookings`
--

INSERT INTO `bookings` (`id`, `data`, `person`, `time`, `comments`, `name`, `owner`, `Status`, `Reason`) VALUES
(2, '2023-09-24', 6, '13:00:00', 'Пицца', 'Kirill Oniks', 1, 'Одобрено', ''),
(32, '2023-09-24', 6, '13:00:00', 'Пицца', 'Kirill Oniks', 1, 'Отменено', 'Потому что потому'),
(35, '2023-10-14', 4, '15:00:00', 'Хочу пиццу', 'Kirill', 1, 'Одобрено', '');

-- --------------------------------------------------------

--
-- Структура таблицы `claim-feedback`
--

CREATE TABLE `claim-feedback` (
  `id` int NOT NULL,
  `IDpost` int NOT NULL,
  `reson` varchar(256) COLLATE utf8mb4_general_ci NOT NULL,
  `description` text COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `claim-feedback`
--

INSERT INTO `claim-feedback` (`id`, `IDpost`, `reson`, `description`) VALUES
(1, 1, 'spam', '');

-- --------------------------------------------------------

--
-- Структура таблицы `feedback`
--

CREATE TABLE `feedback` (
  `id` int NOT NULL,
  `user` int NOT NULL,
  `data` date NOT NULL,
  `general` int NOT NULL,
  `eat` int NOT NULL,
  `service` int NOT NULL,
  `atmosphere` int NOT NULL,
  `dignities` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `disadvantages` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `likes` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `feedback`
--

INSERT INTO `feedback` (`id`, `user`, `data`, `general`, `eat`, `service`, `atmosphere`, `dignities`, `disadvantages`, `likes`) VALUES
(1, 1, '2023-10-31', 3, 4, 5, 6, 'Не ну вообщем туда сюда еда приятен, сервис прелесть Не ну вообщем туда сюда еда приятен, сервис прелесть Не ну вообщем туда сюда еда приятен, сервис прелесть Не ну вообщем туда сюда еда приятен, сервис прелесть Не ну вообщем туда сюда еда приятен, сервис прелесть Не ну вообщем туда сюда еда приятен, сервис прелесть Не ну вообщем туда сюда еда приятен, сервис прелесть Не ну вообщем туда сюда еда приятен, сервис прелесть Не ну вообщем туда сюда еда приятен, сервис прелесть Не ну вообщем туда сюда еда приятен, сервис прелесть Не ну вообщем туда сюда еда приятен, сервис прелесть Не ну вообщем туда сюда еда приятен, сервис прелесть Не ну вообщем туда сюда еда приятен, сервис прелесть Не ну вообщем туда сюда еда приятен, сервис прелесть Не ну вообщем туда сюда еда приятен, сервис прелесть Не ну вообщем туда сюда еда приятен, сервис прелесть ', 'Отсутствует', 100),
(4, 7, '2023-10-31', 5, 5, 5, 5, 'Вкусно и точка', 'Отсутствует', 100);

-- --------------------------------------------------------

--
-- Структура таблицы `menu`
--

CREATE TABLE `menu` (
  `id` int NOT NULL,
  `Composition` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `img` varchar(256) COLLATE utf8mb4_general_ci NOT NULL,
  `price` int NOT NULL,
  `type` varchar(256) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `menu`
--

INSERT INTO `menu` (`id`, `Composition`, `img`, `price`, `type`) VALUES
(1, 'Потом', '16951523171.png', 111, 'breakfast'),
(2, 'Потом', '16951523252.jpg', 11, 'breakfast'),
(3, 'Потом', '16951523313.png', 111, 'breakfast'),
(4, 'Потом', '16951523384.jpg', 111, 'breakfast'),
(6, '111', '16951523695.jpg', 111, 'breakfast'),
(7, '111', '16951523746.jpg', 111, 'breakfast'),
(8, '111', '16951523817.jpg', 111, 'breakfast'),
(9, '111', '16951523868.jpg', 111, 'breakfast'),
(10, '111', '16951523919.jpg', 111, 'breakfast'),
(11, '111', '169515239710.jpeg', 111, 'breakfast'),
(12, '111', '169515240311.jpg', 111, 'breakfast'),
(14, '111', '16951525391.jpeg', 111, 'Snacks'),
(15, '111', '16951525592.jpg', 111, 'Snacks'),
(16, '111', '16951525673.jpg', 111, 'Snacks'),
(17, '111', '16951525764.jpg', 111, 'Snacks'),
(18, '111', '16951525825.jpg', 111, 'Snacks'),
(19, '111', '16951525916.jpeg', 111, 'Snacks'),
(20, '111', '16951525977.jpeg', 111, 'Snacks'),
(21, '111', '16951526068.png', 111, 'Snacks'),
(22, '111', '16951526159.jpeg', 111, 'Snacks'),
(23, '111', '169515263310.jpeg', 111, 'Snacks'),
(24, '111', '16952387411.jpg', 111, 'Salads'),
(25, '111', '16952387472.jpg', 111, 'Salads'),
(26, '111', '16952387693.jpg', 111, 'Salads'),
(27, '111', '16952387754.jpeg', 111, 'Salads'),
(29, '111', '16952387865.jpeg', 111, 'Salads'),
(30, '111', '16952388016.jpeg', 111, 'Salads'),
(31, '111', '16952388087.jpeg', 111, 'Salads'),
(33, '111', '16952388328.jpeg', 111, 'Salads'),
(34, '111', '16952388529.jpeg', 111, 'Salads'),
(35, '111', '16952389111.jpg', 111, 'Soups'),
(36, '111', '16952389172.jpeg', 111, 'Soups'),
(37, '111', '16952389253.jpeg', 111, 'Soups'),
(38, '111', '16952389374.jpg', 111, 'Soups'),
(39, '111', '16952391331.jpg', 111, 'Hotter'),
(40, '111', '16952391392.jpg', 111, 'Hotter'),
(41, '111', '16952391453.jpeg', 111, 'Hotter'),
(42, '111', '16952391524.jpg', 111, 'Hotter'),
(43, '111', '16952391575.jpeg', 111, 'Hotter'),
(44, '111', '16952391666.jpeg', 111, 'Hotter'),
(45, '111', '16952391717.jpeg', 111, 'Hotter'),
(46, '111', '16952391788.jpg', 111, 'Hotter'),
(47, '111', '16952391869.jpg', 111, 'Hotter'),
(48, '111', '169523919210.jpeg', 111, 'Hotter');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `name` varchar(256) COLLATE utf8mb4_general_ci NOT NULL,
  `login` varchar(256) COLLATE utf8mb4_general_ci NOT NULL,
  `pass` varchar(256) COLLATE utf8mb4_general_ci NOT NULL,
  `number` varchar(256) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(256) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `role` varchar(40) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `login`, `pass`, `number`, `email`, `role`) VALUES
(1, 'Kirill Oniks', 'oniks', 'e3153e3b990edd0028d34405ec79d55d', '+7 (999) 999-99-98', 'oniks@mail.ru', 'admin'),
(2, 'Kirill Alexandrovich', '15_ONIKS_49', 'e3153e3b990edd0028d34405ec79d55d', '+7 (999) 999-99-97', 'on1ks@mail.ru', 'admin'),
(3, 'Admin User', 'Userov', 'e3153e3b990edd0028d34405ec79d55d', '+7 (999) 999-99-96', '15_oniks_49@mail.ru', 'admin'),
(4, 'Admin Adminov', 'Adminov', 'e3153e3b990edd0028d34405ec79d55d', '+7 (999) 999-99-95', '15_on1ks_49@mail.ru', 'admin'),
(5, 'Dima', 'programator', 'e3153e3b990edd0028d34405ec79d55d', '+7 (999) 999-99-94', 'programator@mail.ru', 'editor'),
(6, 'Danil', 'unstoppable666', 'e3153e3b990edd0028d34405ec79d55d', '+7 (999) 999-99-93', 'unstoppable666@mail.ru', 'user'),
(7, 'Alina', 'CHOOO', 'e3153e3b990edd0028d34405ec79d55d', '+7 (999) 999-99-92', 'CHOOO@mail.ru', 'user'),
(8, 'Slava', 'Kuzmin', 'e3153e3b990edd0028d34405ec79d55d', '+7 (999) 999-99-91', 's.kuzmin@mail.ru', 'user'),
(10, 'test', 'test', '098f6bcd4621d373cade4e832627b4f6', '899999999999', 'test@test.ru', 'admin');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `owner` (`owner`);

--
-- Индексы таблицы `claim-feedback`
--
ALTER TABLE `claim-feedback`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDpost` (`IDpost`);

--
-- Индексы таблицы `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user` (`user`);

--
-- Индексы таблицы `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `name` (`name`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT для таблицы `claim-feedback`
--
ALTER TABLE `claim-feedback`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT для таблицы `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `bookings`
--
ALTER TABLE `bookings`
  ADD CONSTRAINT `bookings_ibfk_1` FOREIGN KEY (`owner`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `claim-feedback`
--
ALTER TABLE `claim-feedback`
  ADD CONSTRAINT `claim-feedback_ibfk_1` FOREIGN KEY (`IDpost`) REFERENCES `feedback` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `feedback`
--
ALTER TABLE `feedback`
  ADD CONSTRAINT `feedback_ibfk_1` FOREIGN KEY (`user`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
