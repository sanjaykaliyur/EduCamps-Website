-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 10, 2017 at 06:22 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `EduCamps`
--

-- --------------------------------------------------------

--
-- Table structure for table `CATALOG`
--

CREATE TABLE `CATALOG` (
  `item_ID` varchar(45) DEFAULT NULL,
  `item_name` varchar(100) DEFAULT NULL,
  `item_cost` double DEFAULT NULL,
  `item_desc` text,
  `image` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `CATALOG`
--

INSERT INTO `CATALOG` (`item_ID`, `item_name`, `item_cost`, `item_desc`, `image`) VALUES
('1', 'Hoodie', 40, 'High quality hoodie. Featuring our magical size adaptable cotton designed by our expert camp leaders. One size fits all.', '/Images/Catalog/hoodieEDU.png'),
('2', 'T-shirt', 20, 'High quality T-shirt. Featuring our magical size-adaptible cotton designed by our expert camp leaders. One size fits all.', '/Images/Catalog/shirtsEDU.png'),
('3', 'Beanie', 20, 'Crafted with technologically advanced wool taken from in-house cloned sheep.', '/Images/Catalog/beanieEDU.png'),
('4', 'Hat', 30, 'Crafted with technology re-sizing to your head and with advanced wool taken from in-house cloned sheep.', '/Images/Catalog/hatEDU.png'),
('5', 'Water Bottle', 10, 'Sporty water bottle recommended for campers signing up for outdoor activities etc.', '/Images/Catalog/waterbottleEDU.png'),
('6', 'Aerobic Ball', 40, 'Large balance ball promotes strength, agility, and balance. Made of high-quality rubber for durability.', '/Images/Catalog/ballEDU.png'),
('7', 'Notebook', 30, 'Valuable notebooks and notepads. For those signing up for complex academic courses, this item will be a must-buy.', '/Images/Catalog/booksEDU.png'),
('8', 'Backpack', 30, 'Unique EduCamps backpack only on sale for a limited time. Get yours now!', '/Images/Catalog/backpackEDU.png');

-- --------------------------------------------------------

--
-- Table structure for table `COURSES`
--

CREATE TABLE `COURSES` (
  `course_ID` int(3) NOT NULL,
  `course_name` varchar(100) NOT NULL,
  `cost` int(10) NOT NULL,
  `spots` int(2) DEFAULT NULL,
  `image` varchar(90) DEFAULT NULL,
  `description` text,
  `date` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `COURSES`
--

INSERT INTO `COURSES` (`course_ID`, `course_name`, `cost`, `spots`, `image`, `description`, `date`) VALUES
(1, 'Introduction to Web Programming', 499, 49, '', 'This camp covers basic HTML, CSS, and Javascript.', '8 wks. long (June 19, 2017 - August 18, 2017)'),
(2, 'Intro to Python', 499, 50, '', 'This camp covers all the basic elements of Python.\r\n\r\n', '8 wks. long (June 19, 2017 - August 18, 2017)'),
(3, 'Introduction to Java', 499, 50, '', 'This camp covers all the basic elements of Java.', '8 wks. long (June 19, 2017 - August 18, 2017)'),
(4, 'Physics', 699, 50, '', 'This introductory physics camp covers all the basics of Mechanics and includes laboratory work. Safety equipment included in price.', '8 wks. long (June 19, 2017 - August 18, 2017)'),
(5, 'Chemistry', 699, 50, '', 'This introductory chemistry camp covers all the basics of chemistry and includes laboratory work. Safety equipment included in price.', '8 wks. long (June 19, 2017 - August 18, 2017)'),
(6, 'Biology', 699, 50, '', 'This introductory biology camp covers all the basics of the biological world and includes laboratory work. Safety equipment included in price.', '8 wks. long (June 19, 2017 - August 18, 2017)'),
(7, 'Geometry', 499, 50, '', 'This introductory geometry camp covers all the material covered in high school geometry courses.', '8 wks. long (June 19, 2017 - August 18, 2017)'),
(8, 'Algebra', 499, 50, '', 'This introductory algebra camp covers all the material covered in high school Algebra 1 and Algebra 2 courses.', '8 wks. long (June 19, 2017 - August 18, 2017)'),
(9, 'Calculus', 499, 50, '', 'This introductory calculus camp covers all the material covered in a standard high school Calculus AB course.', '8 wks. long (June 19, 2017 - August 18, 2017)');

-- --------------------------------------------------------

--
-- Table structure for table `courseTemp`
--

CREATE TABLE `courseTemp` (
  `user` varchar(45) NOT NULL,
  `courseID` int(10) NOT NULL,
  `courseName` varchar(45) DEFAULT NULL,
  `courseDuration` varchar(45) NOT NULL,
  `courseCost` int(10) DEFAULT NULL,
  `courseDate` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `FORUM`
--

CREATE TABLE `FORUM` (
  `Username` varchar(45) DEFAULT NULL,
  `entryDate` date NOT NULL,
  `response` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `USERS`
--

CREATE TABLE `USERS` (
  `Email` varchar(45) NOT NULL,
  `Username` varchar(45) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Address` varchar(255) DEFAULT NULL,
  `courses_cart` varchar(45) DEFAULT NULL,
  `items_cart` varchar(45) DEFAULT NULL,
  `childName` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `USERS`
--

INSERT INTO `USERS` (`Email`, `Username`, `Password`, `Address`, `courses_cart`, `items_cart`, `childName`) VALUES
('dasdada', 'neil', '$2a$15$vlLqqJKz6NHT/rz2SdoWdOkE8oGnBe7pZi5gaDA4ubcKlKT7vpera', '', '', '', 'jose'),
('josemail.com', 'Sanjay', '$2a$15$1joUjxQZXGfja/Q0zx4JYuqgRNbGcjvxl54H6I8yTieutWrDB9w4u', '1000China Gate', '', '', 'sanjays kid');

-- --------------------------------------------------------

--
-- Table structure for table `USER_CAMPS`
--

CREATE TABLE `USER_CAMPS` (
  `Username` varchar(45) NOT NULL,
  `Camp` varchar(255) NOT NULL,
  `Price` double NOT NULL,
  `duration` varchar(45) DEFAULT NULL,
  `date` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `USER_CAMPS`
--

INSERT INTO `USER_CAMPS` (`Username`, `Camp`, `Price`, `duration`, `date`) VALUES
('sanjay', 'Introduction to Web Programming', 499, '1 week', '07/03/17 - 07/10/17');

-- --------------------------------------------------------

--
-- Table structure for table `USER_ITEMS`
--

CREATE TABLE `USER_ITEMS` (
  `Username` varchar(45) NOT NULL,
  `item` varchar(255) NOT NULL,
  `Price` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `USER_ITEMS`
--

INSERT INTO `USER_ITEMS` (`Username`, `item`, `Price`) VALUES
('sanjay', 'Backpack', 30);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `courseTemp`
--
ALTER TABLE `courseTemp`
  ADD PRIMARY KEY (`user`,`courseID`,`courseDate`);

--
-- Indexes for table `USERS`
--
ALTER TABLE `USERS`
  ADD UNIQUE KEY `Username` (`Username`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
