-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 10, 2024 at 01:11 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `slku`
--

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `Id` int(30) NOT NULL,
  `firstName` varchar(250) NOT NULL,
  `lastName` varchar(250) NOT NULL,
  `registarId` varchar(30) NOT NULL,
  `subject` text NOT NULL,
  `comments` varchar(250) NOT NULL,
  `semester` varchar(255) NOT NULL,
  `email` varchar(245) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`Id`, `firstName`, `lastName`, `registarId`, `subject`, `comments`, `semester`, `email`) VALUES
(50, 'thuve', 'uiiug', '077908', 'gvghvgv', 'vghvcgfhc', '1st year 2nd semester', 'hjbhj@gvgh.com'),
(55, 'Prashanth', 'Prashanth sliit', '232678', 'OOC', 'tftfgfgfgf', '1st year 1st semester', 'Prashanth19980512@gmail.com'),
(48, 'bvhvhg', 'fcgfxcdf', '236y46try', 'ooc', 'gvg', '1st year 2nd semester', 'cfghvghv@gvgf.fcfff'),
(46, 'gvh', 'jkkh', 'ghch', 'dtycty', 'cfgc', '1st year 1st semester', 'fcgfdctr@fdxf.fgcg'),
(45, 'niro', 'kanthan', 'ghvbghv', 'ppp', 'qsdv', '2nd year 1st semester', 'bhhjv@gv.gvh'),
(56, 'ananthan', 'ananthan', 'jkncjkdcn', 'OOC', 'cnjc', '1st year 1st semester', 'anxdc@hchb.dcbh'),
(49, 'danu', 'danu', 'jnj', 'OOC', 'hffhfh', '2nd year 1st semester', 'danu19980512@gmail.com'),
(65, 'vani', 'dude', 'vani123', 'IWT', 'tttyy', '2nd year 1st semester', 'vani@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `shuttle_s`
--

CREATE TABLE `shuttle_s` (
  `Location` varchar(50) NOT NULL,
  `studentID` varchar(10) NOT NULL,
  `centre` varchar(50) NOT NULL,
  `firstName` varchar(100) NOT NULL,
  `surName` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `ID` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `shuttle_s`
--

INSERT INTO `shuttle_s` (`Location`, `studentID`, `centre`, `firstName`, `surName`, `email`, `phone`, `ID`) VALUES
('Colombo 7', 'IT23453321', 'Malabe', 'Jude', 'Bellingham', 'jude234@gmail.com', '0763320201', 2),
('Vavuniya', '/,fmda;kZ', 'Kandy', ',mvfnm', 'kjlkn', 'ugighjihj@hbhj.hbjj', '456455511', 3),
('Point Pedro', 'IT234567', 'Malabe', '5645354354', 'gregre', 'bdbfdbf@ghh.hg', '67676767', 4);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `email` varchar(50) NOT NULL,
  `p_no` varchar(10) NOT NULL,
  `faculty` varchar(20) NOT NULL,
  `pwd` text NOT NULL,
  `addno` int(11) NOT NULL,
  `id` int(234) NOT NULL,
  `username` varchar(234) NOT NULL,
  `dob` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`email`, `p_no`, `faculty`, `pwd`, `addno`, `id`, `username`, `dob`) VALUES
('admin@admin.com', '0774704219', 'Computing', 'adminslku', 1234, 45456509, 'admin', '2002-11-11');

-- --------------------------------------------------------

--
-- Table structure for table `ticket`
--

CREATE TABLE `ticket` (
  `id` int(30) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `idnum` varchar(15) NOT NULL,
  `faculty` varchar(85) NOT NULL,
  `center` varchar(80) NOT NULL,
  `inquiry` varchar(80) NOT NULL,
  `subject` varchar(80) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ticket`
--

INSERT INTO `ticket` (`id`, `name`, `email`, `idnum`, `faculty`, `center`, `inquiry`, `subject`, `message`) VALUES
(1, 'ubhnjmk', 'tg7yhuj@ecrfgtbh.tgyhu', 'rftgyhuj', 'Faculty of Computing', 'Kollupitiya', 'Semester Registration', 'tbyhnjmk', 'bhnjmk,'),
(2, 'tgyhuj', 'yhujik@rdftghyj.trfgyh', 'ubhnjimkl,', 'Faculty of Computing', 'Kollupitiya', 'Semester Registration', 'yhujikol', 'gyhujikol'),
(3, 'dhanuskar', 'szdsfgh@sdfgh.com', 'sdfghb', 'Faculty of Business', 'Malabe', 'Transfer Group', ',mnbgvfds', 'qwerty'),
(4, 'hbnjmjihbnjm', 'inhjmubhmj@gthyuj.t6g7hy', 'ftg7yh8uj', 'Faculty of Business', 'Kilinochi', 'Semester Registration', 'h bjnkm', 'hbnjmk,'),
(5, 'uygihujoikl', 'yguhijk@trbhj.yuhjk', 'gyuhiknjlkm', 'Faculty of Business', 'Kollupitiya', 'Semester Registration', 'ghjk', 'fgjhbknjmk'),
(6, 'dhahabha', 'hfhfhtg@gmail.com', 'hgfytfgc2222', 'Faculty of Engineering', 'Malabe', 'Exam Registration', 'exam', 'qwertyuioxcvbn'),
(7, 'dhahabha', 'hfhfhtg@gmail.com', 'hgfytfgc2222', 'Faculty of Engineering', 'Malabe', 'Exam Registration', 'exam', 'rfdrecgdtrhdhrchrf'),
(22, 'BNKBNNBBN', 'BBBBH@BVVHVH.KHJJK', 'HJHJHJ', 'Faculty of Computing', 'Kollupitiya', 'Semester Registration', 'HGHHGJ', 'HJHGHJHJ'),
(25, 'Dhanush', 'dhcsjh@gmail.com', 'sjdsvd451', 'Faculty of Computing', 'Kollupitiya', 'Semester Registration', 'subject', 'dwjfdwesd dgjedc d sjds'),
(26, 'Dhanush', 'shdsdb@gmail.com', 'wsfdtyv65465', 'Faculty of Computing', 'Kollupitiya', 'Semester Registration', 'subjdbdh', 'jdshcyudsc jhsgsdyvc'),
(27, 'Dhanush', 'dgsgc@gmail.com', 'djge23243', 'Faculty of Computing', 'Kollupitiya', 'Semester Registration', 'hgcgcut', 'cgtrxycyvu'),
(30, 'Prasanth', 'pghuewfydg@gmail.com', 'IT51548541541', 'Faculty of Medicine', 'Kollupitiya', 'Semester Registration', 'subject', 'message'),
(31, 'Dhanush', 'wjhdwd@gmail.com', 'dhbsdhbcd', 'Faculty of Computing', 'Kollupitiya', 'Semester Registration', 'jhdbehyf', 'dcuksbc'),
(32, 'Dhanushkar', 'hjsvjdv4@gmail.com', 'ewdwe66541515', 'Faculty of Engineering', 'Kollupitiya', 'Semester Registration', 'sjdvfjydfdcds', 'sdfdgfkdh'),
(33, 'prasanth', 'gftrcf@gmail.com', 'ewhdfewtufdw544', 'Faculty of Computing', 'Kollupitiya', 'Exam Registration', 'bgcbfc', 'vcgghcddgfc'),
(38, 'Dhanush', 'sadsfs@gmail.com', 'detrxdx', 'Faculty of Computing', 'Kollupitiya', 'Semester Registration', 'subbbbbb', 'bun chicken'),
(43, ';kfjknlnk@jnbkjb.lkjko', 'poiopoioji@jojhh.uhij', 'iojikhjoj', 'Faculty of Computing', 'Kollupitiya', 'Semester Registration', 'oihjjij', 'lkkllk'),
(44, 'lhsjjdhh', 'sdflhdhjhj@uygh.iggih', ',ksdhlsj', 'Faculty of Medicine', 'Kollupitiya', 'Semester Registration', 'uhhu', 'hjhj');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`registarId`),
  ADD UNIQUE KEY `Id` (`Id`);

--
-- Indexes for table `shuttle_s`
--
ALTER TABLE `shuttle_s`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `id_2` (`id`);

--
-- Indexes for table `ticket`
--
ALTER TABLE `ticket`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `Id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `shuttle_s`
--
ALTER TABLE `shuttle_s`
  MODIFY `ID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(234) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45456512;

--
-- AUTO_INCREMENT for table `ticket`
--
ALTER TABLE `ticket`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
