-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 22, 2019 at 07:33 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `billing_hist`
--

CREATE TABLE `billing_hist` (
  `cust_id` varchar(20) NOT NULL COMMENT 'multi-valued',
  `med_id` varchar(10) NOT NULL,
  `med_name` varchar(20) NOT NULL,
  `quantity` int(100) NOT NULL,
  `price` varchar(1000) NOT NULL,
  `time_stamp` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `billing_hist`
--

INSERT INTO `billing_hist` (`cust_id`, `med_id`, `med_name`, `quantity`, `price`, `time_stamp`) VALUES
('8422994425', '000001', 'dawa', 4, '100', '2019-10-22 09:24:30'),
('9892967181', '000002', 'Crocin', 2, '50', '2019-10-22 09:37:51'),
('7876156464', '000003', 'paracetamol', 5, '45', '2019-10-22 09:39:19'),
('8422994425', '000004', 'Honitus', 5, '85', '2019-10-22 10:58:19'),
('9892967181', '000001', 'dawa', 2, '100', '2019-10-22 11:14:20'),
('8422994425', '000001', 'dawa', 3, '50', '2019-10-22 12:52:00'),
('8422994425', '000001', 'dawa', 12, '60', '2019-10-22 13:06:26'),
('8422994425', '000001', 'dawa', 12, '50', '2019-10-22 13:19:22'),
('9892967181', '000004', 'Honitus', 5, '85', '2019-10-22 19:15:51'),
('9892967181', '000004', 'Honitus', 5, '85', '2019-10-22 19:20:48');

--
-- Triggers `billing_hist`
--
DELIMITER $$
CREATE TRIGGER `update_stock` AFTER INSERT ON `billing_hist` FOR EACH ROW update medicine
set medicine.quantity=medicine.quantity-new.quantity
where medicine.med_id=new.med_id and medicine.quantity>=new.quantity
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `phone_no` varchar(10) NOT NULL,
  `f_name` varchar(20) NOT NULL,
  `l_name` varchar(20) NOT NULL,
  `gender` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`phone_no`, `f_name`, `l_name`, `gender`) VALUES
('7208218090', 'Neha Ann', 'Joshy', 'F'),
('7876156464', 'Riyaa', 'Shah', 'F'),
('8422994425', 'Joel', 'Konuparamban', 'M'),
('9892967181', 'Allen', 'Dsouza', 'M');

-- --------------------------------------------------------

--
-- Table structure for table `medicine`
--

CREATE TABLE `medicine` (
  `med_id` varchar(10) NOT NULL,
  `med_name` varchar(20) NOT NULL,
  `quantity` int(100) NOT NULL,
  `price` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `medicine`
--

INSERT INTO `medicine` (`med_id`, `med_name`, `quantity`, `price`) VALUES
('000001', 'dawa', 99, '100'),
('000002', 'Crocin', 198, '50'),
('000003', 'Paracetamol', 115, '45'),
('000004', 'Honitus', 35, '85'),
('00005', 'abc', 12, '40');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `name` text NOT NULL,
  `userid` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`name`, `userid`, `password`) VALUES
('litta', 'litta1', 'litta2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `billing_hist`
--
ALTER TABLE `billing_hist`
  ADD KEY `cust_id` (`cust_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`phone_no`);

--
-- Indexes for table `medicine`
--
ALTER TABLE `medicine`
  ADD PRIMARY KEY (`med_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userid`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `billing_hist`
--
ALTER TABLE `billing_hist`
  ADD CONSTRAINT `billing_hist_ibfk_1` FOREIGN KEY (`cust_id`) REFERENCES `customer` (`phone_no`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
