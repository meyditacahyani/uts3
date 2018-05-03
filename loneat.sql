# Host: localhost  (Version 5.5.5-10.1.31-MariaDB)
# Date: 2018-05-03 10:48:36
# Generator: MySQL-Front 6.0  (Build 2.20)


#
# Structure for table "status"
#

DROP TABLE IF EXISTS `status`;
CREATE TABLE `status` (
  `status_id` int(11) NOT NULL AUTO_INCREMENT,
  `status` varchar(255) DEFAULT NULL,
  `user_name` varchar(50) DEFAULT NULL,
  `date` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`status_id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;

#
# Data for table "status"
#

INSERT INTO `status` VALUES (9,'sa','ana',NULL),(19,'ini siapa','val','2018-04-25 16:59:22'),(20,'asasasa','zaid','2018-04-26 04:06:24'),(23,'wqweq','','2018-04-26 04:21:05'),(25,'see','ddwikanthi','2018-04-26 19:02:46');

#
# Structure for table "user"
#

DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(50) NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `user_password` varchar(50) NOT NULL,
  `user_mobile` varchar(20) NOT NULL DEFAULT '0',
  `tgl_lahir` date DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `food` varchar(255) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `age` int(3) DEFAULT NULL,
  `allergy` varchar(255) DEFAULT NULL,
  `id_ktp` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

#
# Data for table "user"
#

INSERT INTO `user` VALUES (1,'Ehtesham','ehtesham@gmail.com','123','334443333',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(2,'Ehtesham','ehtesham@gmail.com','123','2147483647',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(3,'a','b@b','123','232342343',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(4,'zaid','a@a','202cb962ac59075b964b07152d234b70','324234234',NULL,NULL,NULL,NULL,NULL,NULL,NULL),(5,'ddwikanthi','v@v','9e3669d19b675bd57058fd4664205d2a','089657340219','1997-06-04','Adiiba Dwikanthi','Indomie','Jl. Timbul Rt.04/08 No.101 Kreo Selatan Larangan Tangerang Banten 15156',20,'Indomie','1234567891011213');
