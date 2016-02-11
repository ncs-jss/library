-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 10, 2016 at 08:00 PM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `library_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL,
  `UserName` varchar(30) COLLATE utf8_bin NOT NULL,
  `Password` varchar(20) COLLATE utf8_bin NOT NULL,
  `flag` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `UserName`, `Password`, `flag`) VALUES
(1, 'admin@library', 'library_10_14', 1);

-- --------------------------------------------------------

--
-- Table structure for table `arrivals`
--

CREATE TABLE IF NOT EXISTS `arrivals` (
  `id` int(11) NOT NULL,
  `title` varchar(100) COLLATE utf8_bin NOT NULL,
  `details` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `date_of_arrival` date NOT NULL,
  `flag` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `arrivals`
--

INSERT INTO `arrivals` (`id`, `title`, `details`, `date_of_arrival`, `flag`) VALUES
(1, 'nkfnmff', 'dkjdkdld', '2015-02-15', 1),
(2, 'ngjhj', 'jjhjhj', '2015-02-16', 1),
(3, 'njgj', 'jjhjh', '2015-02-16', 1),
(4, 'nhjj', 'nhj', '2015-02-16', 1),
(5, 'mdhdjhnd', 'mhjhjh', '2015-02-16', 1),
(6, 'jhjhj', 'khjhj', '2015-02-16', 1),
(7, 'khjh', 'jhjhj', '2015-02-16', 1),
(8, 'jhj', 'fdgf', '2015-02-16', 1),
(9, 'college', 'will be closed', '2015-02-18', 1),
(10, 'hello', 'world', '2015-08-27', 1);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `id` int(11) NOT NULL,
  `news` varchar(100) COLLATE utf8_bin NOT NULL,
  `details` text COLLATE utf8_bin,
  `date_posted` date NOT NULL,
  `flag` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `news`, `details`, `date_posted`, `flag`) VALUES
(1, 'dkdkjd', 'mdnjdnnd', '2015-02-15', 1),
(3, 'mjhjhj', 'kjkjkjk', '2015-02-16', 1),
(4, 'mjhjhkj', 'kjkjkj', '2015-02-16', 1),
(5, 'kjjhj', 'hkkj', '2015-02-16', 1),
(6, 'mj', 'hj', '2015-02-16', 1),
(7, 'jghgj', 'jgj', '2015-02-16', 1),
(8, 'egosjegs', 'bdp', '0000-00-00', 1),
(9, 'fffff', 'sfafas', '0000-00-00', 1),
(10, 'hello ', 'world', '2015-08-27', 1);

-- --------------------------------------------------------

--
-- Table structure for table `notices`
--

CREATE TABLE IF NOT EXISTS `notices` (
  `id` int(25) NOT NULL,
  `title` varchar(500) COLLATE utf8_bin NOT NULL COMMENT 'Title Of Notice',
  `description` text COLLATE utf8_bin,
  `date_added` date NOT NULL,
  `flag` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `notices`
--

INSERT INTO `notices` (`id`, `title`, `description`, `date_added`, `flag`) VALUES
(7, 'ldkld', NULL, '2012-04-24', 1),
(9, 'ajlsjlldeljd', NULL, '2012-03-04', 1),
(10, 'fhkflf', NULL, '2012-04-24', 1),
(15, 'khk', NULL, '2012-03-04', 1),
(17, 'mhjhj', 'uhjhjhj', '2016-02-15', 1),
(18, 'jhjhh', 'jhjhjh', '2016-02-15', 1),
(19, 'nbnh', 'jhjhjhj', '2016-02-15', 1),
(20, 'jhjh', 'jgjg', '2016-02-15', 1),
(21, 'dkjdkdj', 'kdfkdjdk', '2016-02-15', 1),
(22, 'rrrr', 'tytyty', '0000-00-00', 1),
(23, 'gfg', 'ggg', '2018-02-15', 1),
(24, 'hello', 'world', '2015-08-27', 1);

-- --------------------------------------------------------

--
-- Table structure for table `papers`
--

CREATE TABLE IF NOT EXISTS `papers` (
  `file_name` varchar(50) NOT NULL,
  `course` varchar(50) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `year` varchar(10) NOT NULL,
  `branch` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `query`
--

CREATE TABLE IF NOT EXISTS `query` (
  `id` int(11) NOT NULL,
  `name` varchar(80) COLLATE utf8_bin NOT NULL,
  `email` varchar(80) COLLATE utf8_bin NOT NULL,
  `college` varchar(100) COLLATE utf8_bin NOT NULL,
  `rollno` varchar(50) COLLATE utf8_bin NOT NULL,
  `course` varchar(60) COLLATE utf8_bin NOT NULL,
  `branch` varchar(60) COLLATE utf8_bin NOT NULL,
  `message` varchar(100) COLLATE utf8_bin NOT NULL,
  `date_posted` date NOT NULL,
  `flag` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `query`
--

INSERT INTO `query` (`id`, `name`, `email`, `college`, `rollno`, `course`, `branch`, `message`, `date_posted`, `flag`) VALUES
(1, 'ddd', 'ne@f.c', 'JSS', '12112', 'btech', 'CSE', '', '0000-00-00', 1),
(2, 'nelabh', 'dgsdgds@gmail.com', 'JSS', '1309110061', 'btech', 'CSE', 'hello friends', '0000-00-00', 1),
(3, 'nelabh', 'gdbgfd@g.g', 'JSS', '1212121212', 'btech', 'CSE', 'hello', '0000-00-00', 1),
(4, ':nam', ':eml', ':clg', ':roll', ':crs', ':brch', ':msg', '2015-08-27', 1),
(5, 'mhgmhg', 'peeyushkotia@gmail.com', 'JSS', '1309110061', 'btech', 'CSE', 'bfxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxbbbbbbbbbbbbbbbbbbbbbbbb', '2015-08-27', 1);

-- --------------------------------------------------------

--
-- Table structure for table `suggest`
--

CREATE TABLE IF NOT EXISTS `suggest` (
  `id` int(11) NOT NULL,
  `bookname` varchar(80) COLLATE utf8_bin NOT NULL,
  `author` varchar(80) COLLATE utf8_bin NOT NULL,
  `publisher` varchar(100) COLLATE utf8_bin NOT NULL,
  `edition` varchar(40) COLLATE utf8_bin NOT NULL,
  `volume` varchar(40) COLLATE utf8_bin NOT NULL,
  `review` varchar(80) COLLATE utf8_bin NOT NULL,
  `date_posted` date NOT NULL,
  `flag` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `suggest`
--

INSERT INTO `suggest` (`id`, `bookname`, `author`, `publisher`, `edition`, `volume`, `review`, `date_posted`, `flag`) VALUES
(1, 'dfd', '', '', '', '', '', '0000-00-00', 1),
(2, 'bee', 'buy', 'nn', '55', 'ttt', '', '0000-00-00', 1),
(3, 'hello', 'hdgdghfhfh', 'jjjjjjjjjjjjjjjjjjjjjjjjjk', 'kkkkkkkkkkkkkkkkkkkkk', 'lllllllllllllllllllllllllllll', ';;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;;', '2015-08-27', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `arrivals`
--
ALTER TABLE `arrivals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notices`
--
ALTER TABLE `notices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `query`
--
ALTER TABLE `query`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `suggest`
--
ALTER TABLE `suggest`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `arrivals`
--
ALTER TABLE `arrivals`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `notices`
--
ALTER TABLE `notices`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `query`
--
ALTER TABLE `query`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `suggest`
--
ALTER TABLE `suggest`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
