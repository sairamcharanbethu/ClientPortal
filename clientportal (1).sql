-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 19, 2018 at 05:07 AM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `clientportal`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `admin_name` varchar(100) NOT NULL,
  `admin_pass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `admin_name`, `admin_pass`) VALUES
(1, 'admin', 'password'),
(2, 'jyothi', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `clientinfo`
--

CREATE TABLE `clientinfo` (
  `c_id` int(11) NOT NULL,
  `c_name` varchar(50) NOT NULL,
  `c_email` varchar(50) NOT NULL,
  `c_mobile` int(15) NOT NULL,
  `c_address` varchar(150) NOT NULL,
  `c_city` varchar(50) NOT NULL,
  `c_province` varchar(10) NOT NULL,
  `c_zip` varchar(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clientinfo`
--

INSERT INTO `clientinfo` (`c_id`, `c_name`, `c_email`, `c_mobile`, `c_address`, `c_city`, `c_province`, `c_zip`) VALUES
(6, 'Jyothi', 'mksarao94@gmail.com', 2147483647, '7169 Lantern Fly Hollow', 'Mississauga', 'ON', 'L5W 1L6'),
(7, 'Manjot Kaur', 'mksarao94@gmail.com', 2147483647, '7169 Lantern Fly Hollow', 'Mississauga', 'ON', 'L5W 1L6'),
(9, 'Mujeeb', 'mkhan@sscinc.ca', 2147483647, '3105 Dundas St W Suite 202', 'Mississauga', 'Ontario', 'L5L 3R8');

-- --------------------------------------------------------

--
-- Table structure for table `quote`
--

CREATE TABLE `quote` (
  `quote_id` int(11) NOT NULL COMMENT 'AUTO_INCREMENT=7000',
  `client_id` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `admin_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `quote`
--

INSERT INTO `quote` (`quote_id`, `client_id`, `amount`, `admin_name`) VALUES
(2, 9, 6000, ''),
(3, 9, 6000, 'admin'),
(4, 9, 6000, 'admin'),
(5, 9, 6000, 'admin'),
(6, 7, 6000, 'admin'),
(7, 6, 6000, 'admin'),
(8, 6, 6000, 'admin'),
(9, 6, 6000, 'admin'),
(10, 6, 6000, 'admin'),
(11, 9, 6000, 'admin'),
(12, 9, 6000, 'admin'),
(15, 7, 6000, 'admin'),
(16, 9, 6000, 'admin'),
(17, 9, 6000, 'admin'),
(40, 9, 6000, 'admin'),
(41, 7, 6000, 'admin'),
(47, 6, 6000, 'admin'),
(48, 6, 6000, 'admin'),
(53, 7, 6000, 'admin'),
(54, 7, 6000, 'admin'),
(55, 6, 6000, 'admin'),
(56, 7, 6000, 'admin'),
(57, 7, 6000, 'admin'),
(58, 7, 6000, 'admin'),
(59, 7, 6000, 'admin'),
(60, 9, 6000, 'admin'),
(61, 9, 6000, 'admin'),
(62, 9, 6000, 'admin'),
(63, 9, 6000, 'admin'),
(64, 9, 6000, 'admin'),
(65, 9, 6000, 'admin'),
(66, 9, 6000, 'admin'),
(67, 9, 6000, 'admin'),
(68, 9, 6000, 'admin'),
(69, 9, 6000, 'admin'),
(70, 9, 6000, 'admin'),
(71, 9, 6000, 'admin'),
(72, 9, 6000, 'admin'),
(73, 9, 6000, 'admin'),
(74, 9, 6000, 'admin'),
(75, 9, 6000, 'admin'),
(76, 9, 6000, 'admin'),
(77, 9, 6000, 'admin'),
(78, 9, 6000, 'admin'),
(79, 9, 6000, 'admin'),
(80, 9, 6000, 'admin'),
(81, 9, 6000, 'admin'),
(82, 9, 6000, 'admin'),
(83, 9, 6000, 'admin'),
(84, 9, 6000, 'admin'),
(85, 9, 6000, 'admin'),
(86, 9, 6000, 'admin'),
(87, 9, 6000, 'admin'),
(88, 9, 6000, 'admin'),
(89, 9, 6000, 'admin'),
(90, 9, 6000, 'admin'),
(91, 9, 6000, 'admin'),
(92, 9, 6000, 'admin'),
(93, 9, 6000, 'admin'),
(95, 7, 6000, 'admin'),
(96, 7, 6000, 'admin'),
(97, 7, 6000, 'admin'),
(99, 7, 6000, 'admin'),
(100, 7, 6000, 'admin'),
(101, 7, 6000, 'admin'),
(102, 7, 6000, 'admin'),
(103, 7, 6000, 'admin'),
(104, 7, 6000, 'admin'),
(105, 7, 6000, 'admin'),
(106, 7, 6000, 'admin'),
(107, 7, 6000, 'admin'),
(108, 7, 6000, 'admin'),
(109, 7, 6000, 'admin'),
(110, 7, 6000, 'admin'),
(111, 7, 6000, 'admin'),
(112, 7, 6000, 'admin'),
(113, 7, 6000, 'admin'),
(114, 7, 6000, 'admin'),
(115, 7, 6000, 'admin'),
(116, 7, 6000, 'admin'),
(165, 6, 6000, 'admin'),
(166, 9, 6000, 'admin'),
(167, 9, 6000, 'admin'),
(168, 9, 6000, 'admin'),
(169, 9, 6000, 'admin'),
(170, 9, 6000, 'admin'),
(171, 9, 6000, 'admin'),
(172, 9, 6000, 'admin'),
(173, 9, 6000, 'admin'),
(174, 9, 6000, 'admin'),
(175, 9, 6000, 'admin'),
(176, 9, 6000, 'admin'),
(177, 9, 6000, 'admin'),
(178, 7, 6000, 'admin'),
(179, 7, 6000, 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `serv_id` int(11) NOT NULL,
  `serv_name` varchar(100) NOT NULL,
  `description` varchar(200) NOT NULL,
  `unit` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`serv_id`, `serv_name`, `description`, `unit`) VALUES
(1, 'service 1', 'creating database', 65),
(2, 'service 2', 'designing website', 75),
(3, 'service 3', 'deploying database', 50),
(4, 'service 4', 'designing website', 46);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clientinfo`
--
ALTER TABLE `clientinfo`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `quote`
--
ALTER TABLE `quote`
  ADD PRIMARY KEY (`quote_id`),
  ADD KEY `FK_Quote` (`client_id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`serv_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `clientinfo`
--
ALTER TABLE `clientinfo`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `quote`
--
ALTER TABLE `quote`
  MODIFY `quote_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'AUTO_INCREMENT=7000', AUTO_INCREMENT=180;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `serv_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `quote`
--
ALTER TABLE `quote`
  ADD CONSTRAINT `FK_Quote` FOREIGN KEY (`client_id`) REFERENCES `clientinfo` (`c_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
