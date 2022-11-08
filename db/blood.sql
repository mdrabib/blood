-- MariaDB dump 10.19  Distrib 10.4.24-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: blood
-- ------------------------------------------------------
-- Server version	10.4.24-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `blood_stock`
--

DROP TABLE IF EXISTS `blood_stock`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `blood_stock` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `blood_group` varchar(255) NOT NULL,
  `collect_date` date NOT NULL,
  `exp_date` date NOT NULL,
  `status` int(11) DEFAULT 1,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=45 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `blood_stock`
--

LOCK TABLES `blood_stock` WRITE;
/*!40000 ALTER TABLE `blood_stock` DISABLE KEYS */;
INSERT INTO `blood_stock` VALUES (1,'O-','2022-10-19','2022-10-26',1),(2,'O-','2022-10-19','2022-10-26',1),(3,'O+','2022-10-19','2022-10-26',1),(4,'O-','2022-10-19','2022-10-26',1),(5,'O-','2022-10-19','2022-10-26',1),(6,'O-','2022-10-19','2022-10-26',1),(7,'B-','2022-10-20','2022-10-27',1),(8,'A+','2022-10-20','2022-10-27',0),(9,'A-','2022-10-20','2022-10-27',0),(10,'A+','2022-10-20','2022-10-27',0),(11,'A+','2022-10-20','2022-10-27',1),(12,'A+','2022-10-20','2022-10-27',1),(13,'A+','2022-10-19','2022-10-26',1),(14,'A-','2022-10-18','2022-10-25',1),(15,'A-','2022-10-18','2022-10-25',1),(16,'A-','2022-10-19','2022-10-26',1),(17,'A-','2022-10-19','2022-10-26',1),(18,'B-','2022-10-19','2022-10-26',1),(19,'B-','2022-10-19','2022-10-26',1),(20,'B-','2022-10-20','2022-10-27',1),(21,'B-','2022-10-18','2022-10-25',1),(22,'B-','2022-10-19','2022-10-26',1),(23,'B+','2022-10-19','2022-10-26',0),(24,'B+','2022-10-20','2022-10-27',1),(25,'B+','2022-10-20','2022-10-27',1),(26,'B+','2022-10-20','2022-10-27',1),(27,'B+','2022-10-18','2022-10-25',1),(28,'AB+','2022-10-20','2022-10-27',1),(29,'AB-','2022-10-20','2022-10-27',1),(30,'AB-','2022-10-19','2022-10-26',1),(31,'AB+','2022-10-20','2022-10-27',1),(32,'AB+','2022-10-20','2022-10-27',1),(33,'AB+','2022-10-19','2022-10-26',1),(34,'AB-','2022-10-15','2022-10-22',1),(35,'AB-','2022-10-15','2022-10-22',1),(36,'AB+','2022-10-15','2022-10-22',1),(37,'AB-','2022-10-20','2022-10-27',1),(38,'O-','2022-10-20','2022-10-27',1),(39,'O+','2022-10-19','2022-10-26',1),(40,'O+','2022-10-19','2022-10-26',1),(41,'O+','2022-10-19','2022-10-26',1),(42,'O+','2022-10-19','2022-10-26',1),(43,'A+','2022-10-20','2022-10-27',1),(44,'B+','2022-10-20','2022-10-27',1);
/*!40000 ALTER TABLE `blood_stock` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `donor`
--

DROP TABLE IF EXISTS `donor`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `donor` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `area` varchar(255) NOT NULL,
  `blood_group` varchar(255) NOT NULL,
  `next_date` date DEFAULT NULL,
  `last_date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `donor`
--

LOCK TABLES `donor` WRITE;
/*!40000 ALTER TABLE `donor` DISABLE KEYS */;
INSERT INTO `donor` VALUES (5,'Md. Ashab Uddin','01840088188','Chawkbazar, Chattogram','Chawkbazar','A+','1970-01-08','2022-10-20'),(6,'Mahadi Rahaman','01478596253','Andarkilla','Chittagong','B+','2022-10-27','2022-10-20'),(7,'Md Biplob Uddin','01624859685','Hatiya, Noakhali','Hatiya','B+','2022-10-27','2022-10-20'),(8,'Tawhidul Islam Tanim','018564956238','Oxyzen, CTG','Oxyzen','B+','2023-01-18','2022-10-20'),(9,'Md Shahidul Islam','01478596253','Chawkbazar, Chattogram','Chawkbazar','B+','2023-01-18','2022-10-20'),(10,'Asfakur Rahaman','01074245895','Barisal','Barisal','A+','2023-01-18','2022-10-20'),(11,'Mahadi Rahaman','01478596253','Chawkbazar, Chattogram','Chawkbazar','B-','2023-01-18','2022-10-20');
/*!40000 ALTER TABLE `donor` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `patient`
--

DROP TABLE IF EXISTS `patient`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `patient` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `area` varchar(255) NOT NULL,
  `blood_group` varchar(255) NOT NULL,
  `collect_date` date NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `patient`
--

LOCK TABLES `patient` WRITE;
/*!40000 ALTER TABLE `patient` DISABLE KEYS */;
INSERT INTO `patient` VALUES (3,'Md. Ashab Uddin','01478596253','Chawkbazar, Chattogram','Chawkbazar','A+','2022-10-20',1),(5,'Md Rabib Hassan','01735061377','Charfassion,Bhola','Muradpur','B+','2022-10-20',1),(6,'Md. Biblab Uddin','01478596253','Chawkbazar, Chattogram','Chawkbazar','A-','2022-10-20',1),(7,'Mahadi Rahaman','01478596253','Andarkilla','Chunuti','AB+','0000-00-00',0),(8,'Md Harun','01735061378','Chawkbazar, Chattogram','Chunuti','AB+','0000-00-00',0),(9,'Md. Ashab Uddin','01478596253','Chawkbazar, Chattogram','Chawkbazar','A+','2022-10-20',1);
/*!40000 ALTER TABLE `patient` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_auth`
--

DROP TABLE IF EXISTS `tbl_auth`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_auth` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email_address` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `contact_no` varchar(255) NOT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_auth`
--

LOCK TABLES `tbl_auth` WRITE;
/*!40000 ALTER TABLE `tbl_auth` DISABLE KEYS */;
INSERT INTO `tbl_auth` VALUES (2,'Nasim Ahmed','nasim@gmail.com','nasim','01748596234','16652418605666.jpg','10470c3b4b1fed12c3baac014be15fac67c6e815',1,1,'2022-10-05 18:53:27','2022-10-08 17:11:00',NULL),(3,'Md Rabib Hassan','rabib@gmail.com','rabib114','01735061377','16662397199177.jpg','10470c3b4b1fed12c3baac014be15fac67c6e815',1,1,'2022-10-05 19:39:39','2022-10-20 06:21:59',NULL);
/*!40000 ALTER TABLE `tbl_auth` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_role`
--

DROP TABLE IF EXISTS `tbl_role`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_role` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `role_name` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_role`
--

LOCK TABLES `tbl_role` WRITE;
/*!40000 ALTER TABLE `tbl_role` DISABLE KEYS */;
INSERT INTO `tbl_role` VALUES (1,'Super Admin','superadmin'),(2,'Admin','admin');
/*!40000 ALTER TABLE `tbl_role` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-10-20 16:51:16
