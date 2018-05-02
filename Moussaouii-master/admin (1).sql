-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 21, 2018 at 11:52 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `siteweb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
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
  `bio` text NOT NULL,
  `phone` varchar(50) NOT NULL,
  `adresse` varchar(100) NOT NULL,
  `baccalaureat` varchar(200) NOT NULL,
  `ingeniorat` varchar(200) NOT NULL,
  `Magistere` varchar(200) NOT NULL,
  `Doctorat` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `nom`, `prenom`, `date`, `lieu_de_n`, `secteur`, `univ`, `grade`, `email`, `username`, `mdp`, `bio`, `phone`, `adresse`, `baccalaureat`, `ingeniorat`, `Magistere`, `Doctorat`) VALUES
(2, 'MOUSSAOUI', 'Boubaker', '--/--/----', 'bordj bou arreridj', 'Informatique', 'Bordj bou arreridj', 'proffesseur', 'moussaoui@gmail.com', 'admin', 'admin', 'baccalaurÃ©at : 1996 science exacte lycÃ©e ali madoui  ,ingÃ©niorat : UniversitÃ© de SÃ©tif 2002 ïƒ¼	MagistÃ¨re : UniversitÃ© de Abderrahmane mira BejaÃ¯a  , Depuis 2005 enseignant Ã  lâ€™universitÃ© de BBA ', '+2130000001', 'adresse BBa Bordj bou arreridj', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
