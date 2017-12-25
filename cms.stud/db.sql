-- --------------------------------------------------------
-- Хост:                         127.0.0.1
-- Версия сервера:               5.5.45 - MySQL Community Server (GPL)
-- Операционная система:         Win32
-- HeidiSQL Версия:              9.3.0.5108
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Дамп структуры для таблица newobj.news
DROP TABLE IF EXISTS `news`;
CREATE TABLE IF NOT EXISTS `news` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(250) NOT NULL,
  `text` text NOT NULL,
  `title` varchar(250) NOT NULL DEFAULT '',
  `status` smallint(1) unsigned NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- Дамп данных таблицы newobj.news: ~5 rows (приблизительно)
/*!40000 ALTER TABLE `news` DISABLE KEYS */;
INSERT INTO `news` (`id`, `name`, `text`, `title`, `status`) VALUES
	(1, 'Новость номер 1', 'ваиывапт щвыфатпщ выфапхщывапщт ывхащыща щащвавтвты щиоыоыщвыоваах хщотапвы ', 'Новость номер 1 - TITLE', 1),
	(2, 'Новость номер 2', '234524323 4234 234 52 52435 2354 234 524352435 2345 245 2465245 245 245 2456 356  345674357 34 735635 35 735 7357 3573576 3567 35763576 3567 3576 34675 357 357357 357 357 357357 35 7357 ', 'Новость номер 2 - TITLE', 1),
	(3, 'Новость номер 3', 'fgh edfg sdfh edsfh ef hewfgh egfh egfh egfh eg fhegf heh egh egfh koegfhmn oegfhn oegf hnoeg hng hfg jfnef jfjfnjfngwjrfjfgnjfngwfnwrg o gnwojgn wjfnej ewfh eondjgfodnh opsnwon wong wojfd nwofjn ofjhg', 'Новость номер 3 - TITLE', 1),
	(4, 'Новость номер 4', '321432 ыфваыва 234234 ап выар ыч 321432 ыфваыва 234234 ап выар ыч 321432 ыфваыва 234234 ап выар ыч 321432 ыфваыва 234234 ап выар ыч 321432 ыфваыва 234234 ап выар ыч 321432 ыфваыва 234234 ап выар ыч 321432 ыфваыва 234234 ап выар ыч 321432 ыфваыва 234234 ап выар ыч 321432 ыфваыва 234234 ап выар ыч 321432 ыфваыва 234234 ап выар ыч 321432 ыфваыва 234234 ап выар ыч 321432 ыфваыва 234234 ап выар ыч 321432 ыфваыва 234234 ап выар ыч 321432 ыфваыва 234234 ап выар ыч ', 'Новость номер 4 - TITLE', 1),
	(5, 'Новость номер 5', 'маип тр ьо  бьлб 565 46 маип тр ьо  бьлб 565 46 маип тр ьо  бьлб 565 46 маип тр ьо  бьлб 565 46 маип тр ьо  бьлб 565 46 маип тр ьо  бьлб 565 46 маип тр ьо  бьлб 565 46 маип тр ьо  бьлб 565 46 маип тр ьо  бьлб 565 46 маип тр ьо  бьлб 565 46 маип тр ьо  бьлб 565 46 маип тр ьо  бьлб 565 46 маип тр ьо  бьлб 565 46 маип тр ьо  бьлб 565 46 ', 'Новость номер 5 - TITLE', 1);
/*!40000 ALTER TABLE `news` ENABLE KEYS */;

-- Дамп структуры для таблица newobj.products
DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `articul` varchar(50) NOT NULL,
  `price` int(10) unsigned NOT NULL DEFAULT '0',
  `quantity` int(10) unsigned NOT NULL DEFAULT '0',
  `status` smallint(2) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Дамп данных таблицы newobj.products: ~0 rows (приблизительно)
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
/*!40000 ALTER TABLE `products` ENABLE KEYS */;

-- Дамп структуры для таблица newobj.url_alias
DROP TABLE IF EXISTS `url_alias`;
CREATE TABLE IF NOT EXISTS `url_alias` (
  `id_url_alias` int(11) NOT NULL AUTO_INCREMENT,
  `url` varchar(250) NOT NULL,
  `alias` varchar(250) NOT NULL,
  PRIMARY KEY (`id_url_alias`),
  UNIQUE KEY `Индекс 2` (`url`),
  UNIQUE KEY `Индекс 3` (`alias`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

-- Дамп данных таблицы newobj.url_alias: ~9 rows (приблизительно)
/*!40000 ALTER TABLE `url_alias` DISABLE KEYS */;
INSERT INTO `url_alias` (`id_url_alias`, `url`, `alias`) VALUES
	(1, 'controller=news', 'news'),
	(4, 'news_id=1', 'my1news.html'),
	(5, 'news_id=2', 'my2news.html'),
	(6, 'news_id=3', 'my3news.html'),
	(7, 'news_id=4', 'my4news.html'),
	(9, 'news_id=5', 'my5news.html'),
	(10, 'controller=admin', 'admin'),
	(12, 'controller=renews', 'renews'),
	(13, 'controller=excel', 'excel');
/*!40000 ALTER TABLE `url_alias` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
