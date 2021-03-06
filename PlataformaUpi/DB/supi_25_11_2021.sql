/*
SQLyog Ultimate v11.11 (64 bit)
MySQL - 5.5.5-10.4.21-MariaDB : Database - supi
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`supi` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `supi`;

/*Table structure for table `  talentos` */

DROP TABLE IF EXISTS `  talentos`;

CREATE TABLE `  talentos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombreTalento` varchar(100) DEFAULT NULL,
  `nacionalidadTalento` varchar(60) DEFAULT NULL,
  `tipoDocumentoTalento` varchar(60) DEFAULT NULL,
  `numDocumentoTalento` int(25) DEFAULT NULL,
  `telefonoTalento` int(25) DEFAULT NULL,
  `correoElectonicoTalento` varchar(40) DEFAULT NULL,
  `direccionCompleta` varchar(100) DEFAULT NULL,
  `registro_idRegistro` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `registro_idRegistro` (`registro_idRegistro`),
  CONSTRAINT `  talentos_ibfk_1` FOREIGN KEY (`registro_idRegistro`) REFERENCES `registro` (`idRegistro`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `  talentos` */

/*Table structure for table `campos_x_formulario` */

DROP TABLE IF EXISTS `campos_x_formulario`;

CREATE TABLE `campos_x_formulario` (
  `idCampos_x_Formulario` int(11) NOT NULL AUTO_INCREMENT,
  `Formulario_idFormulario` int(11) NOT NULL,
  `campo` varchar(45) NOT NULL,
  `activo` int(11) NOT NULL,
  `tipo_campo` int(11) NOT NULL,
  PRIMARY KEY (`idCampos_x_Formulario`),
  KEY `fk_Campos_x_Formulario_Formulario1_idx` (`Formulario_idFormulario`),
  CONSTRAINT `fk_Campos_x_Formulario_Formulario1` FOREIGN KEY (`Formulario_idFormulario`) REFERENCES `formulario` (`idFormulario`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `campos_x_formulario` */

/*Table structure for table `centros_formacion` */

DROP TABLE IF EXISTS `centros_formacion`;

CREATE TABLE `centros_formacion` (
  `idcentros_formacion` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) NOT NULL,
  `activo` int(11) NOT NULL,
  PRIMARY KEY (`idcentros_formacion`)
) ENGINE=InnoDB AUTO_INCREMENT=151 DEFAULT CHARSET=utf8mb4;

/*Data for the table `centros_formacion` */

insert  into `centros_formacion`(`idcentros_formacion`,`nombre`,`activo`) values (1,'Despacho Direcci??n',1),(2,'Centro para la Biodiversidad y el Turismo del',1),(3,'Despacho Direcci??n',1),(4,'Centro de los Recursos Naturales Renovables -',1),(5,'Centro del Dise??o y Manufactura del Cuero',1),(6,'Centro de Formaci??n en Dise??o, Confecci??n y M',1),(7,'Centro para el Desarrollo del H??bitat y la Co',1),(8,'Centro de Tecnolog??a de la Manufactura Avanza',1),(9,'Centro Tecnol??gico del Mobiliario',1),(10,'Centro Textil y de Gesti??n Industrial',1),(11,'Centro de Comercio',1),(12,'Centro de Servicios de Salud',1),(13,'Centro de Servicios y Gesti??n Empresarial ',1),(14,'Complejo Tecnol??gico para la Gesti??n Agroempr',1),(15,'Complejo Tecnol??gico Minero Agroempresarial ',1),(16,'Centro de la Innovaci??n, la Agroindustria y l',1),(17,'Complejo Tecnol??gico Agroindustrial, Pecuario',1),(18,'Complejo Tecnol??gico, Tur??stico y Agroindustr',1),(19,'Centro de Formaci??n Minero Ambiental',1),(20,'Despacho Direcci??n',1),(21,'Centro de Gesti??n y Desarrollo Agroindustrial',1),(22,'Despacho Direcci??n',1),(23,'Centro para el Desarrollo Agroecologico y Agr',1),(24,'Centro Nacional Colombo Alem??n',1),(25,'Centro Industrial y de Aviaci??n  ',1),(26,'Centro de Comercio y Servicios',1),(27,'Despacho Direcci??n',1),(28,'Centro Agroempresarial y Minero',1),(29,'Centro Internacional N??utico, Fluvial y Portu',1),(30,'Centro para la Industria Petroqu??mica',1),(31,'Centro de Comercio y Servicios',1),(32,'Despacho Direcci??n',1),(33,'Centro de Desarrollo Agropecuario y Agroindus',1),(34,'Centro  Minero',1),(35,'Centro de Gesti??n Administrativa y Fortalecim',1),(36,'Centro Industrial de Mantenimiento y Manufact',1),(37,'Despacho Direcci??n',1),(38,'Centro para la Formaci??n Cafetera',1),(39,'Centro de Automatizaci??n Industrial',1),(40,'Centro de Procesos Industriales y Construcci??',1),(41,'Centro de Comercio y Servicios',1),(42,'Centro Pecuario y Agroempresarial',1),(43,'Despacho Direcci??n',1),(44,'Centro Tecnol??gico de la Amazonia',1),(45,'Despacho Direcci??n',1),(46,'Centro Agroindustrial y Fortalecimiento Empre',1),(47,'Despacho Direcci??n',1),(48,'Centro Agropecuario ',1),(49,'Centro de Teleinform??tica y Producci??n Indust',1),(50,'Centro de Comercio y Servicios',1),(51,'Despacho Direcci??n',1),(52,'Centro Biotecnol??gico del Caribe',1),(53,'Centro Agroempresarial',1),(54,'Centro de Operaci??n y Mantenimiento Minero',1),(55,'Despacho Direcci??n',1),(56,'Centro de Recursos Naturales, Industria y Bio',1),(57,'Despacho Direcci??n',1),(58,'Centro Agropecuario y de Biotecnolog??a el Por',1),(59,'Centro de Comercio, Industria y Turismo de C??',1),(60,'Despacho Direcci??n',1),(61,'Centro Industrial y de Desarrollo Empresarial',1),(62,'Centro de Desarrollo Agroindustrial y Empresa',1),(63,'Centro Agroecol??gico y Empresarial ',1),(64,'Centro de la Tecnolog??a de Dise??o y la Produc',1),(65,'Centro de Biotecnolog??a Agropecuaria',1),(66,'Centro de Desarrollo Agroempresarial ',1),(67,'Despacho Direcci??n',1),(68,'Centro de Tecnolog??as para la Construcci??n y ',1),(69,'Centro de Electricidad, Electr??nica y Telecom',1),(70,'Centro de Gesti??n Industrial',1),(71,'Centro de Manufactura en Textil y Cuero',1),(72,'Centro de Tecnolog??as del Transporte',1),(73,'Centro Metalmec??nico',1),(74,'Centro de Materiales y Ensayos',1),(75,'Centro de Dise??o y Metrolog??a',1),(76,'Centro para la Industria de la Comunicaci??n G',1),(77,'Centro de Gesti??n de Mercados, Log??stica y Te',1),(78,'Centro de Formaci??n de Talento Humano en Salu',1),(79,'Centro de Gesti??n Administrativa',1),(80,'Centro de Servicios Financieros',1),(81,'Centro Nacional de Hoteleria, Turismo y Alime',1),(82,'Centro de Formaci??n en Actividad F??sica y Cul',1),(83,'Despacho Direcci??n',1),(84,'Centro Ambiental y Ecotur??stico del Nororient',1),(85,'Despacho Direcci??n',1),(86,'Centro Industrial y de Energ??as Alternativas',1),(87,'Centro Agroempresarial y Acu??cola',1),(88,'Despacho Direcci??n',1),(89,'Centro de Desarrollo Agroindustrial, Tur??stic',1),(90,'Despacho Direcci??n',1),(91,'Centro de Formaci??n Agroindustrial',1),(92,'Centro Agroempresarial y Desarrollo Pecuario ',1),(93,'Centro de Desarrollo Agroempresarial y Tur??st',1),(94,'Centro de la Industria, la Empresa y los Serv',1),(95,'Centro de Gesti??n y Desarrollo Sostenible Sur',1),(96,'Despacho Direcci??n',1),(97,'Centro Acu??cola y Agroindustrial de Gaira',1),(98,'Centro de Log??stica y Promoci??n Ecotur??stica ',1),(99,'Despacho Direcci??n',1),(100,'Centro Agroindustrial del Meta',1),(101,'Centro de Industria y Servicios del Meta',1),(102,'Despacho Direcci??n',1),(103,'Centro Sur Colombiano de Log??stica Internacio',1),(104,'Centro Agroindustrial y Pesquero de la Costa ',1),(105,'Centro Internacional de Producci??n Limpia - L',1),(106,'Despacho Direcci??n',1),(107,'Centro de Formaci??n para el Desarrollo Rural ',1),(108,'Centro de la Industria, la Empresa y los Serv',1),(109,'Despacho Direcci??n',1),(110,'Centro Agroforestal y Acu??cola Arapaima',1),(111,'Despacho Direcci??n',1),(112,'Centro Agroindustrial',1),(113,'Centro para el Desarrollo Tecnol??gico de la C',1),(114,'Centro de Comercio y Turismo',1),(115,'Despacho Direcci??n',1),(116,'Centro Atenci??n Sector Agropecuario',1),(117,'Centro de Dise??o e Innovaci??n Tecnol??gica Ind',1),(118,'Centro de Comercio y Servicios',1),(119,'Despacho Direcci??n',1),(120,'Centro de Formaci??n Tur??stica, Gente de Mar y',1),(121,'Despacho Direcci??n',1),(122,'Centro Atenci??n Sector Agropecuario',1),(123,'Centro Industrial de Mantenimiento Integral',1),(124,'Centro Industrial del Dise??o y la Manufactura',1),(125,'Centro de Servicios Empresariales y Tur??stico',1),(126,'Centro Industrial y del Desarrollo Tecnol??gic',1),(127,'Centro Agrotur??stico',1),(128,'Centro Agroempresarial y Tur??stico de los And',1),(129,'Centro de Gesti??n Agroempresarial del Oriente',1),(130,'Despacho Direcci??n',1),(131,'Centro de la Innovaci??n, la Tecnolog??a y los ',1),(132,'Despacho Direcci??n',1),(133,'Centro Agropecuario la Granja',1),(134,'Centro de Industria y Construcci??n',1),(135,'Centro de Comercio y Servicios',1),(136,'Despacho Direcci??n',1),(137,'Centro Agropecuario de Buga',1),(138,'Centro Latinoamericano de  Especies Menores',1),(139,'Centro N??utico Pesquero de Buenaventura',1),(140,'Centro de Electricidad y Automatizaci??n Indus',1),(141,'Centro de la Construcci??n',1),(142,'Centro de Dise??o Tecnol??gico Industrial',1),(143,'Centro Nacional de Asistencia T??cnica a la In',1),(144,'Centro de Gesti??n Tecnol??gica de Servicios',1),(145,'Centro de Tecnolog??as Agroindustriales',1),(146,'Centro de Biotecnolog??a Industrial',1),(147,'Despacho Direcci??n',1),(148,'Centro Agropecuario y de Servicios Ambientale',1),(149,'Despacho Direcci??n',1),(150,'Centro de Producci??n y Transformaci??n Agroind',1);

/*Table structure for table `contacto` */

DROP TABLE IF EXISTS `contacto`;

CREATE TABLE `contacto` (
  `idContacto` int(11) NOT NULL AUTO_INCREMENT,
  `nombres` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `telefono` varchar(150) NOT NULL,
  PRIMARY KEY (`idContacto`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `contacto` */

/*Table structure for table `contenidos` */

DROP TABLE IF EXISTS `contenidos`;

CREATE TABLE `contenidos` (
  `idContenidos` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_contenido` varchar(45) NOT NULL,
  `activo` int(11) NOT NULL,
  PRIMARY KEY (`idContenidos`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `contenidos` */

/*Table structure for table `departamento` */

DROP TABLE IF EXISTS `departamento`;

CREATE TABLE `departamento` (
  `iddepartamento` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) NOT NULL,
  `activo` int(11) NOT NULL,
  PRIMARY KEY (`iddepartamento`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8mb4;

/*Data for the table `departamento` */

insert  into `departamento`(`iddepartamento`,`nombre`,`activo`) values (1,'Santaf?? de Bogot?? ',1),(2,'Amazonas ',1),(3,'Antioquia',1),(4,'Arauca',1),(5,'Atl??ntico',1),(6,'Bol??var',1),(7,'Boyac?? ',1),(8,'Caldas',1),(9,'Casanare',1),(10,'Cauca ',1),(11,'Cesar ',1),(12,'C??rdoba',1),(13,'Cundinamarca ',1),(14,'Choc??',1),(15,'Huila ',1),(16,'La Guajira ',1),(17,'Magdalena ',1),(18,'Nari??o',1),(19,'Norte de Santander ',1),(20,'Putumayo ',1),(21,'Risaralda ',1),(22,'San Andr??s',1),(23,'Santander ',1),(24,'Sucre ',1),(25,'Tolima ',1),(26,'Valle ',1);

/*Table structure for table `departamento_x_municipio` */

DROP TABLE IF EXISTS `departamento_x_municipio`;

CREATE TABLE `departamento_x_municipio` (
  `iddepartamento_x_municipio` int(11) NOT NULL AUTO_INCREMENT,
  `municipio_idmunicipio` int(11) NOT NULL,
  `departamento_iddepartamento` int(11) NOT NULL,
  PRIMARY KEY (`iddepartamento_x_municipio`),
  KEY `fk_departamento_x_municipio_municipio1_idx` (`municipio_idmunicipio`),
  KEY `fk_departamento_x_municipio_departamento1_idx` (`departamento_iddepartamento`),
  CONSTRAINT `fk_departamento_x_municipio_departamento1` FOREIGN KEY (`departamento_iddepartamento`) REFERENCES `departamento` (`iddepartamento`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_departamento_x_municipio_municipio1` FOREIGN KEY (`municipio_idmunicipio`) REFERENCES `municipio` (`idmunicipio`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=1077 DEFAULT CHARSET=utf8mb4;

/*Data for the table `departamento_x_municipio` */

insert  into `departamento_x_municipio`(`iddepartamento_x_municipio`,`municipio_idmunicipio`,`departamento_iddepartamento`) values (1,1,1),(2,2,2),(3,3,2),(4,4,3),(5,5,3),(6,6,3),(7,7,3),(8,8,3),(9,9,3),(10,10,3),(11,11,3),(12,12,3),(13,13,3),(14,14,3),(15,15,3),(16,16,3),(17,17,3),(18,18,3),(19,19,3),(20,20,3),(21,21,3),(22,22,3),(23,23,3),(24,24,3),(25,25,3),(26,26,3),(27,27,3),(28,28,3),(29,29,3),(30,30,3),(31,31,3),(32,32,3),(33,33,3),(34,34,3),(35,35,3),(36,36,3),(37,37,3),(38,38,3),(39,39,3),(40,40,3),(41,41,3),(42,42,3),(43,43,3),(44,44,3),(45,45,3),(46,46,3),(47,47,3),(48,48,3),(49,49,3),(50,50,3),(51,51,3),(52,52,3),(53,53,3),(54,54,3),(55,55,3),(56,56,3),(57,57,3),(58,58,3),(59,59,3),(60,60,3),(61,61,3),(62,62,3),(63,63,3),(64,64,3),(65,65,3),(66,66,3),(67,67,3),(68,68,3),(69,69,3),(70,70,3),(71,71,3),(72,72,3),(73,73,3),(74,74,3),(75,75,3),(76,76,3),(77,77,3),(78,78,3),(79,79,3),(80,80,3),(81,81,3),(82,82,3),(83,83,3),(84,84,3),(85,85,3),(86,86,3),(87,87,3),(88,88,3),(89,89,3),(90,90,3),(91,91,3),(92,92,3),(93,93,3),(94,94,3),(95,95,3),(96,96,3),(97,97,3),(98,98,3),(99,99,3),(100,100,3),(101,101,3),(102,102,3),(103,103,3),(104,104,3),(105,105,3),(106,106,3),(107,107,3),(108,108,3),(109,109,3),(110,110,3),(111,111,3),(112,112,3),(113,113,3),(114,114,3),(115,115,3),(116,116,3),(117,117,3),(118,118,3),(119,119,3),(120,120,3),(121,121,3),(122,122,3),(123,123,3),(124,124,3),(125,125,3),(126,126,3),(127,127,3),(128,128,3),(129,129,4),(130,130,4),(131,131,4),(132,132,4),(133,133,4),(134,134,4),(135,135,4),(136,136,4),(137,137,4),(138,138,5),(139,139,5),(140,140,5),(141,141,5),(142,142,5),(143,143,5),(144,144,5),(145,145,5),(146,146,5),(147,147,5),(148,148,5),(149,149,5),(150,150,5),(151,151,5),(152,152,5),(153,153,5),(154,154,5),(155,155,5),(156,156,5),(157,157,5),(158,158,5),(159,159,5),(160,160,5),(161,161,6),(162,162,6),(163,163,6),(164,164,6),(165,165,6),(166,166,6),(167,167,6),(168,168,6),(169,169,6),(170,170,6),(171,171,6),(172,172,6),(173,173,6),(174,174,6),(175,175,6),(176,176,6),(177,177,6),(178,178,6),(179,179,6),(180,180,6),(181,181,6),(182,182,6),(183,183,6),(184,184,6),(185,185,6),(186,186,6),(187,187,6),(188,188,6),(189,189,6),(190,190,6),(191,191,6),(192,192,6),(193,193,6),(194,194,6),(195,195,6),(196,196,6),(197,197,6),(198,198,6),(199,199,6),(200,200,6),(201,201,6),(202,202,6),(203,203,6),(204,204,6),(205,205,6),(206,206,7),(207,207,7),(208,208,7),(209,209,7),(210,210,7),(211,211,7),(212,212,7),(213,213,7),(214,214,7),(215,215,7),(216,216,7),(217,217,7),(218,218,7),(219,219,7),(220,220,7),(221,221,7),(222,222,7),(223,223,7),(224,224,7),(225,225,7),(226,226,7),(227,227,7),(228,228,7),(229,229,7),(230,230,7),(231,231,7),(232,232,7),(233,233,7),(234,234,7),(235,235,7),(236,236,7),(237,237,7),(238,238,7),(239,239,7),(240,240,7),(241,241,7),(242,242,7),(243,243,7),(244,244,7),(245,245,7),(246,246,7),(247,247,7),(248,248,7),(249,249,7),(250,250,7),(251,251,7),(252,252,7),(253,253,7),(254,254,7),(255,255,7),(256,256,7),(257,257,7),(258,258,7),(259,259,7),(260,260,7),(261,261,7),(262,262,7),(263,263,7),(264,264,7),(265,265,7),(266,266,7),(267,267,7),(268,268,7),(269,269,7),(270,270,7),(271,271,7),(272,272,7),(273,273,7),(274,274,7),(275,275,7),(276,276,7),(277,277,7),(278,278,7),(279,279,7),(280,280,7),(281,281,7),(282,282,7),(283,283,7),(284,284,7),(285,285,7),(286,286,7),(287,287,7),(288,288,7),(289,289,7),(290,290,7),(291,291,7),(292,292,7),(293,293,7),(294,294,7),(295,295,7),(296,296,7),(297,297,7),(298,298,7),(299,299,7),(300,300,7),(301,301,7),(302,302,7),(303,303,7),(304,304,7),(305,305,7),(306,306,7),(307,307,7),(308,308,7),(309,309,7),(310,310,7),(311,311,7),(312,312,7),(313,313,7),(314,314,7),(315,315,7),(316,316,7),(317,317,7),(318,318,7),(319,319,7),(320,320,7),(321,321,7),(322,322,7),(323,323,7),(324,324,7),(325,325,7),(326,326,7),(327,327,7),(328,328,7),(329,329,8),(330,330,8),(331,331,8),(332,332,8),(333,333,8),(334,334,8),(335,335,8),(336,336,8),(337,337,8),(338,338,8),(339,339,8),(340,340,8),(341,341,8),(342,342,8),(343,343,8),(344,344,8),(345,345,8),(346,346,8),(347,347,8),(348,348,8),(349,349,8),(350,350,8),(351,351,8),(352,352,8),(353,353,8),(354,354,8),(355,355,8),(356,356,8),(357,357,8),(358,358,8),(359,359,8),(360,360,8),(361,361,8),(362,362,8),(363,363,8),(364,364,8),(365,365,8),(366,366,8),(367,367,8),(368,368,8),(369,369,8),(370,370,8),(371,371,9),(372,372,9),(373,373,9),(374,374,9),(375,375,9),(376,376,9),(377,377,9),(378,378,9),(379,379,9),(380,380,9),(381,381,9),(382,382,9),(383,383,9),(384,384,9),(385,385,9),(386,386,9),(387,387,9),(388,388,9),(389,389,9),(390,390,10),(391,391,10),(392,392,10),(393,393,10),(394,394,10),(395,395,10),(396,396,10),(397,397,10),(398,398,10),(399,399,10),(400,400,10),(401,401,10),(402,402,10),(403,403,10),(404,404,10),(405,405,10),(406,406,10),(407,407,10),(408,408,10),(409,409,10),(410,410,10),(411,411,10),(412,412,10),(413,413,10),(414,414,10),(415,415,10),(416,416,10),(417,417,10),(418,418,10),(419,419,10),(420,420,10),(421,421,10),(422,422,10),(423,423,10),(424,424,10),(425,425,10),(426,426,10),(427,427,10),(428,428,10),(429,429,11),(430,430,11),(431,431,11),(432,432,11),(433,433,11),(434,434,11),(435,435,11),(436,436,11),(437,437,11),(438,438,11),(439,439,11),(440,440,11),(441,441,11),(442,442,11),(443,443,11),(444,444,11),(445,445,11),(446,446,11),(447,447,11),(448,448,11),(449,449,11),(450,450,11),(451,451,11),(452,452,11),(453,453,11),(454,454,12),(455,455,12),(456,456,12),(457,457,12),(458,458,12),(459,459,12),(460,460,12),(461,461,12),(462,462,12),(463,463,12),(464,464,12),(465,465,12),(466,466,12),(467,467,12),(468,468,12),(469,469,12),(470,470,12),(471,471,12),(472,472,12),(473,473,12),(474,474,12),(475,475,12),(476,476,12),(477,477,12),(478,478,12),(479,479,12),(480,480,12),(481,481,12),(482,482,13),(483,483,13),(484,484,13),(485,485,13),(486,486,13),(487,487,13),(488,488,13),(489,489,13),(490,490,13),(491,491,13),(492,492,13),(493,493,13),(494,494,13),(495,495,13),(496,496,13),(497,497,13),(498,498,13),(499,499,13),(500,500,13),(501,501,13),(502,502,13),(503,503,13),(504,504,13),(505,505,13),(506,506,13),(507,507,13),(508,508,13),(509,509,13),(510,510,13),(511,511,13),(512,512,13),(513,513,13),(514,514,13),(515,515,13),(516,516,13),(517,517,13),(518,518,13),(519,519,13),(520,520,13),(521,521,13),(522,522,13),(523,523,13),(524,524,13),(525,525,13),(526,526,13),(527,527,13),(528,528,13),(529,529,13),(530,530,13),(531,531,13),(532,532,13),(533,533,13),(534,534,13),(535,535,13),(536,536,13),(537,537,13),(538,538,13),(539,539,13),(540,540,13),(541,541,13),(542,542,13),(543,543,13),(544,544,13),(545,545,13),(546,546,13),(547,547,13),(548,548,13),(549,549,13),(550,550,13),(551,551,13),(552,552,13),(553,553,13),(554,554,13),(555,555,13),(556,556,13),(557,557,13),(558,558,13),(559,559,13),(560,560,13),(561,561,13),(562,562,13),(563,563,13),(564,564,13),(565,565,13),(566,566,13),(567,567,13),(568,568,13),(569,569,13),(570,570,13),(571,571,13),(572,572,13),(573,573,13),(574,574,13),(575,575,13),(576,576,13),(577,577,13),(578,578,13),(579,579,13),(580,580,13),(581,581,13),(582,582,13),(583,583,13),(584,584,13),(585,585,13),(586,586,13),(587,587,13),(588,588,13),(589,589,13),(590,590,13),(591,591,13),(592,592,13),(593,593,13),(594,594,13),(595,595,13),(596,596,13),(597,597,13),(598,598,14),(599,599,14),(600,600,14),(601,601,14),(602,602,14),(603,603,14),(604,604,14),(605,605,14),(606,606,14),(607,607,14),(608,608,14),(609,609,14),(610,610,14),(611,611,14),(612,612,14),(613,613,14),(614,614,14),(615,615,14),(616,616,14),(617,617,14),(618,618,14),(619,619,14),(620,620,14),(621,621,14),(622,622,14),(623,623,14),(624,624,14),(625,625,15),(626,626,15),(627,627,15),(628,628,15),(629,629,15),(630,630,15),(631,631,15),(632,632,15),(633,633,15),(634,634,15),(635,635,15),(636,636,15),(637,637,15),(638,638,15),(639,639,15),(640,640,15),(641,641,15),(642,642,15),(643,643,15),(644,644,15),(645,645,15),(646,646,15),(647,647,15),(648,648,15),(649,649,15),(650,650,15),(651,651,15),(652,652,15),(653,653,15),(654,654,15),(655,655,15),(656,656,15),(657,657,15),(658,658,15),(659,659,15),(660,660,15),(661,661,15),(662,662,16),(663,663,16),(664,664,16),(665,665,16),(666,666,16),(667,667,16),(668,668,16),(669,669,16),(670,670,16),(671,671,16),(672,672,16),(673,673,16),(674,674,16),(675,675,17),(676,676,17),(677,677,17),(678,678,17),(679,679,17),(680,680,17),(681,681,17),(682,682,17),(683,683,17),(684,684,17),(685,685,17),(686,686,17),(687,687,17),(688,688,17),(689,689,17),(690,690,17),(691,691,17),(692,692,17),(693,693,17),(694,694,17),(695,695,17),(696,696,17),(697,697,17),(698,698,17),(699,699,17),(700,700,17),(701,701,17),(702,702,17),(703,703,17),(704,704,17),(705,705,17),(706,706,17),(707,707,17),(708,708,17),(709,709,17),(710,710,17),(711,711,17),(712,712,17),(713,713,17),(714,714,17),(715,715,17),(716,716,17),(717,717,17),(718,718,17),(719,719,17),(720,720,17),(721,721,17),(722,722,17),(723,723,17),(724,724,17),(725,725,17),(726,726,17),(727,727,18),(728,728,18),(729,729,18),(730,730,18),(731,731,18),(732,732,18),(733,733,18),(734,734,18),(735,735,18),(736,736,18),(737,737,18),(738,738,18),(739,739,18),(740,740,18),(741,741,18),(742,742,18),(743,743,18),(744,744,18),(745,745,18),(746,746,18),(747,747,18),(748,748,18),(749,749,18),(750,750,18),(751,751,18),(752,752,18),(753,753,18),(754,754,18),(755,755,18),(756,756,18),(757,757,18),(758,758,18),(759,759,18),(760,760,18),(761,761,18),(762,762,18),(763,763,18),(764,764,18),(765,765,18),(766,766,18),(767,767,18),(768,768,18),(769,769,18),(770,770,18),(771,771,18),(772,772,18),(773,773,18),(774,774,18),(775,775,18),(776,776,18),(777,777,18),(778,778,18),(779,779,18),(780,780,18),(781,781,18),(782,782,18),(783,783,18),(784,784,18),(785,785,18),(786,786,18),(787,787,18),(788,788,18),(789,789,19),(790,790,19),(791,791,19),(792,792,19),(793,793,19),(794,794,19),(795,795,19),(796,796,19),(797,797,19),(798,798,19),(799,799,19),(800,800,19),(801,801,19),(802,802,19),(803,803,19),(804,804,19),(805,805,19),(806,806,19),(807,807,19),(808,808,19),(809,809,19),(810,810,19),(811,811,19),(812,812,19),(813,813,19),(814,814,19),(815,815,19),(816,816,19),(817,817,19),(818,818,19),(819,819,19),(820,820,19),(821,821,19),(822,822,19),(823,823,19),(824,824,19),(825,825,19),(826,826,19),(827,827,19),(828,828,19),(829,829,20),(830,830,20),(831,831,20),(832,832,20),(833,833,20),(834,834,20),(835,835,20),(836,836,20),(837,837,20),(838,838,20),(839,839,20),(840,840,20),(841,841,20),(842,842,20),(843,843,20),(844,844,20),(845,845,20),(846,846,20),(847,847,20),(848,848,20),(849,849,20),(850,850,20),(851,851,20),(852,852,20),(853,853,20),(854,854,21),(855,855,21),(856,856,21),(857,857,21),(858,858,21),(859,859,21),(860,860,21),(861,861,21),(862,862,21),(863,863,21),(864,864,21),(865,865,21),(866,866,21),(867,867,21),(868,868,22),(869,869,22),(870,870,23),(871,871,23),(872,872,23),(873,873,23),(874,874,23),(875,875,23),(876,876,23),(877,877,23),(878,878,23),(879,879,23),(880,880,23),(881,881,23),(882,882,23),(883,883,23),(884,884,23),(885,885,23),(886,886,23),(887,887,23),(888,888,23),(889,889,23),(890,890,23),(891,891,23),(892,892,23),(893,893,23),(894,894,23),(895,895,23),(896,896,23),(897,897,23),(898,898,23),(899,899,23),(900,900,23),(901,901,23),(902,902,23),(903,903,23),(904,904,23),(905,905,23),(906,906,23),(907,907,23),(908,908,23),(909,909,23),(910,910,23),(911,911,23),(912,912,23),(913,913,23),(914,914,23),(915,915,23),(916,916,23),(917,917,23),(918,918,23),(919,919,23),(920,920,23),(921,921,23),(922,922,23),(923,923,23),(924,924,23),(925,925,23),(926,926,23),(927,927,23),(928,928,23),(929,929,23),(930,930,23),(931,931,23),(932,932,23),(933,933,23),(934,934,23),(935,935,23),(936,936,23),(937,937,23),(938,938,23),(939,939,23),(940,940,23),(941,941,23),(942,942,23),(943,943,23),(944,944,23),(945,945,23),(946,946,23),(947,947,23),(948,948,23),(949,949,23),(950,950,23),(951,951,23),(952,952,23),(953,953,23),(954,954,23),(955,955,23),(956,956,23),(957,957,24),(958,958,24),(959,959,24),(960,960,24),(961,961,24),(962,962,24),(963,963,24),(964,964,24),(965,965,24),(966,966,24),(967,967,24),(968,968,24),(969,969,24),(970,970,24),(971,971,24),(972,972,24),(973,973,24),(974,974,24),(975,975,24),(976,976,24),(977,977,24),(978,978,24),(979,979,24),(980,980,24),(981,981,25),(982,982,25),(983,983,25),(984,984,25),(985,985,25),(986,986,25),(987,987,25),(988,988,25),(989,989,25),(990,990,25),(991,991,25),(992,992,25),(993,993,25),(994,994,25),(995,995,25),(996,996,25),(997,997,25),(998,998,25),(999,999,25),(1000,1000,25),(1001,1001,25),(1002,1002,25),(1003,1003,25),(1004,1004,25),(1005,1005,25),(1006,1006,25),(1007,1007,25),(1008,1008,25),(1009,1009,25),(1010,1010,25),(1011,1011,25),(1012,1012,25),(1013,1013,25),(1014,1014,25),(1015,1015,25),(1016,1016,25),(1017,1017,25),(1018,1018,25),(1019,1019,25),(1020,1020,25),(1021,1021,25),(1022,1022,25),(1023,1023,25),(1024,1024,25),(1025,1025,25),(1026,1026,25),(1027,1027,25),(1028,1028,26),(1029,1029,26),(1030,1030,26),(1031,1031,26),(1032,1032,26),(1033,1033,26),(1034,1034,26),(1035,1035,26),(1036,1036,26),(1037,1037,26),(1038,1038,26),(1039,1039,26),(1040,1040,26),(1041,1041,26),(1042,1042,26),(1043,1043,26),(1044,1044,26),(1045,1045,26),(1046,1046,26),(1047,1047,26),(1048,1048,26),(1049,1049,26),(1050,1050,26),(1051,1051,26),(1052,1052,26),(1053,1053,26),(1054,1054,26),(1055,1055,26),(1056,1056,26),(1057,1057,26),(1058,1058,26),(1059,1059,26),(1060,1060,26),(1061,1061,26),(1062,1062,26),(1063,1063,26),(1064,1064,26),(1065,1065,26),(1066,1066,26),(1067,1067,26),(1068,1068,26),(1069,1069,26),(1070,1070,26),(1071,1071,26),(1072,1072,26),(1073,1073,26),(1074,1074,26),(1075,1075,26),(1076,1076,26);

/*Table structure for table `documentos` */

DROP TABLE IF EXISTS `documentos`;

CREATE TABLE `documentos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cedula_ciudadania_nat_com` varchar(200) DEFAULT NULL,
  `marca_log_graficos_nat_com` varchar(200) DEFAULT NULL,
  `certi_ingreso_anterior_nat_com` varchar(200) DEFAULT NULL,
  `divicion_porcentaje_nat_com` varchar(200) DEFAULT NULL,
  `certificado_existencia_jurid_com` varchar(200) DEFAULT NULL,
  `cedula_ciudadania_jurid_com` varchar(200) DEFAULT NULL,
  `marca_logo_jurid_com` varchar(200) DEFAULT NULL,
  `ingreso_sociedad_jurid_com` varchar(200) DEFAULT NULL,
  `copia_cedula_mar_Nat_col` varchar(200) DEFAULT NULL,
  `logo_Graficos_mar_Nat_col` varchar(200) DEFAULT NULL,
  `certificado_ingreso_mar_Nat_col` varchar(200) DEFAULT NULL,
  `divicion_porcentajes_mar_Nat_col` varchar(200) DEFAULT NULL,
  `certificado_existencia_mar_jurid_col` varchar(200) DEFAULT NULL,
  `cedula_ciudadania_mar_jurid_col` varchar(200) DEFAULT NULL,
  `marca_logo_mar_jurid_col` varchar(200) DEFAULT NULL,
  `ingreso_sociedad_mar_jurid_col` varchar(200) DEFAULT NULL,
  `certifi_Existencia_certif_Cert` varchar(200) DEFAULT NULL,
  `cedula_certif_Cert` varchar(200) DEFAULT NULL,
  `logo_grafico_certif_cert` varchar(200) DEFAULT NULL,
  `certifi_existencia_origen` varchar(200) DEFAULT NULL,
  `cedula_certif_origen` varchar(200) DEFAULT NULL,
  `documento_geografico_origen` varchar(200) DEFAULT NULL,
  `rese_reputacion_origen` varchar(200) DEFAULT NULL,
  `pruebas_certifi_origen` varchar(200) DEFAULT NULL,
  `expediente_SIC_Lema` varchar(200) DEFAULT NULL,
  `copia_cedula_Nat_comer` varchar(200) DEFAULT NULL,
  `certificado_ingreso_Comer` varchar(200) DEFAULT NULL,
  `certif_exist_col_jurid_comer` varchar(200) DEFAULT NULL,
  `cedula_col_jurid_comer` varchar(200) DEFAULT NULL,
  `ingre_socie_col_jurid_comer` varchar(200) DEFAULT NULL,
  `document_transfe_Du` varchar(200) DEFAULT NULL,
  `certific_exist_document_Du` varchar(200) DEFAULT NULL,
  `tres_documents_Du` varchar(200) DEFAULT NULL,
  `manual_desarrollo_Du` varchar(200) DEFAULT NULL,
  `cod_fuente_document` varchar(200) DEFAULT NULL,
  `trans_obra_fonograma` varchar(200) DEFAULT NULL,
  `certific_existen_soli` varchar(200) DEFAULT NULL,
  `representa_soli_fonogra` varchar(200) DEFAULT NULL,
  `obra_objecto_regis_soli` varchar(200) DEFAULT NULL,
  `cert_repre_leg_soli` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=163 DEFAULT CHARSET=utf8;

/*Data for the table `documentos` */

insert  into `documentos`(`id`,`cedula_ciudadania_nat_com`,`marca_log_graficos_nat_com`,`certi_ingreso_anterior_nat_com`,`divicion_porcentaje_nat_com`,`certificado_existencia_jurid_com`,`cedula_ciudadania_jurid_com`,`marca_logo_jurid_com`,`ingreso_sociedad_jurid_com`,`copia_cedula_mar_Nat_col`,`logo_Graficos_mar_Nat_col`,`certificado_ingreso_mar_Nat_col`,`divicion_porcentajes_mar_Nat_col`,`certificado_existencia_mar_jurid_col`,`cedula_ciudadania_mar_jurid_col`,`marca_logo_mar_jurid_col`,`ingreso_sociedad_mar_jurid_col`,`certifi_Existencia_certif_Cert`,`cedula_certif_Cert`,`logo_grafico_certif_cert`,`certifi_existencia_origen`,`cedula_certif_origen`,`documento_geografico_origen`,`rese_reputacion_origen`,`pruebas_certifi_origen`,`expediente_SIC_Lema`,`copia_cedula_Nat_comer`,`certificado_ingreso_Comer`,`certif_exist_col_jurid_comer`,`cedula_col_jurid_comer`,`ingre_socie_col_jurid_comer`,`document_transfe_Du`,`certific_exist_document_Du`,`tres_documents_Du`,`manual_desarrollo_Du`,`cod_fuente_document`,`trans_obra_fonograma`,`certific_existen_soli`,`representa_soli_fonogra`,`obra_objecto_regis_soli`,`cert_repre_leg_soli`) values (157,'','','','','','','','','','','','','','','','','','','','','','','','','','','','Tecno_Registro_user.png','Tecno_Inicio.png','Farma_err_user.png',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(158,'Farma_Venta.png','Farma_error_contra.png','editar_usuario.png','Error Inicio.png','','','','','','','','','','','','','','','','','','','','','','','','','','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(159,'','','','','','','','','','','','','','','','','','','','banner.png','BANNER_INF.png','FORMA1.png','foto.png','foto.png','','','','','','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(160,'','','','','','','','','LOGO_BLANCO.png','','','','','','','','','','','','','','','','logo_SOSFSER.png','','','','','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(161,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'','','','','','','','','','');

/*Table structure for table `formulario` */

DROP TABLE IF EXISTS `formulario`;

CREATE TABLE `formulario` (
  `idFormulario` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_formulario` varchar(45) NOT NULL,
  `activo` int(11) NOT NULL,
  PRIMARY KEY (`idFormulario`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

/*Data for the table `formulario` */

insert  into `formulario`(`idFormulario`,`nombre_formulario`,`activo`) values (1,'1',1);

/*Table structure for table `gestioncont` */

DROP TABLE IF EXISTS `gestioncont`;

CREATE TABLE `gestioncont` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `menu` text DEFAULT NULL,
  `textUno` varchar(800) DEFAULT NULL,
  `imagenFondo` varchar(100) DEFAULT NULL,
  `imagenTitulo` varchar(100) DEFAULT NULL,
  `textDos` varchar(800) DEFAULT NULL,
  `textTres` varchar(800) DEFAULT NULL,
  `textCuatro` varchar(800) DEFAULT NULL,
  `textCinco` varchar(800) DEFAULT NULL,
  `textSeis` varchar(800) DEFAULT NULL,
  `textSiete` varchar(800) DEFAULT NULL,
  `textOcho` varchar(800) DEFAULT NULL,
  `textNueve` varchar(800) DEFAULT NULL,
  `menuImage` varchar(100) DEFAULT NULL,
  `titulo` varchar(800) DEFAULT NULL,
  `textDies` varchar(500) DEFAULT NULL,
  `tipImg` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

/*Data for the table `gestioncont` */

insert  into `gestioncont`(`id`,`menu`,`textUno`,`imagenFondo`,`imagenTitulo`,`textDos`,`textTres`,`textCuatro`,`textCinco`,`textSeis`,`textSiete`,`textOcho`,`textNueve`,`menuImage`,`titulo`,`textDies`,`tipImg`) values (1,'Inicio','El sistema de atenci??n en propiedad intelectual - SAPI es un portal nuevo de propiedad intelectual del SENA en el cu??l se podr??n efectuar la solicitud de registro en derechos de autor, propiedad industrial y obtenciones vegetales en el SENA. El usuario registra  los resultados tecnol??gicos susceptibles de protecci??n y el grupo UPI ser?? el encargado de tramitar y radicar dicha solicitud ante las entidades encargadas. \r\n<br>\r\n<br>\r\nTodos los miembros de la comunidad SENA que obtengan un resultado cient??fico, tecnol??gico, de servicios y este sea susceptible de protecci??n por alguna de las modalidades de protecci??n de la propiedad intelectual deber?? registrar la solicitud a trav??s de la SAPI donde se le brindar?? informaci??n  y el acompa??amiento para proteger su obra.\r\n','imagen home.JPG','','','','','','','','','','LOGO SENA SENNOVA (1).png',NULL,'',NULL),(2,'Sobre propiedad intelectual','','',NULL,'','','','','','','','','',NULL,NULL,NULL),(3,'Nuestros servicios','Nuestros servicios','',NULL,'En el sistema de atenci??n de propiedad intelectual - SAPI estamos para colaborarte con todas tus solicitudes de propiedad intelectual, como : ','An??lisis de resultados','Colaboramos con la identificaci??n y caracterizaci??n de los resultados de proyectos de I+D+i con potencial de ser protegidos y transferidos','Tr??mite de protecci??n','Orientamos y asistimos el tr??mite de protecci??n en propiedad intelectual ante la autoridad pertinente Direcci??n Nacional de Derechos de Autor - DNDA, Superintendencia de Industria y Comercio - SIC, Instituto Colombiano Agropecuario - ICA ','Transferencia de tecnolog??as','Orientamos y facilitamos los procesos de transferencia de tecnolog??as y su apropiaci??n','Divulgaciones de propiedad intelectual','',NULL,'Adelantamos la difusi??n, socializaci??n y capacitaci??n en propiedad intelectual para mejorar el conocimiento y capacidades??? del ecosistema SENNOVA y SENA ',NULL),(4,'Cont??ctenos','En el sistema de atenci??n de propiedad intelectual - SAPI estamos para colaborarte con tus dudas  y tr??mites sobre propiedad intelectual, no dudes en contactarnos \r\n','',NULL,'320 849 8665 - 313 292 3399','upisennova@sena.edu.co','Calle 57 No. 8 - 69 Bogot?? D.C.','','','','','',NULL,NULL,'',NULL),(5,'Reg??strate aqu??','En el sistema de atenci??n de propiedad intelectual - SAPI solo pueden registrar solicitudes los articuladores tecnoparque y lideres Sennova, sino tienes uno de estos roles por favor contacta a la persona responsable de tu centro de formaci??n. ','',NULL,'Reg??strate','','','','','','','','',NULL,'',NULL),(6,'Iniciar Sesi??n',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);

/*Table structure for table `instituciones` */

DROP TABLE IF EXISTS `instituciones`;

CREATE TABLE `instituciones` (
  `idinstituciones` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) NOT NULL,
  `activo` int(11) NOT NULL,
  PRIMARY KEY (`idinstituciones`)
) ENGINE=InnoDB AUTO_INCREMENT=72 DEFAULT CHARSET=utf8mb4;

/*Data for the table `instituciones` */

insert  into `instituciones`(`idinstituciones`,`nombre`,`activo`) values (1,'COLEGIO MAYOR DE NUESTRA SE??ORA DEL ROSARIO',1),(2,'DIRECCION NACIONAL DE ESCUELAS',1),(3,'ESCUELA DE INGENIERIA DE ANTIOQUIA',1),(4,'ESCUELA DE SUBOFICIALES DE LA FUERZA AEREA CO',1),(5,'ESCUELA NAVAL DE SUBOFICIALES ARC BARRANQUILL',1),(6,'FUNDACION TECNOLOGICA ANTONIO DE AREVALO',1),(7,'FUNDACION UNIVERSIDAD DE BOGOTA - JORGE TADEO',1),(8,'PONTIFICIA UNIVERSIDAD JAVERIANA - BOGOTA ',1),(9,'PONTIFICIA UNIVERSIDAD JAVERIANA - CALI',1),(10,'UNIVERSIDAD AUTONOMA DE BUCARAMANGA-UNAB-',1),(11,'UNIVERSIDAD AUTONOMA DE OCCIDENTE',1),(12,'UNIVERSIDAD DE ANTIOQUIA',1),(13,'UNIVERSIDAD DE CALDAS',1),(14,'UNIVERSIDAD DE LA SABANA',1),(15,'UNIVERSIDAD DE LA SALLE',1),(16,'UNIVERSIDAD DE LOS ANDES',1),(17,'UNIVERSIDAD DE MEDELLIN',1),(18,'UNIVERSIDAD DEL CAUCA',1),(19,'UNIVERSIDAD DEL NORTE',1),(20,'UNIVERSIDAD DEL VALLE',1),(21,'UNIVERSIDAD EAFIT-',1),(22,'UNIVERSIDAD EAN',1),(23,'UNIVERSIDAD EXTERNADO DE COLOMBIA',1),(24,'UNIVERSIDAD ICESI',1),(25,'UNIVERSIDAD INDUSTRIAL DE SANTANDER',1),(26,'UNIVERSIDAD NACIONAL DE COLOMBIA - BOGOT??',1),(27,'UNIVERSIDAD NACIONAL DE COLOMBIA - MEDELLIN',1),(28,'UNIVERSIDAD NACIONAL DE COLOMBIA - MANIZALES',1),(29,'UNIVERSIDAD NACIONAL DE COLOMBIA - PALMIRA',1),(30,'UNIVERSIDAD NACIONAL DE COLOMBIA -ARAUCA',1),(31,'UNIVERSIDAD NACIONAL DE COLOMBIA - LETICIA',1),(32,'UNIVERSIDAD NACIONAL DE COLOMBIA - SAN ANDRES',1),(33,'UNIVERSIDAD PEDAGOGICA Y TECNOLOGICA DE COLOM',1),(34,'UNIVERSIDAD PONTIFICIA BOLIVARIANA',1),(35,'UNIVERSIDAD SANTO TOMAS',1),(36,'UNIVERSIDAD TECNOLOGICA DE BOLIVAR',1),(37,'UNIVERSIDAD TECNOLOGICA DE PEREIRA - UTP',1),(38,'UNIVERSIDAD DE CARTAGENA',1),(39,'Servicio Nacional de Aprendizaje (SENA)',1),(40,'Universidad Distrital Francisco Jos?? de Calda',1),(41,'??Universidad Militar Nueva Granada (UMNG)',1),(42,'??Universidad Nacional Abierta y a Distancia (',1),(43,'??Universidad Pedag??gica Nacional',1),(44,'Universidad de Cundinamarca',1),(45,'Escuela Colombiana de Ingenier??a Julio Garavi',1),(46,'??Universidad de Am??rica',1),(47,'??Universidad de Ciencias Aplicadas y Ambienta',1),(48,'??Fundaci??n Universitaria Juan N. Corpas',1),(49,'??Fundaci??n Universitaria del ??rea Andina',1),(50,'??Universidad de la Sabana',1),(51,'??Corporaci??n Eductiva Alexander Von Humboldt',1),(52,'Universidad Antonio Nari??o (UAN)',1),(53,'Universidad Libre',1),(54,'Universidad Manuela Beltr??n (UMB)',1),(55,'Universidad San Mart??n',1),(56,'Universidad La Gran Colombia',1),(57,'Universidad EAN',1),(58,'Universidad Incca de Colombia (UNINCCA)',1),(59,'Universidad Central',1),(60,'Universidad de los Andes',1),(61,'Universidad de la Salle',1),(62,'Universidad Externado de Colombia',1),(63,'Universidad El Bosque',1),(64,'Universidad Piloto de Colombia',1),(65,'Universidad del Rosario',1),(66,'Universidad Cat??lica de Colombia',1),(67,'Pontificia Universidad Javeriana',1),(68,'Universidad de Bogot?? \"Jorge Tadeo Lozano\"',1),(69,'??Universidad de Antioquia (UDEA)??',1),(70,'Universidad Pontificia Bolivariana',1),(71,'??Universidad del Atl??ntico',1);

/*Table structure for table `laupi` */

DROP TABLE IF EXISTS `laupi`;

CREATE TABLE `laupi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombreMenu` varchar(40) DEFAULT NULL,
  `imagenFondo` varchar(200) DEFAULT NULL,
  `titulo` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `parrafo` text DEFAULT NULL,
  `boton1` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `boton2` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `boton3` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `boton4` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `btCont1` varchar(200) DEFAULT NULL,
  `btCont2` varchar(200) DEFAULT NULL,
  `btCont3` varchar(200) DEFAULT NULL,
  `btCont4` varchar(200) DEFAULT NULL,
  `modalTxt1` varchar(500) DEFAULT NULL,
  `modalImg1` varchar(200) DEFAULT NULL,
  `modalParrafo1` text DEFAULT NULL,
  `modalParra1` text DEFAULT NULL,
  `modalText1` varchar(500) DEFAULT NULL,
  `modalTe1` varchar(500) DEFAULT NULL,
  `modalTx1` varchar(500) DEFAULT NULL,
  `modalTxt2` varchar(500) DEFAULT NULL,
  `modalImg2` varchar(200) DEFAULT NULL,
  `modalParrafo2` text DEFAULT NULL,
  `modalParra2` text DEFAULT NULL,
  `modalText2` varchar(500) DEFAULT NULL,
  `modalTex2` varchar(500) DEFAULT NULL,
  `modalTx2` varchar(500) DEFAULT NULL,
  `modalTe2` varchar(500) DEFAULT NULL,
  `modalTxt3` varchar(500) DEFAULT NULL,
  `modalParrafo3` text DEFAULT NULL,
  `modalParra3` text DEFAULT NULL,
  `modalTe3` varchar(500) DEFAULT NULL,
  `modalText3` varchar(500) DEFAULT NULL,
  `modalImg3` varchar(200) DEFAULT NULL,
  `modalTx3` varchar(500) DEFAULT NULL,
  `modalTex3` varchar(500) DEFAULT NULL,
  `modalTxt4` varchar(500) DEFAULT NULL,
  `modalParrafo4` text DEFAULT NULL,
  `modalParra4` text DEFAULT NULL,
  `modalText4` varchar(500) DEFAULT NULL,
  `modalTex4` varchar(500) DEFAULT NULL,
  `modalImg4` varchar(200) DEFAULT NULL,
  `modalTe4` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=utf8mb4;

/*Data for the table `laupi` */

insert  into `laupi`(`id`,`nombreMenu`,`imagenFondo`,`titulo`,`parrafo`,`boton1`,`boton2`,`boton3`,`boton4`,`btCont1`,`btCont2`,`btCont3`,`btCont4`,`modalTxt1`,`modalImg1`,`modalParrafo1`,`modalParra1`,`modalText1`,`modalTe1`,`modalTx1`,`modalTxt2`,`modalImg2`,`modalParrafo2`,`modalParra2`,`modalText2`,`modalTex2`,`modalTx2`,`modalTe2`,`modalTxt3`,`modalParrafo3`,`modalParra3`,`modalTe3`,`modalText3`,`modalImg3`,`modalTx3`,`modalTex3`,`modalTxt4`,`modalParrafo4`,`modalParra4`,`modalText4`,`modalTex4`,`modalImg4`,`modalTe4`) values (35,NULL,'Propiedad industrial .jpg',' PROPIEDAD INDUSTRIAL','La propiedad industrial se entiende como el conjunto de derechos que les asiste a las personas sobre los productos de actividades innovadoras como nuevos procesos, productos, servicios, dise??os, as?? como la actividad econ??mica que involucra la explotaci??n de estos. ','??Qu?? se protege por propiedad industrial?','Normatividad de propiedad industrial','??Qu?? entidad otorga la protecci??n?','',NULL,NULL,NULL,NULL,'??Qu?? se protege por propiedad industrial?','','La propiedad industrial comprende las nuevas creaciones y los signos distintivos. <br><br>Al respecto, la protecci??n otorga derechos exclusivos sobre las patentes de invenci??n, patentes de modelos de utilidad, los dise??os industriales, los esquemas de trazado de circuitos integrados (nuevas creaciones), marcas y otros signos distintivos.','','','','','','','Decisi??n Andina 486 de 2000 ??? R??gimen Com??n sobre propiedad Industrial.<br>	 Decisi??n Andina 689 de 2008 ??? Adecuaci??n de determinados art??culos de la Decisi??n 486.<br>	 Decisi??n Andina 291 1991 ??? R??gimen Com??n de Tratamiento a los Capitales Extranjeros y sobre Marcas, Patentes, Licencias y Regal??as. <br>	 Decisi??n Andina 391 de 1996 ??? R??gimen Com??n sobre Acceso a los Recursos Gen??ticos.<br>	 Ley 165 de 1994 ??? Convenio sobre la Diversidad Biol??gica.<br>	 Ley 178 de 1994 ??? Adhesi??n al Convenio de Paris de 1883 para la Protecci??n de la Propiedad Industrial.<br>Ley 256 de 1996 ??? Ley de Competencia Desleal.<br>Ley 463 de 1998 ??? Adhesi??n al Tratado de Cooperaci??n en Materias de Patentes (PCT en ingl??s).<br>Ley 740 de 2002 ??? Adhesi??n al Protocolo de Cartagena sobre Seguridad de la Biotecnolog??a del Convenio sobre la Diversidad Biol??gica.<br>Ley 1343 de 2009 ??? Adhesi??n al Tratado sobre el Derecho de Marcas y su Reglamento.<br>Ley 1455 de 2011 ??? Adhesi??n al Protocolo concerniente al Arreglo de Madrid relativo al Registro Internacional de Marcas.<br>Ley 1515 de 2012 ??? Adhesi??n al Tratado de Budapest sobre el Reconocimiento Internacional del Dep??sito de Microorganismos a los fines del Procedimiento en materia de Patentes.<br>Ley 1648 de 2013 ??? Por la cual se establecen medidas de observancia a los Derechos de Propiedad Industrial<br>Decreto 1074 de 2015 ??? Decreto ??nico Reglamentario del Sector Comercio, Industria y Turismo.	\r\n<br>Arreglo de Estrasburgo <br>Arreglo de Locarno.<br>Circular ??nica de la Superintendencia de Industria y Comercio.\r\n','','',NULL,NULL,'Normatividad de propiedad industrial','','Superintendencia de industria y comercio- SIC <br><br> Carrera 13 # 27 ??? 00, Ciudad de Bogot??<br><br>  www.sic.gov.co  ','','','','loogo SIc para nuevas creaciones patentes modelos propiedad industrial.png',NULL,'','','','','','','',''),(36,NULL,'Mesa de trabajo 6-100.jpg',' SIGNOS DISTINTIVOS','Los signos distintivos son todas las expresiones, vocablos, s??mbolos, figuras o dem??s elementos que utiliza una persona natural o jur??dica en el mercado para distinguir productos, servicios, establecimientos o actividades econ??micas, de los dem??s competidores del mercado.\r\n','??Cu??les son las clases de signos distintivos?','??C??al es el procedimiento?','??Qu?? entidad otorga el registro?','',NULL,NULL,NULL,NULL,'??Cu??les son las clases de signos distintivos?','','- Marca comercial: signo distintivo que identifica productos y servicios. Ej. Coca-Cola, facebook.<br> - Marca colectiva: signo que distingue a asociaciones de productores, fabricantes, prestadores de servicios, organizaciones o cualquier grupo de personas. Ej. sombrero volteado, seda del cauca.<br> - Marca de certificaci??n: signo aplicado a productos o servicios cuya calidad u otras caracter??sticas han sido certificadas por el titular de la marca. Ej. ICONTEC internacional, INVIMA.<br> - Marca pa??s: esta especie de marca fue creada por la decisi??n 876 de 2021 de la comisi??n de la comunidad andina. Ej. CO Colombia, Bolivia coraz??n del sur.<br> - Lema comercial: signo compuesto por una frase o eslogan que refuerza la identidad de la marca y la complementa. Ej. just do it, bebida de campeones. <br> - Nombre comercial: signo con el cual se identifica el empresario como tal en el desarrollo de una actividad mercantil. <br> - Ense??a comercial: signo que sirve para identificar a un establecimiento de comercio.<br>- Denominaci??n de origen: signo que hace referencia a un producto que se genera en determinada regi??n, en el cual se ven involucrados factores naturales y humanos. Ej. queso paipa, champagne. \r\n\r\n\r\n\r\n','','','','','','Procedimiento Signos distintivos.jpg','','','',NULL,'','Cu??l es el procedimiento de signos distintivos?','??Ante qu?? entidad se tramita?','Superintendencia de industria y comercio- SIC <br><br> Carrera 13 # 27 ??? 00, Ciudad de Bogot?? <br><br> www.sic.gov.co  ','','','','loogo SIc para nuevas creaciones patentes modelos propiedad industrial_1.png',NULL,'','','','','','','',''),(37,NULL,'Nuevas creaciones (1).jpg','NUEVAS CREACIONES','Son consideradas como nuevas creaciones <br><br>\r\n- Patente de invenci??n:  invenciones como los aparatos,  los compuestos, composiciones o sustancias, los sistemas, los procedimientos, entre otros. <br>\r\n- Patente de modelo de utilidad: los artefactos, herramientas, instrumentos, mecanismos, dispositivos, aparatos, maquinas o dem??s inventos  susceptibles de esta protecci??n.<br>\r\n- Dise??os industriales: la forma externa o apariencia est??tica bidimensional o tridimensional de un producto.<br>\r\n- Esquemas de trazado de circuitos integrados o las topograf??as de circuitos integrados: circuitos el??ctricos, electr??nicos. <br><br>\r\n\r\n ','??Cu??l es el procedimiento para el registro de patentes?','??Cu??l es el procedimiento para el registro de dise??os industriales?','??Cu??l es el procedimiento para el registro de esquemas de trazado?','??Qu?? entidad otorga el permiso?',NULL,NULL,NULL,NULL,'??Cu??l es el procedimiento para el registro de patentes?','Procedimiento de Patente.jpg','Patente de modelo de utilidad: Las patentes de modelo de utilidad protegen las invenciones de menor complejidad t??cnica, es decir, aquellas invenciones de menor rango inventivo. Esta figura protege toda nueva forma','','','','','','Procedimiento registro dise??os_1.jpg','','','',NULL,'','??Cu??l es el procedimiento para el registro de dise??os indusrtiales?','??Cu??l es el procedimiento para el registro de esquemas de trazado?','','','','','Procedimeinto esquemas de trazado_3.jpg',NULL,'','??Qu?? entidad otorga la protecci??n?','Superintendencia de industria y comercio- SIC  .<br><br>Carrera 13 # 27 ??? 00, Ciudad de Bogot??  .<br><br>www.sic.gov.co  ','','','','loogo SIc para nuevas creaciones patentes modelos propiedad industrial_3.png',''),(40,NULL,'Derechos de autor .jpg','DERECHO DE AUTOR ','El derecho de autor es la protecci??n que otorga el Estado desde el momento de la creaci??n y durante un tiempo determinado a los creadores de las obras literarias, art??sticas o cient??ficas (libros, pel??culas, canciones, pinturas, fotograf??as, esculturas, dise??os arquitect??nicos, art??culos, entre otros). Los derechos conexos hacen referencia a los derechos otorgados a los artistas, int??rpretes o ejecutantes, los productores de fonogramas y los organismos de radiodifusi??n.','??Qu?? es protege por derecho de autor?','Normativa derecho de autor','??Qu?? entidad la otorga?','??C??al es el procedimiento?',NULL,NULL,NULL,NULL,'??Qu?? se protege por derecho de autor?','Foto de derechos_1.jpg','','','','','','','','Ley 23 de 1982 ??? sobre Derechos de Autor. <br> \r\nLey 33 de 1987 ??? Adhesi??n al Convenio de Berna para la Protecci??n de las Obras Literarias y Art??sticas.<br> \r\nLey 23 de 1992 ??? Adhesi??n al Convenio para la Protecci??n de los Productos de Fonogramas contra la reproducci??n no autorizada de sus Fonogramas.<br> \r\nDecisi??n 351 de 1993 ??? R??gimen com??n sobre Derecho de Autor y Derechos Conexos.<br> \r\nLey 48 de 1975 ??? Adhesi??n a la Convenci??n Universal sobre Derechos de Autor, sus Protocolos I y II y a la Convenci??n Internacional sobre la Protecci??n de los Artistas, Int??rpretes o Ejecutantes, los Productores de Fonogramas y los Organismos de Radiodifusi??n. <br> 	\r\nLey 44 de 1993, Ley 1403 de 2010 (Fanny Mikey), Ley 1493 de 2011, Ley 1835 de 2017 (Pepe S??nchez), Ley 1915 de 2018 ??? por las cuales se modifica y adiciona la Ley 23 de 1982. <br> \r\nLey 545 de 1999 ??? Adhesi??n al Tratado de la OMPI sobre Interpretaci??n o Ejecuci??n y Fonogramas.<br> \r\nLey 565 de 2000 ??? Adhesi??n al Tratado de la OMPI sobre Derechos de autor. <br> \r\nLey 1519 de 2009 ??? Adhesi??n al Convenio sobre la Distribuci??n de Se??ales Portadoras de Programas Transmitidas por Sat??lite.<br> 	\r\nDecreto 1066 de 2015 ??? Decreto ??nico Reglamentario del Sector Administrativo del Interior.<br> \r\nLey 1834 de 2017 ??? Por medio de la cual se fomenta la econom??a creativa - Ley naranja.<br> \r\n','','',NULL,NULL,'Normatividad del derecho de autor','??Qu?? entidad otorga la protecci??n?','Direcci??n Nacional de Derechos de Autor - DNDA. <br><br>Calle 28 #13a15, Bogot?? <br><br> http://derechodeautor.gov.co:8080/home','','','','logo DNDA `para institucion derechos de autor_1.png',NULL,'','??Cu??l es el procedimeinto?','','','','','Procedimiento derecho de autor_2.jpeg',''),(41,NULL,'Obtenciones vegetales.jpg','OBTENCIONES VEGETALES','La protecci??n sobre las nuevas variedades vegetales busca reconocer y garantizar al obtentor, un derecho exclusivo de explotaci??n sobre una nueva variedad vegetal. Esta protecci??n est?? fundamentada en raz??n a que las variedades vegetales mejoradas son necesarias para acrecentar la calidad y cantidad en la producci??n de alimentos e impactar de manera positiva en la comunidad.','??Qu?? se protege por obtenci??n vegetal?','Normativa obtenci??n vegetal','??Qu?? entidad otorga protecci??n?','??Cu??l es el procedimiento?',NULL,NULL,NULL,NULL,'??Qu?? se protege por obtenci??n vegetal?','','- Variedades vegetales. <br> \r\n- El material de reproducci??n o de multiplicaci??n, o un producto de su cosecha y ??rboles. <br> \r\n- Plantas de conocimiento com??n, producci??n, reproducci??n, multiplicaci??n o propagaci??n. <br> \r\n- Plantas ornamentales y frut??colas o partes de plantas ornamentales, frut??colas o flores cortadas. <br> \r\n- Las semillas, los esquejes, los bulbos, las pl??ntulas, los tallos cortados de rosas, las frutas cosechadas, o en general, cualquier producto extra??do de las plantas cultivadas). <br> \r\n','','','','','','','- Acta UPOV 1978. <br> \r\n- Acta UPOV 1991.<br> \r\n- Resoluci??n 3168 de 2015.<br>  \r\n- Decisi??n Andina 345 de 1993 ??? r??gimen com??n de protecci??n a los derechos de los obtentores de las variedades vegetales.<br> \r\n- Decreto 533 de 1994 ??? por el cual se reglamenta el r??gimen com??n de protecci??n a los derechos de los obtentores de las variedades vegetales.<br> \r\n- Decreto 1071 de 2015 ??? decreto ??nico??reglamentario del??sector??administrativo agropecuario, pesquero y de desarrollo rural.<br> \r\n','','',NULL,NULL,'Normatividad de las obtenciones vegetales ','??Qu?? entidad otorga protecci??n?','Instituto Colombiano Agropecuario - ICA<br> <br>Carrera 68a #24c-10, Bogot?? <br> <br> https://www.ica.gov.co/areas/agricola/servicios/derechos-de-obtentores-de-variedades-y-produccion.aspx','','','','logo ICA para institucion de obtencion vegetal.png',NULL,'','??Cu??l es el procedimiento?','','','','','Procedimeinto Obtenciones Vegetales.jpg','');

/*Table structure for table `modulo` */

DROP TABLE IF EXISTS `modulo`;

CREATE TABLE `modulo` (
  `idModulo` int(11) NOT NULL AUTO_INCREMENT,
  `Contenidos_idContenidos` int(11) NOT NULL,
  `nombre_modulo` varchar(150) NOT NULL,
  `activo` int(11) NOT NULL,
  PRIMARY KEY (`idModulo`),
  KEY `fk_Modulo_Contenidos1_idx` (`Contenidos_idContenidos`),
  CONSTRAINT `fk_Modulo_Contenidos1` FOREIGN KEY (`Contenidos_idContenidos`) REFERENCES `contenidos` (`idContenidos`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `modulo` */

/*Table structure for table `municipio` */

DROP TABLE IF EXISTS `municipio`;

CREATE TABLE `municipio` (
  `idmunicipio` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) NOT NULL,
  `activo` int(11) NOT NULL,
  PRIMARY KEY (`idmunicipio`)
) ENGINE=InnoDB AUTO_INCREMENT=1077 DEFAULT CHARSET=utf8mb4;

/*Data for the table `municipio` */

insert  into `municipio`(`idmunicipio`,`nombre`,`activo`) values (1,'Santaf?? de Bogot??',1),(2,'Puerto Nari??o',1),(3,'Leticia',1),(4,'Medell??n',1),(5,'Abejorral',1),(6,'Abriaqui',1),(7,'Alejandr??a',1),(8,'Amag??',1),(9,'Amalfi',1),(10,'Andes',1),(11,'Angel??polis',1),(12,'Angostura',1),(13,'Anor??',1),(14,'Antioquia',1),(15,'Anz??',1),(16,'Apartad??',1),(17,'Arboletes',1),(18,'Argelia',1),(19,'Armenia',1),(20,'Barbosa',1),(21,'Belmira',1),(22,'Bello',1),(23,'Betania',1),(24,'Betulia',1),(25,'Bol??var',1),(26,'Brise??o',1),(27,'Buritic??',1),(28,'C??ceres',1),(29,'Caicedo',1),(30,'Caldas',1),(31,'Campamento',1),(32,'Ca??asgordas',1),(33,'Caracol??',1),(34,'Caramanta',1),(35,'Carepa',1),(36,'Carmen de Viboral',1),(37,'Carolina',1),(38,'Caucasia',1),(39,'Chigorod??',1),(40,'Cisneros',1),(41,'Cocorn??',1),(42,'Concepci??n',1),(43,'Concordia',1),(44,'Copacabana',1),(45,'Dabeiba',1),(46,'Don Mat??as',1),(47,'Eb??jico',1),(48,'El Bagre',1),(49,'Entrerr??os',1),(50,'Envigado',1),(51,'Fredonia',1),(52,'Frontino',1),(53,'Giraldo',1),(54,'Girardota',1),(55,'G??mez Plata',1),(56,'Granada',1),(57,'Guadalupe',1),(58,'Guarne',1),(59,'Guatap??',1),(60,'Heliconia',1),(61,'Hispania',1),(62,'Itag????',1),(63,'Ituango',1),(64,'Jard??n',1),(65,'Jeric??',1),(66,'La Ceja',1),(67,'La Estrella',1),(68,'La Pintada',1),(69,'La Uni??n',1),(70,'Liborina',1),(71,'Maceo',1),(72,'Marinilla',1),(73,'Montebello',1),(74,'Murind??',1),(75,'Mutat??',1),(76,'Nari??o',1),(77,'Necocl??',1),(78,'Nech??',1),(79,'Olaya',1),(80,'Pe??ol',1),(81,'Peque',1),(82,'Pueblorrico',1),(83,'Puerto Berr??o',1),(84,'Puerto Nare',1),(85,'Puerto Triunfo',1),(86,'Remedios',1),(87,'Retiro',1),(88,'Rionegro',1),(89,'Sabanalarga',1),(90,'Sabaneta',1),(91,'Salgar',1),(92,'San Andr??s',1),(93,'San Carlos',1),(94,'San francisco',1),(95,'San Jer??nimo',1),(96,'San Jos?? de Monta??a',1),(97,'San Juan de Urab??',1),(98,'San Luis',1),(99,'San Pedro',1),(100,'San Pedro de Urab??',1),(101,'San Rafael',1),(102,'San Roque',1),(103,'San Vicente',1),(104,'Santa B??rbara',1),(105,'Santa Rosa de Osos',1),(106,'Santo Domingo',1),(107,'Santuario',1),(108,'Segovia',1),(109,'Sons??n',1),(110,'Sopetr??n',1),(111,'T??mesis',1),(112,'Taraz??',1),(113,'Tarso',1),(114,'Titirib??',1),(115,'Toledo',1),(116,'Turbo',1),(117,'Uramita',1),(118,'Urrao',1),(119,'Valdivia',1),(120,'Valpara??so',1),(121,'Vegach??',1),(122,'Venecia',1),(123,'Vig??a del Fuerte',1),(124,'Yal??',1),(125,'Yarumal',1),(126,'Yolomb??',1),(127,'Yond?? (Casabe)',1),(128,'Zaragoza ',1),(129,'Arauca',1),(130,'Arauquita',1),(131,'Cravo Norte',1),(132,'Fortul',1),(133,'Puerto Rond??n',1),(134,'Fortul',1),(135,'Puerto Rond??n',1),(136,'Saravena',1),(137,'Tame',1),(138,'Barranquilla',1),(139,'Baranoa',1),(140,'Campo de la Cruz',1),(141,'Candelaria',1),(142,'Galapa',1),(143,'Juan de Acosta',1),(144,'Luruaco',1),(145,'Malambo',1),(146,'Manat??',1),(147,'Palmar de Varela',1),(148,'Pioj??',1),(149,'Polonuevo',1),(150,'Ponedera',1),(151,'Puerto Colombia',1),(152,'Repel??n',1),(153,'Sabanagrande',1),(154,'Sabanalarga',1),(155,'Santa Luc??a',1),(156,'Santo Tom??s',1),(157,'Soledad',1),(158,'Su??n',1),(159,'Tubar??',1),(160,'Usiacur??',1),(161,'Cartagena',1),(162,'Ach??',1),(163,'Altos del Rosario',1),(164,'Arenal',1),(165,'Arjona',1),(166,'Arroyohondo',1),(167,'Barranco de Loba',1),(168,'Calamar',1),(169,'Cantagallo',1),(170,'Cicuto',1),(171,'C??rdoba',1),(172,'Clemencia',1),(173,'El Carmen de Bol??var',1),(174,'El Guamo',1),(175,'El Pe????n',1),(176,'Hatillo de Loba',1),(177,'Magangue',1),(178,'Mahates',1),(179,'Margarita',1),(180,'Mar??a la Baja',1),(181,'Montecristo',1),(182,'Momp??s',1),(183,'Morales',1),(184,'Pinillos',1),(185,'Regidor',1),(186,'R??o Viejo',1),(187,'San Crist??bal',1),(188,'San Estanislao',1),(189,'San Fernando',1),(190,'San Jacinto',1),(191,'San Jacinto del Cauca',1),(192,'San Juan Nepomuceno',1),(193,'San Mart??n de Loba',1),(194,'San Pablo',1),(195,'Santa Catalina',1),(196,'Santa Rosa',1),(197,'Santa Rosa del Sur',1),(198,'Simit??',1),(199,'Soplaviento',1),(200,'Talaigua Nuevo',1),(201,'Tiquisio (Puerto Rico)',1),(202,'Turbaco',1),(203,'Turban??',1),(204,'Villanueva',1),(205,'Zambrano',1),(206,'Tunja',1),(207,'Almeida',1),(208,'Aquitania',1),(209,'Arcabuco',1),(210,'Bel??n',1),(211,'Berbeo',1),(212,'Beteitiva',1),(213,'Boavita',1),(214,'Boyac??',1),(215,'Brise??o',1),(216,'Buenavista',1),(217,'Busbanz??',1),(218,'Caldas',1),(219,'Campohermoso',1),(220,'Cerinza',1),(221,'Chinavita',1),(222,'Chiquinquir??',1),(223,'Chiscas',1),(224,'Chita',1),(225,'Chitaranque',1),(226,'Chivat??',1),(227,'Ci??naga',1),(228,'C??mbita',1),(229,'Coper',1),(230,'Corrales',1),(231,'Covarachia',1),(232,'Cubar',1),(233,'Cucaita',1),(234,'Cuitiva',1),(235,'Ch??quiza',1),(236,'Chivor',1),(237,'Duitama',1),(238,'El Cocuy',1),(239,'El Espino',1),(240,'Firavitoba',1),(241,'Floresta',1),(242,'Gachantiv??',1),(243,'G??meza',1),(244,'Garagoa',1),(245,'Guacamayas',1),(246,'Guateque',1),(247,'Guayat??',1),(248,'Guic??n',1),(249,'Iza',1),(250,'Jenesano',1),(251,'Jeric??',1),(252,'Labranzagrande',1),(253,'La Capilla',1),(254,'La Victoria',1),(255,'La Ubita',1),(256,'Villa de Leyva',1),(257,'Macanal',1),(258,'Marip??',1),(259,'Miraflores',1),(260,'Mongua',1),(261,'Mongu??',1),(262,'Moniquir??',1),(263,'Motavita',1),(264,'Muzo',1),(265,'Nobsa',1),(266,'Nuevo Col??n',1),(267,'Oicat??',1),(268,'Otanche',1),(269,'Pachavita',1),(270,'P??ez',1),(271,'Paipa',1),(272,'Pajarito',1),(273,'Panqueba',1),(274,'Pauna',1),(275,'Paya',1),(276,'Paz de R??o',1),(277,'Pesca',1),(278,'Pisva',1),(279,'Puerto Boyac??',1),(280,'Qu??pama',1),(281,'Ramiquir??',1),(282,'R??quira',1),(283,'Rond??n',1),(284,'Saboy??',1),(285,'S??chica',1),(286,'Samac??',1),(287,'San Eduardo',1),(288,'San Jos?? de Pare',1),(289,'San Luis de Gaceno',1),(290,'San Mateo',1),(291,'San Miguel de Sema',1),(292,'San Pablo de Borbur',1),(293,'Santana',1),(294,'Santa Mar??a',1),(295,'Santa Rosa de Viterbo',1),(296,'Santa Sof??a',1),(297,'Sativanorte',1),(298,'Sativasur',1),(299,'Siachoque',1),(300,'Soat??',1),(301,'Socot??',1),(302,'Socha',1),(303,'Sogamoso',1),(304,'Somondoco',1),(305,'Sora',1),(306,'Sotaquir??',1),(307,'Sorac??',1),(308,'Susac??n',1),(309,'Sutamarch??n',1),(310,'Sutatenza',1),(311,'Tasco',1),(312,'Tenza',1),(313,'Tiban??',1),(314,'Tibasosa',1),(315,'Tinjac??',1),(316,'Tipacoque',1),(317,'Toca',1),(318,'Togu??',1),(319,'T??paga',1),(320,'Tota',1),(321,'Tunungua',1),(322,'Turmequ??',1),(323,'Tuta',1),(324,'Tutaz??',1),(325,'??mbita',1),(326,'Ventaquemada',1),(327,'Viracach??',1),(328,'Zetaquir??',1),(329,'Manizales',1),(330,'Aguadas',1),(331,'Anserma',1),(332,'Aranzazu',1),(333,'Belalc??zar',1),(334,'Chinchina',1),(335,'Filadelfia',1),(336,'La Dorada',1),(337,'La Merced',1),(338,'Manzanares',1),(339,'Marmato',1),(340,'Marquetalia',1),(341,'Marulanda',1),(342,'Neira',1),(343,'P??cora',1),(344,'Palestina',1),(345,'Pensilvania',1),(346,'Riosucio',1),(347,'Risaralda',1),(348,'Salamina',1),(349,'Saman??',1),(350,'San Jos??',1),(351,'Sup??a',1),(352,'Victoria',1),(353,'Villamar??a',1),(354,'Viterbo',1),(355,'Caquet?? 18 Florencia',1),(356,'Albania',1),(357,'Bel??n de los Andaqu??es',1),(358,'Cartagena del Chair??',1),(359,'Curillo',1),(360,'El Doncello',1),(361,'El Paujil',1),(362,'La Monta??ita',1),(363,'Mil??n',1),(364,'Morelia',1),(365,'Puerto Rico',1),(366,'San Jos?? del Fragua',1),(367,'San Vicente del Cagu??n',1),(368,'Solano',1),(369,'Solita',1),(370,'Valpara??so',1),(371,'Yopal',1),(372,'Aguazul',1),(373,'Chameza',1),(374,'Hato Corozal',1),(375,'La Salina',1),(376,'Man??',1),(377,'Monterrey',1),(378,'Nunch??a',1),(379,'Orocu??',1),(380,'Paz de Ariporo',1),(381,'Pore',1),(382,'Recetor',1),(383,'Sabalarga',1),(384,'S??cama',1),(385,'San Luis de Palenque',1),(386,'T??mara',1),(387,'Tauramena',1),(388,'Trinidad',1),(389,'Villanueva',1),(390,'Popay??n',1),(391,'Almaguer',1),(392,'Argelia',1),(393,'Balboa',1),(394,'Bol??var',1),(395,'Buenos Aires',1),(396,'Cajib??o',1),(397,'Caldono',1),(398,'Caloto',1),(399,'Corinto',1),(400,'El Tambo',1),(401,'Florencia',1),(402,'Guapi',1),(403,'Inz??',1),(404,'Jambal??',1),(405,'La Sierra',1),(406,'La Vega',1),(407,'L??pez (Micay)',1),(408,'Mercaderes',1),(409,'Miranda',1),(410,'Morales',1),(411,'Padilla',1),(412,'P??ez (Belalcazar)',1),(413,'Pat??a (El Bordo)',1),(414,'Piamonte',1),(415,'Piendam??',1),(416,'Puerto Tejada',1),(417,'Purac?? (Coconuco)',1),(418,'Rosas',1),(419,'San Sebasti??n',1),(420,'Santander de Quilichao',1),(421,'Santa Rosa',1),(422,'Silvia',1),(423,'Sotar?? (Paispamba)',1),(424,'Su??rez',1),(425,'Timb??o',1),(426,'Timbiqu??',1),(427,'Torib??o',1),(428,'Totoro',1),(429,'Valledupar',1),(430,'Aguachica',1),(431,'Agust??n Codazzi',1),(432,'Astrea',1),(433,'Becerril',1),(434,'Bosconia',1),(435,'Chimichagua',1),(436,'Chiriguan??',1),(437,'Curuman??',1),(438,'El Copey',1),(439,'El Paso',1),(440,'Gamarra',1),(441,'Gonz??lez',1),(442,'La Gloria',1),(443,'La Jagua de Ibirico',1),(444,'Manaure Balc??n Cesar',1),(445,'Pailitas',1),(446,'Pelaya',1),(447,'Pueblo Bello',1),(448,'R??o de Oro',1),(449,'La Paz (Robles)',1),(450,'San Alberto',1),(451,'San Diego',1),(452,'San Mart??n',1),(453,'Tamalameque',1),(454,'Monter??a',1),(455,'Ayapel',1),(456,'Buenavista',1),(457,'Canalete',1),(458,'Ceret??',1),(459,'Chima',1),(460,'Chin??',1),(461,'Ci??naga de Oro',1),(462,'Cotorra',1),(463,'La Apartada (Frontera)',1),(464,'Lorica',1),(465,'Los C??rdobas',1),(466,'Momil',1),(467,'Montel??bano',1),(468,'Monitos',1),(469,'Planeta Rica',1),(470,'Pueblo Nuevo',1),(471,'Puerto Escondido',1),(472,'Puerto Libertador',1),(473,'Pur??sima',1),(474,'Sahag??n',1),(475,'San Andr??s Sotavento',1),(476,'San Antero',1),(477,'San Bernardo del Viento',1),(478,'San Carlos',1),(479,'San Pelayo',1),(480,'Tierralta',1),(481,'Valencia',1),(482,'Agua de Dios',1),(483,'Alb??n',1),(484,'Anapoima',1),(485,'Anolaima',1),(486,'Arbel??ez',1),(487,'Beltr??n',1),(488,'Bituima',1),(489,'Bojac??',1),(490,'Cabrera',1),(491,'Cachipay',1),(492,'Cajic??',1),(493,'Caparrap??',1),(494,'C??queza',1),(495,'Carmen de Carupa',1),(496,'Chaguan??',1),(497,'Ch??a',1),(498,'Chipaque',1),(499,'Choach??',1),(500,'Chocont??',1),(501,'Cogua',1),(502,'Cota',1),(503,'Cucunub??',1),(504,'El Colegio',1),(505,'El Pe????n',1),(506,'El Rosal',1),(507,'Facatativ??',1),(508,'F??meque',1),(509,'Fosca??',1),(510,'Funza',1),(511,'F??quene',1),(512,'Fusagasug??',1),(513,'Gachal??',1),(514,'Gachancip??',1),(515,'Gachet??',1),(516,'Gama',1),(517,'Girardot',1),(518,'Granada',1),(519,'Guachet??',1),(520,'Guaduas',1),(521,'Guasca',1),(522,'Guataqu??',1),(523,'Guatavita',1),(524,'Guayabal de S??quima',1),(525,'Guayabetal',1),(526,'Guti??rrez',1),(527,'Jerusal??n',1),(528,'Jun??n',1),(529,'La Calera',1),(530,'La Mesa',1),(531,'La Palma',1),(532,'La Pe??a',1),(533,'La Vega',1),(534,'Lenguazaque',1),(535,'Machet??',1),(536,'Madrid',1),(537,'Manta',1),(538,'Medina',1),(539,'Mosquera',1),(540,'Nari??o',1),(541,'Nemoc??n',1),(542,'Nilo',1),(543,'Nimaima',1),(544,'Nocaima',1),(545,'Venecia (Ospina P??rez)',1),(546,'Pacho',1),(547,'Paime',1),(548,'Pandi',1),(549,'Paratebueno',1),(550,'Pasca',1),(551,'Puerto Salgar',1),(552,'Pul??',1),(553,'Quebradanegra',1),(554,'Quetame',1),(555,'Quipile',1),(556,'Rafael',1),(557,'Ricaurte',1),(558,'San Antonio de Tequendama',1),(559,'San Bernardo',1),(560,'San Cayetano',1),(561,'San Francisco',1),(562,'San Juan de Rioseco',1),(563,'Sasaima',1),(564,'Sesquil??',1),(565,'Sibate',1),(566,'Silvania',1),(567,'Simijaca',1),(568,'Soacha',1),(569,'Sop??',1),(570,'Subachoque',1),(571,'Suesca',1),(572,'Supat??',1),(573,'Susa',1),(574,'Sutatausa',1),(575,'Tabio',1),(576,'Tausa',1),(577,'Tena',1),(578,'Tenjo',1),(579,'Tibacuy',1),(580,'Tibirit??',1),(581,'Tocaima',1),(582,'Tocancip??',1),(583,'Topaip??',1),(584,'Ubal??',1),(585,'Ubaque',1),(586,'Ubat??',1),(587,'Une',1),(588,'??tica',1),(589,'Vergara',1),(590,'Vian??',1),(591,'Villag??mez',1),(592,'Villapinz??n',1),(593,'Villeta',1),(594,'Viot??',1),(595,'Yacop??',1),(596,'Zipac??n',1),(597,'Zipaquir??',1),(598,'Quibd??',1),(599,'Acand??',1),(600,'Alto Baud?? (Pie de Pato)',1),(601,'Atrato (Yuto)',1),(602,'Bagad??',1),(603,'Bah??a Solano (M??tis)',1),(604,'Bajo Baud?? (Pizarro)',1),(605,'Bojay?? (Bellavista)',1),(606,'Cant??n de San Pablo',1),(607,'Condoto',1),(608,'El Carmen',1),(609,'El Litoral de San Juan',1),(610,'Itsmina',1),(611,'Jurad??',1),(612,'Llor??',1),(613,'N??vita',1),(614,'Nuqu??',1),(615,'Riosucio',1),(616,'San Jos?? del Palmar',1),(617,'Sip??',1),(618,'Tad??',1),(619,'Ungu??a',1),(620,'Guain??a 94 In??rida',1),(621,'Guaviare 95 San Jos?? del Guaviare',1),(622,'Calamar',1),(623,'El Retorno',1),(624,'Miraflores',1),(625,'Neiva',1),(626,'Acevedo',1),(627,'Agrado',1),(628,'Aipe',1),(629,'Algeciras',1),(630,'Altamira',1),(631,'Baraya',1),(632,'Campoalegre',1),(633,'Colombia',1),(634,'El??as',1),(635,'Garz??n',1),(636,'Gigante',1),(637,'Guadalupe',1),(638,'Hobo',1),(639,'Iquira',1),(640,'Isnos',1),(641,'La Argentina',1),(642,'La Plata',1),(643,'N??taga',1),(644,'Oporapa',1),(645,'Paicol',1),(646,'Palermo',1),(647,'Palestina',1),(648,'Pital',1),(649,'Pitalito',1),(650,'Rivera',1),(651,'Saladoblanco',1),(652,'San Agust??n',1),(653,'Santa Mar??a',1),(654,'Suaz??',1),(655,'Tarqui',1),(656,'Tesalia',1),(657,'Tello',1),(658,'Teruel',1),(659,'Timan??',1),(660,'Villavieja',1),(661,'Yaguar??',1),(662,'Riohacha',1),(663,'Barrancas',1),(664,'Dibulla',1),(665,'Distracci??n',1),(666,'El Molino',1),(667,'Fonseca',1),(668,'Hatonuevo',1),(669,'Maicao',1),(670,'Manaure',1),(671,'San Juan del Cesar',1),(672,'Urib??a',1),(673,'Urumita',1),(674,'Villanueva',1),(675,'Santa Marta',1),(676,'Aracataca',1),(677,'Ariguan?? (El Dif??cil)',1),(678,'Cerro San Antonio',1),(679,'Chivolo',1),(680,'Ci??naga',1),(681,'El Banco',1),(682,'El Pi????n',1),(683,'El Ret??n',1),(684,'Fundaci??n',1),(685,'Guamal',1),(686,'Pedraza',1),(687,'Piji??o del Carmen',1),(688,'Pivijay',1),(689,'Plato',1),(690,'Publoviejo',1),(691,'Remolino',1),(692,'Salamina',1),(693,'San Sebasti??n de Buuenavista',1),(694,'San Zen??n',1),(695,'Santa Ana',1),(696,'Sitionuevo',1),(697,'Tenerife',1),(698,'Meta 50 Villavicencio',1),(699,'Acacias',1),(700,'Barranca de Up??a',1),(701,'Cabuyaro',1),(702,'Castilla la Nueva',1),(703,'Cubarral',1),(704,'Cumaral',1),(705,'El Calvario',1),(706,'El Castillo',1),(707,'El Dorado',1),(708,'Fuente de Oro',1),(709,'Granada',1),(710,'Guamal',1),(711,'Mapirip??n',1),(712,'Mesetas',1),(713,'La Macarena',1),(714,'La Uribe',1),(715,'Lejan??as',1),(716,'Puerto Concordia',1),(717,'Puerto Gait??n',1),(718,'Puerto L??pez',1),(719,'Puerto Lleras',1),(720,'Puerto Rico',1),(721,'Restrepo',1),(722,'San Carlos de Guaroa',1),(723,'San Juan de Arama',1),(724,'San Juanito',1),(725,'San Mart??n',1),(726,'Vistahermosa',1),(727,'Pasto',1),(728,'Alb??n (San Jos??)',1),(729,'Aldana',1),(730,'Ancuy??',1),(731,'Arboleda (Berruecos)',1),(732,'Barbacoas',1),(733,'Bel??n',1),(734,'Buesaco',1),(735,'Col??n (G??nova)',1),(736,'Consac??',1),(737,'Contadero',1),(738,'C??rdoba',1),(739,'Cuaspud (Carlosama)',1),(740,'Cumbal',1),(741,'Cumbitar??',1),(742,'Chachag??i',1),(743,'El Charco',1),(744,'El Rosario',1),(745,'El Tabl??n',1),(746,'El Tambo',1),(747,'Funes',1),(748,'Guachucal',1),(749,'Guaitarilla',1),(750,'Gualmat??n',1),(751,'Iles',1),(752,'Im??es',1),(753,'Ipiales',1),(754,'La Cruz',1),(755,'La Florida',1),(756,'La Llanada',1),(757,'La Tola',1),(758,'La Uni??n',1),(759,'Leiva',1),(760,'Linares',1),(761,'Los Andes (Sotomayor)',1),(762,'Mag???? (Pay??n)',1),(763,'Mallama (Piedrancha)',1),(764,'Mosquera',1),(765,'Olaya',1),(766,'Ospina',1),(767,'Francisco Pizarro',1),(768,'Policarpa',1),(769,'Potos??',1),(770,'Providencia',1),(771,'Puerres',1),(772,'Pupiales',1),(773,'Ricaurte',1),(774,'Roberto Pay??n (San Jos??)',1),(775,'Samaniego',1),(776,'Sandon??',1),(777,'San Bernardo',1),(778,'San Lorenzo',1),(779,'San Pablo',1),(780,'San Pedro de Cartago',1),(781,'Santa B??rbara (Iscuand??)',1),(782,'Santa Cruz (Guach??vez)',1),(783,'Sapuy??s',1),(784,'Taminango',1),(785,'Tangua',1),(786,'Tumaco',1),(787,'T??querres',1),(788,'Yacuanquer',1),(789,'C??cuta',1),(790,'Abrego',1),(791,'Arboledas',1),(792,'Bochalema',1),(793,'Bucarasica',1),(794,'C??cota',1),(795,'C??chira',1),(796,'Chin??cota',1),(797,'Chitag??',1),(798,'Convenci??n',1),(799,'Cucutilla',1),(800,'Durania',1),(801,'El Carmen',1),(802,'El Tarra',1),(803,'El Zulia',1),(804,'Gramalote',1),(805,'Hacar??',1),(806,'Herr??n',1),(807,'Labateca',1),(808,'La Esperanza',1),(809,'La Playa',1),(810,'Los Patios',1),(811,'Lourdes',1),(812,'Mutiscua',1),(813,'Oca??a',1),(814,'Pamplona',1),(815,'Pamplonita',1),(816,'Puerto Santander',1),(817,'Ragonvalia',1),(818,'Salazar',1),(819,'San Calixto',1),(820,'San Cayetano',1),(821,'Santiago',1),(822,'Sardinata',1),(823,'Silos',1),(824,'Teorama',1),(825,'Tib??',1),(826,'Toledo',1),(827,'Villacaro',1),(828,'Villa del Rosario',1),(829,'Mocoa',1),(830,'Col??n',1),(831,'Orito',1),(832,'Puerto As??s',1),(833,'Puerto Caicedo',1),(834,'Puerto Guzm??n',1),(835,'Puerto Legu??zamo',1),(836,'Sibundoy',1),(837,'San Francisco',1),(838,'San Miguel',1),(839,'Santiago',1),(840,'Villa Gamuez (La Hormiga)',1),(841,'Villa Garz??n',1),(842,'Quind??o 63 Armenia',1),(843,'Buenavista',1),(844,'Calarc??',1),(845,'Circasia',1),(846,'C??rdoba',1),(847,'Filandia',1),(848,'G??nova',1),(849,'La Tebaida',1),(850,'Montenegro',1),(851,'Pijao',1),(852,'Quimbaya',1),(853,'Salento',1),(854,'Pereira',1),(855,'Ap??a',1),(856,'Balboa',1),(857,'Bel??n de Umbr??a',1),(858,'Dos Quebradas',1),(859,'Gu??tica',1),(860,'La Celia',1),(861,'La Virginia',1),(862,'Marsella',1),(863,'Mistrat??',1),(864,'Pueblo Rico',1),(865,'Quinchia',1),(866,'Santa Rosa de Cabal',1),(867,'Santuario',1),(868,'San Andr??s',1),(869,'Providencia',1),(870,'Bucaramanga',1),(871,'Aguada',1),(872,'Albania',1),(873,'Aratoca',1),(874,'Barbosa',1),(875,'Barichara',1),(876,'Barrancabermeja',1),(877,'Betulia',1),(878,'Bol??var',1),(879,'Cabrera',1),(880,'California',1),(881,'Capitanejo',1),(882,'Carcas??',1),(883,'Cepit??',1),(884,'Cerrito',1),(885,'Charal??',1),(886,'Charta',1),(887,'Chima',1),(888,'Chipat??',1),(889,'Cimitarra',1),(890,'Concepci??n',1),(891,'Confines',1),(892,'Contrataci??n',1),(893,'Coromoro',1),(894,'Curit??',1),(895,'El Carmen',1),(896,'El Guacamayo',1),(897,'El Pe????n',1),(898,'El Play??n',1),(899,'Encino',1),(900,'Enciso',1),(901,'Flori??n',1),(902,'Floridablanca',1),(903,'Gal??n',1),(904,'G??mbita',1),(905,'Gir??n',1),(906,'Guaca',1),(907,'Guadalupe',1),(908,'Guapot??',1),(909,'Guavata',1),(910,'Guepsa',1),(911,'Hato',1),(912,'Jes??s Mar??a',1),(913,'Jord??n',1),(914,'La Belleza',1),(915,'Land??zuri',1),(916,'La Paz',1),(917,'Lebrija',1),(918,'Los Santos',1),(919,'Macaravita',1),(920,'M??laga',1),(921,'Matanza',1),(922,'Mogotes',1),(923,'Molagavita',1),(924,'Ocamonte',1),(925,'Oiba',1),(926,'Onz??ga',1),(927,'Palmar',1),(928,'Palmas del Socorro',1),(929,'P??ramo',1),(930,'Pie de Cuesta',1),(931,'Pinchote',1),(932,'Puente Nacional',1),(933,'Puerto Parra',1),(934,'Puerto Wilches',1),(935,'Rionegro',1),(936,'Sabana de Torres',1),(937,'San Andr??s',1),(938,'San Benito',1),(939,'San Gil',1),(940,'San Joaqu??n',1),(941,'San Jos?? de Miranda',1),(942,'San Miguel',1),(943,'San Vicente de Chucur??',1),(944,'Santa B??rbara',1),(945,'Santa Helena del Op??n',1),(946,'Simacota',1),(947,'Socorro',1),(948,'Suaita',1),(949,'Sucre',1),(950,'Surat??',1),(951,'Tona',1),(952,'Valle de San Jos??',1),(953,'V??lez',1),(954,'Vetas',1),(955,'Villanueva',1),(956,'Zapatoca',1),(957,'Sincelejo',1),(958,'Buenavista',1),(959,'Caimito',1),(960,'Coloso (Ricaurte)',1),(961,'Corozal',1),(962,'Chal??n',1),(963,'Galeras (Nueva Granada)',1),(964,'Guarand??',1),(965,'La Uni??n',1),(966,'Los Palmitos',1),(967,'Majagual',1),(968,'Morroa',1),(969,'Ovejas',1),(970,'Palmito',1),(971,'Sampu??s',1),(972,'San Benito Abad',1),(973,'San Juan de Betulia',1),(974,'San Marcos',1),(975,'San Onofre',1),(976,'San Pedro',1),(977,'Sinc??',1),(978,'Sucre',1),(979,'Tol??',1),(980,'Toluviejo',1),(981,'Ibagu??',1),(982,'Alpujarra',1),(983,'Alvarado',1),(984,'Ambalema',1),(985,'Anz??ategui',1),(986,'Armero (Guayabal)',1),(987,'Ataco',1),(988,'Cajamarca',1),(989,'Carmen de Apical??',1),(990,'Casabianca',1),(991,'Chaparral',1),(992,'Coello',1),(993,'Coyaima',1),(994,'Cunday',1),(995,'Dolores',1),(996,'Espinal',1),(997,'Fal??n',1),(998,'Flandes',1),(999,'Fresno',1),(1000,'Guamo',1),(1001,'Herveo',1),(1002,'Honda',1),(1003,'Icononzo',1),(1004,'L??rida',1),(1005,'L??bano',1),(1006,'Mariquita',1),(1007,'Melgar',1),(1008,'Murillo',1),(1009,'Natagaima',1),(1010,'Ortega',1),(1011,'Palocabildo',1),(1012,'Piedras',1),(1013,'Planadas',1),(1014,'Prado',1),(1015,'Purificaci??n',1),(1016,'Rioblanco',1),(1017,'Roncesvalles',1),(1018,'Rovira',1),(1019,'Salda??a',1),(1020,'San Antonio',1),(1021,'San Luis',1),(1022,'Santa Isabel',1),(1023,'Su??rez',1),(1024,'Valle de San Juan',1),(1025,'Venadillo',1),(1026,'Villahermosa',1),(1027,'Villarrica',1),(1028,'Cali',1),(1029,'Alcal??',1),(1030,'Andaluc??a',1),(1031,'Ansermanuevo',1),(1032,'Argelia',1),(1033,'Bol??var',1),(1034,'Buenaventura',1),(1035,'Buga',1),(1036,'Bugalagrande',1),(1037,'Caicedonia',1),(1038,'Calima (Dari??n)',1),(1039,'Candelaria',1),(1040,'Cartago',1),(1041,'Dagua',1),(1042,'El ??guila',1),(1043,'El Cairo',1),(1044,'El Cerrito',1),(1045,'El Dovio',1),(1046,'Florida',1),(1047,'Ginebra',1),(1048,'Guacar??',1),(1049,'Jamund??',1),(1050,'La Cumbre',1),(1051,'La Uni??n',1),(1052,'La Victoria',1),(1053,'Obando',1),(1054,'Palmira',1),(1055,'Pradera',1),(1056,'Restrepo',1),(1057,'Riofr??o',1),(1058,'Roldanillo',1),(1059,'San Pedro',1),(1060,'Sevilla',1),(1061,'Toro',1),(1062,'Trujillo',1),(1063,'Tulu??',1),(1064,'Ulloa',1),(1065,'Versalles',1),(1066,'Vijes',1),(1067,'Yotoco',1),(1068,'Yumbo',1),(1069,'Zarzal',1),(1070,'Vaup??s 97 Mit??',1),(1071,'Carur??',1),(1072,'Tatam??',1),(1073,'Vichada 99 Puerto Carre??o',1),(1074,'La Primavera',1),(1075,'Santa Rosalia',1),(1076,'Cumaribo',1);

/*Table structure for table `nivel_academico` */

DROP TABLE IF EXISTS `nivel_academico`;

CREATE TABLE `nivel_academico` (
  `idnivel_academico` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) NOT NULL,
  `activo` int(11) NOT NULL,
  PRIMARY KEY (`idnivel_academico`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4;

/*Data for the table `nivel_academico` */

insert  into `nivel_academico`(`idnivel_academico`,`nombre`,`activo`) values (1,'B??sica primaria',1),(2,'B??sica secundaria ',1),(3,'Bachiller ',1),(4,'T??cnico',1),(5,'Tecn??logo',1),(6,'Profesional ',1),(7,'Master',1),(8,'Doctor ',1),(9,'Posgrado ',1),(10,'Otro ',1);

/*Table structure for table `niza` */

DROP TABLE IF EXISTS `niza`;

CREATE TABLE `niza` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=174 DEFAULT CHARSET=utf8;

/*Data for the table `niza` */

insert  into `niza`(`id`,`nombre`) values (0,NULL),(110,'???Productos qu??micos para la industria'),(111,'Pinturas, barnices, lacas; productos contra la herrumbre y el deterioro de la madera; colorantes, tintes; tintas de imprenta, tintas de marcado y tintas de grabado; resinas naturales en bruto; metales en hojas y en polvo para la pintura, la decoraci??n, la imprenta y trabajos art??sticos.'),(112,'Productos cosm??ticos y preparaciones de tocador no medicinales; dent??fricos no medicinales; productos de perfumer??a, aceites esenciales; preparaciones para blanquear y otras sustancias para lavar la ropa; preparaciones para limpiar, pulir, desengrasar y raspar.'),(113,'Aceites y grasas para uso industrial, ceras; lubricantes; compuestos para absorber, rociar y asentar el polvo; combustibles y materiales de alumbrado; velas y mechas de iluminaci??n.'),(114,'Productos farmac??uticos, preparaciones para uso m??dico y veterinario; productos higi??nicos y sanitarios para uso m??dico; alimentos y sustancias diet??ticas para uso m??dico o veterinario, alimentos para beb??s; suplementos alimenticios para personas o animales; emplastos, material para ap??sitos; material para empastes e impresiones dentales; desinfectantes; productos para eliminar animales da??inos; fungicidas, herbicidas.'),(115,'Metales comunes y sus aleaciones, menas; materiales de construcci??n y edificaci??n met??licos; construcciones transportables met??licas; cables e hilos met??licos no el??ctricos; peque??os art??culos de ferreter??a met??licos; contenedores met??licos de almacenamiento y transporte; cajas de caudales.'),(116,'M??quinas, m??quinas herramientas y herramientas mec??nicas; motores, excepto motores para veh??culos terrestres; acoplamientos y elementos de transmisi??n, excepto para veh??culos terrestres; instrumentos agr??colas que no sean herramientas de mano que funcionan manualmente; incubadoras de huevos; distribuidores autom??ticos.'),(117,'Herramientas e instrumentos de mano que funcionan manualmente; art??culos de cuchiller??a, tenedores y cucharas; armas blancas; maquinillas de afeitar.'),(118,'Aparatos e instrumentos ent??ficos, de investigaci??n, de navegaci??n, geod??sicos, fotogr??ficos, cinematogr??ficos, audiovisuales, ??pticos, de pesaje, de medici??n, de se??alizaci??n, de detecci??n, de pruebas, de inspecci??n, de salvamento y de ense??anza; aparatos e instrumentos de conducci??n, distribuci??n, transformaci??n, acumulaci??n, regulaci??n o control de la distribuci??n o del consumo de electricidad; aparatos e instrumentos de grabaci??n, transmisi??n, reproducci??n o tratamiento de sonidos, im??genes '),(119,'Aparatos e instrumentos quir??rgicos, m??dicos, odontol??gicos y veterinarios; miembros, ojos y dientes artificiales; art??culos ortop??dicos; material de sutura; dispositivos terap??uticos y de asistencia para personas discapacitadas; aparatos de masaje; aparatos, dispositivos y art??culos de puericultura; aparatos, dispositivos y art??culos para actividades sexuales.'),(120,'Aparatos e instalaciones de alumbrado, calefacci??n, enfriamiento, producci??n de vapor, cocci??n, secado, ventilaci??n y distribuci??n de agua, as?? como instalaciones sanitarias.'),(121,'Veh??culos; aparatos de locomoci??n terrestre, a??rea o acu??tica.'),(122,'Armas de fuego; municiones y proyectiles; explosivos; fuegos artificiales.'),(123,'Metales preciosos y sus aleaciones; art??culos de joyer??a, piedras preciosas y semipreciosas; art??culos de relojer??a e instrumentos cronom??tricos.'),(124,'nstrumentos musicales; atriles para partituras y soportes para instrumentos musicales; batutas'),(125,'Papel y cart??n; productos de imprenta; material de encuadernaci??n; fotograf??as; art??culos de papeler??a y art??culos de oficina, excepto muebles; adhesivos (pegamentos) de papeler??a o para uso dom??stico; material de dibujo y material para artistas; pinceles; material de instrucci??n y material did??ctico; hojas, pel??culas y bolsas de materias pl??sticas para embalar y empaquetar; caracteres de imprenta, clich??s de imprenta'),(126,'Caucho, gutapercha, goma, amianto y mica en bruto o semielaborados, as?? como suced??neos de estos materiales; materias pl??sticas y resinas en forma extrudida utilizadas en procesos de fabricaci??n; materiales para calafatear, estopar y aislar; tuber??as, tubos y mangueras flexibles no met??licos'),(127,'Cuero y cuero de imitaci??n; pieles de animales; art??culos de equipaje y bolsas de transporte; paraguas y sombrillas; bastones; fustas, arneses y art??culos de guarnicioner??a; collares, correas y ropa para animales'),(128,'Materiales de construcci??n no met??licos; tuber??as r??gidas no met??licas para la construcci??n; asfalto, pez, alquitr??n y bet??n; construcciones transportables no met??licas; monumentos no met??licos'),(129,'Muebles, espejos, marcos; contenedores no met??licos de almacenamiento o transporte; hueso, cuerno, ballena o n??car, en bruto o semielaborados; conchas; espuma de mar; ??mbar amarillo'),(130,'Utensilios y recipientes para uso dom??stico y culinario; utensilios de cocina y vajilla, excepto tenedores, cuchillos y cucharas; peines y esponjas; cepillos; materiales para fabricar cepillos; material de limpieza; vidrio en bruto o semielaborado, excepto vidrio de construcci??n; art??culos de cristaler??a, porcelana y loza'),(131,'Cuerdas y cordeles; redes; tiendas de campa??a y lonas; toldos de materias textiles o sint??ticas; velas de navegaci??n; sacos para el transporte y almacenamiento de mercanc??as a granel; materiales de acolchado y relleno, excepto papel, cart??n, caucho o materias pl??sticas; materias textiles fibrosas en bruto y sus suced??neos'),(132,'Hilos e hilados para uso textil.'),(133,'Tejidos y sus suced??neos; ropa de hogar; cortinas de materias textiles o de materias pl??sticas.'),(134,'Prendas de vestir, calzado, art??culos de sombrerer??a.'),(135,'Encajes, cordones y bordados, as?? como cintas y lazos de mercer??a; botones, ganchos y ojetes, alfileres y agujas; flores artificiales; adornos para el cabello; cabello postizo.'),(136,'Alfombras, felpudos, esteras y esterillas, lin??leo y otros revestimientos de suelos; tapices murales que no sean de materias textiles'),(137,'Juegos y juguetes; aparatos de videojuegos; art??culos de gimnasia y deporte; adornos para ??rboles de Navidad'),(138,'Carne, pescado, carne de ave y carne de caza; extractos de carne; frutas y verduras, hortalizas y legumbres en conserva, congeladas, secas y cocidas; jaleas, confituras, compotas; huevos; leche, quesos, mantequilla, yogur y otros productos l??cteos; aceites y grasas para uso alimenticio.'),(139,'Caf??, t??, cacao y suced??neos del caf??; arroz, pastas alimenticias y fideos; tapioca y sag??; harinas y preparaciones a base de cereales; pan, productos de pasteler??a y confiter??a; chocolate; helados cremosos, sorbetes y otros helados; az??car, miel, jarabe de melaza; levadura, polvos de hornear; sal, productos para sazonar, especias, hierbas en conserva; vinagre, salsas y otros condimentos; hielo'),(140,'Productos agr??colas, acu??colas, hort??colas y forestales en bruto y sin procesar; granos y semillas en bruto o sin procesar; frutas y verduras, hortalizas y legumbres frescas, hierbas arom??ticas frescas; plantas y flores naturales; bulbos, plantones y semillas para plantar; animales vivos; productos alimenticios y bebidas para animales; malta.'),(141,'Cervezas; bebidas sin alcohol; aguas minerales; bebidas a base de frutas y zumos de frutas; siropes y otras preparaciones sin alcohol para elaborar bebidas.'),(142,'Bebidas alcoh??licas, excepto cervezas; preparaciones alcoh??licas para elaborar bebidas'),(143,'Tabaco y suced??neos del tabaco; cigarrillos y puros; cigarrillos electr??nicos y vaporizadores bucales para fumadores; art??culos para fumadores; cerillas'),(144,'Publicidad; gesti??n, organizaci??n y administraci??n de negocios comerciales; trabajos de oficina'),(145,'Servicios financieros, monetarios y bancarios; servicios de seguros; negocios inmobiliarios'),(146,'Servicios de construcci??n; servicios de instalaci??n y reparaci??n; extracci??n minera, perforaci??n de gas y de petr??leo'),(147,'Servicios de telecomunicaciones'),(148,'Transporte; embalaje y almacenamiento de mercanc??as; organizaci??n de viajes'),(149,'Tratamiento de materiales; reciclaje de residuos y desechos; purificaci??n del aire y tratamiento del agua; servicios de impresi??n; conservaci??n de alimentos y bebidas'),(150,'Educaci??n; formaci??n; servicios de entretenimiento; actividades deportivas y culturales'),(151,'Servicios cient??ficos y tecnol??gicos, as?? como servicios de investigaci??n y dise??o conexos; servicios de an??lisis industrial, investigaci??n industrial y dise??o industrial; control de calidad y servicios de autenticaci??n; dise??o y desarrollo de hardware y software'),(152,'Servicios de restauraci??n (alimentaci??n); hospedaje temporal'),(153,'Servicios m??dicos; servicios veterinarios; tratamientos de higiene y de belleza para personas o animales; servicios de agricultura, acuicultura, horticultura y silvicultura'),(154,'Servicios jur??dicos; servicios de seguridad para la protecci??n f??sica de bienes materiales y personas; servicios personales y sociales prestados por terceros para satisfacer necesidades individuales');

/*Table structure for table `proyecto` */

DROP TABLE IF EXISTS `proyecto`;

CREATE TABLE `proyecto` (
  `idRegistros` int(11) NOT NULL AUTO_INCREMENT,
  `Tipo_Registro_idTipo_Registro` int(11) NOT NULL,
  `usuarios_idUsuarios` int(11) NOT NULL,
  PRIMARY KEY (`idRegistros`),
  KEY `fk_Registros_Tipo_Registro1_idx` (`Tipo_Registro_idTipo_Registro`),
  KEY `fk_registros_usuarios1_idx` (`usuarios_idUsuarios`),
  CONSTRAINT `fk_Registros_Tipo_Registro1` FOREIGN KEY (`Tipo_Registro_idTipo_Registro`) REFERENCES `tipo_registro` (`idTipo_Registro`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_registros_usuarios1` FOREIGN KEY (`usuarios_idUsuarios`) REFERENCES `usuarios` (`idUsuarios`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `proyecto_ibfk_1` FOREIGN KEY (`Tipo_Registro_idTipo_Registro`) REFERENCES `registros_x_proyectos` (`idRegistros`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `proyecto` */

/*Table structure for table `registro` */

DROP TABLE IF EXISTS `registro`;

CREATE TABLE `registro` (
  `idRegistro` int(11) NOT NULL AUTO_INCREMENT,
  `tipo_registro` int(11) DEFAULT NULL,
  `usuarios_idUsuarios` int(11) NOT NULL,
  `nombre_especie_cultivo` varchar(250) DEFAULT NULL,
  `nombre_cientifico` varchar(250) DEFAULT NULL,
  `denominacion_propuesta` varchar(200) DEFAULT NULL,
  `referencia_obtentor_lg` varchar(600) DEFAULT NULL,
  `descripcion_variedad` varchar(500) DEFAULT NULL,
  `info_origen_genetico` varchar(800) DEFAULT NULL,
  `variedad_obtenida` varchar(800) DEFAULT NULL,
  `variedad_transferida` varchar(200) DEFAULT NULL,
  `descripcion_variedad_sena` text DEFAULT NULL,
  `solicitud_Proteccion` varchar(800) DEFAULT NULL,
  `tipo_proteccion_sl` varchar(400) DEFAULT NULL,
  `pais_sl` varchar(150) DEFAULT NULL,
  `numero_solicitud_sl` varchar(80) DEFAULT NULL,
  `estado_solicitud_sl` varchar(250) DEFAULT NULL,
  `referencia_obtentor_sl` varchar(200) DEFAULT NULL,
  `situacion_variedad` varchar(500) DEFAULT NULL,
  `cuando_variedad` text DEFAULT NULL,
  `donde_variedad` text DEFAULT NULL,
  `indiqueSituacion` varchar(500) DEFAULT NULL,
  `pais_Variedad_Situacion` text DEFAULT NULL,
  `cuando_Situacion` text DEFAULT NULL,
  `denominacion_Situacion` text DEFAULT NULL,
  `examen_Tecnico` varchar(500) DEFAULT NULL,
  `examen_Tec_Fech_In` varchar(500) DEFAULT NULL,
  `examen_Tec_Fech_Fin` text DEFAULT NULL,
  `origen_Caracteres` text DEFAULT NULL,
  `origen_Nivel_Expresion` text DEFAULT NULL,
  `origen_Variedad` text DEFAULT NULL,
  `origen_nota` text DEFAULT NULL,
  `variedad_denominacion_sd` text DEFAULT NULL,
  `variedad_Caracter` text DEFAULT NULL,
  `variedad_Similar` text DEFAULT NULL,
  `variedad_Presentada` text DEFAULT NULL,
  `resistencia_Plagas` text DEFAULT NULL,
  `condiciones_Variedad` text DEFAULT NULL,
  `otras_Informacion` text DEFAULT NULL,
  `deseaRegistrar_Nc` varchar(60) DEFAULT NULL,
  `resultado_Obtenido_Nc` varchar(50) DEFAULT NULL,
  `tipo_Proteccion_Nc` varchar(50) DEFAULT NULL,
  `centro_Forma_Solicitante_Nc` varchar(50) DEFAULT NULL,
  `regional_Solicitante_Nc` varchar(200) DEFAULT NULL,
  `grupo_Investigacion_Nc` varchar(200) DEFAULT NULL,
  `nombre_Proyecto_Nc` varchar(250) DEFAULT NULL,
  `nombre_Titular_Crea_Nc` varchar(250) DEFAULT NULL,
  `tipo_vinculacion_sena_Nc` varchar(250) DEFAULT NULL,
  `tipo_Documento_Nc` varchar(50) DEFAULT NULL,
  `numero_Documento_Nc` varchar(40) DEFAULT NULL,
  `direccion_Nc` varchar(150) DEFAULT NULL,
  `telefono_Contacto_Nc` int(25) DEFAULT NULL,
  `correo_Electonico_Nc` varchar(150) DEFAULT NULL,
  `nombre_Cotitulares_Nc` varchar(150) DEFAULT NULL,
  `cedula_Nit_Cotitulare_Nc` varchar(60) DEFAULT NULL,
  `repre_Legal_Document_Nc` varchar(150) DEFAULT NULL,
  `dirrecion_Nc` varchar(200) DEFAULT NULL,
  `telefono_Represent_Nc` int(25) DEFAULT NULL,
  `correo_Represent_Nc` varchar(120) DEFAULT NULL,
  `porcent_Participacion_Nc` varchar(50) DEFAULT NULL,
  `acuerdo_Propiedad_Documento_Nc` varchar(150) DEFAULT NULL,
  `estado_Desarrollo_Nc` varchar(50) DEFAULT NULL,
  `electric_Electonica_Nc` varchar(60) DEFAULT NULL,
  `ing_Mecanica_Nc` varchar(60) DEFAULT NULL,
  `instrumentos_Nc` varchar(60) DEFAULT NULL,
  `quimica_Nc` varchar(60) DEFAULT NULL,
  `sector_Tecnologico_Nc` varchar(60) DEFAULT NULL,
  `otro_producto_consumo_Nc` text DEFAULT NULL,
  `descripcion_Creacion_Nc` text DEFAULT NULL,
  `ventajas_Bene_Creacion_Nc` text DEFAULT NULL,
  `caracteris_Novedosas_Nc` text DEFAULT NULL,
  `impacto_Solucion_Nc` text DEFAULT NULL,
  `estado_Arte_Nc` text DEFAULT NULL,
  `publicacion_Divulgacion_Nc` text DEFAULT NULL,
  `indique_Otro_Nc` text DEFAULT NULL,
  `posibilidades_Mercado_Nc` text DEFAULT NULL,
  `contacto_acceso_Nc` text DEFAULT NULL,
  `documento_dise??o_creacion_Nc` varchar(150) DEFAULT NULL,
  `obserbacion_Adicional_Nc` text DEFAULT NULL,
  `tipoSubRegistro_Sd` varchar(200) DEFAULT NULL,
  `tipo_marca_Sd` varchar(30) DEFAULT NULL,
  `marca_logos_Sd` varchar(25) DEFAULT NULL,
  `indiqueColores_Sd` varchar(100) DEFAULT NULL,
  `codigoColor_Sd` varchar(150) DEFAULT NULL,
  `tipo_Color_Sd` varchar(25) DEFAULT NULL,
  `otros_Colores_Sd` varchar(60) DEFAULT NULL,
  `productos_Servicios_Sd` text DEFAULT NULL,
  `caracteristicas_Tecnicas_Sd` text DEFAULT NULL,
  `describaServicioFuturo_Sd` text DEFAULT NULL,
  `seleccione_Marca_Sd` int(11) DEFAULT NULL,
  `seleccione_Marca_Futuro_Sd` int(11) DEFAULT NULL,
  `tipo_persona_orig_Sd` varchar(200) DEFAULT NULL,
  `origen_Registro_Origen_sd` varchar(500) DEFAULT NULL,
  `documentos_Sd` int(11) DEFAULT NULL,
  `reglamento_Certif_Sd` varchar(100) DEFAULT NULL,
  `tipoPersonaCertif_Sd` varchar(100) DEFAULT NULL,
  `lemacomercial_Sd` varchar(100) DEFAULT NULL,
  `activ_Comer_Name_Sd` varchar(200) DEFAULT NULL,
  `nombreComercial_Sd` varchar(200) DEFAULT NULL,
  `nomComer_nat_comer_Sd` varchar(200) DEFAULT NULL,
  `nomComer_jurid_dep_nom` varchar(200) DEFAULT NULL,
  `nombre_Autor_Du` varchar(200) DEFAULT NULL,
  `naciona_autor_Du` varchar(200) DEFAULT NULL,
  `documento_autor_Du` varchar(200) DEFAULT NULL,
  `lugar_autor_Du` varchar(200) DEFAULT NULL,
  `direccion_autor_Du` varchar(200) DEFAULT NULL,
  `nombre_reprod_Du` varchar(200) DEFAULT NULL,
  `correo_reprod_Du` varchar(200) DEFAULT NULL,
  `sitio_reprod_Du` varchar(200) DEFAULT NULL,
  `direccion_reprod_Du` varchar(200) DEFAULT NULL,
  `ciudad_reprod_Du` varchar(200) DEFAULT NULL,
  `pais_reprod_Du` varchar(200) DEFAULT NULL,
  `estado_obra_Du` varchar(200) DEFAULT NULL,
  `titulo_obra_Du` varchar(200) DEFAULT NULL,
  `fecha_creacion_obra_Du` date DEFAULT NULL,
  `fecha_publi_obra_Du` date DEFAULT NULL,
  `pais_orign_obra_Du` varchar(200) DEFAULT NULL,
  `categoria_obra_Du` varchar(200) DEFAULT NULL,
  `segunMarca_Du` text DEFAULT NULL,
  `segunCreacion_Du` text DEFAULT NULL,
  `segunautor_Du` text DEFAULT NULL,
  `otra_autor_Du` text DEFAULT NULL,
  `descripcion_breve_Du` text DEFAULT NULL,
  `funcion1_platform_Du` text DEFAULT NULL,
  `funcion2_platform_Du` text DEFAULT NULL,
  `funcion3_platform_Du` text DEFAULT NULL,
  `principal_Ventajas_Du` text DEFAULT NULL,
  `poblacion_usara_Du` text DEFAULT NULL,
  `vantaja_desarrollo_Du` text DEFAULT NULL,
  `elemen_soporte_logic_Du` text DEFAULT NULL,
  `titu_patrimon_tranfe_Du` text DEFAULT NULL,
  `expre_part_observacion_Du` text DEFAULT NULL,
  `nombre_solicitante_Du` text DEFAULT NULL,
  `document_solicitante_Du` text DEFAULT NULL,
  `lugar_expedi_solicitante_Du` text DEFAULT NULL,
  `repre_legal_solicitante_Du` text DEFAULT NULL,
  `cedula_ciudad_solicitante_Du` text DEFAULT NULL,
  `nacio_solicitante_Du` text DEFAULT NULL,
  `pais_solicitante_Du` text DEFAULT NULL,
  `ciud_solicitante_Du` text DEFAULT NULL,
  `telefono_solicitante_Du` text DEFAULT NULL,
  `nombre_fonografico_Du_Fon` text DEFAULT NULL,
  `naciona_fonografico_Du` text DEFAULT NULL,
  `tpDocumentFono_Du` text DEFAULT NULL,
  `numero_doc_fonografico_Du` text DEFAULT NULL,
  `lugar_expedi_fonografico_Du` text DEFAULT NULL,
  `direccion_fonografico_Du` text DEFAULT NULL,
  `ciudad_fonografico_Du` text DEFAULT NULL,
  `email_fonografico_Du` text DEFAULT NULL,
  `titulo_obra_fonografico_Du` text DEFAULT NULL,
  `fecha_pri_fija_fonografico_Du` date DEFAULT NULL,
  `pais_orign_obra_fono_Du` text DEFAULT NULL,
  `fecha_publi_fono_Du` date DEFAULT NULL,
  `editada_fonografico_Du` text DEFAULT NULL,
  `inedita_fonografico_Du` text DEFAULT NULL,
  `year_cansion_fnografica_Du` year(4) DEFAULT NULL,
  `titulo_obra_fija_fon_Du` text DEFAULT NULL,
  `nombre_com_inter_fonografica_Du` text DEFAULT NULL,
  `pais_orign_fonografica_Du` text DEFAULT NULL,
  `nom_razon_fonograma_Du` text DEFAULT NULL,
  `nombre_soli_fono_Du` text DEFAULT NULL,
  `naciona_soli_fono_Du` text DEFAULT NULL,
  `tpDocument_soli_Fono_Du` text DEFAULT NULL,
  `nume_doc_fono_Du` text DEFAULT NULL,
  `expedicion_fono_Du` text DEFAULT NULL,
  `direccion_soli_fono_Du` text DEFAULT NULL,
  `ciudad_soli_fono_Du` text DEFAULT NULL,
  `email_soli_fono_Du` text DEFAULT NULL,
  `represen_soli_fono_Du` text DEFAULT NULL,
  `pais_soli_fono_Du` text DEFAULT NULL,
  `telefono_soli_fono_Du` text DEFAULT NULL,
  `obra_Artistic__Atis_Du` text DEFAULT NULL,
  `titu_obra_artis_Du` text DEFAULT NULL,
  `a??o_creacion_artis_Du` date DEFAULT NULL,
  `pais_origen_artis_Du` text DEFAULT NULL,
  `editada_artis_Du` text DEFAULT NULL,
  `ineditada_artis_Du` text DEFAULT NULL,
  `fecha_publi_artis_Du` date DEFAULT NULL,
  `num_edic_artis_Du` text DEFAULT NULL,
  `editor_artis_Du` text DEFAULT NULL,
  `direccion_artis_Du` text DEFAULT NULL,
  `tpDocumentArtis_Du` text DEFAULT NULL,
  `num_docum_artis_Du` text DEFAULT NULL,
  `nacional_artis_Du` text DEFAULT NULL,
  `impresor_artis_Du` text DEFAULT NULL,
  `cracionFinObra_Artis_Du` date DEFAULT NULL,
  `catObraArtis_Du` text DEFAULT NULL,
  `caractObra_Du` text DEFAULT NULL,
  `orig_Obra_Du` text DEFAULT NULL,
  `forma_Conoser_Du` text DEFAULT NULL,
  `forma_elabora_Du` text DEFAULT NULL,
  `otroTpObra_Du` text DEFAULT NULL,
  `obra_Litera_Du` text DEFAULT NULL,
  `tipoMusica_Du` text DEFAULT NULL,
  `obra_Musical_Du` text DEFAULT NULL,
  `colectivo_tp_Person_sd` text DEFAULT NULL,
  `tpProOrg_Sd` text DEFAULT NULL,
  PRIMARY KEY (`idRegistro`),
  KEY `fk_registro_usuarios1_idx` (`usuarios_idUsuarios`),
  KEY `seleccione_Marca_Mc` (`seleccione_Marca_Sd`),
  KEY `seleccione_Marca_Futuro_Mc` (`seleccione_Marca_Futuro_Sd`),
  KEY `documentos_Sd` (`documentos_Sd`),
  KEY `tipo_registro` (`tipo_registro`),
  CONSTRAINT `fk_registro_usuarios1` FOREIGN KEY (`usuarios_idUsuarios`) REFERENCES `usuarios` (`idUsuarios`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `registro_ibfk_1` FOREIGN KEY (`seleccione_Marca_Sd`) REFERENCES `niza` (`id`),
  CONSTRAINT `registro_ibfk_2` FOREIGN KEY (`seleccione_Marca_Futuro_Sd`) REFERENCES `niza` (`id`),
  CONSTRAINT `registro_ibfk_3` FOREIGN KEY (`documentos_Sd`) REFERENCES `documentos` (`id`),
  CONSTRAINT `registro_ibfk_4` FOREIGN KEY (`tipo_registro`) REFERENCES `tipo_registro` (`idTipo_Registro`)
) ENGINE=InnoDB AUTO_INCREMENT=327 DEFAULT CHARSET=utf8mb4;

/*Data for the table `registro` */

insert  into `registro`(`idRegistro`,`tipo_registro`,`usuarios_idUsuarios`,`nombre_especie_cultivo`,`nombre_cientifico`,`denominacion_propuesta`,`referencia_obtentor_lg`,`descripcion_variedad`,`info_origen_genetico`,`variedad_obtenida`,`variedad_transferida`,`descripcion_variedad_sena`,`solicitud_Proteccion`,`tipo_proteccion_sl`,`pais_sl`,`numero_solicitud_sl`,`estado_solicitud_sl`,`referencia_obtentor_sl`,`situacion_variedad`,`cuando_variedad`,`donde_variedad`,`indiqueSituacion`,`pais_Variedad_Situacion`,`cuando_Situacion`,`denominacion_Situacion`,`examen_Tecnico`,`examen_Tec_Fech_In`,`examen_Tec_Fech_Fin`,`origen_Caracteres`,`origen_Nivel_Expresion`,`origen_Variedad`,`origen_nota`,`variedad_denominacion_sd`,`variedad_Caracter`,`variedad_Similar`,`variedad_Presentada`,`resistencia_Plagas`,`condiciones_Variedad`,`otras_Informacion`,`deseaRegistrar_Nc`,`resultado_Obtenido_Nc`,`tipo_Proteccion_Nc`,`centro_Forma_Solicitante_Nc`,`regional_Solicitante_Nc`,`grupo_Investigacion_Nc`,`nombre_Proyecto_Nc`,`nombre_Titular_Crea_Nc`,`tipo_vinculacion_sena_Nc`,`tipo_Documento_Nc`,`numero_Documento_Nc`,`direccion_Nc`,`telefono_Contacto_Nc`,`correo_Electonico_Nc`,`nombre_Cotitulares_Nc`,`cedula_Nit_Cotitulare_Nc`,`repre_Legal_Document_Nc`,`dirrecion_Nc`,`telefono_Represent_Nc`,`correo_Represent_Nc`,`porcent_Participacion_Nc`,`acuerdo_Propiedad_Documento_Nc`,`estado_Desarrollo_Nc`,`electric_Electonica_Nc`,`ing_Mecanica_Nc`,`instrumentos_Nc`,`quimica_Nc`,`sector_Tecnologico_Nc`,`otro_producto_consumo_Nc`,`descripcion_Creacion_Nc`,`ventajas_Bene_Creacion_Nc`,`caracteris_Novedosas_Nc`,`impacto_Solucion_Nc`,`estado_Arte_Nc`,`publicacion_Divulgacion_Nc`,`indique_Otro_Nc`,`posibilidades_Mercado_Nc`,`contacto_acceso_Nc`,`documento_dise??o_creacion_Nc`,`obserbacion_Adicional_Nc`,`tipoSubRegistro_Sd`,`tipo_marca_Sd`,`marca_logos_Sd`,`indiqueColores_Sd`,`codigoColor_Sd`,`tipo_Color_Sd`,`otros_Colores_Sd`,`productos_Servicios_Sd`,`caracteristicas_Tecnicas_Sd`,`describaServicioFuturo_Sd`,`seleccione_Marca_Sd`,`seleccione_Marca_Futuro_Sd`,`tipo_persona_orig_Sd`,`origen_Registro_Origen_sd`,`documentos_Sd`,`reglamento_Certif_Sd`,`tipoPersonaCertif_Sd`,`lemacomercial_Sd`,`activ_Comer_Name_Sd`,`nombreComercial_Sd`,`nomComer_nat_comer_Sd`,`nomComer_jurid_dep_nom`,`nombre_Autor_Du`,`naciona_autor_Du`,`documento_autor_Du`,`lugar_autor_Du`,`direccion_autor_Du`,`nombre_reprod_Du`,`correo_reprod_Du`,`sitio_reprod_Du`,`direccion_reprod_Du`,`ciudad_reprod_Du`,`pais_reprod_Du`,`estado_obra_Du`,`titulo_obra_Du`,`fecha_creacion_obra_Du`,`fecha_publi_obra_Du`,`pais_orign_obra_Du`,`categoria_obra_Du`,`segunMarca_Du`,`segunCreacion_Du`,`segunautor_Du`,`otra_autor_Du`,`descripcion_breve_Du`,`funcion1_platform_Du`,`funcion2_platform_Du`,`funcion3_platform_Du`,`principal_Ventajas_Du`,`poblacion_usara_Du`,`vantaja_desarrollo_Du`,`elemen_soporte_logic_Du`,`titu_patrimon_tranfe_Du`,`expre_part_observacion_Du`,`nombre_solicitante_Du`,`document_solicitante_Du`,`lugar_expedi_solicitante_Du`,`repre_legal_solicitante_Du`,`cedula_ciudad_solicitante_Du`,`nacio_solicitante_Du`,`pais_solicitante_Du`,`ciud_solicitante_Du`,`telefono_solicitante_Du`,`nombre_fonografico_Du_Fon`,`naciona_fonografico_Du`,`tpDocumentFono_Du`,`numero_doc_fonografico_Du`,`lugar_expedi_fonografico_Du`,`direccion_fonografico_Du`,`ciudad_fonografico_Du`,`email_fonografico_Du`,`titulo_obra_fonografico_Du`,`fecha_pri_fija_fonografico_Du`,`pais_orign_obra_fono_Du`,`fecha_publi_fono_Du`,`editada_fonografico_Du`,`inedita_fonografico_Du`,`year_cansion_fnografica_Du`,`titulo_obra_fija_fon_Du`,`nombre_com_inter_fonografica_Du`,`pais_orign_fonografica_Du`,`nom_razon_fonograma_Du`,`nombre_soli_fono_Du`,`naciona_soli_fono_Du`,`tpDocument_soli_Fono_Du`,`nume_doc_fono_Du`,`expedicion_fono_Du`,`direccion_soli_fono_Du`,`ciudad_soli_fono_Du`,`email_soli_fono_Du`,`represen_soli_fono_Du`,`pais_soli_fono_Du`,`telefono_soli_fono_Du`,`obra_Artistic__Atis_Du`,`titu_obra_artis_Du`,`a??o_creacion_artis_Du`,`pais_origen_artis_Du`,`editada_artis_Du`,`ineditada_artis_Du`,`fecha_publi_artis_Du`,`num_edic_artis_Du`,`editor_artis_Du`,`direccion_artis_Du`,`tpDocumentArtis_Du`,`num_docum_artis_Du`,`nacional_artis_Du`,`impresor_artis_Du`,`cracionFinObra_Artis_Du`,`catObraArtis_Du`,`caractObra_Du`,`orig_Obra_Du`,`forma_Conoser_Du`,`forma_elabora_Du`,`otroTpObra_Du`,`obra_Litera_Du`,`tipoMusica_Du`,`obra_Musical_Du`,`colectivo_tp_Person_sd`,`tpProOrg_Sd`) values (318,3,19,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Dep??sito de ense??a comercial','Posici??n','S??','Indique los colores: por ejemplo, ???azul???, ???amarillo???, ???rojo???. No se deber??n utilizar adjetivos para ','RGB (tres casillas) RGB 285, 02, 38','(pregunta opcional, respo','','','','',0,0,'Null','',157,'Null','Null','Null','La actividad comercial o industrial: Indique a que actividad se dedica el titular.','','','El nombre comercial.',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Null',NULL),(319,2,19,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'seleccione','Null','Null','prueba','Bogota','Grupo de investigaci??n :','Nombre del Proyecto :',' Nombre de titulares de la creaci??n :','Tipo de Vinculaci??n al SENA :','C??dula de ciudadan??a','342432','Carrera 75L bis 62 H #66 Sur',2147483647,'alejandrolagunacortes@gmail.com','Nombre de cotitulares:','C??dula o NIT de cotitulares :','Representante :','Carrera 75L bis 62 H #66 Sur',2147483647,'rre@gmail.com','Porcentaje de participaci??n de los cotitulares % :','Farma_err_user.png','TRL_2','Aparatos electr??nicos, Ingenier??a electr??nica, energ??a el??ct','Manejo','Control','Materiales Metalurgia','','Descripci??n de la creaci??n a registrar :','Ingenier??a civil','Ventajas y Beneficios de la Creaci??n :','Caracter??sticas Novedosas :','Impacto o soluci??n :','Estado del Arte :','No','Estado del Arte :','Estado del Arte :','S??','Farma_err_user.png','Observaciones Adicionales :\r\n',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(320,3,19,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Registro de marca comercial','Null','No','Indique los colores: por ejemplo, ???azul???, ???amarillo???, ???rojo???. No se deber??n utilizar adjetivos para ','','','','','Describa las caracter??sticas t??cnicas de su producto o servicio :','Describa los productos y servicios que comercializar??, vender?? o prestar?? a futuro :',123,125,'Null','',158,'Null','Null','Null','','','','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Null',NULL),(321,3,19,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Registro de denominaci??n de origen','Null','Null','','','','','Describa los productos y servicios principales que comercializa, vende o presta actualmente :','Describa los productos y servicios principales que comercializa, vende o presta actualmente :','Describa los productos y servicios principales que comercializa, vende o presta actualmente :',123,125,'Asociaci??n de productores, elaboradores, transformadores o extractores','Denominaci??n de origen a registrar Ejemplo: Caf?? de colombia, Queso Paipa',159,'Null','Null','Null','','','','',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'Null',NULL),(322,1,19,'2314214','Nombre com??n, especie y cultivo:','Dominaci??n propuesta:','Referencia del Obtentor:','De una breve descripci??n de la variedad:','Escriba la informaci??n sobre el origen gen??tico, mantenimiento y reproducci??n o multiplicaci??n de la variedad:','Colombia','Contracto','','Si','tipo de proteccion','Colombia',' Nombre: Nacionalidad:','Bogota','denominacion de referencia','No ha sido ofrecida a la vaenta o entregada de otra manera ilicita a terceros en la subregi??n andina','','','No ha sido ofrecida a la venta o entregada de otra manera licita en terceros pa??ses','','','','Ya se ha realizado','','Escriba la informaci??n sobre el origen gen??tico, mantenimiento y reproducci??n o multiplicaci??n de la variedad:','Informaci??n sobre el origen gen??tico, mantenimiento y reproducci??m o multiplicaci??n de la variedad:','Informaci??n sobre el origen gen??tico, mantenimiento y reproducci??m o multiplicaci??n de la variedad:','Informaci??n sobre el origen gen??tico, mantenimiento y reproducci??m o multiplicaci??n de la variedad:','Informaci??n sobre el origen gen??tico, mantenimiento y reproducci??m o multiplicaci??n de la variedad:','Informaci??n sobre el origen gen??tico, mantenimiento y reproducci??m o multiplicaci??n de la variedad:','Informaci??n sobre el origen gen??tico, mantenimiento y reproducci??m o multiplicaci??n de la variedad:','Informaci??n sobre el origen gen??tico, mantenimiento y reproducci??m o multiplicaci??n de la variedad:','Informaci??n sobre el origen gen??tico, mantenimiento y reproducci??m o multiplicaci??n de la variedad:','Informaci??n sobre el origen gen??tico, mantenimiento y reproducci??m o multiplicaci??n de la variedad:','Informaci??n sobre el origen gen??tico, mantenimiento y reproducci??m o multiplicaci??n de la variedad:','Informaci??n sobre el origen gen??tico, mantenimiento y reproducci??m o multiplicaci??n de la variedad:',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);

/*Table structure for table `registro_full` */

DROP TABLE IF EXISTS `registro_full`;

CREATE TABLE `registro_full` (
  `idRegistro_full` int(11) NOT NULL AUTO_INCREMENT,
  `usuarios_idUsuarios` int(11) NOT NULL,
  `Codigo_Proyecto` text NOT NULL,
  `tipo_registro_idTipo_Registro` int(11) NOT NULL,
  `registro_idRegistro` int(11) NOT NULL,
  PRIMARY KEY (`idRegistro_full`),
  KEY `fk_Registro_full_usuarios1_idx` (`usuarios_idUsuarios`),
  KEY `fk_Registro_full_tipo_registro1_idx` (`tipo_registro_idTipo_Registro`),
  KEY `fk_registro_full_registro1_idx` (`registro_idRegistro`),
  CONSTRAINT `fk_Registro_full_tipo_registro1` FOREIGN KEY (`tipo_registro_idTipo_Registro`) REFERENCES `tipo_registro` (`idTipo_Registro`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_Registro_full_usuarios1` FOREIGN KEY (`usuarios_idUsuarios`) REFERENCES `usuarios` (`idUsuarios`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_registro_full_registro1` FOREIGN KEY (`registro_idRegistro`) REFERENCES `registro` (`idRegistro`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=127 DEFAULT CHARSET=utf8mb4;

/*Data for the table `registro_full` */

insert  into `registro_full`(`idRegistro_full`,`usuarios_idUsuarios`,`Codigo_Proyecto`,`tipo_registro_idTipo_Registro`,`registro_idRegistro`) values (118,1,'A2021-052315-0168',3,318),(119,1,'A2021-052315-0113',2,319),(120,0,'A2021-052315-0168',3,320),(121,0,'A2021-052315-0113',3,321),(122,0,'A2021-052315-0113',1,322);

/*Table structure for table `registros_x_proyectos` */

DROP TABLE IF EXISTS `registros_x_proyectos`;

CREATE TABLE `registros_x_proyectos` (
  `idRegistros` int(11) NOT NULL AUTO_INCREMENT,
  `Proyectos_idProyectos` int(11) NOT NULL,
  `Registros_idRegistros` int(11) NOT NULL,
  PRIMARY KEY (`idRegistros`),
  KEY `fk_Registros_x_Proyectos_Proyectos1_idx` (`Proyectos_idProyectos`),
  KEY `fk_Registros_x_Proyectos_Registros1_idx` (`Registros_idRegistros`),
  CONSTRAINT `registros_x_proyectos_ibfk_1` FOREIGN KEY (`Registros_idRegistros`) REFERENCES `registro` (`idRegistro`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `registros_x_proyectos` */

/*Table structure for table `reunion` */

DROP TABLE IF EXISTS `reunion`;

CREATE TABLE `reunion` (
  `id` bigint(11) NOT NULL AUTO_INCREMENT,
  `reunion_Fecha` date DEFAULT NULL,
  `reunion_Hora` time DEFAULT NULL,
  `reunion_Titulo` varchar(100) DEFAULT NULL,
  `reunion_link` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

/*Data for the table `reunion` */

insert  into `reunion`(`id`,`reunion_Fecha`,`reunion_Hora`,`reunion_Titulo`,`reunion_link`) values (1,'2021-09-22','15:00:00','Taller pr??ctico b??squeda de patentes',' https://zoom.us/j/98882275860'),(2,'2021-09-21','09:00:02','Tercer conversatorio en propiedad intelectual ','https://siccapacitaciones.sic.gov.co/index.php?id=8b496bf96bbcc9e5ac11c068b6cfb00c32f9d163bb8a3d5af1'),(3,'2021-09-09','09:00:05','Curso corto registro de marcas      ','https://t.ly/78b1    '),(5,'2021-09-10','09:00:09','Curso corto derechos de autor para investigadores  ','https://forms.office.com/Pages/ResponsePage.aspx?id=gcPCyy4vk02R0VBskxas55Y4ldWqRXxBlNNFZwnK4iVUMEda');

/*Table structure for table `rol` */

DROP TABLE IF EXISTS `rol`;

CREATE TABLE `rol` (
  `idRol` int(11) NOT NULL AUTO_INCREMENT,
  `nombreRol` varchar(45) NOT NULL,
  `activo` int(11) NOT NULL,
  PRIMARY KEY (`idRol`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

/*Data for the table `rol` */

insert  into `rol`(`idRol`,`nombreRol`,`activo`) values (1,'Administrador',1),(2,'Interno',1),(3,'Publico',1);

/*Table structure for table `tipo_documento` */

DROP TABLE IF EXISTS `tipo_documento`;

CREATE TABLE `tipo_documento` (
  `idtipo_documento` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) NOT NULL,
  `activo` int(11) NOT NULL,
  PRIMARY KEY (`idtipo_documento`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tipo_documento` */

insert  into `tipo_documento`(`idtipo_documento`,`nombre`,`activo`) values (1,'Tarjeta de identidad',1),(2,'C??dula de ciudadan??a',1),(3,'C??dula de extranjer??a',1),(4,'Pasaporte',1);

/*Table structure for table `tipo_registro` */

DROP TABLE IF EXISTS `tipo_registro`;

CREATE TABLE `tipo_registro` (
  `idTipo_Registro` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_categoria` varchar(45) NOT NULL,
  `activo` int(11) NOT NULL,
  `Formulario_idFormulario` int(11) NOT NULL,
  PRIMARY KEY (`idTipo_Registro`),
  KEY `fk_tipo_registro_Formulario1_idx` (`Formulario_idFormulario`),
  CONSTRAINT `fk_tipo_registro_Formulario1` FOREIGN KEY (`Formulario_idFormulario`) REFERENCES `formulario` (`idFormulario`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tipo_registro` */

insert  into `tipo_registro`(`idTipo_Registro`,`nombre_categoria`,`activo`,`Formulario_idFormulario`) values (1,'Obtenci??n Vegetal',1,1),(2,'Nuevas Creaciones',1,1),(3,'Signos Distintivos',1,1),(4,'Derechos de Autor',1,1);

/*Table structure for table `tips` */

DROP TABLE IF EXISTS `tips`;

CREATE TABLE `tips` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(150) NOT NULL,
  `contenido` varchar(300) DEFAULT NULL,
  `activo` int(11) DEFAULT NULL,
  `fecha` datetime DEFAULT NULL,
  `imagen` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tips` */

insert  into `tips`(`id`,`titulo`,`contenido`,`activo`,`fecha`,`imagen`) values (1,'TIPS','El derecho de autor como mecanismo de protecci??n',NULL,NULL,'WhatsApp Image 2021-10-04 at 8.24.44 PM.jpeg');

/*Table structure for table `usuarios` */

DROP TABLE IF EXISTS `usuarios`;

CREATE TABLE `usuarios` (
  `idUsuarios` int(11) NOT NULL AUTO_INCREMENT,
  `Rol_idRol` int(11) DEFAULT 2,
  `nombre` varchar(150) DEFAULT NULL,
  `documento` varchar(45) DEFAULT NULL,
  `tipo_documento` varchar(50) DEFAULT NULL,
  `telefono` varchar(45) DEFAULT NULL,
  `celular` varchar(45) DEFAULT NULL,
  `email` varchar(150) DEFAULT NULL,
  `fecha_nacimiento` date DEFAULT NULL,
  `nivel_academico` int(11) DEFAULT NULL,
  `ciudad_recidencia` int(11) DEFAULT NULL,
  `departamento` int(11) DEFAULT NULL,
  `institucion_perteneciente` int(11) DEFAULT NULL,
  `nit` varchar(45) DEFAULT NULL,
  `sede` int(11) DEFAULT NULL,
  `clave` varchar(45) DEFAULT NULL,
  `apellido` varchar(100) DEFAULT NULL,
  `depExpedicion` varchar(100) DEFAULT NULL,
  `ciudadExpe` varchar(100) DEFAULT NULL,
  `UsuarioSena` varchar(4) DEFAULT NULL,
  `empresaTrabajo` varchar(200) DEFAULT NULL,
  `lugarTrabajo` varchar(200) DEFAULT NULL,
  `tipoVinc` varchar(100) DEFAULT NULL,
  `centroForm` varchar(200) DEFAULT NULL,
  `grupoSang` varchar(100) DEFAULT NULL,
  `estrato` varchar(100) DEFAULT NULL,
  `etnias` varchar(100) DEFAULT NULL,
  `eps` varchar(200) DEFAULT NULL,
  `last_session` datetime DEFAULT NULL,
  PRIMARY KEY (`idUsuarios`),
  KEY `fk_Usuarios_Rol_idx` (`Rol_idRol`),
  CONSTRAINT `fk_Usuarios_Rol` FOREIGN KEY (`Rol_idRol`) REFERENCES `rol` (`idRol`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=utf8mb4;

/*Data for the table `usuarios` */

insert  into `usuarios`(`idUsuarios`,`Rol_idRol`,`nombre`,`documento`,`tipo_documento`,`telefono`,`celular`,`email`,`fecha_nacimiento`,`nivel_academico`,`ciudad_recidencia`,`departamento`,`institucion_perteneciente`,`nit`,`sede`,`clave`,`apellido`,`depExpedicion`,`ciudadExpe`,`UsuarioSena`,`empresaTrabajo`,`lugarTrabajo`,`tipoVinc`,`centroForm`,`grupoSang`,`estrato`,`etnias`,`eps`,`last_session`) values (0,3,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(1,1,'Jonathan David Espitia Rivera','1073683922','1','3142064431','3142064431','jdespitia@sena.edu.co','1989-10-05',1,1,1,1,'',2,'123456',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'2021-09-28 13:59:54'),(19,2,'Jaime Andres','79624867','1','','','javargas260773@gmail.com','1973-07-26',0,0,0,0,'',0,'Tecnoparque2021','Vargas Sarria','','','java','','','','','','','','',NULL);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
