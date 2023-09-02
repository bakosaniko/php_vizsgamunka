-- --------------------------------------------------------
-- Hoszt:                        127.0.0.1
-- Szerver verzió:               8.0.33 - MySQL Community Server - GPL
-- Szerver OS:                   Win64
-- HeidiSQL Verzió:              12.5.0.6677
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Struktúra mentése tábla appointment_system. appointments
CREATE TABLE IF NOT EXISTS `appointments` (
  `id` int NOT NULL AUTO_INCREMENT,
  `user_id` int NOT NULL,
  `service` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `appointment_date` varchar(50) NOT NULL DEFAULT '',
  `appointment_slot` varchar(50) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`),
  CONSTRAINT `appointments_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=73 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Tábla adatainak mentése appointment_system.appointments: ~21 rows (hozzávetőleg)
INSERT INTO `appointments` (`id`, `user_id`, `service`, `appointment_date`, `appointment_slot`) VALUES
	(50, 7, 'Helyszíni konzultáció', '2023-09-05', '8:00'),
	(51, 7, 'Helyszíni konzultáció', '2023-09-07', '8:00'),
	(52, 7, 'Helyszíni konzultáció', '2023-09-07', '12:00'),
	(53, 7, 'Helyszíni konzultáció', '2023-09-07', '16:00'),
	(54, 7, 'Helyszíni konzultáció', '2023-09-05', '12:00'),
	(55, 7, 'Helyszíni konzultáció', '2023-09-03', '10:00'),
	(57, 7, 'Helyszíni konzultáció', '2023-09-07', '14:00'),
	(59, 7, 'Helyszíni konzultáció', '2023-09-08', '12:00'),
	(60, 7, 'Helyszíni konzultáció', '2023-09-03', '16:00'),
	(61, 7, 'Helyszíni konzultáció', '2023-09-03', '8:00'),
	(62, 7, 'Helyszíni konzultáció', '2023-09-03', '14:00'),
	(63, 7, 'Helyszíni konzultáció', '2023-09-09', '8:00'),
	(64, 7, 'Helyszíni konzultáció', '2023-09-04', '8:00'),
	(65, 7, 'Helyszíni konzultáció', '2023-09-04', '16:00'),
	(66, 7, 'Helyszíni konzultáció', '2023-09-03', '12:00'),
	(67, 7, 'Kerttervezés', '2023-09-05', '14:00'),
	(68, 7, 'Helyszíni konzultáció', '2023-09-08', '10:00'),
	(69, 7, 'Helyszíni konzultáció', '2023-09-05', '10:00'),
	(70, 7, 'Kerttervezés', '2023-09-09', '10:00'),
	(71, 7, 'Helyszíni konzultáció', '2023-09-09', '14:00'),
	(72, 7, 'Helyszíni konzultáció', '2023-09-06', '14:00');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
