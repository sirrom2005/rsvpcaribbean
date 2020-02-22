/*
SQLyog Enterprise - MySQL GUI v7.02 
MySQL - 5.5.8-log : Database - rsvp_volunteers
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

CREATE DATABASE /*!32312 IF NOT EXISTS*/`rsvp_volunteers` /*!40100 DEFAULT CHARACTER SET latin1 */;

/*Table structure for table `accommodation` */

DROP TABLE IF EXISTS `accommodation`;

CREATE TABLE `accommodation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `host_name` varchar(45) NOT NULL,
  `phone_mobile` varchar(15) DEFAULT NULL,
  `phone_mobile_2` varchar(15) NOT NULL,
  `email` varchar(45) DEFAULT NULL,
  `address1_id` int(11) NOT NULL COMMENT 'Residential Address',
  `address2_id` int(11) DEFAULT NULL COMMENT 'Postal Address',
  `location_desc` text,
  `overview_desc` text,
  `living_accommodation_desc` text,
  `about_room_desc` text,
  `about_food_desc` text,
  `general_advice_desc` text,
  `number_of_volunteer_spaces` int(11) DEFAULT NULL,
  `archive` int(11) DEFAULT '0',
  `date_added` datetime NOT NULL,
  `date_updated` datetime NOT NULL,
  `added_by` int(11) NOT NULL,
  `updated_by` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fkj_address1_idx` (`address1_id`),
  CONSTRAINT `fk_acc_address1` FOREIGN KEY (`address1_id`) REFERENCES `address` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

/*Data for the table `accommodation` */

insert  into `accommodation`(`id`,`host_name`,`phone_mobile`,`phone_mobile_2`,`email`,`address1_id`,`address2_id`,`location_desc`,`overview_desc`,`living_accommodation_desc`,`about_room_desc`,`about_food_desc`,`general_advice_desc`,`number_of_volunteer_spaces`,`archive`,`date_added`,`date_updated`,`added_by`,`updated_by`) values (9,'Marcia Aird','876 396 7407','','marciaaird@yahoo.com',16,17,'Williamsfield is located 10 minutes from the town of Mandeville. It is a quiet community close to a small nearby town Royal Flat and there is easy access via route taxis to get into the town. Mandeville is known for being a quiet town,will beautiful hills, cool climate and friendly people.','Marcia is a nail technician and lives with her father and son. Her father is a Minister of religion and her son is a skillful football player that attends the Manchester High School.\r\n\r\nAt the host family you will have access to internet and washing machine.','You will become a part of your host family. Jamaicans are warm and friendly people who will treat you like family. Before you know it you will feel like family.\r\n\r\nYou are expected to observe the rules and cultures norms of your family. Please follow any guidelines that they may have and we expect no smoking in the house (if you are a smoker, please smoke outside), respect for property, follow curfew and communicate respectfully at all time.','There are two rooms available at your host family. You will have your own room but you will share bathroom with volunteers only.\r\n\r\nThere is storage space for the clothing and personal belongings.','In general you are expected to eat what the host family is having. If you have any special preferences please communicate this with your host family so they can make the necessary arrangements for you. ','Upon arrival\r\n\r\nDuring stay - addd',2,NULL,'2016-06-17 09:57:35','2016-06-17 09:59:29',100001,100001),(10,'Stephannie Hutchinson','876 291 000033','','stephanniehutchinson@yahoo.com',18,19,NULL,NULL,NULL,NULL,NULL,NULL,3,NULL,'2016-06-17 10:34:17','2017-02-07 08:11:23',100001,100000),(12,'Daren Larmond','876 522 1111','','',62,63,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2016-07-14 17:53:00','2016-07-14 17:53:00',100001,100001);

/*Table structure for table `accommodation_amenity` */

DROP TABLE IF EXISTS `accommodation_amenity`;

CREATE TABLE `accommodation_amenity` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `accommodation_id` int(11) NOT NULL,
  `accommodation_type` int(11) DEFAULT NULL COMMENT '1- Host Family || 2-Hostel || 3-hotel',
  `capacity` varchar(45) DEFAULT NULL COMMENT 'Number of beds',
  `own_room` int(11) DEFAULT NULL COMMENT 'Number of Rooms',
  `share_room` int(11) DEFAULT NULL,
  `room_type` int(11) DEFAULT NULL COMMENT '1-Own room || 2-share_room',
  `children` varchar(45) DEFAULT NULL COMMENT 'Children',
  `pets` varchar(45) DEFAULT NULL COMMENT 'Pets',
  `sheet` int(11) DEFAULT NULL COMMENT 'Bring sheet',
  `towel` int(11) DEFAULT NULL COMMENT 'Bring own towel',
  `smoke` int(11) DEFAULT NULL COMMENT '1-Smoking Allowed || 2- Smoking not allowed || 3-smoke_outside',
  `own_bathroom` int(11) DEFAULT NULL COMMENT '1- Own bathroom || 2-bathroom share',
  `share_bathroom` int(11) DEFAULT NULL,
  `running_water` int(11) DEFAULT NULL COMMENT 'Running water',
  `bucket_shower` int(11) DEFAULT NULL COMMENT 'Bucket shower',
  `bathroom_hot_water` int(11) DEFAULT NULL COMMENT 'Hot water available',
  `bathroom_toiletries` int(11) DEFAULT NULL COMMENT 'Toiletries not provided',
  `internet` int(11) DEFAULT NULL COMMENT '1 - Available – free || 2-Available with fee || 3- Not available || 4-Internet café in town',
  `laundry` int(11) DEFAULT NULL COMMENT '1-Washing machine || 2- Handwash || 3-Wash by host family with fee || 4 - Wash by helper with fee || 5-Laundromat in town',
  `languages` varchar(45) DEFAULT NULL COMMENT 'Languages',
  `food_vegetarian` int(11) DEFAULT NULL COMMENT 'Vegetarian option',
  `food_vegan` int(11) DEFAULT NULL COMMENT 'Vegan option',
  `food_regular` int(11) DEFAULT NULL COMMENT 'Regular meals',
  `curfew` varchar(45) DEFAULT NULL COMMENT 'Curfew Yes/No',
  `water_tap` int(11) DEFAULT NULL COMMENT 'Drinking tap water is ok',
  `water_donot_drink` int(11) DEFAULT NULL COMMENT 'Do not drink tap water',
  `water_boiled` int(11) DEFAULT NULL COMMENT 'Boiled water provided',
  `water_purchase` int(11) DEFAULT NULL COMMENT 'Purchase own bottled water',
  `mosquito_net_bring` int(11) DEFAULT NULL COMMENT 'Mosquito Net',
  `mosquito_net_buy` int(11) DEFAULT NULL COMMENT 'Can buy in country',
  `mosquito_net_not_need` int(11) DEFAULT NULL COMMENT 'Not necessary',
  `wheelchair` int(11) DEFAULT NULL COMMENT 'Wheelchair access',
  `lockable_wardrobe` int(11) DEFAULT NULL COMMENT 'Lockable wardrobe',
  `lockable_drawers` int(11) DEFAULT NULL COMMENT 'Lockable drawers',
  `lockable_room` int(11) DEFAULT NULL COMMENT 'Lockable room',
  `room_key_provided` int(11) DEFAULT NULL COMMENT 'Room key provided',
  `house_key_provided` int(11) DEFAULT NULL COMMENT 'House key provided',
  PRIMARY KEY (`id`),
  KEY `fk_accom_idx` (`accommodation_id`),
  CONSTRAINT `fk_accom` FOREIGN KEY (`accommodation_id`) REFERENCES `accommodation` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

/*Data for the table `accommodation_amenity` */

insert  into `accommodation_amenity`(`id`,`accommodation_id`,`accommodation_type`,`capacity`,`own_room`,`share_room`,`room_type`,`children`,`pets`,`sheet`,`towel`,`smoke`,`own_bathroom`,`share_bathroom`,`running_water`,`bucket_shower`,`bathroom_hot_water`,`bathroom_toiletries`,`internet`,`laundry`,`languages`,`food_vegetarian`,`food_vegan`,`food_regular`,`curfew`,`water_tap`,`water_donot_drink`,`water_boiled`,`water_purchase`,`mosquito_net_bring`,`mosquito_net_buy`,`mosquito_net_not_need`,`wheelchair`,`lockable_wardrobe`,`lockable_drawers`,`lockable_room`,`room_key_provided`,`house_key_provided`) values (8,9,1,'2',1,1,NULL,'1','1',1,1,2,1,2,1,NULL,1,1,4,2,'English and Patois (Jamaican creole)',1,NULL,1,NULL,NULL,NULL,1,1,NULL,NULL,NULL,NULL,NULL,NULL,1,1,NULL),(9,10,NULL,'',NULL,NULL,NULL,'','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(10,12,NULL,'',NULL,NULL,NULL,'','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);

/*Table structure for table `accommodation_note` */

DROP TABLE IF EXISTS `accommodation_note`;

CREATE TABLE `accommodation_note` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `accommodation_id` int(11) NOT NULL,
  `note` mediumtext NOT NULL,
  `user_id` int(11) NOT NULL,
  `updated_by` int(11) NOT NULL,
  `date_added` datetime NOT NULL,
  `date_updated` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_note_acc_idx` (`accommodation_id`),
  CONSTRAINT `fk_note_acc` FOREIGN KEY (`accommodation_id`) REFERENCES `accommodation` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `accommodation_note` */

/*Table structure for table `account` */

DROP TABLE IF EXISTS `account`;

CREATE TABLE `account` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title_id` int(11) NOT NULL,
  `firstname` varchar(45) NOT NULL,
  `middlename` varchar(45) DEFAULT NULL,
  `lastname` varchar(45) NOT NULL,
  `alias` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `email2` varchar(45) DEFAULT NULL,
  `skype` varchar(45) DEFAULT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `whats_app` varchar(15) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `gender` int(11) NOT NULL DEFAULT '0',
  `username` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `account_type` int(11) NOT NULL,
  `allow_login` int(11) NOT NULL DEFAULT '0',
  `date_added` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `title_id_idx` (`title_id`),
  KEY `fk_acc_type_idx` (`account_type`),
  CONSTRAINT `fk_acc_title_id` FOREIGN KEY (`title_id`) REFERENCES `title` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_acc_type` FOREIGN KEY (`account_type`) REFERENCES `account_type` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=100036 DEFAULT CHARSET=utf8;

/*Data for the table `account` */

insert  into `account`(`id`,`title_id`,`firstname`,`middlename`,`lastname`,`alias`,`email`,`email2`,`skype`,`phone`,`whats_app`,`dob`,`gender`,`username`,`password`,`account_type`,`allow_login`,`date_added`) values (100000,1,'Super','Nova','Admin','root','sirrom2005@gmail.com',NULL,NULL,'1876-535-7123',NULL,'2016-05-19',0,'root','5f4dcc3b5aa765d61d8327deb882cf99',1,1,'0000-00-00 00:00:00'),(100001,4,'Bridgette','B','Barrett','bridgett','rsvpcaribbean@yahoo.com',NULL,NULL,NULL,NULL,NULL,1,'bridgett','5f4dcc3b5aa765d61d8327deb882cf99',2,1,'0000-00-00 00:00:00'),(100002,1,'TommmyEEE','The Helper','Smith','tommy','tommy@tom.com',NULL,NULL,'54545454',NULL,'2016-02-03',0,'tommy','5f4dcc3b5aa765d61d8327deb882cf99',3,1,'0000-00-00 00:00:00'),(100011,5,'Bridgette',NULL,'Barrett','','bridgettebarrett@rsvpcaribbean.com',NULL,'bridgette.barrett','876 296 1928','876 296 1938',NULL,0,'bbarrett','5f4dcc3b5aa765d61d8327deb882cf99',4,1,'0000-00-00 00:00:00'),(100012,3,'Shelly-Ann ',NULL,'Cummings','','admin@rsvpcaribbean.com',NULL,'','876 569 5918','876 569 5918',NULL,0,'scummings','5f4dcc3b5aa765d61d8327deb882cf99',4,1,'0000-00-00 00:00:00'),(100020,5,'Bridgette','Belinda','Barrett','','bridgette_barrett@yahoo.com','bridgette_barrett@yahoo.com','','8768682459',NULL,'1975-02-05',0,'bbarrett2215','5f4dcc3b5aa765d61d8327deb882cf99',3,0,'2016-07-10 14:33:22'),(100021,1,'Bevin','','Barrett','','cflicida@yahoo.com','bridgette_barrett@yahoo.com','','8768682459',NULL,'1971-11-07',0,'bbarrett2884','5f4dcc3b5aa765d61d8327deb882cf99',3,1,'2016-07-10 14:48:28'),(100022,1,'Sefton','','Cummings','','rsvpcaribbean@yahoo.com','rsvpcaribbean@yahoo.com','','8768682459',NULL,'1980-05-05',0,'scummings8317','5f4dcc3b5aa765d61d8327deb882cf99',3,1,'2016-07-10 14:59:05'),(100023,1,'Dale','','Rogers','','cflijamaica@yahoo.com','','','8767621158',NULL,'1980-09-09',0,'drogers','5f4dcc3b5aa765d61d8327deb882cf99',3,1,'2016-07-10 15:38:03'),(100024,1,'Dwayne','S','Harris','','brandaidja@gmail.com','','','876-535-4931',NULL,'1982-12-22',0,'dharris','5f4dcc3b5aa765d61d8327deb882cf99',3,1,'2016-07-12 08:50:20'),(100025,5,'Bridgette','','Barrett','','saraharodgers@yahoo.com','','','8768682459',NULL,'1975-02-05',0,'bbarrett6795','5f4dcc3b5aa765d61d8327deb882cf99',3,1,'2016-07-12 09:37:27'),(100028,1,'Jhobarri','Tajay','Barrett',NULL,'bridgette.barrett@ncu.edu.jm','','','8762961938',NULL,'1980-09-13',0,'jbarrett','5f4dcc3b5aa765d61d8327deb882cf99',3,1,'2016-07-16 17:24:42'),(100029,1,'Raymond','','Wilson',NULL,'info@rsvpcaribbean.com','','','8765221789',NULL,'1978-02-10',0,'rwilson','5f4dcc3b5aa765d61d8327deb882cf99',3,1,'2016-07-19 09:28:14'),(100030,2,'Chantell ',NULL,'Stewart',NULL,'hr@rsvpcaribbean.com',NULL,'','876 851 2511','876 851 2511',NULL,0,'CStewart','5f4dcc3b5aa765d61d8327deb882cf99',4,1,'0000-00-00 00:00:00'),(100031,1,'John','','Doe',NULL,'admin@rsvpcaribbean.com','','','9542881111',NULL,'1980-10-10',0,'jdoe','5f4dcc3b5aa765d61d8327deb882cf99',3,0,'2016-07-20 10:05:15'),(100032,1,'Damal','Stephen','Harris',NULL,'dwayne@theun-agency.com','','','8765354931',NULL,'1995-07-19',0,'dharris5505','5f4dcc3b5aa765d61d8327deb882cf99',3,0,'2016-07-20 10:44:57'),(100033,1,'Green','','Black',NULL,'jamaica@rsvpcaribbean.com','','','9542118916',NULL,'1981-10-10',0,'gblack','5f4dcc3b5aa765d61d8327deb882cf99',3,0,'2016-07-20 10:53:38'),(100034,3,'Catherine','Terri Rene','Noel Ayers',NULL,'terrinoel21@hotmail.com','amathink@gmail.com','terri.noel','18687472349',NULL,'1990-11-21',0,'cnoelayers','5f4dcc3b5aa765d61d8327deb882cf99',3,0,'2016-09-08 12:35:32'),(100035,5,'Bridgette','Belinda','Barrett',NULL,'bridgettebbarrett@gmail.com','','bridgette.barrett','8762961938',NULL,'1975-02-05',0,'bbarrett6597','5f4dcc3b5aa765d61d8327deb882cf99',3,0,'2016-12-12 06:37:25');

/*Table structure for table `account_type` */

DROP TABLE IF EXISTS `account_type`;

CREATE TABLE `account_type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

/*Data for the table `account_type` */

insert  into `account_type`(`id`,`name`) values (1,'Super Admin'),(2,'Admin'),(3,'volunteer'),(4,'staff');

/*Table structure for table `accounting` */

DROP TABLE IF EXISTS `accounting`;

CREATE TABLE `accounting` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `account_id` int(11) NOT NULL,
  `payee_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `sub_category_id` int(11) NOT NULL,
  `account` tinytext NOT NULL,
  `amount` decimal(10,2) NOT NULL,
  `cheque_number` tinytext,
  `receipt` int(11) NOT NULL DEFAULT '0',
  `detail` mediumtext NOT NULL,
  `trans_type` tinytext NOT NULL,
  `date` date NOT NULL,
  `date_added` datetime NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

/*Data for the table `accounting` */

insert  into `accounting`(`id`,`account_id`,`payee_id`,`category_id`,`sub_category_id`,`account`,`amount`,`cheque_number`,`receipt`,`detail`,`trans_type`,`date`,`date_added`,`user_id`) values (20,69,6,15,16,'227','50000.00','223',1,'Payment for volunteer - Bridgette Barrett','expense','2016-09-19','2016-09-19 10:10:10',100001),(21,69,7,15,16,'227','25000.00','',1,'Host rent for 2 weeks for volunteer Jhazzeon Barrett','expense','2016-09-19','2016-09-19 10:14:43',100001);

/*Table structure for table `accounting_category` */

DROP TABLE IF EXISTS `accounting_category`;

CREATE TABLE `accounting_category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category` tinytext NOT NULL,
  `parent` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

/*Data for the table `accounting_category` */

insert  into `accounting_category`(`id`,`category`,`parent`) values (8,'Utilities',0),(9,'Electricity',8),(10,'Electricity',8),(11,'Utilities',0),(12,'Overheads',0),(13,'Office rent',12),(14,'Office cleaning',12),(15,'Accommodation',0),(16,'Host rent',15);

/*Table structure for table `accounting_documents` */

DROP TABLE IF EXISTS `accounting_documents`;

CREATE TABLE `accounting_documents` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `account_id` int(11) NOT NULL,
  `document` tinytext NOT NULL,
  `date_added` datetime NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `accounting_documents` */

/*Table structure for table `accounting_list` */

DROP TABLE IF EXISTS `accounting_list`;

CREATE TABLE `accounting_list` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `open_balance` decimal(10,2) NOT NULL DEFAULT '0.00',
  `country_id` int(11) NOT NULL,
  `date_added` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=70 DEFAULT CHARSET=latin1;

/*Data for the table `accounting_list` */

insert  into `accounting_list`(`id`,`name`,`open_balance`,`country_id`,`date_added`) values (67,'test','10000.55',106,'2016-09-17 22:40:30'),(68,'RSVP Christmas Project','100000.00',106,'2016-09-19 09:29:48'),(69,'September 2016','1000000.00',106,'2016-09-19 09:32:40');

/*Table structure for table `accounting_payee` */

DROP TABLE IF EXISTS `accounting_payee`;

CREATE TABLE `accounting_payee` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` tinytext NOT NULL,
  `type` tinytext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

/*Data for the table `accounting_payee` */

insert  into `accounting_payee`(`id`,`name`,`type`) values (4,'test','test'),(5,'Jamaica Public Service Company','Utility'),(6,'Marcia Aird','Host Family'),(7,'Daren Larmond','Host Family');

/*Table structure for table `address` */

DROP TABLE IF EXISTS `address`;

CREATE TABLE `address` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `address1` varchar(45) NOT NULL,
  `address2` varchar(45) DEFAULT NULL,
  `address3` varchar(45) DEFAULT NULL,
  `country_id` int(11) NOT NULL,
  `state_id` int(11) DEFAULT NULL,
  `zip_code` varchar(45) DEFAULT NULL,
  `address_type_id` int(11) NOT NULL DEFAULT '1',
  `phone` varchar(15) DEFAULT NULL COMMENT 'home phone number',
  `phone_2` varchar(15) DEFAULT NULL,
  `phone_3` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `address_type_idx` (`address_type_id`),
  CONSTRAINT `fk_address_type_id` FOREIGN KEY (`address_type_id`) REFERENCES `address_type` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=109 DEFAULT CHARSET=utf8;

/*Data for the table `address` */

insert  into `address`(`id`,`address1`,`address2`,`address3`,`country_id`,`state_id`,`zip_code`,`address_type_id`,`phone`,`phone_2`,`phone_3`) values (1,'12 park lan','kingston 12','kingston',105,3,NULL,1,'555-5555',NULL,NULL),(16,'Williamsfield District','Williamsfield P.O.','Manchester',106,1646,'00000',1,'876 962 0000',NULL,NULL),(17,'Williamsfield District','Williamsfield P.O.','',106,1646,'00000',2,'876 962 0000',NULL,NULL),(18,'Clover Road','Mandeville P.O.','',106,1646,'',1,'876 962 111133',NULL,NULL),(19,'Clover Road','Mandeville P.O.','',106,1646,'',2,'',NULL,NULL),(20,'P.O. Box 6432','Runaway Bay','',106,1649,'',3,NULL,NULL,NULL),(22,'P.O. Box 2','Shooters Hill P.O.','',106,1646,'',1,'876 603 4873',NULL,NULL),(23,'address1','address2','address3',106,1645,'00000',1,'1876-333-2321',NULL,NULL),(24,'','','',0,0,'',1,'',NULL,NULL),(25,'address1','address2','address3',3,72,'90210',1,'home_phone',NULL,NULL),(26,'','','',0,0,'',1,'',NULL,NULL),(27,'address1','address2','address3',4,119,'90210',1,'home_phone',NULL,NULL),(28,'','','',0,0,'',1,'',NULL,NULL),(29,'address1','address2','address3',2,33,'90210',1,'home_phone',NULL,NULL),(30,'12 park lane','hope dr','sin city',222,3516,'90210',1,'',NULL,NULL),(31,'address1','address2','address3',3,71,'90210',1,NULL,NULL,NULL),(32,'address1','address2','address3',2,36,'90210',1,'home_phone',NULL,NULL),(33,'address1','address2','address3',3,72,'90210',1,NULL,NULL,NULL),(34,'address1','address2','address3',2,35,'90210',1,'home_phone',NULL,NULL),(35,'address1','address2','address3',2,33,'90210',1,NULL,NULL,NULL),(36,'address1','address2','address3',3,70,'90210',1,'home_phone',NULL,NULL),(37,'address1','address2','address3',2,34,'90210',1,NULL,NULL,NULL),(38,'address1','address2','address3',3,72,'90210',1,'home_phone',NULL,NULL),(39,'address1','address2','address3',3,72,'90210',1,NULL,NULL,NULL),(40,'sdfsd','fsdf','sdf',3,71,'33351',1,'5614004938',NULL,NULL),(41,'tretert','erter','rtertre',1,4,'rtretre',1,NULL,NULL,NULL),(42,'address1','address2','address3',3,70,'90210',1,'home_phone',NULL,NULL),(43,'address1','address2','address3',2,34,'90210',1,NULL,NULL,NULL),(44,'Housen Heights','','Plantation',223,3630,'33313',1,'8768682459',NULL,NULL),(45,'Housen Heights','Plantation','Plantation',223,3630,'33313',1,NULL,NULL,NULL),(46,'Heathfield','Housen Plain','Mandeville',106,1646,'00000',1,'8768682459',NULL,NULL),(47,'Housen Heights','','Mandeville',106,1646,'00000',1,NULL,NULL,NULL),(48,'109nd','','London',222,3551,'00000',1,'8768682459',NULL,NULL),(49,'Housen Heights','','Runaway Bay',106,1649,'00000',1,NULL,NULL,NULL),(50,'Plantatian','','Plantation',223,3630,'33313',1,'8762961938',NULL,NULL),(51,'Clover Close','','Mandeville P.O.',106,1646,'00000',1,NULL,NULL,NULL),(52,'12 Longfellow Avenue','','Kingston',106,1645,'876',1,'876-933-4681',NULL,NULL),(53,'12 Longfellow Avenue','','Kingston',106,1645,'876',1,NULL,NULL,NULL),(54,'Housen Heights','','Mandeville',106,1646,'00000',1,'8768682459',NULL,NULL),(55,'Housen Heights','','Mandeville P.O.',106,1646,'00000',1,NULL,NULL,NULL),(56,'address1','address2','address3',3,72,'90210',1,'home_phone',NULL,NULL),(57,'address1','address2','address3',2,36,'90210',1,NULL,NULL,NULL),(58,'address1','address2','address3',2,35,'90210',1,'home_phone',NULL,NULL),(59,'address1','address2','address3',4,120,'90210',1,NULL,NULL,NULL),(62,'New Green District','New Green P.O.','',106,1646,'',1,'',NULL,NULL),(63,'','','',106,1646,'',2,'',NULL,NULL),(64,'BNX11','Brighton','Brigton',222,3522,'0124N',1,'44 203 868 0208',NULL,NULL),(65,'Housen Heights','','Mandeville P.O.',106,1646,'00000',1,NULL,NULL,NULL),(66,'Fairfield','','Mandeville P.O.',106,1646,'000000',1,'8762771111',NULL,NULL),(67,'New Green District','','New Green P.O.',106,1646,'00000',1,NULL,NULL,NULL),(68,'New Green District','New Green P.O.','Mandeville   ',106,1646,'00000',1,'8761155412',NULL,NULL),(69,'Content','Content P.O.','Montego Bay',106,1652,'00000',1,'8761111111',NULL,NULL),(70,'Plantation','Plantation Level','Lauderhill',223,3630,'33319',1,'',NULL,NULL),(71,'P.O. Box 2','Plantation','Lauderhill',223,3630,'00000',1,NULL,NULL,NULL),(72,'12 Longfellow Avenue','Duhaney Park','Kingston',106,1645,'876',1,'',NULL,NULL),(73,'12 Longfellow Avenue','Duhaney Park','Kingston',106,1645,'876',1,NULL,NULL,NULL),(74,'West Acres','28 Street','Palm Beach',223,3630,'33319',1,'',NULL,NULL),(75,'Housen Heights','May Pen','Mandeville P.O.',106,1646,'00000',1,NULL,NULL,NULL),(76,'25 Parakeet Boulevard','Pleasantville','San Fernando',213,3286,'00000',1,'',NULL,NULL),(77,'Fyzabad','','Fyzabad',213,3286,'00000',1,NULL,NULL,NULL),(78,'address1','address2','address3',2,34,'90210',1,'1234567890',NULL,NULL),(79,'address1','address2','address3',1,1,'90210',1,NULL,NULL,NULL),(80,'address1','address2','address3',2,35,'90210',1,'1234567890',NULL,NULL),(81,'address1','address2','address3',4,118,'90210',1,NULL,NULL,NULL),(82,'address1','address2','address3',4,119,'90210',1,'1234567890',NULL,NULL),(83,'address1','address2','address3',3,71,'90210',1,NULL,NULL,NULL),(84,'','','',0,0,'',1,'',NULL,NULL),(85,'','','',0,0,'',1,NULL,NULL,NULL),(86,'address1','address2','address3',2,35,'90210',1,'1234567890',NULL,NULL),(87,'address1','address2','address3',13,193,'90210',1,NULL,NULL,NULL),(88,'','','',0,0,'',1,'',NULL,NULL),(89,'','','',0,0,'',1,NULL,NULL,NULL),(90,'address1','address2','address3',106,1645,'90210',1,'1234567890',NULL,NULL),(91,'address1','address2','address3',4,119,'90210',1,NULL,NULL,NULL),(92,'address1','address2','address3',1,2,'90210',1,'1234567890',NULL,NULL),(93,'address1','address2','address3',13,193,'90210',1,NULL,NULL,NULL),(94,'address1','address2','address3',3,70,'90210',1,'1234567890',NULL,NULL),(95,'address1','address2','address3',3,71,'90210',1,NULL,NULL,NULL),(96,'address1','address2','address3',3,70,'90210',1,'1234567890',NULL,NULL),(97,'address1','address2','address3',2,34,'90210',1,NULL,NULL,NULL),(98,'address1','address2','address3',4,119,'90210',1,'1234567890',NULL,NULL),(99,'address1','address2','address3',3,71,'90210',1,NULL,NULL,NULL),(100,'address1','address2','address3',4,119,'90210',1,'1234567890',NULL,NULL),(101,'address1','address2','address3',2,35,'90210',1,NULL,NULL,NULL),(102,'address1','address2','address3',3,71,'90210',1,'1234567890',NULL,NULL),(103,'address1','address2','address3',2,34,'90210',1,NULL,NULL,NULL),(104,'4 Hooper Terrace','Housen Heights','Mandeville P.O.',106,1646,'00000',1,'8769627786',NULL,NULL),(105,'c/o NCU','Manchester Road','Mandeville P.O.',106,1646,'00000',1,NULL,NULL,NULL),(106,'South Race Course Road','Mandeville P.O.','Manchester',106,NULL,'',1,'',NULL,NULL),(107,'Caledonia Road','Mandeville P.O.','Manchester',106,NULL,'',1,'',NULL,NULL),(108,'Spaulding','Clarendon','',106,NULL,'',1,'',NULL,NULL);

/*Table structure for table `address_type` */

DROP TABLE IF EXISTS `address_type`;

CREATE TABLE `address_type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

/*Data for the table `address_type` */

insert  into `address_type`(`id`,`name`) values (1,'Residential Address'),(2,'Postal Address'),(3,'Office');

/*Table structure for table `administration` */

DROP TABLE IF EXISTS `administration`;

CREATE TABLE `administration` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '\n        ',
  `volunteer_id` int(11) NOT NULL,
  `welcome_call` int(11) NOT NULL DEFAULT '0',
  `acceptance_letter` int(11) NOT NULL DEFAULT '0',
  `rsvp_webpage` int(11) NOT NULL DEFAULT '0',
  `medical_insurance` int(11) NOT NULL DEFAULT '0',
  `curriculum_vitae` int(11) NOT NULL DEFAULT '0',
  `medical_report` int(11) NOT NULL DEFAULT '0',
  `criminal_record` int(11) NOT NULL DEFAULT '0',
  `work_permit_exemption` int(11) NOT NULL DEFAULT '0',
  `visa` int(11) NOT NULL DEFAULT '0',
  `flight_detail` int(11) NOT NULL DEFAULT '0',
  `phone_call_2` int(11) NOT NULL DEFAULT '0',
  `accommodation_details` int(11) NOT NULL DEFAULT '0',
  `project_detail` int(11) NOT NULL DEFAULT '0',
  `driver_detail` int(11) NOT NULL DEFAULT '0',
  `phone_call_3` int(11) NOT NULL DEFAULT '0',
  `last_phone_all` int(11) NOT NULL DEFAULT '0',
  `pre_departure_email_1` int(11) NOT NULL DEFAULT '0',
  `pre_departure_email_2` int(11) NOT NULL DEFAULT '0',
  `pre_departure_email_3` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `fk_ad_id_idx` (`volunteer_id`),
  CONSTRAINT `fk_ad_id` FOREIGN KEY (`volunteer_id`) REFERENCES `account` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

/*Data for the table `administration` */

insert  into `administration`(`id`,`volunteer_id`,`welcome_call`,`acceptance_letter`,`rsvp_webpage`,`medical_insurance`,`curriculum_vitae`,`medical_report`,`criminal_record`,`work_permit_exemption`,`visa`,`flight_detail`,`phone_call_2`,`accommodation_details`,`project_detail`,`driver_detail`,`phone_call_3`,`last_phone_all`,`pre_departure_email_1`,`pre_departure_email_2`,`pre_departure_email_3`) values (1,100020,1,1,0,0,0,0,0,0,0,0,0,0,0,0,0,0,1,1,1),(2,100021,1,1,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(3,100028,1,1,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(4,100022,1,1,1,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(5,100023,1,1,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(6,100024,1,1,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(7,100025,1,1,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(8,100034,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0),(9,100035,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0);

/*Table structure for table `application` */

DROP TABLE IF EXISTS `application`;

CREATE TABLE `application` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `volunteer_id` int(11) NOT NULL,
  `application_status_id` int(11) NOT NULL,
  `project_id` int(11) NOT NULL,
  `start_date` datetime NOT NULL,
  `end_date` datetime NOT NULL,
  `special_interests` varchar(45) DEFAULT NULL,
  `special_interests_text` blob,
  `date_added` datetime DEFAULT NULL,
  `added_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `application` */

/*Table structure for table `callback` */

DROP TABLE IF EXISTS `callback`;

CREATE TABLE `callback` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first-name` varchar(45) DEFAULT NULL,
  `last-name` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `telephone-number` varchar(20) DEFAULT NULL,
  `organization` varchar(45) DEFAULT NULL,
  `hear-about` varchar(45) DEFAULT NULL,
  `message` mediumtext,
  `best-time-call` varchar(15) DEFAULT NULL,
  `newsletter` varchar(5) DEFAULT NULL,
  `note` mediumtext,
  `callback` int(11) DEFAULT NULL,
  `call_made_by` varchar(45) DEFAULT NULL,
  `date_added` datetime DEFAULT NULL,
  `date_made` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

/*Data for the table `callback` */

insert  into `callback`(`id`,`first-name`,`last-name`,`email`,`telephone-number`,`organization`,`hear-about`,`message`,`best-time-call`,`newsletter`,`note`,`callback`,`call_made_by`,`date_added`,`date_made`) values (1,'first-name','last-name','example@example.com','telephone-number','organization','Google','message','12pm â€“ 5pm','Yes',NULL,NULL,NULL,'2016-07-15 20:48:32',NULL),(2,'Shanae','Barrett','bridgette_barrett@yahoo.com','8768682459','','Google','Accommodation','12pm â€“ 5pm','Yes','Provide overview of host family',1,'Shelly-Ann Morgan','2016-07-16 16:41:50','2016-07-19 00:00:00'),(3,'Dwight','Nevers','bridgette_barrett@yahoo.com','8768682459','','Facebook','How can I pay?','5pm â€“ 10pm','Yes','I provided information on non-refundable deposit and programme/project fee',1,'Bridgette Barrett','2016-07-19 13:40:00','2016-07-19 00:00:00'),(4,'Daneil','Barrett','bridgette_barrett@yahoo.com','8768682459','','Facebook','What projects do you have in Grenada?','12pm â€“ 5pm','Yes','Called',1,'Bridgette Barrett','2016-07-20 05:10:25','2016-07-20 00:00:00'),(5,'test','testter','sirrom2005@gmail.com','5614004938','','Yahoo','testing','12pm â€“ 5pm','Yes',NULL,NULL,NULL,'2016-07-21 05:52:46',NULL),(6,'Jhazz','Barrett','bridgette_barrett@yahoo.com','8768682459','','Facebook','Yes','7am â€“ 12pm','Yes',NULL,NULL,NULL,'2016-07-21 06:02:47',NULL),(7,'Bridgette','Barrett','bridgette_barrett@yahoo.com','8762961938','','Google','Need more information about prices','12pm â€“ 5pm','Yes',NULL,NULL,NULL,'2016-12-12 07:03:45',NULL),(8,'Blessy','Dacanay','blesskd13@gmail.com','744228867','FRV','Google','It\'s a new year and it might be time\nto give your website a lifting (web redesign), have you thought  about that?\n\nWould it be valuable if we could redesign your website?\nSo people can find your website showing up at the top of search results\nand take action when they land on it?\n\nIf you want to see a new version of your site for free.\n\nPlease just reply to this email \"Send me a free Mockup\".\nWith no obligation to work with us to redesign your website.\n\nThanks\n\nBlessy','7am â€“ 12pm','Yes',NULL,NULL,NULL,'2017-01-31 06:21:40',NULL);

/*Table structure for table `content_category` */

DROP TABLE IF EXISTS `content_category`;

CREATE TABLE `content_category` (
  `id` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `content_category` */

insert  into `content_category`(`id`,`name`) values (1,'About'),(50,'footer');

/*Table structure for table `current_status` */

DROP TABLE IF EXISTS `current_status`;

CREATE TABLE `current_status` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

/*Data for the table `current_status` */

insert  into `current_status`(`id`,`name`) values (1,'High School'),(2,'Pre-university'),(3,'Gap Year'),(4,'Undergraduate student'),(5,'Recent graduate (last 3 years)'),(6,'Graduate Student'),(7,'Career Breaker'),(8,'Retired'),(9,'Other');

/*Table structure for table `faq` */

DROP TABLE IF EXISTS `faq`;

CREATE TABLE `faq` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `faq_category_id` int(11) NOT NULL,
  `faq_group_id` int(11) NOT NULL,
  `question` tinytext CHARACTER SET big5 NOT NULL,
  `answer` blob NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_faq_cat_idx` (`faq_category_id`),
  CONSTRAINT `fk_faq_cat` FOREIGN KEY (`faq_category_id`) REFERENCES `faq_category_id` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=86 DEFAULT CHARSET=utf8;

/*Data for the table `faq` */

insert  into `faq`(`id`,`faq_category_id`,`faq_group_id`,`question`,`answer`) values (1,1,1,'Which countries can I volunteer in?','Grenada, Jamaica, St. Lucia'),(2,1,1,'Who can volunteer with RSVP Caribbean?','We cater to a wide range of\r\n\r\nindividuals - High School, College/University, Gap Year, Career Break, \r\n\r\nProfessional and Retired persons; and anyone who meets the programme \r\n\r\nor project requirement.'),(3,1,1,'When can I apply?','You can apply at any time. We prefer at least 90 days\r\n\r\nin advance to process your application. However, we do accept volunteers \r\n\r\nwho apply within less than 90 days. Once you have decided on your \r\n\r\ndestination and programme please go ahead and apply.'),(4,1,1,'When can I start?','For most programmes you can choose your start and\r\n\r\nend date. Most programmes run all year round. Once you submit your \r\n\r\napplication we will confirm your preferred dates. Only the health and \r\n\r\nwellness retreat programme, and the summer and spring break projects \r\n\r\nhave set dates.'),(5,1,1,'How do I obtain a criminal record check?','The process varies from\r\n\r\ncountry to country. The best starting point would be to contact your local \r\n\r\npolice station or check online to find out about the process.'),(6,1,1,'Can I use RSVP Caribbean as a referee after I have volunteered?','We\r\n\r\nare happy to provide a reference or to be used as a referee provided that \r\n\r\nthe volunteer complies with the Terms and Conditions.'),(7,1,1,'What Language is spoken?','English is the main language in most\r\n\r\nCaribbean islands. However, Patois, French Creole and Dutch are other \r\n\r\nlanguages spoken. You do not have to know the local language, however \r\n\r\nduring cultural sessions and interactions you will learn some aspects of \r\n\r\nthe local language. If you want to improve your English or learn the local \r\n\r\nlanguage you can sign up for our Language Lessons but this is not \r\n\r\ncompulsory.'),(8,1,1,'Will I be paid for my work?','No, this is unpaid work, as volunteers cannot\r\n\r\ndo paid work in our destinations; it is illegal to do so. You are working on a \r\n\r\nvoluntary basis only. You will be making a significant contribution to \r\n\r\npartner organizations and helping to address important national and \r\n\r\ncommunity needs within your host nation.'),(9,1,1,'Are the countries safe?','RSVP Caribbean is committed to the safety and\r\n\r\nwell-being of all volunteers and makes it a priority to carefully plan and \r\n\r\nselect destinations, staff, host families, drivers, communities and \r\n\r\nprogrammes. RSVP has a risk management and safety plan for all destinations. All programmes have trained and dedicated staff who\r\n\r\nprovide 24-hour support. A full orientation is provided the first day after \r\n\r\narrival. Please see Safety and Support.'),(10,1,1,'Can I travel with a friend?','You can travel with a friend, a boyfriend or\r\n\r\ngirlfriend. However, please be aware that you cannot stay at the same \r\n\r\nhost family as an unmarried couple or, if you are friends of the opposite \r\n\r\nsex, as culturally this is not the norm. Only legally married couples can \r\n\r\nstay together and certified proof of this must be provided.'),(11,1,1,'Can any nationality volunteer?','Yes, you can be of any nationality and\r\n\r\nvolunteer with us once you meet the requirements.'),(12,1,1,'How do I benefit from volunteering?','You will contribute by assisting\r\n\r\npersons with their basic needs and be a part of a life changing experience. \r\n\r\nVolunteering in a developing country will help you to see another part of \r\n\r\nthe world and experience how other persons live. It will also be a good \r\n\r\naddition to your curriculum vitae or resume, and what you learn during the \r\n\r\nprocess will enhance your personal and professional development.'),(13,1,1,'Can I fundraise for my programme?','Many volunteers fundraise to get\r\n\r\nadditional support for their programme. You can click on Fundraising \r\n\r\nTips for ideas.'),(14,1,1,'Should I bring a suitcase or rucksack?','Either one is ok, it depends on\r\n\r\nyour personal preference. A small rucksack comes in handy on the \r\n\r\nweekend or for your daily activities and the main rucksack or suitcase for \r\n\r\ngeneral travel.'),(15,1,1,'What is the weather like?','The weather in the Caribbean is mainly warm\r\n\r\nand sunny all year round. However, June to November it may rain \r\n\r\noccasionally so an umbrella or a raincoat might come in handy.'),(16,1,1,'Is the tap water safe to drink?','It is safe to drink the tap water in the\r\n\r\nCaribbean but your host family will boil the water for you, if you desire. \r\n\r\nHowever, if your preference is to have bottled water you will have to \r\n\r\npurchase that at a supermarket or shop.'),(17,1,1,'What type of clothing should I take with me?','It depends on your\r\n\r\nprogramme. Once you have applied and received your RSVP webpage \r\n\r\nthe specific clothing requirement for your programme will be uploaded. \r\n\r\nYou should pack slippers, shorts, pants, cotton blouses, dresses and a \r\n\r\nlight sweater for evening and weekend wear.'),(18,1,1,'When will I know where I will live and work?','One month before arrival\r\n\r\nyour programme and accommodation details will be uploaded to your \r\n\r\nRSVP webpage.'),(19,1,1,'Will I be able to use my mobile phone?','It is very expensive to roam in\r\n\r\nthe Caribbean. We suggest that you purchase an inexpensive phone for \r\n\r\napproximately $60USD. If phones are available for rental at the office you \r\n\r\nwill be able to rent a phone for $15USD. This must be returned the day \r\n\r\nbefore departure.'),(20,1,1,'Will I have internet access?','The Caribbean is made up of developing\r\n\r\ncountries. There is no guarantee that your host family will have internet. \r\n\r\nHowever, there are internet cafes and hot spots where you can access the \r\n\r\ninternet. You can also purchase a wireless device (smart-phone or tablet) \r\n\r\nand add an internet data package based on your needs.'),(21,1,1,'Where can I do my laundry?','There are different options for doing\r\n\r\nlaundry. You can hand wash your laundry and your host family will provide \r\n\r\nbasins for this. If your host family has a washing machine you will be \r\n\r\nallowed to use it once every two weeks. You must have a full load as \r\n\r\nelectricity bills are expensive in the Caribbean so you are not allowed to \r\n\r\nwash more frequently. You can also visit a laundromat in the town to do \r\n\r\nyour laundry. Another option is to pay someone to do your laundry and \r\n\r\nthis will cost approximately $25USD each time. In all cases you will have \r\n\r\nto provide your own laundry detergent. Your host family will discuss \r\n\r\nlaundry options when you arrive.'),(22,1,1,'What types of plugs are used?','The Caribbean uses the same plugs as\r\n\r\nthe United States and Canada. These are the two-pin plugs.  Dependent \r\n\r\non the type of plug used in your home country you may need to travel with \r\n\r\nan adaptor.'),(23,1,1,'What can I do in the evenings and on the weekends?','In the evenings\r\n\r\nyou can enjoy karaoke, the movies, hang out with islanders. Outdoor \r\n\r\nactivities can help with your cultural immersion and so on the weekends \r\n\r\nenjoy the rivers, beaches, hiking, concerts, reggae and soca events and \r\n\r\nvarious attractions indigenous to your host nation.'),(24,1,1,'Can I talk with another volunteer who has been on your programme?','Sure you can, visit the Volunteer Stories page, or Contact Us and we\r\n\r\nwill put you in touch with a past volunteer.'),(25,1,1,'What if I have more questions?','If you have additional questions or would like to discuss our programmes and projects in more detail, please \r\n\r\nemail us at info@rsvpcaribbean.com or call +1 876 569 5918 Mondays to \r\n\r\nThursdays 8:30am - 4:30pm and 8:30am - 3:30pm on a Friday. You can \r\n\r\nalso Request a Call Back or fill in the Enquiry Form.'),(26,1,1,'What is the next step?','You can Contact Us for more information or Apply Now.'),(27,1,2,'What types of programmes are available?','We have many different\r\n\r\nprogrammes to suit your interests. These include Child Care and \r\n\r\nProtection, Teaching, Medicine, Nursing, Physiotherapy, Dentistry, Health \r\n\r\nand Wellness Retreat, Sports, Humanitarian, Environmental Awareness \r\n\r\nand Protection, Entrepreneurship, Rastafarian and Youth and Community \r\n\r\nDevelopment. See Programme and Project Description for more \r\n\r\ndetails.'),(28,1,2,'What types of projects are available?','Internship and Dissertation,\r\n\r\nProfessional, Summer, Spring Break, Group  and Corporate trips in the \r\n\r\nareas of  Child Care and Protection, Teaching, Medicine, Nursing, \r\n\r\nPhysiotherapy, Dentistry, Holistic Retreat, Sports, Humanitarian, \r\n\r\nEnvironmental Awareness and Protection, Entrepreneurship, Rastafarian \r\n\r\nand Youth and Community Development. Other projects include English \r\n\r\nand Patois Lessons and Customized projects. See Programme and \r\n\r\nProject Description for more details.'),(29,1,2,'How long can a volunteer stay on the programme?','This depends on\r\n\r\nwhich programme you choose and the destination. Programme length \r\n\r\nstarts at 1 week and can go up to 18 months. You decide how long you \r\n\r\nwould like to stay on the programme. You can click on Programme and \r\n\r\nProject Prices to view the minimum stay.'),(30,1,2,'Can I do more than one programme?','Yes, you can combine your\r\n\r\nprogrammes. You can either do this within destination or across \r\n\r\ndestinations.'),(31,1,2,'Can a group of us join the programme?','We can organize programmes\r\n\r\nfor you and your friends. A group for us is five (5) or more persons. You \r\n\r\ncan click on Group Trip for more details and we will customize a \r\n\r\nprogramme to suit your group.'),(32,1,2,'Should I bring a donation for where I will volunteer?','You can travel\r\n\r\nwith donations if you wish to. You can view the Donation List to \r\n\r\ndetermine what type of donation would be most appropriate and impacting \r\n\r\nto your programme. Do not bring items that are too heavy, that will affect \r\n\r\nyour weight requirement with the airline.'),(33,1,3,'How old do I have to be to volunteer?','To volunteer on RSVP\r\n\r\nprogrammes volunteers have to be at least 16 years old; for some \r\n\r\nprogrammes the minimum age requirement is 18 years old. There is no \r\n\r\nupper limit on age as long as volunteers are healthy and open to the \r\n\r\nexperience. Please see Programme and Project Information for the \r\n\r\nspecific age requirements.'),(34,1,3,'Do I need any academic qualifications?','Most programmes require\r\n\r\nlimited or no academic qualifications. Please see Programme and \r\n\r\nProject Information for requirements.'),(35,1,3,'Do I require a visa?','This is dependent on your nationality, chosen\r\n\r\ndestination and length of time. You can Contact Us with this information \r\n\r\nand we will provide additional information. It is your responsibility to get \r\n\r\nyour visa (if required) and any necessary visa or approval for any country \r\n\r\nyou will have to transit.'),(36,1,3,'Will I need vaccinations and what types?','This depends on the\r\n\r\ndestination you choose and what vaccinations you have had in the past. \r\n\r\nWe suggest that you visit your doctor who will provide expert advice on \r\n\r\nwhat vaccinations are needed. With your doctor ensure that you are fully \r\n\r\nimmunized and you have the required vaccinations for your travel.'),(37,1,3,'Are there any specific requirements for me to be accepted?','Once we\r\n\r\nspeak with your referee (listed on your application form) who could be a \r\n\r\nteacher, lecturer, employer, and pastor we will determine if you are \r\n\r\nsuitable. All volunteers are required to provide a criminal record check as \r\n\r\npart of the application process. Once you are cleared, and your \r\n\r\nprogramme is available, you will be fully accepted.'),(38,1,4,'What are the costs?','Please see Programme and Project Prices for\r\n\r\neach programme and project costs; and pay careful attention to What is \r\n\r\nIncluded and What is Not included. Programme costs start at \r\n\r\n$1,400USD per person.'),(39,1,4,'What does the fee include?','Our prices include a programme,\r\n\r\naccommodation, breakfast and dinner, pre-arrival support, in-country \r\n\r\nsupport, transportation to and from the airport, transportation while in-\r\n\r\ncountry from your host family to your programme, or project, and 24-hour support. Pay careful attention to What is Included and What is Not\r\n\r\nincluded. Please also see a Breakdown of Fees to see how your money \r\n\r\nis spent.'),(40,1,4,'Are meals included in the cost?','Two meals (breakfast and dinner) are\r\n\r\nprovided at your host family. If you are staying home on the weekends and \r\n\r\nnot travelling out, these two meals are still provided. On the health and \r\n\r\nwellness programme, Rastafarian programme and summer project, \r\n\r\nbreakfast, lunch and dinner are provided.'),(41,1,4,'Is there a discount for returning volunteer?','Yes, returning volunteers get a 10% discount.'),(42,1,4,'Is there a discount for combining programmes and destinations?','If volunteers are applying for 16 weeks or more and combining projects they get a 10% discount.'),(43,1,5,'How are host families selected?','Each host family is carefully selected.\r\n\r\nA staff member visits the home and completes an assessment survey \r\n\r\nwhich takes into consideration safety, basic amenities (running water, \r\n\r\nelectricity), proper sanitation, sufficient ventilation, adequate storage and \r\n\r\nfamily-friendly atmosphere. Once the standards are met a background \r\n\r\ncheck is done of all persons in the household and if everything is \r\n\r\nsatisfactory the host family is provided with an orientation, a host family \r\n\r\nmanual and then begins hosting volunteers. There is a quarterly visit to \r\n\r\nthe host family to ensure standards are being maintained.'),(44,1,5,'Do I need to bring towels?','Yes, bring your own towel, at least two (2).'),(45,1,5,'Do I need to bring sheets?','No, these will be provided by your host family.'),(46,1,5,'Do I need to bring a mosquito net?','If you want to you can bring a\r\n\r\nmosquito net, however in some cases you might have difficulty installing \r\n\r\nthem. You can travel with mosquito repellant as an alternative.'),(47,1,5,'Do I need to bring a sleeping bag?','You do not need to travel with a\r\n\r\nsleeping bag. A bed, bed linen and pillows will be provided by your host \r\n\r\nfamily.'),(48,1,5,'Should I bring gifts for my host family?','You do not have to bring any\r\n\r\ngifts for your host family but it is a nice gesture. You can travel with small \r\n\r\nsouvenirs such as a cup, key ring, pens, postcard and sweets. Do not \r\n\r\nbring items that are too heavy that will affect your weight requirement with \r\n\r\nthe airline.'),(49,1,5,'Will I live with other volunteers?','This is not a guarantee and is\r\n\r\ndependent on your time of arrival and availability within host families. If \r\n\r\nyou wish to live with another volunteer you can make this request on your \r\n\r\napplication form.'),(50,1,6,'What is the local currency?','It varies across destinations; in Grenada\r\n\r\nand St. Lucia it is Eastern Caribbean Dollars and in Jamaica it is Jamaican \r\n\r\ndollars.'),(51,1,6,'How much money should I bring?','This will vary based on your tastes,\r\n\r\npreferences and needs. Lunch can range from $5USD - $10USD, popular \r\n\r\nsnacks from $1USD up and fast food $5USD and up. Your evening \r\n\r\nrecreation could range from $20USD and above. Taking taxis on the \r\n\r\nweekends to the town will cost approximately $2USD and if you are \r\n\r\ntravelling out of town it could cost $10-$30USD or more; if you are \r\n\r\ntravelling alone or with a group. Meals while out on the weekend starts at \r\n\r\n$5USD and accommodation from $30USD per night dependent on \r\n\r\nlocation. To visit a local attraction can vary from $5USD - $30USD or \r\n\r\nmore. To attend a local concert, a movie or any form of entertainment \r\n\r\nranges from $6USD - $15USD. These are all estimates.'),(52,1,6,'How should I bring my money?','You can bring cash, debit card, credit\r\n\r\ncard or travelers cheque. The currencies which are easier to exchange in \r\n\r\nthe Caribbean are US dollars, Canadian dollars, Pound Sterling and \r\n\r\nEuros. We suggest that you travel with limited cash as there are \r\n\r\nrestrictions on how much cash you can take into some countries.'),(53,1,6,'How do I exchange money?','You will not need any money until your first\r\n\r\nwork day. Therefore when you arrive at the airport you do not need to \r\n\r\nchange your money there. You will be picked up by a staff the day after \r\n\r\narrival and taken to a bank or cambio to exchange your money and you \r\n\r\nwill get better rates than at the airport.'),(54,1,7,'Do I need a passport?','Yes, you need a valid passport to travel\r\n\r\ninternationally. Your passport must be valid for at least 6 months after your \r\n\r\nreturn date.'),(55,1,7,'Is airfare included in the programme fee?','No, airfare is not included.\r\n\r\nPlease see What is Included and What is Not Included.'),(56,1,7,'How do I book my flight?','You can contact a reputable travel agent to\r\n\r\nbook your flight. RSVP Caribbean does not organize flights. See Flights \r\n\r\nfor more details.'),(57,1,7,'Do I have to pay for transportation to and from my programme?','You\r\n\r\nwill receive your taxi money by the second Thursday of the month from \r\n\r\nRSVP Caribbean as this is included in your programme fee. If you are \r\n\r\nstaying for more than one (1) month, this becomes due each second \r\n\r\nThursday.'),(58,1,7,'How far is my programme from my host family?','This is dependent on\r\n\r\nwhere you will live and volunteer. However, most partner agencies are \r\n\r\nwithin 15-45 minutes of the host families.'),(59,1,8,'What is an internship?','An internship is for students or experienced\r\n\r\nprofessionals to gain knowledge in their field of interest. Interns work \r\n\r\nalongside qualified professionals and have the opportunity to learn local \r\n\r\npolicies and procedures.'),(60,1,8,'What types of internships are available?','We offer internships in Child\r\n\r\nCare and Protection, Teaching, Medicine, Nursing, Physiotherapy, \r\n\r\nDentistry, Sports, Humanitarian, Environmental Awareness and Protection \r\n\r\nand Rastafarian Culture.'),(61,1,8,'What qualifications do I need for an internship?','You need to have\r\n\r\ncompleted at least two (2) years of university, or, be practicing in your field \r\n\r\nfor at least one (1) year.'),(62,1,8,'Do I need to provide any other information?','You need to provide\r\n\r\ndetails on the objectives of the internship and any form that needs to be \r\n\r\ncompleted. These are reviewed and then you are informed if your \r\n\r\ninternship is possible.'),(63,1,8,'What will I do as an intern?','This is dependent on the programme you\r\n\r\nselect but in most cases you will observe and conduct day to day tasks \r\n\r\nbased on your programme. The day to day tasks will be based on your \r\n\r\narea of interest and or specialty, your current skills and the needs of the \r\n\r\npartner organization and what you are allowed to do.'),(64,1,8,'Who will supervise my internship?','Each programme has a qualified\r\n\r\nsupervisor and also a qualified RSVP Caribbean staff member. These \r\n\r\nindividuals will supervise your work and provide you with guidance and \r\n\r\nsupport.'),(65,1,8,'How long can I do an internship?','It depends on the programme and the\r\n\r\nnumber of hours you want to complete. Internships typically start at 2 \r\n\r\nweeks and run for up to 3 months. If you wish to stay longer this can be \r\n\r\narranged.'),(66,2,1,'Will I be picked up at the airport?','Yes, an RSVP Caribbean driver will\r\n\r\npick you up at the airport and take you directly to your host family. At least \r\n\r\n2 weeks before arrival you will get the name and a picture of the driver \r\n\r\nwho will pick you up via email.'),(67,2,1,'What will happen after I arrive?','After you arrive and you are with the\r\n\r\ndriver, a RSVP Caribbean staff member will speak with you, give you a \r\n\r\nwarm welcome and explain what will happen in the next 24 hours. You will \r\n\r\nthen be taken to your host family where you will settle in and get some \r\n\r\nrest.'),(68,2,1,'How many days will I volunteers on my programme or project?','You will volunteer at your programme for 5 hours each day Mondays - Fridays.'),(69,2,1,'Can I take time off during my programme or project?','Only if you are\r\n\r\nsick or have a legitimate reason, for example to visit the embassy, entitled \r\n\r\nvacation or doctor\'s appointment. Time off for leisure and fun is not \r\n\r\nallowed.'),(70,2,1,'What are the office opening hours?','Mondays - Thursdays 8:30am - 4:30pm and Fridays 8:30am - 3:30pm. However you can call us any day of the week and at any time for assistance.'),(71,2,1,'If I have a problem, who should I call?','First call your Programme\r\n\r\nCoordinator. If you do not get through to him/her call any RSVP staff \r\n\r\nmember on your emergency card which you will get during orientation.'),(72,2,1,'What if I get sick?','Although this is by no means a regular occurrence, if\r\n\r\nthis happens while you are in-country we will provide you with 24-hour \r\n\r\nsupport. A staff member will ensure that you receive immediate medical \r\n\r\nassistance and that the medical insurance company provided on file is contacted immediately. Your emergency contact will be updated\r\n\r\nimmediately and kept fully up-to-date throughout your illness.  In the event \r\n\r\nof a serious illness or accident, each volunteer will be covered by their \r\n\r\ninsurance policy, which is why we require all volunteers to have adequate \r\n\r\ninsurance which includes repatriation.'),(73,3,1,'Will my child be met at the airport?','Yes, an RSVP Caribbean driver will\r\n\r\npick your child up at the airport and take him/her directly to the host family. \r\n\r\nAt least two (2) weeks before arrival via email you will get the name and a \r\n\r\npicture of the driver who will pick your child up.'),(74,3,1,'What if my child becomes ill?','Although this is by no means a regular\r\n\r\noccurrence, if this happens while your child is in country we will provide \r\n\r\nyour child with 24-hour support. A staff will ensure that your child receives \r\n\r\nimmediate medical assistance and that the medical insurance company \r\n\r\nprovided on file is contacted immediately. As the parent you are also \r\n\r\ncontacted immediately so that the situation can be explained and you are \r\n\r\nkept fully up-dated.  In the event of a serious illness or accident, each \r\n\r\nvolunteer will be covered by their insurance policy, which is why we \r\n\r\nrequire all volunteers to have adequate insurance which includes \r\n\r\nrepatriation.'),(75,3,1,'What if my child is homesick?','Many of our volunteers travel away from\r\n\r\nhome for the first time. It is understandable that they will become \r\n\r\nhomesick. Our trained staff will make every effort to provide support and \r\n\r\nintegrate them with other volunteers. Through our friendly and comfortable \r\n\r\nenvironment at the RSVP office, programme support staff and host family, \r\n\r\nmost times the volunteers eventually adjust to their new environment.'),(76,3,1,'How will I know where my child will be?','Each volunteer is provided with\r\n\r\na RSVP webpage. A month before departure all details about their \r\n\r\nprogramme and accommodation are uploaded. This includes names, full \r\n\r\naddress, contact numbers and email addresses where available. You can \r\n\r\nalso contact the office for any updates.'),(77,3,1,'How can I communicate with my child?','You can call your child at the\r\n\r\nhost family or on his/her mobile Caribbean number. Internet cafes are \r\n\r\naccessible in some countries so you will be able to communicate via the \r\n\r\ninternet in some locations. You will receive a call or an email once your \r\n\r\nchild has safely arrived and we encourage volunteers to call home or send \r\n\r\nmessages frequently so parents are aware that they are doing well.'),(78,3,1,'Will my child be safe?','RSVP Caribbean is committed to the safety and\r\n\r\nwell-being of all volunteers and makes it a priority to carefully plan and \r\n\r\nselect destinations, staff, host families, drivers, communities and \r\n\r\nprogrammes that ensure that all volunteers are safe. RSVP has a risk \r\n\r\nmanagement and safety plan for all destinations. All programmes have \r\n\r\ntrained and dedicated staff who provide 24-hour support. A full orientation \r\n\r\nis provided the first day after arrival. Please also see Safety and Support.'),(79,3,1,'What emergency procedures are in place?','Your child will receive an\r\n\r\nemergency contact card upon arrival with the names of each staff member \r\n\r\nand also his/her first point of contact. Once there is an emergency we will \r\n\r\nrespond based on the nature of the emergency as outlined in our \r\n\r\nemergency plan.'),(80,3,1,'How do I know RSVP Caribbean is a real company?','We are registered\r\n\r\nwith the Companies Office of Jamaica and verification can be done on \r\n\r\ntheir company website. We have established partners across the \r\n\r\nCaribbean who can verify our authenticity. We also have volunteers who \r\n\r\nhave previously participated in our programmes that you can speak with \r\n\r\nand get feedback on their experience.'),(81,3,1,'Will boys and girls be in the same family?','No, boys and girls are housed at separate host families.'),(82,3,1,'What will my child do on the weekends?','If your child is on a regular\r\n\r\nprogramme he/she can enjoy the weekends with other volunteers by \r\n\r\nvisiting attractions, going to the beach and enjoying the Caribbean way of \r\n\r\nlife. Staff members can only provide advice on weekend trips but cannot \r\n\r\nbe held responsible. If your child is on the summer or spring break \r\n\r\nprojects weekend tours are planned for them and a staff member attends \r\n\r\nthese with the volunteers.'),(83,3,1,'Are meals included in the cost?','Breakfast and dinner is provided at the\r\n\r\nhost family. If your child is staying home on the weekends and not \r\n\r\ntravelling out, these two meals are also provided. Lunch is only included in \r\n\r\nthe health and wellness programme, Rastafarian programme and summer \r\n\r\nproject.'),(84,4,1,'Will I be able to keep in touch when I get back home?','Yes, you will\r\n\r\nreceive monthly newsletters and you can keep in touch via social media. \r\n\r\nOf course, you could also take another trip and volunteer with us.'),(85,4,1,'How do I become an RSVP Representative?','You can join the\r\n\r\nprogramme to tell others about your great experience in the Caribbean? \r\n\r\nPlease see Become a RSVP Representative for more information.');

/*Table structure for table `faq_category_id` */

DROP TABLE IF EXISTS `faq_category_id`;

CREATE TABLE `faq_category_id` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

/*Data for the table `faq_category_id` */

insert  into `faq_category_id`(`id`,`name`) values (1,'Before Departure'),(2,'While In-Country'),(3,'For Parents'),(4,'Upon Return Home');

/*Table structure for table `faq_group_id` */

DROP TABLE IF EXISTS `faq_group_id`;

CREATE TABLE `faq_group_id` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

/*Data for the table `faq_group_id` */

insert  into `faq_group_id`(`id`,`name`) values (1,'General'),(2,'Programmes and Projects'),(3,'Requirements'),(4,'Prices'),(5,'Accommodation'),(6,'Money Matters'),(7,'Travel'),(8,'Internship');

/*Table structure for table `fix_date_projects` */

DROP TABLE IF EXISTS `fix_date_projects`;

CREATE TABLE `fix_date_projects` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `project_id` int(11) NOT NULL,
  `sub_project_id` int(11) NOT NULL,
  `rel_project_id` int(11) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=63 DEFAULT CHARSET=latin1;

/*Data for the table `fix_date_projects` */

insert  into `fix_date_projects`(`id`,`project_id`,`sub_project_id`,`rel_project_id`,`start_date`,`end_date`) values (1,21,0,0,'2016-11-01','2016-11-30'),(2,21,0,0,'2017-01-01','2017-01-31'),(3,21,0,0,'2017-03-01','2017-03-31'),(4,21,0,0,'2017-05-01','2017-05-31'),(5,21,0,0,'2017-09-01','2017-09-30'),(6,21,0,0,'2017-11-01','2017-11-30'),(7,21,0,0,'2016-09-01','2016-09-30'),(8,21,0,0,'2017-07-01','2017-07-31'),(9,5,25,15,'2017-06-11','2017-06-24'),(10,5,25,15,'2017-07-02','2017-07-15'),(11,5,25,15,'2017-07-16','2017-07-29'),(12,5,26,15,'2017-06-11','2017-06-24'),(13,5,26,15,'2017-07-02','2017-07-15'),(14,5,26,15,'2017-07-16','2017-07-29'),(15,5,28,17,'2017-06-11','2017-06-24'),(16,5,28,17,'2017-07-02','2017-07-15'),(17,5,28,17,'2017-07-16','2017-07-29'),(18,5,29,17,'2017-06-11','2017-06-24'),(19,5,29,17,'2017-07-02','2017-07-15'),(20,5,29,17,'2017-07-16','2017-07-29'),(21,5,4,23,'2017-07-02','2017-07-15'),(22,5,4,23,'2017-07-16','2017-07-29'),(23,5,30,23,'2017-07-02','2017-07-15'),(24,5,30,23,'2017-07-16','2017-07-29'),(25,5,27,22,'2017-07-09','2017-07-22'),(26,5,27,22,'2017-08-06','2017-08-19'),(27,6,31,15,'2017-02-26','2017-03-04'),(28,6,31,15,'2017-03-05','2017-03-11'),(29,6,31,15,'2017-03-12','2017-03-18'),(30,6,31,15,'2018-02-25','2018-03-03'),(31,6,31,15,'2018-03-04','2018-03-10'),(32,6,31,15,'2018-03-11','2018-03-17'),(33,6,32,15,'2017-02-26','2017-03-04'),(34,6,32,15,'2017-03-05','2017-03-11'),(35,6,32,15,'2017-03-12','2017-03-18'),(36,6,32,15,'2018-02-25','2018-03-03'),(37,6,32,15,'2018-03-04','2018-03-10'),(38,6,32,15,'2018-03-11','2018-03-17'),(39,6,220,17,'2017-02-26','2017-03-04'),(40,6,220,17,'2017-03-05','2017-03-11'),(41,6,220,17,'2017-03-12','2017-03-18'),(42,6,220,17,'2018-02-25','2018-03-03'),(43,6,220,17,'2018-03-04','2018-03-10'),(44,6,220,17,'2018-03-11','2018-03-17'),(45,6,221,17,'2017-02-26','2017-03-04'),(46,6,221,17,'2017-03-05','2017-03-11'),(47,6,221,17,'2017-03-12','2017-03-18'),(48,6,221,17,'2018-02-25','2018-03-03'),(49,6,221,17,'2018-03-04','2018-03-10'),(50,6,221,17,'2018-03-11','2018-03-17'),(51,6,219,23,'2017-02-26','2017-03-04'),(52,6,219,23,'2017-03-05','2017-03-11'),(53,6,219,23,'2017-03-12','2017-03-18'),(54,6,219,23,'2018-02-25','2018-03-03'),(55,6,219,23,'2018-03-04','2018-03-10'),(56,6,219,23,'2018-03-11','2018-03-17'),(57,6,222,23,'2017-02-26','2017-03-04'),(58,6,222,23,'2017-03-05','2017-03-11'),(59,6,222,23,'2017-03-12','2017-03-18'),(60,6,222,23,'2018-02-25','2018-03-03'),(61,6,222,23,'2018-03-04','2018-03-10'),(62,6,222,23,'2018-03-11','2018-03-17');

/*Table structure for table `guardian` */

DROP TABLE IF EXISTS `guardian`;

CREATE TABLE `guardian` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title_id` int(11) NOT NULL,
  `firstname` varchar(45) NOT NULL,
  `middlename` varchar(45) DEFAULT NULL,
  `lastname` varchar(45) DEFAULT NULL,
  `alias` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `phone` varchar(45) DEFAULT NULL COMMENT 'mobile number',
  `relationship_type_id` int(11) NOT NULL,
  `identification_type_id` int(11) DEFAULT NULL,
  `identification_number` varchar(20) DEFAULT NULL,
  `volunteer_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_relationship_idx` (`relationship_type_id`),
  KEY `fk_volunteer_idx` (`volunteer_id`),
  CONSTRAINT `fk_relationship` FOREIGN KEY (`relationship_type_id`) REFERENCES `relationship_type` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_volunteer` FOREIGN KEY (`volunteer_id`) REFERENCES `account` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

/*Data for the table `guardian` */

insert  into `guardian`(`id`,`title_id`,`firstname`,`middlename`,`lastname`,`alias`,`email`,`phone`,`relationship_type_id`,`identification_type_id`,`identification_number`,`volunteer_id`) values (10,1,'Dolly','Maud','Barrett',NULL,'bridgettebarrett@radarconsultingservices.com','8768682459',1,NULL,NULL,100020),(11,3,'Donna','','Barrett',NULL,'bridgette_barrett@yahoo.com','8768682459',1,NULL,NULL,100021),(12,2,'Shelly-Ann','','Cummings',NULL,'rsvpcaribbean@yahoo.com','8768682459',4,NULL,NULL,100022),(13,1,'John','','Rogers',NULL,'cflijamaica@yahoo.com','8762237812',2,NULL,NULL,100023),(14,1,'Beryl','','Harris',NULL,'brandaidja@gmail.com','8769334681',5,NULL,NULL,100024),(15,1,'Roy','','Smith',NULL,'bridgette_barrett@yahoo.com','8768682459',3,NULL,NULL,100025),(18,3,'Camile','','Barrett',NULL,'barrettcamile@yahoo.com','8768682459',1,NULL,NULL,100028),(19,1,'Raymond','','Nelson',NULL,'info@rsvpcaribbean.com','8765711982',2,NULL,NULL,100029),(20,1,'Anthony','','Brown',NULL,'admin@rsvpcaribbean.com','9542441789',2,NULL,NULL,100031),(21,1,'Dwayne','','Harris',NULL,'envdesigns@gmail.com','87693344681',2,NULL,NULL,100032),(22,1,'Donna','','Bent',NULL,'abarrettjames@yahoo.com','8762229999',1,NULL,NULL,100033),(23,1,'Akeil','Mark-Anthony','Ayers',NULL,'amathink@hotmail.com','18687773183',7,NULL,NULL,100034),(24,1,'Bevington','Anthony','Barrett',NULL,'bevin.barrett@yahoo.com','18768371215',8,NULL,NULL,100035);

/*Table structure for table `heard_about` */

DROP TABLE IF EXISTS `heard_about`;

CREATE TABLE `heard_about` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

/*Data for the table `heard_about` */

insert  into `heard_about`(`id`,`name`) values (1,'Google'),(2,'Yahoo'),(3,'Facebook'),(4,'Twitter'),(5,'Instagram'),(6,'YouTube'),(7,'Television'),(8,'Promotional flyer'),(9,'Newspaper/Magazine'),(10,'University/College'),(11,'Other');

/*Table structure for table `identification_type` */

DROP TABLE IF EXISTS `identification_type`;

CREATE TABLE `identification_type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

/*Data for the table `identification_type` */

insert  into `identification_type`(`id`,`name`) values (1,'Passport'),(2,'Identity Card'),(3,'Driver License');

/*Table structure for table `institution_type` */

DROP TABLE IF EXISTS `institution_type`;

CREATE TABLE `institution_type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  PRIMARY KEY (`id`,`name`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

/*Data for the table `institution_type` */

insert  into `institution_type`(`id`,`name`) values (1,'Orphanage'),(2,'Children home'),(3,'Day care centre'),(4,'Kindergarten'),(5,'Retirement home'),(6,'Rehabilitation centre'),(7,'Care school'),(8,'Other');

/*Table structure for table `insurance` */

DROP TABLE IF EXISTS `insurance`;

CREATE TABLE `insurance` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `account_id` int(11) NOT NULL,
  `company` varchar(100) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `email` varchar(45) NOT NULL,
  `policy_number` varchar(45) NOT NULL,
  `other_information` mediumtext,
  `date_added` datetime NOT NULL,
  `updated_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_insur_acct_idx` (`account_id`),
  CONSTRAINT `fk_insur_acct` FOREIGN KEY (`account_id`) REFERENCES `account` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

/*Data for the table `insurance` */

insert  into `insurance`(`id`,`account_id`,`company`,`phone`,`email`,`policy_number`,`other_information`,`date_added`,`updated_by`) values (6,100020,'World Nomads','+44 210 083 990','support@worldnomads.com','NR9019870','Travel and medical insurance fully covered, information should be completed online.','2016-07-20 20:04:58',100001);

/*Table structure for table `invoice` */

DROP TABLE IF EXISTS `invoice`;

CREATE TABLE `invoice` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `volunteer_id` int(11) NOT NULL,
  `price` decimal(10,2) NOT NULL DEFAULT '0.00',
  `description` tinytext NOT NULL,
  `date` datetime NOT NULL,
  `date_modified` datetime NOT NULL,
  `exported` datetime DEFAULT NULL,
  `date_added` datetime NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

/*Data for the table `invoice` */

insert  into `invoice`(`id`,`volunteer_id`,`price`,`description`,`date`,`date_modified`,`exported`,`date_added`,`user_id`) values (17,100020,'2900.00','Child Care and Protection Programme','2016-09-13 00:00:00','2016-09-13 11:46:16','2016-09-13 11:49:32','2016-09-13 11:46:16',100001);

/*Table structure for table `invoice_payments` */

DROP TABLE IF EXISTS `invoice_payments`;

CREATE TABLE `invoice_payments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `invoice_id` int(11) NOT NULL,
  `amount` decimal(10,2) NOT NULL DEFAULT '0.00',
  `date` datetime NOT NULL,
  `date_added` datetime NOT NULL,
  `date_modified` datetime DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_invoice_pay_idx` (`invoice_id`),
  CONSTRAINT `fk_invoice_pay` FOREIGN KEY (`invoice_id`) REFERENCES `invoice` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

/*Data for the table `invoice_payments` */

insert  into `invoice_payments`(`id`,`invoice_id`,`amount`,`date`,`date_added`,`date_modified`,`user_id`) values (9,17,'300.00','2016-09-13 00:00:00','2016-09-13 11:46:32','2016-09-13 11:46:32',100001),(10,17,'500.00','2016-09-13 00:00:00','2016-09-13 11:48:21','2016-09-13 11:48:21',100001);

/*Table structure for table `lessons_add_on` */

DROP TABLE IF EXISTS `lessons_add_on`;

CREATE TABLE `lessons_add_on` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `lessons` varchar(45) NOT NULL,
  `start_date` datetime NOT NULL,
  `end_date` datetime NOT NULL,
  `duration` varchar(255) DEFAULT NULL,
  `staff_notes` mediumtext,
  `volunteer_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_lesson_acc_idx` (`volunteer_id`),
  CONSTRAINT `fk_lesson_acc` FOREIGN KEY (`volunteer_id`) REFERENCES `account` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `lessons_add_on` */

insert  into `lessons_add_on`(`id`,`lessons`,`start_date`,`end_date`,`duration`,`staff_notes`,`volunteer_id`) values (4,'English Lesson','2016-07-27 00:00:00','2016-07-31 00:00:00',NULL,NULL,100032),(5,'English Lesson','2017-03-01 00:00:00','2017-04-30 00:00:00',NULL,NULL,100035);

/*Table structure for table `market_exec_summary` */

DROP TABLE IF EXISTS `market_exec_summary`;

CREATE TABLE `market_exec_summary` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `volunteer_id` int(11) NOT NULL,
  `note` varchar(45) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_marke_vol_idx` (`volunteer_id`),
  CONSTRAINT `fk_marke_vol` FOREIGN KEY (`volunteer_id`) REFERENCES `account` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `market_exec_summary` */

/*Table structure for table `marketing_sales` */

DROP TABLE IF EXISTS `marketing_sales`;

CREATE TABLE `marketing_sales` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `number_of_prospect` double NOT NULL DEFAULT '0',
  `number_of_quotes` double NOT NULL DEFAULT '0',
  `quote_conversion_rate` double NOT NULL DEFAULT '0',
  `number_of_customer` double NOT NULL DEFAULT '0',
  `sales_conversion_rate` double NOT NULL DEFAULT '0',
  `total_sales` double NOT NULL DEFAULT '0',
  `average_sale` double NOT NULL DEFAULT '0',
  `date_added` datetime DEFAULT NULL,
  `date_updated` datetime DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

/*Data for the table `marketing_sales` */

insert  into `marketing_sales`(`id`,`number_of_prospect`,`number_of_quotes`,`quote_conversion_rate`,`number_of_customer`,`sales_conversion_rate`,`total_sales`,`average_sale`,`date_added`,`date_updated`,`user_id`) values (11,2,3,44,5,66,777777,454545,'2016-10-10 20:08:37','2016-10-10 20:35:55',100000),(12,2,3,44,5,66,777777,454545,'2016-10-10 20:09:14','2016-10-10 20:34:59',100000),(13,3,3,3,3,40,100,23000,'2016-10-10 20:10:24','2016-10-10 20:21:10',100000),(14,2,3,3,33,33,3,3,'2016-10-10 20:21:22','2016-10-10 20:21:22',100000);

/*Table structure for table `newsletter` */

DROP TABLE IF EXISTS `newsletter`;

CREATE TABLE `newsletter` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `newsletter` varchar(45) NOT NULL,
  `content` mediumtext,
  `country_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `date_added` datetime NOT NULL,
  `added_by_user` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

/*Data for the table `newsletter` */

insert  into `newsletter`(`id`,`newsletter`,`content`,`country_id`,`date`,`date_added`,`added_by_user`) values (11,'newsletter-20160617-77657.pdf',NULL,106,'2016-06-17','2016-06-17 12:07:24',100001);

/*Table structure for table `newsletter_email` */

DROP TABLE IF EXISTS `newsletter_email`;

CREATE TABLE `newsletter_email` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` tinytext,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

/*Data for the table `newsletter_email` */

insert  into `newsletter_email`(`id`,`email`) values (1,'bridgettebarrett@yahoo.com'),(2,'sfgdfg@fghdfgdfg.vom'),(3,'sophia.jackson@education.tas.gov.au'),(4,'bridgette_barrett@yahoo.com'),(5,'bridgette_barrett@yahoo.com'),(6,'morgann475@gmail.com'),(7,'morgann475@gmail.com');

/*Table structure for table `note` */

DROP TABLE IF EXISTS `note`;

CREATE TABLE `note` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `volunteer_id` int(11) NOT NULL,
  `note` blob NOT NULL,
  `note_category_id` tinytext,
  `file_name` varchar(255) DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `updated_by` int(11) NOT NULL,
  `date_updated` datetime NOT NULL,
  `date_added` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=latin1;

/*Data for the table `note` */

insert  into `note`(`id`,`volunteer_id`,`note`,`note_category_id`,`file_name`,`user_id`,`updated_by`,`date_updated`,`date_added`) values (1,100020,'Volunteer accepted','1',NULL,100001,100001,'2016-07-14 18:01:31','2016-07-14 18:01:31'),(2,100020,'Email acceptance sent','1',NULL,100001,100001,'2016-07-14 18:01:53','2016-07-14 18:01:53'),(3,100020,'Call from Parent\r\n___________________\r\n\r\nMom called to find out about safety and support. The procedure was outlined from arrival to departure but it was emphasized that safety tips should be followed.','1',NULL,100001,100001,'2016-07-14 18:09:00','2016-07-14 18:07:33'),(4,100020,'Arrival\r\n________________\r\n\r\nVolunteer arrived safely and was taken to her host family but she did not get her luggage.','2',NULL,100001,100001,'2016-07-14 18:10:20','2016-07-14 18:10:20'),(5,100020,'Luggage Delivered\r\n___________________\r\n\r\nAirline delivered luggage at host family, all contents were intact.','2',NULL,100001,100001,'2016-07-14 18:11:03','2016-07-14 18:11:03'),(6,100020,'Call from Host Mom\r\n______________________\r\n\r\nHost mom called to say volunteer did not come home until 6am.','3',NULL,100001,100001,'2016-07-14 18:11:51','2016-07-14 18:11:51'),(7,100020,'Reggae Dance Class\r\n_______________________\r\n\r\nVolunteer attended dance class and participated.','5',NULL,100001,100001,'2016-07-14 18:12:37','2016-07-14 18:12:37'),(8,100002,'Weekly Visit\r\n________________\r\n\r\nVisited volunteer on July 14, 2016. She was working with the children in the computer room. She reported no issues and said she was having a good time.','6',NULL,100001,100001,'2016-07-14 18:13:52','2016-07-14 18:13:52'),(9,100020,'Weekly Visit\r\n________________\r\n\r\nVisited volunteer on July 14, 2016. She was working with the children in the computer room. She reported no issues and said she was having a good time.','6',NULL,100001,100001,'2016-07-14 18:13:52','2016-07-14 18:13:52'),(10,100021,'Weekly Visit\r\n________________\r\n\r\nVisited volunteer on July 14, 2016. She was working with the children in the computer room. She reported no issues and said she was having a good time. And there','6',NULL,100001,100001,'2016-07-20 20:31:16','2016-07-14 18:13:52'),(11,100022,'Weekly Visit\r\n________________\r\n\r\nVisited volunteer on July 14, 2016. She was working with the children in the computer room. She reported no issues and said she was having a good time.','6',NULL,100001,100001,'2016-07-14 18:13:52','2016-07-14 18:13:52'),(12,100023,'Weekly Visit\r\n________________\r\n\r\nVisited volunteer on July 14, 2016. She was working with the children in the computer room. She reported no issues and said she was having a good time.','6',NULL,100001,100001,'2016-07-14 18:13:52','2016-07-14 18:13:52'),(13,100024,'Weekly Visit\r\n________________\r\n\r\nVisited volunteer on July 14, 2016. She was working with the children in the computer room. She reported no issues and said she was having a good time.','6',NULL,100001,100001,'2016-07-14 18:13:52','2016-07-14 18:13:52'),(14,100025,'Weekly Visit\r\n________________\r\n\r\nVisited volunteer on July 14, 2016. She was working with the children in the computer room. She reported no issues and said she was having a good time.','6',NULL,100001,100001,'2016-07-14 18:13:52','2016-07-14 18:13:52'),(15,100020,'Back to School Information Provided','6','20160714-851800195.jpg',100001,100001,'2016-07-14 18:14:59','2016-07-14 18:14:59'),(16,100020,'Calendar',NULL,'20160714-1131261210.xls',100001,100001,'2016-07-14 18:16:05','2016-07-14 18:16:05'),(17,100020,'Vacancy',NULL,'20160714-754891301.docx',100001,100001,'2016-07-14 18:17:23','2016-07-14 18:17:23'),(18,100020,'PDF',NULL,'20160714-626712664.pdf',100001,100001,'2016-07-14 18:19:02','2016-07-14 18:19:02'),(19,100020,'Mobile test and further test','1',NULL,100001,100001,'2016-07-20 20:32:48','2016-07-14 19:26:56'),(20,100028,'Volunteer accepted\r\n_______________________\r\n\r\nAwaiting internship form',NULL,NULL,100001,100001,'2016-07-16 18:18:41','2016-07-16 18:18:41'),(21,100002,'Duplication test','3',NULL,100001,100001,'2016-07-20 20:21:32','2016-07-20 20:21:32'),(22,100020,'Duplication test','3',NULL,100001,100001,'2016-07-20 20:21:32','2016-07-20 20:21:32'),(23,100021,'Duplication test','3',NULL,100001,100001,'2016-07-20 20:21:32','2016-07-20 20:21:32'),(24,100022,'Duplication test','3',NULL,100001,100001,'2016-07-20 20:21:32','2016-07-20 20:21:32'),(25,100023,'Duplication test','3',NULL,100001,100001,'2016-07-20 20:21:32','2016-07-20 20:21:32'),(26,100024,'Duplication test','3',NULL,100001,100001,'2016-07-20 20:21:32','2016-07-20 20:21:32'),(27,100025,'Duplication test','3',NULL,100001,100001,'2016-07-20 20:21:32','2016-07-20 20:21:32'),(28,100028,'Duplication test','3',NULL,100001,100001,'2016-07-20 20:21:32','2016-07-20 20:21:32'),(29,100029,'Duplication test','3',NULL,100001,100001,'2016-07-20 20:21:32','2016-07-20 20:21:32'),(30,100031,'Duplication test','3',NULL,100001,100001,'2016-07-20 20:21:32','2016-07-20 20:21:32'),(31,100032,'Duplication test','3',NULL,100001,100001,'2016-07-20 20:21:32','2016-07-20 20:21:32'),(32,100033,'Duplication test','3',NULL,100001,100001,'2016-07-20 20:21:32','2016-07-20 20:21:32'),(33,100034,'*Email Sent - Acknowledging Application*\r\n_________________________________________\r\nHello Catherine,\r\n\r\nOur apologies for the delay in getting back to you this was due to circumstances beyond our control.\r\n\r\nThank you submitting an application to volunteer with RSVP Caribbean Volunteers. I will give you a call on Monday, September 23, 2016 to discuss your application.\r\n\r\nHave a fantastic weekend.\r\n\r\nRegards','1',NULL,100001,100001,'2016-09-27 08:06:06','2016-09-27 08:06:06'),(34,100034,'Call Made to Discuss Application\r\n_______________________________\r\n\r\nCall made on September 26, 216 to Catherine to discuss application. She said she was unable to talk at that time. We rescheduled for September 27, 2016 at 9am.',NULL,NULL,100001,100001,'2016-09-27 08:07:20','2016-09-27 08:07:20'),(35,100034,'Follow Up Call Made to Discuss Application\r\n__________________________________________\r\n\r\nCalled Catherine as per discussion, no answer, left message, will try again.',NULL,NULL,100001,100001,'2016-09-27 08:08:12','2016-09-27 08:08:12');

/*Table structure for table `note_category` */

DROP TABLE IF EXISTS `note_category`;

CREATE TABLE `note_category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

/*Data for the table `note_category` */

insert  into `note_category`(`id`,`name`) values (1,'Administration - Pre-Arrival'),(2,'Administration - In-Country'),(3,'Host Family'),(4,'Travel'),(5,'Social and Cultural Events'),(6,'Programme/Project'),(7,'Post-Programme/Project'),(8,'Other In-Country Matters');

/*Table structure for table `note_phrase` */

DROP TABLE IF EXISTS `note_phrase`;

CREATE TABLE `note_phrase` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `body` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8;

/*Data for the table `note_phrase` */

insert  into `note_phrase`(`id`,`body`) values (1,'Volunteer accepted'),(2,'Email acceptance sent'),(3,'Welcome Call'),(4,'Formal Welcome and Acceptance Letter'),(5,'Invoice Done'),(6,'RSVP Webpage Information Sent'),(7,'1 st Pre-Departure Email Sent'),(8,'Travel and Medical Insurance Details Requested'),(9,'Curriculum Vitae Requested'),(10,'Medical Report Requested'),(11,'Criminal Record Check Requested'),(12,'Travel and Medical Insurance Details Received'),(13,'Curriculum Vitae Received'),(14,'Medical Report Received'),(15,'Criminal Record Check Received'),(16,'Work Permit Exemption Information Sent'),(17,'Visa Information Sent'),(18,'Flight Details Requested'),(19,'Flight Details Received'),(20,'Telephone Call #2'),(21,'Accommodation Details Sent'),(22,'Programme/Project Detail Sent'),(23,'Driver Detail Sent'),(24,'Telephone Call #3'),(25,'Last Phone Call'),(26,'Balance reminder #1'),(27,'Balance reminder #1'),(28,'Final balance reminder'),(29,'Induction Completed');

/*Table structure for table `notice_board` */

DROP TABLE IF EXISTS `notice_board`;

CREATE TABLE `notice_board` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `info` mediumtext NOT NULL,
  `user_id` int(11) NOT NULL,
  `date_added` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

/*Data for the table `notice_board` */

insert  into `notice_board`(`id`,`info`,`user_id`,`date_added`) values (1,'We have a new staff - welcome our Human Resources Manager',100001,'2016-07-14 17:58:34'),(2,'Our Marketing Executive - Debbie Bailey starts on August 1, 2016, we are excited to have her on the team.',100001,'2016-07-19 15:32:25'),(3,'Our Marketing Executive - Glendon Baker starts on August 1, 2016, welcome!',100001,'2016-07-28 21:40:11'),(4,'Carissa Reid has joined the team for 4 weeks as an intern - happy to have you!',100001,'2016-07-28 21:40:54');

/*Table structure for table `obd_county_zone` */

DROP TABLE IF EXISTS `obd_county_zone`;

CREATE TABLE `obd_county_zone` (
  `zone_id` int(11) NOT NULL AUTO_INCREMENT,
  `country_id` int(11) NOT NULL DEFAULT '0',
  `code` varchar(32) NOT NULL,
  `name` varchar(32) NOT NULL,
  PRIMARY KEY (`zone_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3842 DEFAULT CHARSET=latin1;

/*Data for the table `obd_county_zone` */

insert  into `obd_county_zone`(`zone_id`,`country_id`,`code`,`name`) values (1,1,'BDS','Badakhshan'),(2,1,'BDG','Badghis'),(3,1,'BGL','Baghlan'),(4,1,'BAL','Balkh'),(5,1,'BAM','Bamian'),(6,1,'FRA','Farah'),(7,1,'FYB','Faryab'),(8,1,'GHA','Ghazni'),(9,1,'GHO','Ghowr'),(10,1,'HEL','Helmand'),(11,1,'HER','Herat'),(12,1,'JOW','Jowzjan'),(13,1,'KAB','Kabul'),(14,1,'KAN','Kandahar'),(15,1,'KAP','Kapisa'),(16,1,'KHO','Khost'),(17,1,'KNR','Konar'),(18,1,'KDZ','Kondoz'),(19,1,'LAG','Laghman'),(20,1,'LOW','Lowgar'),(21,1,'NAN','Nangrahar'),(22,1,'NIM','Nimruz'),(23,1,'NUR','Nurestan'),(24,1,'ORU','Oruzgan'),(25,1,'PIA','Paktia'),(26,1,'PKA','Paktika'),(27,1,'PAR','Parwan'),(28,1,'SAM','Samangan'),(29,1,'SAR','Sar-e Pol'),(30,1,'TAK','Takhar'),(31,1,'WAR','Wardak'),(32,1,'ZAB','Zabol'),(33,2,'BR','Berat'),(34,2,'BU','Bulqize'),(35,2,'DL','Delvine'),(36,2,'DV','Devoll'),(37,2,'DI','Diber'),(38,2,'DR','Durres'),(39,2,'EL','Elbasan'),(40,2,'ER','Kolonje'),(41,2,'FR','Fier'),(42,2,'GJ','Gjirokaster'),(43,2,'GR','Gramsh'),(44,2,'HA','Has'),(45,2,'KA','Kavaje'),(46,2,'KB','Kurbin'),(47,2,'KC','Kucove'),(48,2,'KO','Korce'),(49,2,'KR','Kruje'),(50,2,'KU','Kukes'),(51,2,'LB','Librazhd'),(52,2,'LE','Lezhe'),(53,2,'LU','Lushnje'),(54,2,'MM','Malesi e Madhe'),(55,2,'MK','Mallakaster'),(56,2,'MT','Mat'),(57,2,'MR','Mirdite'),(58,2,'PQ','Peqin'),(59,2,'PR','Permet'),(60,2,'PG','Pogradec'),(61,2,'PU','Puke'),(62,2,'SH','Shkoder'),(63,2,'SK','Skrapar'),(64,2,'SR','Sarande'),(65,2,'TE','Tepelene'),(66,2,'TP','Tropoje'),(67,2,'TR','Tirane'),(68,2,'VL','Vlore'),(69,3,'ADR','Adrar'),(70,3,'ADE','Ain Defla'),(71,3,'ATE','Ain Temouchent'),(72,3,'ALG','Alger'),(73,3,'ANN','Annaba'),(74,3,'BAT','Batna'),(75,3,'BEC','Bechar'),(76,3,'BEJ','Bejaia'),(77,3,'BIS','Biskra'),(78,3,'BLI','Blida'),(79,3,'BBA','Bordj Bou Arreridj'),(80,3,'BOA','Bouira'),(81,3,'BMD','Boumerdes'),(82,3,'CHL','Chlef'),(83,3,'CON','Constantine'),(84,3,'DJE','Djelfa'),(85,3,'EBA','El Bayadh'),(86,3,'EOU','El Oued'),(87,3,'ETA','El Tarf'),(88,3,'GHA','Ghardaia'),(89,3,'GUE','Guelma'),(90,3,'ILL','Illizi'),(91,3,'JIJ','Jijel'),(92,3,'KHE','Khenchela'),(93,3,'LAG','Laghouat'),(94,3,'MUA','Muaskar'),(95,3,'MED','Medea'),(96,3,'MIL','Mila'),(97,3,'MOS','Mostaganem'),(98,3,'MSI','M\'Sila'),(99,3,'NAA','Naama'),(100,3,'ORA','Oran'),(101,3,'OUA','Ouargla'),(102,3,'OEB','Oum el-Bouaghi'),(103,3,'REL','Relizane'),(104,3,'SAI','Saida'),(105,3,'SET','Setif'),(106,3,'SBA','Sidi Bel Abbes'),(107,3,'SKI','Skikda'),(108,3,'SAH','Souk Ahras'),(109,3,'TAM','Tamanghasset'),(110,3,'TEB','Tebessa'),(111,3,'TIA','Tiaret'),(112,3,'TIN','Tindouf'),(113,3,'TIP','Tipaza'),(114,3,'TIS','Tissemsilt'),(115,3,'TOU','Tizi Ouzou'),(116,3,'TLE','Tlemcen'),(117,4,'E','Eastern'),(118,4,'M','Manu\'a'),(119,4,'R','Rose Island'),(120,4,'S','Swains Island'),(121,4,'W','Western'),(122,5,'ALV','Andorra la Vella'),(123,5,'CAN','Canillo'),(124,5,'ENC','Encamp'),(125,5,'ESE','Escaldes-Engordany'),(126,5,'LMA','La Massana'),(127,5,'ORD','Ordino'),(128,5,'SJL','Sant Julia de Loria'),(129,6,'BGO','Bengo'),(130,6,'BGU','Benguela'),(131,6,'BIE','Bie'),(132,6,'CAB','Cabinda'),(133,6,'CCU','Cuando-Cubango'),(134,6,'CNO','Cuanza Norte'),(135,6,'CUS','Cuanza Sul'),(136,6,'CNN','Cunene'),(137,6,'HUA','Huambo'),(138,6,'HUI','Huila'),(139,6,'LUA','Luanda'),(140,6,'LNO','Lunda Norte'),(141,6,'LSU','Lunda Sul'),(142,6,'MAL','Malange'),(143,6,'MOX','Moxico'),(144,6,'NAM','Namibe'),(145,6,'UIG','Uige'),(146,6,'ZAI','Zaire'),(147,9,'ASG','Saint George'),(148,9,'ASJ','Saint John'),(149,9,'ASM','Saint Mary'),(150,9,'ASL','Saint Paul'),(151,9,'ASR','Saint Peter'),(152,9,'ASH','Saint Philip'),(153,9,'BAR','Barbuda'),(154,9,'RED','Redonda'),(155,10,'AN','Antartida e Islas del Atlantico'),(156,10,'BA','Buenos Aires'),(157,10,'CA','Catamarca'),(158,10,'CH','Chaco'),(159,10,'CU','Chubut'),(160,10,'CO','Cordoba'),(161,10,'CR','Corrientes'),(162,10,'DF','Distrito Federal'),(163,10,'ER','Entre Rios'),(164,10,'FO','Formosa'),(165,10,'JU','Jujuy'),(166,10,'LP','La Pampa'),(167,10,'LR','La Rioja'),(168,10,'ME','Mendoza'),(169,10,'MI','Misiones'),(170,10,'NE','Neuquen'),(171,10,'RN','Rio Negro'),(172,10,'SA','Salta'),(173,10,'SJ','San Juan'),(174,10,'SL','San Luis'),(175,10,'SC','Santa Cruz'),(176,10,'SF','Santa Fe'),(177,10,'SD','Santiago del Estero'),(178,10,'TF','Tierra del Fuego'),(179,10,'TU','Tucuman'),(180,11,'AGT','Aragatsotn'),(181,11,'ARR','Ararat'),(182,11,'ARM','Armavir'),(183,11,'GEG','Geghark\'unik\''),(184,11,'KOT','Kotayk\''),(185,11,'LOR','Lorri'),(186,11,'SHI','Shirak'),(187,11,'SYU','Syunik\''),(188,11,'TAV','Tavush'),(189,11,'VAY','Vayots\' Dzor'),(190,11,'YER','Yerevan'),(191,13,'ACT','Australian Capital Territory'),(192,13,'NSW','New South Wales'),(193,13,'NT','Northern Territory'),(194,13,'QLD','Queensland'),(195,13,'SA','South Australia'),(196,13,'TAS','Tasmania'),(197,13,'VIC','Victoria'),(198,13,'WA','Western Australia'),(199,14,'BUR','Burgenland'),(200,14,'KAR','KÃƒÆ’Ã‚Â¤rnten'),(201,14,'NOS','NiederÃƒÆ’Ã‚Â¶sterreich'),(202,14,'OOS','OberÃƒÆ’Ã‚Â¶sterreich'),(203,14,'SAL','Salzburg'),(204,14,'STE','Steiermark'),(205,14,'TIR','Tirol'),(206,14,'VOR','Vorarlberg'),(207,14,'WIE','Wien'),(208,15,'AB','Ali Bayramli'),(209,15,'ABS','Abseron'),(210,15,'AGC','AgcabAdi'),(211,15,'AGM','Agdam'),(212,15,'AGS','Agdas'),(213,15,'AGA','Agstafa'),(214,15,'AGU','Agsu'),(215,15,'AST','Astara'),(216,15,'BA','Baki'),(217,15,'BAB','BabAk'),(218,15,'BAL','BalakAn'),(219,15,'BAR','BArdA'),(220,15,'BEY','Beylaqan'),(221,15,'BIL','Bilasuvar'),(222,15,'CAB','Cabrayil'),(223,15,'CAL','Calilabab'),(224,15,'CUL','Culfa'),(225,15,'DAS','Daskasan'),(226,15,'DAV','Davaci'),(227,15,'FUZ','Fuzuli'),(228,15,'GA','Ganca'),(229,15,'GAD','Gadabay'),(230,15,'GOR','Goranboy'),(231,15,'GOY','Goycay'),(232,15,'HAC','Haciqabul'),(233,15,'IMI','Imisli'),(234,15,'ISM','Ismayilli'),(235,15,'KAL','Kalbacar'),(236,15,'KUR','Kurdamir'),(237,15,'LA','Lankaran'),(238,15,'LAC','Lacin'),(239,15,'LAN','Lankaran'),(240,15,'LER','Lerik'),(241,15,'MAS','Masalli'),(242,15,'MI','Mingacevir'),(243,15,'NA','Naftalan'),(244,15,'NEF','Neftcala'),(245,15,'OGU','Oguz'),(246,15,'ORD','Ordubad'),(247,15,'QAB','Qabala'),(248,15,'QAX','Qax'),(249,15,'QAZ','Qazax'),(250,15,'QOB','Qobustan'),(251,15,'QBA','Quba'),(252,15,'QBI','Qubadli'),(253,15,'QUS','Qusar'),(254,15,'SA','Saki'),(255,15,'SAT','Saatli'),(256,15,'SAB','Sabirabad'),(257,15,'SAD','Sadarak'),(258,15,'SAH','Sahbuz'),(259,15,'SAK','Saki'),(260,15,'SAL','Salyan'),(261,15,'SM','Sumqayit'),(262,15,'SMI','Samaxi'),(263,15,'SKR','Samkir'),(264,15,'SMX','Samux'),(265,15,'SAR','Sarur'),(266,15,'SIY','Siyazan'),(267,15,'SS','Susa'),(268,15,'SUS','Susa'),(269,15,'TAR','Tartar'),(270,15,'TOV','Tovuz'),(271,15,'UCA','Ucar'),(272,15,'XA','Xankandi'),(273,15,'XAC','Xacmaz'),(274,15,'XAN','Xanlar'),(275,15,'XIZ','Xizi'),(276,15,'XCI','Xocali'),(277,15,'XVD','Xocavand'),(278,15,'YAR','Yardimli'),(279,15,'YEV','Yevlax'),(280,15,'ZAN','Zangilan'),(281,15,'ZAQ','Zaqatala'),(282,15,'ZAR','Zardab'),(283,15,'NX','Naxcivan'),(284,16,'ACK','Acklins'),(285,16,'BER','Berry Islands'),(286,16,'BIM','Bimini'),(287,16,'BLK','Black Point'),(288,16,'CAT','Cat Island'),(289,16,'CAB','Central Abaco'),(290,16,'CAN','Central Andros'),(291,16,'CEL','Central Eleuthera'),(292,16,'FRE','City of Freeport'),(293,16,'CRO','Crooked Island'),(294,16,'EGB','East Grand Bahama'),(295,16,'EXU','Exuma'),(296,16,'GRD','Grand Cay'),(297,16,'HAR','Harbour Island'),(298,16,'HOP','Hope Town'),(299,16,'INA','Inagua'),(300,16,'LNG','Long Island'),(301,16,'MAN','Mangrove Cay'),(302,16,'MAY','Mayaguana'),(303,16,'MOO','Moore\'s Island'),(304,16,'NAB','North Abaco'),(305,16,'NAN','North Andros'),(306,16,'NEL','North Eleuthera'),(307,16,'RAG','Ragged Island'),(308,16,'RUM','Rum Cay'),(309,16,'SAL','San Salvador'),(310,16,'SAB','South Abaco'),(311,16,'SAN','South Andros'),(312,16,'SEL','South Eleuthera'),(313,16,'SWE','Spanish Wells'),(314,16,'WGB','West Grand Bahama'),(315,17,'CAP','Capital'),(316,17,'CEN','Central'),(317,17,'MUH','Muharraq'),(318,17,'NOR','Northern'),(319,17,'SOU','Southern'),(320,18,'BAR','Barisal'),(321,18,'CHI','Chittagong'),(322,18,'DHA','Dhaka'),(323,18,'KHU','Khulna'),(324,18,'RAJ','Rajshahi'),(325,18,'SYL','Sylhet'),(326,19,'CC','Christ Church'),(327,19,'AND','Saint Andrew'),(328,19,'GEO','Saint George'),(329,19,'JAM','Saint James'),(330,19,'JOH','Saint John'),(331,19,'JOS','Saint Joseph'),(332,19,'LUC','Saint Lucy'),(333,19,'MIC','Saint Michael'),(334,19,'PET','Saint Peter'),(335,19,'PHI','Saint Philip'),(336,19,'THO','Saint Thomas'),(337,20,'BR','Brestskaya (Brest)'),(338,20,'HO','Homyel\'skaya (Homyel\')'),(339,20,'HM','Horad Minsk'),(340,20,'HR','Hrodzyenskaya (Hrodna)'),(341,20,'MA','Mahilyowskaya (Mahilyow)'),(342,20,'MI','Minskaya'),(343,20,'VI','Vitsyebskaya (Vitsyebsk)'),(344,21,'VAN','Antwerpen'),(345,21,'WBR','Brabant Wallon'),(346,21,'WHT','Hainaut'),(347,21,'WLG','Liege'),(348,21,'VLI','Limburg'),(349,21,'WLX','Luxembourg'),(350,21,'WNA','Namur'),(351,21,'VOV','Oost-Vlaanderen'),(352,21,'VBR','Vlaams Brabant'),(353,21,'VWV','West-Vlaanderen'),(354,22,'BZ','Belize'),(355,22,'CY','Cayo'),(356,22,'CR','Corozal'),(357,22,'OW','Orange Walk'),(358,22,'SC','Stann Creek'),(359,22,'TO','Toledo'),(360,23,'AL','Alibori'),(361,23,'AK','Atakora'),(362,23,'AQ','Atlantique'),(363,23,'BO','Borgou'),(364,23,'CO','Collines'),(365,23,'DO','Donga'),(366,23,'KO','Kouffo'),(367,23,'LI','Littoral'),(368,23,'MO','Mono'),(369,23,'OU','Oueme'),(370,23,'PL','Plateau'),(371,23,'ZO','Zou'),(372,24,'DS','Devonshire'),(373,24,'HC','Hamilton City'),(374,24,'HA','Hamilton'),(375,24,'PG','Paget'),(376,24,'PB','Pembroke'),(377,24,'GC','Saint George City'),(378,24,'SG','Saint George\'s'),(379,24,'SA','Sandys'),(380,24,'SM','Smith\'s'),(381,24,'SH','Southampton'),(382,24,'WA','Warwick'),(383,25,'BUM','Bumthang'),(384,25,'CHU','Chukha'),(385,25,'DAG','Dagana'),(386,25,'GAS','Gasa'),(387,25,'HAA','Haa'),(388,25,'LHU','Lhuntse'),(389,25,'MON','Mongar'),(390,25,'PAR','Paro'),(391,25,'PEM','Pemagatshel'),(392,25,'PUN','Punakha'),(393,25,'SJO','Samdrup Jongkhar'),(394,25,'SAT','Samtse'),(395,25,'SAR','Sarpang'),(396,25,'THI','Thimphu'),(397,25,'TRG','Trashigang'),(398,25,'TRY','Trashiyangste'),(399,25,'TRO','Trongsa'),(400,25,'TSI','Tsirang'),(401,25,'WPH','Wangdue Phodrang'),(402,25,'ZHE','Zhemgang'),(403,26,'BEN','Beni'),(404,26,'CHU','Chuquisaca'),(405,26,'COC','Cochabamba'),(406,26,'LPZ','La Paz'),(407,26,'ORU','Oruro'),(408,26,'PAN','Pando'),(409,26,'POT','Potosi'),(410,26,'SCZ','Santa Cruz'),(411,26,'TAR','Tarija'),(412,27,'BRO','Brcko district'),(413,27,'FUS','Unsko-Sanski Kanton'),(414,27,'FPO','Posavski Kanton'),(415,27,'FTU','Tuzlanski Kanton'),(416,27,'FZE','Zenicko-Dobojski Kanton'),(417,27,'FBP','Bosanskopodrinjski Kanton'),(418,27,'FSB','Srednjebosanski Kanton'),(419,27,'FHN','Hercegovacko-neretvanski Kanton'),(420,27,'FZH','Zapadnohercegovacka Zupanija'),(421,27,'FSA','Kanton Sarajevo'),(422,27,'FZA','Zapadnobosanska'),(423,27,'SBL','Banja Luka'),(424,27,'SDO','Doboj'),(425,27,'SBI','Bijeljina'),(426,27,'SVL','Vlasenica'),(427,27,'SSR','Sarajevo-Romanija or Sokolac'),(428,27,'SFO','Foca'),(429,27,'STR','Trebinje'),(430,28,'CE','Central'),(431,28,'GH','Ghanzi'),(432,28,'KD','Kgalagadi'),(433,28,'KT','Kgatleng'),(434,28,'KW','Kweneng'),(435,28,'NG','Ngamiland'),(436,28,'NE','North East'),(437,28,'NW','North West'),(438,28,'SE','South East'),(439,28,'SO','Southern'),(440,30,'AC','Acre'),(441,30,'AL','Alagoas'),(442,30,'AP','Amapa'),(443,30,'AM','Amazonas'),(444,30,'BA','Bahia'),(445,30,'CE','Ceara'),(446,30,'DF','Distrito Federal'),(447,30,'ES','Espirito Santo'),(448,30,'GO','Goias'),(449,30,'MA','Maranhao'),(450,30,'MT','Mato Grosso'),(451,30,'MS','Mato Grosso do Sul'),(452,30,'MG','Minas Gerais'),(453,30,'PA','Para'),(454,30,'PB','Paraiba'),(455,30,'PR','Parana'),(456,30,'PE','Pernambuco'),(457,30,'PI','Piaui'),(458,30,'RJ','Rio de Janeiro'),(459,30,'RN','Rio Grande do Norte'),(460,30,'RS','Rio Grande do Sul'),(461,30,'RO','Rondonia'),(462,30,'RR','Roraima'),(463,30,'SC','Santa Catarina'),(464,30,'SP','Sao Paulo'),(465,30,'SE','Sergipe'),(466,30,'TO','Tocantins'),(467,31,'PB','Peros Banhos'),(468,31,'SI','Salomon Islands'),(469,31,'NI','Nelsons Island'),(470,31,'TB','Three Brothers'),(471,31,'EA','Eagle Islands'),(472,31,'DI','Danger Island'),(473,31,'EG','Egmont Islands'),(474,31,'DG','Diego Garcia'),(475,32,'BEL','Belait'),(476,32,'BRM','Brunei and Muara'),(477,32,'TEM','Temburong'),(478,32,'TUT','Tutong'),(479,33,'','Blagoevgrad'),(480,33,'','Burgas'),(481,33,'','Dobrich'),(482,33,'','Gabrovo'),(483,33,'','Haskovo'),(484,33,'','Kardjali'),(485,33,'','Kyustendil'),(486,33,'','Lovech'),(487,33,'','Montana'),(488,33,'','Pazardjik'),(489,33,'','Pernik'),(490,33,'','Pleven'),(491,33,'','Plovdiv'),(492,33,'','Razgrad'),(493,33,'','Shumen'),(494,33,'','Silistra'),(495,33,'','Sliven'),(496,33,'','Smolyan'),(497,33,'','Sofia'),(498,33,'','Sofia - town'),(499,33,'','Stara Zagora'),(500,33,'','Targovishte'),(501,33,'','Varna'),(502,33,'','Veliko Tarnovo'),(503,33,'','Vidin'),(504,33,'','Vratza'),(505,33,'','Yambol'),(506,34,'BAL','Bale'),(507,34,'BAM','Bam'),(508,34,'BAN','Banwa'),(509,34,'BAZ','Bazega'),(510,34,'BOR','Bougouriba'),(511,34,'BLG','Boulgou'),(512,34,'BOK','Boulkiemde'),(513,34,'COM','Comoe'),(514,34,'GAN','Ganzourgou'),(515,34,'GNA','Gnagna'),(516,34,'GOU','Gourma'),(517,34,'HOU','Houet'),(518,34,'IOA','Ioba'),(519,34,'KAD','Kadiogo'),(520,34,'KEN','Kenedougou'),(521,34,'KOD','Komondjari'),(522,34,'KOP','Kompienga'),(523,34,'KOS','Kossi'),(524,34,'KOL','Koulpelogo'),(525,34,'KOT','Kouritenga'),(526,34,'KOW','Kourweogo'),(527,34,'LER','Leraba'),(528,34,'LOR','Loroum'),(529,34,'MOU','Mouhoun'),(530,34,'NAH','Nahouri'),(531,34,'NAM','Namentenga'),(532,34,'NAY','Nayala'),(533,34,'NOU','Noumbiel'),(534,34,'OUB','Oubritenga'),(535,34,'OUD','Oudalan'),(536,34,'PAS','Passore'),(537,34,'PON','Poni'),(538,34,'SAG','Sanguie'),(539,34,'SAM','Sanmatenga'),(540,34,'SEN','Seno'),(541,34,'SIS','Sissili'),(542,34,'SOM','Soum'),(543,34,'SOR','Sourou'),(544,34,'TAP','Tapoa'),(545,34,'TUY','Tuy'),(546,34,'YAG','Yagha'),(547,34,'YAT','Yatenga'),(548,34,'ZIR','Ziro'),(549,34,'ZOD','Zondoma'),(550,34,'ZOW','Zoundweogo'),(551,35,'BB','Bubanza'),(552,35,'BJ','Bujumbura'),(553,35,'BR','Bururi'),(554,35,'CA','Cankuzo'),(555,35,'CI','Cibitoke'),(556,35,'GI','Gitega'),(557,35,'KR','Karuzi'),(558,35,'KY','Kayanza'),(559,35,'KI','Kirundo'),(560,35,'MA','Makamba'),(561,35,'MU','Muramvya'),(562,35,'MY','Muyinga'),(563,35,'MW','Mwaro'),(564,35,'NG','Ngozi'),(565,35,'RT','Rutana'),(566,35,'RY','Ruyigi'),(567,36,'PP','Phnom Penh'),(568,36,'PS','Preah Seihanu (Kompong Som or Si'),(569,36,'PA','Pailin'),(570,36,'KB','Keb'),(571,36,'BM','Banteay Meanchey'),(572,36,'BA','Battambang'),(573,36,'KM','Kampong Cham'),(574,36,'KN','Kampong Chhnang'),(575,36,'KU','Kampong Speu'),(576,36,'KO','Kampong Som'),(577,36,'KT','Kampong Thom'),(578,36,'KP','Kampot'),(579,36,'KL','Kandal'),(580,36,'KK','Kaoh Kong'),(581,36,'KR','Kratie'),(582,36,'MK','Mondul Kiri'),(583,36,'OM','Oddar Meancheay'),(584,36,'PU','Pursat'),(585,36,'PR','Preah Vihear'),(586,36,'PG','Prey Veng'),(587,36,'RK','Ratanak Kiri'),(588,36,'SI','Siemreap'),(589,36,'ST','Stung Treng'),(590,36,'SR','Svay Rieng'),(591,36,'TK','Takeo'),(592,37,'ADA','Adamawa (Adamaoua)'),(593,37,'CEN','Centre'),(594,37,'EST','East (Est)'),(595,37,'EXN','Extreme North (Extreme-Nord)'),(596,37,'LIT','Littoral'),(597,37,'NOR','North (Nord)'),(598,37,'NOT','Northwest (Nord-Ouest)'),(599,37,'OUE','West (Ouest)'),(600,37,'SUD','South (Sud)'),(601,37,'SOU','Southwest (Sud-Ouest).'),(602,38,'AB','Alberta'),(603,38,'BC','British Columbia'),(604,38,'MB','Manitoba'),(605,38,'NB','New Brunswick'),(606,38,'NL','Newfoundland and Labrador'),(607,38,'NT','Northwest Territories'),(608,38,'NS','Nova Scotia'),(609,38,'NU','Nunavut'),(610,38,'ON','Ontario'),(611,38,'PE','Prince Edward Island'),(612,38,'QC','QuÃƒÆ’Ã‚Â©bec'),(613,38,'SK','Saskatchewan'),(614,38,'YT','Yukon Territory'),(615,39,'BV','Boa Vista'),(616,39,'BR','Brava'),(617,39,'CS','Calheta de Sao Miguel'),(618,39,'MA','Maio'),(619,39,'MO','Mosteiros'),(620,39,'PA','Paul'),(621,39,'PN','Porto Novo'),(622,39,'PR','Praia'),(623,39,'RG','Ribeira Grande'),(624,39,'SL','Sal'),(625,39,'CA','Santa Catarina'),(626,39,'CR','Santa Cruz'),(627,39,'SD','Sao Domingos'),(628,39,'SF','Sao Filipe'),(629,39,'SN','Sao Nicolau'),(630,39,'SV','Sao Vicente'),(631,39,'TA','Tarrafal'),(632,40,'CR','Creek'),(633,40,'EA','Eastern'),(634,40,'ML','Midland'),(635,40,'ST','South Town'),(636,40,'SP','Spot Bay'),(637,40,'SK','Stake Bay'),(638,40,'WD','West End'),(639,40,'WN','Western'),(640,41,'BBA','Bamingui-Bangoran'),(641,41,'BKO','Basse-Kotto'),(642,41,'HKO','Haute-Kotto'),(643,41,'HMB','Haut-Mbomou'),(644,41,'KEM','Kemo'),(645,41,'LOB','Lobaye'),(646,41,'MKD','MambÃƒÆ’Ã‚Â©re-KadÃƒÆ’Ã‚Â©ÃƒÆ’Ã‚'),(647,41,'MBO','Mbomou'),(648,41,'NMM','Nana-Mambere'),(649,41,'OMP','Ombella-M\'Poko'),(650,41,'OUK','Ouaka'),(651,41,'OUH','Ouham'),(652,41,'OPE','Ouham-Pende'),(653,41,'VAK','Vakaga'),(654,41,'NGR','Nana-Grebizi'),(655,41,'SMB','Sangha-Mbaere'),(656,41,'BAN','Bangui'),(657,42,'BA','Batha'),(658,42,'BI','Biltine'),(659,42,'BE','Borkou-Ennedi-Tibesti'),(660,42,'CB','Chari-Baguirmi'),(661,42,'GU','Guera'),(662,42,'KA','Kanem'),(663,42,'LA','Lac'),(664,42,'LC','Logone Occidental'),(665,42,'LR','Logone Oriental'),(666,42,'MK','Mayo-Kebbi'),(667,42,'MC','Moyen-Chari'),(668,42,'OU','Ouaddai'),(669,42,'SA','Salamat'),(670,42,'TA','Tandjile'),(671,43,'AI','Aisen del General Carlos Ibanez'),(672,43,'AN','Antofagasta'),(673,43,'AR','Araucania'),(674,43,'AT','Atacama'),(675,43,'BI','Bio-Bio'),(676,43,'CO','Coquimbo'),(677,43,'LI','Libertador General Bernardo O\'Hi'),(678,43,'LL','Los Lagos'),(679,43,'MA','Magallanes y de la Antartica Chi'),(680,43,'ML','Maule'),(681,43,'RM','Region Metropolitana'),(682,43,'TA','Tarapaca'),(683,43,'VS','Valparaiso'),(684,44,'AN','Anhui'),(685,44,'BE','Beijing'),(686,44,'CH','Chongqing'),(687,44,'FU','Fujian'),(688,44,'GA','Gansu'),(689,44,'GU','Guangdong'),(690,44,'GX','Guangxi'),(691,44,'GZ','Guizhou'),(692,44,'HA','Hainan'),(693,44,'HB','Hebei'),(694,44,'HL','Heilongjiang'),(695,44,'HE','Henan'),(696,44,'HK','Hong Kong'),(697,44,'HU','Hubei'),(698,44,'HN','Hunan'),(699,44,'IM','Inner Mongolia'),(700,44,'JI','Jiangsu'),(701,44,'JX','Jiangxi'),(702,44,'JL','Jilin'),(703,44,'LI','Liaoning'),(704,44,'MA','Macau'),(705,44,'NI','Ningxia'),(706,44,'SH','Shaanxi'),(707,44,'SA','Shandong'),(708,44,'SG','Shanghai'),(709,44,'SX','Shanxi'),(710,44,'SI','Sichuan'),(711,44,'TI','Tianjin'),(712,44,'XI','Xinjiang'),(713,44,'YU','Yunnan'),(714,44,'ZH','Zhejiang'),(715,46,'D','Direction Island'),(716,46,'H','Home Island'),(717,46,'O','Horsburgh Island'),(718,46,'S','South Island'),(719,46,'W','West Island'),(720,47,'AMZ','Amazonas'),(721,47,'ANT','Antioquia'),(722,47,'ARA','Arauca'),(723,47,'ATL','Atlantico'),(724,47,'BDC','Bogota D.C.'),(725,47,'BOL','Bolivar'),(726,47,'BOY','Boyaca'),(727,47,'CAL','Caldas'),(728,47,'CAQ','Caqueta'),(729,47,'CAS','Casanare'),(730,47,'CAU','Cauca'),(731,47,'CES','Cesar'),(732,47,'CHO','Choco'),(733,47,'COR','Cordoba'),(734,47,'CAM','Cundinamarca'),(735,47,'GNA','Guainia'),(736,47,'GJR','Guajira'),(737,47,'GVR','Guaviare'),(738,47,'HUI','Huila'),(739,47,'MAG','Magdalena'),(740,47,'MET','Meta'),(741,47,'NAR','Narino'),(742,47,'NDS','Norte de Santander'),(743,47,'PUT','Putumayo'),(744,47,'QUI','Quindio'),(745,47,'RIS','Risaralda'),(746,47,'SAP','San Andres y Providencia'),(747,47,'SAN','Santander'),(748,47,'SUC','Sucre'),(749,47,'TOL','Tolima'),(750,47,'VDC','Valle del Cauca'),(751,47,'VAU','Vaupes'),(752,47,'VIC','Vichada'),(753,48,'G','Grande Comore'),(754,48,'A','Anjouan'),(755,48,'M','Moheli'),(756,49,'BO','Bouenza'),(757,49,'BR','Brazzaville'),(758,49,'CU','Cuvette'),(759,49,'CO','Cuvette-Ouest'),(760,49,'KO','Kouilou'),(761,49,'LE','Lekoumou'),(762,49,'LI','Likouala'),(763,49,'NI','Niari'),(764,49,'PL','Plateaux'),(765,49,'PO','Pool'),(766,49,'SA','Sangha'),(767,50,'PU','Pukapuka'),(768,50,'RK','Rakahanga'),(769,50,'MK','Manihiki'),(770,50,'PE','Penrhyn'),(771,50,'NI','Nassau Island'),(772,50,'SU','Surwarrow'),(773,50,'PA','Palmerston'),(774,50,'AI','Aitutaki'),(775,50,'MA','Manuae'),(776,50,'TA','Takutea'),(777,50,'MT','Mitiaro'),(778,50,'AT','Atiu'),(779,50,'MU','Mauke'),(780,50,'RR','Rarotonga'),(781,50,'MG','Mangaia'),(782,51,'AL','Alajuela'),(783,51,'CA','Cartago'),(784,51,'GU','Guanacaste'),(785,51,'HE','Heredia'),(786,51,'LI','Limon'),(787,51,'PU','Puntarenas'),(788,51,'SJ','San Jose'),(789,52,'ABE','Abengourou'),(790,52,'ABI','Abidjan'),(791,52,'ABO','Aboisso'),(792,52,'ADI','Adiake'),(793,52,'ADZ','Adzope'),(794,52,'AGB','Agboville'),(795,52,'AGN','Agnibilekrou'),(796,52,'ALE','Alepe'),(797,52,'BOC','Bocanda'),(798,52,'BAN','Bangolo'),(799,52,'BEO','Beoumi'),(800,52,'BIA','Biankouma'),(801,52,'BDK','Bondoukou'),(802,52,'BGN','Bongouanou'),(803,52,'BFL','Bouafle'),(804,52,'BKE','Bouake'),(805,52,'BNA','Bouna'),(806,52,'BDL','Boundiali'),(807,52,'DKL','Dabakala'),(808,52,'DBU','Dabou'),(809,52,'DAL','Daloa'),(810,52,'DAN','Danane'),(811,52,'DAO','Daoukro'),(812,52,'DIM','Dimbokro'),(813,52,'DIV','Divo'),(814,52,'DUE','Duekoue'),(815,52,'FER','Ferkessedougou'),(816,52,'GAG','Gagnoa'),(817,52,'GBA','Grand-Bassam'),(818,52,'GLA','Grand-Lahou'),(819,52,'GUI','Guiglo'),(820,52,'ISS','Issia'),(821,52,'JAC','Jacqueville'),(822,52,'KAT','Katiola'),(823,52,'KOR','Korhogo'),(824,52,'LAK','Lakota'),(825,52,'MAN','Man'),(826,52,'MKN','Mankono'),(827,52,'MBA','Mbahiakro'),(828,52,'ODI','Odienne'),(829,52,'OUM','Oume'),(830,52,'SAK','Sakassou'),(831,52,'SPE','San-Pedro'),(832,52,'SAS','Sassandra'),(833,52,'SEG','Seguela'),(834,52,'SIN','Sinfra'),(835,52,'SOU','Soubre'),(836,52,'TAB','Tabou'),(837,52,'TAN','Tanda'),(838,52,'TIE','Tiebissou'),(839,52,'TIN','Tingrela'),(840,52,'TIA','Tiassale'),(841,52,'TBA','Touba'),(842,52,'TLP','Toulepleu'),(843,52,'TMD','Toumodi'),(844,52,'VAV','Vavoua'),(845,52,'YAM','Yamoussoukro'),(846,52,'ZUE','Zuenoula'),(847,53,'BB','Bjelovar-Bilogora'),(848,53,'CZ','City of Zagreb'),(849,53,'DN','Dubrovnik-Neretva'),(850,53,'IS','Istra'),(851,53,'KA','Karlovac'),(852,53,'KK','Koprivnica-Krizevci'),(853,53,'KZ','Krapina-Zagorje'),(854,53,'LS','Lika-Senj'),(855,53,'ME','Medimurje'),(856,53,'OB','Osijek-Baranja'),(857,53,'PS','Pozega-Slavonia'),(858,53,'PG','Primorje-Gorski Kotar'),(859,53,'SI','Sibenik'),(860,53,'SM','Sisak-Moslavina'),(861,53,'SB','Slavonski Brod-Posavina'),(862,53,'SD','Split-Dalmatia'),(863,53,'VA','Varazdin'),(864,53,'VP','Virovitica-Podravina'),(865,53,'VS','Vukovar-Srijem'),(866,53,'ZK','Zadar-Knin'),(867,53,'ZA','Zagreb'),(868,54,'CA','Camaguey'),(869,54,'CD','Ciego de Avila'),(870,54,'CI','Cienfuegos'),(871,54,'CH','Ciudad de La Habana'),(872,54,'GR','Granma'),(873,54,'GU','Guantanamo'),(874,54,'HO','Holguin'),(875,54,'IJ','Isla de la Juventud'),(876,54,'LH','La Habana'),(877,54,'LT','Las Tunas'),(878,54,'MA','Matanzas'),(879,54,'PR','Pinar del Rio'),(880,54,'SS','Sancti Spiritus'),(881,54,'SC','Santiago de Cuba'),(882,54,'VC','Villa Clara'),(883,55,'F','Famagusta'),(884,55,'K','Kyrenia'),(885,55,'A','Larnaca'),(886,55,'I','Limassol'),(887,55,'N','Nicosia'),(888,55,'P','Paphos'),(889,56,'U','Ustecky'),(890,56,'C','Jihocesky'),(891,56,'B','Jihomoravsky'),(892,56,'K','Karlovarsky'),(893,56,'H','Kralovehradecky'),(894,56,'L','Liberecky'),(895,56,'T','Moravskoslezsky'),(896,56,'M','Olomoucky'),(897,56,'E','Pardubicky'),(898,56,'P','Plzensky'),(899,56,'A','Praha'),(900,56,'S','Stredocesky'),(901,56,'J','Vysocina'),(902,56,'Z','Zlinsky'),(903,57,'AR','Arhus'),(904,57,'BH','Bornholm'),(905,57,'CO','Copenhagen'),(906,57,'FO','Faroe Islands'),(907,57,'FR','Frederiksborg'),(908,57,'FY','Fyn'),(909,57,'KO','Kobenhavn'),(910,57,'NO','Nordjylland'),(911,57,'RI','Ribe'),(912,57,'RK','Ringkobing'),(913,57,'RO','Roskilde'),(914,57,'SO','Sonderjylland'),(915,57,'ST','Storstrom'),(916,57,'VK','Vejle'),(917,57,'VJ','VestjÃƒÆ’Ã‚Â¦lland'),(918,57,'VB','Viborg'),(919,58,'S','\'Ali Sabih'),(920,58,'K','Dikhil'),(921,58,'J','Djibouti'),(922,58,'O','Obock'),(923,58,'T','Tadjoura'),(924,59,'AND','Saint Andrew Parish'),(925,59,'DAV','Saint David Parish'),(926,59,'GEO','Saint George Parish'),(927,59,'JOH','Saint John Parish'),(928,59,'JOS','Saint Joseph Parish'),(929,59,'LUK','Saint Luke Parish'),(930,59,'MAR','Saint Mark Parish'),(931,59,'PAT','Saint Patrick Parish'),(932,59,'PAU','Saint Paul Parish'),(933,59,'PET','Saint Peter Parish'),(934,60,'DN','Distrito Nacional'),(935,60,'AZ','Azua'),(936,60,'BC','Baoruco'),(937,60,'BH','Barahona'),(938,60,'DJ','Dajabon'),(939,60,'DU','Duarte'),(940,60,'EL','Elias Pina'),(941,60,'SY','El Seybo'),(942,60,'ET','Espaillat'),(943,60,'HM','Hato Mayor'),(944,60,'IN','Independencia'),(945,60,'AL','La Altagracia'),(946,60,'RO','La Romana'),(947,60,'VE','La Vega'),(948,60,'MT','Maria Trinidad Sanchez'),(949,60,'MN','Monsenor Nouel'),(950,60,'MC','Monte Cristi'),(951,60,'MP','Monte Plata'),(952,60,'PD','Pedernales'),(953,60,'PR','Peravia (Bani)'),(954,60,'PP','Puerto Plata'),(955,60,'SL','Salcedo'),(956,60,'SM','Samana'),(957,60,'SH','Sanchez Ramirez'),(958,60,'SC','San Cristobal'),(959,60,'JO','San Jose de Ocoa'),(960,60,'SJ','San Juan'),(961,60,'PM','San Pedro de Macoris'),(962,60,'SA','Santiago'),(963,60,'ST','Santiago Rodriguez'),(964,60,'SD','Santo Domingo'),(965,60,'VA','Valverde'),(966,61,'AL','Aileu'),(967,61,'AN','Ainaro'),(968,61,'BA','Baucau'),(969,61,'BO','Bobonaro'),(970,61,'CO','Cova Lima'),(971,61,'DI','Dili'),(972,61,'ER','Ermera'),(973,61,'LA','Lautem'),(974,61,'LI','Liquica'),(975,61,'MT','Manatuto'),(976,61,'MF','Manufahi'),(977,61,'OE','Oecussi'),(978,61,'VI','Viqueque'),(979,62,'AZU','Azuay'),(980,62,'BOL','Bolivar'),(981,62,'CAN','CaÃƒÆ’Ã‚Â±ar'),(982,62,'CAR','Carchi'),(983,62,'CHI','Chimborazo'),(984,62,'COT','Cotopaxi'),(985,62,'EOR','El Oro'),(986,62,'ESM','Esmeraldas'),(987,62,'GPS','GalÃƒÆ’Ã‚Â¡pagos'),(988,62,'GUA','Guayas'),(989,62,'IMB','Imbabura'),(990,62,'LOJ','Loja'),(991,62,'LRO','Los Rios'),(992,62,'MAN','ManabÃƒÆ’Ã‚Â­'),(993,62,'MSA','Morona Santiago'),(994,62,'NAP','Napo'),(995,62,'ORE','Orellana'),(996,62,'PAS','Pastaza'),(997,62,'PIC','Pichincha'),(998,62,'SUC','SucumbÃƒÆ’Ã‚Â­os'),(999,62,'TUN','Tungurahua'),(1000,62,'ZCH','Zamora Chinchipe'),(1001,63,'DHY','Ad Daqahliyah'),(1002,63,'BAM','Al Bahr al Ahmar'),(1003,63,'BHY','Al Buhayrah'),(1004,63,'FYM','Al Fayyum'),(1005,63,'GBY','Al Gharbiyah'),(1006,63,'IDR','Al Iskandariyah'),(1007,63,'IML','Al Isma\'iliyah'),(1008,63,'JZH','Al Jizah'),(1009,63,'MFY','Al Minufiyah'),(1010,63,'MNY','Al Minya'),(1011,63,'QHR','Al Qahirah'),(1012,63,'QLY','Al Qalyubiyah'),(1013,63,'WJD','Al Wadi al Jadid'),(1014,63,'SHQ','Ash Sharqiyah'),(1015,63,'SWY','As Suways'),(1016,63,'ASW','Aswan'),(1017,63,'ASY','Asyut'),(1018,63,'BSW','Bani Suwayf'),(1019,63,'BSD','Bur Sa\'id'),(1020,63,'DMY','Dumyat'),(1021,63,'JNS','Janub Sina\''),(1022,63,'KSH','Kafr ash Shaykh'),(1023,63,'MAT','Matruh'),(1024,63,'QIN','Qina'),(1025,63,'SHS','Shamal Sina\''),(1026,63,'SUH','Suhaj'),(1027,64,'AH','Ahuachapan'),(1028,64,'CA','Cabanas'),(1029,64,'CH','Chalatenango'),(1030,64,'CU','Cuscatlan'),(1031,64,'LB','La Libertad'),(1032,64,'PZ','La Paz'),(1033,64,'UN','La Union'),(1034,64,'MO','Morazan'),(1035,64,'SM','San Miguel'),(1036,64,'SS','San Salvador'),(1037,64,'SV','San Vicente'),(1038,64,'SA','Santa Ana'),(1039,64,'SO','Sonsonate'),(1040,64,'US','Usulutan'),(1041,65,'AN','Provincia Annobon'),(1042,65,'BN','Provincia Bioko Norte'),(1043,65,'BS','Provincia Bioko Sur'),(1044,65,'CS','Provincia Centro Sur'),(1045,65,'KN','Provincia Kie-Ntem'),(1046,65,'LI','Provincia Litoral'),(1047,65,'WN','Provincia Wele-Nzas'),(1048,66,'MA','Central (Maekel)'),(1049,66,'KE','Anseba (Keren)'),(1050,66,'DK','Southern Red Sea (Debub-Keih-Bah'),(1051,66,'SK','Northern Red Sea (Semien-Keih-Ba'),(1052,66,'DE','Southern (Debub)'),(1053,66,'BR','Gash-Barka (Barentu)'),(1054,67,'HA','Harjumaa (Tallinn)'),(1055,67,'HI','Hiiumaa (Kardla)'),(1056,67,'IV','Ida-Virumaa (Johvi)'),(1057,67,'JA','Jarvamaa (Paide)'),(1058,67,'JO','Jogevamaa (Jogeva)'),(1059,67,'LV','Laane-Virumaa (Rakvere)'),(1060,67,'LA','Laanemaa (Haapsalu)'),(1061,67,'PA','Parnumaa (Parnu)'),(1062,67,'PO','Polvamaa (Polva)'),(1063,67,'RA','Raplamaa (Rapla)'),(1064,67,'SA','Saaremaa (Kuessaare)'),(1065,67,'TA','Tartumaa (Tartu)'),(1066,67,'VA','Valgamaa (Valga)'),(1067,67,'VI','Viljandimaa (Viljandi)'),(1068,67,'VO','Vorumaa (Voru)'),(1069,68,'AF','Afar'),(1070,68,'AH','Amhara'),(1071,68,'BG','Benishangul-Gumaz'),(1072,68,'GB','Gambela'),(1073,68,'HR','Hariai'),(1074,68,'OR','Oromia'),(1075,68,'SM','Somali'),(1076,68,'SN','Southern Nations - Nationalities'),(1077,68,'TG','Tigray'),(1078,68,'AA','Addis Ababa'),(1079,68,'DD','Dire Dawa'),(1080,71,'C','Central Division'),(1081,71,'N','Northern Division'),(1082,71,'E','Eastern Division'),(1083,71,'W','Western Division'),(1084,71,'R','Rotuma'),(1085,72,'AL','Ahvenanmaan Laani'),(1086,72,'ES','Etela-Suomen Laani'),(1087,72,'IS','Ita-Suomen Laani'),(1088,72,'LS','Lansi-Suomen Laani'),(1089,72,'LA','Lapin Lanani'),(1090,72,'OU','Oulun Laani'),(1091,73,'AL','Alsace'),(1092,73,'AQ','Aquitaine'),(1093,73,'AU','Auvergne'),(1094,73,'BR','Brittany'),(1095,73,'BU','Burgundy'),(1096,73,'CE','Center Loire Valley'),(1097,73,'CH','Champagne'),(1098,73,'CO','Corse'),(1099,73,'FR','France Comte'),(1100,73,'LA','Languedoc Roussillon'),(1101,73,'LI','Limousin'),(1102,73,'LO','Lorraine'),(1103,73,'MI','Midi Pyrenees'),(1104,73,'NO','Nord Pas de Calais'),(1105,73,'NR','Normandy'),(1106,73,'PA','Paris / Ill de France'),(1107,73,'PI','Picardie'),(1108,73,'PO','Poitou Charente'),(1109,73,'PR','Provence'),(1110,73,'RH','Rhone Alps'),(1111,73,'RI','Riviera'),(1112,73,'WE','Western Loire Valley'),(1113,74,'Et','Etranger'),(1114,74,'01','Ain'),(1115,74,'02','Aisne'),(1116,74,'03','Allier'),(1117,74,'04','Alpes de Haute Provence'),(1118,74,'05','Hautes-Alpes'),(1119,74,'06','Alpes Maritimes'),(1120,74,'07','ArdÃƒÆ’Ã‚Â¨che'),(1121,74,'08','Ardennes'),(1122,74,'09','AriÃƒÆ’Ã‚Â¨ge'),(1123,74,'10','Aube'),(1124,74,'11','Aude'),(1125,74,'12','Aveyron'),(1126,74,'13','Bouches du RhÃƒÆ’Ã‚Â´ne'),(1127,74,'14','Calvados'),(1128,74,'15','Cantal'),(1129,74,'16','Charente'),(1130,74,'17','Charente Maritime'),(1131,74,'18','Cher'),(1132,74,'19','CorrÃƒÆ’Ã‚Â¨ze'),(1133,74,'2A','Corse du Sud'),(1134,74,'2B','Haute Corse'),(1135,74,'21','CÃƒÆ’Ã‚Â´te d\'or'),(1136,74,'22','CÃƒÆ’Ã‚Â´tes d\'Armor'),(1137,74,'23','Creuse'),(1138,74,'24','Dordogne'),(1139,74,'25','Doubs'),(1140,74,'26','DrÃƒÆ’Ã‚Â´me'),(1141,74,'27','Eure'),(1142,74,'28','Eure et Loir'),(1143,74,'29','FinistÃƒÆ’Ã‚Â¨re'),(1144,74,'30','Gard'),(1145,74,'31','Haute Garonne'),(1146,74,'32','Gers'),(1147,74,'33','Gironde'),(1148,74,'34','HÃƒÆ’Ã‚Â©;rault'),(1149,74,'35','Ille et Vilaine'),(1150,74,'36','Indre'),(1151,74,'37','Indre et Loire'),(1152,74,'38','IsÃƒÆ’Ã‚Â©;re'),(1153,74,'39','Jura'),(1154,74,'40','Landes'),(1155,74,'41','Loir et Cher'),(1156,74,'42','Loire'),(1157,74,'43','Haute Loire'),(1158,74,'44','Loire Atlantique'),(1159,74,'45','Loiret'),(1160,74,'46','Lot'),(1161,74,'47','Lot et Garonne'),(1162,74,'48','LozÃƒÆ’Ã‚Â¨re'),(1163,74,'49','Maine et Loire'),(1164,74,'50','Manche'),(1165,74,'51','Marne'),(1166,74,'52','Haute Marne'),(1167,74,'53','Mayenne'),(1168,74,'54','Meurthe et Moselle'),(1169,74,'55','Meuse'),(1170,74,'56','Morbihan'),(1171,74,'57','Moselle'),(1172,74,'58','NiÃƒÆ’Ã‚Â¨vre'),(1173,74,'59','Nord'),(1174,74,'60','Oise'),(1175,74,'61','Orne'),(1176,74,'62','Pas de Calais'),(1177,74,'63','Puy de DÃƒÆ’Ã‚Â´me'),(1178,74,'64','PyrÃƒÆ’Ã‚Â©nÃƒÆ’Ã‚Â©es Atlantiqu'),(1179,74,'65','Hautes PyrÃƒÆ’Ã‚Â©nÃƒÆ’Ã‚Â©es'),(1180,74,'66','PyrÃƒÆ’Ã‚Â©nÃƒÆ’Ã‚Â©es Orientale'),(1181,74,'67','Bas Rhin'),(1182,74,'68','Haut Rhin'),(1183,74,'69','RhÃƒÆ’Ã‚Â´ne'),(1184,74,'70','Haute SaÃƒÆ’Ã‚Â´ne'),(1185,74,'71','SaÃƒÆ’Ã‚Â´ne et Loire'),(1186,74,'72','Sarthe'),(1187,74,'73','Savoie'),(1188,74,'74','Haute Savoie'),(1189,74,'75','Paris'),(1190,74,'76','Seine Maritime'),(1191,74,'77','Seine et Marne'),(1192,74,'78','Yvelines'),(1193,74,'79','Deux SÃƒÆ’Ã‚Â¨vres'),(1194,74,'80','Somme'),(1195,74,'81','Tarn'),(1196,74,'82','Tarn et Garonne'),(1197,74,'83','Var'),(1198,74,'84','Vaucluse'),(1199,74,'85','VendÃƒÆ’Ã‚Â©e'),(1200,74,'86','Vienne'),(1201,74,'87','Haute Vienne'),(1202,74,'88','Vosges'),(1203,74,'89','Yonne'),(1204,74,'90','Territoire de Belfort'),(1205,74,'91','Essonne'),(1206,74,'92','Hauts de Seine'),(1207,74,'93','Seine St-Denis'),(1208,74,'94','Val de Marne'),(1209,74,'95','Val d\'Oise'),(1210,76,'M','Archipel des Marquises'),(1211,76,'T','Archipel des Tuamotu'),(1212,76,'I','Archipel des Tubuai'),(1213,76,'V','Iles du Vent'),(1214,76,'S','Iles Sous-le-Vent'),(1215,77,'C','Iles Crozet'),(1216,77,'K','Iles Kerguelen'),(1217,77,'A','Ile Amsterdam'),(1218,77,'P','Ile Saint-Paul'),(1219,77,'D','Adelie Land'),(1220,78,'ES','Estuaire'),(1221,78,'HO','Haut-Ogooue'),(1222,78,'MO','Moyen-Ogooue'),(1223,78,'NG','Ngounie'),(1224,78,'NY','Nyanga'),(1225,78,'OI','Ogooue-Ivindo'),(1226,78,'OL','Ogooue-Lolo'),(1227,78,'OM','Ogooue-Maritime'),(1228,78,'WN','Woleu-Ntem'),(1229,79,'BJ','Banjul'),(1230,79,'BS','Basse'),(1231,79,'BR','Brikama'),(1232,79,'JA','Janjangbure'),(1233,79,'KA','Kanifeng'),(1234,79,'KE','Kerewan'),(1235,79,'KU','Kuntaur'),(1236,79,'MA','Mansakonko'),(1237,79,'LR','Lower River'),(1238,79,'CR','Central River'),(1239,79,'NB','North Bank'),(1240,79,'UR','Upper River'),(1241,79,'WE','Western'),(1242,80,'AB','Abkhazia'),(1243,80,'AJ','Ajaria'),(1244,80,'TB','Tbilisi'),(1245,80,'GU','Guria'),(1246,80,'IM','Imereti'),(1247,80,'KA','Kakheti'),(1248,80,'KK','Kvemo Kartli'),(1249,80,'MM','Mtskheta-Mtianeti'),(1250,80,'RL','Racha Lechkhumi and Kvemo Svanet'),(1251,80,'SZ','Samegrelo-Zemo Svaneti'),(1252,80,'SJ','Samtskhe-Javakheti'),(1253,80,'SK','Shida Kartli'),(1254,81,'BAW','Baden-WÃƒÆ’Ã‚Â¼rttemberg'),(1255,81,'BAY','Bayern'),(1256,81,'BER','Berlin'),(1257,81,'BRG','Brandenburg'),(1258,81,'BRE','Bremen'),(1259,81,'HAM','Hamburg'),(1260,81,'HES','Hessen'),(1261,81,'MEC','Mecklenburg-Vorpommern'),(1262,81,'NDS','Niedersachsen'),(1263,81,'NRW','Nordrhein-Westfalen'),(1264,81,'RHE','Rheinland-Pfalz'),(1265,81,'SAR','Saarland'),(1266,81,'SAS','Sachsen'),(1267,81,'SAC','Sachsen-Anhalt'),(1268,81,'SCN','Schleswig-Holstein'),(1269,81,'THE','ThÃƒÆ’Ã‚Â¼ringen'),(1270,82,'AS','Ashanti Region'),(1271,82,'BA','Brong-Ahafo Region'),(1272,82,'CE','Central Region'),(1273,82,'EA','Eastern Region'),(1274,82,'GA','Greater Accra Region'),(1275,82,'NO','Northern Region'),(1276,82,'UE','Upper East Region'),(1277,82,'UW','Upper West Region'),(1278,82,'VO','Volta Region'),(1279,82,'WE','Western Region'),(1280,84,'AT','Attica'),(1281,84,'CN','Central Greece'),(1282,84,'CM','Central Macedonia'),(1283,84,'CR','Crete'),(1284,84,'EM','East Macedonia and Thrace'),(1285,84,'EP','Epirus'),(1286,84,'II','Ionian Islands'),(1287,84,'NA','North Aegean'),(1288,84,'PP','Peloponnesos'),(1289,84,'SA','South Aegean'),(1290,84,'TH','Thessaly'),(1291,84,'WG','West Greece'),(1292,84,'WM','West Macedonia'),(1293,85,'A','Avannaa'),(1294,85,'T','Tunu'),(1295,85,'K','Kitaa'),(1296,86,'A','Saint Andrew'),(1297,86,'D','Saint David'),(1298,86,'G','Saint George'),(1299,86,'J','Saint John'),(1300,86,'M','Saint Mark'),(1301,86,'P','Saint Patrick'),(1302,86,'C','Carriacou'),(1303,86,'Q','Petit Martinique'),(1304,89,'AV','Alta Verapaz'),(1305,89,'BV','Baja Verapaz'),(1306,89,'CM','Chimaltenango'),(1307,89,'CQ','Chiquimula'),(1308,89,'PE','El Peten'),(1309,89,'PR','El Progreso'),(1310,89,'QC','El Quiche'),(1311,89,'ES','Escuintla'),(1312,89,'GU','Guatemala'),(1313,89,'HU','Huehuetenango'),(1314,89,'IZ','Izabal'),(1315,89,'JA','Jalapa'),(1316,89,'JU','Jutiapa'),(1317,89,'QZ','Quetzaltenango'),(1318,89,'RE','Retalhuleu'),(1319,89,'ST','Sacatepequez'),(1320,89,'SM','San Marcos'),(1321,89,'SR','Santa Rosa'),(1322,89,'SO','Solola'),(1323,89,'SU','Suchitepequez'),(1324,89,'TO','Totonicapan'),(1325,89,'ZA','Zacapa'),(1326,90,'CNK','Conakry'),(1327,90,'BYL','Beyla'),(1328,90,'BFA','Boffa'),(1329,90,'BOK','Boke'),(1330,90,'COY','Coyah'),(1331,90,'DBL','Dabola'),(1332,90,'DLB','Dalaba'),(1333,90,'DGR','Dinguiraye'),(1334,90,'DBR','Dubreka'),(1335,90,'FRN','Faranah'),(1336,90,'FRC','Forecariah'),(1337,90,'FRI','Fria'),(1338,90,'GAO','Gaoual'),(1339,90,'GCD','Gueckedou'),(1340,90,'KNK','Kankan'),(1341,90,'KRN','Kerouane'),(1342,90,'KND','Kindia'),(1343,90,'KSD','Kissidougou'),(1344,90,'KBA','Koubia'),(1345,90,'KDA','Koundara'),(1346,90,'KRA','Kouroussa'),(1347,90,'LAB','Labe'),(1348,90,'LLM','Lelouma'),(1349,90,'LOL','Lola'),(1350,90,'MCT','Macenta'),(1351,90,'MAL','Mali'),(1352,90,'MAM','Mamou'),(1353,90,'MAN','Mandiana'),(1354,90,'NZR','Nzerekore'),(1355,90,'PIT','Pita'),(1356,90,'SIG','Siguiri'),(1357,90,'TLM','Telimele'),(1358,90,'TOG','Tougue'),(1359,90,'YOM','Yomou'),(1360,91,'BF','Bafata Region'),(1361,91,'BB','Biombo Region'),(1362,91,'BS','Bissau Region'),(1363,91,'BL','Bolama Region'),(1364,91,'CA','Cacheu Region'),(1365,91,'GA','Gabu Region'),(1366,91,'OI','Oio Region'),(1367,91,'QU','Quinara Region'),(1368,91,'TO','Tombali Region'),(1369,92,'BW','Barima-Waini'),(1370,92,'CM','Cuyuni-Mazaruni'),(1371,92,'DM','Demerara-Mahaica'),(1372,92,'EC','East Berbice-Corentyne'),(1373,92,'EW','Essequibo Islands-West Demerara'),(1374,92,'MB','Mahaica-Berbice'),(1375,92,'PM','Pomeroon-Supenaam'),(1376,92,'PI','Potaro-Siparuni'),(1377,92,'UD','Upper Demerara-Berbice'),(1378,92,'UT','Upper Takutu-Upper Essequibo'),(1379,93,'AR','Artibonite'),(1380,93,'CE','Centre'),(1381,93,'GA','Grand\'Anse'),(1382,93,'ND','Nord'),(1383,93,'NE','Nord-Est'),(1384,93,'NO','Nord-Ouest'),(1385,93,'OU','Ouest'),(1386,93,'SD','Sud'),(1387,93,'SE','Sud-Est'),(1388,94,'F','Flat Island'),(1389,94,'M','McDonald Island'),(1390,94,'S','Shag Island'),(1391,94,'H','Heard Island'),(1392,95,'AT','Atlantida'),(1393,95,'CH','Choluteca'),(1394,95,'CL','Colon'),(1395,95,'CM','Comayagua'),(1396,95,'CP','Copan'),(1397,95,'CR','Cortes'),(1398,95,'PA','El Paraiso'),(1399,95,'FM','Francisco Morazan'),(1400,95,'GD','Gracias a Dios'),(1401,95,'IN','Intibuca'),(1402,95,'IB','Islas de la Bahia (Bay Islands)'),(1403,95,'PZ','La Paz'),(1404,95,'LE','Lempira'),(1405,95,'OC','Ocotepeque'),(1406,95,'OL','Olancho'),(1407,95,'SB','Santa Barbara'),(1408,95,'VA','Valle'),(1409,95,'YO','Yoro'),(1410,96,'HCW','Central and Western Hong Kong Is'),(1411,96,'HEA','Eastern Hong Kong Island'),(1412,96,'HSO','Southern Hong Kong Island'),(1413,96,'HWC','Wan Chai Hong Kong Island'),(1414,96,'KKC','Kowloon City Kowloon'),(1415,96,'KKT','Kwun Tong Kowloon'),(1416,96,'KSS','Sham Shui Po Kowloon'),(1417,96,'KWT','Wong Tai Sin Kowloon'),(1418,96,'KYT','Yau Tsim Mong Kowloon'),(1419,96,'NIS','Islands New Territories'),(1420,96,'NKT','Kwai Tsing New Territories'),(1421,96,'NNO','North New Territories'),(1422,96,'NSK','Sai Kung New Territories'),(1423,96,'NST','Sha Tin New Territories'),(1424,96,'NTP','Tai Po New Territories'),(1425,96,'NTW','Tsuen Wan New Territories'),(1426,96,'NTM','Tuen Mun New Territories'),(1427,96,'NYL','Yuen Long New Territories'),(1428,97,'BK','Bacs-Kiskun'),(1429,97,'BA','Baranya'),(1430,97,'BE','Bekes'),(1431,97,'BS','Bekescsaba'),(1432,97,'BZ','Borsod-Abauj-Zemplen'),(1433,97,'BU','Budapest'),(1434,97,'CS','Csongrad'),(1435,97,'DE','Debrecen'),(1436,97,'DU','Dunaujvaros'),(1437,97,'EG','Eger'),(1438,97,'FE','Fejer'),(1439,97,'GY','Gyor'),(1440,97,'GM','Gyor-Moson-Sopron'),(1441,97,'HB','Hajdu-Bihar'),(1442,97,'HE','Heves'),(1443,97,'HO','Hodmezovasarhely'),(1444,97,'JN','Jasz-Nagykun-Szolnok'),(1445,97,'KA','Kaposvar'),(1446,97,'KE','Kecskemet'),(1447,97,'KO','Komarom-Esztergom'),(1448,97,'MI','Miskolc'),(1449,97,'NA','Nagykanizsa'),(1450,97,'NO','Nograd'),(1451,97,'NY','Nyiregyhaza'),(1452,97,'PE','Pecs'),(1453,97,'PS','Pest'),(1454,97,'SO','Somogy'),(1455,97,'SP','Sopron'),(1456,97,'SS','Szabolcs-Szatmar-Bereg'),(1457,97,'SZ','Szeged'),(1458,97,'SE','Szekesfehervar'),(1459,97,'SL','Szolnok'),(1460,97,'SM','Szombathely'),(1461,97,'TA','Tatabanya'),(1462,97,'TO','Tolna'),(1463,97,'VA','Vas'),(1464,97,'VE','Veszprem'),(1465,97,'ZA','Zala'),(1466,97,'ZZ','Zalaegerszeg'),(1467,98,'AL','Austurland'),(1468,98,'HF','Hofuoborgarsvaeoi'),(1469,98,'NE','Norourland eystra'),(1470,98,'NV','Norourland vestra'),(1471,98,'SL','Suourland'),(1472,98,'SN','Suournes'),(1473,98,'VF','Vestfiroir'),(1474,98,'VL','Vesturland'),(1475,99,'AN','Andaman and Nicobar Islands'),(1476,99,'AP','Andhra Pradesh'),(1477,99,'AR','Arunachal Pradesh'),(1478,99,'AS','Assam'),(1479,99,'BI','Bihar'),(1480,99,'CH','Chandigarh'),(1481,99,'DA','Dadra and Nagar Haveli'),(1482,99,'DM','Daman and Diu'),(1483,99,'DE','Delhi'),(1484,99,'GO','Goa'),(1485,99,'GU','Gujarat'),(1486,99,'HA','Haryana'),(1487,99,'HP','Himachal Pradesh'),(1488,99,'JA','Jammu and Kashmir'),(1489,99,'KA','Karnataka'),(1490,99,'KE','Kerala'),(1491,99,'LI','Lakshadweep Islands'),(1492,99,'MP','Madhya Pradesh'),(1493,99,'MA','Maharashtra'),(1494,99,'MN','Manipur'),(1495,99,'ME','Meghalaya'),(1496,99,'MI','Mizoram'),(1497,99,'NA','Nagaland'),(1498,99,'OR','Orissa'),(1499,99,'PO','Pondicherry'),(1500,99,'PU','Punjab'),(1501,99,'RA','Rajasthan'),(1502,99,'SI','Sikkim'),(1503,99,'TN','Tamil Nadu'),(1504,99,'TR','Tripura'),(1505,99,'UP','Uttar Pradesh'),(1506,99,'WB','West Bengal'),(1507,100,'AC','Aceh'),(1508,100,'BA','Bali'),(1509,100,'BT','Banten'),(1510,100,'BE','Bengkulu'),(1511,100,'BD','BoDeTaBek'),(1512,100,'GO','Gorontalo'),(1513,100,'JK','Jakarta Raya'),(1514,100,'JA','Jambi'),(1515,100,'JB','Jawa Barat'),(1516,100,'JT','Jawa Tengah'),(1517,100,'JI','Jawa Timur'),(1518,100,'KB','Kalimantan Barat'),(1519,100,'KS','Kalimantan Selatan'),(1520,100,'KT','Kalimantan Tengah'),(1521,100,'KI','Kalimantan Timur'),(1522,100,'BB','Kepulauan Bangka Belitung'),(1523,100,'LA','Lampung'),(1524,100,'MA','Maluku'),(1525,100,'MU','Maluku Utara'),(1526,100,'NB','Nusa Tenggara Barat'),(1527,100,'NT','Nusa Tenggara Timur'),(1528,100,'PA','Papua'),(1529,100,'RI','Riau'),(1530,100,'SN','Sulawesi Selatan'),(1531,100,'ST','Sulawesi Tengah'),(1532,100,'SG','Sulawesi Tenggara'),(1533,100,'SA','Sulawesi Utara'),(1534,100,'SB','Sumatera Barat'),(1535,100,'SS','Sumatera Selatan'),(1536,100,'SU','Sumatera Utara'),(1537,100,'YO','Yogyakarta'),(1538,101,'TEH','Tehran'),(1539,101,'QOM','Qom'),(1540,101,'MKZ','Markazi'),(1541,101,'QAZ','Qazvin'),(1542,101,'GIL','Gilan'),(1543,101,'ARD','Ardabil'),(1544,101,'ZAN','Zanjan'),(1545,101,'EAZ','East Azarbaijan'),(1546,101,'WEZ','West Azarbaijan'),(1547,101,'KRD','Kurdistan'),(1548,101,'HMD','Hamadan'),(1549,101,'KRM','Kermanshah'),(1550,101,'ILM','Ilam'),(1551,101,'LRS','Lorestan'),(1552,101,'KZT','Khuzestan'),(1553,101,'CMB','Chahar Mahaal and Bakhtiari'),(1554,101,'KBA','Kohkiluyeh and Buyer Ahmad'),(1555,101,'BSH','Bushehr'),(1556,101,'FAR','Fars'),(1557,101,'HRM','Hormozgan'),(1558,101,'SBL','Sistan and Baluchistan'),(1559,101,'KRB','Kerman'),(1560,101,'YZD','Yazd'),(1561,101,'EFH','Esfahan'),(1562,101,'SMN','Semnan'),(1563,101,'MZD','Mazandaran'),(1564,101,'GLS','Golestan'),(1565,101,'NKH','North Khorasan'),(1566,101,'RKH','Razavi Khorasan'),(1567,101,'SKH','South Khorasan'),(1568,102,'BD','Baghdad'),(1569,102,'SD','Salah ad Din'),(1570,102,'DY','Diyala'),(1571,102,'WS','Wasit'),(1572,102,'MY','Maysan'),(1573,102,'BA','Al Basrah'),(1574,102,'DQ','Dhi Qar'),(1575,102,'MU','Al Muthanna'),(1576,102,'QA','Al Qadisyah'),(1577,102,'BB','Babil'),(1578,102,'KB','Al Karbala'),(1579,102,'NJ','An Najaf'),(1580,102,'AB','Al Anbar'),(1581,102,'NN','Ninawa'),(1582,102,'DH','Dahuk'),(1583,102,'AL','Arbil'),(1584,102,'TM','At Ta\'mim'),(1585,102,'SL','As Sulaymaniyah'),(1586,103,'CA','Carlow'),(1587,103,'CV','Cavan'),(1588,103,'CL','Clare'),(1589,103,'CO','Cork'),(1590,103,'DO','Donegal'),(1591,103,'DU','Dublin'),(1592,103,'GA','Galway'),(1593,103,'KE','Kerry'),(1594,103,'KI','Kildare'),(1595,103,'KL','Kilkenny'),(1596,103,'LA','Laois'),(1597,103,'LE','Leitrim'),(1598,103,'LI','Limerick'),(1599,103,'LO','Longford'),(1600,103,'LU','Louth'),(1601,103,'MA','Mayo'),(1602,103,'ME','Meath'),(1603,103,'MO','Monaghan'),(1604,103,'OF','Offaly'),(1605,103,'RO','Roscommon'),(1606,103,'SL','Sligo'),(1607,103,'TI','Tipperary'),(1608,103,'WA','Waterford'),(1609,103,'WE','Westmeath'),(1610,103,'WX','Wexford'),(1611,103,'WI','Wicklow'),(1612,104,'BS','Be\'er Sheva'),(1613,104,'BH','Bika\'at Hayarden'),(1614,104,'EA','Eilat and Arava'),(1615,104,'GA','Galil'),(1616,104,'HA','Haifa'),(1617,104,'JM','Jehuda Mountains'),(1618,104,'JE','Jerusalem'),(1619,104,'NE','Negev'),(1620,104,'SE','Semaria'),(1621,104,'SH','Sharon'),(1622,104,'TA','Tel Aviv (Gosh Dan)'),(1623,105,'AB','Abruzzo'),(1624,105,'BA','Basilicata'),(1625,105,'CA','Calabria'),(1626,105,'CP','Campania'),(1627,105,'ER','Emilia Romagna'),(1628,105,'FV','Friuli-Venezia Giulia'),(1629,105,'LA','Lazio (Latium & Rome)'),(1630,105,'TM','Le Marche (The Marches)'),(1631,105,'LI','Liguria'),(1632,105,'LO','Lombardia (Lombardy)'),(1633,105,'MO','Molise'),(1634,105,'PI','Piemonte (Piedmont)'),(1635,105,'AP','Puglia (Apulia)'),(1636,105,'SA','Sardegna (Sardinia)'),(1637,105,'SI','Sicilia (Sicily)'),(1638,105,'TU','Toscana (Tuscany)'),(1639,105,'TR','Trentino Alto Adige'),(1640,105,'UM','Umbria'),(1641,105,'VA','Val d\'Aosta'),(1642,105,'VE','Veneto'),(1643,106,'CLA','Clarendon'),(1644,106,'HAN','Hanover'),(1645,106,'KIN','Kingston'),(1646,106,'MAN','Manchester'),(1647,106,'POR','Portland'),(1648,106,'AND','St. Andrew'),(1649,106,'ANN','St. Ann'),(1650,106,'CAT','St. Catherine'),(1651,106,'ELI','St. Elizabeth'),(1652,106,'JAM','St. James'),(1653,106,'MAR','St. Mary'),(1654,106,'THO','St. Thomas'),(1655,106,'TRL','Trelawny'),(1656,106,'WML','Westmoreland'),(1657,107,'AI','Aichi'),(1658,107,'AK','Akita'),(1659,107,'AO','Aomori'),(1660,107,'CH','Chiba'),(1661,107,'EH','Ehime'),(1662,107,'FK','Fukui'),(1663,107,'FU','Fukuoka'),(1664,107,'FS','Fukushima'),(1665,107,'GI','Gifu'),(1666,107,'GU','Gumma'),(1667,107,'HI','Hiroshima'),(1668,107,'HO','Hokkaido'),(1669,107,'HY','Hyogo'),(1670,107,'IB','Ibaraki'),(1671,107,'IS','Ishikawa'),(1672,107,'IW','Iwate'),(1673,107,'KA','Kagawa'),(1674,107,'KG','Kagoshima'),(1675,107,'KN','Kanagawa'),(1676,107,'KO','Kochi'),(1677,107,'KU','Kumamoto'),(1678,107,'KY','Kyoto'),(1679,107,'MI','Mie'),(1680,107,'MY','Miyagi'),(1681,107,'MZ','Miyazaki'),(1682,107,'NA','Nagano'),(1683,107,'NG','Nagasaki'),(1684,107,'NR','Nara'),(1685,107,'NI','Niigata'),(1686,107,'OI','Oita'),(1687,107,'OK','Okayama'),(1688,107,'ON','Okinawa'),(1689,107,'OS','Osaka'),(1690,107,'SA','Saga'),(1691,107,'SI','Saitama'),(1692,107,'SH','Shiga'),(1693,107,'SM','Shimane'),(1694,107,'SZ','Shizuoka'),(1695,107,'TO','Tochigi'),(1696,107,'TS','Tokushima'),(1697,107,'TK','Tokyo'),(1698,107,'TT','Tottori'),(1699,107,'TY','Toyama'),(1700,107,'WA','Wakayama'),(1701,107,'YA','Yamagata'),(1702,107,'YM','Yamaguchi'),(1703,107,'YN','Yamanashi'),(1704,108,'AM','\'Amman'),(1705,108,'AJ','Ajlun'),(1706,108,'AA','Al \'Aqabah'),(1707,108,'AB','Al Balqa\''),(1708,108,'AK','Al Karak'),(1709,108,'AL','Al Mafraq'),(1710,108,'AT','At Tafilah'),(1711,108,'AZ','Az Zarqa\''),(1712,108,'IR','Irbid'),(1713,108,'JA','Jarash'),(1714,108,'MA','Ma\'an'),(1715,108,'MD','Madaba'),(1716,109,'AL','Almaty'),(1717,109,'AC','Almaty City'),(1718,109,'AM','Aqmola'),(1719,109,'AQ','Aqtobe'),(1720,109,'AS','Astana City'),(1721,109,'AT','Atyrau'),(1722,109,'BA','Batys Qazaqstan'),(1723,109,'BY','Bayqongyr City'),(1724,109,'MA','Mangghystau'),(1725,109,'ON','Ongtustik Qazaqstan'),(1726,109,'PA','Pavlodar'),(1727,109,'QA','Qaraghandy'),(1728,109,'QO','Qostanay'),(1729,109,'QY','Qyzylorda'),(1730,109,'SH','Shyghys Qazaqstan'),(1731,109,'SO','Soltustik Qazaqstan'),(1732,109,'ZH','Zhambyl'),(1733,110,'CE','Central'),(1734,110,'CO','Coast'),(1735,110,'EA','Eastern'),(1736,110,'NA','Nairobi Area'),(1737,110,'NE','North Eastern'),(1738,110,'NY','Nyanza'),(1739,110,'RV','Rift Valley'),(1740,110,'WE','Western'),(1741,111,'AG','Abaiang'),(1742,111,'AM','Abemama'),(1743,111,'AK','Aranuka'),(1744,111,'AO','Arorae'),(1745,111,'BA','Banaba'),(1746,111,'BE','Beru'),(1747,111,'bT','Butaritari'),(1748,111,'KA','Kanton'),(1749,111,'KR','Kiritimati'),(1750,111,'KU','Kuria'),(1751,111,'MI','Maiana'),(1752,111,'MN','Makin'),(1753,111,'ME','Marakei'),(1754,111,'NI','Nikunau'),(1755,111,'NO','Nonouti'),(1756,111,'ON','Onotoa'),(1757,111,'TT','Tabiteuea'),(1758,111,'TR','Tabuaeran'),(1759,111,'TM','Tamana'),(1760,111,'TW','Tarawa'),(1761,111,'TE','Teraina'),(1762,112,'CHA','Chagang-do'),(1763,112,'HAB','Hamgyong-bukto'),(1764,112,'HAN','Hamgyong-namdo'),(1765,112,'HWB','Hwanghae-bukto'),(1766,112,'HWN','Hwanghae-namdo'),(1767,112,'KAN','Kangwon-do'),(1768,112,'PYB','P\'yongan-bukto'),(1769,112,'PYN','P\'yongan-namdo'),(1770,112,'YAN','Ryanggang-do (Yanggang-do)'),(1771,112,'NAJ','Rason Directly Governed City'),(1772,112,'PYO','P\'yongyang Special City'),(1773,113,'CO','Ch\'ungch\'ong-bukto'),(1774,113,'CH','Ch\'ungch\'ong-namdo'),(1775,113,'CD','Cheju-do'),(1776,113,'CB','Cholla-bukto'),(1777,113,'CN','Cholla-namdo'),(1778,113,'IG','Inch\'on-gwangyoksi'),(1779,113,'KA','Kangwon-do'),(1780,113,'KG','Kwangju-gwangyoksi'),(1781,113,'KD','Kyonggi-do'),(1782,113,'KB','Kyongsang-bukto'),(1783,113,'KN','Kyongsang-namdo'),(1784,113,'PG','Pusan-gwangyoksi'),(1785,113,'SO','Soul-t\'ukpyolsi'),(1786,113,'TA','Taegu-gwangyoksi'),(1787,113,'TG','Taejon-gwangyoksi'),(1788,114,'AL','Al \'Asimah'),(1789,114,'AA','Al Ahmadi'),(1790,114,'AF','Al Farwaniyah'),(1791,114,'AJ','Al Jahra\''),(1792,114,'HA','Hawalli'),(1793,115,'GB','Bishkek'),(1794,115,'B','Batken'),(1795,115,'C','Chu'),(1796,115,'J','Jalal-Abad'),(1797,115,'N','Naryn'),(1798,115,'O','Osh'),(1799,115,'T','Talas'),(1800,115,'Y','Ysyk-Kol'),(1801,116,'VT','Vientiane'),(1802,116,'AT','Attapu'),(1803,116,'BK','Bokeo'),(1804,116,'BL','Bolikhamxai'),(1805,116,'CH','Champasak'),(1806,116,'HO','Houaphan'),(1807,116,'KH','Khammouan'),(1808,116,'LM','Louang Namtha'),(1809,116,'LP','Louangphabang'),(1810,116,'OU','Oudomxai'),(1811,116,'PH','Phongsali'),(1812,116,'SL','Salavan'),(1813,116,'SV','Savannakhet'),(1814,116,'VI','Vientiane'),(1815,116,'XA','Xaignabouli'),(1816,116,'XE','Xekong'),(1817,116,'XI','Xiangkhoang'),(1818,116,'XN','Xaisomboun'),(1819,117,'AIZ','Aizkraukles Rajons'),(1820,117,'ALU','Aluksnes Rajons'),(1821,117,'BAL','Balvu Rajons'),(1822,117,'BAU','Bauskas Rajons'),(1823,117,'CES','Cesu Rajons'),(1824,117,'DGR','Daugavpils Rajons'),(1825,117,'DOB','Dobeles Rajons'),(1826,117,'GUL','Gulbenes Rajons'),(1827,117,'JEK','Jekabpils Rajons'),(1828,117,'JGR','Jelgavas Rajons'),(1829,117,'KRA','Kraslavas Rajons'),(1830,117,'KUL','Kuldigas Rajons'),(1831,117,'LPR','Liepajas Rajons'),(1832,117,'LIM','Limbazu Rajons'),(1833,117,'LUD','Ludzas Rajons'),(1834,117,'MAD','Madonas Rajons'),(1835,117,'OGR','Ogres Rajons'),(1836,117,'PRE','Preilu Rajons'),(1837,117,'RZR','Rezeknes Rajons'),(1838,117,'RGR','Rigas Rajons'),(1839,117,'SAL','Saldus Rajons'),(1840,117,'TAL','Talsu Rajons'),(1841,117,'TUK','Tukuma Rajons'),(1842,117,'VLK','Valkas Rajons'),(1843,117,'VLM','Valmieras Rajons'),(1844,117,'VSR','Ventspils Rajons'),(1845,117,'DGV','Daugavpils'),(1846,117,'JGV','Jelgava'),(1847,117,'JUR','Jurmala'),(1848,117,'LPK','Liepaja'),(1849,117,'RZK','Rezekne'),(1850,117,'RGA','Riga'),(1851,117,'VSL','Ventspils'),(1852,119,'BE','Berea'),(1853,119,'BB','Butha-Buthe'),(1854,119,'LE','Leribe'),(1855,119,'MF','Mafeteng'),(1856,119,'MS','Maseru'),(1857,119,'MH','Mohale\'s Hoek'),(1858,119,'MK','Mokhotlong'),(1859,119,'QN','Qacha\'s Nek'),(1860,119,'QT','Quthing'),(1861,119,'TT','Thaba-Tseka'),(1862,120,'BI','Bomi'),(1863,120,'BG','Bong'),(1864,120,'GB','Grand Bassa'),(1865,120,'CM','Grand Cape Mount'),(1866,120,'GG','Grand Gedeh'),(1867,120,'GK','Grand Kru'),(1868,120,'LO','Lofa'),(1869,120,'MG','Margibi'),(1870,120,'ML','Maryland'),(1871,120,'MS','Montserrado'),(1872,120,'NB','Nimba'),(1873,120,'RC','River Cess'),(1874,120,'SN','Sinoe'),(1875,121,'AJ','Ajdabiya'),(1876,121,'AZ','Al \'Aziziyah'),(1877,121,'FA','Al Fatih'),(1878,121,'JA','Al Jabal al Akhdar'),(1879,121,'JU','Al Jufrah'),(1880,121,'KH','Al Khums'),(1881,121,'KU','Al Kufrah'),(1882,121,'NK','An Nuqat al Khams'),(1883,121,'AS','Ash Shati\''),(1884,121,'AW','Awbari'),(1885,121,'ZA','Az Zawiyah'),(1886,121,'BA','Banghazi'),(1887,121,'DA','Darnah'),(1888,121,'GD','Ghadamis'),(1889,121,'GY','Gharyan'),(1890,121,'MI','Misratah'),(1891,121,'MZ','Murzuq'),(1892,121,'SB','Sabha'),(1893,121,'SW','Sawfajjin'),(1894,121,'SU','Surt'),(1895,121,'TL','Tarabulus (Tripoli)'),(1896,121,'TH','Tarhunah'),(1897,121,'TU','Tubruq'),(1898,121,'YA','Yafran'),(1899,121,'ZL','Zlitan'),(1900,122,'V','Vaduz'),(1901,122,'A','Schaan'),(1902,122,'B','Balzers'),(1903,122,'N','Triesen'),(1904,122,'E','Eschen'),(1905,122,'M','Mauren'),(1906,122,'T','Triesenberg'),(1907,122,'R','Ruggell'),(1908,122,'G','Gamprin'),(1909,122,'L','Schellenberg'),(1910,122,'P','Planken'),(1911,123,'AL','Alytus'),(1912,123,'KA','Kaunas'),(1913,123,'KL','Klaipeda'),(1914,123,'MA','Marijampole'),(1915,123,'PA','Panevezys'),(1916,123,'SI','Siauliai'),(1917,123,'TA','Taurage'),(1918,123,'TE','Telsiai'),(1919,123,'UT','Utena'),(1920,123,'VI','Vilnius'),(1921,124,'DD','Diekirch'),(1922,124,'DC','Clervaux'),(1923,124,'DR','Redange'),(1924,124,'DV','Vianden'),(1925,124,'DW','Wiltz'),(1926,124,'GG','Grevenmacher'),(1927,124,'GE','Echternach'),(1928,124,'GR','Remich'),(1929,124,'LL','Luxembourg'),(1930,124,'LC','Capellen'),(1931,124,'LE','Esch-sur-Alzette'),(1932,124,'LM','Mersch'),(1933,125,'OLF','Our Lady Fatima Parish'),(1934,125,'ANT','St. Anthony Parish'),(1935,125,'LAZ','St. Lazarus Parish'),(1936,125,'CAT','Cathedral Parish'),(1937,125,'LAW','St. Lawrence Parish'),(1938,127,'AN','Antananarivo'),(1939,127,'AS','Antsiranana'),(1940,127,'FN','Fianarantsoa'),(1941,127,'MJ','Mahajanga'),(1942,127,'TM','Toamasina'),(1943,127,'TL','Toliara'),(1944,128,'BLK','Balaka'),(1945,128,'BLT','Blantyre'),(1946,128,'CKW','Chikwawa'),(1947,128,'CRD','Chiradzulu'),(1948,128,'CTP','Chitipa'),(1949,128,'DDZ','Dedza'),(1950,128,'DWA','Dowa'),(1951,128,'KRG','Karonga'),(1952,128,'KSG','Kasungu'),(1953,128,'LKM','Likoma'),(1954,128,'LLG','Lilongwe'),(1955,128,'MCG','Machinga'),(1956,128,'MGC','Mangochi'),(1957,128,'MCH','Mchinji'),(1958,128,'MLJ','Mulanje'),(1959,128,'MWZ','Mwanza'),(1960,128,'MZM','Mzimba'),(1961,128,'NTU','Ntcheu'),(1962,128,'NKB','Nkhata Bay'),(1963,128,'NKH','Nkhotakota'),(1964,128,'NSJ','Nsanje'),(1965,128,'NTI','Ntchisi'),(1966,128,'PHL','Phalombe'),(1967,128,'RMP','Rumphi'),(1968,128,'SLM','Salima'),(1969,128,'THY','Thyolo'),(1970,128,'ZBA','Zomba'),(1971,129,'JO','Johor'),(1972,129,'KE','Kedah'),(1973,129,'KL','Kelantan'),(1974,129,'LA','Labuan'),(1975,129,'ME','Melaka'),(1976,129,'NS','Negeri Sembilan'),(1977,129,'PA','Pahang'),(1978,129,'PE','Perak'),(1979,129,'PR','Perlis'),(1980,129,'PP','Pulau Pinang'),(1981,129,'SA','Sabah'),(1982,129,'SR','Sarawak'),(1983,129,'SE','Selangor'),(1984,129,'TE','Terengganu'),(1985,129,'WP','Wilayah Persekutuan'),(1986,130,'THU','Thiladhunmathi Uthuru'),(1987,130,'THD','Thiladhunmathi Dhekunu'),(1988,130,'MLU','Miladhunmadulu Uthuru'),(1989,130,'MLD','Miladhunmadulu Dhekunu'),(1990,130,'MAU','Maalhosmadulu Uthuru'),(1991,130,'MAD','Maalhosmadulu Dhekunu'),(1992,130,'FAA','Faadhippolhu'),(1993,130,'MAA','Male Atoll'),(1994,130,'AAU','Ari Atoll Uthuru'),(1995,130,'AAD','Ari Atoll Dheknu'),(1996,130,'FEA','Felidhe Atoll'),(1997,130,'MUA','Mulaku Atoll'),(1998,130,'NAU','Nilandhe Atoll Uthuru'),(1999,130,'NAD','Nilandhe Atoll Dhekunu'),(2000,130,'KLH','Kolhumadulu'),(2001,130,'HDH','Hadhdhunmathi'),(2002,130,'HAU','Huvadhu Atoll Uthuru'),(2003,130,'HAD','Huvadhu Atoll Dhekunu'),(2004,130,'FMU','Fua Mulaku'),(2005,130,'ADD','Addu'),(2006,131,'GA','Gao'),(2007,131,'KY','Kayes'),(2008,131,'KD','Kidal'),(2009,131,'KL','Koulikoro'),(2010,131,'MP','Mopti'),(2011,131,'SG','Segou'),(2012,131,'SK','Sikasso'),(2013,131,'TB','Tombouctou'),(2014,131,'CD','Bamako Capital District'),(2015,132,'ATT','Attard'),(2016,132,'BAL','Balzan'),(2017,132,'BGU','Birgu'),(2018,132,'BKK','Birkirkara'),(2019,132,'BRZ','Birzebbuga'),(2020,132,'BOR','Bormla'),(2021,132,'DIN','Dingli'),(2022,132,'FGU','Fgura'),(2023,132,'FLO','Floriana'),(2024,132,'GDJ','Gudja'),(2025,132,'GZR','Gzira'),(2026,132,'GRG','Gargur'),(2027,132,'GXQ','Gaxaq'),(2028,132,'HMR','Hamrun'),(2029,132,'IKL','Iklin'),(2030,132,'ISL','Isla'),(2031,132,'KLK','Kalkara'),(2032,132,'KRK','Kirkop'),(2033,132,'LIJ','Lija'),(2034,132,'LUQ','Luqa'),(2035,132,'MRS','Marsa'),(2036,132,'MKL','Marsaskala'),(2037,132,'MXL','Marsaxlokk'),(2038,132,'MDN','Mdina'),(2039,132,'MEL','Melliea'),(2040,132,'MGR','Mgarr'),(2041,132,'MST','Mosta'),(2042,132,'MQA','Mqabba'),(2043,132,'MSI','Msida'),(2044,132,'MTF','Mtarfa'),(2045,132,'NAX','Naxxar'),(2046,132,'PAO','Paola'),(2047,132,'PEM','Pembroke'),(2048,132,'PIE','Pieta'),(2049,132,'QOR','Qormi'),(2050,132,'QRE','Qrendi'),(2051,132,'RAB','Rabat'),(2052,132,'SAF','Safi'),(2053,132,'SGI','San Giljan'),(2054,132,'SLU','Santa Lucija'),(2055,132,'SPB','San Pawl il-Bahar'),(2056,132,'SGW','San Gwann'),(2057,132,'SVE','Santa Venera'),(2058,132,'SIG','Siggiewi'),(2059,132,'SLM','Sliema'),(2060,132,'SWQ','Swieqi'),(2061,132,'TXB','Ta Xbiex'),(2062,132,'TRX','Tarxien'),(2063,132,'VLT','Valletta'),(2064,132,'XGJ','Xgajra'),(2065,132,'ZBR','Zabbar'),(2066,132,'ZBG','Zebbug'),(2067,132,'ZJT','Zejtun'),(2068,132,'ZRQ','Zurrieq'),(2069,132,'FNT','Fontana'),(2070,132,'GHJ','Ghajnsielem'),(2071,132,'GHR','Gharb'),(2072,132,'GHS','Ghasri'),(2073,132,'KRC','Kercem'),(2074,132,'MUN','Munxar'),(2075,132,'NAD','Nadur'),(2076,132,'QAL','Qala'),(2077,132,'VIC','Victoria'),(2078,132,'SLA','San Lawrenz'),(2079,132,'SNT','Sannat'),(2080,132,'ZAG','Xagra'),(2081,132,'XEW','Xewkija'),(2082,132,'ZEB','Zebbug'),(2083,133,'ALG','Ailinginae'),(2084,133,'ALL','Ailinglaplap'),(2085,133,'ALK','Ailuk'),(2086,133,'ARN','Arno'),(2087,133,'AUR','Aur'),(2088,133,'BKR','Bikar'),(2089,133,'BKN','Bikini'),(2090,133,'BKK','Bokak'),(2091,133,'EBN','Ebon'),(2092,133,'ENT','Enewetak'),(2093,133,'EKB','Erikub'),(2094,133,'JBT','Jabat'),(2095,133,'JLT','Jaluit'),(2096,133,'JEM','Jemo'),(2097,133,'KIL','Kili'),(2098,133,'KWJ','Kwajalein'),(2099,133,'LAE','Lae'),(2100,133,'LIB','Lib'),(2101,133,'LKP','Likiep'),(2102,133,'MJR','Majuro'),(2103,133,'MLP','Maloelap'),(2104,133,'MJT','Mejit'),(2105,133,'MIL','Mili'),(2106,133,'NMK','Namorik'),(2107,133,'NAM','Namu'),(2108,133,'RGL','Rongelap'),(2109,133,'RGK','Rongrik'),(2110,133,'TOK','Toke'),(2111,133,'UJA','Ujae'),(2112,133,'UJL','Ujelang'),(2113,133,'UTK','Utirik'),(2114,133,'WTH','Wotho'),(2115,133,'WTJ','Wotje'),(2116,135,'AD','Adrar'),(2117,135,'AS','Assaba'),(2118,135,'BR','Brakna'),(2119,135,'DN','Dakhlet Nouadhibou'),(2120,135,'GO','Gorgol'),(2121,135,'GM','Guidimaka'),(2122,135,'HC','Hodh Ech Chargui'),(2123,135,'HG','Hodh El Gharbi'),(2124,135,'IN','Inchiri'),(2125,135,'TA','Tagant'),(2126,135,'TZ','Tiris Zemmour'),(2127,135,'TR','Trarza'),(2128,135,'NO','Nouakchott'),(2129,136,'BR','Beau Bassin-Rose Hill'),(2130,136,'CU','Curepipe'),(2131,136,'PU','Port Louis'),(2132,136,'QB','Quatre Bornes'),(2133,136,'VP','Vacoas-Phoenix'),(2134,136,'AG','Agalega Islands'),(2135,136,'CC','Cargados Carajos Shoals (Saint B'),(2136,136,'RO','Rodrigues'),(2137,136,'BL','Black River'),(2138,136,'FL','Flacq'),(2139,136,'GP','Grand Port'),(2140,136,'MO','Moka'),(2141,136,'PA','Pamplemousses'),(2142,136,'PW','Plaines Wilhems'),(2143,136,'PL','Port Louis'),(2144,136,'RR','Riviere du Rempart'),(2145,136,'SA','Savanne'),(2146,138,'BN','Baja California Norte'),(2147,138,'BS','Baja California Sur'),(2148,138,'CA','Campeche'),(2149,138,'CI','Chiapas'),(2150,138,'CH','Chihuahua'),(2151,138,'CZ','Coahuila de Zaragoza'),(2152,138,'CL','Colima'),(2153,138,'DF','Distrito Federal'),(2154,138,'DU','Durango'),(2155,138,'GA','Guanajuato'),(2156,138,'GE','Guerrero'),(2157,138,'HI','Hidalgo'),(2158,138,'JA','Jalisco'),(2159,138,'ME','Mexico'),(2160,138,'MI','Michoacan de Ocampo'),(2161,138,'MO','Morelos'),(2162,138,'NA','Nayarit'),(2163,138,'NL','Nuevo Leon'),(2164,138,'OA','Oaxaca'),(2165,138,'PU','Puebla'),(2166,138,'QA','Queretaro de Arteaga'),(2167,138,'QR','Quintana Roo'),(2168,138,'SA','San Luis Potosi'),(2169,138,'SI','Sinaloa'),(2170,138,'SO','Sonora'),(2171,138,'TB','Tabasco'),(2172,138,'TM','Tamaulipas'),(2173,138,'TL','Tlaxcala'),(2174,138,'VE','Veracruz-Llave'),(2175,138,'YU','Yucatan'),(2176,138,'ZA','Zacatecas'),(2177,139,'C','Chuuk'),(2178,139,'K','Kosrae'),(2179,139,'P','Pohnpei'),(2180,139,'Y','Yap'),(2181,140,'GA','Gagauzia'),(2182,140,'CU','Chisinau'),(2183,140,'BA','Balti'),(2184,140,'CA','Cahul'),(2185,140,'ED','Edinet'),(2186,140,'LA','Lapusna'),(2187,140,'OR','Orhei'),(2188,140,'SO','Soroca'),(2189,140,'TI','Tighina'),(2190,140,'UN','Ungheni'),(2191,140,'SN','StÃƒÆ’Ã‚Â®nga Nistrului'),(2192,141,'FV','Fontvieille'),(2193,141,'LC','La Condamine'),(2194,141,'MV','Monaco-Ville'),(2195,141,'MC','Monte-Carlo'),(2196,142,'1','Ulanbaatar'),(2197,142,'035','Orhon'),(2198,142,'037','Darhan uul'),(2199,142,'039','Hentiy'),(2200,142,'041','Hovsgol'),(2201,142,'043','Hovd'),(2202,142,'046','Uvs'),(2203,142,'047','Tov'),(2204,142,'049','Selenge'),(2205,142,'051','Suhbaatar'),(2206,142,'053','Omnogovi'),(2207,142,'055','Ovorhangay'),(2208,142,'057','Dzavhan'),(2209,142,'059','DundgovL'),(2210,142,'061','Dornod'),(2211,142,'063','Dornogov'),(2212,142,'064','Govi-Sumber'),(2213,142,'065','Govi-Altay'),(2214,142,'067','Bulgan'),(2215,142,'069','Bayanhongor'),(2216,142,'071','Bayan-Olgiy'),(2217,142,'073','Arhangay'),(2218,143,'A','Saint Anthony'),(2219,143,'G','Saint Georges'),(2220,143,'P','Saint Peter'),(2221,144,'AGD','Agadir'),(2222,144,'HOC','Al Hoceima'),(2223,144,'AZI','Azilal'),(2224,144,'BME','Beni Mellal'),(2225,144,'BSL','Ben Slimane'),(2226,144,'BLM','Boulemane'),(2227,144,'CBL','Casablanca'),(2228,144,'CHA','Chaouen'),(2229,144,'EJA','El Jadida'),(2230,144,'EKS','El Kelaa des Sraghna'),(2231,144,'ERA','Er Rachidia'),(2232,144,'ESS','Essaouira'),(2233,144,'FES','Fes'),(2234,144,'FIG','Figuig'),(2235,144,'GLM','Guelmim'),(2236,144,'IFR','Ifrane'),(2237,144,'KEN','Kenitra'),(2238,144,'KHM','Khemisset'),(2239,144,'KHN','Khenifra'),(2240,144,'KHO','Khouribga'),(2241,144,'LYN','Laayoune'),(2242,144,'LAR','Larache'),(2243,144,'MRK','Marrakech'),(2244,144,'MKN','Meknes'),(2245,144,'NAD','Nador'),(2246,144,'ORZ','Ouarzazate'),(2247,144,'OUJ','Oujda'),(2248,144,'RSA','Rabat-Sale'),(2249,144,'SAF','Safi'),(2250,144,'SET','Settat'),(2251,144,'SKA','Sidi Kacem'),(2252,144,'TGR','Tangier'),(2253,144,'TAN','Tan-Tan'),(2254,144,'TAO','Taounate'),(2255,144,'TRD','Taroudannt'),(2256,144,'TAT','Tata'),(2257,144,'TAZ','Taza'),(2258,144,'TET','Tetouan'),(2259,144,'TIZ','Tiznit'),(2260,144,'ADK','Ad Dakhla'),(2261,144,'BJD','Boujdour'),(2262,144,'ESM','Es Smara'),(2263,145,'CD','Cabo Delgado'),(2264,145,'GZ','Gaza'),(2265,145,'IN','Inhambane'),(2266,145,'MN','Manica'),(2267,145,'MC','Maputo (city)'),(2268,145,'MP','Maputo'),(2269,145,'NA','Nampula'),(2270,145,'NI','Niassa'),(2271,145,'SO','Sofala'),(2272,145,'TE','Tete'),(2273,145,'ZA','Zambezia'),(2274,146,'AY','Ayeyarwady'),(2275,146,'BG','Bago'),(2276,146,'MG','Magway'),(2277,146,'MD','Mandalay'),(2278,146,'SG','Sagaing'),(2279,146,'TN','Tanintharyi'),(2280,146,'YG','Yangon'),(2281,146,'CH','Chin State'),(2282,146,'KC','Kachin State'),(2283,146,'KH','Kayah State'),(2284,146,'KN','Kayin State'),(2285,146,'MN','Mon State'),(2286,146,'RK','Rakhine State'),(2287,146,'SH','Shan State'),(2288,147,'CA','Caprivi'),(2289,147,'ER','Erongo'),(2290,147,'HA','Hardap'),(2291,147,'KR','Karas'),(2292,147,'KV','Kavango'),(2293,147,'KH','Khomas'),(2294,147,'KU','Kunene'),(2295,147,'OW','Ohangwena'),(2296,147,'OK','Omaheke'),(2297,147,'OT','Omusati'),(2298,147,'ON','Oshana'),(2299,147,'OO','Oshikoto'),(2300,147,'OJ','Otjozondjupa'),(2301,148,'AO','Aiwo'),(2302,148,'AA','Anabar'),(2303,148,'AT','Anetan'),(2304,148,'AI','Anibare'),(2305,148,'BA','Baiti'),(2306,148,'BO','Boe'),(2307,148,'BU','Buada'),(2308,148,'DE','Denigomodu'),(2309,148,'EW','Ewa'),(2310,148,'IJ','Ijuw'),(2311,148,'ME','Meneng'),(2312,148,'NI','Nibok'),(2313,148,'UA','Uaboe'),(2314,148,'YA','Yaren'),(2315,149,'BA','Bagmati'),(2316,149,'BH','Bheri'),(2317,149,'DH','Dhawalagiri'),(2318,149,'GA','Gandaki'),(2319,149,'JA','Janakpur'),(2320,149,'KA','Karnali'),(2321,149,'KO','Kosi'),(2322,149,'LU','Lumbini'),(2323,149,'MA','Mahakali'),(2324,149,'ME','Mechi'),(2325,149,'NA','Narayani'),(2326,149,'RA','Rapti'),(2327,149,'SA','Sagarmatha'),(2328,149,'SE','Seti'),(2329,150,'DR','Drenthe'),(2330,150,'FL','Flevoland'),(2331,150,'FR','Friesland'),(2332,150,'GE','Gelderland'),(2333,150,'GR','Groningen'),(2334,150,'LI','Limburg'),(2335,150,'NB','Noord Brabant'),(2336,150,'NH','Noord Holland'),(2337,150,'OV','Overijssel'),(2338,150,'UT','Utrecht'),(2339,150,'ZE','Zeeland'),(2340,150,'ZH','Zuid Holland'),(2341,152,'L','Iles Loyaute'),(2342,152,'N','Nord'),(2343,152,'S','Sud'),(2344,153,'AUK','Auckland'),(2345,153,'BOP','Bay of Plenty'),(2346,153,'CAN','Canterbury'),(2347,153,'COR','Coromandel'),(2348,153,'GIS','Gisborne'),(2349,153,'FIO','Fiordland'),(2350,153,'HKB','Hawke\'s Bay'),(2351,153,'MBH','Marlborough'),(2352,153,'MWT','Manawatu-Wanganui'),(2353,153,'MCM','Mt Cook-Mackenzie'),(2354,153,'NSN','Nelson'),(2355,153,'NTL','Northland'),(2356,153,'OTA','Otago'),(2357,153,'STL','Southland'),(2358,153,'TKI','Taranaki'),(2359,153,'WGN','Wellington'),(2360,153,'WKO','Waikato'),(2361,153,'WAI','Wairprarapa'),(2362,153,'WTC','West Coast'),(2363,154,'AN','Atlantico Norte'),(2364,154,'AS','Atlantico Sur'),(2365,154,'BO','Boaco'),(2366,154,'CA','Carazo'),(2367,154,'CI','Chinandega'),(2368,154,'CO','Chontales'),(2369,154,'ES','Esteli'),(2370,154,'GR','Granada'),(2371,154,'JI','Jinotega'),(2372,154,'LE','Leon'),(2373,154,'MD','Madriz'),(2374,154,'MN','Managua'),(2375,154,'MS','Masaya'),(2376,154,'MT','Matagalpa'),(2377,154,'NS','Nuevo Segovia'),(2378,154,'RS','Rio San Juan'),(2379,154,'RI','Rivas'),(2380,155,'AG','Agadez'),(2381,155,'DF','Diffa'),(2382,155,'DS','Dosso'),(2383,155,'MA','Maradi'),(2384,155,'NM','Niamey'),(2385,155,'TH','Tahoua'),(2386,155,'TL','Tillaberi'),(2387,155,'ZD','Zinder'),(2388,156,'AB','Abia'),(2389,156,'CT','Abuja Federal Capital Territory'),(2390,156,'AD','Adamawa'),(2391,156,'AK','Akwa Ibom'),(2392,156,'AN','Anambra'),(2393,156,'BC','Bauchi'),(2394,156,'BY','Bayelsa'),(2395,156,'BN','Benue'),(2396,156,'BO','Borno'),(2397,156,'CR','Cross River'),(2398,156,'DE','Delta'),(2399,156,'EB','Ebonyi'),(2400,156,'ED','Edo'),(2401,156,'EK','Ekiti'),(2402,156,'EN','Enugu'),(2403,156,'GO','Gombe'),(2404,156,'IM','Imo'),(2405,156,'JI','Jigawa'),(2406,156,'KD','Kaduna'),(2407,156,'KN','Kano'),(2408,156,'KT','Katsina'),(2409,156,'KE','Kebbi'),(2410,156,'KO','Kogi'),(2411,156,'KW','Kwara'),(2412,156,'LA','Lagos'),(2413,156,'NA','Nassarawa'),(2414,156,'NI','Niger'),(2415,156,'OG','Ogun'),(2416,156,'ONG','Ondo'),(2417,156,'OS','Osun'),(2418,156,'OY','Oyo'),(2419,156,'PL','Plateau'),(2420,156,'RI','Rivers'),(2421,156,'SO','Sokoto'),(2422,156,'TA','Taraba'),(2423,156,'YO','Yobe'),(2424,156,'ZA','Zamfara'),(2425,159,'N','Northern Islands'),(2426,159,'R','Rota'),(2427,159,'S','Saipan'),(2428,159,'T','Tinian'),(2429,160,'AK','Akershus'),(2430,160,'AA','Aust-Agder'),(2431,160,'BU','Buskerud'),(2432,160,'FM','Finnmark'),(2433,160,'HM','Hedmark'),(2434,160,'HL','Hordaland'),(2435,160,'MR','More og Romdal'),(2436,160,'NT','Nord-Trondelag'),(2437,160,'NL','Nordland'),(2438,160,'OF','Ostfold'),(2439,160,'OP','Oppland'),(2440,160,'OL','Oslo'),(2441,160,'RL','Rogaland'),(2442,160,'ST','Sor-Trondelag'),(2443,160,'SJ','Sogn og Fjordane'),(2444,160,'SV','Svalbard'),(2445,160,'TM','Telemark'),(2446,160,'TR','Troms'),(2447,160,'VA','Vest-Agder'),(2448,160,'VF','Vestfold'),(2449,161,'DA','Ad Dakhiliyah'),(2450,161,'BA','Al Batinah'),(2451,161,'WU','Al Wusta'),(2452,161,'SH','Ash Sharqiyah'),(2453,161,'ZA','Az Zahirah'),(2454,161,'MA','Masqat'),(2455,161,'MU','Musandam'),(2456,161,'ZU','Zufar'),(2457,162,'B','Balochistan'),(2458,162,'T','Federally Administered Tribal Ar'),(2459,162,'I','Islamabad Capital Territory'),(2460,162,'N','North-West Frontier'),(2461,162,'P','Punjab'),(2462,162,'S','Sindh'),(2463,163,'AM','Aimeliik'),(2464,163,'AR','Airai'),(2465,163,'AN','Angaur'),(2466,163,'HA','Hatohobei'),(2467,163,'KA','Kayangel'),(2468,163,'KO','Koror'),(2469,163,'ME','Melekeok'),(2470,163,'NA','Ngaraard'),(2471,163,'NG','Ngarchelong'),(2472,163,'ND','Ngardmau'),(2473,163,'NT','Ngatpang'),(2474,163,'NC','Ngchesar'),(2475,163,'NR','Ngeremlengui'),(2476,163,'NW','Ngiwal'),(2477,163,'PE','Peleliu'),(2478,163,'SO','Sonsorol'),(2479,164,'BT','Bocas del Toro'),(2480,164,'CH','Chiriqui'),(2481,164,'CC','Cocle'),(2482,164,'CL','Colon'),(2483,164,'DA','Darien'),(2484,164,'HE','Herrera'),(2485,164,'LS','Los Santos'),(2486,164,'PA','Panama'),(2487,164,'SB','San Blas'),(2488,164,'VG','Veraguas'),(2489,165,'BV','Bougainville'),(2490,165,'CE','Central'),(2491,165,'CH','Chimbu'),(2492,165,'EH','Eastern Highlands'),(2493,165,'EB','East New Britain'),(2494,165,'ES','East Sepik'),(2495,165,'EN','Enga'),(2496,165,'GU','Gulf'),(2497,165,'MD','Madang'),(2498,165,'MN','Manus'),(2499,165,'MB','Milne Bay'),(2500,165,'MR','Morobe'),(2501,165,'NC','National Capital'),(2502,165,'NI','New Ireland'),(2503,165,'NO','Northern'),(2504,165,'SA','Sandaun'),(2505,165,'SH','Southern Highlands'),(2506,165,'WE','Western'),(2507,165,'WH','Western Highlands'),(2508,165,'WB','West New Britain'),(2509,166,'AG','Alto Paraguay'),(2510,166,'AN','Alto Parana'),(2511,166,'AM','Amambay'),(2512,166,'AS','Asuncion'),(2513,166,'BO','Boqueron'),(2514,166,'CG','Caaguazu'),(2515,166,'CZ','Caazapa'),(2516,166,'CN','Canindeyu'),(2517,166,'CE','Central'),(2518,166,'CC','Concepcion'),(2519,166,'CD','Cordillera'),(2520,166,'GU','Guaira'),(2521,166,'IT','Itapua'),(2522,166,'MI','Misiones'),(2523,166,'NE','Neembucu'),(2524,166,'PA','Paraguari'),(2525,166,'PH','Presidente Hayes'),(2526,166,'SP','San Pedro'),(2527,167,'AM','Amazonas'),(2528,167,'AN','Ancash'),(2529,167,'AP','Apurimac'),(2530,167,'AR','Arequipa'),(2531,167,'AY','Ayacucho'),(2532,167,'CJ','Cajamarca'),(2533,167,'CL','Callao'),(2534,167,'CU','Cusco'),(2535,167,'HV','Huancavelica'),(2536,167,'HO','Huanuco'),(2537,167,'IC','Ica'),(2538,167,'JU','Junin'),(2539,167,'LD','La Libertad'),(2540,167,'LY','Lambayeque'),(2541,167,'LI','Lima'),(2542,167,'LO','Loreto'),(2543,167,'MD','Madre de Dios'),(2544,167,'MO','Moquegua'),(2545,167,'PA','Pasco'),(2546,167,'PI','Piura'),(2547,167,'PU','Puno'),(2548,167,'SM','San Martin'),(2549,167,'TA','Tacna'),(2550,167,'TU','Tumbes'),(2551,167,'UC','Ucayali'),(2552,168,'ABR','Abra'),(2553,168,'ANO','Agusan del Norte'),(2554,168,'ASU','Agusan del Sur'),(2555,168,'AKL','Aklan'),(2556,168,'ALB','Albay'),(2557,168,'ANT','Antique'),(2558,168,'APY','Apayao'),(2559,168,'AUR','Aurora'),(2560,168,'BAS','Basilan'),(2561,168,'BTA','Bataan'),(2562,168,'BTE','Batanes'),(2563,168,'BTG','Batangas'),(2564,168,'BLR','Biliran'),(2565,168,'BEN','Benguet'),(2566,168,'BOL','Bohol'),(2567,168,'BUK','Bukidnon'),(2568,168,'BUL','Bulacan'),(2569,168,'CAG','Cagayan'),(2570,168,'CNO','Camarines Norte'),(2571,168,'CSU','Camarines Sur'),(2572,168,'CAM','Camiguin'),(2573,168,'CAP','Capiz'),(2574,168,'CAT','Catanduanes'),(2575,168,'CAV','Cavite'),(2576,168,'CEB','Cebu'),(2577,168,'CMP','Compostela'),(2578,168,'DNO','Davao del Norte'),(2579,168,'DSU','Davao del Sur'),(2580,168,'DOR','Davao Oriental'),(2581,168,'ESA','Eastern Samar'),(2582,168,'GUI','Guimaras'),(2583,168,'IFU','Ifugao'),(2584,168,'INO','Ilocos Norte'),(2585,168,'ISU','Ilocos Sur'),(2586,168,'ILO','Iloilo'),(2587,168,'ISA','Isabela'),(2588,168,'KAL','Kalinga'),(2589,168,'LAG','Laguna'),(2590,168,'LNO','Lanao del Norte'),(2591,168,'LSU','Lanao del Sur'),(2592,168,'UNI','La Union'),(2593,168,'LEY','Leyte'),(2594,168,'MAG','Maguindanao'),(2595,168,'MRN','Marinduque'),(2596,168,'MSB','Masbate'),(2597,168,'MIC','Mindoro Occidental'),(2598,168,'MIR','Mindoro Oriental'),(2599,168,'MSC','Misamis Occidental'),(2600,168,'MOR','Misamis Oriental'),(2601,168,'MOP','Mountain'),(2602,168,'NOC','Negros Occidental'),(2603,168,'NOR','Negros Oriental'),(2604,168,'NCT','North Cotabato'),(2605,168,'NSM','Northern Samar'),(2606,168,'NEC','Nueva Ecija'),(2607,168,'NVZ','Nueva Vizcaya'),(2608,168,'PLW','Palawan'),(2609,168,'PMP','Pampanga'),(2610,168,'PNG','Pangasinan'),(2611,168,'QZN','Quezon'),(2612,168,'QRN','Quirino'),(2613,168,'RIZ','Rizal'),(2614,168,'ROM','Romblon'),(2615,168,'SMR','Samar'),(2616,168,'SRG','Sarangani'),(2617,168,'SQJ','Siquijor'),(2618,168,'SRS','Sorsogon'),(2619,168,'SCO','South Cotabato'),(2620,168,'SLE','Southern Leyte'),(2621,168,'SKU','Sultan Kudarat'),(2622,168,'SLU','Sulu'),(2623,168,'SNO','Surigao del Norte'),(2624,168,'SSU','Surigao del Sur'),(2625,168,'TAR','Tarlac'),(2626,168,'TAW','Tawi-Tawi'),(2627,168,'ZBL','Zambales'),(2628,168,'ZNO','Zamboanga del Norte'),(2629,168,'ZSU','Zamboanga del Sur'),(2630,168,'ZSI','Zamboanga Sibugay'),(2631,170,'DO','Dolnoslaskie'),(2632,170,'KP','Kujawsko-Pomorskie'),(2633,170,'LO','Lodzkie'),(2634,170,'LL','Lubelskie'),(2635,170,'LU','Lubuskie'),(2636,170,'ML','Malopolskie'),(2637,170,'MZ','Mazowieckie'),(2638,170,'OP','Opolskie'),(2639,170,'PP','Podkarpackie'),(2640,170,'PL','Podlaskie'),(2641,170,'PM','Pomorskie'),(2642,170,'SL','Slaskie'),(2643,170,'SW','Swietokrzyskie'),(2644,170,'WM','Warminsko-Mazurskie'),(2645,170,'WP','Wielkopolskie'),(2646,170,'ZA','Zachodniopomorskie'),(2647,198,'P','Saint Pierre'),(2648,198,'M','Miquelon'),(2649,171,'AC','AÃƒÆ’Ã‚Â§ores'),(2650,171,'AV','Aveiro'),(2651,171,'BE','Beja'),(2652,171,'BR','Braga'),(2653,171,'BA','BraganÃƒÆ’Ã‚Â§a'),(2654,171,'CB','Castelo Branco'),(2655,171,'CO','Coimbra'),(2656,171,'EV','ÃƒÆ’Ã‚Â©;vora'),(2657,171,'FA','Faro'),(2658,171,'GU','Guarda'),(2659,171,'LE','Leiria'),(2660,171,'LI','Lisboa'),(2661,171,'ME','Madeira'),(2662,171,'PO','Portalegre'),(2663,171,'PR','Porto'),(2664,171,'SA','SantarÃƒÆ’Ã‚Â©;m'),(2665,171,'SE','SetÃƒÆ’Ã‚Âºbal'),(2666,171,'VC','Viana do Castelo'),(2667,171,'VR','Vila Real'),(2668,171,'VI','Viseu'),(2669,173,'DW','Ad Dawhah'),(2670,173,'GW','Al Ghuwayriyah'),(2671,173,'JM','Al Jumayliyah'),(2672,173,'KR','Al Khawr'),(2673,173,'WK','Al Wakrah'),(2674,173,'RN','Ar Rayyan'),(2675,173,'JB','Jarayan al Batinah'),(2676,173,'MS','Madinat ash Shamal'),(2677,173,'UD','Umm Sa\'id'),(2678,173,'UL','Umm Salal'),(2679,175,'AB','Alba'),(2680,175,'AR','Arad'),(2681,175,'AG','Arges'),(2682,175,'BC','Bacau'),(2683,175,'BH','Bihor'),(2684,175,'BN','Bistrita-Nasaud'),(2685,175,'BT','Botosani'),(2686,175,'BV','Brasov'),(2687,175,'BR','Braila'),(2688,175,'B','Bucuresti'),(2689,175,'BZ','Buzau'),(2690,175,'CS','Caras-Severin'),(2691,175,'CL','Calarasi'),(2692,175,'CJ','Cluj'),(2693,175,'CT','Constanta'),(2694,175,'CV','Covasna'),(2695,175,'DB','Dimbovita'),(2696,175,'DJ','Dolj'),(2697,175,'GL','Galati'),(2698,175,'GR','Giurgiu'),(2699,175,'GJ','Gorj'),(2700,175,'HR','Harghita'),(2701,175,'HD','Hunedoara'),(2702,175,'IL','Ialomita'),(2703,175,'IS','Iasi'),(2704,175,'IF','Ilfov'),(2705,175,'MM','Maramures'),(2706,175,'MH','Mehedinti'),(2707,175,'MS','Mures'),(2708,175,'NT','Neamt'),(2709,175,'OT','Olt'),(2710,175,'PH','Prahova'),(2711,175,'SM','Satu-Mare'),(2712,175,'SJ','Salaj'),(2713,175,'SB','Sibiu'),(2714,175,'SV','Suceava'),(2715,175,'TR','Teleorman'),(2716,175,'TM','Timis'),(2717,175,'TL','Tulcea'),(2718,175,'VS','Vaslui'),(2719,175,'VL','Valcea'),(2720,175,'VN','Vrancea'),(2721,176,'AB','Abakan'),(2722,176,'AG','Aginskoye'),(2723,176,'AN','Anadyr'),(2724,176,'AR','Arkahangelsk'),(2725,176,'AS','Astrakhan'),(2726,176,'BA','Barnaul'),(2727,176,'BE','Belgorod'),(2728,176,'BI','Birobidzhan'),(2729,176,'BL','Blagoveshchensk'),(2730,176,'BR','Bryansk'),(2731,176,'CH','Cheboksary'),(2732,176,'CL','Chelyabinsk'),(2733,176,'CR','Cherkessk'),(2734,176,'CI','Chita'),(2735,176,'DU','Dudinka'),(2736,176,'EL','Elista'),(2737,176,'GO','Gomo-Altaysk'),(2738,176,'GA','Gorno-Altaysk'),(2739,176,'GR','Groznyy'),(2740,176,'IR','Irkutsk'),(2741,176,'IV','Ivanovo'),(2742,176,'IZ','Izhevsk'),(2743,176,'KA','Kalinigrad'),(2744,176,'KL','Kaluga'),(2745,176,'KS','Kasnodar'),(2746,176,'KZ','Kazan'),(2747,176,'KE','Kemerovo'),(2748,176,'KH','Khabarovsk'),(2749,176,'KM','Khanty-Mansiysk'),(2750,176,'KO','Kostroma'),(2751,176,'KR','Krasnodar'),(2752,176,'KN','Krasnoyarsk'),(2753,176,'KU','Kudymkar'),(2754,176,'KG','Kurgan'),(2755,176,'KK','Kursk'),(2756,176,'KY','Kyzyl'),(2757,176,'LI','Lipetsk'),(2758,176,'MA','Magadan'),(2759,176,'MK','Makhachkala'),(2760,176,'MY','Maykop'),(2761,176,'MO','Moscow'),(2762,176,'MU','Murmansk'),(2763,176,'NA','Nalchik'),(2764,176,'NR','Naryan Mar'),(2765,176,'NZ','Nazran'),(2766,176,'NI','Nizhniy Novgorod'),(2767,176,'NO','Novgorod'),(2768,176,'NV','Novosibirsk'),(2769,176,'OM','Omsk'),(2770,176,'OR','Orel'),(2771,176,'OE','Orenburg'),(2772,176,'PA','Palana'),(2773,176,'PE','Penza'),(2774,176,'PR','Perm'),(2775,176,'PK','Petropavlovsk-Kamchatskiy'),(2776,176,'PT','Petrozavodsk'),(2777,176,'PS','Pskov'),(2778,176,'RO','Rostov-na-Donu'),(2779,176,'RY','Ryazan'),(2780,176,'SL','Salekhard'),(2781,176,'SA','Samara'),(2782,176,'SR','Saransk'),(2783,176,'SV','Saratov'),(2784,176,'SM','Smolensk'),(2785,176,'SP','St. Petersburg'),(2786,176,'ST','Stavropol'),(2787,176,'SY','Syktyvkar'),(2788,176,'TA','Tambov'),(2789,176,'TO','Tomsk'),(2790,176,'TU','Tula'),(2791,176,'TR','Tura'),(2792,176,'TV','Tver'),(2793,176,'TY','Tyumen'),(2794,176,'UF','Ufa'),(2795,176,'UL','Ul\'yanovsk'),(2796,176,'UU','Ulan-Ude'),(2797,176,'US','Ust\'-Ordynskiy'),(2798,176,'VL','Vladikavkaz'),(2799,176,'VA','Vladimir'),(2800,176,'VV','Vladivostok'),(2801,176,'VG','Volgograd'),(2802,176,'VD','Vologda'),(2803,176,'VO','Voronezh'),(2804,176,'VY','Vyatka'),(2805,176,'YA','Yakutsk'),(2806,176,'YR','Yaroslavl'),(2807,176,'YE','Yekaterinburg'),(2808,176,'YO','Yoshkar-Ola'),(2809,177,'BU','Butare'),(2810,177,'BY','Byumba'),(2811,177,'CY','Cyangugu'),(2812,177,'GK','Gikongoro'),(2813,177,'GS','Gisenyi'),(2814,177,'GT','Gitarama'),(2815,177,'KG','Kibungo'),(2816,177,'KY','Kibuye'),(2817,177,'KR','Kigali Rurale'),(2818,177,'KV','Kigali-ville'),(2819,177,'RU','Ruhengeri'),(2820,177,'UM','Umutara'),(2821,178,'CCN','Christ Church Nichola Town'),(2822,178,'SAS','Saint Anne Sandy Point'),(2823,178,'SGB','Saint George Basseterre'),(2824,178,'SGG','Saint George Gingerland'),(2825,178,'SJW','Saint James Windward'),(2826,178,'SJC','Saint John Capesterre'),(2827,178,'SJF','Saint John Figtree'),(2828,178,'SMC','Saint Mary Cayon'),(2829,178,'CAP','Saint Paul Capesterre'),(2830,178,'CHA','Saint Paul Charlestown'),(2831,178,'SPB','Saint Peter Basseterre'),(2832,178,'STL','Saint Thomas Lowland'),(2833,178,'STM','Saint Thomas Middle Island'),(2834,178,'TPP','Trinity Palmetto Point'),(2835,179,'AR','Anse-la-Raye'),(2836,179,'CA','Castries'),(2837,179,'CH','Choiseul'),(2838,179,'DA','Dauphin'),(2839,179,'DE','Dennery'),(2840,179,'GI','Gros-Islet'),(2841,179,'LA','Laborie'),(2842,179,'MI','Micoud'),(2843,179,'PR','Praslin'),(2844,179,'SO','Soufriere'),(2845,179,'VF','Vieux-Fort'),(2846,180,'C','Charlotte'),(2847,180,'R','Grenadines'),(2848,180,'A','Saint Andrew'),(2849,180,'D','Saint David'),(2850,180,'G','Saint George'),(2851,180,'P','Saint Patrick'),(2852,181,'AN','A\'ana'),(2853,181,'AI','Aiga-i-le-Tai'),(2854,181,'AT','Atua'),(2855,181,'FA','Fa\'asaleleaga'),(2856,181,'GE','Gaga\'emauga'),(2857,181,'GF','Gagaifomauga'),(2858,181,'PA','Palauli'),(2859,181,'SA','Satupa\'itea'),(2860,181,'TU','Tuamasaga'),(2861,181,'VF','Va\'a-o-Fonoti'),(2862,181,'VS','Vaisigano'),(2863,182,'AC','Acquaviva'),(2864,182,'BM','Borgo Maggiore'),(2865,182,'CH','Chiesanuova'),(2866,182,'DO','Domagnano'),(2867,182,'FA','Faetano'),(2868,182,'FI','Fiorentino'),(2869,182,'MO','Montegiardino'),(2870,182,'SM','Citta di San Marino'),(2871,182,'SE','Serravalle'),(2872,183,'S','Sao Tome'),(2873,183,'P','Principe'),(2874,184,'BH','Al Bahah'),(2875,184,'HS','Al Hudud ash Shamaliyah'),(2876,184,'JF','Al Jawf'),(2877,184,'MD','Al Madinah'),(2878,184,'QS','Al Qasim'),(2879,184,'RD','Ar Riyad'),(2880,184,'AQ','Ash Sharqiyah (Eastern)'),(2881,184,'AS','\'Asir'),(2882,184,'HL','Ha\'il'),(2883,184,'JZ','Jizan'),(2884,184,'ML','Makkah'),(2885,184,'NR','Najran'),(2886,184,'TB','Tabuk'),(2887,185,'DA','Dakar'),(2888,185,'DI','Diourbel'),(2889,185,'FA','Fatick'),(2890,185,'KA','Kaolack'),(2891,185,'KO','Kolda'),(2892,185,'LO','Louga'),(2893,185,'MA','Matam'),(2894,185,'SL','Saint-Louis'),(2895,185,'TA','Tambacounda'),(2896,185,'TH','Thies'),(2897,185,'ZI','Ziguinchor'),(2898,186,'AP','Anse aux Pins'),(2899,186,'AB','Anse Boileau'),(2900,186,'AE','Anse Etoile'),(2901,186,'AL','Anse Louis'),(2902,186,'AR','Anse Royale'),(2903,186,'BL','Baie Lazare'),(2904,186,'BS','Baie Sainte Anne'),(2905,186,'BV','Beau Vallon'),(2906,186,'BA','Bel Air'),(2907,186,'BO','Bel Ombre'),(2908,186,'CA','Cascade'),(2909,186,'GL','Glacis'),(2910,186,'GM','Grand\' Anse (on Mahe)'),(2911,186,'GP','Grand\' Anse (on Praslin)'),(2912,186,'DG','La Digue'),(2913,186,'RA','La Riviere Anglaise'),(2914,186,'MB','Mont Buxton'),(2915,186,'MF','Mont Fleuri'),(2916,186,'PL','Plaisance'),(2917,186,'PR','Pointe La Rue'),(2918,186,'PG','Port Glaud'),(2919,186,'SL','Saint Louis'),(2920,186,'TA','Takamaka'),(2921,187,'E','Eastern'),(2922,187,'N','Northern'),(2923,187,'S','Southern'),(2924,187,'W','Western'),(2925,189,'BA','Banskobystricky'),(2926,189,'BR','Bratislavsky'),(2927,189,'KO','Kosicky'),(2928,189,'NI','Nitriansky'),(2929,189,'PR','Presovsky'),(2930,189,'TC','Trenciansky'),(2931,189,'TV','Trnavsky'),(2932,189,'ZI','Zilinsky'),(2933,191,'CE','Central'),(2934,191,'CH','Choiseul'),(2935,191,'GC','Guadalcanal'),(2936,191,'HO','Honiara'),(2937,191,'IS','Isabel'),(2938,191,'MK','Makira'),(2939,191,'ML','Malaita'),(2940,191,'RB','Rennell and Bellona'),(2941,191,'TM','Temotu'),(2942,191,'WE','Western'),(2943,192,'AW','Awdal'),(2944,192,'BK','Bakool'),(2945,192,'BN','Banaadir'),(2946,192,'BR','Bari'),(2947,192,'BY','Bay'),(2948,192,'GA','Galguduud'),(2949,192,'GE','Gedo'),(2950,192,'HI','Hiiraan'),(2951,192,'JD','Jubbada Dhexe'),(2952,192,'JH','Jubbada Hoose'),(2953,192,'MU','Mudug'),(2954,192,'NU','Nugaal'),(2955,192,'SA','Sanaag'),(2956,192,'SD','Shabeellaha Dhexe'),(2957,192,'SH','Shabeellaha Hoose'),(2958,192,'SL','Sool'),(2959,192,'TO','Togdheer'),(2960,192,'WG','Woqooyi Galbeed'),(2961,193,'EC','Eastern Cape'),(2962,193,'FS','Free State'),(2963,193,'GT','Gauteng'),(2964,193,'KN','KwaZulu-Natal'),(2965,193,'LP','Limpopo'),(2966,193,'MP','Mpumalanga'),(2967,193,'NW','North West'),(2968,193,'NC','Northern Cape'),(2969,193,'WC','Western Cape'),(2970,195,'CA','A CoruÃƒÆ’Ã‚Â±a'),(2971,195,'AL','ÃƒÆ’Ã‚Âlava'),(2972,195,'AB','Albacete'),(2973,195,'AC','Alicante'),(2974,195,'AM','Almeria'),(2975,195,'AS','Asturias'),(2976,195,'AV','ÃƒÆ’Ã‚Âvila'),(2977,195,'BJ','Badajoz'),(2978,195,'IB','Baleares'),(2979,195,'BA','Barcelona'),(2980,195,'BU','Burgos'),(2981,195,'CC','CÃƒÆ’Ã‚Â¡ceres'),(2982,195,'CZ','CÃƒÆ’Ã‚Â¡diz'),(2983,195,'CT','Cantabria'),(2984,195,'CL','CastellÃƒÆ’Ã‚Â³n'),(2985,195,'CE','Ceuta'),(2986,195,'CR','Ciudad Real'),(2987,195,'CD','CÃƒÆ’Ã‚Â³rdoba'),(2988,195,'CU','Cuenca'),(2989,195,'GI','Girona'),(2990,195,'GD','Granada'),(2991,195,'GJ','Guadalajara'),(2992,195,'GP','GuipÃƒÆ’Ã‚Âºzcoa'),(2993,195,'HL','Huelva'),(2994,195,'HS','Huesca'),(2995,195,'JN','JaÃƒÆ’Ã‚Â©n'),(2996,195,'RJ','La Rioja'),(2997,195,'PM','Las Palmas'),(2998,195,'LE','Leon'),(2999,195,'LL','Lleida'),(3000,195,'LG','Lugo'),(3001,195,'MD','Madrid'),(3002,195,'MA','Malaga'),(3003,195,'ML','Melilla'),(3004,195,'MU','Murcia'),(3005,195,'NV','Navarra'),(3006,195,'OU','Ourense'),(3007,195,'PL','Palencia'),(3008,195,'PO','Pontevedra'),(3009,195,'SL','Salamanca'),(3010,195,'SC','Santa Cruz de Tenerife'),(3011,195,'SG','Segovia'),(3012,195,'SV','Sevilla'),(3013,195,'SO','Soria'),(3014,195,'TA','Tarragona'),(3015,195,'TE','Teruel'),(3016,195,'TO','Toledo'),(3017,195,'VC','Valencia'),(3018,195,'VD','Valladolid'),(3019,195,'VZ','Vizcaya'),(3020,195,'ZM','Zamora'),(3021,195,'ZR','Zaragoza'),(3022,196,'CE','Central'),(3023,196,'EA','Eastern'),(3024,196,'NC','North Central'),(3025,196,'NO','Northern'),(3026,196,'NW','North Western'),(3027,196,'SA','Sabaragamuwa'),(3028,196,'SO','Southern'),(3029,196,'UV','Uva'),(3030,196,'WE','Western'),(3031,197,'A','Ascension'),(3032,197,'S','Saint Helena'),(3033,197,'T','Tristan da Cunha'),(3034,199,'ANL','A\'ali an Nil'),(3035,199,'BAM','Al Bahr al Ahmar'),(3036,199,'BRT','Al Buhayrat'),(3037,199,'JZR','Al Jazirah'),(3038,199,'KRT','Al Khartum'),(3039,199,'QDR','Al Qadarif'),(3040,199,'WDH','Al Wahdah'),(3041,199,'ANB','An Nil al Abyad'),(3042,199,'ANZ','An Nil al Azraq'),(3043,199,'ASH','Ash Shamaliyah'),(3044,199,'BJA','Bahr al Jabal'),(3045,199,'GIS','Gharb al Istiwa\'iyah'),(3046,199,'GBG','Gharb Bahr al Ghazal'),(3047,199,'GDA','Gharb Darfur'),(3048,199,'GKU','Gharb Kurdufan'),(3049,199,'JDA','Janub Darfur'),(3050,199,'JKU','Janub Kurdufan'),(3051,199,'JQL','Junqali'),(3052,199,'KSL','Kassala'),(3053,199,'NNL','Nahr an Nil'),(3054,199,'SBG','Shamal Bahr al Ghazal'),(3055,199,'SDA','Shamal Darfur'),(3056,199,'SKU','Shamal Kurdufan'),(3057,199,'SIS','Sharq al Istiwa\'iyah'),(3058,199,'SNR','Sinnar'),(3059,199,'WRB','Warab'),(3060,200,'BR','Brokopondo'),(3061,200,'CM','Commewijne'),(3062,200,'CR','Coronie'),(3063,200,'MA','Marowijne'),(3064,200,'NI','Nickerie'),(3065,200,'PA','Para'),(3066,200,'PM','Paramaribo'),(3067,200,'SA','Saramacca'),(3068,200,'SI','Sipaliwini'),(3069,200,'WA','Wanica'),(3070,202,'H','Hhohho'),(3071,202,'L','Lubombo'),(3072,202,'M','Manzini'),(3073,202,'S','Shishelweni'),(3074,203,'K','Blekinge'),(3075,203,'W','Dalama'),(3076,203,'X','GÃƒÆ’Ã‚Â¤vleborg'),(3077,203,'I','Gotland'),(3078,203,'N','Halland'),(3079,203,'Z','JÃƒÆ’Ã‚Â¤mtland'),(3080,203,'F','JÃƒÆ’Ã‚Â¶nkping'),(3081,203,'H','Kalmar'),(3082,203,'G','Kronoberg'),(3083,203,'BD','Norrbotten'),(3084,203,'T','ÃƒÆ’Ã¢â‚¬â€œrebro'),(3085,203,'E','ÃƒÆ’Ã¢â‚¬â€œstergÃƒÆ’Ã‚Â¶tland'),(3086,203,'M','SkÃƒÆ’Ã‚Â¥ne'),(3087,203,'D','SÃƒÆ’Ã‚Â¶dermanland'),(3088,203,'AB','Stockholm'),(3089,203,'C','Uppsala'),(3090,203,'S','VÃƒÆ’Ã‚Â¤rmland'),(3091,203,'AC','VÃƒÆ’Ã‚Â¤sterbotten'),(3092,203,'Y','VÃƒÆ’Ã‚Â¤sternorrland'),(3093,203,'U','VÃƒÆ’Ã‚Â¤stmanland'),(3094,203,'O','VÃƒÆ’Ã‚Â¤stra GÃƒÆ’Ã‚Â¶taland'),(3095,204,'AG','Aargau'),(3096,204,'AR','Appenzell Ausserrhoden'),(3097,204,'AI','Appenzell Innerrhoden'),(3098,204,'BS','Basel-Stadt'),(3099,204,'BL','Basel-Landschaft'),(3100,204,'BE','Bern'),(3101,204,'FR','Fribourg'),(3102,204,'GE','GenÃƒÆ’Ã‚Â¨ve'),(3103,204,'GL','Glarus'),(3104,204,'GR','GraubÃƒÆ’Ã‚Â¼nden'),(3105,204,'JU','Jura'),(3106,204,'LU','Luzern'),(3107,204,'NE','NeuchÃƒÆ’Ã‚Â¢tel'),(3108,204,'NW','Nidwald'),(3109,204,'OW','Obwald'),(3110,204,'SG','St. Gallen'),(3111,204,'SH','Schaffhausen'),(3112,204,'SZ','Schwyz'),(3113,204,'SO','Solothurn'),(3114,204,'TG','Thurgau'),(3115,204,'TI','Ticino'),(3116,204,'UR','Uri'),(3117,204,'VS','Valais'),(3118,204,'VD','Vaud'),(3119,204,'ZG','Zug'),(3120,204,'ZH','ZÃƒÆ’Ã‚Â¼rich'),(3121,205,'HA','Al Hasakah'),(3122,205,'LA','Al Ladhiqiyah'),(3123,205,'QU','Al Qunaytirah'),(3124,205,'RQ','Ar Raqqah'),(3125,205,'SU','As Suwayda'),(3126,205,'DA','Dara'),(3127,205,'DZ','Dayr az Zawr'),(3128,205,'DI','Dimashq'),(3129,205,'HL','Halab'),(3130,205,'HM','Hamah'),(3131,205,'HI','Hims'),(3132,205,'ID','Idlib'),(3133,205,'RD','Rif Dimashq'),(3134,205,'TA','Tartus'),(3135,206,'CH','Chang-hua'),(3136,206,'CI','Chia-i'),(3137,206,'HS','Hsin-chu'),(3138,206,'HL','Hua-lien'),(3139,206,'IL','I-lan'),(3140,206,'KH','Kao-hsiung county'),(3141,206,'KM','Kin-men'),(3142,206,'LC','Lien-chiang'),(3143,206,'ML','Miao-li'),(3144,206,'NT','Nan-t\'ou'),(3145,206,'PH','P\'eng-hu'),(3146,206,'PT','P\'ing-tung'),(3147,206,'TG','T\'ai-chung'),(3148,206,'TA','T\'ai-nan'),(3149,206,'TP','T\'ai-pei county'),(3150,206,'TT','T\'ai-tung'),(3151,206,'TY','T\'ao-yuan'),(3152,206,'YL','Yun-lin'),(3153,206,'CC','Chia-i city'),(3154,206,'CL','Chi-lung'),(3155,206,'HC','Hsin-chu'),(3156,206,'TH','T\'ai-chung'),(3157,206,'TN','T\'ai-nan'),(3158,206,'KC','Kao-hsiung city'),(3159,206,'TC','T\'ai-pei city'),(3160,207,'GB','Gorno-Badakhstan'),(3161,207,'KT','Khatlon'),(3162,207,'SU','Sughd'),(3163,208,'AR','Arusha'),(3164,208,'DS','Dar es Salaam'),(3165,208,'DO','Dodoma'),(3166,208,'IR','Iringa'),(3167,208,'KA','Kagera'),(3168,208,'KI','Kigoma'),(3169,208,'KJ','Kilimanjaro'),(3170,208,'LN','Lindi'),(3171,208,'MY','Manyara'),(3172,208,'MR','Mara'),(3173,208,'MB','Mbeya'),(3174,208,'MO','Morogoro'),(3175,208,'MT','Mtwara'),(3176,208,'MW','Mwanza'),(3177,208,'PN','Pemba North'),(3178,208,'PS','Pemba South'),(3179,208,'PW','Pwani'),(3180,208,'RK','Rukwa'),(3181,208,'RV','Ruvuma'),(3182,208,'SH','Shinyanga'),(3183,208,'SI','Singida'),(3184,208,'TB','Tabora'),(3185,208,'TN','Tanga'),(3186,208,'ZC','Zanzibar Central/South'),(3187,208,'ZN','Zanzibar North'),(3188,208,'ZU','Zanzibar Urban/West'),(3189,209,'Amnat Charoen','Amnat Charoen'),(3190,209,'Ang Thong','Ang Thong'),(3191,209,'Ayutthaya','Ayutthaya'),(3192,209,'Bangkok','Bangkok'),(3193,209,'Buriram','Buriram'),(3194,209,'Chachoengsao','Chachoengsao'),(3195,209,'Chai Nat','Chai Nat'),(3196,209,'Chaiyaphum','Chaiyaphum'),(3197,209,'Chanthaburi','Chanthaburi'),(3198,209,'Chiang Mai','Chiang Mai'),(3199,209,'Chiang Rai','Chiang Rai'),(3200,209,'Chon Buri','Chon Buri'),(3201,209,'Chumphon','Chumphon'),(3202,209,'Kalasin','Kalasin'),(3203,209,'Kamphaeng Phet','Kamphaeng Phet'),(3204,209,'Kanchanaburi','Kanchanaburi'),(3205,209,'Khon Kaen','Khon Kaen'),(3206,209,'Krabi','Krabi'),(3207,209,'Lampang','Lampang'),(3208,209,'Lamphun','Lamphun'),(3209,209,'Loei','Loei'),(3210,209,'Lop Buri','Lop Buri'),(3211,209,'Mae Hong Son','Mae Hong Son'),(3212,209,'Maha Sarakham','Maha Sarakham'),(3213,209,'Mukdahan','Mukdahan'),(3214,209,'Nakhon Nayok','Nakhon Nayok'),(3215,209,'Nakhon Pathom','Nakhon Pathom'),(3216,209,'Nakhon Phanom','Nakhon Phanom'),(3217,209,'Nakhon Ratchasima','Nakhon Ratchasima'),(3218,209,'Nakhon Sawan','Nakhon Sawan'),(3219,209,'Nakhon Si Thammarat','Nakhon Si Thammarat'),(3220,209,'Nan','Nan'),(3221,209,'Narathiwat','Narathiwat'),(3222,209,'Nong Bua Lamphu','Nong Bua Lamphu'),(3223,209,'Nong Khai','Nong Khai'),(3224,209,'Nonthaburi','Nonthaburi'),(3225,209,'Pathum Thani','Pathum Thani'),(3226,209,'Pattani','Pattani'),(3227,209,'Phangnga','Phangnga'),(3228,209,'Phatthalung','Phatthalung'),(3229,209,'Phayao','Phayao'),(3230,209,'Phetchabun','Phetchabun'),(3231,209,'Phetchaburi','Phetchaburi'),(3232,209,'Phichit','Phichit'),(3233,209,'Phitsanulok','Phitsanulok'),(3234,209,'Phrae','Phrae'),(3235,209,'Phuket','Phuket'),(3236,209,'Prachin Buri','Prachin Buri'),(3237,209,'Prachuap Khiri Khan','Prachuap Khiri Khan'),(3238,209,'Ranong','Ranong'),(3239,209,'Ratchaburi','Ratchaburi'),(3240,209,'Rayong','Rayong'),(3241,209,'Roi Et','Roi Et'),(3242,209,'Sa Kaeo','Sa Kaeo'),(3243,209,'Sakon Nakhon','Sakon Nakhon'),(3244,209,'Samut Prakan','Samut Prakan'),(3245,209,'Samut Sakhon','Samut Sakhon'),(3246,209,'Samut Songkhram','Samut Songkhram'),(3247,209,'Sara Buri','Sara Buri'),(3248,209,'Satun','Satun'),(3249,209,'Sing Buri','Sing Buri'),(3250,209,'Sisaket','Sisaket'),(3251,209,'Songkhla','Songkhla'),(3252,209,'Sukhothai','Sukhothai'),(3253,209,'Suphan Buri','Suphan Buri'),(3254,209,'Surat Thani','Surat Thani'),(3255,209,'Surin','Surin'),(3256,209,'Tak','Tak'),(3257,209,'Trang','Trang'),(3258,209,'Trat','Trat'),(3259,209,'Ubon Ratchathani','Ubon Ratchathani'),(3260,209,'Udon Thani','Udon Thani'),(3261,209,'Uthai Thani','Uthai Thani'),(3262,209,'Uttaradit','Uttaradit'),(3263,209,'Yala','Yala'),(3264,209,'Yasothon','Yasothon'),(3265,210,'K','Kara'),(3266,210,'P','Plateaux'),(3267,210,'S','Savanes'),(3268,210,'C','Centrale'),(3269,210,'M','Maritime'),(3270,211,'A','Atafu'),(3271,211,'F','Fakaofo'),(3272,211,'N','Nukunonu'),(3273,212,'H','Ha\'apai'),(3274,212,'T','Tongatapu'),(3275,212,'V','Vava\'u'),(3276,213,'CT','Couva/Tabaquite/Talparo'),(3277,213,'DM','Diego Martin'),(3278,213,'MR','Mayaro/Rio Claro'),(3279,213,'PD','Penal/Debe'),(3280,213,'PT','Princes Town'),(3281,213,'SG','Sangre Grande'),(3282,213,'SL','San Juan/Laventille'),(3283,213,'SI','Siparia'),(3284,213,'TP','Tunapuna/Piarco'),(3285,213,'PS','Port of Spain'),(3286,213,'SF','San Fernando'),(3287,213,'AR','Arima'),(3288,213,'PF','Point Fortin'),(3289,213,'CH','Chaguanas'),(3290,213,'TO','Tobago'),(3291,214,'AR','Ariana'),(3292,214,'BJ','Beja'),(3293,214,'BA','Ben Arous'),(3294,214,'BI','Bizerte'),(3295,214,'GB','Gabes'),(3296,214,'GF','Gafsa'),(3297,214,'JE','Jendouba'),(3298,214,'KR','Kairouan'),(3299,214,'KS','Kasserine'),(3300,214,'KB','Kebili'),(3301,214,'KF','Kef'),(3302,214,'MH','Mahdia'),(3303,214,'MN','Manouba'),(3304,214,'ME','Medenine'),(3305,214,'MO','Monastir'),(3306,214,'NA','Nabeul'),(3307,214,'SF','Sfax'),(3308,214,'SD','Sidi'),(3309,214,'SL','Siliana'),(3310,214,'SO','Sousse'),(3311,214,'TA','Tataouine'),(3312,214,'TO','Tozeur'),(3313,214,'TU','Tunis'),(3314,214,'ZA','Zaghouan'),(3315,215,'ADA','Adana'),(3316,215,'ADI','Adiyaman'),(3317,215,'AFY','Afyonkarahisar'),(3318,215,'AGR','Agri'),(3319,215,'AKS','Aksaray'),(3320,215,'AMA','Amasya'),(3321,215,'ANK','Ankara'),(3322,215,'ANT','Antalya'),(3323,215,'ARD','Ardahan'),(3324,215,'ART','Artvin'),(3325,215,'AYI','Aydin'),(3326,215,'BAL','Balikesir'),(3327,215,'BAR','Bartin'),(3328,215,'BAT','Batman'),(3329,215,'BAY','Bayburt'),(3330,215,'BIL','Bilecik'),(3331,215,'BIN','Bingol'),(3332,215,'BIT','Bitlis'),(3333,215,'BOL','Bolu'),(3334,215,'BRD','Burdur'),(3335,215,'BRS','Bursa'),(3336,215,'CKL','Canakkale'),(3337,215,'CKR','Cankiri'),(3338,215,'COR','Corum'),(3339,215,'DEN','Denizli'),(3340,215,'DIY','Diyarbakir'),(3341,215,'DUZ','Duzce'),(3342,215,'EDI','Edirne'),(3343,215,'ELA','Elazig'),(3344,215,'EZC','Erzincan'),(3345,215,'EZR','Erzurum'),(3346,215,'ESK','Eskisehir'),(3347,215,'GAZ','Gaziantep'),(3348,215,'GIR','Giresun'),(3349,215,'GMS','Gumushane'),(3350,215,'HKR','Hakkari'),(3351,215,'HTY','Hatay'),(3352,215,'IGD','Igdir'),(3353,215,'ISP','Isparta'),(3354,215,'IST','Istanbul'),(3355,215,'IZM','Izmir'),(3356,215,'KAH','Kahramanmaras'),(3357,215,'KRB','Karabuk'),(3358,215,'KRM','Karaman'),(3359,215,'KRS','Kars'),(3360,215,'KAS','Kastamonu'),(3361,215,'KAY','Kayseri'),(3362,215,'KLS','Kilis'),(3363,215,'KRK','Kirikkale'),(3364,215,'KLR','Kirklareli'),(3365,215,'KRH','Kirsehir'),(3366,215,'KOC','Kocaeli'),(3367,215,'KON','Konya'),(3368,215,'KUT','Kutahya'),(3369,215,'MAL','Malatya'),(3370,215,'MAN','Manisa'),(3371,215,'MAR','Mardin'),(3372,215,'MER','Mersin'),(3373,215,'MUG','Mugla'),(3374,215,'MUS','Mus'),(3375,215,'NEV','Nevsehir'),(3376,215,'NIG','Nigde'),(3377,215,'ORD','Ordu'),(3378,215,'OSM','Osmaniye'),(3379,215,'RIZ','Rize'),(3380,215,'SAK','Sakarya'),(3381,215,'SAM','Samsun'),(3382,215,'SAN','Sanliurfa'),(3383,215,'SII','Siirt'),(3384,215,'SIN','Sinop'),(3385,215,'SIR','Sirnak'),(3386,215,'SIV','Sivas'),(3387,215,'TEL','Tekirdag'),(3388,215,'TOK','Tokat'),(3389,215,'TRA','Trabzon'),(3390,215,'TUN','Tunceli'),(3391,215,'USK','Usak'),(3392,215,'VAN','Van'),(3393,215,'YAL','Yalova'),(3394,215,'YOZ','Yozgat'),(3395,215,'ZON','Zonguldak'),(3396,216,'A','Ahal Welayaty'),(3397,216,'B','Balkan Welayaty'),(3398,216,'D','Dashhowuz Welayaty'),(3399,216,'L','Lebap Welayaty'),(3400,216,'M','Mary Welayaty'),(3401,217,'AC','Ambergris Cays'),(3402,217,'DC','Dellis Cay'),(3403,217,'FC','French Cay'),(3404,217,'LW','Little Water Cay'),(3405,217,'RC','Parrot Cay'),(3406,217,'PN','Pine Cay'),(3407,217,'SL','Salt Cay'),(3408,217,'GT','Grand Turk'),(3409,217,'SC','South Caicos'),(3410,217,'EC','East Caicos'),(3411,217,'MC','Middle Caicos'),(3412,217,'NC','North Caicos'),(3413,217,'PR','Providenciales'),(3414,217,'WC','West Caicos'),(3415,218,'NMG','Nanumanga'),(3416,218,'NLK','Niulakita'),(3417,218,'NTO','Niutao'),(3418,218,'FUN','Funafuti'),(3419,218,'NME','Nanumea'),(3420,218,'NUI','Nui'),(3421,218,'NFT','Nukufetau'),(3422,218,'NLL','Nukulaelae'),(3423,218,'VAI','Vaitupu'),(3424,219,'KAL','Kalangala'),(3425,219,'KMP','Kampala'),(3426,219,'KAY','Kayunga'),(3427,219,'KIB','Kiboga'),(3428,219,'LUW','Luwero'),(3429,219,'MAS','Masaka'),(3430,219,'MPI','Mpigi'),(3431,219,'MUB','Mubende'),(3432,219,'MUK','Mukono'),(3433,219,'NKS','Nakasongola'),(3434,219,'RAK','Rakai'),(3435,219,'SEM','Sembabule'),(3436,219,'WAK','Wakiso'),(3437,219,'BUG','Bugiri'),(3438,219,'BUS','Busia'),(3439,219,'IGA','Iganga'),(3440,219,'JIN','Jinja'),(3441,219,'KAB','Kaberamaido'),(3442,219,'KML','Kamuli'),(3443,219,'KPC','Kapchorwa'),(3444,219,'KTK','Katakwi'),(3445,219,'KUM','Kumi'),(3446,219,'MAY','Mayuge'),(3447,219,'MBA','Mbale'),(3448,219,'PAL','Pallisa'),(3449,219,'SIR','Sironko'),(3450,219,'SOR','Soroti'),(3451,219,'TOR','Tororo'),(3452,219,'ADJ','Adjumani'),(3453,219,'APC','Apac'),(3454,219,'ARU','Arua'),(3455,219,'GUL','Gulu'),(3456,219,'KIT','Kitgum'),(3457,219,'KOT','Kotido'),(3458,219,'LIR','Lira'),(3459,219,'MRT','Moroto'),(3460,219,'MOY','Moyo'),(3461,219,'NAK','Nakapiripirit'),(3462,219,'NEB','Nebbi'),(3463,219,'PAD','Pader'),(3464,219,'YUM','Yumbe'),(3465,219,'BUN','Bundibugyo'),(3466,219,'BSH','Bushenyi'),(3467,219,'HOI','Hoima'),(3468,219,'KBL','Kabale'),(3469,219,'KAR','Kabarole'),(3470,219,'KAM','Kamwenge'),(3471,219,'KAN','Kanungu'),(3472,219,'KAS','Kasese'),(3473,219,'KBA','Kibaale'),(3474,219,'KIS','Kisoro'),(3475,219,'KYE','Kyenjojo'),(3476,219,'MSN','Masindi'),(3477,219,'MBR','Mbarara'),(3478,219,'NTU','Ntungamo'),(3479,219,'RUK','Rukungiri'),(3480,220,'CK','Cherkasy'),(3481,220,'CH','Chernihiv'),(3482,220,'CV','Chernivtsi'),(3483,220,'CR','Crimea'),(3484,220,'DN','Dnipropetrovs\'k'),(3485,220,'DO','Donets\'k'),(3486,220,'IV','Ivano-Frankivs\'k'),(3487,220,'KL','Kharkiv Kherson'),(3488,220,'KM','Khmel\'nyts\'kyy'),(3489,220,'KR','Kirovohrad'),(3490,220,'KV','Kiev'),(3491,220,'KY','Kyyiv'),(3492,220,'LU','Luhans\'k'),(3493,220,'LV','L\'viv'),(3494,220,'MY','Mykolayiv'),(3495,220,'OD','Odesa'),(3496,220,'PO','Poltava'),(3497,220,'RI','Rivne'),(3498,220,'SE','Sevastopol'),(3499,220,'SU','Sumy'),(3500,220,'TE','Ternopil\''),(3501,220,'VI','Vinnytsya'),(3502,220,'VO','Volyn\''),(3503,220,'ZK','Zakarpattya'),(3504,220,'ZA','Zaporizhzhya'),(3505,220,'ZH','Zhytomyr'),(3506,221,'AZ','Abu Zaby'),(3507,221,'AJ','\'Ajman'),(3508,221,'FU','Al Fujayrah'),(3509,221,'SH','Ash Shariqah'),(3510,221,'DU','Dubayy'),(3511,221,'RK','R\'as al Khaymah'),(3512,221,'UQ','Umm al Qaywayn'),(3513,222,'ABN','Aberdeen'),(3514,222,'ABNS','Aberdeenshire'),(3515,222,'ANG','Anglesey'),(3516,222,'AGS','Angus'),(3517,222,'ARY','Argyll and Bute'),(3518,222,'BEDS','Bedfordshire'),(3519,222,'BERKS','Berkshire'),(3520,222,'BLA','Blaenau Gwent'),(3521,222,'BRI','Bridgend'),(3522,222,'BSTL','Bristol'),(3523,222,'BUCKS','Buckinghamshire'),(3524,222,'CAE','Caerphilly'),(3525,222,'CAMBS','Cambridgeshire'),(3526,222,'CDF','Cardiff'),(3527,222,'CARM','Carmarthenshire'),(3528,222,'CDGN','Ceredigion'),(3529,222,'CHES','Cheshire'),(3530,222,'CLACK','Clackmannanshire'),(3531,222,'CON','Conwy'),(3532,222,'CORN','Cornwall'),(3533,222,'DNBG','Denbighshire'),(3534,222,'DERBY','Derbyshire'),(3535,222,'DVN','Devon'),(3536,222,'DOR','Dorset'),(3537,222,'DGL','Dumfries and Galloway'),(3538,222,'DUND','Dundee'),(3539,222,'DHM','Durham'),(3540,222,'ARYE','East Ayrshire'),(3541,222,'DUNBE','East Dunbartonshire'),(3542,222,'LOTE','East Lothian'),(3543,222,'RENE','East Renfrewshire'),(3544,222,'ERYS','East Riding of Yorkshire'),(3545,222,'SXE','East Sussex'),(3546,222,'EDIN','Edinburgh'),(3547,222,'ESX','Essex'),(3548,222,'FALK','Falkirk'),(3549,222,'FFE','Fife'),(3550,222,'FLINT','Flintshire'),(3551,222,'GLAS','Glasgow'),(3552,222,'GLOS','Gloucestershire'),(3553,222,'LDN','Greater London'),(3554,222,'MCH','Greater Manchester'),(3555,222,'GDD','Gwynedd'),(3556,222,'HANTS','Hampshire'),(3557,222,'HWR','Herefordshire'),(3558,222,'HERTS','Hertfordshire'),(3559,222,'HLD','Highlands'),(3560,222,'IVER','Inverclyde'),(3561,222,'IOW','Isle of Wight'),(3562,222,'KNT','Kent'),(3563,222,'LANCS','Lancashire'),(3564,222,'LEICS','Leicestershire'),(3565,222,'LINCS','Lincolnshire'),(3566,222,'MSY','Merseyside'),(3567,222,'MERT','Merthyr Tydfil'),(3568,222,'MLOT','Midlothian'),(3569,222,'MMOUTH','Monmouthshire'),(3570,222,'MORAY','Moray'),(3571,222,'NPRTAL','Neath Port Talbot'),(3572,222,'NEWPT','Newport'),(3573,222,'NOR','Norfolk'),(3574,222,'ARYN','North Ayrshire'),(3575,222,'LANN','North Lanarkshire'),(3576,222,'YSN','North Yorkshire'),(3577,222,'NHM','Northamptonshire'),(3578,222,'NLD','Northumberland'),(3579,222,'NOT','Nottinghamshire'),(3580,222,'ORK','Orkney Islands'),(3581,222,'OFE','Oxfordshire'),(3582,222,'PEM','Pembrokeshire'),(3583,222,'PERTH','Perth and Kinross'),(3584,222,'PWS','Powys'),(3585,222,'REN','Renfrewshire'),(3586,222,'RHON','Rhondda Cynon Taff'),(3587,222,'RUT','Rutland'),(3588,222,'BOR','Scottish Borders'),(3589,222,'SHET','Shetland Islands'),(3590,222,'SPE','Shropshire'),(3591,222,'SOM','Somerset'),(3592,222,'ARYS','South Ayrshire'),(3593,222,'LANS','South Lanarkshire'),(3594,222,'YSS','South Yorkshire'),(3595,222,'SFD','Staffordshire'),(3596,222,'STIR','Stirling'),(3597,222,'SFK','Suffolk'),(3598,222,'SRY','Surrey'),(3599,222,'SWAN','Swansea'),(3600,222,'TORF','Torfaen'),(3601,222,'TWR','Tyne and Wear'),(3602,222,'VGLAM','Vale of Glamorgan'),(3603,222,'WARKS','Warwickshire'),(3604,222,'WDUN','West Dunbartonshire'),(3605,222,'WLOT','West Lothian'),(3606,222,'WMD','West Midlands'),(3607,222,'SXW','West Sussex'),(3608,222,'YSW','West Yorkshire'),(3609,222,'WIL','Western Isles'),(3610,222,'WLT','Wiltshire'),(3611,222,'WORCS','Worcestershire'),(3612,222,'WRX','Wrexham'),(3613,223,'AL','Alabama'),(3614,223,'AK','Alaska'),(3615,223,'AS','American Samoa'),(3616,223,'AZ','Arizona'),(3617,223,'AR','Arkansas'),(3618,223,'AF','Armed Forces Africa'),(3619,223,'AA','Armed Forces Americas'),(3620,223,'AC','Armed Forces Canada'),(3621,223,'AE','Armed Forces Europe'),(3622,223,'AM','Armed Forces Middle East'),(3623,223,'AP','Armed Forces Pacific'),(3624,223,'CA','California'),(3625,223,'CO','Colorado'),(3626,223,'CT','Connecticut'),(3627,223,'DE','Delaware'),(3628,223,'DC','District of Columbia'),(3629,223,'FM','Federated States Of Micronesia'),(3630,223,'FL','Florida'),(3631,223,'GA','Georgia'),(3632,223,'GU','Guam'),(3633,223,'HI','Hawaii'),(3634,223,'ID','Idaho'),(3635,223,'IL','Illinois'),(3636,223,'IN','Indiana'),(3637,223,'IA','Iowa'),(3638,223,'KS','Kansas'),(3639,223,'KY','Kentucky'),(3640,223,'LA','Louisiana'),(3641,223,'ME','Maine'),(3642,223,'MH','Marshall Islands'),(3643,223,'MD','Maryland'),(3644,223,'MA','Massachusetts'),(3645,223,'MI','Michigan'),(3646,223,'MN','Minnesota'),(3647,223,'MS','Mississippi'),(3648,223,'MO','Missouri'),(3649,223,'MT','Montana'),(3650,223,'NE','Nebraska'),(3651,223,'NV','Nevada'),(3652,223,'NH','New Hampshire'),(3653,223,'NJ','New Jersey'),(3654,223,'NM','New Mexico'),(3655,223,'NY','New York'),(3656,223,'NC','North Carolina'),(3657,223,'ND','North Dakota'),(3658,223,'MP','Northern Mariana Islands'),(3659,223,'OH','Ohio'),(3660,223,'OK','Oklahoma'),(3661,223,'OR','Oregon'),(3662,223,'PW','Palau'),(3663,223,'PA','Pennsylvania'),(3664,223,'PR','Puerto Rico'),(3665,223,'RI','Rhode Island'),(3666,223,'SC','South Carolina'),(3667,223,'SD','South Dakota'),(3668,223,'TN','Tennessee'),(3669,223,'TX','Texas'),(3670,223,'UT','Utah'),(3671,223,'VT','Vermont'),(3672,223,'VI','Virgin Islands'),(3673,223,'VA','Virginia'),(3674,223,'WA','Washington'),(3675,223,'WV','West Virginia'),(3676,223,'WI','Wisconsin'),(3677,223,'WY','Wyoming'),(3678,224,'BI','Baker Island'),(3679,224,'HI','Howland Island'),(3680,224,'JI','Jarvis Island'),(3681,224,'JA','Johnston Atoll'),(3682,224,'KR','Kingman Reef'),(3683,224,'MA','Midway Atoll'),(3684,224,'NI','Navassa Island'),(3685,224,'PA','Palmyra Atoll'),(3686,224,'WI','Wake Island'),(3687,225,'AR','Artigas'),(3688,225,'CA','Canelones'),(3689,225,'CL','Cerro Largo'),(3690,225,'CO','Colonia'),(3691,225,'DU','Durazno'),(3692,225,'FS','Flores'),(3693,225,'FA','Florida'),(3694,225,'LA','Lavalleja'),(3695,225,'MA','Maldonado'),(3696,225,'MO','Montevideo'),(3697,225,'PA','Paysandu'),(3698,225,'RN','Rio Negro'),(3699,225,'RV','Rivera'),(3700,225,'RO','Rocha'),(3701,225,'SL','Salto'),(3702,225,'SJ','San Jose'),(3703,225,'SO','Soriano'),(3704,225,'TA','Tacuarembo'),(3705,225,'TT','Treinta y Tres'),(3706,226,'AN','Andijon'),(3707,226,'BU','Buxoro'),(3708,226,'FA','Farg\'ona'),(3709,226,'JI','Jizzax'),(3710,226,'NG','Namangan'),(3711,226,'NW','Navoiy'),(3712,226,'QA','Qashqadaryo'),(3713,226,'QR','Qoraqalpog\'iston Republikasi'),(3714,226,'SA','Samarqand'),(3715,226,'SI','Sirdaryo'),(3716,226,'SU','Surxondaryo'),(3717,226,'TK','Toshkent City'),(3718,226,'TO','Toshkent Region'),(3719,226,'XO','Xorazm'),(3720,227,'MA','Malampa'),(3721,227,'PE','Penama'),(3722,227,'SA','Sanma'),(3723,227,'SH','Shefa'),(3724,227,'TA','Tafea'),(3725,227,'TO','Torba'),(3726,229,'AM','Amazonas'),(3727,229,'AN','Anzoategui'),(3728,229,'AP','Apure'),(3729,229,'AR','Aragua'),(3730,229,'BA','Barinas'),(3731,229,'BO','Bolivar'),(3732,229,'CA','Carabobo'),(3733,229,'CO','Cojedes'),(3734,229,'DA','Delta Amacuro'),(3735,229,'DF','Dependencias Federales'),(3736,229,'DI','Distrito Federal'),(3737,229,'FA','Falcon'),(3738,229,'GU','Guarico'),(3739,229,'LA','Lara'),(3740,229,'ME','Merida'),(3741,229,'MI','Miranda'),(3742,229,'MO','Monagas'),(3743,229,'NE','Nueva Esparta'),(3744,229,'PO','Portuguesa'),(3745,229,'SU','Sucre'),(3746,229,'TA','Tachira'),(3747,229,'TR','Trujillo'),(3748,229,'VA','Vargas'),(3749,229,'YA','Yaracuy'),(3750,229,'ZU','Zulia'),(3751,230,'AG','An Giang'),(3752,230,'BG','Bac Giang'),(3753,230,'BK','Bac Kan'),(3754,230,'BL','Bac Lieu'),(3755,230,'BC','Bac Ninh'),(3756,230,'BR','Ba Ria-Vung Tau'),(3757,230,'BN','Ben Tre'),(3758,230,'BH','Binh Dinh'),(3759,230,'BU','Binh Duong'),(3760,230,'BP','Binh Phuoc'),(3761,230,'BT','Binh Thuan'),(3762,230,'CM','Ca Mau'),(3763,230,'CT','Can Tho'),(3764,230,'CB','Cao Bang'),(3765,230,'DL','Dak Lak'),(3766,230,'DG','Dak Nong'),(3767,230,'DN','Da Nang'),(3768,230,'DB','Dien Bien'),(3769,230,'DI','Dong Nai'),(3770,230,'DT','Dong Thap'),(3771,230,'GL','Gia Lai'),(3772,230,'HG','Ha Giang'),(3773,230,'HD','Hai Duong'),(3774,230,'HP','Hai Phong'),(3775,230,'HM','Ha Nam'),(3776,230,'HI','Ha Noi'),(3777,230,'HT','Ha Tay'),(3778,230,'HH','Ha Tinh'),(3779,230,'HB','Hoa Binh'),(3780,230,'HC','Ho Chi Minh City'),(3781,230,'HU','Hau Giang'),(3782,230,'HY','Hung Yen'),(3783,232,'C','Saint Croix'),(3784,232,'J','Saint John'),(3785,232,'T','Saint Thomas'),(3786,233,'A','Alo'),(3787,233,'S','Sigave'),(3788,233,'W','Wallis'),(3789,235,'AB','Abyan'),(3790,235,'AD','Adan'),(3791,235,'AM','Amran'),(3792,235,'BA','Al Bayda'),(3793,235,'DA','Ad Dali'),(3794,235,'DH','Dhamar'),(3795,235,'HD','Hadramawt'),(3796,235,'HJ','Hajjah'),(3797,235,'HU','Al Hudaydah'),(3798,235,'IB','Ibb'),(3799,235,'JA','Al Jawf'),(3800,235,'LA','Lahij'),(3801,235,'MA','Ma\'rib'),(3802,235,'MR','Al Mahrah'),(3803,235,'MW','Al Mahwit'),(3804,235,'SD','Sa\'dah'),(3805,235,'SN','San\'a'),(3806,235,'SH','Shabwah'),(3807,235,'TA','Ta\'izz'),(3808,236,'KOS','Kosovo'),(3809,236,'MON','Montenegro'),(3810,236,'SER','Serbia'),(3811,236,'VOJ','Vojvodina'),(3812,237,'BC','Bas-Congo'),(3813,237,'BN','Bandundu'),(3814,237,'EQ','Equateur'),(3815,237,'KA','Katanga'),(3816,237,'KE','Kasai-Oriental'),(3817,237,'KN','Kinshasa'),(3818,237,'KW','Kasai-Occidental'),(3819,237,'MA','Maniema'),(3820,237,'NK','Nord-Kivu'),(3821,237,'OR','Orientale'),(3822,237,'SK','Sud-Kivu'),(3823,238,'CE','Central'),(3824,238,'CB','Copperbelt'),(3825,238,'EA','Eastern'),(3826,238,'LP','Luapula'),(3827,238,'LK','Lusaka'),(3828,238,'NO','Northern'),(3829,238,'NW','North-Western'),(3830,238,'SO','Southern'),(3831,238,'WE','Western'),(3832,239,'BU','Bulawayo'),(3833,239,'HA','Harare'),(3834,239,'ML','Manicaland'),(3835,239,'MC','Mashonaland Central'),(3836,239,'ME','Mashonaland East'),(3837,239,'MW','Mashonaland West'),(3838,239,'MV','Masvingo'),(3839,239,'MN','Matabeleland North'),(3840,239,'MS','Matabeleland South'),(3841,239,'MD','Midlands');

/*Table structure for table `odb_country` */

DROP TABLE IF EXISTS `odb_country`;

CREATE TABLE `odb_country` (
  `country_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(64) NOT NULL,
  `iso_code_2` varchar(2) NOT NULL,
  `iso_code_3` varchar(3) NOT NULL,
  `address_format` text NOT NULL,
  `member` int(11) DEFAULT NULL,
  PRIMARY KEY (`country_id`)
) ENGINE=InnoDB AUTO_INCREMENT=241 DEFAULT CHARSET=latin1;

/*Data for the table `odb_country` */

insert  into `odb_country`(`country_id`,`name`,`iso_code_2`,`iso_code_3`,`address_format`,`member`) values (1,'Afghanistan','AF','AFG','',NULL),(2,'Albania','AL','ALB','',NULL),(3,'Algeria','DZ','DZA','',NULL),(4,'American Samoa','AS','ASM','',NULL),(5,'Andorra','AD','AND','',NULL),(6,'Angola','AO','AGO','',NULL),(7,'Anguilla','AI','AIA','',NULL),(8,'Antarctica','AQ','ATA','',NULL),(9,'Antigua and Barbuda','AG','ATG','',NULL),(10,'Argentina','AR','ARG','',NULL),(11,'Armenia','AM','ARM','',NULL),(12,'Aruba','AW','ABW','',NULL),(13,'Australia','AU','AUS','',NULL),(14,'Austria','AT','AUT','',NULL),(15,'Azerbaijan','AZ','AZE','',NULL),(16,'Bahamas','BS','BHS','',NULL),(17,'Bahrain','BH','BHR','',NULL),(18,'Bangladesh','BD','BGD','',NULL),(19,'Barbados','BB','BRB','',NULL),(20,'Belarus','BY','BLR','',NULL),(21,'Belgium','BE','BEL','',NULL),(22,'Belize','BZ','BLZ','',NULL),(23,'Benin','BJ','BEN','',NULL),(24,'Bermuda','BM','BMU','',NULL),(25,'Bhutan','BT','BTN','',NULL),(26,'Bolivia','BO','BOL','',NULL),(27,'Bosnia and Herzegowina','BA','BIH','',NULL),(28,'Botswana','BW','BWA','',NULL),(29,'Bouvet Island','BV','BVT','',NULL),(30,'Brazil','BR','BRA','',NULL),(31,'British Indian Ocean Territory','IO','IOT','',NULL),(32,'Brunei Darussalam','BN','BRN','',NULL),(33,'Bulgaria','BG','BGR','',NULL),(34,'Burkina Faso','BF','BFA','',NULL),(35,'Burundi','BI','BDI','',NULL),(36,'Cambodia','KH','KHM','',NULL),(37,'Cameroon','CM','CMR','',NULL),(38,'Canada','CA','CAN','',NULL),(39,'Cape Verde','CV','CPV','',NULL),(40,'Cayman Islands','KY','CYM','',NULL),(41,'Central African Republic','CF','CAF','',NULL),(42,'Chad','TD','TCD','',NULL),(43,'Chile','CL','CHL','',NULL),(44,'China','CN','CHN','',NULL),(45,'Christmas Island','CX','CXR','',NULL),(46,'Cocos (Keeling) Islands','CC','CCK','',NULL),(47,'Colombia','CO','COL','',NULL),(48,'Comoros','KM','COM','',NULL),(49,'Congo','CG','COG','',NULL),(50,'Cook Islands','CK','COK','',NULL),(51,'Costa Rica','CR','CRI','',NULL),(52,'Cote D\'Ivoire','CI','CIV','',NULL),(53,'Croatia','HR','HRV','',NULL),(54,'Cuba','CU','CUB','',NULL),(55,'Cyprus','CY','CYP','',NULL),(56,'Czech Republic','CZ','CZE','',NULL),(57,'Denmark','DK','DNK','',NULL),(58,'Djibouti','DJ','DJI','',NULL),(59,'Dominica','DM','DMA','',NULL),(60,'Dominican Republic','DO','DOM','',NULL),(61,'East Timor','TP','TMP','',NULL),(62,'Ecuador','EC','ECU','',NULL),(63,'Egypt','EG','EGY','',NULL),(64,'El Salvador','SV','SLV','',NULL),(65,'Equatorial Guinea','GQ','GNQ','',NULL),(66,'Eritrea','ER','ERI','',NULL),(67,'Estonia','EE','EST','',NULL),(68,'Ethiopia','ET','ETH','',NULL),(69,'Falkland Islands (Malvinas)','FK','FLK','',NULL),(70,'Faroe Islands','FO','FRO','',NULL),(71,'Fiji','FJ','FJI','',NULL),(72,'Finland','FI','FIN','',NULL),(73,'France','FR','FRA','',NULL),(74,'France, Metropolitan','FX','FXX','',NULL),(75,'French Guiana','GF','GUF','',NULL),(76,'French Polynesia','PF','PYF','',NULL),(77,'French Southern Territories','TF','ATF','',NULL),(78,'Gabon','GA','GAB','',NULL),(79,'Gambia','GM','GMB','',NULL),(80,'Georgia','GE','GEO','',NULL),(81,'Germany','DE','DEU','',NULL),(82,'Ghana','GH','GHA','',NULL),(83,'Gibraltar','GI','GIB','',NULL),(84,'Greece','GR','GRC','',NULL),(85,'Greenland','GL','GRL','',NULL),(86,'Grenada','GD','GRD','',1),(87,'Guadeloupe','GP','GLP','',NULL),(88,'Guam','GU','GUM','',NULL),(89,'Guatemala','GT','GTM','',NULL),(90,'Guinea','GN','GIN','',NULL),(91,'Guinea-bissau','GW','GNB','',NULL),(92,'Guyana','GY','GUY','',NULL),(93,'Haiti','HT','HTI','',NULL),(94,'Heard and Mc Donald Islands','HM','HMD','',NULL),(95,'Honduras','HN','HND','',NULL),(96,'Hong Kong','HK','HKG','',NULL),(97,'Hungary','HU','HUN','',NULL),(98,'Iceland','IS','ISL','',NULL),(99,'India','IN','IND','',NULL),(100,'Indonesia','ID','IDN','',NULL),(101,'Iran (Islamic Republic of)','IR','IRN','',NULL),(102,'Iraq','IQ','IRQ','',NULL),(103,'Ireland','IE','IRL','',NULL),(104,'Israel','IL','ISR','',NULL),(105,'Italy','IT','ITA','',NULL),(106,'Jamaica','JM','JAM','',1),(107,'Japan','JP','JPN','',NULL),(108,'Jordan','JO','JOR','',NULL),(109,'Kazakhstan','KZ','KAZ','',NULL),(110,'Kenya','KE','KEN','',NULL),(111,'Kiribati','KI','KIR','',NULL),(112,'Korea, Democratic People\'s Republic of','KP','PRK','',NULL),(113,'Korea, Republic of','KR','KOR','',NULL),(114,'Kuwait','KW','KWT','',NULL),(115,'Kyrgyzstan','KG','KGZ','',NULL),(116,'Lao People\'s Democratic Republic','LA','LAO','',NULL),(117,'Latvia','LV','LVA','',NULL),(118,'Lebanon','LB','LBN','',NULL),(119,'Lesotho','LS','LSO','',NULL),(120,'Liberia','LR','LBR','',NULL),(121,'Libyan Arab Jamahiriya','LY','LBY','',NULL),(122,'Liechtenstein','LI','LIE','',NULL),(123,'Lithuania','LT','LTU','',NULL),(124,'Luxembourg','LU','LUX','',NULL),(125,'Macau','MO','MAC','',NULL),(126,'Macedonia, The Former Yugoslav Republic of','MK','MKD','',NULL),(127,'Madagascar','MG','MDG','',NULL),(128,'Malawi','MW','MWI','',NULL),(129,'Malaysia','MY','MYS','',NULL),(130,'Maldives','MV','MDV','',NULL),(131,'Mali','ML','MLI','',NULL),(132,'Malta','MT','MLT','',NULL),(133,'Marshall Islands','MH','MHL','',NULL),(134,'Martinique','MQ','MTQ','',NULL),(135,'Mauritania','MR','MRT','',NULL),(136,'Mauritius','MU','MUS','',NULL),(137,'Mayotte','YT','MYT','',NULL),(138,'Mexico','MX','MEX','',NULL),(139,'Micronesia, Federated States of','FM','FSM','',NULL),(140,'Moldova, Republic of','MD','MDA','',NULL),(141,'Monaco','MC','MCO','',NULL),(142,'Mongolia','MN','MNG','',NULL),(143,'Montserrat','MS','MSR','',NULL),(144,'Morocco','MA','MAR','',NULL),(145,'Mozambique','MZ','MOZ','',NULL),(146,'Myanmar','MM','MMR','',NULL),(147,'Namibia','NA','NAM','',NULL),(148,'Nauru','NR','NRU','',NULL),(149,'Nepal','NP','NPL','',NULL),(150,'Netherlands','NL','NLD','',NULL),(151,'Netherlands Antilles','AN','ANT','',NULL),(152,'New Caledonia','NC','NCL','',NULL),(153,'New Zealand','NZ','NZL','',NULL),(154,'Nicaragua','NI','NIC','',NULL),(155,'Niger','NE','NER','',NULL),(156,'Nigeria','NG','NGA','',NULL),(157,'Niue','NU','NIU','',NULL),(158,'Norfolk Island','NF','NFK','',NULL),(159,'Northern Mariana Islands','MP','MNP','',NULL),(160,'Norway','NO','NOR','',NULL),(161,'Oman','OM','OMN','',NULL),(162,'Pakistan','PK','PAK','',NULL),(163,'Palau','PW','PLW','',NULL),(164,'Panama','PA','PAN','',NULL),(165,'Papua New Guinea','PG','PNG','',NULL),(166,'Paraguay','PY','PRY','',NULL),(167,'Peru','PE','PER','',NULL),(168,'Philippines','PH','PHL','',NULL),(169,'Pitcairn','PN','PCN','',NULL),(170,'Poland','PL','POL','',NULL),(171,'Portugal','PT','PRT','',NULL),(172,'Puerto Rico','PR','PRI','',NULL),(173,'Qatar','QA','QAT','',NULL),(174,'Reunion','RE','REU','',NULL),(175,'Romania','RO','ROM','',NULL),(176,'Russian Federation','RU','RUS','',NULL),(177,'Rwanda','RW','RWA','',NULL),(178,'Saint Kitts and Nevis','KN','KNA','',NULL),(179,'Saint Lucia','LC','LCA','',1),(180,'Saint Vincent and the Grenadines','VC','VCT','',NULL),(181,'Samoa','WS','WSM','',NULL),(182,'San Marino','SM','SMR','',NULL),(183,'Sao Tome and Principe','ST','STP','',NULL),(184,'Saudi Arabia','SA','SAU','',NULL),(185,'Senegal','SN','SEN','',NULL),(186,'Seychelles','SC','SYC','',NULL),(187,'Sierra Leone','SL','SLE','',NULL),(188,'Singapore','SG','SGP','',NULL),(189,'Slovakia (Slovak Republic)','SK','SVK','',NULL),(190,'Slovenia','SI','SVN','',NULL),(191,'Solomon Islands','SB','SLB','',NULL),(192,'Somalia','SO','SOM','',NULL),(193,'South Africa','ZA','ZAF','',NULL),(194,'South Georgia and the South Sandwich Islands','GS','SGS','',NULL),(195,'Spain','ES','ESP','',NULL),(196,'Sri Lanka','LK','LKA','',NULL),(197,'St. Helena','SH','SHN','',NULL),(198,'St. Pierre and Miquelon','PM','SPM','',NULL),(199,'Sudan','SD','SDN','',NULL),(200,'Suriname','SR','SUR','',NULL),(201,'Svalbard and Jan Mayen Islands','SJ','SJM','',NULL),(202,'Swaziland','SZ','SWZ','',NULL),(203,'Sweden','SE','SWE','',NULL),(204,'Switzerland','CH','CHE','',NULL),(205,'Syrian Arab Republic','SY','SYR','',NULL),(206,'Taiwan','TW','TWN','',NULL),(207,'Tajikistan','TJ','TJK','',NULL),(208,'Tanzania, United Republic of','TZ','TZA','',NULL),(209,'Thailand','TH','THA','',NULL),(210,'Togo','TG','TGO','',NULL),(211,'Tokelau','TK','TKL','',NULL),(212,'Tonga','TO','TON','',NULL),(213,'Trinidad and Tobago','TT','TTO','',NULL),(214,'Tunisia','TN','TUN','',NULL),(215,'Turkey','TR','TUR','',NULL),(216,'Turkmenistan','TM','TKM','',NULL),(217,'Turks and Caicos Islands','TC','TCA','',NULL),(218,'Tuvalu','TV','TUV','',NULL),(219,'Uganda','UG','UGA','',NULL),(220,'Ukraine','UA','UKR','',NULL),(221,'United Arab Emirates','AE','ARE','',NULL),(222,'United Kingdom','GB','GBR','',NULL),(223,'United States','US','USA','{firstname} {lastname}\r\n{company}\r\n{address_1}\r\n{address_2}\r\n{city}, {zone} {postcode}\r\n{country}',NULL),(224,'United States Minor Outlying Islands','UM','UMI','',NULL),(225,'Uruguay','UY','URY','',NULL),(226,'Uzbekistan','UZ','UZB','',NULL),(227,'Vanuatu','VU','VUT','',NULL),(228,'Vatican City State (Holy See)','VA','VAT','',NULL),(229,'Venezuela','VE','VEN','',NULL),(230,'Viet Nam','VN','VNM','',NULL),(231,'Virgin Islands (British)','VG','VGB','',NULL),(232,'Virgin Islands (U.S.)','VI','VIR','',NULL),(233,'Wallis and Futuna Islands','WF','WLF','',NULL),(234,'Western Sahara','EH','ESH','',NULL),(235,'Yemen','YE','YEM','',NULL),(236,'Yugoslavia','YU','YUG','',NULL),(237,'Zaire','ZR','ZAR','',NULL),(238,'Zambia','ZM','ZMB','',NULL),(239,'Zimbabwe','ZW','ZWE','',NULL),(240,'St. Maarten','MF','MAF','',NULL);

/*Table structure for table `odb_time_zone` */

DROP TABLE IF EXISTS `odb_time_zone`;

CREATE TABLE `odb_time_zone` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `country_code` varchar(2) NOT NULL,
  `name` tinytext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=422 DEFAULT CHARSET=utf8;

/*Data for the table `odb_time_zone` */

insert  into `odb_time_zone`(`id`,`country_code`,`name`) values (1,'AD','Europe/Andorra'),(2,'AE','Asia/Dubai'),(3,'AF','Asia/Kabul'),(4,'AG','America/Antigua'),(5,'AI','America/Anguilla'),(6,'AL','Europe/Tirane'),(7,'AM','Asia/Yerevan'),(8,'AO','Africa/Luanda'),(9,'AQ','Antarctica/McMurdo'),(10,'AQ','Antarctica/Casey'),(11,'AQ','Antarctica/Davis'),(12,'AQ','Antarctica/DumontDUrville'),(13,'AQ','Antarctica/Mawson'),(14,'AQ','Antarctica/Palmer'),(15,'AQ','Antarctica/Rothera'),(16,'AQ','Antarctica/Syowa'),(17,'AQ','Antarctica/Troll'),(18,'AQ','Antarctica/Vostok'),(19,'AR','America/Argentina/Buenos_Aires'),(20,'AR','America/Argentina/Cordoba'),(21,'AR','America/Argentina/Salta'),(22,'AR','America/Argentina/Jujuy'),(23,'AR','America/Argentina/Tucuman'),(24,'AR','America/Argentina/Catamarca'),(25,'AR','America/Argentina/La_Rioja'),(26,'AR','America/Argentina/San_Juan'),(27,'AR','America/Argentina/Mendoza'),(28,'AR','America/Argentina/San_Luis'),(29,'AR','America/Argentina/Rio_Gallegos'),(30,'AR','America/Argentina/Ushuaia'),(31,'AS','Pacific/Pago_Pago'),(32,'AT','Europe/Vienna'),(33,'AU','Australia/Lord_Howe'),(34,'AU','Antarctica/Macquarie'),(35,'AU','Australia/Hobart'),(36,'AU','Australia/Currie'),(37,'AU','Australia/Melbourne'),(38,'AU','Australia/Sydney'),(39,'AU','Australia/Broken_Hill'),(40,'AU','Australia/Brisbane'),(41,'AU','Australia/Lindeman'),(42,'AU','Australia/Adelaide'),(43,'AU','Australia/Darwin'),(44,'AU','Australia/Perth'),(45,'AU','Australia/Eucla'),(46,'AW','America/Aruba'),(47,'AX','Europe/Mariehamn'),(48,'AZ','Asia/Baku'),(49,'BA','Europe/Sarajevo'),(50,'BB','America/Barbados'),(51,'BD','Asia/Dhaka'),(52,'BE','Europe/Brussels'),(53,'BF','Africa/Ouagadougou'),(54,'BG','Europe/Sofia'),(55,'BH','Asia/Bahrain'),(56,'BI','Africa/Bujumbura'),(57,'BJ','Africa/Porto-Novo'),(58,'BL','America/St_Barthelemy'),(59,'BM','Atlantic/Bermuda'),(60,'BN','Asia/Brunei'),(61,'BO','America/La_Paz'),(62,'BQ','America/Kralendijk'),(63,'BR','America/Noronha'),(64,'BR','America/Belem'),(65,'BR','America/Fortaleza'),(66,'BR','America/Recife'),(67,'BR','America/Araguaina'),(68,'BR','America/Maceio'),(69,'BR','America/Bahia'),(70,'BR','America/Sao_Paulo'),(71,'BR','America/Campo_Grande'),(72,'BR','America/Cuiaba'),(73,'BR','America/Santarem'),(74,'BR','America/Porto_Velho'),(75,'BR','America/Boa_Vista'),(76,'BR','America/Manaus'),(77,'BR','America/Eirunepe'),(78,'BR','America/Rio_Branco'),(79,'BS','America/Nassau'),(80,'BT','Asia/Thimphu'),(81,'BW','Africa/Gaborone'),(82,'BY','Europe/Minsk'),(83,'BZ','America/Belize'),(84,'CA','America/St_Johns'),(85,'CA','America/Halifax'),(86,'CA','America/Glace_Bay'),(87,'CA','America/Moncton'),(88,'CA','America/Goose_Bay'),(89,'CA','America/Blanc-Sablon'),(90,'CA','America/Toronto'),(91,'CA','America/Nipigon'),(92,'CA','America/Thunder_Bay'),(93,'CA','America/Iqaluit'),(94,'CA','America/Pangnirtung'),(95,'CA','America/Atikokan'),(96,'CA','America/Winnipeg'),(97,'CA','America/Rainy_River'),(98,'CA','America/Resolute'),(99,'CA','America/Rankin_Inlet'),(100,'CA','America/Regina'),(101,'CA','America/Swift_Current'),(102,'CA','America/Edmonton'),(103,'CA','America/Cambridge_Bay'),(104,'CA','America/Yellowknife'),(105,'CA','America/Inuvik'),(106,'CA','America/Creston'),(107,'CA','America/Dawson_Creek'),(108,'CA','America/Fort_Nelson'),(109,'CA','America/Vancouver'),(110,'CA','America/Whitehorse'),(111,'CA','America/Dawson'),(112,'CC','Indian/Cocos'),(113,'CD','Africa/Kinshasa'),(114,'CD','Africa/Lubumbashi'),(115,'CF','Africa/Bangui'),(116,'CG','Africa/Brazzaville'),(117,'CH','Europe/Zurich'),(118,'CI','Africa/Abidjan'),(119,'CK','Pacific/Rarotonga'),(120,'CL','America/Santiago'),(121,'CL','Pacific/Easter'),(122,'CM','Africa/Douala'),(123,'CN','Asia/Shanghai'),(124,'CN','Asia/Urumqi'),(125,'CO','America/Bogota'),(126,'CR','America/Costa_Rica'),(127,'CU','America/Havana'),(128,'CV','Atlantic/Cape_Verde'),(129,'CW','America/Curacao'),(130,'CX','Indian/Christmas'),(131,'CY','Asia/Nicosia'),(132,'CZ','Europe/Prague'),(133,'DE','Europe/Berlin'),(134,'DE','Europe/Busingen'),(135,'DJ','Africa/Djibouti'),(136,'DK','Europe/Copenhagen'),(137,'DM','America/Dominica'),(138,'DO','America/Santo_Domingo'),(139,'DZ','Africa/Algiers'),(140,'EC','America/Guayaquil'),(141,'EC','Pacific/Galapagos'),(142,'EE','Europe/Tallinn'),(143,'EG','Africa/Cairo'),(144,'EH','Africa/El_Aaiun'),(145,'ER','Africa/Asmara'),(146,'ES','Europe/Madrid'),(147,'ES','Africa/Ceuta'),(148,'ES','Atlantic/Canary'),(149,'ET','Africa/Addis_Ababa'),(150,'FI','Europe/Helsinki'),(151,'FJ','Pacific/Fiji'),(152,'FK','Atlantic/Stanley'),(153,'FM','Pacific/Chuuk'),(154,'FM','Pacific/Pohnpei'),(155,'FM','Pacific/Kosrae'),(156,'FO','Atlantic/Faroe'),(157,'FR','Europe/Paris'),(158,'GA','Africa/Libreville'),(159,'GB','Europe/London'),(160,'GD','America/Grenada'),(161,'GE','Asia/Tbilisi'),(162,'GF','America/Cayenne'),(163,'GG','Europe/Guernsey'),(164,'GH','Africa/Accra'),(165,'GI','Europe/Gibraltar'),(166,'GL','America/Godthab'),(167,'GL','America/Danmarkshavn'),(168,'GL','America/Scoresbysund'),(169,'GL','America/Thule'),(170,'GM','Africa/Banjul'),(171,'GN','Africa/Conakry'),(172,'GP','America/Guadeloupe'),(173,'GQ','Africa/Malabo'),(174,'GR','Europe/Athens'),(175,'GS','Atlantic/South_Georgia'),(176,'GT','America/Guatemala'),(177,'GU','Pacific/Guam'),(178,'GW','Africa/Bissau'),(179,'GY','America/Guyana'),(180,'HK','Asia/Hong_Kong'),(181,'HN','America/Tegucigalpa'),(182,'HR','Europe/Zagreb'),(183,'HT','America/Port-au-Prince'),(184,'HU','Europe/Budapest'),(185,'ID','Asia/Jakarta'),(186,'ID','Asia/Pontianak'),(187,'ID','Asia/Makassar'),(188,'ID','Asia/Jayapura'),(189,'IE','Europe/Dublin'),(190,'IL','Asia/Jerusalem'),(191,'IM','Europe/Isle_of_Man'),(192,'IN','Asia/Kolkata'),(193,'IO','Indian/Chagos'),(194,'IQ','Asia/Baghdad'),(195,'IR','Asia/Tehran'),(196,'IS','Atlantic/Reykjavik'),(197,'IT','Europe/Rome'),(198,'JE','Europe/Jersey'),(199,'JM','America/Jamaica'),(200,'JO','Asia/Amman'),(201,'JP','Asia/Tokyo'),(202,'KE','Africa/Nairobi'),(203,'KG','Asia/Bishkek'),(204,'KH','Asia/Phnom_Penh'),(205,'KI','Pacific/Tarawa'),(206,'KI','Pacific/Enderbury'),(207,'KI','Pacific/Kiritimati'),(208,'KM','Indian/Comoro'),(209,'KN','America/St_Kitts'),(210,'KP','Asia/Pyongyang'),(211,'KR','Asia/Seoul'),(212,'KW','Asia/Kuwait'),(213,'KY','America/Cayman'),(214,'KZ','Asia/Almaty'),(215,'KZ','Asia/Qyzylorda'),(216,'KZ','Asia/Aqtobe'),(217,'KZ','Asia/Aqtau'),(218,'KZ','Asia/Oral'),(219,'LA','Asia/Vientiane'),(220,'LB','Asia/Beirut'),(221,'LC','America/St_Lucia'),(222,'LI','Europe/Vaduz'),(223,'LK','Asia/Colombo'),(224,'LR','Africa/Monrovia'),(225,'LS','Africa/Maseru'),(226,'LT','Europe/Vilnius'),(227,'LU','Europe/Luxembourg'),(228,'LV','Europe/Riga'),(229,'LY','Africa/Tripoli'),(230,'MA','Africa/Casablanca'),(231,'MC','Europe/Monaco'),(232,'MD','Europe/Chisinau'),(233,'ME','Europe/Podgorica'),(234,'MF','America/Marigot'),(235,'MG','Indian/Antananarivo'),(236,'MH','Pacific/Majuro'),(237,'MH','Pacific/Kwajalein'),(238,'MK','Europe/Skopje'),(239,'ML','Africa/Bamako'),(240,'MM','Asia/Rangoon'),(241,'MN','Asia/Ulaanbaatar'),(242,'MN','Asia/Hovd'),(243,'MN','Asia/Choibalsan'),(244,'MO','Asia/Macau'),(245,'MP','Pacific/Saipan'),(246,'MQ','America/Martinique'),(247,'MR','Africa/Nouakchott'),(248,'MS','America/Montserrat'),(249,'MT','Europe/Malta'),(250,'MU','Indian/Mauritius'),(251,'MV','Indian/Maldives'),(252,'MW','Africa/Blantyre'),(253,'MX','America/Mexico_City'),(254,'MX','America/Cancun'),(255,'MX','America/Merida'),(256,'MX','America/Monterrey'),(257,'MX','America/Matamoros'),(258,'MX','America/Mazatlan'),(259,'MX','America/Chihuahua'),(260,'MX','America/Ojinaga'),(261,'MX','America/Hermosillo'),(262,'MX','America/Tijuana'),(263,'MX','America/Bahia_Banderas'),(264,'MY','Asia/Kuala_Lumpur'),(265,'MY','Asia/Kuching'),(266,'MZ','Africa/Maputo'),(267,'NA','Africa/Windhoek'),(268,'NC','Pacific/Noumea'),(269,'NE','Africa/Niamey'),(270,'NF','Pacific/Norfolk'),(271,'NG','Africa/Lagos'),(272,'NI','America/Managua'),(273,'NL','Europe/Amsterdam'),(274,'NO','Europe/Oslo'),(275,'NP','Asia/Kathmandu'),(276,'NR','Pacific/Nauru'),(277,'NU','Pacific/Niue'),(278,'NZ','Pacific/Auckland'),(279,'NZ','Pacific/Chatham'),(280,'OM','Asia/Muscat'),(281,'PA','America/Panama'),(282,'PE','America/Lima'),(283,'PF','Pacific/Tahiti'),(284,'PF','Pacific/Marquesas'),(285,'PF','Pacific/Gambier'),(286,'PG','Pacific/Port_Moresby'),(287,'PG','Pacific/Bougainville'),(288,'PH','Asia/Manila'),(289,'PK','Asia/Karachi'),(290,'PL','Europe/Warsaw'),(291,'PM','America/Miquelon'),(292,'PN','Pacific/Pitcairn'),(293,'PR','America/Puerto_Rico'),(294,'PS','Asia/Gaza'),(295,'PS','Asia/Hebron'),(296,'PT','Europe/Lisbon'),(297,'PT','Atlantic/Madeira'),(298,'PT','Atlantic/Azores'),(299,'PW','Pacific/Palau'),(300,'PY','America/Asuncion'),(301,'QA','Asia/Qatar'),(302,'RE','Indian/Reunion'),(303,'RO','Europe/Bucharest'),(304,'RS','Europe/Belgrade'),(305,'RU','Europe/Kaliningrad'),(306,'RU','Europe/Moscow'),(307,'RU','Europe/Simferopol'),(308,'RU','Europe/Volgograd'),(309,'RU','Europe/Kirov'),(310,'RU','Europe/Astrakhan'),(311,'RU','Europe/Samara'),(312,'RU','Europe/Ulyanovsk'),(313,'RU','Asia/Yekaterinburg'),(314,'RU','Asia/Omsk'),(315,'RU','Asia/Novosibirsk'),(316,'RU','Asia/Barnaul'),(317,'RU','Asia/Tomsk'),(318,'RU','Asia/Novokuznetsk'),(319,'RU','Asia/Krasnoyarsk'),(320,'RU','Asia/Irkutsk'),(321,'RU','Asia/Chita'),(322,'RU','Asia/Yakutsk'),(323,'RU','Asia/Khandyga'),(324,'RU','Asia/Vladivostok'),(325,'RU','Asia/Ust-Nera'),(326,'RU','Asia/Magadan'),(327,'RU','Asia/Sakhalin'),(328,'RU','Asia/Srednekolymsk'),(329,'RU','Asia/Kamchatka'),(330,'RU','Asia/Anadyr'),(331,'RW','Africa/Kigali'),(332,'SA','Asia/Riyadh'),(333,'SB','Pacific/Guadalcanal'),(334,'SC','Indian/Mahe'),(335,'SD','Africa/Khartoum'),(336,'SE','Europe/Stockholm'),(337,'SG','Asia/Singapore'),(338,'SH','Atlantic/St_Helena'),(339,'SI','Europe/Ljubljana'),(340,'SJ','Arctic/Longyearbyen'),(341,'SK','Europe/Bratislava'),(342,'SL','Africa/Freetown'),(343,'SM','Europe/San_Marino'),(344,'SN','Africa/Dakar'),(345,'SO','Africa/Mogadishu'),(346,'SR','America/Paramaribo'),(347,'SS','Africa/Juba'),(348,'ST','Africa/Sao_Tome'),(349,'SV','America/El_Salvador'),(350,'SX','America/Lower_Princes'),(351,'SY','Asia/Damascus'),(352,'SZ','Africa/Mbabane'),(353,'TC','America/Grand_Turk'),(354,'TD','Africa/Ndjamena'),(355,'TF','Indian/Kerguelen'),(356,'TG','Africa/Lome'),(357,'TH','Asia/Bangkok'),(358,'TJ','Asia/Dushanbe'),(359,'TK','Pacific/Fakaofo'),(360,'TL','Asia/Dili'),(361,'TM','Asia/Ashgabat'),(362,'TN','Africa/Tunis'),(363,'TO','Pacific/Tongatapu'),(364,'TR','Europe/Istanbul'),(365,'TT','America/Port_of_Spain'),(366,'TV','Pacific/Funafuti'),(367,'TW','Asia/Taipei'),(368,'TZ','Africa/Dar_es_Salaam'),(369,'UA','Europe/Kiev'),(370,'UA','Europe/Uzhgorod'),(371,'UA','Europe/Zaporozhye'),(372,'UG','Africa/Kampala'),(373,'UM','Pacific/Johnston'),(374,'UM','Pacific/Midway'),(375,'UM','Pacific/Wake'),(376,'US','America/New_York'),(377,'US','America/Detroit'),(378,'US','America/Kentucky/Louisville'),(379,'US','America/Kentucky/Monticello'),(380,'US','America/Indiana/Indianapolis'),(381,'US','America/Indiana/Vincennes'),(382,'US','America/Indiana/Winamac'),(383,'US','America/Indiana/Marengo'),(384,'US','America/Indiana/Petersburg'),(385,'US','America/Indiana/Vevay'),(386,'US','America/Chicago'),(387,'US','America/Indiana/Tell_City'),(388,'US','America/Indiana/Knox'),(389,'US','America/Menominee'),(390,'US','America/North_Dakota/Center'),(391,'US','America/North_Dakota/New_Salem'),(392,'US','America/North_Dakota/Beulah'),(393,'US','America/Denver'),(394,'US','America/Boise'),(395,'US','America/Phoenix'),(396,'US','America/Los_Angeles'),(397,'US','America/Anchorage'),(398,'US','America/Juneau'),(399,'US','America/Sitka'),(400,'US','America/Metlakatla'),(401,'US','America/Yakutat'),(402,'US','America/Nome'),(403,'US','America/Adak'),(404,'US','Pacific/Honolulu'),(405,'UY','America/Montevideo'),(406,'UZ','Asia/Samarkand'),(407,'UZ','Asia/Tashkent'),(408,'VA','Europe/Vatican'),(409,'VC','America/St_Vincent'),(410,'VE','America/Caracas'),(411,'VG','America/Tortola'),(412,'VI','America/St_Thomas'),(413,'VN','Asia/Ho_Chi_Minh'),(414,'VU','Pacific/Efate'),(415,'WF','Pacific/Wallis'),(416,'WS','Pacific/Apia'),(417,'YE','Asia/Aden'),(418,'YT','Indian/Mayotte'),(419,'ZA','Africa/Johannesburg'),(420,'ZM','Africa/Lusaka'),(421,'ZW','Africa/Harare');

/*Table structure for table `photo` */

DROP TABLE IF EXISTS `photo`;

CREATE TABLE `photo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `item_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `photo` varchar(45) NOT NULL,
  `title` tinytext,
  `date_added` date DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_category_idx` (`category_id`),
  CONSTRAINT `fk_category` FOREIGN KEY (`category_id`) REFERENCES `photo_category` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=44 DEFAULT CHARSET=utf8;

/*Data for the table `photo` */

insert  into `photo`(`id`,`item_id`,`category_id`,`photo`,`title`,`date_added`) values (1,11,2,'2-20160610-43044.jpg',NULL,'2016-06-10'),(2,11,2,'2-20160610-80872.jpg',NULL,'2016-06-10'),(3,12,2,'2-20160610-57167.jpg',NULL,'2016-06-10'),(4,12,2,'2-20160610-36834.jpg',NULL,'2016-06-10'),(5,12,2,'2-20160610-52261.jpg',NULL,'2016-06-10'),(6,12,2,'2-20160610-33807.jpg',NULL,'2016-06-10'),(7,13,2,'2-20160610-34535.jpg',NULL,'2016-06-10'),(8,13,2,'2-20160610-67463.jpg',NULL,'2016-06-10'),(9,13,2,'2-20160610-38418.jpg',NULL,'2016-06-10'),(10,13,2,'2-20160610-99846.jpg',NULL,'2016-06-10'),(11,13,2,'2-20160610-19824.jpg',NULL,'2016-06-10'),(12,19,2,'2-20160610-52019.jpg',NULL,'2016-06-10'),(39,9,1,'1-20160617-73643.jpg',NULL,'2016-06-17'),(41,26,3,'3-20160715-27393.jpeg',NULL,'2016-07-15'),(42,10,1,'1-20170207-83050.jpg',NULL,'2017-02-07'),(43,10,1,'1-20170207-45667.jpg',NULL,'2017-02-07');

/*Table structure for table `photo_category` */

DROP TABLE IF EXISTS `photo_category`;

CREATE TABLE `photo_category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `type` int(11) NOT NULL DEFAULT '1' COMMENT '1 - system, can not delete by user\n2 - user',
  `order` int(11) NOT NULL DEFAULT '10',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=100000 DEFAULT CHARSET=latin1;

/*Data for the table `photo_category` */

insert  into `photo_category`(`id`,`name`,`type`,`order`) values (1,'Accommodation',1,1),(2,'Project',1,1),(3,'Programmes',1,1),(4,'CV',2,2),(5,'Internship Forms',2,2),(6,'Insurance Details',2,2),(7,'Travel Details',2,2),(8,'Medical Report',2,2),(9,'Criminal Record Check',2,2),(10,'Work Permit Exemption',2,2),(11,'Visa and Passport',2,2),(99999,'--Default--',2,0);

/*Table structure for table `programme_goal` */

DROP TABLE IF EXISTS `programme_goal`;

CREATE TABLE `programme_goal` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `parent_id` int(11) DEFAULT '0',
  `desc` tinytext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

/*Data for the table `programme_goal` */

insert  into `programme_goal`(`id`,`parent_id`,`desc`) values (1,0,'Promote Early Childhood Development'),(2,0,'Improve English'),(3,0,'Increase Literacy'),(4,0,'Increase Numeracy'),(5,0,'Improve Hygiene Levels At Placements'),(6,0,'Improve The Quality Of Life For Those Living With Disabilities'),(7,0,'Improve The Level Of Stimulation To Each Child'),(8,0,'Increase Emotional Support And Care '),(9,0,'Raise Awareness Of Healthy Living, The Environment And Family Planning'),(10,0,'Improve The Quality Of Life For Street Children And Abandoned Children '),(11,0,'Others General Care Work');

/*Table structure for table `project` */

DROP TABLE IF EXISTS `project`;

CREATE TABLE `project` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `project_sub_type_id` int(11) NOT NULL,
  `institution` varchar(45) NOT NULL,
  `number_of_volunteer` int(11) DEFAULT NULL,
  `address_id` int(11) NOT NULL,
  `background_info` text NOT NULL,
  `location_desc` text,
  `overview_desc` text,
  `project_goal_desc` text,
  `volunteer_role_desc` text,
  `volunteer_task_desc` text,
  `typical_day_desc` text,
  `dress_code_desc` text,
  `other_activitie_desc` text,
  `other_information_desc` text,
  `project_resources_desc` text,
  `project_fact_id` int(11) DEFAULT NULL,
  `programme_goal_id` int(11) DEFAULT NULL,
  `date_added` datetime NOT NULL,
  `project_or_program` int(11) NOT NULL COMMENT '1-Project || 2-programmes',
  `archive` int(11) NOT NULL DEFAULT '0',
  `added_by` int(11) NOT NULL,
  `date_updated` datetime NOT NULL,
  `updated_by` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `address_id_idx` (`address_id`),
  KEY `fk_goals_idx` (`programme_goal_id`),
  KEY `fk_facts_idx` (`project_fact_id`),
  CONSTRAINT `fk_pro_address_id` FOREIGN KEY (`address_id`) REFERENCES `address` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_pro_facts` FOREIGN KEY (`project_fact_id`) REFERENCES `project_key_fact` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_pro_goals` FOREIGN KEY (`programme_goal_id`) REFERENCES `programme_goal` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8;

/*Data for the table `project` */

insert  into `project`(`id`,`project_sub_type_id`,`institution`,`number_of_volunteer`,`address_id`,`background_info`,`location_desc`,`overview_desc`,`project_goal_desc`,`volunteer_role_desc`,`volunteer_task_desc`,`typical_day_desc`,`dress_code_desc`,`other_activitie_desc`,`other_information_desc`,`project_resources_desc`,`project_fact_id`,`programme_goal_id`,`date_added`,`project_or_program`,`archive`,`added_by`,`date_updated`,`updated_by`) values (26,119,'Hanbury Home for Children',NULL,22,'','Hanbury Home for Children is located in Kendal, Manchester approximately 7 minutes away from the Town Centre by route taxi.','To*','To*','To*','To*','To*','To*','To*','To*',NULL,NULL,NULL,'2016-06-29 15:06:12',2,0,100001,'2016-06-29 15:06:12',100001),(27,142,'New Green Primary School',NULL,68,'',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2016-07-19 13:07:35',2,0,100001,'2016-07-19 13:07:35',100001),(28,4,'Rastafari Indigenous Village',NULL,69,'',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2016-07-19 13:11:24',1,0,100001,'2017-02-06 15:01:34',100001),(29,152,'Manchester Health Services',NULL,106,'',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2017-01-23 10:52:14',2,0,100001,'2017-01-23 10:52:14',100001),(30,151,'Mandeville Regional Hospital',NULL,107,'',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2017-01-23 10:53:41',2,0,100001,'2017-01-23 10:53:41',100001),(31,151,'Percy Junor Hospital',NULL,108,'',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2017-01-23 10:54:35',2,0,100001,'2017-01-23 10:54:35',100001);

/*Table structure for table `project_category` */

DROP TABLE IF EXISTS `project_category`;

CREATE TABLE `project_category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `country_id` int(11) NOT NULL,
  `type` int(11) NOT NULL DEFAULT '1' COMMENT '1-project || 2-Programmes',
  `name` varchar(45) NOT NULL,
  `wk1` decimal(13,2) DEFAULT NULL,
  `wk2` decimal(13,2) DEFAULT NULL,
  `wk3` decimal(13,2) DEFAULT NULL,
  `wk4` decimal(13,2) DEFAULT NULL,
  `wk5` decimal(13,2) DEFAULT NULL,
  `wk6` decimal(13,2) DEFAULT NULL,
  `wk7` decimal(13,2) DEFAULT NULL,
  `wk8` decimal(13,2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=52 DEFAULT CHARSET=latin1;

/*Data for the table `project_category` */

insert  into `project_category`(`id`,`country_id`,`type`,`name`,`wk1`,`wk2`,`wk3`,`wk4`,`wk5`,`wk6`,`wk7`,`wk8`) values (1,106,1,'Reggae Music and Dance','1900.00','2500.00','3100.00','3500.00','3900.00','4300.00','4700.00','5100.00'),(2,106,1,'Rastafarian Culture','1600.00','2000.00','2500.00','3100.00','3500.00','3900.00','4500.00','500.00'),(3,106,1,'Internship and Dissertation','1700.00','2100.00','2500.00','2900.00','3300.00','3700.00','4100.00','4500.00'),(4,106,1,'Professional','1500.00','1950.00','2300.00','2700.00','3100.00','3500.00','3900.00','4300.00'),(5,106,1,'Summer','0.00','2700.00','0.00','0.00','0.00','0.00','0.00','0.00'),(6,106,1,'Spring Break','1000.00','0.00','0.00','0.00','0.00','0.00','0.00','0.00'),(10,86,2,'Child Care and Protection','1400.00','1850.00','2200.00','2600.00','3000.00','3400.00','3800.00','4200.00'),(11,86,2,'Teaching','1400.00','1850.00','2200.00','2600.00','3000.00','3400.00','3800.00','4200.00'),(12,86,2,'Medicine and Health Care','1900.00','2300.00','2600.00','3100.00','3500.00','3900.00','4300.00','4500.00'),(13,86,2,'Nursing','1900.00','2300.00','2600.00','3100.00','3500.00','3900.00','4300.00','4500.00'),(14,86,2,'Sports','1400.00','1850.00','2200.00','2600.00','3000.00','3400.00','3800.00','4200.00'),(15,106,2,'Child Care and Protection','1500.00','1950.00','2300.00','2700.00','3100.00','3500.00','4900.00','4300.00'),(16,106,2,'Teaching','0.00','1950.00','2300.00','2700.00','3100.00','3500.00','3900.00','4300.00'),(17,106,2,'Medicine and Health Care','0.00','2000.00','2400.00','2800.00','3200.00','3600.00','4000.00','4400.00'),(18,106,2,'Nursing','0.00','2000.00','2400.00','2800.00','3200.00','4000.00','4400.00','0.00'),(19,106,2,'Physiotherapy','0.00','2000.00','2400.00','2800.00','3200.00','3600.00','4000.00','4400.00'),(20,106,2,'Dentistry','0.00','2000.00','2400.00','2800.00','3200.00','3600.00','4000.00','4400.00'),(21,106,2,'Health and Wellness','0.00','0.00','0.00','4400.00','5200.00','5800.00','6300.00','7000.00'),(22,106,2,'Sports','0.00','1950.00','2300.00','2700.00','3100.00','3500.00','3900.00','4300.00'),(23,106,2,'Humanitarian','1600.00','2000.00','2400.00','2800.00','3200.00','3600.00','4000.00','4400.00'),(24,106,2,'Environmental Awareness and Protection','0.00','1950.00','2300.00','2700.00','3100.00','3500.00','3900.00','4300.00'),(25,106,2,'Entrepreneurship','0.00','0.00','0.00','2800.00','3200.00','3600.00','4000.00','4400.00'),(26,106,2,'Youth and Community Development','0.00','2000.00','2400.00','2800.00','3200.00','3600.00','4000.00','4400.00'),(27,179,2,'Child Care and Protection','1400.00','1850.00','2300.00','1800.00','3300.00','3700.00','4300.00','4800.00'),(28,179,2,'Teaching','0.00','1850.00','2300.00','2800.00','3300.00','3700.00','4300.00','4800.00'),(29,179,2,'Medicine and Health Care','0.00','1900.00','2400.00','2800.00','3300.00','3700.00','4300.00','4800.00'),(30,179,2,'Nursing','0.00','1900.00','2400.00','2900.00','3400.00','3800.00','4400.00','4900.00'),(31,179,2,'Sports','0.00','1850.00','2300.00','2800.00','3300.00','3700.00','4300.00','4800.00'),(34,106,1,'Elderly Care',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(35,106,2,'Elderly Care',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(38,106,1,'Group Trip',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(39,106,2,'Group Trip',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(44,106,1,'Corporate',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(45,106,2,'Corporate',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(50,106,1,'Language Lesson',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(51,106,2,'Language Lesson',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);

/*Table structure for table `project_key_fact` */

DROP TABLE IF EXISTS `project_key_fact`;

CREATE TABLE `project_key_fact` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `project_id` int(11) NOT NULL,
  `population` int(11) NOT NULL,
  `number_of_persons` int(11) DEFAULT NULL,
  `group_size` int(11) DEFAULT NULL,
  `age_group` int(11) DEFAULT NULL,
  `hours_of_work` varchar(45) DEFAULT NULL,
  `number_of_staff` int(11) DEFAULT NULL,
  `institution_type_id` varchar(45) DEFAULT NULL,
  `date_added` varchar(45) DEFAULT NULL,
  `added_user` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_fact_pro_idx` (`project_id`),
  CONSTRAINT `fk_fact_pro` FOREIGN KEY (`project_id`) REFERENCES `project` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;

/*Data for the table `project_key_fact` */

insert  into `project_key_fact`(`id`,`project_id`,`population`,`number_of_persons`,`group_size`,`age_group`,`hours_of_work`,`number_of_staff`,`institution_type_id`,`date_added`,`added_user`) values (17,26,1,58,15,17,'5 hours Mondays-Fridays',14,'Orphanage','2016-07-25 12:55:28','100001');

/*Table structure for table `project_project_type` */

DROP TABLE IF EXISTS `project_project_type`;

CREATE TABLE `project_project_type` (
  `project_id` int(11) NOT NULL,
  `project_type_id` int(11) NOT NULL,
  PRIMARY KEY (`project_id`,`project_type_id`),
  KEY `project_type_id_idx` (`project_type_id`),
  CONSTRAINT `fk_project_id` FOREIGN KEY (`project_id`) REFERENCES `project` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_project_type_id` FOREIGN KEY (`project_type_id`) REFERENCES `project_type_to_delete` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `project_project_type` */

/*Table structure for table `project_sub_type` */

DROP TABLE IF EXISTS `project_sub_type`;

CREATE TABLE `project_sub_type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `project_id` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=225 DEFAULT CHARSET=latin1;

/*Data for the table `project_sub_type` */

insert  into `project_sub_type`(`id`,`project_id`,`name`) values (1,1,'Studio'),(2,1,'Reggae Artiste'),(3,1,'School'),(4,2,'Community'),(5,3,'Early Childhood School'),(6,3,'Primary School'),(7,3,'Primary and Junior High School'),(8,3,'High School'),(9,3,'Community'),(10,3,'Hospital'),(11,3,'Health Centre'),(12,3,'Psychology'),(13,3,'Social Work'),(14,3,'Government Agency'),(15,4,'Early Childhood School'),(16,4,'Primary'),(17,4,'Primary and Junior High School'),(18,4,'High School'),(19,4,'Community'),(20,4,'Hospital'),(21,4,'Health Centre'),(22,4,'Psychology'),(23,4,'Social Work'),(24,4,'Government Agency'),(25,5,'Orphanage'),(26,5,'Day Care Centre'),(27,5,'Community'),(28,5,'Hospital'),(29,5,'Health Centre'),(30,5,'Family'),(31,6,'Orphanage'),(32,6,'Day Care Centre'),(33,7,'Orphanage'),(34,7,'Day Care Centre'),(35,7,'Community'),(36,7,'Early Childhood School'),(37,7,'Primary School'),(38,7,'Primary and Junior High'),(39,7,'High School'),(40,7,'Community'),(41,7,'Hospital'),(42,7,'Health Centre'),(43,7,'Psychology'),(44,7,'Social Work'),(45,7,'Government Agency'),(46,8,'Orphanage'),(47,8,'Day Care Centre'),(48,8,'Community'),(49,8,'Early Childhood School'),(50,8,'Primary School'),(51,8,'Primary and Junior High School'),(52,8,'High School'),(53,8,'Community'),(54,8,'Health Centre'),(55,8,'Psychology'),(56,8,'Social Work'),(57,8,'Government Agency'),(58,8,'Hospital'),(59,9,'Office'),(60,9,'School'),(61,10,'Orphanage'),(62,10,'Day Care Centre'),(64,10,'Nursery'),(65,10,'Shelter'),(66,10,'Home for the Elderly'),(67,10,'Speech Therapy'),(68,10,'Retirement Home'),(69,10,'Equine Therapy'),(70,10,'Psychology'),(71,10,'Social Work'),(72,11,'Early Childhood School'),(73,11,'Primary School'),(74,11,'Primary and Junior High School'),(75,11,'High School'),(76,11,'Community'),(77,12,'Hospital'),(78,12,'Health Centre'),(79,12,'Community Health'),(80,12,'Public Health'),(81,12,'Hospice'),(82,12,'Psychiatry'),(83,12,'Psychotherapy'),(84,13,'Hospital'),(85,13,'Health Centre'),(86,13,'Community'),(87,13,'Health'),(88,13,'Public Health'),(89,13,'Hospice'),(90,13,'Midwifery'),(91,13,'Home for the Elderly'),(92,19,'Hospital'),(93,19,'Health Centre'),(94,19,'Home for the Elderly'),(95,19,'Rehabilitation Centres'),(96,20,'Hospital'),(97,20,'Health Centre'),(98,20,'Community Health'),(100,20,'School'),(101,21,'Retreat'),(102,22,'Early Childhood School'),(103,22,'Primary School'),(104,22,'Primary and Junior High School'),(105,22,'High School'),(106,22,'Community'),(107,23,'Community'),(108,23,'Government Agency'),(109,23,'Family'),(110,24,'Community Group'),(111,24,'Government Agency'),(112,24,'NGO'),(113,25,'Community Group'),(114,25,'Government Agency'),(115,25,'NGO'),(116,26,'Community Group'),(117,26,'Government Agency'),(118,26,'NGO'),(119,15,'Orphanage'),(120,15,'Day Care Centre'),(122,15,'Nursery'),(123,15,'Shelter'),(124,15,'Home for the Elderly'),(125,15,'Speech Therapy'),(126,15,'Retirement Home'),(127,15,'Equine Therapy'),(128,15,'Psychology'),(129,15,'Social Work'),(130,27,'Orphanage'),(131,27,'Day Care Centre'),(133,27,'Nursery'),(134,27,'Shelter'),(135,27,'Home for the Elderly'),(136,27,'Speech Therapy'),(137,27,'Retirement Home'),(138,27,'Equine Therapy'),(139,27,'Psychology'),(140,27,'Social Work'),(141,16,'Early Childhood School'),(142,16,'Primary School'),(143,16,'Primary and Junior High School'),(144,16,'High School'),(145,16,'Community'),(146,28,'Early Childhood School'),(147,28,'Primary School'),(148,28,'Primary and Junior High School'),(149,28,'High School'),(150,28,'Community'),(151,17,'Hospital'),(152,17,'Health Centre'),(153,17,'Community Health'),(154,17,'Public Health'),(155,17,'Hospice'),(156,17,'Psychiatry'),(157,17,'Psychotherapy'),(158,29,'Hospital'),(159,29,'Health Centre'),(160,29,'Community Health'),(161,29,'Public Health'),(162,29,'Hospice'),(163,29,'Psychiatry'),(164,29,'Psychotherapy'),(165,18,'Hospital'),(166,18,'Health Centre'),(167,18,'Community'),(168,18,'Health'),(169,18,'Public Health'),(170,18,'Hospice'),(171,18,'Midwifery'),(172,18,'Home for the Elderly'),(173,30,'Hospital'),(174,30,'Health Centre'),(175,30,'Community'),(176,30,'Health'),(177,30,'Public Health'),(178,30,'Hospice'),(179,30,'Midwifery'),(180,30,'Home for the Elderly'),(181,14,'Early Childhood School'),(182,14,'Primary School'),(183,14,'Primary and Junior High School'),(184,14,'High School'),(185,14,'Community'),(186,31,'Early Childhood School'),(187,31,'Primary School'),(188,31,'Primary and Junior High School'),(189,31,'High School'),(190,31,'Community'),(191,38,'Orphanage'),(192,38,'Day Care Centre'),(193,38,'Community'),(194,38,'Early Childhood School'),(195,38,'Primary School'),(196,38,'Primary and Junior High'),(197,38,'High School'),(198,38,'Community'),(199,38,'Hospital'),(200,38,'Health Centre'),(201,38,'Psychology'),(202,38,'Social Work'),(203,38,'Government Agency'),(204,44,'Orphanage'),(205,44,'Day Care Centre'),(206,44,'Community'),(207,44,'Early Childhood School'),(208,44,'Primary School'),(209,44,'Primary and Junior High School'),(210,44,'High School'),(211,44,'Community'),(212,44,'Hospital'),(213,44,'Health Centre'),(214,44,'Psychology'),(215,44,'Social Work'),(216,44,'Government Agency'),(217,50,'Office'),(218,50,'School'),(219,34,'Home for the Elderly'),(220,34,'Infirmary'),(221,34,'Rehabilitation Centres'),(222,35,'Rehabilitation Centres'),(223,35,'Infirmary'),(224,35,'Home for the Elderly');

/*Table structure for table `project_supervisor` */

DROP TABLE IF EXISTS `project_supervisor`;

CREATE TABLE `project_supervisor` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `project_id` int(11) NOT NULL,
  `key_contact` varchar(45) NOT NULL,
  `job_title` varchar(45) DEFAULT NULL,
  `mobile_phone` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `supervisor_role` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_pro_sup_idx` (`project_id`),
  CONSTRAINT `fk_pro_sup` FOREIGN KEY (`project_id`) REFERENCES `project` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8;

/*Data for the table `project_supervisor` */

insert  into `project_supervisor`(`id`,`project_id`,`key_contact`,`job_title`,`mobile_phone`,`email`,`supervisor_role`) values (7,27,'Principal','Principal','876111111','newgreen@yahoo.com','The role of the supervisor is to support, guide and provide tasks for volunteers.'),(8,27,'VP','VP','8767777777','newgreen1@yahoo.com','The role of the supervisor is to support, guide and provide tasks for volunteers.'),(15,26,'Major Selburn Laing','Administrator','876 839 7052 or 876 842 4455','selburn_laing@car.salvationarmy.org','The role of the supervisor is to support, guide and provide tasks for volunteers.'),(16,26,'Major Paulette Laing','Administrator','876 443 6673','','The role of the supervisor is to support, guide and provide tasks for volunteers.'),(21,29,'Mr. Earl McLaughlin','Parish Manager','','',''),(22,29,'','','','',''),(23,30,'Mr. Alwin Miller','CEO','','',''),(24,30,'','','','',''),(25,31,'Mr. Nichols','CEO','','',''),(26,31,'','','','',''),(29,28,'Eddie/ Arlene McKenzie','Director','(876) 383-9068/410-1770','rastafariindigenousvillage@gmail.com','The role of the supervisor is to support, guide and provide tasks for volunteers.'),(30,28,'Arleen','Director','8761111111','arleen@riv.com','The role of the supervisor is to support, guide and provide tasks for volunteers.');

/*Table structure for table `project_type` */

DROP TABLE IF EXISTS `project_type`;

CREATE TABLE `project_type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `country_id` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

/*Data for the table `project_type` */

insert  into `project_type`(`id`,`country_id`,`name`) values (1,106,'Reggae Music and Dance'),(2,106,'Rastafarian Culture'),(3,106,'Internship and Dissertation'),(4,106,'Professional'),(5,106,'Summer'),(6,106,'Spring Break'),(7,106,'Group'),(8,106,'Corporate'),(9,106,'Language Lessons');

/*Table structure for table `project_type_to_delete` */

DROP TABLE IF EXISTS `project_type_to_delete`;

CREATE TABLE `project_type_to_delete` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `country_id` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

/*Data for the table `project_type_to_delete` */

insert  into `project_type_to_delete`(`id`,`country_id`,`name`) values (1,106,'Reggae Music and Dance'),(2,106,'Rastafarian Culture'),(3,106,'Internship and Dissertation'),(4,106,'Professional'),(5,106,'Summer'),(6,106,'Spring Break'),(7,106,'Group'),(8,106,'Corporate'),(9,106,'Language Lessons');

/*Table structure for table `qualifications_type` */

DROP TABLE IF EXISTS `qualifications_type`;

CREATE TABLE `qualifications_type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

/*Data for the table `qualifications_type` */

insert  into `qualifications_type`(`id`,`name`) values (1,'Diploma'),(2,'Associates Degree'),(3,'Bachelor of Science'),(4,'Bachelor of Arts'),(5,'Master of Science'),(6,'Master of Arts'),(7,'Ph.D.'),(8,'Other');

/*Table structure for table `reference` */

DROP TABLE IF EXISTS `reference`;

CREATE TABLE `reference` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title_id` int(11) NOT NULL,
  `firstname` varchar(45) NOT NULL,
  `middlename` varchar(45) DEFAULT NULL,
  `lastname` varchar(45) DEFAULT NULL,
  `alias` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `phone` varchar(45) DEFAULT NULL COMMENT 'mobile number',
  `relationship` varchar(45) NOT NULL,
  `identification_type_id` int(11) DEFAULT NULL,
  `identification_number` varchar(20) DEFAULT NULL,
  `volunteer_id` int(11) NOT NULL,
  `address_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_ref_volunteer_idx` (`volunteer_id`),
  CONSTRAINT `fk_ref_volunteer` FOREIGN KEY (`volunteer_id`) REFERENCES `account` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

/*Data for the table `reference` */

insert  into `reference`(`id`,`title_id`,`firstname`,`middlename`,`lastname`,`alias`,`email`,`phone`,`relationship`,`identification_type_id`,`identification_number`,`volunteer_id`,`address_id`) values (10,4,'Stephannie','','Hutchinson',NULL,'bridgette_barrett@yahoo.com','8768682459','Supervisor',NULL,NULL,100020,45),(11,2,'Delone','','Smith',NULL,'bridgette_barrett@yahoo.com','8768682459','Colleague',NULL,NULL,100021,47),(12,1,'Lloyd','','Smith',NULL,'bridgette_barrett@yahoo.com','8768682459','Friend',NULL,NULL,100022,49),(13,1,'Dave','','Middleton',NULL,'bridgette_barrett@yahoo.com','8762218267','Supervisor',NULL,NULL,100023,51),(14,3,'Sasha','','Harris',NULL,'brandaidja@gmail.com','8762838701','Wife',NULL,NULL,100024,53),(15,1,'Howard','','Dennis',NULL,'bridgette_barrett@yahoo.com','8768682459','Supervisor',NULL,NULL,100025,55),(18,1,'Jasper','','Gabriel',NULL,'bridgette_barrett@yahoo.com','8769221111','Principal',NULL,NULL,100028,65),(19,1,'John','','Wright',NULL,'info@rsvpcaribbean.com','8765671126','Supervisor',NULL,NULL,100029,67),(20,1,'Isaiah','','Lawe',NULL,'admin@rsvpcaribbean.com','8768682459','Supervisor',NULL,NULL,100031,71),(21,1,'Dwayne','','Harris',NULL,'envdesigns@gmail.com','9334681','Father',NULL,NULL,100032,73),(22,1,'Fear','','Far',NULL,'jamaica@rsvpcaribbean.com','8792229999','Supervisor',NULL,NULL,100033,75),(23,4,'Marsha','','Baliey',NULL,'marshabailey29@yahoo.com','18687306310','Past Supervisor',NULL,NULL,100034,77),(24,5,'Grace','Althea','Kelly',NULL,'gkelly@ncu.edu.jm','18763613328','Employer',NULL,NULL,100035,105);

/*Table structure for table `relationship_type` */

DROP TABLE IF EXISTS `relationship_type`;

CREATE TABLE `relationship_type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

/*Data for the table `relationship_type` */

insert  into `relationship_type`(`id`,`name`) values (1,'Mother'),(2,'Father'),(3,'Uncle'),(4,'Aunty'),(5,'Grandmother'),(6,'Grandfather'),(7,'Spouse'),(8,'Brother'),(9,'Sister'),(10,'Other');

/*Table structure for table `rsvp_web_page` */

DROP TABLE IF EXISTS `rsvp_web_page`;

CREATE TABLE `rsvp_web_page` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `volunteer_id` int(11) NOT NULL,
  `access_webpage` int(11) DEFAULT '0',
  `access_fundraising_page` int(11) DEFAULT '0',
  `grant_programme` int(11) DEFAULT '0',
  `grant_partner_agency` int(11) DEFAULT '0',
  `grant_flight` int(11) DEFAULT '0',
  `grant_country` int(11) DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `fk_web_vol_idx` (`volunteer_id`),
  CONSTRAINT `fk_web_vol` FOREIGN KEY (`volunteer_id`) REFERENCES `account` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `rsvp_web_page` */

insert  into `rsvp_web_page`(`id`,`volunteer_id`,`access_webpage`,`access_fundraising_page`,`grant_programme`,`grant_partner_agency`,`grant_flight`,`grant_country`) values (4,100020,0,0,0,0,0,0);

/*Table structure for table `site_content` */

DROP TABLE IF EXISTS `site_content`;

CREATE TABLE `site_content` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category_id` int(11) NOT NULL,
  `url_name` varchar(45) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` blob NOT NULL,
  `order` int(11) NOT NULL,
  `date_added` datetime NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;

/*Data for the table `site_content` */

insert  into `site_content`(`id`,`category_id`,`url_name`,`title`,`content`,`order`,`date_added`,`user_id`) values (1,50,'privacy-policy','Privacy policy','<p>RSVP Caribbean Volunteers Limited collects personal information through an application form, request call back form and enquiry form on its website and by direct communications with volunteers. RSVP Caribbean Volunteers Limited respects and protects the privacy of website users and any personal information collected is used solely for coordinating volunteer programme and projects in the Caribbean. </p>\n<p>The use of personal information is only for volunteer support and we only share this information with local programme partners and their teams. </p>\n<p>We do not provide personal information obtained through our website to third-parties unless written permission is given. </p>\n<p>Every effort is made to have consistent streaming of information. However RSVP Caribbean Volunteers Limited does not guarantee that website visitors will have uninterrupted or error-free access to, and use of our website. We also cannot guarantee that any files that are able to be downloaded are error-free and free from viruses or other defects. </p>\n<p>All website users need to rely on their own judgement in relation to the accuracy, completeness and suitability of all content on the RSVP Caribbean Volunteers Limited website. </p>\n<p>Online payments are processed through a secure third-party site, and directly by RSVP Caribbean Volunteers Limited. However information such as credit card details is only processes by the administrative staff who fully understand the need to treat sensitive information responsibly. </p>',1,'2016-01-01 00:00:00',1),(2,50,'terms-and-conditions','Terms And Conditions','ddddd',5,'2016-01-01 00:00:00',1),(3,1,'overview-of-rsvp','Overview Of Rsvp','<p>RSVP Caribbean Volunteers was  conceptualized and developed based on the lack of suitable, affordable and safe  needs-based programmes and projects for volunteers who wish to come to the  Caribbean. RSVP Caribbean offers programmes and projects that are properly  researched and make a meaningful difference. If you give of your time as a  volunteer you need to know that it was worth it, you need to know that it was  useful, you need to know that the company truly cares about the programmes,  projects and communities that you work in and that is what RSVP Caribbean does - Respond...Discover...Change Lives.</p>\n<p>RSVP Caribbean Volunteers is a  registered company with its head office in Jamaica and sub-offices across the  Caribbean. The focus is on the Caribbean because the socio-economic issues such  as illiteracy; poor health services and facilities; inadequate access to, or, unaffordable  health care; high unemployment; poverty; improper sanitation in schools and  communities; lack of access to basic necessities (<em>food, clothing and shelter</em>); insufficient programmes for the  elderly; the homeless and persons with disabilities and many other issues  continue to be a challenge in Caribbean islands. As a volunteer you can accept  the invitation from RSVP Caribbean to come and do your part to positively  change the lives of persons through the various volunteer programmes - Respond...Discover...Change Lives.</p>\n<p>RSVP Caribbean Volunteers coordinates safe,  affordable, high quality needs-based programmes and projects for overseas  volunteers from any country who want to give of their time, skills and  resources to their chosen location. The company manages and coordinates all  aspects of the volunteer\'s experience including, but not limited to, providing  the necessary information about the programmes, projects and accommodation as  well as advice on the culture, travel and volunteering requirements. Ongoing  support before arrival and while volunteers are in-country is an important part  of the service provided. RSVP Caribbean Volunteers provides efficient service  for the entire volunteering experience and takes the burden off the volunteers.  Let us take the hassle out of your volunteering experience - why not RSVP  today?</p>\n<p>The RSVP Caribbean Volunteers Team has  over 20 years combined experience in volunteer placement and working with  volunteers from over 40 countries. The team members have vast cultural exposure  based on their extensive international travel experience; which includes the  countries of our volunteers and, of course,��  the Caribbean nations that will facilitate the RSVP Caribbean Volunteers  experience As a result, RSVP Caribbean has first-hand knowledge of what it  means to live and work in the Caribbean; which is coupled with our sound  knowledge of the Caribbean\'s hospitality, travel and tourism industry. RSVP  Caribbean is very passionate about helping others which is an extension of the  fact that we believe 100% in what we do and, as a result, have been active in  volunteering on various programmes and projects for many years.</p>\n',10,'2016-01-01 00:00:00',1),(4,1,'our-approach','Our Approach','ddd cccc',20,'2016-01-01 00:00:00',1),(5,1,'vision','Vision','Our vision is to be the leading provider of meaningful and impacting volunteer opportunities that will address critical issues in the Caribbean.',30,'2016-01-01 00:00:00',1),(6,1,'mission','Mission','Our mission is to identify programmes and projects that are aligned to local needs and provide mutually beneficial opportunities for volunteers, communities and partners to make a real difference.',40,'2016-01-01 00:00:00',1),(7,1,'rsvp-core-values','Rsvp Core Values','<p>RSVP  Caribbean is committed to:</p>\n<ul>\n  <li><strong>Integrity </strong> - ensuring that honesty and strong moral principles guide the work of the  company.</li>\n  <li><strong>Quality  Service </strong> - providing exceptional service and well organized  programmes and projects that will benefit all partners.</li>\n  <li><strong>Community  Impact</strong> - ensuring that the contribution of volunteers supports  community and national needs.</li>\n  <li><strong>Cultural  Exchange</strong> - fostering a mutually beneficial learning experience for  volunteers and all partners and ensuring that each partner leaves the process  gaining a greater appreciation of the value of others. A culture of balance,  fairness and creativity is promoted.</li>\n  <li><strong>Mutual  Respect</strong> - ensuring that all local norms and customs are preserved  and protected, and at the same time understanding the vantage point of the  volunteers.</li>\n  <li><strong>Environmental  Preservation</strong> - deliberately taking steps to ensure  that the company and all its partners are environmentally aware and act  responsibly in caring for the environment.</li>\n  <li><strong>Sustainability</strong> - ensuring the longevity of programmes through continuous support where needed  and strategically facilitating a generational impact.</li>\n</ul>',50,'2016-01-01 00:00:00',1),(8,1,'rsvp-services','Rsvp Services','<p><strong>Individual Volunteering Service</strong> - You have thought about giving back to those in need, exploring the Caribbean  and making sure that you live - not just exist. You have wondered what it would  be like to live for a while in a developing country and experience the real  situations that exist, not just what is advertised as the tourist product. RSVP  Caribbean offers the solution to these wondering thoughts and will coordinate a  one of a kind, safe and affordable volunteering experience for you. The <strong>Individual Volunteering Service</strong> is a  trip for a person who will be travelling alone, or with less than 5 friends, to  volunteer in the Caribbean. You can choose from any of the advertised  programmes. Volunteers can select a programme based on their interests, skills  and background. Dependent on your date of arrival, other volunteers will  already be in-country and there is always 24/7 staff support. Please see <strong>Programme and  Project Description </strong>for full list of offerings.</p>\n<p><strong>Group Volunteering Service</strong> - If you want to experience the Caribbean with your friends, colleagues or  family, we have the right projects just for you. Through our <strong>Group Volunteering Service</strong> we organize  trips for groups such as universities, churches, community groups, sports  teams, service learning groups (faculty-led or student-led), medical campaigns,  friends, families and any other group that wants to volunteer in the Caribbean.  You can choose from one of the advertised projects. Please see <strong>Group Trip  Projects </strong>for full list of offerings. You can also tell us about your  specific needs and we will tailor a project just for your group. RSVP Caribbean  will work with you to determine the specific objectives of your trip and then  prepare a timetable which will be sent to the group leader prior to arrival.  You don&rsquo;t have to do it alone, get your group together and <strong>Contact Us</strong> for more details. </p>\n<p><strong>Internship and Dissertation Service </strong> - The  Caribbean can be an interesting and exciting place to earn your university  credits; volunteering in the Caribbean provides the opportunity to do just  that. The Caribbean offers you a different perspective on a number of issues,  as it is made up of developing countries. You will see, observe and learn about  issues that you may never see in your country. Our systems, procedures,  resources and ability to creatively use what we have available is a must see.  Don&rsquo;t do your internship and dissertation in your country - what fun is that?  Do it in the Caribbean with RSVP. If you are a volunteer who has specific  requirements related to your university studies and would like to achieve these  objectives on a project in the Caribbean then please see <strong>Internship and Dissertation Projects</strong> and <strong>Contact Us</strong> today. A full description of the internship is required which will be passed on  to the partner agency. Any associated forms which must be completed need to be  sent before acceptance so we can determine if we have a suitable internship for  you.� </p>\n<p><strong>Summer Volunteering Service</strong> - No-one wants to sit at home for the summer. Everyone wants to do something  fun, exciting and meaningful. RSVP Caribbean offers carefully tailored projects  for high school students (16 -18 years old) who want to volunteer during the  summer (June - August). As a volunteer you will work on projects that will  change your life and the lives of persons that you will work with. You will  leave the Caribbean country you have selected with a sense of purpose and  fulfillment. This project is designed to provide  ongoing support to volunteers while in-country as you are fully chaperoned and  parents and guardians can take comfort in knowing that that their children will  receive special attention. RSVP Caribbean will prepare a timetable which will  be sent to you and your parents prior to  arrival. Please see <strong>Summer Projects </strong>for full list of offerings. <strong>Apply Now</strong> - don&rsquo;t be left out of this incredible experience.</p>\n<p><strong>Spring Break Volunteering Service</strong> - Do something different for spring break. Do something that will allow you to  experience life in another country while helping those in need. If you are a  university student who wants to use your spring break in a productive way, then  RSVP Caribbean has the right project for you. These short-term projects are  customized to suit the limited timeframe but also ensure that the volunteering  experience is mutually beneficial. Please see <strong>Spring Break Projects </strong>for full list  of offerings. <strong>Apply  Now</strong> - don&rsquo;t be left out of this incredible experience.</p>\n<p><strong>Corporate Volunteering Service </strong> - Our corporate volunteering service  is designed for corporate teams to increase innovation, improve leadership  skills and encourage a culture of giving and sustainable development. The <strong>Corporate Volunteering Service</strong> experience improves team building skills, bolsters group dynamics, supports the  development of problem - solving skills, fosters resilience, highlights the  importance of giving and promotes corporate social responsibility. It allows  for a greater understanding of cross-cultural issues, stimulates creativity,  challenges leaders and the team to operate outside of their comfort level and  contributes to a shared learning experience. Employers can send  a group of their employees to volunteer in the Caribbean for short periods so that  the activity does not affect productivity. Employers can also use this as a  performance incentive whereby employees are awarded a trip to the Caribbean to  volunteer and enjoy the culture. Please see <strong>Corporate Projects</strong>. You can also  tell us about your specific needs and we will tailor a project just for your  group. RSVP Caribbean will work with you to determine the specific objectives  of your trip and then prepare a timetable which will be sent to the group  leader prior to arrival. <strong>Contact Us</strong> for more details and we will  coordinate a once in a lifetime experience for your team.</p>\n<p><strong>Professional Volunteering Service</strong> - <strong> </strong>If you have been working in your  field but need to experience how others in your field operate in a developing  country then RSVP Caribbean has just the project for you. Professional  volunteering allows for a mutual learning experience. You bring your skills and  expertise to the partner agency but you also learn from them. Some processes  may be similar, others quite different but in the end, all the persons involved  would have benefited from the process. So if you are qualified and have been  working in your field for at least one year and would like to give of your  time, skills and expertise on a programme in the Caribbean why not volunteer on  one of our programmes? �Please see <strong>Professional  Projects</strong> for more details.</p>\n<p><strong>Language Lesson Service</strong> - Do you want to improve your English while in the Caribbean? Then choosing the  language lesson service is just for you. Language  immersion provides, possibly, the very best way to improve your use of a second  language; the immersion is inevitable if you visit a Caribbean country. English  is the first language of most Caribbean islands and as such, we are able to  teach written and conversational English very well. A trained teacher will  facilitate these structured lessons with volunteers. If you would rather learn  Patois which is the dialect of Jamaica then you can - yeah mon (yes you can)! A  competent Patois teacher will facilitate these structured lessons with  volunteers. Please see <strong>Language Lessons </strong>for more details.</p>\n<p><strong>Customized Volunteering Service </strong> - If you have checked out the programmes and projects but you are not seeing  anything of interest to you please <strong>Contact Us</strong> and let us know. If you have a  particular interest then complete the <strong>Enquiry Form</strong> and our team at RSVP Caribbean will  research your interest and let you know if it is possible. If it&rsquo;s possible we  will do everything to make it happen.</p>\n',60,'2016-01-01 00:00:00',1),(9,1,'rsvp-guarantees','Rsvp Guarantees','<ul>\n  <li><strong>Resource  Allocation</strong> - we guarantee that resources will be provided to  programmes and projects.</li>\n  <li><strong>Donation</strong> - we guarantee that once per quarter a tangible donation will be made to an  institution or individual in need; from one of the RSVP Caribbean destinations.</li>\n  <li><strong>Community Impact</strong> - we guarantee that 5% of your programme fee will go towards a Community  Development Fund to support community projects and partner needs through the  RSVP Foundation.</li>\n  <li><strong>Needs-Based Programmes and Projects</strong> - we guarantee that you will have a meaningful programme or project that allows  you to make a difference. </li>\n  <li><strong>Exceptional Service</strong> - we guarantee to deliver excellent service that exceeds your expectations. </li>\n  <li><strong>Efficient Service</strong> - we guarantee to always respond on time (<em>within 48 hours for weekday queries and  within 72 hours for weekend queries</em>), for late replies you will receive 2%  discount; if we are not on time you pay less. </li>\n  <li><strong>Confidentiality </strong> - We guarantee complete privacy of information collected from you and on your  behalf. </li>\n  <li><strong>Uniqueness</strong> - we guarantee a  customized approach to each volunteer and will take your particular situation,  expectations and needs into consideration at all times. </li>\n</ul>\n',70,'2016-01-01 00:00:00',1),(10,1,'team-rsvp','Team Rsvp','<p>RSVP Caribbean is governed by a Board  of Directors that ensures that there is accountability and transparency and  that the best interest of the volunteers and community is always at the  forefront of any decision. These are unpaid professionals who give of their  time and expertise. Each board member has specific industry knowledge and uses  his/her expertise to support the work of the staff across the Caribbean.</p>\n<p>RSVP Caribbean also has a team that  manages the day to day operations of the company; these are persons who are employed  based on their specific talents and expertise. The operations, administrative  and programme support staff at RSVP are based in the Caribbean and understand  the specific context and are specialists in their area. The company employs  overseas staff from different nationalities in its marketing offices, promotes  a culture of diversity and is an equal opportunity employer. The Chief  Executive Officer reports to the Board of Directors.</p>\n',80,'2016-01-01 00:00:00',1),(11,1,'why-volunteer-with-rsvp','Why Volunteer With Rsvp','p>RSVP Caribbean is based in Jamaica  with key partners in different Caribbean islands. As nationals of the various  countries the team understands the important needs that should be their  focus� and are committed to ensuring that  volunteers make a meaningful difference while on their programmes. With RSVP Caribbean,  the team focuses on impact while ensuring that all partners are considered in  the process.</p>\n<p><strong>Accountability and Transparency</strong> - there is an unpaid Board of Directors that reviews  the operations of the company every quarter to ensure that the volunteering  experience is excellent and the community impact is evident. We comply with the  highest standards of management, accountability, best practices and  environmental stewardship. An annual report is also prepared and published.</p>\n<p><strong>Affordable</strong> - prices are reasonable  and competitive; and RSVP Caribbean ensures value for money. The communities  and partners benefit from the contributions made from  programme and project fees. </p>\n<p><strong>Communication</strong> - RSVP Caribbean  offers timely and accurate communication through our website, emails, personal webpage,  telephone conversations and text messaging. All information is kept up-to-date  and changes are quickly communicated. </p>\n<p><strong>Community Impact and Value for Money</strong> - the purpose  of RSVP Caribbean is to serve persons in needs and so the impact being made at  the community level is noticeable. Where possible resources are bought from  community businesses and through focused intervention RSVP Caribbean supports  giving back to areas of need. Volunteers, host families, partners, communities  and local businesses are all important in the process of changing lives.</p>\n<p><strong>Expertise and Knowledge</strong> - all staff are competent, experienced and  knowledgeable about the culture, requirements, programmes, projects,  accommodation and way of life in each island. They will be able to answer all  your questions and guide you based on your specific objectives for  volunteering. We offer a  Caribbean operated volunteering business that understands the Caribbean  context. Each volunteer is directly assigned to one staff member pre-arrival  and upon arrival to a Programme Coordinator who is their first point of  contact. Two other staff members act as the next point of contact if for some  reason the assigned staff member is not available. </p>\n<p><strong>Flexible Dates and Duration</strong> - in most cases you choose your dates and how long  you want to stay. Except for factors beyond our control such as school  holidays, public holidays, group dates, natural disasters or community downtime; you are able to determine when you want  to come and how long you want to stay.</p>\n<p><strong>Fun</strong> - with all the  work you will also have time for fun. Caribbean nationals know how to relax and  have a good time - you will get to Discover while Changing Lives.</p>\n<p><strong>Good Standard Accommodations</strong> - all our accommodations are carefully checked to  ensure safety, security and comfort. You will have the basic amenities - electricity, clean water, a comfortable bed, adequate storage and a lovely  family who will treat you as one of their very own.</p>\n<p><strong>High Quality Needs-Based Programmes and Projects</strong> - All programmes and projects are properly researched  and linked to local, national, regional and international priorities and are  specifically aimed at addressing key issues affecting individuals, groups and  communities in different islands. You will receive information on your  programme or project before you arrive. RSVP Caribbean has a wide network of  partners with established programme, project linkages and networks that are  tapped into to source or create the best option for you. Our programmes and  projects definitely make a tangible and noticeable difference. There is a  pre-established plan for each programme and project with each partner;� this plan and its expected outputs are  implemented and followed for continuity and ease of tracking results.</p>\n<p><strong>Pre-Departure Support</strong> - Before arrival  in country Team RSVP will provide on-going support through emails, calls,  skype, Whatsapp and other options to ensure that the necessary support and  information is communicated to all volunteers. Team RSVP knows about the  Caribbean, is based in the Caribbean and understands the Caribbean context. </p>\n<p><strong>Responsible Volunteering</strong> - at RSVP Caribbean we ensure that volunteering  abroad is a benefit to the volunteer and the local organization. We provide all  the information so volunteers can make informed and responsible choices and do  not exploit people, animals, wildlife and the environment in a bid to promote  what we do. We have a <strong>Responsible Volunteering Policy</strong> that outlines how  we operate.</p>\n<p><strong>24-Hour In-Country Support</strong> - Upon arrival our team provides 24-hour support and  can be called upon any day and at any time to  provide assistance. </p>\n<p><strong>Safety</strong> <strong>and Security</strong> - Your safety is our  number one priority. We ensure that programme, projects, accommodations and  communities are safe for our volunteers to work and live by conducting risk  assessments and preparing risk management and safety plans. We provide a  detailed orientation the day after arrival which includes the necessary safety  tips. Background and reference checks of staff, host families and volunteers  are completed. We also have first aid qualified staff and proper emergency  response planning.</p>\n<p><strong>School/University Credits</strong> - If you are looking for school credits or to  complete your internship or dissertation then RSVP Caribbean will provide that  opportunity for you. You will also receive an academic reference and  certificate if you have completed all the requirements of your volunteer  agreement. </p>\n<p><strong>Sustainability </strong> - volunteering with RSVP Caribbean will be short-term for most volunteers.  Given our approach which is aligning what we do to the Sustainable Development  Goals it is imperative that each volunteer programme and partner has a plan  that facilitates achieving these overarching goals. Each volunteer&rsquo;s tasks feed  into that plan and so each volunteer builds on the work of previous volunteers.  These goals and the work it necessitates is tied directly to� empowering communities and building  relationships �that lead to growth in all  programme areas. There is ongoing research and documentation, local needs being  addressed, weekly visits to programmes and projects, staff training in specific  programme areas, volunteer tasks linked to goals and plans� with these plans being updated by each  volunteer so that there is continuity.</p>\n<strong>Welcome and Orientation</strong> - coming to a new country can be daunting but do not worry the RSVP Caribbean  staff will be there to meet you at the airport and ensure that you are safely  taken to your host family. The day after arrival you will be picked up from  your host family by a staff member and you will get a full day of orientation  so you can better understand your new environment.\n',90,'2016-01-01 00:00:00',1),(12,1,'why-volunteer-in-the-caribbean','Why Volunteer In The Caribbean?','<p>What you often see when you research any Caribbean  island are the lovely beaches, sunsets, landscape, resorts, architecture and  the beauty of the people. However, these images do not tell the full story  about some of the harsh conditions that many persons in the Caribbean are  experiencing. From a low of 16% to a high of 80% of the Caribbean&rsquo;s various  populations are living below the poverty line.</p>\n<p>The Caribbean islands are riddled with many social  problems. This includes high illiteracy rates, limited resources to stimulate  learning within schools at various levels, high unemployment, high levels of  debt, inadequate access to or unaffordable health care, improper sanitation in  schools and communities, lack of access to basic necessities (<em>food, clothing, shelter</em>), insufficient  programmes for the elderly, homeless and persons with disabilities and many  other issues - it is a myth to highlight only sand, sea and sun. The focus of  Caribbean islands has been to reduce the debt burden leaving very little to  improve the lives of the people.</p>\n<p>As developing countries the resources such as schools,  hospitals, child care facilities among others are basic and inadequate and the  need to change this often times is a challenge. One of the resources needed is the  human resource necessary to support the various partner institutions in the  child care, education, health, environment, humanitarian and community sectors.  As a volunteer you can provide that extra pair of hands, skills, experience and  motivation to help a partner take better care of its beneficiaries.</p>\nBelow  are some statistics and information that will help you to see why volunteering  in the Caribbean helps to change lives.\n\n\n<p><strong>Health Care</strong></p>\n<ul>\n  <li>Cardiovascular  diseases, diabetes and malignant neoplasm are the leading causes of death in  Latin America and the Caribbean</li>\n  <li>Approximately  900,000 deaths from cardiovascular disease and 400,000 from cancer occur each  year across Latin America and the Caribbean</li>\n  <li>The  English-Speaking Caribbean shows even greater difference in mortality due to  cardiovascular diseases compared to communicable diseases</li>\n  <li>The estimated  mortality due to cardiovascular diseases and diabetes is almost 250 per 100,000  population compared to 70 per 100,000 with communicable diseases</li>\n  <li>Data from Pan  American Health Organization (PAHO) suggest that the Caribbean epidemic of  chronic non-communicable diseases is the worst in the region of the Americas</li>\n  <li>There is a high  prevalence of obesity, hypertension, pre-hypertension, respiratory diseases and  circulatory diseases</li>\n  <li>Chronic  non-communicable diseases are included as priority for governments in the  Caribbean</li>\n</ul>\n<p>&nbsp;</p>\n<p><em>Source: Chronic  Diseases in the Caribbean, West Indies Medical Journal vol. 60 No.4, 2011</em></p>\n<p><strong>Water and  Sanitation</strong></p>\n<ul>\n  <li>Approximately  110 million people do not have access to improved sanitation in the Latin  American and the Caribbean<strong></strong></li>\n  <li>Approximately  36 million people do not have access to safe water in Latin America and the  Caribbean<strong></strong></li>\n  <li>Only 51% of the  population have access to sewers<strong></strong></li>\n  <li>Poor water  quality, poor quality of service, irregular supply, low water pressure, unsafe  drinking water, lack of resources and affordability are some of the main issues  related to water and sanitation in the Caribbean<strong></strong></li>\n</ul>\n<p>&nbsp;</p>\n<p><em>Source: Water  and Sanitation in Latin America and the Caribbean UN Habitat Report, 2010 and  UNDP Human Development Report - Water and Sanitation in Latin America and the  Caribbean, 2006 </em></p>\n<p><strong>&nbsp;</strong></p>\n<p><strong>Literacy Rate </strong></p>\n<ul>\n  <li>Literacy is  defined as the ability to read and write, with understanding, a short, simple  statement about one&rsquo;s everyday life (UN, 2008)<strong></strong></li>\n  <li>Caribbean adult  literacy rate is 69%<strong></strong></li>\n  <li>Caribbean youth  literacy rate is 82%<strong></strong></li>\n  <li>Low adult  literacy levels is a problem that affects more women than men<strong></strong></li>\n</ul>\n<p><em>Source: Adult  and Youth Literacy: National, Regional and Global Trends 1985-2015, UNESCO  Institute of Statistics</em></p>\n<p><strong>Unemployment</strong></p>\n<ul>\n  <li>6.2% - 20% �unemployment rate in the Caribbean<strong></strong></li>\n  <li>60% of citizens  in the Caribbean are youth<strong></strong></li>\n  <li>11%-40% unemployment  rate among youth across the islands<strong></strong></li>\n  <li>The Caribbean  has the highest youth employment levels<strong></strong></li>\n  <li>Unemployment  rate for women is 30% higher than men<strong></strong></li>\n  <li>The region will  have to create nearly 50,000,000 jobs over the next decade just to offset  demographic growth<strong></strong></li>\n</ul>\n<em>Source: International Labour Organization Labour  Review for Latin America and the Caribbean 2014/2015 and Youth Unemployment and  Labour in the Caribbean, Caribbean Knowledge Series, January 2014</em>\n',100,'2016-01-01 00:00:00',1),(13,1,'why-pay-to-volunteer','Why Pay To Volunteer?','<p>Instead of coming to the Caribbean  for just sand, sea, sun and fun, why not pay to volunteer with RSVP Caribbean.  This ensures that there will be a programme or project that matches your skill  sets, needs, interests and preferences. You will have RSVP Caribbean take the  hassle out of the process by coordinating the experience for you. Value for  money is what we pride ourselves on and so it evident that the money you paid  was well worth it. After giving of your time Monday to Friday each week then  you still get to experience the warmth and vibe of the islands. You pay for the  support, the coordination, the logistics and contribute to a fund that helps  communities across the Caribbean - isn&rsquo;t that worth it?</p>\n<p>Volunteering is a life changing  experience and a different opportunity for you to make an impact and support a  cause. RSVP Caribbean programmes start at $1,400USD per person; please see <strong>Programme and Project Price</strong> for more details. We  do not receive any funding from government agencies, development agencies or  external parties to operate in our various locations. The fee you pay goes  towards the operations of the various programmes and projects across the  Caribbean. The fee also allows us to select the right staff, carefully research  programmes, build and sustain our partnership network, provide all the  necessary services for you and importantly, give back to the communities. You  can click on <strong>Breakdown  of Fees </strong>to see how your money is spent. </p>\n',110,'2016-01-01 00:00:00',1),(14,1,'who-can-volunteer-with-rsvp','Who Can Volunteer With Rsvp?','<p>RSVP Caribbean accepts volunteers  who are as young as 16 years old upon arrival in-country. There is no upper age  limit, once volunteers are healthy, enthusiastic and dedicated they can  volunteer for our programmes and projects. So if you are in <em>high school, taking a gap year, a recent  graduate, a college or university student, retired, a career breaker, employee,  professional or in any other category</em> in any field, then RSVP Caribbean has  a programme or project for you; once you meet the requirements. Interested  persons of all backgrounds, experience and nationalities can apply - we welcome  diversity. Why not Respond...so you can Discover and Change Lives.</p>\n',120,'2016-01-01 00:00:00',1),(15,1,'the-volunteering-experience','The Volunteering Experience','<p><strong>Step 1: Review  Information</strong></p>\n<ol>\n  <li>Review <strong>Programme and Project Description </strong>�and <strong>Destinations</strong> - Volunteer</li>\n  <li>Review <strong>Terms and Conditions</strong> - Volunteer</li>\n  <li>Check <strong>Programme and Projects Price</strong>, <strong>What is Included </strong>and <strong>What is Not  Included</strong> - Volunteer</li>\n  <li><strong>Contact  Us</strong> with questions - Volunteer</li>\n</ol>\n\n<p><strong>Step 2: Application</strong></p>\n<ol>\n  <li>Choose programme and destination - Volunteer</li>\n  <li>Complete and submit <strong>Application Form </strong>and pay deposit - Volunteer</li>\n</ol>\n\n<p><strong>Step 3: Pre-Departure </strong></p>\n<ol>\n  <li>Acceptance email sent to volunteer within 5 working  days - RSVP</li>\n  <li>Volunteer will receive a call within 10 working days  after your acceptance email - RSVP</li>\n  <li>Volunteer will receive acceptance letter, volunteer  manual, RSVP personal webpage, <strong>Visa </strong>information (if applicable), <strong>Flight and Travel </strong>and<strong> Medical Insurance </strong>information reminder and all other information within 15 working  days - RSVP</li>\n  <li>Review RSVP personal webpage - Volunteer</li>\n  <li>Review <strong>Travel Kit</strong> and start planning - Volunteer</li>\n  <li>Pay full programme fee 90 days before arrival or  immediately if application is less than 90 days - Volunteer</li>\n  <li>Email Travel and Medical insurance 60 days before  arrival or immediately if application is less than 60 days - Volunteer</li>\n  <li>Finalize programme, accommodation and all logistics - RSVP</li>\n  <li>One month before departure volunteer will receive  programme and accommodation details - RSVP</li>\n  <li>Review information - Volunteer</li>\n  <li>Start packing - Volunteer</li>\n  <li>Two weeks before departure volunteer will receive  details of the airport pickup driver - RSVP</li>\n  <li>Final packing - Volunteer</li>\n  <li>Final call two weeks before arrival - RSVP</li>\n</ol>\n\n<p><strong>Step 4: In the Caribbean</strong></p>\n<ol>\n  <li>A RSVP Caribbean driver will meet you at the airport - RSVP</li>\n  <li>Orientation the day after arrival - RSVP</li>\n  <li>Provide on-going support and coordinate events - RSVP</li>\n  <li>Attend work, workshops, social activities, cultural  events and enjoy the island - Volunteer</li>\n  <li>Provide 24-hour support - RSVP</li>\n  <li>Prepare departure information - RSVP</li>\n  <li>Volunteer departs and tells others about the wonderful  experience - Volunteer</li>\n</ol>',130,'2016-01-01 00:00:00',1);

/*Table structure for table `staff` */

DROP TABLE IF EXISTS `staff`;

CREATE TABLE `staff` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `account_id` int(11) NOT NULL,
  `job_title` varchar(45) DEFAULT NULL,
  `department` varchar(45) DEFAULT NULL,
  `email_work` varchar(45) DEFAULT NULL,
  `phone_office` varchar(15) DEFAULT NULL,
  `fax` varchar(15) DEFAULT NULL,
  `staff_office_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_acc_id` (`account_id`),
  CONSTRAINT `fk_acc_id` FOREIGN KEY (`account_id`) REFERENCES `account` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

/*Data for the table `staff` */

insert  into `staff`(`id`,`account_id`,`job_title`,`department`,`email_work`,`phone_office`,`fax`,`staff_office_id`) values (1,100011,'Regional Director','Operations',NULL,'876 569 5918','',1),(2,100012,'Operations Director','Operations',NULL,'876 633 1526','',1),(3,100030,'Human Resource Manager','Human Resource and Training',NULL,'','',1);

/*Table structure for table `staff_office` */

DROP TABLE IF EXISTS `staff_office`;

CREATE TABLE `staff_office` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` tinytext NOT NULL,
  `address_id` int(11) NOT NULL,
  `staff_contact_1` varchar(100) DEFAULT NULL,
  `contact_number_1` varchar(15) DEFAULT NULL,
  `staff_contact_2` varchar(100) DEFAULT NULL,
  `contact_number_2` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_address_idx` (`address_id`),
  CONSTRAINT `fk_address` FOREIGN KEY (`address_id`) REFERENCES `address` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

/*Data for the table `staff_office` */

insert  into `staff_office`(`id`,`name`,`address_id`,`staff_contact_1`,`contact_number_1`,`staff_contact_2`,`contact_number_2`) values (1,'Jamaica',20,'Bridgette Barrett','876 296 1938','Shelly-Ann Cummings','876 569 5918');

/*Table structure for table `title` */

DROP TABLE IF EXISTS `title`;

CREATE TABLE `title` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

/*Data for the table `title` */

insert  into `title`(`id`,`name`) values (1,'Mr.'),(2,'Miss.'),(3,'Mrs.'),(4,'Ms.'),(5,'Dr.');

/*Table structure for table `travel_detail` */

DROP TABLE IF EXISTS `travel_detail`;

CREATE TABLE `travel_detail` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `volunteer_id` int(11) NOT NULL,
  `departure_airport` varchar(45) DEFAULT NULL,
  `departure_date` datetime DEFAULT NULL,
  `check_in_time` datetime DEFAULT NULL,
  `airline_name` varchar(45) DEFAULT NULL,
  `flight_number` varchar(45) DEFAULT NULL,
  `arrival_airport` varchar(45) DEFAULT NULL,
  `arrival_date` datetime DEFAULT NULL,
  `staff_note` mediumtext,
  `date_added` datetime NOT NULL,
  `date_updated` datetime NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_travl_acc_idx` (`volunteer_id`),
  CONSTRAINT `fk_travl_acc` FOREIGN KEY (`volunteer_id`) REFERENCES `account` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

/*Data for the table `travel_detail` */

insert  into `travel_detail`(`id`,`volunteer_id`,`departure_airport`,`departure_date`,`check_in_time`,`airline_name`,`flight_number`,`arrival_airport`,`arrival_date`,`staff_note`,`date_added`,`date_updated`,`user_id`) values (8,100020,'Miami','2016-08-01 12:00:00','2016-08-01 09:00:00','American Airlines','AA3319','Norman Manley International Airport','2016-08-01 14:00:00','Driver assigned - Bevin.','2016-07-14 18:27:31','0000-00-00 00:00:00',100001),(9,100021,'Miami International','2016-08-01 10:00:00','2016-08-01 07:00:00','American Airlines','AA3227','Norman Manley International Airport','2016-08-01 14:00:00','Mr. Bryan assigned to pick up volunteer.','2016-07-26 06:59:20','0000-00-00 00:00:00',100001),(10,100024,'John F. Kennedy','2016-08-08 12:00:00','2016-08-08 09:00:00','Delta Airways','DL2271','Sangster International Airport','2016-08-08 15:10:00','Bevin assigned for pickup. Transit through Miami at 1:00pm.','2016-07-26 07:06:53','0000-00-00 00:00:00',100001);

/*Table structure for table `volunteer` */

DROP TABLE IF EXISTS `volunteer`;

CREATE TABLE `volunteer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `account_id` int(11) NOT NULL,
  `nationality_id` int(11) NOT NULL,
  `birth_country_id` int(11) NOT NULL,
  `name_on_passport` varchar(45) DEFAULT NULL,
  `passport_number` varchar(45) DEFAULT NULL,
  `current_status_id` int(11) NOT NULL DEFAULT '1',
  `current_status_other_id` int(11) DEFAULT NULL,
  `high_school` varchar(255) DEFAULT NULL,
  `undergraduate_university` varchar(255) DEFAULT NULL,
  `post_graduate` varchar(45) DEFAULT NULL,
  `credit_for_school` int(11) NOT NULL DEFAULT '0' COMMENT 'Yes or no',
  `credit_for_school_desc` varchar(255) DEFAULT NULL,
  `qualifications_id` int(11) NOT NULL DEFAULT '0',
  `skills` varchar(255) DEFAULT NULL,
  `occupation` varchar(45) DEFAULT NULL,
  `sponsored` int(11) NOT NULL DEFAULT '0' COMMENT 'Yes or No',
  `sponsored_desc` varchar(255) DEFAULT NULL,
  `address_id` int(11) NOT NULL,
  `resume` varchar(45) DEFAULT NULL,
  `have_travel_companions` int(11) NOT NULL DEFAULT '0',
  `travel_companions_name` varchar(45) DEFAULT NULL,
  `special_diet_restrictions` int(11) NOT NULL DEFAULT '0',
  `special_diet_restrictions_desc` varchar(255) DEFAULT NULL,
  `on_medication` int(11) NOT NULL DEFAULT '0',
  `medication_name` varchar(255) DEFAULT NULL,
  `any_illnesses` int(11) NOT NULL DEFAULT '0',
  `illnesses_desc` varchar(255) DEFAULT NULL,
  `any_allergies` int(11) NOT NULL DEFAULT '0',
  `allergies_desc` varchar(255) DEFAULT NULL,
  `criminal_convictions` int(11) NOT NULL DEFAULT '0',
  `criminal_convictions_desc` varchar(255) DEFAULT NULL,
  `heard_about_id` int(11) NOT NULL DEFAULT '1',
  `time_to_speak` time DEFAULT NULL,
  `volunteer_status_type_id` int(11) NOT NULL DEFAULT '2',
  `host_family_preference` int(11) NOT NULL DEFAULT '0',
  `host_family_preference_desc` mediumtext,
  `project_special_interest` mediumtext,
  `other_information` mediumtext,
  `staff_note` mediumtext NOT NULL,
  `user_id` int(11) NOT NULL DEFAULT '0',
  `date_added` datetime NOT NULL,
  `date_updated` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_vol_account_id` (`account_id`),
  KEY `address_id_idx` (`address_id`),
  KEY `fk_vol_status_idx` (`volunteer_status_type_id`),
  CONSTRAINT `fk_vol_account_id` FOREIGN KEY (`account_id`) REFERENCES `account` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_vol_address_id` FOREIGN KEY (`address_id`) REFERENCES `address` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_vol_status` FOREIGN KEY (`volunteer_status_type_id`) REFERENCES `volunteer_status_type` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=latin1;

/*Data for the table `volunteer` */

insert  into `volunteer`(`id`,`account_id`,`nationality_id`,`birth_country_id`,`name_on_passport`,`passport_number`,`current_status_id`,`current_status_other_id`,`high_school`,`undergraduate_university`,`post_graduate`,`credit_for_school`,`credit_for_school_desc`,`qualifications_id`,`skills`,`occupation`,`sponsored`,`sponsored_desc`,`address_id`,`resume`,`have_travel_companions`,`travel_companions_name`,`special_diet_restrictions`,`special_diet_restrictions_desc`,`on_medication`,`medication_name`,`any_illnesses`,`illnesses_desc`,`any_allergies`,`allergies_desc`,`criminal_convictions`,`criminal_convictions_desc`,`heard_about_id`,`time_to_speak`,`volunteer_status_type_id`,`host_family_preference`,`host_family_preference_desc`,`project_special_interest`,`other_information`,`staff_note`,`user_id`,`date_added`,`date_updated`) values (28,100020,106,106,'Bridgette Barrett',NULL,9,9,'','','',1,'Sign forms',7,'Art','Social worker',1,'University',44,NULL,0,'',1,'no pork',0,'',0,'',0,'',0,'',4,'07:00:00',1,0,NULL,'sleep on the floor',NULL,'',100020,'2016-07-10 14:33:22','2016-07-10 14:33:22'),(29,100021,106,106,'Bevin Barrett',NULL,7,7,'','','',0,'',1,'Electrical','Electrician',0,'',46,NULL,0,'',0,'',0,'',0,'',0,'',0,'',1,'07:00:00',2,0,NULL,NULL,NULL,'',100021,'2016-07-10 14:48:28','2016-07-10 14:48:28'),(30,100022,222,222,'Sefton Cummings',NULL,5,5,'','','',0,'',1,'Accounting','Accountant',0,'',48,NULL,0,'',0,'',0,'',0,'',0,'',0,'',2,'07:00:00',2,0,NULL,NULL,NULL,'',100022,'2016-07-10 14:59:05','2016-07-10 14:59:05'),(31,100023,223,223,'Dale Rogers',NULL,5,5,'','','',0,'',1,'Dance','Psychologist',0,'',50,NULL,0,'',0,'',0,'',0,'',0,'',0,'',1,'07:00:00',1,0,NULL,NULL,NULL,'',100023,'2016-07-10 15:38:03','2016-07-10 15:38:03'),(32,100024,106,106,'Dwayne Harris',NULL,9,9,'','','',0,'',1,'Marketing','Business Man',0,'',52,NULL,0,'',0,'',0,'',0,'',0,'',0,'',11,'07:00:00',2,0,NULL,NULL,NULL,'',100024,'2016-07-12 08:50:20','2016-07-12 08:50:20'),(33,100025,106,106,'Bridgette Barrett',NULL,5,5,'','','',0,'',1,'Art','Social worker',0,'',54,NULL,0,'',0,'',0,'',0,'',0,'',0,'',1,'12:00:00',2,0,NULL,NULL,NULL,'',100025,'2016-07-12 09:37:27','2016-07-12 09:37:27'),(36,100028,222,222,'Jhobarri Tajay Barrett',NULL,4,4,'','','',0,'',1,'Computer','Student',0,'',64,NULL,0,'',0,'',0,'',0,'',0,'',0,'',3,'12:00:00',2,1,'Own room','Orphanage',NULL,'',100028,'2016-07-16 17:24:42','2016-07-16 17:24:42'),(37,100029,106,106,'Raymond Wilson',NULL,7,1,'','','',0,'',3,'Craft','Accountant',0,'',66,NULL,0,'',0,'',0,'',0,'',0,'',0,'',4,'12:00:00',2,0,'','orphanage',NULL,'',100029,'2016-07-19 09:28:14','2016-07-19 09:28:14'),(38,100031,223,223,'John Doe',NULL,7,7,'','','',0,'',8,'Painting','Social worker',0,'',70,NULL,0,'',0,'',0,'',0,'',0,'',0,'',3,'12:00:00',2,0,'','',NULL,'',100031,'2016-07-20 10:05:15','2016-07-20 10:05:15'),(39,100032,3,3,'Damal',NULL,2,2,'','','',0,'',1,'None','Student',0,'',72,NULL,0,'',0,'',0,'',0,'',0,'',0,'',3,'07:00:00',2,0,'','no',NULL,'',100032,'2016-07-20 10:44:57','2016-07-20 10:44:57'),(40,100033,106,106,'Green Black',NULL,5,5,'','','',0,'',3,'Art','Psychologist',0,'',74,NULL,0,'',0,'',0,'',0,'',0,'',0,'',3,'12:00:00',2,0,'','',NULL,'',100033,'2016-07-20 10:53:38','2016-07-20 10:53:38'),(41,100034,213,213,'Catherine Terri Rene Noel',NULL,5,5,'Pleasantville Senior Comprehensive','University of the West Indies','',0,'',3,'Computer','Social Worker',0,'',76,NULL,0,'',0,'',0,'',0,'',1,'Corn',0,'',11,'12:00:00',2,0,'','',NULL,'',100034,'2016-09-08 12:35:32','2016-09-08 12:35:32'),(42,100035,106,106,'Bridgette Belinda Barrett',NULL,7,7,'','','',1,'',7,'Training, writing proposals','Training Specialist',1,'',104,NULL,0,'',0,'',0,'',0,'',0,'',0,'',1,'12:00:00',2,1,'Orphanage','',NULL,'',100035,'2016-12-12 06:37:25','2016-12-12 06:37:25');

/*Table structure for table `volunteer_feedback_form1` */

DROP TABLE IF EXISTS `volunteer_feedback_form1`;

CREATE TABLE `volunteer_feedback_form1` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `account_id` int(11) NOT NULL,
  `received_orientation` int(11) DEFAULT NULL,
  `received_orientation_desc` mediumtext,
  `received_package` int(11) DEFAULT NULL,
  `received_package_desc` mediumtext,
  `received_contact_list` int(11) DEFAULT NULL,
  `received_contact_list_desc` mediumtext,
  `felt_welcome` int(11) DEFAULT NULL,
  `felt_welcome_desc` mediumtext,
  `room_comfortable` int(11) DEFAULT NULL,
  `room_comfortable_desc` mediumtext,
  `basic_necessities` int(11) DEFAULT NULL,
  `basic_necessities_desc` mediumtext,
  `clean_bathroom` int(11) DEFAULT NULL,
  `clean_bathroom_desc` mediumtext,
  `bathroom_working` int(11) DEFAULT NULL,
  `bathroom_working_desc` mediumtext,
  `happy_with_food` int(11) DEFAULT NULL,
  `happy_with_food_desc` mediumtext,
  `getting_enough_food` int(11) DEFAULT NULL,
  `getting_enough_food_desc` mediumtext,
  `suitable_water` int(11) DEFAULT NULL,
  `suitable_water_desc` mediumtext,
  `satisfied_with_accommodation` int(11) DEFAULT NULL,
  `satisfied_with_accommodation_desc` mediumtext,
  `programme_feel_welcome` int(11) DEFAULT NULL,
  `programme_feel_welcome_desc` mediumtext,
  `programme_timetable` int(11) DEFAULT NULL,
  `programme_timetable_desc` mediumtext,
  `programme_tasks_discussed` int(11) DEFAULT NULL,
  `programme_tasks_discussed_desc` mediumtext,
  `programme_tasks_clear` int(11) DEFAULT NULL,
  `programme_tasks_clear_desc` mediumtext,
  `programme_satisfied` int(11) DEFAULT NULL,
  `programme_satisfied_desc` mediumtext,
  `coping_with_weather` int(11) DEFAULT NULL,
  `coping_with_weather_desc` mediumtext,
  `experience_health_issues` int(11) DEFAULT NULL,
  `experience_health_issues_desc` mediumtext,
  `clear_on_safety_procedures` int(11) DEFAULT NULL,
  `clear_on_safety_procedures_desc` mediumtext,
  `health_safety_concerns` int(11) DEFAULT NULL,
  `health_safety_concerns_desc` mediumtext,
  `know_programme_coordinator` int(11) DEFAULT NULL,
  `know_programme_coordinator_desc` mediumtext,
  `have_coordinator_contact_number` int(11) DEFAULT NULL,
  `have_coordinator_contact_number_desc` mediumtext,
  `coordinator_reachable` int(11) DEFAULT NULL,
  `coordinator_reachable_desc` mediumtext,
  `get_to_work_ok` int(11) DEFAULT NULL,
  `get_to_work_ok_desc` mediumtext,
  `any_cultural_concerns` int(11) DEFAULT NULL,
  `any_cultural_concerns_desc` mediumtext,
  `happy_with_arrangements` int(11) DEFAULT NULL,
  `happy_with_arrangements_desc` mediumtext,
  `date_added` datetime NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_feed_acc1_idx` (`account_id`),
  CONSTRAINT `fk_feed_acc1` FOREIGN KEY (`account_id`) REFERENCES `account` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

/*Data for the table `volunteer_feedback_form1` */

insert  into `volunteer_feedback_form1`(`id`,`account_id`,`received_orientation`,`received_orientation_desc`,`received_package`,`received_package_desc`,`received_contact_list`,`received_contact_list_desc`,`felt_welcome`,`felt_welcome_desc`,`room_comfortable`,`room_comfortable_desc`,`basic_necessities`,`basic_necessities_desc`,`clean_bathroom`,`clean_bathroom_desc`,`bathroom_working`,`bathroom_working_desc`,`happy_with_food`,`happy_with_food_desc`,`getting_enough_food`,`getting_enough_food_desc`,`suitable_water`,`suitable_water_desc`,`satisfied_with_accommodation`,`satisfied_with_accommodation_desc`,`programme_feel_welcome`,`programme_feel_welcome_desc`,`programme_timetable`,`programme_timetable_desc`,`programme_tasks_discussed`,`programme_tasks_discussed_desc`,`programme_tasks_clear`,`programme_tasks_clear_desc`,`programme_satisfied`,`programme_satisfied_desc`,`coping_with_weather`,`coping_with_weather_desc`,`experience_health_issues`,`experience_health_issues_desc`,`clear_on_safety_procedures`,`clear_on_safety_procedures_desc`,`health_safety_concerns`,`health_safety_concerns_desc`,`know_programme_coordinator`,`know_programme_coordinator_desc`,`have_coordinator_contact_number`,`have_coordinator_contact_number_desc`,`coordinator_reachable`,`coordinator_reachable_desc`,`get_to_work_ok`,`get_to_work_ok_desc`,`any_cultural_concerns`,`any_cultural_concerns_desc`,`happy_with_arrangements`,`happy_with_arrangements_desc`,`date_added`,`user_id`) values (1,100020,1,'',1,'',1,'',1,'',1,'',1,'',1,'',1,'Water pressure is low.',1,'',1,'Getting too much to each, I don\'t normally eat that much',1,'',1,'',1,'',1,'',1,'',1,'',1,'',0,'Too hot',0,'',1,'',0,'',1,'',1,'',1,'',1,'',0,'',1,'','2016-07-19 16:14:55',100001),(2,100021,1,'',1,'',1,'',1,'',1,'',1,'',1,'',1,'',1,'',1,'',1,'',1,'',1,'',1,'',1,'',1,'',1,'',1,'',1,'',1,'',0,'',1,'',1,'',1,'',1,'',1,'',1,'','2016-07-20 05:32:46',100001);

/*Table structure for table `volunteer_feedback_form2` */

DROP TABLE IF EXISTS `volunteer_feedback_form2`;

CREATE TABLE `volunteer_feedback_form2` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `account_id` int(11) NOT NULL,
  `room_comfortable` int(11) DEFAULT NULL,
  `room_comfortable_desc` mediumtext,
  `basic_necessities` int(11) DEFAULT NULL,
  `basic_necessities_desc` mediumtext,
  `bathroom_working` int(11) DEFAULT NULL,
  `bathroom_working_desc` mediumtext,
  `happy_with_food` int(11) DEFAULT NULL,
  `happy_with_food_desc` mediumtext,
  `getting_enough_food` int(11) DEFAULT NULL,
  `getting_enough_food_desc` mediumtext,
  `suitable_water` int(11) DEFAULT NULL,
  `suitable_water_desc` mediumtext,
  `satisfied_with_accommodation` int(11) DEFAULT NULL,
  `satisfied_with_accommodation_desc` mediumtext,
  `accommodation_experience_desc` mediumtext,
  `working_required_hours` int(11) DEFAULT NULL,
  `working_required_hours_desc` mediumtext,
  `getting_enough_to_do` int(11) DEFAULT NULL,
  `getting_enough_to_do_desc` mediumtext,
  `resources_to_do_work` int(11) DEFAULT NULL,
  `resources_to_do_work_desc` mediumtext,
  `tasks_desc` mediumtext,
  `meeting_your_expectations` int(11) DEFAULT NULL,
  `meeting_your_expectations_desc` mediumtext,
  `adjusting_to_culture` int(11) DEFAULT NULL,
  `adjusting_to_culture_desc` mediumtext,
  `comfortable_with_staff` int(11) DEFAULT NULL,
  `comfortable_with_staff_desc` mediumtext,
  `questions` int(11) DEFAULT NULL,
  `questions_desc` mediumtext,
  `questions_been_adequately` int(11) DEFAULT NULL,
  `questions_been_adequately_desc` mediumtext,
  `anything_else` int(11) DEFAULT NULL,
  `anything_else_desc` mediumtext,
  `attended_workshops` int(11) DEFAULT NULL,
  `attended_workshops_desc` mediumtext,
  `topics_useful` int(11) DEFAULT NULL,
  `topics_useful_desc` mediumtext,
  `suggestions` mediumtext,
  `suggestions_desc` mediumtext,
  `experience_at_work_desc` mediumtext,
  `coping_with_weather` int(11) DEFAULT NULL,
  `coping_with_weather_desc` mediumtext,
  `experience_health_issues` int(11) DEFAULT NULL,
  `experience_health_issues_desc` mediumtext,
  `health_safety_concerns` int(11) DEFAULT NULL,
  `health_safety_concerns_desc` mediumtext,
  `reach_staff` int(11) DEFAULT NULL,
  `reach_staff_desc` mediumtext,
  `enough_contact_with_rsvp` int(11) DEFAULT NULL,
  `enough_contact_with_rsvp_desc` mediumtext,
  `any_cultural_concerns` int(11) DEFAULT NULL,
  `any_cultural_concerns_desc` mediumtext,
  `happy_with_arrangements` int(11) DEFAULT NULL,
  `happy_with_arrangements_desc` mediumtext,
  `date_added` datetime NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

/*Data for the table `volunteer_feedback_form2` */

insert  into `volunteer_feedback_form2`(`id`,`account_id`,`room_comfortable`,`room_comfortable_desc`,`basic_necessities`,`basic_necessities_desc`,`bathroom_working`,`bathroom_working_desc`,`happy_with_food`,`happy_with_food_desc`,`getting_enough_food`,`getting_enough_food_desc`,`suitable_water`,`suitable_water_desc`,`satisfied_with_accommodation`,`satisfied_with_accommodation_desc`,`accommodation_experience_desc`,`working_required_hours`,`working_required_hours_desc`,`getting_enough_to_do`,`getting_enough_to_do_desc`,`resources_to_do_work`,`resources_to_do_work_desc`,`tasks_desc`,`meeting_your_expectations`,`meeting_your_expectations_desc`,`adjusting_to_culture`,`adjusting_to_culture_desc`,`comfortable_with_staff`,`comfortable_with_staff_desc`,`questions`,`questions_desc`,`questions_been_adequately`,`questions_been_adequately_desc`,`anything_else`,`anything_else_desc`,`attended_workshops`,`attended_workshops_desc`,`topics_useful`,`topics_useful_desc`,`suggestions`,`suggestions_desc`,`experience_at_work_desc`,`coping_with_weather`,`coping_with_weather_desc`,`experience_health_issues`,`experience_health_issues_desc`,`health_safety_concerns`,`health_safety_concerns_desc`,`reach_staff`,`reach_staff_desc`,`enough_contact_with_rsvp`,`enough_contact_with_rsvp_desc`,`any_cultural_concerns`,`any_cultural_concerns_desc`,`happy_with_arrangements`,`happy_with_arrangements_desc`,`date_added`,`user_id`) values (1,100020,1,'',1,'',1,'',1,'',1,'',1,'',1,'','It is great, I feel like family',1,'',1,'',1,'','Teaching the children, doing chores, designing a project',1,'',1,'',1,'',0,'',NULL,'No questions so far',0,'',1,'',1,'','0','','I am enjoying it.',1,'',0,'',0,'',1,'',1,'',1,'',1,'','2016-07-19 16:18:27',100001);

/*Table structure for table `volunteer_placement` */

DROP TABLE IF EXISTS `volunteer_placement`;

CREATE TABLE `volunteer_placement` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `volunteer_id` int(11) NOT NULL,
  `country_id` int(11) NOT NULL,
  `project_category_id` int(11) NOT NULL,
  `programme_project_id` int(11) DEFAULT NULL,
  `host_id` int(11) DEFAULT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `independent_travel` int(11) DEFAULT '0',
  `independent_travel_days` varchar(255) DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `date_added` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_volplc_idx` (`volunteer_id`),
  CONSTRAINT `fk_volplc` FOREIGN KEY (`volunteer_id`) REFERENCES `account` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

/*Data for the table `volunteer_placement` */

insert  into `volunteer_placement`(`id`,`volunteer_id`,`country_id`,`project_category_id`,`programme_project_id`,`host_id`,`start_date`,`end_date`,`independent_travel`,`independent_travel_days`,`user_id`,`date_added`) values (8,100021,86,10,NULL,NULL,'2016-08-01','2016-08-08',0,'',100021,'2016-07-10 14:48:28'),(9,100022,106,16,NULL,NULL,'2016-08-29','2016-09-12',0,'',100022,'2016-07-10 14:59:05'),(10,100023,106,20,NULL,NULL,'2016-08-01','2016-08-29',0,'',100023,'2016-07-10 15:38:03'),(11,100024,106,25,NULL,NULL,'2016-07-19','2016-07-26',0,'',100024,'2016-07-12 08:50:20'),(12,100025,106,15,NULL,NULL,'2016-08-01','2016-08-31',0,'',100025,'2016-07-12 09:37:27'),(15,100028,106,15,NULL,NULL,'2016-08-01','2016-08-31',0,'',100028,'2016-07-16 17:24:42'),(16,100029,106,15,NULL,NULL,'2016-08-01','2016-08-31',0,'',100029,'2016-07-19 09:28:14'),(18,100020,106,15,26,9,'2016-07-05','2016-07-26',0,NULL,100001,'2016-07-19 13:12:41'),(19,100020,106,2,28,10,'2016-07-27','2016-08-12',0,NULL,100001,'2016-07-19 13:12:41'),(20,100031,106,15,NULL,NULL,'2016-08-01','2016-08-31',0,'',100031,'2016-07-20 10:05:15'),(21,100032,106,15,NULL,NULL,'2016-07-27','2016-07-31',0,'',100032,'2016-07-20 10:44:57'),(22,100033,106,15,NULL,NULL,'2016-08-01','2016-08-31',0,'',100033,'2016-07-20 10:53:38'),(23,100034,179,27,NULL,NULL,'2016-10-01','2016-10-31',0,'',100034,'2016-09-08 12:35:32'),(24,100035,106,15,NULL,NULL,'2017-03-01','2017-04-30',2,'10 days',100035,'2016-12-12 06:37:25');

/*Table structure for table `volunteer_preference` */

DROP TABLE IF EXISTS `volunteer_preference`;

CREATE TABLE `volunteer_preference` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `project_special_preference` mediumtext,
  `host_family_preference` mediumtext,
  `general_information` mediumtext,
  `volunteer_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_pref_vol_idx` (`volunteer_id`),
  CONSTRAINT `fk_pref_vol` FOREIGN KEY (`volunteer_id`) REFERENCES `account` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `volunteer_preference` */

insert  into `volunteer_preference`(`id`,`project_special_preference`,`host_family_preference`,`general_information`,`volunteer_id`) values (1,'','','',100020);

/*Table structure for table `volunteer_search_form` */

DROP TABLE IF EXISTS `volunteer_search_form`;

CREATE TABLE `volunteer_search_form` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code` int(11) NOT NULL,
  `page_id` varchar(45) NOT NULL,
  `title` varchar(45) NOT NULL,
  `action_page` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

/*Data for the table `volunteer_search_form` */

insert  into `volunteer_search_form`(`id`,`code`,`page_id`,`title`,`action_page`) values (1,5,'mm_voldetail','Volunteer Details','volunteer-detail.php?id='),(2,10,'mm_accom_detail','Volunteer Placement','volunteer_placement.php?id='),(3,15,'mm_insurance','Insurance Details','insurance_detail.php?id='),(4,20,'mm_visa','Visa','visa.php?id='),(5,25,'mm_travel','Travel Details','travel_detail.php?id='),(6,30,'mm_v_fedback','Volunteer Feedback','volunteer_feedback.php?id='),(7,35,'mm_administration','Administration','administration.php?id='),(8,40,'mm_volunteer_record','Volunteer Record','volunteer_record.php?id='),(9,45,'mm_volinfo','Volunteer Information','volunteer_info.php?id='),(10,50,'mm_rsvp_page','RSVP Webpage','rsvp-webpage.php?id='),(11,55,'mm_account','Accounts','accounts.php?id='),(12,60,'mm_acc_admin','Account Administration','account-administration.php?id=');

/*Table structure for table `volunteer_status_type` */

DROP TABLE IF EXISTS `volunteer_status_type`;

CREATE TABLE `volunteer_status_type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

/*Data for the table `volunteer_status_type` */

insert  into `volunteer_status_type`(`id`,`name`) values (1,'Accepted'),(2,'Pending'),(3,'Rejected'),(4,'Waiting for payments'),(5,'Indefinitely Postponed'),(6,'Cancelled');

/*Table structure for table `volunteer_visa` */

DROP TABLE IF EXISTS `volunteer_visa`;

CREATE TABLE `volunteer_visa` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `volunteer_id` int(11) NOT NULL,
  `fileName` varchar(45) NOT NULL,
  `date_added` datetime NOT NULL,
  `added_by` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_visa_acc_idx` (`volunteer_id`),
  CONSTRAINT `fk_visa_acc` FOREIGN KEY (`volunteer_id`) REFERENCES `account` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=utf8;

/*Data for the table `volunteer_visa` */

insert  into `volunteer_visa`(`id`,`volunteer_id`,`fileName`,`date_added`,`added_by`) values (36,100020,'visa-20160726-31059.docx','2016-07-26 07:22:42',100001);

/* Procedure structure for procedure `sp_accommodation_amenity` */

/*!50003 DROP PROCEDURE IF EXISTS  `sp_accommodation_amenity` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_accommodation_amenity`(IN `countryId` INT)
BEGIN
SELECT a.id AS accId, am.* FROM  accommodation a 
LEFT JOIN accommodation_amenity am ON am.accommodation_id = a.id
INNER JOIN address ad ON ad.id = a.address1_id
WHERE ad.country_id = countryId;
END */$$
DELIMITER ;

/* Procedure structure for procedure `sp_accommodation_web` */

/*!50003 DROP PROCEDURE IF EXISTS  `sp_accommodation_web` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_accommodation_web`(IN `ID` INT)
BEGIN
SELECT                        
a.host_name,                   
a.phone_mobile AS mobile_phone,                
a.phone_mobile_2 AS mobile_phone_2,              
a.email,                                        
a.location_desc,               
a.overview_desc,               
a.living_accommodation_desc,   
a.about_room_desc,             
a.about_food_desc,             
a.general_advice_desc,         
a.number_of_volunteer_spaces,      
ad.address1,         
ad.address2,         
ad.address3,         
c.name AS country,       
z.name AS state,         
ad.zip_code,          
ad.phone AS home_phone,
ad2.address1 AS postal_address1,         
ad2.address2 AS postal_address2,         
ad2.address3 AS postal_address3,         
c2.name AS postal_country,       
z2.name AS postal_state,         
ad2.zip_code  AS postal_zip_code,          
ad2.phone AS postal_home_phone,
amen.*           
FROM accommodation a
INNER JOIN address ad ON ad.id = a.address1_id
INNER JOIN odb_country c ON c.country_id = ad.country_id
INNER JOIN obd_county_zone z ON z.zone_id = ad.state_id
LEFT JOIN address ad2 ON ad2.id = a.address2_id
LEFT JOIN odb_country c2 ON c2.country_id = ad2.country_id
LEFT JOIN obd_county_zone z2 ON z2.zone_id = ad2.state_id
LEFT JOIN accommodation_amenity amen ON amen.accommodation_id = a.id
WHERE a.id = ID;
END */$$
DELIMITER ;

/* Procedure structure for procedure `sp_admin_email` */

/*!50003 DROP PROCEDURE IF EXISTS  `sp_admin_email` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_admin_email`()
    NO SQL
BEGIN
SELECT CONCAT(firstname ,' ' ,lastname) AS fullname, email FROM account
WHERE account_type IN (2,4) AND allow_login=1;
END */$$
DELIMITER ;

/* Procedure structure for procedure `sp_get_address_by_id` */

/*!50003 DROP PROCEDURE IF EXISTS  `sp_get_address_by_id` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_get_address_by_id`(IN `id` INT)
BEGIN
SELECT * FROM address where id = id;
END */$$
DELIMITER ;

/* Procedure structure for procedure `sp_get_faq` */

/*!50003 DROP PROCEDURE IF EXISTS  `sp_get_faq` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_get_faq`(IN `id` INT)
BEGIN
DECLARE str CHAR;
IF id >= 0 THEN
	set str = CONCAT("WHERE id =", id);
ELSE    
	SET str = "";
end IF;
SET @query = CONCAT("SELECT * FROM faq", str);
PREPARE stmt FROM @query;
EXECUTE stmt;
DEALLOCATE PREPARE stmt;
END */$$
DELIMITER ;

/* Procedure structure for procedure `sp_get_project_name_by_category` */

/*!50003 DROP PROCEDURE IF EXISTS  `sp_get_project_name_by_category` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_get_project_name_by_category`(IN `id` INT)
BEGIN
SELECT p.id, p.institution as name FROM project p
INNER JOIN project_sub_type st ON st.id = p.project_sub_type_id 
INNER JOIN project_category pc ON pc.id = st.project_id
WHERE pc.id = id;
END */$$
DELIMITER ;

/* Procedure structure for procedure `sp_insert_address` */

/*!50003 DROP PROCEDURE IF EXISTS  `sp_insert_address` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_insert_address`(IN `address1` VARCHAR(45), IN `address2` VARCHAR(45), IN `address3` VARCHAR(45), IN `country_id` INT(11), IN `state_id` INT(11), `zip_code` VARCHAR(45), IN `address_type_id` INT, IN `phone` VARCHAR(45))
BEGIN
INSERT INTO address VALUES (0, address1,address2,address3,country_id,state_id, zip_code,address_type_id,phone);
SELECT LAST_INSERT_ID();
END */$$
DELIMITER ;

/* Procedure structure for procedure `sp_insert_volunteer` */

/*!50003 DROP PROCEDURE IF EXISTS  `sp_insert_volunteer` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_insert_volunteer`(IN `title_id` INT(11), IN `firstname` VARCHAR(45), IN `middlename` VARCHAR(45), IN `lastname` VARCHAR(45), IN `alias` VARCHAR(45), IN `email` VARCHAR(45), IN `dob` DATE, IN `phone` VARCHAR(15), IN `nationality_id` INT(11), IN `birth_country_id` INT(11), IN `name_on_passport` VARCHAR(45), IN `passport_number` VARCHAR(45), IN `education_status_id` INT(11), IN `most_recent_school` VARCHAR(45), IN `address_id` INT(11), IN `resume` VARCHAR(45), IN `date_added` DATE)
BEGIN
INSERT INTO volunteer VALUES (
0,
firstname,
middlename,
lastname,
alias,
email,
dob,
phone,
nationality_id,
birth_country_id,
name_on_passport,
passport_number,
education_status_id,
most_recent_school,
address_id,
`resume`,
date_added);
SELECT LAST_INSERT_ID();
END */$$
DELIMITER ;

/* Procedure structure for procedure `sp_is_duplicate_email` */

/*!50003 DROP PROCEDURE IF EXISTS  `sp_is_duplicate_email` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_is_duplicate_email`(IN `_accType` INT, IN `_email` TINYTEXT)
BEGIN
SELECT COUNT(email) AS cnt FROM account WHERE account_type = _accType AND email = _email;
END */$$
DELIMITER ;

/* Procedure structure for procedure `sp_login` */

/*!50003 DROP PROCEDURE IF EXISTS  `sp_login` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_login`(IN `email` TINYTEXT, IN `pass` TINYTEXT)
BEGIN
SELECT 
a.id,
CONCAT(t.name,' ',a.firstname,' ',a.lastname) AS `name`,
a.email,
a.account_type
FROM 
account a
INNER JOIN title t ON t.id = a.title_id
WHERE a.email = email AND a.password = MD5(pass) AND allow_login = 1 AND a.account_type != 3 
LIMIT 1;
END */$$
DELIMITER ;

/* Procedure structure for procedure `sp_photo_gallery` */

/*!50003 DROP PROCEDURE IF EXISTS  `sp_photo_gallery` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_photo_gallery`(IN `categoryId` INT, IN `itemId` INT)
BEGIN
SELECT CONCAT('/rsvp_photos/',category_id,"/",photo) AS photo, title
FROM photo
WHERE category_id = categoryId AND item_id = itemId;
END */$$
DELIMITER ;

/* Procedure structure for procedure `sp_project_or_program` */

/*!50003 DROP PROCEDURE IF EXISTS  `sp_project_or_program` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_project_or_program`(IN `countryId` INT, IN `typeId` INT)
BEGIN
SELECT p.id, p.institution as name FROM project p
INNER JOIN address a ON a.id = p.address_id 
WHERE a.country_id = countryId AND p.project_or_program = typeId;
END */$$
DELIMITER ;

/* Procedure structure for procedure `sp_report_accounting` */

/*!50003 DROP PROCEDURE IF EXISTS  `sp_report_accounting` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_report_accounting`(IN `accId` INT, IN `sdate` TINYTEXT, IN `edate` TINYTEXT)
BEGIN
	CREATE TEMPORARY TABLE IF NOT EXISTS tmp AS 
	(
		SELECT
		SUM(a.amount) AS amount,
		a.date,
		a.category_id,
		YEAR(a.date) AS `year`,
		MONTH(a.date) AS 'month'
		FROM accounting a
		WHERE 0=0
		AND a.account_id = accId
		AND a.trans_type = "expense"
		AND YEAR(a.date)BETWEEN YEAR(sdate) AND YEAR(edate)
		AND MONTH(a.date)BETWEEN MONTH(sdate) AND MONTH(edate)
		GROUP BY a.category_id, MONTH(a.date)
	);
	SELECT c.category, c.id AS category_id, a.amount, a.date, a.year,a.month FROM tmp a
	RIGHT JOIN accounting_category c ON c.id = a.category_id
	WHERE c.parent=0
	ORDER BY c.category;
	DROP TABLE IF EXISTS tmp;
END */$$
DELIMITER ;

/* Procedure structure for procedure `sp_subreport_accounting` */

/*!50003 DROP PROCEDURE IF EXISTS  `sp_subreport_accounting` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_subreport_accounting`(IN `accId` INT, IN `sdate` TINYTEXT, IN `edate` TINYTEXT)
BEGIN
	SELECT                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    
	ac.category,
	sc.category AS sub_category,
	a.category_id,
	a.sub_category_id,
	a.amount,
	a.date,
	MONTH(a.date) AS `month`                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                 
	FROM accounting a 
	INNER JOIN accounting_category ac ON ac.id = a.category_id   
	INNER JOIN accounting_category sc ON sc.id = a.sub_category_id                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                     
	WHERE a.account_id = accId
	AND a.trans_type = "expense"                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            
	AND YEAR(a.date)BETWEEN YEAR(sdate) AND YEAR(edate)                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                       
	AND MONTH(a.date)BETWEEN MONTH(sdate) AND MONTH(edate)                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    
	ORDER BY a.category_id,a.sub_category_id;
    END */$$
DELIMITER ;

/* Procedure structure for procedure `sp_update_password` */

/*!50003 DROP PROCEDURE IF EXISTS  `sp_update_password` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_update_password`(IN `old_pass` TINYTEXT, IN `pass` TINYTEXT, IN `id` INT)
    MODIFIES SQL DATA
BEGIN
UPDATE account a SET a.password = md5(pass) WHERE a.password = md5(old_pass) AND a.id = id;
SELECT ROW_COUNT() AS cnt;
END */$$
DELIMITER ;

/*Table structure for table `view_accommodation` */

DROP TABLE IF EXISTS `view_accommodation`;

/*!50001 DROP VIEW IF EXISTS `view_accommodation` */;
/*!50001 DROP TABLE IF EXISTS `view_accommodation` */;

/*!50001 CREATE TABLE `view_accommodation` (
  `id` int(11) NOT NULL DEFAULT '0',
  `host_name` varchar(45) CHARACTER SET utf8 NOT NULL,
  `phone_mobile` varchar(15) CHARACTER SET utf8 DEFAULT NULL,
  `phone_mobile_2` varchar(15) CHARACTER SET utf8 NOT NULL,
  `email` varchar(45) CHARACTER SET utf8 DEFAULT NULL,
  `address1_id` int(11) NOT NULL COMMENT 'Residential Address',
  `address2_id` int(11) DEFAULT NULL COMMENT 'Postal Address',
  `location_desc` text CHARACTER SET utf8,
  `overview_desc` text CHARACTER SET utf8,
  `living_accommodation_desc` text CHARACTER SET utf8,
  `about_room_desc` text CHARACTER SET utf8,
  `about_food_desc` text CHARACTER SET utf8,
  `general_advice_desc` text CHARACTER SET utf8,
  `number_of_volunteer_spaces` int(11) DEFAULT NULL,
  `archive` int(11) DEFAULT NULL,
  `date_added` datetime NOT NULL,
  `date_updated` datetime NOT NULL,
  `added_by` int(11) NOT NULL,
  `updated_by` varchar(45) CHARACTER SET utf8 DEFAULT NULL,
  `address1` varchar(45) CHARACTER SET utf8 NOT NULL,
  `address2` varchar(45) CHARACTER SET utf8 DEFAULT NULL,
  `address3` varchar(45) CHARACTER SET utf8 DEFAULT NULL,
  `country_id` int(11) NOT NULL,
  `country` varchar(64) NOT NULL,
  `state_id` int(11) DEFAULT NULL,
  `state` varchar(32) NOT NULL,
  `zip_code` varchar(45) CHARACTER SET utf8 DEFAULT NULL,
  `address_type_id` int(11) NOT NULL DEFAULT '0',
  `phone` varchar(15) CHARACTER SET utf8 DEFAULT NULL COMMENT 'home phone number',
  `phone_2` varchar(15) CHARACTER SET utf8 DEFAULT NULL,
  `phone_3` varchar(15) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 */;

/*Table structure for table `view_accounting` */

DROP TABLE IF EXISTS `view_accounting`;

/*!50001 DROP VIEW IF EXISTS `view_accounting` */;
/*!50001 DROP TABLE IF EXISTS `view_accounting` */;

/*!50001 CREATE TABLE `view_accounting` (
  `id` int(11) NOT NULL DEFAULT '0',
  `account_id` int(11) NOT NULL,
  `payee` tinytext NOT NULL,
  `category` tinytext NOT NULL,
  `sub_category` tinytext NOT NULL,
  `account_number` tinytext NOT NULL,
  `amount` decimal(10,2) NOT NULL,
  `cheque_number` tinytext,
  `receipt` varchar(3) CHARACTER SET utf8mb4 NOT NULL DEFAULT '',
  `detail` mediumtext NOT NULL,
  `trans_type` tinytext NOT NULL,
  `transaction_date` date NOT NULL,
  `date_added` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 */;

/*Table structure for table `view_admin_email` */

DROP TABLE IF EXISTS `view_admin_email`;

/*!50001 DROP VIEW IF EXISTS `view_admin_email` */;
/*!50001 DROP TABLE IF EXISTS `view_admin_email` */;

/*!50001 CREATE TABLE `view_admin_email` (
  `email` varchar(45) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 */;

/*Table structure for table `view_admin_office_list` */

DROP TABLE IF EXISTS `view_admin_office_list`;

/*!50001 DROP VIEW IF EXISTS `view_admin_office_list` */;
/*!50001 DROP TABLE IF EXISTS `view_admin_office_list` */;

/*!50001 CREATE TABLE `view_admin_office_list` (
  `id` int(11) NOT NULL DEFAULT '0',
  `name` tinytext CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 */;

/*Table structure for table `view_admin_staff_list` */

DROP TABLE IF EXISTS `view_admin_staff_list`;

/*!50001 DROP VIEW IF EXISTS `view_admin_staff_list` */;
/*!50001 DROP TABLE IF EXISTS `view_admin_staff_list` */;

/*!50001 CREATE TABLE `view_admin_staff_list` (
  `id` int(11) NOT NULL DEFAULT '0',
  `name` varchar(91) CHARACTER SET utf8 NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=latin1 */;

/*Table structure for table `view_administration_list` */

DROP TABLE IF EXISTS `view_administration_list`;

/*!50001 DROP VIEW IF EXISTS `view_administration_list` */;
/*!50001 DROP TABLE IF EXISTS `view_administration_list` */;

/*!50001 CREATE TABLE `view_administration_list` (
  `ID Number` int(11) NOT NULL,
  `Name` varchar(91) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `Application Date` varchar(73) CHARACTER SET utf8 DEFAULT NULL,
  `Destination` varchar(64) NOT NULL,
  `Programme/Project` varchar(45) NOT NULL,
  `Nationality` varchar(64) NOT NULL,
  `Formal Welcome and Acceptance Letter` varchar(3) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `Acceptance Letter` varchar(3) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `RSVP Webpage` varchar(3) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `Pre-Departure Email # 1` varchar(3) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `Medical Insurance` varchar(3) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `Curriculum Vitae` varchar(3) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `Medical Report` varchar(3) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `Criminal Record` varchar(3) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `Work Permit Exemption` varchar(3) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `VISA` varchar(3) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `Pre-Departure Email # 2` varchar(3) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `Flight Detail` varchar(3) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `Pone Call 2` varchar(3) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `Accommodation Details` varchar(3) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `Programme/Project Detail` varchar(3) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `Pre-Departure Email # 3` varchar(3) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `Driver Detail` varchar(3) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `Phone Call 3` varchar(3) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `Last Phone Call` varchar(3) CHARACTER SET utf8 NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=latin1 */;

/*Table structure for table `view_call_me_list` */

DROP TABLE IF EXISTS `view_call_me_list`;

/*!50001 DROP VIEW IF EXISTS `view_call_me_list` */;
/*!50001 DROP TABLE IF EXISTS `view_call_me_list` */;

/*!50001 CREATE TABLE `view_call_me_list` (
  `id` int(11) NOT NULL DEFAULT '0',
  `first-name` varchar(45) DEFAULT NULL,
  `last-name` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `telephone-number` varchar(20) DEFAULT NULL,
  `organization` varchar(45) DEFAULT NULL,
  `hear-about` varchar(45) DEFAULT NULL,
  `message` mediumtext,
  `best-time-call` varchar(15) DEFAULT NULL,
  `newsletter` varchar(5) DEFAULT NULL,
  `note` mediumtext,
  `callback` int(11) DEFAULT NULL,
  `call_made_by` varchar(45) DEFAULT NULL,
  `date_added` datetime DEFAULT NULL,
  `date_made` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 */;

/*Table structure for table `view_destination_report_records` */

DROP TABLE IF EXISTS `view_destination_report_records`;

/*!50001 DROP VIEW IF EXISTS `view_destination_report_records` */;
/*!50001 DROP TABLE IF EXISTS `view_destination_report_records` */;

/*!50001 CREATE TABLE `view_destination_report_records` (
  `id` int(11) NOT NULL DEFAULT '0',
  `type` char(0) CHARACTER SET utf8mb4 NOT NULL DEFAULT '',
  `title` varchar(45) CHARACTER SET utf8 NOT NULL,
  `firstname` varchar(45) CHARACTER SET utf8 NOT NULL,
  `middlename` varchar(45) CHARACTER SET utf8 DEFAULT NULL,
  `lastname` varchar(45) CHARACTER SET utf8 NOT NULL,
  `arrival_date` datetime DEFAULT NULL,
  `flight_number` varchar(45) CHARACTER SET utf8 DEFAULT NULL,
  `airline_name` varchar(45) CHARACTER SET utf8 DEFAULT NULL,
  `departure` datetime DEFAULT NULL,
  `destination` varchar(45) CHARACTER SET utf8 DEFAULT NULL,
  `project` varchar(45) NOT NULL,
  `balance` varchar(1) CHARACTER SET utf8mb4 NOT NULL DEFAULT '',
  `accommodation_detail` varchar(3) CHARACTER SET utf8mb4 NOT NULL DEFAULT '',
  `project_detail` varchar(3) CHARACTER SET utf8mb4 NOT NULL DEFAULT '',
  `language_lesson` varchar(45),
  `duration` varchar(255) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `group` varchar(1) CHARACTER SET utf8mb4 NOT NULL DEFAULT '',
  `country` varchar(64) NOT NULL,
  `country_id` int(11) NOT NULL,
  `marketing` varchar(45),
  `date_added` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 */;

/*Table structure for table `view_destination_report_summary` */

DROP TABLE IF EXISTS `view_destination_report_summary`;

/*!50001 DROP VIEW IF EXISTS `view_destination_report_summary` */;
/*!50001 DROP TABLE IF EXISTS `view_destination_report_summary` */;

/*!50001 CREATE TABLE `view_destination_report_summary` (
  `count` bigint(21) NOT NULL DEFAULT '0',
  `year` int(4) DEFAULT NULL,
  `month` int(2) DEFAULT NULL,
  `country_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 */;

/*Table structure for table `view_get_currency` */

DROP TABLE IF EXISTS `view_get_currency`;

/*!50001 DROP VIEW IF EXISTS `view_get_currency` */;
/*!50001 DROP TABLE IF EXISTS `view_get_currency` */;

/*!50001 CREATE TABLE `view_get_currency` (
  `currency` tinytext NOT NULL,
  `rate` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 */;

/*Table structure for table `view_invoice` */

DROP TABLE IF EXISTS `view_invoice`;

/*!50001 DROP VIEW IF EXISTS `view_invoice` */;
/*!50001 DROP TABLE IF EXISTS `view_invoice` */;

/*!50001 CREATE TABLE `view_invoice` (
  `id` int(11) NOT NULL DEFAULT '0',
  `volunteer_id` int(11) NOT NULL,
  `Price` decimal(10,2) NOT NULL DEFAULT '0.00',
  `Description` tinytext NOT NULL,
  `Transaction Type` varchar(7) CHARACTER SET utf8mb4 NOT NULL DEFAULT '',
  `Date` varchar(10) CHARACTER SET utf8 DEFAULT NULL,
  `Date Modified` varchar(10) CHARACTER SET utf8 DEFAULT NULL,
  `Entered By` varchar(45) CHARACTER SET utf8,
  `Date Added` varchar(10) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 */;

/*Table structure for table `view_invoice_payments` */

DROP TABLE IF EXISTS `view_invoice_payments`;

/*!50001 DROP VIEW IF EXISTS `view_invoice_payments` */;
/*!50001 DROP TABLE IF EXISTS `view_invoice_payments` */;

/*!50001 CREATE TABLE `view_invoice_payments` (
  `id` int(11) NOT NULL DEFAULT '0',
  `Price` decimal(10,2) NOT NULL DEFAULT '0.00',
  `volunteer_id` int(11) NOT NULL,
  `Description` tinytext NOT NULL,
  `Transaction Type` varchar(7) CHARACTER SET utf8mb4 NOT NULL DEFAULT '',
  `Date` varchar(10) CHARACTER SET utf8 DEFAULT NULL,
  `Date Modified` varchar(10) CHARACTER SET utf8 DEFAULT NULL,
  `Entered By` varchar(45) CHARACTER SET utf8,
  `Date Added` varchar(10) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 */;

/*Table structure for table `view_member_country` */

DROP TABLE IF EXISTS `view_member_country`;

/*!50001 DROP VIEW IF EXISTS `view_member_country` */;
/*!50001 DROP TABLE IF EXISTS `view_member_country` */;

/*!50001 CREATE TABLE `view_member_country` (
  `id` int(11) NOT NULL DEFAULT '0',
  `name` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 */;

/*Table structure for table `view_programme_project_list` */

DROP TABLE IF EXISTS `view_programme_project_list`;

/*!50001 DROP VIEW IF EXISTS `view_programme_project_list` */;
/*!50001 DROP TABLE IF EXISTS `view_programme_project_list` */;

/*!50001 CREATE TABLE `view_programme_project_list` (
  `id` int(11) NOT NULL DEFAULT '0',
  `institution` varchar(45) CHARACTER SET utf8 NOT NULL,
  `category_id` int(11) NOT NULL DEFAULT '0',
  `category` varchar(45) NOT NULL,
  `country_id` int(11) NOT NULL,
  `type` int(11) NOT NULL DEFAULT '0' COMMENT '1-project || 2-Programmes',
  `project_sub_type` varchar(45) NOT NULL,
  `date_added` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 */;

/*Table structure for table `view_project_info` */

DROP TABLE IF EXISTS `view_project_info`;

/*!50001 DROP VIEW IF EXISTS `view_project_info` */;
/*!50001 DROP TABLE IF EXISTS `view_project_info` */;

/*!50001 CREATE TABLE `view_project_info` (
  `id` int(11) NOT NULL DEFAULT '0',
  `project_sub_type_id` int(11) NOT NULL,
  `institution` varchar(45) CHARACTER SET utf8 NOT NULL,
  `number_of_volunteer` int(11) DEFAULT NULL,
  `address_id` int(11) NOT NULL,
  `background_info` text CHARACTER SET utf8 NOT NULL,
  `location_desc` text CHARACTER SET utf8,
  `overview_desc` text CHARACTER SET utf8,
  `project_goal_desc` text CHARACTER SET utf8,
  `volunteer_role_desc` text CHARACTER SET utf8,
  `volunteer_task_desc` text CHARACTER SET utf8,
  `typical_day_desc` text CHARACTER SET utf8,
  `dress_code_desc` text CHARACTER SET utf8,
  `other_activitie_desc` text CHARACTER SET utf8,
  `other_information_desc` text CHARACTER SET utf8,
  `project_resources_desc` text CHARACTER SET utf8,
  `project_fact_id` int(11) DEFAULT NULL,
  `programme_goal_id` int(11) DEFAULT NULL,
  `project_or_program` int(11) NOT NULL COMMENT '1-Project || 2-programmes',
  `date_added` varchar(10) CHARACTER SET utf8 DEFAULT NULL,
  `date_updated` varchar(10) CHARACTER SET utf8 DEFAULT NULL,
  `archive` int(11) NOT NULL DEFAULT '0',
  `added_by` varchar(45) CHARACTER SET utf8 NOT NULL,
  `updated_by` varchar(45) CHARACTER SET utf8 NOT NULL,
  `address1` varchar(45) CHARACTER SET utf8 NOT NULL,
  `address2` varchar(45) CHARACTER SET utf8 DEFAULT NULL,
  `address3` varchar(45) CHARACTER SET utf8 DEFAULT NULL,
  `country_id` int(11) NOT NULL,
  `state_id` int(11) DEFAULT NULL,
  `zip_code` varchar(45) CHARACTER SET utf8 DEFAULT NULL,
  `phone` varchar(15) CHARACTER SET utf8 DEFAULT NULL COMMENT 'home phone number'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 */;

/*Table structure for table `view_time_zone` */

DROP TABLE IF EXISTS `view_time_zone`;

/*!50001 DROP VIEW IF EXISTS `view_time_zone` */;
/*!50001 DROP TABLE IF EXISTS `view_time_zone` */;

/*!50001 CREATE TABLE `view_time_zone` (
  `country` varchar(64) NOT NULL,
  `country_code` varchar(2) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `time_zone` tinytext CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 */;

/*Table structure for table `view_volunteer_info` */

DROP TABLE IF EXISTS `view_volunteer_info`;

/*!50001 DROP VIEW IF EXISTS `view_volunteer_info` */;
/*!50001 DROP TABLE IF EXISTS `view_volunteer_info` */;

/*!50001 CREATE TABLE `view_volunteer_info` (
  `id` int(11) NOT NULL DEFAULT '0',
  `title_id` int(11) NOT NULL,
  `firstname` varchar(45) CHARACTER SET utf8 NOT NULL,
  `middlename` varchar(45) CHARACTER SET utf8 DEFAULT NULL,
  `lastname` varchar(45) CHARACTER SET utf8 NOT NULL,
  `alias` varchar(45) CHARACTER SET utf8 DEFAULT NULL,
  `skype` varchar(45) CHARACTER SET utf8 DEFAULT NULL,
  `email` varchar(45) CHARACTER SET utf8 DEFAULT NULL,
  `alternative_email` varchar(45) CHARACTER SET utf8 DEFAULT NULL,
  `mobile_phone` varchar(15) CHARACTER SET utf8 DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `username` varchar(45) CHARACTER SET utf8 NOT NULL,
  `nationality_id` int(11) NOT NULL,
  `birth_country_id` int(11) NOT NULL,
  `name_on_passport` varchar(45) DEFAULT NULL,
  `passport_number` varchar(45) DEFAULT NULL,
  `current_status_id` int(11) NOT NULL DEFAULT '0',
  `current_status_other_id` int(11) DEFAULT NULL,
  `high_school` varchar(255) DEFAULT NULL,
  `undergraduate_university` varchar(255) DEFAULT NULL,
  `post_graduate` varchar(45) DEFAULT NULL,
  `credit_for_school` int(11) NOT NULL DEFAULT '0' COMMENT 'Yes or no',
  `qualifications_id` int(11) NOT NULL DEFAULT '0',
  `skills` varchar(255) DEFAULT NULL,
  `occupation` varchar(45) DEFAULT NULL,
  `sponsored` int(11) NOT NULL DEFAULT '0' COMMENT 'Yes or No',
  `address_id` int(11) NOT NULL,
  `resume` varchar(45) DEFAULT NULL,
  `have_travel_companions` int(11) NOT NULL DEFAULT '0',
  `travel_companions_name` varchar(45) DEFAULT NULL,
  `special_diet_restrictions` int(11) NOT NULL DEFAULT '0',
  `special_diet_restrictions_desc` varchar(255) DEFAULT NULL,
  `on_medication` int(11) NOT NULL DEFAULT '0',
  `medication_name` varchar(255) DEFAULT NULL,
  `any_illnesses` int(11) NOT NULL DEFAULT '0',
  `illnesses_desc` varchar(255) DEFAULT NULL,
  `any_allergies` int(11) NOT NULL DEFAULT '0',
  `allergies_desc` varchar(255) DEFAULT NULL,
  `criminal_convictions` int(11) NOT NULL DEFAULT '0',
  `criminal_convictions_desc` varchar(255) DEFAULT NULL,
  `heard_about_id` int(11) NOT NULL DEFAULT '0',
  `time_to_speak` time DEFAULT NULL,
  `volunteer_status_type_id` int(11) NOT NULL DEFAULT '0',
  `host_family_preference` int(11) NOT NULL DEFAULT '0',
  `host_family_preference_desc` mediumtext,
  `special_interest` mediumtext,
  `other_information` mediumtext,
  `staff_note` mediumtext NOT NULL,
  `date_added` datetime NOT NULL,
  `address1` varchar(45) CHARACTER SET utf8 NOT NULL,
  `address2` varchar(45) CHARACTER SET utf8 DEFAULT NULL,
  `address3` varchar(45) CHARACTER SET utf8 DEFAULT NULL,
  `country_id` int(11) NOT NULL,
  `state_id` int(11) DEFAULT NULL,
  `zip_code` varchar(45) CHARACTER SET utf8 DEFAULT NULL,
  `address_type_id` int(11) NOT NULL DEFAULT '0',
  `home_phone` varchar(15) CHARACTER SET utf8 DEFAULT NULL COMMENT 'home phone number',
  `guardian_title_id` int(11),
  `guardian_firstname` varchar(45),
  `guardian_middlename` varchar(45) DEFAULT NULL,
  `guardian_lastname` varchar(45) DEFAULT NULL,
  `guardian_email` varchar(45) DEFAULT NULL,
  `guardian_phone` varchar(45) DEFAULT NULL COMMENT 'mobile number',
  `guardian_relationship_type_id` int(11),
  `reference_title_id` int(11),
  `reference_firstname` varchar(45),
  `reference_middlename` varchar(45) DEFAULT NULL,
  `reference_lastname` varchar(45) DEFAULT NULL,
  `reference_email` varchar(45) DEFAULT NULL,
  `reference_phone` varchar(45) DEFAULT NULL COMMENT 'mobile number',
  `reference_relationship` varchar(45),
  `reference_address_id` int(11)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 */;

/*Table structure for table `view_volunteer_list` */

DROP TABLE IF EXISTS `view_volunteer_list`;

/*!50001 DROP VIEW IF EXISTS `view_volunteer_list` */;
/*!50001 DROP TABLE IF EXISTS `view_volunteer_list` */;

/*!50001 CREATE TABLE `view_volunteer_list` (
  `id` int(11) NOT NULL DEFAULT '0',
  `fullname` varchar(137) CHARACTER SET utf8 DEFAULT NULL,
  `firstname` varchar(45) CHARACTER SET utf8 NOT NULL,
  `middlename` varchar(45) CHARACTER SET utf8 DEFAULT NULL,
  `lastname` varchar(45) CHARACTER SET utf8 NOT NULL,
  `username` varchar(45) CHARACTER SET utf8 NOT NULL,
  `dob` date DEFAULT NULL,
  `country` varchar(64) NOT NULL,
  `email` varchar(45) CHARACTER SET utf8 DEFAULT NULL,
  `phone` varchar(15) CHARACTER SET utf8 DEFAULT NULL,
  `status` varchar(45) CHARACTER SET utf8 NOT NULL,
  `have_travel_companions` varchar(3) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `current_status` varchar(45) CHARACTER SET utf8 DEFAULT NULL,
  `special_interest` mediumtext,
  `special_diet` varchar(255) DEFAULT NULL,
  `date_added` datetime NOT NULL,
  `date_updated` datetime NOT NULL,
  `admin` varchar(45) CHARACTER SET utf8 DEFAULT NULL,
  `allow_login` int(11) NOT NULL DEFAULT '0',
  `account_status` varchar(8) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `host_family_preference` varchar(3) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `programme` varchar(45) DEFAULT NULL,
  `arrival_date` date,
  `balance` decimal(33,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 */;

/*Table structure for table `view_volunteer_quick_info` */

DROP TABLE IF EXISTS `view_volunteer_quick_info`;

/*!50001 DROP VIEW IF EXISTS `view_volunteer_quick_info` */;
/*!50001 DROP TABLE IF EXISTS `view_volunteer_quick_info` */;

/*!50001 CREATE TABLE `view_volunteer_quick_info` (
  `id` int(11) NOT NULL DEFAULT '0',
  `fullname` varchar(91) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `email` varchar(45) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 */;

/*Table structure for table `view_volunteer_record` */

DROP TABLE IF EXISTS `view_volunteer_record`;

/*!50001 DROP VIEW IF EXISTS `view_volunteer_record` */;
/*!50001 DROP TABLE IF EXISTS `view_volunteer_record` */;

/*!50001 CREATE TABLE `view_volunteer_record` (
  `note_id` int(11) NOT NULL DEFAULT '0',
  `note` blob NOT NULL,
  `note_category_id` tinytext,
  `date_updated` varchar(73) CHARACTER SET utf8 DEFAULT NULL,
  `date_added` varchar(73) CHARACTER SET utf8 DEFAULT NULL,
  `added` varchar(91) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `updated` varchar(91) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `volunteer_id` int(11) NOT NULL,
  `file_name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 */;

/*Table structure for table `view_volunteer_summary` */

DROP TABLE IF EXISTS `view_volunteer_summary`;

/*!50001 DROP VIEW IF EXISTS `view_volunteer_summary` */;
/*!50001 DROP TABLE IF EXISTS `view_volunteer_summary` */;

/*!50001 CREATE TABLE `view_volunteer_summary` (
  `note_id` int(11) NOT NULL DEFAULT '0',
  `note` blob NOT NULL,
  `note_category_id` tinytext,
  `date_updated` varchar(73) CHARACTER SET utf8 DEFAULT NULL,
  `date_added` varchar(73) CHARACTER SET utf8 DEFAULT NULL,
  `added` varchar(91) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `updated` varchar(91) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `volunteer_id` int(11) NOT NULL,
  `file_name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 */;

/*View structure for view view_accommodation */

/*!50001 DROP TABLE IF EXISTS `view_accommodation` */;
/*!50001 DROP VIEW IF EXISTS `view_accommodation` */;

/*!50001 CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_accommodation` AS select `a`.`id` AS `id`,`a`.`host_name` AS `host_name`,`a`.`phone_mobile` AS `phone_mobile`,`a`.`phone_mobile_2` AS `phone_mobile_2`,`a`.`email` AS `email`,`a`.`address1_id` AS `address1_id`,`a`.`address2_id` AS `address2_id`,`a`.`location_desc` AS `location_desc`,`a`.`overview_desc` AS `overview_desc`,`a`.`living_accommodation_desc` AS `living_accommodation_desc`,`a`.`about_room_desc` AS `about_room_desc`,`a`.`about_food_desc` AS `about_food_desc`,`a`.`general_advice_desc` AS `general_advice_desc`,`a`.`number_of_volunteer_spaces` AS `number_of_volunteer_spaces`,`a`.`archive` AS `archive`,`a`.`date_added` AS `date_added`,`a`.`date_updated` AS `date_updated`,`a`.`added_by` AS `added_by`,`ac`.`alias` AS `updated_by`,`ad`.`address1` AS `address1`,`ad`.`address2` AS `address2`,`ad`.`address3` AS `address3`,`ad`.`country_id` AS `country_id`,`c`.`name` AS `country`,`ad`.`state_id` AS `state_id`,`zone`.`name` AS `state`,`ad`.`zip_code` AS `zip_code`,`ad`.`address_type_id` AS `address_type_id`,`ad`.`phone` AS `phone`,`ad`.`phone_2` AS `phone_2`,`ad`.`phone_3` AS `phone_3` from ((((`accommodation` `a` join `address` `ad` on((`ad`.`id` = `a`.`address1_id`))) join `account` `ac` on((`ac`.`id` = `a`.`updated_by`))) join `odb_country` `c` on((`c`.`country_id` = `ad`.`country_id`))) join `obd_county_zone` `zone` on((`zone`.`zone_id` = `ad`.`state_id`))) */;

/*View structure for view view_accounting */

/*!50001 DROP TABLE IF EXISTS `view_accounting` */;
/*!50001 DROP VIEW IF EXISTS `view_accounting` */;

/*!50001 CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_accounting` AS select `a`.`id` AS `id`,`a`.`account_id` AS `account_id`,`p`.`name` AS `payee`,`c`.`category` AS `category`,`s`.`category` AS `sub_category`,`a`.`account` AS `account_number`,`a`.`amount` AS `amount`,`a`.`cheque_number` AS `cheque_number`,if((`a`.`receipt` = 1),'Yes','No') AS `receipt`,`a`.`detail` AS `detail`,`a`.`trans_type` AS `trans_type`,`a`.`date` AS `transaction_date`,`a`.`date_added` AS `date_added` from (((`accounting` `a` join `accounting_payee` `p` on((`p`.`id` = `a`.`payee_id`))) join `accounting_category` `c` on((`c`.`id` = `a`.`category_id`))) join `accounting_category` `s` on((`s`.`id` = `a`.`sub_category_id`))) order by `a`.`trans_type` desc,`a`.`date` desc */;

/*View structure for view view_admin_email */

/*!50001 DROP TABLE IF EXISTS `view_admin_email` */;
/*!50001 DROP VIEW IF EXISTS `view_admin_email` */;

/*!50001 CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_admin_email` AS select `account`.`email` AS `email` from `account` where (`account`.`account_type` <> 3) */;

/*View structure for view view_admin_office_list */

/*!50001 DROP TABLE IF EXISTS `view_admin_office_list` */;
/*!50001 DROP VIEW IF EXISTS `view_admin_office_list` */;

/*!50001 CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_admin_office_list` AS select `o`.`id` AS `id`,`o`.`name` AS `name` from `staff_office` `o` */;

/*View structure for view view_admin_staff_list */

/*!50001 DROP TABLE IF EXISTS `view_admin_staff_list` */;
/*!50001 DROP VIEW IF EXISTS `view_admin_staff_list` */;

/*!50001 CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_admin_staff_list` AS select `s`.`id` AS `id`,concat(`a`.`firstname`,' ',`a`.`lastname`) AS `name` from (`staff` `s` join `account` `a` on((`a`.`id` = `s`.`account_id`))) where (`a`.`account_type` = 4) */;

/*View structure for view view_administration_list */

/*!50001 DROP TABLE IF EXISTS `view_administration_list` */;
/*!50001 DROP VIEW IF EXISTS `view_administration_list` */;

/*!50001 CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_administration_list` AS select `a`.`volunteer_id` AS `ID Number`,concat(`acc`.`firstname`,' ',`acc`.`lastname`) AS `Name`,date_format(`p`.`date_added`,'%M %d, %Y') AS `Application Date`,`c2`.`name` AS `Destination`,`pc`.`name` AS `Programme/Project`,`c`.`name` AS `Nationality`,if(`a`.`welcome_call`,'Yes','No') AS `Formal Welcome and Acceptance Letter`,if(`a`.`acceptance_letter`,'Yes','No') AS `Acceptance Letter`,if(`a`.`rsvp_webpage`,'Yes','No') AS `RSVP Webpage`,if(`a`.`pre_departure_email_1`,'Yes','No') AS `Pre-Departure Email # 1`,if(`a`.`medical_insurance`,'Yes','No') AS `Medical Insurance`,if(`a`.`curriculum_vitae`,'Yes','No') AS `Curriculum Vitae`,if(`a`.`medical_report`,'Yes','No') AS `Medical Report`,if(`a`.`criminal_record`,'Yes','No') AS `Criminal Record`,if(`a`.`work_permit_exemption`,'Yes','No') AS `Work Permit Exemption`,if(`a`.`visa`,'Yes','No') AS `VISA`,if(`a`.`pre_departure_email_2`,'Yes','No') AS `Pre-Departure Email # 2`,if(`a`.`flight_detail`,'Yes','No') AS `Flight Detail`,if(`a`.`phone_call_2`,'Yes','No') AS `Pone Call 2`,if(`a`.`accommodation_details`,'Yes','No') AS `Accommodation Details`,if(`a`.`project_detail`,'Yes','No') AS `Programme/Project Detail`,if(`a`.`pre_departure_email_3`,'Yes','No') AS `Pre-Departure Email # 3`,if(`a`.`driver_detail`,'Yes','No') AS `Driver Detail`,if(`a`.`phone_call_3`,'Yes','No') AS `Phone Call 3`,if(`a`.`last_phone_all`,'Yes','No') AS `Last Phone Call` from ((((((`administration` `a` join `account` `acc` on((`acc`.`id` = `a`.`volunteer_id`))) join `volunteer` `v` on((`v`.`account_id` = `a`.`volunteer_id`))) join `odb_country` `c` on((`c`.`country_id` = `v`.`nationality_id`))) join `volunteer_placement` `p` on((`p`.`volunteer_id` = `v`.`account_id`))) join `odb_country` `c2` on((`c2`.`country_id` = `p`.`country_id`))) join `project_category` `pc` on((`pc`.`id` = `p`.`project_category_id`))) */;

/*View structure for view view_call_me_list */

/*!50001 DROP TABLE IF EXISTS `view_call_me_list` */;
/*!50001 DROP VIEW IF EXISTS `view_call_me_list` */;

/*!50001 CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_call_me_list` AS select `callback`.`id` AS `id`,`callback`.`first-name` AS `first-name`,`callback`.`last-name` AS `last-name`,`callback`.`email` AS `email`,`callback`.`telephone-number` AS `telephone-number`,`callback`.`organization` AS `organization`,`callback`.`hear-about` AS `hear-about`,`callback`.`message` AS `message`,`callback`.`best-time-call` AS `best-time-call`,`callback`.`newsletter` AS `newsletter`,`callback`.`note` AS `note`,`callback`.`callback` AS `callback`,`callback`.`call_made_by` AS `call_made_by`,`callback`.`date_added` AS `date_added`,`callback`.`date_made` AS `date_made` from `callback` order by `callback`.`date_added` desc */;

/*View structure for view view_destination_report_records */

/*!50001 DROP TABLE IF EXISTS `view_destination_report_records` */;
/*!50001 DROP VIEW IF EXISTS `view_destination_report_records` */;

/*!50001 CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_destination_report_records` AS select `a`.`id` AS `id`,'' AS `type`,`ti`.`name` AS `title`,`a`.`firstname` AS `firstname`,`a`.`middlename` AS `middlename`,`a`.`lastname` AS `lastname`,`t`.`arrival_date` AS `arrival_date`,`t`.`flight_number` AS `flight_number`,`t`.`airline_name` AS `airline_name`,`t`.`departure_date` AS `departure`,`t`.`departure_airport` AS `destination`,`pc`.`name` AS `project`,'-' AS `balance`,if((`vp`.`host_id` > 1),'Yes','No') AS `accommodation_detail`,if((`vp`.`programme_project_id` > 1),'Yes','No') AS `project_detail`,`l`.`lessons` AS `language_lesson`,`l`.`duration` AS `duration`,`a`.`dob` AS `dob`,'-' AS `group`,`c`.`name` AS `country`,`vp`.`country_id` AS `country_id`,`m`.`note` AS `marketing`,`vp`.`date_added` AS `date_added` from (((((((`account` `a` join `title` `ti` on((`ti`.`id` = `a`.`title_id`))) join `volunteer_placement` `vp` on((`vp`.`volunteer_id` = `a`.`id`))) join `odb_country` `c` on((`c`.`country_id` = `vp`.`country_id`))) join `project_category` `pc` on((`pc`.`id` = `vp`.`project_category_id`))) left join `travel_detail` `t` on((`t`.`volunteer_id` = `a`.`id`))) left join `market_exec_summary` `m` on((`m`.`volunteer_id` = `a`.`id`))) left join `lessons_add_on` `l` on((`l`.`volunteer_id` = `a`.`id`))) */;

/*View structure for view view_destination_report_summary */

/*!50001 DROP TABLE IF EXISTS `view_destination_report_summary` */;
/*!50001 DROP VIEW IF EXISTS `view_destination_report_summary` */;

/*!50001 CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_destination_report_summary` AS select count(`a`.`id`) AS `count`,year(`vp`.`date_added`) AS `year`,month(`vp`.`date_added`) AS `month`,`vp`.`country_id` AS `country_id` from (`account` `a` join `volunteer_placement` `vp` on((`vp`.`volunteer_id` = `a`.`id`))) where (`a`.`account_type` = 3) group by `vp`.`country_id`,year(`vp`.`date_added`),month(`vp`.`date_added`) */;

/*View structure for view view_get_currency */

/*!50001 DROP TABLE IF EXISTS `view_get_currency` */;
/*!50001 DROP VIEW IF EXISTS `view_get_currency` */;

/*!50001 CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_get_currency` AS (select `master`.`daily_currency_rate`.`currency` AS `currency`,`master`.`daily_currency_rate`.`rate` AS `rate` from `master`.`daily_currency_rate` where (`master`.`daily_currency_rate`.`currency` in ('JMD','USD','GBP','CAD','EUR')) order by `master`.`daily_currency_rate`.`currency` desc) */;

/*View structure for view view_invoice */

/*!50001 DROP TABLE IF EXISTS `view_invoice` */;
/*!50001 DROP VIEW IF EXISTS `view_invoice` */;

/*!50001 CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_invoice` AS select `i`.`id` AS `id`,`i`.`volunteer_id` AS `volunteer_id`,`i`.`price` AS `Price`,`i`.`description` AS `Description`,'Invoice' AS `Transaction Type`,date_format(`i`.`date`,'%Y-%m-%d') AS `Date`,date_format(`i`.`date_modified`,'%Y-%m-%d') AS `Date Modified`,`a`.`username` AS `Entered By`,date_format(`i`.`date_added`,'%Y-%m-%d') AS `Date Added` from (`invoice` `i` left join `account` `a` on((`a`.`id` = `i`.`user_id`))) order by `i`.`date` */;

/*View structure for view view_invoice_payments */

/*!50001 DROP TABLE IF EXISTS `view_invoice_payments` */;
/*!50001 DROP VIEW IF EXISTS `view_invoice_payments` */;

/*!50001 CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_invoice_payments` AS select `p`.`id` AS `id`,`p`.`amount` AS `Price`,`i`.`volunteer_id` AS `volunteer_id`,`i`.`description` AS `Description`,'Payment' AS `Transaction Type`,date_format(`p`.`date`,'%Y-%m-%d') AS `Date`,date_format(`p`.`date_modified`,'%Y-%m-%d') AS `Date Modified`,`a`.`username` AS `Entered By`,date_format(`p`.`date_added`,'%Y-%m-%d') AS `Date Added` from ((`invoice` `i` join `invoice_payments` `p` on((`p`.`invoice_id` = `i`.`id`))) left join `account` `a` on((`a`.`id` = `p`.`user_id`))) order by `p`.`date` */;

/*View structure for view view_member_country */

/*!50001 DROP TABLE IF EXISTS `view_member_country` */;
/*!50001 DROP VIEW IF EXISTS `view_member_country` */;

/*!50001 CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_member_country` AS select `c`.`country_id` AS `id`,`c`.`name` AS `name` from `odb_country` `c` where (`c`.`member` = 1) */;

/*View structure for view view_programme_project_list */

/*!50001 DROP TABLE IF EXISTS `view_programme_project_list` */;
/*!50001 DROP VIEW IF EXISTS `view_programme_project_list` */;

/*!50001 CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_programme_project_list` AS select `p`.`id` AS `id`,`p`.`institution` AS `institution`,`pc`.`id` AS `category_id`,`pc`.`name` AS `category`,`pc`.`country_id` AS `country_id`,`pc`.`type` AS `type`,`st`.`name` AS `project_sub_type`,`p`.`date_added` AS `date_added` from ((`project` `p` join `project_sub_type` `st` on((`st`.`id` = `p`.`project_sub_type_id`))) join `project_category` `pc` on((`pc`.`id` = `st`.`project_id`))) */;

/*View structure for view view_project_info */

/*!50001 DROP TABLE IF EXISTS `view_project_info` */;
/*!50001 DROP VIEW IF EXISTS `view_project_info` */;

/*!50001 CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_project_info` AS select `p`.`id` AS `id`,`p`.`project_sub_type_id` AS `project_sub_type_id`,`p`.`institution` AS `institution`,`p`.`number_of_volunteer` AS `number_of_volunteer`,`p`.`address_id` AS `address_id`,`p`.`background_info` AS `background_info`,`p`.`location_desc` AS `location_desc`,`p`.`overview_desc` AS `overview_desc`,`p`.`project_goal_desc` AS `project_goal_desc`,`p`.`volunteer_role_desc` AS `volunteer_role_desc`,`p`.`volunteer_task_desc` AS `volunteer_task_desc`,`p`.`typical_day_desc` AS `typical_day_desc`,`p`.`dress_code_desc` AS `dress_code_desc`,`p`.`other_activitie_desc` AS `other_activitie_desc`,`p`.`other_information_desc` AS `other_information_desc`,`p`.`project_resources_desc` AS `project_resources_desc`,`p`.`project_fact_id` AS `project_fact_id`,`p`.`programme_goal_id` AS `programme_goal_id`,`p`.`project_or_program` AS `project_or_program`,date_format(`p`.`date_added`,'%Y-%m-%d') AS `date_added`,date_format(`p`.`date_updated`,'%Y-%m-%d') AS `date_updated`,`p`.`archive` AS `archive`,`a`.`username` AS `added_by`,`up`.`username` AS `updated_by`,`ad`.`address1` AS `address1`,`ad`.`address2` AS `address2`,`ad`.`address3` AS `address3`,`ad`.`country_id` AS `country_id`,`ad`.`state_id` AS `state_id`,`ad`.`zip_code` AS `zip_code`,`ad`.`phone` AS `phone` from (((`project` `p` join `address` `ad` on((`ad`.`id` = `p`.`address_id`))) join `account` `a` on((`a`.`id` = `p`.`added_by`))) join `account` `up` on((`up`.`id` = `p`.`updated_by`))) */;

/*View structure for view view_time_zone */

/*!50001 DROP TABLE IF EXISTS `view_time_zone` */;
/*!50001 DROP VIEW IF EXISTS `view_time_zone` */;

/*!50001 CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_time_zone` AS select `c`.`name` AS `country`,lcase(`z`.`country_code`) AS `country_code`,`z`.`name` AS `time_zone` from (`odb_time_zone` `z` join `odb_country` `c` on((convert(`c`.`iso_code_2` using utf8) = `z`.`country_code`))) group by `z`.`country_code` order by `c`.`name` */;

/*View structure for view view_volunteer_info */

/*!50001 DROP TABLE IF EXISTS `view_volunteer_info` */;
/*!50001 DROP VIEW IF EXISTS `view_volunteer_info` */;

/*!50001 CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_volunteer_info` AS select `acc`.`id` AS `id`,`acc`.`title_id` AS `title_id`,`acc`.`firstname` AS `firstname`,`acc`.`middlename` AS `middlename`,`acc`.`lastname` AS `lastname`,`acc`.`alias` AS `alias`,`acc`.`skype` AS `skype`,`acc`.`email` AS `email`,`acc`.`email2` AS `alternative_email`,`acc`.`phone` AS `mobile_phone`,`acc`.`dob` AS `dob`,`acc`.`username` AS `username`,`v`.`nationality_id` AS `nationality_id`,`v`.`birth_country_id` AS `birth_country_id`,`v`.`name_on_passport` AS `name_on_passport`,`v`.`passport_number` AS `passport_number`,`v`.`current_status_id` AS `current_status_id`,`v`.`current_status_other_id` AS `current_status_other_id`,`v`.`high_school` AS `high_school`,`v`.`undergraduate_university` AS `undergraduate_university`,`v`.`post_graduate` AS `post_graduate`,`v`.`credit_for_school` AS `credit_for_school`,`v`.`qualifications_id` AS `qualifications_id`,`v`.`skills` AS `skills`,`v`.`occupation` AS `occupation`,`v`.`sponsored` AS `sponsored`,`v`.`address_id` AS `address_id`,`v`.`resume` AS `resume`,`v`.`have_travel_companions` AS `have_travel_companions`,`v`.`travel_companions_name` AS `travel_companions_name`,`v`.`special_diet_restrictions` AS `special_diet_restrictions`,if((`v`.`special_diet_restrictions_desc` = ''),'None',`v`.`special_diet_restrictions_desc`) AS `special_diet_restrictions_desc`,`v`.`on_medication` AS `on_medication`,`v`.`medication_name` AS `medication_name`,`v`.`any_illnesses` AS `any_illnesses`,`v`.`illnesses_desc` AS `illnesses_desc`,`v`.`any_allergies` AS `any_allergies`,`v`.`allergies_desc` AS `allergies_desc`,`v`.`criminal_convictions` AS `criminal_convictions`,`v`.`criminal_convictions_desc` AS `criminal_convictions_desc`,`v`.`heard_about_id` AS `heard_about_id`,`v`.`time_to_speak` AS `time_to_speak`,`v`.`volunteer_status_type_id` AS `volunteer_status_type_id`,`v`.`host_family_preference` AS `host_family_preference`,`v`.`host_family_preference_desc` AS `host_family_preference_desc`,if((isnull(`v`.`project_special_interest`) or (`v`.`project_special_interest` = '')),'None',`v`.`project_special_interest`) AS `special_interest`,`v`.`other_information` AS `other_information`,`v`.`staff_note` AS `staff_note`,`v`.`date_added` AS `date_added`,`a`.`address1` AS `address1`,`a`.`address2` AS `address2`,`a`.`address3` AS `address3`,`a`.`country_id` AS `country_id`,`a`.`state_id` AS `state_id`,`a`.`zip_code` AS `zip_code`,`a`.`address_type_id` AS `address_type_id`,`a`.`phone` AS `home_phone`,`g`.`title_id` AS `guardian_title_id`,`g`.`firstname` AS `guardian_firstname`,`g`.`middlename` AS `guardian_middlename`,`g`.`lastname` AS `guardian_lastname`,`g`.`email` AS `guardian_email`,`g`.`phone` AS `guardian_phone`,`g`.`relationship_type_id` AS `guardian_relationship_type_id`,`r`.`title_id` AS `reference_title_id`,`r`.`firstname` AS `reference_firstname`,`r`.`middlename` AS `reference_middlename`,`r`.`lastname` AS `reference_lastname`,`r`.`email` AS `reference_email`,`r`.`phone` AS `reference_phone`,`r`.`relationship` AS `reference_relationship`,`r`.`address_id` AS `reference_address_id` from ((((`volunteer` `v` join `address` `a` on((`a`.`id` = `v`.`address_id`))) join `account` `acc` on((`acc`.`id` = `v`.`account_id`))) left join `guardian` `g` on((`g`.`volunteer_id` = `acc`.`id`))) left join `reference` `r` on((`r`.`volunteer_id` = `acc`.`id`))) where (`acc`.`account_type` = 3) */;

/*View structure for view view_volunteer_list */

/*!50001 DROP TABLE IF EXISTS `view_volunteer_list` */;
/*!50001 DROP VIEW IF EXISTS `view_volunteer_list` */;

/*!50001 CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_volunteer_list` AS select `a`.`id` AS `id`,concat(trim(`a`.`firstname`),' ',if((`a`.`middlename` <> ''),concat(trim(`a`.`middlename`),' '),''),`a`.`lastname`) AS `fullname`,`a`.`firstname` AS `firstname`,`a`.`middlename` AS `middlename`,`a`.`lastname` AS `lastname`,`a`.`username` AS `username`,`a`.`dob` AS `dob`,`country`.`name` AS `country`,`a`.`email` AS `email`,`a`.`phone` AS `phone`,`vs`.`name` AS `status`,if((`v`.`have_travel_companions` = 1),'Yes','No') AS `have_travel_companions`,`cs`.`name` AS `current_status`,if((isnull(`v`.`project_special_interest`) or (`v`.`project_special_interest` = '')),'None',`v`.`project_special_interest`) AS `special_interest`,if((isnull(`v`.`special_diet_restrictions_desc`) or (`v`.`special_diet_restrictions_desc` = '')),'None',`v`.`special_diet_restrictions_desc`) AS `special_diet`,`v`.`date_added` AS `date_added`,`v`.`date_updated` AS `date_updated`,if((`v`.`user_id` = 0),'-',`admin`.`username`) AS `admin`,`a`.`allow_login` AS `allow_login`,if((`a`.`allow_login` = 1),'Active','Disabled') AS `account_status`,if((`v`.`host_family_preference` = 1),'Yes','No') AS `host_family_preference`,(select `pc`.`name` from `project_category` `pc` where (`pc`.`id` = `vp`.`project_category_id`)) AS `programme`,`vp`.`start_date` AS `arrival_date`,(select (ifnull(sum(`i`.`price`),0) - ifnull(sum(`p`.`amount`),0)) from (`invoice` `i` left join `invoice_payments` `p` on((`p`.`invoice_id` = `i`.`id`))) where (`i`.`volunteer_id` = `v`.`account_id`)) AS `balance` from ((((((`account` `a` join `volunteer` `v` on((`v`.`account_id` = `a`.`id`))) join `volunteer_status_type` `vs` on((`vs`.`id` = `v`.`volunteer_status_type_id`))) join `current_status` `cs` on((`cs`.`id` = `v`.`current_status_id`))) join `odb_country` `country` on((`country`.`country_id` = `v`.`nationality_id`))) left join `account` `admin` on((`admin`.`id` = `v`.`user_id`))) left join `volunteer_placement` `vp` on((`vp`.`volunteer_id` = `v`.`account_id`))) where (`a`.`account_type` = 3) group by `a`.`id` */;

/*View structure for view view_volunteer_quick_info */

/*!50001 DROP TABLE IF EXISTS `view_volunteer_quick_info` */;
/*!50001 DROP VIEW IF EXISTS `view_volunteer_quick_info` */;

/*!50001 CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_volunteer_quick_info` AS select `account`.`id` AS `id`,concat(`account`.`firstname`,' ',`account`.`lastname`) AS `fullname`,`account`.`email` AS `email` from `account` */;

/*View structure for view view_volunteer_record */

/*!50001 DROP TABLE IF EXISTS `view_volunteer_record` */;
/*!50001 DROP VIEW IF EXISTS `view_volunteer_record` */;

/*!50001 CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_volunteer_record` AS select `n`.`id` AS `note_id`,`n`.`note` AS `note`,`n`.`note_category_id` AS `note_category_id`,date_format(`n`.`date_updated`,'%M %d, %Y') AS `date_updated`,date_format(`n`.`date_added`,'%M %d, %Y') AS `date_added`,concat(`a`.`firstname`,' ',`a`.`lastname`) AS `added`,concat(`a2`.`firstname`,' ',`a2`.`lastname`) AS `updated`,`n`.`volunteer_id` AS `volunteer_id`,`n`.`file_name` AS `file_name` from ((`note` `n` join `account` `a` on((`a`.`id` = `n`.`user_id`))) join `account` `a2` on((`a2`.`id` = `n`.`updated_by`))) order by `n`.`date_added` desc limit 100 */;

/*View structure for view view_volunteer_summary */

/*!50001 DROP TABLE IF EXISTS `view_volunteer_summary` */;
/*!50001 DROP VIEW IF EXISTS `view_volunteer_summary` */;

/*!50001 CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_volunteer_summary` AS select `n`.`id` AS `note_id`,`n`.`note` AS `note`,`n`.`note_category_id` AS `note_category_id`,date_format(`n`.`date_updated`,'%M %d, %Y') AS `date_updated`,date_format(`n`.`date_added`,'%M %d, %Y') AS `date_added`,concat(`a`.`firstname`,' ',`a`.`lastname`) AS `added`,concat(`a2`.`firstname`,' ',`a2`.`lastname`) AS `updated`,`n`.`volunteer_id` AS `volunteer_id`,`n`.`file_name` AS `file_name` from ((`note` `n` join `account` `a` on((`a`.`id` = `n`.`user_id`))) join `account` `a2` on((`a2`.`id` = `n`.`updated_by`))) order by `n`.`date_added` desc limit 100 */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
