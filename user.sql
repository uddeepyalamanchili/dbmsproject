-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 30, 2018 at 02:23 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `user`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `cust_dts` (IN `getname` VARCHAR(20))  NO SQL
select * from  logup where name=getname$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `train_dts` (IN `get_train_no` INT)  NO SQL
select * from trains where Train_no=get_train_no$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `details`
--

CREATE TABLE `details` (
  `pname` text NOT NULL,
  `page` int(11) NOT NULL,
  `pnr` int(11) NOT NULL,
  `train_no.` int(11) NOT NULL,
  `train_nm` text NOT NULL,
  `fare` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `details`
--

INSERT INTO `details` (`pname`, `page`, `pnr`, `train_no.`, `train_nm`, `fare`) VALUES
('dsa', 21, 19752, 12933, 'Karnavati Express', 195);

-- --------------------------------------------------------

--
-- Table structure for table `help`
--

CREATE TABLE `help` (
  `name` varchar(20) NOT NULL,
  `phno` bigint(20) NOT NULL,
  `contact_email` varchar(20) NOT NULL,
  `fb_content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `help`
--

INSERT INTO `help` (`name`, `phno`, `contact_email`, `fb_content`) VALUES
('abc', 0, 'chethan02@gmail.com', 'harryy'),
('abc', 0, 'chethan02@gmail.com', 'NTR the legend'),
('abc', 0, 'chethan02@gmail.com', 'NTR the legend'),
('abc', 86941, 'chethan02@gmail.com', 'NTR the legend'),
('a', 6547123, 'chethan01@gmail', 'harrryyyyy');

-- --------------------------------------------------------

--
-- Table structure for table `logup`
--

CREATE TABLE `logup` (
  `name` text NOT NULL,
  `phone_no` int(11) NOT NULL,
  `email_id` text NOT NULL,
  `password` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `logup`
--

INSERT INTO `logup` (`name`, `phone_no`, `email_id`, `password`) VALUES
('ramareddy', 321572, 'ram@gmail', 'reddy01'),
('chethan01', 1234, 'chetha01@gmail', 'reddy01'),
('chethan02', 1235, 'chethan02@gmail', 'reddy01'),
('reddy', 12345, 'reddy@gmail', 'abcde1');

--
-- Triggers `logup`
--
DELIMITER $$
CREATE TRIGGER `after_logup_insert` AFTER INSERT ON `logup` FOR EACH ROW begin 
insert into logup_backup values(NEW.name,NEW.phone_no,NEW.email_id,NEW.password);
end
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `logup_backup`
--

CREATE TABLE `logup_backup` (
  `name` text NOT NULL,
  `phone_no` bigint(20) NOT NULL,
  `email_id` text NOT NULL,
  `password` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `logup_backup`
--

INSERT INTO `logup_backup` (`name`, `phone_no`, `email_id`, `password`) VALUES
('chethan01', 8971759688, 'chethan01@gmail', 'reddy01'),
('chethan02', 1235, 'chethan02@gmail', 'reddy02'),
('tejas', 3245, 'tejasrk@gmail', 'kulkarni01'),
('reddy', 12345, 'reddy@gmail', 'abcde1');

-- --------------------------------------------------------

--
-- Table structure for table `trains`
--

CREATE TABLE `trains` (
  `Train_no` int(11) NOT NULL,
  `Train_name` text NOT NULL,
  `Type` text NOT NULL,
  `Zone` text NOT NULL,
  `From` text NOT NULL,
  `Depature` time NOT NULL,
  `To` text NOT NULL,
  `Arrival` time NOT NULL,
  `Duration` time NOT NULL,
  `Fare` int(11) NOT NULL,
  `Depature Days` text NOT NULL,
  `available` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trains`
--

INSERT INTO `trains` (`Train_no`, `Train_name`, `Type`, `Zone`, `From`, `Depature`, `To`, `Arrival`, `Duration`, `Fare`, `Depature Days`, `available`) VALUES
(12933, 'Karnavati Express', 'SF', 'WR', 'BCT*', '13:40:00', 'ADI', '21:30:00', '07:50:00', 195, 'ALL DAYS', 117),
(14708, 'RANAKPUR EXPRESS', 'EXP', 'NWR', 'BDTS*', '15:05:00', 'ADI', '23:30:00', '08:45:00', 320, 'ALL DAYS', 35),
(22927, 'LOKSHAKTI EXPRESS', 'SF', 'WR', 'BCT', '19:40:00', 'ADI', '04:20:00', '00:00:00', 305, 'ALL DAYS', 145),
(12901, 'GUJRAT MAIL', 'SF', 'WR', 'DDR*', '22:30:00', 'ADI', '06:05:00', '08:30:00', 305, 'ALL DAYS', 375);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `details`
--
ALTER TABLE `details`
  ADD PRIMARY KEY (`pnr`);

--
-- Indexes for table `logup`
--
ALTER TABLE `logup`
  ADD PRIMARY KEY (`phone_no`);

--
-- Indexes for table `logup_backup`
--
ALTER TABLE `logup_backup`
  ADD PRIMARY KEY (`phone_no`);

--
-- Indexes for table `trains`
--
ALTER TABLE `trains`
  ADD UNIQUE KEY `Train_no` (`Train_no`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
