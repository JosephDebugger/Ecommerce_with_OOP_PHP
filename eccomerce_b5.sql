-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 25, 2022 at 08:36 AM
-- Server version: 5.7.36
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eccomerce_b5`
--

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

DROP TABLE IF EXISTS `banners`;
CREATE TABLE IF NOT EXISTS `banners` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `title` varchar(256) COLLATE utf8_unicode_ci DEFAULT NULL,
  `picture` varchar(300) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `is_active` tinyint(3) NOT NULL DEFAULT '0',
  `is_deleted` tinyint(3) NOT NULL DEFAULT '0',
  `link` varchar(600) COLLATE utf8_unicode_ci DEFAULT NULL,
  `promotional_message` varchar(600) COLLATE utf8_unicode_ci DEFAULT NULL,
  `html_banner` varchar(600) COLLATE utf8_unicode_ci DEFAULT NULL,
  `is_draft` tinyint(4) NOT NULL DEFAULT '0',
  `max_display` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=33 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `title`, `picture`, `created_at`, `modified_at`, `is_active`, `is_deleted`, `link`, `promotional_message`, `html_banner`, `is_draft`, `max_display`) VALUES
(17, 'imgch22', 'IMG_1655796790_acoustic_guitar_anatomy.jpg', '2022-06-22 10:37:36', '2022-07-05 04:43:04', 0, 0, NULL, NULL, NULL, 0, NULL),
(16, 'abc', 'IMG_1655898012_279749643_425328556096933_8194139670078238735_n.jpg', '2022-06-22 10:37:36', '2022-06-22 11:40:12', 1, 1, NULL, NULL, NULL, 0, NULL),
(14, 'abc', 'IMG_1655704570_University.png', '2022-06-22 10:37:36', '2022-06-22 10:37:36', 0, 1, NULL, NULL, NULL, 0, NULL),
(27, 'asd', 'IMG_1656998008_279017597_1084264559099874_7789901484608898297_n.jpg', '2022-07-04 04:07:13', '2022-07-05 05:13:28', 1, 0, NULL, NULL, NULL, 0, NULL),
(18, 'ami', 'IMG_1655787381_acoustic_guitar_anatomy.jpg', '2022-06-22 10:37:36', '2022-06-22 10:37:36', 0, 0, NULL, NULL, NULL, 0, NULL),
(19, 'tmi', 'IMG_1655787476_acoustic_guitar_anatomy.jpg', '2022-06-22 10:37:36', '2022-06-22 10:37:36', 0, 0, NULL, NULL, NULL, 0, NULL),
(20, 'hey', NULL, '2022-06-22 10:37:36', '2022-06-22 10:37:36', 0, 0, NULL, NULL, NULL, 0, NULL),
(21, 'hey', 'IMG_1655787539_11231.JPG', '2022-06-22 10:37:36', '2022-06-22 10:37:36', 0, 0, NULL, NULL, NULL, 0, NULL),
(22, 'ami', NULL, '2022-06-22 10:37:36', '2022-06-22 10:37:36', 1, 0, NULL, NULL, NULL, 0, NULL),
(23, 'tmi', NULL, '2022-06-22 10:37:36', '2022-06-22 10:37:36', 0, 0, NULL, NULL, NULL, 0, NULL),
(24, 'third', 'IMG_1656997957_Screenshot 2022-06-29 002934.jpg', '2022-06-22 10:37:36', '2022-07-05 05:12:37', 1, 0, NULL, NULL, NULL, 0, NULL),
(26, 'abc', 'IMG_1655873136_my profile.jpeg', '2022-06-22 04:45:36', '2022-06-22 04:45:36', 1, 0, NULL, NULL, NULL, 0, NULL),
(28, 'joseph vai', 'IMG_1656909331_Port City International University_bKash Payment Flow.jpg', '2022-07-04 04:35:31', '2022-07-04 10:35:31', 0, 0, NULL, NULL, NULL, 0, NULL),
(29, 'my title', 'IMG_1656912341_Screenshot 2022-06-29 002934.jpg', '2022-07-04 05:25:41', '2022-07-05 04:48:42', 0, 0, NULL, NULL, NULL, 0, NULL),
(30, 'Banner 1', NULL, '2022-07-05 05:21:52', '2022-07-05 11:21:52', 1, 0, NULL, NULL, NULL, 0, NULL),
(31, 'jbkjbljb', 'IMG_1657121447_CSE 01406362 (Joseph Dias).png', '2022-07-06 15:30:47', '2022-07-06 21:30:47', 1, 0, NULL, NULL, NULL, 0, NULL),
(32, 'banner title', 'IMG_1657124448_Untitled.png', '2022-07-06 16:20:48', '2022-07-06 22:20:48', 1, 0, NULL, NULL, NULL, 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

DROP TABLE IF EXISTS `brands`;
CREATE TABLE IF NOT EXISTS `brands` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `links` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `is_draft` tinyint(1) NOT NULL DEFAULT '0',
  `is_active` tinyint(1) NOT NULL DEFAULT '0',
  `soft_delete` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(256) COLLATE utf8_unicode_ci DEFAULT NULL,
  `link` varchar(256) COLLATE utf8_unicode_ci DEFAULT NULL,
  `is_draft` tinyint(1) DEFAULT NULL,
  `is_active` tinyint(1) DEFAULT NULL,
  `soft_delete` tinyint(1) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `modified_at` datetime DEFAULT NULL,
  `picture` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `link`, `is_draft`, `is_active`, `soft_delete`, `created_at`, `modified_at`, `picture`) VALUES
(3, 'Joseph Dias', 'https://pipeline.com.bd/', 1, 1, NULL, NULL, NULL, NULL),
(12, 'chad', 'https://pipeline.com.bd/', 1, 1, NULL, NULL, NULL, NULL),
(5, 'Joseph Dias2', 'https://pipeline.com.bd/', NULL, 1, NULL, NULL, NULL, NULL),
(6, 'chad', 'https://pipeline.com.bd/', NULL, 1, NULL, NULL, NULL, NULL),
(7, 'chad', 'https://pipeline.com.bd/', 1, 0, NULL, NULL, NULL, NULL),
(8, 'chad', 'https://pipeline.com.bd/', 1, 1, NULL, NULL, NULL, NULL),
(9, 'chad', 'https://pipeline.com.bd/', 1, 1, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `labels`
--

DROP TABLE IF EXISTS `labels`;
CREATE TABLE IF NOT EXISTS `labels` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `picture` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
CREATE TABLE IF NOT EXISTS `orders` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_is` int(11) DEFAULT NULL,
  `qty` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

DROP TABLE IF EXISTS `pages`;
CREATE TABLE IF NOT EXISTS `pages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `link` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `title` varchar(256) COLLATE utf8_unicode_ci DEFAULT NULL,
  `is_active` tinyint(3) NOT NULL DEFAULT '0',
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `picture` varchar(256) COLLATE utf8_unicode_ci DEFAULT NULL,
  `brand_id` int(11) DEFAULT NULL,
  `lebel_id` int(11) DEFAULT NULL,
  `short_description` text COLLATE utf8_unicode_ci,
  `total_sales` int(11) DEFAULT NULL,
  `product_type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `is_new` tinyint(4) NOT NULL DEFAULT '0',
  `cost` float DEFAULT NULL,
  `mrp` float DEFAULT NULL,
  `special_price` float DEFAULT NULL,
  `soft_delete` tinyint(1) NOT NULL DEFAULT '0',
  `is_sraft` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `title`, `is_active`, `created_at`, `modified_at`, `picture`, `brand_id`, `lebel_id`, `short_description`, `total_sales`, `product_type`, `is_new`, `cost`, `mrp`, `special_price`, `soft_delete`, `is_sraft`) VALUES
(6, 'product12', 1, '2022-06-22 12:27:07', '2022-07-14 08:10:28', 'IMG_1655879809_rafi sign (3).jpg', NULL, NULL, NULL, NULL, '', 0, NULL, NULL, NULL, 0, 0),
(2, 'products', 1, '2022-06-22 12:27:07', '2022-06-22 06:37:14', 'IMG_1655879834_279017597_1084264559099874_7789901484608898297_n.jpg', NULL, NULL, NULL, NULL, '', 0, NULL, NULL, NULL, 0, 0),
(4, 'pruducts 3', 0, '2022-06-22 12:27:07', '2022-06-22 06:44:41', '', NULL, NULL, NULL, NULL, '', 0, NULL, NULL, NULL, 0, 0),
(7, 'abc', 1, '2022-06-22 06:30:35', '2022-07-05 06:25:00', 'IMG_1655879435_my profile (2).jpeg', NULL, NULL, NULL, NULL, '', 0, NULL, NULL, NULL, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `full_name` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_name` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `soft_delete` tinyint(3) NOT NULL DEFAULT '0',
  `is_draft` int(20) NOT NULL DEFAULT '0',
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `modified_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `password` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=39 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `full_name`, `user_name`, `email`, `phone`, `soft_delete`, `is_draft`, `created_at`, `modified_at`, `password`) VALUES
(3, 'Joseph Dias', 'vsdv', 'josephdias012@gmail.com', '01829 151173', 1, 0, '2022-07-06 05:40:38', '2022-07-06 11:40:38', 'af7018bce3402d595aa0d0a2799da15b'),
(4, 'Joseph Dias', 'vsdv', 'josephdias012@gmail.com', '01829 151173', 1, 0, '2022-07-06 05:42:37', '2022-07-06 11:42:37', 'af7018bce3402d595aa0d0a2799da15b'),
(5, 'Joseph Dias', 'vsdv', 'josephdias012@gmail.com', '01829 151173', 0, 0, '2022-07-06 05:42:43', '2022-07-06 11:42:43', '5e64fe04bfd8363b6c74ea86f5c867f1'),
(6, 'Joseph Dias', 'vsdv', 'josephdias012@gmail.com', '01829 151173', 0, 0, '2022-07-06 05:44:29', '2022-07-06 11:44:29', '5e64fe04bfd8363b6c74ea86f5c867f1'),
(7, 'Joseph Dias', 'vsdv', 'josephdias012@gmail.com', '01829 151173', 0, 0, '2022-07-06 05:44:32', '2022-07-06 11:44:32', '5e64fe04bfd8363b6c74ea86f5c867f1'),
(8, 'Joseph Dias', 'vsdv', 'josephdias012@gmail.com', '01829 151173', 0, 0, '2022-07-06 05:45:01', '2022-07-06 11:45:01', '5e64fe04bfd8363b6c74ea86f5c867f1'),
(9, 'Joseph Dias', 'vsdv', 'josephdias012@gmail.com', '01829 151173', 0, 0, '2022-07-06 05:54:36', '2022-07-06 11:54:36', '0b6b2db0a6ef2c40ddb96d273dc6a4b0'),
(10, 'Joseph Dias', 'vsdv', 'josephdias012@gmail.com', '01829 151173', 1, 0, '2022-07-06 06:01:10', '2022-07-06 12:01:10', '0b6b2db0a6ef2c40ddb96d273dc6a4b0'),
(11, 'Joseph Dias', 'vsdv', 'josephdias012@gmail.com', '01829 151173', 0, 0, '2022-07-06 06:01:13', '2022-07-06 12:01:13', '0b6b2db0a6ef2c40ddb96d273dc6a4b0'),
(12, 'Joseph Dias', 'dedqwed', 'josephdias012@gmail.com', '01829 151173', 0, 0, '2022-07-06 06:01:32', '2022-07-06 12:01:32', '1def044a7b9cea31d306462ae8812a66'),
(16, 'Joseph Dias', '.knlkn', 'josephdias012@gmail.com', '01829 151173', 0, 0, '2022-07-06 15:24:21', '2022-07-06 21:24:21', 'd43aab203eef71bd7d0fa6eea084341c'),
(13, 'QSQ', '', 'QWQ@ASDA', 'QW', 1, 0, '2022-07-06 06:39:25', '2022-07-06 12:39:25', '37e70ef6a9fe6c2c6effb4ebbf4e70e3'),
(14, 'Joseph Dias', '', 'josephdias012@gmail.com', '01829 151173', 0, 0, '2022-07-06 06:49:05', '2022-07-06 12:49:05', '15398c6f84fb5f2b3e3a5a807c6892e0'),
(15, 'Joseph Dias', '', 'josephdias012@gmail.com', '01829 151173', 0, 0, '2022-07-06 06:56:00', '2022-07-06 12:56:00', 'b7e1de9db2f3271a867f0341a994ff51'),
(17, 'Joseph Dias', '.knlkn', 'josephdias012@gmail.com', '01829 151173', 0, 0, '2022-07-06 15:28:43', '2022-07-06 21:28:43', 'd43aab203eef71bd7d0fa6eea084341c'),
(18, 'Joseph Dias', '.knlkn', 'josephdias012@gmail.com', '01829 151173', 0, 0, '2022-07-06 15:28:49', '2022-07-06 21:28:49', 'caa4299dec7c234cbb350f5ef7511091'),
(19, 'Joseph Dias', '.knlkn', 'josephdias012@gmail.com', '01829 151173', 0, 0, '2022-07-06 15:29:36', '2022-07-06 21:29:36', 'caa4299dec7c234cbb350f5ef7511091'),
(20, 'Joseph Dias', '.knlkn', 'josephdias012@gmail.com', '01829 151173', 0, 0, '2022-07-06 15:29:41', '2022-07-06 21:29:41', '1c66a75e6c31f0cc41258a2df257a18e'),
(21, 'Joseph Dias', 'dedqwed', 'josephdias012@gmail.com', '01829 151173', 0, 0, '2022-07-06 15:39:07', '2022-07-06 21:39:07', 'a6f089af1362ec351d924a34ae5250c5'),
(22, 'werwer', 'erwer', 'rwerwer@wewet.com', 'werwerwer', 0, 0, '2022-07-06 15:40:08', '2022-07-06 21:40:08', '1c1f66691d343e4bf0e1b383de458129'),
(23, 'werwer', 'erwer', 'rwerwer@wewet.com', 'werwerwer', 0, 0, '2022-07-06 15:41:38', '2022-07-06 21:41:38', '601813fbf9b1cb2d68a6991a3757cd4d'),
(24, 'Joseph Dias', 'dedqwed', 'josephdias012@gmail.com', '01829 151173', 0, 0, '2022-07-06 15:42:54', '2022-07-06 21:42:54', '74c6ee9c191ca440291930eef9843bbf'),
(25, 'Joseph Dias', 'dedqwed', 'josephdias012@gmail.com', '01829 151173', 0, 0, '2022-07-06 15:44:49', '2022-07-06 21:44:49', '74c6ee9c191ca440291930eef9843bbf'),
(26, 'Joseph Dias', 'dedqwed', 'josephdias012@gmail.com', '01829 151173', 0, 0, '2022-07-06 15:50:29', '2022-07-06 21:50:29', '74c6ee9c191ca440291930eef9843bbf'),
(27, 'Joseph Dias', 'vsdv', 'josephdias012@gmail.com', '01829 151173', 0, 0, '2022-07-06 15:50:38', '2022-07-06 21:50:38', '646346758d305ac9279286e79624ad2c'),
(28, 'Joseph Dias', 'vsdv', 'josephdias012@gmail.com', '01829 151173', 0, 0, '2022-07-06 15:51:03', '2022-07-06 21:51:03', '646346758d305ac9279286e79624ad2c'),
(29, 'Joseph Dias', 'vsdv', 'josephdias012@gmail.com', '01829 151173', 0, 0, '2022-07-06 15:51:07', '2022-07-06 21:51:07', 'ced141265b96c037a3cab9dee0f3b4fa'),
(30, 'Joseph Dias', 'vsdv', 'josephdias012@gmail.com', '01829 151173', 0, 0, '2022-07-06 15:52:20', '2022-07-06 21:52:20', 'ced141265b96c037a3cab9dee0f3b4fa'),
(31, 'Joseph Dias', 'vsdv', 'josephdias012@gmail.com', '01829 151173', 0, 0, '2022-07-06 15:52:27', '2022-07-06 21:52:27', 'ced141265b96c037a3cab9dee0f3b4fa'),
(32, 'Joseph Dias', 'vsdv', 'josephdias012@gmail.com', '01829 151173', 0, 0, '2022-07-06 15:54:24', '2022-07-06 21:54:24', 'ced141265b96c037a3cab9dee0f3b4fa'),
(33, 'Joseph Dias', 'vsdv', 'josephdias012@gmail.com', '01829 151173', 0, 0, '2022-07-06 15:55:35', '2022-07-06 21:55:35', 'ced141265b96c037a3cab9dee0f3b4fa'),
(34, 'Joseph Dias', 'vsdv', 'josephdias012@gmail.com', '01829 151173', 0, 0, '2022-07-06 15:55:39', '2022-07-06 21:55:39', 'ced141265b96c037a3cab9dee0f3b4fa'),
(35, 'Joseph Dias', 'vsdv', 'josephdias012@gmail.com', '01829 151173', 0, 0, '2022-07-06 15:55:42', '2022-07-06 21:55:42', 'df70df7a415d835f0aa7377c0f408f92'),
(36, 'Joseph Dias', 'vsdv', 'josephdias012@gmail.com', '01829 151173', 0, 0, '2022-07-06 16:19:52', '2022-07-06 22:19:52', '3c13c56ca28071e38eb7dbd493a1e7b6'),
(37, 'Joseph Dias', 'vsdv', 'josephdias012@gmail.com', '01829 151173', 0, 0, '2022-07-06 16:43:36', '2022-07-06 22:43:36', '8c0eb36eb97bc136d5acd2a387e6297c'),
(38, 'Joseph Dias', 'dfwdfs', 'josephdias012@gmail.com', '01829 151173', 0, 0, '2022-07-07 04:02:03', '2022-07-07 10:02:03', '73a90acaae2b1ccc0e969709665bc62f');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
