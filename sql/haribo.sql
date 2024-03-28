-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 17 août 2023 à 16:26
-- Version du serveur : 10.4.24-MariaDB
-- Version de PHP : 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `haribo`
--

-- --------------------------------------------------------

--
-- Structure de la table `bonbon`
--

CREATE TABLE `bonbon` (
  `id_bonbon` int(11) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `saveur` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `bonbon`
--

INSERT INTO `bonbon` (`id_bonbon`, `nom`, `saveur`) VALUES
(1, 'dragibus', 'm?re'),
(2, 'dragibus', 'poire'),
(3, 'dragibus', 'fraise'),
(4, 'tagadas', 'fraise'),
(5, 'banane', 'banane'),
(6, 'dragibus', 'chocolat');

-- --------------------------------------------------------

--
-- Structure de la table `manger`
--

CREATE TABLE `manger` (
  `id_manger` int(11) NOT NULL,
  `id_stagiaire` int(11) NOT NULL,
  `id_bonbon` int(11) NOT NULL,
  `date_manger` date NOT NULL,
  `quantite` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `manger`
--

INSERT INTO `manger` (`id_manger`, `id_stagiaire`, `id_bonbon`, `date_manger`, `quantite`) VALUES
(2, 4, 4, '2018-09-20', 5),
(3, 10, 4, '2023-09-15', 5);

-- --------------------------------------------------------

--
-- Structure de la table `stagiaire`
--

CREATE TABLE `stagiaire` (
  `id_stagiaire` int(11) NOT NULL,
  `prenom` varchar(100) NOT NULL,
  `yeux` varchar(30) NOT NULL,
  `genre` enum('homme','femme') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `stagiaire`
--

INSERT INTO `stagiaire` (`id_stagiaire`, `prenom`, `yeux`, `genre`) VALUES
(3, 'Jordan', 'marron', 'homme'),
(4, 'Adrien', 'marron', 'homme'),
(5, 'Mickael', 'marron', 'homme'),
(6, 'Nawfel', 'marron', 'homme'),
(10, 'Patrick', 'vert', 'homme'),
(11, 'Mila', 'Rouge', 'femme'),
(12, 'Jaqueline', 'Blanc', 'femme'),
(13, 'D?lia', 'Pink', 'femme');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `bonbon`
--
ALTER TABLE `bonbon`
  ADD PRIMARY KEY (`id_bonbon`);

--
-- Index pour la table `manger`
--
ALTER TABLE `manger`
  ADD PRIMARY KEY (`id_manger`),
  ADD KEY `id_stagiaire` (`id_stagiaire`),
  ADD KEY `id_bonbon` (`id_bonbon`);

--
-- Index pour la table `stagiaire`
--
ALTER TABLE `stagiaire`
  ADD PRIMARY KEY (`id_stagiaire`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `bonbon`
--
ALTER TABLE `bonbon`
  MODIFY `id_bonbon` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `manger`
--
ALTER TABLE `manger`
  MODIFY `id_manger` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `stagiaire`
--
ALTER TABLE `stagiaire`
  MODIFY `id_stagiaire` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `manger`
--
ALTER TABLE `manger`
  ADD CONSTRAINT `manger_ibfk_1` FOREIGN KEY (`id_stagiaire`) REFERENCES `stagiaire` (`id_stagiaire`),
  ADD CONSTRAINT `manger_ibfk_2` FOREIGN KEY (`id_bonbon`) REFERENCES `bonbon` (`id_bonbon`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
