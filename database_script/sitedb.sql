-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 16, 2022 at 12:08 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sitedb`
--

-- --------------------------------------------------------

--
-- Table structure for table `anasayfa`
--

CREATE TABLE `anasayfa` (
  `id` int(11) NOT NULL,
  `ustBaslik` char(250) COLLATE utf8_turkish_ci NOT NULL,
  `altBaslik` char(250) COLLATE utf8_turkish_ci NOT NULL,
  `linkMetin` char(250) COLLATE utf8_turkish_ci NOT NULL,
  `link` char(250) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Dumping data for table `anasayfa`
--

INSERT INTO `anasayfa` (`id`, `ustBaslik`, `altBaslik`, `linkMetin`, `link`) VALUES
(1, 'Şirketimize Hoşgeldiniz !**', 'Sizinle Tanıştığımıza Memnun Olduk !', 'Daha fazla bilgi için', 'servis');

-- --------------------------------------------------------

--
-- Table structure for table `hakkimizda`
--

CREATE TABLE `hakkimizda` (
  `id` int(11) NOT NULL,
  `baslik` char(250) COLLATE utf8_turkish_ci NOT NULL,
  `icerik` varchar(1000) COLLATE utf8_turkish_ci NOT NULL,
  `altBaslik` varchar(500) COLLATE utf8_turkish_ci DEFAULT NULL,
  `altIcerik` varchar(1000) COLLATE utf8_turkish_ci DEFAULT NULL,
  `altIcerik2` varchar(2000) COLLATE utf8_turkish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Dumping data for table `hakkimizda`
--

INSERT INTO `hakkimizda` (`id`, `baslik`, `icerik`, `altBaslik`, `altIcerik`, `altIcerik2`) VALUES
(1, 'HAKKIMIZDA', 'Lorem ipsum dolor sit amet consectetur.', 'OUR AMAZİNG TEAM', 'Lorem ipsum dolor sit amet consectetur.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut eaque, laboriosam veritatis, quos non quis ad perspiciatis, totam corporis ea, alias ut unde.');

-- --------------------------------------------------------

--
-- Table structure for table `iletisim`
--

CREATE TABLE `iletisim` (
  `id` int(11) NOT NULL,
  `ad` char(50) COLLATE utf8_turkish_ci NOT NULL,
  `email` char(50) COLLATE utf8_turkish_ci NOT NULL,
  `mesaj` varchar(1000) COLLATE utf8_turkish_ci NOT NULL,
  `tarih` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Dumping data for table `iletisim`
--

INSERT INTO `iletisim` (`id`, `ad`, `email`, `mesaj`, `tarih`) VALUES
(1, 'as', 'assa@hotmail.com', 'kol', '2021-12-20 17:10:01'),
(2, 'as', 'assa@hotmail.com', 'frrg', '2021-12-20 17:18:48'),
(3, 'bh', 'uy@hotmail.com', 'ryth', '2021-12-20 17:21:00'),
(4, 'bh', 'uy@hotmail.com', 'ryth', '2021-12-20 17:35:59'),
(5, 'abc', 'erp@hotmail.com', 'ghfdt', '2021-12-20 17:36:25'),
(6, 'as', 'assa@hotmail.com', 'a', '2021-12-20 17:38:49'),
(7, 'nurgül', 'nn@gmail.com', 'teşekkürler', '2021-12-20 17:46:50'),
(8, 'sd', 'assa@hotmail.com', 'fg', '2021-12-20 18:08:21'),
(9, 'sd', 'assa@hotmail.com', 'fg', '2021-12-20 18:12:26'),
(10, 'sd', 'assa@hotmail.com', 'fg', '2021-12-20 18:12:58'),
(11, 'as', 'uy@hotmail.com', 'gffl', '2021-12-23 09:01:35'),
(12, 'bh', 'assa@hotmail.com', '45', '2021-12-28 14:33:58'),
(13, 'abc', 'assa@hotmail.com', 'merhaba', '2022-01-12 15:47:37');

-- --------------------------------------------------------

--
-- Table structure for table `kullanici`
--

CREATE TABLE `kullanici` (
  `id` int(11) NOT NULL,
  `kadi` char(50) COLLATE utf8_turkish_ci NOT NULL,
  `parola` char(50) COLLATE utf8_turkish_ci NOT NULL,
  `yetki` tinyint(4) NOT NULL,
  `email` char(50) COLLATE utf8_turkish_ci NOT NULL,
  `aktif` bit(1) NOT NULL DEFAULT b'1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Dumping data for table `kullanici`
--

INSERT INTO `kullanici` (`id`, `kadi`, `parola`, `yetki`, `email`, `aktif`) VALUES
(1, 'admin', '105a9a2d46f64e147097c986076d2164', 1, 'admin@aa.com', b'1'),
(3, 'user', '105a9a2d46f64e147097c986076d2164', 3, 'admin@aa.com', b'1');

-- --------------------------------------------------------

--
-- Table structure for table `portfolyo`
--

CREATE TABLE `portfolyo` (
  `id` int(11) NOT NULL,
  `baslik` char(250) COLLATE utf8_turkish_ci NOT NULL,
  `altBaslik` varchar(750) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Dumping data for table `portfolyo`
--

INSERT INTO `portfolyo` (`id`, `baslik`, `altBaslik`) VALUES
(1, 'PORTFOLYO', 'Lorem ipsum dolor sit amet consectetur.*');

-- --------------------------------------------------------

--
-- Table structure for table `portfolyolar`
--

CREATE TABLE `portfolyolar` (
  `id` int(11) NOT NULL,
  `kucukfoto` char(50) COLLATE utf8_turkish_ci NOT NULL,
  `buyukfoto` char(50) COLLATE utf8_turkish_ci NOT NULL,
  `baslik` char(50) COLLATE utf8_turkish_ci NOT NULL,
  `client` char(50) COLLATE utf8_turkish_ci NOT NULL,
  `date` char(50) COLLATE utf8_turkish_ci NOT NULL,
  `category` char(50) COLLATE utf8_turkish_ci NOT NULL,
  `aciklama` varchar(500) COLLATE utf8_turkish_ci NOT NULL,
  `icerik` text COLLATE utf8_turkish_ci NOT NULL,
  `sira` smallint(6) NOT NULL,
  `aktif` int(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Dumping data for table `portfolyolar`
--

INSERT INTO `portfolyolar` (`id`, `kucukfoto`, `buyukfoto`, `baslik`, `client`, `date`, `category`, `aciklama`, `icerik`, `sira`, `aktif`) VALUES
(1, '01-thumbnail.jpg', '01-full.jpg', 'PROJECT NAME', 'Threads', 'January 2020', 'Illustration', 'Lorem ipsum dolor sit amet consectetur.', 'Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!', 0, 1),
(2, '02-thumbnail.jpg', '02-full.jpg', 'PROJECT NAME', 'Explore', 'January 2020', 'Graphic Design', 'Lorem ipsum dolor sit amet consectetur.', 'Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!', 0, 1),
(3, '03-thumbnail.jpg', '03-full.jpg', 'PROJECT NAME', 'Finish', 'January 2020', 'Identity', 'Lorem ipsum dolor sit amet consectetur', 'Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!', 0, 1),
(4, '04-thumbnail.jpg', '04-full.jpg', 'PROJECT NAME', 'Lines', 'January 2020', 'Branding', 'Lorem ipsum dolor sit amet consectetur', 'Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!', 0, 1),
(5, '05-thumbnail.jpg', '05-full.jpg', 'PROJECT NAME', 'Southwest', 'January 2020', 'Website Design', 'Lorem ipsum dolor sit amet consectetur.', 'Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!', 0, 1),
(6, '06-thumbnail.jpg', '06-full.jpg', 'PROJECT NAME', 'Window', 'January 2020', 'Photography', 'Lorem ipsum dolor sit amet consectetur.', 'Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `referans`
--

CREATE TABLE `referans` (
  `id` int(11) NOT NULL,
  `foto` char(50) COLLATE utf8_turkish_ci NOT NULL,
  `link` char(100) COLLATE utf8_turkish_ci NOT NULL,
  `sira` smallint(5) UNSIGNED NOT NULL,
  `aktif` int(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Dumping data for table `referans`
--

INSERT INTO `referans` (`id`, `foto`, `link`, `sira`, `aktif`) VALUES
(1, 'envato.jpg', '#', 100, 1),
(2, 'designmodo.jpg', '#', 20, 1),
(3, 'themeforest.jpg', '#', 15, 1),
(4, 'creative-market.jpg', '#', 30, 1),
(5, 'creative-market.jpg', '#', 30, 0),
(6, 'creative-market.jpg', '#', 30, 0);

-- --------------------------------------------------------

--
-- Table structure for table `servis`
--

CREATE TABLE `servis` (
  `id` int(11) NOT NULL,
  `baslik` char(250) COLLATE utf8_turkish_ci NOT NULL,
  `altBaslik` varchar(1000) COLLATE utf8_turkish_ci NOT NULL,
  `tanimlama` varchar(500) COLLATE utf8_turkish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Dumping data for table `servis`
--

INSERT INTO `servis` (`id`, `baslik`, `altBaslik`, `tanimlama`) VALUES
(1, 'SERVİSLERİMİZ ÖZELDİR', '*Lorem ipsum dolor sit amet consectetur.**', '#');

-- --------------------------------------------------------

--
-- Table structure for table `servislerimiz`
--

CREATE TABLE `servislerimiz` (
  `id` int(11) NOT NULL,
  `foto` char(50) COLLATE utf8_turkish_ci NOT NULL,
  `baslik` char(250) COLLATE utf8_turkish_ci NOT NULL,
  `icerik` varchar(500) COLLATE utf8_turkish_ci NOT NULL,
  `sira` smallint(6) NOT NULL,
  `aktif` bit(1) NOT NULL DEFAULT b'1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Dumping data for table `servislerimiz`
--

INSERT INTO `servislerimiz` (`id`, `foto`, `baslik`, `icerik`, `sira`, `aktif`) VALUES
(1, 'fa-shopping-cart', 'E-Commerce', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.*', 0, b'1'),
(2, 'fa-laptop', 'Responsive Design', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.', 0, b'1'),
(3, 'fa-lock', 'Web Security', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.', 0, b'1');

-- --------------------------------------------------------

--
-- Table structure for table `takim`
--

CREATE TABLE `takim` (
  `id` int(11) NOT NULL,
  `foto` char(50) COLLATE utf8_turkish_ci NOT NULL,
  `isim` char(50) COLLATE utf8_turkish_ci NOT NULL,
  `gorev` char(50) COLLATE utf8_turkish_ci NOT NULL,
  `twitter` char(50) COLLATE utf8_turkish_ci NOT NULL,
  `facebook` char(50) COLLATE utf8_turkish_ci NOT NULL,
  `linkedin` char(50) COLLATE utf8_turkish_ci NOT NULL,
  `sira` smallint(6) NOT NULL,
  `aktif` int(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Dumping data for table `takim`
--

INSERT INTO `takim` (`id`, `foto`, `isim`, `gorev`, `twitter`, `facebook`, `linkedin`, `sira`, `aktif`) VALUES
(1, '1.jpg', 'alice  chris', 'Lead Designer', '#', '#', '#', 0, 1),
(2, '2.jpg', 'ali yıldız', 'Lead Marketer..', '#', '#', '#', 0, 1),
(3, '3.jpg', 'dilara ö.', 'Lead Developer', '#', '#', '#', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tarihce`
--

CREATE TABLE `tarihce` (
  `id` int(11) NOT NULL,
  `tarih` char(50) COLLATE utf8_turkish_ci NOT NULL,
  `baslik` char(250) COLLATE utf8_turkish_ci NOT NULL,
  `icerik` varchar(500) COLLATE utf8_turkish_ci NOT NULL,
  `foto` char(50) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Dumping data for table `tarihce`
--

INSERT INTO `tarihce` (`id`, `tarih`, `baslik`, `icerik`, `foto`) VALUES
(1, '2009-2012', 'Our Humble Beginnings', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!', '1.jpg'),
(2, 'March 2011', 'An Agency is Born', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!', '2.jpg'),
(3, 'December 2012', 'Transition to Full Service', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur', '3.jpg'),
(4, 'July 2014', 'Phase Two Expansion', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!', '4.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anasayfa`
--
ALTER TABLE `anasayfa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hakkimizda`
--
ALTER TABLE `hakkimizda`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `iletisim`
--
ALTER TABLE `iletisim`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kullanici`
--
ALTER TABLE `kullanici`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `kadi` (`kadi`);

--
-- Indexes for table `portfolyo`
--
ALTER TABLE `portfolyo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `portfolyolar`
--
ALTER TABLE `portfolyolar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `referans`
--
ALTER TABLE `referans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `servis`
--
ALTER TABLE `servis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `servislerimiz`
--
ALTER TABLE `servislerimiz`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `takim`
--
ALTER TABLE `takim`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tarihce`
--
ALTER TABLE `tarihce`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `anasayfa`
--
ALTER TABLE `anasayfa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `hakkimizda`
--
ALTER TABLE `hakkimizda`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `iletisim`
--
ALTER TABLE `iletisim`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `kullanici`
--
ALTER TABLE `kullanici`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `portfolyo`
--
ALTER TABLE `portfolyo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `portfolyolar`
--
ALTER TABLE `portfolyolar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `referans`
--
ALTER TABLE `referans`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `servis`
--
ALTER TABLE `servis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `servislerimiz`
--
ALTER TABLE `servislerimiz`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `takim`
--
ALTER TABLE `takim`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tarihce`
--
ALTER TABLE `tarihce`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
