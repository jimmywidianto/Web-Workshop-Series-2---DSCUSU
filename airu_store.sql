-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 27, 2020 at 05:54 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `airu_store`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `id` int(11) NOT NULL,
  `name` varchar(70) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(70) NOT NULL,
  `password` varchar(50) NOT NULL,
  `birthdate` date NOT NULL,
  `gender` enum('Male','Female') NOT NULL,
  `level` enum('admin','user') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`id`, `name`, `username`, `email`, `password`, `birthdate`, `gender`, `level`) VALUES
(1, 'Admin', 'admin', 'admin@admin.com', '21232f297a57a5a743894a0e4a801fc3', '0001-01-01', 'Male', 'admin'),
(2, 'Budi', 'budi', 'budi@user.com', '00dfc53ee86af02e742515cdcf075ed3', '2000-01-01', 'Male', 'user'),
(3, 'Tina', 'tina', 'tina@user.com', 'ef2afe0ea76c76b6b4b1ee92864c4d5c', '2001-01-01', 'Female', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(70) NOT NULL,
  `gender` enum('Men','Women') NOT NULL,
  `price` int(11) NOT NULL,
  `sold` int(11) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` timestamp NOT NULL DEFAULT current_timestamp(),
  `imageurl` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `gender`, `price`, `sold`, `created`, `modified`, `imageurl`) VALUES
(1, 'Ultraboost 20 Shoes', 'Men', 2100000, 20, '2020-11-27 16:19:23', '2020-11-27 09:19:23', 'https://www.stylefile.com/dw/image/v2/BCZD_PRD/on/demandware.static/-/Sites-master-catalog/default/dwaeafc28a/hi-res/P.SO4985303-z1.jpg?sw=800'),
(2, 'Terrex Urban Low Hiking Shoes', 'Men', 2000000, 40, '2020-11-27 16:22:29', '2020-11-27 09:22:29', 'https://m.media-amazon.com/images/I/71iV17J2RRL._AC_SR700,525_.jpg'),
(3, 'Terrex Eastrail Hiking Shoes', 'Men', 1400000, 21, '2020-11-27 16:22:56', '2020-11-27 09:22:56', 'https://m.media-amazon.com/images/I/71LNc+azbRL._AC_SR700,525_.jpg'),
(4, 'D.O.N. Issue #2 Shoes', 'Men', 1600000, 49, '2020-11-27 16:23:18', '2020-11-27 09:23:18', 'https://i.ebayimg.com/images/g/bPIAAOSw5YVfwLuc/s-l1600.jpg'),
(5, 'Edge XT Shoes', 'Men', 1800000, 30, '2020-11-27 16:23:47', '2020-11-27 09:23:47', 'https://m.media-amazon.com/images/I/71eXJlnwGZL._AC_SR700,525_.jpg'),
(6, 'X9000L1 Shoes', 'Men', 1400000, 49, '2020-11-27 16:24:07', '2020-11-27 09:24:07', 'https://images.sportsdirect.com/images/products/21475269_l_a1.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
