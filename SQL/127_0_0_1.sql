-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 03, 2015 at 04:01 AM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `rentmyhouse`
--
CREATE DATABASE IF NOT EXISTS `rentmyhouse` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `rentmyhouse`;

-- --------------------------------------------------------

--
-- Table structure for table `houses`
--

DROP TABLE IF EXISTS `houses`;
CREATE TABLE IF NOT EXISTS `houses` (
  `houseID` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `state` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `price` double NOT NULL,
  `meter` double NOT NULL,
  `telephone` int(15) NOT NULL,
  `wifi` tinyint(4) DEFAULT '0',
  `pool` tinyint(4) DEFAULT '0',
  `maid` tinyint(4) DEFAULT '0',
  `description` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `stars` smallint(6) NOT NULL,
  `longitude` double NOT NULL,
  `latitude` double NOT NULL,
  `imageName` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `users_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `houses`
--

INSERT INTO `houses` (`houseID`, `name`, `state`, `address`, `price`, `meter`, `telephone`, `wifi`, `pool`, `maid`, `description`, `stars`, `longitude`, `latitude`, `imageName`, `users_id`) VALUES
(1, 'home', 'Thessalia', 'Ipokratous', 100, 20, 2147483647, 0, 1, 0, 'A beautiful house by the sea..', 1, 22.5355949, 39.621161, 'upload/home.jpg', 3),
(8, 'home1', 'Thessalia', 'Panagouli', 100, 20, 2147483647, 1, 1, 1, 'House Decription', 3, 22.6755949, 39.341161, 'upload/home1.jpg', 4),
(9, 'home2', 'Thraki', 'Hrwn 7', 250, 40, 2147483647, 0, 0, 1, 'House Decription', 3, 22.8955949, 39.981161, 'upload/home2.jpg', 5),
(10, 'home3', 'Makedonia', 'Hrwn 15', 50, 15, 2147483647, 1, 0, 1, 'House Decription', 3, 22.2255949, 39.281161, 'upload/home3.jpg', 6),
(11, 'home4', 'Hpeiros', 'Hrwn 7', 125, 80, 2147483647, 1, 0, 1, 'House Decription', 3, 23.8955949, 40.981161, 'upload/home4.jpg', 7),
(12, 'home5', 'Sterea Ellada', 'Hrwn 15', 145, 61, 2147483647, 1, 1, 0, 'House Decription', 2, 22.8955949, 38.981161, 'upload/home5.jpg', 8),
(13, 'home6', 'Sterea Ellada', 'Hrwn 15', 190, 17, 2147483647, 0, 1, 0, 'House Decription', 2, 22.5555949, 38.691161, 'upload/home6.jpg', 9),
(14, 'home7', 'Kriti', 'Kouma 15', 220, 160, 2147483647, 1, 1, 0, 'House Decription', 2, 22.7855949, 38.331161, 'upload/home7.jpg', 10),
(15, 'home8', 'Nisia Aigaiou', 'Wolfram 23', 50, 10, 2147483647, 0, 0, 0, 'House Decription', 1, 22.7155949, 38.391161, 'upload/home8.jpg', 11),
(16, 'home9', 'Nisia Ioniou', 'Java street 23', 532, 321, 2147483647, 1, 1, 1, 'House Decription', 3, 22.3355949, 38.391161, 'upload/home9.jpg', 12),
(17, 'home10', 'Makedonia', 'Javascript street 23', 234, 146, 2147483647, 0, 0, 1, 'House Decription', 2, 22.2555949, 38.411161, 'upload/home10.jpg', 13);

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

DROP TABLE IF EXISTS `images`;
CREATE TABLE IF NOT EXISTS `images` (
  `imageID` int(11) NOT NULL,
  `imageName` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `imageDescr` mediumtext COLLATE utf8_unicode_ci,
  `houses_houseID` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL,
  `username` varchar(20) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `password` varchar(150) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `salt` char(16) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `email` varchar(45) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `verificationCode` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `active` tinyint(1) DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `salt`, `email`, `verificationCode`, `active`) VALUES
(3, 'renegens', '7eb642fcdf97a1a6de0d215980250ea3c4cff7cb839acde3d15b4d037e54f940', '47d2ceab3cd0b2df', 'renegens@mail.gr', '', 0),
(4, 'admin', 'cb376748f72b2fcc6279ee3756b7fdb54652bf5021c088e82dfa1bbb1f86ac16', '54d8989c7355ffa7', 'admin@mail.gr', '', 0),
(5, 'admin1', 'bdd483895577fe3eeccc17b7e48208a4d8ea6802033eced11802a167e5da598d', '19eb845b56a1cd2c', 'admin1@mail.gr', '', 0),
(6, 'admin2', 'a2d6b5c8cef75a62acf4450b250dca4835b05aac9ba43e8e4f1035954a908121', '4bd63f17148af3f9', 'admin2@mail.gr', '', 0),
(7, 'admin3', '80c9b549d8685dca163727f23d631335c7988e6863a5e7c9bc2f1e37e98911f6', '3bbc0c8c78c37a41', 'admin3@mail.gr', '', 0),
(8, 'admin4', '6fb58f724826aaff38767ea3fa613ddc7f2047b9a42a000fb9b59854ade668b2', '220b641111d8cc51', 'admin4@mail.gr', '', 0),
(9, 'admin5', '242bc322942fd56d9aba3c73bc67ce73641dd1365ee52d34e656e98527f16268', '3bd12b6e41838ba2', 'admin5@mail.gr', '', 0),
(10, 'admin6', '5adbdd048bda9cd0c5f8e80b2e0d50773153444e0906560882089390c0cf0639', '6d78aea371721252', 'admin6@mail.gr', '', 0),
(11, 'admin7', '8ad7493094f1bebc080ba0c7d8afee7596c3eff64d8fdeb604c8e880d28fa5dd', '4a5d6bfc24c9e3c0', 'admin7@mail.gr', '', 0),
(12, 'admin8', '627fb132b0c4ec13d232c31aab7e3cecdc4143b362e8e100e3e7531a534e5b6d', '1b22921777c689f', 'admin8@mail.gr', '', 0),
(13, 'admin9', 'bcb7bb19cf0951ddf7c811a30f76e4213fd60eeedb9cf8d75ad3bdf0925b423b', '663366c14a37f50b', 'admin9@mail.gr', '', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `houses`
--
ALTER TABLE `houses`
  ADD PRIMARY KEY (`houseID`,`users_id`), ADD KEY `fk_houses_users_idx` (`users_id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`imageID`,`houses_houseID`), ADD KEY `fk_images_houses1_idx` (`houses_houseID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `username` (`username`), ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `houses`
--
ALTER TABLE `houses`
  MODIFY `houseID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `imageID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `houses`
--
ALTER TABLE `houses`
ADD CONSTRAINT `fk_houses_users` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `images`
--
ALTER TABLE `images`
ADD CONSTRAINT `fk_images_houses1` FOREIGN KEY (`houses_houseID`) REFERENCES `houses` (`houseID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
