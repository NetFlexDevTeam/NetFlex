-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 07, 2016 at 11:22 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `netflex`
--

-- --------------------------------------------------------

--
-- Table structure for table `actors`
--

CREATE TABLE `actors` (
  `ActorID` int(3) NOT NULL,
  `FirstName` varchar(50) NOT NULL,
  `LastName` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `actors`
--

INSERT INTO `actors` (`ActorID`, `FirstName`, `LastName`) VALUES
(1, 'Anna', 'Kendrick'),
(2, 'Justin ', 'Timberlake'),
(3, 'Tom ', 'Hanks'),
(4, 'Felicity', 'Jones'),
(5, 'Tom', 'Cruise'),
(6, 'Hunter', 'Burke'),
(7, 'Elizabeth', 'Reaser'),
(8, 'Lulu', 'Wilson'),
(9, 'Ben', 'Affleck'),
(10, 'Emily', 'Blunt'),
(11, 'Haley', 'Bennett'),
(12, 'Eva', 'Green'),
(13, 'Asa', 'Butterfield'),
(14, 'Dwayne', 'Johnson'),
(15, 'Kevin', 'Hart'),
(16, 'Zach', 'Galifianakis'),
(17, 'Isla', 'Fisher'),
(18, 'Alan', 'Tudyk'),
(19, 'Iggy ', 'Pop'),
(20, 'Ron', 'Asheton');

-- --------------------------------------------------------

--
-- Table structure for table `actorsmovie`
--

CREATE TABLE `actorsmovie` (
  `ActorID` int(3) NOT NULL,
  `MovieID` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `actorsmovie`
--

INSERT INTO `actorsmovie` (`ActorID`, `MovieID`) VALUES
(1, 4),
(1, 11),
(2, 11),
(3, 1),
(4, 1),
(5, 8),
(6, 8),
(7, 2),
(8, 2),
(9, 4),
(10, 9),
(11, 9),
(12, 5),
(13, 5),
(14, 3),
(14, 7),
(15, 3),
(16, 6),
(17, 6),
(18, 7),
(19, 10),
(20, 10);

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

CREATE TABLE `movies` (
  `MovieID` int(3) NOT NULL,
  `Title` varchar(150) NOT NULL,
  `Description` varchar(150) NOT NULL,
  `Rating` varchar(150) NOT NULL,
  `Stars` int(5) NOT NULL,
  `DVDCover` varchar(1000) NOT NULL,
  `Price` decimal(6,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`MovieID`, `Title`, `Description`, `Rating`, `Stars`, `DVDCover`, `Price`) VALUES
(1, 'Inferno', '', 'PG-13', 7, 'https://images-na.ssl-images-amazon.com/images/M/MV5BMTUzNTE2NTkzMV5BMl5BanBnXkFtZTgwMDAzOTUyMDI@._V1_SY1000_CR0,0,674,1000_AL_.jpg', '8'),
(2, 'Ouija: Origin of Evil', '', 'PG-13', 7, 'https://images-na.ssl-images-amazon.com/images/M/MV5BMTk4NTcxNTQ5NF5BMl5BanBnXkFtZTgwNTk5OTU4OTE@._V1_SY1000_SX675_AL_.jpg', '7'),
(3, 'Central Intelligence', '', 'PG-13', 6, 'https://images-na.ssl-images-amazon.com/images/M/MV5BMjA2NzEzNjIwNl5BMl5BanBnXkFtZTgwNzgwMTEzNzE@._V1_SY1000_CR0,0,674,1000_AL_.jpg', '8'),
(4, 'The Accountant', '', 'R', 8, 'https://images-na.ssl-images-amazon.com/images/M/MV5BNDc5Mzg2NTYxNV5BMl5BanBnXkFtZTgwMjQ2ODAwOTE@._V1_SY1000_CR0,0,674,1000_AL_.jpg', '10'),
(5, 'Miss Peregrine''s Home for Peculiar Children', '', 'PG-13', 7, 'https://images-na.ssl-images-amazon.com/images/M/MV5BMTA1NDg2MzM5NDleQTJeQWpwZ15BbWU4MDA5OTg5MTkx._V1_SY1000_CR0,0,674,1000_AL_.jpg', '8'),
(6, 'Keeping Up with the Joneses', '', 'PG-13', 6, 'https://images-na.ssl-images-amazon.com/images/M/MV5BNTA2NDUzODEyM15BMl5BanBnXkFtZTgwMDE5MDExMDI@._V1_.jpg', '8'),
(7, 'Moana', '', 'PG-13', 0, 'https://images-na.ssl-images-amazon.com/images/M/MV5BMjI4MzU5NTExNF5BMl5BanBnXkFtZTgwNzY1MTEwMDI@._V1_SY1000_CR0,0,674,1000_AL_.jpg', '15'),
(8, 'Jack Reacher: Never Go Back', '', 'PG-13', 6, 'https://images-na.ssl-images-amazon.com/images/M/MV5BODQ3ODQ3NDI4NV5BMl5BanBnXkFtZTgwMDY1Mzk5OTE@._V1_SY1000_SX640_AL_.jpg', '8'),
(9, 'The Girl on the Train', '', 'R', 7, 'https://images-na.ssl-images-amazon.com/images/M/MV5BMjEwNDU4NTQwMl5BMl5BanBnXkFtZTgwMzQ2MjIwMDI@._V1_SY1000_CR0,0,631,1000_AL_.jpg', '10'),
(10, 'Gimme Danger', '', 'R', 0, 'https://images-na.ssl-images-amazon.com/images/M/MV5BMTYyOTc5NzI4Ml5BMl5BanBnXkFtZTgwMjIwNzczMDI@._V1_SY1000_CR0,0,674,1000_AL_.jpg', '10'),
(11, 'Trolls', '', 'PG', 7, 'https://images-na.ssl-images-amazon.com/images/M/MV5BMTkxNDc3OTcxMV5BMl5BanBnXkFtZTgwODk2NjAzOTE@._V1_SY1000_CR0,0,673,1000_AL_.jpg', '7');

-- --------------------------------------------------------

--
-- Table structure for table `rentals`
--

CREATE TABLE `rentals` (
  `RentalID` int(3) NOT NULL,
  `MovieID` int(3) NOT NULL,
  `RentalDate` date NOT NULL,
  `ExpirationDate` date NOT NULL,
  `UserID` int(3) NOT NULL,
  `TransactionID` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rentals`
--

INSERT INTO `rentals` (`RentalID`, `MovieID`, `RentalDate`, `ExpirationDate`, `UserID`, `TransactionID`) VALUES
(805, 4, '2016-09-04', '2016-10-04', 103, 0),
(806, 7, '2016-09-04', '2016-10-04', 104, 0),
(807, 9, '2016-09-12', '2016-10-12', 106, 0),
(808, 10, '2016-09-15', '2016-10-15', 105, 0),
(809, 9, '2016-09-18', '2016-10-18', 102, 0),
(810, 3, '2016-09-20', '2016-10-20', 101, 0),
(811, 5, '2016-09-20', '2016-10-20', 101, 0),
(812, 1, '2016-09-22', '2016-10-22', 106, 0),
(813, 2, '2016-09-27', '2016-10-27', 107, 0),
(814, 11, '2016-09-30', '2016-10-30', 103, 0),
(815, 5, '2016-10-07', '2016-11-07', 108, 0),
(816, 8, '2016-10-08', '2016-11-08', 104, 0),
(817, 11, '2016-10-08', '2016-11-08', 102, 0),
(818, 7, '2016-10-12', '2016-11-12', 105, 0),
(819, 2, '2016-10-14', '2016-11-14', 108, 0),
(820, 6, '2016-10-17', '2016-11-17', 105, 0);

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `TransactionID` int(3) NOT NULL,
  `TransactionDate` date NOT NULL,
  `CreditCardNum` int(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `UserID` int(11) NOT NULL,
  `FirstName` varchar(50) NOT NULL,
  `LastName` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `BillingAdd` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`UserID`, `FirstName`, `LastName`, `Email`, `Password`, `BillingAdd`) VALUES
(101, 'Toni', 'Evans', 'optimusprime@yahoo.com', 'laundry101', '800 Laundry Lane'),
(102, 'Shun', 'Borders', 'tommypickles@gmail.com', 'sb50007', '400 Peter Walk Road'),
(103, 'Ryan', 'DeBerardino', 'redranger@gmail.com', 'dfk34f', '72 Harvey Drive'),
(104, 'Anonymous', 'Asian', 'anonymoususer@gmail.com', 'gpb8543', '90 Boardwalk Drive'),
(105, 'Ken', 'Smith', 'kamehameha5@aol.net', '123rdt', '1000 Greenway Road'),
(106, 'Alyssa', 'Cowan', 'teamiphone8@yahoo.com', 'pka47y2', '35 Maple Circle'),
(107, 'Karen', 'Odell', 'kareno@dell.com', 'ch33ses', '86 Rocky Lane'),
(108, 'Walter', 'Waters', 'waddledee@dreamworks.com', 'wumbo', '756 Winter Walk');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `actors`
--
ALTER TABLE `actors`
  ADD PRIMARY KEY (`ActorID`),
  ADD KEY `MovieID` (`FirstName`);

--
-- Indexes for table `actorsmovie`
--
ALTER TABLE `actorsmovie`
  ADD KEY `ActorID` (`ActorID`),
  ADD KEY `MovieID` (`MovieID`);

--
-- Indexes for table `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`MovieID`);

--
-- Indexes for table `rentals`
--
ALTER TABLE `rentals`
  ADD PRIMARY KEY (`RentalID`),
  ADD KEY `MovieID` (`MovieID`),
  ADD KEY `UserID` (`UserID`),
  ADD KEY `TransactionID` (`TransactionID`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`TransactionID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`UserID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `actors`
--
ALTER TABLE `actors`
  MODIFY `ActorID` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `movies`
--
ALTER TABLE `movies`
  MODIFY `MovieID` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `rentals`
--
ALTER TABLE `rentals`
  MODIFY `RentalID` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=821;
--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `TransactionID` int(3) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `UserID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=109;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
