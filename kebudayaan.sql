-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               8.0.30 - MySQL Community Server - GPL
-- Server OS:                    Win64
-- HeidiSQL Version:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping structure for table kebudayaan.jenis
CREATE TABLE IF NOT EXISTS `jenis` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(25) DEFAULT NULL,
  `deskripsi` text CHARACTER SET utf8mb4,
  `gambar` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
);

-- Dumping structure for table kebudayaan.pengaruh
CREATE TABLE IF NOT EXISTS `pengaruh` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(25) DEFAULT NULL,
  `deskripsi` text CHARACTER SET utf8mb4,
  `gambar` varchar(255),
  PRIMARY KEY (`id`)
);

-- Dumping structure for table kebudayaan.pengaturan
CREATE TABLE IF NOT EXISTS `pengaturan` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(30) DEFAULT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 DEFAULT NULL,
  `deskripsi` text CHARACTER SET utf8mb4,
  `gambar` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
);

-- Dumping data for table kebudayaan.pengaturan: ~0 rows (approximately)
INSERT INTO `pengaturan` (`id`, `name`, `title`, `deskripsi`, `gambar`) VALUES
	(1, 'JavaneseExpression', 'Menyelami Kekayaan Bahasa Jawa: Pengertian dan Tata Cara Penggunaannya', 'Mari kita menjelajahi keindahan dan kedalaman Bahasa Jawa bersama JavaneseExpressions. Kami hadir untuk membimbing Anda memahami esensi bahasa ini dan memperkenalkan Anda pada tata cara penggunaannya yang indah.', NULL);

-- Dumping structure for table kebudayaan.pengertian
CREATE TABLE IF NOT EXISTS `pengertian` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(25) DEFAULT NULL,
  `deskripsi` text CHARACTER SET utf8mb4,
  `gambar` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
);

-- Dumping structure for table kebudayaan.perbedaan
CREATE TABLE IF NOT EXISTS `perbedaan` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(25) DEFAULT NULL,
  `deskripsi` text CHARACTER SET utf8mb4,
  `gambar` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
);


-- Dumping structure for table kebudayaan.profile
CREATE TABLE IF NOT EXISTS `profile` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(30) DEFAULT NULL,
  `deskripsi` text CHARACTER SET utf8mb4,
  `instagram` varchar(25) DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 DEFAULT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
);

-- Dumping structure for table kebudayaan.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `role` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
);

-- Dumping data for table kebudayaan.users: ~0 rows (approximately)
INSERT INTO `users` (`id`, `name`, `email`, `username`, `password`, `role`) VALUES
	(1, 'admin', 'admin@gmail.com', 'admin', 'admin', 'admin'),
	(6, 'tyar', 'nurmansyahbachtyar@gmail.com', 'bachtyar', 'bachtyar', 'user');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
