-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 14, 2015 at 04:09 PM
-- Server version: 5.5.44-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `action-tag_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `actiontags`
--

CREATE TABLE IF NOT EXISTS `actiontags` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `site_id` int(11) DEFAULT NULL,
  `guid` varchar(250) CHARACTER SET cp1250 COLLATE cp1250_czech_cs DEFAULT NULL,
  `name` varchar(250) DEFAULT '',
  `redirect` text,
  `sms_to` varchar(250) DEFAULT NULL,
  `sms_msg` text,
  `email_to` varchar(250) DEFAULT NULL,
  `email_from` varchar(250) DEFAULT NULL,
  `email_subj` varchar(250) DEFAULT NULL,
  `email_body` text,
  `is_redir` tinyint(1) DEFAULT '1',
  `type` varchar(200) DEFAULT NULL,
  `status` tinyint(1) DEFAULT '0',
  `active` tinyint(1) DEFAULT '0',
  `msg_success` text,
  `msg_error` text,
  `created` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `guid` (`guid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=556 ;

--
-- Dumping data for table `actiontags`
--

INSERT INTO `actiontags` (`id`, `user_id`, `site_id`, `guid`, `name`, `redirect`, `sms_to`, `sms_msg`, `email_to`, `email_from`, `email_subj`, `email_body`, `is_redir`, `type`, `status`, `active`, `msg_success`, `msg_error`, `created`) VALUES
(1, 1223, 23, 'a21a04da-8bf1-42a5-8baa-4505ad05a8d6', 'Water Fountain', '', '09256170920', 'Concierge - Water Fountain needs Attention', NULL, NULL, NULL, NULL, 0, 'send_sms', 1, 1, 'Trial success message!                                                                                                                                                                                           ', 'Trial error message!                                                                                                                                                                                           ', '2015-07-03 07:24:58'),
(2, 1223, 23, '5ba0aa4e-cb34-4167-a2d5-c455cceaa696', 'Water Fountain', '', '09256170920', 'Concierge - Level 3 Cafe - Water Fountain needs Attention ', NULL, NULL, NULL, NULL, 0, 'send_sms', 1, 1, '     ', '     ', '2015-07-03 07:26:47'),
(3, 1223, 23, 'e9d7e117-70a6-4878-96ca-d104c08a3b64', 'Water Fountain', '', '09256170920', 'Concierge - Water Fountain needs Attention ', NULL, NULL, NULL, NULL, 0, 'send_sms', 1, 1, ' ', ' ', '2015-07-03 07:26:47'),
(4, 1223, 23, '260d62ee-77e3-4b6b-9895-9dfc01703953', 'Water Fountain', '', '09256170920', 'Concierge - Water Fountain needs Attention ', NULL, NULL, NULL, NULL, 0, 'send_sms', 1, 1, '   ', '   ', '2015-07-03 07:41:15'),
(5, 1223, 23, '6000110d-f7d1-403d-bfc5-ce303b8db8cb', 'Water Fountain', '', '09256170920', 'Concierge - Water Fountain needs Attention ', NULL, NULL, NULL, NULL, 0, 'send_sms', 1, 1, '    ', '    ', '2015-07-03 07:41:15'),
(6, 1223, 23, 'ecb0b712-d6a5-48ff-9f3a-66ed3a9db9a2', 'Male CR B4  L3', '', '09256170920', 'Dear Cleaner - Attend to Level 3 - B4 - Male CR ', NULL, NULL, NULL, NULL, 0, 'send_sms', 1, 1, '     ', '     ', '2015-07-03 07:41:15'),
(7, 1223, 23, '76e77b63-ec08-40-a9-bbe5-3f526eaf3a7a', 'Water Fountain B4 L3', '', '09256170920', 'Concierge - Level 3 Cafe - Water Fountain needs Attention ', NULL, NULL, NULL, NULL, 0, 'send_sms', 1, 1, '  ', '  ', '2015-07-03 07:41:15'),
(8, 1223, 23, '0e51ecd9-82fe-4928-a941-fcf81506efbb', 'Male CR B4 L3', '', '09256170920', 'Dear Cleaner - Attend to Level 3 - B4 - Male CR ', '', '', '', '', 0, 'send_sms', 1, 1, '', '', '2015-07-03 07:41:15'),
(9, 1223, 23, 'ff2376ff-2cba-4c70-8259-e97338367c04', 'Male CR B4 L3', '', '09256170920', 'Dear Cleaner - Attend to Level 3 - B4 - Male CR ', NULL, NULL, NULL, NULL, 0, 'send_sms', 1, 1, '   ', '   ', '2015-07-03 07:41:15'),
(10, 1223, 23, 'cfc3bc71-e2a2-48fe-91cf-829a81f40d85', 'Male CR B4 L3', '', '09256170920', 'Dear Cleaner - Attend to Level 3 - B4 - Male CR ', NULL, NULL, NULL, NULL, 0, 'send_sms', 1, 1, '     ', '     ', '2015-07-03 07:41:15'),
(11, 1223, 23, '7bac9919-b457-4aaf-be13-83e869d8c0d5', 'Board Room B4 L3 ', '', '09256170920', 'Concierge - Level 3 Board Room meeting is finsihed - pls Refresh Room ', NULL, NULL, NULL, NULL, 0, 'send_sms', 1, 1, '', '', '2015-07-03 07:41:15'),
(12, 1223, 23, 'ec2f7cec-4169-44a1-a12f-e31471140ec7', 'Board Room B4 L3 ', '', '09256170920', 'Concierge - Level 3 Board Room meeting is finsihed - pls Refresh Room ', NULL, NULL, NULL, NULL, 0, 'send_sms', 1, 1, '', '', '2015-07-03 07:41:15'),
(13, 1223, 23, '903ac1ed-713b-43d8-8f33-02b6f95ef6fb', 'Board Room B4 L3 ', '', '09256170920', 'Concierge - Level 3 Board Room meeting is finsihed - pls Refresh Room ', NULL, NULL, NULL, NULL, 0, 'send_sms', 1, 1, '', '', '2015-07-03 07:41:15'),
(14, 1223, 23, 'd9a343fc-4f20-4d96-a9f7-d9d16d29a80a', 'Replace Toner', 'http://cs.process-box.com/replace-toner/', NULL, NULL, NULL, NULL, NULL, NULL, 1, 'redir_to_url', 1, 1, '', '', '2015-07-03 07:41:15'),
(15, 1223, 23, 'c569e610-b30d-4860-b151-7ec82948fa59', 'Replace Toner', 'http://cs.process-box.com/replace-toner/', NULL, NULL, NULL, NULL, NULL, NULL, 1, 'redir_to_url', 1, 1, '', '', '2015-07-03 07:41:15'),
(16, 1223, 23, '97895cbf-410e-4bf0-b4cb-bd1c89c6e979', 'Replace Toner', 'http://cs.process-box.com/replace-toner/', NULL, NULL, NULL, NULL, NULL, NULL, 1, 'redir_to_url', 1, 1, '', '', '2015-07-03 07:41:15'),
(17, 1223, 23, '59f30280-9b61-4159-a4c9-7fa91f6efcc5', 'Replace Toner', 'http://cs.process-box.com/replace-toner/', NULL, NULL, NULL, NULL, NULL, NULL, 1, 'redir_to_url', 1, 1, '', '', '2015-07-03 07:41:15'),
(18, 1223, 23, '4d220a89-ecae-44a1-8e23-e0b767328cbe', 'Replace Toner', 'http://cs.process-box.com/replace-toner/', NULL, NULL, NULL, NULL, NULL, NULL, 1, 'redir_to_url', 1, 1, '', '', '2015-07-03 07:41:15'),
(21, 1223, 23, '656f6c48-044b-44f8-82b6-bd988c976d9a', 'Water Fountain B1 L2 SALES', '', '09256170920', 'Concierge - Building 1 Level 2 SALES - Water Fountain needs Attention ', NULL, NULL, NULL, NULL, 0, 'send_sms', 1, 1, '', '', '2015-07-03 07:41:15'),
(22, 1223, 23, '01a99e4f-00bb-4223-ad49-9a088d51f416', 'Water Fountain', '', '09256170920', 'Concierge - Water Fountain needs Attention ', NULL, NULL, NULL, NULL, 0, 'send_sms', 1, 1, '', '', '2015-07-03 07:41:15'),
(23, 1223, 23, '70aeade0-0d96-4ada-9aff-8082e98df212', 'Water Fountain', '', '09256170920', 'Concierge - Water Fountain needs Attention ', NULL, NULL, NULL, NULL, 0, 'send_sms', 1, 1, '', '', '2015-07-03 07:41:15'),
(24, 1223, 23, '3dc6f05c-3bc8-479b-90b1-5e30ba5574a7', 'Water Fountain B2 L3', '', '09256170920', 'Concierge - Building 2 Level 3 - Water Fountain needs Attention ', NULL, NULL, NULL, NULL, 0, 'send_sms', 1, 1, '', '', '2015-07-03 07:41:15'),
(25, 1223, 23, '72b29555-f460-4a9d-8867-51d7b7aec865', 'Water Fountain B2 L6', '', '09256170920', 'Concierge - Building 2 Level 6 - Water Fountain needs Attention ', NULL, NULL, NULL, NULL, 0, 'send_sms', 1, 1, '', '', '2015-07-03 07:41:15'),
(26, 1223, 23, '7cc3efd8-23ef-4533-897e-fc868164207b', 'Water Fountain B1 L5', '', '09256170920', 'Concierge - Building 1 Level 5 - Water Fountain needs Attention ', NULL, NULL, NULL, NULL, 0, 'send_sms', 1, 1, '', '', '2015-07-03 07:41:15'),
(27, 1223, 23, 'cc50b6dc-4c43-42a7-80b5-ec2cdd07fc82', 'Water Fountain B2 L4', '', '09256170920', 'Concierge - Building 2 Level 4 - Water Fountain needs Attention ', NULL, NULL, NULL, NULL, 0, 'send_sms', 1, 1, '', '', '2015-07-03 07:41:15'),
(28, 1223, 23, 'cf6c3d3b-03f2-4664-86a4-6b71f4a9c55a', 'Water Fountain B1 L5 FINANCE', '', '09256170920', 'Concierge - Building 1 Level 5 FINANCE - Water Fountain needs Attention ', NULL, NULL, NULL, NULL, 0, 'send_sms', 1, 1, '', '', '2015-07-03 07:41:15'),
(29, 1223, 23, '6610fbf1-e3bd-43e0-b007-872423f7bd8d', 'Water Fountain B1 L3', '', '09256170920', 'Concierge - Building 1 Level 3 - Water Fountain needs Attention ', NULL, NULL, NULL, NULL, 0, 'send_sms', 1, 1, '', '', '2015-07-03 07:41:15'),
(30, 1223, 23, '02166bd2-58ec-458d-98f3-779a18854ab7', 'Water Fountain B1 L4 HR', 'http://sms.cloudstaff.com:8080/index.php?app=ws&u=admin&h=b49e35435223d71511e85cc429c3a809&op=pv&to=09256170920&msg=Concierge - Building 1 Level 4 HR - Water Fountain needs Attention ', '09256170920', 'Concierge - Building 1 Level 4 HR - Water Fountain needs Attention ', NULL, NULL, NULL, NULL, 0, 'send_sms', 1, 1, '', '', '2015-07-03 07:41:15'),
(31, 1223, 23, '714b8742-5a9c-4443-9bb1-d580cdbf613c', 'Water Fountain B1 L4 INTELLIGENT FINANCE ', '', '09256170920', 'Concierge - Building 1 Level 4 INTELLIGENT FINANCE - Water Fountain needs Attention ', NULL, NULL, NULL, NULL, 0, 'send_sms', 1, 1, '', '', '2015-07-03 07:41:15'),
(32, 1223, 23, '4048da32-083b-433e-a755-0940f70677db', 'Water Fountain B1 L2 TECH', '', '09256170920', 'Concierge - Building 1 Level 2 TECH - Water Fountain needs Attention ', NULL, NULL, NULL, NULL, 0, 'send_sms', 1, 1, '', '', '2015-07-03 07:41:15'),
(35, 1223, 23, 'test-guid-for-message', 'test-guid-for-message', '', '09068835445', 'hello jether', 'gamboajetherjosh@gmail.com,kimumali9@gmail.com', 'admin@actiontag.io', 'private beta', 'you are now subscreibed to actiontag private beta', 0, 'send_sms', 1, 1, 'message to jether has been sent ', 'sending failed. lol ', '2015-07-06 02:29:16'),
(36, 1223, 23, 'test-guid-for-activation', 'test-guid-for-activation', 'http://www.actiontag.io', NULL, NULL, 'gamboajetherjosh@gmail.com', 'jetherg@actiontag.io', 'trial success message', 'this is just a trial', 0, 'send_email', 0, 1, 'test success: new status message    ', 'test error: new status message      ', '2015-07-06 03:26:19'),
(101, 1223, 12, '814bf948-7023-4598-bf87-08b52974e852', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 0, 0, NULL, NULL, '2015-08-06 00:15:47'),
(102, 1223, 12, '22a21612-2c63-46ab-970a-65e7c8939b10', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 0, 0, NULL, NULL, '2015-08-06 00:15:47'),
(103, 1223, 12, 'e945efe2-6ce5-4516-823a-5fdee1442141', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 0, 0, NULL, NULL, '2015-08-06 00:15:47'),
(104, 1223, 12, 'c773948f-bfc6-470e-adae-404152123d43', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 0, 0, NULL, NULL, '2015-08-06 00:15:47'),
(105, 1223, 12, 'ee011eb3-e67b-49b5-9744-42aeb8b4eb82', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 0, 0, NULL, NULL, '2015-08-06 00:15:47'),
(106, 1223, 12, 'fcd5935b-b2be-4045-8bcc-dd1d2579b30a', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 0, 0, NULL, NULL, '2015-08-06 00:15:47'),
(107, 1223, 12, 'c3326a18-7d1b-48aa-bf84-b04ca23b6e69', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 0, 0, NULL, NULL, '2015-08-06 00:15:47'),
(108, 1223, 12, '0d142376-b0f5-4fa7-8816-ee55ef15aa57', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 0, 0, NULL, NULL, '2015-08-06 00:15:47'),
(109, 1223, 12, 'bef45443-f2a7-4116-b694-a19b40d7eeaf', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 0, 0, NULL, NULL, '2015-08-06 00:15:47'),
(110, 1223, 12, 'c62c707c-5743-4df8-944c-343d39fd129d', '', '', '', '', '', '', '', '', 1, '', 0, 0, '', '', '2015-08-06 00:15:47'),
(111, 1223, 12, 'c344fe49-0325-4f64-b54c-3a151b82c4d4', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 0, 0, NULL, NULL, '2015-08-06 00:15:47'),
(112, 1223, 12, '0814755a-c616-4d8a-9e0e-2fc5875129c4', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 0, 0, NULL, NULL, '2015-08-06 00:15:47'),
(113, 1223, 12, '076604ed-92cd-49df-88b2-988c899ee2c5', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 0, 0, NULL, NULL, '2015-08-06 00:15:47'),
(114, 1223, 12, '5f3e43cf-0615-4f03-a563-0c303f64d6f6', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 0, 0, NULL, NULL, '2015-08-06 00:15:47'),
(115, 1223, 12, 'cbe77972-56cf-4a69-86c9-57363b68156b', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 0, 0, NULL, NULL, '2015-08-06 00:15:47'),
(116, 1223, 12, '2cf10659-bc5a-4c2e-bb55-7d218e18c5c3', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 0, 0, NULL, NULL, '2015-08-06 00:15:47'),
(117, 1223, 12, '268addd1-a495-4dad-b895-3f5c3b8c3647', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 0, 0, NULL, NULL, '2015-08-06 00:15:47'),
(118, 1223, 12, '925d799d-00e6-423a-9a8e-8e720b2cb90f', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 0, 0, NULL, NULL, '2015-08-06 00:15:47'),
(119, 1223, 12, '59e249b7-0bd6-4a1a-a3a1-0675f1aa4317', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 0, 0, NULL, NULL, '2015-08-06 00:15:47'),
(120, 1223, 12, 'c400f345-235d-4f69-89e8-9d375ac86409', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 0, 0, NULL, NULL, '2015-08-06 00:15:47'),
(121, 1223, 12, '02f278ef-ed24-4fa3-b422-918f3f36a10d', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 0, 0, NULL, NULL, '2015-08-06 00:15:47'),
(122, 1223, 12, 'dda00407-8bb4-49e0-8acf-f15e4b3e1fb0', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 0, 0, NULL, NULL, '2015-08-06 00:15:47'),
(123, 1223, 12, '192b17ce-6918-4ea2-90d5-2c6276be77da', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 0, 0, NULL, NULL, '2015-08-06 00:15:47'),
(124, 1223, 12, '7e97b3a0-1aba-43f5-a184-08e8945d74f2', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 0, 0, NULL, NULL, '2015-08-06 00:15:47'),
(125, 1223, 12, '04818e02-59d4-437a-9ee9-c45498051927', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 0, 0, NULL, NULL, '2015-08-06 00:15:47'),
(126, 1223, 12, '540e4ce5-b065-40a8-8e42-1600d3d67666', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 0, 0, NULL, NULL, '2015-08-06 00:15:47'),
(127, 1223, 12, '3f5c5637-7de8-42c5-98dc-f25dda02bc5b', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 0, 0, NULL, NULL, '2015-08-06 00:15:47'),
(128, 1223, 12, '6dfbed03-9c86-497c-9acd-1d0316cce697', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 0, 0, NULL, NULL, '2015-08-06 00:15:47'),
(129, 1223, 12, '12986c23-efb3-4974-a1f5-1f4fcbdd64c6', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 0, 0, NULL, NULL, '2015-08-06 00:15:47'),
(130, 1223, 12, '72e58208-91ee-4958-b774-2fe96aa406b0', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 0, 0, NULL, NULL, '2015-08-06 00:15:47'),
(131, 1223, 12, '2d605a61-b11c-4dfb-883f-c7e60ba964c7', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 0, 0, NULL, NULL, '2015-08-06 00:15:47'),
(132, 1223, 12, 'd01e2206-0b89-428b-940f-6794a4082ac5', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 0, 0, NULL, NULL, '2015-08-06 00:15:47'),
(133, 1223, 12, '171d06b6-5843-4bfd-a5bf-ee6fbb9b8881', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 0, 0, NULL, NULL, '2015-08-06 00:15:47'),
(134, 1223, 12, 'bd5f00bf-0fb1-427d-a0c5-9bc0fcd582b6', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 0, 0, NULL, NULL, '2015-08-06 00:15:47'),
(135, 1223, 12, '2c896c3b-39fc-4c8c-b935-204d3b0b9310', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 0, 0, NULL, NULL, '2015-08-06 00:15:47'),
(136, 1223, 12, 'e1f14feb-948d-4841-ad42-ab6294cc31a3', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 0, 0, NULL, NULL, '2015-08-06 00:15:47'),
(137, 1223, 12, '55272680-c528-463f-8920-8d5f56610733', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 0, 0, NULL, NULL, '2015-08-06 00:15:47'),
(138, 1223, 12, 'b8a2bf37-b6c3-46d7-927f-8d140a2b6685', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 0, 0, NULL, NULL, '2015-08-06 00:15:47'),
(139, 1223, 12, '0b6a8880-dd61-4ad2-88a4-ead3eeb90f3a', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 0, 0, NULL, NULL, '2015-08-06 00:15:47'),
(140, 1223, 12, 'eee2e364-4f6c-465c-b8d7-0503b08f5992', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 0, 0, NULL, NULL, '2015-08-06 00:15:47'),
(141, 1223, 12, 'bf2960a6-04ab-45a9-a2e8-110108e1d7ea', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 0, 0, NULL, NULL, '2015-08-06 00:15:47'),
(142, 1223, 12, '614289a6-09b6-45d6-a61f-6510b0286ea7', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 0, 0, NULL, NULL, '2015-08-06 00:15:47'),
(143, 1223, 12, '3bac11c5-d2f0-4459-b839-bc012c8ccb74', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 0, 0, NULL, NULL, '2015-08-06 00:15:47'),
(144, 1223, 12, 'dffc4506-5756-4861-93e8-465163c0003a', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 0, 0, NULL, NULL, '2015-08-06 00:15:47'),
(145, 1223, 12, '82ab73f0-7a14-48c8-b13e-282b6b3e168b', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 0, 0, NULL, NULL, '2015-08-06 00:15:47'),
(146, 1223, 12, '6151e432-a690-4542-928e-373f0a0b3840', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 0, 0, NULL, NULL, '2015-08-06 00:15:47'),
(147, 1223, 12, '57847f61-d3b1-4d06-9120-9bce3795cfda', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 0, 0, NULL, NULL, '2015-08-06 00:15:47'),
(148, 1223, 12, '2403cb7e-1aa8-4637-94ee-374df2ec0fe3', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 0, 0, NULL, NULL, '2015-08-06 00:15:47'),
(149, 1223, 12, '05de5746-5e1a-46f9-84f9-2356bae43655', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 0, 0, NULL, NULL, '2015-08-06 00:15:47'),
(150, 1223, 12, '3dfbb4b0-7825-4445-81f1-9716b4a7101b', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 0, 0, NULL, NULL, '2015-08-06 00:15:47'),
(151, 1223, 12, '7321123d-8c3b-4762-99b2-a6088ef5f81d', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 0, 0, NULL, NULL, '2015-08-06 00:15:47'),
(152, 1223, 12, '33dc8186-1997-48ca-a696-9f8a91708d42', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 0, 0, NULL, NULL, '2015-08-06 00:15:47'),
(153, 1223, 12, '8038934b-cd44-4997-836b-b1a107877e91', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 0, 0, NULL, NULL, '2015-08-06 00:15:47'),
(154, 1223, 12, 'b4e80245-86f0-4bf3-b306-8dbaaeb7e0bd', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 0, 0, NULL, NULL, '2015-08-06 00:15:47'),
(155, 1223, 12, '8f8bd24b-1df5-4d6b-8ad8-ad2ea378165c', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 0, 0, NULL, NULL, '2015-08-06 00:15:47'),
(156, 1223, 12, 'f329856b-ff7d-451f-b581-8dcb35de04d7', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 0, 0, NULL, NULL, '2015-08-06 00:15:47'),
(157, 1223, 12, '1b81172f-130c-4f87-9456-5edea426a338', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 0, 0, NULL, NULL, '2015-08-06 00:15:47'),
(158, 1223, 12, 'f19d5b27-1faf-43d0-8a70-e749678d19fb', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 0, 0, NULL, NULL, '2015-08-06 00:15:47'),
(159, 1223, 12, '0984ae47-9ae3-4279-920f-ef4760e8ac26', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 0, 0, NULL, NULL, '2015-08-06 00:15:47'),
(160, 1223, 12, '5c0964da-881c-4baf-9c79-77271cab9b77', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 0, 0, NULL, NULL, '2015-08-06 00:15:47'),
(161, 1223, 12, 'd03f5528-443a-4065-99c6-dcb05d99e0d2', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 0, 0, NULL, NULL, '2015-08-06 00:15:47'),
(162, 1223, 12, 'f115d5d9-8d3d-493f-8be0-8fbb49052ced', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 0, 0, NULL, NULL, '2015-08-06 00:15:47'),
(163, 1223, 12, '296a8e9b-b55f-44da-b977-a5afaac0f89d', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 0, 0, NULL, NULL, '2015-08-06 00:15:47'),
(164, 1223, 12, 'bc33d9d2-947e-4f72-8968-9d8aced2eddb', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 0, 0, NULL, NULL, '2015-08-06 00:15:47'),
(165, 1223, 12, 'bdfe2346-3d01-4b31-8b00-68e443bc6047', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 0, 0, NULL, NULL, '2015-08-06 00:15:47'),
(166, 1223, 12, '68f87ab6-0b71-4733-8905-b8f7bf1e506d', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 0, 0, NULL, NULL, '2015-08-06 00:15:47'),
(167, 1223, 12, 'dcba2e58-9064-4a6d-b302-89005f7912cf', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 0, 0, NULL, NULL, '2015-08-06 00:15:47'),
(168, 1223, 12, '6c0c555a-c0f4-4424-b11f-1bf7b7bd2a98', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 0, 0, NULL, NULL, '2015-08-06 00:15:47'),
(169, 1223, 12, '08057b4c-3cf0-47bd-a9fe-d16d0dac383f', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 0, 0, NULL, NULL, '2015-08-06 00:15:47'),
(170, 1223, 12, '08f5c047-90b3-447d-9597-c56bdc991b35', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 0, 0, NULL, NULL, '2015-08-06 00:15:47'),
(171, 1223, 12, '37e1edda-1f65-489a-b096-6ea41b527e43', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 0, 0, NULL, NULL, '2015-08-06 00:15:47'),
(172, 1223, 12, 'a9477ce9-773f-4334-b000-39ea4b0a5c16', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 0, 0, NULL, NULL, '2015-08-06 00:15:47'),
(173, 1223, 12, '2ebe7683-99c0-45df-87b6-abbb17a7fa09', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 0, 0, NULL, NULL, '2015-08-06 00:15:47'),
(174, 1223, 12, 'b140b311-2361-4fad-9590-93a4aef9a874', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 0, 0, NULL, NULL, '2015-08-06 00:15:47'),
(175, 1223, 12, '151182f8-1969-48a1-90ca-91d06994e987', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 0, 0, NULL, NULL, '2015-08-06 00:15:47'),
(176, 1223, 12, '40f69abe-e91b-47af-bdb5-8328bb8cefd0', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 0, 0, NULL, NULL, '2015-08-06 00:15:47'),
(177, 1223, 12, 'b669583b-c6b3-44a5-aa31-ff759092ae15', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 0, 0, NULL, NULL, '2015-08-06 00:15:47'),
(178, 1223, 12, '59840989-ad95-4a28-9d14-6a5a13fcdad0', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 0, 0, NULL, NULL, '2015-08-06 00:15:47'),
(179, 1223, 12, '6877c2c4-4153-4562-80df-b4a945349fa0', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 0, 0, NULL, NULL, '2015-08-06 00:15:47'),
(180, 1223, 12, 'a1019f14-520c-4078-8686-cf487fb3a908', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 0, 0, NULL, NULL, '2015-08-06 00:15:47'),
(181, 1223, 12, '025f1543-e3f2-418a-a537-93bfd39c53db', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 0, 0, NULL, NULL, '2015-08-06 00:15:47'),
(182, 1223, 12, '6f569ad9-1e26-4867-905a-d75bb30b88f8', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 0, 0, NULL, NULL, '2015-08-06 00:15:47'),
(183, 1223, 12, 'c5ac90d9-f0c7-4950-921e-cced6c926790', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 0, 0, NULL, NULL, '2015-08-06 00:15:47'),
(184, 1223, 12, 'c573cc28-5268-44e1-84d4-3c277df63dd6', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 0, 0, NULL, NULL, '2015-08-06 00:15:47'),
(185, 1223, 12, '5e201edf-8811-4e30-b731-6e323a9807e6', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 0, 0, NULL, NULL, '2015-08-06 00:15:47'),
(186, 1223, 12, 'a8e03f2b-c184-46c0-935d-f2d87457a8aa', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 0, 0, NULL, NULL, '2015-08-06 00:15:47'),
(187, 1223, 12, 'abf30141-c7ab-4ccf-a119-88b4665845dc', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 0, 0, NULL, NULL, '2015-08-06 00:15:47'),
(188, 1223, 12, '618ea3e2-3a55-46e0-b704-dfd5cbd6e44d', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 0, 0, NULL, NULL, '2015-08-06 00:15:47'),
(189, 1223, 12, 'e1b1e0c4-439f-42a8-b63f-a919efd5880e', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 0, 0, NULL, NULL, '2015-08-06 00:15:47'),
(190, 1223, 12, '08eb2728-fb62-46ab-a337-fafd09ebf20b', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 0, 0, NULL, NULL, '2015-08-06 00:15:47'),
(191, 1223, 12, '15190dae-c87d-4408-9196-5e79f38e1f20', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 0, 0, NULL, NULL, '2015-08-06 00:15:47'),
(192, 1223, 12, 'b6c91920-ff5f-4e62-a036-cdd93d0834f0', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 0, 0, NULL, NULL, '2015-08-06 00:15:47'),
(193, 1223, 12, 'b43cb076-9b8c-4e53-bf85-0dfd24b4610b', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 0, 0, NULL, NULL, '2015-08-06 00:15:47'),
(194, 1223, 12, '6f4fe3b0-7c1d-4885-bb7b-73b2e793551b', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 0, 0, NULL, NULL, '2015-08-06 00:15:47'),
(195, 1223, 12, '82d59db7-61b1-4d4d-88fe-05f8a832bd3a', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 0, 0, NULL, NULL, '2015-08-06 00:15:47'),
(196, 1223, 12, '80d23e60-d716-4b73-9744-ab5d62b81e71', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 0, 0, NULL, NULL, '2015-08-06 00:15:47'),
(197, 1223, 12, '649ac68a-33e6-455d-830e-d253b32246c5', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 0, 0, NULL, NULL, '2015-08-06 00:15:47'),
(198, 1223, 12, '1024392f-e785-47e7-ae67-d03ffdaa118c', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 0, 0, NULL, NULL, '2015-08-06 00:15:47'),
(199, 1223, 12, '42124577-a9de-4c05-ba4f-62cea122c195', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 0, 0, NULL, NULL, '2015-08-06 00:15:47'),
(200, 1223, 12, '455ae89c-d4fc-4126-91dd-f9e4177800cb', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 0, 0, NULL, NULL, '2015-08-06 00:15:47'),
(201, 1223, 12, 'cc57cbc4-528f-462e-b715-d69b0e817eb6', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 0, 0, NULL, NULL, '2015-08-06 00:15:47'),
(202, 1223, 12, 'b47b7ca1-c9b5-47d9-aa05-6737800c18b8', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 0, 0, NULL, NULL, '2015-08-06 00:15:47'),
(203, 1223, 12, 'e303bac6-2315-497e-87c0-ab55e470142c', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 0, 0, NULL, NULL, '2015-08-06 00:15:47'),
(204, 1223, 12, '4a036701-d84a-4b4e-b765-02868e0a6a5a', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 0, 0, NULL, NULL, '2015-08-06 00:15:47'),
(205, 1223, 12, 'e1d1f5a5-4604-4930-bce1-6e2c0b9b2c32', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 0, 0, NULL, NULL, '2015-08-06 00:15:47'),
(206, 1223, 12, '8f1b5a28-6f4f-4c5f-b57a-174336f9b7a5', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 0, 0, NULL, NULL, '2015-08-06 00:15:47'),
(207, 1223, 12, '98240abb-df6a-4cb0-b928-6284cc53e88f', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 0, 0, NULL, NULL, '2015-08-06 00:15:47'),
(208, 1223, 12, '083cc3bd-1fde-41ca-8db0-21516e44d841', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 0, 0, NULL, NULL, '2015-08-06 00:15:47'),
(209, 1223, 12, '9a59ce96-f67f-4be7-b0d3-6f6eb65a044a', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 0, 0, NULL, NULL, '2015-08-06 00:15:47'),
(210, 1223, 12, 'd7caf687-f524-4832-a312-af539e62feea', '', '', '', '', '', '', '', '', 1, '', 0, 0, '', '', '2015-08-06 00:15:47'),
(211, 1223, 12, '9f9165a6-85e0-4544-bca4-100b52ab8da7', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 0, 0, NULL, NULL, '2015-08-06 00:15:47'),
(212, 1223, 12, '55d15ae8-3048-4760-b3c4-583dc805d9b9', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 0, 0, NULL, NULL, '2015-08-06 00:15:47'),
(213, 1223, 12, '1ca221b3-442f-4cdb-bcbd-c9b1a9977f41', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 0, 0, NULL, NULL, '2015-08-06 00:15:47'),
(214, 1223, 12, '4a787b18-217d-4f36-a8e1-d209524b5665', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 0, 0, NULL, NULL, '2015-08-06 00:15:47'),
(215, 1223, 12, '21416943-fbb6-4ee9-a3c8-4b097c1a1a71', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 0, 0, NULL, NULL, '2015-08-06 00:15:47'),
(216, 1223, 12, 'af2b591b-ef3c-43c7-b57e-e9ae89da766b', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 0, 0, NULL, NULL, '2015-08-06 00:15:47'),
(217, 1223, 12, '3cff90d5-8e90-4b13-850d-643bcc292566', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 0, 0, NULL, NULL, '2015-08-06 00:15:47'),
(218, 1223, 12, '61c27c4c-d4d7-4743-b0f5-bb85492c1b5e', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 0, 0, NULL, NULL, '2015-08-06 00:15:47'),
(219, 1223, 12, '49022ad0-8d1e-4ae9-8d7b-3beb8494033b', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 0, 0, NULL, NULL, '2015-08-06 00:15:47'),
(220, 1223, 12, 'c7e12505-aa4a-4508-9a47-9c2c07659589', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 0, 0, NULL, NULL, '2015-08-06 00:15:47'),
(221, 1223, 12, '7b8240ca-e1f5-442a-98fa-681c95e7f6d6', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 0, 0, NULL, NULL, '2015-08-06 00:15:47'),
(222, 1223, 12, '6a315029-9f90-4a47-b2e4-6d2a3cebad7f', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 0, 0, NULL, NULL, '2015-08-06 00:15:47'),
(223, 1223, 12, '3bce2f3c-f5f7-4866-92ce-076b371323ce', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 0, 0, NULL, NULL, '2015-08-06 00:15:47'),
(224, 1223, 12, '182cb601-0271-40d2-bfaf-c29fa3fda80b', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 0, 0, NULL, NULL, '2015-08-06 00:15:47'),
(225, 1223, 12, '18da484f-c148-4c3b-9b61-ba84decdc0bc', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 0, 0, NULL, NULL, '2015-08-06 00:15:47'),
(226, 1223, 12, '946c17a6-03c5-4bdb-b7a9-29c52d156b94', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 0, 0, NULL, NULL, '2015-08-06 00:15:47'),
(227, 1223, 12, 'afd298ff-1da2-4077-a7ff-30420291ac50', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 0, 0, NULL, NULL, '2015-08-06 00:15:47'),
(228, 1223, 12, 'e973e39c-b1d5-41a2-b9cb-1ad81b26e3fe', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 0, 0, NULL, NULL, '2015-08-06 00:15:47'),
(229, 1223, 12, '158b952c-24b3-4c70-b2c4-8b42a44af444', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 0, 0, NULL, NULL, '2015-08-06 00:15:47'),
(230, 1223, 12, '2aa05f98-51b5-444a-822e-8e10e80f984b', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 0, 0, NULL, NULL, '2015-08-06 00:15:47'),
(231, 1223, 12, 'e66a5e24-5ae6-4444-b674-b26faa891919', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 0, 0, NULL, NULL, '2015-08-06 00:15:47'),
(232, 1223, 12, '4708682a-0301-487a-b7fd-d7b98af75c63', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 0, 0, NULL, NULL, '2015-08-06 00:15:47'),
(233, 1223, 12, '30c88b23-df9a-41ee-be9d-5d6293412c22', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 0, 0, NULL, NULL, '2015-08-06 00:15:47'),
(234, 1223, 12, '876527b1-0fa9-4ced-829f-4eb06d58cddf', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 0, 0, NULL, NULL, '2015-08-06 00:15:47'),
(235, 1223, 12, 'b44379cc-02fa-43a8-b0e6-4ddd95a3eb11', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 0, 0, NULL, NULL, '2015-08-06 00:15:47'),
(236, 1223, 12, '14198446-1e9d-4fcf-ab3e-9da62a616f1a', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 0, 0, NULL, NULL, '2015-08-06 00:15:47'),
(237, 1223, 12, '29cbf129-48bd-4507-ab0c-54675cc0ce84', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 0, 0, NULL, NULL, '2015-08-06 00:15:47'),
(238, 1223, 12, 'a2312c9a-9e18-4cee-a4eb-febc123d79d5', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 0, 0, NULL, NULL, '2015-08-06 00:15:47'),
(239, 1223, 12, '79eb3653-eb96-4f8e-9761-cc9ec4abadcc', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 0, 0, NULL, NULL, '2015-08-06 00:15:47'),
(240, 1223, 12, '45599d63-7fa5-4cef-9ddb-0594fa625674', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 0, 0, NULL, NULL, '2015-08-06 00:15:47'),
(241, 1223, 12, '211e98c7-2764-4584-9493-93580e7bcdc7', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 0, 0, NULL, NULL, '2015-08-06 00:15:47'),
(242, 1223, 12, '93951d15-a2d8-4e77-920f-c78dbe1b3a55', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 0, 0, NULL, NULL, '2015-08-06 00:15:47'),
(243, 1223, 12, 'c3b8fe60-be01-41ff-91a3-3917bbb7bc74', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 0, 0, NULL, NULL, '2015-08-06 00:15:47'),
(244, 1223, 12, 'c2bcea98-ed04-4d2c-ab79-e1d6d8eb59f5', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 0, 0, NULL, NULL, '2015-08-06 00:15:47'),
(245, 1223, 12, 'f86d8c33-9116-47af-a0d4-25d6f856c327', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 0, 0, NULL, NULL, '2015-08-06 00:15:47'),
(246, 1223, 12, 'f24c57fe-17a2-4f55-9d2c-445e66d1d043', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 0, 0, NULL, NULL, '2015-08-06 00:15:47'),
(247, 1223, 12, '8d921624-8915-410f-8740-b18d8dda7b5b', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 0, 0, NULL, NULL, '2015-08-06 00:15:47'),
(248, 1223, 12, '5f50d2e0-ec09-4e0f-a65b-2604d202e6e1', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 0, 0, NULL, NULL, '2015-08-06 00:15:47'),
(249, 1223, 12, 'b1377d21-f818-4459-8114-8cca15956bdd', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 0, 0, NULL, NULL, '2015-08-06 00:15:47'),
(250, 1223, 12, '2676ee05-7b31-47b0-b6ad-478866346ebb', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 0, 0, NULL, NULL, '2015-08-06 00:15:47'),
(251, 1223, 12, 'e2d051a2-ea9c-4299-ab45-4f0505c0bf3d', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 0, 0, NULL, NULL, '2015-08-06 00:15:47'),
(252, 1223, 12, '13ad4076-58ef-49a2-9fd2-b6c7acd0dcbd', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 0, 0, NULL, NULL, '2015-08-06 00:15:47'),
(253, 1223, 12, 'f79ceef9-9619-4fd8-b082-596c207b2330', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 0, 0, NULL, NULL, '2015-08-06 00:15:47'),
(254, 1223, 12, '607d3b55-1bc1-445f-a5f0-7c7c2f99e765', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 0, 0, NULL, NULL, '2015-08-06 00:15:47'),
(255, 1223, 12, 'cf1189e1-ac04-4a56-8f79-4e41249d8907', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 0, 0, NULL, NULL, '2015-08-06 00:15:47'),
(256, 1223, 12, 'd4e41b85-4249-48c2-b504-032619a57612', '', '', NULL, NULL, NULL, NULL, NULL, NULL, 0, '', 0, 0, ' ', ' ', '2015-08-06 00:15:47'),
(257, 1223, 12, 'c2f6dcb0-f9b8-433a-a22e-2a0ea3b38312', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 0, 0, NULL, NULL, '2015-08-06 00:15:47'),
(258, 1223, 12, '0eaf7cf8-cb37-4398-a9c5-874b3e978333', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 0, 0, NULL, NULL, '2015-08-06 00:15:47'),
(259, 1223, 12, '2159b214-6634-460e-a294-29e3e0e6aaa6', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 0, 0, NULL, NULL, '2015-08-06 00:15:47'),
(260, 1223, 12, '21b5a265-fc57-4402-a963-c57fbbde716e', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, 0, 0, NULL, NULL, '2015-08-06 00:15:47'),
(261, 1223, 12, 'd592a5c7-c407-4ed6-8b0f-105083be65a7', 'Visit cloudstaff.com/careers', 'http://www.cloudstaff.com/careers', NULL, NULL, NULL, NULL, NULL, NULL, 1, 'redir_to_url', 1, 1, NULL, NULL, '2015-08-14 02:11:02'),
(262, 1223, 12, '4ab48e32-d2e3-452b-aeff-6ca793443745', 'Contact Us', 'http://www.actiontag.io/', NULL, NULL, NULL, NULL, NULL, NULL, 1, 'redir_to_url', 1, 1, NULL, NULL, '2015-08-14 02:11:02'),
(555, 1223, 12, 'trial-for-multiple-action', 'multiple action', '', '09068835445', 'test message for multiple actions', 'jetherg@sonarlogic.biz', 'gamboajetherjosh@gmail.com', 'Test Email', 'test email for multiple actions', 0, 'send_sms,send_email', 1, 1, 'multiple action is a success  ', 'multiple action has encountered an error  ', '2015-07-28 07:42:39');

-- --------------------------------------------------------

--
-- Table structure for table `logs`
--

CREATE TABLE IF NOT EXISTS `logs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tag_id` int(11) DEFAULT NULL,
  `ip_address` varchar(80) DEFAULT NULL,
  `request_status` varchar(200) DEFAULT NULL,
  `created` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=161 ;

--
-- Dumping data for table `logs`
--

INSERT INTO `logs` (`id`, `tag_id`, `ip_address`, `request_status`, `created`) VALUES
(135, 0, '127.0.0.1', 'invalid', '2015-08-14 01:28:59'),
(136, 0, '127.0.0.1', 'invalid', '2015-08-14 02:01:30'),
(137, 0, '127.0.0.1', 'invalid', '2015-08-14 03:39:37'),
(138, 0, '127.0.0.1', 'invalid', '2015-08-14 03:40:45'),
(139, 0, '127.0.0.1', 'invalid', '2015-08-14 03:42:10'),
(140, 0, '127.0.0.1', 'invalid', '2015-08-14 03:42:33'),
(141, 0, '127.0.0.1', 'invalid', '2015-08-14 03:43:00'),
(142, 0, '127.0.0.1', 'invalid', '2015-08-14 03:43:20'),
(143, 0, '127.0.0.1', 'invalid', '2015-08-14 03:43:36'),
(144, 0, '127.0.0.1', 'invalid', '2015-08-14 03:44:29'),
(145, 0, '127.0.0.1', 'invalid', '2015-08-14 05:15:41'),
(146, 0, '127.0.0.1', 'invalid', '2015-08-14 06:11:46'),
(147, 0, '127.0.0.1', 'invalid', '2015-08-14 06:11:49'),
(148, 0, '127.0.0.1', 'invalid', '2015-08-14 06:11:53'),
(149, 0, '127.0.0.1', 'invalid', '2015-08-14 06:11:55'),
(150, 0, '127.0.0.1', 'invalid', '2015-08-14 06:11:57'),
(151, 0, '127.0.0.1', 'invalid', '2015-08-14 06:11:59'),
(152, 0, '127.0.0.1', 'invalid', '2015-08-14 06:12:02'),
(153, 0, '127.0.0.1', 'invalid', '2015-08-14 06:12:04'),
(154, 0, '127.0.0.1', 'invalid', '2015-08-14 06:12:06'),
(155, 0, '127.0.0.1', 'invalid', '2015-08-14 06:19:12'),
(156, 23, '127.0.0.1', 'valid', '2015-08-14 06:35:56'),
(157, 23, '127.0.0.1', 'valid', '2015-08-14 06:35:59'),
(158, 23, '127.0.0.1', 'valid', '2015-08-14 06:36:03'),
(159, 23, '127.0.0.1', 'valid', '2015-08-14 06:36:06'),
(160, 23, '127.0.0.1', 'valid', '2015-08-14 06:36:08');

-- --------------------------------------------------------

--
-- Table structure for table `sites`
--

CREATE TABLE IF NOT EXISTS `sites` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Dumping data for table `sites`
--

INSERT INTO `sites` (`id`, `name`) VALUES
(12, 'Clark'),
(23, 'Sydney');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(250) CHARACTER SET cp1250 COLLATE cp1250_czech_cs DEFAULT NULL,
  `company` varchar(250) DEFAULT NULL,
  `password` varchar(250) CHARACTER SET cp1250 COLLATE cp1250_czech_cs DEFAULT NULL,
  `type` varchar(250) DEFAULT NULL,
  `created` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1228 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `company`, `password`, `type`, `created`) VALUES
(1223, 'jetherg@sonarlogic.biz', 'Cloudstaff', 'jetherg', 'admin', '2015-06-29 00:11:30'),
(1226, 'kimberlyu@cloudstaff.com', 'Sonarlogic', 'kim', 'user', '2015-07-10 03:03:41'),
(1227, 'admin@actiontag.io', 'Cloudstaff', 'admin1', 'admin', '2015-07-16 05:58:49');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
