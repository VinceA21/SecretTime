-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 07, 2021 at 08:14 AM
-- Server version: 5.7.23-23
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `seobyweb_web_dating`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `fname` varchar(200) COLLATE utf8mb4_bin DEFAULT NULL,
  `lname` varchar(200) COLLATE utf8mb4_bin DEFAULT NULL,
  `username` varchar(100) COLLATE utf8mb4_bin NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `email` varchar(150) COLLATE utf8mb4_bin DEFAULT NULL,
  `email_verify` int(11) NOT NULL DEFAULT '0',
  `phone` varchar(50) COLLATE utf8mb4_bin DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `landmark` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `country` varchar(150) COLLATE utf8mb4_bin DEFAULT NULL,
  `city` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `state` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `zip` varchar(10) COLLATE utf8mb4_bin DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_bin NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `enable` int(11) NOT NULL DEFAULT '1',
  `creation_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `fname`, `lname`, `username`, `image`, `email`, `email_verify`, `phone`, `address`, `landmark`, `country`, `city`, `state`, `zip`, `password`, `status`, `enable`, `creation_date`) VALUES
(1, 'Dating', 'Admin', 'dating-admin', '159480216020200715.jpg', 'admin@gmail.com', 1, '9898989898', 'asas', 'asas', 'asasrrrr', 'asas', 'asas', '12345', '827ccb0eea8a706c4c34a16891f84e7b', 1, 1, '2020-10-20 13:45:33');

-- --------------------------------------------------------

--
-- Table structure for table `body`
--

CREATE TABLE `body` (
  `id` int(11) NOT NULL,
  `body_code` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `body_status` int(11) NOT NULL DEFAULT '1',
  `creation_date` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `modification_date` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `body`
--

INSERT INTO `body` (`id`, `body_code`, `name`, `body_status`, `creation_date`, `modification_date`) VALUES
(1, 'SECTBDT58572', 'Slim', 1, '2021-06-30 18:39:32', '2021-06-30 18:39:32'),
(2, 'SECTBDT58585', 'Fit', 1, '2021-06-30 18:39:45', '2021-06-30 18:39:45'),
(3, 'SECTBDT58601', 'Average', 1, '2021-06-30 18:40:01', '2021-06-30 18:40:01'),
(4, 'SECTBDT58615', 'Curvy', 1, '2021-06-30 18:40:15', '2021-06-30 18:40:15'),
(5, 'SECTBDT19738', 'Full Figured', 1, '2021-07-01 11:38:58', '2021-07-01 11:38:58');

-- --------------------------------------------------------

--
-- Table structure for table `education`
--

CREATE TABLE `education` (
  `id` int(11) NOT NULL,
  `education_code` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `education_status` int(11) DEFAULT '1',
  `creation_date` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `modification_date` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `education`
--

INSERT INTO `education` (`id`, `education_code`, `name`, `education_status`, `creation_date`, `modification_date`) VALUES
(1, 'SECTEDU58117', 'High school', 1, '2021-06-30 18:31:57', '2021-06-30 18:31:57'),
(2, 'SECTEDU58127', 'College degree', 1, '2021-06-30 18:32:07', '2021-06-30 18:32:07'),
(3, 'SECTEDU58143', 'Graduate degree', 1, '2021-06-30 18:32:23', '2021-06-30 18:32:23'),
(4, 'SECTEDU58336', 'Master degree', 1, '2021-06-30 18:35:36', '2021-06-30 18:35:36'),
(5, 'SECTEDU58351', 'In college', 1, '2021-06-30 18:35:51', '2021-06-30 18:35:51'),
(6, 'SECTEDU58366', 'In university', 1, '2021-06-30 18:36:06', '2021-06-30 18:36:06'),
(7, 'SECTEDU58381', 'Undergraduate degree', 1, '2021-06-30 18:36:21', '2021-06-30 18:36:21');

-- --------------------------------------------------------

--
-- Table structure for table `ethnicity`
--

CREATE TABLE `ethnicity` (
  `id` int(11) NOT NULL,
  `ethnicity_code` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `ethnicity_status` int(11) NOT NULL DEFAULT '1',
  `creation_date` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `modification_date` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `ethnicity`
--

INSERT INTO `ethnicity` (`id`, `ethnicity_code`, `name`, `ethnicity_status`, `creation_date`, `modification_date`) VALUES
(1, 'SECTETC58652', 'White', 1, '2021-06-30 18:40:52', '2021-06-30 18:40:52'),
(2, 'SECTETC58666', 'Black', 1, '2021-06-30 18:41:06', '2021-06-30 18:41:06'),
(3, 'SECTETC58682', 'Hispanic', 1, '2021-06-30 18:41:22', '2021-06-30 18:41:22'),
(4, 'SECTETC58703', 'Asian', 1, '2021-06-30 18:41:43', '2021-06-30 18:41:43'),
(5, 'SECTETC58711', 'Other', 1, '2021-06-30 18:41:51', '2021-06-30 18:41:51');

-- --------------------------------------------------------

--
-- Table structure for table `gender`
--

CREATE TABLE `gender` (
  `id` int(11) NOT NULL,
  `gender_code` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `creation_date` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `modification_date` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `gender`
--

INSERT INTO `gender` (`id`, `gender_code`, `name`, `image`, `status`, `creation_date`, `modification_date`) VALUES
(1, 'STGENML001', 'Male', '906a6fc27a84816d973c346bc3655658.png', 1, '2021-06-28 18:52:05', '2021-06-28 18:52:05'),
(2, 'STGENFE002', 'Female', 'profile-pic.png', 1, '2021-06-28 18:52:05', '2021-06-28 18:52:05');

-- --------------------------------------------------------

--
-- Table structure for table `occupation`
--

CREATE TABLE `occupation` (
  `id` int(11) NOT NULL,
  `occupation_code` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `occupation_status` int(11) NOT NULL DEFAULT '1',
  `creation_date` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `modification_date` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `occupation`
--

INSERT INTO `occupation` (`id`, `occupation_code`, `name`, `occupation_status`, `creation_date`, `modification_date`) VALUES
(1, 'SECTOCP58446', 'Administrat/Secretar', 1, '2021-06-30 18:37:26', '2021-06-30 18:37:26'),
(2, 'SECTOCP58454', 'Student', 1, '2021-06-30 18:37:34', '2021-06-30 18:37:34'),
(3, 'SECTOCP58464', 'Food services', 1, '2021-06-30 18:37:44', '2021-06-30 18:37:44'),
(4, 'SECTOCP58477', 'Executive management', 1, '2021-06-30 18:37:57', '2021-06-30 18:37:57'),
(5, 'SECTOCP58489', 'Medical/Dental', 1, '2021-06-30 18:38:09', '2021-06-30 18:38:09'),
(6, 'SECTOCP58501', 'Teacher/Professor', 1, '2021-06-30 18:38:21', '2021-06-30 18:38:21'),
(7, 'SECTOCP58535', 'Finance', 1, '2021-06-30 18:38:55', '2021-06-30 18:38:55');

-- --------------------------------------------------------

--
-- Table structure for table `smoke`
--

CREATE TABLE `smoke` (
  `id` int(11) NOT NULL,
  `smoke_code` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `smoke_status` int(11) NOT NULL DEFAULT '1',
  `creation_date` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `modification_date` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `smoke`
--

INSERT INTO `smoke` (`id`, `smoke_code`, `name`, `smoke_status`, `creation_date`, `modification_date`) VALUES
(1, 'SECTSMK58406', 'Yes', 1, '2021-06-30 18:36:46', '2021-06-30 18:36:46'),
(2, 'SECTSMK58419', 'No', 1, '2021-06-30 18:36:59', '2021-06-30 18:36:59');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` bigint(20) NOT NULL,
  `role` int(11) NOT NULL COMMENT '1-female, 2-male',
  `usercode` varchar(50) COLLATE utf8mb4_bin NOT NULL,
  `name` varchar(150) COLLATE utf8mb4_bin NOT NULL,
  `username` varchar(100) COLLATE utf8mb4_bin NOT NULL,
  `email` varchar(150) COLLATE utf8mb4_bin NOT NULL,
  `verify_email` int(11) NOT NULL DEFAULT '0',
  `phone` varchar(20) COLLATE utf8mb4_bin NOT NULL,
  `phone_verify` int(11) NOT NULL DEFAULT '0',
  `image` varchar(255) COLLATE utf8mb4_bin NOT NULL,
  `password` varchar(200) COLLATE utf8mb4_bin DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_bin NOT NULL,
  `city` varchar(150) COLLATE utf8mb4_bin DEFAULT NULL,
  `state` varchar(150) COLLATE utf8mb4_bin NOT NULL,
  `country` varchar(150) COLLATE utf8mb4_bin DEFAULT '0',
  `zipcode` int(11) DEFAULT NULL,
  `location` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `age` int(11) NOT NULL DEFAULT '0',
  `bodytype` int(11) NOT NULL DEFAULT '0',
  `ethnicity` int(11) NOT NULL DEFAULT '0',
  `tall` int(11) NOT NULL DEFAULT '0',
  `education` int(11) NOT NULL DEFAULT '0',
  `smoke` int(11) NOT NULL DEFAULT '0',
  `occupation` int(11) NOT NULL DEFAULT '0',
  `tagline` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `offer` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `otp_validator` varchar(20) COLLATE utf8mb4_bin DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '1' COMMENT '-1-deleted, 0-deactive, 1-active',
  `creation_date` datetime DEFAULT NULL,
  `modification_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `role`, `usercode`, `name`, `username`, `email`, `verify_email`, `phone`, `phone_verify`, `image`, `password`, `address`, `city`, `state`, `country`, `zipcode`, `location`, `age`, `bodytype`, `ethnicity`, `tall`, `education`, `smoke`, `occupation`, `tagline`, `offer`, `otp_validator`, `status`, `creation_date`, `modification_date`) VALUES
(1, 1, 'SECTIM143754', 'rajamanjeet91', 'rajamanjeet91', 'kr.manjeet319@gmail.com', 0, '', 0, '', '827ccb0eea8a706c4c34a16891f84e7b', '', NULL, '', '0', NULL, 'India', 30, 3, 1, 142, 4, 2, 1, NULL, NULL, '', 1, '2021-07-01 18:19:14', '2021-07-06 15:08:33'),
(2, 1, 'SECTIM146779', 'assistant', 'assistant', 'rajamanjeet91@gmail.comx', 0, '', 0, '202107051135071_mk1-6aYaf_Bes1E3Imhc0A.jpeg,20210705113507fun-cartoon-boys-girls-pulling-260nw-1055834903.jpg,20210705113507image-editing-tools.jpg,20210705113507start-0e837dcc57769db2306d8d659f53555feb500b3c5d456879b9c843d1872e7baa.jpg', '827ccb0eea8a706c4c34a16891f84e7b', '', NULL, '', '0', NULL, 'Indiaa', 30, 2, 1, 169, 1, 1, 6, 'Showing rows 0 - 5 (6 total, Query took 0.0031 seconds.)', 'Showing rows 0 - 5 (6 total, Query took 0.0031 seconds.)Showing rows 0 - 5 (6 total, Query took 0.0031 seconds.)Showing rows 0 - 5 (6 total, Query took 0.0031 seconds.)Showing rows 0 - 5 (6 total, Query took 0.0031 seconds.)', 'CMRWSQ2L0E', 1, '2021-07-01 19:09:39', '2021-07-05 20:03:56'),
(3, 2, 'SECTIM209062', 'assistanthh', 'assistanthh', 'rajamanjeet91@gmail.comggg', 0, '', 0, '', '827ccb0eea8a706c4c34a16891f84e7b', '', NULL, '', '0', NULL, 'hhhh', 45, 4, 5, 172, 2, 2, 3, NULL, NULL, NULL, 1, '2021-07-02 12:27:42', '2021-07-02 12:27:42'),
(4, 2, 'SECTIM213157', 'assistantww', 'assistantww', 'rajamanjeet91@gmail.comfff', 0, '', 0, '20210705115719fun-cartoon-boys-girls-pulling-260nw-1055834903.jpg,20210705115719image-editing-tools.jpg,20210705115719start-0e837dcc57769db2306d8d659f53555feb500b3c5d456879b9c843d1872e7baa.jpg,202107051157191_mk1-6aYaf_Bes1E3Imhc0A.jpeg', '827ccb0eea8a706c4c34a16891f84e7b', '', NULL, '', '0', NULL, 'efrer', 88, 4, 2, 104, 1, 1, 1, 'sefsfrrtet dsftre', 'sefsfrrtet dsftresefsfrrtet dsftresefsfrrtet dsftresefsfrrtet dsftresefsfrrtet dsftresefsfrrtet dsftresefsfrrtet dsftresefsfrrtet dsftresefsfrrtet dsftresefsfrrtet dsftresefsfrrtet dsftresefsfrrtet dsftresefsfrrtet dsftresefsfrrtet dsftresefsfrrtet dsftresefsfrrtet dsftresefsfrrtet dsftresefsfrrtet dsftresefsfrrtet dsftresefsfrrtet dsftresefsfrrtet dsftresefsfrrtet dsftresefsfrrtet dsftresefsfrrtet dsftresefsfrrtet dsftresefsfrrtet dsftresefsfrrtet dsftresefsfrrtet dsftresefsfrrtet dsftresefsfrrtet dsftresefsfrrtet dsftresefsfrrtet dsftresefsfrrtet dsftresefsfrrtet dsftresefsfrrtet dsftresefsfrrtet dsftresefsfrrtet dsftresefsfrrtet dsftresefsfrrtet dsftresefsfrrtet dsftresefsfrrtet dsftre', NULL, 1, '2021-07-02 13:35:57', '2021-07-05 11:57:19'),
(5, 2, 'SECTIM263188', 'HumbleEgo', 'HumbleEgo', 'Veezy21@gmail.com', 0, '', 0, '', '9684d224b3802cfdd08b9870e61804ec', '', NULL, '', '0', NULL, 'Toronto', 35, 1, 1, 175, 2, 2, 4, NULL, NULL, NULL, 1, '2021-07-03 03:29:48', '2021-07-03 03:29:48'),
(6, 2, 'SECTIM456258', 'beingprakashdubey', 'beingprakashdubey', 'beingprakashdubey@gmail.com', 0, '', 0, '', '7ac0498c01dbab2675114cecc94bd760', '', NULL, '', '0', NULL, 'New Delhi', 24, 1, 1, 137, 4, 1, 4, NULL, NULL, NULL, 1, '2021-07-05 09:07:38', '2021-07-05 09:07:38');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `body`
--
ALTER TABLE `body`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `education`
--
ALTER TABLE `education`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ethnicity`
--
ALTER TABLE `ethnicity`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gender`
--
ALTER TABLE `gender`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `occupation`
--
ALTER TABLE `occupation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `smoke`
--
ALTER TABLE `smoke`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `body`
--
ALTER TABLE `body`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `education`
--
ALTER TABLE `education`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `ethnicity`
--
ALTER TABLE `ethnicity`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `gender`
--
ALTER TABLE `gender`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `occupation`
--
ALTER TABLE `occupation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `smoke`
--
ALTER TABLE `smoke`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
