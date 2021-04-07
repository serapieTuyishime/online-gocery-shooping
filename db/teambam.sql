-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 07, 2021 at 10:20 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.2.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `teambam`
--

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `h_id` int(50) NOT NULL,
  `NAME` varchar(50) NOT NULL,
  `USERNAME` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `name` varchar(80) NOT NULL,
  `email` varchar(80) NOT NULL,
  `subject` varchar(80) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `name`, `email`, `subject`, `message`) VALUES
(1, 'nzxbc', 'mauri@gmail.com', 'hfkf', 'xzxzx');

-- --------------------------------------------------------

--
-- Table structure for table `tblautonumber`
--

CREATE TABLE `tblautonumber` (
  `id` int(11) NOT NULL,
  `start` int(11) NOT NULL,
  `end` int(11) NOT NULL,
  `increment` int(11) NOT NULL,
  `desc` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblautonumber`
--

INSERT INTO `tblautonumber` (`id`, `start`, `end`, `increment`, `desc`) VALUES
(1, 1000, 27, 1, 'PROD');

-- --------------------------------------------------------

--
-- Table structure for table `tblcategory`
--

CREATE TABLE `tblcategory` (
  `category_id` int(11) NOT NULL,
  `category` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblcategory`
--

INSERT INTO `tblcategory` (`category_id`, `category`) VALUES
(1, 'Fruits&vegetables'),
(2, 'cooking oil'),
(3, 'juices');

-- --------------------------------------------------------

--
-- Table structure for table `tblcustomer`
--

CREATE TABLE `tblcustomer` (
  `C_ID` int(50) NOT NULL,
  `C_FNAME` varchar(50) NOT NULL,
  `C_LNAME` varchar(50) NOT NULL,
  `C_AGE` int(2) NOT NULL,
  `C_ADDRESS` text NOT NULL,
  `C_PNUMBER` varchar(50) NOT NULL,
  `C_GENDER` varchar(50) NOT NULL,
  `C_EMAILADD` varchar(50) NOT NULL,
  `ZIPCODE` varchar(50) DEFAULT NULL,
  `username` varchar(50) NOT NULL,
  `password` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblcustomer`
--

INSERT INTO `tblcustomer` (`C_ID`, `C_FNAME`, `C_LNAME`, `C_AGE`, `C_ADDRESS`, `C_PNUMBER`, `C_GENDER`, `C_EMAILADD`, `ZIPCODE`, `username`, `password`) VALUES
(4, 'mutozo', 'jacq', 30, 'karwasa', '07865543322', 'Female', 'mutozo@gmail.com', '76', 'mutozo', '$2y$10$oLzZ/yNX4hAGMDKZCQs52eqynPbd/d9TzY3fQJSlwPDzmcHtsyfza'),
(5, 'dusabe', 'mary', 21, 'musanze', '0723455566', 'Female', 'dusabe@gmail.com', 'musanze32', 'mary', '$2y$10$tE.WYUUgFKfLwAsGDCFNhOw9NdLb0P05mL5AQoTdnDZgPc5JLrSEO'),
(6, 'icyumutima ushaka', 'amata', 33, 'dfdf', '3434', 'Male', 'err@der.fd', NULL, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbldelivery`
--

CREATE TABLE `tbldelivery` (
  `TRANSAC_CODE` int(50) NOT NULL,
  `D_ID` int(50) NOT NULL,
  `C_ID` int(50) NOT NULL,
  `EMP_ID` int(50) DEFAULT NULL,
  `C_ADDRESS` text NOT NULL,
  `C_PNUMBER` int(50) NOT NULL,
  `D_DATE` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbldelivery`
--

INSERT INTO `tbldelivery` (`TRANSAC_CODE`, `D_ID`, `C_ID`, `EMP_ID`, `C_ADDRESS`, `C_PNUMBER`, `D_DATE`) VALUES
(0, 1, 5, NULL, '                                \r\n                              ', 723455566, '2021-02-19'),
(1613054848, 2, 5, NULL, '                                \r\n                              ', 723455566, '2021-02-12'),
(1613055173, 3, 5, NULL, '                                \r\n                              ', 723455566, '2021-02-13');

-- --------------------------------------------------------

--
-- Table structure for table `tblemployee`
--

CREATE TABLE `tblemployee` (
  `emp_id` int(50) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `contact` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` tinytext DEFAULT NULL,
  `address` text NOT NULL,
  `gender` varchar(50) NOT NULL,
  `age` int(2) NOT NULL,
  `position` varchar(50) NOT NULL,
  `hire_date` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblemployee`
--

INSERT INTO `tblemployee` (`emp_id`, `fname`, `lname`, `contact`, `email`, `password`, `address`, `gender`, `age`, `position`, `hire_date`) VALUES
(4, 'Munezero', 'lilian', '07883457778', 'munezar@gmail.com', NULL, 'Rubavu', 'Female', 30, 'supervisor', '2020-08-07'),
(5, 'kaneza', 'clever', '07888845656', 'kaneza@yahoo.com', NULL, 'Musanze', 'Female', 21, 'delivery', '2020-08-10'),
(6, 'icyiza', 'audrene', '2354345435', 'audre@gmail.com', '$2y$10$ds1gqSSjIHq/I7c.Ly/w9eF.OPgcXyeG09wL71loBGy0qLkNzUZlS', '3dsfdf', 'Female', 23, 'delivery', '2021-04-22');

-- --------------------------------------------------------

--
-- Table structure for table `tblinventory`
--

CREATE TABLE `tblinventory` (
  `transac_id` int(50) NOT NULL,
  `product_id` int(50) NOT NULL,
  `quantity` int(50) NOT NULL,
  `date_in` datetime(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tblproducts`
--

CREATE TABLE `tblproducts` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `quantity` int(11) NOT NULL DEFAULT 1,
  `price` int(20) NOT NULL,
  `profit` int(22) NOT NULL,
  `date_in` varchar(50) NOT NULL,
  `category_id` int(11) NOT NULL,
  `supplier_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_code` varchar(11) NOT NULL,
  `status` varchar(200) NOT NULL,
  `product_image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblproducts`
--

INSERT INTO `tblproducts` (`product_id`, `product_name`, `quantity`, `price`, `profit`, `date_in`, `category_id`, `supplier_id`, `user_id`, `product_code`, `status`, `product_image`) VALUES
(10, 'banana', 11, 50, 2, '2020-09-29', 1, 2, 2, '1018', 'Available', 'fruit1.jpg'),
(11, 'oil', 38, 2000, 55, '2020-10-01', 2, 1, 2, '1019', 'Available', 'oil1.jpg'),
(12, 'chest', 76, 200, 51, '2020-10-01', 1, 3, 2, '1020', 'Available', 'vegetable.jpg'),
(13, 'orange', 12, 500, 55, '2020-10-01', 3, 1, 2, '1021', 'Available', 'th (2).jpg'),
(14, 'apple', 53, 500, 5, '2020-10-01', 3, 1, 2, '1022', 'Available', 'th (2).jpg'),
(15, 'tomatoes', 98, 1000, 55, '2020-10-01', 1, 2, 2, '1023', 'Available', 'vegetable2.jpg'),
(16, 'red juice', 27, 700, 55, '2020-10-01', 3, 1, 2, '1024', 'Available', 'th4.jpg'),
(17, 'ananas', 43, 400, 55, '2020-10-06', 1, 1, 2, '1025', 'Available', 'th.jpg'),
(18, 'samosa', 32, 34, 3, '2021-02-17', 2, 2, 2, '1026', 'Available', 'watermelon.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tblsupplier`
--

CREATE TABLE `tblsupplier` (
  `supplier_id` int(11) NOT NULL,
  `supplier_name` varchar(30) NOT NULL,
  `contact` varchar(50) NOT NULL,
  `email` varchar(20) NOT NULL,
  `address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblsupplier`
--

INSERT INTO `tblsupplier` (`supplier_id`, `supplier_name`, `contact`, `email`, `address`) VALUES
(1, 'Muneza gad', '9095643236', 'munezar@gmail.com', 'kigali'),
(2, 'Mugisha aimee', '9786534213', 'Mugisha@yahoo.com', 'musanze  yaunde'),
(3, 'Nshimiye jules', '788513375', 'nshimiye@gmailcom', 'Rubavu');

-- --------------------------------------------------------

--
-- Table structure for table `tbltransac`
--

CREATE TABLE `tbltransac` (
  `transac_id` int(11) NOT NULL,
  `transac_code` int(100) NOT NULL,
  `date` varchar(50) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `product_code` varchar(200) NOT NULL,
  `qty` int(20) NOT NULL,
  `price` int(11) NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbltransac`
--

INSERT INTO `tbltransac` (`transac_id`, `transac_code`, `date`, `customer_id`, `product_code`, `qty`, `price`, `total`) VALUES
(31, 1554235838, '2019-04-03', 39, '100', 1, 350, 350),
(32, 1554235838, '2019-04-03', 39, '1002', 1, 400, 400),
(33, 1554251111, '2019-04-03', 39, '100', 1, 350, 350),
(34, 1572074522, '2019-10-26', 42, '1001', 5, 400, 2000),
(35, 1572074522, '2019-10-26', 42, '100', 3, 350, 1050),
(36, 1572075891, '2019-10-26', 42, '1003', 20, 300, 6000),
(37, 1572356267, '2019-10-29', 42, '1001', 3, 400, 1200),
(38, 1572356267, '2019-10-29', 42, '1005', 16, 300, 4800),
(39, 1572850714, '2019-11-04', 42, '100', 1, 1500, 1500),
(40, 1572850714, '2019-11-04', 42, '1001', 1, 1500, 1500),
(41, 1573016058, '2019-11-06', 42, '100', 15, 1500, 22500),
(42, 1573057409, '2019-11-07', 46, '1001', 7, 1500, 10500),
(43, 1573110712, '2019-11-07', 46, '1001', 1, 1500, 1500),
(44, 1573788177, '2019-11-15', 46, '1001', 1, 1500, 1500),
(45, 1573788177, '2019-11-15', 46, '1002', 1, 1500, 1500),
(46, 1573993061, '2019-11-17', 0, '1004', 1, 1000, 1000),
(47, 1573993148, '2019-11-17', 30, '1004', 1, 1000, 1000),
(48, 1573993179, '2019-11-17', 30, '1004', 1, 1000, 1000),
(49, 1573993307, '2019-11-17', 30, '1004', 1, 1000, 1000),
(50, 1573993636, '2019-11-17', 30, '1004', 2, 1000, 2000),
(51, 1574060123, '2019-11-18', 30, '1004', 10, 1000, 10000),
(52, 1574302308, '2019-11-21', 2, '1010', 1, 1500, 1500),
(53, 1574306845, '2019-11-21', 2, '1010', 1, 1500, 1500),
(54, 1574306845, '2019-11-21', 2, '1009', 1, 1800, 1800),
(55, 1574329865, '2019-11-21', 3, '1009', 1, 1800, 1800),
(56, 1574330004, '2019-11-21', 3, '1011', 1, 1500, 1500),
(57, 1574331170, '2019-11-21', 4, '1010', 1, 1500, 1500),
(58, 1574408390, '2019-11-22', 2, '1009', 6, 1800, 10800),
(59, 1574408390, '2019-11-22', 2, '1010', 20, 1500, 30000),
(60, 1574408390, '2019-11-22', 2, '1011', 20, 1500, 30000),
(61, 1574408390, '2019-11-22', 2, '1014', 20, 1000, 20000),
(62, 1574408442, '2019-11-22', 2, '1014', 20, 1000, 20000),
(63, 1574602908, '2019-11-24', 1, '1014', 1, 1000, 1000),
(64, 1574732852, '2019-11-26', 1, '1009', 1, 1800, 1800),
(65, 1574836996, '2019-11-27', 1, '1009', 1, 1800, 1800),
(66, 1574841234, '2019-11-27', 1, '1009', 1, 1800, 1800),
(67, 1574841234, '2019-11-27', 1, '1014', 20, 1000, 20000),
(68, 1574844266, '2019-11-27', 1, '1010', 1, 1500, 1500),
(69, 1574872971, '2019-11-28', 1, '1011', 5, 1500, 7500),
(70, 1574872971, '2019-11-28', 1, '1010', 50, 1500, 75000),
(71, 1575428004, '2019-12-04', 1, '1010', 25, 1500, 37500),
(72, 1575428004, '2019-12-04', 1, '1011', 40, 1500, 60000),
(73, 1575428113, '2019-12-04', 2, '1010', 30, 1500, 45000),
(74, 1575428113, '2019-12-04', 2, '1011', 30, 1500, 45000),
(75, 1575428238, '2019-12-04', 3, '1012', 45, 1800, 81000),
(76, 1575428238, '2019-12-04', 3, '1010', 40, 1500, 60000),
(77, 1575872572, '2019-12-09', 1, '1011', 14, 1500, 21000),
(78, 1575873091, '2019-12-09', 1, '1011', 15, 1500, 22500),
(79, 1576051349, '2019-12-11', 1, '1010', 1, 1500, 1500),
(80, 1576051349, '2019-12-11', 1, '1014', 1, 1000, 1000),
(81, 1576051349, '2019-12-11', 1, '1012', 5, 1800, 9000),
(82, 1601580117, '2020-10-01', 4, '1019', 2, 2000, 4000),
(83, 1601580117, '2020-10-01', 4, '1021', 1, 500, 500),
(84, 1601580117, '2020-10-01', 4, '1018', 5, 50, 250),
(85, 1601884458, '2020-10-05', 5, '1018', 4, 50, 200),
(86, 1601900545, '2020-10-05', 5, '1020', 5, 200, 1000),
(87, 1601900910, '2020-10-05', 5, '1024', 1, 700, 700),
(88, 1601901500, '2020-10-05', 4, '1023', 1, 1000, 1000),
(89, 1601902251, '2020-10-05', 5, '1020', 1, 200, 200),
(90, 1601907516, '2020-10-05', 4, '1022', 1, 500, 500),
(91, 1601907912, '2020-10-05', 5, '1024', 1, 700, 700),
(92, 1601973443, '2020-10-06', 5, '1019', 1, 2000, 2000),
(93, 1601985430, '2020-10-06', 5, '1018', 1, 50, 50),
(94, 1601985711, '2020-10-06', 5, '1018', 50, 50, 2500),
(95, 1601986537, '2020-10-06', 5, '1021', 34, 500, 17000),
(96, 1601986653, '2020-10-06', 5, '1019', 2, 2000, 4000),
(97, 1601986768, '2020-10-06', 5, '1020', 12, 200, 2400),
(98, 1601986939, '2020-10-06', 5, '1024', 1, 700, 700),
(99, 1601987133, '2020-10-06', 5, '1019', 4, 2000, 8000),
(100, 1601987382, '2020-10-06', 5, '1018', 1, 50, 50),
(101, 1601989049, '2020-10-06', 4, '1025', 1, 400, 400),
(102, 1608241467, '2020-12-17', 5, '1020', 1, 200, 200),
(103, 1608241467, '2020-12-17', 5, '1020', 1, 200, 200),
(104, 1608241467, '2020-12-17', 5, '1019', 1, 2000, 2000),
(105, 1608280488, '2020-12-18', 5, '1018', 1, 50, 50),
(106, 1608280488, '2020-12-18', 5, '1018', 1, 50, 50),
(107, 1611929229, '2021-01-29', 5, '1020', 1, 200, 200),
(108, 1611929229, '2021-01-29', 5, '1019', 1, 2000, 2000),
(109, 1611929402, '2021-01-29', 5, '1020', 1, 200, 200),
(110, 1611929402, '2021-01-29', 5, '1019', 1, 2000, 2000),
(111, 1611929435, '2021-01-29', 5, '1021', 3, 500, 1500),
(112, 1613051723, '', 5, '1023', 1, 1000, 1000),
(113, 1613052031, '2021-02-24', 5, '1025', 1, 400, 400),
(114, 1613052353, '2021-02-19', 5, '1022', 2, 500, 1000),
(115, 1613054848, '2021-02-12', 5, '1020', 1, 200, 200),
(116, 1613055173, '2021-02-13', 5, '1020', 1, 200, 200);

-- --------------------------------------------------------

--
-- Table structure for table `tbltransacdetail`
--

CREATE TABLE `tbltransacdetail` (
  `detail_id` int(11) NOT NULL,
  `transac_code` int(11) NOT NULL,
  `date` datetime(6) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `deliveryfee` int(11) NOT NULL,
  `pay_met` varchar(30) NOT NULL,
  `totalprice` int(11) NOT NULL,
  `status` varchar(200) NOT NULL,
  `remarks` text NOT NULL,
  `delivery_date` datetime(6) NOT NULL,
  `delivery_address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbltransacdetail`
--

INSERT INTO `tbltransacdetail` (`detail_id`, `transac_code`, `date`, `customer_id`, `deliveryfee`, `pay_met`, `totalprice`, `status`, `remarks`, `delivery_date`, `delivery_address`) VALUES
(1, 1575428004, '2019-12-04 00:00:00.000000', 1, 150, '', 97650, 'Confirmed', 'Your order has been confirmed!', '2019-12-10 00:00:00.000000', ''),
(2, 1575428113, '2019-12-04 00:00:00.000000', 2, 150, '', 90150, 'Confirmed', 'Your order has been confirmed!', '2019-12-16 00:00:00.000000', ''),
(3, 1575428238, '2019-12-04 00:00:00.000000', 3, 150, '', 141150, 'Confirmed', 'Your order has been confirmed!', '2019-12-20 00:00:00.000000', ''),
(4, 1575872572, '2019-12-09 00:00:00.000000', 1, 150, '', 21150, 'Pending', '', '2019-12-10 00:00:00.000000', ''),
(5, 1575873091, '2019-12-09 00:00:00.000000', 1, 150, '', 22650, 'Pending', '', '2019-12-10 00:00:00.000000', ''),
(6, 1576051349, '2019-12-11 00:00:00.000000', 1, 150, '', 11650, 'Pending', '', '2019-06-20 00:00:00.000000', ''),
(7, 1601580117, '2020-10-01 00:00:00.000000', 4, 150, '', 4900, 'Confirmed', 'Your order has been confirmed!', '2020-10-05 00:00:00.000000', ''),
(8, 1601884458, '2020-10-05 00:00:00.000000', 5, 150, '', 350, 'Confirmed', 'Your order has been confirmed!', '2020-10-05 00:00:00.000000', ''),
(9, 1601900545, '2020-10-05 00:00:00.000000', 5, 150, '', 1150, 'Confirmed', 'Your order has been confirmed!', '2020-10-07 00:00:00.000000', ''),
(10, 1601900910, '2020-10-05 00:00:00.000000', 5, 150, '', 850, 'Confirmed', 'Your order has been confirmed!', '2020-10-06 00:00:00.000000', ''),
(11, 1601901500, '2020-10-05 00:00:00.000000', 4, 150, '', 1150, 'Pending', '', '2020-09-30 00:00:00.000000', ''),
(12, 1601902251, '2020-10-05 00:00:00.000000', 5, 150, '', 350, 'Pending', '', '2020-10-05 00:00:00.000000', ''),
(13, 1601907516, '2020-10-05 00:00:00.000000', 4, 150, '', 650, 'Pending', '', '2020-10-07 00:00:00.000000', ''),
(14, 1601907912, '2020-10-05 00:00:00.000000', 5, 150, '', 850, 'Pending', '', '2020-10-06 00:00:00.000000', ''),
(15, 1601973443, '2020-10-06 00:00:00.000000', 5, 150, '', 2150, 'Pending', '', '2020-10-07 00:00:00.000000', ''),
(16, 1601985430, '2020-10-06 00:00:00.000000', 5, 150, '', 200, 'Pending', '', '2020-10-07 00:00:00.000000', ''),
(17, 1601985473, '2020-10-06 00:00:00.000000', 5, 150, '', 150, 'Pending', '', '2020-10-19 00:00:00.000000', ''),
(18, 1601985711, '2020-10-06 00:00:00.000000', 5, 150, 'Cash on Pickup', 2650, 'Pending', '', '2020-10-23 00:00:00.000000', ''),
(19, 1601986537, '2020-10-06 00:00:00.000000', 5, 150, 'Cash on ', 17150, 'Pending', '', '2020-10-12 00:00:00.000000', ''),
(20, 1601986653, '2020-10-06 00:00:00.000000', 5, 150, 'Cash on Delivery', 4150, 'Pending', '', '2020-10-19 00:00:00.000000', ''),
(21, 1601986768, '2020-10-06 00:00:00.000000', 5, 150, 'Cash on Delivery', 2550, 'Pending', '', '2020-10-20 00:00:00.000000', ''),
(22, 1601986939, '2020-10-06 00:00:00.000000', 5, 150, 'Cash on Delivery', 850, 'Pending', '', '2020-10-14 00:00:00.000000', ''),
(23, 1601987133, '2020-10-06 00:00:00.000000', 5, 150, 'Cash on Pickup', 8000, 'Pending', '', '2020-10-12 00:00:00.000000', ''),
(24, 1601987382, '2020-10-06 00:00:00.000000', 5, 150, 'Cash on Delivery', 200, 'Pending', '', '2020-09-28 00:00:00.000000', ''),
(25, 1601989049, '2020-10-06 00:00:00.000000', 4, 150, 'Cash on Pickup', 400, 'Pending', '', '2020-10-07 00:00:00.000000', ''),
(26, 1608241467, '2020-12-17 00:00:00.000000', 5, 150, 'Cash on Delivery', 2550, 'Pending', '', '2020-12-25 00:00:00.000000', ''),
(27, 1608280488, '2020-12-18 00:00:00.000000', 5, 150, 'Cash on Delivery', 250, 'Pending', '', '2020-12-24 00:00:00.000000', ''),
(28, 1611929229, '2021-01-29 00:00:00.000000', 5, 150, 'Cash on Delivery', 2350, 'Pending', '', '2021-01-30 00:00:00.000000', '                                \r\n                              '),
(29, 1611929402, '2021-01-29 00:00:00.000000', 5, 150, 'Cash on Delivery', 2350, 'Pending', '', '2021-01-30 00:00:00.000000', '                                \r\n                              '),
(30, 1611929435, '2021-01-29 00:00:00.000000', 5, 0, 'Cash on Pickup', 1500, 'Pending', '', '2021-01-30 00:00:00.000000', '                                \r\n                              '),
(31, 1613051723, '0000-00-00 00:00:00.000000', 5, 0, 'Cash on Pickup', 1000, 'Pending', '', '2021-02-19 00:00:00.000000', '-'),
(32, 1613052031, '2021-02-24 00:00:00.000000', 5, 150, 'Cash on Delivery', 550, 'Pending', '', '0000-00-00 00:00:00.000000', '                                \r\n                              '),
(33, 1613052266, '2021-02-11 00:00:00.000000', 5, 150, 'Cash on Delivery', 150, 'Pending', '', '2021-02-24 00:00:00.000000', '                                \r\n                              '),
(34, 1613052353, '2021-02-11 00:00:00.000000', 5, 150, 'Cash on Delivery', 1150, 'Pending', '', '2021-02-19 00:00:00.000000', '                                \r\n                              '),
(35, 1613052539, '2021-02-11 00:00:00.000000', 5, 150, 'Cash on Delivery', 150, 'Pending', '', '2021-02-19 00:00:00.000000', '                                \r\n                              '),
(36, 1613054848, '2021-02-11 00:00:00.000000', 5, 150, 'Cash on Delivery', 350, 'Cancelled', 'Your order has been cancelled <br>\r\n	 due to lack of communication <br> and incomplete informatio!', '2021-02-12 00:00:00.000000', '                                \r\n                              '),
(37, 1613055173, '2021-02-11 00:00:00.000000', 5, 150, 'Cash on Delivery', 350, 'Delivered', 'Your order has been Started for delivery !', '2021-02-13 00:00:00.000000', '                                \r\n                              ');

-- --------------------------------------------------------

--
-- Table structure for table `tblusers`
--

CREATE TABLE `tblusers` (
  `user_id` int(11) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `contact` int(11) NOT NULL,
  `address` text NOT NULL,
  `position` varchar(50) NOT NULL,
  `username` varchar(30) NOT NULL,
  `pass` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblusers`
--

INSERT INTO `tblusers` (`user_id`, `fname`, `lname`, `email`, `contact`, `address`, `position`, `username`, `pass`) VALUES
(2, 'oliva', 'musanabera', 'oliva@gmail.com', 782434806, '', 'Admin', 'admin', '$2y$10$ds1gqSSjIHq/I7c.Ly/w9eF.OPgcXyeG09wL71loBGy0qLkNzUZlS');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`h_id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblautonumber`
--
ALTER TABLE `tblautonumber`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblcategory`
--
ALTER TABLE `tblcategory`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `tblcustomer`
--
ALTER TABLE `tblcustomer`
  ADD PRIMARY KEY (`C_ID`);

--
-- Indexes for table `tbldelivery`
--
ALTER TABLE `tbldelivery`
  ADD PRIMARY KEY (`D_ID`);

--
-- Indexes for table `tblemployee`
--
ALTER TABLE `tblemployee`
  ADD PRIMARY KEY (`emp_id`);

--
-- Indexes for table `tblproducts`
--
ALTER TABLE `tblproducts`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `FK_tblproducts_tblsupplier` (`supplier_id`,`user_id`);

--
-- Indexes for table `tblsupplier`
--
ALTER TABLE `tblsupplier`
  ADD PRIMARY KEY (`supplier_id`);

--
-- Indexes for table `tbltransac`
--
ALTER TABLE `tbltransac`
  ADD PRIMARY KEY (`transac_id`),
  ADD KEY `FK_tbltransac_details_tblcustomer` (`customer_id`);

--
-- Indexes for table `tbltransacdetail`
--
ALTER TABLE `tbltransacdetail`
  ADD PRIMARY KEY (`detail_id`);

--
-- Indexes for table `tblusers`
--
ALTER TABLE `tblusers`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `history`
--
ALTER TABLE `history`
  MODIFY `h_id` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tblautonumber`
--
ALTER TABLE `tblautonumber`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tblcategory`
--
ALTER TABLE `tblcategory`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tblcustomer`
--
ALTER TABLE `tblcustomer`
  MODIFY `C_ID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbldelivery`
--
ALTER TABLE `tbldelivery`
  MODIFY `D_ID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tblemployee`
--
ALTER TABLE `tblemployee`
  MODIFY `emp_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tblproducts`
--
ALTER TABLE `tblproducts`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `tblsupplier`
--
ALTER TABLE `tblsupplier`
  MODIFY `supplier_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbltransac`
--
ALTER TABLE `tbltransac`
  MODIFY `transac_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=117;

--
-- AUTO_INCREMENT for table `tbltransacdetail`
--
ALTER TABLE `tbltransacdetail`
  MODIFY `detail_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `tblusers`
--
ALTER TABLE `tblusers`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
