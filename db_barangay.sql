-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 25, 2024 at 03:43 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_barangay`
--

-- --------------------------------------------------------

--
-- Table structure for table `addlupon`
--

CREATE TABLE `addlupon` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `image_path` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `addlupon`
--

INSERT INTO `addlupon` (`id`, `name`, `email`, `image_path`) VALUES
(1, 'Michelle Anne Gando', 'michelleanneobejasgando@gmail.com', 'uploads/logo-modified.png');

-- --------------------------------------------------------

--
-- Table structure for table `addmember`
--

CREATE TABLE `addmember` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `position` varchar(100) NOT NULL,
  `contact` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `addmember`
--

INSERT INTO `addmember` (`id`, `name`, `email`, `position`, `contact`) VALUES
(2, 'Michelle Anne Gando', 'daisygando18@gmail.com', 'ssssss', '09999999999999');

-- --------------------------------------------------------

--
-- Table structure for table `bid`
--

CREATE TABLE `bid` (
  `id` int(11) NOT NULL,
  `formSelector` varchar(255) NOT NULL,
  `amount` varchar(255) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `mname` varchar(50) NOT NULL,
  `ename` varchar(10) NOT NULL,
  `Hnum` varchar(50) NOT NULL,
  `street` varchar(100) NOT NULL,
  `Brgy` varchar(50) NOT NULL,
  `municipality` varchar(50) NOT NULL,
  `province` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `gender` enum('male','female') NOT NULL,
  `marital` enum('single','married','separated','widowed') NOT NULL,
  `name` varchar(100) NOT NULL,
  `relation` varchar(50) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bid`
--

INSERT INTO `bid` (`id`, `formSelector`, `amount`, `lname`, `fname`, `mname`, `ename`, `Hnum`, `street`, `Brgy`, `municipality`, `province`, `dob`, `gender`, `marital`, `name`, `relation`, `contact`, `created_at`) VALUES
(1, 'barangayID', '50', 'Gando', 'Michelle Anne', 'O', 'a', 'Kabulusan', 'qwert', '23', 'Navotas', 'metro manila', '2024-02-22', 'female', 'single', 'melissa ', 'yyy', '098765543', '2024-02-09 09:57:39'),
(5, 'barangayID', '50', 'Pontejos', 'Melissa', 'L', 'd', '123', 'daisy', '345', 'Navotas', 'metro manila', '2024-02-06', 'female', 'single', 'Michelle Anne Gando', 'classmates', '0987654', '2024-02-09 11:31:26'),
(6, 'barangayID', '50', 'Dave', 'Sanchez', 'h', '', '123', 'miithi', '678', 'Navotas', 'metro manila', '2024-02-14', 'female', 'single', 'melissa ', 'classmates', '09876543', '2024-02-09 14:38:16'),
(7, 'barangayID', '50', 'martines', 'Savannah', 'O', 's', '246', 'fishport', '12', 'Navotas', 'metro manila', '2024-02-07', 'female', 'single', 'dave balsomo', 'sibling', '098765432', '2024-02-09 15:15:44'),
(8, 'barangayID', '50', 'Gando', 'Michelle Anne', 'O', 's', 'Kabulusan', 'miithi', '23', 'Navotas', 'Metro Manila', '2024-03-01', 'female', 'single', 'jeraldine', 'sibling', '09876543', '2024-02-11 02:28:14'),
(9, 'barangayID', '50', 'Gando', 'Michelle Anne', 'O', 's', 'Kabulusan', 'miithi', '23', 'Navotas', 'Metro Manila', '2024-03-01', 'female', 'single', 'jeraldine', 'sibling', '09876543', '2024-02-11 02:31:20'),
(10, 'barangayID', '50', 'Gando', 'Michelle Anne', 'O', 'a', 'Kabulusan', 'miithi', '23', 'caloocan', 'Metro Manila', '2024-02-13', 'female', 'single', 'vdfd', 'fdfdfdf', '4343435', '2024-02-11 03:11:32'),
(11, 'barangayID', '50', 'Gando', 'Michelle Anne', 'O', 'a', 'Kabulusan', 'miithi', '23', 'caloocan', 'Metro Manila', '2024-02-13', 'female', 'single', 'vdfd', 'fdfdfdf', '4343435', '2024-02-11 03:11:33'),
(12, 'barangayID', '50', 'Gando', 'Michelle Anne', 'O', 'a', 'Kabulusan', 'miithi', '23', 'caloocan', 'Metro Manila', '2024-02-13', 'female', 'single', 'vdfd', 'fdfdfdf', '4343435', '2024-02-11 03:11:34'),
(13, 'barangayID', '50', 'Gando', 'Michelle Anne', 'O', 'a', 'Kabulusan', 'miithi', '23', 'caloocan', 'Metro Manila', '2024-02-13', 'female', 'single', 'vdfd', 'fdfdfdf', '4343435', '2024-02-11 03:11:34'),
(14, 'barangayID', '50', 'Gando', 'Michelle Anne', 'O', 'a', 'Kabulusan', 'miithi', '23', 'caloocan', 'Metro Manila', '2024-02-13', 'female', 'single', 'vdfd', 'fdfdfdf', '4343435', '2024-02-11 03:11:34'),
(15, 'barangayID', '50', 'Gando', 'Michelle Anne', 'O', 'a', 'Kabulusan', 'miithi', '23', 'caloocan', 'Metro Manila', '2024-02-13', 'female', 'single', 'vdfd', 'fdfdfdf', '4343435', '2024-02-11 03:11:34'),
(16, 'barangayID', '50', 'Gando', 'Michelle Anne', 'O', 'a', 'Kabulusan', 'miithi', '23', 'caloocan', 'Metro Manila', '2024-02-13', 'female', 'single', 'vdfd', 'fdfdfdf', '4343435', '2024-02-11 03:11:34'),
(23, 'barangayID', '50', 'Gando', 'Michelle Anne', 'jd', '89', 'Kabulusan', 'jhh', 'hj', 'hj', 'hj', '2024-02-22', 'female', 'single', 'jhj', 'hj', '9876543', '2024-02-12 16:09:13'),
(24, 'barangayID', '50', 'Gando', 'Michelle Anne', 'O', '', 'Kabulusan', 'miithi', '24', 'djsjdjkkn', 'jhj', '1234-05-09', 'female', 'single', 'lkjhdhslhdh', 'hshs', '9865456789', '2024-02-12 16:09:54');

-- --------------------------------------------------------

--
-- Table structure for table `brgybusiclear`
--

CREATE TABLE `brgybusiclear` (
  `id` int(11) NOT NULL,
  `formSelector` varchar(255) NOT NULL,
  `amount` decimal(10,2) NOT NULL,
  `Busitrade` varchar(255) NOT NULL,
  `manager` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `brgybusiclos`
--

CREATE TABLE `brgybusiclos` (
  `id` int(11) NOT NULL,
  `formSelector` varchar(255) NOT NULL,
  `amount` decimal(10,2) NOT NULL,
  `Busitrade` varchar(255) NOT NULL,
  `manager` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `brgycertburial`
--

CREATE TABLE `brgycertburial` (
  `id` int(11) NOT NULL,
  `formSelector` varchar(255) NOT NULL,
  `amount` decimal(10,2) NOT NULL,
  `name` varchar(255) NOT NULL,
  `age` int(11) NOT NULL,
  `marital` varchar(20) NOT NULL,
  `address` varchar(255) NOT NULL,
  `deceased` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `brgycertfish`
--

CREATE TABLE `brgycertfish` (
  `id` int(11) NOT NULL,
  `formSelector` varchar(255) NOT NULL,
  `amount` decimal(10,2) NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `age` int(11) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `brgycertificate`
--

CREATE TABLE `brgycertificate` (
  `id` int(11) NOT NULL,
  `formSelector` varchar(50) NOT NULL,
  `amount` decimal(10,2) NOT NULL,
  `name` varchar(255) NOT NULL,
  `age` int(11) NOT NULL,
  `marital` varchar(20) NOT NULL,
  `Hnum` varchar(255) NOT NULL,
  `street` varchar(255) NOT NULL,
  `Brgy` varchar(255) NOT NULL,
  `municipality` varchar(255) NOT NULL,
  `province` varchar(255) NOT NULL,
  `notes` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `brgycertjob`
--

CREATE TABLE `brgycertjob` (
  `id` int(11) NOT NULL,
  `formSelector` varchar(255) NOT NULL,
  `amount` decimal(10,2) NOT NULL,
  `name` varchar(255) NOT NULL,
  `age` int(11) NOT NULL,
  `year` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `brgycertlegalg`
--

CREATE TABLE `brgycertlegalg` (
  `id` int(11) NOT NULL,
  `formSelector` varchar(255) NOT NULL,
  `amount` decimal(10,2) NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `child` varchar(255) NOT NULL,
  `age` int(11) NOT NULL,
  `dob` date NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `brgycertnobirth`
--

CREATE TABLE `brgycertnobirth` (
  `id` int(11) NOT NULL,
  `formSelector` varchar(255) NOT NULL,
  `amount` decimal(10,2) NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `child` varchar(255) NOT NULL,
  `age` int(11) NOT NULL,
  `dob` date NOT NULL,
  `bplace` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `brgyindigency`
--

CREATE TABLE `brgyindigency` (
  `id` int(11) NOT NULL,
  `formSelector` varchar(225) NOT NULL,
  `amount` varchar(225) NOT NULL,
  `name` varchar(255) NOT NULL,
  `age` int(11) NOT NULL,
  `marital` varchar(20) NOT NULL,
  `Hnum` varchar(255) NOT NULL,
  `street` varchar(255) NOT NULL,
  `Brgy` varchar(255) NOT NULL,
  `municipality` varchar(255) NOT NULL,
  `province` varchar(255) NOT NULL,
  `request` varchar(255) NOT NULL,
  `notes` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `brgyoathjob`
--

CREATE TABLE `brgyoathjob` (
  `id` int(11) NOT NULL,
  `formSelector` varchar(255) NOT NULL,
  `amount` decimal(10,2) NOT NULL,
  `name` varchar(255) NOT NULL,
  `age` int(11) NOT NULL,
  `address` varchar(255) NOT NULL,
  `year` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `brgypermocc`
--

CREATE TABLE `brgypermocc` (
  `id` int(11) NOT NULL,
  `formSelector` varchar(255) NOT NULL,
  `amount` decimal(10,2) NOT NULL,
  `name` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `bod` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `brgysoloparent`
--

CREATE TABLE `brgysoloparent` (
  `id` int(11) NOT NULL,
  `formSelector` varchar(255) NOT NULL,
  `amount` decimal(10,2) NOT NULL,
  `name` varchar(255) NOT NULL,
  `age` int(11) NOT NULL,
  `address` varchar(255) NOT NULL,
  `dob` date NOT NULL,
  `no` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `brgytravelpirm`
--

CREATE TABLE `brgytravelpirm` (
  `id` int(11) NOT NULL,
  `formSelector` varchar(255) NOT NULL,
  `amount` decimal(10,2) NOT NULL,
  `name` varchar(255) NOT NULL,
  `weight` decimal(10,2) NOT NULL,
  `address` varchar(255) NOT NULL,
  `desti` varchar(255) NOT NULL,
  `dob` date NOT NULL,
  `type` varchar(255) NOT NULL,
  `plate` varchar(255) NOT NULL,
  `drive` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `clearance`
--

CREATE TABLE `clearance` (
  `id` int(11) NOT NULL,
  `type` varchar(255) NOT NULL,
  `purpose` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `requestname` varchar(255) NOT NULL,
  `Household_num` varchar(50) NOT NULL,
  `street` varchar(255) NOT NULL,
  `brgy` varchar(255) NOT NULL,
  `municipality` varchar(255) NOT NULL,
  `province` varchar(255) NOT NULL,
  `documenttax` varchar(50) NOT NULL,
  `notes` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `clearance`
--

INSERT INTO `clearance` (`id`, `type`, `purpose`, `date`, `requestname`, `Household_num`, `street`, `brgy`, `municipality`, `province`, `documenttax`, `notes`) VALUES
(3, 'Barangay Certificate', 'Apply for Job', '2023-12-10', 'Christian Babe Balsomo', '898', 'qwert', '24', 'caloocan', 'metro manila', 'Paid', 'job application');

-- --------------------------------------------------------

--
-- Table structure for table `complaint`
--

CREATE TABLE `complaint` (
  `id` int(11) NOT NULL,
  `report_type` varchar(50) NOT NULL,
  `case_id` varchar(20) NOT NULL,
  `num_of_cases` int(11) NOT NULL,
  `complainant` varchar(100) NOT NULL,
  `complainant_address` varchar(100) NOT NULL,
  `dependants` varchar(100) NOT NULL,
  `defendant_address` varchar(100) NOT NULL,
  `issue_problem` text NOT NULL,
  `date_filed` date NOT NULL,
  `status` varchar(20) NOT NULL,
  `document_picture` varchar(255) NOT NULL,
  `lupon_statement` varchar(255) DEFAULT NULL,
  `agreement` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `complaint`
--

INSERT INTO `complaint` (`id`, `report_type`, `case_id`, `num_of_cases`, `complainant`, `complainant_address`, `dependants`, `defendant_address`, `issue_problem`, `date_filed`, `status`, `document_picture`, `lupon_statement`, `agreement`) VALUES
(1, 'blotter', 'a', 0, 'a', 'a', 'a', 'a', 'a', '2024-02-21', 'Ongoing', '', '', ''),
(2, 'complain', 'aa', 0, 'c', 'd', 'e', 'd', 'g', '2024-02-28', 'Ongoing', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `deceased`
--

CREATE TABLE `deceased` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `add` varchar(20) NOT NULL,
  `dob` date NOT NULL,
  `dod` date NOT NULL,
  `action` varchar(20) NOT NULL,
  `picture` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `login_info`
--

CREATE TABLE `login_info` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `login_user`
--

CREATE TABLE `login_user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `request_amounts`
--

CREATE TABLE `request_amounts` (
  `id` int(11) NOT NULL,
  `type` varchar(255) NOT NULL,
  `amount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `request_amounts`
--

INSERT INTO `request_amounts` (`id`, `type`, `amount`) VALUES
(1, 'Barangay ID', 50),
(2, 'Barangay Indigency', 0),
(3, 'Barangay Certificate', 50),
(4, 'Barangay ID', 50),
(5, 'Barangay Indigency', 0),
(6, 'Barangay Certificate', 50),
(7, 'Barangay Certificate', 50),
(8, 'Barangay Certificate', 50),
(9, 'Barangay Certificate', 50),
(10, 'Barangay ID', 50),
(11, 'Barangay Indigency', 0),
(12, 'Barangay Certificate', 50),
(13, 'Certificate Jobseeker', 50),
(14, 'Oath Taking Jobseeker', 50),
(15, 'Business Clearance', 50),
(16, 'Business Clearance-Closure', 50),
(17, 'Certificate for Legal Guardian', 50),
(18, 'Certificate No Birth-certificate', 50),
(19, 'Certificate Burial', 50),
(20, 'Fisheries Certification', 50),
(21, 'Permit Occasion', 50),
(22, 'Barangay Protection Order', 50),
(23, 'Solo Parent', 50),
(24, 'Travel Permit', 50);

-- --------------------------------------------------------

--
-- Table structure for table `signin_users`
--

CREATE TABLE `signin_users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tblactivity`
--

CREATE TABLE `tblactivity` (
  `id` int(11) NOT NULL,
  `dateofactivity` date NOT NULL,
  `activity` text NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tblactivity`
--

INSERT INTO `tblactivity` (`id`, `dateofactivity`, `activity`, `description`) VALUES
(10, '2017-01-03', 'activity', 'Description'),
(11, '2017-01-28', 'teets', 'sdfsdfsdfsdf');

-- --------------------------------------------------------

--
-- Table structure for table `tblactivityphoto`
--

CREATE TABLE `tblactivityphoto` (
  `id` int(11) NOT NULL,
  `activityid` int(11) NOT NULL,
  `filename` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tblactivityphoto`
--

INSERT INTO `tblactivityphoto` (`id`, `activityid`, `filename`) VALUES
(18, 7, '1485255503893ChibiMaker.jpg'),
(19, 7, '1485255504014dental.jpg'),
(20, 7, '1485255504108images.jpg'),
(21, 8, '1485255608251dfxfxfxdfxfxfxdf.png'),
(22, 8, '1485255608315easy-nail-art-designs-for-beginners-youtube.jpg'),
(23, 8, '1485255608404Easy-Winter-Nail-Art-Tutorials-2013-2014-For-Beginners-Learners-10.jpg'),
(24, 8, '1485255608513motherboard.png'),
(25, 9, '148525575293111041019_1012143402147589_9043399646875097729_n.jpg'),
(26, 9, '1485255753089bg.PNG'),
(32, 10, '148526764905211041019_1012143402147589_9043399646875097729_n.jpg'),
(33, 10, '1485267649364bg.PNG'),
(34, 10, '1485267649563motherboard.png'),
(35, 10, '14855301764078196186971_2237f161bd_b.jpg'),
(36, 10, '1485530481111bicycle-1280x720.jpg'),
(38, 11, '1485530620716user2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tblblocklist`
--

CREATE TABLE `tblblocklist` (
  `id` int(11) NOT NULL,
  `housenum` varchar(11) NOT NULL,
  `residenttype` varchar(11) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `rbia` varchar(30) NOT NULL,
  `rbib` varchar(30) NOT NULL,
  `badac` varchar(30) NOT NULL,
  `action` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tblblotter`
--

CREATE TABLE `tblblotter` (
  `id` int(11) NOT NULL,
  `yearRecorded` varchar(4) NOT NULL,
  `date` date NOT NULL,
  `complainant` text NOT NULL,
  `cage` int(11) NOT NULL,
  `caddress` text NOT NULL,
  `ccontact` int(11) NOT NULL,
  `personToComplain` text NOT NULL,
  `page` int(11) NOT NULL,
  `paddress` text NOT NULL,
  `pcontact` int(11) NOT NULL,
  `complaint` text NOT NULL,
  `actionTaken` varchar(50) NOT NULL,
  `sStatus` varchar(50) NOT NULL,
  `locationOfIncidence` text NOT NULL,
  `recordedby` varchar(50) NOT NULL,
  `myFiles` varchar(20) NOT NULL,
  `agreement` text NOT NULL,
  `reporttype` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tblblotter`
--

INSERT INTO `tblblotter` (`id`, `yearRecorded`, `date`, `complainant`, `cage`, `caddress`, `ccontact`, `personToComplain`, `page`, `paddress`, `pcontact`, `complaint`, `actionTaken`, `sStatus`, `locationOfIncidence`, `recordedby`, `myFiles`, `agreement`, `reporttype`) VALUES
(3, '2016', '2016-10-15', 'sda, as das', 2132, 'asda', 213, '11', 3213, 'dasda', 2123, '213asd', '1st Option', 'Solved', 'asdsa', 'admin', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tblbusinessform`
--

CREATE TABLE `tblbusinessform` (
  `id` int(11) NOT NULL,
  `nature` varchar(255) NOT NULL,
  `bname` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `badd` varchar(255) NOT NULL,
  `valid` date NOT NULL,
  `yearly` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tblbusinessform`
--

INSERT INTO `tblbusinessform` (`id`, `nature`, `bname`, `owner`, `badd`, `valid`, `yearly`) VALUES
(1, 'a', 'a', 'a', 'a', '2024-01-19', '₱50,000 - ₱250,000'),
(2, 'egr', 'gse', 'gdfg', 'dsg', '2024-01-31', '₱2.5 million - ₱5 million');

-- --------------------------------------------------------

--
-- Table structure for table `tblchairman`
--

CREATE TABLE `tblchairman` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tblchairman`
--

INSERT INTO `tblchairman` (`id`, `name`, `username`, `password`) VALUES
(1, 'chairman', 'chairman_01', 'chairmannbbs'),
(1, 'chairman', 'chairman_01', 'chairmannbbs');

-- --------------------------------------------------------

--
-- Table structure for table `tblclearance`
--

CREATE TABLE `tblclearance` (
  `id` int(11) NOT NULL,
  `clearanceNo` int(11) NOT NULL,
  `residentid` int(11) NOT NULL,
  `findings` text NOT NULL,
  `purpose` text NOT NULL,
  `orNo` int(11) NOT NULL,
  `samount` int(11) NOT NULL,
  `dateRecorded` date NOT NULL,
  `recordedBy` varchar(50) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tblclearance`
--

INSERT INTO `tblclearance` (`id`, `clearanceNo`, `residentid`, `findings`, `purpose`, `orNo`, `samount`, `dateRecorded`, `recordedBy`, `status`) VALUES
(8, 0, 11, '', 'asd', 0, 0, '2017-01-20', 'User1', 'New'),
(9, 1234, 15, 'asdada', 'local employment', 12, 3434, '2017-01-22', 'admin', 'Approved'),
(10, 123, 11, 'qwe', 'qwe', 213, 2123, '2017-01-24', 'admin', 'Approved');

-- --------------------------------------------------------

--
-- Table structure for table `tblcurfew`
--

CREATE TABLE `tblcurfew` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `date` date NOT NULL,
  `place` varchar(20) NOT NULL,
  `time` time NOT NULL,
  `notes` text NOT NULL,
  `status` varchar(20) NOT NULL,
  `action` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tblcurfew`
--

INSERT INTO `tblcurfew` (`id`, `name`, `date`, `place`, `time`, `notes`, `status`, `action`) VALUES
(1, 'dave balsomo', '2024-01-04', 'kila Mel', '17:08:00', 'asasasa', 'Ongoing', ''),
(2, '3rd', '2024-01-16', 'kila Mel', '15:12:00', 'asasasa', 'Ongoing', ''),
(3, 'melissa', '2024-01-18', 'kila dave', '17:13:00', 'asasasa', 'Ongoing', ''),
(4, 'michelle ', '2024-01-03', 'sas', '05:53:00', 'asasasa', 'Ongoing', ''),
(5, 'yud', '2024-01-17', 'tys', '00:32:00', 'tsrys', 'Closed', '');

-- --------------------------------------------------------

--
-- Table structure for table `tblhousehold`
--

CREATE TABLE `tblhousehold` (
  `id` int(11) NOT NULL,
  `householdno` int(11) NOT NULL,
  `zone` varchar(11) NOT NULL,
  `totalhouseholdmembers` int(2) NOT NULL,
  `headoffamily` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tblhousehold`
--

INSERT INTO `tblhousehold` (`id`, `householdno`, `zone`, `totalhouseholdmembers`, `headoffamily`) VALUES
(3, 2, '2', 0, '12');

-- --------------------------------------------------------

--
-- Table structure for table `tbllogs`
--

CREATE TABLE `tbllogs` (
  `id` int(11) NOT NULL,
  `user` varchar(50) NOT NULL,
  `logdate` datetime NOT NULL,
  `action` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbllogs`
--

INSERT INTO `tbllogs` (`id`, `user`, `logdate`, `action`) VALUES
(2, 'asd', '2017-01-04 00:00:00', 'Added Resident namedjayjay, asd asd'),
(3, 'asd', '2017-01-04 19:13:40', 'Update Resident named Sample1, User1 Brgy1'),
(4, 'sad', '2017-01-05 13:22:10', 'Update Official named eliezer a. vacalares, jr.'),
(7, 'sad', '2017-01-05 13:54:40', 'Update Household Number 1'),
(8, 'sad', '2017-01-05 14:00:08', 'Update Blotter Request sda, as das'),
(9, 'sad', '2017-01-05 14:15:39', 'Update Clearance with clearance number of 123131'),
(10, 'sad', '2017-01-05 14:25:03', 'Update Permit with business name of asda'),
(11, 'sad', '2017-01-05 14:25:25', 'Update Resident named Sample1, User1 Brgy1'),
(12, 'Administrator', '2017-01-24 16:32:40', 'Added Permit with business name of hahaha'),
(13, 'Administrator', '2017-01-24 16:35:41', 'Added Clearance with clearance number of 123'),
(14, 'Administrator', '2017-01-24 18:43:35', 'Added Activity sad'),
(15, 'Administrator', '2017-01-24 18:45:49', 'Added Activity qwe'),
(16, 'Administrator', '2017-01-24 18:46:20', 'Added Activity ss'),
(17, 'Administrator', '2017-01-24 18:47:39', 'Added Activity e'),
(18, 'Administrator', '2017-01-24 18:55:20', 'Added Activity activity'),
(19, 'Administrator', '2017-01-24 18:58:23', 'Added Activity Activity'),
(20, 'Administrator', '2017-01-24 19:00:07', 'Added Activity activity'),
(21, 'Administrator', '2017-01-24 19:02:32', 'Added Activity Activity'),
(22, 'Administrator', '2017-01-24 19:04:54', 'Added Activity activity'),
(23, 'Administrator', '2017-01-24 19:08:40', 'Update Activity activity'),
(24, 'Administrator', '2017-01-27 23:23:40', 'Added Activity teets'),
(25, 'Administrator', '2017-01-27 23:24:14', 'Update Resident named Sample1, User1 Brgy1'),
(26, 'Administrator', '2017-01-27 23:25:10', 'Update Resident named sda, as das'),
(27, 'Administrator', '2017-01-30 10:45:13', 'Added Resident named 2, 2 2'),
(28, 'Administrator', '2017-01-30 10:45:54', 'Added Resident named 2, 2 2'),
(29, 'Administrator', '2017-02-06 08:58:23', 'Update Resident named sda, as das'),
(30, 'Administrator', '2017-02-06 09:00:14', 'Update Resident named sda, as das'),
(31, 'Administrator', '2017-02-06 09:03:57', 'Added Household Number 2'),
(32, 'Administrator', '2017-02-06 09:04:25', 'Added Household Number 2');

-- --------------------------------------------------------

--
-- Table structure for table `tblofficial`
--

CREATE TABLE `tblofficial` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `house_num` varchar(255) NOT NULL,
  `street` varchar(255) NOT NULL,
  `barangay` varchar(255) NOT NULL,
  `municipality` varchar(255) NOT NULL,
  `province` varchar(255) DEFAULT NULL,
  `contact` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `barangay_cap` varchar(255) NOT NULL,
  `b_councilor1` varchar(255) DEFAULT NULL,
  `b_personal1` varchar(255) DEFAULT NULL,
  `b_councilor2` varchar(255) DEFAULT NULL,
  `b_personal2` varchar(255) DEFAULT NULL,
  `b_councilor3` varchar(255) DEFAULT NULL,
  `b_personal3` varchar(255) DEFAULT NULL,
  `b_councilor4` varchar(255) DEFAULT NULL,
  `b_personal4` varchar(255) DEFAULT NULL,
  `b_councilor5` varchar(255) DEFAULT NULL,
  `b_personal5` varchar(255) DEFAULT NULL,
  `b_councilor6` varchar(255) DEFAULT NULL,
  `b_personal6` varchar(255) DEFAULT NULL,
  `b_councilor7` varchar(255) DEFAULT NULL,
  `b_personal7` varchar(255) DEFAULT NULL,
  `b_councilor8` varchar(255) DEFAULT NULL,
  `b_personal8` varchar(255) DEFAULT NULL,
  `name1` varchar(255) DEFAULT NULL,
  `position1` varchar(255) DEFAULT NULL,
  `name2` varchar(255) DEFAULT NULL,
  `position2` varchar(255) DEFAULT NULL,
  `name3` varchar(255) DEFAULT NULL,
  `position3` varchar(255) DEFAULT NULL,
  `name4` varchar(255) DEFAULT NULL,
  `position4` varchar(255) DEFAULT NULL,
  `name5` varchar(255) DEFAULT NULL,
  `position5` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tblofficial`
--

INSERT INTO `tblofficial` (`id`, `image`, `house_num`, `street`, `barangay`, `municipality`, `province`, `contact`, `email`, `barangay_cap`, `b_councilor1`, `b_personal1`, `b_councilor2`, `b_personal2`, `b_councilor3`, `b_personal3`, `b_councilor4`, `b_personal4`, `b_councilor5`, `b_personal5`, `b_councilor6`, `b_personal6`, `b_councilor7`, `b_personal7`, `b_councilor8`, `b_personal8`, `name1`, `position1`, `name2`, `position2`, `name3`, `position3`, `name4`, `position4`, `name5`, `position5`) VALUES
(1, 'logo-modified.png', 'Kabulusan', 'qwert', 'x2', 'caloocan', 'metro manila', '09455608508', 'michelleanneobejasgando@gmail.com', 'aaaaa', 'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'j', 'i', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z'),
(2, 'logo-modified.png', 'Kabulusan', 'qwert', 'x2', 'caloocan', 'metro manila', '09455608508', 'michelleanneobejasgando@gmail.com', 'aaaaa', 'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'j', 'i', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z');

-- --------------------------------------------------------

--
-- Table structure for table `tblprofile`
--

CREATE TABLE `tblprofile` (
  `profile_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `mname` varchar(20) NOT NULL,
  `sname` varchar(20) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tblresident`
--

CREATE TABLE `tblresident` (
  `id` int(11) NOT NULL,
  `housetype` varchar(50) NOT NULL,
  `housenum` varchar(20) NOT NULL,
  `famnum` varchar(20) NOT NULL,
  `residenttype` varchar(20) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `ename` varchar(10) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `mname` varchar(50) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `year` int(11) NOT NULL,
  `myFile` varchar(255) NOT NULL,
  `bday` date NOT NULL,
  `brn` varchar(20) NOT NULL,
  `brd` date NOT NULL,
  `weight` float NOT NULL,
  `height` float NOT NULL,
  `nationality` varchar(50) NOT NULL,
  `bplace` varchar(100) NOT NULL,
  `marital` varchar(20) NOT NULL,
  `soloparent` varchar(3) NOT NULL,
  `permadd` varchar(3) NOT NULL,
  `osy` varchar(3) NOT NULL,
  `voter` varchar(3) NOT NULL,
  `ofw` varchar(3) NOT NULL,
  `country` varchar(50) NOT NULL,
  `job` varchar(100) NOT NULL,
  `skill` varchar(100) NOT NULL,
  `idnum` varchar(20) NOT NULL,
  `tin` varchar(20) NOT NULL,
  `pwd` text NOT NULL,
  `Hnum` varchar(20) NOT NULL,
  `street` varchar(100) NOT NULL,
  `Brgy` varchar(100) NOT NULL,
  `municipality` varchar(100) NOT NULL,
  `province` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tblresident`
--

INSERT INTO `tblresident` (`id`, `housetype`, `housenum`, `famnum`, `residenttype`, `gender`, `lname`, `ename`, `fname`, `mname`, `phone`, `year`, `myFile`, `bday`, `brn`, `brd`, `weight`, `height`, `nationality`, `bplace`, `marital`, `soloparent`, `permadd`, `osy`, `voter`, `ofw`, `country`, `job`, `skill`, `idnum`, `tin`, `pwd`, `Hnum`, `street`, `Brgy`, `municipality`, `province`) VALUES
(1, 'Owner', 'a', 'a', 'primary', 'male ', 'Aquino', 's', 'savannah', 'O', '09999999999999', 6666, '384481101_706841374113046_2756877590064352781_n.jpg', '2023-12-07', 'gggggggg', '2023-12-10', 77, 123, 'filipino', 'manila', 'single ', 'yes', 'yes', 'No', 'yes', 'no', 'Select Country', 's', 'xs', '21324', '321211', 'Others', '175', 'qwert', '24', 'caloocan', 'metro manila'),
(42, 'Owner', '675774567', '6557457', '', 'male ', 'Aquino', 'a', 'Joshua', 'O', '09876', 1999, 'uploads/cd42aa3e5fd6c39a75b1a88480641c660d579cd2.png', '2024-02-01', '999999', '2024-02-05', 50, 702, 'filipino', 'manila', 'single ', 'no', 'yes', 'No', 'yes', 'no', 'Philippines', 'NA', 'NA', 'NA', 'NA', 'Visual Disability', '567', 'daisy', '67', 'Navotas', 'Metro Manila'),
(43, 'Owner', '675774567', '6557457', '', 'male ', 'Aquino', 'a', 'Joshua', 'O', '09876', 1999, 'uploads/cd42aa3e5fd6c39a75b1a88480641c660d579cd2.png', '2024-02-01', '999999', '2024-02-05', 50, 702, 'filipino', 'manila', 'single ', 'no', 'yes', 'No', 'yes', 'no', 'Philippines', 'NA', 'NA', 'NA', 'NA', 'Visual Disability', '567', 'daisy', '67', 'Navotas', 'Metro Manila'),
(46, '', '', '', '', 'Male', 'Balsomo', '', 'Christian', '', '093746734', 0, '', '2002-03-08', '', '0000-00-00', 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '123', 'road-10', 'brgy15', 'navotas', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbltreasurer`
--

CREATE TABLE `tbltreasurer` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbltreasurer`
--

INSERT INTO `tbltreasurer` (`id`, `name`, `username`, `password`) VALUES
(1, 'treasurer', 'treasurer_01', 'treasurernbbs'),
(1, 'treasurer', 'treasurer_01', 'treasurernbbs');

-- --------------------------------------------------------

--
-- Table structure for table `tbluser`
--

CREATE TABLE `tbluser` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `type` enum('admin','Chairman','Treasurer','secretary','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbluser`
--

INSERT INTO `tbluser` (`id`, `username`, `password`, `type`) VALUES
(1, 'admin', 'admin', 'admin'),
(2, 'treasurer_01', 'treasurernbbs', 'Treasurer'),
(3, 'chairman_01', 'chairmannbbs', 'Chairman'),
(4, 'secretary', 'secretarynbbs', 'secretary');

-- --------------------------------------------------------

--
-- Table structure for table `userusers`
--

CREATE TABLE `userusers` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `fname` varchar(222) NOT NULL,
  `mname` varchar(222) NOT NULL,
  `lname` varchar(222) NOT NULL,
  `ename` varchar(222) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` int(12) NOT NULL,
  `address` varchar(225) NOT NULL,
  `bday` varchar(225) NOT NULL,
  `gender` varchar(225) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `userusers`
--

INSERT INTO `userusers` (`id`, `username`, `fname`, `mname`, `lname`, `ename`, `email`, `phone`, `address`, `bday`, `gender`, `password`) VALUES
(5, 'Misyel', '', '', '', '', 'michelleanneobejasgando@gmail.com', 2147483647, 'Kabulusan', '2002-05-02', 'Female', 'mich123'),
(8, 'isat', 'Melissa', 'L', 'Pontejos', '', 'melissapontejos@gmail.com', 98765, 'ilang ilang navotas city', '2024-02-16', 'female', 'isat123'),
(9, 'ichan', 'Christian', '', 'Balsomo', '', 'christianbalsomo@email.com', 93746734, '123 road-10 brgy15 navotas', '2002-03-08', 'Male', 'Ichan123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bid`
--
ALTER TABLE `bid`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brgybusiclear`
--
ALTER TABLE `brgybusiclear`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brgybusiclos`
--
ALTER TABLE `brgybusiclos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brgycertburial`
--
ALTER TABLE `brgycertburial`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brgycertfish`
--
ALTER TABLE `brgycertfish`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brgycertificate`
--
ALTER TABLE `brgycertificate`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brgycertjob`
--
ALTER TABLE `brgycertjob`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brgycertlegalg`
--
ALTER TABLE `brgycertlegalg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brgycertnobirth`
--
ALTER TABLE `brgycertnobirth`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brgyindigency`
--
ALTER TABLE `brgyindigency`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brgyoathjob`
--
ALTER TABLE `brgyoathjob`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brgypermocc`
--
ALTER TABLE `brgypermocc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brgysoloparent`
--
ALTER TABLE `brgysoloparent`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brgytravelpirm`
--
ALTER TABLE `brgytravelpirm`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `complaint`
--
ALTER TABLE `complaint`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `request_amounts`
--
ALTER TABLE `request_amounts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblresident`
--
ALTER TABLE `tblresident`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userusers`
--
ALTER TABLE `userusers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `unique_username` (`username`),
  ADD UNIQUE KEY `unique_email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bid`
--
ALTER TABLE `bid`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `brgybusiclear`
--
ALTER TABLE `brgybusiclear`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `brgybusiclos`
--
ALTER TABLE `brgybusiclos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `brgycertburial`
--
ALTER TABLE `brgycertburial`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `brgycertfish`
--
ALTER TABLE `brgycertfish`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `brgycertificate`
--
ALTER TABLE `brgycertificate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `brgycertjob`
--
ALTER TABLE `brgycertjob`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `brgycertlegalg`
--
ALTER TABLE `brgycertlegalg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `brgycertnobirth`
--
ALTER TABLE `brgycertnobirth`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `brgyindigency`
--
ALTER TABLE `brgyindigency`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `brgyoathjob`
--
ALTER TABLE `brgyoathjob`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `brgypermocc`
--
ALTER TABLE `brgypermocc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `brgysoloparent`
--
ALTER TABLE `brgysoloparent`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `brgytravelpirm`
--
ALTER TABLE `brgytravelpirm`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `complaint`
--
ALTER TABLE `complaint`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `request_amounts`
--
ALTER TABLE `request_amounts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `tblresident`
--
ALTER TABLE `tblresident`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `userusers`
--
ALTER TABLE `userusers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
