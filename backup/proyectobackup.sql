-- MariaDB dump 10.19  Distrib 10.4.25-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: proyecto
-- ------------------------------------------------------
-- Server version	10.4.25-MariaDB

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
-- Table structure for table `categorias`
--

DROP TABLE IF EXISTS `categorias`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `categorias` (
  `identificador` varchar(45) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `descripcion` longtext NOT NULL,
  PRIMARY KEY (`identificador`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categorias`
--

LOCK TABLES `categorias` WRITE;
/*!40000 ALTER TABLE `categorias` DISABLE KEYS */;
INSERT INTO `categorias` VALUES ('1','Aro','Si'),('2','Xd','Aro');
/*!40000 ALTER TABLE `categorias` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `citas`
--

DROP TABLE IF EXISTS `citas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `citas` (
  `identificador` int(11) NOT NULL AUTO_INCREMENT,
  `fecha` date NOT NULL,
  `hora` time NOT NULL,
  `Clientes_tipoidentificacion` enum('CC','TI','CE') NOT NULL,
  `Clientes_identificacion` varchar(45) NOT NULL,
  `Profesionales_tipoidentificacion` enum('CC','TI','CE') DEFAULT NULL,
  `Profesionales_Identificacion` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`identificador`),
  KEY `fk_citas_Clientes1` (`Clientes_tipoidentificacion`,`Clientes_identificacion`),
  KEY `fk_citas_Profesionales1` (`Profesionales_tipoidentificacion`,`Profesionales_Identificacion`),
  CONSTRAINT `fk_citas_Clientes1` FOREIGN KEY (`Clientes_tipoidentificacion`, `Clientes_identificacion`) REFERENCES `clientes` (`tipoidentificacion`, `identificacion`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_citas_Profesionales1` FOREIGN KEY (`Profesionales_tipoidentificacion`, `Profesionales_Identificacion`) REFERENCES `profesionales` (`tipoidentificacion`, `identificacion`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `citas`
--

LOCK TABLES `citas` WRITE;
/*!40000 ALTER TABLE `citas` DISABLE KEYS */;
/*!40000 ALTER TABLE `citas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `clientes`
--

DROP TABLE IF EXISTS `clientes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `clientes` (
  `tipoidentificacion` enum('CC','TI','CE') NOT NULL,
  `identificacion` varchar(45) NOT NULL,
  `nombres` varchar(45) NOT NULL,
  `apellidos` varchar(45) NOT NULL,
  `fechanacimiento` date NOT NULL,
  `direccion` varchar(45) NOT NULL,
  `estrato` enum('1','2','3','4','5','6') NOT NULL,
  `nombreacudiente` varchar(45) DEFAULT NULL,
  `apellidoacudiente` varchar(45) DEFAULT NULL,
  `fechanacimientoacudiente` date DEFAULT NULL,
  PRIMARY KEY (`tipoidentificacion`,`identificacion`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `clientes`
--

LOCK TABLES `clientes` WRITE;
/*!40000 ALTER TABLE `clientes` DISABLE KEYS */;
INSERT INTO `clientes` VALUES ('CC','1104','Fulano','De tal','2022-11-08','calle falsa','3','','','0000-00-00'),('CC','7','Nico','Ruiz','2022-11-16','Tr21#3A-110','3','Mario','Atencio','2022-11-16'),('TI','123','Elias','Benitez','2004-06-25','Tr21 #3A-110','2','Fulano','Méndez','2003-06-02'),('TI','5','Mario','Benitez ','2022-10-27','Tr21#3A-110','4','Mario','Martinez','2022-10-27'),('TI','6','Eliasib','Gomez','2022-11-15','calle falsa','','','','0000-00-00'),('CE','4','Nicolas','Ruiz','2022-10-27','Tr21#3A-110','4','Mario','Martinez','2022-10-27');
/*!40000 ALTER TABLE `clientes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contactos`
--

DROP TABLE IF EXISTS `contactos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `contactos` (
  `identificador` int(11) NOT NULL AUTO_INCREMENT,
  `telefonos` varchar(45) DEFAULT NULL,
  `correos` varchar(200) DEFAULT NULL,
  `Clientes_tipoidentificacion` enum('CC','TI','CE') DEFAULT NULL,
  `Clientes_identificacion` varchar(45) DEFAULT NULL,
  `Empleados_numeroidentificacion` varchar(45) DEFAULT NULL,
  `Empleados_tipoIdentificacion` enum('cc','ce') DEFAULT NULL,
  `Profesionales_tipoidentificacion` enum('CC','TI','CE') DEFAULT NULL,
  `Profesionales_Identificacion` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`identificador`),
  KEY `fk_contacto_Clientes1` (`Clientes_tipoidentificacion`,`Clientes_identificacion`),
  KEY `fk_contacto_Empleados1` (`Empleados_numeroidentificacion`,`Empleados_tipoIdentificacion`),
  KEY `fk_contacto_Profesionales1` (`Profesionales_tipoidentificacion`,`Profesionales_Identificacion`),
  CONSTRAINT `fk_contacto_Clientes1` FOREIGN KEY (`Clientes_tipoidentificacion`, `Clientes_identificacion`) REFERENCES `clientes` (`tipoidentificacion`, `identificacion`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_contacto_Empleados1` FOREIGN KEY (`Empleados_numeroidentificacion`, `Empleados_tipoIdentificacion`) REFERENCES `empleados` (`numeroidentificacion`, `tipoIdentificacion`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_contacto_Profesionales1` FOREIGN KEY (`Profesionales_tipoidentificacion`, `Profesionales_Identificacion`) REFERENCES `profesionales` (`tipoidentificacion`, `identificacion`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contactos`
--

LOCK TABLES `contactos` WRITE;
/*!40000 ALTER TABLE `contactos` DISABLE KEYS */;
/*!40000 ALTER TABLE `contactos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `diagnostico`
--

DROP TABLE IF EXISTS `diagnostico`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `diagnostico` (
  `Servicios_identificador` int(11) NOT NULL,
  `HistoriaClinica_identificador` int(11) NOT NULL,
  `diagnostico` longtext DEFAULT NULL,
  PRIMARY KEY (`Servicios_identificador`,`HistoriaClinica_identificador`),
  KEY `fk_Servicios_has_HistoriaClinica_HistoriaClinica1` (`HistoriaClinica_identificador`),
  CONSTRAINT `fk_Servicios_has_HistoriaClinica_HistoriaClinica1` FOREIGN KEY (`HistoriaClinica_identificador`) REFERENCES `historiasclinicas` (`identificador`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_Servicios_has_HistoriaClinica_Servicios1` FOREIGN KEY (`Servicios_identificador`) REFERENCES `servicios` (`identificador`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `diagnostico`
--

LOCK TABLES `diagnostico` WRITE;
/*!40000 ALTER TABLE `diagnostico` DISABLE KEYS */;
/*!40000 ALTER TABLE `diagnostico` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `elementos`
--

DROP TABLE IF EXISTS `elementos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `elementos` (
  `identificador` int(11) NOT NULL AUTO_INCREMENT,
  `tipoelemento` enum('MateriaPrima','Reactivo','Maquina') NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `precio` int(11) NOT NULL,
  PRIMARY KEY (`identificador`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `elementos`
--

LOCK TABLES `elementos` WRITE;
/*!40000 ALTER TABLE `elementos` DISABLE KEYS */;
INSERT INTO `elementos` VALUES (5,'MateriaPrima','qwerty',123456),(6,'Reactivo','Ok',2000);
/*!40000 ALTER TABLE `elementos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `empleados`
--

DROP TABLE IF EXISTS `empleados`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `empleados` (
  `numeroidentificacion` varchar(45) NOT NULL,
  `tipoIdentificacion` enum('cc','ce') NOT NULL,
  `nombres` varchar(45) NOT NULL,
  `apellidos` varchar(45) NOT NULL,
  `tipousuario` enum('secretaria','administrador','gerente') NOT NULL,
  PRIMARY KEY (`numeroidentificacion`,`tipoIdentificacion`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `empleados`
--

LOCK TABLES `empleados` WRITE;
/*!40000 ALTER TABLE `empleados` DISABLE KEYS */;
INSERT INTO `empleados` VALUES ('1','cc','Nico','Benitez ','administrador'),('1104008652','ce','Eliasib','Benitez ','gerente'),('2','cc','Mario','Martinez','secretaria');
/*!40000 ALTER TABLE `empleados` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `estudios`
--

DROP TABLE IF EXISTS `estudios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `estudios` (
  `identificador` int(11) NOT NULL AUTO_INCREMENT,
  `estudios` longtext NOT NULL,
  `Profesionales_tipoidentificacion` enum('CC','TI','CE') NOT NULL,
  `Profesionales_Identificacion` varchar(45) NOT NULL,
  PRIMARY KEY (`identificador`),
  KEY `fk_estudios_Profesionales1` (`Profesionales_tipoidentificacion`,`Profesionales_Identificacion`),
  CONSTRAINT `fk_estudios_Profesionales1` FOREIGN KEY (`Profesionales_tipoidentificacion`, `Profesionales_Identificacion`) REFERENCES `profesionales` (`tipoidentificacion`, `identificacion`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `estudios`
--

LOCK TABLES `estudios` WRITE;
/*!40000 ALTER TABLE `estudios` DISABLE KEYS */;
/*!40000 ALTER TABLE `estudios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `experticias`
--

DROP TABLE IF EXISTS `experticias`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `experticias` (
  `identificador` int(11) NOT NULL AUTO_INCREMENT,
  `experticia` longtext NOT NULL,
  `Profesionales_tipoidentificacion` enum('CC','TI','CE') NOT NULL,
  `Profesionales_Identificacion` varchar(45) NOT NULL,
  PRIMARY KEY (`identificador`),
  KEY `fk_experticias_Profesionales1` (`Profesionales_tipoidentificacion`,`Profesionales_Identificacion`),
  CONSTRAINT `fk_experticias_Profesionales1` FOREIGN KEY (`Profesionales_tipoidentificacion`, `Profesionales_Identificacion`) REFERENCES `profesionales` (`tipoidentificacion`, `identificacion`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `experticias`
--

LOCK TABLES `experticias` WRITE;
/*!40000 ALTER TABLE `experticias` DISABLE KEYS */;
/*!40000 ALTER TABLE `experticias` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `historiasclinicas`
--

DROP TABLE IF EXISTS `historiasclinicas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `historiasclinicas` (
  `identificador` int(11) NOT NULL AUTO_INCREMENT,
  `fechasesion` date NOT NULL,
  `peso` int(11) NOT NULL,
  `presionsitolica` int(11) NOT NULL,
  `presiondiastolica` int(11) NOT NULL,
  `derivacion` longtext DEFAULT NULL,
  `resultados` longtext DEFAULT NULL,
  `numeroSesiones` int(11) NOT NULL,
  `evolucion` enum('Positiva','Negativa') DEFAULT NULL,
  `Clientes_tipoidentificacion` enum('CC','TI','CE') NOT NULL,
  `Clientes_identificacion` varchar(45) NOT NULL,
  `Profesionales_tipoidentificacion` enum('CC','TI','CE') NOT NULL,
  `Profesionales_Identificacion` varchar(45) NOT NULL,
  PRIMARY KEY (`identificador`),
  KEY `fk_HistoriaClinica_Clientes1` (`Clientes_tipoidentificacion`,`Clientes_identificacion`),
  KEY `fk_HistoriaClinica_Profesionales1` (`Profesionales_tipoidentificacion`,`Profesionales_Identificacion`),
  CONSTRAINT `fk_HistoriaClinica_Clientes1` FOREIGN KEY (`Clientes_tipoidentificacion`, `Clientes_identificacion`) REFERENCES `clientes` (`tipoidentificacion`, `identificacion`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_HistoriaClinica_Profesionales1` FOREIGN KEY (`Profesionales_tipoidentificacion`, `Profesionales_Identificacion`) REFERENCES `profesionales` (`tipoidentificacion`, `identificacion`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `historiasclinicas`
--

LOCK TABLES `historiasclinicas` WRITE;
/*!40000 ALTER TABLE `historiasclinicas` DISABLE KEYS */;
/*!40000 ALTER TABLE `historiasclinicas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `profesionales`
--

DROP TABLE IF EXISTS `profesionales`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `profesionales` (
  `tipoidentificacion` enum('CC','TI','CE') NOT NULL,
  `identificacion` varchar(45) NOT NULL,
  `numerotarjetaprofesional` varchar(45) NOT NULL,
  `nombres` varchar(45) NOT NULL,
  `apellidos` varchar(45) NOT NULL,
  `estado` enum('Activo','Inactivo') NOT NULL,
  PRIMARY KEY (`tipoidentificacion`,`identificacion`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `profesionales`
--

LOCK TABLES `profesionales` WRITE;
/*!40000 ALTER TABLE `profesionales` DISABLE KEYS */;
INSERT INTO `profesionales` VALUES ('CC','1','1234567890','Juanesteban','Ruiz','Activo');
/*!40000 ALTER TABLE `profesionales` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `servicios`
--

DROP TABLE IF EXISTS `servicios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `servicios` (
  `identificador` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) NOT NULL,
  `costo` int(11) NOT NULL,
  `precio` int(11) NOT NULL,
  `porcentajeganancia` int(11) NOT NULL,
  `peso` enum('Incremento','Decremento') DEFAULT NULL,
  `presionsistolica` enum('Incremento','Decremento') DEFAULT NULL,
  `presiondiastolica` enum('Incremento','Decremento') DEFAULT NULL,
  `evolucion` enum('Positiva','Negativa') NOT NULL,
  `Categorias_identificador` varchar(45) NOT NULL,
  PRIMARY KEY (`identificador`),
  KEY `Categorias_identificador` (`Categorias_identificador`),
  CONSTRAINT `Categorias_identificador` FOREIGN KEY (`Categorias_identificador`) REFERENCES `categorias` (`identificador`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `servicios`
--

LOCK TABLES `servicios` WRITE;
/*!40000 ALTER TABLE `servicios` DISABLE KEYS */;
/*!40000 ALTER TABLE `servicios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `servicioselementos`
--

DROP TABLE IF EXISTS `servicioselementos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `servicioselementos` (
  `Elementos_identificador` int(11) NOT NULL,
  `Servicios_identificador` int(11) NOT NULL,
  PRIMARY KEY (`Elementos_identificador`,`Servicios_identificador`),
  KEY `fk_ServiciosElementos_Servicios1` (`Servicios_identificador`),
  CONSTRAINT `fk_ServiciosElementos_Elementos1` FOREIGN KEY (`Elementos_identificador`) REFERENCES `elementos` (`identificador`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_ServiciosElementos_Servicios1` FOREIGN KEY (`Servicios_identificador`) REFERENCES `servicios` (`identificador`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `servicioselementos`
--

LOCK TABLES `servicioselementos` WRITE;
/*!40000 ALTER TABLE `servicioselementos` DISABLE KEYS */;
/*!40000 ALTER TABLE `servicioselementos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuarios` (
  `usuario` varchar(45) NOT NULL,
  `contraseña` varbinary(50) NOT NULL,
  `tipousuario` enum('cliente','secretaria','profesional','administrador','gerente') NOT NULL,
  `Clientes_tipoidentificacion` enum('CC','TI','CE') DEFAULT NULL,
  `Clientes_identificacion` varchar(45) DEFAULT NULL,
  `Empleados_numeroidentificacion` varchar(45) DEFAULT NULL,
  `Empleados_tipoIdentificacion` enum('cc','ce') DEFAULT NULL,
  `Profesionales_tipoidentificacion` enum('CC','TI','CE') DEFAULT NULL,
  `Profesionales_Identificacion` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`usuario`),
  KEY `fk_DatosComunicacion_Clientes1` (`Clientes_tipoidentificacion`,`Clientes_identificacion`),
  KEY `fk_DatosComunicacion_Empleados1` (`Empleados_numeroidentificacion`,`Empleados_tipoIdentificacion`),
  KEY `fk_DatosComunicacion_Profesionales1` (`Profesionales_tipoidentificacion`,`Profesionales_Identificacion`),
  CONSTRAINT `fk_DatosComunicacion_Clientes1` FOREIGN KEY (`Clientes_tipoidentificacion`, `Clientes_identificacion`) REFERENCES `clientes` (`tipoidentificacion`, `identificacion`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_DatosComunicacion_Empleados1` FOREIGN KEY (`Empleados_numeroidentificacion`, `Empleados_tipoIdentificacion`) REFERENCES `empleados` (`numeroidentificacion`, `tipoIdentificacion`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_DatosComunicacion_Profesionales1` FOREIGN KEY (`Profesionales_tipoidentificacion`, `Profesionales_Identificacion`) REFERENCES `profesionales` (`tipoidentificacion`, `identificacion`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuarios`
--

LOCK TABLES `usuarios` WRITE;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` VALUES ('cliente','','cliente','TI','6',NULL,NULL,NULL,NULL),('Cliente123','123','cliente','CC','7',NULL,NULL,NULL,NULL),('Eliasib123','123','gerente',NULL,NULL,'1104008652','ce',NULL,NULL),('Eliasib25','123','cliente','TI','123',NULL,NULL,NULL,NULL),('Fulano123','123','cliente','CC','1104',NULL,NULL,NULL,NULL),('Juanesteban123','123','profesional',NULL,NULL,'1','cc',NULL,NULL),('Mario123','123','secretaria',NULL,NULL,'2','cc',NULL,NULL),('Nico123','123','administrador',NULL,NULL,'1','cc',NULL,NULL);
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ventadetalles`
--

DROP TABLE IF EXISTS `ventadetalles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ventadetalles` (
  `Servicios_identificador` int(11) NOT NULL,
  `ventasEncabezado_identificador` int(11) NOT NULL,
  `precio` int(11) NOT NULL,
  PRIMARY KEY (`Servicios_identificador`,`ventasEncabezado_identificador`),
  KEY `fk_ventadetalles_ventasEncabezado1` (`ventasEncabezado_identificador`),
  CONSTRAINT `fk_ventadetalles_ventasEncabezado1` FOREIGN KEY (`ventasEncabezado_identificador`) REFERENCES `ventasencabezado` (`identificador`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_ventasEncabezado_has_Servicios_Servicios1` FOREIGN KEY (`Servicios_identificador`) REFERENCES `servicios` (`identificador`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ventadetalles`
--

LOCK TABLES `ventadetalles` WRITE;
/*!40000 ALTER TABLE `ventadetalles` DISABLE KEYS */;
/*!40000 ALTER TABLE `ventadetalles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ventasencabezado`
--

DROP TABLE IF EXISTS `ventasencabezado`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ventasencabezado` (
  `identificador` int(11) NOT NULL AUTO_INCREMENT,
  `fecha` datetime NOT NULL,
  `total` int(11) NOT NULL,
  `Clientes_tipoidentificacion` enum('CC','TI','CE') NOT NULL,
  `Clientes_identificacion` varchar(45) NOT NULL,
  PRIMARY KEY (`identificador`),
  KEY `fk_ventasEncabezado_Clientes1` (`Clientes_tipoidentificacion`,`Clientes_identificacion`),
  CONSTRAINT `fk_ventasEncabezado_Clientes1` FOREIGN KEY (`Clientes_tipoidentificacion`, `Clientes_identificacion`) REFERENCES `clientes` (`tipoidentificacion`, `identificacion`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ventasencabezado`
--

LOCK TABLES `ventasencabezado` WRITE;
/*!40000 ALTER TABLE `ventasencabezado` DISABLE KEYS */;
/*!40000 ALTER TABLE `ventasencabezado` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'proyecto'
--
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_ZERO_IN_DATE,NO_ZERO_DATE,NO_ENGINE_SUBSTITUTION' */ ;
/*!50003 DROP PROCEDURE IF EXISTS `crudcategorias` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_general_ci */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `crudcategorias`(poperacion int, pidentificador int,
pnombre varchar(45), pdescripcion longtext)
BEGIN
Declare vnumeroregistros int;

   if (poperacion = 0) then
		   
		  Select count(1) into vnumeroregistros
		  from categorias
		  where identificador = pidentificador;
		  
		  if (vnumeroregistros = 0) then
			 Insert Into 
			  categorias
			  values(pidentificador, pnombre, pdescripcion);
		  else   
			 update categorias set nombre = pnombre, descripcion = pdescripcion 
			 where identificador = pidentificador;
		 end if;  
    else
        Delete from categorias 
        where identificador = pidentificador;
	end if;   
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_ZERO_IN_DATE,NO_ZERO_DATE,NO_ENGINE_SUBSTITUTION' */ ;
/*!50003 DROP PROCEDURE IF EXISTS `crudcitas` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_general_ci */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `crudcitas`(poperacion int ,pidentificador int,
pfecha date,phora time,ptipoidentificacioncliente ENUM('CC', 'TI', 'CE'),
pidentificacioncliente VARCHAR(45),ptipoidentificacionprofesional ENUM('CC', 'TI', 'CE')
, pidentificacionprofesional varchar(45))
BEGIN

declare vregistros int;

if (poperacion = 0) then

select count(1) into vregistros
from citas
where identificador = pidentificador;

if (vregistros = 0) then
insert into citas values (pidentificador,pfecha,phora, ptipoidentificacioncliente
,pidentificacioncliente, ptipoidentificacionprofesional, pidentificacionprofesional);

else 

update citas 
set fecha = pfecha, hora = phora
where identificador = pidentificador;

end if;
else 
delete from citas where identificador = pidentificador;
end if;

END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_ZERO_IN_DATE,NO_ZERO_DATE,NO_ENGINE_SUBSTITUTION' */ ;
/*!50003 DROP PROCEDURE IF EXISTS `crudclientes` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_general_ci */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `crudclientes`(poperacion int,ptipoidentificacion ENUM('CC', 'TI', 'CE'),
pidentificacion VARCHAR(45), pnombres VARCHAR(45), papellidos VARCHAR(45),pfechanacimiento date,
pdireccion VARCHAR(45), pestrato ENUM('1', '2', '3', '4', '5', '6'), 
pnombresacudiente VARCHAR(45),papellidosacudiente VARCHAR(45), pfechanacimientoacudiente date)
BEGIN

declare vregistros int;

if(poperacion = 0)then

select count(1) into vregistros
from clientes 
where tipoidentificacion = ptipoidentificacion 
and identificacion = pidentificacion;

if(vregistros = 0)then

insert into clientes values (ptipoidentificacion,pidentificacion,pnombres,papellidos,pfechanacimiento,
pdireccion,pestrato,pnombresacudiente,papellidosacudiente,pfechanacimientoacudiente);

else 
update clientes set tipoidentificacion = ptipoidentificacion, nombres = pnombres,
apellidos = papellidos, fechanacimiento = pfechanacimiento, direccion = pdireccion, 
estrato = pestrato, nombreacudiente = pnombresacudiente, apellidoacudiente = papellidosacudiente,
fechanacimientoacudiente = pfechanacimientoacudiente
where tipoidentificacion = ptipoidentificacion and identificacion = pidentificacion;

end if;

else

delete from clientes where tipoidentificacion = ptipoidentificacion 
and identificacion = pidentificacion;
end if;


END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_ZERO_IN_DATE,NO_ZERO_DATE,NO_ENGINE_SUBSTITUTION' */ ;
/*!50003 DROP PROCEDURE IF EXISTS `crudcontactos` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_general_ci */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `crudcontactos`(poperacion int, pidentificador int,ptelefonos varchar(45),
 pcorreos varchar(200), pClientes_tipoidentificacion ENUM('CC', 'TI', 'CE'),
 pClientes_identificacion varchar(45),Empleados_numeroidentificacion varchar(45)
 ,pEmpleados_tipoIdentificacion ENUM('CC', 'TI', 'CE'),
 pProfesionales_tipoidentificacion ENUM('CC', 'TI', 'CE'), 
 pProfesionales_Identificacion varchar(45))
BEGIN

declare vregistros int;

if(poperacion = 0)then
select coount(1) into vregistros 
from contactos 
where identificador = pidentificador;

if(vregistros = 0)then

insert into contactos values(pidentificador,ptelefonos,pcorreos,pClientes_tipoidentificacion,
pClientes_identificacion, pEmpleados_numeroidentificacion, pEmpleados_tipoIdentificacion,
 pProfesionales_tipoidentificacion,pProfesionales_Identificacion);

end if;
delete from contactos where identificador = pidentificador;
end if;
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_ZERO_IN_DATE,NO_ZERO_DATE,NO_ENGINE_SUBSTITUTION' */ ;
/*!50003 DROP PROCEDURE IF EXISTS `cruddiagnostico` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_general_ci */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `cruddiagnostico`(poperacion int, pServicios_identificador int,
 pHistoriaClinica_identificador int, pdiagnostico longtext)
BEGIN

if(poperacion = 0) then 

insert into diagnostico values(pServicios_identificador,pHistoriaClinica_identificador,
pdiagnostico);

end if;


END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_ZERO_IN_DATE,NO_ZERO_DATE,NO_ENGINE_SUBSTITUTION' */ ;
/*!50003 DROP PROCEDURE IF EXISTS `crudelementos` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_general_ci */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `crudelementos`(poperacion int,pidentificador int,
ptipoelemento enum('MateriaPrima','Reactivo','Maquina')
,pnombre varchar (45), pprecio int)
BEGIN

declare vregistros int;

if (poperacion = 0) then
select count(1) into vregistros 
from elementos 
where identificador = pidentificador;

if(vregistros = 0)then
insert into 
elementos 
values (pidentificador, ptipoelemento, pnombre, pprecio);
else
update elementos set tipoelemento = ptipoelemento, 
nombre = pnombre , precio = pprecio
where identificador = pidentificador;

end if;
else 
delete from elementos
where identificador = pidentificador;
end if;
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_ZERO_IN_DATE,NO_ZERO_DATE,NO_ENGINE_SUBSTITUTION' */ ;
/*!50003 DROP PROCEDURE IF EXISTS `crudempleados` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_general_ci */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `crudempleados`(poperacion int,pnumeroidentificacion VARCHAR(45), 
ptipoidentificacion ENUM('cc', 'ce'), pnombres VARCHAR(45), papellidos varchar(45))
BEGIN

declare vregistros int;

if(poperacion = 0)then 

select count(1) into vregistros
from empleados 
where numeroidentificacion = pnumeroidentificacion and tipoidentificacion = ptipoidentificacion;

if(vregistros = 0)then 

insert into empleados values (pnumeroidentificacion, ptipoidentificacion, pnombres, papellidos); 

else 

update empleados set nombres = pnombres, apellidos = papellidos
where numeroidentificacion = pnumeroidentificacion and tipoidentificacion = ptipoidentificacion;

end if;

else 

delete from empleados where numeroidentificacion = pnumeroidentificacion 
and tipoidentificacion = ptipoidentificacion;

end if;

END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_ZERO_IN_DATE,NO_ZERO_DATE,NO_ENGINE_SUBSTITUTION' */ ;
/*!50003 DROP PROCEDURE IF EXISTS `crudestudios` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_general_ci */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `crudestudios`(poperacion int,pidentificador int, pestudios longtext, 
pProfesionales_tipoidentificacion ENUM('CC', 'TI', 'CE'),
pProfesionales_Identificacion varchar(45))
BEGIN

if(poperacion = 0)then

insert into estudios values(pidentificador,pestudios, 
pProfesionales_tipoidentificacion, pProfesionales_Identificacion);

else if(poperacion = 1)then

delete from estudios where identificador = pidentificador; 

end if;
end if;

END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_ZERO_IN_DATE,NO_ZERO_DATE,NO_ENGINE_SUBSTITUTION' */ ;
/*!50003 DROP PROCEDURE IF EXISTS `crudexperticias` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_general_ci */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `crudexperticias`(poperacion int, pidentificador int, pexperticia longtext,
pProfesionales_tipoidentificacion ENUM('CC', 'TI', 'CE'), pProfesionales_Identificacion varchar(45) )
BEGIN

if(poperacion = 0)then

insert into experticias values(pidentificador,pexperticia,pProfesionales_tipoidentificacion,
pProfesionales_Identificacion);


else if (poperacion = 1) then 

delete from experticias where identificador = pidentificador;

end if;

end if;

END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_ZERO_IN_DATE,NO_ZERO_DATE,NO_ENGINE_SUBSTITUTION' */ ;
/*!50003 DROP PROCEDURE IF EXISTS `crudhistoriasclinicas` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_general_ci */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `crudhistoriasclinicas`(poperacion int, 
pidentificador int, pfechasesion date,
ppeso int, ppresionsitolica int, ppresiondiastolica int, pderivacion longtext,
presultados longtext, pnumeroSesiones int, pevolucion ENUM('Positiva', 'Negativa'),
pClientes_tipoidentificacion ENUM('CC', 'TI', 'CE'), pClientes_identificacion varchar(45),
 pProfesionales_tipoidentificacion ENUM('CC', 'TI', 'CE'), 
 pProfesionales_Identificacion varchar(45))
BEGIN

if(poperacion = 0)then

insert into historiasclinicas values(pidentificador,pfechasesion,ppeso,ppresionsitolica,
ppresiondiastolica, pderivacion, presultados, pnumeroSesiones, pevolucion,
pClientes_tipoidentificacion, pClientes_identificacion, pProfesionales_tipoidentificacion,
pProfesionales_Identificacion);
 
 else if(poperacion = 1)then
 
 delete from historiasclinicas where identificador = pidentificador;
 
 end if;
 
 end if;
 

END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_ZERO_IN_DATE,NO_ZERO_DATE,NO_ENGINE_SUBSTITUTION' */ ;
/*!50003 DROP PROCEDURE IF EXISTS `crudprofesionales` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_general_ci */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `crudprofesionales`(poperacion int, ptipoidentificacion ENUM('CC', 'TI', 'CE')
, pidentificacion varchar (45), pnumerotarjetaprofesional varchar(45), pnombres varchar (45),
 papellidos varchar(45), pestado ENUM('Activo', 'Inactivo'))
BEGIN

declare vregistros int;

if(poperacion = 0)then

select count(1) into vregistros
from profesionales 
where tipoidentificacion = ptipoidentificacion and identificacion = pidentificacion;

if(vregistros = 0)then

insert into profesionales values(ptipoidentificacion,pidentificacion, pnumerotarjetaprofesional,
pnombres, papellidos, pestado);

else 

update profesionales set nombres = pnombres, apellidos = papellidos, estado = pestado
where tipoidentificacion = ptipoidentificacion and identificacion = pidentificacion;

end if;

else 

delete from profesionales where tipoidentificacion = ptipoidentificacion 
and identificacion = pidentificacion;

end if;
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_ZERO_IN_DATE,NO_ZERO_DATE,NO_ENGINE_SUBSTITUTION' */ ;
/*!50003 DROP PROCEDURE IF EXISTS `crudservicios` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_general_ci */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `crudservicios`(poperacion int, pidentificador int, pnombre varchar(45), 
pporcentaje int, 
ppeso enum ('Incremento','Decremento'), ppresionsistolica enum('Incremento','Decremento'),
ppresiondiastolica enum('Incremento','Decremento'), pevolucion enum('positiva','negativa'),
pcategoriaid varchar(45), pelementoid int)
BEGIN

declare vregistros int;
declare vcosto int;
declare vprecio int;

if(poperacion = 0) then

select count(1) into vregistros
from servicios 
where identificador = pidentificador;

if(vregistros = 0) then 

insert into servicios values(pidentificador,pnombre, 0, 0, pporcentaje,ppeso,
ppresionsistolica, ppresiondiastolica,pevolucion,pcategoriaid);

insert into servicioselementos values(pelementoid,pidentificador);

select sum(e.precio) into vcosto
from ServiciosElementos se, elementos e  
where se.servicios_identificador = pidentificador and 
se.elementos_identificador = e.identificador;

update servicios set costo = vcosto 
where identificador = pidentificador;

set vprecio = (vcosto*pporcentaje)/100;

update servicios set precio = vprecio
where identificador = pidentificador;

end if;

end if;
 


END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_ZERO_IN_DATE,NO_ZERO_DATE,NO_ENGINE_SUBSTITUTION' */ ;
/*!50003 DROP PROCEDURE IF EXISTS `crudservicioselementos` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_general_ci */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `crudservicioselementos`(poperacion int, pElementos_identificador int,
pServicios_identificador int )
BEGIN

if(poperacion = 0)then 

insert into servicioselementos values(pElementos_identificador,pServicios_identificador);

else if (poperacion = 1)then

delete from servicioselementos where Servicios_identificador = pServicios_identificador;

end if;

end if; 

END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_ZERO_IN_DATE,NO_ZERO_DATE,NO_ENGINE_SUBSTITUTION' */ ;
/*!50003 DROP PROCEDURE IF EXISTS `crudusuarios` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_general_ci */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `crudusuarios`(poperacion int, 
pusuario VARCHAR(45),
pcontraseña VARCHAR(50),
ptipousuario ENUM('cliente', 'secretaria', 'pofesional', 'administrador', 'gerente'),
pClientes_tipoidentificacion ENUM('CC', 'TI', 'CE'),
pClientes_identificacion VARCHAR(45), 
pEmpleados_numeroidentificacion VARCHAR(45) ,
pEmpleados_tipoIdentificacion ENUM('CC', 'TI', 'CE'),
pProfesionales_tipoidentificacion ENUM('CC', 'TI', 'CE'),
 pProfesionales_Identificacion  VARCHAR(45))
BEGIN

declare vregistros int;

if(poperacion = 0)then
select count(1) into vregistros
from usuarios 
where usuario = pusuario;

if(vregistros = 0)then

insert into usuarios values (pusuario,pcontraseña,ptipousuario,
pClientes_tipoidentificacion,pClientes_identificacion,
pEmpleados_numeroidentificacion,pEmpleados_tipoIdentificacion,
pProfesionales_tipoidentificacion, pProfesionales_Identificacion);

else 

update usuarios set contraseña = pcontraseña, tipousuario = ptipousuario
where usuario = pusuario;

end if;
else 
delete from usuarios where usuario = pusuario;
end if;
END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_ZERO_IN_DATE,NO_ZERO_DATE,NO_ENGINE_SUBSTITUTION' */ ;
/*!50003 DROP PROCEDURE IF EXISTS `crudventasdetalles` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_general_ci */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `crudventasdetalles`(poperacion int, pServicios_identificador int,
pventasEncabezado_identificador int, pprecio int )
BEGIN

if(poperacion = 0)then

insert into ventasdetalles values(pServicios_identificador,pventasEncabezado_identificador,
pprecio);

end if;

END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = 'NO_ZERO_IN_DATE,NO_ZERO_DATE,NO_ENGINE_SUBSTITUTION' */ ;
/*!50003 DROP PROCEDURE IF EXISTS `crudventasencabezados` */;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8mb4 */ ;
/*!50003 SET character_set_results = utf8mb4 */ ;
/*!50003 SET collation_connection  = utf8mb4_general_ci */ ;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `crudventasencabezados`(poperacion int, pidentificador int,
pfecha date, ptotal int, pClientes_tipoidentificacion ENUM('CC', 'TI', 'CE'),
pClientes_identificacion varchar(45))
BEGIN

if(poperacion = 1)then

insert into ventasencabezados values(pidentificador,pfecha,ptotal,
pClientes_tipoidentificacion, pClientes_identificacion);

end if;

END ;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-11-17 10:38:18
