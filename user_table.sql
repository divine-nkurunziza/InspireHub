-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 28, 2021 at 03:22 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `inspirehub`
--

-- --------------------------------------------------------

--
-- Table structure for table `user_table`
--

CREATE TABLE `user_table` (
  `user_id` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_table`
--

INSERT INTO `user_table` (`user_id`, `Name`, `username`, `email`, `password`) VALUES
(1, 'Divine', 'divine', 'anonymous@gmail.com', ''),
(2, 'Divine', 'divine', 'anonymous@gmail.com', 'didi'),
(3, 'Divine', 'divine', 'anonymous@gmail.com', 'didi'),
(4, 'Divine', 'divine', 'anonymous@gmail.com', 'didi'),
(5, 'Pamela ', 'pam', 'pam@gmail.com', '1234'),
(6, 'Delight', 'delight', 'delight@gmail.com', '12345'),
(7, 'Me', 'me', 'me@gmail.com', 'meme'),
(8, '123456676i', 'pam', 'divine.nku06@gmail.com', '123'),
(9, 'princia', 'divine', 'anonymous@gmail.com', '123'),
(10, 'dt56880', 'divine.nkurunziza@ashesi.edu.gh', 'anonymous@gmail.com', '123'),
(11, '123455', 'practice', 'anonymous@gmail.com', '1234'),
(12, '12342', 'tryagain', 'someone@gmail.com', '1234'),
(13, 'Queen Titi', 'titi', 'titi@gmail.com', '1234'),
(14, 'don', 'don', 'don@gmail.com', '56'),
(15, 'don3456', 'anothertry', 'anonymous@gmail.com', '9090'),
(16, 'Me', 'myself', 'self@gmail.com', '1234'),
(19, 'bety23', 'practice', 'someone@gmail.com', '123'),
(20, '123456676i', 'anothertry', 'anonymous@gmail.com', '1234'),
(21, 'hello', 'hello', 'someone@gmail.com', '123'),
(23, 'Aurelia', 'tryagain', 'pam@gmail.com', '123'),
(24, 'auti', 'anothertry', 'someone@gmail.com', '12345'),
(25, 'Kajekurya', 'kaje', 'someone@gmail.com', 'Divine1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user_table`
--
ALTER TABLE `user_table`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user_table`
--
ALTER TABLE `user_table`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
