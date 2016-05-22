-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: localhost:8889
-- Generation Time: May 22, 2016 at 06:23 PM
-- Server version: 5.5.34
-- PHP Version: 5.5.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `Mysysdatabase`
--

-- --------------------------------------------------------

--
-- Table structure for table `usrinfo`
--

CREATE TABLE `usrinfo` (
  `username` char(50) COLLATE utf8_bin NOT NULL,
  `usrid` int(5) NOT NULL AUTO_INCREMENT COMMENT '用户编码',
  `password` char(50) COLLATE utf8_bin NOT NULL COMMENT '用户密码',
  `email` char(50) COLLATE utf8_bin NOT NULL COMMENT '用户邮箱',
  `usrindex` int(1) NOT NULL DEFAULT '1' COMMENT '用户类型',
  PRIMARY KEY (`usrid`),
  UNIQUE KEY `usrid` (`usrid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=10002 ;

--
-- Dumping data for table `usrinfo`
--

INSERT INTO `usrinfo` (`username`, `usrid`, `password`, `email`, `usrindex`) VALUES
('admin', 10000, 'admin', 'admin@163.com', 0),
('liwei', 10001, '123', '123@qq.com', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
