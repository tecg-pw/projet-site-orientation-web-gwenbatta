-- -------------------------------------------------------------
-- TablePlus 5.1.0(468)
--
-- https://tableplus.com/
--
-- Database: tecweb
-- Generation Time: 2022-11-11 15:23:35.2740
-- -------------------------------------------------------------


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


CREATE TABLE `classe_person` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `person_id` bigint unsigned NOT NULL,
  `classe_id` bigint unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `classe_people_person_id_foreign` (`person_id`),
  KEY `classe_people_classe_id_foreign` (`classe_id`),
  CONSTRAINT `classe_people_classe_id_foreign` FOREIGN KEY (`classe_id`) REFERENCES `classes` (`id`) ON UPDATE CASCADE,
  CONSTRAINT `classe_people_person_id_foreign` FOREIGN KEY (`person_id`) REFERENCES `people` (`id`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `classe_person` (`id`, `created_at`, `updated_at`, `person_id`, `classe_id`) VALUES
(1, NULL, NULL, 3, 1),
(2, NULL, NULL, 3, 11),
(3, NULL, NULL, 3, 13),
(4, NULL, NULL, 3, 8),
(5, NULL, NULL, 4, 5),
(6, NULL, NULL, 4, 11),
(7, NULL, NULL, 4, 12),
(8, NULL, NULL, 5, 6),
(9, NULL, NULL, 5, 12),
(10, NULL, NULL, 6, 5),
(11, NULL, NULL, 6, 10),
(12, NULL, NULL, 7, 11),
(13, NULL, NULL, 7, 12),
(14, NULL, NULL, 8, 2),
(15, NULL, NULL, 8, 7),
(16, NULL, NULL, 8, 9);


/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
