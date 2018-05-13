# Host: localhost  (Version 5.5.5-10.1.31-MariaDB)
# Date: 2018-05-13 23:52:23
# Generator: MySQL-Front 6.0  (Build 2.20)


#
# Structure for table "notif"
#

DROP TABLE IF EXISTS `notif`;
CREATE TABLE `notif` (
  `notif_id` int(11) NOT NULL AUTO_INCREMENT,
  `username_kita` varchar(255) DEFAULT NULL,
  `username_orang` varchar(255) DEFAULT NULL,
  `status_id` varchar(255) DEFAULT NULL,
  `acc` varchar(255) DEFAULT NULL,
  `status` int(11) DEFAULT '0',
  `date` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`notif_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

#
# Data for table "notif"
#

INSERT INTO `notif` VALUES (5,'andara','ratna','33','Aku terima tawaran anda',0,'2018-05-13 17:02:16'),(6,'valdy','ratna','33','Jangan kfc dah, gimana kalo mcd?',0,'2018-05-13 17:02:32'),(7,'denah','andara','35','Coba notif',0,'2018-05-13 17:09:59');

#
# Structure for table "status"
#

DROP TABLE IF EXISTS `status`;
CREATE TABLE `status` (
  `status_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `user_name` varchar(50) DEFAULT NULL,
  `date` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`status_id`)
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=latin1;

#
# Data for table "status"
#

INSERT INTO `status` VALUES (33,'8','He go away from me. and i am stuck now, at kfc alone. ','ratna','2018-05-13 16:56:55'),(34,'5','We love things that name MIE','valdy','2018-05-13 17:02:59'),(35,'7','All of the best things is rain + indomie kari ayam','andara','2018-05-13 17:07:33'),(36,'9','I am lost here. need someone that can bring me to the right way','denah','2018-05-13 17:09:05');

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
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

#
# Data for table "user"
#

INSERT INTO `user` VALUES (5,'valdy','v@v','9e3669d19b675bd57058fd4664205d2a','089657340219','2018-05-25','valdy','mie','jakarta',12,'nyamuk','123'),(7,'andara','a@a','0cc175b9c0f1b6a831c399e269772661','07287232','2018-04-05','Andara Debian','Fish','Jl. Sendiri',20,'Sushi','897987'),(8,'ratna','r@r','4b43b0aee35624cd95b910189b3dc231','0892382983','2018-03-16','Ratna Ayu Aulia','Ice Cream','Jl. Berdua',20,'Peanuts','089838434'),(9,'denah','d@d','8277e0910d750195b448797616e091ad','08323823',NULL,NULL,NULL,NULL,NULL,NULL,NULL);
