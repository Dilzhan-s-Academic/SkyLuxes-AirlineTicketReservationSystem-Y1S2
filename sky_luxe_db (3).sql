-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 06, 2024 at 09:22 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sky_luxe_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `aircraft`
--

CREATE TABLE `aircraft` (
  `AirCraft_ID` int(11) NOT NULL,
  `Type` varchar(50) NOT NULL,
  `Manufacturer` varchar(50) NOT NULL,
  `Model` varchar(50) NOT NULL,
  `Total_of_Seats` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `aircraft`
--

INSERT INTO `aircraft` (`AirCraft_ID`, `Type`, `Manufacturer`, `Model`, `Total_of_Seats`) VALUES
(1, 'Boeing 737', 'Boeing', '737-800', 189),
(2, 'Airbus A320', 'Airbus', 'A320neo', 180),
(3, 'Boeing 777', 'Boeing', '777-300ER', 396),
(4, 'Airbus A350', 'Airbus', 'A350-900', 325);

-- --------------------------------------------------------

--
-- Table structure for table `airport`
--

CREATE TABLE `airport` (
  `Airport_ID` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Country` varchar(50) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `IATA_Codr` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `airport`
--

INSERT INTO `airport` (`Airport_ID`, `Name`, `Country`, `Address`, `IATA_Codr`) VALUES
(12, 'Heathrow Airport', 'United Kingdom', 'Longford, Hounslow,dsfv London', 'LHR'),
(14, 'Los Angeles International Airport', 'United States', '1 World Way, Los Angeles, California', 'LAX'),
(15, 'Beijing Capital International Airport', 'China', 'Beijing Capital Airport Road, Chaoyang District, Beijing', 'PEK'),
(16, 'Dubai International Airport', 'United Arab Emirates', 'Al Twar, Dubai', 'DXB'),
(17, 'Tokyo Haneda Airport', 'Japan', 'Haneda Airport, Ota City, Tokyo', 'HND'),
(18, 'Charles de Gaulle Airport', 'France', 'Aéroport Roissy Charles de Gaulle, Roissy-en-France', 'CDG');

-- --------------------------------------------------------

--
-- Table structure for table `flight`
--

CREATE TABLE `flight` (
  `Flight_ID` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Departure_DateTime` datetime NOT NULL,
  `Arrival_DateTime` datetime NOT NULL,
  `Status` varchar(30) NOT NULL,
  `Aircraft_ID` int(11) NOT NULL,
  `Destination_Airport_ID` int(11) NOT NULL,
  `Arrival_Airport_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `flight`
--

INSERT INTO `flight` (`Flight_ID`, `Name`, `Departure_DateTime`, `Arrival_DateTime`, `Status`, `Aircraft_ID`, `Destination_Airport_ID`, `Arrival_Airport_ID`) VALUES
(15, 'Pacific Link', '2024-04-05 13:17:00', '2024-05-03 13:17:00', 'Departed', 2, 18, 14),
(17, 'CHamih', '2024-05-07 22:52:00', '2024-05-09 22:53:00', 'On Time', 1, 15, 18),
(18, 'adfsdfas', '2024-05-23 03:49:00', '2024-05-18 02:47:00', 'Arriving Soon', 1, 18, 18);

-- --------------------------------------------------------

--
-- Table structure for table `inquary`
--

CREATE TABLE `inquary` (
  `InquaryID` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Subject` varchar(100) NOT NULL,
  `Message` varchar(255) NOT NULL,
  `Username` char(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `inquary`
--

INSERT INTO `inquary` (`InquaryID`, `Name`, `Email`, `Subject`, `Message`, `Username`) VALUES
(14, 'Thulya Rodrigo', 'sdadgs@dsg', 'dsgrgreh', ' ehyt ethrtnb tey', 'thulya12'),
(15, 'dqawre', 'adgfsfe@sfa', 'edtwertf', ' aetgwfcxz', NULL),
(16, 'Januda Silunika', 'Chamithdilli@gmail.com', 'SDFgh', ' dfghj,', 'thulya12');

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE `reservation` (
  `Reservation_ID` int(11) NOT NULL,
  `Booked_Date` datetime NOT NULL,
  `Status` varchar(10) NOT NULL,
  `Price` decimal(10,2) NOT NULL,
  `Flight_ID` int(11) NOT NULL,
  `Aircraft_ID` int(11) NOT NULL,
  `Seat_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `solution`
--

CREATE TABLE `solution` (
  `solutionID` int(11) NOT NULL,
  `InquaryID` int(11) NOT NULL,
  `Subject` varchar(100) NOT NULL,
  `Message` varchar(255) NOT NULL,
  `AdminID` char(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `solution`
--

INSERT INTO `solution` (`solutionID`, `InquaryID`, `Subject`, `Message`, `AdminID`) VALUES
(14, 15, 'asada', 'adadsas', 'dilzhan'),
(15, 15, 'wtwegc', 'vasgstsdvbf', 'dilzhan'),
(16, 16, 'dsgsdgc', 'agddcxate', 'dilzhan'),
(17, 14, 'dgdsxcvdtzdscvx', 'afdcaetgc', 'dilzhan'),
(18, 16, 'dgzvcxdwasv', 'asfsfdvxcdf', 'dilzhan');

-- --------------------------------------------------------

--
-- Table structure for table `subscription_list`
--

CREATE TABLE `subscription_list` (
  `Subscription_ID` int(11) NOT NULL,
  `Email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `subscription_list`
--

INSERT INTO `subscription_list` (`Subscription_ID`, `Email`) VALUES
(1, 'chamith@email.com'),
(2, 'chamith@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `Username` char(12) NOT NULL,
  `FirstName` varchar(30) NOT NULL,
  `LastName` varchar(30) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `Mobile` varchar(20) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Password` char(16) NOT NULL,
  `Is_Admin` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`Username`, `FirstName`, `LastName`, `Address`, `Mobile`, `Email`, `Password`, `Is_Admin`) VALUES
('dhanoshi12', 'Dhanoshi', 'Dilhara', 'Mawanella', '+94712212212', 'example@gmail.com', '22221111', 0),
('dilzhan', 'Dilzhan', 'Yapa', '24wqr8/9,Kadusfdsgdsgwel ', '+9478534534', 'cafjshet@gmail.com', '11112222', 1),
('januda', 'Januda', 'Silunika', 'Piliyandala', '+9470121212121', 'sample@mail.com', '11112222', 0),
('mithila12', 'Mithila', 'Dissanayake', 'Horana', '+9472262662', 'email@email.com', '20032003', 0),
('thulya12', 'Thulya', 'Rodrigo', 'Panadura', '+94771221221', 'thulya123@email.com', '11112222', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aircraft`
--
ALTER TABLE `aircraft`
  ADD PRIMARY KEY (`AirCraft_ID`);

--
-- Indexes for table `airport`
--
ALTER TABLE `airport`
  ADD PRIMARY KEY (`Airport_ID`);

--
-- Indexes for table `flight`
--
ALTER TABLE `flight`
  ADD PRIMARY KEY (`Flight_ID`),
  ADD KEY `Arrivval_Airport_FK` (`Destination_Airport_ID`),
  ADD KEY `Destination_Airport_FK` (`Arrival_Airport_ID`),
  ADD KEY `Flight_FK1` (`Aircraft_ID`);

--
-- Indexes for table `inquary`
--
ALTER TABLE `inquary`
  ADD PRIMARY KEY (`InquaryID`),
  ADD KEY `Inquary_FK` (`Username`);

--
-- Indexes for table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`Reservation_ID`);

--
-- Indexes for table `solution`
--
ALTER TABLE `solution`
  ADD PRIMARY KEY (`solutionID`,`InquaryID`),
  ADD KEY `Solution_FK` (`AdminID`),
  ADD KEY `Solution_FK2` (`InquaryID`);

--
-- Indexes for table `subscription_list`
--
ALTER TABLE `subscription_list`
  ADD PRIMARY KEY (`Subscription_ID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`Username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aircraft`
--
ALTER TABLE `aircraft`
  MODIFY `AirCraft_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `airport`
--
ALTER TABLE `airport`
  MODIFY `Airport_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `flight`
--
ALTER TABLE `flight`
  MODIFY `Flight_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `inquary`
--
ALTER TABLE `inquary`
  MODIFY `InquaryID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `Reservation_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `solution`
--
ALTER TABLE `solution`
  MODIFY `solutionID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `subscription_list`
--
ALTER TABLE `subscription_list`
  MODIFY `Subscription_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `flight`
--
ALTER TABLE `flight`
  ADD CONSTRAINT `Arrivval_Airport_FK` FOREIGN KEY (`Destination_Airport_ID`) REFERENCES `airport` (`Airport_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `Destination_Airport_FK` FOREIGN KEY (`Arrival_Airport_ID`) REFERENCES `airport` (`Airport_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `Flight_FK1` FOREIGN KEY (`Aircraft_ID`) REFERENCES `aircraft` (`AirCraft_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `inquary`
--
ALTER TABLE `inquary`
  ADD CONSTRAINT `Inquary_FK` FOREIGN KEY (`Username`) REFERENCES `user` (`Username`);

--
-- Constraints for table `solution`
--
ALTER TABLE `solution`
  ADD CONSTRAINT `Solution_FK` FOREIGN KEY (`AdminID`) REFERENCES `user` (`Username`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `Solution_FK2` FOREIGN KEY (`InquaryID`) REFERENCES `inquary` (`InquaryID`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
