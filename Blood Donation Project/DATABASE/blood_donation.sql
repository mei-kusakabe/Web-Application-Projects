-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 23, 2020 at 02:35 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blood_donation`
--

-- --------------------------------------------------------

--
-- Table structure for table `donor`
--

CREATE TABLE `donor` (
  `email` varchar(50) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `fname` varchar(50) DEFAULT NULL,
  `password` varchar(30) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `gender` varchar(50) DEFAULT NULL,
  `blood` varchar(20) DEFAULT NULL,
  `division` varchar(20) DEFAULT NULL,
  `contact` decimal(11,0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `donor`
--

INSERT INTO `donor` (`email`, `name`, `fname`, `password`, `dob`, `gender`, `blood`, `division`, `contact`) VALUES
('anika336@gmail.com', 'Anika', 'Nazrul Islam', '$2y$10$uqovmWsrtyBejb94.JU4Huk', '1998-11-14', 'female', 'A-', 'Rajshahi', '1234567890'),
('fatima008@gmail.com', 'fatima khairun', 'Md. Alam Khandoker', '$2y$10$leMfViu4R7RnRnlMdHOluer', '2005-01-30', 'female', 'O+', 'Sylhet', '1234567895'),
('jaf@gmail.com', 'fatima_noor', 'iqbal karim chowdhury', '$2y$10$ETt9vsPTL/ojhAYn9DYFIOM', '2020-12-01', 'female', 'B+', 'Khulna', '1867942332'),
('jafrin3347@gmail.com', 'Jafrin', 'Iqbal karim chowdhury', '$2y$10$OkCWnK404XxqKB/gLuonAep', '1998-11-22', 'female', 'A+', 'Sylhet', '1867942332'),
('katha242@gmail.com', 'katha', 'Kaium Hossain', '$2y$10$sdtLJDcgVyKBKWtiFY/eSu1', '1998-06-25', 'female', 'AB-', 'Rangpur', '181234567'),
('www.iqbalbigbang@gmail.com', 'imtiaz', 'iqbal karim chowdhury', '$2y$10$4KEHJDUYZYZKyLGaIfP5guX', '2007-05-22', 'male', 'AB+', 'Rajshahi', '1234567897');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `email` varchar(50) NOT NULL,
  `password` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`email`, `password`) VALUES
('babla@gmail.com', '$2y$10$Ba1WvELEQATf8vyPlCIl..q'),
('home@gmail.com', '$2y$10$YG.kCoq/sNhsNUMm3a1Llur'),
('ishaishrat75@gmail.com', '$2y$10$LDLNJkign8xT2TTw6H2XruF'),
('jaf@gmail.com', '$2y$10$BGPR7sRt6ddwHTWPkaNqoeD'),
('jafrin3347@gmail.com', '$2y$10$ajMuZQlp5kxg1lEshNiY7OL'),
('jafrin@gmail.com', '$2y$10$zgN4x8tZsOSrV1prKF4sRuN');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `donor`
--
ALTER TABLE `donor`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
