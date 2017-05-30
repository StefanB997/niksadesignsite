CREATE DATABASE `p_filter` /*!40100 DEFAULT CHARACTER SET utf8 */$$


CREATE TABLE `p_kategorii` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ime` varchar(20) NOT NULL,
  PRIMARY KEY (`id`,`ime`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8$$




CREATE TABLE `p_podkategorii` (
  `id` varchar(25) NOT NULL,
  `ime` varchar(45) NOT NULL,
  `kategorija_id` varchar(45) NOT NULL,
  PRIMARY KEY (`id`,`ime`,`kategorija_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8$$



CREATE TABLE `p_produkp_produktiti` (
  `id` int(11) NOT NULL,
  `name` varchar(25) NOT NULL,
  `podkategorii_id'` int(11) NOT NULL,
  `proizveduvac` varchar(45) NOT NULL,
  `pakuvanje` varchar(25) NOT NULL,
  `cena(mkd)` varchar(15) NOT NULL,
  `image` varchar(45) NOT NULL,
  PRIMARY KEY (`id`,`name`,`podkategorii_id'`,`proizveduvac`,`pakuvanje`,`cena(mkd)`,`image`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8$$

