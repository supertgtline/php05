-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 28, 2016 at 08:27 PM
-- Server version: 5.5.53-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `real_estate`
--

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE IF NOT EXISTS `cities` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `created` int(10) NOT NULL,
  `modified` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`id`, `name`, `created`, `modified`) VALUES
(1, 'Đà Nẵng', 0, 0),
(2, 'Hà Nội', 0, 0),
(3, 'Hồ Chí Minh', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `avatar` varchar(255) NOT NULL,
  `birthday` int(10) NOT NULL,
  `gender` int(1) NOT NULL COMMENT 'ID: 1: Male, 2: Female: 0: None',
  `email` varchar(255) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `created` int(10) NOT NULL,
  `modified` int(10) NOT NULL,
  `city_id` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `username`, `password`, `avatar`, `birthday`, `gender`, `email`, `phone`, `created`, `modified`, `city_id`) VALUES
(13, 'Lương', 'Cảnh', 'hoaicanh', 'e10adc3949ba59abbe56e057f20f883e', 'anh-girl-xinh-gai-dep-98-18.jpg', 563475600, 1, 'apple.luong1905@gmail.com', '0988794607', 1482880509, 1482880509, 0),
(14, 'Lương', 'Cảnh', 'hoaicanh1', 'e10adc3949ba59abbe56e057f20f883e', 'hinh-anh-girl-xinh-1.jpg', 783018000, 1, 'hoaicanhqt@gmail.com', '398579898', 1482888213, 1482888213, 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
