-- MySQL dump 10.16  Distrib 10.1.26-MariaDB, for Win32 (AMD64)
--
-- Host: localhost    Database: members
-- ------------------------------------------------------
-- Server version	10.1.26-MariaDB

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
-- Table structure for table `emploees`
--

DROP TABLE IF EXISTS `emploees`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `emploees` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `first_name` varchar(200) NOT NULL,
  `last_name` varchar(200) NOT NULL,
  `date_of_birth` date NOT NULL,
  `email` varchar(300) NOT NULL,
  `phone` varchar(300) NOT NULL,
  `address` text NOT NULL,
  `about` text,
  `bio` text,
  `nicname` varchar(100) DEFAULT NULL,
  `photo` varchar(300) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=116 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `emploees`
--

LOCK TABLES `emploees` WRITE;
/*!40000 ALTER TABLE `emploees` DISABLE KEYS */;
INSERT INTO `emploees` VALUES (46,'Petro','Ivanov','0000-00-00','','','',NULL,NULL,NULL,NULL),(48,'Sergey','Olekseev','0000-00-00','','','',NULL,NULL,NULL,NULL),(49,'Danil','Danilov','0000-00-00','','','',NULL,NULL,NULL,NULL),(50,'Petro','Petrov','0000-00-00','','','',NULL,NULL,NULL,NULL),(51,'Sergey','Danilov','0000-00-00','','','',NULL,NULL,NULL,NULL),(52,'Ivan','Ivanov','0000-00-00','','','',NULL,NULL,NULL,NULL),(53,'Petro','Petrov','0000-00-00','','','',NULL,NULL,NULL,NULL),(55,'Oleksey','Petrov','0000-00-00','','','',NULL,NULL,NULL,NULL),(56,'Oleg','Danilov','0000-00-00','','','',NULL,NULL,NULL,NULL),(57,'Oleksey','Danilov','0000-00-00','','','',NULL,NULL,NULL,NULL),(58,'Nikolay','Ivanov','0000-00-00','','','',NULL,NULL,NULL,NULL),(59,'Danil','Petrov','0000-00-00','','','',NULL,NULL,NULL,NULL),(60,'Petro','Danilov','0000-00-00','','','',NULL,NULL,NULL,NULL),(61,'Oleg','Ivanov','0000-00-00','','','',NULL,NULL,NULL,NULL),(62,'Oleg','Petrov','0000-00-00','','','',NULL,NULL,NULL,NULL),(64,'Ivan','Ivanov','0000-00-00','','','',NULL,NULL,NULL,NULL),(66,'Oleksey','Petrov','0000-00-00','','','',NULL,NULL,NULL,NULL),(67,'Oleg','Ivanov','0000-00-00','','','',NULL,NULL,NULL,NULL),(68,'Oleksey','Petrov','0000-00-00','','','',NULL,NULL,NULL,NULL),(70,'Petro','Danilov','0000-00-00','','','',NULL,NULL,NULL,NULL),(71,'Sergey','Danilov','0000-00-00','','','',NULL,NULL,NULL,NULL),(72,'Nikolay','Olekseev','0000-00-00','','','',NULL,NULL,NULL,NULL),(73,'Oleg','Olekseev','0000-00-00','','','',NULL,NULL,NULL,NULL),(75,'Danil','Danilov','0000-00-00','','','',NULL,NULL,NULL,NULL),(79,'Sergey','Ivanov','0000-00-00','','','',NULL,NULL,NULL,'14890920_52f55e91.jpg'),(80,'Oleg','Ivanov','0000-00-00','','','',NULL,NULL,NULL,NULL),(82,'Sergey','Ivanov','0000-00-00','','','',NULL,NULL,NULL,NULL),(83,'Nikolay','Ivanov','0000-00-00','','','',NULL,NULL,NULL,NULL),(85,'Ivan','Ivanov','0000-00-00','','','',NULL,NULL,NULL,NULL),(87,'Oleg','Petrov','0000-00-00','','','',NULL,NULL,NULL,NULL),(88,'Oleg','Ivanov','0000-00-00','','','',NULL,NULL,NULL,NULL),(89,'Petro','Petrov','0000-00-00','','','',NULL,NULL,NULL,NULL),(90,'Nikolay','Petrov','0000-00-00','','','',NULL,NULL,NULL,NULL),(92,'Danil','Olekseev','0000-00-00','','','',NULL,NULL,NULL,NULL),(93,'Nikolay','Ivanov','0000-00-00','','','',NULL,NULL,NULL,NULL),(94,'Petro','Ivanov','0000-00-00','','','',NULL,NULL,NULL,NULL),(95,'Nikolay','Petrov','0000-00-00','','','',NULL,NULL,NULL,NULL),(96,'Sergey','Ivanov','0000-00-00','','','',NULL,NULL,NULL,NULL),(98,'Ivan','Ivanov','0000-00-00','','','',NULL,NULL,NULL,NULL),(99,'Nikolay','Olekseev','0000-00-00','','','',NULL,NULL,NULL,NULL),(101,'Danil','Ivanov','0000-00-00','','','',NULL,NULL,NULL,NULL),(102,'Oleksey','Danilov','0000-00-00','','','',NULL,NULL,NULL,NULL),(104,'Danil','Danilov','0000-00-00','','','',NULL,NULL,NULL,NULL),(105,'Oleksey','Ivanov','0000-00-00','','','',NULL,NULL,NULL,NULL),(106,'Oleksey','Olekseev','0000-00-00','','','',NULL,NULL,NULL,NULL),(108,'Ivan','Danilov','0000-00-00','','','',NULL,NULL,NULL,NULL),(110,'Nikolay','Petrov','0000-00-00','','','',NULL,NULL,NULL,NULL),(111,'Sergey','Petrov','0000-00-00','','','',NULL,NULL,NULL,NULL),(112,'Oleksey','Danilov','0000-00-00','','','',NULL,NULL,NULL,NULL),(115,'Sergey','Ivanov','0000-00-00','','','',NULL,NULL,NULL,NULL);
/*!40000 ALTER TABLE `emploees` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `emploees_hire`
--

DROP TABLE IF EXISTS `emploees_hire`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `emploees_hire` (
  `emploee_id` int(10) unsigned NOT NULL,
  `hire_date` date NOT NULL,
  `salary` double(10,2) NOT NULL,
  KEY `emploee_id` (`emploee_id`),
  CONSTRAINT `emploees_hire_ibfk_1` FOREIGN KEY (`emploee_id`) REFERENCES `emploees` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `emploees_hire`
--

LOCK TABLES `emploees_hire` WRITE;
/*!40000 ALTER TABLE `emploees_hire` DISABLE KEYS */;
INSERT INTO `emploees_hire` VALUES (46,'2013-11-08',18000.00),(48,'2018-04-08',20000.00),(49,'2015-06-07',20000.00),(50,'2015-06-07',15000.00),(51,'2013-11-08',15000.00),(52,'2015-04-08',14000.00),(53,'2018-04-08',18000.00),(55,'2015-04-08',18000.00),(56,'2015-06-07',18000.00),(57,'2018-04-08',18000.00),(58,'2013-11-08',14000.00),(59,'2015-06-07',12000.00),(60,'2018-04-08',18000.00),(61,'2013-11-08',14000.00),(62,'2013-11-08',15000.00),(64,'2015-06-07',15000.00),(66,'2018-04-08',20000.00),(67,'2013-11-08',18000.00),(68,'2015-04-08',12000.00),(70,'2018-04-08',18000.00),(71,'2015-06-07',20000.00),(72,'2018-04-08',14000.00),(73,'2015-06-07',15000.00),(75,'2013-11-08',12000.00),(79,'2017-09-10',14500.00),(80,'2015-06-07',18000.00),(82,'2018-04-08',12000.00),(83,'2015-04-08',20000.00),(85,'2018-04-08',14000.00),(87,'2015-04-08',12000.00),(88,'2015-06-07',18000.00),(89,'2015-04-08',20000.00),(90,'2018-04-08',18000.00),(92,'2018-04-08',15000.00),(93,'2013-11-08',20000.00),(94,'2015-04-08',12000.00),(95,'2013-11-08',18000.00),(96,'2015-06-07',14000.00),(98,'2013-11-08',20000.00),(99,'2018-04-08',20000.00),(101,'2015-06-07',18000.00),(102,'2015-04-08',14000.00),(104,'2015-04-08',15000.00),(105,'2018-04-08',15000.00),(106,'2013-11-08',15000.00),(108,'2018-04-08',20000.00),(110,'2015-04-08',18000.00),(111,'2013-11-08',14000.00),(112,'2015-04-08',20000.00),(115,'2015-06-07',20000.00);
/*!40000 ALTER TABLE `emploees_hire` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `emploees_hire_date`
--

DROP TABLE IF EXISTS `emploees_hire_date`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `emploees_hire_date` (
  `emploee_id` int(10) unsigned NOT NULL,
  `hire_date` date NOT NULL,
  KEY `emploee_id` (`emploee_id`),
  CONSTRAINT `emploees_hire_date_ibfk_1` FOREIGN KEY (`emploee_id`) REFERENCES `emploees` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `emploees_hire_date`
--

LOCK TABLES `emploees_hire_date` WRITE;
/*!40000 ALTER TABLE `emploees_hire_date` DISABLE KEYS */;
/*!40000 ALTER TABLE `emploees_hire_date` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `emploees_position`
--

DROP TABLE IF EXISTS `emploees_position`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `emploees_position` (
  `emploee_id` int(10) unsigned NOT NULL,
  `position_id` int(10) unsigned NOT NULL,
  KEY `emploee_id` (`emploee_id`),
  KEY `position_id` (`position_id`),
  CONSTRAINT `emploees_position_ibfk_1` FOREIGN KEY (`emploee_id`) REFERENCES `emploees` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `emploees_position_ibfk_2` FOREIGN KEY (`position_id`) REFERENCES `positions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `emploees_position`
--

LOCK TABLES `emploees_position` WRITE;
/*!40000 ALTER TABLE `emploees_position` DISABLE KEYS */;
/*!40000 ALTER TABLE `emploees_position` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `emploees_salary`
--

DROP TABLE IF EXISTS `emploees_salary`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `emploees_salary` (
  `emploee_id` int(10) unsigned NOT NULL,
  `salary` double(10,2) NOT NULL,
  KEY `emploee_id` (`emploee_id`),
  CONSTRAINT `emploees_salary_ibfk_1` FOREIGN KEY (`emploee_id`) REFERENCES `emploees` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `emploees_salary`
--

LOCK TABLES `emploees_salary` WRITE;
/*!40000 ALTER TABLE `emploees_salary` DISABLE KEYS */;
/*!40000 ALTER TABLE `emploees_salary` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `groups`
--

DROP TABLE IF EXISTS `groups`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `groups` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(300) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `groups`
--

LOCK TABLES `groups` WRITE;
/*!40000 ALTER TABLE `groups` DISABLE KEYS */;
/*!40000 ALTER TABLE `groups` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `members`
--

DROP TABLE IF EXISTS `members`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `members` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `firstname` varchar(200) NOT NULL,
  `lastname` varchar(200) NOT NULL,
  `date_of_birth` date NOT NULL,
  `email` varchar(300) NOT NULL,
  `phone` varchar(300) DEFAULT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` char(150) NOT NULL,
  `address` text,
  `about` text,
  `bio` text,
  `photo` varchar(300) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=42 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `members`
--

LOCK TABLES `members` WRITE;
/*!40000 ALTER TABLE `members` DISABLE KEYS */;
INSERT INTO `members` VALUES (26,'','','0000-00-00','nuser',NULL,'nuser','$2y$10$dGo1JIQ9nvuGVt7Aen51nOQ6oEQORGQiWsjjURNEbYKGWikoWAAxy',NULL,NULL,NULL,NULL);
/*!40000 ALTER TABLE `members` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `members_group`
--

DROP TABLE IF EXISTS `members_group`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `members_group` (
  `member_id` int(10) unsigned NOT NULL,
  `group_id` int(10) unsigned NOT NULL,
  KEY `member_id` (`member_id`),
  KEY `group_id` (`group_id`),
  CONSTRAINT `members_group_ibfk_1` FOREIGN KEY (`member_id`) REFERENCES `members` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `members_group_ibfk_2` FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `members_group`
--

LOCK TABLES `members_group` WRITE;
/*!40000 ALTER TABLE `members_group` DISABLE KEYS */;
/*!40000 ALTER TABLE `members_group` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `positions`
--

DROP TABLE IF EXISTS `positions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `positions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(300) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `positions`
--

LOCK TABLES `positions` WRITE;
/*!40000 ALTER TABLE `positions` DISABLE KEYS */;
/*!40000 ALTER TABLE `positions` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-05-15 19:14:27
