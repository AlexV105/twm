-- phpMyAdmin SQL Dump
-- version 4.5.4.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 09.04.2024 klo 10:23
-- Palvelimen versio: 5.7.11
-- PHP Version: 5.6.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `products`
--

-- --------------------------------------------------------

--
-- Rakenne taululle `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image_url` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `price` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Vedos taulusta `products`
--

INSERT INTO `products` (`id`, `name`, `image_url`, `description`, `category`, `price`) VALUES
(1, 'HONOR 90 256 GT Ã„LYPUHELIN MIDNIGHT BLACK', 'uploads/honor.webp', '429â‚¬', 'puhelimet', '200 MP:n kolmoiskamera,\r\n6,7" 120 Hz AMOLED -nÃ¤yttÃ¶,\r\nTakakamerat: 200+12+2 MP,\r\nEtukamera: 50 MP,\r\nTehokas Qualcomm Snapdragon 7 Gen 1 -prosessori ja\r\nRunsaasti tallennustilaa 256 Gt'),
(2, 'SAMSUNG GALAXY A54 5G 128 GT, MUSTA', 'uploads/samsung.webp', '279â‚¬', 'puhelimet', 'Huippunopea 120 Hz:n Super AMOLED -nÃ¤yttÃ¶,\r\n6,4" 120 Hz FHD+ Super AMOLED -nÃ¤yttÃ¶,\r\nTakakamerat: 50+12+5 MP OIS,\r\nEtukamera: 32 MP,\r\n5000 mAh akku, jopa kahden pÃ¤ivÃ¤n akunkesto,\r\nTukee 25 W:n pikalatausta (laturi myydÃ¤Ã¤n erikseen),\r\nSormenjÃ¤lkitunnistin nopeaan ja turvalliseen nÃ¤ytÃ¶nlukituksen avaamiseen ja\r\n5G-valmis.'),
(3, 'SONY XPERIA 1 V 256 GT PLATINA, HOPEA  ', 'uploads/sony.webp', '999â‚¬', 'puhelimet', ''),
(4, 'HONOR X6A 128 GT CYAN LAKE', 'uploads/honor2.webp', '99â‚¬', 'puhelimet', ''),
(5, 'SAMSUNG GALAXY S24 ULTRA 256 GT, TITANIUM BLACK', 'uploads/samsung2.webp', '1349â‚¬', 'puhelimet', ''),
(6, 'FUJIFILM INSTAX MINI 12 PIKAKAMERA + 10 KUVAA, VALKOINEN', 'uploads/FUJIFILM.webp', '89,95â‚¬', 'pikakamerat', ''),
(7, 'FUJIFILM INSTAX MINI 40 PIKAKAMERA, MUSTA', 'uploads/FUJIFILM2.webp', '109â‚¬', 'pikakamerat', ''),
(8, 'FUJIFILM INSTAX MINI 99 BUNDLE + INSTAX MINI 20 KUVAFILMIÃ„, MUSTA', 'uploads/FUJIFILM3.webp', '219,99â‚¬', 'pikakamerat', ''),
(9, 'FUJIFILM INSTAX SQ1 PIKAKAMERA GLACIER BLUE', 'uploads/FUJIFILM4.webp', '129â‚¬', 'pikakamerat', ''),
(10, 'AGFA REALIKIDS INSTANT CAM PIKAKAMERA, SININEN', 'uploads/AGFA.webp', '70â‚¬', 'pikakamerat', ''),
(11, 'KODAK PIXPRO AZ528 DIGITAALIKAMERA, MUSTA', 'uploads/KODAK.webp', '309â‚¬', 'digikamerat', ''),
(12, 'PANASONIC LUMIX DC-TZ200DEGK KAMERA, MUSTA', 'uploads/lumix.webp', '899â‚¬', 'digikamerat', ''),
(13, 'LENOVO 68 W USB-C LATURI', 'uploads/Lenovo.webp', '44,90â‚¬', 'kaapelit', ''),
(14, 'DACOTA PLATINUM A10, 20 W VARAVIRTALÃ„HDE 10 000 MAH, VALKOINEN', 'uploads/dacota.webp', '39,90â‚¬', 'kaapelit', ''),
(15, 'ELETRA AUTOLATURI MUSB MUSTA', 'uploads/eletra.webp', '6â‚¬', 'kaapelit', ''),
(16, 'JBL FLIP ESSENTIAL 2 BLUETOOTH-KAIUTIN', 'uploads/jbl.webp', '59â‚¬', 'kaiuttimet', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
