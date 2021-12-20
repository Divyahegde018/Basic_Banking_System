-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 20, 2021 at 05:50 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bankdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `sno` int(3) NOT NULL,
  `sender_acc` int(11) NOT NULL,
  `sender` text NOT NULL,
  `receiver_acc` int(11) NOT NULL,
  `receiver` text NOT NULL,
  `balance` int(10) NOT NULL,
  `datetime` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`sno`, `sender_acc`, `sender`, `receiver_acc`, `receiver`, `balance`, `datetime`) VALUES
(1, 1012, 'Zoe', 1014, 'Violet', 1000, '2021-12-20 18:49:43'),
(2, 1010, 'Sophia', 1012, 'Zoe', 6000, '2021-12-20 18:50:18'),
(3, 1016, 'Valencia', 1017, 'Derin', 2000, '2021-12-20 19:01:51'),
(4, 1015, 'Scarlet', 1011, 'Evelyn', 2000, '2021-12-20 19:10:00'),
(5, 1012, 'Zoe', 1016, 'Valencia', 1000, '2021-12-20 19:11:36'),
(6, 1013, 'Catherine', 1015, 'Scarlet', 2000, '2021-12-20 20:59:41'),
(7, 1019, 'Elle', 1016, 'Valencia', 1000, '2021-12-20 21:35:30'),
(8, 1020, 'Alaia', 1012, 'Zoe', 1000, '2021-12-20 21:43:08'),
(9, 1021, 'Jeff', 1010, 'Sophia', 2000, '2021-12-20 21:56:18');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(3) NOT NULL,
  `acc_no` int(9) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(30) NOT NULL,
  `balance` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `acc_no`, `name`, `email`, `balance`) VALUES
(1, 1010, 'Sophia', 'sophia@gmail.com', 36000),
(2, 1011, 'Evelyn', 'evelyn@gmail.com', 32000),
(3, 1012, 'Zoe', 'zoe@gmail.com', 15000),
(4, 1013, 'Catherine', 'catherine@gmail.com', 48000),
(5, 1014, 'Violet', 'violet@gmail.com', 31000),
(6, 1015, 'Scarlet', 'scarlet@gmail.com', 45000),
(7, 1016, 'Valencia', 'valencia@gmail.com', 15000),
(8, 1017, 'Derin', 'derin@gmail.com', 34000),
(9, 1018, 'Lily', 'lily@gmail.com', 19000),
(10, 1019, 'Elle', 'elle@gmail.com', 9000),
(11, 1020, 'Alaia', 'alaia@gmail.com', 19000),
(12, 1021, 'Jeff', 'jeff@gmail.com', 28000),
(13, 1022, 'Daisy', 'daisy@gmail.com', 40000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `sno` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
