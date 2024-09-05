CREATE DATABASE  IF NOT EXISTS `sies_alc_db` /*!40100 DEFAULT CHARACTER SET utf8 */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `sies_alc_db`;
-- MySQL dump 10.13  Distrib 8.0.28, for Win64 (x86_64)
--
-- Host: localhost    Database: sies_alc_db
-- ------------------------------------------------------
-- Server version	8.0.28

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `cat_ciudad`
--

DROP TABLE IF EXISTS `cat_ciudad`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cat_ciudad` (
  `pk_id_ciudad` int NOT NULL AUTO_INCREMENT COMMENT 'Llave primaria de la tabla ciudad',
  `fk_codigo_estado` int NOT NULL COMMENT 'Llave foranea de la tabla departamento',
  `codigo_ciudad` decimal(10,0) NOT NULL,
  `nombre_ciudad` varchar(45) NOT NULL COMMENT 'nombre de la ciudad',
  PRIMARY KEY (`pk_id_ciudad`)
) ENGINE=InnoDB AUTO_INCREMENT=1124 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cat_ciudad`
--

LOCK TABLES `cat_ciudad` WRITE;
/*!40000 ALTER TABLE `cat_ciudad` DISABLE KEYS */;
INSERT INTO `cat_ciudad` VALUES (1,5,5,'Medellín'),(2,5,5,'Abejorral'),(3,5,5,'Abriaquí'),(4,5,5,'Alejandría'),(5,5,5,'Amagá'),(6,5,5,'Amalfi'),(7,5,5,'Andes'),(8,5,5,'Angelópolis'),(9,5,5,'Angostura'),(10,5,5,'Anorí'),(11,5,5,'Anza'),(12,5,5,'Apartadó'),(13,5,5,'Arboletes'),(14,5,5,'Argelia'),(15,5,5,'Armenia'),(16,5,5,'Barbosa'),(17,5,5,'Bello'),(18,5,5,'Betania'),(19,5,5,'Betulia'),(20,5,5,'Ciudad Bolívar'),(21,5,5,'Briceño'),(22,5,5,'Buriticá'),(23,5,5,'Cáceres'),(24,5,5,'Caicedo'),(25,5,5,'Caldas'),(26,5,5,'Campamento'),(27,5,5,'Cañasgordas'),(28,5,5,'Caracolí'),(29,5,5,'Caramanta'),(30,5,5,'Carepa'),(31,5,5,'Carolina'),(32,5,5,'Caucasia'),(33,5,5,'Chigorodó'),(34,5,5,'Cisneros'),(35,5,5,'Cocorná'),(36,5,5,'Concepción'),(37,5,5,'Concordia'),(38,5,5,'Copacabana'),(39,5,5,'Dabeiba'),(40,5,5,'Don Matías'),(41,5,5,'Ebéjico'),(42,5,5,'El Bagre'),(43,5,5,'Entrerrios'),(44,5,5,'Envigado'),(45,5,5,'Fredonia'),(46,5,5,'Giraldo'),(47,5,5,'Girardota'),(48,5,5,'Gómez Plata'),(49,5,5,'Guadalupe'),(50,5,5,'Guarne'),(51,5,5,'Guatapé'),(52,5,5,'Heliconia'),(53,5,5,'Hispania'),(54,5,5,'Itagui'),(55,5,5,'Ituango'),(56,5,5,'Belmira'),(57,5,5,'Jericó'),(58,5,5,'La Ceja'),(59,5,5,'La Estrella'),(60,5,5,'La Pintada'),(61,5,5,'La Unión'),(62,5,5,'Liborina'),(63,5,5,'Maceo'),(64,5,5,'Marinilla'),(65,5,5,'Montebello'),(66,5,5,'Murindó'),(67,5,5,'Mutatá'),(68,5,5,'Nariño'),(69,5,5,'Necoclí'),(70,5,5,'Nechí'),(71,5,6,'Olaya'),(72,5,6,'Peñol'),(73,5,6,'Peque'),(74,5,6,'Pueblorrico'),(75,5,6,'Puerto Berrío'),(76,5,6,'Puerto Nare'),(77,5,6,'Puerto Triunfo'),(78,5,6,'Remedios'),(79,5,6,'Retiro'),(80,5,6,'Rionegro'),(81,5,6,'Sabanalarga'),(82,5,6,'Sabaneta'),(83,5,6,'Salgar'),(84,5,6,'San Francisco'),(85,5,6,'San Jerónimo'),(86,5,6,'San Luis'),(87,5,6,'San Pedro'),(88,5,6,'San Rafael'),(89,5,6,'San Roque'),(90,5,6,'San Vicente'),(91,5,6,'Santa Bárbara'),(92,5,6,'Santo Domingo'),(93,5,6,'El Santuario'),(94,5,6,'Segovia'),(95,5,6,'Sopetrán'),(96,5,6,'Támesis'),(97,5,6,'Tarazá'),(98,5,6,'Tarso'),(99,5,6,'Titiribí'),(100,5,6,'Toledo'),(101,5,6,'Turbo'),(102,5,6,'Uramita'),(103,5,6,'Urrao'),(104,5,6,'Valdivia'),(105,5,6,'Valparaíso'),(106,5,6,'Vegachí'),(107,5,6,'Venecia'),(108,5,6,'Yalí'),(109,5,6,'Yarumal'),(110,5,6,'Yolombó'),(111,5,6,'Yondó'),(112,5,6,'Zaragoza'),(113,5,6,'San Pedro de Uraba'),(114,5,5,'Santafé de Antioquia'),(115,5,6,'Santa Rosa de Osos'),(116,5,6,'San Andrés de Cuerquía'),(117,5,6,'Vigía del Fuerte'),(118,5,6,'San José de La Montaña'),(119,5,6,'San Juan de Urabá'),(120,5,5,'El Carmen de Viboral'),(121,5,6,'San Carlos'),(122,5,5,'Frontino'),(123,5,5,'Granada'),(124,5,5,'Jardín'),(125,5,6,'Sonsón'),(126,8,8,'Barranquilla'),(127,8,8,'Baranoa'),(128,8,8,'Candelaria'),(129,8,8,'Galapa'),(130,8,8,'Luruaco'),(131,8,8,'Malambo'),(132,8,8,'Manatí'),(133,8,9,'Piojó'),(134,8,9,'Polonuevo'),(135,8,9,'Sabanagrande'),(136,8,9,'Sabanalarga'),(137,8,9,'Santa Lucía'),(138,8,9,'Santo Tomás'),(139,8,9,'Soledad'),(140,8,9,'Suan'),(141,8,9,'Tubará'),(142,8,9,'Usiacurí'),(143,8,8,'Juan de Acosta'),(144,8,9,'Palmar de Varela'),(145,8,8,'Campo de La Cruz'),(146,8,9,'Repelón'),(147,8,9,'Puerto Colombia'),(148,8,9,'Ponedera'),(149,11,11,'Bogotá D.C.'),(150,13,13,'Achí'),(151,13,13,'Arenal'),(152,13,13,'Arjona'),(153,13,13,'Arroyohondo'),(154,13,13,'Calamar'),(155,13,13,'Cantagallo'),(156,13,13,'Cicuco'),(157,13,13,'Córdoba'),(158,13,13,'Clemencia'),(159,13,13,'El Guamo'),(160,13,13,'Magangué'),(161,13,13,'Mahates'),(162,13,13,'Margarita'),(163,13,13,'Montecristo'),(164,13,13,'Mompós'),(165,13,13,'Morales'),(166,13,13,'Norosí'),(167,13,14,'Pinillos'),(168,13,14,'Regidor'),(169,13,14,'Río Viejo'),(170,13,14,'San Estanislao'),(171,13,14,'San Fernando'),(172,13,14,'San Juan Nepomuceno'),(173,13,14,'Santa Catalina'),(174,13,14,'Santa Rosa'),(175,13,14,'Simití'),(176,13,14,'Soplaviento'),(177,13,14,'Talaigua Nuevo'),(178,13,14,'Tiquisio'),(179,13,14,'Turbaco'),(180,13,14,'Turbaná'),(181,13,14,'Villanueva'),(182,13,13,'Barranco de Loba'),(183,13,14,'Santa Rosa del Sur'),(184,13,13,'Hatillo de Loba'),(185,13,13,'El Carmen de Bolívar'),(186,13,14,'San Martín de Loba'),(187,13,13,'Altos del Rosario'),(188,13,14,'San Jacinto del Cauca'),(189,13,14,'San Pablo de Borbur'),(190,13,14,'San Jacinto'),(191,13,13,'El Peñón'),(192,13,13,'Cartagena'),(193,13,13,'María la Baja'),(194,13,14,'San Cristóbal'),(195,13,14,'Zambrano'),(196,15,16,'Tununguá'),(197,15,15,'Motavita'),(198,15,15,'Ciénega'),(199,15,15,'Tunja'),(200,15,15,'Almeida'),(201,15,15,'Aquitania'),(202,15,15,'Arcabuco'),(203,15,15,'Berbeo'),(204,15,15,'Betéitiva'),(205,15,15,'Boavita'),(206,15,15,'Boyacá'),(207,15,15,'Briceño'),(208,15,15,'Buena Vista'),(209,15,15,'Busbanzá'),(210,15,15,'Caldas'),(211,15,15,'Campohermoso'),(212,15,15,'Cerinza'),(213,15,15,'Chinavita'),(214,15,15,'Chiquinquirá'),(215,15,15,'Chiscas'),(216,15,15,'Chita'),(217,15,15,'Chitaraque'),(218,15,15,'Chivatá'),(219,15,15,'Cómbita'),(220,15,15,'Coper'),(221,15,15,'Corrales'),(222,15,15,'Covarachía'),(223,15,15,'Cubará'),(224,15,15,'Cucaita'),(225,15,15,'Cuítiva'),(226,15,15,'Chíquiza'),(227,15,15,'Chivor'),(228,15,15,'Duitama'),(229,15,15,'El Cocuy'),(230,15,15,'El Espino'),(231,15,15,'Firavitoba'),(232,15,15,'Floresta'),(233,15,15,'Gachantivá'),(234,15,15,'Gameza'),(235,15,15,'Garagoa'),(236,15,15,'Guacamayas'),(237,15,15,'Guateque'),(238,15,15,'Guayatá'),(239,15,15,'Güicán'),(240,15,15,'Iza'),(241,15,15,'Jenesano'),(242,15,15,'Jericó'),(243,15,15,'Labranzagrande'),(244,15,15,'La Capilla'),(245,15,15,'La Victoria'),(246,15,15,'Macanal'),(247,15,15,'Maripí'),(248,15,15,'Miraflores'),(249,15,15,'Mongua'),(250,15,15,'Monguí'),(251,15,15,'Moniquirá'),(252,15,15,'Muzo'),(253,15,15,'Nobsa'),(254,15,15,'Nuevo Colón'),(255,15,16,'Oicatá'),(256,15,16,'Otanche'),(257,15,16,'Pachavita'),(258,15,16,'Páez'),(259,15,16,'Paipa'),(260,15,16,'Pajarito'),(261,15,16,'Panqueba'),(262,15,16,'Pauna'),(263,15,16,'Paya'),(264,15,16,'Pesca'),(265,15,16,'Pisba'),(266,15,16,'Puerto Boyacá'),(267,15,16,'Quípama'),(268,15,16,'Ramiriquí'),(269,15,16,'Ráquira'),(270,15,16,'Rondón'),(271,15,16,'Saboyá'),(272,15,16,'Sáchica'),(273,15,16,'Samacá'),(274,15,16,'San Eduardo'),(275,15,16,'San Mateo'),(276,15,16,'Santana'),(277,15,16,'Santa María'),(278,15,16,'Santa Sofía'),(279,15,16,'Sativanorte'),(280,15,16,'Sativasur'),(281,15,16,'Siachoque'),(282,15,16,'Soatá'),(283,15,16,'Socotá'),(284,15,16,'Socha'),(285,15,16,'Sogamoso'),(286,15,16,'Somondoco'),(287,15,16,'Sora'),(288,15,16,'Sotaquirá'),(289,15,16,'Soracá'),(290,15,16,'Susacón'),(291,15,16,'Sutamarchán'),(292,15,16,'Sutatenza'),(293,15,16,'Tasco'),(294,15,16,'Tenza'),(295,15,16,'Tibaná'),(296,15,16,'Tinjacá'),(297,15,16,'Tipacoque'),(298,15,16,'Toca'),(299,15,16,'Tópaga'),(300,15,16,'Tota'),(301,15,16,'Turmequé'),(302,15,16,'Tutazá'),(303,15,16,'Umbita'),(304,15,16,'Ventaquemada'),(305,15,16,'Viracachá'),(306,15,16,'Zetaquira'),(307,15,16,'Togüí'),(308,15,15,'Villa de Leyva'),(309,15,16,'Paz de Río'),(310,15,16,'Santa Rosa de Viterbo'),(311,15,16,'San Pablo de Borbur'),(312,15,16,'San Luis de Gaceno'),(313,15,16,'San José de Pare'),(314,15,16,'San Miguel de Sema'),(315,15,16,'Tuta'),(316,15,16,'Tibasosa'),(317,15,15,'La Uvita'),(318,15,15,'Belén'),(319,17,17,'Manizales'),(320,17,17,'Aguadas'),(321,17,17,'Anserma'),(322,17,17,'Aranzazu'),(323,17,17,'Belalcázar'),(324,17,17,'Chinchiná'),(325,17,17,'Filadelfia'),(326,17,17,'La Dorada'),(327,17,17,'La Merced'),(328,17,17,'Manzanares'),(329,17,17,'Marmato'),(330,17,17,'Marulanda'),(331,17,17,'Neira'),(332,17,17,'Norcasia'),(333,17,18,'Pácora'),(334,17,18,'Palestina'),(335,17,18,'Pensilvania'),(336,17,18,'Riosucio'),(337,17,18,'Risaralda'),(338,17,18,'Salamina'),(339,17,18,'Samaná'),(340,17,18,'San José'),(341,17,18,'Supía'),(342,17,18,'Victoria'),(343,17,18,'Villamaría'),(344,17,18,'Viterbo'),(345,17,17,'Marquetalia'),(346,18,18,'Florencia'),(347,18,18,'Albania'),(348,18,18,'Curillo'),(349,18,18,'El Doncello'),(350,18,18,'El Paujil'),(351,18,18,'Morelia'),(352,18,19,'Puerto Rico'),(353,18,19,'Solano'),(354,18,19,'Solita'),(355,18,19,'Valparaíso'),(356,18,19,'San José del Fragua'),(357,18,18,'Belén de Los Andaquies'),(358,18,18,'Cartagena del Chairá'),(359,18,18,'Milán'),(360,18,18,'La Montañita'),(361,18,19,'San Vicente del Caguán'),(362,19,19,'Popayán'),(363,19,19,'Almaguer'),(364,19,19,'Argelia'),(365,19,19,'Balboa'),(366,19,19,'Bolívar'),(367,19,19,'Buenos Aires'),(368,19,19,'Cajibío'),(369,19,19,'Caldono'),(370,19,19,'Caloto'),(371,19,19,'Corinto'),(372,19,19,'El Tambo'),(373,19,19,'Florencia'),(374,19,19,'Guachené'),(375,19,19,'Guapi'),(376,19,19,'Inzá'),(377,19,19,'Jambaló'),(378,19,19,'La Sierra'),(379,19,19,'La Vega'),(380,19,19,'López'),(381,19,19,'Mercaderes'),(382,19,19,'Miranda'),(383,19,19,'Morales'),(384,19,20,'Padilla'),(385,19,20,'Patía'),(386,19,20,'Piamonte'),(387,19,20,'Piendamó'),(388,19,20,'Puerto Tejada'),(389,19,20,'Puracé'),(390,19,20,'Rosas'),(391,19,20,'Santa Rosa'),(392,19,20,'Silvia'),(393,19,20,'Sotara'),(394,19,20,'Suárez'),(395,19,20,'Sucre'),(396,19,20,'Timbío'),(397,19,20,'Timbiquí'),(398,19,20,'Toribio'),(399,19,20,'Totoró'),(400,19,20,'Villa Rica'),(401,19,20,'Santander de Quilichao'),(402,19,20,'San Sebastián'),(403,19,20,'Páez'),(404,20,20,'Valledupar'),(405,20,20,'Aguachica'),(406,20,20,'Agustín Codazzi'),(407,20,20,'Astrea'),(408,20,20,'Becerril'),(409,20,20,'Bosconia'),(410,20,20,'Chimichagua'),(411,20,20,'Chiriguaná'),(412,20,20,'Curumaní'),(413,20,20,'El Copey'),(414,20,20,'El Paso'),(415,20,20,'Gamarra'),(416,20,20,'González'),(417,20,20,'La Gloria'),(418,20,20,'Manaure'),(419,20,21,'Pailitas'),(420,20,21,'Pelaya'),(421,20,21,'Pueblo Bello'),(422,20,21,'La Paz'),(423,20,21,'San Alberto'),(424,20,21,'San Diego'),(425,20,21,'San Martín'),(426,20,21,'Tamalameque'),(427,20,21,'Río de Oro'),(428,20,20,'La Jagua de Ibirico'),(429,23,24,'San Bernardo del Viento'),(430,23,23,'Montería'),(431,23,23,'Ayapel'),(432,23,23,'Buenavista'),(433,23,23,'Canalete'),(434,23,23,'Cereté'),(435,23,23,'Chimá'),(436,23,23,'Chinú'),(437,23,23,'Cotorra'),(438,23,23,'Lorica'),(439,23,23,'Los Córdobas'),(440,23,23,'Momil'),(441,23,24,'Moñitos'),(442,23,24,'Planeta Rica'),(443,23,24,'Pueblo Nuevo'),(444,23,24,'Puerto Escondido'),(445,23,24,'Purísima'),(446,23,24,'Sahagún'),(447,23,24,'San Andrés Sotavento'),(448,23,24,'San Antero'),(449,23,24,'San Pelayo'),(450,23,24,'Tierralta'),(451,23,24,'Tuchín'),(452,23,24,'Valencia'),(453,23,24,'San José de Uré'),(454,23,23,'Ciénaga de Oro'),(455,23,24,'San Carlos'),(456,23,23,'Montelíbano'),(457,23,23,'La Apartada'),(458,23,24,'Puerto Libertador'),(459,25,25,'Anapoima'),(460,25,25,'Arbeláez'),(461,25,25,'Beltrán'),(462,25,25,'Bituima'),(463,25,25,'Bojacá'),(464,25,25,'Cabrera'),(465,25,25,'Cachipay'),(466,25,25,'Cajicá'),(467,25,25,'Caparrapí'),(468,25,25,'Caqueza'),(469,25,25,'Chaguaní'),(470,25,25,'Chipaque'),(471,25,25,'Choachí'),(472,25,25,'Chocontá'),(473,25,25,'Cogua'),(474,25,25,'Cota'),(475,25,25,'Cucunubá'),(476,25,25,'El Colegio'),(477,25,25,'El Rosal'),(478,25,25,'Fomeque'),(479,25,25,'Fosca'),(480,25,25,'Funza'),(481,25,25,'Fúquene'),(482,25,25,'Gachala'),(483,25,25,'Gachancipá'),(484,25,25,'Gachetá'),(485,25,25,'Girardot'),(486,25,25,'Granada'),(487,25,25,'Guachetá'),(488,25,25,'Guaduas'),(489,25,25,'Guasca'),(490,25,25,'Guataquí'),(491,25,25,'Guatavita'),(492,25,25,'Guayabetal'),(493,25,25,'Gutiérrez'),(494,25,25,'Jerusalén'),(495,25,25,'Junín'),(496,25,25,'La Calera'),(497,25,25,'La Mesa'),(498,25,25,'La Palma'),(499,25,25,'La Peña'),(500,25,25,'La Vega'),(501,25,25,'Lenguazaque'),(502,25,25,'Macheta'),(503,25,25,'Madrid'),(504,25,25,'Manta'),(505,25,25,'Medina'),(506,25,25,'Mosquera'),(507,25,25,'Nariño'),(508,25,25,'Nemocón'),(509,25,25,'Nilo'),(510,25,25,'Nimaima'),(511,25,25,'Nocaima'),(512,25,26,'Venecia'),(513,25,26,'Pacho'),(514,25,26,'Paime'),(515,25,26,'Pandi'),(516,25,26,'Paratebueno'),(517,25,26,'Pasca'),(518,25,26,'Puerto Salgar'),(519,25,26,'Pulí'),(520,25,26,'Quebradanegra'),(521,25,26,'Quetame'),(522,25,26,'Quipile'),(523,25,26,'Apulo'),(524,25,26,'Ricaurte'),(525,25,26,'San Bernardo'),(526,25,26,'San Cayetano'),(527,25,26,'San Francisco'),(528,25,26,'Sesquilé'),(529,25,26,'Sibaté'),(530,25,26,'Silvania'),(531,25,26,'Simijaca'),(532,25,26,'Soacha'),(533,25,26,'Subachoque'),(534,25,26,'Suesca'),(535,25,26,'Supatá'),(536,25,26,'Susa'),(537,25,26,'Sutatausa'),(538,25,26,'Tabio'),(539,25,26,'Tausa'),(540,25,26,'Tena'),(541,25,26,'Tenjo'),(542,25,26,'Tibacuy'),(543,25,26,'Tibirita'),(544,25,26,'Tocaima'),(545,25,26,'Tocancipá'),(546,25,26,'Topaipí'),(547,25,26,'Ubalá'),(548,25,26,'Ubaque'),(549,25,26,'Une'),(550,25,26,'Útica'),(551,25,26,'Vianí'),(552,25,26,'Villagómez'),(553,25,26,'Villapinzón'),(554,25,26,'Villeta'),(555,25,26,'Viotá'),(556,25,26,'Zipacón'),(557,25,26,'San Juan de Río Seco'),(558,25,26,'Villa de San Diego de Ubate'),(559,25,25,'Guayabal de Siquima'),(560,25,26,'San Antonio del Tequendama'),(561,25,25,'Agua de Dios'),(562,25,25,'Carmen de Carupa'),(563,25,26,'Vergara'),(564,25,25,'Albán'),(565,25,25,'Anolaima'),(566,25,25,'Chía'),(567,25,25,'El Peñón'),(568,25,26,'Sopó'),(569,25,25,'Gama'),(570,25,26,'Sasaima'),(571,25,26,'Yacopí'),(572,25,25,'Fusagasugá'),(573,25,26,'Zipaquirá'),(574,25,25,'Facatativá'),(575,27,27,'Istmina'),(576,27,27,'Quibdó'),(577,27,27,'Acandí'),(578,27,27,'Alto Baudo'),(579,27,27,'Atrato'),(580,27,27,'Bagadó'),(581,27,27,'Bahía Solano'),(582,27,27,'Bajo Baudó'),(583,27,27,'Bojaya'),(584,27,27,'Cértegui'),(585,27,27,'Condoto'),(586,27,27,'Juradó'),(587,27,27,'Lloró'),(588,27,27,'Medio Atrato'),(589,27,27,'Medio Baudó'),(590,27,27,'Medio San Juan'),(591,27,27,'Nóvita'),(592,27,27,'Nuquí'),(593,27,28,'Río Iro'),(594,27,28,'Río Quito'),(595,27,28,'Riosucio'),(596,27,28,'Sipí'),(597,27,28,'Unguía'),(598,27,27,'El Litoral del San Juan'),(599,27,27,'El Cantón del San Pablo'),(600,27,27,'El Carmen de Atrato'),(601,27,28,'San José del Palmar'),(602,27,27,'Belén de Bajira'),(603,27,27,'Carmen del Darien'),(604,27,28,'Tadó'),(605,27,28,'Unión Panamericana'),(606,41,41,'Neiva'),(607,41,41,'Acevedo'),(608,41,41,'Agrado'),(609,41,41,'Aipe'),(610,41,41,'Algeciras'),(611,41,41,'Altamira'),(612,41,41,'Baraya'),(613,41,41,'Campoalegre'),(614,41,41,'Colombia'),(615,41,41,'Elías'),(616,41,41,'Garzón'),(617,41,41,'Gigante'),(618,41,41,'Guadalupe'),(619,41,41,'Hobo'),(620,41,41,'Iquira'),(621,41,41,'Isnos'),(622,41,41,'La Argentina'),(623,41,41,'La Plata'),(624,41,41,'Nátaga'),(625,41,42,'Oporapa'),(626,41,42,'Paicol'),(627,41,42,'Palermo'),(628,41,42,'Palestina'),(629,41,42,'Pital'),(630,41,42,'Pitalito'),(631,41,42,'Rivera'),(632,41,42,'Saladoblanco'),(633,41,42,'Santa María'),(634,41,42,'Suaza'),(635,41,42,'Tarqui'),(636,41,42,'Tesalia'),(637,41,42,'Tello'),(638,41,42,'Teruel'),(639,41,42,'Timaná'),(640,41,42,'Villavieja'),(641,41,42,'Yaguará'),(642,41,42,'San Agustín'),(643,44,44,'Riohacha'),(644,44,44,'Albania'),(645,44,44,'Barrancas'),(646,44,44,'Dibula'),(647,44,44,'Distracción'),(648,44,44,'El Molino'),(649,44,44,'Fonseca'),(650,44,44,'Hatonuevo'),(651,44,44,'Maicao'),(652,44,45,'Manaure'),(653,44,45,'Uribia'),(654,44,45,'Urumita'),(655,44,45,'Villanueva'),(656,44,44,'La Jagua del Pilar'),(657,44,45,'San Juan del Cesar'),(658,47,47,'Santa Marta'),(659,47,47,'Algarrobo'),(660,47,47,'Aracataca'),(661,47,47,'Ariguaní'),(662,47,47,'Cerro San Antonio'),(663,47,47,'Chivolo'),(664,47,47,'Concordia'),(665,47,47,'El Banco'),(666,47,47,'El Piñon'),(667,47,47,'El Retén'),(668,47,47,'Fundación'),(669,47,47,'Guamal'),(670,47,47,'Nueva Granada'),(671,47,48,'Pedraza'),(672,47,48,'Pivijay'),(673,47,48,'Plato'),(674,47,48,'Remolino'),(675,47,48,'Salamina'),(676,47,48,'San Zenón'),(677,47,48,'Santa Ana'),(678,47,48,'Sitionuevo'),(679,47,48,'Tenerife'),(680,47,48,'Zapayán'),(681,47,48,'Zona Bananera'),(682,47,48,'San Sebastián de Buenavista'),(683,47,48,'Sabanas de San Angel'),(684,47,48,'Pijiño del Carmen'),(685,47,48,'Santa Bárbara de Pinto'),(686,47,48,'Pueblo Viejo'),(687,47,47,'Ciénaga'),(688,50,50,'Uribe'),(689,50,50,'Villavicencio'),(690,50,50,'Acacias'),(691,50,50,'Cabuyaro'),(692,50,50,'Cubarral'),(693,50,50,'Cumaral'),(694,50,50,'El Calvario'),(695,50,50,'El Castillo'),(696,50,50,'El Dorado'),(697,50,50,'Granada'),(698,50,50,'Guamal'),(699,50,50,'Mapiripán'),(700,50,50,'Mesetas'),(701,50,50,'La Macarena'),(702,50,50,'Lejanías'),(703,50,50,'Puerto Concordia'),(704,50,51,'Puerto Gaitán'),(705,50,51,'Puerto López'),(706,50,51,'Puerto Lleras'),(707,50,51,'Puerto Rico'),(708,50,51,'Restrepo'),(709,50,51,'San Juanito'),(710,50,51,'San Martín'),(711,50,51,'Vista Hermosa'),(712,50,50,'Barranca de Upía'),(713,50,50,'Fuente de Oro'),(714,50,51,'San Carlos de Guaroa'),(715,50,51,'San Juan de Arama'),(716,50,50,'Castilla la Nueva'),(717,52,53,'Santacruz'),(718,52,52,'Pasto'),(719,52,52,'Albán'),(720,52,52,'Aldana'),(721,52,52,'Ancuyá'),(722,52,52,'Barbacoas'),(723,52,52,'Colón'),(724,52,52,'Consaca'),(725,52,52,'Contadero'),(726,52,52,'Córdoba'),(727,52,52,'Cuaspud'),(728,52,52,'Cumbal'),(729,52,52,'Cumbitara'),(730,52,52,'El Charco'),(731,52,52,'El Peñol'),(732,52,52,'El Rosario'),(733,52,52,'El Tambo'),(734,52,52,'Funes'),(735,52,52,'Guachucal'),(736,52,52,'Guaitarilla'),(737,52,52,'Gualmatán'),(738,52,52,'Iles'),(739,52,52,'Imués'),(740,52,52,'Ipiales'),(741,52,52,'La Cruz'),(742,52,52,'La Florida'),(743,52,52,'La Llanada'),(744,52,52,'La Tola'),(745,52,52,'La Unión'),(746,52,52,'Leiva'),(747,52,52,'Linares'),(748,52,52,'Los Andes'),(749,52,52,'Magüí'),(750,52,52,'Mallama'),(751,52,52,'Mosquera'),(752,52,52,'Nariño'),(753,52,52,'Olaya Herrera'),(754,52,53,'Ospina'),(755,52,53,'Francisco Pizarro'),(756,52,53,'Policarpa'),(757,52,53,'Potosí'),(758,52,53,'Providencia'),(759,52,53,'Puerres'),(760,52,53,'Pupiales'),(761,52,53,'Ricaurte'),(762,52,53,'Roberto Payán'),(763,52,53,'Samaniego'),(764,52,53,'Sandoná'),(765,52,53,'San Bernardo'),(766,52,53,'San Lorenzo'),(767,52,53,'San Pablo'),(768,52,53,'Santa Bárbara'),(769,52,53,'Sapuyes'),(770,52,53,'Taminango'),(771,52,53,'Tangua'),(772,52,53,'Túquerres'),(773,52,53,'Yacuanquer'),(774,52,53,'San Pedro de Cartago'),(775,52,52,'El Tablón de Gómez'),(776,52,52,'Buesaco'),(777,52,53,'San Andrés de Tumaco'),(778,52,52,'Belén'),(779,52,52,'Chachagüí'),(780,52,52,'Arboleda'),(781,54,55,'Silos'),(782,54,54,'Cácota'),(783,54,55,'Toledo'),(784,54,54,'Mutiscua'),(785,54,54,'El Zulia'),(786,54,55,'Salazar'),(787,54,54,'Cucutilla'),(788,54,55,'Puerto Santander'),(789,54,54,'Gramalote'),(790,54,54,'El Tarra'),(791,54,55,'Teorama'),(792,54,54,'Arboledas'),(793,54,54,'Lourdes'),(794,54,54,'Bochalema'),(795,54,54,'Convención'),(796,54,54,'Hacarí'),(797,54,54,'Herrán'),(798,54,55,'Tibú'),(799,54,55,'San Cayetano'),(800,54,55,'San Calixto'),(801,54,54,'La Playa'),(802,54,54,'Chinácota'),(803,54,55,'Ragonvalia'),(804,54,54,'La Esperanza'),(805,54,55,'Villa del Rosario'),(806,54,54,'Chitagá'),(807,54,55,'Sardinata'),(808,54,54,'Abrego'),(809,54,54,'Los Patios'),(810,54,54,'Ocaña'),(811,54,54,'Bucarasica'),(812,54,55,'Santiago'),(813,54,54,'Labateca'),(814,54,54,'Cachirá'),(815,54,55,'Villa Caro'),(816,54,54,'Durania'),(817,54,55,'Pamplona'),(818,54,55,'Pamplonita'),(819,54,54,'Cúcuta'),(820,54,54,'El Carmen'),(821,63,63,'Armenia'),(822,63,63,'Buenavista'),(823,63,63,'Circasia'),(824,63,63,'Córdoba'),(825,63,63,'Filandia'),(826,63,63,'La Tebaida'),(827,63,63,'Montenegro'),(828,63,64,'Pijao'),(829,63,64,'Quimbaya'),(830,63,64,'Salento'),(831,63,63,'Calarcá'),(832,63,63,'Génova'),(833,66,66,'Pereira'),(834,66,66,'Apía'),(835,66,66,'Balboa'),(836,66,66,'Dosquebradas'),(837,66,66,'Guática'),(838,66,66,'La Celia'),(839,66,66,'La Virginia'),(840,66,66,'Marsella'),(841,66,66,'Mistrató'),(842,66,67,'Pueblo Rico'),(843,66,67,'Quinchía'),(844,66,67,'Santuario'),(845,66,67,'Santa Rosa de Cabal'),(846,66,66,'Belén de Umbría'),(847,68,69,'Puerto Wilches'),(848,68,69,'Puerto Parra'),(849,68,68,'Bucaramanga'),(850,68,68,'Aguada'),(851,68,68,'Albania'),(852,68,68,'Aratoca'),(853,68,68,'Barbosa'),(854,68,68,'Barichara'),(855,68,68,'Barrancabermeja'),(856,68,68,'Betulia'),(857,68,68,'Bolívar'),(858,68,68,'Cabrera'),(859,68,68,'California'),(860,68,68,'Carcasí'),(861,68,68,'Cepitá'),(862,68,68,'Cerrito'),(863,68,68,'Charalá'),(864,68,68,'Charta'),(865,68,68,'Chipatá'),(866,68,68,'Cimitarra'),(867,68,68,'Concepción'),(868,68,68,'Confines'),(869,68,68,'Contratación'),(870,68,68,'Coromoro'),(871,68,68,'Curití'),(872,68,68,'El Guacamayo'),(873,68,68,'El Playón'),(874,68,68,'Encino'),(875,68,68,'Enciso'),(876,68,68,'Florián'),(877,68,68,'Floridablanca'),(878,68,68,'Galán'),(879,68,68,'Gambita'),(880,68,68,'Girón'),(881,68,68,'Guaca'),(882,68,68,'Guadalupe'),(883,68,68,'Guapotá'),(884,68,68,'Guavatá'),(885,68,68,'Güepsa'),(886,68,68,'Jesús María'),(887,68,68,'Jordán'),(888,68,68,'La Belleza'),(889,68,68,'Landázuri'),(890,68,68,'La Paz'),(891,68,68,'Lebríja'),(892,68,68,'Los Santos'),(893,68,68,'Macaravita'),(894,68,68,'Málaga'),(895,68,68,'Matanza'),(896,68,68,'Mogotes'),(897,68,68,'Molagavita'),(898,68,68,'Ocamonte'),(899,68,69,'Oiba'),(900,68,69,'Onzaga'),(901,68,69,'Palmar'),(902,68,69,'Páramo'),(903,68,69,'Piedecuesta'),(904,68,69,'Pinchote'),(905,68,69,'Puente Nacional'),(906,68,69,'Rionegro'),(907,68,69,'San Andrés'),(908,68,69,'San Gil'),(909,68,69,'San Joaquín'),(910,68,69,'San Miguel'),(911,68,69,'Santa Bárbara'),(912,68,69,'Simacota'),(913,68,69,'Socorro'),(914,68,69,'Suaita'),(915,68,69,'Sucre'),(916,68,69,'Suratá'),(917,68,69,'Tona'),(918,68,69,'Vélez'),(919,68,69,'Vetas'),(920,68,69,'Villanueva'),(921,68,69,'Zapatoca'),(922,68,69,'Palmas del Socorro'),(923,68,69,'San Vicente de Chucurí'),(924,68,69,'San José de Miranda'),(925,68,69,'Santa Helena del Opón'),(926,68,69,'Sabana de Torres'),(927,68,68,'El Carmen de Chucurí'),(928,68,69,'Valle de San José'),(929,68,69,'San Benito'),(930,68,68,'Hato'),(931,68,68,'Chimá'),(932,68,68,'Capitanejo'),(933,68,68,'El Peñón'),(934,70,70,'Sincelejo'),(935,70,70,'Buenavista'),(936,70,70,'Caimito'),(937,70,70,'Coloso'),(938,70,70,'Coveñas'),(939,70,70,'Chalán'),(940,70,70,'El Roble'),(941,70,70,'Galeras'),(942,70,70,'Guaranda'),(943,70,70,'La Unión'),(944,70,70,'Los Palmitos'),(945,70,70,'Majagual'),(946,70,70,'Morroa'),(947,70,71,'Ovejas'),(948,70,71,'Palmito'),(949,70,71,'San Benito Abad'),(950,70,71,'San Marcos'),(951,70,71,'San Onofre'),(952,70,71,'San Pedro'),(953,70,71,'Sucre'),(954,70,71,'Tolú Viejo'),(955,70,71,'San Luis de Sincé'),(956,70,71,'San Juan de Betulia'),(957,70,71,'Santiago de Tolú'),(958,70,71,'Sampués'),(959,70,70,'Corozal'),(960,73,73,'Alpujarra'),(961,73,73,'Alvarado'),(962,73,73,'Ambalema'),(963,73,73,'Armero'),(964,73,73,'Ataco'),(965,73,73,'Cajamarca'),(966,73,73,'Chaparral'),(967,73,73,'Coello'),(968,73,73,'Coyaima'),(969,73,73,'Cunday'),(970,73,73,'Dolores'),(971,73,73,'Espinal'),(972,73,73,'Falan'),(973,73,73,'Flandes'),(974,73,73,'Fresno'),(975,73,73,'Guamo'),(976,73,73,'Herveo'),(977,73,73,'Honda'),(978,73,73,'Icononzo'),(979,73,73,'Mariquita'),(980,73,73,'Melgar'),(981,73,73,'Murillo'),(982,73,73,'Natagaima'),(983,73,74,'Ortega'),(984,73,74,'Palocabildo'),(985,73,74,'Piedras'),(986,73,74,'Planadas'),(987,73,74,'Prado'),(988,73,74,'Purificación'),(989,73,74,'Rio Blanco'),(990,73,74,'Roncesvalles'),(991,73,74,'Rovira'),(992,73,74,'Saldaña'),(993,73,74,'Santa Isabel'),(994,73,74,'Venadillo'),(995,73,74,'Villahermosa'),(996,73,74,'Villarrica'),(997,73,74,'Valle de San Juan'),(998,73,73,'Carmen de Apicala'),(999,73,74,'San Luis'),(1000,73,74,'San Antonio'),(1001,73,73,'Casabianca'),(1002,73,73,'Anzoátegui'),(1003,73,73,'Ibagué'),(1004,73,73,'Líbano'),(1005,73,73,'Lérida'),(1006,73,74,'Suárez'),(1007,76,76,'El Dovio'),(1008,76,77,'Roldanillo'),(1009,76,76,'Argelia'),(1010,76,77,'Sevilla'),(1011,76,77,'Zarzal'),(1012,76,76,'El Cerrito'),(1013,76,76,'Cartago'),(1014,76,76,'Caicedonia'),(1015,76,76,'El Cairo'),(1016,76,76,'La Unión'),(1017,76,77,'Restrepo'),(1018,76,76,'Dagua'),(1019,76,76,'Guacarí'),(1020,76,76,'Ansermanuevo'),(1021,76,76,'Bugalagrande'),(1022,76,76,'La Victoria'),(1023,76,76,'Ginebra'),(1024,76,77,'Yumbo'),(1025,76,76,'Obando'),(1026,76,76,'Bolívar'),(1027,76,76,'Cali'),(1028,76,77,'San Pedro'),(1029,76,76,'Guadalajara de Buga'),(1030,76,76,'Calima'),(1031,76,76,'Andalucía'),(1032,76,77,'Pradera'),(1033,76,77,'Yotoco'),(1034,76,77,'Palmira'),(1035,76,77,'Riofrío'),(1036,76,76,'Alcalá'),(1037,76,77,'Versalles'),(1038,76,76,'El Águila'),(1039,76,77,'Toro'),(1040,76,76,'Candelaria'),(1041,76,76,'La Cumbre'),(1042,76,77,'Ulloa'),(1043,76,77,'Trujillo'),(1044,76,77,'Vijes'),(1045,76,77,'Tuluá'),(1046,76,76,'Florida'),(1047,76,76,'Jamundí'),(1048,76,76,'Buenaventura'),(1049,81,81,'Arauquita'),(1050,81,81,'Cravo Norte'),(1051,81,81,'Fortul'),(1052,81,82,'Puerto Rondón'),(1053,81,82,'Saravena'),(1054,81,82,'Tame'),(1055,81,81,'Arauca'),(1056,85,85,'Yopal'),(1057,85,85,'Aguazul'),(1058,85,85,'Chámeza'),(1059,85,85,'Hato Corozal'),(1060,85,85,'La Salina'),(1061,85,85,'Monterrey'),(1062,85,85,'Pore'),(1063,85,85,'Recetor'),(1064,85,85,'Sabanalarga'),(1065,85,85,'Sácama'),(1066,85,85,'Tauramena'),(1067,85,85,'Trinidad'),(1068,85,85,'Villanueva'),(1069,85,85,'San Luis de Gaceno'),(1070,85,85,'Paz de Ariporo'),(1071,85,85,'Nunchía'),(1072,85,85,'Maní'),(1073,85,85,'Támara'),(1074,85,85,'Orocué'),(1075,86,86,'Mocoa'),(1076,86,86,'Colón'),(1077,86,86,'Orito'),(1078,86,87,'Puerto Caicedo'),(1079,86,87,'Puerto Guzmán'),(1080,86,87,'Leguízamo'),(1081,86,87,'Sibundoy'),(1082,86,87,'San Francisco'),(1083,86,87,'San Miguel'),(1084,86,87,'Santiago'),(1085,86,87,'Valle de Guamez'),(1086,86,87,'Puerto Asís'),(1087,86,87,'Villagarzón'),(1088,88,89,'Providencia'),(1089,88,88,'San Andrés'),(1090,91,91,'Leticia'),(1091,91,91,'El Encanto'),(1092,91,91,'La Chorrera'),(1093,91,91,'La Pedrera'),(1094,91,91,'La Victoria'),(1095,91,92,'Puerto Arica'),(1096,91,92,'Puerto Nariño'),(1097,91,92,'Puerto Santander'),(1098,91,92,'Tarapacá'),(1099,91,92,'Puerto Alegría'),(1100,91,91,'Miriti Paraná'),(1101,94,94,'Inírida'),(1102,94,94,'Barranco Minas'),(1103,94,95,'Mapiripana'),(1104,94,95,'San Felipe'),(1105,94,95,'Puerto Colombia'),(1106,94,95,'La Guadalupe'),(1107,94,95,'Cacahual'),(1108,94,95,'Pana Pana'),(1109,94,95,'Morichal'),(1110,95,95,'Calamar'),(1111,95,95,'San José del Guaviare'),(1112,95,95,'Miraflores'),(1113,95,95,'El Retorno'),(1114,97,97,'Mitú'),(1115,97,97,'Carurú'),(1116,97,98,'Taraira'),(1117,97,98,'Papunahua'),(1118,97,98,'Yavaraté'),(1119,97,98,'Pacoa'),(1120,99,99,'Puerto Carreño'),(1121,99,100,'La Primavera'),(1122,99,100,'Santa Rosalía'),(1123,99,100,'Cumaribo');
/*!40000 ALTER TABLE `cat_ciudad` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cat_estado`
--

DROP TABLE IF EXISTS `cat_estado`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cat_estado` (
  `pk_id_estado` int NOT NULL COMMENT 'Llave primaria de la tabla departamento',
  `fk_id_pais` int NOT NULL COMMENT 'Llave foranea de la tabla pais\\n',
  `codigo_estado` int NOT NULL,
  `nombre_estado` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT 'Nombre del departamento',
  PRIMARY KEY (`pk_id_estado`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cat_estado`
--

LOCK TABLES `cat_estado` WRITE;
/*!40000 ALTER TABLE `cat_estado` DISABLE KEYS */;
INSERT INTO `cat_estado` VALUES (1,48,5,'Antioquia'),(2,48,8,'Atlántico'),(3,48,11,'Bogotá D.C.'),(4,48,13,'Bolívar'),(5,48,15,'Boyacá'),(6,48,17,'Caldas'),(7,48,18,'Caquetá'),(8,48,19,'Cauca'),(9,48,20,'Cesar'),(10,48,23,'Córdoba'),(11,48,25,'Cundinamarca'),(12,48,27,'Chocó'),(13,48,41,'Huila'),(14,48,44,'La Guajira'),(15,48,47,'Magdalena'),(16,48,50,'Meta'),(17,48,52,'Nariño'),(18,48,54,'Norte de Santander'),(19,48,63,'Quindío'),(20,48,66,'Risaralda'),(21,48,68,'Santander'),(22,48,70,'Sucre'),(23,48,73,'Tolima'),(24,48,76,'Valle del Cauca'),(25,48,81,'Arauca'),(26,48,85,'Casanare'),(27,48,86,'Putumayo'),(28,48,88,'Archipiélago de San Andrés, Providencia y Santa Catalina'),(29,48,91,'Amazonas'),(30,48,94,'Guainía'),(31,48,95,'Guaviare'),(32,48,97,'Vaupés'),(33,48,99,'Vichada');
/*!40000 ALTER TABLE `cat_estado` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cat_identificacion_institucion`
--

DROP TABLE IF EXISTS `cat_identificacion_institucion`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cat_identificacion_institucion` (
  `pk_id_identificacion_institucion` int NOT NULL AUTO_INCREMENT,
  `nombre_identificacion` varchar(45) NOT NULL,
  `descripcion_identificacion` varchar(500) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `fk_codigo_pais` int NOT NULL,
  PRIMARY KEY (`pk_id_identificacion_institucion`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cat_identificacion_institucion`
--

LOCK TABLES `cat_identificacion_institucion` WRITE;
/*!40000 ALTER TABLE `cat_identificacion_institucion` DISABLE KEYS */;
/*!40000 ALTER TABLE `cat_identificacion_institucion` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cat_modalidad`
--

DROP TABLE IF EXISTS `cat_modalidad`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cat_modalidad` (
  `pk_id_modalidad` int NOT NULL AUTO_INCREMENT COMMENT 'Llave primaria de la tabla modalidad',
  `nombre_modalidad` varchar(255) NOT NULL COMMENT 'Nombre de la modalidad (Precencial, Virtual o Hibrida/Mixta)',
  `observacion` varchar(255) DEFAULT NULL COMMENT 'Observaciones adicionales',
  PRIMARY KEY (`pk_id_modalidad`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cat_modalidad`
--

LOCK TABLES `cat_modalidad` WRITE;
/*!40000 ALTER TABLE `cat_modalidad` DISABLE KEYS */;
INSERT INTO `cat_modalidad` VALUES (1,'Presencial',NULL);
/*!40000 ALTER TABLE `cat_modalidad` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cat_nivel_formacion`
--

DROP TABLE IF EXISTS `cat_nivel_formacion`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cat_nivel_formacion` (
  `pk_id_nivel_formacion` int NOT NULL AUTO_INCREMENT COMMENT 'Llave primaria de nivel de formacion',
  `nombre_nivel_formacion` varchar(45) NOT NULL COMMENT 'definicion del nivel de formacion ( pregrado - posgrado)',
  PRIMARY KEY (`pk_id_nivel_formacion`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cat_nivel_formacion`
--

LOCK TABLES `cat_nivel_formacion` WRITE;
/*!40000 ALTER TABLE `cat_nivel_formacion` DISABLE KEYS */;
/*!40000 ALTER TABLE `cat_nivel_formacion` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cat_nucleo_conocimiento`
--

DROP TABLE IF EXISTS `cat_nucleo_conocimiento`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cat_nucleo_conocimiento` (
  `pk_id_nucleo` int NOT NULL AUTO_INCREMENT COMMENT 'LLave primaria de la tabla nucleo base de conocimiento\\n',
  `nombre_nucleo` varchar(100) NOT NULL COMMENT 'Nombre del nucleo base de conocimiento',
  PRIMARY KEY (`pk_id_nucleo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cat_nucleo_conocimiento`
--

LOCK TABLES `cat_nucleo_conocimiento` WRITE;
/*!40000 ALTER TABLE `cat_nucleo_conocimiento` DISABLE KEYS */;
/*!40000 ALTER TABLE `cat_nucleo_conocimiento` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cat_pais`
--

DROP TABLE IF EXISTS `cat_pais`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cat_pais` (
  `pk_id_pais` int NOT NULL AUTO_INCREMENT COMMENT 'Llave primaria de la tabla pais',
  `nombre_pais` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT 'nombre del pais',
  `codigo_pais` varchar(2) NOT NULL,
  PRIMARY KEY (`pk_id_pais`)
) ENGINE=InnoDB AUTO_INCREMENT=241 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cat_pais`
--

LOCK TABLES `cat_pais` WRITE;
/*!40000 ALTER TABLE `cat_pais` DISABLE KEYS */;
INSERT INTO `cat_pais` VALUES (1,'Andorra','AD'),(2,'Emiratos Árabes Unidos','AE'),(3,'Afganistán','AF'),(4,'Antigua y Barbuda','AG'),(5,'Anguila','AI'),(6,'Albania','AL'),(7,'Armenia','AM'),(8,'Antillas Neerlandesas','AN'),(9,'Angola','AO'),(10,'Antártida','AQ'),(11,'Argentina','AR'),(12,'Samoa Americana','AS'),(13,'Austria','AT'),(14,'Australia','AU'),(15,'Aruba','AW'),(16,'Islas Áland','AX'),(17,'Azerbaiyán','AZ'),(18,'Bosnia y Herzegovina','BA'),(19,'Barbados','BB'),(20,'Bangladesh','BD'),(21,'Bélgica','BE'),(22,'Burkina Faso','BF'),(23,'Bulgaria','BG'),(24,'Bahréin','BH'),(25,'Burundi','BI'),(26,'Benin','BJ'),(27,'San Bartolomé','BL'),(28,'Bermudas','BM'),(29,'Brunéi','BN'),(30,'Bolivia','BO'),(31,'Brasil','BR'),(32,'Bahamas','BS'),(33,'Bhután','BT'),(34,'Isla Bouvet','BV'),(35,'Botsuana','BW'),(36,'Belarús','BY'),(37,'Belice','BZ'),(38,'Canadá','CA'),(39,'Islas Cocos','CC'),(40,'República Centro-Africana','CF'),(41,'Congo','CG'),(42,'Suiza','CH'),(43,'Costa de Marfil','CI'),(44,'Islas Cook','CK'),(45,'Chile','CL'),(46,'Camerún','CM'),(47,'China','CN'),(48,'Colombia','CO'),(49,'Costa Rica','CR'),(50,'Cuba','CU'),(51,'Cabo Verde','CV'),(52,'Islas Christmas','CX'),(53,'Chipre','CY'),(54,'República Checa','CZ'),(55,'Alemania','DE'),(56,'Yibuti','DJ'),(57,'Dinamarca','DK'),(58,'Domínica','DM'),(59,'República Dominicana','DO'),(60,'Argel','DZ'),(61,'Ecuador','EC'),(62,'Estonia','EE'),(63,'Egipto','EG'),(64,'Sahara Occidental','EH'),(65,'Eritrea','ER'),(66,'España','ES'),(67,'Etiopía','ET'),(68,'Finlandia','FI'),(69,'Fiji','FJ'),(70,'Islas Malvinas','FK'),(71,'Micronesia','FM'),(72,'Islas Faroe','FO'),(73,'Francia','FR'),(74,'Gabón','GA'),(75,'Reino Unido','GB'),(76,'Granada','GD'),(77,'Georgia','GE'),(78,'Guayana Francesa','GF'),(79,'Guernsey','GG'),(80,'Ghana','GH'),(81,'Gibraltar','GI'),(82,'Groenlandia','GL'),(83,'Gambia','GM'),(84,'Guinea','GN'),(85,'Guadalupe','GP'),(86,'Guinea Ecuatorial','GQ'),(87,'Grecia','GR'),(88,'Georgia del Sur e Islas Sandwich del Sur','GS'),(89,'Guatemala','GT'),(90,'Guam','GU'),(91,'Guinea-Bissau','GW'),(92,'Guayana','GY'),(93,'Hong Kong','HK'),(94,'Islas Heard y McDonald','HM'),(95,'Honduras','HN'),(96,'Croacia','HR'),(97,'Haití','HT'),(98,'Hungría','HU'),(99,'Indonesia','ID'),(100,'Irlanda','IE'),(101,'Israel','IL'),(102,'Isla de Man','IM'),(103,'India','IN'),(104,'Territorio Británico del Océano Índico','IO'),(105,'Irak','IQ'),(106,'Irán','IR'),(107,'Islandia','IS'),(108,'Italia','IT'),(109,'Jersey','JE'),(110,'Jamaica','JM'),(111,'Jordania','JO'),(112,'Japón','JP'),(113,'Kenia','KE'),(114,'Kirguistán','KG'),(115,'Camboya','KH'),(116,'Kiribati','KI'),(117,'Comoros','KM'),(118,'San Cristóbal y Nieves','KN'),(119,'Corea del Norte','KP'),(120,'Corea del Sur','KR'),(121,'Kuwait','KW'),(122,'Islas Caimán','KY'),(123,'Kazajstán','KZ'),(124,'Laos','LA'),(125,'Líbano','LB'),(126,'Santa Lucía','LC'),(127,'Liechtenstein','LI'),(128,'Sri Lanka','LK'),(129,'Liberia','LR'),(130,'Lesotho','LS'),(131,'Lituania','LT'),(132,'Luxemburgo','LU'),(133,'Letonia','LV'),(134,'Libia','LY'),(135,'Marruecos','MA'),(136,'Mónaco','MC'),(137,'Moldova','MD'),(138,'Montenegro','ME'),(139,'Madagascar','MG'),(140,'Islas Marshall','MH'),(141,'Macedonia','MK'),(142,'Mali','ML'),(143,'Myanmar','MM'),(144,'Mongolia','MN'),(145,'Macao','MO'),(146,'Martinica','MQ'),(147,'Mauritania','MR'),(148,'Montserrat','MS'),(149,'Malta','MT'),(150,'Mauricio','MU'),(151,'Maldivas','MV'),(152,'Malawi','MW'),(153,'México','MX'),(154,'Malasia','MY'),(155,'Mozambique','MZ'),(156,'Namibia','NA'),(157,'Nueva Caledonia','NC'),(158,'Níger','NE'),(159,'Islas Norkfolk','NF'),(160,'Nigeria','NG'),(161,'Nicaragua','NI'),(162,'Países Bajos','NL'),(163,'Noruega','NO'),(164,'Nepal','NP'),(165,'Nauru','NR'),(166,'Niue','NU'),(167,'Nueva Zelanda','NZ'),(168,'Omán','OM'),(169,'Panamá','PA'),(170,'Perú','PE'),(171,'Polinesia Francesa','PF'),(172,'Papúa Nueva Guinea','PG'),(173,'Filipinas','PH'),(174,'Pakistán','PK'),(175,'Polonia','PL'),(176,'San Pedro y Miquelón','PM'),(177,'Islas Pitcairn','PN'),(178,'Puerto Rico','PR'),(179,'Palestina','PS'),(180,'Portugal','PT'),(181,'Islas Palaos','PW'),(182,'Paraguay','PY'),(183,'Qatar','QA'),(184,'Reunión','RE'),(185,'Rumanía','RO'),(186,'Serbia y Montenegro','RS'),(187,'Rusia','RU'),(188,'Ruanda','RW'),(189,'Arabia Saudita','SA'),(190,'Islas Solomón','SB'),(191,'Seychelles','SC'),(192,'Sudán','SD'),(193,'Suecia','SE'),(194,'Singapur','SG'),(195,'Santa Elena','SH'),(196,'Eslovenia','SI'),(197,'Islas Svalbard y Jan Mayen','SJ'),(198,'Eslovaquia','SK'),(199,'Sierra Leona','SL'),(200,'San Marino','SM'),(201,'Senegal','SN'),(202,'Somalia','SO'),(203,'Surinam','SR'),(204,'Santo Tomé y Príncipe','ST'),(205,'El Salvador','SV'),(206,'Siria','SY'),(207,'Suazilandia','SZ'),(208,'Islas Turcas y Caicos','TC'),(209,'Chad','TD'),(210,'Territorios Australes Franceses','TF'),(211,'Togo','TG'),(212,'Tailandia','TH'),(213,'Tanzania','TH'),(214,'Tayikistán','TJ'),(215,'Tokelau','TK'),(216,'Timor-Leste','TL'),(217,'Turkmenistán','TM'),(218,'Túnez','TN'),(219,'Tonga','TO'),(220,'Turquía','TR'),(221,'Trinidad y Tobago','TT'),(222,'Tuvalu','TV'),(223,'Taiwán','TW'),(224,'Ucrania','UA'),(225,'Uganda','UG'),(226,'Estados Unidos de América','US'),(227,'Uruguay','UY'),(228,'Uzbekistán','UZ'),(229,'Ciudad del Vaticano','VA'),(230,'San Vicente y las Granadinas','VC'),(231,'Venezuela','VE'),(232,'Islas Vírgenes Británicas','VG'),(233,'Islas Vírgenes de los Estados Unidos de América','VI'),(234,'Vietnam','VN'),(235,'Vanuatu','VU'),(236,'Wallis y Futuna','WF'),(237,'Samoa','WS'),(238,'Yemen','YE'),(239,'Mayotte','YT'),(240,'Sudáfrica','ZA');
/*!40000 ALTER TABLE `cat_pais` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cat_proceso`
--

DROP TABLE IF EXISTS `cat_proceso`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cat_proceso` (
  `pk_id_proceso` int NOT NULL COMMENT 'Identificador de la tabla cat_proceso',
  `nombre_proceso` varchar(255) NOT NULL COMMENT 'Nombre del Proceso',
  PRIMARY KEY (`pk_id_proceso`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cat_proceso`
--

LOCK TABLES `cat_proceso` WRITE;
/*!40000 ALTER TABLE `cat_proceso` DISABLE KEYS */;
/*!40000 ALTER TABLE `cat_proceso` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cat_unidad_academica`
--

DROP TABLE IF EXISTS `cat_unidad_academica`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cat_unidad_academica` (
  `pk_id_unidad_academica` int NOT NULL AUTO_INCREMENT COMMENT 'Llave primaria de la tabla facultad',
  `nombre_unidad_academica` varchar(200) NOT NULL COMMENT 'Nombre de la facultad',
  `descripcion_unidadAcademica` varchar(512) DEFAULT NULL,
  PRIMARY KEY (`pk_id_unidad_academica`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cat_unidad_academica`
--

LOCK TABLES `cat_unidad_academica` WRITE;
/*!40000 ALTER TABLE `cat_unidad_academica` DISABLE KEYS */;
INSERT INTO `cat_unidad_academica` VALUES (1,'Universidad',NULL),(2,'Institución Técnica Profesional',NULL),(3,'Institución Tecnológica',NULL),(4,'Institución Universitaria/Escuela Tecnológica',NULL);
/*!40000 ALTER TABLE `cat_unidad_academica` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `crc_actividad_indicador`
--

DROP TABLE IF EXISTS `crc_actividad_indicador`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `crc_actividad_indicador` (
  `pk_id_actividadIndicador` int NOT NULL AUTO_INCREMENT COMMENT 'Llave primaria de la tabla',
  `fk_id_actividad` int NOT NULL COMMENT 'Llave foránea a la tabla actividad',
  `fk_id_indicadorDesempeno` int NOT NULL COMMENT 'Llave foránea a la tabla indicador\n',
  PRIMARY KEY (`pk_id_actividadIndicador`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `crc_actividad_indicador`
--

LOCK TABLES `crc_actividad_indicador` WRITE;
/*!40000 ALTER TABLE `crc_actividad_indicador` DISABLE KEYS */;
/*!40000 ALTER TABLE `crc_actividad_indicador` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `crc_actividad_resultadoaprendizaje`
--

DROP TABLE IF EXISTS `crc_actividad_resultadoaprendizaje`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `crc_actividad_resultadoaprendizaje` (
  `pk_id_actividad_resultadoAprendizaje` int NOT NULL AUTO_INCREMENT,
  `fk_id_actividad` int NOT NULL,
  `fk_id_resultadoAprendizaje` int NOT NULL,
  PRIMARY KEY (`pk_id_actividad_resultadoAprendizaje`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `crc_actividad_resultadoaprendizaje`
--

LOCK TABLES `crc_actividad_resultadoaprendizaje` WRITE;
/*!40000 ALTER TABLE `crc_actividad_resultadoaprendizaje` DISABLE KEYS */;
/*!40000 ALTER TABLE `crc_actividad_resultadoaprendizaje` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `crc_indicador_poa`
--

DROP TABLE IF EXISTS `crc_indicador_poa`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `crc_indicador_poa` (
  `pk_id_indicador_poa` int NOT NULL COMMENT 'Identificador de la tabla crc_indicador_poa',
  `fk_id_plan_operativo_anual` int NOT NULL COMMENT 'Llave foranea del id de la tabla tbl_plan_operativo_anual',
  `fk_id_indicador` int NOT NULL COMMENT 'Llave foranea del id de la tabla tbl_indicador',
  PRIMARY KEY (`pk_id_indicador_poa`),
  KEY `fk_Indicador_POA_Indicador1_idx` (`fk_id_indicador`),
  KEY `fk_Indicador_POA_Plan_Operativo_Anual1_idx` (`fk_id_plan_operativo_anual`),
  CONSTRAINT `fk_Indicador_POA_Indicador1` FOREIGN KEY (`fk_id_indicador`) REFERENCES `tbl_indicador` (`pk_id_indicador`),
  CONSTRAINT `fk_Indicador_POA_Plan_Operativo_Anual1` FOREIGN KEY (`fk_id_plan_operativo_anual`) REFERENCES `tbl_plan_operativo_anual` (`pk_id_plan_operativo_anual`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `crc_indicador_poa`
--

LOCK TABLES `crc_indicador_poa` WRITE;
/*!40000 ALTER TABLE `crc_indicador_poa` DISABLE KEYS */;
/*!40000 ALTER TABLE `crc_indicador_poa` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `crc_meta_poa`
--

DROP TABLE IF EXISTS `crc_meta_poa`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `crc_meta_poa` (
  `pk_id_meta_poa` int NOT NULL COMMENT 'Identificador de la tabla crc_meta_poa',
  `fk_id_plan_operativo_anual` int NOT NULL COMMENT 'Llave foranea del id de la tabla tbl_plan_operativo_anual',
  `fk_id_meta` int NOT NULL COMMENT 'Llave foranea del id de la tabla tbl_meta',
  PRIMARY KEY (`pk_id_meta_poa`),
  KEY `fk_Meta_POA_Meta1_idx` (`fk_id_meta`),
  KEY `fk_Meta_POA_Plan_Operativo_Anual1_idx` (`fk_id_plan_operativo_anual`),
  CONSTRAINT `fk_Meta_POA_Meta1` FOREIGN KEY (`fk_id_meta`) REFERENCES `tbl_meta` (`pk_id_meta`),
  CONSTRAINT `fk_Meta_POA_Plan_Operativo_Anual1` FOREIGN KEY (`fk_id_plan_operativo_anual`) REFERENCES `tbl_plan_operativo_anual` (`pk_id_plan_operativo_anual`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `crc_meta_poa`
--

LOCK TABLES `crc_meta_poa` WRITE;
/*!40000 ALTER TABLE `crc_meta_poa` DISABLE KEYS */;
/*!40000 ALTER TABLE `crc_meta_poa` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `crc_programa_resultadoaprendizaje`
--

DROP TABLE IF EXISTS `crc_programa_resultadoaprendizaje`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `crc_programa_resultadoaprendizaje` (
  `pk_id_resultado_aprendizaje` int NOT NULL AUTO_INCREMENT COMMENT 'llave primaria de la tabla resultados de aprendizaje',
  `fk_id_programaAcademico` int NOT NULL COMMENT 'Nombre del resultado de aprendizaje\\n',
  `fk_id_resultadoAprendizaje` int NOT NULL COMMENT 'observaciones sobre el resultado de aprendizaje',
  PRIMARY KEY (`pk_id_resultado_aprendizaje`),
  KEY `fk_id_programaAcademico_idx` (`fk_id_programaAcademico`),
  KEY `fk_id_resultadoAprendizaje_idx` (`fk_id_resultadoAprendizaje`),
  CONSTRAINT `rel_crcProgramaRa_programa` FOREIGN KEY (`fk_id_programaAcademico`) REFERENCES `tbl_programa_academico` (`pk_id_programa_academico`),
  CONSTRAINT `rel_crcProgramaRa_resultado` FOREIGN KEY (`fk_id_resultadoAprendizaje`) REFERENCES `tbl_resultado_aprendizaje` (`pk_id_resultado_aprendizaje`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `crc_programa_resultadoaprendizaje`
--

LOCK TABLES `crc_programa_resultadoaprendizaje` WRITE;
/*!40000 ALTER TABLE `crc_programa_resultadoaprendizaje` DISABLE KEYS */;
/*!40000 ALTER TABLE `crc_programa_resultadoaprendizaje` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `crc_rol_permiso`
--

DROP TABLE IF EXISTS `crc_rol_permiso`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `crc_rol_permiso` (
  `pk_id_rol_permiso` int NOT NULL AUTO_INCREMENT,
  `fk_id_rol` int NOT NULL,
  `fk_id_permiso` int NOT NULL,
  PRIMARY KEY (`pk_id_rol_permiso`),
  KEY `fk_id_rol_idx` (`fk_id_rol`),
  KEY `fk_id_permiso_idx` (`fk_id_permiso`),
  CONSTRAINT `rel_crcRolPermiso_permiso` FOREIGN KEY (`fk_id_permiso`) REFERENCES `tbl_permiso` (`pk_id_permiso`),
  CONSTRAINT `rel_crcRolPermiso_rol` FOREIGN KEY (`fk_id_rol`) REFERENCES `tbl_rol` (`pk_id_rol`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `crc_rol_permiso`
--

LOCK TABLES `crc_rol_permiso` WRITE;
/*!40000 ALTER TABLE `crc_rol_permiso` DISABLE KEYS */;
/*!40000 ALTER TABLE `crc_rol_permiso` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `crc_usuario_institucion`
--

DROP TABLE IF EXISTS `crc_usuario_institucion`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `crc_usuario_institucion` (
  `pk_id_usuario_institucion` int NOT NULL AUTO_INCREMENT,
  `fk_id_usuario` int NOT NULL,
  `fk_id_institucion` int NOT NULL,
  PRIMARY KEY (`pk_id_usuario_institucion`),
  KEY `fk_id_usuario_idx` (`fk_id_usuario`),
  KEY `fk_id_institucion_idx` (`fk_id_institucion`),
  CONSTRAINT `rel_crcUsuarioInstitucion_usuario` FOREIGN KEY (`fk_id_usuario`) REFERENCES `tbl_usuario` (`pk_id_usuario`),
  CONSTRAINT `rel_crucUsuarioInstitucion_institucion` FOREIGN KEY (`fk_id_institucion`) REFERENCES `tbl_institucion` (`pk_id_institucion`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `crc_usuario_institucion`
--

LOCK TABLES `crc_usuario_institucion` WRITE;
/*!40000 ALTER TABLE `crc_usuario_institucion` DISABLE KEYS */;
/*!40000 ALTER TABLE `crc_usuario_institucion` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `log_registro`
--

DROP TABLE IF EXISTS `log_registro`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `log_registro` (
  `pk_id_log_registro` int NOT NULL COMMENT 'Llave primaria del log de registro',
  `nombre_tbl_modificada` varchar(255) NOT NULL COMMENT 'Nombre de la tabla que se modifico',
  `id_tbl_modificada` int NOT NULL COMMENT 'Id del campo de la tabla modificada',
  `fec_cre_registro` datetime NOT NULL COMMENT 'Fecha de creacion del registro',
  `fec_mod_registro` datetime NOT NULL COMMENT 'Fecha modificacion del registro',
  `usu_mod_registro` int NOT NULL COMMENT 'Usuario quien modifico el registro',
  PRIMARY KEY (`pk_id_log_registro`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `log_registro`
--

LOCK TABLES `log_registro` WRITE;
/*!40000 ALTER TABLE `log_registro` DISABLE KEYS */;
/*!40000 ALTER TABLE `log_registro` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_actividad`
--

DROP TABLE IF EXISTS `tbl_actividad`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tbl_actividad` (
  `pk_id_actividad` int NOT NULL AUTO_INCREMENT,
  `descripcion_actividad` varchar(512) NOT NULL,
  `evidencia` varchar(512) DEFAULT NULL,
  `comentarios` varchar(512) DEFAULT NULL,
  `tipo` int DEFAULT NULL,
  `idConsolidado` int DEFAULT NULL,
  `idTipo` int DEFAULT NULL,
  PRIMARY KEY (`pk_id_actividad`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_actividad`
--

LOCK TABLES `tbl_actividad` WRITE;
/*!40000 ALTER TABLE `tbl_actividad` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_actividad` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_actividad_proceso`
--

DROP TABLE IF EXISTS `tbl_actividad_proceso`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tbl_actividad_proceso` (
  `pk_id_actividad_proceso` int NOT NULL COMMENT 'Llave primaria id de la actividad del proceso de autoevaluacion',
  `nombre_actividad` varchar(255) NOT NULL COMMENT 'Nombre de la actividad del proceso de autoevaluacion',
  `fecha_inicio_act` datetime NOT NULL COMMENT 'fecha de inicio de la actividad del proceso de autoevaluacion',
  `fecha_fin_act` datetime DEFAULT NULL COMMENT 'fecha finalizacion de la actividad del proceso de autoevaluacion',
  `info_requerida` varchar(255) NOT NULL COMMENT 'Informacion complementaria requerida para dicha actividad',
  `presupuesto` decimal(18,2) DEFAULT NULL COMMENT 'presupuesto asignado a dicha actividad',
  `estado_actividad` varchar(10) NOT NULL COMMENT 'estado de la actividad (pendiente, en proceso, terminada)',
  `observacion` varchar(255) DEFAULT NULL COMMENT 'Observaciones sobre la actividad cuando la persona actualiza el documento asociado a la actividad',
  `doc_registra` varchar(45) DEFAULT NULL COMMENT 'url del documento asociado de entrega de la actividad',
  `fk_id_ciclosp` int NOT NULL COMMENT 'Llave foranea del id de ciclos de proceso de autoevaluacion\\n',
  `fk_id_ciclo` int NOT NULL COMMENT 'Llave foranea del id de la tabla tbl_ciclo',
  PRIMARY KEY (`pk_id_actividad_proceso`),
  KEY `fk_tbl_actividades_proceso_tbl_ciclo1_idx` (`fk_id_ciclo`),
  CONSTRAINT `rel_actividadProceso_ciclo` FOREIGN KEY (`fk_id_ciclo`) REFERENCES `tbl_ciclo` (`pk_id_ciclo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_actividad_proceso`
--

LOCK TABLES `tbl_actividad_proceso` WRITE;
/*!40000 ALTER TABLE `tbl_actividad_proceso` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_actividad_proceso` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_aporte`
--

DROP TABLE IF EXISTS `tbl_aporte`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tbl_aporte` (
  `id` int NOT NULL AUTO_INCREMENT,
  `aporta` tinyint(1) NOT NULL,
  `celdaAtribucionId` int DEFAULT NULL,
  `programaId` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_aporte`
--

LOCK TABLES `tbl_aporte` WRITE;
/*!40000 ALTER TABLE `tbl_aporte` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_aporte` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_asignatura`
--

DROP TABLE IF EXISTS `tbl_asignatura`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tbl_asignatura` (
  `pk_id_asignatura` int NOT NULL AUTO_INCREMENT,
  `codigo_asignatura` varchar(512) NOT NULL,
  `nombre_asignatura` varchar(512) NOT NULL,
  `fk_id_nucleoConocimiento` int NOT NULL,
  PRIMARY KEY (`pk_id_asignatura`),
  KEY `rel_asignatura_nucleoTematico_idx` (`fk_id_nucleoConocimiento`),
  CONSTRAINT `rel_asignatura_nucleoConocimiento` FOREIGN KEY (`fk_id_nucleoConocimiento`) REFERENCES `cat_nucleo_conocimiento` (`pk_id_nucleo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_asignatura`
--

LOCK TABLES `tbl_asignatura` WRITE;
/*!40000 ALTER TABLE `tbl_asignatura` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_asignatura` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_aspecto_calidad`
--

DROP TABLE IF EXISTS `tbl_aspecto_calidad`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tbl_aspecto_calidad` (
  `pk_id_aspecto_calidad` int NOT NULL COMMENT 'Llave primaria de la tabla de id aspecto calidad',
  `nombre_aspecto` varchar(255) NOT NULL COMMENT 'Nombre del aspecto de calidad',
  `fk_id_carac_calidad` int NOT NULL COMMENT 'Llave foranea del id de la tabla de caracteristicas de calidad',
  `fk_id_responsable` int NOT NULL COMMENT 'Llave foranea de id de responsable asociado a la caracteristica de calidad',
  PRIMARY KEY (`pk_id_aspecto_calidad`),
  KEY `fk_tbl_aspecto_calidad_tbl_carac_calidad1_idx` (`fk_id_carac_calidad`),
  KEY `fk_tbl_aspecto_calidad_tbl_responsable1_idx` (`fk_id_responsable`),
  CONSTRAINT `fk_tbl_aspecto_calidad_tbl_carac_calidad1` FOREIGN KEY (`fk_id_carac_calidad`) REFERENCES `tbl_caracteristica_calidad` (`fk_id_factor_calidad`),
  CONSTRAINT `fk_tbl_aspecto_calidad_tbl_responsable1` FOREIGN KEY (`fk_id_responsable`) REFERENCES `tbl_responsable` (`pk_id_responsable`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_aspecto_calidad`
--

LOCK TABLES `tbl_aspecto_calidad` WRITE;
/*!40000 ALTER TABLE `tbl_aspecto_calidad` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_aspecto_calidad` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_caracteristica_calidad`
--

DROP TABLE IF EXISTS `tbl_caracteristica_calidad`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tbl_caracteristica_calidad` (
  `pk_id_caracteristica_calidad` int NOT NULL COMMENT 'Llave primaria de la tabla caracteristicas de calidad',
  `nombre_caracteristica` varchar(255) NOT NULL COMMENT 'Nombre de la caracteristica asociada al factor',
  `fk_id_factor_calidad` int NOT NULL COMMENT 'Llave foranea de id de factor de calidad\\n',
  PRIMARY KEY (`pk_id_caracteristica_calidad`),
  KEY `fk_tbl_carac_calidad_tbl_factor_calidad1_idx` (`fk_id_factor_calidad`),
  CONSTRAINT `fk_tbl_carac_calidad_tbl_factor_calidad1` FOREIGN KEY (`fk_id_factor_calidad`) REFERENCES `tbl_factor_calidad` (`pk_id_factor_calidad`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_caracteristica_calidad`
--

LOCK TABLES `tbl_caracteristica_calidad` WRITE;
/*!40000 ALTER TABLE `tbl_caracteristica_calidad` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_caracteristica_calidad` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_celda_atribucion`
--

DROP TABLE IF EXISTS `tbl_celda_atribucion`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tbl_celda_atribucion` (
  `pk_id_asignatura` int NOT NULL AUTO_INCREMENT,
  `coidgo_asignatura` int DEFAULT NULL COMMENT 'Codigo interno de la asignatura para cada institucion\n',
  `fk_id_resultadoAprendizaje` int DEFAULT NULL COMMENT 'Llave foránea a la tabla resultado de aprendizaje',
  `fk_indicadorDesempeno` int DEFAULT NULL COMMENT 'Llave foránea a la tabla indicador desempeño',
  `evaluado` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`pk_id_asignatura`),
  KEY `rel_celda_resultadoAprendizaje_idx` (`fk_id_resultadoAprendizaje`),
  KEY `rel_celda_indicadorDesempeno_idx` (`fk_indicadorDesempeno`),
  CONSTRAINT `rel_celda_indicadorDesempeno` FOREIGN KEY (`fk_indicadorDesempeno`) REFERENCES `tbl_indicador_desempeno` (`pk_id_indicadorDesempeno`),
  CONSTRAINT `rel_celda_resultadoAprendizaje` FOREIGN KEY (`fk_id_resultadoAprendizaje`) REFERENCES `tbl_resultado_aprendizaje` (`pk_id_resultado_aprendizaje`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_celda_atribucion`
--

LOCK TABLES `tbl_celda_atribucion` WRITE;
/*!40000 ALTER TABLE `tbl_celda_atribucion` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_celda_atribucion` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_ciclo`
--

DROP TABLE IF EXISTS `tbl_ciclo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tbl_ciclo` (
  `pk_id_ciclo` int NOT NULL COMMENT 'Identificador de la tabla tbl_ciclo',
  `fecha_inicio_ciclo` datetime NOT NULL COMMENT 'Fecha de inicio del Ciclo',
  `fecha_final_ciclo` datetime NOT NULL COMMENT 'Fecha de finalizacion del Ciclo',
  `observaciones` varchar(255) NOT NULL COMMENT 'Observaciones de los ciclos',
  `estado` tinyint NOT NULL COMMENT 'Estado activo o inactivo del Ciclo',
  PRIMARY KEY (`pk_id_ciclo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_ciclo`
--

LOCK TABLES `tbl_ciclo` WRITE;
/*!40000 ALTER TABLE `tbl_ciclo` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_ciclo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_componente_formacion`
--

DROP TABLE IF EXISTS `tbl_componente_formacion`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tbl_componente_formacion` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(512) NOT NULL,
  `programaId` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_componente_formacion`
--

LOCK TABLES `tbl_componente_formacion` WRITE;
/*!40000 ALTER TABLE `tbl_componente_formacion` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_componente_formacion` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_consolidado`
--

DROP TABLE IF EXISTS `tbl_consolidado`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tbl_consolidado` (
  `id` int NOT NULL AUTO_INCREMENT,
  `idMedicion` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_consolidado`
--

LOCK TABLES `tbl_consolidado` WRITE;
/*!40000 ALTER TABLE `tbl_consolidado` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_consolidado` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_def_optimo_calidad`
--

DROP TABLE IF EXISTS `tbl_def_optimo_calidad`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tbl_def_optimo_calidad` (
  `pk_id_def_optimo_calidad` int NOT NULL COMMENT 'Llave primaria de la definicion de optimos para aspectos de calidad',
  `nombre_def_optimo_calidad` varchar(255) NOT NULL COMMENT 'Nombre de definicion de optimos de calidad',
  `valor_maximo` decimal(18,2) DEFAULT NULL COMMENT 'valor maximo de porcentaje para optimos de aspectos de calidad',
  `valor_asignado` decimal(18,2) DEFAULT NULL COMMENT 'valor asignado para el aspecto de calidad',
  `fk_id_aspecto_calidad` int NOT NULL COMMENT 'Llave foranea de la tabla aspectos de calidad',
  PRIMARY KEY (`pk_id_def_optimo_calidad`),
  KEY `fk_id_aspecto_calidad_idx` (`fk_id_aspecto_calidad`),
  CONSTRAINT `fk_id_aspecto_calidad` FOREIGN KEY (`fk_id_aspecto_calidad`) REFERENCES `tbl_aspecto_calidad` (`pk_id_aspecto_calidad`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_def_optimo_calidad`
--

LOCK TABLES `tbl_def_optimo_calidad` WRITE;
/*!40000 ALTER TABLE `tbl_def_optimo_calidad` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_def_optimo_calidad` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_def_optimo_ra`
--

DROP TABLE IF EXISTS `tbl_def_optimo_ra`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tbl_def_optimo_ra` (
  `pk_id_def_optimo_ra` int NOT NULL AUTO_INCREMENT COMMENT 'LLave primaria de definicion de optimos para ra',
  `nombre_def_optimo_ra` varchar(45) DEFAULT NULL COMMENT 'nombre de definicion de optimos para ra',
  `porcentaje_optimo_ra` varchar(45) DEFAULT NULL COMMENT 'porcentaje de optimo para ra',
  `fk_id_plan_seguimiento_ra` int NOT NULL COMMENT 'Llave foranea del id de definicion de optimos para ra',
  PRIMARY KEY (`pk_id_def_optimo_ra`),
  KEY `fk_tbl_def_optimos_ra_tbl_plan_seguimiento_ra1_idx` (`fk_id_plan_seguimiento_ra`),
  CONSTRAINT `rel_definicion_seguimiento` FOREIGN KEY (`fk_id_plan_seguimiento_ra`) REFERENCES `tbl_plan_seguimiento_ra` (`pk_id_seguimiento_ra`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_def_optimo_ra`
--

LOCK TABLES `tbl_def_optimo_ra` WRITE;
/*!40000 ALTER TABLE `tbl_def_optimo_ra` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_def_optimo_ra` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_estrategia`
--

DROP TABLE IF EXISTS `tbl_estrategia`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tbl_estrategia` (
  `pk_id_estrategia` int NOT NULL COMMENT 'Identificador de la tabla tbl_estrategia',
  `nombre_estrategia` varchar(255) NOT NULL COMMENT 'Nombre de la Estrategia',
  `activo` tinyint NOT NULL COMMENT 'Estado activo o inactivo de la Estrategia',
  `fk_id_linea_estrategica` int NOT NULL COMMENT 'Llave foranea del id de la tabla tbl_linea_estrategica',
  PRIMARY KEY (`pk_id_estrategia`),
  KEY `fk_Estrategia_Linea_Estrategica1_idx` (`fk_id_linea_estrategica`),
  CONSTRAINT `fk_Estrategia_Linea_Estrategica1` FOREIGN KEY (`fk_id_linea_estrategica`) REFERENCES `tbl_linea_estrategica` (`pk_id_linea_estrategica`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_estrategia`
--

LOCK TABLES `tbl_estrategia` WRITE;
/*!40000 ALTER TABLE `tbl_estrategia` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_estrategia` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_evidencia`
--

DROP TABLE IF EXISTS `tbl_evidencia`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tbl_evidencia` (
  `pk_id_evidencia` int NOT NULL COMMENT 'Identificador de la tabla tbl_evidencia',
  `nombre_evidencia` varchar(255) NOT NULL COMMENT 'Nombre de la Evidencia',
  `localizacion` varchar(255) NOT NULL COMMENT 'Ulr con la que puede localizar la Evidencia',
  `fk_id_seguimiento_poa` int NOT NULL COMMENT 'Llave foranea del id de la tabla tbl_seguimiento_poa',
  PRIMARY KEY (`pk_id_evidencia`),
  KEY `fk_Evidencia_Seguimiento_POA1_idx` (`fk_id_seguimiento_poa`),
  CONSTRAINT `fk_Evidencia_Seguimiento_POA1` FOREIGN KEY (`fk_id_seguimiento_poa`) REFERENCES `tbl_seguimiento_poa` (`pk_id_seguimiento_poa`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_evidencia`
--

LOCK TABLES `tbl_evidencia` WRITE;
/*!40000 ALTER TABLE `tbl_evidencia` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_evidencia` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_factor_calidad`
--

DROP TABLE IF EXISTS `tbl_factor_calidad`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tbl_factor_calidad` (
  `pk_id_factor_calidad` int NOT NULL COMMENT 'Llave primaria de la tabla factor calidad',
  `nombre_factor` varchar(255) NOT NULL COMMENT 'Nombre del factor asociado',
  PRIMARY KEY (`pk_id_factor_calidad`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_factor_calidad`
--

LOCK TABLES `tbl_factor_calidad` WRITE;
/*!40000 ALTER TABLE `tbl_factor_calidad` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_factor_calidad` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_grupo`
--

DROP TABLE IF EXISTS `tbl_grupo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tbl_grupo` (
  `id` int NOT NULL AUTO_INCREMENT,
  `idProfesor` int DEFAULT NULL,
  `idAsignatura` int DEFAULT NULL,
  `idSemestre` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_grupo`
--

LOCK TABLES `tbl_grupo` WRITE;
/*!40000 ALTER TABLE `tbl_grupo` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_grupo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_indicador`
--

DROP TABLE IF EXISTS `tbl_indicador`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tbl_indicador` (
  `pk_id_indicador` int NOT NULL COMMENT 'Identificador de la tabla tbl_indicador',
  `nombre_indicador` varchar(255) NOT NULL COMMENT 'Nombre del Indicador',
  `tipo` varchar(45) DEFAULT NULL COMMENT 'El tipo del Indicador',
  `frecuencia` varchar(45) DEFAULT NULL COMMENT 'Frecuencia periodica del Indicador (puede ser mensual, trimestral, semestral, anual, etc)',
  `activo` tinyint NOT NULL COMMENT 'Estado activo o inactivo del Indicador',
  `fk_id_meta` int NOT NULL COMMENT 'Llave foranea del id de la tabla tbl_meta',
  PRIMARY KEY (`pk_id_indicador`),
  KEY `fk_Indicador_Meta1_idx` (`fk_id_meta`),
  CONSTRAINT `fk_Indicador_Meta1` FOREIGN KEY (`fk_id_meta`) REFERENCES `tbl_meta` (`pk_id_meta`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_indicador`
--

LOCK TABLES `tbl_indicador` WRITE;
/*!40000 ALTER TABLE `tbl_indicador` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_indicador` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_indicador_desempeno`
--

DROP TABLE IF EXISTS `tbl_indicador_desempeno`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tbl_indicador_desempeno` (
  `pk_id_indicadorDesempeno` int NOT NULL AUTO_INCREMENT COMMENT 'LLave primaria de la tabla',
  `codigo_indicadorDesempeno` varchar(512) NOT NULL COMMENT 'Código interno del indicador',
  `descripcion_indicadorDesempeno` varchar(512) NOT NULL COMMENT 'Descripción del indicador de desempeño\n',
  `fk_id_resultadoAprendizaje` int DEFAULT NULL COMMENT 'Llave foránea a la tabla resultado aprendizaje',
  PRIMARY KEY (`pk_id_indicadorDesempeno`),
  KEY `rel_indicadorDesempeno_resultadoAprendizaje_idx` (`fk_id_resultadoAprendizaje`),
  CONSTRAINT `rel_indicadorDesempeno_resultadoAprendizaje` FOREIGN KEY (`fk_id_resultadoAprendizaje`) REFERENCES `tbl_resultado_aprendizaje` (`pk_id_resultado_aprendizaje`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_indicador_desempeno`
--

LOCK TABLES `tbl_indicador_desempeno` WRITE;
/*!40000 ALTER TABLE `tbl_indicador_desempeno` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_indicador_desempeno` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_indicador_proceso`
--

DROP TABLE IF EXISTS `tbl_indicador_proceso`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tbl_indicador_proceso` (
  `pk_id_indicador_proceso` int NOT NULL COMMENT 'Llave primaria de la tabla indicador de proceso',
  `nombre_indicador` varchar(255) NOT NULL COMMENT 'Nombre del indicador a revisar',
  `porcentaje_indicador` varchar(45) NOT NULL COMMENT 'porcentaje de cumplimiento asignado al indicador',
  PRIMARY KEY (`pk_id_indicador_proceso`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_indicador_proceso`
--

LOCK TABLES `tbl_indicador_proceso` WRITE;
/*!40000 ALTER TABLE `tbl_indicador_proceso` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_indicador_proceso` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_institucion`
--

DROP TABLE IF EXISTS `tbl_institucion`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tbl_institucion` (
  `pk_id_institucion` int NOT NULL AUTO_INCREMENT COMMENT 'Llave primaria de institucion',
  `nombre_institucion` varchar(255) NOT NULL COMMENT 'Nombre de la institución',
  `nit_institucion` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL COMMENT 'Codigo de la institución. SNIES o equivalente.',
  `sector_institucion` varchar(255) NOT NULL COMMENT 'Sector al cual pertenece la institucion\\n',
  `caracter_academico` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL COMMENT 'Caracter académico de la institucion\\r\\n',
  `email_principal` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT 'Correo electrónico principal de la institución\\r\\n',
  `email_secundario` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `telefono_principal` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL COMMENT 'Telefono de la institución\\r\\n',
  `telefono_secundario` varchar(200) DEFAULT NULL,
  `sitio_web_institucion` varchar(255) DEFAULT NULL COMMENT 'Url del sitio web de la institucion\\n',
  `fk_id_unidadAcademica` int DEFAULT NULL,
  PRIMARY KEY (`pk_id_institucion`),
  KEY `rel_institucion_unidadAcademica_idx` (`fk_id_unidadAcademica`),
  CONSTRAINT `rel_institucion_unidadAcademica` FOREIGN KEY (`fk_id_unidadAcademica`) REFERENCES `cat_unidad_academica` (`pk_id_unidad_academica`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_institucion`
--

LOCK TABLES `tbl_institucion` WRITE;
/*!40000 ALTER TABLE `tbl_institucion` DISABLE KEYS */;
INSERT INTO `tbl_institucion` VALUES (3,'Institución 1','123456789-1','Oficial','Universidad','principal@correo.com',NULL,'123456',NULL,'www.institucion1.com',NULL);
/*!40000 ALTER TABLE `tbl_institucion` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_linea_estrategica`
--

DROP TABLE IF EXISTS `tbl_linea_estrategica`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tbl_linea_estrategica` (
  `pk_id_linea_estrategica` int NOT NULL COMMENT 'Identificador de la tabla tbl_linea_estrategica',
  `nombre_linea` varchar(255) NOT NULL COMMENT 'Nombre de la Linea Estrategica',
  `activo` tinyint NOT NULL COMMENT 'Estado activo o inactivo de la Linea Estrategica',
  `fk_id_plan_desarrollo` int NOT NULL COMMENT 'Llave foranea del id de la tabla tbl_plan_desarrollo',
  PRIMARY KEY (`pk_id_linea_estrategica`),
  KEY `fk_Linea_Estrategica_Plan_Desarrollo_idx` (`fk_id_plan_desarrollo`),
  CONSTRAINT `fk_id_plan_desarrollo` FOREIGN KEY (`fk_id_plan_desarrollo`) REFERENCES `tbl_plan_desarrollo` (`pk_id_plan_desarrollo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_linea_estrategica`
--

LOCK TABLES `tbl_linea_estrategica` WRITE;
/*!40000 ALTER TABLE `tbl_linea_estrategica` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_linea_estrategica` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_medicion`
--

DROP TABLE IF EXISTS `tbl_medicion`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tbl_medicion` (
  `id` int NOT NULL AUTO_INCREMENT,
  `fechaRegistro` datetime NOT NULL,
  `asignaturaId` int DEFAULT NULL,
  `profesorId` int DEFAULT NULL,
  `periodoId` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_medicion`
--

LOCK TABLES `tbl_medicion` WRITE;
/*!40000 ALTER TABLE `tbl_medicion` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_medicion` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_meta`
--

DROP TABLE IF EXISTS `tbl_meta`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tbl_meta` (
  `pk_id_meta` int NOT NULL COMMENT 'Identificador de la tabla tbl_meta',
  `nombre_meta` varchar(255) NOT NULL COMMENT 'Nombre de la Meta',
  `activo` tinyint NOT NULL COMMENT 'Estado activo o inactivo de la Meta',
  `fk_id_programa` int NOT NULL COMMENT 'Llave foranea del id de la tabla tbl_programa',
  PRIMARY KEY (`pk_id_meta`),
  KEY `fk_id_programa_idx` (`fk_id_programa`),
  CONSTRAINT `fk_id_programa` FOREIGN KEY (`fk_id_programa`) REFERENCES `tbl_programa` (`pk_id_programa`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_meta`
--

LOCK TABLES `tbl_meta` WRITE;
/*!40000 ALTER TABLE `tbl_meta` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_meta` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_meta_indicador`
--

DROP TABLE IF EXISTS `tbl_meta_indicador`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tbl_meta_indicador` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(512) DEFAULT NULL,
  `medicionId` int DEFAULT NULL,
  `nivelesId` int DEFAULT NULL,
  `indicadorDesempenoId` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_meta_indicador`
--

LOCK TABLES `tbl_meta_indicador` WRITE;
/*!40000 ALTER TABLE `tbl_meta_indicador` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_meta_indicador` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_nivel_estudiante`
--

DROP TABLE IF EXISTS `tbl_nivel_estudiante`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tbl_nivel_estudiante` (
  `id` int NOT NULL AUTO_INCREMENT,
  `idEstudiante` int NOT NULL,
  `indicadorDesempenoId` int DEFAULT NULL,
  `medicionId` int DEFAULT NULL,
  `nivelesId` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_nivel_estudiante`
--

LOCK TABLES `tbl_nivel_estudiante` WRITE;
/*!40000 ALTER TABLE `tbl_nivel_estudiante` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_nivel_estudiante` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_niveles`
--

DROP TABLE IF EXISTS `tbl_niveles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tbl_niveles` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(512) NOT NULL,
  `idNivel` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_niveles`
--

LOCK TABLES `tbl_niveles` WRITE;
/*!40000 ALTER TABLE `tbl_niveles` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_niveles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_nucleo_tematico`
--

DROP TABLE IF EXISTS `tbl_nucleo_tematico`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tbl_nucleo_tematico` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(512) NOT NULL,
  `componenteFormacionId` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_nucleo_tematico`
--

LOCK TABLES `tbl_nucleo_tematico` WRITE;
/*!40000 ALTER TABLE `tbl_nucleo_tematico` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_nucleo_tematico` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_objetivo_estrategico`
--

DROP TABLE IF EXISTS `tbl_objetivo_estrategico`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tbl_objetivo_estrategico` (
  `pk_id_objetivo_estrategico` int NOT NULL COMMENT 'Identificador de la tabla tbl_objetivo_estrategico',
  `nombre_objetivo` varchar(255) NOT NULL COMMENT 'Nombre del Objetivo Estrategico',
  `activo` tinyint NOT NULL COMMENT 'Estado activo o inactivo del Objetivo Estrategico',
  `fk_id_estrategia` int NOT NULL COMMENT 'Llave foranea del id de la tabla tbl_estrategia',
  PRIMARY KEY (`pk_id_objetivo_estrategico`),
  KEY `fk_Objetivo_Estrategico_Estrategia1_idx` (`fk_id_estrategia`),
  CONSTRAINT `fk_Objetivo_Estrategico_Estrategia1` FOREIGN KEY (`fk_id_estrategia`) REFERENCES `tbl_estrategia` (`pk_id_estrategia`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_objetivo_estrategico`
--

LOCK TABLES `tbl_objetivo_estrategico` WRITE;
/*!40000 ALTER TABLE `tbl_objetivo_estrategico` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_objetivo_estrategico` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_periodo`
--

DROP TABLE IF EXISTS `tbl_periodo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tbl_periodo` (
  `id` int NOT NULL AUTO_INCREMENT,
  `periodo` varchar(512) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_periodo`
--

LOCK TABLES `tbl_periodo` WRITE;
/*!40000 ALTER TABLE `tbl_periodo` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_periodo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_permiso`
--

DROP TABLE IF EXISTS `tbl_permiso`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tbl_permiso` (
  `pk_id_permiso` int NOT NULL AUTO_INCREMENT,
  `nombre_permiso` varchar(50) NOT NULL,
  `fk_id_permiso` int NOT NULL,
  PRIMARY KEY (`pk_id_permiso`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_permiso`
--

LOCK TABLES `tbl_permiso` WRITE;
/*!40000 ALTER TABLE `tbl_permiso` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_permiso` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_plan_ciclo`
--

DROP TABLE IF EXISTS `tbl_plan_ciclo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tbl_plan_ciclo` (
  `id` int NOT NULL AUTO_INCREMENT,
  `idPensum` int NOT NULL,
  `descripcion` varchar(512) NOT NULL,
  `idPrograma` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_plan_ciclo`
--

LOCK TABLES `tbl_plan_ciclo` WRITE;
/*!40000 ALTER TABLE `tbl_plan_ciclo` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_plan_ciclo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_plan_desarrollo`
--

DROP TABLE IF EXISTS `tbl_plan_desarrollo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tbl_plan_desarrollo` (
  `pk_id_plan_desarrollo` int NOT NULL COMMENT 'Identificador de la tabla tbl_plan_desarrollo',
  `nombre_plan_desarrollo` varchar(255) NOT NULL COMMENT 'Nombre del Plan de Desarrollo',
  `anio_inicio` int NOT NULL COMMENT 'Anio de inicio del Plan de Desarrollo',
  `anio_fin` int NOT NULL COMMENT 'Anio de finalización del Plan de Desarrollo',
  `vigente` tinyint NOT NULL COMMENT 'Vigencia activa o inactiva del Plan de Desarrollo',
  PRIMARY KEY (`pk_id_plan_desarrollo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_plan_desarrollo`
--

LOCK TABLES `tbl_plan_desarrollo` WRITE;
/*!40000 ALTER TABLE `tbl_plan_desarrollo` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_plan_desarrollo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_plan_estudio`
--

DROP TABLE IF EXISTS `tbl_plan_estudio`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tbl_plan_estudio` (
  `pk_id_plan_estudio` int NOT NULL AUTO_INCREMENT COMMENT 'Llave primaria de la tabla Plan de Estudio',
  `nombre_plan_estudio` varchar(255) NOT NULL COMMENT 'Nombre del plan de estudio',
  `codigo_plan_estudio` varchar(255) NOT NULL COMMENT 'Código del plan de estudio',
  `creditos_plan_estudio` int NOT NULL COMMENT 'Creditos totales del plan de estudio',
  `fk_id_programa_academico` int NOT NULL,
  PRIMARY KEY (`pk_id_plan_estudio`),
  KEY `fk_id_programa_academico_idx` (`fk_id_programa_academico`),
  CONSTRAINT `rel_planEstudio_programaAcademico` FOREIGN KEY (`fk_id_programa_academico`) REFERENCES `tbl_programa_academico` (`pk_id_programa_academico`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_plan_estudio`
--

LOCK TABLES `tbl_plan_estudio` WRITE;
/*!40000 ALTER TABLE `tbl_plan_estudio` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_plan_estudio` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_plan_operativo_anual`
--

DROP TABLE IF EXISTS `tbl_plan_operativo_anual`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tbl_plan_operativo_anual` (
  `pk_id_plan_operativo_anual` int NOT NULL COMMENT 'Identificador de la tabla tbl_plan_operativo_anual',
  `actividad_poa` varchar(255) NOT NULL COMMENT 'Actividad que se va a realizar en el Plan Operativo Anual',
  `producto_poa` varchar(255) DEFAULT NULL COMMENT 'Producto que se va a generar al completar el Plan Operativo Anual',
  `estado` tinyint NOT NULL COMMENT 'Estado activo o inactivo del Plan Operativo Anual',
  `presupuesto` double DEFAULT NULL COMMENT 'Presupuesto con el que se cuenta para desarrollar las actividades del Plan Operativo Anual',
  `obligatoria` tinyint DEFAULT NULL COMMENT 'Si es de obligadorio cumplimiento el Plan Operativo Anual',
  `observacion` varchar(255) DEFAULT NULL COMMENT 'Observaciones adicionales del Plan Operativo Anual',
  `fecha_inicio` datetime NOT NULL COMMENT 'Fecha de inicio del Plan Operativo Anual',
  `fecha_fin` datetime NOT NULL COMMENT 'Fecha de finalizacion del Plan Operativo Anual',
  `fk_id_proyecto_plan` int NOT NULL COMMENT 'Llave foranea del id de la tabla tbl_proyecto_plan',
  `fk_id_ciclo` int NOT NULL,
  PRIMARY KEY (`pk_id_plan_operativo_anual`),
  KEY `fk_Plan_Operativo_Anual_Proyecto_Plan1_idx` (`fk_id_proyecto_plan`),
  KEY `fk_id_ciclo_idx` (`fk_id_ciclo`),
  CONSTRAINT `fk_Plan_Operativo_Anual_Proyecto_Plan1` FOREIGN KEY (`fk_id_proyecto_plan`) REFERENCES `tbl_proyecto_plan` (`pk_id_proyecto_plan`),
  CONSTRAINT `rel_poa_ciclo` FOREIGN KEY (`fk_id_ciclo`) REFERENCES `tbl_ciclo` (`pk_id_ciclo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_plan_operativo_anual`
--

LOCK TABLES `tbl_plan_operativo_anual` WRITE;
/*!40000 ALTER TABLE `tbl_plan_operativo_anual` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_plan_operativo_anual` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_plan_seguimiento_ra`
--

DROP TABLE IF EXISTS `tbl_plan_seguimiento_ra`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tbl_plan_seguimiento_ra` (
  `pk_id_seguimiento_ra` int NOT NULL COMMENT 'Llave primaria del id de seguimiento de los ra',
  `metodologia` varchar(45) NOT NULL COMMENT 'metodologia de seguimiento de los ra (assessment)',
  `metas_ra` varchar(45) NOT NULL COMMENT 'metas definidas por cada ra ',
  `observaciones` varchar(45) DEFAULT NULL COMMENT 'observaciones al plan de seguimiento de ra',
  `fk_id_ciclo` int NOT NULL,
  PRIMARY KEY (`pk_id_seguimiento_ra`),
  KEY `fk_id_ciclo_idx` (`fk_id_ciclo`),
  CONSTRAINT `rel_planSeguimiento_ciclo` FOREIGN KEY (`fk_id_ciclo`) REFERENCES `tbl_ciclo` (`pk_id_ciclo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_plan_seguimiento_ra`
--

LOCK TABLES `tbl_plan_seguimiento_ra` WRITE;
/*!40000 ALTER TABLE `tbl_plan_seguimiento_ra` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_plan_seguimiento_ra` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_planeacion`
--

DROP TABLE IF EXISTS `tbl_planeacion`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tbl_planeacion` (
  `id` int NOT NULL AUTO_INCREMENT,
  `idPlan_ciclo` int DEFAULT NULL,
  `idAsignatura` int DEFAULT NULL,
  `resultadoEsperado` varchar(512) DEFAULT NULL,
  `evidencias` varchar(512) DEFAULT NULL,
  `idOtro` int DEFAULT NULL,
  `idSemestre` int DEFAULT NULL,
  `idPlanCiclo` int DEFAULT NULL,
  `idTipo` int DEFAULT NULL,
  `idRa` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_planeacion`
--

LOCK TABLES `tbl_planeacion` WRITE;
/*!40000 ALTER TABLE `tbl_planeacion` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_planeacion` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_planeacion_profesor`
--

DROP TABLE IF EXISTS `tbl_planeacion_profesor`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tbl_planeacion_profesor` (
  `id` int NOT NULL AUTO_INCREMENT,
  `idPlaneacion` int NOT NULL,
  `idProfesor` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_planeacion_profesor`
--

LOCK TABLES `tbl_planeacion_profesor` WRITE;
/*!40000 ALTER TABLE `tbl_planeacion_profesor` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_planeacion_profesor` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_porcentajes`
--

DROP TABLE IF EXISTS `tbl_porcentajes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tbl_porcentajes` (
  `id` int NOT NULL AUTO_INCREMENT,
  `porcentaje` int DEFAULT NULL,
  `idIndicador` int DEFAULT NULL,
  `idRa` int DEFAULT NULL,
  `idConsolidado` int DEFAULT NULL,
  `idNivel` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_porcentajes`
--

LOCK TABLES `tbl_porcentajes` WRITE;
/*!40000 ALTER TABLE `tbl_porcentajes` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_porcentajes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_proceso_autoevaluacion`
--

DROP TABLE IF EXISTS `tbl_proceso_autoevaluacion`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tbl_proceso_autoevaluacion` (
  `pk_id_proceso_auto` int NOT NULL AUTO_INCREMENT COMMENT 'Llave primaria de la tabla proceso de autoevaluacion',
  `descripcion_proceso` varchar(255) NOT NULL COMMENT 'Descripción del proceso de auto evaluacion\\n',
  `fk_id_programa_academico` int NOT NULL COMMENT 'Llave foránea del id de la tabla programa\\n',
  `fk_id_ciclo` int NOT NULL,
  PRIMARY KEY (`pk_id_proceso_auto`),
  KEY `fk_tbl_proceso_autoevaluacion_tbl_programa1_idx` (`fk_id_programa_academico`),
  KEY `fk_id_ciclo_idx` (`fk_id_ciclo`),
  CONSTRAINT `rel_procesoAutoevaluacion_ciclo` FOREIGN KEY (`fk_id_ciclo`) REFERENCES `tbl_ciclo` (`pk_id_ciclo`),
  CONSTRAINT `rel_procesoAutoevaluacion_programaAcademico` FOREIGN KEY (`fk_id_programa_academico`) REFERENCES `tbl_programa_academico` (`pk_id_programa_academico`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_proceso_autoevaluacion`
--

LOCK TABLES `tbl_proceso_autoevaluacion` WRITE;
/*!40000 ALTER TABLE `tbl_proceso_autoevaluacion` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_proceso_autoevaluacion` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_profesor`
--

DROP TABLE IF EXISTS `tbl_profesor`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tbl_profesor` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(512) NOT NULL,
  `correo` varchar(512) NOT NULL,
  `telefono` varchar(512) DEFAULT NULL,
  `idUsuario` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_profesor`
--

LOCK TABLES `tbl_profesor` WRITE;
/*!40000 ALTER TABLE `tbl_profesor` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_profesor` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_programa`
--

DROP TABLE IF EXISTS `tbl_programa`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tbl_programa` (
  `pk_id_programa` int NOT NULL,
  `nombre_programa` varchar(255) NOT NULL,
  `activo` tinyint NOT NULL,
  `fk_id_linea_estrategica` int NOT NULL,
  PRIMARY KEY (`pk_id_programa`),
  KEY `fk_tbl_programa_tbl_linea_estrategica1_idx` (`fk_id_linea_estrategica`),
  CONSTRAINT `fk_tbl_programa_tbl_linea_estrategica1` FOREIGN KEY (`fk_id_linea_estrategica`) REFERENCES `tbl_linea_estrategica` (`pk_id_linea_estrategica`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_programa`
--

LOCK TABLES `tbl_programa` WRITE;
/*!40000 ALTER TABLE `tbl_programa` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_programa` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_programa_academico`
--

DROP TABLE IF EXISTS `tbl_programa_academico`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tbl_programa_academico` (
  `pk_id_programa_academico` int NOT NULL AUTO_INCREMENT COMMENT 'Identificador de la tabla tbl_programa',
  `nombre_programa` varchar(255) NOT NULL COMMENT 'Nombre del Programa',
  `codigo_programa` varchar(45) NOT NULL,
  `activo` tinyint NOT NULL COMMENT 'Estado activo o inactivo del Programa',
  `vigencia_programa` tinyint NOT NULL COMMENT 'VIgencia del programa académico',
  `fk_id_nucleo` int NOT NULL COMMENT 'Llave foránea del id de nucleo de base de conocimiento\\n',
  `fk_id_unidad_academica` int NOT NULL COMMENT 'Llave foranea de la tabla de Id de facultad',
  `fk_id_institucion` int NOT NULL COMMENT 'Llave foranea del id de la institucion\\n',
  `fk_id_nivel_formacion` int NOT NULL COMMENT 'Llave foranea de la tabla nivel de formacion',
  `fk_id_modalidad` int NOT NULL,
  PRIMARY KEY (`pk_id_programa_academico`),
  KEY `fk_tbl_programa_tbl_nucleo_conocimiento1_idx` (`fk_id_nucleo`),
  KEY `fk_tbl_programa_tbl_facultad1_idx` (`fk_id_unidad_academica`),
  KEY `fk_tbl_programa_tbl_institucion1_idx` (`fk_id_institucion`),
  KEY `fk_tbl_programa_tbl_nivel_formacion1_idx` (`fk_id_nivel_formacion`),
  KEY `fk_tbl_programa_academico_cat_modalidad1_idx` (`fk_id_modalidad`),
  CONSTRAINT `rel_programa_institucion` FOREIGN KEY (`fk_id_institucion`) REFERENCES `tbl_institucion` (`pk_id_institucion`),
  CONSTRAINT `rel_programa_modalidad` FOREIGN KEY (`fk_id_modalidad`) REFERENCES `cat_modalidad` (`pk_id_modalidad`),
  CONSTRAINT `rel_programa_nivel` FOREIGN KEY (`fk_id_nivel_formacion`) REFERENCES `cat_nivel_formacion` (`pk_id_nivel_formacion`),
  CONSTRAINT `rel_programa_nucleo` FOREIGN KEY (`fk_id_nucleo`) REFERENCES `cat_nucleo_conocimiento` (`pk_id_nucleo`),
  CONSTRAINT `rel_programa_unidad` FOREIGN KEY (`fk_id_unidad_academica`) REFERENCES `cat_unidad_academica` (`pk_id_unidad_academica`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_programa_academico`
--

LOCK TABLES `tbl_programa_academico` WRITE;
/*!40000 ALTER TABLE `tbl_programa_academico` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_programa_academico` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_proyecto_plan`
--

DROP TABLE IF EXISTS `tbl_proyecto_plan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tbl_proyecto_plan` (
  `pk_id_proyecto_plan` int NOT NULL COMMENT 'Identificador de la tabla tbl_proyecto_plan',
  `nombre_proyecto` varchar(255) NOT NULL COMMENT 'Nombre del Proyecto Plan',
  `tipo_proyecto` varchar(45) NOT NULL COMMENT 'Tipo de Proyecto Plan',
  `fecha_inicio` datetime NOT NULL COMMENT 'Fecha de inicio del Proycto Plan',
  `fecha_fin` datetime NOT NULL COMMENT 'Fecha de finalizacion del Proycto Plan',
  `fk_id_estrategia` int NOT NULL COMMENT 'Llave foranea del id de la tabla tbl_estrategia',
  `fk_id_proceso` int NOT NULL COMMENT 'Llave foranea del id de la tabla proceso',
  `fk_id_programa` int NOT NULL,
  PRIMARY KEY (`pk_id_proyecto_plan`),
  KEY `fk_Proyecto_Plan_Estrategia1_idx` (`fk_id_estrategia`),
  KEY `fk_tbl_proyecto_plan_cat_proceso1_idx` (`fk_id_proceso`),
  KEY `fk_tbl_proyecto_plan_tbl_programa1_idx` (`fk_id_programa`),
  CONSTRAINT `fk_Proyecto_Plan_Estrategia1` FOREIGN KEY (`fk_id_estrategia`) REFERENCES `tbl_estrategia` (`pk_id_estrategia`),
  CONSTRAINT `fk_tbl_proyecto_plan_cat_proceso1` FOREIGN KEY (`fk_id_proceso`) REFERENCES `cat_proceso` (`pk_id_proceso`),
  CONSTRAINT `fk_tbl_proyecto_plan_tbl_programa1` FOREIGN KEY (`fk_id_programa`) REFERENCES `tbl_programa` (`pk_id_programa`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_proyecto_plan`
--

LOCK TABLES `tbl_proyecto_plan` WRITE;
/*!40000 ALTER TABLE `tbl_proyecto_plan` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_proyecto_plan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_responsable`
--

DROP TABLE IF EXISTS `tbl_responsable`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tbl_responsable` (
  `pk_id_responsable` int NOT NULL COMMENT 'Identificador de la tabla tbl_responsable',
  `cargo_responsable` varchar(255) NOT NULL COMMENT 'Cargo del Responable',
  `codigo` varchar(45) DEFAULT NULL COMMENT 'Codigo del cargo del Responable',
  `grado` varchar(45) DEFAULT NULL COMMENT 'Grado el Responsable',
  `tipo` varchar(255) DEFAULT NULL COMMENT 'Campo designado para definirel tipo de responsabilidad del usuario.\\n1. Responsable del POA\\n2. Responsable de Proyecto\\n3. Responsable de Seguimiento de Proceso Autoevaluación\\n4. Responsable del programa\\n',
  `nivel` varchar(45) DEFAULT NULL COMMENT 'Nivel del Responsable',
  `activo` tinyint DEFAULT NULL COMMENT 'Estado activo o inactivo del Responsable',
  `experiencia` varchar(255) DEFAULT NULL COMMENT 'Experiencia del Responsable',
  `formacion_academica` varchar(255) DEFAULT NULL COMMENT 'Formacion academica del Responsable',
  `fk_id_plan_operativo_anual` int NOT NULL COMMENT 'Llave foranea de la tabla Plan Operativo Anual',
  `fk_id_usuario` int NOT NULL,
  PRIMARY KEY (`pk_id_responsable`),
  KEY `fk_tbl_responsable_tbl_plan_operativo_anual1_idx` (`fk_id_plan_operativo_anual`),
  KEY `fk_id_usuario_idx` (`fk_id_usuario`),
  CONSTRAINT `rel_responsable_poa` FOREIGN KEY (`fk_id_plan_operativo_anual`) REFERENCES `tbl_plan_operativo_anual` (`pk_id_plan_operativo_anual`),
  CONSTRAINT `rel_responsable_usuario` FOREIGN KEY (`fk_id_usuario`) REFERENCES `tbl_usuario` (`pk_id_usuario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_responsable`
--

LOCK TABLES `tbl_responsable` WRITE;
/*!40000 ALTER TABLE `tbl_responsable` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_responsable` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_resultado_aprendizaje`
--

DROP TABLE IF EXISTS `tbl_resultado_aprendizaje`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tbl_resultado_aprendizaje` (
  `pk_id_resultado_aprendizaje` int NOT NULL AUTO_INCREMENT COMMENT 'llave primaria de la tabla resultados de aprendizaje',
  `nombre_resultado_aprendizaje` varchar(255) NOT NULL COMMENT 'Nombre del resultado de aprendizaje\\n',
  `observacion` varchar(255) DEFAULT NULL COMMENT 'observaciones sobre el resultado de aprendizaje',
  PRIMARY KEY (`pk_id_resultado_aprendizaje`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_resultado_aprendizaje`
--

LOCK TABLES `tbl_resultado_aprendizaje` WRITE;
/*!40000 ALTER TABLE `tbl_resultado_aprendizaje` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_resultado_aprendizaje` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_rol`
--

DROP TABLE IF EXISTS `tbl_rol`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tbl_rol` (
  `pk_id_rol` int NOT NULL AUTO_INCREMENT COMMENT 'Llave primaria de la tabla rol',
  `nombre_rol` varchar(255) NOT NULL COMMENT 'nombre de la categoría del rol',
  `descripcion_rol` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT 'Nombre de la descripcion del rol\\r\\n',
  PRIMARY KEY (`pk_id_rol`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_rol`
--

LOCK TABLES `tbl_rol` WRITE;
/*!40000 ALTER TABLE `tbl_rol` DISABLE KEYS */;
INSERT INTO `tbl_rol` VALUES (5,'Administrador',''),(6,'Director',' '),(7,'Profesor',' ');
/*!40000 ALTER TABLE `tbl_rol` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_sede_institucion`
--

DROP TABLE IF EXISTS `tbl_sede_institucion`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tbl_sede_institucion` (
  `pk_id_sede_institucion` int NOT NULL AUTO_INCREMENT COMMENT 'Llave primaria de la tabla sede institución',
  `nombre_sede` varchar(255) NOT NULL COMMENT 'Nombre de la sede de la institución',
  `direccion_sede` varchar(255) NOT NULL COMMENT 'Dirección de la institución en la ciudad\\n',
  `fk_id_institucion` int NOT NULL COMMENT 'Llave foranea del id de la institución',
  `fk_id_ciudad` int NOT NULL COMMENT 'Ciudad en la que se encuentra la sede',
  `fk_id_estado` int NOT NULL COMMENT 'Estado en que se encuentra la sede',
  `fk_id_pais` int NOT NULL COMMENT 'País en que se encuentra la sede',
  `acreditacion_alta_calidad` varchar(2) NOT NULL DEFAULT 'No',
  `fecha_acreditacion` datetime NOT NULL,
  `resolucion_acreditacion` varchar(45) NOT NULL,
  `vigencia_acreditacion` varchar(45) NOT NULL,
  `codigo_institucion` varchar(45) NOT NULL,
  `fk_id_identificacion` int DEFAULT NULL,
  PRIMARY KEY (`pk_id_sede_institucion`),
  KEY `fk_tbl_sede_institucion_tbl_institucion1_idx` (`fk_id_institucion`),
  KEY `fk_id_identificacion_institucion_idx` (`fk_id_identificacion`),
  CONSTRAINT `rel_sede_identificacion` FOREIGN KEY (`fk_id_identificacion`) REFERENCES `cat_identificacion_institucion` (`pk_id_identificacion_institucion`),
  CONSTRAINT `rel_sede_institucion` FOREIGN KEY (`fk_id_institucion`) REFERENCES `tbl_institucion` (`pk_id_institucion`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_sede_institucion`
--

LOCK TABLES `tbl_sede_institucion` WRITE;
/*!40000 ALTER TABLE `tbl_sede_institucion` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_sede_institucion` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_seguimiento_poa`
--

DROP TABLE IF EXISTS `tbl_seguimiento_poa`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tbl_seguimiento_poa` (
  `pk_id_seguimiento_poa` int NOT NULL COMMENT 'Identificador de la tabla tbl_seguimiento_poa',
  `descripcion` varchar(255) DEFAULT NULL COMMENT 'Descripcion del Seguimiento que se va a hacer al Plan Operativo Anual',
  `presupuesto` double NOT NULL COMMENT 'Presupuesto ejecutado al momento del Seguimiento al Plan Operativo Anual',
  `revisado` tinyint DEFAULT NULL COMMENT 'Marcador de que se reviso el seguimiento',
  `estado` tinyint DEFAULT NULL COMMENT 'Estado activo o inactivo del Seguimiento al Plan Operativo Anual',
  `observacion` varchar(255) DEFAULT NULL COMMENT 'Seguimiento al Plan Operativo Anual',
  `notificado` tinyint DEFAULT NULL COMMENT 'Si se notifico via email o mensaje de texto sobre la observacion agregada al Seguimiento al Plan Operativo Anual',
  `fecha_revisado` datetime DEFAULT NULL COMMENT 'Fecha en que se hizo la revision al Seguimiento al Plan Operativo Anual',
  `usuario_revisado` varchar(45) DEFAULT NULL COMMENT 'Id del usuario que hizo la revision al Seguimiento al Plan Operativo Anual',
  `id_responsable` int NOT NULL COMMENT 'Id del responsable del Plan Operativo Anual al que se esta haciendo el Seguimiento',
  `fk_id_ciclo` int NOT NULL COMMENT 'Llave foranea del id de la tabla tbl_ciclo_poa',
  `fk_id_plan_operativo` int NOT NULL,
  PRIMARY KEY (`pk_id_seguimiento_poa`),
  KEY `fk_tbl_seguimiento_poa_tbl_ciclo_proceso1_idx` (`fk_id_ciclo`),
  KEY `fk_id_plan_operativo_idx` (`fk_id_plan_operativo`),
  CONSTRAINT `fk_seguimientoPoa_Poa` FOREIGN KEY (`fk_id_plan_operativo`) REFERENCES `tbl_plan_operativo_anual` (`pk_id_plan_operativo_anual`),
  CONSTRAINT `rel_seguimientoPoa_ciclo` FOREIGN KEY (`fk_id_ciclo`) REFERENCES `tbl_ciclo` (`pk_id_ciclo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_seguimiento_poa`
--

LOCK TABLES `tbl_seguimiento_poa` WRITE;
/*!40000 ALTER TABLE `tbl_seguimiento_poa` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_seguimiento_poa` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_seguimiento_proceso`
--

DROP TABLE IF EXISTS `tbl_seguimiento_proceso`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tbl_seguimiento_proceso` (
  `pk_id_seguimiento_proceso` int NOT NULL COMMENT 'Llave primaria del id de seguimiento del proceso de autoevaluacion de programas',
  `descripcion` varchar(255) NOT NULL COMMENT 'descripcion del  seguimiento a las actividades del proceso de autoevaluacion de programas',
  `numero_seguimiento` varchar(3) NOT NULL COMMENT 'numero del seguimiento a las actividades del proceso de autoevaluacion del programa',
  `notificado` varchar(2) DEFAULT NULL COMMENT 'Notificación para que el responsable revise el documento adjuntado ( 1 notificado - 0 sin notificar)',
  `revisado` varchar(2) DEFAULT NULL COMMENT 'Alerta de revision del documento asociado (1 revisado - 0 no revisado)',
  `estado_seguimiento` varchar(20) NOT NULL COMMENT 'Estado del seguimiento realizado ( en proceso, sin revisar, revisado)',
  `observacion_seguimiento` varchar(255) DEFAULT NULL COMMENT 'Recomendaciones posteriores a la revision de las evidencias del seguimiento',
  `doc_revisado` varchar(45) NOT NULL COMMENT 'url del documento final ya revisado y corregido',
  `fk_id_actividades_proceso` int NOT NULL COMMENT 'Llave foránea del Id de la tabla actividades del proceso de autoevaluacion del programa',
  `fk_id_indicador_proceso` int NOT NULL COMMENT 'Llave foranea del id de la tabla de indicador de proceso',
  `fk_id_tipo_evidencias` int NOT NULL,
  PRIMARY KEY (`pk_id_seguimiento_proceso`),
  KEY `fk_tbl_seguimiento_proceso_tbl_actividades_proceso1_idx` (`fk_id_actividades_proceso`),
  KEY `fk_tbl_seguimiento_proceso_tbl_indicadores_proceso1_idx` (`fk_id_indicador_proceso`),
  KEY `fk_tbl_seguimiento_proceso_tbl_tipo_evidencias1_idx` (`fk_id_tipo_evidencias`),
  CONSTRAINT `fk_tbl_seguimiento_proceso_tbl_actividades_proceso1` FOREIGN KEY (`fk_id_actividades_proceso`) REFERENCES `tbl_actividad_proceso` (`pk_id_actividad_proceso`),
  CONSTRAINT `fk_tbl_seguimiento_proceso_tbl_indicadores_proceso1` FOREIGN KEY (`fk_id_indicador_proceso`) REFERENCES `tbl_indicador_proceso` (`pk_id_indicador_proceso`),
  CONSTRAINT `fk_tbl_seguimiento_proceso_tbl_tipo_evidencias1` FOREIGN KEY (`fk_id_tipo_evidencias`) REFERENCES `tbl_tipo_evidencias` (`pk_id_tipo_evidencias`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_seguimiento_proceso`
--

LOCK TABLES `tbl_seguimiento_proceso` WRITE;
/*!40000 ALTER TABLE `tbl_seguimiento_proceso` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_seguimiento_proceso` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_semestre`
--

DROP TABLE IF EXISTS `tbl_semestre`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tbl_semestre` (
  `id` int NOT NULL AUTO_INCREMENT,
  `periodoSemestre` varchar(512) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_semestre`
--

LOCK TABLES `tbl_semestre` WRITE;
/*!40000 ALTER TABLE `tbl_semestre` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_semestre` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_tipo_evidencia`
--

DROP TABLE IF EXISTS `tbl_tipo_evidencia`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tbl_tipo_evidencia` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(512) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_tipo_evidencia`
--

LOCK TABLES `tbl_tipo_evidencia` WRITE;
/*!40000 ALTER TABLE `tbl_tipo_evidencia` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_tipo_evidencia` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_tipo_evidencias`
--

DROP TABLE IF EXISTS `tbl_tipo_evidencias`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tbl_tipo_evidencias` (
  `pk_id_tipo_evidencias` int NOT NULL COMMENT 'Llave primaria tipo de evidencias',
  `nombre_tipo_evidencias` varchar(45) NOT NULL COMMENT 'Nombre de tipo de evidencias (directas - indirectas)',
  PRIMARY KEY (`pk_id_tipo_evidencias`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_tipo_evidencias`
--

LOCK TABLES `tbl_tipo_evidencias` WRITE;
/*!40000 ALTER TABLE `tbl_tipo_evidencias` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl_tipo_evidencias` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_usuario`
--

DROP TABLE IF EXISTS `tbl_usuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tbl_usuario` (
  `pk_id_usuario` int NOT NULL AUTO_INCREMENT COMMENT 'Llave primaria tabla de usuario',
  `nombre_usuario` varchar(255) DEFAULT NULL COMMENT 'nombre de usuario',
  `identificacion_usuario` varchar(45) DEFAULT NULL COMMENT 'numero del usuario',
  `telefono_usuario` varchar(45) NOT NULL COMMENT 'Número de teléfono del usuario',
  `email_usuario` varchar(255) DEFAULT NULL COMMENT 'email del usuario',
  `contrasena_usuario` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL COMMENT 'password del usuario',
  `token_usuario` varchar(45) DEFAULT NULL COMMENT 'token para activacion del usuario',
  `cantidad_intentos` int DEFAULT NULL COMMENT 'cantidad de intentos de ingreso a la plataforma',
  `fk_id_rol` int NOT NULL COMMENT 'Llave foranea de la tabla rol',
  `primer_ingreso` int NOT NULL DEFAULT '0',
  PRIMARY KEY (`pk_id_usuario`),
  KEY `fk_tbl_usuario_tbl_rol1_idx` (`fk_id_rol`),
  CONSTRAINT `rel_usuario_rol` FOREIGN KEY (`fk_id_rol`) REFERENCES `tbl_rol` (`pk_id_rol`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_usuario`
--

LOCK TABLES `tbl_usuario` WRITE;
/*!40000 ALTER TABLE `tbl_usuario` DISABLE KEYS */;
INSERT INTO `tbl_usuario` VALUES (7,'Administrador','111111','111111','administrador@correo.com','111111','1',1,5,1);
/*!40000 ALTER TABLE `tbl_usuario` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-08-30  8:58:18
