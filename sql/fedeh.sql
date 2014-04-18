-- MySQL dump 10.13  Distrib 5.5.35, for debian-linux-gnu (i686)
--
-- Host: localhost    Database: fedeh
-- ------------------------------------------------------
-- Server version	5.5.35-0ubuntu0.12.10.2

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
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(45) DEFAULT NULL,
  `descripcion` varchar(45) DEFAULT NULL,
  `cupos` int(11) DEFAULT NULL,
  `fecha_capacitacion` date DEFAULT NULL,
  `hora` varchar(45) DEFAULT NULL,
  `lugar` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `capacitaciones`
--

LOCK TABLES `capacitaciones` WRITE;
/*!40000 ALTER TABLE `capacitaciones` DISABLE KEYS */;
INSERT INTO `capacitaciones` VALUES (1,'cap2','cap2',25,'0000-00-00','15:00','lugar2'),(2,'Cap','cap',5,'2014-02-01','00:00','tucu');
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
  `persona_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_Colaboradores_personas1_idx` (`persona_id`),
  CONSTRAINT `fk_Colaboradores_personas1` FOREIGN KEY (`persona_id`) REFERENCES `personas` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
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
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `domicilio_laboral` varchar(45) DEFAULT NULL,
  `profesion` varchar(45) DEFAULT NULL,
  `persona_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_contactos_personas1_idx` (`persona_id`),
  CONSTRAINT `fk_contactos_personas1` FOREIGN KEY (`persona_id`) REFERENCES `personas` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
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
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `rubro` varchar(45) DEFAULT NULL,
  `nombre_empresa` varchar(45) DEFAULT NULL,
  `cuit` varchar(45) DEFAULT NULL,
  `persona_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_Empresas_personas1_idx` (`persona_id`),
  CONSTRAINT `fk_Empresas_personas1` FOREIGN KEY (`persona_id`) REFERENCES `personas` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
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
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `hora` varchar(45) DEFAULT NULL,
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
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `eventos`
--

LOCK TABLES `eventos` WRITE;
/*!40000 ALTER TABLE `eventos` DISABLE KEYS */;
INSERT INTO `eventos` VALUES (10,'q','2014-04-15','0000-00-00 00:00:00','q','q',1,1,1,1,1,1,1,1,NULL),(11,'q','2014-04-15','2014-03-15 00:03:00','q','q',1,1,1,1,1,1,1,1,NULL),(12,'q','2014-10-18','2014-03-15 15:03:00','q','q',1,1,1,1,1,1,1,1,NULL),(13,'q','2014-04-15','0000-00-00 00:00:00','q','q',1,1,1,1,1,1,1,1,NULL),(14,'Festival','2014-04-15','00:00','Florentina','Fiesa',1,1,1,1,1,1,1,1,NULL);
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
  `socio_id` int(11) NOT NULL,
  PRIMARY KEY (`id`,`socio_id`)
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
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `numero_oficio` int(11) DEFAULT NULL,
  `fecha_oficio` date DEFAULT NULL,
  `causa` varchar(45) DEFAULT NULL,
  `juzgado` varchar(45) DEFAULT NULL,
  `cantidad_cuotas` int(11) DEFAULT NULL,
  `monto_cuotas` float DEFAULT NULL,
  `persona_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_Judiciales_personas1_idx` (`persona_id`),
  CONSTRAINT `fk_Judiciales_personas1` FOREIGN KEY (`persona_id`) REFERENCES `personas` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
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
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fecha_cta_cte` date DEFAULT NULL,
  `detalle` varchar(45) DEFAULT NULL,
  `debe` float DEFAULT NULL,
  `haber` float DEFAULT NULL,
  `numero_comprobante` int(11) DEFAULT NULL,
  `fecha_comprobante` date DEFAULT NULL,
  `numero_cheque` varchar(45) DEFAULT NULL,
  `tipo_cheque` varchar(45) DEFAULT NULL,
  `banco_cheque` varchar(45) DEFAULT NULL,
  `fecha_cobro_cheque` date DEFAULT NULL,
  `fecha_vencimiento_cheque` date DEFAULT NULL,
  `plan_de_cuenta_id` int(11) NOT NULL,
  `plan_de_cuenta_personas_id` int(11) NOT NULL,
  `tipo_cuenta_corriente_id` int(11) NOT NULL,
  PRIMARY KEY (`id`,`plan_de_cuenta_id`,`plan_de_cuenta_personas_id`),
  UNIQUE KEY `numero_comprobante_UNIQUE` (`numero_comprobante`),
  KEY `fk_lineas_ctas_corrientes_plan_de_cuenta1_idx` (`plan_de_cuenta_id`,`plan_de_cuenta_personas_id`),
  KEY `fk_lineas_ctas_corrientes_tipos_cuentas_corrientes1_idx` (`tipo_cuenta_corriente_id`),
  CONSTRAINT `fk_lineas_ctas_corrientes_plan_de_cuenta1` FOREIGN KEY (`plan_de_cuenta_id`) REFERENCES `plan_de_cuenta` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_lineas_ctas_corrientes_tipos_cuentas_corrientes1` FOREIGN KEY (`tipo_cuenta_corriente_id`) REFERENCES `tipos_cuentas_corrientes` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=104 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lineas_ctas_corrientes`
--

LOCK TABLES `lineas_ctas_corrientes` WRITE;
/*!40000 ALTER TABLE `lineas_ctas_corrientes` DISABLE KEYS */;
INSERT INTO `lineas_ctas_corrientes` VALUES (68,'2014-04-09','cuota',20,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,35,0,1),(69,'2014-11-05','cuota',20,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,35,0,1),(70,'2015-06-03','cuota',20,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,35,0,1),(71,'2015-12-30','cuota',20,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,35,0,1),(72,'2016-07-27','cuota',20,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,35,0,1),(73,'2017-02-22','cuota',20,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,35,0,1),(74,'2017-09-20','cuota',20,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,35,0,1),(75,'2018-04-18','cuota',20,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,35,0,1),(76,'2018-11-14','cuota',20,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,35,0,1),(77,'2019-06-12','cuota',20,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,35,0,1),(78,'2020-01-08','cuota',20,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,35,0,1),(79,'2020-08-05','cuota',20,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,35,0,1),(80,'2014-11-05','cuota',50,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,36,0,1),(81,'2015-06-03','cuota',50,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,36,0,1),(82,'2015-12-30','cuota',50,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,36,0,1),(83,'2016-07-27','cuota',50,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,36,0,1),(84,'2017-02-22','cuota',50,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,36,0,1),(85,'2017-09-20','cuota',50,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,36,0,1),(86,'2018-04-18','cuota',50,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,36,0,1),(87,'2018-11-14','cuota',50,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,36,0,1),(88,'2019-06-12','cuota',50,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,36,0,1),(89,'2020-01-08','cuota',50,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,36,0,1),(90,'2020-08-05','cuota',50,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,36,0,1),(91,'2021-03-03','cuota',50,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,36,0,1),(92,'2014-04-09','cuota',100,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,37,0,1),(93,'2014-05-09','cuota',100,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,37,0,1),(94,'2014-06-09','cuota',100,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,37,0,1),(95,'2014-07-09','cuota',100,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,37,0,1),(96,'2014-08-09','cuota',100,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,37,0,1),(97,'2014-09-09','cuota',100,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,37,0,1),(98,'2014-10-09','cuota',100,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,37,0,1),(99,'2014-11-09','cuota',100,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,37,0,1),(100,'2014-12-09','cuota',100,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,37,0,1),(101,'2015-01-09','cuota',100,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,37,0,1),(102,'2015-02-09','cuota',100,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,37,0,1),(103,'2015-03-09','cuota',100,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,37,0,1);
/*!40000 ALTER TABLE `lineas_ctas_corrientes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `notas`
--

DROP TABLE IF EXISTS `notas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `notas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `motivo` varchar(45) DEFAULT NULL,
  `fecha_nota` date DEFAULT NULL,
  `dirigida_a` varchar(45) DEFAULT NULL,
  `expte_generado` varchar(45) DEFAULT NULL,
  `entidad_expte` varchar(45) DEFAULT NULL,
  `fecha_expte` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `notas`
--

LOCK TABLES `notas` WRITE;
/*!40000 ALTER TABLE `notas` DISABLE KEYS */;
INSERT INTO `notas` VALUES (1,'Nota 1','2014-01-13','Luis Mender Mender','23','32123','2014-01-14'),(3,'Nota 2','2014-01-13','Juan Perez','23','32123','2014-01-14'),(4,'Nota 3','2014-01-13','Pedro Fernandez','23','32123','2014-01-14'),(11,'Notas 222','2014-01-13','Pepito Gonzalez','23','32123','2014-01-14');
/*!40000 ALTER TABLE `notas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pacientes`
--

DROP TABLE IF EXISTS `pacientes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pacientes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `estado` varchar(45) DEFAULT NULL,
  `persona_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_Pacientes_personas1_idx` (`persona_id`),
  CONSTRAINT `fk_Pacientes_personas1` FOREIGN KEY (`persona_id`) REFERENCES `personas` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pacientes`
--

LOCK TABLES `pacientes` WRITE;
/*!40000 ALTER TABLE `pacientes` DISABLE KEYS */;
INSERT INTO `pacientes` VALUES (1,'activo',161),(2,'activo',162);
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
) ENGINE=InnoDB AUTO_INCREMENT=163 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `personas`
--

LOCK TABLES `personas` WRITE;
/*!40000 ALTER TABLE `personas` DISABLE KEYS */;
INSERT INTO `personas` VALUES (156,'Ricardo Luis','Mender','sarasa','rlmender@gmail.com','543815555123',NULL,''),(157,'Ricardo Luis','Mender','sarasa','rlmender@gmail.com','543815555123',NULL,''),(158,'Ricardo Luis','Mender','sarasa','rlmender@gmail.com','543815555123',NULL,''),(159,'Ricardo Luis','Mender','sarasa','rlmender@gmail.com','543815555123',NULL,''),(160,'Carlos','Paz','sarasa','rlmender@gmail.com','543815555123',NULL,''),(161,'Ricardo Luis','Mender','Uruguay 830','rlmender@gmail.com','4310450',NULL,'rh+'),(162,'Ana Josefina','Mender','Laprida 641','josefina.mender@gmail.com','4214144',NULL,'rh+');
/*!40000 ALTER TABLE `personas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `personas_has_capacitaciones`
--

DROP TABLE IF EXISTS `personas_has_capacitaciones`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `personas_has_capacitaciones` (
  `persona_id` int(11) NOT NULL,
  `capacitacion_id` int(11) NOT NULL,
  PRIMARY KEY (`persona_id`,`capacitacion_id`),
  KEY `fk_personas_has_capacitaciones_capacitaciones1_idx` (`capacitacion_id`),
  KEY `fk_personas_has_capacitaciones_personas1_idx` (`persona_id`),
  CONSTRAINT `fk_personas_has_capacitaciones_capacitaciones1` FOREIGN KEY (`capacitacion_id`) REFERENCES `capacitaciones` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_personas_has_capacitaciones_personas1` FOREIGN KEY (`persona_id`) REFERENCES `personas` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
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
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fecha_adelante` date DEFAULT NULL,
  `fecha_atras` date DEFAULT NULL,
  `tipos_plan_cuentas_id` int(11) NOT NULL,
  `persona_id` int(11) NOT NULL,
  PRIMARY KEY (`id`,`persona_id`),
  KEY `fk_plan_de_cuenta_tipos_plan_cuentas1_idx` (`tipos_plan_cuentas_id`),
  KEY `fk_plan_de_cuenta_personas1_idx` (`persona_id`),
  CONSTRAINT `fk_plan_de_cuenta_personas1` FOREIGN KEY (`persona_id`) REFERENCES `personas` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_plan_de_cuenta_tipos_plan_cuentas1` FOREIGN KEY (`tipos_plan_cuentas_id`) REFERENCES `tipos_plan_cuentas` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `plan_de_cuenta`
--

LOCK TABLES `plan_de_cuenta` WRITE;
/*!40000 ALTER TABLE `plan_de_cuenta` DISABLE KEYS */;
INSERT INTO `plan_de_cuenta` VALUES (35,'2014-04-09',NULL,1,158),(36,'2014-04-09',NULL,1,159),(37,'2014-04-09',NULL,1,160);
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
  `persona_id` int(11) NOT NULL,
  `grupo_sanguineo` varchar(45) DEFAULT NULL,
  `numero_ficha` int(11) NOT NULL,
  `monto` decimal(10,0) DEFAULT NULL,
  PRIMARY KEY (`id`,`numero_ficha`),
  UNIQUE KEY `numero_ficha_UNIQUE` (`numero_ficha`),
  KEY `fk_socios_personas1_idx` (`persona_id`),
  CONSTRAINT `fk_socios_personas1` FOREIGN KEY (`persona_id`) REFERENCES `personas` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COMMENT='	';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `socios`
--

LOCK TABLES `socios` WRITE;
/*!40000 ALTER TABLE `socios` DISABLE KEYS */;
INSERT INTO `socios` VALUES (8,'dni','29175956','sarasa','1982-01-18','mensual',NULL,158,NULL,5,NULL),(9,'dni','29175956','sarasa','1982-01-18','mensual',NULL,159,NULL,6,NULL),(10,'dni','29175956','sarasa','1982-01-18','mensual',NULL,160,NULL,7,NULL);
/*!40000 ALTER TABLE `socios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tipos_cuentas_corrientes`
--

DROP TABLE IF EXISTS `tipos_cuentas_corrientes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tipos_cuentas_corrientes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tipocuenta` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tipos_cuentas_corrientes`
--

LOCK TABLES `tipos_cuentas_corrientes` WRITE;
/*!40000 ALTER TABLE `tipos_cuentas_corrientes` DISABLE KEYS */;
INSERT INTO `tipos_cuentas_corrientes` VALUES (1,'efectivo debito'),(2,'efectivo credito'),(3,'cheque debito'),(4,'cheque credito'),(5,'donacion efectivo'),(6,'donacion cheque');
/*!40000 ALTER TABLE `tipos_cuentas_corrientes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tipos_plan_cuentas`
--

DROP TABLE IF EXISTS `tipos_plan_cuentas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tipos_plan_cuentas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `TipoPlan` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tipos_plan_cuentas`
--

LOCK TABLES `tipos_plan_cuentas` WRITE;
/*!40000 ALTER TABLE `tipos_plan_cuentas` DISABLE KEYS */;
INSERT INTO `tipos_plan_cuentas` VALUES (1,'socio'),(2,'judicial'),(3,'donacion'),(4,'otro plan');
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
INSERT INTO `users` VALUES (4,'admin@example.com','admin','3aa4b899cda42cb4079f07ad4f84dec0f790f67735c61cab192fd7507b6f05ee',60,1397349106);
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

-- Dump completed on 2014-04-12 23:02:45
