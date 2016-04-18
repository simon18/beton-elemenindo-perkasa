-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 18, 2016 at 01:19 PM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bep`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`id_user` int(11) unsigned NOT NULL,
  `role` enum('manager_staff','staff','supplier','sales','admin') NOT NULL,
  `email` varchar(100) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `role`, `email`, `username`, `password`, `first_name`, `last_name`, `created_at`) VALUES
(2, 'manager_staff', 'ahmadsopian311@gmail.com', 'manager', '1d0258c2440a8d19e716292b231e3190', 'ahmad', 'sopian', '2016-04-04 03:34:34'),
(4, 'supplier', 'ahmadsopian311@gmail.com', 'supplier', '99b0e8da24e29e4ccb5d7d76e677c2ac', 'ahmad', 'sopian', '2016-04-04 04:46:57'),
(6, 'sales', 'sales@gmail.com', 'sales', '9ed083b1436e5f40ef984b28255eef18', 'ahmad', 'sopian', '2016-04-15 03:49:01'),
(7, 'staff', 'staff@gmail.com', 'staff', '1253208465b1efa876f982d8a9e73eef', 'aso', 'tahu', '2016-04-15 03:49:59'),
(8, 'admin', 'ahmadsopian311@gmail.com', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'ahmad', 'sopian', '2016-04-18 02:31:22'),
(10, 'admin', 'ahmadsopian311@gmail.com', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'ahmad', 'sopian', '2016-04-18 02:31:22');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `id_user` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
