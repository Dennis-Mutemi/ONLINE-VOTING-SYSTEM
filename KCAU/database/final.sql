-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 10, 2022 at 05:23 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `final`
--

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `ID` int(11) NOT NULL,
  `MESSAGEID` varchar(60) NOT NULL,
  `MESSAGE1` text NOT NULL,
  `SENDER` varchar(60) NOT NULL,
  `RECEIVER` bigint(20) NOT NULL,
  `RECEIVED` tinyint(1) NOT NULL,
  `DATE1` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`ID`, `MESSAGEID`, `MESSAGE1`, `SENDER`, `RECEIVER`, `RECEIVED`, `DATE1`) VALUES
(1, 'bB2jA2d4f383xs7', 'hi', '7573427632', 5849804906, 0, '2022-02-28 17:51:53'),
(2, 'bB2jA2d4f383xs7', 'hell', '7573427632', 5849804906, 0, '2022-02-28 17:52:06'),
(3, 'd67Bm7i1o638AqBcgdxanhAp0s0jkwjAqvvcengzhpso', 'hello marry,,uko aje?', '7573427632', 8973711899, 0, '2022-02-28 17:53:13'),
(4, '1k3r8v9o8sz5B19xubvAiy3qBif10xs7zx55m28ck1raydxx4jewqbu', 'u', '7014671874', 8973711899, 0, '2022-03-01 08:54:48'),
(5, 'z6eBynk37jsonpk5gbjAA6p4ubie2e', 'helo babe', '7014671874', 7014671874, 0, '2022-03-04 15:04:44'),
(6, 'z6eBynk37jsonpk5gbjAA6p4ubie2e', 'hi', '7014671874', 7014671874, 0, '2022-03-04 15:05:47'),
(7, '9q2p0aunl4zvkr87BeAedu882jdAsjBv6k', 'hi', '7014671874', 7573427632, 0, '2022-03-04 16:10:51'),
(8, '9q2p0aunl4zvkr87BeAedu882jdAsjBv6k', 'hh', '7014671874', 7573427632, 0, '2022-03-04 16:10:58'),
(9, '9q2p0aunl4zvkr87BeAedu882jdAsjBv6k', 'hh', '7014671874', 7573427632, 0, '2022-03-04 16:11:08'),
(10, '9q2p0aunl4zvkr87BeAedu882jdAsjBv6k', 'hh', '7014671874', 7573427632, 0, '2022-03-04 16:11:12'),
(11, '9q2p0aunl4zvkr87BeAedu882jdAsjBv6k', 'hh', '7014671874', 7573427632, 0, '2022-03-04 16:11:15'),
(12, '9q2p0aunl4zvkr87BeAedu882jdAsjBv6k', 'hi', '7014671874', 7573427632, 0, '2022-03-04 16:25:25'),
(13, '9q2p0aunl4zvkr87BeAedu882jdAsjBv6k', 'vip bana', '7014671874', 7573427632, 0, '2022-03-04 16:25:37'),
(14, '1k3r8v9o8sz5B19xubvAiy3qBif10xs7zx55m28ck1raydxx4jewqbu', 'hello', '7014671874', 8973711899, 0, '2022-03-04 16:26:56'),
(15, '1k3r8v9o8sz5B19xubvAiy3qBif10xs7zx55m28ck1raydxx4jewqbu', '5', '7014671874', 8973711899, 0, '2022-03-04 16:27:19'),
(16, '1k3r8v9o8sz5B19xubvAiy3qBif10xs7zx55m28ck1raydxx4jewqbu', '6', '7014671874', 8973711899, 0, '2022-03-04 16:27:28'),
(17, '1k3r8v9o8sz5B19xubvAiy3qBif10xs7zx55m28ck1raydxx4jewqbu', 'yy', '7014671874', 8973711899, 0, '2022-03-04 16:30:10'),
(18, '1k3r8v9o8sz5B19xubvAiy3qBif10xs7zx55m28ck1raydxx4jewqbu', 'jk', '7014671874', 8973711899, 0, '2022-03-04 16:30:17'),
(19, '1k3r8v9o8sz5B19xubvAiy3qBif10xs7zx55m28ck1raydxx4jewqbu', '9', '7014671874', 8973711899, 0, '2022-03-04 16:30:23'),
(20, '1k3r8v9o8sz5B19xubvAiy3qBif10xs7zx55m28ck1raydxx4jewqbu', 'g', '7014671874', 8973711899, 0, '2022-03-04 16:39:09'),
(21, '1k3r8v9o8sz5B19xubvAiy3qBif10xs7zx55m28ck1raydxx4jewqbu', 'he', '7014671874', 8973711899, 0, '2022-03-04 16:39:36'),
(22, '1k3r8v9o8sz5B19xubvAiy3qBif10xs7zx55m28ck1raydxx4jewqbu', 'vip', '7014671874', 8973711899, 0, '2022-03-04 16:39:57'),
(23, '1k3r8v9o8sz5B19xubvAiy3qBif10xs7zx55m28ck1raydxx4jewqbu', 'uko aje', '7014671874', 8973711899, 0, '2022-03-04 16:40:06'),
(24, '1k3r8v9o8sz5B19xubvAiy3qBif10xs7zx55m28ck1raydxx4jewqbu', 'hi', '7014671874', 8973711899, 0, '2022-03-04 16:41:54'),
(25, '9q2p0aunl4zvkr87BeAedu882jdAsjBv6k', 'I LOVE YOU', '7014671874', 7573427632, 0, '2022-03-04 16:42:39'),
(26, '9q2p0aunl4zvkr87BeAedu882jdAsjBv6k', 'uko aje', '7014671874', 7573427632, 0, '2022-03-04 16:42:57'),
(27, '9q2p0aunl4zvkr87BeAedu882jdAsjBv6k', 'poa sana', '7014671874', 7573427632, 0, '2022-03-04 16:43:10'),
(28, '1k3r8v9o8sz5B19xubvAiy3qBif10xs7zx55m28ck1raydxx4jewqbu', 'vip', '7014671874', 8973711899, 0, '2022-03-04 16:43:36'),
(29, '9q2p0aunl4zvkr87BeAedu882jdAsjBv6k', 'he', '7014671874', 7573427632, 0, '2022-03-04 16:52:16'),
(30, '9q2p0aunl4zvkr87BeAedu882jdAsjBv6k', 't', '7014671874', 7573427632, 0, '2022-03-04 16:58:10'),
(31, 'z6eBynk37jsonpk5gbjAA6p4ubie2e', 'hh', '7014671874', 7014671874, 0, '2022-03-04 17:01:16'),
(32, '9q2p0aunl4zvkr87BeAedu882jdAsjBv6k', 'hello', '7014671874', 7573427632, 0, '2022-03-04 17:02:05'),
(33, '9q2p0aunl4zvkr87BeAedu882jdAsjBv6k', 'hello', '7014671874', 7573427632, 0, '2022-03-04 17:02:25'),
(34, '9q2p0aunl4zvkr87BeAedu882jdAsjBv6k', 'hi', '7573427632', 7014671874, 0, '2022-03-04 17:04:34'),
(35, '9q2p0aunl4zvkr87BeAedu882jdAsjBv6k', 'hhh', '7014671874', 7573427632, 0, '2022-03-04 17:05:15'),
(36, '9q2p0aunl4zvkr87BeAedu882jdAsjBv6k', 'hi too', '7014671874', 7573427632, 0, '2022-03-04 17:05:32'),
(37, '9q2p0aunl4zvkr87BeAedu882jdAsjBv6k', 'vip', '7573427632', 7014671874, 0, '2022-03-04 17:05:49'),
(38, '9q2p0aunl4zvkr87BeAedu882jdAsjBv6k', 'hi, have you done all the assihn kkdklklsdkakkasdkldklklkldkkasdkkcjkkjoklkckklsklsklklsklkklklsakldjkjkjkvajkjkjkjk', '7573427632', 7014671874, 0, '2022-03-04 17:07:03'),
(39, '9q2p0aunl4zvkr87BeAedu882jdAsjBv6k', 'hi, have you done all the assihn kkdklklsdkakkasdkldklklkldkkasdkkcjkkjoklkckklew[[[[[[[[[[[[[[[[[[[[[[[[[[[[sdpj\'o\'acxmlz/,.,cmZXLKDDJOIIIIIIICMWCDJA;LCsklsklklsklkklklsakldjkjkjkvajkjkjkjk', '7573427632', 7014671874, 0, '2022-03-04 17:07:24'),
(40, '9q2p0aunl4zvkr87BeAedu882jdAsjBv6k', 'hi too', '7014671874', 7573427632, 0, '2022-03-04 17:07:46'),
(41, '9q2p0aunl4zvkr87BeAedu882jdAsjBv6k', 'helo', '7014671874', 7573427632, 0, '2022-03-05 14:13:30'),
(42, 'cabgB86Bm1vh3bkg61zerrkv016j', 'fff', '7014671874', 5849804906, 0, '2022-03-05 15:25:10'),
(43, '9q2p0aunl4zvkr87BeAedu882jdAsjBv6k', 'fff', '7014671874', 7573427632, 0, '2022-03-05 15:36:59'),
(44, '9q2p0aunl4zvkr87BeAedu882jdAsjBv6k', 'ttt', '7014671874', 7573427632, 0, '2022-03-05 15:46:26'),
(45, '9q2p0aunl4zvkr87BeAedu882jdAsjBv6k', 'fff', '7014671874', 7573427632, 0, '2022-03-05 16:06:53'),
(46, '9q2p0aunl4zvkr87BeAedu882jdAsjBv6k', 'hi', '7014671874', 7573427632, 0, '2022-03-05 16:13:35'),
(47, '9q2p0aunl4zvkr87BeAedu882jdAsjBv6k', 'hi', '7014671874', 7573427632, 0, '2022-03-05 16:13:40'),
(48, '9q2p0aunl4zvkr87BeAedu882jdAsjBv6k', 'hoooo', '7014671874', 7573427632, 0, '2022-03-05 16:13:51'),
(49, '9q2p0aunl4zvkr87BeAedu882jdAsjBv6k', 'hello', '7573427632', 7014671874, 0, '2022-03-05 16:19:49'),
(50, '9q2p0aunl4zvkr87BeAedu882jdAsjBv6k', 'uko aje mike', '7573427632', 7014671874, 0, '2022-03-05 16:20:05'),
(51, 'o339j3wAax5qc5Aql5ByerfByf9q9k', 'niko poa', '7573427632', 7573427632, 0, '2022-03-05 16:20:51'),
(52, '9q2p0aunl4zvkr87BeAedu882jdAsjBv6k', 'claudia uko aje', '7573427632', 7014671874, 0, '2022-03-05 16:21:32'),
(53, 'ju4b1h956wobpB9vb261m8xh65degi7w7wm0mul156wsbxbvq6AxAeqfkqB', 'mm', '7540012334', 7014671874, 0, '2022-03-12 17:45:15'),
(54, 'jwbwwAwwq6iqa8aj6b3b3iBA8y', 'ggg', '7540012334', 8973711899, 0, '2022-03-24 00:22:17'),
(55, 'jwbwwAwwq6iqa8aj6b3b3iBA8y', 'hello', '7540012334', 8973711899, 0, '2022-03-24 00:22:23'),
(56, 'jwbwwAwwq6iqa8aj6b3b3iBA8y', 'hi,,kindly help me compaign', '7540012334', 8973711899, 0, '2022-03-24 09:08:53'),
(57, 'zryqee0o534zxv2cq50ruczbj9fdrf7ycmrjnvs2f78es6m', 'hi', '7540012334', 9544374506, 0, '2022-03-24 10:07:32'),
(58, 'd67Bm7i1o638AqBcgdxanhAp0s0jkwjAqvvcengzhpso', 'hi', '7573427632', 8973711899, 0, '2022-03-24 18:32:57'),
(59, 'd67Bm7i1o638AqBcgdxanhAp0s0jkwjAqvvcengzhpso', 'hi', '7573427632', 8973711899, 0, '2022-03-24 18:33:04'),
(60, 'd67Bm7i1o638AqBcgdxanhAp0s0jkwjAqvvcengzhpso', 'kk', '7573427632', 8973711899, 0, '2022-03-24 18:33:16'),
(61, '9u29piA', 'hello', '7540012334', 8633759169, 0, '2022-04-09 12:17:47');

-- --------------------------------------------------------

--
-- Table structure for table `rank`
--

CREATE TABLE `rank` (
  `ID` int(11) NOT NULL,
  `LEVEL` varchar(60) NOT NULL,
  `GENE` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rank`
--

INSERT INTO `rank` (`ID`, `LEVEL`, `GENE`) VALUES
(1, 'Academic secretary', 'Specific'),
(2, 'Academic', 'Specific'),
(3, 'Special interest', 'General');

-- --------------------------------------------------------

--
-- Table structure for table `set_time`
--

CREATE TABLE `set_time` (
  `ID` int(11) NOT NULL,
  `START` datetime NOT NULL,
  `END` datetime NOT NULL,
  `VOTE_ALLOW` int(2) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `set_time`
--

INSERT INTO `set_time` (`ID`, `START`, `END`, `VOTE_ALLOW`) VALUES
(1, '2022-04-09 12:06:00', '2022-04-09 12:10:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user_details`
--

CREATE TABLE `user_details` (
  `ID` int(11) NOT NULL,
  `USER_ID` varchar(60) NOT NULL,
  `USERNAME` varchar(60) NOT NULL,
  `NAME` varchar(60) NOT NULL,
  `EMAIL` varchar(60) NOT NULL,
  `REG_NO` varchar(10) NOT NULL,
  `PASSWORD` varchar(10) NOT NULL,
  `COURSE` varchar(60) NOT NULL,
  `GENDER` varchar(8) NOT NULL,
  `SCHOOL` varchar(60) NOT NULL,
  `TIME_CREATED` datetime NOT NULL,
  `RANK` varchar(60) DEFAULT NULL,
  `T_VOTES` bigint(20) NOT NULL DEFAULT 0,
  `VOTE_STATUS` int(11) NOT NULL DEFAULT 0,
  `IMAGE` varchar(30) DEFAULT NULL,
  `STATUS` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_details`
--

INSERT INTO `user_details` (`ID`, `USER_ID`, `USERNAME`, `NAME`, `EMAIL`, `REG_NO`, `PASSWORD`, `COURSE`, `GENDER`, `SCHOOL`, `TIME_CREATED`, `RANK`, `T_VOTES`, `VOTE_STATUS`, `IMAGE`, `STATUS`) VALUES
(32, '8973711899', 'bob', 'Mike Bob', 'bob@kca.ac.ke', '12/04579', '1234', 'Bachelor of Science in Applied Computing', 'Male', 'School of Technology', '2022-02-20 13:49:00', NULL, 0, 0, 'uploads/2019-08-20-08-58-11-05', 0),
(34, '9544374506', 'mueni', 'Veronica Mueni', 'mueni@gmail.com', '22/00011', '1234', 'Bachelor of Public Management', 'Male', 'School of Business', '2022-02-28 09:26:29', NULL, 0, 0, NULL, 0),
(35, '8633759169', 'milka', 'Milka Muleli', 'muleli@gmail.com', '14/04189', '1234', 'Bachelor of Commerce', 'Female', 'School of Business', '2022-03-12 15:47:48', NULL, 0, 0, NULL, 0),
(90, '4239513101', 'mbithe', 'irene mbithe', 'mbithe@gmail.com', '22/00100', '1234', 'Bachelor of Commerce', 'Female', 'School of Business', '2022-03-12 16:15:09', NULL, 0, 0, NULL, 0),
(93, '3255798547', 'mbith', 'irene mbith', 'mbith@gmail.com', '22/00100', '1234', 'Bachelor of Commerce', 'Female', 'School of Business', '2022-03-12 16:16:11', NULL, 0, 0, NULL, 0),
(97, '1147214622', 'mutuku', 'Steve Mutukua', 'mutuku@gmail.com', '18/05285', '1234', 'Bachelor of Science in Software Development', 'Male', 'School of Technology', '2022-03-12 16:19:23', NULL, 0, 0, NULL, 0),
(100, '7679189138', 'michael', 'Michael Ngumbau', 'ngumbau@gmail.com', '17/07432', '1234', 'Bachelor of Arts in Journalism and Digital Media', 'Female', 'School of Education', '2022-03-12 16:28:12', NULL, 0, 0, NULL, 0),
(104, '8519614276', 'joyce', 'Joyce Dennis', 'joyce@gmail.co', '19/03789', '1234', 'Bachelor of Education Arts', 'Female', 'School of Education', '2022-03-12 16:40:38', NULL, 0, 1, NULL, 0),
(106, '7540012334', 'example', 'John Maina', 'maina@kca.ac.ke', '13/04789', '1234', 'Bachelor of Commerce', 'Male', 'School of Business', '2022-03-12 16:51:31', 'Academic secretary', 0, 1, NULL, 1),
(119, '0653809192', 'roman', 'Roman Musambi', 'raman@gmail.com', '22/06666', '1234', 'Bachelor of Arts in Criminology', 'Male', 'School of Education', '2022-03-13 08:17:24', NULL, 0, 0, NULL, 0),
(120, '1277690404', 'maina', 'MAIN', 'JJJ@GMAIL', '12/067123', '1234', 'Bachelor of Business Information Technology', 'Male', 'School of Technology', '2022-03-25 10:05:23', NULL, 0, 0, NULL, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `rank`
--
ALTER TABLE `rank`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `set_time`
--
ALTER TABLE `set_time`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `user_details`
--
ALTER TABLE `user_details`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `EMAIL` (`EMAIL`),
  ADD UNIQUE KEY `NAME` (`NAME`),
  ADD UNIQUE KEY `TIME_CREATED` (`TIME_CREATED`),
  ADD KEY `REG_NO` (`REG_NO`),
  ADD KEY `SCHOOL` (`SCHOOL`),
  ADD KEY `GENDER` (`GENDER`),
  ADD KEY `COURSE` (`COURSE`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `rank`
--
ALTER TABLE `rank`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `set_time`
--
ALTER TABLE `set_time`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user_details`
--
ALTER TABLE `user_details`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=121;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
