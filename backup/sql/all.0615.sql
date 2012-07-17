-- MySQL dump 10.13  Distrib 5.5.24, for debian-linux-gnu (i686)
--
-- Host: localhost    Database: symfony2
-- ------------------------------------------------------
-- Server version	5.5.24-0ubuntu0.12.04.1

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
-- Table structure for table `address`
--

DROP TABLE IF EXISTS `address`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `address` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `address`
--

LOCK TABLES `address` WRITE;
/*!40000 ALTER TABLE `address` DISABLE KEYS */;
/*!40000 ALTER TABLE `address` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `box`
--

DROP TABLE IF EXISTS `box`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `box` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `box`
--

LOCK TABLES `box` WRITE;
/*!40000 ALTER TABLE `box` DISABLE KEYS */;
/*!40000 ALTER TABLE `box` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `category`
--

DROP TABLE IF EXISTS `category`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `category`
--

LOCK TABLES `category` WRITE;
/*!40000 ALTER TABLE `category` DISABLE KEYS */;
INSERT INTO `category` VALUES (2,'Prodotti principali'),(3,'Prodotti principali'),(4,'Prodotti principali'),(5,'Prodotti principali'),(6,'Prodotti principali'),(7,'Prodotti principali'),(8,'Prodotti principali'),(9,'Prodotti principali'),(10,'Prodotti principali'),(11,'Prodotti principali'),(12,'Prodotti principali'),(13,'Prodotti principali'),(14,'Prodotti principali');
/*!40000 ALTER TABLE `category` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `extra_time`
--

DROP TABLE IF EXISTS `extra_time`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `extra_time` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `hours` decimal(10,2) NOT NULL,
  `description` longtext NOT NULL,
  `is_holiday` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `extra_time`
--

LOCK TABLES `extra_time` WRITE;
/*!40000 ALTER TABLE `extra_time` DISABLE KEYS */;
INSERT INTO `extra_time` VALUES (4,'2011-11-09',5.00,'Attività svolta...',0),(5,'2011-11-22',2.50,'Attività svolta...',0),(6,'2011-11-23',2.50,'Attività svolta...',0),(7,'2011-12-03',6.00,'Attività svolta...',0),(8,'2011-12-08',6.50,'Attività svolta...',0),(9,'2011-12-17',3.50,'Attività svolta...',0),(10,'2011-12-28',1.50,'Attività svolta...',0),(11,'2011-12-29',7.50,'Attività svolta...',0),(12,'2012-01-06',8.00,'Attività svolta...',0),(13,'2012-02-04',8.50,'Attività svolta...',0),(14,'2012-02-05',8.50,'Attività svolta...',0),(15,'2012-03-05',8.00,'Attività svolta...',1),(16,'2012-03-06',8.00,'Attività svolta...',1),(17,'2012-03-10',3.00,'Attività svolta...',0),(18,'2012-03-17',5.00,'Attività svolta...',0),(19,'2012-04-05',8.50,'Attività svolta...',0),(20,'2012-05-05',5.00,'Attività svolta...',0),(21,'2012-07-01',4.50,'Attività svolta...',0),(22,'2012-07-12',4.00,'Attività svolta...',1);
/*!40000 ALTER TABLE `extra_time` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `product`
--

DROP TABLE IF EXISTS `product`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `description` longtext NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `shipping_id` int(11) DEFAULT NULL,
  `rating` decimal(10,2) NOT NULL,
  `rate_number` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_D34A04AD4887F3F8` (`shipping_id`),
  KEY `IDX_D34A04AD12469DE2` (`category_id`),
  CONSTRAINT `FK_D34A04AD12469DE2` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`),
  CONSTRAINT `FK_D34A04AD4887F3F8` FOREIGN KEY (`shipping_id`) REFERENCES `shipping` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `product`
--

LOCK TABLES `product` WRITE;
/*!40000 ALTER TABLE `product` DISABLE KEYS */;
INSERT INTO `product` VALUES (1,'Nome del nuovo prodotto!',19.99,'Lorem ipsum dolor',NULL,NULL,0.24,18),(3,'Pippo Pluto',19.99,'Lorem ipsum dolor',NULL,NULL,0.00,0),(4,'Pippo Pluto',19.99,'Lorem ipsum dolor',NULL,NULL,0.00,0),(5,'Pippo Pluto',19.99,'Lorem ipsum dolor',NULL,NULL,0.00,0),(6,'Pippo',19.99,'Pipponeeeee!!!!',2,NULL,3.00,1),(7,'Pippo',19.99,'Pipponeeeee!!!!',3,NULL,0.00,0),(8,'Pippo',19.99,'Pipponeeeee!!!!',4,NULL,4.00,1),(9,'Pippo',19.99,'Pipponeeeee!!!!',5,NULL,4.00,1),(10,'Pippo',19.99,'Pipponeeeee!!!!',6,NULL,0.00,0),(11,'Pippo',19.99,'Pipponeeeee!!!!',7,NULL,3.00,1),(12,'Pippo',19.99,'Pipponeeeee!!!!',8,NULL,0.00,0),(13,'Pippo',19.99,'Pipponeeeee!!!!',9,NULL,0.00,0),(14,'Pippo',19.99,'Pipponeeeee!!!!',10,NULL,0.00,0),(15,'Pippo',19.99,'Pipponeeeee!!!!',11,NULL,0.00,0),(16,'Pippo',19.99,'Pipponeeeee!!!!',12,NULL,0.00,0),(17,'Pippo',19.99,'Pipponeeeee!!!!',13,NULL,0.00,0),(18,'Pippo',19.99,'Pipponeeeee!!!!',14,NULL,5.00,1);
/*!40000 ALTER TABLE `product` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `products_boxes`
--

DROP TABLE IF EXISTS `products_boxes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `products_boxes` (
  `product_id` int(11) NOT NULL,
  `box_id` int(11) NOT NULL,
  PRIMARY KEY (`product_id`,`box_id`),
  KEY `IDX_2DA84C394584665A` (`product_id`),
  KEY `IDX_2DA84C39D8177B3F` (`box_id`),
  CONSTRAINT `FK_2DA84C394584665A` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_2DA84C39D8177B3F` FOREIGN KEY (`box_id`) REFERENCES `box` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `products_boxes`
--

LOCK TABLES `products_boxes` WRITE;
/*!40000 ALTER TABLE `products_boxes` DISABLE KEYS */;
/*!40000 ALTER TABLE `products_boxes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `shipping`
--

DROP TABLE IF EXISTS `shipping`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `shipping` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `address_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_2D1C1724F5B7AF75` (`address_id`),
  CONSTRAINT `FK_2D1C1724F5B7AF75` FOREIGN KEY (`address_id`) REFERENCES `address` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `shipping`
--

LOCK TABLES `shipping` WRITE;
/*!40000 ALTER TABLE `shipping` DISABLE KEYS */;
/*!40000 ALTER TABLE `shipping` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `task`
--

DROP TABLE IF EXISTS `task`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `task` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `task` varchar(180) NOT NULL,
  `due_date` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `task`
--

LOCK TABLES `task` WRITE;
/*!40000 ALTER TABLE `task` DISABLE KEYS */;
INSERT INTO `task` VALUES (1,'Scrivere un post sul blog','2012-06-10'),(2,'Scrivere un post sul blog 2','2012-06-10'),(3,'Bo!!','2012-06-10'),(4,'Scrivere un post sul blog','2012-06-10'),(5,'Scrivere un post sul blog','2012-06-10');
/*!40000 ALTER TABLE `task` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_usergroup`
--

DROP TABLE IF EXISTS `user_usergroup`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_usergroup` (
  `user_id` int(11) NOT NULL,
  `usergroup_id` int(11) NOT NULL,
  PRIMARY KEY (`user_id`,`usergroup_id`),
  KEY `IDX_4A84F5F3A76ED395` (`user_id`),
  KEY `IDX_4A84F5F3D2112630` (`usergroup_id`),
  CONSTRAINT `FK_4A84F5F3D2112630` FOREIGN KEY (`usergroup_id`) REFERENCES `zoba_user_groups` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_4A84F5F3A76ED395` FOREIGN KEY (`user_id`) REFERENCES `zoba_users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_usergroup`
--

LOCK TABLES `user_usergroup` WRITE;
/*!40000 ALTER TABLE `user_usergroup` DISABLE KEYS */;
/*!40000 ALTER TABLE `user_usergroup` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `zoba_user_groups`
--

DROP TABLE IF EXISTS `zoba_user_groups`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `zoba_user_groups` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `role` varchar(20) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_DF59DA9D57698A6A` (`role`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `zoba_user_groups`
--

LOCK TABLES `zoba_user_groups` WRITE;
/*!40000 ALTER TABLE `zoba_user_groups` DISABLE KEYS */;
/*!40000 ALTER TABLE `zoba_user_groups` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `zoba_users`
--

DROP TABLE IF EXISTS `zoba_users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `zoba_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(25) NOT NULL,
  `salt` varchar(32) NOT NULL,
  `password` varchar(40) NOT NULL,
  `email` varchar(60) NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_114D3B13F85E0677` (`username`),
  UNIQUE KEY `UNIQ_114D3B13E7927C74` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `zoba_users`
--

LOCK TABLES `zoba_users` WRITE;
/*!40000 ALTER TABLE `zoba_users` DISABLE KEYS */;
/*!40000 ALTER TABLE `zoba_users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2012-07-15 18:13:54
