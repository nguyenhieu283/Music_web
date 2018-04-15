-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 15, 2018 at 11:46 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `music_web`
--

-- --------------------------------------------------------

--
-- Table structure for table `Accounts`
--

CREATE TABLE `Accounts` (
  `User` varchar(16) NOT NULL,
  `Pass` varchar(10) NOT NULL,
  `Name` varchar(32) NOT NULL,
  `Email` varchar(32) NOT NULL,
  `Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Accounts`
--

INSERT INTO `Accounts` (`User`, `Pass`, `Name`, `Email`, `Date`) VALUES
('admin', 'admin', 'NguyenHieu', 'musttry@gmail.com', '1997-03-28'),
('hong', '12345', 'Nguyen Linh', 'checkmail@gmail.com', '2000-03-12'),
('hungxuan', '12345', 'Xuân Hùng', 'hungxuanvt@gmail.com', '1997-04-04'),
('Linh', '123', 'Nguyen Linh', 'checkmail@gmail.com', '2000-03-12'),
('tanluu', '12345', 'Tấn Lưu', 'tanluudz@gmail.com', '1997-06-30'),
('vanhieu', '12345', 'Nguyễn Hiếu', 'focus@gmail.com', '1997-03-28');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Accounts`
--
ALTER TABLE `Accounts`
  ADD PRIMARY KEY (`User`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
