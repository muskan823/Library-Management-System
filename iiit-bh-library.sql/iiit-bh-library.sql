-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 11, 2021 at 08:33 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `iiit-bh-library`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookborrow`
--

CREATE TABLE `bookborrow` (
  `id` varchar(225) NOT NULL,
  `name` varchar(225) NOT NULL,
  `Issue_Date` varchar(225) NOT NULL,
  `book1` varchar(225) NOT NULL,
  `book2` varchar(225) NOT NULL,
  `book3` varchar(225) NOT NULL,
  `Return_Date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bookborrow`
--

INSERT INTO `bookborrow` (`id`, `name`, `Issue_Date`, `book1`, `book2`, `book3`, `Return_Date`) VALUES
('b119035', 'Muskan ', '12-03-21', 'Pride and Prejudice', 'none', 'none', 'none'),
('b119034', 'Monica', '11-03-21', 'Data Analysis', 'Mathematics', 'none', 'none'),
('b119031', 'Mandip', '12-03-21', 'ANSI C', 'none', 'none', 'none'),
('b119050', 'Saurav', '12-03-21', 'Chemistry', 'none', 'none', 'none');

-- --------------------------------------------------------

--
-- Table structure for table `credential`
--

CREATE TABLE `credential` (
  `name` varchar(225) NOT NULL,
  `userID` varchar(225) NOT NULL,
  `pass` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `credential`
--

INSERT INTO `credential` (`name`, `userID`, `pass`) VALUES
('mandip', 'b119031', 'admin@b119031'),
('saurav', 'b119050', 'admin@b119050'),
('rajdeep', 'b119042', 'admin@b119042'),
('Muskan', 'b119035', 'admin@b119035'),
('Monica', 'b119034', 'admin@b119034');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
