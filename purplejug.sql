-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 15, 2016 at 08:42 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `purplejug`
--

-- --------------------------------------------------------

--
-- Table structure for table `creativeidea`
--

CREATE TABLE `creativeidea` (
  `customername` varchar(100) NOT NULL,
  `customeremail` varchar(100) NOT NULL,
  `idea` varchar(300) NOT NULL,
  `ideastatusid` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `orderbill`
--

CREATE TABLE `orderbill` (
  `id` int(20) NOT NULL,
  `name` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `address` varchar(50) NOT NULL,
  `phone` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orderbill`
--

INSERT INTO `orderbill` (`id`, `name`, `email`, `address`, `phone`) VALUES
(1, 'Gautham', 'g@g', '123Habi', '8939'),
(2, 'Gautham', 'Gautham@gmail', '123Habibullah', '8939'),
(3, 'Gau', 'g@gg', '123Tnagar', '8939'),
(4, 'ok', 'ok@g', 'ok', 'ok'),
(5, 'GauthamChelladurai', 'gauthamchellu@gmail.com', '2DPTR', '8939174306'),
(6, 'G C', 'gau@g', '2d, PTR', '1734');

-- --------------------------------------------------------

--
-- Table structure for table `orderproduct`
--

CREATE TABLE `orderproduct` (
  `id` int(20) NOT NULL,
  `orderbillid` int(20) NOT NULL,
  `productid` int(20) NOT NULL,
  `quantity` varchar(20) NOT NULL,
  `customtext` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orderproduct`
--

INSERT INTO `orderproduct` (`id`, `orderbillid`, `productid`, `quantity`, `customtext`) VALUES
(1, 1, 12, '1', ''),
(2, 2, 3, '1', ''),
(3, 2, 6, '2', ''),
(4, 3, 2, '2', ''),
(5, 4, 3, '1', ''),
(6, 4, 16, '1', 'Something'),
(7, 5, 6, '1', ''),
(8, 5, 8, '1', ''),
(9, 6, 16, '1', 'Alpha');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(10) NOT NULL,
  `name` varchar(30) NOT NULL,
  `description` varchar(4000) NOT NULL,
  `price` decimal(10,0) NOT NULL,
  `material` varchar(30) NOT NULL,
  `height` double NOT NULL,
  `customyn` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `description`, `price`, `material`, `height`, `customyn`) VALUES
(1, 'Soldier', 'A couple from the serene town of Coorg with elegant artwork', '299', 'Softwood', 7, 'N'),
(2, 'Heart Minion Heart', 'Minions handcrafted by traditional artisans', '333', 'Softwood', 5.5, 'N'),
(3, 'Penstand Minion', 'Minion with a holder for your pens and stationery. A lovely addition to your desk!', '369', 'Softwood', 5.5, 'N'),
(4, 'Minion', 'Minion seen on screen now in its mini avatar for you', '299', 'Softwood', 5.5, 'N'),
(5, 'Raja Rani', 'The King and Queen of Channapatna are looking forward to visit you!', '449', 'Softwood', 7.5, 'N'),
(6, 'Setu set', 'North meets south in these cute dolls', '299', 'Softwood', 7, 'N'),
(7, 'Jap couple', 'Konnichiwa - Greetings from the Japanese couple', '349', 'Softwood', 9, 'N'),
(8, 'Pot lady', 'Beautiful dolls carrying water in the pots', '299', 'Softwood', 7, 'N'),
(9, 'Andhra big', 'The simple farmer couple from the village', '349', 'Softwood', 7.5, 'N'),
(10, 'Andhra small', 'The simple farmer couple from the village', '249', 'Softwood', 6, 'N'),
(11, 'Grinding Lady', 'Two ladies grinding flour in the traditional way', '199', 'Softwood', 6, 'N'),
(12, 'Kathak Krishna', 'Krishna in a less seen avatar dressed to perform Kathali', '899', 'Softwood', 8, 'N'),
(13, 'Cute boys', 'A cute set of boys playing the instruments', '499', 'Softwood', 2.5, 'N'),
(14, 'Tanjore Dolls', 'The dancing Tanjore Dolls bring a sparkle to all those around it', '699', 'Paper Mache', 12, 'N'),
(15, 'Frame Dolls', 'Customised dolls with a message to your loved ones', '599', 'Softwood', 4, 'Y'),
(16, 'Alpha Dolls', 'Dolls with a letter on them to form any word! Play with it or Adore it!', '60', 'Softwood', 4, 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `productimage`
--

CREATE TABLE `productimage` (
  `id` int(10) NOT NULL,
  `productid` int(10) NOT NULL,
  `source` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `productimage`
--

INSERT INTO `productimage` (`id`, `productid`, `source`) VALUES
(1, 1, '/purplejug/images/productimages/1/a.jpg'),
(2, 2, '/purplejug/images/productimages/2/a.jpg'),
(3, 2, '/purplejug/images/productimages/2/b.jpg'),
(4, 2, '/purplejug/images/productimages/2/c.jpg'),
(5, 2, '/purplejug/images/productimages/2/d.jpg'),
(6, 2, '/purplejug/images/productimages/2/e.jpg'),
(7, 2, '/purplejug/images/productimages/2/f.jpg'),
(8, 3, '/purplejug/images/productimages/3/a.jpg'),
(9, 3, '/purplejug/images/productimages/3/b.jpg'),
(10, 4, '/purplejug/images/productimages/4/a.jpg'),
(11, 4, '/purplejug/images/productimages/4/b.jpg'),
(12, 4, '/purplejug/images/productimages/4/c.jpg'),
(13, 5, '/purplejug/images/productimages/5/a.jpg'),
(14, 5, '/purplejug/images/productimages/5/b.jpg'),
(15, 5, '/purplejug/images/productimages/5/c.jpg'),
(16, 6, '/purplejug/images/productimages/6/a.jpg'),
(17, 6, '/purplejug/images/productimages/6/b.jpg'),
(18, 7, '/purplejug/images/productimages/7/a.jpg'),
(19, 7, '/purplejug/images/productimages/7/b.jpg'),
(20, 8, '/purplejug/images/productimages/8/a.jpg'),
(21, 8, '/purplejug/images/productimages/8/b.jpg'),
(22, 8, '/purplejug/images/productimages/8/c.jpg'),
(23, 8, '/purplejug/images/productimages/8/d.jpg'),
(24, 8, '/purplejug/images/productimages/8/e.jpg'),
(25, 8, '/purplejug/images/productimages/8/f.jpg'),
(26, 8, '/purplejug/images/productimages/8/g.jpg'),
(27, 8, '/purplejug/images/productimages/8/h.jpg'),
(28, 8, '/purplejug/images/productimages/8/i.jpg'),
(29, 8, '/purplejug/images/productimages/8/j.jpg'),
(30, 9, '/purplejug/images/productimages/9/a.jpg'),
(31, 9, '/purplejug/images/productimages/9/b.jpg'),
(32, 10, '/purplejug/images/productimages/10/a.jpg'),
(33, 10, '/purplejug/images/productimages/10/b.jpg'),
(34, 11, '/purplejug/images/productimages/11/a.jpg'),
(35, 11, '/purplejug/images/productimages/11/b.jpg'),
(36, 12, '/purplejug/images/productimages/12/a.jpg'),
(37, 12, '/purplejug/images/productimages/12/b.jpg'),
(38, 13, '/purplejug/images/productimages/13/a.jpg'),
(39, 13, '/purplejug/images/productimages/13/b.jpg'),
(40, 14, '/purplejug/images/productimages/14/a.jpg'),
(41, 14, '/purplejug/images/productimages/14/b.jpg'),
(42, 14, '/purplejug/images/productimages/14/c.jpg'),
(43, 14, '/purplejug/images/productimages/14/d.jpg'),
(44, 14, '/purplejug/images/productimages/14/e.jpg'),
(45, 14, '/purplejug/images/productimages/14/f.jpg'),
(46, 14, '/purplejug/images/productimages/14/g.jpg'),
(47, 14, '/purplejug/images/productimages/14/h.jpg'),
(48, 14, '/purplejug/images/productimages/14/i.jpg'),
(49, 15, '/purplejug/images/productimages/15/a.jpg'),
(50, 15, '/purplejug/images/productimages/15/b.jpg'),
(51, 15, '/purplejug/images/productimages/15/c.jpg'),
(52, 15, '/purplejug/images/productimages/15/d.jpg'),
(53, 15, '/purplejug/images/productimages/15/e.jpg'),
(54, 15, '/purplejug/images/productimages/15/f.jpg'),
(55, 15, '/purplejug/images/productimages/15/g.jpg'),
(56, 15, '/purplejug/images/productimages/15/h.jpg'),
(57, 15, '/purplejug/images/productimages/15/i.jpg'),
(58, 16, '/purplejug/images/productimages/16/a.jpg'),
(59, 16, '/purplejug/images/productimages/16/b.jpg'),
(60, 16, '/purplejug/images/productimages/16/c.jpg'),
(61, 16, '/purplejug/images/productimages/16/d.jpg'),
(62, 16, '/purplejug/images/productimages/16/e.jpg'),
(63, 16, '/purplejug/images/productimages/16/f.jpg'),
(64, 16, '/purplejug/images/productimages/16/g.jpg'),
(65, 16, '/purplejug/images/productimages/16/h.jpg'),
(66, 16, '/purplejug/images/productimages/16/i.jpg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
