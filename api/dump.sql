MariaDB dump 10.19  Distrib 10.4.22-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: php
-- ------------------------------------------------------
-- Server version	10.4.22-MariaDB
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
-- Table structure for table `tarefas`
--
DROP TABLE IF EXISTS `tarefas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tarefas` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `descricao` varchar(255) NOT NULL,
  `imagem` varchar(255) DEFAULT NULL,
  `apagado` tinyint(1) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=46 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;
--
-- Dumping data for table `tarefas`
--
LOCK TABLES `tarefas` WRITE;
/*!40000 ALTER TABLE `tarefas` DISABLE KEYS */;
INSERT INTO `tarefas` VALUES (2,'Teste Atualiza Tarefa por API','',1),(5,'Ir para academia',NULL,1),(7,'Ir para praia',NULL,0),(8,'Estudar JS',NULL,1),(12,'Valor mais novo ainda',NULL,1),(17,'Tarefa inserida via PHP',NULL,1),(19,'Tarefa inserida via PHP',NULL,1),(20,'Tarefa inserida via PHP',NULL,1),(21,'Mais uma tarefa inserida',NULL,1),(22,'Mais uma tarefa inserida',NULL,1),(23,'Cortar grama do SENAC',NULL,1),(24,'Lavar roupa',NULL,0),(25,'Lavar roupa',NULL,1),(26,'Nova tarefa','imagens/IPA.png_2060350883fef4382018a509da3c7fbf.png',0),(27,'Teste de upload',NULL,0),(28,'Teste de upload',NULL,1),(29,'Teste de upload',NULL,1),(30,'Webshell',NULL,1),(31,'Teste de imagem','imagens/webshell.php_a89cdb344042871a8c9023dd97cb503e.png',1),(32,'Teste de upload','imagens/webshell.php_4360309e46abbe92340ca03df98fea2d.png',1),(33,'PNG','imagens/oculos.jpg_b3deb70cff0c5630c2e2e3b69f0b070d.jpeg',0),(34,'JPG','imagens/oculos.jpg_edff6cb5f92aedc611f8b31e149cb8a4.png',0),(35,'Desconhecido','imagens/papainoel.png_0cbffdd95fab73e48e884e6fad8fe6c9.png',1),(36,'Teste de upload','',1),(37,'Webshell','',1),(38,'Teste de upload','',1),(39,'IPA','imagens/IPA.png_b63ffda852702088fd4a5074dcc4ad94png',1),(40,'IPA','imagens/papainoel.png_a5217c031228a63cc9c6ff2f0ac755ad.jpeg',1),(41,'Óculos','imagens/oculos.jpg_ec8a2d0b4341d45a7cf555829bcb8f63.jpeg',0),(42,'Teste Tarefa por API','',1),(43,'Teste Tarefa por API II','',1),(44,'Teste Tarefa por API III','',1),(45,'Teste Tarefa por API IV','',1);
/*!40000 ALTER TABLE `tarefas` ENABLE KEYS */;
UNLOCK TABLES;
--
-- Table structure for table `usuarios`
--
DROP TABLE IF EXISTS `usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuarios` (
  `id` varchar(255) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `senha` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;
--
-- Dumping data for table `usuarios`
--
LOCK TABLES `usuarios` WRITE;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` VALUES ('luiz.fabmilan@sp.senac.br','Luiz Bono','$2y$10$H95n8WBalefWWuwX1Att.OVyfSblMom45NbkQxQfTNQbzsEwHOPli');
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
-- Dump completed on 2022-05-19 19:52:57