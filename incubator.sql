-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июн 10 2019 г., 17:03
-- Версия сервера: 5.6.41
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
-- База данных: `incubator`
--

-- --------------------------------------------------------

--
-- Структура таблицы `paste`
--

CREATE TABLE `paste` (
  `id` int(11) NOT NULL,
  `text` text NOT NULL,
  `time` datetime NOT NULL,
  `access` varchar(8) NOT NULL,
  `title` varchar(30) NOT NULL,
  `hash` text NOT NULL,
  `user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `paste`
--

INSERT INTO `paste` (`id`, `text`, `time`, `access`, `title`, `hash`, `user`) VALUES
(22, 'vvv', '2019-06-03 15:05:07', 'public', '232', '?46fef8b2', 5),
(23, 'vvv', '2019-06-04 17:55:10', 'public', '2321111', '?f1e339b6', 5),
(24, 'vvv', '2019-06-04 17:55:12', 'public', 'fgfdg', '?f4b37ea8', 5),
(25, 'vvv', '2019-06-04 15:05:16', 'public', 'wqqqq', '?43aebfac', 5),
(26, 'vvv', '2019-06-04 15:05:18', 'public', '6543', '?9a88fca1', 5),
(27, 'dfgfhgj432%^$#', '2019-06-04 15:05:25', 'public', '6543', '?2d953da5', 5),
(28, 'dfgfhgj432%^$#', '2019-06-04 15:05:28', 'public', 'ff', '?9028729d', 5),
(29, 'dsss', '2019-06-04 15:07:48', 'public', 'dfdf', '?2735b399', 1),
(30, 'ss', '2019-06-04 15:08:03', 'public', 'sss', '?f4046369', 0),
(31, 'dss', '2019-06-04 15:37:22', 'public', '15-37', '?4319a26d', 0),
(32, 'sd', '2019-06-04 15:37:32', 'public', 'sa', '?9a3fe160', 0),
(33, 'вава', '2019-06-07 11:39:28', 'public', 'вава', '?2d222064', 0),
(34, 'вава', '2019-06-07 11:39:37', 'public', 'вава', '?2872677a', 0),
(35, 'пвапвп', '2019-06-07 11:40:03', 'public', 'Anton', '?9f6fa67e', 0),
(36, 'hjhj', '2019-06-07 11:44:19', 'public', 'hjhj', '?4649e573', 1),
(37, 'vbvb', '2019-06-07 11:52:24', 'public', 'vbvb', '?f1542477', 1),
(38, 'dfdf', '2019-06-07 14:57:48', 'public', 'Anton', '?4ce96b4f', 0),
(39, 'hjkl', '2019-06-07 14:59:21', 'public', 'First', '?fbf4aa4b', 0),
(40, 'dfdf', '2019-06-07 15:00:41', 'public', 'dfdfd', '?8e7aac5e', 0),
(41, 'sdsd', '2019-06-07 15:07:40', 'public', 'sdsd', '?39676d5a', 0),
(42, 'dfdf', '2019-06-07 18:54:03', 'public', 'edfdf', '?e0412e57', 5),
(43, 'dfdf', '2019-06-07 18:54:04', 'public', 'edfdf', '?575cef53', 5),
(44, 'dfdf', '2019-06-07 18:54:04', 'public', 'edfdf', '?520ca84d', 5),
(45, 'dfdf', '2019-06-07 18:54:05', 'public', 'edfdf', '?e5116949', 5),
(46, 'dfdf', '2019-06-07 18:54:05', 'public', 'edfdf', '?3c372a44', 5),
(47, 'dfdfsss', '2019-06-07 18:54:07', 'public', 'edfdf', '?8b2aeb40', 5),
(48, 'dfdfsss', '2019-06-07 18:54:08', 'public', 'w2323', '?3697a478', 5),
(49, 'dfdfsss', '2019-06-07 18:54:09', 'public', 'w2323', '?818a657c', 5),
(50, 'dfdfsss', '2019-06-07 18:54:09', 'public', 'w2323', '?52bbb58c', 5),
(51, 'dfdfsss', '2019-06-07 18:54:10', 'public', 'w2111113', '?e5a67488', 5),
(52, 'dfdfsss', '2019-06-07 18:54:10', 'public', 'w2111113', '?3c803785', 5),
(53, 'dfdfsss', '2019-06-07 18:54:13', 'public', 'w223432tgf11113', '?8b9df681', 5),
(54, 'dfdfsss', '2019-06-07 18:54:19', 'public', '3345', '?8ecdb19f', 5),
(55, 'fdfdf', '2019-06-08 09:04:23', 'public', 'dfdfdf', '?39d0709b', 5),
(56, 'fdfdf', '2019-06-08 09:04:24', 'public', 'dfdfdf', '?e0f63396', 5),
(57, 'fdfdf', '2019-06-08 09:04:24', 'public', 'dfdfdf', '?57ebf292', 5),
(58, 'fdfdf', '2019-06-08 09:04:24', 'public', 'dfdfdf', '?ea56bdaa', 5),
(59, 'fdfdf', '2019-06-08 09:04:25', 'public', 'dfdfdf', '?5d4b7cae', 5),
(60, 'fdfdf', '2019-06-08 09:04:25', 'public', 'dfdfdf', '?81e45efe', 5),
(61, 'fdfdf', '2019-06-08 09:04:26', 'public', 'dfdfdf222', '?36f99ffa', 5),
(62, 'fdfdf', '2019-06-08 09:04:27', 'public', 'dfdfdf222', '?efdfdcf7', 5),
(63, 'fdfdf', '2019-06-08 09:04:28', 'public', '1111', '?58c21df3', 5),
(64, 'fdfdf', '2019-06-08 09:04:29', 'public', '1111', '?5d925aed', 5),
(65, 'fdfdf', '2019-06-08 09:04:31', 'public', '11112323', '?ea8f9be9', 5),
(66, 'sdsd', '2019-06-08 09:07:06', 'public', 'вава', '?33a9d8e4', 5),
(67, 'sdsd', '2019-06-08 09:07:06', 'public', 'вава', '?84b419e0', 5),
(68, 'sdsd', '2019-06-08 09:07:07', 'public', 'вава', '?390956d8', 5),
(69, 'sdsd', '2019-06-08 09:07:07', 'public', 'вава', '?8e1497dc', 5),
(70, 'sdsd', '2019-06-08 09:07:07', 'public', 'вава', '?5d25472c', 5),
(71, 'sdsd', '2019-06-08 09:07:08', 'public', 'вава', '?ea388628', 5),
(72, 'sdsd', '2019-06-08 09:07:08', 'public', 'вава', '?331ec525', 5),
(73, 'sdsd', '2019-06-08 09:07:08', 'public', 'вава', '?84030421', 5),
(74, 'sdsd', '2019-06-08 09:07:09', 'public', 'вава', '?8153433f', 5),
(75, 'sdsd', '2019-06-08 09:07:09', 'public', 'вава', '?364e823b', 5),
(76, 'df', '2019-06-08 09:08:23', 'public', 'First', '?ef68c136', 5),
(77, 'ddd', '2019-06-08 09:38:11', 'public', 'dfdf', '?58750032', 5),
(78, 's', '2019-06-08 09:38:31', 'public', 'Anton', '?e5c84f0a', 5),
(79, '', '2019-06-08 09:38:49', 'public', 'j', '?52d58e0e', 5),
(80, 'пап', '2019-06-08 10:22:59', 'public', 'пап', '?7518c091', 5),
(81, 'sd', '2019-06-08 10:25:33', 'private', 'Private', '?c2050195', 1),
(82, '<html>\r\n<head>\r\n<title>Incubator</title>\r\n<meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">\r\n  <script src=\"http://code.jquery.com/jquery-1.11.2.min.js\"></script>\r\n  <script src=\"https://cdn.rawgit.com/google/code-prettify/master/loader/run_prettify.js\"></script>\r\n   <link rel=\"stylesheet\" href=\"css.css\" type=\"text/css\" />\r\n   </head>\r\n      <script>', '2019-06-08 10:31:11', 'public', 'Anton', '?1b234298', 0),
(83, '<title>Incubator</title>\r\n<meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">\r\n  <script src=\"http://code.jquery.com/jquery-1.11.2.min.js\"></script>\r\n  <script src=\"https://cdn.rawgit.com/google/code-prettify/master/loader/run_prettify.js\"></script>\r\n   <link rel=\"stylesheet\" href=\"css.css\" type=\"text/css\" />\r\n   </head>\r\n      <script>\r\n      ', '2019-06-08 10:35:05', 'public', 'sss', '?ac3e839c', 0),
(84, '<html>\r\n<head>\r\n<title>Incubator</title>\r\n<meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">\r\n  <script src=\"http://code.jquery.com/jquery-1.11.2.min.js\"></script>\r\n  <script src=\"https://cdn.rawgit.com/google/code-prettify/master/loader/run_prettify.js\"></script>\r\n   <link rel=\"stylesheet\" href=\"css.css\" type=\"text/css\" />\r\n   </head>\r\n      <script>\r\n      \r\n\r\n      $(document).ready(function(){\r\n         $(\"#form\").submit(function(){\r\n            \r\n            $.ajax({\r\n               type: \"POST\",\r\n              url:\"calc.php\",\r\n                    data: $(this).serialize(),\r\n                    dataType:\"html\",\r\n                    \r\n                    \r\n                    \r\n\r\n            }).done(function(data){\r\n              document.getElementById(\"url\").innerHTML=data;\r\n\r\n         });\r\n         return false \r\n      });\r\n         });\r\n\r\n      </script>\r\n   \r\n  \r\n\r\n\r\n<body>\r\n<div>\r\n<nav class=\"two\">\r\n\r\n  <ul>', '2019-06-08 10:39:28', 'public', 'ddd', '?a96ec482', 0),
(85, '<html>\r\n<head>\r\n<title>Incubator</title>\r\n<meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">\r\n  <script src=\"http://code.jquery.com/jquery-1.11.2.min.js\"></script>\r\n  <script src=\"https://google-code-prettify.googlecode.com/svn/loader/run_prettify.js\"></script>\r\n   <link rel=\"stylesheet\" href=\"css.css\" type=\"text/css\" />\r\n   </head>\r\n      <script>\r\n      \r\n', '2019-06-08 10:49:58', 'public', 'ввв', '?1e730586', 0),
(86, 'd', '2019-06-08 13:59:51', 'public', 'd', '?c755468b', 5),
(87, 'sdsadsad', '2019-06-08 15:00:42', 'private', 'sdsd', '?7048878f', 1),
(88, 'sdsadsad', '2019-06-08 15:01:27', 'unlisted', 'sdsd', '?cdf5c8b7', 1),
(89, 'vcxvc', '2019-06-08 15:32:37', 'public', 'vdv', '?7ae809b3', 5),
(90, '', '2019-06-08 15:33:17', 'public', 'd', '?a9d9d943', 5),
(91, 's', '2019-06-08 15:43:34', 'public', 'First', '?1ec41847', 0),
(92, '', '2019-06-09 17:12:07', 'public', 'fdf', '?c7e25b4a', 5),
(93, 'укук', '2019-06-09 18:03:55', 'public', 'кук', '?70ff9a4e', 5);

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `login` varchar(16) NOT NULL,
  `pass` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id`, `login`, `pass`) VALUES
(1, 'anton99hj', '54321qwert'),
(2, 'racks', '123'),
(3, 'new_account', '1234'),
(5, '123', '11'),
(6, '13', '12');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `paste`
--
ALTER TABLE `paste`
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
-- AUTO_INCREMENT для таблицы `paste`
--
ALTER TABLE `paste`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=94;

--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
