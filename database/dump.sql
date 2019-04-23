-- MySQL dump 10.13  Distrib 5.7.25, for Linux (x86_64)
--
-- Host: 0.0.0.0    Database: db
-- ------------------------------------------------------
-- Server version	5.7.25

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
-- Table structure for table `catalog`
--

DROP TABLE IF EXISTS `catalog`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `catalog` (
  `model` longtext NOT NULL,
  `color` longtext NOT NULL,
  `year` year(4) NOT NULL,
  `price` float NOT NULL,
  `url` longtext
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `catalog`
--

LOCK TABLES `catalog` WRITE;
/*!40000 ALTER TABLE `catalog` DISABLE KEYS */;
INSERT INTO `catalog` VALUES ('Dacia','Alb',2016,7000,'https://www.arnoldclark.com/cdn/images/dacia/sandero--mobile.jpg'),('Ford','Albastru',2017,13000,'https://www.autocar.co.uk/sites/autocar.co.uk/files/ford-focus-rs-rt-2016-125.jpg'),('Dacia','Rosu',2018,8500,'https://www.cdn.daciagroup.com/content/dam/Dacia/ro/vehicles/duster/duster-hjd/range/duster-dacia-promo-v2.jpg.ximg.s_12_h.smart.jpg'),('Toyota','Gri',2016,11000,'https://st.motortrend.com/uploads/sites/10/2016/07/2016-toyota-rav4-limited-hybrid-suv-angular-front.png'),('Ford','Alb',2018,15550,'https://www.ford.ro/content/dam/guxeu/global-shared/vehicle-images/ka/deucdu02yylbs-vgvs-dh(a)(a)pnyw5showroom_0_0.png'),('Mazda','Verde',2019,22300,'https://www.dellamazda.com/assets/stock/ColorMatched_01/White/640/cc_2019MAS07_01_640/cc_2019MAS070005_01_640_25D.jpg'),('Seat','Negru',2011,3000,'https://www.seat.ro/media/Theme_Model_ModelRange_Image_Component/2006-11499-linkImage/dh-400-c9dbce/14e98991/1548072714/seat-tarraco.jpg'),('Seat','Alb',2014,5500,'https://parkers-images.bauersecure.com/pagefiles/205638/cut-out/600x400/seat_ateca.jpg'),('Dacia','Negru',2011,2600,'https://upload.wikimedia.org/wikipedia/commons/thumb/c/c9/2018_Dacia_Duster.jpg/1200px-2018_Dacia_Duster.jpg'),('Dacia','Verde',2012,3000,'https://a.ccdn.es/cnet/2018/11/14/36117048/162956466_g.jpg'),('Toyota','Verde',2010,4000,'https://www.queensborotoyota.com/assets/stock/ColorMatched_01/White/640/cc_2019TOC34_01_640/cc_2019TOC340001_01_640_42A.jpg'),('Toyota','Rosu',2010,4250,'https://www.toyotaofwooster.com/assets/stock/ColorMatched_01/White/640/cc_2018TOS110002_01_640/cc_2018TOS110002_01_640_8X7.jpg'),('Opel','Gri',2015,4800,'https://www.opel.ie/content/dam/opel/master/vehicles/crossland-x/bbc/Opel_Crossland_X_Side_my18_576x322.png'),('Opel','Negru',2014,4360,'https://www.opel.ie/content/dam/opel/master/vehicles/insignia-gsi/my_19/bbc_mmgs/opel_insignia_gsi_side_my1900_576x322_mmg.png'),('Dacia','Verde',2010,4100,'http://storage0.dms.mpinteractiv.ro/media/2/41/1815/16757549/1/dacia-duster-base-spec-render-1.jpg'),('Ford','Negru',2019,17000,'https://www.patmillikenford.com/inventoryphotos/4748/3fa6p0mu1kr167351/sp/1.jpg'),('Seat','Verde',2019,9900,'https://www.seat.ro/media/Theme_UIElement_Image_Tiny_Component.Theme_Home_Slider_Child_Image_Component/2006-11498-31193-image-tiny/dh-1040-5b3a31/1575ec3c/1484142345/leon.jpg'),('Seat','Alb',2019,11100,'https://images.toyota-europe.com/gb/c-hr/width/1200/exterior-3.jpg'),('Seat','Negru',2019,12200,'https://listers.co.uk/img/cap/v/c/new/large/22144/new-seat-ibiza-hatchback-5dr.jpg'),('Toyota','Alb',2019,14000,'https://st.motortrend.com/uploads/sites/10/2016/07/2016-toyota-rav4-limited-hybrid-suv-angular-front.png');
/*!40000 ALTER TABLE `catalog` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-04-23 16:06:57