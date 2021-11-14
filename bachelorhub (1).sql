-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 14, 2021 at 06:29 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bachelorhub`
--

-- --------------------------------------------------------

--
-- Table structure for table `area`
--

CREATE TABLE `area` (
  `id` int(11) NOT NULL,
  `name` text COLLATE utf8mb4_bin NOT NULL,
  `priority` int(4) DEFAULT NULL,
  `insert_time` varchar(20) COLLATE utf8mb4_bin DEFAULT NULL,
  `insert_by` int(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `area`
--

INSERT INTO `area` (`id`, `name`, `priority`, `insert_time`, `insert_by`) VALUES
(1, 'Mohammadpur, Dhaka', 1, '2021-11-10', 1),
(2, 'Badda, Dhaka', 1, '2021-11-10', 1),
(3, 'Mirpur, Dhaka', 1, '2021-11-10', 1),
(4, 'Natunbazar, Dhaka', 1, '2021-11-10', 1),
(5, 'Dhanmondi, Dhaka', 1, '2021-11-10', 1),
(6, 'Banasri, Dhaka', 1, '2021-11-10', 1),
(7, 'Pallabi, Dhaka', 1, '2021-11-10', 1),
(8, 'Gulshan-1, Dhaka', NULL, NULL, NULL),
(9, 'Gulshan-2, Dhaka', NULL, NULL, NULL),
(10, 'Banani, Dhaka', NULL, NULL, NULL),
(11, 'Azimpur, Dhaka', NULL, NULL, NULL),
(12, 'Kallanpur, Dhaka', NULL, NULL, NULL),
(13, 'Wari, Dhaka', NULL, NULL, NULL),
(14, 'Motijhil, Dhaka', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `post_type`
--

CREATE TABLE `post_type` (
  `id` int(11) NOT NULL,
  `name` text COLLATE utf8mb4_bin NOT NULL,
  `priority` int(4) NOT NULL,
  `insert_time` varchar(20) COLLATE utf8mb4_bin NOT NULL,
  `insert_by` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `post_type`
--

INSERT INTO `post_type` (`id`, `name`, `priority`, `insert_time`, `insert_by`) VALUES
(1, 'Bachelor Seat', 1, '2021-11-10', 1),
(2, 'Sublet', 1, '2021-11-10', 1),
(3, 'Flat', 1, '2021-11-10', 1),
(4, 'Family', 1, '2021-11-10', 1);

-- --------------------------------------------------------

--
-- Table structure for table `rent_post`
--

CREATE TABLE `rent_post` (
  `id` int(11) NOT NULL,
  `title` text COLLATE utf8mb4_bin NOT NULL,
  `area` int(4) NOT NULL,
  `type_id` int(4) NOT NULL,
  `rent` double NOT NULL,
  `service_charge` double NOT NULL,
  `security_deposite` varchar(100) COLLATE utf8mb4_bin DEFAULT NULL,
  `flat_release_policy` varchar(100) COLLATE utf8mb4_bin NOT NULL,
  `description` text COLLATE utf8mb4_bin NOT NULL,
  `address` text COLLATE utf8mb4_bin NOT NULL,
  `seat_no` varchar(20) COLLATE utf8mb4_bin DEFAULT NULL,
  `bed_no` varchar(20) COLLATE utf8mb4_bin DEFAULT NULL,
  `bath_no` int(11) DEFAULT NULL,
  `flat_size` varchar(100) COLLATE utf8mb4_bin NOT NULL,
  `floor` int(10) NOT NULL,
  `floor_description` text COLLATE utf8mb4_bin DEFAULT NULL,
  `room_category` text COLLATE utf8mb4_bin DEFAULT NULL,
  `facilities` text COLLATE utf8mb4_bin DEFAULT NULL,
  `additional_facilities` text COLLATE utf8mb4_bin DEFAULT NULL,
  `indoor_facilities` text COLLATE utf8mb4_bin DEFAULT NULL,
  `outdoor_facilities` text COLLATE utf8mb4_bin DEFAULT NULL,
  `thumb_photo` text COLLATE utf8mb4_bin NOT NULL,
  `another_photo` text COLLATE utf8mb4_bin DEFAULT NULL,
  `additional_photo` text COLLATE utf8mb4_bin DEFAULT NULL,
  `bkash_number` varchar(20) COLLATE utf8mb4_bin DEFAULT NULL,
  `nagad_number` varchar(20) COLLATE utf8mb4_bin DEFAULT NULL,
  `status` tinyint(1) NOT NULL COMMENT 'active = 1, inactive = 0',
  `approved` tinyint(1) NOT NULL COMMENT 'approved = 1, unapproved = 0',
  `insert_time` varchar(20) COLLATE utf8mb4_bin NOT NULL,
  `insert_by` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `rent_post`
--

INSERT INTO `rent_post` (`id`, `title`, `area`, `type_id`, `rent`, `service_charge`, `security_deposite`, `flat_release_policy`, `description`, `address`, `seat_no`, `bed_no`, `bath_no`, `flat_size`, `floor`, `floor_description`, `room_category`, `facilities`, `additional_facilities`, `indoor_facilities`, `outdoor_facilities`, `thumb_photo`, `another_photo`, `additional_photo`, `bkash_number`, `nagad_number`, `status`, `approved`, `insert_time`, `insert_by`) VALUES
(1, 'Family Apartment', 1, 1, 5500, 500, '3 month’s rent', '3 months earlier notice required', '3000 sq-ft., 3 Bedroom, Semi-furnished, Luxurious, South facing Apartment for Rent in Rangs Malancha, Melbourne.', 'Rangs Malancha, House-69, Road-6A (Dead End Road), Dhanmondi Residential Area.', '1', '2', 2, '3000', 5, 'A5 (5th Floor) (6 storied Building ) (South Facing Unit)', '3 Large Bed Rooms with 3 Verandas, Spacious Drawing, Dining & Family Living Room, Highly Decorated Kitchen with Store Room and Servant room with attached Toilet.', '1 Modern Lift, All Modern Amenities & Semi Furnished.', 'a. Electricity with full generator load, b. Central Gas Geyser, c. 2 Car Parking with 1 Driver’s Accommodation, d. Community Conference Hall, e. Roof Top Beautified Garden and Grassy Ground, f. Cloth Hanging facility with CC camera', 'Community Hall\r\nSafety Grills\r\nServants Room\r\nServants Toilet\r\nFire exit\r\nCCTV\r\nWASA connection\r\nDESCO connection\r\nTITAS GAS connection\r\nalcony\r\nInter Com', 'South facing\r\nRoof Top Garden\r\nDrivers quarters\r\nGenerator\r\nLift', 'assets/images/apartment/apartment-two.png', NULL, NULL, NULL, NULL, 1, 1, '2021-11-07', 1),
(2, 'Family Apartment', 5, 1, 5500, 500, '3 month’s rent', '3 months earlier notice required', '3000 sq-ft., 3 Bedroom, Semi-furnished, Luxurious, South facing Apartment for Rent in Rangs Malancha, Melbourne.', 'Rangs Malancha, House-68, Road-6A (Dead End Road), Dhanmondi Residential Area.', '2', '1', 1, '3000', 5, 'A5 (5th Floor) (6 storied Building ) (South Facing Unit)', '3 Large Bed Rooms with 3 Verandas, Spacious Drawing, Dining & Family Living Room, Highly Decorated Kitchen with Store Room and Servant room with attached Toilet.', '1 Modern Lift, All Modern Amenities & Semi Furnished.', 'a. Electricity with full generator load, b. Central Gas Geyser, c. 2 Car Parking with 1 Driver’s Accommodation, d. Community Conference Hall, e. Roof Top Beautified Garden and Grassy Ground, f. Cloth Hanging facility with CC camera', 'Community Hall\r\nSafety Grills\r\nServants Room\r\nServants Toilet\r\nFire exit\r\nCCTV\r\nWASA connection\r\nDESCO connection\r\nTITAS GAS connection\r\nalcony\r\nInter Com', 'South facing\r\nRoof Top Garden\r\nDrivers quarters\r\nGenerator\r\nLift', 'assets/images/apartment/apartment-one.png', NULL, NULL, NULL, NULL, 1, 1, '2021-11-07', 1),
(11, 'Beautiful', 3, 4, 15000, 2000, '2', 'Front Side', 'asdasd', 'asdsad', '', '2', 2, '1200', 2, 'asdsad', 'asdsad', 'asdsa', 'asdas', 'asdsa', 'asdas', 'assets/images/apartment/apartmentfive_20211113222930.png', 'assets/images/apartment/apartmentone_20211113222930.png', 'assets/images/apartment/apartmentsingle_20211113222930.jpg', '01756898978', '01789988988', 1, 1, '2021-11-13', 12),
(17, 'bachelor House', 1, 1, 3700, 500, '1', '1 month notice', '3000 sq-ft., 3 Bedroom, Semi-furnished, Luxurious, South facing Apartment for Rent in Rangs Malancha, Melbourne.', 'Rangs Malancha, House-68, Road-6A (Dead End Road), Dhanmondi Residential Area.', '1', '2', 2, '700', 2, 'A5 (5th Floor) (6 storied Building ) (South Facing Unit)', '3 Large Bed Rooms with 3 Verandas, Spacious Drawing, Dining & Family Living Room, Highly Decorated Kitchen with Store Room and Servant room with attached Toilet.', '1 Modern Lift, All Modern Amenities & Semi Furnished.', 'Electricity with full generator load, b. Central Gas Geyser, c. 2 Car Parking with 1 Driver’s Accommodation, d. Community Conference Hall, e. Roof Top Beautified Garden and Grassy Ground, f. Cloth Hanging facility with CC camera', 'Community Hall*Safety Grills*Fire exit*CCTV camera', 'South facing*Roof Top Garden*Generator*Lift', 'assets/images/apartment/download_20211113231920.jpg', 'assets/images/apartment/download_202111132319201.jpg', 'assets/images/apartment/postresize_20211113231920.jpg', '01756898978', '01789988988', 1, 1, '2021-11-13', 12),
(18, 'Bachelor seat', 4, 1, 4000, 0, '1', '1 month notice period', '3000 sq-ft., 3 Bedroom, Semi-furnished, Luxurious, South facing Apartment for Rent in Rangs Malancha, Melbourne.', ' Rangs Malancha, House-68, Road-6A (Dead End Road), Dhanmondi Residential Area.', '1', '2', 2, '1200', 5, 'A5 (5th Floor) (6 storied Building ) (South Facing Unit)', '3 Large Bed Rooms with 3 Verandas, Spacious Drawing, Dining & Family Living Room, Highly Decorated Kitchen with Store Room and Servant room with attached Toilet.', '1 Modern Lift, All Modern Amenities & Semi Furnished.', 'Electricity with full generator load, b. Central Gas Geyser, c. 2 Car Parking with 1 Driver’s Accommodation, d. Community Conference Hall, e. Roof Top Beautified Garden and Grassy Ground, f. Cloth Hanging facility with CC camera', 'Community Hall*Safety Grills*Fire exit\r\n*CCTV camera', 'Generator*Lift', 'assets/images/apartment/download_20211114003040.jpg', 'assets/images/apartment/postresize_20211114003040.jpg', 'assets/images/apartment/download_202111140030401.jpg', '01756898978', '01789988988', 1, 1, '2021-11-14', 14),
(19, 'sadsa', 0, 0, 5000, 0, '', '', '', '', '', '', 0, '', 0, '', '', '', '', '', '', 'assets/images/apartment/postresize_20211114183545.jpg', NULL, NULL, '', '', 1, 1, '2021-11-14', 12);

-- --------------------------------------------------------

--
-- Table structure for table `rent_request`
--

CREATE TABLE `rent_request` (
  `id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `user_name` text COLLATE utf8mb4_bin DEFAULT NULL,
  `phone_number` varchar(20) COLLATE utf8mb4_bin DEFAULT NULL,
  `email` varchar(50) COLLATE utf8mb4_bin DEFAULT NULL,
  `insert_time` varchar(20) COLLATE utf8mb4_bin NOT NULL,
  `insert_by` int(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contact_form`
--

CREATE TABLE `tbl_contact_form` (
  `id` int(11) NOT NULL,
  `first_name` varchar(200) COLLATE utf8mb4_bin NOT NULL,
  `phone_number` varchar(20) COLLATE utf8mb4_bin DEFAULT NULL,
  `last_name` varchar(200) COLLATE utf8mb4_bin DEFAULT NULL,
  `email` varchar(200) COLLATE utf8mb4_bin NOT NULL,
  `subject` text COLLATE utf8mb4_bin NOT NULL,
  `description` text COLLATE utf8mb4_bin NOT NULL,
  `insert_time` varchar(50) COLLATE utf8mb4_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `tbl_contact_form`
--

INSERT INTO `tbl_contact_form` (`id`, `first_name`, `phone_number`, `last_name`, `email`, `subject`, `description`, `insert_time`) VALUES
(1, 'shah', '01756511351', '', 'shah@gmail.com', 'sas', 'asdas', '2021-09-07 15:08'),
(2, 'hello', '01756', '', 'hello@gmail.com', 'fqa', 'asd', '2021-09-07 15:32'),
(3, 'asdas', '01999974222', '', 'asdas', 'asd', 'asd', '2021-09-07 21:34'),
(4, 'Dewan', NULL, NULL, 'shahriar@gmail.com', 'fqa', 'your massaasdasdge', '2021-11-14 22:55'),
(5, 'Zameer', NULL, NULL, 'shahriar@gmail.com', 'fqa', 'your massagedasd', '2021-11-14 22:56');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `firstname` text NOT NULL,
  `lastname` text NOT NULL,
  `username` varchar(10) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` text NOT NULL,
  `address` int(11) NOT NULL COMMENT 'thana id',
  `district` varchar(30) NOT NULL,
  `division` varchar(30) NOT NULL,
  `roadHouse` text NOT NULL,
  `postcode` varchar(100) NOT NULL,
  `blood_group` varchar(5) NOT NULL,
  `phone` text NOT NULL,
  `userType` text NOT NULL,
  `photo` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `birthdate` varchar(10) NOT NULL DEFAULT '0000-00-00',
  `status` tinyint(1) NOT NULL DEFAULT 1 COMMENT '1 for active user, 0 for not active user',
  `emailVerified` tinyint(1) NOT NULL DEFAULT 0 COMMENT '1 for verify, 0 for not verify',
  `mobileVerified` tinyint(1) NOT NULL DEFAULT 0 COMMENT '1 for verify, 0 for not verify'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `firstname`, `lastname`, `username`, `email`, `password`, `address`, `district`, `division`, `roadHouse`, `postcode`, `blood_group`, `phone`, `userType`, `photo`, `birthdate`, `status`, `emailVerified`, `mobileVerified`) VALUES
(1, 'rayhan', 'roky', 'roky', 'rzroky@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 1, '', '', '12/6 solimullah road', '', '', '01709372481', 'admin', 'assets/images/profile-pic.png', '0000-00-00', 1, 0, 0),
(12, 'Shahriar', '', 'shahriar', 'shahriar@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0, '', '', '', '', '', '', 'user', 'assets/images/profile-pic.png', '0000-00-00', 1, 0, 0),
(13, 'Tanvir', '', 'tanvir', 'tanvir@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0, '', '', '', '', '', '', 'user', 'assets/images/profile-pic.png', '0000-00-00', 1, 0, 0),
(14, 'House Owner', '', 'owner', 'ower@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0, '', '', '', '', '', '', 'user', 'assets/images/profile-pic.png', '0000-00-00', 1, 0, 0),
(15, 'Admin', '', 'admin', 'admin@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 0, '', '', '', '', '', '', 'admin', 'assets/images/download_20211114223645.png', '0000-00-00', 1, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `insert_time` varchar(20) COLLATE utf8mb4_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `wishlist`
--

INSERT INTO `wishlist` (`id`, `post_id`, `user_id`, `insert_time`) VALUES
(2, 17, 12, '2021-11-14 00:08'),
(3, 11, 12, '2021-11-14 00:08'),
(7, 18, 14, '2021-11-14 00:33'),
(8, 11, 14, '2021-11-14 01:01'),
(15, 10, 14, '2021-11-14 01:07'),
(17, 18, 12, '2021-11-14 01:08'),
(18, 11, 15, '2021-11-14 21:45');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `area`
--
ALTER TABLE `area`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post_type`
--
ALTER TABLE `post_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rent_post`
--
ALTER TABLE `rent_post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rent_request`
--
ALTER TABLE `rent_request`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_contact_form`
--
ALTER TABLE `tbl_contact_form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`,`email`);

--
-- Indexes for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `area`
--
ALTER TABLE `area`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `post_type`
--
ALTER TABLE `post_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `rent_post`
--
ALTER TABLE `rent_post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `rent_request`
--
ALTER TABLE `rent_request`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_contact_form`
--
ALTER TABLE `tbl_contact_form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `wishlist`
--
ALTER TABLE `wishlist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
