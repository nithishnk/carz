-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 10, 2016 at 06:44 AM
-- Server version: 5.5.32
-- PHP Version: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `carzone_db`
--
CREATE DATABASE IF NOT EXISTS `carzone_db` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `carzone_db`;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_apointment`
--

CREATE TABLE IF NOT EXISTS `tbl_apointment` (
  `fname` varchar(50) NOT NULL,
  `email` varchar(20) NOT NULL,
  `mobile` varchar(12) NOT NULL,
  `vno` varchar(20) NOT NULL,
  `vmodel` varchar(25) NOT NULL,
  `voname` varchar(25) NOT NULL,
  `rid` int(10) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`email`),
  UNIQUE KEY `rid` (`rid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `tbl_apointment`
--

INSERT INTO `tbl_apointment` (`fname`, `email`, `mobile`, `vno`, `vmodel`, `voname`, `rid`) VALUES
('chandru', 'cahdnru@gmail.com', '9740260882', 'KA17 ES 6686', '2015', 'chandru', 5),
('devu', 'devu@gmail.com', '9740264302', 'ka 17 l 9933', '2013', 'devu', 6);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_applied_service`
--

CREATE TABLE IF NOT EXISTS `tbl_applied_service` (
  `ap_id` int(10) NOT NULL AUTO_INCREMENT,
  `email` varchar(20) NOT NULL,
  `mobileno` varchar(12) NOT NULL,
  `applied_for` varchar(11) NOT NULL,
  `status` varchar(50) NOT NULL DEFAULT 'waiting',
  PRIMARY KEY (`ap_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `tbl_applied_service`
--

INSERT INTO `tbl_applied_service` (`ap_id`, `email`, `mobileno`, `applied_for`, `status`) VALUES
(4, 'devu1@gmail.com', '9740264302', 'Repainting', 'Approved Please come within 12 hours'),
(5, 'devu2@gmail.com', '9740264302', 'service1', 'Approved Please come within 12 hours'),
(6, 'devu@gmail.com', '9740264302', 'Repainting', 'Approved Please come within 12 hours'),
(7, 'devu@gmail.com', '9740264302', 'Repainting', 'Approved Please come within 12 hours');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_login`
--

CREATE TABLE IF NOT EXISTS `tbl_login` (
  `username` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `role` varchar(8) DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_login`
--

INSERT INTO `tbl_login` (`username`, `password`, `role`) VALUES
('cahdnru@gmail.com', 'chandru', 'user'),
('devu@gmail.com', 'devu1', 'user'),
('admin', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_services`
--

CREATE TABLE IF NOT EXISTS `tbl_services` (
  `sid` int(10) NOT NULL AUTO_INCREMENT,
  `service_name` varchar(30) NOT NULL,
  `service_desc` varchar(100) NOT NULL,
  PRIMARY KEY (`sid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `tbl_services`
--

INSERT INTO `tbl_services` (`sid`, `service_name`, `service_desc`) VALUES
(1, 'Repainting', 'Repainting'),
(7, 'Under Coating', 'its too good'),
(8, 'Shining', 'Shine like the Sun');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
