-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 27, 2018 at 06:56 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `supplying`
--

-- --------------------------------------------------------

--
-- Table structure for table `confirmed_orders`
--

CREATE TABLE `confirmed_orders` (
  `order_id` int(10) NOT NULL,
  `hospital_name` varchar(100) NOT NULL,
  `werehouse_name` varchar(100) NOT NULL,
  `quantity` int(50) NOT NULL,
  `condition` varchar(50) NOT NULL,
  `car_type` varchar(50) NOT NULL,
  `confirm_date` date NOT NULL,
  `comment` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `confirmed_orders`
--

INSERT INTO `confirmed_orders` (`order_id`, `hospital_name`, `werehouse_name`, `quantity`, `condition`, `car_type`, `confirm_date`, `comment`) VALUES
(0, '108', '12', 1, '-------------', 'Un-Refrige', '2018-07-31', ''),
(1, 'hospital', 'jjj', 445, '-------------', 'Speed', '2018-08-07', 'nnnnnnnnnn'),
(11, '22', '55', 4, 'Emergency', 'Refrigerated', '0000-00-00', 'mmmmm'),
(21, '22', '55', 4, 'Emergency', 'Refrigerated', '2018-08-10', '');

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `employee_id` int(10) NOT NULL,
  `employee_name` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `employee_department` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `employee_phone` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`employee_id`, `employee_name`, `password`, `employee_department`, `email`, `employee_phone`) VALUES
(444, 'Majed', '4444', 'services', 'jffffn', '955231144'),
(123321, 'dawood', '3b712de481', 'Services', 'hruu07@hotmail.', '44432342'),
(444444444, 'Majed', '4444', 'services', 'jffffn@gmail.co', '955231144'),
(2147483647, 'Ahmed', '81dc9bdb52d04dc20036dbd8313ed055', 'Supplying', 'hruu5@hotmail.c', '999999999987');

-- --------------------------------------------------------

--
-- Table structure for table `hospitals`
--

CREATE TABLE `hospitals` (
  `hospital_id` int(10) NOT NULL,
  `hospital_name` varchar(100) NOT NULL,
  `hospital_city` varchar(50) NOT NULL,
  `hospital_phone` varchar(50) NOT NULL,
  `manager_phone` varchar(50) NOT NULL,
  `manager_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hospitals`
--

INSERT INTO `hospitals` (`hospital_id`, `hospital_name`, `hospital_city`, `hospital_phone`, `manager_phone`, `manager_name`) VALUES
(105, 'King Faisal Hos', 'Hofuf', '777778855', '', ''),
(104, 'Ben Jolwei Hosp', 'Mubarraz', '11112334', '', ''),
(105, 'KingFaisalHospi', 'Hofuf', '777778855', '', ''),
(104, 'BenJolweiHospit', 'Mubarraz', '11112334', '', ''),
(106, 'Al Jafr Hospita', 'Jafr', '100002544', '', ''),
(107, 'Birth and Child', 'Mubarazz', '44432342', '', ''),
(108, 'Al ahsa Hospita', 'hofuf', '999999999987', '', ''),
(22, 'dfaf', 'fdss', 'fsf4343', 'fdsaff', 'fdsagg'),
(888, 'jjjj', 'nnnnnnnnn', '444444444', '555555555', 'jkbkn');

-- --------------------------------------------------------

--
-- Table structure for table `order_list`
--

CREATE TABLE `order_list` (
  `order_id` int(10) NOT NULL,
  `werehouse_name` varchar(50) NOT NULL,
  `hospital` varchar(100) NOT NULL,
  `quantity` int(5) NOT NULL,
  `order_date` date NOT NULL,
  `car_type` varchar(100) NOT NULL,
  `condition` varchar(100) NOT NULL,
  `comment` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_list`
--

INSERT INTO `order_list` (`order_id`, `werehouse_name`, `hospital`, `quantity`, `order_date`, `car_type`, `condition`, `comment`) VALUES
(0, '12', '108', 1, '2018-07-05', 'Un-Refrige', '-------------', 'aaaaaaaaaa'),
(1, 'jjj', 'hospital', 445, '2018-07-26', 'Speed', '-------------', 'text'),
(11, '55', '22', 4, '2018-08-10', 'Refrigerated', 'Emergency', ':::::::::::::');

-- --------------------------------------------------------

--
-- Table structure for table `order_truck`
--

CREATE TABLE `order_truck` (
  `id` int(10) NOT NULL,
  `order_id` int(10) NOT NULL,
  `truck_id` int(10) NOT NULL,
  `order_date` date NOT NULL,
  `car_type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `truck_list`
--

CREATE TABLE `truck_list` (
  `truck_number` int(10) NOT NULL,
  `driver_name` varchar(100) NOT NULL,
  `capacity` int(10) NOT NULL,
  `status` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `truck_list`
--

INSERT INTO `truck_list` (`truck_number`, `driver_name`, `capacity`, `status`) VALUES
(9, 'jamal', 250, 'in site'),
(44, 'kkkkkk', 10, 'In Maintenance'),
(911, 'jamal', 250, 'in site');

-- --------------------------------------------------------

--
-- Table structure for table `werehouse_list`
--

CREATE TABLE `werehouse_list` (
  `werehouse_id` int(10) NOT NULL,
  `werehouse_name` varchar(100) NOT NULL,
  `werehouse_type` varchar(50) NOT NULL,
  `werehouse_extension` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `werehouse_list`
--

INSERT INTO `werehouse_list` (`werehouse_id`, `werehouse_name`, `werehouse_type`, `werehouse_extension`) VALUES
(1, 'inventory', 'hot', 0),
(12, 'inventory', 'Refrigerat', 0),
(33, '41', 'Un-Refrigerated', 788),
(55, 'ffffffffff', 'Un-Refrige', 0),
(88, 'First inventory', 'Un-Refrigerated', 11111);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `confirmed_orders`
--
ALTER TABLE `confirmed_orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`employee_id`);

--
-- Indexes for table `order_list`
--
ALTER TABLE `order_list`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `truck_list`
--
ALTER TABLE `truck_list`
  ADD PRIMARY KEY (`truck_number`);

--
-- Indexes for table `werehouse_list`
--
ALTER TABLE `werehouse_list`
  ADD PRIMARY KEY (`werehouse_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
