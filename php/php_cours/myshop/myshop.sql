-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 28 sep. 2023 à 15:51
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
-- Base de données : `myshop`
--

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

CREATE TABLE `produit` (
  `id_product` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `city` varchar(255) NOT NULL,
  `postal_code` int(5) NOT NULL,
  `reservation_text` text NOT NULL,
  `date_add` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `produit`
--

INSERT INTO `produit` (`id_product`, `title`, `description`, `image`, `price`, `city`, `postal_code`, `reservation_text`, `date_add`) VALUES
(1, 'Pull Rouge', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore, explicabo!', 'pull_rouge.jpg', 89, 'Poissy', 78300, '', '2023-09-28 10:18:37'),
(2, 'Chemise Bleu', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore, explicabo!', 'cheminse_bleu.jpg', 21, 'Poissy', 78300, 'A MOI !!!!', '2023-09-28 12:35:45'),
(3, 'Pull Gris', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore, explicabo!', 'pull_gris.jpg', 50, 'Achères', 78260, 'Je veux réserver ce pull !! ', '2023-09-28 12:36:58'),
(4, 'Veste en cuir noir', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore, explicabo!', 'veste_cuir_noir.jpg', 110, 'Conflans', 78700, '', '2023-09-28 12:37:35'),
(5, 'Pull rouge', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore, explicabo!', 'pull_rouge.jpg', 61, 'Poissy', 78260, '', '2023-09-28 15:21:25'),
(6, 'Pull rouge', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore, explicabo!', 'pull_rouge.jpg', 61, 'Poissy', 78260, 'YOLOOOO', '2023-09-28 15:21:25'),
(7, 'Pull rouge', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore, explicabo!', 'pull_rouge.jpg', 61, 'Poissy', 78260, '', '2023-09-28 15:21:25'),
(8, 'Pull rouge', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore, explicabo!', 'pull_rouge.jpg', 61, 'Poissy', 78260, 'Salut c\'est moi TCHOUPI', '2023-09-28 15:21:25'),
(9, 'Pull rouge', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore, explicabo!', 'pull_rouge.jpg', 61, 'Poissy', 78260, '', '2023-09-28 15:21:25'),
(10, 'Pull rouge', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore, explicabo!', 'pull_rouge.jpg', 61, 'Poissy', 78260, 'A moi :D !!', '2023-09-28 15:21:25'),
(11, 'Pull rouge', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore, explicabo!', 'pull_rouge.jpg', 61, 'Poissy', 78260, 'je réserve ce pull', '2023-09-28 15:21:25'),
(12, 'Pull rouge', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore, explicabo!', 'pull_rouge.jpg', 61, 'Poissy', 78260, '', '2023-09-28 15:21:25'),
(13, 'Pull rouge', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore, explicabo!', 'pull_rouge.jpg', 61, 'Poissy', 78260, '', '2023-09-28 15:21:25'),
(14, 'Pull rouge', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore, explicabo!', 'pull_rouge.jpg', 61, 'Poissy', 78260, '', '2023-09-28 15:21:25'),
(15, 'Pull rouge', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore, explicabo!', 'pull_rouge.jpg', 61, 'Poissy', 78260, 'TESTT ? O.o', '2023-09-28 15:21:25'),
(16, 'Pull rougeeeee', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore, explicabo!', 'pull_rouge.jpg', 69, 'Poissy', 78300, '', '2023-09-28 15:21:25'),
(17, 'Pull rouge', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore, explicabo!', 'pull_rouge.jpg', 61, 'Poissy', 78260, 'en avant OUI-OUI', '2023-09-28 15:21:25'),
(18, 'Veste en cuir noir', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore, explicabo!', 'veste_cuir_noir.jpg', 1234, 'tropChere', 99999, '', '2023-09-28 15:48:51');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `produit`
--
ALTER TABLE `produit`
  ADD PRIMARY KEY (`id_product`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `produit`
--
ALTER TABLE `produit`
  MODIFY `id_product` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
