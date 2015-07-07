-- phpMyAdmin SQL Dump
-- version 2.11.6
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 05, 2015 at 12:53 PM
-- Server version: 5.0.51
-- PHP Version: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `wellsfargokr`
--

-- --------------------------------------------------------

--
-- Table structure for table `app_details`
--

CREATE TABLE `app_details` (
  `app_name` varchar(100) NOT NULL,
  `app_description` varchar(10000) default NULL,
  `doc_path` varchar(300) default NULL,
  `image_path` varchar(300) default NULL,
  `created_by` varchar(10) NOT NULL,
  `created_on` timestamp NOT NULL default CURRENT_TIMESTAMP,
  PRIMARY KEY  (`app_name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `uname` varchar(20) NOT NULL,
  `password` varchar(100) default '6ad14ba9986e3615423dfca256d04e3f' COMMENT 'user123-6ad14ba9986e3615423dfca256d04e3f',
  PRIMARY KEY  (`uname`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`uname`, `password`) VALUES
('admin', '6ad14ba9986e3615423dfca256d04e3f');
