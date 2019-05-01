-- MySQL dump 10.13  Distrib 8.0.12, for macos10.13 (x86_64)
--
-- Host: localhost    Database: sgrid
-- ------------------------------------------------------
-- Server version	8.0.12

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
 SET NAMES utf8mb4 ;
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
 SET character_set_client = utf8mb4 ;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2019_04_20_143340_create_query_table',2),(4,'2019_04_25_215313_create_projects_table',3),(5,'2019_04_25_222901_add_type_to_projects',4);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `projects`
--

DROP TABLE IF EXISTS `projects`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `projects` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `client` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `capacity` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `projects`
--

LOCK TABLES `projects` WRITE;
/*!40000 ALTER TABLE `projects` DISABLE KEYS */;
INSERT INTO `projects` VALUES (2,'Azure Power India Pvt. Ltd.','Service Order for Installation & Commissioning of DC Wiring, DC Underground cable laying work for DC Electrical work for 2 X 10 MW Uttar Pradesh Solar Power Plant at Azure Power Jupiter Pvt.Ltd., Village Chahitara, Tehsil: Banda, Dist, Uttar Pradesh','20 MW','Uttar Pradesh','2019-04-25 17:48:26','2019-04-25 17:48:29','Solar'),(3,'Sri Siddharth Infratech & Services Pvt. Ltd.','Work Order for AC cabling Work at Kurnool Solar Project, Andhra Pradesh','10 MW ','Andhra Pradesh','2019-04-25 17:48:26','2019-04-25 17:48:26','Solar'),(4,'Sunsure Energy Pvt. Ltd.','Placement of work order for Supply, Installation, Erection, Civil Works, Testing & Successful Commissioning and Liasoning of 66KV Plant End Switchyard PSS, Terminal Bay Extension GSS & Transmission Line for Our 15 MW Photovoltalc Solar Power Project Located ar Harpanahalli, Devanagere, Karnataka','15 MW','Karnataka','2019-04-25 17:48:26','2019-04-25 17:48:26','Solar'),(5,'Photon Energy Systems Ltd.','Turnkey Electrical Contract for Supply, Erection, Testing & Commissioning of 6.5 MW(AC) and 7.35(DC) Solar Power at Valkamdinni, Raichur Dist., Karnataka','6.5 MW','Karnataka','2019-04-25 17:48:26','2019-04-25 17:48:26','Solar'),(13,'Matrix Green Energy Pvt. Ltd.','Turnkey Electrical Contract for Supply, Erection, Testing & Commissioning of 8.5 MW(AC) and 10.35(DC) Solar PV Plant at Tumkur Village, Wadagera, Shahapur Taluk, Yadgir Dist, Karnataka','8.5 MW','Karnataka','2019-04-25 17:48:26','2019-04-25 17:48:26','Solar'),(14,'Golden Hatcheries ','Turnkey Electrical Contract for Erection, Testing & Commissioning of 20 MW Solar Power Plant at Huyildore, Bukkapatana village, Sira Taluk, Tumkur Dist, Karnatka','20 MW','Karnataka','2019-04-25 17:48:26','2019-04-25 17:48:26','Solar'),(15,'Adani Power Ltd.','Design, Engineering, Manufacturing, Assembly, Inspection and testing at work, Supply, Packing & Forwarding, Transportation with transit insurance on F.O.R, Site,  for Supply of item / Equipment related to Electrical Erection  Package for 50 MW Maduvanahalli - 1 NSM Solar project in Karnataka, India.','50 MW','Karnataka','2019-04-25 17:48:26','2019-04-25 17:48:26','Solar'),(16,'Adani Power Ltd.','Design, Engineering, Manufacturing, Assembly, Inspection and Testing at works, supply, packing & forwarding, transportation with transit insurance on F.O.R , site, for supply of item/ equipment related to Electrical Erection Package for 20 MW  Gubbi Solar Project at Karnataka.','20 MW','Karnataka','2019-04-25 17:48:26','2019-04-25 17:48:26','Solar'),(17,'CSE Development (India) Pvt. Ltd.','Supply & Service Contract for Engineering, Procurement & Construction 890.5 kWp rooftop solar project located at Isnapur, Medak District, Telangana','890.5 kWp','Telangana','2019-04-25 17:48:26','2019-04-25 17:48:26','Solar'),(18,'Cleantech Solar Energy (INDIA) Pvt. Ltd.','Supply & Service Contract for Engineering, Procurement & Construction 200 KWp rooftop solar project located at Patta No. 452m 90, Periyapalayam Main Road, Kannigaiper, Uthukottai T.K, Thiruvallur District, Tamil Nadu.','200 kWp','Tamil Nadu','2019-04-25 17:48:26','2019-04-25 17:48:26','Solar'),(19,'Fourth Partner Energy Pvt. Ltd.','Supply, Design, Engineering, Erection of MMS with Module Mounting as per scope of work for SKODA Project (Carport)','1.15 MW','Aurangabad','2019-04-25 17:48:26','2019-04-25 17:48:26','Solar'),(20,'Perfect House Pvt. Ltd.','Design, Engineering, Procurement, Erection, Testing & Commissioning, of 900kWp Rooftop Solar PV Power Project','900 kWp','Andhra Pradesh','2019-04-25 17:48:26','2019-04-25 17:48:26','Solar'),(21,'CSE Development (India) Pvt. Ltd.','Supply, Engineering, Construction For A 756.36kWp Rooftop Solar Project at Mushashi Auto Parts India Pvt Ltd, Bhawal, Haryana','756.36 kWp','Haryana','2019-04-25 17:48:26','2019-04-25 17:48:26','Solar'),(22,'Azure Power India Pvt. Ltd.','Order for supply, Erection, Installation, Civil work, Testing and Commissioning for 11kV Transformer Yard and Metering arrangement at GSS Bay for 1x6 MW Solar Power Plant of Azure Power Rooftop Pvt. Ltd. at Hindustal Aeronatical Limited (HAL), Koraput Devision, Sunabeda, Kotaput Dist, Odisha.','6 MW','Odisha','2019-04-25 17:48:26','2019-04-25 17:48:26','Solar'),(23,'NTPC Ltd.','Development of 20 MW Solar PV Project at Auraiya, Uttar Pradesh.','20MW','Uttar Pradesh','2019-04-25 17:48:26','2019-04-25 17:48:26','Solar'),(24,'CSE Development (India) Pvt. Ltd.','Supply, Engineering, Construction for a 3318.8kWp Rooftop Solar Project at H&R Jhonson Pen (Maharastra), HCCB, Wada (Maharastra), Shell Taloja (Maharastra), Toyoto Techno Park, Bhadadi, Karnataka.','3318.8 kWp','Maharastra & Karnataka','2019-04-25 17:48:26','2019-04-25 17:48:26','Solar'),(25,'Western Railways','Design, Supply, Erection, Testing & Commissioning of 25KV OHE between Ujjian - Indore Section on Ratlam Division of Western Railway including removal of infringements in connection with Double Line Work between Ujjain - Indore.','40 TKM','Madhya Pradesh','2019-04-25 17:48:26','2019-04-25 17:48:26','OHE'),(26,'Western Railways','Design, Supply, Erection, Testing & Commissioning of 25KV OHE between Mhow - Khandwa Section on Ratlam Division of Western Railway in connection with GC work between Ratlam - Khandwa.','43TKM','Madhya Pradesh','2019-04-25 17:48:26','2019-04-25 17:48:26','OHE');
/*!40000 ALTER TABLE `projects` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `queries`
--

DROP TABLE IF EXISTS `queries`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `queries` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `case` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `queries`
--

LOCK TABLES `queries` WRITE;
/*!40000 ALTER TABLE `queries` DISABLE KEYS */;
INSERT INTO `queries` VALUES (1,'one','asdf@asf','asdf','asdf','2019-04-20 09:19:40','2019-04-20 09:19:49'),(2,'Sunnya','sunnybharadwajp@gmail.com','I want to partner with Saffrongrid','asdf','2019-04-20 09:48:11','2019-04-20 09:48:11'),(3,'Bharadwaj Pedduri','sunnybharadwajp@gmail.com','I\'m looking for a job','HALP!','2019-04-20 13:29:45','2019-04-20 13:29:45'),(4,'Bharadwaj Pedduri','sunnybharadwajp@gmail.com','I\'m looking for a job','WHY WONT ANYONE ANSWER ME???','2019-04-20 13:34:00','2019-04-20 13:34:00'),(5,'Bharadwaj Pedduri','sunnybharadwajp@gmail.com','I am an exisiting customer and I need help with an ongoing project','I know someone\'s watching! You bastards!','2019-04-20 13:39:13','2019-04-20 13:39:13'),(6,'Bharadwaj Pedduri','sunnybharadwajp@gmail.com','I am an exisiting customer and I need help with an ongoing project','I know someone\'s watching! You bastards!','2019-04-20 13:39:14','2019-04-20 13:39:14'),(7,'Bharadwaj Pedduri','sunnybharadwajp@gmail.com','I am an exisiting customer and I need help with an ongoing project','FOOD. PLEASE.','2019-04-20 13:46:16','2019-04-20 13:46:16'),(8,'Bharadwaj Pedduri','sunnybharadwajp@gmail.com','I am an exisiting customer and I need help with an ongoing project','FOOD. PLEASE.','2019-04-20 13:46:17','2019-04-20 13:46:17'),(9,'Bharadwaj Pedduri','sunnybharadwajp@gmail.com','I\'m looking for a job','I see you from your window. LET ME IN!','2019-04-20 13:48:32','2019-04-20 13:48:32'),(10,'Bharadwaj Pedduri','sunnybharadwajp@gmail.com','I\'m looking for a job','I see you from your window. LET ME IN!','2019-04-20 13:48:33','2019-04-20 13:48:33'),(11,'Bharadwaj Pedduri','sunnybharadwajp@gmail.com','I\'m looking for a job','YO COME OUT Y\'ALL. I GOT BARBECUE.','2019-04-20 13:50:59','2019-04-20 13:50:59'),(12,'Bharadwaj Pedduri','sunnybharadwajp@gmail.com','I\'m looking for a job','YO COME OUT Y\'ALL. I GOT BARBECUE.','2019-04-20 13:50:59','2019-04-20 13:50:59'),(13,'Bharadwaj Pedduri','sunnybharadwajp@gmail.com','I\'m looking for a job','I\'ll barbecue y\'all you fools. GIVE ME A FUCKING JOB.','2019-04-20 13:52:06','2019-04-20 13:52:06'),(14,'Bharadwaj Pedduri','sunnybharadwajp@gmail.com','I\'m looking for a job','I\'ll barbecue y\'all you fools. GIVE ME A FUCKING JOB.','2019-04-20 13:52:07','2019-04-20 13:52:07'),(15,'Bharadwaj Pedduri','sunnybharadwajp@gmail.com','I\'m looking for a job','Hey! I\'m sorry about all of that. Was on a rage. However, do you have any jobs available now?','2019-04-20 14:07:37','2019-04-20 14:07:37'),(16,'Bharadwaj Pedduri','sunnybharadwajp@gmail.com','I\'m looking for a job','Hey! I\'m sorry about all of that. Was on a rage. However, do you have any jobs available now?','2019-04-20 14:07:38','2019-04-20 14:07:38'),(17,'Bharadwaj Pedduri','sunnybharadwajp@gmail.com','I\'m looking for a job','No longer at your shitty place. PEACE.','2019-04-20 14:10:01','2019-04-20 14:10:01'),(18,'Bharadwaj Pedduri','sunnybharadwajp@gmail.com','Other','Can someone write me a recommendation? I really need it.','2019-04-20 14:10:46','2019-04-20 14:10:46');
/*!40000 ALTER TABLE `queries` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Sunny','sunny@chakradesign.co',NULL,'$2y$10$wKhuoYgP3fX8B56bcFw34ur5owcrAMLdaBT.dyZPz3PZDoZmIRIrm',NULL,'2019-04-22 06:23:17','2019-04-22 06:23:17');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-05-01  6:59:39
