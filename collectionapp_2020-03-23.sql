# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.7.29)
# Database: collectionapp
# Generation Time: 2020-03-23 15:18:38 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table Table of bread
# ------------------------------------------------------------

DROP TABLE IF EXISTS `Table of bread`;

CREATE TABLE `Table of bread` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL DEFAULT '',
  `type` varchar(255) NOT NULL DEFAULT '',
  `rating` tinyint(2) NOT NULL,
  `desc` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `Table of bread` WRITE;
/*!40000 ALTER TABLE `Table of bread` DISABLE KEYS */;

INSERT INTO `Table of bread` (`id`, `name`, `type`, `rating`, `desc`)
VALUES
	(1,'Arepa','cornflour',6,'Arepa is a flat, round, cornmeal patty that is eaten in Venezuela and Colombia.'),
	(2,'chapati','wheat',5,'Chapati is popular Indian flat bread made with wheat flour. Instead of being baked, chapatis are toasted over a griddle till they are freckled gold.'),
	(3,'Damper','wheat',4,'Damper is a traditional Australian bush bread that was once cooked over in the hot coals of a campfire, but can also be baked in a normal oven.'),
	(4,'English muffin','wheat',1,'An English muffin is a small, round, flat type of yeast-leavened bread which is usually sliced horizontally and toasted. '),
	(5,'Focaccia','Strong White',7,'Focaccia is a flat oven-baked Italian bread made of strong (high-gluten) flour, oil, water, salt and yeast.'),
	(6,'Grissini','wheat',2,'Grissini are generally pencil-sized sticks of crisp, dry bread originating in Italy.'),
	(7,'Injera','Sourdough',8,'injera is a sourdough-risen flatbread with a unique, slightly spongy texture.'),
	(8,'Knäckebröd ','Rye',9,'Knäckebröd is a flat and dry type of bread or cracker, containing mostly rye flour.'),
	(9,'Lavash','wheat',7,'Lavash is a thin flatbread of Armenian origin, popular in the Caucasus, Iran and Turkey.'),
	(10,'Matzo / Matzoh','5 Grain',3,'Matzo is unleavened bread in the form of large crackers, traditionally eaten by Jews during Passover holiday.');

/*!40000 ALTER TABLE `Table of bread` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
