-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Май 23 2022 г., 22:19
-- Версия сервера: 8.0.19
-- Версия PHP: 7.4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `danoxv`
--

-- --------------------------------------------------------

--
-- Структура таблицы `comments`
--

CREATE TABLE `comments` (
  `id` int NOT NULL,
  `post_id` int NOT NULL,
  `author_id` int NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `comments`
--

INSERT INTO `comments` (`id`, `post_id`, `author_id`, `created_at`, `updated_at`, `content`) VALUES
(34, 5, 5, '2022-02-13 21:08:25', NULL, 'фвалфвылафыхвшахвгуф'),
(35, 5, 5, '2022-02-13 21:08:31', NULL, 'взышрпаирзвыфшп'),
(36, 12, 7, '2022-02-21 20:34:22', NULL, 'sadfasdf'),
(37, 12, 7, '2022-02-21 20:34:28', NULL, 'sadfasdf'),
(38, 12, 7, '2022-02-21 20:34:53', NULL, 'asdfasdfasdf'),
(39, 13, 7, '2022-02-21 21:31:29', NULL, 'asdfasdf'),
(40, 13, 7, '2022-02-21 21:33:30', NULL, 'sadfgsfdsadfgsfdsadfgsfdsadfgsfdsadfgsfdsadfgsfdsadfgsfdsadfgsfdsadfgsfdsadfgsfdsadfgsfdsadfgsfdsadfgsfdsadfgsfdsadfgsfdsadfgsfdsadfgsfdsadfgsfdsadfgsfdsadfgsfdsadfgsfdsadfgsfdsadfgsfdsadfgsfdsadfgsfdsadfgsfdsadfgsfdsadfgsfdsadfgsfdsadfgsfdsadfgsfdsadfgsfdsadfgsfdsadfgsfdsadfgsfdsadfgsfdsadfgsfdsadfgsfdsadfgsfdsadfgsfdsadfgsfdsadfgsfdsadfgsfdsadfgsfdsadfgsfdsadfgsfdsadfgsfdsadfgsfdsadfgsfdsadfgsfdsadfgsfdsadfgsfdsadfgsfdsadfgsfdsadfgsfdsadfgsfdsadfgsfdsadfgsfdsadfgsfdsadfgsfdsadfgsfdsadfgsfdsadfgsfdsadfgsfdsadfgsfdsadfgsfdsadfgsfdsadfgsfdsadfgsfdsadfggsfdsadfgsfdsadfgsfdsadfgsfdsadfgsfdsadfgsfdsadfgsfdsadfgsfdsadfgsfdsadfgsfdsadfgsfdsadfgsfdsadfgsfdsadfgsfdsadfgsfdsadfgsfdsadfgsfdsadfgsfdsadfgsfdsadfgsfdsadfgsfdsadfgsfdsadfgsfdsadfgsfdsadfgsfdsadfgsfdsadfgsfdsadfgsfdsadfgsfdsadfgsfdsadfgsfdsadfgsfdsadfgsfdsadfgsfdsadfgsfdsadfgsfdsadfgsfdsadfgsfdsadfgsfdsadfgsfdsadfgsfdsadfgsfdsadfgsfdsadfgsfdsadfgsfdsadfgsfdsadfgsfdsadfgsfdsadfgsfdsadfgsfdsadfgsfdsadfgsfdsadfgsfdsadfggsfdsadfgsfdsadfgsfdsadfgsfdsadfgsfdsadfgsfdsadfgsfdsadfgsfdsadfgsfdsadfgsfdsadfgsfdsadfgsfdsadfgsfdsadfgsfdsadfgsfdsadfgsfdsadfgsfdsadfgsfdsadfgsfdsadfgsfdsadfgsfdsadfgsfdsadfgsfdsadfgsfdsadfgsfdsadfgsfdsadfgsfdsadfgsfdsadfgsfdsadfgsfdsadfgsfdsadfgsfdsadfgsfdsadfgsfdsadfgsfdsadfgsfdsadfgsfdsadfgsfdsadfgsfdsadfgsfdsadfgsfdsadfgsfdsadfgsfdsadfgsfdsadfgsfdsadfgsfdsadfgsfdsadfgsfdsadfgsfdsadfgsfdsadfgsfdsadfgsfdsadfgsfdsadfggsfdsadfgsfdsadfgsfdsadfgsfdsadfgsfdsadfgsfdsadfgsfdsadfgsfdsadfgsfdsadfgsfdsadfgsfdsadfgsfdsadfgsfdsadfgsfdsadfgsfdsadfgsfdsadfgsfdsadfgsfdsadfgsfdsadfgsfdsadfgsfdsadfgsfdsadfgsfdsadfgsfdsadfgsfdsadfgsfdsadfgsfdsadfgsfdsadfgsfdsadfgsfdsadfgsfdsadfgsfdsadfgsfdsadfgsfdsadfgsfdsadfgsfdsadfgsfdsadfgsfdsadfgsfdsadfgsfdsadfgsfdsadfgsfdsadfgsfdsadfgsfdsadfgsfdsadfgsfdsadfgsfdsadfgsfdsadfgsfdsadfgsfdsadfgsfdsadfgsfdsadfgsfdsadfggsfdsadfgsfdsadfgsfdsadfgsfdsadfgsfdsadfgsfdsadfgsfdsadfgsfdsadfgsfdsadfgsfdsadfgsfdsadfgsfdsadfgsfdsadfgsfdsadfgsfdsadfgsfdsadfgsfdsadfgsfdsadfgsfdsadfgsfdsadfgsfdsadfgsfdsadfgsfdsadfgsfdsadfgsfdsadfgsfdsadfgsfdsadfgsfdsadfgsfdsadfgsfdsadfgsfdsadfgsfdsadfgsfdsadfgsfdsadfgsfdsadfgsfdsadfgsfdsadfgsfdsadfgsfdsadfgsfdsadfgsfdsadfgsfdsadfgsfdsadfgsfdsadfgsfdsadfgsfdsadfgsfdsadfgsfdsadfgsfdsadfgsfdsadfgsfdsadfgsfdsadfgsfdsadfggsfdsadfgsfdsadfgsfdsadfgsfdsadfgsfdsadfgsfdsadfgsfdsadfgsfdsadfgsfdsadfgsfdsadfgsfdsadfgsfdsadfgsfdsadfgsfdsadfgsfdsadfgsfdsadfgsfdsadfgsfdsadfgsfdsadfgsfdsadfgsfdsadfgsfdsadfgsfdsadfgsfdsadfgsfdsadfgsfdsadfgsfdsadfgsfdsadfgsfdsadfgsfdsadfgsfdsadfgsfdsadfgsfdsadfgsfdsadfgsfdsadfgsfdsadfgsfdsadfgsfdsadfgsfdsadfgsfdsadfgsfdsadfgsfdsadfgsfdsadfgsfdsadfgsfdsadfgsfdsadfgsfdsadfgsfdsadfgsfdsadfgsfdsadfgsfdsadfgsfdsadfgsfdsadfgsfdsadfgsfdsadfgsfd'),
(41, 14, 7, '2022-02-22 00:00:56', NULL, 'ывапывапыв вапывапыв');

-- --------------------------------------------------------

--
-- Структура таблицы `posts`
--

CREATE TABLE `posts` (
  `id` int NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `author_id` int NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `posts`
--

INSERT INTO `posts` (`id`, `title`, `content`, `author_id`, `created_at`, `updated_at`) VALUES
(4, 'xzC', 'ZXC', 5, '2022-02-11 22:50:13', NULL),
(5, 'xzC', 'ZXC', 5, '2022-02-11 22:50:13', NULL),
(6, ' ghbdt ', ' DSFasdfs ', 5, '2022-02-13 21:24:01', NULL),
(8, '12', '12', 6, '2022-02-17 00:16:10', NULL),
(9, '1212вавыфаывфвыаыфваф', '1212', 6, '2022-02-18 01:41:41', NULL),
(10, 'ыфва', 'фыва', 6, '2022-02-18 13:37:30', NULL),
(12, 'ывап', 'выап', 6, '2022-02-18 14:15:20', NULL),
(13, 'asdf', 'sdafasdf', 7, '2022-02-21 20:34:46', NULL),
(14, 'asdsadfasdf', 'asdfasdfsad', 7, '2022-02-21 21:35:16', NULL),
(15, 'ыфва', 'фыва', 8, '2022-03-04 20:54:58', NULL),
(16, 'фыва', 'фыва', 8, '2022-03-04 20:55:01', NULL),
(17, 'фыва', 'ыфвафыва', 8, '2022-03-04 20:55:06', NULL),
(18, '1111', '1111', 8, '2022-03-04 20:55:11', NULL),
(19, '1111', '1111', 8, '2022-03-04 20:55:15', NULL),
(20, 'sdfg', 'sdfg', 12, '2022-03-06 04:58:43', NULL),
(21, 'хуй', ' хуевич', 12, '2022-03-06 04:59:03', NULL),
(22, 'хуец', 'хуя', 13, '2022-05-23 16:48:52', NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `age` int DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `age`, `password`) VALUES
(5, '123', 123, '1234'),
(6, '12', 212, '123'),
(7, '456', 456, '$2y$10$4JPwaIDeZ8T6pShSj2CJR.8k46euEb4LrPPLy7OlDqmFN6PXXc5V6'),
(8, '1', 1, '$2y$10$VcpYQ61wR2VclNBRnxPJXOvfWHlF8ESiYmMpJZFSu1DHfFUYT3AeK'),
(9, '98', 1, '$2y$10$UIZ99s0SH188jMxTuV0JROQE2hklld1.tvv6900I.lE2UY9rZDLH.'),
(10, '652asfdsfsf', 12, '$2y$10$8mKVaG9h9Uqwbu69Z8tC1ezNpvQE14EuOZWb8RAZJL.2kC4Exp.TC'),
(11, 'gfdd', 16, '$2y$10$JFCPpyJzi0n2zspKWQ/dNOKq.nbHJFN7N0JDYLPgrpd2dKLXVWAXK'),
(12, 'admin', 18, '$2y$10$zGSpK/6GFP8nVcZflzKWe.tNlmv34RVmiKI3fAWGPiIBzXsgu/IeG'),
(13, 'danoxv', 18, '$2y$10$X7fCTKKcax0WAqOw.X0P/uXDaiS9/U459FpqBObCn4Cg3R7AJCGdS');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comments_fk0` (`post_id`),
  ADD KEY `comments_fk1` (`author_id`);

--
-- Индексы таблицы `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `posts_fk0` (`author_id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT для таблицы `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_fk0` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`),
  ADD CONSTRAINT `comments_fk1` FOREIGN KEY (`author_id`) REFERENCES `users` (`id`);

--
-- Ограничения внешнего ключа таблицы `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_fk0` FOREIGN KEY (`author_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
