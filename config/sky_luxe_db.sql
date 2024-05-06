-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 06, 2024 at 10:54 PM
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
(15, 'Airbus A321', 'Airbus', 'A321neo', 200),
(16, 'Boeing 787', 'Boeing', '787-9 Dreamliner', 290),
(17, 'Embraer E190', 'Embraer', 'E190-E2', 114),
(18, 'Bombardier CRJ900', 'Bombardier', 'CRJ900', 76),
(19, 'Cessna Citation X', 'Cessna', 'Citation X', 8);

-- --------------------------------------------------------

--
-- Table structure for table `airport`
--

CREATE TABLE `airport` (
  `Airport_ID` int(11) NOT NULL,
  `Airport_Name` varchar(50) NOT NULL,
  `Country` varchar(50) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `IATA_Codr` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `airport`
--

INSERT INTO `airport` (`Airport_ID`, `Airport_Name`, `Country`, `Address`, `IATA_Codr`) VALUES
(12, 'Heathrow Airport', 'United Kingdom', 'Longford, Hounslow,dsfv London', 'LHR'),
(14, 'Los Angeles International Airport', 'United States', '1 World Way, Los Angeles, California', 'LAX'),
(15, 'Beijing Capital International Airport', 'China', 'Beijing Capital Airport Road, Chaoyang District, Beijing', 'PEK'),
(16, 'Dubai International Airport', 'United Arab Emirates', 'Al Twar, Dubai', 'DXB'),
(17, 'Tokyo Haneda Airport', 'Japan', 'Haneda Airport, Ota City, Tokyo', 'HND'),
(18, 'Charles de Gaulle Airport', 'France', 'Aéroport Roissy Charles de Gaulle, Roissy-en-France', 'CDG'),
(19, 'John F. Kennedy International Airport', 'United States', 'JFK Access Rd, Jamaica, New York', 'JFK'),
(20, 'Sydney Kingsford Smith Airport', 'Australia', 'Sydney NSW 2020, Australia', 'SYD'),
(21, 'Indira Gandhi International Airport', 'India', 'New Delhi, Delhi', 'DEL'),
(22, 'Singapore Changi Airport', 'Singapore', 'Airport Blvd, Singapore', 'SIN'),
(23, 'O. R. Tambo International Airport', 'South Africa', '1 Jones Rd, Kempton Park, Johannesburg', 'JNB');

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
  `Departure_Airport_ID` int(11) NOT NULL,
  `Arrival_Airport_ID` int(11) NOT NULL,
  `Price` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `flight`
--

INSERT INTO `flight` (`Flight_ID`, `Name`, `Departure_DateTime`, `Arrival_DateTime`, `Status`, `Aircraft_ID`, `Departure_Airport_ID`, `Arrival_Airport_ID`, `Price`) VALUES
(29, 'Tokyo Safari II', '2024-05-01 01:51:00', '2024-05-02 01:51:00', 'Scheduled', 15, 17, 18, NULL),
(30, 'Dubai to India', '2024-05-09 01:54:00', '2024-05-10 01:54:00', 'Scheduled', 15, 16, 21, NULL),
(31, 'Sydney Connection', '2024-05-15 04:58:00', '2024-05-15 20:59:00', 'Scheduled', 17, 20, 22, NULL),
(32, 'Singapore Stopover', '2024-05-23 01:57:00', '2024-05-24 08:57:00', 'Scheduled', 18, 22, 12, NULL),
(33, 'Johannesburg Jaunt', '2024-05-18 05:59:00', '2024-05-09 04:00:00', 'Scheduled', 17, 12, 19, NULL);

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
(31, 'Thulya Rodrigo', 'example@mail.com', 'Special Assistance Request', ' I require special assistance due to a medical condition during my flight.', 'thulya12'),
(32, 'Dilzhan Yapa', 'it323234024@my.sliit.lk', 'Baggage Inquary', ' I lost my baggage on a recent flight. Can you assist me in locating it?', NULL),
(33, 'John', 'abcde@gmail.com', 'Flight Inquiry', ' I would like to inquire about flights from New York to London.', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `package_sales`
--

CREATE TABLE `package_sales` (
  `Eco` int(11) NOT NULL,
  `PreEco` int(11) NOT NULL,
  `Bussiness` int(11) NOT NULL,
  `FirstClass` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `package_sales`
--

INSERT INTO `package_sales` (`Eco`, `PreEco`, `Bussiness`, `FirstClass`) VALUES
(75, 40, 50, 4),
(180, 55, 55, 12),
(120, 60, 40, 8),
(50, 45, 30, 5),
(100, 20, 45, 9),
(195, 59, 60, 10);

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
  `Seat_ID` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`Reservation_ID`, `Booked_Date`, `Status`, `Price`, `Flight_ID`, `Aircraft_ID`, `Seat_ID`) VALUES
(5128, '2024-05-06 00:00:00', 'Scheduled', 0.00, 19, 1, 'st200'),
(11147, '2024-05-06 00:00:00', 'Scheduled', 0.00, 19, 1, 'st75'),
(64966, '2024-05-06 00:00:00', 'Scheduled', 0.00, 19, 1, 'st126'),
(70092, '2024-05-06 00:00:00', 'Scheduled', 0.00, 19, 1, 'st104');

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
(22, 31, 'Flight Booking Assistance', 'Dear Michael, We are pleased to assist you with your flight booking. Please provide us with your travel dates and destination so that we can proceed with the booking process. Thank you.', 'dilzhan');

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
(2, 'chamith@gmail.com'),
(3, 'waegdhj@jfsd');

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
('dilzhan', 'Dilzhann', 'Yapa', '24wqr8/9,Kadusfdsgdsgwel ', '+947832864823490', 'cafjshet@gmail.com', '11112222', 1),
('Januda', 'Januda', 'Silunika', 'Piliyandala', '702324244', 'example@mail.com', '11112222', 1),
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
  ADD KEY `Arrivval_Airport_FK` (`Departure_Airport_ID`),
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
  MODIFY `AirCraft_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `airport`
--
ALTER TABLE `airport`
  MODIFY `Airport_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `flight`
--
ALTER TABLE `flight`
  MODIFY `Flight_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `inquary`
--
ALTER TABLE `inquary`
  MODIFY `InquaryID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `Reservation_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70098;

--
-- AUTO_INCREMENT for table `solution`
--
ALTER TABLE `solution`
  MODIFY `solutionID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `subscription_list`
--
ALTER TABLE `subscription_list`
  MODIFY `Subscription_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `flight`
--
ALTER TABLE `flight`
  ADD CONSTRAINT `Arrivval_Airport_FK` FOREIGN KEY (`Departure_Airport_ID`) REFERENCES `airport` (`Airport_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `Destination_Airport_FK` FOREIGN KEY (`Arrival_Airport_ID`) REFERENCES `airport` (`Airport_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `Flight_FK1` FOREIGN KEY (`Aircraft_ID`) REFERENCES `aircraft` (`AirCraft_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `inquary`
--
ALTER TABLE `inquary`
  ADD CONSTRAINT `Inquary_FK` FOREIGN KEY (`Username`) REFERENCES `user` (`Username`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `solution`
--
ALTER TABLE `solution`
  ADD CONSTRAINT `Solution_FK` FOREIGN KEY (`AdminID`) REFERENCES `user` (`Username`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `Solution_FK2` FOREIGN KEY (`InquaryID`) REFERENCES `inquary` (`InquaryID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
