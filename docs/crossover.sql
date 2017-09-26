-- MySQL dump 10.13  Distrib 5.7.19, for Linux (x86_64)
--
-- Host: localhost    Database: crossover
-- ------------------------------------------------------
-- Server version	5.7.19-0ubuntu0.16.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Current Database: `crossover`
--

CREATE DATABASE /*!32312 IF NOT EXISTS*/ `crossover` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `crossover`;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=54 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (51,'2014_10_12_000000_create_users_table',1),(52,'2014_10_12_100000_create_password_resets_table',1),(53,'2017_09_16_144922_create_news_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `news`
--

DROP TABLE IF EXISTS `news`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `news` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT 'nopic.jpg',
  `fulltext` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `summary` text COLLATE utf8mb4_unicode_ci,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `news_email_foreign` (`email`),
  CONSTRAINT `news_email_foreign` FOREIGN KEY (`email`) REFERENCES `users` (`email`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `news`
--

LOCK TABLES `news` WRITE;
/*!40000 ALTER TABLE `news` DISABLE KEYS */;
INSERT INTO `news` VALUES (1,'Mussum Ipsu','uploads/nopic.jpg','Mussum Ipsum, cacilds vidis litro abertis. Detraxit consequat et quo num tendi nada. Leite de capivaris, leite de mula manquis sem cabeça. Paisis, filhis, espiritis santis. Sapien in monti palavris qui num significa nadis i pareci latim.','Mussum Ipsum, cacilds vidis litro abertis...','fake@123.com','Fake User','2017-09-20 14:34:31',NULL,NULL),(2,'Norwegian family arrested for suspected attempted murder of woman','uploads/1.jpg','Six people have been arrested on suspicion of attempted murder after an 18-year-old women suffered serious injuries near Oslo on Tuesday. All six are related to the injured woman and some of them are minors, reports NRK. Police receive reports of a violent incident in the Oppegård municipality at around 7pm on Tuesday.','Six people have been arrested on suspicion of attempted murder...','fake@123.com','Fake User','2017-09-20 14:34:31',NULL,NULL),(3,'Maria takes aim at battered Caribbean, Florida could be next','uploads/2.jpg','Tropical Storm Maria grew stronger Sunday and took aim at already battered islands in the Caribbean amid growing concerns that Florida could become a long-term target.\nThe National Hurricane Center said Maria was likely to reach hurricane strength sometime Sunday with winds in excess of 74 mph. By afternoon, Maria had maximum sustained winds of 65 mph. The storm was about 400 miles east southeast of the Leeward Islands and more than 600 miles from Puerto Rico and the U.S. Virgin Islands.','Tropical Storm Maria grew stronger Sunday...','fake@123.com','Fake User','2017-09-20 14:34:31',NULL,NULL),(4,'What it\'s like to ride out Hurricane Maria, the worst storm to hit Puerto Rico in nearly 100 years','uploads/1/2017-09-20-11-38-08.JPG','SAN JUAN, Puerto Rico — The wall pulsed, bowed and finally gave, crashing to the floor and sending Hurricane Maria howling into the lobby of the Courtyard Marriott Isla Verde. \r\n\r\nIt was 8:30 a.m. Wednesday and the storm was at peak fury, mauling central Puerto Rico and lashing mercilessly at San Juan. I huddled with other guests in a cement-lined office in a far corner of the hotel, trying to decide if we should stay put or evacuate to the concrete car garage next door. \r\n\r\nI covered six previous hurricanes and thought I knew tropical cyclones. But Maria was different: meaner, louder, more punishing.','SAN JUAN, Puerto Rico — The wall pulsed, bowed and finally gave, crashing to the floor and sending Hurricane Maria howling into the lobby of the Courtyard Marriott Isla Verde. \r\n\r\nIt was 8:30 a.m. Wednesday and the storm was at peak fury, mauling central Puerto Rico and lashing mercilessly at San Juan. I...','fake@123.com','Fake User','2017-09-21 02:38:08','2017-09-21 02:38:45','2017-09-21 02:38:45'),(5,'came over the hotel intercom','uploads/nopic.jpg','At my hotel, Maria sheared off the front facade, pushed a wall down, crushed several balconies, punched holes in the first-floor ceiling and flooded the floors. If not for the hustle of the hotel staff, led by general manager José Padin, things could\'ve been a lot worse. \r\n\r\nTwo days earlier, Padin gathered guests at the lobby bar and explained what to do if the major hurricane aimed at us: All guests were expected to leave their luggage in their rooms and ride out the storm in the lobby, where it\'s safer. \r\n\r\nThat call came over the hotel intercom at 3:30 a.m. Maria was getting closer. \r\n\r\nGuests streamed into the lobby carrying pillows, blankets, iPads, babies, spr','That call came over the hotel intercom at 3:30 a.m. Maria was getting closer.','fake@123.com','Fake User','2017-09-21 02:39:37','2017-09-21 02:39:37',NULL);
/*!40000 ALTER TABLE `news` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
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
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
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
INSERT INTO `users` VALUES (1,'Fake User','fake@123.com','$2y$10$2XZVzH/6PsTIAdbqs2.LR.qQwtWSkLHRy/x/9Zv1Ekj3XIMIi4Cle','RiZ0u5wldQjfkr5DwyRc17AH7YQnklJJScvGEBP0RxYZVu7bSFfymyPY6uLL',NULL,NULL);
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

-- Dump completed on 2017-09-20 23:52:35
