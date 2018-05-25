-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 25, 2018 at 08:57 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `design_market`
--

-- --------------------------------------------------------

--
-- Table structure for table `bids`
--

CREATE TABLE `bids` (
  `id` int(11) NOT NULL,
  `postid` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `bid` int(255) NOT NULL,
  `comment` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `posted_by` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `description` longtext,
  `category` varchar(255) DEFAULT NULL,
  `inspiration` varchar(1000) NOT NULL DEFAULT './uploads/',
  `min_budget` float NOT NULL DEFAULT '0',
  `max_budget` float NOT NULL DEFAULT '1',
  `budget_type` varchar(255) NOT NULL DEFAULT 'Hard',
  `privacy` varchar(255) NOT NULL DEFAULT 'Public',
  `completed` tinyint(1) NOT NULL DEFAULT '0',
  `awarded_to` int(11) NOT NULL,
  `date_added` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=armscii8;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `posted_by`, `name`, `description`, `category`, `inspiration`, `min_budget`, `max_budget`, `budget_type`, `privacy`, `completed`, `awarded_to`, `date_added`) VALUES
(7, 'Baldr', 'epic', 'I want a logo for my new website i\'m starting called market design. It\'s a marketplace for freelancers that want to do graphic design work.', 'Logo', './images/fourStars.png', 300, 400, 'Soft', 'Public', 0, 3, '2018-05-22 11:30:26'),
(8, 'Baldr', 'Design a logo for my company', 'I want a logo for my new website i\'m starting called market design. It\'s a marketplace for freelancers that want to do graphic design work.', NULL, './uploads/15055811_715121908636457_2771485203358350714_n.jpg', 300, 400, 'Soft', 'Public', 1, 3, '2018-05-22 11:30:26'),
(9, 'Baldr', 'Design a logo for my company', 'I want a logo for my new website i\'m starting called market design. It\'s a marketplace for freelancers that want to do graphic design work.', NULL, './uploads/15055811_715121908636457_2771485203358350714_n.jpg', 300, 400, 'Soft', 'Public', 1, 2, '2018-05-22 11:30:26'),
(10, 'Baldr', 'Design a logo for my company', 'I want a logo for my new website i\'m starting called market design. It\'s a marketplace for freelancers that want to do graphic design work.', NULL, './uploads/15055811_715121908636457_2771485203358350714_n.jpg', 300, 400, 'Soft', 'Public', 1, 2, '2018-05-22 11:30:26'),
(11, 'Baldr', 'Design a logo for my company', 'I want a logo for my new website i\'m starting called market design. It\'s a marketplace for freelancers that want to do graphic design work.', NULL, './uploads/15055811_715121908636457_2771485203358350714_n.jpg', 300, 400, 'Soft', 'Public', 1, 0, '2018-05-22 11:30:26'),
(12, 'Baldr', 'Design a logo for my company', 'I want a logo for my new website i\'m starting called market design. It\'s a marketplace for freelancers that want to do graphic design work.', NULL, './uploads/15055811_715121908636457_2771485203358350714_n.jpg', 300, 400, 'Soft', 'Public', 1, 0, '2018-05-22 11:30:26'),
(13, 'Baldr', 'Design a logo for my company', 'I want a logo for my new website i\'m starting called market design. It\'s a marketplace for freelancers that want to do graphic design work.', NULL, './uploads/15055811_715121908636457_2771485203358350714_n.jpg', 300, 400, 'Soft', 'Public', 1, 0, '2018-05-22 11:30:26'),
(14, 'Baldr', 'Test', 'I want a logo for my new website i\'m starting called market design. It\'s a marketplace for freelancers that want to do graphic design work.', NULL, './uploads/15055811_715121908636457_2771485203358350714_n.jpg', 300, 400, 'Soft', 'Public', 1, 0, '2018-05-22 11:30:26'),
(15, 'Baldr', 'Design a logo for my company', 'I want a logo for my new website i\'m starting called market design. It\'s a marketplace for freelancers that want to do graphic design work.', NULL, './uploads/15055811_715121908636457_2771485203358350714_n.jpg', 300, 400, 'Soft', 'Public', 1, 0, '2018-05-22 11:30:26'),
(16, 'Baldr', 'Design a logo for my company', 'I want a logo for my new website i\'m starting called market design. It\'s a marketplace for freelancers that want to do graphic design work.', NULL, './uploads/15055811_715121908636457_2771485203358350714_n.jpg', 300, 400, 'Soft', 'Public', 1, 0, '2018-05-22 11:30:26'),
(17, 'Baldr', 'Design a logo for my company', 'I want a logo for my new website i\'m starting called market design. It\'s a marketplace for freelancers that want to do graphic design work.', NULL, './uploads/15055811_715121908636457_2771485203358350714_n.jpg', 300, 400, 'Soft', 'Public', 1, 0, '2018-05-22 11:30:26'),
(18, 'Baldr', 'Design a logo for my company', 'I want a logo for my new website i\'m starting called market design. It\'s a marketplace for freelancers that want to do graphic design work.', NULL, './uploads/15055811_715121908636457_2771485203358350714_n.jpg', 300, 400, 'Soft', 'Public', 0, 0, '2018-05-22 11:30:26'),
(19, 'Baldr', 'Design a logo for my company', 'I want a logo for my new website i\'m starting called market design. It\'s a marketplace for freelancers that want to do graphic design work.', NULL, './uploads/15055811_715121908636457_2771485203358350714_n.jpg', 300, 400, 'Soft', 'Public', 1, 0, '2018-05-22 11:30:26'),
(20, 'Baldr', 'Design a logo for my company', 'I want a logo for my new website i\'m starting called market design. It\'s a marketplace for freelancers that want to do graphic design work.', NULL, './uploads/15055811_715121908636457_2771485203358350714_n.jpg', 300, 400, 'Soft', 'Public', 1, 0, '2018-05-22 11:30:26'),
(21, 'Baldr', '', 'I want a logo for my new website i\'m starting called market design. It\'s a marketplace for freelancers that want to do graphic design work.', NULL, './uploads/15055811_715121908636457_2771485203358350714_n.jpg', 300, 400, 'Soft', 'Public', 0, 0, '2018-05-22 11:30:26'),
(22, 'Baldr', 'Test', 'I want a logo for my new website i\'m starting called market design. It\'s a marketplace for freelancers that want to do graphic design work.', NULL, './uploads/15055811_715121908636457_2771485203358350714_n.jpg', 300, 400, 'Soft', 'Public', 0, 0, '2018-05-22 11:30:26'),
(23, 'Baldr', 'Design a logo for my company', 'I want a logo for my new website i\'m starting called market design. It\'s a marketplace for freelancers that want to do graphic design work.', NULL, './uploads/15055811_715121908636457_2771485203358350714_n.jpg', 300, 400, 'Soft', 'Public', 0, 0, '2018-05-22 11:30:26'),
(24, 'Baldr', 'Design a logo for my company', 'I want a logo for my new website i\'m starting called market design. It\'s a marketplace for freelancers that want to do graphic design work.', NULL, './uploads/15055811_715121908636457_2771485203358350714_n.jpg', 300, 400, 'Soft', 'Public', 0, 0, '2018-05-22 11:30:26'),
(25, 'Baldr', 'Design a logo for my company', 'I want a logo for my new website i\'m starting called market design. It\'s a marketplace for freelancers that want to do graphic design work.', NULL, './uploads/15055811_715121908636457_2771485203358350714_n.jpg', 300, 400, 'Soft', 'Public', 0, 0, '2018-05-22 11:30:26'),
(26, 'Baldr', 'Design a logo for my company', 'I want a logo for my new website i\'m starting called market design. It\'s a marketplace for freelancers that want to do graphic design work.', NULL, './uploads/15055811_715121908636457_2771485203358350714_n.jpg', 300, 400, 'Soft', 'Public', 0, 0, '2018-05-22 11:30:26'),
(27, 'Baldr', 'Design a logo for my company', 'I want a logo for my new website i\'m starting called market design. It\'s a marketplace for freelancers that want to do graphic design work.', NULL, './uploads/15055811_715121908636457_2771485203358350714_n.jpg', 300, 400, 'Soft', 'Public', 0, 0, '2018-05-22 11:30:26'),
(28, 'Baldr', 'Design a logo for my company', 'I want a logo for my new website i\'m starting called market design. It\'s a marketplace for freelancers that want to do graphic design work.', NULL, './uploads/15055811_715121908636457_2771485203358350714_n.jpg', 300, 400, 'Soft', 'Public', 0, 0, '2018-05-22 11:30:26'),
(29, 'Baldr', 'Test', 'I want a logo for my new website i\'m starting called market design. It\'s a marketplace for freelancers that want to do graphic design work.', NULL, './uploads/15055811_715121908636457_2771485203358350714_n.jpg', 300, 400, 'Soft', 'Public', 0, 0, '2018-05-22 11:30:26'),
(30, 'Baldr', 'Test', 'I want a logo for my new website i\'m starting called market design. It\'s a marketplace for freelancers that want to do graphic design work.', NULL, './uploads/15055811_715121908636457_2771485203358350714_n.jpg', 300, 400, 'Soft', 'Public', 0, 0, '2018-05-22 11:30:26'),
(31, 'Baldr', 'Design a logo for my company', 'I want a logo for my new website i\'m starting called market design. It\'s a marketplace for freelancers that want to do graphic design work.', NULL, './uploads/15055811_715121908636457_2771485203358350714_n.jpg', 300, 400, 'Soft', 'Public', 0, 0, '2018-05-22 11:30:26'),
(32, 'Baldr', 'Design a logo for my company', 'I want a logo for my new website i\'m starting called market design. It\'s a marketplace for freelancers that want to do graphic design work.', NULL, './uploads/15055811_715121908636457_2771485203358350714_n.jpg', 300, 400, 'Soft', 'Public', 0, 0, '2018-05-22 11:30:26'),
(33, 'Baldr', 'Design a logo for my company', 'I want a logo for my new website i\'m starting called market design. It\'s a marketplace for freelancers that want to do graphic design work.', NULL, './uploads/15055811_715121908636457_2771485203358350714_n.jpg', 300, 400, 'Soft', 'Public', 0, 0, '2018-05-22 11:30:26'),
(34, 'Baldr', 'Design a logo for my company', 'I want a logo for my new website i\'m starting called market design. It\'s a marketplace for freelancers that want to do graphic design work.', NULL, './uploads/15055811_715121908636457_2771485203358350714_n.jpg', 300, 400, 'Soft', 'Public', 0, 0, '2018-05-22 11:30:26'),
(35, 'Baldr', 'Design a logo for my company', 'I want a logo for my new website i\'m starting called market design. It\'s a marketplace for freelancers that want to do graphic design work.', NULL, './uploads/15055811_715121908636457_2771485203358350714_n.jpg', 300, 400, 'Soft', 'Public', 0, 0, '2018-05-22 11:30:26'),
(36, 'Baldr', 'Design a logo for my company', 'I want a logo for my new website i\'m starting called market design. It\'s a marketplace for freelancers that want to do graphic design work.', NULL, './uploads/15055811_715121908636457_2771485203358350714_n.jpg', 300, 400, 'Soft', 'Public', 0, 0, '2018-05-22 11:30:26'),
(37, 'Baldr', 'Design a logo for my company', 'I want a logo for my new website i\'m starting called market design. It\'s a marketplace for freelancers that want to do graphic design work.', NULL, './uploads/15055811_715121908636457_2771485203358350714_n.jpg', 300, 400, 'Soft', 'Public', 0, 0, '2018-05-22 11:30:26'),
(38, 'Baldr', 'Design a logo for my company', 'I want a logo for my new website i\'m starting called market design. It\'s a marketplace for freelancers that want to do graphic design work.', NULL, './uploads/15055811_715121908636457_2771485203358350714_n.jpg', 300, 400, 'Soft', 'Public', 0, 0, '2018-05-22 11:30:26'),
(39, 'Baldr', 'Design a logo for my company', 'I want a logo for my new website i\'m starting called market design. It\'s a marketplace for freelancers that want to do graphic design work.', NULL, './uploads/15055811_715121908636457_2771485203358350714_n.jpg', 300, 400, 'Soft', 'Public', 0, 0, '2018-05-22 11:30:26'),
(40, 'Baldr', 'Design a logo for my company', 'I want a logo for my new website i\'m starting called market design. It\'s a marketplace for freelancers that want to do graphic design work.', NULL, './uploads/15055811_715121908636457_2771485203358350714_n.jpg', 300, 400, 'Soft', 'Public', 0, 0, '2018-05-22 11:30:26'),
(41, 'Baldr', 'Design a logo for my company', 'I want a logo for my new website i\'m starting called market design. It\'s a marketplace for freelancers that want to do graphic design work.', NULL, './uploads/15055811_715121908636457_2771485203358350714_n.jpg', 300, 400, 'Soft', 'Public', 0, 0, '2018-05-22 11:30:26'),
(42, 'Baldr', 'Design a logo for my company', 'I want a logo for my new website i\'m starting called market design. It\'s a marketplace for freelancers that want to do graphic design work.', NULL, './uploads/15055811_715121908636457_2771485203358350714_n.jpg', 300, 400, 'Soft', 'Public', 0, 0, '2018-05-22 11:30:26'),
(43, 'Baldr', 'Design a logo for my company', 'I want a logo for my new website i\'m starting called market design. It\'s a marketplace for freelancers that want to do graphic design work.', NULL, './uploads/15055811_715121908636457_2771485203358350714_n.jpg', 300, 400, 'Soft', 'Public', 0, 0, '2018-05-22 11:30:26'),
(44, 'Baldr', 'Design a logo for my company', 'I want a logo for my new website i\'m starting called market design. It\'s a marketplace for freelancers that want to do graphic design work.', NULL, './uploads/15055811_715121908636457_2771485203358350714_n.jpg', 300, 400, 'Soft', 'Public', 0, 0, '2018-05-22 11:30:26'),
(45, 'Baldr', 'Design a logo for my company', 'I want a logo for my new website i\'m starting called market design. It\'s a marketplace for freelancers that want to do graphic design work.', NULL, './uploads/15055811_715121908636457_2771485203358350714_n.jpg', 300, 400, 'Soft', 'Public', 0, 0, '2018-05-22 11:30:26'),
(46, 'Baldr', 'Design a logo for my company', 'I want a logo for my new website i\'m starting called market design. It\'s a marketplace for freelancers that want to do graphic design work.', NULL, './uploads/15055811_715121908636457_2771485203358350714_n.jpg', 300, 400, 'Soft', 'Public', 0, 0, '2018-05-22 11:30:26'),
(47, 'Baldr', 'Design a logo for my company', 'I want a logo for my new website i\'m starting called market design. It\'s a marketplace for freelancers that want to do graphic design work.', NULL, './uploads/15055811_715121908636457_2771485203358350714_n.jpg', 300, 400, 'Soft', 'Public', 0, 0, '2018-05-22 11:30:26'),
(48, 'Baldr', 'Design a logo for my company', 'I want a logo for my new website i\'m starting called market design. It\'s a marketplace for freelancers that want to do graphic design work.', NULL, './uploads/15055811_715121908636457_2771485203358350714_n.jpg', 300, 400, 'Soft', 'Public', 0, 0, '2018-05-22 11:30:26'),
(49, 'Baldr', 'Design a logo for my company', 'I want a logo for my new website i\'m starting called market design. It\'s a marketplace for freelancers that want to do graphic design work.', NULL, './uploads/15055811_715121908636457_2771485203358350714_n.jpg', 300, 400, 'Soft', 'Public', 0, 0, '2018-05-22 11:30:26'),
(50, 'Baldr', 'Design a logo for my company', 'I want a logo for my new website i\'m starting called market design. It\'s a marketplace for freelancers that want to do graphic design work.', NULL, './uploads/15055811_715121908636457_2771485203358350714_n.jpg', 300, 400, 'Soft', 'Public', 0, 0, '2018-05-22 11:30:26'),
(51, 'Baldr', 'Design a logo for my company', 'I want a logo for my new website i\'m starting called market design. It\'s a marketplace for freelancers that want to do graphic design work.', NULL, './uploads/15055811_715121908636457_2771485203358350714_n.jpg', 300, 400, 'Soft', 'Public', 0, 0, '2018-05-22 11:30:26'),
(52, 'Baldr', 'Design a logo for my company', 'I want a logo for my new website i\'m starting called market design. It\'s a marketplace for freelancers that want to do graphic design work.', NULL, './uploads/15055811_715121908636457_2771485203358350714_n.jpg', 300, 400, 'Soft', 'Public', 0, 0, '2018-05-22 11:30:26'),
(53, 'Baldr', 'Design a logo for my company', 'I want a logo for my new website i\'m starting called market design. It\'s a marketplace for freelancers that want to do graphic design work.', NULL, './uploads/15055811_715121908636457_2771485203358350714_n.jpg', 300, 400, 'Soft', 'Public', 0, 0, '2018-05-22 11:30:26'),
(54, 'Baldr', 'Design a logo for my company', 'I want a logo for my new website i\'m starting called market design. It\'s a marketplace for freelancers that want to do graphic design work.', NULL, './uploads/15055811_715121908636457_2771485203358350714_n.jpg', 300, 400, 'Soft', 'Public', 0, 0, '2018-05-22 11:30:26'),
(55, 'Baldr', 'Design a logo for my company', 'I want a logo for my new website i\'m starting called market design. It\'s a marketplace for freelancers that want to do graphic design work.', NULL, './uploads/15055811_715121908636457_2771485203358350714_n.jpg', 300, 400, 'Soft', 'Public', 0, 0, '2018-05-22 11:30:26'),
(56, 'Baldr', 'Design a logo for my company', 'I want a logo for my new website i\'m starting called market design. It\'s a marketplace for freelancers that want to do graphic design work.', NULL, './uploads/15055811_715121908636457_2771485203358350714_n.jpg', 300, 400, 'Soft', 'Public', 0, 0, '2018-05-22 11:30:26'),
(57, 'Baldr', 'Design a logo for my company', 'I want a logo for my new website i\'m starting called market design. It\'s a marketplace for freelancers that want to do graphic design work.', NULL, './uploads/15055811_715121908636457_2771485203358350714_n.jpg', 300, 400, 'Soft', 'Public', 0, 0, '2018-05-22 11:30:26'),
(58, 'Baldr', 'Design a logo for my company', 'I want a logo for my new website i\'m starting called market design. It\'s a marketplace for freelancers that want to do graphic design work.', NULL, './uploads/15055811_715121908636457_2771485203358350714_n.jpg', 300, 400, 'Soft', 'Public', 0, 0, '2018-05-22 11:30:26'),
(59, 'Baldr', 'Design a logo for my company', 'I want a logo for my new website i\'m starting called market design. It\'s a marketplace for freelancers that want to do graphic design work.', NULL, './uploads/15055811_715121908636457_2771485203358350714_n.jpg', 300, 400, 'Soft', 'Public', 0, 0, '2018-05-22 11:30:26'),
(60, 'Baldr', 'Design a logo for my company', 'I want a logo for my new website i\'m starting called market design. It\'s a marketplace for freelancers that want to do graphic design work.', NULL, './uploads/15055811_715121908636457_2771485203358350714_n.jpg', 300, 400, 'Soft', 'Public', 0, 0, '2018-05-22 11:30:26'),
(61, 'Baldr', 'Design a logo for my company', 'I want a logo for my new website i\'m starting called market design. It\'s a marketplace for freelancers that want to do graphic design work.', NULL, './uploads/15055811_715121908636457_2771485203358350714_n.jpg', 300, 400, 'Soft', 'Public', 0, 0, '2018-05-22 11:30:26'),
(62, 'Baldr', 'Design a logo for my company', 'I want a logo for my new website i\'m starting called market design. It\'s a marketplace for freelancers that want to do graphic design work.', NULL, './uploads/15055811_715121908636457_2771485203358350714_n.jpg', 300, 400, 'Soft', 'Public', 0, 0, '2018-05-22 11:30:26'),
(63, 'Baldr', 'Design a logo for my company', 'I want a logo for my new website i\'m starting called market design. It\'s a marketplace for freelancers that want to do graphic design work.', NULL, './uploads/15055811_715121908636457_2771485203358350714_n.jpg', 300, 400, 'Soft', 'Public', 0, 0, '2018-05-22 11:30:26'),
(64, 'Baldr', 'Design a logo for my company', 'I want a logo for my new website i\'m starting called market design. It\'s a marketplace for freelancers that want to do graphic design work.', NULL, './uploads/15055811_715121908636457_2771485203358350714_n.jpg', 300, 400, 'Soft', 'Public', 0, 0, '2018-05-22 11:30:26'),
(65, 'Baldr', 'Design a logo for my company', 'I want a logo for my new website i\'m starting called market design. It\'s a marketplace for freelancers that want to do graphic design work.', NULL, './uploads/15055811_715121908636457_2771485203358350714_n.jpg', 300, 400, 'Soft', 'Public', 0, 0, '2018-05-22 11:30:26'),
(66, 'Baldr', 'Design a logo for my company', 'I want a logo for my new website i\'m starting called market design. It\'s a marketplace for freelancers that want to do graphic design work.', NULL, './uploads/15055811_715121908636457_2771485203358350714_n.jpg', 300, 400, 'Soft', 'Public', 0, 0, '2018-05-22 11:30:26'),
(67, 'Baldr', 'Design a logo for my company', 'I want a logo for my new website i\'m starting called market design. It\'s a marketplace for freelancers that want to do graphic design work.', NULL, './uploads/15055811_715121908636457_2771485203358350714_n.jpg', 300, 400, 'Soft', 'Public', 0, 0, '2018-05-22 11:30:26'),
(68, 'Baldr', 'Design a logo for my company', 'I want a logo for my new website i\'m starting called market design. It\'s a marketplace for freelancers that want to do graphic design work.', NULL, './uploads/15055811_715121908636457_2771485203358350714_n.jpg', 300, 400, 'Soft', 'Public', 0, 0, '2018-05-22 11:30:26'),
(69, 'Baldr', 'Design a logo for my company', 'I want a logo for my new website i\'m starting called market design. It\'s a marketplace for freelancers that want to do graphic design work.', NULL, './uploads/15055811_715121908636457_2771485203358350714_n.jpg', 300, 400, 'Soft', 'Public', 0, 0, '2018-05-22 11:30:26'),
(70, 'Baldr', 'Design a logo for my company', 'I want a logo for my new website i\'m starting called market design. It\'s a marketplace for freelancers that want to do graphic design work.', NULL, './uploads/15055811_715121908636457_2771485203358350714_n.jpg', 300, 400, 'Soft', 'Public', 0, 0, '2018-05-22 11:30:26'),
(71, 'Baldr', 'Design a logo for my company', 'I want a logo for my new website i\'m starting called market design. It\'s a marketplace for freelancers that want to do graphic design work.', NULL, './uploads/15055811_715121908636457_2771485203358350714_n.jpg', 300, 400, 'Soft', 'Public', 0, 0, '2018-05-22 11:30:26'),
(72, 'Baldr', 'Design a logo for my company', 'I want a logo for my new website i\'m starting called market design. It\'s a marketplace for freelancers that want to do graphic design work.', NULL, './uploads/15055811_715121908636457_2771485203358350714_n.jpg', 300, 400, 'Soft', 'Public', 0, 0, '2018-05-22 11:30:26'),
(73, 'Baldr', 'Design a logo for my company', 'I want a logo for my new website i\'m starting called market design. It\'s a marketplace for freelancers that want to do graphic design work.', NULL, './uploads/15055811_715121908636457_2771485203358350714_n.jpg', 300, 400, 'Soft', 'Public', 0, 0, '2018-05-22 11:30:26'),
(74, 'Baldr', 'Design a logo for my company', 'I want a logo for my new website i\'m starting called market design. It\'s a marketplace for freelancers that want to do graphic design work.', NULL, './uploads/15055811_715121908636457_2771485203358350714_n.jpg', 300, 400, 'Soft', 'Public', 0, 0, '2018-05-22 11:30:26'),
(75, 'Baldr', 'Design a logo for my company', 'I want a logo for my new website i\'m starting called market design. It\'s a marketplace for freelancers that want to do graphic design work.', NULL, './uploads/15055811_715121908636457_2771485203358350714_n.jpg', 300, 400, 'Soft', 'Public', 0, 0, '2018-05-22 11:30:26'),
(76, 'Baldr', 'Design a logo for my company', 'I want a logo for my new website i\'m starting called market design. It\'s a marketplace for freelancers that want to do graphic design work.', NULL, './uploads/15055811_715121908636457_2771485203358350714_n.jpg', 300, 400, 'Soft', 'Public', 0, 0, '2018-05-22 11:30:26'),
(77, 'Baldr', 'Design a logo for my company', 'I want a logo for my new website i\'m starting called market design. It\'s a marketplace for freelancers that want to do graphic design work.', NULL, './uploads/15055811_715121908636457_2771485203358350714_n.jpg', 300, 400, 'Soft', 'Public', 0, 0, '2018-05-22 11:30:26'),
(78, 'Baldr', 'Design a logo for my company', 'I want a logo for my new website i\'m starting called market design. It\'s a marketplace for freelancers that want to do graphic design work.', NULL, './uploads/15055811_715121908636457_2771485203358350714_n.jpg', 300, 400, 'Soft', 'Public', 0, 0, '2018-05-22 11:30:26'),
(79, 'Baldr', 'Design a logo for my company', 'I want a logo for my new website i\'m starting called market design. It\'s a marketplace for freelancers that want to do graphic design work.', NULL, './uploads/15055811_715121908636457_2771485203358350714_n.jpg', 300, 400, 'Soft', 'Public', 0, 0, '2018-05-22 11:30:26'),
(80, 'Baldr', 'Design a logo for my company', 'I want a logo for my new website i\'m starting called market design. It\'s a marketplace for freelancers that want to do graphic design work.', NULL, './uploads/15055811_715121908636457_2771485203358350714_n.jpg', 300, 400, 'Soft', 'Public', 0, 0, '2018-05-22 11:30:26'),
(81, 'Baldr', 'Design a logo for my company', 'I want a logo for my new website i\'m starting called market design. It\'s a marketplace for freelancers that want to do graphic design work.', NULL, './uploads/15055811_715121908636457_2771485203358350714_n.jpg', 300, 400, 'Soft', 'Public', 0, 0, '2018-05-22 11:30:26'),
(82, 'Baldr', 'Design a logo for my company', 'I want a logo for my new website i\'m starting called market design. It\'s a marketplace for freelancers that want to do graphic design work.', NULL, './uploads/15055811_715121908636457_2771485203358350714_n.jpg', 300, 400, 'Soft', 'Public', 0, 0, '2018-05-22 11:30:26'),
(83, 'Baldr', 'Design a logo for my company', 'I want a logo for my new website i\'m starting called market design. It\'s a marketplace for freelancers that want to do graphic design work.', NULL, './uploads/15055811_715121908636457_2771485203358350714_n.jpg', 300, 400, 'Soft', 'Public', 0, 0, '2018-05-22 11:30:26'),
(84, 'Baldr', 'Design a logo for my company', 'I want a logo for my new website i\'m starting called market design. It\'s a marketplace for freelancers that want to do graphic design work.', NULL, './uploads/15055811_715121908636457_2771485203358350714_n.jpg', 300, 400, 'Soft', 'Public', 0, 0, '2018-05-22 11:30:26'),
(85, 'Baldr', 'Design a logo for my company', 'I want a logo for my new website i\'m starting called market design. It\'s a marketplace for freelancers that want to do graphic design work.', NULL, './uploads/15055811_715121908636457_2771485203358350714_n.jpg', 300, 400, 'Soft', 'Public', 0, 0, '2018-05-22 11:30:26'),
(86, 'Baldr', 'Design a logo for my company', 'I want a logo for my new website i\'m starting called market design. It\'s a marketplace for freelancers that want to do graphic design work.', NULL, './uploads/15055811_715121908636457_2771485203358350714_n.jpg', 300, 400, 'Soft', 'Public', 0, 0, '2018-05-22 11:30:26'),
(87, 'Baldr', 'Design a logo for my company', 'I want a logo for my new website i\'m starting called market design. It\'s a marketplace for freelancers that want to do graphic design work.', NULL, './uploads/15055811_715121908636457_2771485203358350714_n.jpg', 300, 400, 'Soft', 'Public', 0, 0, '2018-05-22 11:30:26'),
(88, 'Baldr', 'Design a logo for my company', 'I want a logo for my new website i\'m starting called market design. It\'s a marketplace for freelancers that want to do graphic design work.', NULL, './uploads/15055811_715121908636457_2771485203358350714_n.jpg', 300, 400, 'Soft', 'Public', 0, 0, '2018-05-22 11:30:26'),
(89, 'Baldr', 'Design a logo for my company', 'I want a logo for my new website i\'m starting called market design. It\'s a marketplace for freelancers that want to do graphic design work.', NULL, './uploads/15055811_715121908636457_2771485203358350714_n.jpg', 300, 400, 'Soft', 'Public', 0, 0, '2018-05-22 11:30:26'),
(90, 'Baldr', 'Design a logo for my company', 'I want a logo for my new website i\'m starting called market design. It\'s a marketplace for freelancers that want to do graphic design work.', NULL, './uploads/15055811_715121908636457_2771485203358350714_n.jpg', 300, 400, 'Soft', 'Public', 0, 0, '2018-05-22 11:30:26'),
(91, 'Baldr', 'Design a logo for my company', 'I want a logo for my new website i\'m starting called market design. It\'s a marketplace for freelancers that want to do graphic design work.', NULL, './uploads/15055811_715121908636457_2771485203358350714_n.jpg', 300, 400, 'Soft', 'Public', 0, 0, '2018-05-22 11:30:26'),
(92, 'Baldr', 'Design a logo for my company', 'I want a logo for my new website i\'m starting called market design. It\'s a marketplace for freelancers that want to do graphic design work.', NULL, './uploads/15055811_715121908636457_2771485203358350714_n.jpg', 300, 400, 'Soft', 'Public', 0, 0, '2018-05-22 11:30:26'),
(93, 'Baldr', 'Design a logo for my company', 'I want a logo for my new website i\'m starting called market design. It\'s a marketplace for freelancers that want to do graphic design work.', NULL, './uploads/15055811_715121908636457_2771485203358350714_n.jpg', 300, 400, 'Soft', 'Public', 0, 0, '2018-05-22 11:30:26'),
(94, 'Baldr', 'Design a logo for my company', 'I want a logo for my new website i\'m starting called market design. It\'s a marketplace for freelancers that want to do graphic design work.', NULL, './uploads/15055811_715121908636457_2771485203358350714_n.jpg', 300, 400, 'Soft', 'Public', 0, 0, '2018-05-22 11:30:26'),
(95, 'Baldr', 'Design a logo for my company', 'I want a logo for my new website i\'m starting called market design. It\'s a marketplace for freelancers that want to do graphic design work.', NULL, './uploads/15055811_715121908636457_2771485203358350714_n.jpg', 300, 400, 'Soft', 'Public', 0, 0, '2018-05-22 11:30:26'),
(96, 'Baldr', 'Design a logo for my company', 'I want a logo for my new website i\'m starting called market design. It\'s a marketplace for freelancers that want to do graphic design work.', NULL, './uploads/15055811_715121908636457_2771485203358350714_n.jpg', 300, 400, 'Soft', 'Public', 0, 0, '2018-05-22 11:30:26'),
(97, 'Baldr', 'Design a logo for my company', 'I want a logo for my new website i\'m starting called market design. It\'s a marketplace for freelancers that want to do graphic design work.', NULL, './uploads/15055811_715121908636457_2771485203358350714_n.jpg', 300, 400, 'Soft', 'Public', 0, 0, '2018-05-22 11:30:26'),
(98, 'Baldr', 'Design a logo for my company', 'I want a logo for my new website i\'m starting called market design. It\'s a marketplace for freelancers that want to do graphic design work.', NULL, './uploads/15055811_715121908636457_2771485203358350714_n.jpg', 300, 400, 'Soft', 'Public', 0, 0, '2018-05-22 11:30:26'),
(99, 'Baldr', 'Design a logo for my company', 'I want a logo for my new website i\'m starting called market design. It\'s a marketplace for freelancers that want to do graphic design work.', NULL, './uploads/15055811_715121908636457_2771485203358350714_n.jpg', 300, 400, 'Soft', 'Public', 0, 0, '2018-05-22 11:30:26'),
(100, 'Baldr', 'Design a logo for my company', 'I want a logo for my new website i\'m starting called market design. It\'s a marketplace for freelancers that want to do graphic design work.', NULL, './uploads/15055811_715121908636457_2771485203358350714_n.jpg', 300, 400, 'Soft', 'Public', 0, 0, '2018-05-22 11:30:26'),
(101, 'Baldr', 'Design a logo for my company', 'I want a logo for my new website i\'m starting called market design. It\'s a marketplace for freelancers that want to do graphic design work.', NULL, './uploads/15055811_715121908636457_2771485203358350714_n.jpg', 300, 400, 'Soft', 'Public', 0, 0, '2018-05-22 11:30:26'),
(102, 'Baldr', 'Design a logo for my company', 'I want a logo for my new website i\'m starting called market design. It\'s a marketplace for freelancers that want to do graphic design work.', NULL, './uploads/15055811_715121908636457_2771485203358350714_n.jpg', 300, 400, 'Soft', 'Public', 0, 0, '2018-05-22 11:30:26'),
(103, 'Baldr', 'Design a logo for my company', 'I want a logo for my new website i\'m starting called market design. It\'s a marketplace for freelancers that want to do graphic design work.', NULL, './uploads/15055811_715121908636457_2771485203358350714_n.jpg', 300, 400, 'Soft', 'Public', 0, 0, '2018-05-22 11:30:26'),
(104, 'Baldr', 'Design a logo for my company', 'I want a logo for my new website i\'m starting called market design. It\'s a marketplace for freelancers that want to do graphic design work.', NULL, './uploads/15055811_715121908636457_2771485203358350714_n.jpg', 300, 400, 'Soft', 'Public', 0, 0, '2018-05-22 11:30:26'),
(105, 'Baldr', 'Design a logo for my company', 'I want a logo for my new website i\'m starting called market design. It\'s a marketplace for freelancers that want to do graphic design work.', NULL, './uploads/15055811_715121908636457_2771485203358350714_n.jpg', 300, 400, 'Soft', 'Public', 0, 0, '2018-05-22 11:30:26');

-- --------------------------------------------------------

--
-- Table structure for table `userportfolio`
--

CREATE TABLE `userportfolio` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `postid` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `rating` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userportfolio`
--

INSERT INTO `userportfolio` (`id`, `userid`, `postid`, `image`, `rating`) VALUES
(1, 3, 11, 'images/exampleLogo5.png', 2),
(2, 3, 16, 'images/exampleLogo4.png', 3),
(3, 3, 17, 'images/exampleLogo4.png', 4);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `hash` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `description` longtext NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=armscii8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `hash`, `name`, `description`, `image`) VALUES
(1, 'Baldur', 'lachpaulsen@gmail.com', '$2y$10$DAgfXcuSNUZ7GH9rTZL3mehFPZfwfP7xCMgZpWb1em..BWO0pZsIe', 'Lachlan Paulsen', 'This is a description of this user', ''),
(2, 'Baldr', 'lachpaulsen@gmail.com', '$2y$10$6fluEfHdy0BQeLysdukjcOLefqVjYShe9rNKoXofrhGQQFtcHAxvC', 'Lachlan Paulsen', 'This is a description of this user', './images/lachlan.png'),
(3, 'user', 'hytoxstudios@gmail.com', '$2y$10$gBa/5pT/PJAWr7H0ToTjJ./UNLRk1kqLnj1g75Cbe88SDU.oRkLrC', 'yeet', 'This is a description of this user', ''),
(4, 'yy', 'hytoxstudios@gmail.com', '$2y$10$SQeFIVkL9kn2Hn/JoHJRLeLkjjy6VOGOzwKWNWsPzSJWoIDGl2ufm', 'Lachlan Paulsen', 'This is a description of this user', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bids`
--
ALTER TABLE `bids`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fkpost_id` (`postid`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userportfolio`
--
ALTER TABLE `userportfolio`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_postid` (`postid`),
  ADD KEY `fk_userid` (`userid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bids`
--
ALTER TABLE `bids`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=106;

--
-- AUTO_INCREMENT for table `userportfolio`
--
ALTER TABLE `userportfolio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bids`
--
ALTER TABLE `bids`
  ADD CONSTRAINT `fkpost_id` FOREIGN KEY (`postid`) REFERENCES `posts` (`id`);

--
-- Constraints for table `userportfolio`
--
ALTER TABLE `userportfolio`
  ADD CONSTRAINT `fk_postid` FOREIGN KEY (`postid`) REFERENCES `posts` (`id`),
  ADD CONSTRAINT `fk_userid` FOREIGN KEY (`userid`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
