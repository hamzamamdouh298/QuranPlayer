-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 25, 2022 at 09:33 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mp_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `music_list`
--

CREATE TABLE 'music_list' (
  `id` int(30) NOT NULL,
  `title` text NOT NULL,
  `description` text NOT NULL,
  `audio_path` text DEFAULT NULL,
  `image_path` text DEFAULT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp(),
  `date_updated` datetime DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `music_list`
--

INSERT INTO `music_list` (`id`, `title`, `description`, `audio_path`, `image_path`, `date_created`, `date_updated`) VALUES
(1, 'Dance', 'Sample Audio 101', './audio/Danc.mp3?v=1645771470', './images/logo2.jpg?v=1645771470', '2022-02-25 14:44:30', '2022-02-25 15:06:12'),
(2, 'Summer', 'Sample Audio 102', './audio/Summer.mp3?v=1645771544', NULL, '2022-02-25 14:45:44', NULL),
(7, 'Head Candy', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam feugiat sodales mattis. Quisque a tortor ultrices, viverra erat non, auctor diam. Mauris pulvinar sodales sagittis. Curabitur iaculis odio ac urna dictum, et vehicula nunc accumsan. Curabitur euismod in dolor eget rutrum. Morbi purus nunc, cursus in eleifend ut, vestibulum a dui. Vestibulum aliquet risus sit amet elementum eleifend. Vivamus scelerisque fringilla orci, sed elementum tortor placerat eu.', './audio/Head_Candy.mp3?v=1645777121', './images/logo1.jpg?v=1645777121', '2022-02-25 16:18:41', '2022-02-25 16:18:41');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `music_list`
--
ALTER TABLE `music_list`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `music_list`
--
ALTER TABLE `music_list`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
