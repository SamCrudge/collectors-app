# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.7.29)
# Database: collectionapp
# Generation Time: 2020-03-24 12:06:57 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table bread
# ------------------------------------------------------------

DROP TABLE IF EXISTS `bread`;

CREATE TABLE `bread` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL DEFAULT '',
  `type` varchar(255) NOT NULL DEFAULT '',
  `rating` tinyint(2) NOT NULL,
  `desc` varchar(255) NOT NULL DEFAULT '',
  `imgurl` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `bread` WRITE;
/*!40000 ALTER TABLE `bread` DISABLE KEYS */;

INSERT INTO `bread` (`id`, `name`, `type`, `rating`, `desc`, `imgurl`)
VALUES
	(1,'Arepa','cornflour',6,'Arepa is a flat, round, cornmeal patty that is eaten in Venezuela and Colombia.','https://www.bhf.org.uk/-/media/images/heart-matters/january-2015/nutrition/arepas-620x400-hm-noexp.jpg?la=en&h=400&w=620&hash=0AA98E01F9AED800987B41BD2E2C98AC75BF5662'),
	(2,'chapati','wheat',5,'Chapati is popular Indian flat bread made with wheat flour. Instead of being baked, chapatis are toasted over a griddle till they are freckled gold.','https://www.bhf.org.uk/-/media/images/heart-matters/january-2015/nutrition/chapati-620x400-hm-noexp.jpg?la=en&h=400&w=620&hash=0641315B1AC0DADCB6BC988E4C6BFF60C527620C'),
	(3,'Damper','wheat',4,'Damper is a traditional Australian bush bread that was once cooked over in the hot coals of a campfire, but can also be baked in a normal oven.','https://www.bhf.org.uk/-/media/images/heart-matters/january-2015/nutrition/damper-620x400-hm-noexp.jpg?la=en&h=400&w=620&hash=03A59AD941797D437381C66847B9ED4F5FFDD182'),
	(4,'English muffin','wheat',1,'An English muffin is a small, round, flat type of yeast-leavened bread which is usually sliced horizontally and toasted. ','https://www.bhf.org.uk/-/media/images/heart-matters/january-2015/nutrition/english_muffin-620x400-hm-noexp.jpg?la=en&h=400&w=620&hash=B647ED1D4509F9C525F530E5042DF8E8DFC5AD7C'),
	(5,'Focaccia','Strong White',7,'Focaccia is a flat oven-baked Italian bread made of strong (high-gluten) flour, oil, water, salt and yeast.','https://www.bhf.org.uk/-/media/images/heart-matters/january-2015/nutrition/focaccia-620x400-hm-noexp.jpg?la=en&h=400&w=620&hash=723D05526EF7828F90AB7DBE53D169C62E460C84'),
	(6,'Grissini','wheat',2,'Grissini are generally pencil-sized sticks of crisp, dry bread originating in Italy.','https://www.bhf.org.uk/-/media/images/heart-matters/january-2015/nutrition/grissini-620x400-hm-noexp.jpg?la=en&h=400&w=620&hash=8D8D6B9F92225D16130EBA6FC6A12366AE6BB1F9'),
	(7,'Injera','Sourdough',8,'injera is a sourdough-risen flatbread with a unique, slightly spongy texture.','https://www.bhf.org.uk/-/media/images/heart-matters/january-2015/nutrition/injera-620x400-hm-noexp.jpg?la=en&h=400&w=620&hash=0A2F71323FD336DEFFBE503819DE94D0E03F71B3'),
	(8,'Knackebrod ','Rye',9,'Knackebrod is a flat and dry type of bread or cracker, containing mostly rye flour.','https://www.bhf.org.uk/-/media/images/heart-matters/january-2015/nutrition/knackebrod-on-board2_620x400-hm_noexp.jpg?la=en'),
	(9,'Lavash','wheat',7,'Lavash is a thin flatbread of Armenian origin, popular in the Caucasus, Iran and Turkey.','https://www.bhf.org.uk/-/media/images/heart-matters/january-2015/nutrition/lavash-620x400-hm-noexp.jpg?la=en&h=400&w=620&hash=81C618DB7FD1261DC652EE036602E0A723417E64'),
	(10,'Matzo / Matzoh','5 Grain',3,'Matzo is unleavened bread in the form of large crackers, traditionally eaten by Jews during Passover holiday.','https://www.bhf.org.uk/-/media/images/heart-matters/january-2015/nutrition/matzoh-620x400-hm-noexp.jpg?la=en&h=400&w=620&hash=26A44521794CFA2D93BCC0C5A29897A31768DDBE');

/*!40000 ALTER TABLE `bread` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
