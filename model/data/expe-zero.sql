-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mar. 09 nov. 2021 à 13:33
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
  `numero` int NOT NULL,
  `titre` varchar(750) NOT NULL,
  `sous_titre` varchar(750) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `defis`
--

INSERT INTO `defis` (`id`, `image_path`, `image_name`, `numero`, `titre`, `sous_titre`) VALUES
(5, 'assets/uploads/defis/a4e5c7207017af75283db0d501ed1b0b.jpg', 'TriPlacards', 2, '#trietesplacards', ' '),
(6, 'assets/uploads/defis/a84659e8fe7bdaa239f51a964e097d68.jpg', 'TriData', 3, '#nettoietesdata', ' '),
(7, 'assets/uploads/defis/e68dc0340d6f17875ad128d6ff37f91e.jpg', 'Cleankm', 1, '#nettoietonkm', ' ');

-- --------------------------------------------------------

--
-- Structure de la table `expeditions`
--

DROP TABLE IF EXISTS `expeditions`;
CREATE TABLE IF NOT EXISTS `expeditions` (
  `id` int NOT NULL AUTO_INCREMENT,
  `image_path` varchar(255) NOT NULL,
  `image_name` varchar(255) NOT NULL,
  `numero` int NOT NULL,
  `titre` varchar(750) NOT NULL,
  `sous_titre` varchar(750) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `expeditions`
--

INSERT INTO `expeditions` (`id`, `image_path`, `image_name`, `numero`, `titre`, `sous_titre`) VALUES
(5, 'assets/uploads/expeditions/121d6f1f79592a6989f1d758612f938f.jpeg', 'Expe Dolomites', 6, 'Les Dolomites en randonn&eacute;e rapide', '6 jours de marche, 2 sommets &agrave; 3000m, 141,5km et 11753 de D+'),
(6, 'assets/uploads/expeditions/b5a7d6e8d58d8ce3d23263ae78343dc1.jpeg', 'Exp&eacute; Kayak', 5, 'La  Dordogne  en  kayak', '8  jours,  300km  de  coups  de  pagaie  entre Puybrun dans le Lot et Saint-Loub&egrave;s en Gironde'),
(7, 'assets/uploads/expeditions/700a825c9bffdc7f5e08473824c2b231.jpg', 'Exp&eacute; Paddle', 3, 'Descente du canal du midi en paddle', ' 9 jours et 253km de coups de pagaie de Toulouse &agrave; S&egrave;te. 63 &eacute;cluses pass&eacute;es &agrave; la force des bras'),
(8, 'assets/uploads/expeditions/383d63c86ee142f541902e958c1cea8f.jpg', 'Exp&eacute; V&eacute;lo', 1, 'De la Bretagne &agrave; la Normandie &agrave; v&eacute;lo', '600 kilom&egrave;tres, 6 jours de coups de p&eacute;dales et 5 nuits de bivouac en hamac'),
(9, 'assets/uploads/expeditions/96461bdf663f863a25357cffd3c5fc93.jpeg', 'Exp&eacute; Trail', 4, 'Chemin de Stevenson en courant', '6 nuits sous tarp, 278 km (46km par jour) et 7950 m&egrave;tres de d&eacute;nivel&eacute; positif entre le Puy-en-Velay &agrave; Al&egrave;s'),
(10, 'assets/uploads/expeditions/30c51638a109c2b17cd53d92108398f2.jpg', 'Exp&eacute; Rando', 2, 'Grande Travers&eacute;e des Alpes fran&ccedil;aises &agrave; pied', ' 29 nuits sous tente, 612 kilom&egrave;tres et 45 507 m&egrave;tres de d&eacute;nivel&eacute; positif');

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
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

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
(8, 'assets/uploads/medias/e707c51ec2621e952383c2a8c22f76b4.png', 'Le Figaro', 'Presse', 3, 'https://www.lefigaro.fr/flash-actu/nettoietonkm-un-hashtag-ecolo-qui-met-les-confines-au-defi-20201119'),
(9, 'assets/uploads/medias/ecec30cf227a33ff6b34bd52c88db8ca.png', '20 Minutes', 'Presse', 3, 'https://www.20minutes.fr/planete/2909623-20201117-nettoietonkm-hashtag-lance-marseillais-ramasser-dechets-fait-emules-reseaux-sociaux'),
(10, 'assets/uploads/medias/f08380ff8667289463dec69583a7e891.png', 'La Provence', 'Presse', 3, 'https://www.laprovence.com/actu/en-direct/6317529/nettoie-ton-kilometre-le-challenge-ecolo-marseillais-relance.html'),
(12, 'assets/uploads/medias/f962645d7d7c0657283d3185bd4a49cd.png', 'France 3', 'T&eacute;l&eacute;vision', 1, 'https://france3-regions.francetvinfo.fr/provence-alpes-cote-d-azur/bouches-du-rhone/marseille/confinement-son-hashtag-ecolo-nettoie-ton-km-ce-marseillais-fait-carton-reseaux-sociaux-1894100.html'),
(13, 'assets/uploads/medias/63e5508870522ac03ef054e031c2802c.png', 'Yahoo!', 'Presse', 3, 'https://fr.news.yahoo.com/courir-et-ramasser-ses-dechets-dans-son-kilometre-le-defi-ecolo-du-confinement-031522170.html'),
(14, 'assets/uploads/medias/9712848a46585736bbce3485ed343c86.png', 'Brut', 'R&eacute;seaux', 5, 'https://www.brut.media/fr/international/un-marseillais-se-rend-a-la-cop26-de-glasgow-a-velo-6aaaad14-fb56-4e60-b5ef-90d797763455');

-- --------------------------------------------------------

--
-- Structure de la table `partenaires`
--

DROP TABLE IF EXISTS `partenaires`;
CREATE TABLE IF NOT EXISTS `partenaires` (
  `id` int NOT NULL AUTO_INCREMENT,
  `image_path` varchar(255) NOT NULL,
  `image_name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `partenaires`
--

INSERT INTO `partenaires` (`id`, `image_path`, `image_name`) VALUES
(1, 'assets/uploads/partenaires/9de69774dbfa0b8949c68e8a22a0616f.png', 'Flixbus'),
(2, 'assets/uploads/partenaires/92321031a6c6e57944f1dcb27d4202b3.png', 'F-one'),
(3, 'assets/uploads/partenaires/f6e8ed68c73c4c118bfc79e880db9aba.png', 'Itiwit'),
(4, 'assets/uploads/partenaires/979162efd0faa900133777f7b8a8262a.png', 'BlablaBus'),
(5, 'assets/uploads/partenaires/802f88f1a92deba8c9fba0d6d8074883.png', 'Maif'),
(6, 'assets/uploads/partenaires/d0fb855de1a26815390594cbb69cda48.png', 'SNCF'),
(7, 'assets/uploads/partenaires/64782edcc2901da035a93c2419459bc0.png', 'Explora Project'),
(8, 'assets/uploads/partenaires/775c58b3943186b1ef16b8173fff2fef.png', 'ManEra'),
(9, 'assets/uploads/partenaires/36f228b4af31878485e3463298a55794.png', 'Sport Plan&egrave;te'),
(10, 'assets/uploads/partenaires/00aba591536e6104c0909f032ed9b704.png', 'Triban');

-- --------------------------------------------------------

--
-- Structure de la table `services`
--

DROP TABLE IF EXISTS `services`;
CREATE TABLE IF NOT EXISTS `services` (
  `id` int NOT NULL AUTO_INCREMENT,
  `image_path` varchar(255) NOT NULL,
  `image_name` varchar(255) NOT NULL,
  `numero` int NOT NULL,
  `titre` varchar(750) NOT NULL,
  `sous_titre` varchar(750) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `services`
--

INSERT INTO `services` (`id`, `image_path`, `image_name`, `numero`, `titre`, `sous_titre`) VALUES
(1, 'assets/uploads/services/9b2be28df2c2aab1b8c5e2015d39a8bd.jpg', '', 0, 'dzadzadza', 'ezaeza'),
(2, 'assets/uploads/services/16b11f1e239486c5ae7db12ed6a6d948.jpg', '', 0, 'ezaezaezae', 'zaezaezaeza'),
(3, 'assets/uploads/services/073547a0907dd7b5eda0a464d8b7c706.jpg', 'test', 0, 'ezlapelaelza', 'lpealelaea'),
(4, 'assets/uploads/services/7e250dbb252f06c939bf0c86388f3ae3.jpg', 'test 2', 0, 'ezaezae', 'zaeza');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
