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

-- Volcando estructura para tabla gimnasio.compras
CREATE TABLE IF NOT EXISTS `compras` (
  `IDCOMPRAS` int NOT NULL AUTO_INCREMENT,
  `id` int DEFAULT NULL,
  `FECHACOMPRA` date NOT NULL,
  `METODOPAGO` varchar(50) NOT NULL,
  `VALORCOMPRA` decimal(20,6) NOT NULL,
  PRIMARY KEY (`IDCOMPRAS`),
  KEY `FK_compras_users` (`id`),
  CONSTRAINT `FK_compras_users` FOREIGN KEY (`id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Volcando datos para la tabla gimnasio.compras: ~0 rows (aproximadamente)

-- Volcando estructura para tabla gimnasio.detallescompras
CREATE TABLE IF NOT EXISTS `detallescompras` (
  `IDDETALLESCOMPRAS` int NOT NULL AUTO_INCREMENT,
  `IDSUPLEMENTO` int DEFAULT NULL,
  `IDROPA` int DEFAULT NULL,
  `IDCOMPRAS` int DEFAULT NULL,
  `UNIDADES` int NOT NULL,
  `PRECIOUNITARIO` decimal(20,6) NOT NULL,
  `TIPOPRODUCTO` varchar(20) NOT NULL,
  PRIMARY KEY (`IDDETALLESCOMPRAS`),
  KEY `FK_detallesCompras_compra` (`IDCOMPRAS`),
  KEY `FK_detallesCompras_ropa` (`IDROPA`),
  KEY `FK_detallesCompras_suplementos` (`IDSUPLEMENTO`),
  CONSTRAINT `FK_detallesCompras_compra` FOREIGN KEY (`IDCOMPRAS`) REFERENCES `compras` (`IDCOMPRAS`),
  CONSTRAINT `FK_detallesCompras_ropa` FOREIGN KEY (`IDROPA`) REFERENCES `ropa` (`IDROPA`),
  CONSTRAINT `FK_detallesCompras_suplementos` FOREIGN KEY (`IDSUPLEMENTO`) REFERENCES `suplementos` (`IDSUPLEMENTO`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Volcando datos para la tabla gimnasio.detallescompras: ~0 rows (aproximadamente)

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
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Volcando datos para la tabla gimnasio.elementos: ~11 rows (aproximadamente)
INSERT INTO `elementos` (`IDELEMENTO`, `IDSEDE`, `NOMBRE`, `TIPO`, `USO`, `FECHACOMPRA`, `IMGELEMENTO`, `SOPORTE`, `CREATED_AT`, `UPDATED_AT`) VALUES
	(1, 2, 'Barra Z', 'Barra', 'Variado', '2023-08-31', 'images/elementos/barraz.jpg', 'Soporte.pdf', NULL, NULL),
	(2, 1, 'Mancuernas 10kg', 'Equipo de Peso', 'Levantamiento de Pesas', '2022-03-15', 'images/elementos/mancuerna10kg.jpg', 'Soporte.pdf', NULL, NULL),
	(3, 1, 'Cuerda de Saltar ', 'Accesorio', 'Cardiovascular', '2023-01-10', 'images/elementos/cuerda-salto.jpg', 'Soporte.pdf', NULL, NULL),
	(4, 1, 'Banco de Pesas', 'Equipo de Peso', 'Levantamiento de Pesas', '2022-06-10', 'images/elementos/banco.jpg', 'Soporte.pdf', NULL, NULL),
	(5, 1, 'Cinta de Correr', 'Equipo de Cardio', 'Cardiovascular', '2021-11-25', 'images/elementos/balon-peso.jpg', 'Soporte.pdf', NULL, NULL),
	(6, 1, 'Pelotas de Peso', 'Accesorio', 'Entrenamiento Funcional', '2023-02-18', 'images/elementos/mancuerna10kg.jpg', 'Soporte.pdf', NULL, NULL),
	(7, 1, 'TRX', 'Accesorio', 'Entrenamiento Funcional', '2022-09-14', 'images/elementos/trx.jpg', 'Soporte.pdf', NULL, NULL),
	(8, 1, 'Bicicleta Spinning', 'Equipo de Cardio', 'Cardiovascular', '2023-07-20', 'images/elementos/banco.jpg', 'Soporte.pdf', NULL, NULL),
	(9, 1, 'Cinturón de Levantamiento', 'Accesorio', 'Levantamiento de Pesas', '2021-08-05', 'images/elementos/cinturon.jpg', 'Soporte.pdf', NULL, NULL),
	(10, 1, 'Máquina de Remo', 'Equipo de Cardio', 'Cardiovascular', '2022-04-30', 'images/elementos/cuerda-salto.jpg', 'Soporte.pdf', NULL, NULL),
	(11, 1, 'Cuerda 69', 'Accesorio', 'Cardiovascular', '2023-10-19', 'https://olimpica.vtexassets.com/arquivos/ids/680369/Cuerda-Para-Saltar.jpg?v=637668050452630000', 'Soporte.pdf', '2023-10-20 06:25:22', '2023-10-20 06:25:22');

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
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Volcando datos para la tabla gimnasio.maquinas: ~11 rows (aproximadamente)
INSERT INTO `maquinas` (`IDEQUIPO`, `IDSEDE`, `NOMBREMAQUINA`, `GRUPOMUSCULAR`, `FECHACOMPRA`, `IMGMAQUINA`, `SOPORTE`, `CREATED_AT`, `UPDATED_AT`) VALUES
	(1, 1, 'Máquina de Pecho', 'Pectorales', '2022-03-15', 'images/maquinas/pec-fly.jpg', 'Soporte.pdf', NULL, NULL),
	(2, 1, 'Máquina de Piernas', 'Piernas', '2021-11-25', 'images/maquinas/extension-cuadriceps.jpg', 'Soporte.pdf', NULL, NULL),
	(3, 3, 'Máquina de Espalda', 'Espalda', '2023-02-18', 'images/maquinas/jalon-pecho.jpg', 'Soporte.pdf', NULL, NULL),
	(4, 1, 'Máquina de Bíceps', 'Brazos', '2022-09-14', 'images/maquinas/biceps.png', 'Soporte.pdf', NULL, NULL),
	(5, 2, 'Máquina de Tríceps', 'Brazos', '2023-07-20', 'images/maquinas/triceps.jpg', 'Soporte.pdf', NULL, NULL),
	(6, 3, 'Máquina de Hombros', 'Hombros', '2021-08-05', 'images/maquinas/hombro.jpg', 'Soporte.pdf', NULL, NULL),
	(7, 1, 'Máquina de Abdominales', 'Abdominales', '2022-04-30', 'images/maquinas/abdominales.jpg', 'Soporte.pdf', NULL, NULL),
	(8, 2, 'Máquina de Glúteos', 'Glúteos', '2023-05-12', 'images/maquinas/gluteo.jpg', 'Soporte.pdf', NULL, NULL),
	(9, 3, 'Máquina de Tronco', 'Tronco', '2021-12-15', 'images/maquinas/pec-fly.jpg', 'Soporte.pdf', NULL, NULL),
	(10, 1, 'Máquina de Cardio', 'Cardiovascular', '2022-02-28', 'images/maquinas/abdominales.jpg', 'Soporte.pdf', NULL, NULL),
	(11, 1, 'Press banca 69', 'Pectorales', '2023-10-19', 'https://media1.100x100fitness.com/img/c/124.jpg', 'Soporte.pdf', '2023-10-20 05:45:44', '2023-10-20 05:45:44');

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
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Volcando datos para la tabla gimnasio.membresias: ~6 rows (aproximadamente)
INSERT INTO `membresias` (`IDMEMBRESIA`, `id`, `id2`, `IDTIPOSMEMBRESIAS`, `FECHAMEMBRESIAINICIO`, `FECHAMEMBRESIAFINAL`, `MONTOPAGO`, `CREATED_AT`, `UPDATED_AT`) VALUES
	(7, 5, 3, 6, '2023-07-01', '2023-08-30', 130000, NULL, NULL),
	(8, 2, NULL, 5, '2023-01-01', '2024-01-01', 760000, NULL, NULL),
	(9, 1, NULL, 2, '2023-06-30', '2023-08-31', 130000, NULL, NULL),
	(10, 4, NULL, 3, '2023-05-31', '2023-08-31', 195000, NULL, NULL),
	(11, 6, 7, 6, '2023-09-19', '2023-10-19', 130000, '2023-10-20 05:00:51', '2023-10-20 05:00:51'),
	(12, 8, NULL, 5, '2022-10-19', '2023-10-19', 760000, '2023-10-20 05:04:37', '2023-10-20 05:04:37');

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

-- Volcando estructura para tabla gimnasio.ropa
CREATE TABLE IF NOT EXISTS `ropa` (
  `IDROPA` int NOT NULL AUTO_INCREMENT,
  `NOMBRE` varchar(100) NOT NULL,
  `TIPO` varchar(50) NOT NULL,
  `DESCRIPCION` varchar(600) NOT NULL,
  `STOCK` int NOT NULL,
  `PRECIO` decimal(20,6) NOT NULL,
  `TALLA` varchar(2) NOT NULL,
  `COLOR` varchar(15) NOT NULL,
  `SEXO` varchar(6) NOT NULL,
  `MATERIAL` varchar(50) NOT NULL,
  `IMGPRENDA1` varchar(100) DEFAULT NULL,
  `IMGPRENDA2` varchar(100) DEFAULT NULL,
  `IMGPRENDA3` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`IDROPA`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Volcando datos para la tabla gimnasio.ropa: ~14 rows (aproximadamente)
INSERT INTO `ropa` (`IDROPA`, `NOMBRE`, `TIPO`, `DESCRIPCION`, `STOCK`, `PRECIO`, `TALLA`, `COLOR`, `SEXO`, `MATERIAL`, `IMGPRENDA1`, `IMGPRENDA2`, `IMGPRENDA3`) VALUES
	(1, 'Camiseta de Entrenamiento', 'Camisetas', 'Camiseta transpirable para el gimnasio', 75, 55000.000000, 'M', 'Negro', 'Mujer', 'Poliéster', NULL, NULL, NULL),
	(2, 'Leggings de Compresión', 'Otros', 'Leggings ajustados para entrenamiento', 60, 45000.000000, 'S', 'Azul', 'Mujer', 'Nylon y Spandex', NULL, NULL, NULL),
	(3, 'Conjunto de Sudadera', 'Buzos', 'Conjunto de sudadera y pantalones para entrenamiento', 40, 75000.000000, 'L', 'Gris', 'Hombre', 'Algodón y Poliéster', NULL, NULL, NULL),
	(4, 'Top Deportivo Sin Mangas', 'Esqueletos', 'Top deportivo sin mangas para mujeres', 50, 35000.000000, 'XS', 'Rosa', 'Mujer', 'Poliéster', NULL, NULL, NULL),
	(5, 'Pantalones de Yoga', 'Otros', 'Pantalones de yoga de cintura alta', 55, 42000.000000, 'L', 'Negro', 'Mujer', 'Algodón y Spandex', NULL, NULL, NULL),
	(6, 'Camiseta de Manga Larga', 'Camisetas', 'Camiseta de manga larga para el gimnasio', 70, 59000.000000, 'XL', 'Gris', 'Mujer', 'Algodón', NULL, NULL, NULL),
	(7, 'Shorts Deportivos', 'Otros', 'Shorts cortos para actividades deportivas', 80, 28000.000000, 'M', 'Azul', 'Mujer', 'Poliéster', NULL, NULL, NULL),
	(8, 'Sujetador Deportivo', 'Otros', 'Sujetador deportivo de alto impacto', 45, 38000.000000, 'S', 'Negro', 'Mujer', 'Poliéster y Elastano', NULL, NULL, NULL),
	(9, 'Chaqueta Ligera para Correr', 'Buzos', 'Chaqueta ligera para correr y ejercicio', 35, 69000.000000, 'L', 'Verde', 'Hombre', 'Poliéster', NULL, NULL, NULL),
	(10, 'Shorts de Entrenamiento', 'Otros', 'Shorts deportivos para entrenamiento', 60, 35000.000000, 'L', 'Azul', 'Hombre', 'Poliéster', NULL, NULL, NULL),
	(11, 'Camiseta de Manga Corta', 'Camisetas', 'Camiseta deportiva de manga corta', 80, 28000.000000, 'M', 'Negro', 'Hombre', 'Algodón', NULL, NULL, NULL),
	(12, 'Pantalones de Jogging', 'Otros', 'Pantalones de jogging cómodos', 50, 42000.000000, 'XL', 'Gris', 'Hombre', 'Algodón y Poliéster', NULL, NULL, NULL),
	(13, 'Chaqueta Cortavientos', 'Buzos', 'Chaqueta cortavientos para correr', 45, 65000.000000, 'M', 'Azul', 'Hombre', 'Nylon', NULL, NULL, NULL),
	(14, 'Camiseta de Entrenamiento', 'Camisetas', 'Camiseta de compresión para el gimnasio', 70, 55000.000000, 'L', 'Negro', 'Hombre', 'Poliéster y Elastano', NULL, NULL, NULL);

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

-- Volcando estructura para tabla gimnasio.suplementos
CREATE TABLE IF NOT EXISTS `suplementos` (
  `IDSUPLEMENTO` int NOT NULL AUTO_INCREMENT,
  `NOMBRE` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `MARCA` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `TIPO` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `DESCRIPCION` varchar(600) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `STOCK` int NOT NULL,
  `PRECIO` decimal(10,0) NOT NULL,
  `IMGSUPLEMENTO` varchar(100) DEFAULT NULL,
  `IMGTABLANUTRICIONAL` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`IDSUPLEMENTO`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Volcando datos para la tabla gimnasio.suplementos: ~15 rows (aproximadamente)
INSERT INTO `suplementos` (`IDSUPLEMENTO`, `NOMBRE`, `MARCA`, `TIPO`, `DESCRIPCION`, `STOCK`, `PRECIO`, `IMGSUPLEMENTO`, `IMGTABLANUTRICIONAL`) VALUES
	(1, 'BCAA en Cápsulas', 'FitLife', 'Aminoácidos', 'Aminoácidos de cadena ramificada en cápsulas para la recuperación muscular.', 60, 25000, 'https://bit.ly/3Pxqc56', NULL),
	(2, 'Caseína Micelar', 'PurePro', 'Proteína', 'Proteína de liberación lenta para un crecimiento muscular constante.', 40, 55000, 'https://bit.ly/3PAvblK', NULL),
	(3, 'Termogénico', 'BurnMax', 'Boosters', 'Potente quemador de grasa para acelerar el metabolismo.', 30, 48000, 'https://bit.ly/3LjnVrD', NULL),
	(4, 'Multivitamínico', 'VitaFuel', 'Otros', 'Fórmula completa de vitaminas y minerales para la salud general.', 100, 22000, 'https://bit.ly/3Rjayvp', NULL),
	(5, 'Glutamina en Polvo', 'MuscleGain', 'Aminoácidos', 'Glutamina en polvo para la recuperación y la salud intestinal.', 55, 36000, 'https://bit.ly/3PxH23K', NULL),
	(6, 'Proteína Vegana', 'PlantPro', 'Proteína', 'Proteína vegana a base de plantas para atletas veganos.', 70, 58000, 'https://bit.ly/3rcdv6g', NULL),
	(7, 'Óxido Nítrico', 'NitroPump', 'Boosters', 'Mezcla de óxido nítrico para mejorar la vasodilatación y el bombeo muscular.', 45, 42000, 'https://bit.ly/3sGEcQW', NULL),
	(8, 'Glucosamina y Condroitina', 'JointFlex', 'Otros', 'Fórmula para la salud de las articulaciones y el cartílago.', 65, 32000, 'https://bit.ly/3ERkF3n', NULL),
	(9, 'Vitamina C Efervescente', 'CitroC', 'Otros', 'Vitamina C en tabletas efervescentes para la inmunidad.', 80, 18000, 'https://bit.ly/3qYOmw5', NULL),
	(10, 'MCT Oil', 'KetoFuel', 'Otros', 'Aceite de triglicéridos de cadena media para dietas cetogénicas.', 50, 32000, 'https://bit.ly/3PuzQ8u', NULL),
	(11, 'Creatina Monohidratada en Polvo', 'PowerMax', 'Creatina', 'Creatina monohidratada en polvo de alta pureza para el aumento de la fuerza.', 55, 128000, 'images/suplementos/creatina1.jpg', NULL),
	(12, 'Creatina HCL en Cápsulas', 'MuscleFuel', 'Creatina', 'Creatina HCL en cápsulas para una absorción superior y sin hinchazón.', 40, 35000, 'images/suplementos/creatina2.jpeg', NULL),
	(13, 'Creatina Kre-Alkalyn', 'UltraPump', 'Creatina', 'Fórmula de creatina Kre-Alkalyn para la resistencia y el rendimiento mejorado.', 30, 42000, 'images/suplementos/creatina3.jpg', NULL),
	(14, 'Creatina en Gominolas', 'GummyGain', 'Creatina', 'Gominolas de creatina sabrosas para un suplemento fácil y delicioso.', 65, 25000, 'images/suplementos/creatina4.jpg', NULL),
	(15, 'Creatina Malato', 'Energetic', 'Creatina', 'Creatina malato para mejorar la energía y la resistencia muscular.', 50, 38000, 'images/suplementos/creatina5.jpg', NULL);

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
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla gimnasio.users: ~8 rows (aproximadamente)
INSERT INTO `users` (`id`, `IDSEDE`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 1, 'Dios', 'dios@test.com', NULL, '$2y$10$.U0ub4TOXRa7bw9E38WD/.Pi7r0Gcj1hKjWEJncPVjsF2AY1e0Cue', 'KlzLxO5QrlHwrV8uwvBB2rQUkOyYNcxLKASfBIt3jFIs1CWJTUNR6L9yswzW', '2023-08-12 03:55:28', '2023-08-12 03:55:28'),
	(2, 1, 'diablo', 'diablo@test.com', NULL, '$2y$10$hs0kxP/zgMDDIwFCg6hrLu2uCEsa7sup3LlXycSDpAs902NZ0hOXq', NULL, '2023-08-15 00:17:04', '2023-08-15 00:17:04'),
	(3, 1, 'angel', 'angel@test.com', NULL, '$2y$10$MdTnD06wVboShiB.Qsd5x.5yfvh9HgGAqKmaq575eNreHKcyfgIyO', NULL, '2023-08-15 02:13:34', '2023-08-15 02:13:34'),
	(4, 1, 'luis', 'luis@test.com', NULL, '$2y$10$wGHXavpavYDty25SC5wZkORX5GzrWQM2kFe824f1ubfj0CIM/4/Ka', NULL, '2023-08-15 02:18:07', '2023-08-15 02:18:07'),
	(5, 1, 'carlos', 'carlos@test.com', NULL, '$2y$10$Fhq4GHu1jva6EALY5MewReLB84yaBLcDmiZqo3vuKOInbrYr54SVq', NULL, '2023-08-15 02:39:39', '2023-08-15 02:39:39'),
	(6, 1, 'Alfredo', 'alfredo@test.com', NULL, '$2y$10$szy59LjW6LH5EFvDArYHY.7rLM4GQ5YSlhOOxOPdATgrGlVIZRTw2', NULL, '2023-10-20 03:15:44', '2023-10-20 03:15:44'),
	(7, 1, 'Roberta', 'roberta@test.com', NULL, '$2y$10$cWoSNBqlylR3IbOOit1IEerReen33hkrIYw7g3j2e90ym4.42rF/q', NULL, '2023-10-20 04:57:51', '2023-10-20 04:57:51'),
	(8, 2, 'Josefina', 'josefina@test.com', NULL, '$2y$10$HgmFBSOP65lnOg7rAdxCUOQ1UyJTzuFQK38SdieeYTyW/jIUM/jgq', NULL, '2023-10-20 05:01:28', '2023-10-20 05:01:28');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
