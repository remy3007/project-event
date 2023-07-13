-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : mysql:3306
-- Généré le : jeu. 13 juil. 2023 à 09:08
-- Version du serveur : 8.0.20
-- Version de PHP : 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `Event`
--

-- --------------------------------------------------------

--
-- Structure de la table `T_COMMENTAIRE`
--

CREATE TABLE `T_COMMENTAIRE` (
  `COM_ID` int NOT NULL,
  `COM_DATE` datetime NOT NULL,
  `COM_AUTEUR` varchar(100) NOT NULL,
  `COM_CONTENU` varchar(200) NOT NULL,
  `EVENT_ID` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `T_EVENT`
--

CREATE TABLE `T_EVENT` (
  `EVENT_ID` int NOT NULL,
  `EVENT_DATE` datetime NOT NULL,
  `EVENT_TITRE` varchar(100) NOT NULL,
  `EVENT_CONTENU` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `T_EVENT`
--

INSERT INTO `T_EVENT` (`EVENT_ID`, `EVENT_DATE`, `EVENT_TITRE`, `EVENT_CONTENU`) VALUES
(1, '2021-09-29 15:55:05', 'conférence ecologique', 'conférence concernant l\'écologie et les impacts des entreprise'),
(2, '2021-09-29 15:55:18', 'conférence cybersécurité ', 'conférence permettant de bien sécurisé les information des clients'),
(3, '2021-09-29 15:55:46', 'conférence RGPD', 'conférence concernant les nouvelles norme RGPD'),
(4, '2022-06-03 19:02:00', 'évènement sur les nouvelles technologie informatique  ', 'évènement qui concerne les nouvelles technologie de l informatique '),
(5, '2022-06-03 19:02:18', 'évènement d\'intégrations d\'IA au quotidien ', 'évènement sur l\'intégrations d\'IA dans le quotidien et comment bien la mettre en place'),
(6, '2022-06-03 19:02:37', 'évènement sur l\'importance de la communication', 'cette évènement va nous expliquer pourquoi il est important de bien communiquer et proposer des idées dans les équipes ');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `T_COMMENTAIRE`
--
ALTER TABLE `T_COMMENTAIRE`
  ADD PRIMARY KEY (`COM_ID`),
  ADD KEY `fk_com_bil` (`EVENT_ID`);

--
-- Index pour la table `T_EVENT`
--
ALTER TABLE `T_EVENT`
  ADD PRIMARY KEY (`EVENT_ID`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `T_COMMENTAIRE`
--
ALTER TABLE `T_COMMENTAIRE`
  MODIFY `COM_ID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `T_EVENT`
--
ALTER TABLE `T_EVENT`
  MODIFY `EVENT_ID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `T_COMMENTAIRE`
--
ALTER TABLE `T_COMMENTAIRE`
  ADD CONSTRAINT `fk_com_bil` FOREIGN KEY (`EVENT_ID`) REFERENCES `T_EVENT` (`EVENT_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
