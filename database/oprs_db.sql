-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 30, 2021 at 11:18 AM
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
-- Database: `oprs_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_member`
--

CREATE TABLE `tbl_member` (
  `m_ID` int(11) NOT NULL,
  `m_NameTitle` varchar(10) NOT NULL,
  `m_FName` varchar(100) NOT NULL,
  `m_LName` varchar(100) NOT NULL,
  `m_Email` varchar(100) NOT NULL,
  `m_Password` varchar(50) NOT NULL,
  `m_Tel` varchar(10) NOT NULL,
  `m_Img` varchar(200) NOT NULL,
  `m_Department` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_member`
--

INSERT INTO `tbl_member` (`m_ID`, `m_NameTitle`, `m_FName`, `m_LName`, `m_Email`, `m_Password`, `m_Tel`, `m_Img`, `m_Department`) VALUES
(1, 'นาย', 'admin', 'admin', 'admin@gmail.com', '123456', '1234567890', '20211028460036901.png', 'admin'),
(2, 'นาง', 'boss', 'boss', 'boss@gmail.com', '123456', '1234567890', '20211027329021010.png', 'boss'),
(3, 'นาย', 'staff', 'staff', 'staff@gmail.com', '123456', '1234567890', '202110301165639965.png', 'staff'),
(4, 'นาย', 'employee', 'employee', 'employee@gmail.com', '123456', '1234567890', '20211027329021010.png', 'employee'),
(5, 'นาย', 'bill', 'murray', 'admin@gmail.com', '123456', '1234567890', '20211027329021010.png', 'admin'),
(6, 'นาย', 'gg', 'ez', 'gg@gmail.com', '123456', '1234567890', '20211027329021010.png', 'admin'),
(7, 'นางสาว', 'mm', 'mm', 'mm@gmail.com', '1234567', '1234567890', '202110271522874706.png', 'admin'),
(8, 'นาย', 'gg', 'aaa', 'test@gmail.com', '123456', '0000000001', '202110281080851117.png', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_report`
--

CREATE TABLE `tbl_report` (
  `r_ID` int(11) NOT NULL,
  `r_Header` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_member`
--
ALTER TABLE `tbl_member`
  ADD PRIMARY KEY (`m_ID`);

--
-- Indexes for table `tbl_report`
--
ALTER TABLE `tbl_report`
  ADD PRIMARY KEY (`r_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_member`
--
ALTER TABLE `tbl_member`
  MODIFY `m_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_report`
--
ALTER TABLE `tbl_report`
  MODIFY `r_ID` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
