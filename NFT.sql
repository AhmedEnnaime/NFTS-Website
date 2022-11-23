-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 23, 2022 at 09:56 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `NFT`
--

-- --------------------------------------------------------

--
-- Table structure for table `collection`
--

CREATE TABLE `collection` (
  `id` int(11) NOT NULL,
  `name` varchar(80) NOT NULL,
  `artiste` varchar(80) NOT NULL,
  `img` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `collection`
--

INSERT INTO `collection` (`id`, `name`, `artiste`, `img`, `date`) VALUES
(70, 'Nitao', 'jalal', 'Unknown.jpg', '2022-11-21 09:53:57'),
(71, 'Boratos', 'karim', 'e.jpg', '2022-11-21 09:55:04'),
(72, 'World cup', 'Ahmed', 's.jpg', '2022-11-21 09:55:35'),
(73, 'Bordapes', 'Abdelkrim', 'NFT Design.jpg', '2022-11-21 10:04:30'),
(74, 'Nipton', 'El harite', 'r.jpg', '2022-11-21 10:05:17'),
(75, 'Vector', 'l9irch', 'c.png', '2022-11-21 10:08:47'),
(76, 'DarkSoul', 'kanban', 'o.jpg', '2022-11-21 10:12:35'),
(77, 'Drip Ballers', 'la7ya', 'Pinterest.jpg', '2022-11-21 10:26:04');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `firstname`, `lastname`, `email`, `phone`, `message`) VALUES
(1, 'Ahmed', 'Ennaime', 'ahmedennaime10@gmail.com', '0682622717', 'whcuenwufe'),
(2, 'Tcnce', 'wevev', 'reverb@gmail.com', 'erbreb', 'reberbreb');

-- --------------------------------------------------------

--
-- Table structure for table `nft`
--

CREATE TABLE `nft` (
  `id` int(11) NOT NULL,
  `name` varchar(80) NOT NULL,
  `collection_id` int(11) NOT NULL,
  `description` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `price` double NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp(),
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nft`
--

INSERT INTO `nft` (`id`, `name`, `collection_id`, `description`, `img`, `price`, `date`, `user_id`) VALUES
(32, 'Messi', 72, 'qehiucheqwuc', 'goat.jpg', 3500, '2022-11-21 11:20:14', 6),
(33, 'Kyoto', 74, 'ceuhciuerhwv', 'r4.jpg', 120, '2022-11-21 18:18:02', 6),
(34, 'KDB', 75, 'uhiuhiojoij', 'e3.png', 654, '2022-11-21 18:18:25', 6),
(35, 'Pedri', 70, 'wvrvrwbrtb', 'l.png', 500, '2022-11-21 18:18:58', 6),
(36, 'Gavi', 73, 'cewacerqvre', 'b.jpg', 775, '2022-11-21 18:19:22', 6),
(37, 'Xavi', 72, 'vrewvrwfvgf', 'k.jpg', 340, '2022-11-21 22:13:12', 6);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(70) NOT NULL,
  `password` varchar(70) NOT NULL,
  `birthday` date NOT NULL,
  `role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`, `birthday`, `role`) VALUES
(3, 'Hotgame', 'hotgame123@gmail.com', '$2y$12$1sA81y48P4GNm1e4LJJMPewz8UoDOjwmGA20a5cjJ8TNBizJyadvC', '2022-11-01', 1),
(5, 'ahmed client', 'ahmed@gmail.com', '$2y$12$DiRGJ4UmBnOanUdhv8lhgOcXFKb/7xuLJgSdKBpvG2X/GFj2z/HxW', '2022-04-19', 1),
(6, 'Ahmed Ennaime', 'ahmedennaime20@gmail.com', '$2y$12$C3lA7jGc1buswaEldKtQGOQCD5R6Pk2NtY11oN21WYNZXFZ3Y8Zt.', '2002-04-19', 0),
(8, 'Kamal El harite', 'kamalelharite@gmail.com', '$2y$12$P/3UDXnk4ajMPBh6unjNgOOZcm88IFYxdUH9C/hZLXvTyH2xZaVZ.', '2022-11-01', 1),
(10, 'Jalal Lagdimi', 'jalal.zray9a@gmail.com', '$2y$12$fJ98IZ0CyG/P/PwXOJOeb.FlUsWpcQ005g4dRKua8DEKG3DdHBAbq', '2022-05-04', 1),
(11, 'Karim Mahjour', 'karim.mahjour@gmail.com', '$2y$12$6Y6po9n/uEvytP7wHkAZ4OJ9juIt4NDUuXqEkBfBMHTPKQYj8l/Um', '2021-07-07', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `collection`
--
ALTER TABLE `collection`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nft`
--
ALTER TABLE `nft`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nft_ibfk_1` (`collection_id`),
  ADD KEY `nft_ibfk_2` (`user_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `collection`
--
ALTER TABLE `collection`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `nft`
--
ALTER TABLE `nft`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `nft`
--
ALTER TABLE `nft`
  ADD CONSTRAINT `nft_ibfk_1` FOREIGN KEY (`collection_id`) REFERENCES `collection` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `nft_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
