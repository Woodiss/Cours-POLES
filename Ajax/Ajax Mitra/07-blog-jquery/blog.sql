-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  mer. 24 oct. 2018 à 12:35
-- Version du serveur :  10.1.30-MariaDB
-- Version de PHP :  7.1.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `blog`
--

-- --------------------------------------------------------

--
-- Structure de la table `article`
--

CREATE TABLE `article` (
  `id_article` int(3) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `categorie` varchar(255) NOT NULL,
  `contenu` text NOT NULL,
  `date_enregistrement` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `article`
--

INSERT INTO `article` (`id_article`, `titre`, `categorie`, `contenu`, `date_enregistrement`) VALUES
(1, 'test', 'cat', 'Cat ipsum dolor sit amet, wake up wander around the house making large amounts of noise jump on top of your human\'s bed and fall asleep again who\'s the baby for meow for food, then when human fills food dish, take a few bites of food and continue meowing or ask to go outside and ask to come inside and ask to go outside and ask to come inside. Peer out window, chatter at birds, lure them to mouth.', '2018-10-23 15:32:50'),
(2, 'hello', 'test', 'Cat ipsum dolor sit amet, wake up wander around the house making large amounts of noise jump on top of your human\'s bed and fall asleep again who\'s the baby for meow for food, then when human fills food dish, take a few bites of food and continue meowing or ask to go outside and ask to come inside and ask to go outside and ask to come inside. Peer out window, chatter at birds, lure them to mouth.', '2018-10-23 15:55:24'),
(3, 'azer', 'cats', 'Cat ipsum dolor sit amet, wake up wander around the house making large amounts of noise jump on top of your human\'s bed and fall asleep again who\'s the baby for meow for food, then when human fills food dish, take a few bites of food and continue meowing or ask to go outside and ask to come inside and ask to go outside and ask to come inside. Peer out window, chatter at birds, lure them to mouth.', '2018-10-23 15:58:37'),
(4, 'success', 'test', 'Cat ipsum dolor sit amet, wake up wander around the house making large amounts of noise jump on top of your human\'s bed and fall asleep again', '2018-10-23 16:00:55'),
(5, 'azer', 'rtyhtru', 'dc,cfghfvj;k', '2018-10-23 16:05:36'),
(6, 'hello', 'cat', 'hshshjhjjkhjkkj', '2018-10-23 16:12:20'),
(7, 'test', 'test', 'test', '2018-10-23 16:46:40'),
(8, 'test', 'fgtkf', 'gjkl;', '2018-10-23 16:52:18');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id_article`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `article`
--
ALTER TABLE `article`
  MODIFY `id_article` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
