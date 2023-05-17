-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 16, 2023 at 01:56 PM
-- Server version: 8.0.33
-- PHP Version: 8.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `income_tax`
--

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `id` bigint UNSIGNED NOT NULL,
  `full_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `blood_group` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `group` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `council_no` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_of_enrollment` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_of_itba` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dob` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sprouse_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `profile_picture` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `full_name`, `phone`, `email`, `blood_group`, `group`, `council_no`, `date_of_enrollment`, `date_of_itba`, `dob`, `sprouse_name`, `profile_picture`, `created_at`, `updated_at`) VALUES
(1, 'Prabhat Kumar Acharyya', '9433344223', 'prabhatacharya55@gmail.com', NULL, 'ITBA Calcutta Members', 'F-846/819', NULL, NULL, '01/29/1955', NULL, NULL, '2023-04-17 07:35:46', '2023-04-17 23:53:58'),
(2, 'Arvind Agarwal', '9831026660', 'arvindrr@hotmail.com', NULL, 'ITBA Calcutta Members', 'F-294/405/1990', '08/17/1990', NULL, '05/25/1963', NULL, NULL, '2023-04-17 07:43:12', '2023-04-17 07:43:12'),
(3, 'Mahaveer Prasad Agrawal', '9331048107', 'mp_agarwal2003@yahoo.co.in', NULL, 'ITBA Calcutta Members', 'F/903/92', NULL, NULL, '11/07/1934', NULL, NULL, '2023-04-17 07:50:04', '2023-04-17 07:50:04'),
(4, 'Sardar Amjad Ali', '9830503211', 'sardaramjadali@gmail.com', NULL, 'ITBA Calcutta Members', 'WB-676/63', NULL, NULL, '11/01/1939', NULL, NULL, '2023-04-17 07:54:46', '2023-04-17 07:54:46'),
(5, 'Deba Prosad Bagchi', '9830128776', 'dpbagchil007@gmail.com', NULL, 'ITBA Calcutta Members', 'WB/677/64', NULL, NULL, '07/10/1937', NULL, NULL, '2023-04-17 07:56:56', '2023-04-17 07:56:56'),
(6, 'Somen Bagchi', '9830243367', 'somen.llb@gmail.com', NULL, 'ITBA Calcutta Members', 'WB/662/1976', NULL, NULL, '12/15/1948', NULL, NULL, '2023-04-17 07:58:52', '2023-04-17 07:58:52'),
(7, 'Ishwar Chandra Baid', '9339080012', 'icbaid.adv@gmall.com', NULL, 'ITBA Calcutta Members', 'WB/345/1984', NULL, NULL, '09/22/1959', NULL, NULL, '2023-04-17 08:08:53', '2023-04-17 08:08:53'),
(8, 'Siddharth Agarwal', '9903629905', 'sid.agarwal1993@gmail.com', NULL, 'ITBA Calcutta Members', 'F/962/2017', NULL, NULL, '05/07/1993', NULL, NULL, '2023-04-17 23:25:59', '2023-04-17 23:25:59'),
(9, 'Subash Ch Agarwal', '9830052141', 'subash_sushma@yahoo.in', NULL, 'ITBA Calcutta Members', 'F-927/1004/99', NULL, NULL, '01/01/1964', NULL, NULL, '2023-04-17 23:30:23', '2023-04-17 23:30:23'),
(10, 'Rai Chand Baid', '9830768860', 'baid.raichand@gmail.com', NULL, 'ITBA Calcutta Members', '1264/1168/2006', NULL, NULL, '08/20/1957', NULL, NULL, '2023-04-17 23:34:44', '2023-04-17 23:34:44'),
(11, 'Ram Niranjan Bajoria', '9830153554', 'bajoria@hotmail.com', NULL, 'ITBA Calcutta Members', 'WB/13/1978', NULL, NULL, '03/26/1935', NULL, NULL, '2023-04-17 23:46:58', '2023-04-18 07:22:53'),
(12, 'Ram Niranjan Bajoria', '9830153554', 'bajoria@hotmail.com', NULL, 'ITBA Calcutta Members', 'WB/13/1978', NULL, NULL, '03/26/1935', NULL, NULL, '2023-04-17 23:50:44', '2023-04-17 23:50:44');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
