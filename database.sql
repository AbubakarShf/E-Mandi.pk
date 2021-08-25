-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.7.31 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             11.1.0.6116
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for bidding
DROP DATABASE IF EXISTS `bidding`;
CREATE DATABASE IF NOT EXISTS `bidding` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `bidding`;

-- Dumping structure for table bidding.apisessions
DROP TABLE IF EXISTS `apisessions`;
CREATE TABLE IF NOT EXISTS `apisessions` (
  `session_id` int(11) NOT NULL AUTO_INCREMENT,
  `token` varchar(255) NOT NULL DEFAULT '',
  `user_id` int(11) NOT NULL,
  `logintime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `lastactivity` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`session_id`),
  UNIQUE KEY `token` (`token`)
) ENGINE=MyISAM AUTO_INCREMENT=38 DEFAULT CHARSET=latin1;

-- Dumping data for table bidding.apisessions: 33 rows
/*!40000 ALTER TABLE `apisessions` DISABLE KEYS */;
INSERT INTO `apisessions` (`session_id`, `token`, `user_id`, `logintime`, `lastactivity`, `status`) VALUES
	(1, 'f7da4e7b28373ec0eeccf67298d51e40', 1, '2021-06-11 20:24:51', '2021-06-11 20:25:29', 1),
	(2, '55267631d5035251f2c520071e77db8f', 1, '2021-06-11 20:29:49', '2021-06-11 20:29:49', 1),
	(3, '22b1a19d5eadb77f8d5b6f38992e1a2e', 1, '2021-06-11 20:29:57', '2021-06-11 20:29:57', 1),
	(4, 'd1d2681077e982d353e30c5439ea8e53', 1, '2021-06-11 20:39:12', '2021-06-11 20:39:12', 1),
	(5, 'c6ee1e76ecc7296922f26860cf8d656e', 1, '2021-06-11 20:40:24', '2021-06-11 20:40:24', 1),
	(6, '8627b40e987e5fbb63db6524d57481f8', 1, '2021-06-11 20:42:11', '2021-06-11 20:42:11', 1),
	(7, '41998c2de74f728e9ce4cf515ac404cf', 1, '2021-06-12 09:14:55', '2021-06-12 09:14:55', 1),
	(8, '713ebf9a42e46b2ce8a6f5175e650d9b', 1, '2021-06-12 09:20:51', '2021-06-12 09:20:51', 1),
	(9, '4e022b489320dad3a019ce253c730fe1', 1, '2021-06-12 10:18:36', '2021-06-12 10:18:36', 1),
	(10, '85d24af86e78509aa7ede1ec5713444c', 1, '2021-06-12 10:19:36', '2021-06-12 10:19:36', 1),
	(11, '87f11ce6d3470fb15aec2edf68092891', 1, '2021-06-12 10:20:22', '2021-06-12 10:20:22', 1),
	(12, '5b8d78e8dff856eb4105a2eebbbeea96', 1, '2021-06-12 10:21:13', '2021-06-12 10:21:13', 1),
	(13, '07c948915cba21b7069b40cdb9bd9822', 1, '2021-06-12 10:21:17', '2021-06-12 10:21:17', 1),
	(14, 'c3a0168e306b0b2d8c3a8efcbe16ab21', 1, '2021-06-12 10:37:51', '2021-06-12 10:37:51', 1),
	(15, '9fee16a84bea782541b0a680a322918d', 1, '2021-06-12 10:46:52', '2021-06-12 10:46:52', 1),
	(16, '8516f9f3777cec73d1e9b62efef8dc7b', 1, '2021-06-22 10:43:21', '2021-06-22 10:43:21', 1),
	(17, '148bce39abe42160b104f6584f113e1b', 1, '2021-06-22 10:45:38', '2021-06-22 10:45:38', 1),
	(18, 'fc29fd22e877d150d03f2f926af1043d', 1, '2021-06-22 10:48:53', '2021-06-22 10:48:53', 1),
	(19, '15987c4ec003ebd50d306e264ceb004e', 1, '2021-06-24 15:03:21', '2021-06-24 15:03:21', 1),
	(20, 'cd5044a09963a281ed35d64229eccf84', 1, '2021-06-24 15:55:59', '2021-06-24 15:55:59', 1),
	(21, '52d1c81155a29bc3ff1a9f0fa93c441f', 1, '2021-06-24 15:56:42', '2021-06-24 15:56:42', 1),
	(22, 'f791921a13bad25a2e6c00b765f7ab77', 1, '2021-06-24 15:56:49', '2021-06-24 15:56:49', 1),
	(23, 'c6b540ed02d91993cc5bfb2afb41de52', 1, '2021-06-24 15:57:05', '2021-06-24 15:57:05', 1),
	(24, 'e9bd8f01002f827d154f94b1f9ccdd0b', 1, '2021-06-25 17:11:51', '2021-06-25 17:11:51', 1),
	(25, '154efa8f6be9df053e903e24c464494c', 1, '2021-07-03 15:50:49', '2021-07-03 15:50:49', 1),
	(26, 'f837db924caee0497e69b6f2c6d45765', 1, '2021-07-03 15:51:15', '2021-07-03 15:51:15', 1),
	(27, 'cfdda4111869ee3e3eb8bc5c567cb17d', 1, '2021-07-03 15:56:07', '2021-07-03 15:56:07', 1),
	(28, 'f847ca06911b1baad69628774e2dab30', 1, '2021-07-13 20:45:44', '2021-07-13 20:45:44', 1),
	(29, 'c3f32d7817b65034d99f72a1fdb32efd', 1, '2021-07-13 20:45:47', '2021-07-13 20:45:47', 1),
	(30, '3fe6f932372d14c0c198f471154e776c', 1, '2021-07-14 11:46:00', '2021-07-14 11:46:00', 1),
	(31, 'b4198ece54cdc1aafdde2f29536a1c45', 1, '2021-07-14 11:46:03', '2021-07-14 11:46:03', 1),
	(32, 'df70718a43236ef243f0fee3cd556cff', 1, '2021-07-14 12:03:14', '2021-07-14 12:03:14', 1),
	(33, '4e7e8652d61b81df6c98b4d946bae5e3', 1, '2021-07-14 16:11:51', '2021-07-14 16:11:51', 1),
	(34, 'ce09c2ec6e76ea56602285522ebd6248', 2, '2021-07-14 21:52:20', '2021-07-14 21:52:20', 1),
	(35, '681ec16fdb4e9e070cb343e82ba2d934', 1, '2021-07-14 21:56:50', '2021-07-14 21:56:50', 1),
	(36, 'ad42b34b47dea354a45c4a788fe6f68e', 1, '2021-07-14 21:57:17', '2021-07-14 21:57:17', 1),
	(37, 'ee44a7d7f47247e1aa25a0fe418200a5', 1, '2021-07-14 21:57:35', '2021-07-14 21:57:35', 1);
/*!40000 ALTER TABLE `apisessions` ENABLE KEYS */;

-- Dumping structure for table bidding.bids
DROP TABLE IF EXISTS `bids`;
CREATE TABLE IF NOT EXISTS `bids` (
  `bid_id` int(11) NOT NULL AUTO_INCREMENT,
  `stock_id` int(11) DEFAULT NULL,
  `bidder_id` int(11) NOT NULL,
  `bid_value` int(11) DEFAULT NULL,
  `bid_time` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`bid_id`),
  KEY `FK__stock` (`stock_id`),
  KEY `FK_bids_users` (`bidder_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Dumping data for table bidding.bids: 2 rows
/*!40000 ALTER TABLE `bids` DISABLE KEYS */;
INSERT INTO `bids` (`bid_id`, `stock_id`, `bidder_id`, `bid_value`, `bid_time`) VALUES
	(1, 1, 1, 245, '2021-06-11 18:01:05'),
	(2, 1, 1, 245, '2021-06-11 18:01:13');
/*!40000 ALTER TABLE `bids` ENABLE KEYS */;

-- Dumping structure for table bidding.moniter
DROP TABLE IF EXISTS `moniter`;
CREATE TABLE IF NOT EXISTS `moniter` (
  `entry_id` int(11) NOT NULL AUTO_INCREMENT,
  `stock_id` int(11) DEFAULT NULL,
  `stock_temprature` int(11) DEFAULT NULL,
  `stock_weight` int(11) DEFAULT NULL,
  `checker` int(11) NOT NULL,
  PRIMARY KEY (`entry_id`),
  KEY `fk_stock` (`stock_id`),
  KEY `FK_moniter_users` (`checker`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- Dumping data for table bidding.moniter: 0 rows
/*!40000 ALTER TABLE `moniter` DISABLE KEYS */;
/*!40000 ALTER TABLE `moniter` ENABLE KEYS */;

-- Dumping structure for table bidding.stock
DROP TABLE IF EXISTS `stock`;
CREATE TABLE IF NOT EXISTS `stock` (
  `stock_id` int(11) NOT NULL AUTO_INCREMENT,
  `stock_name` text NOT NULL,
  `stock_code` varchar(255) NOT NULL DEFAULT '',
  `stock_color` varchar(50) NOT NULL DEFAULT '',
  `stock_weight` double NOT NULL,
  `stock_age` int(11) NOT NULL,
  `stock_base_bid` double NOT NULL DEFAULT '0',
  `stock_base_price` double NOT NULL DEFAULT '0',
  `stock_origin` varchar(50) NOT NULL DEFAULT '0',
  `photo` text NOT NULL,
  `stock_entrydate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `stock_added_by` int(11) NOT NULL DEFAULT '0',
  `status` varchar(50) NOT NULL DEFAULT '0',
  PRIMARY KEY (`stock_id`),
  UNIQUE KEY `stock_code` (`stock_code`),
  KEY `FK_stock_users` (`stock_added_by`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

-- Dumping data for table bidding.stock: 8 rows
/*!40000 ALTER TABLE `stock` DISABLE KEYS */;
INSERT INTO `stock` (`stock_id`, `stock_name`, `stock_code`, `stock_color`, `stock_weight`, `stock_age`, `stock_base_bid`, `stock_base_price`, `stock_origin`, `photo`, `stock_entrydate`, `stock_added_by`, `status`) VALUES
	(1, 'bull', '007', 'black', 200, 2, 5000, 200000, 'Sahiwal', 'stock-1626261465-photo-1600705722908-bab1e61c0b4d (3).jpg', '2021-07-14 16:17:45', 1, 'sold'),
	(2, 'bull', '008', 'black', 200, 2, 5000, 200000, 'Sahiwal', 'stock-1626266948-maxresdefault.jpg||stock-1626266948-photo-1600705722908-bab1e61c0b4d (3).jpg||stock-1626266948-photo-1600705722908-bab1e61c0b4d (2).jpg||stock-1626266948-download.jpg||stock-1626266948-photo-1600705722908-bab1e61c0b4d (1).jpg||stock-1626266948-81596762_2528457034056237_5459632843216912384_n.jpg', '2021-07-14 17:49:08', 1, 'new'),
	(3, 'bull', '006', 'black', 200, 2, 5000, 200000, 'Sahiwal', 'stock-1626274108-maxresdefault.jpg', '2021-07-14 19:48:28', 1, 'new'),
	(4, 'bull', '001', 'black', 200, 2, 5000, 200000, 'Sahiwal', 'stock-1626274204-maxresdefault.jpg', '2021-07-14 19:50:04', 1, 'new'),
	(5, 'bull', '0072', 'black', 200, 2, 5000, 200000, 'Sahiwal', 'stock-1626274330-download.jpg', '2021-07-14 19:52:10', 1, 'new'),
	(6, 'bull', '00732', 'black', 200, 2, 5000, 200000, 'Sahiwal', 'stock-1626274349-download.jpg', '2021-07-14 19:52:29', 1, 'new'),
	(7, 'bull', '0074', 'black', 200, 2, 5000, 200000, 'Sahiwal', 'stock-1626274395-maxresdefault.jpg', '2021-07-14 19:53:15', 1, 'new'),
	(8, 'bull', '00745', 'black', 200, 2, 5000, 200000, 'Sahiwal', 'stock-1626278609-maxresdefault.jpg||stock-1626278609-photo-1600705722908-bab1e61c0b4d (3).jpg||stock-1626278609-photo-1600705722908-bab1e61c0b4d (2).jpg||stock-1626278609-download.jpg||stock-1626278609-photo-1600705722908-bab1e61c0b4d (1).jpg||stock-1626278609-81596762_2528457034056237_5459632843216912384_n.jpg', '2021-07-14 21:03:29', 1, 'new');
/*!40000 ALTER TABLE `stock` ENABLE KEYS */;

-- Dumping structure for table bidding.users
DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `user_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fullname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cnic` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user',
  `country` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pakistan',
  `city` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `users_username_unique` (`username`),
  UNIQUE KEY `users_cnic_unique` (`cnic`),
  UNIQUE KEY `users_contact_unique` (`contact`),
  UNIQUE KEY `users_gmail_unique` (`email`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table bidding.users: 1 rows
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`user_id`, `username`, `fullname`, `cnic`, `contact`, `email`, `password`, `type`, `country`, `city`, `address`, `gender`, `photo`, `created_at`, `updated_at`) VALUES
	(1, 'mrqasimabid', 'Qasim Abid', '3310066790773', '03360005924', 'mrqasimabid', '$2y$10$hCSwok.Pg2DwSTuJCt.tIuAAseMWTL.UhKFcjybfIjvtvEnZomfAS', 'admin', 'pakistan', 'faisalabad', 'chak#224', 'male', 'users-1623421511-Untitled.png', '2021-06-11 19:25:11', '2021-06-12 10:44:56'),
	(2, 'mrqasimabid2', 'Qasim Abid', '33100-6679077-2', '0336-0005924', 'mrqasimabid@gmail.com', '$2y$10$QHfO1BZaRLmLiHKDR2.ECuHkzviDp6KDlZrWbTS.TgtpfJXyInrku', 'user', 'pakistan', 'Faisalabad', 'house#270 Street No 4 muhalla Alla Abad, Tehsil faisalabad faisalabad city zila faisalabad', 'Male', 'users-1626281498-photo-1600705722908-bab1e61c0b4d (3)', '2021-07-14 21:51:38', '2021-07-14 23:34:19');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
