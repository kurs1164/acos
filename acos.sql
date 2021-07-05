-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 05, 2021 at 02:12 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `acos`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(11) NOT NULL,
  `product_id` varchar(255) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `status` text NOT NULL DEFAULT 'NOT PURCHASED'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cart_id`, `product_id`, `user_id`, `status`) VALUES
(1, '3', '1', 'PURCHASED'),
(2, '1', '1', 'PURCHASED'),
(3, '2', '1', 'PURCHASED'),
(4, '4', '1', 'PURCHASED'),
(5, '2', '3', 'PURCHASED'),
(6, '2', '3', 'PURCHASED'),
(7, '4', '3', 'PURCHASED'),
(8, '1', '1', 'PURCHASED');

-- --------------------------------------------------------

--
-- Table structure for table `creater`
--

CREATE TABLE `creater` (
  `creater_id` int(11) NOT NULL,
  `creater_name` varchar(255) NOT NULL,
  `genre` varchar(255) NOT NULL,
  `crelogin_id` int(11) NOT NULL,
  `pr_image` varchar(255) NOT NULL,
  `comment` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `creater`
--

INSERT INTO `creater` (`creater_id`, `creater_name`, `genre`, `crelogin_id`, `pr_image`, `comment`) VALUES
(1, 'Nishino Akihiro', 'comics', 1, 'S__24592394.jpg', 'Japanese Entertainer'),
(2, 'KURS', 'novel', 2, '6F3C3067-383E-431A-B366-6DBC7D365054.jpg', 'I am university student and creator'),
(3, 'Iwasaki', 'movie', 3, 'S__25075719.jpg', 'Movie Directer'),
(4, 'Jiro', 'anime', 4, 'back.jpg', 'Amateur animation creator');

-- --------------------------------------------------------

--
-- Table structure for table `crelogin`
--

CREATE TABLE `crelogin` (
  `crelogin_id` int(11) NOT NULL,
  `creater_name` varchar(255) NOT NULL,
  `crepass` varchar(255) NOT NULL,
  `status` varchar(1) NOT NULL DEFAULT 'C'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `crelogin`
--

INSERT INTO `crelogin` (`crelogin_id`, `creater_name`, `crepass`, `status`) VALUES
(1, 'Nishino Akihiro', '95074e7721f93c2e95e95aa0ca903c10', 'C'),
(2, 'KURS', '9e6824fd7221e0957d715f65f44cd9d8', 'C'),
(3, 'Iwasaki', '02cf71f79f4d106bf40143ad845ac03d', 'C'),
(4, 'Jiro', '3183b82b7e1293353daa36f7b5c9fa2f', 'C');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `login_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` varchar(1) NOT NULL DEFAULT 'U'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`login_id`, `username`, `password`, `status`) VALUES
(1, 'kurs1164', '9e6824fd7221e0957d715f65f44cd9d8', 'U'),
(3, 'Taka', '0f7a5335ce8d7f4753475b2fed76556d', 'U'),
(4, 'observer', 'ceb8447cc4ab78d2ec34cd9f11e4bed2', 'A');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `genre` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `creater_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `product_name`, `price`, `genre`, `image`, `description`, `creater_id`) VALUES
(1, 'Fairy Herb', '1500', 'NOVEL', 'ハーブ.jpg', 'picture book - the boy and the fairy in the Philippines', 2),
(2, 'Pupell of Chimney town ', '2500', 'COMIC', 'S__56131587.jpg', 'Fantasy book', 1),
(3, 'short Movie', '1500', 'MOVIE', 'マヨン山.jpg', 'Short Movie - my own experience', 3),
(4, 'school', '1000', 'ANIMATION', 'S__25239554.jpg', 'original animation', 4);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `login_id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `comment` varchar(255) NOT NULL DEFAULT 'introduction'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `first_name`, `last_name`, `contact`, `gender`, `login_id`, `image`, `comment`) VALUES
(1, 'Ryoken', 'Kure', '08038519180', 'male', 1, 'S__25436171.jpg', 'I am university student and creator'),
(3, 'Taka', 'Mori', '090323234445', 'male', 3, 'S__42172453.jpg', 'Japanese Artist '),
(4, 'Observer', 'Boss', '09061537465', 'none', 4, 'S__3735581.jpg', 'boss');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `creater`
--
ALTER TABLE `creater`
  ADD PRIMARY KEY (`creater_id`);

--
-- Indexes for table `crelogin`
--
ALTER TABLE `crelogin`
  ADD PRIMARY KEY (`crelogin_id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`login_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `creater`
--
ALTER TABLE `creater`
  MODIFY `creater_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `crelogin`
--
ALTER TABLE `crelogin`
  MODIFY `crelogin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `login_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
