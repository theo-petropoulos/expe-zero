-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mar. 09 nov. 2021 à 11:06
-- Version du serveur :  8.0.21
-- Version de PHP : 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `expe-zero`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int NOT NULL AUTO_INCREMENT,
  `login` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `authtoken` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`id`, `login`, `password`, `authtoken`) VALUES
(1, '$2y$10$.Dp.HRuENmhgw7vmCHKQT.Tl2vG15nVoLSTD20UJNA7dTCtgpouD.', '$2y$10$ezbfCjjSLteub0zxW8NnROR6llR/2On3u.Zmg6dM7vB.z8N.NIahi', '0272737a31e866be13381413ff752808');

-- --------------------------------------------------------

--
-- Structure de la table `defis`
--

DROP TABLE IF EXISTS `defis`;
CREATE TABLE IF NOT EXISTS `defis` (
  `id` int NOT NULL AUTO_INCREMENT,
  `image_path` varchar(255) NOT NULL,
  `image_name` varchar(255) NOT NULL,
  `titre` varchar(750) NOT NULL,
  `sous_titre` varchar(750) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `defis`
--

INSERT INTO `defis` (`id`, `image_path`, `image_name`, `titre`, `sous_titre`) VALUES
(3, 'assets/uploads/defis/2703110c5f1efdb7ddf07d6d6e1028a2.jpg', 'Test d&eacute;fi', 'defi', 'aaa');

-- --------------------------------------------------------

--
-- Structure de la table `expeditions`
--

DROP TABLE IF EXISTS `expeditions`;
CREATE TABLE IF NOT EXISTS `expeditions` (
  `id` int NOT NULL AUTO_INCREMENT,
  `image_path` varchar(255) NOT NULL,
  `image_name` varchar(255) NOT NULL,
  `titre` varchar(750) NOT NULL,
  `sous_titre` varchar(750) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `medias`
--

DROP TABLE IF EXISTS `medias`;
CREATE TABLE IF NOT EXISTS `medias` (
  `id` int NOT NULL AUTO_INCREMENT,
  `image_path` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `image_name` varchar(255) NOT NULL,
  `categorie_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `categorie_id` int NOT NULL,
  `lien` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `medias`
--

INSERT INTO `medias` (`id`, `image_path`, `image_name`, `categorie_name`, `categorie_id`, `lien`) VALUES
(2, 'assets/uploads/medias/01d1b0e5f83793b3978d8a66ad774eff.png', 'M6', 'T&eacute;l&eacute;vision', 1, 'https://www.6play.fr/le-1245-p_1056/12-45-du-dimanche-22-novembre-c_12792227'),
(3, 'assets/uploads/medias/e050362b8446c190eca4fa0a046333ca.png', 'BFM', 'T&eacute;l&eacute;vision', 1, 'https://www.bfmtv.com/societe/insolite/nettoie-ton-kilometre-le-defi-ecolo-en-plein-confinement_VN-202011120048.html'),
(4, 'assets/uploads/medias/cd2c3c707cb8ad3090665a1b0707ee42.png', 'RTL', 'Presse', 3, 'https://www.rtl.fr/culture/arts-spectacles/confinement-avec-nettoietonkm-profitez-de-vos-sorties-pour-ramasser-des-dechets-plogging-7800930147'),
(5, 'assets/uploads/medias/5cb6d5cee927d6592ac8823591fab944.png', 'Fun Radio', 'Radio', 2, 'https://www.funradio.fr/programmes/le-vacher-time'),
(6, 'assets/uploads/medias/3bc8430fe4ac114e1cf2bfda24bfc21b.png', 'France Soir', 'Presse', 3, 'http://www.francesoir.fr/societe-environnement/et-si-vous-profitiez-du-reconfinement-pour-vous-mettre-au-plogging'),
(7, 'assets/uploads/medias/181b66d42696469cc3e14d033b88c043.png', 'Ouest France', 'Presse', 3, 'https://www.ouest-france.fr/bretagne/larmor-plage-56260/morbihan-originaire-de-larmor-plage-il-va-se-rendre-en-ecosse-a-velo-pour-la-cop26-5df39c6a-3183-11ec-897d-2a6a1867e3db'),
(8, 'assets/uploads/medias/e707c51ec2621e952383c2a8c22f76b4.png', 'Le Figaro', 'Presse', 3, 'https://www.lefigaro.fr/flash-actu/nettoietonkm-un-hashtag-ecolo-qui-met-les-confines-au-defi-20201119');

-- --------------------------------------------------------

--
-- Structure de la table `services`
--

DROP TABLE IF EXISTS `services`;
CREATE TABLE IF NOT EXISTS `services` (
  `id` int NOT NULL AUTO_INCREMENT,
  `image_path` varchar(255) NOT NULL,
  `image_name` varchar(255) NOT NULL,
  `titre` varchar(750) NOT NULL,
  `sous_titre` varchar(750) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `services`
--

INSERT INTO `services` (`id`, `image_path`, `image_name`, `titre`, `sous_titre`) VALUES
(1, 'assets/uploads/services/9b2be28df2c2aab1b8c5e2015d39a8bd.jpg', '', 'dzadzadza', 'ezaeza'),
(2, 'assets/uploads/services/16b11f1e239486c5ae7db12ed6a6d948.jpg', '', 'ezaezaezae', 'zaezaezaeza'),
(3, 'assets/uploads/services/073547a0907dd7b5eda0a464d8b7c706.jpg', 'test', 'ezlapelaelza', 'lpealelaea'),
(4, 'assets/uploads/services/7e250dbb252f06c939bf0c86388f3ae3.jpg', 'test 2', 'ezaezae', 'zaeza'),
(5, 'assets/uploads/services/5ee846a14ca411816b91e73ea351567c.jpg', 'Expe test', 'test', 'test');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
