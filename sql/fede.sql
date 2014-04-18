-- MySQL dump 10.13  Distrib 5.5.34, for debian-linux-gnu (i686)
--
-- Host: localhost    Database: fedeh
-- ------------------------------------------------------
-- Server version	5.5.34-0ubuntu0.12.10.1

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
-- Table structure for table `capacitaciones`
--

DROP TABLE IF EXISTS `capacitaciones`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `capacitaciones` (
  `id` int(11) NOT NULL,
  `titulo` varchar(45) DEFAULT NULL,
  `descripcion` varchar(45) DEFAULT NULL,
  `cupos` int(11) DEFAULT NULL,
  `fecha_capacitacion` date DEFAULT NULL,
  `hora` timestamp NULL DEFAULT NULL,
  `lugar` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `capacitaciones`
--

LOCK TABLES `capacitaciones` WRITE;
/*!40000 ALTER TABLE `capacitaciones` DISABLE KEYS */;
/*!40000 ALTER TABLE `capacitaciones` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `capacitaciones_has_contactos`
--

DROP TABLE IF EXISTS `capacitaciones_has_contactos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `capacitaciones_has_contactos` (
  `capacitaciones_id` int(11) NOT NULL,
  `contactos_id` int(11) NOT NULL,
  PRIMARY KEY (`capacitaciones_id`,`contactos_id`),
  KEY `fk_capacitaciones_has_contactos_contactos1_idx` (`contactos_id`),
  KEY `fk_capacitaciones_has_contactos_capacitaciones1_idx` (`capacitaciones_id`),
  CONSTRAINT `fk_capacitaciones_has_contactos_capacitaciones1` FOREIGN KEY (`capacitaciones_id`) REFERENCES `capacitaciones` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_capacitaciones_has_contactos_contactos1` FOREIGN KEY (`contactos_id`) REFERENCES `contactos` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `capacitaciones_has_contactos`
--

LOCK TABLES `capacitaciones_has_contactos` WRITE;
/*!40000 ALTER TABLE `capacitaciones_has_contactos` DISABLE KEYS */;
/*!40000 ALTER TABLE `capacitaciones_has_contactos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `colaboradores`
--

DROP TABLE IF EXISTS `colaboradores`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `colaboradores` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fecha_nacimiento` date DEFAULT NULL,
  `tipo_documento` varchar(45) DEFAULT NULL,
  `nro_documento` varchar(45) DEFAULT NULL,
  `personas_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_Colaboradores_personas1_idx` (`personas_id`),
  CONSTRAINT `fk_Colaboradores_personas1` FOREIGN KEY (`personas_id`) REFERENCES `personas` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `colaboradores`
--

LOCK TABLES `colaboradores` WRITE;
/*!40000 ALTER TABLE `colaboradores` DISABLE KEYS */;
/*!40000 ALTER TABLE `colaboradores` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contactos`
--

DROP TABLE IF EXISTS `contactos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `contactos` (
  `id` int(11) NOT NULL,
  `domicilio_laboral` varchar(45) DEFAULT NULL,
  `profesion` varchar(45) DEFAULT NULL,
  `personas_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_contactos_personas1_idx` (`personas_id`),
  CONSTRAINT `fk_contactos_personas1` FOREIGN KEY (`personas_id`) REFERENCES `personas` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contactos`
--

LOCK TABLES `contactos` WRITE;
/*!40000 ALTER TABLE `contactos` DISABLE KEYS */;
/*!40000 ALTER TABLE `contactos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `empresas`
--

DROP TABLE IF EXISTS `empresas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `empresas` (
  `id` int(11) NOT NULL,
  `rubro` varchar(45) DEFAULT NULL,
  `contacto_empresa` varchar(45) DEFAULT NULL,
  `cuit` varchar(45) DEFAULT NULL,
  `personas_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_Empresas_personas1_idx` (`personas_id`),
  CONSTRAINT `fk_Empresas_personas1` FOREIGN KEY (`personas_id`) REFERENCES `personas` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `empresas`
--

LOCK TABLES `empresas` WRITE;
/*!40000 ALTER TABLE `empresas` DISABLE KEYS */;
/*!40000 ALTER TABLE `empresas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `eventos`
--

DROP TABLE IF EXISTS `eventos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `eventos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `fecha_` date DEFAULT NULL,
  `hora` datetime DEFAULT NULL,
  `lugar` varchar(45) DEFAULT NULL,
  `descripcion` varchar(45) DEFAULT NULL,
  `ingresos` float DEFAULT NULL COMMENT '	',
  `gastos_decoracion` float DEFAULT NULL,
  `gastos_imprenta` float DEFAULT NULL,
  `gastos_movilidad` float DEFAULT NULL,
  `gastos_permisos` float DEFAULT NULL,
  `gastos_servicios` float DEFAULT NULL,
  `gastos_tecnica` float DEFAULT NULL,
  `gastos_varios` float DEFAULT NULL,
  `gasto_total` float DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `eventos`
--

LOCK TABLES `eventos` WRITE;
/*!40000 ALTER TABLE `eventos` DISABLE KEYS */;
/*!40000 ALTER TABLE `eventos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fichas`
--

DROP TABLE IF EXISTS `fichas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fichas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `numero_ficha` int(11) DEFAULT NULL,
  `socios_id` int(11) NOT NULL,
  PRIMARY KEY (`id`,`socios_id`),
  KEY `fk_fichas_socios1_idx` (`socios_id`),
  CONSTRAINT `fk_fichas_socios1` FOREIGN KEY (`socios_id`) REFERENCES `socios` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fichas`
--

LOCK TABLES `fichas` WRITE;
/*!40000 ALTER TABLE `fichas` DISABLE KEYS */;
/*!40000 ALTER TABLE `fichas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `historial`
--

DROP TABLE IF EXISTS `historial`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `historial` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `numero_ficha` int(11) DEFAULT NULL,
  `socio_id` int(11) NOT NULL,
  PRIMARY KEY (`id`,`socio_id`),
  KEY `fk_historial_socios1_idx` (`socio_id`),
  CONSTRAINT `fk_historial_socios1` FOREIGN KEY (`socio_id`) REFERENCES `socios` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `historial`
--

LOCK TABLES `historial` WRITE;
/*!40000 ALTER TABLE `historial` DISABLE KEYS */;
/*!40000 ALTER TABLE `historial` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `judiciales`
--

DROP TABLE IF EXISTS `judiciales`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `judiciales` (
  `id` int(11) NOT NULL,
  `numero_oficio` int(11) DEFAULT NULL,
  `fecha_oficio` date DEFAULT NULL,
  `causa` varchar(45) DEFAULT NULL,
  `juzgado` varchar(45) DEFAULT NULL,
  `cantidad_cuotas` int(11) DEFAULT NULL,
  `monto_cuotas` float DEFAULT NULL,
  `personas_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_Judiciales_personas1_idx` (`personas_id`),
  CONSTRAINT `fk_Judiciales_personas1` FOREIGN KEY (`personas_id`) REFERENCES `personas` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `judiciales`
--

LOCK TABLES `judiciales` WRITE;
/*!40000 ALTER TABLE `judiciales` DISABLE KEYS */;
/*!40000 ALTER TABLE `judiciales` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `lineas_ctas_corrientes`
--

DROP TABLE IF EXISTS `lineas_ctas_corrientes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `lineas_ctas_corrientes` (
  `id` int(11) NOT NULL,
  `fecha_` date DEFAULT NULL,
  `detalle` varchar(45) DEFAULT NULL,
  `debe` decimal(2,0) DEFAULT NULL,
  `haber` decimal(2,0) DEFAULT NULL,
  `numero_comprobante` int(11) DEFAULT NULL,
  `fecha_comprobante` date DEFAULT NULL,
  `numero_cheque` varchar(45) DEFAULT NULL,
  `tipo_cheque` varchar(45) DEFAULT NULL,
  `banco_cheque` varchar(45) DEFAULT NULL,
  `fecha_cobro_cheque` date DEFAULT NULL,
  `fecha_vencimiento_cheque` date DEFAULT NULL,
  `plan_de_cuenta_id` int(11) NOT NULL,
  `plan_de_cuenta_personas_id` int(11) NOT NULL,
  `tipos_cuentas_corrientes_id` int(11) NOT NULL,
  PRIMARY KEY (`id`,`plan_de_cuenta_id`,`plan_de_cuenta_personas_id`),
  UNIQUE KEY `numero_comprobante_UNIQUE` (`numero_comprobante`),
  KEY `fk_lineas_ctas_corrientes_plan_de_cuenta1_idx` (`plan_de_cuenta_id`,`plan_de_cuenta_personas_id`),
  KEY `fk_lineas_ctas_corrientes_tipos_cuentas_corrientes1_idx` (`tipos_cuentas_corrientes_id`),
  CONSTRAINT `fk_lineas_ctas_corrientes_plan_de_cuenta1` FOREIGN KEY (`plan_de_cuenta_id`) REFERENCES `plan_de_cuenta` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_lineas_ctas_corrientes_tipos_cuentas_corrientes1` FOREIGN KEY (`tipos_cuentas_corrientes_id`) REFERENCES `tipos_cuentas_corrientes` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lineas_ctas_corrientes`
--

LOCK TABLES `lineas_ctas_corrientes` WRITE;
/*!40000 ALTER TABLE `lineas_ctas_corrientes` DISABLE KEYS */;
/*!40000 ALTER TABLE `lineas_ctas_corrientes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `notas`
--

DROP TABLE IF EXISTS `notas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `notas` (
  `id` int(11) NOT NULL,
  `motivo` varchar(45) DEFAULT NULL,
  `fecha_nota` date DEFAULT NULL,
  `dirigida_a` varchar(45) DEFAULT NULL,
  `expte_generado` varchar(45) DEFAULT NULL,
  `entidad_expte` varchar(45) DEFAULT NULL,
  `fecha_expte` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `notas`
--

LOCK TABLES `notas` WRITE;
/*!40000 ALTER TABLE `notas` DISABLE KEYS */;
/*!40000 ALTER TABLE `notas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pacientes`
--

DROP TABLE IF EXISTS `pacientes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pacientes` (
  `id` int(11) NOT NULL,
  `estado` varchar(45) DEFAULT NULL,
  `personas_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_Pacientes_personas1_idx` (`personas_id`),
  CONSTRAINT `fk_Pacientes_personas1` FOREIGN KEY (`personas_id`) REFERENCES `personas` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pacientes`
--

LOCK TABLES `pacientes` WRITE;
/*!40000 ALTER TABLE `pacientes` DISABLE KEYS */;
/*!40000 ALTER TABLE `pacientes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `personas`
--

DROP TABLE IF EXISTS `personas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `personas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) DEFAULT NULL,
  `apellido` varchar(45) DEFAULT NULL,
  `domicilio_personal` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `telefono` varchar(45) DEFAULT NULL,
  `donante` tinyint(1) DEFAULT NULL,
  `grupo_sanguineo` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `personas`
--

LOCK TABLES `personas` WRITE;
/*!40000 ALTER TABLE `personas` DISABLE KEYS */;
/*!40000 ALTER TABLE `personas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `personas_has_capacitaciones`
--

DROP TABLE IF EXISTS `personas_has_capacitaciones`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `personas_has_capacitaciones` (
  `personas_id` int(11) NOT NULL,
  `capacitaciones_id` int(11) NOT NULL,
  PRIMARY KEY (`personas_id`,`capacitaciones_id`),
  KEY `fk_personas_has_capacitaciones_capacitaciones1_idx` (`capacitaciones_id`),
  KEY `fk_personas_has_capacitaciones_personas1_idx` (`personas_id`),
  CONSTRAINT `fk_personas_has_capacitaciones_personas1` FOREIGN KEY (`personas_id`) REFERENCES `personas` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_personas_has_capacitaciones_capacitaciones1` FOREIGN KEY (`capacitaciones_id`) REFERENCES `capacitaciones` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `personas_has_capacitaciones`
--

LOCK TABLES `personas_has_capacitaciones` WRITE;
/*!40000 ALTER TABLE `personas_has_capacitaciones` DISABLE KEYS */;
/*!40000 ALTER TABLE `personas_has_capacitaciones` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `plan_de_cuenta`
--

DROP TABLE IF EXISTS `plan_de_cuenta`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `plan_de_cuenta` (
  `id` int(11) NOT NULL,
  `fecha_adelante` date DEFAULT NULL,
  `fecha_atras` date DEFAULT NULL,
  `tipos_plan_cuentas_id` int(11) NOT NULL,
  `personas_id` int(11) NOT NULL,
  PRIMARY KEY (`id`,`personas_id`),
  KEY `fk_plan_de_cuenta_tipos_plan_cuentas1_idx` (`tipos_plan_cuentas_id`),
  KEY `fk_plan_de_cuenta_personas1_idx` (`personas_id`),
  CONSTRAINT `fk_plan_de_cuenta_tipos_plan_cuentas1` FOREIGN KEY (`tipos_plan_cuentas_id`) REFERENCES `tipos_plan_cuentas` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_plan_de_cuenta_personas1` FOREIGN KEY (`personas_id`) REFERENCES `personas` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `plan_de_cuenta`
--

LOCK TABLES `plan_de_cuenta` WRITE;
/*!40000 ALTER TABLE `plan_de_cuenta` DISABLE KEYS */;
/*!40000 ALTER TABLE `plan_de_cuenta` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `roles` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(32) NOT NULL,
  `description` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uniq_name` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `roles`
--

LOCK TABLES `roles` WRITE;
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
INSERT INTO `roles` VALUES (1,'login','Login privileges, granted after account confirmation'),(2,'admin','Administrative user, has access to everything.'),(3,'participant','Participants');
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `roles_users`
--

DROP TABLE IF EXISTS `roles_users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `roles_users` (
  `user_id` int(10) unsigned NOT NULL,
  `role_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`user_id`,`role_id`),
  KEY `fk_role_id` (`role_id`),
  CONSTRAINT `roles_users_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  CONSTRAINT `roles_users_ibfk_2` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `roles_users`
--

LOCK TABLES `roles_users` WRITE;
/*!40000 ALTER TABLE `roles_users` DISABLE KEYS */;
INSERT INTO `roles_users` VALUES (4,1),(4,3);
/*!40000 ALTER TABLE `roles_users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sessions`
--

DROP TABLE IF EXISTS `sessions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sessions` (
  `session_id` varchar(24) NOT NULL,
  `last_active` int(10) unsigned NOT NULL,
  `contenido` text NOT NULL,
  PRIMARY KEY (`session_id`),
  KEY `KEY` (`last_active`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sessions`
--

LOCK TABLES `sessions` WRITE;
/*!40000 ALTER TABLE `sessions` DISABLE KEYS */;
/*!40000 ALTER TABLE `sessions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `socios`
--

DROP TABLE IF EXISTS `socios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `socios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tipo_documento` varchar(45) DEFAULT NULL,
  `nro_documento` varchar(45) DEFAULT NULL,
  `domicilio_laboral` varchar(45) DEFAULT NULL,
  `fecha_nacimiento` date DEFAULT NULL,
  `tipo_aporte` varchar(45) DEFAULT NULL,
  `descuento_planilla` tinyint(1) DEFAULT NULL,
  `personas_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_socios_personas1_idx` (`personas_id`),
  CONSTRAINT `fk_socios_personas1` FOREIGN KEY (`personas_id`) REFERENCES `personas` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='	';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `socios`
--

LOCK TABLES `socios` WRITE;
/*!40000 ALTER TABLE `socios` DISABLE KEYS */;
/*!40000 ALTER TABLE `socios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tipos_cuentas_corrientes`
--

DROP TABLE IF EXISTS `tipos_cuentas_corrientes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tipos_cuentas_corrientes` (
  `id` int(11) NOT NULL,
  `tipocuenta` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tipos_cuentas_corrientes`
--

LOCK TABLES `tipos_cuentas_corrientes` WRITE;
/*!40000 ALTER TABLE `tipos_cuentas_corrientes` DISABLE KEYS */;
/*!40000 ALTER TABLE `tipos_cuentas_corrientes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tipos_plan_cuentas`
--

DROP TABLE IF EXISTS `tipos_plan_cuentas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tipos_plan_cuentas` (
  `id` int(11) NOT NULL,
  `TipoPlan` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tipos_plan_cuentas`
--

LOCK TABLES `tipos_plan_cuentas` WRITE;
/*!40000 ALTER TABLE `tipos_plan_cuentas` DISABLE KEYS */;
/*!40000 ALTER TABLE `tipos_plan_cuentas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_tokens`
--

DROP TABLE IF EXISTS `user_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user_tokens` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) unsigned NOT NULL,
  `user_agent` varchar(40) NOT NULL,
  `token` varchar(40) NOT NULL,
  `created` int(10) unsigned NOT NULL,
  `expires` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uniq_token` (`token`),
  KEY `fk_user_id` (`user_id`),
  KEY `expires` (`expires`),
  CONSTRAINT `user_tokens_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_tokens`
--

LOCK TABLES `user_tokens` WRITE;
/*!40000 ALTER TABLE `user_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `user_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(254) NOT NULL,
  `username` varchar(32) NOT NULL DEFAULT '',
  `password` varchar(64) NOT NULL,
  `logins` int(10) unsigned NOT NULL DEFAULT '0',
  `last_login` int(10) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `uniq_username` (`username`),
  UNIQUE KEY `uniq_email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (4,'admin@example.com','admin','3aa4b899cda42cb4079f07ad4f84dec0f790f67735c61cab192fd7507b6f05ee',4,1386887336);
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

-- Dump completed on 2013-12-12 20:42:59
