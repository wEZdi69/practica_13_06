-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июн 12 2024 г., 22:49
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
-- База данных: `kinzitaev_praktica`
--

-- --------------------------------------------------------

--
-- Структура таблицы `contacts`
--

CREATE TABLE `contacts` (
  `id_contacts` int NOT NULL,
  `txt_contacts` text NOT NULL,
  `txt_mail_contacts` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `contacts`
--

INSERT INTO `contacts` (`id_contacts`, `txt_contacts`, `txt_mail_contacts`) VALUES
(1, '+7 3522-55-86-99', 'bizavto@mail.ru');

-- --------------------------------------------------------

--
-- Структура таблицы `footer`
--

CREATE TABLE `footer` (
  `id_footer` int NOT NULL,
  `work_time_footer` text NOT NULL,
  `address_footer` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `footer`
--

INSERT INTO `footer` (`id_footer`, `work_time_footer`, `address_footer`) VALUES
(1, 'Пн-Птн: 08-30 до 18-30, Суб: 9-00 до 13-00', 'г.Курган, ул Дзержинского, д.68');

-- --------------------------------------------------------

--
-- Структура таблицы `overview`
--

CREATE TABLE `overview` (
  `id_overview` int NOT NULL,
  `txt_overview` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `overview`
--

INSERT INTO `overview` (`id_overview`, `txt_overview`) VALUES
(1, 'КАМАЗ — советская,  затем российская компания, производитель дизельных грузовых автомобилей и дизельных двигателей, действующий с 1976 года.');

-- --------------------------------------------------------

--
-- Структура таблицы `products`
--

CREATE TABLE `products` (
  `id_products` int NOT NULL,
  `img_products` varchar(100) NOT NULL,
  `txt_products` text NOT NULL,
  `link_products` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `products`
--

INSERT INTO `products` (`id_products`, `img_products`, `txt_products`, `link_products`) VALUES
(4, 'uploads/666398fc9afc2.png', 'Кепка Камаз-Мастер', 'https://bizavto.com/product/kepka-kamaz-master-vzroslyi-razmer-58'),
(5, 'uploads/6663992c41a09.png', 'Поло Камаз-Мастер', 'https://bizavto.com/product/polo-kamaz-master-siniaia-50-razmer'),
(6, 'uploads/6663994c24e1f.png', 'Футболка Ралли-Рейд Аргетина Боливия', 'https://bizavto.com/product/futbolka-ralli-reid-argetina-boliviia-zeltaia-48-razmer'),
(7, 'uploads/66639972c29cd.png', 'Ремень кожаный 105 см', 'https://bizavto.com/product/remen-kozanyi-105-sm'),
(8, 'uploads/666399a85b326.png', 'Ремень кожаный 115 см', 'https://bizavto.com/product/remen-kozanyi-115-sm');

-- --------------------------------------------------------

--
-- Структура таблицы `slider`
--

CREATE TABLE `slider` (
  `id_slider` int NOT NULL,
  `img_slider` varchar(100) NOT NULL,
  `txt_slider` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `slider`
--

INSERT INTO `slider` (`id_slider`, `img_slider`, `txt_slider`) VALUES
(2, 'uploads/666695911cce1.png', 'KAMAZ-53504-50'),
(3, 'uploads/666695dcc05f0.png', 'KAMAZ-65221-53'),
(4, 'uploads/666695f066f27.png', 'KAMAZ-65225-53');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id_users` int NOT NULL,
  `login` varchar(20) NOT NULL,
  `password` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id_users`, `login`, `password`) VALUES
(1, 'admin', 'admin');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id_contacts`);

--
-- Индексы таблицы `footer`
--
ALTER TABLE `footer`
  ADD PRIMARY KEY (`id_footer`);

--
-- Индексы таблицы `overview`
--
ALTER TABLE `overview`
  ADD PRIMARY KEY (`id_overview`);

--
-- Индексы таблицы `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id_products`);

--
-- Индексы таблицы `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id_slider`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_users`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id_contacts` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `footer`
--
ALTER TABLE `footer`
  MODIFY `id_footer` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `overview`
--
ALTER TABLE `overview`
  MODIFY `id_overview` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `products`
--
ALTER TABLE `products`
  MODIFY `id_products` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT для таблицы `slider`
--
ALTER TABLE `slider`
  MODIFY `id_slider` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id_users` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
