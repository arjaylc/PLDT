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
  `cabinetNo` varchar(16) NOT NULL,
  `cabinet_type` varchar(16) NOT NULL,
  PRIMARY KEY (`cabinetNo`),
  KEY `cabinetType_idx` (`cabinet_type`),
  CONSTRAINT `fk_cabinet_type` FOREIGN KEY (`cabinet_type`) REFERENCES `cabinet_types` (`cabinet_types`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cabinet`
--

LOCK TABLES `cabinet` WRITE;
/*!40000 ALTER TABLE `cabinet` DISABLE KEYS */;
INSERT INTO `cabinet` VALUES ('',''),('CBOUTAG005','3M'),('CBOUTAG063','3M'),('MYG-154B','3M'),('MYGUTAG025','3M'),('MYGUTAG033','3M'),('MYGUTAG034','3M'),('MYGUTAG035','3M'),('MYGUTAG036','3M'),('MYGUTAG037','3M'),('PSGUTAG005','3M'),('PSGUTAG006','3M'),('PSGUTAG007','3M'),('PSGUTAG008','3M'),('PSGUTAG009','3M'),('PSGUTAG015','3M'),('PSGUTAG016','3M'),('PSGUTAG017','3M'),('PSGUTAG052','3M'),('PSGUTAG063','3M'),('107-B','HUAWEI'),('DLS-145','HUAWEI'),('DSL-024B','HUAWEI'),('DSL-069','HUAWEI'),('DSL-150B','HUAWEI'),('DSL-152A','HUAWEI'),('DSL-154A','HUAWEI'),('DSL-155','HUAWEI'),('DSL-167','HUAWEI'),('DSL-168','HUAWEI'),('DSL-170','HUAWEI'),('DSL-173','HUAWEI'),('DSL-174B','HUAWEI'),('DSL-182','HUAWEI'),('DSL-190A','HUAWEI'),('DSL-193','HUAWEI'),('DSL-194A','HUAWEI'),('DSL-196','HUAWEI'),('DSL-197A','HUAWEI'),('DSL-198','HUAWEI'),('DSL-199','HUAWEI'),('DSL-200','HUAWEI'),('DSL-209','HUAWEI'),('DSL-210','HUAWEI'),('DSL-211','HUAWEI'),('DSl-216','HUAWEI'),('DSL-217','HUAWEI'),('DSL-220','HUAWEI'),('DSL159A','HUAWEI'),('DSL169A','HUAWEI'),('DSL197B','HUAWEI'),('DSL201A','HUAWEI'),('DSN 067A','HUAWEI'),('DSN 149A','HUAWEI'),('MYG','HUAWEI'),('MYG-013-2','HUAWEI'),('MYG-019B','HUAWEI'),('MYG-020','HUAWEI'),('MYG-026A','HUAWEI'),('MYG-186','HUAWEI'),('MYG-202','HUAWEI'),('MYG021B','HUAWEI'),('MYG029A','HUAWEI'),('MYG031-B','HUAWEI'),('MYG092-A','HUAWEI'),('MYG150-A','HUAWEI'),('MYG168-A','HUAWEI'),('MYG168-B','HUAWEI'),('NPG','HUAWEI'),('NPG 024a','HUAWEI'),('NPG 079a','HUAWEI'),('NPG 130','HUAWEI'),('NPG-022b','HUAWEI'),('CBOUTAG066','I-CAB'),('MYG-0027-A&B','I-CAB'),('MYGUTAG020','I-CAB'),('MYGUTAG021','I-CAB'),('MYGUTAG022','I-CAB'),('MYGUTAG023','I-CAB'),('MYGUTAG024','I-CAB'),('MYGUTAG026','I-CAB'),('MYGUTAG039','I-CAB'),('MYGUTAG044','I-CAB'),('MYGUTAG045','I-CAB'),('MYGUTAG046','I-CAB'),('No Label','I-CAB'),('NPG 127','I-CAB'),('PSGUTAG038','I-CAB'),('PSGUTAG039','I-CAB'),('PSGUTAG040','I-CAB'),('PSGUTAG041','I-CAB'),('PSGUTAG044','I-CAB'),('107-A','SMS'),('CBOUTAG004','SMS'),('DSL','SMS'),('DSL-166','SMS'),('DSL-177','SMS'),('DSL-178A','SMS'),('DSL-208','SMS'),('DSL-218','SMS'),('MYG-016B','SMS'),('MYG-139','SMS'),('MYG-140B','SMS'),('MYG011-2','SMS'),('MYG088B','SMS'),('MYG091-B','SMS'),('MYG092-B','SMS'),('NPGTYCD001','TYCO'),('ORT-165','TYCO'),('ORT-167','TYCO'),('ORT-169','TYCO'),('DSL 024A','X-CAB'),('DSL 163','X-CAB'),('DSL-215','X-CAB'),('DSN 150A','X-CAB'),('DSN 151','X-CAB'),('DSN 159A','X-CAB'),('DSN 162','X-CAB'),('DSN 163/B','X-CAB'),('DSN 172','X-CAB'),('DSN 175','X-CAB'),('DSN 186B','X-CAB'),('DSN 197','X-CAB'),('DSN 198','X-CAB'),('DSN 200','X-CAB'),('DSN 207A','X-CAB'),('DSN 209A','X-CAB'),('DSN 217','X-CAB'),('MYG 011A','X-CAB'),('MYG 012B','X-CAB'),('MYG 013A','X-CAB'),('MYG 014A','X-CAB'),('MYG 015A','X-CAB'),('MYG 016A','X-CAB'),('MYG 016B','X-CAB'),('MYG 018B','X-CAB'),('MYG 020A','X-CAB'),('MYG 021A','X-CAB'),('MYG 022A','X-CAB'),('MYG 023-2','X-CAB'),('MYG 024/1','X-CAB'),('MYG 025A','X-CAB'),('MYG 026','X-CAB'),('MYG 031A','X-CAB'),('MYG 035','X-CAB'),('MYG 036A','X-CAB'),('MYG 038A','X-CAB'),('MYG 039-1','X-CAB'),('MYG 041A','X-CAB'),('MYG 088','X-CAB'),('MYG 089','X-CAB'),('MYG 089B','X-CAB'),('MYG 090A','X-CAB'),('MYG 091A','X-CAB'),('MYG 092B','X-CAB'),('MYG 101-1','X-CAB'),('MYG 102A','X-CAB'),('MYG 103','X-CAB'),('MYG 104A','X-CAB'),('MYG 105A','X-CAB'),('MYG 107A','X-CAB'),('MYG 108','X-CAB'),('MYG 110A','X-CAB'),('MYG 124','X-CAB'),('MYG 130/1','X-CAB'),('MYG 130B','X-CAB'),('MYG 139B','X-CAB'),('MYG 140B','X-CAB'),('MYG 143','X-CAB'),('MYG 143B','X-CAB'),('MYG 147A','X-CAB'),('MYG 147B','X-CAB'),('MYG 148A','X-CAB'),('MYG 150A','X-CAB'),('MYG 150B','X-CAB'),('MYG 156A','X-CAB'),('MYG 157A','X-CAB'),('MYG 158','X-CAB'),('MYG 158-2','X-CAB'),('MYG 160A','X-CAB'),('MYG 168A','X-CAB'),('MYG 168B','X-CAB'),('MYG 173','X-CAB'),('MYG 174','X-CAB'),('MYG 177','X-CAB'),('MYG 178','X-CAB'),('MYG 186A','X-CAB'),('MYG 187','X-CAB'),('MYG 191','X-CAB'),('MYG 192','X-CAB'),('MYG 193B','X-CAB'),('MYG 195A','X-CAB'),('MYG 208A','X-CAB'),('MYG-015B','X-CAB'),('MYG-025B','X-CAB'),('MYG-030','X-CAB'),('MYG-036-2','X-CAB'),('MYG023-B','X-CAB'),('MYG032-A','X-CAB'),('MYG032-B','X-CAB'),('MYG158','X-CAB'),('NPG 022A','X-CAB'),('NPG 022B','X-CAB'),('NPG 023A','X-CAB'),('NPG 023B','X-CAB'),('NPG 027A','X-CAB'),('NPG 027B','X-CAB'),('NPG 030A','X-CAB'),('NPG 032A','X-CAB'),('NPG 072A','X-CAB'),('NPG 072B','X-CAB'),('NPG 079B','X-CAB'),('NPG 104A','X-CAB'),('NPG 105','X-CAB'),('NPG 106A','X-CAB'),('NPG 107A','X-CAB'),('NPG 108A','X-CAB'),('NPG 108B','X-CAB'),('NPG 111A','X-CAB'),('NPG 113A','X-CAB'),('NPG 114A','X-CAB'),('NPG 115B','X-CAB'),('NPG 116 A','X-CAB'),('NPG 118A','X-CAB'),('NPG 119B','X-CAB'),('NPG 120','X-CAB'),('NPG 147','X-CAB'),('NPGALCD004','X-CAB');
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
INSERT INTO `cabinet_types` VALUES (''),('3M'),('HUAWEI'),('I-CAB'),('SMS'),('TYCO'),('X-CAB');
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
  PRIMARY KEY (`central_officeName`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `central_offices`
--

LOCK TABLES `central_offices` WRITE;
/*!40000 ALTER TABLE `central_offices` DISABLE KEYS */;
INSERT INTO `central_offices` VALUES (''),('DSL'),('GNT'),('MYG'),('NPG'),('PSG');
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
  `node_type` varchar(16) DEFAULT NULL,
  `cabinetNo` varchar(16) DEFAULT NULL,
  `central_officeName` varchar(64) DEFAULT NULL,
  `nodeLocation` varchar(128) DEFAULT NULL,
  PRIMARY KEY (`nodeName`),
  KEY `node_type_idx` (`node_type`),
  KEY `cabinetNo_idx` (`cabinetNo`),
  KEY `fk_node_central_officeName_idx` (`central_officeName`),
  CONSTRAINT `fk_node_type` FOREIGN KEY (`node_type`) REFERENCES `node_types` (`node_type`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_cabinetNo` FOREIGN KEY (`cabinetNo`) REFERENCES `cabinet` (`cabinetNo`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_node_central_officeName` FOREIGN KEY (`central_officeName`) REFERENCES `central_offices` (`central_officeName`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `node`
--

LOCK TABLES `node` WRITE;
/*!40000 ALTER TABLE `node` DISABLE KEYS */;
INSERT INTO `node` VALUES ('','','','MSAN','DSL169A','DSL','SAN FRANCISCO ST. COR DLISAY'),('CBOUTAG004','','','UTAG','CBOUTAG004','MYG','ANNAPOLIS STREET CUBAO, NFF1, CS'),('CBOUTAG005','','','UTAG','CBOUTAG005','MYG','LAKANDULA STREET CUBAO, NFF1, CS'),('CBOUTAG063','','','UTAG','CBOUTAG063','MYG','TINDALO ST. PROJ 3 QC, NFF1, CS'),('CBOUTAG066','','','UTAG','CBOUTAG066','MYG','AGUHO COR. ALMON BGY CLARO PROJ 3, NFF1, CS'),('DSLHUAG007','724366601-7','33 STN 11710','MSAN','DSL-193','DSL','DAANG BAKAL ST. COR. BONI AVENUE, MANDALUYONG CITY'),('DSLHUAG009','','','MSAN','DSL-024B','DSL','DSL-024B, INSIDE TENEMENT F. MANALO ST. MANILA'),('DSLHUAG010','','','MSAN','DSL-150B','DSL','DSL-150B, P. LOPEZ ST. ALONG T. BERNARDO, MANDALUYONG CITY'),('DSLHUAG011','','','MSAN','DSL-167','DSL','DSL-168, SAMPAGUITA ST. INSIDE HULO BLISS, MANDALUYONG CITY'),('DSLHUAG012','725396601-2','33 SQN 10918','MSAN','DSL-168','DSL','DSL-168, SAMPAGUITA ST. ALONG  HULO, MANDALUYONG CITY'),('DSLHUAG014','727773701-3','33 SWN  36897','MSAN','DSL-170','DSL','DSL-170, PRIVATE ROAD ALONG BLOOM FRT 725 MANDALUYONG CITY'),('DSLHUAG015','724365901-3','33 WZN 74430','MSAN','DSL-173','DSL','DSL-173_P. PRADA COR P. CRUZ, MANDALUYONG CITY'),('DSLHUAG016','724365701-6','33 WZN 74419','MSAN','DSL-174B','DSL','DSL-174B, JUPITER ST. FRT 106 DREAMLAND SUBD., MANDALUYONG CITY'),('DSLHUAG017','725400401-5','33 TZN 06384','MSAN','DSL-182','DSL','CABINET DSL-182, ALCARAZ ST. COR J.P RIZAL ST. MANDALUYONG CITY'),('DSLHUAG019','727796301-4','33 WZN 16982','MSAN','DSL-190A','DSL','SAN JOAQUIN MEDIUM RISE, MANDALUYONG CITY'),('DSLHUAG020','729657801-2','33 SZN 79827','MSAN','DSL-069','DSL','CABINET DSL-069, CLAIRMONT TOWNHOMES ACACIA LANE,MANDALUYONG CITY'),('DSLHUAG022','725396201-8','33 WZN 73312','MSAN','DSL-166','DSL','DSL-166, NEW PANADEROS CORNER PAG-ASA NEAR COR KALINTONG FRONT MARKET PLACE, MANDALUYONG CITY'),('DSLHUAG024','727774401-7','33 MZN  84204','MSAN','DSL-178A','DSL','DSL-178A, MANDALUYONG EXECUTIVE MANSION_INSIDE  CITY LAND.MANDALUYONG CITY'),('DSLHUAG025','725400301-2','33 LZN 29523','MSAN','DSL-177','DSL','CABINET DSL-177, MANDALUYONG EXECUTIVE MANSION_INSIDE  CITY LAND. MANDALUYONG CITY'),('DSLHUAG026','724360201-7','33 WZN 36547','MSAN','DSL-196','DSL','DSL-196_I. LOPEZ FRT 37.MANDALUYONG CITY'),('DSLHUAG027','','','MSAN','DSL-197A','DSL','DSL-197, P. CRUZ ST. FRT 154, MANDALUYONG CITY'),('DSLHUAG028','','','MSAN','DSL-198','DSL','B. FRANCISCO ST. ALONG F. ORTIGAS, MANDALUYONG CITY'),('DSLHUAG029','','','MSAN','DSL-209','DSL','DSL-209_BAUTISTA ST. ALONG MARTINES ST. FRT MHD, MANILA'),('DSLHUAG030','724348101-8','33 WZN 36362','MSAN','DSL-194A','DSL','CABINET DSL-194A, SAN RAFAEL ST. FRT # 160, MANDALUYONG CITY'),('DSLHUAG031','724368701-9','33 RZN 91678','MSAN','DSL-199','DSL','F. ORTIGAS FRT 610, MANDALUYONG CITY'),('DSLHUAG032','','','MSAN','DSL-210','DSL','DSL-210_BAUTISTA ST. NEAR BASKETBALL COURT, MANILA'),('DSLHUAG033','','','MSAN','DSL-211','DSL','F. MANALO ST. FRT MOBIL TERM, MANILADSL-211-F. MANALO ST. FRT MOBIL TERM, MANILA'),('DSLHUAG034','','','MSAN','DSL','DSL','DAGUISONAN ST. ALONG POSADAS II, MANILA'),('DSLHUAG035','','','MSAN','DSL-215','DSL','DSL-215, SALTOG COMPOUND ALONG BANAHAW ST., MANILA'),('DSLHUAG036','','','MSAN','DSl-216','DSL','DSL-216, ROAD 3 ST. ALONG F. MANALO ST., MANILA'),('DSLHUAG037','','','MSAN','DSL-217','DSL','DSL-217, FRONTING MARCELO STEEL, POSADAS ST.COR POSADAS EXT., STA.ANA,  MANILA'),('DSLHUAG038','','','MSAN','DSL-218','DSL','DSL-218, ROAD 7 ALONG ROAD 5, MANILA'),('DSLHUAG043','','','MSAN','DSL-220','DSL','DSL-220, POSADAS ST. COR. 6TH ST., MANILA'),('DSLHUAG044','727755901-7','33 UZN 05205','MSAN','DLS-145','DSL','DLS-145, ALONG SHAW BLVD FRONT HSE. # 315, BRGY. HAGDAN BATO LIBIS, MANDALUYONG CITY'),('DSLHUAG045','725388401-8','33 RZN 33343','MSAN','DSL-152A','DSL','ALONG BONIFACIO CORENER R. VICENCIO STS. BRGY. HAGDAN BATO LIBIS, MANDALUYONG CITY'),('DSLHUAG046','727771001-1','33 MZN 90603','MSAN','DSL-154A','DSL','ALONG GONZAGA ST. FRONT HSE # 572, BRGY. HAGDAN BATO ITAAS, MANDALUYONG CITY'),('DSLHUAG047','725389701-3','33 PZN 00023','MSAN','DSL-155','DSL','ALONG P. GOMEZ CORNER I. LOPEZ STR, BRGY POBLACION, MANDALUYONG CITY'),('DSLHUAG048','','','MSAN','DSL-200','DSL','ALONG A.T. REYES CORNER AGLIPAY STS. BRGY. POBLACION, MANDALUYONG'),('DSLHUAG049','','','MSAN','DSL-208','DSL','DSL-208, ALONG F. ROXAS ST., BRGY. PAG-ASA, MANDALUYONG CITY'),('DSLHUAG050','','','MSAN','DSL159A','DSL','DSL159A, CLAIRMONT TOWNHOMES ACACIA LANE, MANDALUYONG CITY'),('DSLHUAG051','727773001-9','33 ESN 73375','MSAN','DSL201A','DSL','DSL201A,  AT. REYES CORNER A. LUNA ST., MANDALUYONG CITY'),('DSLHUAG052','724361401-8','33 WZN 36513','MSAN','DSL197B','DSL','DSL197B, NEW PANADEROS COR PAG-ASA, MANDALUYONG CITY'),('DSLHUAG053','725395801-4','33 LZN 47948','MSAN','DSL 163','DSL','CABINET DSL 163, HAIG ST. COR. SHAW BLVD., BRGY. DAANG BAKAL, MANDALUYONG CITY'),('GNTHUAG002','','','MSAN','ORT-165','GNT','ORT-165, CALYPSO AVE. COR., POSEIDON, ORTIGAS, PASIG'),('GNTHUAG003','','','MSAN','ORT-169','GNT','ORT-169 CALLE INDUSTRIA COR. OBRERO, ORTIGAS, PASIG'),('GNTHUAG004','','','MSAN','ORT-167','GNT','ORT-167 FRT. NUVO CITY, E. RODRIGUEZ AVE., ORTIGAS, PASIG'),('GNTUTAG044','','','UTAG','No Label','GNT','E RODRIGUEZ AVE LIBIS QC, NFF1, CS'),('MMYG_DLC1938601 & MYGECIP059','','','ECI','MYG 193B','','DLC 193/2 ANNAPOLIS WILSHIRE PLAZA, ANNAPOLIS ST.,  GREENHILLS'),('MMYG_STPAUL8501','','','','MYG 018B','','DLC-018-B, 4TH STREET NEAR GILMORE AVENUE QUEZON CITY'),('MSAN/ECI','','','ECI','MYG 124','','INSIDE STATE CENTER'),('MYGECIP001','','','ECI','DSL 024A','','PUNTA TENAMENT, PUNTA STA. ANA, MANILA'),('MYGECIP003','','','ECI','MYG 016B','','N. DOMINGO, SAN JUAN BRIDGE, BESIDE SM  STA. MESA CENTERPOINT'),('MYGECIP004','','','ECI','MYG 025A','','MANGA ROAD CORNER AURORA BLVD. QUEZON CITY'),('MYGECIP005','','','ECI','MYG 088','','P. GUEVARRA CORNER O. ARELLANO ADDITION HILLS MANDALUYONG CITY'),('MYGECIP006','','','ECI','MYG 158','','ALONG HERMADY ST. BESIDE WOODSIDE HOMES KRISTONG HARI, QUEZON CITY'),('MYGECIP007','','','ECI','MYG 021A','','J. RUIZ CON SAN JUANER AURORA BLVD. BRGY SALAPAN'),('MYGECIP008 & \'R01.10@MYG089-1.MYGM01','500841201-3','33 MZN 50603','ECI & RAM','MYG 089','','ARAULLO COR. P. BURGOS ST., MANDALUYONG'),('MYGECIP009','','','ECI','MYG 011A','','N. DOMINGO BESIDE 187C SAN JUAN METRO MANILA'),('MYGECIP010','','','ECI','MYG 147B','','ARAYAT ST., MANDALUYONG'),('MYGECIP011','','','ECI','MYG 187','','ANNAPOLIS ST., MANDALUYONG'),('MYGECIP012','','','ECI','MYG 191','','ANNAPOLIS ST., MANDALUYONG'),('MYGECIP013','502090801-8','23 ASN 68568','ECI','MYG 016A','','ARANETA AVE. BESIDE FOOT BRIDGE GOING TO SM CENTERPOINT'),('MYGECIP014','502177201-5','33 OZN 48977','ECI','MYG 139B','','(M. SALVADOR) J. BASA, INSIDE BRGY. HALL PREMISES ( BRGY. PEDRO CRUZ)'),('MYGECIP015','505020801-3','33 BZN 50636','ECI','MYG 156A','','ALONG E. RODRIGUEZ NEAR COR. J. JIMENEZ BESIDE UCPB CUBAO QUEZON CITY'),('MYGECIP016','','','ECI','MYG 020A','','ALONG AURORA BLVD. OPPOSITE LOURDES DRIVE'),('MYGECIP017','','','ECI','MYG 023-2','','F. ROMAN BRGY. SALAPAN SAN JUAN'),('MYGECIP018','497448401-7','33 SPN 99147','ECI','MYG 090A','','GOMEZVILLE COR. GUERRERO ST. MYG>'),('MYGECIP019','505231801-6','33 ESN 89968','ECI','MYG 041A','','BRGY. KRISTONG HARI ALONG HEMADY ST. COR. E. RODRIGUEZ AVE.'),('MYGECIP020','','','ECI','MYG 143B','','H. LOZADA ST. SAN JUAN'),('MYGECIP021','','','ECI','MYG 130B','','STAR MALL  SHAW BLVD. CORNER EDSA AVE. MANDALUYONG'),('MYGECIP022','500845901-4','33 CZN 36547','ECI','MYG 091A','','A. MABINI COR. ARAULLO ST., MANDALUYONG'),('MYGECIP023','','','NEW YORK ST. QUE','MYG 150A','',''),('MYGECIP024','505019701-4','33 JSN 64381','ECI','MYG 150B','','NEW YORK ST. QUEZON CITY'),('MYGECIP025','502665401-1','33 GZN 89384','ECI','MYG 022A','','J. RUIZ ST. SAN JUAN'),('MYGECIP026','','','LAGMAY ST. QUEZO','MYG 140B','',''),('MYGECIP027','505048601-3','33 LZN 58344','ECI','MYG 160A','','BALETE COR. E. RODRIGUEZ ST., QC'),('MYGECIP028','505890001-8','33 STN 56102','ECI','MYG 031A','','SGT. CATOLOS ST.,  QUEZON CITY'),('MYGECIP029','','','ECI','MYG 178','','ORTIGAS AVE. SAN JUAN'),('MYGECIP030','','','ECI','MYG 177','','ORTIGAS AVE. SAN JUAN'),('MYGECIP031','','','ECI','MYG 174','','ORTIGAS AVE. SAN JUAN'),('MYGECIP032','','','ECI','MYG 173','','ORTIGAS AVE. SAN JUAN'),('MYGECIP033','','','ECI','MYG 013A','','N. DOMINGO ST. SAN JUAN MUNICIPAL HALL QUEZON CITY'),('MYGECIP034','','','ECI','MYG 012B','','ATTY A. MENDOZA ST. SAN JUAN'),('MYGECIP035','','','ECI','MYG 103','','ORTIGAS AVE. SAN JUAN'),('MYGECIP036','','','ECI','MYG 168B','','P. GUEVARRA ST. SAN JUAN'),('MYGECIP037','','','ECI','MYG 147A','','ARAYAT ST. QUEZON CITY'),('MYGECIP038','504532401-9','33 RZN 92980','ECI','MYG 110A','','ANNAPOLIS ST. SAN JUAN'),('MYGECIP039','502118301-9','33 GZN 10117','ECI','MYG 014A','','SAN SOTERO ST. SAN JUAN'),('MYGECIP040','502058301-5','33 LZN 75177','ECI','MYG 015A','','SAN MANUEL ST. SAN JUAN'),('MYGECIP041','','','CHICAGO ST. QUEZ','MYG 036A','',''),('MYGECIP043','','','ECI','DSN 149A','','F. ORTIGAS FRT 477'),('MYGECIP044','','','ECI','DSN 159A','','PAG-ASA/A LUNA'),('MYGECIP045','731024501-8','33 CZN 69458','ECI','DSN 162','','MEDIUM RISE E. MAGALONA'),('MYGECIP046','733774501-8','0','ECI','DSN 172','','BLUMENTRITT FRT 165'),('MYGECIP047','','','ECI','DSN 200','','F. ORTIGAS FRT 610'),('MYGECIP048','','','ECI','DSN 209A','','F. ROXAS ST.'),('MYGECIP049','','','ECI','DSN 207A','','PANADEROS, FRT. PUREGOLD'),('MYGECIP050','727762401-3','33 WZN 21335','ECI','DSN 151','','P. LOPEZ/DE LEON'),('MYGECIP051','','','ECI','DSN 150A','','P. LOPEZ/ T. BERNARDO'),('MYGECIP052','725400201-8','33 PZN  77109','ECI','DSN 175','','AGLIPAY FRT. DIASTAR'),('MYGECIP053','727789001-2','33 GZN 12459','ECI','DSN 186B','','ABELLAS COMPOUND'),('MYGECIP054','','','ECI','DSN 198','','B. FRANCISCO COR. F. ORT.'),('MYGECIP055','','','ECI','MYG 192','','ANNAPOLIS ST., MANDALUYONG'),('MYGECIP056','','','ECI','MYG 089B','','ARAULLO COR. P.BURGOS ST., MANDALUYONG'),('MYGECIP057','','','ECI','MYG 104A','','EISENHOWER ST., SAN JUAN'),('MYGECIP058','','','ECI','MYG 105A','','EISENHOWER ST., SAN JUAN'),('MYGECIP060 & \'R01.08@MYG107A.MYGM03','504618401-2','33 UZN 11153','ECI & RAM','MYG 107A','','EISENHOWER ST., SAN JUAN'),('MYGECIP061','','','ECI','MYG 208A','','EISENHOWER ST., SAN JUAN'),('MYGECIP062','','','ECI','MYG 195A','','ANNAPOLIS ST., SAN JUAN'),('MYGHUAG010','505390501-2','103BA270348','MSAN','MYG150-A','MYG','MYG150-A-VANCOUVER ST. COR LANTANA ST.QUEZON CITY'),('MYGHUAG011','505972501-9','33 SWN 03865','MSAN','MYG-030','MYG','MYG-030, A-MONTE DE PIEDAD COR. F. MANALO'),('MYGHUAG012','501449301-3','33 GZN 90904','MSAN','MYG088B','MYG','MYG088B, GUEVARRA COR. ARGONE MANDALUYONG CITY'),('MYGHUAG013','505231701-3','33 MZN 66241','MSAN','MYG158','MYG','MYG158, HEMADY ST. ALONG WOOD SIDE HOMES GATE'),('MYGHUAG015','505325601-8','33 SWN 58292','MSAN','MYG-026A','MYG','MYG-026A, AURORA BLVD. COR. BOSTON ST. QUEZON CITY'),('MYGHUAG017','','','MSAN','MYG031-B','MYG','MYG031-B-NEW YORK ST., COR.SGT. CATALOS QUEZON CITY'),('MYGHUAG018','504943501-9','33 STN 94732','MSAN','MYG-013-2','MYG','MYG-013-2, OUTSIDE SAN JUAN MUNICIPAL HALL'),('MYGHUAG019','','','MSAN','MYG011-2','MYG','MYG011-2, N. DOMINGO ST. COR. P. TAVERA, SAN JUAN CITY'),('MYGHUAG021','','','MSAN','MYG','MYG','N. DOMINGO COR. SAN PERFECTO, SAN JUAN CITY'),('MYGHUAG023','','','MSAN','MYG-020','MYG','MYG-020, AURORA BLVD. FRT # 171, SAN JUAN CITY'),('MYGHUAG024','502655501-8','33 UZN 10894','MSAN','MYG021B','MYG','MYG021B, AURORA BLVD. COR.ARLE BLDG., SAN JUAN CITY'),('MYGHUAG027','','','MSAN','MYG032-A','MYG','MYG032-A, NEW YORK ST. COR. DENVER ST. , QUEZON CITY'),('MYGHUAG028','505872801-3','33 MZN 08653','MSAN','MYG-036-2','MYG','MYG-036-2, CHICAGO ST. COR. A EGEA ST.,QUEZON CITY'),('MYGHUAG031','','','MSAN','MYG092-A','MYG','MYG092-A, CALDERON ST. COR LEE ST. MANDALUYONG CITY'),('MYGHUAG032','','','MSAN','107-A','MYG','107-A_EISENHOWER ST. COR. STRIP TOWER GREENHILLS, SAN JUAN CITY'),('MYGHUAG033','','','MSAN','MYG-140B','MYG','MYG-140B, F. ROMAN ST.COR R. LAGMAN ST. SAN JUAN CITY'),('MYGHUAG035','499910201-7','33 OZN 08697','MSAN','MYG-186','MYG','MYG-186, WACK WACK  ROAD FRT. WACK-WACK APARTMENT, MANDALUYONG CITY'),('MYGHUAG036','','','MSAN','MYG-202','MYG','MYG-202_WESTWOOD BUILDING GREENHILLS, SAN JUAN CITY'),('MYGHUAG037','499910101-4','33 UZN 11174','MSAN','MYG023-B','MYG','MYG023-B, ALONG F. ROMAN NEAR CORNER AURORA  BLVD., BRGY. SALAPAN, SAN JUAN CITY'),('MYGHUAG040','505417901-8','33 MZN 42750','MSAN','MYG-025B','MYG','MYG-025B, ALONG AURORA BLVD. NEAR MANGGA RD, BRGY. KAUNLARAN,  QUEZON CITY'),('MYGHUAG043','','','MSAN','MYG-015B','MYG','MYG-015B, ALONG SAN MANUEL ST. NEAR COR. N. DOMINGO ST., BRGY. RIVERA, SAN JUAN CITY'),('MYGHUAG045','','','MSAN','MYG-016B','MYG','MYG-016B, N.DOMINGO ST. CORNER ARANETA BRIDGE, SAN JUAN CITY'),('MYGHUAG046','','','MSAN','MYG','MYG','N. DOMINGO COR. SAN PERFECTO ST., SAN JUAN CITY'),('MYGHUAG048','','','MSAN','MYG032-B','MYG','MYG032-B, NEW YORK ST. COR. DENVER ST., QUEZON CITY'),('MYGHUAG049','','','MSAN','107-B','MYG','107-B_EISENHOWER ST. COR. STRIP TOWER GREENHILLS, SAN JUAN CITY'),('MYGHUAG050','','','MSAN','MYG-139','MYG','MYG-139, J. BASA ST., SAN JUAN CITY'),('MYGHUAG051','505134001-6','33 BZN 38380','MSAN','MYG-154B','MYG','MYG-154B (E-CAB)-NEW YORK ST. COR. F. MANALO ST. QUEZON CITY'),('MYGHUAG057','','','MSAN','MYG168-A','MYG','MYG168-A, P. GUEVARRA ST. COR O. ARELLANO ST. MANDALUYONG CITY'),('MYGHUAG058','','','MSAN','MYG168-B','MYG','MYG168-B, ARGONNE ST. COR P. GUEVARRA ST. SAN JUAN CITY'),('MYGHUAG059','','','MSAN','MYG092-B','MYG','MYG092-B, CALDERON ST. COR LEE ST. MANDALUYONG CITY'),('MYGHUAG060','500846001-8','33 SWN 50163','MSAN','MYG091-B','MYG','MYG091-B, ARAULLO ST. COR MABINI ST. MANDALUYONG CITY'),('MYGHUAG061','','','MSAN','MYG','MYG','ARAULLO ST. COR. P. BURGOS ST. MANDALUYONG CITY'),('MYGHUAG062','','','MSAN','MYG-019B','MYG','MYG-019B, DONA JUANA RODRIGUEZ ST. COR. 3RD ST., QUEZON CITY'),('MYGHUAG063','505970001-4','33 SZN 11878','MSAN','MYG029A','MYG','MYG029A_E. RODRIGUEZ AVE. COR MONTE DE PIEDAD ST. QUEZON CITY'),('MYGHUAG065','','','MSAN','MYG','MYG','#409 SHAW BLVD., MANDALUYONG CITY'),('MYGUTAG018','505432701-1','33 TZN 74546','UTAG','MYG-0027-A&B','MYG','ALONG DRIOD ST KAUNLARAN QUEZON CITY, NFF1, CS'),('MYGUTAG020','505182601-5','33 SUN 27664','UTAG','MYGUTAG020','MYG','GILMORE ST COR 4TH ST MARIANA QUEZON, NFF1, CS'),('MYGUTAG021','','','UTAG','MYGUTAG021','MYG','ALONG BALETE DRIVE COR 3RD ST MARIANA, NFF1, CS'),('MYGUTAG022','','','UTAG','MYGUTAG022','MYG','ALONG HEMADY ST COR 6TH ST MARIANA Q.C. , NFF1, CS'),('MYGUTAG023','','','UTAG','MYGUTAG023','MYG','ALONG BALETE DRIVE  MARIANA, NFF1, CS'),('MYGUTAG024','505228701-8','33 SUN 74861','UTAG','MYGUTAG024','MYG','ALONG HEMADY ST MARIANA, NFF1, CS'),('MYGUTAG025','','','UTAG','MYGUTAG025','MYG','ALONG BALETE DRIVE COR 10TH ST MARIANA, NFF1, CS'),('MYGUTAG026','','','UTAG','MYGUTAG026','MYG','E GARCIA ST PINAGKAISAHAN, NFF1, CS'),('MYGUTAG029','','','','','','STATE FINANCING CENTER'),('MYGUTAG033','501170901-9','33 BZN 33742','UTAG','MYGUTAG033','MYG','ROOSEVELT COR WASHNGTONST WEST GREENHILL, NFF1, CS'),('MYGUTAG034','','','UTAG','MYGUTAG034','MYG','ROOSEVELT COR XAVIER STS WEST GREENHILLS, NFF1, CS'),('MYGUTAG035','','','UTAG','MYGUTAG035','MYG','ROOSEVELT COR XAVIER STS WEST GREENHILLS, NFF1, CS'),('MYGUTAG036','501166301-1','33 SPN 14020','UTAG','MYGUTAG036','MYG','ROOSEVELT COR WILSON STS WEST GREENHILLS, NFF1, CS'),('MYGUTAG037','','','UTAG','MYGUTAG037','MYG','ROOSEVELT COR WILSON STS WEST GREENHILLS, NFF1, CS'),('MYGUTAG039','501170101-3','33 GZN 73285','UTAG','MYGUTAG039','MYG','WILSON ST COR WASHINGTON ST GREENHILLS, NFF1, CS'),('MYGUTAG044','','','UTAG','MYGUTAG044','MYG','RUSTIA ST COR E ROD ST IMMA CONCEPCION, NFF1, CS'),('MYGUTAG045','','','UTAG','MYGUTAG045','MYG','HILL CREST ST E. ROD IMMA CONCEPCION, NFF1, CS'),('MYGUTAG046','505973401-1','34 DSN 81165','UTAG','MYGUTAG046','MYG','SGT CATOLOS COR PINATUBO ST IMA CONCEP, NFF1, CS'),('MYGUTAG060','','','','','','DANSALAN GARDEN'),('MYGUTAG078','','','','','','TIVOLI GARDEN'),('MYGUTAG105','','','','','','MADISON SQUARE'),('PSGECIP002','478581201-8','33 DSN 8687','ECI','NPG 120','','ALONG BERNABE ST., BGY. CALZADA, TIPAS, TAGUIG'),('PSGECIP004','475198301-8','33 JSN 27245','ECI','NPG 115B','','F. CRUZ ST., PATEROS, RIZAL'),('PSGECIP005','','','ECI','NPG 023A','','COLLEAGE ST., PASIG'),('PSGECIP006','','','ECI','NPG 113A','','M. LOZADA ST. PATEROS'),('PSGECIP007 & R01.08@NPG114A.NPGM01','475292501-5','33 JSN 58030','ECI & RAM','NPG 114A','','SALONGA ST., PATEROS'),('PSGECIP008 & R01.07@NPG024A.NPGM01','','','ECI & RAM','NPG 024A','','ROSAL ST., PASIG'),('PSGECIP009','475705601-5','33 SUN 87759','ECI','NPG 079B','','F. C. LORENZO ST., PASIG'),('PSGECIP010','','','ECI','NPG 023B','','A. SANTOS ST., PASIG'),('PSGECIP011','','','ECI','NPG 072B','','BUNYE ST., PASIG'),('PSGECIP012','475728001-9','33 SUN 46696','ECI','NPG 022B','','G. CONCHING ST., PASIG'),('PSGECIP013','','','ECI','NPG 118A','','VISITACION ST., PASIG'),('PSGECIP014','','','ECI','NPG 108B','','N. CRUZ ST., PASIG'),('PSGECIP015','480720302-5','33 SYN 95961','ECI','NPG 108A','','N. CRUZ ST., PASIG'),('PSGECIP016','','','ECI','NPG 030A','','GEN. NATIVIDAD ST., TAGUIG'),('PSGECIP017','480780903-9','33 TZN 01929','ECI','NPG 107A','','FLAVIANA ST., PASIG'),('PSGECIP018','','','ECI','NPG 027B','','GEN. NATIVIDAD ST., TAGUIG'),('PSGECIP019','','','ECI','NPG 072A','','E. MENDOZA ST., PASIG'),('PSGECIP020 & \'R01.06@NPG022A.NPGM01','475685801-9','33 SLN 19547','ECI & RAM','NPG 022A','','G. CONCHING ST., PASIG'),('PSGHUAG006','','','MSAN','','NPG','SUMMERFIELD SUBD., TAMARIND ROAD COR MAHOGANY DRIVE, PASIG CITY'),('PSGHUAG013','','','MSAN','NPGTYCD001','NPG','NPGTYCD001 ALONG BRISTLECONE ST., PH 8 AREA 9, GREENWOODS EXECUTIVE VILLAGE, PASIG CITY'),('PSGHUAG014','','','MSAN','NPGTYCD001','NPG','NPGTYCD001 ALONG BRISTLECONE ST., PH 8 AREA 9, GREENWOODS EXECUTIVE VILLAGE, PASIG CITY'),('PSGHUAG016','','','MSAN','NPGALCD004','NPG','NPGALCD004/LEXINGTON GARDEN VILLAGE, ROAD LOT, BRGY. SAN JOAQUIN, PASIG CITY'),('PSGHUAG017','','','MSAN','','NPG','ALONG C11-A ROAD NR. SANDOVAL AVE. CENTENNIAL 2 SUBDVN. BRGY. NAGPAYONG PASIG CITY'),('PSGHUAG018-IPM','','','MSAN','NPGALCD004','NPG','NPGALCD004 / LEXINGTON GARDEN VILLAGE, BRGY. SAN JOAQUIN, PASIG CITY'),('PSGHUAG019-IPM','','','MSAN','','NPG','ALONG C11-A ROAD NR. SANDOVAL AVE. CENTENNIAL 2 SUBDVN. BRGY. NAGPAYONG PASIG CITY'),('PSGHUAG024-IPM','','','MSAN','NPG-022b','NPG','NPG-022B ALONG CONCHING ST., BRGY. BUTING PASIG CITY'),('PSGHUAG027','','','MSAN','NPG 130','NPG','NPG 130(CAI3M)/CHRISTINE ROYALE SUBD. BRGY. SAN ANDRES CAINTA RIZAL'),('PSGHUAG030','','','MSAN','NPG','NPG','LANZONES COR. SANDOVAL AVE. VILLA CUANA II BRGY. NAGPAYONG PASIG CITY (SMS CABINET-NEW)'),('PSGHUAG031','','','MSAN','NPG','NPG','SOMERSET PLACE,SUBDIVISION, MNGGAHAN, PASIG'),('PSGHUAG032-IPM','','','MSAN','NPG 079a','NPG','NPG 079A, FLORES ST, PATEROS'),('PSGHUAG037','','','MSAN','NPG 024a','NPG','NPG 024A, ROSAL ST., PATEROS'),('PSGHUAG038','','','MSAN','','NPG','MERCEDES EXECUTIVE VILLAGE, SAN ANDRES, CAINTA, RIZAL'),('PSGHUAG039','','','MSAN','NPG','NPG','CAMELLA CERRITOS EAST(NEW AREA), ALONG MERCEDEZ AVE., PASIG CITY'),('PSGUTAG005','','','UTAG','PSGUTAG005','PSG','ANDRES ST NR SENIOR CITIZEN CMPD ROSARIO, NFF1, CS'),('PSGUTAG006','','','UTAG','PSGUTAG006','PSG','F ANDRES ST CPD ROSARIO PASIG CITY, NFF1, CS'),('PSGUTAG007','','','UTAG','PSGUTAG007','PSG','INFRONT GARDEN ROYAL APARTMENT, NFF1, CS'),('PSGUTAG008','479638101-3','33 TZN 11043','UTAG','PSGUTAG008','PSG','VICTORINO COR VALDERAMA ST BAMBANG PASIG, NFF1, CS'),('PSGUTAG009','479918601-8','33 HZN 85815','UTAG','PSGUTAG009','PSG','FRT VILLA REGINA BAMBANG PASIG CITY, NFF1, CS'),('PSGUTAG015','481755002-2','33 JSN 52291','UTAG','PSGUTAG015','PSG','BERNAL ST  BGY  ROSARIO PASIG CITY, NFF1, CS'),('PSGUTAG016','480912602-2','33 TZN 01937','UTAG','PSGUTAG016','PSG','FRRER CMPD COR UVELASCO BRGY PNAGBUHATAN, NFF1, CS'),('PSGUTAG017','','','UTAG','PSGUTAG017','PSG','FERER ST. PINAGBUHATAN'),('PSGUTAG038','','','UTAG','PSGUTAG038','PSG','WEST BANK ROAD (BESIDE LAKAS BISIG OFFICE BLDG), BRGY. SAN ANDRES, CAINTA, RIZAL'),('PSGUTAG039','','','UTAG','PSGUTAG039','PSG','BGY. STA. ANA TAYTAY RIZAL, NFF1, CS'),('PSGUTAG040','','','UTAG','PSGUTAG040','PSG','WEST BANK ROAD (INFRONT OF COVERED COURT), BGY. SAN ANDRES, CAINTA, RIZAL'),('PSGUTAG041','','','UTAG','PSGUTAG041','PSG','WEST BANK ROAD (INFRONT OF COVERED COURT), BGY. SAN ANDRES, CAINTA, RIZAL'),('PSGUTAG042','','','UTAG','NPG 127','PSG','WEST BANK RD COR NICARAGUA ST BGY STA. ANA,NFF1,CS'),('PSGUTAG044','','','UTAG','PSGUTAG044','PSG','BGY PALINGON, BAGONG PAG-ASA, TAGUIG CITY'),('PSGUTAG052','','','UTAG','PSGUTAG052','PSG','HERMOSA COR. COVINA STS. MAHOGANY PLACE, NFF1, CS'),('PSGUTAG063','','','UTAG','PSGUTAG063','PSG','MILLENIUM PH2 NEAR BSKTBALL COURT MAYBUNGA,NFF1,CS'),('R01.01@MYG026.MYGM02 & MYGECIP042','','','ECI & RAM','MYG 026','','BOSTON ST. FRONT 28 NEAR AURORA BLVD.'),('R01.01@MYG038A.MYGM03','511084501-2','33 SWN 43526','RAM','MYG 038A','','ALONG HEMADY AVE. NEAR 6TH ST. BRGY. MARIANA NEW MLA.'),('R01.02@MYG035.MYGM02','','','','MYG 035','','E. RODRIGUEZ AVE. COR.EGEA ST. Q. C.'),('R01.02@MYG157A.MYGM03','510999201-2','33 CZN 69755','RAM','MYG 157A','','#154 10TH ST. NEAR BALETE DRIVE BRGY. MARAIAN NEW MANILA Q.C.'),('R01.02@NPG104A.NPGM01','479964201-5','33 SYN 14445','RAM','NPG 104A','','ALONG  VICTORINO ST COR VALDERAMA ST., BAMBANG ,PASIG CITY'),('R01.03@MYG143.MYGM02','502735301-7','33 CZN 50627','RAM','MYG 143','','ALONG # 123 H. LOZADA NEAR LEYVA ST. SAN JUAN'),('R01.03@MYG168A.MYGM04','','','RAM','MYG 168A','','P. GUEVARRA COR. ARGONE ST.'),('R01.03@NPG111A.NPGM01','480433602-4','33 LZN 16436','RAM','NPG 111A','','ALONG URBANO VELASCO AVE., COR JAPSON ST.'),('R01.04@MYG130/1_STARMALL.MYGM04','','','RAM','MYG 130/1','','SHAW BLVD. FRONT OF STARMALL'),('R01.04@NPG106A.NPGM01','480798701-2','0','RAM','NPG 106A','','ALONG M.H.DEL PILAR COR FONTANILLA ST.'),('R01.05@MYG108.MYGM02','504530001-7','33 LZN 05162','RAM','MYG 108','','ALONG ANNAPOLIS GREENHILLS SAN JUAN'),('R01.05@NPG079A.NPGM01','475702201-8','00 AAO 64174','along San Lorenz','NPG 079A','',''),('R01.06@DSN163/B.DSLM01','','','RAM','DSN 163/B','','HAIG ST., LANDVILL SUBD.,'),('R01.06@MYG024/1.MYGM04','505256001-3','33 SZN 37856','RAM','MYG 024/1','','ALONG BALETE DRIVE NEAR 3RD ST. BRGY. MARIANA NEW MLA.'),('R01.09@DSN197.DSLM01','724363401-7','33 WZN 36365','RAM','DSN 197','','ALONG P. CRUZ NEW ZANIGA MYG'),('R01.09@MYG148AMYGM03','505753301-3','33 STN 26154','RAM','MYG 148A','','ALONG PINATUBO COR. MATULIN ST.'),('R01.09@MYG158-2.MYGM01','','','Along  Hemady Av','MYG 158-2','',''),('R01.09@MYG186A-WACKRD.MYGM02','','','RAM','MYG 186A','','ALONG WACK-WACK ROAD'),('R01.09@NPG027A.NPGM01','','','RAM','NPG 027A','','ALONG PALINGON ST ., FRONT   OLD SHELL GAS STATION TAGUIG'),('R01.10@DSN067.DSLM01','727752001-4','33 SWN 54784','','DSN 067A','','F. ORTIGAS / HAGDAN BATO TOWNHOUSE'),('R01.10@MYG102A.MYGM02','500959101-7','33 LZN 69729','RAM','MYG 102A','','ALONG ROOSEVELT COR. WILSON ST. GREENHILLS WEST'),('R01.10@MYG174.MYGM03','','','RAM','MYG 174','','EQUITABLE PCI BANK NEAR ROSVELT G\'HILLS SJ'),('R01.10@NPG0116.PSGM01 & PSGECIP003','','','ECI & RAM','NPG 116 A','','ALONG ELISCO RD., BGY SAN JOAQUIN, PASIG'),('R01.10@NPG119B.NPGM01','','','RAM','NPG 119B','','#104 F. MANALO ST COR RUHALE ST. TAGUIG'),('R01.11@DSN217.DSLM01','','','RAM','DSN 217','','RD. 3 POSADAS ST. PUNTA'),('R01.11@MYG101-1.MYGM01','501182001-4','33 RZN 50379','RAM','MYG 101-1','','ALONG ROOSEVELT COR. XAVIER GREENHILLS WEST'),('R01.12@MYG039-1.MYGM01','505274201-2','33 AZN 91305','RAM','MYG 039-1','','ALONG 6TH ST. NEAR BALETE DRIVE COR. 10TH ST. Q.C.'),('TAGUTAG008','','','','','','VISTA DE LAGO CONDOMINIUM'),('TAGUTAG026','','','','','','LAKEVIEW MANORS'),('TAGUTAG060','','','','','','CYPRESS CONDO'),('TAGUTAG061','','','','','','ROYAL PALM');
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
INSERT INTO `node_types` VALUES (''),('Along  Hemady Av'),('along San Lorenz'),('CHICAGO ST. QUEZ'),('ECI'),('ECI & RAM'),('LAGMAY ST. QUEZO'),('MSAN'),('NEW YORK ST. QUE'),('RAM'),('UTAG');
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

-- Dump completed on 2014-05-02 16:29:11
