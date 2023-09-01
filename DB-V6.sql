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
  `IDELEMENTO` int NOT NULL AUTO_INCREMENT,
  `IDSEDE` int NOT NULL,
  `NOMBRE` varchar(100) NOT NULL,
  `TIPO` varchar(50) NOT NULL,
  `USO` varchar(100) NOT NULL,
  `FECHACOMPRA` date NOT NULL,
  `IMGELEMENTO` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `SOPORTE` varchar(500) DEFAULT NULL,
  `CREATED_AT` timestamp NULL DEFAULT NULL,
  `UPDATED_AT` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`IDELEMENTO`) USING BTREE,
  KEY `FK_elementos_sedes` (`IDSEDE`),
  CONSTRAINT `FK_elementos_sedes` FOREIGN KEY (`IDSEDE`) REFERENCES `sedes` (`IDSEDE`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Volcando datos para la tabla gimnasio.elementos: ~10 rows (aproximadamente)
INSERT INTO `elementos` (`IDELEMENTO`, `IDSEDE`, `NOMBRE`, `TIPO`, `USO`, `FECHACOMPRA`, `IMGELEMENTO`, `SOPORTE`, `CREATED_AT`, `UPDATED_AT`) VALUES
	(1, 2, 'Barra Z', 'Barra', 'Variado', '2023-08-31', 'images/elementos/barraz.jpg', 'Soporte.pdf', NULL, NULL),
	(2, 1, 'Mancuernas 10kg', 'Equipo de Peso', 'Levantamiento de Pesas', '2022-03-15', 'images/elementos/mancuerna10kg.jpg', 'Soporte.pdf', NULL, NULL),
	(3, 1, 'Cuerda de Saltar ', 'Accesorio', 'Cardiovascular', '2023-01-10', 'enlace_imagen_cuerda ', 'Soporte.pdf', NULL, NULL),
	(4, 1, 'Banco de Pesas', 'Equipo de Peso', 'Levantamiento de Pesas', '2022-06-10', 'enlace_imagen_banco', 'Soporte.pdf', NULL, NULL),
	(5, 1, 'Cinta de Correr', 'Equipo de Cardio', 'Cardiovascular', '2021-11-25', 'enlace_imagen_cinta', 'Soporte.pdf', NULL, NULL),
	(6, 1, 'Pelotas de Peso', 'Accesorio', 'Entrenamiento Funcional', '2023-02-18', 'enlace_imagen_pelotas', 'Soporte.pdf', NULL, NULL),
	(7, 1, 'TRX', 'Accesorio', 'Entrenamiento Funcional', '2022-09-14', 'enlace_imagen_trx', 'Soporte.pdf', NULL, NULL),
	(8, 1, 'Bicicleta Spinning', 'Equipo de Cardio', 'Cardiovascular', '2023-07-20', 'enlace_imagen_spinning', 'Soporte.pdf', NULL, NULL),
	(9, 1, 'Cinturón de Levantamiento', 'Accesorio', 'Levantamiento de Pesas', '2021-08-05', 'enlace_imagen_cinturon', 'Soporte.pdf', NULL, NULL),
	(10, 1, 'Máquina de Remo', 'Equipo de Cardio', 'Cardiovascular', '2022-04-30', 'enlace_imagen_remo', 'Soporte.pdf', NULL, NULL);

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
  `uuid` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
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
  `SOPORTE` varchar(500) DEFAULT NULL,
  `CREATED_AT` timestamp NULL DEFAULT NULL,
  `UPDATED_AT` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`IDEQUIPO`),
  KEY `FK_maquinas_sedes` (`IDSEDE`),
  CONSTRAINT `FK_maquinas_sedes` FOREIGN KEY (`IDSEDE`) REFERENCES `sedes` (`IDSEDE`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Volcando datos para la tabla gimnasio.maquinas: ~10 rows (aproximadamente)
INSERT INTO `maquinas` (`IDEQUIPO`, `IDSEDE`, `NOMBREMAQUINA`, `GRUPOMUSCULAR`, `FECHACOMPRA`, `IMGMAQUINA`, `SOPORTE`, `CREATED_AT`, `UPDATED_AT`) VALUES
	(1, 1, 'Máquina de Pecho', 'Pectorales', '2022-03-15', 'images/elementos/barraz.jpg', 'Soporte.pdf', NULL, NULL),
	(2, 1, 'Máquina de Piernas', 'Piernas', '2021-11-25', 'url:maquina2', 'Soporte.pdf', NULL, NULL),
	(3, 3, 'Máquina de Espalda', 'Espalda', '2023-02-18', 'url:maquina3', 'Soporte.pdf', NULL, NULL),
	(4, 1, 'Máquina de Bíceps', 'Brazos', '2022-09-14', 'url:maquina4', 'Soporte.pdf', NULL, NULL),
	(5, 2, 'Máquina de Tríceps', 'Brazos', '2023-07-20', 'url:maquina5', 'Soporte.pdf', NULL, NULL),
	(6, 3, 'Máquina de Hombros', 'Hombros', '2021-08-05', 'url:maquina6', 'Soporte.pdf', NULL, NULL),
	(7, 1, 'Máquina de Abdominales', 'Abdominales', '2022-04-30', 'url:maquina7', 'Soporte.pdf', NULL, NULL),
	(8, 2, 'Máquina de Glúteos', 'Glúteos', '2023-05-12', 'url:maquina8', 'Soporte.pdf', NULL, NULL),
	(9, 3, 'Máquina de Tronco', 'Tronco', '2021-12-15', 'url:maquina9', 'Soporte.pdf', NULL, NULL),
	(10, 1, 'Máquina de Cardio', 'Cardiovascular', '2022-02-28', 'url:maquina10', 'Soporte.pdf', NULL, NULL);

-- Volcando estructura para tabla gimnasio.membresias
CREATE TABLE IF NOT EXISTS `membresias` (
  `IDMEMBRESIA` int NOT NULL AUTO_INCREMENT,
  `id` int NOT NULL,
  `id2` int DEFAULT NULL,
  `IDTIPOSMEMBRESIAS` int NOT NULL,
  `FECHAMEMBRESIAINICIO` date NOT NULL,
  `FECHAMEMBRESIAFINAL` date NOT NULL,
  `MONTOPAGO` decimal(10,0) NOT NULL,
  `CREATED_AT` timestamp NULL DEFAULT NULL,
  `UPDATED_AT` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`IDMEMBRESIA`),
  KEY `FK_membresias_users` (`id`),
  KEY `FK_membresias_users2` (`id2`),
  KEY `FK_tiposmembresias_membresias` (`IDTIPOSMEMBRESIAS`),
  CONSTRAINT `FK_membresias_users` FOREIGN KEY (`id`) REFERENCES `users` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `FK_membresias_users2` FOREIGN KEY (`id2`) REFERENCES `users` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `FK_tiposmembresias_membresias` FOREIGN KEY (`IDTIPOSMEMBRESIAS`) REFERENCES `tipomembresias` (`IDTIPOSMEMBRESIAS`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Volcando datos para la tabla gimnasio.membresias: ~3 rows (aproximadamente)
INSERT INTO `membresias` (`IDMEMBRESIA`, `id`, `id2`, `IDTIPOSMEMBRESIAS`, `FECHAMEMBRESIAINICIO`, `FECHAMEMBRESIAFINAL`, `MONTOPAGO`, `CREATED_AT`, `UPDATED_AT`) VALUES
	(7, 5, 3, 6, '2023-07-01', '2023-08-30', 130000, NULL, NULL),
	(8, 2, NULL, 5, '2023-01-01', '2024-01-01', 760000, NULL, NULL),
	(9, 1, NULL, 2, '2023-06-30', '2023-08-31', 130000, NULL, NULL),
	(10, 4, NULL, 3, '2023-05-31', '2023-08-31', 195000, NULL, NULL);

-- Volcando estructura para tabla gimnasio.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla gimnasio.migrations: ~6 rows (aproximadamente)
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
  `model_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`),
  CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla gimnasio.model_has_permissions: ~0 rows (aproximadamente)

-- Volcando estructura para tabla gimnasio.model_has_roles
CREATE TABLE IF NOT EXISTS `model_has_roles` (
  `role_id` bigint unsigned NOT NULL DEFAULT '2',
  `model_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint unsigned NOT NULL,
  PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`),
  CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla gimnasio.model_has_roles: ~2 rows (aproximadamente)
INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
	(1, 'App\\Models\\User', 1),
	(2, 'App\\Models\\User', 4);

-- Volcando estructura para tabla gimnasio.password_reset_tokens
CREATE TABLE IF NOT EXISTS `password_reset_tokens` (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla gimnasio.password_reset_tokens: ~0 rows (aproximadamente)

-- Volcando estructura para tabla gimnasio.permissions
CREATE TABLE IF NOT EXISTS `permissions` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla gimnasio.permissions: ~0 rows (aproximadamente)

-- Volcando estructura para tabla gimnasio.personal_access_tokens
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint unsigned NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
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
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
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
  `NOMBRE` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `CIUDAD` varchar(60) NOT NULL,
  `DIRECCION` varchar(100) NOT NULL,
  `HORARIOATENCION` varchar(100) NOT NULL,
  `DESCRIPCION` varchar(255) NOT NULL,
  `ESTADO` varchar(10) NOT NULL,
  `IMGSEDE` varchar(100) NOT NULL,
  `CREATED_AT` timestamp NULL DEFAULT NULL,
  `UPDATED_AT` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`IDSEDE`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Volcando datos para la tabla gimnasio.sedes: ~3 rows (aproximadamente)
INSERT INTO `sedes` (`IDSEDE`, `NOMBRE`, `CIUDAD`, `DIRECCION`, `HORARIOATENCION`, `DESCRIPCION`, `ESTADO`, `IMGSEDE`, `CREATED_AT`, `UPDATED_AT`) VALUES
	(1, 'Reich Gym Sede Muiscas', 'Tunja', 'Avenida Nte. #64 - 160, Tunja, Boyacá.', '5:00 am - 11:00 am / 3:00 pm - 10:00 pm', 'Bonita, Bella, preciosa', 'Abierto', 'url:gymreich', NULL, NULL),
	(2, 'Reich Gym Sede Centro', 'Tunja', 'Cl. 16 #13-28, Tunja, Boyacá.', '5:00 am - 11:00 am / 3:00 pm - 10:00 pm', 'Bonita, Bella, preciosa', 'Abierto', 'url:gymreich', NULL, NULL),
	(3, 'Reich Gym Sede Barbosa', 'Barbosa', 'Avenida Nte. #64 - 160.', '5:00 am - 11:00 am / 3:00 pm - 10:00 pm', 'Bonita, Bella, preciosa', 'Abierto', 'url:gymreich', NULL, NULL);

-- Volcando estructura para tabla gimnasio.tipomembresias
CREATE TABLE IF NOT EXISTS `tipomembresias` (
  `IDTIPOSMEMBRESIAS` int NOT NULL AUTO_INCREMENT,
  `NOMBREMEMBRESIA` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `DESCRIPCION` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `PRECIO` decimal(10,0) NOT NULL,
  `DURACIONMESES` int NOT NULL,
  `PLANPAREJA` varchar(2) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL DEFAULT '',
  `CREATED_AT` timestamp NULL DEFAULT NULL,
  `UPDATED_AT` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`IDTIPOSMEMBRESIAS`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Volcando datos para la tabla gimnasio.tipomembresias: ~6 rows (aproximadamente)
INSERT INTO `tipomembresias` (`IDTIPOSMEMBRESIAS`, `NOMBREMEMBRESIA`, `DESCRIPCION`, `PRECIO`, `DURACIONMESES`, `PLANPAREJA`, `CREATED_AT`, `UPDATED_AT`) VALUES
	(1, 'Plan Mensual', 'Un mes. ¡Máximo rendimiento!', 75000, 1, 'No', NULL, NULL),
	(2, 'Plan Bimestral', 'Dos meses. ¡Máximo rendimiento!', 130000, 2, 'No', NULL, NULL),
	(3, 'Plan Trimestral', 'Tres meses. ¡Máximo rendimiento!', 195000, 3, 'No', NULL, NULL),
	(4, 'Plan Semestral', 'Seis meses. ¡Máximo rendimiento!', 390000, 6, 'No', NULL, NULL),
	(5, 'Plan Anual', 'Un año. ¡Máximo rendimiento!', 760000, 12, 'No', NULL, NULL),
	(6, 'Plan Pareja', 'Un mes para pareja ¡Máximo rendimiento!', 130000, 1, 'Si', NULL, NULL);

-- Volcando estructura para tabla gimnasio.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `IDSEDE` int DEFAULT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`),
  KEY `FK_users_sedes` (`IDSEDE`),
  CONSTRAINT `FK_users_sedes` FOREIGN KEY (`IDSEDE`) REFERENCES `sedes` (`IDSEDE`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla gimnasio.users: ~5 rows (aproximadamente)
INSERT INTO `users` (`id`, `IDSEDE`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 1, 'Dios', 'dios@test.com', NULL, '$2y$10$.U0ub4TOXRa7bw9E38WD/.Pi7r0Gcj1hKjWEJncPVjsF2AY1e0Cue', 'rnH9wMMdkKvxpWyg9HHOanipKnYQbovvBo8RVmaYgYvuTZa6T31fSSKrOfGJ', '2023-08-12 03:55:28', '2023-08-12 03:55:28'),
	(2, 1, 'diablo', 'diablo@test.com', NULL, '$2y$10$hs0kxP/zgMDDIwFCg6hrLu2uCEsa7sup3LlXycSDpAs902NZ0hOXq', NULL, '2023-08-15 00:17:04', '2023-08-15 00:17:04'),
	(3, 1, 'angel', 'angel@test.com', NULL, '$2y$10$MdTnD06wVboShiB.Qsd5x.5yfvh9HgGAqKmaq575eNreHKcyfgIyO', NULL, '2023-08-15 02:13:34', '2023-08-15 02:13:34'),
	(4, 1, 'luis', 'luis@test.com', NULL, '$2y$10$wGHXavpavYDty25SC5wZkORX5GzrWQM2kFe824f1ubfj0CIM/4/Ka', NULL, '2023-08-15 02:18:07', '2023-08-15 02:18:07'),
	(5, 1, 'carlos', 'carlos@test.com', NULL, '$2y$10$Fhq4GHu1jva6EALY5MewReLB84yaBLcDmiZqo3vuKOInbrYr54SVq', NULL, '2023-08-15 02:39:39', '2023-08-15 02:39:39');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
