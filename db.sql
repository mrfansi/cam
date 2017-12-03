/*
SQLyog Ultimate v12.09 (64 bit)
MySQL - 10.1.19-MariaDB : Database - core
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
/*Table structure for table `backbone` */

DROP TABLE IF EXISTS `backbone`;

CREATE TABLE `backbone` (
  `kode_link` char(20) COLLATE utf8mb4_bin NOT NULL,
  `nama_link` char(50) COLLATE utf8mb4_bin NOT NULL,
  `kapasitas_link` int(11) NOT NULL,
  `ip_addr_link` char(15) COLLATE utf8mb4_bin NOT NULL,
  PRIMARY KEY (`kode_link`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

/*Data for the table `backbone` */

insert  into `backbone`(`kode_link`,`nama_link`,`kapasitas_link`,`ip_addr_link`) values ('lnk-20171203-034803','Mv. Hamston - IDC',238,'10.202.202.11');

/*Table structure for table `backbone_detail` */

DROP TABLE IF EXISTS `backbone_detail`;

CREATE TABLE `backbone_detail` (
  `kode_link` char(20) COLLATE utf8mb4_bin NOT NULL,
  `product_link` enum('Huawei','Ceragon','ZTE','Ubiquity','Mikrotik') COLLATE utf8mb4_bin NOT NULL,
  `txfreq_link` char(7) COLLATE utf8mb4_bin NOT NULL,
  `rxfreq_link` char(7) COLLATE utf8mb4_bin NOT NULL,
  `signal_link` char(3) COLLATE utf8mb4_bin NOT NULL,
  `ssid_link` char(20) COLLATE utf8mb4_bin DEFAULT NULL,
  `mse_link` char(3) COLLATE utf8mb4_bin DEFAULT NULL,
  `mrmc_link` int(11) DEFAULT NULL,
  `linkid_link` int(11) DEFAULT NULL,
  `range_link` int(2) DEFAULT NULL,
  `txrange_link` char(50) COLLATE utf8mb4_bin DEFAULT NULL,
  `rxrange_link` char(50) COLLATE utf8mb4_bin DEFAULT NULL,
  `timestamp_link` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`kode_link`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

/*Data for the table `backbone_detail` */

insert  into `backbone_detail`(`kode_link`,`product_link`,`txfreq_link`,`rxfreq_link`,`signal_link`,`ssid_link`,`mse_link`,`mrmc_link`,`linkid_link`,`range_link`,`txrange_link`,`rxrange_link`,`timestamp_link`) values ('lnk-20171203-034803','ZTE','7947.00','8257.00','-39','','-32',238,37,10,'','','0000-00-00 00:00:00');

/*Table structure for table `kontak` */

DROP TABLE IF EXISTS `kontak`;

CREATE TABLE `kontak` (
  `kode_kontak` char(8) COLLATE utf8mb4_bin NOT NULL,
  `nama_kontak` char(20) COLLATE utf8mb4_bin NOT NULL,
  `telp_kontak` char(20) COLLATE utf8mb4_bin NOT NULL,
  `timestamp_kontak` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`kode_kontak`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

/*Data for the table `kontak` */

/*Table structure for table `kontak_pop` */

DROP TABLE IF EXISTS `kontak_pop`;

CREATE TABLE `kontak_pop` (
  `id_kontakpop` int(11) NOT NULL AUTO_INCREMENT,
  `kode_pop` char(20) COLLATE utf8mb4_bin NOT NULL,
  `kode_kontak` char(8) COLLATE utf8mb4_bin NOT NULL,
  `priority_kontakpop` int(11) DEFAULT NULL,
  `timestamp_kontakpop` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_kontakpop`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

/*Data for the table `kontak_pop` */

/*Table structure for table `pop` */

DROP TABLE IF EXISTS `pop`;

CREATE TABLE `pop` (
  `kode_pop` char(20) COLLATE utf8mb4_bin NOT NULL,
  `nama_pop` char(50) COLLATE utf8mb4_bin NOT NULL,
  `longitude_pop` char(20) COLLATE utf8mb4_bin DEFAULT NULL,
  `latitude_pop` char(20) COLLATE utf8mb4_bin DEFAULT NULL,
  `alamat_pop` longtext COLLATE utf8mb4_bin,
  `jenis_gedung_pop` enum('Perumahan','Kantor','Apartement','Hotel','Sekolah','Universitas','Lainnya') COLLATE utf8mb4_bin NOT NULL DEFAULT 'Lainnya',
  `tinggi_tower_pop` int(2) NOT NULL DEFAULT '15',
  PRIMARY KEY (`kode_pop`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

/*Data for the table `pop` */

insert  into `pop`(`kode_pop`,`nama_pop`,`longitude_pop`,`latitude_pop`,`alamat_pop`,`jenis_gedung_pop`,`tinggi_tower_pop`) values ('pop-20171202-000946','Trias','','','','Apartement',15),('pop-20171202-000957','Grandzuri Jababeka','','','','Hotel',20),('pop-20171202-001153','Grandzuri Lippo','','','','Hotel',20),('pop-20171202-001450','SMK Laboratorium','','','','Sekolah',15),('pop-20171202-001539','SMK Yuppentek2','','','','Sekolah',15),('pop-20171202-002217','Oasis Cikarang','','','','Kantor',20),('pop-20171202-002803','Tanri Abeng','','','','Universitas',20),('pop-20171202-003315','B-Zone Bekasi','','','','Perumahan',20),('pop-20171202-003432','Center Point','','','','Apartement',20),('pop-20171202-003446','Cikande','','','','Perumahan',20),('pop-20171202-003457','Clix Gading','','','','Apartement',15),('pop-20171202-003510','Duren Sawit','','','','Hotel',20),('pop-20171202-003522','Golden Sky','','','','Apartement',20),('pop-20171202-003537','Granwhiz','','','','Apartement',20),('pop-20171202-003550','Hamston','','','','Apartement',20),('pop-20171202-003638','Hotel 101 Dharmawangsa','','','','Hotel',20),('pop-20171202-003653','Hotel Istana Nelayan','','','','Hotel',10),('pop-20171202-003709','Hotel Lynt','','','','Hotel',10),('pop-20171202-003723','Hotel Santika Bintaro','','','','Hotel',15),('pop-20171202-003735','Laguna','','','','Apartement',10),('pop-20171202-004134','Modernland Tangerang','','','','Apartement',10),('pop-20171202-004142','OMNI Alam Sutra','','','','Apartement',20),('pop-20171202-004157','OMNI Pulo Mas','','','','Lainnya',30),('pop-20171202-004336','Palma','','','','Perumahan',10),('pop-20171202-032759','Paragon','','','','Hotel',0);

/*Table structure for table `vlan` */

DROP TABLE IF EXISTS `vlan`;

CREATE TABLE `vlan` (
  `vlan_id` char(8) COLLATE utf8mb4_bin NOT NULL,
  `vlan_vendor` char(20) COLLATE utf8mb4_bin NOT NULL,
  `vlan_kapasitas` int(3) NOT NULL,
  `vlan_satuan` enum('Mbps','Gbps','Kbps') COLLATE utf8mb4_bin NOT NULL,
  `kode_pop` char(20) COLLATE utf8mb4_bin DEFAULT NULL,
  PRIMARY KEY (`vlan_id`),
  KEY `kodepop_fk` (`kode_pop`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

/*Data for the table `vlan` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
