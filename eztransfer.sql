-- Adminer 4.7.0 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';

DROP DATABASE IF EXISTS `eztransfer`;
CREATE DATABASE `eztransfer` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `eztransfer`;

DROP TABLE IF EXISTS `destinataires`;
CREATE TABLE `destinataires` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `mail` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `expediteur`;
CREATE TABLE `expediteur` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `mail` varchar(50) NOT NULL,
  `nom` varchar(150) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `fichier`;
CREATE TABLE `fichier` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) DEFAULT NULL,
  `extension` varchar(10) DEFAULT NULL,
  `message` varchar(1000) DEFAULT NULL,
  `number` varchar(255) DEFAULT NULL,
  `poids` varchar(100) DEFAULT NULL,
  `date_up` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `identifiant` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


-- 2018-12-21 13:18:27
