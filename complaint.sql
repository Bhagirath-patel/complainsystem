-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 02, 2016 at 07:26 AM
-- Server version: 5.5.27-log
-- PHP Version: 5.4.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `complaint`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `admin` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin`, `pass`) VALUES
('op@gmail.com', '9785');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE IF NOT EXISTS `department` (
  `dname` varchar(255) NOT NULL,
  `did` varchar(255) NOT NULL,
  `hodname` varchar(255) NOT NULL,
  `ofemail` varchar(255) NOT NULL,
  `phno` varchar(20) NOT NULL,
  `time1` varchar(50) NOT NULL,
  `time2` varchar(50) NOT NULL,
  `nf` varchar(20) NOT NULL,
  `fn` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`dname`, `did`, `hodname`, `ofemail`, `phno`, `time1`, `time2`, `nf`, `fn`) VALUES
('Computer Science and Engineering', 'cse', 'Manoj Kuri', 'manoj@kuri.com', '12345', '11:00', '17:00', '20', 'adlkfdfd,dfdsfdsf,dfsdfs');

-- --------------------------------------------------------

--
-- Table structure for table `hod`
--

CREATE TABLE IF NOT EXISTS `hod` (
  `hodname` varchar(255) NOT NULL,
  `departname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `education` varchar(255) NOT NULL,
  `password` varchar(50) NOT NULL,
  `address` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hod`
--

INSERT INTO `hod` (`hodname`, `departname`, `email`, `phone`, `education`, `password`, `address`) VALUES
('Manoj Kuri', 'Computer Science and Engineering', 'manoj@kuri.com', '12345', 'M.tech IIT Delhi', '123', 'Bikaner');

-- --------------------------------------------------------

--
-- Table structure for table `sendcomplaint`
--

CREATE TABLE IF NOT EXISTS `sendcomplaint` (
  `depart` varchar(255) NOT NULL,
  `to` varchar(255) NOT NULL,
  `from` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `msg` varchar(2000) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sendcomplaint`
--

INSERT INTO `sendcomplaint` (`depart`, `to`, `from`, `subject`, `msg`, `status`) VALUES
('Computer Science and Engineering', 'Manoj Kuri', 'ops@gmail.com', 'Wi Fi Speed Problem', 'sdkhflhnflkds\r\ndfgds,mfgndm\r\ndfgdfgn,dsms', 'new');

-- --------------------------------------------------------

--
-- Table structure for table `studprofile`
--

CREATE TABLE IF NOT EXISTS `studprofile` (
  `sname` varchar(255) NOT NULL,
  `branch` varchar(255) NOT NULL,
  `course` varchar(255) NOT NULL,
  `year` varchar(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `address` varchar(500) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `studprofile`
--

INSERT INTO `studprofile` (`sname`, `branch`, `course`, `year`, `email`, `password`, `phone`, `address`, `status`) VALUES
('Omprakash saini', 'Computer Science and Engineering', 'btech', '4', 'ops@gmail.com', '9785', '9785975821', 'jahaz', 'activited'),
('Raju Saini', 'Mechanical Engineering', 'btech', '4', 'rajubhai@gmail.com', '414', '414', 'mumbai ka bhai', 'pending'),
('bhagi', 'Computer Science and Engineering', 'btech', '1', 'bhagi545@gmail.com', '12345', '123', 'Jodhpur', 'activited');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
