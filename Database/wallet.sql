-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 07, 2022 at 10:53 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wallet`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Admin_ID` int(20) NOT NULL,
  `Admin_Name` varchar(50) NOT NULL,
  `Admin_Password` varchar(50) NOT NULL,
  `Designation` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `loan`
--

CREATE TABLE `loan` (
  `Reference_ID` int(90) NOT NULL,
  `Account _number` int(90) NOT NULL,
  `Debt` int(90) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Contact` bigint(10) NOT NULL,
  `Loan_recoverd` int(90) NOT NULL,
  `Decision` varchar(20) NOT NULL,
  `Decision_By` varchar(50) NOT NULL,
  `Date_Loan_Req` datetime NOT NULL,
  `Date_Decided` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `main`
--

CREATE TABLE `main` (
  `Account_number` int(99) NOT NULL,
  `Name` varchar(225) NOT NULL,
  `Password` varchar(225) NOT NULL,
  `Amount` int(90) NOT NULL,
  `Age` int(11) NOT NULL,
  `Loan_taken` varchar(4) NOT NULL,
  `Loan_requested` varchar(4) NOT NULL,
  `Address` varchar(225) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Contact` bigint(10) NOT NULL,
  `Date_Created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `main`
--

INSERT INTO `main` (`Account_number`, `Name`, `Password`, `Amount`, `Age`, `Loan_taken`, `Loan_requested`, `Address`, `Email`, `Contact`, `Date_Created`) VALUES
(9774, 'Panja Rayyan', '5555', 25000, 18, '', '', 'Turak Chora Old Patel Wada, Veraval-362265, Gujarat, India', 'this@this.com', 91, '2022-09-03 15:28:32'),
(63264, 'A', '00000', 1156, 16, '', '', '12sda15e1,16r4we8,sder5', 'sa1d35Q@sad.smile', 6951452145, '2022-09-04 17:29:15');

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `Receipt_No` int(90) NOT NULL,
  `From_Acc` int(90) NOT NULL,
  `To_Acc` int(90) NOT NULL,
  `Amount` int(90) NOT NULL,
  `Date` datetime NOT NULL DEFAULT current_timestamp(),
  `Receiver` varchar(100) NOT NULL,
  `Sender` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`Admin_ID`);

--
-- Indexes for table `loan`
--
ALTER TABLE `loan`
  ADD PRIMARY KEY (`Reference_ID`);

--
-- Indexes for table `main`
--
ALTER TABLE `main`
  ADD PRIMARY KEY (`Account_number`);

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`Receipt_No`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `Admin_ID` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `loan`
--
ALTER TABLE `loan`
  MODIFY `Reference_ID` int(90) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `main`
--
ALTER TABLE `main`
  MODIFY `Account_number` int(99) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2654512;

--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `Receipt_No` int(90) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
