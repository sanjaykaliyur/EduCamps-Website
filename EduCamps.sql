-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 14, 2017 at 07:15 AM
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
-- Table structure for table `children`
--

CREATE TABLE `children` (
  `username` varchar(45) NOT NULL,
  `childName` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `children`
--

INSERT INTO `children` (`username`, `childName`) VALUES
('neil', 'Caleb'),
('neil', 'Clark'),
('neil', 'Jordan'),
('neil', 'Kevin'),
('neil', 'Kobe'),
('neil', 'Michael'),
('neil', 'Parker'),
('neil', 'Thomas'),
('neil', 'Tony'),
('neil2', 'a'),
('neil2', 'b'),
('neil2', 'c'),
('neil2', 'd'),
('neil2', 'e');

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
(1, 'Introduction to Web Programming', 499, 45, 'webprog.png', 'This camp covers basic HTML, CSS, and Javascript.', '8 wks. long (June 19, 2017 - August 18, 2017)'),
(2, 'Introduction to Python', 499, 49, 'python.png', 'This camp covers all the basic elements of Python.\r\n\r\n', '8 wks. long (June 19, 2017 - August 18, 2017)'),
(3, 'Introduction to Java', 499, 50, 'java.png', 'This camp covers all the basic elements of Java.', '8 wks. long (June 19, 2017 - August 18, 2017)'),
(4, 'Introduction to Robotics', 699, 50, 'robot.png', 'This introductory robotics camp teaching students everything needed to know on basic robotics.', '8 wks. long (June 19, 2017 - August 18, 2017)'),
(5, 'Electrical Engineering: Circuits', 699, 50, 'circuits.png', 'This introductory to EE in circuits is all about circuitry and perfecting the art of basic circuits!', '8 wks. long (June 19, 2017 - August 18, 2017)'),
(6, 'Electrical Engineering: Logic Design', 699, 50, 'logic.png', 'What is logic? Binary number systems, Latches, flip flops, AND gates, OR gates, inverters etc. ', '8 wks. long (June 19, 2017 - August 18, 2017)'),
(7, 'Basketball', 499, 50, 'basketball.png', 'Never played basketball? No problem. All age groups and experience levels welcome', '8 wks. long (June 19, 2017 - August 18, 2017)'),
(8, 'Football', 499, 50, 'football.png', 'Never played Football? No problem. All age groups and experience levels welcome', '8 wks. long (June 19, 2017 - August 18, 2017)'),
(9, 'Swimming', 499, 50, 'swimming.png', 'Never learned swimming? No problem. All age groups and experience levels welcome', '8 wks. long (June 19, 2017 - August 18, 2017)');

-- --------------------------------------------------------

--
-- Table structure for table `courseTemp`
--

CREATE TABLE `courseTemp` (
  `user` varchar(45) NOT NULL,
  `courseID` int(10) NOT NULL,
  `courseName` varchar(45) NOT NULL,
  `courseDuration` varchar(45) NOT NULL,
  `courseCost` int(10) DEFAULT NULL,
  `courseDate` varchar(45) NOT NULL,
  `childName` varchar(45) NOT NULL,
  `location` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `courseTemp`
--

INSERT INTO `courseTemp` (`user`, `courseID`, `courseName`, `courseDuration`, `courseCost`, `courseDate`, `childName`, `location`) VALUES
('neil', 3, 'Introduction to Java', '1 week', 499, '07/10/17 - 07/17/17', 'Thomas', 'Boston, MA'),
('neil', 1, 'Introduction to Web Programming', '1 week', 499, '06/26/17 - 07/03/17', 'Clark', 'Los Angeles, CA'),
('neil', 1, 'Introduction to Web Programming', '2 weeks', 998, '07/17/17 - 07/31/17', 'Jordan', 'Austin, TX'),
('neil', 1, 'Introduction to Web Programming', '2 weeks', 998, '06/19/17 - 07/03/17', 'Michael', 'Boulder, CO');

-- --------------------------------------------------------

--
-- Table structure for table `FORUM`
--

CREATE TABLE `FORUM` (
  `Username` varchar(45) NOT NULL,
  `entryDate` date NOT NULL,
  `response` text NOT NULL,
  `campName` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `FORUM`
--

INSERT INTO `FORUM` (`Username`, `entryDate`, `response`, `campName`) VALUES
('neil', '2017-03-14', 'Just signed up Caleb and Clark for this camp!\r\nThey are stoked as they loved it last year!', 'Introduction to Web Programming');

-- --------------------------------------------------------

--
-- Table structure for table `userPics`
--

CREATE TABLE `userPics` (
  `Username` varchar(45) DEFAULT NULL,
  `image` varchar(135) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userPics`
--

INSERT INTO `userPics` (`Username`, `image`) VALUES
('neil', './Images/Uploads/1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `Email` varchar(45) NOT NULL,
  `Username` varchar(45) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Address` varchar(255) DEFAULT NULL,
  `courses_cart` varchar(45) DEFAULT NULL,
  `items_cart` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`Email`, `Username`, `Password`, `Address`, `courses_cart`, `items_cart`) VALUES
('neil@gmail.com', 'neil', '$2a$15$AognyjTjCORj3hgykJ0yr.PO57i7BXuYl1V3S5lNgloIlbZ7nmzVO', '1000 Laura Ville Lane', '1113', '1'),
('neilprabhu@gmail.com', 'neil2', '$2a$15$VQ9GScUd5CKFNx54C.9nGuBWkTuA9RRyI0aZhs.N/fuZskuNqFdly', '1000 Laura Ville Lane, San Jose, California 95125 ', '', ''),
('dasdada', 'Sanjay', '$2a$15$1joUjxQZXGfja/Q0zx4JYuqgRNbGcjvxl54H6I8yTieutWrDB9w4u', '1000 China Gate', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `USER_CAMPS`
--

CREATE TABLE `USER_CAMPS` (
  `Username` varchar(45) NOT NULL,
  `Camp` varchar(255) NOT NULL,
  `Price` double NOT NULL,
  `duration` varchar(45) DEFAULT NULL,
  `date` varchar(45) NOT NULL,
  `childName` varchar(45) NOT NULL,
  `location` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `USER_CAMPS`
--

INSERT INTO `USER_CAMPS` (`Username`, `Camp`, `Price`, `duration`, `date`, `childName`, `location`) VALUES
('neil', 'Introduction to Web Programming', 499, '1 week', '06/19/17 - 06/26/17', 'Caleb', 'San Jose, CA'),
('neil', 'Introduction to Web Programming', 499, '1 week', '06/19/17 - 06/26/17', 'Clark', 'San Jose, CA'),
('neil', 'Introduction to Web Programming', 998, '2 weeks', '06/19/17 - 07/03/17', 'Caleb', 'Santa Clara, CA'),
('neil', 'Introduction to Web Programming', 499, '1 week', '07/03/17 - 07/10/17', 'Clark', 'Los Angeles, CA'),
('neil2', 'Introduction to Python', 499, '1 week', '06/26/17 - 07/03/17', 'a', 'Santa Clara, CA'),
('neil2', 'Introduction to Web Programming', 499, '1 week', '06/19/17 - 06/26/17', 'a', 'Los Angeles, CA');

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
-- Indexes for dumped tables
--

--
-- Indexes for table `children`
--
ALTER TABLE `children`
  ADD PRIMARY KEY (`username`,`childName`);

--
-- Indexes for table `courseTemp`
--
ALTER TABLE `courseTemp`
  ADD PRIMARY KEY (`user`,`courseName`,`childName`);

--
-- Indexes for table `FORUM`
--
ALTER TABLE `FORUM`
  ADD PRIMARY KEY (`Username`,`campName`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD UNIQUE KEY `Username` (`Username`);

--
-- Indexes for table `USER_CAMPS`
--
ALTER TABLE `USER_CAMPS`
  ADD PRIMARY KEY (`Username`,`Camp`,`date`,`childName`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
