-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 12, 2022 at 10:10 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tugas1`
--

-- --------------------------------------------------------

--
-- Table structure for table `tr_profile`
--

CREATE TABLE `tr_profile` (
  `profile_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` varchar(200) NOT NULL,
  `phone_num` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tr_profile`
--

INSERT INTO `tr_profile` (`profile_id`, `name`, `email`, `address`, `phone_num`) VALUES
(1, 'Victor Hugo ', 'victor.antonius@binus.ac.id', 'jalan palem llll', '081288721068'),
(2, 'kenz', 'kenz@binus.ac.id', 'jalan palem ll', '081288721054'),
(3, 'test', 'test123@gmail.com', 'jalan palem lll', '081288721077');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tr_profile`
--
ALTER TABLE `tr_profile`
  ADD PRIMARY KEY (`profile_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
