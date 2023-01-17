-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 30, 2022 at 10:22 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
-- Table structure for table `managers`
--

CREATE TABLE `managers` (
  `id` int(11) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `developer1` varchar(100) NOT NULL,
  `developer2` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `managers`
--

INSERT INTO `managers` (`id`, `fullname`, `email`, `username`, `password`, `developer1`, `developer2`) VALUES
(1, 'Poshan Kumar Sahu', 'poshan@gmail.com', 'poshan', 'poshan', 'Rahul Sahu', 'Manoj Sahu'),
(2, 'Ravi Jain', 'ravi@gmail.com', 'ravi', 'ravi', 'Krishna Jain', 'Aniket Jain'),
(3, 'Vikash Khuttel', 'vikash@gmail.com', 'vikash', 'vikash', 'Mahesh ', 'Mukesh');

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `prototype` varchar(100) NOT NULL,
  `start_date` date NOT NULL,
  `deadline` date NOT NULL,
  `project_manager` varchar(100) NOT NULL,
  `developer` varchar(100) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `name`, `description`, `prototype`, `start_date`, `deadline`, `project_manager`, `developer`, `status`) VALUES
(3, 'Desktop App ', 'To create a desktop app for client', 'Poshan Sahu Resume.pdf', '2022-12-30', '2023-01-07', 'Ravi', 'Rahul Sahu', 0),
(4, 'My App', 'Create My App Using PhP', 'Poshan Sahu Resume.pdf', '2022-12-30', '2023-01-06', 'Vikash', 'Krishna Jain', 0),
(5, 'TikTok App', 'To create a short video plaatform', 'Poshan Sahu Resume.pdf', '2022-12-30', '2023-01-07', 'Ravi', 'Manoj Sahu', 0),
(6, 'Instragram Clone', 'clone app of instagram', 'java.pdf', '2022-12-30', '2023-01-19', 'Poshan', 'Krishna Jain', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `managers`
--
ALTER TABLE `managers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `managers`
--
ALTER TABLE `managers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
