-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1:3306
-- Üretim Zamanı: 25 Ara 2022, 16:30:29
-- Sunucu sürümü: 5.7.36
-- PHP Sürümü: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `winnersgym2`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `antrenman`
--

DROP TABLE IF EXISTS `antrenman`;
CREATE TABLE IF NOT EXISTS `antrenman` (
  `antrenmanid` varchar(3) COLLATE utf8_turkish_ci NOT NULL,
  `antrenmanadi` varchar(55) COLLATE utf8_turkish_ci NOT NULL,
  PRIMARY KEY (`antrenmanid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `antrenman`
--

INSERT INTO `antrenman` (`antrenmanid`, `antrenmanadi`) VALUES
('1', 'Full Body Antrenman Programı'),
('2', 'Split Antrenman Programı'),
('3', 'Çift Bölge Antrenman Programı'),
('4', 'Kardiyo'),
('5', 'Kadınlar için alt vücut odaklı');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `cinsiyet`
--

DROP TABLE IF EXISTS `cinsiyet`;
CREATE TABLE IF NOT EXISTS `cinsiyet` (
  `cinsiyetid` varchar(3) COLLATE utf8_turkish_ci NOT NULL,
  `cinsiyetadi` varchar(55) COLLATE utf8_turkish_ci NOT NULL,
  PRIMARY KEY (`cinsiyetid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `cinsiyet`
--

INSERT INTO `cinsiyet` (`cinsiyetid`, `cinsiyetadi`) VALUES
('1', 'Erkek'),
('2', 'Kadın');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `supplementler`
--

DROP TABLE IF EXISTS `supplementler`;
CREATE TABLE IF NOT EXISTS `supplementler` (
  `supplementid` varchar(3) COLLATE utf8_turkish_ci NOT NULL,
  `supplementad` varchar(55) COLLATE utf8_turkish_ci NOT NULL,
  PRIMARY KEY (`supplementid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `supplementler`
--

INSERT INTO `supplementler` (`supplementid`, `supplementad`) VALUES
('1', 'Whey Protein'),
('2', 'Gainer'),
('3', 'Kreatin'),
('4', 'Pre-Workout'),
('5', 'Bcaa++'),
('6', 'L-Karnitin');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `supplement_uye`
--

DROP TABLE IF EXISTS `supplement_uye`;
CREATE TABLE IF NOT EXISTS `supplement_uye` (
  `supplementid` varchar(3) COLLATE utf8_turkish_ci NOT NULL,
  `uye_id` varchar(3) COLLATE utf8_turkish_ci NOT NULL,
  KEY `supplementid` (`supplementid`),
  KEY `uye_id` (`uye_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `supplement_uye`
--

INSERT INTO `supplement_uye` (`supplementid`, `uye_id`) VALUES
('3', '1'),
('1', '9'),
('3', '9'),
('2', '8'),
('3', '8'),
('1', '7'),
('3', '7'),
('1', '6'),
('2', '5'),
('6', '48'),
('6', '44'),
('5', '42'),
('1', '41'),
('3', '39'),
('5', '39'),
('1', '36'),
('1', '35'),
('3', '35'),
('2', '34'),
('1', '33'),
('1', '32'),
('1', '31'),
('3', '31'),
('1', '30'),
('1', '3'),
('2', '28'),
('3', '28'),
('1', '27'),
('3', '25'),
('3', '23'),
('2', '23'),
('3', '21'),
('1', '20'),
('2', '2'),
('1', '19'),
('1', '18'),
('1', '15'),
('1', '11');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `uyeler`
--

DROP TABLE IF EXISTS `uyeler`;
CREATE TABLE IF NOT EXISTS `uyeler` (
  `uye_id` varchar(3) COLLATE utf8_turkish_ci NOT NULL,
  `uye_ad` varchar(55) COLLATE utf8_turkish_ci NOT NULL,
  `uye_soyad` varchar(55) COLLATE utf8_turkish_ci NOT NULL,
  `uye_yas` int(3) NOT NULL,
  `uye_adres` varchar(55) COLLATE utf8_turkish_ci NOT NULL,
  `uye_mahalle` varchar(55) COLLATE utf8_turkish_ci NOT NULL,
  `uye_tel` varchar(55) COLLATE utf8_turkish_ci NOT NULL,
  `uye_boy` int(55) NOT NULL,
  `uye_kilo` int(55) NOT NULL,
  `uye_ubaslangic` date DEFAULT NULL,
  `uye_ubitis` date DEFAULT NULL,
  `antrenmanid` varchar(3) COLLATE utf8_turkish_ci NOT NULL,
  `cinsiyetid` varchar(3) COLLATE utf8_turkish_ci NOT NULL,
  PRIMARY KEY (`uye_id`),
  KEY `antrenmanid` (`antrenmanid`),
  KEY `cinsiyetid` (`cinsiyetid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `uyeler`
--

INSERT INTO `uyeler` (`uye_id`, `uye_ad`, `uye_soyad`, `uye_yas`, `uye_adres`, `uye_mahalle`, `uye_tel`, `uye_boy`, `uye_kilo`, `uye_ubaslangic`, `uye_ubitis`, `antrenmanid`, `cinsiyetid`) VALUES
('1', 'Mert', 'KARABAŞ', 20, 'Adatepe Mahallesi 28/6 Sokak ', 'Adatepe Mahallesi', '05366767865', 178, 69, '2022-11-01', '2023-03-02', '3', '1'),
('10', 'İlayda', 'YALIN', 19, 'Adatepe Mahallesi 6/1 Sokak No:30', 'Adatepe Mahallesi ', '0539 383 93 54', 162, 50, '2022-12-11', '2023-07-30', '4', '2'),
('11', 'Ahmet', 'ÖZKES', 38, 'Efeler Mahallesi Uğur Mumcu Caddesi No:24', 'Efeler Mahallesi ', '0535 676 77 22', 180, 72, '2022-12-13', '2023-02-15', '4', '1'),
('12', 'Hazel', 'DADAR', 34, 'Efeler Mahallesi 26. Sk No:42 Daire 9', 'Efeler Mahallesi', '0541 442 96 24', 168, 53, '2022-11-07', '2023-05-08', '4', '2'),
('13 ', 'Engin', 'ÖZCAN', 42, 'Vali Rahmi Bey Mahallesi 22/4 Sk No:15', 'Vali Rahmi Bey Mahallesi', '0542 678 95 42', 182, 76, '2022-12-13', '2023-02-10', '1', '1'),
('14', 'Fatma Zehra ', 'DOĞANAY', 19, 'Atatürk Mahallesi 308/4 Sokak No:30', 'Atatürk Mahallesi ', '0530 322 67 45', 158, 46, '2022-11-29', '2023-02-17', '5', '2'),
('15', 'Ersin ', 'POLATLI', 25, 'Adatepe Mahallesi 21/2 Sokak Davut Apt No:32', 'Adatepe Mahallesi', '0530 221 45 67', 181, 72, '2022-10-11', '2023-02-16', '3', '1'),
('16', 'Emre', 'ASLANER', 21, 'Adatepe Mahallesi 8 Sk No:3', 'Adatepe Mahallesi', '0552 143 65 08', 175, 63, '2022-10-10', '2023-03-09', '1', '1'),
('17', 'İrem', 'VARDAR', 22, 'Kuruçeşme Mahallesi Doğuş Cd No:121', 'Kuruçeşme Mahallesi', '0552 562 85 09', 172, 63, '2022-12-20', '2023-02-22', '5', '2'),
('18', 'Yunus', 'KAYA', 22, 'Kuruçeşme Mahallesi 6 Sokak No:5', 'Kuruçeşme Mahallesi', '0552 365 78 90', 180, 85, '2022-12-22', '2023-04-12', '1', '1'),
('19', 'Eda', 'ÇETİN', 20, 'Atatürk Mahallesi 308/2 Sk No:4', 'Atatürk Mahallesi', '0530 341 81 93', 166, 55, '2022-12-20', '2023-04-14', '5', '2'),
('2', 'Anıl', 'MAKAKLAR', 21, 'Kuruçeşme Mahallesi Doğuş Cd No:69', 'Kuruçeşme Mahallesi', '0553 140 64 05', 178, 74, '2022-10-07', '2023-04-05', '2', '1'),
('20', 'Kerem', 'UÇANOĞLU', 23, 'Yıldız Mahallesi 306/2 Sokak No:26', 'Yıldız Mahallesi', '0532 246 68 90', 196, 80, '2022-10-18', '2023-02-14', '2', '1'),
('21', 'Baha', 'KARABALTA', 35, 'Efeler Mahallesi 22 Sk No:13', 'Efeler Mahallesi ', '0541 679 98 72', 179, 75, '2022-10-10', '2023-02-16', '3', '1'),
('22', 'Gürel', 'ORU', 37, 'Vali Rahmi Bey Mahallesi 32 Sk No:4', 'Vali Rahmi Bey Mahallesi', '0542 645 23 89', 160, 58, '2022-11-21', '2023-02-16', '5', '2'),
('23', 'Alihan', 'BAYKAL', 24, 'Kuruçeşme Mahallesi Doğuş Cd No:34', 'Kuruçeşme Mahallesi', '0541 443 23 78', 196, 90, '2022-12-20', '2023-07-14', '2', '1'),
('24', 'Rana ', 'PEKMEZCİ', 20, 'Kuruçeşme Mahallesi Doğuş Cd No:34', 'Kuruçeşme Mahallesi ', '0536 676 23 45', 168, 60, '2022-11-29', '2023-04-20', '5', '2'),
('25', 'Mesut', 'YILAN', 21, 'Yıldız Mahallesi 305/4 Sk No:33', 'Yıldız Mahallesi ', '0550 442 56 78', 181, 77, '2022-12-12', '2023-05-11', '2', '1'),
('26', 'Abdurrahman ', 'PİRİ', 26, 'Efeler Mahallesi Menderes Cd. No:145', 'Efeler Mahallesi', '0541 456 69 65', 170, 80, '2022-11-09', '2023-04-27', '1', '1'),
('27', 'Ayaz Ali', 'IŞIK', 22, 'Adatepe Mahallesi 6/1 Sk No:4', 'Adatepe Mahallesi', '0549 560 89 09', 176, 80, '2022-11-15', '2023-03-24', '3', '1'),
('28', 'Deniz ', 'ÖZERDEM', 23, 'Kuruçeşme Mahallesi 32 Sk No:11', 'Kuruçeşme Mahallesi', '0535 678 21 45', 169, 68, '2022-10-02', '2023-03-23', '3', '1'),
('29', 'Nursel', 'PİRİ', 30, 'Adatepe Mahallesi 2/3Sk No:2', 'Adatepe Mahallesi', '0541 213 32 13', 165, 70, '2022-12-07', '2023-05-06', '5', '2'),
('3', 'Mehmet', 'ÖZERLER', 32, 'Efeler Mahallesi Menderes Cd. No:161', 'Efeler Mahallesi', '0552 692 86 24', 178, 76, '2022-11-06', '2023-03-05', '2', '1'),
('30', 'Sena', 'BURHAN', 20, 'Adatepe Mahallesi 2/3Sk No:2', 'Adatepe Mahallesi', '0535 231 21 12', 174, 60, '2022-11-07', '2022-12-23', '5', '2'),
('31', 'Semih', 'NAS', 22, 'Kuruçeşme Mh 205/1 Sk', 'Kuruçeşme Mahallesi ', '0553 122 69 68', 182, 85, '2022-10-11', '2023-06-15', '2', '1'),
('32', 'Kübra ', 'ÇELİK', 20, 'Kuruçeşme, 203/37 SkNo:16', 'Kuruçeşme Mahallesi', '0549 233 86 09', 160, 48, '2022-10-11', '2023-02-16', '1', '2'),
('33', 'Eren', 'HİSAR', 23, 'Yaylacık, 191/5. Sk. No:13', 'Yaylacık Mahallesi', '0534 541 21 67', 193, 88, '2022-11-14', '2023-02-17', '2', '1'),
('34', 'Kadir', 'KALAYCI', 19, 'Adatepe Mahallesi 3/20 Sok. No:13', 'Adatepe Mahallesi', '0536 291 72 96', 171, 55, '2022-10-11', '2023-02-21', '1', '1'),
('35', 'Günay', 'ÖZCAN', 44, 'Efeler Mahallesi 310. Sk. No:15', 'Efeler Mahallesi', '0552 446 75 43', 186, 81, '2022-12-19', '2023-01-25', '3', '1'),
('36', 'Eren', 'ERELİ', 39, 'Efeler Mahallesi 316/1. Sk. No:15', 'Efeler Mahallesi ', '0552 430 65 58', 176, 86, '2022-12-07', '2023-01-07', '1', '1'),
('37', 'Buket', 'DİNÇER', 21, 'Kuruçeşme, Hoca Ahmet Yesevi Cd.', 'Kuruçeşme Mahallesi', '0551 231 29 38', 165, 50, '2022-12-27', '2022-12-30', '5', '2'),
('38', 'Elçin ', 'KARA', 21, 'Kuruçeşme, Hoca Ahmet Yesevi Cd', 'Kuruçeşme Mahallesi', '0533 456 98 76', 158, 43, '2022-10-11', '2022-12-28', '5', '2'),
('39', 'Koray', 'GÖKBEL', 25, 'Adatepe, Kıbrıs Cd. No: 45', 'Adatepe Mahallesi', '0533 212 67 98', 176, 76, '2023-01-17', '2023-04-07', '2', '1'),
('4', 'Dilara', 'GÜL', 19, 'Kuruçeşme Mahallesi Doğuş Cd No:134', 'Kuruçeşme Mahallesi', '0549 561 84 04', 176, 65, '2022-12-08', '2023-02-08', '5', '2'),
('40', 'Yunus Emre', 'TALU', 24, 'Adatepe, Erdem Cd. 36-52', 'Adatepe Mahallesi', '0551 323 45 97', 175, 77, '2022-12-25', '2023-02-17', '1', '1'),
('41', 'Koray', 'TALU', 33, 'Efeler, 322. Sk. No:26', 'Efeler Mahallesi', '0555 667 87 90', 180, 65, '2022-10-17', '2023-01-11', '1', '1'),
('42', 'Recep', 'Bektaş', 39, 'Efeler, 322. Sk. No:24', 'Efeler Mahallesi', '0549 560 89 09', 175, 67, '2022-11-15', '2023-01-16', '4', '1'),
('43', 'Merve', 'DÖGEN', 20, 'Adatepe Mahallesi 28/6 Sk', 'Adatepe Mahallesi', '0535 256 66 68', 158, 44, '2022-10-25', '2023-02-15', '5', '2'),
('44', 'Casim', 'KARABAĞ', 55, 'Vali Rahmi Bey, 319. Sk.', 'Vali Rahmi Bey Mahallesi', '0554 456 78 91', 170, 55, '2022-10-18', '2023-01-24', '4', '1'),
('45', 'Nuray ', 'CİBİR', 43, 'Efeler, 328. Sk. 34', 'Efeler Mahallesi', '0535 231 21 12', 156, 45, '2022-11-22', '2023-01-26', '5', '2'),
('46', 'Zuhal', 'SÖZER', 23, 'Kuruçeşme, 203/52. Sk', 'Kuruçeşme Mahallesi', '0542 345 70 95', 170, 55, '2022-10-18', '2023-01-12', '5', '2'),
('47', 'Osman', 'SÖZER', 30, 'Kuruçeşme, 203/52. Sk', 'Kuruçeşme Mahallesi', '0542 339 71 95', 177, 110, '2022-11-16', '2023-01-17', '4', '1'),
('48', 'Enver', 'AYDINOĞLU', 56, 'Efeler, Barbaros Hayrettin Paşa Cd ', 'Efeler Mahallesi', '0535 234 56 09', 175, 71, '2022-12-12', '2023-01-26', '4', '1'),
('49', 'Gözde', 'YAREN', 22, 'Efeler, 316/1. Sk. No:5', 'Efeler Mahallesi', '0549 757 23 64', 177, 58, '2022-12-12', '2023-02-16', '1', '2'),
('5', 'Şervan ', 'YAPRAK', 22, 'Yıldız Mahallesi Ahmet Piriştina Blv No:11', 'Yıldız Mahallesi', '0553 442 22 81', 175, 59, '2022-11-07', '2023-04-05', '1', '1'),
('50', 'Yusuf', 'EROĞLU', 33, 'Efeler, 316/1. Sk. No:15', 'Efeler Mahallesi', '0556 765 34 23', 170, 45, '2022-12-20', '2023-01-20', '1', '1'),
('6', 'Sinem', 'AKTAŞ', 23, 'Atatürk Mahallesi 308/2 Sk No:2', 'Atatürk Mahallesi', '0536 341 82 96', 171, 55, '2022-12-07', '2023-05-06', '5', '2'),
('7', 'Egecan', 'AKSOY', 21, 'Yıldız Mahallesi 309/2 Sokak No:24', 'Yıldız Mahallesi', '0532 256 78 89', 185, 82, '2022-11-07', '2023-05-08', '3', '1'),
('8', 'Mehmet ', 'KURTOĞLU', 20, 'Adatepe Mahallesi 20/1 Sokak No:16 Daire 6', 'Adatepe Mahallesi ', '0540 254 16 79', 170, 59, '2022-12-04', '2023-01-04', '1', '2'),
('9', 'Kaan ', 'BÜLBÜL', 20, 'Yaylacık Mahallesi 16 Sokak No:20A', 'Yaylacık Mahallesi', '0552 679 41 51', 186, 80, '2022-12-05', '2023-02-06', '3', '1');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `yetkili_giris`
--

DROP TABLE IF EXISTS `yetkili_giris`;
CREATE TABLE IF NOT EXISTS `yetkili_giris` (
  `yetkili_id` varchar(3) COLLATE utf8_turkish_ci NOT NULL,
  `kullanıcıadı` varchar(15) COLLATE utf8_turkish_ci NOT NULL,
  `sifre` varchar(15) COLLATE utf8_turkish_ci NOT NULL,
  PRIMARY KEY (`yetkili_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `yetkili_giris`
--

INSERT INTO `yetkili_giris` (`yetkili_id`, `kullanıcıadı`, `sifre`) VALUES
('1', 'winnersgym', '123654789winner');

--
-- Dökümü yapılmış tablolar için kısıtlamalar
--

--
-- Tablo kısıtlamaları `supplement_uye`
--
ALTER TABLE `supplement_uye`
  ADD CONSTRAINT `supplement_uye_ibfk_1` FOREIGN KEY (`supplementid`) REFERENCES `supplementler` (`supplementid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `supplement_uye_ibfk_2` FOREIGN KEY (`uye_id`) REFERENCES `uyeler` (`uye_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Tablo kısıtlamaları `uyeler`
--
ALTER TABLE `uyeler`
  ADD CONSTRAINT `uyeler_ibfk_1` FOREIGN KEY (`antrenmanid`) REFERENCES `antrenman` (`antrenmanid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `uyeler_ibfk_2` FOREIGN KEY (`cinsiyetid`) REFERENCES `cinsiyet` (`cinsiyetid`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
