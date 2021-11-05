-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 05, 2021 at 01:33 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pension_manager`
--

-- --------------------------------------------------------

--
-- Table structure for table `employers`
--

CREATE TABLE `employers` (
  `id` int(11) NOT NULL,
  `ssrn` varchar(10) NOT NULL,
  `tradename` varchar(30) NOT NULL,
  `legalname` varchar(30) NOT NULL,
  `vatnumber` int(11) NOT NULL,
  `patnumber` int(11) NOT NULL,
  `industry` varchar(30) NOT NULL,
  `regdate` varchar(10) NOT NULL,
  `tradecomdate` varchar(10) NOT NULL,
  `holdingcomp` varchar(30) NOT NULL,
  `companysize` varchar(10) NOT NULL,
  `telephone` int(11) NOT NULL,
  `cellnumber` int(11) NOT NULL,
  `address1` varchar(30) NOT NULL,
  `address2` varchar(30) NOT NULL,
  `city` varchar(20) NOT NULL,
  `country` varchar(20) NOT NULL,
  `accname` varchar(30) NOT NULL,
  `accno` int(11) NOT NULL,
  `bank` varchar(20) NOT NULL,
  `branchname` varchar(20) NOT NULL,
  `registrar` varchar(10) DEFAULT NULL,
  `date_registered` datetime DEFAULT NULL,
  `submission_type` enum('Type-A','Type-B') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employers`
--

INSERT INTO `employers` (`id`, `ssrn`, `tradename`, `legalname`, `vatnumber`, `patnumber`, `industry`, `regdate`, `tradecomdate`, `holdingcomp`, `companysize`, `telephone`, `cellnumber`, `address1`, `address2`, `city`, `country`, `accname`, `accno`, `bank`, `branchname`, `registrar`, `date_registered`, `submission_type`) VALUES
(1, '3342', '5435345', '345324534', 453245, 523453, 'ZWL', '2021-10-27', '2021-10-13', 'SELF', '234523', 3342, 3342, '324534', '324534', 'Harare ', 'Zimbabwe', '2345', 2147483647, 'FIRST CAPITAL', 'Kwame', NULL, NULL, NULL),
(2, '25', 'sdfgdfsg', 'sdfg', 546456, 45645, 'ZWL', '2021-09-30', '2021-10-12', 'SELF', '5', 25, 25, 'hrthrthrt', 'hrthrthrt', 'Harare ', 'Zimbabwe', 'rthrthrth', 4564646, 'CABS', 'Kwame', NULL, NULL, NULL),
(3, '2554-5854', 'Aplimac Tech', 'Aplimac ', 45354, 345345345, 'USD', '2021-10-19', '2021-10-26', 'SELF', '25', 776565656, 775585858, '24 Cfdds', 'Hre', 'Harare       ', 'Zimbabwe', 'Aplimac', 2147483647, 'FIRST CAPITAL', 'Kwame', NULL, NULL, NULL),
(4, 'Profburg', '0719376705', 'tt', 666, 66, 'Clothing', '2021-10-26', '2021-10-19', 'SELF', '12', 719376705, 87777, 'Msasa harare', 'ytr', 'Harare  ', 'Zimbabwe', 'Prof', 777, 'FIRST CAPITAL', 'Kwame', NULL, NULL, NULL),
(5, '5455-6646', 'Econet', 'Econet', 2147483647, 2147483647, 'Motoring', '2012-12-12', '2012-02-02', 'SELF', '23', 242765467, 776565435, 'address line 1', 'address line 2', 'Harare', 'Zimbabwe', 'econet', 2147483647, 'FIRST CAPITAL', 'Kwame', NULL, NULL, NULL),
(6, '648-382', 'Telecel', 'Telecel ZImbabwe', 345125252, 25252525, 'Capital', '2021-12-03', '2021-12-07', 'SELF', '56', 24244556, 776544554, '23 Flint', 'Msasa', 'Marondera ', 'Zimbabwe', 'Tel Zim', 2147483647, 'CABS', 'Kwame', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employers`
--
ALTER TABLE `employers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `ssrn` (`ssrn`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employers`
--
ALTER TABLE `employers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
