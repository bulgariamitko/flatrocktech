-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time:  2 фев 2018 в 11:24
-- Версия на сървъра: 5.7.21-0ubuntu0.17.10.1
-- PHP Version: 7.1.11-0ubuntu0.17.10.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `flatrock`
--

-- --------------------------------------------------------

--
-- Структура на таблица `question`
--

CREATE TABLE `question` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `answer1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `answer2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `answer3` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `rightanswer` int(11) NOT NULL,
  `answered` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Схема на данните от таблица `question`
--

INSERT INTO `question` (`id`, `title`, `answer1`, `answer2`, `answer3`, `rightanswer`, `answered`) VALUES
(1, 'Who wrote the book Levski?', 'Yana Yazova', 'Hristo Botev', 'Ivan Vazov', 1, 1),
(2, 'How old was Christ when he died?', '22', '33', '44', 2, 0),
(5, 'What is the most successfully electric motor company in the world?', 'SpaceX', 'Tesla', 'The Boring Company', 2, 0),
(6, 'What is the current position of the stars?', 'No one knows!', 'In the middle', 'Who cares?', 1, 0),
(7, 'What is this movie called involving a spider?', 'Iron Man', 'Batman', 'Spiderman', 3, 0),
(8, 'What is the meaning of CMYK?', 'Cyan, Magenta, Yellow, Keep', 'Cyan, Magenta, Yellow, Black', 'Cyan, Magenta, Yellow, Key', 3, 0),
(9, 'What is RGB?', 'red, green, blue', 'rot, grune, blauenen', 'retina, garcia, banya', 1, 0),
(10, 'What is the name of the band that Jack White sings in?', 'The Cure', 'The White Stripes', 'The Verve', 2, 0),
(11, 'What is the meaning of indie music?', 'indian music', 'indonisian music', 'independent music', 3, 0),
(12, 'What is the best organic food?', 'eggs', 'rice', 'meal', 2, 2),
(13, 'What is the meaning of SQL', 'social security number', 'second query to live', 'structured query language', 3, 0);

-- --------------------------------------------------------

--
-- Структура на таблица `setting`
--

CREATE TABLE `setting` (
  `id` int(11) NOT NULL,
  `multichoice` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Схема на данните от таблица `setting`
--

INSERT INTO `setting` (`id`, `multichoice`) VALUES
(1, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `setting`
--
ALTER TABLE `setting`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `question`
--
ALTER TABLE `question`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `setting`
--
ALTER TABLE `setting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
