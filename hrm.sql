-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 18, 2022 at 02:14 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hrm`
--

-- --------------------------------------------------------

--
-- Table structure for table `activities`
--

CREATE TABLE `activities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `project` int(11) NOT NULL DEFAULT 1,
  `type` int(11) NOT NULL DEFAULT 0,
  `taskstatus` int(11) NOT NULL DEFAULT 1,
  `order` int(11) NOT NULL DEFAULT 1,
  `summary` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `assignee` int(11) NOT NULL DEFAULT 1,
  `reporter` int(11) NOT NULL DEFAULT 1,
  `flagged` int(11) NOT NULL DEFAULT 1,
  `labels` int(11) NOT NULL DEFAULT 1,
  `start` date NOT NULL,
  `options` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`options`)),
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon_picture` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `isconfirm` int(11) NOT NULL DEFAULT 1,
  `remarks` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `isactive` int(11) NOT NULL DEFAULT 1,
  `isdelete` int(11) NOT NULL DEFAULT 0,
  `inuse` int(11) NOT NULL DEFAULT 1,
  `created_by` int(11) NOT NULL DEFAULT 1,
  `updated_by` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `activities`
--

INSERT INTO `activities` (`id`, `project`, `type`, `taskstatus`, `order`, `summary`, `description`, `assignee`, `reporter`, `flagged`, `labels`, `start`, `options`, `key`, `icon_picture`, `isconfirm`, `remarks`, `isactive`, `isdelete`, `inuse`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, 3, 1, 1, 0, 'Add Tabulator In List', 'Add Tabulator In List', 1, 1, 1, 1, '2022-08-03', '1', 'AP-T', '', 1, '', 1, 0, 1, 1, 1, '2022-08-01 07:53:48', '2022-08-03 07:24:17'),
(2, 3, 1, 3, 0, 'Create Project and Show list', 'Create Project and Show list', 0, 0, 0, 0, '2022-08-01', '1', 'AP-T', '', 1, '', 1, 0, 1, 1, 1, '2022-08-01 08:17:52', '2022-08-03 07:22:57'),
(3, 2, 1, 1, 0, 'Create New page For Userftggfgj', 'Create New page For User jhhghghkg', 1, 1, 1, 2, '2022-08-18', '1', 'AP-T', '', 1, '', 0, 0, 1, 1, 1, '2022-08-02 07:27:12', '2022-08-18 10:28:59'),
(4, 2, 1, 3, 0, 'Create Project and Show list', 'Create Project and Show list', 1, 1, 1, 1, '2022-08-02', '1', 'AP-T', '', 1, '', 1, 0, 1, 1, 1, '2022-08-02 07:54:49', '2022-08-18 09:48:15'),
(5, 2, 3, 1, 2, 'Add Tabulator In Listtttt', 'Add Tabulator In List', 2, 1, 1, 2, '2022-08-03', '1', 'AP-T', '', 1, '', 1, 0, 1, 1, 1, '2022-08-03 06:57:59', '2022-08-18 09:48:10'),
(6, 2, 1, 1, 1, 'Add Tabulator In List', 'Add Tabulator In List', 1, 1, 1, 2, '2022-08-03', '1', 'AP-T', '', 1, '', 1, 0, 1, 1, 1, '2022-08-03 07:02:16', '2022-08-18 09:48:10'),
(7, 3, 1, 2, 0, 'Add Tabulator In List 133', 'Add Tabulator In List', 1, 2, 1, 2, '2022-08-03', '1', 'AP-T', '', 1, '', 1, 0, 1, 1, 1, '2022-08-03 07:07:02', '2022-08-03 07:22:56');

-- --------------------------------------------------------

--
-- Table structure for table `attendances`
--

CREATE TABLE `attendances` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `employee_id` int(11) NOT NULL,
  `start` date DEFAULT NULL,
  `puncin` time DEFAULT NULL,
  `puncout` time DEFAULT NULL,
  `work` time DEFAULT NULL,
  `break` time DEFAULT NULL,
  `overtime` time DEFAULT NULL,
  `shifttime` time DEFAULT NULL,
  `remarks` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `attendances`
--

INSERT INTO `attendances` (`id`, `employee_id`, `start`, `puncin`, `puncout`, `work`, `break`, `overtime`, `shifttime`, `remarks`, `created_at`, `updated_at`) VALUES
(1, 1001, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, 1001, '2022-08-08', '12:36:46', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '08:00:00', 'Auto', '2022-08-08 07:06:46', '2022-08-08 07:06:46'),
(3, 1, '2022-08-08', '13:43:00', '19:45:10', '00:00:00', '00:00:00', '00:00:00', '08:00:00', 'Auto', '2022-08-08 08:13:00', '2022-08-08 14:15:10');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lastname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `profile_picture` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state_code` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pincode` int(11) DEFAULT NULL,
  `phone_no` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `aadhar_no` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pan_no` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gst_no` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `start_from` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `department` int(11) DEFAULT NULL,
  `turnover` double(15,8) DEFAULT NULL,
  `post` int(11) DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'abc123',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `isactive` int(11) NOT NULL DEFAULT 1,
  `isdelete` int(11) NOT NULL DEFAULT 0,
  `inuse` int(11) NOT NULL DEFAULT 1,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `name`, `lastname`, `profile_picture`, `address`, `state_code`, `pincode`, `phone_no`, `aadhar_no`, `pan_no`, `gst_no`, `start_from`, `dob`, `department`, `turnover`, `post`, `email`, `email_verified_at`, `password`, `remember_token`, `isactive`, `isdelete`, `inuse`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, 'Aloha', 'Technology', '202208111748Bholgarh_Rakshabandhan.png', 'Baner', 'MH', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 0, 'shailendrat@alohatechnologydev.com', NULL, 'abc123', NULL, 1, 0, 1, NULL, NULL, '2022-08-11 12:18:31', '2022-08-11 12:18:31');

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isactive` int(11) NOT NULL,
  `isdelete` int(11) NOT NULL,
  `inuse` int(11) NOT NULL,
  `created_by` int(11) NOT NULL,
  `updated_by` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `name`, `isactive`, `isdelete`, `inuse`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, 'IT', 0, 0, 1, 1, 1, '2022-07-28 05:52:25', '2022-07-28 05:52:25'),
(2, 'Account', 1, 0, 1, 1, 1, '2022-07-28 05:52:32', '2022-07-28 05:52:32'),
(3, 'HRM', 1, 0, 1, 1, 1, '2022-08-04 04:54:26', '2022-08-08 02:29:25'),
(4, 'Security', 1, 0, 1, 1, 1, '2022-08-04 04:54:40', '2022-08-04 04:54:40'),
(5, 'Clinning', 1, 0, 1, 1, 1, '2022-08-04 04:54:50', '2022-08-04 04:54:50'),
(6, 'Other', 1, 0, 1, 1, 1, '2022-08-04 04:54:56', '2022-08-04 04:54:56'),
(7, 'aaa', 0, 0, 1, 1, 1, '2022-08-04 05:11:33', '2022-08-04 05:11:33');

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` bigint(20) NOT NULL,
  `github_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `google_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkedin_id` varchar(555) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amazon_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `profile_picture` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `department` int(11) DEFAULT NULL,
  `post` int(11) DEFAULT NULL,
  `salary` double(15,8) DEFAULT NULL,
  `phone_no` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `isactive` int(11) DEFAULT 1,
  `isdelete` int(11) DEFAULT 0,
  `inuse` int(11) DEFAULT 1,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `github_id`, `google_id`, `linkedin_id`, `amazon_id`, `name`, `lastname`, `profile_picture`, `address`, `dob`, `department`, `post`, `salary`, `phone_no`, `company`, `email`, `email_verified_at`, `password`, `remember_token`, `isactive`, `isdelete`, `inuse`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, '7262672', '112962731061251192990', 'HDMGEEHPnS', NULL, 'Shailendra', 'Singh Tiwari', '202208181251aloha logo.png', 'Pune', NULL, 3, 3, 100000.00000000, '87700063212', 'Aloha', 'singhtiwari.shailendra@gmail.com', NULL, '$2y$10$LTmsQ.F6GFHq7XcR8wc13u9wgNy8dB6rZ0y6z.ual9i4F/7YuHCCq', NULL, 1, 0, 1, NULL, NULL, '2022-08-17 14:20:34', '2022-08-18 10:31:51');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `start` date NOT NULL,
  `end` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `title`, `start`, `end`, `created_at`, `updated_at`) VALUES
(1, 'Tset1', '2022-07-28', '2022-07-29', '2022-07-28 05:52:56', '2022-07-28 05:52:56'),
(2, 'tt', '2022-07-29', '2022-07-30', '2022-07-28 05:53:06', '2022-07-28 05:53:06'),
(3, 'dsfsd', '2022-07-30', '2022-07-31', '2022-07-28 05:53:15', '2022-07-28 05:53:15'),
(4, 'Hi', '2022-08-04', '2022-08-05', '2022-08-04 08:01:58', '2022-08-04 08:01:58'),
(7, 'gggg', '2022-08-11', '2022-08-12', '2022-08-04 08:02:12', '2022-08-04 08:02:12'),
(8, 'hi', '2022-08-05', '2022-08-06', '2022-08-04 08:02:26', '2022-08-04 08:02:26'),
(9, 'hh', '2022-08-02', '2022-08-03', '2022-08-04 08:02:37', '2022-08-04 08:02:37'),
(10, 'hhhhh', '2022-08-03', '2022-08-04', '2022-08-10 13:49:46', '2022-08-10 13:49:46');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `flagges`
--

CREATE TABLE `flagges` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `isactive` int(11) NOT NULL DEFAULT 1,
  `isdelete` int(11) NOT NULL DEFAULT 0,
  `inuse` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `flagges`
--

INSERT INTO `flagges` (`id`, `title`, `description`, `isactive`, `isdelete`, `inuse`, `created_at`, `updated_at`) VALUES
(1, 'Important', 'Important', 1, 0, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `holidays`
--

CREATE TABLE `holidays` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `start` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `isactive` enum('1','2','0') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `holidays`
--

INSERT INTO `holidays` (`id`, `title`, `description`, `start`, `created_at`, `updated_at`, `isactive`) VALUES
(1, 'Happy New Year 2022', 'Happy New Year', '2022-01-01', NULL, '2022-08-09 10:08:35', '1'),
(3, 'Diwali', 'Happy Diwali All', '2022-10-24', '2022-08-09 10:23:16', '2022-08-09 10:23:25', '1');

-- --------------------------------------------------------

--
-- Table structure for table `issues`
--

CREATE TABLE `issues` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `isactive` int(11) NOT NULL DEFAULT 1,
  `isdelete` int(11) NOT NULL DEFAULT 0,
  `inuse` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `issues`
--

INSERT INTO `issues` (`id`, `title`, `description`, `isactive`, `isdelete`, `inuse`, `created_at`, `updated_at`) VALUES
(1, 'Task', 'Task', 1, 0, 1, NULL, NULL),
(2, 'Bug', 'Bug', 1, 0, 1, NULL, NULL),
(3, 'Upgrade', 'Upgrade', 1, 0, 1, NULL, NULL),
(4, 'Change', 'Change', 1, 0, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `labels`
--

CREATE TABLE `labels` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `isactive` int(11) NOT NULL DEFAULT 1,
  `isdelete` int(11) NOT NULL DEFAULT 0,
  `inuse` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `labels`
--

INSERT INTO `labels` (`id`, `title`, `description`, `isactive`, `isdelete`, `inuse`, `created_at`, `updated_at`) VALUES
(1, 'High', 'High', 1, 0, 1, NULL, NULL),
(2, 'Low', 'Low', 1, 0, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(36, '2022_07_25_135118_create_events_table', 3),
(38, '2022_07_26_071610_create_activitys_table', 5),
(42, '2014_10_12_000000_create_users_table', 6),
(43, '2014_10_12_100000_create_password_resets_table', 6),
(44, '2019_08_19_000000_create_failed_jobs_table', 6),
(45, '2019_12_14_000001_create_personal_access_tokens_table', 6),
(46, '2022_07_25_072512_create_employees_table', 6),
(47, '2022_07_25_080210_create_sidebars_table', 6),
(48, '2022_07_25_094827_create_departments_table', 6),
(49, '2022_07_25_140934_create_events_table', 6),
(50, '2022_07_26_074523_create_activities_table', 6),
(51, '2022_07_26_131817_create_holidays_table', 6),
(52, '2022_07_28_095850_create_attendances_table', 6),
(53, '2022_07_29_053848_create_projects_table', 7),
(54, '2022_08_05_060413_create_setting_table', 8),
(55, '2022_08_11_155704_create_customers_table', 9),
(56, '2022_08_12_121423_create_sessions_table', 10);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `dept_id` int(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isactive` int(11) NOT NULL DEFAULT 1,
  `isdelete` int(11) NOT NULL DEFAULT 0,
  `inuse` int(11) NOT NULL DEFAULT 1,
  `created_by` int(11) NOT NULL,
  `updated_by` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `dept_id`, `name`, `isactive`, `isdelete`, `inuse`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, 1, 'Developer', 1, 0, 1, 0, 0, NULL, NULL),
(2, 2, 'Accountent', 1, 0, 1, 0, 0, NULL, NULL),
(3, 1, 'QA', 1, 0, 1, 0, 0, NULL, NULL),
(4, 1, 'Tester', 1, 0, 1, 0, 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `start` date NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon_picture` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` int(11) NOT NULL,
  `lead` int(11) NOT NULL,
  `default_assigned` int(11) NOT NULL,
  `isconfirm` int(11) NOT NULL,
  `remarks` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `isactive` int(11) NOT NULL DEFAULT 1,
  `isdelete` int(11) NOT NULL DEFAULT 1,
  `inuse` int(11) NOT NULL DEFAULT 1,
  `options` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`options`)),
  `created_by` int(11) NOT NULL DEFAULT 1,
  `updated_by` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `title`, `key`, `start`, `description`, `icon_picture`, `category`, `lead`, `default_assigned`, `isconfirm`, `remarks`, `isactive`, `isdelete`, `inuse`, `options`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(2, 'HRM', 'HR-01', '2022-08-01', '', '202208010712Web1920–33.png', 1, 1, 1, 1, '', 1, 1, 1, '1', 1, 1, '2022-08-01 01:42:19', '2022-08-01 01:42:19'),
(3, 'TradeKart', 'Trade', '2022-08-18', '', '202208181538cc.png', 3, 1, 1, 1, '', 1, 1, 1, '1', 1, 1, '2022-08-01 08:26:07', '2022-08-18 10:08:13'),
(4, 'Wordpress Project', 'WP', '2022-08-02', '', '202208021022e2.png', 1, 1, 0, 1, '', 1, 1, 1, '1', 1, 1, '2022-08-02 04:52:45', '2022-08-02 04:52:45'),
(6, 'ERP', 'ERP', '2022-08-10', '', '202208101929Bholgarh_Rakshabandhan.png', 3, 1, 0, 1, '', 1, 1, 1, '1', 1, 1, '2022-08-10 13:59:18', '2022-08-10 13:59:18');

-- --------------------------------------------------------

--
-- Table structure for table `project_category`
--

CREATE TABLE `project_category` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `isactive` int(11) NOT NULL DEFAULT 1,
  `isdelete` int(11) NOT NULL DEFAULT 0,
  `inuse` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `project_category`
--

INSERT INTO `project_category` (`id`, `title`, `description`, `isactive`, `isdelete`, `inuse`, `created_at`, `updated_at`) VALUES
(1, 'Software', 'Software', 1, 0, 1, NULL, NULL),
(2, 'Product', 'Product', 1, 0, 1, NULL, NULL),
(3, 'Service', 'Service', 1, 0, 1, NULL, NULL),
(4, 'Other', 'Other', 1, 0, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `site_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sort_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `invoice_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pan_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gst_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `est_info` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `owner` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remarks` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `isactive` int(11) DEFAULT 1,
  `isdelete` int(11) DEFAULT 0,
  `inuse` int(11) DEFAULT 1,
  `created_by` int(11) DEFAULT 1,
  `updated_by` int(11) DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `state` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `zipCode` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `site_name`, `company_name`, `sort_name`, `description`, `logo`, `image`, `invoice_image`, `address`, `pan_no`, `gst_no`, `est_info`, `phone`, `owner`, `remarks`, `isactive`, `isdelete`, `inuse`, `created_by`, `updated_by`, `created_at`, `updated_at`, `state`, `zipCode`) VALUES
(1, 'Aloha', 'Aloha', 'ALO', 'Software Company', '202208181621aloha.png', '1.png', '202208181620aloha logo.png', 'Pune', 'APUPT542378D', 'APUPT6532478gF', '1998', '8770063212', 'abc', '', 1, 0, 1, 1, 1, NULL, '2022-08-18 10:51:38', 'MH', '461001');

-- --------------------------------------------------------

--
-- Table structure for table `sidebars`
--

CREATE TABLE `sidebars` (
  `id` int(11) NOT NULL,
  `parent_id` int(11) NOT NULL DEFAULT 0,
  `icon` text DEFAULT NULL,
  `name` text DEFAULT NULL,
  `route` text DEFAULT NULL,
  `order` int(11) DEFAULT NULL,
  `Isactive` int(11) DEFAULT NULL,
  `created_at` text DEFAULT NULL,
  `updated_at` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sidebars`
--

INSERT INTO `sidebars` (`id`, `parent_id`, `icon`, `name`, `route`, `order`, `Isactive`, `created_at`, `updated_at`) VALUES
(1, 0, 'home', 'Dashboard', 'home', 1, 1, '', ''),
(2, 0, 'layout', 'User', 'user', 2, 0, '', ''),
(3, 0, 'dialpad-alt', 'Department', 'department', 3, 1, '', ''),
(4, 0, 'user', 'Employee', 'employee', 4, 1, '', ''),
(5, 11, 'car', 'Activity', 'activity', 6, 1, '', ''),
(6, 0, 'calendar-x', 'Holiday', 'holiday', 8, 1, '', ''),
(7, 0, 'calendar', 'Event', 'event', 9, 1, '', ''),
(8, 0, 'pen', 'Payroll', 'payroll', 10, 1, '', ''),
(9, 0, 'money', 'Accounts', 'accunts', 11, 1, '', ''),
(10, 0, 'file', 'Reports', 'report', 12, 1, '', ''),
(11, 0, 'layout', 'Project', 'project', 5, 1, '', ''),
(12, 0, 'clipboard', 'Attendance', 'Attendance', 7, 1, '', ''),
(13, 0, 'setting', 'Setting', 'setting', 13, 1, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `task_status`
--

CREATE TABLE `task_status` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `isactive` int(11) NOT NULL DEFAULT 1,
  `isdelete` int(11) NOT NULL DEFAULT 0,
  `inuse` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `task_status`
--

INSERT INTO `task_status` (`id`, `title`, `description`, `isactive`, `isdelete`, `inuse`, `created_at`, `updated_at`) VALUES
(1, 'TO DO', 'TO DO', 1, 0, 1, NULL, NULL),
(2, 'IN PROGRESS', 'IN PROGRESS', 1, 0, 1, NULL, NULL),
(3, 'Done', 'Done', 1, 0, 1, NULL, NULL),
(4, 'QA', 'QA', 1, 0, 1, NULL, NULL),
(5, 'Close', 'Close', 1, 0, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activities`
--
ALTER TABLE `activities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `attendances`
--
ALTER TABLE `attendances`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `employees_email_unique` (`email`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `flagges`
--
ALTER TABLE `flagges`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `holidays`
--
ALTER TABLE `holidays`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `issues`
--
ALTER TABLE `issues`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `labels`
--
ALTER TABLE `labels`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project_category`
--
ALTER TABLE `project_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sidebars`
--
ALTER TABLE `sidebars`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `task_status`
--
ALTER TABLE `task_status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activities`
--
ALTER TABLE `activities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `attendances`
--
ALTER TABLE `attendances`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `flagges`
--
ALTER TABLE `flagges`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `holidays`
--
ALTER TABLE `holidays`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `issues`
--
ALTER TABLE `issues`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `labels`
--
ALTER TABLE `labels`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `project_category`
--
ALTER TABLE `project_category`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sidebars`
--
ALTER TABLE `sidebars`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `task_status`
--
ALTER TABLE `task_status`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
