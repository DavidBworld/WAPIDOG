CREATE DATABASE IF NOT EXISTS `wapidogs` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE `wapidogs`;

CREATE TABLE IF NOT EXISTS `contacts` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `prenom` VARCHAR(100) NOT NULL,
  `nom` VARCHAR(100) NOT NULL,
  `email` VARCHAR(150) NOT NULL,
  `telephone` VARCHAR(20) DEFAULT NULL,
  `type_demande` ENUM('chiot', 'bilan', 'mushing') NOT NULL,
  `question_specifique` VARCHAR(255) DEFAULT NULL,
  `message` TEXT NOT NULL,
  `date_creation` TIMESTAMP DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
