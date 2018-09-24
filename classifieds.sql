-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 23, 2018 at 06:09 PM
-- Server version: 5.6.39
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbljtwon_php`
--
CREATE DATABASE IF NOT EXISTS `dbljtwon_php` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `dbljtwon_php`;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

DROP TABLE IF EXISTS `category`;
CREATE TABLE `category` (
  `idCategory` int(11) NOT NULL,
  `categoryName` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`idCategory`, `categoryName`) VALUES
(1, 'Auctions and Garage, Estate, and Yard Sales'),
(2, 'Merchandise'),
(3, 'Services'),
(4, 'Pets');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE `products` (
  `idProducts` int(11) NOT NULL,
  `title` varchar(45) NOT NULL,
  `description` varchar(250) DEFAULT NULL,
  `image` varchar(100) DEFAULT NULL,
  `category` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `sold` tinyint(4) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`idProducts`, `title`, `description`, `image`, `category`, `price`, `sold`) VALUES
(21, 'A est sed.', 'Quia iusto quos quas libero. Quod sit error dolores omnis quo excepturi reiciendis nam. Et aut ut ut ut sed.', 'https://picsum.photos/100/100/?random', 1, 19228397, 0),
(22, 'Eum delectus quibusdam cupiditate.', 'Beatae aut aut earum repellendus. Minima est mollitia omnis aut eos voluptate. Assumenda deserunt officia enim pariatur accusantium voluptas optio eos.', 'https://picsum.photos/100/100/?random', 3, 117, 0),
(23, 'Earum sed facilis.', 'Voluptatem qui voluptatem iste cum quo. Quisquam quasi voluptate velit soluta quasi culpa. Enim nihil aliquid consectetur non.', 'https://picsum.photos/100/100/?random', 2, 146, 1),
(24, 'Quisquam qui repellendus dignissimos.', 'Sint voluptatibus dolores quia illum sint. Blanditiis magni inventore sit perferendis. Voluptates consequuntur quisquam dignissimos quo provident quos. Officia cupiditate animi asperiores dolor.', 'https://picsum.photos/100/100/?random', 2, 4, 1),
(25, 'Omnis sed voluptatem.', 'Porro et laudantium voluptas recusandae. Ut adipisci recusandae possimus quae vero autem. Ut officiis temporibus ullam aut.', 'https://picsum.photos/100/100/?random', 1, 16, 0),
(26, 'Id omnis consequuntur.', 'Eum ex neque tempore inventore ullam nisi. Sit velit voluptas maxime fuga molestiae vero quo. Et non soluta velit sunt ut. Earum tenetur sapiente consequatur quas.', 'https://picsum.photos/100/100/?random', 3, 1814, 0),
(27, 'Quae quaerat saepe repudiandae.', 'Veritatis animi libero iure tenetur inventore. Iure eligendi reiciendis molestiae natus vero. Maiores magni a consequatur modi rem rerum. Similique consequatur ab aperiam.', 'https://picsum.photos/100/100/?random', 1, 12, 1),
(28, 'Sequi et ad.', 'Vel distinctio reiciendis et voluptatem cum autem. Quasi ut itaque inventore eius. Et sunt quod corporis animi non consectetur. Nostrum deleniti in dignissimos ex ipsam similique.', 'https://picsum.photos/100/100/?random', 3, 21572943, 1),
(29, 'Rerum eos debitis.', 'Dolor ex voluptas deleniti ut quam et. Alias illum est id et sint harum itaque. Quae dolorem sunt rerum praesentium iure. Optio in animi mollitia et nesciunt corrupti fugit.', 'https://picsum.photos/100/100/?random', 3, 59, 1),
(30, 'Atque nihil tempora doloremque.', 'Dolorum non sunt est repellendus iusto neque. Dolorem magnam officiis cupiditate. Ea similique dolores sit asperiores.', 'https://picsum.photos/100/100/?random', 2, 2244, 1);

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

DROP TABLE IF EXISTS `sales`;
CREATE TABLE `sales` (
  `idSales` int(11) NOT NULL,
  `Seller` int(11) NOT NULL,
  `Product` int(11) NOT NULL,
  `Buyer` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`idSales`, `Seller`, `Product`, `Buyer`) VALUES
(31, 4, 27, 4),
(32, 4, 27, 1),
(33, 4, 24, 5),
(34, 5, 29, 3),
(35, 2, 24, 1),
(36, 3, 26, 3),
(37, 2, 29, 4),
(38, 5, 23, 1),
(39, 4, 23, 5),
(40, 4, 30, 5);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `idUsers` int(11) NOT NULL,
  `loginName` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `avatar` varchar(45) DEFAULT NULL,
  `email` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`idUsers`, `loginName`, `password`, `avatar`, `email`) VALUES
(1, 'sofia.murphy', '252b34a666b7a76275af11c87029ac769a2bdad6', '', 'marion.simonis@example.net'),
(2, 'padberg.arvel', '89889632299a988d89beecc469d1a23d7b7dc75a', 'http://lorempixel.com/640/480/', 'yesenia.oconner@example.net'),
(3, 'stehr.jaiden', '4b8de291378b19a8dff2e4b18cb6e99e5e7c5365', 'http://lorempixel.com/640/480/', 'ihermann@example.com'),
(4, 'ppadberg', '2475a69c5dba5b742995db548a805e3e844bf84d', '', 'jose17@example.com'),
(5, 'miller.keebler', 'bdbbab8820ff9df260a6af196e81351ac2291a6f', 'http://lorempixel.com/640/480/', 'griffin01@example.net');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`idCategory`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`idProducts`),
  ADD KEY `category_idx` (`category`);

--
-- Indexes for table `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`idSales`),
  ADD KEY `Seller_idx` (`Seller`),
  ADD KEY `Product_idx` (`Product`),
  ADD KEY `Buyer_idx` (`Buyer`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`idUsers`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `idCategory` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `idProducts` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `sales`
--
ALTER TABLE `sales`
  MODIFY `idSales` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `idUsers` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `category` FOREIGN KEY (`category`) REFERENCES `category` (`idCategory`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `sales`
--
ALTER TABLE `sales`
  ADD CONSTRAINT `Buyer` FOREIGN KEY (`Buyer`) REFERENCES `users` (`idUsers`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `Product` FOREIGN KEY (`Product`) REFERENCES `products` (`idProducts`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `Seller` FOREIGN KEY (`Seller`) REFERENCES `users` (`idUsers`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
