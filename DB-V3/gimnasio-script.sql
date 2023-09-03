-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         8.0.30 - MySQL Community Server - GPL
-- SO del servidor:              Win64
-- HeidiSQL Versión:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Volcando estructura de base de datos para gimnasio
CREATE DATABASE IF NOT EXISTS `gimnasio` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `gimnasio`;

-- Volcando estructura para tabla gimnasio.clases
CREATE TABLE IF NOT EXISTS `clases` (
  `IDCLASE` int NOT NULL AUTO_INCREMENT,
  `IDSEDE` int NOT NULL,
  `NOMBRECLASE` varchar(50) NOT NULL,
  `DESCRIPCION` varchar(255) NOT NULL,
  `HORARIOS` varchar(100) NOT NULL,
  `IMGCLASES` varchar(100) NOT NULL,
  `CREATED_AT` timestamp NULL DEFAULT NULL,
  `UPDATED_AT` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`IDCLASE`),
  KEY `FK_clases_sedes` (`IDSEDE`),
  CONSTRAINT `FK_clases_sedes` FOREIGN KEY (`IDSEDE`) REFERENCES `sedes` (`IDSEDE`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Volcando datos para la tabla gimnasio.clases: ~0 rows (aproximadamente)

-- Volcando estructura para tabla gimnasio.elementos
CREATE TABLE IF NOT EXISTS `elementos` (
  `IDELEMTO_` int NOT NULL AUTO_INCREMENT,
  `IDSEDE` int NOT NULL,
  `TIPO` varchar(50) NOT NULL,
  `USO` varchar(100) NOT NULL,
  `FECHACOMPRA` date NOT NULL,
  `IMGELEMENTO` varchar(100) DEFAULT NULL,
  `CREATED_AT` timestamp NULL DEFAULT NULL,
  `UPDATED_AT` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`IDELEMTO_`),
  KEY `FK_elementos_sedes` (`IDSEDE`),
  CONSTRAINT `FK_elementos_sedes` FOREIGN KEY (`IDSEDE`) REFERENCES `sedes` (`IDSEDE`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Volcando datos para la tabla gimnasio.elementos: ~0 rows (aproximadamente)

-- Volcando estructura para tabla gimnasio.espacios
CREATE TABLE IF NOT EXISTS `espacios` (
  `IDESPACIO` int NOT NULL AUTO_INCREMENT,
  `IDSEDE` int NOT NULL,
  `TIPO` varchar(50) NOT NULL,
  `DESCRIPCION` varchar(255) NOT NULL,
  `IMGESPACIO` varchar(100) NOT NULL,
  `CREATED_AT` timestamp NULL DEFAULT NULL,
  `UPDATED_AT` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`IDESPACIO`),
  KEY `FK_espacios_sedes` (`IDSEDE`),
  CONSTRAINT `FK_espacios_sedes` FOREIGN KEY (`IDSEDE`) REFERENCES `sedes` (`IDSEDE`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Volcando datos para la tabla gimnasio.espacios: ~0 rows (aproximadamente)

-- Volcando estructura para tabla gimnasio.failed_jobs
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla gimnasio.failed_jobs: ~0 rows (aproximadamente)

-- Volcando estructura para tabla gimnasio.maquinas
CREATE TABLE IF NOT EXISTS `maquinas` (
  `IDEQUIPO` int NOT NULL AUTO_INCREMENT,
  `IDSEDE` int NOT NULL,
  `NOMBREMAQUINA` varchar(50) NOT NULL,
  `GRUPOMUSCULAR` varchar(50) NOT NULL,
  `FECHACOMPRA` date NOT NULL,
  `IMGMAQUINA` varchar(100) DEFAULT NULL,
  `CREATED_AT` timestamp NULL DEFAULT NULL,
  `UPDATED_AT` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`IDEQUIPO`),
  KEY `FK_maquinas_sedes` (`IDSEDE`),
  CONSTRAINT `FK_maquinas_sedes` FOREIGN KEY (`IDSEDE`) REFERENCES `sedes` (`IDSEDE`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Volcando datos para la tabla gimnasio.maquinas: ~0 rows (aproximadamente)

-- Volcando estructura para tabla gimnasio.membresias
CREATE TABLE IF NOT EXISTS `membresias` (
  `IDMEMBRESIA` int NOT NULL AUTO_INCREMENT,
  `id` int DEFAULT NULL,
  `id2` int DEFAULT NULL,
  `NOMBREMEMBRESIA` varchar(100) NOT NULL,
  `DESCRIPCION` varchar(255) NOT NULL,
  `PRECIO` decimal(10,0) NOT NULL,
  `DURACIONMESES` int NOT NULL,
  `PLANPAREJA` varchar(2) NOT NULL DEFAULT '',
  `CREATED_AT` timestamp NULL DEFAULT NULL,
  `UPDATED_AT` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`IDMEMBRESIA`),
  KEY `FK_membresias_users` (`id`),
  KEY `FK_membresias_users2` (`id2`),
  CONSTRAINT `FK_membresias_users` FOREIGN KEY (`id`) REFERENCES `users` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `FK_membresias_users2` FOREIGN KEY (`id2`) REFERENCES `users` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Volcando datos para la tabla gimnasio.membresias: ~6 rows (aproximadamente)
INSERT INTO `membresias` (`IDMEMBRESIA`, `id`, `id2`, `NOMBREMEMBRESIA`, `DESCRIPCION`, `PRECIO`, `DURACIONMESES`, `PLANPAREJA`, `CREATED_AT`, `UPDATED_AT`) VALUES
	(1, NULL, NULL, 'Plan Mensual', 'Un mes. ¡Máximo rendimiento!', 75000, 1, 'No', NULL, NULL),
	(2, NULL, NULL, 'Plan Bimestral', 'Dos meses. ¡Máximo rendimiento!', 130000, 2, 'No', NULL, NULL),
	(3, NULL, NULL, 'Plan Trimestral', 'Tres meses. ¡Máximo rendimiento!', 195000, 3, 'No', NULL, NULL),
	(4, NULL, NULL, 'Plan Semestral', 'Seis meses. ¡Máximo rendimiento!', 390000, 6, 'No', NULL, NULL),
	(5, NULL, NULL, 'Plan Anual', 'Un año. ¡Máximo rendimiento!', 760000, 12, 'No', NULL, NULL),
	(6, NULL, NULL, 'Plan Pareja', 'Un mes para pareja ¡Máximo rendimiento!', 130000, 1, 'Si', NULL, NULL);

-- Volcando estructura para tabla gimnasio.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla gimnasio.migrations: ~5 rows (aproximadamente)
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2014_10_12_000000_create_users_table', 1),
	(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
	(3, '2019_08_19_000000_create_failed_jobs_table', 1),
	(6, '2019_12_14_000001_create_personal_access_tokens_table', 2),
	(10, '2023_08_11_223054_create_permission_tables', 3),
	(11, '2023_08_11_224112_create_roles', 3);

-- Volcando estructura para tabla gimnasio.model_has_permissions
CREATE TABLE IF NOT EXISTS `model_has_permissions` (
  `permission_id` bigint unsigned NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`),
  CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla gimnasio.model_has_permissions: ~0 rows (aproximadamente)

-- Volcando estructura para tabla gimnasio.model_has_roles
CREATE TABLE IF NOT EXISTS `model_has_roles` (
  `role_id` bigint unsigned NOT NULL DEFAULT '2',
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint unsigned NOT NULL,
  PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`),
  CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla gimnasio.model_has_roles: ~1 rows (aproximadamente)
INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
	(1, 'App\\Models\\User', 1),
	(1, 'App\\Models\\User', 4);

-- Volcando estructura para tabla gimnasio.pagos
CREATE TABLE IF NOT EXISTS `pagos` (
  `IDPAGOS` int NOT NULL AUTO_INCREMENT,
  `IDMEMBRESIA` int NOT NULL,
  `id` int NOT NULL,
  `FECHAPAGO` date NOT NULL,
  `MONTOPAGO` decimal(10,0) NOT NULL,
  `ESTADOPAGO` varchar(50) NOT NULL,
  `CREATED_AT` timestamp NULL DEFAULT NULL,
  `UPDATED_AT` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`IDPAGOS`),
  KEY `FK_pagos_membresias` (`IDMEMBRESIA`),
  KEY `FK_pagos_users` (`id`),
  CONSTRAINT `FK_pagos_membresias` FOREIGN KEY (`IDMEMBRESIA`) REFERENCES `membresias` (`IDMEMBRESIA`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `FK_pagos_users` FOREIGN KEY (`id`) REFERENCES `users` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Volcando datos para la tabla gimnasio.pagos: ~0 rows (aproximadamente)

-- Volcando estructura para tabla gimnasio.password_reset_tokens
CREATE TABLE IF NOT EXISTS `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla gimnasio.password_reset_tokens: ~0 rows (aproximadamente)

-- Volcando estructura para tabla gimnasio.permissions
CREATE TABLE IF NOT EXISTS `permissions` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla gimnasio.permissions: ~0 rows (aproximadamente)

-- Volcando estructura para tabla gimnasio.personal_access_tokens
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla gimnasio.personal_access_tokens: ~0 rows (aproximadamente)

-- Volcando estructura para tabla gimnasio.roles
CREATE TABLE IF NOT EXISTS `roles` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla gimnasio.roles: ~2 rows (aproximadamente)
INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
	(1, 'administrador', 'web', '2023-08-15 02:22:52', '2023-08-15 02:22:52'),
	(2, 'cliente', 'web', '2023-08-15 02:22:52', '2023-08-15 02:22:52');

-- Volcando estructura para tabla gimnasio.role_has_permissions
CREATE TABLE IF NOT EXISTS `role_has_permissions` (
  `permission_id` bigint unsigned NOT NULL,
  `role_id` bigint unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`role_id`),
  KEY `role_has_permissions_role_id_foreign` (`role_id`),
  CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla gimnasio.role_has_permissions: ~0 rows (aproximadamente)

-- Volcando estructura para tabla gimnasio.sedes
CREATE TABLE IF NOT EXISTS `sedes` (
  `IDSEDE` int NOT NULL AUTO_INCREMENT,
  `CIUDAD` varchar(60) NOT NULL,
  `DIRECCION` varchar(100) NOT NULL,
  `HORARIOATENCION` varchar(100) NOT NULL,
  `DESCRIPCION` varchar(255) NOT NULL,
  `ESTADO` varchar(10) NOT NULL,
  `IMGSEDE` varchar(100) NOT NULL,
  `CREATED_AT` timestamp NULL DEFAULT NULL,
  `UPDATED_AT` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`IDSEDE`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Volcando datos para la tabla gimnasio.sedes: ~0 rows (aproximadamente)

-- Volcando estructura para tabla gimnasio.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `IDSEDE` int DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`),
  KEY `FK_users_sedes` (`IDSEDE`),
  CONSTRAINT `FK_users_sedes` FOREIGN KEY (`IDSEDE`) REFERENCES `sedes` (`IDSEDE`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla gimnasio.users: ~5 rows (aproximadamente)
INSERT INTO `users` (`id`, `IDSEDE`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, NULL, 'Dios', 'dios@test.com', NULL, '$2y$10$.U0ub4TOXRa7bw9E38WD/.Pi7r0Gcj1hKjWEJncPVjsF2AY1e0Cue', 'eDYlGdNFC8Y8q1tSQcdwlhvGE6JPRzEbR8rJHh0vdlIhcYu31WZbHhUm9wvG', '2023-08-12 03:55:28', '2023-08-12 03:55:28'),
	(2, NULL, 'diablo', 'diablo@test.com', NULL, '$2y$10$hs0kxP/zgMDDIwFCg6hrLu2uCEsa7sup3LlXycSDpAs902NZ0hOXq', NULL, '2023-08-15 00:17:04', '2023-08-15 00:17:04'),
	(3, NULL, 'angel', 'angel@test.com', NULL, '$2y$10$MdTnD06wVboShiB.Qsd5x.5yfvh9HgGAqKmaq575eNreHKcyfgIyO', NULL, '2023-08-15 02:13:34', '2023-08-15 02:13:34'),
	(4, NULL, 'luis', 'luis@test.com', NULL, '$2y$10$wGHXavpavYDty25SC5wZkORX5GzrWQM2kFe824f1ubfj0CIM/4/Ka', NULL, '2023-08-15 02:18:07', '2023-08-15 02:18:07'),
	(5, NULL, 'carlos', 'carlos@test.com', NULL, '$2y$10$Fhq4GHu1jva6EALY5MewReLB84yaBLcDmiZqo3vuKOInbrYr54SVq', NULL, '2023-08-15 02:39:39', '2023-08-15 02:39:39');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
