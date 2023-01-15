-- phpMyAdmin SQL Dump
-- version 5.3.0-dev+20221031.25fe766a26
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 15, 2023 at 04:31 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nursery_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `register_child_info`
--

CREATE TABLE `register_child_info` (
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `nationality` varchar(100) NOT NULL,
  `place_birth` varchar(100) NOT NULL,
  `date_birth` date NOT NULL,
  `age` int(11) NOT NULL,
  `gender` tinyint(4) NOT NULL,
  `mix_others` tinyint(4) DEFAULT NULL,
  `other_name` tinyint(4) DEFAULT NULL,
  `disease` tinyint(4) DEFAULT NULL,
  `disease_name` varchar(100) DEFAULT NULL,
  `speech_difficultie` tinyint(4) DEFAULT NULL,
  `child_fears` varchar(255) DEFAULT NULL,
  `name_parent` varchar(100) DEFAULT NULL,
  `kinship_child` varchar(100) DEFAULT NULL,
  `signature` varchar(100) DEFAULT NULL,
  `date_register` date DEFAULT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user_form`
--

CREATE TABLE `user_form` (
  `f_name` varchar(50) NOT NULL,
  `l_name` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `cpassword` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `id_user` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_form`
--

INSERT INTO `user_form` (`f_name`, `l_name`, `password`, `cpassword`, `email`, `id_user`) VALUES
('Lena', 'Al saleh', 'e10adc3949ba59abbe56e057f20f883e', 'e10adc3949ba59abbe56e057f20f883e', 'lena123@gmail.com', 1),
('مرام', 'الخالد', 'e10adc3949ba59abbe56e057f20f883e', 'e10adc3949ba59abbe56e057f20f883e', 'maram123@gmail.com', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `register_child_info`
--
ALTER TABLE `register_child_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_form`
--
ALTER TABLE `user_form`
  ADD PRIMARY KEY (`id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
