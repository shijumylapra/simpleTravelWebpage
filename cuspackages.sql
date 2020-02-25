-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 12, 2019 at 07:56 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `travelskm`
--

-- --------------------------------------------------------

--
-- Table structure for table `cuspackages`
--

CREATE TABLE `cuspackages` (
  `PackageId` int(11) NOT NULL DEFAULT 0,
  `PkgName` varchar(50) CHARACTER SET utf8 NOT NULL,
  `PkgStartDate` datetime DEFAULT NULL,
  `PkgEndDate` datetime DEFAULT NULL,
  `PkgDesc` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `PkgBasePrice` decimal(19,4) NOT NULL,
  `PkgAgencyCommission` decimal(19,4) DEFAULT NULL,
  `Pictures` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cuspackages`
--

INSERT INTO `cuspackages` (`PackageId`, `PkgName`, `PkgStartDate`, `PkgEndDate`, `PkgDesc`, `PkgBasePrice`, `PkgAgencyCommission`, `Pictures`) VALUES
(1, 'Caribbean New Year', '2017-12-25 00:00:00', '2017-01-04 00:00:00', 'Cruise the Caribbean & Celebrate the New Year.', '4800.0000', '400.0000', 'images/Cruise1.jpg'),
(2, 'Polynesian Paradise', '2016-12-12 00:00:00', '2016-12-20 00:00:00', '8 Day All Inclusive Hawaiian Vacation', '3000.0000', '310.0000', 'images/island.png'),
(3, 'Asian Expedition', '2016-05-14 00:00:00', '2016-05-28 00:00:00', 'Airfaire, Hotel and Eco Tour.', '2800.0000', '300.0000', 'images/Asia.png'),
(4, 'European Vacation', '2016-11-01 00:00:00', '2016-11-14 00:00:00', 'Euro Tour with Rail Pass and Travel Insurance', '3000.0000', '280.0000', 'images/Europe.png');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
