-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 18, 2023 at 04:51 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `studentinformation`
--

-- --------------------------------------------------------

--
-- Table structure for table `insert_admin`
--

CREATE TABLE `insert_admin` (
  `id` int(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `insert_admin`
--

INSERT INTO `insert_admin` (`id`, `email`, `pass`) VALUES
(1, 'cheries@gmail.com', 'e073deeaa1d575c12f2417ef8ad5b6ad'),
(2, 'grace@gmail.com', 'da385aaff0afd0196deae5fbe86471c9'),
(3, 'ricamaligaya@gmail.com', '25d55ad283aa400af464c76d713c07ad'),
(5, 'hello@gmail.com', '9a1996efc97181f0aee18321aa3b3b12'),
(12, 'ayokona@gmail.com', 'c651d127adc212b86c2832e83449b75d'),
(13, 'huhuhu@gmail.com', 'a334ed15e6c4bc3cff677821df4a8960'),
(14, 'hellohello@gmail.com', 'f30aa7a662c728b7407c54ae6bfd27d1'),
(15, 'danya@gmail.com', '2d660679044ae6e6de90b6c3ebcef9e7');

-- --------------------------------------------------------

--
-- Table structure for table `it3a`
--

CREATE TABLE `it3a` (
  `id` int(255) NOT NULL,
  `studentNumber` varchar(255) NOT NULL,
  `studentName` varchar(255) NOT NULL,
  `course` varchar(255) NOT NULL,
  `year_section` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `student` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `it3a`
--

INSERT INTO `it3a` (`id`, `studentNumber`, `studentName`, `course`, `year_section`, `contact`, `address`, `email`, `student`) VALUES
(2, '202010784', 'Billy Jeans', 'BSIT', '3A', '09152135878', 'Sta. Rosa, Laguna', 'billyjeans@gmail.com', 'Regular'),
(3, '2020106579', 'Mary Grace Gujelde', 'BSIT', '3A', '09152134579', 'Dasmarinas Cavite', 'marygrace@gmail.com', 'Regular'),
(12, '12345678954', 'Cheries Mae Linsangan', 'BSIT', '3B', '091623189273', 'San Agustin, Dasmarinas', 'deniemedina@gmail.com', 'Regular'),
(16, '2020167489', 'Arah Maligaya', 'BSIT', '3A', '091521378923', 'Carmen, Silang, Cavite', 'arah@gmail.com', 'Transferee');

-- --------------------------------------------------------

--
-- Table structure for table `it3b`
--

CREATE TABLE `it3b` (
  `id` int(255) NOT NULL,
  `studentNumber` varchar(255) NOT NULL,
  `studentName` varchar(255) NOT NULL,
  `course` varchar(255) NOT NULL,
  `year_section` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `student` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `it3b`
--

INSERT INTO `it3b` (`id`, `studentNumber`, `studentName`, `course`, `year_section`, `contact`, `address`, `email`, `student`) VALUES
(1, '202001623', 'Denie Rose Medina', 'BSIT', '3B', '09152130795', 'biga 1 silang, cavite', 'deniemedina@gmail.com', 'Regular'),
(2, '2020105487', 'Rico Yan', 'BSIT', '3B', '09846746745', 'Iba, Silang, Cavite', 'ricoyan@gmail.com', 'Regular'),
(3, '20201021245', 'alvin hamor', 'bnsit', '3b', '09213545121', 'area 1 dasma ', 'alvin@gmail.com', 'Regular'),
(4, '2020103563', 'Maybelene Landicho', 'BSIT', '3B', '09738435778', 'Iba, Silang, Cavite', 'mlandicho@gmail.com', 'Regular');

-- --------------------------------------------------------

--
-- Table structure for table `it3c`
--

CREATE TABLE `it3c` (
  `id` int(255) NOT NULL,
  `studentNumber` varchar(255) NOT NULL,
  `studentName` varchar(255) NOT NULL,
  `course` varchar(255) NOT NULL,
  `year_section` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `student` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `it3c`
--

INSERT INTO `it3c` (`id`, `studentNumber`, `studentName`, `course`, `year_section`, `contact`, `address`, `email`, `student`) VALUES
(1, '2020106875', 'Denie Rose Medina', 'BSIT', '3C', '09214578458', 'San Agustin, Dasmarinas', 'deniemedina@gmail.com', 'Regular'),
(2, '202001623', 'Rica Mae Maligaya', 'BSIT', '3C', '09152130795', 'Carmen, Silang, Cavite', 'denie@gmail.com', 'Regular'),
(3, '2020948368', 'Mary Grace Gujelde', 'BSIT', '3C', '097437923847', 'Silang, Cavite', 'mgrace@gmail.com', 'Transferee'),
(8, '202011445', 'Alvin Hamor', 'BSIT', '3C', '09178542345', 'Dasmarinas Cavite', 'ahamor@gmail.com', 'Regular');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_studentinformation`
--

CREATE TABLE `tbl_studentinformation` (
  `id` int(255) NOT NULL,
  `studentNumber` varchar(255) NOT NULL,
  `studentName` varchar(255) NOT NULL,
  `course` varchar(255) NOT NULL,
  `year_section` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_studentinformation`
--

INSERT INTO `tbl_studentinformation` (`id`, `studentNumber`, `studentName`, `course`, `year_section`, `contact`, `address`) VALUES
(2, '202010673', 'Cheries Mae Linsangan', 'BShm', '4c', '09152130795', 'Brgy. Carmen, Silang, Cavite'),
(3, '202010245', 'Rica Mae Maligaya', 'BSIT', '3C', '09152130795', 'dasma'),
(4, '202010674', 'Denie Rose Medina', 'BSIT', '3C', '09152130795', 'silang cavite'),
(5, '2020210677', 'cheries mae linsangan', 'BSED', '2C', '09152135497', 'biga 1 silang, cavite'),
(6, '2020210677', 'cheries mae linsangan', 'BSED', '2C', '09152135497', 'biga 1 silang, cavite'),
(7, '2020105469', 'mark louise garcia', 'bsit', '3c', '09451318878', 'dasmarinas cavite');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `insert_admin`
--
ALTER TABLE `insert_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `it3a`
--
ALTER TABLE `it3a`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `it3b`
--
ALTER TABLE `it3b`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `it3c`
--
ALTER TABLE `it3c`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_studentinformation`
--
ALTER TABLE `tbl_studentinformation`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `insert_admin`
--
ALTER TABLE `insert_admin`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `it3a`
--
ALTER TABLE `it3a`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `it3b`
--
ALTER TABLE `it3b`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `it3c`
--
ALTER TABLE `it3c`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_studentinformation`
--
ALTER TABLE `tbl_studentinformation`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
