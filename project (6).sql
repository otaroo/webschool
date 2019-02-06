-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 04, 2019 at 04:12 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `personnel`
--

CREATE TABLE `personnel` (
  `personnel_id` int(11) NOT NULL COMMENT 'ลำดับณะทำงาน',
  `personnel_name` varchar(40) CHARACTER SET utf8 NOT NULL COMMENT 'ชื่อผู้ทำงาน',
  `personnel_position` varchar(40) CHARACTER SET utf8 NOT NULL COMMENT 'ตำแหน่ง',
  `personnel_img` varchar(40) CHARACTER SET utf8 NOT NULL COMMENT 'รูปคณะทำงาน'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_croatian_ci;

--
-- Dumping data for table `personnel`
--

INSERT INTO `personnel` (`personnel_id`, `personnel_name`, `personnel_position`, `personnel_img`) VALUES
(1, 'นางสาวปริยากร ทองคำ', 'ครู กศน.ตำบลนาโบสถ์', '.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_activity`
--

CREATE TABLE `tb_activity` (
  `act_id` int(11) NOT NULL COMMENT 'รหัสกิจกรรม',
  `act_name` varchar(40) NOT NULL COMMENT 'ชื่อกิจกรรม',
  `act_date` date NOT NULL COMMENT 'วันที่',
  `act_des` varchar(255) NOT NULL COMMENT 'รายละเอียด',
  `act_place` varchar(255) NOT NULL COMMENT 'สถานที่'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_activity`
--

INSERT INTO `tb_activity` (`act_id`, `act_name`, `act_date`, `act_des`, `act_place`) VALUES
(43, 'การทำเบเกอรี่', '2018-08-22', 'เป็นการสร้างเวลาให้เกิดประโยชน์และให้เกิดอาชีพ และการสร้างรายได้', 'ที่หมูบ้าน วังเจ้า'),
(44, 'วันปลูกต้นไม้แห่งชาติ', '2018-05-30', 'เป็นการทำกิจกรรมที่การปลูกต้นไม้', 'กศน. อำเภอวังเจ้า'),
(45, 'ประชุมเครือข่าย', '2018-10-21', 'เป็นการจัดการประชุมเครือข่ายของ กศน.', 'อำเภอวังเจ้า');

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE `tb_admin` (
  `member_id` int(11) NOT NULL COMMENT 'ไอดีแอดมิน',
  `member_name` varchar(30) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL COMMENT 'ชื่อแอดมิน',
  `member_user` varchar(30) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL COMMENT 'ผู้ใช้',
  `member_pass` varchar(40) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL COMMENT 'รหัสผ่าน',
  `member_status` varchar(1) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL COMMENT 'สถานะ'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_admin`
--

INSERT INTO `tb_admin` (`member_id`, `member_name`, `member_user`, `member_pass`, `member_status`) VALUES
(1, 'ธนาภรณ์', 'admin', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'A');

-- --------------------------------------------------------

--
-- Table structure for table `tb_answer`
--

CREATE TABLE `tb_answer` (
  `id` int(11) NOT NULL,
  `id_person` int(11) NOT NULL,
  `id_question` int(11) NOT NULL,
  `score` int(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_answer`
--

INSERT INTO `tb_answer` (`id`, `id_person`, `id_question`, `score`) VALUES
(1, 1, 1, 1),
(2, 1, 2, 1),
(3, 1, 3, 1),
(4, 1, 4, 1),
(5, 1, 5, 1),
(6, 1, 6, 1),
(7, 1, 7, 1),
(8, 1, 8, 1),
(9, 2, 1, 2),
(10, 2, 2, 2),
(11, 2, 3, 2),
(12, 2, 4, 2),
(13, 2, 5, 2),
(14, 2, 6, 2),
(15, 2, 7, 2),
(16, 2, 8, 2),
(17, 3, 1, 3),
(18, 3, 2, 3),
(19, 3, 3, 3),
(20, 3, 4, 3),
(21, 3, 5, 3),
(22, 3, 6, 3),
(23, 3, 7, 3),
(24, 3, 8, 3),
(25, 4, 1, 4),
(26, 4, 2, 4),
(27, 4, 3, 4),
(28, 4, 4, 4),
(29, 4, 5, 4),
(30, 4, 6, 4),
(31, 4, 7, 4),
(32, 4, 8, 4),
(33, 5, 1, 5),
(34, 5, 2, 5),
(35, 5, 3, 5),
(36, 5, 4, 5),
(37, 5, 5, 5),
(38, 5, 6, 5),
(39, 5, 7, 5),
(40, 5, 8, 5),
(41, 6, 1, 4),
(42, 6, 2, 2),
(43, 6, 3, 3),
(44, 6, 4, 5),
(45, 6, 5, 1),
(46, 6, 6, 4),
(47, 6, 7, 4),
(48, 6, 8, 4),
(49, 7, 1, 3),
(50, 7, 2, 3),
(51, 7, 3, 3),
(52, 7, 4, 3),
(53, 7, 5, 2),
(54, 7, 6, 2),
(55, 7, 7, 2),
(56, 7, 8, 3),
(57, 8, 1, 5),
(58, 8, 2, 5),
(59, 8, 3, 4),
(60, 8, 4, 4),
(61, 8, 5, 4),
(62, 8, 6, 4),
(63, 8, 7, 4),
(64, 8, 8, 4),
(65, 9, 1, 3),
(66, 9, 2, 5),
(67, 9, 3, 4),
(68, 9, 4, 3),
(69, 9, 5, 4),
(70, 9, 6, 3),
(71, 9, 7, 4),
(72, 9, 8, 3);

-- --------------------------------------------------------

--
-- Table structure for table `tb_member`
--

CREATE TABLE `tb_member` (
  `mem_id` int(11) NOT NULL COMMENT 'รหัสผู้สมัคร',
  `act_id` int(40) NOT NULL COMMENT 'รหัสกิจกรรม',
  `mem_name` varchar(40) NOT NULL COMMENT 'ชื่อผู้สมัคร',
  `mem_tel` varchar(30) NOT NULL COMMENT 'เบอร์โทร',
  `mem_card` varchar(13) NOT NULL COMMENT 'รหัสประชาชน',
  `mem_sex` varchar(40) NOT NULL COMMENT 'เพศ'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_member`
--

INSERT INTO `tb_member` (`mem_id`, `act_id`, `mem_name`, `mem_tel`, `mem_card`, `mem_sex`) VALUES
(1, 43, 'ดุลยวัต  เขียวสีทอง', '0644301174', '1639900265346', 'M'),
(2, 43, 'ดุลยวัต  เขียวสีทอง', '0644301174', '1639900265456', 'M');

-- --------------------------------------------------------

--
-- Table structure for table `tb_new`
--

CREATE TABLE `tb_new` (
  `id_news` int(11) NOT NULL COMMENT 'รหัสข่าว',
  `title_news` varchar(40) COLLATE utf8_croatian_ci NOT NULL COMMENT 'ชื่อข่าว',
  `description_news` varchar(225) COLLATE utf8_croatian_ci NOT NULL COMMENT 'รายละเอียดข่าว'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_croatian_ci;

--
-- Dumping data for table `tb_new`
--

INSERT INTO `tb_new` (`id_news`, `title_news`, `description_news`) VALUES
(8, 'การเปิดรับสมัครนักเรียน', 'กรุณามาติดต่อสอบถามที่ กศน. นาโบสถ์นะค่ะ'),
(9, 'การจัดกิจกรรมวันเด็ก', 'เด็กเป็นทรัพยากรบุคคลที่สำคัญยิ่งของประเทศชาติ เป็นพลังสำคัญในการพัฒนา ชาติบ้านเมืองให้เจริญก้าวหน้าและมั่นคง เพื่อเตรียมพร้อมให้เด็กเป็นกำลังของชาติจึงควรมีการ ส่งเสริมให้เด็กมีความขยัน หมั่นศึกษาหาความรู้ รู้จักใช้เวลาให้เป');

-- --------------------------------------------------------

--
-- Table structure for table `tb_news`
--

CREATE TABLE `tb_news` (
  `id` int(10) NOT NULL COMMENT 'ลำดับข่าว',
  `title` text NOT NULL COMMENT 'หัวข้อข่าว',
  `description` varchar(255) NOT NULL COMMENT 'รายละเอียดข่าว',
  `publish_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT 'วันที่ตีพิมพ์'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_news`
--

INSERT INTO `tb_news` (`id`, `title`, `description`, `publish_time`) VALUES
(1, 'การปลูกต้นไม้', 'การทำกิจกรรม', '2018-11-15 00:00:00'),
(8, 'การทำลูกชิ้น', 'จัดทำขึ้นที่ โรงเรียน', '2019-01-26 00:00:00'),
(9, 'การรับสมัคร นักศึกษา', 'ปีการศึกษา 2562', '2019-01-26 00:00:00'),
(10, 'การทำเบเกอรี่', 'จัดทำที่หมู่บ้าน', '2019-01-10 00:00:00'),
(11, 'การวิ่งเพื่อการกุศล', 'จัดขึ้นที่ อำเภอ', '2019-01-31 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tb_person`
--

CREATE TABLE `tb_person` (
  `person_id` int(11) NOT NULL COMMENT 'ลำดับบุคลากร',
  `person_name` varchar(40) NOT NULL COMMENT 'ชื่อบุคลากร',
  `person_pos` varchar(40) NOT NULL COMMENT 'ดำรงตำแหน่ง',
  `person_since` date NOT NULL COMMENT 'ตั้งแต่',
  `person_pos1` date NOT NULL COMMENT 'พ้นจากตำแหน่ง',
  `person_img` varchar(40) NOT NULL COMMENT 'รูปบุคลากร'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_person`
--

INSERT INTO `tb_person` (`person_id`, `person_name`, `person_pos`, `person_since`, `person_pos1`, `person_img`) VALUES
(1, 'นางสาวทองสุก  ถาวรวงษ์', 'หัวหน้าศูนย์', '1997-04-23', '1999-12-16', ''),
(2, 'นางเพ็ญยุพา สุขเอม', '	 รักษาการหัวหน้าศูนย์ 1', '1999-12-17', '2000-10-31', ''),
(6, 'นายชนะ เปรมปรี', 'หัวหน้าศูนย์ 2', '2000-11-01', '2000-11-10', ''),
(8, 'นายชนะ เปรมปรี', 'ผู้อำนวยการสถานศึกษา', '2003-11-11', '2005-06-03', ''),
(9, 'นางนิลุบล องค์การ', 'ผู้อำนวยการสถานศึกษา', '2005-06-04', '2010-11-05', ''),
(10, 'นางสาวรสรินทร์ ดุษดินทร์', 'ผู้อำนวยการสถานศึกษา', '2010-11-06', '2011-07-04', ''),
(11, 'นายไพฑูรย์ บัวสนิท', 'รักษาการผู้อำนวยการ', '2011-07-05', '2011-10-13', ''),
(12, 'นายเกรียงไกร ทองศักดิ์', 'ผู้อำนวยการสถานศึกษา', '2011-10-14', '2011-03-30', ''),
(13, 'ดร.รณวริทธิ์ ปริยฉัตรตะกูล', 'ผู้อำนวยการสถานศึกษา', '2012-04-11', '2013-07-26', ''),
(14, 'นางชนานัญ สุดโต', 'ผู้อำนวยการสถานศึกษา', '2013-08-13', '2015-02-02', ''),
(15, 'นางสาวจรัสศรี ป่านแก้ว', 'ผู้อำนวยการสถานศึกษา', '2015-02-09', '2018-11-30', '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_photo`
--

CREATE TABLE `tb_photo` (
  `photo_id` int(11) NOT NULL COMMENT 'รหัสรูปภาพ',
  `act_id` int(11) NOT NULL COMMENT 'รหัสกิจกรรม',
  `photo_img` varchar(40) NOT NULL COMMENT 'รูป',
  `photo_date` date NOT NULL COMMENT 'วันที่การทำกิจกรรม'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_photo`
--

INSERT INTO `tb_photo` (`photo_id`, `act_id`, `photo_img`, `photo_date`) VALUES
(6, 43, '', '2019-01-31'),
(7, 43, '', '2019-01-25');

-- --------------------------------------------------------

--
-- Table structure for table `tb_rate`
--

CREATE TABLE `tb_rate` (
  `rate_id` int(11) NOT NULL COMMENT 'รหัสการประเมิน',
  `act_id` int(11) NOT NULL COMMENT 'รหัสกิจกรรม',
  `r1` int(1) NOT NULL COMMENT 'ข้อ1',
  `r2` int(1) NOT NULL COMMENT 'ข้อ2',
  `r3` int(1) NOT NULL COMMENT 'ข้อ3',
  `r4` int(1) NOT NULL COMMENT 'ข้อ4',
  `r5` int(1) NOT NULL COMMENT 'ข้อ5',
  `r6` int(1) NOT NULL COMMENT 'ข้อ6',
  `r7` int(1) NOT NULL COMMENT 'ข้อ7',
  `r8` int(1) NOT NULL COMMENT 'ข้อ8',
  `r9` int(1) NOT NULL COMMENT 'ข้อ9',
  `r10` int(1) NOT NULL COMMENT 'ข้อ10',
  `mem_id_card` char(13) NOT NULL COMMENT 'รหัสผู้สมัคร',
  `date_rate` int(11) NOT NULL COMMENT 'วันที่ประเมิน'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_rate`
--

INSERT INTO `tb_rate` (`rate_id`, `act_id`, `r1`, `r2`, `r3`, `r4`, `r5`, `r6`, `r7`, `r8`, `r9`, `r10`, `mem_id_card`, `date_rate`) VALUES
(1, 42, 3, 2, 2, 3, 2, 2, 2, 2, 2, 2, '1639900265375', 2019),
(2, 41, 3, 2, 3, 3, 1, 2, 3, 2, 3, 3, '1633992543717', 2019),
(3, 42, 3, 3, 2, 3, 2, 3, 3, 2, 2, 3, '1ุ63990024664', 2019),
(4, 42, 3, 3, 3, 3, 2, 2, 2, 3, 2, 2, '1639900265478', 2019),
(5, 42, 3, 3, 2, 3, 2, 2, 3, 2, 2, 2, '1639900247905', 2019),
(6, 42, 3, 2, 2, 3, 2, 2, 3, 2, 2, 3, '1639900432554', 2019),
(7, 42, 3, 3, 3, 2, 2, 2, 2, 2, 3, 3, '16399002987', 2019),
(8, 41, 3, 2, 1, 2, 2, 2, 1, 2, 2, 2, '1234567892457', 2019),
(9, 42, 3, 3, 2, 1, 2, 2, 1, 2, 1, 3, '1639900265371', 2019),
(10, 42, 3, 2, 2, 1, 2, 2, 2, 2, 2, 2, '1639900265789', 2019),
(11, 41, 2, 2, 2, 3, 2, 1, 2, 2, 1, 2, '', 2019),
(12, 41, 2, 2, 2, 3, 2, 1, 2, 2, 1, 2, '', 2019),
(13, 43, 3, 2, 2, 3, 2, 1, 3, 2, 2, 2, '1639900265456', 2019);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `personnel`
--
ALTER TABLE `personnel`
  ADD PRIMARY KEY (`personnel_id`);

--
-- Indexes for table `tb_activity`
--
ALTER TABLE `tb_activity`
  ADD PRIMARY KEY (`act_id`);

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`member_id`);

--
-- Indexes for table `tb_answer`
--
ALTER TABLE `tb_answer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_member`
--
ALTER TABLE `tb_member`
  ADD PRIMARY KEY (`mem_id`);

--
-- Indexes for table `tb_new`
--
ALTER TABLE `tb_new`
  ADD PRIMARY KEY (`id_news`);

--
-- Indexes for table `tb_news`
--
ALTER TABLE `tb_news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_person`
--
ALTER TABLE `tb_person`
  ADD PRIMARY KEY (`person_id`);

--
-- Indexes for table `tb_photo`
--
ALTER TABLE `tb_photo`
  ADD PRIMARY KEY (`photo_id`);

--
-- Indexes for table `tb_rate`
--
ALTER TABLE `tb_rate`
  ADD PRIMARY KEY (`rate_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `personnel`
--
ALTER TABLE `personnel`
  MODIFY `personnel_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ลำดับณะทำงาน', AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_activity`
--
ALTER TABLE `tb_activity`
  MODIFY `act_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'รหัสกิจกรรม', AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `member_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ไอดีแอดมิน', AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_answer`
--
ALTER TABLE `tb_answer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT for table `tb_member`
--
ALTER TABLE `tb_member`
  MODIFY `mem_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'รหัสผู้สมัคร', AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_new`
--
ALTER TABLE `tb_new`
  MODIFY `id_news` int(11) NOT NULL AUTO_INCREMENT COMMENT 'รหัสข่าว', AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tb_news`
--
ALTER TABLE `tb_news`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT COMMENT 'ลำดับข่าว', AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tb_person`
--
ALTER TABLE `tb_person`
  MODIFY `person_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ลำดับบุคลากร', AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tb_photo`
--
ALTER TABLE `tb_photo`
  MODIFY `photo_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'รหัสรูปภาพ', AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tb_rate`
--
ALTER TABLE `tb_rate`
  MODIFY `rate_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'รหัสการประเมิน', AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
