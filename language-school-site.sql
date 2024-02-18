-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 18, 2024 at 09:45 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `language-school-site`
--
CREATE DATABASE IF NOT EXISTS `language-school-site` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `language-school-site`;

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `des` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `title`, `des`) VALUES
(1, 'صدر دانش', 'کانون زبان ایران به عنوان معتبر ترین قدیمی ترین و بزرگترین موسسه اموزش زبان های خارجی در ایران از سال 1304 تحت عنوان انجمن ایران و امریکا در تهران شروع به فعالیت کرده است و کلای های ان ده از 1330 در چهارراه جمهوری راه اندازی شد و در سال 1344 و \\س از افزایش زبان اموز در محلی جدید در خیابان وصال شیرازی به اموزش زبان انگلیسی ادامه یافت'),
(2, 'بقایی', 'کانون زبان ایران به عنوان معتبر ترین قدیمی ترین و بزرگترین موسسه اموزش زبان های خارجی در ایران از سال 1304 تحت عنوان انجمن ایران و امریکا در تهران شروع به فعالیت کرده است و کلای های ان ده از 1330 در چهارراه جمهوری راه اندازی شد و در سال 1344 و \\س از افزایش زبان اموز در محلی جدید در خیابان وصال شیرازی به اموزش زبان انگلیسی ادامه یافت'),
(3, 'دبستان', 'کانون زبان ایران به عنوان معتبر ترین قدیمی ترین و بزرگترین موسسه اموزش زبان های خارجی در ایران از سال 1304 تحت عنوان انجمن ایران و امریکا در تهران شروع به فعالیت کرده است و کلای های ان ده از 1330 در چهارراه جمهوری راه اندازی شد و در سال 1344 و \\س از افزایش زبان اموز در محلی جدید در خیابان وصال شیرازی به اموزش زبان انگلیسی ادامه یافت');

-- --------------------------------------------------------

--
-- Table structure for table `box`
--

CREATE TABLE `box` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `teacher` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `language` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `number` int(11) NOT NULL,
  `isshow` varchar(255) NOT NULL,
  `mode` varchar(255) NOT NULL,
  `img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `box`
--

INSERT INTO `box` (`id`, `title`, `teacher`, `category`, `language`, `date`, `number`, `isshow`, `mode`, `img`) VALUES
(1, 'دوره اموزش کتاب summit 1', 'علی ملکوتی خواه', 'A', 'English', '1402/12/20', 8, 'true', 'sadr', '/opt/lampp/htdocs/Language-School-Site/Admin/Assets/php/../img/box/1708287262box64.png'),
(2, 'دوره اموزش کتاب summit 1', 'علی ملکوتی خواه', 'A', 'English', '1402/12/20', 8, 'true', 'sadr', '/opt/lampp/htdocs/Language-School-Site/Admin/Assets/php/../img/box/1708287325box13.png'),
(3, 'دوره اموزش کتاب summit 1', 'علی ملکوتی خواه', 'A', 'English', '1402/12/20', 8, 'true', 'sadr', '/opt/lampp/htdocs/Language-School-Site/Admin/Assets/php/../img/box/1708287349box70.png'),
(4, 'دوره اموزش کتاب summit 1', 'علی ملکوتی خواه', 'A', 'English', '1402/12/20', 8, 'true', 'sadr', '/opt/lampp/htdocs/Language-School-Site/Admin/Assets/php/../img/box/1708287378box23.png'),
(5, 'دوره اموزش کتاب summit 1', 'علی ملکوتی خواه', 'A', 'English', '1402/12/20', 8, 'true', 'sadr', '/opt/lampp/htdocs/Language-School-Site/Admin/Assets/php/../img/box/1708287398box31.png'),
(6, 'دوره اموزش کتاب summit 1', 'علی ملکوتی خواه', 'A', 'English', '1402/12/20', 8, 'true', 'sadr', '/opt/lampp/htdocs/Language-School-Site/Admin/Assets/php/../img/box/1708287423box26.png'),
(7, 'دوره اموزش کتاب summit 1', 'علی ملکوتی خواه', 'A', 'English', '1402/12/20', 8, 'false', 'sadr', '/opt/lampp/htdocs/Language-School-Site/Admin/Assets/php/../img/box/1708287450box55.png'),
(8, 'دوره اموزش کتاب summit 1', 'علی ملکوتی خواه', 'A', 'English', '1402/12/20', 8, 'false', 'sadr', '/opt/lampp/htdocs/Language-School-Site/Admin/Assets/php/../img/box/1708287489box15.png'),
(9, 'دوره اموزش کتاب summit 1', 'علی ملکوتی خواه', 'A', 'English', '1402/12/20', 8, 'false', 'sadr', '/opt/lampp/htdocs/Language-School-Site/Admin/Assets/php/../img/box/1708287510box22.png'),
(10, 'دوره اموزش کتاب summit 1', 'علی ملکوتی خواه', 'A', 'English', '1402/12/20', 8, 'true', 'baghai', '/opt/lampp/htdocs/Language-School-Site/Admin/Assets/php/../img/box/1708287537box17.png'),
(11, 'دوره اموزش کتاب summit 1', 'علی ملکوتی خواه', 'A', 'English', '1402/12/20', 8, 'true', 'baghai', '/opt/lampp/htdocs/Language-School-Site/Admin/Assets/php/../img/box/1708287566box16.png'),
(12, 'دوره اموزش کتاب summit 1', 'علی ملکوتی خواه', 'A', 'English', '1402/12/20', 8, 'true', 'baghai', '/opt/lampp/htdocs/Language-School-Site/Admin/Assets/php/../img/box/1708287594box96.png'),
(13, 'دوره اموزش کتاب summit 1', 'علی ملکوتی خواه', 'A', 'English', '1403/12/20', 8, 'true', 'baghai', '/opt/lampp/htdocs/Language-School-Site/Admin/Assets/php/../img/box/1708287621box20.png'),
(14, 'دوره اموزش کتاب summit 1', 'علی ملکوتی خواه', 'A', 'English', '1402/12/20', 8, 'true', 'baghai', '/opt/lampp/htdocs/Language-School-Site/Admin/Assets/php/../img/box/1708288077box35.png'),
(15, 'دوره اموزش کتاب summit 1', 'علی ملکوتی خواه', 'A', 'English', '1403/12/20', 8, 'true', 'baghai', '/opt/lampp/htdocs/Language-School-Site/Admin/Assets/php/../img/box/1708288114box41.png'),
(16, 'دوره اموزش کتاب summit 1', 'علی ملکوتی خواه', 'A', 'English', '1402/12/20', 8, 'false', 'baghai', '/opt/lampp/htdocs/Language-School-Site/Admin/Assets/php/../img/box/1708288149box24.png'),
(17, 'دوره اموزش کتاب summit 1', 'علی ملکوتی خواه', 'A', 'English', '1402/12/20', 8, 'false', 'baghai', '/opt/lampp/htdocs/Language-School-Site/Admin/Assets/php/../img/box/1708288170box88.png'),
(18, 'دوره اموزش کتاب summit 1', 'علی ملکوتی خواه', 'A', 'English', '1402/12/20', 8, 'false', 'baghai', '/opt/lampp/htdocs/Language-School-Site/Admin/Assets/php/../img/box/1708288194box29.png');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `des` longtext NOT NULL,
  `img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `title`, `des`, `img`) VALUES
(1, 'علی ملکوتی خواه', 'کانون زبان ایران به عنوان معتبر ترین قدیمی ترین و بزرگترین موسسه اموزش زبان های خارجی در ایران از سال 1304 تحت عنوان انجمن ایران و امریکا در تهران شروع به فعالیت کرده است و کلای های ان ده از 1330 در چهارراه جمهوری راه اندازی شد و در سال 1344 و \\س از افزایش زبان اموز در محلی جدید در خیابان وصال شیرازی به اموزش زبان انگلیسی ادامه یافت', '/opt/lampp/htdocs/Language-School-Site/Admin/Assets/php/../img/comments/1708288859comments51.png'),
(2, 'علی ملکوتی خواه', 'کانون زبان ایران به عنوان معتبر ترین قدیمی ترین و بزرگترین موسسه اموزش زبان های خارجی در ایران از سال 1304 تحت عنوان انجمن ایران و امریکا در تهران شروع به فعالیت کرده است و کلای های ان ده از 1330 در چهارراه جمهوری راه اندازی شد و در سال 1344 و \\س از افزایش زبان اموز در محلی جدید در خیابان وصال شیرازی به اموزش زبان انگلیسی ادامه یافت', '/opt/lampp/htdocs/Language-School-Site/Admin/Assets/php/../img/comments/1708288873comments45.png'),
(3, 'علی ملکوتی خواه', 'کانون زبان ایران به عنوان معتبر ترین قدیمی ترین و بزرگترین موسسه اموزش زبان های خارجی در ایران از سال 1304 تحت عنوان انجمن ایران و امریکا در تهران شروع به فعالیت کرده است و کلای های ان ده از 1330 در چهارراه جمهوری راه اندازی شد و در سال 1344 و \\س از افزایش زبان اموز در محلی جدید در خیابان وصال شیرازی به اموزش زبان انگلیسی ادامه یافت', '/opt/lampp/htdocs/Language-School-Site/Admin/Assets/php/../img/comments/1708288887comments14.png'),
(4, 'علی ملکوتی خواه', 'کانون زبان ایران به عنوان معتبر ترین قدیمی ترین و بزرگترین موسسه اموزش زبان های خارجی در ایران از سال 1304 تحت عنوان انجمن ایران و امریکا در تهران شروع به فعالیت کرده است و کلای های ان ده از 1330 در چهارراه جمهوری راه اندازی شد و در سال 1344 و \\س از افزایش زبان اموز در محلی جدید در خیابان وصال شیرازی به اموزش زبان انگلیسی ادامه یافت', '/opt/lampp/htdocs/Language-School-Site/Admin/Assets/php/../img/comments/1708288907comments14.png');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `des` longtext NOT NULL,
  `isshow` varchar(255) NOT NULL,
  `img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `des`, `isshow`, `img`) VALUES
(1, 'دوره جدید', 'مدرسه سه زبان انگلیسی آلمانی و فرانسه دارای مدارک بین المللی با رتبه بالا مدرسه سه زبان انگلیسی آلمانی و فرانسه دارای مدارک بین المللی با رتبه بالا مدرسه سه زبان انگلیسی آلمانی و فرانسهدارای مدارک بین المللی با رتبه بالا مدرسه سه زبان انگلیسی آلمانی و فرانسهدارای مدارک بین المللی با رتبه بالا مدرسه سه زبان انگلیسی آلمانی و فرانسهدارای مدارک بین المللی با رتبه بالا مدرسه سه زبان انگلیسی آلمانی و فرانسهدارای مدارک بین المللی با رتبه بالا مدرسه سه زبان انگلیسی آلمانی و فرانسه \r\n                       ', 'true', '/opt/lampp/htdocs/Language-School-Site/Admin/Assets/php/../img/news/1708288622news38.png'),
(2, 'دوره جدید', 'مدرسه سه زبان انگلیسی آلمانی و فرانسه دارای مدارک بین المللی با رتبه بالا مدرسه سه زبان انگلیسی آلمانی و فرانسه دارای مدارک بین المللی با رتبه بالا مدرسه سه زبان انگلیسی آلمانی و فرانسهدارای مدارک بین المللی با رتبه بالا مدرسه سه زبان انگلیسی آلمانی و فرانسهدارای مدارک بین المللی با رتبه بالا مدرسه سه زبان انگلیسی آلمانی و فرانسهدارای مدارک بین المللی با رتبه بالا مدرسه سه زبان انگلیسی آلمانی و فرانسهدارای مدارک بین المللی با رتبه بالا مدرسه سه زبان انگلیسی آلمانی و فرانسه \r\n                       ', 'true', '/opt/lampp/htdocs/Language-School-Site/Admin/Assets/php/../img/news/1708288633news19.png'),
(3, 'دوره جدید', 'مدرسه سه زبان انگلیسی آلمانی و فرانسه دارای مدارک بین المللی با رتبه بالا مدرسه سه زبان انگلیسی آلمانی و فرانسه دارای مدارک بین المللی با رتبه بالا مدرسه سه زبان انگلیسی آلمانی و فرانسهدارای مدارک بین المللی با رتبه بالا مدرسه سه زبان انگلیسی آلمانی و فرانسهدارای مدارک بین المللی با رتبه بالا مدرسه سه زبان انگلیسی آلمانی و فرانسهدارای مدارک بین المللی با رتبه بالا مدرسه سه زبان انگلیسی آلمانی و فرانسهدارای مدارک بین المللی با رتبه بالا مدرسه سه زبان انگلیسی آلمانی و فرانسه \r\n                       ', 'true', '/opt/lampp/htdocs/Language-School-Site/Admin/Assets/php/../img/news/1708288648news87.png'),
(4, 'دوره جدید', 'مدرسه سه زبان انگلیسی آلمانی و فرانسه دارای مدارک بین المللی با رتبه بالا مدرسه سه زبان انگلیسی آلمانی و فرانسه دارای مدارک بین المللی با رتبه بالا مدرسه سه زبان انگلیسی آلمانی و فرانسهدارای مدارک بین المللی با رتبه بالا مدرسه سه زبان انگلیسی آلمانی و فرانسهدارای مدارک بین المللی با رتبه بالا مدرسه سه زبان انگلیسی آلمانی و فرانسهدارای مدارک بین المللی با رتبه بالا مدرسه سه زبان انگلیسی آلمانی و فرانسهدارای مدارک بین المللی با رتبه بالا مدرسه سه زبان انگلیسی آلمانی و فرانسه \r\n                       ', 'false', '/opt/lampp/htdocs/Language-School-Site/Admin/Assets/php/../img/news/1708288664news56.png');

-- --------------------------------------------------------

--
-- Table structure for table `personal`
--

CREATE TABLE `personal` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `des` longtext NOT NULL,
  `institutions` varchar(255) NOT NULL,
  `mode` varchar(255) NOT NULL,
  `isshow` varchar(255) NOT NULL,
  `img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `personal`
--

INSERT INTO `personal` (`id`, `name`, `des`, `institutions`, `mode`, `isshow`, `img`) VALUES
(1, 'علی ملکوتی خواه', 'مدرسه سه زبان انگلیسی آلمانی و فرانسه دارای مدارک بین المللی با رتبه بالا مدرسه سه زبان انگلیسی آلمانی و فرانسه دارای مدارک بین المللی با رتبه بالا مدرسه سه زبان انگلیسی آلمانی و فرانسهدارای مدارک بین المللی با رتبه بالا مدرسه سه زبان انگلیسی آلمانی و فرانسهدارای مدارک بین المللی با رتبه بالا مدرسه سه زبان انگلیسی آلمانی و فرانسهدارای مدارک بین المللی با رتبه بالا مدرسه سه زبان انگلیسی آلمانی و فرانسهدارای مدارک بین المللی با رتبه بالا مدرسه سه زبان انگلیسی آلمانی و فرانسه \r\n                       ', 'sadr', 'teacher', 'true', '/opt/lampp/htdocs/Language-School-Site/Admin/Assets/php/../img/personal/1708288266personal21.png'),
(2, 'علی ملکوتی خواه', 'مدرسه سه زبان انگلیسی آلمانی و فرانسه دارای مدارک بین المللی با رتبه بالا مدرسه سه زبان انگلیسی آلمانی و فرانسه دارای مدارک بین المللی با رتبه بالا مدرسه سه زبان انگلیسی آلمانی و فرانسهدارای مدارک بین المللی با رتبه بالا مدرسه سه زبان انگلیسی آلمانی و فرانسهدارای مدارک بین المللی با رتبه بالا مدرسه سه زبان انگلیسی آلمانی و فرانسهدارای مدارک بین المللی با رتبه بالا مدرسه سه زبان انگلیسی آلمانی و فرانسهدارای مدارک بین المللی با رتبه بالا مدرسه سه زبان انگلیسی آلمانی و فرانسه \r\n                       ', 'sadr', 'teacher', 'true', '/opt/lampp/htdocs/Language-School-Site/Admin/Assets/php/../img/personal/1708288284personal68.png'),
(3, 'علی ملکوتی خواه', 'مدرسه سه زبان انگلیسی آلمانی و فرانسه دارای مدارک بین المللی با رتبه بالا مدرسه سه زبان انگلیسی آلمانی و فرانسه دارای مدارک بین المللی با رتبه بالا مدرسه سه زبان انگلیسی آلمانی و فرانسهدارای مدارک بین المللی با رتبه بالا مدرسه سه زبان انگلیسی آلمانی و فرانسهدارای مدارک بین المللی با رتبه بالا مدرسه سه زبان انگلیسی آلمانی و فرانسهدارای مدارک بین المللی با رتبه بالا مدرسه سه زبان انگلیسی آلمانی و فرانسهدارای مدارک بین المللی با رتبه بالا مدرسه سه زبان انگلیسی آلمانی و فرانسه \r\n                       ', 'sadr', 'teacher', 'true', '/opt/lampp/htdocs/Language-School-Site/Admin/Assets/php/../img/personal/1708288300personal20.png'),
(4, 'علی ملکوتی خواه', 'مدرسه سه زبان انگلیسی آلمانی و فرانسه دارای مدارک بین المللی با رتبه بالا مدرسه سه زبان انگلیسی آلمانی و فرانسه دارای مدارک بین المللی با رتبه بالا مدرسه سه زبان انگلیسی آلمانی و فرانسهدارای مدارک بین المللی با رتبه بالا مدرسه سه زبان انگلیسی آلمانی و فرانسهدارای مدارک بین المللی با رتبه بالا مدرسه سه زبان انگلیسی آلمانی و فرانسهدارای مدارک بین المللی با رتبه بالا مدرسه سه زبان انگلیسی آلمانی و فرانسهدارای مدارک بین المللی با رتبه بالا مدرسه سه زبان انگلیسی آلمانی و فرانسه \r\n                       ', 'sadr', 'teacher', 'true', '/opt/lampp/htdocs/Language-School-Site/Admin/Assets/php/../img/personal/1708288383personal57.png'),
(5, 'علی ملکوتی خواه', 'مدرسه سه زبان انگلیسی آلمانی و فرانسه دارای مدارک بین المللی با رتبه بالا مدرسه سه زبان انگلیسی آلمانی و فرانسه دارای مدارک بین المللی با رتبه بالا مدرسه سه زبان انگلیسی آلمانی و فرانسهدارای مدارک بین المللی با رتبه بالا مدرسه سه زبان انگلیسی آلمانی و فرانسهدارای مدارک بین المللی با رتبه بالا مدرسه سه زبان انگلیسی آلمانی و فرانسهدارای مدارک بین المللی با رتبه بالا مدرسه سه زبان انگلیسی آلمانی و فرانسهدارای مدارک بین المللی با رتبه بالا مدرسه سه زبان انگلیسی آلمانی و فرانسه \r\n                       ', 'baghai', 'teacher', 'true', '/opt/lampp/htdocs/Language-School-Site/Admin/Assets/php/../img/personal/1708288413personal16.png'),
(6, 'علی ملکوتی خواه', 'مدرسه سه زبان انگلیسی آلمانی و فرانسه دارای مدارک بین المللی با رتبه بالا مدرسه سه زبان انگلیسی آلمانی و فرانسه دارای مدارک بین المللی با رتبه بالا مدرسه سه زبان انگلیسی آلمانی و فرانسهدارای مدارک بین المللی با رتبه بالا مدرسه سه زبان انگلیسی آلمانی و فرانسهدارای مدارک بین المللی با رتبه بالا مدرسه سه زبان انگلیسی آلمانی و فرانسهدارای مدارک بین المللی با رتبه بالا مدرسه سه زبان انگلیسی آلمانی و فرانسهدارای مدارک بین المللی با رتبه بالا مدرسه سه زبان انگلیسی آلمانی و فرانسه \r\n                       ', 'baghai', 'teacher', 'true', '/opt/lampp/htdocs/Language-School-Site/Admin/Assets/php/../img/personal/1708288428personal45.png'),
(7, 'علی ملکوتی خواه', 'مدرسه سه زبان انگلیسی آلمانی و فرانسه دارای مدارک بین المللی با رتبه بالا مدرسه سه زبان انگلیسی آلمانی و فرانسه دارای مدارک بین المللی با رتبه بالا مدرسه سه زبان انگلیسی آلمانی و فرانسهدارای مدارک بین المللی با رتبه بالا مدرسه سه زبان انگلیسی آلمانی و فرانسهدارای مدارک بین المللی با رتبه بالا مدرسه سه زبان انگلیسی آلمانی و فرانسهدارای مدارک بین المللی با رتبه بالا مدرسه سه زبان انگلیسی آلمانی و فرانسهدارای مدارک بین المللی با رتبه بالا مدرسه سه زبان انگلیسی آلمانی و فرانسه \r\n                       ', 'baghai', 'teacher', 'false', '/opt/lampp/htdocs/Language-School-Site/Admin/Assets/php/../img/personal/1708288458personal91.png'),
(8, 'علی ملکوتی خواه', 'مدرسه سه زبان انگلیسی آلمانی و فرانسه دارای مدارک بین المللی با رتبه بالا مدرسه سه زبان انگلیسی آلمانی و فرانسه دارای مدارک بین المللی با رتبه بالا مدرسه سه زبان انگلیسی آلمانی و فرانسهدارای مدارک بین المللی با رتبه بالا مدرسه سه زبان انگلیسی آلمانی و فرانسهدارای مدارک بین المللی با رتبه بالا مدرسه سه زبان انگلیسی آلمانی و فرانسهدارای مدارک بین المللی با رتبه بالا مدرسه سه زبان انگلیسی آلمانی و فرانسهدارای مدارک بین المللی با رتبه بالا مدرسه سه زبان انگلیسی آلمانی و فرانسه \r\n                       ', 'sadr', 'teacher', 'false', '/opt/lampp/htdocs/Language-School-Site/Admin/Assets/php/../img/personal/1708288475personal59.png'),
(9, 'علی ملکوتی خواه', 'مدرسه سه زبان انگلیسی آلمانی و فرانسه دارای مدارک بین المللی با رتبه بالا مدرسه سه زبان انگلیسی آلمانی و فرانسه دارای مدارک بین المللی با رتبه بالا مدرسه سه زبان انگلیسی آلمانی و فرانسهدارای مدارک بین المللی با رتبه بالا مدرسه سه زبان انگلیسی آلمانی و فرانسهدارای مدارک بین المللی با رتبه بالا مدرسه سه زبان انگلیسی آلمانی و فرانسهدارای مدارک بین المللی با رتبه بالا مدرسه سه زبان انگلیسی آلمانی و فرانسهدارای مدارک بین المللی با رتبه بالا مدرسه سه زبان انگلیسی آلمانی و فرانسه \r\n                       ', 'sadr', 'personal', 'true', '/opt/lampp/htdocs/Language-School-Site/Admin/Assets/php/../img/personal/1708288503personal85.png'),
(10, 'علی ملکوتی خواه', 'مدرسه سه زبان انگلیسی آلمانی و فرانسه دارای مدارک بین المللی با رتبه بالا مدرسه سه زبان انگلیسی آلمانی و فرانسه دارای مدارک بین المللی با رتبه بالا مدرسه سه زبان انگلیسی آلمانی و فرانسهدارای مدارک بین المللی با رتبه بالا مدرسه سه زبان انگلیسی آلمانی و فرانسهدارای مدارک بین المللی با رتبه بالا مدرسه سه زبان انگلیسی آلمانی و فرانسهدارای مدارک بین المللی با رتبه بالا مدرسه سه زبان انگلیسی آلمانی و فرانسهدارای مدارک بین المللی با رتبه بالا مدرسه سه زبان انگلیسی آلمانی و فرانسه \r\n                       ', 'sadr', 'personal', 'true', '/opt/lampp/htdocs/Language-School-Site/Admin/Assets/php/../img/personal/1708288516personal93.png'),
(11, 'علی ملکوتی خواه', 'مدرسه سه زبان انگلیسی آلمانی و فرانسه دارای مدارک بین المللی با رتبه بالا مدرسه سه زبان انگلیسی آلمانی و فرانسه دارای مدارک بین المللی با رتبه بالا مدرسه سه زبان انگلیسی آلمانی و فرانسهدارای مدارک بین المللی با رتبه بالا مدرسه سه زبان انگلیسی آلمانی و فرانسهدارای مدارک بین المللی با رتبه بالا مدرسه سه زبان انگلیسی آلمانی و فرانسهدارای مدارک بین المللی با رتبه بالا مدرسه سه زبان انگلیسی آلمانی و فرانسهدارای مدارک بین المللی با رتبه بالا مدرسه سه زبان انگلیسی آلمانی و فرانسه \r\n                       ', 'sadr', 'personal', 'false', '/opt/lampp/htdocs/Language-School-Site/Admin/Assets/php/../img/personal/1708288532personal78.png'),
(12, 'علی ملکوتی خواه', 'مدرسه سه زبان انگلیسی آلمانی و فرانسه دارای مدارک بین المللی با رتبه بالا مدرسه سه زبان انگلیسی آلمانی و فرانسه دارای مدارک بین المللی با رتبه بالا مدرسه سه زبان انگلیسی آلمانی و فرانسهدارای مدارک بین المللی با رتبه بالا مدرسه سه زبان انگلیسی آلمانی و فرانسهدارای مدارک بین المللی با رتبه بالا مدرسه سه زبان انگلیسی آلمانی و فرانسهدارای مدارک بین المللی با رتبه بالا مدرسه سه زبان انگلیسی آلمانی و فرانسهدارای مدارک بین المللی با رتبه بالا مدرسه سه زبان انگلیسی آلمانی و فرانسه \r\n                       ', 'baghai', 'personal', 'true', '/opt/lampp/htdocs/Language-School-Site/Admin/Assets/php/../img/personal/1708288559personal70.png'),
(13, 'علی ملکوتی خواه', 'مدرسه سه زبان انگلیسی آلمانی و فرانسه دارای مدارک بین المللی با رتبه بالا مدرسه سه زبان انگلیسی آلمانی و فرانسه دارای مدارک بین المللی با رتبه بالا مدرسه سه زبان انگلیسی آلمانی و فرانسهدارای مدارک بین المللی با رتبه بالا مدرسه سه زبان انگلیسی آلمانی و فرانسهدارای مدارک بین المللی با رتبه بالا مدرسه سه زبان انگلیسی آلمانی و فرانسهدارای مدارک بین المللی با رتبه بالا مدرسه سه زبان انگلیسی آلمانی و فرانسهدارای مدارک بین المللی با رتبه بالا مدرسه سه زبان انگلیسی آلمانی و فرانسه \r\n                       ', 'baghai', 'personal', 'true', '/opt/lampp/htdocs/Language-School-Site/Admin/Assets/php/../img/personal/1708288582personal12.png'),
(14, 'علی ملکوتی خواه', 'مدرسه سه زبان انگلیسی آلمانی و فرانسه دارای مدارک بین المللی با رتبه بالا مدرسه سه زبان انگلیسی آلمانی و فرانسه دارای مدارک بین المللی با رتبه بالا مدرسه سه زبان انگلیسی آلمانی و فرانسهدارای مدارک بین المللی با رتبه بالا مدرسه سه زبان انگلیسی آلمانی و فرانسهدارای مدارک بین المللی با رتبه بالا مدرسه سه زبان انگلیسی آلمانی و فرانسهدارای مدارک بین المللی با رتبه بالا مدرسه سه زبان انگلیسی آلمانی و فرانسهدارای مدارک بین المللی با رتبه بالا مدرسه سه زبان انگلیسی آلمانی و فرانسه \r\n                       ', 'baghai', 'personal', 'false', '/opt/lampp/htdocs/Language-School-Site/Admin/Assets/php/../img/personal/1708288597personal61.png');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id` int(11) NOT NULL,
  `mode` varchar(255) NOT NULL,
  `img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `mode`, `img`) VALUES
(1, 'slider', '/opt/lampp/htdocs/Language-School-Site/Admin/Assets/php/../img/slider/1708288702slider100.png'),
(2, 'slider', '/opt/lampp/htdocs/Language-School-Site/Admin/Assets/php/../img/slider/1708288736slider10.jpg'),
(3, 'slider', '/opt/lampp/htdocs/Language-School-Site/Admin/Assets/php/../img/slider/1708288746slider33.jpg'),
(4, 'about', '/opt/lampp/htdocs/Language-School-Site/Admin/Assets/php/../img/slider/1708288762slider97.png');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'sadr-danesh', '$2y$10$LV6.e3ElVPZUICwYYq.Jzeq7xl0A1aI0FdnjL1k1cbwr2WS06JvsG');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `box`
--
ALTER TABLE `box`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal`
--
ALTER TABLE `personal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `box`
--
ALTER TABLE `box`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `personal`
--
ALTER TABLE `personal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
