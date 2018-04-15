-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  lun. 16 avr. 2018 à 01:23
-- Version du serveur :  10.1.31-MariaDB
-- Version de PHP :  7.2.3

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
-- Structure de la table `support`
--

CREATE TABLE `support` (
  `id` int(11) NOT NULL,
  `nom` text NOT NULL,
  `annee` text NOT NULL,
  `resumer` text NOT NULL,
  `type` varchar(10) NOT NULL,
  `lien` text NOT NULL,
  `count` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `support`
--

INSERT INTO `support` (`id`, `nom`, `annee`, `resumer`, `type`, `lien`, `count`) VALUES
(1, 'traitement de signal', '2018', 'test test', 'pdf', '../8742f1fdc2cb59b96955e6c3bfc63debf0324a4f2255435c82cd792c74d7f26a1be60359d28af47aaab02e5bd454810097842bca2676d8ff535cfe56c951b4f4/test.pdf', 0),
(2, 'compression', '2019', 'test', 'docx', '../8742f1fdc2cb59b96955e6c3bfc63debf0324a4f2255435c82cd792c74d7f26a1be60359d28af47aaab02e5bd454810097842bca2676d8ff535cfe56c951b4f4/test.pdf', 0),
(3, 'test', '2018', 'bla bla bla bla', 'image', '../8742f1fdc2cb59b96955e6c3bfc63debf0324a4f2255435c82cd792c74d7f26a1be60359d28af47aaab02e5bd454810097842bca2676d8ff535cfe56c951b4f4/8jy7w-6996h.jpg', 0),
(4, 'test2', '2018', 'Z29nbw==', 'lien', 'aHR0cHM6Ly93d3cudzNzY2hvb2xzLmNvbS9qc3JlZi9wcm9wX2NoZWNrYm94X2NoZWNrZWQuYXNw', 0),
(5, 'modulation amplitude', '2018', 'TGEgbW9kdWxhdGlvbiBkJ2FtcGxpdHVkZSBvdSBNQSAoQU0gZW4gYW5nbGFpcykgZXN0IHVuZSB0ZWNobmlxdWUgdXRpbGlz6WUgcG91ciBtb2R1bGVyIHVuIHNpZ25hbC4gRWxsZSBjb25zaXN0ZSBlbiBsYSBtdWx0aXBsaWNhdGlvbiBkdSBzaWduYWwg4CBtb2R1bGVyIHBhciB1biBzaWduYWwgZGUgZnLpcXVlbmNlIHBsdXMg6WxldullLg==', 'lien', 'aHR0cHM6Ly9mci53aWtpcGVkaWEub3JnL3dpa2kvTW9kdWxhdGlvbl9kJTI3YW1wbGl0dWRl', 2);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `support`
--
ALTER TABLE `support`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `support`
--
ALTER TABLE `support`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
