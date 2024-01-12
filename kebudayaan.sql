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


-- Dumping database structure for kebudayaan
CREATE DATABASE IF NOT EXISTS `kebudayaan` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `kebudayaan`;

-- Dumping structure for table kebudayaan.jenis
CREATE TABLE IF NOT EXISTS `jenis` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(25) DEFAULT NULL,
  `deskripsi` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table kebudayaan.jenis: ~4 rows (approximately)
INSERT INTO `jenis` (`id`, `name`, `deskripsi`) VALUES
	(1, 'Krama Inggil', 'asdhjasfhjahfjhdsajfhjsdhfjsdhfjhsjdhfjshdfjsdhjfsssssas'),
	(2, 'Krama Alus', 'asjfdhjahfjdashfjsdhkfhsdjhfksjdfh'),
	(3, 'Ngoko Alus', 'asfhjdhasjfhsdjfhjsdfsf'),
	(4, 'Ngoko Lugu', 'adhjsahfdjahfjafa');

-- Dumping structure for table kebudayaan.pengaruh
CREATE TABLE IF NOT EXISTS `pengaruh` (
  `id` int NOT NULL AUTO_INCREMENT,
  `pengaruh` varchar(25) DEFAULT NULL,
  `deskripsi` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table kebudayaan.pengaruh: ~3 rows (approximately)
INSERT INTO `pengaruh` (`id`, `pengaruh`, `deskripsi`) VALUES
	(1, 'pendidikan', 'shdfjahfjajfhdasf'),
	(2, 'masyarakat', 'ahfjhsdjfhjsjfhjsdf'),
	(3, 'jabar, jateng, dan jatim', 'ajhfjsdahfjhsdfjsdf');

-- Dumping structure for table kebudayaan.pengaturan
CREATE TABLE IF NOT EXISTS `pengaturan` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(30) DEFAULT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `deskripsi` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  `gambar` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table kebudayaan.pengaturan: ~1 rows (approximately)
INSERT INTO `pengaturan` (`id`, `name`, `title`, `deskripsi`, `gambar`) VALUES
	(1, 'JavaneseExpression', 'Menyelami Kekayaan Bahasa Jawa: Pengertian dan Tata Cara Penggunaannya', 'Mari kita menjelajahi keindahan dan kedalaman Bahasa Jawa bersama JavaneseExpressions. Kami hadir untuk membimbing Anda memahami esensi bahasa ini dan memperkenalkan Anda pada tata cara penggunaannya yang indah.', NULL);

-- Dumping structure for table kebudayaan.pengertian
CREATE TABLE IF NOT EXISTS `pengertian` (
  `id` int NOT NULL AUTO_INCREMENT,
  `pengertian` varchar(25) DEFAULT NULL,
  `deskripsi` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table kebudayaan.pengertian: ~2 rows (approximately)
INSERT INTO `pengertian` (`id`, `pengertian`, `deskripsi`) VALUES
	(2, 'bahasa jawaa', 'Bahasa Jawa adalah bahasa Austronesia yang utamanya dituturkan oleh penduduk bersuku Jawa di wilayah bagian tengah dan timur pulau Jawa. Bahasa Jawa juga dituturkan oleh diaspora Jawa di wilayah lain di Indonesia, seperti di Sumatra dan Kalimantan; serta di luar Indonesia seperti di Suriname, Belanda, dan Malaysia. Jumlah total penutur bahasa Jawa diperkirakan mencapai sekitar 80 juta pada tahun 2023.[6] Sebagai bahasa Austronesia dari subkelompok Melayu-Polinesia, bahasa Jawa juga berkerabat dengan bahasa Melayu, Sunda, Bali dan banyak bahasa lainnya di Indonesia, meskipun para ahli masih memperdebatkan mengenai posisi pastinya dalam rumpun Melayu-Polinesia. Bahasa Jawa berstatus bahasa resmi di Daerah Istimewa Yogyakarta di samping bahasa Indonesia.  Sejarah tulisan bahasa Jawa bermula sejak abad ke-9 dalam bentuk bahasa Jawa Kuno, yang kemudian berevolusi hingga menjadi bahasa Jawa Baru sekitar abad ke-15. Bahasa Jawa awalnya ditulis dengan sistem aksara dari India yang kemudian diadaptasi menjadi aksara Jawa, walaupun bahasa Jawa masa kini lebih sering ditulis dengan alfabet Latin. Bahasa Jawa memiliki tradisi sastra kedua tertua di antara bahasa-bahasa Austronesia setelah bahasa Melayu.  Nomina dalam bahasa Jawa umumnya diletakkan sebelum atribut yang memodifikasinya. Verba dapat dibedakan menjadi bentuk transitif dan intransitif, bentuk aktif dan pasif, atau dibedakan berdasarkan modusnya (indikatif, irealis/subjungtif, imperatif, dan propositif). Bahasa Jawa mengenal pembedaan antara beberapa tingkat tutur yang penggunaannya ditentukan oleh derajat kedekatan hubungan atau perbedaan status sosial antara pembicara dan lawan bicara atau orang yang dibicarakan.'),
	(3, 'adad', 'sdsdsd');

-- Dumping structure for table kebudayaan.perbedaan
CREATE TABLE IF NOT EXISTS `perbedaan` (
  `id` int NOT NULL AUTO_INCREMENT,
  `perbedaan` varchar(25) DEFAULT NULL,
  `deskripsi` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table kebudayaan.perbedaan: ~2 rows (approximately)
INSERT INTO `perbedaan` (`id`, `perbedaan`, `deskripsi`) VALUES
	(1, 'sebaya', 'asjhdjashdfjahfjafs'),
	(2, 'yang lebih tua', 'ashfdjhajfhjsdf');

-- Dumping structure for table kebudayaan.profile
CREATE TABLE IF NOT EXISTS `profile` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(30) DEFAULT NULL,
  `username` varchar(8) DEFAULT NULL,
  `password` varchar(8) DEFAULT NULL,
  `deskripsi` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  `instagram` varchar(25) DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table kebudayaan.profile: ~0 rows (approximately)
INSERT INTO `profile` (`id`, `name`, `username`, `password`, `deskripsi`, `instagram`, `email`, `gambar`) VALUES
	(1, 'Nurmansyah Putra Bachtyar', 'admin', 'admin', 'aku adalah manusia yang askajkdjkawjdwnmkdnahbajda dahjfdhjwehfj awf', 'bachtyarrrr', 'nurmansyahbachtyar@gmail.com', 'foto-Nurmansyah Putra Bachtyar.png');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
