-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : lun. 04 avr. 2022 à 00:05
-- Version du serveur : 5.7.36
-- Version de PHP : 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `loginsystem`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `idadmin` int(8) NOT NULL,
  `nom` varchar(20) NOT NULL,
  `prenom` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  PRIMARY KEY (`idadmin`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`idadmin`, `nom`, `prenom`, `email`, `password`) VALUES
(1, 'achour', 'insaf', 'achourinsaf@hotmail.', '123'),
(2, 'ben rhouma', 'yasmine', 'yasmine@gmail.com', '123');

-- --------------------------------------------------------

--
-- Structure de la table `enseignant`
--

DROP TABLE IF EXISTS `enseignant`;
CREATE TABLE IF NOT EXISTS `enseignant` (
  `idenseignant` int(8) NOT NULL,
  `idadmin` int(8) NOT NULL,
  `nom` varchar(20) NOT NULL,
  `prenom` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  PRIMARY KEY (`idenseignant`),
  UNIQUE KEY `id_admin` (`idadmin`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `enseignant`
--

INSERT INTO `enseignant` (`idenseignant`, `idadmin`, `nom`, `prenom`, `email`) VALUES
(11, 1, 'Dupont', 'Marie', 'marie@hotmail.fr'),
(22, 2, 'Leclerq	', 'Gustave', 'gustave@hotmail.fr');

-- --------------------------------------------------------

--
-- Structure de la table `etudiant`
--

DROP TABLE IF EXISTS `etudiant`;
CREATE TABLE IF NOT EXISTS `etudiant` (
  `idetudiant` int(8) NOT NULL,
  `idadmin` int(8) NOT NULL,
  `nom` varchar(20) NOT NULL,
  `prenom` varchar(20) NOT NULL,
  `adresse` text NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` int(11) NOT NULL,
  PRIMARY KEY (`idetudiant`),
  UNIQUE KEY `id_admin` (`idadmin`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `etudiant`
--

INSERT INTO `etudiant` (`idetudiant`, `idadmin`, `nom`, `prenom`, `adresse`, `email`, `password`) VALUES
(1, 1, 'Lieury	', 'Yves', '55 route st', 'yves@gmail.com', 1456),
(2, 2, 'Durant		', 'Alain', '66routest', 'alain@gmail.com', 56789);

-- --------------------------------------------------------

--
-- Structure de la table `matiere`
--

DROP TABLE IF EXISTS `matiere`;
CREATE TABLE IF NOT EXISTS `matiere` (
  `idmatiere` int(4) NOT NULL,
  `libelle` varchar(50) NOT NULL,
  `idenseignant` int(8) NOT NULL,
  PRIMARY KEY (`idmatiere`,`idenseignant`),
  KEY `id_enseignant` (`idenseignant`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `matiere`
--

INSERT INTO `matiere` (`idmatiere`, `libelle`, `idenseignant`) VALUES
(1, 'informatique', 11),
(2, 'Français', 22),
(3, 'mathematique', 22);

-- --------------------------------------------------------

--
-- Structure de la table `note`
--

DROP TABLE IF EXISTS `note`;
CREATE TABLE IF NOT EXISTS `note` (
  `idmatiere` int(8) NOT NULL,
  `idetudiant` int(8) NOT NULL,
  `note` decimal(2,0) NOT NULL,
  PRIMARY KEY (`idmatiere`,`idetudiant`),
  KEY `id_étudiant` (`idetudiant`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `note`
--

INSERT INTO `note` (`idmatiere`, `idetudiant`, `note`) VALUES
(1, 1, '14'),
(2, 2, '15'),
(3, 2, '20');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `enseignant`
--
ALTER TABLE `enseignant`
  ADD CONSTRAINT `enseignant_ibfk_1` FOREIGN KEY (`idadmin`) REFERENCES `admin` (`idadmin`);

--
-- Contraintes pour la table `etudiant`
--
ALTER TABLE `etudiant`
  ADD CONSTRAINT `etudiant_ibfk_1` FOREIGN KEY (`idadmin`) REFERENCES `admin` (`idadmin`);

--
-- Contraintes pour la table `matiere`
--
ALTER TABLE `matiere`
  ADD CONSTRAINT `matiere_ibfk_1` FOREIGN KEY (`idenseignant`) REFERENCES `enseignant` (`idenseignant`);

--
-- Contraintes pour la table `note`
--
ALTER TABLE `note`
  ADD CONSTRAINT `note_ibfk_1` FOREIGN KEY (`idetudiant`) REFERENCES `etudiant` (`idetudiant`),
  ADD CONSTRAINT `note_ibfk_2` FOREIGN KEY (`idmatiere`) REFERENCES `matiere` (`idmatiere`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
