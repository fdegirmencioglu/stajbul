-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 22 Mar 2015, 17:33:02
-- Sunucu sürümü: 5.6.21
-- PHP Sürümü: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Veritabanı: `stajbul`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `city`
--

CREATE TABLE IF NOT EXISTS `city` (
`id` int(10) unsigned NOT NULL,
  `sehir_adi` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `plaka_no` tinyint(4) NOT NULL,
  `telefon_kodu` int(11) NOT NULL,
  `row_number` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=84 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `city`
--

INSERT INTO `city` (`id`, `sehir_adi`, `plaka_no`, `telefon_kodu`, `row_number`) VALUES
(1, 'DÜZCE', 81, 380, 82),
(2, 'OSMANİYE', 80, 328, 81),
(3, 'KİLİS', 79, 348, 80),
(4, 'KARABÜK', 78, 370, 79),
(5, 'YALOVA', 77, 226, 78),
(6, 'IĞDIR', 76, 476, 77),
(7, 'ARDAHAN', 75, 478, 76),
(8, 'BARTIN', 74, 378, 75),
(9, 'ŞIRNAK', 73, 486, 74),
(10, 'BATMAN', 72, 488, 73),
(11, 'KIRIKKALE', 71, 318, 72),
(12, 'KARAMAN', 70, 338, 71),
(13, 'BAYBURT', 69, 458, 70),
(14, 'AKSARAY', 68, 382, 69),
(15, 'ZONGULDAK', 67, 372, 68),
(16, 'YOZGAT', 66, 354, 67),
(17, 'VAN', 65, 432, 66),
(18, 'UŞAK', 64, 276, 65),
(19, 'ŞANLIURFA', 63, 414, 64),
(20, 'TUNCELİ', 62, 428, 63),
(21, 'TRABZON', 61, 462, 62),
(22, 'TOKAT', 60, 356, 61),
(23, 'TEKİRDAĞ', 59, 282, 60),
(24, 'SİVAS', 58, 346, 59),
(25, 'SİNOP', 57, 368, 58),
(26, 'SİİRT', 56, 484, 57),
(27, 'SAMSUN', 55, 362, 56),
(28, 'SAKARYA', 54, 264, 55),
(29, 'RİZE', 53, 464, 54),
(30, 'ORDU', 52, 452, 53),
(31, 'NİĞDE', 51, 388, 52),
(32, 'NEVŞEHİR', 50, 384, 51),
(33, 'MUŞ', 49, 436, 50),
(34, 'MUĞLA', 48, 252, 49),
(35, 'MARDİN', 47, 482, 48),
(36, 'KAHRAMANMARAŞ', 46, 344, 47),
(37, 'MANİSA', 45, 236, 46),
(38, 'MALATYA', 44, 422, 45),
(39, 'KÜTAHYA', 43, 274, 44),
(40, 'KONYA', 42, 332, 43),
(41, 'KOCAELİ', 41, 262, 42),
(42, 'KIRŞEHİR', 40, 386, 41),
(43, 'KIRKLARELİ', 39, 288, 40),
(44, 'KAYSERİ', 38, 352, 39),
(45, 'KASTAMONU', 37, 366, 38),
(46, 'KARS', 36, 474, 37),
(47, 'İZMİR', 35, 232, 36),
(48, 'İSTANBUL (AVR),', 34, 212, 34),
(49, 'MERSİN', 33, 324, 33),
(50, 'ISPARTA', 32, 246, 32),
(51, 'HATAY', 31, 326, 31),
(52, 'HAKKARİ', 30, 438, 30),
(53, 'GÜMÜŞHANE', 29, 456, 29),
(54, 'GİRESUN', 28, 454, 28),
(55, 'GAZİANTEP', 27, 342, 27),
(56, 'ESKİŞEHİR', 26, 222, 26),
(57, 'ERZURUM', 25, 442, 25),
(58, 'ERZİNCAN', 24, 446, 24),
(59, 'ELAZIĞ', 23, 424, 23),
(60, 'EDİRNE', 22, 284, 22),
(61, 'DİYARBAKIR', 21, 412, 21),
(62, 'DENİZLİ', 20, 258, 20),
(63, 'ÇORUM', 19, 364, 19),
(64, 'ÇANKIRI', 18, 376, 18),
(65, 'ÇANAKKALE', 17, 286, 17),
(66, 'BURSA', 16, 224, 16),
(67, 'BURDUR', 15, 248, 15),
(68, 'BOLU', 14, 374, 14),
(69, 'BİTLİS', 13, 434, 13),
(70, 'BİNGÖL', 12, 426, 12),
(71, 'BİLECİK', 11, 228, 11),
(72, 'BALIKESİR', 10, 266, 10),
(73, 'AYDIN', 9, 256, 9),
(74, 'ARTVİN', 8, 466, 8),
(75, 'ANTALYA', 7, 242, 7),
(76, 'ANKARA', 6, 312, 6),
(77, 'AMASYA', 5, 358, 5),
(78, 'AĞRI', 4, 472, 4),
(79, 'AFYONKARAHİSAR', 3, 272, 3),
(80, 'ADIYAMAN', 2, 416, 2),
(81, 'ADANA', 1, 322, 1),
(83, 'İSTANBUL (ASYA)', 99, 216, 35);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `company_meta`
--

CREATE TABLE IF NOT EXISTS `company_meta` (
`id` int(10) unsigned NOT NULL,
  `user_id` int(11) NOT NULL,
  `yetkili_adi` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `yetkili_pozisyonu` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `kurulus_yili` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `calisan_sayisi` int(11) NOT NULL,
  `firma_adi` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `firma_bilgileri` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `sehir` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `ilce` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `telefon` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `fax` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `adress` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `sil` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `company_meta`
--

INSERT INTO `company_meta` (`id`, `user_id`, `yetkili_adi`, `yetkili_pozisyonu`, `kurulus_yili`, `calisan_sayisi`, `firma_adi`, `firma_bilgileri`, `sehir`, `ilce`, `telefon`, `fax`, `adress`, `sil`, `created_at`, `updated_at`) VALUES
(1, 4, 'Ferhat Firma', 'Yönetici', '2010', 3, 'Teknolojim', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean vehicula varius nunc a fringilla. Nunc bibendum molestie congue. Duis molestie sit amet magna eget egestas. Duis id finibus diam. Donec odio felis, rhoncus non tempor eu, sodales ac libero.', '76', 'Çankaya', '123 456 78 90', '123 456 78 90', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `groups`
--

CREATE TABLE IF NOT EXISTS `groups` (
`id` int(10) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `permissions` text COLLATE utf8_turkish_ci,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `groups`
--

INSERT INTO `groups` (`id`, `name`, `permissions`, `created_at`, `updated_at`) VALUES
(1, 'Managers', '{"managers":1,"managers.profile":1}', '2015-03-11 01:03:27', '2015-03-11 01:03:27'),
(2, 'Academicians', '{"academicians":1,"academicians.profile":1}', '2015-03-11 01:03:27', '2015-03-11 01:03:27'),
(3, 'Companies', '{"companies":1,"companies.profile":1}', '2015-03-11 01:03:27', '2015-03-11 01:03:27'),
(4, 'Students', '{"students":1,"students.profile":1}', '2015-03-11 01:03:27', '2015-03-11 01:03:27');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `logs`
--

CREATE TABLE IF NOT EXISTS `logs` (
`id` int(10) unsigned NOT NULL,
  `user_id` int(11) NOT NULL,
  `kullanici_adi` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `group_id` int(11) NOT NULL,
  `ip_address` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `tarih_saat` datetime NOT NULL,
  `yapilan_islem` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=64 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `logs`
--

INSERT INTO `logs` (`id`, `user_id`, `kullanici_adi`, `group_id`, `ip_address`, `tarih_saat`, `yapilan_islem`, `created_at`, `updated_at`) VALUES
(1, 3, 'Ferhat Değirmencioğlu', 1, '::1', '2015-03-18 14:39:27', 'Sisteme giriş yapıldı.', '2015-03-18 12:39:27', '2015-03-18 12:39:27'),
(2, 3, 'Ferhat Değirmencioğlu', 1, '::1', '2015-03-18 14:42:27', 'Oturumun kapatıldı.', '2015-03-18 12:42:27', '2015-03-18 12:42:27'),
(3, 3, 'Ferhat Değirmencioğlu', 1, '::1', '2015-03-18 14:42:34', 'Oturumun kapatıldı.', '2015-03-18 12:42:34', '2015-03-18 12:42:34'),
(4, 4, 'Firma Test', 3, '::1', '2015-03-18 14:42:44', 'Sisteme giriş yapıldı.', '2015-03-18 12:42:44', '2015-03-18 12:42:44'),
(5, 4, 'Firma Test', 3, '::1', '2015-03-18 14:43:02', 'Oturumun kapatıldı.', '2015-03-18 12:43:02', '2015-03-18 12:43:02'),
(6, 4, 'Firma Test', 3, '::1', '2015-03-18 14:43:06', 'Oturumun kapatıldı.', '2015-03-18 12:43:06', '2015-03-18 12:43:06'),
(7, 4, 'Firma Test', 3, '::1', '2015-03-18 14:43:08', 'Oturumun kapatıldı.', '2015-03-18 12:43:08', '2015-03-18 12:43:08'),
(8, 4, 'Firma Test', 3, '::1', '2015-03-18 14:43:09', 'Oturumun kapatıldı.', '2015-03-18 12:43:09', '2015-03-18 12:43:09'),
(9, 4, 'Firma Test', 3, '::1', '2015-03-18 14:43:09', 'Oturumun kapatıldı.', '2015-03-18 12:43:09', '2015-03-18 12:43:09'),
(10, 4, 'Firma Test', 3, '::1', '2015-03-18 14:43:10', 'Oturumun kapatıldı.', '2015-03-18 12:43:10', '2015-03-18 12:43:10'),
(11, 4, 'Firma Test', 3, '::1', '2015-03-18 14:43:34', 'Oturumun kapatıldı.', '2015-03-18 12:43:34', '2015-03-18 12:43:34'),
(12, 4, 'Firma Test', 3, '::1', '2015-03-18 14:43:35', 'Oturumun kapatıldı.', '2015-03-18 12:43:35', '2015-03-18 12:43:35'),
(13, 4, 'Firma Test', 3, '::1', '2015-03-18 14:43:35', 'Oturumun kapatıldı.', '2015-03-18 12:43:35', '2015-03-18 12:43:35'),
(14, 3, 'Ferhat Değirmencioğlu', 1, '::1', '2015-03-18 14:44:24', 'Sisteme giriş yapıldı.', '2015-03-18 12:44:24', '2015-03-18 12:44:24'),
(15, 3, 'Ferhat Değirmencioğlu', 1, '::1', '2015-03-18 14:47:01', 'Oturumun kapatıldı.', '2015-03-18 12:47:01', '2015-03-18 12:47:01'),
(16, 4, 'Firma Test', 3, '::1', '2015-03-18 14:47:20', 'Sisteme giriş yapıldı.', '2015-03-18 12:47:20', '2015-03-18 12:47:20'),
(17, 4, 'Firma Test', 3, '::1', '2015-03-18 14:47:31', 'Oturumun kapatıldı.', '2015-03-18 12:47:31', '2015-03-18 12:47:31'),
(18, 4, 'Firma Test', 3, '::1', '2015-03-18 14:47:34', 'Oturumun kapatıldı.', '2015-03-18 12:47:34', '2015-03-18 12:47:34'),
(19, 4, 'Firma Test', 3, '::1', '2015-03-18 14:47:35', 'Oturumun kapatıldı.', '2015-03-18 12:47:35', '2015-03-18 12:47:35'),
(20, 4, 'Firma Test', 3, '::1', '2015-03-18 14:47:36', 'Oturumun kapatıldı.', '2015-03-18 12:47:36', '2015-03-18 12:47:36'),
(21, 4, 'Firma Test', 3, '::1', '2015-03-18 14:47:37', 'Oturumun kapatıldı.', '2015-03-18 12:47:37', '2015-03-18 12:47:37'),
(22, 4, 'Firma Test', 3, '::1', '2015-03-18 14:47:37', 'Oturumun kapatıldı.', '2015-03-18 12:47:37', '2015-03-18 12:47:37'),
(23, 4, 'Firma Test', 3, '::1', '2015-03-18 14:47:38', 'Oturumun kapatıldı.', '2015-03-18 12:47:38', '2015-03-18 12:47:38'),
(24, 4, 'Firma Test', 3, '::1', '2015-03-18 14:47:38', 'Oturumun kapatıldı.', '2015-03-18 12:47:38', '2015-03-18 12:47:38'),
(25, 4, 'Firma Test', 3, '::1', '2015-03-18 14:47:39', 'Oturumun kapatıldı.', '2015-03-18 12:47:39', '2015-03-18 12:47:39'),
(26, 4, 'Firma Test', 3, '::1', '2015-03-18 14:47:39', 'Oturumun kapatıldı.', '2015-03-18 12:47:39', '2015-03-18 12:47:39'),
(27, 4, 'Firma Test', 3, '::1', '2015-03-18 14:47:39', 'Oturumun kapatıldı.', '2015-03-18 12:47:39', '2015-03-18 12:47:39'),
(28, 4, 'Firma Test', 3, '::1', '2015-03-18 14:48:58', 'Sisteme giriş yapıldı.', '2015-03-18 12:48:58', '2015-03-18 12:48:58'),
(29, 4, 'Firma Test', 3, '::1', '2015-03-18 14:49:09', 'Oturumun kapatıldı.', '2015-03-18 12:49:09', '2015-03-18 12:49:09'),
(30, 3, 'Ferhat Değirmencioğlu', 1, '::1', '2015-03-18 14:56:24', 'Sisteme giriş yapıldı.', '2015-03-18 12:56:24', '2015-03-18 12:56:24'),
(31, 3, 'Ferhat Değirmencioğlu', 1, '::1', '2015-03-18 14:56:29', 'Oturumun kapatıldı.', '2015-03-18 12:56:29', '2015-03-18 12:56:29'),
(32, 4, 'Firma Test', 3, '::1', '2015-03-18 14:56:39', 'Sisteme giriş yapıldı.', '2015-03-18 12:56:39', '2015-03-18 12:56:39'),
(33, 4, 'Firma Test', 3, '::1', '2015-03-18 14:56:56', 'Oturumun kapatıldı.', '2015-03-18 12:56:56', '2015-03-18 12:56:56'),
(34, 3, 'Ferhat Değirmencioğlu', 1, '::1', '2015-03-18 14:57:07', 'Sisteme giriş yapıldı.', '2015-03-18 12:57:07', '2015-03-18 12:57:07'),
(35, 3, 'Ferhat Değirmencioğlu', 1, '::1', '2015-03-18 15:15:59', 'Oturumun kapatıldı.', '2015-03-18 13:15:59', '2015-03-18 13:15:59'),
(36, 3, 'Ferhat Değirmencioğlu', 1, '::1', '2015-03-18 15:16:05', 'Sisteme giriş yapıldı.', '2015-03-18 13:16:05', '2015-03-18 13:16:05'),
(37, 3, 'Ferhat Değirmencioğlu', 1, '::1', '2015-03-18 15:16:13', 'Oturumun kapatıldı.', '2015-03-18 13:16:13', '2015-03-18 13:16:13'),
(38, 4, 'Firma Test', 3, '::1', '2015-03-18 15:16:22', 'Sisteme giriş yapıldı.', '2015-03-18 13:16:22', '2015-03-18 13:16:22'),
(39, 4, 'Firma Test', 3, '::1', '2015-03-18 15:16:28', 'Oturumun kapatıldı.', '2015-03-18 13:16:28', '2015-03-18 13:16:28'),
(40, 3, 'Ferhat Değirmencioğlu', 1, '::1', '2015-03-18 15:16:39', 'Sisteme giriş yapıldı.', '2015-03-18 13:16:39', '2015-03-18 13:16:39'),
(41, 3, 'Ferhat Değirmencioğlu', 1, '::1', '2015-03-18 15:33:08', 'Oturumun kapatıldı.', '2015-03-18 13:33:08', '2015-03-18 13:33:08'),
(42, 3, 'Ferhat Değirmencioğlu', 1, '::1', '2015-03-18 15:33:34', 'Sisteme giriş yapıldı.', '2015-03-18 13:33:34', '2015-03-18 13:33:34'),
(43, 3, 'Ferhat Değirmencioğlu', 1, '::1', '2015-03-18 15:33:58', 'Oturumun kapatıldı.', '2015-03-18 13:33:58', '2015-03-18 13:33:58'),
(44, 4, 'Firma Test', 3, '::1', '2015-03-18 15:34:06', 'Sisteme giriş yapıldı.', '2015-03-18 13:34:06', '2015-03-18 13:34:06'),
(45, 4, 'Firma Test', 3, '::1', '2015-03-18 15:36:26', 'Oturumun kapatıldı.', '2015-03-18 13:36:26', '2015-03-18 13:36:26'),
(46, 3, 'Ferhat Değirmencioğlu', 1, '::1', '2015-03-18 15:36:33', 'Sisteme giriş yapıldı.', '2015-03-18 13:36:33', '2015-03-18 13:36:33'),
(47, 3, 'Ferhat Değirmencioğlu', 1, '::1', '2015-03-21 11:09:01', 'Sisteme giriş yapıldı.', '2015-03-21 09:09:01', '2015-03-21 09:09:01'),
(48, 3, 'Ferhat Değirmencioğlu', 1, '::1', '2015-03-21 11:09:30', 'Oturumun kapatıldı.', '2015-03-21 09:09:30', '2015-03-21 09:09:30'),
(49, 4, 'Firma Test', 3, '::1', '2015-03-21 11:09:37', 'Sisteme giriş yapıldı.', '2015-03-21 09:09:37', '2015-03-21 09:09:37'),
(50, 4, 'Firma Test', 3, '::1', '2015-03-21 11:55:24', 'Oturumun kapatıldı.', '2015-03-21 09:55:24', '2015-03-21 09:55:24'),
(51, 3, 'Ferhat Değirmencioğlu', 1, '::1', '2015-03-21 11:55:32', 'Sisteme giriş yapıldı.', '2015-03-21 09:55:32', '2015-03-21 09:55:32'),
(52, 3, 'Ferhat Değirmencioğlu', 1, '::1', '2015-03-21 12:57:57', 'Oturumun kapatıldı.', '2015-03-21 10:57:57', '2015-03-21 10:57:57'),
(53, 4, 'Firma Test', 3, '::1', '2015-03-21 12:58:04', 'Sisteme giriş yapıldı.', '2015-03-21 10:58:04', '2015-03-21 10:58:04'),
(54, 4, 'Firma Test', 3, '::1', '2015-03-22 09:44:12', 'Sisteme giriş yapıldı.', '2015-03-22 07:44:12', '2015-03-22 07:44:12'),
(55, 4, 'Firma Test', 3, '::1', '2015-03-22 15:35:42', 'Sisteme giriş yapıldı.', '2015-03-22 13:35:42', '2015-03-22 13:35:42'),
(56, 4, 'Firma Test', 3, '::1', '2015-03-22 16:06:51', 'Oturumun kapatıldı.', '2015-03-22 14:06:51', '2015-03-22 14:06:51'),
(57, 4, 'Firma Test', 3, '::1', '2015-03-22 16:07:29', 'Sisteme giriş yapıldı.', '2015-03-22 14:07:29', '2015-03-22 14:07:29'),
(58, 4, 'Firma Test', 3, '::1', '2015-03-22 16:16:20', 'Oturumun kapatıldı.', '2015-03-22 14:16:20', '2015-03-22 14:16:20'),
(59, 4, 'Firma Test', 3, '::1', '2015-03-22 16:16:34', 'Sisteme giriş yapıldı.', '2015-03-22 14:16:34', '2015-03-22 14:16:34'),
(60, 4, 'Firma Test', 3, '::1', '2015-03-22 16:23:50', 'Oturumun kapatıldı.', '2015-03-22 14:23:50', '2015-03-22 14:23:50'),
(61, 3, 'Ferhat Değirmencioğlu', 1, '::1', '2015-03-22 16:23:57', 'Sisteme giriş yapıldı.', '2015-03-22 14:23:57', '2015-03-22 14:23:57'),
(62, 3, 'Ferhat Değirmencioğlu', 1, '::1', '2015-03-22 16:31:34', 'Oturumun kapatıldı.', '2015-03-22 14:31:34', '2015-03-22 14:31:34'),
(63, 4, 'Firma Test', 3, '::1', '2015-03-22 16:31:40', 'Sisteme giriş yapıldı.', '2015-03-22 14:31:40', '2015-03-22 14:31:40');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2012_12_06_225921_migration_cartalyst_sentry_install_users', 2),
('2012_12_06_225929_migration_cartalyst_sentry_install_groups', 2),
('2012_12_06_225945_migration_cartalyst_sentry_install_users_groups_pivot', 2),
('2012_12_06_225988_migration_cartalyst_sentry_install_throttle', 2),
('2015_01_30_154157_create_kullanici_table', 3),
('2015_02_04_095329_create_password_reminders_table', 3),
('2015_03_03_160104_add_username_to_users', 3),
('2015_03_03_160504_add_display_name_to_users', 3),
('2015_03_03_162304_add_website_to_users', 3),
('2015_03_04_110419_create_user_images_table', 4),
('2015_03_08_173422_create_company_meta_table', 5),
('2015_03_08_175119_create_city_table', 6),
('2015_03_10_070751_add_manager_confirmation_to_users_table', 7),
('2015_03_17_070554_create_logs_table', 8);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `password_resets`
--

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `throttle`
--

CREATE TABLE IF NOT EXISTS `throttle` (
`id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned DEFAULT NULL,
  `ip_address` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `attempts` int(11) NOT NULL DEFAULT '0',
  `suspended` tinyint(1) NOT NULL DEFAULT '0',
  `banned` tinyint(1) NOT NULL DEFAULT '0',
  `last_attempt_at` timestamp NULL DEFAULT NULL,
  `suspended_at` timestamp NULL DEFAULT NULL,
  `banned_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `throttle`
--

INSERT INTO `throttle` (`id`, `user_id`, `ip_address`, `attempts`, `suspended`, `banned`, `last_attempt_at`, `suspended_at`, `banned_at`) VALUES
(1, 1, '::1', 0, 0, 0, NULL, NULL, NULL),
(2, 3, '::1', 0, 0, 0, NULL, NULL, NULL),
(3, 4, '::1', 0, 0, 0, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`id` int(10) unsigned NOT NULL,
  `email` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `permissions` text COLLATE utf8_turkish_ci,
  `activated` tinyint(1) NOT NULL DEFAULT '0',
  `activation_code` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `activated_at` timestamp NULL DEFAULT NULL,
  `last_login` timestamp NULL DEFAULT NULL,
  `persist_code` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `reset_password_code` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `first_name` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `last_name` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `username` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `website` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `yonetici_onayi` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `permissions`, `activated`, `activation_code`, `activated_at`, `last_login`, `persist_code`, `reset_password_code`, `first_name`, `last_name`, `created_at`, `updated_at`, `username`, `display_name`, `website`, `yonetici_onayi`) VALUES
(3, 'fdegirmencioglu@gmail.com', '$2y$10$j18wodA6RaDPJB1SyZdfYuWvWc1dTibw6OyeamDcNHGDnY/vyjG5W', NULL, 1, NULL, NULL, '2015-03-22 14:23:57', '$2y$10$dwJ3kBaRRvrELxZTLhxgbOgy/NsmRJCfNJbMuDYjcBFmopNWA2tZu', NULL, 'Ferhat', 'DEĞİRMENCİOĞLU', '2015-03-11 01:16:06', '2015-03-22 14:23:57', 'Ferhat Değirmencioğlu', '3dmaster', '', 1),
(4, 'firma@mail.com', '$2y$10$lji6Bef01VNP1bc/vb290.kLQPpVpakP9nT8ws8.xmzHzTGC5Wqgu', NULL, 1, NULL, NULL, '2015-03-22 14:31:40', '$2y$10$WB3BF0O9tTlpZlkOgA4lS.4Wqep2/oemZn5mZseMy9/93AObxIETC', NULL, 'firma', 'Firmam', '2015-03-11 01:28:34', '2015-03-22 14:31:40', 'Firma Test', 'Firma A.Ş.', '', 1),
(5, 'yonetici01@mail.com', '$2y$10$rrMz4K0XCTvmGh3f6kd7fOUXgGg6E90WOoaURf6tSF.LzHNP4sTW6', NULL, 1, NULL, NULL, NULL, NULL, NULL, 'Yönetici 01', 'Test 01', '2015-03-18 00:41:38', '2015-03-18 00:41:38', 'Yönetici 01', 'Yntc 1', '', 1),
(6, 'abcd@yandex.com', '$2y$10$PAspEfxydiwWtvVxTYr3MOkmPHa8HkMaqUsM/yhgaR0rTe4hyVTqG', NULL, 1, NULL, NULL, NULL, NULL, NULL, 'Yönetici 02', 'Test Soyadı', '2015-03-18 00:42:54', '2015-03-18 13:38:15', 'ABCD Test', '123 ABC', '', 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `users_groups`
--

CREATE TABLE IF NOT EXISTS `users_groups` (
  `user_id` int(10) unsigned NOT NULL,
  `group_id` int(10) unsigned NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `users_groups`
--

INSERT INTO `users_groups` (`user_id`, `group_id`) VALUES
(3, 1),
(4, 3),
(5, 1),
(6, 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `user_images`
--

CREATE TABLE IF NOT EXISTS `user_images` (
`id` int(10) unsigned NOT NULL,
  `user_id` int(11) NOT NULL,
  `resim_adi` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `resim_yolu` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `user_images`
--

INSERT INTO `user_images` (`id`, `user_id`, `resim_adi`, `resim_yolu`, `created_at`, `updated_at`) VALUES
(8, 3, '1.png', 'public/uploads/', '2015-03-21 10:05:18', '2015-03-21 10:05:18'),
(9, 4, '3.png', 'public/uploads/', '2015-03-22 13:44:41', '2015-03-22 13:44:41');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `city`
--
ALTER TABLE `city`
 ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `company_meta`
--
ALTER TABLE `company_meta`
 ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `groups`
--
ALTER TABLE `groups`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `groups_name_unique` (`name`);

--
-- Tablo için indeksler `logs`
--
ALTER TABLE `logs`
 ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `password_resets`
--
ALTER TABLE `password_resets`
 ADD KEY `password_resets_email_index` (`email`), ADD KEY `password_resets_token_index` (`token`);

--
-- Tablo için indeksler `throttle`
--
ALTER TABLE `throttle`
 ADD PRIMARY KEY (`id`), ADD KEY `throttle_user_id_index` (`user_id`);

--
-- Tablo için indeksler `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `users_email_unique` (`email`), ADD KEY `users_activation_code_index` (`activation_code`), ADD KEY `users_reset_password_code_index` (`reset_password_code`);

--
-- Tablo için indeksler `users_groups`
--
ALTER TABLE `users_groups`
 ADD PRIMARY KEY (`user_id`,`group_id`);

--
-- Tablo için indeksler `user_images`
--
ALTER TABLE `user_images`
 ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `city`
--
ALTER TABLE `city`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=84;
--
-- Tablo için AUTO_INCREMENT değeri `company_meta`
--
ALTER TABLE `company_meta`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- Tablo için AUTO_INCREMENT değeri `groups`
--
ALTER TABLE `groups`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- Tablo için AUTO_INCREMENT değeri `logs`
--
ALTER TABLE `logs`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=64;
--
-- Tablo için AUTO_INCREMENT değeri `throttle`
--
ALTER TABLE `throttle`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- Tablo için AUTO_INCREMENT değeri `users`
--
ALTER TABLE `users`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- Tablo için AUTO_INCREMENT değeri `user_images`
--
ALTER TABLE `user_images`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
