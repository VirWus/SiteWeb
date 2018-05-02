-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 15, 2018 at 10:39 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `siteweb`
--

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

CREATE TABLE IF NOT EXISTS `article` (
  `id_article` int(50) NOT NULL AUTO_INCREMENT,
  `titreart` varchar(50) NOT NULL,
  `lien` varchar(255) NOT NULL,
  `resume` varchar(200) NOT NULL,
  PRIMARY KEY (`id_article`),
  UNIQUE KEY `id_article` (`id_article`),
  UNIQUE KEY `id_article_2` (`id_article`),
  UNIQUE KEY `id_article_3` (`id_article`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `article`
--

INSERT INTO `article` (`id_article`, `titreart`, `lien`, `resume`) VALUES
(1, 'Towards enhanced reactive routing in urban Vehicul', 'https://www.researchgate.net/profile/Soufiene_Djahel/publication/280317385_Towards_Enhanced_Reactive_Routing_in_Urban_Vehicular_Ad_hoc_Networks/links/55b24f4908aec0e5f4317a43/Towards-Enhanced-Reactive-Routing-in-Urban-Vehicular-Ad-hoc-Networks.pdf', 'In this paper, we investigate the efficiency of the reactive routing approach in Vehicular Ad\r\nHoc Networks (VANETs) with main focus on reducing the incurred overhead by control\r\npackets used for rout'),
(2, 'reseau', 'https://scholar.google.fr/citations?user=dgcdtUMAAAAJ&hl=fr#d=gs_md_cita-d&p=&u=%2Fcitations%3Fview_op%3Dview_citation%26hl%3Dfr%26user%3DdgcdtUMAAAAJ%26citation_for_view%3DdgcdtUMAAAAJ%3Au5HHmVD_uO8C%26tzom%3D-60', 'gggggggggggggg'),
(3, 'opooo', 'opo.html', 'gfffffffffffffff');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
