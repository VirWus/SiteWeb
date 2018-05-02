-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Sam 21 Avril 2018 à 19:13
-- Version du serveur :  10.1.21-MariaDB
-- Version de PHP :  7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
  `LienImage` text CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `actuallite`
--

INSERT INTO `actuallite` (`id`, `titre`, `date`, `contenu`, `LienImage`) VALUES
(40, 'ilyes', '', '', 'admin/main/php/imageact/Image__71825_1498272486.jpeg'),
(41, 'dfghjklkhfds', '', '', '../../../imageact/Image__71825_1498272486.jpeg');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `actuallite`
--
ALTER TABLE `actuallite`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `actuallite`
--
ALTER TABLE `actuallite`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
