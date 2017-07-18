-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 18, 2017 at 09:18 AM
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
-- Table structure for table `habittype`
--

CREATE TABLE IF NOT EXISTS `habittype` (
  `id` int(200) NOT NULL AUTO_INCREMENT COMMENT '習慣編號',
  `type` varchar(100) NOT NULL COMMENT '習慣類型',
  `name_en` varchar(100) NOT NULL COMMENT '習慣(英)',
  `name` varchar(100) NOT NULL COMMENT '習慣(中)',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=63 ;

--
-- Dumping data for table `habittype`
--

INSERT INTO `habittype` (`id`, `type`, `name_en`, `name`) VALUES
(1, 'isSmoke', 'Non-Smoker', '不抽煙'),
(2, 'isSmoke', 'Light Smoker', '偶爾抽'),
(3, 'isSmoke', 'Heavy Smoker', '經常抽'),
(4, 'bodyType', 'Burly', '魁梧'),
(5, 'bodyType', 'muscular', '肌肉發達'),
(6, 'bodyType', 'Strong', '結實有型'),
(7, 'bodyType', 'Symmetry', '勻稱'),
(8, 'bodyType', 'Average', '平勻/中等'),
(9, 'bodyType', 'slim', '苗條'),
(10, 'bodyType', 'bony', '骨感'),
(11, 'bodyType', 'curved', '豐滿(性感/曲線動人)'),
(12, 'bodyType', 'Frivolous', '微胖'),
(13, 'bodyType', 'overWeight', '過胖型'),
(14, 'marriage', 'Single', '單身'),
(15, 'marriage', 'Married', '已婚'),
(16, 'marriage', 'InRelationship', '交往中'),
(17, 'marriage', 'NotStable', '不穩定關係'),
(18, 'marriage', 'Divorced', '離婚'),
(19, 'marriage', 'Separated', '分居'),
(20, 'eatingHabit', 'Vegetarian', '素食'),
(21, 'eatingHabit', 'Carnivore', '葷食'),
(22, 'sleepHabit', 'lateSleep', '晚睡'),
(23, 'sleepHabit', 'earlySleep', '早睡'),
(24, 'personality', 'temper', '溫柔'),
(25, 'personality', 'rude', '粗矌'),
(26, 'personality', 'outgoing', '活潑'),
(27, 'personality', 'oldAge', '老成'),
(28, 'personality', 'innergoing', '內向'),
(29, 'personality', 'Kailang', '開朗'),
(30, 'personality', 'Haoshuang', '豪爽'),
(31, 'personality', 'silent', '沉默'),
(32, 'personality', 'Jizao', '急躁'),
(33, 'personality', 'Wenzhong', '穩重'),
(34, 'education', 'temper', '高中'),
(35, 'education', 'temper', '大學'),
(36, 'education', 'temper', '碩士'),
(37, 'education', 'temper', '博士'),
(38, 'ocupation', 'daiye', '待業'),
(39, 'ocupation', 'student', '學生'),
(40, 'ocupation', 'public', '公共/行政'),
(41, 'ocupation', 'police', '警察/紀律部隊'),
(42, 'ocupation', 'temper', '教育或研究'),
(43, 'ocupation', 'research', '商業'),
(44, 'ocupation', 'builder', '建築業'),
(45, 'ocupation', 'finiance', '金融與保險'),
(46, 'ocupation', 'maker', '製造和供應'),
(47, 'ocupation', 'house', '房地產'),
(48, 'ocupation', 'tech', '資訊科技'),
(49, 'ocupation', 'service', '服務業'),
(50, 'ocupation', 'farmer', '農業'),
(51, 'ocupation', 'housewife', '家庭主婦'),
(52, 'ocupation', 'medical', '醫護界'),
(53, 'ocupation', 'law', '法律界'),
(54, 'ocupation', 'retailer', '零售'),
(55, 'ocupation', 'logistics', '交通/物流'),
(56, 'ocupation', 'travel', '旅遊業'),
(57, 'ocupation', 'amuzement', '娛樂'),
(58, 'ocupation', 'publisher', '出版'),
(59, 'ocupation', 'advertisement', '廣播與媒體'),
(60, 'ocupation', 'sales', '營銷'),
(61, 'ocupation', 'art', '藝術'),
(62, 'ocupation', 'other', '其他');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
