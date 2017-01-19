-- phpMyAdmin SQL Dump
-- version 4.0.10.10
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1:3306
-- Время создания: Янв 19 2017 г., 03:38
-- Версия сервера: 5.5.45
-- Версия PHP: 5.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `giddb`
--

-- --------------------------------------------------------

--
-- Структура таблицы `giddb`
--

CREATE TABLE IF NOT EXISTS `giddb` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `gid` text NOT NULL,
  `name` text NOT NULL,
  `screen_name` text NOT NULL,
  `is_closed` text NOT NULL,
  `type` text NOT NULL,
  `city` text NOT NULL,
  `country` text NOT NULL,
  `group_photo` text NOT NULL,
  `checkins` text NOT NULL,
  `updated` text NOT NULL,
  `description` text NOT NULL,
  `wiki_page` text NOT NULL,
  `members_count` text NOT NULL,
  `topics` text NOT NULL,
  `can_post` text NOT NULL,
  `can_see_all_posts` text NOT NULL,
  `activity` text NOT NULL,
  `status` text NOT NULL,
  `contacts1` text NOT NULL,
  `contacts2` text NOT NULL,
  `contacts3` text NOT NULL,
  `contacts4` text NOT NULL,
  `contacts5` text NOT NULL,
  `contacts6` text NOT NULL,
  `desc1` text NOT NULL,
  `desc2` text NOT NULL,
  `desc3` text NOT NULL,
  `desc4` text NOT NULL,
  `desc5` text NOT NULL,
  `desc6` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
