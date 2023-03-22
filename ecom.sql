-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 22, 2023 at 02:28 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecom`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(300) NOT NULL,
  `email` varchar(300) NOT NULL,
  `password` varchar(300) NOT NULL,
  `is_active` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `brand_id` int(11) NOT NULL,
  `brand_title` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`brand_id`, `brand_title`) VALUES
(1, 'HP'),
(2, 'Samsung'),
(3, 'Apple'),
(4, 'Sony'),
(5, 'LG');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `p_id` int(10) NOT NULL,
  `ip_add` varchar(250) NOT NULL,
  `user_id` int(10) NOT NULL,
  `product_title` varchar(300) NOT NULL,
  `product_image` varchar(300) NOT NULL,
  `qty` int(10) NOT NULL,
  `price` int(100) NOT NULL,
  `total_amount` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `p_id`, `ip_add`, `user_id`, `product_title`, `product_image`, `qty`, `price`, `total_amount`) VALUES
(1, 4, '3', 21, 'af1', 'sfs1', 32, 20, 3500),
(5, 2, '0', 13, 'Samsung Phone', 'assets/mobile2.jpg', 1, 30000, 30000),
(6, 6, '0', 13, 'Samsung mixer', 'assets/hmp4.jpg', 1, 10000, 10000),
(16, 1, '0', 11, 'Apple I-Phone', 'assets/mobile1.jpg', 1, 40000, 40000),
(19, 2, '0', 11, 'Samsung Phone', 'assets/mobile2.jpg', 1, 30000, 30000),
(21, 31, '0', 11, 'Samsung mixer', 'assets/hmp4.jpg', 7, 10000, 70000),
(22, 32, '0', 11, 'Kids Wear', 'assets/kids2.jpg', 2, 30000, 60000),
(23, 33, '0', 11, 'Kids Wear', 'assets/kids2.jpg', 2, 30000, 60000);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(11) NOT NULL,
  `cat_title` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_title`) VALUES
(1, 'Ladies'),
(2, 'Mens'),
(3, 'Kids'),
(4, 'Furnitures'),
(5, 'Home appliances'),
(6, 'Mobiles');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `trx_id` varchar(300) NOT NULL,
  `p_status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(100) NOT NULL,
  `product_cat` int(11) NOT NULL,
  `product_brand` int(100) NOT NULL,
  `product_title` varchar(255) NOT NULL,
  `product_price` int(100) NOT NULL,
  `product_qty` int(11) NOT NULL,
  `product_desc` text NOT NULL,
  `product_image` text NOT NULL,
  `product_keywords` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_cat`, `product_brand`, `product_title`, `product_price`, `product_qty`, `product_desc`, `product_image`, `product_keywords`) VALUES
(1, 6, 3, 'Apple I-Phone', 40000, 50, 'Apple I Phone. It\'s a good phone', 'assets/mobile1.jpg', 'Mobiles,I-Phone'),
(2, 6, 2, 'Samsung Phone', 30000, 20, 'It\'s a good phone.', 'assets/mobile2.jpg', 'mobiles,samsung'),
(3, 6, 5, 'Lg Phone', 40000, 60, 'It\'s a good phone.', 'assets/mobile3.jpg', 'mobiles,samsung'),
(4, 6, 4, 'realme Phone', 40000, 40, 'It\'s a good phone.', 'assets/mobile4.jpg', 'mobiles,Sony'),
(5, 4, 5, 'Lg Furnitures', 40000, 40, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis ultrices mollis lorem a egestas. Sed maximus consequat mauris, eu molestie est mattis ut. Sed egestas odio nec fringilla ultricies. Integer luctus gravida ante in luctus. Nunc tempus quam ac pulvinar vulputate. Aliquam lacinia velit id arcu mollis dignissim. Suspendisse leo neque, ultrices sed ullamcorper sed, porta convallis purus. Praesent lobortis leo a ipsum euismod rutrum. Phasellus in erat lectus. Ut mattis lacinia est a accumsan. Nulla non vestibulum diam.', 'assets/fur1.jpg', 'Lg,Furniture'),
(6, 5, 2, 'Samsung mixer', 10000, 10, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis ultrices mollis lorem a egestas. Sed maximus consequat mauris, eu molestie est mattis ut. Sed egestas odio nec fringilla ultricies. Integer luctus gravida ante in luctus. Nunc tempus quam ac pulvinar vulputate. Aliquam lacinia velit id arcu mollis dignissim. Suspendisse leo neque, ultrices sed ullamcorper sed, porta convallis purus. Praesent lobortis leo a ipsum euismod rutrum. Phasellus in erat lectus. Ut mattis lacinia est a accumsan. Nulla non vestibulum diam.', 'assets/hmp4.jpg', 'samsung,mixer'),
(7, 3, 1, 'Kids Wear', 30000, 1000, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis ultrices mollis lorem a egestas. Sed maximus consequat mauris, eu molestie est mattis ut. Sed egestas odio nec fringilla ultricies. Integer luctus gravida ante in luctus. Nunc tempus quam ac pulvinar vulputate. Aliquam lacinia velit id arcu mollis dignissim. Suspendisse leo neque, ultrices sed ullamcorper sed, porta convallis purus. Praesent lobortis leo a ipsum euismod rutrum. Phasellus in erat lectus. Ut mattis lacinia est a accumsan. Nulla non vestibulum diam.', 'assets/kids2.jpg', 'kids,kids wear'),
(8, 3, 1, 'Kids Wear', 30000, 1000, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis ultrices mollis lorem a egestas. Sed maximus consequat mauris, eu molestie est mattis ut. Sed egestas odio nec fringilla ultricies. Integer luctus gravida ante in luctus. Nunc tempus quam ac pulvinar vulputate. Aliquam lacinia velit id arcu mollis dignissim. Suspendisse leo neque, ultrices sed ullamcorper sed, porta convallis purus. Praesent lobortis leo a ipsum euismod rutrum. Phasellus in erat lectus. Ut mattis lacinia est a accumsan. Nulla non vestibulum diam.', 'assets/kids2.jpg', 'kids,kids wear'),
(9, 5, 2, 'Samsung mixer', 10000, 10, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis ultrices mollis lorem a egestas. Sed maximus consequat mauris, eu molestie est mattis ut. Sed egestas odio nec fringilla ultricies. Integer luctus gravida ante in luctus. Nunc tempus quam ac pulvinar vulputate. Aliquam lacinia velit id arcu mollis dignissim. Suspendisse leo neque, ultrices sed ullamcorper sed, porta convallis purus. Praesent lobortis leo a ipsum euismod rutrum. Phasellus in erat lectus. Ut mattis lacinia est a accumsan. Nulla non vestibulum diam.', 'assets/hmp4.jpg', 'samsung,mixer'),
(10, 3, 1, 'Kids Wear', 30000, 1000, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis ultrices mollis lorem a egestas. Sed maximus consequat mauris, eu molestie est mattis ut. Sed egestas odio nec fringilla ultricies. Integer luctus gravida ante in luctus. Nunc tempus quam ac pulvinar vulputate. Aliquam lacinia velit id arcu mollis dignissim. Suspendisse leo neque, ultrices sed ullamcorper sed, porta convallis purus. Praesent lobortis leo a ipsum euismod rutrum. Phasellus in erat lectus. Ut mattis lacinia est a accumsan. Nulla non vestibulum diam.', 'assets/kids2.jpg', 'kids,kids wear'),
(11, 3, 1, 'Kids Wear', 30000, 1000, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis ultrices mollis lorem a egestas. Sed maximus consequat mauris, eu molestie est mattis ut. Sed egestas odio nec fringilla ultricies. Integer luctus gravida ante in luctus. Nunc tempus quam ac pulvinar vulputate. Aliquam lacinia velit id arcu mollis dignissim. Suspendisse leo neque, ultrices sed ullamcorper sed, porta convallis purus. Praesent lobortis leo a ipsum euismod rutrum. Phasellus in erat lectus. Ut mattis lacinia est a accumsan. Nulla non vestibulum diam.', 'assets/kids2.jpg', 'kids,kids wear'),
(12, 6, 3, 'Apple I-Phone', 40000, 50, 'Apple I Phone. It\'s a good phone', 'assets/mobile1.jpg', 'Mobiles,I-Phone'),
(13, 6, 2, 'Samsung Phone', 30000, 20, 'It\'s a good phone.', 'assets/mobile2.jpg', 'mobiles,samsung'),
(14, 6, 5, 'Lg Phone', 40000, 60, 'It\'s a good phone.', 'assets/mobile3.jpg', 'mobiles,samsung'),
(15, 6, 4, 'realme Phone', 40000, 40, 'It\'s a good phone.', 'assets/mobile4.jpg', 'mobiles,Sony'),
(16, 4, 5, 'Lg Furnitures', 40000, 40, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis ultrices mollis lorem a egestas. Sed maximus consequat mauris, eu molestie est mattis ut. Sed egestas odio nec fringilla ultricies. Integer luctus gravida ante in luctus. Nunc tempus quam ac pulvinar vulputate. Aliquam lacinia velit id arcu mollis dignissim. Suspendisse leo neque, ultrices sed ullamcorper sed, porta convallis purus. Praesent lobortis leo a ipsum euismod rutrum. Phasellus in erat lectus. Ut mattis lacinia est a accumsan. Nulla non vestibulum diam.', 'assets/fur1.jpg', 'Lg,Furniture'),
(17, 5, 2, 'Samsung mixer', 10000, 10, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis ultrices mollis lorem a egestas. Sed maximus consequat mauris, eu molestie est mattis ut. Sed egestas odio nec fringilla ultricies. Integer luctus gravida ante in luctus. Nunc tempus quam ac pulvinar vulputate. Aliquam lacinia velit id arcu mollis dignissim. Suspendisse leo neque, ultrices sed ullamcorper sed, porta convallis purus. Praesent lobortis leo a ipsum euismod rutrum. Phasellus in erat lectus. Ut mattis lacinia est a accumsan. Nulla non vestibulum diam.', 'assets/hmp4.jpg', 'samsung,mixer'),
(18, 3, 1, 'Kids Wear', 30000, 1000, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis ultrices mollis lorem a egestas. Sed maximus consequat mauris, eu molestie est mattis ut. Sed egestas odio nec fringilla ultricies. Integer luctus gravida ante in luctus. Nunc tempus quam ac pulvinar vulputate. Aliquam lacinia velit id arcu mollis dignissim. Suspendisse leo neque, ultrices sed ullamcorper sed, porta convallis purus. Praesent lobortis leo a ipsum euismod rutrum. Phasellus in erat lectus. Ut mattis lacinia est a accumsan. Nulla non vestibulum diam.', 'assets/kids2.jpg', 'kids,kids wear'),
(19, 3, 1, 'Kids Wear', 30000, 1000, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis ultrices mollis lorem a egestas. Sed maximus consequat mauris, eu molestie est mattis ut. Sed egestas odio nec fringilla ultricies. Integer luctus gravida ante in luctus. Nunc tempus quam ac pulvinar vulputate. Aliquam lacinia velit id arcu mollis dignissim. Suspendisse leo neque, ultrices sed ullamcorper sed, porta convallis purus. Praesent lobortis leo a ipsum euismod rutrum. Phasellus in erat lectus. Ut mattis lacinia est a accumsan. Nulla non vestibulum diam.', 'assets/kids2.jpg', 'kids,kids wear'),
(20, 5, 2, 'Samsung mixer', 10000, 10, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis ultrices mollis lorem a egestas. Sed maximus consequat mauris, eu molestie est mattis ut. Sed egestas odio nec fringilla ultricies. Integer luctus gravida ante in luctus. Nunc tempus quam ac pulvinar vulputate. Aliquam lacinia velit id arcu mollis dignissim. Suspendisse leo neque, ultrices sed ullamcorper sed, porta convallis purus. Praesent lobortis leo a ipsum euismod rutrum. Phasellus in erat lectus. Ut mattis lacinia est a accumsan. Nulla non vestibulum diam.', 'assets/hmp4.jpg', 'samsung,mixer'),
(21, 3, 1, 'Kids Wear', 30000, 1000, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis ultrices mollis lorem a egestas. Sed maximus consequat mauris, eu molestie est mattis ut. Sed egestas odio nec fringilla ultricies. Integer luctus gravida ante in luctus. Nunc tempus quam ac pulvinar vulputate. Aliquam lacinia velit id arcu mollis dignissim. Suspendisse leo neque, ultrices sed ullamcorper sed, porta convallis purus. Praesent lobortis leo a ipsum euismod rutrum. Phasellus in erat lectus. Ut mattis lacinia est a accumsan. Nulla non vestibulum diam.', 'assets/kids2.jpg', 'kids,kids wear'),
(22, 3, 1, 'Kids Wear', 30000, 1000, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis ultrices mollis lorem a egestas. Sed maximus consequat mauris, eu molestie est mattis ut. Sed egestas odio nec fringilla ultricies. Integer luctus gravida ante in luctus. Nunc tempus quam ac pulvinar vulputate. Aliquam lacinia velit id arcu mollis dignissim. Suspendisse leo neque, ultrices sed ullamcorper sed, porta convallis purus. Praesent lobortis leo a ipsum euismod rutrum. Phasellus in erat lectus. Ut mattis lacinia est a accumsan. Nulla non vestibulum diam.', 'assets/kids2.jpg', 'kids,kids wear'),
(23, 6, 3, 'Apple I-Phone', 40000, 50, 'Apple I Phone. It\'s a good phone', 'assets/mobile1.jpg', 'Mobiles,I-Phone'),
(24, 6, 2, 'Samsung Phone', 30000, 20, 'It\'s a good phone.', 'assets/mobile2.jpg', 'mobiles,samsung'),
(25, 6, 5, 'Lg Phone', 40000, 60, 'It\'s a good phone.', 'assets/mobile3.jpg', 'mobiles,samsung'),
(26, 6, 4, 'realme Phone', 40000, 40, 'It\'s a good phone.', 'assets/mobile4.jpg', 'mobiles,Sony'),
(27, 4, 5, 'Lg Furnitures', 40000, 40, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis ultrices mollis lorem a egestas. Sed maximus consequat mauris, eu molestie est mattis ut. Sed egestas odio nec fringilla ultricies. Integer luctus gravida ante in luctus. Nunc tempus quam ac pulvinar vulputate. Aliquam lacinia velit id arcu mollis dignissim. Suspendisse leo neque, ultrices sed ullamcorper sed, porta convallis purus. Praesent lobortis leo a ipsum euismod rutrum. Phasellus in erat lectus. Ut mattis lacinia est a accumsan. Nulla non vestibulum diam.', 'assets/fur1.jpg', 'Lg,Furniture'),
(28, 5, 2, 'Samsung mixer', 10000, 10, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis ultrices mollis lorem a egestas. Sed maximus consequat mauris, eu molestie est mattis ut. Sed egestas odio nec fringilla ultricies. Integer luctus gravida ante in luctus. Nunc tempus quam ac pulvinar vulputate. Aliquam lacinia velit id arcu mollis dignissim. Suspendisse leo neque, ultrices sed ullamcorper sed, porta convallis purus. Praesent lobortis leo a ipsum euismod rutrum. Phasellus in erat lectus. Ut mattis lacinia est a accumsan. Nulla non vestibulum diam.', 'assets/hmp4.jpg', 'samsung,mixer'),
(29, 3, 1, 'Kids Wear', 30000, 1000, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis ultrices mollis lorem a egestas. Sed maximus consequat mauris, eu molestie est mattis ut. Sed egestas odio nec fringilla ultricies. Integer luctus gravida ante in luctus. Nunc tempus quam ac pulvinar vulputate. Aliquam lacinia velit id arcu mollis dignissim. Suspendisse leo neque, ultrices sed ullamcorper sed, porta convallis purus. Praesent lobortis leo a ipsum euismod rutrum. Phasellus in erat lectus. Ut mattis lacinia est a accumsan. Nulla non vestibulum diam.', 'assets/kids2.jpg', 'kids,kids wear'),
(30, 3, 1, 'Kids Wear', 30000, 1000, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis ultrices mollis lorem a egestas. Sed maximus consequat mauris, eu molestie est mattis ut. Sed egestas odio nec fringilla ultricies. Integer luctus gravida ante in luctus. Nunc tempus quam ac pulvinar vulputate. Aliquam lacinia velit id arcu mollis dignissim. Suspendisse leo neque, ultrices sed ullamcorper sed, porta convallis purus. Praesent lobortis leo a ipsum euismod rutrum. Phasellus in erat lectus. Ut mattis lacinia est a accumsan. Nulla non vestibulum diam.', 'assets/kids2.jpg', 'kids,kids wear'),
(31, 5, 2, 'Samsung mixer', 10000, 10, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis ultrices mollis lorem a egestas. Sed maximus consequat mauris, eu molestie est mattis ut. Sed egestas odio nec fringilla ultricies. Integer luctus gravida ante in luctus. Nunc tempus quam ac pulvinar vulputate. Aliquam lacinia velit id arcu mollis dignissim. Suspendisse leo neque, ultrices sed ullamcorper sed, porta convallis purus. Praesent lobortis leo a ipsum euismod rutrum. Phasellus in erat lectus. Ut mattis lacinia est a accumsan. Nulla non vestibulum diam.', 'assets/hmp4.jpg', 'samsung,mixer'),
(32, 3, 1, 'Kids Wear', 30000, 1000, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis ultrices mollis lorem a egestas. Sed maximus consequat mauris, eu molestie est mattis ut. Sed egestas odio nec fringilla ultricies. Integer luctus gravida ante in luctus. Nunc tempus quam ac pulvinar vulputate. Aliquam lacinia velit id arcu mollis dignissim. Suspendisse leo neque, ultrices sed ullamcorper sed, porta convallis purus. Praesent lobortis leo a ipsum euismod rutrum. Phasellus in erat lectus. Ut mattis lacinia est a accumsan. Nulla non vestibulum diam.', 'assets/kids2.jpg', 'kids,kids wear'),
(33, 3, 1, 'Kids Wear', 30000, 1000, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis ultrices mollis lorem a egestas. Sed maximus consequat mauris, eu molestie est mattis ut. Sed egestas odio nec fringilla ultricies. Integer luctus gravida ante in luctus. Nunc tempus quam ac pulvinar vulputate. Aliquam lacinia velit id arcu mollis dignissim. Suspendisse leo neque, ultrices sed ullamcorper sed, porta convallis purus. Praesent lobortis leo a ipsum euismod rutrum. Phasellus in erat lectus. Ut mattis lacinia est a accumsan. Nulla non vestibulum diam.', 'assets/kids2.jpg', 'kids,kids wear'),
(34, 6, 3, 'Apple I-Phone', 40000, 50, 'Apple I Phone. It\'s a good phone', 'assets/mobile1.jpg', 'Mobiles,I-Phone'),
(35, 6, 2, 'Samsung Phone', 30000, 20, 'It\'s a good phone.', 'assets/mobile2.jpg', 'mobiles,samsung'),
(36, 6, 5, 'Lg Phone', 40000, 60, 'It\'s a good phone.', 'assets/mobile3.jpg', 'mobiles,samsung'),
(37, 6, 4, 'realme Phone', 40000, 40, 'It\'s a good phone.', 'assets/mobile4.jpg', 'mobiles,Sony'),
(38, 4, 5, 'Lg Furnitures', 40000, 40, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis ultrices mollis lorem a egestas. Sed maximus consequat mauris, eu molestie est mattis ut. Sed egestas odio nec fringilla ultricies. Integer luctus gravida ante in luctus. Nunc tempus quam ac pulvinar vulputate. Aliquam lacinia velit id arcu mollis dignissim. Suspendisse leo neque, ultrices sed ullamcorper sed, porta convallis purus. Praesent lobortis leo a ipsum euismod rutrum. Phasellus in erat lectus. Ut mattis lacinia est a accumsan. Nulla non vestibulum diam.', 'assets/fur1.jpg', 'Lg,Furniture'),
(39, 5, 2, 'Samsung mixer', 10000, 10, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis ultrices mollis lorem a egestas. Sed maximus consequat mauris, eu molestie est mattis ut. Sed egestas odio nec fringilla ultricies. Integer luctus gravida ante in luctus. Nunc tempus quam ac pulvinar vulputate. Aliquam lacinia velit id arcu mollis dignissim. Suspendisse leo neque, ultrices sed ullamcorper sed, porta convallis purus. Praesent lobortis leo a ipsum euismod rutrum. Phasellus in erat lectus. Ut mattis lacinia est a accumsan. Nulla non vestibulum diam.', 'assets/hmp4.jpg', 'samsung,mixer'),
(40, 3, 1, 'Kids Wear', 30000, 1000, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis ultrices mollis lorem a egestas. Sed maximus consequat mauris, eu molestie est mattis ut. Sed egestas odio nec fringilla ultricies. Integer luctus gravida ante in luctus. Nunc tempus quam ac pulvinar vulputate. Aliquam lacinia velit id arcu mollis dignissim. Suspendisse leo neque, ultrices sed ullamcorper sed, porta convallis purus. Praesent lobortis leo a ipsum euismod rutrum. Phasellus in erat lectus. Ut mattis lacinia est a accumsan. Nulla non vestibulum diam.', 'assets/kids2.jpg', 'kids,kids wear'),
(41, 3, 1, 'Kids Wear', 30000, 1000, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis ultrices mollis lorem a egestas. Sed maximus consequat mauris, eu molestie est mattis ut. Sed egestas odio nec fringilla ultricies. Integer luctus gravida ante in luctus. Nunc tempus quam ac pulvinar vulputate. Aliquam lacinia velit id arcu mollis dignissim. Suspendisse leo neque, ultrices sed ullamcorper sed, porta convallis purus. Praesent lobortis leo a ipsum euismod rutrum. Phasellus in erat lectus. Ut mattis lacinia est a accumsan. Nulla non vestibulum diam.', 'assets/kids2.jpg', 'kids,kids wear'),
(42, 5, 2, 'Samsung mixer', 10000, 10, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis ultrices mollis lorem a egestas. Sed maximus consequat mauris, eu molestie est mattis ut. Sed egestas odio nec fringilla ultricies. Integer luctus gravida ante in luctus. Nunc tempus quam ac pulvinar vulputate. Aliquam lacinia velit id arcu mollis dignissim. Suspendisse leo neque, ultrices sed ullamcorper sed, porta convallis purus. Praesent lobortis leo a ipsum euismod rutrum. Phasellus in erat lectus. Ut mattis lacinia est a accumsan. Nulla non vestibulum diam.', 'assets/hmp4.jpg', 'samsung,mixer'),
(43, 3, 1, 'Kids Wear', 30000, 1000, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis ultrices mollis lorem a egestas. Sed maximus consequat mauris, eu molestie est mattis ut. Sed egestas odio nec fringilla ultricies. Integer luctus gravida ante in luctus. Nunc tempus quam ac pulvinar vulputate. Aliquam lacinia velit id arcu mollis dignissim. Suspendisse leo neque, ultrices sed ullamcorper sed, porta convallis purus. Praesent lobortis leo a ipsum euismod rutrum. Phasellus in erat lectus. Ut mattis lacinia est a accumsan. Nulla non vestibulum diam.', 'assets/kids2.jpg', 'kids,kids wear'),
(44, 3, 1, 'Kids Wear', 30000, 1000, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis ultrices mollis lorem a egestas. Sed maximus consequat mauris, eu molestie est mattis ut. Sed egestas odio nec fringilla ultricies. Integer luctus gravida ante in luctus. Nunc tempus quam ac pulvinar vulputate. Aliquam lacinia velit id arcu mollis dignissim. Suspendisse leo neque, ultrices sed ullamcorper sed, porta convallis purus. Praesent lobortis leo a ipsum euismod rutrum. Phasellus in erat lectus. Ut mattis lacinia est a accumsan. Nulla non vestibulum diam.', 'assets/kids2.jpg', 'kids,kids wear');

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE `user_info` (
  `user_id` int(11) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(300) NOT NULL,
  `password` varchar(300) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `address1` varchar(300) NOT NULL,
  `address2` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`user_id`, `first_name`, `last_name`, `email`, `password`, `mobile`, `address1`, `address2`) VALUES
(11, 'Rakesh', 'singh', 'abc@gmail.com', '123', '123456789', 'asdf', 'sdfg2'),
(13, 'hello', 'hello', 'asd@gmail.com', '123', '1234567890', 'asd', 'asdsad');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`brand_id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `product_brand` (`product_brand`),
  ADD KEY `product_cat` (`product_cat`);

--
-- Indexes for table `user_info`
--
ALTER TABLE `user_info`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `brand_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `user_info`
--
ALTER TABLE `user_info`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`product_brand`) REFERENCES `brands` (`brand_id`),
  ADD CONSTRAINT `products_ibfk_2` FOREIGN KEY (`product_cat`) REFERENCES `categories` (`cat_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
