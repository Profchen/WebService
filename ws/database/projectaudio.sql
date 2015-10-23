-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Jeu 01 Octobre 2015 à 14:59
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `projectaudio`
--

-- --------------------------------------------------------

--
-- Structure de la table `episodes`
--

CREATE DATABASE IF NOT EXISTS 'projectaudio'

CREATE TABLE IF NOT EXISTS `episodes` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(30) NOT NULL,
  `Url` varchar(250) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `episodes`
--

INSERT INTO `episodes` (`Id`, `Name`, `Url`) VALUES
(1, 'donjon1', 'C:\\wamp\\www\\WebService\\Audio\\donjon-de-naheulbeuk01.mp3');

-- --------------------------------------------------------

--
-- Structure de la table `playlist`
--

CREATE TABLE IF NOT EXISTS `playlist` (
  `Id` int(11) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Lenght` int(11) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `playlist`
--

INSERT INTO `playlist` (`Id`, `Name`, `Lenght`) VALUES
(1, 'test', 10);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `Id` int(11) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `FirstName` varchar(30) NOT NULL,
  `Mail` varchar(30) NOT NULL,
  `Telephone` varchar(14) DEFAULT NULL,
  `Administrator` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `user`
--

INSERT INTO `user` (`Id`, `Name`, `FirstName`, `Mail`, `Telephone`, `Administrator`) VALUES
(1, 'clement', 'chene', 'test@test.fr', '0025658746', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
