-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 14, 2023 at 05:57 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pu_career-cruisedb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `id` int(100) NOT NULL,
  `UserName` varchar(100) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Email` varchar(150) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `status` varchar(20) DEFAULT NULL,
  `ip` varchar(14) DEFAULT NULL,
  `updationDate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`id`, `UserName`, `Name`, `Email`, `Password`, `status`, `ip`, `updationDate`) VALUES
(1, 'admin', 'Admin', 'admin@admin.com', '1006f0ae5a7ece19828a67ac62288e05', NULL, NULL, '2023-02-23 02:07:03');

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
-- Table structure for table `contact_form`
--

CREATE TABLE `contact_form` (
  `id` int(20) NOT NULL,
  `name` varchar(150) NOT NULL,
  `email` varchar(250) NOT NULL,
  `subject` varchar(250) NOT NULL,
  `phoneno` varchar(50) NOT NULL,
  `mesg` text NOT NULL,
  `created` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact_form`
--

INSERT INTO `contact_form` (`id`, `name`, `email`, `subject`, `phoneno`, `mesg`, `created`) VALUES
(1, 'Drashti Chitre', 'd@gmail.com', 'demo', '6353057871', 'Testing message', '2023-03-14 15:47:12'),
(2, 'sahil', 's@gmail.com', 'job', '7418529630', 'i want to find job', '2023-03-14 16:42:37');

-- --------------------------------------------------------

--
-- Table structure for table `investorreg`
--

CREATE TABLE `investorreg` (
  `iid` int(20) NOT NULL,
  `iname` varchar(150) NOT NULL,
  `iaddress` text NOT NULL,
  `iemail` varchar(250) NOT NULL,
  `ipp` varchar(300) NOT NULL,
  `iabout` text NOT NULL,
  `iaccredit` text DEFAULT NULL,
  `istrategies` text DEFAULT NULL,
  `ihopetoallocate` text DEFAULT NULL,
  `ipnetworthneed` text DEFAULT NULL,
  `ireasonatcc` text DEFAULT NULL,
  `hopetousecc` text NOT NULL,
  `ildprofile` text NOT NULL,
  `iinvestortype` varchar(150) DEFAULT NULL,
  `iexperienceinvestvc` text DEFAULT NULL,
  `ietechstartups` text DEFAULT NULL,
  `aangelList` text DEFAULT NULL,
  `itca` text NOT NULL,
  `submitted` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `investorreg`
--

INSERT INTO `investorreg` (`iid`, `iname`, `iaddress`, `iemail`, `ipp`, `iabout`, `iaccredit`, `istrategies`, `ihopetoallocate`, `ipnetworthneed`, `ireasonatcc`, `hopetousecc`, `ildprofile`, `iinvestortype`, `iexperienceinvestvc`, `ietechstartups`, `aangelList`, `itca`, `submitted`) VALUES
(1, 'Rashika Machhi', 'Vadodara', 'r@gmail.com', '209.jpg', 'As an investor, I have a passion for identifying and supporting promising businesses, entrepreneurs, and ventures. My skills and experience allow me to assess risks and opportunities, and to make informed decisions about where to allocate capital.', 'I have, either on my own or with my spouse, more than ₹8.25cr of net tangible assets (excluding my primary residence)', 'Investing in funds that broadly index venture, such as Career Cruise Access Fund (Career Cruise Managed Funds)', 'Up to $20,000', 'Up to 10%', 'Meeting new people to expand your network', 'for my business growth', 'https://www.google.com', 'Angel Investors', 'I invested in startups indirectly through a venture fund', 'I am or was a tech startup founder', 'Friend or Connection', 'I agree to the terms and conditions, as well as the terms above.', '2023-03-14 16:11:28'),
(2, 'Aman Gupta', 'Mumbai', 'aman@gmail.com', '2021flat_271.png', 'I am a founder of boat.', 'I want to make investments via AngelList India only. I do not meet the above criteria. However, I hereby declare that I have more than ₹2cr of net tangible assets (excluding my primary residence)', 'Picking companies to invest in (Career Cruise Syndicates)', 'Up to $250,000', 'Up to 15%', 'Generating financial returns for your portfolio', 'for my business growth', 'https://www.google.com', 'Venture capital firms', 'None of the above', 'None of the above', 'Career Cruise Syndicate Lead or Fund Manager', 'I agree to the terms and conditions, as well as the terms above.', '2023-03-14 16:14:30'),
(3, 'Nameeta Shah', 'Pune', 'nam@gmail.com', 'Charactor-21.png', 'My approach to investing is based on a thorough analysis of the market, the industry, and the individual company or entrepreneur. I am able to identify trends and opportunities that others may overlook, and I am always seeking to stay ahead of the curve.', 'I want to make investments via AngelList India only. I do not meet the above criteria. However, I hereby declare that I have more than ₹2cr of net tangible assets (excluding my primary residence)', 'Investing behind Fund Managers who pick companies to invest in (Career Cruise Rolling or Venture Funds)', 'Up to $500,000', 'More than 15%', 'Generating financial returns for your portfolio', 'Growth of business', 'https://www.google.com', 'Angel Investors', 'None of the above', 'None of the above', 'Google search', 'I agree to the terms and conditions, as well as the terms above.', '2023-03-14 16:16:45'),
(4, 'Sahil', 'Vadodara', 'sahil@gmail.com', 'angel.png', 'I am founder of stech.', 'I\'m not accredited yet', 'Picking companies to invest in (Career Cruise Syndicates)', 'Up to $20,000', 'Up to 5%', 'Learning more about tech and startups', 'Improving my business', 'https://www.google.com', 'Angel Investors', 'I work or worked at a venture capital or investment firm', 'I work or worked at a tech startup', 'Career Cruise Syndicate Lead or Fund Manager', 'I agree to the terms and conditions, as well as the terms above.', '2023-03-14 16:18:43');

-- --------------------------------------------------------

--
-- Table structure for table `jobapply`
--

CREATE TABLE `jobapply` (
  `jaid` int(20) NOT NULL,
  `janame` varchar(150) NOT NULL,
  `jaemail` varchar(250) NOT NULL,
  `jaresume` varchar(300) NOT NULL,
  `jacompany` varchar(250) NOT NULL,
  `jpid` int(20) NOT NULL,
  `submitted` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jobapply`
--

INSERT INTO `jobapply` (`jaid`, `janame`, `jaemail`, `jaresume`, `jacompany`, `jpid`, `submitted`) VALUES
(1, 'Sahil ', 's@gmail.com', 'resume.pdf', 'Rtech', 4, '2023-03-14 16:45:54'),
(2, 'Sahil ', 's@gmail.com', 'resume.pdf', 'M.S Infotech', 3, '2023-03-14 16:46:12'),
(3, 'Sahil ', 's@gmail.com', 'resume.pdf', 'Drashti Enterprise', 1, '2023-03-14 16:46:42'),
(4, 'Yatha', 'drashtichitre541@gmail.com', 'resume.pdf', 'Drashti Enterprise', 2, '2023-03-14 16:56:21');

-- --------------------------------------------------------

--
-- Table structure for table `jobpost`
--

CREATE TABLE `jobpost` (
  `jpid` int(100) NOT NULL,
  `jobtitle` varchar(200) NOT NULL,
  `companyname` varchar(150) NOT NULL,
  `jobrole` varchar(150) NOT NULL,
  `jobtype` varchar(150) NOT NULL,
  `experience` int(50) UNSIGNED NOT NULL,
  `ctc` varchar(50) NOT NULL,
  `stipend` int(50) NOT NULL,
  `location` varchar(150) NOT NULL,
  `eligibilitycriteria` varchar(200) NOT NULL,
  `eligibilitycourses` varchar(200) NOT NULL,
  `odetails` text NOT NULL,
  `selectionprocess` text NOT NULL,
  `aboutorganization` text NOT NULL,
  `contactpname` varchar(150) NOT NULL,
  `contactpcontact` int(25) NOT NULL,
  `contactpemail` varchar(200) NOT NULL,
  `postedtime` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jobpost`
--

INSERT INTO `jobpost` (`jpid`, `jobtitle`, `companyname`, `jobrole`, `jobtype`, `experience`, `ctc`, `stipend`, `location`, `eligibilitycriteria`, `eligibilitycourses`, `odetails`, `selectionprocess`, `aboutorganization`, `contactpname`, `contactpcontact`, `contactpemail`, `postedtime`) VALUES
(1, 'PHP Fresher', 'Drashti Enterprise', 'Fresher', 'Full-Time', 1, '300000', 15000, 'Vadodara', 'B.tech', 'Information Technology', 'Diploma or Degree Prefered', 'walk in interview', 'https://www.google.com/', 'Drashti Chitre', 2147483647, 'drashtichitre541@gmail.com', '2023-03-14 15:49:48'),
(2, 'Frontend Developer', 'Drashti Enterprise', 'HTML Fresher', 'Remote', 2, '400000', 16000, 'Vadodara', 'B.tech', 'Information Technology', 'Degree Prefered', 'Technical Task', 'https://www.google.com/', 'Drashti Chitre', 2147483647, 'drashtichitre541@gmail.com', '2023-03-14 15:51:30'),
(3, 'Backend Developer', 'M.S Infotech', 'Python Developer', 'Hybrid', 2, '400000', 12000, 'Surat', 'B.tech', 'Information Technology', 'Knowledge of database ', '3 round interview', 'https://www.google.com/', 'Maitry Shah', 1234567890, 'shahmaitry05@gmail.com', '2023-03-14 15:54:59'),
(4, 'Engineer Trainee', 'Rtech', 'Software Engineer', 'Full-Time', 1, '500000', 18000, 'Surat', 'B.tech', 'Information Technology', 'Should have knowledge of backend as well as frontend.', 'walk in interview', 'https://www.google.com/', 'Rashika', 2147483647, 'r@gmail.com', '2023-03-14 16:07:29');

-- --------------------------------------------------------

--
-- Table structure for table `locations`
--

CREATE TABLE `locations` (
  `id` int(50) NOT NULL,
  `name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `locations`
--

INSERT INTO `locations` (`id`, `name`) VALUES
(1, 'Delhi'),
(2, 'Ahmedabad'),
(3, 'Kolkata'),
(4, 'Mumbai');

-- --------------------------------------------------------

--
-- Table structure for table `mentorreg`
--

CREATE TABLE `mentorreg` (
  `id` int(20) NOT NULL,
  `mfname` varchar(300) NOT NULL,
  `mlname` varchar(300) NOT NULL,
  `memail` varchar(300) NOT NULL,
  `mcon` int(20) UNSIGNED NOT NULL,
  `mpp` varchar(300) NOT NULL,
  `mrf` varchar(300) NOT NULL,
  `mjobr` varchar(300) NOT NULL,
  `mfee` int(100) NOT NULL,
  `mavai` text NOT NULL,
  `mcallm` text NOT NULL,
  `mabout` text NOT NULL,
  `astatus` varchar(100) NOT NULL DEFAULT 'pending',
  `created` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mentorreg`
--

INSERT INTO `mentorreg` (`id`, `mfname`, `mlname`, `memail`, `mcon`, `mpp`, `mrf`, `mjobr`, `mfee`, `mavai`, `mcallm`, `mabout`, `astatus`, `created`) VALUES
(1, 'Maitry', 'Shah', 'shahmaitry05@gmail.com', 1234567890, '209.jpg', 'resume.pdf', 'Backend Developer', 200, 'Friday, Saturday, Sunday', 'Message, Mail, Meet', 'As a mentor and backend developer, I bring a unique combination of skills and experience to the table. With my expertise in backend development and my passion for helping others succeed, I am well-equipped to guide and mentor aspiring developers on their career paths.', 'approved', '2023-03-14 16:01:59'),
(2, 'Rashika', 'Machhi', 'r@gmail.com', 4294967295, '49605001.png', 'resume.pdf', 'Devops Engineer', 299, 'Monday, Wednesday, Friday', 'Call, Meet, Zoom, Teams', 'In my role as a mentor, I am committed to helping my mentees develop the skills and knowledge necessary to succeed in the fields. I am patient, supportive, and always willing to go the extra mile to ensure that my mentees are successful.', 'approved', '2023-03-14 16:05:32'),
(3, 'Monica', 'Sharma', 'monica@gmail.com', 4294967295, '49605001.png', 'resume.pdf', 'Founder', 499, 'Wednesday, Thursday', 'Meet, Teams', 'I am a founder of new cosmetics.', 'approved', '2023-03-14 16:38:25'),
(4, 'Krupali', 'Chitre', 'krupa@gmail.com', 3216549870, '2091.png', 'resume.pdf', 'Co-founder', 600, 'Saturday, Sunday', 'Mail, Meet', 'I am a co-founder of web.com', 'pending', '2023-03-14 16:39:58'),
(5, 'No', 'name', 'no@gmail.com', 4294967295, 'angel.png', 'resume.pdf', 'engineer', 700, 'Thursday', 'Call, Zoom, Teams', 'I am an engineer', 'pending', '2023-03-14 16:41:10'),
(6, 'Yatha', 'Patil', 'drashtichitre541@gmail.com', 4294967295, 'girl.png', 'resume.pdf', 'Founder', 600, 'Tuesday, Wednesday', 'Call, Mail, Meet', 'I am founder of pyinfotech.', 'approved', '2023-03-14 16:53:18');

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
-- Table structure for table `user_login`
--

CREATE TABLE `user_login` (
  `id` int(100) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `cpassword` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_login`
--

INSERT INTO `user_login` (`id`, `name`, `email`, `password`, `cpassword`) VALUES
(1, 'Drashti', 'd@gmail.com', '$2y$10$UiBxB30CRRDqssM2zMHWJeDYcGqXCS1llqqytu3qJ78L8pfy4czee', '$2y$10$hVGnC2qPvC/BE7mxfJSMRureoBN0aiT1gB9IvKtORo5o6gbr44V9G'),
(2, 'Maitry', 'm@gmail.com', '$2y$10$st.CGy/qHnuGvirnNbZUrODItyeuyBiRXFy/4QyAJtA.yH4DWFiRq', '$2y$10$m5FoT/siy5GfNRi6UYEEmuuh8oQjEtdRuF8HfF.4u0LcOnrvyoDku'),
(3, 'Rashika', 'r@gmail.com', '$2y$10$CEUes4ekndaTfbIzoAdEE.zaAW.Y6M1arDQJifadoAg.nu8y.M3ym', '$2y$10$bIZgAM/5CKvnDtmidi3dZe6ndYx50/3u85vwFTV5i.l05bwAf4s.y'),
(4, 'Sahil', 's@gmail.com', '$2y$10$ghi88l/F5s9fIXfcKzgY3ehxy4jdniqzuA/5iW7sbycWILjOdgSAK', '$2y$10$5C1yqhhLIu06JvjfiI7t4e/bgYBx/ZmnURyf8gKBIwZ9bqYQJm3PC'),
(6, 'Yatha', 'drashtichitre541@gmail.com', '$2y$10$Aliw.V9MUtOBFzpkaP3O.OkQEZ8bhG3BQHVOtgRqXHu1eqL2rbJ1.', '$2y$10$jankJYvZnLnAwJgrOruKbuIRtm5vNFQ6QMxrRbdPnYv7Yr0CXKg1u'),
(7, 'Chitre', 'drashtijio541@gmail.com', '$2y$10$fOm4bKPBS1Kx41rsMqqY7O.y8/8eyiV8UZPM8mPO8xIpDYhibvAEO', '$2y$10$FfZl83n/C1KGi08SzkU8mu5VoBbXLXFKLoh.uTS0eGwEteorRpb3q');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_form`
--
ALTER TABLE `contact_form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `investorreg`
--
ALTER TABLE `investorreg`
  ADD PRIMARY KEY (`iid`);

--
-- Indexes for table `jobapply`
--
ALTER TABLE `jobapply`
  ADD PRIMARY KEY (`jaid`);

--
-- Indexes for table `jobpost`
--
ALTER TABLE `jobpost`
  ADD PRIMARY KEY (`jpid`);

--
-- Indexes for table `locations`
--
ALTER TABLE `locations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mentorreg`
--
ALTER TABLE `mentorreg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `searchkeyword`
--
ALTER TABLE `searchkeyword`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_login`
--
ALTER TABLE `user_login`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `contact_form`
--
ALTER TABLE `contact_form`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `investorreg`
--
ALTER TABLE `investorreg`
  MODIFY `iid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `jobapply`
--
ALTER TABLE `jobapply`
  MODIFY `jaid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `jobpost`
--
ALTER TABLE `jobpost`
  MODIFY `jpid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `locations`
--
ALTER TABLE `locations`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `mentorreg`
--
ALTER TABLE `mentorreg`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `searchkeyword`
--
ALTER TABLE `searchkeyword`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `user_login`
--
ALTER TABLE `user_login`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
