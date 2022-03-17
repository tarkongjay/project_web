-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 25, 2021 at 11:26 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `adminpanel`
--

-- --------------------------------------------------------

--
-- Table structure for table `order_detail`
--

CREATE TABLE `order_detail` (
  `d_id` int(10) NOT NULL,
  `o_id` int(11) NOT NULL,
  `p_id` int(11) NOT NULL,
  `d_qty` int(11) NOT NULL,
  `d_subtotal` float NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `order_head`
--

CREATE TABLE `order_head` (
  `o_id` int(10) NOT NULL,
  `o_dttm` datetime NOT NULL,
  `o_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `o_addr` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `o_email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `o_phone` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `o_qty` int(11) NOT NULL,
  `o_total` float NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `a_id` int(11) NOT NULL,
  `a_user` varchar(20) NOT NULL,
  `a_pass` varchar(20) NOT NULL,
  `a_name` varchar(100) NOT NULL,
  `datesave` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`a_id`, `a_user`, `a_pass`, `a_name`, `datesave`) VALUES
(1, 'admin', 'password', 'admin', '2021-01-15 15:12:35');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_member`
--

CREATE TABLE `tbl_member` (
  `member_id` int(11) NOT NULL,
  `m_user` varchar(20) NOT NULL,
  `m_pass` varchar(20) NOT NULL,
  `m_name` varchar(100) NOT NULL,
  `m_email` varchar(100) NOT NULL,
  `m_tel` varchar(20) NOT NULL,
  `m_address` varchar(200) NOT NULL,
  `m_level` int(1) NOT NULL,
  `date_save` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_member`
--

INSERT INTO `tbl_member` (`member_id`, `m_user`, `m_pass`, `m_name`, `m_email`, `m_tel`, `m_address`, `m_level`, `date_save`) VALUES
(1, 'member1', '1234', 'member1', 'tarkongjay@hotmail.com', '0809769961', 'รรร', 1, '2021-02-17 15:14:06'),
(24, 'member2', '1234', 'member2', 'tarkongjay@hotmail.com', '0809769961', '99/292', 0, '2021-04-19 07:30:48');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
--

CREATE TABLE `tbl_product` (
  `p_id` int(11) NOT NULL,
  `p_name` varchar(200) NOT NULL,
  `type_id` int(11) NOT NULL,
  `p_price` int(11) NOT NULL,
  `p_detail` text NOT NULL,
  `p_img` varchar(200) NOT NULL,
  `datesave` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_product`
--

INSERT INTO `tbl_product` (`p_id`, `p_name`, `type_id`, `p_price`, `p_detail`, `p_img`, `datesave`) VALUES
(2, 'บ๊อบ แมวเตะฝันข้างถนน', 1, 210, 'ชายคนหนึ่งกับแมวตัวหนึ่ง และความหวังที่เก็บได้จากข้างถนน เรื่องราวน่าประทับใจของแมวสีส้มที่โด่งดังที่สุดในโลก            ', 'p_img7193763220210321_211345.jpg', '2021-03-21 14:13:45'),
(3, 'โลกนี้สอนให้รู้ว่า...', 2, 220, 'โลกนี้เป็นห้องเรียนขนาดใหญ่ ก็คงจะเต็มไปด้วยวิชาการเรียนการสอน\r\nไม่ว่าจะเลือก หรือไม่เลือกอะไร สุดท้ายคนที่ต้องรับผิดชอบผลการเลือก', 'p_img52932558320210321_212810.png', '2021-03-21 14:28:10'),
(4, 'คู่มือห้ามฝึกจิต', 13, 199, '	\r\nคู่มือห้ามฝึกจิต อ.แดง กีตาร์\r\nธรรมะแท้ที่เป็นสากล\r\nจะต้องไม่มีคำสอนให้เชื่อหรือไม่เชื่อใดๆ\r\nจะมีก็แต่เพียงยืมภาษามาพูด                                                ', 'p_img136273986520210425_143020.png', '2021-04-25 07:30:20'),
(5, 'เขาชื่อ \"ตู่\"', 2, 144, 'เบื้องหลังพลเอก ประยุทธ์ จันทร์โอชา นายกรัฐมนตรี คนที่ 29 ตามรอยฝันเด็กวัด เติบใหญ่ในรั้ว จปร. แม่ทัพในยุทธการยึดอำนาจ 2 ครั้ง', 'p_img141714941720210425_152143.png', '2021-04-25 08:21:43'),
(6, 'หมอปลามือปราบกรรม สัมภเวสี', 0, 212, 'เมื่อหมอปลามีอาการหาว น้ำตาไหล น้ำมูกจะออกญาณสัมผัสจึงบังเกิด พร้อมช่วยเหลือผู้คนให้พ้นทุกข์', 'p_img67893609020210425_153407.png', '2021-04-25 08:34:07'),
(17, '51 ศาสตราวุธสู่จุดสูงสุด', 1, 252, ' วิธีการในการใช้ชีวิตทั้งหมด 51 ข้อ ที่ \"คุณฌอน\" ได้ใช้จริงแล้วได้ผลดี อ่านสบาย\r\nเข้าใจง่าย สามารถนำไปปรับใช้กับชีวิตได้ง่ายที่สุด!             ', 'p_img67151077220210425_151639.png', '2021-04-25 08:16:39'),
(20, 'หมอปลา', 13, 212, 'เมื่อหมอปลามีอาการหาว น้ำตาไหล น้ำมูกจะออกญาณสัมผัสจึงบังเกิด พร้อมช่วยเหลือผู้คนให้พ้นทุกข์จากเจ้ากรรมนายเวร', 'p_img113591712020210425_153505.png', '2021-04-25 08:35:05'),
(21, 'สร้างเว็บแอพ ด้วย PHP', 14, 155, 'หนังสือเล่มนี้ ผู้เขียนได้เลือกโปรแกรมภาษา PHP เป็นโปรแกรมภาษาที่ใช้ในการพัฒนาโปรแกรม', 'p_img168831159620210425_154843.png', '2021-04-25 08:48:43'),
(22, 'คู่มือควบคุมอารมณ์คน', 2, 159, ' กลวิธีทางจิตวิทยา  ในการปรับเปลี่ยนอารมณ์ความรู้สึกของใครก็ตาม...ให้เป็นไปในทางที่คุณต้องการ', 'p_img180063950120210425_155422.png', '2021-04-25 08:54:22'),
(23, 'เพราะเป็นวัยรุ่นจึงเจ็บปวด', 1, 199, 'คุณกำลังท้อแท้อยู่ใช่ไหม ขณะที่เพื่อนๆ รุ่นเดียวกันเริ่มทยอยประสบความสำเร็จ มีเพียงคุณเท่านั้นที่ยังดูเลื่อนลอยอยู่ใช่ไหม', 'p_img72639432020210425_161056.png', '2021-04-25 09:10:56');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_type`
--

CREATE TABLE `tbl_type` (
  `type_id` int(11) NOT NULL,
  `type_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_type`
--

INSERT INTO `tbl_type` (`type_id`, `type_name`) VALUES
(1, 'หนังสือให้แรงบันดาลใจ'),
(2, 'หนังสือให้ข้อคิด'),
(13, 'หนังสือธรรมะ'),
(14, 'หนังสือเพื่อการศึกษา');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `order_detail`
--
ALTER TABLE `order_detail`
  ADD PRIMARY KEY (`d_id`);

--
-- Indexes for table `order_head`
--
ALTER TABLE `order_head`
  ADD PRIMARY KEY (`o_id`);

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `tbl_member`
--
ALTER TABLE `tbl_member`
  ADD PRIMARY KEY (`member_id`);

--
-- Indexes for table `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `tbl_type`
--
ALTER TABLE `tbl_type`
  ADD PRIMARY KEY (`type_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `order_detail`
--
ALTER TABLE `order_detail`
  MODIFY `d_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `order_head`
--
ALTER TABLE `order_head`
  MODIFY `o_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `a_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `tbl_member`
--
ALTER TABLE `tbl_member`
  MODIFY `member_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `tbl_type`
--
ALTER TABLE `tbl_type`
  MODIFY `type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
