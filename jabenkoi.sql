-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 20, 2019 at 11:20 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jaben_koi`
--

-- --------------------------------------------------------

--
-- Table structure for table `bus`
--

CREATE TABLE `bus` (
  `ID` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `RouteID` int(10) DEFAULT NULL,
  `rev_for` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bus`
--

INSERT INTO `bus` (`ID`, `name`, `RouteID`, `rev_for`) VALUES
(1111, 'Turag Ent', 1, 'F'),
(1112, 'Rayda Paribahan', 3, 'F'),
(1113, 'BRTC(via Shewrapara)', 5, 'F'),
(1114, 'Turag Ent', 2, 'R'),
(1115, 'Turag Ent', 1, 'F'),
(1116, 'Rayda Paribahan', 3, 'F'),
(1117, 'Rayda Paribahan', 4, 'R'),
(1118, 'BRTC(via Shewrapara)', 6, 'R'),
(1119, 'BRTC(via Shewrapara)', 6, 'R'),
(1120, 'Turag Ent', 2, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `checker`
--

CREATE TABLE `checker` (
  `ID` int(10) NOT NULL,
  `name` varchar(15) NOT NULL,
  `password` varchar(10) NOT NULL,
  `StoppageID` int(10) DEFAULT NULL,
  `RouteID` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `checker`
--

INSERT INTO `checker` (`ID`, `name`, `password`, `StoppageID`, `RouteID`) VALUES
(1, 'Fuad', 'fuad', 100, 1),
(2, 'Tahmid', '1234', 101, 1),
(3, 'Chayan', '1234', 102, 1),
(4, 'Rana', '1234', 103, 1),
(5, 'Mama', '1234', 104, 1),
(6, 'Rajon', '1234', 105, 1),
(7, 'Joy', '1234', 106, 1),
(8, 'Nurul', '1234', 107, 1),
(9, 'Mamun', '1234', 108, 1),
(10, 'Shafat', '1234', 109, 1),
(11, 'Abu', '1234', 110, 1);

-- --------------------------------------------------------

--
-- Table structure for table `distance`
--

CREATE TABLE `distance` (
  `RouteID` int(11) DEFAULT NULL,
  `stoppageID` int(11) DEFAULT NULL,
  `dis` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `distance`
--

INSERT INTO `distance` (`RouteID`, `stoppageID`, `dis`) VALUES
(1, 100, 0),
(1, 101, 1.7),
(1, 102, 2.6),
(1, 103, 5.5),
(1, 104, 6.6),
(1, 105, 8.7),
(1, 106, 10),
(1, 107, 11),
(1, 108, 22),
(1, 109, 24),
(1, 110, 25),
(2, 110, 0),
(2, 108, 3),
(2, 107, 14),
(2, 106, 15),
(2, 105, 16.3),
(2, 104, 18.3),
(2, 103, 19.5),
(2, 102, 22.4),
(2, 101, 23.3),
(2, 100, 25),
(3, 111, 0),
(3, 112, 3.1),
(3, 100, 4.3),
(3, 101, 5.5),
(3, 102, 6.4),
(3, 103, 8.6),
(3, 113, 11),
(3, 114, 12),
(3, 115, 13),
(3, 116, 15),
(3, 108, 26),
(3, 109, 29),
(3, 110, 30),
(4, 110, 0),
(4, 109, 1),
(4, 108, 4),
(4, 116, 15),
(4, 115, 17),
(4, 114, 18),
(4, 113, 19),
(4, 103, 21.4),
(4, 102, 23.6),
(4, 101, 24.5),
(4, 100, 25.7),
(4, 112, 26.9),
(4, 111, 30),
(5, 117, 0),
(5, 118, 1.2),
(5, 119, 1.4),
(5, 120, 1.8),
(5, 121, 4.2),
(5, 122, 5),
(5, 123, 7.4),
(5, 124, 10),
(5, 125, 13),
(5, 126, 15),
(5, 127, 117),
(6, 127, 0),
(6, 126, 2),
(6, 125, 5),
(6, 124, 7),
(6, 123, 9.6),
(6, 122, 12),
(6, 121, 12.6),
(6, 120, 15.2),
(6, 119, 15.6),
(6, 118, 15.8),
(6, 117, 17);

-- --------------------------------------------------------

--
-- Table structure for table `passenger`
--

CREATE TABLE `passenger` (
  `ID` int(10) NOT NULL,
  `name` varchar(15) NOT NULL,
  `email` varchar(25) NOT NULL,
  `contact_no` int(11) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `passenger`
--

INSERT INTO `passenger` (`ID`, `name`, `email`, `contact_no`, `password`) VALUES
(111, 'Fuad', 'fuad@gmail.com', 1515660994, 'fuad'),
(112, 'Fuad', 'fuadshezan@gmail.com', 1515660994, '123'),
(113, 'Tahmid', 'gandu@gmail.com', 1899999990, 'tahmid'),
(114, 'Tahmid', 'ganduyou@gmail.com', 1899999990, 'mostakim'),
(115, 'mama', 'tahmidmostakim74@gmail.co', 1870501000, '1234'),
(117, 'abcd', 'abdkjskdj', 1870501000, '1234');

-- --------------------------------------------------------

--
-- Table structure for table `route`
--

CREATE TABLE `route` (
  `ID` int(10) NOT NULL,
  `stoppages` varchar(255) NOT NULL,
  `name` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `route`
--

INSERT INTO `route` (`ID`, `stoppages`, `name`) VALUES
(1, '100 101 102 103 104 105 106 107 108 109 110', 'Sayedbad to Tongi'),
(2, '110 109 108 107 106 105 104 103 102 101 100', 'Tongi to sayedabad'),
(3, '111 112 100 101 102 103 113 114 115 116 108 109 110', 'Postogola to tongi'),
(4, '110 109 108 116 115 114 113 103 102 101 100 112 111', 'Tongi to postogola'),
(5, '117 118 119 120 121 122 123  124 125 126 127', 'Motijheel to Rupnagar'),
(6, '127 126 125 124 123 122 121 120 119 118 117', 'Rupnagar to Motijheel');

-- --------------------------------------------------------

--
-- Table structure for table `route_stoppage`
--

CREATE TABLE `route_stoppage` (
  `RouteID` int(10) NOT NULL,
  `StoppageID` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `route_stoppage`
--

INSERT INTO `route_stoppage` (`RouteID`, `StoppageID`) VALUES
(1, 100),
(1, 101),
(1, 102),
(1, 104),
(1, 105),
(1, 106),
(1, 107),
(1, 108),
(1, 109),
(1, 110),
(2, 100),
(2, 101),
(2, 102),
(2, 103),
(2, 104),
(2, 105),
(2, 106),
(2, 107),
(2, 108),
(2, 109),
(2, 110),
(3, 100),
(3, 101),
(3, 102),
(3, 103),
(3, 108),
(3, 109),
(3, 110),
(3, 111),
(3, 112),
(3, 113),
(3, 114),
(3, 115),
(3, 116),
(4, 100),
(4, 101),
(4, 102),
(4, 103),
(4, 108),
(4, 109),
(4, 110),
(4, 111),
(4, 112),
(4, 113),
(4, 114),
(4, 115),
(4, 116),
(5, 117),
(5, 118),
(5, 119),
(5, 120),
(5, 121),
(5, 122),
(5, 123),
(5, 124),
(5, 125),
(5, 126),
(5, 127),
(6, 117),
(6, 118),
(6, 119),
(6, 120),
(6, 121),
(6, 122),
(6, 123),
(6, 124),
(6, 125),
(6, 126),
(6, 127);

-- --------------------------------------------------------

--
-- Table structure for table `stoppage`
--

CREATE TABLE `stoppage` (
  `ID` int(10) NOT NULL,
  `name` varchar(30) NOT NULL,
  `longitude` double NOT NULL,
  `Latitude` double NOT NULL,
  `info` varchar(50) DEFAULT NULL,
  `icon` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stoppage`
--

INSERT INTO `stoppage` (`ID`, `name`, `longitude`, `Latitude`, `info`, `icon`) VALUES
(100, 'Sayedabad', 90.425779, 23.714441, 'Sayedabad Bus Stand', NULL),
(101, 'Manik Nagar', 90.42875, 23.722158, 'Manik Nagar Bus Stand', NULL),
(102, 'Komlapur', 90.435283, 23.732378, 'Komlapur Bus Stand', NULL),
(103, 'Malibag', 90.414195, 23.743977, 'Malibag Bus Stand', NULL),
(104, 'Rampura', 90.421934, 23.765727, 'Rampura Bus Stand', NULL),
(105, 'Badda', 90.42568, 23.780586, 'Badda Bus Stand', NULL),
(106, 'Bashtola', 90.424103, 23.794251, 'Bashtola Bus Stand', NULL),
(107, 'Natunbazar', 90.423725, 23.797249, 'Natunbazar Bus Stand', NULL),
(108, 'Airport', 90.407327, 23.851699, 'Airport Bus Stand', NULL),
(109, 'Uttara', 90.3795, 23.8759, 'Uttara Bus Stand', NULL),
(110, 'Tongi', 90.400532, 23.884118, 'Tongi Bus Stand', NULL),
(111, 'Postogola', 90.425341, 23.685617, 'Postogola Bus Stand', NULL),
(112, 'Jatrabari', 90.434609, 23.710042, 'Jatrabari Bus Stand', NULL),
(113, 'Magbazar', 90.402726, 23.748465, 'Magbazar Bus Stand', NULL),
(114, 'Shatrasta', 90.36689, 23.7574983, 'Shatrasta Bus Stand', NULL),
(115, 'Nabisco', 90.398666, 23.7696253, 'Nabisco Bus Stand', NULL),
(116, 'Mohakhali', 90.3965507, 23.7782392, 'Mohakhali Bus Stand', NULL),
(117, 'Motijheel', 90.4193704, 23.7277755, 'Motijheel Bus Stand', NULL),
(118, 'Paltan', 90.7300823, 90.4078674, 'Paltan Bus Stand', NULL),
(119, 'Pressclub', 90.4038515, 23.7299288, 'Pressclub Bus Stand', NULL),
(120, 'Shahbag', 90.3919137, 23.7403393, 'Pressclub Bus Stand', NULL),
(121, 'Banglamotor', 90.389328, 23.7470506, 'Banglamotor Bus Stand', NULL),
(122, 'Farmgate', 90.3878071, 23.7572733, 'Farmgate Bus Stand', NULL),
(123, 'Shewrapara', 90.3733791, 23.790398, 'Shewrapara Bus Stand', NULL),
(124, 'Kajipara', 90.3705939, 23.7971574, 'Kajipara Bus Stand', NULL),
(125, 'Mirpur 10', 90.3665091, 23.8069245, 'Mirpur 10 Bus Stand', NULL),
(126, 'Mirpur 2', 90.3627313, 23.8215698, 'Mirpur 2 Bus Stand', NULL),
(127, 'Rupnagar', 90.3545383, 23.8142017, 'Rupnagar Bus Stand', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tkt`
--

CREATE TABLE `tkt` (
  `ID` int(11) NOT NULL,
  `srcID` int(11) NOT NULL,
  `destID` int(11) NOT NULL,
  `txnID` int(11) NOT NULL,
  `passengerID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tkt`
--

INSERT INTO `tkt` (`ID`, `srcID`, `destID`, `txnID`, `passengerID`) VALUES
(1, 100, 102, 34567, 113),
(2, 101, 106, 0, 113),
(3, 100, 102, 7895, 113);

-- --------------------------------------------------------

--
-- Table structure for table `tracker`
--

CREATE TABLE `tracker` (
  `ch_time` datetime NOT NULL,
  `Bus_ID` int(10) NOT NULL,
  `Stoppage_ID` int(10) NOT NULL,
  `CheckerID` int(10) DEFAULT NULL,
  `route_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tracker`
--

INSERT INTO `tracker` (`ch_time`, `Bus_ID`, `Stoppage_ID`, `CheckerID`, `route_ID`) VALUES
('2019-12-10 20:47:27', 1111, 100, 1, 2),
('2019-12-10 20:49:29', 1111, 110, 11, 1),
('2019-12-10 20:54:59', 1111, 100, 1, 2),
('2019-12-10 20:55:40', 1111, 103, 4, 1),
('2019-12-10 00:21:29', 1111, 100, 1, 2),
('2019-12-10 01:54:57', 111, 100, 1, 0),
('2019-12-10 01:57:02', 1111, 110, 11, 1),
('2019-12-10 07:48:47', 1111, 100, 1, 2),
('2019-12-10 07:57:01', 1111, 100, 1, 1),
('2019-12-10 07:58:16', 1111, 101, 2, 2),
('2019-12-10 09:45:13', 1111, 100, 1, 2),
('2019-12-10 09:48:52', 1111, 103, 4, 1),
('2019-12-10 10:23:42', 1111, 103, 4, 2),
('2019-12-10 10:27:03', 1111, 100, 1, 1),
('2019-12-10 10:27:50', 1111, 103, 4, 1),
('2019-12-10 10:30:38', 1111, 100, 1, 2),
('2019-12-10 10:32:49', 1111, 100, 1, 1),
('2019-12-10 10:33:41', 1111, 103, 4, 2),
('2019-12-10 10:35:12', 1111, 100, 1, 1),
('2019-12-10 10:37:29', 1111, 103, 4, 2),
('2019-12-10 10:47:03', 1111, 103, 4, 1),
('2019-12-10 10:48:53', 1111, 106, 7, 2),
('2019-12-10 10:53:53', 1111, 106, 7, 2),
('2019-12-10 10:55:02', 1111, 101, 2, 2),
('2019-12-10 10:56:11', 1111, 100, 1, 2),
('2019-12-10 11:05:44', 1111, 100, 1, 1),
('2019-12-10 18:23:11', 1111, 100, 1, 1),
('2019-12-10 18:24:42', 1111, 100, 1, 1),
('2019-12-10 18:25:59', 1111, 101, 2, 1),
('2019-12-10 18:28:28', 1111, 106, 7, 1),
('2019-12-12 19:03:43', 1111, 103, 4, 1),
('2019-12-12 19:06:44', 111, 104, 5, 0),
('2019-12-12 19:08:10', 1111, 104, 5, 1),
('2019-12-12 19:09:51', 1111, 110, 11, 1),
('2019-12-12 19:14:49', 1111, 110, 11, 1),
('2019-12-12 19:15:02', 1110, 110, 11, 0),
('2019-12-13 00:27:49', 1111, 100, 1, 1),
('2019-12-13 00:52:45', 1111, 100, 1, 1),
('2019-12-13 00:52:53', 1111, 100, 1, 1),
('2019-12-13 00:53:45', 1111, 100, 1, 1),
('2019-12-13 00:54:34', 1111, 100, 1, 1),
('2019-12-13 00:55:24', 1111, 100, 1, 1),
('2019-12-13 00:56:38', 1111, 100, 1, 1),
('2019-12-13 01:04:48', 1111, 103, 4, 1),
('2019-12-13 01:11:06', 1111, 103, 4, 1),
('2019-12-13 01:11:55', 1111, 103, 4, 1),
('2019-12-13 01:13:07', 1111, 103, 4, 1),
('2019-12-13 01:13:48', 1111, 103, 4, 1),
('2019-12-13 01:14:28', 1113, 103, 4, 5),
('2019-12-13 01:15:35', 1111, 110, 11, 1),
('2019-12-13 01:22:04', 1111, 110, 11, 1),
('2019-12-13 01:22:24', 1111, 110, 11, 1),
('2019-12-13 01:26:44', 1111, 110, 11, 1),
('2019-12-13 01:36:32', 1111, 110, 11, 1),
('2019-12-13 01:42:11', 1111, 109, 10, 1),
('2019-12-13 01:44:40', 1111, 108, 9, 1),
('2019-12-13 01:45:39', 1111, 107, 8, 2),
('2019-12-13 01:46:37', 1111, 106, 7, 1),
('2019-12-13 01:47:32', 1111, 106, 7, 1),
('2019-12-13 01:49:25', 1111, 106, 7, 2),
('2019-12-13 01:50:17', 1111, 100, 1, 2),
('2019-12-13 08:51:20', 1111, 100, 1, 2),
('2019-12-13 08:53:07', 1111, 100, 1, 2),
('2019-12-13 08:53:45', 1111, 100, 1, 2),
('2019-12-13 08:54:36', 1111, 100, 1, 1),
('2019-12-13 08:55:13', 1111, 100, 1, 2),
('2019-12-13 08:55:23', 1111, 100, 1, 1),
('2019-12-13 08:55:26', 1111, 100, 1, 2),
('2019-12-13 08:56:18', 1111, 100, 1, 2),
('2019-12-13 08:59:59', 1111, 100, 1, 2),
('2019-12-13 09:10:38', 1111, 103, 4, 2),
('2019-12-13 09:17:45', 1111, 100, 1, 1),
('2019-12-13 09:18:25', 1111, 103, 4, 2),
('2019-12-13 09:20:48', 1111, 103, 4, 1),
('2019-12-13 09:21:45', 1111, 104, 5, 2),
('2019-12-13 09:23:36', 1111, 100, 1, 2),
('2019-12-13 09:59:37', 1111, 100, 1, 1),
('2019-12-13 10:00:43', 1111, 101, 2, 1),
('2019-12-13 10:01:21', 1111, 106, 7, 1),
('2019-12-13 10:04:02', 1111, 109, 10, 1),
('2019-12-13 10:04:49', 1111, 110, 11, 1),
('2019-12-13 10:18:37', 1111, 110, 11, 2),
('2019-12-13 10:19:24', 1111, 109, 10, 2),
('2019-12-13 10:21:43', 1111, 107, 8, 2),
('2019-12-13 10:22:23', 1111, 100, 1, 1),
('2019-12-13 10:45:12', 1111, 100, 1, 2),
('2019-12-13 10:46:41', 1111, 110, 11, 2),
('2019-12-13 11:20:01', 1111, 106, 7, 2),
('2019-12-13 12:02:21', 1111, 101, 2, 2),
('2019-12-13 12:04:49', 1111, 100, 1, 1),
('2019-12-13 12:05:39', 1111, 103, 4, 1),
('2019-12-13 12:06:37', 1111, 106, 7, 1),
('2019-12-13 12:07:57', 1111, 110, 11, 2),
('2019-12-13 12:26:27', 1111, 103, 4, 2),
('2019-12-13 12:27:02', 1111, 100, 1, 1),
('2019-12-13 12:27:53', 1111, 103, 4, 1),
('2019-12-13 13:04:41', 1111, 110, 11, 1),
('2019-12-13 13:06:39', 1111, 110, 11, 2),
('2019-12-13 13:14:43', 1111, 103, 4, 2),
('2019-12-13 13:15:23', 1111, 100, 1, 1),
('2019-12-14 21:43:39', 1111, 101, 2, 1),
('2019-12-14 21:45:21', 1115, 103, 4, 1),
('2019-12-14 21:57:38', 1115, 105, 6, 1),
('2019-12-14 23:53:33', 1111, 104, 5, 1),
('2019-12-15 00:19:05', 1111, 104, 5, 1),
('2019-12-15 01:01:22', 1115, 106, 7, 1),
('2019-12-15 01:43:57', 1115, 107, 8, 1),
('2019-12-15 01:45:35', 1111, 105, 6, 1),
('2019-12-15 02:41:22', 1111, 110, 11, 2),
('2019-12-15 02:44:50', 1111, 103, 4, 2),
('2019-12-15 02:44:50', 1111, 103, 4, 2),
('2019-12-15 02:46:33', 1111, 100, 1, 1),
('2019-12-15 09:07:16', 1111, 103, 4, 1),
('2019-12-15 11:28:44', 1111, 106, 7, 1),
('2019-12-15 11:32:23', 1111, 110, 11, 2),
('2019-12-15 11:36:24', 1115, 110, 11, 2),
('2019-12-15 11:36:57', 1115, 110, 11, 1),
('2019-12-15 11:37:51', 1115, 106, 7, 1),
('2019-12-15 11:42:36', 1115, 109, 10, 1),
('2019-12-15 11:43:22', 1115, 110, 11, 2),
('2019-12-15 11:47:08', 1115, 103, 4, 2),
('2019-12-15 11:49:05', 1115, 100, 1, 1),
('2019-12-15 11:50:49', 1111, 100, 1, 1),
('2019-12-15 13:19:07', 1120, 100, 1, 2),
('2019-12-15 13:24:27', 1111, 103, 4, 1),
('2019-12-15 13:26:30', 1111, 106, 7, 1),
('2019-12-15 13:29:36', 1115, 104, 5, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bus`
--
ALTER TABLE `bus`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `FKBus446629` (`RouteID`);

--
-- Indexes for table `checker`
--
ALTER TABLE `checker`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `FKChecker46834` (`StoppageID`),
  ADD KEY `FKChecker455798` (`RouteID`);

--
-- Indexes for table `distance`
--
ALTER TABLE `distance`
  ADD KEY `fk` (`RouteID`),
  ADD KEY `fk2` (`stoppageID`);

--
-- Indexes for table `passenger`
--
ALTER TABLE `passenger`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `route`
--
ALTER TABLE `route`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `route_stoppage`
--
ALTER TABLE `route_stoppage`
  ADD PRIMARY KEY (`RouteID`,`StoppageID`),
  ADD KEY `FKRoute_Stop15604` (`RouteID`),
  ADD KEY `FKRoute_Stop606639` (`StoppageID`);

--
-- Indexes for table `stoppage`
--
ALTER TABLE `stoppage`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tkt`
--
ALTER TABLE `tkt`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tracker`
--
ALTER TABLE `tracker`
  ADD KEY `FKTracker327056` (`CheckerID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bus`
--
ALTER TABLE `bus`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1121;

--
-- AUTO_INCREMENT for table `checker`
--
ALTER TABLE `checker`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `passenger`
--
ALTER TABLE `passenger`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=118;

--
-- AUTO_INCREMENT for table `route`
--
ALTER TABLE `route`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `stoppage`
--
ALTER TABLE `stoppage`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=128;

--
-- AUTO_INCREMENT for table `tkt`
--
ALTER TABLE `tkt`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bus`
--
ALTER TABLE `bus`
  ADD CONSTRAINT `FKBus446629` FOREIGN KEY (`RouteID`) REFERENCES `route` (`ID`);

--
-- Constraints for table `checker`
--
ALTER TABLE `checker`
  ADD CONSTRAINT `FKChecker455798` FOREIGN KEY (`RouteID`) REFERENCES `route` (`ID`),
  ADD CONSTRAINT `FKChecker46834` FOREIGN KEY (`StoppageID`) REFERENCES `stoppage` (`ID`);

--
-- Constraints for table `distance`
--
ALTER TABLE `distance`
  ADD CONSTRAINT `fk` FOREIGN KEY (`RouteID`) REFERENCES `route` (`ID`),
  ADD CONSTRAINT `fk2` FOREIGN KEY (`stoppageID`) REFERENCES `stoppage` (`ID`);

--
-- Constraints for table `route_stoppage`
--
ALTER TABLE `route_stoppage`
  ADD CONSTRAINT `FKRoute_Stop15604` FOREIGN KEY (`RouteID`) REFERENCES `route` (`ID`),
  ADD CONSTRAINT `FKRoute_Stop606639` FOREIGN KEY (`StoppageID`) REFERENCES `stoppage` (`ID`);

--
-- Constraints for table `tracker`
--
ALTER TABLE `tracker`
  ADD CONSTRAINT `FKTracker327056` FOREIGN KEY (`CheckerID`) REFERENCES `checker` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
