-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 03, 2022 at 01:44 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `stemmen`
--

-- --------------------------------------------------------

--
-- Table structure for table `partijen`
--

CREATE TABLE `partijen` (
  `PartijID` int(11) NOT NULL,
  `PartijeNaam` varchar(50) NOT NULL,
  `Leden` int(11) NOT NULL,
  `JaarOpgericht` date NOT NULL,
  `StaatVoor` varchar(500) NOT NULL,
  `RechtsLinks` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `partijen`
--

INSERT INTO `partijen` (`PartijID`, `PartijeNaam`, `Leden`, `JaarOpgericht`, `StaatVoor`, `RechtsLinks`) VALUES
(1, 'KNVB', 50, '2022-06-08', 'Voor alles en nogwat', 'Rechts?'),
(2, 'KNVB', 50, '2022-06-07', 'FDGHETJR', 'Rechts?'),
(3, 'KNVB', 50, '2022-06-07', 'FDGHETJR', 'Rechts?'),
(4, 'TCR', 50, '2022-06-01', 'Gelijke rechten', 'Links');

-- --------------------------------------------------------

--
-- Table structure for table `stemmers`
--

CREATE TABLE `stemmers` (
  `VerkiesID` int(11) NOT NULL,
  `Naam` varchar(25) NOT NULL,
  `Geboorte_datum` date NOT NULL,
  `Nationaliteit` varchar(30) NOT NULL,
  `Woonplaats` varchar(30) NOT NULL,
  `Postcode` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `verkiesbare`
--

CREATE TABLE `verkiesbare` (
  `VerkiesbareID` int(11) NOT NULL,
  `Naam` varchar(25) NOT NULL,
  `Geboorte_datum` date NOT NULL,
  `Nationaliteit` varchar(30) NOT NULL,
  `Woonplaats` varchar(30) NOT NULL,
  `Postcode` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `verkiesbare`
--

INSERT INTO `verkiesbare` (`VerkiesbareID`, `Naam`, `Geboorte_datum`, `Nationaliteit`, `Woonplaats`, `Postcode`) VALUES
(1, 'Vincent', '0000-00-00', '', '', ''),
(2, 'Vincent', '2003-07-17', 'Nederland', 'Rotterdam', '3077GB'),
(3, 'erica', '2004-08-16', 'cabo', 'Rotterdam', '3077GB');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `partijen`
--
ALTER TABLE `partijen`
  ADD PRIMARY KEY (`PartijID`);

--
-- Indexes for table `stemmers`
--
ALTER TABLE `stemmers`
  ADD PRIMARY KEY (`VerkiesID`);

--
-- Indexes for table `verkiesbare`
--
ALTER TABLE `verkiesbare`
  ADD PRIMARY KEY (`VerkiesbareID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `partijen`
--
ALTER TABLE `partijen`
  MODIFY `PartijID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `stemmers`
--
ALTER TABLE `stemmers`
  MODIFY `VerkiesID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `verkiesbare`
--
ALTER TABLE `verkiesbare`
  MODIFY `VerkiesbareID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
