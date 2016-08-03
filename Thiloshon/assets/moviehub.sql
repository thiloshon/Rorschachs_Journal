-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 03, 2016 at 07:34 PM
-- Server version: 5.7.9
-- PHP Version: 5.6.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `moviehub`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `productID` varchar(3) NOT NULL,
  `name` varchar(100) NOT NULL,
  `Amount` int(3) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `price` int(4) NOT NULL,
  `imagePath` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`productID`, `name`, `Amount`, `description`, `price`, `imagePath`) VALUES
('1', 'Batman vs Superman Ultimate Edition', 20, '<p>Fearing the actions of a god-like Super Hero left unchecked, Gotham City''s own formidable, forceful vigilante takes on Metropolis''s most revered, modern-day savior, while the world wrestles with what sort of hero it really needs. And with Batman and Superman at war with one another, a new threat quickly arises, putting mankind in greater danger than it''s ever known before.</p></br></br><h3>Actors</h3><p>Ben Affleck, Henry Cavill</p>', 499, 'images/batman-vs-superman-poster-alfred.jpg'),
('2', 'Inception', 15, '<p>Fearing the actions of a god-like Super Hero left unchecked, Gotham City''s own formidable, forceful vigilante takes on Metropolis''s most revered, modern-day savior, while the world wrestles with what sort of hero it really needs. And with Batman and Superman at war with one another, a new threat quickly arises, putting mankind in greater danger than it''s ever known before.</p></br></br><h3>Actors</h3><p>Ben Affleck, Henry Cavill</p>', 499, 'images/inception.jpg'),
('3', 'The Dark Knight Rises Extended Cut', 4, '<p>Fearing the actions of a god-like Super Hero left unchecked, Gotham City''s own formidable, forceful vigilante takes on Metropolis''s most revered, modern-day savior, while the world wrestles with what sort of hero it really needs. And with Batman and Superman at war with one another, a new threat quickly arises, putting mankind in greater danger than it''s ever known before.</p></br></br><h3>Actors</h3><p>Ben Affleck, Henry Cavill</p>', 499, 'images/TheDarkKnightRises_TeaserPoster.jpg'),
('4', 'Drive', 7, '<p>Fearing the actions of a god-like Super Hero left unchecked, Gotham City''s own formidable, forceful vigilante takes on Metropolis''s most revered, modern-day savior, while the world wrestles with what sort of hero it really needs. And with Batman and Superman at war with one another, a new threat quickly arises, putting mankind in greater danger than it''s ever known before.</p></br></br><h3>Actors</h3><p>Ben Affleck, Henry Cavill</p>', 499, 'images/drive-movie-poster.jpeg'),
('5', 'Enemy', 4, '<p>Fearing the actions of a god-like Super Hero left unchecked, Gotham City''s own formidable, forceful vigilante takes on Metropolis''s most revered, modern-day savior, while the world wrestles with what sort of hero it really needs. And with Batman and Superman at war with one another, a new threat quickly arises, putting mankind in greater danger than it''s ever known before.</p></br></br><h3>Actors</h3><p>Ben Affleck, Henry Cavill</p>', 499, 'images/enemy%2001.jpg'),
('6', 'Inglorious Bastards', 5, '<p>Fearing the actions of a god-like Super Hero left unchecked, Gotham City''s own formidable, forceful vigilante takes on Metropolis''s most revered, modern-day savior, while the world wrestles with what sort of hero it really needs. And with Batman and Superman at war with one another, a new threat quickly arises, putting mankind in greater danger than it''s ever known before.</p></br></br><h3>Actors</h3><p>Ben Affleck, Henry Cavill</p>', 488, 'images/inglorious.jpg'),
('7', 'Assasin''s Creed Costume', 9, '<p>Fearing the actions of a god-like Super Hero left unchecked, Gotham City''s own formidable, forceful vigilante takes on Metropolis''s most revered, modern-day savior, while the world wrestles with what sort of hero it really needs. And with Batman and Superman at war with one another, a new threat quickly arises, putting mankind in greater danger than it''s ever known before.</p></br></br><h3>Actors</h3><p>Ben Affleck, Henry Cavill</p>', 978, 'images/assasins.jpg'),
('8', 'Darth Vader Mask', 7, '<p>Fearing the actions of a god-like Super Hero left unchecked, Gotham City''s own formidable, forceful vigilante takes on Metropolis''s most revered, modern-day savior, while the world wrestles with what sort of hero it really needs. And with Batman and Superman at war with one another, a new threat quickly arises, putting mankind in greater danger than it''s ever known before.</p></br></br><h3>Actors</h3><p>Ben Affleck, Henry Cavill</p>', 657, 'images/darth.jpg'),
('9', 'Skyrim Sword', 8, '<p>Fearing the actions of a god-like Super Hero left unchecked, Gotham City''s own formidable, forceful vigilante takes on Metropolis''s most revered, modern-day savior, while the world wrestles with what sort of hero it really needs. And with Batman and Superman at war with one another, a new threat quickly arises, putting mankind in greater danger than it''s ever known before.</p></br></br><h3>Actors</h3><p>Ben Affleck, Henry Cavill</p>', 456, 'images/skyrim.jpg'),
('10', 'Wolverine Blade', 9, '<p>Fearing the actions of a god-like Super Hero left unchecked, Gotham City''s own formidable, forceful vigilante takes on Metropolis''s most revered, modern-day savior, while the world wrestles with what sort of hero it really needs. And with Batman and Superman at war with one another, a new threat quickly arises, putting mankind in greater danger than it''s ever known before.</p></br></br><h3>Actors</h3><p>Ben Affleck, Henry Cavill</p>', 786, 'images/wolverine.jpg'),
('11', '500$ Gift Voucher', 7, '<p>Fearing the actions of a god-like Super Hero left unchecked, Gotham City''s own formidable, forceful vigilante takes on Metropolis''s most revered, modern-day savior, while the world wrestles with what sort of hero it really needs. And with Batman and Superman at war with one another, a new threat quickly arises, putting mankind in greater danger than it''s ever known before.</p></br></br><h3>Actors</h3><p>Ben Affleck, Henry Cavill</p>', 500, 'images/500.png'),
('12', '1000$ Gift Voucher', 10, '<p>Fearing the actions of a god-like Super Hero left unchecked, Gotham City''s own formidable, forceful vigilante takes on Metropolis''s most revered, modern-day savior, while the world wrestles with what sort of hero it really needs. And with Batman and Superman at war with one another, a new threat quickly arises, putting mankind in greater danger than it''s ever known before.</p></br></br><h3>Actors</h3><p>Ben Affleck, Henry Cavill</p>', 1000, 'images/1000rs.png'),
('13', '1500$ Gift Voucher', 15, '<p>Fearing the actions of a god-like Super Hero left unchecked, Gotham City''s own formidable, forceful vigilante takes on Metropolis''s most revered, modern-day savior, while the world wrestles with what sort of hero it really needs. And with Batman and Superman at war with one another, a new threat quickly arises, putting mankind in greater danger than it''s ever known before.</p></br></br><h3>Actors</h3><p>Ben Affleck, Henry Cavill</p>', 1500, 'images/1500.png');

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

DROP TABLE IF EXISTS `sales`;
CREATE TABLE IF NOT EXISTS `sales` (
  `username` varchar(50) NOT NULL,
  `productID` varchar(50) NOT NULL,
  `Amount` int(5) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`username`, `productID`, `Amount`) VALUES
('thilo', '100001', 3),
('thilo', '100001', 3),
('megan', '100002', 4),
('thilo', '1000001', 1),
('thilo', '1000001', 2),
('thilo', '1000001', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `password`) VALUES
('thilo', '1234');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
