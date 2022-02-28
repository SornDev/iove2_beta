-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 14, 2018 at 05:54 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 5.6.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `iov2`
--

-- --------------------------------------------------------

--
-- Table structure for table `brunch_office`
--

CREATE TABLE `brunch_office` (
  `id` int(11) NOT NULL,
  `name` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `brunch_office`
--

INSERT INTO `brunch_office` (`id`, `name`) VALUES
(1, 'ສາຂາ ອຸດົມໄຊ'),
(2, 'ສາຂາ ຜົ້ງສາລີ'),
(3, 'ສາຂາ ຫຼວງນ້ຳທາ'),
(4, 'ສາຂາ ຫຼວງພະບາງ');

-- --------------------------------------------------------

--
-- Table structure for table `data_base_year`
--

CREATE TABLE `data_base_year` (
  `id` int(11) NOT NULL,
  `name` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `data_used` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `data_readonly` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `data_base_year`
--

INSERT INTO `data_base_year` (`id`, `name`, `data_used`, `data_readonly`) VALUES
(1, '2018', '1', '0');

-- --------------------------------------------------------

--
-- Table structure for table `document`
--

CREATE TABLE `document` (
  `doc_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `num_in` int(11) NOT NULL,
  `doc_in_out` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `name` varchar(245) COLLATE utf8_unicode_ci NOT NULL,
  `detail` varchar(145) COLLATE utf8_unicode_ci DEFAULT NULL,
  `file_scan` varchar(245) COLLATE utf8_unicode_ci DEFAULT NULL,
  `doc_type` int(11) DEFAULT NULL,
  `doc_from` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `doc_to` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` varchar(45) COLLATE utf8_unicode_ci NOT NULL COMMENT 'ສະຖານະ ໃຫ້ສະແດງຜົນ ຫລືບໍ່ສະແດງ',
  `doc_date` datetime DEFAULT NULL,
  `docex` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `grono_doc`
--

CREATE TABLE `grono_doc` (
  `id` int(11) NOT NULL,
  `grono_id` int(11) NOT NULL,
  `grono_type` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `grono_name` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `heard_office`
--

CREATE TABLE `heard_office` (
  `id` int(11) NOT NULL,
  `name` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `log_data`
--

CREATE TABLE `log_data` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `editor` varchar(245) COLLATE utf8_unicode_ci DEFAULT NULL,
  `date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `other_office`
--

CREATE TABLE `other_office` (
  `id` int(11) NOT NULL,
  `name` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `setting_data`
--

CREATE TABLE `setting_data` (
  `id` int(11) NOT NULL,
  `name` varchar(145) COLLATE utf8_unicode_ci DEFAULT NULL,
  `type` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `logopic` varchar(145) COLLATE utf8_unicode_ci DEFAULT NULL,
  `file_type_upload` varchar(245) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'ປະເພດໄຟລ໌ ທີ່ອະນຸຍາດໃຫ້ອັບໂຫລດ',
  `maxfile_size` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `year_used` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `all_years` varchar(145) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` varchar(245) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tel` varchar(145) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `setting_data`
--

INSERT INTO `setting_data` (`id`, `name`, `type`, `logopic`, `file_type_upload`, `maxfile_size`, `year_used`, `all_years`, `address`, `tel`) VALUES
(1, 'ບໍລິສັດ......', 'head', 'sd_logo.jpg', '\'image/png\',\'image/jpeg\',\'application/pdf\',', '2048', NULL, NULL, 'ອຸດົມໄຊ', '081........');

-- --------------------------------------------------------

--
-- Table structure for table `unit_office`
--

CREATE TABLE `unit_office` (
  `id` int(11) NOT NULL,
  `name` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `user_type` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `profile` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_name` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sex` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pass` varchar(245) COLLATE utf8_unicode_ci DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  `session_log` varchar(245) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `user_type`, `profile`, `user_name`, `sex`, `pass`, `date`, `session_log`) VALUES
(1, 'admin', NULL, 'admin', 'ຊາຍ', '15ca1aec687632f6d66da327c292293c', NULL, 'C3QBZZQX5ZLYD5I');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brunch_office`
--
ALTER TABLE `brunch_office`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_base_year`
--
ALTER TABLE `data_base_year`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `document`
--
ALTER TABLE `document`
  ADD PRIMARY KEY (`doc_id`);

--
-- Indexes for table `grono_doc`
--
ALTER TABLE `grono_doc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `heard_office`
--
ALTER TABLE `heard_office`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `log_data`
--
ALTER TABLE `log_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `other_office`
--
ALTER TABLE `other_office`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `setting_data`
--
ALTER TABLE `setting_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `unit_office`
--
ALTER TABLE `unit_office`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brunch_office`
--
ALTER TABLE `brunch_office`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `data_base_year`
--
ALTER TABLE `data_base_year`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `document`
--
ALTER TABLE `document`
  MODIFY `doc_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `grono_doc`
--
ALTER TABLE `grono_doc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `heard_office`
--
ALTER TABLE `heard_office`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `log_data`
--
ALTER TABLE `log_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `other_office`
--
ALTER TABLE `other_office`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `setting_data`
--
ALTER TABLE `setting_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `unit_office`
--
ALTER TABLE `unit_office`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
