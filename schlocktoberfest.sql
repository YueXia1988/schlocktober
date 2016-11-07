-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 08, 2016 at 12:17 am
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `schlocktoberfest`
--

-- --------------------------------------------------------

--
-- Table structure for table `Merchandise`
--

CREATE TABLE `Merchandise` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(25) NOT NULL,
  `price` decimal(8,2) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Merchandise`
--

INSERT INTO `Merchandise` (`id`, `name`, `price`, `description`) VALUES
(1, 'Collectable DVD', '29.99', 'A collectable DVD, Zone 4'),
(2, 'Dinner for five ', '159.00', 'Rob Zombie, Brnce Campbent, Roger Comman, Faizon Love');

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

CREATE TABLE `movies` (
  `id` tinyint(3) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `year` year(4) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`id`, `title`, `year`, `description`) VALUES
(1, 'Troll 2', 1999, 'The best worst movie ever.'),
(3, 'Don''t mess with the zoham', 2008, 'Tired of all the fighting in his country, legendary Israeli commando Zohan (Adam Sandler) fakes his own death and goes to New York, where he can fulfill his fondest dream: to become a hairstylist. Zohan''s sexy way with a cut and curl makes him a hit with Manhattan''s women, but when enemy Arabs spot him, Zohan has to call on his military skills if he is ever to wield scissors again.'),
(5, 'The BFG', 2016, 'Ten-year-old Sophie is in for the adventure of a lifetime when she meets the Big Friendly Giant (Mark Rylance). Naturally scared at first, the young girl soon realizes that the 24-foot behemoth is actually quite gentle and charming. As their friendship grows, Sophie''s presence attracts the unwanted attention of Bloodbottler, Fleshlumpeater and other giants. After traveling to London, Sophie and the BFG must convince Queen Victoria to help them get rid of all the bad giants once and for all.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Merchandise`
--
ALTER TABLE `Merchandise`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Merchandise`
--
ALTER TABLE `Merchandise`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `movies`
--
ALTER TABLE `movies`
  MODIFY `id` tinyint(3) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
