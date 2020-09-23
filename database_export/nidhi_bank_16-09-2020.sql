-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 16, 2020 at 11:16 AM
-- Server version: 5.7.26
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `perveen_bank`
--

-- --------------------------------------------------------

--
-- Table structure for table `account_series`
--

DROP TABLE IF EXISTS `account_series`;
CREATE TABLE IF NOT EXISTS `account_series` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `document_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `doc_key` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `prefix` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `start_no` int(11) NOT NULL DEFAULT '1',
  `formate_in_degit` int(11) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `account_series`
--

INSERT INTO `account_series` (`id`, `document_name`, `doc_key`, `prefix`, `start_no`, `formate_in_degit`, `created_at`, `updated_at`) VALUES
(1, 'Employee Code No.', 'emp_code', 'EPE', 3, 4, NULL, '2020-08-27 04:09:28'),
(2, 'Agent Code No.', 'agent_code', 'AG', 1, 5, NULL, '2020-09-14 01:54:15'),
(3, 'Voucher No.', 'vendor_no', 'VR', 1, 3, NULL, '2020-08-27 07:58:24'),
(4, 'Membership No.', 'member_no', 'M', 1, 5, NULL, '2020-08-27 07:58:24'),
(6, 'Application No (If Single Series)', 'APPLICATION_NO', 'APN', 1, 3, NULL, '2020-08-27 07:58:24'),
(7, 'Account No. (If Single Series)', 'ACC_NO', 'ACN', 1, 3, NULL, '2020-08-27 07:58:24'),
(8, 'Deposit Application No', 'DEPOSIT_APPLICATION', 'DEA', 1, 3, NULL, '2020-08-27 07:58:24'),
(9, 'Deposit Account No.', 'DEP_AC_NO', 'DAC', 1, 3, NULL, '2020-08-27 07:58:24'),
(10, 'Loan Application No', 'LOAN_APP_NUMBER', 'LAN', 1, 3, NULL, '2020-08-27 07:58:24'),
(11, 'Loan Account No.', 'LOAN_ACT_NO', 'LAN', 1, 3, NULL, '2020-08-27 07:58:24'),
(12, 'Saving Application', 'SAVING_APPLICATION', 'SAP', 1, 10, NULL, '2020-09-15 00:18:05'),
(13, 'Saving Account', 'SAVING_ACT', '000708083', 1, 3, NULL, '2020-09-16 02:18:34'),
(14, 'Recurring Deposit Application', 'RECURING_DEP_APP', 'RDA', 1, 3, NULL, '2020-08-27 07:58:24'),
(15, 'Recurring Deposit Account', 'REC_DEP_ACT', 'DSA', 1, 3, NULL, '2020-08-27 07:58:24'),
(16, 'Fixed Deposit Application', 'FIXT_DEP_APP', 'FDA', 1, 3, NULL, '2020-08-27 07:58:24'),
(17, 'Fixed Deposit Account', 'FIXED_DEPO_ACC', 'FDA', 1, 3, NULL, '2020-08-27 07:58:24'),
(18, 'MIS Deposit Application', 'MIS_DEP_APP', 'MSA', 1, 3, NULL, '2020-08-27 07:58:24'),
(19, 'MIS Deposit Account', 'MIS_DEP_ACC', 'MSA', 1, 3, NULL, '2020-08-27 07:58:24'),
(20, 'Gold Loan Application', 'GOLD_LOAN_APP', 'GLA', 1, 3, NULL, '2020-08-27 07:58:24'),
(21, 'Gold Loan Account', 'GOLD_LOAN_APP', 'GLA', 1, 3, NULL, '2020-08-27 07:58:24'),
(22, 'Property Loan Application', 'PROPERTY_LOAN_APP', 'PLA', 1, 3, NULL, '2020-08-27 07:58:24'),
(23, 'Property Loan Account', 'PROPERTY_LOAN_ACC', 'PLA', 1, 3, NULL, '2020-08-27 07:58:24'),
(24, 'Deposit Loan Application', 'DEPOSIT_LOAN', 'DL', 1, 3, NULL, '2020-08-27 07:58:25'),
(25, 'Deposit Loan Account', 'DEP_LOAN', 'DL', 1, 3, NULL, '2020-08-27 07:58:25'),
(26, 'Business Loan Application', 'BUSINESS_LOAN_APP', 'BLA', 1, 3, NULL, '2020-08-27 07:58:25'),
(27, 'Business Loan Account', 'BUSINESS_LOAN_ACCOUNT', 'BLA', 1, 3, NULL, '2020-08-27 07:58:25'),
(28, 'Cash Credit Application', 'CASH_CREDIT_APP', 'CCA', 1, 3, NULL, '2020-08-27 07:58:25'),
(29, 'Cash Credit Account', 'CASH_CREDIT_ACC', 'CCA', 1, 3, NULL, '2020-08-27 07:58:25'),
(30, 'Fixed EMI Loan Application', 'FIXED_EMI', 'FELA', 1, 3, NULL, '2020-08-27 07:58:25'),
(31, 'Fixed EMI Loan Account', 'FIXED_EMI_LOAN_ACC', 'FELA', 1, 3, NULL, '2020-08-27 07:58:25'),
(32, 'No EMI Loan Application', 'NO_EMI_LOAN', 'NEL', 1, 3, NULL, '2020-08-27 07:58:25'),
(33, 'No EMI Loan Account', 'NO_EMI_LOAN', 'NELA', 1, 3, NULL, '2020-08-27 07:58:25');

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

DROP TABLE IF EXISTS `admins`;
CREATE TABLE IF NOT EXISTS `admins` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `role_id` int(11) NOT NULL,
  `branch_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `avatar` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `role_id`, `branch_id`, `name`, `email`, `mobile`, `password`, `status`, `avatar`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 1, 'Super Admin', 'asif.sanix@gmail.com', '7894561230', '$2y$10$yddxmLD6rySE7N5XT1OR5uS.G1Oe/UNOYE34lW9gPQvcIq1wFWBDW', 1, NULL, '2019-03-27 00:00:00', '2019-03-28 09:04:06', NULL),
(3, 2, 1, 'Asif Jamal', 'asifjamal@yopmail.com', NULL, '$2y$10$XOdmM/9XvRgKzgE3uVTf9O4NMk48slxr7/8SMKR/LG0EY2nImMLSK', 1, NULL, '2019-08-08 17:09:35', '2019-08-08 17:27:11', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `admin_details`
--

DROP TABLE IF EXISTS `admin_details`;
CREATE TABLE IF NOT EXISTS `admin_details` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `admin_id` int(11) NOT NULL,
  `dob` date DEFAULT NULL,
  `mobile` varchar(255) DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `address` text,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `admin_password_resets`
--

DROP TABLE IF EXISTS `admin_password_resets`;
CREATE TABLE IF NOT EXISTS `admin_password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`(191))
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin_password_resets`
--

INSERT INTO `admin_password_resets` (`email`, `token`, `created_at`) VALUES
('asifjamal@yopmail.com', '$2y$10$J/boDihlUPMgBF7L2uPVjeaYlLxKjQ4Ifo25TfhwBOt3UCix0kkYm', '2019-06-16 12:06:57'),
('asif.sanix@gmail.com', '$2y$10$cNoidIFR/27b5zYgCugNGeto1P2Dr0uHNen4gUahwteuP1vCgURlm', '2019-08-08 06:19:27'),
('asifjamal@yopmail.com', '$2y$10$J/boDihlUPMgBF7L2uPVjeaYlLxKjQ4Ifo25TfhwBOt3UCix0kkYm', '2019-06-16 12:06:57'),
('asif.sanix@gmail.com', '$2y$10$cNoidIFR/27b5zYgCugNGeto1P2Dr0uHNen4gUahwteuP1vCgURlm', '2019-08-08 06:19:27'),
('asifjamal@yopmail.com', '$2y$10$J/boDihlUPMgBF7L2uPVjeaYlLxKjQ4Ifo25TfhwBOt3UCix0kkYm', '2019-06-16 12:06:57'),
('asif.sanix@gmail.com', '$2y$10$cNoidIFR/27b5zYgCugNGeto1P2Dr0uHNen4gUahwteuP1vCgURlm', '2019-08-08 06:19:27');

-- --------------------------------------------------------

--
-- Table structure for table `admin_role`
--

DROP TABLE IF EXISTS `admin_role`;
CREATE TABLE IF NOT EXISTS `admin_role` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `admin_id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin_role`
--

INSERT INTO `admin_role` (`id`, `admin_id`, `role_id`, `created_at`, `updated_at`) VALUES
(1, 3, 4, NULL, NULL),
(4, 7, 3, NULL, NULL),
(6, 3, 3, NULL, NULL),
(7, 1, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `agents`
--

DROP TABLE IF EXISTS `agents`;
CREATE TABLE IF NOT EXISTS `agents` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code` varchar(255) DEFAULT NULL,
  `associate_member_id` int(11) DEFAULT NULL,
  `date_of_joining` date DEFAULT NULL,
  `gender` varchar(100) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `agent_rank_id` int(11) DEFAULT NULL,
  `up_line_agent_id` int(11) DEFAULT NULL,
  `address_1` text,
  `address_2` text,
  `state` varchar(255) DEFAULT NULL,
  `district` varchar(255) DEFAULT NULL,
  `pincode` varchar(150) DEFAULT NULL,
  `date_of_birth` date DEFAULT NULL,
  `occupation` varchar(255) DEFAULT NULL,
  `mobile_no` varchar(150) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `aadhar_no` varchar(255) DEFAULT NULL,
  `pan` varchar(255) DEFAULT NULL,
  `father_name` varchar(255) DEFAULT NULL,
  `spouse_name` varchar(255) DEFAULT NULL,
  `ifs_code` varchar(255) DEFAULT NULL,
  `bank_name` varchar(255) DEFAULT NULL,
  `bank_address` text,
  `account_type` varchar(255) DEFAULT NULL,
  `bank_account` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `agents`
--

INSERT INTO `agents` (`id`, `code`, `associate_member_id`, `date_of_joining`, `gender`, `name`, `agent_rank_id`, `up_line_agent_id`, `address_1`, `address_2`, `state`, `district`, `pincode`, `date_of_birth`, `occupation`, `mobile_no`, `email`, `aadhar_no`, `pan`, `father_name`, `spouse_name`, `ifs_code`, `bank_name`, `bank_address`, `account_type`, `bank_account`, `created_at`, `updated_at`) VALUES
(2, 'AB1', 7, '2020-09-14', 'Female', 'adfasf nn', 2, NULL, 'jgvjh', 'dsfs', 'Andaman and Nicobar (AN)', 'dfsd', '456321', '2020-09-14', NULL, '7896541230', 'dfdsa@rfer.fre', 'dfsd', 'fdsf', 'dsfsd', 'dcfsd', 'cds', 'df', 'dsf', 'Current', 'ds', '2020-09-14 07:19:13', '2020-09-14 09:13:06'),
(3, 'AG001\n', 1, '2020-09-09', 'Female', 'sfgds', 2, NULL, NULL, 'dgvs', 'Andaman and Nicobar (AN)', 'dsfsdgs', '789654', '2020-09-08', NULL, '8945612365', 'gfsg@tgrt.gte', 'sdfsd', 'sgvs', 'sfsdg', 'sdf', 'sdgsd', 'vsdfgv', 'sdgv', 'Saving', 'sdgsr', '2020-09-14 07:24:56', '2020-09-14 07:24:56');

-- --------------------------------------------------------

--
-- Table structure for table `agent_rankings`
--

DROP TABLE IF EXISTS `agent_rankings`;
CREATE TABLE IF NOT EXISTS `agent_rankings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `rank` int(11) NOT NULL,
  `rank_name` varchar(255) NOT NULL,
  `rank_definition` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `agent_rankings`
--

INSERT INTO `agent_rankings` (`id`, `rank`, `rank_name`, `rank_definition`, `status`, `created_at`, `updated_at`) VALUES
(2, 13, 'senior mm', 'hgfghvbn bb mm', 1, '2020-09-13 08:54:41', '2020-09-13 09:07:36');

-- --------------------------------------------------------

--
-- Table structure for table `capitals`
--

DROP TABLE IF EXISTS `capitals`;
CREATE TABLE IF NOT EXISTS `capitals` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `admin_id` int(11) NOT NULL,
  `admin` varchar(255) NOT NULL,
  `capital_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `capitals`
--

INSERT INTO `capitals` (`id`, `admin_id`, `admin`, `capital_id`, `created_at`, `updated_at`) VALUES
(1, 1, 'Super Admin', 6, '2020-08-13 18:03:53', '2020-08-13 18:03:53'),
(2, 1, 'Super Admin', 6, '2020-08-13 18:09:46', '2020-08-13 18:09:46'),
(3, 1, 'Super Admin', 6, '2020-08-13 18:59:45', '2020-08-13 18:59:45'),
(4, 1, 'Super Admin', 6, '2020-08-14 00:31:39', '2020-08-14 00:31:39'),
(5, 1, 'Super Admin', 6, '2020-08-14 00:33:21', '2020-08-14 00:33:21');

-- --------------------------------------------------------

--
-- Table structure for table `company_profiles`
--

DROP TABLE IF EXISTS `company_profiles`;
CREATE TABLE IF NOT EXISTS `company_profiles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `company_name` varchar(150) DEFAULT NULL,
  `alias` varchar(255) DEFAULT NULL,
  `address_1` text,
  `address_2` text,
  `mobile_no` varchar(25) DEFAULT NULL,
  `landline_no` varchar(25) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `website_address` varchar(255) DEFAULT NULL,
  `cin` varchar(255) DEFAULT NULL,
  `gstin` varchar(255) DEFAULT NULL,
  `pan` varchar(150) DEFAULT NULL,
  `incorporation_date` date DEFAULT NULL,
  `authorised_capital` varchar(150) DEFAULT NULL,
  `paid_up_capital` varchar(150) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `state` varchar(255) DEFAULT NULL,
  `district` varchar(255) DEFAULT NULL,
  `pincode` int(20) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company_profiles`
--

INSERT INTO `company_profiles` (`id`, `company_name`, `alias`, `address_1`, `address_2`, `mobile_no`, `landline_no`, `email`, `website_address`, `cin`, `gstin`, `pan`, `incorporation_date`, `authorised_capital`, `paid_up_capital`, `country`, `state`, `district`, `pincode`, `created_at`, `updated_at`) VALUES
(1, 'Rainbow', 'rainbow', 'fdxgchvjbknm', 'zrxtcyvgubhinj', '94652236', '6854121', 'abc@chhv.bh', 'hjbjh', 'tyvubinokm', 'uvbhkjnlm;', 'txcyvguhbjnk', '2020-08-04', NULL, NULL, 'India', 'Chandigarh (CH)', 'ezxtcyvguhbjn', 123456, '2020-08-11 03:19:30', '2020-08-13 17:25:29');

-- --------------------------------------------------------

--
-- Table structure for table `districts`
--

DROP TABLE IF EXISTS `districts`;
CREATE TABLE IF NOT EXISTS `districts` (
  `id` int(8) NOT NULL DEFAULT '0',
  `state_id` int(8) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `districts`
--

INSERT INTO `districts` (`id`, `state_id`, `name`, `created_at`, `updated_at`) VALUES
(1, 1, 'North Andaman', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(2, 1, 'South Andaman', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(3, 1, 'Nicobar', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(4, 2, 'Adilabad', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(5, 2, 'Anantapur', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(6, 2, 'Chittoor', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(7, 2, 'East Godavari', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(8, 2, 'Guntur', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(9, 2, 'Hyderabad', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(10, 2, 'Karimnagar', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(11, 2, 'Khammam', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(12, 2, 'Krishna', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(13, 2, 'Kurnool', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(14, 2, 'Mahbubnagar', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(15, 2, 'Medak', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(16, 2, 'Nalgonda', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(17, 2, 'Nizamabad', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(18, 2, 'Prakasam', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(19, 2, 'Ranga Reddy', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(20, 2, 'Srikakulam', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(21, 2, 'Sri Potti Sri Ramulu Nellore', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(22, 2, 'Vishakhapatnam', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(23, 2, 'Vizianagaram', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(24, 2, 'Warangal', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(25, 2, 'West Godavari', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(26, 2, 'Cudappah', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(27, 3, 'Anjaw', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(28, 3, 'Changlang', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(29, 3, 'East Siang', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(30, 3, 'East Kameng', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(31, 3, 'Kurung Kumey', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(32, 3, 'Lohit', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(33, 3, 'Lower Dibang Valley', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(34, 3, 'Lower Subansiri', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(35, 3, 'Papum Pare', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(36, 3, 'Tawang', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(37, 3, 'Tirap', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(38, 3, 'Dibang Valley', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(39, 3, 'Upper Siang', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(40, 3, 'Upper Subansiri', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(41, 3, 'West Kameng', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(42, 3, 'West Siang', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(43, 4, 'Baksa', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(44, 4, 'Barpeta', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(45, 4, 'Bongaigaon', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(46, 4, 'Cachar', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(47, 4, 'Chirang', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(48, 4, 'Darrang', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(49, 4, 'Dhemaji', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(50, 4, 'Dima Hasao', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(51, 4, 'Dhubri', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(52, 4, 'Dibrugarh', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(53, 4, 'Goalpara', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(54, 4, 'Golaghat', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(55, 4, 'Hailakandi', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(56, 4, 'Jorhat', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(57, 4, 'Kamrup', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(58, 4, 'Kamrup Metropolitan', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(59, 4, 'Karbi Anglong', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(60, 4, 'Karimganj', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(61, 4, 'Kokrajhar', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(62, 4, 'Lakhimpur', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(63, 4, 'Morigaon', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(64, 4, 'Nagaon', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(65, 4, 'Nalbari', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(66, 4, 'Sivasagar', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(67, 4, 'Sonitpur', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(68, 4, 'Tinsukia', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(69, 4, 'Udalguri', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(70, 5, 'Araria', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(71, 5, 'Arwal', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(72, 5, 'Aurangabad', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(73, 5, 'Banka', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(74, 5, 'Begusarai', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(75, 5, 'Bhagalpur', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(76, 5, 'Bhojpur', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(77, 5, 'Buxar', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(78, 5, 'Darbhanga', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(79, 5, 'East Champaran', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(80, 5, 'Gaya', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(81, 5, 'Gopalganj', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(82, 5, 'Jamui', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(83, 5, 'Jehanabad', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(84, 5, 'Kaimur', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(85, 5, 'Katihar', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(86, 5, 'Khagaria', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(87, 5, 'Kishanganj', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(88, 5, 'Lakhisarai', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(89, 5, 'Madhepura', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(90, 5, 'Madhubani', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(91, 5, 'Munger', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(92, 5, 'Muzaffarpur', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(93, 5, 'Nalanda', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(94, 5, 'Nawada', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(95, 5, 'Patna', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(96, 5, 'Purnia', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(97, 5, 'Rohtas', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(98, 5, 'Saharsa', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(99, 5, 'Samastipur', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(100, 5, 'Saran', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(101, 5, 'Sheikhpura', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(102, 5, 'Sheohar', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(103, 5, 'Sitamarhi', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(104, 5, 'Siwan', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(105, 5, 'Supaul', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(106, 6, 'Chandigarh', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(107, 7, 'Bastar', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(108, 7, 'Bijapur', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(109, 7, 'Bilaspur', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(110, 7, 'Dantewada', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(111, 7, 'Dhamtari', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(112, 7, 'Durg', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(113, 7, 'Jashpur', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(114, 7, 'Janjgir-Champa', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(115, 7, 'Korba', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(116, 7, 'Koriya', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(117, 7, 'Kanker', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(118, 7, 'Kabirdham (formerly Kawardha)', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(119, 7, 'Mahasamund', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(120, 7, 'Narayanpur', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(121, 7, 'Raigarh', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(122, 7, 'Rajnandgaon', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(123, 7, 'Raipur', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(124, 7, 'Surguja', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(125, 8, 'Dadra and Nagar Haveli', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(126, 9, 'Daman', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(127, 9, 'Diu', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(128, 10, 'Central Delhi', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(129, 10, 'East Delhi', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(130, 10, 'New Delhi', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(131, 10, 'North Delhi', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(132, 10, 'North East Delhi', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(133, 10, 'North West Delhi', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(134, 10, 'South Delhi', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(135, 10, 'South West Delhi', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(136, 10, 'West Delhi', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(137, 11, 'North Goa', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(138, 11, 'South Goa', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(139, 12, 'Ahmedabad', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(140, 12, 'Amreli district', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(141, 12, 'Anand', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(142, 12, 'Banaskantha', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(143, 12, 'Bharuch', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(144, 12, 'Bhavnagar', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(145, 12, 'Dahod', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(146, 12, 'The Dangs', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(147, 12, 'Gandhinagar', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(148, 12, 'Jamnagar', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(149, 12, 'Junagadh', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(150, 12, 'Kutch', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(151, 12, 'Kheda', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(152, 12, 'Mehsana', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(153, 12, 'Narmada', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(154, 12, 'Navsari', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(155, 12, 'Patan', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(156, 12, 'Panchmahal', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(157, 12, 'Porbandar', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(158, 12, 'Rajkot', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(159, 12, 'Sabarkantha', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(160, 12, 'Surendranagar', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(161, 12, 'Surat', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(162, 12, 'Tapi', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(163, 12, 'Vadodara', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(164, 12, 'Valsad', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(165, 13, 'Ambala', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(166, 13, 'Bhiwani', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(167, 13, 'Faridabad', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(168, 13, 'Fatehabad', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(169, 13, 'Gurgaon', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(170, 13, 'Hissar', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(171, 13, 'Jhajjar', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(172, 13, 'Jind', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(173, 13, 'Karnal', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(174, 13, 'Kaithal', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(175, 13, 'Kurukshetra', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(176, 13, 'Mahendragarh', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(177, 13, 'Mewat', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(178, 13, 'Palwal', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(179, 13, 'Panchkula', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(180, 13, 'Panipat', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(181, 13, 'Rewari', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(182, 13, 'Rohtak', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(183, 13, 'Sirsa', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(184, 13, 'Sonipat', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(185, 13, 'Yamuna Nagar', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(186, 14, 'Bilaspur', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(187, 14, 'Chamba', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(188, 14, 'Hamirpur', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(189, 14, 'Kangra', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(190, 14, 'Kinnaur', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(191, 14, 'Kullu', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(192, 14, 'Lahaul and Spiti', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(193, 14, 'Mandi', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(194, 14, 'Shimla', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(195, 14, 'Sirmaur', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(196, 14, 'Solan', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(197, 14, 'Una', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(198, 15, 'Anantnag', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(199, 15, 'Badgam', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(200, 15, 'Bandipora', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(201, 15, 'Baramulla', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(202, 15, 'Doda', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(203, 15, 'Ganderbal', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(204, 15, 'Jammu', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(205, 15, 'Kargil', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(206, 15, 'Kathua', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(207, 15, 'Kishtwar', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(208, 15, 'Kupwara', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(209, 15, 'Kulgam', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(210, 15, 'Leh', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(211, 15, 'Poonch', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(212, 15, 'Pulwama', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(213, 15, 'Rajouri', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(214, 15, 'Ramban', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(215, 15, 'Reasi', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(216, 15, 'Samba', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(217, 15, 'Shopian', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(218, 15, 'Srinagar', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(219, 15, 'Udhampur', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(220, 16, 'Bokaro', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(221, 16, 'Chatra', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(222, 16, 'Deoghar', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(223, 16, 'Dhanbad', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(224, 16, 'Dumka', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(225, 16, 'East Singhbhum', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(226, 16, 'Garhwa', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(227, 16, 'Giridih', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(228, 16, 'Godda', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(229, 16, 'Gumla', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(230, 16, 'Hazaribag', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(231, 16, 'Jamtara', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(232, 16, 'Khunti', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(233, 16, 'Koderma', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(234, 16, 'Latehar', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(235, 16, 'Lohardaga', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(236, 16, 'Pakur', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(237, 16, 'Palamu', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(238, 16, 'Ramgarh', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(239, 16, 'Ranchi', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(240, 16, 'Sahibganj', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(241, 16, 'Seraikela Kharsawan', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(242, 16, 'Simdega', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(243, 16, 'West Singhbhum', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(244, 17, 'Bagalkot', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(245, 17, 'Bangalore Rural', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(246, 17, 'Bangalore Urban', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(247, 17, 'Belgaum', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(248, 17, 'Bellary', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(249, 17, 'Bidar', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(250, 17, 'Bijapur', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(251, 17, 'Chamarajnagar', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(252, 17, 'Chikkamagaluru', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(253, 17, 'Chikkaballapur', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(254, 17, 'Chitradurga', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(255, 17, 'Davanagere', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(256, 17, 'Dharwad', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(257, 17, 'Dakshina Kannada', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(258, 17, 'Gadag', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(259, 17, 'Gulbarga', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(260, 17, 'Hassan', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(261, 17, 'Haveri district', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(262, 17, 'Kodagu', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(263, 17, 'Kolar', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(264, 17, 'Koppal', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(265, 17, 'Mandya', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(266, 17, 'Mysore', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(267, 17, 'Raichur', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(268, 17, 'Shimoga', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(269, 17, 'Tumkur', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(270, 17, 'Udupi', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(271, 17, 'Uttara Kannada', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(272, 17, 'Ramanagara', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(273, 17, 'Yadgir', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(274, 18, 'Alappuzha', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(275, 18, 'Ernakulam', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(276, 18, 'Idukki', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(277, 18, 'Kannur', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(278, 18, 'Kasaragod', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(279, 18, 'Kollam', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(280, 18, 'Kottayam', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(281, 18, 'Kozhikode', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(282, 18, 'Malappuram', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(283, 18, 'Palakkad', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(284, 18, 'Pathanamthitta', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(285, 18, 'Thrissur', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(286, 18, 'Thiruvananthapuram', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(287, 18, 'Wayanad', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(288, 19, 'Lakshadweep', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(289, 20, 'Agar', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(290, 20, 'Alirajpur', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(291, 20, 'Anuppur', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(292, 20, 'Ashok Nagar', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(293, 20, 'Balaghat', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(294, 20, 'Barwani', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(295, 20, 'Betul', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(296, 20, 'Bhind', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(297, 20, 'Bhopal', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(298, 20, 'Burhanpur', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(299, 20, 'Chhatarpur', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(300, 20, 'Chhindwara', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(301, 20, 'Damoh', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(302, 20, 'Datia', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(303, 20, 'Dewas', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(304, 20, 'Dhar', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(305, 20, 'Dindori', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(306, 20, 'Guna', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(307, 20, 'Gwalior', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(308, 20, 'Harda', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(309, 20, 'Hoshangabad', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(310, 20, 'Indore', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(311, 20, 'Jabalpur', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(312, 20, 'Jhabua', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(313, 20, 'Katni', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(314, 20, 'Khandwa (East Nimar)', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(315, 20, 'Khargone (West Nimar)', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(316, 20, 'Mandla', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(317, 20, 'Mandsaur', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(318, 20, 'Morena', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(319, 20, 'Narsinghpur', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(320, 20, 'Neemuch', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(321, 20, 'Panna', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(322, 20, 'Raisen', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(323, 20, 'Rajgarh', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(324, 20, 'Ratlam', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(325, 20, 'Rewa', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(326, 20, 'Sagar', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(327, 20, 'Satna', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(328, 20, 'Sehore', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(329, 20, 'Seoni', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(330, 20, 'Shahdol', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(331, 20, 'Shajapur', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(332, 20, 'Sheopur', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(333, 20, 'Shivpuri', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(334, 20, 'Sidhi', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(335, 20, 'Singrauli', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(336, 20, 'Tikamgarh', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(337, 20, 'Ujjain', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(338, 20, 'Umaria', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(339, 20, 'Vidisha', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(340, 21, 'Ahmednagar', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(341, 21, 'Akola', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(342, 21, 'Amravati', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(343, 21, 'Aurangabad', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(344, 21, 'Beed', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(345, 21, 'Bhandara', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(346, 21, 'Buldhana', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(347, 21, 'Chandrapur', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(348, 21, 'Dhule', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(349, 21, 'Gadchiroli', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(350, 21, 'Gondia', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(351, 21, 'Hingoli', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(352, 21, 'Jalgaon', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(353, 21, 'Jalna', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(354, 21, 'Kolhapur', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(355, 21, 'Latur', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(356, 21, 'Mumbai City', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(357, 21, 'Mumbai suburban', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(358, 21, 'Nanded', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(359, 21, 'Nandurbar', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(360, 21, 'Nagpur', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(361, 21, 'Nashik', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(362, 21, 'Osmanabad', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(363, 21, 'Parbhani', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(364, 21, 'Pune', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(365, 21, 'Raigad', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(366, 21, 'Ratnagiri', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(367, 21, 'Sangli', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(368, 21, 'Satara', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(369, 21, 'Sindhudurg', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(370, 21, 'Solapur', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(371, 21, 'Thane', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(372, 21, 'Wardha', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(373, 21, 'Washim', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(374, 21, 'Yavatmal', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(375, 22, 'Bishnupur', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(376, 22, 'Churachandpur', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(377, 22, 'Chandel', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(378, 22, 'Imphal East', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(379, 22, 'Senapati', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(380, 22, 'Tamenglong', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(381, 22, 'Thoubal', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(382, 22, 'Ukhrul', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(383, 22, 'Imphal West', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(384, 23, 'East Garo Hills', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(385, 23, 'East Khasi Hills', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(386, 23, 'Jaintia Hills', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(387, 23, 'Ri Bhoi', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(388, 23, 'South Garo Hills', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(389, 23, 'West Garo Hills', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(390, 23, 'West Khasi Hills', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(391, 24, 'Aizawl', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(392, 24, 'Champhai', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(393, 24, 'Kolasib', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(394, 24, 'Lawngtlai', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(395, 24, 'Lunglei', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(396, 24, 'Mamit', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(397, 24, 'Saiha', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(398, 24, 'Serchhip', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(399, 25, 'Dimapur', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(400, 25, 'Kiphire', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(401, 25, 'Kohima', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(402, 25, 'Longleng', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(403, 25, 'Mokokchung', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(404, 25, 'Mon', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(405, 25, 'Peren', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(406, 25, 'Phek', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(407, 25, 'Tuensang', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(408, 25, 'Wokha', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(409, 25, 'Zunheboto', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(410, 26, 'Angul', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(411, 26, 'Boudh (Bauda)', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(412, 26, 'Bhadrak', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(413, 26, 'Balangir', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(414, 26, 'Bargarh (Baragarh)', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(415, 26, 'Balasore', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(416, 26, 'Cuttack', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(417, 26, 'Debagarh (Deogarh)', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(418, 26, 'Dhenkanal', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(419, 26, 'Ganjam', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(420, 26, 'Gajapati', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(421, 26, 'Jharsuguda', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(422, 26, 'Jajpur', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(423, 26, 'Jagatsinghpur', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(424, 26, 'Khordha', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(425, 26, 'Kendujhar (Keonjhar)', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(426, 26, 'Kalahandi', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(427, 26, 'Kandhamal', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(428, 26, 'Koraput', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(429, 26, 'Kendrapara', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(430, 26, 'Malkangiri', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(431, 26, 'Mayurbhanj', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(432, 26, 'Nabarangpur', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(433, 26, 'Nuapada', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(434, 26, 'Nayagarh', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(435, 26, 'Puri', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(436, 26, 'Rayagada', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(437, 26, 'Sambalpur', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(438, 26, 'Subarnapur (Sonepur)', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(439, 26, 'Sundergarh', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(440, 27, 'Karaikal', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(441, 27, 'Mahe', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(442, 27, 'Pondicherry', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(443, 27, 'Yanam', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(444, 28, 'Amritsar', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(445, 28, 'Barnala', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(446, 28, 'Bathinda', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(447, 28, 'Firozpur', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(448, 28, 'Faridkot', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(449, 28, 'Fatehgarh Sahib', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(450, 28, 'Fazilka[6]', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(451, 28, 'Gurdaspur', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(452, 28, 'Hoshiarpur', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(453, 28, 'Jalandhar', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(454, 28, 'Kapurthala', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(455, 28, 'Ludhiana', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(456, 28, 'Mansa', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(457, 28, 'Moga', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(458, 28, 'Sri Muktsar Sahib', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(459, 28, 'Pathankot', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(460, 28, 'Patiala', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(461, 28, 'Rupnagar', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(462, 28, 'Ajitgarh (Mohali)', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(463, 28, 'Sangrur', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(464, 28, 'Shahid Bhagat Singh Nagar', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(465, 28, 'Tarn Taran', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(466, 29, 'Ajmer', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(467, 29, 'Alwar', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(468, 29, 'Bikaner', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(469, 29, 'Barmer', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(470, 29, 'Banswara', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(471, 29, 'Bharatpur', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(472, 29, 'Baran', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(473, 29, 'Bundi', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(474, 29, 'Bhilwara', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(475, 29, 'Churu', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(476, 29, 'Chittorgarh', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(477, 29, 'Dausa', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(478, 29, 'Dholpur', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(479, 29, 'Dungapur', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(480, 29, 'Ganganagar', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(481, 29, 'Hanumangarh', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(482, 29, 'Jhunjhunu', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(483, 29, 'Jalore', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(484, 29, 'Jodhpur', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(485, 29, 'Jaipur', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(486, 29, 'Jaisalmer', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(487, 29, 'Jhalawar', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(488, 29, 'Karauli', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(489, 29, 'Kota', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(490, 29, 'Nagaur', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(491, 29, 'Pali', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(492, 29, 'Pratapgarh', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(493, 29, 'Rajsamand', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(494, 29, 'Sikar', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(495, 29, 'Sawai Madhopur', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(496, 29, 'Sirohi', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(497, 29, 'Tonk', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(498, 29, 'Udaipur', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(499, 30, 'East Sikkim', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(500, 30, 'North Sikkim', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(501, 30, 'South Sikkim', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(502, 30, 'West Sikkim', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(503, 31, 'Ariyalur', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(504, 31, 'Chennai', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(505, 31, 'Coimbatore', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(506, 31, 'Cuddalore', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(507, 31, 'Dharmapuri', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(508, 31, 'Dindigul', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(509, 31, 'Erode', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(510, 31, 'Kanchipuram', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(511, 31, 'Kanyakumari', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(512, 31, 'Karur', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(513, 31, 'Krishnagiri', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(514, 31, 'Madurai', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(515, 31, 'Nagapattinam', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(516, 31, 'Nilgiris', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(517, 31, 'Namakkal', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(518, 31, 'Perambalur', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(519, 31, 'Pudukkottai', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(520, 31, 'Ramanathapuram', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(521, 31, 'Salem', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(522, 31, 'Sivaganga', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(523, 31, 'Tirupur', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(524, 31, 'Tiruchirappalli', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(525, 31, 'Theni', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(526, 31, 'Tirunelveli', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(527, 31, 'Thanjavur', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(528, 31, 'Thoothukudi', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(529, 31, 'Tiruvallur', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(530, 31, 'Tiruvarur', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(531, 31, 'Tiruvannamalai', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(532, 31, 'Vellore', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(533, 31, 'Viluppuram', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(534, 31, 'Virudhunagar', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(535, 32, 'Dhalai', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(536, 32, 'North Tripura', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(537, 32, 'South Tripura', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(538, 32, 'Khowai[7]', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(539, 32, 'West Tripura', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(540, 33, 'Agra', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(541, 33, 'Aligarh', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(542, 33, 'Allahabad', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(543, 33, 'Ambedkar Nagar', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(544, 33, 'Auraiya', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(545, 33, 'Azamgarh', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(546, 33, 'Bagpat', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(547, 33, 'Bahraich', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(548, 33, 'Ballia', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(549, 33, 'Balrampur', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(550, 33, 'Banda', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(551, 33, 'Barabanki', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(552, 33, 'Bareilly', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(553, 33, 'Basti', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(554, 33, 'Bijnor', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(555, 33, 'Budaun', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(556, 33, 'Bulandshahr', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(557, 33, 'Chandauli', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(558, 33, 'Chhatrapati Shahuji Maharaj Nagar[8]', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(559, 33, 'Chitrakoot', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(560, 33, 'Deoria', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(561, 33, 'Etah', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(562, 33, 'Etawah', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(563, 33, 'Faizabad', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(564, 33, 'Farrukhabad', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(565, 33, 'Fatehpur', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(566, 33, 'Firozabad', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(567, 33, 'Gautam Buddh Nagar', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(568, 33, 'Ghaziabad', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(569, 33, 'Ghazipur', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(570, 33, 'Gonda', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(571, 33, 'Gorakhpur', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(572, 33, 'Hamirpur', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(573, 33, 'Hardoi', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(574, 33, 'Hathras', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(575, 33, 'Jalaun', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(576, 33, 'Jaunpur district', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(577, 33, 'Jhansi', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(578, 33, 'Jyotiba Phule Nagar', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(579, 33, 'Kannauj', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(580, 33, 'Kanpur', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(581, 33, 'Kanshi Ram Nagar', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(582, 33, 'Kaushambi', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(583, 33, 'Kushinagar', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(584, 33, 'Lakhimpur Kheri', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(585, 33, 'Lalitpur', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(586, 33, 'Lucknow', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(587, 33, 'Maharajganj', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(588, 33, 'Mahoba', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(589, 33, 'Mainpuri', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(590, 33, 'Mathura', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(591, 33, 'Mau', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(592, 33, 'Meerut', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(593, 33, 'Mirzapur', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(594, 33, 'Moradabad', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(595, 33, 'Muzaffarnagar', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(596, 33, 'Panchsheel Nagar district (Hapur)', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(597, 33, 'Pilibhit', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(598, 33, 'Pratapgarh', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(599, 33, 'Raebareli', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(600, 33, 'Ramabai Nagar (Kanpur Dehat)', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(601, 33, 'Rampur', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(602, 33, 'Saharanpur', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(603, 33, 'Sant Kabir Nagar', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(604, 33, 'Sant Ravidas Nagar', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(605, 33, 'Shahjahanpur', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(606, 33, 'Shamli[9]', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(607, 33, 'Shravasti', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(608, 33, 'Siddharthnagar', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(609, 33, 'Sitapur', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(610, 33, 'Sonbhadra', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(611, 33, 'Sultanpur', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(612, 33, 'Unnao', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(613, 33, 'Varanasi', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(614, 34, 'Almora', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(615, 34, 'Bageshwar', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(616, 34, 'Chamoli', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(617, 34, 'Champawat', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(618, 34, 'Dehradun', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(619, 34, 'Haridwar', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(620, 34, 'Nainital', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(621, 34, 'Pauri Garhwal', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(622, 34, 'Pithoragarh', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(623, 34, 'Rudraprayag', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(624, 34, 'Tehri Garhwal', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(625, 34, 'Udham Singh Nagar', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(626, 34, 'Uttarkashi', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(627, 35, 'Bankura', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(628, 35, 'Bardhaman', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(629, 35, 'Birbhum', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(630, 35, 'Cooch Behar', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(631, 35, 'Dakshin Dinajpur', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(632, 35, 'Darjeeling', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(633, 35, 'Hooghly', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(634, 35, 'Howrah', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(635, 35, 'Jalpaiguri', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(636, 35, 'Kolkata', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(637, 35, 'Maldah', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(638, 35, 'Murshidabad', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(639, 35, 'Nadia', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(640, 35, 'North 24 Parganas', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(641, 35, 'Paschim Medinipur', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(642, 35, 'Purba Medinipur', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(643, 35, 'Purulia', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(644, 35, 'South 24 Parganas', '2020-08-12 23:42:37', '2020-08-12 23:42:37'),
(645, 35, 'Uttar Dinajpur', '2020-08-12 23:42:37', '2020-08-12 23:42:37');

-- --------------------------------------------------------

--
-- Table structure for table `forms`
--

DROP TABLE IF EXISTS `forms`;
CREATE TABLE IF NOT EXISTS `forms` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `form_type` int(11) NOT NULL,
  `financial_year` varchar(120) NOT NULL,
  `submission_bate` date NOT NULL,
  `member_id` int(11) NOT NULL,
  `file` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `forms`
--

INSERT INTO `forms` (`id`, `form_type`, `financial_year`, `submission_bate`, `member_id`, `file`, `created_at`, `updated_at`) VALUES
(2, 1, '2019-2020', '2020-09-07', 6, 'storage/form/1599559405.png', '2020-09-08 09:26:33', '2020-09-08 10:03:25');

-- --------------------------------------------------------

--
-- Table structure for table `form_types`
--

DROP TABLE IF EXISTS `form_types`;
CREATE TABLE IF NOT EXISTS `form_types` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `form_types`
--

INSERT INTO `form_types` (`id`, `type`, `created_at`, `updated_at`) VALUES
(1, 'Form 15G/15H', '2020-09-07 00:00:00', '2020-09-07 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

DROP TABLE IF EXISTS `members`;
CREATE TABLE IF NOT EXISTS `members` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `branch_id` int(11) DEFAULT NULL,
  `membership_id` varchar(255) DEFAULT NULL,
  `user_type` int(11) DEFAULT NULL,
  `enrollment_date` varchar(255) DEFAULT NULL,
  `gender` varchar(20) DEFAULT NULL,
  `director_promoter` varchar(120) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `member_group` int(11) DEFAULT NULL,
  `introducer_member_name` int(11) DEFAULT NULL,
  `monthly_income` decimal(10,2) DEFAULT NULL,
  `address_1` varchar(255) DEFAULT NULL,
  `address_2` varchar(255) DEFAULT NULL,
  `country` varchar(100) DEFAULT NULL,
  `state` varchar(100) DEFAULT NULL,
  `district` varchar(255) DEFAULT NULL,
  `pincode` int(11) DEFAULT NULL,
  `date_of_birth` date DEFAULT NULL,
  `marital_status` varchar(100) DEFAULT NULL,
  `occupation` varchar(255) DEFAULT NULL,
  `mobile_no` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `pan` varchar(255) DEFAULT NULL,
  `aadhar_no` varchar(255) DEFAULT NULL,
  `relative_name` varchar(255) DEFAULT NULL,
  `mother_name` varchar(255) DEFAULT NULL,
  `din` varchar(255) DEFAULT NULL,
  `appointment_date` date DEFAULT NULL,
  `bank_name` varchar(255) DEFAULT NULL,
  `ifs_code` varchar(255) DEFAULT NULL,
  `bank_address` varchar(255) DEFAULT NULL,
  `bank_account` varchar(255) DEFAULT NULL,
  `account_type` varchar(120) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `branch_id`, `membership_id`, `user_type`, `enrollment_date`, `gender`, `director_promoter`, `name`, `member_group`, `introducer_member_name`, `monthly_income`, `address_1`, `address_2`, `country`, `state`, `district`, `pincode`, `date_of_birth`, `marital_status`, `occupation`, `mobile_no`, `email`, `pan`, `aadhar_no`, `relative_name`, `mother_name`, `din`, `appointment_date`, `bank_name`, `ifs_code`, `bank_address`, `bank_account`, `account_type`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, NULL, NULL, 1, '2020-09-01', 'Male', 'Director', 'dcsd', NULL, NULL, NULL, 'dsfvds', 'cdscds', 'India', 'Andaman and Nicobar (AN)', 'dsfvds', 741741, '2020-09-02', 'Married', 'asdfef', '7896641230', 'defwe@refget.fger', 'ff', 'fwfdwr', 'freg', 'fsdfsf', 'rgegre', '2020-09-02', 'gerger', 'gerger', 'greger', 'rege', 'Saving', '2020-09-03 16:06:18', '2020-09-03 16:06:18', NULL),
(2, NULL, NULL, 1, '2020-09-02', 'Male', 'Promote', 'Name', NULL, NULL, NULL, 'Address1', 'Address2', 'India', 'Andaman and Nicobar (AN)', 'Discrict', 123654, '2020-09-01', 'Married', 'Occupation', '7896541230', 'Email@gmail.com', '78dcsd55cds', '7896541230222', 'Relative Name', 'Mother Name', 'DIN', '2020-09-02', 'bbb', 'bbbbbbbbbbbbbbbbbbb', 'bbbbbbbbbb', 'bbbbbbbbbbbbbbbbbbbbbbbbbbbbb', 'Current', '2020-09-03 16:09:24', '2020-09-03 16:09:24', NULL),
(4, NULL, NULL, 1, '2020-09-02 00:00:00', 'Male', 'Promote', 'Name nnnnn mmmmm', NULL, NULL, NULL, 'Address1', 'Address2 ggkhbhbhvhj', 'India', 'Andaman and Nicobar (AN)', 'Discrict', 123654, '2020-09-01', 'Married', 'Occupation', '7896541230', 'Email@gmail.com', '78dcsd55cds', '7896541230222', 'Relative Name', 'Mother Name', 'DIN', '2020-09-02', 'bbb', 'bbbbbbbbbbbbbbbbbbb', 'bbbbbbbbbb', 'bbbbbbbbbbbbbbbbbbbbbbbbbbbbb', 'Current', '2020-09-03 17:20:55', '2020-09-03 17:20:55', NULL),
(6, NULL, NULL, 2, '2020-09-07 00:00:00', 'Male', NULL, 'Asif', 3, NULL, '75000.00', 'cdc', 'dwef', 'India', 'Andaman and Nicobar (AN)', 'cdscfsd', 1363547890, '2020-09-07', 'Married', 'dcsd', '7896540', 'fd@eger.gtr', 'cdsvsd', 'fsdfsdf', '56456', 'cdssd', 'cds', '2020-09-01', 'dsv', 'vdsvds', 'dsv', 'vdsvs', 'Saving', '2020-09-08 05:50:26', '2020-09-08 05:50:26', NULL),
(7, NULL, NULL, 2, '2020-09-07 00:00:00', 'Male', NULL, 'Asif 1', 3, NULL, '75000.00', 'cdc', 'dwef', 'India', 'Andaman and Nicobar (AN)', 'cdscfsd', 1363547890, '2020-09-07', 'Married', 'dcsd', '7896540', 'fd@eger.gtr', 'cdsvsd', 'fsdfsdf', '56456', 'cdssd', 'cds', '2020-09-01', 'dsv', 'vdsvds', 'dsv', 'vdsvs', 'Saving', '2020-09-08 05:50:26', '2020-09-08 05:50:26', NULL),
(8, NULL, NULL, 1, '2020-09-01', 'Male', 'Director', 'dcsd1', NULL, NULL, NULL, 'dsfvds', 'cdscds', 'India', 'Andaman and Nicobar (AN)', 'dsfvds', 741741, '2020-09-02', 'Married', 'asdfef', '7896641230', 'defwe@refget.fger', 'ff', 'fwfdwr', 'freg', 'fsdfsf', 'rgegre', '2020-09-02', 'gerger', 'gerger', 'greger', 'rege', 'Saving', '2020-09-03 16:06:18', '2020-09-03 16:06:18', NULL),
(9, NULL, NULL, 1, '2020-09-01', 'Male', 'Director', 'dcsdgggbg', NULL, NULL, NULL, 'dsfvds', 'cdscds', 'India', 'Andaman and Nicobar (AN)', 'dsfvds', 741741, '2020-09-02', 'Married', 'asdfef', '7896641230', 'defwe@refget.fger', 'ff', 'fwfdwr', 'freg', 'fsdfsf', 'rgegre', '2020-09-02', 'gerger', 'gerger', 'greger', 'rege', 'Saving', '2020-09-03 16:06:18', '2020-09-03 16:06:18', NULL),
(10, NULL, NULL, 1, '2020-09-01', 'Male', 'Director', 'dcsddfbethbtr', NULL, NULL, NULL, 'dsfvds', 'cdscds', 'India', 'Andaman and Nicobar (AN)', 'dsfvds', 741741, '2020-09-02', 'Married', 'asdfef', '7896641230', 'defwe@refget.fger', 'ff', 'fwfdwr', 'freg', 'fsdfsf', 'rgegre', '2020-09-02', 'gerger', 'gerger', 'greger', 'rege', 'Saving', '2020-09-03 16:06:18', '2020-09-03 16:06:18', NULL),
(11, NULL, NULL, 1, '2020-09-01', 'Male', 'Director', 'wrgfegvfbtrbh', NULL, NULL, NULL, 'dsfvds', 'cdscds', 'India', 'Andaman and Nicobar (AN)', 'dsfvds', 741741, '2020-09-02', 'Married', 'asdfef', '7896641230', 'defwe@refget.fger', 'ff', 'fwfdwr', 'freg', 'fsdfsf', 'rgegre', '2020-09-02', 'gerger', 'gerger', 'greger', 'rege', 'Saving', '2020-09-03 16:06:18', '2020-09-03 16:06:18', NULL),
(12, NULL, NULL, 1, '2020-09-01', 'Male', 'Director', 'wrgfeewfrwgevdfbtgvfbtrbh', NULL, NULL, NULL, 'dsfvds', 'cdscds', 'India', 'Andaman and Nicobar (AN)', 'dsfvds', 741741, '2020-09-02', 'Married', 'asdfef', '7896641230', 'defwe@refget.fger', 'ff', 'fwfdwr', 'freg', 'fsdfsf', 'rgegre', '2020-09-02', 'gerger', 'gerger', 'greger', 'rege', 'Saving', '2020-09-03 16:06:18', '2020-09-03 16:06:18', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `member_groups`
--

DROP TABLE IF EXISTS `member_groups`;
CREATE TABLE IF NOT EXISTS `member_groups` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `parent_id` int(11) NOT NULL DEFAULT '0',
  `remark` varchar(25) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `updated_at` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `member_groups`
--

INSERT INTO `member_groups` (`id`, `name`, `parent_id`, `remark`, `created_at`, `updated_at`) VALUES
(1, 'India', 0, NULL, '2020-08-23 08:02:19', '2020-08-23 08:02:19'),
(3, 'Patna', 1, NULL, '2020-08-23 08:22:12', '2020-08-23 08:22:12'),
(4, 'Jharkhand', 1, NULL, '2020-08-23 08:26:54', '2020-08-23 08:26:54'),
(5, 'Anshu', 4, NULL, '2020-08-26 04:29:31', '2020-08-26 04:29:31');

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

DROP TABLE IF EXISTS `menus`;
CREATE TABLE IF NOT EXISTS `menus` (
  `slug` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `icon` varchar(255) DEFAULT NULL,
  `parent` varchar(255) DEFAULT NULL,
  `ordering` int(11) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  PRIMARY KEY (`slug`),
  UNIQUE KEY `slug` (`slug`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`slug`, `name`, `icon`, `parent`, `ordering`, `status`) VALUES
('account_series', 'Account Series', NULL, 'setting', 3, 1),
('admin', 'Admin', NULL, NULL, 1, 1),
('agent', 'Agent', NULL, 'agents', 1, 1),
('agents', 'Agents', NULL, NULL, 5, 1),
('agent_ranking', 'Agent Ranking', NULL, 'agents', 0, 1),
('bread', 'Bread', 'ft-target', 'setting', 2, 1),
('company_profile', 'Company Profile', 'fa fa-home', 'master_record', 0, 1),
('dashboard', 'Dashboard', 'ft-stop-circle', NULL, 0, 1),
('director_promoter', 'Director Promoter', NULL, 'master_record', 2, 1),
('form', 'Form', NULL, 'master_record', 4, 1),
('master_record', 'Master Record', NULL, NULL, 2, 1),
('member', 'Member', NULL, 'master_record', 5, 1),
('member_group', 'Member Group', NULL, 'master_record', 3, 1),
('menu', 'Menu', NULL, 'setting', 1, 1),
('paid_up_authorised_capital', 'Paid Up Authorised Capital', NULL, 'master_record', 1, 1),
('recurring_deposit', 'Recurring Deposit', NULL, NULL, 3, 1),
('recurring_deposit_account', 'Recurring Deposit Account', NULL, 'recurring_deposit', 2, 1),
('recurring_deposit_application', 'Recurring Deposit Application', NULL, 'recurring_deposit', 1, 1),
('recurring_deposit_scheme', 'Recurring Deposit Scheme', NULL, 'recurring_deposit', 0, 1),
('role', 'Role', NULL, 'setting', 0, 1),
('saving_account', 'Saving Account', NULL, 'saving_accounts_setting', 2, 1),
('saving_accounts_setting', 'Saving Accounts', NULL, NULL, 4, 1),
('saving_account_application', 'Saving Account Application', NULL, 'saving_accounts_setting', 1, 1),
('saving_account_scheme', 'Saving Account Scheme', NULL, 'saving_accounts_setting', 0, 1),
('setting', 'Setting', 'ft-settings', NULL, 7, 1),
('site_setting', 'Site Setting', 'ft-sliders', NULL, 6, 1),
('un_encumbered_deposit', 'Un Encumbered Deposit', NULL, 'master_record', 6, 1);

-- --------------------------------------------------------

--
-- Table structure for table `paid_up_authorised_capitals`
--

DROP TABLE IF EXISTS `paid_up_authorised_capitals`;
CREATE TABLE IF NOT EXISTS `paid_up_authorised_capitals` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `branch_id` int(11) DEFAULT NULL,
  `paid_up_capital` decimal(10,2) NOT NULL,
  `authorised_capital` decimal(10,2) NOT NULL,
  `date` date NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `paid_up_authorised_capitals`
--

INSERT INTO `paid_up_authorised_capitals` (`id`, `branch_id`, `paid_up_capital`, `authorised_capital`, `date`, `created_at`, `updated_at`, `deleted_at`) VALUES
(2, NULL, '500.00', '200.00', '2020-08-12', '2020-08-13 18:02:41', '2020-08-13 18:02:41', NULL),
(3, NULL, '500.00', '200.00', '2020-08-12', '2020-08-13 18:02:59', '2020-08-13 18:02:59', NULL),
(4, NULL, '500.00', '200.00', '2020-08-12', '2020-08-13 18:03:17', '2020-08-13 18:03:17', NULL),
(5, NULL, '500.00', '200.00', '2020-08-12', '2020-08-13 18:03:34', '2020-08-13 18:03:34', NULL),
(6, NULL, '15000.00', '20000.00', '2020-08-10', '2020-08-13 18:03:53', '2020-08-13 18:59:45', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

DROP TABLE IF EXISTS `permissions`;
CREATE TABLE IF NOT EXISTS `permissions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `menu_slug` varchar(200) DEFAULT NULL,
  `permission_key` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `key` (`permission_key`)
) ENGINE=InnoDB AUTO_INCREMENT=142 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `menu_slug`, `permission_key`) VALUES
(1, 'role', 'browse_role'),
(2, 'role', 'read_role'),
(3, 'role', 'add_role'),
(4, 'role', 'edit_role'),
(5, 'role', 'delete_role'),
(6, 'menu', 'browse_menu'),
(7, 'menu', 'read_menu'),
(8, 'menu', 'add_menu'),
(9, 'menu', 'edit_menu'),
(10, 'menu', 'delete_menu'),
(11, 'setting', 'browse_setting'),
(12, 'dashboard', 'browse_dashboard'),
(13, 'bread', 'browse_bread'),
(14, 'bread', 'read_bread'),
(15, 'bread', 'add_bread'),
(16, 'bread', 'edit_bread'),
(17, 'bread', 'delete_bread'),
(18, 'site_setting', 'browse_site_setting'),
(19, 'site_setting', 'read_site_setting'),
(20, 'site_setting', 'add_site_setting'),
(21, 'site_setting', 'edit_site_setting'),
(22, 'site_setting', 'delete_site_setting'),
(23, 'site_setting', 'logo_site_setting'),
(24, 'admin', 'browse_admin'),
(25, 'admin', 'read_admin'),
(26, 'admin', 'add_admin'),
(27, 'admin', 'edit_admin'),
(28, 'admin', 'delete_admin'),
(29, 'company_profile', 'browse_company_profile'),
(30, 'company_profile', 'edit_company_profile'),
(41, 'paid_up_authorised_capital', 'browse_paid_up_authorised_capital'),
(42, 'paid_up_authorised_capital', 'read_paid_up_authorised_capital'),
(43, 'paid_up_authorised_capital', 'add_paid_up_authorised_capital'),
(44, 'paid_up_authorised_capital', 'edit_paid_up_authorised_capital'),
(45, 'paid_up_authorised_capital', 'delete_paid_up_authorised_capital'),
(46, 'director_promoter', 'browse_director_promoter'),
(47, 'director_promoter', 'read_director_promoter'),
(48, 'director_promoter', 'add_director_promoter'),
(49, 'director_promoter', 'edit_director_promoter'),
(50, 'director_promoter', 'delete_director_promoter'),
(51, 'account_series', 'browse_account_series'),
(52, 'account_series', 'read_account_series'),
(53, 'account_series', 'add_account_series'),
(54, 'account_series', 'edit_account_series'),
(55, 'account_series', 'delete_account_series'),
(56, 'member_group', 'browse_member_group'),
(57, 'member_group', 'read_member_group'),
(58, 'member_group', 'add_member_group'),
(59, 'member_group', 'edit_member_group'),
(60, 'member_group', 'delete_member_group'),
(66, 'member', 'browse_member'),
(67, 'member', 'read_member'),
(68, 'member', 'add_member'),
(69, 'member', 'edit_member'),
(70, 'member', 'delete_member'),
(71, 'form', 'browse_form'),
(72, 'form', 'read_form'),
(73, 'form', 'add_form'),
(74, 'form', 'edit_form'),
(75, 'form', 'delete_form'),
(76, 'un_encumbered_deposit', 'browse_un_encumbered_deposit'),
(77, 'un_encumbered_deposit', 'read_un_encumbered_deposit'),
(78, 'un_encumbered_deposit', 'add_un_encumbered_deposit'),
(79, 'un_encumbered_deposit', 'edit_un_encumbered_deposit'),
(80, 'un_encumbered_deposit', 'delete_un_encumbered_deposit'),
(81, 'saving_account', 'browse_saving_account'),
(82, 'saving_account', 'read_saving_account'),
(83, 'saving_account', 'add_saving_account'),
(84, 'saving_account', 'edit_saving_account'),
(85, 'saving_account', 'delete_saving_account'),
(86, 'saving_account_scheme', 'browse_saving_account_scheme'),
(87, 'saving_account_scheme', 'read_saving_account_scheme'),
(88, 'saving_account_scheme', 'add_saving_account_scheme'),
(89, 'saving_account_scheme', 'edit_saving_account_scheme'),
(90, 'saving_account_scheme', 'delete_saving_account_scheme'),
(101, 'saving_account_application', 'browse_saving_account_application'),
(102, 'saving_account_application', 'read_saving_account_application'),
(103, 'saving_account_application', 'add_saving_account_application'),
(104, 'saving_account_application', 'edit_saving_account_application'),
(105, 'saving_account_application', 'delete_saving_account_application'),
(106, 'agent', 'browse_agent'),
(107, 'agent', 'read_agent'),
(108, 'agent', 'add_agent'),
(109, 'agent', 'edit_agent'),
(110, 'agent', 'delete_agent'),
(116, 'agent_ranking', 'browse_agent_ranking'),
(117, 'agent_ranking', 'read_agent_ranking'),
(118, 'agent_ranking', 'add_agent_ranking'),
(119, 'agent_ranking', 'edit_agent_ranking'),
(120, 'agent_ranking', 'delete_agent_ranking'),
(121, 'saving_account_application', 'status_saving_account_application'),
(127, 'recurring_deposit_scheme', 'browse_recurring_deposit_scheme'),
(128, 'recurring_deposit_scheme', 'read_recurring_deposit_scheme'),
(129, 'recurring_deposit_scheme', 'add_recurring_deposit_scheme'),
(130, 'recurring_deposit_scheme', 'edit_recurring_deposit_scheme'),
(131, 'recurring_deposit_scheme', 'delete_recurring_deposit_scheme'),
(132, 'recurring_deposit_application', 'browse_recurring_deposit_application'),
(133, 'recurring_deposit_application', 'read_recurring_deposit_application'),
(134, 'recurring_deposit_application', 'add_recurring_deposit_application'),
(135, 'recurring_deposit_application', 'edit_recurring_deposit_application'),
(136, 'recurring_deposit_application', 'delete_recurring_deposit_application'),
(137, 'recurring_deposit_account', 'browse_recurring_deposit_account'),
(138, 'recurring_deposit_account', 'read_recurring_deposit_account'),
(139, 'recurring_deposit_account', 'add_recurring_deposit_account'),
(140, 'recurring_deposit_account', 'edit_recurring_deposit_account'),
(141, 'recurring_deposit_account', 'delete_recurring_deposit_account');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
CREATE TABLE IF NOT EXISTS `roles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `display_name` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `display_name`, `created_at`, `updated_at`) VALUES
(1, 'root', 'Super Admin', '2019-03-28 06:21:03', '2019-03-28 06:21:03'),
(2, 'Admin', NULL, '2019-08-08 16:03:49', '2019-08-08 16:03:49');

-- --------------------------------------------------------

--
-- Table structure for table `role_permissions`
--

DROP TABLE IF EXISTS `role_permissions`;
CREATE TABLE IF NOT EXISTS `role_permissions` (
  `role_id` int(11) NOT NULL,
  `permission_key` varchar(255) NOT NULL,
  UNIQUE KEY `role_id_2` (`role_id`,`permission_key`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `role_permissions`
--

INSERT INTO `role_permissions` (`role_id`, `permission_key`) VALUES
(1, 'add_account_series'),
(1, 'add_admin'),
(1, 'add_agent'),
(1, 'add_agent_ranking'),
(1, 'add_bread'),
(1, 'add_director_promoter'),
(1, 'add_form'),
(1, 'add_member'),
(1, 'add_member_group'),
(1, 'add_menu'),
(1, 'add_paid_up_authorised_capital'),
(1, 'add_recurring_deposit_account'),
(1, 'add_recurring_deposit_application'),
(1, 'add_recurring_deposit_scheme'),
(1, 'add_role'),
(1, 'add_saving_account_application'),
(1, 'add_saving_account_scheme'),
(1, 'add_site_setting'),
(1, 'add_un_encumbered_deposit'),
(1, 'browse_account_series'),
(1, 'browse_admin'),
(1, 'browse_agent'),
(1, 'browse_agent_ranking'),
(1, 'browse_bread'),
(1, 'browse_company_profile'),
(1, 'browse_dashboard'),
(1, 'browse_director_promoter'),
(1, 'browse_form'),
(1, 'browse_member'),
(1, 'browse_member_group'),
(1, 'browse_menu'),
(1, 'browse_paid_up_authorised_capital'),
(1, 'browse_recurring_deposit_account'),
(1, 'browse_recurring_deposit_application'),
(1, 'browse_recurring_deposit_scheme'),
(1, 'browse_role'),
(1, 'browse_saving_account'),
(1, 'browse_saving_account_application'),
(1, 'browse_saving_account_scheme'),
(1, 'browse_setting'),
(1, 'browse_site_setting'),
(1, 'browse_un_encumbered_deposit'),
(1, 'delete_account_series'),
(1, 'delete_admin'),
(1, 'delete_agent'),
(1, 'delete_agent_ranking'),
(1, 'delete_bread'),
(1, 'delete_director_promoter'),
(1, 'delete_form'),
(1, 'delete_member'),
(1, 'delete_member_group'),
(1, 'delete_menu'),
(1, 'delete_paid_up_authorised_capital'),
(1, 'delete_recurring_deposit_account'),
(1, 'delete_recurring_deposit_application'),
(1, 'delete_recurring_deposit_scheme'),
(1, 'delete_role'),
(1, 'delete_saving_account_application'),
(1, 'delete_saving_account_scheme'),
(1, 'delete_site_setting'),
(1, 'delete_un_encumbered_deposit'),
(1, 'edit_account_series'),
(1, 'edit_admin'),
(1, 'edit_agent'),
(1, 'edit_agent_ranking'),
(1, 'edit_bread'),
(1, 'edit_company_profile'),
(1, 'edit_director_promoter'),
(1, 'edit_form'),
(1, 'edit_member'),
(1, 'edit_member_group'),
(1, 'edit_menu'),
(1, 'edit_paid_up_authorised_capital'),
(1, 'edit_recurring_deposit_account'),
(1, 'edit_recurring_deposit_application'),
(1, 'edit_recurring_deposit_scheme'),
(1, 'edit_role'),
(1, 'edit_saving_account_application'),
(1, 'edit_saving_account_scheme'),
(1, 'edit_site_setting'),
(1, 'edit_un_encumbered_deposit'),
(1, 'logo_site_setting'),
(1, 'read_account_series'),
(1, 'read_admin'),
(1, 'read_agent'),
(1, 'read_agent_ranking'),
(1, 'read_bread'),
(1, 'read_director_promoter'),
(1, 'read_form'),
(1, 'read_member'),
(1, 'read_member_group'),
(1, 'read_menu'),
(1, 'read_paid_up_authorised_capital'),
(1, 'read_recurring_deposit_account'),
(1, 'read_recurring_deposit_application'),
(1, 'read_recurring_deposit_scheme'),
(1, 'read_role'),
(1, 'read_saving_account'),
(1, 'read_saving_account_application'),
(1, 'read_saving_account_scheme'),
(1, 'read_site_setting'),
(1, 'read_un_encumbered_deposit'),
(1, 'status_saving_account_application'),
(2, 'add_account_series'),
(2, 'add_admin'),
(2, 'add_bread'),
(2, 'add_director_promoter'),
(2, 'add_member_group'),
(2, 'add_menu'),
(2, 'add_paid_up_authorised_capital'),
(2, 'add_role'),
(2, 'add_site_setting'),
(2, 'browse_account_series'),
(2, 'browse_admin'),
(2, 'browse_bread'),
(2, 'browse_company_profile'),
(2, 'browse_dashboard'),
(2, 'browse_director_promoter'),
(2, 'browse_member_group'),
(2, 'browse_menu'),
(2, 'browse_paid_up_authorised_capital'),
(2, 'browse_role'),
(2, 'browse_setting'),
(2, 'browse_site_setting'),
(2, 'delete_account_series'),
(2, 'delete_admin'),
(2, 'delete_bread'),
(2, 'delete_director_promoter'),
(2, 'delete_member_group'),
(2, 'delete_menu'),
(2, 'delete_paid_up_authorised_capital'),
(2, 'delete_role'),
(2, 'delete_site_setting'),
(2, 'edit_account_series'),
(2, 'edit_admin'),
(2, 'edit_bread'),
(2, 'edit_company_profile'),
(2, 'edit_director_promoter'),
(2, 'edit_member_group'),
(2, 'edit_menu'),
(2, 'edit_paid_up_authorised_capital'),
(2, 'edit_role'),
(2, 'edit_site_setting'),
(2, 'logo_site_setting'),
(2, 'read_account_series'),
(2, 'read_admin'),
(2, 'read_bread'),
(2, 'read_director_promoter'),
(2, 'read_member_group'),
(2, 'read_menu'),
(2, 'read_paid_up_authorised_capital'),
(2, 'read_role'),
(2, 'read_site_setting');

-- --------------------------------------------------------

--
-- Table structure for table `saving_accounts`
--

DROP TABLE IF EXISTS `saving_accounts`;
CREATE TABLE IF NOT EXISTS `saving_accounts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `application_id` int(11) NOT NULL,
  `account_no` varchar(255) NOT NULL,
  `member_id` int(11) NOT NULL,
  `scheme_id` int(11) NOT NULL,
  `agent_id` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `saving_accounts`
--

INSERT INTO `saving_accounts` (`id`, `application_id`, `account_no`, `member_id`, `scheme_id`, `agent_id`, `status`, `created_at`, `updated_at`) VALUES
(3, 1, '0007080831', 6, 2, 3, 1, '2020-09-16 07:52:47', '2020-09-16 07:52:47');

-- --------------------------------------------------------

--
-- Table structure for table `saving_account_applications`
--

DROP TABLE IF EXISTS `saving_account_applications`;
CREATE TABLE IF NOT EXISTS `saving_account_applications` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `application_no` varchar(255) DEFAULT NULL,
  `member_id` int(11) DEFAULT NULL,
  `agent_id` int(11) DEFAULT NULL,
  `scheme_id` int(11) DEFAULT NULL,
  `application_date` date DEFAULT NULL,
  `joint_ac_holder_id` int(11) DEFAULT NULL,
  `minor_name_id` int(11) DEFAULT NULL,
  `opening_amount` decimal(10,2) DEFAULT NULL,
  `pay_mode` varchar(255) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0' COMMENT '0=submit 1=approved  2=cancel',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `saving_account_applications`
--

INSERT INTO `saving_account_applications` (`id`, `application_no`, `member_id`, `agent_id`, `scheme_id`, `application_date`, `joint_ac_holder_id`, `minor_name_id`, `opening_amount`, `pay_mode`, `status`, `created_at`, `updated_at`) VALUES
(1, 'SAP1', 6, 3, 2, '2020-09-14', 7, NULL, '200.00', 'Cheque', 1, '2020-09-14 11:59:25', '2020-09-16 07:52:47');

-- --------------------------------------------------------

--
-- Table structure for table `saving_account_schemes`
--

DROP TABLE IF EXISTS `saving_account_schemes`;
CREATE TABLE IF NOT EXISTS `saving_account_schemes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `scheme_code` varchar(100) NOT NULL,
  `interest_payout` varchar(100) NOT NULL,
  `minimum_balance` decimal(10,2) NOT NULL,
  `name` varchar(255) NOT NULL,
  `interest_rate` decimal(10,2) NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `saving_account_schemes`
--

INSERT INTO `saving_account_schemes` (`id`, `scheme_code`, `interest_payout`, `minimum_balance`, `name`, `interest_rate`, `is_active`, `created_at`, `updated_at`) VALUES
(2, 'SAV123', 'Yearly', '2000.00', 'Scheme 1', '20.00', 0, '2020-09-14 11:18:10', '2020-09-14 11:18:10');

-- --------------------------------------------------------

--
-- Table structure for table `site_settings`
--

DROP TABLE IF EXISTS `site_settings`;
CREATE TABLE IF NOT EXISTS `site_settings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `site_title` varchar(255) DEFAULT NULL,
  `site_description` text,
  `logo` varchar(255) DEFAULT NULL,
  `favicon` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `site_settings`
--

INSERT INTO `site_settings` (`id`, `site_title`, `site_description`, `logo`, `favicon`, `created_at`, `updated_at`) VALUES
(1, 'Nidhi Bank', 'Banking', 'storage/sitesetting/logo.png', 'storage/sitesetting/favicon.png', NULL, '2020-08-12 14:07:03');

-- --------------------------------------------------------

--
-- Table structure for table `states`
--

DROP TABLE IF EXISTS `states`;
CREATE TABLE IF NOT EXISTS `states` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `states`
--

INSERT INTO `states` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Andaman and Nicobar (AN)', '2020-08-12 23:43:16', '2020-08-12 23:43:16'),
(2, 'Andhra Pradesh (AP)', '2020-08-12 23:43:16', '2020-08-12 23:43:16'),
(3, 'Arunachal Pradesh (AR)', '2020-08-12 23:43:16', '2020-08-12 23:43:16'),
(4, 'Assam (AS)', '2020-08-12 23:43:16', '2020-08-12 23:43:16'),
(5, 'Bihar (BR)', '2020-08-12 23:43:16', '2020-08-12 23:43:16'),
(6, 'Chandigarh (CH)', '2020-08-12 23:43:16', '2020-08-12 23:43:16'),
(7, 'Chhattisgarh (CG)', '2020-08-12 23:43:16', '2020-08-12 23:43:16'),
(8, 'Dadra and Nagar Haveli (DN)', '2020-08-12 23:43:16', '2020-08-12 23:43:16'),
(9, 'Daman and Diu (DD)', '2020-08-12 23:43:16', '2020-08-12 23:43:16'),
(10, 'Delhi (DL)', '2020-08-12 23:43:16', '2020-08-12 23:43:16'),
(11, 'Goa (GA)', '2020-08-12 23:43:16', '2020-08-12 23:43:16'),
(12, 'Gujarat (GJ)', '2020-08-12 23:43:16', '2020-08-12 23:43:16'),
(13, 'Haryana (HR)', '2020-08-12 23:43:16', '2020-08-12 23:43:16'),
(14, 'Himachal Pradesh (HP)', '2020-08-12 23:43:16', '2020-08-12 23:43:16'),
(15, 'Jammu and Kashmir (JK)', '2020-08-12 23:43:16', '2020-08-12 23:43:16'),
(16, 'Jharkhand (JH)', '2020-08-12 23:43:16', '2020-08-12 23:43:16'),
(17, 'Karnataka (KA)', '2020-08-12 23:43:16', '2020-08-12 23:43:16'),
(18, 'Kerala (KL)', '2020-08-12 23:43:16', '2020-08-12 23:43:16'),
(19, 'Lakshdweep (LD)', '2020-08-12 23:43:16', '2020-08-12 23:43:16'),
(20, 'Madhya Pradesh (MP)', '2020-08-12 23:43:16', '2020-08-12 23:43:16'),
(21, 'Maharashtra (MH)', '2020-08-12 23:43:16', '2020-08-12 23:43:16'),
(22, 'Manipur (MN)', '2020-08-12 23:43:16', '2020-08-12 23:43:16'),
(23, 'Meghalaya (ML)', '2020-08-12 23:43:16', '2020-08-12 23:43:16'),
(24, 'Mizoram (MZ)', '2020-08-12 23:43:16', '2020-08-12 23:43:16'),
(25, 'Nagaland (NL)', '2020-08-12 23:43:16', '2020-08-12 23:43:16'),
(26, 'Odisha (OD)', '2020-08-12 23:43:16', '2020-08-12 23:43:16'),
(27, 'Puducherry (PY)', '2020-08-12 23:43:16', '2020-08-12 23:43:16'),
(28, 'Punjab (PB)', '2020-08-12 23:43:16', '2020-08-12 23:43:16'),
(29, 'Rajasthan (RJ)', '2020-08-12 23:43:16', '2020-08-12 23:43:16'),
(30, 'Sikkim (SK)', '2020-08-12 23:43:16', '2020-08-12 23:43:16'),
(31, 'Tamil Nadu (TN)', '2020-08-12 23:43:16', '2020-08-12 23:43:16'),
(32, 'Tripura (TR)', '2020-08-12 23:43:16', '2020-08-12 23:43:16'),
(33, 'Uttar Pradesh (UP)', '2020-08-12 23:43:16', '2020-08-12 23:43:16'),
(34, 'Uttarakhand (UK)', '2020-08-12 23:43:16', '2020-08-12 23:43:16'),
(35, 'West Bengal (WB)', '2020-08-12 23:43:16', '2020-08-12 23:43:16');

-- --------------------------------------------------------

--
-- Table structure for table `un_encumbered_deposits`
--

DROP TABLE IF EXISTS `un_encumbered_deposits`;
CREATE TABLE IF NOT EXISTS `un_encumbered_deposits` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `deposit_type` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `bank_po_name` varchar(255) NOT NULL,
  `fd_no` varchar(255) NOT NULL,
  `fd_amount` decimal(10,2) NOT NULL,
  `annual_interest_rate` decimal(10,2) NOT NULL COMMENT 'in percentage',
  `open_date` date NOT NULL,
  `maturity_date` date NOT NULL,
  `is_fd_mandatory` tinyint(1) NOT NULL DEFAULT '0',
  `file` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'Sarthak Shrivastava', 'bitfumes@gmail.com', '$2y$10$5L.QBN0qXSZ8x9KuxSh65.E4aJtw5cAh901VXqHsfiHI72EfdH5dS', 'ZmfCotzspvRsk7tQVZamZpYyTHSM20SAPmLWjTg9DbWyNmA3Z7zEzTff9PSo', '2017-07-12 00:07:55', '2017-07-12 00:07:55'),
(3, 'Ankur Shrivastava', 'ankur@gmail.com', '$2y$10$l4ODE.jAzImO5cL7KJuK7Obok1VXHsDonQX9U/6aishfDfEyiyfaC', 'lMuCX5ZMe0yhEJPL7C2DcjgzKn5J1gY7UJYs35UL0iBmFoTvMdkysFBLTL4D', '2017-07-12 00:22:45', '2017-07-12 00:22:45'),
(4, 'asif', 'procoding.in@gmail.com', '$2y$10$MF0jzgU7i0p4Ip6/yJre8O5hswZOLHEInvTJkhlMbuw25xBU.tl8W', NULL, '2020-08-07 03:17:45', '2020-08-07 03:17:45');

-- --------------------------------------------------------

--
-- Table structure for table `user_types`
--

DROP TABLE IF EXISTS `user_types`;
CREATE TABLE IF NOT EXISTS `user_types` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_types`
--

INSERT INTO `user_types` (`id`, `type`, `created_at`, `updated_at`) VALUES
(1, 'Director/Promoter', '2020-09-01 00:00:00', '2020-09-01 00:00:00'),
(2, 'Member', '2020-09-01 00:00:00', '2020-09-01 00:00:00');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
