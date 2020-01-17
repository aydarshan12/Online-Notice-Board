-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 23, 2018 at 12:00 PM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `online_notice`
--
CREATE DATABASE IF NOT EXISTS `online_notice` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `online_notice`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `admin_id` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `nm` varchar(15) NOT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `user`, `pass`, `nm`) VALUES
(1, 'admin@gmail.com', '1234', 'rnsit');

-- --------------------------------------------------------

--
-- Table structure for table `notice`
--

CREATE TABLE IF NOT EXISTS `notice` (
  `notice_id` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(50) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `Description` text NOT NULL,
  `Date` datetime NOT NULL,
  PRIMARY KEY (`notice_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=127 ;

--
-- Dumping data for table `notice`
--

INSERT INTO `notice` (`notice_id`, `user`, `subject`, `Description`, `Date`) VALUES
(124, 'Student', 'exams on next friday', 'internals will be held from coming friday so prepare well for the exams\r\nall the best', '2018-05-13 23:39:32'),
(125, 'Teachers', 'open project', 'come at 8clock', '2018-05-14 13:15:01'),
(126, 'Student', 'lab internals', 'lab internals on monday', '2018-05-22 13:07:51');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` char(40) NOT NULL,
  `nm` varchar(20) NOT NULL,
  `status` varchar(10) NOT NULL,
  `email` varchar(40) NOT NULL,
  `pass` varchar(40) NOT NULL,
  `mobile` bigint(11) NOT NULL,
  `gender` varchar(40) NOT NULL,
  `image` varchar(50) NOT NULL,
  `dob` datetime NOT NULL,
  `valid` varchar(10) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=32 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `nm`, `status`, `email`, `pass`, `mobile`, `gender`, `image`, `dob`, `valid`) VALUES
(14, 'sandeep', 'sandy', 'Student', 'sandeep@gmail.com', '1234', 1234567890, 'm', '29541717_10155860315473124_3087633592327182105_n.j', '1965-06-16 00:00:00', 'yes'),
(22, 'kashi', 'kashi', 'Student', 'kashi@gmail.com', '12345', 1234567890, 'm', '421471.jpg', '1994-09-14 00:00:00', 'yes'),
(23, 'sagar', 'sagar', 'Teachers', 'sagar@gmail.com', '11111', 9886452255, 'm', '31277539_10155920181093124_2623879303053443072_n.j', '1982-09-15 00:00:00', 'yes'),
(24, 'mallikarjun', 'mallu', 'Student', 'mallu@gmail.com', '12345', 9885642232, 'm', '31232126_10155920187328124_7386787988941832192_o.j', '1995-03-11 00:00:00', 'yes'),
(25, 'nagesh', 'nagu', 'Student', 'nagesh@gmail.com', 'nagesh', 8664589562, 'm', 'Capture.PNG', '1995-10-21 00:00:00', 'yes'),
(26, 'hemant', 'hemu', 'Teachers', 'hemant@gmail.com', 'hemant', 9884561235, 'm', '324604.jpg', '1984-12-10 00:00:00', 'no'),
(27, 'sanjay', 'sanju', 'Teachers', 'sanjay@gmail.com', 'sanjay', 8679458898, 'm', 'IMG_20161130_224604.jpg', '1981-06-15 00:00:00', 'no'),
(28, 'ravi', 'ravi', 'Student', 'ravi@gmail.com', 'ravi', 9995656525, 'm', 'Capture.PNG', '1969-01-02 00:00:00', 'no'),
(29, 'ramesh', 'ramesh', 'Student', 'ramesh@gmail.com', 'ramesh', 9887894561, 'm', 's.PNG', '1963-03-07 00:00:00', 'yes'),
(30, 'bassu', 'bassu', 'Student', 'bassu@gmail.com', 'vinay', 9989989898, 'm', '421471.jpg', '1968-03-05 00:00:00', 'yes'),
(31, 'abcd', 'abcd', 'Student', 'abcde@gmail.com', 'abcde', 9882448464, 'm', '8db0bf7e-10e6-47a6-a289-88ec863f9458.jpeg', '1959-09-17 00:00:00', 'yes');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
