-- phpMyAdmin SQL Dump
-- version 5.1.2
-- https://www.phpmyadmin.net/
--
-- Host: db
-- Generation Time: Mar 05, 2022 at 02:43 AM
-- Server version: 8.0.27
-- PHP Version: 8.0.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `MohammedAlsaadi`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `id` int NOT NULL,
  `username` varchar(50) NOT NULL,
  `date1` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `service` varchar(50) NOT NULL,
  `tim` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`id`, `username`, `date1`, `gender`, `service`, `tim`) VALUES
(1, 'Mohammed', '03/31/2022', 'Male', 'Service#2', '16:00 to 17:00'),
(2, 'rashi', '03/24/2022', 'Female', 'Service#3', '8:00 to 9:00'),
(3, 'collinz', '03/15/2022', 'Male', 'Service#2', '10:00 to 11:00'),
(4, 'hani', '03/24/2022', 'Male', 'Service#3', '12:00 to 13:00'),
(5, 'Hanna', '03/23/2022', 'Female', 'Service#4', '12:00 to 13:00'),
(6, 'kaisa', '03/14/2022', 'Female', 'Service#2', '12:00 to 13:00'),
(7, 'joni', '03/10/2022', 'Male', 'Service#4', '15:00 to 16:00'),
(8, 'Jenna', '03/24/2022', 'Female', 'Service#2', '12:00 to 13:00');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id` int NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `emailid` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `username` varchar(50) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `text` varchar(1000) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`username`, `subject`, `text`) VALUES
('Mohammed', 'Readme', 'survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised insurvived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in'),
('rashi', 'Readme', 'survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised insurvived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in'),
('collinz', 'Readme', 'survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised insurvived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int NOT NULL,
  `username` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `password` varchar(50) NOT NULL,
  `usertype` varchar(50) NOT NULL DEFAULT 'user',
  `logintime` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`, `usertype`, `logintime`) VALUES
(1, 'admin', '1234', 'admin', '2022-03-05 02:31:31'),
(2, 'Mohammed', '1234', 'user', '2022-03-05 02:31:44');

-- --------------------------------------------------------

--
-- Table structure for table `textbox`
--

CREATE TABLE `textbox` (
  `username` varchar(50) NOT NULL,
  `text` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `textbox`
--

INSERT INTO `textbox` (`username`, `text`) VALUES
('collinz', 'survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised insurvived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in'),
('hani', 'survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised insurvived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in'),
('Mohammed', 'survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised insurvived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in'),
('rashi', 'survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised insurvived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised insurvived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `textbox`
--
ALTER TABLE `textbox`
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `employee`
--
ALTER TABLE `employee`
  ADD CONSTRAINT `employee_ibfk_1` FOREIGN KEY (`id`) REFERENCES `login` (`id`);

--
-- Constraints for table `textbox`
--
ALTER TABLE `textbox`
  ADD CONSTRAINT `textbox_ibfk_1` FOREIGN KEY (`username`) REFERENCES `appointment` (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
