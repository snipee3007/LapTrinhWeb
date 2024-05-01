-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 01, 2024 at 07:15 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `products`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `ID_Comment` int(11) NOT NULL,
  `Context` varchar(1000) NOT NULL,
  `ID_Product` int(11) NOT NULL,
  `ID_Member` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `ID_Member` int(11) NOT NULL,
  `Name` int(11) NOT NULL,
  `Phone Number` varchar(20) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Account_Name` varchar(20) NOT NULL,
  `Account_Password` varchar(20) NOT NULL,
  `Image` varchar(100) NOT NULL,
  `Role` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `ID_News` int(11) NOT NULL COMMENT 'News'' ID',
  `Category` varchar(100) NOT NULL COMMENT 'News'' Category',
  `Title` varchar(100) NOT NULL COMMENT 'News'' Title',
  `Context` varchar(1000) NOT NULL COMMENT 'News'' Context',
  `Image` varchar(100) NOT NULL COMMENT 'News'' Image',
  `ID_Member` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `ID_Product` int(11) NOT NULL COMMENT 'Product''s ID',
  `Name` varchar(100) NOT NULL COMMENT 'Product''s Name',
  `Category` varchar(100) NOT NULL COMMENT 'Product''s Category',
  `Brand` varchar(100) NOT NULL COMMENT 'Product''s brand',
  `Price` int(11) NOT NULL COMMENT 'Product''s price',
  `Description` varchar(1000) NOT NULL COMMENT 'Product''s description',
  `Tags` varchar(1000) NOT NULL COMMENT 'Product''s components'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `products' images`
--

CREATE TABLE `products' images` (
  `ID_Product` int(11) NOT NULL,
  `Image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD KEY `ID_Product` (`ID_Product`),
  ADD KEY `ID_Member` (`ID_Member`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`ID_Member`),
  ADD UNIQUE KEY `Account_Name` (`Account_Name`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`ID_News`),
  ADD KEY `ID_Member` (`ID_Member`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`ID_Product`);

--
-- Indexes for table `products' images`
--
ALTER TABLE `products' images`
  ADD KEY `ID_Product` (`ID_Product`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `ID_Member` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `ID_News` int(11) NOT NULL AUTO_INCREMENT COMMENT 'News'' ID';

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `ID_Product` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Product''s ID';

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`ID_Product`) REFERENCES `products` (`ID_Product`),
  ADD CONSTRAINT `comments_ibfk_2` FOREIGN KEY (`ID_Member`) REFERENCES `members` (`ID_Member`);

--
-- Constraints for table `news`
--
ALTER TABLE `news`
  ADD CONSTRAINT `news_ibfk_1` FOREIGN KEY (`ID_Member`) REFERENCES `members` (`ID_Member`);

--
-- Constraints for table `products' images`
--
ALTER TABLE `products' images`
  ADD CONSTRAINT `products' images_ibfk_1` FOREIGN KEY (`ID_Product`) REFERENCES `products` (`ID_Product`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
