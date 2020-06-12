-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 12, 2020 at 02:05 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mds`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `book_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `pieces` int(11) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`book_id`, `name`, `price`, `pieces`, `description`) VALUES
(3, 'Mandrie si prejudecata de Jane Austen', '30 Ron', 12, 'Mândrie și prejudecată este unul dintre cele mai celebre romane scrise de Jane Austen. Publicat la 28 ianuarie 1813, este al doilea roman al autoarei. Într-un eseu publicat în 1954, Maugham l-a considerat unul dintre cele mai bune zece romane din lume.');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `email`, `username`, `password`) VALUES
(2, 'razvan.chiose@gmail.com', 'chioser1', '$2y$10$gXiE62iCQm/Wb5/OKjWhyOIAgSW8umUPKT9OrAP4tg9CfniWkiQ8m'),
(3, 'jdksnkjas@yahoo.com', 'marianbomba69', '$2y$10$eX7/7m7TqO8Pi0TTm91IaOq.ZksQArw7D0KSF/9Bs./DWqKM5XNX.'),
(4, 'firstUser@gmail.com', 'firstUser', '$2y$10$8ESquNeWOus1VKWxLRoPR.0RTheH8TUaaUz6UK3IiC8W97IEBrRTm'),
(5, 'kjdfb@yahoo.com', 'cineva', '$2y$10$XIASEDQ348J4yIj7VHcXbuhmvKH0lGCE1xdlRbJ9hlp6Hs/E5UDI2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`book_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `book_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
