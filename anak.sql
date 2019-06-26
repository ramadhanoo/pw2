-- Adminer 4.3.1 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `anak`;
CREATE TABLE `anak` (
  `id_anak` int(11) NOT NULL AUTO_INCREMENT,
  `id_ibu` int(11) NOT NULL,
  `nama_anak` varchar(255) NOT NULL,
  `gender_anak` tinyint(4) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id_anak`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `anak` (`id_anak`, `id_ibu`, `nama_anak`, `gender_anak`) VALUES
(1,	3,	'Agus SBY',	1),
(2,	2,	'Puan Mega',	2);

-- 2019-06-26 01:05:10
