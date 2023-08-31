-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 09, 2023 at 09:11 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `user_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `id` int(255) NOT NULL,
  `company` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`id`, `company`) VALUES
(1, 'TCS'),
(2, 'L&T'),
(3, 'PCAPL'),
(4, 'EInfochips LTD'),
(5, 'Squad Technologies PVT. LTD'),
(6, 'LG Soft India PVT. LTD'),
(7, 'Sciative Solutions'),
(8, 'Cloudmate Technologies PVT. LTD');

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` mediumint(8) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `iso3` char(3) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `iso2` char(2) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phonecode` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `capital` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `currency` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `currency_symbol` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `flag` int(2) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `place`
--

CREATE TABLE `place` (
  `id` int(255) NOT NULL,
  `place` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `place`
--

INSERT INTO `place` (`id`, `place`) VALUES
(1, 'Vadodara'),
(2, 'Ahmedabad'),
(3, 'Jaipur'),
(4, 'Banglore'),
(5, 'Gandhinagar'),
(6, 'PAN India'),
(7, 'Gurugaon');

-- --------------------------------------------------------

--
-- Table structure for table `searchkeyword`
--

CREATE TABLE `searchkeyword` (
  `id` int(255) NOT NULL,
  `job_keyword` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `searchkeyword`
--

INSERT INTO `searchkeyword` (`id`, `job_keyword`) VALUES
(1, 'Web Developement'),
(2, 'App Developement'),
(3, 'Production Design'),
(4, 'Marketing'),
(5, 'Embedded Developer'),
(6, 'Software developer '),
(7, 'c/c++ Developer'),
(8, 'full stack developer'),
(9, 'Javascript Developer');

-- --------------------------------------------------------

--
-- Table structure for table `user_registration`
--

CREATE TABLE `user_registration` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `cpassword` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_registration`
--

INSERT INTO `user_registration` (`id`, `name`, `email`, `password`, `cpassword`) VALUES
(1, 'Drashti', 'drashtichitre541@gmail.com', '$2y$10$MtBcHt9Cg1lEOg9Jl1JAY.PeGeUGmP5B2SN/U6t4PNW2FGEC8t9ZW', '$2y$10$WKLPLYAxuG9XiePo23Yo7ubQwFByMblClVz0/XIveC7eTXpvnT6lK'),
(2, 'Drashti Chitre', 'drashtijio541@gmail.com', '$2y$10$MxLMlBPBGtB7Z0L8YUgWo.KaO9Yhfp385KLf/MPMvJaoQwoiWFswa', '$2y$10$n69I7hYr6PZ9xHlSAxyz9OHg5tUK.alZZAAB2.8E2UBx/AUoVurtG'),
(3, 'Yatha', 'abc@gmail.com', '$2y$10$4mXOUlWXX2FNvPBB2fVyoeyIgsH0X.e/HFH902KC79KSEXLORRmKe', '$2y$10$f4UCQ2BDLMtK3mOtVjl0beYmoFbS0hU0VxFTNIH0tOSXYASWewPhO'),
(4, 'Rashika', 'rashi2@gmail.com', '1726Rkm.', '1726Rkm.'),
(5, 'RASHIKA', 'rashika02@gmail.com', '$2y$10$C7wvB3PQsxnRqHC0tLfj7eFwWJ8oIr8wvcVpcHjICvsf8eW5cUGlO', '$2y$10$xZoiAkrewCfLtGvZrwz04eMgeE7yTkTjAzLPEYXOOHwHxSyMys2RC'),
(6, 'Rashika Machhi', 'r123@gmail.com', '$2y$10$NFZQPk1dSreersYc9.2vbe3fOci8vPNPmYUrVFKsZQ.LNvyVXEZrm', '$2y$10$Cq1HIsmP5FgK05f4o/ZD7eXOoRSx12/Iedi6pvMSZc7UxBY8VP3Zy');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `place`
--
ALTER TABLE `place`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `searchkeyword`
--
ALTER TABLE `searchkeyword`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_registration`
--
ALTER TABLE `user_registration`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `place`
--
ALTER TABLE `place`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `searchkeyword`
--
ALTER TABLE `searchkeyword`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `user_registration`
--
ALTER TABLE `user_registration`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
