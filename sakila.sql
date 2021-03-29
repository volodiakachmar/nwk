-- -------------------------------------------------------------
-- TablePlus 3.9.1(342)
--
-- https://tableplus.com/
--
-- Database: sakila
-- Generation Time: 2021-03-29 16:44:27.7350
-- -------------------------------------------------------------


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


CREATE TABLE `comments` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `commenter_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `commenter_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `guest_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `guest_email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `commentable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `commentable_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `approved` tinyint(1) NOT NULL DEFAULT '1',
  `child_id` bigint unsigned DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `comments_commenter_id_commenter_type_index` (`commenter_id`,`commenter_type`),
  KEY `comments_commentable_type_commentable_id_index` (`commentable_type`,`commentable_id`),
  KEY `comments_child_id_foreign` (`child_id`),
  CONSTRAINT `comments_child_id_foreign` FOREIGN KEY (`child_id`) REFERENCES `comments` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `events` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `event_title` text COLLATE utf8mb4_unicode_ci,
  `event_description` text COLLATE utf8mb4_unicode_ci,
  `event_location` text COLLATE utf8mb4_unicode_ci,
  `event_organizer` text COLLATE utf8mb4_unicode_ci,
  `event_day` text COLLATE utf8mb4_unicode_ci,
  `event_month` text COLLATE utf8mb4_unicode_ci,
  `event_date` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `indeks` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `header_category` text COLLATE utf8mb4_unicode_ci,
  `header_reklamacja` text COLLATE utf8mb4_unicode_ci,
  `header_reklamacja_link` text COLLATE utf8mb4_unicode_ci,
  `header_block_1` text COLLATE utf8mb4_unicode_ci,
  `header_block_2` text COLLATE utf8mb4_unicode_ci,
  `header_block_3` text COLLATE utf8mb4_unicode_ci,
  `header_block_4` text COLLATE utf8mb4_unicode_ci,
  `image_reklamacja` text COLLATE utf8mb4_unicode_ci,
  `text_under_image_reklamacja` text COLLATE utf8mb4_unicode_ci,
  `text_under_image_reklamacja_link` text COLLATE utf8mb4_unicode_ci,
  `sidebar_image_reklamacja_1` text COLLATE utf8mb4_unicode_ci,
  `sidebar_image_reklamacja_1_link` text COLLATE utf8mb4_unicode_ci,
  `sidebar_image_reklamacja_1_text` text COLLATE utf8mb4_unicode_ci,
  `sidebar_image_reklamacja_1_percent` text COLLATE utf8mb4_unicode_ci,
  `sidebar_image_reklamacja_2` text COLLATE utf8mb4_unicode_ci,
  `sidebar_image_reklamacja_2_link` text COLLATE utf8mb4_unicode_ci,
  `sidebar_image_reklamacja_2_percent` text COLLATE utf8mb4_unicode_ci,
  `sidebar_image_reklamacja_2_text` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=94 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `posts` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` text COLLATE utf8mb4_unicode_ci,
  `category` text COLLATE utf8mb4_unicode_ci,
  `email` text COLLATE utf8mb4_unicode_ci,
  `title` text COLLATE utf8mb4_unicode_ci,
  `description_1` text COLLATE utf8mb4_unicode_ci,
  `description_2` text COLLATE utf8mb4_unicode_ci,
  `description_3` text COLLATE utf8mb4_unicode_ci,
  `description_4` text COLLATE utf8mb4_unicode_ci,
  `under_photo_text` text COLLATE utf8mb4_unicode_ci,
  `role` text COLLATE utf8mb4_unicode_ci,
  `status` text COLLATE utf8mb4_unicode_ci,
  `image_1_title` text COLLATE utf8mb4_unicode_ci,
  `image_2_below_title` text COLLATE utf8mb4_unicode_ci,
  `image_3_rounded` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `pracas` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `miasto` text COLLATE utf8mb4_unicode_ci,
  `stawka` text COLLATE utf8mb4_unicode_ci,
  `stanowisko` text COLLATE utf8mb4_unicode_ci,
  `nazwa_agencji_firmy` text COLLATE utf8mb4_unicode_ci,
  `typ_umowy` text COLLATE utf8mb4_unicode_ci,
  `mieszkanie` text COLLATE utf8mb4_unicode_ci,
  `o_pracy` text COLLATE utf8mb4_unicode_ci,
  `telefon` text COLLATE utf8mb4_unicode_ci,
  `work_link` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `comments` (`id`, `commenter_id`, `commenter_type`, `guest_name`, `guest_email`, `commentable_type`, `commentable_id`, `comment`, `approved`, `child_id`, `deleted_at`, `created_at`, `updated_at`) VALUES
('1', '1', 'App\\User', NULL, NULL, 'App\\Post', '9', 'hgjhg', '1', NULL, NULL, '2021-03-13 16:34:19', '2021-03-13 16:34:19'),
('2', '1', 'App\\User', NULL, NULL, 'App\\Post', '9', 'gfhbghjf', '1', NULL, NULL, '2021-03-13 17:00:22', '2021-03-13 17:00:22');

INSERT INTO `indeks` (`id`, `header_category`, `header_reklamacja`, `header_reklamacja_link`, `header_block_1`, `header_block_2`, `header_block_3`, `header_block_4`, `image_reklamacja`, `text_under_image_reklamacja`, `text_under_image_reklamacja_link`, `sidebar_image_reklamacja_1`, `sidebar_image_reklamacja_1_link`, `sidebar_image_reklamacja_1_text`, `sidebar_image_reklamacja_1_percent`, `sidebar_image_reklamacja_2`, `sidebar_image_reklamacja_2_link`, `sidebar_image_reklamacja_2_percent`, `sidebar_image_reklamacja_2_text`, `created_at`, `updated_at`) VALUES
('0', 'news', 'hjgfjhgf', 'jhgfjhgfjhgfjhgfjh  jhgfjhgfjhgfjhgfjh', 'jhgfjhgfjhgfjhgfjh', 'jhgfjhgfjhgfjhgfjh', 'jhgfjhgfjhgfjhgfjh', 'jhgfjhgfjhgfjhgfjh', NULL, 'jhgfjhgfjhgfjhgfjh jhgfjhgfjhgfjhgfjh', 'jhgfjhgfjhgfjhgfjhjhgfjhgfjhgfjhgfjh', NULL, 'jhgfjhgfjhgfjhgfjhjhgfjhgfjhgfjhgfjhjhgfjhgfjhgfjhgfjh', 'jhgfjhgfjhgfjhgfjhjhgfjhgfjhgfjhgfjh', NULL, NULL, NULL, NULL, NULL, NULL, '2021-03-13 16:49:10');

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
('86', '2014_10_12_000000_create_users_table', '1'),
('87', '2014_10_12_100000_create_password_resets_table', '1'),
('88', '2018_06_30_113500_create_comments_table', '1'),
('89', '2019_08_19_000000_create_failed_jobs_table', '1'),
('90', '2020_09_22_173139_create_posts_table', '1'),
('91', '2020_10_21_231129_create_pracas_table', '1'),
('92', '2020_10_26_053342_create_events_table', '1'),
('93', '2020_10_27_044048_create_indeks_table', '1');

INSERT INTO `posts` (`id`, `name`, `category`, `email`, `title`, `description_1`, `description_2`, `description_3`, `description_4`, `under_photo_text`, `role`, `status`, `image_1_title`, `image_2_below_title`, `image_3_rounded`, `created_at`, `updated_at`) VALUES
('9', NULL, NULL, NULL, 'На бендзинских дорогах сталась рядовая авария', 'На бендзинских дорогах сталась рядовая авария – автомобиль врезался в дорожный знак.', 'Полиция приехала на место ДТП, но 36-летний водитель был настолько не в состоянии, что не справился с алкотестом.', 'Полиция забрала украинца в участок, теперь уровень алкоголя покажет анализ крови.', 'Ему грозит 2 года тюрьмы.', 'foto', NULL, NULL, 'public/Nnht60f7u8cAunCGR7QWAnLpp9mg8Ot3U5qo6eaM.jpg', NULL, NULL, '2021-03-13 16:33:52', '2021-03-13 16:33:52');

INSERT INTO `pracas` (`id`, `miasto`, `stawka`, `stanowisko`, `nazwa_agencji_firmy`, `typ_umowy`, `mieszkanie`, `o_pracy`, `telefon`, `work_link`, `created_at`, `updated_at`) VALUES
('1', 'Katowice', '20zł', 'Handlowiec', 'Amazon', 'o prace', 'Tak', 'nic ciekawego', '518922121', 'public/E7hn4JRWjAjnVH1oJXVjjH5EQm5mSmEi4iJJPuwO.jpg', '2021-03-13 16:38:26', '2021-03-13 16:38:26'),
('2', 'Katowice', '20zł', 'handlowiec', 'amazon', 'o prace', 'nie', 'niegfhdgfhfg hgdfhgdf hgdfhfgh cghdfgh hgfh hdfgh fgh', '518922121', 'public/2XdbiMkSTHO5twNTQPV2y7gCi5UZZTzEBHShQ4wp.jpg', '2021-03-13 16:57:35', '2021-03-13 16:57:35'),
('3', 'Katowice', '20zł', 'handlowiec', 'Amazon', 'o prace', 'nie', 'nic ciekawego', '518922121', 'public/R85QoSYwVi73UKDFxOlpe25p3RyC3FsZK58sk6tH.jpg', '2021-03-13 17:21:05', '2021-03-13 17:21:05');

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
('1', 'volodia', 'khjgkjh@hgmail.com', NULL, '$2y$10$zNCdjCO617Hm8qlIjP2vxuNZbKX90/WH47YMI.w8louElsJNkThdC', NULL, '2021-03-13 16:32:19', '2021-03-13 16:32:19'),
('2', 'gaf', 'dfggb@gmail.com', NULL, '$2y$10$Rhkh7O8AH1Cy8BSJ2RtB/eVqSrQkiz8GiIj3pcJW7N6AeMb/Ufrcq', NULL, '2021-03-26 19:21:43', '2021-03-26 19:21:43');



/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;