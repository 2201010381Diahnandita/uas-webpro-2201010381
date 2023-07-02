/*
SQLyog Ultimate v12.5.1 (64 bit)
MySQL - 10.4.27-MariaDB : Database - dbpasien
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`dbpasien` /*!40100 DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci */;

USE `dbpasien`;

/*Table structure for table `nama_tabel` */

DROP TABLE IF EXISTS `nama_tabel`;

CREATE TABLE `nama_tabel` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

/*Data for the table `nama_tabel` */

/*Table structure for table `tb_pasien` */

DROP TABLE IF EXISTS `tb_pasien`;

CREATE TABLE `tb_pasien` (
  `idpasien` int(20) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) DEFAULT NULL,
  `alamat` varchar(50) DEFAULT NULL,
  `tgllahir` varchar(30) DEFAULT NULL,
  `jk` varchar(20) DEFAULT NULL,
  `status` varchar(20) DEFAULT NULL,
  `tlfn` varchar(20) DEFAULT NULL,
  `tglkunjungan` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`idpasien`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

/*Data for the table `tb_pasien` */

insert  into `tb_pasien`(`idpasien`,`nama`,`alamat`,`tgllahir`,`jk`,`status`,`tlfn`,`tglkunjungan`) values 
(6,'Adi','Bali','2222-02-22','laki-laki','belum menikah','085843277825','1111-11-11'),
(7,'Ode','Bali','2222-02-22','perempuan','belum menikah','0812345678910','1111-11-11'),
(8,'Putri Ayu','Bali','2222-02-22','laki-laki','Belum menikah','12345678910','1111-11-11'),
(13,'Ngenak','Bali','1111-11-11','laki-laki','belum menikah','0812345678910','2222-02-22');

/*Table structure for table `tb_user` */

DROP TABLE IF EXISTS `tb_user`;

CREATE TABLE `tb_user` (
  `id_user` int(20) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=2147483648 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

/*Data for the table `tb_user` */

insert  into `tb_user`(`id_user`,`username`,`password`) values 
(201010381,'dinan','dinann');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
