/*
SQLyog Professional v13.1.1 (64 bit)
MySQL - 5.7.11 : Database - todo
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`todo` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `todo`;

/*Table structure for table `item` */

DROP TABLE IF EXISTS `item`;

CREATE TABLE `item` (
  `Id` int(100) NOT NULL AUTO_INCREMENT,
  `description` varchar(20) DEFAULT NULL,
  `isdone` tinyint(1) DEFAULT NULL,
  `createdt` datetime DEFAULT NULL,
  `itemPosition` int(100) NOT NULL DEFAULT '1',
  `listColor` varchar(10) NOT NULL DEFAULT '#73b8bf',
  PRIMARY KEY (`Id`),
  KEY `Id` (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=254 DEFAULT CHARSET=latin1;

/*Data for the table `item` */

insert  into `item`(`Id`,`description`,`isdone`,`createdt`,`itemPosition`,`listColor`) values 
(249,'news',0,'2020-06-08 07:51:50',3,'colorRed'),
(251,'uzair',0,'2020-06-08 07:52:06',2,'colorBlue'),
(252,'ssssssss',0,'2020-06-08 07:52:17',1,'colorBlue'),
(253,'do not distrub 6',1,'2020-06-08 07:52:31',4,'colorBlue');

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `Id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(20) DEFAULT NULL,
  KEY `Id` (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `users` */

insert  into `users`(`Id`,`username`) values 
(1,'admin	');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
