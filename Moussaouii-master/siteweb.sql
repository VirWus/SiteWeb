-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  lun. 16 avr. 2018 à 00:14
-- Version du serveur :  10.1.28-MariaDB
-- Version de PHP :  5.6.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `siteweb`
--

-- --------------------------------------------------------

--
-- Structure de la table `actuallite`
--

CREATE TABLE `actuallite` (
  `id` int(11) NOT NULL,
  `titre` varchar(50) NOT NULL,
  `date` text NOT NULL,
  `contenu` text NOT NULL,
  `lien` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `actuallite`
--

INSERT INTO `actuallite` (`id`, `titre`, `date`, `contenu`, `lien`) VALUES
(1, 'test', '', 'test', 'test '),
(2, 'test', '', 'test', 'test '),
(3, 'lol', '', 'loo', 'mm');

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `nom` varchar(15) NOT NULL,
  `prenom` varchar(15) NOT NULL,
  `date` text NOT NULL,
  `lieu_de_n` varchar(50) NOT NULL,
  `secteur` varchar(30) NOT NULL,
  `univ` varchar(30) NOT NULL,
  `grade` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(30) NOT NULL,
  `mdp` text NOT NULL,
  `bio` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`id`, `nom`, `prenom`, `date`, `lieu_de_n`, `secteur`, `univ`, `grade`, `email`, `username`, `mdp`, `bio`) VALUES
(2, '', '', '', '', '', '', '', '', 'mmm', 'mmmm', '');

-- --------------------------------------------------------

--
-- Structure de la table `article`
--

CREATE TABLE `article` (
  `id_article` int(50) NOT NULL,
  `titreart` varchar(50) NOT NULL,
  `lienart` varchar(255) NOT NULL,
  `resumeart` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `article`
--

INSERT INTO `article` (`id_article`, `titreart`, `lienart`, `resumeart`) VALUES
(1, 'Towards enhanced reactive routing in urban Vehicul', 'https://www.researchgate.net/profile/Soufiene_Djahel/publication/280317385_Towards_Enhanced_Reactive_Routing_in_Urban_Vehicular_Ad_hoc_Networks/links/55b24f4908aec0e5f4317a43/Towards-Enhanced-Reactive-Routing-in-Urban-Vehicular-Ad-hoc-Networks.pdf', 'In this paper, we investigate the efficiency of the reactive routing approach in Vehicular Ad\r\nHoc Networks (VANETs) with main focus on reducing the incurred overhead by control\r\npackets used for rout'),
(2, 'reseau', 'https://scholar.google.fr/citations?user=dgcdtUMAAAAJ&hl=fr#d=gs_md_cita-d&p=&u=%2Fcitations%3Fview_op%3Dview_citation%26hl%3Dfr%26user%3DdgcdtUMAAAAJ%26citation_for_view%3DdgcdtUMAAAAJ%3Au5HHmVD_uO8C%26tzom%3D-60', 'gggggggggggggg');

-- --------------------------------------------------------

--
-- Structure de la table `support`
--

CREATE TABLE `support` (
  `id` int(11) NOT NULL,
  `nom` text NOT NULL,
  `annee` text NOT NULL,
  `resumer` text NOT NULL,
  `type` varchar(10) NOT NULL,
  `lien` text NOT NULL,
  `module` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `support`
--

INSERT INTO `support` (`id`, `nom`, `annee`, `resumer`, `type`, `lien`, `module`) VALUES
(1, '', '2Ã©me annÃ©e informatique', '', '', '', ''),
(2, '', '2Ã©me annÃ©e informatique', '', '', '', ''),
(3, 'opooo', '', '', '', 'opo.html', ''),
(5, 'mm', '2Ã©me annÃ©e informatique', 'mm', '', 'mm', 'mm'),
(6, 'mm', '2Ã©me annÃ©e informatique', 'mm', '', 'mm', 'mm'),
(7, 'mm', '2Ã©me annÃ©e informatique', 'mm', 'Cour', 'mm', 'mm');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `actuallite`
--
ALTER TABLE `actuallite`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Index pour la table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id_article`),
  ADD UNIQUE KEY `id_article` (`id_article`),
  ADD UNIQUE KEY `id_article_2` (`id_article`),
  ADD UNIQUE KEY `id_article_3` (`id_article`);

--
-- Index pour la table `support`
--
ALTER TABLE `support`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `actuallite`
--
ALTER TABLE `actuallite`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `article`
--
ALTER TABLE `article`
  MODIFY `id_article` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `support`
--
ALTER TABLE `support`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
