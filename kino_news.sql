-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Ноя 14 2017 г., 20:49
-- Версия сервера: 5.5.53-log
-- Версия PHP: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `kino_news`
--

-- --------------------------------------------------------

--
-- Структура таблицы `items`
--

CREATE TABLE `items` (
  `id` int(11) NOT NULL,
  `description` text NOT NULL,
  `fotoName` varchar(255) NOT NULL,
  `trailerFrame` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `views` int(11) NOT NULL DEFAULT '0',
  `createDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `items`
--

INSERT INTO `items` (`id`, `description`, `fotoName`, `trailerFrame`, `title`, `views`, `createDate`) VALUES
(1, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sit amet turpis sollicitudin, aliquet massa eget, viverra risus. Duis tempor sed nisl vitae tristique. Donec quis ante ultricies, rutrum est a, consectetur ex. Mauris ac est eu dui tristique ornare ut vel nunc. Donec pellentesque ut nunc eu varius. Nam feugiat orci nec lacus imperdiet convallis. Aenean vulputate rutrum dolor, sit amet sollicitudin mauris. Nunc scelerisque dolor at est tempor, dignissim tempor massa hendrerit. Suspendisse nec condimentum odio, quis varius justo.', 'terminator5.jpg', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/vusgM_1NR3I\" frameborder=\"0\" allowfullscreen></iframe>', 'terminator5', 1, '2017-11-12 12:43:20'),
(28, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tempor tempor magna sit amet semper. Donec volutpat velit iaculis nulla vulputate, ac pretium libero auctor. Aliquam placerat sed purus vitae sodales. In eu lorem non justo ultricies tincidunt. Nunc at felis id ligula dictum gravida. Fusce id finibus justo, quis finibus nunc. Suspendisse elementum dignissim lectus in cursus. Cras pellentesque sollicitudin nunc at mattis. Curabitur eleifend, mi at vulputate tincidunt, arcu metus iaculis risus, sed elementum nulla odio quis mauris. Integer vulputate luctus pretium. Vestibulum mollis ligula magna, sit amet scelerisque nisi porttitor a.', 'valerian.jpg', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/FFbMai3N62I\" frameborder=\"0\" allowfullscreen></iframe>', 'valerian', 0, '2017-11-14 16:26:32'),
(31, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tempor tempor magna sit amet semper. Donec volutpat velit iaculis nulla vulputate, ac pretium libero auctor. Aliquam placerat sed purus vitae sodales. In eu lorem non justo ultricies tincidunt. Nunc at felis id ligula dictum gravida. Fusce id finibus justo, quis finibus nunc. Suspendisse elementum dignissim lectus in cursus. Cras pellentesque sollicitudin nunc at mattis. Curabitur eleifend, mi at vulputate tincidunt, arcu metus iaculis risus, sed elementum nulla odio quis mauris. Integer vulputate luctus pretium. Vestibulum mollis ligula magna, sit amet scelerisque nisi porttitor a.', 'zaschitnik.jpg', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/gU-wjVD_58c\" frameborder=\"0\" allowfullscreen></iframe>', 'safe', 0, '2017-11-14 16:36:11'),
(32, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tempor tempor magna sit amet semper. Donec volutpat velit iaculis nulla vulputate, ac pretium libero auctor. Aliquam placerat sed purus vitae sodales. In eu lorem non justo ultricies tincidunt. Nunc at felis id ligula dictum gravida. Fusce id finibus justo, quis finibus nunc. Suspendisse elementum dignissim lectus in cursus. Cras pellentesque sollicitudin nunc at mattis. Curabitur eleifend, mi at vulputate tincidunt, arcu metus iaculis risus, sed elementum nulla odio quis mauris. Integer vulputate luctus pretium. Vestibulum mollis ligula magna, sit amet scelerisque nisi porttitor a.', 'oblasti-tmy.jpg', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/4TLppsfzQH8\" frameborder=\"0\" allowfullscreen></iframe>', 'limitless', 0, '2017-11-14 16:38:51'),
(33, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tempor tempor magna sit amet semper. Donec volutpat velit iaculis nulla vulputate, ac pretium libero auctor. Aliquam placerat sed purus vitae sodales. In eu lorem non justo ultricies tincidunt. Nunc at felis id ligula dictum gravida. Fusce id finibus justo, quis finibus nunc. Suspendisse elementum dignissim lectus in cursus. Cras pellentesque sollicitudin nunc at mattis. Curabitur eleifend, mi at vulputate tincidunt, arcu metus iaculis risus, sed elementum nulla odio quis mauris. Integer vulputate luctus pretium. Vestibulum mollis ligula magna, sit amet scelerisque nisi porttitor a.', 'prometey.jpg', ' <iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/yA6OKoW30Pk\" frameborder=\"0\" allowfullscreen></iframe>', 'prometheus', 0, '2017-11-14 16:40:46'),
(34, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tempor tempor magna sit amet semper. Donec volutpat velit iaculis nulla vulputate, ac pretium libero auctor. Aliquam placerat sed purus vitae sodales. In eu lorem non justo ultricies tincidunt. Nunc at felis id ligula dictum gravida. Fusce id finibus justo, quis finibus nunc. Suspendisse elementum dignissim lectus in cursus. Cras pellentesque sollicitudin nunc at mattis. Curabitur eleifend, mi at vulputate tincidunt, arcu metus iaculis risus, sed elementum nulla odio quis mauris. Integer vulputate luctus pretium. Vestibulum mollis ligula magna, sit amet scelerisque nisi porttitor a.', 'cap.jpg', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/GAiKvcCCYMo\" frameborder=\"0\" allowfullscreen></iframe>', 'cap', 0, '2017-11-14 16:43:36'),
(35, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tempor tempor magna sit amet semper. Donec volutpat velit iaculis nulla vulputate, ac pretium libero auctor. Aliquam placerat sed purus vitae sodales. In eu lorem non justo ultricies tincidunt. Nunc at felis id ligula dictum gravida. Fusce id finibus justo, quis finibus nunc. Suspendisse elementum dignissim lectus in cursus. Cras pellentesque sollicitudin nunc at mattis. Curabitur eleifend, mi at vulputate tincidunt, arcu metus iaculis risus, sed elementum nulla odio quis mauris. Integer vulputate luctus pretium. Vestibulum mollis ligula magna, sit amet scelerisque nisi porttitor a.', 'temnaya-bashnya.jpg', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/GjwfqXTebIY\" frameborder=\"0\" allowfullscreen></iframe>', 'dark tower', 0, '2017-11-14 16:44:52'),
(36, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tempor tempor magna sit amet semper. Donec volutpat velit iaculis nulla vulputate, ac pretium libero auctor. Aliquam placerat sed purus vitae sodales. In eu lorem non justo ultricies tincidunt. Nunc at felis id ligula dictum gravida. Fusce id finibus justo, quis finibus nunc. Suspendisse elementum dignissim lectus in cursus. Cras pellentesque sollicitudin nunc at mattis. Curabitur eleifend, mi at vulputate tincidunt, arcu metus iaculis risus, sed elementum nulla odio quis mauris. Integer vulputate luctus pretium. Vestibulum mollis ligula magna, sit amet scelerisque nisi porttitor a.', 'transformery.jpg', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/aFoz-tlYY_4\" frameborder=\"0\" allowfullscreen></iframe>', 'transformers', 0, '2017-11-14 16:50:18'),
(37, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tempor tempor magna sit amet semper. Donec volutpat velit iaculis nulla vulputate, ac pretium libero auctor. Aliquam placerat sed purus vitae sodales. In eu lorem non justo ultricies tincidunt. Nunc at felis id ligula dictum gravida. Fusce id finibus justo, quis finibus nunc. Suspendisse elementum dignissim lectus in cursus. Cras pellentesque sollicitudin nunc at mattis. Curabitur eleifend, mi at vulputate tincidunt, arcu metus iaculis risus, sed elementum nulla odio quis mauris. Integer vulputate luctus pretium. Vestibulum mollis ligula magna, sit amet scelerisque nisi porttitor a.', 'transformery5.jpg', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/AntcyqJ6brc\" frameborder=\"0\" allowfullscreen></iframe>', 'transformers5', 0, '2017-11-14 16:52:36'),
(38, 'Начав просмотр фильма «Бегущий по лезвию 2049», зритель узнает о том, что Рик Декард долгое время пытался оставить свою работу ловца сбежавших андроидов. Надеясь уйти на заслуженный отпуск, он был вызван начальство, требующим отыскать репликантов, обладающих высоким уровнем интеллекта и самосознанием. \n\nПолучив в напарники типичного карьериста, он полагал, что эта миссия станет завершением его карьеры. Планируя отыскать и уничтожить бежавших репликантов, Рик и представить не мог, к чему его приведут поиски. Столкнувшись с уникальной ситуации, он понял, что для этого дела нужен особый подход. \n\nПроходит несколько десятков лет и фигура Рика Декарда становится одной из самых обсуждаемых в кругах высокопоставленных людей. Никто не знает, что случилось с ним после выполнения задания и чем все закончилось. Куда он делся и почему не объявился? Жив ли он или пал смертью в борьбе с репликатами? На все эти вопросы предстоит ответить главному герою фильма «Бегущий по лезвию 2049», просмотр которого можно осуществить на нашем сайте в режиме онлайн, полицейскому Кею. Он должен найти пропавшего Рика и узнать все о его расследовании.', 'blade_runner_2049.jpg', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/gCcx85zbxz4\" frameborder=\"0\" allowfullscreen></iframe>', '2049', 0, '2017-11-14 16:58:23'),
(39, 'В центре истории фильма «Чудо-женщина» находится амазонка Диана, родившаяся и выросшая на острове Темискира. С раннего детства она мечтала стать отважным...', 'chudo-zhenschina.jpg', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/VSB4wGIdDwo\" frameborder=\"0\" allowfullscreen></iframe>', 'wonder-woman', 0, '2017-11-14 16:59:53');

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `login` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id`, `login`, `password`, `email`) VALUES
(1, 'sasha', '1234567', 'mail@ua.ua');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `items`
--
ALTER TABLE `items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
