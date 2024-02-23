-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 29, 2023 at 06:57 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `api_singer_west`
--

-- --------------------------------------------------------

--
-- Table structure for table `singer`
--

CREATE TABLE `singer` (
  `id` int(11) NOT NULL,
  `profil` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lahir` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `genre` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `instrument` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tahun_aktif` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `artis_terkait` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `singer`
--

INSERT INTO `singer` (`id`, `profil`, `nama`, `lahir`, `genre`, `instrument`, `tahun_aktif`, `artis_terkait`) VALUES
(1, 'https://i.discogs.com/K_LP4FMt7JQDMRICTqK6DGHZ_Nx60BcGy_n6LNppKqI/rs:fit/g:sm/q:90/h:600/w:600/czM6Ly9kaXNjb2dz/LWRhdGFiYXNlLWlt/YWdlcy9BLTQ3MTA2/OS0xMjg2NzQ2NzU4/LmpwZWc.jpeg', 'matthew charles sanders', '31 juli 1981', 'heavy metal', 'vokal', '1999 - sekarang', 'avenged sevenfold'),
(2, 'https://images6.fanpop.com/image/photos/38900000/Best-of-Hayley-Williams-photoshoots-hayley-williams-38917093-438-600.jpg', 'hayley nochole williams', '27 desember 1988', 'rock alternatif', 'vokal', '2003 - sekarang', 'paramore'),
(3, 'https://nationaltoday.com/wp-content/uploads/2022/10/456840965-min-1-1200x834.jpg', 'john francis bongiovi', '2 maret 1962', 'heavy metal', 'vokal', '1980 - sekarang', 'bon jovi'),
(4, 'https://townsquare.media/site/295/files/2021/11/attachment-Eric-Clapton-August-Album-Image.jpg?w=980&q=75', 'eric patrick clapton', '30 maret 1945', 'blues', 'vokal', '1963 - sekarang', 'the yardbirs'),
(5, 'https://thumb.viva.co.id/media/frontend/thumbs3/2014/03/21/244769_kurt-cobain_1265_711.jpg', 'kurt donald cobain', '20 februari 1967', 'rock alternatif', 'vokal', '1982 - 1994', 'nirvana'),
(6, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQiUXFkA1DTa4X2DYEumehYR1GuQ64_0sIot5yjLfKxdJTGcJqzYzCwayq2JvMWcIDVDZA&usqp=CAU', 'adele laurie blue adkins', '5 mei 1988', 'pop', 'vokal', '2006 - sekarang', 'solo'),
(7, 'https://thumb.zigi.id/frontend/thumbnail/2021/12/09/zigi-61b1bd7d82a1f-john-lennon_665_374.jpeg', 'john winston lennon', '9 oktober 1940', 'rock', 'vokal', '1956 - 1980', 'the beatles'),
(8, 'https://i.pinimg.com/originals/b5/e9/7c/b5e97c08a38625e68443993418e01751.jpg', 'mitchell adam lucker', '20 oktober 1984', 'deathcore', 'vokal', '2002 - 2012', 'suicide silence'),
(9, 'https://favim.com/pd/s6/orig/140817/bring-me-the-horizon-oli-sykes-oliver-scott-sykes-oliver-sykes-Favim.com-2000376.jpg', 'oliver scott sykes', '20 november 1986', 'deathcore', 'vokal', '2000 - sekarang', 'bring me the horizon'),
(10, 'https://asset-a.grid.id/crop/0x0:0x0/700x465/photo/2022/07/15/green-day-billie-joe-armstrong-n-20220715074908.jpg', 'billie joe armstrong', '17 februari 1972', 'punk rock', 'vokal', '1986 - sekarang', 'green day'),
(11, 'https://cdn.britannica.com/27/150327-050-CDB88DF6/Bono.jpg', 'bono', '10 mei 1960', 'rock', 'vokal', '1975 - sekarang', 'u2'),
(12, 'https://gallery.poskota.co.id//storage/Foto/Chris-Martin_-Vocalist-of-Coldplay.jpg', 'christopher anthony john martin', '02 maret 1977', 'rock alternatif', 'vokal', '1996 - sekarang', 'coldplay'),
(13, 'https://media.suara.com/pictures/480x260/2022/10/27/33368-rihanna-instagramatbadgalriri.jpg', 'robyn rihanna fenty', '20 februari 1988', 'pop', 'vokal', '2003 - sekarang', 'solo'),
(14, 'https://rolltherecord.com/wp-content/uploads/2022/12/Michael-Jackson.jpeg', 'michael joseph jackson', '29 agustus 1958', 'pop', 'vokal', '1964 - 2009', 'the jackson 5'),
(15, 'https://www.revolvermag.com/sites/default/files/styles/image_750_x_420/public/meta_images/jameshetfieldhubbsraiders.jpg?itok=EJbnstsk&timestamp=1655495025', 'james alan hetfield', '3 agustus 1963', 'heavy metal', 'vokal', '1978 - sekarang', 'metallica'),
(16, 'https://nationaltoday.com/wp-content/uploads/2022/10/27-Adam-Levine.jpg', 'adam noah levine', '18 maret 1979', 'pop rock', 'vokal', '1994 - sekarang', 'maroon 5'),
(17, 'https://www.suarasurabaya.net/wp-content/uploads/2017/07/kk191056_clip10.jpg', 'chester charles bennington', '20 maret 1976', 'heavy metal', 'vokal', '1992 - 2017', 'linkin park'),
(18, 'https://i.dailymail.co.uk/1s/2019/09/17/00/18555608-7471181-image-m-25_1568677767864.jpg', 'thomas matthew delonge', '13 desember 1975', 'pop punk', 'vokal', '1992 - sekarang', 'blink-182'),
(19, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQeKf9YdVZRXXXiDvPsG8J8AnubZ9L7CUJmhQ&usqp=CAU', 'avril ramona lavigne', '27 september 1984', 'pop rock', 'vokal', '1999 - sekarang', 'solo'),
(20, 'https://blog.sukawu.com/wp-content/uploads/2015/12/Owl-City-Adam-Young.jpg', 'adam young', '5 juli 1986', 'electropop', 'vokal', '2007 - sekarang', 'owl city'),
(23, 'https://nationaltoday.com/wp-content/uploads/2022/10/456840965-min-1-1200x834.jpg', 'jason hobs', '18 agustus 1980', 'pop', 'vokal', '1997 - sekarang', 'bluesky'),
(25, 'https://upload.wikimedia.org/wikipedia/commons/thumb/8/8c/Ali_Campbell_at_Raggamuffin_2009_cropped.jpg/220px-Ali_Campbell_at_Raggamuffin_2009_cropped.jpg', 'alistair ian campbell', '15 februari 1959', 'reggae', 'vokal', '1977 - sekarang', 'ub40'),
(29, 'a1', 'john update', '11 januari 1991', 'pop', 'vokal', '2012 - sekarang', 'hexagon'),
(30, 'https://upload.wikimedia.org/wikipedia/commons/thumb/8/8c/Ali_Campbell_at_Raggamuffin_2009_cropped.jpg/220px-Ali_Campbell_at_Raggamuffin_2009_cropped.jpg', 'ari update', '2 januari 1999', 'reggae', 'vokal', '1977 - sekarang', 'ub40');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `singer`
--
ALTER TABLE `singer`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `singer`
--
ALTER TABLE `singer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
