-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 26, 2013 at 01:22 PM
-- Server version: 5.1.36
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `agos`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE IF NOT EXISTS `admin_login` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(50) NOT NULL,
  `user_password` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`id`, `user_name`, `user_password`) VALUES
(1, 'khalid', 'khalid'),
(2, 'abbasi', 'abbasi');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE IF NOT EXISTS `post` (
  `post_id` int(10) NOT NULL AUTO_INCREMENT,
  `post_title` varchar(100) NOT NULL,
  `post_date` date NOT NULL,
  `post_author` varchar(100) NOT NULL,
  `post_image` text NOT NULL,
  `post_keywords` text NOT NULL,
  `post_content` text NOT NULL,
  PRIMARY KEY (`post_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`post_id`, `post_title`, `post_date`, `post_author`, `post_image`, `post_keywords`, `post_content`) VALUES
(19, 'new post 1', '0000-00-00', 'abbbaaaaaaaaaaa', 'Koala.jpg', 'abba new on', 'This is new post edited via admin panel\r\n\r\n...................................\r\n\r\n100000 tiem editions'),
(17, 'Heritage Cycle', '0000-00-00', 'Abdul Aziz', 'Lighthouse.jpg', 'Cycle diagram Cycle diagram', 'This is sixth time testing from admin panel to modify a post does it work let see................................\r\n\r\n\r\n\r\n120000'),
(18, 'Heritage Cycle', '2020-12-13', 'Abdul Aziz', 'Lighthouse.jpg', 'Cycle diagram Cycle diagram', 'This is 7th time testing from admin panel to modify a post does it work let see................................\r\n'),
(22, 'This is new post from admin 4', '2020-12-13', 'abbasi', '994897_229378183884666_1313411405_n.jpg', '4 new post 4 post', 'From the insert point of view this is post to insert from admin panel for testing purposes'),
(23, 'This is last time testing', '2020-12-13', 'abbasi ', 'images-1.jpeg', 'last time last time', 'This is inserting data testing via admin panel let see whats happen....................................'),
(12, 'Heritage Cycle', '2020-12-13', 'Abdul Aziz', 'images-1.jpeg', 'Cycle diagram Cycle diagram', 'This is modify from admin panel....\r\nby Khalid abbasi\r\n'),
(13, 'Heritage Cycle', '2020-12-13', 'Abdul Aziz', 'Penguins.jpg', 'Cycle diagram Cycle diagram', 'This is second time modified from admin panel for testing purpose ..............\r\n'),
(14, 'Heritage Cycle', '2020-12-13', 'Abdul Aziz', 'Tulips.jpg', 'Cycle diagram Cycle diagram', 'This is third time modified from admin panel for testing purposes..............\r\nwhat a nices job\r\n'),
(15, 'Cultural Heritage Connections ', '2020-12-13', 'Naheem Khan', 'Chrysanthemum.jpg', 'Mutual Cultural Heritage Mutual Cultural Heritage', 'This is fourth time modify post for testing purposes via admin panel.........................................\r\n\r\n\r\n\r\nA good starting point for your search to information on mutual heritage activities are the countries pages. Per country an overview of thematic collaboration and an overview of related projects is presented there. \r\n'),
(10, 'Heritage Cycle', '2006-12-13', 'Abdul Aziz', 'Lighthouse.jpg', 'Cycle diagram Cycle diagram', 'The Heritage Cycle diagram gives us an idea how we can make the past part of our future (Simon Thurley, 2005). In a clockwise direction the wedges and arrows read:\r\n By understanding (cultural heritage)\r\n    people value it \r\nBy valuing it\r\n    people want to care for it \r\nBy caring for it\r\n    it will help people enjoy it\r\nFrom enjoying it\r\n    comes a thirst to understand \r\nBy understanding it………..etc \r\n'),
(11, '1200 time edition', '0000-00-00', 'abbasi Khan', '1467482_767124723303964_1774420239_n.jpg', 'heritataaaaaaaaaaaaaaaaaaaaaaa', 'This is edited 9 the tiem from admin panel \r\ngood job good job\r\n.................................. \r\n\r\nA good starting point for your search to information on mutual heritage activities are the countries pages. Per country an overview of thematic collaboration and an overview of related projects is presented there. \r\n'),
(20, 'This is new post from admin', '2020-12-13', 'khalid abbasi', '1477435_165351190341444_1920081520_n.jpg', 'new post new post post', 'From the insert point of view this is post to insert from admin panel for testing purposes'),
(21, 'This is new post from admin 3', '2020-12-13', 'abbasi', '994897_229378183884666_1313411405_n.jpg', '3 new post 3 post', 'From the insert point of view this is post to insert from admin panel for testing purposes');
