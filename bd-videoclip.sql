-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         10.3.16-MariaDB - mariadb.org binary distribution
-- SO del servidor:              Win64
-- HeidiSQL Versión:             10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Volcando estructura de base de datos para admin_table_laravel
CREATE DATABASE IF NOT EXISTS `admin_table_laravel` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `admin_table_laravel`;

-- Volcando estructura para tabla admin_table_laravel.configurations
CREATE TABLE IF NOT EXISTS `configurations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `direccion` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `horarios` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `social` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mensaje` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `popup` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `paginateA` int(11) DEFAULT NULL,
  `paginateB` int(11) DEFAULT NULL,
  `style` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla admin_table_laravel.configurations: ~1 rows (aproximadamente)
/*!40000 ALTER TABLE `configurations` DISABLE KEYS */;
INSERT INTO `configurations` (`id`, `direccion`, `email`, `phone`, `horarios`, `facebook`, `instagram`, `social`, `mensaje`, `popup`, `paginateA`, `paginateB`, `style`, `created_at`, `updated_at`, `deleted_at`) VALUES
	(1, '<p>Diagonal 73&nbsp;<br>E/ 28 y 29 N°3227<br>LA PLATA BS. AS&nbsp;</p>', 'nacho_lp@videocliplp.com.ar', '(221) 479-0087', '<p>Lu a Vie : 16 hs a 21:30 hs&nbsp;<br>Sabado: 16 hs a 21 hs<br>Domingo : 17 hs a 21 hs</p>', 'https://www.facebook.com/VIDEOCLIPLP.COM.AR/', 'https://www.instagram.com/videoclip_la_plata/', NULL, 'un mensaje', NULL, 6, 3, '0', NULL, '2019-08-23 01:38:40', NULL);
/*!40000 ALTER TABLE `configurations` ENABLE KEYS */;

-- Volcando estructura para tabla admin_table_laravel.img_sliders
CREATE TABLE IF NOT EXISTS `img_sliders` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `show` int(10) unsigned NOT NULL,
  `id_user` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_img_sliders_users` (`id_user`),
  CONSTRAINT `FK_img_sliders_users` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla admin_table_laravel.img_sliders: ~4 rows (aproximadamente)
/*!40000 ALTER TABLE `img_sliders` DISABLE KEYS */;
INSERT INTO `img_sliders` (`id`, `title`, `img`, `description`, `show`, `id_user`, `created_at`, `updated_at`, `deleted_at`) VALUES
	(2, 'Highcharts Stock Demo', 'inet.txt', 'holas', 1, 1, '2019-08-17 09:52:07', '2019-08-17 10:34:54', '2019-08-17 10:34:54'),
	(6, 'teteso', 'http://127.0.0.1:8000/slider_images/nOpVenx2HT0uWCjYkPSWfVbYePBL9BwIIqstFfxl.gif', 'kjkhjkhkj', 1, 1, '2019-08-17 10:27:17', '2019-08-17 10:34:50', '2019-08-17 10:34:50'),
	(7, 'aveng', 'http://127.0.0.1:8000/slider_images/SX2YVy8SvoElW5mrj1RfuM6eW1K4SxQb85qhogDN.gif', 'una slidcer de ejemplo', 1, 1, '2019-08-17 10:35:28', '2019-08-17 10:51:41', NULL),
	(8, 'slider 2', 'http://127.0.0.1:8000/slider_images/ECRZBEwXO3gV03v6USuc5oUBFCpzEynAFlm2zIdf.jpeg', 'un slider 2 de ejemplo', 1, 1, '2019-08-17 10:36:15', '2019-08-17 10:36:15', NULL);
/*!40000 ALTER TABLE `img_sliders` ENABLE KEYS */;

-- Volcando estructura para tabla admin_table_laravel.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla admin_table_laravel.migrations: ~8 rows (aproximadamente)
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2014_10_12_000000_create_users_table', 1),
	(2, '2014_10_12_100000_create_password_resets_table', 1),
	(3, '2019_08_17_185851_create_movie_categories_table', 2),
	(4, '2019_08_17_193755_create_movie_categories_table', 3),
	(5, '2019_08_17_194349_create_movie_categories_table', 4),
	(6, '2019_08_17_194651_create_movie_categories_table', 5),
	(7, '2019_08_17_221144_create_movies_table', 6),
	(8, '2019_08_18_201046_create_configurations_table', 7);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- Volcando estructura para tabla admin_table_laravel.movies
CREATE TABLE IF NOT EXISTS `movies` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `video` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `show` int(11) NOT NULL,
  `id_category` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `movies_id_category_foreign` (`id_category`),
  CONSTRAINT `movies_id_category_foreign` FOREIGN KEY (`id_category`) REFERENCES `movie_categories` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla admin_table_laravel.movies: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `movies` DISABLE KEYS */;
/*!40000 ALTER TABLE `movies` ENABLE KEYS */;

-- Volcando estructura para tabla admin_table_laravel.movie_categories
CREATE TABLE IF NOT EXISTS `movie_categories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla admin_table_laravel.movie_categories: ~3 rows (aproximadamente)
/*!40000 ALTER TABLE `movie_categories` DISABLE KEYS */;
INSERT INTO `movie_categories` (`id`, `name`, `created_at`, `updated_at`, `deleted_at`) VALUES
	(1, 'Thriller', '2019-08-17 19:47:47', '2019-08-17 19:47:47', NULL),
	(2, 'Infantil', '2019-08-19 14:03:24', '2019-08-19 14:15:38', NULL),
	(3, 'Drama', '2019-08-19 14:15:45', '2019-08-19 14:15:45', NULL);
/*!40000 ALTER TABLE `movie_categories` ENABLE KEYS */;

-- Volcando estructura para tabla admin_table_laravel.password_resets
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla admin_table_laravel.password_resets: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
	('brunoalvarado2805@gmail.com', '$2y$10$G6fKlnaKZjZ9/J8ylB01..SIPESiBQVGmwjNPF2LTqnZdJfmO8Ckq', '2019-08-14 00:27:52');
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;

-- Volcando estructura para tabla admin_table_laravel.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla admin_table_laravel.users: ~1 rows (aproximadamente)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 'Bruno', 'brunoalvarado2805@gmail.com', '2019-08-15 01:44:45', '$2y$10$F3N1uYWvX2gPeEIpiJSum.x/UeVLZ9931ZhJGkFxcVwhn.ZVefaGi', NULL, '2019-08-13 23:56:43', '2019-08-15 01:44:45'),
	(5, 'Bruno2', 'bru.no.es.unix@gmail.com', NULL, '$2y$10$przpcDVUdhRydtrJvoZC.uDiUbpulmG7IwTlxbfZr5.OigDSFAPS6', NULL, '2019-08-14 02:02:59', '2019-08-14 02:02:59');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
