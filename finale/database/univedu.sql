-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  Dim 22 avr. 2018 à 04:31
-- Version du serveur :  10.1.26-MariaDB
-- Version de PHP :  7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `univedu`
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
(7, 'walid', '2018-04-03', 'fdfkdf', 'fdsf^dsfds'),
(8, 'fdsqfqsdf', '2018-04-11', 'zaerezrze', 'f'),
(9, 'ofskdpgfd', '2018-04-10', 'gfdsgsdgfds', 'regerzfds');

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
  `mdp` varchar(160) NOT NULL,
  `bio` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`id`, `nom`, `prenom`, `date`, `lieu_de_n`, `secteur`, `univ`, `grade`, `email`, `username`, `mdp`, `bio`) VALUES
(1, 'moussaoui ', 'boubaker', '20/10/1970', 'bba', 'mi', 'bba', 'pro', 'test@gmail.com', 'walid', '9b71d224bd62f3785d96d46ad3ea3d73319bfbc2890caadae2dff72519673ca72323c3d99ba5c11d7c7acc6e14b8c5da0c4663475c2e5c3adef46f73bcdec0433a2a87e770442585430550b174f476df', 'fdfdfdffdfdfsdfs');

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
  `module` varchar(25) NOT NULL,
  `count` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `support`
--

INSERT INTO `support` (`id`, `nom`, `annee`, `resumer`, `type`, `lien`, `module`, `count`) VALUES
(6, 'ZmRzZnM=', 'fdsf', 'ZmRzZnNk', '2', 'Li4vODc0MmYxZmRjMmNiNTliOTY5NTVlNmMzYmZjNjNkZWJmMDMyNGE0ZjIyNTU0MzVjODJjZDc5MmM3NGQ3ZjI2YTFiZTYwMzU5ZDI4YWY0N2FhYWIwMmU1YmQ0NTQ4MTAwOTc4NDJiY2EyNjc2ZDhmZjUzNWNmZTU2Yzk1MWI0ZjQvZnJlZS1ib29rLmpwZw==', '1', 0),
(8, 'ZmZmZg==', 'Master', 'ZmZmZmZmZmY=', '4', 'Li4vODc0MmYxZmRjMmNiNTliOTY5NTVlNmMzYmZjNjNkZWJmMDMyNGE0ZjIyNTU0MzVjODJjZDc5MmM3NGQ3ZjI2YTFiZTYwMzU5ZDI4YWY0N2FhYWIwMmU1YmQ0NTQ4MTAwOTc4NDJiY2EyNjc2ZDhmZjUzNWNmZTU2Yzk1MWI0ZjQvZnJlZS1ib29rLmpwZw==', '3', 0);

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
  ADD PRIMARY KEY (`id`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `support`
--
ALTER TABLE `support`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
