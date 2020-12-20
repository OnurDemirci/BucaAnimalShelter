-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 07, 2019 at 01:32 PM
-- Server version: 5.7.23
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hayvanlar`
--

-- --------------------------------------------------------

--
-- Table structure for table `sahipp`
--

DROP TABLE IF EXISTS `sahipp`;
CREATE TABLE IF NOT EXISTS `sahipp` (
  `isim` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `ilan_Tarihi` date DEFAULT NULL,
  `ilan_no` int(55) NOT NULL,
  `tur` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `Cinsi` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `Yas` int(55) DEFAULT NULL,
  `Cinsiyet` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `saglik` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `asi` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `Aciklama` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `resimurl` varchar(55) COLLATE utf8_turkish_ci NOT NULL,
  `sahip1` varchar(20) COLLATE utf8_turkish_ci NOT NULL,
  PRIMARY KEY (`ilan_no`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Dumping data for table `sahipp`
--

INSERT INTO `sahipp` (`isim`, `ilan_Tarihi`, `ilan_no`, `tur`, `Cinsi`, `Yas`, `Cinsiyet`, `saglik`, `asi`, `Aciklama`, `resimurl`, `sahip1`) VALUES
('Rıfkı', '2018-11-21', 10002, 'Köpek', 'Buldog', 2, 'Erkek', 'Tamamen Sağlıklı', 'İç-Dış Parazit, Karma Aşı', '11 aylık eğitimli,aşıları tam,bahçeli bir eve sahiplendirmek istiyorum', 'images/hayvanlar/Bulldog1.jpg', 'Evet'),
('Korsan', '2018-12-04', 10003, 'Köpek', 'Kaniş', 1, 'Erkek', 'Tamamen Sağlıklı', 'İç-Dış Parazit, Karma Aşı', 'eğitimi ve aşıları tam köpeğimize yuva arıyoruz', 'images/hayvanlar/kanis1.jpg', 'Evet'),
('Alfa', '2018-12-11', 10004, 'Köpek', 'Husky', 2, 'Erkek', 'Tamamen Sağlıklı', 'İç-Dış Parazit, Karma Aşı', 'Eğitimli ve hareketli Sibirya kurdumuza yuva arıyoruz', 'images/hayvanlar/Husky1.jpg', 'Hayır'),
('Nasus', '2018-11-07', 10005, 'Köpek', 'Alman çoban köpeği', 4, 'Erkek', 'Tamamen Sağlıklı', 'İç-Dış Parazit, Karma Aşı', 'Eğitimli,aşıları tam,bahçeli evi olan hayvan dostlarını bekliyoruz', 'images/hayvanlar/almanCoban1.jpg', 'Hayır'),
('Hector', '2018-12-09', 10006, 'Köpek', 'Golden', 2, 'Erkek', 'Tamamen Sağlıklı', 'İç-Dış Parazit, Karma Aşı', 'Tuvalet eğitimli köpeğimizi sahiplendirmek istiyoruz.', 'images/hayvanlar/rt7258.jpg', 'Hayır'),
('Oddy', '2018-12-09', 10007, 'Köpek', 'Beagle', 1, 'Dişi', 'Tamamen Sağlıklı', 'İç-Dış Parazit, Karma Aşı', 'Bakacak yerimiz olmadığı için yavrumuzu sahiplendiriyoruz.', 'images/hayvanlar/ty1847.jpg', 'Hayır'),
('Kral', '2018-12-07', 10008, 'Köpek', 'Sivas Kangalı', 3, 'Erkek', 'Tamamen Sağlıklı', 'İç-Dış Parazit, Karma Aşı', 'Sürü köpeğidir. Çobanı ve sürüyü yırtıcı hayvanlardan korur ve sürüyü birarada tutar. Çok uysal ve canayakın bir hayvandır. Sahiplenene şimdiden hayırlı olsun.', 'images/hayvanlar/ty9530.jpg', 'Hayır'),
('Tommy', '2018-12-06', 10009, 'Köpek', 'Sokak Köpeği', 2, 'Erkek', 'Tamamen Sağlıklı', 'İç-Dış Parazit, Karma Aşı', 'Sokakta buldum ama bakmayı beceremediğim için sahiplendiriyorum.', 'images/hayvanlar/fg363.jpg', 'Hayır'),
('Bernard', '2018-12-08', 10010, 'Köpek', 'Rotweiler', 3, 'Erkek', 'Tamamen Sağlıklı', 'İç-Dış Parazit, Karma Aşı', 'Yeni çocuk sahibi olduğum için evimde bakacak yerim kalmadı. Bernardıma iyi bakacak birini arıyorum.', 'images/hayvanlar/fg326.jpg', 'Hayır'),
('Hara', '2018-12-05', 10011, 'Köpek', 'Labrador', 1, 'Dişi', 'Tamamen Sağlıklı', 'İç-Dış Parazit, Karma Aşı', '3 köpek için evimde yer yok o yüzden bu canı sahiplendirmek istiyorum. Sahiplenmek isteyen telefonumdan ulaşabilir.', 'images/hayvanlar/fg9808.jpg', 'Hayır'),
('karabaş', '2018-12-24', 10012, 'Köpek', 'sokak köpeği', 2, 'Erkek', 'sağlıklı', 'karma', 'sokak köpeğine bahçeli sahip arıyoruz', 'images/hayvanlar/ty6913.jpeg', 'Evet'),
('Karabaş', '2019-01-10', 10013, 'Köpek', 'Sokak Köpeği', 3, 'Erkek', 'Sağlıklı', 'Henüz aşı yapılmadı', 'Sahiplenecek birini arıyoruz.', 'images/hayvanlar/ty86.jpeg', 'Evet'),
('Pablo', '2018-12-17', 20001, 'Kedi', 'Scottish Fold', 4, 'Dişi', 'Tamamen Sağlıklı', 'İç-Dış Parazit, Karma Aşı', 'Sokakta buldum yuva arıyor', 'images/hayvanlar/Scottish1.jpg', 'Hayır'),
('Afacan', '2018-12-03', 20002, 'Kedi', 'Van Kedisi', 1, 'Erkek', 'Tamamen Sağlıklı', 'İç-Dış Parazit, Karma Aşı', 'Adı Tekir.1 yaşında erkek terbiyeli sevecen sevgisini asil bir şekilde gösteren bu yakışıklı oğlumuzu ömürlük ne olursa olsun vazgeçmeyecek istanbul içi ailelere takip kontrol şartı ile sahiplendirilecektir', 'images/hayvanlar/van2.jpg', 'Hayır'),
('Pamuk', '2018-12-08', 20003, 'Kedi', 'Sarman', 4, 'Dişi', 'Tamamen Sağlıklı', 'İç-Dış Parazit, Karma Aşı', 'Çok sevdiğimiz pamuğumuza yuva arıyoruz.', 'images/hayvanlar/sarman3.jpg', 'Hayır'),
('Rengar', '2018-12-03', 20004, 'Kedi', 'Yabani Kedi', 4, 'Dişi', 'Tamamen Sağlıklı', 'İç-Dış Parazit, Karma Aşı', '4 yaşındaki kızımıza yuva arıyoruz', 'images/hayvanlar/yabani1.jpg', 'Evet'),
('Miya', '2018-11-08', 20005, 'Kedi', 'Tekir ', 1, 'Dişi', 'Tamamen Sağlıklı', 'İç-Dış Parazit, Karma Aşı', 'Küçük 1 yaşındaki kızımıza yeni ve güvenli bir yuva arıyoruz', 'images/hayvanlar/tekir1.jpg', 'Hayır'),
('Pamuk', '2018-12-09', 20006, 'Kedi', 'Ankara Kedisi', 1, 'Dişi', 'Tamamen Sağlıklı', 'İç-Dış Parazit, Karma Aşı', 'Çok sevimli ve neşeli bir hayvan.', 'images/hayvanlar/ty1929.jpg', 'Hayır'),
('Maviş', '2018-12-09', 20007, 'Kedi', 'Siyam Kedisi', 2, 'Erkek', 'Tamamen Sağlıklı', 'İç-Dış Parazit, Karma Aşı', 'Mavi gözlü meleğimizi sahiplendiriyoruz. ', 'images/hayvanlar/as4292.jpg', 'Hayır'),
('Duman', '2018-12-14', 20008, 'Kedi', 'British Shorthair', 3, 'Dişi', 'Tamamen Sağlıklı', 'İç-Dış Parazit, Karma Aşı', 'Yavruluğundan beri bizimle olan dumanımızı yurt dışına taşınacağımız için sahiplendiriyoruz.', 'images/hayvanlar/yu5718.jpg', 'Hayır'),
('Tiger', '2018-12-06', 20009, 'Kedi', 'Sibirya Kedisi', 2, 'Dişi', 'Tamamen Sağlıklı', 'İç-Dış Parazit, Karma Aşı', 'Çok sevdiğim kedimi yurt dışına taşınacağım için sahiplendiriyorum.', 'images/hayvanlar/rt8055.jpg', 'Evet'),
('Murphy', '2018-12-07', 20010, 'Kedi', 'Munckin', 1, 'Erkek', 'Tamamen Sağlıklı', 'İç-Dış Parazit, Karma Aşı', 'Çocuğum olduğu için çok sevdiğim kedimi sahiplendirmeye karar verdim.', 'images/hayvanlar/fg6761.jpg', 'Hayır'),
('Oreo', '2018-12-06', 20011, 'Kedi', 'Norveç Orman kedisi', 2, 'Dişi', 'Tamamen Sağlıklı', 'İç-Dış Parazit, Karma Aşı', 'Ev arkadaşımla anlaşamadığı için sahiplendirmek zorunda kaldım. Ona iyi bakacak birini arıyorum.', 'images/hayvanlar/rt9312.jpg', 'Hayır'),
('Oliver', '2018-12-07', 20012, 'Kedi', 'Mavi Rus Kedisi', 2, 'Erkek', 'Tamamen Sağlıklı', 'İç-Dış Parazit, Karma Aşı', 'Taşınacağım evde ona bakacak alanım olmadığı için sahiplendiriyorum.', 'images/hayvanlar/as4361.jpg', 'Hayır'),
('Püskül', '2018-12-13', 20013, 'Kedi', 'İran Kedisi', 3, 'Dişi', 'Tamamen Sağlıklı', 'İç-Dış Parazit, Karma Aşı', 'Tüylerine alerjim olduğu için sahiplendiriyorum.', 'images/hayvanlar/ty849.jpeg', 'Hayır');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
