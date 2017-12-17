/*
SQLyog Ultimate v12.09 (64 bit)
MySQL - 5.7.14-google-log : Database - cam
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`cam` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `cam`;

/*Table structure for table `backbone` */

CREATE TABLE `backbone` (
  `kode_link` char(20) COLLATE utf8mb4_bin NOT NULL,
  `nama_link` char(50) COLLATE utf8mb4_bin NOT NULL,
  `kapasitas_link` int(11) NOT NULL DEFAULT '184',
  `ip_addr_link` char(15) COLLATE utf8mb4_bin NOT NULL,
  `product_link` enum('Huawei','Ceragon','ZTE','Ubiquity','Mikrotik') COLLATE utf8mb4_bin NOT NULL,
  `txfreq_link` char(10) COLLATE utf8mb4_bin NOT NULL,
  `rxfreq_link` char(10) COLLATE utf8mb4_bin NOT NULL,
  `signal_link` char(3) COLLATE utf8mb4_bin NOT NULL,
  `status_link` tinyint(1) NOT NULL DEFAULT '1',
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`kode_link`,`ip_addr_link`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

/*Data for the table `backbone` */

insert  into `backbone`(`kode_link`,`nama_link`,`kapasitas_link`,`ip_addr_link`,`product_link`,`txfreq_link`,`rxfreq_link`,`signal_link`,`status_link`,`updated_at`,`created_at`) values ('lnk-20171203-034803','Mv. Hamston - IDC',238,'10.202.202.11','Huawei','7947.000','8257.000','-39',1,'2017-12-16 14:24:05',NULL);
insert  into `backbone`(`kode_link`,`nama_link`,`kapasitas_link`,`ip_addr_link`,`product_link`,`txfreq_link`,`rxfreq_link`,`signal_link`,`status_link`,`updated_at`,`created_at`) values ('lnk-20171203-044125','Mv. Bintaro - Omni',238,'10.202.202.18','Ceragon','7889.000','8200.000','-42',1,NULL,NULL);
insert  into `backbone`(`kode_link`,`nama_link`,`kapasitas_link`,`ip_addr_link`,`product_link`,`txfreq_link`,`rxfreq_link`,`signal_link`,`status_link`,`updated_at`,`created_at`) values ('lnk-20171203-053831','Mv. Hamston - Santika',274,'10.202.202.34','Ceragon','7640.000','7479.000','-43',1,NULL,NULL);
insert  into `backbone`(`kode_link`,`nama_link`,`kapasitas_link`,`ip_addr_link`,`product_link`,`txfreq_link`,`rxfreq_link`,`signal_link`,`status_link`,`updated_at`,`created_at`) values ('lnk-20171203-055518','Mv. IDC - Hamston',238,'10.202.202.10','ZTE','8257.000','7947.000','-40',1,NULL,NULL);
insert  into `backbone`(`kode_link`,`nama_link`,`kapasitas_link`,`ip_addr_link`,`product_link`,`txfreq_link`,`rxfreq_link`,`signal_link`,`status_link`,`updated_at`,`created_at`) values ('lnk-20171203-055749','Mv. Robinson - Rajawali',184,'10.202.202.75','Ceragon','8073.845','7762.525','-41',1,NULL,NULL);
insert  into `backbone`(`kode_link`,`nama_link`,`kapasitas_link`,`ip_addr_link`,`product_link`,`txfreq_link`,`rxfreq_link`,`signal_link`,`status_link`,`updated_at`,`created_at`) values ('lnk-20171203-060055','Mv. Rajawali - Palma',114,'10.202.202.66','ZTE','7792.175','8103.500','-54',1,NULL,NULL);
insert  into `backbone`(`kode_link`,`nama_link`,`kapasitas_link`,`ip_addr_link`,`product_link`,`txfreq_link`,`rxfreq_link`,`signal_link`,`status_link`,`updated_at`,`created_at`) values ('lnk-20171204-021016','Mv. Palma - Rajawali',150,'10.202.202.67','ZTE','8103.500','7792.175','-58',1,NULL,NULL);
insert  into `backbone`(`kode_link`,`nama_link`,`kapasitas_link`,`ip_addr_link`,`product_link`,`txfreq_link`,`rxfreq_link`,`signal_link`,`status_link`,`updated_at`,`created_at`) values ('lnk-20171204-021049','Mv. Laguna - Trias',338,'10.202.202.98','ZTE','8248.000','7982.000','-44',1,NULL,NULL);
insert  into `backbone`(`kode_link`,`nama_link`,`kapasitas_link`,`ip_addr_link`,`product_link`,`txfreq_link`,`rxfreq_link`,`signal_link`,`status_link`,`updated_at`,`created_at`) values ('lnk-20171204-021812','Mv. Trias - Laguna',248,'10.202.202.99','ZTE','7982.000','8248.000','-44',1,NULL,NULL);
insert  into `backbone`(`kode_link`,`nama_link`,`kapasitas_link`,`ip_addr_link`,`product_link`,`txfreq_link`,`rxfreq_link`,`signal_link`,`status_link`,`updated_at`,`created_at`) values ('lnk-20171204-022343','Mv. Laguna - Puri',199,'10.202.202.106','Ceragon','7428.000','7267.000','-53',1,NULL,NULL);
insert  into `backbone`(`kode_link`,`nama_link`,`kapasitas_link`,`ip_addr_link`,`product_link`,`txfreq_link`,`rxfreq_link`,`signal_link`,`status_link`,`updated_at`,`created_at`) values ('lnk-20171204-022816','Mv. Puri - Laguna',199,'10.202.202.107','ZTE','7267.000','7428.000','-64',0,NULL,NULL);
insert  into `backbone`(`kode_link`,`nama_link`,`kapasitas_link`,`ip_addr_link`,`product_link`,`txfreq_link`,`rxfreq_link`,`signal_link`,`status_link`,`updated_at`,`created_at`) values ('lnk-20171204-023000','Mv. Cengkareng Office - PIK',274,'10.202.202.115','ZTE','7875.000','8230.000','-41',1,NULL,NULL);
insert  into `backbone`(`kode_link`,`nama_link`,`kapasitas_link`,`ip_addr_link`,`product_link`,`txfreq_link`,`rxfreq_link`,`signal_link`,`status_link`,`updated_at`,`created_at`) values ('lnk-20171204-023125','Mv. PIK - Cengkareng Office',274,'10.202.202.114','ZTE','8230.000','7875.000','-47',1,NULL,NULL);
insert  into `backbone`(`kode_link`,`nama_link`,`kapasitas_link`,`ip_addr_link`,`product_link`,`txfreq_link`,`rxfreq_link`,`signal_link`,`status_link`,`updated_at`,`created_at`) values ('lnk-20171204-023505','Mv. Paragon - Omni',199,'10.202.202.91','Ceragon','12905.000','13171.000','-50',1,NULL,NULL);
insert  into `backbone`(`kode_link`,`nama_link`,`kapasitas_link`,`ip_addr_link`,`product_link`,`txfreq_link`,`rxfreq_link`,`signal_link`,`status_link`,`updated_at`,`created_at`) values ('lnk-20171211-041021','MV.Omni-Paragon',200,'10.202.202.90','Ceragon','13171.000','12905.000','-48',1,NULL,NULL);
insert  into `backbone`(`kode_link`,`nama_link`,`kapasitas_link`,`ip_addr_link`,`product_link`,`txfreq_link`,`rxfreq_link`,`signal_link`,`status_link`,`updated_at`,`created_at`) values ('lnk-20171212-035550','MV.Bintaro-Omni',238,'10.202.202.18','Ceragon','7889.000','8200.000','-42',1,NULL,NULL);
insert  into `backbone`(`kode_link`,`nama_link`,`kapasitas_link`,`ip_addr_link`,`product_link`,`txfreq_link`,`rxfreq_link`,`signal_link`,`status_link`,`updated_at`,`created_at`) values ('lnk-20171212-040045','MV.Omni-Bintaro',238,'10.202.202.19','Ceragon','8200.000','7889.000','-42',1,NULL,NULL);
insert  into `backbone`(`kode_link`,`nama_link`,`kapasitas_link`,`ip_addr_link`,`product_link`,`txfreq_link`,`rxfreq_link`,`signal_link`,`status_link`,`updated_at`,`created_at`) values ('lnk-20171212-043738','MV.Rajawali - Robinson',184,'10.202.202.74','Ceragon','7762.525','8073.845','-39',1,NULL,NULL);
insert  into `backbone`(`kode_link`,`nama_link`,`kapasitas_link`,`ip_addr_link`,`product_link`,`txfreq_link`,`rxfreq_link`,`signal_link`,`status_link`,`updated_at`,`created_at`) values ('lnk-20171212-044358','MV.Plaza - Paragon',200,'10.202.202.178','Ceragon','7926.000','8192.000','-41',1,NULL,NULL);
insert  into `backbone`(`kode_link`,`nama_link`,`kapasitas_link`,`ip_addr_link`,`product_link`,`txfreq_link`,`rxfreq_link`,`signal_link`,`status_link`,`updated_at`,`created_at`) values ('lnk-20171212-045355','MV.PALMA-PURI',106,'10.202.202.243','Ceragon','7336.500','7175.500','-39',1,NULL,NULL);
insert  into `backbone`(`kode_link`,`nama_link`,`kapasitas_link`,`ip_addr_link`,`product_link`,`txfreq_link`,`rxfreq_link`,`signal_link`,`status_link`,`updated_at`,`created_at`) values ('lnk-20171212-045534','MV. Puri - Palma',106,'10.202.202.242','Ceragon','7175.500','7336.500','-39',1,NULL,NULL);
insert  into `backbone`(`kode_link`,`nama_link`,`kapasitas_link`,`ip_addr_link`,`product_link`,`txfreq_link`,`rxfreq_link`,`signal_link`,`status_link`,`updated_at`,`created_at`) values ('lnk-20171212-075553','MV.Grandwiz-Bekasi Bzone',367,'10.202.202.122','ZTE','8100.000','7800.000','-47',1,NULL,NULL);
insert  into `backbone`(`kode_link`,`nama_link`,`kapasitas_link`,`ip_addr_link`,`product_link`,`txfreq_link`,`rxfreq_link`,`signal_link`,`status_link`,`updated_at`,`created_at`) values ('lnk-20171212-075613','Mv. IDC - Grandika',238,'10.204.205.82','Ceragon','7497.000','7658.000','-40',1,NULL,NULL);
insert  into `backbone`(`kode_link`,`nama_link`,`kapasitas_link`,`ip_addr_link`,`product_link`,`txfreq_link`,`rxfreq_link`,`signal_link`,`status_link`,`updated_at`,`created_at`) values ('lnk-20171212-080248','MV. Mayapada - Hamston',337,'10.203.205.75','Ceragon','7194.500','7355.500','-41',1,NULL,NULL);
insert  into `backbone`(`kode_link`,`nama_link`,`kapasitas_link`,`ip_addr_link`,`product_link`,`txfreq_link`,`rxfreq_link`,`signal_link`,`status_link`,`updated_at`,`created_at`) values ('lnk-20171212-080254','MV.Hamston - Mayapada',337,'10.203.205.74','Ceragon','7355.500','7194.500','-41',1,NULL,NULL);
insert  into `backbone`(`kode_link`,`nama_link`,`kapasitas_link`,`ip_addr_link`,`product_link`,`txfreq_link`,`rxfreq_link`,`signal_link`,`status_link`,`updated_at`,`created_at`) values ('lnk-20171212-081230','MV.Depok - Cibinong',165,'10.203.205.2','Ceragon','8207.270','7895.950','-49',1,NULL,NULL);
insert  into `backbone`(`kode_link`,`nama_link`,`kapasitas_link`,`ip_addr_link`,`product_link`,`txfreq_link`,`rxfreq_link`,`signal_link`,`status_link`,`updated_at`,`created_at`) values ('lnk-20171212-081409','MV.Cibinong - Depok',181,'10.203.205.3','Ceragon','7895.950','8207.270','-52',1,NULL,NULL);
insert  into `backbone`(`kode_link`,`nama_link`,`kapasitas_link`,`ip_addr_link`,`product_link`,`txfreq_link`,`rxfreq_link`,`signal_link`,`status_link`,`updated_at`,`created_at`) values ('lnk-20171212-081703','MV. Modernland - Hotel Days',367,'10.203.205.42','ZTE','7765.150','8076.150','-41',0,NULL,NULL);
insert  into `backbone`(`kode_link`,`nama_link`,`kapasitas_link`,`ip_addr_link`,`product_link`,`txfreq_link`,`rxfreq_link`,`signal_link`,`status_link`,`updated_at`,`created_at`) values ('lnk-20171212-082047','MV.HotelDays - Modernland',297,'10.203.205.43','ZTE','8076.150','7765.150','-44',1,NULL,NULL);
insert  into `backbone`(`kode_link`,`nama_link`,`kapasitas_link`,`ip_addr_link`,`product_link`,`txfreq_link`,`rxfreq_link`,`signal_link`,`status_link`,`updated_at`,`created_at`) values ('lnk-20171212-082057','MV.Oasis - Lippo',238,'10.203.205.67','ZTE','7791.000','8102.000','-37',1,NULL,NULL);
insert  into `backbone`(`kode_link`,`nama_link`,`kapasitas_link`,`ip_addr_link`,`product_link`,`txfreq_link`,`rxfreq_link`,`signal_link`,`status_link`,`updated_at`,`created_at`) values ('lnk-20171212-082505','MV.Omni - Tridinamika',256,'10.203.205.82','ZTE','8157.000','7851.200','-41',1,NULL,NULL);
insert  into `backbone`(`kode_link`,`nama_link`,`kapasitas_link`,`ip_addr_link`,`product_link`,`txfreq_link`,`rxfreq_link`,`signal_link`,`status_link`,`updated_at`,`created_at`) values ('lnk-20171212-082851','MV.Tridinamika - Omni',256,'10.203.205.83','ZTE','7851.200','8157.000','-40',1,NULL,NULL);
insert  into `backbone`(`kode_link`,`nama_link`,`kapasitas_link`,`ip_addr_link`,`product_link`,`txfreq_link`,`rxfreq_link`,`signal_link`,`status_link`,`updated_at`,`created_at`) values ('lnk-20171213-040537','MV.Omni Pulomas - Teras Kita',184,'10.202.202.26','ZTE','7925.800','8193.120','-44',1,NULL,NULL);
insert  into `backbone`(`kode_link`,`nama_link`,`kapasitas_link`,`ip_addr_link`,`product_link`,`txfreq_link`,`rxfreq_link`,`signal_link`,`status_link`,`updated_at`,`created_at`) values ('lnk-20171213-040902','MV.Teras Kita - Omni Pulomas',184,'10.202.202.28','ZTE','8193.120','7925.800','-48',1,NULL,NULL);
insert  into `backbone`(`kode_link`,`nama_link`,`kapasitas_link`,`ip_addr_link`,`product_link`,`txfreq_link`,`rxfreq_link`,`signal_link`,`status_link`,`updated_at`,`created_at`) values ('lnk-20171213-040950','MV.B-zone-Centerpoint',184,'10.202.202.42','Ceragon','7910.775','8222.095','-40',1,NULL,NULL);
insert  into `backbone`(`kode_link`,`nama_link`,`kapasitas_link`,`ip_addr_link`,`product_link`,`txfreq_link`,`rxfreq_link`,`signal_link`,`status_link`,`updated_at`,`created_at`) values ('lnk-20171213-041158','MV.Centerpoint-Bekasi-Bzone',184,'10.202.202.44','Ceragon','8222.095','7910.775','-39',1,NULL,NULL);
insert  into `backbone`(`kode_link`,`nama_link`,`kapasitas_link`,`ip_addr_link`,`product_link`,`txfreq_link`,`rxfreq_link`,`signal_link`,`status_link`,`updated_at`,`created_at`) values ('lnk-20171213-041444','MV.Rajawali - Laguna Link 1',338,'10.202.202.50','ZTE','7870.000','8181.320','-50',1,NULL,NULL);
insert  into `backbone`(`kode_link`,`nama_link`,`kapasitas_link`,`ip_addr_link`,`product_link`,`txfreq_link`,`rxfreq_link`,`signal_link`,`status_link`,`updated_at`,`created_at`) values ('lnk-20171213-041656','MV.Rajawali-Amaris',162,'10.202.202.54','Ceragon','7836.650','8147.970','-41',1,NULL,NULL);
insert  into `backbone`(`kode_link`,`nama_link`,`kapasitas_link`,`ip_addr_link`,`product_link`,`txfreq_link`,`rxfreq_link`,`signal_link`,`status_link`,`updated_at`,`created_at`) values ('lnk-20171213-041948','MV.Laguna - Priuk',337,'10.202.202.82','ZTE','7299.500','7138.500','-48',1,NULL,NULL);
insert  into `backbone`(`kode_link`,`nama_link`,`kapasitas_link`,`ip_addr_link`,`product_link`,`txfreq_link`,`rxfreq_link`,`signal_link`,`status_link`,`updated_at`,`created_at`) values ('lnk-20171213-042629','MV.Bzone - Grandwiz',297,'10.202.202.123','ZTE','7800.000','8100.000','-42',1,NULL,NULL);
insert  into `backbone`(`kode_link`,`nama_link`,`kapasitas_link`,`ip_addr_link`,`product_link`,`txfreq_link`,`rxfreq_link`,`signal_link`,`status_link`,`updated_at`,`created_at`) values ('lnk-20171213-042705','MV.Center Poins - Grand-Lippo',199,'10.202.202.130','Ceragon','8055.000','7745.000','-42',1,NULL,NULL);
insert  into `backbone`(`kode_link`,`nama_link`,`kapasitas_link`,`ip_addr_link`,`product_link`,`txfreq_link`,`rxfreq_link`,`signal_link`,`status_link`,`updated_at`,`created_at`) values ('lnk-20171213-043121','MV.CP - Duren Sawit',181,'10.202.202.138','Ceragon','8045.000','7734.000','-46',1,NULL,NULL);
insert  into `backbone`(`kode_link`,`nama_link`,`kapasitas_link`,`ip_addr_link`,`product_link`,`txfreq_link`,`rxfreq_link`,`signal_link`,`status_link`,`updated_at`,`created_at`) values ('lnk-20171213-043316','MV.AMARIS - Rajawali',162,'10.202.202.150','Ceragon','8147.970','7836.650','-46',1,NULL,NULL);
insert  into `backbone`(`kode_link`,`nama_link`,`kapasitas_link`,`ip_addr_link`,`product_link`,`txfreq_link`,`rxfreq_link`,`signal_link`,`status_link`,`updated_at`,`created_at`) values ('lnk-20171213-043826','MV.Laguna - PIK',184,'10.202.202.162','Ceragon','7733.000','8045.000','-49',1,NULL,NULL);
insert  into `backbone`(`kode_link`,`nama_link`,`kapasitas_link`,`ip_addr_link`,`product_link`,`txfreq_link`,`rxfreq_link`,`signal_link`,`status_link`,`updated_at`,`created_at`) values ('lnk-20171213-044407','MV. PIK - Laguna',184,'10.202.202.163','Ceragon','8045.000','7733.000','-49',1,NULL,NULL);
insert  into `backbone`(`kode_link`,`nama_link`,`kapasitas_link`,`ip_addr_link`,`product_link`,`txfreq_link`,`rxfreq_link`,`signal_link`,`status_link`,`updated_at`,`created_at`) values ('lnk-20171213-044902','MV.Santika BSD - Omni AS',238,'10.202.202.170','Ceragon','8163.000','7851.000','-46',0,NULL,NULL);
insert  into `backbone`(`kode_link`,`nama_link`,`kapasitas_link`,`ip_addr_link`,`product_link`,`txfreq_link`,`rxfreq_link`,`signal_link`,`status_link`,`updated_at`,`created_at`) values ('lnk-20171213-045248','MV.Omni - Santika',238,'10.202.202.171','Ceragon','7851.000','8163.000','-49',1,NULL,NULL);
insert  into `backbone`(`kode_link`,`nama_link`,`kapasitas_link`,`ip_addr_link`,`product_link`,`txfreq_link`,`rxfreq_link`,`signal_link`,`status_link`,`updated_at`,`created_at`) values ('lnk-20171213-045900','MV.Puri - Tanri Abeng',199,'10.202.202.194','Ceragon','7898.000','8188.000','-49',1,NULL,NULL);

/*Table structure for table `backbone_detail` */

CREATE TABLE `backbone_detail` (
  `kode_link` char(20) COLLATE utf8mb4_bin NOT NULL,
  `mse_link` char(3) COLLATE utf8mb4_bin DEFAULT NULL,
  `linkid_link` char(5) COLLATE utf8mb4_bin DEFAULT NULL,
  `range_link` int(2) DEFAULT NULL,
  `txrange_link` char(50) COLLATE utf8mb4_bin DEFAULT NULL,
  `rxrange_link` char(50) COLLATE utf8mb4_bin DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`kode_link`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

/*Data for the table `backbone_detail` */

insert  into `backbone_detail`(`kode_link`,`mse_link`,`linkid_link`,`range_link`,`txrange_link`,`rxrange_link`,`updated_at`,`created_at`) values ('lnk-20171203-034803','-32','39',10,'','','2017-12-16 14:24:05',NULL);
insert  into `backbone_detail`(`kode_link`,`mse_link`,`linkid_link`,`range_link`,`txrange_link`,`rxrange_link`,`updated_at`,`created_at`) values ('lnk-20171203-044125','-33','7658',10,'','',NULL,NULL);
insert  into `backbone_detail`(`kode_link`,`mse_link`,`linkid_link`,`range_link`,`txrange_link`,`rxrange_link`,`updated_at`,`created_at`) values ('lnk-20171203-053831','-32','2166',10,'','',NULL,NULL);
insert  into `backbone_detail`(`kode_link`,`mse_link`,`linkid_link`,`range_link`,`txrange_link`,`rxrange_link`,`updated_at`,`created_at`) values ('lnk-20171203-055518','-25','37',10,'','',NULL,NULL);
insert  into `backbone_detail`(`kode_link`,`mse_link`,`linkid_link`,`range_link`,`txrange_link`,`rxrange_link`,`updated_at`,`created_at`) values ('lnk-20171203-055749','-32','7895',10,'','',NULL,NULL);
insert  into `backbone_detail`(`kode_link`,`mse_link`,`linkid_link`,`range_link`,`txrange_link`,`rxrange_link`,`updated_at`,`created_at`) values ('lnk-20171203-060055','-17','65535',10,'','',NULL,NULL);
insert  into `backbone_detail`(`kode_link`,`mse_link`,`linkid_link`,`range_link`,`txrange_link`,`rxrange_link`,`updated_at`,`created_at`) values ('lnk-20171204-021016','-16','65535',10,'','',NULL,NULL);
insert  into `backbone_detail`(`kode_link`,`mse_link`,`linkid_link`,`range_link`,`txrange_link`,`rxrange_link`,`updated_at`,`created_at`) values ('lnk-20171204-021049','-24','9354',10,'','',NULL,NULL);
insert  into `backbone_detail`(`kode_link`,`mse_link`,`linkid_link`,`range_link`,`txrange_link`,`rxrange_link`,`updated_at`,`created_at`) values ('lnk-20171204-021812','-30','9354',10,'','',NULL,NULL);
insert  into `backbone_detail`(`kode_link`,`mse_link`,`linkid_link`,`range_link`,`txrange_link`,`rxrange_link`,`updated_at`,`created_at`) values ('lnk-20171204-022343','-33','192',10,'','',NULL,NULL);
insert  into `backbone_detail`(`kode_link`,`mse_link`,`linkid_link`,`range_link`,`txrange_link`,`rxrange_link`,`updated_at`,`created_at`) values ('lnk-20171204-022816','-25','',10,'','',NULL,NULL);
insert  into `backbone_detail`(`kode_link`,`mse_link`,`linkid_link`,`range_link`,`txrange_link`,`rxrange_link`,`updated_at`,`created_at`) values ('lnk-20171204-023000','-32','254',10,'','',NULL,NULL);
insert  into `backbone_detail`(`kode_link`,`mse_link`,`linkid_link`,`range_link`,`txrange_link`,`rxrange_link`,`updated_at`,`created_at`) values ('lnk-20171204-023125','-27','254',10,'','',NULL,NULL);
insert  into `backbone_detail`(`kode_link`,`mse_link`,`linkid_link`,`range_link`,`txrange_link`,`rxrange_link`,`updated_at`,`created_at`) values ('lnk-20171204-023505','-26','1313',10,'','',NULL,NULL);
insert  into `backbone_detail`(`kode_link`,`mse_link`,`linkid_link`,`range_link`,`txrange_link`,`rxrange_link`,`updated_at`,`created_at`) values ('lnk-20171211-041021','-32','',12,'','',NULL,NULL);
insert  into `backbone_detail`(`kode_link`,`mse_link`,`linkid_link`,`range_link`,`txrange_link`,`rxrange_link`,`updated_at`,`created_at`) values ('lnk-20171212-035550','-32','',1,'','',NULL,NULL);
insert  into `backbone_detail`(`kode_link`,`mse_link`,`linkid_link`,`range_link`,`txrange_link`,`rxrange_link`,`updated_at`,`created_at`) values ('lnk-20171212-040045','-28','',1,'','',NULL,NULL);
insert  into `backbone_detail`(`kode_link`,`mse_link`,`linkid_link`,`range_link`,`txrange_link`,`rxrange_link`,`updated_at`,`created_at`) values ('lnk-20171212-043738','-32','',1,'','',NULL,NULL);
insert  into `backbone_detail`(`kode_link`,`mse_link`,`linkid_link`,`range_link`,`txrange_link`,`rxrange_link`,`updated_at`,`created_at`) values ('lnk-20171212-044358','-33','',0,'','',NULL,NULL);
insert  into `backbone_detail`(`kode_link`,`mse_link`,`linkid_link`,`range_link`,`txrange_link`,`rxrange_link`,`updated_at`,`created_at`) values ('lnk-20171212-045355','-30','',0,'','',NULL,NULL);
insert  into `backbone_detail`(`kode_link`,`mse_link`,`linkid_link`,`range_link`,`txrange_link`,`rxrange_link`,`updated_at`,`created_at`) values ('lnk-20171212-045534','-31','',0,'','',NULL,NULL);
insert  into `backbone_detail`(`kode_link`,`mse_link`,`linkid_link`,`range_link`,`txrange_link`,`rxrange_link`,`updated_at`,`created_at`) values ('lnk-20171212-075553','-28','',0,'','',NULL,NULL);
insert  into `backbone_detail`(`kode_link`,`mse_link`,`linkid_link`,`range_link`,`txrange_link`,`rxrange_link`,`updated_at`,`created_at`) values ('lnk-20171212-075613','-28','',0,'','',NULL,NULL);
insert  into `backbone_detail`(`kode_link`,`mse_link`,`linkid_link`,`range_link`,`txrange_link`,`rxrange_link`,`updated_at`,`created_at`) values ('lnk-20171212-080248','-31','',0,'','',NULL,NULL);
insert  into `backbone_detail`(`kode_link`,`mse_link`,`linkid_link`,`range_link`,`txrange_link`,`rxrange_link`,`updated_at`,`created_at`) values ('lnk-20171212-080254','-32','',0,'','',NULL,NULL);
insert  into `backbone_detail`(`kode_link`,`mse_link`,`linkid_link`,`range_link`,`txrange_link`,`rxrange_link`,`updated_at`,`created_at`) values ('lnk-20171212-081230','-33','',0,'','',NULL,NULL);
insert  into `backbone_detail`(`kode_link`,`mse_link`,`linkid_link`,`range_link`,`txrange_link`,`rxrange_link`,`updated_at`,`created_at`) values ('lnk-20171212-081409','-30','',0,'','',NULL,NULL);
insert  into `backbone_detail`(`kode_link`,`mse_link`,`linkid_link`,`range_link`,`txrange_link`,`rxrange_link`,`updated_at`,`created_at`) values ('lnk-20171212-081703','-27','',0,'','',NULL,NULL);
insert  into `backbone_detail`(`kode_link`,`mse_link`,`linkid_link`,`range_link`,`txrange_link`,`rxrange_link`,`updated_at`,`created_at`) values ('lnk-20171212-082047','-32','',0,'','',NULL,NULL);
insert  into `backbone_detail`(`kode_link`,`mse_link`,`linkid_link`,`range_link`,`txrange_link`,`rxrange_link`,`updated_at`,`created_at`) values ('lnk-20171212-082057','-33','',0,'','',NULL,NULL);
insert  into `backbone_detail`(`kode_link`,`mse_link`,`linkid_link`,`range_link`,`txrange_link`,`rxrange_link`,`updated_at`,`created_at`) values ('lnk-20171212-082505','-29','',0,'','',NULL,NULL);
insert  into `backbone_detail`(`kode_link`,`mse_link`,`linkid_link`,`range_link`,`txrange_link`,`rxrange_link`,`updated_at`,`created_at`) values ('lnk-20171212-082851','-28','',0,'','',NULL,NULL);
insert  into `backbone_detail`(`kode_link`,`mse_link`,`linkid_link`,`range_link`,`txrange_link`,`rxrange_link`,`updated_at`,`created_at`) values ('lnk-20171213-040537','-30','',0,'','',NULL,NULL);
insert  into `backbone_detail`(`kode_link`,`mse_link`,`linkid_link`,`range_link`,`txrange_link`,`rxrange_link`,`updated_at`,`created_at`) values ('lnk-20171213-040902','-30','',0,'','',NULL,NULL);
insert  into `backbone_detail`(`kode_link`,`mse_link`,`linkid_link`,`range_link`,`txrange_link`,`rxrange_link`,`updated_at`,`created_at`) values ('lnk-20171213-040950','-33','',0,'','',NULL,NULL);
insert  into `backbone_detail`(`kode_link`,`mse_link`,`linkid_link`,`range_link`,`txrange_link`,`rxrange_link`,`updated_at`,`created_at`) values ('lnk-20171213-041158','-32','',0,'','',NULL,NULL);
insert  into `backbone_detail`(`kode_link`,`mse_link`,`linkid_link`,`range_link`,`txrange_link`,`rxrange_link`,`updated_at`,`created_at`) values ('lnk-20171213-041444','-29','',0,'','',NULL,NULL);
insert  into `backbone_detail`(`kode_link`,`mse_link`,`linkid_link`,`range_link`,`txrange_link`,`rxrange_link`,`updated_at`,`created_at`) values ('lnk-20171213-041656','-33','',0,'','',NULL,NULL);
insert  into `backbone_detail`(`kode_link`,`mse_link`,`linkid_link`,`range_link`,`txrange_link`,`rxrange_link`,`updated_at`,`created_at`) values ('lnk-20171213-041948','-30','',0,'','',NULL,NULL);
insert  into `backbone_detail`(`kode_link`,`mse_link`,`linkid_link`,`range_link`,`txrange_link`,`rxrange_link`,`updated_at`,`created_at`) values ('lnk-20171213-042629','-33','',0,'','',NULL,NULL);
insert  into `backbone_detail`(`kode_link`,`mse_link`,`linkid_link`,`range_link`,`txrange_link`,`rxrange_link`,`updated_at`,`created_at`) values ('lnk-20171213-042705','-28','',10,'','',NULL,NULL);
insert  into `backbone_detail`(`kode_link`,`mse_link`,`linkid_link`,`range_link`,`txrange_link`,`rxrange_link`,`updated_at`,`created_at`) values ('lnk-20171213-043121','-32','',0,'','',NULL,NULL);
insert  into `backbone_detail`(`kode_link`,`mse_link`,`linkid_link`,`range_link`,`txrange_link`,`rxrange_link`,`updated_at`,`created_at`) values ('lnk-20171213-043316','-34','',0,'','',NULL,NULL);
insert  into `backbone_detail`(`kode_link`,`mse_link`,`linkid_link`,`range_link`,`txrange_link`,`rxrange_link`,`updated_at`,`created_at`) values ('lnk-20171213-043826','-27','',0,'','',NULL,NULL);
insert  into `backbone_detail`(`kode_link`,`mse_link`,`linkid_link`,`range_link`,`txrange_link`,`rxrange_link`,`updated_at`,`created_at`) values ('lnk-20171213-044407','-27','',10,'','',NULL,NULL);
insert  into `backbone_detail`(`kode_link`,`mse_link`,`linkid_link`,`range_link`,`txrange_link`,`rxrange_link`,`updated_at`,`created_at`) values ('lnk-20171213-044902','-24','',0,'','',NULL,NULL);
insert  into `backbone_detail`(`kode_link`,`mse_link`,`linkid_link`,`range_link`,`txrange_link`,`rxrange_link`,`updated_at`,`created_at`) values ('lnk-20171213-045248','-27','',0,'','',NULL,NULL);
insert  into `backbone_detail`(`kode_link`,`mse_link`,`linkid_link`,`range_link`,`txrange_link`,`rxrange_link`,`updated_at`,`created_at`) values ('lnk-20171213-045900','-31','',0,'','',NULL,NULL);

/*Table structure for table `kontak` */

CREATE TABLE `kontak` (
  `kode_kontak` char(8) COLLATE utf8mb4_bin NOT NULL,
  `nama_kontak` char(20) COLLATE utf8mb4_bin NOT NULL,
  `telp_kontak` char(20) COLLATE utf8mb4_bin NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`kode_kontak`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

/*Data for the table `kontak` */

/*Table structure for table `kontak_pop` */

CREATE TABLE `kontak_pop` (
  `id_kontakpop` int(11) NOT NULL AUTO_INCREMENT,
  `kode_pop` char(20) COLLATE utf8mb4_bin NOT NULL,
  `kode_kontak` char(8) COLLATE utf8mb4_bin NOT NULL,
  `priority_kontakpop` int(11) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_kontakpop`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

/*Data for the table `kontak_pop` */

/*Table structure for table `pop` */

CREATE TABLE `pop` (
  `kode_pop` char(20) COLLATE utf8mb4_bin NOT NULL,
  `nama_pop` char(50) COLLATE utf8mb4_bin NOT NULL,
  `longitude_pop` char(20) COLLATE utf8mb4_bin DEFAULT NULL,
  `latitude_pop` char(20) COLLATE utf8mb4_bin DEFAULT NULL,
  `alamat_pop` longtext COLLATE utf8mb4_bin,
  `jenis_gedung_pop` enum('Perumahan','Kantor','Apartement','Hotel','Sekolah','Universitas','Lainnya') COLLATE utf8mb4_bin NOT NULL DEFAULT 'Lainnya',
  `tinggi_tower_pop` int(2) NOT NULL DEFAULT '15',
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`kode_pop`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

/*Data for the table `pop` */

insert  into `pop`(`kode_pop`,`nama_pop`,`longitude_pop`,`latitude_pop`,`alamat_pop`,`jenis_gedung_pop`,`tinggi_tower_pop`,`updated_at`,`created_at`) values ('pop-20171202-001153','Grandzuri Lippo','','','','Hotel',20,'2017-12-17 06:49:31',NULL);
insert  into `pop`(`kode_pop`,`nama_pop`,`longitude_pop`,`latitude_pop`,`alamat_pop`,`jenis_gedung_pop`,`tinggi_tower_pop`,`updated_at`,`created_at`) values ('pop-20171202-001450','SMK Laboratorium','','','','Sekolah',15,NULL,NULL);
insert  into `pop`(`kode_pop`,`nama_pop`,`longitude_pop`,`latitude_pop`,`alamat_pop`,`jenis_gedung_pop`,`tinggi_tower_pop`,`updated_at`,`created_at`) values ('pop-20171202-001539','SMK Yuppentek2','','','','Sekolah',15,NULL,NULL);
insert  into `pop`(`kode_pop`,`nama_pop`,`longitude_pop`,`latitude_pop`,`alamat_pop`,`jenis_gedung_pop`,`tinggi_tower_pop`,`updated_at`,`created_at`) values ('pop-20171202-002217','Oasis Cikarang','','','','Kantor',20,NULL,NULL);
insert  into `pop`(`kode_pop`,`nama_pop`,`longitude_pop`,`latitude_pop`,`alamat_pop`,`jenis_gedung_pop`,`tinggi_tower_pop`,`updated_at`,`created_at`) values ('pop-20171202-002803','Tanri Abeng','','','','Universitas',20,NULL,NULL);
insert  into `pop`(`kode_pop`,`nama_pop`,`longitude_pop`,`latitude_pop`,`alamat_pop`,`jenis_gedung_pop`,`tinggi_tower_pop`,`updated_at`,`created_at`) values ('pop-20171202-003315','B-Zone Bekasi','','','','Perumahan',20,NULL,NULL);
insert  into `pop`(`kode_pop`,`nama_pop`,`longitude_pop`,`latitude_pop`,`alamat_pop`,`jenis_gedung_pop`,`tinggi_tower_pop`,`updated_at`,`created_at`) values ('pop-20171202-003432','Center Point','','','','Apartement',20,NULL,NULL);
insert  into `pop`(`kode_pop`,`nama_pop`,`longitude_pop`,`latitude_pop`,`alamat_pop`,`jenis_gedung_pop`,`tinggi_tower_pop`,`updated_at`,`created_at`) values ('pop-20171202-003446','Cikande','','','','Perumahan',20,NULL,NULL);
insert  into `pop`(`kode_pop`,`nama_pop`,`longitude_pop`,`latitude_pop`,`alamat_pop`,`jenis_gedung_pop`,`tinggi_tower_pop`,`updated_at`,`created_at`) values ('pop-20171202-003457','Clix Gading','','','','Apartement',15,NULL,NULL);
insert  into `pop`(`kode_pop`,`nama_pop`,`longitude_pop`,`latitude_pop`,`alamat_pop`,`jenis_gedung_pop`,`tinggi_tower_pop`,`updated_at`,`created_at`) values ('pop-20171202-003510','Duren Sawit','','','','Hotel',20,NULL,NULL);
insert  into `pop`(`kode_pop`,`nama_pop`,`longitude_pop`,`latitude_pop`,`alamat_pop`,`jenis_gedung_pop`,`tinggi_tower_pop`,`updated_at`,`created_at`) values ('pop-20171202-003522','Golden Sky','','','','Apartement',20,NULL,NULL);
insert  into `pop`(`kode_pop`,`nama_pop`,`longitude_pop`,`latitude_pop`,`alamat_pop`,`jenis_gedung_pop`,`tinggi_tower_pop`,`updated_at`,`created_at`) values ('pop-20171202-003537','Granwhiz','','','','Apartement',20,NULL,NULL);
insert  into `pop`(`kode_pop`,`nama_pop`,`longitude_pop`,`latitude_pop`,`alamat_pop`,`jenis_gedung_pop`,`tinggi_tower_pop`,`updated_at`,`created_at`) values ('pop-20171202-003550','Hamston','','','','Apartement',20,NULL,NULL);
insert  into `pop`(`kode_pop`,`nama_pop`,`longitude_pop`,`latitude_pop`,`alamat_pop`,`jenis_gedung_pop`,`tinggi_tower_pop`,`updated_at`,`created_at`) values ('pop-20171202-003638','Hotel 101 Dharmawangsa','','','','Hotel',20,NULL,NULL);
insert  into `pop`(`kode_pop`,`nama_pop`,`longitude_pop`,`latitude_pop`,`alamat_pop`,`jenis_gedung_pop`,`tinggi_tower_pop`,`updated_at`,`created_at`) values ('pop-20171202-003653','Hotel Istana Nelayan','','','','Hotel',10,NULL,NULL);
insert  into `pop`(`kode_pop`,`nama_pop`,`longitude_pop`,`latitude_pop`,`alamat_pop`,`jenis_gedung_pop`,`tinggi_tower_pop`,`updated_at`,`created_at`) values ('pop-20171202-003709','Hotel Lynt','','','','Hotel',10,NULL,NULL);
insert  into `pop`(`kode_pop`,`nama_pop`,`longitude_pop`,`latitude_pop`,`alamat_pop`,`jenis_gedung_pop`,`tinggi_tower_pop`,`updated_at`,`created_at`) values ('pop-20171202-003723','Hotel Santika Bintaro','','','','Hotel',15,NULL,NULL);
insert  into `pop`(`kode_pop`,`nama_pop`,`longitude_pop`,`latitude_pop`,`alamat_pop`,`jenis_gedung_pop`,`tinggi_tower_pop`,`updated_at`,`created_at`) values ('pop-20171202-003735','Laguna Tower 1','','','','Apartement',10,NULL,NULL);
insert  into `pop`(`kode_pop`,`nama_pop`,`longitude_pop`,`latitude_pop`,`alamat_pop`,`jenis_gedung_pop`,`tinggi_tower_pop`,`updated_at`,`created_at`) values ('pop-20171202-004134','Modernland Tangerang','','','','Apartement',10,NULL,NULL);
insert  into `pop`(`kode_pop`,`nama_pop`,`longitude_pop`,`latitude_pop`,`alamat_pop`,`jenis_gedung_pop`,`tinggi_tower_pop`,`updated_at`,`created_at`) values ('pop-20171202-004142','OMNI Alam Sutra','','','','Apartement',20,NULL,NULL);
insert  into `pop`(`kode_pop`,`nama_pop`,`longitude_pop`,`latitude_pop`,`alamat_pop`,`jenis_gedung_pop`,`tinggi_tower_pop`,`updated_at`,`created_at`) values ('pop-20171202-004157','OMNI Pulo Mas','','','','Lainnya',30,NULL,NULL);
insert  into `pop`(`kode_pop`,`nama_pop`,`longitude_pop`,`latitude_pop`,`alamat_pop`,`jenis_gedung_pop`,`tinggi_tower_pop`,`updated_at`,`created_at`) values ('pop-20171202-004336','Palma','','','','Perumahan',10,NULL,NULL);
insert  into `pop`(`kode_pop`,`nama_pop`,`longitude_pop`,`latitude_pop`,`alamat_pop`,`jenis_gedung_pop`,`tinggi_tower_pop`,`updated_at`,`created_at`) values ('pop-20171202-032759','Paragon','','','','Hotel',15,NULL,NULL);
insert  into `pop`(`kode_pop`,`nama_pop`,`longitude_pop`,`latitude_pop`,`alamat_pop`,`jenis_gedung_pop`,`tinggi_tower_pop`,`updated_at`,`created_at`) values ('pop-20171210-153809','Office Cengkareng','','','','Kantor',15,NULL,NULL);
insert  into `pop`(`kode_pop`,`nama_pop`,`longitude_pop`,`latitude_pop`,`alamat_pop`,`jenis_gedung_pop`,`tinggi_tower_pop`,`updated_at`,`created_at`) values ('pop-20171210-161835','Rajawali','','','','Apartement',15,NULL,NULL);
insert  into `pop`(`kode_pop`,`nama_pop`,`longitude_pop`,`latitude_pop`,`alamat_pop`,`jenis_gedung_pop`,`tinggi_tower_pop`,`updated_at`,`created_at`) values ('pop-20171210-162003','Priuk','','','','Hotel',15,NULL,NULL);
insert  into `pop`(`kode_pop`,`nama_pop`,`longitude_pop`,`latitude_pop`,`alamat_pop`,`jenis_gedung_pop`,`tinggi_tower_pop`,`updated_at`,`created_at`) values ('pop-20171210-162615','Plaza Balaraja','','','','Kantor',15,NULL,NULL);
insert  into `pop`(`kode_pop`,`nama_pop`,`longitude_pop`,`latitude_pop`,`alamat_pop`,`jenis_gedung_pop`,`tinggi_tower_pop`,`updated_at`,`created_at`) values ('pop-20171210-162715','Royal Park','','','','Apartement',15,NULL,NULL);
insert  into `pop`(`kode_pop`,`nama_pop`,`longitude_pop`,`latitude_pop`,`alamat_pop`,`jenis_gedung_pop`,`tinggi_tower_pop`,`updated_at`,`created_at`) values ('pop-20171210-162929','Avalon Palma (Binus Palma)','','','','Hotel',15,NULL,NULL);
insert  into `pop`(`kode_pop`,`nama_pop`,`longitude_pop`,`latitude_pop`,`alamat_pop`,`jenis_gedung_pop`,`tinggi_tower_pop`,`updated_at`,`created_at`) values ('pop-20171210-163226','Puri','','','','Apartement',15,NULL,NULL);
insert  into `pop`(`kode_pop`,`nama_pop`,`longitude_pop`,`latitude_pop`,`alamat_pop`,`jenis_gedung_pop`,`tinggi_tower_pop`,`updated_at`,`created_at`) values ('pop-20171210-163355','Erajaya Bandengan','','','','Kantor',15,NULL,NULL);
insert  into `pop`(`kode_pop`,`nama_pop`,`longitude_pop`,`latitude_pop`,`alamat_pop`,`jenis_gedung_pop`,`tinggi_tower_pop`,`updated_at`,`created_at`) values ('pop-20171210-163559','Nelayan','','','','Hotel',15,NULL,NULL);
insert  into `pop`(`kode_pop`,`nama_pop`,`longitude_pop`,`latitude_pop`,`alamat_pop`,`jenis_gedung_pop`,`tinggi_tower_pop`,`updated_at`,`created_at`) values ('pop-20171210-163944','Twin Plaza','','','','Apartement',15,NULL,NULL);
insert  into `pop`(`kode_pop`,`nama_pop`,`longitude_pop`,`latitude_pop`,`alamat_pop`,`jenis_gedung_pop`,`tinggi_tower_pop`,`updated_at`,`created_at`) values ('pop-20171210-164144','Tridinamika','','','','Kantor',15,NULL,NULL);
insert  into `pop`(`kode_pop`,`nama_pop`,`longitude_pop`,`latitude_pop`,`alamat_pop`,`jenis_gedung_pop`,`tinggi_tower_pop`,`updated_at`,`created_at`) values ('pop-20171210-164228','Teras Kita (Hotel Dafam)','','','','Hotel',15,NULL,NULL);
insert  into `pop`(`kode_pop`,`nama_pop`,`longitude_pop`,`latitude_pop`,`alamat_pop`,`jenis_gedung_pop`,`tinggi_tower_pop`,`updated_at`,`created_at`) values ('pop-20171210-164331','Amaris','106.843549','-6.183217','','Hotel',15,NULL,NULL);
insert  into `pop`(`kode_pop`,`nama_pop`,`longitude_pop`,`latitude_pop`,`alamat_pop`,`jenis_gedung_pop`,`tinggi_tower_pop`,`updated_at`,`created_at`) values ('pop-20171210-164431','Cibubur','','','','Apartement',15,NULL,NULL);
insert  into `pop`(`kode_pop`,`nama_pop`,`longitude_pop`,`latitude_pop`,`alamat_pop`,`jenis_gedung_pop`,`tinggi_tower_pop`,`updated_at`,`created_at`) values ('pop-20171210-164548','Mayapada','','','','Hotel',15,NULL,NULL);
insert  into `pop`(`kode_pop`,`nama_pop`,`longitude_pop`,`latitude_pop`,`alamat_pop`,`jenis_gedung_pop`,`tinggi_tower_pop`,`updated_at`,`created_at`) values ('pop-20171210-164647','Grand Tjokro','','','','Hotel',15,NULL,NULL);
insert  into `pop`(`kode_pop`,`nama_pop`,`longitude_pop`,`latitude_pop`,`alamat_pop`,`jenis_gedung_pop`,`tinggi_tower_pop`,`updated_at`,`created_at`) values ('pop-20171213-064210','PIK','','','','Kantor',15,NULL,NULL);
insert  into `pop`(`kode_pop`,`nama_pop`,`longitude_pop`,`latitude_pop`,`alamat_pop`,`jenis_gedung_pop`,`tinggi_tower_pop`,`updated_at`,`created_at`) values ('pop-20171213-071011','Primajaya','','','','Kantor',15,NULL,NULL);
insert  into `pop`(`kode_pop`,`nama_pop`,`longitude_pop`,`latitude_pop`,`alamat_pop`,`jenis_gedung_pop`,`tinggi_tower_pop`,`updated_at`,`created_at`) values ('pop-20171213-071829','Mulia Pack','','','','Apartement',15,NULL,NULL);
insert  into `pop`(`kode_pop`,`nama_pop`,`longitude_pop`,`latitude_pop`,`alamat_pop`,`jenis_gedung_pop`,`tinggi_tower_pop`,`updated_at`,`created_at`) values ('pop-20171214-033453','Cyber','','','','Kantor',30,NULL,NULL);
insert  into `pop`(`kode_pop`,`nama_pop`,`longitude_pop`,`latitude_pop`,`alamat_pop`,`jenis_gedung_pop`,`tinggi_tower_pop`,`updated_at`,`created_at`) values ('pop-20171214-034340','Robinson A','','','','Apartement',15,NULL,NULL);
insert  into `pop`(`kode_pop`,`nama_pop`,`longitude_pop`,`latitude_pop`,`alamat_pop`,`jenis_gedung_pop`,`tinggi_tower_pop`,`updated_at`,`created_at`) values ('pop-20171214-034352','Robinson B','','','','Apartement',15,NULL,NULL);
insert  into `pop`(`kode_pop`,`nama_pop`,`longitude_pop`,`latitude_pop`,`alamat_pop`,`jenis_gedung_pop`,`tinggi_tower_pop`,`updated_at`,`created_at`) values ('pop-20171214-034426','Sakura','','','','Hotel',15,NULL,NULL);
insert  into `pop`(`kode_pop`,`nama_pop`,`longitude_pop`,`latitude_pop`,`alamat_pop`,`jenis_gedung_pop`,`tinggi_tower_pop`,`updated_at`,`created_at`) values ('pop-20171214-034440','SMK Depok','','','','Sekolah',15,NULL,NULL);
insert  into `pop`(`kode_pop`,`nama_pop`,`longitude_pop`,`latitude_pop`,`alamat_pop`,`jenis_gedung_pop`,`tinggi_tower_pop`,`updated_at`,`created_at`) values ('pop-20171214-034549','Ponpes Karawang (Barokah)','','','','Sekolah',15,NULL,NULL);
insert  into `pop`(`kode_pop`,`nama_pop`,`longitude_pop`,`latitude_pop`,`alamat_pop`,`jenis_gedung_pop`,`tinggi_tower_pop`,`updated_at`,`created_at`) values ('pop-20171214-034620','Merauke','','','','Hotel',15,NULL,NULL);
insert  into `pop`(`kode_pop`,`nama_pop`,`longitude_pop`,`latitude_pop`,`alamat_pop`,`jenis_gedung_pop`,`tinggi_tower_pop`,`updated_at`,`created_at`) values ('pop-20171214-034652','Laguna Tower 3-6','','','','Apartement',15,NULL,NULL);
insert  into `pop`(`kode_pop`,`nama_pop`,`longitude_pop`,`latitude_pop`,`alamat_pop`,`jenis_gedung_pop`,`tinggi_tower_pop`,`updated_at`,`created_at`) values ('pop-20171214-034731','Iglo','','','','Hotel',15,NULL,NULL);
insert  into `pop`(`kode_pop`,`nama_pop`,`longitude_pop`,`latitude_pop`,`alamat_pop`,`jenis_gedung_pop`,`tinggi_tower_pop`,`updated_at`,`created_at`) values ('pop-20171214-034807','Dony Cikarang','','','','Perumahan',15,NULL,NULL);
insert  into `pop`(`kode_pop`,`nama_pop`,`longitude_pop`,`latitude_pop`,`alamat_pop`,`jenis_gedung_pop`,`tinggi_tower_pop`,`updated_at`,`created_at`) values ('pop-20171214-034856','Raja Fashion','','','','Kantor',15,NULL,NULL);
insert  into `pop`(`kode_pop`,`nama_pop`,`longitude_pop`,`latitude_pop`,`alamat_pop`,`jenis_gedung_pop`,`tinggi_tower_pop`,`updated_at`,`created_at`) values ('pop-20171215-040907','Trias','','','','Hotel',15,NULL,NULL);
insert  into `pop`(`kode_pop`,`nama_pop`,`longitude_pop`,`latitude_pop`,`alamat_pop`,`jenis_gedung_pop`,`tinggi_tower_pop`,`updated_at`,`created_at`) values ('pop-20171217-071818','Grandzuri Jababeka','','','','Hotel',15,NULL,'2017-12-17 07:18:33');

/*Table structure for table `switch` */

CREATE TABLE `switch` (
  `kode_switch` char(20) COLLATE utf8mb4_bin NOT NULL,
  `hostname_switch` char(20) COLLATE utf8mb4_bin NOT NULL,
  `ip_addr_switch` char(15) COLLATE utf8mb4_bin NOT NULL,
  `tipe_switch` enum('Cisco','Mikrotik','HP','TP-Link','Juniper') COLLATE utf8mb4_bin NOT NULL,
  `jenis_switch` enum('Backbone','Distribusi') COLLATE utf8mb4_bin NOT NULL,
  `kode_pop` char(20) COLLATE utf8mb4_bin NOT NULL,
  `status_switch` tinyint(1) NOT NULL DEFAULT '1',
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`kode_switch`),
  KEY `kode_pop` (`kode_pop`),
  CONSTRAINT `switch_ibfk_1` FOREIGN KEY (`kode_pop`) REFERENCES `pop` (`kode_pop`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

/*Data for the table `switch` */

insert  into `switch`(`kode_switch`,`hostname_switch`,`ip_addr_switch`,`tipe_switch`,`jenis_switch`,`kode_pop`,`status_switch`,`updated_at`,`created_at`) values ('swh-20171212-144636','SW.BB.Durensawit','10.250.154.78','Cisco','Backbone','pop-20171202-003510',1,NULL,NULL);

/*Table structure for table `vlan` */

CREATE TABLE `vlan` (
  `kode_vlan` char(20) COLLATE utf8mb4_bin NOT NULL,
  `vlan_id` char(8) COLLATE utf8mb4_bin NOT NULL,
  `vlan_vendor` char(20) COLLATE utf8mb4_bin NOT NULL,
  `vlan_kapasitas` int(3) NOT NULL,
  `vlan_satuan` enum('Mbps','Gbps','Kbps') COLLATE utf8mb4_bin NOT NULL,
  `kode_pop` char(20) COLLATE utf8mb4_bin NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`kode_vlan`,`vlan_id`),
  KEY `kode_pop` (`kode_pop`),
  CONSTRAINT `vlan_ibfk_1` FOREIGN KEY (`kode_pop`) REFERENCES `pop` (`kode_pop`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

/*Data for the table `vlan` */

insert  into `vlan`(`kode_vlan`,`vlan_id`,`vlan_vendor`,`vlan_kapasitas`,`vlan_satuan`,`kode_pop`,`updated_at`,`created_at`) values ('vln-20171210-153837','131','Powertel',400,'Mbps','pop-20171210-153809',NULL,NULL);
insert  into `vlan`(`kode_vlan`,`vlan_id`,`vlan_vendor`,`vlan_kapasitas`,`vlan_satuan`,`kode_pop`,`updated_at`,`created_at`) values ('vln-20171210-153934','302','FMI',1,'Gbps','pop-20171215-040907','2017-12-17 07:17:27',NULL);
insert  into `vlan`(`kode_vlan`,`vlan_id`,`vlan_vendor`,`vlan_kapasitas`,`vlan_satuan`,`kode_pop`,`updated_at`,`created_at`) values ('vln-20171210-161859','60','Iforte',1,'Gbps','pop-20171210-161835',NULL,NULL);
insert  into `vlan`(`kode_vlan`,`vlan_id`,`vlan_vendor`,`vlan_kapasitas`,`vlan_satuan`,`kode_pop`,`updated_at`,`created_at`) values ('vln-20171210-162023','204','Iforte',200,'Mbps','pop-20171210-162003',NULL,NULL);
insert  into `vlan`(`kode_vlan`,`vlan_id`,`vlan_vendor`,`vlan_kapasitas`,`vlan_satuan`,`kode_pop`,`updated_at`,`created_at`) values ('vln-20171210-162632','64','Pgas',400,'Mbps','pop-20171210-162615',NULL,NULL);
insert  into `vlan`(`kode_vlan`,`vlan_id`,`vlan_vendor`,`vlan_kapasitas`,`vlan_satuan`,`kode_pop`,`updated_at`,`created_at`) values ('vln-20171210-162730','104','Citinet',200,'Mbps','pop-20171210-162715',NULL,NULL);
insert  into `vlan`(`kode_vlan`,`vlan_id`,`vlan_vendor`,`vlan_kapasitas`,`vlan_satuan`,`kode_pop`,`updated_at`,`created_at`) values ('vln-20171210-163003','105','Citinet',200,'Mbps','pop-20171210-162929',NULL,NULL);
insert  into `vlan`(`kode_vlan`,`vlan_id`,`vlan_vendor`,`vlan_kapasitas`,`vlan_satuan`,`kode_pop`,`updated_at`,`created_at`) values ('vln-20171210-163021','168','Citinet',500,'Mbps','pop-20171202-003550',NULL,NULL);
insert  into `vlan`(`kode_vlan`,`vlan_id`,`vlan_vendor`,`vlan_kapasitas`,`vlan_satuan`,`kode_pop`,`updated_at`,`created_at`) values ('vln-20171210-163301','147','Citinet',500,'Mbps','pop-20171210-163226',NULL,NULL);
insert  into `vlan`(`kode_vlan`,`vlan_id`,`vlan_vendor`,`vlan_kapasitas`,`vlan_satuan`,`kode_pop`,`updated_at`,`created_at`) values ('vln-20171210-163426','155','Acsata',500,'Mbps','pop-20171210-163355',NULL,NULL);
insert  into `vlan`(`kode_vlan`,`vlan_id`,`vlan_vendor`,`vlan_kapasitas`,`vlan_satuan`,`kode_pop`,`updated_at`,`created_at`) values ('vln-20171210-163450','35','Orion',500,'Mbps','pop-20171202-003735',NULL,NULL);
insert  into `vlan`(`kode_vlan`,`vlan_id`,`vlan_vendor`,`vlan_kapasitas`,`vlan_satuan`,`kode_pop`,`updated_at`,`created_at`) values ('vln-20171210-163515','34','Orion',500,'Mbps','pop-20171210-161835',NULL,NULL);
insert  into `vlan`(`kode_vlan`,`vlan_id`,`vlan_vendor`,`vlan_kapasitas`,`vlan_satuan`,`kode_pop`,`updated_at`,`created_at`) values ('vln-20171210-163611','136','Powertel',500,'Mbps','pop-20171210-163559',NULL,NULL);
insert  into `vlan`(`kode_vlan`,`vlan_id`,`vlan_vendor`,`vlan_kapasitas`,`vlan_satuan`,`kode_pop`,`updated_at`,`created_at`) values ('vln-20171210-163716','130','Powertel',500,'Mbps','pop-20171217-071818','2017-12-17 07:19:19',NULL);
insert  into `vlan`(`kode_vlan`,`vlan_id`,`vlan_vendor`,`vlan_kapasitas`,`vlan_satuan`,`kode_pop`,`updated_at`,`created_at`) values ('vln-20171210-163732','56','FMI',100,'Mbps','pop-20171202-003457',NULL,NULL);
insert  into `vlan`(`kode_vlan`,`vlan_id`,`vlan_vendor`,`vlan_kapasitas`,`vlan_satuan`,`kode_pop`,`updated_at`,`created_at`) values ('vln-20171210-163812','63','FMI',1,'Gbps','pop-20171202-003432',NULL,NULL);
insert  into `vlan`(`kode_vlan`,`vlan_id`,`vlan_vendor`,`vlan_kapasitas`,`vlan_satuan`,`kode_pop`,`updated_at`,`created_at`) values ('vln-20171210-163835','294','FMI',100,'Mbps','pop-20171202-003510',NULL,NULL);
insert  into `vlan`(`kode_vlan`,`vlan_id`,`vlan_vendor`,`vlan_kapasitas`,`vlan_satuan`,`kode_pop`,`updated_at`,`created_at`) values ('vln-20171210-163906','23','FMI',200,'Mbps','pop-20171202-003537',NULL,NULL);
insert  into `vlan`(`kode_vlan`,`vlan_id`,`vlan_vendor`,`vlan_kapasitas`,`vlan_satuan`,`kode_pop`,`updated_at`,`created_at`) values ('vln-20171210-164009','290','FMI',1,'Gbps','pop-20171210-163944',NULL,NULL);
insert  into `vlan`(`kode_vlan`,`vlan_id`,`vlan_vendor`,`vlan_kapasitas`,`vlan_satuan`,`kode_pop`,`updated_at`,`created_at`) values ('vln-20171210-164028','298','FMI',1,'Gbps','pop-20171202-002217',NULL,NULL);
insert  into `vlan`(`kode_vlan`,`vlan_id`,`vlan_vendor`,`vlan_kapasitas`,`vlan_satuan`,`kode_pop`,`updated_at`,`created_at`) values ('vln-20171210-164156','299','FMI',1,'Gbps','pop-20171210-164144',NULL,NULL);
insert  into `vlan`(`kode_vlan`,`vlan_id`,`vlan_vendor`,`vlan_kapasitas`,`vlan_satuan`,`kode_pop`,`updated_at`,`created_at`) values ('vln-20171210-164244','303','FMI',1,'Gbps','pop-20171210-164228',NULL,NULL);
insert  into `vlan`(`kode_vlan`,`vlan_id`,`vlan_vendor`,`vlan_kapasitas`,`vlan_satuan`,`kode_pop`,`updated_at`,`created_at`) values ('vln-20171210-164307','300','FMI',1,'Gbps','pop-20171202-003735',NULL,NULL);
insert  into `vlan`(`kode_vlan`,`vlan_id`,`vlan_vendor`,`vlan_kapasitas`,`vlan_satuan`,`kode_pop`,`updated_at`,`created_at`) values ('vln-20171210-164340','291','FMI',100,'Gbps','pop-20171210-164331',NULL,NULL);
insert  into `vlan`(`kode_vlan`,`vlan_id`,`vlan_vendor`,`vlan_kapasitas`,`vlan_satuan`,`kode_pop`,`updated_at`,`created_at`) values ('vln-20171210-164352','292','FMI',100,'Mbps','pop-20171210-162929',NULL,NULL);
insert  into `vlan`(`kode_vlan`,`vlan_id`,`vlan_vendor`,`vlan_kapasitas`,`vlan_satuan`,`kode_pop`,`updated_at`,`created_at`) values ('vln-20171210-164510','293','FMI',100,'Mbps','pop-20171210-164431',NULL,NULL);
insert  into `vlan`(`kode_vlan`,`vlan_id`,`vlan_vendor`,`vlan_kapasitas`,`vlan_satuan`,`kode_pop`,`updated_at`,`created_at`) values ('vln-20171210-164520','163','Moratel',100,'Mbps','pop-20171210-164431',NULL,NULL);
insert  into `vlan`(`kode_vlan`,`vlan_id`,`vlan_vendor`,`vlan_kapasitas`,`vlan_satuan`,`kode_pop`,`updated_at`,`created_at`) values ('vln-20171210-164557','306','FMI',1,'Gbps','pop-20171210-164548',NULL,NULL);
insert  into `vlan`(`kode_vlan`,`vlan_id`,`vlan_vendor`,`vlan_kapasitas`,`vlan_satuan`,`kode_pop`,`updated_at`,`created_at`) values ('vln-20171211-150518','308','FMI',1,'Gbps','pop-20171210-164647',NULL,NULL);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
