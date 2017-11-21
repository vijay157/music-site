-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 20, 2017 at 05:12 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `msrecords`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `u_id` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `message` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`u_id`, `name`, `email`, `message`) VALUES
(1, 'gopi', 'gopi@gmail.com', 'nice songs');

-- --------------------------------------------------------

--
-- Table structure for table `musiclogin`
--

CREATE TABLE `musiclogin` (
  `u_id` int(11) NOT NULL,
  `name` text NOT NULL,
  `password` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `musiclogin`
--

INSERT INTO `musiclogin` (`u_id`, `name`, `password`) VALUES
(1, 'user', 'user123');

-- --------------------------------------------------------

--
-- Table structure for table `musicsongs`
--

CREATE TABLE `musicsongs` (
  `u_id` int(11) NOT NULL,
  `allbum_movie_name` text NOT NULL,
  `allbum_name` text NOT NULL,
  `allbum_singers` text NOT NULL,
  `allbum_description` text NOT NULL,
  `allbum_img` text NOT NULL,
  `allbum_audio` text NOT NULL,
  `allbum_youtube` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `musicsongs`
--

INSERT INTO `musicsongs` (`u_id`, `allbum_movie_name`, `allbum_name`, `allbum_singers`, `allbum_description`, `allbum_img`, `allbum_audio`, `allbum_youtube`) VALUES
(2, 'jai lava kusa', 'ravanna', 'chandar bose', 'gfuhuh', 'img/DJW3H3eU8AAB_mz.jpg large.jpg', 'audio/[iSongs.info] 01 - Raavana.mp3', ''),
(12, 'jai lava kusa', 'ravanna', 'chandar bose', 'gnm', 'img/DJW3H3eU8AAB_mz.jpg large.jpg', 'audio/06 - A Square B Square (Female) [DRGM].mp3', ''),
(10, 'jai lava', 'ravana', 'chandra bose', 'jhjo', 'img/PawanKalyan-Attarintiki-Daredi-Stills-08.jpg', 'audio/[iSongs.info] 04 - Dochestha.mp3', 'www.youtube.com/watch?v=tHYkmznPWp0'),
(13, 'jai lava kusa', 'ravanna', 'chandar bose', 'asdf', 'img/download.jpg', 'audio/[iSongs.info] 04 - Dochestha.mp3', 'fggh');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`u_id`);

--
-- Indexes for table `musiclogin`
--
ALTER TABLE `musiclogin`
  ADD PRIMARY KEY (`u_id`);

--
-- Indexes for table `musicsongs`
--
ALTER TABLE `musicsongs`
  ADD PRIMARY KEY (`u_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `musiclogin`
--
ALTER TABLE `musiclogin`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `musicsongs`
--
ALTER TABLE `musicsongs`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
