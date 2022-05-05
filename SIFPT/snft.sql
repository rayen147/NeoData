-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 27, 2022 at 04:03 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `snft`
--

-- --------------------------------------------------------

--
-- Table structure for table `offre`
--

CREATE TABLE `offre` (
  `Points` int(11) NOT NULL,
  `Delais` int(11) NOT NULL,
  `Num_abonnement` int(11) NOT NULL,
  `CIN` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `offre`
--

INSERT INTO `offre` (`Points`, `Delais`, `Num_abonnement`, `CIN`) VALUES
(1000, 1461, 284, 123456789),
(690, 366, 285, 123456789),
(690, 366, 286, 123456789),
(690, 366, 287, 123456789),
(690, 366, 288, 123456789),
(690, 366, 289, 123456789),
(690, 731, 290, 123456789),
(690, 731, 291, 123456789),
(1743, 731, 292, 123456789),
(1824, 1096, 293, 123456789);

-- --------------------------------------------------------

--
-- Table structure for table `passenger_details`
--

CREATE TABLE `passenger_details` (
  `CIN` int(10) NOT NULL,
  `Source` varchar(100) NOT NULL,
  `Destination` varchar(100) NOT NULL,
  `Train_name` varchar(30) NOT NULL,
  `Date` date NOT NULL,
  `N_Jours` int(11) NOT NULL,
  `Arrival` time NOT NULL,
  `Price` varchar(10000) NOT NULL,
  `ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `passenger_details`
--

INSERT INTO `passenger_details` (`CIN`, `Source`, `Destination`, `Train_name`, `Date`, `N_Jours`, `Arrival`, `Price`, `ID`) VALUES
(2147483647, 'Tous', 'Tous', '', '0000-00-00', 1826, '00:00:00', '913000', 325),
(123456789, 'Tous', 'Tous', '', '0000-00-00', 0, '00:00:00', '0', 326),
(123456789, 'Tous', 'Tous', '', '0000-00-00', 1, '00:00:00', '500', 327),
(123456789, 'Tous', 'Tous', '', '0000-00-00', 1096, '00:00:00', '548000', 328),
(123456789, 'Tous', 'Tous', '', '0000-00-00', 1096, '00:00:00', '548000', 329),
(123456789, 'Tous', 'Tous', '', '0000-00-00', 1096, '00:00:00', '548000', 330),
(123456789, 'Tous', 'Tous', '', '0000-00-00', 731, '00:00:00', '365500', 331),
(123456789, 'Tous', 'Tous', '', '0000-00-00', 1461, '00:00:00', '730500', 332),
(123456789, 'Tous', 'Tous', '', '0000-00-00', 366, '00:00:00', '6588000', 333),
(123456789, 'Tous', 'Tous', '', '0000-00-00', 366, '00:00:00', '6588000', 334),
(123456789, 'Tous', 'Tous', '', '0000-00-00', 366, '00:00:00', '6588000', 335),
(123456789, 'Tous', 'Tous', '', '0000-00-00', 366, '00:00:00', '6588000', 336),
(123456789, 'Tous', 'Tous', '', '0000-00-00', 366, '00:00:00', '6588000', 337),
(123456789, 'Tous', 'Tous', '', '0000-00-00', 731, '00:00:00', '4020500', 338),
(123456789, 'Tous', 'Tous', '', '0000-00-00', 731, '00:00:00', '40205', 339),
(123456789, 'Tous', 'Tous', '', '0000-00-00', 731, '00:00:00', '51170', 340),
(123456789, 'Tous', 'Tous', '', '0000-00-00', 731, '00:00:00', '51170', 341),
(123456789, 'Tous', 'Tous', '', '0000-00-00', 731, '00:00:00', '51170', 342),
(123456789, 'Tous', 'Tous', '', '0000-00-00', 731, '00:00:00', '51170', 343),
(123456789, 'Tous', 'Tous', '', '0000-00-00', 731, '00:00:00', '51170', 344),
(123456789, 'Tous', 'Tous', '', '0000-00-00', 731, '00:00:00', '51170', 345),
(123456789, 'Tous', 'Tous', '', '0000-00-00', 731, '00:00:00', '51170', 346),
(123456789, 'Tous', 'Tous', '', '0000-00-00', 1096, '00:00:00', '76720', 347);

-- --------------------------------------------------------

--
-- Table structure for table `search_details`
--

CREATE TABLE `search_details` (
  `ID` int(11) NOT NULL,
  `Start` varchar(100) NOT NULL,
  `Destination` varchar(100) NOT NULL,
  `Train` varchar(50) NOT NULL,
  `ArrivalTime` time NOT NULL,
  `Duration` varchar(10) NOT NULL,
  `Stops` varchar(20) DEFAULT NULL,
  `Price` int(15) NOT NULL,
  `Seats` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `search_details`
--

INSERT INTO `search_details` (`ID`, `Start`, `Destination`, `Train`, `ArrivalTime`, `Duration`, `Stops`, `Price`, `Seats`) VALUES
(171, 'eeeeeeeeee', 'eeeeeeeeeeeeeeeeeee', 'TGM', '00:00:00', '02:20', 'One-Stop', 500, 500);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `offre`
--
ALTER TABLE `offre`
  ADD PRIMARY KEY (`Num_abonnement`),
  ADD UNIQUE KEY `Num_abonnement` (`Num_abonnement`),
  ADD UNIQUE KEY `Num_abonnement_3` (`Num_abonnement`),
  ADD KEY `Num_abonnement_2` (`Num_abonnement`),
  ADD KEY `Num_abonnement_4` (`Num_abonnement`);

--
-- Indexes for table `passenger_details`
--
ALTER TABLE `passenger_details`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `search_details`
--
ALTER TABLE `search_details`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `ID` (`ID`),
  ADD KEY `ID_2` (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `offre`
--
ALTER TABLE `offre`
  MODIFY `Num_abonnement` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=294;

--
-- AUTO_INCREMENT for table `passenger_details`
--
ALTER TABLE `passenger_details`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=348;

--
-- AUTO_INCREMENT for table `search_details`
--
ALTER TABLE `search_details`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=180;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
