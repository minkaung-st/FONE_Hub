-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 24, 2023 at 06:57 PM
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
-- Database: `fone_house_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `contact_num` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`contact_num`, `name`, `email`, `message`) VALUES
(4, 'Min Kaung San Thar', 'minkaungst@gmail.com', 'This is a good website .'),
(7, 'Thn Maung', 'thinmaung@gmail.com', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur id dolorem iste consequuntur ducimus vitae dignissimos consequatur sequi alias ipsa, dolorum nam culpa similique provident maiores eos mollitia enim itaque?'),
(8, 'Pin Pyaung', 'pyaungyi@gmail.com', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum sit minima, sapiente alias ducimus accusantium. Recusandae natus similique provident possimus eos id accusamus tempora deserunt necessitatibus? Ducimus excepturi cumque odit.\r\n'),
(9, 'Chin Chaung', 'chinchaung@gmail.com', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Illum, dolore impedit. Nam accusantium quas, perferendis molestiae omnis officiis quia itaque quae qui porro quidem cumque natus obcaecati maxime, quod laborum!'),
(10, 'Aye Aung', 'aung@gmail.com', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos, expedita illum. Alias numquam sequi, perspiciatis recusandae reiciendis ratione. Distinctio accusantium nemo laborum eveniet facere delectus provident, sit possimus odio. Fugit.'),
(11, 'Khin Khin', 'khin@gmail.com', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet explicabo fugit ullam suscipit, nesciunt ut enim earum laborum ducimus eaque, fuga fugiat voluptatum eius illum id alias. Molestias, hic officiis?');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customer_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `dob` date NOT NULL,
  `profile_picture` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customer_id`, `name`, `email`, `password`, `dob`, `profile_picture`, `address`, `phone`) VALUES
(1, 'Min Kaung San Thar', 'minkaungst@gmail.com', 'MinKaungST/123', '2004-09-13', 'customer_profile/MinKaungST.jpg', 'Moe Kaung Rd , Yankin , Yangon', '09759039057'),
(6, 'Kyaw Gyi', 'kyawgyi@gmail.com', 'KyawGyi/123', '1995-12-12', 'customer_profile/misterBean.jpg', 'No (35) , Main Rd , Insein , YGN', '09443427414');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `order_id` int(11) NOT NULL,
  `phone_id` int(11) NOT NULL,
  `brand` varchar(50) NOT NULL,
  `model` varchar(50) NOT NULL,
  `quantity` varchar(50) NOT NULL,
  `unit_price` varchar(50) NOT NULL,
  `total_amount` varchar(50) NOT NULL,
  `order_date` date NOT NULL,
  `payment_type` varchar(50) NOT NULL,
  `payment_slip` varchar(255) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `customer_name` varchar(50) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `location` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`order_id`, `phone_id`, `brand`, `model`, `quantity`, `unit_price`, `total_amount`, `order_date`, `payment_type`, `payment_slip`, `customer_id`, `customer_name`, `phone`, `location`) VALUES
(11, 6, 'Apple', 'iPhone 13 pro', '2', '2500000', '5000000', '2023-06-25', 'ayapay', 'payment_slip/191403287_270660301413379_6963381048859062565_n.jpg', 1, 'Min Kaung San Thar', '09759039057', 'No(75) MoeKaung Rd , Yankin Township , YGN'),
(12, 6, 'Apple', 'iPhone 13 pro', '5', '2500000', '12500000', '2023-06-25', 'kpay', 'payment_slip/121784744_103321691569248_509668533487545002_n.png', 1, 'Min Kaung San Thar', '09759039057', 'No (69) Country Rd , Wapon Township , YGN');

-- --------------------------------------------------------

--
-- Table structure for table `phone`
--

CREATE TABLE `phone` (
  `phone_id` int(11) NOT NULL,
  `brand` varchar(50) NOT NULL,
  `model` varchar(50) NOT NULL,
  `color` varchar(20) NOT NULL,
  `storage` varchar(20) NOT NULL,
  `unit_price` varchar(50) NOT NULL,
  `stock_quantity` varchar(20) NOT NULL,
  `phone_img` varchar(255) NOT NULL,
  `specification` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `phone`
--

INSERT INTO `phone` (`phone_id`, `brand`, `model`, `color`, `storage`, `unit_price`, `stock_quantity`, `phone_img`, `specification`) VALUES
(1, 'Apple', 'iPhone 14', '', '128 / 4', '2800000', '16', 'product_img/iphone-14.jpg', 'This is iPhone 14'),
(3, 'Apple', 'iPhone 14 pro', '', '128 / 4', '3000000', '6', 'product_img/iphone-14-pro.jpg', 'This is iPhone 14 pro'),
(4, 'Apple', 'iPhone 14 pro max', '', '256 / 8', '4000000', '6', 'product_img/iphone-14-pro-max.jpg', 'This is iPhone 14 pro max .'),
(5, 'Apple', 'iPhone 13', '', '128 / 4', '2000000', '20', 'product_img/iphone_13.jpg', 'This is iPhone 13 .'),
(6, 'Apple', 'iPhone 13 pro', '', '128 / 4', '2500000', '20', 'product_img/iphone-13-pro.jpg', 'This is iPhone 13 pro .'),
(7, 'Apple', 'iPhone 13 pro max', '', '256 / 8', '2900000', '10', 'product_img/iphone-13-pro-max.jpg', 'This is iPhone 13 pro max .'),
(8, 'Apple', 'iPhone 13 mini', '', '128 / 4', '1900000', '10', 'product_img/iphone-13-mini.jpg', 'This is iPhone 13 mini .\r\n'),
(9, 'Samsung', 'Galaxy A-24', '', '128 / 6', '700000', '28', 'product_img/samsung-galaxy-a24.jpg', 'This is Galaxy A-24 .'),
(10, 'Samsung', 'Galaxy F-14', '', '256 / 8', '1000000', '15', 'product_img/samsung-galaxy-f14.jpg', 'This is Galaxy F-14 .'),
(11, 'Samsung', 'Galaxy M-54', '', '256 / 8', '900000', '10', 'product_img/samsung-galaxy-m54-5g.jpg', 'This is iPhone M-54 5G .'),
(12, 'Vivo', 'Y35+', '', '128 / 4', '400000', '20', 'product_img/vivo-y35-plus.jpg', 'This is VIVO Y35+ .'),
(13, 'Vivo', 'Y78', '', '512 / 6', '800000', '20', 'product_img/vivo-y78.jpg', 'This is VIVO Y78 .'),
(14, 'Oppo', 'Reno 10 pro +', '', '512 / 16', '1470000', '6', 'product_img/oppo-reno10-pro-plus.jpg', 'This is Oppo Reno 10 pro+ .'),
(15, 'Xiaomi', 'Redmi Note 12 pro', '', '128 / 8', '710000', '24', 'product_img/xiaomi-redmi-note-12t-pro.jpg', 'This is Xiaomi Redmi Note 12 pro .'),
(16, 'Sony', 'Xperia 1 V', '', '512 / 6', '1950000', '3', 'product_img/sony-xperia-1-v.jpg', 'This is Sony Xperia 1 V .');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `staff_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(6) NOT NULL,
  `position` varchar(100) NOT NULL,
  `profile_picture` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`staff_id`, `name`, `email`, `password`, `dob`, `gender`, `position`, `profile_picture`, `address`, `phone`) VALUES
(1, 'Min Kaung San Thar', 'minkaungst@gmail.com', 'MinKaungST/123', '2004-09-13', 'male', 'storeManager', 'staff_profile/MinKaungST.jpg', 'Moe Kaung Rd , Yankin , Yangon', '09759039057');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`contact_num`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `phone`
--
ALTER TABLE `phone`
  ADD PRIMARY KEY (`phone_id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`staff_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `contact_num` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `phone`
--
ALTER TABLE `phone`
  MODIFY `phone_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `staff_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
