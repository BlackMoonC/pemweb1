/*
SQLyog Ultimate v12.4.3 (64 bit)
MySQL - 10.4.18-MariaDB : Database - new_database
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`new_database` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `new_database`;

/*Table structure for table `biodata` */

DROP TABLE IF EXISTS `biodata`;

CREATE TABLE `biodata` (
  `nama` varchar(20) DEFAULT NULL,
  `alamat` varchar(30) DEFAULT NULL,
  `umur` smallint(6) DEFAULT NULL,
  `jenis_kelamin` enum('Pria','Wanita') DEFAULT NULL,
  `id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `biodata` */

insert  into `biodata`(`nama`,`alamat`,`umur`,`jenis_kelamin`,`id`) values 
(' Rakhel Cakra','Jalan Taurus 4',32,'Wanita',1),
('Jono','Nama',12,'Pria',2),
('Mariaa','jabdbf',20,'Wanita',3),
('Jono','',10,'Pria',4),
('mma','',32,'Wanita',5);

/*Table structure for table `pemilih` */

DROP TABLE IF EXISTS `pemilih`;

CREATE TABLE `pemilih` (
  `nim` int(11) NOT NULL,
  `nama` varchar(11) DEFAULT NULL,
  PRIMARY KEY (`nim`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `pemilih` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
