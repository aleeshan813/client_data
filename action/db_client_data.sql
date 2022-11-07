-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 07, 2022 at 05:05 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_client_data`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_client_details`
--

CREATE TABLE `tb_client_details` (
  `id` int(255) NOT NULL,
  `client_name` varchar(200) NOT NULL,
  `client_project` text NOT NULL,
  `about_project` text NOT NULL,
  `project_theam` text NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `domain_name` text NOT NULL,
  `domain_expiry` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_client_details`
--

INSERT INTO `tb_client_details` (`id`, `client_name`, `client_project`, `about_project`, `project_theam`, `start_date`, `end_date`, `domain_name`, `domain_expiry`) VALUES
(6, 'aaaaaa', 'aaaa', 'wwwwwwwwwww', 'wwwwwwwwwww', '2022-11-03', '2022-11-03', 'aaaaaaa', '2022-11-03');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_client_details`
--
ALTER TABLE `tb_client_details`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_client_details`
--
ALTER TABLE `tb_client_details`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
