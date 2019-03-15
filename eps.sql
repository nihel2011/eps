-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  ven. 15 mars 2019 à 18:21
-- Version du serveur :  10.1.34-MariaDB
-- Version de PHP :  5.6.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `eps`
--

-- --------------------------------------------------------

--
-- Structure de la table `bai18n`
--

CREATE TABLE `bai18n` (
  `id` int(10) NOT NULL,
  `locale` varchar(6) NOT NULL,
  `model` varchar(255) NOT NULL,
  `foreign_key` int(10) NOT NULL,
  `field` varchar(255) NOT NULL,
  `content` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `bai18n`
--

INSERT INTO `bai18n` (`id`, `locale`, `model`, `foreign_key`, `field`, `content`) VALUES
(1, 'fre', 'Menu', 1, 'name', 'Accueil'),
(2, 'eng', 'Menu', 1, 'name', 'Home'),
(3, 'fre', 'Menu', 2, 'name', 'PrÃ©sentation'),
(4, 'eng', 'Menu', 2, 'name', ''),
(5, 'fre', 'Menu', 3, 'name', 'Services'),
(6, 'eng', 'Menu', 3, 'name', ''),
(7, 'fre', 'Menu', 4, 'name', 'RÃ©fÃ©rences'),
(8, 'eng', 'Menu', 4, 'name', ''),
(11, 'fre', 'Slideshow', 1, 'name', '1'),
(12, 'eng', 'Slideshow', 1, 'name', ''),
(13, 'fre', 'Slideshow', 1, 'text', '<p>szdefrgtyujhi</p>'),
(14, 'eng', 'Slideshow', 1, 'text', ''),
(15, 'fre', 'Slideshow', 2, 'name', 'zsedfghjk'),
(16, 'eng', 'Slideshow', 2, 'name', ''),
(17, 'fre', 'Slideshow', 2, 'text', '<p>dgfhgfgjkhjlkmj</p>'),
(18, 'eng', 'Slideshow', 2, 'text', ''),
(19, 'fre', 'Service', 1, 'name', 'Assistance technique '),
(20, 'eng', 'Service', 1, 'name', 'Assistance technique pour la mise en place des systÃ¨mes de gestion industrielle type GMAO â€“ GPAO-ERP'),
(21, 'fre', 'Service', 1, 'resume', '<p>pour la mise en place des syst&egrave;mes de gestion industrielle type GMAO &ndash; GPAO-ERP</p>'),
(22, 'eng', 'Service', 1, 'resume', ''),
(23, 'fre', 'Service', 1, 'description', '<p><span>Assistance technique pour la mise en place des syst&egrave;mes de gestion industrielle type GMAO &ndash; GPAO-ERP</span></p>\r\n<p><span><span>Assistance technique pour la mise en place des syst&egrave;mes de gestion industrielle type GMAO &ndash; GPAO-ERP</span></span></p>\r\n<p><span>Assistance technique pour la mise en place des syst&egrave;mes de gestion industrielle type GMAO &ndash; GPAO-ERP</span></p>\r\n<p><span><span>Assistance technique pour la mise en place des syst&egrave;mes de gestion industrielle type GMAO &ndash; GPAO-ERP</span></span></p>\r\n<p><span>Assistance technique pour la mise en place des syst&egrave;mes de gestion industrielle type GMAO &ndash; GPAO-ERP</span></p>\r\n<p><span><span>Assistance technique pour la mise en place des syst&egrave;mes de gestion industrielle type GMAO &ndash; GPAO-ERP</span></span></p>\r\n<p><span>Assistance technique pour la mise en place des syst&egrave;mes de gestion industrielle type GMAO &ndash; GPAO-ERP</span></p>\r\n<p><span><span>Assistance technique pour la mise en place des syst&egrave;mes de gestion industrielle type GMAO &ndash; GPAO-ERP</span></span></p>\r\n<p><span>Assistance technique pour la mise en place des syst&egrave;mes de gestion industrielle type GMAO &ndash; GPAO-ERP</span></p>\r\n<p><span><span>Assistance technique pour la mise en place des syst&egrave;mes de gestion industrielle type GMAO &ndash; GPAO-ERP</span></span></p>\r\n<p><span>Assistance technique pour la mise en place des syst&egrave;mes de gestion industrielle type GMAO &ndash; GPAO-ERP</span></p>\r\n<p><span><span>Assistance technique pour la mise en place des syst&egrave;mes de gestion industrielle type GMAO &ndash; GPAO-ERP</span><span>Assistance technique pour la mise en place des syst&egrave;mes de gestion industrielle type GMAO &ndash; GPAO-ERP</span></span></p>\r\n<p>&nbsp;</p>'),
(24, 'eng', 'Service', 1, 'description', ''),
(25, 'fre', 'Service', 2, 'name', 'Audit des systÃ¨mes de gestion industrielle'),
(26, 'eng', 'Service', 2, 'name', 'Audit des systÃ¨mes de gestion industrielle'),
(27, 'fre', 'Service', 2, 'resume', '<p><span style=\"color: #008080;\">&nbsp;</span></p>'),
(28, 'eng', 'Service', 2, 'resume', ''),
(29, 'fre', 'Service', 2, 'description', ''),
(30, 'eng', 'Service', 2, 'description', ''),
(31, 'fre', 'Service', 3, 'name', 'Diagnostic avancÃ© des systÃ¨mes de gestion industriel'),
(32, 'eng', 'Service', 3, 'name', 'Diagnostic avancÃ© des systÃ¨mes de gestion industriel'),
(33, 'fre', 'Service', 3, 'resume', '<p><span style=\"color: #339966;\">&nbsp;</span></p>'),
(34, 'eng', 'Service', 3, 'resume', ''),
(35, 'fre', 'Service', 3, 'description', ''),
(36, 'eng', 'Service', 3, 'description', ''),
(37, 'fre', 'Service', 4, 'name', 'PrÃ©paration des dossiers de mise Ã  niveau'),
(38, 'eng', 'Service', 4, 'name', 'PrÃ©paration des dossiers de mise Ã  niveau'),
(39, 'fre', 'Service', 4, 'resume', '<p><span style=\"color: #339966;\">&nbsp;</span></p>'),
(40, 'eng', 'Service', 4, 'resume', ''),
(41, 'fre', 'Service', 4, 'description', ''),
(42, 'eng', 'Service', 4, 'description', ''),
(43, 'fre', 'Infosite', 1, 'adresse', 'Route de Sousse Km 5.5 GP1 Immeuble ChÃ©rif Bureau NÂ° 5 Ben Arous'),
(44, 'eng', 'Infosite', 1, 'adresse', 'Route de Sousse Km 5.5 GP1 Immeuble ChÃ©rif Bureau NÂ° 5 Ben Arous'),
(71, 'fre', 'Statistique', 4, 'name', 'Langues+'),
(72, 'eng', 'Statistique', 4, 'name', 'Langue'),
(73, 'fre', 'Statistique', 3, 'name', 'Multiplicateurs de performance '),
(74, 'eng', 'Statistique', 3, 'name', ''),
(75, 'fre', 'Statistique', 2, 'name', 'Logiciels mÃ©tier+'),
(76, 'eng', 'Statistique', 2, 'name', 'Logiciels mÃ©tier'),
(77, 'fre', 'Statistique', 1, 'name', ' clients nous a fait confiance en  une semaine+'),
(78, 'eng', 'Statistique', 1, 'name', 'clients nous a fait confiance en  une semaine'),
(90, 'fre', 'Partenaire', 4, 'description', '<p>PARTENAIRE 2</p>'),
(91, 'eng', 'Partenaire', 4, 'description', '<p>PARTENAIRE 2</p>'),
(92, 'fre', 'Partenaire', 4, 'name', 'ACOSERV'),
(93, 'eng', 'Partenaire', 4, 'name', 'ACOSERV'),
(94, 'fre', 'Partenaire', 5, 'description', '<p>PARTENAIRE 3</p>'),
(95, 'eng', 'Partenaire', 5, 'description', '<p>PARTENAIRE 3</p>'),
(96, 'fre', 'Partenaire', 5, 'name', 'Cafe ben yedder'),
(97, 'eng', 'Partenaire', 5, 'name', 'Cafe ben yedder'),
(98, 'fre', 'Partenaire', 6, 'description', '<p>PARTENAIRE 4</p>'),
(99, 'eng', 'Partenaire', 6, 'description', ''),
(100, 'fre', 'Partenaire', 6, 'name', 'Bonna beton'),
(101, 'eng', 'Partenaire', 6, 'name', 'Bonna beton'),
(114, 'fre', 'Contenus', 1, 'description', '<div class=\"single-media\">\r\n<p>Notre cabinet international de formation \"Univers Formation\" cr&eacute;e en 2003 par M HABIB MASMOUDI .</p>\r\n<p>Depuis sa cr&eacute;ation, elle s\'est bien distingu&eacute;e par la qualit&eacute; de ses th&egrave;mes et la qualit&eacute; de ses formateurs. En fait, on organise d\'une mani&egrave;re continue des s&eacute;minaires et des actions de formation (en inter- et intra-entreprise) et dans les diff&eacute;rents domaines (Audit, Qualit&eacute;, Management, Sant&eacute; et S&eacute;curit&eacute; au travail, Achat, Logistique, Pharmaceutique&hellip;) et sp&eacute;cialement dans les th&egrave;mes informatiques et les Techniques industrielles</p>\r\n<ul>\r\n<li><strong>Principe: </strong>Vos besoins sont nos objectifs et vos objectifs sont nos soucis.</li>\r\n<li><strong>Nos Produits : </strong>Des s&eacute;minaires de formation, des cycles de formation continue, des cours de soir, des &eacute;tudes et des diagnostics.</li>\r\n<li><strong>Nos Competences:</strong></li>\r\n</ul>\r\n<h4>La qualit&eacute; de nos formateurs :</h4>\r\n<ul>\r\n<li>des ing&eacute;nieurs recrut&eacute;s et un r&eacute;seaux de professionnels de formation, bien exp&eacute;riment&eacute;s et sp&eacute;cialis&eacute;s dans leurs domaines</li>\r\n</ul>\r\n<h4>Notre p&eacute;dagogie :</h4>\r\n<ul>\r\n<li>Apports th&eacute;oriques concr&eacute;tis&eacute;s par le traitement des cas r&eacute;els, travail de groupe, discussion et transfert des comp&eacute;tences.</li>\r\n<li><strong>Nos moyens </strong>Nouvelles m&eacute;thodes d\'animation, salle de formation bien &eacute;quip&eacute;s, des logiciels informatiques dans tous les domaines et des supports de cours riches et utiles.</li>\r\n</ul>\r\n</div>'),
(115, 'eng', 'Contenus', 1, 'description', '<p>Notre cabinet international de formation \"Univers Formation\" cr&eacute;e en 2003 par M HABIB MASMOUDI .</p>\r\n<p>Depuis sa cr&eacute;ation, elle s\'est bien distingu&eacute;e par la qualit&eacute; de ses th&egrave;mes et la qualit&eacute; de ses formateurs. En fait, on organise d\'une mani&egrave;re continue des s&eacute;minaires et des actions de formation (en inter- et intra-entreprise) et dans les diff&eacute;rents domaines (Audit, Qualit&eacute;, Management, Sant&eacute; et S&eacute;curit&eacute; au travail, Achat, Logistique, Pharmaceutique&hellip;) et sp&eacute;cialement dans les th&egrave;mes informatiques et les Techniques industrielles</p>\r\n<ul>\r\n<ul>\r\n<li><strong>Principe: </strong>Vos besoins sont nos objectifs et vos objectifs sont nos soucis.</li>\r\n<li><strong>Nos Produits : </strong>Des s&eacute;minaires de formation, des cycles de formation continue, des cours de soir, des &eacute;tudes et des diagnostics.</li>\r\n<li><strong>Nos Competences:</strong></li>\r\n</ul>\r\n</ul>\r\n<p><strong>La qualit&eacute; de nos formateurs :</strong></p>\r\n<ul>\r\n<ul><ol>des ing&eacute;nieurs recrut&eacute;s et un r&eacute;seaux de professionnels de formation, bien exp&eacute;riment&eacute;s et sp&eacute;cialis&eacute;s dans leurs domaines</ol></ul>\r\n</ul>\r\n<p><strong>Notre p&eacute;dagogie : </strong></p>\r\n<ul><ol>Apports th&eacute;oriques concr&eacute;tis&eacute;s par le traitement des cas r&eacute;els, travail de groupe, discussion et transfert des comp&eacute;tences.</ol>\r\n<li><strong>Nos moyens </strong>Nouvelles m&eacute;thodes d\'animation, salle de formation bien &eacute;quip&eacute;s, des logiciels informatiques dans tous les domaines et des supports de cours riches et utiles.m</li>\r\n</ul>'),
(116, 'fre', 'Contenus', 1, 'title', 'PrÃ©sentation'),
(117, 'eng', 'Contenus', 1, 'title', ''),
(118, 'fre', 'Contenus', 1, 'resume', '<p>Notre cabinet international de formation \"Univers Formation\" cr&eacute;e en 2003 par M HABIB MASMOUDI .</p>\r\n<p>Depuis sa cr&eacute;ation, elle s\'est bien distingu&eacute;e par la qualit&eacute; de ses th&egrave;mes et la qualit&eacute; de ses formateurs. En fait, on organise d\'une mani&egrave;re continue des s&eacute;minaires et des actions de formation (en inter- et intra-entreprise) et dans les diff&eacute;rents domaines (Audit, Qualit&eacute;, Management, Sant&eacute; et S&eacute;curit&eacute; au travail, Achat, Logistique, Pharmaceutique&hellip;) et sp&eacute;cialement dans les th&egrave;mes informatiques et les Techniques industrielles</p>'),
(119, 'eng', 'Contenus', 1, 'resume', '<p>Notre cabinet international de formation \"Univers Formation\" cr&eacute;e en 2003 par M HABIB MASMOUDI .</p>\r\n<p>Depuis sa cr&eacute;ation, elle s\'est bien distingu&eacute;e par la qualit&eacute; de ses th&egrave;mes et la qualit&eacute; de ses formateurs. En fait, on organise d\'une mani&egrave;re continue des s&eacute;minaires et des actions de formation (en inter- et intra-entreprise) et dans les diff&eacute;rents domaines (Audit, Qualit&eacute;, Management, Sant&eacute; et S&eacute;curit&eacute; au travail, Achat, Logistique, Pharmaceutique&hellip;) et sp&eacute;cialement dans les th&egrave;mes informatiques et les Techniques industrielles</p>'),
(120, 'fre', 'Tarif', 1, 'description', '<p>dfqsdf</p>'),
(121, 'eng', 'Tarif', 1, 'description', '<p>sdfsd</p>'),
(122, 'fre', 'Tarif', 1, 'name', 'dqsd'),
(123, 'eng', 'Tarif', 1, 'name', 'sdqfs'),
(124, 'fre', 'Tarif', 1, 'resume', '<p>dsqdqsdsq</p>'),
(125, 'eng', 'Tarif', 1, 'resume', ''),
(126, 'fre', 'Tarif', 2, 'description', '<ul>\r\n<li><span>10GB</span>Space amount</li>\r\n<li><span>Unlimited</span>users</li>\r\n<li><span>30GB</span>Bandwidth</li>\r\n<li>Free Support</li>\r\n<li><span>20</span>Databases</li>\r\n</ul>'),
(127, 'eng', 'Tarif', 2, 'description', '<ul class=\"pricing-list\">\r\n<li><span class=\"text-ubold\">10GB</span>Space amount</li>\r\n<li><span class=\"text-ubold\">Unlimited</span>users</li>\r\n<li><span class=\"text-ubold\">30GB</span>Bandwidth</li>\r\n<li>Free Support</li>\r\n<li><span class=\"text-ubold\">20</span>Databases</li>\r\n</ul>'),
(128, 'fre', 'Tarif', 2, 'name', 'Business'),
(129, 'eng', 'Tarif', 2, 'name', 'Business'),
(130, 'fre', 'Tarif', 2, 'resume', ''),
(131, 'eng', 'Tarif', 2, 'resume', ''),
(132, 'fre', 'Tarif', 3, 'description', '<ul class=\"pricing-list\">\r\n<li><span class=\"text-ubold\">1GB</span>Space amount</li>\r\n<li><span class=\"text-ubold\">5</span>users</li>\r\n<li><span class=\"text-ubold\">5GB</span>Bandwidth</li>\r\n<li>No Support</li>\r\n<li><span class=\"text-ubold\">1</span>Databases</li>\r\n</ul>'),
(133, 'eng', 'Tarif', 3, 'description', ''),
(134, 'fre', 'Tarif', 3, 'name', 'Free'),
(135, 'eng', 'Tarif', 3, 'name', ''),
(136, 'fre', 'Tarif', 3, 'resume', ''),
(137, 'eng', 'Tarif', 3, 'resume', ''),
(138, 'fre', 'Tarif', 4, 'description', '<ul class=\"pricing-list\">\r\n<li><span class=\"text-ubold\">5GB</span>Space amount</li>\r\n<li><span class=\"text-ubold\">20</span>users</li>\r\n<li><span class=\"text-ubold\">10GB</span>Bandwidth</li>\r\n<li>No Support</li>\r\n<li><span class=\"text-ubold\">1</span>Databases</li>\r\n</ul>'),
(139, 'eng', 'Tarif', 4, 'description', ''),
(140, 'fre', 'Tarif', 4, 'name', 'starter'),
(141, 'eng', 'Tarif', 4, 'name', ''),
(142, 'fre', 'Tarif', 4, 'resume', ''),
(143, 'eng', 'Tarif', 4, 'resume', ''),
(156, 'fre', 'Slideshow', 6, 'name', 'azertyuiop'),
(157, 'eng', 'Slideshow', 6, 'name', ''),
(158, 'fre', 'Slideshow', 6, 'text', '<p>mlkjhgfdsqsxcvbn</p>'),
(159, 'eng', 'Slideshow', 6, 'text', ''),
(170, 'fre', 'Service', 6, 'name', 'Pacty'),
(171, 'eng', 'Service', 6, 'name', ''),
(172, 'fre', 'Service', 6, 'resume', '<p><span>Suivi des plans d\'action</span></p>'),
(173, 'eng', 'Service', 6, 'resume', '<p><span>Portail RH-SIRH pour une gestion collaborative de tous les processus RH.</span></p>'),
(174, 'fre', 'Service', 6, 'description', '<p><span>Portail RH-SIRH pour une gestion collaborative de tous les processus RH.</span></p>'),
(175, 'eng', 'Service', 6, 'description', ''),
(176, 'fre', 'Service', 7, 'name', 'Flaggy'),
(177, 'eng', 'Service', 7, 'name', ''),
(178, 'fre', 'Service', 7, 'resume', '<p>Surveillance des indicateurs&nbsp;</p>'),
(179, 'eng', 'Service', 7, 'resume', ''),
(180, 'fre', 'Service', 7, 'description', ''),
(181, 'eng', 'Service', 7, 'description', ''),
(182, 'fre', 'Service', 8, 'name', 'Cibly'),
(183, 'eng', 'Service', 8, 'name', ''),
(184, 'fre', 'Service', 8, 'resume', '<p>Gestion par objectifs</p>'),
(185, 'eng', 'Service', 8, 'resume', ''),
(186, 'fre', 'Service', 8, 'description', ''),
(187, 'eng', 'Service', 8, 'description', ''),
(188, 'fre', 'Service', 9, 'name', 'qualitÃ© '),
(189, 'eng', 'Service', 9, 'name', ''),
(190, 'fre', 'Service', 9, 'resume', '<p><span class=\"_5yl5\"><span>qualit&eacute; </span></span><span class=\"_5yl5\"><span>qualit&eacute; </span></span><span class=\"_5yl5\"><span>qualit&eacute; </span></span><span class=\"_5yl5\"><span>qualit&eacute; </span></span><span class=\"_5yl5\"><span>qualit&eacute; </span></span><span class=\"_5yl5\"><span>qualit&eacute; </span></span></p>'),
(191, 'eng', 'Service', 9, 'resume', ''),
(192, 'fre', 'Service', 9, 'description', '<p><span class=\"_5yl5\"><span>qualit&eacute; </span></span><span class=\"_5yl5\"><span>qualit&eacute; </span></span><span class=\"_5yl5\"><span>qualit&eacute; </span></span><span class=\"_5yl5\"><span>qualit&eacute; </span></span></p>'),
(193, 'eng', 'Service', 9, 'description', ''),
(194, 'fre', 'Service', 10, 'name', 'ressource humaine'),
(195, 'eng', 'Service', 10, 'name', ''),
(196, 'fre', 'Service', 10, 'resume', '<p><span class=\"_5yl5\"><span>ressource humaine </span></span><span class=\"_5yl5\"><span>ressource humaine </span></span><span class=\"_5yl5\"><span>ressource humaine</span></span><span class=\"_5yl5\"><span> r essource humaine</span></span></p>'),
(197, 'eng', 'Service', 10, 'resume', ''),
(198, 'fre', 'Service', 10, 'description', '<p><span class=\"_5yl5\"><span>ressource humaine</span></span> <span class=\"_5yl5\"><span>ressource humaine</span></span> <span class=\"_5yl5\"><span>ressource humaine</span></span> <span class=\"_5yl5\"><span>ressource humaine</span></span> <span class=\"_5yl5\"><span>ressource humaine</span></span> <span class=\"_5yl5\"><span>ressource humaine</span></span></p>'),
(199, 'eng', 'Service', 10, 'description', ''),
(212, 'fre', 'Activite', 2, 'titre', 'dfgsdgdsfg'),
(213, 'eng', 'Activite', 2, 'titre', 'jk'),
(214, 'fre', 'Activite', 2, 'resume', '<p>kljlk</p>'),
(215, 'eng', 'Activite', 2, 'resume', 'jlkvwxcv'),
(216, 'fre', 'Activite', 2, 'description', '<p>sdfgsdf</p>'),
(217, 'eng', 'Activite', 2, 'description', 'jk'),
(218, 'fre', 'Activite', 3, 'titre', 'vwxcv'),
(219, 'eng', 'Activite', 3, 'titre', 'vxcxcv'),
(220, 'fre', 'Activite', 3, 'resume', 'wxvccvx'),
(221, 'eng', 'Activite', 3, 'resume', 'xcvxc'),
(222, 'fre', 'Activite', 3, 'description', 'wxcv'),
(223, 'eng', 'Activite', 3, 'description', 'xcvxc'),
(224, 'fre', 'Activite', 4, 'titre', 'vwxcv'),
(225, 'eng', 'Activite', 4, 'titre', 'vxcxcv'),
(226, 'fre', 'Activite', 4, 'resume', 'wxvccvx'),
(227, 'eng', 'Activite', 4, 'resume', 'xcvxc'),
(228, 'fre', 'Activite', 4, 'description', 'wxcv'),
(229, 'eng', 'Activite', 4, 'description', 'xcvxc'),
(230, 'fre', 'Activite', 5, 'titre', 'sfdgdg'),
(231, 'eng', 'Activite', 5, 'titre', 'hj'),
(232, 'fre', 'Activite', 5, 'resume', 'jhhj'),
(233, 'eng', 'Activite', 5, 'resume', 'hj'),
(234, 'fre', 'Activite', 5, 'description', 'sd'),
(235, 'eng', 'Activite', 5, 'description', 'hjh'),
(236, 'fre', 'Activite', 6, 'titre', 'wxcv'),
(237, 'eng', 'Activite', 6, 'titre', ''),
(238, 'fre', 'Activite', 6, 'resume', ''),
(239, 'eng', 'Activite', 6, 'resume', ''),
(240, 'fre', 'Activite', 6, 'description', 'mllm'),
(241, 'eng', 'Activite', 6, 'description', ''),
(242, 'fre', 'Activite', 7, 'titre', 'vwxcv'),
(243, 'eng', 'Activite', 7, 'titre', 'xcvbxcvb'),
(244, 'fre', 'Activite', 7, 'resume', '<p>xcvbcxv</p>'),
(245, 'eng', 'Activite', 7, 'resume', 'cxvbxc'),
(246, 'fre', 'Activite', 7, 'description', '<p>xcvb</p>'),
(247, 'eng', 'Activite', 7, 'description', 'vxcbb'),
(254, 'fre', 'Menu', 5, 'name', 'Actualites'),
(255, 'eng', 'Menu', 5, 'name', ''),
(256, 'fre', 'Menu', 6, 'name', 'Contact'),
(257, 'eng', 'Menu', 6, 'name', ''),
(258, 'fre', 'Menu', 7, 'name', 'RÃ©fÃ©rences'),
(259, 'eng', 'Menu', 7, 'name', ''),
(260, 'fre', 'Menu', 8, 'name', 'Contact'),
(261, 'eng', 'Menu', 8, 'name', ''),
(265, 'fre', 'Galery', 2, 'name', ''),
(266, 'fre', 'Galery', 3, 'name', ''),
(267, 'fre', 'Galery', 4, 'name', ''),
(268, 'fre', 'Galery', 5, 'name', ''),
(269, 'fre', 'Galery', 6, 'name', 'aaa'),
(270, 'eng', 'Galery', 6, 'name', 'aa'),
(271, 'fre', 'Galery', 7, 'name', 'zzzz'),
(272, 'eng', 'Galery', 7, 'name', 'zzzzz'),
(273, 'fre', 'Galery', 8, 'name', 'mm'),
(274, 'eng', 'Galery', 8, 'name', 'mmm'),
(335, 'fre', 'Comite', 50, 'titre', 'eeff'),
(336, 'eng', 'Comite', 50, 'titre', 'vfver'),
(337, 'fre', 'Comite', 50, 'fonction', 'vfrbs'),
(338, 'eng', 'Comite', 50, 'fonction', 'aereg'),
(339, 'fre', 'Comite', 50, 'departement', 'edfrgthy'),
(340, 'eng', 'Comite', 50, 'departement', ''),
(341, 'fre', 'Comite', 50, 'faculte', ''),
(342, 'eng', 'Comite', 50, 'faculte', ''),
(343, 'fre', 'Comite', 50, 'university', ''),
(344, 'eng', 'Comite', 50, 'university', ''),
(345, 'fre', 'Comite', 50, 'adresse', ''),
(346, 'eng', 'Comite', 50, 'adresse', ''),
(347, 'fre', 'Comite', 50, 'ville', ''),
(348, 'eng', 'Comite', 50, 'ville', ''),
(349, 'fre', 'Comite', 50, 'cv', ''),
(350, 'eng', 'Comite', 50, 'cv', ''),
(351, 'fre', 'Comite', 51, 'fonction', 'vtbhy'),
(352, 'eng', 'Comite', 51, 'fonction', 'ergre'),
(353, 'fre', 'Comite', 51, 'departement', 'rbrnrt'),
(354, 'eng', 'Comite', 51, 'departement', 'zaefr'),
(355, 'fre', 'Comite', 51, 'faculte', 'ezrgtb'),
(356, 'eng', 'Comite', 51, 'faculte', 'azefr'),
(357, 'fre', 'Comite', 51, 'university', 'Ã©ed\"fr'),
(358, 'eng', 'Comite', 51, 'university', 'zadefr'),
(359, 'fre', 'Comite', 51, 'adresse', 'azdefrg'),
(360, 'eng', 'Comite', 51, 'adresse', 'efr'),
(361, 'fre', 'Comite', 51, 'ville', ''),
(362, 'eng', 'Comite', 51, 'ville', ''),
(363, 'fre', 'Comite', 51, 'cv', ''),
(364, 'eng', 'Comite', 51, 'cv', ''),
(365, 'fre', 'Comite', 51, 'titre', ''),
(366, 'eng', 'Comite', 51, 'titre', ''),
(367, 'fre', 'Subvention', 1, 'titre', 'zefe'),
(368, 'eng', 'Subvention', 1, 'titre', 'fez'),
(369, 'fre', 'Subvention', 1, 'donneur', 'cdssd'),
(370, 'eng', 'Subvention', 1, 'donneur', 'dsds'),
(371, 'fre', 'Subvention', 2, 'titre', 'qzge'),
(372, 'eng', 'Subvention', 2, 'titre', 'zegr'),
(373, 'fre', 'Subvention', 2, 'donneur', 'ege'),
(374, 'eng', 'Subvention', 2, 'donneur', 'gerg'),
(375, 'fre', 'Comite', 52, 'fonction', ''),
(376, 'eng', 'Comite', 52, 'fonction', ''),
(377, 'fre', 'Comite', 52, 'departement', ''),
(378, 'eng', 'Comite', 52, 'departement', ''),
(379, 'fre', 'Comite', 52, 'faculte', ''),
(380, 'eng', 'Comite', 52, 'faculte', ''),
(381, 'fre', 'Comite', 52, 'university', ''),
(382, 'eng', 'Comite', 52, 'university', ''),
(383, 'fre', 'Comite', 52, 'adresse', ''),
(384, 'eng', 'Comite', 52, 'adresse', ''),
(385, 'fre', 'Comite', 52, 'ville', ''),
(386, 'eng', 'Comite', 52, 'ville', ''),
(387, 'fre', 'Comite', 52, 'cv', ''),
(388, 'eng', 'Comite', 52, 'cv', ''),
(389, 'fre', 'Comite', 52, 'titre', ''),
(390, 'eng', 'Comite', 52, 'titre', ''),
(391, 'fre', 'Telecharchement', 1, 'name', 'fddsfg'),
(392, 'eng', 'Telecharchement', 1, 'name', 'dfsgdgdf'),
(393, 'fre', 'Telecharchement', 2, 'name', 'sdfsdfxdsfdfg'),
(394, 'eng', 'Telecharchement', 2, 'name', 'gdfgdfdgdfgd'),
(397, 'eng', 'Galery', 4, 'name', ''),
(398, 'eng', 'Galery', 5, 'name', ''),
(399, 'eng', 'Galery', 2, 'name', ''),
(400, 'eng', 'Galery', 3, 'name', ''),
(405, 'fre', 'Partenaire', 8, 'description', ''),
(406, 'eng', 'Partenaire', 8, 'description', ''),
(407, 'fre', 'Partenaire', 8, 'name', 'ETM'),
(408, 'eng', 'Partenaire', 8, 'name', 'ETM'),
(409, 'fre', 'Adherent', 4, 'fonction', ''),
(410, 'eng', 'Adherent', 4, 'fonction', ''),
(411, 'fre', 'Adherent', 4, 'departement', ''),
(412, 'eng', 'Adherent', 4, 'departement', ''),
(413, 'fre', 'Adherent', 4, 'faculte', ''),
(414, 'eng', 'Adherent', 4, 'faculte', ''),
(415, 'fre', 'Adherent', 4, 'university', ''),
(416, 'eng', 'Adherent', 4, 'university', ''),
(417, 'fre', 'Adherent', 4, 'adresse', ''),
(418, 'eng', 'Adherent', 4, 'adresse', ''),
(419, 'fre', 'Adherent', 4, 'ville', ''),
(420, 'eng', 'Adherent', 4, 'ville', ''),
(421, 'fre', 'Adherent', 4, 'cv', ''),
(422, 'eng', 'Adherent', 4, 'cv', ''),
(423, 'fre', 'Adherent', 5, 'fonction', ''),
(424, 'eng', 'Adherent', 5, 'fonction', ''),
(425, 'fre', 'Adherent', 5, 'departement', ''),
(426, 'eng', 'Adherent', 5, 'departement', ''),
(427, 'fre', 'Adherent', 5, 'faculte', ''),
(428, 'eng', 'Adherent', 5, 'faculte', ''),
(429, 'fre', 'Adherent', 5, 'university', ''),
(430, 'eng', 'Adherent', 5, 'university', ''),
(431, 'fre', 'Adherent', 5, 'adresse', ''),
(432, 'eng', 'Adherent', 5, 'adresse', ''),
(433, 'fre', 'Adherent', 5, 'ville', ''),
(434, 'eng', 'Adherent', 5, 'ville', ''),
(435, 'fre', 'Adherent', 5, 'cv', ''),
(436, 'eng', 'Adherent', 5, 'cv', ''),
(437, 'fre', 'Grade', 3, 'grade', 'Assistant'),
(438, 'eng', 'Grade', 3, 'grade', ''),
(441, 'fre', 'Grade', 5, 'grade', 'member'),
(442, 'eng', 'Grade', 5, 'grade', ''),
(443, 'fre', 'Grade', 6, 'grade', 'Docteur'),
(444, 'eng', 'Grade', 6, 'grade', ''),
(487, 'fre', 'Subvention', 3, 'titre', 'szadez'),
(488, 'eng', 'Subvention', 3, 'titre', 'saZDEC'),
(489, 'fre', 'Subvention', 3, 'donneur', ''),
(490, 'eng', 'Subvention', 3, 'donneur', ''),
(491, 'fre', 'Comiteperiode', 1, 'name', '2017-2019'),
(492, 'eng', 'Comiteperiode', 1, 'name', '2017-2019'),
(493, 'fre', 'Adherent', 1, 'fonction', ''),
(494, 'eng', 'Adherent', 1, 'fonction', ''),
(495, 'fre', 'Adherent', 1, 'departement', ''),
(496, 'eng', 'Adherent', 1, 'departement', ''),
(497, 'fre', 'Adherent', 1, 'faculte', ''),
(498, 'eng', 'Adherent', 1, 'faculte', ''),
(499, 'fre', 'Adherent', 1, 'university', ''),
(500, 'eng', 'Adherent', 1, 'university', ''),
(501, 'fre', 'Adherent', 1, 'adresse', ''),
(502, 'eng', 'Adherent', 1, 'adresse', ''),
(503, 'fre', 'Adherent', 1, 'ville', ''),
(504, 'eng', 'Adherent', 1, 'ville', ''),
(505, 'fre', 'Adherent', 1, 'cv', ''),
(506, 'eng', 'Adherent', 1, 'cv', ''),
(507, 'fre', 'Adherent', 1, 'publications', ''),
(508, 'eng', 'Adherent', 1, 'publications', ''),
(509, 'fre', 'Adherent', 2, 'fonction', ''),
(510, 'eng', 'Adherent', 2, 'fonction', ''),
(511, 'fre', 'Adherent', 2, 'departement', ''),
(512, 'eng', 'Adherent', 2, 'departement', ''),
(513, 'fre', 'Adherent', 2, 'faculte', ''),
(514, 'eng', 'Adherent', 2, 'faculte', ''),
(515, 'fre', 'Adherent', 2, 'university', ''),
(516, 'eng', 'Adherent', 2, 'university', ''),
(517, 'fre', 'Adherent', 2, 'adresse', ''),
(518, 'eng', 'Adherent', 2, 'adresse', ''),
(519, 'fre', 'Adherent', 2, 'ville', ''),
(520, 'eng', 'Adherent', 2, 'ville', ''),
(521, 'fre', 'Adherent', 2, 'cv', ''),
(522, 'eng', 'Adherent', 2, 'cv', ''),
(523, 'fre', 'Adherent', 2, 'publications', ''),
(524, 'eng', 'Adherent', 2, 'publications', ''),
(525, 'fre', 'Adherent', 3, 'fonction', ''),
(526, 'eng', 'Adherent', 3, 'fonction', ''),
(527, 'fre', 'Adherent', 3, 'departement', ''),
(528, 'eng', 'Adherent', 3, 'departement', ''),
(529, 'fre', 'Adherent', 3, 'faculte', ''),
(530, 'eng', 'Adherent', 3, 'faculte', ''),
(531, 'fre', 'Adherent', 3, 'university', ''),
(532, 'eng', 'Adherent', 3, 'university', ''),
(533, 'fre', 'Adherent', 3, 'adresse', ''),
(534, 'eng', 'Adherent', 3, 'adresse', ''),
(535, 'fre', 'Adherent', 3, 'ville', ''),
(536, 'eng', 'Adherent', 3, 'ville', ''),
(537, 'fre', 'Adherent', 3, 'cv', ''),
(538, 'eng', 'Adherent', 3, 'cv', ''),
(539, 'fre', 'Adherent', 3, 'publications', ''),
(540, 'eng', 'Adherent', 3, 'publications', ''),
(541, 'fre', 'Adherent', 4, 'publications', ''),
(542, 'eng', 'Adherent', 4, 'publications', ''),
(543, 'fre', 'Adherent', 5, 'publications', ''),
(544, 'eng', 'Adherent', 5, 'publications', ''),
(545, 'fre', 'Adherent', 6, 'fonction', ''),
(546, 'eng', 'Adherent', 6, 'fonction', ''),
(547, 'fre', 'Adherent', 6, 'departement', ''),
(548, 'eng', 'Adherent', 6, 'departement', ''),
(549, 'fre', 'Adherent', 6, 'faculte', ''),
(550, 'eng', 'Adherent', 6, 'faculte', ''),
(551, 'fre', 'Adherent', 6, 'university', ''),
(552, 'eng', 'Adherent', 6, 'university', ''),
(553, 'fre', 'Adherent', 6, 'adresse', ''),
(554, 'eng', 'Adherent', 6, 'adresse', ''),
(555, 'fre', 'Adherent', 6, 'ville', ''),
(556, 'eng', 'Adherent', 6, 'ville', ''),
(557, 'fre', 'Adherent', 6, 'cv', ''),
(558, 'eng', 'Adherent', 6, 'cv', ''),
(559, 'fre', 'Adherent', 6, 'publications', ''),
(560, 'eng', 'Adherent', 6, 'publications', ''),
(561, 'fre', 'Lignecomiteperiode', 1, 'fonction', 'PrÃ©sidente de lâ€™association '),
(562, 'eng', 'Lignecomiteperiode', 1, 'fonction', 'PrÃ©sidente de lâ€™association '),
(563, 'fre', 'Lignecomiteperiode', 2, 'fonction', 'Vice-prÃ©sident'),
(564, 'eng', 'Lignecomiteperiode', 2, 'fonction', 'Vice-prÃ©sident'),
(565, 'fre', 'Lignecomiteperiode', 3, 'fonction', 'SecrÃ©taire gÃ©nÃ©rale '),
(566, 'eng', 'Lignecomiteperiode', 3, 'fonction', 'SecrÃ©taire gÃ©nÃ©rale '),
(567, 'fre', 'Lignecomiteperiode', 4, 'fonction', 'Vice SecrÃ©taire gÃ©nÃ©rale'),
(568, 'eng', 'Lignecomiteperiode', 4, 'fonction', 'Vice SecrÃ©taire gÃ©nÃ©rale'),
(569, 'fre', 'Lignecomiteperiode', 5, 'fonction', 'TrÃ©sorier '),
(570, 'eng', 'Lignecomiteperiode', 5, 'fonction', 'TrÃ©sorier '),
(571, 'fre', 'Lignecomiteperiode', 6, 'fonction', 'Vice-TrÃ©sorier '),
(572, 'eng', 'Lignecomiteperiode', 6, 'fonction', 'Vice-TrÃ©sorier '),
(573, 'fre', 'Slideshow', 9, 'name', 'dftyghujikl'),
(574, 'eng', 'Slideshow', 9, 'name', ''),
(575, 'fre', 'Slideshow', 9, 'text', '<p>dfghjk,l;</p>'),
(576, 'eng', 'Slideshow', 9, 'text', ''),
(577, 'fre', 'Slideshow', 10, 'name', ''),
(578, 'eng', 'Slideshow', 10, 'name', ''),
(579, 'fre', 'Slideshow', 10, 'text', ''),
(580, 'eng', 'Slideshow', 10, 'text', ''),
(589, 'fre', 'Actualite', 1, 'name', 'sciences conference 2015'),
(590, 'eng', 'Actualite', 1, 'name', ''),
(591, 'fre', 'Actualite', 1, 'resume', '<p><a href=\"https://tors2015.sciencesconf.org/?lang=fr\">https://tors2015.sciencesconf.org/?lang=fr</a></p>'),
(592, 'eng', 'Actualite', 1, 'resume', ''),
(593, 'fre', 'Actualite', 1, 'description', '<p><a href=\"https://tors2015.sciencesconf.org/?lang=fr\">https://tors2015.sciencesconf.org/?lang=fr</a></p>'),
(594, 'eng', 'Actualite', 1, 'description', ''),
(595, 'fre', 'Actualite', 2, 'name', 'sciences conference 2016'),
(596, 'eng', 'Actualite', 2, 'name', ''),
(597, 'fre', 'Actualite', 2, 'resume', '<p><a href=\"https://tors2016.sciencesconf.org/\">https://tors2016.sciencesconf.org/</a></p>'),
(598, 'eng', 'Actualite', 2, 'resume', ''),
(599, 'fre', 'Actualite', 2, 'description', '<p><a href=\"https://tors2016.sciencesconf.org/\">https://tors2016.sciencesconf.org/</a></p>'),
(600, 'eng', 'Actualite', 2, 'description', ''),
(601, 'fre', 'Actualite', 3, 'name', 'sciences confirence 2018'),
(602, 'eng', 'Actualite', 3, 'name', ''),
(603, 'fre', 'Actualite', 3, 'resume', '<p><a href=\"https://tors2018.sciencesconf.org/\" target=\"_blank\">https://tors2018.sciencesconf.org/</a></p>'),
(604, 'eng', 'Actualite', 3, 'resume', ''),
(605, 'fre', 'Actualite', 3, 'description', '<p><a href=\"https://tors2018.sciencesconf.org/\" target=\"_blank\">https://tors2018.sciencesconf.org/</a></p>'),
(606, 'eng', 'Actualite', 3, 'description', ''),
(607, 'fre', 'Adherperiode', 1, 'name', '2013'),
(608, 'eng', 'Adherperiode', 1, 'name', '2013'),
(609, 'fre', 'Adherperiode', 2, 'name', '2014'),
(610, 'eng', 'Adherperiode', 2, 'name', '2014'),
(611, 'fre', 'Adherperiode', 3, 'name', '2015'),
(612, 'eng', 'Adherperiode', 3, 'name', '2015'),
(613, 'fre', 'Adherperiode', 4, 'name', '2016'),
(614, 'eng', 'Adherperiode', 4, 'name', '2016'),
(615, 'fre', 'Adherperiode', 5, 'name', '2017'),
(616, 'eng', 'Adherperiode', 5, 'name', '2017'),
(617, 'fre', 'Adherent', 7, 'fonction', ''),
(618, 'eng', 'Adherent', 7, 'fonction', ''),
(619, 'fre', 'Adherent', 7, 'departement', ''),
(620, 'eng', 'Adherent', 7, 'departement', ''),
(621, 'fre', 'Adherent', 7, 'faculte', ''),
(622, 'eng', 'Adherent', 7, 'faculte', ''),
(623, 'fre', 'Adherent', 7, 'university', ''),
(624, 'eng', 'Adherent', 7, 'university', ''),
(625, 'fre', 'Adherent', 7, 'adresse', ''),
(626, 'eng', 'Adherent', 7, 'adresse', ''),
(627, 'fre', 'Adherent', 7, 'ville', ''),
(628, 'eng', 'Adherent', 7, 'ville', ''),
(629, 'fre', 'Adherent', 7, 'cv', ''),
(630, 'eng', 'Adherent', 7, 'cv', ''),
(631, 'fre', 'Adherent', 7, 'publications', ''),
(632, 'eng', 'Adherent', 7, 'publications', ''),
(633, 'fre', 'Adherent', 8, 'fonction', ''),
(634, 'eng', 'Adherent', 8, 'fonction', ''),
(635, 'fre', 'Adherent', 8, 'departement', ''),
(636, 'eng', 'Adherent', 8, 'departement', ''),
(637, 'fre', 'Adherent', 8, 'faculte', ''),
(638, 'eng', 'Adherent', 8, 'faculte', ''),
(639, 'fre', 'Adherent', 8, 'university', ''),
(640, 'eng', 'Adherent', 8, 'university', ''),
(641, 'fre', 'Adherent', 8, 'adresse', ''),
(642, 'eng', 'Adherent', 8, 'adresse', ''),
(643, 'fre', 'Adherent', 8, 'ville', ''),
(644, 'eng', 'Adherent', 8, 'ville', ''),
(645, 'fre', 'Adherent', 8, 'cv', ''),
(646, 'eng', 'Adherent', 8, 'cv', ''),
(647, 'fre', 'Adherent', 8, 'publications', ''),
(648, 'eng', 'Adherent', 8, 'publications', ''),
(649, 'fre', 'Adherent', 9, 'fonction', ''),
(650, 'eng', 'Adherent', 9, 'fonction', ''),
(651, 'fre', 'Adherent', 9, 'departement', ''),
(652, 'eng', 'Adherent', 9, 'departement', ''),
(653, 'fre', 'Adherent', 9, 'faculte', ''),
(654, 'eng', 'Adherent', 9, 'faculte', ''),
(655, 'fre', 'Adherent', 9, 'university', ''),
(656, 'eng', 'Adherent', 9, 'university', ''),
(657, 'fre', 'Adherent', 9, 'adresse', ''),
(658, 'eng', 'Adherent', 9, 'adresse', ''),
(659, 'fre', 'Adherent', 9, 'ville', ''),
(660, 'eng', 'Adherent', 9, 'ville', ''),
(661, 'fre', 'Adherent', 9, 'cv', ''),
(662, 'eng', 'Adherent', 9, 'cv', ''),
(663, 'fre', 'Adherent', 9, 'publications', ''),
(664, 'eng', 'Adherent', 9, 'publications', ''),
(665, 'fre', 'Adherent', 10, 'fonction', ''),
(666, 'eng', 'Adherent', 10, 'fonction', ''),
(667, 'fre', 'Adherent', 10, 'departement', ''),
(668, 'eng', 'Adherent', 10, 'departement', ''),
(669, 'fre', 'Adherent', 10, 'faculte', ''),
(670, 'eng', 'Adherent', 10, 'faculte', ''),
(671, 'fre', 'Adherent', 10, 'university', ''),
(672, 'eng', 'Adherent', 10, 'university', ''),
(673, 'fre', 'Adherent', 10, 'adresse', ''),
(674, 'eng', 'Adherent', 10, 'adresse', ''),
(675, 'fre', 'Adherent', 10, 'ville', ''),
(676, 'eng', 'Adherent', 10, 'ville', ''),
(677, 'fre', 'Adherent', 10, 'cv', ''),
(678, 'eng', 'Adherent', 10, 'cv', ''),
(679, 'fre', 'Adherent', 10, 'publications', ''),
(680, 'eng', 'Adherent', 10, 'publications', ''),
(681, 'fre', 'Adherent', 11, 'fonction', ''),
(682, 'eng', 'Adherent', 11, 'fonction', ''),
(683, 'fre', 'Adherent', 11, 'departement', ''),
(684, 'eng', 'Adherent', 11, 'departement', ''),
(685, 'fre', 'Adherent', 11, 'faculte', ''),
(686, 'eng', 'Adherent', 11, 'faculte', ''),
(687, 'fre', 'Adherent', 11, 'university', ''),
(688, 'eng', 'Adherent', 11, 'university', ''),
(689, 'fre', 'Adherent', 11, 'adresse', ''),
(690, 'eng', 'Adherent', 11, 'adresse', ''),
(691, 'fre', 'Adherent', 11, 'ville', ''),
(692, 'eng', 'Adherent', 11, 'ville', ''),
(693, 'fre', 'Adherent', 11, 'cv', ''),
(694, 'eng', 'Adherent', 11, 'cv', ''),
(695, 'fre', 'Adherent', 11, 'publications', ''),
(696, 'eng', 'Adherent', 11, 'publications', ''),
(697, 'fre', 'Adherent', 12, 'fonction', ''),
(698, 'eng', 'Adherent', 12, 'fonction', ''),
(699, 'fre', 'Adherent', 12, 'departement', ''),
(700, 'eng', 'Adherent', 12, 'departement', ''),
(701, 'fre', 'Adherent', 12, 'faculte', ''),
(702, 'eng', 'Adherent', 12, 'faculte', ''),
(703, 'fre', 'Adherent', 12, 'university', ''),
(704, 'eng', 'Adherent', 12, 'university', ''),
(705, 'fre', 'Adherent', 12, 'adresse', ''),
(706, 'eng', 'Adherent', 12, 'adresse', ''),
(707, 'fre', 'Adherent', 12, 'ville', ''),
(708, 'eng', 'Adherent', 12, 'ville', ''),
(709, 'fre', 'Adherent', 12, 'cv', ''),
(710, 'eng', 'Adherent', 12, 'cv', ''),
(711, 'fre', 'Adherent', 12, 'publications', ''),
(712, 'eng', 'Adherent', 12, 'publications', ''),
(713, 'fre', 'Adherent', 13, 'fonction', ''),
(714, 'eng', 'Adherent', 13, 'fonction', ''),
(715, 'fre', 'Adherent', 13, 'departement', ''),
(716, 'eng', 'Adherent', 13, 'departement', ''),
(717, 'fre', 'Adherent', 13, 'faculte', ''),
(718, 'eng', 'Adherent', 13, 'faculte', ''),
(719, 'fre', 'Adherent', 13, 'university', ''),
(720, 'eng', 'Adherent', 13, 'university', ''),
(721, 'fre', 'Adherent', 13, 'adresse', ''),
(722, 'eng', 'Adherent', 13, 'adresse', ''),
(723, 'fre', 'Adherent', 13, 'ville', ''),
(724, 'eng', 'Adherent', 13, 'ville', ''),
(725, 'fre', 'Adherent', 13, 'cv', ''),
(726, 'eng', 'Adherent', 13, 'cv', ''),
(727, 'fre', 'Adherent', 13, 'publications', ''),
(728, 'eng', 'Adherent', 13, 'publications', ''),
(729, 'fre', 'Adherent', 14, 'fonction', ''),
(730, 'eng', 'Adherent', 14, 'fonction', ''),
(731, 'fre', 'Adherent', 14, 'departement', ''),
(732, 'eng', 'Adherent', 14, 'departement', ''),
(733, 'fre', 'Adherent', 14, 'faculte', ''),
(734, 'eng', 'Adherent', 14, 'faculte', ''),
(735, 'fre', 'Adherent', 14, 'university', ''),
(736, 'eng', 'Adherent', 14, 'university', ''),
(737, 'fre', 'Adherent', 14, 'adresse', ''),
(738, 'eng', 'Adherent', 14, 'adresse', ''),
(739, 'fre', 'Adherent', 14, 'ville', ''),
(740, 'eng', 'Adherent', 14, 'ville', ''),
(741, 'fre', 'Adherent', 14, 'cv', ''),
(742, 'eng', 'Adherent', 14, 'cv', ''),
(743, 'fre', 'Adherent', 14, 'publications', ''),
(744, 'eng', 'Adherent', 14, 'publications', ''),
(745, 'fre', 'Adherent', 15, 'fonction', ''),
(746, 'eng', 'Adherent', 15, 'fonction', ''),
(747, 'fre', 'Adherent', 15, 'departement', ''),
(748, 'eng', 'Adherent', 15, 'departement', ''),
(749, 'fre', 'Adherent', 15, 'faculte', ''),
(750, 'eng', 'Adherent', 15, 'faculte', ''),
(751, 'fre', 'Adherent', 15, 'university', ''),
(752, 'eng', 'Adherent', 15, 'university', ''),
(753, 'fre', 'Adherent', 15, 'adresse', ''),
(754, 'eng', 'Adherent', 15, 'adresse', ''),
(755, 'fre', 'Adherent', 15, 'ville', ''),
(756, 'eng', 'Adherent', 15, 'ville', ''),
(757, 'fre', 'Adherent', 15, 'cv', ''),
(758, 'eng', 'Adherent', 15, 'cv', ''),
(759, 'fre', 'Adherent', 15, 'publications', ''),
(760, 'eng', 'Adherent', 15, 'publications', ''),
(761, 'fre', 'Adherent', 16, 'fonction', ''),
(762, 'eng', 'Adherent', 16, 'fonction', ''),
(763, 'fre', 'Adherent', 16, 'departement', ''),
(764, 'eng', 'Adherent', 16, 'departement', ''),
(765, 'fre', 'Adherent', 16, 'faculte', ''),
(766, 'eng', 'Adherent', 16, 'faculte', ''),
(767, 'fre', 'Adherent', 16, 'university', ''),
(768, 'eng', 'Adherent', 16, 'university', ''),
(769, 'fre', 'Adherent', 16, 'adresse', ''),
(770, 'eng', 'Adherent', 16, 'adresse', ''),
(771, 'fre', 'Adherent', 16, 'ville', ''),
(772, 'eng', 'Adherent', 16, 'ville', ''),
(773, 'fre', 'Adherent', 16, 'cv', ''),
(774, 'eng', 'Adherent', 16, 'cv', ''),
(775, 'fre', 'Adherent', 16, 'publications', ''),
(776, 'eng', 'Adherent', 16, 'publications', ''),
(777, 'fre', 'Adherent', 17, 'fonction', ''),
(778, 'eng', 'Adherent', 17, 'fonction', ''),
(779, 'fre', 'Adherent', 17, 'departement', ''),
(780, 'eng', 'Adherent', 17, 'departement', ''),
(781, 'fre', 'Adherent', 17, 'faculte', ''),
(782, 'eng', 'Adherent', 17, 'faculte', ''),
(783, 'fre', 'Adherent', 17, 'university', ''),
(784, 'eng', 'Adherent', 17, 'university', ''),
(785, 'fre', 'Adherent', 17, 'adresse', ''),
(786, 'eng', 'Adherent', 17, 'adresse', ''),
(787, 'fre', 'Adherent', 17, 'ville', ''),
(788, 'eng', 'Adherent', 17, 'ville', ''),
(789, 'fre', 'Adherent', 17, 'cv', ''),
(790, 'eng', 'Adherent', 17, 'cv', ''),
(791, 'fre', 'Adherent', 17, 'publications', ''),
(792, 'eng', 'Adherent', 17, 'publications', ''),
(825, 'fre', 'Adherent', 20, 'fonction', ''),
(826, 'eng', 'Adherent', 20, 'fonction', ''),
(827, 'fre', 'Adherent', 20, 'departement', ''),
(828, 'eng', 'Adherent', 20, 'departement', ''),
(829, 'fre', 'Adherent', 20, 'faculte', ''),
(830, 'eng', 'Adherent', 20, 'faculte', ''),
(831, 'fre', 'Adherent', 20, 'university', ''),
(832, 'eng', 'Adherent', 20, 'university', ''),
(833, 'fre', 'Adherent', 20, 'adresse', ''),
(834, 'eng', 'Adherent', 20, 'adresse', ''),
(835, 'fre', 'Adherent', 20, 'ville', ''),
(836, 'eng', 'Adherent', 20, 'ville', ''),
(837, 'fre', 'Adherent', 20, 'cv', ''),
(838, 'eng', 'Adherent', 20, 'cv', ''),
(839, 'fre', 'Adherent', 20, 'publications', ''),
(840, 'eng', 'Adherent', 20, 'publications', ''),
(841, 'fre', 'Adherent', 21, 'fonction', ''),
(842, 'eng', 'Adherent', 21, 'fonction', ''),
(843, 'fre', 'Adherent', 21, 'departement', ''),
(844, 'eng', 'Adherent', 21, 'departement', ''),
(845, 'fre', 'Adherent', 21, 'faculte', ''),
(846, 'eng', 'Adherent', 21, 'faculte', ''),
(847, 'fre', 'Adherent', 21, 'university', ''),
(848, 'eng', 'Adherent', 21, 'university', ''),
(849, 'fre', 'Adherent', 21, 'adresse', ''),
(850, 'eng', 'Adherent', 21, 'adresse', ''),
(851, 'fre', 'Adherent', 21, 'ville', ''),
(852, 'eng', 'Adherent', 21, 'ville', ''),
(853, 'fre', 'Adherent', 21, 'cv', ''),
(854, 'eng', 'Adherent', 21, 'cv', ''),
(855, 'fre', 'Adherent', 21, 'publications', ''),
(856, 'eng', 'Adherent', 21, 'publications', ''),
(857, 'fre', 'Adherent', 22, 'fonction', ''),
(858, 'eng', 'Adherent', 22, 'fonction', ''),
(859, 'fre', 'Adherent', 22, 'departement', ''),
(860, 'eng', 'Adherent', 22, 'departement', ''),
(861, 'fre', 'Adherent', 22, 'faculte', ''),
(862, 'eng', 'Adherent', 22, 'faculte', ''),
(863, 'fre', 'Adherent', 22, 'university', ''),
(864, 'eng', 'Adherent', 22, 'university', ''),
(865, 'fre', 'Adherent', 22, 'adresse', ''),
(866, 'eng', 'Adherent', 22, 'adresse', ''),
(867, 'fre', 'Adherent', 22, 'ville', ''),
(868, 'eng', 'Adherent', 22, 'ville', ''),
(869, 'fre', 'Adherent', 22, 'cv', ''),
(870, 'eng', 'Adherent', 22, 'cv', ''),
(871, 'fre', 'Adherent', 22, 'publications', ''),
(872, 'eng', 'Adherent', 22, 'publications', ''),
(873, 'fre', 'Adherent', 23, 'fonction', ''),
(874, 'eng', 'Adherent', 23, 'fonction', ''),
(875, 'fre', 'Adherent', 23, 'departement', ''),
(876, 'eng', 'Adherent', 23, 'departement', ''),
(877, 'fre', 'Adherent', 23, 'faculte', ''),
(878, 'eng', 'Adherent', 23, 'faculte', ''),
(879, 'fre', 'Adherent', 23, 'university', ''),
(880, 'eng', 'Adherent', 23, 'university', ''),
(881, 'fre', 'Adherent', 23, 'adresse', ''),
(882, 'eng', 'Adherent', 23, 'adresse', ''),
(883, 'fre', 'Adherent', 23, 'ville', ''),
(884, 'eng', 'Adherent', 23, 'ville', ''),
(885, 'fre', 'Adherent', 23, 'cv', ''),
(886, 'eng', 'Adherent', 23, 'cv', ''),
(887, 'fre', 'Adherent', 23, 'publications', ''),
(888, 'eng', 'Adherent', 23, 'publications', ''),
(889, 'fre', 'Adherent', 24, 'fonction', ''),
(890, 'eng', 'Adherent', 24, 'fonction', ''),
(891, 'fre', 'Adherent', 24, 'departement', ''),
(892, 'eng', 'Adherent', 24, 'departement', ''),
(893, 'fre', 'Adherent', 24, 'faculte', ''),
(894, 'eng', 'Adherent', 24, 'faculte', ''),
(895, 'fre', 'Adherent', 24, 'university', ''),
(896, 'eng', 'Adherent', 24, 'university', ''),
(897, 'fre', 'Adherent', 24, 'adresse', ''),
(898, 'eng', 'Adherent', 24, 'adresse', ''),
(899, 'fre', 'Adherent', 24, 'ville', ''),
(900, 'eng', 'Adherent', 24, 'ville', ''),
(901, 'fre', 'Adherent', 24, 'cv', ''),
(902, 'eng', 'Adherent', 24, 'cv', ''),
(903, 'fre', 'Adherent', 24, 'publications', ''),
(904, 'eng', 'Adherent', 24, 'publications', ''),
(905, 'fre', 'Adherent', 25, 'fonction', ''),
(906, 'eng', 'Adherent', 25, 'fonction', ''),
(907, 'fre', 'Adherent', 25, 'departement', ''),
(908, 'eng', 'Adherent', 25, 'departement', ''),
(909, 'fre', 'Adherent', 25, 'faculte', ''),
(910, 'eng', 'Adherent', 25, 'faculte', ''),
(911, 'fre', 'Adherent', 25, 'university', ''),
(912, 'eng', 'Adherent', 25, 'university', ''),
(913, 'fre', 'Adherent', 25, 'adresse', ''),
(914, 'eng', 'Adherent', 25, 'adresse', ''),
(915, 'fre', 'Adherent', 25, 'ville', ''),
(916, 'eng', 'Adherent', 25, 'ville', ''),
(917, 'fre', 'Adherent', 25, 'cv', ''),
(918, 'eng', 'Adherent', 25, 'cv', ''),
(919, 'fre', 'Adherent', 25, 'publications', ''),
(920, 'eng', 'Adherent', 25, 'publications', ''),
(921, 'fre', 'Adherent', 26, 'fonction', ''),
(922, 'eng', 'Adherent', 26, 'fonction', ''),
(923, 'fre', 'Adherent', 26, 'departement', ''),
(924, 'eng', 'Adherent', 26, 'departement', ''),
(925, 'fre', 'Adherent', 26, 'faculte', ''),
(926, 'eng', 'Adherent', 26, 'faculte', ''),
(927, 'fre', 'Adherent', 26, 'university', ''),
(928, 'eng', 'Adherent', 26, 'university', ''),
(929, 'fre', 'Adherent', 26, 'adresse', ''),
(930, 'eng', 'Adherent', 26, 'adresse', ''),
(931, 'fre', 'Adherent', 26, 'ville', ''),
(932, 'eng', 'Adherent', 26, 'ville', ''),
(933, 'fre', 'Adherent', 26, 'cv', ''),
(934, 'eng', 'Adherent', 26, 'cv', ''),
(935, 'fre', 'Adherent', 26, 'publications', ''),
(936, 'eng', 'Adherent', 26, 'publications', ''),
(937, 'fre', 'Adherent', 27, 'fonction', ''),
(938, 'eng', 'Adherent', 27, 'fonction', ''),
(939, 'fre', 'Adherent', 27, 'departement', ''),
(940, 'eng', 'Adherent', 27, 'departement', ''),
(941, 'fre', 'Adherent', 27, 'faculte', ''),
(942, 'eng', 'Adherent', 27, 'faculte', ''),
(943, 'fre', 'Adherent', 27, 'university', ''),
(944, 'eng', 'Adherent', 27, 'university', ''),
(945, 'fre', 'Adherent', 27, 'adresse', ''),
(946, 'eng', 'Adherent', 27, 'adresse', ''),
(947, 'fre', 'Adherent', 27, 'ville', ''),
(948, 'eng', 'Adherent', 27, 'ville', ''),
(949, 'fre', 'Adherent', 27, 'cv', ''),
(950, 'eng', 'Adherent', 27, 'cv', ''),
(951, 'fre', 'Adherent', 27, 'publications', ''),
(952, 'eng', 'Adherent', 27, 'publications', ''),
(953, 'fre', 'Adherent', 28, 'fonction', ''),
(954, 'eng', 'Adherent', 28, 'fonction', ''),
(955, 'fre', 'Adherent', 28, 'departement', ''),
(956, 'eng', 'Adherent', 28, 'departement', ''),
(957, 'fre', 'Adherent', 28, 'faculte', ''),
(958, 'eng', 'Adherent', 28, 'faculte', ''),
(959, 'fre', 'Adherent', 28, 'university', ''),
(960, 'eng', 'Adherent', 28, 'university', ''),
(961, 'fre', 'Adherent', 28, 'adresse', ''),
(962, 'eng', 'Adherent', 28, 'adresse', ''),
(963, 'fre', 'Adherent', 28, 'ville', ''),
(964, 'eng', 'Adherent', 28, 'ville', ''),
(965, 'fre', 'Adherent', 28, 'cv', ''),
(966, 'eng', 'Adherent', 28, 'cv', ''),
(967, 'fre', 'Adherent', 28, 'publications', ''),
(968, 'eng', 'Adherent', 28, 'publications', ''),
(969, 'fre', 'Adherent', 29, 'fonction', ''),
(970, 'eng', 'Adherent', 29, 'fonction', ''),
(971, 'fre', 'Adherent', 29, 'departement', ''),
(972, 'eng', 'Adherent', 29, 'departement', ''),
(973, 'fre', 'Adherent', 29, 'faculte', ''),
(974, 'eng', 'Adherent', 29, 'faculte', ''),
(975, 'fre', 'Adherent', 29, 'university', ''),
(976, 'eng', 'Adherent', 29, 'university', ''),
(977, 'fre', 'Adherent', 29, 'adresse', ''),
(978, 'eng', 'Adherent', 29, 'adresse', ''),
(979, 'fre', 'Adherent', 29, 'ville', ''),
(980, 'eng', 'Adherent', 29, 'ville', ''),
(981, 'fre', 'Adherent', 29, 'cv', ''),
(982, 'eng', 'Adherent', 29, 'cv', ''),
(983, 'fre', 'Adherent', 29, 'publications', ''),
(984, 'eng', 'Adherent', 29, 'publications', ''),
(985, 'fre', 'Adherent', 30, 'fonction', ''),
(986, 'eng', 'Adherent', 30, 'fonction', ''),
(987, 'fre', 'Adherent', 30, 'departement', ''),
(988, 'eng', 'Adherent', 30, 'departement', ''),
(989, 'fre', 'Adherent', 30, 'faculte', ''),
(990, 'eng', 'Adherent', 30, 'faculte', ''),
(991, 'fre', 'Adherent', 30, 'university', ''),
(992, 'eng', 'Adherent', 30, 'university', ''),
(993, 'fre', 'Adherent', 30, 'adresse', ''),
(994, 'eng', 'Adherent', 30, 'adresse', ''),
(995, 'fre', 'Adherent', 30, 'ville', ''),
(996, 'eng', 'Adherent', 30, 'ville', ''),
(997, 'fre', 'Adherent', 30, 'cv', ''),
(998, 'eng', 'Adherent', 30, 'cv', ''),
(999, 'fre', 'Adherent', 30, 'publications', ''),
(1000, 'eng', 'Adherent', 30, 'publications', ''),
(1001, 'fre', 'Adherent', 31, 'fonction', ''),
(1002, 'eng', 'Adherent', 31, 'fonction', ''),
(1003, 'fre', 'Adherent', 31, 'departement', ''),
(1004, 'eng', 'Adherent', 31, 'departement', ''),
(1005, 'fre', 'Adherent', 31, 'faculte', ''),
(1006, 'eng', 'Adherent', 31, 'faculte', ''),
(1007, 'fre', 'Adherent', 31, 'university', ''),
(1008, 'eng', 'Adherent', 31, 'university', ''),
(1009, 'fre', 'Adherent', 31, 'adresse', ''),
(1010, 'eng', 'Adherent', 31, 'adresse', ''),
(1011, 'fre', 'Adherent', 31, 'ville', ''),
(1012, 'eng', 'Adherent', 31, 'ville', ''),
(1013, 'fre', 'Adherent', 31, 'cv', ''),
(1014, 'eng', 'Adherent', 31, 'cv', ''),
(1015, 'fre', 'Adherent', 31, 'publications', ''),
(1016, 'eng', 'Adherent', 31, 'publications', ''),
(1017, 'fre', 'Adherent', 32, 'fonction', ''),
(1018, 'eng', 'Adherent', 32, 'fonction', ''),
(1019, 'fre', 'Adherent', 32, 'departement', ''),
(1020, 'eng', 'Adherent', 32, 'departement', ''),
(1021, 'fre', 'Adherent', 32, 'faculte', ''),
(1022, 'eng', 'Adherent', 32, 'faculte', ''),
(1023, 'fre', 'Adherent', 32, 'university', ''),
(1024, 'eng', 'Adherent', 32, 'university', ''),
(1025, 'fre', 'Adherent', 32, 'adresse', ''),
(1026, 'eng', 'Adherent', 32, 'adresse', ''),
(1027, 'fre', 'Adherent', 32, 'ville', ''),
(1028, 'eng', 'Adherent', 32, 'ville', ''),
(1029, 'fre', 'Adherent', 32, 'cv', ''),
(1030, 'eng', 'Adherent', 32, 'cv', ''),
(1031, 'fre', 'Adherent', 32, 'publications', ''),
(1032, 'eng', 'Adherent', 32, 'publications', ''),
(1033, 'fre', 'Adherent', 33, 'fonction', ''),
(1034, 'eng', 'Adherent', 33, 'fonction', ''),
(1035, 'fre', 'Adherent', 33, 'departement', ''),
(1036, 'eng', 'Adherent', 33, 'departement', ''),
(1037, 'fre', 'Adherent', 33, 'faculte', ''),
(1038, 'eng', 'Adherent', 33, 'faculte', ''),
(1039, 'fre', 'Adherent', 33, 'university', ''),
(1040, 'eng', 'Adherent', 33, 'university', ''),
(1041, 'fre', 'Adherent', 33, 'adresse', ''),
(1042, 'eng', 'Adherent', 33, 'adresse', ''),
(1043, 'fre', 'Adherent', 33, 'ville', ''),
(1044, 'eng', 'Adherent', 33, 'ville', ''),
(1045, 'fre', 'Adherent', 33, 'cv', ''),
(1046, 'eng', 'Adherent', 33, 'cv', ''),
(1047, 'fre', 'Adherent', 33, 'publications', ''),
(1048, 'eng', 'Adherent', 33, 'publications', ''),
(1049, 'fre', 'Adherent', 34, 'fonction', ''),
(1050, 'eng', 'Adherent', 34, 'fonction', ''),
(1051, 'fre', 'Adherent', 34, 'departement', ''),
(1052, 'eng', 'Adherent', 34, 'departement', ''),
(1053, 'fre', 'Adherent', 34, 'faculte', ''),
(1054, 'eng', 'Adherent', 34, 'faculte', ''),
(1055, 'fre', 'Adherent', 34, 'university', ''),
(1056, 'eng', 'Adherent', 34, 'university', ''),
(1057, 'fre', 'Adherent', 34, 'adresse', ''),
(1058, 'eng', 'Adherent', 34, 'adresse', ''),
(1059, 'fre', 'Adherent', 34, 'ville', ''),
(1060, 'eng', 'Adherent', 34, 'ville', ''),
(1061, 'fre', 'Adherent', 34, 'cv', ''),
(1062, 'eng', 'Adherent', 34, 'cv', ''),
(1063, 'fre', 'Adherent', 34, 'publications', ''),
(1064, 'eng', 'Adherent', 34, 'publications', ''),
(1065, 'fre', 'Adherent', 35, 'fonction', ''),
(1066, 'eng', 'Adherent', 35, 'fonction', ''),
(1067, 'fre', 'Adherent', 35, 'departement', ''),
(1068, 'eng', 'Adherent', 35, 'departement', ''),
(1069, 'fre', 'Adherent', 35, 'faculte', ''),
(1070, 'eng', 'Adherent', 35, 'faculte', ''),
(1071, 'fre', 'Adherent', 35, 'university', ''),
(1072, 'eng', 'Adherent', 35, 'university', ''),
(1073, 'fre', 'Adherent', 35, 'adresse', ''),
(1074, 'eng', 'Adherent', 35, 'adresse', ''),
(1075, 'fre', 'Adherent', 35, 'ville', ''),
(1076, 'eng', 'Adherent', 35, 'ville', ''),
(1077, 'fre', 'Adherent', 35, 'cv', ''),
(1078, 'eng', 'Adherent', 35, 'cv', ''),
(1079, 'fre', 'Adherent', 35, 'publications', ''),
(1080, 'eng', 'Adherent', 35, 'publications', ''),
(1081, 'fre', 'Adherent', 36, 'fonction', ''),
(1082, 'eng', 'Adherent', 36, 'fonction', ''),
(1083, 'fre', 'Adherent', 36, 'departement', ''),
(1084, 'eng', 'Adherent', 36, 'departement', ''),
(1085, 'fre', 'Adherent', 36, 'faculte', ''),
(1086, 'eng', 'Adherent', 36, 'faculte', ''),
(1087, 'fre', 'Adherent', 36, 'university', ''),
(1088, 'eng', 'Adherent', 36, 'university', ''),
(1089, 'fre', 'Adherent', 36, 'adresse', ''),
(1090, 'eng', 'Adherent', 36, 'adresse', ''),
(1091, 'fre', 'Adherent', 36, 'ville', ''),
(1092, 'eng', 'Adherent', 36, 'ville', ''),
(1093, 'fre', 'Adherent', 36, 'cv', ''),
(1094, 'eng', 'Adherent', 36, 'cv', ''),
(1095, 'fre', 'Adherent', 36, 'publications', ''),
(1096, 'eng', 'Adherent', 36, 'publications', ''),
(1097, 'fre', 'Adherent', 37, 'fonction', ''),
(1098, 'eng', 'Adherent', 37, 'fonction', ''),
(1099, 'fre', 'Adherent', 37, 'departement', ''),
(1100, 'eng', 'Adherent', 37, 'departement', ''),
(1101, 'fre', 'Adherent', 37, 'faculte', ''),
(1102, 'eng', 'Adherent', 37, 'faculte', ''),
(1103, 'fre', 'Adherent', 37, 'university', ''),
(1104, 'eng', 'Adherent', 37, 'university', ''),
(1105, 'fre', 'Adherent', 37, 'adresse', ''),
(1106, 'eng', 'Adherent', 37, 'adresse', ''),
(1107, 'fre', 'Adherent', 37, 'ville', ''),
(1108, 'eng', 'Adherent', 37, 'ville', ''),
(1109, 'fre', 'Adherent', 37, 'cv', ''),
(1110, 'eng', 'Adherent', 37, 'cv', ''),
(1111, 'fre', 'Adherent', 37, 'publications', ''),
(1112, 'eng', 'Adherent', 37, 'publications', ''),
(1113, 'fre', 'Adherent', 38, 'fonction', ''),
(1114, 'eng', 'Adherent', 38, 'fonction', ''),
(1115, 'fre', 'Adherent', 38, 'departement', ''),
(1116, 'eng', 'Adherent', 38, 'departement', ''),
(1117, 'fre', 'Adherent', 38, 'faculte', ''),
(1118, 'eng', 'Adherent', 38, 'faculte', ''),
(1119, 'fre', 'Adherent', 38, 'university', ''),
(1120, 'eng', 'Adherent', 38, 'university', ''),
(1121, 'fre', 'Adherent', 38, 'adresse', ''),
(1122, 'eng', 'Adherent', 38, 'adresse', ''),
(1123, 'fre', 'Adherent', 38, 'ville', ''),
(1124, 'eng', 'Adherent', 38, 'ville', ''),
(1125, 'fre', 'Adherent', 38, 'cv', ''),
(1126, 'eng', 'Adherent', 38, 'cv', '');
INSERT INTO `bai18n` (`id`, `locale`, `model`, `foreign_key`, `field`, `content`) VALUES
(1127, 'fre', 'Adherent', 38, 'publications', ''),
(1128, 'eng', 'Adherent', 38, 'publications', ''),
(1129, 'fre', 'Adherent', 39, 'fonction', ''),
(1130, 'eng', 'Adherent', 39, 'fonction', ''),
(1131, 'fre', 'Adherent', 39, 'departement', ''),
(1132, 'eng', 'Adherent', 39, 'departement', ''),
(1133, 'fre', 'Adherent', 39, 'faculte', ''),
(1134, 'eng', 'Adherent', 39, 'faculte', ''),
(1135, 'fre', 'Adherent', 39, 'university', ''),
(1136, 'eng', 'Adherent', 39, 'university', ''),
(1137, 'fre', 'Adherent', 39, 'adresse', ''),
(1138, 'eng', 'Adherent', 39, 'adresse', ''),
(1139, 'fre', 'Adherent', 39, 'ville', ''),
(1140, 'eng', 'Adherent', 39, 'ville', ''),
(1141, 'fre', 'Adherent', 39, 'cv', ''),
(1142, 'eng', 'Adherent', 39, 'cv', ''),
(1143, 'fre', 'Adherent', 39, 'publications', ''),
(1144, 'eng', 'Adherent', 39, 'publications', ''),
(1145, 'fre', 'Adherent', 40, 'fonction', ''),
(1146, 'eng', 'Adherent', 40, 'fonction', ''),
(1147, 'fre', 'Adherent', 40, 'departement', ''),
(1148, 'eng', 'Adherent', 40, 'departement', ''),
(1149, 'fre', 'Adherent', 40, 'faculte', ''),
(1150, 'eng', 'Adherent', 40, 'faculte', ''),
(1151, 'fre', 'Adherent', 40, 'university', ''),
(1152, 'eng', 'Adherent', 40, 'university', ''),
(1153, 'fre', 'Adherent', 40, 'adresse', ''),
(1154, 'eng', 'Adherent', 40, 'adresse', ''),
(1155, 'fre', 'Adherent', 40, 'ville', ''),
(1156, 'eng', 'Adherent', 40, 'ville', ''),
(1157, 'fre', 'Adherent', 40, 'cv', ''),
(1158, 'eng', 'Adherent', 40, 'cv', ''),
(1159, 'fre', 'Adherent', 40, 'publications', ''),
(1160, 'eng', 'Adherent', 40, 'publications', ''),
(1161, 'fre', 'Adherent', 41, 'fonction', ''),
(1162, 'eng', 'Adherent', 41, 'fonction', ''),
(1163, 'fre', 'Adherent', 41, 'departement', ''),
(1164, 'eng', 'Adherent', 41, 'departement', ''),
(1165, 'fre', 'Adherent', 41, 'faculte', ''),
(1166, 'eng', 'Adherent', 41, 'faculte', ''),
(1167, 'fre', 'Adherent', 41, 'university', ''),
(1168, 'eng', 'Adherent', 41, 'university', ''),
(1169, 'fre', 'Adherent', 41, 'adresse', ''),
(1170, 'eng', 'Adherent', 41, 'adresse', ''),
(1171, 'fre', 'Adherent', 41, 'ville', ''),
(1172, 'eng', 'Adherent', 41, 'ville', ''),
(1173, 'fre', 'Adherent', 41, 'cv', ''),
(1174, 'eng', 'Adherent', 41, 'cv', ''),
(1175, 'fre', 'Adherent', 41, 'publications', ''),
(1176, 'eng', 'Adherent', 41, 'publications', ''),
(1177, 'fre', 'Adherent', 42, 'fonction', ''),
(1178, 'eng', 'Adherent', 42, 'fonction', ''),
(1179, 'fre', 'Adherent', 42, 'departement', ''),
(1180, 'eng', 'Adherent', 42, 'departement', ''),
(1181, 'fre', 'Adherent', 42, 'faculte', ''),
(1182, 'eng', 'Adherent', 42, 'faculte', ''),
(1183, 'fre', 'Adherent', 42, 'university', ''),
(1184, 'eng', 'Adherent', 42, 'university', ''),
(1185, 'fre', 'Adherent', 42, 'adresse', ''),
(1186, 'eng', 'Adherent', 42, 'adresse', ''),
(1187, 'fre', 'Adherent', 42, 'ville', ''),
(1188, 'eng', 'Adherent', 42, 'ville', ''),
(1189, 'fre', 'Adherent', 42, 'cv', ''),
(1190, 'eng', 'Adherent', 42, 'cv', ''),
(1191, 'fre', 'Adherent', 42, 'publications', ''),
(1192, 'eng', 'Adherent', 42, 'publications', ''),
(1193, 'fre', 'Adherent', 43, 'fonction', ''),
(1194, 'eng', 'Adherent', 43, 'fonction', ''),
(1195, 'fre', 'Adherent', 43, 'departement', ''),
(1196, 'eng', 'Adherent', 43, 'departement', ''),
(1197, 'fre', 'Adherent', 43, 'faculte', ''),
(1198, 'eng', 'Adherent', 43, 'faculte', ''),
(1199, 'fre', 'Adherent', 43, 'university', ''),
(1200, 'eng', 'Adherent', 43, 'university', ''),
(1201, 'fre', 'Adherent', 43, 'adresse', ''),
(1202, 'eng', 'Adherent', 43, 'adresse', ''),
(1203, 'fre', 'Adherent', 43, 'ville', ''),
(1204, 'eng', 'Adherent', 43, 'ville', ''),
(1205, 'fre', 'Adherent', 43, 'cv', ''),
(1206, 'eng', 'Adherent', 43, 'cv', ''),
(1207, 'fre', 'Adherent', 43, 'publications', ''),
(1208, 'eng', 'Adherent', 43, 'publications', ''),
(1209, 'fre', 'Adherent', 44, 'fonction', ''),
(1210, 'eng', 'Adherent', 44, 'fonction', ''),
(1211, 'fre', 'Adherent', 44, 'departement', ''),
(1212, 'eng', 'Adherent', 44, 'departement', ''),
(1213, 'fre', 'Adherent', 44, 'faculte', ''),
(1214, 'eng', 'Adherent', 44, 'faculte', ''),
(1215, 'fre', 'Adherent', 44, 'university', ''),
(1216, 'eng', 'Adherent', 44, 'university', ''),
(1217, 'fre', 'Adherent', 44, 'adresse', ''),
(1218, 'eng', 'Adherent', 44, 'adresse', ''),
(1219, 'fre', 'Adherent', 44, 'ville', ''),
(1220, 'eng', 'Adherent', 44, 'ville', ''),
(1221, 'fre', 'Adherent', 44, 'cv', ''),
(1222, 'eng', 'Adherent', 44, 'cv', ''),
(1223, 'fre', 'Adherent', 44, 'publications', ''),
(1224, 'eng', 'Adherent', 44, 'publications', ''),
(1225, 'fre', 'Adherent', 45, 'fonction', ''),
(1226, 'eng', 'Adherent', 45, 'fonction', ''),
(1227, 'fre', 'Adherent', 45, 'departement', ''),
(1228, 'eng', 'Adherent', 45, 'departement', ''),
(1229, 'fre', 'Adherent', 45, 'faculte', ''),
(1230, 'eng', 'Adherent', 45, 'faculte', ''),
(1231, 'fre', 'Adherent', 45, 'university', ''),
(1232, 'eng', 'Adherent', 45, 'university', ''),
(1233, 'fre', 'Adherent', 45, 'adresse', ''),
(1234, 'eng', 'Adherent', 45, 'adresse', ''),
(1235, 'fre', 'Adherent', 45, 'ville', ''),
(1236, 'eng', 'Adherent', 45, 'ville', ''),
(1237, 'fre', 'Adherent', 45, 'cv', ''),
(1238, 'eng', 'Adherent', 45, 'cv', ''),
(1239, 'fre', 'Adherent', 45, 'publications', ''),
(1240, 'eng', 'Adherent', 45, 'publications', ''),
(1241, 'fre', 'Adherent', 46, 'fonction', ''),
(1242, 'eng', 'Adherent', 46, 'fonction', ''),
(1243, 'fre', 'Adherent', 46, 'departement', ''),
(1244, 'eng', 'Adherent', 46, 'departement', ''),
(1245, 'fre', 'Adherent', 46, 'faculte', ''),
(1246, 'eng', 'Adherent', 46, 'faculte', ''),
(1247, 'fre', 'Adherent', 46, 'university', ''),
(1248, 'eng', 'Adherent', 46, 'university', ''),
(1249, 'fre', 'Adherent', 46, 'adresse', ''),
(1250, 'eng', 'Adherent', 46, 'adresse', ''),
(1251, 'fre', 'Adherent', 46, 'ville', ''),
(1252, 'eng', 'Adherent', 46, 'ville', ''),
(1253, 'fre', 'Adherent', 46, 'cv', ''),
(1254, 'eng', 'Adherent', 46, 'cv', ''),
(1255, 'fre', 'Adherent', 46, 'publications', ''),
(1256, 'eng', 'Adherent', 46, 'publications', ''),
(1257, 'fre', 'Adherent', 47, 'fonction', ''),
(1258, 'eng', 'Adherent', 47, 'fonction', ''),
(1259, 'fre', 'Adherent', 47, 'departement', ''),
(1260, 'eng', 'Adherent', 47, 'departement', ''),
(1261, 'fre', 'Adherent', 47, 'faculte', ''),
(1262, 'eng', 'Adherent', 47, 'faculte', ''),
(1263, 'fre', 'Adherent', 47, 'university', ''),
(1264, 'eng', 'Adherent', 47, 'university', ''),
(1265, 'fre', 'Adherent', 47, 'adresse', ''),
(1266, 'eng', 'Adherent', 47, 'adresse', ''),
(1267, 'fre', 'Adherent', 47, 'ville', ''),
(1268, 'eng', 'Adherent', 47, 'ville', ''),
(1269, 'fre', 'Adherent', 47, 'cv', ''),
(1270, 'eng', 'Adherent', 47, 'cv', ''),
(1271, 'fre', 'Adherent', 47, 'publications', ''),
(1272, 'eng', 'Adherent', 47, 'publications', ''),
(1273, 'fre', 'Adherent', 48, 'fonction', ''),
(1274, 'eng', 'Adherent', 48, 'fonction', ''),
(1275, 'fre', 'Adherent', 48, 'departement', ''),
(1276, 'eng', 'Adherent', 48, 'departement', ''),
(1277, 'fre', 'Adherent', 48, 'faculte', ''),
(1278, 'eng', 'Adherent', 48, 'faculte', ''),
(1279, 'fre', 'Adherent', 48, 'university', ''),
(1280, 'eng', 'Adherent', 48, 'university', ''),
(1281, 'fre', 'Adherent', 48, 'adresse', ''),
(1282, 'eng', 'Adherent', 48, 'adresse', ''),
(1283, 'fre', 'Adherent', 48, 'ville', ''),
(1284, 'eng', 'Adherent', 48, 'ville', ''),
(1285, 'fre', 'Adherent', 48, 'cv', ''),
(1286, 'eng', 'Adherent', 48, 'cv', ''),
(1287, 'fre', 'Adherent', 48, 'publications', ''),
(1288, 'eng', 'Adherent', 48, 'publications', ''),
(1289, 'fre', 'Adherent', 49, 'fonction', ''),
(1290, 'eng', 'Adherent', 49, 'fonction', ''),
(1291, 'fre', 'Adherent', 49, 'departement', ''),
(1292, 'eng', 'Adherent', 49, 'departement', ''),
(1293, 'fre', 'Adherent', 49, 'faculte', ''),
(1294, 'eng', 'Adherent', 49, 'faculte', ''),
(1295, 'fre', 'Adherent', 49, 'university', ''),
(1296, 'eng', 'Adherent', 49, 'university', ''),
(1297, 'fre', 'Adherent', 49, 'adresse', ''),
(1298, 'eng', 'Adherent', 49, 'adresse', ''),
(1299, 'fre', 'Adherent', 49, 'ville', ''),
(1300, 'eng', 'Adherent', 49, 'ville', ''),
(1301, 'fre', 'Adherent', 49, 'cv', ''),
(1302, 'eng', 'Adherent', 49, 'cv', ''),
(1303, 'fre', 'Adherent', 49, 'publications', ''),
(1304, 'eng', 'Adherent', 49, 'publications', ''),
(1305, 'fre', 'Adherent', 50, 'fonction', ''),
(1306, 'eng', 'Adherent', 50, 'fonction', ''),
(1307, 'fre', 'Adherent', 50, 'departement', ''),
(1308, 'eng', 'Adherent', 50, 'departement', ''),
(1309, 'fre', 'Adherent', 50, 'faculte', ''),
(1310, 'eng', 'Adherent', 50, 'faculte', ''),
(1311, 'fre', 'Adherent', 50, 'university', ''),
(1312, 'eng', 'Adherent', 50, 'university', ''),
(1313, 'fre', 'Adherent', 50, 'adresse', ''),
(1314, 'eng', 'Adherent', 50, 'adresse', ''),
(1315, 'fre', 'Adherent', 50, 'ville', ''),
(1316, 'eng', 'Adherent', 50, 'ville', ''),
(1317, 'fre', 'Adherent', 50, 'cv', ''),
(1318, 'eng', 'Adherent', 50, 'cv', ''),
(1319, 'fre', 'Adherent', 50, 'publications', ''),
(1320, 'eng', 'Adherent', 50, 'publications', ''),
(1321, 'fre', 'Adherent', 51, 'fonction', ''),
(1322, 'eng', 'Adherent', 51, 'fonction', ''),
(1323, 'fre', 'Adherent', 51, 'departement', ''),
(1324, 'eng', 'Adherent', 51, 'departement', ''),
(1325, 'fre', 'Adherent', 51, 'faculte', ''),
(1326, 'eng', 'Adherent', 51, 'faculte', ''),
(1327, 'fre', 'Adherent', 51, 'university', ''),
(1328, 'eng', 'Adherent', 51, 'university', ''),
(1329, 'fre', 'Adherent', 51, 'adresse', ''),
(1330, 'eng', 'Adherent', 51, 'adresse', ''),
(1331, 'fre', 'Adherent', 51, 'ville', ''),
(1332, 'eng', 'Adherent', 51, 'ville', ''),
(1333, 'fre', 'Adherent', 51, 'cv', ''),
(1334, 'eng', 'Adherent', 51, 'cv', ''),
(1335, 'fre', 'Adherent', 51, 'publications', ''),
(1336, 'eng', 'Adherent', 51, 'publications', ''),
(1337, 'fre', 'Adherent', 52, 'fonction', ''),
(1338, 'eng', 'Adherent', 52, 'fonction', ''),
(1339, 'fre', 'Adherent', 52, 'departement', ''),
(1340, 'eng', 'Adherent', 52, 'departement', ''),
(1341, 'fre', 'Adherent', 52, 'faculte', ''),
(1342, 'eng', 'Adherent', 52, 'faculte', ''),
(1343, 'fre', 'Adherent', 52, 'university', ''),
(1344, 'eng', 'Adherent', 52, 'university', ''),
(1345, 'fre', 'Adherent', 52, 'adresse', ''),
(1346, 'eng', 'Adherent', 52, 'adresse', ''),
(1347, 'fre', 'Adherent', 52, 'ville', ''),
(1348, 'eng', 'Adherent', 52, 'ville', ''),
(1349, 'fre', 'Adherent', 52, 'cv', ''),
(1350, 'eng', 'Adherent', 52, 'cv', ''),
(1351, 'fre', 'Adherent', 52, 'publications', ''),
(1352, 'eng', 'Adherent', 52, 'publications', ''),
(1353, 'fre', 'Adherent', 53, 'fonction', ''),
(1354, 'eng', 'Adherent', 53, 'fonction', ''),
(1355, 'fre', 'Adherent', 53, 'departement', ''),
(1356, 'eng', 'Adherent', 53, 'departement', ''),
(1357, 'fre', 'Adherent', 53, 'faculte', ''),
(1358, 'eng', 'Adherent', 53, 'faculte', ''),
(1359, 'fre', 'Adherent', 53, 'university', ''),
(1360, 'eng', 'Adherent', 53, 'university', ''),
(1361, 'fre', 'Adherent', 53, 'adresse', ''),
(1362, 'eng', 'Adherent', 53, 'adresse', ''),
(1363, 'fre', 'Adherent', 53, 'ville', ''),
(1364, 'eng', 'Adherent', 53, 'ville', ''),
(1365, 'fre', 'Adherent', 53, 'cv', ''),
(1366, 'eng', 'Adherent', 53, 'cv', ''),
(1367, 'fre', 'Adherent', 53, 'publications', ''),
(1368, 'eng', 'Adherent', 53, 'publications', ''),
(1369, 'fre', 'Adherent', 54, 'fonction', ''),
(1370, 'eng', 'Adherent', 54, 'fonction', ''),
(1371, 'fre', 'Adherent', 54, 'departement', ''),
(1372, 'eng', 'Adherent', 54, 'departement', ''),
(1373, 'fre', 'Adherent', 54, 'faculte', ''),
(1374, 'eng', 'Adherent', 54, 'faculte', ''),
(1375, 'fre', 'Adherent', 54, 'university', ''),
(1376, 'eng', 'Adherent', 54, 'university', ''),
(1377, 'fre', 'Adherent', 54, 'adresse', ''),
(1378, 'eng', 'Adherent', 54, 'adresse', ''),
(1379, 'fre', 'Adherent', 54, 'ville', ''),
(1380, 'eng', 'Adherent', 54, 'ville', ''),
(1381, 'fre', 'Adherent', 54, 'cv', ''),
(1382, 'eng', 'Adherent', 54, 'cv', ''),
(1383, 'fre', 'Adherent', 54, 'publications', ''),
(1384, 'eng', 'Adherent', 54, 'publications', ''),
(1385, 'fre', 'Adherent', 55, 'fonction', ''),
(1386, 'eng', 'Adherent', 55, 'fonction', ''),
(1387, 'fre', 'Adherent', 55, 'departement', ''),
(1388, 'eng', 'Adherent', 55, 'departement', ''),
(1389, 'fre', 'Adherent', 55, 'faculte', ''),
(1390, 'eng', 'Adherent', 55, 'faculte', ''),
(1391, 'fre', 'Adherent', 55, 'university', ''),
(1392, 'eng', 'Adherent', 55, 'university', ''),
(1393, 'fre', 'Adherent', 55, 'adresse', ''),
(1394, 'eng', 'Adherent', 55, 'adresse', ''),
(1395, 'fre', 'Adherent', 55, 'ville', ''),
(1396, 'eng', 'Adherent', 55, 'ville', ''),
(1397, 'fre', 'Adherent', 55, 'cv', ''),
(1398, 'eng', 'Adherent', 55, 'cv', ''),
(1399, 'fre', 'Adherent', 55, 'publications', ''),
(1400, 'eng', 'Adherent', 55, 'publications', ''),
(1401, 'fre', 'Adherent', 56, 'fonction', ''),
(1402, 'eng', 'Adherent', 56, 'fonction', ''),
(1403, 'fre', 'Adherent', 56, 'departement', ''),
(1404, 'eng', 'Adherent', 56, 'departement', ''),
(1405, 'fre', 'Adherent', 56, 'faculte', ''),
(1406, 'eng', 'Adherent', 56, 'faculte', ''),
(1407, 'fre', 'Adherent', 56, 'university', ''),
(1408, 'eng', 'Adherent', 56, 'university', ''),
(1409, 'fre', 'Adherent', 56, 'adresse', ''),
(1410, 'eng', 'Adherent', 56, 'adresse', ''),
(1411, 'fre', 'Adherent', 56, 'ville', ''),
(1412, 'eng', 'Adherent', 56, 'ville', ''),
(1413, 'fre', 'Adherent', 56, 'cv', ''),
(1414, 'eng', 'Adherent', 56, 'cv', ''),
(1415, 'fre', 'Adherent', 56, 'publications', ''),
(1416, 'eng', 'Adherent', 56, 'publications', ''),
(1417, 'fre', 'Adherent', 57, 'fonction', ''),
(1418, 'eng', 'Adherent', 57, 'fonction', ''),
(1419, 'fre', 'Adherent', 57, 'departement', ''),
(1420, 'eng', 'Adherent', 57, 'departement', ''),
(1421, 'fre', 'Adherent', 57, 'faculte', ''),
(1422, 'eng', 'Adherent', 57, 'faculte', ''),
(1423, 'fre', 'Adherent', 57, 'university', ''),
(1424, 'eng', 'Adherent', 57, 'university', ''),
(1425, 'fre', 'Adherent', 57, 'adresse', ''),
(1426, 'eng', 'Adherent', 57, 'adresse', ''),
(1427, 'fre', 'Adherent', 57, 'ville', ''),
(1428, 'eng', 'Adherent', 57, 'ville', ''),
(1429, 'fre', 'Adherent', 57, 'cv', ''),
(1430, 'eng', 'Adherent', 57, 'cv', ''),
(1431, 'fre', 'Adherent', 57, 'publications', ''),
(1432, 'eng', 'Adherent', 57, 'publications', ''),
(1433, 'fre', 'Adherent', 58, 'fonction', ''),
(1434, 'eng', 'Adherent', 58, 'fonction', ''),
(1435, 'fre', 'Adherent', 58, 'departement', ''),
(1436, 'eng', 'Adherent', 58, 'departement', ''),
(1437, 'fre', 'Adherent', 58, 'faculte', ''),
(1438, 'eng', 'Adherent', 58, 'faculte', ''),
(1439, 'fre', 'Adherent', 58, 'university', ''),
(1440, 'eng', 'Adherent', 58, 'university', ''),
(1441, 'fre', 'Adherent', 58, 'adresse', ''),
(1442, 'eng', 'Adherent', 58, 'adresse', ''),
(1443, 'fre', 'Adherent', 58, 'ville', ''),
(1444, 'eng', 'Adherent', 58, 'ville', ''),
(1445, 'fre', 'Adherent', 58, 'cv', ''),
(1446, 'eng', 'Adherent', 58, 'cv', ''),
(1447, 'fre', 'Adherent', 58, 'publications', ''),
(1448, 'eng', 'Adherent', 58, 'publications', ''),
(1449, 'fre', 'Adherent', 59, 'fonction', ''),
(1450, 'eng', 'Adherent', 59, 'fonction', ''),
(1451, 'fre', 'Adherent', 59, 'departement', ''),
(1452, 'eng', 'Adherent', 59, 'departement', ''),
(1453, 'fre', 'Adherent', 59, 'faculte', ''),
(1454, 'eng', 'Adherent', 59, 'faculte', ''),
(1455, 'fre', 'Adherent', 59, 'university', ''),
(1456, 'eng', 'Adherent', 59, 'university', ''),
(1457, 'fre', 'Adherent', 59, 'adresse', ''),
(1458, 'eng', 'Adherent', 59, 'adresse', ''),
(1459, 'fre', 'Adherent', 59, 'ville', ''),
(1460, 'eng', 'Adherent', 59, 'ville', ''),
(1461, 'fre', 'Adherent', 59, 'cv', ''),
(1462, 'eng', 'Adherent', 59, 'cv', ''),
(1463, 'fre', 'Adherent', 59, 'publications', ''),
(1464, 'eng', 'Adherent', 59, 'publications', ''),
(1465, 'fre', 'Adherent', 60, 'fonction', ''),
(1466, 'eng', 'Adherent', 60, 'fonction', ''),
(1467, 'fre', 'Adherent', 60, 'departement', ''),
(1468, 'eng', 'Adherent', 60, 'departement', ''),
(1469, 'fre', 'Adherent', 60, 'faculte', ''),
(1470, 'eng', 'Adherent', 60, 'faculte', ''),
(1471, 'fre', 'Adherent', 60, 'university', ''),
(1472, 'eng', 'Adherent', 60, 'university', ''),
(1473, 'fre', 'Adherent', 60, 'adresse', ''),
(1474, 'eng', 'Adherent', 60, 'adresse', ''),
(1475, 'fre', 'Adherent', 60, 'ville', ''),
(1476, 'eng', 'Adherent', 60, 'ville', ''),
(1477, 'fre', 'Adherent', 60, 'cv', ''),
(1478, 'eng', 'Adherent', 60, 'cv', ''),
(1479, 'fre', 'Adherent', 60, 'publications', ''),
(1480, 'eng', 'Adherent', 60, 'publications', ''),
(1481, 'fre', 'Adherent', 61, 'fonction', ''),
(1482, 'eng', 'Adherent', 61, 'fonction', ''),
(1483, 'fre', 'Adherent', 61, 'departement', ''),
(1484, 'eng', 'Adherent', 61, 'departement', ''),
(1485, 'fre', 'Adherent', 61, 'faculte', ''),
(1486, 'eng', 'Adherent', 61, 'faculte', ''),
(1487, 'fre', 'Adherent', 61, 'university', ''),
(1488, 'eng', 'Adherent', 61, 'university', ''),
(1489, 'fre', 'Adherent', 61, 'adresse', ''),
(1490, 'eng', 'Adherent', 61, 'adresse', ''),
(1491, 'fre', 'Adherent', 61, 'ville', ''),
(1492, 'eng', 'Adherent', 61, 'ville', ''),
(1493, 'fre', 'Adherent', 61, 'cv', ''),
(1494, 'eng', 'Adherent', 61, 'cv', ''),
(1495, 'fre', 'Adherent', 61, 'publications', ''),
(1496, 'eng', 'Adherent', 61, 'publications', ''),
(1497, 'fre', 'Adherent', 62, 'fonction', ''),
(1498, 'eng', 'Adherent', 62, 'fonction', ''),
(1499, 'fre', 'Adherent', 62, 'departement', ''),
(1500, 'eng', 'Adherent', 62, 'departement', ''),
(1501, 'fre', 'Adherent', 62, 'faculte', ''),
(1502, 'eng', 'Adherent', 62, 'faculte', ''),
(1503, 'fre', 'Adherent', 62, 'university', ''),
(1504, 'eng', 'Adherent', 62, 'university', ''),
(1505, 'fre', 'Adherent', 62, 'adresse', ''),
(1506, 'eng', 'Adherent', 62, 'adresse', ''),
(1507, 'fre', 'Adherent', 62, 'ville', ''),
(1508, 'eng', 'Adherent', 62, 'ville', ''),
(1509, 'fre', 'Adherent', 62, 'cv', ''),
(1510, 'eng', 'Adherent', 62, 'cv', ''),
(1511, 'fre', 'Adherent', 62, 'publications', ''),
(1512, 'eng', 'Adherent', 62, 'publications', ''),
(1513, 'fre', 'Adherent', 63, 'fonction', ''),
(1514, 'eng', 'Adherent', 63, 'fonction', ''),
(1515, 'fre', 'Adherent', 63, 'departement', ''),
(1516, 'eng', 'Adherent', 63, 'departement', ''),
(1517, 'fre', 'Adherent', 63, 'faculte', ''),
(1518, 'eng', 'Adherent', 63, 'faculte', ''),
(1519, 'fre', 'Adherent', 63, 'university', ''),
(1520, 'eng', 'Adherent', 63, 'university', ''),
(1521, 'fre', 'Adherent', 63, 'adresse', ''),
(1522, 'eng', 'Adherent', 63, 'adresse', ''),
(1523, 'fre', 'Adherent', 63, 'ville', ''),
(1524, 'eng', 'Adherent', 63, 'ville', ''),
(1525, 'fre', 'Adherent', 63, 'cv', ''),
(1526, 'eng', 'Adherent', 63, 'cv', ''),
(1527, 'fre', 'Adherent', 63, 'publications', ''),
(1528, 'eng', 'Adherent', 63, 'publications', ''),
(1529, 'fre', 'Adherent', 64, 'fonction', ''),
(1530, 'eng', 'Adherent', 64, 'fonction', ''),
(1531, 'fre', 'Adherent', 64, 'departement', ''),
(1532, 'eng', 'Adherent', 64, 'departement', ''),
(1533, 'fre', 'Adherent', 64, 'faculte', ''),
(1534, 'eng', 'Adherent', 64, 'faculte', ''),
(1535, 'fre', 'Adherent', 64, 'university', ''),
(1536, 'eng', 'Adherent', 64, 'university', ''),
(1537, 'fre', 'Adherent', 64, 'adresse', ''),
(1538, 'eng', 'Adherent', 64, 'adresse', ''),
(1539, 'fre', 'Adherent', 64, 'ville', ''),
(1540, 'eng', 'Adherent', 64, 'ville', ''),
(1541, 'fre', 'Adherent', 64, 'cv', ''),
(1542, 'eng', 'Adherent', 64, 'cv', ''),
(1543, 'fre', 'Adherent', 64, 'publications', ''),
(1544, 'eng', 'Adherent', 64, 'publications', ''),
(1545, 'fre', 'Adherent', 65, 'fonction', ''),
(1546, 'eng', 'Adherent', 65, 'fonction', ''),
(1547, 'fre', 'Adherent', 65, 'departement', ''),
(1548, 'eng', 'Adherent', 65, 'departement', ''),
(1549, 'fre', 'Adherent', 65, 'faculte', ''),
(1550, 'eng', 'Adherent', 65, 'faculte', ''),
(1551, 'fre', 'Adherent', 65, 'university', ''),
(1552, 'eng', 'Adherent', 65, 'university', ''),
(1553, 'fre', 'Adherent', 65, 'adresse', ''),
(1554, 'eng', 'Adherent', 65, 'adresse', ''),
(1555, 'fre', 'Adherent', 65, 'ville', ''),
(1556, 'eng', 'Adherent', 65, 'ville', ''),
(1557, 'fre', 'Adherent', 65, 'cv', ''),
(1558, 'eng', 'Adherent', 65, 'cv', ''),
(1559, 'fre', 'Adherent', 65, 'publications', ''),
(1560, 'eng', 'Adherent', 65, 'publications', ''),
(1561, 'fre', 'Adherent', 66, 'fonction', ''),
(1562, 'eng', 'Adherent', 66, 'fonction', ''),
(1563, 'fre', 'Adherent', 66, 'departement', ''),
(1564, 'eng', 'Adherent', 66, 'departement', ''),
(1565, 'fre', 'Adherent', 66, 'faculte', ''),
(1566, 'eng', 'Adherent', 66, 'faculte', ''),
(1567, 'fre', 'Adherent', 66, 'university', ''),
(1568, 'eng', 'Adherent', 66, 'university', ''),
(1569, 'fre', 'Adherent', 66, 'adresse', ''),
(1570, 'eng', 'Adherent', 66, 'adresse', ''),
(1571, 'fre', 'Adherent', 66, 'ville', ''),
(1572, 'eng', 'Adherent', 66, 'ville', ''),
(1573, 'fre', 'Adherent', 66, 'cv', ''),
(1574, 'eng', 'Adherent', 66, 'cv', ''),
(1575, 'fre', 'Adherent', 66, 'publications', ''),
(1576, 'eng', 'Adherent', 66, 'publications', ''),
(1577, 'fre', 'Adherent', 67, 'fonction', ''),
(1578, 'eng', 'Adherent', 67, 'fonction', ''),
(1579, 'fre', 'Adherent', 67, 'departement', ''),
(1580, 'eng', 'Adherent', 67, 'departement', ''),
(1581, 'fre', 'Adherent', 67, 'faculte', ''),
(1582, 'eng', 'Adherent', 67, 'faculte', ''),
(1583, 'fre', 'Adherent', 67, 'university', ''),
(1584, 'eng', 'Adherent', 67, 'university', ''),
(1585, 'fre', 'Adherent', 67, 'adresse', ''),
(1586, 'eng', 'Adherent', 67, 'adresse', ''),
(1587, 'fre', 'Adherent', 67, 'ville', ''),
(1588, 'eng', 'Adherent', 67, 'ville', ''),
(1589, 'fre', 'Adherent', 67, 'cv', ''),
(1590, 'eng', 'Adherent', 67, 'cv', ''),
(1591, 'fre', 'Adherent', 67, 'publications', ''),
(1592, 'eng', 'Adherent', 67, 'publications', ''),
(1593, 'fre', 'Adherent', 68, 'fonction', ''),
(1594, 'eng', 'Adherent', 68, 'fonction', ''),
(1595, 'fre', 'Adherent', 68, 'departement', ''),
(1596, 'eng', 'Adherent', 68, 'departement', ''),
(1597, 'fre', 'Adherent', 68, 'faculte', ''),
(1598, 'eng', 'Adherent', 68, 'faculte', ''),
(1599, 'fre', 'Adherent', 68, 'university', ''),
(1600, 'eng', 'Adherent', 68, 'university', ''),
(1601, 'fre', 'Adherent', 68, 'adresse', ''),
(1602, 'eng', 'Adherent', 68, 'adresse', ''),
(1603, 'fre', 'Adherent', 68, 'ville', ''),
(1604, 'eng', 'Adherent', 68, 'ville', ''),
(1605, 'fre', 'Adherent', 68, 'cv', ''),
(1606, 'eng', 'Adherent', 68, 'cv', ''),
(1607, 'fre', 'Adherent', 68, 'publications', ''),
(1608, 'eng', 'Adherent', 68, 'publications', ''),
(1609, 'fre', 'Adherent', 69, 'fonction', ''),
(1610, 'eng', 'Adherent', 69, 'fonction', ''),
(1611, 'fre', 'Adherent', 69, 'departement', ''),
(1612, 'eng', 'Adherent', 69, 'departement', ''),
(1613, 'fre', 'Adherent', 69, 'faculte', ''),
(1614, 'eng', 'Adherent', 69, 'faculte', ''),
(1615, 'fre', 'Adherent', 69, 'university', ''),
(1616, 'eng', 'Adherent', 69, 'university', ''),
(1617, 'fre', 'Adherent', 69, 'adresse', ''),
(1618, 'eng', 'Adherent', 69, 'adresse', ''),
(1619, 'fre', 'Adherent', 69, 'ville', ''),
(1620, 'eng', 'Adherent', 69, 'ville', ''),
(1621, 'fre', 'Adherent', 69, 'cv', ''),
(1622, 'eng', 'Adherent', 69, 'cv', ''),
(1623, 'fre', 'Adherent', 69, 'publications', ''),
(1624, 'eng', 'Adherent', 69, 'publications', ''),
(1625, 'fre', 'Adherent', 70, 'fonction', ''),
(1626, 'eng', 'Adherent', 70, 'fonction', ''),
(1627, 'fre', 'Adherent', 70, 'departement', ''),
(1628, 'eng', 'Adherent', 70, 'departement', ''),
(1629, 'fre', 'Adherent', 70, 'faculte', ''),
(1630, 'eng', 'Adherent', 70, 'faculte', ''),
(1631, 'fre', 'Adherent', 70, 'university', ''),
(1632, 'eng', 'Adherent', 70, 'university', ''),
(1633, 'fre', 'Adherent', 70, 'adresse', ''),
(1634, 'eng', 'Adherent', 70, 'adresse', ''),
(1635, 'fre', 'Adherent', 70, 'ville', ''),
(1636, 'eng', 'Adherent', 70, 'ville', ''),
(1637, 'fre', 'Adherent', 70, 'cv', ''),
(1638, 'eng', 'Adherent', 70, 'cv', ''),
(1639, 'fre', 'Adherent', 70, 'publications', ''),
(1640, 'eng', 'Adherent', 70, 'publications', ''),
(1641, 'fre', 'Adherent', 71, 'fonction', ''),
(1642, 'eng', 'Adherent', 71, 'fonction', ''),
(1643, 'fre', 'Adherent', 71, 'departement', ''),
(1644, 'eng', 'Adherent', 71, 'departement', ''),
(1645, 'fre', 'Adherent', 71, 'faculte', ''),
(1646, 'eng', 'Adherent', 71, 'faculte', ''),
(1647, 'fre', 'Adherent', 71, 'university', ''),
(1648, 'eng', 'Adherent', 71, 'university', ''),
(1649, 'fre', 'Adherent', 71, 'adresse', ''),
(1650, 'eng', 'Adherent', 71, 'adresse', ''),
(1651, 'fre', 'Adherent', 71, 'ville', ''),
(1652, 'eng', 'Adherent', 71, 'ville', ''),
(1653, 'fre', 'Adherent', 71, 'cv', ''),
(1654, 'eng', 'Adherent', 71, 'cv', ''),
(1655, 'fre', 'Adherent', 71, 'publications', ''),
(1656, 'eng', 'Adherent', 71, 'publications', ''),
(1657, 'fre', 'Adherent', 72, 'fonction', ''),
(1658, 'eng', 'Adherent', 72, 'fonction', ''),
(1659, 'fre', 'Adherent', 72, 'departement', ''),
(1660, 'eng', 'Adherent', 72, 'departement', ''),
(1661, 'fre', 'Adherent', 72, 'faculte', ''),
(1662, 'eng', 'Adherent', 72, 'faculte', ''),
(1663, 'fre', 'Adherent', 72, 'university', ''),
(1664, 'eng', 'Adherent', 72, 'university', ''),
(1665, 'fre', 'Adherent', 72, 'adresse', ''),
(1666, 'eng', 'Adherent', 72, 'adresse', ''),
(1667, 'fre', 'Adherent', 72, 'ville', ''),
(1668, 'eng', 'Adherent', 72, 'ville', ''),
(1669, 'fre', 'Adherent', 72, 'cv', ''),
(1670, 'eng', 'Adherent', 72, 'cv', ''),
(1671, 'fre', 'Adherent', 72, 'publications', ''),
(1672, 'eng', 'Adherent', 72, 'publications', ''),
(1673, 'fre', 'Adherent', 73, 'fonction', ''),
(1674, 'eng', 'Adherent', 73, 'fonction', ''),
(1675, 'fre', 'Adherent', 73, 'departement', ''),
(1676, 'eng', 'Adherent', 73, 'departement', ''),
(1677, 'fre', 'Adherent', 73, 'faculte', ''),
(1678, 'eng', 'Adherent', 73, 'faculte', ''),
(1679, 'fre', 'Adherent', 73, 'university', ''),
(1680, 'eng', 'Adherent', 73, 'university', ''),
(1681, 'fre', 'Adherent', 73, 'adresse', ''),
(1682, 'eng', 'Adherent', 73, 'adresse', ''),
(1683, 'fre', 'Adherent', 73, 'ville', ''),
(1684, 'eng', 'Adherent', 73, 'ville', ''),
(1685, 'fre', 'Adherent', 73, 'cv', ''),
(1686, 'eng', 'Adherent', 73, 'cv', ''),
(1687, 'fre', 'Adherent', 73, 'publications', ''),
(1688, 'eng', 'Adherent', 73, 'publications', ''),
(1689, 'fre', 'Adherent', 74, 'fonction', ''),
(1690, 'eng', 'Adherent', 74, 'fonction', ''),
(1691, 'fre', 'Adherent', 74, 'departement', ''),
(1692, 'eng', 'Adherent', 74, 'departement', ''),
(1693, 'fre', 'Adherent', 74, 'faculte', ''),
(1694, 'eng', 'Adherent', 74, 'faculte', ''),
(1695, 'fre', 'Adherent', 74, 'university', ''),
(1696, 'eng', 'Adherent', 74, 'university', ''),
(1697, 'fre', 'Adherent', 74, 'adresse', ''),
(1698, 'eng', 'Adherent', 74, 'adresse', ''),
(1699, 'fre', 'Adherent', 74, 'ville', ''),
(1700, 'eng', 'Adherent', 74, 'ville', ''),
(1701, 'fre', 'Adherent', 74, 'cv', ''),
(1702, 'eng', 'Adherent', 74, 'cv', ''),
(1703, 'fre', 'Adherent', 74, 'publications', ''),
(1704, 'eng', 'Adherent', 74, 'publications', ''),
(1705, 'fre', 'Adherent', 75, 'fonction', ''),
(1706, 'eng', 'Adherent', 75, 'fonction', ''),
(1707, 'fre', 'Adherent', 75, 'departement', ''),
(1708, 'eng', 'Adherent', 75, 'departement', ''),
(1709, 'fre', 'Adherent', 75, 'faculte', ''),
(1710, 'eng', 'Adherent', 75, 'faculte', ''),
(1711, 'fre', 'Adherent', 75, 'university', ''),
(1712, 'eng', 'Adherent', 75, 'university', ''),
(1713, 'fre', 'Adherent', 75, 'adresse', ''),
(1714, 'eng', 'Adherent', 75, 'adresse', ''),
(1715, 'fre', 'Adherent', 75, 'ville', ''),
(1716, 'eng', 'Adherent', 75, 'ville', ''),
(1717, 'fre', 'Adherent', 75, 'cv', ''),
(1718, 'eng', 'Adherent', 75, 'cv', ''),
(1719, 'fre', 'Adherent', 75, 'publications', ''),
(1720, 'eng', 'Adherent', 75, 'publications', ''),
(1721, 'fre', 'Adherent', 76, 'fonction', ''),
(1722, 'eng', 'Adherent', 76, 'fonction', ''),
(1723, 'fre', 'Adherent', 76, 'departement', ''),
(1724, 'eng', 'Adherent', 76, 'departement', ''),
(1725, 'fre', 'Adherent', 76, 'faculte', ''),
(1726, 'eng', 'Adherent', 76, 'faculte', ''),
(1727, 'fre', 'Adherent', 76, 'university', ''),
(1728, 'eng', 'Adherent', 76, 'university', ''),
(1729, 'fre', 'Adherent', 76, 'adresse', ''),
(1730, 'eng', 'Adherent', 76, 'adresse', ''),
(1731, 'fre', 'Adherent', 76, 'ville', ''),
(1732, 'eng', 'Adherent', 76, 'ville', ''),
(1733, 'fre', 'Adherent', 76, 'cv', ''),
(1734, 'eng', 'Adherent', 76, 'cv', ''),
(1735, 'fre', 'Adherent', 76, 'publications', ''),
(1736, 'eng', 'Adherent', 76, 'publications', ''),
(1737, 'fre', 'Adherent', 77, 'fonction', ''),
(1738, 'eng', 'Adherent', 77, 'fonction', ''),
(1739, 'fre', 'Adherent', 77, 'departement', ''),
(1740, 'eng', 'Adherent', 77, 'departement', ''),
(1741, 'fre', 'Adherent', 77, 'faculte', ''),
(1742, 'eng', 'Adherent', 77, 'faculte', ''),
(1743, 'fre', 'Adherent', 77, 'university', ''),
(1744, 'eng', 'Adherent', 77, 'university', ''),
(1745, 'fre', 'Adherent', 77, 'adresse', ''),
(1746, 'eng', 'Adherent', 77, 'adresse', ''),
(1747, 'fre', 'Adherent', 77, 'ville', ''),
(1748, 'eng', 'Adherent', 77, 'ville', ''),
(1749, 'fre', 'Adherent', 77, 'cv', ''),
(1750, 'eng', 'Adherent', 77, 'cv', ''),
(1751, 'fre', 'Adherent', 77, 'publications', ''),
(1752, 'eng', 'Adherent', 77, 'publications', ''),
(1753, 'fre', 'Adherent', 78, 'fonction', ''),
(1754, 'eng', 'Adherent', 78, 'fonction', ''),
(1755, 'fre', 'Adherent', 78, 'departement', ''),
(1756, 'eng', 'Adherent', 78, 'departement', ''),
(1757, 'fre', 'Adherent', 78, 'faculte', ''),
(1758, 'eng', 'Adherent', 78, 'faculte', ''),
(1759, 'fre', 'Adherent', 78, 'university', ''),
(1760, 'eng', 'Adherent', 78, 'university', ''),
(1761, 'fre', 'Adherent', 78, 'adresse', ''),
(1762, 'eng', 'Adherent', 78, 'adresse', ''),
(1763, 'fre', 'Adherent', 78, 'ville', ''),
(1764, 'eng', 'Adherent', 78, 'ville', ''),
(1765, 'fre', 'Adherent', 78, 'cv', ''),
(1766, 'eng', 'Adherent', 78, 'cv', ''),
(1767, 'fre', 'Adherent', 78, 'publications', ''),
(1768, 'eng', 'Adherent', 78, 'publications', ''),
(1769, 'fre', 'Adherent', 79, 'fonction', ''),
(1770, 'eng', 'Adherent', 79, 'fonction', ''),
(1771, 'fre', 'Adherent', 79, 'departement', ''),
(1772, 'eng', 'Adherent', 79, 'departement', ''),
(1773, 'fre', 'Adherent', 79, 'faculte', ''),
(1774, 'eng', 'Adherent', 79, 'faculte', ''),
(1775, 'fre', 'Adherent', 79, 'university', ''),
(1776, 'eng', 'Adherent', 79, 'university', ''),
(1777, 'fre', 'Adherent', 79, 'adresse', ''),
(1778, 'eng', 'Adherent', 79, 'adresse', ''),
(1779, 'fre', 'Adherent', 79, 'ville', ''),
(1780, 'eng', 'Adherent', 79, 'ville', ''),
(1781, 'fre', 'Adherent', 79, 'cv', ''),
(1782, 'eng', 'Adherent', 79, 'cv', ''),
(1783, 'fre', 'Adherent', 79, 'publications', ''),
(1784, 'eng', 'Adherent', 79, 'publications', ''),
(1785, 'fre', 'Adherent', 80, 'fonction', ''),
(1786, 'eng', 'Adherent', 80, 'fonction', ''),
(1787, 'fre', 'Adherent', 80, 'departement', ''),
(1788, 'eng', 'Adherent', 80, 'departement', ''),
(1789, 'fre', 'Adherent', 80, 'faculte', ''),
(1790, 'eng', 'Adherent', 80, 'faculte', ''),
(1791, 'fre', 'Adherent', 80, 'university', ''),
(1792, 'eng', 'Adherent', 80, 'university', ''),
(1793, 'fre', 'Adherent', 80, 'adresse', ''),
(1794, 'eng', 'Adherent', 80, 'adresse', ''),
(1795, 'fre', 'Adherent', 80, 'ville', ''),
(1796, 'eng', 'Adherent', 80, 'ville', ''),
(1797, 'fre', 'Adherent', 80, 'cv', ''),
(1798, 'eng', 'Adherent', 80, 'cv', ''),
(1799, 'fre', 'Adherent', 80, 'publications', ''),
(1800, 'eng', 'Adherent', 80, 'publications', ''),
(1801, 'fre', 'Adherent', 81, 'fonction', ''),
(1802, 'eng', 'Adherent', 81, 'fonction', ''),
(1803, 'fre', 'Adherent', 81, 'departement', ''),
(1804, 'eng', 'Adherent', 81, 'departement', ''),
(1805, 'fre', 'Adherent', 81, 'faculte', ''),
(1806, 'eng', 'Adherent', 81, 'faculte', ''),
(1807, 'fre', 'Adherent', 81, 'university', ''),
(1808, 'eng', 'Adherent', 81, 'university', ''),
(1809, 'fre', 'Adherent', 81, 'adresse', ''),
(1810, 'eng', 'Adherent', 81, 'adresse', ''),
(1811, 'fre', 'Adherent', 81, 'ville', ''),
(1812, 'eng', 'Adherent', 81, 'ville', ''),
(1813, 'fre', 'Adherent', 81, 'cv', ''),
(1814, 'eng', 'Adherent', 81, 'cv', ''),
(1815, 'fre', 'Adherent', 81, 'publications', ''),
(1816, 'eng', 'Adherent', 81, 'publications', ''),
(1817, 'fre', 'Adherent', 82, 'fonction', ''),
(1818, 'eng', 'Adherent', 82, 'fonction', ''),
(1819, 'fre', 'Adherent', 82, 'departement', ''),
(1820, 'eng', 'Adherent', 82, 'departement', ''),
(1821, 'fre', 'Adherent', 82, 'faculte', ''),
(1822, 'eng', 'Adherent', 82, 'faculte', ''),
(1823, 'fre', 'Adherent', 82, 'university', ''),
(1824, 'eng', 'Adherent', 82, 'university', ''),
(1825, 'fre', 'Adherent', 82, 'adresse', ''),
(1826, 'eng', 'Adherent', 82, 'adresse', ''),
(1827, 'fre', 'Adherent', 82, 'ville', ''),
(1828, 'eng', 'Adherent', 82, 'ville', ''),
(1829, 'fre', 'Adherent', 82, 'cv', ''),
(1830, 'eng', 'Adherent', 82, 'cv', ''),
(1831, 'fre', 'Adherent', 82, 'publications', ''),
(1832, 'eng', 'Adherent', 82, 'publications', ''),
(1833, 'fre', 'Adherent', 83, 'fonction', ''),
(1834, 'eng', 'Adherent', 83, 'fonction', ''),
(1835, 'fre', 'Adherent', 83, 'departement', ''),
(1836, 'eng', 'Adherent', 83, 'departement', ''),
(1837, 'fre', 'Adherent', 83, 'faculte', ''),
(1838, 'eng', 'Adherent', 83, 'faculte', ''),
(1839, 'fre', 'Adherent', 83, 'university', ''),
(1840, 'eng', 'Adherent', 83, 'university', ''),
(1841, 'fre', 'Adherent', 83, 'adresse', ''),
(1842, 'eng', 'Adherent', 83, 'adresse', ''),
(1843, 'fre', 'Adherent', 83, 'ville', ''),
(1844, 'eng', 'Adherent', 83, 'ville', ''),
(1845, 'fre', 'Adherent', 83, 'cv', ''),
(1846, 'eng', 'Adherent', 83, 'cv', ''),
(1847, 'fre', 'Adherent', 83, 'publications', ''),
(1848, 'eng', 'Adherent', 83, 'publications', ''),
(1849, 'fre', 'Adherent', 84, 'fonction', ''),
(1850, 'eng', 'Adherent', 84, 'fonction', ''),
(1851, 'fre', 'Adherent', 84, 'departement', ''),
(1852, 'eng', 'Adherent', 84, 'departement', ''),
(1853, 'fre', 'Adherent', 84, 'faculte', ''),
(1854, 'eng', 'Adherent', 84, 'faculte', ''),
(1855, 'fre', 'Adherent', 84, 'university', ''),
(1856, 'eng', 'Adherent', 84, 'university', ''),
(1857, 'fre', 'Adherent', 84, 'adresse', ''),
(1858, 'eng', 'Adherent', 84, 'adresse', ''),
(1859, 'fre', 'Adherent', 84, 'ville', ''),
(1860, 'eng', 'Adherent', 84, 'ville', ''),
(1861, 'fre', 'Adherent', 84, 'cv', ''),
(1862, 'eng', 'Adherent', 84, 'cv', ''),
(1863, 'fre', 'Adherent', 84, 'publications', ''),
(1864, 'eng', 'Adherent', 84, 'publications', ''),
(1865, 'fre', 'Adherent', 85, 'fonction', ''),
(1866, 'eng', 'Adherent', 85, 'fonction', ''),
(1867, 'fre', 'Adherent', 85, 'departement', ''),
(1868, 'eng', 'Adherent', 85, 'departement', ''),
(1869, 'fre', 'Adherent', 85, 'faculte', ''),
(1870, 'eng', 'Adherent', 85, 'faculte', ''),
(1871, 'fre', 'Adherent', 85, 'university', ''),
(1872, 'eng', 'Adherent', 85, 'university', ''),
(1873, 'fre', 'Adherent', 85, 'adresse', ''),
(1874, 'eng', 'Adherent', 85, 'adresse', ''),
(1875, 'fre', 'Adherent', 85, 'ville', ''),
(1876, 'eng', 'Adherent', 85, 'ville', ''),
(1877, 'fre', 'Adherent', 85, 'cv', ''),
(1878, 'eng', 'Adherent', 85, 'cv', ''),
(1879, 'fre', 'Adherent', 85, 'publications', ''),
(1880, 'eng', 'Adherent', 85, 'publications', ''),
(1881, 'fre', 'Adherent', 86, 'fonction', ''),
(1882, 'eng', 'Adherent', 86, 'fonction', ''),
(1883, 'fre', 'Adherent', 86, 'departement', ''),
(1884, 'eng', 'Adherent', 86, 'departement', ''),
(1885, 'fre', 'Adherent', 86, 'faculte', ''),
(1886, 'eng', 'Adherent', 86, 'faculte', ''),
(1887, 'fre', 'Adherent', 86, 'university', ''),
(1888, 'eng', 'Adherent', 86, 'university', ''),
(1889, 'fre', 'Adherent', 86, 'adresse', ''),
(1890, 'eng', 'Adherent', 86, 'adresse', ''),
(1891, 'fre', 'Adherent', 86, 'ville', ''),
(1892, 'eng', 'Adherent', 86, 'ville', ''),
(1893, 'fre', 'Adherent', 86, 'cv', ''),
(1894, 'eng', 'Adherent', 86, 'cv', ''),
(1895, 'fre', 'Adherent', 86, 'publications', ''),
(1896, 'eng', 'Adherent', 86, 'publications', ''),
(1897, 'fre', 'Adherent', 87, 'fonction', ''),
(1898, 'eng', 'Adherent', 87, 'fonction', ''),
(1899, 'fre', 'Adherent', 87, 'departement', ''),
(1900, 'eng', 'Adherent', 87, 'departement', ''),
(1901, 'fre', 'Adherent', 87, 'faculte', ''),
(1902, 'eng', 'Adherent', 87, 'faculte', ''),
(1903, 'fre', 'Adherent', 87, 'university', ''),
(1904, 'eng', 'Adherent', 87, 'university', ''),
(1905, 'fre', 'Adherent', 87, 'adresse', ''),
(1906, 'eng', 'Adherent', 87, 'adresse', ''),
(1907, 'fre', 'Adherent', 87, 'ville', ''),
(1908, 'eng', 'Adherent', 87, 'ville', ''),
(1909, 'fre', 'Adherent', 87, 'cv', ''),
(1910, 'eng', 'Adherent', 87, 'cv', ''),
(1911, 'fre', 'Adherent', 87, 'publications', ''),
(1912, 'eng', 'Adherent', 87, 'publications', ''),
(1913, 'fre', 'Adherent', 88, 'fonction', ''),
(1914, 'eng', 'Adherent', 88, 'fonction', ''),
(1915, 'fre', 'Adherent', 88, 'departement', ''),
(1916, 'eng', 'Adherent', 88, 'departement', ''),
(1917, 'fre', 'Adherent', 88, 'faculte', ''),
(1918, 'eng', 'Adherent', 88, 'faculte', ''),
(1919, 'fre', 'Adherent', 88, 'university', ''),
(1920, 'eng', 'Adherent', 88, 'university', ''),
(1921, 'fre', 'Adherent', 88, 'adresse', ''),
(1922, 'eng', 'Adherent', 88, 'adresse', ''),
(1923, 'fre', 'Adherent', 88, 'ville', ''),
(1924, 'eng', 'Adherent', 88, 'ville', ''),
(1925, 'fre', 'Adherent', 88, 'cv', ''),
(1926, 'eng', 'Adherent', 88, 'cv', ''),
(1927, 'fre', 'Adherent', 88, 'publications', ''),
(1928, 'eng', 'Adherent', 88, 'publications', ''),
(1929, 'fre', 'Adherent', 89, 'fonction', ''),
(1930, 'eng', 'Adherent', 89, 'fonction', ''),
(1931, 'fre', 'Adherent', 89, 'departement', ''),
(1932, 'eng', 'Adherent', 89, 'departement', ''),
(1933, 'fre', 'Adherent', 89, 'faculte', ''),
(1934, 'eng', 'Adherent', 89, 'faculte', ''),
(1935, 'fre', 'Adherent', 89, 'university', ''),
(1936, 'eng', 'Adherent', 89, 'university', ''),
(1937, 'fre', 'Adherent', 89, 'adresse', ''),
(1938, 'eng', 'Adherent', 89, 'adresse', ''),
(1939, 'fre', 'Adherent', 89, 'ville', ''),
(1940, 'eng', 'Adherent', 89, 'ville', ''),
(1941, 'fre', 'Adherent', 89, 'cv', ''),
(1942, 'eng', 'Adherent', 89, 'cv', ''),
(1943, 'fre', 'Adherent', 89, 'publications', ''),
(1944, 'eng', 'Adherent', 89, 'publications', ''),
(1945, 'fre', 'Adherent', 90, 'fonction', ''),
(1946, 'eng', 'Adherent', 90, 'fonction', ''),
(1947, 'fre', 'Adherent', 90, 'departement', ''),
(1948, 'eng', 'Adherent', 90, 'departement', ''),
(1949, 'fre', 'Adherent', 90, 'faculte', ''),
(1950, 'eng', 'Adherent', 90, 'faculte', ''),
(1951, 'fre', 'Adherent', 90, 'university', ''),
(1952, 'eng', 'Adherent', 90, 'university', ''),
(1953, 'fre', 'Adherent', 90, 'adresse', ''),
(1954, 'eng', 'Adherent', 90, 'adresse', ''),
(1955, 'fre', 'Adherent', 90, 'ville', ''),
(1956, 'eng', 'Adherent', 90, 'ville', ''),
(1957, 'fre', 'Adherent', 90, 'cv', ''),
(1958, 'eng', 'Adherent', 90, 'cv', ''),
(1959, 'fre', 'Adherent', 90, 'publications', ''),
(1960, 'eng', 'Adherent', 90, 'publications', ''),
(1961, 'fre', 'Adherent', 91, 'fonction', ''),
(1962, 'eng', 'Adherent', 91, 'fonction', ''),
(1963, 'fre', 'Adherent', 91, 'departement', ''),
(1964, 'eng', 'Adherent', 91, 'departement', ''),
(1965, 'fre', 'Adherent', 91, 'faculte', ''),
(1966, 'eng', 'Adherent', 91, 'faculte', ''),
(1967, 'fre', 'Adherent', 91, 'university', ''),
(1968, 'eng', 'Adherent', 91, 'university', ''),
(1969, 'fre', 'Adherent', 91, 'adresse', ''),
(1970, 'eng', 'Adherent', 91, 'adresse', ''),
(1971, 'fre', 'Adherent', 91, 'ville', ''),
(1972, 'eng', 'Adherent', 91, 'ville', ''),
(1973, 'fre', 'Adherent', 91, 'cv', ''),
(1974, 'eng', 'Adherent', 91, 'cv', ''),
(1975, 'fre', 'Adherent', 91, 'publications', ''),
(1976, 'eng', 'Adherent', 91, 'publications', ''),
(1977, 'fre', 'Adherent', 92, 'fonction', ''),
(1978, 'eng', 'Adherent', 92, 'fonction', ''),
(1979, 'fre', 'Adherent', 92, 'departement', ''),
(1980, 'eng', 'Adherent', 92, 'departement', ''),
(1981, 'fre', 'Adherent', 92, 'faculte', ''),
(1982, 'eng', 'Adherent', 92, 'faculte', ''),
(1983, 'fre', 'Adherent', 92, 'university', ''),
(1984, 'eng', 'Adherent', 92, 'university', ''),
(1985, 'fre', 'Adherent', 92, 'adresse', ''),
(1986, 'eng', 'Adherent', 92, 'adresse', ''),
(1987, 'fre', 'Adherent', 92, 'ville', ''),
(1988, 'eng', 'Adherent', 92, 'ville', ''),
(1989, 'fre', 'Adherent', 92, 'cv', ''),
(1990, 'eng', 'Adherent', 92, 'cv', ''),
(1991, 'fre', 'Adherent', 92, 'publications', ''),
(1992, 'eng', 'Adherent', 92, 'publications', ''),
(1993, 'fre', 'Adherent', 93, 'fonction', ''),
(1994, 'eng', 'Adherent', 93, 'fonction', ''),
(1995, 'fre', 'Adherent', 93, 'departement', ''),
(1996, 'eng', 'Adherent', 93, 'departement', ''),
(1997, 'fre', 'Adherent', 93, 'faculte', ''),
(1998, 'eng', 'Adherent', 93, 'faculte', ''),
(1999, 'fre', 'Adherent', 93, 'university', ''),
(2000, 'eng', 'Adherent', 93, 'university', ''),
(2001, 'fre', 'Adherent', 93, 'adresse', ''),
(2002, 'eng', 'Adherent', 93, 'adresse', ''),
(2003, 'fre', 'Adherent', 93, 'ville', ''),
(2004, 'eng', 'Adherent', 93, 'ville', ''),
(2005, 'fre', 'Adherent', 93, 'cv', ''),
(2006, 'eng', 'Adherent', 93, 'cv', ''),
(2007, 'fre', 'Adherent', 93, 'publications', ''),
(2008, 'eng', 'Adherent', 93, 'publications', ''),
(2009, 'fre', 'Adherent', 94, 'fonction', ''),
(2010, 'eng', 'Adherent', 94, 'fonction', ''),
(2011, 'fre', 'Adherent', 94, 'departement', ''),
(2012, 'eng', 'Adherent', 94, 'departement', ''),
(2013, 'fre', 'Adherent', 94, 'faculte', ''),
(2014, 'eng', 'Adherent', 94, 'faculte', ''),
(2015, 'fre', 'Adherent', 94, 'university', ''),
(2016, 'eng', 'Adherent', 94, 'university', ''),
(2017, 'fre', 'Adherent', 94, 'adresse', ''),
(2018, 'eng', 'Adherent', 94, 'adresse', ''),
(2019, 'fre', 'Adherent', 94, 'ville', ''),
(2020, 'eng', 'Adherent', 94, 'ville', ''),
(2021, 'fre', 'Adherent', 94, 'cv', ''),
(2022, 'eng', 'Adherent', 94, 'cv', ''),
(2023, 'fre', 'Adherent', 94, 'publications', ''),
(2024, 'eng', 'Adherent', 94, 'publications', ''),
(2025, 'fre', 'Adherent', 95, 'fonction', ''),
(2026, 'eng', 'Adherent', 95, 'fonction', ''),
(2027, 'fre', 'Adherent', 95, 'departement', ''),
(2028, 'eng', 'Adherent', 95, 'departement', ''),
(2029, 'fre', 'Adherent', 95, 'faculte', ''),
(2030, 'eng', 'Adherent', 95, 'faculte', ''),
(2031, 'fre', 'Adherent', 95, 'university', ''),
(2032, 'eng', 'Adherent', 95, 'university', ''),
(2033, 'fre', 'Adherent', 95, 'adresse', ''),
(2034, 'eng', 'Adherent', 95, 'adresse', ''),
(2035, 'fre', 'Adherent', 95, 'ville', ''),
(2036, 'eng', 'Adherent', 95, 'ville', ''),
(2037, 'fre', 'Adherent', 95, 'cv', ''),
(2038, 'eng', 'Adherent', 95, 'cv', ''),
(2039, 'fre', 'Adherent', 95, 'publications', ''),
(2040, 'eng', 'Adherent', 95, 'publications', ''),
(2041, 'fre', 'Adherent', 96, 'fonction', ''),
(2042, 'eng', 'Adherent', 96, 'fonction', ''),
(2043, 'fre', 'Adherent', 96, 'departement', ''),
(2044, 'eng', 'Adherent', 96, 'departement', ''),
(2045, 'fre', 'Adherent', 96, 'faculte', ''),
(2046, 'eng', 'Adherent', 96, 'faculte', ''),
(2047, 'fre', 'Adherent', 96, 'university', ''),
(2048, 'eng', 'Adherent', 96, 'university', ''),
(2049, 'fre', 'Adherent', 96, 'adresse', ''),
(2050, 'eng', 'Adherent', 96, 'adresse', ''),
(2051, 'fre', 'Adherent', 96, 'ville', ''),
(2052, 'eng', 'Adherent', 96, 'ville', ''),
(2053, 'fre', 'Adherent', 96, 'cv', ''),
(2054, 'eng', 'Adherent', 96, 'cv', ''),
(2055, 'fre', 'Adherent', 96, 'publications', ''),
(2056, 'eng', 'Adherent', 96, 'publications', ''),
(2057, 'fre', 'Adherent', 97, 'fonction', ''),
(2058, 'eng', 'Adherent', 97, 'fonction', ''),
(2059, 'fre', 'Adherent', 97, 'departement', ''),
(2060, 'eng', 'Adherent', 97, 'departement', ''),
(2061, 'fre', 'Adherent', 97, 'faculte', ''),
(2062, 'eng', 'Adherent', 97, 'faculte', ''),
(2063, 'fre', 'Adherent', 97, 'university', ''),
(2064, 'eng', 'Adherent', 97, 'university', ''),
(2065, 'fre', 'Adherent', 97, 'adresse', ''),
(2066, 'eng', 'Adherent', 97, 'adresse', ''),
(2067, 'fre', 'Adherent', 97, 'ville', ''),
(2068, 'eng', 'Adherent', 97, 'ville', ''),
(2069, 'fre', 'Adherent', 97, 'cv', ''),
(2070, 'eng', 'Adherent', 97, 'cv', ''),
(2071, 'fre', 'Adherent', 97, 'publications', ''),
(2072, 'eng', 'Adherent', 97, 'publications', ''),
(2073, 'fre', 'Adherent', 98, 'fonction', ''),
(2074, 'eng', 'Adherent', 98, 'fonction', ''),
(2075, 'fre', 'Adherent', 98, 'departement', ''),
(2076, 'eng', 'Adherent', 98, 'departement', ''),
(2077, 'fre', 'Adherent', 98, 'faculte', ''),
(2078, 'eng', 'Adherent', 98, 'faculte', ''),
(2079, 'fre', 'Adherent', 98, 'university', ''),
(2080, 'eng', 'Adherent', 98, 'university', ''),
(2081, 'fre', 'Adherent', 98, 'adresse', ''),
(2082, 'eng', 'Adherent', 98, 'adresse', ''),
(2083, 'fre', 'Adherent', 98, 'ville', ''),
(2084, 'eng', 'Adherent', 98, 'ville', ''),
(2085, 'fre', 'Adherent', 98, 'cv', ''),
(2086, 'eng', 'Adherent', 98, 'cv', ''),
(2087, 'fre', 'Adherent', 98, 'publications', ''),
(2088, 'eng', 'Adherent', 98, 'publications', ''),
(2089, 'fre', 'Adherent', 99, 'fonction', ''),
(2090, 'eng', 'Adherent', 99, 'fonction', ''),
(2091, 'fre', 'Adherent', 99, 'departement', ''),
(2092, 'eng', 'Adherent', 99, 'departement', ''),
(2093, 'fre', 'Adherent', 99, 'faculte', ''),
(2094, 'eng', 'Adherent', 99, 'faculte', ''),
(2095, 'fre', 'Adherent', 99, 'university', ''),
(2096, 'eng', 'Adherent', 99, 'university', ''),
(2097, 'fre', 'Adherent', 99, 'adresse', ''),
(2098, 'eng', 'Adherent', 99, 'adresse', ''),
(2099, 'fre', 'Adherent', 99, 'ville', ''),
(2100, 'eng', 'Adherent', 99, 'ville', ''),
(2101, 'fre', 'Adherent', 99, 'cv', ''),
(2102, 'eng', 'Adherent', 99, 'cv', ''),
(2103, 'fre', 'Adherent', 99, 'publications', ''),
(2104, 'eng', 'Adherent', 99, 'publications', ''),
(2105, 'fre', 'Adherent', 100, 'fonction', ''),
(2106, 'eng', 'Adherent', 100, 'fonction', ''),
(2107, 'fre', 'Adherent', 100, 'departement', ''),
(2108, 'eng', 'Adherent', 100, 'departement', ''),
(2109, 'fre', 'Adherent', 100, 'faculte', ''),
(2110, 'eng', 'Adherent', 100, 'faculte', ''),
(2111, 'fre', 'Adherent', 100, 'university', ''),
(2112, 'eng', 'Adherent', 100, 'university', ''),
(2113, 'fre', 'Adherent', 100, 'adresse', ''),
(2114, 'eng', 'Adherent', 100, 'adresse', ''),
(2115, 'fre', 'Adherent', 100, 'ville', ''),
(2116, 'eng', 'Adherent', 100, 'ville', ''),
(2117, 'fre', 'Adherent', 100, 'cv', ''),
(2118, 'eng', 'Adherent', 100, 'cv', ''),
(2119, 'fre', 'Adherent', 100, 'publications', ''),
(2120, 'eng', 'Adherent', 100, 'publications', ''),
(2121, 'fre', 'Adherent', 101, 'fonction', ''),
(2122, 'eng', 'Adherent', 101, 'fonction', ''),
(2123, 'fre', 'Adherent', 101, 'departement', ''),
(2124, 'eng', 'Adherent', 101, 'departement', ''),
(2125, 'fre', 'Adherent', 101, 'faculte', ''),
(2126, 'eng', 'Adherent', 101, 'faculte', ''),
(2127, 'fre', 'Adherent', 101, 'university', ''),
(2128, 'eng', 'Adherent', 101, 'university', ''),
(2129, 'fre', 'Adherent', 101, 'adresse', ''),
(2130, 'eng', 'Adherent', 101, 'adresse', ''),
(2131, 'fre', 'Adherent', 101, 'ville', ''),
(2132, 'eng', 'Adherent', 101, 'ville', ''),
(2133, 'fre', 'Adherent', 101, 'cv', ''),
(2134, 'eng', 'Adherent', 101, 'cv', ''),
(2135, 'fre', 'Adherent', 101, 'publications', ''),
(2136, 'eng', 'Adherent', 101, 'publications', ''),
(2137, 'fre', 'Adherent', 102, 'fonction', ''),
(2138, 'eng', 'Adherent', 102, 'fonction', ''),
(2139, 'fre', 'Adherent', 102, 'departement', ''),
(2140, 'eng', 'Adherent', 102, 'departement', ''),
(2141, 'fre', 'Adherent', 102, 'faculte', ''),
(2142, 'eng', 'Adherent', 102, 'faculte', ''),
(2143, 'fre', 'Adherent', 102, 'university', ''),
(2144, 'eng', 'Adherent', 102, 'university', ''),
(2145, 'fre', 'Adherent', 102, 'adresse', ''),
(2146, 'eng', 'Adherent', 102, 'adresse', ''),
(2147, 'fre', 'Adherent', 102, 'ville', ''),
(2148, 'eng', 'Adherent', 102, 'ville', ''),
(2149, 'fre', 'Adherent', 102, 'cv', ''),
(2150, 'eng', 'Adherent', 102, 'cv', ''),
(2151, 'fre', 'Adherent', 102, 'publications', ''),
(2152, 'eng', 'Adherent', 102, 'publications', ''),
(2153, 'fre', 'Adherent', 103, 'fonction', ''),
(2154, 'eng', 'Adherent', 103, 'fonction', ''),
(2155, 'fre', 'Adherent', 103, 'departement', ''),
(2156, 'eng', 'Adherent', 103, 'departement', ''),
(2157, 'fre', 'Adherent', 103, 'faculte', ''),
(2158, 'eng', 'Adherent', 103, 'faculte', ''),
(2159, 'fre', 'Adherent', 103, 'university', ''),
(2160, 'eng', 'Adherent', 103, 'university', ''),
(2161, 'fre', 'Adherent', 103, 'adresse', ''),
(2162, 'eng', 'Adherent', 103, 'adresse', ''),
(2163, 'fre', 'Adherent', 103, 'ville', ''),
(2164, 'eng', 'Adherent', 103, 'ville', ''),
(2165, 'fre', 'Adherent', 103, 'cv', ''),
(2166, 'eng', 'Adherent', 103, 'cv', ''),
(2167, 'fre', 'Adherent', 103, 'publications', ''),
(2168, 'eng', 'Adherent', 103, 'publications', ''),
(2169, 'fre', 'Adherent', 104, 'fonction', ''),
(2170, 'eng', 'Adherent', 104, 'fonction', ''),
(2171, 'fre', 'Adherent', 104, 'departement', ''),
(2172, 'eng', 'Adherent', 104, 'departement', ''),
(2173, 'fre', 'Adherent', 104, 'faculte', ''),
(2174, 'eng', 'Adherent', 104, 'faculte', ''),
(2175, 'fre', 'Adherent', 104, 'university', ''),
(2176, 'eng', 'Adherent', 104, 'university', ''),
(2177, 'fre', 'Adherent', 104, 'adresse', ''),
(2178, 'eng', 'Adherent', 104, 'adresse', ''),
(2179, 'fre', 'Adherent', 104, 'ville', ''),
(2180, 'eng', 'Adherent', 104, 'ville', ''),
(2181, 'fre', 'Adherent', 104, 'cv', ''),
(2182, 'eng', 'Adherent', 104, 'cv', ''),
(2183, 'fre', 'Adherent', 104, 'publications', ''),
(2184, 'eng', 'Adherent', 104, 'publications', ''),
(2185, 'fre', 'Adherent', 105, 'fonction', ''),
(2186, 'eng', 'Adherent', 105, 'fonction', ''),
(2187, 'fre', 'Adherent', 105, 'departement', ''),
(2188, 'eng', 'Adherent', 105, 'departement', ''),
(2189, 'fre', 'Adherent', 105, 'faculte', ''),
(2190, 'eng', 'Adherent', 105, 'faculte', ''),
(2191, 'fre', 'Adherent', 105, 'university', ''),
(2192, 'eng', 'Adherent', 105, 'university', ''),
(2193, 'fre', 'Adherent', 105, 'adresse', ''),
(2194, 'eng', 'Adherent', 105, 'adresse', ''),
(2195, 'fre', 'Adherent', 105, 'ville', ''),
(2196, 'eng', 'Adherent', 105, 'ville', ''),
(2197, 'fre', 'Adherent', 105, 'cv', ''),
(2198, 'eng', 'Adherent', 105, 'cv', ''),
(2199, 'fre', 'Adherent', 105, 'publications', ''),
(2200, 'eng', 'Adherent', 105, 'publications', ''),
(2201, 'fre', 'Adherent', 106, 'fonction', ''),
(2202, 'eng', 'Adherent', 106, 'fonction', ''),
(2203, 'fre', 'Adherent', 106, 'departement', ''),
(2204, 'eng', 'Adherent', 106, 'departement', ''),
(2205, 'fre', 'Adherent', 106, 'faculte', ''),
(2206, 'eng', 'Adherent', 106, 'faculte', ''),
(2207, 'fre', 'Adherent', 106, 'university', ''),
(2208, 'eng', 'Adherent', 106, 'university', ''),
(2209, 'fre', 'Adherent', 106, 'adresse', ''),
(2210, 'eng', 'Adherent', 106, 'adresse', ''),
(2211, 'fre', 'Adherent', 106, 'ville', ''),
(2212, 'eng', 'Adherent', 106, 'ville', ''),
(2213, 'fre', 'Adherent', 106, 'cv', ''),
(2214, 'eng', 'Adherent', 106, 'cv', ''),
(2215, 'fre', 'Adherent', 106, 'publications', ''),
(2216, 'eng', 'Adherent', 106, 'publications', ''),
(2217, 'fre', 'Adherent', 107, 'fonction', ''),
(2218, 'eng', 'Adherent', 107, 'fonction', ''),
(2219, 'fre', 'Adherent', 107, 'departement', ''),
(2220, 'eng', 'Adherent', 107, 'departement', ''),
(2221, 'fre', 'Adherent', 107, 'faculte', ''),
(2222, 'eng', 'Adherent', 107, 'faculte', ''),
(2223, 'fre', 'Adherent', 107, 'university', ''),
(2224, 'eng', 'Adherent', 107, 'university', ''),
(2225, 'fre', 'Adherent', 107, 'adresse', ''),
(2226, 'eng', 'Adherent', 107, 'adresse', ''),
(2227, 'fre', 'Adherent', 107, 'ville', ''),
(2228, 'eng', 'Adherent', 107, 'ville', ''),
(2229, 'fre', 'Adherent', 107, 'cv', ''),
(2230, 'eng', 'Adherent', 107, 'cv', ''),
(2231, 'fre', 'Adherent', 107, 'publications', ''),
(2232, 'eng', 'Adherent', 107, 'publications', ''),
(2233, 'fre', 'Adherent', 108, 'fonction', ''),
(2234, 'eng', 'Adherent', 108, 'fonction', ''),
(2235, 'fre', 'Adherent', 108, 'departement', ''),
(2236, 'eng', 'Adherent', 108, 'departement', ''),
(2237, 'fre', 'Adherent', 108, 'faculte', ''),
(2238, 'eng', 'Adherent', 108, 'faculte', '');
INSERT INTO `bai18n` (`id`, `locale`, `model`, `foreign_key`, `field`, `content`) VALUES
(2239, 'fre', 'Adherent', 108, 'university', ''),
(2240, 'eng', 'Adherent', 108, 'university', ''),
(2241, 'fre', 'Adherent', 108, 'adresse', ''),
(2242, 'eng', 'Adherent', 108, 'adresse', ''),
(2243, 'fre', 'Adherent', 108, 'ville', ''),
(2244, 'eng', 'Adherent', 108, 'ville', ''),
(2245, 'fre', 'Adherent', 108, 'cv', ''),
(2246, 'eng', 'Adherent', 108, 'cv', ''),
(2247, 'fre', 'Adherent', 108, 'publications', ''),
(2248, 'eng', 'Adherent', 108, 'publications', ''),
(2249, 'fre', 'Adherent', 109, 'fonction', ''),
(2250, 'eng', 'Adherent', 109, 'fonction', ''),
(2251, 'fre', 'Adherent', 109, 'departement', ''),
(2252, 'eng', 'Adherent', 109, 'departement', ''),
(2253, 'fre', 'Adherent', 109, 'faculte', ''),
(2254, 'eng', 'Adherent', 109, 'faculte', ''),
(2255, 'fre', 'Adherent', 109, 'university', ''),
(2256, 'eng', 'Adherent', 109, 'university', ''),
(2257, 'fre', 'Adherent', 109, 'adresse', ''),
(2258, 'eng', 'Adherent', 109, 'adresse', ''),
(2259, 'fre', 'Adherent', 109, 'ville', ''),
(2260, 'eng', 'Adherent', 109, 'ville', ''),
(2261, 'fre', 'Adherent', 109, 'cv', ''),
(2262, 'eng', 'Adherent', 109, 'cv', ''),
(2263, 'fre', 'Adherent', 109, 'publications', ''),
(2264, 'eng', 'Adherent', 109, 'publications', ''),
(2265, 'fre', 'Adherent', 110, 'fonction', ''),
(2266, 'eng', 'Adherent', 110, 'fonction', ''),
(2267, 'fre', 'Adherent', 110, 'departement', ''),
(2268, 'eng', 'Adherent', 110, 'departement', ''),
(2269, 'fre', 'Adherent', 110, 'faculte', ''),
(2270, 'eng', 'Adherent', 110, 'faculte', ''),
(2271, 'fre', 'Adherent', 110, 'university', ''),
(2272, 'eng', 'Adherent', 110, 'university', ''),
(2273, 'fre', 'Adherent', 110, 'adresse', ''),
(2274, 'eng', 'Adherent', 110, 'adresse', ''),
(2275, 'fre', 'Adherent', 110, 'ville', ''),
(2276, 'eng', 'Adherent', 110, 'ville', ''),
(2277, 'fre', 'Adherent', 110, 'cv', ''),
(2278, 'eng', 'Adherent', 110, 'cv', ''),
(2279, 'fre', 'Adherent', 110, 'publications', ''),
(2280, 'eng', 'Adherent', 110, 'publications', ''),
(2281, 'fre', 'Adherent', 111, 'fonction', ''),
(2282, 'eng', 'Adherent', 111, 'fonction', ''),
(2283, 'fre', 'Adherent', 111, 'departement', ''),
(2284, 'eng', 'Adherent', 111, 'departement', ''),
(2285, 'fre', 'Adherent', 111, 'faculte', ''),
(2286, 'eng', 'Adherent', 111, 'faculte', ''),
(2287, 'fre', 'Adherent', 111, 'university', ''),
(2288, 'eng', 'Adherent', 111, 'university', ''),
(2289, 'fre', 'Adherent', 111, 'adresse', ''),
(2290, 'eng', 'Adherent', 111, 'adresse', ''),
(2291, 'fre', 'Adherent', 111, 'ville', ''),
(2292, 'eng', 'Adherent', 111, 'ville', ''),
(2293, 'fre', 'Adherent', 111, 'cv', ''),
(2294, 'eng', 'Adherent', 111, 'cv', ''),
(2295, 'fre', 'Adherent', 111, 'publications', ''),
(2296, 'eng', 'Adherent', 111, 'publications', ''),
(2297, 'fre', 'Adherent', 112, 'fonction', ''),
(2298, 'eng', 'Adherent', 112, 'fonction', ''),
(2299, 'fre', 'Adherent', 112, 'departement', ''),
(2300, 'eng', 'Adherent', 112, 'departement', ''),
(2301, 'fre', 'Adherent', 112, 'faculte', ''),
(2302, 'eng', 'Adherent', 112, 'faculte', ''),
(2303, 'fre', 'Adherent', 112, 'university', ''),
(2304, 'eng', 'Adherent', 112, 'university', ''),
(2305, 'fre', 'Adherent', 112, 'adresse', ''),
(2306, 'eng', 'Adherent', 112, 'adresse', ''),
(2307, 'fre', 'Adherent', 112, 'ville', ''),
(2308, 'eng', 'Adherent', 112, 'ville', ''),
(2309, 'fre', 'Adherent', 112, 'cv', ''),
(2310, 'eng', 'Adherent', 112, 'cv', ''),
(2311, 'fre', 'Adherent', 112, 'publications', ''),
(2312, 'eng', 'Adherent', 112, 'publications', ''),
(2313, 'fre', 'Adherent', 113, 'fonction', ''),
(2314, 'eng', 'Adherent', 113, 'fonction', ''),
(2315, 'fre', 'Adherent', 113, 'departement', ''),
(2316, 'eng', 'Adherent', 113, 'departement', ''),
(2317, 'fre', 'Adherent', 113, 'faculte', ''),
(2318, 'eng', 'Adherent', 113, 'faculte', ''),
(2319, 'fre', 'Adherent', 113, 'university', ''),
(2320, 'eng', 'Adherent', 113, 'university', ''),
(2321, 'fre', 'Adherent', 113, 'adresse', ''),
(2322, 'eng', 'Adherent', 113, 'adresse', ''),
(2323, 'fre', 'Adherent', 113, 'ville', ''),
(2324, 'eng', 'Adherent', 113, 'ville', ''),
(2325, 'fre', 'Adherent', 113, 'cv', ''),
(2326, 'eng', 'Adherent', 113, 'cv', ''),
(2327, 'fre', 'Adherent', 113, 'publications', ''),
(2328, 'eng', 'Adherent', 113, 'publications', ''),
(2329, 'fre', 'Adherent', 114, 'fonction', ''),
(2330, 'eng', 'Adherent', 114, 'fonction', ''),
(2331, 'fre', 'Adherent', 114, 'departement', ''),
(2332, 'eng', 'Adherent', 114, 'departement', ''),
(2333, 'fre', 'Adherent', 114, 'faculte', ''),
(2334, 'eng', 'Adherent', 114, 'faculte', ''),
(2335, 'fre', 'Adherent', 114, 'university', ''),
(2336, 'eng', 'Adherent', 114, 'university', ''),
(2337, 'fre', 'Adherent', 114, 'adresse', ''),
(2338, 'eng', 'Adherent', 114, 'adresse', ''),
(2339, 'fre', 'Adherent', 114, 'ville', ''),
(2340, 'eng', 'Adherent', 114, 'ville', ''),
(2341, 'fre', 'Adherent', 114, 'cv', ''),
(2342, 'eng', 'Adherent', 114, 'cv', ''),
(2343, 'fre', 'Adherent', 114, 'publications', ''),
(2344, 'eng', 'Adherent', 114, 'publications', ''),
(2345, 'fre', 'Adherent', 115, 'fonction', ''),
(2346, 'eng', 'Adherent', 115, 'fonction', ''),
(2347, 'fre', 'Adherent', 115, 'departement', ''),
(2348, 'eng', 'Adherent', 115, 'departement', ''),
(2349, 'fre', 'Adherent', 115, 'faculte', ''),
(2350, 'eng', 'Adherent', 115, 'faculte', ''),
(2351, 'fre', 'Adherent', 115, 'university', ''),
(2352, 'eng', 'Adherent', 115, 'university', ''),
(2353, 'fre', 'Adherent', 115, 'adresse', ''),
(2354, 'eng', 'Adherent', 115, 'adresse', ''),
(2355, 'fre', 'Adherent', 115, 'ville', ''),
(2356, 'eng', 'Adherent', 115, 'ville', ''),
(2357, 'fre', 'Adherent', 115, 'cv', ''),
(2358, 'eng', 'Adherent', 115, 'cv', ''),
(2359, 'fre', 'Adherent', 115, 'publications', ''),
(2360, 'eng', 'Adherent', 115, 'publications', ''),
(2361, 'fre', 'Pay', 1, 'name', 'aaa'),
(2362, 'eng', 'Pay', 1, 'name', 'aaa'),
(2363, 'fre', 'Pay', 2, 'name', 'rza'),
(2364, 'eng', 'Pay', 2, 'name', 'aaa'),
(2365, 'fre', 'Pay', 3, 'name', 'fze'),
(2366, 'eng', 'Pay', 3, 'name', ''),
(2367, 'fre', 'Pay', 4, 'name', 'sqdllkl'),
(2368, 'eng', 'Pay', 4, 'name', 'aaa'),
(2369, 'fre', 'Catalogue', 1, 'titre', '<p>Gestion industrielle</p>'),
(2370, 'eng', 'Catalogue', 1, 'titre', '<p>Gestion industrielle</p>'),
(2371, 'fre', 'Catalogue', 1, 'name', 'Gestion industrielle'),
(2372, 'eng', 'Catalogue', 1, 'name', 'Gestion industrielle'),
(2373, 'fre', 'Catalogue', 1, 'resume', '<p>Gestion industrielle</p>'),
(2374, 'eng', 'Catalogue', 1, 'resume', '<p>Gestion industrielle</p>'),
(2375, 'fre', 'Catalogue', 1, 'description', '<ul>\r\n<li>Formation OptiMaint Debutant</li>\r\n<li>Formation OptiMaint Expert</li>\r\n<li>Formation OptiMaint Perfectionnement</li>\r\n<li>Analyse des r&eacute;sultats d&rsquo;exploitation de la GMAO</li>\r\n<li>Mise en &oelig;uvre de la maintenance</li>\r\n<li>Tableau de Bord de Maintenance: Elaboration,Suivie et Analyse</li>\r\n<li>La&nbsp; Maintenance Conditionnelle :Vibration,Thermographie Infrarouge,Analyse&nbsp; d\'huile&nbsp;</li>\r\n<li>LES Analyses en Maintenance:AMDEC,ABC,5M &hellip;.</li>\r\n<li>Projet GPAO :R&eacute;ussir la mise en place de la GPAO&nbsp;</li>\r\n<li>Gestion de la Production:Pr&eacute;parationdes Donn&eacute;es Techniques pou GPAO</li>\r\n<li>GPAO : Identification, Choix (D&eacute;monstration pratique)</li>\r\n<li>Planification de la Production :Techniques de Planification&nbsp;</li>\r\n<li>Gestion des Stocks et des Magasins:Codification,Classement,Inventaire,&hellip;</li>\r\n<li>Tableau de Bord de Stock&nbsp; :Elaborationet Analyse&nbsp;</li>\r\n<li>Gestion des Achats et des Approvisionnements&nbsp;</li>\r\n<li>Cahier de Charge et Contrat de Sous -Traitante, de Travaux&nbsp; Neufs et de Maintenance</li>\r\n<li>TPM:Maintenance Productive Totale&nbsp;</li>\r\n<li>Entretien et Gestion du Materiel Roulant: Maintenance et Exploitation</li>\r\n</ul>'),
(2376, 'eng', 'Catalogue', 1, 'description', '<p>Gestion industrielle</p>'),
(2385, 'fre', 'Formation', 2, 'titre', 'azfe'),
(2386, 'eng', 'Formation', 2, 'titre', 'ezf'),
(2387, 'fre', 'Formation', 2, 'name', 'dzfe'),
(2388, 'eng', 'Formation', 2, 'name', 'zef'),
(2389, 'fre', 'Formation', 2, 'resume', 'zfe'),
(2390, 'eng', 'Formation', 2, 'resume', 'gv'),
(2391, 'fre', 'Formation', 2, 'description', 'ez'),
(2392, 'eng', 'Formation', 2, 'description', 'ber'),
(2393, 'fre', 'Partenaire', 10, 'description', ''),
(2394, 'eng', 'Partenaire', 10, 'description', ''),
(2395, 'fre', 'Partenaire', 10, 'name', 'Groupe ONE TECH'),
(2396, 'eng', 'Partenaire', 10, 'name', 'Groupe ONE TECH'),
(2397, 'fre', 'Partenaire', 11, 'description', ''),
(2398, 'eng', 'Partenaire', 11, 'description', ''),
(2399, 'fre', 'Partenaire', 11, 'name', 'Henkel'),
(2400, 'eng', 'Partenaire', 11, 'name', 'Henkel'),
(2401, 'fre', 'Catalogue', 2, 'titre', '<p>Qualite &amp; Audit</p>'),
(2402, 'eng', 'Catalogue', 2, 'titre', ''),
(2403, 'fre', 'Catalogue', 2, 'name', 'Qualite & Audit'),
(2404, 'eng', 'Catalogue', 2, 'name', ''),
(2405, 'fre', 'Catalogue', 2, 'resume', ''),
(2406, 'eng', 'Catalogue', 2, 'resume', ''),
(2407, 'fre', 'Catalogue', 2, 'description', '<ul>\r\n<li>Perfectionnement du Responsable du Mangement de la Qualit&eacute;</li>\r\n<li>&nbsp;Interpr&eacute;tation de la Norme ISO 9001 version 2008 et 2015</li>\r\n<li>Audit Interne du SMQ selon la Norme ISO 9001 version 2008 et 2015</li>\r\n<li>Documenter un syst&egrave;me de management de la&nbsp; qualit&eacute; conform&eacute;ment &agrave; l&rsquo;ISO 9001 version 2000</li>\r\n<li>La Norme ISO 9001: les principaux changements et les &eacute;tapes pour immigrer &agrave; la version 2015</li>\r\n<li>Interpr&eacute;tation de la Norme ISO/TS 16949</li>\r\n<li>&nbsp;Analyse des donn&eacute;es</li>\r\n<li>L&rsquo;am&eacute;lioration continue- le syst&egrave;me Kaisen</li>\r\n<li>Audit Interne selon la Norme ISO/TS 16949</li>\r\n<li>Innovation Lean/TPM</li>\r\n<li>&nbsp;Ecoute et satisfaction des clients</li>\r\n<li>Pratique des Audits Internes : ISO 19011 version 2011</li>\r\n<li>Audit Processus de Fabrication (FIEV)</li>\r\n<li>Formation des chefs de postes &agrave; l&rsquo;application des proc&eacute;dures</li>\r\n<li>M&eacute;thodes de r&eacute;solution des probl&egrave;mes en groupe (MRPG)</li>\r\n<li>Conception et planification de la qualit&eacute;</li>\r\n<li>&nbsp;Le management des processus&nbsp;</li>\r\n<li>Audit Produit</li>\r\n<li>&nbsp;Formation &laquo; Quality manager &raquo;</li>\r\n<li>PDCA</li>\r\n<li>M&eacute;thode 8D</li>\r\n<li>M&eacute;thode de R&eacute;solution de Probl&egrave;mes en Groupe</li>\r\n<li>Outils Qualit&eacute; : 5M (Diagramme cause &agrave; effet), 5P, Digramme de Pareto, Brainstorming, Est/n&rsquo;est pas, vote pond&eacute;r&eacute;, feuilles de relev&eacute;s</li>\r\n<li>QRQC : Quick Response Quality Control</li>\r\n<li>FTA : Factor Tree Analysis&nbsp;</li>\r\n<li>PPAP : Production Part Approval Process (processus d&rsquo;acceptation des &eacute;chantillons initiaux)</li>\r\n<li>Ma&icirc;trise statistique du processus (MSP)</li>\r\n<li>APQP : Planification anticip&eacute; de la Qualit&eacute;</li>\r\n<li>MSP/SPC : Statistical Process Control</li>\r\n<li>Plan de Surveillance</li>\r\n<li>Plan Qualit&eacute;</li>\r\n<li>Auto-Contr&ocirc;le</li>\r\n<li>TRS : Taux de rendement synth&eacute;tique</li>\r\n<li>Tableau de Bord Qualit&eacute;</li>\r\n<li>Kaizen</li>\r\n<li>Les 7 Muda</li>\r\n<li>Approche Processus</li>\r\n<li>Co&ucirc;t de non Qualit&eacute;</li>\r\n<li>Cercle Qualit&eacute;</li>\r\n<li>Management Visuel</li>\r\n<li>Contr&ocirc;le par Echantillonnage</li>\r\n<li>Assurance Qualit&eacute; Fournisseur</li>\r\n<li>Poka-Yok&eacute;</li>\r\n<li>Nettoyage et D&eacute;sinfection :Choix des produits, m&eacute;thodes et moyens</li>\r\n<li>HACCP:Mise en place , v&eacute;rification et audit HACCP</li>\r\n<li>Perfectionnement au Contr&ocirc;le Qualit&eacute;</li>\r\n<li>Traitement et Ma&icirc;trise des Produits non &ndash;conformes et des R&eacute;clamations clients</li>\r\n<li>Mesure et Am&eacute;lioration continue du Syst&egrave;me Qualit&eacute;</li>\r\n<li>La M&eacute;thode des 5 S en Management par la Qualit&eacute;Totale (TQM)</li>\r\n<li>Formation pratique des animateurs de cercles de qualit&eacute; en TQM :</li>\r\n<li>R&eacute;ussir et Favoriser la Production d&rsquo;id&eacute;es par une implication totale des hommes</li>\r\n<li>Comment Implanter des Cercles de Qualit&eacute; en TQM</li>\r\n<li>Gestion des Co&ucirc;ts du non Qualit&eacute;</li>\r\n<li>Pratique de Pr&eacute;sentation d&rsquo;un rapport d&rsquo;audit</li>\r\n<li>La fonction M&eacute;trologie : gestion d\'un parc des &eacute;quipements de mesure,exigences ISO 17025, calcul des incertitudes de mesures.</li>\r\n<li>Formation &agrave; l\'Audit Qualit&eacute; : l\'Audit Interne, l\'Audit des Fournisseurs</li>\r\n<li>Evaluation des co&ucirc;ts du non qualit&eacute;</li>\r\n</ul>'),
(2408, 'eng', 'Catalogue', 2, 'description', ''),
(2409, 'fre', 'Catalogue', 3, 'titre', '<p>Techniques industrielle</p>'),
(2410, 'eng', 'Catalogue', 3, 'titre', ''),
(2411, 'fre', 'Catalogue', 3, 'name', 'Techniques industrielle'),
(2412, 'eng', 'Catalogue', 3, 'name', ''),
(2413, 'fre', 'Catalogue', 3, 'resume', ''),
(2414, 'eng', 'Catalogue', 3, 'resume', ''),
(2415, 'fre', 'Catalogue', 3, 'description', '<ul>\r\n<li>Electricit&eacute;:Diagnostic , installation,protection et cahier des charges</li>\r\n<li>Installation Electrique: conception,choix du mat&eacute;riel et r&eacute;alisation</li>\r\n<li>Electronique:diagnostic des pannes,cartes &eacute;lectroniques</li>\r\n<li>Formation Programmation Microcontr&ocirc;leur</li>\r\n<li>Formation Conception , Fabrication et r&eacute;paration cartes &eacute;lectroniques</li>\r\n<li>Soudure:TIG:MIG:Contr&ocirc;le qualit&eacute;,Soudure des aciers INOX</li>\r\n<li>Automates Programmables:Entretien et Programmation</li>\r\n<li>CAO-DAO (Autocad, Solidworks, catia)</li>\r\n<li>CEM: Compatibilit&eacute; Electromagn&eacute;tique</li>\r\n<li>Proc&eacute;d&eacute;s de Soudage:choix du mat&eacute;riel, optimisation et qualit&eacute;</li>\r\n<li>Gestion Rationnelle d\'une chaufferie de vapeur</li>\r\n<li>Chaud et Froid (diagnostic, dimensionnement,humidit&eacute;,d&eacute;bit)</li>\r\n<li>Techniques de diagnostic des pannes</li>\r\n<li>Pompes:Classification,Dimensionnement ,Choix,Principe de fonctionnement</li>\r\n<li>Chaudi&egrave;res: principe de fonctionnement et maintenance pr&eacute;ventive</li>\r\n<li>Transformateurs et Groupes Electrog&egrave;nes :Fonctionnement et Maintenance</li>\r\n<li>Pneumatiques:Composants,Choix et installation,Calcul,Diagnostic et R&eacute;paration</li>\r\n<li>Hydraulique:Composants,Choix et Installation, Calcul,Diagnostic et R&eacute;paration</li>\r\n<li>Conception des Armoire Electriques</li>\r\n<li>Contr&ocirc;le Qualit&eacute; de l\'assemblage des carte &eacute;lectronique suivant la norme IPC A610</li>\r\n<li>Robotique</li>\r\n<li>D&eacute;veloppement des Cartes Electronique suivants les normes CEM et IPC (Routage et g&eacute;n&eacute;ration des fichiers de fabrication)</li>\r\n<li>M&eacute;canique Analytique ,Technologie M&eacute;canique ,Transmission M&eacute;canique</li>\r\n<li>Transmission Hydraulique</li>\r\n<li>&nbsp;Etude des forces</li>\r\n<li>les compresseurs alternatifs</li>\r\n<li>&nbsp;Les Turbines &agrave;&nbsp; Gaz</li>\r\n<li>&nbsp;Chaudi&egrave;res: principe de fonctionnement et maintenance pr&eacute;ventive</li>\r\n<li>&nbsp;M&eacute;trologie et Tol&eacute;rances m&eacute;caniques</li>\r\n<li>Transmission des moteurs&nbsp;&nbsp;</li>\r\n<li>Transformateurs et Groupes Electrog&egrave;nes : Fonctionnement et Maintenance</li>\r\n</ul>'),
(2416, 'eng', 'Catalogue', 3, 'description', ''),
(2417, 'fre', 'Catalogue', 4, 'titre', '<p>Gestion des ressources humaines</p>'),
(2418, 'eng', 'Catalogue', 4, 'titre', ''),
(2419, 'fre', 'Catalogue', 4, 'name', 'Gestion des ressources humaines'),
(2420, 'eng', 'Catalogue', 4, 'name', ''),
(2421, 'fre', 'Catalogue', 4, 'resume', ''),
(2422, 'eng', 'Catalogue', 4, 'resume', '<p>La D&eacute;marche Qualit&eacute; et la Fonction Formation Les techniques d&rsquo;&eacute;valuation et de recrutement du personnel Le Responsable des Ressources Humaines Gestion pr&eacute;visionnelle des ressources humaines Evaluation du Personnel et D&eacute;termination des Besoins en Formation Principe de la Motivation et son Impact sur le Rendement Evaluation des comp&eacute;tences</p>'),
(2423, 'fre', 'Catalogue', 4, 'description', '<ul>\r\n<li><span>La D&eacute;marche Qualit&eacute; et la Fonction Formation</span></li>\r\n<li><span>Les techniques d&rsquo;&eacute;valuation et de recrutement du personnel</span></li>\r\n<li><span>Le Responsable des Ressources Humaines</span></li>\r\n<li><span>Gestion pr&eacute;visionnelle des ressources humaines</span></li>\r\n<li><span>Evaluation du Personnel et D&eacute;termination des Besoins en Formation</span></li>\r\n<li><span>Principe de la Motivation et son Impact sur le Rendement</span></li>\r\n<li><span>Evaluation des comp&eacute;tences</span></li>\r\n<li><span>Contr&ocirc;le de R&eacute;sultat et Evaluation d\'une Action de Formation</span></li>\r\n<li><span>Plan de Formation:Etablissement et Suivi du Plan de Formation</span></li>\r\n<li><span>Mesure de la Productivit&eacute; du Personnel de Production</span></li>\r\n<li><span>Elaboration des r&eacute;f&eacute;rentiels de comp&eacute;tences&nbsp;</span></li>\r\n<li><span>Le Tableau de Bord de la Fonction Gestion des Ressources Humaines</span></li>\r\n<li><span>Focus RH : recrutement, Entretien d\'&eacute;valuation, Communication RH, Gestion du capital humain</span></li>\r\n<li><span>Gestion du Personnel&nbsp; &nbsp;&nbsp;</span></li>\r\n<li><span>Organisation de la GRH</span></li>\r\n<li><span>La fonction GRH</span></li>\r\n</ul>'),
(2424, 'eng', 'Catalogue', 4, 'description', '<p>La D&eacute;marche Qualit&eacute; et la Fonction Formation Les techniques d&rsquo;&eacute;valuation et de recrutement du personnel Le Responsable des Ressources Humaines Gestion pr&eacute;visionnelle des ressources humaines Evaluation du Personnel et D&eacute;termination des Besoins en Formation Principe de la Motivation et son Impact sur le Rendement Evaluation des comp&eacute;tences</p>'),
(2425, 'fre', 'Catalogue', 5, 'titre', '<p>Developpement personnel</p>'),
(2426, 'eng', 'Catalogue', 5, 'titre', ''),
(2427, 'fre', 'Catalogue', 5, 'name', 'Developpement personnel'),
(2428, 'eng', 'Catalogue', 5, 'name', ''),
(2429, 'fre', 'Catalogue', 5, 'resume', ''),
(2430, 'eng', 'Catalogue', 5, 'resume', ''),
(2431, 'fre', 'Catalogue', 5, 'description', '<ul>\r\n<li>Geste et Posture</li>\r\n<li>Team building</li>\r\n<li>Time Management</li>\r\n<li>Devloppement de Soi</li>\r\n<li>Coaching des Equipes&nbsp;</li>\r\n<li>Gestion des Priorites&nbsp;</li>\r\n<li>Gestion des Conflits</li>\r\n<li>Prise de Parole en Public</li>\r\n<li>Formation des Formateurs&nbsp;&nbsp;</li>\r\n<li>Motivation du personnel</li>\r\n<li>Recrutement et Rotation du Personnel</li>\r\n<li>Conduite et animation des r&eacute;unions</li>\r\n<li>Communication interne</li>\r\n<li>La communication interpersonnelle</li>\r\n<li>Manager Leader &amp; Animateur</li>\r\n<li>L\'art de parler en public</li>\r\n<li>Le travail en &eacute;quipe</li>\r\n<li>Management de Proximit&eacute; &amp; Interactif</li>\r\n<li>Gestion du Temps et Gestion du Stress</li>\r\n<li>Coaching : m&eacute;tiers des ventes et managers des &eacute;quipes</li>\r\n<li>Entretenir un bon climat social dans votre entreprise</li>\r\n<li>Mieux se Conna&icirc;tre pour Agir mieux en Leadership&nbsp;</li>\r\n<li>Savoir-vivre Professionnel</li>\r\n<li>Ø§Ù„Ø·Ø±Ù‚ ÙˆØ§Ù„Ø£Ø³Ø§Ù„ÙŠØ¨ Ø§Ù„Ù…Ù†Ø§Ø³Ø¨Ø© Ù„ØªØ­Ø±ÙŠØ± ÙˆØ¹Ø±Ø¶ Ø§Ù„ÙƒØªØ§Ø¨Ø§Øª Ø§Ù„Ù…Ù‡Ù†ÙŠØ© Ø¨Ø§Ù„Ù„ØºØ© Ø§Ù„Ø¹Ø±Ø¨ÙŠØ©</li>\r\n<li>Commerce International</li>\r\n<li>D&eacute;veloppement de comp&eacute;tences d&rsquo;attach&eacute; commerciale</li>\r\n<li>Perfectionnement aux Outils Technologiques pour Assistantes et Secr&eacute;taires de Direction</li>\r\n<li>Am&eacute;liorer ses Ecrits professionnels: D&eacute;velopper votre communication &eacute;crite</li>\r\n<li>Rendu Petite Monnaie et Qualit&eacute; d\'Accueil</li>\r\n<li>La pr&eacute;vention et le traitement des incivilit&eacute;s et des agressions verbales de la client&egrave;le</li>\r\n</ul>'),
(2432, 'eng', 'Catalogue', 5, 'description', ''),
(2433, 'fre', 'Catalogue', 6, 'titre', '<p>Managemenet des entreprises</p>'),
(2434, 'eng', 'Catalogue', 6, 'titre', ''),
(2435, 'fre', 'Catalogue', 6, 'name', 'Managemenet des entreprises'),
(2436, 'eng', 'Catalogue', 6, 'name', ''),
(2437, 'fre', 'Catalogue', 6, 'resume', ''),
(2438, 'eng', 'Catalogue', 6, 'resume', ''),
(2439, 'fre', 'Catalogue', 6, 'description', '<ul>\r\n<li>La Comptabilit&eacute; Analytique dans&nbsp; le nouveau&nbsp; Syst&egrave;me Comptable</li>\r\n<li>Management et leadership</li>\r\n<li>Management par objectifs</li>\r\n<li>Les Traveaux Comptables de fin d\'ann&eacute;e et D&eacute;termination des R&eacute;sultats Fisscaux</li>\r\n<li>Elaboration du plan strat&eacute;gique de l&rsquo;entreprise (Business plan)</li>\r\n<li>Les valeurs et strat&eacute;gie d&rsquo;entreprise</li>\r\n<li>Le Benchmarking</li>\r\n<li>Contr&ocirc;le de Gestion:Tableau de Bord de l\'Entreprise</li>\r\n<li>Directeur Financier et Pratique de l\'Analyse Financi&egrave;re</li>\r\n<li>Gestion de Tr&eacute;sorerie et Maitrise des N&eacute;gociations Bancaires</li>\r\n<li>Techniques de Vente</li>\r\n<li>Coaching des Equipes&nbsp;</li>\r\n<li>Auto Motivation et D&eacute;veloppement Personnel de l&rsquo;Equipe de Travail&nbsp;</li>\r\n<li>Bilan Social de l\'entreprise&nbsp;</li>\r\n<li>Le tableau de bord, outil de pilotage</li>\r\n<li>Maitriser le Principe de la Gestion Budg&eacute;taire</li>\r\n<li>Le Contentieux des March&eacute;s Publics</li>\r\n<li>Gestion des projets</li>\r\n<li>Risque Management</li>\r\n<li>La Pr&eacute;vention des Impay&eacute;s</li>\r\n<li>Les Cr&eacute;dits Bancaires et les PME</li>\r\n<li>Le management de la qualit&eacute; totale&nbsp; (TQM)</li>\r\n<li>&nbsp;Strat&eacute;gie et objectifs de l&rsquo;entreprise</li>\r\n<li>Gestion de la Polyvalence</li>\r\n<li>Gestion Previsionnelle des Emplois et des Competences</li>\r\n<li>Le Traitement des Objections</li>\r\n<li>Commerce International&nbsp;</li>\r\n<li>Gestion Previsionnelle des Emplois des Competences&nbsp;</li>\r\n</ul>'),
(2440, 'eng', 'Catalogue', 6, 'description', ''),
(2441, 'fre', 'Catalogue', 7, 'titre', '<p>Sante et securite de travail</p>'),
(2442, 'eng', 'Catalogue', 7, 'titre', ''),
(2443, 'fre', 'Catalogue', 7, 'name', 'Sante et securite de travail'),
(2444, 'eng', 'Catalogue', 7, 'name', ''),
(2445, 'fre', 'Catalogue', 7, 'resume', ''),
(2446, 'eng', 'Catalogue', 7, 'resume', ''),
(2447, 'fre', 'Catalogue', 7, 'description', '<ul>\r\n<li>Qualit&eacute;, Hygi&egrave;ne, S&eacute;curit&eacute; &amp; Environnement</li>\r\n<li>Pr&eacute;vention Risques Biologiques / chimiques</li>\r\n<li>Syst&egrave;me de management de la s&eacute;curit&eacute; alimentaire HACCP</li>\r\n<li>Formation des employ&eacute;s sur l&rsquo;hygi&egrave;ne et la s&eacute;curit&eacute;&nbsp; alimentaire</li>\r\n<li>&nbsp;Gestion environnementale profitable (GEP)</li>\r\n<li>Pr&eacute;vention des risques Electriques</li>\r\n<li>Pr&eacute;alables de la sant&eacute; et s&eacute;curit&eacute; dans le travail</li>\r\n<li>Management Laboratoires de Recherche BSL3 (Biosecurity Level 3)</li>\r\n<li>Microbiologie Alimentaire</li>\r\n<li>Management de la S&eacute;curit&eacute; Alimentaire</li>\r\n<li>Sensibilisation des employ&eacute;s sur les exigences des syst&egrave;mes de management de la s&eacute;curit&eacute; et de l&rsquo;environnement</li>\r\n<li>HACCP, IFS, PASA, BRC</li>\r\n<li>Qualit&eacute; de Service &agrave; la Client&egrave;le</li>\r\n<li>ISO 22000, ISO9001, ISO14001, OHSAS 18000</li>\r\n<li>Interpr&eacute;tation des exigences de l&rsquo;ISO 14001</li>\r\n<li>S&eacute;curit&eacute; Incendie (Plan d&rsquo;urgences)</li>\r\n<li>Secourisme Indivisuel</li>\r\n<li>Secourisme en Equipe</li>\r\n<li>Sauveteur Secouriste de Travail</li>\r\n<li>Sauvetage et Secourisme Nautique et A&eacute;ronautique</li>\r\n<li>S&eacute;curit&eacute; aux Milieux&nbsp; Travail</li>\r\n<li>Gestion des Crises</li>\r\n<li>Risque Chimiques</li>\r\n<li>Gestion environnementale profitable (GEP)</li>\r\n<li>Sauvetage en Milieux P&eacute;rilleux</li>\r\n<li>Ergonomie au Poste&nbsp; Travail</li>\r\n<li>Manutention Manuelle</li>\r\n<li>L&rsquo;analyse environnementale et le programme de management environnemental</li>\r\n<li>L&rsquo;audit du syst&egrave;me de management environnemental</li>\r\n</ul>'),
(2448, 'eng', 'Catalogue', 7, 'description', ''),
(2449, 'fre', 'Catalogue', 8, 'titre', '<p>La pharmaceutique</p>'),
(2450, 'eng', 'Catalogue', 8, 'titre', ''),
(2451, 'fre', 'Catalogue', 8, 'name', 'La pharmaceutique'),
(2452, 'eng', 'Catalogue', 8, 'name', ''),
(2453, 'fre', 'Catalogue', 8, 'resume', ''),
(2454, 'eng', 'Catalogue', 8, 'resume', ''),
(2455, 'fre', 'Catalogue', 8, 'description', '<ul>\r\n<li>Chimie Alimentaire</li>\r\n<li>Chimie Pharmaceutique</li>\r\n<li>Chimie Analytique</li>\r\n<li>Industrie Pharmaceutique</li>\r\n<li>Qualit&eacute; &amp; Environnement</li>\r\n<li>Production et Management Industriel</li>\r\n<li>S&eacute;curit&eacute; Laboratoire, M&eacute;trologie, Instrumentation Et Gares</li>\r\n<li>Audit Interne Et Contr&ocirc;le</li>\r\n<li>L\'Assistant(e) de Projet en Recherche Clinique</li>\r\n<li>Management de Projets Pharmaceutiques&nbsp;</li>\r\n<li>Les Finances en Recherche Clinique&nbsp;</li>\r\n<li>Perfectionnement en Recherche Clinique&nbsp;</li>\r\n<li>Manager un Projet d\'Essai Clinique&nbsp;</li>\r\n<li>Audits en Recherche Clinique : Objectifs, M&eacute;thodes et Outils&nbsp;</li>\r\n<li>Actualit&eacute;s R&eacute;glementaires en Recherche Clinique&nbsp;</li>\r\n<li>La Mat&eacute;riovigilance dans les Dispositifs M&eacute;dicaux&nbsp;</li>\r\n<li>Introduction au Marketing Pharmaceutique&nbsp;</li>\r\n</ul>'),
(2456, 'eng', 'Catalogue', 8, 'description', ''),
(2457, 'fre', 'Catalogue', 9, 'titre', '<p>Informatique</p>'),
(2458, 'eng', 'Catalogue', 9, 'titre', ''),
(2459, 'fre', 'Catalogue', 9, 'name', 'Informatique'),
(2460, 'eng', 'Catalogue', 9, 'name', ''),
(2461, 'fre', 'Catalogue', 9, 'resume', ''),
(2462, 'eng', 'Catalogue', 9, 'resume', ''),
(2463, 'fre', 'Catalogue', 9, 'description', '<ul>\r\n<li>&nbsp;Excel Niveau4 : Excel VBA</li>\r\n<li>ASP NET MVC3 D&eacute;veloppement d&rsquo;application WEB</li>\r\n<li>&nbsp;Gestion parc informatique</li>\r\n<li>&nbsp;Access Niveau 4 : Access VBA</li>\r\n<li>&nbsp;Cr&eacute;ation, gestion et maintenance du r&eacute;seau Informatique</li>\r\n<li>&nbsp;Excel Niveau1 : Fondamentaux</li>\r\n<li>Excel Niveau2 : Perfectionnement</li>\r\n<li>&nbsp;Excel Niveau3 : Sp&eacute;cialisations</li>\r\n<li>Powerpoint niveau1 : Fondamentaux</li>\r\n<li>Powerpoint niveau2 : Perfectionnements</li>\r\n<li>&nbsp;Word niveau1 : Fondamentaux</li>\r\n<li>Word niveau2 : Perfectionnements</li>\r\n<li>Word niveau3 : Sp&eacute;cialisation : Rapports, comptes rendus, m&eacute;moires&nbsp;</li>\r\n<li>Word niveau4 : Sp&eacute;cialisation : Formulaires, mailing et e-mailing</li>\r\n<li>Access Niveau 1 : Les bases d&rsquo;Access</li>\r\n<li>Access Niveau 2 : Exploiter une base de donn&eacute;es</li>\r\n<li>&nbsp;Access Niveau 3 : Les Macros</li>\r\n<li>Outlook Niveau1 : Maitriser Outlook</li>\r\n<li>Outlook Niveau2 : Sp&eacute;cial Cadres : Gagner du temps et s&rsquo;organiser avec Outlook</li>\r\n<li>&nbsp;Les Fondamentaux du Web 2.0</li>\r\n<li>Num&eacute;risation et archivage num&eacute;rique</li>\r\n<li>&nbsp;S&eacute;curit&eacute; des applications web</li>\r\n<li>SPSS (Analyse de donn&eacute;es)</li>\r\n<li>&nbsp;Gouvernance de la s&eacute;curit&eacute; informatique (MENACES VULNERABILITES NORMES)</li>\r\n<li>&nbsp;S&eacute;curit&eacute; des Transactions Electroniques</li>\r\n<li>&nbsp;Attaques et Instruisions R&eacute;seaux et Syst&egrave;mes</li>\r\n<li>&nbsp;Mesures outils d&eacute;fense administrateurs</li>\r\n<li>S&eacute;curit&eacute; poste de travail utilisateur</li>\r\n<li>Administration Oracle 11g</li>\r\n<li>&nbsp;S&eacute;curit&eacute; informatique : Les Concepts et les pratiques</li>\r\n<li>Secr&eacute;taire et assistante de direction : perfectionnez votre utilisation de la nouvelle technologie de l&rsquo;information</li>\r\n<li>&nbsp;J2EE (Cycle)</li>\r\n<li>&nbsp;ORACLE (Cycle)</li>\r\n<li>&nbsp;Applications Android</li>\r\n<li>3Ds Max</li>\r\n<li>Illustor</li>\r\n<li>Ergonomie et R&eacute;f&eacute;rencement Web</li>\r\n<li>Macrom&eacute;dia Flash Power Ponit</li>\r\n<li>Photoshop/Quark Express</li>\r\n<li>Adobe Flash</li>\r\n<li>Excel VBA</li>\r\n<li>Alfresco/Omnipage</li>\r\n<li>Formation Programmation Arduino</li>\r\n<li>Ms Project:Gestion des Projets: Principe et cas pratiques avec le logiciel</li>\r\n<li>MS ACCESS:Optimiser et d&eacute;vlopper vos bases de donn&eacute;es avec MS ACCESS</li>\r\n</ul>'),
(2464, 'eng', 'Catalogue', 9, 'description', ''),
(2465, 'fre', 'Catalogue', 10, 'titre', '<p>Management de la qualite pour le secteur automobile</p>'),
(2466, 'eng', 'Catalogue', 10, 'titre', ''),
(2467, 'fre', 'Catalogue', 10, 'name', 'Management de la qualite pour le secteur automobile'),
(2468, 'eng', 'Catalogue', 10, 'name', ''),
(2469, 'fre', 'Catalogue', 10, 'resume', ''),
(2470, 'eng', 'Catalogue', 10, 'resume', ''),
(2471, 'fre', 'Catalogue', 10, 'description', '<ul>\r\n<li>Formation &laquo; Auditeur qualit&eacute; interne ISO/TS 16949 :2002 &raquo;</li>\r\n<li>Formation &laquo; Quality manager ISO/TS 16949 :2002 &raquo;</li>\r\n<li>Analyse des modes de d&eacute;faillance de leurs effets et de leur criticit&eacute; &laquo; AMDEC Produit/Processus &raquo;</li>\r\n<li>Gestion des projets d&rsquo;am&eacute;lioration</li>\r\n<li>Ma&icirc;trise statistique des processus (MSP)</li>\r\n<li>Ma&icirc;trise des syst&egrave;mes de mesurage (MSA)</li>\r\n<li>Planification avanc&eacute;e de la qualit&eacute; (APQP)</li>\r\n<li>La d&eacute;marche &laquo; Six Sigma &raquo;</li>\r\n<li>Evaluation du syst&egrave;me ISO/TS 16949 :2002</li>\r\n<li>Le d&eacute;ploiement de la fonction qualit&eacute; (QFD)</li>\r\n<li>Am&eacute;lioration continue, la d&eacute;marche Kaizen</li>\r\n<li>Process FMEA</li>\r\n<li>Lean manufcaturing</li>\r\n</ul>'),
(2472, 'eng', 'Catalogue', 10, 'description', ''),
(2481, 'fre', 'Partenaire', 12, 'description', ''),
(2482, 'eng', 'Partenaire', 12, 'description', ''),
(2483, 'fre', 'Partenaire', 12, 'name', 'BONDIN'),
(2484, 'eng', 'Partenaire', 12, 'name', ''),
(2485, 'fre', 'Partenaire', 13, 'description', ''),
(2486, 'eng', 'Partenaire', 13, 'description', ''),
(2487, 'fre', 'Partenaire', 13, 'name', 'CNP'),
(2488, 'eng', 'Partenaire', 13, 'name', 'CNP'),
(2489, 'fre', 'Partenaire', 14, 'description', ''),
(2490, 'eng', 'Partenaire', 14, 'description', ''),
(2491, 'fre', 'Partenaire', 14, 'name', 'DAR ESSAYDALI'),
(2492, 'eng', 'Partenaire', 14, 'name', 'dar-essaydali'),
(2493, 'fre', 'Partenaire', 15, 'description', ''),
(2494, 'eng', 'Partenaire', 15, 'description', ''),
(2495, 'fre', 'Partenaire', 15, 'name', 'DIARI'),
(2496, 'eng', 'Partenaire', 15, 'name', ''),
(2497, 'fre', 'Partenaire', 16, 'description', ''),
(2498, 'eng', 'Partenaire', 16, 'description', ''),
(2499, 'fre', 'Partenaire', 16, 'name', 'R\'INDUSTRIE'),
(2500, 'eng', 'Partenaire', 16, 'name', ''),
(2501, 'fre', 'Partenaire', 17, 'description', ''),
(2502, 'eng', 'Partenaire', 17, 'description', ''),
(2503, 'fre', 'Partenaire', 17, 'name', 'ETEP'),
(2504, 'eng', 'Partenaire', 17, 'name', 'ETEP'),
(2505, 'fre', 'Partenaire', 18, 'description', ''),
(2506, 'eng', 'Partenaire', 18, 'description', ''),
(2507, 'fre', 'Partenaire', 18, 'name', 'ISET'),
(2508, 'eng', 'Partenaire', 18, 'name', ''),
(2509, 'fre', 'Partenaire', 19, 'description', ''),
(2510, 'eng', 'Partenaire', 19, 'description', ''),
(2511, 'fre', 'Partenaire', 19, 'name', 'ISGI'),
(2512, 'eng', 'Partenaire', 19, 'name', ''),
(2513, 'fre', 'Partenaire', 20, 'description', ''),
(2514, 'eng', 'Partenaire', 20, 'description', ''),
(2515, 'fre', 'Partenaire', 20, 'name', 'KILANI'),
(2516, 'eng', 'Partenaire', 20, 'name', ''),
(2517, 'fre', 'Partenaire', 21, 'description', ''),
(2518, 'eng', 'Partenaire', 21, 'description', ''),
(2519, 'fre', 'Partenaire', 21, 'name', 'OOREDOO'),
(2520, 'eng', 'Partenaire', 21, 'name', ''),
(2521, 'fre', 'Partenaire', 22, 'description', ''),
(2522, 'eng', 'Partenaire', 22, 'description', ''),
(2523, 'fre', 'Partenaire', 22, 'name', 'SAGEMCOM'),
(2524, 'eng', 'Partenaire', 22, 'name', ''),
(2525, 'fre', 'Partenaire', 23, 'description', ''),
(2526, 'eng', 'Partenaire', 23, 'description', ''),
(2527, 'fre', 'Partenaire', 23, 'name', 'SANIMED'),
(2528, 'eng', 'Partenaire', 23, 'name', ''),
(2529, 'fre', 'Partenaire', 24, 'description', ''),
(2530, 'eng', 'Partenaire', 24, 'description', ''),
(2531, 'fre', 'Partenaire', 24, 'name', 'SICAME'),
(2532, 'eng', 'Partenaire', 24, 'name', ''),
(2533, 'fre', 'Partenaire', 25, 'description', ''),
(2534, 'eng', 'Partenaire', 25, 'description', ''),
(2535, 'fre', 'Partenaire', 25, 'name', 'SITEP'),
(2536, 'eng', 'Partenaire', 25, 'name', ''),
(2537, 'fre', 'Partenaire', 26, 'description', ''),
(2538, 'eng', 'Partenaire', 26, 'description', ''),
(2539, 'fre', 'Partenaire', 26, 'name', 'SLAMA'),
(2540, 'eng', 'Partenaire', 26, 'name', ''),
(2541, 'fre', 'Partenaire', 27, 'description', ''),
(2542, 'eng', 'Partenaire', 27, 'description', ''),
(2543, 'fre', 'Partenaire', 27, 'name', 'SOFAP'),
(2544, 'eng', 'Partenaire', 27, 'name', ''),
(2545, 'fre', 'Partenaire', 28, 'description', ''),
(2546, 'eng', 'Partenaire', 28, 'description', ''),
(2547, 'fre', 'Partenaire', 28, 'name', 'SOTUFAB'),
(2548, 'eng', 'Partenaire', 28, 'name', ''),
(2549, 'fre', 'Partenaire', 29, 'description', ''),
(2550, 'eng', 'Partenaire', 29, 'description', ''),
(2551, 'fre', 'Partenaire', 29, 'name', 'STEELFLASH'),
(2552, 'eng', 'Partenaire', 29, 'name', ''),
(2553, 'fre', 'Partenaire', 30, 'description', ''),
(2554, 'eng', 'Partenaire', 30, 'description', ''),
(2555, 'fre', 'Partenaire', 30, 'name', 'TEJRA'),
(2556, 'eng', 'Partenaire', 30, 'name', ''),
(2557, 'fre', 'Partenaire', 31, 'description', ''),
(2558, 'eng', 'Partenaire', 31, 'description', ''),
(2559, 'fre', 'Partenaire', 31, 'name', 'TIS'),
(2560, 'eng', 'Partenaire', 31, 'name', ''),
(2561, 'fre', 'Partenaire', 32, 'description', ''),
(2562, 'eng', 'Partenaire', 32, 'description', ''),
(2563, 'fre', 'Partenaire', 32, 'name', 'TRAPSA'),
(2564, 'eng', 'Partenaire', 32, 'name', ''),
(2565, 'fre', 'Partenaire', 33, 'description', ''),
(2566, 'eng', 'Partenaire', 33, 'description', ''),
(2567, 'fre', 'Partenaire', 33, 'name', 'TUS'),
(2568, 'eng', 'Partenaire', 33, 'name', ''),
(2569, 'fre', 'Partenaire', 34, 'description', ''),
(2570, 'eng', 'Partenaire', 34, 'description', ''),
(2571, 'fre', 'Partenaire', 34, 'name', 'UBS'),
(2572, 'eng', 'Partenaire', 34, 'name', ''),
(2573, 'fre', 'Partenaire', 35, 'description', ''),
(2574, 'eng', 'Partenaire', 35, 'description', ''),
(2575, 'fre', 'Partenaire', 35, 'name', 'ZODIAC'),
(2576, 'eng', 'Partenaire', 35, 'name', ''),
(2577, 'fre', 'Menu', 15, 'name', 'Formations'),
(2578, 'eng', 'Menu', 15, 'name', ''),
(2579, 'fre', 'Formation', 3, 'titre', 'Formation Excel'),
(2580, 'eng', 'Formation', 3, 'titre', ''),
(2581, 'fre', 'Formation', 3, 'name', '<p>Excel Niveau2: Perfectionnement</p>'),
(2582, 'eng', 'Formation', 3, 'name', ''),
(2583, 'fre', 'Formation', 3, 'resume', '<p><em>Excel Niveau2&nbsp;</em></p>'),
(2584, 'eng', 'Formation', 3, 'resume', ''),
(2585, 'fre', 'Formation', 3, 'description', '<ul>\r\n<li>Formation agr&eacute;e par l\'Etat N 02-043-13</li>\r\n<li>Facilit&eacute; de paiement</li>\r\n<li>Des fournitures et des documents riches</li>\r\n<li>Groupe R&eacute;duit = 10 personnes Max</li>\r\n</ul>'),
(2586, 'eng', 'Formation', 3, 'description', '<ul>\r\n<li>Formation agr&eacute;e par l\'Etat N 02-043-13</li>\r\n<li>Facilit&eacute; de paiement</li>\r\n<li>Des fournitures et des documents riches</li>\r\n<li>Groupe R&eacute;duit = 10 personnes Max</li>\r\n</ul>'),
(2587, 'fre', 'Formation', 4, 'titre', 'Entretien et inspection des machines tournantes'),
(2588, 'eng', 'Formation', 4, 'titre', ''),
(2589, 'fre', 'Formation', 4, 'name', '<p>Entretien et inspection des machines tournantes</p>'),
(2590, 'eng', 'Formation', 4, 'name', ''),
(2591, 'fre', 'Formation', 4, 'resume', '<p>Entretien et inspection des machines tournantes</p>'),
(2592, 'eng', 'Formation', 4, 'resume', ''),
(2593, 'fre', 'Formation', 4, 'description', '<p align=\"center\">&nbsp;</p>\r\n<ul>\r\n<li>Formation agr&eacute;e par l\'Etat N 02-043-13</li>\r\n<li>Facilit&eacute; de paiement</li>\r\n<li>Des fournitures et des documents riches</li>\r\n<li>Groupe R&eacute;duit = 10 personnes Max</li>\r\n</ul>'),
(2594, 'eng', 'Formation', 4, 'description', ''),
(2595, 'fre', 'Formation', 5, 'titre', 'Achat Transit et douane'),
(2596, 'eng', 'Formation', 5, 'titre', ''),
(2597, 'fre', 'Formation', 5, 'name', '<p>Achat Transit et douane</p>'),
(2598, 'eng', 'Formation', 5, 'name', ''),
(2599, 'fre', 'Formation', 5, 'resume', '<p>Achat Transit et douane</p>'),
(2600, 'eng', 'Formation', 5, 'resume', ''),
(2601, 'fre', 'Formation', 5, 'description', '<ul>\r\n<li>Formation agr&eacute;e par l\'Etat N 02-043-13</li>\r\n<li>Facilit&eacute; de paiement</li>\r\n<li>Des fournitures et des documents riches</li>\r\n<li>Groupe R&eacute;duit = 10 personnes Max</li>\r\n<li>Dur&eacute;e 3 jours</li>\r\n</ul>'),
(2602, 'eng', 'Formation', 5, 'description', ''),
(2603, 'fra', 'Demande', 1, 'message', 'AD'),
(2604, 'fra', 'Demande', 1, 'objet', ''),
(2605, 'fra', 'Demande', 2, 'message', 'xdcfvgbh'),
(2606, 'fra', 'Demande', 2, 'objet', ''),
(2607, 'fre', 'Demande', 2, 'objet', ''),
(2608, 'eng', 'Demande', 2, 'objet', ''),
(2609, 'fre', 'Demande', 2, 'message', ''),
(2610, 'eng', 'Demande', 2, 'message', ''),
(2611, 'fra', 'Demande', 3, 'objet', 'qx'),
(2612, 'fra', 'Demande', 3, 'message', 'xqs'),
(2613, 'fra', 'Demande', 3, 'societe', 'smdi'),
(2614, 'fra', 'Demande', 3, 'autre', 'Java JEE'),
(2615, 'fre', 'Menu', 16, 'name', 'Partenaires'),
(2616, 'eng', 'Menu', 16, 'name', ''),
(2617, 'fre', 'Reference', 1, 'name', 'ACOSERV'),
(2618, 'eng', 'Reference', 1, 'name', ''),
(2619, 'fre', 'Reference', 1, 'description', ''),
(2620, 'eng', 'Reference', 1, 'description', ''),
(2621, 'fre', 'Reference', 2, 'name', 'Groupe ONE TECH'),
(2622, 'eng', 'Reference', 2, 'name', ''),
(2623, 'fre', 'Reference', 2, 'description', ''),
(2624, 'eng', 'Reference', 2, 'description', ''),
(2625, 'fre', 'Reference', 3, 'name', 'Cafe ben yedder '),
(2626, 'eng', 'Reference', 3, 'name', ''),
(2627, 'fre', 'Reference', 3, 'description', ''),
(2628, 'eng', 'Reference', 3, 'description', ''),
(2629, 'fre', 'Reference', 4, 'name', 'Bonna beton '),
(2630, 'eng', 'Reference', 4, 'name', ''),
(2631, 'fre', 'Reference', 4, 'description', ''),
(2632, 'eng', 'Reference', 4, 'description', ''),
(2633, 'fre', 'Menu', 17, 'name', 'Sous catalogues'),
(2634, 'eng', 'Menu', 17, 'name', ''),
(2635, 'fre', 'Souscatalogue', 1, 'titre', ''),
(2636, 'eng', 'Souscatalogue', 1, 'titre', ''),
(2637, 'fre', 'Souscatalogue', 1, 'name', 'Gestion'),
(2638, 'eng', 'Souscatalogue', 1, 'name', 'gelmlml'),
(2639, 'fre', 'Souscatalogue', 1, 'resume', ''),
(2640, 'eng', 'Souscatalogue', 1, 'resume', ''),
(2641, 'fre', 'Souscatalogue', 1, 'description', ''),
(2642, 'eng', 'Souscatalogue', 1, 'description', '');

-- --------------------------------------------------------

--
-- Structure de la table `ba_activites`
--

CREATE TABLE `ba_activites` (
  `id` int(11) NOT NULL,
  `titre` varchar(250) DEFAULT NULL,
  `description` text,
  `resume` text,
  `image` varchar(200) NOT NULL,
  `etat` enum('Y','N') NOT NULL,
  `datea` date NOT NULL,
  `created` datetime NOT NULL,
  `usercreated` int(11) NOT NULL,
  `modify` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `usermodify` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `ba_activites`
--

INSERT INTO `ba_activites` (`id`, `titre`, `description`, `resume`, `image`, `etat`, `datea`, `created`, `usercreated`, `modify`, `usermodify`) VALUES
(2, 'dfgsdgdsfg', '<p>sdfgsdf</p>', '<p>kljlk</p>', 'commenter1.jpg', 'N', '1900-12-22', '2018-09-21 22:22:28', 10, '2018-09-21 21:22:28', 0),
(3, 'vwxcv', 'wxcv', 'wxvccvx', 'cause2-2.jpg', 'Y', '0000-00-00', '2018-09-21 22:23:00', 10, '2018-09-21 21:23:00', 0),
(4, 'vwxcv', 'wxcv', 'wxvccvx', 'cause2-3.jpg', 'Y', '0000-00-00', '2018-09-21 22:23:02', 10, '2018-09-21 21:23:02', 0),
(5, 'sfdgdg', 'sd', 'jhhj', 'cause2-4.jpg', 'Y', '0000-00-00', '2018-09-21 22:23:40', 10, '2018-09-21 21:23:40', 0),
(6, 'wxcv', 'mllm', '', 'dc1.jpg', 'Y', '0000-00-00', '2018-09-21 22:42:36', 10, '2018-09-21 21:42:36', 0),
(7, 'vwxcv', '<p>xcvb</p>', '<p>xcvbcxv</p>', 'cause2-6.jpg', 'N', '2018-09-14', '2018-09-21 23:29:57', 10, '2018-09-21 22:29:57', 0);

-- --------------------------------------------------------

--
-- Structure de la table `ba_actualites`
--

CREATE TABLE `ba_actualites` (
  `id` int(11) NOT NULL,
  `description` text NOT NULL,
  `resume` text NOT NULL,
  `name` varchar(150) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `etat` enum('Y','N') NOT NULL,
  `orderm` int(11) NOT NULL,
  `position` int(11) NOT NULL,
  `datea` date NOT NULL,
  `type` enum('A','E') NOT NULL DEFAULT 'A',
  `photo` varchar(300) NOT NULL,
  `url` varchar(50) NOT NULL,
  `created` datetime NOT NULL,
  `usercreated` int(11) NOT NULL,
  `modify` datetime NOT NULL,
  `usermodify` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `ba_actualites`
--

INSERT INTO `ba_actualites` (`id`, `description`, `resume`, `name`, `menu_id`, `etat`, `orderm`, `position`, `datea`, `type`, `photo`, `url`, `created`, `usercreated`, `modify`, `usermodify`) VALUES
(1, '<p><a href=\"https://tors2015.sciencesconf.org/?lang=fr\">https://tors2015.sciencesconf.org/?lang=fr</a></p>', '<p><a href=\"https://tors2015.sciencesconf.org/?lang=fr\">https://tors2015.sciencesconf.org/?lang=fr</a></p>', 'sciences conference 2015', 11, 'Y', 0, 0, '2015-02-02', 'A', '1.jpg', '', '2018-10-30 14:58:37', 10, '2019-03-14 15:16:06', 10),
(2, '<p><a href=\"https://tors2016.sciencesconf.org/\">https://tors2016.sciencesconf.org/</a></p>', '<p><a href=\"https://tors2016.sciencesconf.org/\">https://tors2016.sciencesconf.org/</a></p>', 'sciences conference 2016', 11, 'Y', 0, 0, '2016-03-02', 'A', '33.jpg', '', '2018-10-30 15:01:47', 10, '2019-03-14 15:17:04', 10),
(3, '<p><a href=\"https://tors2018.sciencesconf.org/\" target=\"_blank\">https://tors2018.sciencesconf.org/</a></p>', '<p><a href=\"https://tors2018.sciencesconf.org/\" target=\"_blank\">https://tors2018.sciencesconf.org/</a></p>', 'sciences confirence 2018', 11, 'Y', 0, 0, '2018-02-28', 'A', 'b1.jpg', '', '2018-10-30 15:05:18', 10, '2019-03-14 15:17:20', 10);

-- --------------------------------------------------------

--
-- Structure de la table `ba_adherents`
--

CREATE TABLE `ba_adherents` (
  `id` int(11) NOT NULL,
  `titre` varchar(50) NOT NULL,
  `nom` varchar(200) NOT NULL,
  `prenom` varchar(200) NOT NULL,
  `fonction` varchar(200) NOT NULL,
  `groupe_l` int(11) NOT NULL,
  `grade` int(11) NOT NULL,
  `departement` varchar(250) NOT NULL,
  `faculte` varchar(250) NOT NULL,
  `university` varchar(250) NOT NULL,
  `adresse` text NOT NULL,
  `code_postal` int(11) NOT NULL,
  `pays` int(11) NOT NULL,
  `ville` varchar(200) NOT NULL,
  `tel` varchar(30) NOT NULL,
  `fax` varchar(30) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `mpar` varchar(200) NOT NULL,
  `cv` text NOT NULL,
  `etat` enum('A','V','C','D') NOT NULL DEFAULT 'A',
  `ran` varchar(200) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `publications` text NOT NULL,
  `created` datetime NOT NULL,
  `usercreated` int(11) NOT NULL,
  `modify` datetime NOT NULL,
  `usermodify` int(11) NOT NULL,
  `interest` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `ba_adherents`
--

INSERT INTO `ba_adherents` (`id`, `titre`, `nom`, `prenom`, `fonction`, `groupe_l`, `grade`, `departement`, `faculte`, `university`, `adresse`, `code_postal`, `pays`, `ville`, `tel`, `fax`, `email`, `password`, `mpar`, `cv`, `etat`, `ran`, `photo`, `publications`, `created`, `usercreated`, `modify`, `usermodify`, `interest`) VALUES
(1, '', 'LOUKIL', 'Taicir ', '', 0, 0, '', '', '', '', 0, 0, '', '', '', 'loukilt@gmail.com', '', '', '', 'C', '', 'Taicir_Loukil.jpg', '', '2018-10-30 12:43:58', 10, '0000-00-00 00:00:00', 0, ''),
(2, '', 'CHEBIL', 'Khalil ', '', 0, 0, '', '', '', '', 0, 0, '', '', '', 'chebilkhalil@gmail.com', '', '', '', 'C', '', 'chebil_khalil.jpg', '', '2018-10-30 12:49:56', 10, '2018-10-30 12:50:14', 10, ''),
(3, '', 'DHOUIB', 'Diala', '', 0, 0, '', '', '', '', 0, 0, '', '', '', 'dialadhouib@yahoo.fr', '', '', '', 'C', '', 'diala_dhouib.jpg', '', '2018-10-30 12:52:30', 10, '2018-10-30 12:52:58', 10, ''),
(4, '', 'KOUBAA', 'Mayssa', '', 0, 0, '', '', '', '', 0, 0, '', '', '', 'koubaa.mayssa@yahoo.fr', '', '', '', 'C', '', 'koubaa_mayssa.jpg', '', '2018-10-30 12:54:51', 10, '0000-00-00 00:00:00', 0, ''),
(5, '', 'AMMAR', 'Mohamed Haykal', '', 0, 0, '', '', '', '', 0, 0, '', '', '', 'medhaykal@gmail.com', '', '', '', 'C', '', 'haykal_ammar.jpg', '', '2018-10-30 12:55:49', 10, '0000-00-00 00:00:00', 0, ''),
(6, '', 'Mezghani', 'Salma', '', 0, 0, '', '', '', '', 0, 0, '', '', '', 'salma_mezghani@hotmail.com', '', '', '', 'C', '', 'salma_mezghani-0.jpg', '', '2018-10-30 12:56:53', 10, '2018-10-31 09:26:49', 10, ''),
(7, '', 'Masmoudi', 'Youssef ', '', 0, 0, '', '', '', '', 0, 0, '', '', '', '', '', '', '', 'C', '', '', '', '2018-10-31 11:05:51', 10, '0000-00-00 00:00:00', 0, ''),
(8, '', 'dhouib', 'souhail', '', 0, 0, '', '', '', '', 0, 0, '', '', '', '', '', '', '', 'C', '', '', '', '2018-10-31 11:06:25', 10, '0000-00-00 00:00:00', 0, ''),
(9, '', 'elkosantini', 'sabeur', '', 0, 0, '', '', '', '', 0, 0, '', '', '', '', '', '', '', 'C', '', '', '', '2018-10-31 11:07:07', 10, '0000-00-00 00:00:00', 0, ''),
(10, '', 'dhouib', 'diala', '', 0, 0, '', '', '', '', 0, 0, '', '', '', '', '', '', '', 'C', '', '', '', '2018-10-31 11:07:51', 10, '0000-00-00 00:00:00', 0, ''),
(11, '', 'khemakhem', 'mahdi', '', 0, 0, '', '', '', '', 0, 0, '', '', '', '', '', '', '', 'C', '', '', '', '2018-10-31 11:08:25', 10, '0000-00-00 00:00:00', 0, ''),
(12, '', 'boujelben', 'mohamed ayman', '', 0, 0, '', '', '', '', 0, 0, '', '', '', '', '', '', '', 'C', '', '', '', '2018-10-31 11:09:09', 10, '0000-00-00 00:00:00', 0, ''),
(13, '', 'besbes', 'walid', '', 0, 0, '', '', '', '', 0, 0, '', '', '', '', '', '', '', 'C', '', '', '', '2018-10-31 11:09:41', 10, '0000-00-00 00:00:00', 0, ''),
(14, '', 'abid', 'chafik', '', 0, 0, '', '', '', '', 0, 0, '', '', '', '', '', '', '', 'C', '', '', '', '2018-10-31 11:10:08', 10, '0000-00-00 00:00:00', 0, ''),
(15, '', 'mouelhi', 'wiem', '', 0, 0, '', '', '', '', 0, 0, '', '', '', '', '', '', '', 'C', '', '', '', '2018-10-31 11:10:38', 10, '0000-00-00 00:00:00', 0, ''),
(16, '', 'elloumi', 'sonda', '', 0, 0, '', '', '', '', 0, 0, '', '', '', '', '', '', '', 'C', '', '', '', '2018-10-31 11:11:08', 10, '0000-00-00 00:00:00', 0, ''),
(17, '', 'chabchoub', 'habib', '', 0, 0, '', '', '', '', 0, 0, '', '', '', '', '', '', '', 'C', '', '', '', '2018-10-31 11:11:40', 10, '0000-00-00 00:00:00', 0, ''),
(20, '', 'Abdellatif', 'Houssem ', '', 0, 0, '', '', '', '', 0, 0, '', '', '', '', '', '', '', 'C', '', '', '', '2018-10-31 13:03:19', 10, '0000-00-00 00:00:00', 0, ''),
(21, '', 'Ayadi', 'Manel', '', 0, 0, '', '', '', '', 0, 0, '', '', '', '', '', '', '', 'C', '', '', '', '2018-10-31 13:03:24', 10, '2018-10-31 13:05:39', 10, ''),
(22, '', 'Baazaoui', 'Mariem', '', 0, 0, '', '', '', '', 0, 0, '', '', '', '', '', '', '', 'C', '', '', '', '2018-10-31 13:06:43', 10, '0000-00-00 00:00:00', 0, ''),
(23, '', 'Beji', 'Noura', '', 0, 0, '', '', '', '', 0, 0, '', '', '', '', '', '', '', 'C', '', '', '', '2018-10-31 13:07:22', 10, '0000-00-00 00:00:00', 0, ''),
(24, '', 'Belkhamsa', 'Manel', '', 0, 0, '', '', '', '', 0, 0, '', '', '', '', '', '', '', 'C', '', '', '', '2018-10-31 13:07:56', 10, '0000-00-00 00:00:00', 0, ''),
(25, '', 'Ben Salem', 'Mariem', '', 0, 0, '', '', '', '', 0, 0, '', '', '', '', '', '', '', 'C', '', '', '', '2018-10-31 13:08:26', 10, '0000-00-00 00:00:00', 0, ''),
(26, '', 'Bouaziz', 'Abir', '', 0, 0, '', '', '', '', 0, 0, '', '', '', '', '', '', '', 'C', '', '', '', '2018-10-31 13:09:23', 10, '0000-00-00 00:00:00', 0, ''),
(27, '', 'Chtourou', 'Sameh', '', 0, 0, '', '', '', '', 0, 0, '', '', '', '', '', '', '', 'C', '', '', '', '2018-10-31 13:09:57', 10, '0000-00-00 00:00:00', 0, ''),
(28, '', 'Derbel', 'Mouna', '', 0, 0, '', '', '', '', 0, 0, '', '', '', '', '', '', '', 'C', '', '', '', '2018-10-31 13:10:29', 10, '0000-00-00 00:00:00', 0, ''),
(29, '', 'Dhouib', 'Emna', '', 0, 0, '', '', '', '', 0, 0, '', '', '', '', '', '', '', 'C', '', '', '', '2018-10-31 13:10:58', 10, '0000-00-00 00:00:00', 0, ''),
(30, '', 'Fakhfakh', 'Wafa', '', 0, 0, '', '', '', '', 0, 0, '', '', '', '', '', '', '', 'C', '', '', '', '2018-10-31 13:12:15', 10, '0000-00-00 00:00:00', 0, ''),
(31, '', 'Frikha Moalla', 'Hela', '', 0, 0, '', '', '', '', 0, 0, '', '', '', '', '', '', '', 'C', '', '', '', '2018-10-31 13:12:44', 10, '0000-00-00 00:00:00', 0, ''),
(32, '', 'Gargouri', 'Hana', '', 0, 0, '', '', '', '', 0, 0, '', '', '', '', '', '', '', 'C', '', '', '', '2018-10-31 13:14:19', 10, '0000-00-00 00:00:00', 0, ''),
(33, '', 'Gargouri Mnif', 'Mouna', '', 0, 0, '', '', '', '', 0, 0, '', '', '', '', '', '', '', 'C', '', '', '', '2018-10-31 13:15:16', 10, '0000-00-00 00:00:00', 0, ''),
(34, '', 'Guariani Moalla', 'Nesrine', '', 0, 0, '', '', '', '', 0, 0, '', '', '', '', '', '', '', 'C', '', '', '', '2018-10-31 13:15:45', 10, '0000-00-00 00:00:00', 0, ''),
(35, '', 'Halouani', 'Nesrin', '', 0, 0, '', '', '', '', 0, 0, '', '', '', '', '', '', '', 'C', '', '', '', '2018-10-31 13:16:15', 10, '0000-00-00 00:00:00', 0, ''),
(36, '', 'Hamdi', 'Faiza', '', 0, 0, '', '', '', '', 0, 0, '', '', '', '', '', '', '', 'C', '', '', '', '2018-10-31 13:16:41', 10, '0000-00-00 00:00:00', 0, ''),
(37, '', 'Hasni', 'Samia', '', 0, 0, '', '', '', '', 0, 0, '', '', '', '', '', '', '', 'C', '', '', '', '2018-10-31 13:18:01', 10, '0000-00-00 00:00:00', 0, ''),
(38, '', 'Jridi', 'Ichraf', '', 0, 0, '', '', '', '', 0, 0, '', '', '', '', '', '', '', 'C', '', '', '', '2018-10-31 13:18:47', 10, '0000-00-00 00:00:00', 0, ''),
(39, '', 'Kallel', 'Farah', '', 0, 0, '', '', '', '', 0, 0, '', '', '', '', '', '', '', 'C', '', '', '', '2018-10-31 13:19:18', 10, '0000-00-00 00:00:00', 0, ''),
(40, '', 'Kallel', 'Lobna', '', 0, 0, '', '', '', '', 0, 0, '', '', '', '', '', '', '', 'C', '', '', '', '2018-10-31 13:19:57', 10, '0000-00-00 00:00:00', 0, ''),
(41, '', 'Kallel', 'Dorra', '', 0, 0, '', '', '', '', 0, 0, '', '', '', '', '', '', '', 'C', '', '', '', '2018-10-31 13:20:23', 10, '0000-00-00 00:00:00', 0, ''),
(42, '', 'Kanoun Hentati', 'Ines', '', 0, 0, '', '', '', '', 0, 0, '', '', '', '', '', '', '', 'C', '', '', '', '2018-10-31 13:20:51', 10, '0000-00-00 00:00:00', 0, ''),
(43, '', 'Kharrat', 'Aida', '', 0, 0, '', '', '', '', 0, 0, '', '', '', '', '', '', '', 'C', '', '', '', '2018-10-31 13:21:27', 10, '0000-00-00 00:00:00', 0, ''),
(44, '', 'Lahyani', 'Rahma', '', 0, 0, '', '', '', '', 0, 0, '', '', '', '', '', '', '', 'C', '', '', '', '2018-10-31 13:22:17', 10, '0000-00-00 00:00:00', 0, ''),
(45, '', 'Maalej', 'Sawsen', '', 0, 0, '', '', '', '', 0, 0, '', '', '', '', '', '', '', 'C', '', '', '', '2018-10-31 13:23:31', 10, '0000-00-00 00:00:00', 0, ''),
(46, '', 'Marrekchi', 'Emna', '', 0, 0, '', '', '', '', 0, 0, '', '', '', '', '', '', '', 'C', '', '', '', '2018-10-31 13:23:58', 10, '0000-00-00 00:00:00', 0, ''),
(47, '', 'Masmoudi', 'Hela', '', 0, 0, '', '', '', '', 0, 0, '', '', '', '', '', '', '', 'C', '', '', '', '2018-10-31 13:24:25', 10, '0000-00-00 00:00:00', 0, ''),
(48, '', 'Masmoudi', 'Mariem', '', 0, 0, '', '', '', '', 0, 0, '', '', '', '', '', '', '', 'C', '', '', '', '2018-10-31 13:25:07', 10, '0000-00-00 00:00:00', 0, ''),
(49, '', 'Masmoudi Mekki', 'Mariem', '', 0, 0, '', '', '', '', 0, 0, '', '', '', '', '', '', '', 'C', '', '', '', '2018-10-31 13:25:46', 10, '0000-00-00 00:00:00', 0, ''),
(50, '', 'Mellouli', 'Racem', '', 0, 0, '', '', '', '', 0, 0, '', '', '', '', '', '', '', 'C', '', '', '', '2018-10-31 13:26:17', 10, '0000-00-00 00:00:00', 0, ''),
(51, '', 'Mkaouar Masmoudi', 'Arij', '', 0, 0, '', '', '', '', 0, 0, '', '', '', '', '', '', '', 'C', '', '', '', '2018-10-31 13:26:52', 10, '0000-00-00 00:00:00', 0, ''),
(52, '', 'Rekik', 'Nawrez', '', 0, 0, '', '', '', '', 0, 0, '', '', '', '', '', '', '', 'C', '', '', '', '2018-10-31 13:27:36', 10, '0000-00-00 00:00:00', 0, ''),
(53, '', 'Saadouli', 'Hadhemi', '', 0, 0, '', '', '', '', 0, 0, '', '', '', '', '', '', '', 'C', '', '', '', '2018-10-31 13:28:00', 10, '0000-00-00 00:00:00', 0, ''),
(54, '', 'Sghaier', 'Fedia', '', 0, 0, '', '', '', '', 0, 0, '', '', '', '', '', '', '', 'C', '', '', '', '2018-10-31 13:28:24', 10, '0000-00-00 00:00:00', 0, ''),
(55, '', 'Azaiez', 'Naceur', '', 0, 0, '', '', '', '', 0, 0, '', '', '', '', '', '', '', 'C', '', '', '', '2018-10-31 13:50:46', 10, '0000-00-00 00:00:00', 0, ''),
(56, '', 'Bahloul', 'Manel', '', 0, 0, '', '', '', '', 0, 0, '', '', '', '', '', '', '', 'C', '', '', '', '2018-10-31 13:51:14', 10, '0000-00-00 00:00:00', 0, ''),
(57, '', 'Barhoumi', 'Tarak', '', 0, 0, '', '', '', '', 0, 0, '', '', '', '', '', '', '', 'C', '', '', '', '2018-10-31 13:51:41', 10, '0000-00-00 00:00:00', 0, ''),
(58, '', 'Becho', 'Wafa', '', 0, 0, '', '', '', '', 0, 0, '', '', '', '', '', '', '', 'C', '', '', '', '2018-10-31 13:52:06', 10, '2018-10-31 13:52:28', 10, ''),
(59, '', 'Ben Abdelaziz', 'Foued', '', 0, 0, '', '', '', '', 0, 0, '', '', '', '', '', '', '', 'C', '', '', '', '2018-10-31 13:53:38', 10, '0000-00-00 00:00:00', 0, ''),
(60, '', 'Ben Jeddou', 'Makram', '', 0, 0, '', '', '', '', 0, 0, '', '', '', '', '', '', '', 'C', '', '', '', '2018-10-31 13:55:02', 10, '0000-00-00 00:00:00', 0, ''),
(61, '', 'Ben Kachcha', 'Said', '', 0, 0, '', '', '', '', 0, 0, '', '', '', '', '', '', '', 'C', '', '', '', '2018-10-31 13:55:25', 10, '0000-00-00 00:00:00', 0, ''),
(62, '', 'Bhar Layeb', 'Safa', '', 0, 0, '', '', '', '', 0, 0, '', '', '', '', '', '', '', 'C', '', '', '', '2018-10-31 13:55:51', 10, '0000-00-00 00:00:00', 0, ''),
(63, '', 'Dammak ', 'Lamia', '', 0, 0, '', '', '', '', 0, 0, '', '', '', '', '', '', '', 'C', '', '', '', '2018-10-31 13:56:24', 10, '0000-00-00 00:00:00', 0, ''),
(64, '', 'Daoued', 'Istabrak', '', 0, 0, '', '', '', '', 0, 0, '', '', '', '', '', '', '', 'C', '', '', '', '2018-10-31 13:56:49', 10, '0000-00-00 00:00:00', 0, ''),
(65, '', 'Elleuch', 'Maissa', '', 0, 0, '', '', '', '', 0, 0, '', '', '', '', '', '', '', 'C', '', '', '', '2018-10-31 13:58:19', 10, '0000-00-00 00:00:00', 0, ''),
(66, '', 'Hentati', 'Raja', '', 0, 0, '', '', '', '', 0, 0, '', '', '', '', '', '', '', 'C', '', '', '', '2018-10-31 13:58:58', 10, '0000-00-00 00:00:00', 0, ''),
(67, '', 'Jaballah', 'Rabie', '', 0, 0, '', '', '', '', 0, 0, '', '', '', '', '', '', '', 'C', '', '', '', '2018-10-31 13:59:24', 10, '0000-00-00 00:00:00', 0, ''),
(68, '', 'Kanoun', 'Ines', '', 0, 0, '', '', '', '', 0, 0, '', '', '', '', '', '', '', 'C', '', '', '', '2018-10-31 13:59:55', 10, '0000-00-00 00:00:00', 0, ''),
(69, '', 'Ladhari', 'Talel', '', 0, 0, '', '', '', '', 0, 0, '', '', '', '', '', '', '', 'C', '', '', '', '2018-10-31 14:00:21', 10, '0000-00-00 00:00:00', 0, ''),
(70, '', 'Makni', 'Nesrine', '', 0, 0, '', '', '', '', 0, 0, '', '', '', '', '', '', '', 'C', '', '', '', '2018-10-31 14:00:48', 10, '0000-00-00 00:00:00', 0, ''),
(71, '', 'Masmoudi', 'Amina', '', 0, 0, '', '', '', '', 0, 0, '', '', '', '', '', '', '', 'C', '', '', '', '2018-10-31 14:01:15', 10, '0000-00-00 00:00:00', 0, ''),
(72, '', 'Masmoudi', 'Fatma ', '', 0, 0, '', '', '', '', 0, 0, '', '', '', '', '', '', '', 'C', '', '', '', '2018-10-31 14:02:04', 10, '0000-00-00 00:00:00', 0, ''),
(73, '', 'Mohsine', 'Chaouqi', '', 0, 0, '', '', '', '', 0, 0, '', '', '', '', '', '', '', 'C', '', '', '', '2018-10-31 14:02:34', 10, '0000-00-00 00:00:00', 0, ''),
(74, '', 'Rebai', 'Sonia', '', 0, 0, '', '', '', '', 0, 0, '', '', '', '', '', '', '', 'C', '', '', '', '2018-10-31 14:02:59', 10, '0000-00-00 00:00:00', 0, ''),
(75, '', 'Saadaouli', 'Hadhemi', '', 0, 0, '', '', '', '', 0, 0, '', '', '', '', '', '', '', 'C', '', '', '', '2018-10-31 14:03:26', 10, '0000-00-00 00:00:00', 0, ''),
(76, '', 'Turki', 'Emna', '', 0, 0, '', '', '', '', 0, 0, '', '', '', '', '', '', '', 'C', '', '', '', '2018-10-31 14:03:48', 10, '0000-00-00 00:00:00', 0, ''),
(77, '', 'Ben Tekaya', 'Chourouk', '', 0, 0, '', '', '', '', 0, 0, '', '', '', '', '', '', '', 'C', '', '', '', '2018-10-31 14:23:41', 10, '0000-00-00 00:00:00', 0, ''),
(78, '', 'Chetourou', 'Sameh', '', 0, 0, '', '', '', '', 0, 0, '', '', '', '', '', '', '', 'C', '', '', '', '2018-10-31 14:25:38', 10, '0000-00-00 00:00:00', 0, ''),
(79, '', 'AMMAR', 'Bilel', '', 0, 0, '', '', '', '', 0, 0, '', '', '', '', '', '', '', 'C', '', '', '', '2018-10-31 14:26:04', 10, '0000-00-00 00:00:00', 0, ''),
(80, '', 'Elleuch', 'Mohamed Ali', '', 0, 0, '', '', '', '', 0, 0, '', '', '', '', '', '', '', 'C', '', '', '', '2018-10-31 14:26:33', 10, '0000-00-00 00:00:00', 0, ''),
(81, '', 'Ktari', 'Raida', '', 0, 0, '', '', '', '', 0, 0, '', '', '', '', '', '', '', 'C', '', '', '', '2018-10-31 14:26:59', 10, '0000-00-00 00:00:00', 0, ''),
(82, '', 'Kharat', 'Aida', '', 0, 0, '', '', '', '', 0, 0, '', '', '', '', '', '', '', 'C', '', '', '', '2018-10-31 14:27:27', 10, '0000-00-00 00:00:00', 0, ''),
(83, '', 'Frikha', 'Ahmed', '', 0, 0, '', '', '', '', 0, 0, '', '', '', '', '', '', '', 'C', '', '', '', '2018-10-31 14:30:13', 10, '0000-00-00 00:00:00', 0, ''),
(84, '', 'Rekik', 'Ines', '', 0, 0, '', '', '', '', 0, 0, '', '', '', '', '', '', '', 'C', '', '', '', '2018-10-31 14:31:01', 10, '0000-00-00 00:00:00', 0, ''),
(85, '', 'Besbes NÃ©e Markechi', 'Emna', '', 0, 0, '', '', '', '', 0, 0, '', '', '', '', '', '', '', 'C', '', '', '', '2018-10-31 14:31:46', 10, '0000-00-00 00:00:00', 0, ''),
(86, '', 'Lahiani', 'Rahma', '', 0, 0, '', '', '', '', 0, 0, '', '', '', '', '', '', '', 'C', '', '', '', '2018-10-31 14:33:32', 10, '0000-00-00 00:00:00', 0, ''),
(87, '', 'Trablsi', 'AbdWaheb', '', 0, 0, '', '', '', '', 0, 0, '', '', '', '', '', '', '', 'C', '', '', '', '2018-10-31 14:35:23', 10, '0000-00-00 00:00:00', 0, ''),
(88, '', 'Kostantini', 'Sabeur', '', 0, 0, '', '', '', '', 0, 0, '', '', '', '', '', '', '', 'C', '', '', '', '2018-10-31 14:35:57', 10, '0000-00-00 00:00:00', 0, ''),
(89, '', 'Boukthir', 'Hadar', '', 0, 0, '', '', '', '', 0, 0, '', '', '', '', '', '', '', 'C', '', '', '', '2018-10-31 14:37:26', 10, '0000-00-00 00:00:00', 0, ''),
(90, '', 'Lajmi', 'Imen', '', 0, 0, '', '', '', '', 0, 0, '', '', '', '', '', '', '', 'C', '', '', '', '2018-10-31 14:37:53', 10, '0000-00-00 00:00:00', 0, ''),
(91, '', 'Ouzayd', 'Fatima', '', 0, 0, '', '', '', '', 0, 0, '', '', '', '', '', '', '', 'C', '', '', '', '2018-10-31 14:39:56', 10, '0000-00-00 00:00:00', 0, ''),
(92, '', 'Berdjoudi', 'Louiza', '', 0, 0, '', '', '', '', 0, 0, '', '', '', '', '', '', '', 'C', '', '', '', '2018-10-31 14:40:29', 10, '0000-00-00 00:00:00', 0, ''),
(93, '', 'Ben Mansour', 'Mouin', '', 0, 0, '', '', '', '', 0, 0, '', '', '', '', '', '', '', 'C', '', '', '', '2018-10-31 14:41:01', 10, '0000-00-00 00:00:00', 0, ''),
(94, '', 'Lassoued', 'Rokaya', '', 0, 0, '', '', '', '', 0, 0, '', '', '', '', '', '', '', 'C', '', '', '', '2018-10-31 15:04:49', 10, '0000-00-00 00:00:00', 0, ''),
(95, '', 'Jalleb', 'Afef', '', 0, 0, '', '', '', '', 0, 0, '', '', '', '', '', '', '', 'C', '', '', '', '2018-10-31 15:06:25', 10, '0000-00-00 00:00:00', 0, ''),
(96, '', 'Ismail', 'Sabrine', '', 0, 0, '', '', '', '', 0, 0, '', '', '', '', '', '', '', 'C', '', '', '', '2018-10-31 15:06:52', 10, '0000-00-00 00:00:00', 0, ''),
(97, '', 'Moumni', 'Siwar', '', 0, 0, '', '', '', '', 0, 0, '', '', '', '', '', '', '', 'C', '', '', '', '2018-10-31 15:07:35', 10, '0000-00-00 00:00:00', 0, ''),
(98, '', 'Gram', 'Marwa', '', 0, 0, '', '', '', '', 0, 0, '', '', '', '', '', '', '', 'C', '', '', '', '2018-10-31 15:08:12', 10, '0000-00-00 00:00:00', 0, ''),
(99, '', 'Ouhibi', 'Abir', '', 0, 0, '', '', '', '', 0, 0, '', '', '', '', '', '', '', 'C', '', '', '', '2018-10-31 15:08:54', 10, '0000-00-00 00:00:00', 0, ''),
(100, '', 'Trabelsi', 'Abdelwaheb', '', 0, 0, '', '', '', '', 0, 0, '', '', '', '', '', '', '', 'C', '', '', '', '2018-10-31 15:09:20', 10, '0000-00-00 00:00:00', 0, ''),
(101, '', 'Mallek', 'Marwa', '', 0, 0, '', '', '', '', 0, 0, '', '', '', '', '', '', '', 'C', '', '', '', '2018-10-31 15:09:58', 10, '0000-00-00 00:00:00', 0, ''),
(102, '', 'Mejouel', 'Raja', '', 0, 0, '', '', '', '', 0, 0, '', '', '', '', '', '', '', 'C', '', '', '', '2018-10-31 15:10:29', 10, '0000-00-00 00:00:00', 0, ''),
(103, '', 'Louati', 'Amal', '', 0, 0, '', '', '', '', 0, 0, '', '', '', '', '', '', '', 'C', '', '', '', '2018-10-31 15:11:42', 10, '0000-00-00 00:00:00', 0, ''),
(104, '', 'Dhouib', 'SaÃ¯ma', '', 0, 0, '', '', '', '', 0, 0, '', '', '', '', '', '', '', 'C', '', '', '', '2018-10-31 15:13:40', 10, '2018-10-31 15:21:20', 10, ''),
(105, '', 'Dammak', 'Najeh', '', 0, 0, '', '', '', '', 0, 0, '', '', '', '', '', '', '', 'C', '', '', '', '2018-10-31 15:20:16', 10, '0000-00-00 00:00:00', 0, ''),
(106, '', 'Ben Abdallah', 'ChaÃ¯ma', '', 0, 0, '', '', '', '', 0, 0, '', '', '', '', '', '', '', 'C', '', '', '', '2018-10-31 15:21:53', 10, '0000-00-00 00:00:00', 0, ''),
(107, '', 'Dhahri', 'Maryam', '', 0, 0, '', '', '', '', 0, 0, '', '', '', '', '', '', '', 'C', '', '', '', '2018-10-31 15:22:21', 10, '0000-00-00 00:00:00', 0, ''),
(108, '', 'Jerbi', 'Abdessalem', '', 0, 0, '', '', '', '', 0, 0, '', '', '', '', '', '', '', 'C', '', '', '', '2018-10-31 15:22:57', 10, '0000-00-00 00:00:00', 0, ''),
(109, '', 'Hlouani', 'Nesrin', '', 0, 0, '', '', '', '', 0, 0, '', '', '', '', '', '', '', 'C', '', '', '', '2018-10-31 15:23:35', 10, '0000-00-00 00:00:00', 0, ''),
(110, '', 'Jellali', 'Ahlem', '', 0, 0, '', '', '', '', 0, 0, '', '', '', '', '', '', '', 'C', '', '', '', '2018-10-31 15:24:02', 10, '0000-00-00 00:00:00', 0, ''),
(111, '', 'Boukhir', 'Haddar', '', 0, 0, '', '', '', '', 0, 0, '', '', '', '', '', '', '', 'C', '', '', '', '2018-10-31 15:25:38', 10, '0000-00-00 00:00:00', 0, ''),
(112, '', 'Smaoui', 'Soulef', '', 0, 0, '', '', '', '', 0, 0, '', '', '', '', '', '', '', 'C', '', '', '', '2018-10-31 15:26:25', 10, '0000-00-00 00:00:00', 0, ''),
(113, '', 'Kallel', 'Ahmed', '', 0, 0, '', '', '', '', 0, 0, '', '', '', '', '', '', '', 'C', '', '', '', '2018-10-31 15:26:50', 10, '0000-00-00 00:00:00', 0, ''),
(114, '', 'Salemi', 'Olfa', '', 0, 0, '', '', '', '', 0, 0, '', '', '', '', '', '', '', 'C', '', '', '', '2018-10-31 15:27:14', 10, '0000-00-00 00:00:00', 0, ''),
(115, '', 'Lahmar', 'Arij', '', 0, 0, '', '', '', '', 0, 0, '', '', '', '', '', '', '', 'C', '', '', '', '2018-11-01 08:50:26', 10, '0000-00-00 00:00:00', 0, '');

-- --------------------------------------------------------

--
-- Structure de la table `ba_adherperiodes`
--

CREATE TABLE `ba_adherperiodes` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `etat` enum('Y','N') NOT NULL DEFAULT 'Y',
  `created` datetime NOT NULL,
  `usercreated` int(11) NOT NULL,
  `modify` datetime NOT NULL,
  `usermodify` int(11) NOT NULL,
  `orderm` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `ba_adherperiodes`
--

INSERT INTO `ba_adherperiodes` (`id`, `name`, `etat`, `created`, `usercreated`, `modify`, `usermodify`, `orderm`) VALUES
(1, '2013', 'Y', '2018-10-31 10:57:06', 10, '0000-00-00 00:00:00', 0, 0),
(2, '2014', 'Y', '2018-10-31 10:57:32', 10, '0000-00-00 00:00:00', 0, 0),
(3, '2015', 'Y', '2018-10-31 10:57:43', 10, '0000-00-00 00:00:00', 0, 0),
(4, '2016', 'Y', '2018-10-31 10:57:55', 10, '0000-00-00 00:00:00', 0, 0),
(5, '2017', 'Y', '2018-10-31 10:58:12', 10, '0000-00-00 00:00:00', 0, 0);

-- --------------------------------------------------------

--
-- Structure de la table `ba_catalogues`
--

CREATE TABLE `ba_catalogues` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `created` datetime NOT NULL,
  `usercreated` int(11) NOT NULL,
  `modify` datetime NOT NULL,
  `usermodify` int(11) NOT NULL,
  `etat` enum('Y','N') NOT NULL,
  `datec` date NOT NULL,
  `resume` text NOT NULL,
  `description` text NOT NULL,
  `titre` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `ba_catalogues`
--

INSERT INTO `ba_catalogues` (`id`, `name`, `photo`, `created`, `usercreated`, `modify`, `usermodify`, `etat`, `datec`, `resume`, `description`, `titre`) VALUES
(1, 'Gestion industrielle', '2_1.jpg', '2018-12-25 11:30:20', 10, '0000-00-00 00:00:00', 0, 'Y', '2018-12-25', '<p>Gestion industrielle</p>', '<ul>\r\n<li>Formation OptiMaint Debutant</li>\r\n<li>Formation OptiMaint Expert</li>\r\n<li>Formation OptiMaint Perfectionnement</li>\r\n<li>Analyse des r&eacute;sultats d&rsquo;exploitation de la GMAO</li>\r\n<li>Mise en &oelig;uvre de la maintenance</li>\r\n<li>Tableau de Bord de Maintenance: Elaboration,Suivie et Analyse</li>\r\n<li>La&nbsp; Maintenance Conditionnelle :Vibration,Thermographie Infrarouge,Analyse&nbsp; d\'huile&nbsp;</li>\r\n<li>LES Analyses en Maintenance:AMDEC,ABC,5M &hellip;.</li>\r\n<li>Projet GPAO :R&eacute;ussir la mise en place de la GPAO&nbsp;</li>\r\n<li>Gestion de la Production:Pr&eacute;parationdes Donn&eacute;es Techniques pou GPAO</li>\r\n<li>GPAO : Identification, Choix (D&eacute;monstration pratique)</li>\r\n<li>Planification de la Production :Techniques de Planification&nbsp;</li>\r\n<li>Gestion des Stocks et des Magasins:Codification,Classement,Inventaire,&hellip;</li>\r\n<li>Tableau de Bord de Stock&nbsp; :Elaborationet Analyse&nbsp;</li>\r\n<li>Gestion des Achats et des Approvisionnements&nbsp;</li>\r\n<li>Cahier de Charge et Contrat de Sous -Traitante, de Travaux&nbsp; Neufs et de Maintenance</li>\r\n<li>TPM:Maintenance Productive Totale&nbsp;</li>\r\n<li>Entretien et Gestion du Materiel Roulant: Maintenance et Exploitation</li>\r\n</ul>', '<p>Gestion industrielle</p>'),
(2, 'Qualite & Audit', '1_1.jpg', '2018-12-25 13:42:44', 10, '0000-00-00 00:00:00', 0, 'Y', '2018-12-25', '', '<ul>\r\n<li>Perfectionnement du Responsable du Mangement de la Qualit&eacute;</li>\r\n<li>&nbsp;Interpr&eacute;tation de la Norme ISO 9001 version 2008 et 2015</li>\r\n<li>Audit Interne du SMQ selon la Norme ISO 9001 version 2008 et 2015</li>\r\n<li>Documenter un syst&egrave;me de management de la&nbsp; qualit&eacute; conform&eacute;ment &agrave; l&rsquo;ISO 9001 version 2000</li>\r\n<li>La Norme ISO 9001: les principaux changements et les &eacute;tapes pour immigrer &agrave; la version 2015</li>\r\n<li>Interpr&eacute;tation de la Norme ISO/TS 16949</li>\r\n<li>&nbsp;Analyse des donn&eacute;es</li>\r\n<li>L&rsquo;am&eacute;lioration continue- le syst&egrave;me Kaisen</li>\r\n<li>Audit Interne selon la Norme ISO/TS 16949</li>\r\n<li>Innovation Lean/TPM</li>\r\n<li>&nbsp;Ecoute et satisfaction des clients</li>\r\n<li>Pratique des Audits Internes : ISO 19011 version 2011</li>\r\n<li>Audit Processus de Fabrication (FIEV)</li>\r\n<li>Formation des chefs de postes &agrave; l&rsquo;application des proc&eacute;dures</li>\r\n<li>M&eacute;thodes de r&eacute;solution des probl&egrave;mes en groupe (MRPG)</li>\r\n<li>Conception et planification de la qualit&eacute;</li>\r\n<li>&nbsp;Le management des processus&nbsp;</li>\r\n<li>Audit Produit</li>\r\n<li>&nbsp;Formation &laquo; Quality manager &raquo;</li>\r\n<li>PDCA</li>\r\n<li>M&eacute;thode 8D</li>\r\n<li>M&eacute;thode de R&eacute;solution de Probl&egrave;mes en Groupe</li>\r\n<li>Outils Qualit&eacute; : 5M (Diagramme cause &agrave; effet), 5P, Digramme de Pareto, Brainstorming, Est/n&rsquo;est pas, vote pond&eacute;r&eacute;, feuilles de relev&eacute;s</li>\r\n<li>QRQC : Quick Response Quality Control</li>\r\n<li>FTA : Factor Tree Analysis&nbsp;</li>\r\n<li>PPAP : Production Part Approval Process (processus d&rsquo;acceptation des &eacute;chantillons initiaux)</li>\r\n<li>Ma&icirc;trise statistique du processus (MSP)</li>\r\n<li>APQP : Planification anticip&eacute; de la Qualit&eacute;</li>\r\n<li>MSP/SPC : Statistical Process Control</li>\r\n<li>Plan de Surveillance</li>\r\n<li>Plan Qualit&eacute;</li>\r\n<li>Auto-Contr&ocirc;le</li>\r\n<li>TRS : Taux de rendement synth&eacute;tique</li>\r\n<li>Tableau de Bord Qualit&eacute;</li>\r\n<li>Kaizen</li>\r\n<li>Les 7 Muda</li>\r\n<li>Approche Processus</li>\r\n<li>Co&ucirc;t de non Qualit&eacute;</li>\r\n<li>Cercle Qualit&eacute;</li>\r\n<li>Management Visuel</li>\r\n<li>Contr&ocirc;le par Echantillonnage</li>\r\n<li>Assurance Qualit&eacute; Fournisseur</li>\r\n<li>Poka-Yok&eacute;</li>\r\n<li>Nettoyage et D&eacute;sinfection :Choix des produits, m&eacute;thodes et moyens</li>\r\n<li>HACCP:Mise en place , v&eacute;rification et audit HACCP</li>\r\n<li>Perfectionnement au Contr&ocirc;le Qualit&eacute;</li>\r\n<li>Traitement et Ma&icirc;trise des Produits non &ndash;conformes et des R&eacute;clamations clients</li>\r\n<li>Mesure et Am&eacute;lioration continue du Syst&egrave;me Qualit&eacute;</li>\r\n<li>La M&eacute;thode des 5 S en Management par la Qualit&eacute;Totale (TQM)</li>\r\n<li>Formation pratique des animateurs de cercles de qualit&eacute; en TQM :</li>\r\n<li>R&eacute;ussir et Favoriser la Production d&rsquo;id&eacute;es par une implication totale des hommes</li>\r\n<li>Comment Implanter des Cercles de Qualit&eacute; en TQM</li>\r\n<li>Gestion des Co&ucirc;ts du non Qualit&eacute;</li>\r\n<li>Pratique de Pr&eacute;sentation d&rsquo;un rapport d&rsquo;audit</li>\r\n<li>La fonction M&eacute;trologie : gestion d\'un parc des &eacute;quipements de mesure,exigences ISO 17025, calcul des incertitudes de mesures.</li>\r\n<li>Formation &agrave; l\'Audit Qualit&eacute; : l\'Audit Interne, l\'Audit des Fournisseurs</li>\r\n<li>Evaluation des co&ucirc;ts du non qualit&eacute;</li>\r\n</ul>', '<p>Qualite &amp; Audit</p>'),
(3, 'Techniques industrielle', '1_1-0.jpg', '2018-12-25 13:43:25', 10, '0000-00-00 00:00:00', 0, 'Y', '2018-12-25', '', '<ul>\r\n<li>Electricit&eacute;:Diagnostic , installation,protection et cahier des charges</li>\r\n<li>Installation Electrique: conception,choix du mat&eacute;riel et r&eacute;alisation</li>\r\n<li>Electronique:diagnostic des pannes,cartes &eacute;lectroniques</li>\r\n<li>Formation Programmation Microcontr&ocirc;leur</li>\r\n<li>Formation Conception , Fabrication et r&eacute;paration cartes &eacute;lectroniques</li>\r\n<li>Soudure:TIG:MIG:Contr&ocirc;le qualit&eacute;,Soudure des aciers INOX</li>\r\n<li>Automates Programmables:Entretien et Programmation</li>\r\n<li>CAO-DAO (Autocad, Solidworks, catia)</li>\r\n<li>CEM: Compatibilit&eacute; Electromagn&eacute;tique</li>\r\n<li>Proc&eacute;d&eacute;s de Soudage:choix du mat&eacute;riel, optimisation et qualit&eacute;</li>\r\n<li>Gestion Rationnelle d\'une chaufferie de vapeur</li>\r\n<li>Chaud et Froid (diagnostic, dimensionnement,humidit&eacute;,d&eacute;bit)</li>\r\n<li>Techniques de diagnostic des pannes</li>\r\n<li>Pompes:Classification,Dimensionnement ,Choix,Principe de fonctionnement</li>\r\n<li>Chaudi&egrave;res: principe de fonctionnement et maintenance pr&eacute;ventive</li>\r\n<li>Transformateurs et Groupes Electrog&egrave;nes :Fonctionnement et Maintenance</li>\r\n<li>Pneumatiques:Composants,Choix et installation,Calcul,Diagnostic et R&eacute;paration</li>\r\n<li>Hydraulique:Composants,Choix et Installation, Calcul,Diagnostic et R&eacute;paration</li>\r\n<li>Conception des Armoire Electriques</li>\r\n<li>Contr&ocirc;le Qualit&eacute; de l\'assemblage des carte &eacute;lectronique suivant la norme IPC A610</li>\r\n<li>Robotique</li>\r\n<li>D&eacute;veloppement des Cartes Electronique suivants les normes CEM et IPC (Routage et g&eacute;n&eacute;ration des fichiers de fabrication)</li>\r\n<li>M&eacute;canique Analytique ,Technologie M&eacute;canique ,Transmission M&eacute;canique</li>\r\n<li>Transmission Hydraulique</li>\r\n<li>&nbsp;Etude des forces</li>\r\n<li>les compresseurs alternatifs</li>\r\n<li>&nbsp;Les Turbines &agrave;&nbsp; Gaz</li>\r\n<li>&nbsp;Chaudi&egrave;res: principe de fonctionnement et maintenance pr&eacute;ventive</li>\r\n<li>&nbsp;M&eacute;trologie et Tol&eacute;rances m&eacute;caniques</li>\r\n<li>Transmission des moteurs&nbsp;&nbsp;</li>\r\n<li>Transformateurs et Groupes Electrog&egrave;nes : Fonctionnement et Maintenance</li>\r\n</ul>', '<p>Techniques industrielle</p>'),
(4, 'Gestion des ressources humaines', '1_1-1.jpg', '2018-12-25 13:44:11', 10, '0000-00-00 00:00:00', 0, 'Y', '2018-12-25', '', '<ul>\r\n<li><span>La D&eacute;marche Qualit&eacute; et la Fonction Formation</span></li>\r\n<li><span>Les techniques d&rsquo;&eacute;valuation et de recrutement du personnel</span></li>\r\n<li><span>Le Responsable des Ressources Humaines</span></li>\r\n<li><span>Gestion pr&eacute;visionnelle des ressources humaines</span></li>\r\n<li><span>Evaluation du Personnel et D&eacute;termination des Besoins en Formation</span></li>\r\n<li><span>Principe de la Motivation et son Impact sur le Rendement</span></li>\r\n<li><span>Evaluation des comp&eacute;tences</span></li>\r\n<li><span>Contr&ocirc;le de R&eacute;sultat et Evaluation d\'une Action de Formation</span></li>\r\n<li><span>Plan de Formation:Etablissement et Suivi du Plan de Formation</span></li>\r\n<li><span>Mesure de la Productivit&eacute; du Personnel de Production</span></li>\r\n<li><span>Elaboration des r&eacute;f&eacute;rentiels de comp&eacute;tences&nbsp;</span></li>\r\n<li><span>Le Tableau de Bord de la Fonction Gestion des Ressources Humaines</span></li>\r\n<li><span>Focus RH : recrutement, Entretien d\'&eacute;valuation, Communication RH, Gestion du capital humain</span></li>\r\n<li><span>Gestion du Personnel&nbsp; &nbsp;&nbsp;</span></li>\r\n<li><span>Organisation de la GRH</span></li>\r\n<li><span>La fonction GRH</span></li>\r\n</ul>', '<p>Gestion des ressources humaines</p>'),
(5, 'Developpement personnel', '1_1-2.jpg', '2018-12-25 13:50:31', 10, '0000-00-00 00:00:00', 0, 'Y', '2018-12-25', '', '<ul>\r\n<li>Geste et Posture</li>\r\n<li>Team building</li>\r\n<li>Time Management</li>\r\n<li>Devloppement de Soi</li>\r\n<li>Coaching des Equipes&nbsp;</li>\r\n<li>Gestion des Priorites&nbsp;</li>\r\n<li>Gestion des Conflits</li>\r\n<li>Prise de Parole en Public</li>\r\n<li>Formation des Formateurs&nbsp;&nbsp;</li>\r\n<li>Motivation du personnel</li>\r\n<li>Recrutement et Rotation du Personnel</li>\r\n<li>Conduite et animation des r&eacute;unions</li>\r\n<li>Communication interne</li>\r\n<li>La communication interpersonnelle</li>\r\n<li>Manager Leader &amp; Animateur</li>\r\n<li>L\'art de parler en public</li>\r\n<li>Le travail en &eacute;quipe</li>\r\n<li>Management de Proximit&eacute; &amp; Interactif</li>\r\n<li>Gestion du Temps et Gestion du Stress</li>\r\n<li>Coaching : m&eacute;tiers des ventes et managers des &eacute;quipes</li>\r\n<li>Entretenir un bon climat social dans votre entreprise</li>\r\n<li>Mieux se Conna&icirc;tre pour Agir mieux en Leadership&nbsp;</li>\r\n<li>Savoir-vivre Professionnel</li>\r\n<li>Ø§Ù„Ø·Ø±Ù‚ ÙˆØ§Ù„Ø£Ø³Ø§Ù„ÙŠØ¨ Ø§Ù„Ù…Ù†Ø§Ø³Ø¨Ø© Ù„ØªØ­Ø±ÙŠØ± ÙˆØ¹Ø±Ø¶ Ø§Ù„ÙƒØªØ§Ø¨Ø§Øª Ø§Ù„Ù…Ù‡Ù†ÙŠØ© Ø¨Ø§Ù„Ù„ØºØ© Ø§Ù„Ø¹Ø±Ø¨ÙŠØ©</li>\r\n<li>Commerce International</li>\r\n<li>D&eacute;veloppement de comp&eacute;tences d&rsquo;attach&eacute; commerciale</li>\r\n<li>Perfectionnement aux Outils Technologiques pour Assistantes et Secr&eacute;taires de Direction</li>\r\n<li>Am&eacute;liorer ses Ecrits professionnels: D&eacute;velopper votre communication &eacute;crite</li>\r\n<li>Rendu Petite Monnaie et Qualit&eacute; d\'Accueil</li>\r\n<li>La pr&eacute;vention et le traitement des incivilit&eacute;s et des agressions verbales de la client&egrave;le</li>\r\n</ul>', '<p>Developpement personnel</p>'),
(6, 'Managemenet des entreprises', '1_1_1.jpg', '2018-12-25 13:51:26', 10, '0000-00-00 00:00:00', 0, 'Y', '2018-12-25', '', '<ul>\r\n<li>La Comptabilit&eacute; Analytique dans&nbsp; le nouveau&nbsp; Syst&egrave;me Comptable</li>\r\n<li>Management et leadership</li>\r\n<li>Management par objectifs</li>\r\n<li>Les Traveaux Comptables de fin d\'ann&eacute;e et D&eacute;termination des R&eacute;sultats Fisscaux</li>\r\n<li>Elaboration du plan strat&eacute;gique de l&rsquo;entreprise (Business plan)</li>\r\n<li>Les valeurs et strat&eacute;gie d&rsquo;entreprise</li>\r\n<li>Le Benchmarking</li>\r\n<li>Contr&ocirc;le de Gestion:Tableau de Bord de l\'Entreprise</li>\r\n<li>Directeur Financier et Pratique de l\'Analyse Financi&egrave;re</li>\r\n<li>Gestion de Tr&eacute;sorerie et Maitrise des N&eacute;gociations Bancaires</li>\r\n<li>Techniques de Vente</li>\r\n<li>Coaching des Equipes&nbsp;</li>\r\n<li>Auto Motivation et D&eacute;veloppement Personnel de l&rsquo;Equipe de Travail&nbsp;</li>\r\n<li>Bilan Social de l\'entreprise&nbsp;</li>\r\n<li>Le tableau de bord, outil de pilotage</li>\r\n<li>Maitriser le Principe de la Gestion Budg&eacute;taire</li>\r\n<li>Le Contentieux des March&eacute;s Publics</li>\r\n<li>Gestion des projets</li>\r\n<li>Risque Management</li>\r\n<li>La Pr&eacute;vention des Impay&eacute;s</li>\r\n<li>Les Cr&eacute;dits Bancaires et les PME</li>\r\n<li>Le management de la qualit&eacute; totale&nbsp; (TQM)</li>\r\n<li>&nbsp;Strat&eacute;gie et objectifs de l&rsquo;entreprise</li>\r\n<li>Gestion de la Polyvalence</li>\r\n<li>Gestion Previsionnelle des Emplois et des Competences</li>\r\n<li>Le Traitement des Objections</li>\r\n<li>Commerce International&nbsp;</li>\r\n<li>Gestion Previsionnelle des Emplois des Competences&nbsp;</li>\r\n</ul>', '<p>Managemenet des entreprises</p>'),
(7, 'Sante et securite de travail', '1_1_1-0.jpg', '2018-12-25 13:51:49', 10, '0000-00-00 00:00:00', 0, 'Y', '2018-12-25', '', '<ul>\r\n<li>Qualit&eacute;, Hygi&egrave;ne, S&eacute;curit&eacute; &amp; Environnement</li>\r\n<li>Pr&eacute;vention Risques Biologiques / chimiques</li>\r\n<li>Syst&egrave;me de management de la s&eacute;curit&eacute; alimentaire HACCP</li>\r\n<li>Formation des employ&eacute;s sur l&rsquo;hygi&egrave;ne et la s&eacute;curit&eacute;&nbsp; alimentaire</li>\r\n<li>&nbsp;Gestion environnementale profitable (GEP)</li>\r\n<li>Pr&eacute;vention des risques Electriques</li>\r\n<li>Pr&eacute;alables de la sant&eacute; et s&eacute;curit&eacute; dans le travail</li>\r\n<li>Management Laboratoires de Recherche BSL3 (Biosecurity Level 3)</li>\r\n<li>Microbiologie Alimentaire</li>\r\n<li>Management de la S&eacute;curit&eacute; Alimentaire</li>\r\n<li>Sensibilisation des employ&eacute;s sur les exigences des syst&egrave;mes de management de la s&eacute;curit&eacute; et de l&rsquo;environnement</li>\r\n<li>HACCP, IFS, PASA, BRC</li>\r\n<li>Qualit&eacute; de Service &agrave; la Client&egrave;le</li>\r\n<li>ISO 22000, ISO9001, ISO14001, OHSAS 18000</li>\r\n<li>Interpr&eacute;tation des exigences de l&rsquo;ISO 14001</li>\r\n<li>S&eacute;curit&eacute; Incendie (Plan d&rsquo;urgences)</li>\r\n<li>Secourisme Indivisuel</li>\r\n<li>Secourisme en Equipe</li>\r\n<li>Sauveteur Secouriste de Travail</li>\r\n<li>Sauvetage et Secourisme Nautique et A&eacute;ronautique</li>\r\n<li>S&eacute;curit&eacute; aux Milieux&nbsp; Travail</li>\r\n<li>Gestion des Crises</li>\r\n<li>Risque Chimiques</li>\r\n<li>Gestion environnementale profitable (GEP)</li>\r\n<li>Sauvetage en Milieux P&eacute;rilleux</li>\r\n<li>Ergonomie au Poste&nbsp; Travail</li>\r\n<li>Manutention Manuelle</li>\r\n<li>L&rsquo;analyse environnementale et le programme de management environnemental</li>\r\n<li>L&rsquo;audit du syst&egrave;me de management environnemental</li>\r\n</ul>', '<p>Sante et securite de travail</p>'),
(8, 'La pharmaceutique', '1_1-3.jpg', '2018-12-25 13:52:13', 10, '0000-00-00 00:00:00', 0, 'Y', '2018-12-25', '', '<ul>\r\n<li>Chimie Alimentaire</li>\r\n<li>Chimie Pharmaceutique</li>\r\n<li>Chimie Analytique</li>\r\n<li>Industrie Pharmaceutique</li>\r\n<li>Qualit&eacute; &amp; Environnement</li>\r\n<li>Production et Management Industriel</li>\r\n<li>S&eacute;curit&eacute; Laboratoire, M&eacute;trologie, Instrumentation Et Gares</li>\r\n<li>Audit Interne Et Contr&ocirc;le</li>\r\n<li>L\'Assistant(e) de Projet en Recherche Clinique</li>\r\n<li>Management de Projets Pharmaceutiques&nbsp;</li>\r\n<li>Les Finances en Recherche Clinique&nbsp;</li>\r\n<li>Perfectionnement en Recherche Clinique&nbsp;</li>\r\n<li>Manager un Projet d\'Essai Clinique&nbsp;</li>\r\n<li>Audits en Recherche Clinique : Objectifs, M&eacute;thodes et Outils&nbsp;</li>\r\n<li>Actualit&eacute;s R&eacute;glementaires en Recherche Clinique&nbsp;</li>\r\n<li>La Mat&eacute;riovigilance dans les Dispositifs M&eacute;dicaux&nbsp;</li>\r\n<li>Introduction au Marketing Pharmaceutique&nbsp;</li>\r\n</ul>', '<p>La pharmaceutique</p>'),
(9, 'Informatique', '1-1.jpg', '2018-12-25 13:53:00', 10, '0000-00-00 00:00:00', 0, 'Y', '2018-12-25', '', '<ul>\r\n<li>&nbsp;Excel Niveau4 : Excel VBA</li>\r\n<li>ASP NET MVC3 D&eacute;veloppement d&rsquo;application WEB</li>\r\n<li>&nbsp;Gestion parc informatique</li>\r\n<li>&nbsp;Access Niveau 4 : Access VBA</li>\r\n<li>&nbsp;Cr&eacute;ation, gestion et maintenance du r&eacute;seau Informatique</li>\r\n<li>&nbsp;Excel Niveau1 : Fondamentaux</li>\r\n<li>Excel Niveau2 : Perfectionnement</li>\r\n<li>&nbsp;Excel Niveau3 : Sp&eacute;cialisations</li>\r\n<li>Powerpoint niveau1 : Fondamentaux</li>\r\n<li>Powerpoint niveau2 : Perfectionnements</li>\r\n<li>&nbsp;Word niveau1 : Fondamentaux</li>\r\n<li>Word niveau2 : Perfectionnements</li>\r\n<li>Word niveau3 : Sp&eacute;cialisation : Rapports, comptes rendus, m&eacute;moires&nbsp;</li>\r\n<li>Word niveau4 : Sp&eacute;cialisation : Formulaires, mailing et e-mailing</li>\r\n<li>Access Niveau 1 : Les bases d&rsquo;Access</li>\r\n<li>Access Niveau 2 : Exploiter une base de donn&eacute;es</li>\r\n<li>&nbsp;Access Niveau 3 : Les Macros</li>\r\n<li>Outlook Niveau1 : Maitriser Outlook</li>\r\n<li>Outlook Niveau2 : Sp&eacute;cial Cadres : Gagner du temps et s&rsquo;organiser avec Outlook</li>\r\n<li>&nbsp;Les Fondamentaux du Web 2.0</li>\r\n<li>Num&eacute;risation et archivage num&eacute;rique</li>\r\n<li>&nbsp;S&eacute;curit&eacute; des applications web</li>\r\n<li>SPSS (Analyse de donn&eacute;es)</li>\r\n<li>&nbsp;Gouvernance de la s&eacute;curit&eacute; informatique (MENACES VULNERABILITES NORMES)</li>\r\n<li>&nbsp;S&eacute;curit&eacute; des Transactions Electroniques</li>\r\n<li>&nbsp;Attaques et Instruisions R&eacute;seaux et Syst&egrave;mes</li>\r\n<li>&nbsp;Mesures outils d&eacute;fense administrateurs</li>\r\n<li>S&eacute;curit&eacute; poste de travail utilisateur</li>\r\n<li>Administration Oracle 11g</li>\r\n<li>&nbsp;S&eacute;curit&eacute; informatique : Les Concepts et les pratiques</li>\r\n<li>Secr&eacute;taire et assistante de direction : perfectionnez votre utilisation de la nouvelle technologie de l&rsquo;information</li>\r\n<li>&nbsp;J2EE (Cycle)</li>\r\n<li>&nbsp;ORACLE (Cycle)</li>\r\n<li>&nbsp;Applications Android</li>\r\n<li>3Ds Max</li>\r\n<li>Illustor</li>\r\n<li>Ergonomie et R&eacute;f&eacute;rencement Web</li>\r\n<li>Macrom&eacute;dia Flash Power Ponit</li>\r\n<li>Photoshop/Quark Express</li>\r\n<li>Adobe Flash</li>\r\n<li>Excel VBA</li>\r\n<li>Alfresco/Omnipage</li>\r\n<li>Formation Programmation Arduino</li>\r\n<li>Ms Project:Gestion des Projets: Principe et cas pratiques avec le logiciel</li>\r\n<li>MS ACCESS:Optimiser et d&eacute;vlopper vos bases de donn&eacute;es avec MS ACCESS</li>\r\n</ul>', '<p>Informatique</p>'),
(10, 'Management de la qualite pour le secteur automobile', '1_1-4.jpg', '2018-12-25 13:53:32', 10, '0000-00-00 00:00:00', 0, 'Y', '2018-12-25', '', '<ul>\r\n<li>Formation &laquo; Auditeur qualit&eacute; interne ISO/TS 16949 :2002 &raquo;</li>\r\n<li>Formation &laquo; Quality manager ISO/TS 16949 :2002 &raquo;</li>\r\n<li>Analyse des modes de d&eacute;faillance de leurs effets et de leur criticit&eacute; &laquo; AMDEC Produit/Processus &raquo;</li>\r\n<li>Gestion des projets d&rsquo;am&eacute;lioration</li>\r\n<li>Ma&icirc;trise statistique des processus (MSP)</li>\r\n<li>Ma&icirc;trise des syst&egrave;mes de mesurage (MSA)</li>\r\n<li>Planification avanc&eacute;e de la qualit&eacute; (APQP)</li>\r\n<li>La d&eacute;marche &laquo; Six Sigma &raquo;</li>\r\n<li>Evaluation du syst&egrave;me ISO/TS 16949 :2002</li>\r\n<li>Le d&eacute;ploiement de la fonction qualit&eacute; (QFD)</li>\r\n<li>Am&eacute;lioration continue, la d&eacute;marche Kaizen</li>\r\n<li>Process FMEA</li>\r\n<li>Lean manufcaturing</li>\r\n</ul>', '<p>Management de la qualite pour le secteur automobile</p>');

-- --------------------------------------------------------

--
-- Structure de la table `ba_categories`
--

CREATE TABLE `ba_categories` (
  `id` int(10) NOT NULL,
  `fr_name` varchar(100) NOT NULL,
  `an_name` varchar(150) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `it_name` varchar(300) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `photos` varchar(300) NOT NULL,
  `fr_description` text NOT NULL,
  `an_description` text NOT NULL,
  `fr_resume` text NOT NULL,
  `couleurs` varchar(20) NOT NULL,
  `created` datetime NOT NULL,
  `usercreated` int(11) NOT NULL,
  `modify` datetime NOT NULL,
  `usermodify` int(11) NOT NULL,
  `etat` enum('Y','N') NOT NULL DEFAULT 'Y',
  `orderm` int(11) NOT NULL,
  `pdf` varchar(300) NOT NULL,
  `parent` int(5) NOT NULL DEFAULT '0',
  `famille` int(11) NOT NULL,
  `photo1` varchar(250) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `ba_comiteperiodes`
--

CREATE TABLE `ba_comiteperiodes` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `etat` enum('Y','N') NOT NULL,
  `orderm` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `usercreated` int(11) NOT NULL,
  `modify` datetime NOT NULL,
  `usermodify` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `ba_comiteperiodes`
--

INSERT INTO `ba_comiteperiodes` (`id`, `name`, `etat`, `orderm`, `created`, `usercreated`, `modify`, `usermodify`) VALUES
(1, '2017-2019', 'Y', 1, '2018-10-30 12:41:23', 10, '0000-00-00 00:00:00', 0);

-- --------------------------------------------------------

--
-- Structure de la table `ba_comites`
--

CREATE TABLE `ba_comites` (
  `id` int(11) NOT NULL,
  `titre` varchar(50) NOT NULL,
  `nom` varchar(200) NOT NULL,
  `prenom` varchar(200) NOT NULL,
  `fonction` varchar(200) NOT NULL,
  `groupe_l` int(11) NOT NULL,
  `grade_id` int(11) NOT NULL,
  `departement` varchar(250) NOT NULL,
  `faculte` varchar(250) NOT NULL,
  `university` varchar(250) NOT NULL,
  `adresse` text NOT NULL,
  `code_postal` int(11) NOT NULL,
  `pays_id` int(11) NOT NULL,
  `ville` varchar(200) NOT NULL,
  `tel` varchar(30) NOT NULL,
  `fax` varchar(30) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `mpar` varchar(200) NOT NULL,
  `cv` text NOT NULL,
  `etat` enum('A','V','C','D') NOT NULL DEFAULT 'A',
  `ran` varchar(200) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `created` datetime NOT NULL,
  `usercreated` int(11) NOT NULL,
  `modify` datetime NOT NULL,
  `usermodify` int(11) NOT NULL,
  `interest` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `ba_contacts`
--

CREATE TABLE `ba_contacts` (
  `id` int(11) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `tel` int(15) NOT NULL,
  `email` varchar(200) NOT NULL,
  `sujet` varchar(500) NOT NULL,
  `statut` varchar(50) NOT NULL,
  `nbr_salarie` int(11) NOT NULL,
  `type_msg` varchar(50) NOT NULL,
  `etat` enum('Y','N') NOT NULL DEFAULT 'Y',
  `created` datetime NOT NULL,
  `usercreated` int(11) NOT NULL,
  `modify` datetime NOT NULL,
  `usermodify` int(11) NOT NULL,
  `message` text NOT NULL,
  `client` varchar(50) NOT NULL,
  `nom_socite` varchar(50) NOT NULL,
  `service_id` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `ba_contacts`
--

INSERT INTO `ba_contacts` (`id`, `nom`, `tel`, `email`, `sujet`, `statut`, `nbr_salarie`, `type_msg`, `etat`, `created`, `usercreated`, `modify`, `usermodify`, `message`, `client`, `nom_socite`, `service_id`) VALUES
(1, 'Yosri Ben Mahfoudh', 2147483647, 'yosri.ben.mahfoudh@gmail.com', 'sazdef', '', 0, '', 'Y', '2019-01-10 10:43:32', 0, '0000-00-00 00:00:00', 0, 'xqsc', '', '', NULL),
(2, 'azezretgr', 1654864, 'nihel.belhadj@gmail.com', 'fgrth', '', 0, '', 'Y', '2019-01-10 10:47:50', 0, '0000-00-00 00:00:00', 0, 'dsfdgf', '', '', NULL),
(3, 'Yosri Ben Mahfoudh', 2147483647, 'yosri.ben.mahfoudh@gmail.com', 'azdefr', '', 0, '', 'Y', '2019-01-15 14:41:37', 0, '0000-00-00 00:00:00', 0, 'DEQFR', '', '', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `ba_contenus`
--

CREATE TABLE `ba_contenus` (
  `id` int(11) NOT NULL,
  `description` text NOT NULL,
  `ar_description` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `an_description` text NOT NULL,
  `created` datetime NOT NULL,
  `usercreated` int(11) NOT NULL,
  `modify` datetime NOT NULL,
  `usermodify` int(11) NOT NULL,
  `position` int(11) NOT NULL,
  `orderm` int(11) NOT NULL,
  `etat` enum('Y','N') NOT NULL,
  `title` varchar(150) NOT NULL,
  `ar_title` varchar(150) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `an_title` varchar(150) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `image` varchar(100) NOT NULL,
  `url` varchar(50) NOT NULL,
  `resume` text NOT NULL,
  `ar_resume` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `fr_resume` text NOT NULL,
  `photo` varchar(300) NOT NULL,
  `mot_cle` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `ba_contenus`
--

INSERT INTO `ba_contenus` (`id`, `description`, `ar_description`, `an_description`, `created`, `usercreated`, `modify`, `usermodify`, `position`, `orderm`, `etat`, `title`, `ar_title`, `an_title`, `menu_id`, `image`, `url`, `resume`, `ar_resume`, `fr_resume`, `photo`, `mot_cle`) VALUES
(1, '<div class=\"single-media\">\r\n<p>Notre cabinet international de formation \"Univers Formation\" cr&eacute;e en 2003 par M HABIB MASMOUDI .</p>\r\n<p>Depuis sa cr&eacute;ation, elle s\'est bien distingu&eacute;e par la qualit&eacute; de ses th&egrave;mes et la qualit&eacute; de ses formateurs. En fait, on organise d\'une mani&egrave;re continue des s&eacute;minaires et des actions de formation (en inter- et intra-entreprise) et dans les diff&eacute;rents domaines (Audit, Qualit&eacute;, Management, Sant&eacute; et S&eacute;curit&eacute; au travail, Achat, Logistique, Pharmaceutique&hellip;) et sp&eacute;cialement dans les th&egrave;mes informatiques et les Techniques industrielles</p>\r\n<ul>\r\n<li><strong>Principe: </strong>Vos besoins sont nos objectifs et vos objectifs sont nos soucis.</li>\r\n<li><strong>Nos Produits : </strong>Des s&eacute;minaires de formation, des cycles de formation continue, des cours de soir, des &eacute;tudes et des diagnostics.</li>\r\n<li><strong>Nos Competences:</strong></li>\r\n</ul>\r\n<h4>La qualit&eacute; de nos formateurs :</h4>\r\n<ul>\r\n<li>des ing&eacute;nieurs recrut&eacute;s et un r&eacute;seaux de professionnels de formation, bien exp&eacute;riment&eacute;s et sp&eacute;cialis&eacute;s dans leurs domaines</li>\r\n</ul>\r\n<h4>Notre p&eacute;dagogie :</h4>\r\n<ul>\r\n<li>Apports th&eacute;oriques concr&eacute;tis&eacute;s par le traitement des cas r&eacute;els, travail de groupe, discussion et transfert des comp&eacute;tences.</li>\r\n<li><strong>Nos moyens </strong>Nouvelles m&eacute;thodes d\'animation, salle de formation bien &eacute;quip&eacute;s, des logiciels informatiques dans tous les domaines et des supports de cours riches et utiles.</li>\r\n</ul>\r\n</div>', '', '', '2017-08-01 22:06:17', 10, '2019-02-05 11:06:46', 10, 0, 0, 'Y', 'PrÃ©sentation', '', '', 1, '', '', '<p>Notre cabinet international de formation \"Univers Formation\" cr&eacute;e en 2003 par M HABIB MASMOUDI .</p>\r\n<p>Depuis sa cr&eacute;ation, elle s\'est bien distingu&eacute;e par la qualit&eacute; de ses th&egrave;mes et la qualit&eacute; de ses formateurs. En fait, on organise d\'une mani&egrave;re continue des s&eacute;minaires et des actions de formation (en inter- et intra-entreprise) et dans les diff&eacute;rents domaines (Audit, Qualit&eacute;, Management, Sant&eacute; et S&eacute;curit&eacute; au travail, Achat, Logistique, Pharmaceutique&hellip;) et sp&eacute;cialement dans les th&egrave;mes informatiques et les Techniques industrielles</p>', '', '', '1.png', '');

-- --------------------------------------------------------

--
-- Structure de la table `ba_demandes`
--

CREATE TABLE `ba_demandes` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `tel` int(15) NOT NULL,
  `etat` enum('Y','N') NOT NULL,
  `objet` varchar(250) NOT NULL,
  `message` text NOT NULL,
  `societe` varchar(250) NOT NULL,
  `nombre` int(11) NOT NULL,
  `autre` varchar(250) NOT NULL,
  `id_formation` int(11) DEFAULT NULL,
  `created` datetime NOT NULL,
  `usercreated` int(11) NOT NULL,
  `modify` datetime NOT NULL,
  `usermodify` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `ba_demandes`
--

INSERT INTO `ba_demandes` (`id`, `nom`, `prenom`, `mail`, `tel`, `etat`, `objet`, `message`, `societe`, `nombre`, `autre`, `id_formation`, `created`, `usercreated`, `modify`, `usermodify`) VALUES
(1, 'Yosri Ben Mahfoudh', '', '', 0, 'Y', '', 'AD', '', 0, '', NULL, '2019-01-16 13:26:50', 0, '0000-00-00 00:00:00', 0),
(2, 'sdgfh', '', 'aaaaa@fez.ds', 153465865, 'Y', '', '', '', 0, '', 3, '2019-01-16 13:45:12', 0, '0000-00-00 00:00:00', 0),
(3, 'Yosri Ben Mahfoudh', '', '', 2147483647, 'Y', 'qx', 'xqs', 'smdi', 12, 'Java JEE', NULL, '2019-01-18 10:22:27', 0, '0000-00-00 00:00:00', 0);

-- --------------------------------------------------------

--
-- Structure de la table `ba_formations`
--

CREATE TABLE `ba_formations` (
  `id` int(11) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `resume` text NOT NULL,
  `description` text NOT NULL,
  `datef` date NOT NULL,
  `photo` varchar(250) NOT NULL,
  `etat` enum('Y','N') NOT NULL,
  `created` datetime NOT NULL,
  `usercreated` int(11) NOT NULL,
  `modify` datetime NOT NULL,
  `usermodify` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `ba_formations`
--

INSERT INTO `ba_formations` (`id`, `titre`, `name`, `resume`, `description`, `datef`, `photo`, `etat`, `created`, `usercreated`, `modify`, `usermodify`) VALUES
(2, 'azfe', 'dzfe', 'zfe', 'ez', '2018-12-29', '2.jpg', 'Y', '2018-12-25 11:35:57', 10, '0000-00-00 00:00:00', 0),
(3, 'Formation Excel', '<p>Excel Niveau2: Perfectionnement</p>', '<p><em>Excel Niveau2&nbsp;</em></p>', '<ul>\r\n<li>Formation agr&eacute;e par l\'Etat N 02-043-13</li>\r\n<li>Facilit&eacute; de paiement</li>\r\n<li>Des fournitures et des documents riches</li>\r\n<li>Groupe R&eacute;duit = 10 personnes Max</li>\r\n</ul>', '2019-01-20', '3.jpg', 'Y', '2019-01-08 11:45:18', 10, '0000-00-00 00:00:00', 0),
(4, 'Entretien et inspection des machines tournantes', '<p>Entretien et inspection des machines tournantes</p>', '<p>Entretien et inspection des machines tournantes</p>', '<p align=\"center\">&nbsp;</p>\r\n<ul>\r\n<li>Formation agr&eacute;e par l\'Etat N 02-043-13</li>\r\n<li>Facilit&eacute; de paiement</li>\r\n<li>Des fournitures et des documents riches</li>\r\n<li>Groupe R&eacute;duit = 10 personnes Max</li>\r\n</ul>', '2019-02-18', '3-0.jpg', 'Y', '2019-01-08 12:47:02', 10, '0000-00-00 00:00:00', 0),
(5, 'Achat Transit et douane', '<p>Achat Transit et douane</p>', '<p>Achat Transit et douane</p>', '<ul>\r\n<li>Formation agr&eacute;e par l\'Etat N 02-043-13</li>\r\n<li>Facilit&eacute; de paiement</li>\r\n<li>Des fournitures et des documents riches</li>\r\n<li>Groupe R&eacute;duit = 10 personnes Max</li>\r\n<li>Dur&eacute;e 3 jours</li>\r\n</ul>', '2019-02-15', '4.jpg', 'Y', '2019-01-08 12:49:33', 10, '0000-00-00 00:00:00', 0);

-- --------------------------------------------------------

--
-- Structure de la table `ba_galeries`
--

CREATE TABLE `ba_galeries` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `etat` enum('Y','N') NOT NULL DEFAULT 'Y',
  `type` enum('P','V') NOT NULL,
  `url` varchar(250) NOT NULL,
  `catpho_name` varchar(100) NOT NULL,
  `created` datetime NOT NULL,
  `usercreated` int(11) NOT NULL,
  `modify` datetime NOT NULL,
  `usermodify` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `ba_galeries`
--

INSERT INTO `ba_galeries` (`id`, `name`, `photo`, `etat`, `type`, `url`, `catpho_name`, `created`, `usercreated`, `modify`, `usermodify`) VALUES
(2, '', 'tors_16.jpg', 'Y', 'P', '', 'evenement3', '2018-10-11 09:39:16', 0, '2018-10-24 11:19:54', 10),
(3, '', 'tors_17.jpg', 'Y', 'P', '', 'evenement3', '2018-10-11 09:39:16', 10, '2018-10-24 11:21:42', 10),
(4, '', 'tors_14.jpg', 'Y', 'P', '', 'evenement2', '2018-10-11 09:41:42', 0, '2018-10-24 11:15:56', 10),
(5, '', 'tors_15.jpg', 'Y', 'P', '', 'evenement2', '2018-10-11 09:41:42', 10, '2018-10-24 11:18:41', 10),
(6, 'aaa', 'tors_13.jpg', 'Y', 'P', '', 'evenement2', '2018-10-11 09:51:34', 10, '2018-10-24 11:15:38', 10),
(7, 'zzzz', 'tors_12.jpg', 'Y', 'P', '', 'evenement1', '2018-10-11 10:02:29', 10, '2018-10-24 11:14:36', 10),
(8, 'mm', 'tors_11.jpg', 'Y', 'P', '', 'evenement1', '2018-10-11 10:03:11', 10, '2018-10-24 11:13:44', 10);

-- --------------------------------------------------------

--
-- Structure de la table `ba_grades`
--

CREATE TABLE `ba_grades` (
  `id` int(11) NOT NULL,
  `grade` varchar(250) DEFAULT NULL,
  `created` datetime NOT NULL,
  `usercreated` int(11) NOT NULL,
  `modify` datetime NOT NULL,
  `usermodifiy` int(11) NOT NULL,
  `etat` enum('Y','N') NOT NULL DEFAULT 'Y',
  `orderm` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `ba_grades`
--

INSERT INTO `ba_grades` (`id`, `grade`, `created`, `usercreated`, `modify`, `usermodifiy`, `etat`, `orderm`) VALUES
(6, NULL, '2018-10-25 10:01:10', 10, '0000-00-00 00:00:00', 0, 'Y', 1),
(3, NULL, '2018-10-25 09:40:22', 10, '0000-00-00 00:00:00', 0, 'Y', 5),
(5, NULL, '2018-10-25 09:51:18', 10, '0000-00-00 00:00:00', 0, 'Y', 0);

-- --------------------------------------------------------

--
-- Structure de la table `ba_imageprods`
--

CREATE TABLE `ba_imageprods` (
  `id` int(11) NOT NULL,
  `photo` varchar(200) NOT NULL,
  `fr_name` varchar(200) NOT NULL,
  `created` datetime NOT NULL,
  `usercreated` int(11) NOT NULL,
  `modify` datetime NOT NULL,
  `usermodify` int(11) NOT NULL,
  `etat` enum('Y','N') NOT NULL DEFAULT 'Y',
  `defau` enum('Y','N') NOT NULL DEFAULT 'N',
  `produit_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `ba_image_contenus`
--

CREATE TABLE `ba_image_contenus` (
  `id` int(11) NOT NULL,
  `namep` varchar(200) NOT NULL,
  `photo` text NOT NULL,
  `contenu_id` int(11) DEFAULT NULL,
  `created` datetime NOT NULL,
  `usercreated` int(11) NOT NULL,
  `modify` datetime NOT NULL,
  `usermodify` int(11) NOT NULL,
  `etat` enum('Y','N') NOT NULL DEFAULT 'Y',
  `defau` enum('Y','N') NOT NULL DEFAULT 'N'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `ba_infosites`
--

CREATE TABLE `ba_infosites` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `adresse` text NOT NULL,
  `fixe` varchar(300) NOT NULL,
  `gsm` varchar(200) NOT NULL,
  `name` varchar(250) NOT NULL,
  `siteweb` varchar(150) NOT NULL,
  `fr_responsable` text NOT NULL,
  `ar_responsable` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `usercreated` int(11) NOT NULL,
  `modify` datetime NOT NULL,
  `usermodify` int(11) NOT NULL,
  `etat` enum('Y','N') NOT NULL,
  `photo` varchar(300) NOT NULL,
  `fax` varchar(30) NOT NULL,
  `maps` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `ba_infosites`
--

INSERT INTO `ba_infosites` (`id`, `email`, `adresse`, `fixe`, `gsm`, `name`, `siteweb`, `fr_responsable`, `ar_responsable`, `created`, `usercreated`, `modify`, `usermodify`, `etat`, `photo`, `fax`, `maps`) VALUES
(1, 'contact@univers-formation.com', 'Route de Sousse Km 5.5 GP1 Immeuble ChÃ©rif Bureau NÂ° 5 Ben Arous', '(+216) 71 388 000   ', '', '', '', '', '', '2017-06-06 00:59:48', 10, '2019-02-14 23:22:16', 10, 'Y', '', '(+216) 71 387 200     ', '');

-- --------------------------------------------------------

--
-- Structure de la table `ba_ligneadherperiodes`
--

CREATE TABLE `ba_ligneadherperiodes` (
  `id` int(11) NOT NULL,
  `adherents_id` int(11) NOT NULL,
  `adherperiodes_id` int(11) NOT NULL,
  `etat` enum('Y','N') NOT NULL DEFAULT 'Y',
  `orderm` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `usercreated` int(11) NOT NULL,
  `modify` datetime NOT NULL,
  `usermodify` int(11) NOT NULL,
  `type` enum('A','C') NOT NULL,
  `fonction` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `ba_ligneadherperiodes`
--

INSERT INTO `ba_ligneadherperiodes` (`id`, `adherents_id`, `adherperiodes_id`, `etat`, `orderm`, `created`, `usercreated`, `modify`, `usermodify`, `type`, `fonction`) VALUES
(1, 7, 1, 'Y', 0, '2018-10-31 11:12:20', 10, '0000-00-00 00:00:00', 0, 'A', ''),
(2, 8, 1, 'Y', 0, '2018-10-31 11:12:31', 10, '0000-00-00 00:00:00', 0, 'A', ''),
(3, 9, 1, 'Y', 0, '2018-10-31 11:12:42', 10, '0000-00-00 00:00:00', 0, 'A', ''),
(4, 10, 1, 'Y', 0, '2018-10-31 11:13:09', 10, '0000-00-00 00:00:00', 0, 'A', ''),
(5, 11, 1, 'Y', 0, '2018-10-31 11:13:50', 10, '0000-00-00 00:00:00', 0, 'A', ''),
(6, 12, 1, 'Y', 0, '2018-10-31 11:14:01', 10, '0000-00-00 00:00:00', 0, 'A', ''),
(7, 13, 1, 'Y', 0, '2018-10-31 11:14:16', 10, '0000-00-00 00:00:00', 0, 'A', ''),
(8, 14, 1, 'Y', 0, '2018-10-31 11:14:35', 10, '0000-00-00 00:00:00', 0, 'A', ''),
(9, 15, 1, 'Y', 0, '2018-10-31 11:15:14', 10, '0000-00-00 00:00:00', 0, 'A', ''),
(10, 1, 1, 'Y', 0, '2018-10-31 11:15:37', 10, '0000-00-00 00:00:00', 0, 'A', ''),
(11, 16, 1, 'Y', 0, '2018-10-31 11:15:55', 10, '0000-00-00 00:00:00', 0, 'A', ''),
(12, 17, 1, 'Y', 0, '2018-10-31 11:16:12', 10, '0000-00-00 00:00:00', 0, 'A', ''),
(13, 7, 2, 'Y', 0, '2018-10-31 15:50:35', 10, '2018-10-31 15:51:11', 10, 'A', ''),
(14, 9, 2, 'Y', 0, '2018-10-31 15:52:09', 10, '0000-00-00 00:00:00', 0, 'A', ''),
(15, 11, 2, 'Y', 0, '2018-10-31 15:52:44', 10, '0000-00-00 00:00:00', 0, 'A', ''),
(16, 8, 2, 'Y', 0, '2018-10-31 15:53:03', 10, '0000-00-00 00:00:00', 0, 'A', ''),
(17, 13, 2, 'Y', 0, '2018-10-31 15:53:26', 10, '0000-00-00 00:00:00', 0, 'A', ''),
(18, 12, 2, 'Y', 0, '2018-10-31 15:53:57', 10, '0000-00-00 00:00:00', 0, 'A', ''),
(19, 20, 2, 'Y', 0, '2018-10-31 15:54:38', 10, '0000-00-00 00:00:00', 0, 'A', ''),
(20, 5, 2, 'Y', 0, '2018-10-31 15:56:47', 10, '0000-00-00 00:00:00', 0, 'A', ''),
(21, 21, 2, 'Y', 0, '2018-10-31 15:58:15', 10, '0000-00-00 00:00:00', 0, 'A', ''),
(22, 22, 2, 'Y', 0, '2018-10-31 15:59:08', 10, '0000-00-00 00:00:00', 0, 'A', ''),
(23, 23, 2, 'Y', 0, '2018-10-31 15:59:58', 10, '0000-00-00 00:00:00', 0, 'A', ''),
(24, 24, 2, 'Y', 0, '2018-10-31 16:00:29', 10, '0000-00-00 00:00:00', 0, 'A', ''),
(25, 25, 2, 'Y', 0, '2018-10-31 16:01:11', 10, '0000-00-00 00:00:00', 0, 'A', ''),
(26, 26, 2, 'Y', 0, '2018-10-31 16:01:44', 10, '0000-00-00 00:00:00', 0, 'A', ''),
(27, 2, 2, 'Y', 0, '2018-10-31 16:02:19', 10, '0000-00-00 00:00:00', 0, 'A', ''),
(28, 27, 2, 'Y', 0, '2018-10-31 16:04:16', 10, '0000-00-00 00:00:00', 0, 'A', ''),
(29, 28, 2, 'Y', 0, '2018-10-31 16:05:04', 10, '0000-00-00 00:00:00', 0, 'A', ''),
(30, 29, 2, 'Y', 0, '2018-10-31 16:06:33', 10, '0000-00-00 00:00:00', 0, 'A', ''),
(31, 10, 2, 'Y', 0, '2018-10-31 16:07:40', 10, '0000-00-00 00:00:00', 0, 'A', ''),
(32, 30, 2, 'Y', 0, '2018-10-31 16:08:29', 10, '0000-00-00 00:00:00', 0, 'A', ''),
(33, 31, 2, 'Y', 0, '2018-10-31 16:09:13', 10, '0000-00-00 00:00:00', 0, 'A', ''),
(34, 32, 2, 'Y', 0, '2018-10-31 16:10:09', 10, '0000-00-00 00:00:00', 0, 'A', ''),
(35, 33, 2, 'Y', 0, '2018-10-31 16:10:59', 10, '0000-00-00 00:00:00', 0, 'A', ''),
(36, 34, 2, 'Y', 0, '2018-10-31 16:11:30', 10, '0000-00-00 00:00:00', 0, 'A', ''),
(37, 35, 2, 'Y', 0, '2018-10-31 16:11:52', 10, '0000-00-00 00:00:00', 0, 'A', ''),
(38, 36, 2, 'Y', 0, '2018-10-31 16:12:25', 10, '0000-00-00 00:00:00', 0, 'A', ''),
(39, 37, 2, 'Y', 0, '2018-10-31 16:12:55', 10, '0000-00-00 00:00:00', 0, 'A', ''),
(40, 38, 2, 'Y', 0, '2018-10-31 16:13:43', 10, '0000-00-00 00:00:00', 0, 'A', ''),
(41, 39, 2, 'Y', 0, '2018-10-31 16:14:10', 10, '0000-00-00 00:00:00', 0, 'A', ''),
(42, 40, 2, 'Y', 0, '2018-10-31 16:16:50', 10, '0000-00-00 00:00:00', 0, 'A', ''),
(43, 41, 2, 'Y', 0, '2018-10-31 16:17:08', 10, '0000-00-00 00:00:00', 0, 'A', ''),
(44, 42, 2, 'Y', 0, '2018-10-31 16:17:38', 10, '0000-00-00 00:00:00', 0, 'A', ''),
(45, 43, 2, 'Y', 0, '2018-10-31 16:18:53', 10, '0000-00-00 00:00:00', 0, 'A', ''),
(46, 44, 2, 'Y', 0, '2018-10-31 16:19:14', 10, '0000-00-00 00:00:00', 0, 'A', ''),
(47, 1, 2, 'Y', 0, '2018-10-31 16:19:55', 10, '0000-00-00 00:00:00', 0, 'A', ''),
(48, 45, 2, 'Y', 0, '2018-10-31 16:20:18', 10, '0000-00-00 00:00:00', 0, 'A', ''),
(49, 46, 2, 'Y', 0, '2018-10-31 16:22:35', 10, '0000-00-00 00:00:00', 0, 'A', ''),
(50, 47, 2, 'Y', 0, '2018-10-31 16:24:46', 10, '0000-00-00 00:00:00', 0, 'A', ''),
(51, 48, 2, 'Y', 0, '2018-10-31 16:25:47', 10, '0000-00-00 00:00:00', 0, 'A', ''),
(52, 49, 2, 'Y', 0, '2018-10-31 16:26:53', 10, '0000-00-00 00:00:00', 0, 'A', ''),
(53, 50, 2, 'Y', 0, '2018-10-31 16:27:22', 10, '0000-00-00 00:00:00', 0, 'A', ''),
(54, 6, 2, 'Y', 0, '2018-10-31 16:27:49', 10, '0000-00-00 00:00:00', 0, 'A', ''),
(55, 51, 2, 'Y', 0, '2018-10-31 16:28:20', 10, '0000-00-00 00:00:00', 0, 'A', ''),
(56, 52, 2, 'Y', 0, '2018-10-31 16:28:48', 10, '0000-00-00 00:00:00', 0, 'A', ''),
(57, 53, 2, 'Y', 0, '2018-10-31 16:29:12', 10, '0000-00-00 00:00:00', 0, 'A', ''),
(58, 54, 2, 'Y', 0, '2018-10-31 16:29:39', 10, '0000-00-00 00:00:00', 0, 'A', ''),
(59, 5, 3, 'Y', 0, '2018-10-31 16:30:10', 10, '0000-00-00 00:00:00', 0, 'A', ''),
(60, 55, 3, 'Y', 0, '2018-10-31 16:30:39', 10, '0000-00-00 00:00:00', 0, 'A', ''),
(61, 56, 3, 'Y', 0, '2018-10-31 16:30:59', 10, '0000-00-00 00:00:00', 0, 'A', ''),
(62, 57, 3, 'Y', 0, '2018-10-31 16:31:30', 10, '0000-00-00 00:00:00', 0, 'A', ''),
(63, 58, 3, 'Y', 0, '2018-10-31 16:32:03', 10, '0000-00-00 00:00:00', 0, 'A', ''),
(64, 59, 3, 'Y', 0, '2018-10-31 16:32:34', 10, '0000-00-00 00:00:00', 0, 'A', ''),
(65, 60, 3, 'Y', 0, '2018-10-31 16:35:01', 10, '0000-00-00 00:00:00', 0, 'A', ''),
(66, 61, 3, 'Y', 0, '2018-10-31 16:36:21', 10, '0000-00-00 00:00:00', 0, 'A', ''),
(67, 13, 3, 'Y', 0, '2018-10-31 16:36:53', 10, '0000-00-00 00:00:00', 0, 'A', ''),
(68, 62, 3, 'Y', 0, '2018-10-31 16:37:29', 10, '0000-00-00 00:00:00', 0, 'A', ''),
(69, 12, 3, 'Y', 0, '2018-10-31 16:38:10', 10, '0000-00-00 00:00:00', 0, 'A', ''),
(70, 2, 3, 'Y', 0, '2018-10-31 16:38:30', 10, '0000-00-00 00:00:00', 0, 'A', ''),
(71, 27, 3, 'Y', 0, '2018-10-31 16:38:57', 10, '0000-00-00 00:00:00', 0, 'A', ''),
(72, 63, 3, 'Y', 0, '2018-10-31 16:39:22', 10, '0000-00-00 00:00:00', 0, 'A', ''),
(73, 64, 3, 'Y', 0, '2018-10-31 16:40:05', 10, '0000-00-00 00:00:00', 0, 'A', ''),
(74, 8, 3, 'Y', 0, '2018-10-31 16:40:45', 10, '0000-00-00 00:00:00', 0, 'A', ''),
(75, 3, 3, 'Y', 0, '2018-10-31 16:41:26', 10, '0000-00-00 00:00:00', 0, 'A', ''),
(76, 65, 3, 'Y', 0, '2018-10-31 16:41:51', 10, '0000-00-00 00:00:00', 0, 'A', ''),
(77, 16, 3, 'Y', 0, '2018-10-31 16:42:42', 10, '0000-00-00 00:00:00', 0, 'A', ''),
(78, 32, 3, 'Y', 0, '2018-10-31 16:43:01', 10, '0000-00-00 00:00:00', 0, 'A', ''),
(79, 35, 3, 'Y', 0, '2018-10-31 16:43:25', 10, '0000-00-00 00:00:00', 0, 'A', ''),
(80, 66, 3, 'Y', 0, '2018-10-31 16:43:49', 10, '0000-00-00 00:00:00', 0, 'A', ''),
(81, 67, 3, 'Y', 0, '2018-10-31 16:44:13', 10, '0000-00-00 00:00:00', 0, 'A', ''),
(82, 38, 3, 'Y', 0, '2018-10-31 16:44:35', 10, '0000-00-00 00:00:00', 0, 'A', ''),
(83, 68, 3, 'Y', 0, '2018-10-31 16:45:02', 10, '0000-00-00 00:00:00', 0, 'A', ''),
(84, 43, 3, 'Y', 0, '2018-10-31 16:45:27', 10, '0000-00-00 00:00:00', 0, 'A', ''),
(85, 11, 3, 'Y', 0, '2018-10-31 16:45:45', 10, '0000-00-00 00:00:00', 0, 'A', ''),
(86, 4, 3, 'Y', 0, '2018-10-31 16:46:13', 10, '0000-00-00 00:00:00', 0, 'A', ''),
(87, 69, 3, 'Y', 0, '2018-10-31 16:46:39', 10, '0000-00-00 00:00:00', 0, 'A', ''),
(88, 44, 3, 'Y', 0, '2018-10-31 16:47:09', 10, '0000-00-00 00:00:00', 0, 'A', ''),
(89, 1, 3, 'Y', 0, '2018-10-31 16:47:53', 10, '0000-00-00 00:00:00', 0, 'A', ''),
(90, 45, 3, 'Y', 0, '2018-10-31 16:48:17', 10, '0000-00-00 00:00:00', 0, 'A', ''),
(91, 70, 3, 'Y', 0, '2018-10-31 16:48:44', 10, '0000-00-00 00:00:00', 0, 'A', ''),
(92, 46, 3, 'Y', 0, '2018-10-31 16:49:07', 10, '0000-00-00 00:00:00', 0, 'A', ''),
(93, 7, 3, 'Y', 0, '2018-10-31 16:49:32', 10, '0000-00-00 00:00:00', 0, 'A', ''),
(94, 48, 3, 'Y', 0, '2018-10-31 16:49:50', 10, '0000-00-00 00:00:00', 0, 'A', ''),
(95, 71, 3, 'Y', 0, '2018-10-31 16:50:15', 10, '0000-00-00 00:00:00', 0, 'A', ''),
(96, 72, 3, 'Y', 0, '2018-10-31 16:50:41', 10, '0000-00-00 00:00:00', 0, 'A', ''),
(97, 6, 3, 'Y', 0, '2018-10-31 16:50:57', 10, '0000-00-00 00:00:00', 0, 'A', ''),
(98, 73, 3, 'Y', 1, '2018-10-31 16:51:30', 10, '0000-00-00 00:00:00', 0, 'A', ''),
(99, 15, 3, 'Y', 0, '2018-10-31 16:55:01', 10, '0000-00-00 00:00:00', 0, 'A', ''),
(100, 74, 3, 'Y', 0, '2018-10-31 16:56:20', 10, '0000-00-00 00:00:00', 0, 'A', ''),
(101, 52, 3, 'Y', 0, '2018-10-31 16:56:46', 10, '0000-00-00 00:00:00', 0, 'A', ''),
(102, 75, 3, 'Y', 0, '2018-10-31 16:57:18', 10, '0000-00-00 00:00:00', 0, 'A', ''),
(103, 76, 3, 'Y', 0, '2018-10-31 16:57:33', 10, '0000-00-00 00:00:00', 0, 'A', ''),
(104, 77, 4, 'Y', 0, '2018-11-01 08:23:18', 10, '0000-00-00 00:00:00', 0, 'A', ''),
(105, 78, 4, 'Y', 0, '2018-11-01 08:23:50', 10, '0000-00-00 00:00:00', 0, 'A', ''),
(106, 12, 4, 'Y', 0, '2018-11-01 08:24:09', 10, '0000-00-00 00:00:00', 0, 'A', ''),
(107, 79, 4, 'Y', 0, '2018-11-01 08:25:58', 10, '0000-00-00 00:00:00', 0, 'A', ''),
(108, 80, 4, 'Y', 0, '2018-11-01 08:26:32', 10, '0000-00-00 00:00:00', 0, 'A', ''),
(109, 3, 4, 'Y', 0, '2018-11-01 08:26:52', 10, '0000-00-00 00:00:00', 0, 'A', ''),
(110, 81, 4, 'Y', 0, '2018-11-01 08:32:31', 10, '0000-00-00 00:00:00', 0, 'A', ''),
(111, 43, 4, 'Y', 0, '2018-11-01 08:32:54', 10, '0000-00-00 00:00:00', 0, 'A', ''),
(112, 64, 4, 'Y', 0, '2018-11-01 08:33:16', 10, '0000-00-00 00:00:00', 0, 'A', ''),
(113, 83, 4, 'Y', 0, '2018-11-01 08:34:44', 10, '0000-00-00 00:00:00', 0, 'A', ''),
(114, 31, 4, 'Y', 0, '2018-11-01 08:35:12', 10, '0000-00-00 00:00:00', 0, 'A', ''),
(115, 17, 4, 'Y', 0, '2018-11-01 08:35:31', 10, '0000-00-00 00:00:00', 0, 'A', ''),
(116, 2, 4, 'Y', 0, '2018-11-01 08:36:02', 10, '0000-00-00 00:00:00', 0, 'A', ''),
(117, 68, 4, 'Y', 0, '2018-11-01 08:36:27', 10, '0000-00-00 00:00:00', 0, 'A', ''),
(118, 52, 4, 'Y', 0, '2018-11-01 08:37:18', 10, '0000-00-00 00:00:00', 0, 'A', ''),
(119, 45, 4, 'Y', 0, '2018-11-01 08:37:38', 10, '0000-00-00 00:00:00', 0, 'A', ''),
(120, 84, 4, 'Y', 0, '2018-11-01 08:37:56', 10, '0000-00-00 00:00:00', 0, 'A', ''),
(121, 7, 4, 'Y', 0, '2018-11-01 08:38:14', 10, '0000-00-00 00:00:00', 0, 'A', ''),
(122, 48, 4, 'Y', 0, '2018-11-01 08:38:33', 10, '0000-00-00 00:00:00', 0, 'A', ''),
(123, 76, 4, 'Y', 0, '2018-11-01 08:38:50', 10, '0000-00-00 00:00:00', 0, 'A', ''),
(124, 13, 4, 'Y', 0, '2018-11-01 08:44:21', 10, '0000-00-00 00:00:00', 0, 'A', ''),
(125, 85, 4, 'Y', 0, '2018-11-01 08:44:48', 10, '0000-00-00 00:00:00', 0, 'A', ''),
(126, 86, 4, 'Y', 0, '2018-11-01 08:45:10', 10, '0000-00-00 00:00:00', 0, 'A', ''),
(127, 6, 4, 'Y', 0, '2018-11-01 08:45:28', 10, '0000-00-00 00:00:00', 0, 'A', ''),
(128, 11, 4, 'Y', 0, '2018-11-01 08:45:51', 10, '0000-00-00 00:00:00', 0, 'A', ''),
(129, 87, 4, 'Y', 0, '2018-11-01 08:46:15', 10, '0000-00-00 00:00:00', 0, 'A', ''),
(130, 16, 4, 'Y', 0, '2018-11-01 08:46:36', 10, '0000-00-00 00:00:00', 0, 'A', ''),
(131, 9, 4, 'Y', 0, '2018-11-01 08:47:12', 10, '0000-00-00 00:00:00', 0, 'A', ''),
(132, 5, 4, 'Y', 0, '2018-11-01 08:47:30', 10, '0000-00-00 00:00:00', 0, 'A', ''),
(133, 4, 4, 'Y', 0, '2018-11-01 08:48:05', 10, '0000-00-00 00:00:00', 0, 'A', ''),
(134, 89, 4, 'Y', 0, '2018-11-01 08:48:27', 10, '0000-00-00 00:00:00', 0, 'A', ''),
(135, 90, 4, 'Y', 0, '2018-11-01 08:48:54', 10, '0000-00-00 00:00:00', 0, 'A', ''),
(136, 91, 4, 'Y', 0, '2018-11-01 08:49:17', 10, '0000-00-00 00:00:00', 0, 'A', ''),
(137, 115, 4, 'Y', 0, '2018-11-01 08:51:49', 10, '0000-00-00 00:00:00', 0, 'A', ''),
(138, 1, 4, 'Y', 0, '2018-11-01 08:52:45', 10, '0000-00-00 00:00:00', 0, 'A', ''),
(139, 92, 4, 'Y', 0, '2018-11-01 08:53:16', 10, '0000-00-00 00:00:00', 0, 'A', ''),
(140, 93, 4, 'Y', 0, '2018-11-01 08:53:54', 10, '0000-00-00 00:00:00', 0, 'A', ''),
(141, 94, 5, 'Y', 0, '2018-11-01 08:54:25', 10, '0000-00-00 00:00:00', 0, 'A', ''),
(142, 95, 5, 'Y', 0, '2018-11-01 08:56:05', 10, '0000-00-00 00:00:00', 0, 'A', ''),
(143, 96, 5, 'Y', 0, '2018-11-01 08:56:27', 10, '0000-00-00 00:00:00', 0, 'A', ''),
(144, 97, 5, 'Y', 0, '2018-11-01 08:56:51', 10, '0000-00-00 00:00:00', 0, 'A', ''),
(145, 98, 5, 'Y', 0, '2018-11-01 08:57:52', 10, '0000-00-00 00:00:00', 0, 'A', ''),
(146, 99, 5, 'Y', 0, '2018-11-01 08:58:11', 10, '0000-00-00 00:00:00', 0, 'A', ''),
(147, 12, 5, 'Y', 0, '2018-11-01 08:58:30', 10, '0000-00-00 00:00:00', 0, 'A', ''),
(148, 5, 5, 'Y', 0, '2018-11-01 08:59:01', 10, '0000-00-00 00:00:00', 0, 'A', ''),
(149, 4, 5, 'Y', 0, '2018-11-01 08:59:20', 10, '0000-00-00 00:00:00', 0, 'A', ''),
(150, 76, 5, 'Y', 0, '2018-11-01 08:59:35', 10, '0000-00-00 00:00:00', 0, 'A', ''),
(151, 100, 5, 'Y', 0, '2018-11-01 09:00:37', 10, '0000-00-00 00:00:00', 0, 'A', ''),
(152, 16, 5, 'Y', 0, '2018-11-01 09:00:53', 10, '0000-00-00 00:00:00', 0, 'A', ''),
(153, 43, 5, 'Y', 0, '2018-11-01 09:01:22', 10, '0000-00-00 00:00:00', 0, 'A', ''),
(154, 3, 5, 'Y', 0, '2018-11-01 09:01:55', 10, '0000-00-00 00:00:00', 0, 'A', ''),
(155, 1, 5, 'Y', 0, '2018-11-01 09:02:11', 10, '0000-00-00 00:00:00', 0, 'A', ''),
(156, 2, 5, 'Y', 0, '2018-11-01 09:02:31', 10, '0000-00-00 00:00:00', 0, 'A', ''),
(157, 6, 5, 'Y', 0, '2018-11-01 09:03:14', 10, '0000-00-00 00:00:00', 0, 'A', ''),
(158, 84, 5, 'Y', 0, '2018-11-01 09:03:35', 10, '0000-00-00 00:00:00', 0, 'A', ''),
(159, 36, 5, 'Y', 0, '2018-11-01 09:04:53', 10, '0000-00-00 00:00:00', 0, 'A', ''),
(160, 45, 5, 'Y', 0, '2018-11-01 09:05:30', 10, '0000-00-00 00:00:00', 0, 'A', ''),
(161, 101, 5, 'Y', 0, '2018-11-01 09:06:12', 10, '0000-00-00 00:00:00', 0, 'A', ''),
(162, 80, 5, 'Y', 0, '2018-11-01 09:06:40', 10, '0000-00-00 00:00:00', 0, 'A', ''),
(163, 56, 5, 'Y', 0, '2018-11-01 09:06:58', 10, '0000-00-00 00:00:00', 0, 'A', ''),
(164, 102, 5, 'Y', 0, '2018-11-01 09:07:34', 10, '0000-00-00 00:00:00', 0, 'A', ''),
(165, 103, 5, 'Y', 0, '2018-11-01 09:07:59', 10, '0000-00-00 00:00:00', 0, 'A', ''),
(166, 68, 5, 'Y', 0, '2018-11-01 09:08:33', 10, '0000-00-00 00:00:00', 0, 'A', ''),
(167, 46, 5, 'Y', 0, '2018-11-01 09:09:07', 10, '0000-00-00 00:00:00', 0, 'A', ''),
(168, 13, 5, 'Y', 0, '2018-11-01 09:09:30', 10, '0000-00-00 00:00:00', 0, 'A', ''),
(169, 105, 5, 'Y', 0, '2018-11-01 09:09:46', 10, '0000-00-00 00:00:00', 0, 'A', ''),
(170, 27, 5, 'Y', 0, '2018-11-01 09:10:03', 10, '0000-00-00 00:00:00', 0, 'A', ''),
(171, 104, 5, 'Y', 0, '2018-11-01 09:10:33', 10, '0000-00-00 00:00:00', 0, 'A', ''),
(172, 52, 5, 'Y', 0, '2018-11-01 09:10:55', 10, '0000-00-00 00:00:00', 0, 'A', ''),
(173, 90, 5, 'Y', 0, '2018-11-01 09:11:57', 10, '0000-00-00 00:00:00', 0, 'A', ''),
(174, 106, 5, 'Y', 0, '2018-11-01 09:12:14', 10, '0000-00-00 00:00:00', 0, 'A', ''),
(175, 107, 5, 'Y', 0, '2018-11-01 09:12:51', 10, '0000-00-00 00:00:00', 0, 'A', ''),
(176, 108, 5, 'Y', 0, '2018-11-01 09:13:11', 10, '0000-00-00 00:00:00', 0, 'A', ''),
(177, 109, 5, 'Y', 0, '2018-11-01 09:13:31', 10, '0000-00-00 00:00:00', 0, 'A', ''),
(178, 110, 5, 'Y', 0, '2018-11-01 09:13:47', 10, '0000-00-00 00:00:00', 0, 'A', ''),
(179, 83, 5, 'Y', 0, '2018-11-01 09:14:02', 10, '0000-00-00 00:00:00', 0, 'A', ''),
(180, 31, 5, 'Y', 0, '2018-11-01 09:14:31', 10, '0000-00-00 00:00:00', 0, 'A', ''),
(181, 23, 5, 'Y', 0, '2018-11-01 09:15:00', 10, '0000-00-00 00:00:00', 0, 'A', ''),
(182, 17, 5, 'Y', 0, '2018-11-01 09:15:16', 10, '0000-00-00 00:00:00', 0, 'A', ''),
(183, 111, 5, 'Y', 0, '2018-11-01 09:15:46', 10, '0000-00-00 00:00:00', 0, 'A', ''),
(184, 8, 5, 'Y', 0, '2018-11-01 09:16:02', 10, '0000-00-00 00:00:00', 0, 'A', ''),
(185, 112, 5, 'Y', 0, '2018-11-01 09:16:21', 10, '0000-00-00 00:00:00', 0, 'A', ''),
(186, 11, 5, 'Y', 0, '2018-11-01 09:17:27', 10, '0000-00-00 00:00:00', 0, 'A', ''),
(187, 7, 5, 'Y', 0, '2018-11-01 09:17:46', 10, '0000-00-00 00:00:00', 0, 'A', ''),
(188, 48, 5, 'Y', 0, '2018-11-01 09:18:03', 10, '0000-00-00 00:00:00', 0, 'A', ''),
(189, 86, 5, 'Y', 0, '2018-11-01 09:18:43', 10, '0000-00-00 00:00:00', 0, 'A', ''),
(190, 113, 5, 'Y', 0, '2018-11-01 09:19:02', 10, '0000-00-00 00:00:00', 0, 'A', ''),
(191, 114, 5, 'Y', 0, '2018-11-01 09:19:17', 10, '0000-00-00 00:00:00', 0, 'A', ''),
(192, 41, 5, 'Y', 0, '2018-11-01 09:19:31', 10, '0000-00-00 00:00:00', 0, 'A', '');

-- --------------------------------------------------------

--
-- Structure de la table `ba_lignecomiteperiodes`
--

CREATE TABLE `ba_lignecomiteperiodes` (
  `id` int(11) NOT NULL,
  `adherents_id` int(11) NOT NULL,
  `comiteperiodes_id` int(11) NOT NULL,
  `etat` enum('Y','N') NOT NULL DEFAULT 'Y',
  `orderm` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `usercreated` int(11) NOT NULL,
  `modify` datetime NOT NULL,
  `usermodify` int(11) NOT NULL,
  `fonction` varchar(250) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `ba_lignecomiteperiodes`
--

INSERT INTO `ba_lignecomiteperiodes` (`id`, `adherents_id`, `comiteperiodes_id`, `etat`, `orderm`, `created`, `usercreated`, `modify`, `usermodify`, `fonction`) VALUES
(1, 1, 1, 'Y', 0, '2018-10-30 13:18:03', 10, '0000-00-00 00:00:00', 0, 'PrÃ©sidente de lâ€™association '),
(2, 2, 1, 'Y', 0, '2018-10-30 13:18:38', 10, '0000-00-00 00:00:00', 0, 'Vice-prÃ©sident'),
(3, 3, 1, 'Y', 0, '2018-10-30 13:19:33', 10, '0000-00-00 00:00:00', 0, 'SecrÃ©taire gÃ©nÃ©rale '),
(4, 4, 1, 'Y', 0, '2018-10-30 13:21:50', 10, '0000-00-00 00:00:00', 0, 'Vice SecrÃ©taire gÃ©nÃ©rale'),
(5, 5, 1, 'Y', 0, '2018-10-30 13:20:45', 10, '0000-00-00 00:00:00', 0, 'TrÃ©sorier '),
(6, 6, 1, 'Y', 0, '2018-10-30 13:21:09', 10, '0000-00-00 00:00:00', 0, 'Vice-TrÃ©sorier ');

-- --------------------------------------------------------

--
-- Structure de la table `ba_menus`
--

CREATE TABLE `ba_menus` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `created` datetime NOT NULL,
  `usercreated` int(11) NOT NULL,
  `modify` datetime NOT NULL,
  `usermodify` int(11) NOT NULL,
  `url` varchar(100) NOT NULL,
  `parent` int(11) NOT NULL,
  `orderm` int(11) NOT NULL,
  `etat` enum('Y','N') NOT NULL,
  `photo` text NOT NULL,
  `type` int(11) NOT NULL COMMENT '"1"=>"Accueil","2"=>"contenu","3"=>"produit","4"=>"actualité","5"=>"contact",,"7"=>"Service"'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `ba_menus`
--

INSERT INTO `ba_menus` (`id`, `name`, `created`, `usercreated`, `modify`, `usermodify`, `url`, `parent`, `orderm`, `etat`, `photo`, `type`) VALUES
(1, 'Accueil', '2017-07-13 19:35:12', 10, '2019-01-09 09:44:13', 10, '', 0, 1, 'Y', '2.jpg', 1),
(2, 'PrÃ©sentation', '2017-07-13 19:36:02', 10, '2019-03-14 14:20:03', 10, '', 0, 2, 'Y', '1-0.jpg', 0),
(3, 'Services', '2017-07-13 19:36:31', 10, '2018-12-26 15:29:42', 10, '', 0, 3, 'Y', '1.jpg', 7),
(4, 'RÃ©fÃ©rences', '2017-07-13 19:37:11', 10, '2019-03-14 11:38:14', 10, 'references', 0, 4, 'Y', '22068994_10214216680952515_621476176_o.jpg', 0),
(5, 'Actualites', '2018-10-09 15:26:51', 10, '2019-03-14 11:54:13', 10, 'actualites', 0, 5, 'Y', '2-0.jpg', 0),
(6, 'Contact', '2018-10-09 15:32:16', 10, '2019-03-14 11:54:39', 10, 'contact', 0, 6, 'Y', '1-1.jpg', 0),
(7, 'RÃ©fÃ©rences', '2018-10-09 15:32:39', 10, '2019-03-14 11:54:52', 10, '', 0, 7, 'N', '2-1.jpg', 0),
(8, 'Contact', '2018-10-09 15:33:10', 10, '2019-03-14 11:55:01', 10, '', 0, 9, 'N', '1-2.jpg', 0),
(16, 'Partenaires', '2019-01-18 12:23:08', 10, '2019-03-14 11:58:11', 10, '', 0, 8, 'N', '', 0),
(15, 'Formations', '2019-01-08 08:55:54', 10, '2019-03-14 11:55:11', 10, '', 0, 4, 'N', '', 0),
(17, 'Sous catalogues', '2019-03-04 16:05:14', 10, '2019-03-14 11:58:25', 10, '', 0, 0, 'N', '', 0);

-- --------------------------------------------------------

--
-- Structure de la table `ba_partenaires`
--

CREATE TABLE `ba_partenaires` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `typepartenaire` enum('A','I') NOT NULL,
  `created` datetime NOT NULL,
  `usercreated` int(11) NOT NULL,
  `modify` datetime NOT NULL,
  `usermodify` int(11) NOT NULL,
  `etat` enum('Y','N') NOT NULL DEFAULT 'Y',
  `defau` enum('Y','N') NOT NULL DEFAULT 'N',
  `photo` varchar(200) NOT NULL,
  `url` varchar(250) NOT NULL,
  `catpar_name` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `ba_partenaires`
--

INSERT INTO `ba_partenaires` (`id`, `name`, `typepartenaire`, `created`, `usercreated`, `modify`, `usermodify`, `etat`, `defau`, `photo`, `url`, `catpar_name`) VALUES
(4, 'ACOSERV', 'A', '2017-07-28 17:50:10', 10, '2019-01-18 12:08:02', 10, 'Y', 'N', 'acoserv-0.jpg', 'https://www.facebook.com/groups/ADISGI/', 'Academique'),
(10, 'Groupe ONE TECH', 'A', '2018-12-25 12:51:08', 10, '2019-01-04 13:39:07', 10, 'Y', 'N', 'one_tech.jpg', '', ''),
(5, 'Cafe ben yedder', 'I', '2017-07-28 21:15:48', 10, '2019-01-04 13:35:42', 10, 'Y', 'N', 'ben_yeder.jpg', 'https://www.polyclinique-ibnkhaldoun.com.tn/', 'Industrielle '),
(6, 'Bonna beton', 'I', '2017-07-28 22:36:27', 10, '2019-01-04 13:35:56', 10, 'Y', 'N', 'bonna.jpg', 'http://www.zmc.com.tn/', 'Industrielle'),
(8, 'ETM', 'A', '2018-10-24 11:39:23', 10, '2019-01-04 13:36:12', 10, 'Y', 'N', 'etm.jpg', 'http://www.isgis.rnu.tn', 'Academique '),
(11, 'Henkel', 'A', '2018-12-25 12:51:35', 10, '2019-01-04 13:39:19', 10, 'Y', 'N', 'henkel.jpg', '', ''),
(12, 'BONDIN', 'A', '2019-01-04 13:40:01', 10, '0000-00-00 00:00:00', 0, 'Y', 'N', 'bondin.jpg', '', ''),
(13, 'CNP', 'A', '2019-01-04 13:40:34', 10, '0000-00-00 00:00:00', 0, 'Y', 'N', 'cnp-0.jpg', '', ''),
(14, 'DAR ESSAYDALI', 'A', '2019-01-04 13:42:01', 10, '0000-00-00 00:00:00', 0, 'Y', 'N', 'dar_essaydali.jpg', '', ''),
(15, 'DIARI', 'A', '2019-01-04 13:42:18', 10, '0000-00-00 00:00:00', 0, 'Y', 'N', 'diari.jpg', '', ''),
(16, 'R\'INDUSTRIE', 'A', '2019-01-04 13:42:55', 10, '0000-00-00 00:00:00', 0, 'Y', 'N', 'd_industrie.jpg', '', ''),
(17, 'ETEP', 'A', '2019-01-04 13:43:17', 10, '0000-00-00 00:00:00', 0, 'Y', 'N', 'ETEP-0.jpg', '', ''),
(18, 'ISET', 'A', '2019-01-04 13:43:47', 10, '0000-00-00 00:00:00', 0, 'Y', 'N', 'iset.jpg', '', ''),
(19, 'ISGI', 'A', '2019-01-04 13:44:24', 10, '0000-00-00 00:00:00', 0, 'Y', 'N', 'isgi.jpg', '', ''),
(20, 'KILANI', 'A', '2019-01-04 13:44:47', 10, '0000-00-00 00:00:00', 0, 'Y', 'N', 'kilani.jpg', '', ''),
(21, 'OOREDOO', 'A', '2019-01-04 13:45:08', 10, '0000-00-00 00:00:00', 0, 'Y', 'N', 'ooredoo.jpg', '', ''),
(22, 'SAGEMCOM', 'A', '2019-01-04 13:45:49', 10, '0000-00-00 00:00:00', 0, 'Y', 'N', 'sagemcom.jpg', '', ''),
(23, 'SANIMED', 'A', '2019-01-04 13:46:21', 10, '0000-00-00 00:00:00', 0, 'Y', 'N', 'sanimed.jpg', '', ''),
(24, 'SICAME', 'A', '2019-01-04 13:47:56', 10, '0000-00-00 00:00:00', 0, 'Y', 'N', 'sicame-0.jpg', '', ''),
(25, 'SITEP', 'A', '2019-01-04 13:48:14', 10, '0000-00-00 00:00:00', 0, 'Y', 'N', 'sitep.jpg', '', ''),
(26, 'SLAMA', 'A', '2019-01-04 13:48:44', 10, '0000-00-00 00:00:00', 0, 'Y', 'N', 'slama_freres.jpg', '', ''),
(27, 'SOFAP', 'A', '2019-01-04 13:49:23', 10, '0000-00-00 00:00:00', 0, 'Y', 'N', 'sofap.jpg', '', ''),
(28, 'SOTUFAB', 'A', '2019-01-04 13:49:48', 10, '0000-00-00 00:00:00', 0, 'Y', 'N', 'sotufab.jpg', '', ''),
(29, 'STEELFLASH', 'A', '2019-01-04 13:50:24', 10, '0000-00-00 00:00:00', 0, 'Y', 'N', 'steelflash.jpg', '', ''),
(30, 'TEJRA', 'A', '2019-01-04 13:54:11', 10, '0000-00-00 00:00:00', 0, 'Y', 'N', 'tejra.jpg', '', ''),
(31, 'TIS', 'A', '2019-01-04 13:54:27', 10, '0000-00-00 00:00:00', 0, 'Y', 'N', 'tis.jpg', '', ''),
(32, 'TRAPSA', 'A', '2019-01-04 13:55:46', 10, '0000-00-00 00:00:00', 0, 'Y', 'N', 'trapsa-0.jpg', '', ''),
(33, 'TUS', 'A', '2019-01-04 13:57:01', 10, '0000-00-00 00:00:00', 0, 'Y', 'N', 'tus.jpg', '', ''),
(34, 'UBS', 'A', '2019-01-04 13:57:18', 10, '0000-00-00 00:00:00', 0, 'Y', 'N', 'ubs.jpg', '', ''),
(35, 'ZODIAC', 'A', '2019-01-04 13:57:55', 10, '0000-00-00 00:00:00', 0, 'Y', 'N', 'zodiac.jpg', '', '');

-- --------------------------------------------------------

--
-- Structure de la table `ba_pays`
--

CREATE TABLE `ba_pays` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `created` datetime NOT NULL,
  `usercreated` int(11) NOT NULL,
  `modify` datetime NOT NULL,
  `usermodify` int(11) NOT NULL,
  `etat` enum('Y','N') NOT NULL DEFAULT 'Y'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `ba_pays`
--

INSERT INTO `ba_pays` (`id`, `name`, `created`, `usercreated`, `modify`, `usermodify`, `etat`) VALUES
(1, 'aaa', '2018-11-06 11:21:04', 10, '0000-00-00 00:00:00', 0, 'Y'),
(2, 'rza', '2018-11-06 11:21:14', 10, '0000-00-00 00:00:00', 0, 'Y'),
(3, 'fze', '2018-11-06 11:32:08', 10, '0000-00-00 00:00:00', 0, 'Y'),
(4, 'sqdllkl', '2018-11-06 11:55:26', 10, '0000-00-00 00:00:00', 0, 'Y');

-- --------------------------------------------------------

--
-- Structure de la table `ba_produits`
--

CREATE TABLE `ba_produits` (
  `id` int(11) NOT NULL,
  `fr_name` varchar(200) NOT NULL,
  `an_name` varchar(200) NOT NULL,
  `reference` varchar(20) NOT NULL,
  `contrat` enum('Vente','Location') NOT NULL,
  `categorie_id` int(11) NOT NULL,
  `id_ville` int(11) NOT NULL,
  `id_region` int(11) NOT NULL,
  `id_zone` int(11) NOT NULL,
  `surface` varchar(100) NOT NULL,
  `nb_piece` int(11) NOT NULL,
  `prix` int(11) NOT NULL,
  `visible` enum('Y','N') NOT NULL DEFAULT 'Y',
  `fichier_pdf` varchar(200) NOT NULL,
  `fr_description` text NOT NULL,
  `an_description` text NOT NULL,
  `fr_resume` text NOT NULL,
  `accueil` enum('Y','N') NOT NULL DEFAULT 'Y',
  `etat` enum('Y','N') NOT NULL,
  `orderm` int(11) NOT NULL,
  `mot_cle` text NOT NULL,
  `couleurs` varchar(20) NOT NULL,
  `created` datetime NOT NULL,
  `usercreated` int(11) NOT NULL,
  `modify` datetime NOT NULL,
  `usermodify` int(11) NOT NULL,
  `photo` varchar(300) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `ba_publications`
--

CREATE TABLE `ba_publications` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `resume` text NOT NULL,
  `created` datetime NOT NULL,
  `usercreated` int(11) NOT NULL,
  `modify` datetime NOT NULL,
  `usermodify` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `ba_references`
--

CREATE TABLE `ba_references` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `typereference` enum('A','I') NOT NULL,
  `created` datetime NOT NULL,
  `usercreated` int(11) NOT NULL,
  `modify` datetime NOT NULL,
  `usermodify` int(11) NOT NULL,
  `etat` enum('Y','N') NOT NULL DEFAULT 'Y',
  `defau` enum('Y','N') NOT NULL DEFAULT 'N',
  `photo` varchar(200) NOT NULL,
  `url` varchar(250) NOT NULL,
  `catpar_name` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `ba_references`
--

INSERT INTO `ba_references` (`id`, `name`, `typereference`, `created`, `usercreated`, `modify`, `usermodify`, `etat`, `defau`, `photo`, `url`, `catpar_name`) VALUES
(1, 'ACOSERV', 'A', '2019-01-18 14:25:15', 10, '0000-00-00 00:00:00', 0, 'Y', 'N', 'acoserv_0.jpg', '', ''),
(2, 'Groupe ONE TECH', 'A', '2019-01-18 14:25:45', 10, '0000-00-00 00:00:00', 0, 'Y', 'N', 'Groupe_ONE_TECH.png', '', ''),
(3, 'Cafe ben yedder ', 'A', '2019-01-18 14:26:23', 10, '0000-00-00 00:00:00', 0, 'Y', 'N', 'cafebenyedder.jpg', '', ''),
(4, 'Bonna beton ', 'A', '2019-01-18 14:26:41', 10, '0000-00-00 00:00:00', 0, 'Y', 'N', 'bonna_beton.png', '', '');

-- --------------------------------------------------------

--
-- Structure de la table `ba_services`
--

CREATE TABLE `ba_services` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `etat` enum('Y','N') NOT NULL,
  `created` datetime NOT NULL,
  `usercreated` int(11) NOT NULL,
  `modify` datetime NOT NULL,
  `usermodify` int(11) NOT NULL,
  `photo` varchar(300) NOT NULL,
  `id_contenu` int(11) NOT NULL,
  `orderm` int(11) NOT NULL,
  `resume` text NOT NULL,
  `description` text NOT NULL,
  `parent` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `ba_services`
--

INSERT INTO `ba_services` (`id`, `name`, `etat`, `created`, `usercreated`, `modify`, `usermodify`, `photo`, `id_contenu`, `orderm`, `resume`, `description`, `parent`) VALUES
(1, 'Assistance technique ', 'Y', '2017-07-13 19:52:46', 10, '2019-03-14 12:22:15', 10, 'icoo.jpg', 0, 1, '<p>pour la mise en place des syst&egrave;mes de gestion industrielle type GMAO &ndash; GPAO-ERP</p>', '<p><span>Assistance technique pour la mise en place des syst&egrave;mes de gestion industrielle type GMAO &ndash; GPAO-ERP</span></p>\r\n<p><span><span>Assistance technique pour la mise en place des syst&egrave;mes de gestion industrielle type GMAO &ndash; GPAO-ERP</span></span></p>\r\n<p><span>Assistance technique pour la mise en place des syst&egrave;mes de gestion industrielle type GMAO &ndash; GPAO-ERP</span></p>\r\n<p><span><span>Assistance technique pour la mise en place des syst&egrave;mes de gestion industrielle type GMAO &ndash; GPAO-ERP</span></span></p>\r\n<p><span>Assistance technique pour la mise en place des syst&egrave;mes de gestion industrielle type GMAO &ndash; GPAO-ERP</span></p>\r\n<p><span><span>Assistance technique pour la mise en place des syst&egrave;mes de gestion industrielle type GMAO &ndash; GPAO-ERP</span></span></p>\r\n<p><span>Assistance technique pour la mise en place des syst&egrave;mes de gestion industrielle type GMAO &ndash; GPAO-ERP</span></p>\r\n<p><span><span>Assistance technique pour la mise en place des syst&egrave;mes de gestion industrielle type GMAO &ndash; GPAO-ERP</span></span></p>\r\n<p><span>Assistance technique pour la mise en place des syst&egrave;mes de gestion industrielle type GMAO &ndash; GPAO-ERP</span></p>\r\n<p><span><span>Assistance technique pour la mise en place des syst&egrave;mes de gestion industrielle type GMAO &ndash; GPAO-ERP</span></span></p>\r\n<p><span>Assistance technique pour la mise en place des syst&egrave;mes de gestion industrielle type GMAO &ndash; GPAO-ERP</span></p>\r\n<p><span><span>Assistance technique pour la mise en place des syst&egrave;mes de gestion industrielle type GMAO &ndash; GPAO-ERP</span><span>Assistance technique pour la mise en place des syst&egrave;mes de gestion industrielle type GMAO &ndash; GPAO-ERP</span></span></p>\r\n<p>&nbsp;</p>', 0),
(2, 'Audit des systÃ¨mes de gestion industrielle', 'Y', '2017-07-13 19:53:50', 10, '2018-12-14 12:16:42', 10, '', 0, 2, '<p><span style=\"color: #008080;\">&nbsp;</span></p>', '', 0),
(3, 'Diagnostic avancÃ© des systÃ¨mes de gestion industriel', 'Y', '2017-07-13 19:55:07', 10, '2018-12-14 12:19:42', 10, '', 0, 3, '<p><span style=\"color: #339966;\">&nbsp;</span></p>', '', 0),
(6, 'Pacty', 'N', '2018-04-16 23:58:18', 10, '2018-12-14 12:20:38', 10, '', 0, 5, '<p><span>Suivi des plans d\'action</span></p>', '<p><span>Portail RH-SIRH pour une gestion collaborative de tous les processus RH.</span></p>', 9),
(7, 'Flaggy', 'N', '2018-04-17 01:56:43', 10, '2018-12-14 12:20:53', 10, '', 0, 6, '<p>Surveillance des indicateurs&nbsp;</p>', '', 9),
(8, 'Cibly', 'N', '2018-04-17 02:01:13', 10, '2018-12-14 12:21:06', 10, 'ic.jpg', 0, 7, '<p>Gestion par objectifs</p>', '', 9),
(4, 'PrÃ©paration des dossiers de mise Ã  niveau', 'Y', '2017-07-13 19:56:05', 10, '2018-12-14 12:20:24', 10, '', 0, 4, '<p><span style=\"color: #339966;\">&nbsp;</span></p>', '', 0),
(9, 'qualitÃ© ', 'N', '2018-04-30 10:06:22', 10, '2018-12-14 12:21:15', 10, 'ic-0.jpg', 0, 0, '<p><span class=\"_5yl5\"><span>qualit&eacute; </span></span><span class=\"_5yl5\"><span>qualit&eacute; </span></span><span class=\"_5yl5\"><span>qualit&eacute; </span></span><span class=\"_5yl5\"><span>qualit&eacute; </span></span><span class=\"_5yl5\"><span>qualit&eacute; </span></span><span class=\"_5yl5\"><span>qualit&eacute; </span></span></p>', '<p><span class=\"_5yl5\"><span>qualit&eacute; </span></span><span class=\"_5yl5\"><span>qualit&eacute; </span></span><span class=\"_5yl5\"><span>qualit&eacute; </span></span><span class=\"_5yl5\"><span>qualit&eacute; </span></span></p>', 0),
(10, 'ressource humaine', 'N', '2018-04-30 10:07:05', 10, '2018-12-14 12:21:32', 10, 'icoo-0.jpg', 0, 0, '<p><span class=\"_5yl5\"><span>ressource humaine </span></span><span class=\"_5yl5\"><span>ressource humaine </span></span><span class=\"_5yl5\"><span>ressource humaine</span></span><span class=\"_5yl5\"><span> r essource humaine</span></span></p>', '<p><span class=\"_5yl5\"><span>ressource humaine</span></span> <span class=\"_5yl5\"><span>ressource humaine</span></span> <span class=\"_5yl5\"><span>ressource humaine</span></span> <span class=\"_5yl5\"><span>ressource humaine</span></span> <span class=\"_5yl5\"><span>ressource humaine</span></span> <span class=\"_5yl5\"><span>ressource humaine</span></span></p>', 0);

-- --------------------------------------------------------

--
-- Structure de la table `ba_slideshow`
--

CREATE TABLE `ba_slideshow` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `etat` enum('Y','N') NOT NULL,
  `created` datetime NOT NULL,
  `usercreated` int(11) NOT NULL,
  `modify` datetime NOT NULL,
  `usermodify` int(11) NOT NULL,
  `photo` varchar(300) NOT NULL,
  `photo1` varchar(100) NOT NULL,
  `id_prod` int(11) NOT NULL,
  `orderm` int(11) NOT NULL,
  `text` varchar(300) NOT NULL,
  `fr_text2` varchar(300) NOT NULL,
  `fr_text3` text NOT NULL,
  `fr_text4` text NOT NULL,
  `an_text1` text NOT NULL,
  `an_text2` text NOT NULL,
  `an_text3` text NOT NULL,
  `an_text4` text NOT NULL,
  `titrelien` varchar(200) NOT NULL,
  `lien` text,
  `position` enum('L','R') NOT NULL DEFAULT 'L' COMMENT 'L:Left; R:Right'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `ba_slideshow`
--

INSERT INTO `ba_slideshow` (`id`, `name`, `etat`, `created`, `usercreated`, `modify`, `usermodify`, `photo`, `photo1`, `id_prod`, `orderm`, `text`, `fr_text2`, `fr_text3`, `fr_text4`, `an_text1`, `an_text2`, `an_text3`, `an_text4`, `titrelien`, `lien`, `position`) VALUES
(1, '1', 'Y', '2017-07-13 19:44:37', 10, '2018-12-26 15:58:29', 10, '1-1.jpg', '', 0, 1, '<p>szdefrgtyujhi</p>', '', '', '', '', '', '', '', '', 'https://www.google.fr', 'L'),
(2, 'zsedfghjk', 'Y', '2017-07-13 19:49:18', 10, '2018-12-26 15:57:04', 10, '2-0.jpg', '', 0, 2, '<p>dgfhgfgjkhjlkmj</p>', '', '', '', '', '', '', '', '', '', 'L'),
(6, 'azertyuiop', 'Y', '2017-10-06 23:10:48', 10, '2018-12-26 15:57:32', 10, '3-1.jpg', '', 0, 3, '<p>mlkjhgfdsqsxcvbn</p>', '', '', '', '', '', '', '', '', '', 'L'),
(9, 'dftyghujikl', 'N', '2018-10-30 14:33:08', 10, '2018-12-26 15:57:45', 10, 'tors.jpg', '', 0, 0, '<p>dfghjk,l;</p>', '', '', '', '', '', '', '', '', '', 'L'),
(10, '', 'N', '2018-10-30 14:37:58', 10, '2018-12-26 15:57:52', 10, 'tors_2.jpg', '', 0, 0, '', '', '', '', '', '', '', '', '', '', 'L');

-- --------------------------------------------------------

--
-- Structure de la table `ba_souscatalogues`
--

CREATE TABLE `ba_souscatalogues` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `photo` varchar(200) NOT NULL,
  `etat` enum('Y','N') NOT NULL,
  `resume` text NOT NULL,
  `description` text NOT NULL,
  `titre` varchar(200) NOT NULL,
  `datec` date NOT NULL,
  `created` datetime NOT NULL,
  `usercreated` int(11) NOT NULL,
  `modify` datetime NOT NULL,
  `usermodify` int(11) NOT NULL,
  `id_catalogue` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `ba_souscatalogues`
--

INSERT INTO `ba_souscatalogues` (`id`, `name`, `photo`, `etat`, `resume`, `description`, `titre`, `datec`, `created`, `usercreated`, `modify`, `usermodify`, `id_catalogue`) VALUES
(1, 'Gestion', '2.jpg', 'Y', '', '', '', '2019-03-04', '2019-03-04 16:24:04', 10, '0000-00-00 00:00:00', 0, 1);

-- --------------------------------------------------------

--
-- Structure de la table `ba_statistique`
--

CREATE TABLE `ba_statistique` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `valeurs` varchar(100) NOT NULL,
  `etat` enum('Y','N') NOT NULL DEFAULT 'Y',
  `orderm` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `usercreated` int(11) NOT NULL,
  `modify` datetime NOT NULL,
  `usermodify` int(11) NOT NULL,
  `photo` varchar(250) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `ba_statistique`
--

INSERT INTO `ba_statistique` (`id`, `name`, `valeurs`, `etat`, `orderm`, `created`, `usercreated`, `modify`, `usermodify`, `photo`) VALUES
(1, ' clients nous a fait confiance en  une semaine+', '10', 'Y', 1, '2017-07-15 13:18:48', 10, '2018-04-13 08:07:19', 10, 'index_2_img_1.png'),
(2, 'Logiciels mÃ©tier+', '7+', 'Y', 2, '2017-07-15 14:03:24', 10, '2018-04-13 07:59:11', 10, 'index_2_img_2.png'),
(3, 'Multiplicateurs de performance ', '8', 'Y', 3, '2017-07-15 14:03:52', 10, '2018-04-17 02:27:09', 10, 'index_2_img_3.png'),
(4, 'Langues+', '2', 'Y', 4, '2017-07-15 14:04:21', 10, '2018-04-13 07:43:29', 10, 'index_2_img_3-0.png');

-- --------------------------------------------------------

--
-- Structure de la table `ba_subventions`
--

CREATE TABLE `ba_subventions` (
  `id` int(11) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `datesub` date NOT NULL,
  `montant` decimal(10,0) NOT NULL,
  `donneur` varchar(255) NOT NULL,
  `etat` enum('Y','N') NOT NULL,
  `orderm` int(11) NOT NULL,
  `typesub` enum('N','I') NOT NULL,
  `created` datetime NOT NULL,
  `usercreated` int(11) NOT NULL,
  `modify` datetime NOT NULL,
  `usermodify` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `ba_subventions`
--

INSERT INTO `ba_subventions` (`id`, `titre`, `datesub`, `montant`, `donneur`, `etat`, `orderm`, `typesub`, `created`, `usercreated`, `modify`, `usermodify`) VALUES
(1, 'zefe', '2018-05-20', '19', 'cdssd', 'Y', 0, 'I', '2018-10-30 09:25:39', 10, '0000-00-00 00:00:00', 0),
(2, 'qzge', '2018-10-23', '100', 'ege', 'Y', 0, 'N', '2018-10-23 16:38:47', 10, '0000-00-00 00:00:00', 0),
(3, 'szadez', '2018-11-30', '12', '', 'Y', 0, 'N', '2018-10-30 09:29:07', 10, '0000-00-00 00:00:00', 0);

-- --------------------------------------------------------

--
-- Structure de la table `ba_tarifs`
--

CREATE TABLE `ba_tarifs` (
  `id` int(11) NOT NULL,
  `description` text NOT NULL,
  `resume` text NOT NULL,
  `name` varchar(150) NOT NULL,
  `service_id` int(11) NOT NULL,
  `tarife` decimal(10,2) NOT NULL,
  `etat` enum('Y','N') NOT NULL,
  `orderm` int(11) NOT NULL,
  `photo` varchar(300) NOT NULL,
  `poplars` enum('Y','N') NOT NULL DEFAULT 'N',
  `created` datetime NOT NULL,
  `usercreated` int(11) NOT NULL,
  `modify` datetime NOT NULL,
  `usermodify` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `ba_tarifs`
--

INSERT INTO `ba_tarifs` (`id`, `description`, `resume`, `name`, `service_id`, `tarife`, `etat`, `orderm`, `photo`, `poplars`, `created`, `usercreated`, `modify`, `usermodify`) VALUES
(1, '<p>dfqsdf</p>', '<p>dsqdqsdsq</p>', 'dqsd', 2, '0.00', 'Y', 1, '', 'N', '2017-08-02 22:20:01', 10, '0000-00-00 00:00:00', 0),
(2, '<ul>\r\n<li><span>10GB</span>Space amount</li>\r\n<li><span>Unlimited</span>users</li>\r\n<li><span>30GB</span>Bandwidth</li>\r\n<li>Free Support</li>\r\n<li><span>20</span>Databases</li>\r\n</ul>', '', 'Business', 1, '0.00', 'Y', 0, '', 'N', '2017-08-03 10:22:09', 10, '2017-08-03 12:55:19', 10),
(3, '<ul class=\"pricing-list\">\r\n<li><span class=\"text-ubold\">1GB</span>Space amount</li>\r\n<li><span class=\"text-ubold\">5</span>users</li>\r\n<li><span class=\"text-ubold\">5GB</span>Bandwidth</li>\r\n<li>No Support</li>\r\n<li><span class=\"text-ubold\">1</span>Databases</li>\r\n</ul>', '', 'Free', 1, '80.00', 'Y', 1, '', 'Y', '2017-08-03 12:17:04', 10, '2017-08-03 12:28:45', 10),
(4, '<ul class=\"pricing-list\">\r\n<li><span class=\"text-ubold\">5GB</span>Space amount</li>\r\n<li><span class=\"text-ubold\">20</span>users</li>\r\n<li><span class=\"text-ubold\">10GB</span>Bandwidth</li>\r\n<li>No Support</li>\r\n<li><span class=\"text-ubold\">1</span>Databases</li>\r\n</ul>', '', 'starter', 1, '0.00', 'Y', 0, '', 'N', '2017-08-03 12:17:36', 10, '0000-00-00 00:00:00', 0);

-- --------------------------------------------------------

--
-- Structure de la table `ba_telecharchements`
--

CREATE TABLE `ba_telecharchements` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `fichier` varchar(255) NOT NULL,
  `etat` enum('Y','N') NOT NULL DEFAULT 'Y',
  `created` datetime NOT NULL,
  `usercreated` int(11) NOT NULL,
  `modify` datetime NOT NULL,
  `usermodify` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `ba_telecharchements`
--

INSERT INTO `ba_telecharchements` (`id`, `name`, `fichier`, `etat`, `created`, `usercreated`, `modify`, `usermodify`) VALUES
(1, NULL, 'specifications_technique-0.pdf', 'Y', '2018-10-23 21:54:42', 10, '0000-00-00 00:00:00', 0),
(2, 'sdfsdfxdsfdfg', 'OSYY8O0.jpg', 'Y', '2018-10-23 22:01:09', 10, '0000-00-00 00:00:00', 0);

-- --------------------------------------------------------

--
-- Structure de la table `ba_users`
--

CREATE TABLE `ba_users` (
  `id` int(11) NOT NULL,
  `login` varchar(200) NOT NULL,
  `mot_passe` varchar(200) NOT NULL,
  `mpas` varchar(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `categorie` varchar(200) NOT NULL,
  `etat` enum('Y','N') NOT NULL,
  `created` datetime NOT NULL,
  `usercreated` int(11) NOT NULL,
  `modify` datetime NOT NULL,
  `usermodify` int(11) NOT NULL,
  `id_frs` int(11) NOT NULL,
  `photo` varchar(500) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `ba_users`
--

INSERT INTO `ba_users` (`id`, `login`, `mot_passe`, `mpas`, `name`, `email`, `categorie`, `etat`, `created`, `usercreated`, `modify`, `usermodify`, `id_frs`, `photo`) VALUES
(10, 'contact@smdi.tn', '54fd4be082436bba24d5f9a50a283cfc2afb9e03', '54fd4be082436bba24d5f9a50a283cfc2afb9e03', 'ali ben amira', 'contact@smdi.tn', '', 'Y', '2017-04-07 22:49:46', 0, '2017-05-14 21:49:42', 32, 0, '1.jpg');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `bai18n`
--
ALTER TABLE `bai18n`
  ADD PRIMARY KEY (`id`),
  ADD KEY `locale` (`locale`),
  ADD KEY `model` (`model`),
  ADD KEY `row_id` (`foreign_key`),
  ADD KEY `field` (`field`);

--
-- Index pour la table `ba_activites`
--
ALTER TABLE `ba_activites`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `ba_actualites`
--
ALTER TABLE `ba_actualites`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `ba_adherents`
--
ALTER TABLE `ba_adherents`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `ba_adherperiodes`
--
ALTER TABLE `ba_adherperiodes`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `ba_catalogues`
--
ALTER TABLE `ba_catalogues`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `ba_categories`
--
ALTER TABLE `ba_categories`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `ba_comiteperiodes`
--
ALTER TABLE `ba_comiteperiodes`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `ba_comites`
--
ALTER TABLE `ba_comites`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `ba_contacts`
--
ALTER TABLE `ba_contacts`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `ba_contenus`
--
ALTER TABLE `ba_contenus`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `ba_demandes`
--
ALTER TABLE `ba_demandes`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `ba_formations`
--
ALTER TABLE `ba_formations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `ba_galeries`
--
ALTER TABLE `ba_galeries`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `ba_grades`
--
ALTER TABLE `ba_grades`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `ba_imageprods`
--
ALTER TABLE `ba_imageprods`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `ba_image_contenus`
--
ALTER TABLE `ba_image_contenus`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `ba_infosites`
--
ALTER TABLE `ba_infosites`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `ba_ligneadherperiodes`
--
ALTER TABLE `ba_ligneadherperiodes`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `ba_lignecomiteperiodes`
--
ALTER TABLE `ba_lignecomiteperiodes`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `ba_menus`
--
ALTER TABLE `ba_menus`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `ba_partenaires`
--
ALTER TABLE `ba_partenaires`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `ba_pays`
--
ALTER TABLE `ba_pays`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `ba_produits`
--
ALTER TABLE `ba_produits`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `ba_publications`
--
ALTER TABLE `ba_publications`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `ba_references`
--
ALTER TABLE `ba_references`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `ba_services`
--
ALTER TABLE `ba_services`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `ba_slideshow`
--
ALTER TABLE `ba_slideshow`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `ba_souscatalogues`
--
ALTER TABLE `ba_souscatalogues`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `ba_statistique`
--
ALTER TABLE `ba_statistique`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `ba_subventions`
--
ALTER TABLE `ba_subventions`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `ba_tarifs`
--
ALTER TABLE `ba_tarifs`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `ba_telecharchements`
--
ALTER TABLE `ba_telecharchements`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `ba_users`
--
ALTER TABLE `ba_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `bai18n`
--
ALTER TABLE `bai18n`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2643;

--
-- AUTO_INCREMENT pour la table `ba_activites`
--
ALTER TABLE `ba_activites`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `ba_actualites`
--
ALTER TABLE `ba_actualites`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `ba_adherents`
--
ALTER TABLE `ba_adherents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=116;

--
-- AUTO_INCREMENT pour la table `ba_adherperiodes`
--
ALTER TABLE `ba_adherperiodes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `ba_catalogues`
--
ALTER TABLE `ba_catalogues`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `ba_categories`
--
ALTER TABLE `ba_categories`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `ba_comiteperiodes`
--
ALTER TABLE `ba_comiteperiodes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `ba_comites`
--
ALTER TABLE `ba_comites`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `ba_contacts`
--
ALTER TABLE `ba_contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `ba_contenus`
--
ALTER TABLE `ba_contenus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `ba_demandes`
--
ALTER TABLE `ba_demandes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `ba_formations`
--
ALTER TABLE `ba_formations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `ba_galeries`
--
ALTER TABLE `ba_galeries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `ba_grades`
--
ALTER TABLE `ba_grades`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `ba_imageprods`
--
ALTER TABLE `ba_imageprods`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `ba_image_contenus`
--
ALTER TABLE `ba_image_contenus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `ba_infosites`
--
ALTER TABLE `ba_infosites`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `ba_ligneadherperiodes`
--
ALTER TABLE `ba_ligneadherperiodes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=193;

--
-- AUTO_INCREMENT pour la table `ba_lignecomiteperiodes`
--
ALTER TABLE `ba_lignecomiteperiodes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `ba_menus`
--
ALTER TABLE `ba_menus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT pour la table `ba_partenaires`
--
ALTER TABLE `ba_partenaires`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT pour la table `ba_pays`
--
ALTER TABLE `ba_pays`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `ba_produits`
--
ALTER TABLE `ba_produits`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `ba_publications`
--
ALTER TABLE `ba_publications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `ba_references`
--
ALTER TABLE `ba_references`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `ba_services`
--
ALTER TABLE `ba_services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `ba_slideshow`
--
ALTER TABLE `ba_slideshow`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT pour la table `ba_souscatalogues`
--
ALTER TABLE `ba_souscatalogues`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `ba_statistique`
--
ALTER TABLE `ba_statistique`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `ba_subventions`
--
ALTER TABLE `ba_subventions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `ba_tarifs`
--
ALTER TABLE `ba_tarifs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `ba_telecharchements`
--
ALTER TABLE `ba_telecharchements`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `ba_users`
--
ALTER TABLE `ba_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
