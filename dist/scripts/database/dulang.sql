-- MySQL dump 10.13  Distrib 5.7.25, for Linux (x86_64)
--
-- Host: localhost    Database: dulang
-- ------------------------------------------------------
-- Server version	5.7.25-0ubuntu0.18.04.2

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
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` tinytext NOT NULL,
  `password` longtext,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin`
--

LOCK TABLES `admin` WRITE;
/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
/*!40000 ALTER TABLE `admin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `catering`
--

DROP TABLE IF EXISTS `catering`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `catering` (
  `cat_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` tinytext,
  `price` double DEFAULT NULL,
  `dishes` mediumtext,
  `recommendation` int(11) DEFAULT NULL,
  PRIMARY KEY (`cat_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `catering`
--

LOCK TABLES `catering` WRITE;
/*!40000 ALTER TABLE `catering` DISABLE KEYS */;
INSERT INTO `catering` VALUES (1,'Set 1',150,'Beef kulma, Honeyed-chicken, Pansit Udang, Macaroni Salad, Rice/Fried Rice/Kyuning, Softdrinks, Free water',0),(2,'Set 2',160,'Beef steak, Buttered, Chopsuey, Leche Flan, Rice/Yellow Rice, Softdrinks, Free water',0),(3,'Set 3',160,'Beef Rendang, Chicken Pyanggang, Crabs w/ Veggies, Bihon / sotanghon, Fruit Salad, Rice/Yellow Rice, Softdrinks, Free water',0),(4,'Set 4',180,'Beef Menudo, Fish Fillet, Sotanghon, Fruit Salad, Chicken BBQ, Macaroni,Softdrinks, Free water',0);
/*!40000 ALTER TABLE `catering` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `catering_addon`
--

DROP TABLE IF EXISTS `catering_addon`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `catering_addon` (
  `caddon_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` tinytext,
  `price` double DEFAULT NULL,
  `dishes` mediumtext,
  PRIMARY KEY (`caddon_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `catering_addon`
--

LOCK TABLES `catering_addon` WRITE;
/*!40000 ALTER TABLE `catering_addon` DISABLE KEYS */;
INSERT INTO `catering_addon` VALUES (4,'Set 1',150,'Chicken Lollipop, Fried Lumpia, Revel Bars, Pancit, Juice/ Ice tea'),(5,'Set 2',130,'Mixed Shawarma, Tarts, Mini Cupcakes, Chocolate Cakes, Juice/ Ice tea'),(6,'Set 3',150,'Tuna Sandwich, Empanada, Chicken Sandwiches, Custard Cake, Ice tea / Ponkana');
/*!40000 ALTER TABLE `catering_addon` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `packlunch`
--

DROP TABLE IF EXISTS `packlunch`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `packlunch` (
  `pack_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` tinytext,
  `type` tinytext,
  `price` double DEFAULT NULL,
  `pax` tinytext,
  `recommendation` int(11) DEFAULT NULL,
  PRIMARY KEY (`pack_id`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `packlunch`
--

LOCK TABLES `packlunch` WRITE;
/*!40000 ALTER TABLE `packlunch` DISABLE KEYS */;
INSERT INTO `packlunch` VALUES (1,'Tiyula Itum','beef',2500,'round',0),(2,'Tiyula Itum','beef',4200,'oblong',0),(3,'Tiyula Itum','beef',5500,'rectangle',0),(4,'Kulma','beef',2800,'round',0),(5,'Rendang','beef',2800,'round',0),(6,'Kari Kari','beef',2800,'round',0),(7,'Kulma','beef',4200,'oblong',0),(9,'Rendang','beef',4200,'oblong',0),(10,'Kari Kari','beef',4200,'oblong',0),(11,'Kulma','beef',5500,'rectangle',0),(12,'Rendang','beef',5500,'rectangle',0),(13,'Kari Kari','beef',5500,'rectangle',0),(14,'Chicken Teriyaki','chicken',1800,'round',0),(15,'Chicken Barbeque','chicken',1800,'round',0),(16,'Fried Chicken','chicken',1800,'round',0),(17,'Chicken Teriyaki','chicken',2500,'oblong',0),(18,'Chicken Barbeque','chicken',2500,'oblong',0),(19,'Fried Chicken','chicken',2500,'oblong',0),(20,'Chicken Teriyaki','chicken',3300,'rectangle',0),(21,'Chicken Barbeque','chicken',3300,'rectangle',0),(22,'Fried Chicken','chicken',3300,'rectangle',0),(23,'Shrimp w/ Garlic','seafood',3500,'round',0),(24,'Sweet and Spicy','seafood',3500,'round',0),(25,'Squid Barbeque','seafood',3500,'round',0),(26,'Shrimp w/ Garlic','seafood',5200,'oblong',0),(27,'Sweet and Spicy','seafood',5200,'oblong',0),(28,'Squid Barbeque','seafood',5200,'oblong',0),(29,'Shrimp w/ Garlic','seafood',6800,'rectangle',0),(30,'Sweet and Spicy','seafood',6800,'rectangle',0),(31,'Squid Barbeque','seafood',6800,'rectangle',0);
/*!40000 ALTER TABLE `packlunch` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `packlunch_addon`
--

DROP TABLE IF EXISTS `packlunch_addon`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `packlunch_addon` (
  `paddon_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` tinytext,
  `price` double DEFAULT NULL,
  `pax` tinytext,
  PRIMARY KEY (`paddon_id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `packlunch_addon`
--

LOCK TABLES `packlunch_addon` WRITE;
/*!40000 ALTER TABLE `packlunch_addon` DISABLE KEYS */;
INSERT INTO `packlunch_addon` VALUES (1,'Bihon',850,'round'),(2,'Sotanghon',850,'round'),(3,'Chopsuey',850,'round'),(4,'Veggies',850,'round'),(5,'Bihon',1250,'oblong'),(6,'Sotanghon',1250,'oblong'),(7,'Chopsuey',1250,'oblong'),(8,'Veggies',1250,'oblong'),(9,'Bihon',1700,'rectangle'),(10,'Sotanghon',1700,'rectangle'),(11,'Chopsuey',1700,'rectangle'),(12,'Veggies',1700,'rectangle');
/*!40000 ALTER TABLE `packlunch_addon` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `reciept`
--

DROP TABLE IF EXISTS `reciept`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `reciept` (
  `r_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `event` tinytext,
  `event_date` date DEFAULT NULL,
  `event_time` time DEFAULT NULL,
  `menu` tinytext,
  `menu_price` double DEFAULT NULL,
  `addon` tinytext,
  `addon_price` double DEFAULT NULL,
  `no_guest` double DEFAULT NULL,
  `datenow` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `event_location` mediumtext,
  `total` double DEFAULT NULL,
  `status` tinytext,
  `r_code` tinytext,
  PRIMARY KEY (`r_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `reciept`
--

LOCK TABLES `reciept` WRITE;
/*!40000 ALTER TABLE `reciept` DISABLE KEYS */;
INSERT INTO `reciept` VALUES (5,1,'wedding','2019-02-15','02:01:00','Two-layer',8500,'Boat',6800,123,'2019-02-14 00:19:12','zamboanga',15300,'Pending','dulangQRAa'),(6,1,'catering','2019-02-23','13:02:00','Set 3',160,'Set 2',130,119,'2019-02-14 00:45:12','zamboanga',34510,'Pending','dulangxRlU');
/*!40000 ALTER TABLE `reciept` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` tinytext,
  `username` tinytext,
  `address` mediumtext,
  `phone` double DEFAULT NULL,
  `password` longtext,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (1,'Liuk Jhivran','lukeG','Zamboanga City',123989009,'$2y$10$b/QWr3hrsV4O1jd1g5AaouUL.1IZVpoE.YRIQkjzQKuajnyFfXYa.'),(2,'Luke Gibran','lukang','Zamboanga City',123899790,'$2y$10$GHbzs8QdhS8hL7kUcDYhWOwoEgftW2cbY2AAMGCWPTNctr2iPB/lS'),(3,'Lukang G','Luk','Zamboanga City',1239778,'$2y$10$CGgXdPSv.ggBdRZ3mmOIXOOXG22.ejhtwNmx96pxvEVdK0dKPJYXu');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `wedding`
--

DROP TABLE IF EXISTS `wedding`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `wedding` (
  `wed_id` int(11) NOT NULL AUTO_INCREMENT,
  `price` double DEFAULT NULL,
  `menu` mediumtext,
  `name` tinytext,
  `recommendation` int(11) DEFAULT NULL,
  PRIMARY KEY (`wed_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `wedding`
--

LOCK TABLES `wedding` WRITE;
/*!40000 ALTER TABLE `wedding` DISABLE KEYS */;
INSERT INTO `wedding` VALUES (1,2500,'Chicken, Shrimps, Squids, Fish, Eggs, Candy, Chocolates, Jah, Chocolates Attractive & more Decorations','Small Dulang',0),(2,5500,'Chicken, Shrimps, Squids, Fish, Eggs, Candy, Chocolates, Jah, Panyam, Baulo, Rice, Chocolate attractives and more decoration','Medium Dulang',0),(4,8500,'Chicken, Shrimps, Squids, Fish, Eggs, Candy, Chocolates, Jah, Panyam, Baulo, Rice, Chocolate attractives and more decoration','Two-layer',0);
/*!40000 ALTER TABLE `wedding` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `wedding_addon`
--

DROP TABLE IF EXISTS `wedding_addon`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `wedding_addon` (
  `waddon_id` int(11) NOT NULL AUTO_INCREMENT,
  `price` double DEFAULT NULL,
  `name` tinytext,
  PRIMARY KEY (`waddon_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `wedding_addon`
--

LOCK TABLES `wedding_addon` WRITE;
/*!40000 ALTER TABLE `wedding_addon` DISABLE KEYS */;
INSERT INTO `wedding_addon` VALUES (2,7800,'Trees'),(3,6500,'Pump Boat'),(4,6500,'Speed Boat'),(5,6800,'Boat');
/*!40000 ALTER TABLE `wedding_addon` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-02-14  8:49:38
