-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 19, 2021 at 03:30 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.3.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bank`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `Id` int(10) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Balance` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`Id`, `Name`, `Email`, `Balance`) VALUES
(1, 'Pratik Bhuwania', 'pratikbhuwania145@gmail.com', 89900),
(2, 'Eve bhatt', 'Eve@gmail.com', 9600),
(3, 'John Sharma', 'john@gmail.com', 8600.88),
(4, 'Ron Singh', 'Ron@gmail.com', 6600),
(5, 'Jill Gupta', 'jill102@gmail.com', 6850.558),
(6, 'Tamako Reddy', 'tk191@gmail.com', 6509),
(7, 'Harry Potter', 'harry02@gmail.com', 6333),
(8, 'Wanda Thakur', 'wanda@gmail.com', 6149.99),
(9, 'James Thakar', 'js88@gmail.com', 5600),
(10, 'Ramzy xyz', 'rz22@gmail.com', 5200.336);

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `Srno` int(10) NOT NULL,
  `sender` varchar(50) NOT NULL,
  `receiver` varchar(50) NOT NULL,
  `amount` double NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`Srno`, `sender`, `receiver`, `amount`, `time`) VALUES
(3, 'Wanda Thakur', 'Jill Gupta', 50, '2021-03-17 15:47:05'),
(4, 'Jill Gupta', 'Wanda Thakur', 50, '2021-03-17 16:17:56'),
(5, 'Jill Gupta', 'Wanda Thakur', 50, '2021-03-17 16:19:38'),
(10, 'Harry Potter', 'Ramzy XYZ', 100, '2021-03-17 17:08:58'),
(11, 'Ron Singh', 'Tamako Reddy', 100, '2021-03-17 17:18:22'),
(12, 'John Sharma', 'Jill Gupta', 100, '2021-03-18 17:24:07'),
(13, 'John Sharma', 'Jill Gupta', 100, '2021-03-18 17:25:03'),
(14, 'Ron Singh', 'James Thakar', 50, '2021-03-18 17:28:25'),
(15, 'Ron Singh', 'James Thakar', 50, '2021-03-18 17:29:15'),
(16, 'Ron Singh', 'James Thakar', 50, '2021-03-18 17:29:32'),
(17, 'Ron Singh', 'James Thakar', 50, '2021-03-18 17:29:53'),
(18, 'Pratik Bhuwania', 'Harry Potter', 100, '2021-03-19 14:14:33');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`Srno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `Srno` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
