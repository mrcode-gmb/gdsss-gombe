-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 01, 2002 at 09:03 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 5.6.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sstwo`
--

-- --------------------------------------------------------

--
-- Table structure for table `anouncement`
--

CREATE TABLE `anouncement` (
  `id` int(200) NOT NULL,
  `school_post` int(255) NOT NULL,
  `date_time` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `anouncement`
--

INSERT INTO `anouncement` (`id`, `school_post`, `date_time`) VALUES
(1, 0, 0),
(2, 0, 2022),
(3, 0, 2022);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(200) NOT NULL,
  `name` varchar(100) NOT NULL,
  `pnumber` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `name`, `pnumber`, `password`, `image`) VALUES
(6, '0', '08037858023', 'b59c67bf196a4758191e42f76670ceba', '4.png'),
(8, '0', '08037858023', '934b535800b1cba8f96a5d72f72f1611', 'ig.png'),
(11, '0', '5665565665', '6074c6aa3488f3c2dddff2a7ca821aab', 'menu.jpg.jpg'),
(12, '0', '09043744693', '81dc9bdb52d04dc20036dbd8313ed055', 'ig.png'),
(13, '0', '09123289398', '25f9e794323b453885f5181f1b624d0b', '47.jpg'),
(15, '0', '08130033655', '2be9bd7a3434f7038ca27d1918de58bd', 'menu.jpg.jpg'),
(20, '0', '08123456745', 'cf79ae6addba60ad018347359bd144d2', '4.png'),
(21, '0', '08123456745', '4a7d1ed414474e4033ac29ccb8653d9b', 'mrcode.png'),
(22, '0', '09011234355', '74b87337454200d4d33f80c4663dc5e5', 'logo.jpg'),
(23, '0', '080123456676', 'fa246d0262c3925617b0c72bb20eeb1d', 'st.png'),
(24, '0', '0903432321223', '02c425157ecd32f259548b33402ff6d3', 'FB_IMG_16670859858236974[1].jpg'),
(25, '0', '0903432321223', 'ea416ed0759d46a8de58f63a59077499', 'WMP69c1610c-2c07-43ea-8131-1d63d2de7e1b[1]..jpg'),
(26, '0', '07066719516', '8527cd4cbcb4ce37e2a9b964708282fc', 'FB_IMG_16670859858236974[1].jpg'),
(27, '0', '08012345678', 'b59c67bf196a4758191e42f76670ceba', '4.png'),
(28, '0', '009222222212', '88888', 'close.png.png'),
(29, '0', '08012333333', '934b535800b1cba8f96a5d72f72f1611', 'ig.png'),
(30, '0', '', '', ''),
(31, '0', '', '', ''),
(32, 'salim sani', '09000000000', '698d51a19d8a121ce581499d7b701668', 'bg.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `new_data`
--

CREATE TABLE `new_data` (
  `id` int(200) NOT NULL,
  `school_post` text NOT NULL,
  `date_time` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `new_data`
--

INSERT INTO `new_data` (`id`, `school_post`, `date_time`) VALUES
(1, 'To we Have A general Metting By 15:00AM Venue Exam Hold God Bless Of Any OneTo we Have A general Metting By 15:00AM Venue Exam Hold God Bless Of Any OneTo we Have A general Metting By 15:00AM Venue Exam Hold God Bless Of Any OneTo we Have A general Metting By 15:00AM Venue Exam Hold God Bless Of Any One', '2022-12-29'),
(2, 'To we Have A general Metting By 15:00AM Venue Exam Hold God Bless Of Any Onefdfrdvrsdvv wywifwefd wfhiwefhcqe dafchjewfc qeerfjcef qefqeqefc dfcqefc saddfycjheqf afceq aayj233qb auycqwwd afdyqwd /;;//qmjf\'eefcjkjf;', '2022-12-29'),
(3, 'List The Yearr School The website that the History of schools was funded in 1990  				List The Yearr School The website that the History of schools was funded in 1990  				List The Yearr School The website that the History of schools was funded in 1990  				List The Yearr School The website that the History of schools was funded in 1990  				List The Yearr School The website that the History of schools was funded in 1990  				List The Yearr School The website that the History of schools was funded in 1990  				List The Yearr School The website that the History of schools was funded in 1990  				List The Yearr School The website that the History of schools was funded in 1990  				List The Yearr School The website that the History of schools was funded in 1990  				List The Yearr School The website that the History of schools was funded in 1990  				List The Yearr School The website that the History of schools was funded in 1990  				List The Yearr School The website that the History of schools was funded in 1990  				List The Yearr School The website that the History of schools was funded in 1990  				List The Yearr School The website that the History of schools was funded in 1990  				List The Yearr School The website that the History of schools was funded in 1990  			</h6>', '2022-12-29'),
(4, 'kai malam karka bata mana lokaci kayi sauri kayi hosting', '2022-12-29'),
(5, 'To we Have A general Metting By 15:00AM Venue Exam Hold God Bless Of Any One,To we Have A general Metting By 15:00AM Venue Exam Hold God Bless Of Any One,To we Have A general Metting By 15:00AM Venue Exam Hold God Bless Of Any One,To we Have A general Metting By 15:00AM Venue Exam Hold God Bless Of Any One,To we Have A general Metting By 15:00AM Venue Exam Hold God Bless Of Any One.To we Have A general Metting By 15:00AM Venue Exam Hold God Bless Of Any One,To we Have A general Metting By 15:00AM Venue Exam Hold God Bless Of Any One,To we Have A general Metting By 15:00AM Venue Exam Hold God Bless Of Any One,To we Have A general Metting By 15:00AM Venue Exam Hold God Bless Of Any One,To we Have A general Metting By 15:00AM Venue Exam Hold God Bless Of Any One,To we Have A general Metting By 15:00AM Venue Exam Hold God Bless Of Any One,To we Have A general Metting By 15:00AM Venue Exam Hold God Bless Of Any One,To we Have A general Metting By 15:00AM Venue Exam Hold God Bless Of Any One', '2002-01-01'),
(6, 'To we Have A general Metting By 15:00AM Venue Exam Hold God Bless Of Any One,To we Have A general Metting By 15:00AM Venue Exam Hold God Bless Of Any One,To we Have A general Metting By 15:00AM Venue Exam Hold God Bless Of Any One,To we Have A general Metting By 15:00AM Venue Exam Hold God Bless Of Any One,To we Have A general Metting By 15:00AM Venue Exam Hold God Bless Of Any One.To we Have A general Metting By 15:00AM Venue Exam Hold God Bless Of Any One,To we Have A general Metting By 15:00AM Venue Exam Hold God Bless Of Any One,To we Have A general Metting By 15:00AM Venue Exam Hold God Bless Of Any One,To we Have A general Metting By 15:00AM Venue Exam Hold God Bless Obbbbbbbbbbbbbbbbbbbbbbbbf Any One,To we Have A general Metting By 15:00AM Venue Exam Hold God Bless Of Any One,To we Have A general Metting By 15:00AM Venue Exam Hold God Bless Of Any One,To we Have A general Metting By 15:00AM Venue Exam Hold God Bless Of Any One,To we Have A general Metting By 15:00AM Venue Exam Hold God Bless Of Any One', '2002-01-01');

-- --------------------------------------------------------

--
-- Table structure for table `new_table`
--

CREATE TABLE `new_table` (
  `s` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sstwo`
--

CREATE TABLE `sstwo` (
  `id` int(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `number` varchar(20) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `cpass` varchar(50) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `st_data`
--

CREATE TABLE `st_data` (
  `id` int(200) NOT NULL,
  `reg_number` varchar(50) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `surname` varchar(100) NOT NULL,
  `other_name` varchar(100) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `date_birth` varchar(20) NOT NULL,
  `year` varchar(20) NOT NULL,
  `sessions` varchar(50) NOT NULL,
  `term` varchar(50) NOT NULL,
  `classs` varchar(50) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `parent_gsm` varchar(50) NOT NULL,
  `nin_number` varchar(50) NOT NULL,
  `image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `st_data`
--

INSERT INTO `st_data` (`id`, `reg_number`, `first_name`, `surname`, `other_name`, `gender`, `date_birth`, `year`, `sessions`, `term`, `classs`, `mail`, `parent_gsm`, `nin_number`, `image`) VALUES
(36, '1234', 'Abubakar ', 'Umar', 'hhhh', 'Female', '2002-01-01', '2035', '2033/2034', 'First Term', 'SS 1A', 'hhhhhhhhhhhh@gmail.com', '777777777777', '77777777', '4.png'),
(39, '333322', 'Abubakar', 'Muktar', 'Umar', 'Female', '2002-01-01', '2033', '2023/2024', 'Second Term', 'SS 1F', 'naxiz@gmail.com', '22233333333333', '22222222222', '4.png'),
(40, '20233', 'Abubakars', 'Muktar', 'Umar', 'Female', '2023-02-08', '2031', '2025/2026', 'Second Term', 'SS 1G', 'naxiz@gmail.com', '08037858023', '44444444444444', '4.png');

-- --------------------------------------------------------

--
-- Table structure for table `text`
--

CREATE TABLE `text` (
  `id` int(100) NOT NULL,
  `school_post` varchar(254) NOT NULL,
  `date_time` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `text`
--

INSERT INTO `text` (`id`, `school_post`, `date_time`) VALUES
(1, 'Hello Guys How To Day', '2022-12-29'),
(2, 'Hello Guys How To Day hfhyuweyfqweiusfdc', '2022-12-29'),
(3, 'Helo hfhwefgvfwejfcyefhuwfefjiwegfef wf24yefc werfiygef eqef2f efciyifh fcqif', '2022-12-29'),
(4, 'To we Have A general Metting By 15:00AM Venue Exam Hold God Bless Of Any One', '2022-12-29'),
(5, 'To we Have A general Metting By 15:00AM Venue Exam Hold God Bless Of Any One,To we Have A general Metting By 15:00AM Venue Exam Hold God Bless Of Any One,To we Have A general Metting By 15:00AM Venue Exam Hold God Bless Of Any One,To we Have A general Me', '2022-12-29'),
(6, 'To we Have A general Metting By 15:00AM Venue Exam Hold God Bless Of Any One,To we Have A general Metting By 15:00AM Venue Exam Hold God Bless Of Any One,To we Have A general Metting By 15:00AM Venue Exam Hold God Bless Of Any One,To we Have A general Me', '2022-12-29');

-- --------------------------------------------------------

--
-- Table structure for table `update_st`
--

CREATE TABLE `update_st` (
  `id` int(200) NOT NULL,
  `name` varchar(100) NOT NULL,
  `pnumber` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `update_st`
--

INSERT INTO `update_st` (`id`, `name`, `pnumber`, `password`, `image`) VALUES
(10, 'Abubakar Ibrahim', '11221112', '22', '7.jpg'),
(16, 'Abba Muhammad Muktar', '434543435', '44', '4.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anouncement`
--
ALTER TABLE `anouncement`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `new_data`
--
ALTER TABLE `new_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sstwo`
--
ALTER TABLE `sstwo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `st_data`
--
ALTER TABLE `st_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `text`
--
ALTER TABLE `text`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `update_st`
--
ALTER TABLE `update_st`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `anouncement`
--
ALTER TABLE `anouncement`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `new_data`
--
ALTER TABLE `new_data`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `sstwo`
--
ALTER TABLE `sstwo`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `st_data`
--
ALTER TABLE `st_data`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `text`
--
ALTER TABLE `text`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `update_st`
--
ALTER TABLE `update_st`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
