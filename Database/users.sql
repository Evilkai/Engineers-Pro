-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 22, 2020 at 06:04 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id10226980_multi_login`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(5) NOT NULL,
  `username` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `user_type` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `user_type`, `password`) VALUES
(1, 'Jatin Kumar', 'jk218899@gmail.com', 'admin', 'jk218899'),
(2, 'Devesh Pratap Singh', 'deveshps107@gmail.com', 'user', 'pass@123'),
(3, 'Akul Sharma', 'akulsharma.sharma@gmail.com', 'user', 'Akul@firstweb'),
(4, 'Sumit Kumar Singh', 'Sksingh28344@gmail.com', 'user', 'pass@123'),
(5, 'Harsh Parashar', 'parasharsh2001@gmail.com', 'user', 'pass@123'),
(6, 'Harsh Srivastava', 'hsrivastava662@gmail.com', 'user', 'pass@123'),
(7, 'Ankit Chauhan', 'ankitschauhan2000@gmail.com', 'user', 'pass@123'),
(8, 'Ayush Jain', 'ayush17j@gmail.com', 'user', 'pass@123'),
(9, 'Mintu Biswas', 'mintubiswas2906@gmail.com', 'user', 'pass@123'),
(10, 'Naveen Yadav', 'naveenyadav8785@gmail.com', 'user', 'pass@1234'),
(11, 'Bittu Kumar', 'bittu218899@gmail.com', 'user', 'bk218899'),
(12, 'User', 'user@gmail.com', 'user', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
