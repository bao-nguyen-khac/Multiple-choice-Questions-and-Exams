-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 22, 2021 at 03:55 AM
-- Server version: 5.7.24
-- PHP Version: 7.2.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_ass2`
--

-- --------------------------------------------------------

--
-- Table structure for table `baogom`
--

CREATE TABLE `baogom` (
  `DETHI_ID` int(11) NOT NULL,
  `CAUHOI_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `baogom`
--

INSERT INTO `baogom` (`DETHI_ID`, `CAUHOI_ID`) VALUES
(21, 7),
(21, 14),
(21, 18),
(21, 17),
(21, 15),
(21, 19),
(21, 4),
(21, 12),
(21, 13),
(21, 23),
(22, 18),
(22, 21),
(22, 3),
(22, 14),
(22, 9),
(22, 17),
(22, 12),
(22, 4),
(22, 6),
(22, 11),
(23, 19),
(23, 3),
(23, 21),
(23, 12),
(23, 4),
(23, 14),
(23, 7),
(23, 13),
(23, 11),
(23, 17),
(24, 18),
(24, 11),
(24, 19),
(24, 9),
(24, 14),
(24, 22),
(24, 16),
(24, 21),
(24, 7),
(24, 12),
(27, 19),
(27, 10),
(27, 21),
(27, 22),
(27, 17),
(28, 13),
(28, 8),
(28, 23),
(28, 14),
(28, 3),
(39, 27),
(39, 29),
(39, 26),
(40, 29),
(40, 26),
(40, 28);

-- --------------------------------------------------------

--
-- Table structure for table `cauhoi`
--

CREATE TABLE `cauhoi` (
  `CH_ID` int(11) NOT NULL,
  `PHANHOI` longtext,
  `CHUANDAURA_ID` varchar(10) NOT NULL,
  `MOTA_ID` int(11) DEFAULT NULL,
  `MSCB_PT` varchar(10) NOT NULL,
  `THOIDIEMCUTHE` datetime DEFAULT NULL,
  `MONHOC_ID` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cauhoi`
--

INSERT INTO `cauhoi` (`CH_ID`, `PHANHOI`, `CHUANDAURA_ID`, `MOTA_ID`, `MSCB_PT`, `THOIDIEMCUTHE`, `MONHOC_ID`) VALUES
(3, 'When we went back to the bookstore, the bookseller _______ the book we wanted.', 'AV1', NULL, 'CB1', '2021-10-24 10:11:37', 'AV'),
(4, 'By the end of last summer, the farmers _______ all the crop.', 'AV1', NULL, 'CB1', '2021-10-24 10:18:08', 'AV'),
(5, 'The director _______ for the meeting by the time I got to his office.', 'AV1', NULL, 'CB1', '2021-10-24 10:20:26', 'AV'),
(6, 'My mother told me she _______ very tired since she came back from a visit to our grandparents.', 'AV1', NULL, 'CB1', '2021-10-24 10:22:00', 'AV'),
(7, 'Susan _______ her family after she had taken the university entrance examination.', 'AV1', NULL, 'CB1', '2021-10-24 10:22:36', 'AV'),
(8, '.................. actress\'s life is in many ways unlike that of other women.', 'AV2', NULL, 'CB1', '2021-10-24 10:56:17', 'AV'),
(9, 'Johnny is simply blind ________ his own shortcomings.', 'AV2', NULL, 'CB1', '2021-10-24 10:57:45', 'AV'),
(10, 'He took a taxi ________ he wouldn\'t be late.', 'AV2', NULL, 'CB1', '2021-10-24 10:58:41', 'AV'),
(11, 'He went to a school which ________ good manners and self- discipline.', 'AV2', NULL, 'CB1', '2021-10-24 10:59:22', 'AV'),
(12, 'The death rate would decrease if hygienic conditions.......improved.', 'AV3', NULL, 'CB1', '2021-10-24 16:50:42', 'AV'),
(13, 'John: “The instructions were in French and I translated them into English for him.” Anna: “You . He knows French.”', 'AV3', NULL, 'CB1', '2021-10-25 21:44:32', 'AV'),
(14, 'The regulations have been put into __________ on a trial basis.', 'AV3', NULL, 'CB1', '2021-10-25 21:47:20', 'AV'),
(15, 'How many cities you and your uncle _______ by July last summer?', 'AV1', NULL, 'CB1', '2021-11-09 21:08:12', 'AV'),
(16, 'Miss Jane _______ typing the report when her boss came in.', 'AV1', NULL, 'CB1', '2021-11-09 21:09:45', 'AV'),
(17, 'Peter was in New York last week; he _______ in Washington D.C. three days earlier.', 'AV1', NULL, 'CB1', '2021-11-09 21:10:16', 'AV'),
(18, 'Three women, none of whom we _______ before, _______ out of the hall.', 'AV1', NULL, 'CB1', '2021-11-09 21:28:21', 'AV'),
(19, 'They _______ through horrible times during the war years.', 'AV1', NULL, 'CB1', '2021-11-09 21:28:54', 'AV'),
(20, 'Total weight of all the ants in the world is much greater than .................', 'AV2', NULL, 'CB1', '2021-11-09 21:29:42', 'AV'),
(21, 'She ________ 20 pounds out of the bank every Monday', 'AV2', NULL, 'CB1', '2021-11-09 21:30:16', 'AV'),
(22, 'Some monkeys, ................., use their tails in a way similar to a hand', 'AV1', NULL, 'CB1', '2021-11-09 21:30:52', 'AV'),
(23, 'Black, red, and even bright pink diamonds ......................', 'AV2', NULL, 'CB1', '2021-11-09 21:31:25', 'AV'),
(24, '___________it was late, we decided to take a taxi home.', 'AV2', NULL, 'CB1', '2021-11-09 21:32:02', 'AV'),
(25, 'Một đoạn của phân tử ADN mang thông tin mã hoá cho một chuỗi pôlipeptit hay một phân tử ARN được gọi là:', 'SH1', NULL, 'CB2', '2021-11-19 21:22:28', 'SH'),
(26, 'Gen là một đoạn của phân tử ADN', 'SH1', NULL, 'CB2', '2021-11-19 21:22:57', 'SH'),
(27, 'Gen là một đoạn ADN mang thông tin di truyền mã hóa cho một sản phẩm xác định là', 'SH1', NULL, 'CB2', '2021-11-19 21:23:27', 'SH'),
(28, 'Trong các loại nuclêôtit tham gia cấu tạo nên ADN không có loại nào:', 'SH1', NULL, 'CB2', '2021-11-19 21:24:10', 'SH'),
(29, 'ADN không được cấu tạo từ các loại nuclêôtit nào:', 'SH1', NULL, 'CB2', '2021-11-19 21:24:38', 'SH');

-- --------------------------------------------------------

--
-- Table structure for table `chuandaura`
--

CREATE TABLE `chuandaura` (
  `CHUANDAURA_ID` varchar(10) NOT NULL,
  `MONHOC_ID` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `chuandaura`
--

INSERT INTO `chuandaura` (`CHUANDAURA_ID`, `MONHOC_ID`) VALUES
('AV1', 'AV'),
('AV2', 'AV'),
('AV3', 'AV'),
('AV4', 'AV'),
('SH1', 'SH'),
('SH2', 'SH');

-- --------------------------------------------------------

--
-- Table structure for table `dethi`
--

CREATE TABLE `dethi` (
  `DETHI_ID` int(11) NOT NULL,
  `SLCAUHOI` int(11) DEFAULT NULL,
  `TGLB` int(11) DEFAULT NULL,
  `HOCKY` int(11) DEFAULT NULL,
  `NGAYTHI` date DEFAULT NULL,
  `NGAYXACNHAN` date DEFAULT NULL,
  `NGAYKYDUYET` date DEFAULT NULL,
  `MONHOC_ID` varchar(10) NOT NULL,
  `MSCB_RA_DE` varchar(10) NOT NULL,
  `MSCB_KI_DUYET` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dethi`
--

INSERT INTO `dethi` (`DETHI_ID`, `SLCAUHOI`, `TGLB`, `HOCKY`, `NGAYTHI`, `NGAYXACNHAN`, `NGAYKYDUYET`, `MONHOC_ID`, `MSCB_RA_DE`, `MSCB_KI_DUYET`) VALUES
(21, 10, 20, 211, '2021-11-11', '2021-11-08', '2021-11-09', 'AV', 'CB1', 'CB3'),
(22, 10, 20, 211, '2021-11-11', '2021-11-08', '2021-11-09', 'AV', 'CB1', 'CB3'),
(23, 10, 20, 211, '2021-11-11', '2021-11-08', '2021-11-09', 'AV', 'CB1', 'CB3'),
(24, 10, 20, 211, '2021-11-11', '2021-11-08', '2021-11-09', 'AV', 'CB1', 'CB3'),
(27, 5, 10, 191, '2021-11-10', '2021-11-01', '2021-11-10', 'AV', 'CB1', 'CB1'),
(28, 5, 10, 191, '2021-11-10', '2021-11-01', '2021-11-10', 'AV', 'CB1', 'CB1'),
(39, 3, 5, 212, '2021-11-25', '2021-11-19', '2021-11-19', 'SH', 'CB2', 'CB2'),
(40, 3, 5, 212, '2021-11-25', '2021-11-19', '2021-11-19', 'SH', 'CB2', 'CB2');

-- --------------------------------------------------------

--
-- Table structure for table `giangvien`
--

CREATE TABLE `giangvien` (
  `MSCB` varchar(10) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `giangvien`
--

INSERT INTO `giangvien` (`MSCB`, `username`, `password`) VALUES
('CB1', 'giangvien1', '01027d847f7b2ce1cfd62170955699c0'),
('CB2', 'giangvien2', '8a19ec8772ebee6565e1088d05f5c2c1'),
('CB3', 'giangvien3', 'a57a4c1e9fdc13144b9a227b754e6654');

-- --------------------------------------------------------

--
-- Table structure for table `hoc`
--

CREATE TABLE `hoc` (
  `MONHOC_ID` varchar(10) NOT NULL,
  `MSSV` varchar(10) NOT NULL,
  `HOCKY` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hoc`
--

INSERT INTO `hoc` (`MONHOC_ID`, `MSSV`, `HOCKY`) VALUES
('AV', '1911', 191),
('AV', '1911', 211),
('AV', '1912', 191),
('SH', '1911', 212);

-- --------------------------------------------------------

--
-- Table structure for table `lambai`
--

CREATE TABLE `lambai` (
  `DETHI_ID` int(11) NOT NULL,
  `MSSV` varchar(10) NOT NULL,
  `FILETRALOI` text,
  `DIEM` float DEFAULT NULL,
  `HOCKY` int(255) NOT NULL,
  `MONHOC_ID` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lambai`
--

INSERT INTO `lambai` (`DETHI_ID`, `MSSV`, `FILETRALOI`, `DIEM`, `HOCKY`, `MONHOC_ID`) VALUES
(24, '1911', '[\"70\",\"42\",\"73\",\"34\",\"53\",\"85\",\"62\",\"82\",\"21\",\"47\"]', 10, 211, 'AV'),
(27, '1911', '[\"76\",\"40\",\"84\",\"88\",\"68\"]', 0, 191, 'AV');

-- --------------------------------------------------------

--
-- Table structure for table `monhoc`
--

CREATE TABLE `monhoc` (
  `MONHOC_ID` varchar(10) NOT NULL,
  `TENMH` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `monhoc`
--

INSERT INTO `monhoc` (`MONHOC_ID`, `TENMH`) VALUES
('AV', 'Anh Văn'),
('SH', 'Sinh học');

-- --------------------------------------------------------

--
-- Table structure for table `motachung`
--

CREATE TABLE `motachung` (
  `MOTA_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `motathem`
--

CREATE TABLE `motathem` (
  `MOTA_ID` int(11) NOT NULL,
  `FILEMTT` text,
  `BANGBIEU` text,
  `HINHANH` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `phantraloi`
--

CREATE TABLE `phantraloi` (
  `CH_ID` int(11) NOT NULL,
  `PTL_ID` int(11) NOT NULL,
  `PHANTRALOI` text,
  `DAPAN` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `phantraloi`
--

INSERT INTO `phantraloi` (`CH_ID`, `PTL_ID`, `PHANTRALOI`, `DAPAN`) VALUES
(3, 5, 'sold', 0),
(3, 6, 'had sold', 1),
(3, 7, 'sells', 0),
(3, 8, 'has sold', 0),
(4, 9, 'harvested', 0),
(4, 10, 'had harvested', 1),
(4, 11, 'harvest', 0),
(4, 12, 'are harvested', 0),
(5, 13, 'left', 0),
(5, 14, 'had left', 1),
(5, 15, 'leaves', 0),
(5, 16, 'will leave', 0),
(6, 17, 'was', 0),
(6, 18, 'had been', 1),
(6, 19, 'is', 0),
(6, 20, 'has been', 0),
(7, 21, 'phoned', 1),
(7, 22, 'had phoned', 0),
(7, 23, 'phones', 0),
(7, 24, 'is phoning', 0),
(8, 29, 'An', 1),
(8, 30, 'A', 0),
(8, 31, 'As the', 0),
(8, 32, 'That the', 0),
(9, 33, 'with', 0),
(9, 34, 'to', 1),
(9, 35, 'for', 0),
(9, 36, 'at', 0),
(10, 37, 'less', 0),
(10, 38, 'unless', 0),
(10, 39, 'so that', 1),
(10, 40, 'even so', 0),
(11, 41, 'grew', 0),
(11, 42, 'cultivated', 1),
(11, 43, 'planted', 0),
(11, 44, 'harvested', 0),
(12, 45, 'are', 0),
(12, 46, 'have been', 0),
(12, 47, 'were', 1),
(12, 48, 'had been', 0),
(13, 49, 'shouldn’t have translated', 0),
(13, 50, 'can’t have translated', 0),
(13, 51, 'needn’t have translated', 1),
(13, 52, 'wouldn’t have translated', 0),
(14, 53, 'practice', 1),
(14, 54, 'trial', 0),
(14, 55, 'test', 0),
(14, 56, 'examination', 0),
(15, 57, 'visited', 0),
(15, 58, 'had visited', 1),
(15, 59, 'did you visit', 0),
(15, 60, 'had you visited', 0),
(16, 61, 'didn’t finish', 0),
(16, 62, 'hadn’t finished', 1),
(16, 63, 'doesn’t finish', 0),
(16, 64, 'can’t finish', 0),
(17, 65, 'was', 0),
(17, 66, 'had been', 1),
(17, 67, 'is', 0),
(17, 68, 'was being', 0),
(18, 69, 'saw-had come', 0),
(18, 70, 'had seen-came', 1),
(18, 71, 'saw-came', 0),
(18, 72, 'had seen-had come', 0),
(19, 73, 'lived', 1),
(19, 74, 'had lived', 0),
(19, 75, 'live', 0),
(19, 76, 'are living', 0),
(20, 77, 'to all human beings', 1),
(20, 78, 'all human beings is that', 0),
(20, 79, 'that of all human beings', 0),
(20, 80, 'is of all human beings', 0),
(21, 81, 'pulls', 0),
(21, 82, 'draws', 1),
(21, 83, 'takes', 0),
(21, 84, 'removes', 0),
(22, 85, 'like the spider monkey', 1),
(22, 86, 'spider monkey likes', 0),
(22, 87, 'to the spider monkey', 0),
(22, 88, 'the monkey likes the spider', 0),
(23, 89, 'occasionally to find', 0),
(23, 90, 'occasionally found', 0),
(23, 91, 'have occasionally been found', 1),
(23, 92, 'have occasionally found', 0),
(24, 93, 'Because', 1),
(24, 94, 'Since', 0),
(24, 95, 'Because of', 0),
(24, 96, 'Although', 0),
(25, 97, 'Anticodon.', 0),
(25, 98, 'Gen.', 1),
(25, 99, 'Mã di truyền.', 0),
(25, 100, 'Codon.', 0),
(26, 101, 'mang thông tin mã hoá chuỗi polipeptit hay phân tử ARN.', 1),
(26, 102, 'mang thông tin di truyền của các loài.', 0),
(26, 103, 'mang thông tin cấu trúc của phân tử prôtêin.', 0),
(26, 104, 'chứa các bộ 3 mã hoá các axit amin.', 0),
(27, 105, 'Một phân tử protein', 0),
(27, 106, 'Một phân tử mARN', 0),
(27, 107, 'Một chuỗi polipeptit hay một phân tử ARN', 1),
(27, 108, 'Một phân tử protein hay 1 phân tử ARN', 0),
(28, 109, 'Guanin(G).', 0),
(28, 110, 'Uraxin(U).', 1),
(28, 111, 'Ađênin(A).', 0),
(28, 112, 'Timin(T).', 0),
(29, 113, 'A, T, G, X.', 0),
(29, 114, 'G, X', 0),
(29, 115, 'A, U, G, X.', 1),
(29, 116, 'A, T', 0);

-- --------------------------------------------------------

--
-- Table structure for table `phutrach`
--

CREATE TABLE `phutrach` (
  `MONHOC_ID` varchar(10) NOT NULL,
  `MSCB_PT` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `phutrach`
--

INSERT INTO `phutrach` (`MONHOC_ID`, `MSCB_PT`) VALUES
('AV', 'CB1'),
('SH', 'CB2');

-- --------------------------------------------------------

--
-- Table structure for table `quanly`
--

CREATE TABLE `quanly` (
  `MONHOC_ID` varchar(10) NOT NULL,
  `MSCB_QL` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `quanly`
--

INSERT INTO `quanly` (`MONHOC_ID`, `MSCB_QL`) VALUES
('SH', 'CB2'),
('AV', 'CB3'),
('AV', 'CB1');

-- --------------------------------------------------------

--
-- Table structure for table `sinhvien`
--

CREATE TABLE `sinhvien` (
  `MSSV` varchar(10) NOT NULL,
  `HOTENDEM` varchar(20) NOT NULL,
  `TEN` varchar(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sinhvien`
--

INSERT INTO `sinhvien` (`MSSV`, `HOTENDEM`, `TEN`, `username`, `password`) VALUES
('1911', 'Nguyễn Khắc ', 'Bảo', 'sinhvien1', '59377e26d7fd171995972df3e340c472'),
('1912', 'Nguyễn Văn', 'A', 'sinhvien2', '6afbee392776ac988d7660d53d2704a8');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `baogom`
--
ALTER TABLE `baogom`
  ADD KEY `FK_BAOGOM_IDDETHI` (`DETHI_ID`),
  ADD KEY `FK_BAOGOM_IDCAUHOI` (`CAUHOI_ID`);

--
-- Indexes for table `cauhoi`
--
ALTER TABLE `cauhoi`
  ADD PRIMARY KEY (`CH_ID`),
  ADD KEY `FK_CAUHOI_CHUANDAURA` (`CHUANDAURA_ID`),
  ADD KEY `FK_CAUHOI_MSCB_XD` (`MSCB_PT`),
  ADD KEY `FK_CAUHOI_MTC` (`MOTA_ID`),
  ADD KEY `FK_CHMH` (`MONHOC_ID`);

--
-- Indexes for table `chuandaura`
--
ALTER TABLE `chuandaura`
  ADD PRIMARY KEY (`CHUANDAURA_ID`),
  ADD KEY `FK_MONHOC` (`MONHOC_ID`);

--
-- Indexes for table `dethi`
--
ALTER TABLE `dethi`
  ADD PRIMARY KEY (`DETHI_ID`),
  ADD KEY `FK_DETHI_MAMONHOC` (`MONHOC_ID`),
  ADD KEY `FK_DETHI_MSCB_XD` (`MSCB_RA_DE`),
  ADD KEY `FK_DETHI_MSCB_KD` (`MSCB_KI_DUYET`);

--
-- Indexes for table `giangvien`
--
ALTER TABLE `giangvien`
  ADD PRIMARY KEY (`MSCB`);

--
-- Indexes for table `hoc`
--
ALTER TABLE `hoc`
  ADD KEY `FK_HOC_MAMONHOC` (`MONHOC_ID`),
  ADD KEY `FK_HOC_MSSV` (`MSSV`);

--
-- Indexes for table `lambai`
--
ALTER TABLE `lambai`
  ADD KEY `FK_DETHI` (`DETHI_ID`),
  ADD KEY `FK_SINHVIEN` (`MSSV`);

--
-- Indexes for table `monhoc`
--
ALTER TABLE `monhoc`
  ADD PRIMARY KEY (`MONHOC_ID`);

--
-- Indexes for table `motachung`
--
ALTER TABLE `motachung`
  ADD PRIMARY KEY (`MOTA_ID`);

--
-- Indexes for table `motathem`
--
ALTER TABLE `motathem`
  ADD KEY `FK_MOTATHEM_IDMTC` (`MOTA_ID`);

--
-- Indexes for table `phantraloi`
--
ALTER TABLE `phantraloi`
  ADD PRIMARY KEY (`PTL_ID`),
  ADD KEY `FK_CAUHOI` (`CH_ID`);

--
-- Indexes for table `phutrach`
--
ALTER TABLE `phutrach`
  ADD KEY `FK_PHUTRACH_MAMONHOC` (`MONHOC_ID`),
  ADD KEY `FK_PHUTRACH_MSCB` (`MSCB_PT`);

--
-- Indexes for table `quanly`
--
ALTER TABLE `quanly`
  ADD KEY `FK_QUANLY_MAMONHOC` (`MONHOC_ID`),
  ADD KEY `FK_QUANLY_MSCB` (`MSCB_QL`);

--
-- Indexes for table `sinhvien`
--
ALTER TABLE `sinhvien`
  ADD PRIMARY KEY (`MSSV`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cauhoi`
--
ALTER TABLE `cauhoi`
  MODIFY `CH_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `dethi`
--
ALTER TABLE `dethi`
  MODIFY `DETHI_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `motachung`
--
ALTER TABLE `motachung`
  MODIFY `MOTA_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `phantraloi`
--
ALTER TABLE `phantraloi`
  MODIFY `PTL_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=117;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `baogom`
--
ALTER TABLE `baogom`
  ADD CONSTRAINT `FK_BAOGOM_IDCAUHOI` FOREIGN KEY (`CAUHOI_ID`) REFERENCES `cauhoi` (`CH_ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_BAOGOM_IDDETHI` FOREIGN KEY (`DETHI_ID`) REFERENCES `dethi` (`DETHI_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `cauhoi`
--
ALTER TABLE `cauhoi`
  ADD CONSTRAINT `FK_CAUHOI_CHUANDAURA` FOREIGN KEY (`CHUANDAURA_ID`) REFERENCES `chuandaura` (`CHUANDAURA_ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_CAUHOI_MSCB_XD` FOREIGN KEY (`MSCB_PT`) REFERENCES `giangvien` (`MSCB`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_CAUHOI_MTC` FOREIGN KEY (`MOTA_ID`) REFERENCES `motachung` (`MOTA_ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_CHMH` FOREIGN KEY (`MONHOC_ID`) REFERENCES `monhoc` (`MONHOC_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `chuandaura`
--
ALTER TABLE `chuandaura`
  ADD CONSTRAINT `FK_MONHOC` FOREIGN KEY (`MONHOC_ID`) REFERENCES `monhoc` (`MONHOC_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `dethi`
--
ALTER TABLE `dethi`
  ADD CONSTRAINT `FK_DETHI_MAMONHOC` FOREIGN KEY (`MONHOC_ID`) REFERENCES `monhoc` (`MONHOC_ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_DETHI_MSCB_KD` FOREIGN KEY (`MSCB_KI_DUYET`) REFERENCES `giangvien` (`MSCB`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_DETHI_MSCB_XD` FOREIGN KEY (`MSCB_RA_DE`) REFERENCES `giangvien` (`MSCB`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `hoc`
--
ALTER TABLE `hoc`
  ADD CONSTRAINT `FK_HOC_MAMONHOC` FOREIGN KEY (`MONHOC_ID`) REFERENCES `monhoc` (`MONHOC_ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_HOC_MSSV` FOREIGN KEY (`MSSV`) REFERENCES `sinhvien` (`MSSV`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `lambai`
--
ALTER TABLE `lambai`
  ADD CONSTRAINT `FK_DETHI` FOREIGN KEY (`DETHI_ID`) REFERENCES `dethi` (`DETHI_ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_SINHVIEN` FOREIGN KEY (`MSSV`) REFERENCES `sinhvien` (`MSSV`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `motathem`
--
ALTER TABLE `motathem`
  ADD CONSTRAINT `FK_MOTATHEM_IDMTC` FOREIGN KEY (`MOTA_ID`) REFERENCES `motachung` (`MOTA_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `phantraloi`
--
ALTER TABLE `phantraloi`
  ADD CONSTRAINT `FK_CAUHOI` FOREIGN KEY (`CH_ID`) REFERENCES `cauhoi` (`CH_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `phutrach`
--
ALTER TABLE `phutrach`
  ADD CONSTRAINT `FK_PHUTRACH_MAMONHOC` FOREIGN KEY (`MONHOC_ID`) REFERENCES `monhoc` (`MONHOC_ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_PHUTRACH_MSCB` FOREIGN KEY (`MSCB_PT`) REFERENCES `giangvien` (`MSCB`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `quanly`
--
ALTER TABLE `quanly`
  ADD CONSTRAINT `FK_QUANLY_MAMONHOC` FOREIGN KEY (`MONHOC_ID`) REFERENCES `monhoc` (`MONHOC_ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_QUANLY_MSCB` FOREIGN KEY (`MSCB_QL`) REFERENCES `giangvien` (`MSCB`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
