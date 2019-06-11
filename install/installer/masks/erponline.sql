SET FOREIGN_KEY_CHECKS=0;
CREATE TABLE IF NOT EXISTS `ci_sessions` (
  `id` varchar(128) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(10) unsigned NOT NULL DEFAULT 0,
  `data` blob NOT NULL,
  KEY `ci_sessions_timestamp` (`timestamp`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping structure for table nodcms_demo.comments
DROP TABLE IF EXISTS `comments`;
CREATE TABLE IF NOT EXISTS `comments` (
  `comment_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `session_id` varchar(50) NOT NULL,
  `user_id` int(11) unsigned DEFAULT NULL,
  `content` text,
  `created_date` int(11) unsigned DEFAULT NULL,
  `extension_id` int(11) unsigned DEFAULT NULL,
  `status` int(1) unsigned NOT NULL,
  `sub_id` int(11) unsigned NOT NULL,
  `lang` varchar(2) NOT NULL,
  PRIMARY KEY (`comment_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Data exporting was unselected.


-- Dumping structure for table nodcms_demo.extensions
DROP TABLE IF EXISTS `extensions`;
CREATE TABLE IF NOT EXISTS `extensions` (
  `extension_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) unsigned NOT NULL,
  `category_id` int(11) unsigned NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `extension_icon` varchar(255) DEFAULT NULL,
  `tag` varchar(255) DEFAULT NULL,
  `description` text,
  `full_description` text,
  `data_type` varchar(255) DEFAULT NULL,
  `relation_id` int(10) unsigned DEFAULT NULL,
  `language_id` int(10) unsigned DEFAULT NULL,
  `created_date` int(10) unsigned DEFAULT NULL,
  `updated_date` int(10) unsigned NOT NULL,
  `status` int(1) unsigned DEFAULT NULL,
  `public` int(1) unsigned DEFAULT NULL,
  `like` int(10) unsigned DEFAULT NULL,
  `dislike` int(10) unsigned DEFAULT NULL,
  `star_rate_sum` int(10) unsigned DEFAULT NULL,
  `star_rate_count` int(10) unsigned DEFAULT NULL,
  `count_view` int(10) unsigned DEFAULT NULL,
  `count_comment` int(10) unsigned NOT NULL DEFAULT '0',
  `extension_order` int(10) unsigned NOT NULL DEFAULT '0',
  `extension_more` text NOT NULL,
  PRIMARY KEY (`extension_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `extensions` (`extension_id`, `user_id`, `category_id`, `name`, `image`, `extension_icon`, `tag`, `description`, `full_description`, `data_type`, `relation_id`, `language_id`, `created_date`, `updated_date`, `status`, `public`, `like`, `dislike`, `star_rate_sum`, `star_rate_count`, `count_view`, `count_comment`, `extension_order`, `extension_more`) VALUES
(1, 1, 0, 'Information', NULL, 'fa-bullhorn', NULL, '<p>Ce site est d&eacute;di&eacute; au d&eacute;veloppement de l&#39;informatique m&eacute;dicale en Afrique et est bas&eacute;e sur le framework Fran&ccedil;ais Mediboard&nbsp;&nbsp; http://mediboard.org</p>\r\n\r\n<p>Le projet Afrique se nomme Medlines+&nbsp; et est port&eacute;e par la soci&eacute;t&eacute; BYOOS solutions &eacute;diteur d&#39;application WEB depuis plus de quinze ans en France puis au Cameroun.</p>\r\n', NULL, 'page', 1, 2, 1556535725, 1556964333, 1, 1, NULL, NULL, NULL, NULL, NULL, 0, 1, ''),
(2, 1, 0, 'Information', NULL, 'fa-bullhorn', NULL, '<p>This site is dedicated to the development of medical informatics in Africa and is based on the French Mediboard framework http://mediboard.org</p>\r\n\r\n<p>The Africa project is called Medlines+ and has been supported by BYOOS WEB application solutions for more than fifteen years in France and Cameroon.</p>\r\n', NULL, 'page', 1, 1, 1556536846, 1556538091, 1, 1, NULL, NULL, NULL, NULL, NULL, 0, 2, ''),
(3, 1, 0, 'Notre Emails', NULL, 'fa-envelope-square', NULL, '<p>Pour tout compl&eacute;ment d`informations, vous pouvez nous contacter &agrave; l`adresse e-mail suivante :&nbsp; infoline@byoos.net</p>\r\n', NULL, 'page', 1, 2, 1556555148, 1556555318, 1, 1, NULL, NULL, NULL, NULL, NULL, 0, 3, ''),
(4, 1, 0, 'Our Emails', NULL, 'fa-envelope-square', NULL, '<p>For any further information, you can contact us at the following e-mail address: infoline@byoos.net</p>\r\n', NULL, 'page', 1, 1, 1556555243, 1556555294, 1, 1, NULL, NULL, NULL, NULL, NULL, 0, 4, ''),
(5, 1, 0, 'Medlines+2019', 'upload_file/images20/69d76f520461b3a2b4d09d7b18839a06.png', NULL, NULL, '<p>Medlines+&nbsp; est une suite logiciel d&eacute;di&eacute; au monde de la sant&eacute;</p>\r\n', NULL, 'page', 2, 2, 1556787543, 1556962355, 1, 1, NULL, NULL, NULL, NULL, NULL, 0, 1, ''),
(6, 1, 0, 'Medlines+2019', 'upload_file/images20/69d76f520461b3a2b4d09d7b18839a06.png', NULL, NULL, '<p>Medlines+ is a software suite dedicated to the world of health</p>\r\n', NULL, 'page', 2, 1, 1556814775, 1556962377, 1, 1, NULL, NULL, NULL, NULL, NULL, 0, 2, ''),
(8, 1, 0, 'Nos outils de travail', 'upload_file/images20/dd0f59fa09cf60806b28c55458b22af5.png', NULL, NULL, '<p>Syst&egrave;me d&#39;exploitation DEBIAN 9.x</p>\r\n\r\n<p>Langage PHP 7.x</p>\r\n\r\n<p>Base de donn&eacute;es&nbsp;&nbsp; MARIADB 10.2</p>\r\n\r\n<p>Git / GitHub &nbsp; gestionnaire de version</p>\r\n\r\n<p>Geany&nbsp;&nbsp; &eacute;diteur de code source</p>\r\n\r\n<p>PhpMyadmin 4.83&nbsp;&nbsp; gestionnaire de base de donn&eacute;es&nbsp; SGDB</p>\r\n\r\n<p>&nbsp;</p>\r\n', NULL, 'page', 3, 2, 1556964196, 0, 1, 1, NULL, NULL, NULL, NULL, NULL, 0, 4, '');



-- Dumping structure for table nodcms_demo.gallery
DROP TABLE IF EXISTS `gallery`;
CREATE TABLE IF NOT EXISTS `gallery` (
  `gallery_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `gallery_name` varchar(255) DEFAULT NULL,
  `user_id` int(10) unsigned DEFAULT NULL,
  `relation_id` int(10) unsigned DEFAULT NULL,
  `data_type` varchar(255) DEFAULT NULL,
  `created_date` int(10) unsigned DEFAULT NULL,
  `gallery_order` int(10) unsigned DEFAULT NULL,
  `status` int(1) unsigned DEFAULT NULL,
  PRIMARY KEY (`gallery_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `gallery` (`gallery_id`, `gallery_name`, `user_id`, `relation_id`, `data_type`, `created_date`, `gallery_order`, `status`) VALUES
(1, 'Frontend', 1, 4, 'page', 1407689200, 1, 1),
(2, 'Backend', 1, 4, 'page', 1407689444, 2, 1);


-- Dumping structure for table nodcms_demo.gallery_image
-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.6.24 - MySQL Community Server (GPL)
-- Server OS:                    Win32
-- HeidiSQL Version:             9.3.0.4984
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping structure for table nodcms_github3.gallery_image
DROP TABLE IF EXISTS `gallery_image`;
CREATE TABLE IF NOT EXISTS `gallery_image` (
  `image_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `relation_id` int(11) unsigned NOT NULL,
  `data_type` varchar(200) NOT NULL,
  `gallery_id` int(10) unsigned NOT NULL DEFAULT '0',
  `image` varchar(255) DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `size` float unsigned NOT NULL,
  `width` int(10) unsigned NOT NULL,
  `height` int(10) unsigned NOT NULL,
  `count_view` int(10) unsigned NOT NULL,
  `created_date` int(10) unsigned NOT NULL,
  PRIMARY KEY (`image_id`)
) ENGINE=MyISAM AUTO_INCREMENT=40 DEFAULT CHARSET=utf8;

-- Dumping data for table nodcms_github3.gallery_image: 23 rows
DELETE FROM `gallery_image`;
INSERT INTO `gallery_image` (`image_id`, `relation_id`, `data_type`, `gallery_id`, `image`, `name`, `size`, `width`, `height`, `count_view`, `created_date`) VALUES
  (28, 4, 'page', 1, 'upload_file/images/a3a3780f54ff8399cdccdad2e6b129dd.png', 'a3a3780f54ff8399cdccdad2e6b129dd.png', 165.1, 1280, 600, 0, 1450196006),
  (19, 4, 'page', 2, 'upload_file/images/2557ae0612e7dc43d51ee4ace5bcd3d4.png', '2557ae0612e7dc43d51ee4ace5bcd3d4.png', 36.11, 1280, 600, 0, 1450195949),
  (18, 4, 'page', 2, 'upload_file/images/fd18c833995aab5e09c38076636f4985.png', 'fd18c833995aab5e09c38076636f4985.png', 44.39, 1280, 600, 0, 1450195949),
  (26, 4, 'page', 1, 'upload_file/images/4821b41c8c23d3b53b8d1ccd7ff05bed.png', '4821b41c8c23d3b53b8d1ccd7ff05bed.png', 435.32, 1280, 600, 0, 1450196005),
  (27, 4, 'page', 1, 'upload_file/images/680d59f3e79533f528f18a8d3d5cc302.png', '680d59f3e79533f528f18a8d3d5cc302.png', 521.49, 1280, 600, 0, 1450196005),
  (17, 4, 'page', 2, 'upload_file/images/6bfd32e40090a2674376c1afcfbf8920.png', '6bfd32e40090a2674376c1afcfbf8920.png', 40.16, 1280, 600, 0, 1450195886),
  (20, 4, 'page', 2, 'upload_file/images/2a1ffa5c250747d7ac2ad5d5e73e8d74.png', '2a1ffa5c250747d7ac2ad5d5e73e8d74.png', 48.81, 1280, 600, 0, 1450195950),
  (21, 4, 'page', 2, 'upload_file/images/009a144230984137d0b0e53fc97ffbda.png', '009a144230984137d0b0e53fc97ffbda.png', 557.48, 1280, 600, 0, 1450195950),
  (22, 4, 'page', 2, 'upload_file/images/9371802989e822d208d5093e6b422399.png', '9371802989e822d208d5093e6b422399.png', 30.81, 1280, 600, 0, 1450195950),
  (23, 4, 'page', 2, 'upload_file/images/575bcbeb8c92c3ad17c6ec66c6ef340e.png', '575bcbeb8c92c3ad17c6ec66c6ef340e.png', 34.19, 1280, 600, 0, 1450195951),
  (24, 4, 'page', 2, 'upload_file/images/980f76eefdeb6102a77774949ef8e193.png', '980f76eefdeb6102a77774949ef8e193.png', 47.65, 1280, 600, 0, 1450195951),
  (25, 4, 'page', 2, 'upload_file/images/6f3afd777f962a2c9e7da8df2e056c15.png', '6f3afd777f962a2c9e7da8df2e056c15.png', 47.65, 1280, 600, 0, 1450195951),
  (29, 4, 'page', 1, 'upload_file/images/a5793564df223877a706e04ce576b7d2.png', 'a5793564df223877a706e04ce576b7d2.png', 28.56, 1280, 600, 0, 1450196006),
  (30, 4, 'page', 1, 'upload_file/images/5df46b1cfc5c7b99670c05213bfb2c64.png', '5df46b1cfc5c7b99670c05213bfb2c64.png', 365.44, 1280, 600, 0, 1450196007),
  (31, 4, 'page', 1, 'upload_file/images/440db2974ded20b41abb3ca7a873c473.png', '440db2974ded20b41abb3ca7a873c473.png', 917.52, 1280, 600, 0, 1450196007),
  (32, 4, 'page', 1, 'upload_file/images/e18fe6fdefa22e01c1bfdf6ae39abe14.png', 'e18fe6fdefa22e01c1bfdf6ae39abe14.png', 316.03, 1280, 600, 0, 1450196007),
  (33, 4, 'page', 1, 'upload_file/images/4ca0e1c5e102e4192ff1d4dbe7d4b155.png', '4ca0e1c5e102e4192ff1d4dbe7d4b155.png', 43.27, 1280, 600, 0, 1450196008),
  (34, 4, 'page', 1, 'upload_file/images/3df72773fd0b5bd5b61e343e8d3d6e2c.png', '3df72773fd0b5bd5b61e343e8d3d6e2c.png', 25.04, 1280, 600, 0, 1450196008),
  (35, 4, 'page', 1, 'upload_file/images/5b511c48ffbc08ca4f594e191bcac4b6.png', '5b511c48ffbc08ca4f594e191bcac4b6.png', 223.75, 1280, 600, 0, 1450196008),
  (36, 4, 'page', 1, 'upload_file/images/994075994e0effa69444ff342618bcf9.png', '994075994e0effa69444ff342618bcf9.png', 24.56, 1280, 600, 0, 1450196008),
  (37, 4, 'page', 1, 'upload_file/images/e532df6e5a38e0d6bfa368dd187c7a73.png', 'e532df6e5a38e0d6bfa368dd187c7a73.png', 441.04, 1280, 600, 0, 1450196008),
  (38, 4, 'page', 1, 'upload_file/images/285d685fb97554ddc9ba81af0c903ec5.png', '285d685fb97554ddc9ba81af0c903ec5.png', 438.73, 1280, 600, 0, 1450196009),
  (39, 4, 'page', 2, 'upload_file/images/99367080652536fa9757c731dfc4f4fe.png', '99367080652536fa9757c731dfc4f4fe.png', 10.44, 1280, 600, 0, 1450196023);


-- Dumping structure for table nodcms_demo.images
DROP TABLE IF EXISTS `images`;
CREATE TABLE IF NOT EXISTS `images` (
  `image_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `width` int(11) unsigned DEFAULT NULL,
  `height` int(11) unsigned DEFAULT NULL,
  `size` int(11) unsigned DEFAULT NULL,
  `root` varchar(255) DEFAULT NULL,
  `folder` varchar(255) DEFAULT NULL,
  `created_date` int(11) unsigned DEFAULT NULL,
  `user_id` int(11) unsigned DEFAULT NULL,
  PRIMARY KEY (`image_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `images` (`image_id`, `name`, `image`, `width`, `height`, `size`, `root`, `folder`, `created_date`, `user_id`) VALUES
(1, '3ec9fbb924448fabe2c81289e3369161.jpg', 'upload_file/images20/3ec9fbb924448fabe2c81289e3369161.jpg', 1600, 1200, 205, 'upload_file/images20/', 'images20/', 1407838268, 1),
(2, 'fb88b34b99583e5bfa3b2603a782d5a2.jpg', 'upload_file/images20/fb88b34b99583e5bfa3b2603a782d5a2.jpg', 1920, 1080, 244, 'upload_file/images20/', 'images20/', 1407838287, 1),
(3, '4805c870664fd0e78dc4eec8c088652a.jpg', 'upload_file/images20/4805c870664fd0e78dc4eec8c088652a.jpg', 284, 177, 5, 'upload_file/images20/', 'images20/', 1407838310, 1),
(4, '347f306a9f945a8b2b9c8cc8e65a0387.jpg', 'upload_file/images20/347f306a9f945a8b2b9c8cc8e65a0387.jpg', 640, 427, 74, 'upload_file/images20/', 'images20/', 1407838327, 1),
(5, '1074fa7d9af521f81914ed5a43b7eb63.jpg', 'upload_file/images20/1074fa7d9af521f81914ed5a43b7eb63.jpg', 593, 370, 44, 'upload_file/images20/', 'images20/', 1407841676, 1),
(8, 'a034a35f7fd2881a2978e48f43f7a8ac.jpg', 'upload_file/images20/a034a35f7fd2881a2978e48f43f7a8ac.jpg', 1600, 1200, 101, 'upload_file/images20/', 'images20/', 1407841690, 1),
(10, '6319fb8a942a57c184e11172dd66e7a0.png', 'upload_file/images20/6319fb8a942a57c184e11172dd66e7a0.png', 128, 128, 4, 'upload_file/images20/', 'images20/', 1407862895, 1),
(11, 'd957d2eec45d829edbca76baedc6209e.png', 'upload_file/images20/d957d2eec45d829edbca76baedc6209e.png', 128, 128, 4, 'upload_file/images20/', 'images20/', 1407862921, 1),
(12, '0ce83a1d4aaebad05ae132336227cd9e.png', 'upload_file/images20/0ce83a1d4aaebad05ae132336227cd9e.png', 128, 128, 2, 'upload_file/images20/', 'images20/', 1407862937, 1),
(13, 'ac766864fe71eb91573945f4e663529e.png', 'upload_file/images20/ac766864fe71eb91573945f4e663529e.png', 240, 200, 36, 'upload_file/images20/', 'images20/', 1407863215, 1),
(24, 'windows_live_language_setting6.png', 'upload_file/logo/windows_live_language_setting6.png', 128, 128, 8, 'upload_file/logo/', 'logo/', 1408550301, 1),
(25, 'windows_live_language_setting7.png', 'upload_file/logo/windows_live_language_setting7.png', 128, 128, 8, 'upload_file/logo/', 'logo/', 1408550323, 1),
(26, '94a8816758fe10e815c339b6751fddbe.jpg', 'upload_file/images20/94a8816758fe10e815c339b6751fddbe.jpg', 593, 370, 44, 'upload_file/images20/', 'images20/', 1408567262, 1),
(27, 'fcc4435cf12591ff6530efe4fe62efc8.jpg', 'upload_file/images20/fcc4435cf12591ff6530efe4fe62efc8.jpg', 2048, 2048, 276, 'upload_file/images20/', 'images20/', 1408787759, 1),
(28, '7295604bb0454470e707632b41d69724.jpg', 'upload_file/images20/7295604bb0454470e707632b41d69724.jpg', 570, 770, 110, 'upload_file/images20/', 'images20/', 1408787821, 1),
(29, '05dc424f24399027548e5c48a0850c93.jpg', 'upload_file/images20/05dc424f24399027548e5c48a0850c93.jpg', 1920, 1080, 179, 'upload_file/images20/', 'images20/', 1408787855, 1),
(30, '0072c697d622bdf06b26aa3d37a55e90.png', 'upload_file/images20/0072c697d622bdf06b26aa3d37a55e90.png', 640, 480, 119, 'upload_file/images20/', 'images20/', 1408792732, 1),
(31, '44ab8ef63b3082a8705af64a16e10c7b.jpg', 'upload_file/images20/44ab8ef63b3082a8705af64a16e10c7b.jpg', 800, 600, 75, 'upload_file/images20/', 'images20/', 1408793508, 1),
(36, '104b902bca496da551264ec2babc140e.jpg', 'upload_file/images20/104b902bca496da551264ec2babc140e.jpg', 2560, 1600, 1287, 'upload_file/images20/', 'images20/', 1408989148, 1),
(37, 'ab680dd3a472bfb39490713612429c26.jpg', 'upload_file/images20/ab680dd3a472bfb39490713612429c26.jpg', 1920, 1080, 456, 'upload_file/images20/', 'images20/', 1408989246, 1),
(38, '7d598d44b338118030f44317691ee2ae.jpg', 'upload_file/images20/7d598d44b338118030f44317691ee2ae.jpg', 1280, 800, 158, 'upload_file/images20/', 'images20/', 1408989299, 1),
(39, '4ca2b1c818b4e10f3753d5b92ce9afc6.png', 'upload_file/images20/4ca2b1c818b4e10f3753d5b92ce9afc6.png', 1024, 576, 941, 'upload_file/images20/', 'images20/', 1408989501, 1),
(40, 'c4ea4e6b789d0a16ec540b8ce0ef46b1.jpg', 'upload_file/images20/c4ea4e6b789d0a16ec540b8ce0ef46b1.jpg', 1920, 1080, 286, 'upload_file/images20/', 'images20/', 1410121460, 1),
(41, '7ef2b11a3698ba1365446da55df5f1b4.jpg', 'upload_file/images20/7ef2b11a3698ba1365446da55df5f1b4.jpg', 500, 312, 50, 'upload_file/images20/', 'images20/', 1410121657, 1);


-- Dumping structure for table nodcms_demo.languages
DROP TABLE IF EXISTS `languages`;
CREATE TABLE IF NOT EXISTS `languages` (
  `language_id` int(11) NOT NULL AUTO_INCREMENT,
  `language_name` varchar(255) DEFAULT NULL,
  `code` varchar(255) DEFAULT NULL,
  `public` int(1) unsigned DEFAULT NULL,
  `rtl` int(1) unsigned DEFAULT '0',
  `sort_order` int(11) DEFAULT NULL,
  `created_date` int(11) DEFAULT NULL,
  `default` int(11) DEFAULT '0',
  `image` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`language_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `languages` (`language_id`, `language_name`, `code`, `public`, `rtl`, `sort_order`, `created_date`, `default`, `image`) VALUES
(1, 'english', 'en', 1, 0, 1, 1369730191, 1, 'upload_file/lang/united_states_flag.png'),
(2, 'french', 'fr', 1, 0, 2, 1555744369, 0, 'upload_file/lang/french_64x64.png');

-- Dumping structure for table nodcms_demo.menu
DROP TABLE IF EXISTS `menu`;
CREATE TABLE IF NOT EXISTS `menu` (
  `menu_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `menu_name` varchar(255) DEFAULT NULL,
  `menu_icon` varchar(255) DEFAULT NULL,
  `menu_link` varchar(255) DEFAULT NULL,
  `sub_menu` int(10) unsigned DEFAULT '0',
  `page_id` int(10) unsigned DEFAULT NULL,
  `created_date` int(10) unsigned DEFAULT NULL,
  `menu_order` int(10) unsigned DEFAULT NULL,
  `public` int(1) unsigned DEFAULT NULL,
  `menu_url` varbinary(255) DEFAULT NULL,
  PRIMARY KEY (`menu_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `menu` (`menu_id`, `menu_name`, `menu_icon`, `menu_link`, `sub_menu`, `page_id`, `created_date`, `menu_order`, `public`, `menu_url`) VALUES
(1, 'About Us', '', NULL, 0, 2, 1407879004, 10, 1, '');


-- Dumping structure for table nodcms_demo.page
DROP TABLE IF EXISTS `page`;
CREATE TABLE IF NOT EXISTS `page` (
  `page_id` int(11) NOT NULL AUTO_INCREMENT,
  `page_type` int(10) unsigned NOT NULL DEFAULT '1',
  `page_dynamic` int(1) unsigned NOT NULL DEFAULT '0',
  `page_name` varchar(255) DEFAULT NULL,
  `avatar` varchar(255) DEFAULT NULL,
  `country_id` int(11) unsigned NOT NULL,
  `created_date` int(11) unsigned NOT NULL,
  `public` int(1) unsigned NOT NULL,
  `preview` int(1) unsigned NOT NULL,
  `default` int(1) unsigned NOT NULL,
  `page_order` int(11) unsigned DEFAULT NULL,
  `page_more` text,
  PRIMARY KEY (`page_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `page` (`page_id`, `page_type`, `page_dynamic`, `page_name`, `avatar`, `country_id`, `created_date`, `public`, `preview`, `default`, `page_order`, `page_more`) VALUES
(1, 204, 0, 'about us', 'upload_file/images20/ac766864fe71eb91573945f4e663529e.png', 0, 1556535651, 1, 1, 0, 0, NULL),
(2, 202, 0, 'Medlines+2019', NULL, 0, 1556555543, 1, 1, 0, 1, NULL),
(3, 202, 0, 'tools', NULL, 0, 1556863690, 1, 1, 0, 2, NULL);


-- Dumping structure for table nodcms_demo.setting
DROP TABLE IF EXISTS `setting`;
CREATE TABLE IF NOT EXISTS `setting` (
  `id` int(11) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `company` varchar(255) DEFAULT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `fav_icon` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL,
  `zip_code` int(11) DEFAULT NULL,
  `country_id` int(11) DEFAULT NULL,
  `language_id` int(11) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `description` text,
  `use_smtp` int(1) NOT NULL DEFAULT '0',
  `smtp_host` varchar(255) NOT NULL,
  `smtp_port` int(11) NOT NULL,
  `smtp_username` varchar(255) NOT NULL,
  `smtp_password` varchar(255) NOT NULL,
  `default_image` varchar(255) DEFAULT NULL,
  `fb_api` varchar(255) DEFAULT NULL,
  `site_name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `setting` (`id`, `email`, `company`, `logo`, `fav_icon`, `address`, `location`, `zip_code`, `country_id`, `language_id`, `phone`, `description`, `use_smtp`, `smtp_host`, `smtp_port`, `smtp_username`, `smtp_password`, `default_image`, `fb_api`, `site_name`) VALUES
(1, 'infoline@byoos.net', 'BYOOS solutions', 'upload_file/logo/windows_live_language_setting6.png', 'upload_file/logo/windows_live_language_setting6.png', 'Chapelle ESSOS', '+38.666700, +11.516670', 33543, 1, 2, '+237 696 65 47 56', '', 0, '', 0, '', '', 'assets/frontend/img/noimage.jpg', '486992334724444', NULL);


-- Dumping structure for table nodcms_demo.setting_options_per_lang
DROP TABLE IF EXISTS `setting_options_per_lang`;
CREATE TABLE IF NOT EXISTS `setting_options_per_lang` (
  `option_id` int(11) NOT NULL AUTO_INCREMENT,
  `language_id` int(11) NOT NULL,
  `site_title` varchar(255) DEFAULT NULL,
  `company` varchar(255) NOT NULL,
  `site_description` text,
  `site_keyword` text,
  `msg_register` text NOT NULL,
  `msg_active` text NOT NULL,
  `msg_reset_pass` text NOT NULL,
  `msg_header` text NOT NULL,
  `msg_footer` text NOT NULL,
  PRIMARY KEY (`option_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8;

INSERT INTO `setting_options_per_lang` (`option_id`, `language_id`, `site_title`, `company`, `site_description`, `site_keyword`, `msg_register`, `msg_active`, `msg_reset_pass`, `msg_header`, `msg_footer`) VALUES
  (1, 1, 'Free PHP multilingual CMS - DEMO', 'BYOOS solutions', 'ERPonline+ is a free PHP script or CMS that made by powerful Codeigniter PHP framework.', 'ERP, CMS, PHP script,  Codeigniter CMS, Codeigniter sample, Codeigniter admin,free CMS, free Codeigniter CMS', '<p>Welcome to [--$company--]</p>\r\n<b>\r\n<p>We made a new account for you in our website</p>\r\n<p>To activate your account and set a password please click on below link:</p>\r\n<a href="[--$refurl--]">Account activate & Set a password</a>\r\n<p>Your Username: <b>[--$username--]</b></p>\r\n<p>Your Email address: <b>[--$email--]</b></p>', '<div style="background:#dff0d8;color:#3c763d;border-left:4px solid #3c763d;padding:10px;"><p>Your password successfully changed.</p></div>\r\n<br>\r\n<p>Thank you for your registration!</p>\r\n<p>Your username: <strong style="background:#f7ecb5">[--$username--]</strong></p>\r\n<p>Your email address: <strong style="background:#f7ecb5">[--$email--]</strong></p>\r\n<p>By below link you can sign in:</p>\r\n<p><a href="http://demo.nodcms.com/en/login">Login</a></p>', '<p>We had a request from you to change your password.</p>\r\n<p>By below link you can set your new password:</p>\r\n<p><a href="[--$refurl--]">Set a new password</a></p>', '<p>Hi dear,</p>\r\n<br><br>', '<br><br>\r\n<p>Thanks</p>\r\n<p>[--$company--]</p>'),
  (2, 2, 'Free PHP multilingue CMS - DEMO','BYOOS solutions','NodCMS','ERPonline+ est un script PHP gratuit ou CMS qui est fait par un puissant framework Codeigniter PHP.ERP, CMS, script PHP, CMS Codeigniter, CMS Codeigniter, échantillon Codeigniter, Admin Codeigniter, CMS gratuit, CMS gratuit, CMS Codeigniter gratuit','<p>Bienvenue à[--$company--]</p>\r\n<b>\r\n<p> Nous avons créé un nouveau compte pour vous dans notre site web</p>\r\n<p> Pour activer votre compte et définir un mot de passe cliquez sur le lien suivant :</p>\r\n<a href="[--$refurl--]">Account activate & Set a password</a>\r\n<p>Votre Nom : <b>[--$username--]</b></p>\r\n<p>Votre adresse e-mail : <b>[--$email--]</b></p>/p>','<div style="background:#dff0d8;color:#3c763d;border-left:4px solid #3c763d;padding:10px ;"><p>Votre mot de passe a été changé avec succès.</p>></div>\r\n<br>\r\n<r\n<p>Merci pour votre inscription!</p>\r\n<p>Votre nom utilisateur : <strong style="background:#f7ecb5">[--$username--]</strong></p>\r\n<p>Votre adresse email : <strong style="background:#f7ecb5">[--$email--]</strong></p>\r\n<p>Par le lien ci-dessous, vous pouvez vous connecter:</p>\r\n<p><a href="http://demo.nodcms.com/en/login">Login</a></p>/p>','<p>Vous nous avez demandé de changer votre mot de passe.</p>\r\n<p>Par le lien ci-dessous, vous pouvez définir votre nouveau mot de passe :</p>\r\n<p><a href="[--$refurl--]">Configurer un nouveau mot de passe </a></p>','<p>Hi dear,</p>\r\n<br><br><br>','<br><br>\r\n<p>Merci</p>\r\n<p>[--$company--]</p>') ;

-- Dumping structure for table nodcms_demo.titles
DROP TABLE IF EXISTS `titles`;
CREATE TABLE IF NOT EXISTS `titles` (
  `title_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title_caption` varchar(255) DEFAULT NULL,
  `relation_id` int(10) unsigned DEFAULT NULL,
  `data_type` varchar(255) DEFAULT NULL,
  `language_id` int(10) unsigned DEFAULT NULL,
  PRIMARY KEY (`title_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `titles` (`title_id`, `title_caption`, `relation_id`, `data_type`, `language_id`) VALUES
(3, 'About Us', 1, 'page', 1),
(4, 'A propos', 1, 'page', 2),
(7, 'About Us', 2, 'menu', 1),
(8, 'A propos', 2, 'menu', 2),
(9, 'Medlines+2019', 2, 'page', 1),
(10, 'Medlines+2019', 2, 'page', 2),
(13, 'Our tools', 3, 'page', 1),
(14, 'Nos outils', 3, 'page', 2);


-- Dumping structure for table nodcms_demo.users
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `user_id` int(11) UNSIGNED NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `fullname` varchar(255) DEFAULT NULL,
  `firstname` varchar(255) DEFAULT NULL,
  `lastname` varchar(255) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `group_id` tinyint(3) DEFAULT NULL,
  `created_date` int(11) UNSIGNED NOT NULL,
  `reset_pass_exp` int(11) UNSIGNED NOT NULL,
  `status` int(1) UNSIGNED NOT NULL,
  `active_register` int(1) UNSIGNED NOT NULL,
  `active` int(1) UNSIGNED NOT NULL,
  `active_code` varchar(255) NOT NULL,
  `email_hash` varchar(255) NOT NULL,
  `avatar` varchar(255) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `keep_me_time` int(11) UNSIGNED NOT NULL,
  `phone` varchar(255) NOT NULL,
  `gender` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `users` (`user_id`, `username`, `password`, `fullname`, `firstname`, `lastname`, `email`, `group_id`, `created_date`, `reset_pass_exp`, `status`, `active_register`, `active`, `active_code`, `email_hash`, `avatar`, `user_agent`, `keep_me_time`, `phone`, `gender`) VALUES
(1, 'admin', '$2y$10$9D7iPLrbFP3CZvfjp2jQjeT.Sn1j2hKjHWbBxdQP.UZ3iUFzdnGzi', 'Administrator', NULL, NULL, 'admin@admin.com', 1, 1, 0, 1, 1, 1, '', '', '', NULL, 0, '', 0),
(2, 'gabybob', '', '', NULL, NULL, 'gabybob@yahoo.fr', 3, 1556363652, 1556381652, 1, 0, 1, '11bc681f8419b1d304b9e0917e1cee17', 'db15f8361b486462dc68381ca934af2c', '', NULL, 0, '', 0);



-- Dumping structure for table nodcms_demo.visitors
DROP TABLE IF EXISTS `visitors`;
CREATE TABLE IF NOT EXISTS `visitors` (
  `visit_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `session_id` varchar(255) DEFAULT NULL,
  `user_id` int(10) unsigned DEFAULT NULL,
  `created_date` int(10) unsigned DEFAULT NULL,
  `updated_date` int(10) unsigned DEFAULT NULL,
  `count_view` int(10) unsigned DEFAULT NULL,
  `user_agent` text,
  `user_ip` varchar(50) DEFAULT NULL,
  `language_id` int(10) unsigned DEFAULT NULL,
  `language_code` varchar(2) DEFAULT NULL,
  `referrer` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `request_url` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`visit_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping structure for table nodcms_demo.statistic
CREATE TABLE IF NOT EXISTS `statistic` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `created_date` int(11) unsigned DEFAULT NULL,
  `statistic_date` int(11) unsigned DEFAULT NULL,
  `visitors` int(11) unsigned DEFAULT NULL,
  `visits` int(11) unsigned DEFAULT NULL,
  `popular_url` varchar(255) DEFAULT NULL,
  `popular_url_count` int(11) unsigned DEFAULT NULL,
  `popular_lang` int(10) unsigned DEFAULT NULL,
  `popular_lang_count` int(11) unsigned DEFAULT NULL,
  `popular_lang_percent` int(11) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Structure de la table `fo_forums`
--

CREATE TABLE IF NOT EXISTS `fo_forums` (
  `id` int(11) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL DEFAULT '',
  `slug` varchar(255) NOT NULL DEFAULT '',
  `description` varchar(255) DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Structure de la table `fo_options`
--

CREATE TABLE IF NOT EXISTS `fo_options` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL DEFAULT '',
  `value` varchar(255) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Structure de la table `fo_posts`
--

CREATE TABLE IF NOT EXISTS `fo_posts` (
  `id` int(11) UNSIGNED NOT NULL,
  `content` longtext NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `topic_id` int(11) UNSIGNED NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `statut` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;


--
-- Structure de la table `fo_topics`
--

CREATE TABLE IF NOT EXISTS `fo_topics` (
  `id` int(11) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL DEFAULT '',
  `slug` varchar(255) NOT NULL DEFAULT '',
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `forum_id` int(11) UNSIGNED NOT NULL,
  `is_sticky` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

--
-- Index pour la table `fo_forums`
--
ALTER TABLE `fo_forums`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `fo_options`
--
ALTER TABLE `fo_options`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `fo_posts`
--
ALTER TABLE `fo_posts`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `fo_topics`
--
ALTER TABLE `fo_topics`
  ADD PRIMARY KEY (`id`);
--
-- AUTO_INCREMENT pour la table `fo_forums`
--
ALTER TABLE `fo_forums`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

--
-- AUTO_INCREMENT pour la table `fo_options`
--
ALTER TABLE `fo_options`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `fo_posts`
--
ALTER TABLE `fo_posts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

--
-- AUTO_INCREMENT pour la table `fo_topics`
--
ALTER TABLE `fo_topics`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;
  
--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `id` int(11) NOT NULL,
  `company_name` varchar(255) NOT NULL,
  `service_charge_value` varchar(255) NOT NULL,
  `vat_charge_value` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `currency` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`id`, `company_name`, `service_charge_value`, `vat_charge_value`, `address`, `phone`, `country`, `message`, `currency`) VALUES
(1, 'BYOOS solutions', '30.00', '19.25', 'Yaoundé Cameroun', '00237696654756', 'Cameroun', 'Bonjour à toutes et à tous', 'XAF');
-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE `groups` (
  `group_id` int(11) NOT NULL,
  `group_name` varchar(255) NOT NULL,
  `permission` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`group_id`, `group_name`, `permission`) VALUES
(1, 'Administrator', 'a:40:{i:0;s:10:\"createUser\";i:1;s:10:\"updateUser\";i:2;s:8:\"viewUser\";i:3;s:10:\"deleteUser\";i:4;s:11:\"createGroup\";i:5;s:11:\"updateGroup\";i:6;s:9:\"viewGroup\";i:7;s:11:\"deleteGroup\";i:8;s:11:\"createBrand\";i:9;s:11:\"updateBrand\";i:10;s:9:\"viewBrand\";i:11;s:11:\"deleteBrand\";i:12;s:14:\"createCategory\";i:13;s:14:\"updateCategory\";i:14;s:12:\"viewCategory\";i:15;s:14:\"deleteCategory\";i:16;s:11:\"createStore\";i:17;s:11:\"updateStore\";i:18;s:9:\"viewStore\";i:19;s:11:\"deleteStore\";i:20;s:15:\"createAttribute\";i:21;s:15:\"updateAttribute\";i:22;s:13:\"viewAttribute\";i:23;s:15:\"deleteAttribute\";i:24;s:13:\"createProduct\";i:25;s:13:\"updateProduct\";i:26;s:11:\"viewProduct\";i:27;s:13:\"deleteProduct\";i:28;s:11:\"createOrder\";i:29;s:11:\"updateOrder\";i:30;s:9:\"viewOrder\";i:31;s:11:\"deleteOrder\";i:32;s:11:\"createForum\";i:33;s:11:\"updateForum\";i:34;s:9:\"viewForum\";i:35;s:11:\"deleteForum\";i:36;s:11:\"viewReports\";i:37;s:13:\"updateCompany\";i:38;s:11:\"viewProfile\";i:39;s:13:\"updateSetting\";}'),
(2, 'moderateur', 'a:4:{i:0;s:11:\"createForum\";i:1;s:11:\"updateForum\";i:2;s:9:\"viewForum\";i:3;s:11:\"deleteForum\";}');

--
-- Table structure for table `user_group`
--

CREATE TABLE `user_group` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `group_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_group`
--

INSERT INTO `user_group` (`id`, `user_id`, `group_id`) VALUES
(1, 1, 1),
(2, 2, 2);

  

-- --------------------------------------------------------

-- ZONE  STOCKS
-- Table structure for table `attributes`
--

CREATE TABLE `stk_attributes` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `active` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `attribute_value`
--

CREATE TABLE `stk_attribute_value` (
  `id` int(11) NOT NULL,
  `value` varchar(255) NOT NULL,
  `attribute_parent_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `attribute_value`
--

INSERT INTO `stk_attribute_value` (`id`, `value`, `attribute_parent_id`) VALUES
(5, 'Blue', 2),
(6, 'White', 2),
(7, 'M', 3),
(8, 'L', 3),
(9, 'Green', 2),
(10, 'Black', 2),
(12, 'Grey', 2),
(13, 'S', 3);

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `stk_brands` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `active` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `stk_categories` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `active` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `stk_orders` (
  `id` int(11) NOT NULL,
  `bill_no` varchar(255) NOT NULL,
  `customer_name` varchar(255) NOT NULL,
  `customer_address` varchar(255) NOT NULL,
  `customer_phone` varchar(255) NOT NULL,
  `date_time` varchar(255) NOT NULL,
  `gross_amount` varchar(255) NOT NULL,
  `service_charge_rate` varchar(255) NOT NULL,
  `service_charge` varchar(255) NOT NULL,
  `vat_charge_rate` varchar(255) NOT NULL,
  `vat_charge` varchar(255) NOT NULL,
  `net_amount` varchar(255) NOT NULL,
  `discount` varchar(255) NOT NULL,
  `paid_status` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `orders_item`
--

CREATE TABLE `stk_orders_item` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `qty` varchar(255) NOT NULL,
  `rate` varchar(255) NOT NULL,
  `amount` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `stk_products` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `sku` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `qty` varchar(255) NOT NULL,
  `image` text NOT NULL,
  `description` text NOT NULL,
  `attribute_value_id` text,
  `brand_id` text NOT NULL,
  `category_id` text NOT NULL,
  `store_id` int(11) NOT NULL,
  `availability` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `stores`
--

CREATE TABLE `stk_stores` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `active` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

-- Indexes for dumped tables
--

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);
  
--
-- Indexes for table `attributes`
--
ALTER TABLE `stk_attributes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `attribute_value`
--
ALTER TABLE `stk_attribute_value`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brands`
--
ALTER TABLE `stk_brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `stk_categories`
  ADD PRIMARY KEY (`id`);
--
-- Indexes for table `orders`
--
ALTER TABLE `stk_orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders_item`
--
ALTER TABLE `stk_orders_item`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `stk_products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stores`
--
ALTER TABLE `stk_stores`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--
--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`group_id`);
  
--
-- Indexes for table `user_group`
--
ALTER TABLE `user_group`
  ADD PRIMARY KEY (`id`);
  
--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);
--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `user_group`
--
ALTER TABLE `user_group`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
  --
-- AUTO_INCREMENT for table `user_group`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `attributes`
--
ALTER TABLE `stk_attributes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `attribute_value`
--
ALTER TABLE `stk_attribute_value`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `stk_brands`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `stk_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `stk_orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `orders_item`
--
ALTER TABLE `stk_orders_item`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `stk_products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `stores`
--
ALTER TABLE `stk_stores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
