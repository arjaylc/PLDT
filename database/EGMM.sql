CREATE DATABASE  IF NOT EXISTS `egmm` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `egmm`;
-- MySQL dump 10.13  Distrib 5.6.13, for Win32 (x86)
--
-- Host: 127.0.0.1    Database: egmm
-- ------------------------------------------------------
-- Server version	5.6.16

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
-- Table structure for table `cabinet`
--

DROP TABLE IF EXISTS `cabinet`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cabinet` (
  `cabinetNo` int(11) NOT NULL,
  `cabinet_type` varchar(16) NOT NULL,
  `central_officeName` varchar(64) NOT NULL,
  PRIMARY KEY (`cabinetNo`),
  KEY `central_officeName_idx` (`central_officeName`),
  KEY `cabinetType_idx` (`cabinet_type`),
  CONSTRAINT `fk_cabinet_central_officeName` FOREIGN KEY (`central_officeName`) REFERENCES `central_offices` (`central_officeName`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_cabinet_type` FOREIGN KEY (`cabinet_type`) REFERENCES `cabinet_types` (`cabinet_types`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cabinet`
--

LOCK TABLES `cabinet` WRITE;
/*!40000 ALTER TABLE `cabinet` DISABLE KEYS */;
/*!40000 ALTER TABLE `cabinet` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cabinet_types`
--

DROP TABLE IF EXISTS `cabinet_types`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cabinet_types` (
  `cabinet_types` varchar(16) NOT NULL,
  PRIMARY KEY (`cabinet_types`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cabinet_types`
--

LOCK TABLES `cabinet_types` WRITE;
/*!40000 ALTER TABLE `cabinet_types` DISABLE KEYS */;
/*!40000 ALTER TABLE `cabinet_types` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `central_offices`
--

DROP TABLE IF EXISTS `central_offices`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `central_offices` (
  `central_officeName` varchar(64) NOT NULL,
  `location` varchar(128) NOT NULL,
  PRIMARY KEY (`central_officeName`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `central_offices`
--

LOCK TABLES `central_offices` WRITE;
/*!40000 ALTER TABLE `central_offices` DISABLE KEYS */;
INSERT INTO `central_offices` VALUES ('C5','Pasig');
/*!40000 ALTER TABLE `central_offices` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `node`
--

DROP TABLE IF EXISTS `node`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `node` (
  `nodeName` varchar(64) NOT NULL,
  `sinNo` char(11) DEFAULT NULL,
  `electricMeterNo` varchar(32) DEFAULT NULL,
  `node_type` varchar(16) NOT NULL,
  `cabinetNo` int(11) NOT NULL,
  `datetimeAssessed` datetime NOT NULL,
  PRIMARY KEY (`nodeName`),
  KEY `node_type_idx` (`node_type`),
  KEY `cabinetNo_idx` (`cabinetNo`),
  CONSTRAINT `fk_node_type` FOREIGN KEY (`node_type`) REFERENCES `node_types` (`node_type`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_cabinetNo` FOREIGN KEY (`cabinetNo`) REFERENCES `cabinet` (`cabinetNo`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `node`
--

LOCK TABLES `node` WRITE;
/*!40000 ALTER TABLE `node` DISABLE KEYS */;
/*!40000 ALTER TABLE `node` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `node_battery_details`
--

DROP TABLE IF EXISTS `node_battery_details`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `node_battery_details` (
  `batteryInstalledDate` datetime DEFAULT NULL,
  `AHCapacity` char(7) DEFAULT NULL,
  `numBatteries` int(11) DEFAULT NULL,
  `remarks` varchar(64) NOT NULL,
  `nodeName` varchar(64) NOT NULL,
  PRIMARY KEY (`nodeName`),
  CONSTRAINT `fk_nodeName` FOREIGN KEY (`nodeName`) REFERENCES `node` (`nodeName`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `node_battery_details`
--

LOCK TABLES `node_battery_details` WRITE;
/*!40000 ALTER TABLE `node_battery_details` DISABLE KEYS */;
/*!40000 ALTER TABLE `node_battery_details` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `node_pms_ details`
--

DROP TABLE IF EXISTS `node_pms_ details`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `node_pms_ details` (
  `nodeName` varchar(64) NOT NULL,
  `1Q_date` datetime NOT NULL,
  `2Q_date` datetime NOT NULL,
  `3Q_date` datetime NOT NULL,
  `4Q_date` datetime NOT NULL,
  PRIMARY KEY (`nodeName`),
  CONSTRAINT `fk_pms_nodeName` FOREIGN KEY (`nodeName`) REFERENCES `node` (`nodeName`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `node_pms_ details`
--

LOCK TABLES `node_pms_ details` WRITE;
/*!40000 ALTER TABLE `node_pms_ details` DISABLE KEYS */;
/*!40000 ALTER TABLE `node_pms_ details` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `node_types`
--

DROP TABLE IF EXISTS `node_types`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `node_types` (
  `node_type` varchar(16) NOT NULL,
  PRIMARY KEY (`node_type`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `node_types`
--

LOCK TABLES `node_types` WRITE;
/*!40000 ALTER TABLE `node_types` DISABLE KEYS */;
/*!40000 ALTER TABLE `node_types` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `privileges`
--

DROP TABLE IF EXISTS `privileges`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `privileges` (
  `user_type` varchar(16) NOT NULL,
  `canAdd` tinyint(1) NOT NULL,
  `canAddUser` tinyint(1) NOT NULL,
  `canEdit` tinyint(1) NOT NULL,
  `canView` tinyint(1) NOT NULL,
  `canDelete` tinyint(1) NOT NULL,
  `canDeleteUser` tinyint(1) NOT NULL,
  PRIMARY KEY (`user_type`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `privileges`
--

LOCK TABLES `privileges` WRITE;
/*!40000 ALTER TABLE `privileges` DISABLE KEYS */;
INSERT INTO `privileges` VALUES ('admin',1,1,1,1,1,1),('basic',0,0,0,1,0,0);
/*!40000 ALTER TABLE `privileges` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `idNo` int(11) NOT NULL,
  `user_type` varchar(16) NOT NULL,
  `password` char(64) NOT NULL,
  `firstName` varchar(32) NOT NULL,
  `lastName` varchar(32) NOT NULL,
  `position` varchar(32) NOT NULL,
  `central_officeName` varchar(64) NOT NULL,
  PRIMARY KEY (`idNo`),
  KEY `usertype_idx` (`user_type`),
  KEY `central_officeName_idx` (`central_officeName`),
  CONSTRAINT `fk_user_type` FOREIGN KEY (`user_type`) REFERENCES `privileges` (`user_type`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_central_officeName` FOREIGN KEY (`central_officeName`) REFERENCES `central_offices` (`central_officeName`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (145618,'admin','7c4a8d09ca3762af61e59520943dc26494f8941b','Rodrigo','Cal Jr.','Software Developer','C5');
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

-- Dump completed on 2014-05-01 21:34:15
