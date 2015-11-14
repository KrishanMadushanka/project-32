-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 02, 2015 at 02:38 PM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `smart_shopper`
--

-- --------------------------------------------------------

--
-- Table structure for table `bill`
--

CREATE TABLE IF NOT EXISTS `bill` (
  `I_Name` varchar(60) NOT NULL,
  `Cost1` int(60) DEFAULT NULL,
  `Cost2` int(60) DEFAULT NULL,
  `Cost3` int(60) DEFAULT NULL,
  `Cost4` int(60) DEFAULT NULL,
  `Cost5` int(60) DEFAULT NULL,
  `Total_Cost` int(60) NOT NULL,
  PRIMARY KEY (`I_Name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(60) NOT NULL,
  `comment` text NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `ID` (`ID`),
  KEY `ID_2` (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`ID`, `email`, `comment`) VALUES
(1, 'bngunawardana@gmail.com', 'Aiiiiiiiiiii'),
(2, 'nilekapawan@gmail.com', 'Aio'),
(3, 'sisilgreshan01@gmail.com', 'Hello'),
(4, 'sisilgreshan01@gmail.com', 'Hello');

-- --------------------------------------------------------

--
-- Table structure for table `consumer`
--

CREATE TABLE IF NOT EXISTS `consumer` (
  `Search_date` date NOT NULL DEFAULT '0000-00-00',
  `Search_time` time NOT NULL DEFAULT '00:00:00',
  PRIMARY KEY (`Search_date`,`Search_time`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `deal`
--

CREATE TABLE IF NOT EXISTS `deal` (
  `ItemID` varchar(60) NOT NULL,
  `I_Name` varchar(60) NOT NULL,
  `price1` int(60) DEFAULT NULL,
  `price2` int(60) NOT NULL,
  `price3` int(60) NOT NULL,
  `price4` int(60) NOT NULL,
  `price5` int(60) NOT NULL,
  `quantity` int(60) NOT NULL,
  PRIMARY KEY (`ItemID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE IF NOT EXISTS `item` (
  `User_ID` varchar(10) NOT NULL DEFAULT '0',
  `Item_ID` varchar(60) NOT NULL DEFAULT '0',
  `Item_Name` varchar(60) DEFAULT NULL,
  `Price` int(5) DEFAULT NULL,
  PRIMARY KEY (`User_ID`,`Item_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`User_ID`, `Item_ID`, `Item_Name`, `Price`) VALUES
('0', 'I001', 'Ponni Rice', 75),
('0', 'I002', 'White raw rice', 80),
('0', 'I003', 'Red raw rice', 63),
('0', 'I004', 'Samba rice steamed', 35),
('0', 'I005', 'Samba Kekulu White', 75),
('0', 'I006', 'Nadu steamed', 80),
('0', 'I007', 'Supiri Keeri Samba', 78),
('0', 'I008', 'Tomato', 40),
('0', 'I009', 'Carrot', 35),
('0', 'I010', 'B.Onion', 35),
('0', 'I011', 'Potatoes', 35),
('0', 'I012', 'Cabbage', 35),
('0', 'I013', 'Green Beans', 35),
('0', 'I014', 'Kankun', 35),
('0', 'I015', 'Brinjal', 35),
('0', 'I016', 'Mushroom 200g', 35),
('0', 'I017', 'Pumpkin', 35),
('0', 'I018', 'Vegetable Oil 1l', 35),
('0', 'I019', 'Coconut Oil', 35),
('0', 'I020', 'Preema Kottu Mee 85g', 35),
('0', 'I021', 'Maggi 85g', 35),
('0', 'I022', 'Harishchandra plane noodles', 35),
('0', 'I023', 'Prima Sandwitch Bread', 35),
('0', 'I024', 'Finagle Sandwich Bread', 35),
('0', 'I025', 'Prima Crust Top Bread', 35),
('0', 'I026', 'Finagle Kurakkan bread', 35),
('0', 'I027', 'Finagle Kurakkan diet bread', 35),
('0', 'I028', 'Tiera Layer Cake Vanilla', 35),
('0', 'I029', 'Tiera Layer Cake Chocolate', 35),
('0', 'I030', 'Little lion choco Role', 35),
('0', 'I031', 'Brown Sugar', 40),
('0', 'I032', 'White Sugar', 35),
('0', 'I033', 'Anchor 400g', 35),
('0', 'I034', 'Ratti 400g', 35),
('0', 'I035', 'Highland 400g', 35),
('0', 'I036', 'Milo 400g', 35),
('0', 'I037', 'Nespray 400g', 35),
('0', 'I038', 'Maliban 400g', 35),
('0', 'I039', 'Nestomolt 400g', 35),
('0', 'I040', 'Lankasoy Chicken', 35),
('0', 'I041', 'Lankasoy Regular', 35),
('0', 'I042', 'Lankasoy Curry', 35),
('0', 'I043', 'Raigam Chicken', 35),
('0', 'I044', 'Coca Cola 500ml', 35),
('0', 'I045', 'sprite 2l', 35),
('0', 'I046', 'Coco Cola 2l', 35),
('0', 'I047', 'Munchee Super Creamcraker 190 g', 35),
('0', 'I048', 'Maliban Smart Cream craker 190g', 35),
('0', 'I049', 'Chocolate biscuit', 35),
('0', 'I050', 'Nice', 35),
('0', 'I051', 'Ginger biscuit', 35),
('0', 'I052', 'Munchee Super Creamcracker 320g', 35),
('0', 'I053', 'Maliban Smart Cream craker 320g', 35),
('0', 'I054', 'Kotmale', 35),
('0', 'I055', 'Highland Plane', 35),
('0', 'I056', 'Newdale', 35),
('0', 'I057', 'CIC', 35),
('0', 'I058', 'Ambewela', 35),
('0', 'I059', 'Sunlight 90g', 35),
('0', 'I060', 'Wonderlight 90g', 35),
('0', 'I061', 'Lifebuoy 90g', 35),
('0', 'I062', 'Detol 90g', 35),
('0', 'I063', 'Vim dishwash bar 200g', 35),
('0', 'I064', 'Sunlight Washing Powder 1kg', 35),
('0', 'I065', 'Diva 1kg', 35),
('0', 'I066', 'Surfexel washing powder 1kg', 35),
('0', 'I067', 'Chillie Powder 100g', 35),
('0', 'I068', 'Curry Powder 100g', 35),
('0', 'I069', 'Turmeric Powder 100g', 35),
('0', 'I070', 'Salt Powder 400g', 35),
('0', 'I071', 'Salt 500g', 35),
('0', 'I072', 'Kumbalawa 200g pkt', 35),
('0', 'I073', 'Maldive Fish 100g pkt', 35),
('0', 'I074', '', 35),
('0', 'I075', '', 35),
('0', 'I076', '', 35),
('0', 'I077', '', 35),
('0', 'I078', '', 35),
('0', 'I079', '', 35),
('0', 'I080', '', 35),
('0', 'I081', '', 35),
('0', 'I082', '', 35),
('0', 'I083', '', 35),
('0', 'I084', '', 35),
('0', 'I085', '', 35),
('0', 'I086', '', 35),
('0', 'I087', '', 35),
('0', 'I088', '', 35),
('0', 'I089', '', 35),
('0', 'I090', '', 35),
('0', 'I091', '', 35),
('0', 'I092', '', 35),
('0', 'I093', '', 35),
('0', 'I094', '', 35),
('0', 'I095', '', 35),
('0', 'I096', '', 35),
('0', 'I097', '', 35),
('0', 'I098', '', 35),
('0', 'I099', '', 35),
('0', 'I100', '', 35),
('1', 'I001', 'Ponni rice', 40),
('1', 'I002', 'White raw rice', 8868698),
('1', 'I003', 'Red raw rice', 35),
('1', 'I004', 'Samba rice steamed', 35),
('1', 'I005', 'Samba Kekulu white', 35),
('1', 'I006', 'Nadu steamed', 35),
('1', 'I007', 'Supiri Keeri Samba', 35),
('1', 'I008', 'Tomato', 35),
('1', 'I009', 'Carrot', 35),
('1', 'I010', 'B.onion', 35),
('1', 'I011', 'Potatoes', 35),
('1', 'I012', 'Cabbage', 35),
('1', 'I013', 'Green beans', 35),
('1', 'I014', 'Kankun', 35),
('1', 'I015', 'Brinjal', 35),
('1', 'I016', 'Mushroom 200g', 35),
('1', 'I017', 'Pumpkin', 35),
('1', 'I018', 'Vegetable Oil 1l', 35),
('1', 'I019', 'Coconut Oil', 35),
('1', 'I020', 'Prima Kottu mee 85g', 35),
('1', 'I021', 'Maggi 85g', 40),
('1', 'I022', 'Harischandra Plane Noodles', 35),
('1', 'I023', 'Prima Sandwich Bread', 35),
('1', 'I024', 'Finagle Sandwich Bread', 35),
('1', 'I025', 'Prima Crust Top Bread', 35),
('1', 'I026', 'Finagle Kurakkan bread', 35),
('1', 'I027', 'Finagle Kurakkan diet bread', 35),
('1', 'I028', 'Tiera Layer Cake Vanilla', 35),
('1', 'I029', 'Tiera Layer Cake Chocolate', 35),
('1', 'I030', 'Little lion choco Role', 35),
('1', 'I031', 'Brown Sugar', 40),
('1', 'I032', 'White Sugar', 35),
('1', 'I033', 'Anchor 400g', 35),
('1', 'I034', 'Ratti 400g', 35),
('1', 'I035', 'Highland 400g', 35),
('1', 'I036', 'Milo 400g', 35),
('1', 'I037', 'Nespray 400g', 35),
('1', 'I038', 'Maliban 400g', 35),
('1', 'I039', 'Nestomolt 400g', 35),
('1', 'I040', 'Lankasoy Chicken', 35),
('1', 'I041', 'Lankasoy Regular', 35),
('1', 'I042', 'Lankasoy Curry', 35),
('1', 'I043', 'Raigam Chicken', 35),
('1', 'I044', 'Coca Cola 500ml', 35),
('1', 'I045', 'sprite 2l', 35),
('1', 'I046', 'Coco Cola 2l', 35),
('1', 'I047', 'Munchee Super Creamcraker 190 g', 35),
('1', 'I048', 'Maliban Smart Cream craker 190g', 35),
('1', 'I049', 'Chocolate biscuit', 35),
('1', 'I050', 'Nice', 35),
('1', 'I051', 'Ginger biscuit', 35),
('1', 'I052', 'Munchee Super Creamcracker 320g', 35),
('1', 'I053', 'Maliban Smart Cream craker 190g', 35),
('1', 'I054', 'Kotmale', 35),
('1', 'I055', 'Highland Plane', 35),
('1', 'I056', 'Newdale', 35),
('1', 'I057', 'CIC', 35),
('1', 'I058', 'Ambewela', 35),
('1', 'I059', 'Sunlight 90g', 35),
('1', 'I060', 'Wonderlight 90g', 35),
('1', 'I061', 'Lifebuoy 90g', 35),
('1', 'I062', 'Detol 90g', 35),
('1', 'I063', 'Vim dishwash bar 200g', 35),
('1', 'I064', 'Sunlight Washing Powder 1kg', 35),
('1', 'I065', 'Diva 1kg', 35),
('1', 'I066', 'Surfexel washing powder 1kg', 35),
('1', 'I067', 'Chillie Powder 100g', 35),
('1', 'I068', 'Curry Powder 100g', 35),
('1', 'I069', 'Turmeric Powder 100g', 35),
('1', 'I070', 'Salt Powder 400g', 35),
('1', 'I071', 'Salt 500g', 35),
('1', 'I072', 'Kumbalawa 200g pkt', 35),
('1', 'I073', 'Maldive Fish 100g pkt', 35),
('1', 'I074', '', 35),
('1', 'I075', '', 35),
('1', 'I076', '', 35),
('1', 'I077', '', 35),
('1', 'I078', '', 35),
('1', 'I079', '', 35),
('1', 'I080', '', 35),
('1', 'I081', '', 35),
('1', 'I082', '', 35),
('1', 'I083', '', 35),
('1', 'I084', '', 35),
('1', 'I085', '', 35),
('1', 'I086', '', 35),
('1', 'I087', '', 35),
('1', 'I088', '', 35),
('1', 'I089', '', 35),
('1', 'I090', '', 35),
('1', 'I091', '', 35),
('1', 'I092', '', 35),
('1', 'I093', '', 35),
('1', 'I094', '', 35),
('1', 'I095', '', 35),
('1', 'I096', '', 35),
('1', 'I097', '', 35),
('1', 'I098', '', 35),
('1', 'I099', '', 35),
('1', 'I100', '', 35),
('2', 'I001', 'Ponni rice', 40),
('2', 'I002', 'White raw rice', 8868698),
('2', 'I003', 'Red raw rice', 35),
('2', 'I004', 'Samba rice steamed', 35),
('2', 'I005', 'Samba Kekulu white', 35),
('2', 'I006', 'Nadu steamed', 35),
('2', 'I007', 'Supiri Keeri Samba', 35),
('2', 'I008', 'Tomato', 35),
('2', 'I009', 'Carrot', 35),
('2', 'I010', 'B.onion', 35),
('2', 'I011', 'Potatoes', 35),
('2', 'I012', 'Cabbage', 35),
('2', 'I013', 'Green beans', 35),
('2', 'I014', 'Kankun', 35),
('2', 'I015', 'Brinjal', 35),
('2', 'I016', 'Mushroom 200g', 35),
('2', 'I017', 'Pumpkin', 35),
('2', 'I018', 'Vegetable Oil 1l', 35),
('2', 'I019', 'Coconut Oil', 35),
('2', 'I020', 'Prima Kottu mee 85g', 35),
('2', 'I021', 'Maggi 85g', 40),
('2', 'I022', 'Harischandra Plane Noodles', 35),
('2', 'I023', 'Prima Sandwich Bread', 35),
('2', 'I024', 'Finagle Sandwich Bread', 35),
('2', 'I025', 'Prima Crust Top Bread', 35),
('2', 'I026', 'Finagle Kurakkan bread', 35),
('2', 'I027', 'Finagle Kurakkan diet bread', 35),
('2', 'I028', 'Tiera Layer Cake Vanilla', 35),
('2', 'I029', 'Tiera Layer Cake Chocolate', 35),
('2', 'I030', 'Little lion choco Role', 35),
('2', 'I031', 'Brown Sugar', 40),
('2', 'I032', 'White Sugar', 35),
('2', 'I033', 'Anchor 400g', 35),
('2', 'I034', 'Ratti 400g', 35),
('2', 'I035', 'Highland 400g', 35),
('2', 'I036', 'Milo 400g', 35),
('2', 'I037', 'Nespray 400g', 35),
('2', 'I038', 'Maliban 400g', 35),
('2', 'I039', 'Nestomolt 400g', 35),
('2', 'I040', 'Lankasoy Chicken', 35),
('2', 'I041', 'Lankasoy Regular', 35),
('2', 'I042', 'Lankasoy Curry', 35),
('2', 'I043', 'Raigam Chicken', 35),
('2', 'I044', 'Coca Cola 500ml', 35),
('2', 'I045', 'sprite 2l', 35),
('2', 'I046', 'Coco Cola 2l', 35),
('2', 'I047', 'Munchee Super Creamcraker 190 g', 35),
('2', 'I048', 'Maliban Smart Cream craker 190g', 35),
('2', 'I049', 'Chocolate biscuit', 35),
('2', 'I050', 'Nice', 35),
('2', 'I051', 'Ginger biscuit', 35),
('2', 'I052', 'Munchee Super Creamcracker 320g', 35),
('2', 'I053', 'Maliban Smart Cream craker 190g', 35),
('2', 'I054', 'Kotmale', 35),
('2', 'I055', 'Highland Plane', 35),
('2', 'I056', 'Newdale', 35),
('2', 'I057', 'CIC', 35),
('2', 'I058', 'Ambewela', 35),
('2', 'I059', 'Sunlight 90g', 35),
('2', 'I060', 'Wonderlight 90g', 35),
('2', 'I061', 'Lifebuoy 90g', 35),
('2', 'I062', 'Detol 90g', 35),
('2', 'I063', 'Vim dishwash bar 200g', 35),
('2', 'I064', 'Sunlight Washing Powder 1kg', 35),
('2', 'I065', 'Diva 1kg', 35),
('2', 'I066', 'Surfexel washing powder 1kg', 35),
('2', 'I067', 'Chillie Powder 100g', 35),
('2', 'I068', 'Curry Powder 100g', 35),
('2', 'I069', 'Turmeric Powder 100g', 35),
('2', 'I070', 'Salt Powder 400g', 35),
('2', 'I071', 'Salt 500g', 35),
('2', 'I072', 'Kumbalawa 200g pkt', 35),
('2', 'I073', 'Maldive Fish 100g pkt', 35),
('2', 'I074', '', 35),
('2', 'I075', '', 35),
('2', 'I076', '', 35),
('2', 'I077', '', 35),
('2', 'I078', '', 35),
('2', 'I079', '', 35),
('2', 'I080', '', 35),
('2', 'I081', '', 35),
('2', 'I082', '', 35),
('2', 'I083', '', 35),
('2', 'I084', '', 35),
('2', 'I085', '', 35),
('2', 'I086', '', 35),
('2', 'I087', '', 35),
('2', 'I088', '', 35),
('2', 'I089', '', 35),
('2', 'I090', '', 35),
('2', 'I091', '', 35),
('2', 'I092', '', 35),
('2', 'I093', '', 35),
('2', 'I094', '', 35),
('2', 'I095', '', 35),
('2', 'I096', '', 35),
('2', 'I097', '', 35),
('2', 'I098', '', 35),
('2', 'I099', '', 35),
('2', 'I100', '', 35),
('3', 'I001', 'Ponni rice', 40),
('3', 'I002', 'White raw rice', 8868698),
('3', 'I003', 'Red raw rice', 35),
('3', 'I004', 'Samba rice steamed', 35),
('3', 'I005', 'Samba Kekulu white', 35),
('3', 'I006', 'Nadu steamed', 35),
('3', 'I007', 'Supiri Keeri Samba', 35),
('3', 'I008', 'Tomato', 35),
('3', 'I009', 'Carrot', 35),
('3', 'I010', 'B.onion', 35),
('3', 'I011', 'Potatoes', 35),
('3', 'I012', 'Cabbage', 35),
('3', 'I013', 'Green beans', 35),
('3', 'I014', 'Kankun', 35),
('3', 'I015', 'Brinjal', 35),
('3', 'I016', 'Mushroom 200g', 35),
('3', 'I017', 'Pumpkin', 35),
('3', 'I018', 'Vegetable Oil 1l', 35),
('3', 'I019', 'Coconut Oil', 35),
('3', 'I020', 'Prima Kottu mee 85g', 35),
('3', 'I021', 'Maggi 85g', 40),
('3', 'I022', 'Harischandra Plane Noodles', 35),
('3', 'I023', 'Prima Sandwich Bread', 35),
('3', 'I024', 'Finagle Sandwich Bread', 35),
('3', 'I025', 'Prima Crust Top Bread', 35),
('3', 'I026', 'Finagle Kurakkan bread', 35),
('3', 'I027', 'Finagle Kurakkan diet bread', 35),
('3', 'I028', 'Tiera Layer Cake Vanilla', 35),
('3', 'I029', 'Tiera Layer Cake Chocolate', 35),
('3', 'I030', 'Little lion choco Role', 35),
('3', 'I031', 'Brown Sugar', 40),
('3', 'I032', 'White Sugar', 35),
('3', 'I033', 'Anchor 400g', 35),
('3', 'I034', 'Ratti 400g', 35),
('3', 'I035', 'Highland 400g', 35),
('3', 'I036', 'Milo 400g', 35),
('3', 'I037', 'Nespray 400g', 35),
('3', 'I038', 'Maliban 400g', 35),
('3', 'I039', 'Nestomolt 400g', 35),
('3', 'I040', 'Lankasoy Chicken', 35),
('3', 'I041', 'Lankasoy Regular', 35),
('3', 'I042', 'Lankasoy Curry', 35),
('3', 'I043', 'Raigam Chicken', 35),
('3', 'I044', 'Coca Cola 500ml', 35),
('3', 'I045', 'sprite 2l', 35),
('3', 'I046', 'Coco Cola 2l', 35),
('3', 'I047', 'Munchee Super Creamcraker 190 g', 35),
('3', 'I048', 'Maliban Smart Cream craker 190g', 35),
('3', 'I049', 'Chocolate biscuit', 35),
('3', 'I050', 'Nice', 35),
('3', 'I051', 'Ginger biscuit', 35),
('3', 'I052', 'Munchee Super Creamcracker 320g', 35),
('3', 'I053', 'Maliban Smart Cream craker 190g', 35),
('3', 'I054', 'Kotmale', 35),
('3', 'I055', 'Highland Plane', 35),
('3', 'I056', 'Newdale', 35),
('3', 'I057', 'CIC', 35),
('3', 'I058', 'Ambewela', 35),
('3', 'I059', 'Sunlight 90g', 35),
('3', 'I060', 'Wonderlight 90g', 35),
('3', 'I061', 'Lifebuoy 90g', 35),
('3', 'I062', 'Detol 90g', 35),
('3', 'I063', 'Vim dishwash bar 200g', 35),
('3', 'I064', 'Sunlight Washing Powder 1kg', 35),
('3', 'I065', 'Diva 1kg', 35),
('3', 'I066', 'Surfexel washing powder 1kg', 35),
('3', 'I067', 'Chillie Powder 100g', 35),
('3', 'I068', 'Curry Powder 100g', 35),
('3', 'I069', 'Turmeric Powder 100g', 35),
('3', 'I070', 'Salt Powder 400g', 35),
('3', 'I071', 'Salt 500g', 35),
('3', 'I072', 'Kumbalawa 200g pkt', 35),
('3', 'I073', 'Maldive Fish 100g pkt', 35),
('3', 'I074', '', 35),
('3', 'I075', '', 35),
('3', 'I076', '', 35),
('3', 'I077', '', 35),
('3', 'I078', '', 35),
('3', 'I079', '', 35),
('3', 'I080', '', 35),
('3', 'I081', '', 35),
('3', 'I082', '', 35),
('3', 'I083', '', 35),
('3', 'I084', '', 35),
('3', 'I085', '', 35),
('3', 'I086', '', 35),
('3', 'I087', '', 35),
('3', 'I088', '', 35),
('3', 'I089', '', 35),
('3', 'I090', '', 35),
('3', 'I091', '', 35),
('3', 'I092', '', 35),
('3', 'I093', '', 35),
('3', 'I094', '', 35),
('3', 'I095', '', 35),
('3', 'I096', '', 35),
('3', 'I097', '', 35),
('3', 'I098', '', 35),
('3', 'I099', '', 35),
('3', 'I100', '', 35),
('4', 'I001', 'Ponni rice', 40),
('4', 'I002', 'White raw rice', 8868698),
('4', 'I003', 'Red raw rice', 35),
('4', 'I004', 'Samba rice steamed', 35),
('4', 'I005', 'Samba Kekulu white', 35),
('4', 'I006', 'Nadu steamed', 35),
('4', 'I007', 'Supiri Keeri Samba', 35),
('4', 'I008', 'Tomato', 35),
('4', 'I009', 'Carrot', 35),
('4', 'I010', 'B.onion', 35),
('4', 'I011', 'Potatoes', 35),
('4', 'I012', 'Cabbage', 35),
('4', 'I013', 'Green beans', 35),
('4', 'I014', 'Kankun', 35),
('4', 'I015', 'Brinjal', 35),
('4', 'I016', 'Mushroom 200g', 35),
('4', 'I017', 'Pumpkin', 35),
('4', 'I018', 'Vegetable Oil 1l', 35),
('4', 'I019', 'Coconut Oil', 35),
('4', 'I020', 'Prima Kottu mee 85g', 35),
('4', 'I021', 'Maggi 85g', 40),
('4', 'I022', 'Harischandra Plane Noodles', 35),
('4', 'I023', 'Prima Sandwich Bread', 35),
('4', 'I024', 'Finagle Sandwich Bread', 35),
('4', 'I025', 'Prima Crust Top Bread', 35),
('4', 'I026', 'Finagle Kurakkan bread', 35),
('4', 'I027', 'Finagle Kurakkan diet bread', 35),
('4', 'I028', 'Tiera Layer Cake Vanilla', 35),
('4', 'I029', 'Tiera Layer Cake Chocolate', 35),
('4', 'I030', 'Little lion choco Role', 35),
('4', 'I031', 'Brown Sugar', 40),
('4', 'I032', 'White Sugar', 35),
('4', 'I033', 'Anchor 400g', 35),
('4', 'I034', 'Ratti 400g', 35),
('4', 'I035', 'Highland 400g', 35),
('4', 'I036', 'Milo 400g', 35),
('4', 'I037', 'Nespray 400g', 35),
('4', 'I038', 'Maliban 400g', 35),
('4', 'I039', 'Nestomolt 400g', 35),
('4', 'I040', 'Lankasoy Chicken', 35),
('4', 'I041', 'Lankasoy Regular', 35),
('4', 'I042', 'Lankasoy Curry', 35),
('4', 'I043', 'Raigam Chicken', 35),
('4', 'I044', 'Coca Cola 500ml', 35),
('4', 'I045', 'sprite 2l', 35),
('4', 'I046', 'Coco Cola 2l', 35),
('4', 'I047', 'Munchee Super Creamcraker 190 g', 35),
('4', 'I048', 'Maliban Smart Cream craker 190g', 35),
('4', 'I049', 'Chocolate biscuit', 35),
('4', 'I050', 'Nice', 35),
('4', 'I051', 'Ginger biscuit', 35),
('4', 'I052', 'Munchee Super Creamcracker 320g', 35),
('4', 'I053', 'Maliban Smart Cream craker 190g', 35),
('4', 'I054', 'Kotmale', 35),
('4', 'I055', 'Highland Plane', 35),
('4', 'I056', 'Newdale', 35),
('4', 'I057', 'CIC', 35),
('4', 'I058', 'Ambewela', 35),
('4', 'I059', 'Sunlight 90g', 35),
('4', 'I060', 'Wonderlight 90g', 35),
('4', 'I061', 'Lifebuoy 90g', 35),
('4', 'I062', 'Detol 90g', 35),
('4', 'I063', 'Vim dishwash bar 200g', 35),
('4', 'I064', 'Sunlight Washing Powder 1kg', 35),
('4', 'I065', 'Diva 1kg', 35),
('4', 'I066', 'Surfexel washing powder 1kg', 35),
('4', 'I067', 'Chillie Powder 100g', 35),
('4', 'I068', 'Curry Powder 100g', 35),
('4', 'I069', 'Turmeric Powder 100g', 35),
('4', 'I070', 'Salt Powder 400g', 35),
('4', 'I071', 'Salt 500g', 35),
('4', 'I072', 'Kumbalawa 200g pkt', 35),
('4', 'I073', 'Maldive Fish 100g pkt', 35),
('4', 'I074', '', 35),
('4', 'I075', '', 35),
('4', 'I076', '', 35),
('4', 'I077', '', 35),
('4', 'I078', '', 35),
('4', 'I079', '', 35),
('4', 'I080', '', 35),
('4', 'I081', '', 35),
('4', 'I082', '', 35),
('4', 'I083', '', 35),
('4', 'I084', '', 35),
('4', 'I085', '', 35),
('4', 'I086', '', 35),
('4', 'I087', '', 35),
('4', 'I088', '', 35),
('4', 'I089', '', 35),
('4', 'I090', '', 35),
('4', 'I091', '', 35),
('4', 'I092', '', 35),
('4', 'I093', '', 35),
('4', 'I094', '', 35),
('4', 'I095', '', 35),
('4', 'I096', '', 35),
('4', 'I097', '', 35),
('4', 'I098', '', 35),
('4', 'I099', '', 35),
('4', 'I100', '', 35),
('71', '0', 'Ponni', 34);

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE IF NOT EXISTS `items` (
  `ItemID` varchar(60) NOT NULL,
  `I_Name` varchar(60) NOT NULL,
  `price1` int(60) NOT NULL,
  `price2` int(60) NOT NULL,
  `price3` int(60) NOT NULL,
  `price4` int(60) NOT NULL,
  `price5` int(60) NOT NULL,
  PRIMARY KEY (`ItemID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`ItemID`, `I_Name`, `price1`, `price2`, `price3`, `price4`, `price5`) VALUES
('I001', 'Ponni Rice', 75, 65, 76, 80, 75),
('I002', 'White Raw Rice', 70, 67, 75, 80, 78),
('I003', 'Red Raw Rice', 90, 95, 80, 85, 70),
('I004', 'Samba Rice steamed', 35, 30, 25, 20, 45),
('I005', 'Samba Kekulu white', 50, 55, 60, 47, 45),
('I006', 'Nadu Steamed', 25, 20, 30, 28, 35),
('I007', 'Supiri Kiri samba', 58, 59, 65, 50, 50),
('I008', 'Tomato', 50, 67, 70, 65, 55),
('I009', 'Carrot', 45, 43, 50, 55, 50),
('I010', 'B.Onion', 30, 58, 70, 63, 75);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `E_mail` varchar(50) NOT NULL DEFAULT '',
  `Password` varchar(64) DEFAULT NULL,
  PRIMARY KEY (`E_mail`),
  KEY `Password` (`Password`),
  KEY `E_mail` (`E_mail`),
  KEY `E_mail_2` (`E_mail`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`E_mail`, `Password`) VALUES
('ni@gmail.com', '055183b96de6aec64db94b42072ff0a5b85b59ed'),
('bng@hsh.sjxsjh', '6367c48dd193d56ea7b0baad25b19455e529f5ee'),
('cha@gmail.com', '701b389b848a2b1cfab867093101d8d5ac56addd'),
('nuwa@gmail.com', '8cb2237d0679ca88db6464eac60da96345513964'),
('ch@sdjhgjs.dhcj', 'ad8b617f846569a755b7f4806763ac904f40d84e'),
('bngunawardana@gmail.com', 'c375743a4481ec489d087f586ea5754ecf6b0ea0'),
('ru123@gmail.com', 'ddac418a1be76098d01107464026f65d2a3192bf');

-- --------------------------------------------------------

--
-- Table structure for table `search`
--

CREATE TABLE IF NOT EXISTS `search` (
  `Search_date` date NOT NULL DEFAULT '0000-00-00',
  `Search_time` time NOT NULL DEFAULT '00:00:00',
  `S_ID` varchar(5) NOT NULL DEFAULT '',
  `GPS` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`Search_date`,`Search_time`,`S_ID`),
  KEY `S_ID` (`S_ID`),
  KEY `Search_date` (`Search_date`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `shopping_center`
--

CREATE TABLE IF NOT EXISTS `shopping_center` (
  `S_ID` varchar(5) NOT NULL DEFAULT '',
  `User_ID` varchar(5) DEFAULT NULL,
  `S_Name` varchar(30) DEFAULT NULL,
  `Contact_No` varchar(15) DEFAULT NULL,
  `S_Address` varchar(20) NOT NULL,
  PRIMARY KEY (`S_ID`),
  KEY `User_ID` (`User_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `User_ID` int(20) NOT NULL AUTO_INCREMENT,
  `E_mail` varchar(50) DEFAULT NULL,
  `Type` varchar(20) DEFAULT NULL,
  `Contact_No` varchar(15) DEFAULT NULL,
  `Address` varchar(50) DEFAULT NULL,
  `F_Name` varchar(20) DEFAULT NULL,
  `L_Name` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`User_ID`),
  KEY `E_mail` (`E_mail`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`User_ID`, `E_mail`, `Type`, `Contact_No`, `Address`, `F_Name`, `L_Name`) VALUES
(1, 'bngunawardana@gmail.com', 'trader', '1111111111', 'sajdh,dsjfgjf,fhdf', 'bh', 'nu'),
(2, 'nuwa@gmail.com', 'trader', '0711232238', 'jhgdjfg', 'Bn', 'Gy');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
