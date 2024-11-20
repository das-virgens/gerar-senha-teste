testtesttest-- MariaDB dump 10.19  Distrib 10.4.32-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: chamarsenha-unime
-- ------------------------------------------------------
-- Server version	10.4.32-MariaDB

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
-- Table structure for table `coordenadores`
--

DROP TABLE IF EXISTS `coordenadores`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `coordenadores` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `foto` varchar(255) NOT NULL,
  `coord` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  `cursos` text NOT NULL,
  `username` varchar(50) DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `coordenadores`
--

LOCK TABLES `coordenadores` WRITE;
/*!40000 ALTER TABLE `coordenadores` DISABLE KEYS */;
/*!40000 ALTER TABLE `coordenadores` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `horario_coord`
--

DROP TABLE IF EXISTS `horario_coord`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `horario_coord` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `segunda_inicio` time DEFAULT NULL,
  `segunda_fim` time DEFAULT NULL,
  `terca_inicio` time DEFAULT NULL,
  `terca_fim` time DEFAULT NULL,
  `quarta_inicio` time DEFAULT NULL,
  `quarta_fim` time DEFAULT NULL,
  `quinta_inicio` time DEFAULT NULL,
  `quinta_fim` time DEFAULT NULL,
  `sexta_inicio` time DEFAULT NULL,
  `sexta_fim` time DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `horario_coord`
--

LOCK TABLES `horario_coord` WRITE;
/*!40000 ALTER TABLE `horario_coord` DISABLE KEYS */;
INSERT INTO `horario_coord` VALUES (9,'ana','00:00:00','23:01:00','00:00:00','00:01:00','05:00:00','21:01:00','00:00:00','00:01:00','00:00:00','23:01:00'),(10,'barbara','00:00:00','00:01:00','00:00:00','00:01:00','00:00:00','00:01:00','00:00:00','23:01:00','00:00:00','00:01:00'),(11,'daniela','00:00:00','00:01:00','00:00:00','00:01:00','00:00:00','00:01:00','00:00:00','23:01:00','00:00:00','00:01:00'),(12,'elisaura','00:00:00','00:01:00','00:00:00','00:01:00','00:00:00','00:01:00','00:00:00','23:01:00','00:00:00','00:01:00'),(13,'emiraci','00:00:00','23:01:00','00:00:00','00:01:00','00:00:00','00:01:00','00:00:00','23:01:00','00:00:00','00:01:00'),(14,'joseEduardo','00:00:00','00:01:00','00:00:00','00:01:00','00:00:00','00:01:00','00:00:00','23:01:00','00:00:00','00:01:00'),(15,'joseVicente','00:00:00','00:01:00','00:00:00','00:01:00','00:00:00','00:01:00','00:00:00','23:01:00','00:00:00','00:01:00'),(16,'kelly','00:00:00','00:01:00','00:00:00','00:01:00','00:00:00','00:01:00','00:00:00','23:01:00','00:00:00','00:01:00'),(17,'maiara','00:00:00','00:01:00','00:00:00','00:01:00','00:00:00','00:01:00','00:00:00','23:01:00','00:00:00','00:01:00'),(18,'tarcisio','00:00:00','00:01:00','00:00:00','00:01:00','00:00:00','00:01:00','00:00:00','23:01:00','00:00:00','00:01:00'),(19,'lais','00:00:00','00:01:00','00:00:00','00:01:00','00:00:00','00:01:00','00:00:00','23:01:00','00:00:00','00:01:00'),(20,'mateus','00:00:00','00:01:00','00:00:00','00:01:00','00:00:00','00:01:00','00:00:00','23:01:00','10:00:00','17:30:00');
/*!40000 ALTER TABLE `horario_coord` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `senhas`
--

DROP TABLE IF EXISTS `senhas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `senhas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `numero` int(11) DEFAULT NULL,
  `coordenador` varchar(255) DEFAULT NULL,
  `data_geracao` timestamp NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `senhas`
--

LOCK TABLES `senhas` WRITE;
/*!40000 ALTER TABLE `senhas` DISABLE KEYS */;
INSERT INTO `senhas` VALUES (1,0,'ana','2024-07-10 13:41:44'),(13,0,'emiraci','2024-07-10 20:38:08'),(14,0,'mateus','2024-07-10 20:53:29'),(15,0,'lais','2024-07-11 16:36:09'),(16,0,'joseeduardo','2024-07-11 20:36:06'),(17,0,'maiara','2024-07-11 20:46:04');
/*!40000 ALTER TABLE `senhas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `senhas_chamadas`
--

DROP TABLE IF EXISTS `senhas_chamadas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `senhas_chamadas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `coordenador` varchar(50) NOT NULL,
  `senha` varchar(10) NOT NULL,
  `data_hora` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=357 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `senhas_chamadas`
--

LOCK TABLES `senhas_chamadas` WRITE;
/*!40000 ALTER TABLE `senhas_chamadas` DISABLE KEYS */;
INSERT INTO `senhas_chamadas` VALUES (318,'ana','21','2024-07-10 14:25:11'),(319,'ana','22','2024-07-10 14:26:28'),(320,'ana','1','2024-07-10 14:53:50'),(321,'ana','2','2024-07-10 14:53:58'),(322,'ana','3','2024-07-10 14:54:01'),(323,'ana','4','2024-07-10 14:56:19'),(324,'ana','5','2024-07-10 15:17:15'),(325,'ana','6','2024-07-10 20:06:28'),(326,'ana','7','2024-07-10 20:06:28'),(327,'ana','8','2024-07-10 20:06:31'),(328,'ana','9','2024-07-10 20:06:32'),(329,'mateus','1','2024-07-10 20:10:50'),(331,'mateus','3','2024-07-10 20:56:36'),(332,'MATEUS','4','2024-07-10 21:13:26'),(333,'emiraci','1','2024-07-15 12:28:15'),(334,'emiraci','2','2024-07-15 12:28:17'),(335,'emiraci','3','2024-07-15 12:28:19'),(336,'emiraci','4','2024-07-15 12:28:19'),(337,'emiraci','5','2024-07-15 12:28:20'),(338,'emiraci','6','2024-07-15 12:28:20'),(339,'emiraci','7','2024-07-15 12:28:20'),(340,'emiraci','8','2024-07-15 12:28:20'),(341,'emiraci','9','2024-07-15 12:28:21'),(342,'emiraci','10','2024-07-15 12:28:21'),(343,'emiraci','11','2024-07-15 12:28:21'),(344,'emiraci','12','2024-07-15 12:28:21'),(345,'emiraci','13','2024-07-15 12:28:22'),(346,'emiraci','14','2024-07-15 12:28:22'),(347,'emiraci','15','2024-07-15 12:28:22'),(348,'emiraci','16','2024-07-15 12:28:22'),(349,'emiraci','17','2024-07-15 12:28:22'),(350,'emiraci','18','2024-07-15 12:28:36'),(351,'emiraci','19','2024-07-15 12:28:37'),(352,'emiraci','20','2024-07-15 12:28:37'),(353,'emiraci','21','2024-07-15 12:38:14'),(354,'emiraci','22','2024-07-15 12:38:16'),(355,'emiraci','23','2024-07-15 12:57:33'),(356,'emiraci','24','2024-07-15 12:57:33');
/*!40000 ALTER TABLE `senhas_chamadas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `contador` int(11) DEFAULT 0,
  `disponibilidade` int(11) DEFAULT 0,
  `limite` int(11) DEFAULT 0,
  `palavra` varchar(255) DEFAULT NULL,
  `resetCoord` int(11) DEFAULT 0,
  `permissao` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuarios`
--

LOCK TABLES `usuarios` WRITE;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` VALUES (1,'ana','123',63,1,100,'123',0,''),(2,'barbara','123',0,1,0,'123',0,''),(3,'daniela','123',0,1,0,'123',0,''),(5,'elisaura','123',0,1,0,'123',0,''),(6,'emiraci','123',0,1,50,'123',0,''),(7,'joseeduardo','123',0,1,0,'123',0,''),(8,'josevicente','123',0,1,0,'123',0,''),(9,'kelly','123',0,1,0,'123',0,''),(10,'maiara','123',1,1,0,'123',0,''),(11,'tarcisio','123',0,1,0,'123',0,''),(12,'lais','123',6,1,0,'123',0,''),(13,'mateus','123',0,1,12,'123',0,'Master');
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-07-15 10:43:04
