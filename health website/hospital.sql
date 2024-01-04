-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 13, 2021 at 03:54 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hospital`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `IP` int(11) NOT NULL,
  `name` text NOT NULL,
  `depart` text NOT NULL,
  `age` int(11) NOT NULL,
  `salary` double NOT NULL,
  `address` text NOT NULL,
  `phone` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`IP`, `name`, `depart`, `age`, `salary`, `address`, `phone`) VALUES
(4, 'Gofran ah_hassan', 'head2', 43, 1000000, 'damascus', 987653354),
(5, 'Ayham Maksour', 'head3', 55, 1000000, 'damascus', 987564321),
(6, 'Ahmad Maksour', 'head4', 38, 1000000, 'damascus', 987654377),
(7, 'abd Maksour', 'head5', 44, 1000000, 'damascus', 987234561),
(8, 'raghad Maksour', 'head1', 34, 1000000, 'hama', 987654351),
(9, 'Maryam Maksour', 'head1', 20, 1000000, 'hama', 987654355),
(10, 'MARY', 'head5', 31, 900000, 'hama', 987654355);

-- --------------------------------------------------------

--
-- Table structure for table `drs`
--

CREATE TABLE `drs` (
  `IPD` int(11) NOT NULL,
  `nameDr` text NOT NULL,
  `specialty` text NOT NULL,
  `ageDr` int(11) NOT NULL,
  `salaryDr` double NOT NULL,
  `addressDr` text NOT NULL,
  `phoneDr` int(9) NOT NULL,
  `Dremail` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `drs`
--

INSERT INTO `drs` (`IPD`, `nameDr`, `specialty`, `ageDr`, `salaryDr`, `addressDr`, `phoneDr`, `Dremail`) VALUES
(2, 'Mostafa', 'neurology', 55, 980000, 'hama', 987654355, 'mostafa@gmail.com'),
(3, 'Ali', 'neurology', 60, 600000, 'damascus', 987456321, 'ali@gmail.com'),
(4, 'mazen', 'dentist', 40, 430000, 'hama', 976458322, 'mazen@gmail.com'),
(5, 'kaldon', 'psychologist', 40, 300000, 'daraa', 987663321, 'kaldon@gmail.com'),
(6, 'masode', 'ENT', 55, 550000, 'hama', 911115678, 'masode@gmail.com'),
(7, 'ramez', 'dentist', 44, 600000, 'hama', 987456333, 'ramez@gmail.com'),
(8, 'raghad Maksour', 'ENT', 55, 980000, 'homs', 987654351, 'raghad@gmail.com'),
(9, 'abbas', 'neurology', 55, 600000, 'hama', 987654351, 'abbas@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `IPemp` int(11) NOT NULL,
  `nameEmp` text NOT NULL,
  `departEmp` text NOT NULL,
  `ageEmp` int(11) NOT NULL,
  `salaryEmp` double NOT NULL,
  `addressEmp` text NOT NULL,
  `phoneEmp` int(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`IPemp`, `nameEmp`, `departEmp`, `ageEmp`, `salaryEmp`, `addressEmp`, `phoneEmp`) VALUES
(3, 'omar', 'p1', 66, 88990, 'hama', 987654355),
(4, 'abbas', 'dep3', 40, 30000, 'hama', 988776655),
(6, 'wafaa', 'p2', 34, 440000, 'hama', 987654355),
(7, 'abdullah', 'p2', 45, 440000, 'hama', 987654355);

-- --------------------------------------------------------

--
-- Table structure for table `nurses`
--

CREATE TABLE `nurses` (
  `IPNUR` int(11) NOT NULL,
  `nameNur` text NOT NULL,
  `departNur` text NOT NULL,
  `salaryNur` double NOT NULL,
  `ageNur` int(11) NOT NULL,
  `addressNur` text NOT NULL,
  `phoneNur` int(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nurses`
--

INSERT INTO `nurses` (`IPNUR`, `nameNur`, `departNur`, `salaryNur`, `ageNur`, `addressNur`, `phoneNur`) VALUES
(1, 'ahmad Maksour', 'dep1', 40000, 44, 'damascus', 988667755),
(2, 'omar', 'dep3', 33000, 23, 'hama', 987654355),
(4, 'kaled', 'dep2', 330000, 24, 'homs', 99887766),
(5, 'ahmad', 'dep1', 40000, 44, 'damascus', 988667755),
(8, 'abbas', 'dep2', 330000, 24, 'homs', 2147483647),
(9, 'hannen', 'p2', 500000, 23, 'hama', 987654351);

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `IPpat` int(11) NOT NULL,
  `namePat` text NOT NULL,
  `nameDR` text NOT NULL,
  `agePat` int(11) NOT NULL,
  `disease` text NOT NULL,
  `addressPat` text NOT NULL,
  `phonePat` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`IPpat`, `namePat`, `nameDR`, `agePat`, `disease`, `addressPat`, `phonePat`) VALUES
(1, 'hannen', 'kaldon', 21, 'psychology', 'hama', 988776644),
(2, 'wafaa', 'kaldon', 21, 'psychology', 'hama', 977665544),
(3, 'kaldon', 'ramez', 40, 'null', 'damascus', 988776655),
(4, 'masode', 'mohamd', 55, 'ost.', 'homs', 999888777),
(5, 'Ali', 'mahmod', 60, 'nerves', 'homs', 987654322),
(6, ' ramzya', 'Mostafa', 44, 'null', 'hama', 987654355);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`IP`);

--
-- Indexes for table `drs`
--
ALTER TABLE `drs`
  ADD PRIMARY KEY (`IPD`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`IPemp`);

--
-- Indexes for table `nurses`
--
ALTER TABLE `nurses`
  ADD PRIMARY KEY (`IPNUR`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`IPpat`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `IP` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `drs`
--
ALTER TABLE `drs`
  MODIFY `IPD` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `IPemp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `nurses`
--
ALTER TABLE `nurses`
  MODIFY `IPNUR` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `IPpat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
