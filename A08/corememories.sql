-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 08, 2024 at 05:12 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `corememories`
--

-- --------------------------------------------------------

--
-- Table structure for table `islandcontents`
--

CREATE TABLE `islandcontents` (
  `islandContentID` int(4) NOT NULL,
  `islandOfPersonalityID` int(4) NOT NULL,
  `image` varchar(50) DEFAULT NULL,
  `content` varchar(300) NOT NULL,
  `title` varchar(100) NOT NULL,
  `color` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `islandcontents`
--

INSERT INTO `islandcontents` (`islandContentID`, `islandOfPersonalityID`, `image`, `content`, `title`, `color`) VALUES
(1, 1, 'F001.jpg', 'A feast during christmas and we are complete.', 'Christmas Celebration', NULL),
(2, 1, 'F002.jpg', 'First time attending mass as a whole family.', 'Attending Mass', NULL),
(3, 1, 'F003.jpg', 'Celebration of homecoming of my tita.', 'Homecoming Celebration', NULL),
(4, 2, 'FR001.jpg', 'We are complete after not seeing them after jhs.', 'JHS friends', NULL),
(5, 2, 'FR002.jpg', 'First time meeting them since this is during pandemic.', 'SHS friends', NULL),
(6, 2, 'FR003.jpg', 'This was after the eruption of taal and i decided to meet them.', 'Seasonal friends', NULL),
(7, 3, 'L001.jpg', 'First Enchanted Kingdom together with my bf.', 'Enchanted Kingdom', NULL),
(8, 3, 'L002.jpg', 'Gossips happened after hectic years of not seeing each other.', 'Catch up', NULL),
(9, 3, 'L003.jpg', 'First time recieving this kind of flowers and it is our 1st anniv.', 'Flowers', NULL),
(10, 4, 'P001.jpg', 'Yumi\'s first overnight in my bed.', 'Overnight', NULL),
(11, 4, 'P002.jpg', 'Last late night walk with my protector.', 'Night walk', NULL),
(12, 4, 'P003.jpg', 'Little bear\'s first day at our house.', 'First day', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `islandsofpersonality`
--

CREATE TABLE `islandsofpersonality` (
  `islandOfPersonalityID` int(4) NOT NULL,
  `name` varchar(40) NOT NULL,
  `shortDescription` varchar(300) DEFAULT NULL,
  `longDescription` varchar(900) DEFAULT NULL,
  `color` varchar(10) DEFAULT NULL,
  `imageCategory` varchar(50) DEFAULT NULL,
  `status` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `islandsofpersonality`
--

INSERT INTO `islandsofpersonality` (`islandOfPersonalityID`, `name`, `shortDescription`, `longDescription`, `color`, `imageCategory`, `status`) VALUES
(1, 'Family', 'Where love, support, and connection thrive, creating unbreakable bonds.', NULL, '#A8E6A1', 'family.jpg', NULL),
(2, 'Friends', 'Companions who bring joy, laughter, and unforgettable memories.', NULL, '#B0E0E6', 'friends.jpg', NULL),
(3, 'Love', 'A force that binds hearts and transcends all boundaries.', NULL, '#FADADD', 'love.jpg', NULL),
(4, 'Pets', 'Loyal companions who offer unconditional love and happiness.', NULL, '#FFEB8C', 'pet.jpg', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `islandcontents`
--
ALTER TABLE `islandcontents`
  ADD PRIMARY KEY (`islandContentID`);

--
-- Indexes for table `islandsofpersonality`
--
ALTER TABLE `islandsofpersonality`
  ADD PRIMARY KEY (`islandOfPersonalityID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `islandcontents`
--
ALTER TABLE `islandcontents`
  MODIFY `islandContentID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `islandsofpersonality`
--
ALTER TABLE `islandsofpersonality`
  MODIFY `islandOfPersonalityID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
