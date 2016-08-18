-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 04, 1980 at 01:37 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `library`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE IF NOT EXISTS `account` (
  `NAME` varchar(20) DEFAULT NULL,
  `DATE_OF_BIRTH` int(10) NOT NULL,
  `DEPARTMENT` varchar(20) NOT NULL,
  `FACULTY` varchar(20) NOT NULL,
  `EMAIL` varchar(40) NOT NULL,
  `PASSWORD` varchar(20) NOT NULL,
  PRIMARY KEY (`PASSWORD`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`NAME`, `DATE_OF_BIRTH`, `DEPARTMENT`, `FACULTY`, `EMAIL`, `PASSWORD`) VALUES
('Muweh', 1995, 'computer', 'Engineering and Terc', 'm.anselmtan@gmail.com', 'grace'),
('kerlyn', 25, 'computer', 'FET', 'kerlynmanyi@gmail.com', 'kerlyn'),
('Grace', 24, 'Computer', 'FET', 'ruphinekengne@yahoo.com', 'scintiche');

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE IF NOT EXISTS `books` (
  `NAME` varchar(20) NOT NULL,
  `MANUFACTURER` varchar(20) NOT NULL,
  `BOOK_ID` int(5) NOT NULL,
  `COURSE_USED` varchar(20) NOT NULL,
  PRIMARY KEY (`BOOK_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`NAME`, `MANUFACTURER`, `BOOK_ID`, `COURSE_USED`) VALUES
('Linear_Algebra', 'Jim Clark', 311, 'Algebra'),
('Cytology', 'Thompson Kay', 434, 'Biology 2'),
('L''eau_Vive', 'Talla Andre', 506, 'French'),
('Calculus', 'Steward_Calculus', 2010, 'Analysis'),
('Digital_Circuit', 'Anil Maini', 2011, 'Boolean'),
('Digital_electronics', 'Anil Maini', 3010, 'Electronics 2'),
('Geography_Principles', 'Richard Stories', 3011, 'Intro_To_Geo'),
('Advanced_Physics', 'Nelkon James', 3015, 'Physics 1'),
('Biological_Science', 'Thompson Jones', 3016, 'Biology 2'),
('Ctutor', 'Jim Clark', 3090, 'c_programming');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE IF NOT EXISTS `course` (
  `COURSE_CODE` varchar(10) NOT NULL,
  `COURSE_TITLE` varchar(20) NOT NULL,
  `SEMESTER` int(1) NOT NULL,
  PRIMARY KEY (`COURSE_CODE`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`COURSE_CODE`, `COURSE_TITLE`, `SEMESTER`) VALUES
('bio 305', 'Biology 2', 1),
('bio 306', 'Biology 2', 2),
('cef 207', 'c_Programming', 1),
('cst 304', 'Boolean', 2),
('eef 206', 'Electronics 2', 2),
('fre 102', 'French', 2),
('geo 410', 'Intro_To_geo', 1),
('math 206', 'Algebra', 1),
('math 305', 'Analysis', 2),
('phy 204', 'Physics 1', 1);

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE IF NOT EXISTS `department` (
  `NAME` varchar(20) NOT NULL,
  `COURSE_CODE` varchar(10) NOT NULL,
  `FACULTY` varchar(10) NOT NULL,
  PRIMARY KEY (`COURSE_CODE`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`NAME`, `COURSE_CODE`, `FACULTY`) VALUES
('Biology', 'bio 305', 'SCIENCE'),
('Biology', 'bio 306', 'SCIENCE'),
('computer', 'cef 207', 'COT'),
('Computer_Science', 'cst 304', 'CPS'),
('Electrical', 'eef 206', 'FET'),
('French', 'fre102', 'ARTS'),
('Geography', 'geo 410', 'ARTS'),
('Mathematics', 'math 206', 'SCIENCE'),
('Mathematics', 'math 305', 'SCIENCE'),
('physics', 'phy 204', 'SCIENCE');

-- --------------------------------------------------------

--
-- Table structure for table `manufacturer`
--

CREATE TABLE IF NOT EXISTS `manufacturer` (
  `NAME` varchar(20) NOT NULL,
  `ID_NUMBER` int(7) NOT NULL,
  `COUNTRY` varchar(10) NOT NULL,
  `PHONE_NUMBER` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `manufacturer`
--

INSERT INTO `manufacturer` (`NAME`, `ID_NUMBER`, `COUNTRY`, `PHONE_NUMBER`) VALUES
('Anil Maini', 12350, 'Britain', 675734571),
('Richard Stories', 25560, 'Germany', 679887345),
('Steward Calculus', 25706, 'France', 699824344),
('Jim Clark', 26504, 'Canada', 694980847),
('Nelkon James', 27111, 'Britain', 674893120),
('Talla Andre', 28000, 'France', 654144082),
('Thompson Jones', 29060, 'America', 698857453),
('thompson kay', 29756, 'Swizerland', 671567890),
('FOUTE INES', 23456, 'SPAIN', 672345890),
('FOUTE INES', 56748, 'SPAIN', 654689653);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
