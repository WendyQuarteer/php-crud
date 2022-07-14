-- MySQL dump 10.13  Distrib 8.0.29, for macos12.2 (x86_64)
--
-- Host: 127.0.0.1    Database: hogwarts
-- ------------------------------------------------------
-- Server version	8.0.29

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
-- Table structure for table `group_table`
--

DROP TABLE IF EXISTS `group_table`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `group_table` (
  `id` tinyint NOT NULL AUTO_INCREMENT,
  `name` varchar(30) DEFAULT NULL,
  `location` varchar(30) DEFAULT NULL,
  `teacher_assigned` tinyint DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `class_table_id_uindex` (`id`),
  KEY `group_table_teacher_table_id_fk` (`teacher_assigned`),
  CONSTRAINT `group_table_teacher_table_id_fk` FOREIGN KEY (`teacher_assigned`) REFERENCES `teacher_table` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `group_table`
--

LOCK TABLES `group_table` WRITE;
/*!40000 ALTER TABLE `group_table` DISABLE KEYS */;
INSERT INTO `group_table` VALUES (1,'Astronomy','school',15),(2,'Charms','school',16),(3,'Dark Arts','school',8),(4,'Defence Against the Dark Arts','school',7),(5,'Herbology','school',9),(6,'History of Magic','school',13),(7,'Potions','school',12),(8,'Transfiguration','school',10);
/*!40000 ALTER TABLE `group_table` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `student_table`
--

DROP TABLE IF EXISTS `student_table`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `student_table` (
  `id` tinyint NOT NULL AUTO_INCREMENT,
  `name` varchar(30) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `group_id` tinyint DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `student_table_id_uindex` (`id`),
  KEY `student_table_group_table_id_fk` (`group_id`),
  CONSTRAINT `student_table_group_table_id_fk` FOREIGN KEY (`group_id`) REFERENCES `group_table` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci COMMENT='table of all students';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `student_table`
--

LOCK TABLES `student_table` WRITE;
/*!40000 ALTER TABLE `student_table` DISABLE KEYS */;
INSERT INTO `student_table` VALUES (1,'Harry','harry@gmail.com',6),(2,'Ron','ron@gmail.com',5),(3,'Hermoinie','herm@gmail.com',4),(4,'Lucius Malfoy','mal@gmail.com',6),(5,'Tom Riddle','tom@gmail.com',2),(6,'Percy Weasley','pman@gmail.com',1);
/*!40000 ALTER TABLE `student_table` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `teacher_table`
--

DROP TABLE IF EXISTS `teacher_table`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `teacher_table` (
  `id` tinyint NOT NULL AUTO_INCREMENT,
  `name` varchar(20) DEFAULT NULL,
  `email` varchar(30) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `teacher_table_id_uindex` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `teacher_table`
--

LOCK TABLES `teacher_table` WRITE;
/*!40000 ALTER TABLE `teacher_table` DISABLE KEYS */;
INSERT INTO `teacher_table` VALUES (7,'Alastor Moody','Britney_Lloyd6415@bretoux.com'),(8,'DOLORES UMBRIDGE','Matthews5112@bauros.biz'),(9,'QUIRINUS QUIRRELL','Emma_Irwin3176@ovock.tech'),(10,'GILDEROY LOCKHART','Ronald_Coleman2614@irrepsy.com'),(11,'HORACE SLUGHORN','Bryon_Durrant2635@yahoo.com'),(12,'RUBEUS HAGRID','Mandy_Brett695@deavo.com'),(13,'SYBILL TRELAWNEY','Noah_Raven8419@mafthy.com'),(14,'SEVERUS SNAPE','Allison_Hunter5342@yahoo.com'),(15,'REMUS LUPIN','Shay_Gibson967@brety.org'),(16,'POMONA SPROUT','Kendra_Jones1612@sveldo.biz'),(17,'FILIUS FLITWICK','Cedrick_Clifton7973@extex.org'),(18,'ALBUS DUMBLEDORE','Luke_Partridge3427@sheye.org'),(19,'MINERVA MCGONAGALL','Britney_John8501@yahoo.com');
/*!40000 ALTER TABLE `teacher_table` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-07-14 11:19:08
