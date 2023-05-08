-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 06, 2023 at 10:31 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `academia`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(255) NOT NULL,
  `blogcategory` varchar(255) NOT NULL,
  `title` varchar(500) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(1000) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `blogcategory`, `title`, `description`, `image`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'PHP', 'PHP RAW', 'php is an advanced language that is good  it is basically the language that deal with making things work', 'web/images/blog/PHP RAW1683206628.jpg', '2023-05-04 12:23:48', '2023-05-04 12:23:48', NULL),
(2, 'Announcements', 'Emergency', 'There are suspicions all over the school compound two men has just stolen the principal\'s crucial documents be on alert and let everybody be vigilant.', 'web/images/blog/Emergency1683206826.jpg', '2023-05-04 12:27:06', '2023-05-04 12:27:06', NULL),
(3, 'Laravel', 'Laravel Projects', 'laravel is an advance of php it is highly secured as such , if you use laravel in developing websites you would find out that your websites cannot be easily hacked.', 'web/images/blog/Laravel Projects1683206957.jpg', '2023-05-04 12:29:17', '2023-05-04 12:29:17', NULL),
(4, 'Food', 'Agriculture \'s essentiality', 'Agriculture\'s essentiality in the society you will found out that most of the richest people in foreign  countries are Agricultural farmers who have ventured nothing less  but have given all their time into developing and promogating agriculture.', 'web/images/blog/Agriculture \'s essentiality1683207140.png', '2023-05-04 12:32:21', '2023-05-04 12:32:21', NULL),
(5, 'Football', 'Soccer\'s importance', 'football is a very good game that is common around us it is easy swift but rich. every school needs a football pitch you cannot do without  football.', 'web/images/blog/Soccer\'s importance1683207544.jpg', '2023-05-04 12:39:04', '2023-05-04 12:39:04', NULL),
(6, 'Announcements', 'Elon musk', 'The richest man on earth Elon musk set to visit our school today every student should be informed and all student should compose themselves.', 'web/images/blog/Elon musk1683207842.jpg', '2023-05-04 12:44:02', '2023-05-04 12:44:02', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
