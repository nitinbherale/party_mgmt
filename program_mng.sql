-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 31, 2018 at 06:58 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 5.6.37

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `program_mng`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_adm`
--

CREATE TABLE `tbl_adm` (
  `ad_id` int(11) NOT NULL,
  `ad_f_nm` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ad_usr_nm` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ad_pwd` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ad_mob_no` decimal(10,0) DEFAULT NULL,
  `ad_mail` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ad_type` int(11) DEFAULT '0',
  `ad_active` int(11) DEFAULT '0',
  `ad_pic` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ad_sess` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_adm`
--

INSERT INTO `tbl_adm` (`ad_id`, `ad_f_nm`, `ad_usr_nm`, `ad_pwd`, `ad_mob_no`, `ad_mail`, `ad_type`, `ad_active`, `ad_pic`, `ad_sess`) VALUES
(1, 'Nitin Bherale', 'admin', '675737b908ed6fa14bb6c3d7157f49d6', '9922854416', 'nitinbherale@rediffmail.com', 0, 0, NULL, 'mtsp1sprft4tthpngoja1vt8i0');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_dist`
--

CREATE TABLE `tbl_dist` (
  `dist_id` int(10) NOT NULL,
  `dist_name` varchar(250) NOT NULL,
  `created` datetime(6) NOT NULL,
  `modified` datetime(6) NOT NULL,
  `status` int(250) DEFAULT '0',
  `parent_id` int(10) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_dist`
--

INSERT INTO `tbl_dist` (`dist_id`, `dist_name`, `created`, `modified`, `status`, `parent_id`) VALUES
(1, 'Amravati', '0000-00-00 00:00:00.000000', '0000-00-00 00:00:00.000000', 1, 0),
(2, 'Thane', '2018-08-27 06:41:57.000000', '0000-00-00 00:00:00.000000', 1, 0),
(3, 'Ahmednagar', '2018-08-27 07:41:18.000000', '0000-00-00 00:00:00.000000', 1, 0),
(4, 'Akola', '2018-08-27 07:41:38.000000', '0000-00-00 00:00:00.000000', 1, 0),
(5, 'Amravati', '2018-08-27 07:41:49.000000', '0000-00-00 00:00:00.000000', 1, 0),
(6, 'Aurangabad', '2018-08-27 07:42:03.000000', '0000-00-00 00:00:00.000000', 1, 0),
(7, 'Beed', '2018-08-27 07:42:16.000000', '0000-00-00 00:00:00.000000', 1, 0),
(8, 'Bhandara', '2018-08-27 07:42:34.000000', '0000-00-00 00:00:00.000000', 1, 0),
(9, 'Buldhana', '2018-08-27 07:42:47.000000', '0000-00-00 00:00:00.000000', 1, 0),
(10, 'Chandrapur', '2018-08-27 07:43:01.000000', '0000-00-00 00:00:00.000000', 1, 0),
(11, 'Dhule	', '2018-08-27 07:45:05.000000', '0000-00-00 00:00:00.000000', 1, 0),
(12, 'Gadchiroli', '2018-08-27 07:45:18.000000', '0000-00-00 00:00:00.000000', 1, 0),
(13, 'Gondia	', '2018-08-27 07:45:36.000000', '0000-00-00 00:00:00.000000', 1, 0),
(14, 'Hingoli	', '2018-08-27 07:45:50.000000', '0000-00-00 00:00:00.000000', 1, 0),
(15, 'Jalgaon	', '2018-08-27 07:46:07.000000', '0000-00-00 00:00:00.000000', 1, 0),
(16, 'Jalna	', '2018-08-27 07:46:19.000000', '0000-00-00 00:00:00.000000', 1, 0),
(17, 'Kolhapur	', '2018-08-27 07:46:31.000000', '0000-00-00 00:00:00.000000', 1, 0),
(18, 'Latur	', '2018-08-27 07:46:42.000000', '0000-00-00 00:00:00.000000', 1, 0),
(19, 'Nagpur	', '2018-08-27 07:46:55.000000', '0000-00-00 00:00:00.000000', 1, 0),
(20, 'Nanded	', '2018-08-27 07:47:06.000000', '0000-00-00 00:00:00.000000', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_evnt`
--

CREATE TABLE `tbl_evnt` (
  `evnt_id` int(11) NOT NULL,
  `evnt_tit` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `evnt_des` longtext COLLATE utf8_unicode_ci,
  `evnt_date` date DEFAULT NULL,
  `evnt_time` time DEFAULT NULL,
  `evnt_str` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `evnt_cty` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `evnt_pin_cod` decimal(10,0) DEFAULT NULL,
  `evnt_coor_per` longtext COLLATE utf8_unicode_ci,
  `evnt_cor_phone` int(12) NOT NULL,
  `evnt_cor_email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `evnt_pic` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `evnt_appr` int(11) DEFAULT '0',
  `evnt_appr_time` datetime DEFAULT NULL,
  `evnt_appr_by` int(11) DEFAULT NULL,
  `evnt_dis_appr_time` datetime DEFAULT NULL,
  `evnt_dis_appr_by` int(11) DEFAULT NULL,
  `evnt_active` int(11) DEFAULT '0',
  `evnt_edit_time` datetime DEFAULT NULL,
  `evnt_add_by` int(11) DEFAULT NULL,
  `evnt_add_time` datetime DEFAULT NULL,
  `evnt_assg_to_id` int(11) DEFAULT NULL,
  `evnt_assg_to_name` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `evnt_assg_time` datetime DEFAULT NULL,
  `evnt_assg` int(11) DEFAULT '0',
  `evnt_noti` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `evnt_cnl` int(11) DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_evnt`
--

INSERT INTO `tbl_evnt` (`evnt_id`, `evnt_tit`, `evnt_des`, `evnt_date`, `evnt_time`, `evnt_str`, `evnt_cty`, `evnt_pin_cod`, `evnt_coor_per`, `evnt_cor_phone`, `evnt_cor_email`, `evnt_pic`, `evnt_appr`, `evnt_appr_time`, `evnt_appr_by`, `evnt_dis_appr_time`, `evnt_dis_appr_by`, `evnt_active`, `evnt_edit_time`, `evnt_add_by`, `evnt_add_time`, `evnt_assg_to_id`, `evnt_assg_to_name`, `evnt_assg_time`, `evnt_assg`, `evnt_noti`, `evnt_cnl`) VALUES
(37, 'à¤†à¤°à¥‹à¤—à¥à¤¯ à¤¶à¤¿à¤¬à¥€à¤°', '', '0000-00-00', '14:00:00', 'Janata Vasahat, Jai Bhawani Nagar, Parvati', 'pune', '400235', '', 0, '', '1535202831_logo.png', 1, NULL, NULL, NULL, NULL, 1, NULL, 1, '2018-08-25 18:43:51', NULL, NULL, NULL, 0, NULL, 0),
(44, 'à¤¶à¤¿à¤µà¤¸à¥‡à¤¨à¤¾ à¤ªà¤•à¥à¤·à¤ªà¥à¤°à¤®à¥à¤– à¤‰à¤¦à¥à¤§à¤µà¤œà¥€ à¤ à¤¾à¤•à¤°à¥‡ à¤¯à¤¾à¤‚à¤šà¥à¤¯à¤¾ à¤µà¤¾à¤¢à¤¦à¤¿à¤µà¤¸à¤¾à¤¨à¤¿à¤®à¤¿à¤¤à¥à¤¤ à¥¨ à¤¹à¤œà¤¾à¤° à¤…à¤¨à¤¾à¤¥ à¤†à¤¦à¤¿à¤µà¤¾à¤¸à¥€ à¤®à¥à¤²à¤¾ - à¤®à¥à¤²à¥€à¤‚à¤šà¥à¤¯à¤¾ à¤†à¤°à¥‹à¤—à¥à¤¯à¤¾à¤šà¥€ à¤•à¤¾à¤³à¤œà¥€ à¤˜à¥‡à¤£à¥à¤¯à¤¾à¤¸à¤¾à¤ à¥€..', 'à¤¶à¤¿à¤µà¤¸à¥‡à¤¨à¤¾ à¤ªà¤•à¥à¤·à¤ªà¥à¤°à¤®à¥à¤– à¤‰à¤¦à¥à¤§à¤µà¤œà¥€ à¤ à¤¾à¤•à¤°à¥‡ à¤¯à¤¾à¤‚à¤šà¥à¤¯à¤¾ à¤µà¤¾à¤¢à¤¦à¤¿à¤µà¤¸à¤¾à¤¨à¤¿à¤®à¤¿à¤¤à¥à¤¤ à¥¨ à¤¹à¤œà¤¾à¤° à¤…à¤¨à¤¾à¤¥ à¤†à¤¦à¤¿à¤µà¤¾à¤¸à¥€ à¤®à¥à¤²à¤¾ - à¤®à¥à¤²à¥€à¤‚à¤šà¥à¤¯à¤¾ à¤†à¤°à¥‹à¤—à¥à¤¯à¤¾à¤šà¥€ à¤•à¤¾à¤³à¤œà¥€ à¤˜à¥‡à¤£à¥à¤¯à¤¾à¤¸à¤¾à¤ à¥€.. à¤…à¤¨à¤¾à¤¥ à¤¬à¤¾à¤²à¤•à¤¾à¤‚à¤šà¥à¤¯à¤¾, à¤†à¤¦à¤¿à¤µà¤¾à¤¸à¥€à¤‚à¤šà¥à¤¯à¤¾ à¤¸à¥‡à¤µà¥‡à¤¸à¤¾à¤ à¥€ à¤†à¤¯à¥‹à¤œà¤¿à¤¤ à¤†à¤°à¥‹à¤—à¥à¤¯ à¤¶à¤¿à¤¬à¥€à¤° à¤°à¤µà¤¿à¤µà¤¾à¤°, à¤¦à¤¿. à¥« à¤‘à¤—à¤¸à¥à¤Ÿ à¥¨à¥¦à¥§à¥® à¤•à¥ˆ. à¤‰à¤²à¥à¤¹à¤¾à¤¸à¤°à¤¾à¤µ à¤­à¥‹à¤ˆà¤° à¤†à¤¶à¥à¤°à¤®à¤¶à¤¾à¤³à¤¾, à¤®à¤¾à¤£, à¤¤à¤¾. à¤µà¤¿à¤•à¥à¤°à¤®à¤—à¤¡, à¤œà¤¿. à¤ªà¤¾à¤²à¤˜à¤° à¤¯à¥‡à¤¥à¥‡ à¤à¤• à¤¦à¤¿à¤µà¤¸... à¤•à¥à¤ªà¥‹à¤·à¤£ à¤®à¥à¤•à¥à¤¤à¥€à¤¸à¤¾à¤ à¥€ à¤†à¤¦à¤¿à¤µà¤¾à¤¸à¥€ à¤¬à¤¾à¤‚à¤§à¤µà¤¾à¤‚à¤¸à¤¾à¤ à¥€ ! à¤ªà¥à¤°à¤®à¥à¤– à¤…à¤¤à¤¿à¤¥à¥€ à¤¶à¤¿à¤µà¤¸à¥‡à¤¨à¤¾ à¤¨à¥‡à¤¤à¥‡ à¤µ à¤¯à¥à¤µà¤¾à¤¸à¥‡à¤¨à¤¾ à¤ªà¥à¤°à¤®à¥à¤– à¤†à¤¦à¤¿à¤¤à¥à¤¯à¤œà¥€ à¤ à¤¾à¤•à¤°à¥‡ - à¥ªà¥¦ à¤¨à¤¾à¤®à¤¾à¤‚à¤•à¤¿à¤¤ à¤¡à¥‰à¤•à¥à¤Ÿà¤°à¥à¤¸ - à¥¨ à¤¹à¤œà¤¾à¤° à¤µà¤¿à¤¦à¥à¤¯à¤¾à¤°à¥à¤¥à¥€ à¤µ à¤°à¥à¤—à¥à¤£à¤¾à¤‚à¤•à¤°à¥€à¤¤à¤¾ à¤”à¤·à¤§à¥‡ - ECG, Bone Density à¤¤à¤ªà¤¾à¤¸à¤£à¥€ - à¤¸à¥à¤¸à¤œà¥à¤œ à¤ªà¥…à¤¥à¤¾à¤²à¥‰à¤œà¥€ à¤²à¥…à¤¬ - à¤•à¥à¤ªà¥‹à¤·à¤¿à¤¤ à¤¬à¤¾à¤²à¤•à¤¾à¤‚à¤¨à¤¾ à¤ªà¥à¤°à¥‹à¤Ÿà¥€à¤¨ à¤ªà¤¾à¤µà¤¡à¤° à¤µ à¤µà¥à¤¹à¤¿à¤Ÿà¥…à¤®à¤¿à¤¨à¥à¤¸ à¤”à¤·à¤§à¥‡ -à¤†à¤¶à¥à¤°à¤® à¤¶à¤¾à¤³à¥‡à¤¸ à¤¸à¤‚à¤—à¤£à¤•à¤¾à¤šà¥‡ à¤µà¤¿à¤¤à¤°à¤£ - à¤µà¤¿à¤¦à¥à¤¯à¤¾à¤°à¥à¤¥à¥à¤¯à¤¾à¤‚à¤¸à¤¾à¤ à¥€ à¤•à¤°à¤®à¤£à¥‚à¤•\r\n', '2018-08-28', '04:00:00', '', 'Kalyan', '421301', '1,2', 0, '', '1535349726_VC2_-Front.png', 0, NULL, NULL, NULL, NULL, 1, NULL, 1, '2018-08-27 11:32:06', NULL, NULL, NULL, 0, NULL, 0),
(38, 'à¤†à¤°à¥‹à¤—à¥à¤¯ à¤¶à¤¿à¤¬à¥€à¤°', '', '0000-00-00', '14:00:00', 'Janata Vasahat, Jai Bhawani Nagar, Parvati', 'pune', '400235', '', 0, '', '1535202831_logo.png', 1, NULL, NULL, NULL, NULL, 1, NULL, 1, '2018-08-25 18:43:51', NULL, NULL, NULL, 0, NULL, 0),
(42, 'test event', 'test', '2018-08-28', '02:03:00', 'test', 'Kalyan', '421301', '2', 0, '', '1535202932_logo.png', 0, NULL, NULL, NULL, NULL, 1, NULL, 1, '2018-08-25 18:45:32', NULL, NULL, NULL, 0, NULL, 0),
(43, 'Self Defence', 'à¤—à¥à¤°à¥à¤µà¤¾à¤° à¤¦à¤¿. à¥§à¥¬ à¤‘à¤—à¤¸à¥à¤Ÿ à¥¨à¥¦à¥§à¥® à¤°à¥‹à¤œà¥€ à¤¸à¤•à¤¾à¤³à¥€ à¥§à¥§.à¥¦à¥¦ à¤µà¤¾à¤œà¤¤à¤¾ à¤¸à¤¾à¤•à¥‡à¤¤ à¤•à¥‰à¤²à¥‡à¤œ ( à¤•à¤²à¥à¤¯à¤¾à¤£ à¤ªà¥à¤°à¥à¤µ ) à¤¯à¥‡à¤¥à¥‡ \"à¤¸à¥‡à¤²à¥à¤« à¤¡à¤¿à¤«à¥‡à¤¨à¥à¤¸\" à¤¯à¤¾ à¤•à¤¾à¤°à¥à¤¯à¤•à¥à¤°à¤®à¤¾à¤šà¥‡ à¤†à¤¯à¥‹à¤œà¤¨ à¤•à¤°à¤£à¥à¤¯à¤¾à¤¤ à¤†à¤²à¥‡ à¤†à¤¹à¥‡.\r\n', '2018-08-28', '02:02:00', 'test', 'Kalyan', '421299', '1', 0, '', '1535349187_logo.png', 0, NULL, NULL, NULL, NULL, 1, NULL, 1, '2018-08-27 11:23:07', NULL, NULL, NULL, 0, NULL, 0),
(39, 'à¤†à¤°à¥‹à¤—à¥à¤¯ à¤¶à¤¿à¤¬à¥€à¤°', '', '0000-00-00', '14:00:00', 'Janata Vasahat, Jai Bhawani Nagar, Parvati', 'pune', '400235', '', 0, '', '1535202831_logo.png', 0, NULL, NULL, NULL, NULL, 1, NULL, 1, '2018-08-25 18:43:51', NULL, NULL, NULL, 0, NULL, 0),
(40, 'à¤†à¤°à¥‹à¤—à¥à¤¯ à¤¶à¤¿à¤¬à¥€à¤°', '', '0000-00-00', '14:00:00', 'Janata Vasahat, Jai Bhawani Nagar, Parvati', 'pune', '400235', '', 0, '', '1535202831_logo.png', 0, NULL, NULL, NULL, NULL, 1, NULL, 1, '2018-08-25 18:43:51', NULL, NULL, NULL, 0, NULL, 0),
(41, 'à¤†à¤°à¥‹à¤—à¥à¤¯ à¤¶à¤¿à¤¬à¥€à¤°', '', '0000-00-00', '14:00:00', 'Janata Vasahat, Jai Bhawani Nagar, Parvati', 'pune', '400235', '', 0, '', '1535202831_logo.png', 0, NULL, NULL, NULL, NULL, 1, NULL, 1, '2018-08-25 18:43:51', NULL, NULL, NULL, 0, NULL, 0),
(45, 'à¤¶à¤¾à¤²à¥‡à¤¯ à¤µà¤¿à¤¦à¥à¤¯à¤¾à¤°à¥à¤¥à¥à¤¯à¤¾à¤‚à¤¨à¤¾ à¤¶à¤¾à¤²à¥‡à¤¯ à¤µà¤¸à¥à¤¤à¥, à¤¶à¥ˆà¤•à¥à¤·à¤£à¥€à¤• à¤¶à¥à¤²à¥à¤• à¤ˆ. à¤µà¤¾à¤Ÿà¤ª.', 'à¤¶à¤¨à¥€à¤µà¤¾à¤° à¤¦à¤¿. à¥©à¥¦ à¤œà¥à¤¨ à¥¨à¥¦à¥§à¥® à¤°à¥‹à¤œà¥€à¤šà¤¾ à¤¶à¤¿à¤µà¤¸à¥‡à¤¨à¤¾ à¤¨à¥‡à¤¤à¥‡, à¤¯à¥à¤µà¤¾à¤¸à¥‡à¤¨à¤¾à¤ªà¥à¤°à¤®à¥à¤– à¤†à¤¦à¤¿à¤¤à¥à¤¯à¤¸à¤¾à¤¹à¥‡à¤¬ à¤ à¤¾à¤•à¤°à¥‡ à¤¯à¤¾à¤‚à¤šà¥à¤¯à¤¾ à¤¶à¥à¤­à¤¹à¤¸à¥à¤¤à¥‡ à¤¦à¥. à¥§à¥¨ à¤µà¤¾. à¤®à¥à¤²à¥à¤‚à¤¡ à¤•à¤¾à¤²à¥€à¤¦à¤¾à¤¸ à¤¨à¤¾à¤Ÿà¥à¤¯à¤®à¤‚à¤¦à¤¿à¤° à¤¯à¥‡à¤¥à¥‡ à¤¶à¤¾à¤²à¥‡à¤¯ à¤µà¤¿à¤¦à¥à¤¯à¤¾à¤°à¥à¤¥à¥à¤¯à¤¾à¤‚à¤¨à¤¾ à¤¶à¤¾à¤²à¥‡à¤¯ à¤µà¤¸à¥à¤¤à¥, à¤¶à¥ˆà¤•à¥à¤·à¤£à¥€à¤• à¤¶à¥à¤²à¥à¤• à¤ˆ. à¤µà¤¾à¤Ÿà¤ª. à¤•à¤°à¤£à¥à¤¯à¤¾à¤¤ à¤¯à¥‡à¤£à¤¾à¤° à¤†à¤¹à¥‡.\r\n', '2018-08-28', '00:02:00', 'Apti', 'Kalyan', '421299', '2', 0, '', '1535349781_VC1_-Front.png', 0, NULL, NULL, NULL, NULL, 1, NULL, 1, '2018-08-27 11:33:01', NULL, NULL, NULL, 0, NULL, 0),
(46, 'BMC School Primary Section 1,38,000 Students Dental Check Drive Inauguration', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2018-08-28', '14:04:00', 'Vadavli road,Badlapur', 'Kalyan', '421300', '2', 0, '', '1535361930_img_evnt.jpeg', 0, NULL, NULL, NULL, NULL, 1, NULL, 1, '2018-08-27 14:55:30', NULL, NULL, NULL, 0, NULL, 0),
(47, 'Self Defence', 'à¤¬à¥à¤§à¤µà¤¾à¤° à¤¦à¤¿. à¥® à¤‘à¤—à¤¸à¥à¤Ÿ à¥¨à¥¦à¥§à¥® à¤°à¥‹à¤œà¥€ à¤¸à¤•à¤¾à¤³à¥€ à¥§à¥§.à¥©à¥¦ à¤µà¤¾à¤œà¤¤à¤¾ à¤­à¤µà¤¨à¥à¤¸ à¤•à¥‰à¤²à¥‡à¤œ à¤¯à¥‡à¤¥à¥‡ \"à¤¸à¥‡à¤²à¥à¤« à¤¡à¤¿à¤«à¥‡à¤¨à¥à¤¸\" à¤¯à¤¾ à¤•à¤¾à¤°à¥à¤¯à¤•à¥à¤°à¤®à¤¾à¤šà¥‡ à¤†à¤¯à¥‹à¤œà¤¨ à¤•à¤°à¤£à¥à¤¯à¤¾à¤¤ à¤†à¤²à¥‡ à¤†à¤¹à¥‡.\r\n', '2018-08-30', '03:03:00', 'Bhavans College Rd, Old D N Nagar, Munshi Nagar, Andheri West', 'Mumbai', '422222', '', 2147483647, 'nitin.bherale@nmpl.biz', '1535525027_img_event.jpeg', 1, NULL, NULL, NULL, NULL, 1, NULL, 1, '2018-08-29 12:13:47', NULL, NULL, NULL, 0, NULL, 0),
(48, 'Self Defence', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2018-08-31', '02:03:00', 'At-Apti,Post_vaholi', 'Mumbai', '421301', '', 2147483647, 'nitin.bherale@nmpl.biz', '1535533094_img_event.jpeg', 1, NULL, NULL, NULL, NULL, 1, NULL, 1, '2018-08-29 14:28:14', NULL, NULL, NULL, 0, NULL, 0),
(49, 'Self Defence', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2018-08-30', '04:04:00', 'At-Apti,Post_vaholi', 'Mumbai', '421301', '', 2147483647, 'nitin.bherale@nmpl.biz', '1535542575_img_event.jpeg', 1, NULL, NULL, NULL, NULL, 1, NULL, 1, '2018-08-29 17:06:15', NULL, NULL, NULL, 0, NULL, 0),
(50, 'Self Defence', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2018-08-30', '01:02:00', 'At-Apti,Post_vaholi', 'Mumbai', '421301', '', 2147483647, 'nitin.bherale@nmpl.biz', '1535542744_img_event.jpeg', 1, NULL, NULL, NULL, NULL, 0, NULL, 1, '2018-08-29 17:09:04', NULL, NULL, NULL, 0, NULL, 0),
(51, 'Self Defence', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2018-08-30', '01:02:00', 'At-Apti,Post_vaholi', 'Mumbai', '421301', '', 2147483647, 'nitin.bherale@nmpl.biz', '1535543013_img_event.jpeg', 1, NULL, NULL, NULL, NULL, 0, NULL, 1, '2018-08-29 17:13:33', NULL, NULL, NULL, 0, NULL, 0),
(52, 'Self Defence', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2018-08-30', '01:02:00', 'Bhavans College Rd, Old D N Nagar, Munshi Nagar, Andheri West', 'Mumbai', '421301', '', 2147483647, 'nitin.bherale@nmpl.biz', '1535543194_img_event.jpeg', 1, NULL, NULL, NULL, NULL, 1, NULL, 1, '2018-08-29 17:16:34', NULL, NULL, NULL, 0, NULL, 0),
(53, 'Self Defence', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.\r\n', '2018-08-31', '02:02:00', 'At-Apti,Post_vaholi', 'Mumbai', '421301', '', 2147483647, 'nitin.bherale@nmpl.biz', '1535605667_img_event.jpeg', 1, NULL, NULL, NULL, NULL, 0, NULL, 1, '2018-08-30 10:37:47', NULL, NULL, NULL, 0, NULL, 0),
(54, 'Self Defence', 'test', '2018-08-31', '02:03:00', 'At-Apti,Post_vaholi', 'Mumbai', '421301', '', 2147483647, 'nitinbherale@gmail.com', '1535607806_1535361178_tree-plantation.jpg', 1, NULL, NULL, NULL, NULL, 0, NULL, 1, '2018-08-30 11:13:26', NULL, NULL, NULL, 0, NULL, 0),
(55, 'Self Defence', 'test', '2018-08-31', '01:02:00', 'At-Apti,Post_vaholi', 'Mumbai', '421301', '', 2147483647, 'nitinbherale@gmail.com', '1535608151_1535361178_tree-plantation.jpg', 1, NULL, NULL, NULL, NULL, 0, NULL, 1, '2018-08-30 11:19:11', NULL, NULL, NULL, 0, NULL, 0),
(56, 'Self Defence', 'test', '2018-08-31', '01:04:00', 'At-Apti,Post_vaholi', 'Mumbai', '421301', '', 2147483647, 'nitinbherale@gmail.com', '1535609903_1535361178_tree-plantation.jpg', 1, NULL, NULL, NULL, NULL, 0, NULL, 1, '2018-08-30 11:48:23', NULL, NULL, NULL, 0, NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_grp`
--

CREATE TABLE `tbl_grp` (
  `grp_id` int(11) NOT NULL,
  `grp_nm` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `grp_act` int(11) DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_grp`
--

INSERT INTO `tbl_grp` (`grp_id`, `grp_nm`, `grp_act`) VALUES
(1, 'Shivesna', 0),
(2, 'Shivesna', 0),
(3, 'Yuvasena', 0),
(4, 'Yuvasena', 0),
(5, 'Yuvasena', 0),
(6, 'cx', 0),
(7, 'test', 0),
(8, 'Thane', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_master`
--

CREATE TABLE `tbl_master` (
  `app_title` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `app_meta_key` varchar(1000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `app_meta_des` varchar(1000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `app_favicon` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `app_logo` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `app_head_name` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `app_head_email` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `app_head_m_no` decimal(10,0) DEFAULT NULL,
  `app_send_by` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `app_mail_send_by` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_master`
--

INSERT INTO `tbl_master` (`app_title`, `app_meta_key`, `app_meta_des`, `app_favicon`, `app_logo`, `app_head_name`, `app_head_email`, `app_head_m_no`, `app_send_by`, `app_mail_send_by`) VALUES
('Shivsena Party Management', 'Shivsena,Yuvasena', 'Shivsena Program Management Application', 'favicon.ico', 'logo.png', 'Aaditya Thackeray', 'nitinbherale@gmail.com', '9922854416', 'ShivSena Digital Media Team', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_member`
--

CREATE TABLE `tbl_member` (
  `mem_id` int(11) NOT NULL,
  `mem_f_nm` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mem_desn` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mem_email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mem_m_no` decimal(10,0) DEFAULT NULL,
  `mem_wp_no` decimal(10,0) DEFAULT NULL,
  `mem_dis` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mem_tah` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mem_str` varchar(2000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mem_cty` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mem_ps_cd` decimal(10,0) DEFAULT NULL,
  `mem_gen` int(11) DEFAULT NULL,
  `mem_dob` date DEFAULT NULL,
  `mem_fb_lk` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mem_tw_lk` varchar(500) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mem_img` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mem_srt_info` longtext COLLATE utf8_unicode_ci,
  `mem_grp` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mem_active` int(11) DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 CHECKSUM=1 COLLATE=utf8_unicode_ci DELAY_KEY_WRITE=1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `tbl_member`
--

INSERT INTO `tbl_member` (`mem_id`, `mem_f_nm`, `mem_desn`, `mem_email`, `mem_m_no`, `mem_wp_no`, `mem_dis`, `mem_tah`, `mem_str`, `mem_cty`, `mem_ps_cd`, `mem_gen`, `mem_dob`, `mem_fb_lk`, `mem_tw_lk`, `mem_img`, `mem_srt_info`, `mem_grp`, `mem_active`) VALUES
(2, 'nitin bherale', 'web designer', 'nitinbherale@gmail.com', '8652598488', '8652598488', 'Thane', 'Thane', 'Gokhale Road', 'Thane', '402365', 1, '2018-01-10', '', '', NULL, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '', 0),
(3, 'erere', 'ererer', 'fgfg@fgfg.hg', '9922854416', '9922854416', 'asas', 'asas', 'asas', 'asas', '122323', 1, '2018-08-16', 'https://www.google.co.in/', 'https://www.google.co.in/', NULL, 's', '', 1),
(4, 'Ashraf Hussain', 'à¤¶à¤¾à¤–à¤¾à¤ªà¥à¤°à¤®à¥à¤– ', 'nitinbherale@rediffmail.com', '9922854416', '9922854416', 'thane', 'Kalyan', 'Apti', 'Kalyan', '421301', 1, '2018-08-07', 'https://www.facebook.com/groups/kalyancity//', 'https://www.facebook.com/groups/kalyancity//', '1535358044_logo.png', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '', 0),
(5, 'Subhash Bhoir', 'à¤†à¤®à¤¦à¤¾à¤° à¤•à¤²à¥à¤¯à¤¾à¤£ à¤—à¥à¤°à¤¾à¤®à¥€à¤£ ', 'nitinbherale@rediffmail.com', '9922854416', '9922854416', 'thane', 'Kalyan', 'kalyan East', 'Kalyan', '422540', 1, '2018-08-23', 'https://www.facebook.com/groups/kalyancity//', 'https://www.facebook.com/groups/kalyancity//', '1535358155_VC1_-Front.png', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '', 0),
(6, 'à¤µà¤¾à¤®à¤¨ à¤®à¥à¤¹à¤¾à¤¤à¥à¤°à¥‡ ', 'à¤¶à¤¹à¤° à¤ªà¥à¤°à¤®à¥à¤– ', 'nitinbherale@rediffmail.com', '9922854416', '9922854416', 'thane', 'Kalyan', 'Vadavli road,Badlapur', 'à¤¬à¤¦à¤²à¤¾à¤ªà¥‚à¤° ', '421301', 1, '2018-08-15', 'https://www.facebook.com/groups/kalyancity//', 'https://www.facebook.com/groups/kalyancity//', '1535361178_tree-plantation.jpg', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '', 0),
(7, 'Nitin S. Bherale', 'Developer', 'nitin.bherale@nmpl.biz', '9922854416', '9922854416', '', 'Kalyan', 'At-Apti,Post_vaholi', 'Mumbai', '421301', 1, '2018-08-07', 'https://www.facebook.com/', 'https://www.facebook.com/', '1535452961_tecnology-07.jpg', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.\r\n\r\n', '', 0),
(8, 'Nitin S. Bherale', 'Developer', 'nitin.bherale@nmpl.biz', '9922854416', '9922854416', 'Thane', 'Kalyan', 'At-Apti,Post_vaholi', 'Mumbai', '421301', 1, '2018-08-07', 'https://www.facebook.com/', 'https://www.facebook.com/', '1535453728_tecnology-05.jpg', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.\r\n\r\n', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sms`
--

CREATE TABLE `tbl_sms` (
  `sms_id` int(11) NOT NULL,
  `sms_sender_id` int(11) DEFAULT NULL,
  `sms_sender_usnm` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sms_rece_id` int(11) DEFAULT NULL,
  `sms_rece_mn` decimal(10,0) DEFAULT NULL,
  `sms_sent_time` datetime DEFAULT NULL,
  `sms_content` longtext COLLATE utf8_unicode_ci
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_sms`
--

INSERT INTO `tbl_sms` (`sms_id`, `sms_sender_id`, `sms_sender_usnm`, `sms_rece_id`, `sms_rece_mn`, `sms_sent_time`, `sms_content`) VALUES
(1, 1, 'akshata', 2, '8652598488', '2018-08-21 13:26:55', NULL),
(2, 1, 'akshata', 2, '8652598488', '2018-08-21 13:30:03', 'This is my message\r\n\nShivSena Digital Media Team'),
(3, 1, 'akshata', 2, '8652598488', '2018-08-21 13:32:39', 'This is my program\nShivSena Digital Media Team'),
(4, 1, 'akshata', 2, '8652598488', '2018-08-23 16:06:07', 'THis is my message\nShivSena Digital Media Team'),
(5, 1, 'akshata', 3, '9922854416', '2018-08-25 19:59:14', 'FDF\nShivSena Digital Media Team');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_tahsil`
--

CREATE TABLE `tbl_tahsil` (
  `id` int(10) NOT NULL,
  `tahsil_name` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_adm`
--
ALTER TABLE `tbl_adm`
  ADD PRIMARY KEY (`ad_id`);

--
-- Indexes for table `tbl_dist`
--
ALTER TABLE `tbl_dist`
  ADD PRIMARY KEY (`dist_id`);

--
-- Indexes for table `tbl_evnt`
--
ALTER TABLE `tbl_evnt`
  ADD PRIMARY KEY (`evnt_id`);

--
-- Indexes for table `tbl_grp`
--
ALTER TABLE `tbl_grp`
  ADD PRIMARY KEY (`grp_id`);

--
-- Indexes for table `tbl_member`
--
ALTER TABLE `tbl_member`
  ADD PRIMARY KEY (`mem_id`);

--
-- Indexes for table `tbl_sms`
--
ALTER TABLE `tbl_sms`
  ADD PRIMARY KEY (`sms_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_adm`
--
ALTER TABLE `tbl_adm`
  MODIFY `ad_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_dist`
--
ALTER TABLE `tbl_dist`
  MODIFY `dist_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `tbl_evnt`
--
ALTER TABLE `tbl_evnt`
  MODIFY `evnt_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `tbl_grp`
--
ALTER TABLE `tbl_grp`
  MODIFY `grp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_member`
--
ALTER TABLE `tbl_member`
  MODIFY `mem_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_sms`
--
ALTER TABLE `tbl_sms`
  MODIFY `sms_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
