-- phpMyAdmin SQL Dump
-- version 2.8.2.4
-- http://www.phpmyadmin.net
-- 
-- Host: localhost:3306
-- Generation Time: Feb 07, 2008 at 06:32 PM
-- Server version: 4.1.20
-- PHP Version: 5.0.5
-- 
-- Database: `phpbirthday`
-- 

-- --------------------------------------------------------

-- 
-- Table structure for table `phpbirthday`
-- 

CREATE TABLE IF NOT EXISTS `phpbirthday` (
  `Name` varchar(50) default NULL,
  `Address` varchar(150) default NULL,
  `City` varchar(60) default NULL,
  `State` varchar(60) default NULL,
  `Postal` varchar(60) default NULL,
  `Country` varchar(80) default NULL,
  `B_Date` date default NULL,
  `IP_Address` varchar(50) default NULL,
  `ID` int(11) NOT NULL auto_increment,
  `H_Phone` varchar(25) default NULL,
  `M_Phone` varchar(25) default NULL,
  `Email` varchar(60) default NULL,
  `Website` varchar(70) default NULL,
  PRIMARY KEY  (`ID`),
  UNIQUE KEY `ID` (`ID`),
  KEY `Name` (`Name`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

-- 
-- Dumping data for table `phpbirthday`
-- 

INSERT INTO `phpbirthday` (`Name`, `Address`, `City`, `State`, `Postal`, `Country`, `B_Date`, `IP_Address`, `ID`, `H_Phone`, `M_Phone`, `Email`, `Website`) VALUES ('Tim Jenkins', '1234 N. Montrose', 'Chicago', 'Illinois', '60610', 'U.S.A.', '1984-01-15', '127.0.0.1', 1, '123-456-7890', '098-765-4321', 'demo_tim@phpbirthday.org', 'www.phpbirthday.org'),
('Jerry Seinfeld', '4321 N. Ashland', 'Chicago', 'Illinois', '60610', 'U.S.A', '1954-04-29', '127.0.0.1', 2, '123-456-7890', '123-456-7890', 'demo_Jerry@phpbirthday.org', 'www.phpbirthday.org'),
('John Smith', '4321 West Counter Street', 'Chicago', 'Illinois', '60603', 'U.S.A.', '1945-02-13', '127.0.0.1', 3, '123-456-7890', '123-456-7890', 'demo_John@phpbirthday.org', 'www.phpbirthday.org');

-- --------------------------------------------------------

-- 
-- Table structure for table `settings`
-- 

CREATE TABLE IF NOT EXISTS `settings` (
  `Path` varchar(100) NOT NULL default '',
  `To_Email` varchar(80) NOT NULL default '',
  `From_Email` varchar(80) NOT NULL default '',
  `Subject` varchar(80) NOT NULL default '',
  `Monthly_Email` int(1) NOT NULL default '0',
  `Email_Reminders` int(1) NOT NULL default '0',
  `ID` int(1) NOT NULL default '0',
  UNIQUE KEY `ID` (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- 
-- Dumping data for table `settings`
-- 

INSERT INTO `settings` (`Path`, `To_Email`, `From_Email`, `Subject`, `Monthly_Email`, `Email_Reminders`, `ID`) VALUES ('http://example.com/php/phpbirthday/', 'phpbirthday@example.com', 'phpbirthday@example.com', 'PHPBirthday Reminder', 1, 1, 0);
