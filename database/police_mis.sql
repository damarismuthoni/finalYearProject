-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.7.33 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             11.2.0.6213
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for police_mis
CREATE DATABASE IF NOT EXISTS `police_mis` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `police_mis`;

-- Dumping structure for table police_mis.abstracts
CREATE TABLE IF NOT EXISTS `abstracts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `police'_station` varchar(50) NOT NULL DEFAULT '0',
  `name_of_complainant*` varchar(50) DEFAULT NULL,
  `citizen_id` int(11) DEFAULT NULL,
  `details` varchar(255) DEFAULT NULL,
  `telephone_number` int(11) DEFAULT NULL,
  `date_of_incident` date DEFAULT NULL,
  `received_by` varchar(50) DEFAULT NULL,
  `police_id` varchar(255) DEFAULT NULL,
  `abstract_reference_no` varchar(255) DEFAULT NULL,
  `police_station_id` int(11) DEFAULT NULL,
  `police_note` varchar(50) DEFAULT NULL,
  `status` enum('solved','unsolved') DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

-- Dumping data for table police_mis.abstracts: ~9 rows (approximately)
/*!40000 ALTER TABLE `abstracts` DISABLE KEYS */;
INSERT INTO `abstracts` (`id`, `police'_station`, `name_of_complainant*`, `citizen_id`, `details`, `telephone_number`, `date_of_incident`, `received_by`, `police_id`, `abstract_reference_no`, `police_station_id`, `police_note`, `status`) VALUES
	(1, '0', NULL, 49304, 'stolen phone near afya center by an individual wearing a black jacket', NULL, '2020-06-24', NULL, 'ofc/8410/3847', 'dsw/293/2020', 8223, NULL, NULL),
	(2, '0', NULL, 94032, 'lost wallet containing credit card and national id', NULL, '2022-03-27', NULL, '2', 'fkg/394/2022', 8214, NULL, NULL),
	(3, '0', NULL, 48328, 'damages to car after getting hit by another car registration number kca 2948', NULL, '2022-03-09', NULL, '3', 'fkf/948/2022', 8203, NULL, NULL),
	(4, '0', NULL, 83920, 'witness to a hit and run at ngara round about. the perpetrator willingly brought himself to the station. child was rushed to kijabe hospital', NULL, '2021-08-17', NULL, '4', 'cje/493/2021', 8247, NULL, NULL),
	(5, '0', NULL, 73829, 'store broken into and goods approximately 80,000 stolen', NULL, '2022-06-25', NULL, '4', 'jfk/940/2020', 8231, NULL, NULL),
	(6, '0', NULL, 94039, 'stolen phone and aggrevated assault at archves. assailant tall dark male wearing a read hoodie and faded balck jeans', NULL, '2019-02-02', NULL, '6', 'dhe/921/2019', 8203, NULL, NULL),
	(7, '0', NULL, 84029, 'stolen backpack containing a laptop worth 30,000 mobile phone worth 18,000 imei number3948504933 and wallet', NULL, '2022-02-22', NULL, '7', 'rth/495/2022', 8210, NULL, NULL),
	(8, '0', NULL, 25938, 'quarrel between two women one claiming she was attacked by the other leaving her with substantial injuries', NULL, '2021-05-28', NULL, '8', 'fkw/049/2021', 8218, NULL, NULL),
	(9, '0', NULL, 94304, 'accident between two bodaboda operators', NULL, NULL, NULL, '0fc/8408/4953', 'dsa/8432/2020', 8223, NULL, NULL);
/*!40000 ALTER TABLE `abstracts` ENABLE KEYS */;

-- Dumping structure for table police_mis.arrests
CREATE TABLE IF NOT EXISTS `arrests` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL DEFAULT '0',
  `citizens_id` int(20) DEFAULT NULL,
  `police_station_id` int(20) DEFAULT NULL,
  `officer_reg_no` varchar(50) DEFAULT NULL,
  `arrest_location` varchar(255) DEFAULT NULL,
  `arrest_details` varchar(255) DEFAULT NULL,
  `category` varchar(50) DEFAULT NULL,
  `fine_paid` int(11) DEFAULT NULL,
  `fine_amount` int(20) DEFAULT NULL,
  `date_of_incident` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

-- Dumping data for table police_mis.arrests: ~11 rows (approximately)
/*!40000 ALTER TABLE `arrests` DISABLE KEYS */;
INSERT INTO `arrests` (`id`, `name`, `citizens_id`, `police_station_id`, `officer_reg_no`, `arrest_location`, `arrest_details`, `category`, `fine_paid`, `fine_amount`, `date_of_incident`) VALUES
	(1, '0', 78909, 8412, 'ofc/3948/3049', 'harambee drive city centre', 'taking a turn at wrong point of the road', 'non serious', 1, 5000, '2022-06-25'),
	(2, '0', 49583, 8421, 'ofc/3948/2103', 'thika road', 'driving under the influence of alchohol. alcoblow indicated level of 4.8', 'non serious', 2, 12500, '2022-06-25'),
	(3, '0', 49503, 8436, 'ofc/3849/2843', 'bus station nairobi', 'drunken disorderly behaviour ', 'non-serious', 1, 2000, '2022-06-25'),
	(4, '0', 40582, 8426, 'ofc/0384/4829', 'zion appartments kinoo', 'domestic violence. arrested after neighbouring residents reported loud noises. two police officers were sent to investigate the roport', 'serious', 2, NULL, '2022-06-25'),
	(5, '0', 38292, 8419, 'ofc/0394/2930', 'mombasa road', 'fatal accident at mombasa road between a toyota and mercedes. driver of mercedes arrested after eye witness account  saying he was driving recklessly', 'serious', 2, 50000, '2022-06-25'),
	(6, '0', 83949, 8404, 'ofc/9865/7544', 'odeaon', 'hawking ', 'non-serious', 1, 1000, '2022-06-25'),
	(7, '0', 48594, 8404, 'ofc/3984/3942', 'odeon', 'hawking', 'non-serious', 1, 1000, '2022-06-25'),
	(8, '0', 84729, 8416, 'ofc/4048/3940', 'ruiru', 'travelling without a mak', 'non-serious', 2, 1000, '2022-06-25'),
	(9, '0', 38403, 8447, '0fc/2939/4930', 'mombasa', 'possesion of drugs', 'serious', 2, 15000, '2022-06-25'),
	(10, '0', 48392, 8418, 'ofc/3049/4930', 'moyale', 'arrested while attempting to steal 25 goats from a farmer at kijembe whom he seriously injured and left him before proceeding to steal', 'serious', 2, NULL, '2022-06-25'),
	(11, '0', 39405, 8411, 'ofc/3948/3048', 'mombasa', 'drunken disorderly', 'non-serious', 1, 5000, '2022-06-25'),
	(12, '0', 73842, 8416, 'ofc/3849/9489', 'linkin park business complex', 'thief caught breaking into an unatended commercial stall and stealing some goods', 'non serious', NULL, 8000, '2022-04-29'),
	(13, '0', 73842, 8416, 'ofc/3849/9489', 'linkin park business complex', 'thief caught breaking into an unatended commercial stall and stealing some goods', 'non serious', NULL, 8000, '2022-04-29'),
	(14, '0', 73842, 8416, 'ofc/3849/9489', 'linkin park business complex', 'thief caught breaking into an unatended commercial stall and stealing some goods', 'non serious', NULL, 8000, '2022-04-29'),
	(15, '0', 73842, 8416, 'ofc/3849/9489', 'linkin park business complex', 'thief caught breaking into an unatended commercial stall and stealing some goods', 'non serious', NULL, 8000, '2022-04-29');
/*!40000 ALTER TABLE `arrests` ENABLE KEYS */;

-- Dumping structure for table police_mis.categories
CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `category` varchar(255) DEFAULT NULL,
  `category_id` varchar(255) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

-- Dumping data for table police_mis.categories: ~9 rows (approximately)
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` (`id`, `category`, `category_id`, `type`) VALUES
	(1, 'serious', 'cat/3200', 'homocide'),
	(2, 'serious', 'cat/7200', 'accident'),
	(3, 'serious', 'cat/4300', 'rape'),
	(4, 'non serious', 'cat/4900', 'theft'),
	(5, 'non-serious', 'cat/3400', 'drunken disoderly'),
	(6, 'non-serious', 'cat/2300', 'hawking'),
	(7, 'non-serious', 'cat/4100', 'drug use'),
	(8, 'serious', 'cat/3900', 'buglary'),
	(11, 'non serious', 'cat/4400', 'misdemeanor'),
	(12, 'non serious', 'cat/4400', 'misdemeanor'),
	(13, NULL, NULL, NULL),
	(14, 'non serious', 'cat/4220', 'violence');
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;

-- Dumping structure for table police_mis.citizens
CREATE TABLE IF NOT EXISTS `citizens` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `citizen_name` varchar(255) DEFAULT NULL,
  `id_number` int(20) DEFAULT NULL,
  `phone_number` varchar(255) DEFAULT NULL,
  `email_address` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

-- Dumping data for table police_mis.citizens: ~6 rows (approximately)
/*!40000 ALTER TABLE `citizens` DISABLE KEYS */;
INSERT INTO `citizens` (`id`, `citizen_name`, `id_number`, `phone_number`, `email_address`) VALUES
	(1, 'Harry Kamau', 84927, '726271638', 'kamauharry@gmail.com'),
	(2, 'Rose Wanjiku', 82736, '727364832', 'roseshiku@gmail.com'),
	(3, 'Juliet Ouma', 83784, '727364893', 'julietouma@gmail.com'),
	(4, 'John Njoroge', 89273, '726473632', 'johnnjoroge@gmail.com'),
	(5, 'Obed Kiprop', 73829, '726372783', 'kiprop938@gmail.com'),
	(6, NULL, NULL, NULL, NULL),
	(7, 'Alfred Njuguna', 73649, '7233849530', 'alfrednjuguna@gmail.com');
/*!40000 ALTER TABLE `citizens` ENABLE KEYS */;

-- Dumping structure for table police_mis.failed_jobs
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table police_mis.failed_jobs: ~0 rows (approximately)
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;

-- Dumping structure for table police_mis.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table police_mis.migrations: ~4 rows (approximately)
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(5, '2014_10_12_000000_create_users_table', 1),
	(6, '2014_10_12_100000_create_password_resets_table', 1),
	(7, '2019_08_19_000000_create_failed_jobs_table', 1),
	(8, '2019_12_14_000001_create_personal_access_tokens_table', 1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- Dumping structure for table police_mis.password_resets
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table police_mis.password_resets: ~0 rows (approximately)
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;

-- Dumping structure for table police_mis.payment
CREATE TABLE IF NOT EXISTS `payment` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `name` int(20) NOT NULL DEFAULT '0',
  `id_number` varchar(255) DEFAULT NULL,
  `amount_paid` int(20) DEFAULT NULL,
  `for` int(20) DEFAULT NULL,
  `receipt_number` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

-- Dumping data for table police_mis.payment: ~9 rows (approximately)
/*!40000 ALTER TABLE `payment` DISABLE KEYS */;
INSERT INTO `payment` (`id`, `name`, `id_number`, `amount_paid`, `for`, `receipt_number`) VALUES
	(1, 0, 'RCD/8421/302993', 10000, NULL, '8299392'),
	(2, 0, 'RCD/8410/394029', 5000, NULL, '2939403'),
	(3, 0, 'RCD/8419/938492', 8000, NULL, '3849203'),
	(4, 0, 'RCD/8427/849386', 2500, NULL, '3848274'),
	(5, 0, 'RCD/6425/384950', 1000, NULL, '8394837'),
	(6, 0, 'RCD/8401/783942', 6000, NULL, '4758392'),
	(7, 0, 'RCD/8447/38475', 5000, NULL, '2394829'),
	(8, 0, 'RCD/8447/38475', 5000, NULL, '2394829'),
	(9, 0, 'RCD/8447/38475', 5000, NULL, NULL);
/*!40000 ALTER TABLE `payment` ENABLE KEYS */;

-- Dumping structure for table police_mis.personal_access_tokens
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table police_mis.personal_access_tokens: ~0 rows (approximately)
/*!40000 ALTER TABLE `personal_access_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `personal_access_tokens` ENABLE KEYS */;

-- Dumping structure for table police_mis.police_station
CREATE TABLE IF NOT EXISTS `police_station` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `police_station_name` varchar(255) DEFAULT NULL,
  `police_station_id` varchar(255) DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL,
  `presiding_officer` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

-- Dumping data for table police_mis.police_station: ~9 rows (approximately)
/*!40000 ALTER TABLE `police_station` DISABLE KEYS */;
INSERT INTO `police_station` (`id`, `police_station_name`, `police_station_id`, `location`, `presiding_officer`) VALUES
	(1, 'Kabarnet Police Station', '8412', 'Kitale', 'Susan Kyallo'),
	(2, 'Kilifi Police Station', '8423', 'Kilifi', 'Jacob Omondi'),
	(3, 'Lokichar Police Station', '8427', 'Turkana', 'Nolan Wesonga'),
	(4, 'Ngara Police Station', '8447', 'Nairobi', 'Alice Wanjiku'),
	(5, 'Juja Police Station', '8422', 'Kiambu', 'Esther Karingi'),
	(6, 'Magadi Police Station', '8415', 'Kajiado', 'Jeffrey Archer'),
	(7, 'Muthaiga Police Station', '8433', 'Nairobi', 'Paul Edward'),
	(8, 'Gilgil Police Station', '8445', 'Naivasha', 'Eustace Kuria'),
	(9, 'Karatina Police Station ', '8430', 'Nyeri', 'Amrose Kibet'),
	(14, 'Olkaria Police Station', '8429', 'Naivasha', 'Chebet Kiplimo'),
	(15, 'Olkaria Police Station', '8429', 'Naivasha', 'Chebet Kiplimo'),
	(16, 'Olkaria Police Station', '8429', 'Naivasha', 'Chebet Kiplimo');
/*!40000 ALTER TABLE `police_station` ENABLE KEYS */;

-- Dumping structure for table police_mis.police_users
CREATE TABLE IF NOT EXISTS `police_users` (
  `id` int(20) unsigned NOT NULL AUTO_INCREMENT,
  `police_name` varchar(50) DEFAULT NULL,
  `reg_no` varchar(50) DEFAULT NULL,
  `police_station_id` int(20) DEFAULT NULL,
  `phone_no` varchar(50) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=latin1;

-- Dumping data for table police_mis.police_users: ~25 rows (approximately)
/*!40000 ALTER TABLE `police_users` DISABLE KEYS */;
INSERT INTO `police_users` (`id`, `police_name`, `reg_no`, `police_station_id`, `phone_no`, `password`) VALUES
	(1, 'Jacob Omondi', 'ofc/3843/4958', 8425, '722739203', 'jacob123'),
	(2, 'Esther Karingi', 'ofc/3842/3282', 8402, '726253819', 'esther123'),
	(3, 'Kennedy Kimondo', 'ofc/3948/4039', 8447, '727948374', 'kennedy123'),
	(4, 'Paul Edward', 'ofc/3948/2840', 8416, '721748392', 'paul123'),
	(5, 'Alice Wanjiku', 'ofc/3849/3800', 8421, '723485985', 'alice123'),
	(6, 'Jeffrey Archer', 'ofc/4940/3054', 8441, '728498304', 'jeffrey123'),
	(7, 'Nolan Wesonga', 'ofc/3948/2840', 8407, '729404873', 'nolan123'),
	(8, 'Susan Kyallo', 'ofc/3948/8403', 8429, '728472083', 'susan123'),
	(9, 'Eustace Kuria', 'ofc/3840/4938', 8433, '724304749', 'eustace123'),
	(10, 'Ambrose Kibet', 'ofc/3948/2394', 8410, '729374940', 'ambrose123'),
	(12, 'Priscilla Njeri', 'ofc/3843/4958', 8425, '722739203', 'jacob123'),
	(13, 'Priscilla Njeri', 'ofc/3843/4958', 8425, '722739203', 'jacob123'),
	(14, 'Priscilla Njeri', 'ofc/3843/4958', 8425, '722739203', 'jacob123'),
	(15, 'Priscilla Njeri', 'ofc/3843/4990', 8429, '722739204', 'jacob123'),
	(16, 'Priscilla Njeri', 'ofc/3843/4991', 8429, '722739205', '$2y$10$xsxj0HdLtH4mtp7FJemmkuuzq4Xizuay1l2qjYZE349vHk1AEOJPe'),
	(17, 'Priscilla Njeri', 'ofc/3843/4992', 8429, '722739206', '$2y$10$wvi1QVbFx/I8gTu5u2usrOmj4762GAXhPxczmrFgcNIBMQ634CCHG'),
	(18, 'Priscilla Njeri', 'ofc/3843/4993', 8429, '722739207', '$2y$10$fWytV4zonIWDMTtJ/KXPdOy.m0jUol7t60rXUfbrBW8RfkPpcPe0a'),
	(19, 'Priscilla Njeri', 'ofc/3843/4994', 8429, '722739208', '$2y$10$RlyQkdM/DGOCBXZNnV952OfSR9BQDJrLvsrh5efBMVF.0N23gggNO'),
	(20, 'Alan Kamau', 'ofc/3821/4991', 8412, '722728372', '$2y$10$tO3zDm4QgeFwMT7r38Z.JelZetYlrpnGLWUXuV5.EUyhXPqNkqTQ6'),
	(21, 'Susan Mwende', 'ofc/4828/3948', 8402, '724930492', '$2y$10$FvnRFFYcgicxmL7s/Lq1Ae0SiCGnKDKiMXQlrORDIOxckbhFi8RC.'),
	(22, 'George Okello', 'ofc/4894/3939', 8439, '0729403403', '$2y$10$oU9t4Pe0IMRzMrzxleYFs.Qx9n.neupdUxt8NNJmPDrxwACRth4G2'),
	(23, 'Susan Mwende', 'ofc/4828/3678', 8402, '0724930492', '$2y$10$WT5l2qQFYfrqvwjr0PIqTOPaFo6P55gag1vCpkILgVz.uEF4X8Yhq'),
	(24, 'Alice Kamau', 'ofc/4839/3929', 8411, '0724933940', '$2y$10$MmOgLe5i0nVFdgS830mQo.rcMqS7y.vQMBXNdcuJL3x1t.z095ni6'),
	(25, 'Susan Mwende', 'ofc/4828/39488', 8402, '0724930498', '$2y$10$Zjz6tYSL0uYx.1Zerys3m.cZCUIdiKrBqVxd533y2ryQ.2RuQWZfu'),
	(26, 'Susan Mwende', 'ofc/4828/39489', 8402, '0724930499', '$2y$10$BzSzL6WljcNrcV9DPW2BxuY1T2eY2UPCXetwj0AZ5xRfSPmFJ82CC'),
	(27, 'Susan Mwende', 'ofc/4828/3978', 8402, '0724930999', '$2y$10$U5U3h1tkl/C0sk5nnEpM0eAgCyusFgaFtK4tz6OpK0ZyptmvXt.zu');
/*!40000 ALTER TABLE `police_users` ENABLE KEYS */;

-- Dumping structure for table police_mis.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table police_mis.users: ~0 rows (approximately)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
