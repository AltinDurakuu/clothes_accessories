-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 26, 2023 at 04:19 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `clothes_accessories`
--

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `idproduct` int(11) NOT NULL,
  `name` varchar(45) DEFAULT NULL,
  `type` varchar(45) DEFAULT NULL,
  `description` varchar(300) DEFAULT NULL,
  `category` varchar(30) NOT NULL,
  `price` decimal(5,2) DEFAULT NULL,
  `stock` int(11) DEFAULT NULL,
  `times_sold` int(11) DEFAULT NULL,
  `date_added` timestamp NOT NULL DEFAULT current_timestamp(),
  `imagepath` varchar(150) DEFAULT NULL,
  `imagepathhover` varchar(160) DEFAULT NULL,
  `old_price` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`idproduct`, `name`, `type`, `description`, `category`, `price`, `stock`, `times_sold`, `date_added`, `imagepath`, `imagepathhover`, `old_price`) VALUES
(0, 'shirt', 'clothes', 'product desc', 'men', '222.00', 0, 2, '2023-05-24 23:04:31', 'dist/images/product3.jpg', NULL, 250),
(1, 'watch', 'accessories', 'useful watch', 'women', '19.00', 0, 3, '2023-05-25 00:42:26', 'dist/images/product2.jpg', NULL, NULL),
(2, 'Jeans', 'clothes', 'Description of jeans', 'Men', '49.99', 0, 10, '2023-05-25 00:54:09', 'dist/images/product2.jpg', NULL, 55),
(3, 'Dress', 'clothes', 'Description of dress', 'Women', '59.99', 0, 3, '2023-05-25 00:54:09', 'dist/images/product3.jpg', NULL, NULL),
(4, 'Shoes', 'clothes', 'Description of shoes', 'Men', '79.99', 0, 0, '2023-05-25 00:54:09', 'dist/images/product4.jpg', NULL, NULL),
(5, 'Handbag', 'accessories', 'Description of handbag', 'Women', '39.99', 0, 0, '2023-05-25 00:54:09', 'dist/images/product5.jpg', NULL, NULL),
(6, 'T-Shirt', 'clothes', 'Description of t-shirt', 'Men', '19.99', 0, 0, '2023-05-25 00:54:09', 'dist/images/product6.jpg', NULL, 0),
(7, 'Skirt', 'clothes', 'Description of skirt', 'Women', '34.99', 0, 0, '2023-05-25 00:54:09', 'dist/images/product7.jpg', NULL, NULL),
(8, 'Hat', 'accessories', 'Description of hat', 'Unisex', '24.99', 0, 5, '2023-05-25 00:54:09', 'dist/images/product8.jpg', NULL, 56),
(9, 'Jacket', 'clothes', 'Description of jacket', 'Men', '89.99', 0, 1, '2023-05-25 00:54:09', 'dist/images/product9.jpg', NULL, NULL),
(10, 'Sunglasses', 'accessories', 'Description of sunglasses', 'Unisex', '59.99', 0, 8, '2023-05-25 00:54:09', 'dist/images/product10.jpg', NULL, 88),
(11, 'Shirt', 'clothes', 'Description of shirt', 'Men', '29.99', 0, 0, '2023-05-25 00:54:09', 'dist/images/product1.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `iduser` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `username` varchar(45) NOT NULL,
  `password` varchar(128) NOT NULL,
  `address` varchar(128) DEFAULT NULL,
  `phonenumber` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`iduser`, `name`, `email`, `username`, `password`, `address`, `phonenumber`) VALUES
(1, 'a', 'altinduraku404@gmail.com', 'aaaa', 'adsdsadsadsa', 'aaadd', '12323121'),
(2, 'hhhhhhhhh', 'altinduraku40@gmail.com', 'hhasda', 'dsadsaasd', 'Noneadssda', '531112211'),
(3, 'Altin', 'altini@gmail.com', 'altini', '$2y$10$eF0rXaQszKOnm/l8ViaRDeFz7CEUnX6hrAJ.t7dwu4dJo2WQBFGnC', 'aaaa', '123321'),
(4, 'ff', 'fjolla.selimi17@gmail.com', 'ffff', '$2y$10$jM6g7rVZTpe8LbOx.Ca98e.3FLQROWP9lb6RqmHZ8PCcLruUnlphO', 'Lluge, Podujeve', '1213'),
(5, 'Altin', 'altinduraku@gmail.com', 'altinduraku', '$2y$10$F20f8diQuLhCn7lJL7/InuJzqpiUZATTza9voiHrMxfGmF9quZ4Gm', 'vushtrri', '1233321'),
(6, 'asd', 'sda@aa.com', 'a2asd', '$2y$10$pncKYR3dXy/RqpGs4ymQW.IP3WGsT3.ElRvxsysGeSRMiY/CCNhn.', 'adsads', '312132'),
(7, 'Altin Duraku', 'altinduraku4024@gmail.com', 'aaaaaaae32', '#13Altini', 'None', '231123132'),
(8, 'Altin Duraku', 'altinduraku4014@gmail.com', 'altindurakua', '#Altini1', 'None', '213213'),
(9, 'Altin Duraku', 'altinduraku40224@gmail.com', 'asddsaassad', '#Altini1', 'None', '213123123'),
(11, 'Altin Duraku', 'altinduraku4@gmail.com', 'aaltini', '#Altini1', 'None', '123321123'),
(12, 'altini', 'alt@gmail.com', 'altinii', '$2y$10$ZMPi.o05fggPESuKscGeg.sYXhgMupEjirFzmosbOpLDnwfsOh7py', 'ads', '12332112233'),
(13, 'Altini', 'adsas@gmail.com', 'jdasjdasjd', '$2y$10$aU834LuVHRw8OTpVUYqLceeyelhXK3YxpYVcECV9nol1hkHzkMYR6', 'dsads', '123231323222'),
(14, 'Altin Duraku', 'altinduraku404222@gmail.com', 'alt1ni', '$2y$10$jCRQ8d5FMPgA6Kc.YKyLGOe1ex3.8tRnGqrw3xCerHBNN6lxzu1/G', 'None', '2133311');

-- --------------------------------------------------------

--
-- Table structure for table `user_has_product`
--

CREATE TABLE `user_has_product` (
  `user_iduser` int(11) NOT NULL,
  `product_idproduct` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`idproduct`),
  ADD UNIQUE KEY `idproducts_UNIQUE` (`idproduct`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`iduser`),
  ADD UNIQUE KEY `email_UNIQUE` (`email`),
  ADD UNIQUE KEY `username_UNIQUE` (`username`),
  ADD UNIQUE KEY `phonenumber_UNIQUE` (`phonenumber`),
  ADD UNIQUE KEY `iduser_UNIQUE` (`iduser`);

--
-- Indexes for table `user_has_product`
--
ALTER TABLE `user_has_product`
  ADD PRIMARY KEY (`user_iduser`,`product_idproduct`),
  ADD KEY `fk_user_has_product_product1_idx` (`product_idproduct`),
  ADD KEY `fk_user_has_product_user_idx` (`user_iduser`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `iduser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `user_has_product`
--
ALTER TABLE `user_has_product`
  ADD CONSTRAINT `fk_user_has_product_product1` FOREIGN KEY (`product_idproduct`) REFERENCES `product` (`idproduct`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_user_has_product_user` FOREIGN KEY (`user_iduser`) REFERENCES `user` (`iduser`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
