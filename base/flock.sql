-- --------------------------------------------------------
-- Host:                         192.168.7.27
-- Versión del servidor:         10.3.17-MariaDB - Mageia MariaDB Server
-- SO del servidor:              Linux
-- HeidiSQL Versión:             9.5.0.5196
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Volcando estructura de base de datos para the_flock
DROP DATABASE IF EXISTS `the_flock`;
CREATE DATABASE IF NOT EXISTS `the_flock` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `the_flock`;

-- Volcando estructura para tabla the_flock.apps
DROP TABLE IF EXISTS `apps`;
CREATE TABLE IF NOT EXISTS `apps` (
  `name` text NOT NULL,
  `consumer_key` text NOT NULL,
  `consumer_secret` text NOT NULL,
  `indexer` tinyint(1) NOT NULL DEFAULT 1,
  `texter` tinyint(1) NOT NULL DEFAULT 0,
  `enabled` tinyint(1) NOT NULL DEFAULT 1,
  PRIMARY KEY (`consumer_key`(256)),
  KEY `i_apps_texter_enabled` (`texter`,`enabled`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- La exportación de datos fue deseleccionada.
-- Volcando estructura para tabla the_flock.bots
DROP TABLE IF EXISTS `bots`;
CREATE TABLE IF NOT EXISTS `bots` (
  `consumer_key` varchar(256) NOT NULL,
  `user_id` bigint(20) unsigned NOT NULL,
  `screen_name` varchar(15) NOT NULL,
  `access_token` text NOT NULL,
  `access_token_secret` text NOT NULL,
  `indexer` tinyint(1) NOT NULL DEFAULT 1,
  `texter` tinyint(1) NOT NULL DEFAULT 0,
  `enabled` tinyint(1) NOT NULL DEFAULT 1,
  `since` bigint(20) unsigned NOT NULL DEFAULT unix_timestamp(current_timestamp()),
  `last_used` decimal(16,6) DEFAULT NULL,
  `locked` tinyint(1) DEFAULT 0,
  `operations` bigint(20) unsigned NOT NULL DEFAULT 0,
  PRIMARY KEY (`consumer_key`,`access_token`(256)),
  KEY `i_bots_last_used` (`last_used`),
  KEY `i_bots_texter_enabled` (`texter`,`enabled`),
  KEY `i_bots_consumer_key` (`consumer_key`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- La exportación de datos fue deseleccionada.
-- Volcando estructura para tabla the_flock.relationships
DROP TABLE IF EXISTS `relationships`;
CREATE TABLE IF NOT EXISTS `relationships` (
  `follower` bigint(20) unsigned NOT NULL,
  `followed` bigint(20) unsigned NOT NULL,
  `since` bigint(20) unsigned NOT NULL DEFAULT unix_timestamp(current_timestamp()),
  UNIQUE KEY `i_relationships` (`follower`,`followed`),
  KEY `i_relationships_followed` (`followed`),
  KEY `i_relationships_follower` (`follower`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 `PAGE_COMPRESSED`=1;

-- La exportación de datos fue deseleccionada.
-- Volcando estructura para tabla the_flock.tag_relationships
DROP TABLE IF EXISTS `tag_relationships`;
CREATE TABLE IF NOT EXISTS `tag_relationships` (
  `id` bigint(20) unsigned NOT NULL,
  `tag` char(64) NOT NULL,
  `since` bigint(20) unsigned NOT NULL DEFAULT unix_timestamp(current_timestamp()),
  UNIQUE KEY `i_tag_relationships` (`id`,`tag`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 `PAGE_COMPRESSED`=1;

-- La exportación de datos fue deseleccionada.
-- Volcando estructura para tabla the_flock.users
DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) unsigned NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `since` bigint(20) unsigned NOT NULL DEFAULT unix_timestamp(current_timestamp()),
  `influencer` tinyint(1) NOT NULL DEFAULT 0,
  `screen_name` varchar(15) GENERATED ALWAYS AS (json_value(`payload`,'$.screen_name')) VIRTUAL,
  `last_twit_date` varchar(30) GENERATED ALWAYS AS (json_value(`payload`,'$.status.created_at')) VIRTUAL,
  PRIMARY KEY (`id`),
  KEY `i_users_screen_name` (`screen_name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 `PAGE_COMPRESSED`=1;

-- La exportación de datos fue deseleccionada.
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
