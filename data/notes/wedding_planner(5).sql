-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 11, 2018 at 12:50 PM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `wedding_planner`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_category`
--

CREATE TABLE IF NOT EXISTS `add_category` (
  `c_id` int(255) NOT NULL AUTO_INCREMENT,
  `c_name` varchar(255) NOT NULL,
  PRIMARY KEY (`c_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `add_category`
--

INSERT INTO `add_category` (`c_id`, `c_name`) VALUES
(1, 'parlour'),
(2, 'catering'),
(3, 'entertainment'),
(4, 'invitation cards'),
(5, 'decoration'),
(6, 'firework'),
(7, 'transports'),
(8, 'band'),
(9, 'cakes'),
(10, 'q');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('raman', '2302');

-- --------------------------------------------------------

--
-- Table structure for table `detail`
--

CREATE TABLE IF NOT EXISTS `detail` (
  `p_id` int(255) NOT NULL AUTO_INCREMENT,
  `t_wedding` varchar(255) NOT NULL,
  `c_name` varchar(255) NOT NULL,
  `s_name` varchar(255) NOT NULL,
  `p_name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `pic` varchar(255) NOT NULL,
  PRIMARY KEY (`p_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `detail`
--

INSERT INTO `detail` (`p_id`, `t_wedding`, `c_name`, `s_name`, `p_name`, `description`, `price`, `pic`) VALUES
(1, 'punjabi', 'parlour', 'bridal makeup', 'bridal makeup', 'stylish', '20000', 'h5.jpg'),
(2, 'punjabi', 'parlour', 'bridal makeup', 'bridal mehndi', 'trendy', '2000', 'mehndi-designs.jpg'),
(3, 'punjabi', 'catering', 'starters', 'cheese veg rolls', 'yummy cheese rolls', '300', 'cheese-balls-625_625x350_81436947081.jpg'),
(9, 'punjabi', 'catering', 'desserts', 'ice cream', 'chocolate flavour', '50', 'download (9).jpg'),
(10, 'punjabi', 'parlour', 'bridal makeup', 'south indian', 'famous food', '600per plate', '2-messy-bridal-updos.jpg'),
(13, 'punjabi', 'parlour', 'jewellery', 'wedding rings', 'diamond rings', '80000', '');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE IF NOT EXISTS `register` (
  `r_id` int(255) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `phone` bigint(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  PRIMARY KEY (`r_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`r_id`, `name`, `phone`, `email`, `subject`, `message`) VALUES
(1, '', 0, '', '', ''),
(2, 'ygil,', 123456789, 'kbaljeet@gmail.com', 'guiiun', 'dfghj');

-- --------------------------------------------------------

--
-- Table structure for table `rituals`
--

CREATE TABLE IF NOT EXISTS `rituals` (
  `rit_id` int(255) NOT NULL AUTO_INCREMENT,
  `r_type` varchar(255) NOT NULL,
  PRIMARY KEY (`rit_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `rituals`
--

INSERT INTO `rituals` (`rit_id`, `r_type`) VALUES
(2, 'pre wedding ritual'),
(3, 'post wedding rituals'),
(4, 'wedding rituals'),
(5, 'post wedding rituals'),
(6, 'pre wedding ritual');

-- --------------------------------------------------------

--
-- Table structure for table `rituals_detail`
--

CREATE TABLE IF NOT EXISTS `rituals_detail` (
  `d_id` int(255) NOT NULL AUTO_INCREMENT,
  `r_name` varchar(255) NOT NULL,
  `sub_ritual` varchar(255) NOT NULL,
  `pic` varchar(255) NOT NULL,
  PRIMARY KEY (`d_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `rituals_detail`
--

INSERT INTO `rituals_detail` (`d_id`, `r_name`, `sub_ritual`, `pic`) VALUES
(1, 'pre wedding ritual', 'haldi', '5e0af45ba148d0afd8c009c9cee14495.jpg'),
(2, 'post wedding rituals', 'reception', '2195812_6a7836ec-2363-4471-bc83-ae3223a88625.jpg'),
(3, 'pre wedding ritual', 'chuda ceremony', '5aa09dfd76e1420ae0f2f6ff.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `sub_category`
--

CREATE TABLE IF NOT EXISTS `sub_category` (
  `s_id` int(255) NOT NULL AUTO_INCREMENT,
  `c_id` int(255) NOT NULL,
  `s_name` varchar(255) NOT NULL,
  PRIMARY KEY (`s_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `sub_category`
--

INSERT INTO `sub_category` (`s_id`, `c_id`, `s_name`) VALUES
(1, 1, 'bridal makeup'),
(2, 1, 'mehndi'),
(3, 1, 'threading'),
(4, 1, 'jewellery'),
(16, 1, 'hairstyle'),
(17, 2, 'starters'),
(18, 2, 'desserts'),
(19, 2, 'south indian');

-- --------------------------------------------------------

--
-- Table structure for table `userlogin`
--

CREATE TABLE IF NOT EXISTS `userlogin` (
  `sno` int(255) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone` bigint(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  PRIMARY KEY (`sno`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `userlogin`
--


-- --------------------------------------------------------

--
-- Table structure for table `wedding_type`
--

CREATE TABLE IF NOT EXISTS `wedding_type` (
  `w_id` int(255) NOT NULL AUTO_INCREMENT,
  `t_wedding` varchar(255) NOT NULL,
  PRIMARY KEY (`w_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `wedding_type`
--

INSERT INTO `wedding_type` (`w_id`, `t_wedding`) VALUES
(1, 'punjabi'),
(2, 'south indian'),
(3, 'rajsthani'),
(4, 'maharashtrian'),
(5, 'hindu ');
