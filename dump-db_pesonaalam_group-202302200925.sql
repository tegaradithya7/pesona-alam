-- MySQL dump 10.13  Distrib 8.0.19, for Win64 (x86_64)
--
-- Host: localhost    Database: db_pesonaalam_group
-- ------------------------------------------------------
-- Server version	5.5.5-10.1.38-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ms_accomodation`
--

DROP TABLE IF EXISTS `ms_accomodation`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `ms_accomodation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `type` varchar(45) DEFAULT NULL,
  `desc` text,
  `accomodation_file` text,
  `date` date DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `align` varchar(45) DEFAULT NULL,
  `entry_stamp` datetime DEFAULT NULL,
  `edit_stamp` datetime DEFAULT NULL,
  `del` tinyint(1) DEFAULT '0',
  `release_on` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ms_accomodation`
--

LOCK TABLES `ms_accomodation` WRITE;
/*!40000 ALTER TABLE `ms_accomodation` DISABLE KEYS */;
INSERT INTO `ms_accomodation` VALUES (1,'ACc123','promo','<p><em><strong>ACC12345</strong></em></p>','accomodation_file_040520_110934_864.PNG','2020-05-05',NULL,NULL,'2020-05-04 23:08:22','2020-05-04 23:09:49',1,NULL),(2,'a','news','<p><em><strong>asdgjasgd</strong></em></p>','accomodation_file_050520_045809_465.PNG,accomodation_file_050520_045822_548.PNG,accomodation_file_050520_045831_960.PNG','2020-05-05',NULL,NULL,'2020-05-05 16:58:48','2020-05-05 16:59:15',1,NULL),(15,'#AkadAjaDulu','promo','<p style=','','0000-00-00',NULL,NULL,NULL,'2020-09-22 18:29:49',1,NULL),(16,'Berembun Spa','promo',NULL,'slide-bg-2.jpg',NULL,NULL,NULL,NULL,'2020-09-22 18:26:37',1,NULL),(17,'Outbound','news',NULL,'slide-bg-3.jpg',NULL,NULL,NULL,NULL,'2020-09-22 18:26:41',1,NULL),(18,'Wedding Pars','promo',NULL,'slide-bg-1.jpg',NULL,NULL,NULL,NULL,'2020-09-22 18:26:49',1,NULL),(19,'Berembun Spa','news',NULL,'slide-bg-2.jpg',NULL,NULL,NULL,NULL,'2020-09-22 18:26:47',1,NULL),(20,'Outbound','promo',NULL,'slide-bg-3.jpg',NULL,NULL,NULL,NULL,'2020-09-22 18:26:44',1,NULL),(21,'Radial bar chart','promo','<p><em><strong>kasdjhkashdka</strong></em></p>','accomodation_file_150520_010753_087.PNG,accomodation_file_150520_010800_619.PNG,accomodation_file_150520_010807_584.PNG','2020-05-15',NULL,NULL,'2020-05-15 13:08:54','2020-05-15 13:09:22',1,NULL),(22,'test123','news','<p>asdsad</p>\r\n<ol>\r\n<li>asdad</li>\r\n<li>asdasd</li>\r\n<li>asdasdasd</li>\r\n<li>sadasdasdas</li>\r\n</ol>','accomodation_file_160520_060218_050.PNG,accomodation_file_160520_060224_866.PNG,accomodation_file_160520_060231_178.PNG','2020-05-16',NULL,NULL,'2020-05-16 06:02:42','2020-05-16 06:09:29',1,NULL),(23,'test123','news','','accomodation_file_160920_082130_637.png','2020-09-16',NULL,NULL,'2020-09-16 20:21:36','2020-09-16 20:22:45',1,NULL),(24,'Purchase Now Stay Later','promo','<p class=\"MsoNormal\" style=\"text-indent: -0.1pt; text-align: center;\"><span style=\"background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">Make your holiday dream come true by special promotion </span><em><span lang=\"IN\" style=\"background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">Purchase Now, Stay Later</span></em></p>\r\n<p style=\"text-align: center;\"><span style=\"font-size: 11pt; line-height: 115%; font-family: Calibri, sans-serif; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">Book your room through voucher purchase with static rate and you can stay later on.&nbsp; </span></p>\r\n<p style=\"text-align: center;\"><span style=\"font-size: 11pt; line-height: 115%; font-family: Calibri, sans-serif; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">Start from IDR</span><span lang=\"IN\" style=\"font-size: 11pt; line-height: 115%; font-family: Calibri, sans-serif; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\"> 875.000</span><span style=\"font-size: 11pt; line-height: 115%; font-family: Calibri, sans-serif; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">/night for hotel rooms inclusive breakfast for 2 pax and start from IDR 1.000.000/night for villa type (exclude breakfast).</span></p>\r\n<p style=\"text-align: center;\"><span style=\"font-size: 11pt; line-height: 115%; font-family: Calibri, sans-serif; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">Voucher purchase only available until&nbsp;September&nbsp;30, 2020 with stay period until 31 March 2021</span></p>\r\n<p style=\"text-align: center;\"><span style=\"font-size: 11pt; line-height: 115%; font-family: Calibri, sans-serif; background-image: initial; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">WhatsApp us at +628111152788 for more information</span></p>','accomodation_file_240920_100522_258.jpg','2020-09-22',NULL,NULL,'2020-09-22 18:25:51','2020-10-12 08:54:10',1,NULL),(25,'Residential Meeting Package','promo','<p style=\"text-align: center;\"><span style=\"color: #363637; font-family: SanFranciscoText-Light, Arial, Helvetica, sans-serif; font-size: 14px;\">Discover new experience between meeting and business stay with Pesona Alam\'s residential meeting package.</span></p>\r\n<p style=\"text-align: center;\"><span style=\"color: #363637; font-family: SanFranciscoText-Light, Arial, Helvetica, sans-serif; font-size: 14px;\">Start from IDR 820,000nett/pax including room accommodation on twin sharing on single occupancy basis.</span></p>\r\n<p style=\"text-align: center;\"><span style=\"color: #363637; font-family: SanFranciscoText-Light, Arial, Helvetica, sans-serif; font-size: 14px;\">&nbsp;</span></p>\r\n<p style=\"text-align: center;\"><span style=\"color: #363637; font-family: SanFranciscoText-Light, Arial, Helvetica, sans-serif; font-size: 14px;\">Contact our sales team at sales-pesonaalam@tauzia.com for more information about the package.&nbsp;</span></p>','accomodation_file_121020_113016_317.jpg','2020-10-12',0,NULL,'2020-10-12 11:30:24',NULL,0,NULL),(26,'Mask-Querade New Year Package ','promo','<p style=\"text-align: center;\">Ring in 2021 in a mysterious and magical way by special package from Pesona Alam Resort &amp; Spa</p>\r\n<p style=\"text-align: center;\">Mask-Querade New Year Package starts from IDR 2,500,000nett</p>\r\n<p style=\"text-align: center;\">Inclusive: 1 night stay, breakfast and New Year dinner for 2 pax</p>\r\n<p style=\"text-align: center;\">&nbsp;</p>\r\n<p style=\"text-align: center;\">Contact us at res1-pesonaalam@tauzia.com or WhatsApp us at +628111152788 for more information</p>','accomodation_file_221020_023331_035.jpg','2020-10-22',NULL,NULL,'2020-10-22 14:33:46','2020-12-30 11:31:37',1,NULL),(27,'White Christmas Package','promo','<p style=\"text-align: center;\"><span style=\"color: #4d5156; font-family: arial, sans-serif; font-size: 14px;\">Make this Christmas&nbsp;season extra special with a stay at Pesona Alam Resort &amp; Spa</span></p>\r\n<p style=\"text-align: center;\"><span style=\"color: #4d5156; font-family: arial, sans-serif; font-size: 14px;\">Discover our White Christmas Package starting from IDR 1,825,000/night</span></p>\r\n<p style=\"text-align: center;\"><span style=\"color: #4d5156; font-family: arial, sans-serif; font-size: 14px;\">Inclusive: 1 night stay, breakfast and Christmas dinner for 2 pax</span></p>\r\n<p style=\"text-align: center;\"><span style=\"color: #4d5156; font-family: arial, sans-serif; font-size: 14px;\">Stay period: December 24-26, 2020</span></p>\r\n<p style=\"text-align: center;\">&nbsp;</p>\r\n<p style=\"text-align: center;\"><span style=\"color: #4d5156; font-family: arial, sans-serif; font-size: 14px;\">Get special&nbsp;rates&nbsp;for early bird booking until November 15, 2020!</span></p>\r\n<p style=\"text-align: center;\"><span style=\"color: #4d5156; font-family: arial, sans-serif; font-size: 14px;\">WhatsApp us at +628111152788 for more information</span></p>\r\n<p style=\"text-align: center;\">&nbsp;</p>','accomodation_file_221020_024149_875.jpg','2020-10-22',NULL,NULL,'2020-10-22 14:41:52','2020-12-23 17:25:03',1,NULL),(28,'Purchase Now Stay Later','promo','<p style=\"text-align: center;\"><span style=\"color: #262626; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Helvetica, Arial, sans-serif; font-size: 14px;\">Missed our last&nbsp;Purchase&nbsp;Now Stay Later promo? Don\'t worry because&nbsp;Purchase Now Stay Later Part 2 is here! </span></p>\r\n<p style=\"text-align: center;\"><span style=\"color: #262626; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Helvetica, Arial, sans-serif; font-size: 14px;\">Plan now to travel better later! Purchase period until 31&nbsp;March 2021 with stay period until&nbsp;7 May 2021.&nbsp;</span><br style=\"color: #262626; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Helvetica, Arial, sans-serif; font-size: 14px;\" /><span style=\"color: #262626; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Helvetica, Arial, sans-serif; font-size: 14px;\">Still with the ultimate flexibility plan, our special pre-paid vouchers are ready to order now!</span></p>\r\n<p style=\"text-align: center;\"><span style=\"color: #262626; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Helvetica, Arial, sans-serif; font-size: 14px;\">Contact our team at res1-pesonaalam@tauzia.com or WhatsApp us at +628111152788 for more information</span></p>','accomodation_file_080121_015700_708.jpg','2021-01-08',NULL,NULL,'2021-01-08 13:57:04','2021-04-09 13:55:40',1,NULL),(29,'JaRing (Belajar Daring)','promo','<p style=\"text-align: center;\">Enjoy School Learning and Family Staycation at The Same Time</p>\r\n<p style=\"text-align: center;\">JaRing (Belajar Daring) Package</p>\r\n<p style=\"text-align: center;\">Starting From IDR 988,000nett</p>\r\n<p style=\"text-align: center;\">Inclusive:</p>\r\n<div class=\"gmail_default\" style=\"font-size: small; font-family: verdana, sans-serif; color: #666666; text-align: center;\">- High Speed internet connection 200Mbps for e-learning</div>\r\n<div class=\"gmail_default\" style=\"font-size: small; font-family: verdana, sans-serif; color: #666666; text-align: center;\">&nbsp;</div>\r\n<div class=\"gmail_default\" style=\"font-size: small; font-family: verdana, sans-serif; color: #666666; text-align: center;\">- 2 times school break snacks/day</div>\r\n<div class=\"gmail_default\" style=\"font-size: small; font-family: verdana, sans-serif; color: #666666; text-align: center;\">- Breakfast for 2 pax&nbsp;&nbsp;</div>\r\n<div class=\"gmail_default\" style=\"font-size: small; font-family: verdana, sans-serif; color: #666666; text-align: center;\">- Free Mini Zoo ticket for 1 pax&nbsp;&nbsp;</div>\r\n<div class=\"gmail_default\" style=\"font-size: small; font-family: verdana, sans-serif; color: #666666; text-align: center;\">- Discount 10% on Taman Safari Indonesia Entrance Ticket</div>\r\n<div class=\"gmail_default\" style=\"font-size: small; font-family: verdana, sans-serif; color: #666666; text-align: center;\">&nbsp;</div>\r\n<div class=\"gmail_default\" style=\"font-size: small; font-family: verdana, sans-serif; color: #666666; text-align: center;\">- Discount 25% on Food &amp; Beverages</div>\r\n<div class=\"gmail_default\" style=\"font-size: small; font-family: verdana, sans-serif; color: #666666; text-align: center;\">- Free Souvenirs (Notebook &amp; Pen)</div>\r\n<div class=\"gmail_default\" style=\"font-size: small; font-family: verdana, sans-serif; color: #666666; text-align: center;\">- Free 4 pieces Laundry (for minimum stay 2 nights)</div>\r\n<div class=\"gmail_default\" style=\"font-size: small; font-family: verdana, sans-serif; color: #666666; text-align: center;\">&nbsp;</div>\r\n<div class=\"gmail_default\" style=\"font-size: small; font-family: verdana, sans-serif; color: #666666; text-align: center;\">&nbsp;</div>','accomodation_file_110121_032555_425.jpg','2021-01-11',NULL,NULL,'2021-01-11 15:26:12','2021-03-04 13:02:58',1,NULL),(30,'Year of The Ox','promo','<p style=\"text-align: center;\"><span style=\"color: #4d5156; font-family: arial, sans-serif; font-size: 14px;\">Celebrate the arrival of the Year of the Ox with your beloved ones at Pesona Alam Resort &amp; Spa&nbsp;</span><span style=\"color: #4d5156; font-family: arial, sans-serif; font-size: 14px;\">and wish together for a prosperous&nbsp;</span><span style=\"font-weight: bold; color: #5f6368; font-family: arial, sans-serif; font-size: 14px;\">Chinese New Year</span><span style=\"color: #4d5156; font-family: arial, sans-serif; font-size: 14px;\">!</span></p>\r\n<p style=\"text-align: center;\"><span style=\"color: #4d5156; font-family: arial, sans-serif; font-size: 14px;\">Year of The Ox Package</span></p>\r\n<p style=\"text-align: center;\"><span style=\"color: #4d5156; font-family: arial, sans-serif; font-size: 14px;\">Starting from IDR 3,580,000</span></p>\r\n<p style=\"text-align: center;\"><span style=\"color: #4d5156; font-family: arial, sans-serif; font-size: 14px;\">Inclusive:</span></p>\r\n<p style=\"text-align: center;\"><span style=\"color: #4d5156; font-family: arial, sans-serif; font-size: 14px;\">* 2 nights stay (11-13 February 2021)</span></p>\r\n<p style=\"text-align: center;\"><span style=\"color: #4d5156; font-family: arial, sans-serif; font-size: 14px;\">* Daily Breakfast</span></p>\r\n<p style=\"text-align: center;\"><span style=\"color: #4d5156; font-family: arial, sans-serif; font-size: 14px;\">* 2 times Dinner</span></p>\r\n<p style=\"text-align: center;\"><span style=\"color: #4d5156; font-family: arial, sans-serif; font-size: 14px;\">* Special Gift</span></p>\r\n<p style=\"text-align: center;\">&nbsp;</p>\r\n<p style=\"text-align: center;\"><span style=\"color: #4d5156; font-family: arial, sans-serif; font-size: 14px;\">Book now by simply click link&nbsp;https://booking.tauzia.com/57/Pesona-Alam?utm_source=MPCK&amp;utm_medium=IGMPCK&amp;utm_campaign=chinesenewyearpackage</span></p>','accomodation_file_110121_040043_236.jpg','2021-01-11',NULL,NULL,'2021-01-11 16:00:48','2021-03-04 13:02:52',1,NULL),(31,'Ramadan Safecation','promo','<p style=\"text-align: center;\">Ramadan is around the corner. Pesona Alam Resort &amp; Spa is happily welcoming this holy month by fulfilling your safe staycation with special offerings throughout this spiritual time.&nbsp;</p>\r\n<p style=\"text-align: center;\">Ramadan Safecation package starts from Rp 858,000 net/room/night, inclusive:</p>\r\n<p style=\"text-align: center;\">? 1 Night Stay at Comfortable Superior Room</p>\r\n<p style=\"text-align: center;\">? Suhoor or Breakfast for 2 Pax</p>\r\n<p style=\"text-align: center;\">? Takjil for 2 Pax</p>\r\n<p style=\"text-align: center;\">This package is valid for stay period on 13 April &ndash; 7 May 2021 (Sunday &ndash; Thursday).</p>\r\n<p style=\"text-align: center;\">Book your Safe-Cation now by simply click link below:</p>\r\n<p style=\"text-align: center;\">&nbsp;</p>\r\n<p style=\"text-align: center;\">https://booking.tauzia.com/57/Pesona-Alam?utm_source=MPCK&amp;utm_medium=WAMPCK&amp;utm_campaign=ramadansafecation&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p style=\"text-align: center;\">Nature Awaits You!</p>','accomodation_file_090421_015349_817.jpg','2021-04-09',NULL,NULL,'2021-04-09 13:53:52','2021-05-19 12:21:34',1,NULL),(32,'asdgasg','news','<p>sdasd</p>','accomodation_file_280621_034202_587.jpg','2021-06-28',2,NULL,'2021-06-28 15:42:03','2021-06-28 15:42:36',1,NULL),(33,'Superior Rooms','news','','accomodation_file_290621_040854_454.jpg','2021-06-29',1,'start','2021-06-29 16:08:57',NULL,0,'1'),(34,'Deluxe Rooms','news','','accomodation_file_290621_040910_460.jpg','2021-06-29',1,'end','2021-06-29 16:09:12',NULL,0,'1'),(35,'Premiere Rooms','news','','accomodation_file_290621_040927_614.jpg','2021-06-29',1,'start','2021-06-29 16:09:28',NULL,0,'1'),(36,'The Loft Family Rooms','news','','accomodation_file_290621_040945_702.jpg','2021-06-29',1,'end','2021-06-29 16:09:46',NULL,0,'1'),(37,'Unique Corner Rooms','news','','accomodation_file_290621_041015_553.jpg','2021-06-29',1,'start','2021-06-29 16:10:17',NULL,0,'1'),(38,'The Garden Suites','news','','accomodation_file_290621_041034_398.jpg','2021-06-29',1,'end','2021-06-29 16:10:35',NULL,0,'1'),(39,'The Valley Suites','news','','accomodation_file_290621_041051_508.jpg','2021-06-29',1,'start','2021-06-29 16:10:52',NULL,0,'1'),(40,'The Botanica Suites','news','','accomodation_file_290621_041114_714.jpg','2021-06-29',1,'end','2021-06-29 16:11:15',NULL,0,'1');
/*!40000 ALTER TABLE `ms_accomodation` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ms_activities`
--

DROP TABLE IF EXISTS `ms_activities`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `ms_activities` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `type` varchar(45) DEFAULT NULL,
  `desc` text,
  `date` date DEFAULT NULL,
  `activities_file` text,
  `entry_stamp` datetime DEFAULT NULL,
  `edit_stamp` datetime DEFAULT NULL,
  `del` varchar(45) DEFAULT '0',
  `release_on` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ms_activities`
--

LOCK TABLES `ms_activities` WRITE;
/*!40000 ALTER TABLE `ms_activities` DISABLE KEYS */;
INSERT INTO `ms_activities` VALUES (1,'Jogging & Bicycle Track',NULL,'Pesona Alam offers its guests with fun and healthy activities, such as jogging and cycling. The jogging and cycling track is located at the outdoor area in the pine forest and the \"reverse 3\" track is suitable for your morning or evening activities. Be captivated by the view and atmosphere of the wild nature while strolling or cycling along the track. Let the nature accompany you during your stay.',NULL,'activity-bg-2.jpg',NULL,NULL,'0',NULL),(2,'Archery Field',NULL,'This wide open green grass field will be your another level challange. do you ever try archery before? Our profesional Archery coach will teach you how to hit the 10 like ease. Believe us, the kids love it.',NULL,'activity-bg-3.jpg',NULL,NULL,'0',NULL),(3,'Billiard',NULL,'Test your skill versus your co-workers luck. You can have a relax conversations between co-workers after a long trip and meeting, The Lucky 8 Ball is waiting to be shoot. ',NULL,'activity-bg-4.jpg',NULL,NULL,'0',NULL),(4,'Game Room',NULL,'Go play, two words that lead to active and engaged exploration & discovery. It isn\'t only for the children, adult should be down for a game night too.',NULL,'activity-bg-5.jpg',NULL,NULL,'0',NULL),(5,'Horse Riding','news','<p>Enjoy the natural ambience by riding a horse and create memorable staycation moment with your loved ones.</p>',NULL,'activity-bg-6.jpg',NULL,'2020-06-27 11:55:12','0',NULL),(6,'Karoeke Room',NULL,'Karaoke activities are indeed fun, especially when done with close people. Reach for the microphone and let your voice sing throughout the room',NULL,'activity-bg-7.jpg',NULL,NULL,'0',NULL),(7,'Paint Ball Pine Forest','news','<p>In Pesona Alam, we truly put essence of togetherness in another level. The Pine Forest isn\'t only a place for you to catch fresh air and inner peace, but also can bring you to the thrill of fun againts your friendly co-workers. Let the war of paint begin!</p>',NULL,'activity-bg-8.jpg',NULL,'2020-10-12 11:54:46','0',NULL),(8,'Table Tennis','news','<p>Make the break time feels little bit competitive, make your time with table tennis league. Anyone who haven\'t ever played one? Let\'s grab those and ping pong time!</p>',NULL,'activity-bg-9.jpg',NULL,'2020-10-12 11:54:30','0',NULL),(9,'Team Building','news','<p>You are team because you respect, you trust and you care for each other, this Team Building activity will turn your team into a rock solid trust working machine. Let\'s we keep it up, and let the game begin!</p>',NULL,'activity-bg-10.jpg',NULL,'2020-10-12 11:54:13','0',NULL),(10,'testing123','promo','<p>askhdaskhd123</p>','2020-06-05','activities_file_050620_024656_377.PNG,activities_file_050620_024702_058.PNG,activities_file_050620_024706_944.PNG','2020-06-05 14:22:21','2020-06-05 14:47:38','1',NULL),(11,'ttest','news','','2020-09-16','activities_file_160920_082300_312.png','2020-09-16 20:23:02','2020-09-16 20:23:22','1',NULL);
/*!40000 ALTER TABLE `ms_activities` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ms_admin`
--

DROP TABLE IF EXISTS `ms_admin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `ms_admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_role` int(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `entry_stamp` datetime DEFAULT NULL,
  `edit_stamp` datetime DEFAULT NULL,
  `del` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ms_admin`
--

LOCK TABLES `ms_admin` WRITE;
/*!40000 ALTER TABLE `ms_admin` DISABLE KEYS */;
INSERT INTO `ms_admin` VALUES (1,1,'Admin',NULL,NULL,0);
/*!40000 ALTER TABLE `ms_admin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ms_dining`
--

DROP TABLE IF EXISTS `ms_dining`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `ms_dining` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `type` varchar(45) DEFAULT NULL,
  `desc` text,
  `dining_file` text,
  `date` datetime DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `entry_stamp` datetime DEFAULT NULL,
  `edit_stamp` datetime DEFAULT NULL,
  `del` tinyint(1) DEFAULT '0',
  `termscondition` text,
  `release_on` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ms_dining`
--

LOCK TABLES `ms_dining` WRITE;
/*!40000 ALTER TABLE `ms_dining` DISABLE KEYS */;
INSERT INTO `ms_dining` VALUES (1,'Food123','promo','<p><em><strong>FOOD123</strong></em></p>','dining_file_040520_104203_938.PNG','2020-05-05 00:00:00',NULL,'2020-05-04 22:41:43','2020-05-04 22:42:23',1,NULL,NULL),(4,'Berembun Spa','promo',NULL,'slide-bg-2.jpg',NULL,NULL,NULL,'2020-09-22 18:21:10',1,NULL,NULL),(5,'Outbound','news',NULL,'slide-bg-3.jpg',NULL,NULL,NULL,'2020-09-22 18:21:08',1,NULL,NULL),(7,'Berembun Spa','news',NULL,'slide-bg-2.jpg',NULL,NULL,NULL,'2020-09-22 18:21:03',1,NULL,NULL),(9,'Radial bar chart','promo','<p><em><strong>ajsdhkashdksa</strong></em></p>','dining_file_150520_010406_370.PNG,dining_file_150520_010414_797.jpg,dining_file_150520_010422_095.PNG','2020-05-15 00:00:00',NULL,'2020-05-15 13:05:09','2020-05-16 06:11:57',1,NULL,NULL),(12,'Herbal Tea','promo','<p><span style=</p>','dining_file_270620_115155_018.jpg,dining_file_170920_071000_390.jpg','2020-06-27 11:51:59',NULL,'2020-06-27 11:51:59','2020-09-17 19:26:25',1,NULL,NULL),(15,'Herbal Tea','promo','<p style=\"text-align: center;\">Boost your immune system by Pesona Herbal Tea</p>\r\n<p style=\"text-align: center;\">Available daily at The Banyan Restaurant</p>\r\n<p style=\"text-align: center;\">IDR 35K/Portion</p>','dining_file_240920_100549_902.jpg','2020-09-17 19:14:25',NULL,'2020-09-17 19:14:25','2020-12-23 17:12:49',1,NULL,NULL),(17,'Nasi Goreng Festival','promo','<p style=\"text-align: center;\">Savor the tasteful and authentic recipe from various types of Nasi Goreng</p>\r\n<p style=\"text-align: center;\">only at The Banyan Restaurant</p>\r\n<p style=\"text-align: center;\">IDR 75,000/Portion</p>','dining_file_240920_100710_767.jpg','2020-09-17 19:32:18',NULL,'2020-09-17 19:32:18','2020-12-23 17:12:47',1,NULL,NULL),(18,'Aramis Cake Deals','promo','<p style=\"text-align: center;\">Save up to 30% off for the best cakes and desserts at Halimun Lounge</p>\r\n<p style=\"text-align: center;\">available from 4 PM - 6 PM daily</p>','dining_file_240920_100801_848.jpg','2020-09-17 19:36:48',0,'2020-09-17 19:36:48','2020-09-24 10:08:02',1,NULL,NULL),(19,'#AkadAjaDulu','promo','<p style=\"text-align: center;\"><span style=\"color: #262626; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Helvetica, Arial, sans-serif; font-size: 14px;\">Planning on a small intimate wedding for your big day?</span><br style=\"color: #262626; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Helvetica, Arial, sans-serif; font-size: 14px;\" /><br style=\"color: #262626; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Helvetica, Arial, sans-serif; font-size: 14px;\" /><span style=\"color: #262626; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Helvetica, Arial, sans-serif; font-size: 14px;\">Let us help you to arrange it that will keep you within your budget.</span></p>\r\n<p style=\"text-align: center;\"><span style=\"color: #262626; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Helvetica, Arial, sans-serif; font-size: 14px;\">#AkadAjaDulu IDR 9,999,999nett for 40 Pax</span></p>\r\n<p style=\"text-align: center;\"> </p>\r\n<p style=\"text-align: center;\"><span style=\"color: #262626; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Helvetica, Arial, sans-serif; font-size: 14px;\">Email us at sales-pesonaalam@tauzia.com for more information</span></p>','dining_file_121020_085640_792.jpg','2020-10-12 08:56:49',NULL,'2020-10-12 08:56:49','2023-02-16 21:50:21',1,NULL,'1'),(20,'Ayam Goreng Sambal Cibiuk','promo','<p style=\"text-align: center;\">Savor the tasteful Sundanese cuisine \"Ayam Goreng Sambal Cibiuk\" specially made by our Chef only at The Banyan Restaurant</p>\r\n<p style=\"text-align: center;\">IDR 85,000/portion</p>','dining_file_231220_051648_971.jpeg','2020-12-23 17:16:54',NULL,'2020-12-23 17:16:54','2023-02-16 21:49:23',1,NULL,NULL),(21,'Sabbaba','promo','<p style=\"text-align: center;\">Enjoy the hot and sweet traditional drink \"Sabbaba\", freshly made from ginger, coconut milk and pandan leaves.&nbsp;</p>\r\n<p style=\"text-align: center;\">IDR 35,000nett</p>\r\n<p style=\"text-align: center;\">Available daily at The Banyan Restaurant and Halimun Lounge</p>','dining_file_231220_052224_548.jpg','2020-12-23 17:22:30',NULL,'2020-12-23 17:22:30','2021-03-04 13:03:45',1,NULL,NULL),(22,'D\'Frozen Olaf','promo','<p style=\"text-align: center;\"><span style=\"color: #4d5156; font-family: arial, sans-serif; font-size: 14px;\">Serve it with&nbsp;</span><span style=\"font-weight: bold; color: #5f6368; font-family: arial, sans-serif; font-size: 14px;\">ice</span><span style=\"color: #4d5156; font-family: arial, sans-serif; font-size: 14px;\">&nbsp;or drink it straight, your call. The strawb</span><span style=\"color: #050608; font-family: \'Nespresso Lucas\', Helvetica, Arial, sans-serif; font-size: 14px; letter-spacing: 0.35px;\">erry season bursts on your tastebuds with this scrumptiously cool, creamy coffee concoction.</span></p>\r\n<p style=\"text-align: center;\"><span style=\"color: #050608; font-family: \'Nespresso Lucas\', Helvetica, Arial, sans-serif; font-size: 14px; letter-spacing: 0.35px;\">IDR 40,000 nett</span></p>\r\n<p style=\"text-align: center;\"><span style=\"color: #050608; font-family: \'Nespresso Lucas\', Helvetica, Arial, sans-serif; font-size: 14px; letter-spacing: 0.35px;\">Available at The Banyan Restaurant &amp; Halimun Lounge</span></p>','dining_file_231220_052448_922.jpg','2020-12-23 17:24:52',NULL,'2020-12-23 17:24:52','2021-01-08 13:51:24',1,NULL,NULL),(23,'Love Is in The Air - Romantic Dinner Special Valentine','promo','<p style=\"text-align: center;\">Fire up your romance by having romantic dinner special Valentine in a fine-dining set up while t<span style=\"color: #010f2a; font-family: Helvetica, Arial, sans-serif; font-size: 13px; letter-spacing: 0.1px;\">ake in the view of&nbsp;surrounding mountain&nbsp;with your beloved and indulge in a three-course menu.&nbsp;</span></p>\r\n<p style=\"text-align: center;\">Starting from IDR 550,000/couple</p>\r\n<p style=\"text-align: center;\">*Only valid on February 14th, 2021</p>\r\n<p style=\"text-align: center;\">For more information, contact us at fbm-pesonaalam@tauzia.com or WhatsApp us at +628111152788</p>','dining_file_110121_040836_910.jpg','2021-01-11 16:09:20',NULL,'2021-01-11 16:09:20','2021-03-04 13:03:34',1,NULL,NULL),(24,'Ginger Shakerato Coffee','promo','<p style=\"text-align: center;\"><span style=\"color: #050505; font-family: \'Segoe UI Historic\', \'Segoe UI\', Helvetica, Arial, sans-serif; font-size: 15px; white-space: pre-wrap;\">Enjoy an intriguing Ginger Shakerato Coffee with intensity and aroma from coffee as well as mild fragrance </span></p>\r\n<p style=\"text-align: center;\"><span style=\"color: #050505; font-family: \'Segoe UI Historic\', \'Segoe UI\', Helvetica, Arial, sans-serif; font-size: 15px; white-space: pre-wrap;\">and heat from ginger which has powerful health benefits for you.</span></p>\r\n<p style=\"text-align: center;\"><span style=\"color: #050505; font-family: \'Segoe UI Historic\', \'Segoe UI\', Helvetica, Arial, sans-serif; font-size: 15px; white-space: pre-wrap;\">Available daily at The Banyan Restaurant </span></p>','dining_file_040321_011519_095.jpeg','2021-03-04 13:15:30',NULL,'2021-03-04 13:15:30','2021-04-09 13:55:52',1,NULL,NULL),(25,'Ramadan Delights','promo','<p class=\"MsoNormal\" style=\"line-height: normal; background: white; text-align: center;\"><span style=\"font-size: 12.5pt; font-family: \'Arial\',\'sans-serif\'; mso-fareast-font-family: \'Times New Roman\'; color: #212529;\">We prepare a special breakfasting buffet \'Ramadan Delights\' at The Banyan Restaurant featuring a lavish spread of mouth-watering menu options. Start from IDR 125,000nett/person (for minimum 20 pax) including beverages for guests who plan to have a memorable group gathering over a fantastic meal.</span></p>','dining_file_090421_013110_639.jpg','2021-04-09 13:31:15',NULL,'2021-04-09 13:31:15','2021-05-19 12:21:21',1,NULL,NULL),(26,'Ramadan Menu A La Carte','promo','<p class=\"MsoNormal\" style=\"line-height: normal; background: white; text-align: center;\"><span style=\"font-size: 12.5pt; font-family: \'Arial\',\'sans-serif\'; mso-fareast-font-family: \'Times New Roman\'; color: #212529;\">Pesona Alam Resort &amp; Spa is delivering Ramadan signature menu selections feature Indonesian, Traditional menu and Arabian cuisine. All orders will come with complimentary Ramadan starters (Takjil).</span></p>\r\n<p class=\"MsoNormal\" style=\"line-height: normal; background: white; text-align: center;\"><span style=\"font-size: 12.5pt; font-family: \'Arial\',\'sans-serif\'; mso-fareast-font-family: \'Times New Roman\'; color: #212529;\">All menus will readily be served in hassle-free and neat presentation with hygiene standards. Among the featured dishes are Nasi Kebuli, Sangu Beleum and Nasi Bogana by only IDR 95,000/portion. </span></p>','dining_file_090421_015033_617.jpg','2021-04-09 13:50:37',NULL,'2021-04-09 13:50:37','2021-05-19 12:21:19',1,NULL,NULL),(30,'Game Night - challenge your coworkers and bosses on a game night and defeat them, for goods','news','<p>ini deskrisi</p>','dining_file_290621_023134_578.jpg','2021-06-29 14:31:36',1,'2021-06-29 14:31:36',NULL,1,'<ul class=\"ul sm:pl-5\">\n              <li class=\"mb-3\"><p class=\"ff-2 maw-75 sm:maw-100\">This voucher is valid until Six months from the date of issuance, and can be redeemed at any Apparel Group stores in UAE</p></li>\n              <li class=\"mb-3\"><p class=\"ff-2 maw-75 sm:maw-100\">This voucher is non-refundable and cannot be exchanged for cash in part or full and is valid for a single transaction only</p></li>\n              <li class=\"mb-3\"><p class=\"ff-2 maw-75 sm:maw-100\">This voucher is not valid during sale or in conjunction with any special promotion</p></li>\n              <li class=\"mb-3\"><p class=\"ff-2 maw-75 sm:maw-100\">Club Apparel points cannot be availed or redeemed while using this voucher</p></li>\n              <li class=\"mb-3\"><p class=\"ff-2 maw-75 sm:maw-100\">Strictly no extension of the expiry date from the date of issue will be allowed</p></li>\n              <li class=\"mb-3\"><p class=\"ff-2 maw-75 sm:maw-100\">The management retains the right to reject any voucher that has been tampered with or found in any way unacceptable</p></li>\n              <li class=\"mb-3\"><p class=\"ff-2 maw-75 sm:maw-100\">We are not responsible if a Gift Voucher is lost, stolen, damaged or destroyed and no replacement will be provided in these circumstances</p></li>\n              <li class=\"mb-3\"><p class=\"ff-2 maw-75 sm:maw-100\">Vouchers cannot be clubbed and used for single transaction</p></li>\n              <li><p class=\"ff-2 maw-75 sm:maw-100\">This voucher cannot be redeemed in order to purchase gift cards</p></li>\n            </ul>','1'),(31,'March of Happy Day - give your self time to relax','news','<p>ini deskrisi</p>','dining_file_290621_023151_026.jpg','2021-06-29 14:31:52',1,'2021-06-29 14:31:52',NULL,1,'<ul class=\"ul sm:pl-5\">\n               <li class=\"mb-3\"><p class=\"ff-2 maw-75 sm:maw-100\">This voucher is valid until Six months from the date of issuance, and can be redeemed at any Apparel Group stores in UAE</p></li>\n               <li class=\"mb-3\"><p class=\"ff-2 maw-75 sm:maw-100\">This voucher is non-refundable and cannot be exchanged for cash in part or full and is valid for a single transaction only</p></li>\n               <li class=\"mb-3\"><p class=\"ff-2 maw-75 sm:maw-100\">This voucher is not valid during sale or in conjunction with any special promotion</p></li>\n               <li class=\"mb-3\"><p class=\"ff-2 maw-75 sm:maw-100\">Club Apparel points cannot be availed or redeemed while using this voucher</p></li>\n               <li class=\"mb-3\"><p class=\"ff-2 maw-75 sm:maw-100\">Strictly no extension of the expiry date from the date of issue will be allowed</p></li>\n               <li class=\"mb-3\"><p class=\"ff-2 maw-75 sm:maw-100\">The management retains the right to reject any voucher that has been tampered with or found in any way unacceptable</p></li>\n               <li class=\"mb-3\"><p class=\"ff-2 maw-75 sm:maw-100\">We are not responsible if a Gift Voucher is lost, stolen, damaged or destroyed and no replacement will be provided in these circumstances</p></li>\n               <li class=\"mb-3\"><p class=\"ff-2 maw-75 sm:maw-100\">Vouchers cannot be clubbed and used for single transaction</p></li>\n               <li><p class=\"ff-2 maw-75 sm:maw-100\">This voucher cannot be redeemed in order to purchase gift cards</p></li>\n             </ul>','1'),(32,'Warm season Desember 2021 - disclosures your love to your loved one','news','<p>ini deskrisi</p>','dining_file_290621_023209_097.jpg','2021-06-29 14:32:16',1,'2021-06-29 14:32:16',NULL,1,'<ul class=\"ul sm:pl-5\">\n               <li class=\"mb-3\"><p class=\"ff-2 maw-75 sm:maw-100\">This voucher is valid until Six months from the date of issuance, and can be redeemed at any Apparel Group stores in UAE</p></li>\n               <li class=\"mb-3\"><p class=\"ff-2 maw-75 sm:maw-100\">This voucher is non-refundable and cannot be exchanged for cash in part or full and is valid for a single transaction only</p></li>\n               <li class=\"mb-3\"><p class=\"ff-2 maw-75 sm:maw-100\">This voucher is not valid during sale or in conjunction with any special promotion</p></li>\n               <li class=\"mb-3\"><p class=\"ff-2 maw-75 sm:maw-100\">Club Apparel points cannot be availed or redeemed while using this voucher</p></li>\n               <li class=\"mb-3\"><p class=\"ff-2 maw-75 sm:maw-100\">Strictly no extension of the expiry date from the date of issue will be allowed</p></li>\n               <li class=\"mb-3\"><p class=\"ff-2 maw-75 sm:maw-100\">The management retains the right to reject any voucher that has been tampered with or found in any way unacceptable</p></li>\n               <li class=\"mb-3\"><p class=\"ff-2 maw-75 sm:maw-100\">We are not responsible if a Gift Voucher is lost, stolen, damaged or destroyed and no replacement will be provided in these circumstances</p></li>\n               <li class=\"mb-3\"><p class=\"ff-2 maw-75 sm:maw-100\">Vouchers cannot be clubbed and used for single transaction</p></li>\n               <li><p class=\"ff-2 maw-75 sm:maw-100\">This voucher cannot be redeemed in order to purchase gift cards</p></li>\n             </ul>','1'),(33,'Discussion Session - Rp. 0 booking fee for all conference hall','news','<p>ini deskrisi</p>','dining_file_290621_023228_048.jpg','2021-06-29 14:32:29',1,'2021-06-29 14:32:29',NULL,1,'<ul class=\"ul sm:pl-5\">\n               <li class=\"mb-3\"><p class=\"ff-2 maw-75 sm:maw-100\">This voucher is valid until Six months from the date of issuance, and can be redeemed at any Apparel Group stores in UAE</p></li>\n               <li class=\"mb-3\"><p class=\"ff-2 maw-75 sm:maw-100\">This voucher is non-refundable and cannot be exchanged for cash in part or full and is valid for a single transaction only</p></li>\n               <li class=\"mb-3\"><p class=\"ff-2 maw-75 sm:maw-100\">This voucher is not valid during sale or in conjunction with any special promotion</p></li>\n               <li class=\"mb-3\"><p class=\"ff-2 maw-75 sm:maw-100\">Club Apparel points cannot be availed or redeemed while using this voucher</p></li>\n               <li class=\"mb-3\"><p class=\"ff-2 maw-75 sm:maw-100\">Strictly no extension of the expiry date from the date of issue will be allowed</p></li>\n               <li class=\"mb-3\"><p class=\"ff-2 maw-75 sm:maw-100\">The management retains the right to reject any voucher that has been tampered with or found in any way unacceptable</p></li>\n               <li class=\"mb-3\"><p class=\"ff-2 maw-75 sm:maw-100\">We are not responsible if a Gift Voucher is lost, stolen, damaged or destroyed and no replacement will be provided in these circumstances</p></li>\n               <li class=\"mb-3\"><p class=\"ff-2 maw-75 sm:maw-100\">Vouchers cannot be clubbed and used for single transaction</p></li>\n               <li><p class=\"ff-2 maw-75 sm:maw-100\">This voucher cannot be redeemed in order to purchase gift cards</p></li>\n             </ul>','1'),(34,'Love in Spring - Make your love bloom as this season latched right the month... of love','news','<p>ini deskrisi</p>','dining_file_290621_023242_274.jpg','2021-06-29 14:32:43',1,'2021-06-29 14:32:43',NULL,1,'<ul class=\"ul sm:pl-5\">\n               <li class=\"mb-3\"><p class=\"ff-2 maw-75 sm:maw-100\">This voucher is valid until Six months from the date of issuance, and can be redeemed at any Apparel Group stores in UAE</p></li>\n               <li class=\"mb-3\"><p class=\"ff-2 maw-75 sm:maw-100\">This voucher is non-refundable and cannot be exchanged for cash in part or full and is valid for a single transaction only</p></li>\n               <li class=\"mb-3\"><p class=\"ff-2 maw-75 sm:maw-100\">This voucher is not valid during sale or in conjunction with any special promotion</p></li>\n               <li class=\"mb-3\"><p class=\"ff-2 maw-75 sm:maw-100\">Club Apparel points cannot be availed or redeemed while using this voucher</p></li>\n               <li class=\"mb-3\"><p class=\"ff-2 maw-75 sm:maw-100\">Strictly no extension of the expiry date from the date of issue will be allowed</p></li>\n               <li class=\"mb-3\"><p class=\"ff-2 maw-75 sm:maw-100\">The management retains the right to reject any voucher that has been tampered with or found in any way unacceptable</p></li>\n               <li class=\"mb-3\"><p class=\"ff-2 maw-75 sm:maw-100\">We are not responsible if a Gift Voucher is lost, stolen, damaged or destroyed and no replacement will be provided in these circumstances</p></li>\n               <li class=\"mb-3\"><p class=\"ff-2 maw-75 sm:maw-100\">Vouchers cannot be clubbed and used for single transaction</p></li>\n               <li><p class=\"ff-2 maw-75 sm:maw-100\">This voucher cannot be redeemed in order to purchase gift cards</p></li>\n             </ul>','1'),(35,'Holiday season 2021 - Your family deserve a nice trip','news','<p>ini deskrisi</p>','dining_file_290621_023256_525.jpg','2021-06-29 14:32:57',1,'2021-06-29 14:32:57','2023-02-16 21:45:52',1,'<ul class=\"ul sm:pl-5\">\n               <li class=\"mb-3\"><p class=\"ff-2 maw-75 sm:maw-100\">This voucher is valid until Six months from the date of issuance, and can be redeemed at any Apparel Group stores in UAE</p></li>\n               <li class=\"mb-3\"><p class=\"ff-2 maw-75 sm:maw-100\">This voucher is non-refundable and cannot be exchanged for cash in part or full and is valid for a single transaction only</p></li>\n               <li class=\"mb-3\"><p class=\"ff-2 maw-75 sm:maw-100\">This voucher is not valid during sale or in conjunction with any special promotion</p></li>\n               <li class=\"mb-3\"><p class=\"ff-2 maw-75 sm:maw-100\">Club Apparel points cannot be availed or redeemed while using this voucher</p></li>\n               <li class=\"mb-3\"><p class=\"ff-2 maw-75 sm:maw-100\">Strictly no extension of the expiry date from the date of issue will be allowed</p></li>\n               <li class=\"mb-3\"><p class=\"ff-2 maw-75 sm:maw-100\">The management retains the right to reject any voucher that has been tampered with or found in any way unacceptable</p></li>\n               <li class=\"mb-3\"><p class=\"ff-2 maw-75 sm:maw-100\">We are not responsible if a Gift Voucher is lost, stolen, damaged or destroyed and no replacement will be provided in these circumstances</p></li>\n               <li class=\"mb-3\"><p class=\"ff-2 maw-75 sm:maw-100\">Vouchers cannot be clubbed and used for single transaction</p></li>\n               <li><p class=\"ff-2 maw-75 sm:maw-100\">This voucher cannot be redeemed in order to purchase gift cards</p></li>\n             </ul>','1'),(36,'test','news','asdwad','dining_file_160223_100438_406.jpg','2023-02-16 22:04:39',NULL,'2023-02-16 22:04:39',NULL,0,NULL,'1'),(37,'asdwa','promo','rhjrthrth','dining_file_160223_100514_444.jpg','2023-02-16 22:05:15',NULL,'2023-02-16 22:05:15',NULL,0,NULL,'1');
/*!40000 ALTER TABLE `ms_dining` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ms_facilities`
--

DROP TABLE IF EXISTS `ms_facilities`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `ms_facilities` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `type` varchar(45) DEFAULT NULL,
  `desc` text,
  `date` date DEFAULT NULL,
  `facilities_file` text,
  `entry_stamp` datetime DEFAULT NULL,
  `edit_stamp` datetime DEFAULT NULL,
  `del` varchar(45) DEFAULT '0',
  `release_on` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ms_facilities`
--

LOCK TABLES `ms_facilities` WRITE;
/*!40000 ALTER TABLE `ms_facilities` DISABLE KEYS */;
INSERT INTO `ms_facilities` VALUES (1,'Ballroom',NULL,NULL,'2023-02-17','facilities_file_170223_010627_253.jpg','2023-02-17 01:06:30','2023-02-17 01:06:46','0',NULL),(2,'Berembun Spa',NULL,NULL,'2023-02-17','facilities_file_170223_010837_804.jpg','2023-02-17 01:08:40',NULL,'0',NULL),(3,'Billiard',NULL,NULL,'2023-02-17','facilities_file_170223_010852_193.jpg','2023-02-17 01:08:53',NULL,'0',NULL),(4,'Buggy Tour',NULL,NULL,'2023-02-17','facilities_file_170223_010906_545.jpg','2023-02-17 01:09:07',NULL,'0',NULL),(5,'Bycycle & Cycling Track',NULL,NULL,'2023-02-17','facilities_file_170223_010920_184.jpg','2023-02-17 01:09:21',NULL,'0',NULL),(6,'Gym Area',NULL,NULL,'2023-02-17','facilities_file_170223_010934_564.jpg','2023-02-17 01:09:35',NULL,'0',NULL),(7,'Infinity Pool',NULL,NULL,'2023-02-17','facilities_file_170223_010950_251.jpg','2023-02-17 01:09:51',NULL,'0',NULL),(8,'Table Tennis',NULL,NULL,'2023-02-17','facilities_file_170223_011004_737.jpg','2023-02-17 01:10:05',NULL,'0',NULL),(9,'Wedding Chapel',NULL,NULL,'2023-02-17','facilities_file_170223_011016_445.jpg','2023-02-17 01:10:17',NULL,'0',NULL);
/*!40000 ALTER TABLE `ms_facilities` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ms_login`
--

DROP TABLE IF EXISTS `ms_login`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `ms_login` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) DEFAULT NULL,
  `type` varchar(45) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `password_hash` text,
  `entry_stamp` datetime DEFAULT NULL,
  `edit_stamp` datetime DEFAULT NULL,
  `del` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ms_login`
--

LOCK TABLES `ms_login` WRITE;
/*!40000 ALTER TABLE `ms_login` DISABLE KEYS */;
INSERT INTO `ms_login` VALUES (1,1,'admin','admin','123','40bd001563085fc35165329ea1ff5c5ecbdbbeef',NULL,NULL,0);
/*!40000 ALTER TABLE `ms_login` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ms_news`
--

DROP TABLE IF EXISTS `ms_news`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `ms_news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `type` varchar(45) DEFAULT NULL,
  `desc` text,
  `news_file` text,
  `date` date DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `entry_stamp` datetime DEFAULT NULL,
  `edit_stamp` datetime DEFAULT NULL,
  `del` tinyint(1) DEFAULT '0',
  `release_on` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ms_news`
--

LOCK TABLES `ms_news` WRITE;
/*!40000 ALTER TABLE `ms_news` DISABLE KEYS */;
INSERT INTO `ms_news` VALUES (8,'Grand Opening Horse Riding Training',NULL,'You are team because you respect, you trust and you care for each other, this Team Building activity will turn your team into a rock solid trust working mechine. Let\'s we keep it up, and let the game begin!','news-bg-1.jpg,activity-bg-1.jpg,activity-bg-2.jpg,activity-bg-3.jpg','2020-03-22',NULL,NULL,'2020-10-15 10:51:32',0,'1'),(9,'New Sauna Room & New Beauty Package',NULL,NULL,'news-bg-2.jpg','2020-03-22',NULL,NULL,'2020-10-15 10:51:30',0,'1'),(10,'After a long time, Now Club Huis come with new interior','news','<p>tes list</p>\r\n<ol>\r\n<li>tes tes</li>\r\n<li>tes</li>\r\n<li>tes</li>\r\n</ol>','news-bg-3.jpg','2020-03-22',NULL,NULL,'2020-10-15 10:51:28',0,'1'),(27,'Purchase Now Stay Later','promo','<p><p class=</p>','news_file_200520_022047_849.jpg','2020-05-19',NULL,'2020-05-19 14:57:34','2020-09-24 10:08:34',1,'1'),(30,'Pesona Alam Resort & Spa Puncak have Successfully Received the CHSE (Cleanliness, Health, Safety, Environment) Certificate with Perfect Score','news','<p class=\"MsoNormal\" style=\"margin-top: 12.0pt; text-align: justify; line-height: 150%; mso-pagination: none; background: white;\"><span lang=\"EN\" style=\"font-family: \'Verdana\',\'sans-serif\'; mso-fareast-font-family: Verdana; mso-bidi-font-family: Verdana; color: #434343;\">Pesona Alam Resort &amp; Spa Puncak, have successfully obtained the CHSE (Cleanliness, Health, Safety and Environmental) certificate from the Ministry of Tourism and Creative Economy with perfect score. This certificate guarantees that the products and services have met protocols for cleanliness, health, safety and environmental sustainability.</span></p>\r\n<p class=\"MsoNormal\" style=\"margin-top: 12.0pt; text-align: justify; line-height: 150%; mso-pagination: none; background: white;\"><span lang=\"EN\" style=\"font-family: \'Verdana\',\'sans-serif\'; mso-fareast-font-family: Verdana; mso-bidi-font-family: Verdana; color: #434343;\">This CHSE certificate demonstrates&nbsp;Pesona Alam Resort &amp; Spa commitment in its participation to prevent the spread of Covid-19 and to follow every health protocol set by the government.</span></p>\r\n<p class=\"MsoNormal\" style=\"margin-top: 12.0pt; text-align: justify; line-height: 150%; mso-pagination: none; background: white;\"><span lang=\"EN\" style=\"font-family: \'Verdana\',\'sans-serif\'; mso-fareast-font-family: Verdana; mso-bidi-font-family: Verdana; color: #434343;\">In this certification process, Sucofindo, an institution that has been appointed by the Ministry of Tourism and Economy Creative, was invited to conduct a comprehensive audit of the facilities and other resources of Pesona Alam Resort &amp; Spa Puncak. Starting from rooms, public facilities, public spaces, to where the staff works, in terms of the CHSE.</span></p>\r\n<p class=\"MsoNormal\" style=\"margin-top: 12.0pt; text-align: justify; line-height: 150%; mso-pagination: none; background: white;\"><span lang=\"EN\" style=\"font-family: \'Verdana\',\'sans-serif\'; mso-fareast-font-family: Verdana; mso-bidi-font-family: Verdana; color: #434343;\">\"Employees and guests of Pesona Alam - Bogor have known and carried out the protocols in handling COVID-19 prevention properly while at the hotel,\" said Mr. Achmad Jovian,<span style=\"mso-spacerun: yes;\">&nbsp; </span>one of the auditors.&nbsp;</span></p>\r\n<p class=\"MsoNormal\" style=\"margin-top: 12.0pt; text-align: justify; line-height: 150%; mso-pagination: none; background: white;\"><span lang=\"EN\" style=\"font-family: \'Verdana\',\'sans-serif\'; mso-fareast-font-family: Verdana; mso-bidi-font-family: Verdana; color: #434343;\"><span style=\"mso-spacerun: yes;\">&nbsp;</span>As a result of the audit, Pesona Alam Resort &amp; Spa Puncak were declared to have met the health protocol requirements in the context of preventing and controlling Covid-19 with a perfect score of 100%.</span></p>\r\n<p class=\"MsoNormal\" style=\"margin-top: 12.0pt; text-align: justify; line-height: 150%; mso-pagination: none; background: white;\"><span lang=\"EN\" style=\"font-family: \'Verdana\',\'sans-serif\'; mso-fareast-font-family: Verdana; mso-bidi-font-family: Verdana; color: #434343;\">TAUZIA Hotels, as a part of The Ascott Limited, has also launched \'Ascott Cares\' in July 2020, with a commitment to provide strict hygiene standards as well as safe distance management to continue providing a safe staying experience for guests and safe working environment for employees.</span></p>\r\n<p class=\"MsoNormal\" style=\"margin-top: 12.0pt; text-align: justify; line-height: 150%; mso-pagination: none; background: white;\"><span lang=\"EN\" style=\"font-family: \'Verdana\',\'sans-serif\'; mso-fareast-font-family: Verdana; mso-bidi-font-family: Verdana; color: #434343;\">\"It is a great honor for us to receive this certification with the perfect score. This is part of our responsibility to provide a healthy and safe environment to our guests and team members, \"said Handy Bunardy, General Manager of Pesona Alam Resort &amp; Spa.</span></p>','news_file_110121_033251_912.JPG','2021-01-11',1,'2021-01-11 15:33:07','2021-06-28 16:13:49',1,'1');
/*!40000 ALTER TABLE `ms_news` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ms_rooms_villas`
--

DROP TABLE IF EXISTS `ms_rooms_villas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `ms_rooms_villas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `type` varchar(45) DEFAULT NULL,
  `desc` text,
  `rooms_villas_file` text,
  `date` datetime DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `release_on` varchar(100) DEFAULT NULL,
  `size` varchar(100) DEFAULT NULL,
  `capacity` varchar(100) DEFAULT NULL,
  `facilities` text,
  `entry_stamp` datetime DEFAULT NULL,
  `edit_stamp` datetime DEFAULT NULL,
  `del` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ms_rooms_villas`
--

LOCK TABLES `ms_rooms_villas` WRITE;
/*!40000 ALTER TABLE `ms_rooms_villas` DISABLE KEYS */;
INSERT INTO `ms_rooms_villas` VALUES (1,'Superior Room','1','All Superior Rooms offer the warmth and comfort of a country house hotel with sleek and modern interiors. Decor of the room has a contemporary feel with calming neutral color. To create a truly natural environment, each room offers stunning views over manicured gardens','rooms_file_160223_110144_758.jpg','2023-02-16 22:54:39',NULL,'1','26','2','<ul>\r\n											<li>\"32 inch LED TV</li>\r\n											<li>AC</li>\r\n											<li>Highspeed WiFi </li>\r\n											<li>Safe Deposit Box</li>\r\n											<li>Coffee & Tea Maker </li>\r\n											<li>Hair Dryer</li>\r\n											<li>Garden View </li>\r\n											<li>Room Size : 24m2 / With Balcony : 26 m2</li>\r\n										</ul>','2023-02-16 22:54:39','2023-02-16 23:01:46',0),(2,'Deluxe Room Standard','1','Offers the warmth and comfort of a country house hotel with sleek and modern interiors. Our Deluxe room offers king-size bed or twin bed based on availability, vast bathroom with walk-in shower with breathtaking views of our own garden or pine forest.','rooms_file_160223_110529_532.jpg','2023-02-16 23:05:50',NULL,'1','26','2','<ul>\r\n											<li>\"32 inch LED TV</li>\r\n											<li>AC</li>\r\n											<li>Highspeed WiFi </li>\r\n											<li>Safe Deposit Box</li>\r\n											<li>Coffee & Tea Maker </li>\r\n											<li>Hair Dryer</li>\r\n											<li>Pine Forest or Garden View </li>\r\n											<li>Room Size : 24m2 / With Balcony : 26 m2</li>\r\n										</ul>','2023-02-16 23:05:50',NULL,0),(3,'Deluxe Mountain View','1','Offers warmth and comfort of a country house hotel with sleek and modern interiors. Deluxe Mountain View room offers king-size bed or twin bed room based on availability, vast bathroom with walk-in shower and wider balcony with breathtaking views of Puncak and its surroundings. Decor of the room has a contemporary feel with calming neutral colour to make your stay in Puncak an unforgettable experience.','rooms_file_160223_111205_028.jpg','2023-02-16 23:12:08',NULL,'1','26','2','<ul>\r\n											<li>\"32 inch LED TV</li>\r\n											<li>AC</li>\r\n											<li>Highspeed WiFi </li>\r\n											<li>Safe Deposit Box</li>\r\n											<li>Coffee & Tea Maker </li>\r\n											<li>Hair Dryer</li>\r\n											<li>Room Size : 24m2 / With Balcony : 26 m2</li>\r\n										</ul>','2023-02-16 23:12:08',NULL,0),(4,'Deluxe Corner','1','All rooms offer the warmth and comfort of a country house hotel with sleek and modern interiors. In addition, our Deluxe Corner offers king-size bed, vast bathroom with walk-in shower and wider balcony with breathtaking views of Puncak and its surroundings. Decor of the room has a contemporary feel with calming neutral colour to make your stay in Puncak an unforgettable experience.','rooms_file_160223_111303_534.jpg','2023-02-16 23:13:05',NULL,'1','28','2','<ul>\r\n											<li>\"32 inch LED TV</li>\r\n											<li>AC</li>\r\n											<li>Highspeed WiFi </li>\r\n											<li>Safe Deposit Box</li>\r\n											<li>Coffee & Tea Maker </li>\r\n											<li>Hair Dryer</li>\r\n											<li>Mountain View</li>\r\n											<li>Room Size : 24m2 / With Balcony : 28 m2</li>\r\n										</ul>','2023-02-16 23:13:05',NULL,0),(5,'Villa Superior 2 Bedroom','2','Inspired by European Architecture and Puncak Atmosphere, Villa Superior 2 Bedrooms offers the warmth and comfort of 1 King Size Bed Room and 1 Single Bed Room. Each villa is surrounded by beautiful garden, family swimming pool, gazebo and a vast pine forest nearby to accompany you during your stay.','rooms_villas_file_160223_115604_992.jpg','2023-02-16 23:56:07',NULL,'1','','','<ul>\r\n												<li>32 inch LED TV </li>\r\n												<li>AC </li>\r\n												<li>Highspeed WiFi </li>\r\n												<li>Safe Deposit Box</li>\r\n												<li>Coffee & Tea Maker </li>\r\n												<li>Hair Dryer</li>\r\n												<li>Iron Board</li>\r\n												<li>Living Room</li>\r\n												<li>Refrigerator</li>\r\n												<li>Kitchen Utensils (Microwave, Rice Cooker, Electric Stove, Dinning Room, Fire Extinguise, Minibar for Free, Water Heater)</li>\r\n											</ul>','2023-02-16 23:56:07',NULL,0),(6,'Villa Superior 1 Bedroom','2','Villa Superior 1 Bedroom offers the warmth and comfort of a country house. Each villa is surrounded by beautiful garden, family swimming pool, gazebo and a vast pine forest nearby to accompany you during your stay.','rooms_villas_file_160223_115653_614.jpg','2023-02-16 23:56:56',NULL,'1','','','<ul>\r\n												<li>32 inch LED TV </li>\r\n												<li>AC </li>\r\n												<li>Highspeed WiFi </li>\r\n												<li>Safe Deposit Box</li>\r\n												<li>Coffee & Tea Maker </li>\r\n												<li>Hair Dryer</li>\r\n												<li>Iron Board</li>\r\n												<li>Living Room</li>\r\n												<li>Refrigerator</li>\r\n												<li>Kitchen Utensils (Microwave, Rice Cooker, Electric Stove, Dinning Room, Fire Extinguise, Minibar for Free, Water Heater)</li>\r\n											</ul>','2023-02-16 23:56:56',NULL,0),(7,'Villa Deluxe 2 bedroom','2','Inspired by European Architecture and Puncak Atmosphere, Villa Deluxe 2 Bedrooms offers the warmth and comfort of 1 King Size Bed Room and 1 Twin Bed Room. Each villa is surrounded by beautiful garden, family swimming pool, gazebo and a vast pine forest nearby to accompany you during your stay.','rooms_villas_file_160223_115743_344.jpg','2023-02-16 23:57:45',NULL,'1','','','<ul>\r\n												<li>32 inch LED TV </li>\r\n												<li>AC </li>\r\n												<li>Highspeed WiFi </li>\r\n												<li>Safe Deposit Box</li>\r\n												<li>Coffee & Tea Maker </li>\r\n												<li>Hair Dryer</li>\r\n												<li>Iron Board</li>\r\n												<li>Living Room</li>\r\n												<li>Refrigerator</li>\r\n												<li>Kitchen Utensils (Microwave, Rice Cooker, Electric Stove, Dinning Room, Fire Extinguise, Minibar for Free, Water Heater)</li>\r\n											</ul>','2023-02-16 23:57:45',NULL,0),(8,'Villa Deluxe 3 bedroom','2','Villa Deluxe 3 Bedrooms offers 1 King Size Bed room, 1 Queen Bed Room and 1 Twin Bed room that is the perfect accommodation for your family holiday, away from hectic lifestyle of the city.','rooms_villas_file_160223_115821_529.jpg','2023-02-16 23:58:22',NULL,'1','','','<ul>\r\n												<li>32 inch LED TV </li>\r\n												<li>AC </li>\r\n												<li>Highspeed WiFi </li>\r\n												<li>Safe Deposit Box</li>\r\n												<li>Coffee & Tea Maker </li>\r\n												<li>Hair Dryer</li>\r\n												<li>Iron Board</li>\r\n												<li>Living Room</li>\r\n												<li>Refrigerator</li>\r\n												<li>Kitchen Utensils (Microwave, Rice Cooker, Electric Stove, Dinning Room, Fire Extinguise, Minibar for Free, Water Heater)</li>\r\n											</ul>','2023-02-16 23:58:22',NULL,0);
/*!40000 ALTER TABLE `ms_rooms_villas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ms_spa`
--

DROP TABLE IF EXISTS `ms_spa`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `ms_spa` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `type` varchar(45) DEFAULT NULL,
  `desc` text,
  `spa_file` text,
  `date` date DEFAULT NULL,
  `entry_stamp` datetime DEFAULT NULL,
  `edit_stamp` datetime DEFAULT NULL,
  `del` tinyint(1) DEFAULT '0',
  `release_on` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ms_spa`
--

LOCK TABLES `ms_spa` WRITE;
/*!40000 ALTER TABLE `ms_spa` DISABLE KEYS */;
INSERT INTO `ms_spa` VALUES (1,'Spa123','promo','<p><em><strong>Spa123</strong></em></p>','spa_file_040520_105913_219.PNG','2020-05-05','2020-05-04 22:58:59','2020-05-04 22:59:33',1,NULL),(2,'q','news','<p><em><strong>asdhgjasgdj</strong></em></p>','spa_file_050520_045359_311.PNG,spa_file_050520_045410_285.PNG,spa_file_050520_045420_693.PNG','2020-05-05','2020-05-05 16:54:26','2020-05-05 16:54:53',1,NULL),(3,'Wedding Pars','news',NULL,'slide-bg-1.jpg',NULL,NULL,'2020-09-22 18:30:18',1,NULL),(4,'Berembun Spa','promo',NULL,'slide-bg-2.jpg',NULL,NULL,'2020-09-22 18:30:16',1,NULL),(5,'Outbound','news',NULL,'slide-bg-3.jpg',NULL,NULL,'2020-09-22 18:30:14',1,NULL),(6,'Wedding Pars','promo',NULL,'slide-bg-1.jpg',NULL,NULL,'2020-09-22 18:30:12',1,NULL),(7,'Berembun Spa','news',NULL,'slide-bg-2.jpg',NULL,NULL,'2020-09-22 18:30:10',1,NULL),(8,'Outbound','promo',NULL,'slide-bg-3.jpg',NULL,NULL,'2020-09-22 18:30:08',1,NULL),(9,'Radial bar chart','news','<p><em><strong>asdaskdas</strong></em></p>','spa_file_150520_121821_483.jpeg,spa_file_150520_121829_882.jpeg,spa_file_150520_121837_455.jpeg','2020-05-15','2020-05-15 12:25:05','2020-05-15 12:57:54',1,NULL),(10,'Radial bar chart','news','<p><em><strong>ajsdhasf</strong></em></p>','spa_file_150520_125831_000.PNG,spa_file_150520_125838_518.PNG,spa_file_150520_125846_272.PNG','2020-05-15','2020-05-15 13:00:03','2020-05-15 13:00:25',1,NULL),(11,'Radial bar chart','news','<p><em><strong>adsad</strong></em></p>\r\n<ol>\r\n<li><em><strong>sfds</strong></em></li>\r\n<li><em><strong>gdg</strong></em></li>\r\n<li><em><strong>jhgfh</strong></em></li>\r\n</ol>','spa_file_190520_104141_352.jpg,spa_file_190520_104153_141.PNG,spa_file_190520_104244_545.PNG','2020-05-19','2020-05-19 22:42:52','2020-05-19 22:45:31',1,NULL),(12,'Radial bar chart','news','<p>asdasdas</p>','spa_file_190520_104454_303.png','2020-05-19','2020-05-19 22:44:56','2020-05-19 22:45:28',1,NULL),(13,'Radial bar chart','news','<p>asdasd</p>\r\n<ol>\r\n<li>asdasd</li>\r\n<li>asdasd</li>\r\n<li>asdasdasd</li>\r\n<li>asdasd</li>\r\n</ol>','spa_file_190520_104600_639.png,spa_file_190520_104612_817.png,spa_file_190520_104623_341.png','2020-05-19','2020-05-19 22:49:50','2020-05-19 22:50:05',1,NULL),(14,'Special Price for 2 Hours Traditional Massage','promo','<p><span style=','spa_file_270620_114640_064.JPG','2020-06-27','2020-06-27 11:46:42','2020-09-24 10:08:17',1,NULL),(15,'testt','news','','spa_file_160920_082009_965.png','2020-09-16','2020-09-16 20:20:10','2020-09-16 20:20:43',1,NULL),(16,'New Normal Meeting Package','promo','<p style=\"text-align: center;\">&nbsp;</p>\r\n<p style=\"text-align: center;\"><span style=\"color: #262626; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Helvetica, Arial, sans-serif; font-size: 14px;\">Pulling off a safe and successful face to face meeting with your colleagues?</span><br style=\"color: #262626; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Helvetica, Arial, sans-serif; font-size: 14px;\" /><span style=\"color: #262626; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Helvetica, Arial, sans-serif; font-size: 14px;\">Pesona Alam Resort &amp; Spa provides an ideal venue with high standard of hygiene and safety protocols.</span></p>\r\n<p style=\"text-align: center;\">&nbsp;</p>\r\n<p style=\"text-align: center;\">Half day meeting package start from IDR 325,000/pax!<br style=\"color: #262626; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Helvetica, Arial, sans-serif; font-size: 14px;\" /><br style=\"color: #262626; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Helvetica, Arial, sans-serif; font-size: 14px;\" /><span style=\"color: #262626; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Helvetica, Arial, sans-serif; font-size: 14px;\">Contact our sales team at sales-pesonaalam@tauzia.com for more information</span></p>','spa_file_231220_051052_175.jpeg','2020-12-23','2020-12-23 17:11:17',NULL,0,NULL),(17,'#AkadAjaDulu','promo','<p style=\"text-align: center;\"><span style=\"color: #262626; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Helvetica, Arial, sans-serif; font-size: 14px;\">Turn your wedding dream into such a memorable and sweet moment with family and close friends only.</span><br style=\"color: #262626; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Helvetica, Arial, sans-serif; font-size: 14px;\" /><span style=\"color: #262626; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Helvetica, Arial, sans-serif; font-size: 14px;\">We want to be here for you every step of the way. </span></p>\r\n<p style=\"text-align: center;\"><span style=\"color: #262626; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Helvetica, Arial, sans-serif; font-size: 14px;\">We will help you to arrange an intimate wedding in safe and healthy environment.</span></p>','spa_file_080121_015332_042.jpg','2021-01-08','2021-01-08 13:53:39','2023-02-16 21:51:36',0,'1'),(18,'213123','news','rgergerg','spa_file_160223_095149_060.jpg','2023-02-16','2023-02-16 21:51:50','2023-02-16 21:52:28',1,'3');
/*!40000 ALTER TABLE `ms_spa` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_role`
--

DROP TABLE IF EXISTS `tb_role`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tb_role` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  `entry_stamp` datetime DEFAULT NULL,
  `edit_stamp` datetime DEFAULT NULL,
  `del` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_role`
--

LOCK TABLES `tb_role` WRITE;
/*!40000 ALTER TABLE `tb_role` DISABLE KEYS */;
INSERT INTO `tb_role` VALUES (1,'Admin',NULL,NULL,0);
/*!40000 ALTER TABLE `tb_role` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tr_cek_login`
--

DROP TABLE IF EXISTS `tr_cek_login`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tr_cek_login` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) DEFAULT NULL,
  `password` text,
  `date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tr_cek_login`
--

LOCK TABLES `tr_cek_login` WRITE;
/*!40000 ALTER TABLE `tr_cek_login` DISABLE KEYS */;
INSERT INTO `tr_cek_login` VALUES (2,'','','2020-05-12 17:00:06'),(3,'nimdA','123','2020-05-13 04:33:11');
/*!40000 ALTER TABLE `tr_cek_login` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'db_pesonaalam_group'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-02-20  9:25:57
