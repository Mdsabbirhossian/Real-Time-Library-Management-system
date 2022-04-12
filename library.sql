-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 23, 2020 at 10:15 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `library`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Id` int(50) NOT NULL,
  `first` varchar(50) NOT NULL,
  `last` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` int(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contact` int(50) NOT NULL,
  `Picture` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Id`, `first`, `last`, `username`, `password`, `email`, `contact`, `Picture`) VALUES
(4, 'sadik', 'hasan', 'sadik', 11111, 'sadikwin@gmail.com', 2147483647, 'user2.png'),
(5, 'rabbi', 'hossain', 'rabi', 16203067, 'rabi@gmail.com', 1722014890, 'p.jpg'),
(6, 'sabbir', 'hossain', 'saho', 16203067, 'sabbir@gmail.com', 1722014890, 'user2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `Id` int(8) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Authors` varchar(100) NOT NULL,
  `Editions` varchar(100) NOT NULL,
  `Status` varchar(100) NOT NULL,
  `Quantity` int(100) NOT NULL,
  `Category` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`Id`, `Name`, `Authors`, `Editions`, `Status`, `Quantity`, `Category`) VALUES
(5, 'The Catcher in the Rye', 'J. D. Salinger', '16th', 'Available', 1, 'Novel'),
(6, 'Nineteen Eighty-Four', 'George Orwell', '15th', 'Available', 8, 'Novel'),
(10, 'Middlemarch', 'George Eliot', '6th', 'Available', -1, 'Novel'),
(9, 'Silent Spring', 'Rachel Carson', '6th', 'Available', 3, 'Nonfiction'),
(8, 'Milk and honey', 'Rupi Kaur', '16th', 'Available', 5, 'Poetry'),
(12, 'The Essential Rumi', 'Rumi', '13th', 'Available', 6, 'Poetry'),
(13, 'The Sun and Her Flowers', 'Rupi Kaur', '23th', 'Available', 6, 'Poetry'),
(14, 'The Sixth Extinction: An Unnatural History', 'Elizabeth Kolbert', '3rd', 'Available', 1, 'Non-fiction');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `Id` int(50) NOT NULL,
  `username` varchar(100) NOT NULL,
  `Comment` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`Id`, `username`, `Comment`) VALUES
(1, '', 'System isn\'t Responsive!!!!'),
(2, '', 'hi'),
(3, '', 'i am working.'),
(4, '', 'i am working.'),
(5, '', 'this is the test unlimited.'),
(6, '', 'this is not working what should i do?'),
(7, '', 'this test for table.'),
(9, '', 'this is not working oh my god'),
(10, '', 'this is not working oh my god'),
(11, '', 'joSJDjsdoHSD'),
(12, '', 'where are they going?'),
(13, 'saho', 'i not umderstanding this shit'),
(14, 'saho', 'i not umderstanding this shit'),
(15, 'saho', 'i not umderstanding this shit'),
(16, 'saho', 'i love you'),
(17, 'saho', 'i love you'),
(18, 'saho', 'nknknknk'),
(19, 'saho', 'nknknknk'),
(20, 'saho', 'eflqfnmsfnmsf'),
(21, '', 'eflqfnmsfnmsf'),
(22, 'saho', 'eflqfnmsfnmsf'),
(23, 'saho', 'wrkwrtwqrktwkrtlkrw'),
(24, 'saho', 'this is the last time i am doing this '),
(25, 'saho', 'this is the last time i am doing this '),
(26, 'saho', 'this is the last time i am doing this '),
(27, 'saho', 'this is the last time i am doing this '),
(28, 'saho', 'this is the last time i am doing this '),
(29, 'saho', 'this is the last time i am doing this '),
(30, 'Admin', ''),
(31, 'Admin', ''),
(32, 'Admin', ''),
(33, 'Admin', 'kkldldlld');

-- --------------------------------------------------------

--
-- Table structure for table `fine`
--

CREATE TABLE `fine` (
  `username` varchar(1000) NOT NULL,
  `id` int(100) NOT NULL,
  `returned` varchar(1000) NOT NULL,
  `day` int(50) NOT NULL,
  `fine` int(50) NOT NULL,
  `status` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fine`
--

INSERT INTO `fine` (`username`, `id`, `returned`, `day`, `fine`, `status`) VALUES
('saho', 13, '2020-05-29', 122, 1220, 'Not paid'),
('saho', 13, '2020-05-29', 122, 1220, 'Not paid'),
('saho', 13, '2020-05-29', 122, 1220, 'Not paid'),
('saho', 13, '2020-05-29', 122, 1220, 'Not paid'),
('saho', 13, '2020-05-29', 122, 1220, 'Not paid'),
('saho', 0, '2020-05-29', 0, 0, 'not paid'),
('saho', 13, '2020-05-29', 122, 12, 'not paid');

-- --------------------------------------------------------

--
-- Table structure for table `issue_book`
--

CREATE TABLE `issue_book` (
  `username` varchar(100) NOT NULL,
  `id` int(100) NOT NULL,
  `approve` varchar(100) NOT NULL,
  `issue` varchar(100) NOT NULL,
  `return` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `issue_book`
--

INSERT INTO `issue_book` (`username`, `id`, `approve`, `issue`, `return`) VALUES
('saho', 5, '<p style=\"color: white; background-color:green;\"> Returned </P>', '2020-04-26', ''),
('saho', 10, '<p style=\"color: white; background-color:red;\"> Expired </P>', '2020-05-30', '2020-06-07'),
('shimu', 5, 'Expired', '2020', '2020'),
('mim', 4, 'Expired', '2020', '2020'),
('mim', 12, '<p style=\"color: white; background-color:red;\"> Expired </P>', '2020-05-27', '2020-06-05'),
('saho', 10, '<p style=\"color: white; background-color:red;\"> Expired </P>', '2020-05-30', '2020-06-07'),
('saho', 12, 'no', '0', ''),
('saho', 9, 'No', '00', ''),
('saho', 5, '<p style=\"color: white; background-color:green;\"> Returned </P>', '2020-04-26', ''),
('saho', 8, '<p style=\"color: white; background-color:green;\"> Returned </P>', '2020-04-30', '2020-05-07'),
('saho', 14, '<p style=\"color: white; background-color:green;\"> Returned </P>', '2020-04-26', '2020-04-10'),
('saho', 13, '<p style=\"color:yellow; background-color:green;\">RETURNED</p>', '2020-01-20', '2020-01-27'),
('saho', 8, '<p style=\"color: white; background-color:green;\"> Returned </P>', '2020-04-30', '2020-05-07'),
('saho', 10, '<p style=\"color: white; background-color:red;\"> Expired </P>', '2020-05-30', '2020-06-07');

-- --------------------------------------------------------

--
-- Table structure for table `text`
--

CREATE TABLE `text` (
  `id` int(50) NOT NULL,
  `username` varchar(100) NOT NULL,
  `text` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `sender` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `text`
--

INSERT INTO `text` (`id`, `username`, `text`, `status`, `sender`) VALUES
(1, 'saho', 'this first test', 'yes', 'User'),
(2, 'saho', 'hello there this is test', 'yes', 'User'),
(3, 'saho', 'where are you bro?', 'yes', 'User'),
(4, 'saho', 'where are you bro?', 'yes', 'Admin'),
(6, 'saho', 'this is not working', 'yes', 'User'),
(7, 'saho', 'this is not working', 'yes', 'User'),
(8, 'saho', 'hi saho its working ', 'yes', 'User'),
(9, 'saho', 'hi saho its working ', 'yes', 'User'),
(10, 'saho', 'hurre', 'yes', 'User'),
(13, 'saho', 'this is so heard i am running out of my enargy!!!!!!!!!!!!!!!!!!!!!!!!!!!', 'yes', 'Admin'),
(14, 'saho', 'yes', 'yes', 'Admin'),
(15, 'saho', 'this is not working', 'yes', 'Admin'),
(16, 'saho', 'yes its working dear don,t lose hope your are doing well!!!!!', 'yes', 'User'),
(17, 'saho', 'this is not fair', 'no', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `first` varchar(100) NOT NULL,
  `last` varchar(100) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` int(8) NOT NULL,
  `email` varchar(100) NOT NULL,
  `contact` int(15) NOT NULL,
  `Picture` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`first`, `last`, `username`, `password`, `email`, `contact`, `Picture`) VALUES
('Gabbir', 'hossain', 'saho', 16203067, 'sabbir@gmail.com', 1722014890, 'user2.jpg'),
('Gabbir', 'hossain', 'saho', 16203067, 'sabbir@gmail.com', 1722014890, 'user2.jpg'),
('Gabbir', 'hossain', 'saho', 16203067, 'sabbir@gmail.com', 1722014890, 'user2.jpg'),
('Gabbir', 'hossain', 'saho', 16203067, 'sabbir@gmail.com', 1722014890, 'user2.jpg'),
('rakib', 'hossain', 'rako', 111111, 'rakib@gmail.com', 1915808388, 'user2.png'),
('rakib', 'hossain', 'rakib', 16203096, 'rakib@GMAIL.COM', 161580388, 'user2.png'),
('shimu', 'islam', 'shimu', 123456789, 'shimu@gmail.com', 1582869666, 'user2.png'),
('rimu', 'newaz', 'rimu', 1234, 'rimu@gmail.com', 1722014890, 'user2.png'),
('mim', 'korim', 'mim', 123, 'mimdim@gmail.com', 2147483647, 'user2.png'),
('rashed', 'hossain', 'rashed', 12603067, 'rashed123@gmail.com', 1722014890, 'user2.png'),
('bulbul', 'islam', 'bulbul', 1234, '.sndlfnaldnf', 2147483647, 'user2.png'),
('sazzad', 'hossain', 'sazzad', 1234, 'lmmdlsmdsnd', 2147483647, 'user2.png'),
('sojib', 'islam', 'sojib', 123, 'mlsfdjlf', 665365, 'user2.png'),
('mia', 'islam', 'mia', 233, 'mia@gmail.com', 49794679, 'user2.png'),
('ornob', 'hossain', 'ornob', 1234, 'jahfohfohqef', 1323989659, 'user2.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `text`
--
ALTER TABLE `text`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `Id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `Id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `text`
--
ALTER TABLE `text`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
