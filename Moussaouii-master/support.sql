-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Sam 21 Avril 2018 à 13:25
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
-- Structure de la table `support`
--

CREATE TABLE `support` (
  `id` int(11) NOT NULL,
  `nomdoc` text NOT NULL,
  `anneedoc` text NOT NULL,
  `resumerdoc` text NOT NULL,
  `typedoc` varchar(10) NOT NULL,
  `liendrivedoc` text NOT NULL,
  `moduledoc` varchar(50) NOT NULL,
  `lienteledoc` text CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `support`
--

INSERT INTO `support` (`id`, `nomdoc`, `anneedoc`, `resumerdoc`, `typedoc`, `liendrivedoc`, `moduledoc`, `lienteledoc`) VALUES
(51, 'bxcx', '2Ã©me annÃ©e informatique', 'cvbxb', 'Cour', 'vbc', 'vcnc', 'Cycle de vie d.docx'),
(53, '', '2Ã©me annÃ©e informatique', '', 'Cour', '', '', 'docs_SI Examen 2015.PDF'),
(54, '', '2Ã©me annÃ©e informatique', '', 'Cour', 'https://drive.google.com/file/d/1IjLkcDNubxtTC7wxrRj5K96ysN8efBed/view?usp=sharing', '', 'vide');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `support`
--
ALTER TABLE `support`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `support`
--
ALTER TABLE `support`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
