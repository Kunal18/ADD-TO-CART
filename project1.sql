-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 29, 2017 at 02:10 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project1`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `name` varchar(30) NOT NULL,
  `pwd` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`name`, `pwd`) VALUES
('admin@mycart', 'secretpwd1'),
('admin', 'admin'),
('kunal', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(40) NOT NULL,
  `city_name` varchar(30) NOT NULL,
  `product_type` varchar(30) NOT NULL,
  `brand_type` varchar(30) NOT NULL,
  `image` varchar(20) NOT NULL,
  `product_desc` varchar(200) NOT NULL,
  `cost` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`product_id`, `product_name`, `city_name`, `product_type`, `brand_type`, `image`, `product_desc`, `cost`) VALUES
(125, 'ceos700d', 'MUMBAI', 'Electronics', 'Canon', 'ceos700d.jpg', 'CANON CAMERA', 12000),
(126, 'ceos800d', 'PUNE', 'Electronics', 'Canon', 'ceos800d.jpg', 'Canon best camera', 15000),
(127, 'ceos1300d', 'MUMBAI', 'Electronics', 'Canon', 'ceos1300d.jpg', 'Canon flagship camera', 15000),
(128, 'GalaxyS8', 'MUMBAI', 'Mobiles', 'Samsung', 'galaxys8.jpg', 'FLAGSHIP PRODUCT', 60000),
(129, 'Gionee5', 'PUNE', 'Mobiles', 'Gionee', 'gioneem5.jpg', 'BEST SELFIE CAM', 16000),
(130, 'iphone7', 'NASHIK', 'Mobiles', 'Apple', 'iphone7.jpg', 'Now at less price', 28000),
(131, 'nd5500', 'NASHIK', 'Electronics', 'Nikon', 'nd5500.jpg', 'FLAGSHIP PRODUCT', 60000),
(133, 'nd7200', 'NASHIK', 'Electronics', 'Nikon', 'nd7200.jpg', 'Vlogging camera', 40000),
(134, 'honor8', 'MUMBAI', 'Mobiles', 'Honor', 'honor8.jpg', 'BEST BUDGET PHONE', 15000);

-- --------------------------------------------------------

--
-- Table structure for table `mycart`
--

CREATE TABLE `mycart` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(30) NOT NULL,
  `city_name` varchar(30) NOT NULL,
  `product_type` varchar(30) NOT NULL,
  `brand_type` varchar(30) NOT NULL,
  `image` varchar(30) NOT NULL,
  `product_desc` varchar(200) NOT NULL,
  `cost` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mycart`
--

INSERT INTO `mycart` (`product_id`, `product_name`, `city_name`, `product_type`, `brand_type`, `image`, `product_desc`, `cost`) VALUES
(125, 'ceos700d', 'MUMBAI', 'Electronics', 'brand_type', 'ceos700d.jpg', 'CANON CAMERA', 12000);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_name` varchar(30) NOT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_name`, `password`) VALUES
('Paul', 'vampire'),
('kunal', '123456'),
('user', 'user'),
('james', 'bond'),
('new', '123456'),
('mrunal', '123456'),
('', ''),
('wtl', 'wtl'),
('admin', 'admin'),
('mru', 'abc');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `mycart`
--
ALTER TABLE `mycart`
  ADD PRIMARY KEY (`product_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=135;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
