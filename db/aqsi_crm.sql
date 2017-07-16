-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 07, 2017 at 08:09 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aqsi_crm`
--

-- --------------------------------------------------------

--
-- Table structure for table `activity_log`
--

CREATE TABLE `activity_log` (
  `id` int(255) NOT NULL,
  `username` varchar(50) NOT NULL,
  `time` varchar(50) NOT NULL,
  `activity` varchar(255) NOT NULL,
  `company` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `activity_log`
--

INSERT INTO `activity_log` (`id`, `username`, `time`, `activity`, `company`) VALUES
(1, '20', '2017-04-05 06:37:PM', 'login', 'login'),
(2, '20', '2017-04-05 06:44:PM', 'edit', 'companyname'),
(3, '20', '2017-04-05 06:50:PM', 'logout', 'logout'),
(4, '14', '2017-04-05 06:52:PM', 'login', 'login'),
(5, '2', '2017-04-05 07:06:PM', 'logout', 'logout'),
(6, '14', '2017-04-05 07:06:PM', 'login', 'login'),
(7, '2', '2017-04-05 07:27:PM', 'logout', 'logout'),
(8, '14', '2017-04-05 07:27:PM', 'login', 'login'),
(9, '14', '2017-04-05 09:36:PM', 'login', 'login'),
(10, '14', '2017-04-05 09:37:PM', 'logout', 'logout'),
(11, '20', '2017-04-05 09:38:PM', 'login', 'login'),
(12, '20', '2017-04-06 12:54:AM', 'login', 'login'),
(13, '20', '2017-04-06 12:55:AM', 'logout', 'logout'),
(14, '20', '2017-04-06 01:04:AM', 'login', 'login'),
(15, '20', '2017-04-06 01:19:AM', 'logout', 'logout'),
(16, '14', '2017-04-06 01:21:AM', 'login', 'login'),
(17, '14', '2017-04-06 01:59:AM', 'logout', 'logout'),
(18, '14', '2017-04-06 08:00:PM', 'login', 'login'),
(19, '14', '2017-04-06 08:03:PM', 'logout', 'logout'),
(20, '14', '2017-04-06 09:38:PM', 'login', 'login'),
(21, '14', '2017-04-06 09:57:PM', 'login', 'login'),
(22, '14', '2017-04-06 10:04:PM', 'logout', 'logout'),
(23, '20', '2017-04-06 10:05:PM', 'login', 'login'),
(24, '20', '2017-04-06 11:43:PM', 'logout', 'logout'),
(25, '20', '2017-04-06 11:43:PM', 'login', 'login'),
(26, '20', '2017-04-06 11:46:PM', 'logout', 'logout'),
(27, '20', '2017-04-06 11:54:PM', 'login', 'login'),
(28, '20', '2017-04-07 12:05:AM', 'logout', 'logout'),
(29, '14', '2017-04-07 12:05:AM', 'login', 'login'),
(30, '14', '2017-04-07 12:05:AM', 'logout', 'logout');

-- --------------------------------------------------------

--
-- Table structure for table `addmember`
--

CREATE TABLE `addmember` (
  `user_id` int(11) NOT NULL,
  `image` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `addmember`
--

INSERT INTO `addmember` (`user_id`, `image`, `username`, `password`, `fname`, `lname`) VALUES
(14, 'uploads/1', 'harvey', '3d83f27f0845faf9fa80e1a8f0f7ea75', 'harvey', 'mendoza'),
(15, 'uploads/up-logo.png', 'daryl', '0a159a8c4e71b95570f152181561e26e', 'daryl', 'baradi'),
(16, 'uploads/login_key1.png', 'carol', 'a9a0198010a6073db96434f6cc5f22a8', 'carol', 'carol');

-- --------------------------------------------------------

--
-- Table structure for table `dev`
--

CREATE TABLE `dev` (
  `id` int(10) NOT NULL,
  `tablet` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dev`
--

INSERT INTO `dev` (`id`, `tablet`) VALUES
(1, 'ANDROID'),
(2, 'IOS');

-- --------------------------------------------------------

--
-- Table structure for table `newoppurtunity`
--

CREATE TABLE `newoppurtunity` (
  `id` int(10) NOT NULL,
  `date` varchar(10) NOT NULL,
  `assigned` varchar(100) NOT NULL,
  `companyname` varchar(200) NOT NULL,
  `pointperson` varchar(100) NOT NULL,
  `position` varchar(100) NOT NULL,
  `contactnumber` varchar(100) NOT NULL,
  `emailadd` varchar(100) NOT NULL,
  `meetingdate` varchar(10) NOT NULL,
  `reccuringdate` varchar(10) NOT NULL,
  `statuspercentage` varchar(100) NOT NULL,
  `remarks` longtext NOT NULL,
  `specialrequest` varchar(100) NOT NULL,
  `budget` varchar(50) NOT NULL,
  `numuser` varchar(10) NOT NULL,
  `targetimplementation` varchar(100) NOT NULL,
  `device` varchar(100) NOT NULL,
  `telco` varchar(100) NOT NULL,
  `comname` varchar(100) NOT NULL,
  `signeddate` varchar(100) NOT NULL,
  `exdate` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `newoppurtunity`
--

INSERT INTO `newoppurtunity` (`id`, `date`, `assigned`, `companyname`, `pointperson`, `position`, `contactnumber`, `emailadd`, `meetingdate`, `reccuringdate`, `statuspercentage`, `remarks`, `specialrequest`, `budget`, `numuser`, `targetimplementation`, `device`, `telco`, `comname`, `signeddate`, `exdate`) VALUES
(1, 'date', 'assigned', 'companyname', '1', '1', '1', '1', '1', '', '1', '1', '1', '1', '1', '1', 'ANDROID', '1', '1', '', ''),
(4, '04/05/2017', 'harvey mendoza', 'test', 'test', 'test', 'test', 'test', '2017-04-07', '2017-04-14', '10%', 'test', 'test', 'test', 'test', '2nd', 'IOS', 'SMART', 'test', '2017-04-08', '2017-04-21'),
(2, '04/05/2017', 'harvey mendoza', 'Company', 'Point Person', 'Position', 'Contact Number', 'Email', '2017-04-28', '', 'Lost', 'Remarks', 'Special Request', 'Budget', '200', '3rd', 'IOS', 'ALL', 'Viva', '2017-04-20', '2017-04-28'),
(3, '04/05/2017', 'harvey mendoza', 'AQSoftware', 'Rob Olegario', 'Gm', '09262625534', 'email', '2017-04-28', '2017-04-06', '10%', 'Remarks', 'special ', 'budget', '25', '3rd', 'ANDROID', 'ALL', 'EScience', '2017-04-22', '2017-04-28'),
(5, '04/05/2017', 'harvey mendoza', 'David Salon', 'David Rex', 'Any', '1234567890', 'doto@gmail.com', '2017-04-19', '2017-04-19', '10%', 'Testing', 'System enhancement', '100,000', '50', '2nd', 'IOS', 'SMART', 'test', '2016-01-12', '2017-04-03'),
(6, '04/05/2017', 'harvey mendoza', 'test', 'test', 'test', 'test', 'test', '2017-04-07', '2017-04-07', '10%', 'test', 'test', 'test', 'test', '2nd', 'ANDROID', 'SMART', 'test', '2017-01-01', '2017-04-25'),
(7, '04/05/2017', 'harvey mendoza', 'Jollibee', 'Jollibee', 'Service Crew', '09262625534', 'email@yahoo.com', '2017-04-28', '2017-04-21', 'Win', 'Remarks', 'special child', '1.5billion', '200', '4th', 'ANDROID', 'GLOBE', '', '', ''),
(8, '04/06/2017', 'harvey mendoza', 'asdf', 'asdf', 'asdf', 'asdf', 'asdf', '2017-04-14', '2017-03-30', '10%', 'asdf', 'asdf', 'asdf', 'asdf', '3rd', 'IOS', 'SMART', 'asdf', '2017-04-05', '2017-04-12'),
(9, '04/06/2017', 'harvey mendoza', '1', '1', '1', '1', '1', '2017-04-20', '2017-04-14', '10%', '1', '1', '1', '1', '2nd', 'IOS', 'ALL', '1', '2017-04-12', '2017-04-20'),
(10, '04/06/2017', 'harvey mendoza', '2', '2', '2', '2', '2', '2017-04-19', '2017-03-28', '10%', '2', '2', '2', '2', '3rd', 'IOS', 'GLOBE', '2', '2017-04-12', '2017-04-19'),
(11, '04/06/2017', 'harvey mendoza', '4', '4', '4', '4', '4', '2017-04-04', '2017-03-28', '50%', '4', '4', '4', '4', '2nd', 'IOS', 'SMART', '4', '2017-04-17', '2017-04-12');

-- --------------------------------------------------------

--
-- Table structure for table `statpercent`
--

CREATE TABLE `statpercent` (
  `id` int(10) NOT NULL,
  `percent` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `statpercent`
--

INSERT INTO `statpercent` (`id`, `percent`) VALUES
(1, '10%'),
(2, '50%'),
(3, '90%'),
(4, 'WIN'),
(5, 'LOST');

-- --------------------------------------------------------

--
-- Table structure for table `targetimplem`
--

CREATE TABLE `targetimplem` (
  `id` int(10) NOT NULL,
  `target` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `targetimplem`
--

INSERT INTO `targetimplem` (`id`, `target`) VALUES
(1, '1st'),
(2, '2nd'),
(3, '3rd'),
(4, '4th');

-- --------------------------------------------------------

--
-- Table structure for table `telcom`
--

CREATE TABLE `telcom` (
  `id` int(10) NOT NULL,
  `telecom` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `telcom`
--

INSERT INTO `telcom` (`id`, `telecom`) VALUES
(1, 'SMART'),
(2, 'SUN'),
(3, 'GLOBE');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `firstname`, `lastname`) VALUES
(20, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'harvey', 'mendoza'),
(24, 'boss', 'ceb8447cc4ab78d2ec34cd9f11e4bed2', 'boss', 'boss');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activity_log`
--
ALTER TABLE `activity_log`
  ADD PRIMARY KEY (`id`),
  ADD KEY `username` (`username`);

--
-- Indexes for table `addmember`
--
ALTER TABLE `addmember`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `username` (`username`);

--
-- Indexes for table `dev`
--
ALTER TABLE `dev`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newoppurtunity`
--
ALTER TABLE `newoppurtunity`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `statpercent`
--
ALTER TABLE `statpercent`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `targetimplem`
--
ALTER TABLE `targetimplem`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `telcom`
--
ALTER TABLE `telcom`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activity_log`
--
ALTER TABLE `activity_log`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT for table `addmember`
--
ALTER TABLE `addmember`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `dev`
--
ALTER TABLE `dev`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `newoppurtunity`
--
ALTER TABLE `newoppurtunity`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `statpercent`
--
ALTER TABLE `statpercent`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `targetimplem`
--
ALTER TABLE `targetimplem`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `telcom`
--
ALTER TABLE `telcom`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
