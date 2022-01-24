-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         10.4.22-MariaDB - mariadb.org binary distribution
-- SO del servidor:              Win64
-- HeidiSQL Versión:             11.3.0.6295
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Volcando estructura de base de datos para tripapp
CREATE DATABASE IF NOT EXISTS `tripapp` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `tripapp`;

-- Volcando estructura para tabla tripapp.auth_activation_attempts
CREATE TABLE IF NOT EXISTS `auth_activation_attempts` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `ip_address` varchar(255) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla tripapp.auth_activation_attempts: ~0 rows (aproximadamente)
DELETE FROM `auth_activation_attempts`;
/*!40000 ALTER TABLE `auth_activation_attempts` DISABLE KEYS */;
/*!40000 ALTER TABLE `auth_activation_attempts` ENABLE KEYS */;

-- Volcando estructura para tabla tripapp.auth_groups
CREATE TABLE IF NOT EXISTS `auth_groups` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla tripapp.auth_groups: ~2 rows (aproximadamente)
DELETE FROM `auth_groups`;
/*!40000 ALTER TABLE `auth_groups` DISABLE KEYS */;
INSERT INTO `auth_groups` (`id`, `name`, `description`) VALUES
	(1, 'admin', 'admin_group'),
	(2, 'customer', 'customer_group');
/*!40000 ALTER TABLE `auth_groups` ENABLE KEYS */;

-- Volcando estructura para tabla tripapp.auth_groups_permissions
CREATE TABLE IF NOT EXISTS `auth_groups_permissions` (
  `group_id` int(11) unsigned NOT NULL DEFAULT 0,
  `permission_id` int(11) unsigned NOT NULL DEFAULT 0,
  KEY `auth_groups_permissions_permission_id_foreign` (`permission_id`),
  KEY `group_id_permission_id` (`group_id`,`permission_id`),
  CONSTRAINT `auth_groups_permissions_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `auth_groups` (`id`) ON DELETE CASCADE,
  CONSTRAINT `auth_groups_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `auth_permissions` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla tripapp.auth_groups_permissions: ~0 rows (aproximadamente)
DELETE FROM `auth_groups_permissions`;
/*!40000 ALTER TABLE `auth_groups_permissions` DISABLE KEYS */;
/*!40000 ALTER TABLE `auth_groups_permissions` ENABLE KEYS */;

-- Volcando estructura para tabla tripapp.auth_groups_users
CREATE TABLE IF NOT EXISTS `auth_groups_users` (
  `group_id` int(11) unsigned NOT NULL DEFAULT 0,
  `user_id` int(11) unsigned NOT NULL DEFAULT 0,
  KEY `auth_groups_users_user_id_foreign` (`user_id`),
  KEY `group_id_user_id` (`group_id`,`user_id`),
  CONSTRAINT `auth_groups_users_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `auth_groups` (`id`) ON DELETE CASCADE,
  CONSTRAINT `auth_groups_users_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla tripapp.auth_groups_users: ~2 rows (aproximadamente)
DELETE FROM `auth_groups_users`;
/*!40000 ALTER TABLE `auth_groups_users` DISABLE KEYS */;
INSERT INTO `auth_groups_users` (`group_id`, `user_id`) VALUES
	(1, 3),
	(1, 4);
/*!40000 ALTER TABLE `auth_groups_users` ENABLE KEYS */;

-- Volcando estructura para tabla tripapp.auth_logins
CREATE TABLE IF NOT EXISTS `auth_logins` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `ip_address` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `user_id` int(11) unsigned DEFAULT NULL,
  `date` datetime NOT NULL,
  `success` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `email` (`email`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla tripapp.auth_logins: ~17 rows (aproximadamente)
DELETE FROM `auth_logins`;
/*!40000 ALTER TABLE `auth_logins` DISABLE KEYS */;
INSERT INTO `auth_logins` (`id`, `ip_address`, `email`, `user_id`, `date`, `success`) VALUES
	(1, '::1', 'canopus44@gmail.com', NULL, '2022-01-11 19:20:58', 0),
	(2, '::1', 'canopus44@outlook.es', 4, '2022-01-11 19:24:04', 1),
	(3, '::1', 'admin', NULL, '2022-01-22 21:02:11', 0),
	(4, '::1', 'admin', NULL, '2022-01-22 21:10:00', 0),
	(5, '::1', 'admin', NULL, '2022-01-22 21:10:51', 0),
	(6, '::1', 'canopus44@gmail.com', 3, '2022-01-22 21:11:03', 1),
	(7, '::1', 'admin', NULL, '2022-01-22 21:13:49', 0),
	(8, '::1', 'canopus44@gmail.com', 3, '2022-01-22 21:13:59', 1),
	(9, '::1', 'canopus44@gmail.com', 3, '2022-01-23 15:00:15', 1),
	(10, '::1', 'admin', NULL, '2022-01-23 15:08:33', 0),
	(11, '::1', 'admin', NULL, '2022-01-23 15:08:44', 0),
	(12, '::1', 'admin', NULL, '2022-01-23 15:08:55', 0),
	(13, '::1', 'canopus44@gmail.com', 3, '2022-01-23 15:09:06', 1),
	(14, '::1', 'canopus44@gmail.com', 3, '2022-01-23 16:14:17', 1),
	(15, '::1', 'admin', NULL, '2022-01-23 16:23:17', 0),
	(16, '::1', 'admin', NULL, '2022-01-23 16:23:28', 0),
	(17, '::1', 'canopus44@gmail.com', 3, '2022-01-23 16:23:40', 1);
/*!40000 ALTER TABLE `auth_logins` ENABLE KEYS */;

-- Volcando estructura para tabla tripapp.auth_permissions
CREATE TABLE IF NOT EXISTS `auth_permissions` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla tripapp.auth_permissions: ~0 rows (aproximadamente)
DELETE FROM `auth_permissions`;
/*!40000 ALTER TABLE `auth_permissions` DISABLE KEYS */;
/*!40000 ALTER TABLE `auth_permissions` ENABLE KEYS */;

-- Volcando estructura para tabla tripapp.auth_reset_attempts
CREATE TABLE IF NOT EXISTS `auth_reset_attempts` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla tripapp.auth_reset_attempts: ~0 rows (aproximadamente)
DELETE FROM `auth_reset_attempts`;
/*!40000 ALTER TABLE `auth_reset_attempts` DISABLE KEYS */;
/*!40000 ALTER TABLE `auth_reset_attempts` ENABLE KEYS */;

-- Volcando estructura para tabla tripapp.auth_tokens
CREATE TABLE IF NOT EXISTS `auth_tokens` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `selector` varchar(255) NOT NULL,
  `hashedValidator` varchar(255) NOT NULL,
  `user_id` int(11) unsigned NOT NULL,
  `expires` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `auth_tokens_user_id_foreign` (`user_id`),
  KEY `selector` (`selector`),
  CONSTRAINT `auth_tokens_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla tripapp.auth_tokens: ~0 rows (aproximadamente)
DELETE FROM `auth_tokens`;
/*!40000 ALTER TABLE `auth_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `auth_tokens` ENABLE KEYS */;

-- Volcando estructura para tabla tripapp.auth_users_permissions
CREATE TABLE IF NOT EXISTS `auth_users_permissions` (
  `user_id` int(11) unsigned NOT NULL DEFAULT 0,
  `permission_id` int(11) unsigned NOT NULL DEFAULT 0,
  KEY `auth_users_permissions_permission_id_foreign` (`permission_id`),
  KEY `user_id_permission_id` (`user_id`,`permission_id`),
  CONSTRAINT `auth_users_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `auth_permissions` (`id`) ON DELETE CASCADE,
  CONSTRAINT `auth_users_permissions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla tripapp.auth_users_permissions: ~0 rows (aproximadamente)
DELETE FROM `auth_users_permissions`;
/*!40000 ALTER TABLE `auth_users_permissions` DISABLE KEYS */;
/*!40000 ALTER TABLE `auth_users_permissions` ENABLE KEYS */;

-- Volcando estructura para tabla tripapp.calificacionlugar
CREATE TABLE IF NOT EXISTS `calificacionlugar` (
  `idCalificacion` int(11) NOT NULL,
  `intCalificacion` int(11) NOT NULL,
  `IdLugarCalificado` int(11) NOT NULL,
  PRIMARY KEY (`idCalificacion`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Volcando datos para la tabla tripapp.calificacionlugar: ~0 rows (aproximadamente)
DELETE FROM `calificacionlugar`;
/*!40000 ALTER TABLE `calificacionlugar` DISABLE KEYS */;
/*!40000 ALTER TABLE `calificacionlugar` ENABLE KEYS */;

-- Volcando estructura para tabla tripapp.comentarios
CREATE TABLE IF NOT EXISTS `comentarios` (
  `IdComentario` int(11) NOT NULL,
  `IdUsuaComen` int(10) NOT NULL,
  `IdLugarComen` int(10) NOT NULL,
  `strComentario` varchar(100) NOT NULL,
  PRIMARY KEY (`IdComentario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Volcando datos para la tabla tripapp.comentarios: ~0 rows (aproximadamente)
DELETE FROM `comentarios`;
/*!40000 ALTER TABLE `comentarios` DISABLE KEYS */;
/*!40000 ALTER TABLE `comentarios` ENABLE KEYS */;

-- Volcando estructura para tabla tripapp.departamento
CREATE TABLE IF NOT EXISTS `departamento` (
  `IdDepartamento` int(11) NOT NULL,
  `IdPaisDep` int(11) NOT NULL,
  `strNombreDepartamento` varchar(80) NOT NULL,
  PRIMARY KEY (`IdDepartamento`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Volcando datos para la tabla tripapp.departamento: ~0 rows (aproximadamente)
DELETE FROM `departamento`;
/*!40000 ALTER TABLE `departamento` DISABLE KEYS */;
/*!40000 ALTER TABLE `departamento` ENABLE KEYS */;

-- Volcando estructura para tabla tripapp.imageneslugar
CREATE TABLE IF NOT EXISTS `imageneslugar` (
  `idImagenesLugar` int(11) NOT NULL,
  `IdLugarImagen` int(11) NOT NULL,
  `ImagenesLugar` blob NOT NULL,
  PRIMARY KEY (`idImagenesLugar`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Volcando datos para la tabla tripapp.imageneslugar: ~0 rows (aproximadamente)
DELETE FROM `imageneslugar`;
/*!40000 ALTER TABLE `imageneslugar` DISABLE KEYS */;
/*!40000 ALTER TABLE `imageneslugar` ENABLE KEYS */;

-- Volcando estructura para tabla tripapp.lugarturistico
CREATE TABLE IF NOT EXISTS `lugarturistico` (
  `IdLugarTuristico` int(11) NOT NULL,
  `IdMunLug` int(11) NOT NULL,
  `Nombre` varchar(100) NOT NULL,
  `Descripcion` varchar(100) NOT NULL,
  PRIMARY KEY (`IdLugarTuristico`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Volcando datos para la tabla tripapp.lugarturistico: ~0 rows (aproximadamente)
DELETE FROM `lugarturistico`;
/*!40000 ALTER TABLE `lugarturistico` DISABLE KEYS */;
/*!40000 ALTER TABLE `lugarturistico` ENABLE KEYS */;

-- Volcando estructura para tabla tripapp.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla tripapp.migrations: ~0 rows (aproximadamente)
DELETE FROM `migrations`;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
	(1, '2017-11-20-223112', 'Myth\\Auth\\Database\\Migrations\\CreateAuthTables', 'default', 'Myth\\Auth', 1641947277, 1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- Volcando estructura para tabla tripapp.municipio
CREATE TABLE IF NOT EXISTS `municipio` (
  `IdMunicipio` int(11) NOT NULL,
  `IdDeparMuni` int(11) NOT NULL,
  `NombreMunicipio` varchar(80) NOT NULL,
  PRIMARY KEY (`IdMunicipio`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Volcando datos para la tabla tripapp.municipio: ~0 rows (aproximadamente)
DELETE FROM `municipio`;
/*!40000 ALTER TABLE `municipio` DISABLE KEYS */;
/*!40000 ALTER TABLE `municipio` ENABLE KEYS */;

-- Volcando estructura para tabla tripapp.pais
CREATE TABLE IF NOT EXISTS `pais` (
  `IdPais` int(11) NOT NULL,
  `NombrePais` varchar(65) NOT NULL,
  PRIMARY KEY (`IdPais`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Volcando datos para la tabla tripapp.pais: ~0 rows (aproximadamente)
DELETE FROM `pais`;
/*!40000 ALTER TABLE `pais` DISABLE KEYS */;
/*!40000 ALTER TABLE `pais` ENABLE KEYS */;

-- Volcando estructura para tabla tripapp.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `username` varchar(30) DEFAULT NULL,
  `password_hash` varchar(255) NOT NULL,
  `reset_hash` varchar(255) DEFAULT NULL,
  `reset_at` datetime DEFAULT NULL,
  `reset_expires` datetime DEFAULT NULL,
  `activate_hash` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `status_message` varchar(255) DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 0,
  `force_pass_reset` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla tripapp.users: ~3 rows (aproximadamente)
DELETE FROM `users`;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `email`, `username`, `password_hash`, `reset_hash`, `reset_at`, `reset_expires`, `activate_hash`, `status`, `status_message`, `active`, `force_pass_reset`, `created_at`, `updated_at`, `deleted_at`) VALUES
	(3, 'canopus44@gmail.com', 'admin', '$2y$10$3NvdDMtlrURkiQjgnYIevOBGxCizJBYysD6jIeeC.SG8Feo79RGl6', NULL, NULL, NULL, '(NULL)', NULL, NULL, 1, 0, '2022-01-11 19:17:42', '2022-01-11 19:17:42', NULL),
	(4, 'canopus44@outlook.es', 'admin2', '$2y$10$EGlQoU91UH3BX/3NxTkRaua3y.lP6NyBfh73SD2avJlPEabNRTrjO', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2022-01-11 19:23:50', '2022-01-11 19:23:50', NULL);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
