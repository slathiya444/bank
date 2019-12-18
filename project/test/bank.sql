-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 18, 2019 at 03:13 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
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
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `acc_no` int(11) NOT NULL,
  `b_name` varchar(30) NOT NULL,
  `date_last_accessed` date DEFAULT NULL,
  `balance` int(11) DEFAULT NULL,
  `c_ssn` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`acc_no`, `b_name`, `date_last_accessed`, `balance`, `c_ssn`) VALUES
(101, 'Jersey', '0000-00-00', 7017, 332),
(102, 'Jersey', '0000-00-00', 1864, 3213),
(103, 'Jersey', '0000-00-00', 2643, 123),
(104, 'Jersey', '0000-00-00', 596, 322),
(105, 'Jersey', '0000-00-00', 1000, 8831),
(107, 'Jersey', '0000-00-00', 600, 9797),
(108, 'Jersey', '0000-00-00', 600, 9942),
(109, 'Jersey', '0000-00-00', 900, 5656),
(110, 'Jersey', '0000-00-00', 600, 9999),
(111, 'Jersey', '2019-12-16', 800, 556655),
(112, 'Jersey', '2019-12-16', 7400, 25);

-- --------------------------------------------------------

--
-- Table structure for table `branch`
--

CREATE TABLE `branch` (
  `b_name` varchar(30) NOT NULL,
  `city` varchar(30) DEFAULT NULL,
  `assests` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `branch`
--

INSERT INTO `branch` (`b_name`, `city`, `assests`) VALUES
('clifton', 'clifton', 1000000),
('Jersey', 'Harrison', 345),
('Newark', 'newark', 2000000),
('rutherford', 'rutherford', 200000);

-- --------------------------------------------------------

--
-- Table structure for table `checkings`
--

CREATE TABLE `checkings` (
  `acc_no` int(11) NOT NULL,
  `overdraft` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `checkings`
--

INSERT INTO `checkings` (`acc_no`, `overdraft`) VALUES
(102, 200),
(107, 500),
(110, 8000);

-- --------------------------------------------------------

--
-- Table structure for table `checkin_account`
--

CREATE TABLE `checkin_account` (
  `acc_no` int(11) NOT NULL,
  `b_name` varchar(20) DEFAULT NULL,
  `date_last_accessed` date DEFAULT NULL,
  `balance` int(11) DEFAULT NULL,
  `c_ssn` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `checkin_account`
--

INSERT INTO `checkin_account` (`acc_no`, `b_name`, `date_last_accessed`, `balance`, `c_ssn`) VALUES
(109, 'Jersey', '0000-00-00', 900, 5656),
(110, 'Jersey', '0000-00-00', 600, 9999),
(111, 'Jersey', '2019-12-16', 600, 556655),
(112, 'Jersey', '2019-12-16', 900, 25);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `c_ssn` int(11) NOT NULL,
  `e_ssn` int(11) DEFAULT NULL,
  `b_name` varchar(30) DEFAULT NULL,
  `Name` varchar(30) DEFAULT NULL,
  `apt_no` int(11) DEFAULT NULL,
  `street_no` varchar(30) DEFAULT NULL,
  `city` varchar(30) DEFAULT NULL,
  `state` varchar(30) DEFAULT NULL,
  `zip` int(11) DEFAULT NULL,
  `deposit` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`c_ssn`, `e_ssn`, `b_name`, `Name`, `apt_no`, `street_no`, `city`, `state`, `zip`, `deposit`) VALUES
(1, 1, 'jer', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, 1, 'Jersey', 'akjsdg', 6, '6', 'hj', 'jh', 5, '899'),
(25, 1, 'Jersey', 'hvh', 3, '3', 'hvhv', 'vvh', 69, '900'),
(123, 1, 'Jersey', 'nithin', 45, '23', 'er', 'er', 90, '633'),
(322, 1, 'Jersey', 'ffr', 677, '66', 'hghg', 'hg', 7888, '600'),
(332, 1, 'Jersey', 'hjghj', 544, '557', 'gjf', 'ghjg', 566, '5665'),
(3213, 1, 'Jersey', 'asdgj', 56, '78', 'jsv', 'ajf', 6, '900'),
(5656, 1, 'Jersey', 'huh', 56, '56', 'vhv', 'hhvb', 662, '900'),
(8831, 1, 'Jersey', 'sagar', 133, '1', 'Jersey City', 'New Jersey', 0, '1500'),
(9797, 1, 'Jersey', 'bhb', 1, '1', 'bhb', 'njnj', 0, '600'),
(9942, 1, 'Jersey', 'Sagar', 12, '12', 'Jersey City', 'New Jersey', 7307, '600'),
(9999, 1, 'Jersey', 'gh', 2, '2', 'hbh', 'bhbh', 232, '600'),
(556655, 1, 'Jersey', 'hb', 2, '2', 'hhb', 'bhb', 63, '600');

-- --------------------------------------------------------

--
-- Table structure for table `dependent`
--

CREATE TABLE `dependent` (
  `d_name` varchar(30) DEFAULT NULL,
  `e_ssn` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dependent`
--

INSERT INTO `dependent` (`d_name`, `e_ssn`) VALUES
('loan', 1),
('Cashier', 2),
('management', 3);

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `e_ssn` int(11) NOT NULL,
  `b_name` varchar(30) DEFAULT NULL,
  `name` varchar(30) DEFAULT NULL,
  `telephone` int(11) DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `length_of_employment` int(11) DEFAULT NULL,
  `mgr_ssn` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`e_ssn`, `b_name`, `name`, `telephone`, `start_date`, `length_of_employment`, `mgr_ssn`) VALUES
(1, 'Jersey', 'Vivek', 886620202, '2019-02-12', 2, '34'),
(2, 'Newark', 'Sagar', 5565656, '2019-02-14', 10, '1'),
(3, 'rutherford', 'Kiran', 88889999, '2019-04-04', 8, '1');

-- --------------------------------------------------------

--
-- Table structure for table `has_account`
--

CREATE TABLE `has_account` (
  `acc_no` int(11) NOT NULL,
  `c_ssn` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `has_account`
--

INSERT INTO `has_account` (`acc_no`, `c_ssn`) VALUES
(101, 332),
(102, 3213),
(103, 123),
(104, 322),
(105, 8831),
(107, 9797),
(108, 9942),
(109, 5656);

-- --------------------------------------------------------

--
-- Table structure for table `has_loan`
--

CREATE TABLE `has_loan` (
  `loan_no` int(11) NOT NULL,
  `c_ssn` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `has_loan`
--

INSERT INTO `has_loan` (`loan_no`, `c_ssn`) VALUES
(1, 8831),
(2, 9942),
(3, 8831),
(4, 332);

-- --------------------------------------------------------

--
-- Table structure for table `loan`
--

CREATE TABLE `loan` (
  `loan_no` int(11) NOT NULL,
  `b_name` varchar(30) DEFAULT NULL,
  `amount` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `loan`
--

INSERT INTO `loan` (`loan_no`, `b_name`, `amount`) VALUES
(1, 'Jersey', 1000),
(2, 'rutherford', 5000),
(3, 'clifton', 8000),
(4, 'clifton', 500);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `username` varchar(30) DEFAULT NULL,
  `password` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`) VALUES
('nithin', 'nithin');

-- --------------------------------------------------------

--
-- Table structure for table `savings`
--

CREATE TABLE `savings` (
  `acc_no` int(11) NOT NULL,
  `interset_rate` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `savings`
--

INSERT INTO `savings` (`acc_no`, `interset_rate`) VALUES
(102, 2),
(104, 0),
(107, 1);

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `record_no` int(11) NOT NULL,
  `acc_no` int(11) NOT NULL,
  `datee` date DEFAULT NULL,
  `balance` int(11) DEFAULT NULL,
  `c_ssn` int(11) DEFAULT NULL,
  `debit` int(100) NOT NULL,
  `credit` int(100) NOT NULL,
  `tt` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`record_no`, `acc_no`, `datee`, `balance`, `c_ssn`, `debit`, `credit`, `tt`) VALUES
(1022, 105, '0000-00-00', 1000, 8831, 0, 1000, 'CD'),
(1041, 107, '0000-00-00', 600, 9797, 0, 600, 'CD'),
(1046, 105, '2019-12-16', 0, 8831, 2000, 0, 'WD'),
(1047, 108, '0000-00-00', 600, 9942, 0, 600, 'CD'),
(1048, 109, '0000-00-00', 900, 5656, 0, 900, 'CD'),
(1049, 110, '0000-00-00', 600, 9999, 0, 600, 'CD'),
(1050, 111, '2019-12-16', 600, 556655, 0, 600, 'CD'),
(1051, 112, '2019-12-16', 900, 25, 0, 900, 'CD'),
(1052, 112, '2019-12-16', 2400, 25, 0, 1500, 'CD'),
(1053, 112, '2019-12-16', 8400, 25, 0, 6000, 'CD'),
(1054, 112, '2019-12-16', 7600, 25, 800, 0, 'WD'),
(1055, 112, '2019-12-16', 7400, 25, 200, 0, 'Cheque'),
(1056, 111, '2019-12-16', 800, 556655, 0, 200, 'Cheque'),
(1057, 101, '2019-12-16', 7029, 332, 2, 0, 'Fail charge'),
(1058, 103, '2019-12-16', 2647, 123, 2, 0, 'Fail charge'),
(1059, 103, '2019-12-16', 2645, 123, 2, 0, 'Fail charge'),
(1060, 102, '2019-12-16', 1866, 3213, 0, 566, 'CD'),
(1061, 104, '2019-12-16', 598, 322, 2, 0, 'Fail charge'),
(1062, 104, '2019-12-16', 596, 322, 2, 0, 'Fail charge'),
(1063, 102, '2019-12-16', 1864, 3213, 2, 0, 'Fail charge'),
(1064, 101, '2019-12-16', 7027, 332, 2, 0, 'Fail charge'),
(1065, 101, '2019-12-16', 7025, 332, 2, 0, 'Fail charge'),
(1066, 101, '2019-12-16', 7023, 332, 2, 0, 'Fail charge'),
(1067, 101, '2019-12-16', 7021, 332, 2, 0, 'Fail charge'),
(1068, 101, '2019-12-16', 7019, 332, 2, 0, 'Fail charge'),
(1069, 101, '2019-12-16', 7017, 332, 2, 0, 'Fail charge'),
(1070, 103, '2019-12-17', 2643, 123, 2, 0, 'Cheque Bounce Charge');

-- --------------------------------------------------------

--
-- Table structure for table `transaction_type`
--

CREATE TABLE `transaction_type` (
  `code` varchar(10) DEFAULT NULL,
  `type` varchar(30) DEFAULT NULL,
  `charge` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaction_type`
--

INSERT INTO `transaction_type` (`code`, `type`, `charge`) VALUES
('1001', 'saving', 20),
('1002', 'checking', 30);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`acc_no`,`b_name`),
  ADD KEY `b_name` (`b_name`),
  ADD KEY `c_ssn` (`c_ssn`);

--
-- Indexes for table `branch`
--
ALTER TABLE `branch`
  ADD PRIMARY KEY (`b_name`);

--
-- Indexes for table `checkings`
--
ALTER TABLE `checkings`
  ADD PRIMARY KEY (`acc_no`);

--
-- Indexes for table `checkin_account`
--
ALTER TABLE `checkin_account`
  ADD PRIMARY KEY (`acc_no`),
  ADD KEY `c_ssn` (`c_ssn`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`c_ssn`),
  ADD KEY `e_ssn` (`e_ssn`);

--
-- Indexes for table `dependent`
--
ALTER TABLE `dependent`
  ADD KEY `e_ssn` (`e_ssn`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`e_ssn`),
  ADD KEY `b_name` (`b_name`);

--
-- Indexes for table `has_account`
--
ALTER TABLE `has_account`
  ADD PRIMARY KEY (`acc_no`,`c_ssn`),
  ADD KEY `c_ssn` (`c_ssn`);

--
-- Indexes for table `has_loan`
--
ALTER TABLE `has_loan`
  ADD PRIMARY KEY (`loan_no`,`c_ssn`),
  ADD KEY `c_ssn` (`c_ssn`);

--
-- Indexes for table `loan`
--
ALTER TABLE `loan`
  ADD PRIMARY KEY (`loan_no`),
  ADD KEY `b_name` (`b_name`);

--
-- Indexes for table `savings`
--
ALTER TABLE `savings`
  ADD PRIMARY KEY (`acc_no`);

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`record_no`,`acc_no`),
  ADD KEY `acc_no` (`acc_no`),
  ADD KEY `c_ssn` (`c_ssn`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `account`
--
ALTER TABLE `account`
  ADD CONSTRAINT `account_ibfk_1` FOREIGN KEY (`b_name`) REFERENCES `branch` (`b_name`),
  ADD CONSTRAINT `account_ibfk_2` FOREIGN KEY (`c_ssn`) REFERENCES `customer` (`c_ssn`);

--
-- Constraints for table `checkings`
--
ALTER TABLE `checkings`
  ADD CONSTRAINT `checkings_ibfk_1` FOREIGN KEY (`acc_no`) REFERENCES `account` (`acc_no`);

--
-- Constraints for table `checkin_account`
--
ALTER TABLE `checkin_account`
  ADD CONSTRAINT `checkin_account_ibfk_1` FOREIGN KEY (`c_ssn`) REFERENCES `customer` (`c_ssn`);

--
-- Constraints for table `customer`
--
ALTER TABLE `customer`
  ADD CONSTRAINT `customer_ibfk_1` FOREIGN KEY (`e_ssn`) REFERENCES `employee` (`e_ssn`);

--
-- Constraints for table `dependent`
--
ALTER TABLE `dependent`
  ADD CONSTRAINT `dependent_ibfk_1` FOREIGN KEY (`e_ssn`) REFERENCES `employee` (`e_ssn`);

--
-- Constraints for table `employee`
--
ALTER TABLE `employee`
  ADD CONSTRAINT `employee_ibfk_1` FOREIGN KEY (`b_name`) REFERENCES `branch` (`b_name`);

--
-- Constraints for table `has_account`
--
ALTER TABLE `has_account`
  ADD CONSTRAINT `has_account_ibfk_1` FOREIGN KEY (`acc_no`) REFERENCES `account` (`acc_no`),
  ADD CONSTRAINT `has_account_ibfk_2` FOREIGN KEY (`c_ssn`) REFERENCES `customer` (`c_ssn`);

--
-- Constraints for table `has_loan`
--
ALTER TABLE `has_loan`
  ADD CONSTRAINT `has_loan_ibfk_1` FOREIGN KEY (`loan_no`) REFERENCES `loan` (`loan_no`),
  ADD CONSTRAINT `has_loan_ibfk_2` FOREIGN KEY (`c_ssn`) REFERENCES `customer` (`c_ssn`);

--
-- Constraints for table `loan`
--
ALTER TABLE `loan`
  ADD CONSTRAINT `loan_ibfk_1` FOREIGN KEY (`b_name`) REFERENCES `branch` (`b_name`);

--
-- Constraints for table `savings`
--
ALTER TABLE `savings`
  ADD CONSTRAINT `savings_ibfk_1` FOREIGN KEY (`acc_no`) REFERENCES `account` (`acc_no`);

--
-- Constraints for table `transaction`
--
ALTER TABLE `transaction`
  ADD CONSTRAINT `transaction_ibfk_1` FOREIGN KEY (`acc_no`) REFERENCES `account` (`acc_no`),
  ADD CONSTRAINT `transaction_ibfk_2` FOREIGN KEY (`c_ssn`) REFERENCES `customer` (`c_ssn`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
