-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 23, 2024 at 10:49 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `database`
--

-- --------------------------------------------------------

--
-- Table structure for table `clothes`
--

CREATE TABLE `clothes` (
  `ClothesId` int(2) DEFAULT NULL,
  `Clothes` varchar(10) DEFAULT NULL,
  `Description` varchar(16) DEFAULT NULL,
  `size` int(4) DEFAULT NULL,
  `price` varchar(4) DEFAULT NULL,
  `Date` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `clothes`
--

INSERT INTO `clothes` (`ClothesId`, `Clothes`, `Description`, `size`, `price`, `Date`) VALUES
(1, 'dress', 'abagabo nabagore', 39, '$45 ', '0000-00-00 00:00:00'),
(2, 'pants', 'abagabo  ', 45, '$34 ', '0000-00-00 00:00:00'),
(3, 'Sweater', 'abagore', 324, '$54 ', '0000-00-00 00:00:00'),
(4, 'T-shirt', 'abagore nabagore', 4, '$6 ', '0000-00-00 00:00:00'),
(5, 'Underwear', 'abagore', 3, '$34 ', '0000-00-00 00:00:00'),
(6, 'Skirt', 'abagabo', 4, '$54 ', '0000-00-00 00:00:00'),
(7, 'shorts', 'abagore', 3, '$38 ', '0000-00-00 00:00:00'),
(8, 'High heels', 'abagabo  ', 43, '$37 ', '0000-00-00 00:00:00'),
(9, 'Bra', 'abagore', 43, '$37 ', '0000-00-00 00:00:00'),
(10, 'Scarf', 'abagore', 43, '$37 ', '0000-00-00 00:00:00'),
(11, 'Hat', 'abagore', 2, '$37 ', '0000-00-00 00:00:00'),
(12, 'Gloves', 'abagabo', 34, '$37 ', '0000-00-00 00:00:00'),
(13, 'shirt', 'abagore', 43, '$37 ', '0000-00-00 00:00:00'),
(14, 'socks', 'abagabo  ', 34, '$37 ', '0000-00-00 00:00:00'),
(15, 'suit', 'abagore nabagore', 34, '$37 ', '0000-00-00 00:00:00'),
(16, 'jeans', 'abagore nabagore', 54, '$37 ', '0000-00-00 00:00:00'),
(17, 'hoodies', 'abagore', 65, '$37 ', '0000-00-00 00:00:00'),
(18, 'cap', 'abagore', 435, '$37 ', '0000-00-00 00:00:00'),
(19, 'flip flops', 'abagabo', 54, '$37 ', '0000-00-00 00:00:00'),
(20, 'suitcase', 'abagabo', 4354, '$36 ', '0000-00-00 00:00:00'),
(21, 'trousers', 'abagabo', 3, '$36 ', '0000-00-00 00:00:00'),
(22, 'jacket', 'abagabo nabagore', 53, '$36 ', '0000-00-00 00:00:00'),
(23, 'casual', 'abagabo', 543, '$36 ', '0000-00-00 00:00:00'),
(24, 'polo shirt', 'abagabo', 5, '$36 ', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `names` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` text NOT NULL,
  `message` text NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `names`, `email`, `subject`, `message`, `time`, `status`) VALUES
(1, 'pacifique', 'pacyuzu16@gmail.com', 'website', 'nawe urumwe nabo', '2024-01-20 15:24:23', 1),
(2, 'gentie', 'genti@gmail.com', 'mountains', 'you move mountains', '2024-01-20 21:16:53', NULL),
(3, 'today', 'today@gmail.com', 'ai', 'ai is going to change lives', '2024-01-20 21:17:14', NULL),
(4, 'eminem', 'eminem@gmail.com', 'little lady', 'your website need a little more advancements', '2024-01-21 06:32:14', NULL),
(5, 'umwari mwiza', 'umwari@gmail.com', 'turabaramutsa', 'Muraho mbanjye kubasuhuza mumeze gute?', '2024-01-22 11:07:01', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `CustomerId` int(3) DEFAULT NULL,
  `Fname` varchar(9) DEFAULT NULL,
  `lname` varchar(7) DEFAULT NULL,
  `address` varchar(9) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`CustomerId`, `Fname`, `lname`, `address`) VALUES
(111, 'baranoma', 'eppa', 'kigali'),
(112, 'barafinda', 'fol', 'rusizi'),
(113, 'keza', 'fowre', 'ruhonda'),
(114, 'keke', 'kezaku', 'buhondo'),
(115, 'kabi', 'kazak', 'burisa'),
(116, 'kanti', 'sixwe', 'buriza'),
(117, 'kantu', 'sixbelt', 'ruhango'),
(118, 'yamu', 'paci', 'gasabo'),
(119, 'yambu', 'eme', 'nyaru'),
(120, 'umu', 'ama', 'byaru'),
(121, 'umuki', 'yuyui', 'nduba'),
(122, 'bumu', 'kaei', 'nyabugogo'),
(123, 'yari', 'zaku', 'yuhi');

-- --------------------------------------------------------

--
-- Table structure for table `full_transactions_products`
--

CREATE TABLE `full_transactions_products` (
  `clothesId` int(2) DEFAULT NULL,
  `price` varchar(4) DEFAULT NULL,
  `returned?` varchar(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `full_transactions_products`
--

INSERT INTO `full_transactions_products` (`clothesId`, `price`, `returned?`) VALUES
(17, '$37 ', 'yes'),
(18, '$37 ', 'no'),
(19, '$36 ', 'yes'),
(20, '$36 ', 'no'),
(21, '$36 ', 'yes'),
(22, '$36 ', 'no'),
(23, '$36 ', 'yes'),
(24, '$43 ', 'no');

-- --------------------------------------------------------

--
-- Table structure for table `in_carts`
--

CREATE TABLE `in_carts` (
  `ClothesId` int(1) DEFAULT NULL,
  `SellerId` int(4) DEFAULT NULL,
  `CustomerId` int(3) DEFAULT NULL,
  `date` varchar(8) DEFAULT NULL,
  `Size` int(2) DEFAULT NULL,
  `Desciption` varchar(9) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `in_carts`
--

INSERT INTO `in_carts` (`ClothesId`, `SellerId`, `CustomerId`, `date`, `Size`, `Desciption`) VALUES
(1, 1111, 117, '3/3/2023', 32, 'asap'),
(2, 2222, 118, '4/3/2023', 32, 'the last '),
(3, 3333, 119, '3/9/2023', 1, 'one more'),
(4, 4444, 120, '3/3/2023', 4, 'last'),
(5, 5555, 121, '4/3/2023', 3, 'more'),
(6, 6666, 122, '3/9/2023', 4, 'one more'),
(7, 7777, 123, '3/3/2023', 5, 'tow');

-- --------------------------------------------------------

--
-- Table structure for table `news_letter`
--

CREATE TABLE `news_letter` (
  `id` int(11) NOT NULL,
  `email` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `news_letter`
--

INSERT INTO `news_letter` (`id`, `email`) VALUES
(1, 'p@gmail.com'),
(2, 'cyu@gmail.com'),
(3, 'ma@gmail.com'),
(4, 'niyonkuru@gma'),
(5, 'umwani@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `online_sellers`
--

CREATE TABLE `online_sellers` (
  `SellerId` int(4) DEFAULT NULL,
  `Selle names` varchar(17) DEFAULT NULL,
  `Department` varchar(10) DEFAULT NULL,
  `address` varchar(8) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `online_sellers`
--

INSERT INTO `online_sellers` (`SellerId`, `Selle names`, `Department`, `address`) VALUES
(1111, 'Mukamwiza gorethe', 'clothes', 'kinyinya'),
(2222, 'Mwiza marting', 'hats', 'gatsata'),
(3333, 'maketin silas', 'shoes', 'gisozi'),
(4444, 'sibomana keaz', 'baces', 'kana'),
(5555, 'fuzi mupi', 'shirts', 'muhazi'),
(6666, 'muipi gianti', 'trausers', 'kicukiro'),
(7777, 'yata pita', 'underwares', 'ruhango');

-- --------------------------------------------------------

--
-- Table structure for table `payed_carts`
--

CREATE TABLE `payed_carts` (
  `CartId` int(2) DEFAULT NULL,
  `Customerid` int(3) DEFAULT NULL,
  `sellerid` int(4) DEFAULT NULL,
  `date payed` varchar(10) DEFAULT NULL,
  `clothesId` int(2) DEFAULT NULL,
  `received?` varchar(3) DEFAULT NULL,
  `returned` varchar(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `payed_carts`
--

INSERT INTO `payed_carts` (`CartId`, `Customerid`, `sellerid`, `date payed`, `clothesId`, `received?`, `returned`) VALUES
(22, 111, 1111, '12/1/23', 11, 'no', 'no'),
(33, 112, 2222, '13/01/2023', 12, 'yes', 'no '),
(44, 113, 3333, '12/2/23', 13, 'yes', 'no'),
(55, 114, 4444, '13/01/2024', 14, 'no', 'no'),
(66, 115, 5555, '12/3/23', 15, 'yes', 'no'),
(77, 116, 6666, '13/01/2025', 16, 'yes', 'yes'),
(88, 117, 7777, '12/4/23', 17, 'yes', 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `names` varchar(255) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` int(11) DEFAULT NULL,
  `status` int(1) DEFAULT NULL,
  `role` varchar(20) DEFAULT NULL,
  `createdAt` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `names`, `gender`, `email`, `password`, `status`, `role`, `createdAt`) VALUES
(12, 'pacifique', '1', 'pacyuzu16@gmail.com', 123, 1, '1', '2024-01-21 11:05:19'),
(16, 'Mukasinayobye Gloria', '2', 'Mukasinayobye@gmail.com', 123, 2, '2', '2024-01-23 19:27:37'),
(17, 'Niyonkuru aime', '1', 'Niyonkuru@gmail.com', 123, 2, '2', '2024-01-23 19:27:49'),
(18, 'bijoux aline', '2', 'aline@gmail.com', 123, 2, '2', '2024-01-23 19:27:59'),
(19, 'barafinda', '2', 'barafinda@gmail.com', 123, 2, '2', '2024-01-23 19:28:10'),
(20, 'Kamana Francois', '1', 'Umwali@gmail.com', 123, 2, '2', '2024-01-23 19:27:11');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news_letter`
--
ALTER TABLE `news_letter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `news_letter`
--
ALTER TABLE `news_letter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
