-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  mer. 24 oct. 2018 à 16:59
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
  `date_enregistrement` datetime NOT NULL,
  `photo` text NOT NULL,
  `id_auteur` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `article`
--

INSERT INTO `article` (`id_article`, `titre`, `categorie`, `contenu`, `date_enregistrement`, `photo`, `id_auteur`) VALUES
(1, 'test', 'cat', 'Ocelot. American shorthair thai for ragdoll but havana brown balinese . Donskoy. Mouser malkin yet turkish angora bobcat and sphynx and siberian. Mouser mouser or grimalkin kitty and tabby but munchkin. Singapura lynx ragdoll, for tiger siberian. Maine coon siamese devonshire rex but devonshire rex, yet tabby and lion egyptian mau. Cheetah mouser, or manx ocelot birman and kitty. Bengal leopard. Savannah ragdoll. Sphynx abyssinian british shorthair. Scottish fold kitten, manx so cheetah for tom so turkish angora. Mouser kitty yet burmese donskoy so panther.<br>\r\n\r\nHavana brown persian balinese yet scottish fold but siamese. Munchkin bombay. Lion russian blue. Siberian persian abyssinian yet abyssinian cougar. Kitten. Scottish fold savannah for savannah yet tom. Mouser bombay but british shorthair or munchkin, kitty for jaguar. Malkin havana brown but norwegian forest for russian blue scottish fold. Kitty kitty or munchkin for tabby. Panther british shorthair, and tomcat. Sphynx grimalkin jaguar. Cheetah egyptian mau lion so tabby, malkin for thai cheetah.', '2018-10-23 15:32:50', 'https://cdn.pixabay.com/photo/2017/01/12/21/42/amurtiger-1975790__340.jpg', 1),
(2, 'hello', 'test', 'Cougar puma and cornish rex mouser donskoy abyssinian , singapura. Tiger maine coon, yet tom or tom panther tom. Lion jaguar tabby thai siamese. Cheetah british shorthair. Scottish fold. Ocicat british shorthair yet american bobtail for persian. Jaguar scottish fold. Siamese devonshire rex birman. Manx tom mouser so ragdoll but lion, and cheetah. Tabby kitten or maine coon munchkin so american bobtail yet havana brown. Munchkin tom and abyssinian grimalkin panther. Panther bombay ragdoll, yet puma cornish rex. Bombay manx manx but scottish fold abyssinian but bengal. Grimalkin burmese malkin havana brown, or tom, kitten yet persian. Cheetah maine coon and bombay. Singapura. Birman puma cheetah and scottish fold. Sphynx kitten grimalkin sphynx. Birman panther siamese yet puma leopard savannah but american bobtail. Ocicat ragdoll for burmese mouser thai american bobtail. British shorthair jaguar or ragdoll bengal or kitten, donskoy burmese. Egyptian mau kitty but sphynx yet tiger scottish fold. Malkin turkish angora. British shorthair singapura. ', '2018-10-23 15:55:24', 'https://cdn.pixabay.com/photo/2018/10/20/09/59/sand-3760496__340.jpg', 1),
(3, 'azer', 'cats', 'Savannah bengal so bobcat norwegian forest so ragdoll for siamese. Cougar siamese so munchkin tabby for maine coon or ocelot or abyssinian . Burmese british shorthair for grimalkin and norwegian forest. Malkin manx yet leopard cornish rex. Havana brown american bobtail himalayan.\r\n<br>\r\nMouser singapura but donskoy but tom lynx. Russian blue leopard. Havana brown. Thai scottish fold but siamese or siberian. Cornish rex scottish fold lion or lynx, tomcat. Turkish angora abyssinian yet russian blue for kitten tomcat cheetah. Ragdoll tiger, or jaguar. Kitten savannah siberian but cornish rex but jaguar havana brown. Burmese tom tom tomcat or ocelot. Himalayan ragdoll turkish angora and puma manx so munchkin ocelot. Bobcat. Tiger himalayan so russian blue yet siamese, or donskoy lion. Tom british shorthair or devonshire rex, so tabby. Russian blue bobcat. Tomcat russian blue. Bengal lynx lion or cougar kitty tabby birman. Birman lynx. Bobcat tomcat. Burmese burmese or kitty. American shorthair grimalkin british shorthair himalayan or tom and devonshire rex for tomcat. Lynx donskoy. ', '2018-10-23 15:58:37', 'https://cdn.pixabay.com/photo/2018/10/19/22/42/boat-3759848__340.jpg', 1),
(4, 'success', 'test', 'Mouser singapura but donskoy but tom lynx. Russian blue leopard. Havana brown. Thai scottish fold but siamese or siberian. Cornish rex scottish fold lion or lynx, tomcat. Turkish angora abyssinian yet russian blue for kitten tomcat cheetah. Ragdoll tiger, or jaguar. Kitten savannah siberian but cornish rex but jaguar havana brown. Burmese tom tom tomcat or ocelot. Himalayan ragdoll turkish angora and puma manx so munchkin ocelot. Bobcat. Tiger himalayan so russian blue yet siamese, or donskoy lion. Tom british shorthair or devonshire rex, so tabby. Russian blue bobcat. Tomcat russian blue. Bengal lynx lion or cougar kitty tabby birman. Birman lynx. Bobcat tomcat. Burmese burmese or kitty. American shorthair grimalkin british shorthair himalayan or tom and devonshire rex for tomcat. Lynx donskoy.\r\n<br>\r\nMaine coon malkin and manx. Lynx burmese. Bengal. Bombay cornish rex siamese yet devonshire rex so tiger lion for siamese. Bengal donskoy so tiger and jaguar and ocicat, so tabby or american bobtail. Turkish angora egyptian mau and savannah. Ocicat singapura siberian. ', '2018-10-23 16:00:55', 'https://cdn.pixabay.com/photo/2018/10/22/01/57/tree-3764319__340.jpg', 2),
(5, 'azer', 'rtyhtru', 'Ocelot. American shorthair thai for ragdoll but havana brown balinese . Donskoy. Mouser malkin yet turkish angora bobcat and sphynx and siberian. Mouser mouser or grimalkin kitty and tabby but munchkin. Singapura lynx ragdoll, for tiger siberian. Maine coon siamese devonshire rex but devonshire rex, yet tabby and lion egyptian mau. Cheetah mouser, or manx ocelot birman and kitty. Bengal leopard. Savannah ragdoll. Sphynx abyssinian british shorthair. Scottish fold kitten, manx so cheetah for tom so turkish angora. Mouser kitty yet burmese donskoy so panther.<br>\r\n\r\nHavana brown persian balinese yet scottish fold but siamese. Munchkin bombay. Lion russian blue. Siberian persian abyssinian yet abyssinian cougar. Kitten. Scottish fold savannah for savannah yet tom. Mouser bombay but british shorthair or munchkin, kitty for jaguar. Malkin havana brown but norwegian forest for russian blue scottish fold. Kitty kitty or munchkin for tabby. Panther british shorthair, and tomcat. Sphynx grimalkin jaguar. Cheetah egyptian mau lion so tabby, malkin for thai cheetah.\r\n', '2018-10-23 16:05:36', 'https://cdn.pixabay.com/photo/2018/10/21/15/03/hawks-3762995__340.jpg', 2),
(6, 'hello', 'cat', 'Cougar puma and cornish rex mouser donskoy abyssinian , singapura. Tiger maine coon, yet tom or tom panther tom. Lion jaguar tabby thai siamese. Cheetah british shorthair. Scottish fold. Ocicat british shorthair yet american bobtail for persian. Jaguar scottish fold. Siamese devonshire rex birman. Manx tom mouser so ragdoll but lion, and cheetah. Tabby kitten or maine coon munchkin so american bobtail yet havana brown. Munchkin tom and abyssinian grimalkin panther. Panther bombay ragdoll, yet puma cornish rex. Bombay manx manx but scottish fold abyssinian but bengal. Grimalkin burmese malkin havana brown, or tom, kitten yet persian. Cheetah maine coon and bombay. Singapura. Birman puma cheetah and scottish fold. Sphynx kitten grimalkin sphynx. Birman panther siamese yet puma leopard savannah but american bobtail. Ocicat ragdoll for burmese mouser thai american bobtail. British shorthair jaguar or ragdoll bengal or kitten, donskoy burmese. Egyptian mau kitty but sphynx yet tiger scottish fold. Malkin turkish angora. British shorthair singapura. ', '2018-10-23 16:12:20', 'https://cdn.pixabay.com/photo/2018/10/20/23/48/ruin-3762045__340.jpg', 1),
(7, 'test', 'test', 'Savannah bengal so bobcat norwegian forest so ragdoll for siamese. Cougar siamese so munchkin tabby for maine coon or ocelot or abyssinian . Burmese british shorthair for grimalkin and norwegian forest. Malkin manx yet leopard cornish rex. Havana brown american bobtail himalayan.<br>\r\n\r\nMouser singapura but donskoy but tom lynx. Russian blue leopard. Havana brown. Thai scottish fold but siamese or siberian. Cornish rex scottish fold lion or lynx, tomcat. Turkish angora abyssinian yet russian blue for kitten tomcat cheetah. Ragdoll tiger, or jaguar. Kitten savannah siberian but cornish rex but jaguar havana brown. Burmese tom tom tomcat or ocelot. Himalayan ragdoll turkish angora and puma manx so munchkin ocelot. Bobcat. Tiger himalayan so russian blue yet siamese, or donskoy lion. Tom british shorthair or devonshire rex, so tabby. Russian blue bobcat. Tomcat russian blue. Bengal lynx lion or cougar kitty tabby birman. Birman lynx. Bobcat tomcat. Burmese burmese or kitty. American shorthair grimalkin british shorthair himalayan or tom and devonshire rex for tomcat. Lynx donskoy. ', '2018-10-23 16:46:40', 'https://cdn.pixabay.com/photo/2018/10/19/22/22/twigs-3759800__340.jpg', 2),
(8, 'test', 'fgtkf', 'Ocelot. American shorthair thai for ragdoll but havana brown balinese . Donskoy. Mouser malkin yet turkish angora bobcat and sphynx and siberian. Mouser mouser or grimalkin kitty and tabby but munchkin. Singapura lynx ragdoll, for tiger siberian. Maine coon siamese devonshire rex but devonshire rex, yet tabby and lion egyptian mau. Cheetah mouser, or manx ocelot birman and kitty. Bengal leopard. Savannah ragdoll. Sphynx abyssinian british shorthair. Scottish fold kitten, manx so cheetah for tom so turkish angora. Mouser kitty yet burmese donskoy so panther.\r\n<br>\r\nHavana brown persian balinese yet scottish fold but siamese. Munchkin bombay. Lion russian blue. Siberian persian abyssinian yet abyssinian cougar. Kitten. Scottish fold savannah for savannah yet tom. Mouser bombay but british shorthair or munchkin, kitty for jaguar. Malkin havana brown but norwegian forest for russian blue scottish fold. Kitty kitty or munchkin for tabby. Panther british shorthair, and tomcat. Sphynx grimalkin jaguar. Cheetah egyptian mau lion so tabby, malkin for thai cheetah.\r\n', '2018-10-23 16:52:18', 'https://cdn.pixabay.com/photo/2018/10/19/00/23/atlantic-3757677_960_720.jpg', 2),
(9, 'Lac en automne', 'saison', 'Singapura ragdoll. Lion egyptian mau for bobcat jaguar but leopard sphynx panther. Burmese thai norwegian forest for puma scottish fold so bombay. Cheetah singapura or russian blue. Jaguar norwegian forest balinese or tom or puma. Siamese persian yet siamese. Burmese ocicat or norwegian forest american shorthair puma. Balinese jaguar, ragdoll. Malkin abyssinian yet tabby, but persian himalayan and tomcat for cheetah. Panther puma yet cheetah norwegian forest yet devonshire rex, so bengal british shorthair. Cougar egyptian mau american bobtail sphynx. Grimalkin tom scottish fold. Lynx abyssinian persian savannah or scottish fold but cornish rex so bombay. Burmese tom tom yet maine coon but norwegian forest. Turkish angora bombay but tabby. Jaguar thai kitten siberian so siberian.\r\n', '2018-10-24 15:38:04', 'https://cdn.pixabay.com/photo/2018/10/19/22/29/boat-3759823__340.jpg', 2);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id_user` int(3) NOT NULL,
  `pseudo` varchar(255) NOT NULL,
  `mdp` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `date_inscription` date NOT NULL,
  `avatar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id_user`, `pseudo`, `mdp`, `email`, `date_inscription`, `avatar`) VALUES
(1, 'Mila', 'password', 'moi@mail.fr', '2018-10-01', 'https://randomuser.me/api/portraits/women/43.jpg'),
(2, 'WF3', 'wf3', 'wf3@web.com', '2018-10-31', 'https://randomuser.me/api/portraits/men/96.jpg');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id_article`),
  ADD KEY `id_auteur` (`id_auteur`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `article`
--
ALTER TABLE `article`
  MODIFY `id_article` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
