-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  sam. 05 mai 2018 à 22:21
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
-- Structure de la table `actuallite`
--

CREATE TABLE `actuallite` (
  `id` int(11) NOT NULL,
  `titre` varchar(50) NOT NULL,
  `date` text NOT NULL,
  `contenu` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `lien` text NOT NULL,
  `image` text NOT NULL,
  `id_A` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `actuallite`
--

INSERT INTO `actuallite` (`id`, `titre`, `date`, `contenu`, `lien`, `image`, `id_A`) VALUES
(5, 'csOpc2VhdQ==', '2018-04-30', 'Y291ciBkZSByw6lzZWF1w6AgOTozMA==', 'Lw==', '', 0),
(6, 'cHLDqXNlbnRhdGlvbiBkZSBzaXRlIHdlYg==', '2018-04-29', 'cHLDqXNlbnRhdGlvbiBkZXMgc2l0ZSB3ZWIgZCdlbnNlaWduYW50', 'Lw==', '', 0);

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `nom` varchar(20) NOT NULL,
  `prenom` varchar(15) NOT NULL,
  `username` varchar(20) NOT NULL,
  `email` text NOT NULL,
  `motdepasse` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `article`
--

CREATE TABLE `article` (
  `id` int(11) NOT NULL,
  `id_admin` int(11) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `date_de_pub` date NOT NULL,
  `description` text NOT NULL,
  `lien` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `article`
--

INSERT INTO `article` (`id`, `id_admin`, `titre`, `date_de_pub`, `description`, `lien`) VALUES
(5, 1, 'VG93YXJkcyBlbmhhbmNlZCByZWFjdGl2ZSByb3V0aW5nIGluIHVyYmFuIFZlaGljdWxhciBBZCBob2MgTmV0d29ya3M=', '2015-07-22', 'SW4gdGhpcyBwYXBlciwgd2UgaW52ZXN0aWdhdGUgdGhlIGVmZmljaWVuY3kgb2YgdGhlIHJlYWN0aXZlIHJvdXRpbmcgYXBwcm9hY2ggaW4gVmVoaWN1bGFyIEFkICBIb2MgTmV0d29ya3MgKFZBTkVUcykgd2l0aCBtYWluIGZvY3VzIG9uIHJlZHVjaW5nIHRoZSBpbmN1cnJlZCBvdmVyaGVhZCBieSBjb250cm9sICBwYWNrZXRzIHVzZWQgZm9yIHJvdXRlcyBlc3RhYmxpc2htZW50LiBJbiBBT0RWLCBmb3IgZXhhbXBsZSwgdGhlIGV4Y2Vzc2l2ZSBudW1iZXIgb2YgIFJSRVFzIGJyb2FkY2FzdGVkIGluIHRoZSBuZXR3b3JrLCB0byByZXNwb25kIHRvIHRoZSByYXBpZCBjaGFuZ2UgaW4gbmV0d29yayB0b3BvbG9neSwgIHVzdWFsbHkgaGluZGVycyB0aGUgZmFzdCB0cmFuc21pc3Npb24gb2Ygc29tZSBpbXBvcnRhbnQgcGFja2V0cyBjYXJyeWluZyBjcml0aWNhbCBpbmZvcm1hdGlvbi4gIE1vcmVvdmVyLCBpdCBtYXkgYWxzbyBsZWFkIHRvIHNldmVyZSBjb25nZXN0aW9uIHNpdHVhdGlvbnMgY2F1c2luZyB0aGUgbG9zcyBvZiBzb21lIHBhY2tldHMsICBhbmQgdGh1cyByZWR1Y2luZyB0aGUgUW9TIG9mIHRoZSBjb3JyZXNwb25kaW5nIGFwcGxpY2F0aW9ucy4gVG8gZmFjZSB0aGlzIHByb2JsZW0sIHdlICBwcm9wb3NlIGEgc2ltcGxlIHlldCBlZmZpY2llbnQgc29sdXRpb24gaW4gd2hpY2ggZWFjaCB2ZWhpY2xlIGFwcGVuZHMgdGhlIGdlb2dyYXBoaWNhbCAgbG9jYXRpb24gb2YgdGhlIGRlc3RpbmF0aW9uIHRvIGVhY2ggZ2VuZXJhdGVkIFJSRVEgcGFja2V0LiBUaGVyZWJ5LCB0aGlzIGxhdHRlciBwYWNrZXQgd2lsbCAgYmUgcmVicm9hZGNhc3RlZCBvbmx5IGJ5IHRoZSByZWNlaXZlciB2ZWhpY2xlcyBsb2NhdGVkIGF0IHRoaXMgcmVnaW9uIG9yIGhlYWRpbmcgdG93YXJkcyDigKY=', 'aHR0cHM6Ly93d3cucmVzZWFyY2hnYX'),
(7, 1, 'VW5pY2FzdCByb3V0aW5nIG9uIFZBTkVUcw==', '2016-09-11', 'R3JlZWR5IHJvdXRpbmcgaW4gVkFORVRzIHJlcXVpcmVzIHNvbWUgZ2VvZ3JhcGhpY2FsIGluZm9ybWF0aW9ucywgc3VjaCBhcyB0aGUgc291cmNlICBsb2NhdGlvbiBhbmQgdGhlIGRlc3RpbmF0aW9uIGxvY2F0aW9uLiBUaGUgZmlyc3Qgb25lIGNvdWxkIGJlIG9idGFpbmVkIHVzaW5nIHNvbWUgIGxvY2FsaXphdGlvbiBkZXZpY2VzIGxpa2UgR1BTIHJlY2VpdmVyLiBIb3dldmVyLCB0aGUgc2Vjb25kIG9uZSBpcyBwcm92aWRlZCBieSBhIGxvY2F0aW9uICBzZXJ2aWNlLiBUaGlzIGxhdGVyIGhhcyBhIGhpZ2ggb3ZlcmhlYWQgZXNwZWNpYWxseSBpZiBpdCBpcyBpbXBsZW1lbnRlZCBvdmVyIFYyViAodmVoaWNsZSB0byAgdmVoaWNsZSkgY29tbXVuaWNhdGlvbnMuIE1hbnkgbG9jYXRpb24gc2VydmljZXMgYXJlIHdlbGwga25vd24gYXMgSExTLCBSTFMsIEdMUy4gVGhpcyAgcGFwZXIgaXMgaW50ZXJlc3RlZCBpbiByZWR1Y2luZyB0aGlzIG92ZXJoZWFkIGJ5IHVzaW5nIHNvbWUgUm9hZCBTaWRlIFVuaXRzIChSU1UpIGFscmVhZHkgIGRlcGxveWVkIGFsb25nIHRoZSByb2Fkcy4gV2UgcHJvcG9zZSBoZXJlIGEgbG9jYXRpb24gc2VydmljZSBjYWxsZWQiIGltcHJvdmVkIFJlYWN0aXZlICBMb2NhdGlvbiBTZXJ2aWNlIChpUkxTKSIsIHdoaWNoIGlzIGFuIGV4dGVuc2lvbiBvZiB0aGUgUkxTIHNlcnZpY2UuIFRoZSBtYWpvciBkaWZmZXJlbmNlIGlzICB0aGF0IFJMUyBhc3N1bWVzIG9ubHkgVjJWIGNvbW11bmljYXRpb25zIGFuZCBpUkxTIHRha2VzIHByb2ZpdCBvZiBhIHdpcmVsZXNzIGJhY2tib25lICBiYXNlZCBvbiBSU1VzIHRvIGNhdGNoIHRoZSBkZXN0aW5hdGlvbidzIHBvc2l0aW9uLiBUaGlzIGFsbG93cyB0byByZWR1Y2UgdGhlIG92ZXJoZWFkIOKApg==', 'R3JlZWR5IHJvdXRpbmcgaW4gVkFORV');

-- --------------------------------------------------------

--
-- Structure de la table `enseignant`
--

CREATE TABLE `enseignant` (
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
  `bio` text NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `enseignant`
--

INSERT INTO `enseignant` (`id`, `nom`, `prenom`, `date`, `lieu_de_n`, `secteur`, `univ`, `grade`, `email`, `username`, `mdp`, `bio`, `image`) VALUES
(1, 'Moussaoui', 'boubakeur', '20/02/1977', 'Bordj Bou Arreridj', 'mi', 'BBa', 'Maitre-Assistant', 'Moussaoui_Boubakeur@gmail.com', 'Moussaoui Boubakeur', 'c7ad44cbad762a5da0a452f9e854fdc1e0e7a52a38015f23f3eab1d80b931dd472634dfac71cd34ebc35d16ab7fb8a90c81f975113d6c7538dc69dd8de9077ec3a2a87e770442585430550b174f476df', '...', 'Li4vaW1nLzEucG5n');

-- --------------------------------------------------------

--
-- Structure de la table `module`
--

CREATE TABLE `module` (
  `id` int(11) NOT NULL,
  `id_admin` int(11) NOT NULL,
  `nom_module` text NOT NULL,
  `description` text NOT NULL,
  `niveau` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `module`
--

INSERT INTO `module` (`id`, `id_admin`, `nom_module`, `description`, `niveau`) VALUES
(12, 1, 'Poo', 'Programmation orienté objet', 'deuxième Licence'),
(13, 1, 'Réseau', 'Réseaux de communication ', 'deuxième Licence'),
(14, 1, 'Bdoo', 'Base de donnée orienté objet ', 'troisième Licence'),
(15, 1, 'Sys_info', 'système informatique à l’aide à la décision ', 'Master');

-- --------------------------------------------------------

--
-- Structure de la table `support`
--

CREATE TABLE `support` (
  `id` int(11) NOT NULL,
  `nom` text CHARACTER SET utf8 COLLATE utf8_polish_ci NOT NULL,
  `resumer` text NOT NULL,
  `type` varchar(10) NOT NULL,
  `lien` text NOT NULL,
  `Module` varchar(30) NOT NULL,
  `count` int(11) NOT NULL,
  `id_support` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `support`
--

INSERT INTO `support` (`id`, `nom`, `resumer`, `type`, `lien`, `Module`, `count`, `id_support`) VALUES
(8, 'QWRyZXNzYWdlIGlwICA=', 'Lw==', '1', 'Li4vODc0MmYxZmRjMmNiNTliOTY5NTVlNmMzYmZjNjNkZWJmMDMyNGE0ZjIyNTU0MzVjODJjZDc5MmM3NGQ3ZjI2YTFiZTYwMzU5ZDI4YWY0N2FhYWIwMmU1YmQ0NTQ4MTAwOTc4NDJiY2EyNjc2ZDhmZjUzNWNmZTU2Yzk1MWI0ZjQvY291cnMtMnJlc2VhdXgucGRm', '13', 2, 0),
(12, 'Z29vZ2xl', 'Z2ZhemZhemY=', '1', 'aHR0cHM6Ly93d3cuZ29vZ2xlLmNvbQ==', '12', 0, 0),
(14, 'dGVzdA==', 'dGV0cw==', '1', 'Li4vODc0MmYxZmRjMmNiNTliOTY5NTVlNmMzYmZjNjNkZWJmMDMyNGE0ZjIyNTU0MzVjODJjZDc5MmM3NGQ3ZjI2YTFiZTYwMzU5ZDI4YWY0N2FhYWIwMmU1YmQ0NTQ4MTAwOTc4NDJiY2EyNjc2ZDhmZjUzNWNmZTU2Yzk1MWI0ZjQvUsOpc3VtZXIgQkRELlBERg==', '12', 0, 0),
(15, 'dGVzdA==', 'dGV0cw==', '1', 'Li4vODc0MmYxZmRjMmNiNTliOTY5NTVlNmMzYmZjNjNkZWJmMDMyNGE0ZjIyNTU0MzVjODJjZDc5MmM3NGQ3ZjI2YTFiZTYwMzU5ZDI4YWY0N2FhYWIwMmU1YmQ0NTQ4MTAwOTc4NDJiY2EyNjc2ZDhmZjUzNWNmZTU2Yzk1MWI0ZjQvVEQ0IChBdmVjIFNvbHV0aW9uKSAucGRm', '12', 0, 0);

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
-- Index pour la table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `enseignant`
--
ALTER TABLE `enseignant`
  ADD UNIQUE KEY `id` (`id`);

--
-- Index pour la table `module`
--
ALTER TABLE `module`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `article`
--
ALTER TABLE `article`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `enseignant`
--
ALTER TABLE `enseignant`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `module`
--
ALTER TABLE `module`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT pour la table `support`
--
ALTER TABLE `support`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
