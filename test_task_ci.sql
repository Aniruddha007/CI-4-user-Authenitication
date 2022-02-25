-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 02, 2021 at 01:49 PM
-- Server version: 8.0.26-0ubuntu0.20.04.2
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test_task_ci`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `birthday` date NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(12) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_name` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `birthday`, `address`, `phone_number`, `user_name`, `password`, `created_at`, `updated_at`) VALUES
(1, 'Aniruddha', 'Mishra', '2021-07-30', 'IT Park\r\nMP', '0123456789', 'aniruddha007', '$2y$10$It2HiECxke14m4b4Qz10XOpm8S/tX/sNqKG21N3hoP1YKXR7u//2C', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'jon', 'Deo', '1991-07-07', 'test address', '7777777777', 'aniruddha00358', '$2y$10$JYf49AHNMjW7zlDYEmWqP.rBx4A5wqsA//mZ2OeJ5IZBFLrh8UVlC', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'Aniruddha', 'Mishra', '1991-07-07', 'IT Park\r\nMP', '1234567890', 'aniruddha009', '$2y$10$2YCAtd6zozrZ7GHqRMAus.8RLFKsYcyBYRrAJy6pN9ks1QerAB2F6', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 'Aniruddha', 'Mishra', '1991-07-07', 'IT Park\r\nMP', '1234567890', 'aniruddha1110', '$2y$10$oCcjB8fDMbl6fjbJzc6Y7em7Np0WarekKJjbiz9vJNSWF7D.AYC0K', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 'Aniruddha', 'Mishra', '1991-09-09', 'IT Park\r\nMP', '1234567890', 'aniruddha0777', '$2y$10$i/7qPJIomUPeaTpvXHVmW.PO0E6USrcn5f2jlMZJaSILxYq9u4yo6', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 'Aniruddha', 'Mishra', '1991-12-19', 'IT Park\r\nMP', '1234567890', 'anir7777', '$2y$10$0nGbXMH9bpj1cTU0sB2mVeNNT2me6iW1hFy7spq9PwC2FfESex8Ta', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, 'Aniruddha', 'Mishra', '1991-09-19', 'IT Park\r\nMP', '1234567890', '070707', '$2y$10$3rb3.Kwedf/DXpem0H59DeP349Yzh4zvrAhPQiTMhO66U4ptcqjYq', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(8, 'Aniruddha', 'Mishra', '1991-09-09', 'IT Park\r\nMP', '1234567890', 'aaasss', '$2y$10$kg8ytqvBKO2Xbbf1RvMvyuseP8r.v1CsmmnYhTH3wxojSFbEvk1c6', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(9, 'asmdbn', 'asjd', '1991-09-01', 'asjdsad', '1234567890', 'akjd', '$2y$10$qs6HNdwLp5emOlRJhxDgluHsT5ubNvsAWpOd2kHZmB7jadW595h8m', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(10, 'akdadsjd', 'kadjadjsk', '1991-11-19', 'Jnjsdsjdk', '1234567890', 'kjashdkjasdjaksdkjas', '$2y$10$PAdF/aylHoupIrPOVc6d2eItmrk9efcw6VefbU7JOJBmoXIx0cezC', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(11, 'akdsj', 'aksj', '1991-09-19', 'askjd', '1234567890', 'askjd', '$2y$10$zM5vMiknZ2hB/xmj8U4zIu7EQlbgt/SdaHZFvyhjTD5lQN0MWZIhi', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(12, 'User 12 ', 'last name', '1991-11-18', 'askdhaskjda', '2222222222', 'user12', '$2y$10$Ub2vi59Ug4iP5p6GuHKTPOUO0GV6T1CWszUAc./84FOOZDI1UIT/i', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(13, 'Aniruddha', 'Mishra', '1991-09-09', 'IT Park\r\nMP', '1234567899', 'a007', '$2y$10$QxjLRdxXNDc1y6ATlaoauuCz5nz8/vON8ooys.ZE/c5O1FZ8If4TO', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(14, 'Aniruddha', 'Mishra', '1991-09-19', 'IT Park\r\nMP', '1119991119', '776a', '$2y$10$20PvKQiaGgLFdjBcc6vRYO5.whsFYN4lqPiXxTrgB3Pa/PX2Krgsy', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(15, 'User20', 'Mishra', '1991-12-19', 'IT Park\r\nMP', '2227772227', 'user20', '$2y$10$GWuOohA5wyDStHseHTW3AehRVKF.cklj64NxHnQAD1wfK0RPN/zKG', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(16, 'jon', 'Deo', '1991-07-07', 'test address', '7458317511', 'aniruddha00510', '$2y$10$DMYJWvfavCt3CeOT9MUeuetgzijm5ApresUIyYGes/6HnDnc.ccVG', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

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
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
