-- MySQL dump 10.13  Distrib 5.7.19, for Linux (x86_64)
--
-- Host: localhost    Database: crossover_testing
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
-- Current Database: `crossover_testing`
--

CREATE DATABASE /*!32312 IF NOT EXISTS*/ `crossover_testing` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `crossover_testing`;

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
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2017_09_16_144922_create_news_table',2);
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
  `title` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT 'nopic.jpg',
  `fulltext` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `summary` text COLLATE utf8mb4_unicode_ci,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `news_email_foreign` (`email`),
  CONSTRAINT `news_email_foreign` FOREIGN KEY (`email`) REFERENCES `users` (`email`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `news`
--

LOCK TABLES `news` WRITE;
/*!40000 ALTER TABLE `news` DISABLE KEYS */;
INSERT INTO `news` VALUES (6,'This is the first of many messages I will submit','uploads/1/2017-09-16-05-31-24.PNG','Mussum Ipsum, cacilds vidis litro abertis. Posuere libero varius. Nullam a nisl ut ante blandit hendrerit. Aenean sit amet nisi. Copo furadis é disculpa de bebadis, arcu quam euismod magna. Praesent vel viverra nisi. Mauris aliquet nunc non turpis scelerisque, eget. Mais vale um bebadis conhecidiss, que um alcoolatra anonimis.\r\n\r\nManduma pindureta quium dia nois paga. Nullam volutpat risus nec leo commodo, ut interdum diam laoreet. Sed non consequat odio. Tá deprimidis, eu conheço uma cachacis que pode alegrar sua vidis. Praesent malesuada urna nisi, quis volutpat erat hendrerit non. Nam vulputate dapibus.','Tá deprimidis, eu conheço uma cachacis que pode alegrar sua vidis...','leroberto@gmail.com','2017-09-16 20:31:24','2017-09-17 19:52:52','2017-09-17 19:52:52'),(7,'Mussum Ipsum','uploads/2/2017-09-16-05-40-19.JPG','Mussum Ipsum, cacilds vidis litro abertis. Posuere libero varius. Nullam a nisl ut ante blandit hendrerit. Aenean sit amet nisi. Copo furadis é disculpa de bebadis, arcu quam euismod magna. Praesent vel viverra nisi. Mauris aliquet nunc non turpis scelerisque, eget. Mais vale um bebadis conhecidiss, que um alcoolatra anonimis.\r\n\r\nManduma pindureta quium dia nois paga. Nullam volutpat risus nec leo commodo, ut interdum diam laoreet. Sed non consequat odio. Tá deprimidis, eu conheço uma cachacis que pode alegrar sua vidis. Praesent malesuada urna nisi, quis volutpat erat hendrerit non. Nam vulputate dapibus.','Manduma pindureta quium dia nois paga','lidicristinaroberto@gmail.com','2017-09-16 20:40:19','2017-09-16 20:40:19',NULL),(8,'Lidi\'s article','uploads/nopic.jpg','Mussum Ipsum, cacilds vidis litro abertis. Diuretics paradis num copo é motivis de denguis. Quem num gosta di mim que vai caçá sua turmis! Aenean aliquam molestie leo, vitae iaculis nisl. Praesent malesuada urna nisi, quis volutpat erat hendrerit non. Nam vulputate dapibus.','Mussum Ipsum, cacilds vidis litro abertis. Diuretics paradis num copo é motivis de denguis. Quem num gosta di mim que vai caçá sua turmis! Aenean aliquam molestie leo, vitae iaculis nisl. Praesent malesuada urna nisi, quis volutpat erat hendrerit non. Nam vulputate dapibus.','lidicristinaroberto@gmail.com','2017-09-16 23:47:06','2017-09-16 23:47:06',NULL),(9,'Mussum Ipsum','uploads/nopic.jpg','Mussum Ipsum, cacilds vidis litro abertis. Diuretics paradis num copo é motivis de denguis. Quem num gosta di mim que vai caçá sua turmis! Aenean aliquam molestie leo, vitae iaculis nisl. Praesent malesuada urna nisi, quis volutpat erat hendrerit non. Nam vulputate dapibus.','Aenean aliquam molestie leo, vitae iaculis nisl.','lidicristinaroberto@gmail.com','2017-09-16 23:48:52','2017-09-17 19:55:10','2017-09-17 19:55:10'),(10,'Mussum Ipsum','uploads/nopic.jpg','Mussum Ipsum, cacilds vidis litro abertis. Diuretics paradis num copo é motivis de denguis. Quem num gosta di mim que vai caçá sua turmis! Aenean aliquam molestie leo, vitae iaculis nisl. Praesent malesuada urna nisi, quis volutpat erat hendrerit non. Nam vulputate dapibus.','Aenean aliquam molestie leo, vitae iaculis nisl.','lidicristinaroberto@gmail.com','2017-09-16 23:52:07','2017-09-17 19:55:06','2017-09-17 19:55:06'),(11,'Mussum Ipsum','uploads/nopic.jpg','Mussum Ipsum, cacilds vidis litro abertis. Diuretics paradis num copo é motivis de denguis. Quem num gosta di mim que vai caçá sua turmis! Aenean aliquam molestie leo, vitae iaculis nisl. Praesent malesuada urna nisi, quis volutpat erat hendrerit non. Nam vulputate dapibus.','Aenean aliquam molestie leo, vitae iaculis nisl.','lidicristinaroberto@gmail.com','2017-09-16 23:52:45','2017-09-17 19:55:00','2017-09-17 19:55:00'),(12,'Mussum Ipsum','uploads/nopic.jpg','Mussum Ipsum, cacilds vidis litro abertis. Diuretics paradis num copo é motivis de denguis. Quem num gosta di mim que vai caçá sua turmis! Aenean aliquam molestie leo, vitae iaculis nisl. Praesent malesuada urna nisi, quis volutpat erat hendrerit non. Nam vulputate dapibus.','Aenean aliquam molestie leo, vitae iaculis nisl.','lidicristinaroberto@gmail.com','2017-09-16 23:53:10','2017-09-17 19:54:56','2017-09-17 19:54:56'),(13,'Preparing for war','uploads/1/2017-09-16-11-08-02.JPG','Working on a flight deck is among the most-dangerous jobs in the Navy.\r\n\r\nCarlos Vargas, a lead petty officer on the deck, said the job requires focus on the routine and fast reaction to anything unexpected.\r\n\r\n“Your head has to be on a swivel so you make sure you are aware of everything,” he said.\r\n\r\nHand signals are important because engine noise makes it difficult to hear headset communications. Flight deck workers wear color-coded shirts to help organize the chaos. Sailors who handle catapults and arresting wires wear green, those who handle weapons and ammunition wear red and the “yellow shirts” direct all movement of the aircraft.\r\n\r\nEverything on the flight deck is seen through haze of jet fuel. Heat from the jets’ afterburners radiates over the deck as the planes turn into position for takeoff. The force of the takeoffs shake anyone on the deck as dozens of fighter jets take off in rapid succession. Steam curls from the catapults after each jet launches.\r\n\r\n￼\r\nHornet pilots walk on deck after landing on the USS Eisenhower.\r\n(Photo: Jack Gruber, USA TODAY)','The 2016 training was the first time that Carrier Strike Group 10 — the Eisenhower, three destroyers, two guided-missile cruisers and a support ship — came together to prepare for war.','leroberto@gmail.com','2017-09-17 02:08:02','2017-09-17 02:08:02',NULL),(14,'Essential recipes for university','uploads/1/2017-09-17-10-48-22.JPG','These basic budget recipes are perfect for a student kitchen. We\'ve got batch cooking feasts, crowd-pleasing suppers and easy mug cakes for simple sweets.\r\nLeaving home and heading to uni to fend for yourself can seem like a daunting step. Make sure you\'re prepared with our simple student recipes, ideal for cooking on a tight budget. Learn how to make hearty curries and chillis, easy pasta bakes and more impressive dishes for casual entertaining.','These basic budget recipes are perfect for a student kitchen. We\'ve got batch cooking feasts, crowd-pleasing suppers and easy mug cakes for simple sweets.\r\nLeaving home and heading to uni to fend for yourself can seem like a...','leroberto@gmail.com','2017-09-17 13:48:22','2017-09-17 13:48:22',NULL),(15,'Every childhood vaccine may go into a single jab','uploads/1/2017-09-17-10-52-54.JPG','A technology that could eventually see every childhood vaccine delivered in a single injection has been developed by US researchers.\r\nTheir one-shot solution stores the vaccine in microscopic capsules that release the initial dose and then boosters at specific times.\r\nThe approach has been shown to work in mouse studies, described in the journal Science.\r\nThe researchers say the technology could help patients around the world.\r\nChildhood immunisations come with tears and screams. And there are a lot of them.\r\nA team at Massachusetts Institute of Technology has designed a new type of micro-particle that could combine everything into a single jab.\r\nThe particles look like miniature coffee cups that are filled with vaccine and then sealed with a lid.\r\nCrucially, the design of the cups can be altered so they break down and spill their contents at just the right time.\r\nOne set of tests showed the contents could be released at exactly nine, 20 and 41 days after they were injected into mice.\r\nOther particles that last for hundreds of days have also been developed, the researchers say.\r\nThe approach has not yet been tested on patients.\r\n\'Significant impact\'\r\nProf Robert Langer, from MIT, said: \"We are very excited about this work.\r\n\"For the first time, we can create a library of tiny, encased vaccine particles, each programmed to release at a precise, predictable time, so that people could potentially receive a single injection that, in effect, would have multiple boosters already built into it.\r\n\"This could have a significant impact on patients everywhere, especially in the developing world.\"','The approach has been shown to work in mouse studies...','leroberto@gmail.com','2017-09-17 13:52:54','2017-09-17 13:52:54',NULL),(16,'Rohingya crisis: \'Last chance\' for Aung San','uploads/1/2017-09-17-11-17-01.JPG','Myanmar\'s de facto leader Aung San Suu Kyi has \"a last chance\" to halt an army offensive that has forced hundreds of thousands of the mainly Muslim Rohingya to flee abroad, the UN head has said.\r\nAntonio Guterres told the BBC unless she acted now, \"the tragedy will be absolutely horrible\".\r\nThe UN has warned the offensive could amount to ethnic cleansing.\r\nMyanmar says it is responding to deadly militant attacks in northern Rakhine state and denies targeting civilians.\r\nThe country\'s army chief, General Min Aung Hlaing, on Sunday accused the Rohingya of trying to build a stronghold in the state.\r\nIn an interview with BBC\'s HARDtalk programme ahead of this week\'s UN General Assembly, Mr Guterres said Aung San Suu Kyi had a last chance to stop the offensive during her address to the nation on Tuesday.\r\n\"If she does not reverse the situation now, then I think the tragedy will be absolutely horrible, and unfortunately then I don\'t see how this can be reversed in the future.\"\r\nThe secretary general reiterated that the Rohingya should be allowed to return home.\r\nHe also said it was clear that Myanmar\'s military \"still have the upper hand\" in the country, putting pressure \"to do what is being done on the ground\" in Rakhine.\r\nAung San Suu Kyi - a Nobel Peace Prize laureate who spent many years under house arrest in the junta-run Myanmar (Burma) - is now facing growing criticism over the Rohingya issue.\r\nShe will not be attending the UN General Assembly in New York, and has claimed that the crisis is being distorted by a \"huge iceberg of misinformation\".\r\nShe said tensions were being fanned by fake news promoting the interests of terrorists.','Myanmar\'s de facto leader Aung San Suu Kyi has \"a last chance\" to halt an army offensive that has forced hundreds of thousands of the mainly Muslim Rohingya to flee abroad, the UN head has said.\r\nAntonio Guterres told the BBC unless she acted now, \"the tragedy will be absolutely horrible\".\r\nThe UN has warned the offensive could amount to ethnic cleansing.\r\nMyanmar says it is responding to deadly militant attacks in northern Rakhine state and denies targeting civilians.\r\nThe country\'s army chief, General Min Aung Hlaing, on Sunday accused the Rohingya of trying to build a stronghold in the state.\r\nIn an interview with BBC\'s HARDtalk programme ahead of this week\'s UN General Assembly, Mr Guterres said Aung San Suu Kyi had a last chance to stop the offensive during her address to the nation on Tuesday.\r\n\"If she does not reverse the...','leroberto@gmail.com','2017-09-17 14:17:01','2017-09-17 14:17:01',NULL),(18,'The ice cream','uploads/1/2017-09-17-11-43-29.JPG','teste 2',NULL,'leroberto@gmail.com','2017-09-17 14:43:29','2017-09-17 19:50:02','2017-09-17 19:50:02'),(19,'testete','uploads/1/2017-09-17-02-18-29.JPG','fadassdaaasda dafasa',NULL,'leroberto@gmail.com','2017-09-17 17:18:29','2017-09-17 20:21:22','2017-09-17 20:21:22'),(20,'testete','uploads/1/2017-09-17-02-20-57.JPG','fadassdaaasda dafasa',NULL,'leroberto@gmail.com','2017-09-17 17:20:57','2017-09-17 20:21:19','2017-09-17 20:21:19'),(21,'Teste xxx','uploads/1/2017-09-17-02-24-34.JPG','sdlfjslfjslj sdfljsdlfjsdl sdfjsldj','sdlfjslfjslj sdfljsdlfjsdl sdfjsldj','leroberto@gmail.com','2017-09-17 17:24:34','2017-09-17 20:24:52','2017-09-17 20:24:52');
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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Leandro Roberto','leroberto@gmail.com','$2y$10$hZX5gVUaiNjBIOAzhQDvs.jjEigXftsQHXtE3KFnNvjQvUGfeGvly','bpbMiG3KURrJo1bF1MKLydYwgnJ3sAODu95FJC2Qt71TS1wnK0pRrUwWu7Md','2017-09-16 18:08:28','2017-09-16 18:08:28'),(2,'Lidiane Cristina Roberto','lidicristinaroberto@gmail.com','$2y$10$tkvpENHB0CFMn/xSjhRg../3TUVIhVSlBQ7rGwJlFuspPr2OKGUPO','Lq4eMKOvdHAjIBgQ8JSH2wDY4hQy4inU1nVieAE6QGVUVF9dYxKAD232n73o','2017-09-16 18:35:09','2017-09-16 18:35:09');
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

-- Dump completed on 2017-09-17 16:25:03
