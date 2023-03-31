-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 03, 2023 at 01:05 PM
-- Server version: 8.0.31
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mentor`
--

-- --------------------------------------------------------

--
-- Table structure for table `aboutus`
--

DROP TABLE IF EXISTS `aboutus`;
CREATE TABLE IF NOT EXISTS `aboutus` (
  `id` int NOT NULL AUTO_INCREMENT,
  `top_title` varchar(60) NOT NULL,
  `top_desc` varchar(255) NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `description` longtext NOT NULL,
  `img` varchar(255) NOT NULL,
  `status` int NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `aboutus`
--

INSERT INTO `aboutus` (`id`, `top_title`, `top_desc`, `title`, `description`, `img`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Pero Pero', '                                                                                                                                    Ninja technique', 'Teska bajey', 'asd', 'shiii.png1673428176.png', 1, '2023-01-04 12:21:36', '2023-01-04 12:21:36'),
(2, ' lyqul@mailinator.com', ' lyqul@mailinator.com', '', 'Culpa velit similiqu', 'S.png1672823352.png', 1, '2023-01-04 12:22:02', '2023-01-04 12:22:02');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `phone` varchar(20) NOT NULL,
  `email` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `password` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `status` int NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `phone`, `email`, `password`, `status`, `created_at`, `updated_at`) VALUES
(7, 'yassssss', '9806630977', 'admin@gmail.com', '202cb962ac59075b964b07152d234b70', 1, '2023-01-24 09:15:40', '2023-01-24 09:15:40');

-- --------------------------------------------------------

--
-- Table structure for table `contact_frontend`
--

DROP TABLE IF EXISTS `contact_frontend`;
CREATE TABLE IF NOT EXISTS `contact_frontend` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `subjects` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `messages` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `status` int NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `contact_frontend`
--

INSERT INTO `contact_frontend` (`id`, `name`, `email`, `subjects`, `messages`, `status`, `created_at`, `updated_at`) VALUES
(2, '', 'kanyz@mailinator.com', 'Enim fugit quis vol', 'Quidem labore ad ist', 1, '2023-01-22 07:40:26', '2023-01-22 07:40:26'),
(3, '', 'kanyz@mailinator.com', 'Enim fugit quis vol', 'Quidem labore ad ist', 1, '2023-01-22 07:40:30', '2023-01-22 07:40:30'),
(4, 'Imelda May', 'wicokupajy@mailinator.com', 'Explicabo Hic aliqu', 'Consequuntur atque q', 1, '2023-01-22 07:40:33', '2023-01-22 07:40:33');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

DROP TABLE IF EXISTS `courses`;
CREATE TABLE IF NOT EXISTS `courses` (
  `id` int NOT NULL AUTO_INCREMENT,
  `img` varchar(255) NOT NULL,
  `title` varchar(60) NOT NULL,
  `fee` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `seats` varchar(255) NOT NULL,
  `time` varchar(50) NOT NULL,
  `status` int NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `img`, `title`, `fee`, `description`, `seats`, `time`, `status`, `created_at`, `updated_at`) VALUES
(12, 'cartman.png1674549858.png', ' lakexup@mailinator.com', '22', 'Harum quae dolorum e', '91', 'ximesi@mailinator.com', 1, '2023-01-24 10:16:26', '2023-01-24 10:16:26'),
(10, 'shiii.png1673428176.png', ' science', '890', 'Proident porro null', '78', 'bajomegofa@mailinator.com', 1, '2023-01-11 10:19:22', '2023-01-11 10:19:22'),
(11, 'koba.png1673428160.png', ' math', '73', 'Consectetur magni la', '97', 'qalisu@mailinator.com', 1, '2023-01-12 10:01:47', '2023-01-12 10:01:47');

-- --------------------------------------------------------

--
-- Table structure for table `course_features`
--

DROP TABLE IF EXISTS `course_features`;
CREATE TABLE IF NOT EXISTS `course_features` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(60) NOT NULL,
  `img` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `status` int NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `course_features`
--

INSERT INTO `course_features` (`id`, `title`, `img`, `description`, `status`, `created_at`, `updated_at`) VALUES
(3, 'qerogyda@mailinator.com', 'shiii.png1673428176.png', 'Sit non non rerum s', 1, '2023-01-27 05:20:34', '2023-01-27 05:20:34');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

DROP TABLE IF EXISTS `events`;
CREATE TABLE IF NOT EXISTS `events` (
  `id` int NOT NULL AUTO_INCREMENT,
  `img` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `date` varchar(60) NOT NULL,
  `description` longtext NOT NULL,
  `status` int NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `img`, `title`, `date`, `description`, `status`, `created_at`, `updated_at`) VALUES
(1, 'koba.png1673428160.png', 'fubihe@mailinator.com', '1983-05-08', ' Obcaecati dolorem vo ', 1, '2023-01-04 18:49:22', '2023-01-04 18:49:22'),
(2, 'profile.jpg1672860883.jpg', 'lofyrakut@mailinator.com', '1992-09-25', 'Est reiciendis et ea', 1, '2023-01-04 18:58:05', '2023-01-04 18:58:05');

-- --------------------------------------------------------

--
-- Table structure for table `facilities`
--

DROP TABLE IF EXISTS `facilities`;
CREATE TABLE IF NOT EXISTS `facilities` (
  `id` int NOT NULL AUTO_INCREMENT,
  `icon` varchar(255) NOT NULL,
  `title` varchar(60) NOT NULL,
  `status` int NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `facilities`
--

INSERT INTO `facilities` (`id`, `icon`, `title`, `status`, `created_at`, `updated_at`) VALUES
(1, 'fa-light fa-bread-slice', 'dd', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'fa-brands fa-facebook', 'sdw', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `facts`
--

DROP TABLE IF EXISTS `facts`;
CREATE TABLE IF NOT EXISTS `facts` (
  `id` int NOT NULL AUTO_INCREMENT,
  `numbers` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `title` varchar(60) NOT NULL,
  `status` int NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `facts`
--

INSERT INTO `facts` (`id`, `numbers`, `title`, `status`, `created_at`, `updated_at`) VALUES
(4, '32325', 'main', 1, '2023-01-06 16:10:59', '2023-01-06 16:10:59'),
(3, '3232', 'nooooo', 1, '2023-01-06 16:08:54', '2023-01-06 16:08:54'),
(5, '4562', 'ming', 1, '2023-01-06 16:11:14', '2023-01-06 16:11:14'),
(6, '5656', 'master', 1, '2023-01-06 16:11:22', '2023-01-06 16:11:22'),
(7, '54648', 'nani', 1, '2023-01-06 16:11:29', '2023-01-06 16:11:29');

-- --------------------------------------------------------

--
-- Table structure for table `features`
--

DROP TABLE IF EXISTS `features`;
CREATE TABLE IF NOT EXISTS `features` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(60) NOT NULL,
  `description` longtext NOT NULL,
  `status` int NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `features`
--

INSERT INTO `features` (`id`, `title`, `description`, `status`, `created_at`, `updated_at`) VALUES
(5, 'vetupi@mailinator.com', 'asdwasdwasdwasd', 1, '2023-01-24 09:28:28', '2023-01-24 09:28:28'),
(4, 'majypam@mailinator.com', 'Aspernatur laborum ', 1, '2023-01-07 11:03:21', '2023-01-07 11:03:21');

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

DROP TABLE IF EXISTS `files`;
CREATE TABLE IF NOT EXISTS `files` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `description` longtext NOT NULL,
  `filelink` varchar(255) NOT NULL,
  `type` varchar(10) NOT NULL,
  `status` int NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `files`
--

INSERT INTO `files` (`id`, `title`, `description`, `filelink`, `type`, `status`, `created_at`, `updated_at`) VALUES
(10, 'lapeh@mailinator.com', 'Corporis excepteur u', 'profile.jpg1672860883.jpg', 'jpg', 1, '2023-01-04 19:34:43', '2023-01-04 19:34:43'),
(11, 'asd', 'adwa', 'koba.png1673428160.png', 'png', 1, '2023-01-11 09:09:20', '2023-01-11 09:09:20'),
(12, 'shii', 'pop', 'shiii.png1673428176.png', 'png', 1, '2023-01-11 09:09:36', '2023-01-11 09:09:36'),
(13, 'jumitezy@mailinator.com', 'Fugiat repellendus ', 'cartman.png1674549858.png', 'png', 1, '2023-01-24 08:44:18', '2023-01-24 08:44:18');

-- --------------------------------------------------------

--
-- Table structure for table `galleries`
--

DROP TABLE IF EXISTS `galleries`;
CREATE TABLE IF NOT EXISTS `galleries` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `status` int NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `galleries`
--

INSERT INTO `galleries` (`id`, `title`, `img`, `status`, `created_at`, `updated_at`) VALUES
(1, 'zawogoxeh@mailinator.com', 'koba.png1673428160.png', 1, '2023-01-24 10:50:02', '2023-01-24 10:50:02');

-- --------------------------------------------------------

--
-- Table structure for table `results`
--

DROP TABLE IF EXISTS `results`;
CREATE TABLE IF NOT EXISTS `results` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `date` varchar(50) NOT NULL,
  `description` longtext NOT NULL,
  `status` int NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `results`
--

INSERT INTO `results` (`id`, `title`, `date`, `description`, `status`, `created_at`, `updated_at`) VALUES
(5, 'samyculo@mailinator.com', '1988-11-29', 'kakoxupimu@mailinator.com', 1, '2023-01-04 19:17:37', '2023-01-04 19:17:37'),
(4, 'cyhor@mailinator.com', '1983-11-01', 'pynibex@mailinator.com', 1, '2023-01-04 19:11:26', '2023-01-04 19:11:26'),
(6, 'pyjur@mailinator.com', '2018-09-26', 'sagaxe@mailinator.com', 1, '2023-01-04 19:18:46', '2023-01-04 19:18:46');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

DROP TABLE IF EXISTS `services`;
CREATE TABLE IF NOT EXISTS `services` (
  `id` int NOT NULL AUTO_INCREMENT,
  `icon` varchar(255) NOT NULL,
  `title` varchar(60) NOT NULL,
  `description` longtext NOT NULL,
  `status` int NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `icon`, `title`, `description`, `status`, `created_at`, `updated_at`) VALUES
(3, 'fa-brands fa-facebook', 'Facebook link', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel similique minima et, voluptatum suscipit odio ad ipsum, autem distinctio voluptas sed sunt? Quia, ea assumenda.', 1, '2023-01-07 10:50:27', '2023-01-07 10:50:27'),
(2, 'fa-light fa-bread-slice', 'bread', 'This is bread', 1, '2023-01-07 10:49:20', '2023-01-07 10:49:20');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

DROP TABLE IF EXISTS `settings`;
CREATE TABLE IF NOT EXISTS `settings` (
  `id` int NOT NULL AUTO_INCREMENT,
  `site_key` varchar(255) NOT NULL,
  `site_value` varchar(255) NOT NULL,
  `status` int NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `site_key`, `site_value`, `status`, `created_at`, `updated_at`) VALUES
(1, 'asdwasdwa', 'relamafok@mailinator.com', 1, '2023-01-04 19:30:29', '2023-01-04 19:30:29');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

DROP TABLE IF EXISTS `sliders`;
CREATE TABLE IF NOT EXISTS `sliders` (
  `id` int NOT NULL AUTO_INCREMENT,
  `img` text NOT NULL,
  `title` varchar(60) NOT NULL,
  `description` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `status` int NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `img`, `title`, `description`, `status`, `created_at`, `updated_at`) VALUES
(7, 'koba.png1673428160.png', 'sdaw', 'asd', 1, '2023-01-06 15:58:24', '2023-01-06 15:58:24');

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

DROP TABLE IF EXISTS `teachers`;
CREATE TABLE IF NOT EXISTS `teachers` (
  `id` int NOT NULL AUTO_INCREMENT,
  `img` varchar(255) NOT NULL,
  `name` varchar(60) NOT NULL,
  `post` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `status` int NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`id`, `img`, `name`, `post`, `description`, `status`, `created_at`, `updated_at`) VALUES
(1, 'koba.png1673428160.png', 'hyceh@mailinator.com', 'nyxalyz@mailinator.com', 'Impedit enim ea inc', 1, '2023-01-04 18:28:44', '2023-01-04 18:28:44'),
(2, 'profile.jpg1672860883.jpg', 'vavizyqaka@mailinator.com', 'vorybyqim@mailinator.com', 'Ut minim et reprehen', 1, '2023-01-24 10:36:38', '2023-01-24 10:36:38');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

DROP TABLE IF EXISTS `testimonials`;
CREATE TABLE IF NOT EXISTS `testimonials` (
  `id` int NOT NULL AUTO_INCREMENT,
  `img` varchar(255) NOT NULL,
  `name` varchar(60) NOT NULL,
  `post` varchar(255) NOT NULL,
  `messages` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `status` int NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `img`, `name`, `post`, `messages`, `status`, `created_at`, `updated_at`) VALUES
(7, 'profile.jpg1672860883.jpg', ' wobifyra@mailinator.com', 'zinypatet@mailinator.com', 'Saepe est sunt numqu', 1, '2023-01-24 11:37:03', '2023-01-24 11:37:03'),
(8, 'koba.png1673428160.png', ' zuwehemyju@mailinator.com', 'novan@mailinator.com', 'In laborum autem ut ', 1, '2023-01-24 11:37:11', '2023-01-24 11:37:11'),
(6, 'shiii.png1673428176.png', ' hyletati@mailinator.com', 'xuxedeca@mailinator.com', 'Quia animi enim ita', 1, '2023-01-24 10:36:28', '2023-01-24 10:36:28'),
(9, 'cartman.png1674549858.png', ' makyh@mailinator.com', 'wipa@mailinator.com', 'Expedita molestias m', 1, '2023-01-24 11:37:18', '2023-01-24 11:37:18');

-- --------------------------------------------------------

--
-- Table structure for table `whychooseus`
--

DROP TABLE IF EXISTS `whychooseus`;
CREATE TABLE IF NOT EXISTS `whychooseus` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(60) NOT NULL,
  `description` varchar(60) NOT NULL,
  `status` int NOT NULL,
  `created_at` int NOT NULL,
  `updated_at` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `whychooseus`
--

INSERT INTO `whychooseus` (`id`, `title`, `description`, `status`, `created_at`, `updated_at`) VALUES
(4, 'why', 'adwawdasdwadad awdasdwa', 0, 0, 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
