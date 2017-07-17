-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 17, 2017 at 01:13 PM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `baidulogin`
--

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE IF NOT EXISTS `member` (
  `id` int(100) NOT NULL AUTO_INCREMENT COMMENT '會員編號',
  `account` varchar(200) NOT NULL COMMENT '會員帳號',
  `telephone` varchar(100) NOT NULL COMMENT '手機號',
  `pwd` varchar(100) NOT NULL COMMENT '會員密碼',
  `tt` varchar(32) NOT NULL,
  `profile_id` int(100) DEFAULT NULL COMMENT '會員信息編號',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE IF NOT EXISTS `profile` (
  `id` int(100) NOT NULL AUTO_INCREMENT COMMENT '個人信息編號',
  `bodyType` int(10) NOT NULL COMMENT '體型',
  `mariageType` int(10) NOT NULL COMMENT '婚姻狀態',
  `smokeHabit` tinyint(10) NOT NULL DEFAULT '-1' COMMENT '抽菸習慣',
  `drinkHabit` tinyint(10) NOT NULL DEFAULT '-1' COMMENT '飲酒習慣',
  `sleepHabit` tinyint(10) NOT NULL DEFAULT '-1' COMMENT '睡眠習慣',
  `personalitySet` varchar(100) NOT NULL DEFAULT '' COMMENT '複選個性',
  `education` int(10) NOT NULL COMMENT '教育程度',
  `ocupation` int(10) NOT NULL COMMENT '當前職業',
  `contact` varchar(255) NOT NULL COMMENT '聯繫方式',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
