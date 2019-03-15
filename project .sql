-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 15, 2019 at 07:13 AM
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
  `personnel_img` varchar(40) CHARACTER SET utf8 NOT NULL COMMENT 'รูปคณะทำงาน',
  `id_personnel` int(11) NOT NULL COMMENT 'ลำดับ'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_croatian_ci;

--
-- Dumping data for table `personnel`
--

INSERT INTO `personnel` (`personnel_id`, `personnel_name`, `personnel_position`, `personnel_img`, `id_personnel`) VALUES
(1, 'นางสาวปริยากร ทองคำ', 'ครู กศน.ตำบลนาโบสถ์', '1.jpg', 3),
(2, 'นางสาว จรัสศรี  ป่านแก้ว', 'ผู้อำนวยการ กศน. อำเภอวังเจ้า', '2.jpg', 1),
(3, 'นางสาว นิภาพร  หลวงแป้น', 'ครูอาสาสมัครฯ', '3.jpg', 2),
(4, 'นาย นาวิน  จงนิมตรสภาพร', 'ครูกศน. ตำบลเชียงทอง', '4.jpg', 3),
(5, 'นาย ประชา  ยืนยง', 'ครูกศน. ตำบลประดาง', '5.jpg', 3),
(6, 'นาย นิติธร  คุ้มผล', 'ครูศูนย์การเรียนชุมชน', '6.jpg', 4),
(7, 'นางสาวอรณี  ประทุมโซ', 'ครูศูนย์การเรียนชุมชน', '7.jpg', 4),
(8, 'นางสาว นฦมล  แย้มสวน', 'บรรณารักษ์', '8.jpg', 5);

-- --------------------------------------------------------

--
-- Table structure for table `tb_activity`
--

CREATE TABLE `tb_activity` (
  `act_id` int(11) NOT NULL COMMENT 'รหัสกิจกรรม',
  `act_name` varchar(40) NOT NULL COMMENT 'ชื่อกิจกรรม',
  `act_date` date NOT NULL COMMENT 'วันที่',
  `act_des` text NOT NULL COMMENT 'รายละเอียด',
  `act_place` varchar(255) NOT NULL COMMENT 'สถานที่',
  `act_delimit` varchar(30) NOT NULL COMMENT 'จำกัดคนเข้าสมัคร',
  `act_limited` date NOT NULL COMMENT 'จำกัดเวลาเข้าสมัคร',
  `rate_date` date NOT NULL COMMENT 'วันที่สิ้นสุดการประเมินกิจกรรม'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_activity`
--

INSERT INTO `tb_activity` (`act_id`, `act_name`, `act_date`, `act_des`, `act_place`, `act_delimit`, `act_limited`, `rate_date`) VALUES
(43, 'การทำเบเกอรี่', '2018-08-22', 'เป็นการสร้างเวลาให้เกิดประโยชน์และให้เกิดอาชีพ และการสร้างรายได้', 'ที่หมูบ้าน วังเจ้า', '3', '2019-02-05', '0000-00-00'),
(44, 'วันปลูกต้นไม้แห่งชาติ', '2018-05-30', 'เป็นการทำกิจกรรมที่การปลูกต้นไม้', 'กศน. อำเภอวังเจ้า', '3', '2018-05-29', '2018-06-06'),
(45, 'ประชุมเครือข่าย', '2018-10-21', 'เป็นการจัดการประชุมเครือข่ายของ กศน.', 'อำเภอวังเจ้า', '3', '2018-10-20', '2018-10-28'),
(46, 'โครงการฝึกอบรมลูกเสือชาวบ้าน', '2018-07-14', 'สร้างจิตสำนึกปกป้องสถาบันพระมหากษัตริย์', 'ณ โรงเรียนบ้านทุ่งกง หมู่ ๑ ตำบลประดาง อำเภอวังเจ้า จังหวัดตาก ', '3', '2018-07-13', '2018-07-21'),
(49, 'การทำข้าวเกรียบ', '2019-03-01', 'หเด้าวสาง', 'กหเดก่้เา', '10', '2019-03-08', '2019-03-31'),
(50, 'การทำอาหาร', '2019-03-15', 'เป็นการเรียนการสอนที่ เน้นการทำอาหาร', 'กศน.ตำบลนาโบสถ์', '14', '2019-03-14', '2019-03-22');

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
-- Table structure for table `tb_member`
--

CREATE TABLE `tb_member` (
  `mem_id` int(11) NOT NULL COMMENT 'รหัสผู้สมัคร',
  `act_id` int(40) NOT NULL COMMENT 'รหัสกิจกรรม',
  `mem_title` varchar(40) NOT NULL COMMENT 'คำนำหน้า',
  `mem_name` varchar(40) NOT NULL COMMENT 'ชื่อผู้สมัคร',
  `mem_tel` varchar(30) NOT NULL COMMENT 'เบอร์โทร',
  `mem_card` varchar(13) NOT NULL COMMENT 'รหัสประชาชน',
  `mem_sex` varchar(40) NOT NULL COMMENT 'เพศ'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_member`
--

INSERT INTO `tb_member` (`mem_id`, `act_id`, `mem_title`, `mem_name`, `mem_tel`, `mem_card`, `mem_sex`) VALUES
(9, 44, 'นาย', 'ดวงดาว การิน', '2222', '1639900265456', 'M'),
(10, 47, 'นางสาว', 'เรณู  เขียวสีทอง', '0864425701', '1639900279478', 'F'),
(11, 48, 'นางสาว', 'เรณู  เขียวสีทอง', '0864425701', '1639900279478', 'F'),
(13, 43, 'นางสาว', 'กวาง เรนเดียร์', '0895937543', '2142658067345', 'F'),
(14, 43, 'นาง', 'มะนาว', '0462462355', '5765834523654', 'F'),
(15, 43, 'นาย', 'เสือ', '4365878093', '2436547658769', 'M'),
(19, 50, 'นาย', 'สิงโต', '2154376598', '2547659870657', 'M'),
(20, 50, 'นางสาว', 'เหลือง', '2350020193', '2597739454654', 'F'),
(21, 50, 'นาย', 'แมว', '2146804367', '2554794114365', 'M'),
(22, 50, 'นางสาว', 'วีนา', '3258679863', '1648769354365', 'F'),
(23, 50, 'นาง', 'โนราห์', '6336587698', '2547658956735', 'F'),
(24, 50, 'นาง', 'จินตนา', '1543765876', '4573584683552', 'F'),
(25, 50, 'นาง', 'ดารานี', '3446587697', '1636587946345', 'F'),
(26, 50, 'นาง', 'จริงจัง', '2547976345', '4658760134324', 'F'),
(27, 50, 'นาง', 'มณี', '2935265462', '1436548769345', 'F'),
(28, 50, 'นาง', 'แก้ว', '2354376586', '2489352547454', 'F'),
(29, 50, 'นางสาว', 'กว้าง', '2458376593', '5346876436473', 'F'),
(30, 49, 'นางสาว', 'เซ่กวง', '2483743579', '1462435436547', 'F'),
(31, 49, 'นาง', 'นารี', '1834657346', '3436586234243', 'F'),
(32, 49, 'นาย', 'ดำ', '1792523647', '4658341425565', 'M'),
(33, 49, 'นาย', 'ขาว', '1783647693', '3534765845346', 'M'),
(34, 49, 'นาง', 'บาง', '1436587683', '2537679208345', 'F'),
(35, 49, 'นาง', 'ไวจัง', '2353765742', '1436467345435', 'F'),
(36, 49, 'นางสาว', 'พาน', '2353765876', '1342565765734', 'F'),
(37, 49, 'นาย', 'บาน', '2354765835', '2465476587683', 'M'),
(38, 49, 'นาง', 'กาน', '2547691343', '2547835245345', 'F'),
(39, 49, 'นางสาว', 'รักชาติ', '1243454757', '2537236547435', 'F'),
(40, 51, 'นางสาว', 'พวง', '3456723843', '1547683436548', 'F'),
(42, 50, 'นางสาว', 'กาลอง', '0859235734', '1575603583675', 'F'),
(43, 45, 'นางสาว', 'น้ำดื่ม ตราสิงห์', '0643436546', '3462543768243', 'F');

-- --------------------------------------------------------

--
-- Table structure for table `tb_new`
--

CREATE TABLE `tb_new` (
  `id_news` int(11) NOT NULL COMMENT 'รหัสข่าว',
  `title_news` text COLLATE utf8_croatian_ci NOT NULL COMMENT 'ชื่อข่าว',
  `description_news` text COLLATE utf8_croatian_ci NOT NULL COMMENT 'รายละเอียดข่าว'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_croatian_ci;

--
-- Dumping data for table `tb_new`
--

INSERT INTO `tb_new` (`id_news`, `title_news`, `description_news`) VALUES
(8, 'การเปิดรับสมัครนักเรียน', 'กรุณามาติดต่อสอบถามที่ กศน. นาโบสถ์นะค่ะ'),
(9, 'การจัดกิจกรรมวันเด็ก', 'เด็กเป็นทรัพยากรบุคคลที่สำคัญยิ่งของประเทศชาติ เป็นพลังสำคัญในการพัฒนา ชาติบ้านเมืองให้เจริญก้าวหน้าและมั่นคง เพื่อเตรียมพร้อมให้เด็กเป็นกำลังของชาติจึงควรมีการ ส่งเสริมให้เด็กมีความขยัน หมั่นศึกษาหาความรู้ รู้จักใช้เวลาให้เป็นประโยชน์');

-- --------------------------------------------------------

--
-- Table structure for table `tb_person`
--

CREATE TABLE `tb_person` (
  `person_id` int(11) NOT NULL COMMENT 'ลำดับบุคลากร',
  `person_name` varchar(40) NOT NULL COMMENT 'ชื่อบุคลากร',
  `person_pos` varchar(40) NOT NULL COMMENT 'ดำรงตำแหน่ง',
  `person_since` date NOT NULL COMMENT 'ตั้งแต่',
  `person_pos1` date NOT NULL COMMENT 'พ้นจากตำแหน่ง'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_person`
--

INSERT INTO `tb_person` (`person_id`, `person_name`, `person_pos`, `person_since`, `person_pos1`) VALUES
(1, 'นางสาวทองสุก  ถาวรวงษ์', 'หัวหน้าศูนย์', '1997-04-23', '1999-12-16'),
(2, 'นางเพ็ญยุพา สุขเอม', '	 รักษาการหัวหน้าศูนย์ 1', '1999-12-17', '2000-10-31'),
(6, 'นายชนะ เปรมปรี', 'หัวหน้าศูนย์ 2', '2000-11-01', '2000-11-10'),
(8, 'นายชนะ เปรมปรี', 'ผู้อำนวยการสถานศึกษา', '2003-11-11', '2005-06-03'),
(9, 'นางนิลุบล องค์การ', 'ผู้อำนวยการสถานศึกษา', '2005-06-04', '2010-11-05'),
(10, 'นางสาวรสรินทร์ ดุษดินทร์', 'ผู้อำนวยการสถานศึกษา', '2010-11-06', '2011-07-04'),
(11, 'นายไพฑูรย์ บัวสนิท', 'รักษาการผู้อำนวยการ', '2011-07-05', '2011-10-13'),
(12, 'นายเกรียงไกร ทองศักดิ์', 'ผู้อำนวยการสถานศึกษา', '2011-10-14', '2011-03-30'),
(13, 'ดร.รณวริทธิ์ ปริยฉัตรตะกูล', 'ผู้อำนวยการสถานศึกษา', '2012-04-11', '2013-07-26'),
(14, 'นางชนานัญ สุดโต', 'ผู้อำนวยการสถานศึกษา', '2013-08-13', '2015-02-02'),
(15, 'นางสาวจรัสศรี ป่านแก้ว', 'ผู้อำนวยการสถานศึกษา', '2015-02-09', '2018-11-30');

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
  `date_rate` int(11) NOT NULL COMMENT 'วันที่ประเมิน'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_rate`
--

INSERT INTO `tb_rate` (`rate_id`, `act_id`, `r1`, `r2`, `r3`, `r4`, `r5`, `r6`, `r7`, `r8`, `r9`, `r10`, `date_rate`) VALUES
(11, 41, 2, 2, 2, 3, 2, 1, 2, 2, 1, 2, 2019),
(12, 41, 2, 2, 2, 3, 2, 1, 2, 2, 1, 2, 2019),
(14, 47, 3, 3, 3, 3, 3, 2, 3, 2, 2, 2, 2019),
(15, 49, 3, 2, 3, 3, 3, 3, 3, 3, 3, 3, 2019),
(16, 43, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 2019),
(17, 50, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 2019),
(19, 50, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 2019),
(20, 50, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2019),
(21, 50, 3, 2, 2, 3, 2, 2, 3, 2, 2, 2, 2019),
(22, 50, 3, 3, 3, 2, 3, 3, 3, 3, 2, 2, 2019),
(23, 50, 3, 2, 2, 3, 2, 3, 3, 3, 3, 3, 2019),
(24, 50, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2019),
(25, 50, 3, 3, 3, 3, 2, 3, 3, 2, 3, 2, 2019),
(26, 50, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2019),
(27, 50, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 2019),
(28, 50, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 2019),
(29, 50, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2019),
(30, 50, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 2019),
(31, 46, 3, 3, 3, 3, 3, 3, 3, 2, 2, 2, 2019),
(32, 50, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 2019),
(33, 51, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 2019),
(34, 44, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 2019),
(35, 45, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2019);

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
-- Indexes for table `tb_person`
--
ALTER TABLE `tb_person`
  ADD PRIMARY KEY (`person_id`);

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
  MODIFY `personnel_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ลำดับณะทำงาน', AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tb_activity`
--
ALTER TABLE `tb_activity`
  MODIFY `act_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'รหัสกิจกรรม', AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `member_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ไอดีแอดมิน', AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_member`
--
ALTER TABLE `tb_member`
  MODIFY `mem_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'รหัสผู้สมัคร', AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `tb_new`
--
ALTER TABLE `tb_new`
  MODIFY `id_news` int(11) NOT NULL AUTO_INCREMENT COMMENT 'รหัสข่าว', AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tb_person`
--
ALTER TABLE `tb_person`
  MODIFY `person_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ลำดับบุคลากร', AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tb_rate`
--
ALTER TABLE `tb_rate`
  MODIFY `rate_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'รหัสการประเมิน', AUTO_INCREMENT=36;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
