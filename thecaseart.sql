-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 15, 2023 at 02:42 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `thecaseart`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_us`
--

CREATE TABLE `about_us` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `about_us`
--

INSERT INTO `about_us` (`id`, `title`, `description`, `image`) VALUES
(2, 'Our History', 'It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages.', '2.png');

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `id` int(11) NOT NULL,
  `heading` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`id`, `heading`, `description`, `image`) VALUES
(1, 'The Case Art', 'A phone case is a cover that protects the outside of your phone and acts as a guard to your gadget against scratches, grime, and other risks.', 'b3.png'),
(2, 'The Case Art', 'That means it protects your electronics and extends the longevity of the device as opposed to ending its lifespan early.', 'b2.png');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `category_name`, `image`) VALUES
(5, 'Redmi', 'redmi.png'),
(6, 'Apple', 'a.png'),
(7, 'Samsung', 'Samsung.png'),
(8, 'Asus', 'asus1.png'),
(9, 'Realme', 'Realme.png');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `name`, `email`, `subject`, `message`, `status`) VALUES
(2, 'Rahul Ramani', 'ramanirahul29@gmail.com', 'dssd', 'sdsd', 'pandding');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `product_id` varchar(255) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `order_date` datetime NOT NULL,
  `order_price` varchar(255) NOT NULL,
  `payment_type` varchar(255) NOT NULL,
  `order_status` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `user_name`, `product_id`, `product_name`, `order_date`, `order_price`, `payment_type`, `order_status`, `user_id`) VALUES
(1, 'Rahul Ramani', '6,7', ' Xiaomi Redmi Note 9 Pro Max Om Logo,Music Panda Asus ZenFone Max Pro M2', '0000-00-00 00:00:00', '348.85', 'Cash on Delivery (COD)', 'Shipping', 1),
(2, 'Rahul Ramani', '9', 'Apple Iphone 12 Pro Max Mobile Cover', '0000-00-00 00:00:00', '300', 'Cash on Delivery (COD)', 'Proccess', 1),
(3, 'Rahul Ramani', '6', ' Xiaomi Redmi Note 9 Pro Max Om Logo', '0000-00-00 00:00:00', '199.6', 'Cash on Delivery (COD)', 'Proccess', 1),
(4, 'Rahul Ramani', '3', 'Redmi Note 10S Black Edition Cover', '0000-00-00 00:00:00', '149.25', 'Cash on Delivery (COD)', 'Proccess', 1);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `sku` varchar(255) NOT NULL,
  `net_price` varchar(255) NOT NULL,
  `discount` varchar(255) NOT NULL,
  `sell_price` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `category` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `product_name`, `sku`, `net_price`, `discount`, `sell_price`, `image`, `description`, `category`) VALUES
(3, 'Redmi Note 10S Black Edition Cover', '456789', '199', '25', '149.25', 'b1.jpg', 'Tempered glass back with a glossy finish, \r\nRubber edges for soft landings and a good grip, \r\nEasy access to standard buttons and ports, \r\nSleek profile, ', '5'),
(6, ' Xiaomi Redmi Note 9 Pro Max Om Logo', '456123', '499', '60', '199.60', 'r.jpg', 'Thin & light Poly-carbonate case, Smooth & seam-free surface, Photo-realistic print quality, Hassle-free replacements, Delivery in 5-7 working days', '5'),
(7, 'Music Panda Asus ZenFone Max Pro M2', '854796', '199', '25', '149.25', 'ASUSZENFONEMAXPROM21537-510x737.jpg', 'Thin & light Poly-carbonate case, Smooth & seam-free surface, Photo-realistic print quality, Hassle-free replacements, Delivery in 5-7 working days', '7'),
(8, 'Radhe Krishna Water Art Apple Iphone 12 Pro Max', '512478', '200', '14', '172.00', 'H-APPLEIPHONE12PROMAX-1714-510x737.jpg', 'Thin & light Poly-carbonate case, Smooth & seam-free surface, Photo-realistic print quality, Hassle-free replacements, Delivery in 5-7 working days', '6'),
(9, 'Apple Iphone 12 Pro Max Mobile Cover', '258471', '500', '40', '300.00', 'APPLEIPHONE12PROMAX1554-510x737.jpg', 'Best Iphone 12 pro max Cover', '6');

-- --------------------------------------------------------

--
-- Table structure for table `product_cart`
--

CREATE TABLE `product_cart` (
  `cart_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `quantity` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product_cart`
--

INSERT INTO `product_cart` (`cart_id`, `product_id`, `product_name`, `price`, `quantity`, `image`, `user_id`) VALUES
(18, 3, 'Redmi Note 10S Black Edition Cover', '149.25', '1', 'b1.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone_no` varchar(10) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_type` varchar(255) NOT NULL,
  `fill_date` datetime NOT NULL,
  `address` text NOT NULL,
  `city` varchar(255) NOT NULL,
  `pin_code` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `name`, `email`, `phone_no`, `password`, `user_type`, `fill_date`, `address`, `city`, `pin_code`, `image`) VALUES
(1, 'Rahul Ramani', 'rahul@gmail.com', '9714910128', '111', 'admin', '2023-08-07 15:52:44', 'Lal Park : 3, Ahir Chowk, 80 feet Road', 'Rajkot', '360002', 'profile.jpg'),
(2, 'Kenil', 'kenil@gmail.com', '8745632947', '222', 'user', '2023-08-20 14:19:47', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `user_side`
--

CREATE TABLE `user_side` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone_no` varchar(10) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_type` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `pincode` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `fill_date` datetime NOT NULL,
  `billing_name` varchar(255) NOT NULL,
  `billing_email` varchar(255) NOT NULL,
  `billing_phone_no` varchar(11) NOT NULL,
  `billing_address` text NOT NULL,
  `billing_city` varchar(255) NOT NULL,
  `billing_state` varchar(255) NOT NULL,
  `billing_pincode` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_side`
--

INSERT INTO `user_side` (`id`, `name`, `email`, `phone_no`, `password`, `user_type`, `address`, `city`, `state`, `pincode`, `image`, `fill_date`, `billing_name`, `billing_email`, `billing_phone_no`, `billing_address`, `billing_city`, `billing_state`, `billing_pincode`) VALUES
(1, 'Rahul Ramani', 'rahul@gmail.com', '9714910117', '123', 'user', 'Lal Park Street no 3', 'Rajkot', 'Gujarat', '360002', 'profile.jpg', '2023-08-21 15:09:17', 'Rahul Ramani', 'ramanirahul29@gmail.com', '9714910117', 'Lal Park 3', 'rajkot', 'Gujrat', '360002');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_us`
--
ALTER TABLE `about_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_cart`
--
ALTER TABLE `product_cart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_side`
--
ALTER TABLE `user_side`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about_us`
--
ALTER TABLE `about_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `product_cart`
--
ALTER TABLE `product_cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_side`
--
ALTER TABLE `user_side`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
