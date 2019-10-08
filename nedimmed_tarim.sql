-- phpMyAdmin SQL Dump
-- version 4.0.4.2
-- http://www.phpmyadmin.net
--
-- Anamakine: localhost
-- Üretim Zamanı: 23 Eyl 2019, 21:43:36
-- Sunucu sürümü: 5.6.13
-- PHP Sürümü: 5.4.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Veritabanı: `nedimmed_tarim`
--
CREATE DATABASE IF NOT EXISTS `nedimmed_tarim` DEFAULT CHARACTER SET utf8 COLLATE utf8_turkish_ci;
USE `nedimmed_tarim`;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `admin_adi` varchar(50) COLLATE utf8_turkish_ci DEFAULT NULL,
  `admin_sifre` varchar(50) COLLATE utf8_turkish_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci ROW_FORMAT=COMPACT AUTO_INCREMENT=2 ;

--
-- Tablo döküm verisi `admin`
--

INSERT INTO `admin` (`id`, `admin_adi`, `admin_sifre`) VALUES
(1, 'admin', '1234');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `anasayfa_ayarlari`
--

CREATE TABLE IF NOT EXISTS `anasayfa_ayarlari` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `title_aciklama` varchar(1000) COLLATE utf8_turkish_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci ROW_FORMAT=COMPACT;

--
-- Tablo döküm verisi `anasayfa_ayarlari`
--

INSERT INTO `anasayfa_ayarlari` (`id`, `title`, `title_aciklama`) VALUES
(0, 'Sitemize Hoş Geldiniz', '<p>Lorem ipsum dolor sit amet consectetur adipiscing elit sagittis urna a senectus pulvinar integer commodo, vivamus vel dui ante quisque felis fringilla viverra mollis venenatis porta libero mattis. In nullam vehicula facilisis vestibulum dignissim eget aptent nulla mattis donec risus, natoque auctor vulputate vivamus himenaeos sodales nisi gravida lacus metus, semper cras feugiat fermentum augue ligula condimentum montes convallis aenean. Sed hendrerit purus porta vehicula volutpat augue, diam commodo lacinia eget viverra euismod dapibus, penatibus pharetra iaculis condimentum est.</p>\r\n\r\n<p>Aenean praesent purus quam hac auctor gravida a nisi rutrum vel, hendrerit semper ridiculus convallis aptent volutpat conubia dictumst mus lacus, pretium placerat potenti ligula mollis sodales orci parturient ac. Venenatis imperdiet laoreet semper quisque vitae massa ligula, turpis nascetur porttitor ac purus posuere pulvinar, tincidunt urna senectus cursus blandit hendrerit. Pellentesque tincidu');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ayarlar`
--

CREATE TABLE IF NOT EXISTS `ayarlar` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `meta` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `keywords` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `logo` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `telefon` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `fax` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `adres` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `maps` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `face` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `twitter` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `google` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `instagram` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `youtube` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `Calisma_saati1` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `Calisma_saati2` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci ROW_FORMAT=COMPACT AUTO_INCREMENT=2 ;

--
-- Tablo döküm verisi `ayarlar`
--

INSERT INTO `ayarlar` (`id`, `title`, `meta`, `keywords`, `description`, `logo`, `telefon`, `fax`, `email`, `adres`, `maps`, `face`, `twitter`, `google`, `instagram`, `youtube`, `Calisma_saati1`, `Calisma_saati2`) VALUES
(1, 'Tarım Sitesi', '', '', 'description ', 'logo.jpg', '02165558888', '', 'demo@outlook.com', 'Adana', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6376.036078226401!2d35.3367318908838!3d36.961626006837!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x152885f106bba293%3A0x17fa4bf6042577a8!2sDNC%20TARIM!5e0!3m2!1str!2str!4v156923240', 'https://www.facebook.com/', 'https://twitter.com/login?lang=tr', 'google', 'https://www.instagram.com/', '', 'Çalışma saatini giriniz', 'Çalışma saatini giriniz');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `bayi`
--

CREATE TABLE IF NOT EXISTS `bayi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `bayi_adi` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `bayi_aciklama` varchar(1000) COLLATE utf8_turkish_ci DEFAULT NULL,
  `bayi_resim` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `bayi_link` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `bayilik_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci AUTO_INCREMENT=7 ;

--
-- Tablo döküm verisi `bayi`
--

INSERT INTO `bayi` (`id`, `bayi_adi`, `bayi_aciklama`, `bayi_resim`, `bayi_link`, `bayilik_id`) VALUES
(2, 'bayi.png', '<p><strong>Klasik G&uuml;breler</strong><br />\r\nAzotlu G&uuml;breler - Fosforlu ve Potasyumlu G&uuml;breler - Kompoze G&uuml;breler</p>\r\n\r\n<p><strong>&Ouml;zel G&uuml;breler</strong><br />\r\nSaf G&uuml;breler - Damlama Sulama G&uuml;breleri - Yaprak G&uuml;breleri - Sıvı G&uuml;breler - Organik G&uuml;breler</p>\r\n', 'gubre2.jpg', '', 2),
(3, 'bayi1.png', '<h2><span style="font-size:13px">Mısır Tohumuları.</span></h2>\r\n\r\n<p>Ay&ccedil;i&ccedil;eği Tohumları</p>\r\n\r\n<p>Kanola Tohumları</p>\r\n\r\n<p>İnokulantlar Pamuk Tohumları</p>\r\n', 'product1.jpg', 'https://www.pioneer.com/web/site/turkey', 1),
(4, 'bayi2.png', '<p>sacd</p>\r\n', 'sunlight.jpg', 'sd', 1),
(5, 'icl.PNG', '<p>ICL, d&uuml;nyanın en b&uuml;y&uuml;k mineral, tarım, m&uuml;hendislik ve ziraat firmasıdır. 80 yılı aşkın deneyimi olan ICL, 180 &uuml;lkede faaliyet g&ouml;stermekte ve yaklaşık 13000 kişiye istihdam sağlamaktadır</p>\r\n', 'b83f8b6c76e0ef3aebbf5b9ac09ae4dd3.jpg', 'http://www.icl-group.com/', 2),
(6, 'bon.png', '<p>En y&uuml;ksek kalite standartlarında &uuml;retilen Bontera &uuml;r&uuml;nleri,% 100 organik olarak elde edilmektedir.&nbsp;Sentetik kimyasallardan ve genetiği değiştirilmiş organizmalardan aridirler ve t&uuml;m s&uuml;rd&uuml;r&uuml;lebilir ve organik yetiştirme y&ouml;ntemleriyle tamamen uyumludurlar.&nbsp;Geleneksel tarım i&ccedil;inde kullanıldığında, Bontera &uuml;reticilerin kimyasal g&uuml;bre kullanımlarını azaltmalarına izin verir.&nbsp;Bontera insanlar, hayvanlar ve &ccedil;evre i&ccedil;in g&uuml;venlidir.</p>\r\n', 'do.jpg', 'https://bontera.com/', 4);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `bayilik`
--

CREATE TABLE IF NOT EXISTS `bayilik` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `bayilik_adi` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `header_resim` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci AUTO_INCREMENT=5 ;

--
-- Tablo döküm verisi `bayilik`
--

INSERT INTO `bayilik` (`id`, `bayilik_adi`, `header_resim`) VALUES
(1, 'Tohum Bayilikleri', 'tohum.png'),
(2, 'Gübre Bayilikleri', 'gubre.jpg'),
(4, 'Zirai İlaç Bayilikleri', 'gubre21.jpg');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `hakkimizda`
--

CREATE TABLE IF NOT EXISTS `hakkimizda` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `hakkimizda_aciklama` varchar(6000) COLLATE utf8_turkish_ci DEFAULT NULL,
  `resim` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `hakkimizda`
--

INSERT INTO `hakkimizda` (`id`, `hakkimizda_aciklama`, `resim`) VALUES
(1, '<p>Lorem ipsum dolor sit amet consectetur adipiscing elit sagittis urna a senectus pulvinar integer commodo, vivamus vel dui ante quisque felis fringilla viverra mollis venenatis porta libero mattis. In nullam vehicula facilisis vestibulum dignissim eget aptent nulla mattis donec risus, natoque auctor vulputate vivamus himenaeos sodales nisi gravida lacus metus, semper cras feugiat fermentum augue ligula condimentum montes convallis aenean. Sed hendrerit purus porta vehicula volutpat augue, diam commodo lacinia eget viverra euismod dapibus, penatibus pharetra iaculis condimentum est.</p>\r\n\r\n<p>Aenean praesent purus quam hac auctor gravida a nisi rutrum vel, hendrerit semper ridiculus convallis aptent volutpat conubia dictumst mus lacus, pretium placerat potenti ligula mollis sodales orci parturient ac. Venenatis imperdiet laoreet semper quisque vitae massa ligula, turpis nascetur porttitor ac purus posuere pulvinar, tincidunt urna senectus cursus blandit hendrerit. Pellentesque tincidunt sodales erat arcu eu porttitor laoreet, dis auctor fringilla faucibus tristique convallis aliquet nam, iaculis mattis ligula at ac habitasse.</p>\r\n', 'ban1.png');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `hizmetlerimiz`
--

CREATE TABLE IF NOT EXISTS `hizmetlerimiz` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `hizmet_adi` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `hizmet_aciklama` varchar(6000) COLLATE utf8_turkish_ci DEFAULT NULL,
  `hizmet_resim` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci AUTO_INCREMENT=3 ;

--
-- Tablo döküm verisi `hizmetlerimiz`
--

INSERT INTO `hizmetlerimiz` (`id`, `hizmet_adi`, `hizmet_aciklama`, `hizmet_resim`) VALUES
(1, 'Tarla ve Bahçe Ürünleri Danışmanlığı', '<p>Lorem ipsum dolor sit amet consectetur adipiscing elit sagittis urna a senectus pulvinar integer commodo, vivamus vel dui ante quisque felis fringilla viverra mollis venenatis porta libero mattis. In nullam vehicula facilisis vestibulum dignissim eget aptent nulla mattis donec risus, natoque auctor vulputate vivamus himenaeos sodales nisi gravida lacus metus, semper cras feugiat fermentum augue ligula condimentum montes convallis aenean. Sed hendrerit purus porta vehicula volutpat augue, diam commodo lacinia eget viverra euismod dapibus, penatibus pharetra iaculis condimentum est.</p>\r\n\r\n<p>Aenean praesent purus quam hac auctor gravida a nisi rutrum vel, hendrerit semper ridiculus convallis aptent volutpat conubia dictumst mus lacus, pretium placerat potenti ligula mollis sodales orci parturient ac. Venenatis imperdiet laoreet semper quisque vitae massa ligula, turpis nascetur porttitor ac purus posuere pulvinar, tincidunt urna senectus cursus blandit hendrerit. Pellentesque tincidunt sodales erat arcu eu porttitor laoreet, dis auctor fringilla faucibus tristique convallis aliquet nam, iaculis mattis ligula at ac habitasse.</p>\r\n', 'product11.jpg'),
(2, 'Tohum, Gübre ve Zirai İlaç Satışı', '<p>Lorem ipsum dolor sit amet consectetur adipiscing elit sagittis urna a senectus pulvinar integer commodo, vivamus vel dui ante quisque felis fringilla viverra mollis venenatis porta libero mattis. In nullam vehicula facilisis vestibulum dignissim eget aptent nulla mattis donec risus, natoque auctor vulputate vivamus himenaeos sodales nisi gravida lacus metus, semper cras feugiat fermentum augue ligula condimentum montes convallis aenean. Sed hendrerit purus porta vehicula volutpat augue, diam commodo lacinia eget viverra euismod dapibus, penatibus pharetra iaculis condimentum est.</p>\r\n\r\n<p>Aenean praesent purus quam hac auctor gravida a nisi rutrum vel, hendrerit semper ridiculus convallis aptent volutpat conubia dictumst mus lacus, pretium placerat potenti ligula mollis sodales orci parturient ac. Venenatis imperdiet laoreet semper quisque vitae massa ligula, turpis nascetur porttitor ac purus posuere pulvinar, tincidunt urna senectus cursus blandit hendrerit. Pellentesque tincidunt sodales erat arcu eu porttitor laoreet, dis auctor fringilla faucibus tristique convallis aliquet nam, iaculis mattis ligula at ac habitasse.</p>\r\n', 'gubre22.jpg');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `hizmet_resim`
--

CREATE TABLE IF NOT EXISTS `hizmet_resim` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `header_resim` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `hizmet_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci AUTO_INCREMENT=15 ;

--
-- Tablo döküm verisi `hizmet_resim`
--

INSERT INTO `hizmet_resim` (`id`, `header_resim`, `hizmet_id`) VALUES
(13, 'bugday5.jpg', 1),
(14, 'b83f8b6c76e0ef3aebbf5b9ac09ae4dd2.jpg', 2);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `menu`
--

CREATE TABLE IF NOT EXISTS `menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `menu_adi` varchar(50) COLLATE utf8_turkish_ci DEFAULT NULL,
  `menu_durum` varchar(50) COLLATE utf8_turkish_ci DEFAULT NULL,
  `resim` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci ROW_FORMAT=COMPACT AUTO_INCREMENT=5 ;

--
-- Tablo döküm verisi `menu`
--

INSERT INTO `menu` (`id`, `menu_adi`, `menu_durum`, `resim`) VALUES
(1, 'Hakkımızda', 'Aktif', 'sa.jpg'),
(2, 'Hizmetlerimiz', 'Aktif', 'mi2.jpg'),
(3, 'Bayilikler', 'Aktif', 'mi3.jpg'),
(4, 'İletişim', 'Aktif', 'bu5.jpg');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `mini`
--

CREATE TABLE IF NOT EXISTS `mini` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tohum` varchar(1000) COLLATE utf8_turkish_ci DEFAULT NULL,
  `gubre` varchar(1000) COLLATE utf8_turkish_ci DEFAULT NULL,
  `ilac` varchar(1000) COLLATE utf8_turkish_ci DEFAULT NULL,
  `sera` varchar(1000) COLLATE utf8_turkish_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `mini`
--

INSERT INTO `mini` (`id`, `tohum`, `gubre`, `ilac`, `sera`) VALUES
(1, '<p>Mısır Tohumları, Ay&ccedil;i&ccedil;eği Tohumları, Kanola Tohumları, Pamuk Tohumları, Soya Tohumu, Tohumluk Arpa</p>\r\n', '<p>Katı G&uuml;breler, Sıvı G&uuml;breler,Toz G&uuml;breler, Organik G&uuml;breler, &Ouml;zel G&uuml;breler</p>\r\n', '<p>Feromonlar, İnsektisitler, Fungisitler, Herbisitler, Tohum İla&ccedil;ları, &Ccedil;evre Sağlığı</p>\r\n', '<p>Sera &ouml;rt&uuml;leri, Mal&ccedil; Sera Filmleri, Solarizasyon &Ouml;rt&uuml;leri, Isı Perde &Ouml;rt&uuml;leri, Sulama Hortumları, Fide ve G&uuml;bre Torbaları</p>\r\n');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `slider`
--

CREATE TABLE IF NOT EXISTS `slider` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `slogan` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `slogan2` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `resim` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci AUTO_INCREMENT=4 ;

--
-- Tablo döküm verisi `slider`
--

INSERT INTO `slider` (`id`, `slogan`, `slogan2`, `resim`) VALUES
(1, 'Siz Yetiştirin,BİZ KORUYALIM!', 'Zirai İlaçlamada Türkiye''nin Lider Markaların Bayilikleri ve Ürün Destek Satışları Siz Yetiştirin,BİZ KORUYALIM!', 'pa.jpg'),
(2, 'Toğrağın KALBİNDE ÇALIŞIYORUZ', ''''' Önce Tohum '''' Sloganı İle, En kaliteli tohumları en uyguna fiyatlara size sunmaktadır.', 'bu.jpg'),
(3, 'Bin bir emek, bin bir zahmet; düzgün tohum, bol bereket.', 'Emek olmadan yemek olmaz.', 'ka3.jpg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
