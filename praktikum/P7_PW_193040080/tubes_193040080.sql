-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 04, 2020 at 11:11 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tubes_193040080`
--

-- --------------------------------------------------------

--
-- Table structure for table `apparel`
--

CREATE TABLE `apparel` (
  `id` int(11) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `jenis` varchar(30) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `brand` varchar(50) NOT NULL,
  `bahan` varchar(30) NOT NULL,
  `ukuran` varchar(20) NOT NULL,
  `deskripsi` varchar(250) NOT NULL,
  `harga` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `apparel`
--

INSERT INTO `apparel` (`id`, `gambar`, `jenis`, `nama`, `brand`, `bahan`, `ukuran`, `deskripsi`, `harga`) VALUES
(1, '1.png', 'T-shirt', 'Shining Bright Food T-shirt - Khaki', 'Shining Bright', 'Katun', 'M, L, XL', '-Cotton combed 24s<br>\r\n-Plastisol Print<br>\r\n-Oversized Style', 120000),
(2, '2.png', 'T-shirt', 'Shining Bright Homeland Tshirt - Yellow', 'Shining Bright', 'Katun', 'M, L, XL', '-Cotton combed 24s<br>-Plastisol Print<br>-Oversized Style', 120000),
(3, '3.png', 'T-shirt', 'Sch Male T-shirt Bolt SS Navy Blue', 'Sch.', 'Katun', 'S, M, L, XL', 'Cotton combed 24s', 125000),
(4, '4.png', 'T-shirt', 'Wadezig! Male T-shirt T-Rex - Grey', 'WADEZIG!', 'Katun', 'S, M, L, XL', '100% ringspun cotton T-shirt with short sleeves and graphic print.', 125000),
(5, '5.png', 'Hoodie', 'CYCLED HOOD NBL Pullover Hoodie - Navy', 'unkl347', 'Katun Fleece', 'S, M, L', '-Bahan katun fleece Navy Blue<br>\r\n-Sablon grafis di punggung<br>\r\n-Bordir grafis di depan<br>\r\n-Hoodie dengan drawstring', 340000),
(6, '6.png', 'Hoodie', 'DREAMBIRDS MAHAKALA PULLOVER HOODIE BLACK', 'Dreambirds', 'Katun Fleece', 'S, M, L, XL', '-Cotton combed 24s<br>\r\n-Plastisol Print<br>\r\n-Oversized Style', 319000),
(7, '7.png', 'Bomber Jacket', 'DARK OWL SQUAD', 'Dreambirds', 'Fleece', 'M, L, XL', '-DARK OWL SQUAD<br>\r\n-REVERSIBLE BOMBER JACKET + NEW LOGO BOX + STICKER + FREE ARTWORK SKETCH', 599000),
(8, '8.png', 'Celana', 'Argyle', 'Screamous', 'Katun', '28, 30, 32, 34', '-Slim Fit Cutting<br>-2 Backside Pockets<br>-2 Frontside Pockets with Penny Pocket and Rivet<br>-Stretch Material<br>-SCREAMOUS Woven Label on Back', 258750),
(9, '9.png', 'Polo shirt', 'Crown Line Green', 'Screamous', 'Katun', 'S, M, L, XL', '-Slim Fit Cutting<br>\r\n-Cotton CVC 24’s Material<br>\r\n-Crown Logo Embriodery<br>\r\n-SCREAMOUS Woven Label on left Bottom', 116250),
(10, '10.png', 'T-shirt', 'T-Shirt Web Programming Unpas', 'KATAJI', 'Katun', 'S, M, L, XL', '-Cotton combed 30s<br>\r\n-Plastisol Print<br>\r\n-Size lokal', 125000),
(22, '11.jpg', 'Jacket', 'WOODY WBJ RYL BLU-DRK BRW', 'Sch.', 'Taslan', 'S, M, L, XL', '-a<br>\r\n-b<br>\r\n-c', 500000),
(28, '12.jpg', 'T-shirt', 'Helliant', 'Screamous', 'Katun', 'S, M', 'Regular Cutting<br>\r\nPlastisol Printing Ink<br>\r\nCotton Combed 30?s Material<br>\r\nDo Not iron on Print<br><br>\r\nKaos lengan pendek dengan bahan Katun dan Sablon Plastisol, Nyaman untuk penggunaan sehari-hari.', 140000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `apparel`
--
ALTER TABLE `apparel`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `apparel`
--
ALTER TABLE `apparel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
