-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 03, 2020 at 02:19 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crud_268`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `uname` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `cell` varchar(20) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `photo` varchar(200) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `fname`, `uname`, `email`, `cell`, `pass`, `photo`, `status`) VALUES
(1, 'asa', 'asa', 'moliayesha7@gmail.com', '01779393107', '$2y$10$bokvPtMJs8RVzEGR4eQjTesjY9MaGiy2OWPp.juikJPoZ6INXeasW', '1235f5f4f30a7e5447acee38ddc6ce22.jpg', 'Active'),
(2, 'we', 'we', 'moliayesha7@gmail.com', '01779393107', '$2y$10$/2YwxH4dARREaGLyrpwNp.TryFF/KjCuGIR7.aSCFWxSlU0Nw9b8e', 'c26024e4af3cfe6ae427f1e7044f3a05.jpeg', 'Active'),
(3, 'qw', 'qw', 'asdf@gmail.com', '01779393107', '$2y$10$8Jr48LPkoc.EDdR/4vZXtez1SWLp/s7snE0l5CDqSm05PaemAS6k.', '2eb5ab2e2c6b76f7b9bc014a77e48004.properties', 'Active'),
(4, 'ww', 'ww', 'moliayesha7@gmail.com', '01779393107', '$2y$10$l.WDc2XswuyzCdmm55/4CeMgMGGQrJklVaHyAU/uaHUjmTk6IpiA.', 'ed2bb6f4e9d2dca11ee47b59dfa3d629.jpg', 'Active'),
(5, 'www', 'www', 'www@gmail.com', '222', '$2y$10$53HSmIyMlEZz.w3HXrEJBehLGNAnVRi11kF5mXEEVAlekkBKyXCNO', '13efc76bab4270c98971b1f58cb17e9b.jpg', 'Active');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
