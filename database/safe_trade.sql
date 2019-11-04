-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 04, 2019 at 08:26 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `safe_trade`
CREATE DATABASE safe_trade;
-- --------------------------------------------------------

--
-- Table structure for table `customerinfo`
--

CREATE TABLE `customerinfo` (
  `uid` int(11) NOT NULL,
  `uname` varchar(30) DEFAULT NULL,
  `upass` varchar(50) DEFAULT NULL,
  `fullname` varchar(100) DEFAULT NULL,
  `uemail` varchar(70) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customerinfo`
--

INSERT INTO `customerinfo` (`uid`, `uname`, `upass`, `fullname`, `uemail`) VALUES
(48, 'satwinder06', '03c7c0ace395d80182db07ae2c30f034', 'satwinder singh ', 'satwinder@gmail.com'),
(49, 'c', '4a8a08f09d37b73795649038408b5f33', 'c', 'c@gmail.com'),
(50, 'gaurav06', 'b2f5ff47436671b6e533d8dc3614845d', 'Gaurav', 'gauravkumar5823@gmail.com'),
(52, 'deep', '8277e0910d750195b448797616e091ad', 'deep singh', 'deep@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `estimate`
--

CREATE TABLE `estimate` (
  `eid` int(11) NOT NULL,
  `jid` int(11) NOT NULL,
  `tid` int(11) NOT NULL,
  `job_name` varchar(100) NOT NULL,
  `Labour_Cost` double NOT NULL,
  `Material_Cost` double NOT NULL,
  `Transport_Cost` double NOT NULL,
  `Total_Cost` double NOT NULL,
  `Expiry_Date` date NOT NULL,
  `IsAccepted` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `estimate`
--

INSERT INTO `estimate` (`eid`, `jid`, `tid`, `job_name`, `Labour_Cost`, `Material_Cost`, `Transport_Cost`, `Total_Cost`, `Expiry_Date`, `IsAccepted`) VALUES
(23, 40, 15, 'pizza', 12, 1, 1, 14, '2019-11-13', 1),
(25, 44, 14, 'kitchen hand ', 100, 50, 50, 200, '2019-11-06', 0);

-- --------------------------------------------------------

--
-- Table structure for table `job`
--

CREATE TABLE `job` (
  `jid` int(100) NOT NULL,
  `job_name` varchar(100) NOT NULL,
  `location` varchar(100) NOT NULL,
  `Discription` varchar(200) NOT NULL,
  `Expected_Cost` varchar(100) NOT NULL,
  `Start_Date` date NOT NULL,
  `End_Date` date NOT NULL,
  `uid` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `job`
--

INSERT INTO `job` (`jid`, `job_name`, `location`, `Discription`, `Expected_Cost`, `Start_Date`, `End_Date`, `uid`) VALUES
(37, 'car', 'hamilton', 'need a person for car wash ', '10', '2019-11-05', '2019-11-07', 48),
(38, 'helaper', 'aukland', 'need 3 person for moving the house ', '300', '2019-11-05', '2019-11-09', 49),
(43, 'cleaning ', 'hamilton CBD', 'need experienced cleaner for fontera main office ', '120', '2019-11-05', '2019-11-06', 50),
(44, 'kitchen hand ', 'Auckland ', 'need a helper on weekends ', '200', '2019-11-06', '2019-11-08', 52);

-- --------------------------------------------------------

--
-- Table structure for table `tradesmeninfo`
--

CREATE TABLE `tradesmeninfo` (
  `TID` int(11) NOT NULL,
  `T_username` varchar(100) NOT NULL,
  `T_fname` varchar(100) NOT NULL,
  `T_pass` varchar(100) NOT NULL,
  `T_email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tradesmeninfo`
--

INSERT INTO `tradesmeninfo` (`TID`, `T_username`, `T_fname`, `T_pass`, `T_email`) VALUES
(14, 't', 't', 'e358efa489f58062f10dd7316b65649e', 't@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customerinfo`
--
ALTER TABLE `customerinfo`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `estimate`
--
ALTER TABLE `estimate`
  ADD PRIMARY KEY (`eid`);

--
-- Indexes for table `job`
--
ALTER TABLE `job`
  ADD PRIMARY KEY (`jid`);

--
-- Indexes for table `tradesmeninfo`
--
ALTER TABLE `tradesmeninfo`
  ADD PRIMARY KEY (`TID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customerinfo`
--
ALTER TABLE `customerinfo`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `estimate`
--
ALTER TABLE `estimate`
  MODIFY `eid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `job`
--
ALTER TABLE `job`
  MODIFY `jid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `tradesmeninfo`
--
ALTER TABLE `tradesmeninfo`
  MODIFY `TID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
