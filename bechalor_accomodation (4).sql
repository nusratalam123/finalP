-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 08, 2023 at 11:58 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bechalor_accomodation`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `id` int(11) NOT NULL,
  `admin_email` varchar(250) NOT NULL,
  `admin_pass` varchar(250) NOT NULL,
  `first_name` varchar(250) NOT NULL,
  `last_name` varchar(250) NOT NULL,
  `admin_type` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`id`, `admin_email`, `admin_pass`, `first_name`, `last_name`, `admin_type`) VALUES
(1, 'nusrat123@gmail.com', 'nus123', 'nusrat', 'alam', '2'),
(2, 'admin123@gmail.com', 'admin123', 'admin', 'admin', '1'),
(5, 'sharafat20@gmail.com', 's123', 'Md.', 'sharafat', '1'),
(6, 'nowrin@gmail.com', 'n123', 'nowrin', 'alam', '2'),
(7, 'nowrin1@gmail.com', 'n1234', 'nowrin', 'alam', '2'),
(8, 'nowrin@gmail.com', 'n123', 'nowrin', 'alam', '2'),
(9, 'nussha975@gmail.com', 'nussha1', 'nussha', 'alam', '2'),
(10, 'dataCollector123@gmail.com', 'data1', 'hamja', 'ali', '3');

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `banner_id` int(11) NOT NULL,
  `banner_title` varchar(250) NOT NULL,
  `banner_img` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`banner_id`, `banner_title`, `banner_img`) VALUES
(1, 'banner 1', 'messf.jpg'),
(2, 'banner 2', 'flatf.jpg'),
(3, 'banner 3', 'chef2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `booked_vehicle`
--

CREATE TABLE `booked_vehicle` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `mobile` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `booked_vehicle`
--

INSERT INTO `booked_vehicle` (`id`, `name`, `mobile`) VALUES
(1, 'nusrat', '01818181818');

-- --------------------------------------------------------

--
-- Table structure for table `data_collector`
--

CREATE TABLE `data_collector` (
  `id` int(11) NOT NULL,
  `email` varchar(250) NOT NULL,
  `name` varchar(250) NOT NULL,
  `area` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `data_collector`
--

INSERT INTO `data_collector` (`id`, `email`, `name`, `area`, `password`) VALUES
(1, 'datacollector33@gmail.com', 'kamal', 'airport', 'kamal33'),
(2, 'datacollector34@gmail.com', 'jamal', 'jatrabari', 'jamal34');

-- --------------------------------------------------------

--
-- Table structure for table `flat_book`
--

CREATE TABLE `flat_book` (
  `id` int(11) NOT NULL,
  `name` varchar(250) DEFAULT NULL,
  `mobile` varchar(250) DEFAULT NULL,
  `profession` varchar(250) DEFAULT NULL,
  `guardian_name` varchar(250) DEFAULT NULL,
  `guardian_mobile` varchar(250) DEFAULT NULL,
  `relation` varchar(250) DEFAULT NULL,
  `marital_status` varchar(250) DEFAULT NULL,
  `present` varchar(250) DEFAULT NULL,
  `family_member` int(11) DEFAULT NULL,
  `image` varchar(250) DEFAULT NULL,
  `national` varchar(250) DEFAULT NULL,
  `institute` varchar(250) DEFAULT NULL,
  `parmanent` varchar(250) NOT NULL,
  `living_area` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `flat_book`
--

INSERT INTO `flat_book` (`id`, `name`, `mobile`, `profession`, `guardian_name`, `guardian_mobile`, `relation`, `marital_status`, `present`, `family_member`, `image`, `national`, `institute`, `parmanent`, `living_area`) VALUES
(1, 'sharafat', '01818181818', 'job holder', 'alamgir', '01913393619', 'father', 'unmarried', '153,ashkona,airport,dhaka', 5, 'user.jpg', 'national.jpg', 'idcard.jpg', 'tarua asugonj b.baria', 'airport'),
(2, 'sharafat', '01818181818', 'job holder', 'alamgir', '01913393619', 'father', 'unmarried', '153,uttara,dhaka', 5, 'user.jpg', 'national.jpg', 'idcard.jpg', 'tarua asugonj b.baria', 'uttara'),
(3, 'nusrat', '01818181818', 'job holder', 'alamgir', '01913393619', 'father', 'unmarried', '205,jatrabari,dhaka', 5, 'user.jpg', '', 'idcard.jpg', 'tarua asugonj b.baria', 'jatrabari');

-- --------------------------------------------------------

--
-- Table structure for table `flat_info`
--

CREATE TABLE `flat_info` (
  `id` int(11) NOT NULL,
  `post_name` varchar(250) NOT NULL,
  `area` varchar(250) NOT NULL,
  `address` varchar(250) NOT NULL,
  `mobile` varchar(250) NOT NULL,
  `date` varchar(250) NOT NULL,
  `description` varchar(250) NOT NULL,
  `cost` int(11) NOT NULL,
  `advance` int(11) NOT NULL,
  `room_num` int(11) NOT NULL,
  `washroom_num` int(11) NOT NULL,
  `coridor_num` int(11) NOT NULL,
  `other` varchar(250) NOT NULL,
  `room_img` varchar(250) NOT NULL,
  `kitchen_img` varchar(250) NOT NULL,
  `coridoor_img` varchar(250) NOT NULL,
  `drawing_img` varchar(250) NOT NULL,
  `daining_img` varchar(250) NOT NULL,
  `wasroom_img` varchar(250) NOT NULL,
  `current_bill` varchar(250) NOT NULL,
  `water_bill` varchar(250) NOT NULL,
  `gas_bill` varchar(250) NOT NULL,
  `lift_charge` varchar(250) NOT NULL,
  `other_cost` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `flat_info`
--

INSERT INTO `flat_info` (`id`, `post_name`, `area`, `address`, `mobile`, `date`, `description`, `cost`, `advance`, `room_num`, `washroom_num`, `coridor_num`, `other`, `room_img`, `kitchen_img`, `coridoor_img`, `drawing_img`, `daining_img`, `wasroom_img`, `current_bill`, `water_bill`, `gas_bill`, `lift_charge`, `other_cost`, `email`) VALUES
(6, 'nusrat alam', 'ashkona', '153,ashkona,airport dhaka', '1234567891', '1 july 2023', 'asdfghjk', 20000, 20000, 4, 3, 3, 'very nice place ', 'room.jpg', 'kitchens.jpg', 'coridoor.jpg', 'drawingroom.jpeg', 'dainningroom.jpeg', 'washroom.jpg', 'user frindly', '500', '1000', '3000', '500', 'admin123@gmail.com'),
(7, 'nusrat', 'ashkona', '153,ashkona,uttara dhaka', '1234567890', '1 june 2023', 'asdfg', 10000, 10000, 2, 2, 1, 'very nice place for living', 'room.jpg', 'kitchens.jpg', 'coridoor.jpg', 'drawingroom.jpeg', 'dainningroom.jpeg', 'washroom.jpg', 'user frindly', '500', '1000', 'no', '500', 'nusrat123@gmail.com'),
(10, 'sharafat', 'ashkona', '104 /A (morium vila)north jatrabari', '01818181818', '1 june 2023', 'asdfgh', 10000, 10000, 2, 2, 1, 'very nice place for living', 'room.jpg', 'kitchens.jpg', 'coridoor.jpg', 'drawingroom.jpeg', 'dainningroom.jpeg', 'washroom.jpg', 'depends of uses', '500', '1000', 'no', '500', 'admin123@gmail.com'),
(11, 'sharafat', 'jatrabari', '104 /A (morium vila)north jatrabari', '01818181818', '1 june 2023', 'asdfg', 10000, 10000, 2, 2, 1, 'very nice place for living', 'room.jpg', 'kitchens.jpg', 'coridoor.jpg', 'drawingroom.jpeg', 'dainningroom.jpeg', 'washroom.jpg', 'depends of uses', '500', '1000', 'no', '500', ''),
(14, 'Hanif', 'jatrabari', '104 /A (morium vila)north jatrabari', '01818181818', '1 june 2023', 'asdfgh', 10000, 10000, 2, 2, 1, 'very nice place for living', 'room.jpg', 'kitchens.jpg', 'coridoor.jpg', 'drawingroom.jpeg', 'dainningroom.jpeg', 'washroom.jpg', 'depends of uses', '500', '1000', 'no', '500', 'nusrat123@gmail.com'),
(15, 'sharafat', 'jatrabari', '104 /A (morium vila)north jatrabari', '01818181818', '1 june 2023', 'asdfgh', 10000, 10000, 2, 2, 1, 'very nice place for living', 'room.jpg', 'kitchens.jpg', 'coridoor.jpg', 'drawingroom.jpeg', 'dainningroom.jpeg', 'washroom.jpg', 'depends of uses', '500', '1000', 'no', '500', ''),
(16, 'sharafat', 'jatrabari', '104 /A (morium vila)north jatrabari', '01818181818', '1 june 2023', 'asdfg', 10000, 10000, 2, 2, 1, 'very nice place for living', 'room.jpg', 'kitchens.jpg', 'coridoor.jpg', 'drawingroom.jpeg', 'dainningroom.jpeg', 'washroom.jpg', 'depends of uses', '500', '1000', 'no', '500', ''),
(20, 'sharafat', 'ashkona', '153,ashkona,uttara dhaka', '1234567890', '1 june 2023', 'asdfg', 10000, 10000, 2, 2, 1, 'very nice place for living', 'room.jpg', 'kitchens.jpg', 'coridoor.jpg', 'drawingroom.jpeg', 'dainningroom.jpeg', 'washroom.jpg', 'depends of uses', '500', '1000', '3000', '500', '');

-- --------------------------------------------------------

--
-- Table structure for table `mess_approve`
--

CREATE TABLE `mess_approve` (
  `mess_id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `mobile_no` varchar(250) NOT NULL,
  `address` varchar(250) NOT NULL,
  `date` varchar(250) NOT NULL,
  `description` varchar(250) NOT NULL,
  `cost` int(11) NOT NULL,
  `advance` int(11) NOT NULL,
  `seat` int(11) NOT NULL,
  `image` varchar(250) NOT NULL,
  `kitchen_img` varchar(250) NOT NULL,
  `washroom_img` varchar(250) NOT NULL,
  `area` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mess_approve`
--

INSERT INTO `mess_approve` (`mess_id`, `name`, `mobile_no`, `address`, `date`, `description`, `cost`, `advance`, `seat`, `image`, `kitchen_img`, `washroom_img`, `area`, `email`) VALUES
(23, '', '', '', '', '', 0, 0, 0, '', '', '', '', ''),
(25, '', '', '', '', '', 0, 0, 0, '', '', '', '', ''),
(25, '', '', '', '', '', 0, 0, 0, '', '', '', '', ''),
(33, '', '', '', '', '', 0, 0, 0, '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `mess_book`
--

CREATE TABLE `mess_book` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `mobile` varchar(250) NOT NULL,
  `profession` varchar(250) NOT NULL,
  `guardian_name` varchar(250) NOT NULL,
  `guardian_mobile` varchar(250) NOT NULL,
  `relation` varchar(250) NOT NULL,
  `marital_status` varchar(250) NOT NULL,
  `present` varchar(250) NOT NULL,
  `parmanent` varchar(250) NOT NULL,
  `date` varchar(250) NOT NULL,
  `image` varchar(250) NOT NULL,
  `national` varchar(250) NOT NULL,
  `institute` varchar(250) NOT NULL,
  `area` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mess_book`
--

INSERT INTO `mess_book` (`id`, `name`, `mobile`, `profession`, `guardian_name`, `guardian_mobile`, `relation`, `marital_status`, `present`, `parmanent`, `date`, `image`, `national`, `institute`, `area`) VALUES
(1, 'nusrat', '01818181818', '', 'alamgir', '01913393619', 'father', '', '153,ashkona,airport,dhaka', 'tarua asugonj b.baria', '2 aug 2002', 'user.jpg', 'national.jpg', 'idcard.jpg', 'airport'),
(3, 'nowrin', '01818181818', '', 'alamgir', '01913393619', 'father', 'unmarried', '153,ashkona,airport,dhaka', 'tarua asugonj b.baria', '2 aug 2002', 'user.jpg', '7070896712345', 'idcard.jpg', 'airport'),
(4, 'nowrin', '01818181818', '', 'alamgir', '01913393619', 'father', 'unmarried', '153,ashkona,airport,dhaka', 'tarua asugonj b.baria', '1 july 2023', 'user.jpg', '7070896712345', 'idcard.jpg', 'jatrabari');

-- --------------------------------------------------------

--
-- Table structure for table `mess_info`
--

CREATE TABLE `mess_info` (
  `id` int(128) NOT NULL,
  `post_name` varchar(250) NOT NULL,
  `mobile_no` varchar(250) NOT NULL,
  `address` varchar(250) NOT NULL,
  `date` varchar(250) NOT NULL,
  `description` varchar(250) NOT NULL,
  `cost_room` int(128) NOT NULL,
  `advance` int(128) NOT NULL,
  `number_seat` varchar(250) NOT NULL,
  `image` varchar(250) NOT NULL,
  `others` varchar(250) NOT NULL,
  `image_kitchen` varchar(250) NOT NULL,
  `image_washroom` varchar(250) NOT NULL,
  `area` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mess_info`
--

INSERT INTO `mess_info` (`id`, `post_name`, `mobile_no`, `address`, `date`, `description`, `cost_room`, `advance`, `number_seat`, `image`, `others`, `image_kitchen`, `image_washroom`, `area`, `email`) VALUES
(23, 'sharafat', '01818181818', '104 /A (morium vila)north jatrabari', '1 may 2023', '*3 person for one room.\r\n*2nd floor\r\n*always gas,water and electricity contain.\r\n*ligth and air.\r\n*frize and filter.\r\n*2 washroom\r\n', 2300, 2500, '1', 'room.jpg', 'very nice place for living', 'kitchens.jpg', 'washroom.jpg', 'north jatrabari', 'nusrat123@gmail.com'),
(24, 'sharafat', '01818181818', '104 /A (morium vila)north jatrabari', '1 may 2023', '*3 person for one room.\r\n*2nd floor\r\n*always gas,water and electricity contain.\r\n*ligth and air.\r\n*frize and filter.\r\n*2 washroom\r\n', 2300, 2500, '1', 'room.jpg', 'very nice place for living', 'kitchens.jpg', 'washroom.jpg', 'north jatrabari', 'nusrat123@gmail.com'),
(25, 'Md.sharafat', '01818181819', '104 /A (morium vila)north jatrabari', '1 july 2023', 'asdfghjk', 2000, 2000, '1', 'room.jpg', 'very nice place for living', 'kitchens.jpg', 'washroom.jpg', 'jatrabari', 'admin123@gmail.com'),
(26, 'sharafat', '01818181818', '104 /A (morium vila)north jatrabari', '1 may 2023', '*3 person for one room.\r\n*2nd floor\r\n*always gas,water and electricity contain.\r\n*ligth and air.\r\n*frize and filter.\r\n*2 washroom\r\n', 2300, 2500, '1', 'room.jpg', 'very nice place for living', 'kitchens.jpg', 'washroom.jpg', 'mohakhali', 'admin123@gmail.com'),
(33, 'sharafat', '01818181818', '104 /A (morium vila)north jatrabari', '1 may 2023', '*boua dara ranna.\r\n*always water contain.\r\n*advantage of gase\r\n*wifi advantage\r\n*frize\r\n*good environment of learning.', 2300, 2500, '1', 'room.jpg', 'very nice place for living', 'kitchens.jpg', 'washroom.jpg', 'bonani', 'nusrat123@gmail.com'),
(39, 'nusrat', '1234567890', '153,ashkona,uttara dhaka', '1 june 2023', '*boua dara ranna.\r\n*always water contain.\r\n*people are well manner', 10000, 10000, '1', 'room.jpg', 'very nice place for living', 'kitchens.jpg', 'washroom.jpg', 'ashkona', 'admin123@gmail.com'),
(40, 'nusrat', '1234567890', '153,ashkona,uttara dhaka', '1 june 2023', '*boua dara ranna.\r\n*always water contain.\r\n*people are well manner.', 5000, 7000, '2', 'room.jpg', 'very nice place for living', 'kitchens.jpg', 'washroom.jpg', 'ashkona', ''),
(41, 'nusrat', '1234567890', '153,ashkona,uttara dhaka', '1 june 2023', '*boua dara ranna.\r\n*always water contain.\r\n*well mannar people.', 10000, 10000, '2', 'room.jpg', 'very nice place for living', 'kitchens.jpg', 'washroom.jpg', 'ashkona', ''),
(43, 'nusrta', '1234567890', '153,ashkona,uttara dhaka', '1 june 2023', '*boua dara ranna.\r\n*always water contain.\r\n*room are well.', 3000, 4000, '1', 'room.jpg', 'very nice place for living', 'kitchens.jpg', 'washroom.jpg', 'ashkona', ''),
(48, 'nusrat', '01818181818', '153,ashkona,uttara dhaka', '1 june 2023', 'aghjhjk', 2300, 2500, '1', 'coridoor.jpg', 'very nice place for living', 'dainningroom.jpeg', 'washroom.jpg', 'ashkona', ''),
(49, 'nusrat', '01818181818', '153,ashkona,uttara dhaka', '1 june 2023', 'aghjhjk', 2300, 2500, '1', 'coridoor.jpg', 'very nice place for living', 'dainningroom.jpeg', 'washroom.jpg', 'ashkona', ''),
(50, 'nusrat', '01818181818', '153,ashkona,uttara dhaka', '1 june 2023', 'aghjhjk', 2300, 2500, '1', 'coridoor.jpg', 'very nice place for living', 'dainningroom.jpeg', 'washroom.jpg', 'ashkona', ''),
(51, 'sharafat', '01818181818', '104 /A (morium vila)north jatrabari', '1 may 2023', 'water,frize etc.', 2300, 2500, '1', 'room.jpg', 'very nice place for living', 'kitchens.jpg', 'washroom.jpg', 'north jatrabari', ''),
(52, 'sharafat', '01818181818', '104 /A (morium vila)north jatrabari', '1 may 2023', 'asdfghjk', 2300, 2500, '2', '', 'very nice place for living', '', '', 'north jatrabari', ''),
(53, 'sharafat', '01818181818', '104 /A (morium vila)north jatrabari', '1 june 2023', 'asdfghjk', 2300, 2500, '1', 'room.jpg', 'very nice place for living', 'kitchens.jpg', 'washroom.jpg', 'ashkona', ''),
(54, 'nusrat', '1234567890', '153,ashkona,uttara dhaka', '1 june 2023', 'dfghghjkl', 10000, 10000, '2', 'coridoor.jpg', 'very nice place for living', 'kitchens.jpg', 'washroom.jpg', 'ashkona', ''),
(55, 'nusrat', '', '', '', '', 0, 0, '', '', '', '', '', '', ''),
(56, 'hasan', '01818181818', '104 /A (morium vila)north jatrabari', '1 may 2023', 'room', 2300, 2500, '1', 'drawingroom.jpeg', 'very nice place for living', 'kitchens.jpg', 'washroom.jpg', 'jatrabari', 'nusratalam975@gmail.com'),
(57, 'Md kamal', '01956565656', '105,ashkona medical road.', '1 december', '2 bed,2 bath room,1 coridor,enough air and ligth,etc', 12000, 15000, '2', 'room.jpg', 'very nice place for living', 'kitchens.jpg', 'washroom.jpg', 'ashkona', 'mdkamal567@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `newuser`
--

CREATE TABLE `newuser` (
  `id` int(250) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `password_hash` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `newuser`
--

INSERT INTO `newuser` (`id`, `name`, `email`, `password_hash`) VALUES
(1, 'nusrat', 'nusrat123@gmail.com', '$2y$10$rFd9v2k5uxRj8p9BMUxnvePcDVcSgGGxKnxgdPjl4H4pUo.JbmX5K'),
(2, 'admin', 'admin123@gmail.com', '$2y$10$10f39vJ5oHAmnNt19iMexeS.d58YThk/fzJlKC.OS30qMBnR33LcC');

-- --------------------------------------------------------

--
-- Table structure for table `review_page`
--

CREATE TABLE `review_page` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `review_page`
--

INSERT INTO `review_page` (`id`, `name`, `email`, `description`, `image`) VALUES
(1, 'nusrat', 'nusrat123@gmail.com', 'Its a very helpful website to us.', 'user.jpg'),
(2, 'nowjufa', 'nusrat123@gmail.com', 'It is very helpful website.', 'chef2.jpg'),
(3, 'shanjida', 'nusrat123@gmail.com', 'It is very nice website', 'user.jpg'),
(4, 'hasib', 'nusrat123@gmail.com', 'It is very nice website', 'chef2.jpg'),
(5, 'Nowrin', 'nusrat123@gmail.com', 'It is very nice website', 'user.jpg'),
(7, 'Tasfia', 'nusrat123@gmail.com', 'It is very nice website', 'chef2.jpg'),
(8, 'jamili', 'nusrat123@gmail.com', 'It is very nice website', 'chef2.jpg'),
(9, 'nusaiba', 'nowrin1@gmail.com', 'It is very usefil website.because we can find easily our flat.', 'user.jpg'),
(10, 'nusa', 'nowrin@gmail.com', 'It is very usefil website.because we can find easily our mess and bouya.', 'chef2.jpg'),
(11, 'hasina', 'nusrat123@gmail.com', '', 'user.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `vehicle_info`
--

CREATE TABLE `vehicle_info` (
  `id` int(11) NOT NULL,
  `email` varchar(250) NOT NULL,
  `name` varchar(250) NOT NULL,
  `type` varchar(250) NOT NULL,
  `area` varchar(250) NOT NULL,
  `payment` varchar(250) NOT NULL,
  `mobile_no` varchar(250) NOT NULL,
  `date` varchar(250) NOT NULL,
  `address` varchar(250) NOT NULL,
  `vehicle_img` varchar(250) NOT NULL,
  `national_id` varchar(250) NOT NULL,
  `license_img` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `vehicle_info`
--

INSERT INTO `vehicle_info` (`id`, `email`, `name`, `type`, `area`, `payment`, `mobile_no`, `date`, `address`, `vehicle_img`, `national_id`, `license_img`) VALUES
(1, 'admin123@gmail.com', 'nusrat', 'cycle', 'ashkona', '500', '01818181818', '1 june 2023', '153,ashkona,uttara dhaka', 'truck.jpg', 'national.jpg', 'licence.jpg'),
(2, 'nusrat123@gmail.com', 'nusrat', 'ven', '123 jatrabari', '5000', '01818181818', '1 june 2023', 'bonani', 'truck.jpg', 'national.jpg', 'licence.jpg'),
(3, 'nusrat123@gmail.com', 'sharafat', 'truck', 'ashkona', '1000', '01818181818', '1 june 2023', 'mohakhali', 'truck.jpg', 'national.jpg', 'licence.jpg'),
(4, 'nusrat123@gmail.com', 'Nusrat', 'truck', 'ashkona', '1000', '01818181818', '1 june 2023', 'uttara', 'truck.jpg', 'national.jpg', 'licence.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `women_book`
--

CREATE TABLE `women_book` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `area` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `profession` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `national_img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `women_book`
--

INSERT INTO `women_book` (`id`, `name`, `area`, `address`, `profession`, `mobile`, `image`, `national_img`) VALUES
(1, 'sharafat', 'ashkona', '', 'job holder', '01818181818', 'chef.jpg', 'national.jpg'),
(3, 'nusrat', '', '', '', '01818181818', '', ''),
(4, 'nusrat', 'ashkona', '', 'job holder', '01818181819', 'user.jpg', '7070896712345');

-- --------------------------------------------------------

--
-- Table structure for table `women_chef_info`
--

CREATE TABLE `women_chef_info` (
  `id` int(11) NOT NULL,
  `email` varchar(250) NOT NULL,
  `name` varchar(250) NOT NULL,
  `area` varchar(250) NOT NULL,
  `date` varchar(250) NOT NULL,
  `time` varchar(250) NOT NULL,
  `age` int(11) NOT NULL,
  `cost` varchar(250) NOT NULL,
  `descripton` varchar(250) NOT NULL,
  `image` varchar(250) NOT NULL,
  `mobile` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `women_chef_info`
--

INSERT INTO `women_chef_info` (`id`, `email`, `name`, `area`, `date`, `time`, `age`, `cost`, `descripton`, `image`, `mobile`) VALUES
(1, 'admin123@gmail.com', 'nusrat', 'ashkona', '1 june 2023', '10am to 5pm', 30, '1000', 'asdf', 'chef.jpg', '1234567890'),
(3, 'nusrat1@gmail.com', 'nusrat', 'alam', '1 june 2023', '10 pm to 8 pm', 30, '500 perwork', 'zxcghjk', 'chef.jpg', '123456789'),
(6, 'admin123@gmail.com', 'jorina', 'ashkona', '2-2-1990', '8 am to 8 pm', 35, '3000', 'cook in well.', 'chef2.jpg', '01818181818'),
(7, 'admin123@gmail.com', 'Hasina', 'ashkona', '1 july 2023', '10am to 5pm', 27, '500 tk per work', 'cooking process well', 'chef2.jpg', '01818181818'),
(8, 'admin123@gmail.com', 'sokina', 'ashkona', '2-2-1991', '8 am to 10 am', 34, '3500', 'cook is well', 'srabanti.jpg', '01818181818'),
(9, 'admin123@gmail.com', 'jorina', 'bonani', '4-2-1992', '10am to 2 pm', 31, '2500', 'cook is well and clean.', 'chef.jpg', '01818181818'),
(10, 'admin123@gmail.com', 'halima', 'mohakhali', '3-7-1989', '8 pm to 10 pm', 32, '2500', 'cosk is well and clean. ', 'chef.jpg', '01818181818'),
(13, 'nusrat123@gmail.com', 'hasina', 'bonani', '1-4-1989', '9-2-1888', 39, '2000', 'cook is well and clean.', 'chef.jpg', '01818181818'),
(16, 'nusrat123@gmail.com', 'nusrat', 'ashkona', '1 june 2023', '10am to 5pm', 30, '500', 'valo', 'chef2.jpg', '1234567891');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`banner_id`);

--
-- Indexes for table `booked_vehicle`
--
ALTER TABLE `booked_vehicle`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_collector`
--
ALTER TABLE `data_collector`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `flat_book`
--
ALTER TABLE `flat_book`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `flat_info`
--
ALTER TABLE `flat_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mess_book`
--
ALTER TABLE `mess_book`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mess_info`
--
ALTER TABLE `mess_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newuser`
--
ALTER TABLE `newuser`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`,`email`);

--
-- Indexes for table `review_page`
--
ALTER TABLE `review_page`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vehicle_info`
--
ALTER TABLE `vehicle_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `women_book`
--
ALTER TABLE `women_book`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `women_chef_info`
--
ALTER TABLE `women_chef_info`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `banner_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `booked_vehicle`
--
ALTER TABLE `booked_vehicle`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `data_collector`
--
ALTER TABLE `data_collector`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `flat_book`
--
ALTER TABLE `flat_book`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `flat_info`
--
ALTER TABLE `flat_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `mess_book`
--
ALTER TABLE `mess_book`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `mess_info`
--
ALTER TABLE `mess_info`
  MODIFY `id` int(128) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `newuser`
--
ALTER TABLE `newuser`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `review_page`
--
ALTER TABLE `review_page`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `vehicle_info`
--
ALTER TABLE `vehicle_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `women_book`
--
ALTER TABLE `women_book`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `women_chef_info`
--
ALTER TABLE `women_chef_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
