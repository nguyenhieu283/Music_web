-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 21, 2018 at 05:34 PM
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

-- --------------------------------------------------------

--
-- Table structure for table `musics`
--

CREATE TABLE `musics` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `single` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `national` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `musics`
--

INSERT INTO `musics` (`id`, `name`, `single`, `type`, `national`, `description`, `created_at`, `updated_at`) VALUES
(1, 'KhocChoNguoiDi.mp3', 'Đàm Vĩnh Hưng', 'Trữ tình', 'Việt Nam', 'Khóc cho người đi', NULL, NULL),
(2, 'AnhNhoEm.mp3', 'Tuấn Hưng', 'Nhạc trẻ', 'Việt Nam', 'Anh nhớ em', NULL, NULL),
(3, 'TuyCa.mp3', 'Đan Nguyên', 'Nhạc vàng', 'Việt Nam', 'Túy ca', NULL, NULL),
(4, 'NgaTuDuong.mp3', 'Hồ Quang Hiếu', 'Nhạc trẻ', 'Việt Nam', 'Ngã tư đường', NULL, NULL),
(5, 'MuaXuanDoCoEm.mp3', 'Đan Nguyên', 'Nhạc vàng', 'Việt Nam', 'Mùa xuân đó có em', NULL, NULL),
(6, 'LaiNhoNguoiYeu.mp3', 'Đan Nguyên', 'Nhạc vàng', 'Việt Nam', 'Lại nhớ người yêu', NULL, NULL),
(7, 'NuaVangTrang.mp3', 'Đàm Vĩnh Hưng', 'Trữ tình', 'Việt Nam', 'Nửa Vầng Trăng', NULL, NULL),
(8, 'ChuyenHoaSim.mp3', 'Đan Nguyên', 'Nhạc vàng', 'Việt Nam', 'Chuyện hoa sim', NULL, NULL),
(9, 'DoiThay.mp3', 'Hồ Quang Hiếu', 'Nhạc trẻ', 'Việt Nam', 'Đổi thay', NULL, NULL),
(10, 'GiatMinhTrongDem.mp3', 'Tuấn Hưng', 'Nhạc trẻ', 'Việt Nam', 'Giật mình trong đêm', NULL, NULL),
(11, 'SauTimThiepHong.mp3', 'Lệ Quyên', 'Nhạc vàng', 'Việt Nam', 'Sầu tím thiệp hông', NULL, NULL),
(12, 'ThiepHongAnhVietTenEm.mp3', 'Đan Nguyên', 'Nhạc vàng', 'Việt Nam', 'Thiệp hồng anh viết tên em', NULL, NULL),
(13, 'TinhXuaNghiaCu.mp3', 'Jimmy Nguyễn', 'Nhạc vàng', 'Việt Nam', 'Tình xưa nghĩa cũ', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `mvs`
--

CREATE TABLE `mvs` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `single` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `national` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `nationals`
--

CREATE TABLE `nationals` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `nationals`
--

INSERT INTO `nationals` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Việt Nam', NULL, NULL),
(2, 'Trung Quốc', NULL, NULL),
(3, 'Âu Mĩ', NULL, NULL),
(4, 'Hàn Quốc', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `singles`
--

CREATE TABLE `singles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `national` varchar(255) NOT NULL,
  `age` int(3) NOT NULL,
  `address` varchar(64) NOT NULL,
  `description` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `singles`
--

INSERT INTO `singles` (`id`, `name`, `national`, `age`, `address`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Đan Nguyên', 'Việt Nam', 28, 'California -  Hoa Kì', '\"Ca sĩ hát nhạc vàng', '0000-00-00 00:00:00', NULL),
(2, 'Hồ Quang Hiếu', 'Việt Nam', 27, 'Việt Nam', 'Ca sĩ hát nhạc trẻ', NULL, NULL),
(3, 'Đàm Vĩnh Hưng', 'Việt Nam', 38, 'Hải Phòng', 'Ông hoàng nhạc việt. Mr.Đàm', NULL, NULL),
(4, 'Lệ Quyên', 'Việt Nam', 35, 'Vĩnh Phúc', 'Xinh đẹp hát hay', NULL, NULL),
(5, 'Charlie Puth', 'Mĩ', 26, 'Ocland - Hoa Kì', '\"Đẹp giai hát hay vui tính', '0000-00-00 00:00:00', NULL),
(6, 'Marron5', 'Mĩ', 29, 'Mĩ', '\"Nhóm nhạc nổi tiếng với 4 thành viên', '0000-00-00 00:00:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `types`
--

CREATE TABLE `types` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Accounts`
--
ALTER TABLE `Accounts`
  ADD PRIMARY KEY (`User`);

--
-- Indexes for table `musics`
--
ALTER TABLE `musics`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mvs`
--
ALTER TABLE `mvs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nationals`
--
ALTER TABLE `nationals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `singles`
--
ALTER TABLE `singles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `types`
--
ALTER TABLE `types`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `musics`
--
ALTER TABLE `musics`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `mvs`
--
ALTER TABLE `mvs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `nationals`
--
ALTER TABLE `nationals`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `singles`
--
ALTER TABLE `singles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `types`
--
ALTER TABLE `types`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
