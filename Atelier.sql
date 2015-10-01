-- phpMyAdmin SQL Dump
-- version 4.2.6deb1
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Lun 28 Septembre 2015 à 23:43
-- Version du serveur :  5.5.44-0ubuntu0.14.10.1
-- Version de PHP :  5.5.12-2ubuntu4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `CdP`
--

-- --------------------------------------------------------

--
-- Structure de la table `Atelier`
--

CREATE TABLE IF NOT EXISTS `Atelier` (
`ID` int(11) NOT NULL,
  `Titre` varchar(100) NOT NULL,
  `Type` varchar(50) NOT NULL,
  `Duree` int(11) NOT NULL,
  `Capacite` int(11) NOT NULL,
  `Themes` varchar(150) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Contenu de la table `Atelier`
--

INSERT INTO `Atelier` (`ID`, `Titre`, `Type`, `Duree`, `Capacite`, `Themes`) VALUES
(1, 'sujet 1', 'conference', 30, 40, 'hhhhhh'),
(2, 'sujet 2', 'atelier scientifique', 120, 60, 'kjhkjshckjsncjnxc'),
(3, 'sujet 3', 'conference', 40, 30, 'ljlksjdkjskd'),
(4, 'atelier 1', 'conference', 30, 50, 'theme scientifique');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `Atelier`
--
ALTER TABLE `Atelier`
 ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `Atelier`
--
ALTER TABLE `Atelier`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
