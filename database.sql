-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mer. 28 fév. 2024 à 15:24
-- Version du serveur : 8.2.0
-- Version de PHP : 8.2.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `site_actualites`
--

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

DROP TABLE IF EXISTS `articles`;
CREATE TABLE IF NOT EXISTS `articles` (
  `id` int NOT NULL AUTO_INCREMENT,
  `titre` varchar(128) NOT NULL,
  `corps_texte` varchar(2400) NOT NULL,
  `image` varchar(256) NOT NULL,
  `date_publication` date NOT NULL,
  `date_revision` date NOT NULL,
  `id_auteur` int NOT NULL,
  `tags` varchar(256) NOT NULL,
  `sources` varchar(128) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `articles`
--

INSERT INTO `articles` (`id`, `titre`, `corps_texte`, `image`, `date_publication`, `date_revision`, `id_auteur`, `tags`, `sources`) VALUES
(1, 'Le Goût des Pâtes : Quand la Science Révèle les Secrets de la Saveur', 'Dans une étude révolutionnaire publiée aujourd\'hui dans le Journal of Culinary Science, des chercheurs ont plongé au cœur de l\'un des plats les plus emblématiques de la cuisine mondiale : les pâtes. Cette recherche novatrice, menée conjointement par des experts en alimentation et des scientifiques, révèle les secrets cachés derrière ce mets tant aimé et explore la complexité de son goût.\r\n\r\nLes pâtes, souvent considérées comme un aliment de base simple, ont surpris les chercheurs par la richesse de leur composition chimique et la variété de leurs arômes. En utilisant des techniques avancées d\'analyse sensorielle et de spectrométrie de masse, l\'équipe a cartographié les molécules responsables de la saveur distincte des différentes variétés de pâtes.\r\n\r\nLe professeur Maria Rossi, chef de projet de l\'étude, explique : \"Nous avons découvert que le processus de fabrication des pâtes, y compris le type de blé utilisé, la méthode de pétrissage, et même le séchage, influence significativement leur goût final. Chaque étape du processus joue un rôle crucial dans la formation de composés aromatiques complexes.\"\r\n\r\nCette recherche a également mis en lumière l\'importance de la cuisson dans la libération des saveurs. Les pâtes cuites al dente, par exemple, révèlent un profil de saveur différent de celles trop cuites. De plus, l\'équipe a identifié des variations subtiles de goût entre les différentes formes de pâtes, telles que les spaghettis, les penne et les tagliatelles, offrant ainsi de nouvelles perspectives sur la manière dont la forme influence la perception gustative.\r\n\r\n\"Cette étude ouvre la voie à de nouvelles possibilités pour l\'industrie alimentaire, notamment en ce qui concerne le développement de saveurs authentiques et la création de nouvelles expériences culinaires\", déclare le Dr. Giovanni Bianchi, co-auteur de l\'étude.\r\n\r\nEn comprenant mieux les mécanismes qui sous-tendent le goût des pâtes, cette recherche promet d\'enrichir non seulement notre appréciation de ce plat classique, mais aussi notre compréhension globale de la science culinaire.', 'images/pates', '2024-02-10', '2024-02-20', 1, '#pates#tropbon#fourchette', 'https://www.lustucru.fr'),
(2, 'Vive le Rugby ! L\'esprit sportif et la camaraderie triomphent lors du tournoi international', 'Dans une démonstration éclatante de passion, d\'habileté et de fair-play, le monde du rugby s\'est uni lors du récent tournoi international qui s\'est déroulé ce week-end dernier. Des équipes venues des quatre coins du globe se sont affrontées dans une compétition féroce, mais empreinte d\'un esprit de camaraderie qui a captivé les spectateurs du monde entier.\r\n\r\nLe tournoi a été le théâtre de moments mémorables, alors que les joueurs ont rivalisé avec intensité sur le terrain, démontrant leur dévouement, leur talent et leur stratégie. Des essais spectaculaires, des plaquages impeccables et des coups de pied précis ont animé chaque match, suscitant l\'admiration des supporters présents dans les gradins et devant les écrans.\r\n\r\nCependant, au-delà de la compétition elle-même, c\'est l\'esprit sportif qui a brillé de mille feux tout au long de l\'événement. Les joueurs ont fait preuve d\'un respect exemplaire envers leurs adversaires, saluant leurs performances et se serrant la main après chaque rencontre. Des gestes de fair-play ont été applaudis, rappelant à tous les valeurs fondamentales du rugby : le respect, la solidarité et l\'intégrité.\r\n\r\n\"Ce tournoi a été bien plus qu\'une simple compétition sportive\", déclare Sophie Martin, une spectatrice enthousiaste. \"C\'était une célébration de l\'esprit du rugby, où la passion pour le jeu et le respect mutuel étaient au cœur de chaque moment. C\'était vraiment inspirant.\"\r\n\r\nAu-delà des résultats sur le terrain, le tournoi a également été l\'occasion de renforcer les liens entre les nations, rassemblant des personnes de cultures différentes autour d\'une passion commune pour ce sport. Des échanges culturels, des célébrations animées et des rencontres amicales ont enrichi l\'expérience des participants et des supporters, témoignant de la capacité du rugby à transcender les frontières et à unir les peuples.\r\n\r\nAlors que les équipes se sont séparées, chacune emportant avec elle des souvenirs inoubliables et des leçons précieuses, une chose est certaine : le rugby continue d\'incarner les valeurs d\'unité, de respect et de camaraderie qui en font bien plus qu\'un simple sport. Vive le rugby !', 'images/rugby', '2024-02-01', '2024-02-29', 3, '#rugby#sport#coupdboule', 'https://france-sport.fr'),
(3, 'Clément, le Beau Gosse : Quand un Adolescent Devient un Phénomène des Réseaux Sociaux', 'Dans le monde effervescent des médias sociaux, un nom est sur toutes les lèvres : Clément. À seulement dix-neuf ans, ce jeune français est devenu une véritable sensation en ligne, attirant l\'attention de milliers de fans avec son charisme, son style et son attitude décontractée.\r\n\r\nClément, surnommé \"le BG\" (pour \"Beau Gosse\") par ses admirateurs, a conquis les cœurs grâce à son contenu diversifié et captivant. Que ce soit en partageant des conseils de mode, des vidéos humoristiques ou des réflexions sur la vie quotidienne, il a su créer une communauté engagée et passionnée autour de sa personnalité pétillante.\r\n\r\n\"Clément est bien plus qu\'une simple figure des réseaux sociaux\", explique Marie, l\'une de ses fidèles abonnées. \"Il a ce don de rendre chaque moment de sa vie passionnant et amusant à suivre. Il apporte une touche de fraîcheur à notre fil d\'actualité.\"\r\n\r\nCe qui distingue Clément, c\'est sa sincérité et son authenticité. Malgré sa popularité croissante, il reste proche de ses fans, interagissant régulièrement avec eux et partageant des aspects de sa vie quotidienne sans filtre. Cette transparence a contribué à renforcer le lien qu\'il entretient avec sa communauté, lui permettant de créer un espace où chacun se sent entendu et compris.\r\n\r\n\"C\'est incroyable de voir à quel point Clément a grandi en si peu de temps\", déclare Sarah, une autre admiratrice. \"Il inspire tellement de jeunes à être eux-mêmes et à poursuivre leurs rêves, peu importe les obstacles. Il mérite tout son succès.\"\r\n\r\nAu-delà de sa présence en ligne, Clément commence également à attirer l\'attention de marques et d\'entreprises, qui voient en lui un influenceur prometteur. Avec son sens du style impeccable et sa capacité à créer du contenu engageant, il est devenu un ambassadeur convoité pour de nombreuses collaborations.', 'images/coeur', '2024-02-01', '2024-02-14', 2, '#tropbeau#influenceur#instagram#valo', 'Le Journal du Digital Lifestyle'),
(5, 'Meurtre à l\'Institut d\'Informatique Appliquée : Une Enquête Captivante Secoue la Communauté Estudiantine', 'Une aura de mystère et d\'inquiétude plane sur l\'Institut d\'Informatique Appliquée (IIA) alors qu\'une tragédie choquante s\'est déroulée sur son campus. Le corps d\'un étudiant a été découvert dans des circonstances mystérieuses, déclenchant une enquête policière intense qui a secoué la communauté estudiantine et suscité des interrogations sur la sécurité sur le campus.\r\n\r\nL\'étudiant, dont l\'identité n\'a pas été révélée par les autorités pour le moment, aurait été retrouvé dans un des bâtiments de l\'IIA, dans la nuit dernière. Les premiers éléments de l\'enquête suggèrent qu\'il s\'agirait d\'un homicide, bien que les détails exacts entourant les circonstances de sa mort restent encore flous.\r\n\r\nLes autorités locales, en collaboration avec la sécurité de l\'établissement, ont rapidement bouclé la zone et ont entrepris une enquête minutieuse pour recueillir des preuves et interroger les témoins potentiels. Des équipes spécialisées en médecine légale ont également été dépêchées sur les lieux pour examiner le corps et déterminer la cause exacte du décès.\r\n\r\n\"Nous prenons cette affaire très au sérieux\", a déclaré le porte-parole de l\'IIA lors d\'une conférence de presse. \"La sécurité et le bien-être de nos étudiants sont notre priorité absolue. Nous collaborons étroitement avec les autorités pour faire toute la lumière sur cette affaire et assurer que justice soit rendue.\"\r\n\r\nCette tragédie a plongé la communauté estudiantine dans un état de choc et d\'inquiétude. Nombreux sont ceux qui expriment leur désarroi et leur solidarité envers la famille et les proches de la victime. Des vigiles improvisées ont été organisées sur le campus pour rendre hommage à sa mémoire et demander des réponses sur les circonstances entourant sa mort.\r\n\r\nAlors que l\'enquête se poursuit, les regards sont tournés vers les autorités pour obtenir des réponses et garantir que des mesures appropriées soient prises pour assurer la sécurité de tous les membres de la communauté estudiantine de l\'IIA.', 'images/meurtre', '2023-02-03', '2024-02-23', 3, '#lamortpascool#couteau#sang', 'mourir-tue.fr'),
(6, 'Les Oiseaux Armés de Kalachnikov : Un Canular Viral qui Déclenche une Enquête Insolite', 'Une étrange rumeur a récemment secoué les réseaux sociaux, suscitant à la fois hilarité et perplexité. Selon des messages partagés massivement en ligne, des oiseaux armés de Kalachnikov auraient été aperçus dans diverses régions du monde, semant le chaos et la confusion parmi les habitants.\r\n\r\nCe canular aussi absurde qu\'inattendu a rapidement fait le tour de la toile, attirant l\'attention des internautes du monde entier. Des montages photo et des vidéos humoristiques ont été largement partagés, alimentant davantage la viralité de cette étrange histoire.\r\n\r\nPourtant, ce qui aurait pu n\'être qu\'une blague de mauvais goût a pris une tournure inattendue lorsque plusieurs personnes ont affirmé avoir été témoins de ces étranges rencontres aviaires. Des témoignages ont afflué, décrivant des oiseaux portant des armes à feu et menaçant les passants avec une agressivité inhabituelle.\r\n\r\nFace à cette situation surréaliste, les autorités locales ont été contraintes de prendre au sérieux ces allégations farfelues. Des enquêtes ont été lancées dans les zones signalées pour tenter de démêler le vrai du faux et de comprendre l\'origine de ce phénomène aussi absurde qu\'inexplicable.\r\n\r\n\"C\'est l\'une des affaires les plus étranges auxquelles nous ayons été confrontés\", a déclaré le chef de la police locale lors d\'une conférence de presse. \"Nous traitons cette situation avec sérieux et nous cherchons à obtenir des réponses. Pour l\'instant, nous ne pouvons rien exclure.\"\r\n\r\nAlors que les spéculations vont bon train sur l\'origine de cette étrange rumeur, certains voient en cette histoire un simple divertissement, tandis que d\'autres s\'inquiètent des conséquences imprévues qu\'elle pourrait avoir. Une chose est sûre : les oiseaux armés de Kalachnikov ont réussi à captiver l\'imagination collective et à semer le doute dans l\'esprit des internautes du monde entier.', 'images/oiseau', '2024-02-01', '2024-02-15', 2, '#zoizo#pioupiou#militairesomalien', 'les-oiseaux-tuent.net');

-- --------------------------------------------------------

--
-- Structure de la table `auteur`
--

DROP TABLE IF EXISTS `auteur`;
CREATE TABLE IF NOT EXISTS `auteur` (
  `id_auteur` int NOT NULL AUTO_INCREMENT,
  `nom_auteur` varchar(128) NOT NULL,
  `prenom_auteur` varchar(128) NOT NULL,
  PRIMARY KEY (`id_auteur`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `auteur`
--

INSERT INTO `auteur` (`id_auteur`, `nom_auteur`, `prenom_auteur`) VALUES
(1, 'Mars', 'Rayan'),
(2, 'Bonnet', 'Antoine'),
(3, 'Chevalier', 'Clément');

-- --------------------------------------------------------

--
-- Structure de la table `contact`
--

DROP TABLE IF EXISTS `contact`;
CREATE TABLE IF NOT EXISTS `contact` (
  `id_contact` int NOT NULL AUTO_INCREMENT,
  `nom_contact` varchar(128) NOT NULL,
  `prenom_contact` varchar(128) NOT NULL,
  `mail` varchar(128) NOT NULL,
  PRIMARY KEY (`id_contact`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `contact`
--

INSERT INTO `contact` (`id_contact`, `nom_contact`, `prenom_contact`, `mail`) VALUES
(1, 'delch', 'gab', 'mail'),
(2, 'Delechamp', 'Gabriel', 'mail'),
(3, 'Delechamp', 'Gabriel', 'mail'),
(4, 'Delechamp', 'Gabriel', 'mail'),
(5, 'Delechamp', 'Gabriel', 'mail');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
