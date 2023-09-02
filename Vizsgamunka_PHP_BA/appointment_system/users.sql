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

-- Struktúra mentése tábla appointment_system. users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Tábla adatainak mentése appointment_system.users: ~4 rows (hozzávetőleg)
INSERT INTO `users` (`id`, `username`, `first_name`, `last_name`, `email`, `password`, `created_at`) VALUES
	(7, 'bakosaniko', 'Anikó', 'Bakos', 'bakosaniko94@gmail.com', '$2y$10$gxNn4802b./AxecSz/v3AuUT9/JnGtrUjYLtGvppBigJLQX..Yj0i', '2023-08-23 16:19:55'),
	(9, 'pepe00', 'Anikó', 'Bakos', 'bakosaniko94@gmail.com', '$2y$10$AE2stNOQQlO75SqSu2tCAetuf.R5wRqnEPLuDs2zIiwvDc86M6Qne', '2023-08-27 09:38:36'),
	(11, 'belanagy01', 'Nagy', 'Béla', 'nagybela@freemail.hu', '$2y$10$3shk7tpavk8IyxYH0AAm3OB.Z7DRZ5FSH0qzt18ZM4vvPdsMOKOsK', '2023-09-02 08:41:07'),
	(12, 'kispeter', 'Kis', 'Péter', 'kispeter@gmail.com', '$2y$10$i3XsWgYLFImPdJ1FX9KI3.RyfPULqIQcNb7UmTLHUcX/Unt3EnOAy', '2023-09-02 08:46:14');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
