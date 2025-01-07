-- --------------------------------------------------------
-- Máy chủ:                      127.0.0.1
-- Server version:               8.0.30 - MySQL Community Server - GPL
-- Server OS:                    Win64
-- HeidiSQL Phiên bản:           12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for bookclub
DROP DATABASE IF EXISTS `bookclub`;
CREATE DATABASE IF NOT EXISTS `bookclub` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `bookclub`;

-- Dumping structure for table bookclub.activities
DROP TABLE IF EXISTS `activities`;
CREATE TABLE IF NOT EXISTS `activities` (
  `id` int NOT NULL AUTO_INCREMENT,
  `created_by_id` int DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `act_descr` longtext COLLATE utf8mb4_unicode_ci,
  `date` date NOT NULL,
  `time` time DEFAULT NULL,
  `place` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('planned','completed','cancelled') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_B5F1AFE5B03A8386` (`created_by_id`),
  CONSTRAINT `FK_B5F1AFE5B03A8386` FOREIGN KEY (`created_by_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table bookclub.activities: ~0 rows (approximately)

-- Dumping structure for table bookclub.act_image
DROP TABLE IF EXISTS `act_image`;
CREATE TABLE IF NOT EXISTS `act_image` (
  `id` int NOT NULL AUTO_INCREMENT,
  `att_id_id` int DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_15959B49D9923973` (`att_id_id`),
  CONSTRAINT `FK_15959B49D9923973` FOREIGN KEY (`att_id_id`) REFERENCES `attendance` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table bookclub.act_image: ~0 rows (approximately)

-- Dumping structure for table bookclub.attendance
DROP TABLE IF EXISTS `attendance`;
CREATE TABLE IF NOT EXISTS `attendance` (
  `id` int NOT NULL AUTO_INCREMENT,
  `activity_id_id` int NOT NULL,
  `checked_in` tinyint(1) NOT NULL,
  `checked_in_time` datetime DEFAULT NULL,
  `remarks` longtext COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`id`),
  KEY `IDX_6DE30D916146A8E4` (`activity_id_id`),
  CONSTRAINT `FK_6DE30D916146A8E4` FOREIGN KEY (`activity_id_id`) REFERENCES `activities` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table bookclub.attendance: ~0 rows (approximately)

-- Dumping structure for table bookclub.attendance_members
DROP TABLE IF EXISTS `attendance_members`;
CREATE TABLE IF NOT EXISTS `attendance_members` (
  `attendance_id` int NOT NULL,
  `members_id` int NOT NULL,
  PRIMARY KEY (`attendance_id`,`members_id`),
  KEY `IDX_42673CFD163DDA15` (`attendance_id`),
  KEY `IDX_42673CFDBD01F5ED` (`members_id`),
  CONSTRAINT `FK_42673CFD163DDA15` FOREIGN KEY (`attendance_id`) REFERENCES `attendance` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_42673CFDBD01F5ED` FOREIGN KEY (`members_id`) REFERENCES `members` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table bookclub.attendance_members: ~0 rows (approximately)

-- Dumping structure for table bookclub.doctrine_migration_versions
DROP TABLE IF EXISTS `doctrine_migration_versions`;
CREATE TABLE IF NOT EXISTS `doctrine_migration_versions` (
  `version` varchar(191) COLLATE utf8mb3_unicode_ci NOT NULL,
  `executed_at` datetime DEFAULT NULL,
  `execution_time` int DEFAULT NULL,
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

-- Dumping data for table bookclub.doctrine_migration_versions: ~2 rows (approximately)
INSERT INTO `doctrine_migration_versions` (`version`, `executed_at`, `execution_time`) VALUES
	('DoctrineMigrations\\Version20250104080353', '2025-01-04 08:07:29', 594),
	('DoctrineMigrations\\Version20250104155817', '2025-01-04 15:58:45', 406);

-- Dumping structure for table bookclub.fund_transactions
DROP TABLE IF EXISTS `fund_transactions`;
CREATE TABLE IF NOT EXISTS `fund_transactions` (
  `id` int NOT NULL AUTO_INCREMENT,
  `executed_by_id` int DEFAULT NULL,
  `amount` decimal(10,3) NOT NULL,
  `fund_descr` longtext COLLATE utf8mb4_unicode_ci,
  `date` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_3DBA1C778B35AB5C` (`executed_by_id`),
  CONSTRAINT `FK_3DBA1C778B35AB5C` FOREIGN KEY (`executed_by_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table bookclub.fund_transactions: ~0 rows (approximately)

-- Dumping structure for table bookclub.members
DROP TABLE IF EXISTS `members`;
CREATE TABLE IF NOT EXISTS `members` (
  `id` int NOT NULL AUTO_INCREMENT,
  `user_id_id` int DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `student_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(12) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `join_date` date DEFAULT NULL,
  `birth_day` date DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_45A0D2FF9D86650F` (`user_id_id`),
  CONSTRAINT `FK_45A0D2FF9D86650F` FOREIGN KEY (`user_id_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table bookclub.members: ~4 rows (approximately)
INSERT INTO `members` (`id`, `user_id_id`, `name`, `student_id`, `email`, `phone`, `join_date`, `birth_day`) VALUES
	(1, 1, 'Ngô Tấn Lộc', 'QLCN2211020', NULL, NULL, '2025-01-04', '2004-01-04'),
	(2, 4, 'Nguyễn Trần Anh Khoa', 'HTTT2211026', 'ntakhoahttt2211026@student.ctuet.edu.vn', '0123232233', '2025-01-04', '2004-07-14'),
	(3, NULL, 'Võ Trường Nguyên', 'HTTT2211025', 'vtnguyenhttt221025@student.ctuet.edu.vn', NULL, '2025-01-04', '2004-07-04'),
	(4, NULL, 'Huỳnh Như ý', 'HTTT2211015', NULL, NULL, NULL, NULL);

-- Dumping structure for table bookclub.messenger_messages
DROP TABLE IF EXISTS `messenger_messages`;
CREATE TABLE IF NOT EXISTS `messenger_messages` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `body` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `headers` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue_name` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL COMMENT '(DC2Type:datetime_immutable)',
  `available_at` datetime NOT NULL COMMENT '(DC2Type:datetime_immutable)',
  `delivered_at` datetime DEFAULT NULL COMMENT '(DC2Type:datetime_immutable)',
  PRIMARY KEY (`id`),
  KEY `IDX_75EA56E0FB7336F0` (`queue_name`),
  KEY `IDX_75EA56E0E3BD61CE` (`available_at`),
  KEY `IDX_75EA56E016BA31DB` (`delivered_at`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table bookclub.messenger_messages: ~0 rows (approximately)

-- Dumping structure for table bookclub.users
DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` enum('admin','member') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` datetime NOT NULL COMMENT '(DC2Type:datetime_immutable)',
  `update_at` datetime NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table bookclub.users: ~6 rows (approximately)
INSERT INTO `users` (`id`, `username`, `password`, `role`, `email`, `created_at`, `update_at`, `is_active`, `image`) VALUES
	(1, 'ngotanloc', '123456', 'admin', NULL, '2025-01-04 15:14:14', '2025-01-04 15:14:20', 0, NULL),
	(2, 'levilinh', '123456', 'admin', NULL, '2025-01-04 15:14:53', '2025-01-04 15:14:55', 0, NULL),
	(3, 'nguyenthanhdat', '123456', 'admin', 'ntdathttt2211003@student.ctuet.edu.vn', '2025-01-04 15:15:19', '2025-01-04 15:15:20', 0, NULL),
	(4, 'anhkhoa', '123456', 'member', NULL, '2025-01-04 15:16:14', '2025-01-04 15:16:15', 0, NULL),
	(5, 'huutho', '123456', 'member', NULL, '2025-01-04 15:16:51', '2025-01-04 15:16:52', 0, NULL),
	(6, 'kiemtranthaovy', '123456', 'admin', NULL, '2025-01-04 15:23:18', '2025-01-04 15:23:20', 0, NULL);

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
