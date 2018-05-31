/*
Navicat MySQL Data Transfer

Source Server         : LORRU
Source Server Version : 50719
Source Host           : localhost:3306
Source Database       : inventario

Target Server Type    : MYSQL
Target Server Version : 50719
File Encoding         : 65001

Date: 2018-05-29 22:52:23
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for assigned_roles
-- ----------------------------
DROP TABLE IF EXISTS `assigned_roles`;
CREATE TABLE `assigned_roles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `role_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of assigned_roles
-- ----------------------------
INSERT INTO `assigned_roles` VALUES ('1', '1', '1', null, null);
INSERT INTO `assigned_roles` VALUES ('2', '1', '2', null, null);
INSERT INTO `assigned_roles` VALUES ('6', '7', '1', null, null);
INSERT INTO `assigned_roles` VALUES ('7', '7', '2', null, null);
INSERT INTO `assigned_roles` VALUES ('8', '8', '1', null, null);
INSERT INTO `assigned_roles` VALUES ('9', '8', '2', null, null);
INSERT INTO `assigned_roles` VALUES ('10', '9', '1', null, null);
INSERT INTO `assigned_roles` VALUES ('11', '9', '2', null, null);
INSERT INTO `assigned_roles` VALUES ('12', '10', '1', null, null);
INSERT INTO `assigned_roles` VALUES ('13', '10', '2', null, null);

-- ----------------------------
-- Table structure for customers
-- ----------------------------
DROP TABLE IF EXISTS `customers`;
CREATE TABLE `customers` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name_client` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_enriched` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `place` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dependence_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `customers_name_client_unique` (`name_client`),
  UNIQUE KEY `customers_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of customers
-- ----------------------------
INSERT INTO `customers` VALUES ('1', 'Wom Inbound', 'Hans Villalobos', '1', '2°Piso', '1', null, null);
INSERT INTO `customers` VALUES ('4', 'Wom Outbound', 'Luis Torres', '2', '2°Piso', '1', null, null);
INSERT INTO `customers` VALUES ('5', 'Wom C2C', 'Luis Torres', '3', '2°Piso', '1', null, null);
INSERT INTO `customers` VALUES ('6', 'Wom Bussines', 'Luis Torres', '4', '2°Piso', '1', null, null);
INSERT INTO `customers` VALUES ('7', 'Wom Migraciones', 'Paola Saavedra', '5', '5°Piso', '1', null, null);
INSERT INTO `customers` VALUES ('9', 'Entel', 'Enrique del Fierro', '6', '1°Piso', '2', null, null);
INSERT INTO `customers` VALUES ('10', 'Santander', 'Enrique del Fierro', '7', '2°Piso', '2', null, null);
INSERT INTO `customers` VALUES ('11', 'BBVA', 'Enrique del Fierro', '8', '4°Piso', '1', null, null);
INSERT INTO `customers` VALUES ('13', 'Ripley', 'Venancia Bastias', '9', '1°Piso', '2', null, null);
INSERT INTO `customers` VALUES ('14', 'Falabella', 'Venancia Bastias', '10', '1°Piso', '2', null, null);
INSERT INTO `customers` VALUES ('15', 'Chubb', 'Venancia Bastias', '11', '1°Piso', '2', null, null);
INSERT INTO `customers` VALUES ('16', 'Calidad', 'Karina Quezada', '12', '3°Piso', '1', null, null);
INSERT INTO `customers` VALUES ('17', 'Explotacion', 'Vanessa Martinez', '13', '3°Piso', '1', null, null);
INSERT INTO `customers` VALUES ('18', 'Desarrollo', 'Rodrigo Soto', '14', '3°Piso', '1', null, null);
INSERT INTO `customers` VALUES ('19', 'RR.HH', 'Carmen Sepulveda', '15', '4°Piso', '1', null, null);
INSERT INTO `customers` VALUES ('20', 'Reclutamiento', 'Sonia Oliva', '16', '5°Piso', '1', null, null);

-- ----------------------------
-- Table structure for dependences
-- ----------------------------
DROP TABLE IF EXISTS `dependences`;
CREATE TABLE `dependences` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of dependences
-- ----------------------------
INSERT INTO `dependences` VALUES ('1', 'Monjitas', null, null);
INSERT INTO `dependences` VALUES ('2', 'Antonia Lopez de Abello', null, null);

-- ----------------------------
-- Table structure for hardware
-- ----------------------------
DROP TABLE IF EXISTS `hardware`;
CREATE TABLE `hardware` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `provider_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of hardware
-- ----------------------------
INSERT INTO `hardware` VALUES ('2', 'CABLE DE RED', null, '2018-04-21 20:51:40', '1');
INSERT INTO `hardware` VALUES ('3', 'MOUSE', null, null, '1');
INSERT INTO `hardware` VALUES ('4', 'TECLADO', null, null, '1');
INSERT INTO `hardware` VALUES ('5', 'SWITCH', null, null, '1');
INSERT INTO `hardware` VALUES ('6', 'MONITOR', null, null, '1');
INSERT INTO `hardware` VALUES ('7', 'PC MSI', null, null, '1');
INSERT INTO `hardware` VALUES ('8', 'PC OLIDATA', null, null, '1');
INSERT INTO `hardware` VALUES ('9', 'DVD', null, null, '1');
INSERT INTO `hardware` VALUES ('10', 'PC MINIBOX', null, null, '1');
INSERT INTO `hardware` VALUES ('11', 'CABLE VGA', null, null, '1');
INSERT INTO `hardware` VALUES ('12', 'CABLE FUENTE DE PODER', null, null, '1');
INSERT INTO `hardware` VALUES ('13', 'CABLE OLIDATA', null, null, '1');
INSERT INTO `hardware` VALUES ('14', 'CABLE MONITOR', null, null, '1');
INSERT INTO `hardware` VALUES ('15', 'DISCO DURO', null, null, '1');
INSERT INTO `hardware` VALUES ('20', 'CINTILLO', '2018-04-20 05:25:07', '2018-04-20 05:25:07', '1');
INSERT INTO `hardware` VALUES ('21', 'CA', '2018-04-21 21:25:02', '2018-04-21 21:25:02', '1');

-- ----------------------------
-- Table structure for migrations
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of migrations
-- ----------------------------
INSERT INTO `migrations` VALUES ('7', '2014_10_12_000000_create_users_table', '1');
INSERT INTO `migrations` VALUES ('8', '2014_10_12_100000_create_password_resets_table', '1');
INSERT INTO `migrations` VALUES ('9', '2018_02_23_032804_create_customers_table', '2');
INSERT INTO `migrations` VALUES ('10', '2018_02_23_032924_create_hardware_table', '2');
INSERT INTO `migrations` VALUES ('11', '2018_02_23_033003_create_moves_table', '2');
INSERT INTO `migrations` VALUES ('12', '2018_02_23_033025_create_providers_table', '2');
INSERT INTO `migrations` VALUES ('13', '2018_02_23_033047_create_stocks_table', '2');
INSERT INTO `migrations` VALUES ('14', '2018_02_23_033616_create_assigned_role_table', '2');
INSERT INTO `migrations` VALUES ('15', '2018_02_23_033757_create_roles_table', '2');
INSERT INTO `migrations` VALUES ('16', '2018_02_23_034813_create_dependence_table', '2');
INSERT INTO `migrations` VALUES ('17', '2018_02_27_005751_add_avatar_to_users_table', '3');
INSERT INTO `migrations` VALUES ('18', '2018_02_27_013834_create_technicals_table', '4');
INSERT INTO `migrations` VALUES ('19', '2018_02_27_014015_add_technical_id_to_moves_table', '4');
INSERT INTO `migrations` VALUES ('20', '2018_02_27_023231_add_state_id_to_moves_table', '5');
INSERT INTO `migrations` VALUES ('21', '2018_02_28_160654_add_provider_id_to_hardware_table', '6');
INSERT INTO `migrations` VALUES ('22', '2018_02_28_160735_add_avatar_to_provider_table', '7');

-- ----------------------------
-- Table structure for moves
-- ----------------------------
DROP TABLE IF EXISTS `moves`;
CREATE TABLE `moves` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `customer_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `technical_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hardware_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quantity` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `supervisor` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `entry_comment` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `comment_close` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `state` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of moves
-- ----------------------------

-- ----------------------------
-- Table structure for password_resets
-- ----------------------------
DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of password_resets
-- ----------------------------

-- ----------------------------
-- Table structure for providers
-- ----------------------------
DROP TABLE IF EXISTS `providers`;
CREATE TABLE `providers` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `place` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telephone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `web_cite` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default.png',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of providers
-- ----------------------------
INSERT INTO `providers` VALUES ('1', 'Importadora GK', 'La Concepcion 141, Oficina 302 - 303, Providencia, 13', '22351668', 'importadoragk.cl', null, null, 'gk.png');
INSERT INTO `providers` VALUES ('2', 'Ingenieria e Informatica Asociada Ltda.', 'Avda. Libertador Bernardo O\'Higgins Nº 580 / Of 403', '28401000', 'iia.cl/iia/index.html', null, null, 'iia.png');

-- ----------------------------
-- Table structure for roles
-- ----------------------------
DROP TABLE IF EXISTS `roles`;
CREATE TABLE `roles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `roles_name_unique` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of roles
-- ----------------------------
INSERT INTO `roles` VALUES ('1', 'admin', 'Administrador', null, null);
INSERT INTO `roles` VALUES ('2', 'sop', 'Soporte', null, null);

-- ----------------------------
-- Table structure for stocks
-- ----------------------------
DROP TABLE IF EXISTS `stocks`;
CREATE TABLE `stocks` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `hardware_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of stocks
-- ----------------------------
INSERT INTO `stocks` VALUES ('2', '2', '1', null, '2018-04-21 20:54:55');
INSERT INTO `stocks` VALUES ('3', '3', '0', null, null);
INSERT INTO `stocks` VALUES ('4', '4', '0', null, null);
INSERT INTO `stocks` VALUES ('5', '5', '0', null, null);
INSERT INTO `stocks` VALUES ('6', '6', '0', null, null);
INSERT INTO `stocks` VALUES ('7', '7', '0', null, null);
INSERT INTO `stocks` VALUES ('8', '8', '0', null, null);
INSERT INTO `stocks` VALUES ('9', '9', '0', null, null);
INSERT INTO `stocks` VALUES ('10', '10', '0', null, null);
INSERT INTO `stocks` VALUES ('11', '11', '0', null, null);
INSERT INTO `stocks` VALUES ('12', '12', '0', null, null);
INSERT INTO `stocks` VALUES ('13', '13', '0', null, null);
INSERT INTO `stocks` VALUES ('14', '14', '0', null, null);
INSERT INTO `stocks` VALUES ('15', '15', '0', null, null);
INSERT INTO `stocks` VALUES ('19', '20', '1', '2018-04-20 05:25:07', '2018-04-20 05:25:07');
INSERT INTO `stocks` VALUES ('20', '21', '1', '2018-04-21 21:25:02', '2018-04-21 21:25:02');

-- ----------------------------
-- Table structure for technicals
-- ----------------------------
DROP TABLE IF EXISTS `technicals`;
CREATE TABLE `technicals` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of technicals
-- ----------------------------
INSERT INTO `technicals` VALUES ('1', 'Diego Paredes', null, null);
INSERT INTO `technicals` VALUES ('2', 'Cristian Guzman', null, null);
INSERT INTO `technicals` VALUES ('3', 'Felipe Navarro', null, null);
INSERT INTO `technicals` VALUES ('4', 'Erick Jaime', null, null);
INSERT INTO `technicals` VALUES ('5', 'Jean Paul Jara', null, null);
INSERT INTO `technicals` VALUES ('6', 'Byron Vasquez', null, null);

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default.png',
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('10', 'Diego', 'dparedes@mapcitycc.cl', 'public/B4IhwuzEAbffMKUjAMfLCf7ZiRL2CVoZ8vRf7XU0.jpeg', '$2y$10$gWQUf/rFx/m99fEYkHbcJ.kd8TCUFd3LRExXyZMbLNFvo0mChAdhK', null, '2018-04-16 19:43:22', '2018-04-16 19:43:22');
