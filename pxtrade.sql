-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 24, 2021 at 03:35 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pxtrade`
--

-- --------------------------------------------------------

--
-- Table structure for table `addresses`
--

CREATE TABLE `addresses` (
  `id_no` int(11) NOT NULL,
  `wallets` varchar(255) DEFAULT NULL,
  `addresses` varchar(2048) DEFAULT NULL,
  `qrcode` varchar(4096) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `addresses`
--

INSERT INTO `addresses` (`id_no`, `wallets`, `addresses`, `qrcode`) VALUES
(1, 'Bitcoin', NULL, NULL),
(2, 'Ethereum', NULL, NULL),
(3, 'USD Coin', 'sdfgbcvvcbccxvx', 'cirrus.png'),
(4, 'Tron', NULL, NULL),
(5, 'Bscpad', 'xdrcftvgybhujimko', NULL),
(6, 'Shiba inu', NULL, NULL),
(7, 'Tether', NULL, NULL),
(8, 'Algorand', NULL, NULL),
(9, 'Kmushicoin', NULL, NULL),
(10, 'Cardence', NULL, NULL),
(11, 'Helium', NULL, NULL),
(12, 'Cryptomines', NULL, NULL),
(13, 'Ecomi', NULL, NULL),
(14, 'Robot Shib', NULL, NULL),
(15, 'Uniswap', NULL, NULL),
(16, 'Avalanche', NULL, NULL),
(17, 'Decentraland', NULL, NULL),
(18, 'Gravitoken', NULL, NULL),
(19, 'Chroma', NULL, NULL),
(20, 'Near', NULL, NULL),
(21, 'Filecoin', NULL, NULL),
(22, 'Cardano', NULL, NULL),
(23, 'Tether (TRC 20)', NULL, NULL),
(24, 'CHILIZ', NULL, NULL),
(25, 'Trias Token', NULL, NULL),
(26, 'Ibnb', NULL, NULL),
(27, 'Polkadot', NULL, NULL),
(28, 'Solana', NULL, NULL),
(29, 'LUNA', NULL, NULL),
(30, 'Helium', NULL, NULL),
(31, 'RaDAO', NULL, NULL),
(32, 'Radio Caca V2', NULL, NULL),
(33, 'One Share', NULL, NULL),
(34, 'Revomon', NULL, NULL),
(35, 'dydX', NULL, NULL),
(36, 'Scan DeFi V2', NULL, NULL),
(37, 'Binance Coin', NULL, NULL),
(38, 'Casper Network', NULL, NULL),
(39, 'Spinada Cash', NULL, NULL),
(40, 'Binance USD', NULL, NULL),
(41, 'Video Coin', NULL, NULL),
(42, 'Chainlink', 'xdrcftvgybhujimko', NULL),
(43, 'The Sandbox', NULL, NULL),
(44, 'Polygon', NULL, NULL),
(45, 'Binance Smart chain', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_no` int(11) NOT NULL,
  `firstname` varchar(255) DEFAULT NULL,
  `lastname` varchar(255) DEFAULT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_pass` varchar(255) NOT NULL,
  `address` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `phone` varchar(55) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `reg_date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_no`, `firstname`, `lastname`, `user_email`, `user_pass`, `address`, `city`, `country`, `phone`, `photo`, `reg_date`) VALUES
(1, 'P2P', 'xtrade', 'admin@p2pxtrade.com', '73acd9a5972130b75066c82595a1fae3', 'Enugu', 'Enugu', 'Australia', '', 'cirrus.png', '2021-12-23');

-- --------------------------------------------------------

--
-- Table structure for table `fund`
--

CREATE TABLE `fund` (
  `id_no` int(11) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `ftxn` varchar(512) DEFAULT NULL,
  `currency` varchar(255) DEFAULT NULL,
  `amount` decimal(19,9) DEFAULT NULL,
  `fproof` varchar(255) DEFAULT NULL,
  `fcomment` varchar(1024) DEFAULT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'pending',
  `request_date` date DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fund`
--

INSERT INTO `fund` (`id_no`, `user_email`, `ftxn`, `currency`, `amount`, `fproof`, `fcomment`, `status`, `request_date`) VALUES
(8, 'enochdavid8@gmail.com', 'TXN427417', 'Algorand', '45.000000000', 'body-bg1.jpg', 'I believe the trade will go well', 'approved', '2021-12-22'),
(9, 'enochdavid8@gmail.com', 'TXN461164', 'USD Coin', '12.000000000', 'body-bg1.jpg', 'I believe the trade will go well', 'approved', '2021-12-22'),
(11, 'enochdavid8@gmail.com', 'TXN334893', 'Tron', '12.000000000', NULL, NULL, 'pending', '2021-12-24'),
(12, 'enochdavid8@gmail.com', 'TXN767641', 'Cardence', '45.000000000', NULL, NULL, 'pending', '2021-12-24'),
(13, 'enochdavid8@gmail.com', 'TXN293059', 'USD Coin', '45.000000000', NULL, NULL, 'pending', '2021-12-24'),
(14, 'enochdavid8@gmail.com', 'TXN328078', 'USD Coin', '7.000000000', NULL, NULL, 'pending', '2021-12-24'),
(15, 'enochdavid8@gmail.com', 'TXN288254', 'Bscpad', '7.000000000', NULL, NULL, 'pending', '2021-12-24'),
(16, 'enochdavid8@gmail.com', 'TXN761345', 'Bscpad', '7877.000000000', NULL, NULL, 'pending', '2021-12-24');

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `id_no` int(11) NOT NULL,
  `txn` varchar(25) DEFAULT NULL,
  `user_email` varchar(255) DEFAULT NULL,
  `first_cur` varchar(512) DEFAULT NULL,
  `second_cur` varchar(512) DEFAULT NULL,
  `seller_amount` decimal(18,9) DEFAULT NULL,
  `buyer_amount` decimal(18,9) DEFAULT NULL,
  `role` varchar(512) DEFAULT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'pending',
  `transact_date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`id_no`, `txn`, `user_email`, `first_cur`, `second_cur`, `seller_amount`, `buyer_amount`, `role`, `status`, `transact_date`) VALUES
(7, 'SDFDGH', 'enochdavid8@gmail.com', 'Tether', 'Bscpad', '2000.000000000', '700.000000000', 'seller', 'approved', '2021-12-22');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_no` int(11) NOT NULL,
  `firstname` varchar(255) DEFAULT NULL,
  `lastname` varchar(255) DEFAULT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_pass` varchar(255) NOT NULL,
  `address` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `phone` varchar(55) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `reg_date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_no`, `firstname`, `lastname`, `user_email`, `user_pass`, `address`, `city`, `country`, `phone`, `photo`, `reg_date`) VALUES
(7, 'David', 'Okoli', 'enochdavid8@gmail.com', '2811c31dbdc38089895bb55630210b44', NULL, NULL, NULL, NULL, 'blockchain-mockup-10a.png', '2021-12-20');

-- --------------------------------------------------------

--
-- Table structure for table `wallet`
--

CREATE TABLE `wallet` (
  `id_no` int(11) NOT NULL,
  `user_email` varchar(255) DEFAULT NULL,
  `bitcoin` varchar(512) DEFAULT NULL,
  `ethereum` varchar(512) DEFAULT NULL,
  `binance` varchar(512) DEFAULT NULL,
  `usdt` varchar(512) DEFAULT NULL,
  `token` varchar(512) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `wallet`
--

INSERT INTO `wallet` (`id_no`, `user_email`, `bitcoin`, `ethereum`, `binance`, `usdt`, `token`) VALUES
(8, 'enochdavid8@gmail.com', NULL, NULL, NULL, NULL, NULL),
(9, 'enochdavid8@gmail.com', NULL, NULL, NULL, NULL, NULL),
(10, 'enochdavid8@gmail.com', NULL, NULL, NULL, NULL, NULL),
(11, 'email@email.com', NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `withdraw`
--

CREATE TABLE `withdraw` (
  `id_no` int(11) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `wtxn` varchar(512) DEFAULT NULL,
  `wcurrency` varchar(255) DEFAULT NULL,
  `wamount` decimal(19,9) DEFAULT NULL,
  `wallet_address` varchar(512) DEFAULT NULL,
  `wstatus` varchar(255) NOT NULL DEFAULT 'pending',
  `withdraw_request_date` date DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addresses`
--
ALTER TABLE `addresses`
  ADD PRIMARY KEY (`id_no`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_no`);

--
-- Indexes for table `fund`
--
ALTER TABLE `fund`
  ADD PRIMARY KEY (`id_no`);

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`id_no`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_no`);

--
-- Indexes for table `wallet`
--
ALTER TABLE `wallet`
  ADD PRIMARY KEY (`id_no`);

--
-- Indexes for table `withdraw`
--
ALTER TABLE `withdraw`
  ADD PRIMARY KEY (`id_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addresses`
--
ALTER TABLE `addresses`
  MODIFY `id_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `fund`
--
ALTER TABLE `fund`
  MODIFY `id_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `id_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `wallet`
--
ALTER TABLE `wallet`
  MODIFY `id_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `withdraw`
--
ALTER TABLE `withdraw`
  MODIFY `id_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
