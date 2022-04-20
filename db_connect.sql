-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 20, 2022 at 11:00 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_connect`
--

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE `reservation` (
  `id` int(11) NOT NULL,
  `fName` varchar(50) NOT NULL,
  `fEmail` varchar(100) NOT NULL,
  `fPhone` varchar(11) NOT NULL,
  `fMovie` varchar(100) NOT NULL,
  `fDate` text NOT NULL,
  `fNumber` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`id`, `fName`, `fEmail`, `fPhone`, `fMovie`, `fDate`, `fNumber`) VALUES
(10, 'Maria Ioana', 'maria.ioana@gmail.com', '0712345678', 'Luca', '05.12.2021 at 6:30pm', 2),
(11, 'John Doe', 'johndoe@yahoo.com', '0789346512', 'Dune', '03.12.2021 at 9:00pm', 1),
(12, 'Andreea Ionescu', 'andreea.dede@gmail.com', '0725134578', 'The Addams Family 2', '29.11.2021 at 4:30pm', 1),
(13, 'Flavia Medrea', 'flaviamedrea@yah00.com', '0725914612', 'No Time To Die', '03.12.2021 at 9:00pm', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
