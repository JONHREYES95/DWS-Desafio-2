-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         8.4.3 - MySQL Community Server - GPL
-- SO del servidor:              Win64
-- HeidiSQL Versión:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Volcando estructura de base de datos para gastosdb
DROP DATABASE IF EXISTS `gastosdb`;
CREATE DATABASE IF NOT EXISTS `gastosdb` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish2_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `gastosdb`;

-- Volcando estructura para tabla gastosdb.tblexpense
DROP TABLE IF EXISTS `tblexpense`;
CREATE TABLE IF NOT EXISTS `tblexpense` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `UserId` int NOT NULL,
  `ExpenseDate` date DEFAULT NULL,
  `ExpenseItem` varchar(200) DEFAULT NULL,
  `ExpenseCost` varchar(200) DEFAULT NULL,
  `NoteDate` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=45 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla gastosdb.tblexpense: ~7 rows (aproximadamente)
DELETE FROM `tblexpense`;
INSERT INTO `tblexpense` (`ID`, `UserId`, `ExpenseDate`, `ExpenseItem`, `ExpenseCost`, `NoteDate`) VALUES
	(36, 11, '2024-08-29', 'Camiseta Rock', '25', '2024-08-29 09:22:42'),
	(37, 8, '2024-08-29', 'Libro Arte Valencia', '25', '2024-08-29 10:29:35'),
	(38, 8, '2024-08-28', 'Ropa Turka', '17', '2024-08-29 10:30:21'),
	(39, 8, '2024-08-29', 'Chancla Natu', '34', '2024-08-30 02:49:26'),
	(40, 8, '2024-08-29', 'Chaqueta Bli', '33', '2024-08-30 02:56:59'),
	(41, 8, '2024-09-06', 'Prenda Caat', '58', '2024-08-30 08:31:23'),
	(42, 8, '2024-08-30', 'Aparato Electrónico', '58', '2024-08-30 08:40:20'),
	(43, 8, '2024-11-11', 'ingreso xD', '80', '2024-11-12 00:01:43'),
	(44, 8, '2024-11-11', 'Celular', '700', '2024-11-12 02:16:03');

-- Volcando estructura para tabla gastosdb.tbluser
DROP TABLE IF EXISTS `tbluser`;
CREATE TABLE IF NOT EXISTS `tbluser` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `FullName` varchar(150) DEFAULT NULL,
  `Email` varchar(200) DEFAULT NULL,
  `MobileNumber` bigint DEFAULT NULL,
  `Password` varchar(200) DEFAULT NULL,
  `RegDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla gastosdb.tbluser: ~4 rows (aproximadamente)
DELETE FROM `tbluser`;
INSERT INTO `tbluser` (`ID`, `FullName`, `Email`, `MobileNumber`, `Password`, `RegDate`) VALUES
	(8, 'Jonathan Reyes', 'hola@configuroweb.com', 73152903, '81dc9bdb52d04dc20036dbd8313ed055', '2019-05-17 05:34:16'),
	(10, 'Pedro Usuario', 'pusuario@cweb.com', 3256849767, 'f925916e2754e5e03f75dd58a5733251', '2019-05-18 05:34:53'),
	(11, 'Juan Usuario', 'jusuario@cweb.com', 3056847512, '75bc4f9d5ddcc951c9686b9780ed48c5', '2024-08-29 09:21:15'),
	(12, 'Pedro Usuario', 'pusuario@cweb.com', 3056243157, '4b67deeb9aba04a5b54632ad19934f26', '2024-08-29 10:38:24');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
