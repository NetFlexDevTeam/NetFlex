-- phpMyAdmin SQL Dump
-- version 4.0.10.14
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Nov 29, 2016 at 06:23 PM
-- Server version: 5.6.28-76.1-log
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `deberar9_netflex`
--

-- --------------------------------------------------------

--
-- Table structure for table `actors`
--

CREATE TABLE IF NOT EXISTS `actors` (
  `ActorID` int(3) NOT NULL AUTO_INCREMENT,
  `FirstName` varchar(50) NOT NULL,
  `LastName` varchar(50) NOT NULL,
  PRIMARY KEY (`ActorID`),
  KEY `MovieID` (`FirstName`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

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

CREATE TABLE IF NOT EXISTS `actorsmovie` (
  `ActorID` int(3) NOT NULL,
  `MovieID` int(3) NOT NULL,
  KEY `ActorID` (`ActorID`),
  KEY `MovieID` (`MovieID`)
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

CREATE TABLE IF NOT EXISTS `movies` (
  `MovieID` int(3) NOT NULL AUTO_INCREMENT,
  `Title` varchar(150) NOT NULL,
  `Description` longtext NOT NULL,
  `Rating` varchar(150) NOT NULL,
  `Stars` int(5) NOT NULL,
  `DVDCover` varchar(1000) NOT NULL,
  `Price` decimal(6,0) NOT NULL,
  PRIMARY KEY (`MovieID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

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

CREATE TABLE IF NOT EXISTS `rentals` (
  `rental_id` int(15) NOT NULL AUTO_INCREMENT,
  `MovieID` int(3) NOT NULL,
  `RentalDate` date NOT NULL,
  `ExpirationDate` date NOT NULL,
  `UserID` int(3) NOT NULL,
  `TransactionID` int(5) NOT NULL,
  PRIMARY KEY (`rental_id`),
  KEY `MovieID` (`MovieID`),
  KEY `UserID` (`UserID`),
  KEY `TransactionID` (`TransactionID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `rentals`
--

INSERT INTO `rentals` (`rental_id`, `MovieID`, `RentalDate`, `ExpirationDate`, `UserID`, `TransactionID`) VALUES
(1, 4, '2016-09-04', '2016-10-04', 103, 0),
(2, 7, '2016-09-04', '2016-10-04', 104, 0),
(3, 9, '2016-09-12', '2016-10-12', 106, 0),
(4, 10, '2016-09-15', '2016-10-15', 105, 0),
(5, 9, '2016-09-18', '2016-10-18', 102, 0),
(6, 3, '2016-09-20', '2016-10-20', 101, 0),
(7, 5, '2016-09-20', '2016-10-20', 101, 0),
(8, 1, '2016-09-22', '2016-10-22', 106, 0),
(9, 2, '2016-09-27', '2016-10-27', 107, 0),
(10, 11, '2016-09-30', '2016-10-30', 103, 0),
(11, 5, '2016-10-07', '2016-11-07', 108, 0),
(12, 8, '2016-10-08', '2016-11-08', 104, 0),
(13, 11, '2016-10-08', '2016-11-08', 102, 0),
(14, 7, '2016-10-12', '2016-11-12', 105, 0),
(15, 2, '2016-10-14', '2016-11-14', 108, 0),
(16, 6, '2016-10-17', '2016-11-17', 105, 0);

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE IF NOT EXISTS `transactions` (
  `TransactionID` int(3) NOT NULL AUTO_INCREMENT,
  `TransactionDate` date NOT NULL,
  `CreditCardNum` int(16) NOT NULL,
  PRIMARY KEY (`TransactionID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `UserID` int(15) NOT NULL AUTO_INCREMENT,
  `FirstName` varchar(50) NOT NULL,
  `LastName` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `BillingAdd` varchar(50) NOT NULL,
  `UserType` int(5) NOT NULL DEFAULT '1',
  `freetrialstart` datetime NOT NULL,
  PRIMARY KEY (`UserID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`UserID`, `FirstName`, `LastName`, `Email`, `Password`, `BillingAdd`, `UserType`, `freetrialstart`) VALUES
(1, 'Ryan', 'DeBerardino', 'rdeberardino@gmail.com', 'f17601548177d6857618821738f0169c', '', 5, '0000-00-00 00:00:00'),
(2, 'Shun', 'Borders', 'borders.shun@gmail.com', '2ac9cb7dc02b3c0083eb70898e549b63', '1234 Main Street Statesboro GA', 5, '0000-00-00 00:00:00'),
(3, 'Toni', 'Evans', 'bo@yo.com', 'ea2a25a810a2137ba73766fcee681933', '75 Mabel Dr.', 5, '0000-00-00 00:00:00'),
(4, 'Ken', 'Smith', 'kenneths653@yahoo.com', 'fff4fc8103f407f7823380081554b95f', '1550drive', 5, '0000-00-00 00:00:00'),
(5, 'Toni', 'Evans', 'te01253@georgiasouthern.edu', 'a950506212164b4215768164c35a64b8', '75 Mabel Dr.', 5, '0000-00-00 00:00:00'),
(6, 'Alyssa', 'Cowan', 'acowan_321@live.com', 'd41e98d1eafa6d6011d3a70f1a5b92f0', '105 Morrow Court', 1, '0000-00-00 00:00:00'),
(7, 'trett', 'Pop', 'tegfr@dfgfd.com', '2dac8dbf093615fb1fdc0dde8a0838b9', 'Poop123 Dr.', 1, '0000-00-00 00:00:00'),
(8, 'Pop', 'pop', 'pop@pop.com', '2dac8dbf093615fb1fdc0dde8a0838b9', 'urtiu Dr', 1, '0000-00-00 00:00:00'),
(9, 'eric', 'paul', 'ericpaul@yahoo.com', '197d23977654350e6f66b4c4d5c8bbeb', '4 doo dr.', 1, '0000-00-00 00:00:00'),
(10, 'king', 'man', 'kingman@gmail.com', 'c23db93722663e08aeb83babb0110524', 'farfaraway', 1, '0000-00-00 00:00:00'),
(11, 'Alyssa', 'Cowan', 'acowan_321@uga.edu', 'd41e98d1eafa6d6011d3a70f1a5b92f0', '123 Street add', 1, '0000-00-00 00:00:00'),
(12, 'Ken', 'Smith', 'kenneths653@aol.com', '2872f6721e7e3641bb75a0f8bda3da1f', '15', 1, '0000-00-00 00:00:00'),
(13, 'Ken', 'Smith', 'ken@smith.com', '5d3f2747531c177243d3ea5b481a115d', '123 Street Add', 1, '0000-00-00 00:00:00'),
(14, 'baby', 'butters', 'popcorn@gmail.com', 'c5a228f1ca600c6e46e86d7306dec542', 'babybuttershouse', 1, '0000-00-00 00:00:00'),
(15, 'Ken', 'Smith', 'KS@aol.com', '8599b239cebea8506e8bfb05e53863a2', '123', 1, '0000-00-00 00:00:00'),
(16, 'eric', 'paul', 'try@gmail.com', '080f651e3fcca17df3a47c2cecfcb880', '4 doo dr.', 1, '0000-00-00 00:00:00'),
(17, 'Josh', 'Tierra', 'jcttierra@gmail.com', 'f94adcc3ddda04a8f34928d862f404b4', '4 doo dr.', 1, '0000-00-00 00:00:00'),
(18, '', '', 'this@gmail.com', '197d23977654350e6f66b4c4d5c8bbeb', '', 1, '0000-00-00 00:00:00'),
(19, '', '', 'trial@yahoo.com', '197d23977654350e6f66b4c4d5c8bbeb', '', 1, '0000-00-00 00:00:00'),
(20, 'Lilian', 'Jillian', 'lijillian@yahoo.com', '31bc70cbe819f687424c941c34b55665', '43 doo dr.', 1, '0000-00-00 00:00:00');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
